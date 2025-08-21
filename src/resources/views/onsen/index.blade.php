@extends('layouts.app')

@section('title', '温泉のご案内 - 丘の城 ロジカ亭')

@section('description', '丘の城 ロジカ亭の温泉施設のご案内。大浴場、露天風呂、貸切風呂をご用意しております。')

@section('keywords', '温泉,大浴場,露天風呂,貸切風呂,アルカリ性単純温泉')

@section('navigation')
<div class="nav-container">
    <div class="nav-logo">
        <h1><a href="{{ route('home') }}">丘の城 ロジカ亭</a></h1>
    </div>
    <ul class="nav-menu">
        <li><a href="{{ route('home') }}">ホーム</a></li>
        <li><a href="{{ route('room.index') }}">客室</a></li>
        <li><a href="{{ route('onsen.index') }}" class="active">温泉</a></li>
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
            源泉かけ流しの天然温泉で、日頃の疲れを癒してください。
            大浴場、露天風呂、貸切風呂をご用意しております。
        </p>
    </div>
</section>

<!-- Onsen Section -->
<section class="facilities-section">
    <div class="container">
        <h2 class="section-title">{{$title}}施設</h2>

        <div class="facilities-grid">
            @foreach($onsens as $onsen)
            <div class="facility-item">
                <h3>{{ $onsen['name'] }}</h3>
                <p>
                    @if($onsen['name'] == '大浴場')
                        広々とした大浴場で、ゆったりと温泉をお楽しみいただけます。
                        内湯からは美しい庭園をご覧いただけます。
                    @elseif($onsen['name'] == '露天風呂')
                        四季折々の自然を感じながら、開放的な露天風呂をお楽しみください。
                        夜は星空を眺めながらの入浴も格別です。
                    @else
                        プライベートな空間で、ご家族やカップルでゆっくりとお過ごしいただけます。
                        特別な時間をお楽しみください。
                    @endif
                </p>
                <ul class="facility-details">
                    <li>営業時間：{{ $onsen['hours'] }}</li>
                    <li>泉質：{{ $onsen['spring_quality'] }}</li>
                    <li>効能：{{ $onsen['benefits'] }}</li>
                    <li>予約：{{ $onsen['reservation'] }}</li>
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