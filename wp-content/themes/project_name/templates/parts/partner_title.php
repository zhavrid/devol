<?php 
$trade_title = get_field('title');
$trade_description = get_field('description');
$blocks = get_field('blocks');?>

<div class="container">
    <div class="trade_block">
        <?php if($trade_title):  ?>
            <h2 class="title"><?php echo $trade_title?></h2>
        <?php endif ?>
        <?php if($trade_description):  ?>
            <p class="description"><?php echo $trade_description?></p>
        <?php endif ?>
    </div>
    <div class="blocks_partner">
            <?php if (is_array($blocks)) : ?>
            <?php foreach ($blocks as $row) : ?>
                <div class="block">
                <?php
                $icon = $row['icon'];
                $text = $row['text'];?>
                <?php if ($icon) : ?>
                    <img class="icon" src = "<?php echo $icon?>">
                <?php endif ?>     
                <?php if ($text) : ?>
                    <p class="title"><?php echo $text ?></p>
                <?php endif ?>
                </div>
            <?php endforeach; ?>
            <?php endif; ?>
        </div>
</div>