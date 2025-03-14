

<template>
  <header>
   <div class="header-items">
     <div class="logo">
       <img src="@/assets/logo.png" alt="">
     </div>
     <div class="router-links">
         <RouterLink to="/">Главная</RouterLink>
         <RouterLink to="/about">Проекты</RouterLink>
         <RouterLink to="/about">Блог</RouterLink>
         <RouterLink to="/about">О мне</RouterLink>
       </div>
   </div>

  </header>
</template>

<script setup lang="ts">

import {RouterLink} from "vue-router";
import {ref} from "vue";

const isHiglighted = ref(false);

</script>

<style scoped>
header {
  margin: auto;
  height: 50px;
  background-color: #252525;
  color: white;
}
.logo {
  margin-top: 1%;
  font-size: 36px;
  text-transform: uppercase;
}
.header-items {
  display: flex;
  align-items: center;
  height: inherit;
  justify-content: space-between;
  margin: auto;
  width: 80%;
}
.router-links {
  font-size: 15px;
  display: flex;
  width: 20em;
  justify-content: space-between;
}
@media (max-width: 768px) {
  .router-links a{
    display: none;
  }
}
</style>
