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

  
