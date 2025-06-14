import {
    defineConfig
} from 'vite';
import laravel from 'laravel-vite-plugin';
import resolve from 'path';
import tailwindcss from "@tailwindcss/vite";

export default defineConfig({
    build: {
        outDir: 'public/assets',
        emptyOutDir: true,
        rollupOptions: {
            input: {
                client: 'resources/client/main.js',
                admin:  'resources/admin/main.js',
            },
            output: {
                entryFileNames: '[name].[hash].js',
                chunkFileNames: '[name].[hash].js',
                assetFileNames: '[name].[hash].[ext]',
            },
        },
    },
    // plugins: [
    //     laravel({
    //         input: ['resources/css/app.css', 'resources/js/app.js'],
    //         refresh: true,
    //     }),
    //     laravel({
    //          input: ['resources/css/style.css'],
    //          refresh: true,
    //      }),
    //     tailwindcss(),
    // ],
    server: {
        cors: true,
    },
});