<?php
get_header(); //Corresponde a la creación del fichero "header.php"
 if(have_posts()) :
   //Recorrido de todos los post que se vayan añadiendo
   white (have_posts()) : the_post() ; ?>
   
   <article class="post page">
     // Muestra el título con su enlace.
     <h2><?php the_title(); ?></h2>
     //Muestra el contenido de cada una de las páginas
     <?php the_content(); ?>
   </article>
   
   <?php endwhile;

 else :
   echo '<p>No hay contenido que mostrar.</p>';
 
 endif;
 
get_footer(); //Corresponde a la creación del fichero "footer.php"
?>
