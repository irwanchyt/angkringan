<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>@yield('title')</title>

    @include('pages.includes.css')

</head>
<body>

    @include('pages.layouts.navbar')
   
        <div class="container">
            @yield('content')
        </div>


    @include('pages.includes.js')
    @stack('custom_js')
</body>
</html>