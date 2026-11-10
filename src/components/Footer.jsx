import { useState } from 'react'
import { Instagram, Telegram, Whatsapp, ArrowLeft } from './Icons'

const quickLinks = [
  { label: 'صفحه اصلی', href: '#top' },
  { label: 'فروشگاه', href: '#products' },
  { label: 'درباره ما', href: '#why-us' },
  { label: 'مقالات', href: '#footer' },
]

const shopLinks = ['آجیل خام', 'پسته و بادام', 'خشکبار', 'تخمه و مغزها']

export default function Footer() {
  const [email, setEmail] = useState('')
  const [subscribed, setSubscribed] = useState(false)

  return (
    <footer id="footer" className="mt-10 scroll-mt-24 rounded-t-[34px] bg-ink text-cream/70 sm:mt-14">
      <div className="container-x py-11 sm:py-14">
        <div className="grid gap-9 sm:grid-cols-2 lg:grid-cols-[1.5fr_1fr_1fr_1.4fr]">
          <div>
            <div className="flex items-center gap-2.5">
              <span className="grid h-9 w-9 place-items-center rounded-full bg-pistachio text-cream">
                <svg viewBox="0 0 40 40" className="h-9 w-9" aria-hidden="true" fill="none">
                  <g stroke="#213524" strokeWidth="1.6" strokeLinecap="round">
                    <path d="M20 28c-5 0-8.6-3.6-8.6-8.2 0-4.9 4-8.4 8.6-8.4s8.6 3.5 8.6 8.4C28.6 24.4 25 28 20 28Z" />
                    <path d="M20 11.4c-1.2-2-1-4.2.6-5.6 1.5 1.6 1.5 3.8-.6 5.6Z" />
                  </g>
                </svg>
              </span>
              <span className="text-[18px] font-extrabold text-cream">آجیل‌خور</span>
            </div>
            <p className="mt-4 max-w-xs text-[12px] leading-6 text-cream/60">
              آجیل و خشکبار تازه و دست‌چین ایرانی؛ از باغ‌های کشور مستقیم به سفره شما.
            </p>
            <div className="mt-5 flex items-center gap-2">
              {[
                { Icon: Instagram, label: 'اینستاگرام' },
                { Icon: Telegram, label: 'تلگرام' },
                { Icon: Whatsapp, label: 'واتساپ' },
              ].map(({ Icon, label }) => (
                <a
                  key={label}
                  href="#footer"
                  aria-label={label}
                  className="grid h-9 w-9 place-items-center rounded-full border border-cream/15 text-cream/75 transition hover:border-pistachio hover:bg-pistachio/15 hover:text-cream"
                >
                  <Icon />
                </a>
              ))}
            </div>
          </div>

          <div>
            <h3 className="text-[13px] font-bold text-cream">دسترسی سریع</h3>
            <ul className="mt-4 space-y-2.5">
              {quickLinks.map((link) => (
                <li key={link.label}>
                  <a
                    href={link.href}
                    className="text-[12px] text-cream/60 transition hover:text-cream"
                  >
                    {link.label}
                  </a>
                </li>
              ))}
            </ul>
          </div>

          <div>
            <h3 className="text-[13px] font-bold text-cream">دسته‌بندی‌ها</h3>
            <ul className="mt-4 space-y-2.5">
              {shopLinks.map((label) => (
                <li key={label}>
                  <a
                    href="#products"
                    className="text-[12px] text-cream/60 transition hover:text-cream"
                  >
                    {label}
                  </a>
                </li>
              ))}
            </ul>
          </div>

          <div>
            <h3 className="text-[13px] font-bold text-cream">از تخفیف‌ها باخبر شوید</h3>
            <p className="mt-3 text-[12px] leading-6 text-cream/60">
              ایمیل خود را وارد کنید تا پیشنهادهای تازه آجیل‌خور را دریافت کنید.
            </p>
            <form
              onSubmit={(event) => {
                event.preventDefault()
                if (!email.trim()) return
                setSubscribed(true)
                setEmail('')
              }}
              className="mt-4 flex items-center gap-2 rounded-full border border-cream/20 bg-cream/5 p-1.5 focus-within:border-pistachio/70"
            >
              <input
                type="email"
                required
                value={email}
                onChange={(event) => setEmail(event.target.value)}
                placeholder="ایمیل شما"
                aria-label="ایمیل"
                className="min-w-0 flex-1 bg-transparent px-3 text-[12px] text-cream outline-none placeholder:text-cream/40"
              />
              <button
                type="submit"
                aria-label="عضویت در خبرنامه"
                className="grid h-8 w-8 shrink-0 place-items-center rounded-full bg-pistachio text-cream transition hover:bg-pistachio-deep"
              >
                <ArrowLeft className="h-4 w-4" />
              </button>
            </form>
            <p className="mt-2 h-4 text-[11px] text-pistachio" aria-live="polite">
              {subscribed ? 'عضویت شما ثبت شد!' : ''}
            </p>
            <p className="mt-1 text-[11px] text-cream/50">۰۲۱-۱۲۳۴۵۶۷۸ · تهران، بازار آجیل</p>
          </div>
        </div>

        <div className="mt-9 flex flex-col items-center justify-between gap-2 border-t border-cream/10 pt-6 text-center text-[11px] text-cream/45 sm:flex-row sm:text-right">
          <p>© ۱۴۰۳ آجیل‌خور. تمامی حقوق محفوظ است.</p>
          <p>طراحی‌شده با عشق به آجیل ایرانی</p>
        </div>
      </div>
    </footer>
  )
}
