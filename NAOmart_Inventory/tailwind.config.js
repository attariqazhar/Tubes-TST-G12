/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./app/Views/*.php",
    "./app/Views/**/*.php",
    "./app/Views/**/**/*.php",
    "./app/Views/**/**/**/*.php",
  ],
  theme: {
    extend: 
    {
      fontFamily: {
        dmsans: ['DM Sans'],
        josefin: ['Josefin Sans']
      }
    },
  },
  plugins: [],
}

