const defaultTheme = require('tailwindcss/defaultTheme');

/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Montserrat', ...defaultTheme.fontFamily.sans],
            },
        },
        colors:{
          bg_login: '#A7C0CD80',
          primary: '#004BA0',
          white:'#fff',
          blue1: {
            "50": "#aac2ce",
            "100": "#a0b8c4",
            "200": "#96aeba",
            "300": "#8ca4b0",
            "400": "#829aa6",
            "500": "#78909c",
            "600": "#6e8692",
            "700": "#647c88",
            "800": "#5a727e",
            "900": "#506874"
          }
        }
    },

    plugins: [require('@tailwindcss/forms')],
};
