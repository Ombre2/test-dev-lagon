const path = require('path');
const generatePalette = require(path.resolve(__dirname, ('dev/tailwind/utils/generate-palette')));

const customPalettes = {
        primary: generatePalette('#355689'),
        accent: generatePalette('#c02b6b'),
};

module.exports = {
        content: [
                "./resources/**/*.blade.php",
                "./resources/**/*.js",
                "./resources/**/*.vue",
        ],
        theme: {
                extend: {
                        colors: {
                                primary: customPalettes.primary,
                                accent: customPalettes.accent,
                                'custom-green': '#08BF26',
                        },

                        fontFamily: {
                                'sans': ['Nunito'],
                                'display': ['Nunito'],
                                'mono': ['Nunito'],
                                'body': ['Nunito'],
                                'title': ['Lato']
                        },
                        fontSize: {
                                'text-8': '0.5rem',    // 8px
                                'text-10': '0.625rem',  // 10px
                                'text-11': '0.6875rem', // 11px
                                'text-12': '0.75rem',   // 12px
                                'text-13': '0.8125rem', // 13px
                                'text-14': '0.875rem',  // 14px
                                'text-15': '0.9375rem', // 15px
                                'text-16': '1rem',      // 16px
                                'text-17': '1.0625rem', // 17px
                                'text-18': '1.125rem',  // 18px
                                'text-20': '1.25rem',   // 20px
                                'text-22': '1.375rem',  // 22px
                                'text-23': '1.4375rem', // 23px
                                'text-24': '1.5rem',    // 24px
                                'text-25': '1.5625rem', // 25px
                                'text-26': '1.625rem',  // 26px
                                'text-27': '1.6875rem', // 27px
                                'text-30': '1.875rem',  // 30px
                                'text-34': '2.125rem',  // 34px
                                'text-35': '2.1875rem', // 35px
                                'text-40': '2.5rem',    // 40px
                                'text-43': '2.6875rem', // 43px
                                'text-45': '2.8125rem', // 45px
                        },
                        spacing: {
                                '76': '4.75rem',  // 76 px
                                '79': '4.9375rem', // 79px en rem
                                '71': '4.4375rem',  // 71px en rem
                                '61': '3.8125rem',  // 61px converti en rem 
                                '172': '10.75rem',   // 172px converti en rem
                                '195': '12.1875rem',
                                '38': '2.375rem',
                                '75': '4.6875rem',
                                '57': '3.5625rem',
                                '107': '6.6875rem', // 107px en rem
                                '74px': '4.625rem', // 74px en rem
                                '59': '3.6875rem', // 59px en rem
                                '213': '13.3125rem', // 213px en rem
                                '133': '8.3125rem', // 133px en rem
                                '125': '7.8125rem', // 125px en rem
                                '15': '0.9375rem', // 15px en rem
                                '29': '1.8125rem', // 29px en rem
                                '54': '3.375rem', // 54px en rem
                                '17': '1.0625rem', // 17px en rem
                                '124': '7.75rem', // 124px en rem
                                '108': '6.75rem', // 108px en rem
                                '12px': '0.75rem', // 12px en rem
                                '53': '3.3125rem', // 53px en rem
                                '72': '4.5rem',
                                '52': '3.25rem', // 52px en rem
                                '275': '17.1875rem',
                        },
                        height: {
                                '343': '21.4375rem',  // 343px converti en rem
                              },
                        screens: {
                                'sm': '640px',     // Petits appareils (mobile)
                                'md': '768px',     // Tablettes
                                'lg': '1024px',    // Ordinateurs de bureau
                                'xl': '1280px',    // Grand écran
                                '2xl': '1536px',   // Très grand écran
                        },
                        boxShadow: {
                                'container-collapse': '0px 3px 6px rgba(0, 0, 0, 0.16)', // Box-shadow personnalisé
                                'card-box-shadow':'0px 3px 6px #00000029'
                        },
                        borderRadius: {
                                '45': '2.8125rem', // 45px en rem
                                '38': '2.375rem', // 38px en rem
                        },
                },
        },
        plugins: [],
}

