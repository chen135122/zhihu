<!doctype html>
<html>
<head>
    <title>404错误页面模板</title>
    <meta charset="UTF-8" />
    <link rel="stylesheet" href="{{ asset('css/404.css') }}">

    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/scriptalizer.js') }}" type="text/javascript"></script>

    <script type="text/javascript">
        $(function(){
            $('#parallax').jparallax({});
        });
    </script>
</head>
<body>
<div id="content" class="narrowcolumn">

    <div id="parallax">
        <div class="error1">
            <img src="{{ asset('images/wand.jpg') }}" alt="Mauer" />
        </div>
        <div class="error2">
            <img src="{{ asset('images/licht.png') }}" alt="Licht" />
        </div>
        <div class="error3">
            <img src="{{ asset('images/halo1.png') }}" alt="Halo1" />
        </div>
        <div class="error4">
            <img src="{{ asset('images/halo2.png') }}" alt="Halo2" />
        </div>
        <div class="error5">
            <img src="{{ asset('images/batman-404.png') }}" alt="Batcave 404" />
        </div>
    </div>
    <div class="footer-banner" style="width:728px; margin:0 auto"></div>
</div>

</body>
</html>


