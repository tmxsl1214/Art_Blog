"use strict";$(function(){if(1200<=$(document).width())if("https://www.weipxiu.com"==window.location.href||"https://www.weipxiu.com/"==window.location.href){$("#js_banner").show(),$("body > .continar").css("margin-top","15px"),setInterval(function(){$(".notice").show(),$(".notice ul").stop(!0,!0).animate({top:"-20px"},function(){var t=$(".notice ul li:eq(0)").remove();$(".notice ul").append(t),$(".notice ul").css("top","0")})},5e3),$(".mod-index__feature .img_list_6pic a").removeClass("word_display"),window.ActiveXObject||"ActiveXObject"in window?console.log("当前浏览器IE内核，部分效果不可展现！"):($(".mod-index__feature .img_list_6pic a").mouseenter(function(){$(this).addClass("word_display")}),$(".mod-index__feature .img_list_6pic a").mouseleave(function(){$(this).removeClass("word_display")}),setTimeout(function(){var e=document.getElementById("curriculum"),i=e.getElementsByTagName("ul")[0],a=e.getElementsByClassName("contact")[0],t=e.getElementsByClassName("close")[0],r=i.children,n=a.getElementsByTagName("a")[0];function o(){this.removeEventListener("transitionEnd",o,!1),this.removeEventListener("webkitTransitionEnd",o,!1),i.style.top=0,e.style.height="230px",e.style.top="0px";for(var t=0;t<r.length;t++)r[t].style.transition="0.5s "+(300+200*t)+"ms",r[t].style.opacity=1,r[t].style.transform="rotateX(0deg)",r[t].style.WebkitTransform="rotateX(0deg)",r[t].off=!0,r[t].index=t,r[t].onmouseover=s,r[t].onmouseout=function(){this.off&&(this.style.transform="rotateY(0deg)",this.style.WebkitTransform="rotateY(0deg)")},r[t].onclick=d}function s(t){if(this.off){var e=t.clientX-c(this);this.style.transition="0.5s",e>this.offsetWidth/2?(this.style.transform="rotateY(30deg)",this.style.WebkitTransform="rotateY(30deg)"):(this.style.transform="rotateY(-30deg)",this.style.WebkitTransform="rotateY(-30deg)")}}function c(t){for(var e=0;t;)e+=t.offsetLeft,t=t.offsetParent;return e}function d(t){var e=t.clientX-c(this)>this.offsetWidth/2?-180:180,i=0,n=0;a.style.display="block";for(var o=0;o<r.length;o++)i<Math.abs(o-this.index)&&(i=Math.abs(o-this.index),n=o),r[o].off=!1,r[o].style.transition="0.5s "+100*Math.abs(o-this.index)+"ms cubic-bezier(0.115, -0.195, 0.255, -0.280)",r[o].style.transform="rotateY("+e+"deg)",r[o].style.WebkitTransform="rotateY("+e+"deg)",r[o].style.opacity=.1;function s(){this.removeEventListener("transitionEnd",s,!1),this.removeEventListener("webkitTransitionEnd",s,!1),a.style.opacity=1}r[n].addEventListener("transitionEnd",s,!1),r[n].addEventListener("webkitTransitionEnd",s,!1)}function w(){e.style.transition=".8s height,0.4s opacity .2s",e.style.height="40px",e.style.opacity=0,setTimeout(function(){$("#curriculum").remove()},1e3)}e.style.opacity=1,e.addEventListener("transitionEnd",o,!1),e.addEventListener("webkitTransitionEnd",o,!1),n.onclick=function(){function e(){this.removeEventListener("transitionEnd",e,!1),this.removeEventListener("webkitTransitionEnd",e,!1);for(var t=0;t<r.length;t++)r[t].off=!0,r[t].style.transition="0.5s "+100*(r.length-t-1)+"ms",r[t].style.transform="rotateY(0deg)",r[t].style.WebkitTransform="rotateY(0deg)",r[t].style.opacity=1}a.style.opacity=0,a.addEventListener("transitionEnd",e,!1),a.addEventListener("webkitTransitionEnd",e,!1)},t.onclick=function(){w()},setTimeout(function(){w()},8e3),document.onkeydown=function(t){t||(t=window.event),13==(t.keyCode||t.which)&&w()}},2500));Math.floor(3*Math.random()),new Banner({banner:"#banner_img",index:0,autoplay:8e3,width:1200,height:300,images:[{url:"https://www.weipxiu.com/wp-content/themes/boke/images/banner-1.jpg",link:"https://www.weipxiu.com/?cat=29"},{url:"https://www.weipxiu.com/wp-content/themes/boke/images/banner-2.jpg",link:"https://www.weipxiu.com/"},{url:"https://www.weipxiu.com/wp-content/themes/boke/images/banner-3.jpg",link:"javascript:;"},{url:"https://www.weipxiu.com/wp-content/themes/boke/images/banner-4.jpg",link:"javascript:;"},{url:"https://www.weipxiu.com/wp-content/themes/boke/images/banner-5.jpg",link:"https://www.weipxiu.com/?cat=6"},{url:"https://www.weipxiu.com/wp-content/themes/boke/images/banner-6.jpg",link:"https://www.weipxiu.com/?p=1313"}],preloadImages:!0,pagination:".js_banner_nav",paginationClick:!0,prevButton:".js_banner_prev",nextButton:".js_banner_next",Effects:{prev:"turnEffect",next:"boomEffect",navi:"pageEffect"}});$(".nav ul.music-nav li:eq(0)").addClass("action");setTimeout(function(){!function(){if(window.Notification){var e=function(){if("granted"==Notification.permission){var t=new Notification("官方提示：",{body:'欢迎点击加入"WEB前端薪资吐槽群"互相学习、交流！',icon:"https://www.weipxiu.com/wp-content/themes/boke/images/tishi.png"});t.onclick=function(){window.open("https://jq.qq.com/?_wv=1027&k=4BemYKg"),t.close()}}};"granted"==Notification.permission?e():"denied"!=Notification.permission&&Notification.requestPermission(function(t){e()})}}()},5e3),window.console&&window.console.log&&setTimeout(function(){console.log("\n %c 唯品秀个人博客 %c  © Jun Li  https://weipxiu.com \n","color:#FFFFFB;background:#1890ff;padding:5px 0;border-radius:.5rem 0 0 .5rem;","color:#FFFFFB;background:#080808;padding:5px 0;border-radius:0 .5rem .5rem 0;")},1500),$("#hide").show(),$("html,body").css({"overflow-y":"visible"}),$(".buffer").fadeOut(),$(".buffer .bar").hide(),$(".header.Top").css("WebkitAnimation-duration",".7s"),$(".header.Top").css("MsAnimation-duration",".7s"),$(".header.Top").css("animation -duration",".7s"),setTimeout(function(){$("#vedio").animate({bottom:"0"},1e3),$(".hide").animate({bottom:"193px"},1e3)},3500)}else $(".c-860,.index-box,.hide,#curriculum,#js_banner").remove();else{$(".continar-left > .text:nth-of-type(3)").remove();new Swiper(".swiper-container1",{pagination:".swiper-pagination",slidesPerView:1,effect:"slide",paginationClickable:!0,spaceBetween:0,autoplay:4500,speed:500,autoplayDisableOnInteraction:!1,loop:!0})}$(window).resize(function(){1200<=$(document).width()&&("https://www.weipxiu.com"!=window.location.href&&"https://www.weipxiu.com/"!=window.location.href||($("#js_banner").show(),$("body > .continar").css("margin-top","15px")))})});