<template>
<div>
    <div class="filials" v-for="(item, key) in filteredPhones" v-bind:key="item.key" :filter-key="filterKey"> 
        <h2>
            {{ key }} <small></small>
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
            'groups', 
            'filials'
        ],
        methods: {
        },
        computed: {
            filteredPhones: function(){
            var filterKey = this.filterKey;
            var self = this;
            console.log("phones: ", Object.getOwnPropertyNames(this.phones)[0]);
            return this.phones;

            // var orgs = Object.getOwnPropertyNames(this.phones);
            //     return this.phones.filter(function(q){
            //         if (q.getOwnPropertyNames(self.phones)[0].toLowerCase().indexOf(filterKey.toLowerCase())>=0 ){
            //             return true;
            //         }
            //     });
            }
        }
    }
</script>