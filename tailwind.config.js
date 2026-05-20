import defaultTheme from 'tailwindcss/defaultTheme';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/**/*.blade.php',
        './resources/**/*.js',
        './resources/**/*.vue',
    ],
    theme: {
        extend: {
            colors: {
                cream: {
                    DEFAULT: '#FDFBF7',
                    50: '#FFFFFF',
                    100: '#FDFBF7',
                    200: '#F5EFE6',
                },
                peanut: {
                    DEFAULT: '#D2B48C',
                    100: '#F5EBE1',
                    200: '#EBD7C3',
                    500: '#D2B48C',
                    700: '#8C6842',
                    900: '#4A341E',
                },
                terracotta: {
                    DEFAULT: '#E2725B',
                    500: '#E2725B',
                    700: '#B8503A',
                },
                forest: {
                    DEFAULT: '#2E4F3B',
                    500: '#2E4F3B',
                    900: '#15291E',
                },
                sand: '#E6D3B3',
            },
            fontFamily: {
                sans: ['"DM Sans"', ...defaultTheme.fontFamily.sans],
                serif: ['"Merriweather"', ...defaultTheme.fontFamily.serif],
            },
            boxShadow: {
                'soft': '0 4px 20px -2px rgba(46, 79, 59, 0.05)',
            }
        },
    },
    plugins: [],
};
