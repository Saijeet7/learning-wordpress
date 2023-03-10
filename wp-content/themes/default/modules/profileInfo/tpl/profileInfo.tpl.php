<?php
if (!empty($data['settings']['module_id'])) {
    $block_id = $data['settings']['module_id'];
} else {
    $block_id = 'block-' . uniqid();
}
?>

<section class="profileInfo">
    <div class="container">
        <div class="profileInfo__content">
            <?php if ($data['profile_description']) : ?>
                <p><?php echo $data['profile_description']; ?></p>
            <?php endif; ?>
        </div>
        <div class="profileInfo__location">
            <?php if ($data['location']) : ?>
                <p><?php echo $data['location']; ?></p>
            <?php endif; ?>
        </div>
    </div>
    <?php
    if (!empty($data['settings']['bottom_spacing_desktop']) || !empty($data['settings']['bottom_spacing_mobile']) || !empty($data['settings']['layer_position'])) : ?>
        <style>
            <?php if (!empty($data['settings']['bottom_spacing_desktop'])) : echo '#' . esc_attr($block_id) . '{' . ' margin-bottom:' . esc_attr($data['settings']['bottom_spacing_desktop']) . '; }';
            endif;

            ?><?php if (!empty($data['settings']['bottom_spacing_mobile'])) : ?>@media screen and (max-width: 767px) {
                <?php echo '#' . esc_attr($block_id);

                ?> {
                    margin-bottom: <?php echo esc_attr($data['settings']['bottom_spacing_mobile']);
                                    ?>;
                }
            }
            <?php endif;
            ?><?php if (!empty($data['settings']['layer_position'])) : echo '#' . esc_attr($block_id) . '{' . ' z-index:' . esc_attr($data['settings']['layer_position']) . '; }';
                endif;
                ?>
        </style>
    <?php endif; ?>


</section>