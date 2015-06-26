@extends('layouts.index')
@section('content')
    <div class="container" style="text-align:center">
            <div class="container">
                <div class="well">
                    <div class="media">
                        <img class="img" src={{ $post->path }}>
                        <div class="media-body">
                            <h4 class="media-heading">{{ $post->title }}</h4>
                            <p class="text-right"></p>
                            <p>{{ $post->content }}</p>
                            <ul class="list-inline list-unstyled">
                                <li><span><i class="glyphicon glyphicon-calendar"></i>{{ $post->created_at }}</span></li>
                                <li>|</li>
                                <span><i class="glyphicon glyphicon-comment"></i></span>
                                @if(Auth::check())
                                <li><a href={{URL::to('comments/create/' . $post->id)}}>Commenter</a></li>
                                @endif
                            </ul>
                        </div>
                    </div>
                </div>
                @stop
                @section('comments')
                    @foreach($post->comments as $comment)
                    <div class="comments">
                        <div class="media">
                            <p class="text-right"></p>
                            <p>{{ $comment->content }}</p>
                            <ul class="list-inline list-unstyled">
                                <li><span><i class="glyphicon glyphicon-calendar"></i>{{ $comment->created_at }}</span></li>
                                <li>|</li>
                                <span><i class="glyphicon glyphicon-user"></i></span>
                                <li><span>{{ $comment->username }}</span></li>
                                @if(Auth::check())
                                    @if(Auth::user()->id == $post->id_user)
                                        {{Form::open(array('url' => 'comments/'. $comment->id, "method" => "post"))}}
                                        {{Form::hidden('_method','DELETE') }}
                                        {{Form::submit("Supprimer!",array('class'=>'btn btn-default'))}}
                                        {{Form::close()}}
                                    @endif
                                @endif
                            </ul>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
    @if(Auth::check())
    <section id="connexion">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2">
                    {{ Form::open(array('url' => 'comments/' . $id_post)) }}

                    <div class="row control-group">
                        <div class="form-group col-xs-12 floating-label-form-group controls">
                            {{ Form::label('content','Commentaire') }}
                            {{ Form::text('content', null, array('class'=>'form-control input-lg')) }}
                        </div>
                    </div>
                    <br>
                    <div id="success"></div>
                    <div class="row">
                        <div class="form-group col-xs-12">
                            {{ Form::submit("Créer", array('class'=> 'btn btn-lg btn-primary')) }}
                        </div>
                    </div>
                    {{ Form::close() }}
                </div>
            </div>
        </div>
    </section>
    @endif
@stop
