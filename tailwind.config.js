const colors = require('tailwindcss/colors')

module.exports = {
  mode: 'jit',
  purge: [],
  purge: [
    './resources/**/*.blade.php',
    './resources/**/*.js',
    './resources/**/*.vue',
  ],
  darkMode: false, // or 'media' or 'class'
  theme: {
    extend: {
      screens: {
        'pro': [
          {'min': '1024px', 'max': '1024px','orientation': 'portrait'},
        ],
      },
      colors: {
        sky: colors.sky,
      }
    },
  },
  variants: {
    extend: {},
  },
  plugins: [],
}
