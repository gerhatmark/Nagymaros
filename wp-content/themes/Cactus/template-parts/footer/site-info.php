<?php
	global $nagymaros_options;
?>
<div class="footer-info-area text-center">
      
	<?php 
	if ( isset($nagymaros_options['footer_logo']) && $nagymaros_options['footer_logo'] != '' )
	echo '<div class="footer-logo nagymaros-footer-logo"><img src="'.esc_url($nagymaros_options['footer_logo']).'" alt=""></div>';
	?>
    <?php 
	if ( isset($nagymaros_options['enable_footer_icons']) && $nagymaros_options['enable_footer_icons'] == '1' ):
	
	?>
      <ul class="footer-sns nagymaros-footer-sns">
      <?php 
	  for ($i=1;$i<=5;$i++){
	  if(isset( $nagymaros_options['footer_icon_'.$i] ) &&  $nagymaros_options['footer_icon_'.$i] !='' ){
		  $link = isset($nagymaros_options['footer_icon_link_'.$i])?$nagymaros_options['footer_icon_link_'.$i]:'#';
	  ?>
      <li><a href="<?php echo esc_url($link);?>" target="_blank"><i class="fa <?php echo esc_attr($nagymaros_options['footer_icon_'.$i]);?>"></i></a></li>
      <?php 
	  }
	  }
	  ?>
      </ul>
      <?php endif;	?>
      <div class="site-info"><?php _e('GAUSS KFT.','nagymaros');?> </div>
    </div>