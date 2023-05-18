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
        extend: {},
    },
    plugins: [],
}
