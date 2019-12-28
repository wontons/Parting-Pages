<template>
  <!--div class="max-w-md w-full lg:flex">
    <img class="h-48 lg:h-auto lg:w-48 flex-none bg-cover object-cover rounded-t lg:rounded-t-none lg:rounded-l text-center overflow-hidden" src="@/assets/purchase.jpg" alt="Woman holding a mug" />
    <div class="border-r border-b border-l border-gray-400 lg:border-l-0 lg:border-t lg:border-gray-400 bg-white rounded-b lg:rounded-b-none lg:rounded-r p-4 flex flex-col justify-between leading-normal">
      <div class="mb-8">
        <div class="text-gray-900 font-bold text-xl mb-2">Can coffee make you a better developer?</div>
        <p class="text-gray-700 text-base">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus quia, nulla! Maiores et perferendis eaque, exercitationem praesentium nihil.</p>
      </div>
      <div class="flex justify-center items-center">
        <button class="bg-green-300 text-white font-bold rounded bordered hover:bg-green-600 p-2 m-2">
          Learn more >
        </button>
      </div>
    </div>
  </div-->

  <div class="bg-gray-300 xl:flex xl:w-4/6 rounded-lg border shadow overflow-hidden w-1/2 mt-8 hover:bg-white">
    <img v-if="info.books[0]" src="@/assets/books.jpg" :alt="info.imgAlt" class="w-full xl:w-1/2">
    <img v-if="info.books[1]" src="@/assets/purchase.jpg" :alt="info.imgAlt" class="w-full xl:w-1/2">
    <img v-if="info.books[2]" src="@/assets/selling.jpg" :alt="info.imgAlt" class="w-full xl:w-1/2">
    <!--div class="xl:flex xl:flex-row xl:justify-center"-->
      <div class="p-4 xl:flex xl:flex-col xl:items-center">
        <div class="font-bold text-xl">{{info.title}}</div>
        <div class="text-gray-500">{{info.desc}}</div>
        <button class="text-center bg-orange-400 text-white font-bold rounded bordered hover:bg-orange-600 p-2 m-2" @click="learn">
          Learn more >
        </button>
      </div>
    </div>
  <!--/div-->
</template>

<script>

export default {
  name: "infocard",
  props: {
    info: {}
  },
  methods: {
    learn() {
      alert("what u wanna learn huh?");
    }
  }
}
</script>

<style scoped>

</style>