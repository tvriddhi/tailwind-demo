/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./src/**/*.{js,jsx,ts,tsx}",
  ],
  theme: {
    extend: {
      screens: {
        "2xl": '',
        xl: '1215px',
        lg: '992px',
        md: '768px',
        sm: '480px',
      },
      colors: {
        blue: {
          950:'#18191F',
        },
        green: {
          600:'#4CAF4F',
          200:'#bbf7d0',
        }
      },
      container: {
        center: true,
      },
    },
  },
  plugins: [],
}

