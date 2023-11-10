<?php 

$slide = get_field('slide');
$img = $slide['img'];
$count = $slide['count'];
$text = $slide['text'];
$description = $slide['description'];?>

<div class="hero_line">
    <div class="container_line">
        <div class="slider_line">
            <div class="slider_line_content">
                <div class="slider_line_content-img">
                    <?php if($count):  ?>
                        <img src="<?php echo $img?>">
                    <?php endif ?>
                </div>
                <div class="slider_line_content_text">
                    <?php if($count):  ?>
                        <div class="counter">
                            <p class="count"><span id="counter"></span></p><p class="text"><?php echo $text?></p>
                        </div>
                    <?php endif ?>
                    <?php if($description):  ?>
                        <p class="description"><?php echo $description?></p>
                    <?php endif ?>
                </div>
            </div>
            <div class="swiper line">
                <div class="swiper-wrapper">
                    <?php $slide_line = $slide['slide_line'];
                    foreach ($slide_line as $row) {
                        $icon = $row['icon'];
                        $currency = $row['currency'];?>
                        <div class="swiper-slide">
                            <?php if ($icon): ?>
                                <img src="<?php echo $icon; ?>">
                            <?php endif; ?>
                            <?php if ($currency): ?>
                                <img class="currency" src="<?php echo $currency; ?>">
                            <?php endif; ?>
                        </div>
                    <?php
                    }
                    ?>
                </div>
                <div class="swiper-pagination"></div>
            </div>
        </div>
    </div>
</div>
<script>
    document.addEventListener('DOMContentLoaded', function() {
    var counterElement = document.getElementById('counter');
    var count = 0;
    var targetCount = <?php echo $count?>;
    var increment = 1;
    var intervalTime = 1; // Время в миллисекундах между каждым увеличением

    var interval = setInterval(function() {
        if (count >= targetCount) {
        clearInterval(interval);
        } else {
        count += increment;
        counterElement.innerText = count;
        }
    }, intervalTime);
    });
</script>



<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

<script>
  var swiper = new Swiper(".line", {
    slidesPerView: 4,
    spaceBetween: 10,
    centeredSlides: true,
    
    spaceBetween: 20, // Опциональное расстояние между слайдами
    breakpoints: {
        0: {
            slidesPerView: 2, // Для ширины экрана менее 425px листаем по одному слайду
            slidesPerGroup: 1, // По одному слайду при ширине экрана менее 425px
        },
        510: {
            slidesPerView: 3, 
        },
        680: {
            slidesPerView: 4, 
        },
        850: {
            slidesPerView: 5, 
        },
        1050: {
            slidesPerView: 6, 
        },
        1190: {
            slidesPerView: 4, 
        },
    },
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },

    loop: true, // Опция для создания эффекта бесконечной ленты
    autoplay: {
        delay: 3000, // Задержка между автоматическим переключением слайдов (в миллисекундах)
    },
})

  
</script>