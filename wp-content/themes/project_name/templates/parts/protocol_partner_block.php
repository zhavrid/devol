<?php 
$title = get_field('title');
$blocks = get_field('blocks');?>

<div class="container">
    <?php if ($title) : ?>
        <h2 class="title"><?php echo $title ?></h2>
    <?php endif ?>
    <div class="blocks_qu">
        <?php if (is_array($blocks)) : ?>
        <?php foreach ($blocks as $row) : ?>
            <div class="block">
            <?php
            $icon = $row['icon'];
            $title = $row['title'];
            $descroption = $row['descroption'];?>
            <?php if ($title) : ?>
                <img class="icon" src = "<?php echo $icon?>">
            <?php endif ?>     
                <div class="block_right">
                    <?php if ($title) : ?>
                        <h2 class="block_right_title"><?php echo $title ?></h2>
                    <?php endif ?>
                    <?php if ($descroption) : ?>
                        <p class="block_right_description"><?php echo $descroption ?></p>
                    <?php endif ?>
                </div>
            </div>
        <?php endforeach; ?>
        <?php endif; ?>
    </div>
</div>