<?php
/* ---------- CSSとJavaScriptの読み込み記述の追加 ---------- */
function my_script_init()
{
	// WordPress提供のjquery.jsを読み込まない
	wp_deregister_script('jquery');
	// jQueryの読み込み
	wp_enqueue_script('jquery', '//ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js', array(), "3.6.4", true);

	// GSAP
	wp_enqueue_script('gsap', '//cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js', array(), '3.12.5', true);
	wp_enqueue_script('gsap-CustomEase', '//cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/CustomEase.min.js', array('gsap'), '3.12.5', true);
	wp_enqueue_script('gsap-ScrollTrigger', '//cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/ScrollTrigger.min.js', array('gsap'), '3.12.5', true);
	wp_enqueue_script('gsap-ScrollTo', '//cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/ScrollToPlugin.min.js', array('gsap'), '3.12.5', true);

	// Swiper
	wp_enqueue_script('swiper', '//cdnjs.cloudflare.com/ajax/libs/Swiper/11.0.5/swiper-bundle.min.js', array(), '11.0.5', true);
	wp_enqueue_style('swiper', '//cdnjs.cloudflare.com/ajax/libs/Swiper/11.0.5/swiper-bundle.min.css', array(), '11.0.5');

	// SimpleBar
	wp_enqueue_script('simplebar', '//cdnjs.cloudflare.com/ajax/libs/simplebar/6.2.5/simplebar.min.js', array(), '6.2.5', true);
	wp_enqueue_style('simplebar', '//cdnjs.cloudflare.com/ajax/libs/simplebar/6.2.5/simplebar.min.css', array(), '6.2.5');

	// テーマのJavaScript
	wp_enqueue_script('theme-common', get_theme_file_uri('/assets/js/common.js'), array('gsap','swiper','simplebar'), filemtime(get_theme_file_path('/assets/js/common.js')), true);
	// テーマのCSS
	wp_enqueue_style('theme-common', get_theme_file_uri('/assets/css/style.css'), array(), filemtime(get_theme_file_path('/assets/css/style.css')));
}
add_action('wp_enqueue_scripts', 'my_script_init');
