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
                    DEFAULT: "#3F59AD",
                    '50': "#F0F2FA",
                    '100': "#E1E6F4",
                    '200': "#BCC6E6",
                    '300': "#8799D3",
                    '400': "#3F59AD",
                    '500': "#39509D",
                    '600': "#32478A",
                    '700': "#2E417F",
                    '800': "#263669",
                    '900': "#1A2447",
                    '950': "#121931",
                    content: "#f1f3fa",
                    dark: "#314688",
                    light: "#5c74c3",
                },
                secondary: {
                    DEFAULT: "#8C3592",
                    '50': "#F9F0FA",
                    '100': "#F3E1F4",
                    '200': "#E2B8E5",
                    '300': "#D08BD5",
                    '400': "#A53FAD",
                    '500': "#96399D",
                    '600': "#8C3592",
                    '700': "#762D7B",
                    '800': "#642669",
                    '900': "#3D1740",
                    '950': "#270F29",
                    content: "#f9f1fa",
                    dark: "#813188",
                    light: "#bc5cc3",
                },
                dark: {
                    DEFAULT: "#3f4d69",
                    '50': "#f6f7f9",
                    '100': "#ebeef3",
                    '200': "#d3d9e4",
                    '300': "#acb8cd",
                    '400': "#7f92b1",
                    '500': "#5f7498",
                    '600': "#4b5d7e",
                    '700': "#3f4d69",
                    '800': "#364156",
                    '900': "#30384a",
                    '950': "#202531",
                },

                copy: {
                    default: "#232529",
                    light: "#5e626e",
                    lighter: "#848895",
                },
                "copy-dark": {
                    default: "#fbfbfb",
                    light: "#d6d7dc",
                    lighter: "#9fa2ac",
                },
                foreground: {
                    default: "#fbfbfb",
                    dark: "#232529",
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
