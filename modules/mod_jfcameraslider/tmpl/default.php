<?php
/**
 * JF CameraSlider
 * @copyright (C) 2011-2012 JoomForest.com - All rights reserved!
*/
// no direct access
defined('_JEXEC') or die;
?>
<div class="custom<?php echo $moduleclass_sfx; ?>">

<?php if($jfcamera_slide_1 != '' || $jfcamera_slide_2 != '' || $jfcamera_slide_3 != '' || $jfcamera_slide_4!= '' || $jfcamera_slide_5 != '' || $jfcamera_slide_6 != '' || $jfcamera_slide_7 != '' && $jfcamera_slide_8 != '' || $jfcamera_slide_9 != '' || $jfcamera_slide_10 != '') { ?>
	<div class="camera_wrap camera_black_skin" id="jf_cameraslider_wrap">
			<?php if($jfcamera_slide_1 != '') { ?>
				<div data-thumb="<?php echo $base; ?><?php echo $jfcamera_slide_1_thumb; ?>" data-src="<?php echo $base; ?><?php echo $jfcamera_slide_1; ?>">
					<?php if($jfcamera_slide_1_caption_title != '' || $jfcamera_slide_1_caption_descr != '' || $jfcamera_slide_1_caption_btn_text != '') { ?>
						<div class="camera_caption <?php echo $jfcamera_slide_1_caption_effect; ?>" style="margin-top:<?php echo $jfcamera_slide_1_caption_posT; ?>;margin-left:<?php echo $jfcamera_slide_1_caption_posL; ?>;margin-bottom:<?php echo $jfcamera_slide_1_caption_posB; ?>;margin-right:<?php echo $jfcamera_slide_1_caption_posR; ?>">
								<?php if($jfcamera_slide_1_caption_title != '') { ?>
									<div class="jf_cam_title"><?php echo $jfcamera_slide_1_caption_title; ?></div>
								<?php } ?>
								<?php if($jfcamera_slide_1_caption_descr != '') { ?>
									<div class="jf_cam_descr"><?php echo $jfcamera_slide_1_caption_descr; ?></div>
								<?php } ?>
								<?php if($jfcamera_slide_1_caption_btn_text != '') { ?>
									<a href="<?php echo $jfcamera_slide_1_caption_btn_link; ?>" target="<?php echo $jfcamera_slide_1_caption_btn_target; ?>" class="jf_cam_btn">
										<?php echo $jfcamera_slide_1_caption_btn_text; ?>
									</a>
								<?php } ?>
						</div>
					<?php } ?>
				</div>
			<?php } ?>
			<?php if($jfcamera_slide_2 != '') { ?>
				<div data-thumb="<?php echo $base; ?><?php echo $jfcamera_slide_2_thumb; ?>" data-src="<?php echo $base; ?><?php echo $jfcamera_slide_2; ?>">
					<?php if($jfcamera_slide_2_caption_title != '' || $jfcamera_slide_2_caption_descr != '' || $jfcamera_slide_2_caption_btn_text != '') { ?>
						<div class="camera_caption <?php echo $jfcamera_slide_2_caption_effect; ?>" style="margin-top:<?php echo $jfcamera_slide_2_caption_posT; ?>;margin-left:<?php echo $jfcamera_slide_2_caption_posL; ?>;margin-bottom:<?php echo $jfcamera_slide_2_caption_posB; ?>;margin-right:<?php echo $jfcamera_slide_2_caption_posR; ?>">
								<?php if($jfcamera_slide_2_caption_title != '') { ?>
									<div class="jf_cam_title"><?php echo $jfcamera_slide_2_caption_title; ?></div>
								<?php } ?>
								<?php if($jfcamera_slide_2_caption_descr != '') { ?>
									<div class="jf_cam_descr"><?php echo $jfcamera_slide_2_caption_descr; ?></div>
								<?php } ?>
								<?php if($jfcamera_slide_2_caption_btn_text != '') { ?>
									<a href="<?php echo $jfcamera_slide_2_caption_btn_link; ?>" target="<?php echo $jfcamera_slide_2_caption_btn_target; ?>" class="jf_cam_btn">
										<?php echo $jfcamera_slide_2_caption_btn_text; ?>
									</a>
								<?php } ?>
						</div>
					<?php } ?>
				</div>
			<?php } ?>
			<?php if($jfcamera_slide_3 != '') { ?>
				<div data-thumb="<?php echo $base; ?><?php echo $jfcamera_slide_3_thumb; ?>" data-src="<?php echo $base; ?><?php echo $jfcamera_slide_3; ?>">
					<?php if($jfcamera_slide_3_caption_title != '' || $jfcamera_slide_3_caption_descr != '' || $jfcamera_slide_3_caption_btn_text != '') { ?>
						<div class="camera_caption <?php echo $jfcamera_slide_3_caption_effect; ?>" style="margin-top:<?php echo $jfcamera_slide_3_caption_posT; ?>;margin-left:<?php echo $jfcamera_slide_3_caption_posL; ?>;margin-bottom:<?php echo $jfcamera_slide_3_caption_posB; ?>;margin-right:<?php echo $jfcamera_slide_3_caption_posR; ?>">
								<?php if($jfcamera_slide_3_caption_title != '') { ?>
									<div class="jf_cam_title"><?php echo $jfcamera_slide_3_caption_title; ?></div>
								<?php } ?>
								<?php if($jfcamera_slide_3_caption_descr != '') { ?>
									<div class="jf_cam_descr"><?php echo $jfcamera_slide_3_caption_descr; ?></div>
								<?php } ?>
								<?php if($jfcamera_slide_3_caption_btn_text != '') { ?>
									<a href="<?php echo $jfcamera_slide_3_caption_btn_link; ?>" target="<?php echo $jfcamera_slide_3_caption_btn_target; ?>" class="jf_cam_btn">
										<?php echo $jfcamera_slide_3_caption_btn_text; ?>
									</a>
								<?php } ?>
						</div>
					<?php } ?>
				</div>
			<?php } ?>
			<?php if($jfcamera_slide_4 != '') { ?>
				<div data-thumb="<?php echo $base; ?><?php echo $jfcamera_slide_4_thumb; ?>" data-src="<?php echo $base; ?><?php echo $jfcamera_slide_4; ?>">
					<?php if($jfcamera_slide_4_caption_title != '' || $jfcamera_slide_4_caption_descr != '' || $jfcamera_slide_4_caption_btn_text != '') { ?>
						<div class="camera_caption <?php echo $jfcamera_slide_4_caption_effect; ?>" style="margin-top:<?php echo $jfcamera_slide_4_caption_posT; ?>;margin-left:<?php echo $jfcamera_slide_4_caption_posL; ?>;margin-bottom:<?php echo $jfcamera_slide_4_caption_posB; ?>;margin-right:<?php echo $jfcamera_slide_4_caption_posR; ?>">
								<?php if($jfcamera_slide_4_caption_title != '') { ?>
									<div class="jf_cam_title"><?php echo $jfcamera_slide_4_caption_title; ?></div>
								<?php } ?>
								<?php if($jfcamera_slide_4_caption_descr != '') { ?>
									<div class="jf_cam_descr"><?php echo $jfcamera_slide_4_caption_descr; ?></div>
								<?php } ?>
								<?php if($jfcamera_slide_4_caption_btn_text != '') { ?>
									<a href="<?php echo $jfcamera_slide_4_caption_btn_link; ?>" target="<?php echo $jfcamera_slide_4_caption_btn_target; ?>" class="jf_cam_btn">
										<?php echo $jfcamera_slide_4_caption_btn_text; ?>
									</a>
								<?php } ?>
						</div>
					<?php } ?>
				</div>
			<?php } ?>
			<?php if($jfcamera_slide_5 != '') { ?>
				<div data-thumb="<?php echo $base; ?><?php echo $jfcamera_slide_5_thumb; ?>" data-src="<?php echo $base; ?><?php echo $jfcamera_slide_5; ?>">
					<?php if($jfcamera_slide_5_caption_title != '' || $jfcamera_slide_5_caption_descr != '' || $jfcamera_slide_5_caption_btn_text != '') { ?>
						<div class="camera_caption <?php echo $jfcamera_slide_5_caption_effect; ?>" style="margin-top:<?php echo $jfcamera_slide_5_caption_posT; ?>;margin-left:<?php echo $jfcamera_slide_5_caption_posL; ?>;margin-bottom:<?php echo $jfcamera_slide_5_caption_posB; ?>;margin-right:<?php echo $jfcamera_slide_5_caption_posR; ?>">
								<?php if($jfcamera_slide_5_caption_title != '') { ?>
									<div class="jf_cam_title"><?php echo $jfcamera_slide_5_caption_title; ?></div>
								<?php } ?>
								<?php if($jfcamera_slide_5_caption_descr != '') { ?>
									<div class="jf_cam_descr"><?php echo $jfcamera_slide_5_caption_descr; ?></div>
								<?php } ?>
								<?php if($jfcamera_slide_5_caption_btn_text != '') { ?>
									<a href="<?php echo $jfcamera_slide_5_caption_btn_link; ?>" target="<?php echo $jfcamera_slide_5_caption_btn_target; ?>" class="jf_cam_btn">
										<?php echo $jfcamera_slide_5_caption_btn_text; ?>
									</a>
								<?php } ?>
						</div>
					<?php } ?>
				</div>
			<?php } ?>
			<?php if($jfcamera_slide_6 != '') { ?>
				<div data-thumb="<?php echo $base; ?><?php echo $jfcamera_slide_6_thumb; ?>" data-src="<?php echo $base; ?><?php echo $jfcamera_slide_6; ?>">
					<?php if($jfcamera_slide_6_caption_title != '' || $jfcamera_slide_6_caption_descr != '' || $jfcamera_slide_6_caption_btn_text != '') { ?>
						<div class="camera_caption <?php echo $jfcamera_slide_6_caption_effect; ?>" style="margin-top:<?php echo $jfcamera_slide_6_caption_posT; ?>;margin-left:<?php echo $jfcamera_slide_6_caption_posL; ?>;margin-bottom:<?php echo $jfcamera_slide_6_caption_posB; ?>;margin-right:<?php echo $jfcamera_slide_6_caption_posR; ?>">
								<?php if($jfcamera_slide_6_caption_title != '') { ?>
									<div class="jf_cam_title"><?php echo $jfcamera_slide_6_caption_title; ?></div>
								<?php } ?>
								<?php if($jfcamera_slide_6_caption_descr != '') { ?>
									<div class="jf_cam_descr"><?php echo $jfcamera_slide_6_caption_descr; ?></div>
								<?php } ?>
								<?php if($jfcamera_slide_6_caption_btn_text != '') { ?>
									<a href="<?php echo $jfcamera_slide_6_caption_btn_link; ?>" target="<?php echo $jfcamera_slide_6_caption_btn_target; ?>" class="jf_cam_btn">
										<?php echo $jfcamera_slide_6_caption_btn_text; ?>
									</a>
								<?php } ?>
						</div>
					<?php } ?>
				</div>
			<?php } ?>
			<?php if($jfcamera_slide_7 != '') { ?>
				<div data-thumb="<?php echo $base; ?><?php echo $jfcamera_slide_7_thumb; ?>" data-src="<?php echo $base; ?><?php echo $jfcamera_slide_7; ?>">
					<?php if($jfcamera_slide_7_caption_title != '' || $jfcamera_slide_7_caption_descr != '' || $jfcamera_slide_7_caption_btn_text != '') { ?>
						<div class="camera_caption <?php echo $jfcamera_slide_7_caption_effect; ?>" style="margin-top:<?php echo $jfcamera_slide_7_caption_posT; ?>;margin-left:<?php echo $jfcamera_slide_7_caption_posL; ?>;margin-bottom:<?php echo $jfcamera_slide_7_caption_posB; ?>;margin-right:<?php echo $jfcamera_slide_7_caption_posR; ?>">
								<?php if($jfcamera_slide_7_caption_title != '') { ?>
									<div class="jf_cam_title"><?php echo $jfcamera_slide_7_caption_title; ?></div>
								<?php } ?>
								<?php if($jfcamera_slide_7_caption_descr != '') { ?>
									<div class="jf_cam_descr"><?php echo $jfcamera_slide_7_caption_descr; ?></div>
								<?php } ?>
								<?php if($jfcamera_slide_7_caption_btn_text != '') { ?>
									<a href="<?php echo $jfcamera_slide_7_caption_btn_link; ?>" target="<?php echo $jfcamera_slide_7_caption_btn_target; ?>" class="jf_cam_btn">
										<?php echo $jfcamera_slide_7_caption_btn_text; ?>
									</a>
								<?php } ?>
						</div>
					<?php } ?>
				</div>
			<?php } ?>
			<?php if($jfcamera_slide_8 != '') { ?>
				<div data-thumb="<?php echo $base; ?><?php echo $jfcamera_slide_8_thumb; ?>" data-src="<?php echo $base; ?><?php echo $jfcamera_slide_8; ?>">
					<?php if($jfcamera_slide_8_caption_title != '' || $jfcamera_slide_8_caption_descr != '' || $jfcamera_slide_8_caption_btn_text != '') { ?>
						<div class="camera_caption <?php echo $jfcamera_slide_8_caption_effect; ?>" style="margin-top:<?php echo $jfcamera_slide_8_caption_posT; ?>;margin-left:<?php echo $jfcamera_slide_8_caption_posL; ?>;margin-bottom:<?php echo $jfcamera_slide_8_caption_posB; ?>;margin-right:<?php echo $jfcamera_slide_8_caption_posR; ?>">
								<?php if($jfcamera_slide_8_caption_title != '') { ?>
									<div class="jf_cam_title"><?php echo $jfcamera_slide_8_caption_title; ?></div>
								<?php } ?>
								<?php if($jfcamera_slide_8_caption_descr != '') { ?>
									<div class="jf_cam_descr"><?php echo $jfcamera_slide_8_caption_descr; ?></div>
								<?php } ?>
								<?php if($jfcamera_slide_8_caption_btn_text != '') { ?>
									<a href="<?php echo $jfcamera_slide_8_caption_btn_link; ?>" target="<?php echo $jfcamera_slide_8_caption_btn_target; ?>" class="jf_cam_btn">
										<?php echo $jfcamera_slide_8_caption_btn_text; ?>
									</a>
								<?php } ?>
						</div>
					<?php } ?>
				</div>
			<?php } ?>
			<?php if($jfcamera_slide_9 != '') { ?>
				<div data-thumb="<?php echo $base; ?><?php echo $jfcamera_slide_9_thumb; ?>" data-src="<?php echo $base; ?><?php echo $jfcamera_slide_9; ?>">
					<?php if($jfcamera_slide_9_caption_title != '' || $jfcamera_slide_9_caption_descr != '' || $jfcamera_slide_9_caption_btn_text != '') { ?>
						<div class="camera_caption <?php echo $jfcamera_slide_9_caption_effect; ?>" style="margin-top:<?php echo $jfcamera_slide_9_caption_posT; ?>;margin-left:<?php echo $jfcamera_slide_9_caption_posL; ?>;margin-bottom:<?php echo $jfcamera_slide_9_caption_posB; ?>;margin-right:<?php echo $jfcamera_slide_9_caption_posR; ?>">
								<?php if($jfcamera_slide_9_caption_title != '') { ?>
									<div class="jf_cam_title"><?php echo $jfcamera_slide_9_caption_title; ?></div>
								<?php } ?>
								<?php if($jfcamera_slide_9_caption_descr != '') { ?>
									<div class="jf_cam_descr"><?php echo $jfcamera_slide_9_caption_descr; ?></div>
								<?php } ?>
								<?php if($jfcamera_slide_9_caption_btn_text != '') { ?>
									<a href="<?php echo $jfcamera_slide_9_caption_btn_link; ?>" target="<?php echo $jfcamera_slide_9_caption_btn_target; ?>" class="jf_cam_btn">
										<?php echo $jfcamera_slide_9_caption_btn_text; ?>
									</a>
								<?php } ?>
						</div>
					<?php } ?>
				</div>
			<?php } ?>
			<?php if($jfcamera_slide_10 != '') { ?>
				<div data-thumb="<?php echo $base; ?><?php echo $jfcamera_slide_10_thumb; ?>" data-src="<?php echo $base; ?><?php echo $jfcamera_slide_10; ?>">
					<?php if($jfcamera_slide_10_caption_title != '' || $jfcamera_slide_10_caption_descr != '' || $jfcamera_slide_10_caption_btn_text != '') { ?>
						<div class="camera_caption <?php echo $jfcamera_slide_10_caption_effect; ?>" style="margin-top:<?php echo $jfcamera_slide_10_caption_posT; ?>;margin-left:<?php echo $jfcamera_slide_10_caption_posL; ?>;margin-bottom:<?php echo $jfcamera_slide_10_caption_posB; ?>;margin-right:<?php echo $jfcamera_slide_10_caption_posR; ?>">
								<?php if($jfcamera_slide_10_caption_title != '') { ?>
									<div class="jf_cam_title"><?php echo $jfcamera_slide_10_caption_title; ?></div>
								<?php } ?>
								<?php if($jfcamera_slide_10_caption_descr != '') { ?>
									<div class="jf_cam_descr"><?php echo $jfcamera_slide_10_caption_descr; ?></div>
								<?php } ?>
								<?php if($jfcamera_slide_10_caption_btn_text != '') { ?>
									<a href="<?php echo $jfcamera_slide_10_caption_btn_link; ?>" target="<?php echo $jfcamera_slide_10_caption_btn_target; ?>" class="jf_cam_btn">
										<?php echo $jfcamera_slide_10_caption_btn_text; ?>
									</a>
								<?php } ?>
						</div>
					<?php } ?>
				</div>
			<?php } ?>
	</div>
<?php } ?>
</div>

<script type='text/javascript' src='<?php echo $assets_path; ?>jquery.mobile.customized.min.js'></script>
<script type='text/javascript' src='<?php echo $assets_path; ?>camera.min.js'></script> 
<script type="text/javascript">(function($){$(window).load(function(){$(function(){$('#jf_cameraslider_wrap').camera({height:'<?php echo $jfCameraHeight; ?>',fx:'<?php echo $jfCameraFx; ?>',transPeriod:<?php echo $jfCameraAnimSpeed;?>,time:<?php echo $jfCameraPauseTime;?>,cols:<?php echo $jfCameraBoxCols;?>,rows:<?php echo $jfCameraBoxRows;?>,easing:'<?php echo $jfCameraEasing; ?>',loader:'<?php echo $jfCameraLoader; ?>',loaderColor:'<?php echo $jfCameraLoaderColor; ?>',loaderBgColor:'<?php echo $jfCameraLoaderBGColor; ?>',pieDiameter:<?php echo $jfCameraPieDiameter;?>,piePosition:'<?php echo $jfCameraPiePosition; ?>',loaderOpacity:<?php echo $jfCameraLoaderOpacity;?>,loaderPadding:<?php echo $jfCameraLoaderPadding;?>,loaderStroke:<?php echo $jfCameraLoaderStroke;?>,hover:<?php echo $jfCameraPauseOnHover;?>,playPause:<?php echo $jfCameraPlayPause;?>,pauseOnClick:<?php echo $jfCameraPauseOnClick;?>,navigation:<?php echo $jfCameraNav;?>,navigationHover:<?php echo $jfCameraNavH;?>,mobileNavHover:<?php echo $jfCameraMobileNavH;?>,pagination:<?php echo $jfCameraPag;?>,thumbnails:<?php echo $jfCameraThumbs;?>})})})})(jQuery);</script>