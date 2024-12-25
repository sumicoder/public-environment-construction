<?php

/* ---------- セットアップ ---------- */
function my_setup()
{
	add_theme_support('post-thumbnails'); // アイキャッチ画像を有効化
	add_theme_support('automatic-feed-links'); // 投稿とコメントのRSSフィードのリンクを有効化
	add_theme_support('title-tag'); // タイトルタグ自動生成
	add_theme_support('widgets');
	add_theme_support('menus');
	add_theme_support(
		'html5',
		array( // HTML5でマークアップ
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		)
	);
}
add_action('after_setup_theme', 'my_setup');

/* ---------- Adobe Fontsの読み込み ---------- */
function add_adobe_fonts_script()
{
?>
	<script>
	</script>
<?php
}
add_action('wp_head', 'add_adobe_fonts_script');

/* ---------- pタグとbrタグの自動挿入を解除 ---------- */
function disable_output()
{
	remove_filter('the_content', 'wpautop');  // 本文欄
	// remove_filter('the_title', 'wpautop');  // タイトル蘭
	// remove_filter('comment_text', 'wpautop');  // コメント欄
	remove_filter('the_excerpt', 'wpautop');  // 抜粋欄
}
add_action('init', 'disable_output');

/* ---------- 固定ページで抜粋を使えるようにする ---------- */
function enable_page_excerpt()
{
	add_post_type_support('page', 'excerpt');
}
add_action('init', 'enable_page_excerpt');

/* ---------- マイグレーションでnode_modulesを除外 ---------- */
$my_theme = wp_get_theme();
$_theme_name = $my_theme->stylesheet;

add_filter(
	'ai1wm_exclude_themes_from_export',
	function ($exclude_filters) {
		global $_theme_name;
		$exclude_filters = array(
			"{$_theme_name}/gulp/node_modules",
		);
		return $exclude_filters;
	}
);

/* ---------- サイドバーメニューから既存のタグを削除 ---------- */
function remove_menu() {
    remove_submenu_page('edit.php', 'edit-tags.php?taxonomy=post_tag');
}
add_action('admin_menu', 'remove_menu');

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

	// ScrollHint
	wp_enqueue_script('scroll-hint', '//unpkg.com/scroll-hint@latest/js/scroll-hint.min.js', array(), null, true);
	wp_enqueue_style('scroll-hint', '//unpkg.com/scroll-hint@latest/css/scroll-hint.css', array(), null);

	// SimpleBar
	wp_enqueue_script('simplebar', '//cdnjs.cloudflare.com/ajax/libs/simplebar/6.2.5/simplebar.min.js', array(), '6.2.5', true);
	wp_enqueue_style('simplebar', '//cdnjs.cloudflare.com/ajax/libs/simplebar/6.2.5/simplebar.min.css', array(), '6.2.5');

	// Splide
	wp_enqueue_script('splide', '//cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/js/splide.min.js', array(), '4.1.4', true);
	wp_enqueue_style('splide', '//cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/css/splide.min.css', array(), '4.1.4');

	// テーマのJavaScript
	wp_enqueue_script('theme-common', get_theme_file_uri('/assets/js/common.js'), array(), filemtime(get_theme_file_path('/assets/js/common.js')), true);
	// テーマのCSS
	wp_enqueue_style('theme-common', get_theme_file_uri('/assets/css/style.css'), array(), filemtime(get_theme_file_path('/assets/css/style.css')));
}
add_action('wp_enqueue_scripts', 'my_script_init');

/* ---------- パスの短縮 ---------- */
define('IMAGEPATH', get_template_directory_uri() . '/assets/images');
// define('MOVIEPATH', get_template_directory_uri() . '/assets/movies');


/* ---------- 外部リンク ---------- */
define('SNS_INSTAGRAM_URL', 'https://instagram.com'); // インスタグラム
define('SNS_X_URL', 'https://x.com'); // X
define('SHOPIFY_URL', 'https://shopify.com'); // Shopify
/* ---------- 各ページのリンク ---------- */
define('HOME_URL', esc_url(home_url('/'))); // トップページ
define('ABOUT_URL', esc_url(home_url('/about/'))); // 私たちについて
define('COMPANY_URL', esc_url(home_url('/company/'))); // 会社概要
define('SERVICES_URL', esc_url(home_url('/services/'))); // 事業内容
define('WORKS_URL', esc_url(home_url('/works/'))); // 実績紹介
define('CONTACT_URL', esc_url(home_url('/contact/'))); // お問い合わせ
define('RECRUIT_URL', esc_url(home_url('/recruit/'))); // 採用情報
define('TOPICS_URL', esc_url(home_url('/topics/'))); // トピックス
define('ITEMS_URL', esc_url(home_url('/items/'))); // 商品紹介
define('THANKS_URL', esc_url(home_url('/thanks/'))); // お問い合わせ 完了ページ
