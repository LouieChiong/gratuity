import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/bootstrap.min.css',
                'resources/css/bootstrap-icons.css',
                'resources/css/template.css',
                'resources/js/app.js',
                'resources/js/bootstrap.min.js',
                'resources/js/click-scroll.js',
                'resources/js/counter.js',
                'resources/js/custom.js',
                'resources/js/jquery.min.js',
                'resources/js/jquery.sticky.js',
            ],
            refresh: true,
        }),
    ],
});
