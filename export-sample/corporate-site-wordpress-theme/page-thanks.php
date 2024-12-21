<?php
/*
* Template Name: サンクスページ
*/
if (empty($_GET['from']) || !isset($_GET['from'])) {
	// header('location:' . home_url('/contact')); // リダイレクト先のURL
} else {
	switch ($_GET['from']) { // サンクスページの内容を動的に切り替える場合のswitch文
		default:
			break;
	}
};
?>

<?php get_header(); ?>

<?php get_footer(); ?>