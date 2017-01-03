@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="section">
            <div class="row">

                <div class="col s9">
                <!-- page content -->
                <h4>Новости</h4>
                <div class="row">
                    <div class="col s12 m12">
                        <div class="card">
                            <div class="card-image">
                                <img src="http://voel.ru/files/news/news_images/20161017/plaz.jpg">
                                <span class="card-title grey">ПАО «Волгоградоблэлектро» успешно реализует программу обновления автотранспорта </span>
                            </div>
                            <div class="card-content">
                                <p>С начала 2016 года ПАО «Волгоградоблэлектро» успешно реализует программу обновления спецавтотранспорта. Главная её цель– обеспечить постоянную техническую готовность техники,
                                    снизить затраты на её эксплуатацию и ремонт, уменьшить выбросы вредных веществ в атмосферный воздух за счет перехода на автомобили 4 и 5 экологических классов. Программа рассчитана
                                    на 3 года и проходит в три этапа. </p>
                            </div>
                            <div class="card-action">
                                <a href="#">Подробнее</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col s12 m12">
                        <div class="card">
                            <div class="card-image">
                                <img src="http://voel.ru/files/news/news_images/20160824/20160822165746.jpg">
                                <span class="card-title grey">ПАО «Волгоградоблэлектро» проводит реконструкцию уличного освещения на шоссе Авиаторов к ЧМ-2018 </span>
                            </div>
                            <div class="card-content">
                                <p>В рамках государственного контракта и подготовки к ЧМ-2018, ПАО "Волгоградоблэлектро" ведутся работы по реконструкции уличного
                                    освещения автомобильной дороги "Шоссе Авиаторов" от международного аэропорта Волгограда до Самарского разъезда протяженностью почти 11,5 км.
                                    Главная автомагистраль от воздушных ворот города будет оснащена по последнему слову техники в электроснабжении. Проектом по реконструкции освещения,
                                    предполагается применение современных оцинкованных опор, которые улучшат не только эстетический вид, но и долговечность конструкции.</p>
                            </div>
                            <div class="card-action">
                                <a href="#">Подробнее</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

                <div class="col s3">
                <!-- vidgets  -->
                <h4 class="center-align">Дни рождения</h4>
                <blockquote class="light">
                    В настройках вашей учетной записи можно отключить отображение вашего дня рождения
                </blockquote>
                <ul class="collection">
                    <li class="collection-item"><span class="new badge blue"  data-badge-caption="">05.10</span>Вершков Егор</li>
                    <li class="collection-item"><span class="new badge blue"  data-badge-caption="">10.10</span>Попов Николай</li>
                    <li class="collection-item"><span class="new badge blue"  data-badge-caption="">23.10</span>Петров Сергей</li>
                    <li class="collection-item"><span class="new badge blue"  data-badge-caption="">30.10</span>Сидоров Павел</li>
                </ul>

                <h4 class="center-align">Конференции</h4>
                <p class="light">Конференции запланированные на сегодня</p>
                <ul class="collection">
                    <a href="" class="collection-item"><span class="new badge blue"  data-badge-caption="">11:00</span>Большой зал</a>
                    <a href="" class="collection-item"><span class="new badge blue"  data-badge-caption="">13:20</span>Большой зал</a>
                    <a href="" class="collection-item"><span class="new badge blue"  data-badge-caption="">15.30</span>Малый зал</a>
                </ul>


                <h4 class="center-align">Ссылки</h4>
                <div class="collection">
                    <a href="#!" class="collection-item">Система заявок</a>
                    <a href="#!" class="collection-item">voel.ru</a>
                    <a href="#!" class="collection-item">voes.ru</a>
                    <a href="#!" class="collection-item">volgogres.ru</a>
                </div>

                <h4 class="center-align">Статистика сервера</h4>
                <ul class="collapsible" data-collapsible="accordion">
                    <li>
                        <div class="collapsible-header"><i class="material-icons">filter_drama</i>First</div>
                        <div class="collapsible-body"><p>Lorem ipsum dolor sit amet.</p></div>
                    </li>
                    <li>
                        <div class="collapsible-header"><i class="material-icons">place</i>Second</div>
                        <div class="collapsible-body"><p>Lorem ipsum dolor sit amet.</p></div>
                    </li>
                    <li>
                        <div class="collapsible-header"><i class="material-icons">whatshot</i>Third</div>
                        <div class="collapsible-body"><p>Lorem ipsum dolor sit amet.</p></div>
                    </li>
                </ul>


            </div>

            </div>
        </div>
    </div>
@endsection


