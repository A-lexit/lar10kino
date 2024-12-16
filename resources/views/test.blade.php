<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">


    {{--<script type="text/javascript" src="{{ resource_path('js/app.min.js') }}"></script>--}}
    {{--@vite(['/resources/assets/css/test.css'])--}}
    @vite('resources/js/app.js')
    {{--<link rel="stylesheet" href="{{ asset('test.css') }}">
    <link rel="stylesheet" href="/test.css'">--}}

    <link rel="stylesheet" href="{{ asset('/build/assets/css/app-NSOLAWus.css') }}">

    <title>Document</title>

</head>
<body>

<h1 class="backgroundd">Hello World</h1>

{{--<style>

    .backgroundd {
        color: red;
    }
</style>--}}

</body>
</html>
