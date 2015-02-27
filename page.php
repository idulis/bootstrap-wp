<?php
get_header(); //Corresponde a la creación del fichero "header.php"
 if(have_posts()) :
   //Recorrido de todos los post que se vayan añadiendo
   white (have_posts()) : the_post() ; ?>
   
   <article class="post page">
   		<!-- has_children(), devuelve un entero, que es  -->
		   <?php if(has_children() OR $post->post_parent > 0) { ?>
      <nav class="site-nav children-links clearfix">
      			<span class="parent-link">
      			<!-- get_the_permalink($ID), Devuelve el enlace permanente a un post o una página para su uso.-->
      			<!-- get_the_title($ID), Esta función devolverá el título de un post para un determinado post-ID -->
      			<a href="<?php echo get_the_permalink(get_top_ancestor_id()); ?>">
      			<?php echo get_the_title(get_top_ancestor_id()); ?></a>
      
      			</span>
      			<ul>
      				<?php
      
      				/*--  --*/
      				$args = array(
      					/*-- child_of, Lista las sub-páginas de una sola página --*/
      					/*-- utiliza el ID de una página como valor --*/
      					/*-- 'child_of' => $post->ID, El valor predeterminado es 0 (Lista todas las sub-páginas) --*/
      					/*-- --*/
      					'child_of' => get_top_ancestor_id(),
      					'title_li' => ''
      				);
      
      				/*-- Esta función devuelve un array de páginas que están en el blog --*/
      				/*-- Recibe un argumento $args --*/
      				wp_list_pages($args); ?>
      			</ul>
      		</nav><!-- /Fin de sub-menu -->
       <?php } ?>
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
