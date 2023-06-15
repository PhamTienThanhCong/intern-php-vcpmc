<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <script src="https://kit.fontawesome.com/c71231073e.js" crossorigin="anonymous"></script>
    <link rel="shortcut icon" href="{{ asset('logo/favicon.ico') }}" type="image/x-icon">
    <link rel="stylesheet" href="{{ asset('assets/styles/main.css') }}">
    <title>
        @yield('title')
    </title>
</head>
<body>
    @include('components.navbar')
    <div class="container">
        @include('components.header')
        @yield('content')
    </div>
    @include('components.footer')
</body>
<script src="{{ asset('assets/javascripts/main.js') }}"></script>
</html>