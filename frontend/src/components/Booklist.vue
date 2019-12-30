<template>
  <div class="bg-white">
    <div class="flex justify-around">
      <div class="flex rounded m-4 p-4 items-center">
        <span class="mr-2 text-bold text-xl">Current Listings</span>
        <svg class="h-8 w-8" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
          <path d="M6 4H5a1 1 0 1 1 0-2h11V1a1 1 0 0 0-1-1H4a2 2 0 0 0-2 2v16c0 1.1.9 2 2 2h12a2 2 0 0 0 2-2V5a1 1 0 0 0-1-1h-7v8l-2-2-2 2V4z"/>
        </svg>
      </div>
      <button class="flex rounded bg-purple-400 m-4 p-4 items-center hover:bg-purple-600" @click="newListing">
        <span class="mr-2 text-bold text-xl">New Listing</span> 
        <svg class="h-8 w-8" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
          <path d="M11 9h4v2h-4v4H9v-4H5V9h4V5h2v4zm-1 11a10 10 0 1 1 0-20 10 10 0 0 1 0 20zm0-2a8 8 0 1 0 0-16 8 8 0 0 0 0 16z"/>
        </svg>
      </button>
    </div>
    <div>
      <div class="" v-for="book in books" :key="book.id" :visible="bookModal">
        <Book :book="book" @delete-book="deleteBook(id)"/>
      </div>
    </div>
    <Modal class="" :title="bookModalTitle" :visible="bookModal" @close="bookModal = false">
      <button class="flex-1 rounded bg-gray-200 hover:bg-red-500 text-white font-bold py-2 px-2 m-4" @click="bookModal = false">
        Close
      </button>
    </Modal>
    <BookInfo :visible="bookInfoVisible" @close="bookInfoVisible = false" @input="bookInfo"/>
    <NewListing :visible="modalVisible" @close="modalVisible = false"/>
  </div>
</template>

<script>
import Book from "./cards/Book.vue";
import Modal from "./modals/Modal.vue";
import NewListing from "./modals/NewListing.vue";
import BookInfo from "./modals/BookInfo.vue";
import axios from "axios";

export default {
  name: "booklist",
  components: {
    Book,
    Modal,
    NewListing,
    BookInfo
  },
  methods: {
    newListing() {
      this.modalVisible = true;
    },
    bookInfo() {
      this.bookInfoVisible = true;
    },
    deleteBook(id) {
      //attempt to reload the page when a change is made
      for(let i = 0; i < this.books.length; i++){
        if(this.books[i].id === id){
          this.books.splice(i,1);
          return;
        }
      }
    }
  },
  data() {
    return {
      modalVisible: false,
      bookModal: false,
      bookInfoVisible: false,
      bookModalTitle: "Detailed Book Info",
      books: []
    }
  },
  mounted() {
    axios
      .get('/api/book')
      .then(response => {
        this.books = response.data;
      })
      .catch(error => {
        console.log(error);
      })
  }
};
</script>
