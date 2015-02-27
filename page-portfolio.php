<?php
get_header(); //Corresponde a la creación del fichero "header.php"
 if(have_posts()) :
   //Recorrido de todos los post que se vayan añadiendo
   white (have_posts()) : the_post() ; ?>
   
   <article class="post page">
		<!-- column-container -->
		<div class="column-container clearfix">
			<!-- title-column -->
			<div class="title-column">
				<h2><?php the_title(); ?></h2>
			</div><!-- /title-column -->
			
			<!-- text-column -->
			<div class="text-column">
				<?php the_content(); ?>
			</div><!-- /text-column -->
		</div><!-- /column-container -->
     
   </article>
   
   <?php endwhile;
 else :
   echo '<p>No hay contenido que mostrar.</p>';
 
 endif;
 
get_footer(); //Corresponde a la creación del fichero "footer.php"
?>
