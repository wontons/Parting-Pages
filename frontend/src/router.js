import Vue from "vue";
import Router from "vue-router";
import Home from "./views/Home.vue";

Vue.use(Router);

export default new Router({
  mode: "history",
  base: process.env.BASE_URL,
  routes: [
    {
      path: "/",
      name: "home",
      meta: {
        title: "Home | Parting Pages",
        metaTags: {
          name: "description",
          content: "Welcome to Parting Pages home!"
        }
      },
      component: Home,
    },
    {
      path: "/listings",
      name: "listings",
      meta: {
        title: "Listings | Parting Pages",
        metaTags: {
          name: "description",
          content: "View all of the current listings on Parting Pages!"
        }
      },
      component: () => 
        import("./views/Listings.vue")
    }
  ]
});
