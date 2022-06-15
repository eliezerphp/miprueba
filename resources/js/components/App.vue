<template lang="">
    <div>

        <!-- Navbar -->
        <Navbar :ruta="ruta"> </Navbar>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <Sidebar :ruta="ruta"> </Sidebar>
        <!-- /Sidebar -->

        <!-- Content Wrapper. Contains page content -->
        <!-- <Content></Content> -->
        <div class="content-wrapper">
          <transition name="slide-fade" mode="in-out"> 
              <router-view></router-view>
          </transition>
        </div>
        <!-- /.content-wrapper -->

        <!-- Footer -->
        <Footer></Footer>
        <!-- /. Footer -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
    </div>
</template>
<script>
import Navbar/*Alias*/ from './plantilla/Navbar' //importamos el componente Navbar dentro del componente App con el Alias de Navbar para poder utilizarlo..
import Sidebar from './plantilla/Sidebar'
import Footer from './plantilla/Footer'
export default {
    props: ['ruta'], // props, atributos o propiedads, [variable que almacenará la información de la ruta]
    components: {Navbar, Sidebar, Footer}
}
</script>
<style lang="">
    
</style>