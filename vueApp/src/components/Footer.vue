<template>
  <div class="divide-y divide-gray-500 bg-gray-800">
    <div
      class="
        flex flex-wrap
        items-center
        justify-center
        mt-10
        px-4
        py-8
        mx-auto
        lg:justify-between
      "
    >
      <div class="flex flex-wrap items-center justify-between">
        <div class="flex items-center flex-shrink-0 text-yellow-500 mr-6">
          <span class="font-mono font-bold text-3xl tracking-tight"
            >Bercar</span
          >
        </div>
        <div class="ml-auto">
          <router-link
            to="/"
            class="
              font-sans
              block
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
              lg:inline-block lg:mt-0
              text-gray-300
              hover:text-white
              mr-4
            "
            >About</router-link
          >
        </div>
      </div>
      <div class="flex justify-center mt-4 lg:mt-0">
        <a href="https://tr-tr.facebook.com/">
          <svg
            fill="currentColor"
            stroke-linecap="round"
            stroke-linejoin="round"
            stroke-width="2"
            class="w-6 h-6 text-blue-600"
            viewBox="0 0 24 24"
          >
            <path
              d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"
            ></path>
          </svg>
        </a>
        <a class="ml-3" href="https://twitter.com/home?lang=tr">
          <svg
            fill="currentColor"
            stroke-linecap="round"
            stroke-linejoin="round"
            stroke-width="2"
            class="w-6 h-6 text-blue-300"
            viewBox="0 0 24 24"
          >
            <path
              d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z"
            ></path>
          </svg>
        </a>
        <a class="ml-3" href="https://www.instagram.com">
          <svg
            fill="none"
            stroke="currentColor"
            stroke-linecap="round"
            stroke-linejoin="round"
            stroke-width="2"
            class="w-6 h-6 text-pink-400"
            viewBox="0 0 24 24"
          >
            <rect width="20" height="20" x="2" y="2" rx="5" ry="5"></rect>
            <path
              d="M16 11.37A4 4 0 1112.63 8 4 4 0 0116 11.37zm1.5-4.87h.01"
            ></path>
          </svg>
        </a>
        <a class="ml-3" href="https://www.linkedin.com">
          <svg
            fill="currentColor"
            stroke="currentColor"
            stroke-linecap="round"
            stroke-linejoin="round"
            stroke-width="0"
            class="w-6 h-6 text-blue-500"
            viewBox="0 0 24 24"
          >
            <path
              stroke="none"
              d="M16 8a6 6 0 016 6v7h-4v-7a2 2 0 00-2-2 2 2 0 00-2 2v7h-4v-7a6 6 0 016-6zM2 9h4v12H2z"
            ></path>
            <circle cx="4" cy="4" r="2" stroke="none"></circle>
          </svg>
        </a>
      </div>
    </div>
    <div
      class="
        flex flex-col
        items-center
        justify-center
        text-gray-500
        font-light
        text-xs
        pt-3
        pb-3
      "
    >
      <p>© Berkay Köse 2022. All rights reserved. Yes, all of them.</p>
      <p>
        Hosted with
        <a href="https://octobercms.com/"><strong>October CMS</strong></a>
      </p>
    </div>
  </div>
</template>

<script>
export default {}
</script>
