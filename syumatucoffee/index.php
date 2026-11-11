<?php
/**
 * Default fallback template.
 *
 * 固定ページ用テンプレートに該当しないURLでも空白にならないよう、
 * WordPress標準ループを使って投稿内容を表示します。
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<?php get_header(); ?>

<main>
	<section class="l-inner" style="padding-top:clamp(8rem,14vw,12rem);padding-bottom:clamp(5rem,10vw,8rem)">
		<?php if ( have_posts() ) : ?>
			<?php while ( have_posts() ) : the_post(); ?>
				<article <?php post_class(); ?>>
					<h1 class="c-section-heading__ja"><?php the_title(); ?></h1>
					<div style="margin-top:2rem;line-height:2"><?php the_content(); ?></div>
				</article>
			<?php endwhile; ?>
		<?php else : ?>
			<h1 class="c-section-heading__ja">コンテンツが見つかりませんでした</h1>
			<p style="margin-top:2rem">ページのURLをご確認ください。</p>
		<?php endif; ?>
	</section>
</main>

<?php get_footer(); ?>
<?php wp_footer(); ?>
</body>
</html>
