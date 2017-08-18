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
    Echo.channel('test-channel')
        .listen('SendMessage', (e) => {
            console.log("success");
        });
</script>
</body>
</html>