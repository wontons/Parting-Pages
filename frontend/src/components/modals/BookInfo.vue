<template>
  <div v-if="visible" @click.self="close" class="bg-semi-75 fixed inset-0 w-full h-full flex items-center justify-center bg-grey-100">
    <div class="hide-bar fixed max-h-full overflow-y-auto mt-8 mb-4 top-0">
      <div class="relative m-auto sm:w-full max-w-4xl bg-white shadow-lg rounded-lg p-8 mb-2">
        <div class="bg-white">
          <div class="top-0 left-0 text-left text-xl text-bold text-black mb-4">
            Detailed Info
          </div>
          <button aria-label="Close" class="absolute top-0 right-0 text-xl text-gray-500 hover:text-red-500 my-1 mx-4" @click.prevent="close">
            x
          </button>
        </div>
        <div class="flex-col rounded-lg text-center justify-start mt-4">
          <div class="flex justify-center items-center text-2xl font-bold m-2">
            <svg class="h-4 w-4 mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
              <path d="M2 2c0-1.1.9-2 2-2h12a2 2 0 0 1 2 2v18l-8-4-8 4V2z"/>
            </svg>
            <span>{{book.title}}</span>
          </div>
          <div class="flex justify-center items-center text-lg m-2">
            <svg class="h-4 w-4 mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
              <path d="M12.3 3.7l4 4L4 20H0v-4L12.3 3.7zm1.4-1.4L16 0l4 4-2.3 2.3-4-4z"/>
            </svg>
            <span>{{book.author}}</span>
          </div>
          <div class="flex justify-center items-center text-md m-2">
            <svg class="h-4 w-4 mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
              <path d="M11 9.27V0l6 11-4 6H7l-4-6L9 0v9.27a2 2 0 1 0 2 0zM6 18h8v2H6v-2z"/>
            </svg>
            <span>{{book.publisher}}</span>
          </div>
          <div class="flex justify-center items-center text-md m-2">
            <svg class="h-4 w-4 mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
              <path d="M11 9.27V0l6 11-4 6H7l-4-6L9 0v9.27a2 2 0 1 0 2 0zM6 18h8v2H6v-2z"/>
            </svg>
            <span>{{book.isbn}}</span>
          </div>
          <div class="flex justify-center items-center text-md m-2">
            <svg class="h-4 w-4 mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
              <path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/>
            </svg>
            <span>{{book.condition}}</span>
          </div>
          <div class="flex justify-center items-center text-md m-2">
            <svg class="h-4 w-4 mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
              <path d="M11 9.27V0l6 11-4 6H7l-4-6L9 0v9.27a2 2 0 1 0 2 0zM6 18h8v2H6v-2z"/>
            </svg>
            <span>
              <div :class="book.highlighted ? 'rounded p-2 font-bold bg-yellow-400' : ''">{{book.highlighted ? 'highlighting' : 'no highlighting'}}</div>
            </span>
          </div>
          <div class="flex">
            <button class="flex rounded bg-green-400 hover:bg-green-600 text-white font-bold py-2 px-2 m-2" @click="close">
              Purchase
            </button>
            <button class="flex rounded bg-orange-400 hover:bg-orange-600 text-white font-bold py-2 px-2 m-2" @click="remove">
              Remove
            </button>
            <button class="flex rounded bg-red-400 hover:bg-red-600 text-white font-bold py-2 px-2 m-2" @click="close">
              Close
            </button>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
//import RemoveDialog from "./RemoveDialog.vue";
//import PurchaseDialog from "./PurchaseDialog.vue";

export default {
  name: "bookinfo",
  props: {
    book: {},
    visible: Boolean
  },
  components: {
    //RemoveDialog,
    //PurchaseDialog
  },
  methods: {
    close() {
      this.$emit("close");
    },
    removeDialog() {
      //this.$emit("close");
      this.showremove = true;
    },
    purchaseDialog() {
      this.showpurchase = true;
    }
  },
  data() {
    return {
      showremove: false,
      showpurchase: false
    }
  }
}
</script>

<style scoped>
  .hide-bar::-webkit-scrollbar {
    display: none;
  }

  .hide-bar {
    -ms-overflow-style: none;
  }
</style>