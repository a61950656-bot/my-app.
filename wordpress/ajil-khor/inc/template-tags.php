<?php
/**
 * Template helpers.
 *
 * @package Ajil_Khor
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * URL of a bundled theme image.
 *
 * @param string $file File name inside assets/images.
 * @return string
 */
function ajil_img( $file ) {
	return get_template_directory_uri() . '/assets/images/' . $file;
}

/**
 * Decorative botanical sprig, echoing the mark used across the design.
 *
 * @param string $class Extra utility classes.
 */
function ajil_sprig( $class = '' ) {
	?>
	<svg viewBox="0 0 200 260" class="<?php echo esc_attr( $class ); ?>" aria-hidden="true" fill="none" stroke="currentColor" stroke-width="1.3" stroke-linecap="round" stroke-linejoin="round">
		<path d="M22 252c26-52 46-96 62-142C98 74 124 42 164 20" />
		<path d="M0 0c11-3 19-12 21-25-13 1-22 10-21 25Z" transform="translate(92 114) rotate(-18)" />
		<path d="M0 0c-11-3-19-12-21-25 13 1 22 10 21 25Z" transform="translate(88 100) rotate(14)" />
		<path d="M0 0c11-3 19-12 21-25-13 1-22 10-21 25Z" transform="translate(112 72) rotate(-28)" />
		<path d="M0 0c-11-3-19-12-21-25 13 1 22 10 21 25Z" transform="translate(106 58) rotate(22)" />
		<path d="M0 0c11-3 19-12 21-25-13 1-22 10-21 25Z" transform="translate(134 40) rotate(-38)" />
		<path d="M0 0c-11-3-19-12-21-25 13 1 22 10 21 25Z" transform="translate(128 26) rotate(30)" />
		<path d="M0 0c11-3 19-12 21-25-13 1-22 10-21 25Z" transform="translate(76 158) rotate(-10)" />
		<path d="M0 0c-11-3-19-12-21-25 13 1 22 10 21 25Z" transform="translate(70 146) rotate(18)" />
		<path d="M0 0c11-3 19-12 21-25-13 1-22 10-21 25Z" transform="translate(58 202) rotate(-4)" />
		<path d="M0 0c-11-3-19-12-21-25 13 1 22 10 21 25Z" transform="translate(52 190) rotate(24)" />
		<g stroke-width="1.1">
			<circle cx="118" cy="90" r="7" />
			<circle cx="136" cy="66" r="5" />
			<circle cx="146" cy="44" r="4" />
		</g>
	</svg>
	<?php
}

/**
 * Brand mark (pistachio inside a circle).
 *
 * @param string $class Extra utility classes.
 */
function ajil_brand_mark( $class = 'h-10 w-10' ) {
	?>
	<svg viewBox="0 0 40 40" class="<?php echo esc_attr( $class ); ?>" aria-hidden="true" fill="none">
		<circle cx="20" cy="20" r="20" fill="currentColor" />
		<g stroke="#FDFBF7" stroke-width="1.5" stroke-linecap="round">
			<path d="M20 28c-5 0-8.6-3.6-8.6-8.2 0-4.9 4-8.4 8.6-8.4s8.6 3.5 8.6 8.4C28.6 24.4 25 28 20 28Z" />
			<path d="M20 11.4c-1.2-2-1-4.2.6-5.6 1.5 1.6 1.5 3.8-.6 5.6Z" />
		</g>
	</svg>
	<?php
}

/**
 * Service icon used in the hero strip.
 *
 * @param string $name  Icon key.
 * @param string $class Extra utility classes.
 */
function ajil_feature_icon( $name, $class = 'h-5 w-5' ) {
	$icons = array(
		'shield'  => '<path d="M12 3.5 5.5 6v5.5c0 4 2.7 7.1 6.5 8.5 3.8-1.4 6.5-4.5 6.5-8.5V6L12 3.5Z"/><path d="m9 12 2.2 2.2L15.5 10"/>',
		'lock'    => '<rect x="5" y="10.5" width="14" height="9.5" rx="2.4"/><path d="M8.5 10.5V8a3.5 3.5 0 0 1 7 0v2.5"/><path d="M12 14.5v2"/>',
		'support' => '<path d="M5 15v-2.5a7 7 0 0 1 14 0V15"/><rect x="3.5" y="14" width="3.5" height="5" rx="1.4"/><rect x="17" y="14" width="3.5" height="5" rx="1.4"/><path d="M19 19c0 1.4-1.6 2.5-4 2.5"/>',
		'truck'   => '<path d="M3 7h10v9H3z"/><path d="M13 10h4l3 3v3h-7"/><circle cx="7" cy="18" r="1.6"/><circle cx="17" cy="18" r="1.6"/>',
	);

	$path = isset( $icons[ $name ] ) ? $icons[ $name ] : $icons['shield'];

	printf(
		'<svg viewBox="0 0 24 24" class="%s" aria-hidden="true" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round">%s</svg>',
		esc_attr( $class ),
		$path // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped -- Static inline SVG.
	);
}

/**
 * Simple inline icons (arrow, leaf, cart, search, plus, menu, close).
 *
 * @param string $name  Icon key.
 * @param string $class Extra utility classes.
 */
function ajil_icon( $name, $class = 'h-4 w-4' ) {
	$icons = array(
		'arrow'  => '<path d="M19 12H5"/><path d="m11 6-6 6 6 6"/>',
		'leaf'   => '<path d="M20 4c-8 0-14 4-14 10a6 6 0 0 0 6 6c6 0 8-8 8-16Z"/><path d="M6 20c2-5 5-8 9-10"/>',
		'cart'   => '<path d="M4 5h2l2 11h10l2-8H7"/><circle cx="9.5" cy="19" r="1.4"/><circle cx="17.5" cy="19" r="1.4"/>',
		'search' => '<circle cx="11" cy="11" r="7"/><path d="m20 20-3.5-3.5"/>',
		'user'   => '<circle cx="12" cy="8.5" r="3.5"/><path d="M5 20c1.2-3.6 3.7-5.2 7-5.2s5.8 1.6 7 5.2"/>',
		'plus'   => '<path d="M12 5v14M5 12h14"/>',
		'menu'   => '<path d="m6 9 6 6 6-6"/>',
		'close'  => '<path d="M6 6l12 12M18 6 6 18"/>',
	);

	$path = isset( $icons[ $name ] ) ? $icons[ $name ] : $icons['arrow'];

	printf(
		'<svg viewBox="0 0 24 24" class="%s" aria-hidden="true" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round">%s</svg>',
		esc_attr( $class ),
		$path // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped -- Static inline SVG.
	);
}

/**
 * Fallback menu that matches the theme's default navigation.
 */
function ajil_default_menu() {
	echo '<ul class="flex items-center gap-1">';
	foreach ( ajil_default_menu_items() as $item ) {
		printf(
			'<li><a class="nav-link" href="%s">%s</a></li>',
			esc_url( $item['url'] ),
			esc_html( $item['label'] )
		);
	}
	echo '</ul>';
}
