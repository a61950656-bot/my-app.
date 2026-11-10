<?php
/**
 * Site header.
 *
 * @package Ajil_Khor
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?><!doctype html>
<html <?php language_attributes(); ?> dir="rtl">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<meta name="theme-color" content="#FDFBF7" />
	<?php wp_head(); ?>
</head>
<body <?php body_class( 'bg-cream' ); ?>>
<?php wp_body_open(); ?>
<a class="skip-link screen-reader-text" href="#content">پرش به محتوا</a>

<header class="sticky top-0 z-50 border-b border-line/70 bg-cream/85 backdrop-blur-md">
	<div class="container-x flex h-[74px] items-center justify-between gap-3">
		<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="flex shrink-0 items-center gap-2.5">
			<?php if ( has_custom_logo() ) : ?>
				<?php the_custom_logo(); ?>
			<?php else : ?>
				<?php ajil_brand_mark( 'h-10 w-10 text-pistachio' ); ?>
			<?php endif; ?>
			<span class="leading-tight">
				<span class="block text-[19px] font-extrabold tracking-tight text-ink"><?php bloginfo( 'name' ); ?></span>
				<span class="block text-[8px] font-semibold tracking-[0.32em] text-pistachio">AJIL KHOR</span>
			</span>
		</a>

		<nav class="site-nav hidden items-center gap-1 lg:block" aria-label="منوی اصلی">
			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'primary',
					'container'      => false,
					'depth'          => 1,
					'fallback_cb'    => 'ajil_default_menu',
				)
			);
			?>
		</nav>

		<div class="flex items-center gap-2">
			<div class="hidden md:block">
				<?php get_search_form(); ?>
			</div>

			<button type="button" data-cart-button aria-label="سبد خرید" class="relative grid h-10 w-10 place-items-center rounded-full border border-line bg-white text-ink transition hover:border-pistachio/50 hover:text-pistachio-deep">
				<?php ajil_icon( 'cart', 'h-5 w-5' ); ?>
				<span data-cart-count class="absolute -left-1 -top-1 hidden h-[18px] min-w-[18px] place-items-center rounded-full bg-pistachio px-1 text-[10px] font-bold leading-none text-cream">۰</span>
			</button>

			<button type="button" aria-label="حساب کاربری" class="hidden h-10 w-10 place-items-center rounded-full border border-line bg-white text-ink transition hover:border-pistachio/50 hover:text-pistachio-deep sm:grid">
				<?php ajil_icon( 'user', 'h-5 w-5' ); ?>
			</button>

			<button type="button" data-menu-toggle aria-expanded="false" aria-controls="mobile-nav" aria-label="منو" class="grid h-10 w-10 place-items-center rounded-full border border-line bg-white text-ink lg:hidden">
				<span data-menu-icon="open"><?php ajil_icon( 'menu', 'h-5 w-5' ); ?></span>
				<span data-menu-icon="close" class="hidden"><?php ajil_icon( 'close', 'h-5 w-5' ); ?></span>
			</button>
		</div>
	</div>

	<div id="mobile-nav" data-menu-panel class="hidden border-t border-line/70 bg-cream lg:hidden">
		<nav class="container-x grid gap-1 py-3" aria-label="منوی موبایل">
			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'primary',
					'container'      => false,
					'depth'          => 1,
					'menu_class'     => 'grid gap-1',
					'fallback_cb'    => 'ajil_default_menu',
				)
			);
			?>
		</nav>
	</div>
</header>

<main id="content" class="pb-2">
