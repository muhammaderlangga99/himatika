const defaultTheme = require('tailwindcss/defaultTheme');

/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
        "./storage/framework/views/*.php",
        "./resources/views/**/*.blade.php",
        "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ["Nunito", ...defaultTheme.fontFamily.sans],
            },
            animation: {
                next: 'next 2s ease-in-out infinite',
            },
            keyframes: {
                next: {
                    '0%, 100%': { transform: 'translateX(0%)' },
                    '50%': { transform: 'translateX(15%)' },
                }
            }
        },
    },

    plugins: [require("@tailwindcss/forms")],
};
