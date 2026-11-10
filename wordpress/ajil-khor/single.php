<?php
/**
 * Single post.
 *
 * @package Ajil_Khor
 */

get_header();

while ( have_posts() ) :
	the_post();
	?>
	<section class="section container-x">
		<article class="mx-auto max-w-3xl">
			<header class="mb-6">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="text-[11px] font-medium text-pistachio">آجیل‌خور</a>
				<h1 class="mt-2 text-[26px] font-extrabold leading-tight text-ink sm:text-[34px]"><?php the_title(); ?></h1>
				<p class="mt-2 text-[11.5px] text-ink/50"><?php echo esc_html( get_the_date() ); ?></p>
			</header>

			<?php if ( has_post_thumbnail() ) : ?>
				<div class="mb-6 overflow-hidden rounded-[26px]">
					<?php the_post_thumbnail( 'large', array( 'class' => 'h-auto w-full object-cover' ) ); ?>
				</div>
			<?php endif; ?>

			<div class="entry-content text-[13.5px] leading-8 text-ink/75">
				<?php the_content(); ?>
			</div>

			<nav class="mt-10 flex items-center justify-between gap-4 border-t border-line pt-6 text-[12.5px] font-semibold text-pistachio-deep">
				<?php previous_post_link( '%link', 'مقاله قبلی' ); ?>
				<?php next_post_link( '%link', 'مقاله بعدی' ); ?>
			</nav>
		</article>
	</section>
	<?php
endwhile;

get_footer();
