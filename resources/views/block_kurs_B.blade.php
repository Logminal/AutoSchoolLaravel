@extends('layout')

@section('content')
    <div class="kat_BM">
        <div class="container">
            <div class="kat">
                <div class="kat_text">
                    <h2>КАТЕГОРИЯ В</h2>
                    <p>Легковые автомобили:</p>
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
                                <img src="storage/img/slide1.jpg" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="storage/img/slide2.jpg" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="storage/img/slide3.jpg" class="d-block w-100" alt="...">
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
                        Чтобы получить права, помимо сдачи теории также необходимо хорошо водить машину. Для этого мы
                        организовали для тебя
                        практический курс на новых, специально оборудованных иномарках с механической или ручной коробкой
                        передач в зависимости
                        от того, что нужно тебе. Все площадки максимально организованы таким образом, чтобы отточить твои
                        новые
                        навыки на
                        практике в процессе выполнения экзаменационных упражнений. А выезды в город проводятся по
                        согласованным
                        с ГИБДД
                        маршрутам.
                    </p>

                </div>

                <div class="kat_prices">
                    <h4>
                        Стоимость обучения категория В, легковые автомобили
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
                            <tr>
                                <th scope="row">1</th>
                                <td>Теория в классе + Вождение АКПП (50 часов)</td>
                                <td>25.000 руб.</td>
                                <td>3 месяца</td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td>Теория в классе + Вождение МКПП (50 часов)</td>
                                <td>27.000 руб.</td>
                                <td>3 месяца</td>
                            </tr>

                            <tr>
                                <th scope="row">3</th>
                                <td>Теория в классе + Категория BE + Вождение МКПП (50 часов)</td>
                                <td>31.000 руб.</td>
                                <td>2 месяца</td>
                            </tr>

                        </tbody>
                    </table>

                </div>
            </div>

        </div>
    </div>
@endsection
