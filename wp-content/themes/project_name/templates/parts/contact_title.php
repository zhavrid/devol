<?php 
$title = get_field('title');?>

<div class="container">
    <?php if ($title) : ?>
        <h2 class="title"><?php echo $title ?></h2>
    <?php endif ?>
</div>