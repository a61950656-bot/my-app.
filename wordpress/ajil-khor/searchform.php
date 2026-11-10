<?php
/**
 * Search form.
 *
 * @package Ajil_Khor
 */

$ajil_search_id = wp_unique_id( 'ajil-search-' );
?>
<form role="search" method="get" action="<?php echo esc_url( home_url( '/' ) ); ?>" class="flex items-center gap-2 rounded-full border border-line bg-white px-3.5 py-2 transition focus-within:border-pistachio/60">
	<span class="text-pistachio">
		<?php ajil_icon( 'search', 'h-4 w-4' ); ?>
	</span>
	<label class="screen-reader-text" for="<?php echo esc_attr( $ajil_search_id ); ?>">جستجوی محصول</label>
	<input
		id="<?php echo esc_attr( $ajil_search_id ); ?>"
		type="search"
		name="s"
		value="<?php echo esc_attr( get_search_query() ); ?>"
		placeholder="جستجوی محصول..."
		class="w-32 bg-transparent text-[13px] text-ink outline-none placeholder:text-ink/40 lg:w-40"
	/>
</form>
