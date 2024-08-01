import {defineConfig} from 'vite'
import laravel from 'laravel-vite-plugin'

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/sass/app.scss',
                'resources/js/app.js',
                'resources/js/light-gallery/single-photo.js',
                'resources/js/light-gallery/gallery.js',
                'resources/css/filament/admin/theme.css'
            ],
            refresh: true,
        }),
    ],
})
