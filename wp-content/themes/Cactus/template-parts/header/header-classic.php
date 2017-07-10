<header class="header-wrap">
  <div class="main-header">
    <div class="container">
      <div class="pull-left">
        <div class="logo-box">
          <div class="logo-wrap pull-left"> <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
            <?php the_custom_logo(); ?>
            </a> </div>
          <div class="name-box pull-left"> <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
            <h1 class="site-name">
              <?php bloginfo( 'name' ); ?>
            </h1>
            </a>
            <?php $description = get_bloginfo( 'description', 'display' );
				if ( $description || is_customize_preview() ) : ?>
            <span class="site-tagline"><?php echo $description; ?></span>
            <?php endif; ?>
          </div>
        </div>
      </div>
      <div class="pull-right">
        <button class="site-nav-toggle"> <span class="sr-only">
        <?php _e( 'Toggle navigation', 'nagymaros' ); ?>
        </span> <i class="fa fa-bars fa-2x"></i> </button>
        
        <?php get_template_part( 'template-parts/navigation/navigation', 'top' ); ?>
       
      </div>
    </div>
  </div>
</header>
