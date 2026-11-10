<?php
/**
 * "Why Ajil Khor" block.
 *
 * @package Ajil_Khor
 */

$ajil_points = ajil_why_points();
?>
<section id="why-us" class="section container-x scroll-mt-24">
	<div class="relative overflow-hidden rounded-[30px] bg-gold px-5 py-8 sm:rounded-[40px] sm:px-10 sm:py-12">
		<?php ajil_sprig( 'pointer-events-none absolute -right-8 -top-10 h-52 w-40 text-pistachio/20' ); ?>
		<?php ajil_sprig( 'pointer-events-none absolute -bottom-14 -left-8 h-56 w-40 rotate-180 text-pistachio/15' ); ?>

		<div class="relative grid items-center gap-8 lg:grid-cols-[1.1fr_0.9fr] lg:gap-12">
			<div>
				<span class="inline-flex items-center gap-2 rounded-full bg-white/70 px-3 py-1.5 text-[11px] font-medium text-pistachio-deep">
					<?php ajil_icon( 'leaf', 'h-3.5 w-3.5' ); ?>
					اعتماد شما، افتخار ما
				</span>
				<h2 class="mt-4 text-[24px] font-extrabold tracking-tight text-ink sm:text-[30px]">چرا آجیل‌خور؟</h2>
				<p class="mt-2.5 max-w-lg text-[12.5px] leading-7 text-ink/65 sm:text-[13.5px]">
					ما آجیل و خشکبار را مستقیم از باغ‌داران تهیه می‌کنیم؛ تازه، سالم و با قیمتی منصفانه به دست شما می‌رسانیم.
				</p>

				<ul class="mt-6 grid gap-x-6 gap-y-3 sm:grid-cols-2">
					<?php foreach ( $ajil_points as $point ) : ?>
						<li class="flex items-start gap-2.5">
							<span class="mt-0.5 grid h-6 w-6 shrink-0 place-items-center rounded-full bg-white/80 text-pistachio-deep">
								<?php ajil_icon( 'leaf', 'h-3.5 w-3.5' ); ?>
							</span>
							<span class="text-[12px] leading-6 text-ink/75 sm:text-[12.5px]"><?php echo esc_html( $point ); ?></span>
						</li>
					<?php endforeach; ?>
				</ul>
			</div>

			<div class="relative mx-auto w-full max-w-[340px] lg:max-w-[360px]">
				<div class="absolute -inset-3 rounded-[34px] border border-pistachio/25"></div>
				<div class="relative aspect-[4/5] overflow-hidden rounded-[28px] shadow-soft">
					<img src="<?php echo esc_url( ajil_img( 'why-us.jpg' ) ); ?>" alt="پسته تازه و باکیفیت آجیل‌خور" loading="lazy" class="h-full w-full object-cover" />
				</div>
				<div class="absolute -bottom-4 -left-2 rounded-2xl border border-line/70 bg-white px-4 py-2.5 text-center shadow-card sm:-left-4">
					<p class="text-[17px] font-extrabold leading-none text-pistachio-deep">۹۸٪</p>
					<p class="mt-1 text-[9px] text-ink/55 sm:text-[10px]">رضایت مشتریان</p>
				</div>
			</div>
		</div>
	</div>
</section>
