import { useEffect, useState } from 'react'
import Header from './components/Header'
import Hero from './components/Hero'
import Categories from './components/Categories'
import ProductRail from './components/ProductRail'
import PromoBanners from './components/PromoBanners'
import WhyUs from './components/WhyUs'
import Articles from './components/Articles'
import Footer from './components/Footer'
import { bestSellers, recommended } from './data/site'
import { Leaf } from './components/Icons'

export default function App() {
  const [cartCount, setCartCount] = useState(0)
  const [query, setQuery] = useState('')
  const [toast, setToast] = useState('')

  useEffect(() => {
    if (!toast) return undefined
    const timer = setTimeout(() => setToast(''), 2400)
    return () => clearTimeout(timer)
  }, [toast])

  const addToCart = (product) => {
    setCartCount((count) => count + 1)
    setToast(product.name)
  }

  const term = query.trim()
  const filterItems = (items) => (term ? items.filter((item) => item.name.includes(term)) : items)

  return (
    <div className="min-h-screen bg-cream">
      <Header cartCount={cartCount} query={query} onQueryChange={setQuery} />

      <main className="pb-2">
        <Hero />
        <Categories />

        <div id="products" className="grid scroll-mt-24 gap-9 pt-9 sm:gap-12 sm:pt-12">
          <ProductRail
            title="پرفروش‌ترین‌ها"
            badgeLabel="۵ محصول برتر"
            items={filterItems(bestSellers)}
            onAdd={addToCart}
            emptyText="محصولی با این نام در پرفروش‌ترین‌ها پیدا نشد."
          />
          <ProductRail
            title="پیشنهاد آجیل‌خور"
            badgeLabel="تازه رسیده"
            items={filterItems(recommended)}
            onAdd={addToCart}
            emptyText="محصولی با این نام در پیشنهادهای ما پیدا نشد."
          />
        </div>

        <PromoBanners />
        <WhyUs />
        <Articles />
      </main>

      <Footer />

      {toast && (
        <div className="pointer-events-none fixed inset-x-0 bottom-6 z-50 flex justify-center px-4">
          <div
            aria-live="polite"
            className="flex items-center gap-2 rounded-full bg-ink px-4 py-2.5 text-[12px] font-medium text-cream shadow-soft"
          >
            <Leaf className="h-4 w-4 text-pistachio" />
            «{toast}» به سبد خرید اضافه شد
          </div>
        </div>
      )}
    </div>
  )
}
