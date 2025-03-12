

<template>
  <header>
   <div class="header-items">
     <div class="logo">
      <b>FTv</b>
     </div>
     <div class="sandwich-btn" @mouseenter="addVisible" @touchstart="addVisible" >
       Menu
       <div :class="['sandwich-layout',{'visible': isHiglighted}]" @mouseleave="removeVisible" @touchend="removeVisible" >
         <RouterLink to="/">Home</RouterLink>
         <RouterLink to="/about">Blog</RouterLink>
         <RouterLink to="/about">Projects</RouterLink>
         <RouterLink to="/about">About</RouterLink>
       </div>
     </div>

   </div>

  </header>
</template>

<script setup lang="ts">

import {RouterLink} from "vue-router";
import {ref} from "vue";

const isHiglighted = ref(false);

const addVisible= () => {
  isHiglighted.value = true;
};
const removeVisible= () => {
  isHiglighted.value = false;
}


</script>

<style scoped>
header {
  margin: auto;
  height: 50px;
  background-color: #88afb1;
  color: white;
}
.logo {
  font-size: 36px;
  text-transform: uppercase;
}
.header-items {
  display: flex;
  align-items: center;
  height: inherit;
  justify-content: space-between;
  margin: auto;
  width: 90%;
}
.sandwich-btn {
  display: flex;
  position: relative;
}
.sandwich-layout {

  position: absolute;
  top: 2.2em;
  right: 0;
  display: none;
  background-color: #9499ba;
  width: 15em;
  height: 15em;
  grid-template-rows: repeat(4, 1fr);
  a{
    display: flex;
    height: 100%;
    align-items: center;
    box-sizing: border-box;
    padding-left: 1em;

  }
  a:hover {
    background-color: #707597;
  }
}

.visible {
  display: grid;
}
</style>
