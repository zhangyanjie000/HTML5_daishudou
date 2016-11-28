/*
 * HC-MUI  做移动端最轻最好的UI框架
 * 版本 : v1.01 Beta
 * 框架获取地址 : http://www.hcoder.net/mui
 * 框架作者        : 刘海君  5213606@qq.com
*/
/* 滑动识别 */
(function(a){if(typeof define==="function"&&define.amd&&define.amd.jQuery){define(["jquery"],a)}else{if(typeof module!=="undefined"&&module.exports){a(require("jquery"))}else{a(jQuery)}}}(function(f){var y="1.6.15",p="left",o="right",e="up",x="down",c="in",A="out",m="none",s="auto",l="swipe",t="pinch",B="tap",j="doubletap",b="longtap",z="hold",E="horizontal",u="vertical",i="all",r=10,g="start",k="move",h="end",q="cancel",a="ontouchstart" in window,v=window.navigator.msPointerEnabled&&!window.navigator.pointerEnabled&&!a,d=(window.navigator.pointerEnabled||window.navigator.msPointerEnabled)&&!a,C="TouchSwipe";var n={fingers:1,threshold:75,cancelThreshold:null,pinchThreshold:20,maxTimeThreshold:null,fingerReleaseThreshold:250,longTapThreshold:500,doubleTapThreshold:200,swipe:null,swipeLeft:null,swipeRight:null,swipeUp:null,swipeDown:null,swipeStatus:null,pinchIn:null,pinchOut:null,pinchStatus:null,click:null,tap:null,doubleTap:null,longTap:null,hold:null,triggerOnTouchEnd:true,triggerOnTouchLeave:false,allowPageScroll:"auto",fallbackToMouseEvents:true,excludedElements:"label, button, input, select, textarea, a, .noSwipe",preventDefaultEvents:true};f.fn.swipe=function(H){var G=f(this),F=G.data(C);if(F&&typeof H==="string"){if(F[H]){return F[H].apply(this,Array.prototype.slice.call(arguments,1))}else{f.error("Method "+H+" does not exist on jQuery.swipe")}}else{if(F&&typeof H==="object"){F.option.apply(this,arguments)}else{if(!F&&(typeof H==="object"||!H)){return w.apply(this,arguments)}}}return G};f.fn.swipe.version=y;f.fn.swipe.defaults=n;f.fn.swipe.phases={PHASE_START:g,PHASE_MOVE:k,PHASE_END:h,PHASE_CANCEL:q};f.fn.swipe.directions={LEFT:p,RIGHT:o,UP:e,DOWN:x,IN:c,OUT:A};f.fn.swipe.pageScroll={NONE:m,HORIZONTAL:E,VERTICAL:u,AUTO:s};f.fn.swipe.fingers={ONE:1,TWO:2,THREE:3,FOUR:4,FIVE:5,ALL:i};function w(F){if(F&&(F.allowPageScroll===undefined&&(F.swipe!==undefined||F.swipeStatus!==undefined))){F.allowPageScroll=m}if(F.click!==undefined&&F.tap===undefined){F.tap=F.click}if(!F){F={}}F=f.extend({},f.fn.swipe.defaults,F);return this.each(function(){var H=f(this);var G=H.data(C);if(!G){G=new D(this,F);H.data(C,G)}})}function D(a5,au){var au=f.extend({},au);var az=(a||d||!au.fallbackToMouseEvents),K=az?(d?(v?"MSPointerDown":"pointerdown"):"touchstart"):"mousedown",ax=az?(d?(v?"MSPointerMove":"pointermove"):"touchmove"):"mousemove",V=az?(d?(v?"MSPointerUp":"pointerup"):"touchend"):"mouseup",T=az?(d?"mouseleave":null):"mouseleave",aD=(d?(v?"MSPointerCancel":"pointercancel"):"touchcancel");var ag=0,aP=null,a2=null,ac=0,a1=0,aZ=0,H=1,ap=0,aJ=0,N=null;var aR=f(a5);var aa="start";var X=0;var aQ={};var U=0,a3=0,a6=0,ay=0,O=0;var aW=null,af=null;try{aR.bind(K,aN);aR.bind(aD,ba)}catch(aj){f.error("events not supported "+K+","+aD+" on jQuery.swipe")}this.enable=function(){aR.bind(K,aN);aR.bind(aD,ba);return aR};this.disable=function(){aK();return aR};this.destroy=function(){aK();aR.data(C,null);aR=null};this.option=function(bd,bc){if(typeof bd==="object"){au=f.extend(au,bd)}else{if(au[bd]!==undefined){if(bc===undefined){return au[bd]}else{au[bd]=bc}}else{if(!bd){return au}else{f.error("Option "+bd+" does not exist on jQuery.swipe.options")}}}return null};function aN(be){if(aB()){return}if(f(be.target).closest(au.excludedElements,aR).length>0){return}var bf=be.originalEvent?be.originalEvent:be;var bd,bg=bf.touches,bc=bg?bg[0]:bf;aa=g;if(bg){X=bg.length}else{if(au.preventDefaultEvents!==false){be.preventDefault()}}ag=0;aP=null;a2=null;aJ=null;ac=0;a1=0;aZ=0;H=1;ap=0;N=ab();S();ai(0,bc);if(!bg||(X===au.fingers||au.fingers===i)||aX()){U=ar();if(X==2){ai(1,bg[1]);a1=aZ=at(aQ[0].start,aQ[1].start)}if(au.swipeStatus||au.pinchStatus){bd=P(bf,aa)}}else{bd=false}if(bd===false){aa=q;P(bf,aa);return bd}else{if(au.hold){af=setTimeout(f.proxy(function(){aR.trigger("hold",[bf.target]);if(au.hold){bd=au.hold.call(aR,bf,bf.target)}},this),au.longTapThreshold)}an(true)}return null}function a4(bf){var bi=bf.originalEvent?bf.originalEvent:bf;if(aa===h||aa===q||al()){return}var be,bj=bi.touches,bd=bj?bj[0]:bi;var bg=aH(bd);a3=ar();if(bj){X=bj.length}if(au.hold){clearTimeout(af)}aa=k;if(X==2){if(a1==0){ai(1,bj[1]);a1=aZ=at(aQ[0].start,aQ[1].start)}else{aH(bj[1]);aZ=at(aQ[0].end,aQ[1].end);aJ=aq(aQ[0].end,aQ[1].end)}H=a8(a1,aZ);ap=Math.abs(a1-aZ)}if((X===au.fingers||au.fingers===i)||!bj||aX()){aP=aL(bg.start,bg.end);a2=aL(bg.last,bg.end);ak(bf,a2);ag=aS(bg.start,bg.end);ac=aM();aI(aP,ag);be=P(bi,aa);if(!au.triggerOnTouchEnd||au.triggerOnTouchLeave){var bc=true;if(au.triggerOnTouchLeave){var bh=aY(this);bc=F(bg.end,bh)}if(!au.triggerOnTouchEnd&&bc){aa=aC(k)}else{if(au.triggerOnTouchLeave&&!bc){aa=aC(h)}}if(aa==q||aa==h){P(bi,aa)}}}else{aa=q;P(bi,aa)}if(be===false){aa=q;P(bi,aa)}}function M(bc){var bd=bc.originalEvent?bc.originalEvent:bc,be=bd.touches;if(be){if(be.length&&!al()){G(bd);return true}else{if(be.length&&al()){return true}}}if(al()){X=ay}a3=ar();ac=aM();if(bb()||!am()){aa=q;P(bd,aa)}else{if(au.triggerOnTouchEnd||(au.triggerOnTouchEnd==false&&aa===k)){if(au.preventDefaultEvents!==false){bc.preventDefault()}aa=h;P(bd,aa)}else{if(!au.triggerOnTouchEnd&&a7()){aa=h;aF(bd,aa,B)}else{if(aa===k){aa=q;P(bd,aa)}}}}an(false);return null}function ba(){X=0;a3=0;U=0;a1=0;aZ=0;H=1;S();an(false)}function L(bc){var bd=bc.originalEvent?bc.originalEvent:bc;if(au.triggerOnTouchLeave){aa=aC(h);P(bd,aa)}}function aK(){aR.unbind(K,aN);aR.unbind(aD,ba);aR.unbind(ax,a4);aR.unbind(V,M);if(T){aR.unbind(T,L)}an(false)}function aC(bg){var bf=bg;var be=aA();var bd=am();var bc=bb();if(!be||bc){bf=q}else{if(bd&&bg==k&&(!au.triggerOnTouchEnd||au.triggerOnTouchLeave)){bf=h}else{if(!bd&&bg==h&&au.triggerOnTouchLeave){bf=q}}}return bf}function P(be,bc){var bd,bf=be.touches;if(J()||W()){bd=aF(be,bc,l)}if((Q()||aX())&&bd!==false){bd=aF(be,bc,t)}if(aG()&&bd!==false){bd=aF(be,bc,j)}else{if(ao()&&bd!==false){bd=aF(be,bc,b)}else{if(ah()&&bd!==false){bd=aF(be,bc,B)}}}if(bc===q){if(W()){bd=aF(be,bc,l)}if(aX()){bd=aF(be,bc,t)}ba(be)}if(bc===h){if(bf){if(!bf.length){ba(be)}}else{ba(be)}}return bd}function aF(bf,bc,be){var bd;if(be==l){aR.trigger("swipeStatus",[bc,aP||null,ag||0,ac||0,X,aQ,a2]);if(au.swipeStatus){bd=au.swipeStatus.call(aR,bf,bc,aP||null,ag||0,ac||0,X,aQ,a2);if(bd===false){return false}}if(bc==h&&aV()){clearTimeout(aW);clearTimeout(af);aR.trigger("swipe",[aP,ag,ac,X,aQ,a2]);if(au.swipe){bd=au.swipe.call(aR,bf,aP,ag,ac,X,aQ,a2);if(bd===false){return false}}switch(aP){case p:aR.trigger("swipeLeft",[aP,ag,ac,X,aQ,a2]);if(au.swipeLeft){bd=au.swipeLeft.call(aR,bf,aP,ag,ac,X,aQ,a2)}break;case o:aR.trigger("swipeRight",[aP,ag,ac,X,aQ,a2]);if(au.swipeRight){bd=au.swipeRight.call(aR,bf,aP,ag,ac,X,aQ,a2)}break;case e:aR.trigger("swipeUp",[aP,ag,ac,X,aQ,a2]);if(au.swipeUp){bd=au.swipeUp.call(aR,bf,aP,ag,ac,X,aQ,a2)}break;case x:aR.trigger("swipeDown",[aP,ag,ac,X,aQ,a2]);if(au.swipeDown){bd=au.swipeDown.call(aR,bf,aP,ag,ac,X,aQ,a2)}break}}}if(be==t){aR.trigger("pinchStatus",[bc,aJ||null,ap||0,ac||0,X,H,aQ]);if(au.pinchStatus){bd=au.pinchStatus.call(aR,bf,bc,aJ||null,ap||0,ac||0,X,H,aQ);if(bd===false){return false}}if(bc==h&&a9()){switch(aJ){case c:aR.trigger("pinchIn",[aJ||null,ap||0,ac||0,X,H,aQ]);if(au.pinchIn){bd=au.pinchIn.call(aR,bf,aJ||null,ap||0,ac||0,X,H,aQ)}break;case A:aR.trigger("pinchOut",[aJ||null,ap||0,ac||0,X,H,aQ]);if(au.pinchOut){bd=au.pinchOut.call(aR,bf,aJ||null,ap||0,ac||0,X,H,aQ)}break}}}if(be==B){if(bc===q||bc===h){clearTimeout(aW);clearTimeout(af);if(Z()&&!I()){O=ar();aW=setTimeout(f.proxy(function(){O=null;aR.trigger("tap",[bf.target]);if(au.tap){bd=au.tap.call(aR,bf,bf.target)}},this),au.doubleTapThreshold)}else{O=null;aR.trigger("tap",[bf.target]);if(au.tap){bd=au.tap.call(aR,bf,bf.target)}}}}else{if(be==j){if(bc===q||bc===h){clearTimeout(aW);clearTimeout(af);O=null;aR.trigger("doubletap",[bf.target]);if(au.doubleTap){bd=au.doubleTap.call(aR,bf,bf.target)}}}else{if(be==b){if(bc===q||bc===h){clearTimeout(aW);O=null;aR.trigger("longtap",[bf.target]);if(au.longTap){bd=au.longTap.call(aR,bf,bf.target)}}}}}return bd}function am(){var bc=true;if(au.threshold!==null){bc=ag>=au.threshold}return bc}function bb(){var bc=false;if(au.cancelThreshold!==null&&aP!==null){bc=(aT(aP)-ag)>=au.cancelThreshold}return bc}function ae(){if(au.pinchThreshold!==null){return ap>=au.pinchThreshold}return true}function aA(){var bc;if(au.maxTimeThreshold){if(ac>=au.maxTimeThreshold){bc=false}else{bc=true}}else{bc=true}return bc}function ak(bc,bd){if(au.preventDefaultEvents===false){return}if(au.allowPageScroll===m){bc.preventDefault()}else{var be=au.allowPageScroll===s;switch(bd){case p:if((au.swipeLeft&&be)||(!be&&au.allowPageScroll!=E)){bc.preventDefault()}break;case o:if((au.swipeRight&&be)||(!be&&au.allowPageScroll!=E)){bc.preventDefault()}break;case e:if((au.swipeUp&&be)||(!be&&au.allowPageScroll!=u)){bc.preventDefault()}break;case x:if((au.swipeDown&&be)||(!be&&au.allowPageScroll!=u)){bc.preventDefault()}break}}}function a9(){var bd=aO();var bc=Y();var be=ae();return bd&&bc&&be}function aX(){return !!(au.pinchStatus||au.pinchIn||au.pinchOut)}function Q(){return !!(a9()&&aX())}function aV(){var bf=aA();var bh=am();var be=aO();var bc=Y();var bd=bb();var bg=!bd&&bc&&be&&bh&&bf;return bg}function W(){return !!(au.swipe||au.swipeStatus||au.swipeLeft||au.swipeRight||au.swipeUp||au.swipeDown)}function J(){return !!(aV()&&W())}function aO(){return((X===au.fingers||au.fingers===i)||!a)}function Y(){return aQ[0].end.x!==0}function a7(){return !!(au.tap)}function Z(){return !!(au.doubleTap)}function aU(){return !!(au.longTap)}function R(){if(O==null){return false}var bc=ar();return(Z()&&((bc-O)<=au.doubleTapThreshold))}function I(){return R()}function aw(){return((X===1||!a)&&(isNaN(ag)||ag<au.threshold))}function a0(){return((ac>au.longTapThreshold)&&(ag<r))}function ah(){return !!(aw()&&a7())}function aG(){return !!(R()&&Z())}function ao(){return !!(a0()&&aU())}function G(bc){a6=ar();ay=bc.touches.length+1}function S(){a6=0;ay=0}function al(){var bc=false;if(a6){var bd=ar()-a6;if(bd<=au.fingerReleaseThreshold){bc=true}}return bc}function aB(){return !!(aR.data(C+"_intouch")===true)}function an(bc){if(!aR){return}if(bc===true){aR.bind(ax,a4);aR.bind(V,M);if(T){aR.bind(T,L)}}else{aR.unbind(ax,a4,false);aR.unbind(V,M,false);if(T){aR.unbind(T,L,false)}}aR.data(C+"_intouch",bc===true)}function ai(be,bc){var bd={start:{x:0,y:0},last:{x:0,y:0},end:{x:0,y:0}};bd.start.x=bd.last.x=bd.end.x=bc.pageX||bc.clientX;bd.start.y=bd.last.y=bd.end.y=bc.pageY||bc.clientY;aQ[be]=bd;return bd}function aH(bc){var be=bc.identifier!==undefined?bc.identifier:0;var bd=ad(be);if(bd===null){bd=ai(be,bc)}bd.last.x=bd.end.x;bd.last.y=bd.end.y;bd.end.x=bc.pageX||bc.clientX;bd.end.y=bc.pageY||bc.clientY;return bd}function ad(bc){return aQ[bc]||null}function aI(bc,bd){bd=Math.max(bd,aT(bc));N[bc].distance=bd}function aT(bc){if(N[bc]){return N[bc].distance}return undefined}function ab(){var bc={};bc[p]=av(p);bc[o]=av(o);bc[e]=av(e);bc[x]=av(x);return bc}function av(bc){return{direction:bc,distance:0}}function aM(){return a3-U}function at(bf,be){var bd=Math.abs(bf.x-be.x);var bc=Math.abs(bf.y-be.y);return Math.round(Math.sqrt(bd*bd+bc*bc))}function a8(bc,bd){var be=(bd/bc)*1;return be.toFixed(2)}function aq(){if(H<1){return A}else{return c}}function aS(bd,bc){return Math.round(Math.sqrt(Math.pow(bc.x-bd.x,2)+Math.pow(bc.y-bd.y,2)))}function aE(bf,bd){var bc=bf.x-bd.x;var bh=bd.y-bf.y;var be=Math.atan2(bh,bc);var bg=Math.round(be*180/Math.PI);if(bg<0){bg=360-Math.abs(bg)}return bg}function aL(bd,bc){var be=aE(bd,bc);if((be<=45)&&(be>=0)){return p}else{if((be<=360)&&(be>=315)){return p}else{if((be>=135)&&(be<=225)){return o}else{if((be>45)&&(be<135)){return x}else{return e}}}}}function ar(){var bc=new Date();return bc.getTime()}function aY(bc){bc=f(bc);var be=bc.offset();var bd={left:be.left,right:be.left+bc.outerWidth(),top:be.top,bottom:be.top+bc.outerHeight()};return bd}function F(bc,bd){return(bc.x>bd.left&&bc.x<bd.right&&bc.y>bd.top&&bc.y<bd.bottom)}}}));
/* resize */
(function($,h,c){var a=$([]),e=$.resize=$.extend($.resize,{}),i,k="setTimeout",j="resize",d=j+"-special-event",b="delay",f="throttleWindow";e[b]=250;e[f]=true;$.event.special[j]={setup:function(){if(!e[f]&&this[k]){return false}var l=$(this);a=a.add(l);$.data(this,d,{w:l.width(),h:l.height()});if(a.length===1){g()}},teardown:function(){if(!e[f]&&this[k]){return false}var l=$(this);a=a.not(l);l.removeData(d);if(!a.length){clearTimeout(i)}},add:function(l){if(!e[f]&&this[k]){return false}var n;function m(s,o,p){var q=$(this),r=$.data(this,d);r.w=o!==c?o:q.width();r.h=p!==c?p:q.height();n.apply(this,arguments)}if($.isFunction(l)){n=l;return m}else{n=l.handler;l.handler=m}}};function g(){i=h[k](function(){a.each(function(){var n=$(this),m=n.width(),l=n.height(),o=$.data(this,d);if(m!==o.w||l!==o.h){n.trigger(j,[o.w=m,o.h=l])}});g()},e[b])}})(jQuery,this);
//上下运动
function HCMUI_TopAndDown(selecter, buttomStart, moveVal, speed1, speed2){
	if(typeof(speed1) == 'undefined'){speed1 = 800;}
	if(typeof(speed2) == 'undefined'){speed2 = 600;}
	$(selecter).animate({'bottom': buttomStart+ moveVal},speed1,function(){$(selecter).animate({'bottom':buttomStart} ,speed2, function(){HCMUI_TopAndDown(selecter, buttomStart, moveVal, speed1, speed2);});});
}
//多功能菜单
function HCMUI_Menu(meunId, sonMenuId){
	this.meunId           = meunId;
	this.sonMenuId        = sonMenuId;
	this.background       = '#303538';
	this.width            = '32%';
	this.height           = '100%';
	this.opacity          = '0.98';
	this.boxShadow        = '-1px 0px 1px #333333';
	//子菜单 边框设置
	this.borderTop        = '0px solid #900';
	this.borderRight      = '0px solid #900';
	this.borderBottom     = '0px solid #900';
	this.borderLeft       = '0px solid #900';
	//子菜单内li 边框样式设置
	this.liBorderBottom   = '1px dashed #797E89'
	//子菜单内文字样式设置
	this.fontSize         = '15px';
	this.fontColor        = '#797E89';
	//菜单动画速度
	this.speed           = 100;
	var thisObj          = this;
	//核心函数
	this.start           = function(){
		$(this.sonMenuId).css({
			'background'               : this.background, 
			'width'                    : this.width, 
			'height'                   : this.height,
			'opacity'                  : this.opacity,
			'boxShadow'                : this.boxShadow,
			'border-top'               : this.borderTop,
			'border-right'             : this.borderRight,
			'border-bottom'            : this.borderBottom,
			'border-left'              : this.borderLeft
		});
		$(this.sonMenuId+' li').css({'borderBottom':this.liBorderBottom});
		$(this.sonMenuId+' a').css({'font-size':this.fontSize, 'color':this.fontColor});
		$(this.meunId).click(function(){
			$(thisObj.sonMenuId).stop();
			if($(thisObj.sonMenuId).is(":hidden")){
				$(thisObj.sonMenuId).show();
				$(thisObj.sonMenuId).animate({'right':0}, thisObj.speed);
				return false;
			}
			$(thisObj.sonMenuId).animate({'right':-500}, thisObj.speed , function(){$(thisObj.sonMenuId).hide();});
		});
	}
}
function HCMUI_MenuClose(sonMenuId){$(sonMenuId).animate({'right':-500}, 500 , function(){$(sonMenuId).hide();});}
//下拉菜单美化插件
function HCMUI_SelectBeautify(id, callBack){
	this.obj          = $('#'+id);
	this.optionHtml   = '';
	this.mainStyle    = 'HUI_SelectMenu';
	this.menuStyle    = 'HUI_SelectMenuSon';
	this.speed        = 50;
	this.width        = '100%';
	this.height       = 'auto';
	this.run          = function(){
		if(this.width = '100%'){var pWidth = this.obj.parent().width(); this.width = pWidth - 22;}
		this.obj.hide();
		var sObj      = this.obj;
		var hoverBg   = this.hoverBg;
		var mainHtml  = '<div class="'+this.mainStyle+'" style="width:'+this.width+';">'+this.obj.find(":selected").html()+'</div>';
		this.obj.after(mainHtml);
		var menuHtml  = '<div class="'+this.menuStyle+'" style="width:'+this.width+'; height:'+this.height+';"><ul>';
		this.obj.find('option').each(function(){menuHtml += "<li>"+$(this).html()+"</li>";});
		menuHtml += '</ul></div>';
		this.obj.next().after(menuHtml);
		//绑定点击事件
		this.obj.next().click(function(){
			if($(this).next().is(':visible')){$(this).next().slideUp(this.speed); return false;}
			var sets = $(this).offset();
			$(this).next().css({top:sets.top+$(this).outerHeight(true), left:sets.left});
			$(this).next().slideDown(this.speed);
			//绑定鼠标移出事件
			$(this).next().hover(function(){},function(){$(this).slideUp(this.speed);});
			//绑定点击选择事件
			$(this).next().find('li').unbind('click');
			$(this).next().find('li').click(function(){
				sObj.next().html($(this).html());
				sObj.get(0).selectedIndex  = $(this).index();
				sObj.next().next().hide();
				//执行回调函数
				if(typeof(callBack) != 'undefined'){callBack();}
			});
		});
	}
}
//消息提示框
function HCMUI_AutoMsg(msg, msgWidth, msgTime){
	if(typeof(msgWidth) == 'undefined'){msgWidth = '58%';}
	if(typeof(msgTime) == 'undefined'){msgTime = 2500;}
	$('<div id="HUI_AutoMsg"></div>').appendTo('body');
	$('<div id="HUI_AutoMsgIn">'+msg+'</div>').appendTo('#HUI_AutoMsg');
	$('#HUI_AutoMsgIn').css({'width':msgWidth});
	$('#HUI_AutoMsg').addClass('HUI_FadeInFB');
	$('#HUI_AutoMsg').delay(msgTime).fadeOut(200, function(){$('#HUI_AutoMsg').remove();});
}
function HCMUI_CClose(){$('#HUI_Mask').remove();}
function HCMUI_Alert(title, msg, buttonTitle, butUrl, isAimate){
	if(typeof(buttonTitle) == 'undefined'){buttonTitle = '确定';}
	if(typeof(isAimate) == 'undefined'){isAimate = true;}
	if(typeof(butUrl) == 'undefined'){butUrl = '';}
	HCMUI_CClose();
	$('<div id="HUI_Mask"></div>').appendTo('body');
	$('<div id="HUI_Dialog"></div>').appendTo('#HUI_Mask');
	$('<div id="HUI_DialogT">'+title+'</div>').appendTo('#HUI_Dialog');
	$('<div id="HUI_DialogMsg">'+msg+'</div>').appendTo('#HUI_Dialog');
	$('<div id="HUI_DialogBut">'+buttonTitle+'</div>').appendTo('#HUI_Dialog');
	if(isAimate){$('#HUI_Dialog').addClass('HUI_FadeInFT');}
	$('#HUI_DialogBut').click(function(){if(butUrl != ''){location.href = butUrl;}else{$('#HUI_Mask').remove(); $('#HUI_Dialog').remove();}});
	$('#HUI_DialogT').unbind('click');
	$('#HUI_DialogT').click(function(){HCMUI_CClose(); $('#HUI_Dialog').remove();});
}
function HCMUI_Confirm(title, msg, butUrl, buttonLTitle, buttonRTitle, isAimate){
	if(typeof(buttonLTitle) == 'undefined'){buttonLTitle = '取消';}
	if(typeof(buttonRTitle) == 'undefined'){buttonRTitle = '确定';}
	if(typeof(isAimate)     == 'undefined'){isAimate     = true;}
	HCMUI_CClose();
	$('<div id="HUI_Mask"></div>').appendTo('body');
	$('<div id="HUI_Dialog"></div>').appendTo('#HUI_Mask');
	$('<div id="HUI_DialogT">'+title+'</div>').appendTo('#HUI_Dialog');
	$('<div id="HUI_DialogMsg">'+msg+'</div>').appendTo('#HUI_Dialog');
	$('<div id="HUI_DialogBut"></div>').appendTo('#HUI_Dialog');
	$('<div id="HUI_DialogButL">'+buttonLTitle+'</div>').appendTo('#HUI_DialogBut');
	$('<div id="HUI_DialogButR">'+buttonRTitle+'</div>').appendTo('#HUI_DialogBut');
	if(isAimate){$('#HUI_Dialog').addClass('HUI_FadeInFT');}
	$('#HUI_DialogButR').click(function(){var str = butUrl.substr(0,3);
	if(str == 'js:'){eval(butUrl.substr(3));}else{location.href = butUrl;}
	$('#HUI_Mask').remove(); $('#HUI_Dialog').remove();});
	$('#HUI_DialogButL').click(function(){$('#HUI_Mask').remove(); $('#HUI_Dialog').remove();});
	$('#HUI_DialogT').unbind('click');
	$('#HUI_DialogT').click(function(){$('#HUI_Mask').remove(); $('#HUI_Dialog').remove();});
}
//loading
function HCMUI_Loading(msg){
	if(typeof(msg) == 'undefined'){msg = '加载中，请稍候';} var html = '<div id="HUI_Loaing">'+ '<div id="HUI_LoadingIn"><div id="HUI_Spinner"><div class="bounce1"></div><div class="bounce2"></div><div class="bounce3"></div></div><div id="HUI_LoadingMsg">'+msg+'</div></div></div><div id="HUI_Mask"></div>';
	$(html).appendTo('body');
}
function HCMUI_LoadingClose(){$('#HUI_Loaing,#HUI_Mask').remove();}
//旋转插件
(function($){
    function getTransformProperty(element) {
        var properties = ['transform', 'WebkitTransform', 'MozTransform', 'msTransform', 'OTransform']; var p;
        while (p = properties.shift()) {if (element.style[p] !== undefined) {return p;}} return false;
    }
    $.cssHooks['rotate'] = {
        get: function(elem, computed, extra){
            var property = getTransformProperty(elem);
            if(property) {return elem.style[property].replace(/.*rotate\((.*)deg\).*/, '$1');} else {return '';}
        },
        set: function(elem, value){
            var property = getTransformProperty(elem);
            if(property){
                value = parseInt(value); $(elem).data('rotatation', value);
                if(value == 0) {elem.style[property] = '';} else {elem.style[property] = 'rotate(' + value%360 + 'deg)';}
            } else { return '';}
        }
    };
    $.fx.step['rotate'] = function(fx){ $.cssHooks['rotate'].set(fx.elem, fx.now);};
})(jQuery);
//进度条动画
function HCMUI_Progress(selecter, val, speed){
	$(selecter).find('span').stop();
	if(typeof(speed) == 'undefined'){speed = 300;}
	$(selecter).find('span').html(val+"%").animate({'width':val+"%"},speed);
}
//圆形进度动条函数
function HUI_CircleProgress(progresId, num){
	if(num < 0){num = 0;}
	if(num > 100){num = 100;}
	var speed1 = 300, speed2 = 300;
	var ProgressObj = $(progresId);
	var hiddenSize  =  ProgressObj.find(':hidden').size();
	if(hiddenSize < 1){
		ProgressObj.find('.rightCircle').animate({rotate:225}, 0, 'linear');
		ProgressObj.find('.leftCircle').animate({rotate:225}, 0, 'linear');
		$('<input type="hidden" value="" />').appendTo(ProgressObj);
	}
	ProgressObj.find('div').stop();
	ProgressObj.find('.HUI_CircleProgressBg').html(num+"%");
	var degVal1 = parseInt((num / 100) * 360 + 225);
	if(degVal1 > 405){degVal1 = 405;}
	var degVal2 = parseInt(((num - 50) / 100) * 360 + 225);
	if(degVal1 > 360){speed1 = 0;} if(degVal2 > 360){speed2 = 0;}
	if(num > 50 && ProgressObj.find(":hidden").val() == ''){
		ProgressObj.find('.rightCircle').animate({rotate:degVal1}, 300, 'linear', function(){
			if(degVal2 > 225){ProgressObj.find('.leftCircle').animate({rotate:degVal2}, speed2, 'linear');}
		});
		ProgressObj.find(":hidden").val('loaded');
	}else{
		ProgressObj.find('.rightCircle').animate({rotate:degVal1}, speed1, 'linear', function(){
			if(degVal2 > 225){ProgressObj.find('.leftCircle').animate({rotate:degVal2}, speed2, 'linear');}
		});
	}
}
//整个页面加载
function HUI_SLoading(logoHtml, objs, func){
	if(typeof(logoHtml) == 'undefined' || logoHtml == ''){logoHtml = '<div style="width:58%;"><img src="imgs/logo.png" width="100%" /></div>';}
	if(typeof(objs) == 'undefined' || objs == ''){objs = 'img';}
	$(objs).hide(); $('<div id="HUI_Mask"></div>').appendTo('body'); $('#HUI_Mask').css({'background':'#FFFFFF'});
	$('<div class="HUI_CENTER" style="position:fixed; z-index:99999; width:75%;">'+logoHtml+'<div class="HUI_Progress" id="HUI_Progress_01"><span style="width:1%;">1%</span></div></div>').appendTo('#HUI_Mask');
	var loadTotal = $(objs).size(); var num = 0; var bl = 0; var runed = null;
	var timeId = setTimeout(function(){runed = 1; $('#HUI_Mask').remove(); $(objs).show(); if(typeof(func) != 'undefined'){eval(func);}}, 5000);
	$(objs).each(function(){$(this).load(function(){num++; var bl = Math.round((num / loadTotal)*100,0); HCMUI_Progress('#HUI_Progress_01', bl); if(num >= loadTotal){$('#HUI_Mask').remove(); $(objs).show(); clearTimeout(timeId); if(typeof(func) != 'undefined' && runed == null){eval(func);}}});
	});
}
//幻灯片动画
function HCMUI_Slider(selecter){
	this.selecter       = $(selecter);
	var thisObj         = this;
	this.sliderSize     = this.selecter.find('li').size();
	this.pointSize      = 12;
	this.timeId         = null;
	this.winWidth       = 300;
	this.speed          = 500;
	this.delay          = 5000;
	this.point          = null;
	this.pointStyle     = 'HUI_SliderPoints';
	this.pointStyleSed  = 'HUI_SliderPointSed';
	this.indexHere      = 0;
	this.reSizeId       = null;
	this.start          = function(){
		this.winWidth   = this.selecter.parent().width();
		this.selecter.css({'width':this.winWidth});
		this.selecter.find('li').css({'width':this.winWidth});
		this.selecter.find('ul').css({'width': (this.sliderSize + 1 )* this.winWidth + 10});
		this.selecter.find('li').css({'display':'block'});
		if(this.selecter.find('.HUI_SliderPoint').size() < 1){
			this.selecter.find('li').eq(0).clone().appendTo(this.selecter.find('ul'));
			$(this.selecter).append('<div class="HUI_SliderPoint"><div class="HUI_SliderPointIn"></div></div>');
			this.point = this.selecter.find('.HUI_SliderPointIn');
			for(i = 0; i < this.sliderSize; i++){this.point.append('<div class="'+this.pointStyle+'"></div>');}
			this.point.find('div').css({width:this.pointSize, height:this.pointSize});
			this.point.css({width:(this.pointSize + 6) * this.sliderSize + 2});
		}
		this.selecter.find('li').unbind('swipe');
		this.selecter.find('li').swipe({
			swipe:function(event, direction, distance, duration, fingerCount, fingerData){
				(thisObj.selecter.find('.'+thisObj.pointStyleSed).size() < 1) ? thisObj.indexHere = 0 : thisObj.indexHere = thisObj.selecter.find('.'+thisObj.pointStyleSed).index();
				if(direction == 'right'){thisObj.slideNow(thisObj.indexHere - 1);}else if(direction == 'left'){thisObj.slideNow(thisObj.indexHere + 1);}
		    }
		});
		if(this.selecter.find('.'+this.pointStyleSed).size() < 1){this.slideNow(0);}
		this.point.find('div').unbind('click');
		this.point.find('div').click(function(){thisObj.indexHere = $(this).index(); thisObj.slideNow(thisObj.indexHere);});
		this.selecter.parent().unbind('resize');
		this.selecter.parent().resize(function(){clearTimeout(thisObj.reSizeId); thisObj.reSizeId = setTimeout(function(){thisObj.start();}, 100);});
	}
	this.slideNow = function(index){
		if(index < 0){index = this.sliderSize - 1;}
		this.selecter.find('ul').stop();
		if(this.timeId != null){clearTimeout(this.timeId);}
		thisObj.pointSelect(index);
		this.selecter.find('ul').animate({'margin-left': index * this.winWidth * -1}, thisObj.speed, function(){
			if(index < thisObj.sliderSize){thisObj.timeId = setTimeout(function(){thisObj.slideNow(index+1)},thisObj.delay);}
			else{thisObj.pointSelect(0); thisObj.selecter.find('ul').css({'margin-left':0}); thisObj.timeId = setTimeout(function(){thisObj.slideNow(1)},thisObj.delay);}
		});
	}
	this.pointSelect = function (index){this.point.find('div').removeClass(this.pointStyleSed); this.point.find('div').eq(index).addClass(this.pointStyleSed);}
}
//整屏滚动
function HCMUI_FullPage(selecter){
	this.selecter  = $(selecter);
	this.winHeight = 300;
	this.index     = 0
	var thisObj    = this;
	this.prev      = null;
	this.current   = null;
	this.speed     = 600;
	this.totoal    = 0;
	this.footerBut = true;
	this.funs      = null;
	this.start    = function(){
		this.winHeight = $(window).height();
		this.selecter.css({'width':'100%', 'height':this.winHeight});
		this.selecter.find('li').css({'width':'100%', 'height':this.winHeight});
		this.totoal    = this.selecter.find('li').size();
		if(this.selecter.find('.HCMUI_FullPage_moved').size() < 1){
			this.selecter.find('li').eq(0).addClass('HCMUI_FullPage_moved');
			this.selecter.find('li').swipe({
				swipe:function(event, direction, distance, duration, fingerCount, fingerData){
					thisObj.index = thisObj.selecter.find('.HCMUI_FullPage_moved').index();
					if(direction == 'up'){thisObj.changePage(thisObj.index + 1);}else if(direction == 'down'){thisObj.changePage(thisObj.index - 1);}
				}
			});
			if(this.footerBut){
				$('<div class="HUI_ToTopButtons"><div class="HUI_ToTopButtonsIn" id="HCMUI_BUT_INFULLPAGE"><img src="hcmuiimgs/icon_totop.png"/></div></div>').appendTo('body');
				$('#HCMUI_BUT_INFULLPAGE').click(function(){
					thisObj.index = thisObj.selecter.find('.HCMUI_FullPage_moved').index();
					thisObj.changePage(thisObj.index + 1);
				});
			}
			$(window).resize(function(){thisObj.start();});
		}
	}
	this.changePage = function(index){
		var cWinHeight = $(window).height();
		if(index + 1 >=this.totoal){$('.HUI_ToTopButtons').hide();}else{$('.HUI_ToTopButtons').show();}
		if(index >= this.totoal || index < 0){return false;}
		this.current = this.selecter.find('li').eq(index);
		if(typeof(this.current) == 'undefined'){return false;}
		this.selecter.find('li').removeClass();
		this.current.addClass('HCMUI_FullPage_moved');
		this.selecter.find('ul').animate({'margin-top':index * cWinHeight * -1}, this.speed, function(){
			if(thisObj.funs == null){return false;}
			console.log(thisObj.funs[index]);
			if(typeof(thisObj.funs[index]) != 'undefined' && thisObj.funs[index] != ''){eval(thisObj.funs[index]);}
		});
	}
}
//信息上下滚动
function HCMUI_AnimateMsg(selecter, showMsgNumber, speed){
	if(typeof(speed) == 'undefined'){speed = 3000;}
	if(typeof(showMsgNumber) == 'undefined'){showMsgNumber = 5;}
	var selecter  = $(selecter);
	var msgHeight = selecter.find('li').eq(0).outerHeight(true);
	selecter.css({height:msgHeight*showMsgNumber});
	setInterval(function(){
		selecter.find('ul').animate({'margin-top':msgHeight*-1},500,function(){selecter.find('ul').css({'margin-top':0}); selecter.find('ul').find('li').eq(0).appendTo(selecter.find('ul'));});
	}, speed);
}
/*
表单元素验证
支持检查类型             : 描述
string        : 字符串长度验证 参数格式 checkData="x," 或 checkData="x,x"
int           : 整数及整数位数验证 参数格式 checkData="x," 或 checkData="x,x"
between       : 2数之间验证(不限制数值类型) 参数格式 checkData="x,"  checkData=",x" 或 checkData="x,x"
betweenD      : 2数之间验证(数值类型为整数) 参数格式 checkData="x," checkData=",x" 或 checkData="x,x"
betweenF      : 2数之间验证(数值类型为小数) 参数格式 checkData="x," checkData=",x" checkData="x,x"
same          : 是否为某个固定值 参数格式 checkData="xx"
sameWith      : 是否和指定id表单元素的值相等 参数格式 checkData="元素id"
notSame       : 不等某个固定值 参数格式 checkData="xx"
notSameWith   : 是否和指定id表单元素的值不相等 参数格式 checkData="元素id"
email         : 电子邮箱验证 (无需参数)
phone         : 手机号码验证(无需参数)
url           : 验证字符串是否为网址(无需参数)
zipCode       : 国内邮编(无需参数)
reg           : 正则表达式验证 参数格式 checkData="正则表达式内容"
fun           : 通过调用自定义函数进行验证 自动传递值到改函数。例: func(val); 自定义函数的返回值必须为布尔类型(验证成功返回真，否则返回假)。
*/
var HCMUI_FormCheckErrorMsg = '';
var HCMUI_FormCheckErrorObj = null;
jQuery.fn.extend({
	HCMUI_FormCheck : function(){
		var HCMUI_CheckStatus = true;
		$(this).find('input,select,textarea').each(function(){
			var checkRes = HCMUI_FormCheckBase($(this), true);
			if(!checkRes){HCMUI_CheckStatus = false; return false;}
		});
		if(HCMUI_CheckStatus){if(typeof(HCMUI_AttachFormCheck) != 'undefined'){HCMUI_CheckStatus = HCMUI_AttachFormCheck();}}
		return HCMUI_CheckStatus;
	},
	HCMUI_FormAutoCheck : function(){
		$(this).find('input,select,textarea').each(function(){
			$(this).change(function(){
				var res = HCMUI_FormCheckBase($(this), false);
				if(res){HCMUI_FormAutoCheckRight($(this));}else{HCMUI_FormAutoCheckError($(this));}
			});
		});
	}
});
function HCMUI_FormCheckBase(cObj, isMsg){
	var checkType  = cObj.attr('checkType');
	if(typeof(checkType) == 'undefined'){return true;}
	checkType      = checkType.toLowerCase();
	var checkData  = cObj.attr('checkData');
	checkMsg       = cObj.attr('checkMsg');
	if(typeof(checkMsg) == 'undefined'){return true;}
	var checkVal   = cObj.val();
	switch(checkType){
		case 'string' : 
			var checkArr  = checkData.split(',');
			if(checkVal.length < checkArr[0]){return hcFormCheckReError(cObj, checkMsg, isMsg);}
			if(checkArr[1] != ''){if(checkVal.length > checkArr[1]){return hcFormCheckReError(cObj, checkMsg, isMsg);}}
		break;
		case 'int' :
			var reg  = new RegExp('^\-?[0-9]{'+checkData+'}$');
			if(!reg.test(checkVal)){return hcFormCheckReError(cObj, checkMsg, isMsg);}
			var reg2 = new RegExp('^\-?0+[0-9]+$');
			if(reg2.test(checkVal)){return hcFormCheckReError(cObj, checkMsg, isMsg);}
		break;
		case 'between' : 
			if(!hcFormCheckNumber(checkVal, checkData, cObj, checkMsg, isMsg)){return false;}
		break;
		case 'betweend' : 
			var reg  = new RegExp('^\-?[0-9]+$');
			if(!reg.test(checkVal)){return hcFormCheckReError(cObj, checkMsg, isMsg);}
			if(!hcFormCheckNumber(checkVal, checkData, cObj, checkMsg, isMsg)){return false;}
		break;
		case 'betweenf' : 
			var reg  = new RegExp('^\-?[0-9]+\.[0-9]+$');
			if(!reg.test(checkVal)){return hcFormCheckReError(cObj, checkMsg, isMsg);}
			if(!hcFormCheckNumber(checkVal, checkData, cObj, checkMsg, isMsg)){return false;}
		break;
		case 'same' : 
			if(checkVal != checkData){return hcFormCheckReError(cObj, checkMsg, isMsg);}
		break;
		case 'samewith' : 
			if(checkVal != $('#'+checkData).val()){return hcFormCheckReError(cObj, checkMsg, isMsg);}
		break;
		case 'notsame' : 
			if(checkVal == checkData){return hcFormCheckReError(cObj, checkMsg, isMsg);}
		break;
		case 'notsamewith' : 
			if(checkVal == $('#'+checkData).val()){return hcFormCheckReError(cObj, checkMsg, isMsg);}
		break;
		case 'email' : 
			var reg = /^\w+([-+.']\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*$/;
			if(!reg.test(checkVal)){return hcFormCheckReError(cObj, checkMsg, isMsg);}
		break;
		case 'phone' :
			var reg = /^13[0-9]{9}$|14[0-9]{9}|15[0-9]{9}$|18[0-9]{9}$/;
			if(!reg.test(checkVal)){return hcFormCheckReError(cObj, checkMsg, isMsg);}
		break;
		case 'url'  :
			var reg = /^(\w+:\/\/)?\w+(\.\w+)+.*$/;
			if(!reg.test(checkVal)){return hcFormCheckReError(cObj, checkMsg, isMsg);}
		break;
		case 'zipcode'  :
			var reg = /^[0-9]{6}$/;
			if(!reg.test(checkVal)){return hcFormCheckReError(cObj, checkMsg, isMsg);}
		break;
		case 'reg'  : 
			var reg = new RegExp(checkData);
			if(!reg.test(checkVal)){return hcFormCheckReError(cObj, checkMsg, isMsg);}
		break;
		case 'fun'  : 
			eval('var res = '+checkData+'("'+checkVal+'");');
			if(!res){return hcFormCheckReError(cObj, checkMsg, isMsg);}
		break;
	}
	return true;
}
function hcFormCheckNumber(checkVal, checkData, cObj, checkMsg, isMsg){
	checkVal = Number(checkVal);
	if(isNaN(checkVal)){return hcFormCheckReError(cObj, checkMsg, isMsg);}
	cObj.val(checkVal);
	checkDataArray = checkData.split(',');
	if(checkDataArray[0] == ''){
		if(checkVal > Number(checkDataArray[1])){return hcFormCheckReError(cObj, checkMsg, isMsg);}
	}else if(checkDataArray[1] == ''){
		if(checkVal < Number(checkDataArray[0])){return hcFormCheckReError(cObj, checkMsg, isMsg);}
	}else{
		if(checkVal < Number(checkDataArray[0]) || checkVal > Number(checkDataArray[1])){
			return hcFormCheckReError(cObj, checkMsg, isMsg);
		}
	}
	return true;
}
function hcFormCheckReError(cObj, checkMsg, isMsg){
	HCMUI_FormCheckErrorObj = cObj;
	HCMUI_FormCheckErrorMsg = checkMsg;
	if(isMsg){
		if(typeof(HCMUI_FormCheckErrorShow) == 'undefined'){alert(HCMUI_FormCheckErrorMsg);}else{
			HCMUI_FormCheckErrorShow(HCMUI_FormCheckErrorMsg);
		}
	}
	return false;
}