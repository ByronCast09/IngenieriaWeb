import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
                inter: ['Inter', 'sans-serif'],
                roboto: ['Roboto', 'sans-serif'],
                volkhov: ['volkhov', 'serif'],
                poppins: ['Poppins', 'sans-serif'],
                montserrat: ['Montserrat', 'sans-serif'],
                figtree: ['Figtree'],
            },
            colors: {
                azullogo: '#1A2F79',
                azulccl: '#181E4B',
                cremaccl: '#C8C57E',
                hcremaccl: '#b5b270',
                acremaccl: '#a8a46b',
                playbtn: '#DCDF4E',
                hplaybtn: '#cfd152',
                aplaybtn: '#c1c349',
                gris: '#686D77',
                icontactbox: '#39425DD0',
                pcontactbox: 'rgba(0, 2, 19, 0.788)',
            },
            fontSize: {
                titulo1: '84px',
                subtitulo1: '28px',
                pg: '15px',
                rnav: '10px',
                aiplanebtn: '30px',
                sbtn: '17px',
            },
            lineHeight: {
                titulo1: '89px',
            },
            boxShadow: {
                smasInfo: '0px 20px 35px 0px rgba(241, 165, 1, 0.15)',
                splaybtn: '0px 20px 35px 0px rgba(243, 211, 2, 0.15)',
                scontactbox: '0px 4px 4px #00000040',
            },
            borderRadius: {
                rcontactbox: '200px',
            },
            width: {
                w1170: '1170px',
                w70: '70px',
                w180: '180px',
                w420: '420px',
                w1309: '1309px',
                w20p: '20%',
                winherit: 'inherit',
            },
            height: {
                h400: '400px',
                h70: '70px',
                h220: '220px',
            },
            backgroundColor: {
                bcardbnfcs: 'rgba(181, 190, 75, 0.15)',
            },
            backgroundImage: {
                bcontactbox: 'linear-gradient(180deg, rgba(199.95, 197.01, 126.47, 0.58) 0%, rgba(199.95, 197.01, 126.47, 0) 100%)',
                bcontactbtn: 'linear-gradient(180deg, rgb(255, 235.6, 109) 0%, rgb(255, 125, 104) 100%)',
                bcontactbtnh: 'linear-gradient(180deg, rgb(226, 209, 95) 0%, rgb(255, 125, 104) 100%)',
                bcontactbtna: 'linear-gradient(180deg, rgb(255, 125, 104) 0%, rgb(210, 193, 88) 100%)',
            },
            keyframes: {
                escalar: {
                  '0%': { transform: 'scale(1)' },
                  '100%': { transform: 'scale(1.03)' },
                },
                fadeInUp: {
                    from: { opacity: 0, transform: 'translateY(20px)' },
                    to: { opacity: 1, transform: 'translateY(0)' },
                  },
              },
            animation: {
                escalar: 'escalar 1s infinite alternate',
                fade: 'fade 1.5s ease-in-out',
                fadeInUp: 'fadeInUp 1.5s ease-in-out',
            },
        },
    },

    plugins: [forms],
};
