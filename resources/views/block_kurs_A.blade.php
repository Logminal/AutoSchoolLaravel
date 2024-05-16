@extends('layout')

@section('content')
    <div class="kat_BM">
        <div class="container">
            <div class="kat">
                <div class="kat_text">
                    <h2>КАТЕГОРИЯ A, A1, M</h2>
                    <p>Мотоциклы:</p>
                </div>

                <div class="kat_prices">
                    <div class="row">
                        <div class="col-3">
                            <img src="storage/img/fast_time.png" alt="">
                            <div class="description">
                                <p>
                                    Максимально быстрый срок обучения
                                </p>
                            </div>
                        </div>

                        <div class="col-3">
                            <img src="storage/img/document.png" alt="">
                            <div class="description">
                                <p>
                                    Сопровождение при подаче документов на получение прав
                                </p>
                            </div>
                        </div>

                        <div class="col-3">
                            <img src="storage/img/sofa.png" alt="">
                            <div class="description">
                                <p>
                                    Самые комфортные условия обучения в нашей школе
                                </p>
                            </div>
                        </div>


                    </div>
                </div>

                <div class="slide_car">
                    <h3>Наши автомобили</h3>

                    <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="storage/img/moto1.jpg" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="storage/img/moto2.jpg" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="storage/img/moto3.jpg" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="storage/img/kvadrocikl.jpeg" class="d-block w-100" alt="...">
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade"
                            data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Предыдущий</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade"
                            data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Следующий</span>
                        </button>
                    </div>

                </div>


                <div class="kat_descriptions">
                    <h4>
                        Практический курс – с первого дня на площадке!
                    </h4>

                    <p>
                        Наши инструкторы на деле разбираются в вождении – опыт каждого более 12 лет. Ты можешь выбрать
                        инструктора для своих
                        занятий самостоятельно! Мы обучаем как безопасному, так и контраварийному вождению. Если тебе было
                        мало часов с
                        инструктором в рамках пакета, можно взять дополнительные индивидуальные занятия.

                        Ты научишься водить мотоцикл или
                        мопед на самой классной
                        и современной технике на рынке, которая обслуживается вовремя.
                    </p>

                </div>

                <div class="kat_prices">
                    <h4>
                        Стоимость обучения категория A, A1, M
                    </h4>

                    <table class="table table-striped price">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Название категории</th>
                                <th scope="col">Цена</th>
                                <th scope="col">Время обучения</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($courseA as $item)
                                <tr>
                                    <th scope="row">1</th>
                                    <td>{{ $item->name_course }}</td>
                                    <td>{{ $item->price_course }} руб.</td>
                                    <td>3 месяца</td>
                                </tr>
                            @endforeach
                            <tr>
                                <th scope="row">2</th>
                                <td>Теория в классе + Вождение А1 (25 часов)</td>
                                <td>15.000 руб.</td>
                                <td>3 месяца</td>
                            </tr>

                            <tr>
                                <th scope="row">3</th>
                                <td>Теория в классе + Вождение М (25 часов)</td>
                                <td>13.000 руб.</td>
                                <td>3 месяца</td>
                            </tr>

                        </tbody>
                    </table>

                </div>
            </div>

        </div>
    </div>
@endsection
