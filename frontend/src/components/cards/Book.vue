<template>
  <div class="flex justify-center items-center m-4">
    <BookInfo :book="book" :visible="showinfo" :sold="sold" @close="lessInfo" @purchase="purchaseBook"/>
    <div class="flex-col items-center rounded-lg border shadow overflow-hidden w-1/2 m-2 hover:bg-white">
      <div class="flex-col">
        <div class="flex justify-between items-center m-4">
          <div class="flex justify-center items-center text-2xl font-bold m-2">
            <svg class="h-4 w-4 mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
              <path d="M2 2c0-1.1.9-2 2-2h12a2 2 0 0 1 2 2v18l-8-4-8 4V2z"/>
            </svg>
            <span>{{book.title}}</span>
          </div>
          <div class="flex justify-center items-center text-md m-2">
            <svg class="h-4 w-4 mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
              <path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/>
            </svg>
            <span>{{book.condition}}</span>
          </div>
        </div>
        <div class="flex justify-between items-center m-4">
          <div class="flex justify-center items-center text-lg m-2">
            <svg class="h-4 w-4 mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
              <path d="M12.3 3.7l4 4L4 20H0v-4L12.3 3.7zm1.4-1.4L16 0l4 4-2.3 2.3-4-4z"/>
            </svg>
            <span>{{book.author}}</span>
          </div>
          <div class="flex justify-center items-center text-md m-2 p-2">
            <svg class="h-4 w-4 mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
              <path d="M11 9.27V0l6 11-4 6H7l-4-6L9 0v9.27a2 2 0 1 0 2 0zM6 18h8v2H6v-2z"/>
            </svg>
            <span>
              <div :class="book.highlighting ? 'rounded p-2 font-bold bg-yellow-400' : ''">{{book.highlighting ? 'highlighting' : 'no highlighting'}}</div>
            </span>
          </div>
        </div>
      </div>
      <div class="flex m-2">
        <button @click="moreInfo" class="flex w-1/2 justify-center items-center bg-orange-400 text-white font-bold rounded bordered hover:bg-orange-600 p-2 m-2">
          <span>More info</span>
          <svg class="h-4 w-4 ml-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
            <path d="M4 12a2 2 0 1 1 0-4 2 2 0 0 1 0 4zm6 0a2 2 0 1 1 0-4 2 2 0 0 1 0 4zm6 0a2 2 0 1 1 0-4 2 2 0 0 1 0 4z"/>
          </svg>
        </button>
        <button @click="purchaseBook" class="flex w-1/2 justify-center items-center text-white font-bold rounded bordered p-2 m-2" :class="this.sold ? 'bg-red-400' : 'bg-green-400 hover:bg-green-600'">
          <span>{{ this.sold ? 'Sold!' : 'Purchase Now!'}}</span>
          <svg class="h-4 w-4 ml-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
            <path d="M10 20a10 10 0 1 1 0-20 10 10 0 0 1 0 20zm1-5h1a3 3 0 0 0 0-6H7.99a1 1 0 0 1 0-2H14V5h-3V3H9v2H8a3 3 0 1 0 0 6h4a1 1 0 1 1 0 2H6v2h3v2h2v-2z"/>
          </svg>
        </button>
      </div>
    </div>
  </div>
</template>

<script>
import BookInfo from "@/components/modals/BookInfo.vue";
import axios from "axios";

export default {
  name: "book",
  props: {
    book: {},
    visible: Boolean,
    title: String
  },
  components: {
    BookInfo
  },
  methods: {
    input() {
      this.$emit("input");
    },
    moreInfo() {
      this.showinfo = true;
    },
    lessInfo() {
      this.showinfo = false;
    },
    purchaseBook() {
      axios
        .put('/api/book/' + this.book.id)
        .then(res => {
          //alert user that book was purchased
          if(!this.sold)
            alert(res.data)
        })

      this.sold = true;
    }
  },
  data() {
    return {
      showinfo: false,
      sold: this.book.sold === 1 ? true : false
    }
  }
};
</script>
