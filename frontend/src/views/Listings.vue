<template>
    <div>
      <Booklist v-bind:books="books"/>
    </div>
</template>

<script>
import Booklist from "@/components/Booklist.vue";

export default {
  name: "listings",
  components: {
    Booklist
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
  }
}
</script>