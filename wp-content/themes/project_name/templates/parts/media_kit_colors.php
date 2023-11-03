<?php 
$title = get_field('title');
$line = get_field('line');

function is_dark_color($color) {
    $color = sscanf($color, "#%02x%02x%02x");
    $brightness = (0.299 * $color[0] + 0.587 * $color[1] + 0.114 * $color[2]);
    return $brightness < 128;
}?>

<div class="container">
    <div class="media_kit_fonts">
        <?php if($title):  ?>
            <h2 class="title"><?php echo $title?></h2>
        <?php endif ?>
    </div>
    <div class="media_kit_colors-line">
    <?php if (get_field('line')):
        foreach (get_field('line') as $row):
            $titleq = $row['title'];
            $block_color = $row['block_color'];
            if ($titleq): ?>
                <h2 class="title"><?php echo $titleq ?></h2>
            <?php endif ?>
            <div class="line_block">
                <?php
                if ($block_color):
                    foreach ($block_color as $rows): ?>
                        <div class="block <?php echo count($rows['qw_color']) === 1 ? 'multiplay' : ''; ?>">
                            <?php
                            $qw_color = $rows['qw_color'];
                            if ($qw_color):
                                foreach ($qw_color as $sub_row):
                                    $background_color = $sub_row['color'];
                                    $name_color = $sub_row['name_color'];
                                    $text_color_class = is_dark_color($background_color) ? 'dark-background' : '';
                                    ?>
                                    <div class="content <?php echo $text_color_class; ?>" style="background-color: <?php echo esc_attr($background_color); ?>">
                                        <?php if ($name_color): ?>
                                            <p class="name_color"><?php echo $name_color ?></p>
                                        <?php endif; ?>
                                    </div>
                                <?php endforeach;
                            endif; ?>
                        </div>
                    <?php endforeach;
                endif; ?>
            </div>
        <?php endforeach;
        endif; ?>
    </div>
</div>