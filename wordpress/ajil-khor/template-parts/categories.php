<?php
/**
 * Category tiles.
 *
 * @package Ajil_Khor
 */

$ajil_categories = ajil_categories();
?>
<section id="categories" class="section container-x scroll-mt-24">
	<div class="flex items-end justify-between gap-4">
		<div>
			<h2 class="section-title">دسته‌بندی</h2>
			<p class="mt-1.5 text-[12px] text-ink/55 sm:text-[13px]">دسته‌بندی‌های محبوب آجیل‌خور</p>
		</div>
		<a href="#products" class="pill-link bg-pistachio-soft text-pistachio-deep hover:bg-pistachio/15">
			مشاهده بیشتر
			<?php ajil_icon( 'arrow', 'h-3.5 w-3.5' ); ?>
		</a>
	</div>

	<div class="mt-5 grid grid-cols-2 gap-3 sm:gap-4 lg:grid-cols-4">
		<?php foreach ( $ajil_categories as $category ) : ?>
			<?php $is_green = 'pistachio' === $category['tone']; ?>
			<a href="<?php echo esc_url( $category['url'] ); ?>" class="group relative flex h-[164px] flex-col justify-between overflow-hidden rounded-[24px] p-4 transition duration-300 hover:-translate-y-1 hover:shadow-soft sm:h-[196px] sm:p-5 <?php echo $is_green ? 'bg-pistachio text-cream' : 'bg-gold text-ink'; ?>">
				<?php ajil_sprig( 'pointer-events-none absolute -bottom-12 -left-9 h-40 w-32 rotate-12 ' . ( $is_green ? 'text-cream/25' : 'text-pistachio/25' ) ); ?>

				<div class="relative flex items-start justify-between gap-2">
					<div>
						<h3 class="text-[14px] font-extrabold leading-tight sm:text-[17px]"><?php echo esc_html( $category['title'] ); ?></h3>
						<p class="mt-1 text-[10px] sm:text-[11px] <?php echo $is_green ? 'text-cream/75' : 'text-ink/60'; ?>"><?php echo esc_html( $category['count'] ); ?></p>
					</div>
					<span class="grid h-8 w-8 shrink-0 place-items-center rounded-full transition group-hover:-translate-x-0.5 <?php echo $is_green ? 'bg-cream/20 text-cream' : 'bg-white/80 text-pistachio-deep ring-1 ring-ink/5'; ?>">
						<?php ajil_icon( 'arrow', 'h-3.5 w-3.5' ); ?>
					</span>
				</div>

				<div class="relative flex items-end justify-between">
					<span class="h-14 w-14 overflow-hidden rounded-full ring-2 sm:h-16 sm:w-16 <?php echo $is_green ? 'ring-cream/35' : 'ring-white/80'; ?>">
						<img src="<?php echo esc_url( ajil_img( $category['image'] ) ); ?>" alt="<?php echo esc_attr( $category['title'] ); ?>" loading="lazy" class="h-full w-full object-cover transition duration-500 group-hover:scale-105" />
					</span>
					<span class="text-[10px] font-medium sm:text-[11px] <?php echo $is_green ? 'text-cream/80' : 'text-ink/55'; ?>">خرید کنید</span>
				</div>
			</a>
		<?php endforeach; ?>
	</div>
</section>
