<template>
    <div>
        <router-link to="/" class="btn btn-outline-primary">Home</router-link>
        <router-link :to="{name: 'links'}" class="btn btn-outline-primary m-3">All links</router-link>
        <div class="mt-3">
            <b>Insert link:</b>
            <input class="form-control" v-model="link" type="url">
        </div>
        <div v-if="error_url" class="mt-2 w-25">
            <p class="text-danger">This is not correct URL</p>
        </div>
        <div class="mt-3">
            <input :disabled="!isDisabled" @click.prevent="shortLink" class="btn btn-primary" type="submit" value="Shorten">
        </div>
        <div v-if="short">
            <p class="mt-3">Your shorter link: <a :href="short">{{ short }}</a></p>
        </div>
    </div>
</template>

<script>
export default {
    name: "home",
    data() {
        return {
            link: null,
            short: null,
            error_url: null
        }
    },
    methods: {
        shortLink() {
            axios.post('api/', {link: this.link})
            .then(res => {
                this.short = res.data
                this.link = null
                this.error_url = false
            })
            .catch(error => {
                 this.error_url = true

            })
        }
    },
    computed: {
        isDisabled(){
            return this.link
        }
    }
}
</script>

<style scoped>

</style>
