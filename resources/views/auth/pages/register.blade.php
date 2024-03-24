@extends('auth.layout')

@section('content')
<section id="hero" class="hero-section dark wf-section" style="background-image: url(../index_files/05.webp);">

    <div class="minting-container w-container">

        <h2>CADASTRO</h2>
        <p>É rapidinho, menos de 1 minuto. <br>Vai perder a oportunidade de faturar?
            <br>
        </p>

        <img style="width: 80% !important; vertical-align: middle; display: inline-block;" src="/assets/banner.webp" height="250">

        <form name="email-form" method="post" action="{{ route('auth.do.register') }}" aria-label="Form">
            @csrf

            @if(!empty($indicator->id))
            <input type="hidden" name="indicator_id" value="{{ $indicator->id }}" />
            @endif

            <div class="properties">
                <!-- <h4 class="rarity-heading">Qual é o seu nome?</h4>
                <div class="rarity-row roboto-type2">
                    <input type="text" class="large-input-field w-node-_050dfc36-93a8-d840-d215-4fca9adfe60d-9adfe605 w-input" value="{{ old('name') }}" maxlength="256" name="name" placeholder="Seu Nome" id="name_user" required>
                </div> -->

                <h4 class="rarity-heading">Digite seu E-mail</h4>
                <div class="rarity-row roboto-type2">
                    <input type="email" class="large-input-field w-node-_050dfc36-93a8-d840-d215-4fca9adfe60d-9adfe605 w-input" value="{{ old('email') }}" maxlength="256" name="email" placeholder="seuemail@gmail.com" id="email" required>
                </div>

                <h4 class="rarity-heading">Digite seu Whatsapp</h4>
                <div class="rarity-row roboto-type2">
                    <input x-mask="'###.###.###-##'" type="number" class="large-input-field w-node-_050dfc36-93a8-d840-d215-4fca9adfe60d-9adfe605 w-input" value="{{ old('phone') }}" maxlength="256" name="phone" placeholder="119123456789" id="phone" required>
                </div>

                <h4 class="rarity-heading">Digite uma Senha</h4>
                <div class="rarity-row roboto-type2">
                    <input type="password" class="large-input-field w-node-_050dfc36-93a8-d840-d215-4fca9adfe60d-9adfe605 w-input" value="{{ old('password') }}" maxlength="256" name="password" data-name="password" placeholder="Uma senha segura" id="myInput" required="" data-gtm-form-interact-field-id="1">
                </div>

                <br>
                <input type="checkbox" onclick="myFunction()"> Mostrar senha
            </div>
            <div>
                <input type="submit" value="Finalizar cadastro" class="primary-button w-button"><br><br>
                <p class="medium-paragraph _3-2vw-margin">Ao registrar você concorda com os
                    <a href="#">termos de serviço</a> e que lembra do seu e-mail.
                </p>
            </div>
        </form>
    </div>
</section>
<div class="intermission wf-section"></div>
<div id="rarity" class="rarity-section wf-section" style="background: #ffff;">
    <div class="minting-container left w-container" style="background: #2a6ebb;">
        <div class="w-layout-grid grid-2">
            <div style="color: #ffff;">
                <h2>💸 Tudo via PIX &amp; na hora. 🔥</h2>
                <p>Seu dinheiro cai na hora na sua conta bancária, sem burocracia e sem taxas.</p>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    function myFunction() {
        var x = document.getElementById("myInput");
        if (x.type === "password") {
            x.type = "text";
        } else {
            x.type = "password";
        }
    }
</script>
@include('inc.toastr')

@endsection
