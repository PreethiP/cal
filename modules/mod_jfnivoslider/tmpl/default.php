<?php
/**
 * JF NivoSlider
 * @copyright (C) 2011-2012 JoomForest.com - All rights reserved!
*/
// no direct access
defined('_JEXEC') or die;
?>

<div class="custom<?php echo $moduleclass_sfx; ?>">
<?php if($jfnivo_slide_1 != '' || $jfnivo_slide_2 != '' || $jfnivo_slide_3 != '' || $jfnivo_slide_4!= '' || $jfnivo_slide_5 != '' || $jfnivo_slide_6 != '' || $jfnivo_slide_7 != '' && $jfnivo_slide_8 != '' || $jfnivo_slide_9 != '' || $jfnivo_slide_10 != '') { ?>
	<div id="jf_nivoslider_wrapper" class="slider-wrapper theme-default">
		<div id="jf_nivoslider" class="nivoSlider">
				<?php if($jfnivo_slide_1 != '') { ?>
					<?php if($jfnivo_slide_1_link != '') { ?><a href="#" target="<?php echo $jfnivo_slide_1_link_target; ?>"><?php } ?>
						<img src="<?php echo $jfnivo_slide_1; ?>" title="<?php echo $jfnivo_slide_1_title; ?>" />
					<?php if($jfnivo_slide_1_link != '') { ?></a><?php } ?>
				<?php } ?>
				<?php if($jfnivo_slide_2 != '') { ?>
					<?php if($jfnivo_slide_2_link != '') { ?><a href="#" target="<?php echo $jfnivo_slide_2_link_target; ?>"><?php } ?>
						<img src="<?php echo $jfnivo_slide_2; ?>" title="<?php echo $jfnivo_slide_2_title; ?>" />
					<?php if($jfnivo_slide_2_link != '') { ?></a><?php } ?>
				<?php } ?>
				<?php if($jfnivo_slide_3 != '') { ?>
					<?php if($jfnivo_slide_3_link != '') { ?><a href="#" target="<?php echo $jfnivo_slide_3_link_target; ?>"><?php } ?>
						<img src="<?php echo $jfnivo_slide_3; ?>" title="<?php echo $jfnivo_slide_3_title; ?>" />
					<?php if($jfnivo_slide_3_link != '') { ?></a><?php } ?>
				<?php } ?>
				<?php if($jfnivo_slide_4 != '') { ?>
					<?php if($jfnivo_slide_4_link != '') { ?><a href="#" target="<?php echo $jfnivo_slide_4_link_target; ?>"><?php } ?>
						<img src="<?php echo $jfnivo_slide_4; ?>" title="<?php echo $jfnivo_slide_4_title; ?>" />
					<?php if($jfnivo_slide_4_link != '') { ?></a><?php } ?>
				<?php } ?>
				<?php if($jfnivo_slide_5 != '') { ?>
					<?php if($jfnivo_slide_5_link != '') { ?><a href="#" target="<?php echo $jfnivo_slide_5_link_target; ?>"><?php } ?>
						<img src="<?php echo $jfnivo_slide_5; ?>" title="<?php echo $jfnivo_slide_5_title; ?>" />
					<?php if($jfnivo_slide_5_link != '') { ?></a><?php } ?>
				<?php } ?>
				<?php if($jfnivo_slide_6 != '') { ?>
					<?php if($jfnivo_slide_6_link != '') { ?><a href="#" target="<?php echo $jfnivo_slide_6_link_target; ?>"><?php } ?>
						<img src="<?php echo $jfnivo_slide_6; ?>" title="<?php echo $jfnivo_slide_6_title; ?>" />
					<?php if($jfnivo_slide_6_link != '') { ?></a><?php } ?>
				<?php } ?>
				<?php if($jfnivo_slide_7 != '') { ?>
					<?php if($jfnivo_slide_7_link != '') { ?><a href="#" target="<?php echo $jfnivo_slide_7_link_target; ?>"><?php } ?>
						<img src="<?php echo $jfnivo_slide_7; ?>" title="<?php echo $jfnivo_slide_7_title; ?>" />
					<?php if($jfnivo_slide_7_link != '') { ?></a><?php } ?>
				<?php } ?>
				<?php if($jfnivo_slide_8 != '') { ?>
					<?php if($jfnivo_slide_8_link != '') { ?><a href="#" target="<?php echo $jfnivo_slide_8_link_target; ?>"><?php } ?>
						<img src="<?php echo $jfnivo_slide_8; ?>" title="<?php echo $jfnivo_slide_8_title; ?>" />
					<?php if($jfnivo_slide_8_link != '') { ?></a><?php } ?>
				<?php } ?>
				<?php if($jfnivo_slide_9 != '') { ?>
					<?php if($jfnivo_slide_9_link != '') { ?><a href="#" target="<?php echo $jfnivo_slide_9_link_target; ?>"><?php } ?>
						<img src="<?php echo $jfnivo_slide_9; ?>" title="<?php echo $jfnivo_slide_9_title; ?>" />
					<?php if($jfnivo_slide_9_link != '') { ?></a><?php } ?>
				<?php } ?>
				<?php if($jfnivo_slide_10 != '') { ?>
					<?php if($jfnivo_slide_10_link != '') { ?><a href="#" target="<?php echo $jfnivo_slide_10_link_target; ?>"><?php } ?>
						<img src="<?php echo $jfnivo_slide_10; ?>" title="<?php echo $jfnivo_slide_10_title; ?>" />
					<?php if($jfnivo_slide_10_link != '') { ?></a><?php } ?>
				<?php } ?>
		</div>
	</div>
<?php } ?>
</div>

<script type="text/javascript" src="<?php echo $assets_path; ?>jquery.nivo.slider.pack.js"></script>
<script type="text/javascript">(function($){$(window).load(function(){$('#jf_nivoslider').nivoSlider({effect:'<?php echo $jfNivoEffect; ?>',slices:<?php echo $jfNivoSlices;?>,boxCols:<?php echo $jfNivoBoxCols;?>,boxRows:<?php echo $jfNivoBoxRows;?>,animSpeed:<?php echo $jfNivoAnimSpeed;?>,pauseTime:<?php echo $jfNivoPauseTime;?>,directionNav:<?php echo $jfNivoDirectionNav;?>,controlNav:<?php echo $jfNivoControlNav;?>,pauseOnHover:<?php echo $jfNivoPauseOnHover;?>,randomStart:<?php echo $jfNivoRandomStart;?>})})})(jQuery);</script>