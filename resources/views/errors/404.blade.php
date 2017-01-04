<!DOCTYPE html>
<html>
    <head>
        <title>404 Страница не найдена.</title>
        <link rel="stylesheet" href="{{ url('/css/materialize.min.css')}}">

        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">


    </head>
    <body>
        <div class="container">
            <div class="col s10 offset-s2">
                <div class="jumbotron">
                    <h1>404 Страница не найдена</h1>
                    <p>Страница, на которую вы пытаетесь попасть, вероятно не существует</p>
                    <p><a class="btn btn-default btn-lg" href="{{ url('/') }}" role="button">на главную</a></p>
                </div>
            </div>
        </div>
    </body>
</html>
