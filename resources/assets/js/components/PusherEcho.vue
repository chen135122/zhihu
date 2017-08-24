<template>
    <div class="col-md-8 col-md-offset-2">
        <ul class="list-group" v-if="messages.length > 0">
            <li class="list-group-item" v-for="message in messages">
                {{message}}
            </li>
        </ul>
        <br>
        <div class="form-group">
            <input v-model="body" type="text" class="form-control" id="exampleInputName2" placeholder="here">
        </div>
        <div class="form-group">
            <button class="btn btn-primary" @click="sendMessage">
                发送
            </button>
        </div>
    </div>
</template>
<script>
    export default {
        data() {
            return{
                body : '',
                messages : []
            }
        },
        mounted(){
            Echo.channel('news')
                .listen('SendMessage', (e) => {
                    this.messages.push(e.news)
                });
        },
        methods: {
            sendMessage() {
                axios.post('api/cast',{'news':this.body}).then(response=>{
//                    this.messages.push(response.data.news)
                    this.body=''
                })
            }
        }
    }
</script>