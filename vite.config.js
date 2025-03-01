import tailwindcss from '@tailwindcss/vite';
import react from '@vitejs/plugin-react';
import laravel from 'laravel-vite-plugin';
import { defineConfig } from 'vite';
import { run } from 'vite-plugin-run';
export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.tsx'],
            ssr: 'resources/js/ssr.jsx',
            refresh: true,
        }),
        react(),
        tailwindcss(),
        run([
            // Watch Data, DTOs, and Enums and
            // run the command to generate types
            {
                name: 'Generate TypeScript Types',
                run: ['php', 'artisan', 'typescript:transform'],
                pattern: ['+(app)/**/*Data.php', '+(app)/**/Enums/*.php', '+(app)/**/Middleware/*.php'],
            },
        ]),
    ],
    esbuild: {
        jsx: 'automatic',
    },
    resolve: {
        alias: {
            '@': '/resources/js',
        },
    },
});
