<template>
    <ul  class="phones-container">
        <li class="panel panel-default" 
        v-for="phone in filteredPhones" 
        v-bind:key="phone.id" 
        v-if="phone.group.toLowerCase() == group.toLowerCase() || phone.filial == filial"
        >
            <div class="phones-blue-box">
                <div class="phones-avatar">
                    <img :src="phone.photo" align="left">
                </div>
                <h4>{{phone.lastname}}</h4>
                <span class="small">{{phone.firstname + " " + phone.secondname}}</span>
            </div>

            <div class="phones-description">
                <p>{{phone.profession}}</p>
                <div class="phones-numbers">

                        <i class="fa fa-phone fa-2x" v-if="phone.int_phone"></i> 
                        <span class="strong" v-if="phone.int_phone">{{phone.int_phone}}</span>

                        <i class="fa fa-phone-square fa-2x" v-if="phone.ext_phone"></i>
                        <span class="strong" v-if="phone.ext_phone">{{phone.ext_phone}}</span>

                    <button class="btn btn-default pull-right"><i class="fa fa-ellipsis-v" aria-hidden="true"></i></button>
                </div>
            </div>
        </li>
    </ul>
</template>

<script>
//let data = require('../phones.js')


    export default {
        props: ['filterKey','phones','group','filial'],
        data: function () {
            return { 
 
            }
        },
        computed:
        {
            filteredPhones:function()
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
        }
    }
</script>