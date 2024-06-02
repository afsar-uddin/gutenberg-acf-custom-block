<?php 

/**
 * @param array $block 
 * @param string $content 
 * @param bool $is_preview
 * @param (int | string) $post_id 
 */

//  echo "<pre>";
//      var_dump(get_field('ic_repeater'));
//  echo "</pre>";

$items = get_field('ic_repeater');
?><div class="ic-repeater">
    <h2>Repeater Item List</h2>    
<?php
foreach($items as $item){
    ?>
        <div class="ic-single-repeater">
            <h3><?php echo esc_html($item['question']); ?></h3>
            <?php echo esc_html($item['answer']); ?>
        </div>
    <?php
}
?></div><?php
echo "repeater from template parts";