<?php
/**
 * Blog index / archives / search results.
 *
 * @package Ajil_Khor
 */

get_header();
?>
<section class="section container-x">
	<header class="mb-6 flex flex-wrap items-end justify-between gap-4">
		<div>
			<h1 class="section-title">
				<?php
				if ( is_search() ) {
					printf( 'نتایج جستجو برای: %s', esc_html( get_search_query() ) );
				} elseif ( is_archive() ) {
					echo wp_kses_post( get_the_archive_title() );
				} else {
					single_post_title();
				}
				?>
			</h1>
			<p class="mt-1.5 text-[12px] text-ink/55 sm:text-[13px]">مقالات و راهنمای خرید از آجیل‌خور</p>
		</div>
	</header>

	<?php if ( have_posts() ) : ?>
		<div class="grid gap-4 sm:grid-cols-2 lg:grid-cols-3">
			<?php
			while ( have_posts() ) :
				the_post();
				get_template_part(
					'template-parts/article-card',
					null,
					array(
						'article' => array(
							'title'   => get_the_title(),
							'url'     => get_permalink(),
							'excerpt' => get_the_excerpt(),
							'date'    => get_the_date(),
							'image'   => get_the_post_thumbnail_url( get_the_ID(), 'large' )
								? get_the_post_thumbnail_url( get_the_ID(), 'large' )
								: ajil_img( 'pistachio.jpg' ),
						),
					)
				);
			endwhile;
			?>
		</div>

		<div class="mt-8">
			<?php
			the_posts_pagination(
				array(
					'mid_size'  => 1,
					'prev_text' => 'قبلی',
					'next_text' => 'بعدی',
					'class'     => 'flex justify-center gap-2 text-[13px]',
				)
			);
			?>
		</div>
	<?php else : ?>
		<div class="rounded-[24px] border border-dashed border-line bg-white/60 px-6 py-10 text-center">
			<p class="text-[13px] text-ink/60">مطلبی پیدا نشد. عبارت دیگری را جستجو کنید.</p>
			<div class="mt-4 flex justify-center">
				<?php get_search_form(); ?>
			</div>
		</div>
	<?php endif; ?>
</section>
<?php
get_footer();
