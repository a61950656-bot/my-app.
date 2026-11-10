import ProductCard from './ProductCard'
import { ArrowLeft } from './Icons'
import { Sprig } from './Botanical'

export default function ProductRail({ title, badgeLabel, items, onAdd, emptyText }) {
  return (
    <section className="container-x">
      <div className="relative mb-4 flex items-center justify-between gap-3 overflow-hidden rounded-[20px] bg-pistachio px-4 py-3 sm:px-5 sm:py-3.5">
        <Sprig className="pointer-events-none absolute -bottom-16 left-24 h-40 w-32 -rotate-12 text-cream/15" />
        <div className="relative flex items-center gap-2.5">
          <h2 className="text-[14px] font-extrabold text-cream sm:text-[17px]">{title}</h2>
          {badgeLabel && (
            <span className="rounded-full bg-cream/20 px-2 py-0.5 text-[10px] font-medium text-cream sm:text-[11px]">
              {badgeLabel}
            </span>
          )}
        </div>
        <a
          href="#products"
          className="relative inline-flex items-center gap-1.5 rounded-full bg-cream/15 px-3 py-1.5 text-[11px] font-medium text-cream transition hover:bg-cream/25 sm:px-4 sm:text-[12px]"
        >
          مشاهده همه
          <ArrowLeft className="h-3.5 w-3.5" />
        </a>
      </div>

      {items.length > 0 ? (
        <div className="grid grid-cols-2 gap-3 sm:grid-cols-3 sm:gap-4 lg:grid-cols-5">
          {items.map((product) => (
            <ProductCard key={product.id} product={product} onAdd={onAdd} />
          ))}
        </div>
      ) : (
        <p className="rounded-[20px] border border-dashed border-line bg-white/60 px-5 py-8 text-center text-[13px] text-ink/55">
          {emptyText}
        </p>
      )}
    </section>
  )
}
