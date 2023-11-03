<?php 
$trade_title = get_field('title');
$trade_description = get_field('description');
$blocks = get_field('blocks');?>

<div class="container">
    <div class="resources">
        <?php if($trade_title):  ?>
            <h2 class="title"><?php echo $trade_title?></h2>
        <?php endif ?>
        <?php if($trade_description):  ?>
            <p class="description"><?php echo $trade_description?></p>
        <?php endif ?>
    </div>
</div>