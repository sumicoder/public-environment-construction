<?php

/* --- 投稿タイプ複製の場合はここから --- */
/* ---------- カスタム投稿 [実績] を追加 ---------- */
function create_post_type_works() {
	register_post_type(
		'works',
		array(
			'labels' => array(
				'name' => '実績一覧',
				'singular_name' => '実績一覧',
				'add_new' => '実績を追加',
				'add_new_item' => '実績を追加',
				'edit_item' => '実績を編集',
				'new_item' => '新しい実績',
				'view_item' => '実績を表示',
				'search_items' => '実績を検索',
				'not_found' => '実績はありません',
				'not_found_in_trash' => 'ゴミ箱に実績はありません',
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

/* --- 投稿タイプ複製の場合はここから --- */
/* ---------- カスタム投稿 [商品] を追加 ---------- */
function create_post_type_items() {
	register_post_type(
		'items',
		array(
			'labels' => array(
				'name' => '商品一覧',
				'singular_name' => '商品一覧',
				'add_new' => '商品を追加',
				'add_new_item' => '商品を追加',
				'edit_item' => '商品を編集',
				'new_item' => '新しい商品',
				'view_item' => '商品を表示',
				'search_items' => '商品を検索',
				'not_found' => '商品はありません',
				'not_found_in_trash' => 'ゴミ箱に商品はありません',
			),
			'public' => true,
			'has_archive' => true,
			'rewrite' => array('slug' => 'items'),
			'supports' => array('title', 'thumbnail', 'editor'),
			'show_in_rest' => true,
		)
	);
}
add_action('init', 'create_post_type_items');
/* --- 投稿タイプ複製の場合はここまでをコピーして使う --- */

/* --- カスタムタクソノミー複製の場合はここから --- */
/* ---------- カスタムタクソノミー [商品カテゴリー] を作成 ---------- */
function create_custom_taxonomy_items_category() {
	register_taxonomy(
		'items_category',
		'items',
		array(
			'labels' => array(
				'name' => '商品カテゴリー',
				'singular_name' => '商品カテゴリー',
				'search_items' => '商品カテゴリー検索',
				'all_items' => '全ての商品カテゴリー',
				'parent_item' => '親の商品カテゴリー',
				'parent_item_colon' => '親の商品カテゴリー:',
				'edit_item' => '商品カテゴリーを編集',
				'update_item' => '商品カテゴリーを更新',
				'add_new_item' => '商品カテゴリー追加',
				'new_item_name' => '新しい商品カテゴリー',
				'menu_name' => '商品カテゴリー',
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
add_action('init', 'create_custom_taxonomy_items_category');
/* --- カスタムタクソノミー複製の場合はここまでをコピーして使う --- */

/* --- カスタムタクソノミー複製の場合はここから --- */
/* ---------- カスタムタクソノミー [商品ジャンル] を作成 ---------- */
function create_custom_taxonomy_items_genre() {
	register_taxonomy(
		'items_genre',
		'items',
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
add_action('init', 'create_custom_taxonomy_items_genre');
/* --- カスタムタクソノミー複製の場合はここまでをコピーして使う --- */

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
