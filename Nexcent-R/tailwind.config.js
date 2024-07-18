/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      colors: {
        green: {
          700: '#4CAF4F',
        },
        slate: {
          50: '#F5F7FA',
          200: '#D9DBE1',
          900: '#263238'
        },
        gray: {
          500: '#89939E',
          600: '#717171',
          800: '#4D4D4D',
          900: "#18191F",
        }
      },
      screens: {
        sm: '576px',
        md: '768px',
        lg: '1200px',
        xl: '1440px',
        '2xl': '1600px',
      },
      container: false,
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

