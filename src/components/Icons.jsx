const strokeProps = {
  fill: 'none',
  stroke: 'currentColor',
  strokeWidth: 1.6,
  strokeLinecap: 'round',
  strokeLinejoin: 'round',
}

export function ArrowLeft({ className = 'h-4 w-4' }) {
  return (
    <svg viewBox="0 0 24 24" className={className} aria-hidden="true" {...strokeProps}>
      <path d="M19 12H5" />
      <path d="m11 6-6 6 6 6" />
    </svg>
  )
}

export function Search({ className = 'h-4 w-4' }) {
  return (
    <svg viewBox="0 0 24 24" className={className} aria-hidden="true" {...strokeProps}>
      <circle cx="11" cy="11" r="7" />
      <path d="m20 20-3.5-3.5" />
    </svg>
  )
}

export function Cart({ className = 'h-5 w-5' }) {
  return (
    <svg viewBox="0 0 24 24" className={className} aria-hidden="true" {...strokeProps}>
      <path d="M4 5h2l2 11h10l2-8H7" />
      <circle cx="9.5" cy="19" r="1.4" />
      <circle cx="17.5" cy="19" r="1.4" />
    </svg>
  )
}

export function User({ className = 'h-5 w-5' }) {
  return (
    <svg viewBox="0 0 24 24" className={className} aria-hidden="true" {...strokeProps}>
      <circle cx="12" cy="8.5" r="3.5" />
      <path d="M5 20c1.2-3.6 3.7-5.2 7-5.2s5.8 1.6 7 5.2" />
    </svg>
  )
}

export function Plus({ className = 'h-4 w-4' }) {
  return (
    <svg viewBox="0 0 24 24" className={className} aria-hidden="true" {...strokeProps} strokeWidth={2}>
      <path d="M12 5v14M5 12h14" />
    </svg>
  )
}

export function ChevronDown({ className = 'h-4 w-4' }) {
  return (
    <svg viewBox="0 0 24 24" className={className} aria-hidden="true" {...strokeProps}>
      <path d="m6 9 6 6 6-6" />
    </svg>
  )
}

export function Close({ className = 'h-5 w-5' }) {
  return (
    <svg viewBox="0 0 24 24" className={className} aria-hidden="true" {...strokeProps}>
      <path d="M6 6l12 12M18 6 6 18" />
    </svg>
  )
}

export function Leaf({ className = 'h-4 w-4' }) {
  return (
    <svg viewBox="0 0 24 24" className={className} aria-hidden="true" {...strokeProps}>
      <path d="M20 4c-8 0-14 4-14 10a6 6 0 0 0 6 6c6 0 8-8 8-16Z" />
      <path d="M6 20c2-5 5-8 9-10" />
    </svg>
  )
}

const featureIcons = {
  shield: (
    <>
      <path d="M12 3.5 5.5 6v5.5c0 4 2.7 7.1 6.5 8.5 3.8-1.4 6.5-4.5 6.5-8.5V6L12 3.5Z" />
      <path d="m9 12 2.2 2.2L15.5 10" />
    </>
  ),
  lock: (
    <>
      <rect x="5" y="10.5" width="14" height="9.5" rx="2.4" />
      <path d="M8.5 10.5V8a3.5 3.5 0 0 1 7 0v2.5" />
      <path d="M12 14.5v2" />
    </>
  ),
  support: (
    <>
      <path d="M5 15v-2.5a7 7 0 0 1 14 0V15" />
      <rect x="3.5" y="14" width="3.5" height="5" rx="1.4" />
      <rect x="17" y="14" width="3.5" height="5" rx="1.4" />
      <path d="M19 19c0 1.4-1.6 2.5-4 2.5" />
    </>
  ),
  truck: (
    <>
      <path d="M3 7h10v9H3z" />
      <path d="M13 10h4l3 3v3h-7" />
      <circle cx="7" cy="18" r="1.6" />
      <circle cx="17" cy="18" r="1.6" />
    </>
  ),
}

export function FeatureIcon({ name, className = 'h-5 w-5' }) {
  return (
    <svg viewBox="0 0 24 24" className={className} aria-hidden="true" {...strokeProps}>
      {featureIcons[name]}
    </svg>
  )
}

export function Instagram({ className = 'h-4 w-4' }) {
  return (
    <svg viewBox="0 0 24 24" className={className} aria-hidden="true" {...strokeProps}>
      <rect x="4" y="4" width="16" height="16" rx="5" />
      <circle cx="12" cy="12" r="3.4" />
      <circle cx="16.8" cy="7.2" r="0.9" fill="currentColor" stroke="none" />
    </svg>
  )
}

export function Telegram({ className = 'h-4 w-4' }) {
  return (
    <svg viewBox="0 0 24 24" className={className} aria-hidden="true" {...strokeProps}>
      <path d="m20.5 4.5-17 6.8 5.2 1.6 1.7 5.6 2.6-3.4 3.6 2.6z" />
      <path d="m8.7 12.9 9-6.4-5.7 9.6" />
    </svg>
  )
}

export function Whatsapp({ className = 'h-4 w-4' }) {
  return (
    <svg viewBox="0 0 24 24" className={className} aria-hidden="true" {...strokeProps}>
      <path d="M20 11.7A8 8 0 0 1 8.4 19L4 20.2l1.3-4.2A8 8 0 1 1 20 11.7Z" />
      <path d="M9.3 8.6c.4-.1.7.1.9.5l.6 1.3c.1.3 0 .6-.2.8l-.5.5c.5 1 1.3 1.8 2.3 2.3l.5-.5c.2-.2.5-.3.8-.2l1.3.6c.4.2.6.5.5.9-.2.9-1 1.5-2 1.5-2.6 0-4.9-2.3-4.9-4.9 0-1 .6-1.8 1.5-2Z" />
    </svg>
  )
}
