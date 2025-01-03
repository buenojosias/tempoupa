import defaultTheme from "tailwindcss/defaultTheme";
import forms from "@tailwindcss/forms";

/** @type {import('tailwindcss').Config} */
export default {
    darkMode: "class",
    presets: [require("./vendor/tallstackui/tallstackui/tailwind.config.js")],

    content: [
        "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
        "./storage/framework/views/*.php",
        "./resources/views/**/*.blade.php",
        "./vendor/tallstackui/tallstackui/src/**/*.php",
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ["Figtree", ...defaultTheme.fontFamily.sans],
            },
            colors: {
                primary: {
                    DEFAULT: "#075B5D",
                    '50': "#D0FBFB",
                    '100': "#A0F6F8",
                    '200': "#41EEF1",
                    '300': "#0EBBBE",
                    '400': "#075B5D",
                    '500': "#064B4C",
                    '600': "#053D3E",
                    '700': "#042F2F",
                    '800': "#022121",
                    '900': "#010E0E",
                    '950': "#010909",
                    content: "#6ff1f4",
                    dark: "#032d2e",
                    light: "#0b898c",
                },
                secondary: {
                    DEFAULT: "#4E0B8C",
                    '50': "#E9D4FC",
                    '100': "#D2AAF8",
                    '200': "#A85AF2",
                    '300': "#7B11DE",
                    '400': "#4E0B8C",
                    '500': "#420976",
                    '600': "#34075F",
                    '700': "#270647",
                    '800': "#1A042F",
                    '900': "#0D0218",
                    '950': "#050109",
                    content: "#b56ff4",
                    dark: "#19032e",
                    light: "#4e0b8c",
                },
                dark: {
                    DEFAULT: "#3f4d69",
                    50: "#f6f7f9",
                    100: "#ebeef3",
                    200: "#d3d9e4",
                    300: "#acb8cd",
                    400: "#7f92b1",
                    500: "#5f7498",
                    600: "#4b5d7e",
                    700: "#3f4d69",
                    800: "#364156",
                    900: "#30384a",
                    950: "#202531",
                },

                copy: {
                    default: "#232929",
                    light: "#5e6d6e",
                    lighter: "#849495",
                },
                "copy-dark": {
                    default: "#fbfbfb",
                    light: "#d6dbdc",
                    lighter: "#9facac",
                },
                foreground: {
                    default: "#fbfbfb",
                    dark: "#232929",
                },
                background: {
                    default: "#eff1f1",
                    dark: "#181b1b",
                },
                border: {
                    default: "#dde1e2",
                    dark: "#3b4445",
                },
            },
        },
    },

    plugins: [forms],
};
