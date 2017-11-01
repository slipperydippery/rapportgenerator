<template>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Example Component</div>

                    <div class="panel-body">
                        I'm an example component! yes ho
                    </div>
                    <div class="test" v-for="sector in sectors">{{ sector.title }}</div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>

    export default {
        props: [],

        data() {
            return {
                sectors: ['this', 'that'],
            }
        },

        mounted() {
            console.log('Component mounted.')
            this.getSectors();
        },


        computed: {

        },

        methods: {
            getSectors: function () {
                var home = this
                console.log('hereo');
                axios.get('/api/sector')
                    .then(function(response){
                        console.log(response.data);
                        console.log(home.sectors);
                        home.sectors = response.data;
                    })
                    .catch(function(error){
                        console.log(error);
                    });
            },
        }
    }
</script>
