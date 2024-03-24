@extends('client.layout')

@section('content')
<div>
    <!--- nav --->

    <div id="vbprBxidP9" style="position: absolute; top: 100px; width: 100%; line-height: 26px; color: #fff; z-index: 10; text-align: center;" style="background: #ffff;">
        SALDO: <b>R$ {{ number_format( auth()->user()->getBalancesAttribute() , 2, ',', '.') }} </b>
    </div>

    <section id="hero" class="hero-section dark wf-section" style="background: #2a6ebb;">
        <style>
            div.escudo {
                display: block;
                width: 247px;
                line-height: 65px;
                font-size: 12px;
                margin: -60px 0 0 0;
                background-image: url(/assets/img/game/escudo-branco.png);
                background-size: contain;
                background-repeat: no-repeat;
                background-position: center;
                filter: drop-shadow(1px 1px 3px #00000099) hue-rotate(0deg);
            }

            div.escudo img {
                width: 50px;
                margin: -10px 6px 0 0;
            }
        </style>
        <div class="minting-container w-container">

            <h2>JOGUE AGORA!</h2>
            <p>Seja muito bem vindo(a)! 🕹
            <p>
                Lance seu herói com precisão e derrube os porcos alienigenas! Fique atento aos obstáculos no caminho.
            <p>
            </p>
            <div id="mensagemContainer"></div>

            <script>
                // Verifique se o parâmetro 'ganho' está presente na URL
                const urlParams = new URLSearchParams(window.location.search);
                const ganho = urlParams.get('ganho');

                if (ganho !== null) {
                    // Crie um elemento de parágrafo com a mensagem
                    const mensagem = document.createElement('p');

                    if (parseInt(ganho) === 0) {
                        mensagem.innerHTML = "Infelizmente você não ganhou... Mas não se preocupe! Você pode tentar outra vez!";
                    } else {
                        mensagem.innerHTML = `Parabéns!! Você ganhou R$ ${ganho}! Continue assim e fature cada vez mais!`;

                        // Defina a cor do texto como verde
                        mensagem.style.color = 'green';
                    }

                    // Selecione o elemento 'mensagemContainer' e anexe o parágrafo a ele
                    const mensagemContainer = document.getElementById('mensagemContainer');
                    mensagemContainer.appendChild(mensagem);
                }
            </script>

            <form data-name="" id="auth" method="post" aria-label="Form" action="{{ route('panel.start.game') }}">
                @csrf
                <div class="properties">
                    <h4 class="rarity-heading">Valor de Entrada:</h4>
                    <div class="rarity-row roboto-type2">
                        <input type="number" class="large-input-field w-node-_050dfc36-93a8-d840-d215-4fca9adfe60d-9adfe605 w-input" max="250" min="<?= config('SYS_MIN_ENTRADA') ?>" step="1" name="aposta" id="aposta" required="" value="<?= config('SYS_MIN_ENTRADA') ?>" data-gtm-form-interact-field-id="0">
                    </div>
                </div>
                <div class="">
                    <input type="submit" value="Iniciar Rodada!" class="primary-button w-button"><br><br>
                </div>
            </form>

            <p>Valores para jogar: R$<?= number_format(config('SYS_MIN_ENTRADA'), 2, ',', '.') ?> à R$250,00</p>
        </div>
        <div id="wins" style="
                display: block;
                width: 240px;
                font-size: 12px;
                padding: 5px 0;
                text-align: center;
                line-height: 13px;
                background-color: #FFC107;
                border-radius: 10px;
                border: 3px solid #1f2024;
                box-shadow: -3px 3px 0 0px #1f2024;
                margin: -24px auto 0 auto;
                z-index: 1000;
                ">
            <span id="nomejogador"></span><br>
            Ganhou: R$ <span id="valorApostado"></span><br>
            &nbsp;
        </div>
        <script>
            const nomesJogadores = [
                'João', 'Maria', 'Pedro', 'Ana', 'Carlos',
                'Lúcia', 'Ricardo', 'Fernanda', 'Rodrigo', 'Isabela',
                'Paulo', 'Cristina', 'Luiz', 'Mariana', 'Vitor',
                'Aline', 'Gustavo', 'Tatiana', 'Bruno', 'Laura'
            ];
            let indiceAtual = 0;

            function gerarValorAleatorio() {
                return (Math.random() * 25).toFixed(2);
            }

            function atualizarValoresAleatorios() {
                const nomeAleatorio = nomesJogadores[indiceAtual];
                const valorAleatorio = gerarValorAleatorio();

                document.getElementById('nomejogador').textContent = nomeAleatorio;
                document.getElementById('valorApostado').textContent = valorAleatorio;

                // Avança para o próximo nome de jogador
                indiceAtual = (indiceAtual + 1) % nomesJogadores.length;
            }

            // Atualiza a cada 3 segundos
            setInterval(atualizarValoresAleatorios, 3000);
        </script>
    </section>

   <div id="about" class="comic-book white wf-section">
    <div class="minting-container w-container">
        <!--<img src="{{asset('assets/afiliados/sprite_character_king.webp')}}" loading="lazy" width="240" alt="Roboto #6340" class="mint-card-image" data-pagespeed-url-hash="2430110966" onload="pagespeed.CriticalImages.checkImageForCriticality(this);">-->
        <div>
            <h2>Como Joogar?</h2>
            <h3>Guia Passo a Passo</h3>
<p>Descubra a diversão de jogar Angry Cash e mergulhe em um mundo repleto de desafios excitantes. Siga nosso guia passo a passo e torne-se um mestre na arte de lançar pássaros enfurecidos contra estruturas dos porcos alienigenas!</p>

<h3>1. Objetivo do Jogo</h3>
<p>O seu principal objetivo é derrubar todos os porcos alienigenas verdes nas estruturas usando os pássaros disponíveis que você recebera a cada nivel que for se passando. Cada pássaro tem habilidades únicas, então use eles estrategicamente para maximizar seus pontos.</p>

<h3>2. Conheça seus Pássaros</h3>
<p>No início de cada fase, você terá diferentes tipos de pássaros à disposição. Cada um possui habilidades especiais, como velocidade, explosão ou capacidade de se dividir em múltiplos pássaros. Conheça suas características para escolher o mais adequado para a situação.</p>

<h3>3. Mirar e Lançar</h3>
<p>Toque na tela e arraste para mirar. Solte o dedo para lançar o pássaro em direção às estruturas dos porcos. A precisão é fundamental, então ajuste o ângulo e a força do lançamento para otimizar seus resultados.</p>

<h3>4. Derrube os Porcos</h3>
<p>Observe as leis da física! Seus pássaros interagem com as estruturas, causando destruição. Derrube os porcos verdes usando o menor número possível de pássaros para ganhar mais pontos.</p>

<h3>5. Avance de Nível</h3>
<p>Conforme avança, os desafios aumentam. Enfrente novos tipos de porcos, estruturas mais complexas e descubra power-ups especiais para turbinar sua pontuação. A estratégia é a chave para o sucesso!</p>

<h3>6. Ganhe Recompensas Valiosas</h3>
<p>Além da satisfação de superar os níveis, prepare-se para ganhar dinheiro real ao conquistar desafios. A cada nível avançado, você terá a chance de acumular recompensas significativas, incluindo moedas e power-ups valiosos. Essas recompensas financeiras permitirão que você não apenas aprimore seus pássaros, mas também abram portas para ganhos substanciais ao enfrentar desafios ainda mais difíceis.</p>


<p>Agora que você está equipado com as informações necessárias, mergulhe no mundo divertido e desafiador de Angry Birds. Boa sorte, e que a raiva dos pássaros esteja a seu favor!</p>

        </div>
    </div>
</div>




    </div>
    @endsection


