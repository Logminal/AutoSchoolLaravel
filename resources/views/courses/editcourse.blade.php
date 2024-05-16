@extends('layout')

@section('content')
    <div class="register">
        <div class="reg">
            <h2>Редактировать курс <b>{{ $course->name_course }}</b> </h2>
            <form action="{{ route('price.update', $course->id) }}" method="POST">
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
                        <b>Название курса</b>
                    </label>
                    <input type="text" class="inpt" name="name_course" value="{{ $course->name_course }}"
                        style="margin-left: 14.2%;">
                </div>

                <div>
                    <label>
                        <b>Цена курса</b>
                    </label>
                    <input type="text" class="inpt" name="price_course" value="{{ $course->price_course }}"
                        style="margin-left: 20%;">
                </div>

                <button class="reg_btn">Добавить</button>
            </form>
        </div>
    </div>
@endsection
