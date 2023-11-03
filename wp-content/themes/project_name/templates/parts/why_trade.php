<?php
$title = get_field('title');
$description = get_field('description');
$blocks = get_field('blocks');?>

<div class="container">
<div class="why_trade">
    <div class="content_left">
        <?php if($title):  ?>
            <h2 class="title"><?php echo $title?></h2>
        <?php endif ?>
        <?php if($description):  ?>
            <p class="description"><?php echo $description?></p>
        <?php endif ?>
    </div>
    <div class="content_right">
        <div class="content_right_blocks">
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
                            <?php echo $descroption ?>
                        <?php endif ?>
                    </div>
                </div>
            <?php endforeach; ?>
            <?php endif; ?>
        </div>
    </div>
</div>
</div>