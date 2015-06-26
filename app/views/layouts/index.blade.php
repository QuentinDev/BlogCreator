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

<nav class="navbar navbar-default navbar-static-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/"><span class="name">B</span><span class="text">log </span><span class="lastname">C</span><span class="text">reator</span></a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <li><a href="/blogs">Home</a></li>
                @if(!Auth::check())
                <li><a href={{URL::to('users/create')}}>Inscription</a></li>
                <li><a href={{URL::to('users/login')}}>Connexion</a></li>
                @endif
                @if(Auth::check())
                <li><a href={{URL::to('blogs/create')}}>Créer un nouveau blog</a></li>
                @endif
                {{--<li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
                   --}}{{-- <ul class="dropdown-menu">
                        <li><a href="#">Action</a></li>
                        <li><a href="#">Another action</a></li>
                        <li><a href="#">Something else here</a></li>
                        <li role="separator" class="divider"></li>
                        <li class="dropdown-header">Nav header</li>
                        <li><a href="#">Separated link</a></li>
                        <li><a href="#">One more separated link</a></li>
                    </ul>--}}{{--
                </li>--}}
            </ul>
            <ul class="nav navbar-nav navbar-right">
                @if(Auth::check())
                    <li><a class="logout" href={{URL::to('users/logout')}}><span>Logout</span><i class="fa fa-power-off"></i></a></li>
                    <li><a style="color: #428BCA; font-weight:bold;">{{ Auth::user()->username }}</a></li>
                    <li><a>{{Auth::user()->id}}</a></li>

                @endif
            </ul>
        </div><!--/.nav-collapse -->
    </div>
</nav>

<div class="view">
    @yield('content')
</div>

<div class="view">
    @yield('comments')
</div>

{{ HTML::script('https://code.jquery.com/jquery-1.10.2.min.js') }}
{{ HTML::script('js/bootstrap.min.js') }}


</body>

</html>
