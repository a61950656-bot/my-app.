<?php
/**
 * Product rail with the green header bar.
 *
 * @package Ajil_Khor
 *
 * @var array $args title, badge, items.
 */

$ajil_title = isset( $args['title'] ) ? $args['title'] : '';
$ajil_badge = isset( $args['badge'] ) ? $args['badge'] : '';
$ajil_items = isset( $args['items'] ) ? $args['items'] : array();
?>
<section class="container-x">
	<div class="relative mb-4 flex items-center justify-between gap-3 overflow-hidden rounded-[20px] bg-pistachio px-4 py-3 sm:px-5 sm:py-3.5">
		<?php ajil_sprig( 'pointer-events-none absolute -bottom-16 left-24 h-40 w-32 -rotate-12 text-cream/15' ); ?>
		<div class="relative flex items-center gap-2.5">
			<h2 class="text-[14px] font-extrabold text-cream sm:text-[17px]"><?php echo esc_html( $ajil_title ); ?></h2>
			<?php if ( $ajil_badge ) : ?>
				<span class="rounded-full bg-cream/20 px-2 py-0.5 text-[10px] font-medium text-cream sm:text-[11px]"><?php echo esc_html( $ajil_badge ); ?></span>
			<?php endif; ?>
		</div>
		<a href="#products" class="relative inline-flex items-center gap-1.5 rounded-full bg-cream/15 px-3 py-1.5 text-[11px] font-medium text-cream transition hover:bg-cream/25 sm:px-4 sm:text-[12px]">
			مشاهده همه
			<?php ajil_icon( 'arrow', 'h-3.5 w-3.5' ); ?>
		</a>
	</div>

	<?php if ( $ajil_items ) : ?>
		<div class="grid grid-cols-2 gap-3 sm:grid-cols-3 sm:gap-4 lg:grid-cols-5">
			<?php
			foreach ( $ajil_items as $ajil_item ) {
				get_template_part( 'template-parts/product-card', null, array( 'product' => $ajil_item ) );
			}
			?>
		</div>
	<?php else : ?>
		<p class="rounded-[20px] border border-dashed border-line bg-white/60 px-5 py-8 text-center text-[13px] text-ink/55">
			محصولی برای نمایش وجود ندارد.
		</p>
	<?php endif; ?>
</section>
