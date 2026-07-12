/** @type {import('tailwindcss').Config} */
export default {
  darkMode: 'class',
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      colors: {
        peanut: {
          DEFAULT: '#4A3525', // Deep Rich Organic Brown
          light: '#6E523D',
          dark: '#332317',
        },
        cream: {
          DEFAULT: '#FDFBF7', // Premium Soft Off-White Background
          dark: '#F4ECE1',   // Shading and Border Cream
        },
        golden: '#C5A059',   // Earthy Gold Accent for Highlights
      },
      fontFamily: {
        sans: ['"Outfit"', 'sans-serif'],
        nepali: ['"Noto Sans Devanagari"', 'sans-serif'],
      },
    },
  },
  plugins: [],
}