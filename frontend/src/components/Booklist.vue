<template>
  <div>
    <div class="flex flex-row space-between bg-white">
      <div class="flex-1 text-black font-bold m-4">
        Books
      </div>
      <button class="flex-1 rounded bg-blue-200 hover:bg-blue-600 text-white font-bold m-4" @click="modalVisible = true">
        New Book
      </button>
    </div>
    <div class="" @click="log" >
      <button @click="bookModal = true">click me</button>
      <div v-for="book in books" v-bind:key="book.id">
        <Book v-bind:book="book"/>
      </div>
    </div>
    <Modal class="" :title="bookModalTitle" :visible="bookModal" @close="bookModal = false">
      <button class="flex-1 rounded bg-gray-200 hover:bg-red-500 text-white font-bold py-2 px-2 m-4" @click="bookModal = false">
        Close
      </button>
    </Modal>
    <Modal class="" :title="modalTitle" :visible="modalVisible" @close="modalVisible = false">
      <form class="">
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
          </label>
          <input class="shadow border rounded w-full py-2 px-2 bg-gray-200 focus:bg-white" id="publisher" type="text" placeholder="Publisher">
        </div>
        <div class="mb-6 text-left">
          <label class="block text-gray-500" for="isbn">
            ISBN
          </label>
          <input class="shadow border rounded w-full py-2 px-2 bg-gray-200 focus:bg-white" id="isbn" type="number" placeholder="(978)-0-321-54589-3">
        </div>
        <div class="mb-6 text-left">
          <label class="block text-gray-500" for="condition">
            Condition
          </label>
          <div class="mb-6 relative w-max-1/4">
            <select required class="block shadow border rounded w-full bg-gray-200 focus:bg-white" id="condition">
              <option value="" disabled selected hidden>Select Condition</option>
              <option value="fine">Fine / Like New</option>
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
