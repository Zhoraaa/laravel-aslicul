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
                <img src="/imgs/tours/{{ $all_tours[0]['image'] }}" alt="">
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
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                {{ $active = 'active' }}
                @foreach ($all_tours as $tour)
                    <div class="slide carousel-item {{ $active }}">
                        <img src="/imgs/tours/{{ $tour['image'] }}" alt="">
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
                    {{ $active = null }}
                @endforeach
            </div>
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
        {{-- Тур 2 --}}
        <div class="infocard">
            <div class="tourdesc">
                <div class="accent-block">
                    <div class="accent-decoration"></div>
                    <p class="accent accent-spacing">Немного о поездке</p>
                </div>
                <h1>{{ $all_tours[1]['title'] }}</h1>
                <p>{{ $all_tours[1]['description'] }}</p>
                <a href="/tour/{{ $all_tours[1]['id'] }}/details" class="accent">Читать подробнее →</a>
            </div>
            <div class="tour-cover">
                <img src="/imgs/tours/{{ $all_tours[1]['image'] }}" alt="">
            </div>
        </div>
    </section>
@endsection
