<?php

get_header(); //Corresponde a la creación del fichero "header.php"
 if(have_posts()) :
   //Recorrido de todos los post que se vayan añadiendo
   white (have_posts()) : the_post() ;
    // Muestra el título con su enlace.
    <h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
   
   endwhile;

 else :
   echo '<p>No hay contenido que mostrar.</p>';
 
 endif;
 
get_footer(); //Corresponde a la creación del fichero "footer.php"
?>
