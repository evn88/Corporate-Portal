<template>
<div>
    <div class="flex-group" v-for="group in groups" v-bind:key="group.id">
        <h3>{{group.name}}</h3>
        <phones class="flex-container" :filter-key="searchQuery">загрузка...</phones>
    </div>
</div>
</template>

<script>
//import phones from './Phones.vue'
    export default {
        props: ['filterKey'],
        data: function(){
            return {
                groups: [
                    { id:1, name: 'Отдел информационных технологий'},
                    { id:2, name: 'ОТдел кадров'},
                ]
            }
        }
    }
</script>