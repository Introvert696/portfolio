<script setup lang="ts">
import {ref} from "vue";

defineProps({
  title: String,
  description: String,
});
const isHide = ref(false);

const hideIt = () => {
  isHide.value = true;
}
const showIt = () => {
  isHide.value = false;
}
</script>

<template>
  <div :class="['card',{'hide':isHide}]" @mouseenter="hideIt">
    <h1>{{title}}</h1>
    <p>{{description}}</p>
  </div>
  <div :class="['card','card-reverse',{'view':isHide}]" @mouseleave="showIt">
    <a href="#">Подробнее</a>
  </div>
</template>

<style scoped>
.card {
  align-items: center;
  text-align: center;
  box-sizing: border-box;
  padding: 1% 2%;
  background-color: #262626;
  width: 26vw;
  h1 {
    font-size: 3vw;
    text-transform: uppercase;
  }
  p {
    margin-top: 5%;
    text-align: justify;
    font-size: 16px;
  }
}
.card-reverse {
  display: none;
  align-items: center;
  justify-content: center;
  font-size: 24px;
  text-transform: uppercase;
  font-weight: bold;
}
.hide {
  display: none;
}
.view {
  display: flex;
  animation: rolling 0.5s ease-in-out forwards;
}
@keyframes rolling {
  from {
    transform: rotateY(-90deg);
  }
  to {
    transform: rotateY(0deg);
  }
}

@media (max-width: 768px) {
  .card {
    flex-direction: column;
    width: 100%;
    h1 {
      font-size: 24px;
    }
    p {
      margin-top: 1%;
      font-size: 14px;
    }
  }
}

</style>
