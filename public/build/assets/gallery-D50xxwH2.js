import{l as c,Z as d}from"./lg-zoom.es5-Cn5n3zU-.js";/*!
 * lightgallery | 2.7.2 | September 20th 2023
 * http://www.lightgalleryjs.com/
 * Copyright (c) 2020 Sachin Neravath;
 * @license GPLv3
 *//*! *****************************************************************************
Copyright (c) Microsoft Corporation.

Permission to use, copy, modify, and/or distribute this software for any
purpose with or without fee is hereby granted.

THE SOFTWARE IS PROVIDED "AS IS" AND THE AUTHOR DISCLAIMS ALL WARRANTIES WITH
REGARD TO THIS SOFTWARE INCLUDING ALL IMPLIED WARRANTIES OF MERCHANTABILITY
AND FITNESS. IN NO EVENT SHALL THE AUTHOR BE LIABLE FOR ANY SPECIAL, DIRECT,
INDIRECT, OR CONSEQUENTIAL DAMAGES OR ANY DAMAGES WHATSOEVER RESULTING FROM
LOSS OF USE, DATA OR PROFITS, WHETHER IN AN ACTION OF CONTRACT, NEGLIGENCE OR
OTHER TORTIOUS ACTION, ARISING OUT OF OR IN CONNECTION WITH THE USE OR
PERFORMANCE OF THIS SOFTWARE.
***************************************************************************** */var a=function(){return a=Object.assign||function(t){for(var e,s=1,l=arguments.length;s<l;s++){e=arguments[s];for(var o in e)Object.prototype.hasOwnProperty.call(e,o)&&(t[o]=e[o])}return t},a.apply(this,arguments)},m={thumbnail:!0,animateThumb:!0,currentPagerPosition:"middle",alignThumbnails:"middle",thumbWidth:100,thumbHeight:"80px",thumbMargin:5,appendThumbnailsTo:".lg-components",toggleThumb:!1,enableThumbDrag:!0,enableThumbSwipe:!0,thumbnailSwipeThreshold:10,loadYouTubeThumbnail:!0,youTubeThumbSize:1,thumbnailPluginStrings:{toggleThumbnails:"Toggle thumbnails"}},n={afterAppendSlide:"lgAfterAppendSlide",init:"lgInit",hasVideo:"lgHasVideo",containerResize:"lgContainerResize",updateSlides:"lgUpdateSlides",afterAppendSubHtml:"lgAfterAppendSubHtml",beforeOpen:"lgBeforeOpen",afterOpen:"lgAfterOpen",slideItemLoad:"lgSlideItemLoad",beforeSlide:"lgBeforeSlide",afterSlide:"lgAfterSlide",posterClick:"lgPosterClick",dragStart:"lgDragStart",dragMove:"lgDragMove",dragEnd:"lgDragEnd",beforeNextSlide:"lgBeforeNextSlide",beforePrevSlide:"lgBeforePrevSlide",beforeClose:"lgBeforeClose",afterClose:"lgAfterClose",rotateLeft:"lgRotateLeft",rotateRight:"lgRotateRight",flipHorizontal:"lgFlipHorizontal",flipVertical:"lgFlipVertical",autoplay:"lgAutoplay",autoplayStart:"lgAutoplayStart",autoplayStop:"lgAutoplayStop"},f=function(){function i(t,e){return this.thumbOuterWidth=0,this.thumbTotalWidth=0,this.translateX=0,this.thumbClickable=!1,this.core=t,this.$LG=e,this}return i.prototype.init=function(){this.settings=a(a({},m),this.core.settings),this.thumbOuterWidth=0,this.thumbTotalWidth=this.core.galleryItems.length*(this.settings.thumbWidth+this.settings.thumbMargin),this.translateX=0,this.setAnimateThumbStyles(),this.core.settings.allowMediaOverlap||(this.settings.toggleThumb=!1),this.settings.thumbnail&&(this.build(),this.settings.animateThumb?(this.settings.enableThumbDrag&&this.enableThumbDrag(),this.settings.enableThumbSwipe&&this.enableThumbSwipe(),this.thumbClickable=!1):this.thumbClickable=!0,this.toggleThumbBar(),this.thumbKeyPress())},i.prototype.build=function(){var t=this;this.setThumbMarkup(),this.manageActiveClassOnSlideChange(),this.$lgThumb.first().on("click.lg touchend.lg",function(e){var s=t.$LG(e.target);s.hasAttribute("data-lg-item-id")&&setTimeout(function(){if(t.thumbClickable&&!t.core.lgBusy){var l=parseInt(s.attr("data-lg-item-id"));t.core.slide(l,!1,!0,!1)}},50)}),this.core.LGel.on(n.beforeSlide+".thumb",function(e){var s=e.detail.index;t.animateThumb(s)}),this.core.LGel.on(n.beforeOpen+".thumb",function(){t.thumbOuterWidth=t.core.outer.get().offsetWidth}),this.core.LGel.on(n.updateSlides+".thumb",function(){t.rebuildThumbnails()}),this.core.LGel.on(n.containerResize+".thumb",function(){t.core.lgOpened&&setTimeout(function(){t.thumbOuterWidth=t.core.outer.get().offsetWidth,t.animateThumb(t.core.index),t.thumbOuterWidth=t.core.outer.get().offsetWidth},50)})},i.prototype.setThumbMarkup=function(){var t="lg-thumb-outer ";this.settings.alignThumbnails&&(t+="lg-thumb-align-"+this.settings.alignThumbnails);var e='<div class="'+t+`">
        <div class="lg-thumb lg-group">
        </div>
        </div>`;this.core.outer.addClass("lg-has-thumb"),this.settings.appendThumbnailsTo===".lg-components"?this.core.$lgComponents.append(e):this.core.outer.append(e),this.$thumbOuter=this.core.outer.find(".lg-thumb-outer").first(),this.$lgThumb=this.core.outer.find(".lg-thumb").first(),this.settings.animateThumb&&this.core.outer.find(".lg-thumb").css("transition-duration",this.core.settings.speed+"ms").css("width",this.thumbTotalWidth+"px").css("position","relative"),this.setThumbItemHtml(this.core.galleryItems)},i.prototype.enableThumbDrag=function(){var t=this,e={cords:{startX:0,endX:0},isMoved:!1,newTranslateX:0,startTime:new Date,endTime:new Date,touchMoveTime:0},s=!1;this.$thumbOuter.addClass("lg-grab"),this.core.outer.find(".lg-thumb").first().on("mousedown.lg.thumb",function(l){t.thumbTotalWidth>t.thumbOuterWidth&&(l.preventDefault(),e.cords.startX=l.pageX,e.startTime=new Date,t.thumbClickable=!1,s=!0,t.core.outer.get().scrollLeft+=1,t.core.outer.get().scrollLeft-=1,t.$thumbOuter.removeClass("lg-grab").addClass("lg-grabbing"))}),this.$LG(window).on("mousemove.lg.thumb.global"+this.core.lgId,function(l){t.core.lgOpened&&s&&(e.cords.endX=l.pageX,e=t.onThumbTouchMove(e))}),this.$LG(window).on("mouseup.lg.thumb.global"+this.core.lgId,function(){t.core.lgOpened&&(e.isMoved?e=t.onThumbTouchEnd(e):t.thumbClickable=!0,s&&(s=!1,t.$thumbOuter.removeClass("lg-grabbing").addClass("lg-grab")))})},i.prototype.enableThumbSwipe=function(){var t=this,e={cords:{startX:0,endX:0},isMoved:!1,newTranslateX:0,startTime:new Date,endTime:new Date,touchMoveTime:0};this.$lgThumb.on("touchstart.lg",function(s){t.thumbTotalWidth>t.thumbOuterWidth&&(s.preventDefault(),e.cords.startX=s.targetTouches[0].pageX,t.thumbClickable=!1,e.startTime=new Date)}),this.$lgThumb.on("touchmove.lg",function(s){t.thumbTotalWidth>t.thumbOuterWidth&&(s.preventDefault(),e.cords.endX=s.targetTouches[0].pageX,e=t.onThumbTouchMove(e))}),this.$lgThumb.on("touchend.lg",function(){e.isMoved?e=t.onThumbTouchEnd(e):t.thumbClickable=!0})},i.prototype.rebuildThumbnails=function(){var t=this;this.$thumbOuter.addClass("lg-rebuilding-thumbnails"),setTimeout(function(){t.thumbTotalWidth=t.core.galleryItems.length*(t.settings.thumbWidth+t.settings.thumbMargin),t.$lgThumb.css("width",t.thumbTotalWidth+"px"),t.$lgThumb.empty(),t.setThumbItemHtml(t.core.galleryItems),t.animateThumb(t.core.index)},50),setTimeout(function(){t.$thumbOuter.removeClass("lg-rebuilding-thumbnails")},200)},i.prototype.setTranslate=function(t){this.$lgThumb.css("transform","translate3d(-"+t+"px, 0px, 0px)")},i.prototype.getPossibleTransformX=function(t){return t>this.thumbTotalWidth-this.thumbOuterWidth&&(t=this.thumbTotalWidth-this.thumbOuterWidth),t<0&&(t=0),t},i.prototype.animateThumb=function(t){if(this.$lgThumb.css("transition-duration",this.core.settings.speed+"ms"),this.settings.animateThumb){var e=0;switch(this.settings.currentPagerPosition){case"left":e=0;break;case"middle":e=this.thumbOuterWidth/2-this.settings.thumbWidth/2;break;case"right":e=this.thumbOuterWidth-this.settings.thumbWidth}this.translateX=(this.settings.thumbWidth+this.settings.thumbMargin)*t-1-e,this.translateX>this.thumbTotalWidth-this.thumbOuterWidth&&(this.translateX=this.thumbTotalWidth-this.thumbOuterWidth),this.translateX<0&&(this.translateX=0),this.setTranslate(this.translateX)}},i.prototype.onThumbTouchMove=function(t){return t.newTranslateX=this.translateX,t.isMoved=!0,t.touchMoveTime=new Date().valueOf(),t.newTranslateX-=t.cords.endX-t.cords.startX,t.newTranslateX=this.getPossibleTransformX(t.newTranslateX),this.setTranslate(t.newTranslateX),this.$thumbOuter.addClass("lg-dragging"),t},i.prototype.onThumbTouchEnd=function(t){t.isMoved=!1,t.endTime=new Date,this.$thumbOuter.removeClass("lg-dragging");var e=t.endTime.valueOf()-t.startTime.valueOf(),s=t.cords.endX-t.cords.startX,l=Math.abs(s)/e;return l>.15&&t.endTime.valueOf()-t.touchMoveTime<30?(l+=1,l>2&&(l+=1),l=l+l*(Math.abs(s)/this.thumbOuterWidth),this.$lgThumb.css("transition-duration",Math.min(l-1,2)+"settings"),s=s*l,this.translateX=this.getPossibleTransformX(this.translateX-s),this.setTranslate(this.translateX)):this.translateX=t.newTranslateX,Math.abs(t.cords.endX-t.cords.startX)<this.settings.thumbnailSwipeThreshold&&(this.thumbClickable=!0),t},i.prototype.getThumbHtml=function(t,e,s){var l=this.core.galleryItems[e].__slideVideoInfo||{},o;l.youtube&&this.settings.loadYouTubeThumbnail?o="//img.youtube.com/vi/"+l.youtube[1]+"/"+this.settings.youTubeThumbSize+".jpg":o=t;var g=s?'alt="'+s+'"':"";return'<div data-lg-item-id="'+e+'" class="lg-thumb-item '+(e===this.core.index?" active":"")+`"
        style="width:`+this.settings.thumbWidth+"px; height: "+this.settings.thumbHeight+`;
            margin-right: `+this.settings.thumbMargin+`px;">
            <img `+g+' data-lg-item-id="'+e+'" src="'+o+`" />
        </div>`},i.prototype.getThumbItemHtml=function(t){for(var e="",s=0;s<t.length;s++)e+=this.getThumbHtml(t[s].thumb,s,t[s].alt);return e},i.prototype.setThumbItemHtml=function(t){var e=this.getThumbItemHtml(t);this.$lgThumb.html(e)},i.prototype.setAnimateThumbStyles=function(){this.settings.animateThumb&&this.core.outer.addClass("lg-animate-thumb")},i.prototype.manageActiveClassOnSlideChange=function(){var t=this;this.core.LGel.on(n.beforeSlide+".thumb",function(e){var s=t.core.outer.find(".lg-thumb-item"),l=e.detail.index;s.removeClass("active"),s.eq(l).addClass("active")})},i.prototype.toggleThumbBar=function(){var t=this;this.settings.toggleThumb&&(this.core.outer.addClass("lg-can-toggle"),this.core.$toolbar.append('<button type="button" aria-label="'+this.settings.thumbnailPluginStrings.toggleThumbnails+'" class="lg-toggle-thumb lg-icon"></button>'),this.core.outer.find(".lg-toggle-thumb").first().on("click.lg",function(){t.core.outer.toggleClass("lg-components-open")}))},i.prototype.thumbKeyPress=function(){var t=this;this.$LG(window).on("keydown.lg.thumb.global"+this.core.lgId,function(e){!t.core.lgOpened||!t.settings.toggleThumb||(e.keyCode===38?(e.preventDefault(),t.core.outer.addClass("lg-components-open")):e.keyCode===40&&(e.preventDefault(),t.core.outer.removeClass("lg-components-open")))})},i.prototype.destroy=function(){this.settings.thumbnail&&(this.$LG(window).off(".lg.thumb.global"+this.core.lgId),this.core.LGel.off(".lg.thumb"),this.core.LGel.off(".thumb"),this.$thumbOuter.remove(),this.core.outer.removeClass("lg-has-thumb"))},i}();/*!
 * lightgallery | 2.7.2 | September 20th 2023
 * http://www.lightgalleryjs.com/
 * Copyright (c) 2020 Sachin Neravath;
 * @license GPLv3
 *//*! *****************************************************************************
Copyright (c) Microsoft Corporation.

Permission to use, copy, modify, and/or distribute this software for any
purpose with or without fee is hereby granted.

THE SOFTWARE IS PROVIDED "AS IS" AND THE AUTHOR DISCLAIMS ALL WARRANTIES WITH
REGARD TO THIS SOFTWARE INCLUDING ALL IMPLIED WARRANTIES OF MERCHANTABILITY
AND FITNESS. IN NO EVENT SHALL THE AUTHOR BE LIABLE FOR ANY SPECIAL, DIRECT,
INDIRECT, OR CONSEQUENTIAL DAMAGES OR ANY DAMAGES WHATSOEVER RESULTING FROM
LOSS OF USE, DATA OR PROFITS, WHETHER IN AN ACTION OF CONTRACT, NEGLIGENCE OR
OTHER TORTIOUS ACTION, ARISING OUT OF OR IN CONNECTION WITH THE USE OR
PERFORMANCE OF THIS SOFTWARE.
***************************************************************************** */var u=function(){return u=Object.assign||function(t){for(var e,s=1,l=arguments.length;s<l;s++){e=arguments[s];for(var o in e)Object.prototype.hasOwnProperty.call(e,o)&&(t[o]=e[o])}return t},u.apply(this,arguments)},p={fullScreen:!0,fullscreenPluginStrings:{toggleFullscreen:"Toggle Fullscreen"}},b=function(){function i(t,e){return this.core=t,this.$LG=e,this.settings=u(u({},p),this.core.settings),this}return i.prototype.init=function(){var t="";if(this.settings.fullScreen){if(!document.fullscreenEnabled&&!document.webkitFullscreenEnabled&&!document.mozFullScreenEnabled&&!document.msFullscreenEnabled)return;t='<button type="button" aria-label="'+this.settings.fullscreenPluginStrings.toggleFullscreen+'" class="lg-fullscreen lg-icon"></button>',this.core.$toolbar.append(t),this.fullScreen()}},i.prototype.isFullScreen=function(){return document.fullscreenElement||document.mozFullScreenElement||document.webkitFullscreenElement||document.msFullscreenElement},i.prototype.requestFullscreen=function(){var t=document.documentElement;t.requestFullscreen?t.requestFullscreen():t.msRequestFullscreen?t.msRequestFullscreen():t.mozRequestFullScreen?t.mozRequestFullScreen():t.webkitRequestFullscreen&&t.webkitRequestFullscreen()},i.prototype.exitFullscreen=function(){document.exitFullscreen?document.exitFullscreen():document.msExitFullscreen?document.msExitFullscreen():document.mozCancelFullScreen?document.mozCancelFullScreen():document.webkitExitFullscreen&&document.webkitExitFullscreen()},i.prototype.fullScreen=function(){var t=this;this.$LG(document).on("fullscreenchange.lg.global"+this.core.lgId+` 
            webkitfullscreenchange.lg.global`+this.core.lgId+` 
            mozfullscreenchange.lg.global`+this.core.lgId+` 
            MSFullscreenChange.lg.global`+this.core.lgId,function(){t.core.lgOpened&&t.core.outer.toggleClass("lg-fullscreen-on")}),this.core.outer.find(".lg-fullscreen").first().on("click.lg",function(){t.isFullScreen()?t.exitFullscreen():t.requestFullscreen()})},i.prototype.closeGallery=function(){this.isFullScreen()&&this.exitFullscreen()},i.prototype.destroy=function(){this.$LG(document).off("fullscreenchange.lg.global"+this.core.lgId+` 
            webkitfullscreenchange.lg.global`+this.core.lgId+` 
            mozfullscreenchange.lg.global`+this.core.lgId+` 
            MSFullscreenChange.lg.global`+this.core.lgId)},i}();/*!
 * lightgallery | 2.7.2 | September 20th 2023
 * http://www.lightgalleryjs.com/
 * Copyright (c) 2020 Sachin Neravath;
 * @license GPLv3
 *//*! *****************************************************************************
Copyright (c) Microsoft Corporation.

Permission to use, copy, modify, and/or distribute this software for any
purpose with or without fee is hereby granted.

THE SOFTWARE IS PROVIDED "AS IS" AND THE AUTHOR DISCLAIMS ALL WARRANTIES WITH
REGARD TO THIS SOFTWARE INCLUDING ALL IMPLIED WARRANTIES OF MERCHANTABILITY
AND FITNESS. IN NO EVENT SHALL THE AUTHOR BE LIABLE FOR ANY SPECIAL, DIRECT,
INDIRECT, OR CONSEQUENTIAL DAMAGES OR ANY DAMAGES WHATSOEVER RESULTING FROM
LOSS OF USE, DATA OR PROFITS, WHETHER IN AN ACTION OF CONTRACT, NEGLIGENCE OR
OTHER TORTIOUS ACTION, ARISING OUT OF OR IN CONNECTION WITH THE USE OR
PERFORMANCE OF THIS SOFTWARE.
***************************************************************************** */var h=function(){return h=Object.assign||function(t){for(var e,s=1,l=arguments.length;s<l;s++){e=arguments[s];for(var o in e)Object.prototype.hasOwnProperty.call(e,o)&&(t[o]=e[o])}return t},h.apply(this,arguments)},r={afterAppendSlide:"lgAfterAppendSlide",init:"lgInit",hasVideo:"lgHasVideo",containerResize:"lgContainerResize",updateSlides:"lgUpdateSlides",afterAppendSubHtml:"lgAfterAppendSubHtml",beforeOpen:"lgBeforeOpen",afterOpen:"lgAfterOpen",slideItemLoad:"lgSlideItemLoad",beforeSlide:"lgBeforeSlide",afterSlide:"lgAfterSlide",posterClick:"lgPosterClick",dragStart:"lgDragStart",dragMove:"lgDragMove",dragEnd:"lgDragEnd",beforeNextSlide:"lgBeforeNextSlide",beforePrevSlide:"lgBeforePrevSlide",beforeClose:"lgBeforeClose",afterClose:"lgAfterClose",rotateLeft:"lgRotateLeft",rotateRight:"lgRotateRight",flipHorizontal:"lgFlipHorizontal",flipVertical:"lgFlipVertical",autoplay:"lgAutoplay",autoplayStart:"lgAutoplayStart",autoplayStop:"lgAutoplayStop"},v={autoplay:!0,slideShowAutoplay:!1,slideShowInterval:5e3,progressBar:!0,forceSlideShowAutoplay:!1,autoplayControls:!0,appendAutoplayControlsTo:".lg-toolbar",autoplayPluginStrings:{toggleAutoplay:"Toggle Autoplay"}},T=function(){function i(t){return this.core=t,this.settings=h(h({},v),this.core.settings),this}return i.prototype.init=function(){var t=this;this.settings.autoplay&&(this.interval=!1,this.fromAuto=!0,this.pausedOnTouchDrag=!1,this.pausedOnSlideChange=!1,this.settings.autoplayControls&&this.controls(),this.settings.progressBar&&this.core.outer.append('<div class="lg-progress-bar"><div class="lg-progress"></div></div>'),this.settings.slideShowAutoplay&&this.core.LGel.once(r.slideItemLoad+".autoplay",function(){t.startAutoPlay()}),this.core.LGel.on(r.dragStart+".autoplay touchstart.lg.autoplay",function(){t.interval&&(t.stopAutoPlay(),t.pausedOnTouchDrag=!0)}),this.core.LGel.on(r.dragEnd+".autoplay touchend.lg.autoplay",function(){!t.interval&&t.pausedOnTouchDrag&&(t.startAutoPlay(),t.pausedOnTouchDrag=!1)}),this.core.LGel.on(r.beforeSlide+".autoplay",function(){t.showProgressBar(),!t.fromAuto&&t.interval?(t.stopAutoPlay(),t.pausedOnSlideChange=!0):t.pausedOnSlideChange=!1,t.fromAuto=!1}),this.core.LGel.on(r.afterSlide+".autoplay",function(){t.pausedOnSlideChange&&!t.interval&&t.settings.forceSlideShowAutoplay&&(t.startAutoPlay(),t.pausedOnSlideChange=!1)}),this.showProgressBar())},i.prototype.showProgressBar=function(){var t=this;if(this.settings.progressBar&&this.fromAuto){var e=this.core.outer.find(".lg-progress-bar"),s=this.core.outer.find(".lg-progress");this.interval&&(s.removeAttr("style"),e.removeClass("lg-start"),setTimeout(function(){s.css("transition","width "+(t.core.settings.speed+t.settings.slideShowInterval)+"ms ease 0s"),e.addClass("lg-start")},20))}},i.prototype.controls=function(){var t=this,e='<button aria-label="'+this.settings.autoplayPluginStrings.toggleAutoplay+'" type="button" class="lg-autoplay-button lg-icon"></button>';this.core.outer.find(this.settings.appendAutoplayControlsTo).append(e),this.core.outer.find(".lg-autoplay-button").first().on("click.lg.autoplay",function(){t.core.outer.hasClass("lg-show-autoplay")?t.stopAutoPlay():t.interval||t.startAutoPlay()})},i.prototype.startAutoPlay=function(){var t=this;this.core.outer.find(".lg-progress").css("transition","width "+(this.core.settings.speed+this.settings.slideShowInterval)+"ms ease 0s"),this.core.outer.addClass("lg-show-autoplay"),this.core.outer.find(".lg-progress-bar").addClass("lg-start"),this.core.LGel.trigger(r.autoplayStart,{index:this.core.index}),this.interval=setInterval(function(){t.core.index+1<t.core.galleryItems.length?t.core.index++:t.core.index=0,t.core.LGel.trigger(r.autoplay,{index:t.core.index}),t.fromAuto=!0,t.core.slide(t.core.index,!1,!1,"next")},this.core.settings.speed+this.settings.slideShowInterval)},i.prototype.stopAutoPlay=function(){this.interval&&(this.core.LGel.trigger(r.autoplayStop,{index:this.core.index}),this.core.outer.find(".lg-progress").removeAttr("style"),this.core.outer.removeClass("lg-show-autoplay"),this.core.outer.find(".lg-progress-bar").removeClass("lg-start")),clearInterval(this.interval),this.interval=!1},i.prototype.closeGallery=function(){this.stopAutoPlay()},i.prototype.destroy=function(){this.settings.autoplay&&this.core.outer.find(".lg-progress-bar").remove(),this.core.LGel.off(".lg.autoplay"),this.core.LGel.off(".autoplay")},i}();c(document.getElementById("lightgallery"),{plugins:[d,f,b,T],licenseKey:"GPLv3",speed:300,mode:"lg-fade",selector:".item",toggleThumb:!0,allowMediaOverlap:!0});
