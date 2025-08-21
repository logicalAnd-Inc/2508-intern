@extends('layouts.app')

@section('title', 'アミューズメントのご案内 - 丘の城 ロジカ亭')

@section('description', '丘の城 ロジカ亭のアミューズメント施設のご案内。日本庭園、ラウンジ、茶室をご用意しております。')

@section('keywords', 'アミューズメント,日本庭園,ラウンジ,茶室,施設')

@section('navigation')
<div class="nav-container">
    <div class="nav-logo">
        <h1><a href="{{ route('home') }}">丘の城 ロジカ亭</a></h1>
    </div>
    <ul class="nav-menu">
        <li><a href="{{ route('home') }}">ホーム</a></li>
        <li><a href="{{ route('room.index') }}">客室</a></li>
        <li><a href="{{ route('onsen.index') }}">温泉</a></li>
        <li><a href="{{ route('restaurant.index') }}">お食事</a></li>
        <li><a href="{{ route('amusement.index') }}" class="active">アミューズメント</a></li>
    </ul>
</div>
@endsection

@section('content')
<!-- Hero Section -->
<section class="hero-section">
    <div class="hero-content">
        <h1 class="hero-title">{{$title}}のご案内</h1>
        <p class="hero-description">
            四季折々の美しさを楽しめる日本庭園と、
            ゆったりとお過ごしいただけるラウンジスペース。
        </p>
    </div>
</section>

<!-- Amusement Section -->
<section class="facilities-section">
    <div class="container">
        <h2 class="section-title">{{$title}}施設</h2>

        <div class="facilities-grid">
            @foreach($amusements as $amusement)
            <div class="facility-item">
                <h3>{{ $amusement['name'] }}</h3>
                <p>
                    @if($amusement['name'] == '日本庭園')
                        四季折々の美しさを楽しめる伝統的な日本庭園。
                        散策路を歩きながら、心安らぐひとときをお過ごしください。
                    @elseif($amusement['name'] == 'ラウンジ')
                        ゆったりとしたソファでお寛ぎいただけるラウンジスペース。
                        無料Wi-Fi完備で、読書やお仕事にもご利用いただけます。
                    @else
                        本格的な茶室で、日本の伝統文化をご体験いただけます。
                        茶道の心を感じながら、静寂のひとときをお楽しみください。
                    @endif
                </p>
                <ul class="facility-details">
                    <li>営業時間：{{ $amusement['hours'] }}</li>
                    <li>利用料金：{{ $amusement['price'] }}</li>
                    <li>予約：{{ $amusement['reservation'] }}</li>
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