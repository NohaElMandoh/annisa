function equalizePricingTable(){var e=$(".plans .plan",pricingTable),a=$(".inner",e),n=0;a.each(function(e,a){n<$(a).innerHeight()&&(n=$(a).innerHeight())}),$(window).innerWidth()>736&&e.css("height",n+"px")}var $=jQuery,menuTrigger=null,menu=null,pricingTable=null,ctaPopup=null,mainBlocks=null,stickyTop=!1,ctaPopupOverlay=null,ctaPopupTrigger=null,menuTopBar=null,newNavigation=null,navBackground=null,newHeader=null;$(document).ready(function(e){if($=jQuery,menuTrigger=$(".menu-trigger"),menu=$("nav.mobile"),pricingTable=$(".pricing-table"),ctaPopup=$("#cta-popup"),ctaPopupOverlay=$(".overlay",ctaPopup),ctaPopupTrigger=$(".startnow"),mainBlocks=$(".main-blocks"),menuTopBar=$("#menu-top-bar"),newNavigation=$(".new-navigation"),nav=$(".nav"),newHeader=$("body.new_header"),$("a").on("click",function(e){if($(this).is('[href*="#popup-"')){e.preventDefault();var a=$(this).attr("href");console.log("Open",a),$(a).fadeToggle(300)}}),$(".close-popup").on("click",function(e){e.preventDefault(),$(this).closest(".popup").fadeOut(300)}),$(".popup").on("click",function(e){e.preventDefault(),$(this).fadeOut(300)}),$(".wonderplugin-pdf-iframe").contents().find("body").css("background","none !important"),menuTrigger.on("click",function(){$(this).toggleClass("active"),menuTopBar.toggleClass("active"),newNavigation.toggleClass("active"),nav.toggleClass("active"),menu.toggleClass("active"),newHeader.toggleClass("active"),$("body").toggleClass("menu_prevent_scroll")}),ctaPopupTrigger.on("click",function(e){ctaPopup.addClass("active")}),$("a.close",ctaPopup).on("click",function(e){ctaPopup.removeClass("active")}),ctaPopupOverlay.on("click",function(e){ctaPopup.removeClass("active")}),pricingTable.length>0&&equalizePricingTable(),newHeader){var a=new Swiper(".header_slider",{speed:3e3,noSwiping:!0,noSwipingClass:"swiper-slide",watchSlidesProgress:!0,slidesPerView:1,centeredSlides:!0,autoplay:!1,effect:"fade",fadeEffect:{crossFade:!0},pagination:{el:".swiper-pagination",clickable:!0,renderBullet:function(e,a){return'<div class="'+a+'"><div class="progress"></div></div>'}},on:{init:function(){$(".swiper-pagination-bullet-active > .progress").css("animation-duration",1e4+"ms")},slideChangeTransitionStart:function(){$("body .header_slider .swiper-pagination-bullet-active").prevAll().find(".progress").css("height","100%"),$("body .header_slider .swiper-pagination-bullet-active").nextAll().find(".progress").css("height","0"),$(".swiper-slide-active").hasClass("last_slide")&&($(".overlay").toggleClass("expand"),$("#menu-main-menu-rechts li a").toggleClass("black-hover"),$(".driver-phone").toggleClass("black-hover"),$(".social-link-mask").toggleClass("black-hover"),setTimeout(function(){$(".last_slide_content_block").fadeIn().css("display","flex")},700))}}});$(".next-slide-box").click(function(e){a.slideNext(),$(".swiper-pagination-bullet-active > .progress").css("animation-duration",1e4+"ms")}),$(".prev-slide-box").click(function(e){a.slidePrev(),$(".swiper-pagination-bullet-active > .progress").css("animation-duration",1e4+"ms")}),$(".header_slider .swiper-slide").each(function(){$(this).find(".content > *").each(function(e,a){$(a).css({"animation-duration":6e3-1e3*e+"ms","animation-delay":1e3*e+"ms"})})}),$(".read_more_link").on("click",function(e){$(this).parents(".swiper-slide").find(".read_more_container").fadeIn().addClass("show"),$(".header_slider").addClass("paused"),e.stopPropagation(),$("nav, .header_slider .swiper-pagination, header .social").css({opacity:0,"pointer-events":"none"})}),$(".reset-read-container").on("click",function(){$(".last_slide_content_block").fadeOut(),$(".overlay").toggleClass("expand"),$("#menu-main-menu-rechts li a").toggleClass("black-hover"),$(".driver-phone").toggleClass("black-hover"),$(".social-link-mask").toggleClass("black-hover"),$(".swiper-pagination-bullet-active > .progress").css("animation-duration",1e4+"ms"),a.slideTo(0)}),$(".header_slider").click(function(e){if((0==$(e.target).closest(".read_more").length||1==$(e.target).closest(".close").length)&&$("body .read_more_container").hasClass("show"))return $(".read_more_container").fadeOut().removeClass("show"),$(".header_slider").removeClass("paused"),animating=!0,$("nav, .header_slider .swiper-pagination, header .social").css({opacity:1,"pointer-events":"all"}),!1})}new Swiper(".block-container",{speed:800,watchOverflow:!0,pagination:{el:".swiper-pagination",clickable:!0}})}),$(window).on("resize",function(e){pricingTable.length>0&&equalizePricingTable()}),$('a[href*="#"]').not('[href="#"]').not('[href="#0"]').click(function(e){if(location.pathname.replace(/^\//,"")==this.pathname.replace(/^\//,"")&&location.hostname==this.hostname){var a=$(this.hash);a=a.length?a:$("[name="+this.hash.slice(1)+"]"),a.length&&(e.preventDefault(),$("html, body").animate({scrollTop:a.offset().top-150},1e3,function(){var e=$(a);return e.focus(),!e.is(":focus")&&(e.attr("tabindex","-1"),void e.focus())}))}});
function debounce(e,t,l){var o;return function(){var n=this,i=arguments,a=function(){o=null,l||e.apply(n,i)},m=l&&!o;clearTimeout(o),o=setTimeout(a,t),m&&e.apply(n,i)}}var $=jQuery,pqmDebug=!0,pqm=null,pqmLoading=null,pqmSlider=null,pqmForm=null,pqmFormHolder=null,pqmFormMonthlyFee=null,pqmAdviceHolder=null,pqmAdviceText=null,pqmFormSetupFee=null,pqmSolutions=null,pqmMonthlyFee=null,pqmSetupFee=null,pqmSubmit=null,pqmInputs=null,pqmSelects=null;$(document).ready(function(){var e=document.body.clientWidth>767?3:1;e<3&&(pqmSlider=new Swiper("section.passenger-quote .swiper-container",{pagination:".swiper-pagination",slidesPerView:e,spaceBetween:0,centeredSlides:!0})),pqm=$("section.passenger-quote"),pqmLoading=$(".loading",pqm),pqmForm=$("form",pqm),pqmFormHolder=$(".row.personal-details",pqm),pqmFormMonthlyFee=$("#monthly-fee",pqmForm),pqmFormSetupFee=$("#setup-fee",pqmForm),pqmSolutions=$(".solutions .row",pqm),pqmInputs=$("input[type=number]",pqmSolutions),pqmSelects=$("select",pqmSolutions),pqmMonthlyFee=$("span.total-monthly.holder",pqm),pqmSetupFee=$("span.total-setup.holder",pqm),pqmSubmit=$("a.create-deal",pqm),pqmAdviceHolder=$("#advice",pqm),pqmAdviceText=$("#advice-text",pqm);var t=debounce(function(){console.log("PQM:CalculatePricing");var e=0,t=0,l="",o="";pqmDebug&&(console.log("PQM:CalculatePricing:totalSetup",e),console.log("PQM:CalculatePricing:totalMonthly",t),console.log("------------------------------------------------------------------")),pqmInputs.each(function(){var l=$(this).val();l<0&&(l=0,$(this).val(0));var o=Number($(this).data("setup-price")),n=Number($(this).data("monthly-price")),i=$(this).attr("name");$("#"+i+"-pricing").html("€ "+l*n),$("#"+i+"-input").val(l),e+=o,t+=l*n,pqmDebug&&(console.log("PQM:CalculatePricing:"+i+":amount",l),console.log("PQM:CalculatePricing:"+i+":setup",o),console.log("PQM:CalculatePricing:"+i+":monthly",n),console.log("------------------------------------------------------------------"))}),pqmSelects.each(function(){var n=$(this).val(),i=$("#"+n),a=$(this).parent().siblings(".pricing"),m=Number(i.data("setup-price")),p=Number(i.data("monthly-price")),r=i.data("advice"),u=$(this).attr("name");a.html("€ "+p),$("#"+u+"-input").val(i.data("label")),e+=m,t+=p,""===l?l+=r:l=l+", "+r,o=$("#"+n+"-advice-text").html(),console.log(o),pqmDebug&&(console.log("PQM:CalculatePricing:"+u+":selected",n),console.log("PQM:CalculatePricing:"+u+":setup",m),console.log("PQM:CalculatePricing:"+u+":monthly",p),console.log("------------------------------------------------------------------"))}),pqmDebug&&(console.log("PQM:CalculatePricing:totalSetup",e),console.log("PQM:CalculatePricing:totalMonthly",t),console.log("------------------------------------------------------------------")),pqmSetupFee.html(e>1e4?"Lets talk!":"€ "+e),pqmFormSetupFee.val(e),pqmMonthlyFee.html(t>1e4?"Lets talk!":"€ "+t),pqmFormMonthlyFee.val(t),pqmAdviceHolder.html(l),pqmAdviceText.html(o)},250);$.fn.serializeObject=function(){var e=this,t={},l={},o={validate:/^[a-zA-Z][a-zA-Z0-9_]*(?:\[(?:\d*|[a-zA-Z0-9_]+)\])*$/,key:/[a-zA-Z0-9_]+|(?=\[\])/g,push:/^$/,fixed:/^\d+$/,named:/^[a-zA-Z0-9_]+$/};return this.build=function(e,t,l){return e[t]=l,e},this.push_counter=function(e){return void 0===l[e]&&(l[e]=0),l[e]++},$.each($(this).serializeArray(),function(){if(o.validate.test(this.name)){for(var l,n=this.name.match(o.key),i=this.value,a=this.name;void 0!==(l=n.pop());)a=a.replace(new RegExp("\\["+l+"\\]$"),""),l.match(o.push)?i=e.build([],e.push_counter(a),i):l.match(o.fixed)?i=e.build([],l,i):l.match(o.named)&&(i=e.build({},l,i));t=$.extend(!0,t,i)}}),t};var l=debounce(function(){var e=$("input[required]",pqmForm),t=!1;if(e.removeClass("error"),e.each(function(){var e=$(this);""===e.val()&&(e.addClass("error"),t=!0)}),!t){var l=pqmForm.serializeObject(),o=l.uri,n=l.endUri;pqmDebug&&(console.log("PQM:SubmitData:data",l),console.log("PQM:SubmitData:uri",o),console.log("------------------------------------------------------------------")),pqmLoading.addClass("active"),$.post(o,{action:"pqm_submit",pqm_data:l},function(e){}).done(function(){window.location.href=n}).fail(function(){console.error("Error submitting")})}},250);pqmInputs.on("keyup",t),pqmInputs.on("change",t),pqmSelects.on("change",t),pqmSubmit.on("click",l),t()}),$(window).resize(debounce(function(){pqmFormHolder&&pqmFormHolder.get(0)&&pqmFormHolder.get(0).style.setProperty("--active-height",pqmFormHolder.prop("scrollHeight")+"px")},250));