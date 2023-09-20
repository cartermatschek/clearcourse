<template>
    Welcome, {{ store.user.name }}!
</template>

<script>
    import { store } from './../store.js'

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
        }
    }
</script>