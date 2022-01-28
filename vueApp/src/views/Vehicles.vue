<template>
  <div class="mx-16 mt-4">
    <div class="sm:flex lg:grid lg:grid-cols-3 justify-items-auto">
      <vehicle
        v-for="(vehicle, index) in vehicles"
        :key="index"
        :name="vehicle.title"
        :description="vehicle.description"
        :image="vehicle.image.path"
        :price="vehicle.price"
        :available="vehicle.available"
        :slug="vehicle.slug"
      />
    </div>
  </div>
</template>

<script>
import Vehicle from '../components/Vehicle.vue'
export default {
  name: 'VehicleList',
  components: {
    Vehicle
  },
  props: {
    filtered: {
      type: Boolean,
      default: false
    }
  },
  computed: {
    vehicles () {
      return this.$store.getters.allVehicles
    },
    filteredVehicles () {
      return this.$store.getters.filteredVehicles
    }
  }
}
</script>
