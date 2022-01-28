<template>
  <div class="p-8 mt-8">
    <div class="rounded bg-white overflow-hidden shadow-lg p-8">
      <div class="mb-8 sm:flex sm:flex-wrap lg:flex-row lg:divide-x">
        <div class="lg:w-1/3">
          <img class="w-full" :src="vehicle.image.path"/>
        </div>
        <div class="CarDetails sm:w-full lg:w-1/3 lg:p-8">
          <div class="font-bold text-xl mb-2 mt-6">{{ vehicle.title }}</div>
          <p
            class="text-grey-darker text-base mb-10"
            v-html="vehicle.description"
          />
          <h3 class="mb-4 font-bold text-lg">Available in</h3>
          <span
            class="
              inline-block
              bg-gray-200
              rounded-full
              px-3
              py-1
              text-sm
              font-semibold
              text-gray-700
              mr-2
              mb-2
            "
            v-for="location in vehicle.locations"
            :key="location.index"
            >{{ location.title }}</span
          >
        </div>
        <div class="grid CarPrices sm:w-full lg:w-1/3 lg:p-8">
          <ul class="mt-10">
            <li><strong>By day:</strong> ${{ vehicle.price }}</li>
            <li><strong>Reservation: </strong><span class="text-sm">{{ dates.start }} - {{ dates.end }}</span></li>
            <li><strong>Number of Days:</strong> {{ dates.daysBetween }}</li>
            <br>
            <hr>
            <br>
            <li><strong>Total Cost:</strong> ${{ dates.price }}</li>
          </ul>
          <div class="mt-4">
            <!-- <router-link
              class="bg-green-500 text-white font-bold py-2 px-4 rounded float-right ml-4 inline-block"
              :to="{ name: 'Reservation' }"
            >
              Continue
            </router-link> -->
          </div>
        </div>
      </div>

      <div class="flex">
      </div>
    </div>
  </div>
</template>

<script>
import { DateTime } from 'luxon'
export default {
  components: {
    // DateTime
  },
  computed: {
    vehicle () {
      return this.$store.getters.currentVehicle
    },
    dates () {
      const start = DateTime.fromISO(this.$store.getters.pickupDate)
      const end = DateTime.fromISO(this.$store.getters.dropOffDate)
      const daysBetween = end.diff(start, ['days'])
      const price = this.vehicle.price * daysBetween.values.days

      return {
        start: start.toFormat('dd/MM/yyyy'),
        end: end.toFormat('dd/MM/yyyy'),
        daysBetween: daysBetween.values.days,
        price
      }
    }
  },
  beforeMount () {
    this.$store.dispatch('getVehicle', this.$route.params.slug)

    if (this.$store.getters.pickupDate === '') {
      this.$store.dispatch('setDates', { value: localStorage.getItem('pickup'), type: 'pickup' })
    }
    if (this.$store.getters.dropOffDate === '') {
      this.$store.dispatch('setDates', { value: localStorage.getItem('dropoff'), type: 'dropoff' })
    }
  }
}
</script>
