<?php
/**
 * Site footer.
 *
 * @package Ajil_Khor
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
</main>

<footer id="footer" class="mt-10 scroll-mt-24 rounded-t-[34px] bg-ink text-cream/70 sm:mt-14">
	<div class="container-x py-11 sm:py-14">
		<div class="grid gap-9 sm:grid-cols-2 lg:grid-cols-[1.5fr_1fr_1fr_1.4fr]">
			<div>
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="flex items-center gap-2.5">
					<?php ajil_brand_mark( 'h-9 w-9 text-pistachio' ); ?>
					<span class="text-[18px] font-extrabold text-cream"><?php bloginfo( 'name' ); ?></span>
				</a>
				<p class="mt-4 max-w-xs text-[12px] leading-6 text-cream/60">
					آجیل و خشکبار تازه و دست‌چین ایرانی؛ از باغ‌های کشور مستقیم به سفره شما.
				</p>
				<div class="mt-5 flex items-center gap-2">
					<?php
					$socials = array(
						'اینستاگرام' => '<rect x="4" y="4" width="16" height="16" rx="5"/><circle cx="12" cy="12" r="3.4"/><circle cx="16.8" cy="7.2" r="0.9" fill="currentColor" stroke="none"/>',
						'تلگرام'     => '<path d="m20.5 4.5-17 6.8 5.2 1.6 1.7 5.6 2.6-3.4 3.6 2.6z"/><path d="m8.7 12.9 9-6.4-5.7 9.6"/>',
						'واتساپ'     => '<path d="M20 11.7A8 8 0 0 1 8.4 19L4 20.2l1.3-4.2A8 8 0 1 1 20 11.7Z"/>',
					);
					foreach ( $socials as $label => $svg ) :
						?>
						<a href="#footer" aria-label="<?php echo esc_attr( $label ); ?>" class="grid h-9 w-9 place-items-center rounded-full border border-cream/15 text-cream/75 transition hover:border-pistachio hover:bg-pistachio/15 hover:text-cream">
							<svg viewBox="0 0 24 24" class="h-4 w-4" aria-hidden="true" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round">
								<?php echo $svg; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped -- Static inline SVG. ?>
							</svg>
						</a>
					<?php endforeach; ?>
				</div>
			</div>

			<div>
				<h3 class="text-[13px] font-bold text-cream">دسترسی سریع</h3>
				<?php
				if ( has_nav_menu( 'footer' ) ) {
					wp_nav_menu(
						array(
							'theme_location' => 'footer',
							'container'      => false,
							'depth'          => 1,
							'menu_class'     => 'mt-4 space-y-2.5',
						)
					);
				} else {
					?>
					<ul class="mt-4 space-y-2.5">
						<?php foreach ( ajil_default_menu_items() as $item ) : ?>
							<li>
								<a href="<?php echo esc_url( $item['url'] ); ?>" class="text-[12px] text-cream/60 transition hover:text-cream">
									<?php echo esc_html( $item['label'] ); ?>
								</a>
							</li>
						<?php endforeach; ?>
					</ul>
					<?php
				}
				?>
			</div>

			<div>
				<h3 class="text-[13px] font-bold text-cream">دسته‌بندی‌ها</h3>
				<ul class="mt-4 space-y-2.5">
					<?php foreach ( ajil_categories() as $category ) : ?>
						<li>
							<a href="<?php echo esc_url( $category['url'] ); ?>" class="text-[12px] text-cream/60 transition hover:text-cream">
								<?php echo esc_html( $category['title'] ); ?>
							</a>
						</li>
					<?php endforeach; ?>
				</ul>
			</div>

			<div>
				<h3 class="text-[13px] font-bold text-cream">از تخفیف‌ها باخبر شوید</h3>
				<p class="mt-3 text-[12px] leading-6 text-cream/60">
					ایمیل خود را وارد کنید تا پیشنهادهای تازه آجیل‌خور را دریافت کنید.
				</p>
				<form data-newsletter class="mt-4 flex items-center gap-2 rounded-full border border-cream/20 bg-cream/5 p-1.5 focus-within:border-pistachio/70">
					<input type="email" required placeholder="ایمیل شما" aria-label="ایمیل" class="min-w-0 flex-1 bg-transparent px-3 text-[12px] text-cream outline-none placeholder:text-cream/40" />
					<button type="submit" aria-label="عضویت در خبرنامه" class="grid h-8 w-8 shrink-0 place-items-center rounded-full bg-pistachio text-cream transition hover:bg-pistachio-deep">
						<?php ajil_icon( 'arrow', 'h-4 w-4' ); ?>
					</button>
				</form>
				<p data-newsletter-message class="mt-2 h-4 text-[11px] text-pistachio" aria-live="polite"></p>
				<p class="mt-1 text-[11px] text-cream/50">۰۲۱-۱۲۳۴۵۶۷۸ · تهران، بازار آجیل</p>
			</div>
		</div>

		<div class="mt-9 flex flex-col items-center justify-between gap-2 border-t border-cream/10 pt-6 text-center text-[11px] text-cream/45 sm:flex-row sm:text-right">
			<p>© <?php echo esc_html( date_i18n( 'Y' ) ); ?> <?php bloginfo( 'name' ); ?>. تمامی حقوق محفوظ است.</p>
			<p>طراحی‌شده با عشق به آجیل ایرانی</p>
		</div>
	</div>
</footer>

<?php wp_footer(); ?>
</body>
</html>
