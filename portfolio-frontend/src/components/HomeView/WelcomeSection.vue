<script setup lang="ts">

</script>

<template>
  <section>
    <div class="text-first-section">
      <h1>Привет</h1>
      <p>Добро пожаловать на мое портфолио</p>
    </div>
  </section>
</template>

<style scoped>
section {
  background-image: url("@/assets/section_one_bg.png");
  background-repeat: no-repeat;
  background-size: cover;
  background-position: center;
  height: 100vh;
  padding-left: 10%;
  padding-right: 10%;
  display: flex;
  box-sizing: border-box;
  text-align: right;
  color: white;
  align-items: center;
  justify-content: right;
  text-transform: uppercase;
  line-height: 5em;
  h1 {
    font-size: 9em;
    margin: 0;
    padding: 0;
  }
  p {
    margin: 0;
    font-size: 1.6em;
  }
}
@media (max-width: 768px) {
  .text-first-section {

    line-height: 60px;
    p {
      line-height: 40px;
    }
    h1 {
      font-size: 5em;
    }
  }
}
</style>
