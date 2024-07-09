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
      },
      screens: {
        sm: '600px',
        md: '728px',
        lg: '984px',
        // xl: {'min': '1240px', 'max': '1100px'},
        xl: '1240px',
        '2xl': '1496px',
      },
      container: {
        center: true,
      },
      fontFamily: {
        'sans': ['"Inter"'],
      },
    },
  },
  plugins: [],
}

