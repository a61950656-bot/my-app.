import { useState } from 'react'
import { navLinks } from '../data/site'
import { toFa } from '../lib/fa'
import { Cart, ChevronDown, Close, Search, User } from './Icons'

function BrandMark({ className = 'h-10 w-10' }) {
  return (
    <svg viewBox="0 0 40 40" className={className} aria-hidden="true" fill="none">
      <circle cx="20" cy="20" r="20" fill="currentColor" />
      <g stroke="#FDFBF7" strokeWidth="1.5" strokeLinecap="round">
        <path d="M20 28c-5 0-8.6-3.6-8.6-8.2 0-4.9 4-8.4 8.6-8.4s8.6 3.5 8.6 8.4C28.6 24.4 25 28 20 28Z" />
        <path d="M20 11.4c-1.2-2-1-4.2.6-5.6 1.5 1.6 1.5 3.8-.6 5.6Z" />
        <path d="M20 15v9" strokeWidth="1.2" opacity="0.7" />
      </g>
    </svg>
  )
}

export default function Header({ cartCount, query, onQueryChange }) {
  const [menuOpen, setMenuOpen] = useState(false)

  return (
    <header className="sticky top-0 z-50 border-b border-line/70 bg-cream/85 backdrop-blur-md">
      <div className="container-x flex h-[74px] items-center justify-between gap-3">
        <a href="#top" className="flex shrink-0 items-center gap-2.5">
          <BrandMark className="h-10 w-10 text-pistachio" />
          <span className="leading-tight">
            <span className="block text-[19px] font-extrabold tracking-tight text-ink">آجیل‌خور</span>
            <span className="block text-[8px] font-semibold tracking-[0.32em] text-pistachio">
              AJIL KHOR
            </span>
          </span>
        </a>

        <nav className="hidden items-center gap-1 lg:flex">
          {navLinks.map((link, index) => (
            <a
              key={link.href}
              href={link.href}
              className={
                index === 0
                  ? 'rounded-full bg-pistachio-soft px-3.5 py-2 text-[13px] font-semibold text-pistachio-deep'
                  : 'rounded-full px-3.5 py-2 text-[13px] font-medium text-ink/70 transition hover:bg-pistachio-soft/60 hover:text-pistachio-deep'
              }
            >
              {link.label}
            </a>
          ))}
        </nav>

        <div className="flex items-center gap-2">
          <label className="hidden items-center gap-2 rounded-full border border-line bg-white px-3.5 py-2 transition focus-within:border-pistachio/60 md:flex">
            <Search className="h-4 w-4 shrink-0 text-pistachio" />
            <input
              type="search"
              value={query}
              onChange={(event) => onQueryChange(event.target.value)}
              placeholder="جستجوی محصول..."
              aria-label="جستجوی محصول"
              className="w-32 bg-transparent text-[13px] text-ink outline-none placeholder:text-ink/40 lg:w-40"
            />
          </label>

          <button
            type="button"
            aria-label={`سبد خرید، ${toFa(cartCount)} کالا`}
            className="relative grid h-10 w-10 place-items-center rounded-full border border-line bg-white text-ink transition hover:border-pistachio/50 hover:text-pistachio-deep"
          >
            <Cart />
            {cartCount > 0 && (
              <span className="absolute -left-1 -top-1 grid h-[18px] min-w-[18px] place-items-center rounded-full bg-pistachio px-1 text-[10px] font-bold leading-none text-cream">
                {toFa(cartCount)}
              </span>
            )}
          </button>

          <button
            type="button"
            aria-label="حساب کاربری"
            className="hidden h-10 w-10 place-items-center rounded-full border border-line bg-white text-ink transition hover:border-pistachio/50 hover:text-pistachio-deep sm:grid"
          >
            <User />
          </button>

          <button
            type="button"
            onClick={() => setMenuOpen((open) => !open)}
            aria-label="منو"
            aria-expanded={menuOpen}
            className="grid h-10 w-10 place-items-center rounded-full border border-line bg-white text-ink lg:hidden"
          >
            {menuOpen ? <Close /> : <ChevronDown />}
          </button>
        </div>
      </div>

      {menuOpen && (
        <div className="border-t border-line/70 bg-cream lg:hidden">
          <nav className="container-x grid gap-1 py-3">
            {navLinks.map((link) => (
              <a
                key={link.href}
                href={link.href}
                onClick={() => setMenuOpen(false)}
                className="rounded-xl px-3 py-2.5 text-sm font-medium text-ink/80 transition hover:bg-pistachio-soft/70 hover:text-pistachio-deep"
              >
                {link.label}
              </a>
            ))}
          </nav>
        </div>
      )}
    </header>
  )
}
