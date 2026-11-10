<?php
/**
 * Front page: hero, categories, product rails, promos, why-us, articles.
 *
 * @package Ajil_Khor
 */

get_header();
?>
	<?php get_template_part( 'template-parts/hero' ); ?>
	<?php get_template_part( 'template-parts/categories' ); ?>

	<div id="products" class="grid scroll-mt-24 gap-9 pt-9 sm:gap-12 sm:pt-12">
		<?php
		get_template_part(
			'template-parts/product-rail',
			null,
			array(
				'title' => 'پرفروش‌ترین‌ها',
				'badge' => '۵ محصول برتر',
				'items' => ajil_products( 'best' ),
			)
		);
		get_template_part(
			'template-parts/product-rail',
			null,
			array(
				'title' => 'پیشنهاد آجیل‌خور',
				'badge' => 'تازه رسیده',
				'items' => ajil_products( 'recommended' ),
			)
		);
		?>
	</div>

	<?php get_template_part( 'template-parts/promo-banners' ); ?>
	<?php get_template_part( 'template-parts/why-us' ); ?>
	<?php get_template_part( 'template-parts/articles' ); ?>
<?php
get_footer();
