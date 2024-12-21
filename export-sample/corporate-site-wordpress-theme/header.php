<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo("charset") ?>">
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
	<meta name="format-detection" content="telephone=no">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?> id="body">
	<header class="l-header" data-drawer-status="close">
		<div class="l-header__inner">
			<?php $htmlTag = (is_front_page()) ?  'h1' : 'div'; ?>
			<<?php echo $htmlTag; ?> class="l-header__logo">
				<a class="l-header__logoLink" href="<?php echo HOME_URL; ?>" title="トップページに戻る">
					<img src="<?php echo IMAGEPATH; ?>/00_common/logo.svg" alt="" width="" height="">Logo
				</a>
			</<?php echo $htmlTag; ?>>
			<nav class="l-header__nav">
				<ul class="l-header__navList">
					<li class="l-header__navItem"><a href="<?php echo HOME_URL; ?>" class="l-header__link" title="ホームに移動する">ホーム</a></li>
					<li class="l-header__navItem"><a href="<?php echo COMPANY_URL; ?>" class="l-header__navLink" title="会社概要に移動する">会社概要</a></li>
					<li class="l-header__navItem"><a href="<?php echo ABOUT_URL; ?>" class="l-header__navLink" title="私たちについてに移動する">私たちについて</a></li>
					<li class="l-header__navItem"><a href="<?php echo WORKS_URL; ?>" class="l-header__navLink" title="実績紹介に移動する">実績紹介</a></li>
					<li class="l-header__navItem"><a href="<?php echo TOPICS_URL; ?>" class="l-header__navLink" title="トピックスに移動する">トピックス</a></li>
					<li class="l-header__navItem"><a href="<?php echo WORKS_CATEGORY_URL; ?>" class="l-header__navLink" title="実績カテゴリーに移動する">実績カテゴリー</a></li>
					<li class="l-header__navItem"><a href="<?php echo TOPICS_CATEGORY_URL; ?>" class="l-header__navLink" title="トピックスカテゴリーに移動する">トピックスカテゴリー</a></li>
					<li class="l-header__navItem"><a href="<?php echo CONTACT_URL; ?>" class="l-header__navLink" title="お問い合わせに移動する">お問い合わせ</a></li>
					<li class="l-header__navItem"><a href="<?php echo RECRUIT_URL; ?>" class="l-header__navLink" title="採用情報に移動する">採用情報</a></li>
					<li class="l-header__navItem"><a href="<?php echo PRODUCTS_URL; ?>" class="l-header__navLink" title="商品紹介に移動する">商品紹介</a></li>
					<li class="l-header__navItem"><a href="<?php echo PRODUCTS_GENRE_URL; ?>" class="l-header__navLink" title="商品ジャンルに移動する">商品ジャンル</a></li>
					<li class="l-header__navItem"><a href="<?php echo PRODUCTS_COLOR_URL; ?>" class="l-header__navLink" title="商品カラーに移動する">商品カラー</a></li>
					<li class="l-header__navItem"><a href="<?php echo THANKS_URL; ?>" class="l-header__navLink" title="お問い合わせに移動する">お問い合わせ</a></li>
				</ul>
			</nav>
		</div>
		<div class="l-headerDrawer" data-header-drawer>
			<div class="l-headerDrawer__header">

			</div>
			<div class="l-headerDrawer__inner">

			</div>
		</div>
	</header>
	<main class="l-main">