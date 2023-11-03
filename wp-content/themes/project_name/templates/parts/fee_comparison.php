<?php 
$table = get_field('table');
$title_table = $table['title_table'];
$table_head = $table['table_head'];

$first_column = $table_head['first_column'];
$second_column = $table_head['second_column'];
$third_column = $table_head['third_column'];?>

<div class="comparison_matrixs">
<div class="container">
    <?php if($title_table):  ?>
        <h2 class="title"><?php echo $title_table?></h2>
    <?php endif ?>
    <div class="table_block">
        <?php if($first_column || $second_column || $third_column):?>
        <div class="pp">
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
            <div class="table_head_two">
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
        </div>
        <?php endif ?>
        <div class="table_body">
            <?php $table_body = $table['table_body'];;
                foreach ($table_body as $row) :
                    $col_1 = $row['col_1'];
                    $col_2 = $row['col_2'];
                    $col_3 = $row['col_3'];

                    $text_col_1 = $row['col_1']['text'];
                    $green_text_col_1 = $row['col_1']['green_text'];

                    $text_col_2 = $row['col_2']['text'];
                    $green_text_col_2 = $row['col_2']['green_text'];

                    $text_col_3 = $row['col_3']['text'];
                    $green_text_col_3 = $row['col_3']['green_text'];?>
                    
                    <div class="table_row">
                        <div class="table_col">
                            <?php if($green_text_col_1):  ?>
                                <span class="table_col-green_text"><?php echo $text_col_1?></span>
                            <?php else:?>
                                <span class="table_col-none_color"><?php echo $text_col_1?></span>
                            <?php endif;?>
                        </div>
                        <div class="table_col">
                            <?php if($green_text_col_2):  ?>
                                <span class="table_col-green_text"><?php echo $text_col_2?></span>
                            <?php else:?>
                                <span class="table_col-none_color"><?php echo $text_col_2?></span>
                            <?php endif;?>
                        </div>
                        <div class="table_col">
                            <?php if($green_text_col_3):  ?>
                                <span class="table_col-green_text"><?php echo $text_col_3?></span>
                            <?php else:?>
                                <span class="table_col-none_color"><?php echo $text_col_3?></span>
                            <?php endif;?>
                        </div>
                    </div>
            <?php endforeach;?>
        </div>
    </div>
</div>
</div>