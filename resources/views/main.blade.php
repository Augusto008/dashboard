<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{$title}}</title>

    {{-- Bootstrap 5.3.2 --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.css" rel="stylesheet">
</head>
<body class="d-flex justify-content-center align-items-center" style="width: 100vw; height: 100vh;">

    <a href="/{{$lang}}/login" style="font-size: 20vw;">
        <strong>Enter</strong>
    </a>
        
</body>
</html>
