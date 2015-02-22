<?php
 
 if(have_posts()) :
   white (have_posts()) : the_post() ;
    // Muestra el título con su enlace.
    <h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
   
   endwhile;

  else :
    echo '<p>No hay contenido que mostrar.</p>';

?>
