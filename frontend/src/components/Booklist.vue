<template>
  <div class="bg-orange-400">
    <div class="flex justify-around">
      <div class="flex rounded m-4 p-4 items-center">
        <span class="mr-2 text-bold text-xl">Current Listings</span>
        <svg class="h-8 w-8" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
          <path d="M6 4H5a1 1 0 1 1 0-2h11V1a1 1 0 0 0-1-1H4a2 2 0 0 0-2 2v16c0 1.1.9 2 2 2h12a2 2 0 0 0 2-2V5a1 1 0 0 0-1-1h-7v8l-2-2-2 2V4z"/>
        </svg>
      </div>
      <button class="flex rounded bg-yellow-600 m-4 p-4 items-center hover:bg-yellow-800" @click="modalVisible = true">
        <span class="mr-2 text-bold text-xl">New Listing</span> 
        <svg class="h-8 w-8" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
          <path d="M11 9h4v2h-4v4H9v-4H5V9h4V5h2v4zm-1 11a10 10 0 1 1 0-20 10 10 0 0 1 0 20zm0-2a8 8 0 1 0 0-16 8 8 0 0 0 0 16z"/>
        </svg>
      </button>
    </div>
    <div class="" @click="log">
      <div class="" v-for="book in books" v-bind:key="book.id" @click="bookModal = true">
        <Book v-bind:book="book"/>
      </div>
    </div>
    <Modal class="" :title="bookModalTitle" :visible="bookModal" @close="bookModal = false">
      <button class="flex-1 rounded bg-gray-200 hover:bg-red-500 text-white font-bold py-2 px-2 m-4" @click="bookModal = false">
        Close
      </button>
    </Modal>
    <Modal class="" :title="modalTitle" :visible="modalVisible" @close="modalVisible = false">
      <form>
        <div class="mb-4 text-left">
          <label class="block text-gray-500" for="bookTitle">
            Book Title
          </label>
          <input class="shadow border rounded w-full py-2 px-2 bg-gray-200 focus:bg-white" id="title" type="text" placeholder="Title">
        </div>
        <div class="mb-6 text-left">
          <label class="block text-gray-500" for="author">
            Author
          </label>
          <input class="shadow border rounded w-full py-2 px-2 bg-gray-200 focus:bg-white" id="author" type="text" placeholder="Author">
        </div>
        <div class="mb-6 text-left">
          <label class="block text-gray-500" for="publisher">
            Publisher
            <span class="text-xs text-gray-700 italic uppercase">optional</span>
          </label>
          <input class="shadow border rounded w-full py-2 px-2 bg-gray-200 focus:bg-white" id="publisher" type="text" placeholder="Publisher">
        </div>
        <div class="mb-6 text-left items-center">
          <label class="block text-gray-500" for="isbn">
            ISBN
            <span class="text-xs text-gray-700 italic uppercase">optional</span>
          </label>
          <input class="shadow border rounded w-full py-2 px-2 bg-gray-200 focus:bg-white" id="isbn" type="number" placeholder="(978)-0-321-54589-3">
        </div>
        <div class="mb-6 text-left">
          <label class="block text-gray-500 flex items-center justify-start" for="highlighted">
            <span>Highlighted</span>
            <input class="shadow border rounded ml-4 bg-gray-200 focus:bg-white" id="isbn" type="checkbox">
          </label>
        </div>
        <div class="mb-4 text-left">
          <label class="block text-gray-500" for="condition">
            Condition
          </label>
          <div class="mb-4 relative w-max-1/4">
            <select required class="block shadow border rounded w-full bg-gray-200 focus:bg-white" id="condition">
              <option value="" disabled selected hidden>Select Condition</option>
              <option value="fine"><div class="mt-8">Fine / Like New</div></option>
              <option value="vgood">Very Good</option>
              <option value="good">Good</option>
              <option value="fair">Fair</option>
              <option value="poor">Poor</option>
            </select>
          </div>
        </div>
        <div class="m-auto flex flex-row">
          <button class="flex-1 rounded bg-blue-200 hover:bg-blue-500 text-white font-bold py-2 px-2 m-4" @click="modalVisible = false">
            Submit
          </button>
          <button class="flex-1 rounded bg-gray-200 hover:bg-red-500 text-white font-bold py-2 px-2 m-4" @click="modalVisible = false">
            Close
          </button>
        </div>
      </form>
    </Modal>
  </div>
</template>

<script>
import Book from "./Book.vue";
import Modal from "./Modal.vue";

export default {
  name: "booklist",
  components: {
    Book,
    Modal
  },
  props: ["books"],
  methods: {
    log() {
      console.log("Clicked!");
    }
  },
  data() {
    return {
      modalVisible: false,
      bookModal: false,
      modalTitle: "New Book",
      bookModalTitle: "Detailed Book Info"
    }
  }
};
</script>

<style scoped>
</style>
