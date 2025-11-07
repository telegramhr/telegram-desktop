/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./src/**/*.{js,ts,jsx,tsx}",
    "./**/*.php",
    "./template-parts/*.php", 
    "./parts/**/*.php",
    "./inc/**/*.php"
  ],
  safelist:[
    'text-primary',
    'text-secondary'
  ],
  theme: {
    extend: {
      fontFamily: {
        montserrat: ['Montserrat', 'sans-serif'],
        gilda: ['Gilda-Display', 'sans-serif'], 
        poppins: ['Poppins', 'sans-serif'],
        christmas: ['Christmas', 'sans-serif'],
        lato:['Lato','sans-serif'],
      }
    },
  },
  plugins: [],
}