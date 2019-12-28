<template>
  <div v-if="visible" @click.self="close" class="bg-semi-75 fixed inset-0 w-full h-full flex items-center justify-center bg-grey-100">
    <div class="hide-bar fixed max-h-full overflow-y-auto mt-8 mb-4 top-0">
      <div class="relative m-auto sm:w-full max-w-4xl bg-white shadow-lg rounded-lg p-8 mb-2">
        <div class="bg-white">
          <div class="top-0 left-0 text-left text-xl text-bold text-black mb-4">
            {{title}}
          </div>
          <button aria-label="Close" class="absolute top-0 right-0 text-xl text-gray-500 hover:text-red-500 my-1 mx-4" @click.prevent="close">
            x
          </button>
        </div>
        <slot class="fixed max-h-full overflow-y-auto" />
      </div>
    </div>
  </div>
</template>

<script>
export default {
    name: "modal",
    props: {
      visible: Boolean,
      title: String
    },
    methods: {
      close() {
        this.$emit("close");
      }
    }
}
</script>

<style scoped>
  .hide-bar::-webkit-scrollbar {
    display: none;
  }

  .hide-bar {
    -ms-overflow-style: none;
  }
</style>
