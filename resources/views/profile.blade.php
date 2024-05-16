@extends('layout')

@section('content')
    <div class="profile">
        <div class="container">
            <div class="prof__head">
                <h3>Ваш профиль</h3>
                @if (Auth::user()->status == 'admin')
                    <a class="adminA" href="{{ route('adminPanel') }}">Админ панель</a>
                @endif
            </div>


            <div class="cont">
                <aside>

                    <div class="circle">

                        <div class="prof__img">
                            @if (!empty($user->img))
                                <img src="{{ asset('/storage/' . $user->img) }}" class="profImg" alt="camera">
                            @else
                                <img src="{{ asset('/storage/img/icons/camera.png') }}" alt="camera">
                            @endif

                        </div>

                        @if (empty($user->img))
                            <div class="prof__img_desk">
                                <p>Здесь могла бы быть ваша фотокарточка</p>
                                <form action="{{ route('profile.addPhoto', Auth::id()) }}" method="post"
                                    enctype="multipart/form-data">
                                    @csrf
                                    <input type="file" name="img">
                                    <input type="submit" value="Добавить фотографию">

                                </form>
                            </div>
                        @else
                            <div class="prof__img_desk">
                                <p>Изменить фото</p>
                                <form action="{{ route('profile.addPhoto', Auth::id()) }}" method="post"
                                    enctype="multipart/form-data">
                                    @csrf
                                    <input type="file" name="img">
                                    <input type="submit" value="Добавить фотографию">

                                </form>
                            </div>
                        @endif



                    </div>



                </aside>

                <div class="main__cont">
                    <div class="user_data">
                        <p>Ваш логин для входа: <br> <b>{{ $user->login }}</b></p>
                        <p class="date">Ваше имя: <br> <b>{{ $user->surname }}</b></p>
                        <p class="date">Ваша фамилия: <br> <b>{{ $user->patronymic }}</b></p>
                    </div>

                    <div class="app">
                        {{-- {{ dd($applicationsEx) }} --}}
                        @if (count($application))
                            <h3>Вы записывались на:</h3>

                            <table class="table table-striped price profile__app">
                                <thead>
                                    <tr>
                                        <th scope="col">Название Курса</th>
                                        <th scope="col">Стоимость</th>
                                        <th scope="col">Имя</th>
                                        <th scope="col">Фамилия</th>
                                        <th scope="col">Отчество</th>
                                        <th scope="col">Номер телефона</th>
                                        <th scope="col">Статус</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($application as $item)
                                        <tr>
                                            <td>{{ $item->course->name_course }}</td>
                                            <td>{{ $item->course->price_course }}</td>
                                            <td>{{ $item->user->login }}</td>
                                            <td>{{ $item->user->surname }}</td>
                                            <td>{{ $item->user->patronymic }}</td>
                                            <td>{{ $item->user->phone }}</td>
                                            <td>Оборенно</td>
                                        </tr>
                                    @endforeach

                                </tbody>
                            </table>
                        @elseif (count($applicationsEx))
                            <h3>Вы записывались на:</h3>

                            <table class="table table-striped price profile__app">
                                <thead>
                                    <tr>
                                        <th scope="col">Название Курса</th>
                                        <th scope="col">Стоимость</th>
                                        <th scope="col">Имя</th>
                                        <th scope="col">Фамилия</th>
                                        <th scope="col">Отчество</th>
                                        <th scope="col">Номер телефона</th>
                                        <th scope="col">Статус</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($applicationsEx as $item)
                                        <tr>
                                            <td>{{ $item->course->name_course }}</td>
                                            <td>{{ $item->course->price_course }}</td>
                                            <td>{{ $item->user->login }}</td>
                                            <td>{{ $item->user->surname }}</td>
                                            <td>{{ $item->user->patronymic }}</td>
                                            <td>{{ $item->user->phone }}</td>
                                            <td>Рассматривается</td>
                                        </tr>
                                    @endforeach

                                </tbody>
                            </table>
                        @else
                            <h2>Вы ещё не успели записать ни на один курс</h2>
                        @endif

                    </div>

                </div>
            </div>


        </div>
    </div>
@endsection
