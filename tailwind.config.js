/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
        "./node_modules/flowbite/**/*.js",
    ],
    theme: {
        extend: {
            backgroundImage: {
                'bg-image': "url('/images/bg-image.jpg')", // Ensure the path is correct
                'June': "url('/images/June.png')", // Ensure the path is correct
            },
        },
    },
    plugins: [
        require('flowbite/plugin'),
    ],
};