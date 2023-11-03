<!-- analytics из trade -->

<?php 
$title = get_field('title');
$description = get_field('description');
$button_text = get_field('button_text');
$button_links = get_field('button_links');?>


<div class="analytics_block">
<div class="container_analytics_block">
    <?php if($title):  ?>
        <h2 class="title"><?php echo $title?></h2>
    <?php endif ?>
    <?php if($description):  ?>
        <p class="description"><?php echo $description?></p>
    <?php endif ?>
    <?php if($button_text):  ?>
        <button class="button"><?php echo $button_text?>
    <?php endif ?>
    <?php if($button_links):  ?>
        <?php echo $button_links?>
    <?php endif ?>
        </button>
    <div class="videos">
        <?php echo $video  = wp_oembed_get( get_field('video') ); ?>
        <button class="play">
            <div class="icon">
            </div>
        </button>
    </div>
</div>
</div>