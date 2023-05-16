const defaultTheme = require('tailwindcss/defaultTheme');

/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        container: {
            center: true,
            padding: "85px",
        },
        extend: {
            colors: {
                hijau: {
                    100: "#7A9C46",
                    200: "#3C4D27",
                    300: "#1A2310",
                },
                kuning: "#FFAA04",
                hitam: {
                    100: "#A9A9A9",
                    200: "#424242",
                    300: "#121212",
                },
            },
            fontFamily: {
                playfair: ["Playfair Display", "serif"],
                work: ["Work Sans", "sans-serif"],
            },
        },
    },

    plugins: [require('@tailwindcss/forms')],
};
