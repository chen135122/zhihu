var http = require('http').Server();
var socket = require('socket.io')(http);
var Redis = require('ioredis');
var redis = new Redis();

redis.subscribe('test-channel');

redis.on('message',function(channel,message){
    console.log(message)
    // message = JSON.parse(message);
    // io.emit('test-channel',message.data);
});

http.listen(3000);
