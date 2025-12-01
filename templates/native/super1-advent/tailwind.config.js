/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./src/**/*.{js,ts,jsx,tsx}",
    "./**/*.php",
    "./*.php",

    "./template-parts/*.php",
    "./parts/**/*.php",
    "./inc/**/*.php",
  ],
  safelist: ["text-primary", "text-secondary"],
  theme: {},
  plugins: [],
};
