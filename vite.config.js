import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import vue from '@vitejs/plugin-vue';

export default defineConfig({
    server: {
        hmr: {
            host: 'localhost',
        }
    },
    plugins: [
        laravel({
            input: ['resources/byustechnology/runadm/css/app.css', 'resources/byustechnology/runadm/js/app.js'],
            refresh: true,
        }),
        vue()
    ],
});
