function dj27(){var U='bootstrap',G='begin',B='gwt.codesvr.dj27=',T='gwt.codesvr=',m='dj27',K='startup',q='DUMMY',S=0,O=1,a='iframe',w='position:absolute; width:0; height:0; border:none; left: -1000px;',s=' top: -1000px;',F='autoplay',d='CSS1Compat',bp='<!doctype html>',pp='',Ip='<html><head><\/head><body><\/body><\/html>',Wp='undefined',yp='readystatechange',jp=10,Yp='Chrome',up='eval("',np='");',_p='script',kp='javascript',$p='moduleStartup',Mp='moduleRequested',fp='Failed to load ',lp='head',vp='meta',Qp='name',rp='dj27::',tp='::',Hp='gwt:property',zp='content',op='=',Np='gwt:onPropertyErrorFn',Ep='Bad handler "',Zp='" for "gwt:onPropertyErrorFn"',Cp='gwt:onLoadErrorFn',Rp='" for "gwt:onLoadErrorFn"',Ap='#',ep='?',Dp='/',ip='img',hp='clear.cache.gif',cp='baseUrl',Pp='dj27.nocache.js',Jp='base',gp='//',Xp='user.agent',Vp='webkit',Lp='safari',Up='msie',Gp=11,Bp='ie10',Tp=9,xp='ie9',mp=8,Kp='ie8',qp='gecko',Sp='gecko1_8',Op=2,ap=3,wp=4,sp='selectingPermutation',Fp='dj27.devmode.js',dp='9C519BE4D862F9C32C140FB1DF3FD548',bI='9C519BE4D862F9C32C140FB1DF3FD548',pI=':',II='.cache.js',WI='loadExternalRefs',yI='end',jI='http:',YI='file:',uI='_gwt_dummy_',nI='__gwtDevModeHook:dj27',_I='Ignoring non-whitelisted Dev Mode URL: ',kI=':moduleBase';var v=window;var Q=document;t(U,G);function r(){var b=v.location.search;return b.indexOf(B)!=-1||b.indexOf(T)!=-1}
function t(b,p){if(v.__gwtStatsEvent){v.__gwtStatsEvent({moduleName:m,sessionId:v.__gwtStatsSessionId,subSystem:K,evtGroup:b,millis:(new Date).getTime(),type:p})}}
dj27.__sendStats=t;dj27.__moduleName=m;dj27.__errFn=null;dj27.__moduleBase=q;dj27.__softPermutationId=S;dj27.__computePropValue=null;dj27.__getPropMap=null;dj27.__installRunAsyncCode=function(){};dj27.__gwtStartLoadingFragment=function(){return null};dj27.__gwt_isKnownPropertyValue=function(){return false};dj27.__gwt_getMetaProperty=function(){return null};var H=null;var o=v.__gwt_activeModules=v.__gwt_activeModules||{};o[m]={moduleName:m};dj27.__moduleStartupDone=function(j){var Y=o[m].bindings;o[m].bindings=function(){var b=Y?Y():{};var p=j[dj27.__softPermutationId];for(var I=S;I<p.length;I++){var W=p[I];b[W[S]]=W[O]}return b}};var N;function Z(){C();return N}
function C(){if(N){return}var b=Q.createElement(a);b.id=m;b.style.cssText=w+s;b.tabIndex=-1;b.allow=F;Q.body.appendChild(b);N=b.contentWindow.document;N.open();var p=document.compatMode==d?bp:pp;N.write(p+Ip);N.close()}
function R($){function M(b){function p(){if(typeof Q.readyState==Wp){return typeof Q.body!=Wp&&Q.body!=null}return /loaded|complete/.test(Q.readyState)}
var I=p();if(I){b();return}function W(){if(!I){if(!p()){return}I=true;b();if(Q.removeEventListener){Q.removeEventListener(yp,W,false)}if(j){clearInterval(j)}}}
if(Q.addEventListener){Q.addEventListener(yp,W,false)}var j=setInterval(function(){W()},jp)}
function f(I){function W(b,p){b.removeChild(p)}
var j=Z();var Y=j.body;var u;if(navigator.userAgent.indexOf(Yp)>-1&&window.JSON){var n=j.createDocumentFragment();n.appendChild(j.createTextNode(up));for(var _=S;_<I.length;_++){var k=window.JSON.stringify(I[_]);n.appendChild(j.createTextNode(k.substring(O,k.length-O)))}n.appendChild(j.createTextNode(np));u=j.createElement(_p);u.language=kp;u.appendChild(n);Y.appendChild(u);W(Y,u)}else{for(var _=S;_<I.length;_++){u=j.createElement(_p);u.language=kp;u.text=I[_];Y.appendChild(u);W(Y,u)}}}
dj27.onScriptDownloaded=function(b){M(function(){f(b)})};t($p,Mp);var l=Q.createElement(_p);l.src=$;if(dj27.__errFn){l.onerror=function(){dj27.__errFn(m,new Error(fp+code))}}Q.getElementsByTagName(lp)[S].appendChild(l)}
dj27.__startLoadingFragment=function(b){return D(b)};dj27.__installRunAsyncCode=function(b){var p=Z();var I=p.body;var W=p.createElement(_p);W.language=kp;W.text=b;I.appendChild(W);I.removeChild(W)};function A(){var I={};var W;var j;var Y=Q.getElementsByTagName(vp);for(var u=S,n=Y.length;u<n;++u){var _=Y[u],k=_.getAttribute(Qp),$;if(k){k=k.replace(rp,pp);if(k.indexOf(tp)>=S){continue}if(k==Hp){$=_.getAttribute(zp);if($){var M,f=$.indexOf(op);if(f>=S){k=$.substring(S,f);M=$.substring(f+O)}else{k=$;M=pp}I[k]=M}}else if(k==Np){$=_.getAttribute(zp);if($){try{W=eval($)}catch(b){alert(Ep+$+Zp)}}}else if(k==Cp){$=_.getAttribute(zp);if($){try{j=eval($)}catch(b){alert(Ep+$+Rp)}}}}}__gwt_getMetaProperty=function(b){var p=I[b];return p==null?null:p};H=W;dj27.__errFn=j}
function e(){function j(b){var p=b.lastIndexOf(Ap);if(p==-1){p=b.length}var I=b.indexOf(ep);if(I==-1){I=b.length}var W=b.lastIndexOf(Dp,Math.min(I,p));return W>=S?b.substring(S,W+O):pp}
function Y(b){if(b.match(/^\w+:\/\//)){}else{var p=Q.createElement(ip);p.src=b+hp;b=j(p.src)}return b}
function u(){var b=__gwt_getMetaProperty(cp);if(b!=null){return b}return pp}
function n(){var b=Q.getElementsByTagName(_p);for(var p=S;p<b.length;++p){if(b[p].src.indexOf(Pp)!=-1){return j(b[p].src)}}return pp}
function _(){var b=Q.getElementsByTagName(Jp);if(b.length>S){return b[b.length-O].href}return pp}
function k(){var b=Q.location;return b.href==b.protocol+gp+b.host+b.pathname+b.search+b.hash}
var $=u();if($==pp){$=n()}if($==pp){$=_()}if($==pp&&k()){$=j(Q.location.href)}$=Y($);return $}
function D(b){if(b.match(/^\//)){return b}if(b.match(/^[a-zA-Z]+:\/\//)){return b}return dj27.__moduleBase+b}
function i(){var Y=[];var u=S;function n(b,p){var I=Y;for(var W=S,j=b.length-O;W<j;++W){I=I[b[W]]||(I[b[W]]=[])}I[b[j]]=p}
var _=[];var k=[];function $(b){var p=k[b](),I=_[b];if(p in I){return p}var W=[];for(var j in I){W[I[j]]=j}if(H){H(b,W,p)}throw null}
k[Xp]=function(){var b=navigator.userAgent.toLowerCase();var p=Q.documentMode;if(function(){return b.indexOf(Vp)!=-1}())return Lp;if(function(){return b.indexOf(Up)!=-1&&(p>=jp&&p<Gp)}())return Bp;if(function(){return b.indexOf(Up)!=-1&&(p>=Tp&&p<Gp)}())return xp;if(function(){return b.indexOf(Up)!=-1&&(p>=mp&&p<Gp)}())return Kp;if(function(){return b.indexOf(qp)!=-1||p>=Gp}())return Sp;return pp};_[Xp]={'gecko1_8':S,'ie10':O,'ie8':Op,'ie9':ap,'safari':wp};__gwt_isKnownPropertyValue=function(b,p){return p in _[b]};dj27.__getPropMap=function(){var b={};for(var p in _){if(_.hasOwnProperty(p)){b[p]=$(p)}}return b};dj27.__computePropValue=$;v.__gwt_activeModules[m].bindings=dj27.__getPropMap;t(U,sp);if(r()){return D(Fp)}var M;try{n([Lp],dp);n([Sp],bI);M=Y[$(Xp)];var f=M.indexOf(pI);if(f!=-1){u=parseInt(M.substring(f+O),jp);M=M.substring(S,f)}}catch(b){}dj27.__softPermutationId=u;return D(M+II)}
function h(){if(!v.__gwt_stylesLoaded){v.__gwt_stylesLoaded={}}t(WI,G);t(WI,yI)}
A();dj27.__moduleBase=e();o[m].moduleBase=dj27.__moduleBase;var c=i();if(v){var P=!!(v.location.protocol==jI||v.location.protocol==YI);v.__gwt_activeModules[m].canRedirect=P;function J(){var p=uI;try{v.sessionStorage.setItem(p,p);v.sessionStorage.removeItem(p);return true}catch(b){return false}}
if(P&&J()){var g=nI;var X=v.sessionStorage[g];if(!/^http:\/\/(localhost|127\.0\.0\.1)(:\d+)?\/.*$/.test(X)){if(X&&(window.console&&console.log)){console.log(_I+X)}X=pp}if(X&&!v[g]){v[g]=true;v[g+kI]=e();var V=Q.createElement(_p);V.src=X;var L=Q.getElementsByTagName(lp)[S];L.insertBefore(V,L.firstElementChild||L.children[S]);return false}}}h();t(U,yI);R(c);return true}
dj27.succeeded=dj27();