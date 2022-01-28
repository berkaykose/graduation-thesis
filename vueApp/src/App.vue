<template>
  <div id="app" class="bg-white">
    <nav-bar />
    <router-view class=""/>
    <Footer />
  </div>
</template>

<script>
import NavBar from './components/NavBar.vue'
import Footer from './components/Footer.vue'

export default {
  components: {
    NavBar,
    Footer
  },
  mounted () {
    this.$store.dispatch('getLocations')
    this.$store.dispatch('getVehicles')
  }
}
</script>
