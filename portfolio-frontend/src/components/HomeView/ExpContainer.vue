<script setup lang="ts">
defineProps({
  title: String,
  description: String,
  programming_language: String,
  wrap: Boolean,
});
const testwrap = (wrap: boolean)=>{
  console.log(wrap);
}

</script>

<template>
  {{testwrap(wrap)}}
  <div :class="['exp-container',{'wrap-exp-container':wrap}]">
    <div class="left-exp-container">
      <h1>{{title}}</h1>
      <p>{{description}}</p>
    </div>
  </div>
</template>

<style scoped>

.exp-container{
  display: flex;
  width: 80%;
  background: linear-gradient(90deg, rgba(2,0,36,0) 0%, rgba(255,255,255,1) 100%);
  padding: 2%;
  box-sizing: border-box;
  margin-top: 5%;
  h1{
    font-size: 24px;
    text-transform: uppercase;
  }
  p {
    font-size: 16px;
  }
}
.left-exp-container{
  width: 95%;

  p {
    margin-top: 1%;
  }
}
.wrap-exp-container {

  margin-left: auto;
  text-align: right;
  background: linear-gradient(-90deg, rgba(2,0,36,0) 0%, rgba(255,255,255,1) 100%);

}
@media (max-width: 768px) {
  .right-exp-container {
    display: flex;
    p {
      rotate: none;
      align-items: center;
      margin: auto;
    }
  }
  .left-exp-container {
    width: 100%;
  }
  .exp-container {
    width: 80%;
    display: block;
  }
  h1 {
    text-transform: uppercase;
  }
}
</style>
