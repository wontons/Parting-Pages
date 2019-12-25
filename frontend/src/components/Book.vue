<template>
  <div class="flex flex-row sm:flex-col bg-white rounded border m-4" @click="parentValue = true">
    <div class="flex flex-col bg-green-200">
      <div class="flex book-title book-item">{{book.title}}</div>
      <div class="flex book-auth book-item">{{book.author}}</div>
    </div>
    <div class="flex flex-row sm:flex-col bg-red-200">
      <div class="flex text-black font-bold">{{book.condition}}</div>
      <div class="text-black font-bold">{{book.highlighted}}</div>
    </div>
  </div>
</template>

<script>
export default {
  name: "book",
  props: ["book"],
  components: {
  },
  methods: {},
  data() {
    return {
      parentValue: false,
      modalTitle: "Detailed Book Info"
    }
  }
}
</script>

<style scoped>
</style>