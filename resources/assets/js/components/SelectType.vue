<template>
    <el-select
            v-model="value9"
            multiple
            filterable
            remote
            placeholder="请输入关键词"
            :remote-method="remoteMethod"
            :loading="loading">
        <el-option
                name="types"
                v-for="item in options4"
                :key="item.value"
                :label="item.label"
                :value="item.value">
        </el-option>
    </el-select>
</template>

<script>
    export default {
        data() {
            return {
                options4: [],
                value9: [],
                list: [],
                loading: false,
                states: []
            }
        },
        mounted() {
            axios.get('/api/articleType').then(response=>{
                this.states = response.data
                this.list = this.states.map(item => {
                    return { value: item, label: item };
                });
            })
        },
        methods: {
            remoteMethod(query) {
                if (query !== '') {
                    this.loading = true;
                    setTimeout(() => {
                        this.loading = false;
                        this.options4 = this.list.filter(item => {
                            return item.label.toLowerCase()
                                    .indexOf(query.toLowerCase()) > -1;
                        });
                    }, 200);
                } else {
                    this.options4 = [];
                }
            }
        }
    }
</script>