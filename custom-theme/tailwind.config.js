/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./*.php",
    "./page-templates/**/*.php",
    "./assets/js/**/*.js",
  ],
  theme: {
    extend: {
      fontFamily: {
        // Redéfinir la famille sans-serif pour utiliser Mulish par défaut
        sans: ['Mulish', 'sans-serif'],
        // Vous pouvez conserver 'mulish' si vous souhaitez l'utiliser spécifiquement ailleurs
        mulish: ['Mulish', 'sans-serif'],
    },
  },
  plugins: [],
}
}