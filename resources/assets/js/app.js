
/**
 * First we will load all of this project's JavaScript dependencies which
 * include Vue and Vue Resource. This gives a great starting point for
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the body of the page. From here, you may begin adding components to
 * the application, or feel free to tweak this setup for your needs.
 */
Vue.component('filials', require('./components/Filials.vue'));
Vue.component('groups', require('./components/Groups.vue'));
Vue.component('phones', require('./components/Phones.vue'));

const app = new Vue({
    el: '#app',
    data: {
        searchQuery: '',
        filialSelected: '',
        showSettings: JSON.parse(localStorage.getItem('showSettings')),
        allSettings: { 
            filialSelected: this.filialSelected,
            group: '' 
        }
    },
    methods: {
        changeShowSettings: function(){
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
    }
});
