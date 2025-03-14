<template>
  <section class="blog-section">
    <div class="title-blog-section">
      <h1>BLOG</h1>
      <div class="text-title-blog-section">
        <p>Статьи</p>
        <p>Новости</p>
        <p>И тп.</p>
      </div>
    </div>
    <div class="articles-blog-section">
      <ArticleCard/>
      <ArticleCard/>
      <ArticleCard/>
      <ArticleCard/>
    </div>
  </section>
</template>
<script setup lang="ts">

import ArticleCard from "@/components/HomeView/ArticleCard.vue";
</script>

<style scoped>
.blog-section {
  min-height: 95vh;
  background-image: url("@/assets/blog-section-background.png");
  background-size: cover;
  background-position: center;
  padding: 2vw 10vw;
  box-sizing: border-box;

  .title-blog-section {
    display: flex;
    align-items: center;

    h1 {
      font-size: 10vw;
    }
    p {
      font-size: 24px;
      text-transform: uppercase;
    }
  }
}
.articles-blog-section {
  margin-top: 5vh;
  min-height: 40vh;
  display: flex;
  flex-wrap: wrap;
  gap: 1em;
  justify-content: center;
}
@media (max-width: 768px) {
  .blog-section {
    .title-blog-section {

      text-align: center;
      h1 {
        font-size: 15vw;
      }
      p {
        display: none;
      }
    }
  }
  .articles-blog-section {
    width: 100%;
  }

}
</style>
