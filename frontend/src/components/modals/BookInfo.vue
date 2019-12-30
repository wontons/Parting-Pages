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
              <path d="M2 4v14h14v-6l2-2v10H0V2h10L8 4H2zm10.3-.3l4 4L8 16H4v-4l8.3-8.3zm1.4-1.4L16 0l4 4-2.3 2.3-4-4z"/>
            </svg>
            <span>{{book.publisher || 'Not available'}}</span>
          </div>
          <div class="flex justify-center items-center text-md m-2">
            <svg class="h-4 w-4 mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
              <path d="M0 6l10-6 10 6v2H0V6zm0 12h20v2H0v-2zm2-2h16v2H2v-2zm0-8h4v8H2V8zm6 0h4v8H8V8zm6 0h4v8h-4V8z"/>
            </svg>
            <span>{{book.isbn || 'Not available'}}</span>
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
              <div :class="book.highlighting ? 'rounded p-2 font-bold bg-yellow-400' : ''">{{book.highlighting ? 'highlighting' : 'no highlighting'}}</div>
            </span>
          </div>
          <div class="flex justify-center items-center text-md m-2">
            <svg class="h-4 w-4 mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
              <path d="M2 2c0-1.1.9-2 2-2h12a2 2 0 0 1 2 2v16a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2zm3 1v2h10V3H5zm0 4v2h2V7H5zm4 0v2h2V7H9zm4 0v2h2V7h-2zm-8 4v2h2v-2H5zm4 0v2h2v-2H9zm4 0v6h2v-6h-2zm-8 4v2h2v-2H5zm4 0v2h2v-2H9z"/>
            </svg>
            <span>${{book.price}}</span>
          </div>
          <div class="flex justify-center">
            <div class="f">
              <button class="flex rounded text-white font-bold py-2 px-2 m-2" :class="sold ? 'bg-red-400' : 'bg-green-400 hover:bg-green-600'" @click="sendPurchase">
                {{ sold ? 'Sold' : 'Purchase' }}
              </button>
            </div>
            <button class="flex rounded bg-orange-400 hover:bg-orange-600 text-white font-bold py-2 px-2 m-2" @click="deleteBook(book.id)">
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
import axios from "axios";

export default {
  name: "bookinfo",
  props: {
    book: {},
    visible: Boolean,
    sold: Boolean
  },
  methods: {
    close() {
      this.$emit("close");
    },
    deleteBook(id) {
      axios
        .delete('/api/book/' + id)
        .then(res => {
          //alert user that book was deleted
          alert(res.data);
        })

      //close the info modal
      this.$emit("close");
    },
    sendPurchase() {
      //only call if the book is not sold
      if(!this.sold) {
        this.$emit("purchase");
        this.$emit("close");
      }
    }
  }
};
</script>

<style scoped>
  .hide-bar::-webkit-scrollbar {
    display: none;
  }

  .hide-bar {
    -ms-overflow-style: none;
  }
</style>
