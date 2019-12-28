<template>
  <div v-if="visible" @click.self="close" class="bg-semi-75 fixed inset-0 w-full h-full flex items-center justify-center bg-grey-100">
    <div class="hide-bar fixed max-h-full overflow-y-auto mt-8 mb-4 top-0">
      <div class="relative m-auto sm:w-full max-w-4xl bg-white shadow-lg rounded-lg p-8 mb-2">
        <div class="bg-white">
          <div class="top-0 left-0 text-left text-xl text-bold text-black mb-4">
            New Listing
          </div>
          <button aria-label="Close" class="absolute top-0 right-0 text-xl text-gray-500 hover:text-red-500 my-1 mx-4" @click.prevent="close">
            x
          </button>
        </div>
        <form>
          <div class="mb-4 text-left">
            <label class="block text-gray-500" for="bookTitle">
              Book Title
            </label>
            <input class="shadow border rounded w-full py-2 px-2 bg-gray-200 focus:bg-white" id="title" type="text" placeholder="Title">
          </div>
          <div class="mb-6 text-left">
            <label class="block text-gray-500" for="author">
              Author
            </label>
            <input class="shadow border rounded w-full py-2 px-2 bg-gray-200 focus:bg-white" id="author" type="text" placeholder="Author">
          </div>
          <div class="mb-6 text-left">
            <label class="block text-gray-500" for="publisher">
              Publisher
              <span class="text-xs text-gray-700 italic uppercase">optional</span>
            </label>
            <input class="shadow border rounded w-full py-2 px-2 bg-gray-200 focus:bg-white" id="publisher" type="text" placeholder="Publisher">
          </div>
          <div class="mb-6 text-left items-center">
            <label class="block text-gray-500" for="isbn">
              ISBN
              <span class="text-xs text-gray-700 italic uppercase">optional</span>
            </label>
            <input class="shadow border rounded w-full py-2 px-2 bg-gray-200 focus:bg-white" id="isbn" type="number" placeholder="(978)-0-321-54589-3">
          </div>
          <div class="mb-6 text-left">
            <label class="block text-gray-500 flex items-center justify-start" for="highlighted">
              <span>Highlighted</span>
              <input class="shadow border rounded ml-4 bg-gray-200 focus:bg-white" id="highlighted" type="checkbox">
            </label>
          </div>
          <div class="mb-4 text-left">
            <label class="block text-gray-500" for="condition">
              Condition
            </label>
            <div class="mb-4 relative w-max-1/4">
              <select required class="block shadow border rounded w-full bg-gray-200 focus:bg-white" id="condition">
                <option value="" disabled selected hidden>Select Condition</option>
                <option value="fine"><div class="mt-8">Fine / Like New</div></option>
                <option value="vgood">Very Good</option>
                <option value="good">Good</option>
                <option value="fair">Fair</option>
                <option value="poor">Poor</option>
              </select>
            </div>
          </div>
          <div class="m-auto flex">
            <button class="flex-1 rounded bg-blue-400 hover:bg-blue-600 text-white font-bold py-2 px-2 m-4" @click="close">
              Submit
            </button>
            <button class="flex-1 rounded bg-red-400 hover:bg-red-600 text-white font-bold py-2 px-2 m-4" @click="close">
              Close
            </button>
          </div>
        </form>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: "newlisting",
  props: {
    visible: Boolean
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