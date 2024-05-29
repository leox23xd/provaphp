<!-- resources/views/login.blade.php -->
<link rel="stylesheet" href="{{ asset('login.css') }}">

@extends('layouts.app')

@section('content')
<div class="register-page">
    <form method="POST" action="/login">
        @csrf
        <h1 id="titleForm">Login</h1>

        <div class="input-group">
            <label for="email">Email</label>
            <div class="input-container">
                <i class="fas fa-envelope icon"></i>
                <input type="email" id="email" name="email" placeholder="Insira seu email..." required>
            </div>
        </div>

        <div class="input-group">
            <label for="password">Senha</label>
            <div class="input-container">
                <i class="fas fa-lock icon"></i>
                <input type="password" id="password" name="password" placeholder="Insira sua senha..." required>
            </div>

        </div>

        <div class="input-group">
            <label for="confirm-password">Confirme sua Senha</label>
            <div class="input-container">
                <i class="fas fa-lock icon"></i>
                <input type="password" id="password" name="password" placeholder="Confirme sua senha..." required>
            </div>

        </div>

        <div class="containerBotao">
            <button id="btnGoBack" class="cancel botao" type="button" onclick="window.location='/'">Voltar</button>
            <button id="submit" class="textcolor botao" type="submit">Entrar</button>
        </div>

        <p class="perfil-link">Não possui conta? <a href="{{ url('/perfil') }}">Registre-se</a></p>
    </form>
</div>
@endsection
