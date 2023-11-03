<?php 
$title = get_field('title');
$description = get_field('description');
$button_text = get_field('button_text');
$button_links = get_field('button_links');
$img = get_field('img');?>

<div class="protocol_title">
    <div class="container">
        <div class="content">
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
            <div class="img">
                <?php if($img):  ?>
                    <img class="i" src="<?php echo $img?>">
                <?php endif ?>
            </div>
        </div>
    </div>
</div>