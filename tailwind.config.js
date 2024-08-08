const defaultTheme = require('tailwindcss/defaultTheme')

module.exports = {
    darkMode: 'class',
    theme: {
        extend: {
            fontFamily: {
                sans: ['Inter var', ...defaultTheme.fontFamily.sans],
                cairo: ['Cairo', 'sans-serif'],
                roboto: ['Roboto', 'sans-serif']
            },
            colors: {
                'purple': '#622599',
                'purple-600': '#9333ea',
                'purple-100': '#f3e8ff',
                'black': '#060609',
                'orange': '#ffa500',
                'green': '#05b65d',
                'green-300': '#86efac',
                'green-800': '#2E7D32',
                'green-700': '#388E3C',
                'green-400': '#66BB6A',
                'green-50': '#E8F5E9',
                'dark-blue': '#033781',
                'instagram': '#E44E4E',
                'main-light': '#1c79cb',
                'main-dark': '#f472b6',
                'secondary-light': '#3d8cd1',
                'secondary-dark': '#dc79ae',
            },
            height: {
                '144': '144px',
                '100': '35rem'
            },
            maxWidth: {
                '8xl': '84rem'
            },
            animation: {
                border: 'background ease infinite',
            },
            keyframes: {
                background: {
                    '0%, 100%': {backgroundPosition: '0% 50%'},
                    '50%': {backgroundPosition: '100% 50%'},
                },
            },
        },

    },

    variants: {
        extend: {
            backgroundColor: ['active'],
        }
    },
    content: [
        './app/**/*.php',
        './resources/**/*.html',
        './resources/**/*.js',
        './resources/**/*.jsx',
        './resources/**/*.ts',
        './resources/**/*.tsx',
        './resources/**/*.php',
        './resources/**/*.vue',
        './resources/**/*.twig',
    ],
    plugins: [
        require('@tailwindcss/forms'),
        require('@tailwindcss/typography'),
    ],
}
