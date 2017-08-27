<template>
<div>
    <div class="filials" v-for="filial in filteredFilials" v-bind:key="filial.id">
      <h2>
          {{filial.name}} <small>address</small>
      </h2> 
      <groups :filter-key="filterKey" :group-selected="groupSelected" :phones="phones" :filial="filial.id" :groups="groups"></groups>
    </div>
</div>
</template>

<script>
    export default {
        props: ['filterKey','filialSelected','groupSelected','phones', 'groups', 'filials'],
        data: function(){
            return {
            }
        },
        computed:
        {
            filteredFilials:function()
            {
               var self=this;
                return this.filials.filter(function(p){
                    if (
                        //проверяем корневую группу
                       p.pid == null
                    ){
                        return true
                    }
                });
            }
        }
    }
</script>