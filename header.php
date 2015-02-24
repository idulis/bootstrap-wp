<!DOCTYPE html>
<!-- -->
<!-- language_attributes: Muestra los atributos de idioma para la etiqueta "html" -->
<html <?php language_attributes(); ?>>
	<head>
	
	  <!--  bloginfo("opcional"): Muestra información acerca de su sitio, en su mayoría obtenida de la información 
	        que proporcione en su perfil de usuario y Ajustes general WordPress pantallas de 
	        administración . Puede ser utilizado en cualquier lugar dentro de un archivo de 
	        plantilla. Esto imprime siempre un resultado al navegador. Si necesita los valores 
	        para su uso en PHP, utilice get_bloginfo () .
    -->
    <!--  charset: Muestra la "Codificación de páginas y carga", ambientada en Ajustes > Lectura . 
          Estos datos se recuperan del disco "blog_charset" en la tabla wp_options 
    -->
		<meta charset="<?php bloginfo('charset'); ?>" />
		<meta name"viewport" content="width=divece-width" />
		
    <!--  name: Muestra el "Título del sitio", ambientada en Ajustes > Generales -->
		<title><?php bloginfo('name'); ?></title>
		   <!--[if IE]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
    
    <!--  wp_head: un hook (gancho) que debe ir entre etiquetas <head></head> y que es utilizado por WordPress 
          para colocar links a recursos y código en general que necesita la plataforma o cualquiera 
          de los plugins que nosotros vayamos instalando. Dicha función tiene su equivalente para el 
          pié de página, llamado wp_footer(), y son de caracter obligatorios si pretendemos el correcto 
          funcionamiento de nuestra plataforma.
    -->
		<?php wp_head(); ?>
	</head>

<!--  se utiliza para filtrar las clases que se asignan al elemento HTML cuerpo en la página actual.
      Esto abre la posibilidad de cambiar el aspecto de casi todo, con CSS solamente.
-->
<body <?php body_class(); ?> >

<div class="container">

	<header class="site-header">
		<!-- home_url: recupera la URL principal del sitio actual. -->
		<h1><a href="<?php echo home_url('/');?>">
		<!-- Ya comentada -->
		<?php bloginfo('name'); ?></a></h1>
		<h5>
			<?php bloginfo('description'); ?><!-- Muestra el "Lema", ambientada en Ajustes > Generales . Estos datos se recuperan del disco "BlogDescription" en la tabla wp_options. -->
			<!-- 		
				is_page ()
				Cuando cualquier página se está mostrando.
				is_page (42)
				Cuando Página 42 (ID) se está visualizando.
				is_page ("Sobre Mi Y Joe ')
				Cuando la página se visualiza con un POST_TITLE de "Acerca de mí Y Joe".
				is_page ('sobre-me')
				Cuando la página se visualiza con un post_name (babosa) de "sobre-me".
				is_page (array (42, 'sobre-yo "," Sobre Mi Y Joe'))
				Devuelve cierto cuando las páginas mostradas es bien puesto ID = 42, o post_name es "acerca de mí", o POST_TITLE es "acerca de mí y Joe".
				is_page (array (42, 54, 6))
				Devuelve cierto cuando las páginas mostradas es bien puesto ID = 42, o enviados ID = 54, o enviados ID = 6.
			-->
			<!-- Visualiza la página cuyo post_name es "contenidos" -->
			
			<?php if(is_page('contenidos')) {?>
				Gracias por visualizar este trabajo.
			<?php }?>
		</h5>
		
		
		<nav class="site-nav">
		
			<?php
			$args = array(
				//Debemos de ir a functions.php para registrar este menú llamado 'primary'
				'theme_location' => 'primary'
			);
			?>
		
			<!-- wp_nav_menu(): nos visualiza las páginas que hemos creado en wordPress: Pages -> Add New -->
			<?php wp_nav_menu($args); ?>
		</nav>
		
		
	</header>
  
