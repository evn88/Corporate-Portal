<template>
<div>
    <div class="flex-group" v-for="(item, key) in groups" v-bind:key="item.key">
        <h3>{{key}}</h3>
        <phones class="flex-container" 
        :filter-key="filterKey" 
        :phones="item"
        ></phones>
    </div>
</div>
</template>

<script>
    export default {
        props: ['filterKey','groupSelected','phones','groups','filialName'],
        computed:
        {
            filteredGroups:function()
            {
                var self=this;
                // console.log(this.filialName);
                var data = this.phones.filter(function(p){
                    if (
                        p.lastname.toLowerCase().indexOf(self.filterKey.toLowerCase())>=0 
                        || p.firstname.toLowerCase().indexOf(self.filterKey.toLowerCase())>=0
                        || p.secondname.toLowerCase().indexOf(self.filterKey.toLowerCase())>=0
                        || p.int_phone.indexOf(self.filterKey.toLowerCase())>=0
                        || p.profession.toLowerCase().indexOf(self.filterKey.toLowerCase())>=0
                        && p.filial === self.filialName
                    ){
                        return true
                    }
                });
                // return data              
                return _.uniqBy(data,'filial');                
            }
        }
    }
</script>