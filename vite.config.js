import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js'],
            input: ['resources/css/Bienvenido.css', 'resources/js/Bienvenido.js'],
            input: ['resources/css/Unicons.css'],
            refresh: true,
        }),
    ],
});
