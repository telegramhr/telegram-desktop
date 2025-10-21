import { defineConfig } from 'vite'
import tailwindcss from '@tailwindcss/vite'

export default defineConfig({
  base: '',
  plugins: [
    tailwindcss()
  ],
  build: {
    outDir: 'dist',
    rollupOptions: {
      input: {
        main: './src/main.js',
        style: './src/style.css'
      },
      output: {
        entryFileNames: '[name].js',
        chunkFileNames: '[name].js',
        assetFileNames: '[name].[ext]'
      }
    },
  }
})
