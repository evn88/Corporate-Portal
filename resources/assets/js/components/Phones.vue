<template>
<div class="flex-group">
        <h3>Отдел информационных технологий <small>Код: 8442 | Волгоград, ул.Шопена 13 {{searchQuery}}</small></h3>
    <ul  class="phones-container">
        <li class="panel panel-default" v-for="phone in filteredPhones">
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
</div>
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
                   /* console.log(self.filterKey);*/
                    return p.lastname.toLowerCase().indexOf(self.filterKey.toLowerCase())>=0;

                });
            }
        }
       
    }
</script>