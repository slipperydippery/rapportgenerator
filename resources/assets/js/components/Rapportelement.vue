<template>
    <div class="">
        <p v-html="element.body"></p>
    </div>

</template>

<script>

    export default {
        props: [
            'sector',
            'functie'

        ],

        data() {
            return {
                element: ''
            }
        },

        mounted() {
            this.getElement();
        },


        computed: {
        },

        methods: {
            getElement: function () {
                console.log('getting element');
                var home = this;
                axios.get('/api/element/' + this.sector.id + '/' + this.functie.id)
                    .then(function(response){
                        home.element = response.data;
                    })
                    .catch(function(error){
                        console.log(error);
                    });
            },
        }
    }
</script>
