<template>
    <div>
        <h1>Books</h1>
        <div v-bind:key="book.id" v-for="book in books">
            <Book v-bind:book="book" v-on:del-book="$emit('del-book', book.id)"/>
        </div>
    </div>
</template>

<script>
import Book from "./Book";

export default {
    name: "Booklist",
    components: {
        Book
    },
    props: ["books"]
}
</script>

<style scoped>

</style>