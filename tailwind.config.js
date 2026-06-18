import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],
    theme: {
        extend: {
            fontFamily: {
                sans: ['Inter', ...defaultTheme.fontFamily.sans],
                serif: ['Playfair Display', ...defaultTheme.fontFamily.serif],
            },
            colors: {
                peanut: {
                    DEFAULT: '#5A3E2B',
                    light: '#7A5C47',
                },
                forest: {
                    DEFAULT: '#355E3B',
                    light: '#4A7A52',
                },
                golden: '#D6A15D',
                cream: {
                    DEFAULT: '#FAF7F0',
                    dark: '#F3EDE0',
                }
            },
        },
    },
    plugins: [forms],
};