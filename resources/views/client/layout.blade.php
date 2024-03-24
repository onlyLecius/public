<!DOCTYPE html>
<html lang="pt-br" class="w-mod-js w-mod-ix wf-spacemono-n4-active wf-spacemono-n7-active wf-active">
<head>
    @if(View::hasSection('includs'))
        @yield('includs')
    @endif
    @include('client.inc.head')
</head>

	<body>
		<?= config('SYS_BODY_ADD') ?>
        @include('client.inc.nav')
		@yield('content')

        @include('inc.toastr')
		@include('inc.footer')
	</body>
</html>
