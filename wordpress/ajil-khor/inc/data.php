<?php
/**
 * Default storefront content.
 *
 * Every list is filterable, so a child theme or a plugin can replace the demo
 * products with data coming from WooCommerce or any other source.
 *
 * @package Ajil_Khor
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Small service features under the hero.
 *
 * @return array
 */
function ajil_features() {
	return apply_filters(
		'ajil_features',
		array(
			array(
				'icon'    => 'shield',
				'title'   => 'ضمانت کیفیت',
				'caption' => 'تضمین تازگی و اصالت',
			),
			array(
				'icon'    => 'lock',
				'title'   => 'پرداخت امن',
				'caption' => 'درگاه بانکی مطمئن',
			),
			array(
				'icon'    => 'support',
				'title'   => 'پشتیبانی ۲۴ ساعته',
				'caption' => 'همیشه پاسخگوی شما',
			),
			array(
				'icon'    => 'truck',
				'title'   => 'ارسال سریع',
				'caption' => 'ارسال به سراسر کشور',
			),
		)
	);
}

/**
 * Category tiles.
 *
 * @return array
 */
function ajil_categories() {
	return apply_filters(
		'ajil_categories',
		array(
			array(
				'title' => 'آجیل خام',
				'count' => '۳۲ محصول',
				'tone'  => 'pistachio',
				'image' => 'cat-raw.jpg',
				'url'   => '#products',
			),
			array(
				'title' => 'پسته و بادام',
				'count' => '۲۴ محصول',
				'tone'  => 'gold',
				'image' => 'cat-pistachio.jpg',
				'url'   => '#products',
			),
			array(
				'title' => 'خشکبار',
				'count' => '۲۸ محصول',
				'tone'  => 'pistachio',
				'image' => 'cat-dried.jpg',
				'url'   => '#products',
			),
			array(
				'title' => 'تخمه و مغزها',
				'count' => '۱۹ محصول',
				'tone'  => 'gold',
				'image' => 'cat-seeds.jpg',
				'url'   => '#products',
			),
		)
	);
}

/**
 * Demo products for the two rails.
 *
 * @param string $group Either "best" or "recommended".
 * @return array
 */
function ajil_products( $group = 'best' ) {
	$best = array(
		array(
			'name'  => 'پسته اکبری ممتاز',
			'price' => '۹۸۵,۰۰۰',
			'image' => 'pistachio.jpg',
			'badge' => 'تازه',
			'url'   => '#products',
		),
		array(
			'name'  => 'آجیل چهار مغز',
			'price' => '۹۲۰,۰۰۰',
			'image' => 'mixed.jpg',
			'badge' => 'پرفروش',
			'url'   => '#products',
		),
		array(
			'name'  => 'مغز گردو تازه',
			'price' => '۷۴۵,۰۰۰',
			'image' => 'walnut.jpg',
			'badge' => '',
			'url'   => '#products',
		),
		array(
			'name'  => 'خرمای مضافتی',
			'price' => '۲۴۵,۰۰۰',
			'image' => 'date.jpg',
			'badge' => 'تازه',
			'url'   => '#products',
		),
		array(
			'name'  => 'بادام درختی شور',
			'price' => '۶۸۰,۰۰۰',
			'image' => 'almond.jpg',
			'badge' => '',
			'url'   => '#products',
		),
	);

	$recommended = array(
		array(
			'name'  => 'انجیر خشک استهبان',
			'price' => '۵۶۰,۰۰۰',
			'image' => 'fig.jpg',
			'badge' => 'ویژه',
			'url'   => '#products',
		),
		array(
			'name'  => 'برگه زردآلو',
			'price' => '۴۳۰,۰۰۰',
			'image' => 'apricot.jpg',
			'badge' => '',
			'url'   => '#products',
		),
		array(
			'name'  => 'توت خشک طبیعی',
			'price' => '۳۸۰,۰۰۰',
			'image' => 'mulberry.jpg',
			'badge' => '',
			'url'   => '#products',
		),
		array(
			'name'  => 'تخمه کدو گوشتی',
			'price' => '۳۲۰,۰۰۰',
			'image' => 'cat-seeds.jpg',
			'badge' => '',
			'url'   => '#products',
		),
		array(
			'name'  => 'نخودچی و کشمش',
			'price' => '۲۹۵,۰۰۰',
			'image' => 'mix2.jpg',
			'badge' => '',
			'url'   => '#products',
		),
	);

	$items = 'recommended' === $group ? $recommended : $best;

	return apply_filters( 'ajil_products', $items, $group );
}

/**
 * Two promotional banners.
 *
 * @return array
 */
function ajil_promos() {
	return apply_filters(
		'ajil_promos',
		array(
			array(
				'eyebrow' => 'تازه از باغ',
				'title'   => 'جدیدترین محصولات',
				'text'    => 'برداشت این هفته؛ پسته، بادام و خشکبار تازه رسیده.',
				'cta'     => 'مشاهده محصولات',
				'tone'    => 'gold',
				'image'   => 'promo-fresh.jpg',
				'url'     => '#products',
			),
			array(
				'eyebrow' => 'تا ۲۵٪ تخفیف',
				'title'   => 'تخفیفات آجیل‌خور',
				'text'    => 'بسته‌های اقتصادی آجیل، مناسب مهمانی و شب یلدا.',
				'cta'     => 'مشاهده محصولات',
				'tone'    => 'pistachio',
				'image'   => 'promo-off.jpg',
				'url'     => '#products',
			),
		)
	);
}

/**
 * Bullet points of the "Why Ajil Khor" block.
 *
 * @return array
 */
function ajil_why_points() {
	return apply_filters(
		'ajil_why_points',
		array(
			'انتخاب دست‌چین از بهترین باغ‌های ایران',
			'تازگی و اصالت تضمین‌شده',
			'بسته‌بندی بهداشتی و مقاوم',
			'ارسال سریع به تمام نقاط کشور',
			'قیمت منصفانه و بدون واسطه',
			'پشتیبانی واقعی و پاسخگو',
		)
	);
}

/**
 * Demo articles used until the site has published posts.
 *
 * @return array
 */
function ajil_demo_articles() {
	return apply_filters(
		'ajil_demo_articles',
		array(
			array(
				'title'   => 'پسته تازه را چطور تشخیص دهیم؟',
				'excerpt' => 'چند نشانه ساده که به شما کمک می‌کند پسته تازه و باکیفیت را از پسته کهنه بشناسید.',
				'date'    => '۱۲ آبان ۱۴۰۳',
				'image'   => 'pistachio.jpg',
			),
			array(
				'title'   => 'خواص بی‌نظیر مغزها در رژیم روزانه',
				'excerpt' => 'یک مشت آجیل در روز چه تأثیری بر انرژی، تمرکز و سلامت قلب شما دارد.',
				'date'    => '۵ آبان ۱۴۰۳',
				'image'   => 'mixed.jpg',
			),
			array(
				'title'   => 'راهنمای نگهداری خشکبار در خانه',
				'excerpt' => 'شرایط مناسب نگهداری آجیل و خشکبار برای حفظ تازگی و طعم در طول فصل‌های سرد.',
				'date'    => '۲۸ مهر ۱۴۰۳',
				'image'   => 'date.jpg',
			),
		)
	);
}

/**
 * Fallback primary menu items.
 *
 * @return array
 */
function ajil_default_menu_items() {
	return apply_filters(
		'ajil_default_menu_items',
		array(
			array(
				'label' => 'صفحه اصلی',
				'url'   => home_url( '/' ),
			),
			array(
				'label' => 'فروشگاه',
				'url'   => '#products',
			),
			array(
				'label' => 'دسته‌بندی‌ها',
				'url'   => '#categories',
			),
			array(
				'label' => 'درباره ما',
				'url'   => '#why-us',
			),
			array(
				'label' => 'تماس با ما',
				'url'   => '#footer',
			),
		)
	);
}
