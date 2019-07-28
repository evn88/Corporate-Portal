<template>
<div>
    <div class="flex-group" v-for="(item, key) in groups" v-bind:key="item.key" v-if="countGroups > 0">
        <h3>{{item.name}} <small></small></h3>
        <phones class="flex-container" 
        :filter-key="filterKey" 
        :phones="item"
        ></phones>
    </div>
</div>
</template>

<script>
    export default {
        props: [
            'filterKey',
            'groupSelected',
            'phones',
            'groups',
            'phones'
        ],
        methods: {
            test: function(e){
                console.log("всплытие события",e);
                return e;
            }
        },
        computed:
        {
            filterGroups: function(){
                var self=this;
                var count = 0;
                for (var key in this.groups){
                    this.groups[key].filter(function(p){
                        if (
                            p.lastname.toLowerCase().indexOf(self.filterKey.toLowerCase())>=0 
                            || p.firstname.toLowerCase().indexOf(self.filterKey.toLowerCase())>=0
                            || p.secondname.toLowerCase().indexOf(self.filterKey.toLowerCase())>=0
                            || p.int_phone.indexOf(self.filterKey.toLowerCase())>=0
                            || p.profession.toLowerCase().indexOf(self.filterKey.toLowerCase())>=0
                        ){
                            count++;
                        }
                    });
                }
                this.countGroups = count;
                console.log("countGroups ", count);
                if (count>0) return this.groups;
                count = 0;
            }
        }
    }
</script>