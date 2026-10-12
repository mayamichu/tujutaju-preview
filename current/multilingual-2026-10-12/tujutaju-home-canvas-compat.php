<?php
/**
 * Plugin Name: Tujutaju Home and Privacy Canvas compatibility
 * Description: Render approved HFE templates on the approved Canvas pages.
 */
defined('ABSPATH') || exit();

function tujutaju_canvas_page_needs_hfe(): bool {
    $id = (int) get_queried_object_id();
    return !is_admin()
        && ((is_front_page() && (764 === $id || 2884 === $id)) || 3 === $id)
        && 'https://tujutaju.ee' === rtrim(home_url(), '/')
        && 'elementor_canvas' !== get_page_template_slug($id)
        && class_exists('Elementor\Plugin')
        && 'elementor_canvas' === \Elementor\Plugin::$instance->kits_manager->get_current_settings('default_page_template');
}

add_action('elementor/page_templates/canvas/before_content', function () {
    if (tujutaju_canvas_page_needs_hfe() && function_exists('hfe_header_enabled')
        && hfe_header_enabled()
        && '1' === get_post_meta(get_hfe_header_id(), 'display-on-canvas-template', true)) {
        hfe_render_header();
    }
}, 11);

add_action('elementor/page_templates/canvas/after_content', function () {
    if (tujutaju_canvas_page_needs_hfe() && function_exists('hfe_footer_enabled')
        && hfe_footer_enabled()
        && '1' === get_post_meta(get_hfe_footer_id(), 'display-on-canvas-template', true)) {
        hfe_render_footer();
    }
}, 11);
