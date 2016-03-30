@extends('_layouts.home')

@section('title')
    Login - Plus Two Notes
@stop

@section('content')
    <div class="mdl-typography--text-center login-form login-form__bg-container">
        <div class="login-form__bg-overlay">
            <h3 class="text--thin">Login</h3>

            <h4 class="text--thin">Get goodies by logging in to our website!</h4>

            @include('_partials.bags.errorbag')

            <div class="login-form__container">
                {!! Form::open(['url' => '/users/login','method' => 'POST']) !!}

                    <!-- Email Input -->
                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                        {!! Form::label('email','Email',['class'=>'label--inverse mdl-textfield__label']) !!}
                        {!! Form::text('email',null,['class' => 'textfield--inverse mdl-textfield__input']) !!}
                    </div>

                    <br />

                    <!-- Password Input -->
                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                        {!! Form::label('password','Password',['class'=>'label--inverse mdl-textfield__label']) !!}
                        {!! Form::password('password',['class' => 'textfield--inverse mdl-textfield__input']) !!}
                    </div>

                    <br />

                    <input type="submit" class="mdl-button mdl-js-button mdl-button--raised mdl-button--accent mdl-js-ripple-effect" value="Login" />

                {!! Form::close() !!}

                <br />

                Or,

                <br />

                <a href="#"
                   class="social-login-button social-login-button--facebook-button mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect">
                    Login With Facebook
                </a>

                <br />

                <a href="#"
                   class="social-login-button social-login-button--google-plus-button mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect">
                    Login With Google Plus
                </a>

                <br />

                <a href="#"
                   class="social-login-button social-login-button--twitter-button mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect">
                    Login With Twitter
                </a>

                <br /><br />

                <a href="#" class="text--color-white">Forgot password?</a>   <a href="{{ url('/users/register') }}" class="text--color-white">Don't have an account?</a>
            </div>
        </div>
    </div>
@stop