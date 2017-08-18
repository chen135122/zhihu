<template>
    <div v-if="comments.length >0">
        <div v-for="comment in comments">
            <div class="row">
                <div class="col-md-10 column">
                    <div class="media" >
                        <a  class="pull-left"><img width="30" :src="comment.avatar" class="media-object" alt='' /></a>
                        <div class="media-body">
                            <h4 class="media-heading" v-if="comment.parent_id == null">
                                {{comment.name}}
                            </h4>
                            <h4 class="media-heading" v-else>
                                {{comment.name}}<span style="color: red">回复了</span>{{comment.parent_name}}
                            </h4>
                            {{comment.body}}
                        </div>
                    </div>
                    <show-form v-on:listenChild="showComment" v-if="own(comment)" :type="commentType" :user_id="userId" :commentable_id="thisId" :parent_id="comment.id" ></show-form>
                    <hr>
                </div>
                <!--<comment-second type="answer" :user_id="userId" :commentable_id="thisId" :parent_id="comment.id" :group_id="comment.id"></comment-second>-->
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        props:['type','commentable_id','parent_id','login','user_id'],
        data(){
          return{
              comments : []
          }
        },
        computed : {
            userId(){
                return this.user_id
            },
            thisId(){
                return this.commentable_id
            },
            commentType(){
                return this.type
            }
        },
        mounted(){
            axios.post('/api/test',{'type':this.type,'commentable_id':this.commentable_id}).then(response=>{
                this.comments = response.data.comments
            })
        },
        methods:{
            own(data){
                return this.user_id != data.user_id
            },
            showComment(data){
                this.comments.push(data)
            }
        }
    }
</script>