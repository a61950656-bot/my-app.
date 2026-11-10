<?php
/**
 * Single product card.
 *
 * @package Ajil_Khor
 *
 * @var array $args Product data: name, price, image, badge, url.
 */

$ajil_product = isset( $args['product'] ) ? $args['product'] : $args;
?>
<article class="group flex flex-col rounded-[22px] border border-line/80 bg-white p-3 shadow-card transition duration-300 hover:-translate-y-1 hover:shadow-soft">
	<div class="relative aspect-square overflow-hidden rounded-[16px] bg-cream-deep">
		<a href="<?php echo esc_url( $ajil_product['url'] ); ?>" class="block h-full w-full">
			<img src="<?php echo esc_url( ajil_img( $ajil_product['image'] ) ); ?>" alt="<?php echo esc_attr( $ajil_product['name'] ); ?>" loading="lazy" class="h-full w-full object-cover transition duration-500 group-hover:scale-[1.04]" />
		</a>
		<?php if ( ! empty( $ajil_product['badge'] ) ) : ?>
			<span class="absolute right-2 top-2 rounded-full bg-white/90 px-2 py-0.5 text-[9px] font-semibold text-pistachio-deep shadow-sm backdrop-blur-sm sm:text-[10px]">
				<?php echo esc_html( $ajil_product['badge'] ); ?>
			</span>
		<?php endif; ?>
		<button type="button" data-add-to-cart data-product-name="<?php echo esc_attr( $ajil_product['name'] ); ?>" aria-label="افزودن <?php echo esc_attr( $ajil_product['name'] ); ?> به سبد خرید" class="absolute bottom-2 left-2 grid h-8 w-8 place-items-center rounded-full bg-ink text-cream shadow-pill transition hover:bg-pistachio-deep focus:outline-none focus-visible:ring-2 focus-visible:ring-pistachio/60">
			<?php ajil_icon( 'plus', 'h-[14px] w-[14px]' ); ?>
		</button>
	</div>

	<h3 class="mt-3 truncate text-center text-[12px] font-semibold text-ink sm:text-[13px]">
		<a href="<?php echo esc_url( $ajil_product['url'] ); ?>"><?php echo esc_html( $ajil_product['name'] ); ?></a>
	</h3>
	<p class="mt-1 text-center text-[12px] font-bold text-pistachio-deep sm:text-[13px]">
		<?php echo esc_html( $ajil_product['price'] ); ?>
		<span class="ms-1 text-[10px] font-medium text-ink/45">تومان</span>
	</p>
</article>
