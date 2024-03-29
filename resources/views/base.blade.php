<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('storage/css/style.css')}}">
    <title> Черга </title>
</head>
<body>
   @include('includes.header')
   
    <div class="content">
        @yield('content')
    </div>
    
    @include('includes.footer')
    <script
        src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
        crossorigin="anonymous">
    </script>
    <script src="{{asset('storage/script/script.js')}}"></script>
</body>
</html>