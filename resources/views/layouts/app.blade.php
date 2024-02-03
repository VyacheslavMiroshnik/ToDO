<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
    <title> @yield('title') </title>
</head>

<body class = " " data-bs-theme="dark">
    <div class="container mb-4 mt-4 m-auto">
        <nav class="navbar  navbar-dark bg-dark mb-4">
            <div class="container-fluid">
                <a href="{{ route('index') }}"
                   class="navbar-brand me-auto ">Главная</a>
                @guest
                <a href="{{ route('register') }}"
                   class="nav-item nav-link me-3 ">Регистрация</a>
                <a href="{{ route('login') }}"
                   class="nav-item nav-link">Вход</a>
                @endguest
                @auth

                    <a href="{{ route('user') }}" class="nav-item nav-link me-3">Информация о пользователе</a>

                    <form action="{{ route('logout') }}" method="POST"
                      class="form-inline">
                    @csrf
                    <input type="submit" class="btn btn-danger"
                           value="Выход">
                </form>
                @endauth
            </div>
        </nav>
        @yield('content')
    </div>
</body>

</html>
