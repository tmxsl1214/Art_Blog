"use strict";$(function(){var i="https://www.weipxiu.com/",d="ajax_centent",e="searchform",r=new String("#, /?cat=, /wp-, .pdf, .zip, .rar, /goto, .html").split(", "),s="error",f=!1,y=!1,h=!1,u=!1,n=null;jQuery.browser;function p(t){jQuery(t+"a").click(function(t){if(0<=this.href.indexOf(i)&&1==a(this.href)){t.preventDefault(),this.blur();this.title||this.name,this.rel;try{e=this,jQuery("ul.nav li").each(function(){jQuery(this).removeClass("current-menu-item")}),jQuery(e).parents("li").addClass("current-menu-item")}catch(t){}o(this.href)}var e}),jQuery("."+e).each(function(t){jQuery(this).attr("action")&&(n=jQuery(this).attr("action"),jQuery(this).submit(function(){var t;return t=jQuery(this).serialize(),h||o(n,0,t),!1}))}),jQuery("."+e).attr("action")}function o(t,e,c){if(!h){u=h=!0;var i=t.replace("http://","").replace("https://",""),r=i.indexOf("/"),n=t.indexOf(i),l=t.substring(n+r);if(1!=e&&"function"==typeof window.history.pushState){var o={foo:1e3+1001*Math.random()};history.pushState(o,"ajax page loaded...",l)}jQuery("#"+d),jQuery("#loading").show(),jQuery("#"+d).fadeTo("slow",1,function(){jQuery("#"+d).fadeIn("slow",function(){jQuery.ajax({type:"GET",url:t,data:c,cache:!1,dataType:"html",success:function(t){h=!1;var e=t.split("<title>"),i=t.split("</title>");if(jQuery("#loading").hide(),jQuery(".continar").css({scrollTop:0}),jQuery("html,body,.continar").animate({scrollTop:0},600),2==e.length||2==i.length){var r=(t=t.split("<title>")[1]).split("</title>")[0];jQuery(document).attr("title",jQuery("<div/>").html(r).text())}1==y&&"undefined"!=typeof _gaq&&(c=void 0===c?"":"?"+c,_gaq.push(["_trackPageview",l+c])),t=(t=t.split('id="'+d+'"')[1]).substring(t.indexOf(">")+1);for(var n=1,o="";0<n;){for(var s=t.split("</div>")[0],u=0,a=s.indexOf("<div");-1!=a;)u++,a=s.indexOf("<div",a+1);n=n+u-1,o=o+t.split("</div>")[0]+"</div>",t=t.substring(t.indexOf("</div>")+6)}document.getElementById(d).innerHTML=o,jQuery("#"+d).css("position","absolute"),jQuery("#"+d).css("left","20000px"),jQuery("#"+d).show(),p("#"+d+" "),1==f&&jQuery(document).trigger("ready"),jQuery("#"+d).hide(),jQuery("#"+d).css("position",""),jQuery("#"+d).css("left",""),jQuery("#"+d).fadeTo("slow",1,function(){})},error:function(t,e,i){h=!1,document.title="Error loading requested page!",document.getElementById(d).innerHTML=s}})})})}}function a(t){for(var e in r){if(0<=t.indexOf(r[e])||t==i||t==i.substr(0,basic.length-1))return $("#js_banner").show(),$("body > .continar").css("margin-top","15px"),!1;$("#js_banner").hide(),$("body > .continar").css("margin-top","96px")}return!0}jQuery(document).ready(function(){p("")}),window.onpopstate=function(t){!0===u&&1==a(document.location.toString())&&o(document.location.toString(),1)}});