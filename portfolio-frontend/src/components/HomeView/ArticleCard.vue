<script setup lang="ts">
defineProps({
  title: String,
  description: String,
})
</script>

<template>
  <div class="article-card">
    <div class="left-article-card">
      <h1>{{title}}</h1>
      <p>{{description}}</p>
    </div>

  </div>
</template>

<style scoped>
  .article-card {
    width: 48%;
    background-color: white;
    box-sizing: border-box;
    padding: 1em;
    display: flex;
    height: fit-content;
    h1 {
      font-weight: 400;
      font-size: 24px;
    }
    p {
      margin-top: 1%;
      font-size: 14px;
    }
  }
  .left-article-card {
    width: 100%;
  }
  @media (max-width: 768px) {
    .article-card {
      width: 100%;
    }
  }
</style>
