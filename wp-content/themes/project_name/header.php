<?php 
  use App\Base\Bootstrap;

  $header = get_field('header', 'options');
  $header_button = $header['header_button'];
  $general = get_field('general', 'options');
  $left_menu = $general['left_menu_links'];
  $acces_icon = $header['acces_icon'];
  $acces_text = $header['acces_text'];
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <title><?php wp_title();?></title>
    <meta charset="<?php bloginfo('charset'); ?>"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
</head>

<body  <?php body_class(); ?>>

<header>
    <div class="container">
        <nav class="header_nav">
            <div class="header_nav-left">
                <div class="burger">
                    <div class="burger_line line1"></div>
                    <div class="burger_line line2"></div>
                    <div class="burger_line line3"></div>
                </div>
                <div class="logo">
                    <?php echo wp_get_attachment_image($header['header_logo'],'full'); ?>
                </div>
            </div>
            <div class="header_nav-right">
                <div class="menu"> 
                    <?php Bootstrap::bootstrap_main_menu(); ?>                    
                </div>
                <div class="block-buttons">
                    <?php if (is_array($header_button)) : 
                    foreach ($header_button as $rows) : 
                        $header_button_text = $rows['header_button_text'];
                        if ($header_button_text) : ?>
                            <a class="buttons" href="<?php echo esc_url($header_button_text['url']); ?>"
                            target="<?php echo esc_attr($header_button_text['target'] ? $header_button_text['target'] : '_self'); ?>"
                            title="<?php echo esc_html($header_button_text['title']); ?>">
                                <span><?php echo esc_html($header_button_text['title']); ?></span>
                            </a>
                        <?php endif; 
                    endforeach; 
                    endif; ?>
                </div>
            </div>
            <div class="nav-links">
                <div class="container">
                    <div class="logo_burger">
                        <?php echo wp_get_attachment_image($header['header_burger_logo'],'full'); ?>
                    </div>
                    <div class="burger_content">
                        <?php if (is_array($left_menu)) :
                        foreach ($left_menu as $rows) :
                            $left_menu_text = $rows['left_menu_text'];
                            $left_menu_link = $rows['left_menu_link'];
                                if ($left_menu_text) : ?>
                                <div class="ss">
                                <ul> 
                                <li><a href="<?php echo esc_url($left_menu_text['url']); ?>">
                                    <span><?php echo esc_html($left_menu_text['title']); ?></span>
                                    <div class="burger_content_second">
                                        <?php if (is_array($left_menu_link)) :
                                        foreach ($left_menu_link as $row) :
                                            $left_menu_link_nested = $row['left_menu_link_nested'];
                                            if ($left_menu_link_nested) : ?>
                                            <ul>
                                                <li><a href="<?php echo esc_url($left_menu_link_nested['url']); ?>">
                                                    <span><?php echo esc_html($left_menu_link_nested['title']); ?></span>
                                                </a></li>
                                            </ul>
                                            <?php endif;
                                        endforeach;
                                        endif; ?>
                                    </div>
                                    </a>
                                    </li>
                                </ul>
                                </div>
                                <?php endif;
                            endforeach;
                        endif; ?>
                        <div class="acces"><?php
                            if ($acces_icon) : ?>
                                <img src="
                                <?php echo esc_html($acces_icon) ?>"><?php
                            endif; 
                            if ($acces_text) : ?>
                                <p class="acces_text"> <?php echo $acces_text; ?></p><?php
                            endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </div>
    <div class="overlay" id="overlay"></div>
</header>