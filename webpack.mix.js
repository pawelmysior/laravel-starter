const mix = require('laravel-mix');
require('laravel-mix-purgecss');

mix
  .js('resources/js/app.js', 'public/js')
  .postCss('resources/css/app.css', 'public/css', [
    require('postcss-import'),
    require('tailwindcss')('./resources/css/tailwind.config.js'),
  ])
  .purgeCss();

mix.browserSync({
  proxy: 'laravel-starter.test',
  notify: false,
});

if (mix.inProduction()) {
  mix.version();
}
