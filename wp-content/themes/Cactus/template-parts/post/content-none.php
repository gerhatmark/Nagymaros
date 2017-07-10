<section class="no-results not-found">
	<header class="page-header">
		<h1 class="page-title"><?php _e( 'Nincs Találat', 'nagymaros' ); ?></h1>
	</header>
	<div class="page-content">
		<?php
		if ( is_home() && current_user_can( 'publish_posts' ) ) : ?>

			<p><?php printf( __( 'Ready to publish your first post? <a href="%1$s">Get started here</a>.', 'nagymaros' ), esc_url( admin_url( 'post-new.php' ) ) ); ?></p>

		<?php else : ?>

			<p><?php _e( 'Úgy tűnik nem találjuk, amit keresel. Próbáld meg ismételten.', 'nagymaros' ); ?></p>
			<?php
		

		endif; ?>
	</div><!-- .page-content -->
</section><!-- .no-results -->
