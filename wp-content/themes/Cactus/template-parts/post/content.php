<div id="post-<?php the_ID(); ?>" <?php post_class('entry-box-wrap'); ?>>
                                        <article class="entry-box">
                                        
                                        <?php 
										$entry_class = 'no-img';
										if ( '' !== get_the_post_thumbnail() && ! is_single() ) : 
										$entry_class = '';
										?>

											<div class="feature-img-box">
                                                <div class="img-box figcaption-middle text-center fade-in">
                                                    <a href="<?php the_permalink(); ?>">
                                                        <?php the_post_thumbnail( 'nagymaros-featured-image' ); ?>
                                                        <div class="img-overlay">
                                                            <div class="img-overlay-container">
                                                                <div class="img-overlay-content">
                                                                    <i class="fa fa-link"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
	<?php endif; ?>
    
                                            
                                            <div class="entry-header <?php echo $entry_class;?>">
                                                <div class="entry-category"><?php echo get_the_category_list(', ');?></div>
                                              <?php 
											  if ( is_single() ) {
													the_title( '<h1 class="entry-title">', '</h1>' );
												} else {
													the_title( '<h1 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h1>' );
												}
												
												if ( 'post' === get_post_type() ) :
													echo '<div class="entry-meta">';
														if ( is_single() ) :
															nagymaros_posted_on();
														else :
															echo nagymaros_time_link();
															nagymaros_edit_link();
														endif;
													echo '</div><!-- .entry-meta -->';
												endif;

											  ?>
                                             
                                            </div>
                                            <div class="entry-main">
                                                <div class="entry-summary">
                                                
                                                    <?php 
													if ( is_single() ) {
													the_content( );
												} else {
													the_excerpt();
												}
													?>
                                                     <?php
		  
	$args  = array(
		'before'           => '<p>' . __( 'Pages:', 'nagymaros' ),
		'after'            => '</p>',
		'link_before'      => '',
		'link_after'       => '',
		'next_or_number'   => 'number',
		'separator'        => ' ',
		'nextpagelink'     => __( 'Next page', 'nagymaros' ),
		'previouspagelink' => __( 'Previous page', 'nagymaros' ),
		'pagelink'         => '%',
		'echo'             => 1
	);
 
	wp_link_pages( $args  );
		
	?>
                                                </div>
                                            </div>
                                            <?php if ( !is_single() ) { ?>
                                            <div class="entry-footer clearfix">
                                                <div class="pull-left">
                                                    <div class="entry-more"><a href="<?php the_permalink(); ?>"><?php _e('Olvasson tovább...', 'nagymaros');?></a></div>
                                                </div>
                                         
                                            </div>
                                            <?php } ?>
                                        </article>
                                    </div>
                                    
<!-- #post-## -->
