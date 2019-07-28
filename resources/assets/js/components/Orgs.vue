<template>
<div>
    <div class="filials" v-for="(item, key) in phones" v-bind:key="key" :filter-key="filterKey"> 
        <h2>
            {{ item.name }} <small></small>
        </h2>

        <filials :filter-key="filterKey" 
          :group-selected="groupSelected" 
          :filials="item"
        >
        </filials>
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
            'newphones'
        ],
        methods: {
        },
        computed: {
            filterOrg: function(){
                var self=this;
                var count = 0;
                this.newphones = this.phones;
                for (var org in this.phones){
                    for(var filial in this.phones[org]){
                        for(var key in this.phones[org][filial]){
                            
                            this.newphones[org][filial][key] = this.phones[org][filial][key].filter(function(p){
                                if (
                                    p.lastname.toLowerCase().indexOf(self.filterKey.toLowerCase())>=0 
                                    || p.firstname.toLowerCase().indexOf(self.filterKey.toLowerCase())>=0
                                    || p.secondname.toLowerCase().indexOf(self.filterKey.toLowerCase())>=0
                                    || p.int_phone.indexOf(self.filterKey.toLowerCase())>=0
                                    || p.profession.toLowerCase().indexOf(self.filterKey.toLowerCase())>=0
                                ){
                                    count++;
                                    return true;
                                }
                            });
                        }
                    }
                }
                console.log(this.newphones, count);
                return this.phones;
            }
        }
    }
</script>