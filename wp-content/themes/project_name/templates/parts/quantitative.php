<?php 
$quantitative_title = get_field('title');
$quantitative_description = get_field('description');
$quantitative_button_text = get_field('button_text');
$quantitative_button_link = get_field('button_link');?>

<div class="container">
    <div class="quantitative_block">
        <?php if($quantitative_title):  ?>
            <h2 class="title"><?php echo $quantitative_title?></h2>
        <?php endif ?>
        <?php if($quantitative_description):  ?>
            <p class="description"><?php echo $quantitative_description?></p>
        <?php endif ?>
        <?php if($quantitative_button_text):  ?>
            <button class="button"><?php echo $quantitative_button_text?>
        <?php endif ?>
        <?php if($quantitative_button_link):  ?>
            <?php echo $quantitative_button_link?>
        <?php endif ?>
            </button>
    </div>
</div>