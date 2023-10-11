<template>
    <div class="max-w-xl">
        <div>
            <label class="block">Name</label>
            <input type="text" v-model="name" class="block w-full" > 
        </div>
        <div>
            <label class="block">Description</label>
            <textarea v-model="description" class="block w-full"></textarea>
        </div>
        <button @click="save()">Save</button>
    </div>
</template>

<script>
    

    export default {
        data() {
            return {
               name: "",
               description: "",
            }
        },
        methods: {
            save() {
                axios.post('/api/courses', {
                    name: this.name,
                    description: this.description,
                }).then((response) => {
                    console.log(response.data);
                })
            }
        },
        created() {
            
        }
    }
</script>