<template>
  <div class="bg-gray-300 xl:flex xl:w-4/6 rounded-lg border shadow overflow-hidden items-center w-1/2 mt-8 hover:bg-white">
    <img v-if="info.books[0]" src="@/assets/books.jpg" :alt="info.imgAlt" class="w-full xl:w-1/2">
    <img v-if="info.books[1]" src="@/assets/purchase.jpg" :alt="info.imgAlt" class="w-full xl:w-1/2">
    <img v-if="info.books[2]" src="@/assets/selling.jpg" :alt="info.imgAlt" class="w-full xl:w-1/2">
    <div class="p-4 flex-col">
      <div class="font-bold text-xl">{{ info.title }}</div>
      <div class="text-gray-500">{{ info.desc }}</div>
      <button class="text-center bg-orange-400 text-white font-bold rounded bordered hover:bg-orange-600 p-2 m-2" @click="navigate">
        Start Now >
      </button>
    </div>
  </div>
</template>

<script>
export default {
  name: "infocard",
  props: {
    info: {}
  },
  methods: {
    navigate() {
      this.$router.push("listings");
    }
  }
};
</script>
