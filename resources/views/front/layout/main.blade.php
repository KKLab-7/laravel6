<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @yield('title')


    <link rel="stylesheet" type="text/css" href="{{ asset('/assets/css/header.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/assets/css/footer.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/assets/css/top.css') }}">

    <script type="text/javascript" href="{{ asset('/assets/js/jquery.js') }}">

    </script>
</head>
<body>
    @include('front.parts.header')

    @yield('content')

    @include('front.parts.footer')
</body>
</html>
