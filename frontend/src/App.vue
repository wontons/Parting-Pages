<template>
  <div id="app">
    <div id="nav">
      <router-link to="/">Home</router-link> |
      <router-link to="/about">About</router-link>
    </div>
    <router-view />
    <Booklist v-bind:books="books" v-on:del-book="deleteBook" />
  </div>
</template>

<script>
import Booklist from "./componenets/Booklist";

export default {
  name: 'app',
  components: {

  },
  data () {
    return {
      books: [
        {
          id: 1,
          title: "Cat in the Hat",
          author: "Dr. Suess",
          publisher: "cat publishing",
          isbn: "1234-123123123123-123",
          sold: false
        },
        {
          id: 2,
          title: "Cat in the sock",
          author: "Miss Suess",
          publisher: "cat publishing",
          isbn: "3333-123123123123-123",
          sold: false
        },
        {
          id: 3,
          title: "Cat in the dock",
          author: "Mr. Suess",
          publisher: "cat publishing",
          isbn: "6666-123123123123-123",
          sold: true
        }
      ]
    }
  },
  methods :{
    deleteBook(id) {
      this.books = this.books.filter(book => book.id !== id);
    }
  }
}
</script>

<style lang="scss">
#app {
  font-family: "Avenir", Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-align: center;
  color: #2c3e50;
}
#nav {
  padding: 30px;
  a {
    font-weight: bold;
    color: #2c3e50;
    &.router-link-exact-active {
      color: #42b983;
    }
  }
}
</style>
