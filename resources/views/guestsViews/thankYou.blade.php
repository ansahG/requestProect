<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title> Thank you</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <style>
        body {
            font-family: 'Nunito';
            margin: 0;
            padding: 0;
       }
       .banner{
        width: 100%;
        height: 100vh;
        overflow: hidden;
        display: flex;
        justify-content: center;
        align-items: center;
       }
       .banner video{
        position: absolute;
        top: 0;
        left: 0;
        object-fit: cover;
        width: 100%;
        height: 100%;
        pointer-events: none;
       }
       .banner .content{
        position: relative;
        z-index: 1;
        text-align: center;
        margin: 0 auto;

       }
        .banner .content h1{
        margin: 0;
        font-size: 4.5em;
        text-transform: center;
        color: #fff;

       }

    </style>
</head>
<body style="background-attachment:;">
{{-- 
        @if(session()->has('Downloding'))
            <h3>
   <meta charset="utf-8" http-equiv="refresh" content="5;url{{ session()->get('Downloding') }}">
            </h3>
        @endif --}}

    
{{--  url({{ asset('thankYou.mp4') }}); --}}
    <div class="container-fluid">
        <div class="banner col-12">
            <video autoplay muted loop>
                <source src="{{ asset('thankYou.mp4') }}" type="video/mp4">
            </video>
            <div class="content">
                <h1 style="text-decoration: underline"> Thank you for choosing <span style="color:red; background-color:white;text-decoration: underline"> {{ config('app.name') }}</span></h1>

                    <br>
                <h2 style="font-style: italic; color: whitesmoke;"> Enjoy ... </h2>
            </div>
        </div>
    </div>
</body>
</html>
