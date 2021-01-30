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
