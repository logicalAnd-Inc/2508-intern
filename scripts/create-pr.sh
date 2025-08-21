#!/bin/bash

# GitHub CLI Pull Request 自動作成スクリプト
# 使用方法: ./scripts/create-pr.sh [ブランチ名] [タイトル] [説明]

set -e

# 色付きメッセージ用の関数
print_success() {
    echo -e "\033[32m✅ $1\033[0m"
}

print_info() {
    echo -e "\033[34mℹ️  $1\033[0m"
}

print_error() {
    echo -e "\033[31m❌ $1\033[0m"
}

print_warning() {
    echo -e "\033[33m⚠️  $1\033[0m"
}

# 引数の確認
if [ $# -lt 1 ]; then
    print_error "使用方法: $0 <ブランチ名> [タイトル] [説明]"
    exit 1
fi

BRANCH_NAME="$1"
TITLE="${2:-機能: $(echo $BRANCH_NAME | sed 's/feature\///g' | sed 's/-/ /g')}"
DESCRIPTION="${3:-Kiro AI アシスタントによって自動作成されたPull Request}"

print_info "Pull Request作成プロセスを開始します..."

# 現在のブランチを確認
CURRENT_BRANCH=$(git branch --show-current)
print_info "現在のブランチ: $CURRENT_BRANCH"

# 指定されたブランチに切り替え（必要に応じて）
if [ "$CURRENT_BRANCH" != "$BRANCH_NAME" ]; then
    print_info "ブランチを切り替えます: $BRANCH_NAME"
    git checkout "$BRANCH_NAME" || {
        print_error "ブランチの切り替えに失敗しました: $BRANCH_NAME"
        exit 1
    }
fi

# 変更があるかチェック
if git diff --quiet && git diff --cached --quiet; then
    print_warning "変更が検出されませんでした。変更をコミットしているか確認してください。"
fi

# ブランチをプッシュ
print_info "ブランチをリモートにプッシュしています..."
git push origin "$BRANCH_NAME" || {
    print_error "ブランチのプッシュに失敗しました: $BRANCH_NAME"
    exit 1
}

# Pull Request作成
print_info "Pull Requestを作成しています..."

# 詳細な説明を生成
DETAILED_DESCRIPTION="$DESCRIPTION

## 🔄 実装内容
$(git log main.."$BRANCH_NAME" --oneline --pretty=format:"- %s")

## 📋 チェックリスト
- [ ] コードがプロジェクトのコーディング規約に従っている
- [ ] テストが追加・更新されている
- [ ] ドキュメントが更新されている
- [ ] ローカル環境でテスト済み

## 🧪 テスト項目
以下の項目をテストしてください：
- [ ] 機能が期待通りに動作する
- [ ] 破壊的変更が導入されていない
- [ ] レスポンシブデザイン（該当する場合）

---
*このPull RequestはKiro AIアシスタントによって自動作成されました*"

# Pull Request作成
PR_URL=$(gh pr create \
    --title "$TITLE" \
    --body "$DETAILED_DESCRIPTION" \
    --base main \
    --head "$BRANCH_NAME" \
    --assignee @me)

if [ $? -eq 0 ]; then
    print_success "Pull Requestが正常に作成されました！"
    print_info "URL: $PR_URL"

    # Pull Request詳細を表示
    print_info "Pull Request詳細:"
    gh pr view --web
else
    print_error "Pull Requestの作成に失敗しました"
    exit 1
fi

print_success "Pull Request自動作成が完了しました！"