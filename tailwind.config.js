const defaultTheme = require('tailwindcss/defaultTheme');

module.exports = {
    mode: 'jit',
    purge: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './vendor/laravel/jetstream/**/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {

        fontFamily:{
            'mont':['Montserrat']
        },




        extend: {

            gridTemplateColumns: {
                // Simple 16 column grid
               '16': 'repeat(16, minmax(0, 1fr))',

                // Complex site-specific column configuration
               'footer': '200px minmax(900px, 1fr) 100px',
              },

            fontFamily: {
                sans: ['Nunito', ...defaultTheme.fontFamily.sans],
            },
        },


    },

    plugins: [require('@tailwindcss/forms'), require('@tailwindcss/typography')],
};
