<script setup lang="ts">

</script>

<template>
  <div class="exp-container">
    <div class="left-exp-container">
      <h1>Мой опыТ:</h1>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce ultrices enim eget ultricies feugiat. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus feugiat ac tellus at vulputate. Nam aliquam et felis eget dictum. Nunc rhoncus leo eget mauris vulputate tempus. Morbi a cursus tellus. Aliquam erat volutpat. Morbi blandit purus ac tellus pharetra fermentum at ac eros. Morbi sit amet pretium lorem. Vivamus nulla nunc, porttitor sit amet ex vitae, ornare congue enim. Curabitur varius at nibh at porta. Mauris sapien velit, commodo id lacinia ut, lacinia tincidunt nisi. Mauris egestas rutrum felis, id ullamcorper purus varius ut. Aenean tincidunt et dolor at feugiat.</p>
    </div>
    <div class="right-exp-container">
      <p>PHP</p>
    </div>
  </div>
</template>

<style scoped>
.exp-container{
  wrap-option: wrap;
  display: flex;
  width: 80%;
  background: linear-gradient(90deg, rgba(2,0,36,0) 0%, rgba(255,255,255,1) 100%);
  min-height: 15%;
  padding-top: 2%;
  box-sizing: border-box;
  padding-bottom: 2%;
  margin-top: 5%;
  h1{
    font-size: 24px;
    text-transform: uppercase;
  }
  p {
    font-size: 14px;
  }
}
.left-exp-container{
  width: 70%;

  p {
    margin-top: 1%;
  }
}
.right-exp-container {
  display: flex;
  height: inherit;
  p {
    display: flex;
    align-items: center;
    rotate: 90deg;
    margin: 0;
    font-weight: 700;
    font-size: 7vw;
  }
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
