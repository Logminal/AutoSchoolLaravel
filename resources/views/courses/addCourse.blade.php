@extends('layout')

@section('content')
    <div class="register">
        <div class="reg">
            <h2>Добавить новый курс</h2>
            <form action="{{ route('price.store') }}" method="POST">
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
                    <input type="text" class="inpt" name="name_course">
                </div>

                <div>
                    <label>
                        <b>Цена курса</b>
                    </label>
                    <input type="text" class="inpt" name="price_course">
                </div>

                <div>
                    <label>
                        <b>Категория</b>
                    </label>
                    <select name="category" id="category">
                        <option>Выберите категорию</option>
                        <option value="A">A</option>
                        <option value="B">B</option>
                    </select>
                    {{-- <input type="text" class="inpt" name="price_course"> --}}
                </div>

                <button class="reg_btn">Добавить</button>
            </form>
        </div>
    </div>
@endsection
