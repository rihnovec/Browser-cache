import {defineConfig} from 'vite'

export default defineConfig({
  build: {
    outDir: './public_html/dist',
    manifest: true
  }
})