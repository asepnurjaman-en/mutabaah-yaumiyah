import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import path from 'path';

export default defineConfig({
    plugins: [
        laravel(['resources/js/app.jsx']),
    ],
    resolve: {
        alias: {
            '@': '/resources/js',
        }
    },
});
