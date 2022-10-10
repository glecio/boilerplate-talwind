module.exports = {
  content: ["./**/*.php", "./src/**/*.js"],
  theme: {
    colors: {
      blue: '#1fb6ff',
      purple: '#7e5bef',
      pink: '#ff49db',
      'glecio-blue': '#1fb6ee'
    },
    fontFamily: {
      objectsans: ['Object Sans', 'sans-serif']
    },
    extend: {
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
