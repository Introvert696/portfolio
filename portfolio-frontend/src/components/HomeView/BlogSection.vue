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
      <ArticleCard
        title="Test"
        description="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas eu fermentum
         mauris. Sed cursus ut magna eu sagittis. Etiam fringilla cursus urna, quis luctus elit
         congue id. Curabitur est libero, elementum at sem non, ultricies tristique sem. Quisque
         molestie, lacus ac feugiat viverra, quam velit laoreet ante, iaculis euismod nulla libero
         ut metus. Praesent accumsan, quam et aliquam ultricies, ex augue tristique nibh, a finibus
         arcu orci consectetur elit. Proin condimentum suscipit ex, id efficitur nisi auctor eu.
         Phasellus scelerisque dolor elit, eu ultricies eros gravida sit amet. Fusce ante tortor,
         dapibus quis rutrum eu, suscipit sit amet sem. Curabitur volutpat ligula libero, maximus
         rhoncus enim gravida id. Nunc fermentum sagittis tortor non fringilla."
      />
      <ArticleCard
        title="Test"
        description="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas eu fermentum
         mauris. Sed cursus ut magna eu sagittis. Etiam fringilla cursus urna, quis luctus elit
         congue id. Curabitur est libero, elementum at sem non, ultricies tristique sem. Quisque
         molestie, lacus ac feugiat viverra, quam velit laoreet ante, iaculis euismod nulla libero
         ut metus. Praesent accumsan, quam et aliquam ultricies, ex augue tristique nibh, a finibus
         arcu orci consectetur elit. Proin condimentum suscipit ex, id efficitur nisi auctor eu.
         Phasellus scelerisque dolor elit, eu ultricies eros gravida sit amet. Fusce ante tortor,
         dapibus quis rutrum eu, suscipit sit amet sem. Curabitur volutpat ligula libero, maximus
         rhoncus enim gravida id. Nunc fermentum sagittis tortor non fringilla."
      />
      <ArticleCard
        title="Test"
        description="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas eu fermentum
         mauris. Sed cursus ut magna eu sagittis. Etiam fringilla cursus urna, quis luctus elit
         congue id. Curabitur est libero, elementum at sem non, ultricies tristique sem. Quisque
         molestie, lacus ac feugiat viverra, quam velit laoreet ante, iaculis euismod nulla libero
         ut metus. Praesent accumsan, quam et aliquam ultricies, ex augue tristique nibh, a finibus
         arcu orci consectetur elit. Proin condimentum suscipit ex, id efficitur nisi auctor eu.
         Phasellus scelerisque dolor elit, eu ultricies eros gravida sit amet. Fusce ante tortor,
         dapibus quis rutrum eu, suscipit sit amet sem. Curabitur volutpat ligula libero, maximus
         rhoncus enim gravida id. Nunc fermentum sagittis tortor non fringilla."
      />
      <ArticleCard
        title="Test"
        description="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas eu fermentum
         mauris. Sed cursus ut magna eu sagittis. Etiam fringilla cursus urna, quis luctus elit
         congue id. Curabitur est libero, elementum at sem non, ultricies tristique sem. Quisque
         molestie, lacus ac feugiat viverra, quam velit laoreet ante, iaculis euismod nulla libero
         ut metus. Praesent accumsan, quam et aliquam ultricies, ex augue tristique nibh, a finibus
         arcu orci consectetur elit. Proin condimentum suscipit ex, id efficitur nisi auctor eu.
         Phasellus scelerisque dolor elit, eu ultricies eros gravida sit amet. Fusce ante tortor,
         dapibus quis rutrum eu, suscipit sit amet sem. Curabitur volutpat ligula libero, maximus
         rhoncus enim gravida id. Nunc fermentum sagittis tortor non fringilla."
      />

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
