<?php

    if( !defined( 'ABSPATH' ) ){
        exit;
    }
	$html = '';
	
    $html .='<div class="content_area-'.$postid.'">';
    $carpro_slider_items   				= get_post_meta($postid, 'carpro_slider_items', true);
    $carpro_slider_itemsdesktop     	= get_post_meta($postid, 'carpro_slider_itemsdesktop', true);
    $carpro_slider_itemsdesktopsmall	= get_post_meta($postid,'carpro_slider_itemsdesktopsmall', true);
    $carpro_slider_itemsmobile      	= get_post_meta($postid, 'carpro_slider_itemsmobile', true); 
    $carpro_slider_loop    				= get_post_meta($postid, 'carpro_slider_loop', true);
    $carpro_slider_margin   			= get_post_meta($postid, 'carpro_slider_margin', true);
    $carpro_slider_autoplay         	= get_post_meta($postid, 'carpro_slider_autoplay', true);
    $carpro_slider_autoplay_speed  	 	= get_post_meta($postid, 'carpro_slider_autoplay_speed', true);
    $carpro_slider_autoplaytimeout  	= get_post_meta($postid, 'carpro_slider_autoplaytimeout', true);
    $carpro_slider_navigation         	= get_post_meta($postid, 'carpro_slider_navigation', true);
    $carpro_slider_navigation_position  = get_post_meta($postid, 'carpro_slider_navigation_position', true);
    $carpro_slider_pagination           = get_post_meta($postid, 'carpro_slider_pagination', true);
    $carpro_slider_paginationposition   = get_post_meta($postid, 'carpro_slider_paginationposition', true);
    $carpro_slider_stophover            = get_post_meta($postid, 'carpro_slider_stophover', true);
    $carpro_slider_navtext_color        = get_post_meta($postid, 'carpro_slider_navtext_color', true);
    $carpro_slider_navtext_hovercolor   = get_post_meta($postid, 'carpro_slider_navtext_hovercolor', true);
    $carpro_slider_navbg_color        	= get_post_meta($postid, 'carpro_slider_navbg_color', true);
    $carpro_slider_navbg_hovercolor     = get_post_meta($postid, 'carpro_slider_navbg_hovercolor', true);
    $carpro_slider_pagination_color     = get_post_meta($postid, 'carpro_slider_pagination_color', true);
    $carpro_slider_pagination_bgcolor   = get_post_meta($postid, 'carpro_slider_pagination_bgcolor', true);
    $carpro_slider_pagination_style    	= get_post_meta($postid, 'carpro_slider_pagination_style', true);
	
    $carpro_slider_hide_img         	= get_post_meta($postid, 'carpro_slider_hide_img', true);
    $carpro_slider_img_height         	= get_post_meta($postid, 'carpro_slider_img_height', true);
    $carpro_slider_hide_img_captions 	= get_post_meta($postid, 'carpro_slider_hide_img_captions', true);
    $carpro_slider_capbg_color 			= get_post_meta($postid, 'carpro_slider_capbg_color', true);
    $carpro_slider_captext_color 		= get_post_meta($postid, 'carpro_slider_captext_color', true);
    $carpro_slider_captext_size 		= get_post_meta($postid, 'carpro_slider_captext_size', true);
    $carpro_slider_captext_align 		= get_post_meta($postid, 'carpro_slider_captext_align', true);
    $carpro_slider_hide_link 			= get_post_meta($postid, 'carpro_slider_hide_link', true);
    $carpro_slider_overlay_color 		= get_post_meta($postid, 'carpro_slider_overlay_color', true);
    $carpro_slider_overlayicons_color 	= get_post_meta($postid, 'carpro_slider_overlayicons_color', true);
    $carpro_slider_overlaycolor_icons 	= get_post_meta($postid, 'carpro_slider_overlaycolor_icons', true);
    $carpro_slider_border_icons 		= get_post_meta($postid, 'carpro_slider_border_icons', true);
    $carpro_slider_excerpt_color 		= get_post_meta($postid, 'carpro_slider_excerpt_color', true);
	
	
    
	$html .='<script>
            jQuery(document).ready(function($) {
              $("#tpcarouselpro-'.$postid.'").owlCarousel({
                autoplay: '.$carpro_slider_autoplay.',
                autoplaySpeed: 700,
                autoplayHoverPause: '.$carpro_slider_stophover.',
                margin: '.$carpro_slider_margin.',
                autoplayTimeout: '.$carpro_slider_autoplaytimeout.',
                nav : '.$carpro_slider_navigation.',
                navText:["<",">"],
                dots: '.$carpro_slider_pagination.',
                smartSpeed: 450,
                clone:true,
                loop: '.$carpro_slider_loop.',
                responsive:{
                    0:{
                      items:'.$carpro_slider_itemsmobile.',
                    },
                    678:{
                      items:'.$carpro_slider_itemsdesktopsmall.',
                    },
                    980:{
                      items:'.$carpro_slider_itemsdesktop.',
                    },
                    1199:{
                      items:'.$carpro_slider_items.',
                    }
                }
              });
            });
          </script>';

    $html .='<style>';

	$html .='
		#tpcarouselpro-'.$postid.' .portfolio-item img {
		  height: '.$carpro_slider_img_height.'px;
		  box-shadow:none;
		}';

	# navigation & pagination style
	if($carpro_slider_navigation_position == 1){
		$html .='
		#tpcarouselpro-'.$postid.' .owl-controls .owl-nav{
			margin-right: 0;
			margin-top: 0;
			position: absolute;
			right: 0;
			top: -50px;
		}';
	}
	$html .='
		#tpcarouselpro-'.$postid.' .owl-nav .owl-prev{
			background: #'.$carpro_slider_navbg_color.';
			border-radius: 0;
			color: #'.$carpro_slider_navtext_color.';
			cursor: pointer;
			display: inline-block;
			font-size: 14px;
			margin: 0 4px 0 0;
			padding: 5px;
			width: 25px;
		}';
	$html .='
		#tpcarouselpro-'.$postid.' .owl-nav .owl-next{
			background: #'.$carpro_slider_navbg_color.';
			border-radius: 0;
			color: #'.$carpro_slider_navtext_color.';
			cursor: pointer;
			display: inline-block;
			font-size: 14px;
			margin: 0;
			padding: 5px;
			width: 25px;
		}';
	$html .='	
		#tpcarouselpro-'.$postid.' .owl-nav .owl-next:hover, #tpcarouselpro-'.$postid.' .owl-nav .owl-prev:hover {
		  background: #'.$carpro_slider_navbg_hovercolor.';
		  color: #'.$carpro_slider_navtext_hovercolor.';
		}';
	$html .='	
		#tpcarouselpro-'.$postid.'.owl-theme .owl-dots {
		  text-align: '.$carpro_slider_paginationposition.';
		  margin-top: 10px;
		}';
	if($carpro_slider_pagination_style == 1){
		$html .='
		#tpcarouselpro-'.$postid.'.owl-theme .owl-dots .owl-dot span {
		  backface-visibility: visible;
		  background: #'.$carpro_slider_pagination_bgcolor.';
		  border-radius: 30px;
		  display: block;
		  height: 10px;
		  margin: 5px 7px;
		  transition: opacity 200ms ease 0s;
		  width: 10px;
		}';
	}
	$html .='	
		#tpcarouselpro-'.$postid.'.owl-theme .owl-dots .owl-dot.active span, .owl-theme .owl-dots .owl-dot:hover span {
		  background: #'.$carpro_slider_pagination_color.';
		}';# End Navigation & Pagination Style

	$html .='
		.tpcarouselpro-theme1-title{
		  background: '.$carpro_slider_capbg_color.';
		  display: block;
		  font-size: '.$carpro_slider_captext_size.'px;
		  text-align: '.$carpro_slider_captext_align.';
		  color:'.$carpro_slider_captext_color.';
		  line-height: 30px;
		  overflow: hidden;
		  padding: 5px;
		}
		';
	$html .='</style>';


    $html .= '<div id="tpcarouselpro-'.$postid.'" class="owl-carousel owl-theme">';
    while ($query->have_posts()) : $query->the_post();
	$web_url 		= get_post_meta( $post->ID, 'any_web_links', true );
	$web_url_target = get_post_meta( $post->ID, 'carpro_slider_ulr_target', true );
	$post_thumb = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );

 	$html .='
	<div class="item-'.$postid.'">
		<div class="portfolio-item">';
			if($carpro_slider_hide_img == 1){
				$html.='<div class="portfolio-text">';
				if($carpro_slider_hide_link == 1){
					$html.='<a target="'.esc_attr($web_url_target).'" href="'.esc_url($web_url).'"><img src="'.$post_thumb.'" alt="'.esc_attr(get_the_title()).'" /></a>';
				}
				else{
					$html.='<img src="'.$post_thumb.'" alt="'.esc_attr(get_the_title()).'" />';
				}
				$html.='
				</div>';
			};
			if($carpro_slider_hide_img_captions == 1){
				$html.='
					<div class="tpcarouselpro-theme1-title">
						'.get_the_title().'
					</div>
				';
			}
			$html.='
		</div>
	</div>';

    endwhile;
    $html .='</div>';
    $html .='</div>';
	wp_reset_postdata();