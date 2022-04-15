<?php
	$slider = $args[1];
?>
<section class="slider-logos">
	<div class="title-row">
		<?php echo $args[0]?>
	</div>
	<div class="slider-center">
		<?php
            foreach ($slider as $item){
                if(!empty($item['alt'])){
                    $alt = $item['alt'];
                }else{
                    $alt = $item['filename'];
                }
                ?>
                    <div class="slider-center__item">
                        <div class="item__container">
                            <img src="<?php echo $item['url'];?>" alt="<?php echo $alt;?>" class="container__item-img">
                        </div>
                    </div>
                <?php
            }
        ?>
	</div>
</section>