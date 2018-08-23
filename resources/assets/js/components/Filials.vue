<template>
<div>
    <pre>{{ filteredFilials }}</pre>
    <pre>{{ filteredPhones }}</pre>
    <div class="filials" v-for="filial in filteredPhones" v-bind:key="filial.filial">
      <h2>
          {{filial.filial}} <small>address</small>
      </h2> 
      <!-- <groups :filter-key="filterKey" :group-selected="groupSelected" :phones="phones" :filial="filial.id" :groups="groups"></groups> -->
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
            'groups', 
            'filials',
            'filteredPhones',
            'filteredFilials'
        ],
        computed: {
        filteredPhones: function()
            {
                var self=this;
                return this.phones.filter(function(p){
                    if (
                        p.lastname.toLowerCase().indexOf(self.filterKey.toLowerCase())>=0 
                        || p.firstname.toLowerCase().indexOf(self.filterKey.toLowerCase())>=0
                        || p.secondname.toLowerCase().indexOf(self.filterKey.toLowerCase())>=0
                        || p.int_phone.indexOf(self.filterKey.toLowerCase())>=0
                        || p.profession.toLowerCase().indexOf(self.filterKey.toLowerCase())>=0
                    ){
                        return true
                    }
                });
            }
        },
        filteredFilials: function() 
        {
            var self=this;
            console.log(this);
            return this.filter (function(p){
                console. log(p);
                return true;
                // if (p.filial === 'Волгоград') { return true };
            });
        }
    }
</script>