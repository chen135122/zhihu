<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    {{--<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.5.0/css/bulma.min.css">--}}
    <link href="http://cdn.bootcss.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">
    <title>Title</title>
</head>
<body>
<div id="app" style="margin-top: 50px">
    <div class="container">
        <div class="columns">
            <pusher-echo></pusher-echo>
        </div>
    </div>
</div>
{{--<script src="//cdn.bootcss.com/vue/2.0.8/vue.min.js"></script>--}}
<script src="{{ mix('js/app.js') }}"></script>
{{--<script>--}}
    {{--new Vue({--}}
        {{--el: '#app',--}}
        {{--data: {--}}
            {{--message: '',--}}
            {{--messages: []--}}
        {{--},--}}
        {{--mounted(){--}}
            {{--Echo.channel('user')--}}
                {{--.listen('SendMessage', (e) => {--}}
                    {{--this.messages.push(e.data)--}}
                {{--});--}}
        {{--},--}}
        {{--methods: {--}}
            {{--send() {--}}
                {{--axios.post('api/cast', {'news': this.message}).then(response => {--}}
                    {{--this.messages.push(response.data.news)--}}
                {{--})--}}
            {{--},--}}
        {{--},--}}
    {{--});--}}

{{--</script>--}}
</body>
</html>