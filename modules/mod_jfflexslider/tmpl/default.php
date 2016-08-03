<?php
/**
 * JF FlexSlider
 * @copyright (C) 2011-2012 JoomForest.com - All rights reserved!
*/
// no direct access
defined('_JEXEC') or die;
?>

<div class="custom<?php echo $moduleclass_sfx; ?>">

	<div class="jf-flexslider">
		<ul class="slides">
			<?php if($jfflex_slide_1_image_1 != '') { ?>
				<li>
					<div class="flex-slide-wrap">
						<?php if($jfflex_slide_1_title != '') { ?>
							<div class="jf-flex-caption jf-flex-title" style="<?php echo $jfflex_slide_1_title_style; ?>"><?php echo $jfflex_slide_1_title; ?></div>
						<?php } ?>
						
						<?php if($jfflex_slide_1_small_btn_text != '') { ?>
							<a class="jf-flex-caption jf-flex-small-btn" href="<?php echo $jfflex_slide_1_small_btn_link; ?>" target="<?php echo $jfflex_slide_1_small_btn_target; ?>" style="<?php echo $jfflex_slide_1_small_btn_style; ?>"><?php echo $jfflex_slide_1_small_btn_text; ?></a>
						<?php } ?>
						
						<?php if($jfflex_slide_1_big_btn_text != '') { ?>
							<a class="jf-flex-caption jf-flex-big-btn" href="<?php echo $jfflex_slide_1_big_btn_link; ?>" target="<?php echo $jfflex_slide_1_big_btn_target; ?>" style="<?php echo $jfflex_slide_1_big_btn_style; ?>"><?php echo $jfflex_slide_1_big_btn_text; ?></a>
						<?php } ?>
						<div class="jf-flex-illustr">
							<img src="<?php echo $jfflex_slide_1_image_1; ?>" />
							<?php if($jfflex_slide_1_image_2 != '') { ?><img src="<?php echo $jfflex_slide_1_image_2; ?>" class="secondary" /><?php } ?>
							<?php if($jfflex_slide_1_image_3 != '') { ?><img src="<?php echo $jfflex_slide_1_image_3; ?>" class="secondary" /><?php } ?>
							<?php if($jfflex_slide_1_image_4 != '') { ?><img src="<?php echo $jfflex_slide_1_image_4; ?>" class="secondary" /><?php } ?>
						</div>
					</div>
				</li>
			<?php } ?>
			<?php if($jfflex_slide_2_image_1 != '') { ?>
				<li>
					<div class="flex-slide-wrap">
						<?php if($jfflex_slide_2_title != '') { ?>
							<div class="jf-flex-caption jf-flex-title" style="<?php echo $jfflex_slide_2_title_style; ?>"><?php echo $jfflex_slide_2_title; ?></div>
						<?php } ?>
						
						<?php if($jfflex_slide_2_small_btn_text != '') { ?>
							<a class="jf-flex-caption jf-flex-small-btn" href="<?php echo $jfflex_slide_2_small_btn_link; ?>" target="<?php echo $jfflex_slide_2_small_btn_target; ?>" style="<?php echo $jfflex_slide_2_small_btn_style; ?>"><?php echo $jfflex_slide_2_small_btn_text; ?></a>
						<?php } ?>
						
						<?php if($jfflex_slide_2_big_btn_text != '') { ?>
							<a class="jf-flex-caption jf-flex-big-btn" href="<?php echo $jfflex_slide_2_big_btn_link; ?>" target="<?php echo $jfflex_slide_2_big_btn_target; ?>" style="<?php echo $jfflex_slide_2_big_btn_style; ?>"><?php echo $jfflex_slide_2_big_btn_text; ?></a>
						<?php } ?>
						<div class="jf-flex-illustr">
							<img src="<?php echo $jfflex_slide_2_image_1; ?>" />
							<?php if($jfflex_slide_2_image_2 != '') { ?><img src="<?php echo $jfflex_slide_2_image_2; ?>" class="secondary" /><?php } ?>
							<?php if($jfflex_slide_2_image_3 != '') { ?><img src="<?php echo $jfflex_slide_2_image_3; ?>" class="secondary" /><?php } ?>
							<?php if($jfflex_slide_2_image_4 != '') { ?><img src="<?php echo $jfflex_slide_2_image_4; ?>" class="secondary" /><?php } ?>
						</div>
					</div>
				</li>
			<?php } ?>
			<?php if($jfflex_slide_3_image_1 != '') { ?>
				<li>
					<div class="flex-slide-wrap">
						<?php if($jfflex_slide_3_title != '') { ?>
							<div class="jf-flex-caption jf-flex-title" style="<?php echo $jfflex_slide_3_title_style; ?>"><?php echo $jfflex_slide_3_title; ?></div>
						<?php } ?>
						
						<?php if($jfflex_slide_3_small_btn_text != '') { ?>
							<a class="jf-flex-caption jf-flex-small-btn" href="<?php echo $jfflex_slide_3_small_btn_link; ?>" target="<?php echo $jfflex_slide_3_small_btn_target; ?>" style="<?php echo $jfflex_slide_3_small_btn_style; ?>"><?php echo $jfflex_slide_3_small_btn_text; ?></a>
						<?php } ?>
						
						<?php if($jfflex_slide_3_big_btn_text != '') { ?>
							<a class="jf-flex-caption jf-flex-big-btn" href="<?php echo $jfflex_slide_3_big_btn_link; ?>" target="<?php echo $jfflex_slide_3_big_btn_target; ?>" style="<?php echo $jfflex_slide_3_big_btn_style; ?>"><?php echo $jfflex_slide_3_big_btn_text; ?></a>
						<?php } ?>
						<div class="jf-flex-illustr">
							<img src="<?php echo $jfflex_slide_3_image_1; ?>" />
							<?php if($jfflex_slide_3_image_2 != '') { ?><img src="<?php echo $jfflex_slide_3_image_2; ?>" class="secondary" /><?php } ?>
							<?php if($jfflex_slide_3_image_3 != '') { ?><img src="<?php echo $jfflex_slide_3_image_3; ?>" class="secondary" /><?php } ?>
							<?php if($jfflex_slide_3_image_4 != '') { ?><img src="<?php echo $jfflex_slide_3_image_4; ?>" class="secondary" /><?php } ?>
						</div>
					</div>
				</li>
			<?php } ?>
			<?php if($jfflex_slide_4_image_1 != '') { ?>
				<li>
					<div class="flex-slide-wrap">
						<?php if($jfflex_slide_4_title != '') { ?>
							<div class="jf-flex-caption jf-flex-title" style="<?php echo $jfflex_slide_4_title_style; ?>"><?php echo $jfflex_slide_4_title; ?></div>
						<?php } ?>
						
						<?php if($jfflex_slide_4_small_btn_text != '') { ?>
							<a class="jf-flex-caption jf-flex-small-btn" href="<?php echo $jfflex_slide_4_small_btn_link; ?>" target="<?php echo $jfflex_slide_4_small_btn_target; ?>" style="<?php echo $jfflex_slide_4_small_btn_style; ?>"><?php echo $jfflex_slide_4_small_btn_text; ?></a>
						<?php } ?>
						
						<?php if($jfflex_slide_4_big_btn_text != '') { ?>
							<a class="jf-flex-caption jf-flex-big-btn" href="<?php echo $jfflex_slide_4_big_btn_link; ?>" target="<?php echo $jfflex_slide_4_big_btn_target; ?>" style="<?php echo $jfflex_slide_4_big_btn_style; ?>"><?php echo $jfflex_slide_4_big_btn_text; ?></a>
						<?php } ?>
						<div class="jf-flex-illustr">
							<img src="<?php echo $jfflex_slide_4_image_1; ?>" />
							<?php if($jfflex_slide_4_image_2 != '') { ?><img src="<?php echo $jfflex_slide_4_image_2; ?>" class="secondary" /><?php } ?>
							<?php if($jfflex_slide_4_image_3 != '') { ?><img src="<?php echo $jfflex_slide_4_image_3; ?>" class="secondary" /><?php } ?>
							<?php if($jfflex_slide_4_image_4 != '') { ?><img src="<?php echo $jfflex_slide_4_image_4; ?>" class="secondary" /><?php } ?>
						</div>
					</div>
				</li>
			<?php } ?>
			<?php if($jfflex_slide_5_image_1 != '') { ?>
				<li>
					<div class="flex-slide-wrap">
						<?php if($jfflex_slide_5_title != '') { ?>
							<div class="jf-flex-caption jf-flex-title" style="<?php echo $jfflex_slide_5_title_style; ?>"><?php echo $jfflex_slide_5_title; ?></div>
						<?php } ?>
						
						<?php if($jfflex_slide_5_small_btn_text != '') { ?>
							<a class="jf-flex-caption jf-flex-small-btn" href="<?php echo $jfflex_slide_5_small_btn_link; ?>" target="<?php echo $jfflex_slide_5_small_btn_target; ?>" style="<?php echo $jfflex_slide_5_small_btn_style; ?>"><?php echo $jfflex_slide_5_small_btn_text; ?></a>
						<?php } ?>
						
						<?php if($jfflex_slide_5_big_btn_text != '') { ?>
							<a class="jf-flex-caption jf-flex-big-btn" href="<?php echo $jfflex_slide_5_big_btn_link; ?>" target="<?php echo $jfflex_slide_5_big_btn_target; ?>" style="<?php echo $jfflex_slide_5_big_btn_style; ?>"><?php echo $jfflex_slide_5_big_btn_text; ?></a>
						<?php } ?>
						<div class="jf-flex-illustr">
							<img src="<?php echo $jfflex_slide_5_image_1; ?>" />
							<?php if($jfflex_slide_5_image_2 != '') { ?><img src="<?php echo $jfflex_slide_5_image_2; ?>" class="secondary" /><?php } ?>
							<?php if($jfflex_slide_5_image_3 != '') { ?><img src="<?php echo $jfflex_slide_5_image_3; ?>" class="secondary" /><?php } ?>
							<?php if($jfflex_slide_5_image_4 != '') { ?><img src="<?php echo $jfflex_slide_5_image_4; ?>" class="secondary" /><?php } ?>
						</div>
					</div>
				</li>
			<?php } ?>
			<?php if($jfflex_slide_6_image_1 != '') { ?>
				<li>
					<div class="flex-slide-wrap">
						<?php if($jfflex_slide_7_title != '') { ?>
							<div class="jf-flex-caption jf-flex-title" style="<?php echo $jfflex_slide_7_title_style; ?>"><?php echo $jfflex_slide_7_title; ?></div>
						<?php } ?>
						
						<?php if($jfflex_slide_7_small_btn_text != '') { ?>
							<a class="jf-flex-caption jf-flex-small-btn" href="<?php echo $jfflex_slide_7_small_btn_link; ?>" target="<?php echo $jfflex_slide_7_small_btn_target; ?>" style="<?php echo $jfflex_slide_7_small_btn_style; ?>"><?php echo $jfflex_slide_7_small_btn_text; ?></a>
						<?php } ?>
						
						<?php if($jfflex_slide_7_big_btn_text != '') { ?>
							<a class="jf-flex-caption jf-flex-big-btn" href="<?php echo $jfflex_slide_7_big_btn_link; ?>" target="<?php echo $jfflex_slide_7_big_btn_target; ?>" style="<?php echo $jfflex_slide_7_big_btn_style; ?>"><?php echo $jfflex_slide_7_big_btn_text; ?></a>
						<?php } ?>
						<div class="jf-flex-illustr">
							<img src="<?php echo $jfflex_slide_6_image_1; ?>" />
							<?php if($jfflex_slide_6_image_2 != '') { ?><img src="<?php echo $jfflex_slide_6_image_2; ?>" class="secondary" /><?php } ?>
							<?php if($jfflex_slide_6_image_3 != '') { ?><img src="<?php echo $jfflex_slide_6_image_3; ?>" class="secondary" /><?php } ?>
							<?php if($jfflex_slide_6_image_4 != '') { ?><img src="<?php echo $jfflex_slide_6_image_4; ?>" class="secondary" /><?php } ?>
						</div>
					</div>
				</li>
			<?php } ?>
			<?php if($jfflex_slide_7_image_1 != '') { ?>
				<li>
					<div class="flex-slide-wrap">
						<?php if($jfflex_slide_7_title != '') { ?>
							<div class="jf-flex-caption jf-flex-title" style="<?php echo $jfflex_slide_7_title_style; ?>"><?php echo $jfflex_slide_7_title; ?></div>
						<?php } ?>
						
						<?php if($jfflex_slide_7_small_btn_text != '') { ?>
							<a class="jf-flex-caption jf-flex-small-btn" href="<?php echo $jfflex_slide_7_small_btn_link; ?>" target="<?php echo $jfflex_slide_7_small_btn_target; ?>" style="<?php echo $jfflex_slide_7_small_btn_style; ?>"><?php echo $jfflex_slide_7_small_btn_text; ?></a>
						<?php } ?>
						
						<?php if($jfflex_slide_7_big_btn_text != '') { ?>
							<a class="jf-flex-caption jf-flex-big-btn" href="<?php echo $jfflex_slide_7_big_btn_link; ?>" target="<?php echo $jfflex_slide_7_big_btn_target; ?>" style="<?php echo $jfflex_slide_7_big_btn_style; ?>"><?php echo $jfflex_slide_7_big_btn_text; ?></a>
						<?php } ?>
						<div class="jf-flex-illustr">
							<img src="<?php echo $jfflex_slide_7_image_1; ?>" />
							<?php if($jfflex_slide_7_image_2 != '') { ?><img src="<?php echo $jfflex_slide_7_image_2; ?>" class="secondary" /><?php } ?>
							<?php if($jfflex_slide_7_image_3 != '') { ?><img src="<?php echo $jfflex_slide_7_image_3; ?>" class="secondary" /><?php } ?>
							<?php if($jfflex_slide_7_image_4 != '') { ?><img src="<?php echo $jfflex_slide_7_image_4; ?>" class="secondary" /><?php } ?>
						</div>
					</div>
				</li>
			<?php } ?>
			<?php if($jfflex_slide_8_image_1 != '') { ?>
				<li>
					<div class="flex-slide-wrap">
						<?php if($jfflex_slide_8_title != '') { ?>
							<div class="jf-flex-caption jf-flex-title" style="<?php echo $jfflex_slide_8_title_style; ?>"><?php echo $jfflex_slide_8_title; ?></div>
						<?php } ?>
						
						<?php if($jfflex_slide_8_small_btn_text != '') { ?>
							<a class="jf-flex-caption jf-flex-small-btn" href="<?php echo $jfflex_slide_8_small_btn_link; ?>" target="<?php echo $jfflex_slide_8_small_btn_target; ?>" style="<?php echo $jfflex_slide_8_small_btn_style; ?>"><?php echo $jfflex_slide_8_small_btn_text; ?></a>
						<?php } ?>
						
						<?php if($jfflex_slide_8_big_btn_text != '') { ?>
							<a class="jf-flex-caption jf-flex-big-btn" href="<?php echo $jfflex_slide_8_big_btn_link; ?>" target="<?php echo $jfflex_slide_8_big_btn_target; ?>" style="<?php echo $jfflex_slide_8_big_btn_style; ?>"><?php echo $jfflex_slide_8_big_btn_text; ?></a>
						<?php } ?>
						<div class="jf-flex-illustr">
							<img src="<?php echo $jfflex_slide_8_image_1; ?>" />
							<?php if($jfflex_slide_8_image_2 != '') { ?><img src="<?php echo $jfflex_slide_8_image_2; ?>" class="secondary" /><?php } ?>
							<?php if($jfflex_slide_8_image_3 != '') { ?><img src="<?php echo $jfflex_slide_8_image_3; ?>" class="secondary" /><?php } ?>
							<?php if($jfflex_slide_8_image_4 != '') { ?><img src="<?php echo $jfflex_slide_8_image_4; ?>" class="secondary" /><?php } ?>
						</div>
					</div>
				</li>
			<?php } ?>
			<?php if($jfflex_slide_9_image_1 != '') { ?>
				<li>
					<div class="flex-slide-wrap">
						<?php if($jfflex_slide_9_title != '') { ?>
							<div class="jf-flex-caption jf-flex-title" style="<?php echo $jfflex_slide_9_title_style; ?>"><?php echo $jfflex_slide_9_title; ?></div>
						<?php } ?>
						
						<?php if($jfflex_slide_9_small_btn_text != '') { ?>
							<a class="jf-flex-caption jf-flex-small-btn" href="<?php echo $jfflex_slide_9_small_btn_link; ?>" target="<?php echo $jfflex_slide_9_small_btn_target; ?>" style="<?php echo $jfflex_slide_9_small_btn_style; ?>"><?php echo $jfflex_slide_9_small_btn_text; ?></a>
						<?php } ?>
						
						<?php if($jfflex_slide_9_big_btn_text != '') { ?>
							<a class="jf-flex-caption jf-flex-big-btn" href="<?php echo $jfflex_slide_9_big_btn_link; ?>" target="<?php echo $jfflex_slide_9_big_btn_target; ?>" style="<?php echo $jfflex_slide_9_big_btn_style; ?>"><?php echo $jfflex_slide_9_big_btn_text; ?></a>
						<?php } ?>
						<div class="jf-flex-illustr">
							<img src="<?php echo $jfflex_slide_9_image_1; ?>" />
							<?php if($jfflex_slide_9_image_2 != '') { ?><img src="<?php echo $jfflex_slide_9_image_2; ?>" class="secondary" /><?php } ?>
							<?php if($jfflex_slide_9_image_3 != '') { ?><img src="<?php echo $jfflex_slide_9_image_3; ?>" class="secondary" /><?php } ?>
							<?php if($jfflex_slide_9_image_4 != '') { ?><img src="<?php echo $jfflex_slide_9_image_4; ?>" class="secondary" /><?php } ?>
						</div>
					</div>
				</li>
			<?php } ?>
			<?php if($jfflex_slide_10_image_1 != '') { ?>
				<li>
					<div class="flex-slide-wrap">
						<?php if($jfflex_slide_10_title != '') { ?>
							<div class="jf-flex-caption jf-flex-title" style="<?php echo $jfflex_slide_10_title_style; ?>"><?php echo $jfflex_slide_10_title; ?></div>
						<?php } ?>
						
						<?php if($jfflex_slide_10_small_btn_text != '') { ?>
							<a class="jf-flex-caption jf-flex-small-btn" href="<?php echo $jfflex_slide_10_small_btn_link; ?>" target="<?php echo $jfflex_slide_10_small_btn_target; ?>" style="<?php echo $jfflex_slide_10_small_btn_style; ?>"><?php echo $jfflex_slide_10_small_btn_text; ?></a>
						<?php } ?>
						
						<?php if($jfflex_slide_10_big_btn_text != '') { ?>
							<a class="jf-flex-caption jf-flex-big-btn" href="<?php echo $jfflex_slide_10_big_btn_link; ?>" target="<?php echo $jfflex_slide_10_big_btn_target; ?>" style="<?php echo $jfflex_slide_10_big_btn_style; ?>"><?php echo $jfflex_slide_10_big_btn_text; ?></a>
						<?php } ?>
						<div class="jf-flex-illustr">
							<img src="<?php echo $jfflex_slide_10_image_1; ?>" />
							<?php if($jfflex_slide_10_image_2 != '') { ?><img src="<?php echo $jfflex_slide_10_image_2; ?>" class="secondary" /><?php } ?>
							<?php if($jfflex_slide_10_image_3 != '') { ?><img src="<?php echo $jfflex_slide_10_image_3; ?>" class="secondary" /><?php } ?>
							<?php if($jfflex_slide_10_image_4 != '') { ?><img src="<?php echo $jfflex_slide_10_image_4; ?>" class="secondary" /><?php } ?>
						</div>
					</div>
				</li>
			<?php } ?>
		</ul>
	</div>
</div>

<script type="text/javascript" src="<?php echo $assets_path; ?>jquery.flexslider-min-2.1.js"></script>
<script type="text/javascript" src="<?php echo $assets_path; ?>jf_flex.js"></script>
<script type="text/javascript">var jf_flex_slide_spd_par=<?php echo $jfFlexAnimSpd;?>,jf_flex_img_dur_par=<?php echo $jfFlexInImgAnimSpd;?>,jf_flex_controlNav=<?php echo $jfFlexControlNav;?>,jf_flex_directNav=<?php echo $jfFlexDirctNav;?>,jf_flex_pauseOnHover=<?php echo $jfFlexPauseOnHov;?>,jf_flex_keyboard=<?php echo $jfFlexKeyboard;?>,jf_flex_mousewheel=<?php echo $jfFlexMousewheel;?>,jf_flex_touch=<?php echo $jfFlexTouch;?>,jf_flex_direction="<?php echo $jfFlexSlideDirect; ?>",jf_flex_reverse=<?php echo $jfFlexReverse;?>,jf_flex_randomize=<?php echo $jfFlexRandomize;?>;</script>