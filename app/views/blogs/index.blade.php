@extends('layouts.index')
@section('content')
        <div class="container">
            <div class="row">
                @foreach($blogs as $blog)
                <div class="col-sm-4 col-md-4">
                    <div class="post">
                        <div class="post-img-content">
                            <img src="http://www.utexas.edu/cola/centers/european_studies/_files/images/Blog%20picture.jpg" class="img-responsive" />
                            <a href={{URL::to('blogs/display/'. $blog->id)}}><span class="post-title"><b>{{ $blog->title }}</b><br /></span></a>
                        </div>
                        <div class="content">
                            <div class="author">
                                By <b>{{ $blog->user()->first()->username }}</b> |
                                <time>{{ $blog->created_at }}</time>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
        <div class="container" style="text-align: center!important;">
            {{ $blogs->links() }}
        </div>


@stop