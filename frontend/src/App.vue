<template>
  <div id="app" class="antialiased text-gray-900 text-center">
    <div id="nav" class="bg-purple-500">
      <router-link to="/">Home</router-link> |
      <router-link to="/listings">Listings</router-link>
    </div>
    <router-view />
    <MyFooter />
  </div>
</template>

<script>
import MyFooter from "./components/MyFooter.vue";

export default {
  name: "app",
  components: {
    MyFooter
  }
};
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
