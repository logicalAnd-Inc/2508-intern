@extends('layouts.app')

@section('title', '丘の城 ロジカ亭 - 心安らぐ和の宿')

@section('description', '丘の城 ロジカ亭は、美しい自然に囲まれた心安らぐ和の宿です。温泉、和室、日本料理をお楽しみいただけます。')

@section('keywords', '丘の城 ロジカ亭,旅館,宿泊,温泉,和室,日本料理,リラクゼーション')

@section('navigation')
<div class="nav-container">
    <div class="nav-logo">
        <h1>丘の城 ロジカ亭</h1>
    </div>
    <ul class="nav-menu">
        <li><a href="#home">ホーム</a></li>
        <li><a href="">客室</a></li>
        <li><a href="">温泉</a></li>
        <li><a href="">お食事</a></li>
        <li><a href="">アミューズメント</a></li>
        <li><a href="#news">お知らせ</a></li>
        <li><a href="#access">アクセス</a></li>
    </ul>
</div>
@endsection

@section('content')
<!-- Hero Section -->
<section class="hero-section" id="home">
    <div class="hero-content">
        <h1 class="hero-title">丘の城 ロジカ亭</h1>
        <p class="hero-catchphrase">心安らぐ和の宿で、特別なひとときを</p>
        <p class="hero-description">
            美しい自然に囲まれた静寂の中で、日本の伝統的なおもてなしと
            現代の快適さが調和した、心温まる滞在をお約束いたします。
        </p>
    </div>
</section>

<!-- Facilities Section -->
<section class="facilities-section" id="facilities">
    <div class="container">
        <h4 class="section-title">施設のご案内</h4>

        <div class="facilities-grid">
            <div class="facility-item">
                <h3>温線</h3>
                <p>
                    源泉かけ流しの天然温泉で、日頃の疲れを癒してください。
                    大浴場と露天風呂をご用意しております。
                </p>
                <ul class="facility-details">
                    <li>営業時間：6:00-10:00 / 15:00-24:00</li>
                    <li>泉質：アルカリ性単純温泉</li>
                    <li>効能：神経痛、筋肉痛、関節痛</li>
                </ul>
            </div>

            <div class="facility-item">
                <h3>客質</h3>
                <p>
                    伝統的な和室から洋室まで、様々なタイプのお部屋をご用意。
                    全室から美しい庭園をご覧いただけます。
                </p>
                <ul class="facility-details">
                    <li>和室：8畳〜12畳（2-6名様）</li>
                    <li>洋室：ツイン・ダブル（1-2名様）</li>
                    <li>特別室：和洋室（2-4名様）</li>
                </ul>
            </div>

            <div class="facility-item">
                <h3>お食字</h3>
                <p>
                    地元の新鮮な食材を使用した季節の会席料理を、
                    お部屋または個室のお食事処でお楽しみください。
                </p>
                <ul class="facility-details">
                    <li>割烹料理：18:00-20:00（最終入場）</li>
                    <li>懐石料理：18:00-21:00</li>
                    <li>日本料理 鉄板焼：要予約</li>
                </ul>
            </div>

            <div class="facility-item">
                <h3>アミューズメント</h3>
                <p>
                    四季折々の美しさを楽しめる日本庭園と、
                    ゆったりとお過ごしいただけるラウンジスペース。など多数の施設をお楽しみいただけます。
                </p>
                <ul class="facility-details">
                    <li>日本庭園：24時間散策可能</li>
                    <li>ラウンジ：6:00-23:00</li>
                    <li>茶室: 要予約</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- News Section -->
<section class="news-section" id="news">
    <div class="container">
        <h5 class="section-title">お知らせ</h5>
        <div class="news-list">
            <div class="news-item">
                <span class="news-date">2024.12.15</span>
                <span class="news-category">お知らせ</span>
                <span class="news-title">年末年始の営業について</span>
            </div>
            <div class="news-item">
                <span class="news-date">2024.11.20</span>
                <span class="news-category">イベント</span>
                <span class="news-title">冬の特別プラン開始のお知らせ</span>
            </div>
            <div class="news-item">
                <span class="news-date">2024.10.30</span>
                <span class="news-category">お知らせ</span>
                <span class="news-title">紅葉シーズンのご案内</span>
            </div>
            <div class="news-item">
                <span class="news-date">2024.09.15</span>
                <span class="news-category">施設</span>
                <span class="news-title">露天風呂リニューアル完了のお知らせ</span>
            </div>
            <div class="news-item">
                <span class="news-date">2024.08.01</span>
                <span class="news-category">お料理</span>
                <span class="news-title">夏の特別会席メニューのご案内</span>
            </div>
        </div>
    </div>
</section>

<!-- Location & Access Section -->
<section class="access-section" id="access">
    <div class="container">
        <h2 class="section-title">アクセス・周辺情報</h2>

        <div class="access-content">
            <div class="access-info">
                <h3>所在地</h3>
                <p>〒123-4567<br>
                   静岡県○○市○○町1-2-3</p>

                <h3>交通アクセス</h3>
                <ul>
                    <li>JR○○駅より車で15分</li>
                    <li>○○高速道路○○ICより車で10分</li>
                    <li>無料送迎バス運行（要予約）</li>
                </ul>

                <h3>周辺観光</h3>
                <ul>
                    <li>○○神社（徒歩10分）</li>
                    <li>○○湖（車で5分）</li>
                    <li>○○美術館（車で20分）</li>
                </ul>
            </div>

            <div class="contact-info">
                <h3>お問い合わせ</h3>
                <p>
                    電話：0123-45-6789<br>
                    <strong>受付時間：</strong>9:00-18:00<br>
                    <strong>定休日：</strong>年中無休
                </p>

                <h3>チェックイン・アウト</h3>
                <p>
                    <strong>チェックイン：</strong>15:00-18:00<br>
                    チェックアウト：10:00まで
                </p>
            </div>
        </div>
    </div>
</section>
@endsection

@section('footer')
<div class="footer-content">
    <div class="footer-info">
        <h3>丘の城 ロジカ亭</h3>
        <p>〒123-4567 静岡県○○市○○町1-2-3</p>
        <p>TEL: 0123-45-6789</p>
    </div>
    <div class="footer-links">
        <ul>
            <li><a href="#home">ホーム</a></li>
            <li><a href="">客室</a></li>
            <li><a href="">温泉</a></li>
            <li><a href="">お食事</a></li>
            <li><a href="">アミューズメント</a></li>
            <li><a href="#news">お知らせ</a></li>
            <li><a href="#access">アクセス</a></li>
        </ul>
    </div>
    <div class="footer-copyright">
        <p>&copy; 2024 丘の城 ロジカ亭. All rights reserved.</p>
    </div>
</div>
@endsection