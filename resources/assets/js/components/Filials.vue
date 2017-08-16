<template>
<div>
    <div class="filials" v-for="filial in filials" v-bind:key="filial.id">
      <h2>
          {{filial.name}} <small>{{filial.address}}</small>
      </h2> 
      <groups :filter-key="filterKey"></groups>
    </div>
</div>
</template>

<script>
//import phones from './Phones.vue'
    export default {
        props: ['filterKey'],
        data: function(){
            return {
                filials: [
                    { id:1, name: 'ЦРПБ', address: 'Код: (8442) | 40075, г. Волгоград, ул Шопена 13'},
                    { id:1, name: 'Пригородные МЭС', address: 'Код: (8442) | 40075, пгт. Городище'},
                    { id:2, name: 'Жирновские МЭС', address: 'Код: (8442) | 40075, г. Жирновск'},
                    { id:3, name: 'Камышинские МЭС', address: '40075, г. Волгоград, ул Шопена 13'},
                    { id:4, name: 'Михайловские МЭС', address: '40075, г. Волгоград, ул Шопена 13'},
                    { id:5, name: 'Суровикинские МЭС', address: '40075, г. Волгоград, ул Шопена 13'},
                    { id:6, name: 'Северные МЭС', address: '40075, г. Волгоград, ул Шопена 13'},
                    { id:7, name: 'Заволжские МЭС', address: '40075, г. Волгоград, ул Шопена 13'},
                ],
            }
        },
        computed:
        {
            filteredFilials:function()
            {
                var self=this;
                return this.filials.filter(function(p){
                    if (
                        p.name.toLowerCase().indexOf(self.filterKey.toLowerCase())>=0 
                    ){
                        return true
                    }
                });
            }
        }
    }
</script>