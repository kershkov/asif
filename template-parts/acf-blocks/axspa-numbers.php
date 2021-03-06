<?php 

$customBgColor = 'background-color:' . get_sub_field('custom_background_color') . ";";

$title = get_sub_field('title');
$titleAccent = get_sub_field('title_accent');
$label = get_sub_field('section_label');

$total_content = get_sub_field('total_content');
$total_number = get_sub_field('total_number');
$total_number_title = get_sub_field('total_number_title');
$total_number_text = get_sub_field('total_number_text');

$females_text = get_sub_field('females_text');
$females_subtext = get_sub_field('females_subtext');
$males_text = get_sub_field('males_text');
$males_subtext = get_sub_field('males_subtext');

$age_range = get_sub_field('age_range');
$age_range_subtext = get_sub_field('age_range_subtext');

$button = get_sub_field('button');
?>


<?php if($total_number): ?>
<section id="axspa-numbers" class="section bg--grey axspa-numbers" <?php if ($customBgColor) : echo 'style="' . $customBgColor . '"'; endif;?>>
	<div class="container appear fade-up d-1">
        <div class="row">
                <?php if ($title || $titleAccent) : ?>
                    <div class="axspa__title col-12 <?php if($label) : echo 'have-label' ; else : echo 'no-label';endif;?>">
                        <h2><?php echo $title; ?>
                            <?php if ($titleAccent) : ?>
                                <span><?php echo $titleAccent; ?>
                            <?php endif;?>
                        </h2>
                        <div class="axspa__label"><?php echo $label;?></div>
                    </div>
                <?php endif;?>
        </div>
        <div class="row axspa-numbers__result">
            <div class="col-xl-9">
            <?php if( $total_content) : ?>
                <div class="axspa-numbers__totalContent text-block">
                    <?php echo $total_content;?>
                </div>
            <?php endif;?>
            </div>
	    	<div class="col-12 col-lg-auto axspa-numbers__result__col">
                
                <h5 class="counter axspa-numbers__result__num" data-counter="<?php echo $total_number; ?>" data-integer="true">0</h5>
                
                <?php if($total_number_title): ?>
                    <h4 class="subtitle axspa-numbers__result__title"><?php echo $total_number_title; ?></h4>
                <?php endif; ?>
                <?php if($total_number_text): ?>
                    <span class="text--14 axspa-numbers__result__notice"><?php echo $total_number_text; ?></span>
                <?php endif; ?>
			</div>
    		<div class="col-12 col-lg-auto ml-lg-auto axspa-numbers__result__gender__wrapper">
                <?php if($females_text): ?>
                    <div class="axspa-numbers__result__gender">
                        <div class="axspa-numbers__result__gender__icon">
                            <img src="<?php echo get_template_directory_uri();?>/images/icons/icon-female.svg" alt="#">
                        </div>
                        <p class="axspa-numbers__result__gender__text text--24"><?php echo $females_text; ?> <span class="text--12"><?php echo $females_subtext; ?></span></p>
                    </div>
                <?php endif; ?>
                <?php if($males_text): ?>
                    <div class="axspa-numbers__result__gender">
                        <div class="axspa-numbers__result__gender__icon">
                            <img src="<?php echo get_template_directory_uri();?>/images/icons/icon-male.svg" alt="#">
                        </div>
                        <p class="axspa-numbers__result__gender__text text--24"><?php echo $males_text; ?> <span class="text--12"><?php echo $males_subtext; ?></span></p>
                    </div>
                <?php endif; ?>
            </div>
            <?php if($age_range): ?>
                <div class="col-12 col-lg-3">
                    <div class="axspa-numbers__result__age">
                        <p class="axspa-numbers__result__age__text text--24"><b>Age range:</b> <br/> <?php echo $age_range; ?></p>
                    </div>
                    <?php if($age_range_subtext): ?>
                        <p class="axspa-numbers__result__age__notice text--center text--12"><?php echo $age_range_subtext; ?></p>
                    <?php endif; ?>
                </div>
            <?php endif; ?>
	    </div>

        <div class="divider"></div>
        
        <?php if($button):
            $link_url = $button['url'];
            $link_title = $button['title'];
            $link_target = $button['target'] ? $button['target'] : '_self';
            ?>
            <div class="axspa-numbers__btn text--center">
                <a href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>" class="button">
                    <span class="button__inner">
                        <span class="button__text"><?php echo esc_html( $link_title ); ?></span>
                        <span class="button__icon"><img src="<?php echo get_template_directory_uri();?>/images/icons/icon-arrow-right.svg" alt="#"></span>
                    </span>
                </a>
            </div>
        <?php endif; ?>
	</div>
</section>
<?php endif; ?>