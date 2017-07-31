<!doctype html>
<html>
<head>
    <link href="{{ asset('css/markdown8.css') }}" rel="stylesheet">
    <link href="http://cdn.bootcss.com/highlight.js/8.0/styles/monokai_sublime.min.css" rel="stylesheet">
    <script src="http://cdn.bootcss.com/highlight.js/8.0/highlight.min.js"></script>
</head>
<body>
{!! $content !!}
<script >hljs.initHighlightingOnLoad();</script>
</body>
</html>

