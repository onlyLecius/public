<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<style>
    .wf-force-outline-none[tabindex="-1"]:focus {
        outline: none;
    }
</style>
<meta charset="pt-br">
<title>
    <?= (config('SYS_NAME_UCF_PRIMARY') . ' ' . config('SYS_NAME_UCF_SECONDARY')) ?> |
    {{ $page_title ?? 'Login' }}
</title>
<meta property="og:image" content="<?= ('SYS_LOGO_URL') ?>">
<meta property="og:url" content="<?= ('SYS_URL') ?>">
<meta property="og:type" content="website">
<meta content="summary_large_image" name="twitter:card">
<meta content="width=device-width, initial-scale=1" name="viewport">
<link href="{{ asset('assets/page.css') }}" rel="stylesheet" type="text/css">
<script src="{{ asset('assets/webfont.js.download') }}" type="text/javascript"></script>
<script type="text/javascript">
    ! function(o, c) {
        var n = c.documentElement,
            t = " w-mod-";
        n.className += t + "js", ("ontouchstart" in o || o.DocumentTouch && c instanceof DocumentTouch) && (n
            .className += t + "touch")
    }(window, document);
</script>
<link rel="apple-touch-icon" sizes="180x180" href="<?= config('SYS_FAVICON_URL') ?>">
<link rel="icon" type="image/png" sizes="32x32" href="<?= config('SYS_FAVICON_URL') ?>">
<link rel="icon" type="image/png" sizes="16x16" href="<?= config('SYS_FAVICON_URL') ?>">
<script src="{{ asset('assets/jquery.js.download') }}" type="text/javascript"></script>
<script src="{{ asset('assets/js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/js(1)') }}" type="text/javascript"></script>

<!-- <script src="{{ asset('assets/script.js.download') }}" type="text/javascript"></script> -->
<link rel="stylesheet" href="{{ asset('assets/css.css') }}" media="all">

<style>
    /* vietnamese */
    @font-face {
        font-family: 'Space Mono';
        font-style: normal;
        font-weight: 400;
        src: url(https://fonts.gstatic.com/s/spacemono/v13/i7dPIFZifjKcF5UAWdDRYE58RWq7.woff2) format('woff2');
        unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+0300-0301, U+0303-0304, U+0308-0309, U+0323, U+0329, U+1EA0-1EF9, U+20AB;
    }

    /* latin-ext */
    @font-face {
        font-family: 'Space Mono';
        font-style: normal;
        font-weight: 400;
        src: url(https://fonts.gstatic.com/s/spacemono/v13/i7dPIFZifjKcF5UAWdDRYE98RWq7.woff2) format('woff2');
        unicode-range: U+0100-02AF, U+0304, U+0308, U+0329, U+1E00-1E9F, U+1EF2-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
    }

    /* latin */
    @font-face {
        font-family: 'Space Mono';
        font-style: normal;
        font-weight: 400;
        src: url(https://fonts.gstatic.com/s/spacemono/v13/i7dPIFZifjKcF5UAWdDRYEF8RQ.woff2) format('woff2');
        unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+0304, U+0308, U+0329, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
    }

    /* vietnamese */
    @font-face {
        font-family: 'Space Mono';
        font-style: normal;
        font-weight: 700;
        src: url(https://fonts.gstatic.com/s/spacemono/v13/i7dMIFZifjKcF5UAWdDRaPpZUFqaHjyV.woff2) format('woff2');
        unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+0300-0301, U+0303-0304, U+0308-0309, U+0323, U+0329, U+1EA0-1EF9, U+20AB;
    }

    /* latin-ext */
    @font-face {
        font-family: 'Space Mono';
        font-style: normal;
        font-weight: 700;
        src: url(https://fonts.gstatic.com/s/spacemono/v13/i7dMIFZifjKcF5UAWdDRaPpZUFuaHjyV.woff2) format('woff2');
        unicode-range: U+0100-02AF, U+0304, U+0308, U+0329, U+1E00-1E9F, U+1EF2-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
    }

    /* latin */
    @font-face {
        font-family: 'Space Mono';
        font-style: normal;
        font-weight: 700;
        src: url(https://fonts.gstatic.com/s/spacemono/v13/i7dMIFZifjKcF5UAWdDRaPpZUFWaHg.woff2) format('woff2');
        unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+0304, U+0308, U+0329, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
    }
</style>

<link href="{{ asset('toastr/toastr.min.css') }}" rel="stylesheet" />
<script src="{{ asset('toastr/toastr.min.js') }}"></script>

<?= config('SYS_BODY_ADD') ?>
