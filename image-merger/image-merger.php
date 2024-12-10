<?php
/**
 * Plugin Name: Image Merger Bamba
 * Description: Merge multiple images and save them in WordPress media library
 * Version: 1.0
 * Author: Bamba Ndiaye
 */

// Sécurité
if (!defined('ABSPATH')) {
    exit;
}

// Enregistrement des scripts
// Modification du plugin original pour rendre la fonction réutilisable
function image_merger_enqueue_scripts() {
    // Librairie de base pour la fusion
    wp_enqueue_script('merge-images', 'https://unpkg.com/merge-images', array(), '1.0', true);
    
    // Notre module réutilisable
    wp_enqueue_script(
        'image-merger-module', 
        plugin_dir_url(__FILE__) . 'js/image-merger-module.js', 
        array('merge-images'), 
        '1.0', 
        true
    );
    
    // Variables WordPress nécessaires
    wp_localize_script('image-merger-module', 'imageMergerVars', array(
        'ajaxurl' => admin_url('admin-ajax.php'),
        'nonce' => wp_create_nonce('image_merger_nonce')
    ));
}
add_action('wp_enqueue_scripts', 'image_merger_enqueue_scripts');

// Gestionnaire AJAX pour la sauvegarde des images
function handle_save_merged_image() {
    // Vérification du nonce
    check_ajax_referer('image_merger_nonce', 'nonce');

    // Récupération des données
    $image_data = sanitize_text_field($_POST['image']);
    $image_data = str_replace('data:image/png;base64,', '', $image_data);
    $decoded_image = base64_decode($image_data);

    // Création du fichier temporaire
    $upload_dir = wp_upload_dir();
    $filename = 'merged-' . uniqid() . '.png';
    $file_path = $upload_dir['path'] . '/' . $filename;
    
    file_put_contents($file_path, $decoded_image);

    // Insertion dans la bibliothèque de médias
    $file_type = wp_check_filetype($filename, null);
    $attachment = array(
        'post_mime_type' => $file_type['type'],
        'post_title' => sanitize_file_name($filename),
        'post_content' => '',
        'post_status' => 'inherit'
    );

    $attach_id = wp_insert_attachment($attachment, $file_path);
    require_once(ABSPATH . 'wp-admin/includes/image.php');
    
    $attach_data = wp_generate_attachment_metadata($attach_id, $file_path);
    wp_update_attachment_metadata($attach_id, $attach_data);

    // Retour de l'URL
    wp_send_json_success(array(
        'url' => wp_get_attachment_url($attach_id),
        'id' => $attach_id
    ));
}
add_action('wp_ajax_save_merged_image', 'handle_save_merged_image');
add_action('wp_ajax_nopriv_save_merged_image', 'handle_save_merged_image');

// Shortcode pour afficher l'interface de fusion
function image_merger_shortcode() {
    ob_start();
    ?>
    <div id="image-merger-container">
        <div id="result"></div>
    </div>
    <?php
    return ob_get_clean();
}
add_shortcode('image_merger', 'image_merger_shortcode');
?>