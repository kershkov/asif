<?php 

$title = "axSpA in";
$titleAccent = "numbers";
$label = "3. axspa in numbers";
?>

<section id="axspa-numbers" class="section bg--grey axspa-numbers">
	<div class="container">
        <div class="row">
                <?php if ($title || $titleAccent) : ?>
                    <div class="axspa__title accordion__title col-12">
                        <h2><?php echo $title; ?>
                            <?php if ($titleAccent) : ?>
                                <span><?php echo $titleAccent; ?>
                            <?php endif;?>
                        </h2>
                        <div class="axspa__label"><?php echo $label;?></div>
                    </div>
                <?php endif;?>
	    		<!-- <div class="col-12 col-lg-9">

	    			<div class="text-block">
                        <h1>axSpA in <span class="text--bg--secondary">numbers</span></h1>
		    			<p><b>Understanding the impact of axSpA on people’s lives</b></p>
                        <p>The data generated by IMAS demonstrates how living with axSpA can affect almost every part of a person’s life, from physical and emotional wellbeing, to decisions about education, work and relationships.</p>
		    		</div>
	    		</div>
	    		<div class="col-12 col-lg-3">
	    			<h3 class="section__title">3. axspa in numbers</h3>
	    		</div> -->

	    </div>

        <div class="row axspa-numbers__result">
	    	<div class="col-12 col-lg-6 axspa-numbers__result__col">
                <h5 class="axspa-numbers__result__num">2846</h5>
                <h4 class="subtitle axspa-numbers__result__title">Total number of participants in europe</h4>
                <span class="text--14 axspa-numbers__result__notice">The following results are exclusively from the European dataset.</span>
			</div>
    		<div class="col-12 col-lg-3">
	    		<div class="axspa-numbers__result__gender">
                    <div class="axspa-numbers__result__gender__icon">
                        <img src="<?php echo get_template_directory_uri();?>/images/icons/icon-female.svg" alt="#">
                    </div>
                    <p class="axspa-numbers__result__gender__text text--24">1,746 females <span class="text--12">(61.4%)</span></p>
                </div>
                <div class="axspa-numbers__result__gender">
                    <div class="axspa-numbers__result__gender__icon">
                        <img src="<?php echo get_template_directory_uri();?>/images/icons/icon-male.svg" alt="#">
                    </div>
                    <p class="axspa-numbers__result__gender__text text--24">1,100 males <span class="text--12">(38.7%)</span></p>
                </div>
	    	</div>
            <div class="col-12 col-lg-3">
	    		<div class="axspa-numbers__result__age">
                    <p class="axspa-numbers__result__age__text text--24"><b>Age range:</b> <br/> 18 – 85 years</p>
                </div>
                <p class="axspa-numbers__result__age__notice text--center text--12">mean = 44 years</p>
	    	</div>
	    </div>

        <div class="divider"></div>

        <div class="axspa-numbers__btn text--center">
            <a href="#" class="button">
                <span class="button__inner">
                    <span class="button__text">Dive into the numbers</span>
                    <span class="button__icon"><img src="<?php echo get_template_directory_uri();?>/images/icons/icon-arrow-right.svg" alt="#"></span>
                </span>
            </a>
        </div>
	</div>
</section>