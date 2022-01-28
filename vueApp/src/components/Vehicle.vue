<template>
  <div class='grid max-w-sm rounded overflow-hidden bg-white shadow-lg mt-12'>
    <img class='w-full' :src='image' alt='Sunset in the mountains' />
    <div class='px-6 py-4'>
      <div class='font-bold text-xl mb-2'>{{ name }}</div>
      <p class='text-gray-700 text-base' v-html='description' />
    </div>
    <div class='self-end sm:flex sm:flex-wrap px-6 pt-4 pb-2'>
      <div>
        <router-link
        :to='{ name: "vehicleDetail", params: { slug: slug } }'
          class='
            bg-white
            hover:bg-gray-100
            text-gray-800
            font-normal
            py-2
            px-3
            border border-gray-400
            rounded
            shadow
          '
          >More Details</router-link
        >
      </div>
      <div class="mt-6 lg:mt-0 lg:ml-3">
        <span
          class='
            place-self-end
            float-right
            inline-block
            bg-yellow-600
            rounded-full
            px-3
            py-1
            text-sm
            font-semibold
            text-white
            mr-2
            mb-2
          '
          >${{ price }}/day</span
        >
        <availability-badge class='float-right' :available='available' />
      </div>
    </div>
  </div>
</template>

<script>
import AvailabilityBadge from './AvailabilityBadge.vue'
export default {
  components: { AvailabilityBadge },
  props: {
    name: {
      type: String,
      required: true
    },
    description: {
      type: String,
      default: ''
    },
    slug: {
      type: String,
      default: ''
    },
    image: {
      type: String,
      default: null
    },
    price: {
      type: Number,
      default: null
    },
    available: {
      type: Number,
      default: 1
    }
  }
}
</script>
