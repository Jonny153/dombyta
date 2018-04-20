@extends('layout')

@section('title', 'Вызов сантехника в Калининграде')

@section('content')
    <div class="content">
        <section class="heading">
            <picture>
                <source srcset="/img/slider/1920x800/santehnik.jpg" media="(min-width: 1400px)">
                <source srcset="/img/slider/1400x700/santehnik.jpg" media="(min-width: 769px)">
                <source srcset="/img/slider/800x500/santehnik.jpg" media="(min-width: 577px)">
                <img srcset="/img/slider/600x500/santehnik.jpg" alt="responsive image" class="d-block img-fluid">
            </picture>
            <div class="capture">
                <div class="container d-flex h-50">
                    <span data-toggle="modal" data-target="#callModal" class="btn btn-xl btn-primary align-self-end wow bounceIn" data-wow-duration="1s" data-wow-delay="2s">Вызвать мастера</span>
                </div>
                <div class="container d-flex h-50 pb-5">
                    <h1 class="display-1 text-light mx-auto align-self-end wow bounceInDown" data-wow-duration="1s" data-wow-delay="1s">Услуги сантехника</h1>
                </div>
            </div>
        </section>

        <section class="gray_bgr intro">
            <div class="container p-2 p-md-5">
                <p class="text-center lead">Компания «Дом Быта 39» оказывает жителям Калининграда и Калининградской области
                    весь спектр сантехнических услуг.
                    Нужно устранить засор трубы, установить смеситель, подключить стиральную или посудомоечную машину, провести монтаж ванны, унитаза и умывальника? Необходимо установить душевую кабину? Канализационная система нуждается в капитальном ремонте? Необходимо заменить радиатор отопления? Или необходимо проектирование и монтаж системы водоснабжения, отопления и канализации в частном доме или на даче? Требуются срочные сантехнические работы? Мы поможем оперативно и в любое время суток решить возникшие проблемы! Качественно, с гарантией и в удобное для Вас время!
                Наши специалисты предоставляют услуги круглосуточно и без выходных.
                    К нам можно обратиться независимо от дня и времени суток.
                    Мы оперативно реагируем на обращения клиентов и в кратчайшие сроки избавляем их от возникших проблем.</p>
            </div>
        </section>

        <section class="black_texture_bgr pb-5" id="toggle">
            <div class="container">
                <div class="title_white">
                    <h2>Экстренный вызов сантехника</h2>
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
                            Если у вас произошла аварийная ситуация, прорвало трубу, засорилась канализация,
                            отломился кран, потекла батарея или возникла любая другая проблема, требующая немедленного
                            устранения, звоните <a class="tel-context-dark" href="tel:+74012337434">33-74-34</a> или
                            <a class="tel-context-dark" href="tel:+79637387434">+7-963-738-7434</a> и наши специалисты
                            немедленно приедут и устранят проблему. Также вы можете заполнить форму ниже и мы
                            свяжемся с вами в ближайшее время.
                        </p>
                        <form class="outline-primary" id="staticCallForm" action="/call" method="post">
                            {{ csrf_field() }}
                            <input type="hidden" name="type" value="Экстренный вызов сантехника">
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

        <section>
            <div class="container p-0">
                <div id="services">
                    <div class="card">
                        <div class="card-header p-0" id="heading1">
                            <a class="collapsed" role="button" href="#" data-noscroll data-toggle="collapse" data-target="#collapse1" aria-expanded="false" aria-controls="collapse1">
                               <img class="img-fluid service-icon" src="/img/icons/sink-icon-150.png"> Сантехника
                            </a>
                        </div>

                        <div id="collapse1" class="collapse" data-backlink="#heading1" aria-labelledby="heading1" data-parent="#services">
                            <div class="card-body">
                                <p class="lead">Компания «Дом Быта 39» оказывает все виды услуг по установке и замене сантехники в Калининграде и Калининградской области</p>
                                <div class="row">
                                    <div class="col-md-6 col-lg-4 pb-4">
                                        <div class="card h-100">
                                            <img class="card-img-top" src="/img/services/smesitel.jpg" alt="Card image cap">
                                            <div class="card-body">
                                                <h5 class="card-title">Смеситель <small class="text-muted">Установка и замена</small></h5>
                                                <p class="card-text">Наши мастера установят или заменят любой тип смесителя в ванной или на кухне</p>

                                            </div>
                                            <div class="card-footer">
                                                <a href="#" class="btn btn-primary">Подробнее</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-4 pb-4">
                                        <div class="card h-100">
                                            <img class="card-img-top" src="/img/services/rakovina.jpg" alt="Card image cap">
                                            <div class="card-body">
                                                {{--<h5 class="card-title">Установка и замена раковины</h5>--}}
                                                <h5 class="card-title">Раковина <small class="text-muted">Установка и замена</small></h5>
                                                <p class="card-text">Установка и замена раковины любого типа в ванной комнате или на кухне</p>

                                            </div>
                                            <div class="card-footer">
                                                <a href="#" class="btn btn-primary">Подробнее</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-4 pb-4">
                                        <div class="card h-100">
                                            <img class="card-img-top" src="/img/services/unitaz.jpg" alt="Card image cap">
                                            <div class="card-body">
                                                <h5 class="card-title">Унитаз <small class="text-muted">Установка и замена</small></h5>
                                                <p class="card-text">Установка и замена унитазов, биде и писсуаров любых
                                                    форм и типов.</p>

                                            </div>
                                            <div class="card-footer">
                                                <a href="#" class="btn btn-primary">Подробнее</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-4 pb-4">
                                        <div class="card h-100">
                                            <img class="card-img-top" src="/img/services/vanna.jpg" alt="Card image cap">
                                            <div class="card-body">
                                                <h5 class="card-title">Ванна <small class="text-muted">Установка и замена</small></h5>
                                                <p class="card-text">Установка и замена чугунных, акриловых, керамических и других видов ванн</p>

                                            </div>
                                            <div class="card-footer">
                                                <a href="#" class="btn btn-primary">Подробнее</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-4 pb-4">
                                        <div class="card h-100">
                                            <img class="card-img-top" src="/img/services/duhevaya_kabina.jpg" alt="Card image cap">
                                            <div class="card-body">
                                                <h5 class="card-title">Душевая кабина <small class="text-muted">Установка и подключение</small></h5>
                                                <p class="card-text">Наши специалисты помогут установить и подключить душевую кабину любого типа</p>

                                            </div>
                                            <div class="card-footer">
                                                <a href="#" class="btn btn-primary">Подробнее</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-4 pb-4">
                                        <div class="card h-100">
                                            <img class="card-img-top" src="/img/services/stiralnaya_mashina.jpg" alt="Card image cap">
                                            <div class="card-body">
                                                <h5 class="card-title">Стиральная машина <small class="text-muted">Установка и подключение</small></h5>
                                                <p class="card-text">Установим и подключим стиральную машину в ванной или на кухне</p>

                                            </div>
                                            <div class="card-footer">
                                                <a href="#" class="btn btn-primary">Подробнее</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-4 pb-4">
                                        <div class="card h-100">
                                            <img class="card-img-top" src="/img/services/sifon.jpg" alt="Card image cap">
                                            <div class="card-body">
                                                <h5 class="card-title">Сифон <small class="text-muted">Установка и замена</small></h5>
                                                <p class="card-text">Мы предлагаем услугу установки и замены сифона для раковин и ванн</p>

                                            </div>
                                            <div class="card-footer">
                                                <a href="#" class="btn btn-primary">Подробнее</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-4 pb-4">
                                        <div class="card h-100">
                                            <img class="card-img-top" src="/img/services/polotencesushitel.jpg" alt="Card image cap">
                                            <div class="card-body">
                                                <h5 class="card-title">Полотенцесушитель <small class="text-muted">Установка и замена</small></h5>
                                                <p class="card-text">Наши мастера помогут вам установить полотенцесушитель., а также произвести его замену, врезку, заглушку</p>

                                            </div>
                                            <div class="card-footer">
                                                <a href="#" class="btn btn-primary">Подробнее</a>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header p-0" id="heading2">
                            <a class="collapsed" href="#" data-noscroll data-toggle="collapse" data-target="#collapse2" aria-expanded="false" aria-controls="collapse1">
                                <img class="img-fluid service-icon" src="/img/icons/water-icon-150.png"> Водоснабжение
                            </a>
                        </div>

                        <div id="collapse2" class="collapse"  data-backlink="#heading2" aria-labelledby="heading2" data-parent="#services">
                            <div class="card-body">
                                <p class="lead">Монтаж систем водоснабжения связан с решением целого ряда технических
                                    задач: непрерывная подача воды, стабильное давление в трубопроводе.
                                    Подключение потребителей требует не только навыков, но и специализированного
                                    образования. Компания «Дом Быта 39» поможет вам решить комплексно весь спектр
                                    вопросов от проекта до ввода в эксплуатацию. В нашем распоряжении штат инженеров
                                    и рабочих, а также возможность снабжения всем необходимым от начала и до
                                    конца монтажных работ.</p>
                                <div class="row">
                                    <div class="col-md-6 col-lg-4 pb-4">
                                        <div class="card h-100">
                                            <img class="card-img-top" src="/img/services/vodosnabzhenie.jpg" alt="Card image cap">
                                            <div class="card-body">
                                                <h5 class="card-title">Система водоснабжения <small class="text-muted">Проектирование, монтаж, врезка</small></h5>
                                                <p class="card-text">Компания «Дом Быта 39» осуществляет полный
                                                    комплекс услуг по монтажу систем водоснабжения</p>

                                            </div>
                                            <div class="card-footer">
                                                <a href="#" class="btn btn-primary">Подробнее</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header p-0" id="heading3">
                            <a class="collapsed" href="#" data-noscroll data-toggle="collapse" data-target="#collapse3" aria-expanded="false" aria-controls="collapse1">
                                <img class="img-fluid service-icon" src="/img/icons/heat-icon-150.png"> Отопление
                            </a>
                        </div>

                        <div id="collapse3" class="collapse" data-backlink="#heading3" aria-labelledby="heading3" data-parent="#services">
                            <div class="card-body">
                                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header p-0" id="heading4">
                            <a class="collapsed" href="#" data-noscroll data-toggle="collapse" data-target="#collapse4" aria-expanded="false" aria-controls="collapse1">
                                <img class="img-fluid service-icon" src="/img/icons/sewer-icon-150.png"> Канализация
                            </a>
                        </div>

                        <div id="collapse4" class="collapse" data-backlink="#heading4" aria-labelledby="heading4" data-parent="#services">
                            <div class="card-body">
                                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </section>



    </div>
@endsection
