@extends('layout')

@section('content')
    {{-- @if ($errors->any())
        <ul>
            @foreach ($errors as $message)
                <li>
                    {{ $message }}
                </li>
            @endforeach
        </ul>
    @endif --}}

    <div class="register">
        <div class="reg">
            <h2>Начни учебу вместе с нами</h2>
            <form action="{{ route('reg.store') }}" method="POST">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $message)
                                <li>{{ $message }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif


                @csrf
                <div>
                    <label>
                        <b>Введите логин/имя:</b>
                    </label>
                    <input type="text" class="inpt" name="login">
                </div>

                <div>
                    <label>
                        <b>Введите свою фамилию:</b>
                    </label>
                    <input type="text" class="inpt" name="surname">
                </div>

                <div>
                    <label>
                        <b>Введите свое отчество:</b>
                    </label>
                    <input type="text" class="inpt" name="patronymic">
                </div>

                <div>
                    <label>
                        <b>Придумайте пароль:</b>
                    </label>
                    <input type="password" class="inpt" name="password">
                </div>

                <div>
                    <label>
                        <b>Введите свой номер телефона:</b>
                    </label>
                    <input type="text" class="inpt" name="phone">
                </div>
                <button class="reg_btn">Зарегистрироваться</button>
            </form>
        </div>
    </div>
@endsection
