<template>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Phones Component</div>

                    <div class="panel-body">
                        {{message}}
                        <ul>
                            
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
let phones = require('../phones.js')

    export default {
        mounted() {
            console.log('Component ready.')
        },
        data: function () {
            return { message: phones }
        }
    }
</script>