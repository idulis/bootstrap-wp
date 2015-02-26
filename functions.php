<?php
/* ============================================
*	Crear una función de Acción:  add_action ( 'nombre_del_gancho', 'tu_accion', [prioridad], [argumentos] );
============================================*/
function learningWordPress_resources(){
	// wp_enqueue_style(): Una manera segura de agregar / poner en cola un archivo de estilo CSS para la página genera de wordpress .
	// get_stylesheet_uri(): Recupera el URI del estilo del tema actual.


	wp_enqueue_style('style', get_stylesheet_uri());
}
// wp_enqueue_scripts: Una forma segura de añadir JavaScripts a una página generada por WordPress.
add_action('wp_enqueue_scripts', 'learningWordPress_resources');


/* ============================================
*	Navigation Menu
*	register_nav_menu()
*	Esta función revisa si la función register_nav_menus() existe en tu versión actual de WordPress y luego l a usa para registrar una gran cantidad de menús. Puedes agregar uno, dos o cualquier otro número de menús que quieras que usen esta función.
============================================*/
register_nav_menu(array(
	'primary' => __('Primary Menu'),
	'footer' => __('Footer Menu')
));

?>
