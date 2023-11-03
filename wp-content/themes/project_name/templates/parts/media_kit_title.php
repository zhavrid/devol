<?php 
$title = get_field('title');
$description = get_field('description');?>

<div class="container">
    <div class="media_kit_title">
        <?php if($title):  ?>
            <h2 class="title"><?php echo $title?></h2>
        <?php endif ?>
        <?php if($description):  ?>
            <?php echo $description?>
        <?php endif ?>
    </div>
</div>