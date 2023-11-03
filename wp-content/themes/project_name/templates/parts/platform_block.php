<?php 
$title = get_field('title');
$description = get_field('description');
?>

<div class="container">
    <div class="platform_block">
        <?php if($title):  ?>
            <h2 class="title"><?php echo $title?></h2>
        <?php endif ?>
        <?php if($description):  ?>
            <p class="description"><?php echo $description?></p>
        <?php endif ?>
        <div class="button_display">
            <?php $buttons = get_field('buttons');
            if (is_array($buttons)) {
            foreach ($buttons as $row) :
                $button_text = $row['button_text'];
                $button_link = $row['button_link'];
                if($button_text):  ?>
                    <button class="buttonq"><?php echo $button_text?>
                <?php endif ?>
                <?php if($button_link):  ?>
                    <?php echo $button_link?>
                <?php endif ?>
                    </button><?
            endforeach;} ?>
        </div>
        <div class="video">
            <?php echo $video  = wp_oembed_get( get_field('video') ); ?>
            <button class="play">
                <div class="icon">
                </div>
            </button>
        </div>
    </div>
</div>