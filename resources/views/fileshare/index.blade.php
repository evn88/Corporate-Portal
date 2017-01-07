@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="section">
            <h3>Файлообменник</h3>
            <form action="#" enctype="multipart/form-data" method="post">
                <div class="row">
                    <div class="col s8">
                        <div class="file-field input-field">
                            <div class="btn">
                                <span>Файлы для загрузки</span>
                                <input type="file" multiple webkitdirectory directory>
                            </div>
                            <div class="file-path-wrapper">
                                <input class="file-path validate" type="text" placeholder="Upload one or more files">
                            </div>
                        </div>
                    </div>

                    <div class="col s4">
                        <div class="card">
                            <div class="card-content">
                                <div class="section">
                                    <span class="card-title"><h5>Параметры</h5></span>
                                    <!-- Switch -->

                                    <div class="switch">Архивировать
                                        <label>
                                            Нет
                                            <input type="checkbox" checked>
                                            <span class="lever"></span>
                                            Да
                                        </label>
                                    </div>

                                    <!-- Switch -->
                                    <div class="switch">Получить внешнюю ссылку?
                                        <label>
                                            Нет
                                            <input type="checkbox">
                                            <span class="lever"></span>
                                            Да
                                        </label>
                                    </div>
                                </div>
                                <div class="section">
                                    <span class="card-title"><h5>Статистика</h5></span>
                                    <p>Свободно на сервере: 72 Гб</p>
                                    <p>Всего загрузили внутренних фалов: 483</p>
                                    <p>Всего загрузили внешних файлов: 13</p>
                                    <p>Данных передано за эту неделю: 45 Гб</p>
                                </div>

                            </div>
                        </div>

                    </div>
                </div>
            </form>

            <div class="section">
                <label>Загрузка 70% (152 Мб из 235 Мб)</label>
                <div class="progress">
                    <div class="determinate" style="width: 70%"></div>
                </div>
            </div>

        </div>
    </div>
@endsection