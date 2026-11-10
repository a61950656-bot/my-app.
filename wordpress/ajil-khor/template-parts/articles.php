<?php
/**
 * Latest articles. Uses published posts, with demo cards until the site has some.
 *
 * @package Ajil_Khor
 */

$ajil_articles = array();

$ajil_query = new WP_Query(
	array(
		'posts_per_page'      => 3,
		'ignore_sticky_posts' => true,
		'no_found_rows'       => true,
	)
);

if ( $ajil_query->have_posts() ) {
	while ( $ajil_query->have_posts() ) {
		$ajil_query->the_post();
		$ajil_articles[] = array(
			'title'   => get_the_title(),
			'url'     => get_permalink(),
			'excerpt' => get_the_excerpt(),
			'date'    => get_the_date(),
			'image'   => get_the_post_thumbnail_url( get_the_ID(), 'large' )
				? get_the_post_thumbnail_url( get_the_ID(), 'large' )
				: ajil_img( 'pistachio.jpg' ),
		);
	}
	wp_reset_postdata();
} else {
	foreach ( ajil_demo_articles() as $demo ) {
		$ajil_articles[] = array(
			'title'   => $demo['title'],
			'url'     => '#footer',
			'excerpt' => $demo['excerpt'],
			'date'    => $demo['date'],
			'image'   => ajil_img( $demo['image'] ),
		);
	}
}
?>
<section class="section container-x">
	<div class="flex items-center gap-4">
		<span class="h-px flex-1 bg-line"></span>
		<h2 class="text-[20px] font-extrabold tracking-tight text-ink sm:text-[25px]">جدیدترین مقالات</h2>
		<span class="h-px flex-1 bg-line"></span>
	</div>

	<div class="mt-6 grid gap-4 sm:grid-cols-2 lg:grid-cols-3">
		<?php
		foreach ( $ajil_articles as $ajil_article ) {
			get_template_part( 'template-parts/article-card', null, array( 'article' => $ajil_article ) );
		}
		?>
	</div>
</section>
