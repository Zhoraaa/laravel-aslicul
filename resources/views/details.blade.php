@extends('layout')

@section('body')
    <section class="content">
        <div class="infocard">
            <div class="tourdesc">
                <div class="accent-block">
                    <div class="accent-decoration"></div>
                    <p class="accent accent-spacing">Подробнее о туре</p>
                </div>
                <h1>{{ $tour['title'] }}</h1>
                <p>{{ $tour['description'] }}</p>
                <p>Количество мест: {{ $tour['count_seats'] }}</p>
            </div>
            <div class="tour-cover">
                <img src="/imgs/{{ $tour['image'] }}" alt="">
            </div>
        </div>
        <form action="/application/new" method="POST" class="vertical">
            @csrf
            <div><input type="text" name="name" placeholder="Имя"></div>
            <div><input type="email" name="email" placeholder="Email"></div>
            <div><input type="number" name="count_passengers" placeholder="Количество мест для брони" min="1"
                    max="{{ $tour['count_seats'] }}"></div>
            <div class="hide"><input type="number" name="tour_id" value="{{ $tour['id'] }}"></div>
            <div><button>Отправить</button></div>
        </form>
    </section>
@endsection
