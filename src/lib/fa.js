const faDigits = ['۰', '۱', '۲', '۳', '۴', '۵', '۶', '۷', '۸', '۹']

export function toFa(value) {
  return String(value).replace(/\d/g, (d) => faDigits[Number(d)])
}
