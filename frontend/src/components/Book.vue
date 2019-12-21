<template>
    <div class="book" v-bind:class="{'sold':book.sold}">
        <p class="book-title">
            <input type="checkbox" v-on:change="markSold" />
            {{book.title}}
            <button class="delete" @click="$emit('del-book', book.id)">x</button>
        </p>
    </div>
</template>

<script>
export default {
    name: "Book",
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
    #book {
        background-color: antiquewhite;
        padding: 5px;
    }

    #sold {
        text-decoration: line-through;
        color: red;
    }
</style>