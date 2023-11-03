<?php 
$table = get_field('table');
$title_table = $table['title_table'];
$table_head = $table['table_head'];

$first_column = $table_head['first_column'];
$second_column = $table_head['second_column'];
$third_column = $table_head['third_column'];

$date = get_field('date');
?>
<div class="container">
<div class="comparison_matrix">
    <?php if($title_table):  ?>
        <h2 class="title"><?php echo $title_table?></h2>
    <?php endif ?>
    <div class="table_block">
        <?php if($first_column || $second_column || $third_column):?>
            <div class="table_head">
                <div class="column">
                    <p class="column-title"><?php echo $first_column?></p>
                </div>
                <div class="column">
                    <p class="column-title"><?php echo $second_column?></p>
                </div>
                <div class="column">
                    <p class="column-title"><?php echo $third_column?></p>
                </div>
            </div>
        <?php endif ?>
        <div class="table_body">
            <?php $table_body = $table['table_body'];;
                foreach ($table_body as $row) :
                    $col_1 = $row['col_1'];
                    $col_2 = $row['col_2'];
                    $col_3 = $row['col_3'];

                    $text_col_2 = $row['col_2']['text'];
                    $icon_col_2 = $row['col_2']['icon'];
                    $blue_text_col_2 = $row['col_2']['blue_text'];

                    $text_col_3 = $row['col_3']['text'];
                    $icon_col_3 = $row['col_3']['icon'];
                    $blue_text_col_3 = $row['col_3']['blue_text'];?>
                    <div class="table_row">
                        <div class="table_col">
                            <?php if($col_1):  ?>
                                <p class="table_col-1"><?php echo $col_1?></p>
                            <?php endif;?>
                        </div>
                        <div class="table_col">
                            <?php if($icon_col_2):  ?>
                                <img class="table_col-icon" src="<?php echo $icon_col_2?>">
                            <?php endif;?>
                            <?php if($blue_text_col_2):  ?>
                                <span class="table_col-text_blue"><?php echo $text_col_2?></span>
                            <?php else:?>
                                <span class="table_col-none_blue"><?php echo $text_col_2?></span>
                            <?php endif;?>
                        </div>
                        <div class="table_col">
                            <?php if($icon_col_3):  ?>
                                <img class="table_col-icon" src="<?php echo $icon_col_3?>">
                            <?php endif;?>
                            <?php if($blue_text_col_3):  ?>
                                <span class="table_col-text_blue"><?php echo $text_col_3?></span>
                            <?php else:?>
                                <span class="table_col-none_blue"><?php echo $text_col_3?></span>
                            <?php endif;?>
                        </div>
                    </div>
            <?php endforeach;?>
        </div>
    </div>
    <?php if($date):  ?>
        <p class="date"><?php echo $date?></p>
    <?php endif ?>
</div>
</div>