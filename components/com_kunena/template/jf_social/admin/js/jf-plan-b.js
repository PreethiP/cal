jQuery.noConflict();
(function($){  //This functions first parameter is named $
	$(window).load(function(){
	$(".paramlist_value select").each(function(){
		if($(this).is(":visible")) {
			$(this).css("width",parseInt($(this).width())+20);
			$(this).chosen()
		};
	});
	$("#templates-list select").each(function(){
		if($(this).is(":visible")) {
			$(this).css("width",parseInt($(this).width())+20);
			$(this).chosen()
		};
	});
	/* START COLOR PICKER ----------------------------------------------------------------------- */
	$('.jf_colorpicker').ColorPicker({
		color: '#000000',
		onShow: function (colpkr) {
			$(colpkr).fadeIn(500);
			return false;
		},
		onHide: function (colpkr) {
			$(colpkr).fadeOut(500);
			return false;
		},
		onSubmit: function(hsb, hex, rgb, el) {
			$(el).val("#"+hex);
			//$(el).css('background',$(el).val())
			$(el).ColorPickerHide();
		},
		onBeforeShow: function () {
			$(this).ColorPickerSetColor(this.value);
		}
	})
	.bind('keyup', function(){
		$(this).ColorPickerSetColor(this.value);
	});
	$(".pane-sliders select").each(function(){
		if($(this).is(":visible")) {
		$(this).css("width",parseInt($(this).width())+20);
		$(this).chosen()
		};
	});
	$(".chzn-container").click(function(){
		$(".panel .pane-slider,.panel .panelform").css("overflow","visible");	
	});
	$(".panel .title").click(function(){
		$(".panel .pane-slider,.panel .panelform").css("overflow","hidden");		
	});
	/* START Tipsy TOOLTIP -------------------------------------------------------------- */
	$(".jf-module-tip-n").tipsy({live: true, gravity: 'n',fade: true,opacity: 1});
	$(".jf-module-tip-s").tipsy({live: true, gravity: 's',fade: true,opacity: 1});
	$(".jf-module-tip-e").tipsy({live: true, gravity: 'e',fade: true,opacity: 1});
	/* START Description HTML -------------------------------------------------------------- */
	$('#jf-descr').html('<table class="jf-descr-core-table" border="0"><tr valign="top"><td width="350px"><a class="jf-descr-logo" href="http://www.joomforest.com/" target="_blank"></a></td><td width=""><div id="jf-module-description"><div class="jftoggledetails" style="display: block;"><table><tbody><tr><td width="100px" class="ident"> Name: </td><td> JF Social </td></tr><tr><td width="100px" class="ident"> Version: </td><td class="version"> 1.2 </td></tr><tr><td width="100px" class="ident"> Release Date: </td><td> 08.02.13 </td></tr><tr><td width="100px" class="ident"> Description: </td><td> Kunena 2 Template </td></tr><tr><td width="100px" class="ident note"> NOTE!: </td><td> PLEASE dont forget to read documentation. </td></tr><tr><td width="100px" class="ident"> Website: </td><td><a target="_blank" href="http://www.joomforest.com/">http://www.joomforest.com/</a></td></tr><tr><td width="100px" class="ident"> Support: </td><td><a target="_blank" href="http://www.joomforest.com/support.html">http://www.joomforest.com/support.html</a> - Support you can get only on our forum. </td></tr><tr><td width="100px" class="ident"> Follow US: </td><td><a title="find us on facebook" target="_blank" href="https://www.facebook.com/JoomForest" class="social-f jf-module-tip-n"></a><a title="follow us on twitter" target="_blank" href="http://twitter.com/JoomForest" class="social-t jf-module-tip-n"></a><a title="find us on Google+" target="_blank" href="https://plus.google.com/103291323205603379401/" class="social-g jf-module-tip-n"></a></td></tr></tbody></table><div style="clear:both"></div><div class="jf-module-copyright"> Copyright (C) 2012 JoomForest.com </div></div></div></td></tr></table>');
	/* START TITLES AND subTITLES FUNCTIONS -------------------------------------------------------------- */
	/* subtitles */
	$(function(){
		var jf_param_sub_title			= $('.jf-sub-title'),
			jf_param_sub_title_value	= jf_param_sub_title.parent(),
			jf_param_sub_title_tr		= jf_param_sub_title.parent().parent();
		jf_param_sub_title_tr.addClass('jf-tr-title');
		jf_param_sub_title_value.prev().remove();
		jf_param_sub_title_value.css({'padding':'14px 10px'}).after('<td></td>');;
	});
	/* big titles */
	$(function(){
		var jf_param_title			= $('.ku-core'),
			jf_param_title_value	= jf_param_title.parent(),
			jf_param_title_tr		= jf_param_title.parent().parent(),
			jf_param_title_table	= jf_param_title.parent().parent().parent(),
			contents				= jf_param_title.html();
		jf_param_title_tr.addClass('jf-ku-admin-tr ku-core').attr('id', 'ku-core');
		jf_param_title_tr.html('<td class="jf-ku-adminside-param-title">' + contents + '</td><td class="jf-ku-adminside-param-title jf"><a class="jf-logo-tab jf-module-tip-e" href="http://www.joomforest.com/" target="_blank" original-title="Go to JoomForest.com"></a></td>');
	});
	$(function(){
		var jf_param_title			= $('.ku-main'),
			jf_param_title_value	= jf_param_title.parent(),
			jf_param_title_tr		= jf_param_title.parent().parent(),
			jf_param_title_table	= jf_param_title.parent().parent().parent(),
			contents				= jf_param_title.html();
		jf_param_title_tr.addClass('jf-ku-admin-tr ku-main').attr('id', 'ku-main');
		jf_param_title_tr.html('<td class="jf-ku-adminside-param-title">' + contents + '</td><td class="jf-ku-adminside-param-title jf"><a class="jf-logo-tab jf-module-tip-e" href="http://www.joomforest.com/" target="_blank" original-title="Go to JoomForest.com"></a></td>');
	});
	$(function(){
		var jf_param_title			= $('.ku-styles'),
			jf_param_title_value	= jf_param_title.parent(),
			jf_param_title_tr		= jf_param_title.parent().parent(),
			jf_param_title_table	= jf_param_title.parent().parent().parent(),
			contents				= jf_param_title.html();
		jf_param_title_tr.addClass('jf-ku-admin-tr ku-styles').attr('id', 'ku-styles');
		jf_param_title_tr.html('<td class="jf-ku-adminside-param-title">' + contents + '</td><td class="jf-ku-adminside-param-title jf"><a class="jf-logo-tab jf-module-tip-e" href="http://www.joomforest.com/" target="_blank" original-title="Go to JoomForest.com"></a></td>');
	});
	$(function(){
		var jf_param_title			= $('.ku-sidebar'),
			jf_param_title_value	= jf_param_title.parent(),
			jf_param_title_tr		= jf_param_title.parent().parent(),
			jf_param_title_table	= jf_param_title.parent().parent().parent(),
			contents				= jf_param_title.html();
		jf_param_title_tr.addClass('jf-ku-admin-tr ku-sidebar').attr('id', 'ku-sidebar');
		jf_param_title_tr.html('<td class="jf-ku-adminside-param-title">' + contents + '</td><td class="jf-ku-adminside-param-title jf"><a class="jf-logo-tab jf-module-tip-e" href="http://www.joomforest.com/" target="_blank" original-title="Go to JoomForest.com"></a></td>');
	});
	$(function(){
		var jf_param_title			= $('.ku-header'),
			jf_param_title_value	= jf_param_title.parent(),
			jf_param_title_tr		= jf_param_title.parent().parent(),
			jf_param_title_table	= jf_param_title.parent().parent().parent(),
			contents				= jf_param_title.html();
		jf_param_title_tr.addClass('jf-ku-admin-tr ku-header').attr('id', 'ku-header');
		jf_param_title_tr.html('<td class="jf-ku-adminside-param-title">' + contents + '</td><td class="jf-ku-adminside-param-title jf"><a class="jf-logo-tab jf-module-tip-e" href="http://www.joomforest.com/" target="_blank" original-title="Go to JoomForest.com"></a></td>');
	});
	$(function(){
		var jf_param_title			= $('.ku-mobile'),
			jf_param_title_value	= jf_param_title.parent(),
			jf_param_title_tr		= jf_param_title.parent().parent(),
			jf_param_title_table	= jf_param_title.parent().parent().parent(),
			contents				= jf_param_title.html();
		jf_param_title_tr.addClass('jf-ku-admin-tr ku-mobile').attr('id', 'ku-mobile');
		jf_param_title_tr.html('<td class="jf-ku-adminside-param-title">' + contents + '</td><td class="jf-ku-adminside-param-title jf"><a class="jf-logo-tab jf-module-tip-e" href="http://www.joomforest.com/" target="_blank" original-title="Go to JoomForest.com"></a></td>');
	});
	

	
	
	/* START - STYLE Details ---------------------------------------------------------------- */
		/* Build classes */
		$(function(){
			// variables
			var jf_indicator			= $('#jf-descr'),
				jf_tmpl_thumb			= jf_indicator.parent().prev(),
				jf_descr_title_layout	= jf_indicator.parent().parent().prev(),
				jf_author				= jf_indicator.parent().parent().parent().prev(),
				jf_big_title			= jf_indicator.parent().parent().parent().prev().prev(),
				jf_details_title		= jf_indicator.parent().parent().parent().parent().parent().prev(),
				jf_details_parentpad	= jf_indicator.parent().parent().parent().parent().parent().parent().parent().parent().parent();
			
			//create classes
			


			// remove bullshit
				jf_tmpl_thumb.remove();
				jf_descr_title_layout.remove();
				jf_author.remove();
				jf_big_title.remove();
				jf_details_title.html("TEMPLATE INFORMATION");
				jf_details_title.addClass('jf_details_title_legend');
			// Style bullshit
				jf_details_parentpad.css({'padding':'5px 0 0'});
				jf_indicator.parent().parent().css({'padding':'0'});
				jf_indicator.children().children().children().children().css({'padding':'2px'});
		});
	/* END - STYLE Details ---------------------------------------------------------------- */
	
	/* START - STYLE Params ---------------------------------------------------------------- */
		$(function(){
			$('.jf-baby').parent().parent().remove();
			var jf_par_indicator	= $('.kparameters'),
				jf_par_section		= jf_par_indicator.parent().parent().parent().parent();
			//create classes
				jf_par_indicator.parent().prev().addClass('jf_par_writable');
				jf_par_section.addClass('jf_par_section');
			// remove bullshit
			// Style bullshit
			
		});
	/* END - STYLE Params ---------------------------------------------------------------- */
	
	/* START - At first hide small parametres -------------------------------------------------------------- */
	setTimeout(function(){
		$('.jf-ku-admin-tr').nextUntil(".jf-ku-admin-tr").hide();
	},10);
	/* START PARAMS TOGGLE SYSTEM -------------------------------------------------------------- */
	$('.jf-ku-admin-tr').stop().live('click', function() {
		$(this).toggle(
				function(){
					$(this).addClass('opened').nextUntil(".jf-ku-admin-tr").stop().fadeIn(500);
				},
				function(){
					$(this).removeClass('opened').nextUntil(".jf-ku-admin-tr").stop().fadeOut(500);
				}
			).trigger('click');
	});
	/* START Loading Ilustrator -------------------------------------------------------------- */
	$('#element-box').delay(1500).animate({'opacity':'1'}, 500);
	
	/* --------------------- START Browser Selector for CSS ----------------------*/
	function css_browser_selector(u){var ua=u.toLowerCase(),is=function(t){return ua.indexOf(t)>-1},g='gecko',w='webkit',s='safari',o='opera',m='mobile',h=document.documentElement,b=[(!(/opera|webtv/i.test(ua))&&/msie\s(\d)/.test(ua))?('ie ie'+RegExp.$1):is('firefox/2')?g+' ff2':is('firefox/3.5')?g+' ff3 ff3_5':is('firefox/3.6')?g+' ff3 ff3_6':is('firefox/3')?g+' ff3':is('gecko/')?g:is('opera')?o+(/version\/(\d+)/.test(ua)?' '+o+RegExp.$1:(/opera(\s|\/)(\d+)/.test(ua)?' '+o+RegExp.$2:'')):is('konqueror')?'konqueror':is('blackberry')?m+' blackberry':is('android')?m+' android':is('chrome')?w+' chrome':is('iron')?w+' iron':is('applewebkit/')?w+' '+s+(/version\/(\d+)/.test(ua)?' '+s+RegExp.$1:''):is('mozilla/')?g:'',is('j2me')?m+' j2me':is('iphone')?m+' iphone':is('ipod')?m+' ipod':is('ipad')?m+' ipad':is('mac')?'mac':is('darwin')?'mac':is('webtv')?'webtv':is('win')?'win'+(is('windows nt 6.0')?' vista':''):is('freebsd')?'freebsd':(is('x11')||is('linux'))?'linux':'','js']; c = b.join(' '); h.className += ' '+c; return c;}; css_browser_selector(navigator.userAgent);
	/* --------------------- END Browser Selector for CSS ----------------------*/
	
})
})(jQuery);