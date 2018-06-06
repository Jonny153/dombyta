@extends('layout')

@section('title', $data->title )

@section('content')
    <div class="content">


        <section class="container my-5">

            <nav aria-label="breadcrumb">
                <ol class="breadcrumb bg-transparent">
                    <li class="breadcrumb-item"><a href="/">Главная</a></li>
                    <li class="breadcrumb-item"><a href="/cleaning">Уборка</a></li>
                    <li class="breadcrumb-item active" aria-current="page">{{$data->title}}</li>
                </ol>
            </nav>

            <div class="title_black">
                <img src="/img/icons/clean-express-icon.png" class="img-fluid d-block mx-auto">
                <h1>{{$data->title}}</h1>
            </div>

            <p class="lead text-center">{{$data->description}}</p>
            <p class="lead text-center">Перед началом работ клинер может оценить уровень загрязнения в квартире и
                порекомендовать провести основную уборку. Смена тарифа осуществляется через колл-центр Компании.</p>

            <p class="display-4 text-center my-5">от 50&#8381; за кв.м.</p>

            <div class="title_black">
                <h3>Что входит в экспресс уборку</h3>
            </div>

            <p class="lead">В жилых помещениях и спальне</p>
            <ul>
                <li>Протираем все доступные горизонтальные поверхности;</li>
                <li>Очищаем подоконники от пыли и грязи;</li>
                <li>Протираем пыль с бытовой техники;</li>
                <li>Моем полы;</li>
                <li>Пылесосим ковёр;</li>
                <li>Протираем плинтусы;</li>
                <li>Убираем мусор.</li>

            </ul>

            <p class="lead">На кухне</p>
            <ul>
                <li>Очищаем снаружи плиту (варочную панель) и духовой шкаф от грязи и жира;</li>
                <li>Протираем снаружи холодильник, СВЧ и бытовую технику;</li>
                <li>Очищаем столешницу, кухонный стол, подоконник от пыли, жира и грязи;</li>
                <li>Очищаем кухонный фартук, смеситель и раковину от грязи и жира;</li>
                <li>Моем полы;</li>
                <li>Пылесосим ковёр;</li>
                <li>Протираем плинтусы;</li>
                <li>Убираем мусор.</li>

            </ul>

            <p class="lead">В ванной комнате и туалете</p>
            <ul>
                <li>Протираем все доступные горизонтальные поверхности;</li>
                <li>Моем стену возле раковины, смесителя ванны и унитаза;</li>
                <li>Протираем полотенцесушитель;</li>
                <li>Моем раковину, ванную (или поддон душевой кабины), смесители;</li>
                <li>Моем зеркала;</li>
                <li>Моем и дезинфицируем унитаз, биде;</li>
                <li>Моем полы;</li>
                <li>Пылесосим коврик;</li>
                <li>Протираем плинтусы;</li>
                <li>Убираем мусор.</li>
            </ul>

            <p class="lead">В коридоре и прихожей</p>
            <ul>
                <li>Протираем все доступные горизонтальные поверхности;</li>
                <li>Моем зеркала;</li>
                <li>Моем полы;</li>
                <li>Пылесосим ковёр;</li>
                <li>Протираем плинтусы;</li>
                <li>Убираем мусор.</li>
            </ul>


            <p class="lead text-center">После окончания работ клинер оценивает качество и сдает Вам чистую квартиру.
                При необходимости устраняет замечания.</p>


            <div class="title_black">
                <h3>Что не входит в экспресс уборку</h3>
            </div>

            <ul>
                <li>Не поднимаем и не двигаем тяжелые предметы и мебель;</li>
                <li>Не встаем на стулья и другие предметы мебели для уборки поверхностей выше 2-х метров;</li>
                <li>Не убираем в местах, куда ограничен доступ;</li>
                <li>Не делаем химическую чистку ковров;</li>
                <li>Не чистим жалюзи и шторы;</li>
                <li>Не прибираем в кладовой, гардеробной комнате и подсобных помещениях;</li>
                <li>Не моем стены;</li>
                <li>Не удаляем глубокие пятна и не чистим паром;</li>
                <li>Не применяем биологически опасные материалы;</li>
                <li>Не делаем уборку в межквартирном пространстве и тамбуре;</li>
                <li>Не делаем уборку в труднодоступных местах;</li>
                <li>Не моем осветительные приборы, если они включены в сеть.</li>
                <li>Не моем комнатные двери</li>


            </ul>

        </section>


        <div class="text-center my-5">
            <a href="#" data-noscroll data-toggle="modal" data-target="#callModal" class="btn btn-primary" >Заказать звонок</a>
        </div>
       



    </div>
@endsection