<?php
/**
 * Not found.
 *
 * @package Ajil_Khor
 */

get_header();
?>
<section class="section container-x">
	<div class="mx-auto max-w-xl rounded-[28px] border border-line/80 bg-cream-deep px-6 py-12 text-center">
		<p class="text-[13px] font-semibold text-pistachio">خطای ۴۰۴</p>
		<h1 class="mt-3 text-[24px] font-extrabold text-ink sm:text-[30px]">صفحه مورد نظر پیدا نشد</h1>
		<p class="mt-2 text-[12.5px] leading-7 text-ink/60">
			ممکن است نشانی را اشتباه وارد کرده باشید یا این صفحه جابه‌جا شده باشد.
		</p>
		<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="btn-primary mt-6 justify-center">
			بازگشت به صفحه اصلی
			<span class="grid h-9 w-9 place-items-center rounded-full bg-cream/15">
				<?php ajil_icon( 'arrow', 'h-4 w-4' ); ?>
			</span>
		</a>
	</div>
</section>
<?php
get_footer();
