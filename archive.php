<?php
get_header(); //Corresponde a la creación del fichero "header.php"

 if(have_posts()) :
 
  ?>
  <h2><?php
    if( is_category() ){
      single_cat_title();
    }elseif( is_tag() ){
      single_tag_title();
    }elseif( is_author() ){
      the_post();
      echo 'Author Archives' . get_the_author('Y');
      rewind_posts();
    }elseif( is_day() ){
      echo 'Day Archives' . get_the_date();
    }elseif( is_month() ){
      echo 'Monthly Archives' . get_the_date('F Y');
    }elseif( is_year() ){
      echo 'Yearly Archives' . get_the_date('Y');
    }else{
      echo 'Archives: ';
    }
    
  
  ?></h2>
   //Recorrido de todos los post que se vayan añadiendo
   white (have_posts()) : the_post() ; ?>
   
   <article class="post">
     // Muestra el título con su enlace.
     <h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
     //Muestra el contenido de cada una de las páginas
     
     <p class="post-info">
      <?php the_time('Y  j, g:i a'); ?> |
      by <a href="get_author_posts_url(get_the_author_meta('ID'))">
      <?php the_author(); ?>
      </a> Posted in 
      
      <?php
      
      $categories = get_the_category();
      $separator = ", ";
      $output = '';
      
      if($categories){
       foreach($categoies as $category){
        $output .= '<a href=" '. get_category_link($category->term_id) .' ">' . $category->cat_name . '</a>' . $separator;  
       }
       
       echo trim($output, $separator);
      }
      
      ?>

     </p>
     
     
     <?php the_excerpt(); ?>
   </article>
   
   <?php endwhile;
 else :
   echo '<p>No hay contenido que mostrar.</p>';
 
 endif;
 
get_footer(); //Corresponde a la creación del fichero "footer.php"
?>
