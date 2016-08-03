(function(c){function b(f,e){return(typeof f=="function")?(f.call(e)):f}function d(e){while(e=e.parentNode){if(e==document){return true}}return false}function a(f,e){this.$element=c(f);this.options=e;this.enabled=true;this.fixTitle()}a.prototype={show:function(){var h=this.getTitle();if(h&&this.enabled){var g=this.tip();g.find(".tipsy-inner")[this.options.html?"html":"text"](h);g[0].className="tipsy";g.remove().css({top:0,left:0,visibility:"hidden",display:"block"}).prependTo(document.body);var k=c.extend({},this.$element.offset(),{width:this.$element[0].offsetWidth,height:this.$element[0].offsetHeight});var e=g[0].offsetWidth,j=g[0].offsetHeight,i=b(this.options.gravity,this.$element[0]);var f;switch(i.charAt(0)){case"n":f={top:k.top+k.height+this.options.offset,left:k.left+k.width/2-e/2};break;case"s":f={top:k.top-j-this.options.offset,left:k.left+k.width/2-e/2};break;case"e":f={top:k.top+k.height/2-j/2,left:k.left-e-this.options.offset};break;case"w":f={top:k.top+k.height/2-j/2,left:k.left+k.width+this.options.offset};break}if(i.length==2){if(i.charAt(1)=="w"){f.left=k.left+k.width/2-15}else{f.left=k.left+k.width/2-e+15}}g.css(f).addClass("tipsy-"+i);g.find(".tipsy-arrow")[0].className="tipsy-arrow tipsy-arrow-"+i.charAt(0);if(this.options.className){g.addClass(b(this.options.className,this.$element[0]))}if(this.options.fade){g.stop().css({opacity:0,display:"block",visibility:"visible"}).animate({opacity:this.options.opacity})}else{g.css({visibility:"visible",opacity:this.options.opacity})}}},hide:function(){if(this.options.fade){this.tip().stop().fadeOut(function(){c(this).remove()})}else{this.tip().remove()}},fixTitle:function(){var e=this.$element;if(e.attr("title")||typeof(e.attr("original-title"))!="string"){e.attr("original-title",e.attr("title")||"").removeAttr("title")}},getTitle:function(){var g,e=this.$element,f=this.options;this.fixTitle();var g,f=this.options;if(typeof f.title=="string"){g=e.attr(f.title=="title"?"original-title":f.title)}else{if(typeof f.title=="function"){g=f.title.call(e[0])}}g=(""+g).replace(/(^\s*|\s*$)/,"");return g||f.fallback},tip:function(){if(!this.$tip){this.$tip=c('<div class="tipsy"></div>').html('<div class="tipsy-arrow"></div><div class="tipsy-inner"></div>');this.$tip.data("tipsy-pointee",this.$element[0])}return this.$tip},validate:function(){if(!this.$element[0].parentNode){this.hide();this.$element=null;this.options=null}},enable:function(){this.enabled=true},disable:function(){this.enabled=false},toggleEnabled:function(){this.enabled=!this.enabled}};c.fn.tipsy=function(i){if(i===true){return this.data("tipsy")}else{if(typeof i=="string"){var k=this.data("tipsy");if(k){k[i]()}return this}}i=c.extend({},c.fn.tipsy.defaults,i);function h(m){var n=c.data(m,"tipsy");if(!n){n=new a(m,c.fn.tipsy.elementOptions(m,i));c.data(m,"tipsy",n)}return n}function l(){var m=h(this);m.hoverState="in";if(i.delayIn==0){m.show()}else{m.fixTitle();setTimeout(function(){if(m.hoverState=="in"){m.show()}},i.delayIn)}}function g(){var m=h(this);m.hoverState="out";if(i.delayOut==0){m.hide()}else{setTimeout(function(){if(m.hoverState=="out"){m.hide()}},i.delayOut)}}if(!i.live){this.each(function(){h(this)})}if(i.trigger!="manual"){var e=i.live?"live":"bind",j=i.trigger=="hover"?"mouseenter":"focus",f=i.trigger=="hover"?"mouseleave":"blur";this[e](j,l)[e](f,g)}return this};c.fn.tipsy.defaults={className:null,delayIn:0,delayOut:0,fade:false,fallback:"",gravity:"n",html:false,live:false,offset:0,opacity:0.8,title:"title",trigger:"hover"};c.fn.tipsy.revalidate=function(){c(".tipsy").each(function(){var e=c.data(this,"tipsy-pointee");if(!e||!d(e)){c(this).remove()}})};c.fn.tipsy.elementOptions=function(f,e){return c.metadata?c.extend({},e,c(f).metadata()):e};c.fn.tipsy.autoNS=function(){return c(this).offset().top>(c(document).scrollTop()+c(window).height()/2)?"s":"n"};c.fn.tipsy.autoWE=function(){return c(this).offset().left>(c(document).scrollLeft()+c(window).width()/2)?"e":"w"};c.fn.tipsy.autoBounds=function(f,e){return function(){var g={ns:e[0],ew:(e.length>1?e[1]:false)},j=c(document).scrollTop()+f,h=c(document).scrollLeft()+f,i=c(this);if(i.offset().top<j){g.ns="n"}if(i.offset().left<h){g.ew="w"}if(c(window).width()+c(document).scrollLeft()-i.offset().left<f){g.ew="e"}if(c(window).height()+c(document).scrollTop()-i.offset().top<f){g.ns="s"}return g.ns+(g.ew?g.ew:"")}}})(jQuery);