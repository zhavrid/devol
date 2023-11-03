<?php 
$privacy_block = get_field('privacy_block');?>

<section class="privacy_block">
    <div class="container">
    <?php if ($privacy_block) : ?>
        <div class="privacy_block_container"><?php echo $privacy_block ?></div>
    <?php endif; ?>
    </div>
</section>