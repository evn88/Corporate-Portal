require('./bootstrap');

import axios from 'axios'
Vue.use(axios)
Vue.component('filials', require('./components/Filials.vue'));
Vue.component('groups', require('./components/Groups.vue'));
Vue.component('phones', require('./components/Phones.vue'));

Vue.filter('searchFor', function (value, searchString) {
    var result = [];
    if(!searchString){
        return value;
    }
    searchString = searchString.trim().toLowerCase();
    result = value.filter(function(item){
        if(item.title.toLowerCase().indexOf(searchString) !== -1){
            return item;
        }
    })
    // Return an array with the filtered data.
    return result;
})
const app = new Vue({
    el: '#app',
    data: {
        searchQuery: '',
        filialSelected: '',
        groupSelected: '',
        showBirthday: '',
        showSettings: JSON.parse(localStorage.getItem('showSettings')),
        errors: [],
        phones: [],
        groups: []
    },
    methods: {
        toggleSettings: function(){
           this.showSettings = !this.showSettings
           localStorage.setItem('showSettings', this.showSettings)
        },
        translit: function( str ) {
            replacer = {
                "q":"й", "w":"ц", "e":"у", "r":"к", "t":"е", "y":"н", "u":"г", 
                "i":"ш", "o":"щ", "p":"з", "[":"х", "]":"ъ", "a":"ф", "s":"ы", 
                "d":"в", "f":"а", "g":"п", "h":"р", "j":"о", "k":"л", "l":"д", 
                ";":"ж", "'":"э", "z":"я", "x":"ч", "c":"с", "v":"м", "b":"и", 
                "n":"т", "m":"ь", ",":"б", ".":"ю", "/":"."
            };       
            
            return str.replace(/[A-z/,.;\'\]\[]/g, function ( x ){
                return x == x.toLowerCase() ? replacer[ x ] : replacer[ x.toLowerCase() ].toUpperCase();
            });
        }
    },
    mounted: function() {
        axios.get('/api/phone/all')
        .then(response => {
            this.phones = response.data
        })
        .catch(e => {
            this.errors.push(e)
        }),

        //для выборки в настройках поиска. Делать повторный запрос не очень хорошо, но пока так...
        axios.get('/api/phone/groups')
        .then(response => {
            this.groups = response.data
        })
        .catch(e => {
            this.errors.push(e)
        })
        //this.groups = _.uniqBy([this.phones], 'group')
        //console.log(response.data)
    },
    computed:
    {
        // filteredGroups:function()
        // {
        //     var self=this;
        //     return this.groups.filter(function(p){
        //         if (
        //             //проверяем есть ли внутри группы элементы, если их нет то пропускаем
        //             _.findIndex(self.phones, function(o) { return o.gid == p.id; }) >= 0
        //         ){
        //             return true
        //         }
        //     });
        // },
        // filteredPhones:function()
        //     {
        //         var self=this;
        //         return this.phones.filter(function(p){
        //             if (
        //                 p.lastname.toLowerCase().indexOf(self.filterKey.toLowerCase())>=0 
        //                 || p.firstname.toLowerCase().indexOf(self.filterKey.toLowerCase())>=0
        //                 || p.secondname.toLowerCase().indexOf(self.filterKey.toLowerCase())>=0
        //                 || p.int_phone.indexOf(self.filterKey.toLowerCase())>=0
        //                 || p.profession.toLowerCase().indexOf(self.filterKey.toLowerCase())>=0
        //             ){
        //                 return true
        //             }
        //         });
        //     }
    }
});
