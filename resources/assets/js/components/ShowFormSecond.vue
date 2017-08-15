<template>
    <div>
        <el-button @click="showForm" type="text">回复</el-button>
        <div v-show="seen">
            <el-form  ref="form">
                <el-form-item>
                    <el-input type="textarea" v-model="body"></el-input>
                </el-form-item>
                <el-form-item>
                    <el-button type="success" @click="submit" >评论</el-button>
                    <el-button @click="cancle">取消</el-button>
                </el-form-item>
            </el-form>
        </div>
    </div>
</template>
<script>
    export default {
        props:['type','commentable_id','parent_id','user_id'],
        data() {
            return {
                body : '',
                seen : false,
            }
        },
        methods: {
            showForm() {
                this.seen = ! this.seen
            },
            submit(){
                axios.post('/api/comment',{'user_id':this.user_id,'type':this.type,'body':this.body,'commentable_id':this.commentable_id,'parent_id':this.parent_id}).then(response=>{
                    consolg.log(response.data)
                });
            },
            cancle(){
                this.seen = false
            }
        }
    }
</script>