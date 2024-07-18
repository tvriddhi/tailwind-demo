/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./src/**/*.{js,jsx,ts,tsx}",
  ],
  theme: {
    extend: {
      screens: {
        sm: '576px',
        md: '768px',
        lg: '1200px',
        xl: '1440px',
        '2xl': '1600px',
      },
      colors: {
        blue: {
          950:'#18191F',
        },
        green: {
          600:'#4CAF4F',
          200:'#bbf7d0',
        },
        gray: {
          500: '#89939E',
          600: '#717171',
          950:"#4D4D4D",
        },
        slate: {
          50:"#F5F7FA",
          200: '#D9DBE1',
          900: '#263238'
        }
      },
      fontSize: {
        '6xl': ['4rem', '1.2'], // 64px
      },
      container: false,
      borderRadius: {
        'sm': '0.25rem',
      },
      maxWidth:{
        'screen-sm': '540px',
        'screen-md': '720px',
        'screen-lg': '992px',
        'screen-xl': '1152px',
        'screen-2xl': '1568px',
      },
      fontFamily: {
        'sans': ['"Inter"'],
      },
    },
  },
  plugins: [],
}

