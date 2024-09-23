<!DOCTYPE html>

<html <?php language_attributes(); ?>>

<?php get_header(); ?>



  <body <?php body_class(); ?>>

    <main>
      <! –– .・。.・゜✭・ Bold statement ・✫・゜・。. ––>
      <div class="boldStatement">
        <div class="contenedor-imagen">
          <img src="http://localhost/wp-content/themes/360-partygirl/media/header.png" alt="alt text" class="imagen_Header" />
        </div>
        <div class="textoSobreImg">
          <h3>STYLE IS</h3>
          <h1><div id="texto-cambiante">SELF EXPRESSION</div></h1>
        </div>
        <script>
          const textos = ["SELF EXPRESSION", "EVERYTHING", "THREE SIXTY"];
          let indice = 0;
          function cambiarTexto() {
            const elemento = document.getElementById("texto-cambiante");
            elemento.textContent = textos[indice];
            indice = (indice + 1) % textos.length;
          }
          setInterval(cambiarTexto, 2000);
        </script>
      </div>
      <! –– .・。.・゜✭・ FIN de Bold statement ・✫・゜・。. ––>

<!--  .・。.・゜✭・ Trio de texto + img ・✫・゜・。. -->
   
<div class="imagenes-con-texto">
    <div class="imagen-texto derecha"> 
        <img src="http://localhost/wp-content/themes/360-partygirl/media/img3.png" alt="Descripción de la imagen 1" class="imagen">
        <h1 class="article-name2">DISCOVER</p>
        <p class="article-name4">NEW TRENDS</p> <!-- Segunda linea -->
        <p class="article-name6">EXPLORE</p> <!-- Tercera linea -->
        
        <!-- <hr class="estilolinea">-->
        
    </div>
    <div class="imagen-texto izquierda">
        <img src="http://localhost/wp-content/themes/360-partygirl/media/img4.png" alt="Descripción de la imagen 2" class="imagen">
        <h2 class="article-name3">FIND</p>
        <p class="article-name5">YOUR STYLE</p> <!-- Segunda linea -->
        <p class="article-name7">COLLECTIONS</p> <!-- Tercera linea -->
    </div>
    <div class="imagen-texto derecha">
        <img src="http://localhost/wp-content/themes/360-partygirl/media/img5.png" alt="Descripción de la imagen 3" class="imagen">
        <h1 class="article-name2">BUILD</p>
        <p class="article-name4">YOUR DREAM FIT</p> <!-- Segunda linea -->
        <p class="article-name6">OUTFIT BUILDER</p> <!-- Tercera linea -->
    </div>
</div>
        
<!--  .・。.・゜✭・ FIN de Trio de texto + img ・✫・゜・。. -->

    </main>

    <?php get_footer(); ?>
