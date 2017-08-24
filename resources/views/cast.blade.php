<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Title</title>
</head>
<body>
<div id="app">
    <h4>hello</h4>
</div>
<script src="{{ mix('js/app.js') }}"></script>
<script>
    Echo.channel('user.{{ $user->id }}' )
        .listen('SendMessage', (e) => {
            console.log("success");
        });
</script>
</body>
</html>