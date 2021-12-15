const colors = require('tailwindcss/colors')
module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    container: {
        center: true,
      },
    extend: {
        colors: {
            sky: colors.sky,
            cyan: colors.cyan,
        },
    },
  },
  plugins: [require('@tailwindcss/forms')],
}
