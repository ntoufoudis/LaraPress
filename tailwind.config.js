import defaultTheme from 'tailwindcss/defaultTheme';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
    ],
    theme: {
        extend: {
            colors: {
                'light-background': '#F4F4F4',
                'light-text': '#333333',
                'light-important': '#FF6B6B',
                'light-success': '#88C057',
                'light-primary': '#34568B',
                'light-vibrant': '#00B5C2',
            },
        },
        fontFamily: {
            'body': [
                'Roboto',
                'ui-sans-serif',
                'system-ui',
                '-apple-system',
                'system-ui',
                'Segoe UI',
                'Roboto',
                'Helvetica Neue',
                'Arial',
                'Noto Sans',
                'sans-serif',
                'Apple Color Emoji',
                'Segoe UI Emoji',
                'Segoe UI Symbol',
                'Noto Color Emoji'
            ],
            'sans': [
                'Roboto',
                'ui-sans-serif',
                'system-ui',
                '-apple-system',
                'system-ui',
                'Segoe UI',
                'Roboto',
                'Helvetica Neue',
                'Arial',
                'Noto Sans',
                'sans-serif',
                'Apple Color Emoji',
                'Segoe UI Emoji',
                'Segoe UI Symbol',
                'Noto Color Emoji'
            ]
        }
    },
    plugins: [],
    safelist: [
        {
            pattern:
                /(bg|text|border)-(primary|light-background|light-text|light-important|light-success|light-primary|light-vibrant)/,
        },
    ],
}

