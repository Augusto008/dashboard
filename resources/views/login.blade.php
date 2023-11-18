<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{$title}}</title>

    {{-- Bootstrap 5.3.2 --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.css" rel="stylesheet">

    <style>

    </style>
</head>
<body class="bg-dark bg-gradient d-flex justify-content-center align-items-center" 
        style="width: 100vw; height: 100vh;">

    <div id="login-card" class="card rounded bg-light mw-50 mh-50" style="width: 80vw; max-width: 260px;">
        <img src="/assets/images/person.svg" class="card-img-top m-auto my-2" alt="logo" 
            style="width: 60%; height: 40vh; 
                    min-width: 100px; min-height: 120px; 
                    max-width: 360; max-height: 480;">
        <form class="card-body p-3" action="/{{$lang}}/dashboard">
            <input class="form-control bg-dark-subtle" type="email" name="email" placeholder="Email">
            <input class="form-control my-2 bg-dark-subtle" type="password" name="password" placeholder="Password">
            <button class="btn btn-primary d-flex align-self-end" type="submit">Enter</button>
        </form>
    </div>
        
</body>
</html>
