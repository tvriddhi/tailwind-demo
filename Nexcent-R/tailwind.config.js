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
        },
        gray: {
          600: '#717171',
          800: '#4D4D4D',
        }
      },
      screens: {
        xl: '1440px',
      },
      container: {
        center: true,
      },
      maxWidth:{
        'screen-xl': '1152px',
      },
      fontFamily: {
        'sans': ['"Inter"'],
      },
    },
  },
  plugins: [],
}

