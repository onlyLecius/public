<div data-collapse="small" data-animation="default" data-duration="400" role="banner" class="navbar w-nav">
    <div class="container w-container">
        <a href="{{ route('panel.game') }}" aria-current="page" class="brand w-nav-brand" aria-label="home">
            <img src="{{asset('assets/logo.png')}}" loading="lazy" height="28" alt="" class="image-6">
            <div class="nav-link logo"><?= (config('SYS_NAME_UCF_PRIMARY') . ' ' . config('SYS_NAME_UCF_SECONDARY')) ?></div>
        </a>
        <nav role="navigation" class="nav-menu w-nav-menu">
            <a href="{{ route('panel.game') }}" class="nav-link w-nav-link" style="max-width: 940px;">Jogar</a>
            <a href="{{ route('panel.withdraw') }}" class="nav-link w-nav-link" style="max-width: 940px;">Saque</a>
            <a href="{{ route('panel.indicate') }}" class="nav-link w-nav-link" style="max-width: 940px;">Indique</a>
            <?php
            $user = App\Models\User::where('id', Illuminate\Support\Facades\Auth::id())->first();
            if($user->isAdmin()){?>
                <a href="{{ route('filament.admin.pages.dashboard') }}" class="nav-link w-nav-link" style="max-width: 940px;">Administrador</a>
            <?php  }; ?>
            <a href="{{ route('auth.logout') }}" class="nav-link w-nav-link" style="max-width: 940px;">Sair</a>
            <a href="{{ route('panel.deposit.create') }}" class="button nav w-button">Depositar</a>
        </nav>
        <div class="" style="-webkit-user-select: text;">
            <div class="" style="-webkit-user-select: text;">
                <a href="{{ route('panel.deposit.create') }}" class="menu-button w-nav-dep nav w-button">DEPOSITAR</a>
            </div>
        </div>
        <div class="menu-button w-nav-button" style="-webkit-user-select: text;" aria-label="menu" role="button" tabindex="0" aria-controls="w-nav-overlay-0" aria-haspopup="menu" aria-expanded="false">
            <div class="icon w-icon-nav-menu"></div>
        </div>
    </div>
    <div class="w-nav-overlay" data-wf-ignore="" id="w-nav-overlay-0"></div>
</div>
