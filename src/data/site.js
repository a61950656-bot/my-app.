const img = (id, size = 800) =>
  `https://images.unsplash.com/${id}?auto=format&fit=crop&w=${size}&q=80`

export const navLinks = [
  { label: 'صفحه اصلی', href: '#top' },
  { label: 'فروشگاه', href: '#products' },
  { label: 'دسته‌بندی‌ها', href: '#categories' },
  { label: 'درباره ما', href: '#why-us' },
  { label: 'تماس با ما', href: '#footer' },
]

export const heroImage = img('photo-1502825751399-28baa9b81efe', 900)

export const features = [
  {
    title: 'ضمانت کیفیت',
    caption: 'تضمین تازگی و اصالت',
    icon: 'shield',
  },
  {
    title: 'پرداخت امن',
    caption: 'درگاه بانکی مطمئن',
    icon: 'lock',
  },
  {
    title: 'پشتیبانی ۲۴ ساعته',
    caption: 'همیشه پاسخگوی شما',
    icon: 'support',
  },
  {
    title: 'ارسال سریع',
    caption: 'ارسال به سراسر کشور',
    icon: 'truck',
  },
]

export const categories = [
  {
    title: 'آجیل خام',
    count: '۳۲ محصول',
    tone: 'pistachio',
    image: img('photo-1704079662049-d00890d21a69', 300),
  },
  {
    title: 'پسته و بادام',
    count: '۲۴ محصول',
    tone: 'gold',
    image: img('photo-1551238875-13b9d38454db', 300),
  },
  {
    title: 'خشکبار',
    count: '۲۸ محصول',
    tone: 'pistachio',
    image: img('photo-1710228010206-934856204165', 300),
  },
  {
    title: 'تخمه و مغزها',
    count: '۱۹ محصول',
    tone: 'gold',
    image: img('photo-1716910463184-cee6e0da3ea0', 300),
  },
]

const products = [
  {
    id: 'p1',
    name: 'پسته اکبری ممتاز',
    price: '۹۸۵,۰۰۰',
    image: img('photo-1610137512859-aa919f651a05', 600),
    badge: 'تازه',
  },
  {
    id: 'p2',
    name: 'آجیل چهار مغز',
    price: '۹۲۰,۰۰۰',
    image: img('photo-1543158181-1274e5362710', 600),
    badge: 'پرفروش',
  },
  {
    id: 'p3',
    name: 'مغز گردو تازه',
    price: '۷۴۵,۰۰۰',
    image: img('photo-1621926037410-5c727521e695', 600),
  },
  {
    id: 'p4',
    name: 'خرمای مضافتی',
    price: '۲۴۵,۰۰۰',
    image: img('photo-1774857247287-d68599847107', 600),
    badge: 'تازه',
  },
  {
    id: 'p5',
    name: 'بادام درختی شور',
    price: '۶۸۰,۰۰۰',
    image: img('photo-1605024344839-e6e41aea6b23', 600),
  },
  {
    id: 'p6',
    name: 'انجیر خشک استهبان',
    price: '۵۶۰,۰۰۰',
    image: img('photo-1641291361624-38b69b86b1cf', 600),
    badge: 'ویژه',
  },
  {
    id: 'p7',
    name: 'برگه زردآلو',
    price: '۴۳۰,۰۰۰',
    image: img('photo-1710857397974-f0617001c39e', 600),
  },
  {
    id: 'p8',
    name: 'توت خشک طبیعی',
    price: '۳۸۰,۰۰۰',
    image: img('photo-1674066253665-4d2553a3bcb8', 600),
  },
  {
    id: 'p9',
    name: 'تخمه کدو گوشتی',
    price: '۳۲۰,۰۰۰',
    image: img('photo-1716910463184-cee6e0da3ea0', 600),
  },
  {
    id: 'p10',
    name: 'نخودچی و کشمش',
    price: '۲۹۵,۰۰۰',
    image: img('photo-1702506183897-e4869f155209', 600),
  },
]

export const bestSellers = products.slice(0, 5)
export const recommended = products.slice(5)

export const promos = [
  {
    eyebrow: 'تازه از باغ',
    title: 'جدیدترین محصولات',
    text: 'برداشت این هفته؛ پسته، بادام و خشکبار تازه رسیده.',
    cta: 'مشاهده محصولات',
    tone: 'gold',
    image: img('photo-1598110996285-54523b72be93', 500),
  },
  {
    eyebrow: 'تا ۲۵٪ تخفیف',
    title: 'تخفیفات آجیل‌خور',
    text: 'بسته‌های اقتصادی آجیل، مناسب مهمانی و شب یلدا.',
    cta: 'مشاهده محصولات',
    tone: 'pistachio',
    image: img('photo-1579282769505-39e687bd68c9', 500),
  },
]

export const whyPoints = [
  'انتخاب دست‌چین از بهترین باغ‌های ایران',
  'تازگی و اصالت تضمین‌شده',
  'بسته‌بندی بهداشتی و مقاوم',
  'ارسال سریع به تمام نقاط کشور',
  'قیمت منصفانه و بدون واسطه',
  'پشتیبانی واقعی و پاسخگو',
]

export const whyImage = img('photo-1502825751399-28baa9b81efe', 900)

export const articles = [
  {
    title: 'پسته تازه را چطور تشخیص دهیم؟',
    excerpt: 'چند نشانه ساده که به شما کمک می‌کند پسته تازه و باکیفیت را از پسته کهنه بشناسید.',
    date: '۱۲ آبان ۱۴۰۳',
    image: img('photo-1610137512859-aa919f651a05', 600),
  },
  {
    title: 'خواص بی‌نظیر مغزها در رژیم روزانه',
    excerpt: 'یک مشت آجیل در روز چه تأثیری بر انرژی، تمرکز و سلامت قلب شما دارد.',
    date: '۵ آبان ۱۴۰۳',
    image: img('photo-1543158181-1274e5362710', 600),
  },
  {
    title: 'راهنمای نگهداری خشکبار در خانه',
    excerpt: 'شرایط مناسب نگهداری آجیل و خشکبار برای حفظ تازگی و طعم در طول فصل‌های سرد.',
    date: '۲۸ مهر ۱۴۰۳',
    image: img('photo-1710228010206-934856204165', 600),
  },
]
