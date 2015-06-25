@extends('layouts.index')
@section('content')
<div class="container" style="text-align:center">
    <h3>{{ $blog->title }}</h3>
    @if(Auth::check())
        @if(Auth::user()->id == $blog->user_id)
            <a href={{ URL::to('posts/create/' . $blog->id) }}>Créer un article</a>
        @endif
    @endif
    @foreach($blog->posts as $post)
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
                        <li><a href={{URL::to('comments/create/' . $post->id)}}>Voir les commentaires</a></li>
                        @if(Auth::user()->id = $post->id_user)
                            {{Form::open(array('url' => 'posts/'. $post->id, "method" => "post"))}}
                            {{Form::hidden('_method','DELETE') }}
                            {{Form::submit("Supprimer!",array('class'=>'btn btn-default'))}}
                            {{Form::close()}}
                        @endif
                    </ul>
                </div>
            </div>
        </div>
    @endforeach
@stop
@section('comments')
   </div>
</div>
@stop
