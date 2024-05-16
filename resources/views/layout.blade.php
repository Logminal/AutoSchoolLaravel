<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('storage/css/style.css') }}">
    <link rel="stylesheet" href="storage/libs/bootstrap/css/bootstrap-reboot.min.css">
    <link rel="stylesheet" href="storage/libs/bootstrap/css/bootstrap-grid.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <title>Автошкола Профи</title>
</head>

<body>

    <header>
        <div class="container">
            <div class="row">
                <div class="col-3">
                    <div class="logo">
                        <a href="{{ route('home') }}"><img src=" {{ asset('storage/img/logo.png') }} "
                                alt=""></a>
                    </div>

                </div>



                <div class="col-6">
                    <div class="topmenu">
                        <a href="{{ route('home') }}">Главная</a>
                        <a href="{{ route('price') }}">Наши цены</a>
                        <a href="{{ route('instructor.index') }}">Инструктора</a>

                        @if (!empty(Auth::user()))
                            <a href="{{ route('profile.index') }}">Профиль</a>
                            <a href="{{ route('logOut') }}">Выйти</a>
                        @endif

                        @if (empty(Auth::user()))
                            <a href="{{ route('login.create') }}">Войти</a>
                            <a href="{{ route('reg.create') }}">Регистрация</a>
                        @endif





                    </div>
                </div>

                <div class="col-3">
                    <div class="phone">
                        <b>+7 (912) 312 89 25</b>
                        <p>Позвоните нам прямо сейчас!</p>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <main>
        @yield('content')
    </main>

    <footer>
        <h4>© 2020, Автошкола "ПРОФИ". Все права защищены.</h4>
    </footer>



</body>

</html>
