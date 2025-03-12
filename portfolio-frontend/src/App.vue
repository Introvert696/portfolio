<script setup lang="ts">
import { RouterLink, RouterView } from 'vue-router'
import MainHeader from "@/components/MainHeader.vue";
import MainFooter from "@/components/MainFooter.vue";
</script>

<template>
  <MainHeader></MainHeader>

  <div class="main-content">
    <RouterView />
  </div>
  <MainFooter />
</template>

<style scoped>
  .main-content {
    margin: auto;
    width: 95%;
  }
</style>
