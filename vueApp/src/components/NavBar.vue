<template>
  <nav class="bg-gray-800 p-4">
    <div class="px-20 sm:flex items-center lg:justify-between flex-wrap">
      <div class="flex items-center sm:justify-center flex-shrink-0 text-yellow-500 mr-6">
        <span class="font-mono font-bold text-3xl tracking-tight">Bercar</span>
      </div>
      <div class="">
        <div class="text-base lg:flex-grow">
          <router-link
            to="/"
            class="
              font-sans
              block
              mt-4
              lg:inline-block lg:mt-0
              text-gray-300
              hover:text-white
              mr-4
            "
            >Home</router-link
          >
          <router-link
            to="/vehicles"
            class="
              font-sans
              block
              mt-4
              lg:inline-block lg:mt-0
              text-gray-300
              hover:text-white
              mr-4
            "
            >Vehicles</router-link
          >
          <router-link
            to="/about"
            class="
              block
              mt-4
              lg:inline-block lg:mt-0
              text-gray-300
              hover:text-white
              mr-8
            "
            >About</router-link
          >
          <router-link
            to="/stats"
            class="
              bg-yellow-500
              mt-6
              hover:bg-gray-200
              text-gray-800
              py-2
              px-4
              rounded
              shadow
            "
            >Status</router-link
          >
        </div>
      </div>
    </div>
  </nav>
</template>

<script>
export default {}
</script>
