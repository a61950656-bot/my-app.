# Ajil Khor — WordPress theme

قالب کلاسیک وردپرس برای فروشگاه آجیل و خشکبار «آجیل‌خور». همان طراحی صفحه اصلی
(کرم، سبز پسته، طلایی)، راست‌به‌چپ و واکنش‌گرا، بدون وابستگی به هیچ افزونه‌ای.

## نصب

1. پوشه `ajil-khor` را در `wp-content/themes/` کپی کنید (یا فایل zip را از
   پیشخوان › نمایش › پوسته‌ها › افزودن › بارگذاری پوسته نصب کنید).
2. از پیشخوان › نمایش › پوسته‌ها قالب «Ajil Khor» را فعال کنید.
3. در تنظیمات › خواندن، صفحه اصلی را روی «آخرین نوشته‌ها» بگذارید؛ صفحه اصلی
   قالب (`front-page.php`) به‌صورت خودکار نمایش داده می‌شود.
4. اختیاری: از نمایش › فهرست‌ها یک فهرست بسازید و به جایگاه «منوی اصلی» اختصاص
   دهید (بدون فهرست، منوی پیش‌فرض همین قالب نمایش داده می‌شود). لوگو را هم از
   نمایش › سفارشی‌سازی › هویت سایت بارگذاری کنید.

## ساختار

```
ajil-khor/
├── style.css              سرصفحه پوسته (استایل‌ها در assets/css/theme.css)
├── functions.php          راه‌اندازی، بارگذاری فایل‌ها، منو، ویجت
├── inc/data.php           داده‌های نمایشی (قابل تغییر با فیلترها)
├── inc/template-tags.php  آیکون‌ها و توابع کمکی قالب
├── header.php / footer.php
├── front-page.php         صفحه اصلی: هیرو، دسته‌بندی، محصولات، بنرها، چرا، مقالات
├── template-parts/        بخش‌های صفحه اصلی و کارت‌ها
├── index.php / single.php / page.php / 404.php / searchform.php
└── assets/                css، js، فونت وزیرمتن و تصاویر
```

## محصولات و دسته‌بندی‌ها

محصولات و دسته‌بندی‌های صفحه اصلی داده‌ی نمایشی‌اند و از `inc/data.php` می‌آیند.
هر فهرست با فیلتر قابل جایگزینی است:

```php
add_filter( 'ajil_products', function ( $items, $group ) {
    // برگرداندن محصولات واقعی (مثلاً از ووکامرس)
    return $items;
}, 10, 2 );
```

همین‌طور `ajil_categories`، `ajil_promos`، `ajil_features`، `ajil_why_points` و
`ajil_demo_articles`. مقالات با انتشار نوشته‌ها خودکار جای داده‌ی نمایشی را می‌گیرند.
برای اتصال کامل به ووکامرس کافی است همین فیلتر `ajil_products` را به
`wc_get_products()` وصل کنید و لینک هر محصول را در خروجی بگذارید.

## نوار کناری و فونت

- ناحیه ویجت «پاورقی» ثبت شده است.
- فونت وزیرمتن به‌صورت محلی در `assets/fonts` قرار دارد و با `assets/css/fonts.css`
  بارگذاری می‌شود؛ نیازی به اینترنت یا Google Fonts نیست.
- تصاویر در `assets/images` هستند (عکس‌های Unsplash، مجوز آزاد).

## بازسازی CSS

استایل‌ها با Tailwind از `../build/theme.input.css` ساخته می‌شوند:

```bash
npx tailwindcss -c wordpress/build/tailwind.theme.config.cjs \
  -i wordpress/build/theme.input.css \
  -o wordpress/ajil-khor/assets/css/theme.css --minify
```
