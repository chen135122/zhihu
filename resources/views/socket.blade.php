<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Title</title>
</head>
<body>
<div id="app">
    <h4>hello</h4>
</div>
<script src="js/app.js"></script>
<script>
    Echo.channel('user.{{ $user->id }}' )
        .listen('SendMessage', (e) => {
            console.log(e.user.name);
        });
</script>
</body>
</html>