<?php 

$top_block_text = get_sub_field('top_block_text');
$charts_title = get_sub_field('charts_title');
$charts = get_sub_field('charts');

?>
<?php if($charts ): ?>
<section id="treatment" class="section treatment">
    <div class="container">
        <div class="row">
            <div class="col-lg-9 offset-lg-3">

                <?php if($top_block_text ): ?>
                    <div class="treatment__notice text--color--white bg--blue appear fade-up d-1">
                        <img class="treatment__notice__img" src="<?php echo get_template_directory_uri();?>/images/axspa-numbers/treatment-bg.svg" alt="#">
                        <div class="content-block treatment__notice__text">
                            <?php echo $top_block_text ; ?>
                        </div>
                    </div>
                <?php endif; ?>
                
                <div class="treatment__stat">

                    <?php if($charts_title): ?>
                        <h2 class="subtitle subtitle--md text--center treatment__stat__title appear fade-up d-1"><?php echo $charts_title; ?></h2>
                    <?php endif; ?>

                    <?php if($charts ): ?>
                        <ul class="treatment__stat__list appear fade-up d-1">
                            <?php foreach($charts as $chart): 
                                $percent = $chart['percents'];
                                $title = $chart['title'];
                                $text = $chart['text'];
                                if($percent):
                                    ?>
                                    <li class="treatment__stat__item">
                                        <div class="circle-chart">
                                            <svg class="circle-chart__round" viewbox="0 0 184 184" width="184" height="184" xmlns="http://www.w3.org/2000/svg">
                                                <circle class="circle-chart__round__bg" stroke="#F0F1F1" stroke-width="18" fill="none" cx="92" cy="92" r="82" />
                                                <circle class="circle-chart__round__circle" stroke="#80C3BF" stroke-width="18" data-total="<?php echo 2*82*pi();?>" data-length="<?php echo $percent*(2*82*pi())/100;?>" stroke-dasharray="0,<?php echo 2*82*pi();?>"  fill="none" cx="92" cy="92" r="82" />
                                            </svg>
                                            <h3 class="circle-chart__title text--color--primary"><span class="counter"  data-counter="<?php echo $percent; ?>"></span>%</h3>
                                        </div>
                                        <div class="treatment__stat__text text--center">

                                            <?php if($title): ?>
                                                <h3 class="treatment__stat__text__title text--18 text-h-24"><?php echo $title; ?></h3>
                                            <?php endif; ?>

                                            <?php if($text): ?>
                                                <p class="treatment__stat__text__notice text--14"><?php echo $text; ?></p>
                                            <?php endif; ?>
                                            
                                        </div>
                                    </li>
                                <?php endif; ?>
                            <?php endforeach; ?>
                        </ul>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</section>
<?php endif; ?>