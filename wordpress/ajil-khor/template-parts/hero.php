<?php
/**
 * Hero banner with the service strip.
 *
 * @package Ajil_Khor
 */

$ajil_features = ajil_features();
?>
<section id="top" class="container-x pt-4 sm:pt-7">
	<div class="relative overflow-hidden rounded-[28px] border border-line/80 bg-cream-deep sm:rounded-[42px]">
		<div class="pointer-events-none absolute -top-28 left-[-8%] h-72 w-72 rounded-full bg-gold/70 blur-3xl"></div>
		<?php ajil_sprig( 'pointer-events-none absolute -right-8 top-2 h-52 w-40 text-pistachio/15 sm:h-72 sm:w-56' ); ?>
		<?php ajil_sprig( 'pointer-events-none absolute -left-12 bottom-20 h-44 w-32 rotate-180 text-pistachio/10 sm:h-60 sm:w-44' ); ?>

		<div class="relative grid items-center gap-8 px-5 pb-8 pt-8 sm:px-9 sm:pb-11 sm:pt-11 lg:grid-cols-[1.04fr_0.96fr] lg:px-14 lg:py-14">
			<div class="text-center lg:text-right">
				<span class="inline-flex items-center gap-2 rounded-full border border-pistachio/20 bg-white/80 px-3 py-1.5 text-[11px] font-medium text-pistachio-deep sm:text-xs">
					<?php ajil_icon( 'leaf', 'h-3.5 w-3.5' ); ?>
					خشکبار دست‌چین ایرانی
				</span>

				<h1 class="mt-4 text-[33px] font-extrabold leading-[1.25] tracking-tight text-ink sm:text-[46px] lg:text-[58px] lg:leading-[1.15]">
					تازه و <span class="text-pistachio">با کیفیت</span>
				</h1>

				<p class="mx-auto mt-3 max-w-md text-[13px] leading-7 text-ink/65 sm:text-[15px] lg:mx-0">
					آجیل و خشکبار تازه، از باغ‌های ایران تا سفره شما؛ بدون واسطه و با کیفیت تضمین‌شده.
				</p>

				<div class="mt-4 flex items-center justify-center gap-2 text-[13px] font-medium text-pistachio-deep lg:justify-start">
					<?php ajil_icon( 'truck', 'h-4 w-4' ); ?>
					ارسال به تمام نقاط کشور
				</div>

				<div class="mt-6 flex flex-wrap items-center justify-center gap-3 lg:justify-start">
					<a href="#products" class="btn-primary">
						مشاهده محصولات
						<span class="grid h-9 w-9 place-items-center rounded-full bg-cream/15">
							<?php ajil_icon( 'arrow', 'h-4 w-4' ); ?>
						</span>
					</a>
					<a href="#why-us" class="rounded-full border border-ink/10 bg-white/70 px-5 py-3 text-[13px] font-semibold text-ink transition hover:border-pistachio/40 hover:text-pistachio-deep">
						چرا آجیل‌خور؟
					</a>
				</div>
			</div>

			<div class="flex justify-center lg:justify-end">
				<div class="relative w-full max-w-[286px] sm:max-w-[340px] lg:max-w-[404px]">
					<div class="absolute -inset-2 rounded-full border border-gold-deep/80"></div>
					<div class="relative aspect-square overflow-hidden rounded-full bg-ink shadow-soft ring-1 ring-ink/10">
						<img src="<?php echo esc_url( ajil_img( 'hero.jpg' ) ); ?>" alt="پسته و خشکبار تازه" class="h-full w-full object-cover" />
						<div class="absolute inset-0 bg-gradient-to-tr from-ink/55 via-ink/10 to-transparent"></div>
						<?php ajil_sprig( 'absolute -bottom-8 right-1 h-40 w-32 text-cream/25' ); ?>
						<span class="absolute right-4 top-4 rounded-full bg-cream/20 px-3 py-1 text-[10px] font-medium text-cream backdrop-blur-sm sm:text-[11px]">
							برداشت امروز
						</span>
					</div>

					<div class="absolute -bottom-3 right-0 flex items-center gap-2.5 rounded-2xl border border-line/80 bg-white px-3.5 py-2.5 shadow-card">
						<span class="grid h-8 w-8 place-items-center rounded-full bg-pistachio-soft text-pistachio-deep">
							<?php ajil_icon( 'leaf', 'h-4 w-4' ); ?>
						</span>
						<span class="leading-tight">
							<span class="block text-[11px] font-bold text-ink">تازگی تضمینی</span>
							<span class="block text-[10px] text-ink/55">۱۰۰٪ طبیعی و سالم</span>
						</span>
					</div>
				</div>
			</div>
		</div>

		<div class="relative border-t border-ink/10 bg-white/45">
			<div class="grid grid-cols-2 lg:grid-cols-4">
				<?php foreach ( $ajil_features as $feature ) : ?>
					<div class="flex items-center gap-3 px-4 py-4 sm:px-6 sm:py-5 lg:border-s lg:border-ink/10 lg:first:border-s-0">
						<span class="grid h-10 w-10 shrink-0 place-items-center rounded-full border border-ink/12 text-pistachio-deep sm:h-11 sm:w-11">
							<?php ajil_feature_icon( $feature['icon'], 'h-[18px] w-[18px] sm:h-5 sm:w-5' ); ?>
						</span>
						<span class="leading-tight">
							<span class="block text-[12px] font-bold text-ink sm:text-[13px]"><?php echo esc_html( $feature['title'] ); ?></span>
							<span class="mt-0.5 block text-[10px] text-ink/55 sm:text-[11px]"><?php echo esc_html( $feature['caption'] ); ?></span>
						</span>
					</div>
				<?php endforeach; ?>
			</div>
		</div>
	</div>
</section>
