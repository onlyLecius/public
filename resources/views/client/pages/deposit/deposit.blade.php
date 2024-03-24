@extends('client.layout')

@section('content')
<section id="hero" class="hero-section dark wf-section" style="background: #2a6ebb;">
    <div class="minting-container w-container">
        <!---<img src="{{asset('assets/deposit/deposit.gif')}}" loading="lazy" width="240" data-w-id="6449f730-ebd9-23f2-b6ad-c6fbce8937f7" alt="Roboto #6340" class="mint-card-image">-->
        <h2>Depósito</h2>
        <p>PIX: depósitos instantâneos com uma pitada de diversão e muita praticidade. <br></p>

        @if(empty($pix))
        <form data-name="" id="payment_pix" name="payment_pix" method="post" aria-label="Form" action="{{ route('panel.deposit.store') }}">
            <script>
                localStorage.clear();
            </script>
            @csrf
            <div class="properties">
                <h4 class="rarity-heading">Nome</h4>
                <div class="rarity-row roboto-type2">
                    <input type="text" class="large-input-field w-node-_050dfc36-93a8-d840-d215-4fca9adfe60d-9adfe605 w-input" name="name" placeholder="Seu nome" id="depositName">
                </div>
                <h4 class="rarity-heading">CPF</h4>
                <div class="rarity-row roboto-type2">
                    <input type="text" class="large-input-field w-node-_050dfc36-93a8-d840-d215-4fca9adfe60d-9adfe605 w-input" maxlength="256" name="document" placeholder="Seu número de CPF" id="depositCPF">
                </div>
                <h4 class="rarity-heading">Valor para depósito</h4>
                <div class="rarity-row roboto-type2">
                    <input type="number" data-name="Valor de depósito" min="<?= config('SYS_MIN_DEPOSITO') ?>" name="amount" id="depositAmount" placeholder="Sem pontos, virgulas ou centavos" required="">
                </div>
            </div>
            <div class="">
                <a href="javascript:$(&#39;#depositAmount&#39;).val(25);$(&#39;label.val&#39;).addClass(&#39;ativo&#39;);" class="button nav w-button">R$25<br></a>
                <a href="javascript:$(&#39;#depositAmount&#39;).val(50);$(&#39;label.val&#39;).addClass(&#39;ativo&#39;);" class="button nav w-button">R$50<br></a>
                <a href="javascript:$(&#39;#depositAmount&#39;).val(75);$(&#39;label.val&#39;).addClass(&#39;ativo&#39;);" class="button nav w-button">R$75<br></a>
                <a href="javascript:$(&#39;#depositAmount&#39;).val(100);$(&#39;label.val&#39;).addClass(&#39;ativo&#39;);" class="button nav w-button">R$100<br></a>
                <br><br>
                <br><br>
                <input id="pixgenerator" type="submit" value="Depositar via PIX" class="primary-button w-button"><br><br>
        </form>
        @else

        @if($lastDeposit)
        @switch($lastDeposit->status)
        @case(App\Enums\BankStatusEnum::PAID->value)
        @include('client.pages.deposit.inc.pix_success')
        @break

        @case(App\Enums\BankStatusEnum::WAITING->value)
        @include('client.pages.deposit.inc.pix')
        @include('client.pages.deposit.inc.depositAjaxControl', ['deposit' => $lastDeposit])
        @break

        @default
        @include('client.pages.deposit.inc.pix_fail')
        @endswitch

        @endif

        @endif
    </div>
    </div>
</section>
<div class="intermission wf-section"></div>
<div id="about" class="comic-book white wf-section">
    <div class="minting-container w-container">
        <!--<img src="{{asset('assets/afiliados/sprite_character_king.webp')}}" loading="lazy" width="240" alt="Roboto #6340" class="mint-card-image" data-pagespeed-url-hash="2430110966" onload="pagespeed.CriticalImages.checkImageForCriticality(this);">-->
        <div>
            <h2>Como funciona o Deposito?</h2>
            <h3>Processo de Pagamento Simplificado</h3>
            <p>Facilitamos ao máximo o recebimento dos seus ganhos. Com o Pix, o pagamento é instantâneo e direto para a sua conta bancária. Mas aqui está a novidade emocionante: cada transação não só adiciona saldo real à sua conta, mas também se transforma em moedas dentro do jogo, multiplicando suas oportunidades de faturar até 10x mais!</p>

            <h3>Recebimento Instantâneo</h3>
            <p>Esqueça longas esperas! Com o Pix, você recebe seus ganhos de forma instantânea, sem complicações. Após solicitar o saque via chave Pix no seu painel, em até 1 hora, o dinheiro estará disponível na sua conta bancária.</p>

            <h3>Transforme Pagamentos em Oportunidades</h3>
            <p>Aqui, cada pagamento não é apenas uma transação, é uma chance de impulsionar seu sucesso no jogo. A conversão direta de cada pagamento em moedas dentro do jogo é a chave para alavancar seus ganhos e alcançar novos patamares.</p>

        </div>
    </div>
</div>
<script type="text/javascript">
    var hidden = false;
    jQuery.fn.preventDoubleSubmission = function() {
        $(this).on('submit', function(e) {
            var $form = $(this);

            if ($form.data('submitted') === true) {
                e.preventDefault();
            } else {
                $form.data('submitted', true);
            }
        });

        return this;
    };
    $('#payment_pix').preventDoubleSubmission();
    $('#pixgenerator').preventDoubleSubmission();
</script>
<script>
    var hidden = false;

    setTimeout(function() {
        window.location.href = '/panel/game';
    }, 3 * 60 * 1000);

    $(document).ready(function() {
        $("form").submit(function() {
            $(this).submit(function() {
                return false;
            });
            return true;
        });
    });

    function copyToClipboard() {
        const pixValue = <?php echo json_encode($pix); ?>;

        const elem = document.createElement('textarea');
        elem.value = pixValue; // Copie o valor de pixValue
        document.body.appendChild(elem);
        elem.select();
        document.execCommand('copy');
        document.body.removeChild(elem);
        document.getElementById('depCopiaCodigo').innerHTML = "Código Copiado";
    }

    function onGenerate() {
        var depositAmountElement = document.getElementById("depositAmount").value;

        let famount = document.getElementById("depositAmount").value;

        if (famount == "") {
            alert("Preencha todos os campos.");
            return;
        }

        if (depositAmountElement < 25) {
            alert("Mínimo.");
            return;
        }

        document.getElementById("pixgenerator").value = "Aguarde, estamos gerando";
    }
</script>

@endsection
