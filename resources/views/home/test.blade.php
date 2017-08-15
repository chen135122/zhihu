<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <title>Grill Restaurant Website Template</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width">

    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="api-token" content="{{ Auth::check() ? 'Bearer '.Auth::user()->api_token : 'Bearer ' }}">

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="//cdn.bootcss.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
    <!-- 引入样式 -->
    {{--<link rel="stylesheet" href="https://unpkg.com/element-ui/lib/theme-default/index.css">--}}
    <!-- 引入组件库 -->
    {{--<script src="https://unpkg.com/element-ui/lib/index.js"></script>--}}
    <link href="{{ asset('css/app.css') }}">
</head>
<body>
<div id="app" class="col-md-8 col-md-offset-2" style="margin-top: 50px">
    <div id="app2">
        <comment type="article" id="5" parent_id=""></comment>
    </div>
</div>
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>