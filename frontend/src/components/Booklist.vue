<template>
  <div>
    <h1>Books</h1>
    <div class="list-header">
      <div class="book-header">
        Books
      </div>
      <button class="new-book" @click="modalVisible = true">
        New Book
      </button>
      <AddBookModal :visible="modalVisible" @close="modalVisible = false">
        <div class="modal-title">New Book</div>
        <button class="" @click="modalVisible = false">Close</button>
      </AddBookModal>
    </div>
    <div class="container" @click="log">
      <!--div v-on:click="print" v-bind:key="book.id" v-for="book in books">
        <Book v-bind:book="book" />
      </div-->
      <div v-for="book in books" v-bind:key="book.id">
        <Book v-bind:book="book" />
      </div>
    </div>
  </div>
</template>

<script>
import Book from "./Book.vue";
import AddBookModal from "./AddBookModal.vue";

export default {
  name: "booklist",
  components: {
    Book,
    AddBookModal
  },
  props: ["books"],
  methods: {
    log() {
      console.log("Clicked!");
    }
  },
  data() {
    return {
      modalVisible: false
    };
  }
};
</script>

<style scoped>
.container {
  display: flex;
  flex-direction: column;
  background: paleturquoise;
}

.list-header {
  display: flex;
  flex-direction: row;
  background: blanchedalmond;
}

.book-header {
  display: flex;
  justify-content: left;
  font-size: 2.5em;
  color: azure;
}

.new-book {
  display: flex;
  justify-content: right;
  font-size: 1.8em;
  color: bisque;
}
</style>
