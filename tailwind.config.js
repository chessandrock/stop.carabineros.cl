/** @type {import('tailwindcss').Config} */

const defaultTheme = require('tailwindcss/defaultTheme')

export default {
    content: ['./resources/views/*.blade.php', './resources/js/**/*.js', './resources/js/**/*.jsx'],
    theme: {
        extend: {
            colors: {
                carabineros: {
                    DEFAULT: '#1d7d4d'
                }
            },
            fontFamily: {
                sans: ['Roboto', ...defaultTheme.fontFamily.sans],
                slab: ['Roboto Slab', ...defaultTheme.fontFamily.sans],
                serif: ['Roboto Serif', ...defaultTheme.fontFamily.serif],
                mono: ['Roboto Mono', ...defaultTheme.fontFamily.mono]
            }
        }
    },
    plugins: []
}
