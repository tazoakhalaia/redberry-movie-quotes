/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        height: {
            allQuotesBoxHeight: '533px',
            picSize: '80%',
            moviePicHeight: '386px',
            allMoviePicheight: '414px'
        },
        extend: {
            backgroundImage: {
                'gradient-radial': 'radial-gradient(ellipse at center, gray, rgb(61, 59, 59))',
              },
              backgroundColor: {
                'gray-dark': 'gray',
              },
              width: {
                moviePicWidth: '700px',
                allMoviePicWidth: '748px',
              },
        },
    },
    plugins: [],
}
