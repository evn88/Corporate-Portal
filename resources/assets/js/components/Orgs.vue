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
            console.log("phones: ", this.phones.constructor.name);
                return this.phones;
            }
        }
    }
</script>