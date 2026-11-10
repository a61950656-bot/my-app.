import { articles } from '../data/site'
import { ArrowLeft } from './Icons'

export default function Articles() {
  return (
    <section className="section container-x">
      <div className="flex items-center gap-4">
        <span className="h-px flex-1 bg-line" />
        <h2 className="text-[20px] font-extrabold tracking-tight text-ink sm:text-[25px]">
          جدیدترین مقالات
        </h2>
        <span className="h-px flex-1 bg-line" />
      </div>

      <div className="mt-6 grid gap-4 sm:grid-cols-2 lg:grid-cols-3">
        {articles.map((article) => (
          <article
            key={article.title}
            className="group flex flex-col overflow-hidden rounded-[24px] border border-line/80 bg-white shadow-card transition duration-300 hover:-translate-y-1 hover:shadow-soft"
          >
            <div className="aspect-[16/10] overflow-hidden bg-cream-deep">
              <img
                src={article.image}
                alt={article.title}
                loading="lazy"
                className="h-full w-full object-cover transition duration-500 group-hover:scale-[1.04]"
              />
            </div>
            <div className="flex flex-1 flex-col p-4 sm:p-5">
              <span className="text-[10px] font-medium text-pistachio">{article.date}</span>
              <h3 className="mt-1.5 text-[13.5px] font-bold leading-6 text-ink sm:text-[15px]">
                {article.title}
              </h3>
              <p className="mt-1.5 line-clamp-2 text-[11.5px] leading-6 text-ink/60 sm:text-[12.5px]">
                {article.excerpt}
              </p>
              <span className="mt-4 inline-flex items-center gap-1.5 text-[11.5px] font-semibold text-pistachio-deep transition group-hover:gap-2.5">
                ادامه مطلب
                <ArrowLeft className="h-3.5 w-3.5" />
              </span>
            </div>
          </article>
        ))}
      </div>
    </section>
  )
}
