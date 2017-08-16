<template>
<div>
    <div class="flex-group" v-for="group in filteredGroups" v-bind:key="group.id">
        <h3>{{group.name}}</h3>
        <phones class="flex-container" :filter-key="filterKey"></phones>
    </div>
</div>
</template>

<script>
//import phones from './Phones.vue'
    export default {
        props: ['filterKey','groupSelected'],
        data: function(){
            return {
                groups: [
                    { id:1, name: 'Отдел информационных технологий'},
                    { id:2, name: 'Отдел кадров'},
                    { id:3, name: 'Отдел капитального строительства'},
                    { id:4, name: 'Отдел управления собственностью'},
                    { id:5, name: 'Служба перспективного развития'},
                ]
            }
        },
        computed:
        {
            filteredGroups:function()
            {
                var self=this;
                return this.groups.filter(function(p){
                    if (
                        p.name.toLowerCase().indexOf(self.groupSelected.toLowerCase())>=0 
                    ){
                        return true
                    }
                });
            }
        }
    }
</script>