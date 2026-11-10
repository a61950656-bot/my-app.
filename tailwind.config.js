/** @type {import('tailwindcss').Config} */
export default {
  content: ['./index.html', './src/**/*.{js,jsx}'],
  theme: {
    extend: {
      colors: {
        cream: '#FDFBF7',
        'cream-deep': '#F7F2E7',
        pistachio: '#508D69',
        'pistachio-deep': '#3E7355',
        'pistachio-soft': '#E8F0E6',
        gold: '#F9E8C9',
        'gold-deep': '#EFD9AE',
        ink: '#213524',
        'ink-soft': '#4C6353',
        line: '#EAE3D6',
      },
      fontFamily: {
        sans: ['Vazirmatn', 'Tahoma', 'system-ui', 'sans-serif'],
      },
      borderRadius: {
        '4xl': '2rem',
        '5xl': '2.75rem',
      },
      boxShadow: {
        card: '0 10px 30px -18px rgba(33, 53, 36, 0.35)',
        soft: '0 22px 55px -24px rgba(33, 53, 36, 0.4)',
        pill: '0 10px 24px -14px rgba(33, 53, 36, 0.55)',
      },
    },
  },
  plugins: [],
}
