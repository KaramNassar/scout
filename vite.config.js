import {defineConfig} from 'vite'
import laravel from 'laravel-vite-plugin'

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/sass/app.scss',
                'resources/js/app.js',
                'node_modules/lightgallery/css/lightgallery.css',
                'node_modules/lightgallery/css/lightgallery-bundle.min.css',
                'resources/js/light-gallery/single-photo.js',
                'resources/js/light-gallery/gallery.js'
            ],
            refresh: true,
        }),
    ],
})
