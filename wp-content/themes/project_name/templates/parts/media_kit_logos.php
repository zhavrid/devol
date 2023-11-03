<?php 
$title = get_field('title');
$blocks = get_field('blocks');?>

<div class="container">
    <div class="media_kit_fonts">
        <?php if($title):  ?>
            <h2 class="title"><?php echo $title?></h2>
        <?php endif ?>
    </div>
    <div class="media_kit_logos-blocks">
    <?php if (get_field('blocks')):
    foreach (get_field('blocks') as $row): ?>
        <div class="line_block">
        <?php $line_block = $row['line_block'];
            if ($line_block):
            foreach ($line_block as $rows): ?>
                <div class="block">
                <?php $block = $rows['block'];
                    if ($block):
                    foreach ($block as $rowses): ?>
                        <div class="content"><?php 
                        $logo = $rowses['logo'];
                        $sub = $rowses['sub'];
                            if ($logo): ?>
                                <img src="<?php echo esc_url($logo); ?>">
                            <?php endif; ?>
                            <div class="content_subs"><?php
                                if ($sub):
                                foreach ($sub as $sub_row):
                                    $format = $sub_row['format'];
                                    $file = $sub_row['file'];
                                    $filename = $file['filename'];
                                    $fileurl = $file['url'];
                                    if ($format && $file): ?>
                                        <button class="content_subs_dwnld">
                                            <a href="<?php echo esc_url($fileurl); ?>" download><?php echo esc_html($format); ?></a>
                                        </button>
                                    <?php endif; ?>
                                <?php endforeach;
                                endif; ?>
                            </div>
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