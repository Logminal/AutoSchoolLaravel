@extends('layout')

@section('content')
    <div class="admin">
        <div class="container">

            <div class="app">
                <div class="adimn__head">
                    <div>

                        <a href="{{ route('price') }}">
                            <h5>Цены</h5>
                        </a>

                        <h2>Панель администратора</h2>

                        <a href="{{ route('instructor.index') }}">
                            <h5>Инструктора</h5>
                        </a>
                    </div>

                    <div class="admin__head__head">
                        <h3>Одобренные заявки</h3>
                    </div>



                </div>

                <div class='admin_panel'>

                    <table class="table table-striped price">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Название Курса</th>
                                <th scope="col">Стоимость</th>
                                <th scope="col">Имя</th>
                                <th scope="col">Фамилия</th>
                                <th scope="col">Отчество</th>
                                <th scope="col">Номер телефона</th>
                                <th scope="col"></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($app as $elem)
                                <tr>
                                    <th scope='row'>{{ $elem['id'] }}</th>
                                    <td>{{ $elem->course->name_course }}</td>
                                    <td>{{ $elem->course->price_course }}</td>
                                    <td>{{ $elem->user->login }}</td>
                                    <td>{{ $elem->user->surname }}</td>
                                    <td>{{ $elem->user->patronymic }}</td>
                                    <td>{{ $elem->user->phone }}</td>
                                    <td>
                                        <form action="{{ route('adminDeleteApp', $elem['id']) }}" method="post">
                                            @csrf
                                            <button class="accept btn">Удалить заявку</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                </div>
            </div>

            @if (count($data))
                <div class="appEx">
                    <h3>Заявки на рассмотрение</h3>
                    <div class='admin_panel'>

                        <table class="table table-striped price">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Название Курса</th>
                                    <th scope="col">Стоимость</th>
                                    <th scope="col">Имя</th>
                                    <th scope="col">Фамилия</th>
                                    <th scope="col">Отчество</th>
                                    <th scope="col">Номер телефона</th>
                                    <th scope="col"></th>
                                    <th scope="col"></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($data as $elem)
                                    <tr>
                                        <th scope='row'>{{ $elem['id'] }}</th>
                                        <td>{{ $elem->course->name_course }}</td>
                                        <td>{{ $elem->course->price_course }}</td>
                                        <td>{{ $elem->user->login }}</td>
                                        <td>{{ $elem->user->surname }}</td>
                                        <td>{{ $elem->user->patronymic }}</td>
                                        <td>{{ $elem->user->phone }}</td>
                                        <td class="btnA"><a class='accept btn'
                                                href='{{ route('app.store', $elem['id']) }}'>Принять
                                                заявку</a></td>
                                        <td>
                                            <form action="{{ route('adminDelete', $elem['id']) }}" method="post">
                                                @csrf
                                                {{-- <input type="submit" value=""> --}}
                                                <button class="accept btn">Отклонить заявку</button>
                                            </form>
                                            {{-- <a class='accept' href='{{ route('adminDelete', $elem['id']) }}'></a> --}}
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>

                    </div>
                </div>
            @else
                <h3>Новых заявок пока не поступало</h3>
            @endif

        </div>
    </div>
@endsection
