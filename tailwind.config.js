/** @type {import('tailwindcss').Config} */
import ApexCharts from "apexcharts";
import animations from "@midudev/tailwind-animations";
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
        "node_modules/preline/dist/*.js",
    ],
    theme: {
        extend: {
            fontFamily: {
                gotham: ["Gotham", "sans-serif"], // Replace 'Gotham' with the actual font family name
            },
        },
    },
    plugins: [
        animations,

        require("preline/plugin"),
        // Include preline plugin
    ],
};
