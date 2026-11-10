import { defineConfig } from 'vite'
import react from '@vitejs/plugin-react'

// The sandbox preview reaches the dev server through a rotating host name.
// Only widen the host allowlist while running in preview mode.
const allowedHosts = []
if (process.env.BASE44_PREVIEW_MODE === '1' && process.env.BASE44_SANDBOX_HOST_DOMAIN) {
  allowedHosts.push(`.${process.env.BASE44_SANDBOX_HOST_DOMAIN}`)
}

export default defineConfig({
  plugins: [react()],
  server: {
    host: true,
    port: 3000,
    strictPort: true,
    allowedHosts,
    watch: { usePolling: true, interval: 300 },
  },
})
