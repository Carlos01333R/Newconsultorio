/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./index.html","./consultorio.php", "./src/**/*.js,"
  ],
  theme: {
    extend: {
      colors: {
        primary: "#ff9400",
        secondary: "#ff9400",
        curn:"ff9400",

      },
      fontFamily: {
        // Agrega fuentes personalizadas
        sans: ["Roboto", "Arial", "sans-serif"],
      },
    },
  },
  plugins: [],
}

