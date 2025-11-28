/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "https://telegram.ddev.site/wp-content/themes/telegram-desktop/templates/native/advent-2025/template-parts/*.php",
  ],
  safelist: ["text-primary", "text-secondary"],
  theme: {
    screens: {
      md: "920px",
    },
    extend: {
      fontFamily: {
        montserrat: ["Montserrat", "sans-serif"],
        gilda: ["Gilda-Display", "sans-serif"],
        poppins: ["Poppins", "sans-serif"],
        christmas: ["Christmas", "sans-serif"],
        lato: ["Lato", "sans-serif"],
      },
    },
  },
  plugins: [],
};
