<template>
  <div class="m-12 pt-2">
    <div class="rounded overflow-hidden bg-white shadow-lg p-8">
      <h2 class="mb-8 text-2xl font-extrabold">Reservation</h2>
      <hr />
      <br />
      <div class="flex flex-wrap justify-between">
        <form class="w-full max-w-md mb-8" @submit.prevent="registerUser">
          <div class="flex flex-wrap -mx-3 mb-6">
            <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
              <label
                class="
                  block
                  uppercase
                  tracking-wide
                  text-gray-800 text-xs
                  font-bold
                  mb-2
                "
                for="name"
              >
                Name
              </label>
              <input
                class="
                  appearance-none
                  block
                  w-full
                  bg-gray-200
                  text-gray-800
                  border border-gray-200
                  rounded
                  py-3
                  px-4
                  leading-tight
                  focus:outline-none focus:bg-white focus:border-gray-200
                "
                id="name"
                type="text"
                name="name"
                v-model="name"
              />
            </div>
          </div>
          <div class="flex flex-wrap -mx-3 mb-6">
            <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
              <label
                class="
                  block
                  uppercase
                  tracking-wide
                  text-gray-800 text-xs
                  font-bold
                  mb-2
                "
                for="surname"
              >
                Surname
              </label>
              <input
                class="
                  appearance-none
                  block
                  w-full
                  bg-gray-200
                  text-gray-800
                  border border-gray-200
                  rounded
                  py-3
                  px-4
                  leading-tight
                  focus:outline-none focus:bg-white focus:border-gray-200
                "
                id="surname"
                type="text"
                name="surname"
                v-model="surname"
              />
            </div>
          </div>
          <div class="flex flex-wrap -mx-3 mb-6">
            <div class="w-full px-3">
              <label
                class="
                  block
                  uppercase
                  tracking-wide
                  text-gray-800 text-xs
                  font-bold
                  mb-2
                "
                for="email"
              >
                Email
              </label>
              <input
                class="
                  appearance-none
                  block
                  w-full
                  bg-gray-200
                  text-gray-800
                  border border-gray-200
                  rounded
                  py-3
                  px-4
                  mb-3
                  leading-tight
                  focus:outline-none focus:bg-white focus:border-gray
                "
                id="email"
                name="email"
                type="email"
                v-model="email"
              />
            </div>
          </div>
          <div class="flex flex-wrap -mx-3 mb-6">
            <div class="w-full px-3">
              <label
                class="
                  block
                  uppercase
                  tracking-wide
                  text-gray-800 text-xs
                  font-bold
                  mb-2
                "
                for="password"
              >
                Password
              </label>
              <input
                class="
                  appearance-none
                  block
                  w-full
                  bg-gray-200
                  text-gray-800
                  border border-gray-200
                  rounded
                  py-3
                  px-4
                  mb-3
                  leading-tight
                  focus:outline-none focus:bg-white focus:border-gray-200
                "
                id="password"
                type="password"
                name="password"
                v-model="password"
              />
            </div>
          </div>
          <div class="flex flex-wrap -mx-3 mb-6">
            <div class="w-full px-3">
              <label
                class="
                  block
                  uppercase
                  tracking-wide
                  text-gray-800 text-xs
                  font-bold
                  mb-2
                "
                for="password_confirmation"
              >
                Password Confirmation
              </label>
              <input
                class="
                  appearance-none
                  block
                  w-full
                  bg-gray-200
                  text-gray-800
                  border border-gray-200
                  rounded
                  py-3
                  px-4
                  mb-3
                  leading-tight
                  focus:outline-none focus:bg-white focus:border-gray-200
                "
                id="password_confirmation"
                type="password"
                name="password_confirmation"
                v-model="password_confirmation"
              />
            </div>
          </div>

          <button
            class="
              bg-green-500
              text-white
              font-bold
              py-3
              px-4
              rounded
              inline-block
            "
          >
            Register
          </button>
        </form>

        <form class="w-full max-w-md" @submit.prevent="loginUser">
          <h2 class="mb-8 text-lg font-light text-red-800">
            If you are already a user, log in
          </h2>
          <div class="flex flex-wrap -mx-3 mb-6">
            <div class="w-full px-3 mb-6 md:mb-0">
              <label
                class="
                  block
                  uppercase
                  tracking-wide
                  text-gray-800 text-xs
                  font-bold
                  mb-2
                "
                for="login_email"
              >
                Email
              </label>
              <input
                class="
                  appearance-none
                  block
                  w-full
                  bg-gray-200
                  text-gray-800
                  border border-gray-200
                  rounded
                  py-3
                  px-4
                  leading-tight
                  focus:outline-none focus:bg-white focus:border-gray-200
                "
                id="login_email"
                type="text"
                name="login_email"
                v-model="login_email"
              />
            </div>
          </div>
          <div class="flex flex-wrap -mx-3 mb-6">
            <div class="w-full px-3">
              <label
                class="
                  block
                  uppercase
                  tracking-wide
                  text-gray-800 text-xs
                  font-bold
                  mb-2
                "
                for="password"
              >
                Password
              </label>
              <input
                class="
                  appearance-none
                  block
                  w-full
                  bg-gray-200
                  text-gray-800
                  border border-gray-200
                  rounded
                  py-3
                  px-4
                  mb-3
                  leading-tight
                  focus:outline-none focus:bg-white focus:border-grey
                "
                id="login_password"
                type="password"
                name="login_password"
                v-model="login_password"
              />
            </div>
          </div>

          <button
            class="
              bg-green-500
              text-white
              font-bold
              py-3
              px-4
              rounded
              inline-block
            "
          >
            Login
          </button>
        </form>

        <div
          class="
            bg-orange-lightest
            border-l-4 border-orange
            text-orange-dark
            p-4
            mt-4
          "
          role="alert"
          v-if="invalidCredentials"
        >
          Email and Password Do not match
        </div>
        <div v-if="loginErrors">
          <div
            class="
              bg-orange-lightest
              border-l-4 border-orange
              text-orange-dark
              p-4
              mt-4
            "
            role="alert"
            v-for="(error, index) in loginErrors"
            :key="index"
          >
            {{ error }}
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  data () {
    return {
      name: '',
      surname: '',
      email: '',
      password: '',
      password_confirmation: '',
      login_email: '',
      login_password: ''
    }
  },
  computed: {
    invalidCredentials () {
      return this.$store.getters.invalidCredentials
    },
    loginErrors () {
      return this.$store.getters.loginErrors
    }
  },
  methods: {
    registerUser () {
      const user = new URLSearchParams()
      user.append('name', this.name)
      user.append('surname', this.surname)
      user.append('email', this.email)
      user.append('password', this.password)
      user.append('password_confirmation', this.password_confirmation)
      this.$store.dispatch('registerUser', user)
    },
    loginUser () {
      const user = new URLSearchParams()
      user.append('login', this.login_email)
      user.append('password', this.login_password)
      this.$store.dispatch('loginUser', user)
    }
  }
}
</script>
