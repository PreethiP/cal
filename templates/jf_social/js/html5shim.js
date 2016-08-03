/*! HTML5 Shiv vpre3.6 | @afarkas @jdalton @jon_neal @rem | MIT/GPL2 Licensed
  Uncompressed source: https://github.com/aFarkas/html5shiv  */
(function(g,h){function b(o,p){var m=o.createElement("p"),n=o.getElementsByTagName("head")[0]||o.documentElement;
return m.innerHTML="x<style>"+p+"</style>",n.insertBefore(m.lastChild,n.firstChild);}function c(){var m=f.elements;return typeof m=="string"?m.split(" "):m;
}function d(p){var q={},m=p.createElement,n=p.createDocumentFragment,o=n();p.createElement=function(r){if(!f.shivMethods){return m(r);}var s;return q[r]?s=q[r].cloneNode():k.test(r)?s=(q[r]=m(r)).cloneNode():s=m(r),s.canHaveChildren&&!j.test(r)?o.appendChild(s):s;
},p.createDocumentFragment=Function("h,f","return function(){var n=f.cloneNode(),c=n.createElement;h.shivMethods&&("+c().join().replace(/\w+/g,function(r){return m(r),o.createElement(r),'c("'+r+'")';
})+");return n}")(f,o);}function e(m){var n;return m.documentShived?m:(f.shivCSS&&!l&&(n=!!b(m,"article,aside,details,figcaption,figure,footer,header,hgroup,nav,section{display:block}audio{display:none}canvas,video{display:inline-block;*display:inline;*zoom:1}[hidden]{display:none}audio[controls]{display:inline-block;*display:inline;*zoom:1}mark{background:#FF0;color:#000}")),a||(n=!d(m)),n&&(m.documentShived=n),m);
}var i=g.html5||{},j=/^<|^(?:button|form|map|select|textarea|object|iframe|option|optgroup)$/i,k=/^<|^(?:a|b|button|code|div|fieldset|form|h1|h2|h3|h4|h5|h6|i|iframe|img|input|label|li|link|ol|option|p|param|q|script|select|span|strong|style|table|tbody|td|textarea|tfoot|th|thead|tr|ul)$/i,l,a;
(function(){var m=h.createElement("a");m.innerHTML="<xyz></xyz>",l="hidden" in m,l&&typeof injectElementWithStyles=="function"&&injectElementWithStyles("#modernizr{}",function(n){n.hidden=!0,l=(g.getComputedStyle?getComputedStyle(n,null):n.currentStyle).display=="none";
}),a=m.childNodes.length==1||function(){try{h.createElement("a");}catch(n){return !0;}var o=h.createDocumentFragment();return typeof o.cloneNode=="undefined"||typeof o.createDocumentFragment=="undefined"||typeof o.createElement=="undefined";
}();})();var f={elements:i.elements||"abbr article aside audio bdi canvas data datalist details figcaption figure footer header hgroup mark meter nav output progress section summary time video",shivCSS:i.shivCSS!==!1,shivMethods:i.shivMethods!==!1,type:"default",shivDocument:e};
g.html5=f,e(h);})(this,document);