<?php
    /**
     * Template Functions: Helper functions used in template files
     */
    function get_dist_path($sub_dir='/', $file) {
        $template_directory = get_template_directory_uri() ;
        return "{$template_directory}/dist{$sub_dir}{$file}";
    }
    function get_function_path($file) {
        return "dist/php/functions/{$file}";
    }
    function get_partial_path($partial_name) {
        return "/dist/php/partials/{$partial_name}";
    }
    function get_image_path($file) {
        return get_dist_path('/images/', $file);
    }
    function image_path($file) {
        echo get_image_path($file);
    }

    function get_icon($icon) {
        $icon_file = file_get_contents(get_image_path("icons/{$icon}.svg"));
        echo $icon_file;
    }
?>