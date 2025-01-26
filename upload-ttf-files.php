<?php
/**
 * Allow .ttf files to be uploaded in WordPress.
 *
 * This snippet adds support for uploading .ttf (TrueType font) files
 * by adding the appropriate MIME type to the list of allowed file types.
 *
 * @filter upload_mimes
 */
function custom_mime_types($mimes) {
    // Add MIME type for .ttf files
    $mimes['ttf'] = 'font/ttf';
    return $mimes;
}
add_filter('upload_mimes', 'custom_mime_types');
