const defaultTheme = require('tailwindcss/defaultTheme');

module.exports = {
    theme: {
        filter: {
            // defaults to {}
            none: 'none',
            grayscale: 'grayscale(1)',
            invert: 'invert(1)',
            sepia: 'sepia(1)',
        },
        backdropFilter: {
            // defaults to {}
            none: 'none',
            blur: 'blur(20px)',
        },
    },
    variants: {
        filter: ['responsive'], // defaults to ['responsive']
        backdropFilter: ['responsive'], // defaults to ['responsive']
    },
    extend: {
        fontFamily: {
            sans: ['Inter Var', ...defaultTheme.fontFamily.sans],
        },
    },
    plugins: [
        require('@tailwindcss/ui')({
            layout: 'sidebar',
        }),
        require('tailwindcss-filters'),
        require('@tailwindcss/custom-forms'),
    ],
};
