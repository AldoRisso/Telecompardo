const defaultTheme = require('tailwindcss/defaultTheme');

module.exports = {
    mode: 'jit',
    purge: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './vendor/laravel/jetstream/**/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {

        extend: {
            fontFamily: {
                sans: ['Nunito', ...defaultTheme.fontFamily.sans],
                allison: ["Allison"],
                anton: ["Anton"],
                staatliches: ["Staatliches"],
                'alfa-slab-one': ['"Alfa Slab One"'],
                'archivo-black': ['"Archivo Black"'],
                'passion-one': ['"Passion One"'],
                'dm-serif-display': ['"DM Serif Display"'],
                'Carter-one': ['"Carter One"'],
                'bungee': ['Bungee'],

            },
        },
    },

    plugins: [require('@tailwindcss/forms'), require('@tailwindcss/typography')],
};
