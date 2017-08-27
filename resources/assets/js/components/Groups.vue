<template>
<div>
    <div class="flex-group" v-for="group in filteredGroups" v-bind:key="group.id">
        <h3>{{group.name}}</h3>
        <phones class="flex-container" :filter-key="filterKey" :phones="phones" :group="group.id" :filial="filial"></phones>
    </div>
</div>
</template>

<script>
//import phones from './Phones.vue'
    export default {
        props: ['filterKey','groupSelected','phones', 'filial'],
        data: function(){
            return {
                groups: []
            }
        },
        mounted: function() {
            axios.get('/api/phone/groups')
            .then(response => {
                    this.groups = response.data
                })
                .catch(e => {
                this.errors.push(e)
            })
            //this.groups = _.uniqBy([this.phones], 'group')
            //console.log(response.data)
        },
        computed:
        {
            filteredGroups:function()
            {
                
                var self=this;
                return this.groups.filter(function(p){
                    if (
                        //проверяем есть ли внутри группы элементы, если их нет то пропускаем
                        _.findIndex(self.phones, function(o) { return o.gid === p.id; }) >= 0 && self.filial === p.pid
                    ){
                        return true
                    }
                });

               
            }
        }
    }
</script>