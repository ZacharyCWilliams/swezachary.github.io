


  	 <?php $header_cssbox = (is_array(codeless_get_mod('header_design')) ? codeless_get_mod('header_design') : json_decode(codeless_get_mod('header_design'), true)); ?>
	 
	 .header_container > .main{
	 	<?php if(is_array($header_cssbox)) foreach($header_cssbox as $css => $value){
	 		if($value != '')
	 			echo esc_html( $css ).': '.$value.";\n";
	 	} ?>
	 }



	 <?php $header_cssbox_top = (is_array(codeless_get_mod('header_design_top')) ? codeless_get_mod('header_design_top') : json_decode(codeless_get_mod('header_design_top'), true)); ?>
	 
	 .header_container > .top_nav{
	 	<?php if(is_array($header_cssbox_top)) foreach($header_cssbox_top as $css => $value){
	 		if($value != '')
	 			echo esc_html( $css ).': '.$value.";\n";
	 	} ?>
	 }


	 <?php $header_cssbox_extra = (is_array(codeless_get_mod('header_design_extra')) ? codeless_get_mod('header_design_extra') : json_decode(codeless_get_mod('header_design_extra'), true)); ?>
	 
	 .header_container > .extra_row{
	 	<?php if(is_array($header_cssbox_extra)) foreach($header_cssbox_extra as $css => $value){
	 		if($value != '')
	 			echo esc_html( $css ).': '.$value.";\n";
	 	} ?>
	 }

	 <?php $footer_design = (is_array(codeless_get_mod('footer_design')) ? codeless_get_mod('footer_design') : json_decode(codeless_get_mod('footer_design'), true)); ?>
	 
	 footer#colophon{
	 	<?php if(is_array($footer_design)) foreach($footer_design as $css => $value){
	 		if($value != '')
	 			echo esc_html( $css ).': '.$value.";\n";
	 	} ?>
	 }

	 
	 
	<?php if(codeless_get_mod('header_layout', 'top') == 'left' || codeless_get_mod('header_layout', 'top') == 'right'): ?>
	@media (min-width:992px){
		.header_container{
		 	width:<?php echo codeless_get_mod('header_width') ?>px;
		}
			<?php if( ! codeless_is_header_boxed() ): ?>

			
				#viewport{
			 	
			 		padding-<?php echo codeless_get_mod('header_layout', 'top') ?>: <?php echo (int)codeless_get_mod('header_width') . 'px'; ?>
		
				}
			
			<?php endif; ?>
	}
	<?php endif; ?>
	 
	 

 
	 <?php if(codeless_get_mod('header_menu_style', 'simple') == 'border_top' || codeless_get_mod('header_menu_style', 'simple') == 'border_bottom' || codeless_get_mod('header_menu_style', 'simple') == 'border_left' || codeless_get_mod('header_menu_style', 'simple') == 'border_right'): ?>
	 .header_container.menu_style-<?php echo codeless_get_mod('header_menu_style') ?>.menu-full-style #navigation nav > ul > li, .header_container.menu_style-<?php echo codeless_get_mod('header_menu_style') ?>.menu-text-style #navigation nav > ul > li > a{
	 	<?php $border_pos = str_replace('border_', '', codeless_get_mod('header_menu_style')); ?>
	 	
	 	border-<?php echo esc_html( $border_pos ) ?>-width:<?php echo codeless_get_mod('header_menu_border_width') ?>px;
	 	border-style:<?php echo codeless_get_mod('header_menu_border_style') ?>
	 }
	 <?php endif; ?>
	 

	 .select2-container--default .select2-results__option--highlighted[aria-selected]{ background-color: <?php echo codeless_get_mod('primary_color', '#1fb4cc') ?> !important; color:#fff !important } 

	 .portfolio_navigation  .portfolio_single_right:hover, .portfolio_navigation  .portfolio_single_left:hover {background:<?php echo codeless_get_mod('primary_color', '#1fb4cc'); ?>}	

	 .woocommerce-page .shop-products{ margin-left: -<?php echo codeless_get_mod( 'shop_item_distance', 15 ); ?>px; margin-right: -<?php echo codeless_get_mod( 'shop_item_distance', 15 ); ?>px; }


	 .btn-style-text_effect:after{
	 	background-color:<?php echo codeless_get_mod('button_font_color', '#ffffff'); ?>
	 }

	 .btn-style-text_effect:hover:after{
	 	background-color:<?php echo codeless_get_mod('button_font_color_hover', '#ffffff'); ?>
	 }

	  .cl_service.cl-hover-wrapper_accent_color:hover .wrapper-form{
	  	background-color: <?php echo codeless_get_mod( 'primary_color', '#1fb4cc' ); ?> !important;
	  	border-color: <?php echo codeless_get_mod( 'primary_color', '#1fb4cc' ); ?> !important;
	  }

	  <?php if( codeless_get_mod( 'header_bg_color', '' ) == '' ): ?>

	  	.cl-header-sticky:not(.cl-transparent):not(.cl-actived-fullscreen-header){
	        background-color:#fff;
	    }

	  <?php endif; ?>


	  @media (max-width:991px){
		  <?php 

		  $header_columns_responsive_order = codeless_get_mod( 'header_columns_responsive_order', array( 'left', 'middle', 'right' ) ); 
		  if( is_array( $header_columns_responsive_order ) && !empty( $header_columns_responsive_order ) ){
		  	$i = 1;
		  	foreach( $header_columns_responsive_order as $column ){
		  		?>

		  		.main.header-row .c-<?php echo esc_attr( $column ) ?>{
		  			order: <?php echo esc_attr( $i ); ?>;
		  		}

		  		<?php

		  		$i++;
		  	}
		  }

		  $default_columns = array( 'left', 'middle', 'right' );
		  foreach( $default_columns as $column ){
		  	if( ! in_array( $column, $header_columns_responsive_order ) ){
		  		?>
		  		
		  		.main.header-row .c-<?php echo esc_attr( $column ) ?>{
		  			display:none !important;
		  		}

		  		<?php
		  	}

		  }

		  ?>
	  }
  
<?php  echo codeless_get_mod('custom_css'); ?>

	