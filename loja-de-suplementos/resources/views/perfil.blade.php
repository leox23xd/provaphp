<!-- resources/views/register.blade.php -->
<link rel="stylesheet" href="{{ asset('register.css') }}">

@extends('layouts.app')

@section('content')
<div class="register-page">
    <form method="POST" action="/register">
        @csrf
        <h1 id="titleForm">Registre-se</h1>
        <label for="name">Nome</label>
        <input type="text" id="name" name="name" placeholder="Insira seu nome..." required>

        <label for="email">Email</label>
        <input type="email" id="email" name="email" placeholder="Insira seu email..." required>

        <label for="password">Senha</label>
        <input type="password" id="password" name="password" placeholder="Insira sua senha..." required>

        <label for="confirm-password">Confirme</label>
        <input type="password" id="confirm-password" name="confirmPassword" placeholder="Confirme sua senha..." required>

        <div class="containerBotao wise">
            <button id="btnGoBack" class="cancel botao" type="button" onclick="window.location='/'">Voltar</button>
            <button id="submit" class="textcolor botao" type="submit">Avançar</button>
        </div>
        <p class="login-link" onclick="window.location='/perfil'">Já possui conta? <a href="{{ url('/login') }}">Faça login</a></p>
    </form>
</div>
@endsection
