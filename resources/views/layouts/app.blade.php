<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <title>@yield('title')</title>
</head>
<body class = " " data-bs-theme="dark">
<ul class="nav nav-tabs">
    <li class="nav-item">
        <a class="nav-link active" aria-current="page" href="{{route('index')}}">Все группы</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{}}">Группа</a>
    </li>
    @if(isset($students))
    <li class="nav-item">
        <a class="nav-link ">Студенты</a>
    </li>
        @endif
</ul>
<div class="container text-center">

    @yield('content')

</div>
</body>
</html>