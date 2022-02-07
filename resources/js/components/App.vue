<template>
  <div>
    <Header />
    <div class="page-content">
      <div>
        <Profile />
        <About />
        <Skills />
        <Portfolio />
        <Experience />
        <Education />
        <Contact />
      </div>
    </div>
    <Footer />
  </div>
</template>


<script>
import Header from "./Header.vue";
import Profile from "./Profile.vue";
export default {
  components: {
    Header,
    Profile,
  },
};
</script>
<style>
</style>
