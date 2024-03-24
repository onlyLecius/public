@extends('client.layout')

@section('content')
<style>
    .buttonCopyLink{
        background-color: #2a6ebb;
        color: white;
        padding: 0.8vw 0.8vw;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 1rem;
        border: none;
        border-radius: 0.5vw;
    }
    .divButtonWithdraw{
        margin: 1vw 0 0 0;
        text-align: center;
    }
    .textButtonWithdrawIndicate{
        background-color: #2a6ebb;
        color: white;
        padding: 0.8vw 0.8vw;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 1.6rem;
    }

    .buttonWithdrawIndicate{
        background-color: #2a6ebb;
        color: white;
        padding: 0.8vw 0.8vw;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 1.6rem;
        border: none;
        border-radius: 0.5vw;
    }
</style>
<section id="hero" class="hero-section dark wf-section" style="background: #2a6ebb;">
    <div class="minting-container w-container">
        <!-- -<img src="{{asset('assets/afiliados/affiliate.gif')}}" loading="lazy" width="240" data-w-id="6449f730-ebd9-23f2-b6ad-c6fbce8937f7" alt="Roboto #6340" class="mint-card-image">- -->
        <h2>Painel de afiliado</h2>
        <p>Este é o resumo de seu resultado como afiliado. <br></p>
        <p>Seu link de afiliado é: <br>
            <b>{{ route('indicate.register', auth()->id()) }}</b>
        </p>
        <script>
            function copiarLinkAfiliado() {
                var affiliateLink = "{{ route('indicate.register', auth()->id()) }}";

                navigator.clipboard.writeText(affiliateLink)
                    .then(() => {
                        alert('Link de afiliado copiado para a área de transferência:');
                    })
                    .catch(err => {
                        console.error('Erro ao copiar texto: ', err);
                    });
            }
        </script>
        <button class='buttonCopyLink' onclick="copiarLinkAfiliado()">Copiar link de afiliado</button>
        <br><br>
        <div class="properties">
            <h3 class="rarity-heading">Extrato</h3>
            <div class="rarity-row roboto-type">
                <div class="rarity-number full">Contabilização pode demorar até 1 hora.</div>
            </div>
            <div class="rarity-row blue">
                <div class="rarity-number full">Saldo disponível:</div>
                <div class="padded">R$ {{ number_format($balance, 2, ',', '.') }}
                </div>
            </div>
            <div class="w-layout-grid grid">
                <div>
                    <div class="rarity-row blue">
                        <div class="rarity-number">Cadastros ativos</div>
                        <div>
                            {{ $user->active_leads }}
                        </div>
                    </div>
                    <div class="rarity-row roboto-type">
                        <div class="rarity-number">Valor por ativo</div>
                        <div>R$ {{number_format($user->cpa, 2, ',', '.')}}</div>
                    </div>

                    <!-- <div class="rarity-row blue">
                        <div class="rarity-number">CPA Pagos</div>
                        R$ {{number_format($total_indications ?? 0, 2, ',', '.')}}
                    </div> -->
                </div>
                <div>
                    <div class="rarity-row roboto-type">
                        <div class="rarity-number">Total de indicações</div>
                        <div>
                            {{ $user->lead_count }}
                        </div>
                    </div>
                     <!-- <div class="rarity-row blue">
                        <div class="rarity-number">Saldo de Revshare</div>
                        R$ {{ number_format($user->getTotalRevAttribute() ?? 0, 2, ',', '.') }}
                    </div> -->
                    <div class="rarity-row roboto-type">
                        <div class="rarity-number">Revshare</div>
                        {{ ($user->rev_fake ?? config('SYS_REV_FAKE_PADRAO')) . '%' }}
                    </div> 
                </div>
            </div>
            <div class="divButtonWithdraw">
                <button class="buttonWithdrawIndicate">
                    <a class="textButtonWithdrawIndicate" href="{{ route('panel.withdraw_indicate') }}" >Solicitar Saque Afiliado</a>
                </button>
            </div>
</section>


<div id="about" class="comic-book white wf-section">
    <div class="minting-container w-container">
        <!--<img src="{{asset('assets/afiliados/sprite_character_king.webp')}}" loading="lazy" width="240" alt="Roboto #6340" class="mint-card-image" data-pagespeed-url-hash="2430110966" onload="pagespeed.CriticalImages.checkImageForCriticality(this);">-->
        <div>
            <h2>Como funciona o sistema de afiliados?</h2>
            <h3>Divulgue seu público e fature</h3>
            <p>O sistema de afiliados é construído para páginas, influenciadores, gestores de tráfego e
                profissionais do marketing digital. Você pode faturar muito mais divulgando a plataforma
                para o
                seu público.</p>
            <h3>Criativos</h3>
            <p>Nossa equipe possui uma gama de criativos prontos para divulgação, contate o suporte para
                afiliados e obtenha os criativos para a divulgação.</p>
            <h3>Saques para a conta bancária</h3>
            <p>Nossos saques ocorrem 24 horas por dia e 7 dias por semana. Basta solicitar via chave PIX no
                seu
                painel e em até 1 hora o dinheiro já estará na sua conta.</p>
        </div>
    </div>
</div>
</div>

<script type="text/javascript">
    var hidden = false;

    $(document).ready(function() {
        $("form").submit(function() {
            $(this).submit(function() {
                return false;
            });
            return true;
        });
    });

    onload = function()  {
        alert("Em Manutenção!");
        window.history.back()
    }
</script>
@endsection
