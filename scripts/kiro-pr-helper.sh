#!/bin/bash

# Kiro AI Assistant用 Pull Request作成ヘルパー
# KiroがPull Requestを簡単に作成するための関数集

# 現在のブランチから自動的にPull Requestを作成
create_auto_pr() {
    local branch_name=$(git branch --show-current)
    local commit_msg=$(git log -1 --pretty=%s)

    # mainブランチの場合はエラー
    if [ "$branch_name" = "main" ]; then
        echo "❌ mainブランチからはPull Requestを作成できません"
        return 1
    fi

    # ブランチをプッシュ
    git push origin "$branch_name"

    # Pull Request作成
    gh pr create \
        --title "$commit_msg" \
        --body "Kiro AIアシスタントによって自動作成されたPull Request

## 📝 説明
このPull Requestには以下の変更が含まれています：

$(git log main.."$branch_name" --oneline --pretty=format:"- %s")

## 🔍 レビューポイント
- コード品質と規約準拠
- 機能性とテスト
- ドキュメント更新

---
*Kiro AIによって自動作成されました*" \
        --base main \
        --head "$branch_name"
}

# 特定のタイトルと説明でPull Requestを作成
create_custom_pr() {
    local title="$1"
    local description="$2"
    local branch_name=$(git branch --show-current)

    if [ -z "$title" ]; then
        echo "❌ タイトルが必要です"
        return 1
    fi

    git push origin "$branch_name"

    gh pr create \
        --title "$title" \
        --body "${description:-Kiro AIアシスタントによって自動作成されたPull Request}" \
        --base main \
        --head "$branch_name"
}

# Draft Pull Requestを作成
create_draft_pr() {
    local branch_name=$(git branch --show-current)
    local commit_msg=$(git log -1 --pretty=%s)

    git push origin "$branch_name"

    gh pr create \
        --title "[下書き] $commit_msg" \
        --body "🚧 **作業中**

このPull RequestはKiro AIアシスタントによって作成された下書きです。

## 📋 TODO
- [ ] 実装を完了する
- [ ] テストを追加する
- [ ] ドキュメントを更新する
- [ ] レビュー準備完了

---
*完了時にレビュー準備完了としてマークされます*" \
        --base main \
        --head "$branch_name" \
        --draft
}

# 使用方法を表示
show_usage() {
    echo "Kiro PR ヘルパーコマンド:"
    echo "  auto                    - 自動タイトル・説明でPR作成"
    echo "  custom タイトル [説明]   - カスタムタイトル・説明でPR作成"
    echo "  draft                   - 下書きPR作成"
    echo "  help                    - このヘルプを表示"
}

# 引数に応じて関数を実行
case "$1" in
    "auto")
        create_auto_pr
        ;;
    "custom")
        create_custom_pr "$2" "$3"
        ;;
    "draft")
        create_draft_pr
        ;;
    "help"|"")
        show_usage
        ;;
    *)
        echo "❌ 不明なコマンド: $1"
        show_usage
        exit 1
        ;;
esac