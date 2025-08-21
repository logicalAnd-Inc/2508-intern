@extends('layouts.app')

@section('title', '客室のご案内 - 丘の城 ロジカ亭')

@section('description', '丘の城 ロジカ亭の客室のご案内。和室、洋室、特別室をご用意しております。')

@section('keywords', '客室,和室,洋室,特別室,宿泊')

@section('navigation')
<div class="nav-container">
    <div class="nav-logo">
        <h1><a href="{{ route('home') }}">丘の城 ロジカ亭</a></h1>
    </div>
    <ul class="nav-menu">
        <li><a href="{{ route('home') }}">ホーム</a></li>
        <li><a href="{{ route('room.index') }}" class="active">客室</a></li>
        <li><a href="{{ route('onsen.index') }}">温泉</a></li>
        <li><a href="{{ route('restaurant.index') }}">お食事</a></li>
        <li><a href="{{ route('amusement.index') }}">アミューズメント</a></li>
    </ul>
</div>
@endsection

@section('content')
<!-- Hero Section -->
<section class="hero-section">
    <div class="hero-content">
        <h1 class="hero-title">{{$title}}のご案内</h1>
        <p class="hero-description">
            伝統的な和室から洋室まで、様々なタイプのお部屋をご用意。
            全室から美しい庭園をご覧いただけます。
        </p>
    </div>
</section>

<!-- Room Section -->
<section class="facilities-section">
    <div class="container">
        <h2 class="section-title">{{$title}}タイプ</h2>

        <div class="facilities-grid">
            @foreach($rooms as $room)
            <div class="facility-item">
                <h3>{{ $room['name'] }}</h3>
                <p>
                    @if($room['name'] == '和室')
                        伝統的な畳のお部屋で、日本の心を感じながらお寛ぎいただけます。
                        布団でのお休みで、より深いリラクゼーションを。
                    @elseif($room['name'] == '洋室')
                        モダンで快適なベッドルームをご用意。
                        ビジネスでのご利用にも最適です。
                    @else
                        和と洋の良さを併せ持つ特別なお部屋。
                        ご家族やグループでのご宿泊に最適です。
                    @endif
                </p>
                <ul class="facility-details">
                    <li>部屋の広さ：{{ $room['size'] }}</li>
                    <li>定員数：{{ $room['capacity'] }}</li>
                    <li>料金：{{ $room['price'] }}</li>
                    <li>会員限定：{{ $room['member_only'] }}</li>
                </ul>
            </div>
            @endforeach
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
            <li><a href="{{ route('home') }}">ホーム</a></li>
            <li><a href="{{ route('room.index') }}">客室</a></li>
            <li><a href="{{ route('onsen.index') }}">温泉</a></li>
            <li><a href="{{ route('restaurant.index') }}">お食事</a></li>
            <li><a href="{{ route('amusement.index') }}">アミューズメント</a></li>
        </ul>
    </div>
    <div class="footer-copyright">
        <p>&copy; 2024 丘の城 ロジカ亭. All rights reserved.</p>
    </div>
</div>
@endsection