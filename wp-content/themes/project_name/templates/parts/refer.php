<?php 
$title = get_field('title');
$description = get_field('description');
$button_text = get_field('button_text');
$button_link = get_field('button_link');
$content_right = get_field('content_right');?>

<div class="refer">
    <div class="container">
        <div class="content">
            <div class="contant_left">
                <?php if($title):  ?>
                    <h1 class="title"><?php echo $title?></h1>
                <?php endif ?>
                <?php if($description):  ?>
                    <p class="description"><?php echo $description?></p>
                <?php endif ?>
                <?php if($button_text):  ?>
                    <button class="button"><?php echo $button_text?>
                    <?php endif ?>
                    <?php if($button_link):  ?>
                        <?php echo $button_link?>
                    <?php endif ?>
                </button>
            </div>
            <div class="contant_right">
                <?php if($content_right):  ?>
                    <?php echo $content_right?>
                <?php endif ?>
            </div>
        </div>
    </div>
</div>