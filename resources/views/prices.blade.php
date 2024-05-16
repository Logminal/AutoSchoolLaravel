@extends('layout')

@section('content')
    <div class="prices">
        <div class="logo__head">
            <div class="logo__text">
                <h2>Цены</h2>
            </div>
            <div class="overlay"></div>
        </div>

        <div class="container">
            <div class="cont__prices">

                @foreach ($courses as $course)
                    <div class="categories">

                        <div class="categories__item" data-bs-toggle="collapse" href="#collapseExample{{ $course->id }}">
                            <h3>{{ $course->name_course }}</h3>
                            <div class="right">
                                <p>
                                    {{ $course->price_course }} ₽
                                </p>


                                <img src="{{ asset('/storage/img/arrow.png') }}" alt="">
                            </div>
                        </div>

                        <div class="collapse" id="collapseExample{{ $course->id }}">
                            <div class="card card-body">
                                <div class="card__head">
                                    <div class="row">
                                        <div class="col-sm">
                                            <h6>СТОИМОСТЬ ОБУЧЕНИЯ</h6>
                                            <p>
                                                {{ $course->price_course }} ₽
                                            </p>
                                        </div>

                                        <div class="col-sm">
                                            <h6>СРОК ОБУЧЕНИЯ</h6>
                                            <p>
                                                3 месяца
                                            </p>
                                        </div>

                                        <div class="col-sm">
                                            <h6>ТЕОРИЯ</h6>
                                            <p>
                                                самостоятельное обучение
                                            </p>
                                        </div>

                                        <div class="col-sm">
                                            <h6>ПРАКТИКА</h6>
                                            <p>
                                                56 часов практических занятий
                                            </p>
                                        </div>

                                        <div class="col-sm">

                                            @if (!empty(Auth::user()))
                                                @if (Auth::user()->status == 'admin')
                                                    <form action="{{ route('price.delete', $course->id) }}" method="post">
                                                        @csrf
                                                        <input type="submit" value="Удалить курс">
                                                    </form>

                                                    <form action="{{ route('price.edit', $course->id) }}" method="get">
                                                        @csrf
                                                        <input type="submit" value="Редактировать">
                                                    </form>
                                                @endif
                                            @endif

                                            {{-- <a href="#">Редактировать</a> --}}

                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <div class="card__main">
                                    <div class="desk">
                                        <ul>
                                            <li>
                                                Теоретические занятия в соответствии с гос. программой (заочная форма
                                                обучения, предусматривает консультационные занятия с преподавателем, а также
                                                самостоятельное изучение).
                                            </li>
                                            <li>
                                                Государственный экзамен без очередей.
                                            </li>
                                            <li>
                                                Срок обучения – 3 месяца.
                                            </li>
                                        </ul>
                                        <p>
                                            Можно в рассрочку. Помогаем вернуть 13% от стоимости обучения (социальный
                                            налоговый вычет).
                                        </p>
                                    </div>
                                </div>
                                <hr>
                                <div class="card__footer">
                                    <div class="row">
                                        <div class="col-sm">
                                            <h4>Необходимые для поступления документы</h4>
                                            <p>Для поступления в автошколу вам необходимы:</p>
                                            <ul>
                                                <li>Паспорт</li>
                                                <li>Медицинская справка</li>
                                                <li>Фото 3х4</li>
                                            </ul>
                                        </div>
                                        <div class="col-sm">

                                            {{-- {{ dd(isset($appEx)) }} --}}
                                            @auth()
                                                @if (!count($appEx))
                                                    @if (!count($app))
                                                        <form action="{{ route('appEx.store', $course->id) }}" method="GET">
                                                            <input type="text" name="course_id" value="1" hidden>
                                                            <input type="submit" class="btn"
                                                                value="Записаться на данный курс">
                                                        </form>
                                                    @else
                                                        <h4>Ваша заявка уже принята</h4>
                                                    @endif
                                                @else
                                                    <h4>Вы уже подали заявку</h4>
                                                @endif
                                            @endauth



                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach

                @if (!empty(Auth::user()))
                    @if (Auth::user()->status == 'admin')
                        <div class="add_intsructor">
                            <form action="{{ route('price.create') }}" method="get">
                                @csrf
                                <input type="submit" value="Добавить курс">
                            </form>
                        </div>
                    @endif
                @endif

            </div>
        </div>
    </div>
@endsection
