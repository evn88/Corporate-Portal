<template>
<div>
    <div class="flex-group" v-for="group in filteredGroups" v-bind:key="group.id">
        <h3>{{group.name}}</h3>
        <phones class="flex-container" :filter-key="filterKey" :phones="phones" :group="group.id" :filial="filial"></phones>
    </div>
</div>
</template>

<script>
    export default {
        props: ['filterKey','groupSelected','phones','groups','filial'],
        computed:
        {
            // filteredGroups:function()
            // {
                
            //     var self=this;
                
            //     return this.groups.filter(function(p){
            //         if (
            //             //проверяем есть ли внутри группы элементы, если их нет то пропускаем
            //             _.findIndex(self.phones, function(o) { return o.gid === p.id; }) >= 0 && self.filial === p.pid
            //         ){
            //             return true
            //         }
            //     });

               
            // }
        }
    }
</script>