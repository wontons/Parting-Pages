<template>
  <div>
    <h1>Books</h1>
    <div class="container">
      <div v-bind:key="book.id" v-for="book in books">
        <Book v-bind:book="book" v-on:del-book="$emit('del-book', book.id)"/>
      </div>
    </div>
  </div>
</template>

<script>
import Book from "./Book";

export default {
  name: "booklist",
  components: {
    Book
  },
  props: ["books"]
}
</script>

<style scoped>
    .container {
      display: flex;
      flex-direction: column;
      background: paleturquoise;
    }
</style>