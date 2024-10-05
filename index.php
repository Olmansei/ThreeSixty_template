<?php get_header(); ?>



  <body <?php body_class(); ?>>

    <main>
      <! –– .・。.・゜✭・ Bold statement ・✫・゜・。. ––>
      /*<div class="boldStatement">
        <div class="contenedor-imagen">
        <!-- <img src="http://localhost/wp-content/themes/ThreeSixty_template/media/header.png" alt="alt text" class="imagen_Header" /> -->
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
 

<!--  .・。.・゜✭・ post list ・✫・゜・。. -->
<div class="p-4 card-group" >
  <?php
  if ( have_posts() ) 
    { while ( have_posts() ){
        the_post();
        get_template_part("template-parts/post" );
      }    
    }

      ?>
</div>
        
<!--  .・。.・゜✭・ FIN de Trio de texto + img ・✫・゜・。. -->

    </main>

    <?php get_footer(); ?>
