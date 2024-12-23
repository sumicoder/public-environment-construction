<?php

/* --- 投稿タイプ複製の場合はここから --- */
/* ---------- カスタム投稿 [実績紹介] を追加 ---------- */
function create_post_type_works() {
	register_post_type(
		'works',
		array(
			'labels' => array(
				'name' => '実績紹介一覧',
				'singular_name' => '実績紹介一覧',
				'add_new' => '実績紹介を追加',
				'add_new_item' => '実績紹介を追加',
				'edit_item' => '実績紹介を編集',
				'new_item' => '新しい実績紹介',
				'view_item' => '実績紹介を表示',
				'search_items' => '実績紹介を検索',
				'not_found' => '実績紹介はありません',
				'not_found_in_trash' => 'ゴミ箱に実績紹介はありません',
			),
			'public' => true,
			'has_archive' => true,
			'rewrite' => array('slug' => 'works'),
			'supports' => array('title', 'thumbnail', 'editor'),
			'show_in_rest' => true,
		)
	);
}
add_action('init', 'create_post_type_works');
/* --- 投稿タイプ複製の場合はここまでをコピーして使う --- */

/* --- 投稿タイプ複製の場合はここから --- */
/* ---------- カスタム投稿 [トピックス] を追加 ---------- */
function create_post_type_topics() {
	register_post_type(
		'topics',
		array(
			'labels' => array(
				'name' => 'トピックス一覧',
				'singular_name' => 'トピックス一覧',
				'add_new' => 'トピックスを追加',
				'add_new_item' => 'トピックスを追加',
				'edit_item' => 'トピックスを編集',
				'new_item' => '新しいトピックス',
				'view_item' => 'トピックスを表示',
				'search_items' => 'トピックスを検索',
				'not_found' => 'トピックスはありません',
				'not_found_in_trash' => 'ゴミ箱にトピックスはありません',
			),
			'public' => true,
			'has_archive' => true,
			'rewrite' => array('slug' => 'topics'),
			'supports' => array('title', 'thumbnail', 'editor'),
			'show_in_rest' => true,
		)
	);
}
add_action('init', 'create_post_type_topics');
/* --- 投稿タイプ複製の場合はここまでをコピーして使う --- */

/* --- カスタムタクソノミー複製の場合はここから --- */
/* ---------- カスタムタクソノミー [実績カテゴリー] を作成 ---------- */
function create_custom_taxonomy_works_category() {
	register_taxonomy(
		'works_category',
		'works',
		array(
			'labels' => array(
				'name' => '実績カテゴリー',
				'singular_name' => '実績カテゴリー',
				'search_items' => '実績カテゴリー検索',
				'all_items' => '全ての実績カテゴリー',
				'parent_item' => '親の実績カテゴリー',
				'parent_item_colon' => '親の実績カテゴリー:',
				'edit_item' => '実績カテゴリーを編集',
				'update_item' => '実績カテゴリーを更新',
				'add_new_item' => '実績カテゴリー追加',
				'new_item_name' => '新しい実績カテゴリー',
				'menu_name' => '実績カテゴリー',
			),
			'public' => true,
			'show_ui' => true,
			'show_in_menu' => true,
			'hierarchical' => true,
			'show_in_nav_menus' => true,
			'query_var' => true,
			'rewrite' => true,
			'show_admin_column' => true,
		)
	);
}
add_action('init', 'create_custom_taxonomy_works_category');
/* --- カスタムタクソノミー複製の場合はここまでをコピーして使う --- */

/* --- カスタムタクソノミー複製の場合はここから --- */
/* ---------- カスタムタクソノミー [トピックスカテゴリー] を作成 ---------- */
function create_custom_taxonomy_topics_category() {
	register_taxonomy(
		'topics_category',
		'topics',
		array(
			'labels' => array(
				'name' => 'トピックスカテゴリー',
				'singular_name' => 'トピックスカテゴリー',
				'search_items' => 'トピックスカテゴリー検索',
				'all_items' => '全てのトピックスカテゴリー',
				'parent_item' => '親のトピックスカテゴリー',
				'parent_item_colon' => '親のトピックスカテゴリー:',
				'edit_item' => 'トピックスカテゴリーを編集',
				'update_item' => 'トピックスカテゴリーを更新',
				'add_new_item' => 'トピックスカテゴリー追加',
				'new_item_name' => '新しいトピックスカテゴリー',
				'menu_name' => 'トピックスカテゴリー',
			),
			'public' => true,
			'show_ui' => true,
			'show_in_menu' => true,
			'hierarchical' => true,
			'show_in_nav_menus' => true,
			'query_var' => true,
			'rewrite' => true,
			'show_admin_column' => true,
		)
	);
}
add_action('init', 'create_custom_taxonomy_topics_category');
/* --- カスタムタクソノミー複製の場合はここまでをコピーして使う --- */

/* --- 投稿タイプ複製の場合はここから --- */
/* ---------- カスタム投稿 [商品紹介] を追加 ---------- */
function create_post_type_products() {
	register_post_type(
		'products',
		array(
			'labels' => array(
				'name' => '商品紹介一覧',
				'singular_name' => '商品紹介一覧',
				'add_new' => '商品紹介を追加',
				'add_new_item' => '商品紹介を追加',
				'edit_item' => '商品紹介を編集',
				'new_item' => '新しい商品紹介',
				'view_item' => '商品紹介を表示',
				'search_items' => '商品紹介を検索',
				'not_found' => '商品紹介はありません',
				'not_found_in_trash' => 'ゴミ箱に商品紹介はありません',
			),
			'public' => true,
			'has_archive' => true,
			'rewrite' => array('slug' => 'products'),
			'supports' => array('title', 'thumbnail', 'editor'),
			'show_in_rest' => true,
		)
	);
}
add_action('init', 'create_post_type_products');
/* --- 投稿タイプ複製の場合はここまでをコピーして使う --- */

/* --- カスタムタクソノミー複製の場合はここから --- */
/* ---------- カスタムタクソノミー [商品ジャンル] を作成 ---------- */
function create_custom_taxonomy_products_genre() {
	register_taxonomy(
		'products_genre',
		'products',
		array(
			'labels' => array(
				'name' => '商品ジャンル',
				'singular_name' => '商品ジャンル',
				'search_items' => '商品ジャンル検索',
				'all_items' => '全ての商品ジャンル',
				'parent_item' => '親の商品ジャンル',
				'parent_item_colon' => '親の商品ジャンル:',
				'edit_item' => '商品ジャンルを編集',
				'update_item' => '商品ジャンルを更新',
				'add_new_item' => '商品ジャンル追加',
				'new_item_name' => '新しい商品ジャンル',
				'menu_name' => '商品ジャンル',
			),
			'public' => true,
			'show_ui' => true,
			'show_in_menu' => true,
			'hierarchical' => true,
			'show_in_nav_menus' => true,
			'query_var' => true,
			'rewrite' => true,
			'show_admin_column' => true,
		)
	);
}
add_action('init', 'create_custom_taxonomy_products_genre');
/* --- カスタムタクソノミー複製の場合はここまでをコピーして使う --- */

/* --- カスタムタクソノミー複製の場合はここから --- */
/* ---------- カスタムタクソノミー [商品カラー] を作成 ---------- */
function create_custom_taxonomy_products_color() {
	register_taxonomy(
		'products_color',
		'products',
		array(
			'labels' => array(
				'name' => '商品カラー',
				'singular_name' => '商品カラー',
				'search_items' => '商品カラー検索',
				'all_items' => '全ての商品カラー',
				'parent_item' => '親の商品カラー',
				'parent_item_colon' => '親の商品カラー:',
				'edit_item' => '商品カラーを編集',
				'update_item' => '商品カラーを更新',
				'add_new_item' => '商品カラー追加',
				'new_item_name' => '新しい商品カラー',
				'menu_name' => '商品カラー',
			),
			'public' => true,
			'show_ui' => true,
			'show_in_menu' => true,
			'hierarchical' => true,
			'show_in_nav_menus' => true,
			'query_var' => true,
			'rewrite' => true,
			'show_admin_column' => true,
		)
	);
}
add_action('init', 'create_custom_taxonomy_products_color');
/* --- カスタムタクソノミー複製の場合はここまでをコピーして使う --- */
