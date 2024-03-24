@extends('auth.layout')
@section('content')
    <div data-collapse="small" data-animation="default" data-duration="400" role="banner" class="navbar w-nav">
        <div class="w-nav-overlay" data-wf-ignore="" id="w-nav-overlay-0"></div>
    </div>
    <section id="hero" class="hero-section dark wf-section" style="background: #2a6ebb;">
        <div class="minting-container w-container">
            <h2>LOGIN</h2>
            <a href="{{ route('auth.register') }}">
                <p>Não possui conta? <span style="color:#fe1f4f">Clique aqui</span> <br></p>
            </a>
            <form id="loginForm" name="email-form" action="{{ route('auth.do.login') }}" method="POST">
                @csrf
                <div class="properties">
                    <h4 class="rarity-heading">E-mail</h4>
                    <div class="rarity-row roboto-type2">
                        <input type="email" class="large-input-field w-node-_050dfc36-93a8-d840-d215-4fca9adfe60d-9adfe605 w-input" maxlength="256" name="email" value="{{ old('email') ?? '' }}" placeholder="seuemail@gmail.com" required>
                    </div>
                    <h4 class="rarity-heading">Senha</h4>
                    <div class="rarity-row roboto-type2">
                        <input type="password" class="large-input-field w-node-_050dfc36-93a8-d840-d215-4fca9adfe60d-9adfe605 w-input" maxlength="256" name="password" data-name="password" placeholder="Sua senha" id="myInput" required>
                    </div>
                    <br>
                    <input type="checkbox" onclick="myFunction()"> Mostrar senha
                </div>
                <a href="{{ route('auth.lost_password') }}">
                    <p>Esqueceu sua senha? Clique aqui <br>
                </p>
                </a>
                <div class="">
                    <input type="submit" value="Logar" class="primary-button w-button"><br><br>
                </div>
            </form>
        </div>
    </section>
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
@endsection
