<?php 
$title = get_field('title');
$description = get_field('description');
$list = get_field('list');
$bottom_description = get_field('bottom_description');?>


<section class="breakthrough">
    <div class="container">
        <div class="breakthrough-content">
            <div class="breakthrough-content_left">
            <?php if($title):  ?>
                <h1 class="breakthrough-content_left_title"><?php echo $title?></h1>
            <?php endif ?>
            </div>
            <div class="breakthrough-content_right">
            <?php if($description):  ?>
                <p class="description"><?php echo $description?></p>
            <?php endif ?>
                <ul class="list">
                <?php
                    if (is_array($list)) {
                    foreach ($list as $row) :
                        $text_list = $row['text_list'];
                        if ($text_list) : ?>
                            <li><?php echo $text_list?></li>
                        <?php endif;
                    endforeach;}?>
                </ul>
                <?php if($bottom_description):  ?>
                <p class="bottom_description"><?php echo $bottom_description?></p>
                <?php endif ?>
            </div>
        </div>
    </div>
</section>