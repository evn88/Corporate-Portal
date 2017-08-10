<template>
<div class="flex-group">
        <h3>Отдел информационных технологий <small>Код: 8442 | Волгоград, ул.Шопена 13</small></h3>
    <ul  class="phones-container">
        <li class="panel panel-default" v-for="phone in filteredPhones" :key="phone.id">
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
                <a class=""><i class="fa fa-address-card fa-2x" aria-hidden="true"></i></a>
            </div>
        </li>
    </ul>
</div>
</template>

<script>
let data = require('../phones.js')

    export default {
        mounted() {
            //console.log(this.phones)
        },
        data: function () {
            return { 
                search: '',
                phones: data 
            }
        },
        computed:
        {
            filteredPhones:function()
            {
                var self=this;
                return this.phones.filter(function(p){
                    return p.lastname.toLowerCase().indexOf(self.search.toLowerCase())>=0;
                });
            }
        }
    }
</script>