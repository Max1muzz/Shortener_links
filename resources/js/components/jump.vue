<template>
  <div>
      <!-- ****** makes a redirect *********-->
  </div>
</template>

<script>
export default {
    name: "jump",
    data() {},
    methods: {
        jump() {
            axios.get(`/api/link/${this.$route.params.link}`)
            .then(res => {window.location.href = res.data.data.link})
        }
    },
    mounted() {
        this.jump()
    }
}
</script>

<style scoped>

</style>
