<?php 

/**
 * @param array $block 
 * @param string $content 
 * @param bool $is_preview
 * @param (int | string) $post_id 
 */

$id = 'travel-it-block-' . $block['id'];
$className = 'travel-it-block';

if(!empty($block['className'])) {
    $className .= ' ' . $block['className'];
}

if( !empty($block['align']) ) {
    $className .= ' align' . $block['align'];
}

// display vlaues 
$daytime = get_field('daytime');
$image = get_field('image');
$days_activity = get_field('days_activity');
$am_description = get_field('am_description');
$pm_description = get_field('pm_description');
$overnight = get_field('overnight');
$available_services = get_field('available_services');

?>
    <div id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($className); ?>">

        <div>
            <span class="day"><?php echo esc_html($daytime); ?></span>
        </div>
        <div class="img">
            <?php 
                if($image) {
                    ?>
                        <img src="<?php echo $image['url']; ?>" alt="">
                    <?php
                }
            ?>
        </div>

        <div class="content-info">
            <?php if(!empty($days_activity)): ?>
                <p><?php echo esc_html($days_activity); ?></p>
            <?php endif; ?>
            
            <?php if(!empty($am_description)): ?>
                <p><?php echo esc_html($am_description); ?></p>
            <?php endif; ?>

            <?php if(!empty($pm_description)): ?>
                <p><?php echo esc_html($pm_description); ?></p>
            <?php endif; ?>

            <?php if(!empty($overnight)): ?>
                <p><?php echo esc_html($overnight); ?></p>
            <?php endif; ?>
        </div>
        <div class="services-info">
            <?php

        // print_r($available_services);
    
                if($available_services['breakfast'] == 1) {
                    $bclass = 'available';
                } else {
                    $bclass = 'unavailable';
                }
    
    
                if($available_services['lunch'] == 1) {
                    $cclass = 'available';
                } else {
                    $cclass = 'unavailable';
                }
    
                if($available_services['dinner'] == 1) {
                    $dclass = 'available';
                } else {
                    $dclass = 'unavailable';
                }
    
            ?>
    
            <p>Breakfast : <span class="<?php echo esc_attr($bclass); ?>"></span></p>
            <p>Lunch : <span class="<?php echo esc_attr($cclass); ?>"></span></p>
            <p>Dinner : <span class="<?php echo esc_attr($dclass); ?>"></span></p>
        </div>
    </div>
<?php
