export default {

    template: '<div><h1>{{ notification }}</h1></div>',

    props: ['message'],

    data() {
        return {
            message: 'Hello World'
        }
    },

    computed: {
        notification() {
            return this.message.toUpperCase();
        }
    }

};