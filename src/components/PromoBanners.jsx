import { promos } from '../data/site'
import { ArrowLeft } from './Icons'
import { Sprig } from './Botanical'

export default function PromoBanners() {
  return (
    <section className="container-x mt-9 sm:mt-12">
      <div className="grid gap-4 lg:grid-cols-2 lg:gap-5">
        {promos.map((promo) => {
          const isGold = promo.tone === 'gold'
          return (
            <div
              key={promo.title}
              className={`relative flex min-h-[180px] items-center overflow-hidden rounded-[32px_20px_32px_20px] px-5 py-6 sm:min-h-[212px] sm:rounded-[52px_24px_52px_24px] sm:px-9 sm:py-8 ${
                isGold ? 'bg-gold text-ink' : 'bg-pistachio text-cream'
              }`}
            >
              <div
                className={`pointer-events-none absolute -right-14 -top-20 h-52 w-52 rounded-full ${
                  isGold ? 'bg-white/45' : 'bg-cream/12'
                }`}
              />
              <Sprig
                className={`pointer-events-none absolute -bottom-16 right-10 h-44 w-36 rotate-12 ${
                  isGold ? 'text-pistachio/20' : 'text-cream/25'
                }`}
              />

              <div className="relative z-10 max-w-[64%] sm:max-w-[60%]">
                <span
                  className={`inline-block rounded-full px-2.5 py-0.5 text-[10px] font-semibold sm:text-[11px] ${
                    isGold ? 'bg-white/75 text-pistachio-deep' : 'bg-cream/20 text-cream'
                  }`}
                >
                  {promo.eyebrow}
                </span>
                <h3 className="mt-2.5 text-[19px] font-extrabold leading-tight sm:text-[25px]">
                  {promo.title}
                </h3>
                <p
                  className={`mt-1.5 text-[11px] leading-6 sm:text-[12.5px] ${
                    isGold ? 'text-ink/65' : 'text-cream/80'
                  }`}
                >
                  {promo.text}
                </p>
                <a
                  href="#products"
                  className={`mt-4 inline-flex items-center gap-2 rounded-full px-4 py-2 text-[11px] font-semibold transition sm:text-[12px] ${
                    isGold
                      ? 'bg-ink text-cream hover:bg-pistachio-deep'
                      : 'bg-cream text-ink hover:bg-white'
                  }`}
                >
                  {promo.cta}
                  <ArrowLeft className="h-3.5 w-3.5" />
                </a>
              </div>

              <div
                className={`pointer-events-none absolute -bottom-10 -left-10 aspect-square h-[124%] overflow-hidden rounded-full sm:-bottom-14 sm:-left-8 ${
                  isGold ? 'ring-8 ring-white/30' : 'ring-8 ring-cream/15'
                }`}
              >
                <img
                  src={promo.image}
                  alt={promo.title}
                  loading="lazy"
                  className="h-full w-full object-cover"
                />
              </div>
            </div>
          )
        })}
      </div>
    </section>
  )
}
