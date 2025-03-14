<script setup lang="ts">
import { RouterLink, RouterView } from 'vue-router'
import MainHeader from "@/components/MainHeader.vue";
import MainFooter from "@/components/MainFooter.vue";
import {onMounted, ref} from "vue";

const isSafari = ()=> {
  const userAgent = navigator.appVersion;
  return userAgent.includes('iPhone');
}
const browserName = ref(window.innerWidth);

onMounted(()=>{
  console.log(isSafari());
  console.log(window.innerHeight);
})


</script>

<template>
  <div v-if="isSafari()" class='view'>
    <h1>ВНИМАНИЕ</h1>
    <br>
    <p>Выбросьте ваш iphone я не понимаю просто почему ничего нормально не работает на iphone,
    почему я как разработчик должен на карачках что то допиливать на айфоне, в то время как на андроид
    все нормально отображаеться, прост почему
    Тим кук лох поганный.</p>

  </div>
  <MainHeader></MainHeader>

  <div class="main-content">
    <RouterView />
  </div>
<!--  <MainFooter />-->
</template>

<style scoped>
.ads {
  display: none;
}
.view {
  padding: 5vw;
  text-align: center;
  display: flex;
  flex-direction: column;
  box-sizing: border-box;
  width: 100vw;
  height: 100vh;
  position: fixed;
  background-color: white;
}
</style>
