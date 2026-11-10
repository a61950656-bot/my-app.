import { Plus } from './Icons'

export default function ProductCard({ product, onAdd }) {
  return (
    <article className="group flex flex-col rounded-[22px] border border-line/80 bg-white p-3 shadow-card transition duration-300 hover:-translate-y-1 hover:shadow-soft">
      <div className="relative aspect-square overflow-hidden rounded-[16px] bg-cream-deep">
        <img
          src={product.image}
          alt={product.name}
          loading="lazy"
          className="h-full w-full object-cover transition duration-500 group-hover:scale-[1.04]"
        />
        {product.badge && (
          <span className="absolute right-2 top-2 rounded-full bg-white/90 px-2 py-0.5 text-[9px] font-semibold text-pistachio-deep shadow-sm backdrop-blur-sm sm:text-[10px]">
            {product.badge}
          </span>
        )}
        <button
          type="button"
          onClick={() => onAdd(product)}
          aria-label={`افزودن ${product.name} به سبد خرید`}
          className="absolute bottom-2 left-2 grid h-8 w-8 place-items-center rounded-full bg-ink text-cream shadow-pill transition hover:bg-pistachio-deep focus:outline-none focus-visible:ring-2 focus-visible:ring-pistachio/60"
        >
          <Plus className="h-[14px] w-[14px]" />
        </button>
      </div>

      <h3 className="mt-3 truncate text-center text-[12px] font-semibold text-ink sm:text-[13px]">
        {product.name}
      </h3>
      <p className="mt-1 text-center text-[12px] font-bold text-pistachio-deep sm:text-[13px]">
        {product.price}
        <span className="ms-1 text-[10px] font-medium text-ink/45">تومان</span>
      </p>
    </article>
  )
}
