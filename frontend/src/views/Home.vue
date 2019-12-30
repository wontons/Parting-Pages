<template>
  <div class="flex flex-col items-center mb-8">
    <InfoCard :info="info0" />
    <InfoCard :info="info1" />
    <InfoCard :info="info2" />
  </div>
</template>

<script>
import InfoCard from "@/components/cards/InfoCard.vue";

export default {
  name: "home",
  components: {
    InfoCard
  },
  data() {
    return {
      info0: {
        title: "Welcome to Parting Pages",
        desc: "A marketplace for used textbooks",
        imgPath: "books",
        imgAlt: "A stack of textbooks",
        books: [true,false,false]
      },
      info1: {
        title: "Purchase a textbook",
        desc: "Sort through our listings by name, quality, and price!",
        imgPath: "books",
        imgAlt: "A stack of textbooks",
        books: [false,true,false]
      },
      info2: {
        title: "Create a new listing",
        desc: "List your used textbook today!",
        imgPath: "books",
        imgAlt: "A stack of textbooks",
        books: [false,false,true]
      }
    }
  }
};
</script>
