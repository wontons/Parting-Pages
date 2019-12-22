<template>
  <div class="book">
    <div class="book-text">
      <div class="book-title book-item">{{book.title}}</div>
      <div class="book-auth book-item">{{book.author}}</div>
      <div class="book-pub book-item">{{book.publisher}}</div>
      <div class="book-isbn book-item">{{book.isbn}}</div>
    </div>
  </div>
</template>

<script>
export default {
  name: "book",
  props: ["book"],
  methods: {
    markSold() {
      console.log("Sold!");
      this.book.sold = !this.book.sold;
    }
  }
}
</script>

<style scoped>
  .book {
    background-color: antiquewhite;
    padding: 5px;
    margin: 5px;
    display: flex;
    flex-direction: row;
  }

  .sold {
    text-decoration: line-through;
    color: red;
  }

  .book-item {
    display: flex;
  }

  .book-title {
    font-size: 2.5em;
  }

  .book-auth {
    font-size: 1.85em;
  }

  .book-pub .book-isbn {
    font-size: 1em;
  }
</style>