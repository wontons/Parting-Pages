<template>
  <div v-if="visible" @click.self="close" class="">
    <div class="">
      <button aria-label="close" class="" @click.prevent="close">
        x
      </button>
      <slot />
    </div>
  </div>
</template>

<script>
export default {
    name: "addBookModal",
    props: {
      visible: {
        required: true,
        type: Boolean
      }
    },
    methods: {
      close() {
        this.$emit("close");
      }
    }
}
</script>

<style scoped>

</style>