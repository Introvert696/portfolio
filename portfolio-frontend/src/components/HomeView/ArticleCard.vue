<script setup lang="ts">

</script>

<template>
  <div class="article-card">
    <div class="left-article-card">
      <h1>ARTICLE TITLE</h1>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas eu fermentum mauris. Sed cursus ut magna eu sagittis. Etiam fringilla cursus urna, quis luctus elit congue id. Curabitur est libero, elementum at sem non, ultricies tristique sem. Quisque molestie, lacus ac feugiat viverra, quam velit laoreet ante, iaculis euismod nulla libero ut metus. Praesent accumsan, quam et aliquam ultricies, ex augue tristique nibh, a finibus arcu orci consectetur elit. Proin condimentum suscipit ex, id efficitur nisi auctor eu. Phasellus scelerisque dolor elit, eu ultricies eros gravida sit amet. Fusce ante tortor, dapibus quis rutrum eu, suscipit sit amet sem. Curabitur volutpat ligula libero, maximus rhoncus enim gravida id. Nunc fermentum sagittis tortor non fringilla.</p>
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
