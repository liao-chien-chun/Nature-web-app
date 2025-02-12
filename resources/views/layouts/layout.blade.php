<!DOCTYPE html>
<html lang="zh-TW">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>自然商行銷售系統</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap/5.1.3/bootstrap.css') }}">

    @stack('styles') {{-- 允許子模板加入css --}}
</head>
<body>

    <div class="container mt-4">
        @yield('content') <!-- 子頁面 -->
    </div>

    <!-- jQuery -->
    <script src="{{ asset('assets/js/jquery/jquery-3.7.0.min.js') }}"></script>
    <!-- Popper.js -->
    <script src="{{ asset('assets/js/bootstrap/5.1.3/popper.js') }}"></script>
    <!-- Bootstrap JS -->
    <script src="{{ asset('assets/js/bootstrap/5.1.3/bootstrap.js') }}"></script>
    @stack('scripts')  {{-- 允許子模板加入額外的 JS --}}
</body>
</html>