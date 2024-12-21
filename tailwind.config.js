import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';
import typography from '@tailwindcss/typography';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './vendor/laravel/jetstream/**/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                'trajan': ['Trajan Pro', 'Times New Roman', 'serif'],
                'garamond': ['Cormorant Garamond', 'Georgia', 'serif'],
            },
            colors: {
                primary: '#15616D',
                accent: '#FF5C39',
                secondary: '#FFECD1',
                darkPrimary: '#0f4e59',
                danger: '#D55D5B',
            },
        },
    },

    plugins: [forms, typography],
};
