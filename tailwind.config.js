const defaultTheme = require('tailwindcss/defaultTheme');


module.exports = {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            colors:{
                transparent  :'transparent',
                current : 'currentColor',
                'gray-background' : '#f7f8fc',
                'blue' : '#328af1',
                'red' : '#ec454f',
                'green' : '#1aab8b',
                'purple' : '#8b60ed',
            },
            spacing : {
                44 : '11rem',
                70:'17.5rem',
                175: '43.75rem',
            },
            boxShadow:{
                card :'4px 4px 15px 0 rgba(36,37,38,0,08)',
                dialog :'3px 4px 15px 0 rgba(36,37,38,0.22)',
            },
            maxWidth: {
                custom : '62.5rem',
            },
            fontFamily: {
                sans: ['Open Sans', ...defaultTheme.fontFamily.sans],
            },
        },
    },

    plugins: [
        require('@tailwindcss/forms'),
        require('@tailwindcss/line-clamp'),
    ],
};
