/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./**/*.{html,js,css,php}", // Include files in your project
    "!./node_modules/**/*.js"  // Exclude JS files in node_modules
  ],
  theme: {
    extend: {
      colors: {
        customGold: '#AE7F41',
        customBrown: '#957C13', 
        customBrownLight: '#FAEAC6', 
        custom7A4200: '#7A4200',
        customF4DDC0:'#F4DDC0',
        customFBD120:'#FBD120',
        custom4C3D3D:'#4C3D3D'
      },
      animation: {
        'slide-up': 'slideInUp 3s ease-out',
        'slide-up-4s': 'slideInUp4s 4s ease-out',
        'slide-up-5s': 'slideInUp5s 5s ease-out',
        'slide-in-right': 'slideInRight 3s ease-out',
        'slide-out-down': 'slideOutDown 3s ease-out'
      },
      keyframes: {
        slideInUp4s: {
          '0%': { transform: 'translateY(100%)', opacity: '1' },
          '100%': { transform: 'translateY(0)', opacity: '1' },
        },
        slideInUp5s: {
          '0%': { transform: 'translateY(100%)', opacity: '0' },
          '100%': { transform: 'translateY(0)', opacity: '1' },
        },
        slideInUp: {
          '0%': { transform: 'translateY(100%)', opacity: '0' },
          '100%': { transform: 'translateY(0)', opacity: '1' },
        },
        slideInRight: {
          '0%': { transform: 'translateX(100%)', opacity: '0' },
          '100%': { transform: 'translateX(0)', opacity: '1' },
        },
        slideOutDown: {
          '0%' :{transform: 'translateY(0)', opacity: '1'},
          '100%': {transform: 'translateY(100%)', opacity: '0'}
        }
      },
      backgroundImage: {
        homeBg: "url('./src/assets/home-bg.svg')",
        groomBg: "url('./src/assets/bng-groom.svg')",
        akadBg: "url('./src/assets/akad-bg.svg')"
      },
    },
  },
  plugins: [],
}