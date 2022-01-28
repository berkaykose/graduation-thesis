<template>
  <div class="home">
    <div
      class="HeroBlock mx-6 lg:mx-16 mt-12 mb-12 lg:m-12 rounded shadow-lg bg-hero-pattern"
    >
      <div
        class="flex justify-center items-center h-64"
        style="background-image: url('https://cdn.pixabay.com/photo/2021/01/01/21/09/challenger-5880009_1280.jpg');">
        <reservation-form />
      </div>
    </div>
    <div class="mx-6 lg:mx-16">
      <vehicle-list filtered />
    </div>
    <div class="flex flex-wrap mx-6 mt-10 lg:grid lg:grid-cols-3 justify-items-auto">
      <div class="mx-6 lg:mx-10 shadow-lg rounded bg-gray-200 p-8 mb-6 divide-y divide-gray-400">
        <h2 class="text-base font-bold font-sans text-gray-600 mb-4 text-center">
          We know the service you receive matters
        </h2>
        <p class="text-center">
          So we use real reviews, genuine customer feedback and our own
          experience to guide you through your best options.
        </p>
      </div>
      <div class="mx-6 lg:mx-10 shadow-lg rounded bg-gray-200 p-8 mb-6 divide-y divide-gray-400">
        <h2 class="text-base font-bold font-sans text-gray-600 mb-4 text-center">
          We work with car hire companies all over the world
        </h2>
        <p class="text-center mt-2">
          From household names to small local specialists – to bring you the cars, choices and deals that make the difference to your trip.
        </p>
      </div>
      <div class="mx-6 lg:mx-10 shadow-lg rounded bg-gray-200 p-8 mb-6 divide-y divide-gray-400">
        <h2 class="text-base font-bold font-sans text-gray-600 mb-4 text-center">
          And we stay with you every step of the way
        </h2>
        <p class="text-center mt-2">
          Our customer team is here to support you through your trip, wherever and whenever you need extra help.
        </p>
      </div>
    </div>
  </div>
</template>

<script>
import ReservationForm from '../components/ReservationForm.vue'
import VehicleList from '../components/VehicleList.vue'

export default {
  name: 'Home',
  components: {
    ReservationForm,
    VehicleList
  }
}
</script>
