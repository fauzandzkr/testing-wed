module.exports = {
    plugins: {
      tailwindcss: {},         // Mengaktifkan Tailwind CSS
      autoprefixer: {},        // Mengaktifkan Autoprefixer untuk vendor prefix CSS
      cssnano: process.env.NODE_ENV === 'production' ? { preset: 'default' } : false  // Minify CSS saat produksi
    }
  }
  