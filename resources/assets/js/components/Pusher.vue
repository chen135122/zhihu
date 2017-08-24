<templete>
    <div class="column is-8 is-offset-2">
        <ul class="list-group">
            <li class="list-group-item" v-for="message in messages">
                {{messsage}}
            </li>
        </ul>
        <br>
            <div class="form-group">
                <input v-model="body" type="text" class="form-control" id="exampleInputName2" placeholder="here">
            </div>
            <div class="form-group">
                <button class="button btn-primary" @click="sendMessage">
                    发送
                </button>
            </div>
    </div>
</templete>
<script>
    export default {
        data() {
           return{
               body : '',
               messages : []
           }
        },
        methods: {
            sendMessage() {
                axios.post('api/cast',{'news':this.body}).then(response=>{
                    this.messages.push(response.data.news)
                })
            }
        }
    }
</script>