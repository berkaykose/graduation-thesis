<template>
  <div class="ReservationForm p-5 bg-white flex flex-wrap items-end">
    <div class="mr-4">
      <input-select
        :label="'Pickup Location'"
        :options="locations"
        @onSelect="setLocation"
      />
    </div>
    <div class="mr-4">
      <label class="text-xs font-semibold text-gray-800 tracking-wide" for="">PICKUP TIME</label>
      <datetime
        type="datetime"
        input-class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-800 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500 mt-1"
        @input="setDate($event, 'pickup')"
        :min-datetime="now"
      />
    </div>
    <div class="mr-4">
      <label class="text-xs font-semibold text-gray-800 tracking-wide" for="">DROP OFF TIME</label>
      <datetime
        type="datetime"
        input-class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-800 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500 mt-1"
        @input="setDate($event, 'dropoff')"
        :min-datetime="now"
      />
    </div>
    <button class="bg-green-600 text-white font-semibold py-3 px-4 rounded mt-3" @click="filterVehicles">Filter vehicles</button>
  </div>
</template>

<script>
import { Datetime } from 'vue-datetime'
import InputSelect from './forms/InputSelect.vue'

export default {
  components: {
    InputSelect,
    Datetime
  },
  computed: {
    locations () {
      return this.$store.getters.allLocations
    },
    now () {
      const date = new Date(Date.now())

      return date.toISOString()
    }
  },
  methods: {
    filterVehicles () {
      this.$store.dispatch('filterVehicles')
    },
    setLocation (value) {
      this.$store.dispatch('setLocation', +value)
    },
    setDate (value, type) {
      this.$store.dispatch('setDates', { value, type })
    }
  }
}
</script>
