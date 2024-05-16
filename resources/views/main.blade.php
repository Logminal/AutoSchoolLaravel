@extends('layout')

@section('content')
    <div class="banner">
        <!-- <img src="img/banner2.png" alt=""> -->
    </div>

    <main style="background-color: #E8E8E8;">
        <div class="container">
            <div class="courses">
                <div class="row">
                    <div class="col-sm">
                        <img src="storage/img/MKPP.png" alt="">
                        <div class="body_card">
                            <div class="text">
                                <p> <b>Категория В (МКПП)</b> </p>
                            </div>

                            <div class="price">
                                <p>Коробка механика</p>
                                <span>27.000 руб.</span>
                                <div class="bt">
                                    <a href="{{ route('kursB') }}">Подробнее</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm offset-sm-1">
                        <img src="storage/img/AKPP.png" alt="">
                        <div class="body_card">
                            <div class="text">
                                <p> <b>Категория В (AКПП)</b> </p>
                            </div>

                            <div class="price">
                                <p>Коробка автомат</p>
                                <span>25.000 руб.</span>
                                <div class="bt">
                                    <a href="{{ route('kursB') }}">Подробнее</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm offset-sm-1">
                        <img src="storage/img/trailer.png" alt="">
                        <div class="body_card">
                            <div class="text">
                                <p> <b>Категория <br> ВЕ</b> </p>
                            </div>

                            <div class="price">
                                <p>Авто с прицепом</p>
                                <span>31.000 руб.</span>
                                <div class="bt">
                                    <a href="{{ route('kursB') }}">Подробнее</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm">
                        <img src="storage/img/motorcycle.png" alt="">
                        <div class="body_card">
                            <div class="text">
                                <p> <b>Категория A</b> </p>
                            </div>

                            <div class="price">
                                <p>Мотоциклы</p>
                                <span>20.000 руб.</span>
                                <div class="bt">
                                    <a href="{{ route('kursA') }}">Подробнее</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm offset-sm-1">
                        <img src="storage/img/moped.png" alt="">
                        <div class="body_card">
                            <div class="text">
                                <p> <b>Категория А1</b> </p>
                            </div>

                            <div class="price">
                                <p>Маломощные мотоциклы</p>
                                <span>15.000 руб.</span>
                                <div class="bt">
                                    <a href="{{ route('kursA') }}">Подробнее</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm offset-sm-1">
                        <img src="storage/img/quad_bike.png" alt="">
                        <div class="body_card">
                            <div class="text">
                                <p> <b>Категория M</b> </p>
                            </div>

                            <div class="price">
                                <p>Мопеды и квадрациклы</p>
                                <span>13.000 руб.</span>
                                <div class="bt">
                                    <a href="{{ route('kursA') }}">Подробнее</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="price">
            <div class="container">

                <h2> <b>Цены на обучение</b> </h2>

                <div class="row">
                    <div class="col-sm">
                        <div class="body_card">
                            <div class="text">
                                <p> <b>A + В</b> </p>
                                <div class="p">
                                    <p>От 30 000 рублей</p>
                                </div>
                            </div>

                            <div class="other">
                                <p>Первоночальный взнос: 10.000 руб.</p>

                                <p>Теория: Включена</p>


                                <p class="n">Практика: Включена</p>

                                <a href="{{ route('price') }}">Записаться на курс</a>

                            </div>
                        </div>
                    </div>
                    <div class="col-sm offset-sm-1">
                        <div class="body_card">
                            <div class="text">
                                <p> <b>A + BE</b> </p>
                                <div class="p">
                                    <p>От 45 000 рублей</p>
                                </div>
                            </div>

                            <div class="other">
                                <p>Первоночальный взнос: 18.000 руб.</p>

                                <p>Теория: Включена</p>


                                <p class="n">Практика: Включена</p>

                                <a href="{{ route('price') }}">Записаться на курс</a>

                            </div>
                        </div>
                    </div>
                    <div class="col-sm offset-sm-1">
                        <div class="body_card">
                            <div class="text">
                                <p> <b>A1 + В</b> </p>
                                <div class="p">
                                    <p>От 35 000 рублей</p>
                                </div>
                            </div>

                            <div class="other">
                                <p>Первоночальный взнос: 13.000 руб.</p>

                                <p>Теория: Включена</p>


                                <p class="n">Практика: Включена</p>

                                <a href="{{ route('price') }}">Записаться на курс</a>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <a href="{{ route('price') }}" class="more">Посмотреть все цены</a>
        </div>

        <div class="we">
            <div class="container">
                <h2> <b>Почему именно мы?</b> </h2>

                <div class="row">
                    <div class="col-sm">
                        <img src="storage/img/class.png" alt="">
                        <div class="body_card">
                            <div class="text2">
                                <p>Удобная локация автоклассов,
                                    красиво оформленны кабинеты</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm offset-sm-1">
                        <img src="storage/img/car.png" alt="">
                        <div class="body_card">
                            <div class="text2">
                                <p>Большой автопак с подготовленными
                                    к учебе автомобилями</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm offset-sm-1">
                        <img src="storage/img/diploma.png" alt="">
                        <div class="body_card">
                            <div class="text2">
                                <p>Помогающие и знающие инструкторы
                                    с большим опытом работы</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm">
                        <img src="storage/img/book.png" alt="">
                        <div class="body_card">
                            <div class="text2">
                                <p>Современная программа обучения
                                    с возможностей повторения
                                    теоритической части</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm offset-sm-1">
                        <img src="storage/img/map.png" alt="">
                        <div class="body_card">
                            <div class="text2">
                                <p>У нас имеется собственный
                                    подготовленный автодром</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm offset-sm-1">
                        <img src="storage/img/people.png" alt="">
                        <div class="body_card">
                            <div class="text2">
                                <p>У нас индивидуальный подход
                                    к каждому ученику</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </main>
@endsection
