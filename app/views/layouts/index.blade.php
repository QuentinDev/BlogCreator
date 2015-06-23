<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Blog Creator</title>
    {{ HTML::style('css/font-awesome.min.css') }}
    {{ HTML::style('css/bootstrap.min.css') }}
    {{ HTML::style('css/main.css') }}

</head>

<body>

<div class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="">
                <span class="name">B</span><span class="text">log </span><span class="lastname">C</span><span class="text">reator</span>
            </a>
        </div>
        <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                {{--<li><a href="">Creer un form</a></li>--}}
            </ul>

            <ul class="nav navbar-nav navbar-right">
                <li><a href={{URL::to('users/create')}}>Inscription</a></li>
                <li><a href={{URL::to('users/login')}}>Connexion</a></li>
            </ul>
        </div>
    </div>
</div>

<div class="view">
    @yield('content')
</div>
{{ HTML::script('https://code.jquery.com/jquery-1.10.2.min.js') }}
{{ HTML::script('js/bootstrap.min.js') }}

</body>

</html>
