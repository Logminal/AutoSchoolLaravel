@extends('layout')

@section('content')
    <div class="register">
        <div class="reg">
            <h2>Добавить нового инструстора</h2>
            <form action="{{ route('instructor.store') }}" method="POST" enctype="multipart/form-data">
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
                        <b>Добавте фотографию</b>
                    </label>
                    <input type="file" class="inpt" name="img" style="margin-left: 14.2%;">
                </div>

                <div>
                    <label>
                        <b>Введите фамилию и имя:</b>
                    </label>
                    <input type="text" class="inpt" name="name" style="margin-left: 7%;">
                </div>

                <div>
                    <label>
                        <b>Введите стаж вождения:</b>
                    </label>
                    <input type="text" class="inpt" name="experience" style="margin-left: 8%;">
                </div>

                <div>
                    <label>
                        <b>Введите стаж работы:</b>
                    </label>
                    <input type="text" class="inpt" name="driving_experience" style="margin-left: 12%;">
                </div>
                <button class="reg_btn">Добавить</button>
            </form>
        </div>
    </div>
@endsection
