<template>
<div>
    <div class="filials" v-for="(item, key) in filials"  v-bind:key="item.key" :filter-key="filterKey"> 
        <h3>
            {{ item.name }} <small></small>
        </h3>

        <groups :filter-key="filterKey" 
          :group-selected="groupSelected" 
          :groups="item"
        >
        </groups>
    </div>
</div>
</template>

<script>
    export default {
        props: [
            'filterKey',
            'filialSelected',
            'groupSelected',
            'phones', 
            'filials',
            'groups'
        ],
        methods: {
        },
        computed: {
             filterFilials: function(){
                var self=this;
                var count = 0;
                for (var filial in this.filials){
                    for(var key in this.filials[filial]){
                        // console.log(key);
                        this.filials[filial][key].filter(function(p){
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
                    
                }
                this.countFilials = count;
                console.log("count filials", count);
                if (count>0) return this.filials;
                count = 0;
            }
        }
    }
</script>