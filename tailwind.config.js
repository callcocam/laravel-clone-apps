const defaultTheme = require('tailwindcss/defaultTheme');

module.exports = {
    purge: ['./storage/framework/views/*.php', './resources/views/**/*.blade.php'],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Nunito', ...defaultTheme.fontFamily.sans],
            },
            colors: {
                tw:{

                    'blue': '#1DA1F2',
                    'dark-blue': '#2795D9',
                    'light-blue': '#EFF9FF',
                    'dark': '#657786',
                    'light': '#AAB8C2',
                    'lighter': '#E1E8ED',
                    'lightest': '#F5F8FA',

                },
                vuexy: {
                    '900': '#5345ed',
                    '800': '#695def',
                    '700': '#7367f0',
                    '600': '#7e74f1',
                    '500': '#948bf4',
                    '400': '#a9a2f6',
                    '300': '#bfb9f8',
                    '200': '#d4d1fa',
                    '100': '#eae8fd',
                }
            }
        },
    },

    variants: {
        extend: {
            opacity: ['disabled'],
        },
    },

    plugins: [require('@tailwindcss/forms')],
};
