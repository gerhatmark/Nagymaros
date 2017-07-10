<?php
	global $nagymaros_options;
?>

<footer class="site-footer">
  <div class="container">
    <?php 
	if( isset($nagymaros_options['enable_footer_widgets']) && $nagymaros_options['enable_footer_widgets'] == '1' )
	get_template_part( 'template-parts/footer/site', 'widgets' );
	get_template_part( 'template-parts/footer/site', 'info' );
?>
  </div>
</footer>
</div>
<div class="back-to-top"></div>
<?php wp_footer(); ?>
</body>
</html>