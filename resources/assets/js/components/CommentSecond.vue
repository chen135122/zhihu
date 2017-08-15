<template>
    <div>
        <div v-if="secondComments.length >0">
            <div class="row">
                <div class="col-md-10 col-md-offset-1 column" v-for="comment in secondComments">
                    <div class="media" >
                        <a href="#" class="pull-left"><img src="http://ibootstrap-file.b0.upaiyun.com/lorempixel.com/64/64/default.jpg" class="media-object" alt='' /></a>
                        <div class="media-body">
                            <h4 class="media-heading">
                                {{comment.name}}<span style="color: red">回复了</span>{{comment.parent_name}}
                            </h4>{{comment.body}}
                        </div>
                    </div>
                    <show-form v-if="own(comment)" type="answer" :user_id="userId" :group_id="groupId" :commentable_id="thisId" :parent_id="comment.id"></show-form>
                    <hr>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        props: ['type', 'commentable_id', 'parent_id', 'user_id', 'group_id'],
        data(){
            return {
                secondComments: [],
                seen: false
            }
        },
        mounted(){
            axios.post('/api/second/comment', {
                'type': this.type,
                'group_id': this.group_id,
                'commentable_id': this.commentable_id
            }).then(response => {
                this.secondComments = response.data.secondComments
                console.log(response.data.secondComments)
            })
        },
        computed: {
            userId(){
                return this.user_id
            },
            thisId(){
                return this.commentable_id
            },
            groupId(){
                return this.group_id
            }
        },
        methods : {
            own(data){
                return this.user_id != data.user_id
            }
        }
    }
</script>