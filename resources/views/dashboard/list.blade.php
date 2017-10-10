<!DOCTYPE html>
<!-- saved from url=(0053)http://www.bublinastudio.com/flattybs3/filetrees.html -->
<html class=" js no-touch localstorage svg">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>File trees | Flatty - Flat Administration Template</title>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

    <meta content="Flat administration template for Twitter Bootstrap. Twitter Bootstrap 3 template with Ruby on Rails support."
          name="description">
    <link href="http://www.bublinastudio.com/flattybs3/assets/images/meta_icons/favicon.ico" rel="shortcut icon"
          type="image/x-icon">
    <link href="http://www.bublinastudio.com/flattybs3/assets/images/meta_icons/apple-touch-icon.png"
          rel="apple-touch-icon-precomposed">
    <link href="http://www.bublinastudio.com/flattybs3/assets/images/meta_icons/apple-touch-icon-57x57.png"
          rel="apple-touch-icon-precomposed" sizes="57x57">
    <link href="http://www.bublinastudio.com/flattybs3/assets/images/meta_icons/apple-touch-icon-72x72.png"
          rel="apple-touch-icon-precomposed" sizes="72x72">
    <link href="http://www.bublinastudio.com/flattybs3/assets/images/meta_icons/apple-touch-icon-114x114.png"
          rel="apple-touch-icon-precomposed" sizes="114x114">
    <link href="http://www.bublinastudio.com/flattybs3/assets/images/meta_icons/apple-touch-icon-144x144.png"
          rel="apple-touch-icon-precomposed" sizes="144x144">
    <link rel="stylesheet" href="{{ asset('css/font-awesome.css') }}">
    <!-- / START - page related stylesheets [optional] -->
    <link href="{{ asset('css/dashboard/ui.dynatree.css') }}" media="screen" rel="stylesheet" type="text/css">
    <!-- / END - page related stylesheets [optional] -->
    <!-- / bootstrap [required] -->
    <link href="{{ asset('css/dashboard/bootstrap.css') }}" media="all" rel="stylesheet" type="text/css">
    <!-- / theme file [required] -->
    <link href="{{ asset('css/dashboard/light-theme.css') }}" media="all" id="color-settings-body-color"
          rel="stylesheet" type="text/css">
    <!-- / coloring file [optional] (if you are going to use custom contrast color) -->
    <link href="{{ asset('css/dashboard/theme-colors.css') }}" media="all" rel="stylesheet" type="text/css">
    <!-- / demo file [not required!] -->
    <link href="{{ asset('css/dashboard/demo.css') }}" media="all" rel="stylesheet" type="text/css">
    <!--[if lt IE 9]>
    <script src="assets/javascripts/ie/html5shiv.js" type="text/javascript"></script>
    <script src="assets/javascripts/ie/respond.min.js" type="text/javascript"></script>
    <![endif]-->
</head>
<body class="contrast-red " style="">
<div class="row">
    <div class="col-sm-12">
        <div class="box bordered-box blue-border" style="margin-bottom:0;">
            <div class="box-header">
                <div class="title">新闻列表</div>
                <div class="actions">
                    <a class="btn box-remove btn-xs btn-link" href="http://www.bublinastudio.com/flattybs3/tables.html#"><i class="icon-remove"></i>
                    </a>

                    <a class="btn box-collapse btn-xs btn-link" href="http://www.bublinastudio.com/flattybs3/tables.html#"><i></i>
                    </a>
                </div>
            </div>
            <div class="box-content box-no-padding">
                <div class="responsive-table">
                    <div class="scrollable-area">
                        <table class="table" style="margin-bottom:0;">
                            <thead>
                            <tr>
                                <th>
                                    标题
                                </th>
                                <th>
                                    副标题
                                </th>
                                <th>
                                    发布时间
                                </th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($data as $value)
                            <tr>
                                <td><a href="{{ url('/dashboard/news/'.$value->id) }}">{{ $value->topic }}</a></td>
                                <td>{{ $value->sub_topic }}</td>
                                <td>{{ $value->created_at }}</td>
                            </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- / jquery [required] -->
<script src="{{ asset('js/dashboard/jquery.min.js') }}" type="text/javascript"></script>

<!-- / jquery mobile (for touch events) -->
<script src="{{ asset('js/dashboard/jquery.mobile.custom.min.js') }}" type="text/javascript"></script>
<!-- / jquery migrate (for compatibility with new jquery) [required] -->
<script src="{{ asset('js/dashboard/jquery-migrate.min.js') }}" type="text/javascript"></script>
<!-- / jquery ui -->
<script src="{{ asset('js/dashboard/jquery-ui.min.js') }}" type="text/javascript"></script>
<!-- / jQuery UI Touch Punch -->
<script src="{{ asset('js/dashboard/jquery.ui.touch-punch.min.js') }}" type="text/javascript"></script>
<!-- / bootstrap [required] -->
<script src="{{ asset('js/dashboard/bootstrap.js') }}" type="text/javascript"></script>
<!-- / modernizr -->
<script src="{{ asset('js/dashboard/modernizr.min.js') }}" type="text/javascript"></script>
<!-- / retina -->
<script src="{{ asset('js/dashboard/retina.js') }}" type="text/javascript"></script>
<!-- / theme file [required] -->
<script src="{{ asset('js/dashboard/theme.js') }}" type="text/javascript"></script>
<!-- / demo file [not required!] -->
<script src="{{ asset('js/dashboard/demo.js') }}" type="text/javascript"></script>
<!-- / START - page related files and scripts [optional] -->

<script src="{{ asset('js/dashboard/jquery.dynatree.min.js') }}" type="text/javascript"></script>
{{--<script>--}}
{{--(function () {--}}
{{--$("#tree1").dynatree();--}}

{{--$("#tree2").dynatree({--}}
{{--checkbox: true,--}}
{{--selectMode: 2,--}}
{{--onSelect: function (select, node) {--}}
{{--var selKeys, selNodes;--}}
{{--selNodes = node.tree.getSelectedNodes();--}}
{{--selKeys = $.map(selNodes, function (node) {--}}
{{--return "[" + node.data.key + "]: '" + node.data.title + "'";--}}
{{--});--}}
{{--return $("#echoSelection2").text(selKeys.join(", "));--}}
{{--},--}}
{{--onClick: function (node, event) {--}}
{{--if (node.getEventTargetType(event) === "title") {--}}
{{--return node.toggleSelect();--}}
{{--}--}}
{{--},--}}
{{--onKeydown: function (node, event) {--}}
{{--if (event.which === 32) {--}}
{{--node.toggleSelect();--}}
{{--return false;--}}
{{--}--}}
{{--},--}}
{{--idPrefix: "dynatree-Cb2-"--}}
{{--});--}}

{{--$("#tree3").dynatree({--}}
{{--dnd: {--}}
{{--preventVoidMoves: true,--}}
{{--onDragStart: function (node) {--}}
{{--return true;--}}
{{--},--}}
{{--onDragEnter: function (node, sourceNode) {--}}
{{--return ["before", "after"];--}}
{{--},--}}
{{--onDrop: function (node, sourceNode, hitMode, ui, draggable) {--}}
{{--return sourceNode.move(node, hitMode);--}}
{{--}--}}
{{--}--}}
{{--});--}}

{{--}).call(this);--}}
{{--</script>--}}
<!-- / END - page related files and scripts [optional] -->

<script src="{{ asset('js/dashboard/bootstrap-tabdrop.js') }}" type="text/javascript"></script>
<script src="{{ asset('js/dashboard/bootbox.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('js/dashboard/jquery.jgrowl.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('js/dashboard/typeahead.js') }}" type="text/javascript"></script>
<script src="{{ asset('js/dashboard/jquery.timeago.js') }}" type="text/javascript"></script>
<script src="{{ asset('js/dashboard/jquery.nestable.js') }}" type="text/javascript"></script>
{{--<script>--}}
{{--$('#click-alert').click(function () {--}}
{{--alert($(this).attr("value"));--}}
{{--})--}}
{{--</script>--}}
</body>
</html>