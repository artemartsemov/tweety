module.exports = {
  purge: [
      './resources/**/*.blade.php',
      './resources/**/*.js',
      './resources/**/*.vue',
  ],
  rkMode: false, // or 'media' or 'class'
  theme: {
    extend: {
        colors: {
            blue: {
                light: '#1ec6e3',
                DEFAULT: '#1fb6ff',
                dark: '#009eeb',
            },
        }
    },
  },
  variants: {
    extend: {},
  },
  plugins: [],
}
