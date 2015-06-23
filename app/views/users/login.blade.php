@extends('layouts.index')
@section('content')
<section id="connexion">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2>Connexion</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2">
                {{ Form::open(array('url' => 'users/login', 'id' => 'contactForm')) }}

                    <div class="row control-group">
                        <div class="form-group col-xs-12 floating-label-form-group controls">
                            {{Form::label('email','Email')}}
                            {{Form::text('email')}}
                            <label>Email</label>
                            <input type="text" class="form-control" placeholder="Email" required data-validation-required-message="Please enter your name.">
                        </div>
                    </div>
                    <div class="row control-group">
                        <div class="form-group col-xs-12 floating-label-form-group controls">
                            {{Form::label('password', 'Password')}}
                            {{Form::password('password')}}
                        </div>
                    </div>
                    <br>
                    <div id="success"></div>
                    <div class="row">
                        <div class="form-group col-xs-12">
                            {{Form::submit("Se Connecter")}}

                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
@stop