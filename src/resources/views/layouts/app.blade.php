<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="@yield('description', '丘の城 ロジカ亭 - 心安らぐ和の宿')">
    <meta name="keywords" content="@yield('keywords', '旅館,宿泊,温泉,和室,日本料理')">

    <title>@yield('title', '丘の城 ロジカ亭')</title>

    <!-- CSS Assets -->
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    @stack('styles')

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}">
</head>
<body>
    <header class="site-header">
        <nav class="main-navigation">
            @yield('navigation')
        </nav>
    </header>

    <main class="main-content">
        @yield('content')
    </main>

    <footer class="site-footer">
        @yield('footer')
    </footer>

    <!-- JavaScript Assets -->
    <script src="{{ asset('js/main.js') }}"></script>
    @stack('scripts')
</body>
</html>