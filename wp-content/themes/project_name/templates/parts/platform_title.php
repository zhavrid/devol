<?php 
$platform_links = get_field('platform_links');
$platform_links_text = get_field('platform_links_text');
$platform_page = get_field('platform_page');
$title = get_field('title');
$content_left = get_field('content_left');
$content_right = get_field('content_right');
$button_text = get_field('content_button_text');
$button_link = get_field('content_button_link');?>

<div class="container">
<div class="analytics_title">
    <div class="link_page">
    <?php if ($platform_links) : ?>
        <a class="analytics_links" href="<?php echo esc_url($platform_links); ?>">
        <?php endif;
        if ($platform_links_text) : ?>
            <p class="trade"><?php echo ($platform_links_text); ?></p>
        <?php endif;
        if ($platform_links) : ?>
        </a>
        <?php endif;?>
        <span class="line">
            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 22 22" fill="none">
            <path d="M14.8996 0.75L10.0719 21.25H7.09961L11.9273 0.75H14.8996Z" fill="white" fill-opacity="0.5"/>
            </svg>
        </span>
        <?php if($platform_page):  ?>
            <p class="analytics_page"><?php echo $platform_page?></p>
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
        <?php if($button_text):  ?>
            <button class="button"><?php echo $button_text?>
            <?php endif ?>
            <?php if($button_link):  ?>
                <?php echo $button_link?>
            <?php endif ?>
        </button>
        </div>
        <div class="contant_right">
        <?php if($content_right):  ?>
            <p class="right"><?php echo $content_right?></p>
        <?php endif ?>
        </div>
    </div>
</div>
</div>