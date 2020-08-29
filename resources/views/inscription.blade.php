@extends('layout')
@section('contenu')
    <form method="post" action="/adm/inscription" class="section">
    {{csrf_field()}}

        <div class="field">
            <label class="label">pseudo</label>
            <div class="control">
                <input class="input" type="text" name="pseudo" value="{{ old('pseudo') }}">
            </div>
            @if($errors->has('pseudo'))
            <p class="help is-danger">{{$errors->first('pseudo')}}</p>
            @endif
        </div>
        <div class="field">
            <label class="label">email</label>
            <div class="control">
                <input class="input" type="text" name="email" value="{{ old('email') }}">
            </div>
            @if($errors->has('email'))
            <p class="help is-danger">{{$errors->first('email')}}</p>
            @endif
        </div>
        <div class="field">
            <label class="label">Mot de passe</label>
            <div class="control">
                <input class="input" type="password" name="password">
            </div>
            @if($errors->has('password'))
            <p class="help is-danger">{{ $errors->first('password') }}</p>
            @endif
        </div>

        <div class="field">
            <label class="label">Mot de passe (confirmation)</label>
            <div class="control">
                <input class="input" type="password" name="password_confirmation">
            </div>
            @if($errors->has('password_confirmation'))
            <p class="help is-danger">{{ $errors->first('password_confirmation') }}</p>
            @endif
        </div>
        <div class="field">
            <div class="control">
            <button class="button is-link" type="submit">register</button>
            </div>
        </div>
@endsection