module.exports = {
    theme: {
        extend: {
            font-family: {
                sans: ['Inter', ...defaultTheme.fontFamily.sans],
            },
        },
    },
    plugins: [
        require('@tailwindcss/ui')({
            layout: 'sidebar',
        }),
    ],
};
