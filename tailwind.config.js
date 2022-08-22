const defaultTheme = require("tailwindcss/defaultTheme");

/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
        "./storage/framework/views/*.php",
        "./resources/views/**/*.blade.php",
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ["Montserrat", ...defaultTheme.fontFamily.sans],
            },
        },
        colors: {
            bg_login: "#A7C0CD80",
            primary: "#004BA0",
            white: "#fff",
            blue: {
                dark: "#4B636E",
                label: "#78909c",
                light: "#506874",
                title1: "#1976D2",
                desc: "#63A4FF",
            },
        },
    },

    plugins: [require("@tailwindcss/forms")],
};
