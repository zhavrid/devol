<?php 
$blocks = get_field('blocks');?>

<div class="container">
    <div class="blocks_resources">
        <?php if (is_array($blocks)) : ?>
        <?php foreach ($blocks as $row) : ?>
            <div class="block">
            <?php
                $title = $row['title'];
                $description = $row['description'];
                $button_text = $row['button_text'];
                $button_link = $row['button_link'];
                $icon = $row['icon'];?>
                <div class="content_right">
                    <?php if ($title) : ?>
                        <h2 class="title"><?php echo $title ?></h2>
                    <?php endif ?>    
                    <?php if ($description) : ?>
                        <p class="description"><?php echo $description ?></p>
                    <?php endif ?>
                    <?php if($button_text):  ?>
                        <button class="button_resources"><?php echo $button_text?>
                        <?php endif ?>
                        <?php if($button_link):  ?>
                            <?php echo $button_link?>
                        <?php endif ?>
                    </button>
                </div>
                <div class="content_left">
                    <?php if($icon):  ?>
                        <img src="<?php echo $icon ?>">
                    <?php endif ?>
                </div>
            </div>
        <?php endforeach; ?>
        <?php endif; ?>
    </div>
</div>