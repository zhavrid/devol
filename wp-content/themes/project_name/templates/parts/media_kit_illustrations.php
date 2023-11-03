<?php 
$title = get_field('title');
$logo = get_field('logo');
$sub = get_field('sub');?>

<div class="container">
    <div class="media_kit_fonts">
        <?php if($title):  ?>
            <h2 class="title"><?php echo $title?></h2>
        <?php endif ?>
    </div>

    <div class="content_illustrations"><?php  
        if ($logo): ?>
            <img src="<?php echo esc_url($logo); ?>">
        <?php endif; ?>
        <div class="illustrations_subs"><?php
            if ($sub):
            foreach ($sub as $row):
                $format = $row['format'];
                $file = $row['file'];
                $filename = $file['filename'];
                $fileurl = $file['url'];
                    if ($format && $file): ?>
                        <button class="illustrations_subs_dwnld">
                            <a href="<?php echo esc_url($fileurl); ?>" download><?php echo esc_html($format); ?></a>
                       </button>
                    <?php endif; ?>
            <?php endforeach;
            endif; ?>
        </div>
    </div>
</div>