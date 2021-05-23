module.exports = {
    purge: [
        './resources/**/*.blade.php',
        './resources/**/*.js',
        './resources/**/*.vue',
    ],
    darkMode: false, // or 'media' or 'class'
    theme: {
        extend: {
            fontFamily: {
                poppins: ['Poppins', ],
                gilroy: ['Gilroy', ],
            },
        },
    },
    variants: {
        extend: {
            margin: ['last', ],
        },
        animation: ['responsive', 'motion-safe', 'motion-reduce']
    },
    plugins: [],
}
