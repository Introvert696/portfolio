<template>
  <section class="contact-section">
    <h1>Contacts</h1>
    <div class="contacts-items">
      <div class="contact-btn">
        <a href="" class="contact-btn-title">Telegram</a>
      </div>
      <div class="contact-btn">
        <a href="" class="contact-btn-title">Email</a>
      </div>
      <div class="contact-btn">
        <a href="" class="contact-btn-title">Github</a>
      </div>
      <div class="contact-btn">
        <a href="" class="contact-btn-title">Gitlab</a>
      </div>
    </div>
  </section>
</template>
<script setup lang="ts">

</script>
<style scoped>
.contact-section {
  width: 100%;
  min-height: 37vh;
  color: white;
  background-color: #1B1B1B;
  box-sizing: border-box;
  padding: 2% 10%;
  text-align: center;
  h1 {
    font-size: 6.5vw;
    text-transform: uppercase;
  }

}
.contacts-items {
  display: flex;
  flex-wrap: wrap;
  width: 100%;
  justify-content: center;
  gap: 1.5vw;
}
.contact-btn {
  border: 5px solid white;
  min-width: 6.5vw;
  padding: 1% 5%;
  a {
    font-size: 24px;
    text-transform: uppercase;
    font-weight: bold;
  }

}
.contact-btn:hover {
  background-color: white;
  color: #1b1b1b;
}
</style>
