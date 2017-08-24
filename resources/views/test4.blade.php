<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.5.0/css/bulma.min.css">
</head>
<body>
<div id="app" style="margin-top: 50px">
    <div class="container">
        <div class="columns">
            <div class="column is-8 is-offset-2">
                <nav class="panel">
                    <p class="panel-heading">
                        发送内容列表
                    </p>
                    <a v-for="message in messages" class="panel-block">
                        {{ message }}
                    </a>
                </nav>
                <br>
                <form v-on:submit.prevent="send" accept-charset="UTF-8">
                    <div class="control field">
                        <input v-model="message" type="text" name="title" required="required" class="input"
                               placeholder="Input Text">
                    </div>
                    <div class="control">
                        <button class="button is-primary">
                            发送
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<script src="https://cdn.bootcss.com/socket.io/2.0.3/socket.io.js"></script>
<script src="//cdn.bootcss.com/vue/2.0.8/vue.min.js"></script>
<script>
    var socket = io();
    new Vue({
        el: '#app',
        data: {
            message: '',
            messages: []
        },
        mounted(){
            //连接index.js的分发频道
            socket.on('chat.message', function (message) {
                this.messages.push(message);
            }.bind(this));
        },
        methods: {
            send() {
                //分发信息到chat.message这个频道，在index.js中获取
                socket.emit('chat.message', this.message);
                this.message = '';
            },
        },
    });
</script>
</body>
</html>