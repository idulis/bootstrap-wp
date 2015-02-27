<?php
/*
  Template Name: Special Layout
*/

get_header(); //Corresponde a la creación del fichero "header.php"
 if(have_posts()) :
   //Recorrido de todos los post que se vayan añadiendo
   white (have_posts()) : the_post() ; ?>
   
  	<article class="post page">
  		<h2><?php the_title(); ?></h2>
  		<div class="info-box">
  			<h4>Disclaimer Title</h4>
  			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Incidunt magni facere maiores 
  				voluptas id in maxime sit ducimus alias sunt illum obcaecati repudiandae eveniet veniam 
  				eaque, repellat sint consequuntur praesentium.</p>
  		</div>
  		<?php the_content(); ?>
  	</article>
   
   <?php endwhile;
 else :
   echo '<p>No hay contenido que mostrar.</p>';
 
 endif;
 
get_footer(); //Corresponde a la creación del fichero "footer.php"
?>
