<?php
/**
 * Article card used by the front page and the archives.
 *
 * @package Ajil_Khor
 *
 * @var array $args title, url, excerpt, date, image.
 */

$ajil_article = isset( $args['article'] ) ? $args['article'] : $args;
?>
<article class="group flex flex-col overflow-hidden rounded-[24px] border border-line/80 bg-white shadow-card transition duration-300 hover:-translate-y-1 hover:shadow-soft">
	<a href="<?php echo esc_url( $ajil_article['url'] ); ?>" class="block aspect-[16/10] overflow-hidden bg-cream-deep">
		<img src="<?php echo esc_url( $ajil_article['image'] ); ?>" alt="<?php echo esc_attr( $ajil_article['title'] ); ?>" loading="lazy" class="h-full w-full object-cover transition duration-500 group-hover:scale-[1.04]" />
	</a>
	<div class="flex flex-1 flex-col p-4 sm:p-5">
		<span class="text-[10px] font-medium text-pistachio"><?php echo esc_html( $ajil_article['date'] ); ?></span>
		<h3 class="mt-1.5 text-[13.5px] font-bold leading-6 text-ink sm:text-[15px]">
			<a href="<?php echo esc_url( $ajil_article['url'] ); ?>"><?php echo esc_html( $ajil_article['title'] ); ?></a>
		</h3>
		<p class="mt-1.5 line-clamp-2 text-[11.5px] leading-6 text-ink/60 sm:text-[12.5px]">
			<?php echo esc_html( $ajil_article['excerpt'] ); ?>
		</p>
		<a href="<?php echo esc_url( $ajil_article['url'] ); ?>" class="mt-4 inline-flex items-center gap-1.5 text-[11.5px] font-semibold text-pistachio-deep transition group-hover:gap-2.5">
			ادامه مطلب
			<?php ajil_icon( 'arrow', 'h-3.5 w-3.5' ); ?>
		</a>
	</div>
</article>
