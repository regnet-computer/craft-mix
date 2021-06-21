let mix = require('laravel-mix')

mix.setPublicPath('web')
mix.js('src/js/app.js', 'dist/js')
mix.postCss('src/pcss/app.pcss', 'dist/css/app.css', [
  require('postcss-import'),
  require('tailwindcss'),
  require('autoprefixer'),
])
mix.extract()
mix.version()
mix.browserSync({
  files: ['src//', 'templates/**/*.twig', 'tailwind.config.js'],
  proxy: process.env.PRIMARY_SITE_URL,
})
mix.disableSuccessNotifications()
