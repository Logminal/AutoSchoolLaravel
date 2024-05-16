@extends('layout')

@section('content')
    <div class="instructors">
        <div class="container">
            <div class="text">
                <h2>Наши инструктора</h2>
                <p>
                    Наши инструкторы с опытом работы от 12 лет помогут тебе научиться вождению в комфортной и дружественной
                    обстановке.
                </p>
            </div>

            <div class="instructors__all">

                @foreach ($instructors as $item)
                    <div class="card">
                        <div class="card_head">
                            <img src="{{ asset('/storage/' . $item->img) }}" alt="">
                        </div>

                        <div class="card_description">
                            <h4>
                                {{ $item->name }}
                            </h4>

                            <p>
                                Опыт работы: <b> {{ $item->experience }} лет</b>
                            </p>

                            <p>
                                Стаж вождения: <b>{{ $item->driving_experience }} лет</b>
                            </p>
                        </div>

                        <div class="card_footer">
                            @if (!empty(Auth::user()))
                                @if (Auth::user()->status == 'admin')
                                    <form action="{{ route('instructor.destroy', $item->id) }}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <input type="submit" value="Удалить">
                                    </form>
                                    <form action="{{ route('instructor.edit', $item->id) }}" method="get">
                                        @csrf
                                        <input type="submit" value="Изменить данные">
                                    </form>
                                @endif
                            @endif
                        </div>
                    </div>
                @endforeach

            </div>

            @if (!empty(Auth::user()))
                @if (Auth::user()->status == 'admin')
                    <div class="add_intsructor">
                        <form action="{{ route('instructor.create') }}" method="get">
                            @csrf
                            <input type="submit" value="Добавить инструктора">
                        </form>
                    </div>
                @endif
            @endif

        </div>
    </div>
@endsection
