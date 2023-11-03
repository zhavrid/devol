<?php 
$title = get_field('title');
$description = get_field('description');
$button_link = get_field('button_link');
$button_text = get_field('button_text');
$blocks = get_field('blocks');
$info = get_field('info');
?>

<div class="overview">
    <div class="container">
        <?php if($title):  ?>
            <h2 class="title"><?php echo $title?></h2>
        <?php endif ?>
        <?php if($description):  ?>
            <p class="description"><?php echo $description?></p>
        <?php endif ?>
        <?php if($button_text):  ?>
            <button class="button"><?php echo $button_text?>
        <?php endif ?>
        <?php if($button_links):  ?>
            <?php echo $button_links?>
        <?php endif ?>
            </button>
        <div class="blocks_overview">
            <?php if (is_array($blocks)) : ?>
            <?php foreach ($blocks as $row) : ?>
                <div class="block"><?php
                    $title = $row['title'];
                    $descrition = $row['descrition'];
                    $graph = $row['graph'];
                    $text = $row['text'];?>
                    <div class="block_top">
                        <?php if ($title) : ?>
                            <h2 class="title_top"><?php echo $title ?></h2>
                        <?php endif ?>
                        <div class="descrition">
                            <?php if ($descrition) : ?>
                                <?php echo $descrition ?>
                            <?php endif ?>
                        </div>
                    </div>
                    <div class="graph">
                        <?php if ($graph) : ?>
                            <img src = "<?php echo $graph?>">
                        <?php endif ?>    
                    </div>
                    <div class="text">
                        <?php if ($text) : ?>
                            <?php echo $text ?>
                        <?php endif ?>
                    </div>
                </div>
            <?php endforeach; ?>
            <?php endif; ?>
        </div>
        <?php if($info):  ?>
            <p class="info"><?php echo $info?></p>
        <?php endif ?>
    </div>
</div>