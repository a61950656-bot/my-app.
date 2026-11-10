<?php
/**
 * Static page.
 *
 * @package Ajil_Khor
 */

get_header();

while ( have_posts() ) :
	the_post();
	?>
	<section class="section container-x">
		<article class="mx-auto max-w-3xl">
			<h1 class="text-[26px] font-extrabold leading-tight text-ink sm:text-[34px]"><?php the_title(); ?></h1>

			<?php if ( has_post_thumbnail() ) : ?>
				<div class="mt-6 overflow-hidden rounded-[26px]">
					<?php the_post_thumbnail( 'large', array( 'class' => 'h-auto w-full object-cover' ) ); ?>
				</div>
			<?php endif; ?>

			<div class="entry-content mt-6 text-[13.5px] leading-8 text-ink/75">
				<?php the_content(); ?>
			</div>
		</article>
	</section>
	<?php
endwhile;

get_footer();
