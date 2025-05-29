module.exports = {
  content: [
    "./src/**/*.{js,html,php}"  // adjust based on your project structure
  ],
  theme: {
    extend: {
      colors: {
        primary: '#EC008C',     // Example blue
        secondary: '#0033A0',   // Example amber
        customgray: '#6B7280'   // Example gray
      },
      fontFamily: {
        ancizar: ['"Ancizar Sans"', 'sans-serif'],
        merienda: ['"Merienda"', 'cursive'],
        roboto: ['"Roboto"', 'sans-serif'],
        nova: ['"Nova Square"', 'sans-serif'],
      },
    },
  },
  plugins: [],
}