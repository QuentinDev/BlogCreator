@extends('layouts.index')
@section('content')
        <div class="container">
            <div class="row">
                @foreach($blogs as $blog)
                <div class="col-sm-4 col-md-4">
                    <div class="post">
                        <div class="post-img-content">
                            <img src="http://www.utexas.edu/cola/centers/european_studies/_files/images/Blog%20picture.jpg" class="img-responsive" />
                            <a href={{URL::to('blogs/display/' . $blog->id)}}><span class="post-title"><b>{{ $blog->title }}</b><br /></span></a>
                        </div>
                        <div class="content">
                            <div class="author">
                                By <b>{{ $blog->user()->first()->username }}</b> |
                                <time>{{ $blog->created_at }}</time>
                                @if(Auth::user()->id = $blog->user_id)
                                    {{Form::open(array('url' => 'blogs/'. $blog->id, "method" => "post"))}}
                                    {{Form::hidden('_method','DELETE') }}
                                    {{Form::submit("Supprimer!",array('class'=>'btn btn-default'))}}
                                    {{Form::close()}}
                                @endif
                            </div>
                            {{ Auth::user()->id }}
                            {{ Auth::user()->username}}
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
@stop