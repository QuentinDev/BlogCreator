@extends('layouts.index')
@section('content')
    <section id="form">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>Créer un article</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2">
                    {{ Form::open(array('url' => 'posts/' . $id_blog, 'files'=> true, 'method' => 'POST')) }}

                    <div class="row control-group">
                        <div class="form-group col-xs-12 floating-label-form-group controls">
                            {{ Form::label('title',"Titre de l'article") }}
                            {{ Form::text('title', null, array('class'=>'form-control input-lg')) }}
                        </div>
                    </div>
                    <div class="row control-group">
                        <div class="form-group col-xs-12 floating-label-form-group controls">
                            {{ Form::label('content',"Contenu") }}
                            {{ Form::textarea('content', null, array('class'=>'form-control input-lg')) }}
                        </div>
                    </div>
                    <div class="row control-group">
                        <div class="form-group col-xs-12 floating-label-form-group controls">
                            {{ Form::label('file',"Image") }}
                            {{ Form::file('file', array('class'=>'form-control input-lg')) }}
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
@stop