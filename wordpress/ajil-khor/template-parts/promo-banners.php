<?php
/**
 * Two organic promotional banners.
 *
 * @package Ajil_Khor
 */

$ajil_promos = ajil_promos();
?>
<section class="container-x mt-9 sm:mt-12">
	<div class="grid gap-4 lg:grid-cols-2 lg:gap-5">
		<?php foreach ( $ajil_promos as $promo ) : ?>
			<?php $is_gold = 'gold' === $promo['tone']; ?>
			<div class="relative flex min-h-[180px] items-center overflow-hidden rounded-[32px_20px_32px_20px] px-5 py-6 sm:min-h-[212px] sm:rounded-[52px_24px_52px_24px] sm:px-9 sm:py-8 <?php echo $is_gold ? 'bg-gold text-ink' : 'bg-pistachio text-cream'; ?>">
				<div class="pointer-events-none absolute -right-14 -top-20 h-52 w-52 rounded-full <?php echo $is_gold ? 'bg-white/45' : 'bg-cream/12'; ?>"></div>
				<?php ajil_sprig( 'pointer-events-none absolute -bottom-16 right-10 h-44 w-36 rotate-12 ' . ( $is_gold ? 'text-pistachio/20' : 'text-cream/25' ) ); ?>

				<div class="relative z-10 max-w-[64%] sm:max-w-[60%]">
					<span class="inline-block rounded-full px-2.5 py-0.5 text-[10px] font-semibold sm:text-[11px] <?php echo $is_gold ? 'bg-white/75 text-pistachio-deep' : 'bg-cream/20 text-cream'; ?>">
						<?php echo esc_html( $promo['eyebrow'] ); ?>
					</span>
					<h3 class="mt-2.5 text-[19px] font-extrabold leading-tight sm:text-[25px]"><?php echo esc_html( $promo['title'] ); ?></h3>
					<p class="mt-1.5 text-[11px] leading-6 sm:text-[12.5px] <?php echo $is_gold ? 'text-ink/65' : 'text-cream/80'; ?>">
						<?php echo esc_html( $promo['text'] ); ?>
					</p>
					<a href="<?php echo esc_url( $promo['url'] ); ?>" class="mt-4 inline-flex items-center gap-2 rounded-full px-4 py-2 text-[11px] font-semibold transition sm:text-[12px] <?php echo $is_gold ? 'bg-ink text-cream hover:bg-pistachio-deep' : 'bg-cream text-ink hover:bg-white'; ?>">
						<?php echo esc_html( $promo['cta'] ); ?>
						<?php ajil_icon( 'arrow', 'h-3.5 w-3.5' ); ?>
					</a>
				</div>

				<div class="pointer-events-none absolute -bottom-10 -left-10 aspect-square h-[124%] overflow-hidden rounded-full sm:-bottom-14 sm:-left-8 <?php echo $is_gold ? 'ring-8 ring-white/30' : 'ring-8 ring-cream/15'; ?>">
					<img src="<?php echo esc_url( ajil_img( $promo['image'] ) ); ?>" alt="<?php echo esc_attr( $promo['title'] ); ?>" loading="lazy" class="h-full w-full object-cover" />
				</div>
			</div>
		<?php endforeach; ?>
	</div>
</section>
