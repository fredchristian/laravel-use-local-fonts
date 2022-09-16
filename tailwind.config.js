/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],

  theme: {
    extend: {
      fontFamily: {
        "dm-serif": ['"DM Serif Display"', "serif"],
      },
    },
  },

  plugins: [],
};
