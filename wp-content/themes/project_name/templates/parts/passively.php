<?php 
$title = get_field('title');
$group = get_field('group');?>

<div class="passively">
    <div class="container">
        <?php if($title):  ?>
            <h1 class="title"><?php echo $title ?></h1>
        <?php endif; ?>   
        <div class="swiper mySwiperq">
            <div class="swiper-wrapper">
                <?php if (is_array($group)) : ?>
                    <?php foreach ($group as $item) : ?>
                        <?php
                            $img = $item['img'];
                            $title = $item['title'];
                        ?>
                        <div class="swiper-slide">
                            <?= $img ? "<img src=\"$img\">" : '' ?>
                            <?= $title ? "<h2 class=\"title_group\">$title</h2>" : '' ?>
                        </div>
                    <?php endforeach; ?>
                <?php endif; ?>
            </div>
            <div class="swiper-pagination"></div>
        </div>
    </div>
</div>