<?php 
$title = get_field('title');
$description = get_field('description');
$img = get_field('img');?>

<section class="hero">
    <div class="container">
        <div class="hero_content">
            <div class="hero_content_left">
                <?php if($title):  ?>
                    <h1 class="hero_content_left-title"><?php echo $title?></h1>
                <?php endif ?>
                <?php if($description):  ?>
                    <p class="hero_content_left-description"><?php echo $description?></p>
                <?php endif ?>
                <div class="hero_content_left-block_buttons">
                    <?php
                    $buttons_block = get_field('buttons_block');
                    if (is_array($buttons_block)) {
                        foreach ($buttons_block as $row) :
                            $buttons_text = $row['buttons_text'];
                            $buttons_link = $row['buttons_link'];
                            if($buttons_text):  ?>
                                <button class="buttons_left"><?php echo $buttons_text?>
                            <?php endif ?>
                            <?php if($buttons_link):  ?>
                                <?php echo $buttons_link?>
                            <?php endif ?>
                                </button><?
                    endforeach;} ?>
                </div>
            </div>
            <div class="hero_content_right">
                <div class="img_ll"></div>
                <?php if ($img) : ?>
                    <img class="fixed" src="<?php echo $img?>">
                <?php endif ?>
                <img class="fixed_mobile" src="http://bootstrap-wp-theme-devol/wp-content/uploads/2023/11/Image-1.svg">

            </div>
        </div>
    </div>
</section>