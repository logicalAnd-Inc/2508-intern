@extends('layouts.app')

@section('title', 'お食事のご案内 - 丘の城 ロジカ亭')

@section('description', '丘の城 ロジカ亭のお食事のご案内。割烹料理、懐石料理、日本料理鉄板焼をご用意しております。')

@section('keywords', 'お食事,割烹料理,懐石料理,鉄板焼,日本料理,レストラン')

@section('navigation')
<div class="nav-container">
    <div class="nav-logo">
        <h1><a href="{{ route('home') }}">丘の城 ロジカ亭</a></h1>
    </div>
    <ul class="nav-menu">
        <li><a href="{{ route('home') }}">ホーム</a></li>
        <li><a href="{{ route('room.index') }}">客室</a></li>
        <li><a href="{{ route('onsen.index') }}">温泉</a></li>
        <li><a href="{{ route('restaurant.index') }}" class="active">お食事</a></li>
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
            伝統的な日本料理から鉄板焼まで、厳選された食材で心を込めてお作りいたします。
            特別な時間を彩る、格別なお食事をご堪能ください。
        </p>
    </div>
</section>

<!-- Restaurant Section -->
<section class="facilities-section">
    <div class="container">
        <h2 class="section-title">{{$title}}処</h2>

        <div class="facilities-grid">
            @foreach($restaurants as $restaurant)
            <div class="facility-item">
                <h3>{{ $restaurant['name'] }}</h3>
                <p>
                    @if($restaurant['name'] == '割烹料理')
                        職人が目の前で調理する本格的な割烹料理。
                        新鮮な海の幸と山の幸を使用した、季節感あふれる逸品をご堪能ください。
                    @elseif($restaurant['name'] == '懐石料理')
                        茶道の精神を込めた伝統的な懐石料理。
                        一期一会の心でおもてなしする、格式高いお食事をお楽しみください。
                    @else
                        厳選された和牛を使用した鉄板焼料理。
                        シェフの華麗な技と共に、最高級の食材をお楽しみいただけます。
                    @endif
                </p>
                <ul class="facility-details">
                    <li>営業時間：{{ $restaurant['hours'] }}</li>
                    <li>料金：{{ $restaurant['price'] }}</li>
                    <li>予約：{{ $restaurant['reservation'] }}</li>
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