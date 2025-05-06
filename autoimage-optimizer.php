<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://www.linkedin.com/in/victoria-mondino-b78944290/
 * @since             1.0.0
 * @package           Autoimage_Optimizer
 *
 * @wordpress-plugin
 * Plugin Name:       AutoImage Optimizer
 * Plugin URI:        https://github.com/Victoria-Mondino/AutoImage-Optimizer.git
 * Description:       Plugin automático de optimización de imágenes que reduce el peso de los archivos sin comprometer la calidad visual. Mejora la velocidad de carga del sitio y la experiencia del usuario, sin necesidad de intervención manual.
 * Version:           1.0.0
 * Author:            Victoria Mondino
 * Author URI:        https://www.linkedin.com/in/victoria-mondino-b78944290//
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       autoimage-optimizer
 * Domain Path:       /languages
 */


function auto_image ($attachment_id) {
    $mime_type = get_post_mime_type($attachment_id);
    if(stropos($mime_type, 'image')!== false) {
        $image_title = get_the_title($attachment_id);
        update_post_meta($attachment_id, '_wp_attachment_image_alt', $image_title);
    }
}

add_action('add_attachment', 'auto_iimage_alt');