/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        fontFamily: {
            merriweather: ["Merriweather", "serif"],
            inter: ["Inter", "sans-serif"],
            primary: ["Open Sans", "sans-serif"],
        },
        extend: {
            colors: {
                'primary':'#0872BF',
                'background':'#141A1A',
            },
        },
    },
    plugins: [],
};
