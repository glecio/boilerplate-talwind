module.exports = {
  content: ["./**/*.php", "./src/**/*.js"],
  theme: {
    fontFamily: {
      objectsans: ['Object Sans', 'sans-serif']
    },
    extend: {
      colors: {
        'glecio-blue': '#1fb6ee'
      },
      spacing: {
        '8xl': '96rem',
        '9xl': '128rem',
      },
      borderRadius: {
        '4xl': '2rem',
      }  
  }
},
  plugins: [require("@tailwindcss/typography")]
}
