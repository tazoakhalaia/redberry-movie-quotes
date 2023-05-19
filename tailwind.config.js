/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        height: {
            allQuotesBox: '500px',
            picSize: '80%',
        },
        extend: {
            backgroundImage: {
                'gradient-radial': 'radial-gradient(ellipse at center, gray, rgb(61, 59, 59))',
              },
              backgroundColor: {
                'gray-dark': 'gray',
              },
        },
    },
    plugins: [],
}
