jQuery(document).ready(function(a){if(a(".jf-flexslider").length>0){a(".jf-flexslider").flexslider({animation:"slide",slideshowSpeed:jf_flex_slide_spd_par,controlNav:jf_flex_controlNav,directionNav:jf_flex_directNav,pauseOnHover:jf_flex_pauseOnHover,keyboard:jf_flex_keyboard,mousewheel:jf_flex_mousewheel,direction:jf_flex_direction,touch:jf_flex_touch,reverse:jf_flex_reverse,randomize:jf_flex_randomize,start:function(b){var c=a(".jf-flexslider li:eq(1)");jf_IncAnimation(c)},before:function(b){var c=a(".jf-flexslider li:eq("+(b.currentSlide+1)+")");jf_OutAnimation(c)},after:function(b){var c=a(".jf-flexslider li:eq("+(b.currentSlide+1)+")");jf_IncAnimation(c)}})}});var jQueryjf_flexLI=jQuery(".jf-flexslider li"),jQueryjf_flexiSlider=jQuery(".jf-flexslider"),jf_flexIsHover=false,jf_flexFirst=true;function jf_IncAnimation(a){if(jf_flexFirst){jQuery(".flex-direction-nav li a").hover(function(){jf_flexIsHover=true},function(){jf_flexIsHover=false});jf_flexFirst=false}else{jQueryjf_flexiSlider.removeClass("jf-sliding")}a.addClass("jf-current-sld");a.find(".jf-flex-caption").delay(100).animate({left:"-12px",opacity:1},jf_flex_img_dur_par);a.find(".jf-flex-illustr").animate({right:"0",opacity:1},jf_flex_img_dur_par).find("img.secondary").each(function(){var b=Math.random()*200;jQuery(this).delay(b).animate({right:0,opacity:1},jf_flex_img_dur_par)})}function jf_OutAnimation(b){if(jf_flexIsHover===false){jQueryjf_flexiSlider.addClass("jf-sliding")}jQueryjf_flexLI.removeClass("jf-current-sld");var a=jQueryjf_flexLI.not(".jf-current-sld");a.find(".jf-flex-caption").animate({opacity:0},jf_flex_img_dur_par,function(){jQuery(this).css("left","-200px")});a.find(".jf-flex-illustr").animate({opacity:0},jf_flex_img_dur_par,function(){jQuery(this).css("right","-200px")}).find("img.secondary").animate({opacity:0},jf_flex_img_dur_par,function(){jQuery(this).css("right","-1500px")})};