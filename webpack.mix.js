const mix = require('laravel-mix');

    mix.js('resources/js/app.js', 'public/js')
    mix.copy('resources/js/mobile-menu.js', 'public/js') 
    mix.copy('resources/js/admin.js', 'public/js')

         .sass('resources/sass/templates.scss', 'public/css')
           .sass('resources/sass/main.scss', 'public/css')
           .sass('resources/sass/site.scss', 'public/css')
           .copyDirectory('resources/imageSite', 'public/img')

           mix.options({
            processCssUrls: false
        });