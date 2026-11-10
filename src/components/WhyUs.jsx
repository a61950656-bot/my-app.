import { whyImage, whyPoints } from '../data/site'
import { Leaf } from './Icons'
import { Sprig } from './Botanical'

export default function WhyUs() {
  return (
    <section id="why-us" className="section container-x scroll-mt-24">
      <div className="relative overflow-hidden rounded-[30px] bg-gold px-5 py-8 sm:rounded-[40px] sm:px-10 sm:py-12">
        <Sprig className="pointer-events-none absolute -right-8 -top-10 h-52 w-40 text-pistachio/20" />
        <Sprig className="pointer-events-none absolute -bottom-14 -left-8 h-56 w-40 rotate-180 text-pistachio/15" />

        <div className="relative grid items-center gap-8 lg:grid-cols-[1.1fr_0.9fr] lg:gap-12">
          <div>
            <span className="inline-flex items-center gap-2 rounded-full bg-white/70 px-3 py-1.5 text-[11px] font-medium text-pistachio-deep">
              <Leaf className="h-3.5 w-3.5" />
              اعتماد شما، افتخار ما
            </span>
            <h2 className="mt-4 text-[24px] font-extrabold tracking-tight text-ink sm:text-[30px]">
              چرا آجیل‌خور؟
            </h2>
            <p className="mt-2.5 max-w-lg text-[12.5px] leading-7 text-ink/65 sm:text-[13.5px]">
              ما آجیل و خشکبار را مستقیم از باغ‌داران تهیه می‌کنیم؛ تازه، سالم و با قیمتی منصفانه
              به دست شما می‌رسانیم.
            </p>

            <ul className="mt-6 grid gap-x-6 gap-y-3 sm:grid-cols-2">
              {whyPoints.map((point) => (
                <li key={point} className="flex items-start gap-2.5">
                  <span className="mt-0.5 grid h-6 w-6 shrink-0 place-items-center rounded-full bg-white/80 text-pistachio-deep">
                    <Leaf className="h-3.5 w-3.5" />
                  </span>
                  <span className="text-[12px] leading-6 text-ink/75 sm:text-[12.5px]">{point}</span>
                </li>
              ))}
            </ul>
          </div>

          <div className="relative mx-auto w-full max-w-[340px] lg:max-w-[360px]">
            <div className="absolute -inset-3 rounded-[34px] border border-pistachio/25" />
            <div className="relative aspect-[4/5] overflow-hidden rounded-[28px] shadow-soft">
              <img
                src={whyImage}
                alt="پسته تازه و باکیفیت آجیل‌خور"
                loading="lazy"
                className="h-full w-full object-cover"
              />
            </div>
            <div className="absolute -bottom-4 -left-2 rounded-2xl border border-line/70 bg-white px-4 py-2.5 text-center shadow-card sm:-left-4">
              <p className="text-[17px] font-extrabold leading-none text-pistachio-deep">۹۸٪</p>
              <p className="mt-1 text-[9px] text-ink/55 sm:text-[10px]">رضایت مشتریان</p>
            </div>
          </div>
        </div>
      </div>
    </section>
  )
}
