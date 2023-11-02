<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="decription" content="Welcome to capitalinvestmentpro,the premier cryptocurrency broker company that empowers individuals and businesses to navigate the exciting world of digital currencies with ease and peace of mind"/>
        <meta name="keywords" content="Capitalinvestment pro, capitalinvestmentpro.com,">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" sizes="180x180" href="{{url("apple-touch-icon.png")}}">
        <link rel="icon" type="image/png" sizes="32x32" href="{{url('/favicon-32x32.png')}}">
        <link rel="icon" type="image/png" sizes="16x16" href="{{url('/favicon-16x16.png')}}">
        <link rel="manifest" href="{{url('/site.webmanifest')}}">
        <title> Capital Investment Pro - @yield('title')  </title>


        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <!-- Styles -->
        <link rel="stylesheet" href="{{url('/css/bootstrap.min.css')}}"/>
        <link rel="stylesheet" href="{{url('/css/app.css')}}" type="text/css"/>

    </head>
    <body>


        @include('includes.nav')

    <div class="container">
        @yield('content')
    </div>


        @include('includes.footer')



    {!! NoCaptcha::renderJs() !!}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    </body>
</html>
