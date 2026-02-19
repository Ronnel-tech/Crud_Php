/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./**/*.php",
        "./*.php",
    "./*.html",
    "./src/**/*.{js,jsx,ts,tsx}",
  ],
  theme: {
    extend: {
      fontFamily: {
        'bitcount-grid-double': ['Bitcount Grid Double', 'sans-serif'],
      },
    },
  },
  plugins: [],
}
