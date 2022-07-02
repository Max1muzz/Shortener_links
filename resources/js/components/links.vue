<template>
    <div>
        <router-link to="/" class="btn btn-outline-primary">Home</router-link>
        <router-link :to="{name: 'links'}" class="btn btn-outline-primary m-3">All links</router-link>
        <table class="table">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Short link</th>
                <th scope="col">Link</th>
            </tr>
            </thead>
            <tbody>
            <tr v-for="link in links">
                <th scope="row">{{link.id}}</th>
                <td>{{link.short}}</td>
                <td>{{link.link}}</td>
            </tr>
            </tbody>
        </table>

    </div>
</template>

<script>
export default {
    name: "links",
    data() {
        return {
            links: null
        }
    },
    methods: {
        getLinks() {
            axios.get('api/links')
            .then(res => {this.links = res.data.data})
        }
    },
    mounted() {
        this.getLinks()
    }

}
</script>

<style scoped>

</style>
