<template>
<section>
  <div class="left-side-section side-section">
    <p>EXPERIENCE</p>
    <p>EXPERIENCE</p>
  </div>
  <div class="main-content-section">
    <ExpContainer />
    <RevertExpContainer/>
    <ExpContainer />
    <RevertExpContainer/>
    <ExpContainer />
    <RevertExpContainer/>
  </div>
  <div class="right-side-section side-section">
    <p>EXPERIENCE</p>
    <p>EXPERIENCE</p>
  </div>
</section>
</template>

<script setup lang="ts">

import ExpContainer from "@/components/HomeView/ExpContainer.vue";
import RevertExpContainer from "@/components/HomeView/RevertExpContainer.vue";
</script>

<style scoped>
section {
  display: flex;
  min-height: 100vh;
  padding-bottom: 10%;
}
.side-section {
  display: flex;
  flex-direction: column;
  width: 20%;
  text-align: center;
  justify-content: space-between;

  p {
    display: flex;
    width: inherit;
    margin: auto;
    font-size: 8em;
    font-weight: bold;
  }
}
.right-side-section {
  p {
    rotate: 90deg;
    margin-top: 1.3em;
  }
}
.left-side-section {
  p {
    rotate: -90deg;
    margin-top: 5.2em;
  }
}
.main-content-section {
  width: 60%;
}
.right-side-section {
  width: 20%;
}
.main-content-section {
  padding-top: 5%;
  display: flex;
  flex-direction: column;
  justify-content: space-between;

}
</style>
