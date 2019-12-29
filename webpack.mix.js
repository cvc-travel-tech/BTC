const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */


mix.styles(
    ["resources/css/font-awesome.min.css",
        "resources/css/materialize.css",
        "resources/css/bootstrap.css",
        "resources/css/animate.css",
        "resources/css/style.css",
        "resources/css/mob.css",
    ],
    "public/css/all.css"
);


mix.scripts(
    "resources/js/bootstrap.js"
    ,
    "public/js/bootstrap.js"
);
mix.scripts(
    "resources/js/jquery-latest.min.js"
    ,
    "public/js/jquery-latest.min.js"
);
mix.scripts(
    "resources/js/wow.min.js"
    ,
    "public/js/wow.min.js"
);
mix.scripts(
    "resources/js/materialize.min.js"
    ,
    "public/js/materialize.min.js"
);
mix.scripts(
    "resources/js/custom.js"
    ,
    "public/js/custom.js"
);

mix.scripts("resources/js/typed.js", "public/js/typed.js");
mix.scripts("resources/js/jquery-latest.min.js", "public/js/jquery-latest.min.js");
mix.scripts("resources/js/jquery-ui.js", "public/js/jquery-ui.js");
mix.scripts("resources/js/mail.js", "public/js/mail.js");
mix.scripts(
    "resources/admin/dist/js/adminlte.min.js;",
    "admin/dist/js/adminlte.min.js"
);
