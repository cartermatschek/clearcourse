<template>
    Welcome, {{ store.user.name }}!
    <CourseNew></CourseNew>
</template>

<script>
    import { store } from './../store.js'
    import CourseNew from './CourseNew.vue'

    export default {
        data() {
            return {
                store,
            }
        },
        created() {
            axios.get('/api/user').then((response) => {
                store.user = response.data;
            })
        },
        components: {
            CourseNew   
        }
    }
</script>