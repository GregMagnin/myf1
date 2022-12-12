import { defineConfig } from "vite"
export default defineConfig({
    build: {
      // generate manifest.json in outDir
      manifest: true,
      rollupOptions: {
        // overwrite default .html entry
        input: './resources/scripts/main.js'
      }
    }
  })