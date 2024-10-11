/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {},
    },
    plugins: [
        require('daisyui'),
    ],
    daisyui: {
        themes: [
            {
                custom: {
                    "primary": "#4d7c0f",
                    "secondary": "#ecfccb",
                    "accent": "#84cc16",
                    "neutral": "#ecfccb",
                    "base-100": "#fff",
                    "info": "#34d399",
                    "success": "#bef264",
                    "warning": "#fde047",
                    "error": "#fca5a5",
                    "primary-content": "#484b5a"
                },
            },
            "light",
            "aqua"
        ],
        darkTheme: "dark", // name of one of the included themes for dark mode
        base: true, // applies background color and foreground color for root element by default
        styled: true, // include daisyUI colors and design decisions for all components
        utils: true, // adds responsive and modifier utility classes
        prefix: "", // prefix for daisyUI classnames (components, modifiers and responsive class names. Not colors)
        logs: true, // Shows info about daisyUI version and used config in the console when building your CSS
        themeRoot: ":root", // The element that receives theme color CSS variables
    }
}

