<template>
  <div>
    <h1>Books</h1>
    <div class="container">
      <!--div v-on:click="print" v-bind:key="book.id" v-for="book in books">
        <Book v-bind:book="book" />
      </div-->
      <div v-for="book in books" v-bind:key="book.id">
        <Book v:-on:click="log" v-bind:book="book" />
      </div>
    </div>
  </div>
</template>

<script>
import Book from "./Book.vue";

export default {
  name: "booklist",
  components: {
    Book
  },
  props: ["books"],
  methods: {
    log () {
      console.log("Clicked!");
    }
  }
}
</script>

<style scoped>
    .container {
      display: flex;
      flex-direction: column;
      background: paleturquoise;
    }
</style>