<?php 
$title = get_field('title');
$description = get_field('description');
$button_text = get_field('button_text');
$button_link = get_field('button_link');
$block = get_field('block');?>

<section class="platform">
    <div class="container">
        <div class="platform-content">
        <?php if($title):  ?>
            <h1 class="platform-content_title"><?php echo $title?></h1>
        <?php endif ?>
        <?php if($description):  ?>
            <p class="platform-content_description"><?php echo $description?></p>
        <?php endif ?>
        <?php if($button_text):  ?>
            <button class="platform-content_buttons"><?php echo $button_text?>
        <?php endif ?>
        <?php if($buttons_link):  ?>
            <?php echo $button_link?>
        <?php endif ?>
            </button>
        </div>
        <div class="platform-blocks">
            <?php if (is_array($block)) : ?>
                <?php foreach ($block as $row) : ?>
                    <div class="block">
                        <?php
                        $block_title = $row['block_title'];
                        $block_description = $row['block_description'];
                        $block_list = $row['block_list'];
                        $block_img = $row['block_img'];
                        ?>
                        <div class="block_left">
                            <?php if ($block_title) : ?>
                                <h2 class="block_title"><?php echo $block_title ?></h2>
                            <?php endif ?>
                            <?php if ($block_description) : ?>
                                <p class="block_description"><?php echo $block_description ?></p>
                            <?php endif ?>
                            <ul class="block_list">
                                <?php if (is_array($block_list)) : ?>
                                    <?php foreach ($block_list as $rows) : ?>
                                        <?php
                                        $block_list_text = $rows['block_list_text'];
                                        if ($block_list_text) : ?>
                                            <li><?php echo $block_list_text ?></li>
                                        <?php endif; ?>
                                    <?php endforeach; ?>
                                <?php endif; ?>
                            </ul>
                        </div>
                        <div class="block_right">
                            <?php if ($block_img) : ?>
                                <img src="<?php echo $block_img ?>">
                            <?php endif; ?>
                        </div>
                    </div>
                <?php endforeach; ?>
            <?php endif; ?>
        </div>
    </div>
</section>