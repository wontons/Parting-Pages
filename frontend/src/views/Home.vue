<template>

  <div class="flex flex-col items-center m-4">
    <InfoCard />
    <InfoCard />
    <InfoCard />
  </div>





  <!--div class="home">
    <div class="flex center bg-gray-200">
      <div class="flex justify-start m-4">
        <InfoCard />
      </div>
      <div class="flex justify-center">
        <div class="flex flex-col w-1/2 max-w-xl bg-white shadow-lg rounded-lg object-center m-4">
          <div class="flex text-green-600 font-bold bg-gray-100">
            info about selling books will be here
          </div>
          <div class="flex w-l h-l bg-green-200">
            picture placeholder
          </div>
        </div>
      </div>
      <div class="flex justify-end">
        <div class="flex flex-col w-1/2 max-w-xl bg-white shadow-lg rounded-lg object-right m-4">
          <div class="flex text-red-600 font-bold bg-gray-100">
            info about buying books here
          </div>
          <div class="flex w-l h-l bg-red-200">
            picture placeholder
          </div>
        </div>
      </div>
    </div>
  </div-->
</template>

<script>
// @ is an alias to /src
//import UpStart from "@/components/UpStart.vue";
import InfoCard from "@/components/InfoCard.vue";

export default {
  name: "home",
  components: {
    //UpStart
    InfoCard
  }
};
</script>
