@extends('layout')

@section('title', 'Услуги сантехника')

@section('content')
    <div class="content">
        <section class="heading">
            <picture>
                <source srcset="/img/slider/1920x800/dezinsekt.jpg" media="(min-width: 1400px)">
                <source srcset="/img/slider/1400x700/dezinsekt.jpg" media="(min-width: 769px)">
                <source srcset="/img/slider/800x500/dezinsekt.jpg" media="(min-width: 577px)">
                <img srcset="/img/slider/600x500/dezinsekt.jpg" alt="responsive image" class="d-block img-fluid">
            </picture>
            <div class="capture">
                <div class="container d-flex justify-content-end h-50">
                    <span data-toggle="modal" data-target="#callModal" class="btn btn-xl btn-primary align-self-end wow bounceIn" data-wow-duration="1s" data-wow-delay="2s">Вызвать мастера</span>
                </div>
                <div class="container d-flex h-50 pb-5">
                    <h1 class="display-1 text-light mx-auto align-self-end wow bounceInDown" data-wow-duration="1s" data-wow-delay="1s">Дезинсекция</h1>
                </div>
            </div>
        </section>

        <section class="gray_bgr intro">
            <div class="container p-2 p-md-5">
                <p class="text-center lead">
                    Индивидуальная диагностика характеристик объекта для всестороннего решения санитарно-эпидемиологических задач,
                    регулярное получение практики ведущих отечественных и иностранных фирм в области услуг по дезинсекции,
                    постоянное повышение квалификации работников: вот те преимущества, которые выделяют компанию «Дом Быта 39» на
                    рынке услуг по дезинсекции.

                </p>
            </div>
        </section>



       



    </div>
@endsection
