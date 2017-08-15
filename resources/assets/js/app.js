
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');
window.Vue = require('vue');

import ElementUI from 'element-ui'
import Vuex from 'vuex';
import 'element-ui/lib/theme-default/index.css'

Vue.use(ElementUI)
Vue.use(Vuex)

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */


Vue.component('example', require('./components/Example.vue'));
Vue.component('question-follow-button', require('./components/QuestionFollowButton.vue'));
Vue.component('user-follow-button', require('./components/UserFollowButton.vue'));
Vue.component('comment', require('./components/Comment.vue'));
Vue.component('comment-second', require('./components/CommentSecond.vue'));
Vue.component('select-topic', require('./components/SelectTopic.vue'));
Vue.component('show-form', require('./components/ShowForm.vue'));
Vue.component('show-form-second', require('./components/ShowFormSecond.vue'));



const store = new Vuex.Store({
     state: {
        comments: []
    },
    mutations: {
        getCommentsList(state,comments){
            state.comments = comments
        },
        submitComment(state,comment){
            state.comments.push(comment)
        }
    },
    actions : {
        getComment(store,comment){
            axios.post('/api/test',{'type':comment.type,'commentable_id':comment.commentable_id}).then(response=>{
                store.commit('getCommentsList',response.data.comments)
            })
        },
        submitOneComment(store,comment){
            axios.post('/api/comment',{'user_id':comment.user_id,'type':comment.type,'body':comment.body,'commentable_id':comment.commentable_id,'parent_id':comment.parent_id,'group_id':comment.group_id}).then(response=>{
                store.commit('submitComment',response.data.comment)
            });
        }
    }
});
const app = new Vue({
    store,
    el: '#app'
});
