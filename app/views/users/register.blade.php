@extends('layouts.index')
@section('content')
    <section id="connexion">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>Inscription</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2">
                    {{ Form::open(array('url' => 'users', 'id' => 'contactForm')) }}

                    <div class="row control-group">
                        <div class="form-group col-xs-12 floating-label-form-group controls">
                            {{Form::label('email','Email')}}
                            {{Form::text('email', null, array('class'=>'form-control input-lg'))}}
                        </div>
                    </div>
                    <div class="row control-group">
                        <div class="form-group col-xs-12 floating-label-form-group controls">
                            {{Form::label('username','Pseudo')}}
                            {{Form::text('username', null, array('class'=>'form-control input-lg'))}}
                        </div>
                    </div>
                    <div class="row control-group">
                        <div class="form-group col-xs-12 floating-label-form-group controls">
                            {{Form::label('password', 'Password')}}
                            {{Form::password('password', array('class'=>'form-control input-lg'))}}
                        </div>
                    </div>
                    <br>
                    <div id="success"></div>
                    <div class="row">
                        <div class="form-group col-xs-12">
                            {{Form::submit("S'inscrire", array('class'=> 'btn btn-lg btn-primary'))}}

                        </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@stop