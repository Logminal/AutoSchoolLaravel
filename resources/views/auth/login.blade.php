@extends('layout')

@section('content')
    @if ($errors->any())
        <ul>
            @foreach ($errors as $message)
                <li>
                    {{ $message }}
                </li>
            @endforeach
        </ul>
    @endif

    <div class="auth">
        <div class="container">
            <div class="login">
                <h2>Продолжайте учиться вместе с нами</h2>
                <form action="{{ route('login.store') }}" method="POST">

                    <div>
                        <label>
                            <b>Введите логин</b>
                        </label>
                        <input type="text" name="login" class="inp">
                    </div>

                    <div>
                        <label>
                            <b>Введите пароль</b>
                        </label>
                        <input type="password" name="password">
                    </div>
                    <button class="log_btn">Войти</button>
                    @csrf
                </form>
            </div>
        </div>
    </div>
@endsection
