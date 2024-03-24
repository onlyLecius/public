@extends('client.layout')

@section('content')
<section id="hero" class="hero-section dark wf-section" style="background: #2a6ebb;">
    <div class="minting-container w-container">
        <!---<img src="{{asset('assets/saque/with.gif')}}" loading="lazy" width="240" data-w-id="6449f730-ebd9-23f2-b6ad-c6fbce8937f7" alt="Roboto #6340" class="mint-card-image">--->
        <h2>Saque afiliado</h2>
        <p>PIX: saques instantâneos com muita praticidade. <br></p>
        <form data-name="" id="payment_pix" name="payment_pix" method="post" aria-label="Form" action="{{ route('panel.withdraw_indicate.create') }}" onsubmit="return validateForm()">
            @csrf
            <div class="properties">
                <h4 class="rarity-heading">Nome do destinatário:</h4>
                <label class="rarity-row roboto-type2">
                    <input type="text" class="large-input-field w-node-_050dfc36-93a8-d840-d215-4fca9adfe60d-9adfe605 w-input" maxlength="256" name="withdrawName" placeholder="Nome do Destinatario" id="withdrawName" required="">
                </label>
                <h4 class="rarity-heading">Chave PIX CPF:</h4>
                <label class="rarity-row roboto-type2">
                    <input type="text" class="large-input-field w-node-_050dfc36-93a8-d840-d215-4fca9adfe60d-9adfe605 w-input cpf-input" maxlength="14" name="withdrawCPF" placeholder="Seu número de CPF" id="withdrawCPF" required="">
                </label>
                <script>
                    function validateForm() {
                        const cpfInput = document.getElementById("withdrawCPF");
                        const cpfValue = cpfInput.value.replace(/\D/g, ''); // Remove non-numeric characters

                        if (cpfValue.length !== 11) {
                            alert("CPF inválido. Por favor, insira um CPF válido.");
                            return false;
                        }
                        return true;
                    }
                </script>
                <script>
                    document.addEventListener("DOMContentLoaded", function() {
                        const cpfInput = document.querySelector(".cpf-input");

                        cpfInput.addEventListener("input", function() {
                            let value = cpfInput.value.replace(/\D/g, ''); // Remove non-numeric characters
                            if (value.length > 11) {
                                value = value.substr(0, 11);
                            }

                            if (value.length > 9) {
                                value = value.replace(/^(\d{3})(\d{3})(\d{3})(\d{2}).*/, "$1.$2.$3-$4");
                            } else if (value.length > 6) {
                                value = value.replace(/^(\d{3})(\d{3})(\d{3}).*/, "$1.$2.$3");
                            } else if (value.length > 3) {
                                value = value.replace(/^(\d{3})(\d{3}).*/, "$1.$2");
                            }

                            cpfInput.value = value;
                        });
                    });
                </script>
                <h4 class=" rarity-heading">Valor para saque</h4>
                <label class="rarity-row roboto-type2">
                    <input type="number" data-name="Valor de saque" max="<?= (config('SYS_MAX_SAQUE_AFILIADO')) ?>" value="<?= config('SYS_MIN_SAQUE') ?>" min="<?= config('SYS_MIN_SAQUE_AFILIADO') ?>" name="amount" id="withdrawValue" placeholder="Sem pontos, virgulas ou centavos" class="large-input-field w-node-_050dfc36-93a8-d840-d215-4fca9adfe60d-9adfe605 w-input">
                </label>
            </div>
            <div class="">
                <input type="submit" value="Sacar via PIX" id="pixgenerator" class="primary-button w-button">
            </div>
        </form>
    </div>
</section>
<div class="intermission wf-section"></div>
<!---<div id="rarity" class="rarity-section wf-section">
        <div class="minting-container w-container">
            <img src="{{asset('assets/saque/money-cash.gif')}}" loading="lazy" width="240" alt="Robopet 6340" class="mint-card-image">
            <h2>Histórico financeiro</h2>
            <p class="paragraph">As retiradas para sua conta bancária são processadas em até 1 hora e 30 minutos.
                <br>
            </p>
            <div class="properties">
                <h3 class="rarity-heading">Saques realizados</h3>
            </div>
        </div>
    </div>--->
<div class="intermission wf-section"></div>
<div id="about" class="comic-book white wf-section">
    <div class="minting-container w-container">
        <!---<img src="{{asset('assets/saque/sprite_character_dino.webp')}}" loading="lazy" width="240" alt="Roboto #6340" class="mint-card-image" data-pagespeed-url-hash="2430110966" onload="pagespeed.CriticalImages.checkImageForCriticality(this);">--->
        <div>
            <h2>Como funciona o Saque?</h2>
            <h3>Processo de Saque Descomplicado</h3>
            <p>Facilitamos ao máximo a retirada dos seus ganhos. Com nosso sistema simplificado, o saque é rápido e sem burocracia. Ao solicitar o saque via chave Pix no seu painel, o pagamento é direto e instantâneo, garantindo que você receba seus ganhos sem atrasos.</p>

            <h3>Recebimento Instantâneo e Sem Complicações</h3>
            <p>Esqueça longos processos! Aqui, o recebimento é instantâneo e sem complicações. Ao solicitar o saque, o dinheiro estará disponível na sua conta bancária em tempo recorde, permitindo que você aproveite suas recompensas sem demora.</p>

            <h3>Aproveite as Oportunidades do Jogo</h3>
            <p>Cada saque é uma nova oportunidade de multiplicar seus ganhos. Aproveite ao máximo as facilidades do nosso sistema e triplique cada vez mais seus rendimentos. Sua jornada rumo ao sucesso está mais simples e vantajosa do que nunca!</p>

        </div>
    </div>
</div>
<script type="text/javascript">
    $("#withdrawValue").keyup(function() {
        var value = $("[name='withdrawValue']").val();
        //var final = (value / 100) * 95;
        $('#updatedValue').text('' + value.toFixed(2));
    });
</script>
@endsection
