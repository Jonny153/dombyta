@extends('layout')

@section('title', 'Вызов электрика в Калининграде')

@section('content')
    <div class="content">
        <section class="heading">
            <picture>
                <source srcset="/img/slider/1920x800/electrik.jpg" media="(min-width: 1400px)">
                <source srcset="/img/slider/1400x700/electrik.jpg" media="(min-width: 769px)">
                <source srcset="/img/slider/800x500/electrik.jpg" media="(min-width: 577px)">
                <img srcset="/img/slider/600x500/electrik.jpg" alt="responsive image" class="d-block img-fluid">
            </picture>
            <div class="capture">
                <div class="container d-flex justify-content-end h-50">
                    <span data-toggle="modal" data-target="#callModal" class="btn btn-xl btn-primary align-self-end wow bounceIn" data-wow-duration="1s" data-wow-delay="2s">Вызвать мастера</span>
                </div>
                <div class="container d-flex h-50 pb-5">
                    <h1 class="display-1 text-light mx-auto align-self-end wow bounceInDown" data-wow-duration="1s" data-wow-delay="1s">Услуги электрика</h1>
                </div>
            </div>
        </section>

        <section class="gray_bgr intro">
            <div class="container p-2 p-md-5">
                <p class="text-center lead">Заказать услуги электрика в компании «Дом Быта 39» - это значит обеспечить себя высокопрофессиональными
                    мастерами, которые выполнят электромонтажные работы быстро, качественно и с предоставлением гарантии!
                    Наши электрики оказывают жителям Калининграда и Калининградской области полный спектр услуг,
                    электромонтаж и электромонтажные работы, а именно: электромонтаж квартир, электромонтаж домов и офисов,
                    установка электросчетчика и электрощита, электромонтаж розеток и выключателей, штробление стен под электропроводку,
                    подключение светильников и люстр, укладка теплого пола, заземление, зануление, молниезащита, установка кондиционеров.
                </p>
            </div>
        </section>

        <section class="black_texture_bgr pb-5" id="toggle">
            <div class="container">
                <div class="title_white">
                    <h2>Экстренный вызов электрика</h2>
                </div>
                <div class="row">
                    <div class="col-md-4 col-lg-3 icon-font">
                        <a href="#" class="simple-link" data-noscroll data-toggle="modal" data-target="#callModal">
                            <i class="fas fa-exclamation-triangle text-primary"></i>
                            <small class="text-info">круглосуточно</small>
                        </a>
                    </div>
                    <div class="col-md-8 col-lg-9">
                        <p class="text-info text-center lead">
                            Если в доме, помещении сгорели розетки, греется и искрит электропроводка,
                            система электробезопасности нарушена, вызов электрика оттягивать крайне нежелательно.
                            Звоните <a class="tel-context-dark" href="tel:+74012337434">33-74-34</a> или
                            <a class="tel-context-dark" href="tel:+79637387434">+7-963-738-7434</a> и наши специалисты
                            немедленно приедут и устранят проблему. Также вы можете заполнить форму ниже и мы
                            свяжемся с вами в ближайшее время.
                        </p>
                        <form class="outline-primary" id="staticCallForm" action="/call" method="post">
                            {{ csrf_field() }}
                            <input type="hidden" name="type" value="Экстренный вызов электрика">
                            <div class="form-row">
                                <div class="col-md-5 mb-1 form-group">
                                    <input type="text" class="form-control" name="person" placeholder="Ваше имя">
                                </div>
                                <div class="col-md-5 mb-1 form-group">
                                    <input type="tel" class="form-control" name="phone" placeholder="Телефон*">
                                </div>
                                <div class="col-md-2 mb-1 form-group">
                                    <button type="submit" class="btn btn-primary btn-block">Отправить</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>


            </div>
        </section>





    </div>
@endsection
