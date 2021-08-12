<?php 

$title = get_sub_field('title');
$titleAccent = get_sub_field('title_accent');
$label = get_sub_field('section_label');

$countries = get_sub_field('countries');

$bottom_logo = get_sub_field('bottom_logo');
$bottom_box_big_text = get_sub_field('bottom_box_big_text');
$bottom_box_text = get_sub_field('bottom_box_text');

?>

<section id="involved" class="section section--bg bg--blue involved">
    <div class="container">

        <div class="row involved__header">
            <?php if ($title || $titleAccent) : ?>
                    <div class="axspa__title axspa__title--light accordion__title col-12">
                        <h2><?php echo $title; ?>
                            <?php if ($titleAccent) : ?>
                                <span><?php echo $titleAccent; ?>
                            <?php endif;?>
                        </h2>
                        <div class="axspa__label"><?php echo $label;?></div>
                    </div>
                <?php endif;?>
        </div>

        <div class="involved__map">
            <img class="involved__map__bg" src="<?php echo get_template_directory_uri();?>/images/maps/map-involved.png" alt="#">
            <img class="involved__map__points" src="<?php echo get_template_directory_uri();?>/images/maps/map-involved.svg" alt="#">
            <ul class="involved__list">
                <?php if($countries['united_states_content']): ?>
                    <li class="involved__item">
                        <div class="involved__item__inner">
                            <div class="involved__item__close"><img src="<?php echo get_template_directory_uri();?>/images/icons/icon-cross.svg" alt="#"></div>
                            <div class="text-block">
                                <?php echo $countries['united_states_content'];?>
                            </div>
                        </div>
                    </li>
                <?php endif; ?>
                <?php if($countries['brazil_content']): ?>
                    <li class="involved__item">
                        <div class="involved__item__inner">
                            <div class="involved__item__close"><img src="<?php echo get_template_directory_uri();?>/images/icons/icon-cross.svg" alt="#"></div>
                            <div class="text-block">
                                <?php echo $countries['brazil_content'];?>
                            </div>
                        </div>
                    </li>
                <?php endif; ?>
                <?php if($countries['canada_content']): ?>
                    <li class="involved__item">
                        <div class="involved__item__inner">
                            <div class="involved__item__close"><img src="<?php echo get_template_directory_uri();?>/images/icons/icon-cross.svg" alt="#"></div>
                            <div class="text-block">
                                <?php echo $countries['canada_content'];?>
                            </div>
                        </div>
                    </li>
                <?php endif; ?>
                <?php if($countries['spain_content']): ?>
                    <li class="involved__item">
                        <div class="involved__item__inner">
                            <div class="involved__item__close"><img src="<?php echo get_template_directory_uri();?>/images/icons/icon-cross.svg" alt="#"></div>
                            <div class="text-block">
                                <?php echo $countries['spain_content'];?>
                            </div>
                        </div>
                    </li>
                <?php endif; ?>
                <?php if($countries['united_kingdom_content']): ?>
                    <li class="involved__item">
                        <div class="involved__item__inner">
                            <div class="involved__item__close"><img src="<?php echo get_template_directory_uri();?>/images/icons/icon-cross.svg" alt="#"></div>
                            <div class="text-block">
                                <?php echo $countries['united_kingdom_content'];?>
                            </div>
                        </div>
                    </li>
                <?php endif; ?>
                <?php if($countries['turkey_content']): ?>
                    <li class="involved__item">
                        <div class="involved__item__inner">
                            <div class="involved__item__close"><img src="<?php echo get_template_directory_uri();?>/images/icons/icon-cross.svg" alt="#"></div>
                            <div class="text-block">
                                <?php echo $countries['turkey_content'];?>
                            </div>
                        </div>
                    </li>
                <?php endif; ?>
                <?php if($countries['sweden_content']): ?>
                    <li class="involved__item">
                        <div class="involved__item__inner">
                            <div class="involved__item__close"><img src="<?php echo get_template_directory_uri();?>/images/icons/icon-cross.svg" alt="#"></div>
                            <div class="text-block">
                                <?php echo $countries['sweden_content'];?>
                            </div>
                        </div>
                    </li>
                <?php endif; ?>
                <?php if($countries['russia_content']): ?>
                    <li class="involved__item">
                        <div class="involved__item__inner">
                            <div class="involved__item__close"><img src="<?php echo get_template_directory_uri();?>/images/icons/icon-cross.svg" alt="#"></div>
                            <div class="text-block">
                                <?php echo $countries['russia_content'];?>
                            </div>
                        </div>
                    </li>
                <?php endif; ?>
                <?php if($countries['china_content']): ?>
                    <li class="involved__item">
                        <div class="involved__item__inner">
                            <div class="involved__item__close"><img src="<?php echo get_template_directory_uri();?>/images/icons/icon-cross.svg" alt="#"></div>
                            <div class="text-block">
                                <?php echo $countries['china_content'];?>
                            </div>
                        </div>
                    </li>
                <?php endif; ?>
                <?php if($countries['south_africa_content']): ?>
                    <li class="involved__item">
                        <div class="involved__item__inner">
                            <div class="involved__item__close"><img src="<?php echo get_template_directory_uri();?>/images/icons/icon-cross.svg" alt="#"></div>
                            <div class="text-block">
                                <?php echo $countries['south_africa_content'];?>
                            </div>
                        </div>
                    </li>
                <?php endif; ?>
                <?php if($countries['taiwan_content']): ?>
                    <li class="involved__item">
                        <div class="involved__item__inner">
                            <div class="involved__item__close"><img src="<?php echo get_template_directory_uri();?>/images/icons/icon-cross.svg" alt="#"></div>
                            <div class="text-block">
                                <?php echo $countries['taiwan_content'];?>
                            </div>
                        </div>
                    </li>
                <?php endif; ?>
            </ul>
        </div>

        <div class="row involved__footer">
            <?php if($bottom_logo): ?>
                <div class="col-12 col-lg-4 offset-lg-4">
                    <img class="involved__footer__logo" src="<?php echo $bottom_logo['url']; ?>" alt="#">
                </div>
            <?php endif; ?>

            <?php if($bottom_box_big_text || $bottom_box_text): ?>
                <div class="col-12 col-lg-10 offset-lg-1">
                    <div class="involved__footer__results text--center">
                        <h4 class="h1"> <?php echo $bottom_box_big_text; ?> <span class="h4"><?php echo $bottom_box_text; ?></span></h4>
                    </div>
                </div>
            <?php endif; ?>
        </div>

    </div>
</section>