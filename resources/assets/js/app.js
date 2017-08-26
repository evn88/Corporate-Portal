
/**
 * First we will load all of this project's JavaScript dependencies which
 * include Vue and Vue Resource. This gives a great starting point for
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

import axios from 'axios'
Vue.use(axios)

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the body of the page. From here, you may begin adding components to
 * the application, or feel free to tweak this setup for your needs.
 */
Vue.component('filials', require('./components/Filials.vue'));
Vue.component('groups', require('./components/Groups.vue'));
Vue.component('phones', require('./components/Phones.vue'));

Vue.filter('searchFor', function (value, searchString) {
    
    // The first parameter to this function is the data that is to be filtered.
    // The second is the string we will be searching for.
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
        })

        axios.get('/api/phone/groups')
        .then(response => {
                this.groups = response.data
            })
            .catch(e => {
              this.errors.push(e)
        })
        //this.groups = _.uniqBy([this.phones], 'group')
        //console.log(response.data)
    }
});
