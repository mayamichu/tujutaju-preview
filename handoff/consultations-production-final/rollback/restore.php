<?php
// Run with WP-CLI eval-file and the absolute backup JSON path as the first argument.
if (get_option('siteurl') !== 'https://tujutaju.ee' || get_option('home') !== 'https://tujutaju.ee') {
    throw new Exception('Wrong WordPress installation');
}
$backup = json_decode(file_get_contents($args[0]), true, 512, JSON_THROW_ON_ERROR);
$data = base64_decode($backup['elementor_data_base64'], true);
if ($backup['post']['ID'] !== 2044 || hash('sha256', $data) !== 'abbfec0ce882d488b8a100f07f17b368afe2ec5cf9a7217ff37e96c610adc6a5') {
    throw new Exception('Invalid backup');
}
if (hash('sha256', get_post_meta(2044, '_elementor_data', true)) !== '83738459f4410fd4cc49b9aafa31ebe143a5f027945b84894e311c65664f118a') {
    throw new Exception('Page changed after transfer; review before restoring');
}
$post = $backup['post'];
unset($post['filter']);
$result = wp_update_post(wp_slash($post), true);
if (is_wp_error($result)) { throw new Exception($result->get_error_message()); }
foreach (array_keys(get_post_meta(2044)) as $key) { delete_post_meta(2044, $key); }
foreach ($backup['meta'] as $key => $values) {
    foreach ($values as $value) { add_post_meta(2044, $key, wp_slash(maybe_unserialize($value))); }
}
clean_post_cache(2044);
if (get_post_meta(2044, '_elementor_data', true) !== $data) { throw new Exception('Rollback readback mismatch'); }
echo "Restored production Consultations 2044; verify ordinary URL and regenerate only this page CSS if needed.\n";
