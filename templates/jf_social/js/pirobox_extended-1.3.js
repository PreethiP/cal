(function(a){var b=null;a.pirobox_ext=function(d){d=jQuery.extend({piro_speed:700,zoom_mode:true,move_mode:"mousemove",bg_alpha:0.5,piro_scroll:true,share:true,padding:null,attribute:"rel",resize:false},d);b=d.piro_scroll;a.fn.piroFadeIn=function(i,x){a(this).fadeIn(i,function(){if(jQuery.browser.msie){a(this).get(0).style.removeAttribute("filter")}if(x!=undefined){x()}})};a.fn.piroFadeOut=function(i,x){a(this).fadeOut(i,function(){if(jQuery.browser.msie){a(this).get(0).style.removeAttribute("filter")}if(x!=undefined){x()}})};var F=a('*[class*="pirobox"]');var J=new Object();for(var E=0;E<F.length;E++){var j=a(F[E]);J["."+j.attr("class").match(/^pirobox_gall\w*/)]=0}var t=new Array();for(var M in J){t.push(M)}for(var E=0;E<t.length;E++){a(t[E]+":first").attr("my_id","first");a(t[E]+":last").attr("my_id","last");if(a(t[E]).length==1){a(t[E]).addClass("single_fix")}else{if(a(t[E]).length>1){a('*[class*="pirobox_gall"]').each(function(i){this.rev=i+0})}}}var p=a(F);a(".piro_html,.piro_overlay").remove();var q='<div class="piro_caption"></div>';var C=('<div class="piro_overlay"></div><table class="piro_html"  cellpadding="0" cellspacing="0"><tr><td class="h_t_l"></td><td class="h_t_c"></td><td class="h_t_r"></td></tr><tr><td class="h_c_l"></td><td class="h_c_c"><div class="resize"><div class="piro_loader" title="close"><span></span></div><div class="nav_big"><a href="#close" class="piro_close"></a><a href="#next" class="piro_next"></a><a href="#prev" class="piro_prev"></a></div><div class="div_reg"></div></div></td><td class="h_c_r"></td></tr><tr><td class="h_mb_l"></td><td class="h_mb_c"><div class="nav_container"><div class="nav_container_hide"><a href="#next" class="piro_next jf-tipsy-n" title="next"></a><div class="piro_next_fake"></div><div class="piro_close jf-tipsy-n" title="close"></div><a href="#prev" class="piro_prev jf-tipsy-n" title="previous"></a><div class="piro_prev_fake"></div><a href="" target="_blank" class="piro_twitter jf-tipsy-n" title="share on twitter"></a><a href="" target="_blank" class="piro_facebook jf-tipsy-n" title="share on facebook"></a><a href="#ZoomIn" class="piro_zoomIn jf-tipsy-n" title="ZoomIn"></a><a href="#ZoomOut" class="piro_zoomOut jf-tipsy-n" title="ZoomOut"></a></div></div></td><td class="h_mb_r"></td></tr><tr><td class="h_b_l"></td><td class="h_b_c"></td><td class="h_b_r"></td></tr></table>');a("body").append(C);var k=a(".piro_html"),G=a(".piro_zoomIn"),z=a(".piro_zoomOut"),o=a(".piro_twitter"),e=a(".piro_facebook"),n=a(".piro_next"),m=a(".piro_prev"),L=a(".nav_big .piro_next"),c=a(".nav_big .piro_prev"),B=a(".piro_next_fake"),w=a(".piro_prev_fake"),D=a(".piro_close"),h=a(".piro_overlay"),g=a(".nav_container"),I=a(".nav_container_hide"),f=a(".div_reg"),v=a(".piro_loader"),H=a(".resize"),s=a(window).height(),u=a(window).width(),r=0.9,K=-50;d.padding=a(".piro_html .h_t_l").width();a(".piro_html .h_mb_c,.nav_container").animate({height:0},0);k.css({left:((u/2)-(k.width()/2))+"px",top:(s/2)-(k.height()/2)});a(k).add(h).hide();a(".nav_big").hide();a(".piro_overlay,.piro_close").click(function(){a(".jf-js-latest-photos-cont.opened").stop().animate({"margin-bottom":"0px"})});h.css({opacity:d.bg_alpha});a(m).add(n).bind("click",function(y){a(".piro_html .h_mb_c, .nav_container").animate({height:0},0);a(".nav_big").hide();a(".div_reg").children().fadeOut(200);z.css("visibility","hidden");a(".piro_caption").remove();y.preventDefault();var i=parseInt(a('*[class*="pirobox_gall"]').filter(".item").attr("rev"));var x=a(this).is(".piro_prev")?a('*[class*="pirobox_gall"]').eq(i-1):a('*[class*="pirobox_gall"]').eq(i+1);x.click()});a("html").bind("keyup",function(i){if(i.keyCode==27){i.preventDefault();if(a(D).is(":visible")){A()}}});a("html").bind("keyup",function(i){if(a(".item").attr("my_id")=="first"){}else{if(a(".item").attr(d.attribute)=="single"){g.show()}else{if(i.keyCode==37){i.preventDefault();if(a(D).is(":visible")){c.click()}}}}});a("html").bind("keyup",function(i){if(a(".item").attr("my_id")=="last"){}else{if(a(".item").attr(d.attribute)=="single"){g.show()}else{if(i.keyCode==39){i.preventDefault();if(a(D).is(":visible")){L.click()}}}}});function l(){var i=a(window).height(),x=a(window).width(),N=k.outerHeight(true),y=k.outerWidth(true);if(b==false){k.css({left:((x/2)-(y/2))+"px"})}else{if(b==true){k.css({left:((x/2)-((y)/2)),top:parseInt(a(document).scrollTop())+(i-N)/2+(K/2)})}}}a(p).each(function(){function y(){I.each(function(){var Q=a(this).children(":visible").not(".piro_caption");var P=a(this).children().not(".piro_caption").not(":visible");var R=0;a(Q).each(function(){R+=a(this).width()+6;a(this).css({visibility:"visible"});a(this).css({right:R,"margin-right":"-20px"});G.css("margin-right","-30px");var S=G.position();z.css({right:R,visibility:"hidden","margin-right":"-30px"});a(P).css("visibility","hidden")})})}var N=a(this).attr("title"),O=a(this).attr(d.attribute).split("-"),i=a(this).attr("href");a(this).unbind();a(this).bind("click",function(P){h.css({opacity:d.bg_alpha});P.preventDefault();n.add(m).hide();B.add(w).hide();a(p).filter(".item").removeClass("item");a(this).addClass("item");x();if(d.share==true){o.add(e).show()}else{o.add(e).remove()}if(a(this).attr("my_id")=="first"){m.add(B).hide();n.add(w).show()}else{n.add(m).show();B.add(w).hide()}if(a(this).attr("my_id")=="last"){m.add(B).show();n.add(w).hide()}if(a(this).is(".pirobox")||a(this).is(".single_fix")){n.add(m).hide();a(".nav_big,.nav_big .piro_next,.nav_big .piro_prev").css("height",0).hide();B.add(w).hide()}if(a(this).attr("my_id")=="last"&&a(this).attr("my_id")=="first"){n.add(m).hide();B.add(w).hide();a(".nav_big .piro_next,.nav_big .piro_prev").css("height",0).hide()}});function x(){a.fn.hasAttr=function(S){return this.attr(S)!==undefined};k.add(h).add(f).add(v).show();function P(){I.add(".piro_caption").hide();a(".piro_zoomOut,.piro_zoomIn").css("visibility","hidden").hide();a(".nav_big .piro_next,.nav_big .piro_prev,.nav_big .piro_close").css("height",0);if(N==""||N===undefined||N===false){a(".piro_caption").hide()}else{a(q).appendTo(I)}if(O[1]=="full"){O[2]=a(window).height()-d.padding*4;O[1]=a(window).width()-d.padding*3}if((O[0]=="inline"&&O[2]==null&&O[2]==null)){O[2]=(a(i).outerHeight(true)+d.padding);O[1]=(a(i).outerWidth(true)+d.padding)+2;a(i).css({width:(O[1]-d.padding)+4,height:(O[2]-d.padding)+3})}else{a(i).css({width:(O[1]-d.padding)+4,height:(O[2]-d.padding)+3})}var U=a(window).height();var S=a(window).width();if(parseFloat(O[2])+70>U){var T=0;b=false}else{if(O[1]=="full"){b=d.piro_scroll;var T=(parseInt(a(document).scrollTop())+(U-O[2])/2+K)}else{var T=(parseInt(a(document).scrollTop())+(U-O[2])/2+K);b=d.piro_scroll}}D.hide();H.animate({height:+(O[2])},d.piro_speed);f.animate({height:+(O[2])},d.piro_speed);k.animate({height:+(O[2])+(d.padding*2),top:T},d.piro_speed,function(){H.animate({width:+(O[1])},d.piro_speed);f.animate({width:+(O[1])},d.piro_speed).hide();k.animate({width:+(O[1])+(d.padding*2),left:((S/2)-((O[1])/2+d.padding))},d.piro_speed,function(){a(".nav_big").hide();a(".piro_caption").html("<p>"+N+"</p>").hide();a(".piro_html .h_mb_c,.nav_container").animate({height:41},300);I.show();v.hide();D.show();f.fadeIn(400);a(window).resize(function(){l()});a(window).scroll(function(){l()});a(".piro_caption").fadeIn(100,function(){if(a(".piro_caption p").height()>28){a(".piro_caption p").css({"padding-right":"18px"});var V=I.children(":visible").not(".piro_caption").length;a(".piro_caption").css("width",O[1]-(45*V));a(".piro_caption").live("mouseenter",function(){a(this).stop().animate({height:a(this).children("p").outerHeight(true)},400)});a(".piro_caption").live("mouseleave",function(){a(this).animate({height:28},200)})}else{a(".piro_caption p,.piro_caption").removeAttr("style")}});y()})})}function R(){b=d.piro_scroll;I.hide();a(".nav_big .piro_next,.nav_big .piro_prev, .nav_big .piro_close").css("height",0);if(N==""||N===undefined||N===false){a(".piro_caption").hide()}else{a(q).appendTo(I)}var S=new Image();S.onerror=function(){a(".piro_caption").remove();o.add(e).hide();S.src="js/error.jpg";S.width="368";S.height="129"};S.onload=function(){var U=S.height;var ac=S.width;var Z=a(window).height();var ab=a(window).width();var T=S.height;var W=S.width;if(T+100>Z||W+100>ab){var aa=(W+d.padding*2)/ab;var X=(T+d.padding*2)/Z;if(X>aa){W=Math.round(S.width*(r/X));T=Math.round(S.height*(r/X))}else{W=Math.round(S.width*(r/aa));T=Math.round(S.height*(r/aa))}if(d.zoom_mode==true){a(".piro_zoomIn").css("visibility","visible").show();a(".piro_zoomOut").css("visibility","hidden").hide()}else{a(".piro_zoomOut,.piro_zoomIn").remove()}}else{T=S.height;W=S.width;a(".piro_zoomOut,.piro_zoomIn").css("visibility","hidden").hide()}var Y=parseInt(a(document).scrollTop())+(Z-T)/2+K;if(U+100>Z&&d.resize==false){a(".piro_zoomOut,.piro_zoomIn").css("visibility","hidden").hide();T=U;W=ac;Y=30;b=false}if(ac+100>ab&&d.resize==false){a(".piro_zoomOut,.piro_zoomIn").css("visibility","hidden").hide();var V=U/ac;T=ab*V-100;W=ab-100;Y=30;b=false}var Z=a(window).height();var ab=a(window).width();a(S).height(T).width(W);a(S).addClass("immagine");H.animate({height:T},d.piro_speed);f.animate({height:T},d.piro_speed);k.animate({height:(T+d.padding*2),top:Y},d.piro_speed,function(){H.animate({width:W},d.piro_speed);f.animate({width:W},d.piro_speed);k.animate({width:(W+d.padding*2),left:((ab/2)-((W/2)+d.padding))},d.piro_speed,function(){e.attr("href","http://www.facebook.com/sharer.php?u="+S.src);o.attr("href","http://twitter.com/share?url="+S.src);v.hide();var ad=H.width();a(".nav_big,.nav_container").show();a(".piro_caption").html("<p>"+N+"</p>").hide();a(".nav_big,.nav_big .piro_next,.nav_big .piro_prev").css({height:T});a(".nav_big .piro_close").css({height:26});a(".nav_big").css({width:W});a(".div_reg img").remove();f.html("").append(S).hide();a(f).fadeIn(300,function(){a(".piro_html .h_mb_c,.nav_container").animate({height:41},300);I.show();a(window).scroll(function(){if(a(".piro_zoomOut").is(":visible")){f.unbind("mousemove");a(S).css({width:W,height:T,top:0,left:0},0,function(){a(".immagine").css("cursor","auto");a(S).draggable({disabled:true});z.css("visibility","hidden");G.css("visibility","visible")})}});a(window).resize(function(){l()});a(window).scroll(function(){l()});if(d.move_mode=="drag"){a(".immagine").attr("title","Double click to resize").add(z).bind("dblclick",function(ae){ae.preventDefault();a(".nav_big").show();f.unbind("mousemove");a(S).draggable({disabled:true});z.css("visibility","hidden");a(".immagine").css({cursor:"auto",visibility:"visible"});G.css({visibility:"visible"});a(S).animate({width:W,height:T,top:0,left:0},600)})}else{if(d.move_mode=="mousemove"){a(".immagine").attr("title","Click to resize").add(z).bind("click",function(ae){ae.preventDefault();a(".nav_big").show();f.unbind("mousemove");a(S).draggable({disabled:true});z.css("visibility","hidden");a(".immagine").css({cursor:"auto",visibility:"visible"});G.css({visibility:"visible"});a(S).animate({width:W,height:T,top:0,left:0},600)})}}G.bind("click",function(ae){ae.preventDefault();a(this).css("visibility","hidden");z.css({visibility:"visible"}).show();a(S).draggable({disabled:false});a(S).animate({width:ac,height:U,top:-(U-T)/2,left:-(ac-W)/2},600,function(){if(d.move_mode=="drag"){a(".nav_big").hide();var an=f.offset(),ai=(an.left+W)-ac,ap=(an.top+T)-U,ah=an.left,ao=an.top;a(S).draggable({containment:[ai,ap,ah,ao],scrollSpeed:400});a(".immagine").css("cursor","move")}else{if(d.move_mode=="mousemove"){a(S).draggable({disabled:true});a(".immagine").css("cursor","crosshair");a(".nav_big").hide();var ak=f.width(),aj=f.height(),ag=(ac-ak)/ak,af=(U-aj)/aj,am=0,al=0;f.bind("mousemove",function(at){var ar=at.pageX-f.offset().left;var aq=at.pageY-f.offset().top;if(Math.abs(am-ar)<=1&&Math.abs(al-aq)<=1){return}am=ar;al=aq;a(S).css({left:-(ag*ar),top:-(af*aq)})})}}})});D.show();a(".piro_caption").show(0,function(){var ae=I.children(":visible").not(".piro_caption").length;if(a(".piro_caption p").height()>28||a(".piro_caption p").width()>W-(43*ae)){a(".piro_caption p").css({"padding-right":"18px"});a(".piro_caption").css("width",W-(43*ae));a(".piro_caption").live("mouseenter",function(){a(this).stop().animate({height:a(this).children("p").outerHeight(true)},400)});a(".piro_caption").live("mouseleave",function(){a(this).animate({height:28},200)})}else{a(".piro_caption p,.piro_caption").removeAttr("style")}a(this).fadeTo(200,1)});y()})})})};S.src=i;v.click(function(){A()})}switch(O[0]){case"iframe":f.html("").css("overflow","hidden");H.css("overflow","hidden");P();f.piroFadeIn(300,function(){f.append('<iframe id="my_frame" class="my_frame" src="'+i+'" frameborder="0" allowtransparency="true" scrolling="auto" align="top"></iframe>');a(".my_frame").css({height:+(O[2])+"px",width:+(O[1])+"px"});o.add(e).hide().css("visibility","hidden")});break;case"content":f.html("").css("overflow","auto");H.css("overflow","auto");a(".my_frame").remove();P();f.piroFadeIn(300,function(){f.load(i);o.add(e).hide().css("visibility","hidden")});break;case"inline":f.html("").css("overflow","auto");H.css("overflow","auto");a(".my_frame").remove();P();f.piroFadeIn(300,function(){a(i).clone(true).appendTo(f).addClass("clone");a(".clone").css("margin-top","0").piroFadeIn(300);o.add(e).hide().css("visibility","hidden")});break;case"flash":a(".my_frame").remove();f.html("").css("overflow","hidden");P();var Q=('<object  width="'+O[1]+'" height="'+O[2]+'"><param name="movie" value="'+i+'" /><param name="wmode" value="transparent" /><param name="allowFullScreen" value="true" /><param name="allowscriptaccess" value="always" /><param name="menu" value="false" /><embed src="'+i+'" type="application/x-shockwave-flash" allowscriptaccess="always" menu="false" wmode="transparent" allowfullscreen="true" width="'+O[1]+'" height="'+O[2]+'"></embed></object>');f.piroFadeIn(300,function(){a(Q).appendTo(f);o.add(e).hide().css("visibility","hidden")});break;case"pdf":a(".my_frame").remove();f.html("").css("overflow","hidden");P();var Q=('<object data="'+i+'" type="application/pdf" width="'+O[1]+'" height="'+O[2]+'"><div  style="color:red; margin:10px 0 0 10px;"><span>Your Browser doesn\'t support pdf embed, direct link to PDF file:</span> <a href="'+i+'">'+i+"</a><br /></object>");f.piroFadeIn(300,function(){a(Q).appendTo(f);o.add(e).hide().css("visibility","hidden")});break;case"gallery":f.css("overflow","hidden");H.css("overflow","hidden");a(".my_frame").remove();R();break;case"single":a(".my_frame").remove();f.html("").css("overflow","hidden");H.css("overflow","hidden");R();break}}});function A(){a(".my_frame").add(".piro_caption").remove();k.add(f).add(H).stop();var i=k;if(a.browser.msie){i=f.add(h);a(".div_reg img").remove()}else{i=k.add(h)}i.piroFadeOut(200,function(){f.html("");v.hide();I.hide();a(".piro_html .h_mb_c,.nav_container").animate({height:0},0);h.add(k).hide().css("visibility","visible")})}D.add(v).add(h).bind("click",function(i){i.preventDefault();A()})}})(jQuery);