<?php 
$title = get_field('title');
$blocks = get_field('blocks');?>

<div class="container">
    <div class="media_kit_fonts">
        <?php if($title):  ?>
            <h2 class="title"><?php echo $title?></h2>
        <?php endif ?>
    </div>
    <div class="media_kit_fonts-blocks">
    <?php if (is_array($blocks)) : ?>
        <?php foreach ($blocks as $rows) :
        $title = $rows['title'];
        $sub_text = $rows['sub_text'];
        $sub_icon = $rows['sub_icon'];?>
        <div class="block">
            <?php if($title):  ?>
                <h2 class="title"><?php echo $title?></h2>
            <?php endif; 
            if($sub_text):  ?>        
            <button class="button">
                <?php endif ?>
                <a class="buttons" href="<?php echo esc_url($sub_text['url']); ?>"
                    target="<?php echo esc_attr($sub_text['target'] ? $sub_text['target'] : '_self'); ?>"
                    title="<?php echo esc_html($sub_text['title']); ?>">
                    <span><?php echo esc_html($sub_text['title']); ?></span>
                </a>
                <?php if($sub_icon):  ?>
                <img class="arrow" src="<?php echo $sub_icon?>">
                <?php endif ?>
            </button>
        </div>
        <?php endforeach; ?>
    <?php endif; ?>                          
    </div>
</div>