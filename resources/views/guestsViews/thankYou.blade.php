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
/*            background: {{ url('thankYou.mp4') }};
*/        }
    </style>
</head>
<body style="background-attachment:;">
    
{{--  url({{ asset('thankYou.mp4') }}); --}}
    <div class="container-fluid my-5 pt-5 px-5">
        <div class="row justify-content-center px-4">
            <div class="col-md-12 col-lg-9">
                
                <h2> Thank you for choosing </h2>
             <iframe src="{{ asset('thankYou.mp4') }}"></iframe>
            </div>
        </div>
    </div>
</body>
</html>
