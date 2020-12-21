<template>
    <div>
    <my-header></my-header>
     <section class="main__section">
        <!-- Sidebar -->
        
         <navbar></navbar>
         <router-view></router-view>

        <!-- Main Content -->
        
    </section>
    </div>
</template>

<script>
import MyHeader from './partials/MyHeader.vue';
import Navbar from './partials/Navbar.vue'
    export default {
  components: { Navbar, MyHeader},
        mounted() {

        }
        }
</script>
<style scoped>

</style>