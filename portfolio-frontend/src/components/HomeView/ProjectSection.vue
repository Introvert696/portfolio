<template>
<section>
  <div class="title-project-section">
    <p>тут мои проекты </p>
    <h1>Project? YES ! </h1>
  </div>
  <div class="projects-cards">
    <CardProjectSection
      title="Minimalsoc"
      description="Это социальная сеть была разработана для дипломного проекта.
      Это монолитное приложение, разработанное с использование vue js на фронте, и laravel в роли
      api сервера, база данных это MySql. Так же сделал самописный websocket сервер на php,
      прописал логику для уведомлений. В социальной сети реализованы посты, добалвения в друзья,
      сообщения и диалоги"
    />
    <CardProjectSection
      title="Minimalsoc"
      description="Это социальная сеть была разработана для дипломного проекта.
      Это монолитное приложение, разработанное с использование vue js на фронте, и laravel в роли
      api сервера, база данных это MySql. Так же сделал самописный websocket сервер на php,
      прописал логику для уведомлений. В социальной сети реализованы посты, добалвения в друзья,
      сообщения и диалоги"
    />
    <CardProjectSection
      title="Minimalsoc"
      description="Это социальная сеть была разработана для дипломного проекта.
      Это монолитное приложение, разработанное с использование vue js на фронте, и laravel в роли
      api сервера, база данных это MySql. Так же сделал самописный websocket сервер на php,
      прописал логику для уведомлений. В социальной сети реализованы посты, добалвения в друзья,
      сообщения и диалоги"
    />
    <CardProjectSection
      title="Minimalsoc"
      description="Это социальная сеть была разработана для дипломного проекта.
      Это монолитное приложение, разработанное с использование vue js на фронте, и laravel в роли
      api сервера, база данных это MySql. Так же сделал самописный websocket сервер на php,
      прописал логику для уведомлений. В социальной сети реализованы посты, добалвения в друзья,
      сообщения и диалоги"
    />
    <CardProjectSection
      title="Minimalsoc"
      description="Это социальная сеть была разработана для дипломного проекта.
      Это монолитное приложение, разработанное с использование vue js на фронте, и laravel в роли
      api сервера, база данных это MySql. Так же сделал самописный websocket сервер на php,
      прописал логику для уведомлений. В социальной сети реализованы посты, добалвения в друзья,
      сообщения и диалоги"
    />
    <CardProjectSection
      title="Minimalsoc"
      description="Это социальная сеть была разработана для дипломного проекта.
      Это монолитное приложение, разработанное с использование vue js на фронте, и laravel в роли
      api сервера, база данных это MySql. Так же сделал самописный websocket сервер на php,
      прописал логику для уведомлений. В социальной сети реализованы посты, добалвения в друзья,
      сообщения и диалоги"
    />
  </div>
</section>
</template>
<script setup lang="ts">

import CardProjectSection from "@/components/HomeView/CardProjectSection.vue";
</script>
<style scoped>
section {
  background-image: url("@/assets/projects_bg.png");
  min-height: 120vh;
  background-position: bottom;
  background-repeat: no-repeat;
  background-size: cover;
  color: white;
  width: 100%;
  padding-bottom: 5%;

}
.title-project-section {
  padding-top: 5%;
  text-align: center;
  h1 {
    overflow: hidden;
    width: 100%;
    text-wrap-mode: nowrap;
    font-family: "Orbitron", sans-serif;
    font-size: 64px;
    font-weight: 100;
  }
  p {
    text-transform: uppercase;
    overflow: hidden;
    width: 100%;
    font-size: 14px;
    text-wrap-mode: nowrap;
    font-weight: 600;
  }
}
.projects-cards {
  width: 81vw;
  margin: auto;
  margin-top: 5%;
  min-height: 60vh;
  box-sizing: border-box;
  display: flex;
  flex-wrap: wrap;
  justify-content: center;
  gap: 1em;
}

@media (max-width: 768px) {
  section {
    padding-bottom: 5%;
  }
.projects-cards {
  width: 95vw;
}


}
</style>

