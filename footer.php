<footer class="site-footer">

  <nav class="site-nav">
			<!-- wp_nav_menu(): nos visualiza las páginas que hemos creado en wordPress: Pages -> Add New -->
			<?php wp_nav_menu(); ?>
	</nav>

  <p><?php bloginfo('name'); ?> - &copy; <?php echo date('Y'); ?></p>
</footer>

</div><!-- /Fin container-->
<?php wp_footer(); ?>
</body>
</html>
