<template>
    <ul  class="phones-container">
        <li class="panel panel-default" v-for="phone in filteredPhones" v-bind:key="phone.id">
            <div class="phones-blue-box">
                <div class="phones-avatar">
                    <img :src="phone.photo" align="left">
                </div>
                <h4>{{phone.lastname}}</h4>
                <span class="small">{{phone.firstname + " " + phone.secondname}}</span>
            </div>

            <div class="phones-description">
                <p>{{phone.profession}}</p>
                <i class="fa fa-phone fa-2x"></i> 
                <span class="strong">{{phone.int_phone}}</span>
                <i class="fa fa-phone-square fa-2x"></i>
                <span class="strong">{{phone.ext_phone}}</span>
            </div>
        </li>
    </ul>
</template>

<script>
let data = require('../phones.js')

    export default {
        props: ['filterKey'],
        data: function () {
            return { 
                phones: data
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