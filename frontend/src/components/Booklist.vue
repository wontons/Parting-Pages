<template>
    <div>
        <h1>Books</h1>
        <div v-bind:key="book.id" v-for="book in books">
            <h2>{{book.title}}</h2>
            <h3>By: {{book.author}}</h3>
            <h4>Publisher: {{book.publisher}}
        </div>
    </div>
</template>

<script>
import Book from "./Book";

export default {
    name: "Booklist",
    props: ["books"]
}
</script>

<style scoped>

</style>