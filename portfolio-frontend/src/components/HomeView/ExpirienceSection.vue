<template>
<section>
  <div class="left-side-section side-section">
    <p>EXPERIENCE</p>
    <p>EXPERIENCE</p>
  </div>
  <div class="main-content-section">
    <ExpContainer
      title="Опыт с PHP"
      description="На данном языке я разрабатывал множество сайтов.
      Работал с такими фреймворками как - Symfony (использую на данный момент),
      Laravel (создавал api для социальной сети на диплом). Так же в ходе изучения MVC,
      писал свой фреймворк."
      :wrap="false"/>
    <ExpContainer
      title="Опыт с JS"
      description="На данном языке я так же разрабатывал фронтенд сайтов.
      В основном я работал с vue js (спасибо другу за совет). На нем реализовывал различные
      интерфейсы, фронт социальной сети 'Minimalsoc', данное портфолио так же разработано с
      использование vue js, ts, vue router, pinia"
      :wrap="true"/>
    <ExpContainer
      title="Опыт с Python"
      description="На данном языке я разрабатывал различные скрипты для автоматизирования
      действий. К примеру: сортировка файлов, массовый автозагрузчик видео на ютуб, парсер картинок,
      сортировщик игр для nes (удаляет дубликаты, и оставляет нормальные версии), личный чатгпт бот
      с админкой (добавление, удаление пользвателей).
      Так же есть малый опыт исопльзования flask, django. Так же использовал Selenium, Telebot,
      OpenAi, SQLite и др. "
      :wrap="false"/>
    <ExpContainer
      title="Опыт с C#"
      description="Использвал его когда учился в колледже для wpf приложений. Так же разрабатывал
      игры на unity, одна из 'популярных' - это 'Escape from Saratov' (есть на gamejolt). Так же
      разрабатывал и другие игры, одна из них это угадай мелодию, подключал рекламу в unity ads,
      была учетка в play market разработчика, но ничего не выкладывал, руки так и не дошли."
      :wrap="true"/>
    <ExpContainer
      title="Опыт с Docker"
      description="Использовал докер для того, что бы разварачивать свои проекты на других серверах.
      писал makefile, также dockerfile и тп. В основном использовал в связке с symfony приложениями."
      :wrap="false"/>
    <ExpContainer
      title="Опыт с Github Action"
      description="Создал нескольклько workflow для тестировнаия symfony приложения при пуше в
      гитхаб, настроил что бы мне приходит уведа в телеграме, что тесты прошли успешно, или
      не прошли вовсе."
      :wrap="true"/>

  </div>
  <div class="right-side-section side-section">
    <p>EXPERIENCE</p>
    <p>EXPERIENCE</p>
  </div>
</section>
</template>

<script setup lang="ts">

import ExpContainer from "@/components/HomeView/ExpContainer.vue";
</script>

<style scoped>
section {
  display: flex;
  min-height: 100vh;
  padding-bottom: 10%;
}
.side-section {
  display: flex;
  flex-direction: column;
  width: 20%;
  text-align: center;
  justify-content: space-between;

  p {
    display: flex;
    width: inherit;
    margin: auto;
    font-size: 5vw;
    font-weight: bold;
  }
}
.right-side-section {
  p {
    rotate: 90deg;
    margin-top: 1.3em;
  }
}
.left-side-section {
  p {
    rotate: -90deg;
    margin-top: 5.2em;
  }
}
.main-content-section {
  width: 60%;
}
.right-side-section {
  width: 20%;
}
.main-content-section {
  display: flex;
  flex-direction: column;
  justify-content: space-between;

}
@media (max-width: 768px) {

  .side-section {
    display: none;
  }
  .main-content-section {
    width: 98%;
    margin: auto;
    align-items: center;
  }
}
</style>
