import { features, heroImage } from '../data/site'
import { ArrowLeft, FeatureIcon, Leaf } from './Icons'
import { Sprig } from './Botanical'

export default function Hero() {
  return (
    <section id="top" className="container-x pt-4 sm:pt-7">
      <div className="relative overflow-hidden rounded-[28px] border border-line/80 bg-cream-deep sm:rounded-[42px]">
        <div className="pointer-events-none absolute -top-28 left-[-8%] h-72 w-72 rounded-full bg-gold/70 blur-3xl" />
        <Sprig className="pointer-events-none absolute -right-8 top-2 h-52 w-40 text-pistachio/15 sm:h-72 sm:w-56" />
        <Sprig className="pointer-events-none absolute -left-12 bottom-20 h-44 w-32 rotate-180 text-pistachio/10 sm:h-60 sm:w-44" />

        <div className="relative grid items-center gap-8 px-5 pb-8 pt-8 sm:px-9 sm:pb-11 sm:pt-11 lg:grid-cols-[1.04fr_0.96fr] lg:px-14 lg:py-14">
          <div className="text-center lg:text-right">
            <span className="inline-flex items-center gap-2 rounded-full border border-pistachio/20 bg-white/80 px-3 py-1.5 text-[11px] font-medium text-pistachio-deep sm:text-xs">
              <Leaf className="h-3.5 w-3.5" />
              خشکبار دست‌چین ایرانی
            </span>

            <h1 className="mt-4 text-[33px] font-extrabold leading-[1.25] tracking-tight text-ink sm:text-[46px] lg:text-[58px] lg:leading-[1.15]">
              تازه و <span className="text-pistachio">با کیفیت</span>
            </h1>

            <p className="mx-auto mt-3 max-w-md text-[13px] leading-7 text-ink/65 sm:text-[15px] lg:mx-0">
              آجیل و خشکبار تازه، از باغ‌های ایران تا سفره شما؛ بدون واسطه و با کیفیت تضمین‌شده.
            </p>

            <div className="mt-4 flex items-center justify-center gap-2 text-[13px] font-medium text-pistachio-deep lg:justify-start">
              <FeatureIcon name="truck" className="h-4 w-4" />
              ارسال به تمام نقاط کشور
            </div>

            <div className="mt-6 flex flex-wrap items-center justify-center gap-3 lg:justify-start">
              <a href="#products" className="btn-primary">
                مشاهده محصولات
                <span className="grid h-9 w-9 place-items-center rounded-full bg-cream/15">
                  <ArrowLeft className="h-4 w-4" />
                </span>
              </a>
              <a
                href="#why-us"
                className="rounded-full border border-ink/10 bg-white/70 px-5 py-3 text-[13px] font-semibold text-ink transition hover:border-pistachio/40 hover:text-pistachio-deep"
              >
                چرا آجیل‌خور؟
              </a>
            </div>
          </div>

          <div className="flex justify-center lg:justify-end">
            <div className="relative w-full max-w-[286px] sm:max-w-[340px] lg:max-w-[404px]">
              <div className="absolute -inset-2 rounded-full border border-gold-deep/80" />
              <div className="relative aspect-square overflow-hidden rounded-full bg-ink ring-1 ring-ink/10 shadow-soft">
                <img
                  src={heroImage}
                  alt="پسته و خشکبار تازه"
                  loading="eager"
                  className="h-full w-full object-cover"
                />
                <div className="absolute inset-0 bg-gradient-to-tr from-ink/55 via-ink/10 to-transparent" />
                <Sprig className="absolute -bottom-8 right-1 h-40 w-32 text-cream/25" />
                <span className="absolute right-4 top-4 rounded-full bg-cream/20 px-3 py-1 text-[10px] font-medium text-cream backdrop-blur-sm sm:text-[11px]">
                  برداشت امروز
                </span>
              </div>

              <div className="absolute -bottom-3 right-0 flex items-center gap-2.5 rounded-2xl border border-line/80 bg-white px-3.5 py-2.5 shadow-card">
                <span className="grid h-8 w-8 place-items-center rounded-full bg-pistachio-soft text-pistachio-deep">
                  <Leaf className="h-4 w-4" />
                </span>
                <span className="leading-tight">
                  <span className="block text-[11px] font-bold text-ink">تازگی تضمینی</span>
                  <span className="block text-[10px] text-ink/55">۱۰۰٪ طبیعی و سالم</span>
                </span>
              </div>
            </div>
          </div>
        </div>

        <div className="relative border-t border-ink/10 bg-white/45">
          <div className="grid grid-cols-2 lg:grid-cols-4">
            {features.map((feature) => (
              <div
                key={feature.title}
                className="flex items-center gap-3 px-4 py-4 sm:px-6 sm:py-5 lg:border-s lg:border-ink/10 lg:first:border-s-0"
              >
                <span className="grid h-10 w-10 shrink-0 place-items-center rounded-full border border-ink/12 text-pistachio-deep sm:h-11 sm:w-11">
                  <FeatureIcon name={feature.icon} className="h-[18px] w-[18px] sm:h-5 sm:w-5" />
                </span>
                <span className="leading-tight">
                  <span className="block text-[12px] font-bold text-ink sm:text-[13px]">
                    {feature.title}
                  </span>
                  <span className="mt-0.5 block text-[10px] text-ink/55 sm:text-[11px]">
                    {feature.caption}
                  </span>
                </span>
              </div>
            ))}
          </div>
        </div>
      </div>
    </section>
  )
}
