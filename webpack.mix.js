const mix = require('laravel-mix');
require('laravel-mix-purgecss');

mix
  .js('resources/js/app.js', 'public/js')
  .postCss('resources/css/app.css', 'public/css', [
    require('postcss-import'),
    require('tailwindcss')('./resources/css/tailwind.config.js'),
    require('postcss-nested'),
  ])
  .purgeCss({
    only: ['css/app.css'],
    whitelistPatternsChildren: [/content/],
  });

mix.browserSync({
  proxy: 'laravel-starter.test',
  notify: false,
});

if (mix.inProduction()) {
  mix.version();
}
