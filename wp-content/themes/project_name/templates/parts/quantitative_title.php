<?php 
$quantitative_links = get_field('quantitative_links');
$quantitative_links_text = get_field('quantitative_links_text');
$quantitative_page = get_field('quantitative_page');
$title = get_field('title');
$content_left = get_field('content_left');
$content_right = get_field('content_right');?>

<div class="container">
<div class="analytics_title">
    <div class="link_page">
    <?php if ($quantitative_links) : ?>
        <a class="analytics_links" href="<?php echo esc_url($quantitative_links); ?>">
        <?php endif;
        if ($quantitative_links_text) : ?>
            <p class="trade"><?php echo ($quantitative_links_text); ?></p>
        <?php endif;
        if ($quantitative_links) : ?>
        </a>
        <?php endif;?>
        <span class="line">
            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 22 22" fill="none">
            <path d="M14.8996 0.75L10.0719 21.25H7.09961L11.9273 0.75H14.8996Z" fill="white" fill-opacity="0.5"/>
            </svg>
        </span>
        <?php if($quantitative_page):  ?>
            <p class="analytics_page"><?php echo $quantitative_page?></p>
        <?php endif ?>
    </div>
    <?php if($title):  ?>
        <h1 class="title"><?php echo $title?></h1>
    <?php endif ?>
    <div class="content">
        <div class="contant_left">
        <?php if($content_left):  ?>
            <p class="left"><?php echo $content_left?></p>
        <?php endif ?>
        </div>
        <div class="contant_right">
        <?php if($content_right):  ?>
            <?php echo $content_right?>
        <?php endif ?>
        </div>
    </div>
</div>
</div>