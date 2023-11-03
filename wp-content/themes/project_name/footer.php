<?php wp_footer(); 

use App\Base\Bootstrap;
    $footer = get_field('footer', 'options');
    $copyright = $footer['copyright'];
    $right_links = $footer['right_links'];
    $footer_section_title = $footer['footer_section_title'];
    $footer_section_description = $footer['footer_section_description'];
    $links_block = $footer['links_block'];
?>
<section class="footer_section">
    <div class="container">
        <div class="footer_section-block">
            <div class="footer_section-block_left">
                <h2 class="title"><?php echo $footer['footer_section_title']?></h2>
                <p class="description"><?php echo $footer['footer_section_description']?></p>
                <?php echo do_shortcode('[contact-form-7 id="14c1fd0" title="Контактная форма 1" class="custom-form"]'); ?>                <div class="thnx" id="thnx">
                    <button class="thnx-button">
                        <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 28 28" fill="none">
                            <path d="M4.6665 14L6.99984 11.6667L11.6673 16.3334L20.9998 7L23.3332 9.33333L11.6673 21L4.6665 14Z" fill="#35F9A9"/>
                        </svg>
                        Thank you for signing up!
                    </button>
                </div>
            </div>
            <div class="footer_section-block_right">
                <div class="about">
                    <p class="about-title">About</p>
                    <div class="about-list">
                        <?php Bootstrap::bootstrap_footer_col_1_menu(); ?>     
                    </div>
                </div>
                <div class="about">
                    <p class="about-title">Use</p>
                    <div class="about-list">
                        <?php Bootstrap::bootstrap_footer_col_2_menu(); ?>     
                    </div>
                </div>
                <div class="about">
                    <p class="about-title">Learn</p>
                    <div class="about-list">
                        <?php Bootstrap::bootstrap_footer_col_3_menu(); ?>     
                    </div>
                </div>
                <div class="about_links">
                    <?php if (is_array($links_block)) : ?>
                    <?php foreach ($links_block as $row) : ?>
                        <div class="links">
                        <?php
                        $icon = $row['icon'];
                        $link = $row['link'];?>
                        <?php if ($icon) : ?>
                            <img class="icon" src = "<?php echo $icon?>">
                            <?php if ($link) : ?>
                                <p class="title"><?php echo $link ?></p>
                            <?php endif ?>
                        <?php endif ?>   
                        </div>
                    <?php endforeach; ?>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</section>
<footer>
    <div class="container">
        <div class="content">
            <div class="content-left">
                <div class="logo">
                    <?php echo wp_get_attachment_image($footer['logo'],'full'); ?>
                </div>
                <div class="copyright">
                    <p><?php echo $copyright?></p> 
                </div>
            </div>
            <div class="content-right">
                <?php
                if (is_array($right_links)) {
                foreach ($right_links as $row) :
                    $links = $row['links'];
                    $icon = $row['icon'];
                    if ($link) : ?>
                        <a href="<?php echo esc_url($links); ?>">
                    <?php endif;
                    if ($icon) : ?>
                        <img src="<?php echo esc_url($icon); ?>">
                    <?php endif;
                    if ($link) : ?>
                        </a>
                    <?php endif;
                endforeach;}?>
            </div>
        </div>
    </div>
</footer>
</body>
</html>
