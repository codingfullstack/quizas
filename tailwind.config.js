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
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
            backgroundImage: {
                'bg-header': "url('/public/images/bg.jpg')",
                'bg-quiz': "url('/public/images/quiz.jpg')",
                'bg-rate': "url('/public/images/rate.jpg')",
                'bg-blog': "url('/public/images/blog.png')",
                'bg-poll': "url('/public/images/poll.jpg')",
            },
        },
    },

    plugins: [require('@tailwindcss/forms')],
};
