import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['poppins', 'sans-serif'],
            },
            colors: {
                nav: '#FFFFFF',
                nav2: '#003366',
                btp: '#800000',
                bts: '#FFD700',
                abu: '#F5F5F5',
                text: '#333333',
                textnav: '#2ECA8B',
                footer: '#202942',
                bgp: '#F8F9Fa'
              },
        },
    },

    plugins: [forms],
};
