<?php 
$group = get_field('group');?>

<section class="group">
    <?php if (is_array($group)) : ?>
        <?php foreach ($group as $row) : ?>
            <?php
            $group_title = $row['group_title'];
            $group_id = sanitize_title($group_title); 
            ?>
            <div id="<?php echo $group_id; ?>" class="group-content">
                <div class="container">
                    <div class="content_title">
                        <?php
                        $group_description = $row['group_description'];
                        $group_buttons_text = $row['group_buttons_text'];
                        $group_buttons_link = $row['group_buttons_link'];
                        ?>
                        <?php if ($group_title) : ?>
                            <h1 class="title"><?php echo $group_title ?></h1>
                        <?php endif ?>
                        <?php if ($group_description) : ?>
                            <p class="description"><?php echo $group_description ?></p>
                        <?php endif ?>
                        <?php if($group_buttons_text):  ?>
                            <button class="buttons"><?php echo $group_buttons_text?>
                        <?php endif ?>
                        <?php if($group_buttons_link):  ?>
                            <?php echo $group_buttons_link?>
                        <?php endif ?>
                            </button>
                    </div>
                    <div class="blocksq">
                    <?php $group_block = $row['group_block'];
                        if (is_array($group_block)) {
                        foreach ($group_block as $block_row) :
                            $group_block_img = $block_row['group_block_img'];
                            $group_block_title = $block_row['group_block_title'];?>    
                            <div class="block">
                                <?php if ($group_block_img) : ?>
                                    <img src="<?php echo $group_block_img ?>">
                                <?php endif; ?>
                                <?php if ($group_block_title) : ?>
                                    <h2 class="title"><?php echo $group_block_title ?></h2>
                                <?php endif; ?>    
                            </div>
                        <?php endforeach;
                        } ?>
                    </div>
                    <div class="swiper mySwiper">
                        <div class="swiper-wrapper">
                        <?php
                            $group_block = $row['group_block'];
                            if (is_array($group_block)) {
                                foreach ($group_block as $block_row) :
                                    $group_block_img = $block_row['group_block_img'];
                                    $group_block_title = $block_row['group_block_title'];?>
                        
                                <div class="swiper-slide">
                                    <?php if ($group_block_img) : ?>
                                        <img src="<?php echo $group_block_img ?>">
                                    <?php endif; ?>
                                    <?php if ($group_block_title) : ?>
                                        <h2 class="title"><?php echo $group_block_title ?></h2>
                                    <?php endif; ?>    
                                </div>
                            <?php endforeach;
                            } ?>
                        </div>
                        <div class="swiper-pagination"></div>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    <?php endif; ?>
</section>