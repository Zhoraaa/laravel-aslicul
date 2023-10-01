@extends('layout')

@section('body')
    <section class="content">
        {{-- Обложка --}}
        <div id="cover">
            <div class="accent-block">
                <div class="accent-decoration"></div>
                <p class="accent accent-spacing">Исследуй красоту родной природы</p>
            </div>
            <h1><b>Путешествие</b></h1>
            <h1>Волшебный Аслыкуль</h1>
        </div>
        {{-- Тур 1 --}}
        <div class="infocard">
            <div class="tour-cover">
                <img src="/imgs/{{ $all_tours[0]['image'] }}" alt="">
            </div>
            <div class="tourdesc">
                <div class="accent-block">
                    <div class="accent-decoration"></div>
                    <p class="accent accent-spacing">Немного о поездке</p>
                </div>
                <h1>{{ $all_tours[0]['title'] }}</h1>
                <p>{{ $all_tours[0]['description'] }}</p>
                <a href="/tour/{{ $all_tours[0]['id'] }}/details" class="accent">Читать подробнее →</a>
            </div>
        </div>
        {{-- Слайдер --}}
        <div id="slider">
            <div id="slider-line">
                @foreach ($all_tours as $tour)
                    <div class="slide">
                        <img src="/imgs/{{ $tour['image'] }}" alt="">
                        <div class="tour-text">
                            <div class="accent-block">
                                <div class="accent-decoration"></div>
                                <p class="accent accent-spacing">Тур</p>
                                <div class="accent-decoration"></div>
                            </div>
                            <h1>{{ $tour['title'] }}</h1>
                            <p>{{ $tour['description'] }}</p>
                            <a href="/tour/{{ $tour['id'] }}/details" class="accent">Читать подробнее →</a>
                        </div>
                    </div>
                @endforeach
            </div>
            <div id="slider-btns">
                <div id="btn-prev">
                    ←
                </div>
                <div id="btn-next">
                    →
                </div>
            </div>
        </div>
        {{-- Тур 2 --}}
        <div class="infocard">
            <div class="tourdesc">
                <div class="accent-block">
                    <div class="accent-decoration"></div>
                    <p class="accent accent-spacing">Немного о поездке</p>
                </div>
                <h1>{{ $all_tours[0]['title'] }}</h1>
                <p>{{ $all_tours[0]['description'] }}</p>
                <a href="/tour/{{ $all_tours[0]['id'] }}/details" class="accent">Читать подробнее →</a>
            </div>
            <div class="tour-cover">
                <img src="/imgs/{{ $all_tours[0]['image'] }}" alt="">
            </div>
        </div>
    </section>
@endsection
