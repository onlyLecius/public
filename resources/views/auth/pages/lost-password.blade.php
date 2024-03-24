@extends('auth.layout')

@section('content')

<section id="hero" class="hero-section dark wf-section">
    <div class="minting-container w-container">
        <h2>RECUPERAR SENHA</h2>
        <a href="{{ route('auth.register') }}">
            <p>Não possui conta? Clique aqui <br></p>
        </a>
        <form action="{{ route('auth.do.lost_password') }}" method="post" aria-label="Form">
            @csrf
            <div class="properties">
                <h4 class="rarity-heading">E-mail</h4>
                <div class="rarity-row roboto-type2">
                    <input type="email" class="large-input-field w-node-_050dfc36-93a8-d840-d215-4fca9adfe60d-9adfe605 w-input" maxlength="256" name="email" placeholder="seuemail@gmail.com" id="email" data-gtm-form-interact-field-id="0">
                </div>
            </div>
            <a href="{{ route('auth.login') }}">
                <p>Lembrou sua senha? Clique aqui <br></p>
            </a>
            <div class="">
                <input type="submit" value="Recuperar senha" class="primary-button w-button"><br><br>
            </div>
        </form>
    </div>
</section>
@include('inc.toastr')
@endsection

