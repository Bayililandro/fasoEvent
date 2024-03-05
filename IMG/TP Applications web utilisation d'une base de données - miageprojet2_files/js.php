
	stylePath = "/skins/ace/";
	_skin_path = "/skins/";
	_script_path = "/";
	baseHref = "http://miageprojet2.unice.fr";	
	_editor_path = "/editor/fckeditor";		
	_editor_url = "/editor/fckeditor/core";
	_editor_lang = "fr"; 
	_editor_skin = "";
	FCKToolbarSet = "Default";
	var _gallery_sort = "date-desc";
	var _total_images = 6;
	var Browser = new BrowserVersion();	
	FCKToolbarLocation = "Out:xToolbar";
	
/*
Copyright (c) 2008, Yahoo! Inc. All rights reserved.
Code licensed under the BSD License:
http://developer.yahoo.net/yui/license.txt
version: 2.5.2
*/
if(typeof YAHOO=="undefined"||!YAHOO){var YAHOO={};}YAHOO.namespace=function(){var A=arguments,E=null,C,B,D;for(C=0;C<A.length;C=C+1){D=A[C].split(".");E=YAHOO;for(B=(D[0]=="YAHOO")?1:0;B<D.length;B=B+1){E[D[B]]=E[D[B]]||{};E=E[D[B]];}}return E;};YAHOO.log=function(D,A,C){var B=YAHOO.widget.Logger;if(B&&B.log){return B.log(D,A,C);}else{return false;}};YAHOO.register=function(A,E,D){var I=YAHOO.env.modules;if(!I[A]){I[A]={versions:[],builds:[]};}var B=I[A],H=D.version,G=D.build,F=YAHOO.env.listeners;B.name=A;B.version=H;B.build=G;B.versions.push(H);B.builds.push(G);B.mainClass=E;for(var C=0;C<F.length;C=C+1){F[C](B);}if(E){E.VERSION=H;E.BUILD=G;}else{YAHOO.log("mainClass is undefined for module "+A,"warn");}};YAHOO.env=YAHOO.env||{modules:[],listeners:[]};YAHOO.env.getVersion=function(A){return YAHOO.env.modules[A]||null;};YAHOO.env.ua=function(){var C={ie:0,opera:0,gecko:0,webkit:0,mobile:null,air:0};var B=navigator.userAgent,A;if((/KHTML/).test(B)){C.webkit=1;}A=B.match(/AppleWebKit\/([^\s]*)/);if(A&&A[1]){C.webkit=parseFloat(A[1]);if(/ Mobile\//.test(B)){C.mobile="Apple";}else{A=B.match(/NokiaN[^\/]*/);if(A){C.mobile=A[0];}}A=B.match(/AdobeAIR\/([^\s]*)/);if(A){C.air=A[0];}}if(!C.webkit){A=B.match(/Opera[\s\/]([^\s]*)/);if(A&&A[1]){C.opera=parseFloat(A[1]);A=B.match(/Opera Mini[^;]*/);if(A){C.mobile=A[0];}}else{A=B.match(/MSIE\s([^;]*)/);if(A&&A[1]){C.ie=parseFloat(A[1]);}else{A=B.match(/Gecko\/([^\s]*)/);if(A){C.gecko=1;A=B.match(/rv:([^\s\)]*)/);if(A&&A[1]){C.gecko=parseFloat(A[1]);}}}}}return C;}();(function(){YAHOO.namespace("util","widget","example");if("undefined"!==typeof YAHOO_config){var B=YAHOO_config.listener,A=YAHOO.env.listeners,D=true,C;if(B){for(C=0;C<A.length;C=C+1){if(A[C]==B){D=false;break;}}if(D){A.push(B);}}}})();YAHOO.lang=YAHOO.lang||{};(function(){var A=YAHOO.lang,C=["toString","valueOf"],B={isArray:function(D){if(D){return A.isNumber(D.length)&&A.isFunction(D.splice);}return false;},isBoolean:function(D){return typeof D==="boolean";},isFunction:function(D){return typeof D==="function";},isNull:function(D){return D===null;},isNumber:function(D){return typeof D==="number"&&isFinite(D);},isObject:function(D){return(D&&(typeof D==="object"||A.isFunction(D)))||false;},isString:function(D){return typeof D==="string";},isUndefined:function(D){return typeof D==="undefined";},_IEEnumFix:(YAHOO.env.ua.ie)?function(F,E){for(var D=0;D<C.length;D=D+1){var H=C[D],G=E[H];if(A.isFunction(G)&&G!=Object.prototype[H]){F[H]=G;}}}:function(){},extend:function(H,I,G){if(!I||!H){throw new Error("extend failed, please check that "+"all dependencies are included.");}var E=function(){};E.prototype=I.prototype;H.prototype=new E();H.prototype.constructor=H;H.superclass=I.prototype;if(I.prototype.constructor==Object.prototype.constructor){I.prototype.constructor=I;}if(G){for(var D in G){if(A.hasOwnProperty(G,D)){H.prototype[D]=G[D];}}A._IEEnumFix(H.prototype,G);}},augmentObject:function(H,G){if(!G||!H){throw new Error("Absorb failed, verify dependencies.");}var D=arguments,F,I,E=D[2];if(E&&E!==true){for(F=2;F<D.length;F=F+1){H[D[F]]=G[D[F]];}}else{for(I in G){if(E||!(I in H)){H[I]=G[I];}}A._IEEnumFix(H,G);}},augmentProto:function(G,F){if(!F||!G){throw new Error("Augment failed, verify dependencies.");}var D=[G.prototype,F.prototype];for(var E=2;E<arguments.length;E=E+1){D.push(arguments[E]);}A.augmentObject.apply(this,D);},dump:function(D,I){var F,H,K=[],L="{...}",E="f(){...}",J=", ",G=" => ";if(!A.isObject(D)){return D+"";}else{if(D instanceof Date||("nodeType" in D&&"tagName" in D)){return D;}else{if(A.isFunction(D)){return E;}}}I=(A.isNumber(I))?I:3;if(A.isArray(D)){K.push("[");for(F=0,H=D.length;F<H;F=F+1){if(A.isObject(D[F])){K.push((I>0)?A.dump(D[F],I-1):L);}else{K.push(D[F]);}K.push(J);}if(K.length>1){K.pop();}K.push("]");}else{K.push("{");for(F in D){if(A.hasOwnProperty(D,F)){K.push(F+G);if(A.isObject(D[F])){K.push((I>0)?A.dump(D[F],I-1):L);}else{K.push(D[F]);}K.push(J);}}if(K.length>1){K.pop();}K.push("}");}return K.join("");},substitute:function(S,E,L){var I,H,G,O,P,R,N=[],F,J="dump",M=" ",D="{",Q="}";for(;;){I=S.lastIndexOf(D);if(I<0){break;}H=S.indexOf(Q,I);if(I+1>=H){break;}F=S.substring(I+1,H);O=F;R=null;G=O.indexOf(M);if(G>-1){R=O.substring(G+1);O=O.substring(0,G);}P=E[O];if(L){P=L(O,P,R);}if(A.isObject(P)){if(A.isArray(P)){P=A.dump(P,parseInt(R,10));}else{R=R||"";var K=R.indexOf(J);if(K>-1){R=R.substring(4);}if(P.toString===Object.prototype.toString||K>-1){P=A.dump(P,parseInt(R,10));}else{P=P.toString();}}}else{if(!A.isString(P)&&!A.isNumber(P)){P="~-"+N.length+"-~";N[N.length]=F;}}S=S.substring(0,I)+P+S.substring(H+1);}for(I=N.length-1;I>=0;I=I-1){S=S.replace(new RegExp("~-"+I+"-~"),"{"+N[I]+"}","g");}return S;},trim:function(D){try{return D.replace(/^\s+|\s+$/g,"");}catch(E){return D;}},merge:function(){var G={},E=arguments;for(var F=0,D=E.length;F<D;F=F+1){A.augmentObject(G,E[F],true);}return G;},later:function(K,E,L,G,H){K=K||0;E=E||{};var F=L,J=G,I,D;if(A.isString(L)){F=E[L];}if(!F){throw new TypeError("method undefined");}if(!A.isArray(J)){J=[G];}I=function(){F.apply(E,J);};D=(H)?setInterval(I,K):setTimeout(I,K);return{interval:H,cancel:function(){if(this.interval){clearInterval(D);}else{clearTimeout(D);}}};},isValue:function(D){return(A.isObject(D)||A.isString(D)||A.isNumber(D)||A.isBoolean(D));}};A.hasOwnProperty=(Object.prototype.hasOwnProperty)?function(D,E){return D&&D.hasOwnProperty(E);}:function(D,E){return !A.isUndefined(D[E])&&D.constructor.prototype[E]!==D[E];};B.augmentObject(A,B,true);YAHOO.util.Lang=A;A.augment=A.augmentProto;YAHOO.augment=A.augmentProto;YAHOO.extend=A.extend;})();YAHOO.register("yahoo",YAHOO,{version:"2.5.2",build:"1076"});(function(){var B=YAHOO.util,K,I,J={},F={},M=window.document;YAHOO.env._id_counter=YAHOO.env._id_counter||0;var C=YAHOO.env.ua.opera,L=YAHOO.env.ua.webkit,A=YAHOO.env.ua.gecko,G=YAHOO.env.ua.ie;var E={HYPHEN:/(-[a-z])/i,ROOT_TAG:/^body|html$/i,OP_SCROLL:/^(?:inline|table-row)$/i};var N=function(P){if(!E.HYPHEN.test(P)){return P;}if(J[P]){return J[P];}var Q=P;while(E.HYPHEN.exec(Q)){Q=Q.replace(RegExp.$1,RegExp.$1.substr(1).toUpperCase());}J[P]=Q;return Q;};var O=function(Q){var P=F[Q];if(!P){P=new RegExp("(?:^|\\s+)"+Q+"(?:\\s+|$)");F[Q]=P;}return P;};if(M.defaultView&&M.defaultView.getComputedStyle){K=function(P,S){var R=null;if(S=="float"){S="cssFloat";}var Q=P.ownerDocument.defaultView.getComputedStyle(P,"");if(Q){R=Q[N(S)];}return P.style[S]||R;};}else{if(M.documentElement.currentStyle&&G){K=function(P,R){switch(N(R)){case"opacity":var T=100;try{T=P.filters["DXImageTransform.Microsoft.Alpha"].opacity;}catch(S){try{T=P.filters("alpha").opacity;}catch(S){}}return T/100;case"float":R="styleFloat";default:var Q=P.currentStyle?P.currentStyle[R]:null;return(P.style[R]||Q);}};}else{K=function(P,Q){return P.style[Q];};}}if(G){I=function(P,Q,R){switch(Q){case"opacity":if(YAHOO.lang.isString(P.style.filter)){P.style.filter="alpha(opacity="+R*100+")";if(!P.currentStyle||!P.currentStyle.hasLayout){P.style.zoom=1;}}break;case"float":Q="styleFloat";default:P.style[Q]=R;}};}else{I=function(P,Q,R){if(Q=="float"){Q="cssFloat";}P.style[Q]=R;};}var D=function(P,Q){return P&&P.nodeType==1&&(!Q||Q(P));};YAHOO.util.Dom={get:function(R){if(R&&(R.nodeType||R.item)){return R;}if(YAHOO.lang.isString(R)||!R){return M.getElementById(R);}if(R.length!==undefined){var S=[];for(var Q=0,P=R.length;Q<P;++Q){S[S.length]=B.Dom.get(R[Q]);}return S;}return R;},getStyle:function(P,R){R=N(R);var Q=function(S){return K(S,R);};return B.Dom.batch(P,Q,B.Dom,true);},setStyle:function(P,R,S){R=N(R);var Q=function(T){I(T,R,S);};B.Dom.batch(P,Q,B.Dom,true);},getXY:function(P){var Q=function(R){if((R.parentNode===null||R.offsetParent===null||this.getStyle(R,"display")=="none")&&R!=R.ownerDocument.body){return false;}return H(R);};return B.Dom.batch(P,Q,B.Dom,true);},getX:function(P){var Q=function(R){return B.Dom.getXY(R)[0];};return B.Dom.batch(P,Q,B.Dom,true);},getY:function(P){var Q=function(R){return B.Dom.getXY(R)[1];};return B.Dom.batch(P,Q,B.Dom,true);},setXY:function(P,S,R){var Q=function(V){var U=this.getStyle(V,"position");if(U=="static"){this.setStyle(V,"position","relative");U="relative";}var X=this.getXY(V);if(X===false){return false;}var W=[parseInt(this.getStyle(V,"left"),10),parseInt(this.getStyle(V,"top"),10)];if(isNaN(W[0])){W[0]=(U=="relative")?0:V.offsetLeft;}if(isNaN(W[1])){W[1]=(U=="relative")?0:V.offsetTop;}if(S[0]!==null){V.style.left=S[0]-X[0]+W[0]+"px";}if(S[1]!==null){V.style.top=S[1]-X[1]+W[1]+"px";}if(!R){var T=this.getXY(V);if((S[0]!==null&&T[0]!=S[0])||(S[1]!==null&&T[1]!=S[1])){this.setXY(V,S,true);}}};B.Dom.batch(P,Q,B.Dom,true);},setX:function(Q,P){B.Dom.setXY(Q,[P,null]);},setY:function(P,Q){B.Dom.setXY(P,[null,Q]);},getRegion:function(P){var Q=function(R){if((R.parentNode===null||R.offsetParent===null||this.getStyle(R,"display")=="none")&&R!=R.ownerDocument.body){return false;}var S=B.Region.getRegion(R);return S;};return B.Dom.batch(P,Q,B.Dom,true);},getClientWidth:function(){return B.Dom.getViewportWidth();},getClientHeight:function(){return B.Dom.getViewportHeight();},getElementsByClassName:function(T,X,U,V){X=X||"*";U=(U)?B.Dom.get(U):null||M;if(!U){return[];}var Q=[],P=U.getElementsByTagName(X),W=O(T);for(var R=0,S=P.length;R<S;++R){if(W.test(P[R].className)){Q[Q.length]=P[R];if(V){V.call(P[R],P[R]);}}}return Q;},hasClass:function(R,Q){var P=O(Q);var S=function(T){return P.test(T.className);};return B.Dom.batch(R,S,B.Dom,true);},addClass:function(Q,P){var R=function(S){if(this.hasClass(S,P)){return false;}S.className=YAHOO.lang.trim([S.className,P].join(" "));return true;};return B.Dom.batch(Q,R,B.Dom,true);},removeClass:function(R,Q){var P=O(Q);var S=function(T){if(!Q||!this.hasClass(T,Q)){return false;}var U=T.className;T.className=U.replace(P," ");if(this.hasClass(T,Q)){this.removeClass(T,Q);}T.className=YAHOO.lang.trim(T.className);return true;};return B.Dom.batch(R,S,B.Dom,true);},replaceClass:function(S,Q,P){if(!P||Q===P){return false;}var R=O(Q);var T=function(U){if(!this.hasClass(U,Q)){this.addClass(U,P);return true;}U.className=U.className.replace(R," "+P+" ");if(this.hasClass(U,Q)){this.replaceClass(U,Q,P);}U.className=YAHOO.lang.trim(U.className);return true;};return B.Dom.batch(S,T,B.Dom,true);},generateId:function(P,R){R=R||"yui-gen";var Q=function(S){if(S&&S.id){return S.id;}var T=R+YAHOO.env._id_counter++;if(S){S.id=T;}return T;};return B.Dom.batch(P,Q,B.Dom,true)||Q.apply(B.Dom,arguments);},isAncestor:function(P,Q){P=B.Dom.get(P);Q=B.Dom.get(Q);if(!P||!Q){return false;}if(P.contains&&Q.nodeType&&!L){return P.contains(Q);}else{if(P.compareDocumentPosition&&Q.nodeType){return !!(P.compareDocumentPosition(Q)&16);}else{if(Q.nodeType){return !!this.getAncestorBy(Q,function(R){return R==P;});}}}return false;},inDocument:function(P){return this.isAncestor(M.documentElement,P);},getElementsBy:function(W,Q,R,T){Q=Q||"*";R=(R)?B.Dom.get(R):null||M;if(!R){return[];}var S=[],V=R.getElementsByTagName(Q);for(var U=0,P=V.length;U<P;++U){if(W(V[U])){S[S.length]=V[U];if(T){T(V[U]);}}}return S;},batch:function(T,W,V,R){T=(T&&(T.tagName||T.item))?T:B.Dom.get(T);if(!T||!W){return false;}var S=(R)?V:window;if(T.tagName||T.length===undefined){return W.call(S,T,V);}var U=[];for(var Q=0,P=T.length;Q<P;++Q){U[U.length]=W.call(S,T[Q],V);}return U;},getDocumentHeight:function(){var Q=(M.compatMode!="CSS1Compat")?M.body.scrollHeight:M.documentElement.scrollHeight;var P=Math.max(Q,B.Dom.getViewportHeight());return P;},getDocumentWidth:function(){var Q=(M.compatMode!="CSS1Compat")?M.body.scrollWidth:M.documentElement.scrollWidth;var P=Math.max(Q,B.Dom.getViewportWidth());return P;},getViewportHeight:function(){var P=self.innerHeight;
var Q=M.compatMode;if((Q||G)&&!C){P=(Q=="CSS1Compat")?M.documentElement.clientHeight:M.body.clientHeight;}return P;},getViewportWidth:function(){var P=self.innerWidth;var Q=M.compatMode;if(Q||G){P=(Q=="CSS1Compat")?M.documentElement.clientWidth:M.body.clientWidth;}return P;},getAncestorBy:function(P,Q){while(P=P.parentNode){if(D(P,Q)){return P;}}return null;},getAncestorByClassName:function(Q,P){Q=B.Dom.get(Q);if(!Q){return null;}var R=function(S){return B.Dom.hasClass(S,P);};return B.Dom.getAncestorBy(Q,R);},getAncestorByTagName:function(Q,P){Q=B.Dom.get(Q);if(!Q){return null;}var R=function(S){return S.tagName&&S.tagName.toUpperCase()==P.toUpperCase();};return B.Dom.getAncestorBy(Q,R);},getPreviousSiblingBy:function(P,Q){while(P){P=P.previousSibling;if(D(P,Q)){return P;}}return null;},getPreviousSibling:function(P){P=B.Dom.get(P);if(!P){return null;}return B.Dom.getPreviousSiblingBy(P);},getNextSiblingBy:function(P,Q){while(P){P=P.nextSibling;if(D(P,Q)){return P;}}return null;},getNextSibling:function(P){P=B.Dom.get(P);if(!P){return null;}return B.Dom.getNextSiblingBy(P);},getFirstChildBy:function(P,R){var Q=(D(P.firstChild,R))?P.firstChild:null;return Q||B.Dom.getNextSiblingBy(P.firstChild,R);},getFirstChild:function(P,Q){P=B.Dom.get(P);if(!P){return null;}return B.Dom.getFirstChildBy(P);},getLastChildBy:function(P,R){if(!P){return null;}var Q=(D(P.lastChild,R))?P.lastChild:null;return Q||B.Dom.getPreviousSiblingBy(P.lastChild,R);},getLastChild:function(P){P=B.Dom.get(P);return B.Dom.getLastChildBy(P);},getChildrenBy:function(Q,S){var R=B.Dom.getFirstChildBy(Q,S);var P=R?[R]:[];B.Dom.getNextSiblingBy(R,function(T){if(!S||S(T)){P[P.length]=T;}return false;});return P;},getChildren:function(P){P=B.Dom.get(P);if(!P){}return B.Dom.getChildrenBy(P);},getDocumentScrollLeft:function(P){P=P||M;return Math.max(P.documentElement.scrollLeft,P.body.scrollLeft);},getDocumentScrollTop:function(P){P=P||M;return Math.max(P.documentElement.scrollTop,P.body.scrollTop);},insertBefore:function(Q,P){Q=B.Dom.get(Q);P=B.Dom.get(P);if(!Q||!P||!P.parentNode){return null;}return P.parentNode.insertBefore(Q,P);},insertAfter:function(Q,P){Q=B.Dom.get(Q);P=B.Dom.get(P);if(!Q||!P||!P.parentNode){return null;}if(P.nextSibling){return P.parentNode.insertBefore(Q,P.nextSibling);}else{return P.parentNode.appendChild(Q);}},getClientRegion:function(){var R=B.Dom.getDocumentScrollTop(),Q=B.Dom.getDocumentScrollLeft(),S=B.Dom.getViewportWidth()+Q,P=B.Dom.getViewportHeight()+R;return new B.Region(R,S,P,Q);}};var H=function(){if(M.documentElement.getBoundingClientRect){return function(Q){var R=Q.getBoundingClientRect();var P=Q.ownerDocument;return[R.left+B.Dom.getDocumentScrollLeft(P),R.top+B.Dom.getDocumentScrollTop(P)];};}else{return function(R){var S=[R.offsetLeft,R.offsetTop];var Q=R.offsetParent;var P=(L&&B.Dom.getStyle(R,"position")=="absolute"&&R.offsetParent==R.ownerDocument.body);if(Q!=R){while(Q){S[0]+=Q.offsetLeft;S[1]+=Q.offsetTop;if(!P&&L&&B.Dom.getStyle(Q,"position")=="absolute"){P=true;}Q=Q.offsetParent;}}if(P){S[0]-=R.ownerDocument.body.offsetLeft;S[1]-=R.ownerDocument.body.offsetTop;}Q=R.parentNode;while(Q.tagName&&!E.ROOT_TAG.test(Q.tagName)){if(Q.scrollTop||Q.scrollLeft){if(!E.OP_SCROLL.test(B.Dom.getStyle(Q,"display"))){if(!C||B.Dom.getStyle(Q,"overflow")!=="visible"){S[0]-=Q.scrollLeft;S[1]-=Q.scrollTop;}}}Q=Q.parentNode;}return S;};}}();})();YAHOO.util.Region=function(C,D,A,B){this.top=C;this[1]=C;this.right=D;this.bottom=A;this.left=B;this[0]=B;};YAHOO.util.Region.prototype.contains=function(A){return(A.left>=this.left&&A.right<=this.right&&A.top>=this.top&&A.bottom<=this.bottom);};YAHOO.util.Region.prototype.getArea=function(){return((this.bottom-this.top)*(this.right-this.left));};YAHOO.util.Region.prototype.intersect=function(E){var C=Math.max(this.top,E.top);var D=Math.min(this.right,E.right);var A=Math.min(this.bottom,E.bottom);var B=Math.max(this.left,E.left);if(A>=C&&D>=B){return new YAHOO.util.Region(C,D,A,B);}else{return null;}};YAHOO.util.Region.prototype.union=function(E){var C=Math.min(this.top,E.top);var D=Math.max(this.right,E.right);var A=Math.max(this.bottom,E.bottom);var B=Math.min(this.left,E.left);return new YAHOO.util.Region(C,D,A,B);};YAHOO.util.Region.prototype.toString=function(){return("Region {"+"top: "+this.top+", right: "+this.right+", bottom: "+this.bottom+", left: "+this.left+"}");};YAHOO.util.Region.getRegion=function(D){var F=YAHOO.util.Dom.getXY(D);var C=F[1];var E=F[0]+D.offsetWidth;var A=F[1]+D.offsetHeight;var B=F[0];return new YAHOO.util.Region(C,E,A,B);};YAHOO.util.Point=function(A,B){if(YAHOO.lang.isArray(A)){B=A[1];A=A[0];}this.x=this.right=this.left=this[0]=A;this.y=this.top=this.bottom=this[1]=B;};YAHOO.util.Point.prototype=new YAHOO.util.Region();YAHOO.register("dom",YAHOO.util.Dom,{version:"2.5.2",build:"1076"});YAHOO.util.CustomEvent=function(D,B,C,A){this.type=D;this.scope=B||window;this.silent=C;this.signature=A||YAHOO.util.CustomEvent.LIST;this.subscribers=[];if(!this.silent){}var E="_YUICEOnSubscribe";if(D!==E){this.subscribeEvent=new YAHOO.util.CustomEvent(E,this,true);}this.lastError=null;};YAHOO.util.CustomEvent.LIST=0;YAHOO.util.CustomEvent.FLAT=1;YAHOO.util.CustomEvent.prototype={subscribe:function(B,C,A){if(!B){throw new Error("Invalid callback for subscriber to '"+this.type+"'");}if(this.subscribeEvent){this.subscribeEvent.fire(B,C,A);}this.subscribers.push(new YAHOO.util.Subscriber(B,C,A));},unsubscribe:function(D,F){if(!D){return this.unsubscribeAll();}var E=false;for(var B=0,A=this.subscribers.length;B<A;++B){var C=this.subscribers[B];if(C&&C.contains(D,F)){this._delete(B);E=true;}}return E;},fire:function(){this.lastError=null;var K=[],E=this.subscribers.length;if(!E&&this.silent){return true;}var I=[].slice.call(arguments,0),G=true,D,J=false;if(!this.silent){}var C=this.subscribers.slice(),A=YAHOO.util.Event.throwErrors;for(D=0;D<E;++D){var M=C[D];if(!M){J=true;}else{if(!this.silent){}var L=M.getScope(this.scope);if(this.signature==YAHOO.util.CustomEvent.FLAT){var B=null;if(I.length>0){B=I[0];}try{G=M.fn.call(L,B,M.obj);}catch(F){this.lastError=F;if(A){throw F;}}}else{try{G=M.fn.call(L,this.type,I,M.obj);}catch(H){this.lastError=H;if(A){throw H;}}}if(false===G){if(!this.silent){}break;}}}return(G!==false);},unsubscribeAll:function(){for(var A=this.subscribers.length-1;A>-1;A--){this._delete(A);}this.subscribers=[];return A;},_delete:function(A){var B=this.subscribers[A];if(B){delete B.fn;delete B.obj;}this.subscribers.splice(A,1);},toString:function(){return"CustomEvent: "+"'"+this.type+"', "+"scope: "+this.scope;}};YAHOO.util.Subscriber=function(B,C,A){this.fn=B;this.obj=YAHOO.lang.isUndefined(C)?null:C;this.override=A;};YAHOO.util.Subscriber.prototype.getScope=function(A){if(this.override){if(this.override===true){return this.obj;}else{return this.override;}}return A;};YAHOO.util.Subscriber.prototype.contains=function(A,B){if(B){return(this.fn==A&&this.obj==B);}else{return(this.fn==A);}};YAHOO.util.Subscriber.prototype.toString=function(){return"Subscriber { obj: "+this.obj+", override: "+(this.override||"no")+" }";};if(!YAHOO.util.Event){YAHOO.util.Event=function(){var H=false;var I=[];var J=[];var G=[];var E=[];var C=0;var F=[];var B=[];var A=0;var D={63232:38,63233:40,63234:37,63235:39,63276:33,63277:34,25:9};return{POLL_RETRYS:2000,POLL_INTERVAL:20,EL:0,TYPE:1,FN:2,WFN:3,UNLOAD_OBJ:3,ADJ_SCOPE:4,OBJ:5,OVERRIDE:6,lastError:null,isSafari:YAHOO.env.ua.webkit,webkit:YAHOO.env.ua.webkit,isIE:YAHOO.env.ua.ie,_interval:null,_dri:null,DOMReady:false,throwErrors:false,startInterval:function(){if(!this._interval){var K=this;var L=function(){K._tryPreloadAttach();};this._interval=setInterval(L,this.POLL_INTERVAL);}},onAvailable:function(P,M,Q,O,N){var K=(YAHOO.lang.isString(P))?[P]:P;for(var L=0;L<K.length;L=L+1){F.push({id:K[L],fn:M,obj:Q,override:O,checkReady:N});}C=this.POLL_RETRYS;this.startInterval();},onContentReady:function(M,K,N,L){this.onAvailable(M,K,N,L,true);},onDOMReady:function(K,M,L){if(this.DOMReady){setTimeout(function(){var N=window;if(L){if(L===true){N=M;}else{N=L;}}K.call(N,"DOMReady",[],M);},0);}else{this.DOMReadyEvent.subscribe(K,M,L);}},addListener:function(M,K,V,Q,L){if(!V||!V.call){return false;}if(this._isValidCollection(M)){var W=true;for(var R=0,T=M.length;R<T;++R){W=this.on(M[R],K,V,Q,L)&&W;}return W;}else{if(YAHOO.lang.isString(M)){var P=this.getEl(M);if(P){M=P;}else{this.onAvailable(M,function(){YAHOO.util.Event.on(M,K,V,Q,L);});return true;}}}if(!M){return false;}if("unload"==K&&Q!==this){J[J.length]=[M,K,V,Q,L];return true;}var Y=M;if(L){if(L===true){Y=Q;}else{Y=L;}}var N=function(Z){return V.call(Y,YAHOO.util.Event.getEvent(Z,M),Q);};var X=[M,K,V,N,Y,Q,L];var S=I.length;I[S]=X;if(this.useLegacyEvent(M,K)){var O=this.getLegacyIndex(M,K);if(O==-1||M!=G[O][0]){O=G.length;B[M.id+K]=O;G[O]=[M,K,M["on"+K]];E[O]=[];M["on"+K]=function(Z){YAHOO.util.Event.fireLegacyEvent(YAHOO.util.Event.getEvent(Z),O);};}E[O].push(X);}else{try{this._simpleAdd(M,K,N,false);}catch(U){this.lastError=U;this.removeListener(M,K,V);return false;}}return true;},fireLegacyEvent:function(O,M){var Q=true,K,S,R,T,P;S=E[M].slice();for(var L=0,N=S.length;L<N;++L){R=S[L];if(R&&R[this.WFN]){T=R[this.ADJ_SCOPE];P=R[this.WFN].call(T,O);Q=(Q&&P);}}K=G[M];if(K&&K[2]){K[2](O);}return Q;},getLegacyIndex:function(L,M){var K=this.generateId(L)+M;if(typeof B[K]=="undefined"){return -1;}else{return B[K];}},useLegacyEvent:function(L,M){if(this.webkit&&("click"==M||"dblclick"==M)){var K=parseInt(this.webkit,10);if(!isNaN(K)&&K<418){return true;}}return false;},removeListener:function(L,K,T){var O,R,V;if(typeof L=="string"){L=this.getEl(L);}else{if(this._isValidCollection(L)){var U=true;for(O=L.length-1;O>-1;O--){U=(this.removeListener(L[O],K,T)&&U);}return U;}}if(!T||!T.call){return this.purgeElement(L,false,K);}if("unload"==K){for(O=J.length-1;O>-1;O--){V=J[O];if(V&&V[0]==L&&V[1]==K&&V[2]==T){J.splice(O,1);return true;}}return false;}var P=null;var Q=arguments[3];if("undefined"===typeof Q){Q=this._getCacheIndex(L,K,T);}if(Q>=0){P=I[Q];}if(!L||!P){return false;}if(this.useLegacyEvent(L,K)){var N=this.getLegacyIndex(L,K);var M=E[N];if(M){for(O=0,R=M.length;O<R;++O){V=M[O];if(V&&V[this.EL]==L&&V[this.TYPE]==K&&V[this.FN]==T){M.splice(O,1);break;}}}}else{try{this._simpleRemove(L,K,P[this.WFN],false);}catch(S){this.lastError=S;return false;}}delete I[Q][this.WFN];delete I[Q][this.FN];I.splice(Q,1);return true;},getTarget:function(M,L){var K=M.target||M.srcElement;return this.resolveTextNode(K);},resolveTextNode:function(L){try{if(L&&3==L.nodeType){return L.parentNode;}}catch(K){}return L;},getPageX:function(L){var K=L.pageX;if(!K&&0!==K){K=L.clientX||0;if(this.isIE){K+=this._getScrollLeft();}}return K;},getPageY:function(K){var L=K.pageY;if(!L&&0!==L){L=K.clientY||0;if(this.isIE){L+=this._getScrollTop();}}return L;
},getXY:function(K){return[this.getPageX(K),this.getPageY(K)];},getRelatedTarget:function(L){var K=L.relatedTarget;if(!K){if(L.type=="mouseout"){K=L.toElement;}else{if(L.type=="mouseover"){K=L.fromElement;}}}return this.resolveTextNode(K);},getTime:function(M){if(!M.time){var L=new Date().getTime();try{M.time=L;}catch(K){this.lastError=K;return L;}}return M.time;},stopEvent:function(K){this.stopPropagation(K);this.preventDefault(K);},stopPropagation:function(K){if(K.stopPropagation){K.stopPropagation();}else{K.cancelBubble=true;}},preventDefault:function(K){if(K.preventDefault){K.preventDefault();}else{K.returnValue=false;}},getEvent:function(M,K){var L=M||window.event;if(!L){var N=this.getEvent.caller;while(N){L=N.arguments[0];if(L&&Event==L.constructor){break;}N=N.caller;}}return L;},getCharCode:function(L){var K=L.keyCode||L.charCode||0;if(YAHOO.env.ua.webkit&&(K in D)){K=D[K];}return K;},_getCacheIndex:function(O,P,N){for(var M=0,L=I.length;M<L;M=M+1){var K=I[M];if(K&&K[this.FN]==N&&K[this.EL]==O&&K[this.TYPE]==P){return M;}}return -1;},generateId:function(K){var L=K.id;if(!L){L="yuievtautoid-"+A;++A;K.id=L;}return L;},_isValidCollection:function(L){try{return(L&&typeof L!=="string"&&L.length&&!L.tagName&&!L.alert&&typeof L[0]!=="undefined");}catch(K){return false;}},elCache:{},getEl:function(K){return(typeof K==="string")?document.getElementById(K):K;},clearCache:function(){},DOMReadyEvent:new YAHOO.util.CustomEvent("DOMReady",this),_load:function(L){if(!H){H=true;var K=YAHOO.util.Event;K._ready();K._tryPreloadAttach();}},_ready:function(L){var K=YAHOO.util.Event;if(!K.DOMReady){K.DOMReady=true;K.DOMReadyEvent.fire();K._simpleRemove(document,"DOMContentLoaded",K._ready);}},_tryPreloadAttach:function(){if(F.length===0){C=0;clearInterval(this._interval);this._interval=null;return ;}if(this.locked){return ;}if(this.isIE){if(!this.DOMReady){this.startInterval();return ;}}this.locked=true;var Q=!H;if(!Q){Q=(C>0&&F.length>0);}var P=[];var R=function(T,U){var S=T;if(U.override){if(U.override===true){S=U.obj;}else{S=U.override;}}U.fn.call(S,U.obj);};var L,K,O,N,M=[];for(L=0,K=F.length;L<K;L=L+1){O=F[L];if(O){N=this.getEl(O.id);if(N){if(O.checkReady){if(H||N.nextSibling||!Q){M.push(O);F[L]=null;}}else{R(N,O);F[L]=null;}}else{P.push(O);}}}for(L=0,K=M.length;L<K;L=L+1){O=M[L];R(this.getEl(O.id),O);}C--;if(Q){for(L=F.length-1;L>-1;L--){O=F[L];if(!O||!O.id){F.splice(L,1);}}this.startInterval();}else{clearInterval(this._interval);this._interval=null;}this.locked=false;},purgeElement:function(O,P,R){var M=(YAHOO.lang.isString(O))?this.getEl(O):O;var Q=this.getListeners(M,R),N,K;if(Q){for(N=Q.length-1;N>-1;N--){var L=Q[N];this.removeListener(M,L.type,L.fn);}}if(P&&M&&M.childNodes){for(N=0,K=M.childNodes.length;N<K;++N){this.purgeElement(M.childNodes[N],P,R);}}},getListeners:function(M,K){var P=[],L;if(!K){L=[I,J];}else{if(K==="unload"){L=[J];}else{L=[I];}}var R=(YAHOO.lang.isString(M))?this.getEl(M):M;for(var O=0;O<L.length;O=O+1){var T=L[O];if(T){for(var Q=0,S=T.length;Q<S;++Q){var N=T[Q];if(N&&N[this.EL]===R&&(!K||K===N[this.TYPE])){P.push({type:N[this.TYPE],fn:N[this.FN],obj:N[this.OBJ],adjust:N[this.OVERRIDE],scope:N[this.ADJ_SCOPE],index:Q});}}}}return(P.length)?P:null;},_unload:function(Q){var K=YAHOO.util.Event,N,M,L,P,O,R=J.slice();for(N=0,P=J.length;N<P;++N){L=R[N];if(L){var S=window;if(L[K.ADJ_SCOPE]){if(L[K.ADJ_SCOPE]===true){S=L[K.UNLOAD_OBJ];}else{S=L[K.ADJ_SCOPE];}}L[K.FN].call(S,K.getEvent(Q,L[K.EL]),L[K.UNLOAD_OBJ]);R[N]=null;L=null;S=null;}}J=null;if(I){for(M=I.length-1;M>-1;M--){L=I[M];if(L){K.removeListener(L[K.EL],L[K.TYPE],L[K.FN],M);}}L=null;}G=null;K._simpleRemove(window,"unload",K._unload);},_getScrollLeft:function(){return this._getScroll()[1];},_getScrollTop:function(){return this._getScroll()[0];},_getScroll:function(){var K=document.documentElement,L=document.body;if(K&&(K.scrollTop||K.scrollLeft)){return[K.scrollTop,K.scrollLeft];}else{if(L){return[L.scrollTop,L.scrollLeft];}else{return[0,0];}}},regCE:function(){},_simpleAdd:function(){if(window.addEventListener){return function(M,N,L,K){M.addEventListener(N,L,(K));};}else{if(window.attachEvent){return function(M,N,L,K){M.attachEvent("on"+N,L);};}else{return function(){};}}}(),_simpleRemove:function(){if(window.removeEventListener){return function(M,N,L,K){M.removeEventListener(N,L,(K));};}else{if(window.detachEvent){return function(L,M,K){L.detachEvent("on"+M,K);};}else{return function(){};}}}()};}();(function(){var EU=YAHOO.util.Event;EU.on=EU.addListener;
/* DOMReady: based on work by: Dean Edwards/John Resig/Matthias Miller */
if(EU.isIE){YAHOO.util.Event.onDOMReady(YAHOO.util.Event._tryPreloadAttach,YAHOO.util.Event,true);var n=document.createElement("p");EU._dri=setInterval(function(){try{n.doScroll("left");clearInterval(EU._dri);EU._dri=null;EU._ready();n=null;}catch(ex){}},EU.POLL_INTERVAL);}else{if(EU.webkit&&EU.webkit<525){EU._dri=setInterval(function(){var rs=document.readyState;if("loaded"==rs||"complete"==rs){clearInterval(EU._dri);EU._dri=null;EU._ready();}},EU.POLL_INTERVAL);}else{EU._simpleAdd(document,"DOMContentLoaded",EU._ready);}}EU._simpleAdd(window,"load",EU._load);EU._simpleAdd(window,"unload",EU._unload);EU._tryPreloadAttach();})();}YAHOO.util.EventProvider=function(){};YAHOO.util.EventProvider.prototype={__yui_events:null,__yui_subscribers:null,subscribe:function(A,C,F,E){this.__yui_events=this.__yui_events||{};var D=this.__yui_events[A];if(D){D.subscribe(C,F,E);}else{this.__yui_subscribers=this.__yui_subscribers||{};var B=this.__yui_subscribers;if(!B[A]){B[A]=[];}B[A].push({fn:C,obj:F,override:E});}},unsubscribe:function(C,E,G){this.__yui_events=this.__yui_events||{};var A=this.__yui_events;if(C){var F=A[C];if(F){return F.unsubscribe(E,G);}}else{var B=true;for(var D in A){if(YAHOO.lang.hasOwnProperty(A,D)){B=B&&A[D].unsubscribe(E,G);}}return B;}return false;},unsubscribeAll:function(A){return this.unsubscribe(A);},createEvent:function(G,D){this.__yui_events=this.__yui_events||{};var A=D||{};var I=this.__yui_events;
if(I[G]){}else{var H=A.scope||this;var E=(A.silent);var B=new YAHOO.util.CustomEvent(G,H,E,YAHOO.util.CustomEvent.FLAT);I[G]=B;if(A.onSubscribeCallback){B.subscribeEvent.subscribe(A.onSubscribeCallback);}this.__yui_subscribers=this.__yui_subscribers||{};var F=this.__yui_subscribers[G];if(F){for(var C=0;C<F.length;++C){B.subscribe(F[C].fn,F[C].obj,F[C].override);}}}return I[G];},fireEvent:function(E,D,A,C){this.__yui_events=this.__yui_events||{};var G=this.__yui_events[E];if(!G){return null;}var B=[];for(var F=1;F<arguments.length;++F){B.push(arguments[F]);}return G.fire.apply(G,B);},hasEvent:function(A){if(this.__yui_events){if(this.__yui_events[A]){return true;}}return false;}};YAHOO.util.KeyListener=function(A,F,B,C){if(!A){}else{if(!F){}else{if(!B){}}}if(!C){C=YAHOO.util.KeyListener.KEYDOWN;}var D=new YAHOO.util.CustomEvent("keyPressed");this.enabledEvent=new YAHOO.util.CustomEvent("enabled");this.disabledEvent=new YAHOO.util.CustomEvent("disabled");if(typeof A=="string"){A=document.getElementById(A);}if(typeof B=="function"){D.subscribe(B);}else{D.subscribe(B.fn,B.scope,B.correctScope);}function E(J,I){if(!F.shift){F.shift=false;}if(!F.alt){F.alt=false;}if(!F.ctrl){F.ctrl=false;}if(J.shiftKey==F.shift&&J.altKey==F.alt&&J.ctrlKey==F.ctrl){var G;if(F.keys instanceof Array){for(var H=0;H<F.keys.length;H++){G=F.keys[H];if(G==J.charCode){D.fire(J.charCode,J);break;}else{if(G==J.keyCode){D.fire(J.keyCode,J);break;}}}}else{G=F.keys;if(G==J.charCode){D.fire(J.charCode,J);}else{if(G==J.keyCode){D.fire(J.keyCode,J);}}}}}this.enable=function(){if(!this.enabled){YAHOO.util.Event.addListener(A,C,E);this.enabledEvent.fire(F);}this.enabled=true;};this.disable=function(){if(this.enabled){YAHOO.util.Event.removeListener(A,C,E);this.disabledEvent.fire(F);}this.enabled=false;};this.toString=function(){return"KeyListener ["+F.keys+"] "+A.tagName+(A.id?"["+A.id+"]":"");};};YAHOO.util.KeyListener.KEYDOWN="keydown";YAHOO.util.KeyListener.KEYUP="keyup";YAHOO.util.KeyListener.KEY={ALT:18,BACK_SPACE:8,CAPS_LOCK:20,CONTROL:17,DELETE:46,DOWN:40,END:35,ENTER:13,ESCAPE:27,HOME:36,LEFT:37,META:224,NUM_LOCK:144,PAGE_DOWN:34,PAGE_UP:33,PAUSE:19,PRINTSCREEN:44,RIGHT:39,SCROLL_LOCK:145,SHIFT:16,SPACE:32,TAB:9,UP:38};YAHOO.register("event",YAHOO.util.Event,{version:"2.5.2",build:"1076"});YAHOO.register("yahoo-dom-event", YAHOO, {version: "2.5.2", build: "1076"});


/*
Copyright (c) 2008, Yahoo! Inc. All rights reserved.
Code licensed under the BSD License:
http://developer.yahoo.net/yui/license.txt
version: 2.5.2
*/
(function(){var B=YAHOO.util;var A=function(D,C,E,F){if(!D){}this.init(D,C,E,F);};A.NAME="Anim";A.prototype={toString:function(){var C=this.getEl()||{};var D=C.id||C.tagName;return(this.constructor.NAME+": "+D);},patterns:{noNegatives:/width|height|opacity|padding/i,offsetAttribute:/^((width|height)|(top|left))$/,defaultUnit:/width|height|top$|bottom$|left$|right$/i,offsetUnit:/\d+(em|%|en|ex|pt|in|cm|mm|pc)$/i},doMethod:function(C,E,D){return this.method(this.currentFrame,E,D-E,this.totalFrames);},setAttribute:function(C,E,D){if(this.patterns.noNegatives.test(C)){E=(E>0)?E:0;}B.Dom.setStyle(this.getEl(),C,E+D);},getAttribute:function(C){var E=this.getEl();var G=B.Dom.getStyle(E,C);if(G!=="auto"&&!this.patterns.offsetUnit.test(G)){return parseFloat(G);}var D=this.patterns.offsetAttribute.exec(C)||[];var H=!!(D[3]);var F=!!(D[2]);if(F||(B.Dom.getStyle(E,"position")=="absolute"&&H)){G=E["offset"+D[0].charAt(0).toUpperCase()+D[0].substr(1)];}else{G=0;}return G;},getDefaultUnit:function(C){if(this.patterns.defaultUnit.test(C)){return"px";}return"";},setRuntimeAttribute:function(D){var I;var E;var F=this.attributes;this.runtimeAttributes[D]={};var H=function(J){return(typeof J!=="undefined");};if(!H(F[D]["to"])&&!H(F[D]["by"])){return false;}I=(H(F[D]["from"]))?F[D]["from"]:this.getAttribute(D);if(H(F[D]["to"])){E=F[D]["to"];}else{if(H(F[D]["by"])){if(I.constructor==Array){E=[];for(var G=0,C=I.length;G<C;++G){E[G]=I[G]+F[D]["by"][G]*1;}}else{E=I+F[D]["by"]*1;}}}this.runtimeAttributes[D].start=I;this.runtimeAttributes[D].end=E;this.runtimeAttributes[D].unit=(H(F[D].unit))?F[D]["unit"]:this.getDefaultUnit(D);return true;},init:function(E,J,I,C){var D=false;var F=null;var H=0;E=B.Dom.get(E);this.attributes=J||{};this.duration=!YAHOO.lang.isUndefined(I)?I:1;this.method=C||B.Easing.easeNone;this.useSeconds=true;this.currentFrame=0;this.totalFrames=B.AnimMgr.fps;this.setEl=function(M){E=B.Dom.get(M);};this.getEl=function(){return E;};this.isAnimated=function(){return D;};this.getStartTime=function(){return F;};this.runtimeAttributes={};this.animate=function(){if(this.isAnimated()){return false;}this.currentFrame=0;this.totalFrames=(this.useSeconds)?Math.ceil(B.AnimMgr.fps*this.duration):this.duration;if(this.duration===0&&this.useSeconds){this.totalFrames=1;}B.AnimMgr.registerElement(this);return true;};this.stop=function(M){if(!this.isAnimated()){return false;}if(M){this.currentFrame=this.totalFrames;this._onTween.fire();}B.AnimMgr.stop(this);};var L=function(){this.onStart.fire();this.runtimeAttributes={};for(var M in this.attributes){this.setRuntimeAttribute(M);}D=true;H=0;F=new Date();};var K=function(){var O={duration:new Date()-this.getStartTime(),currentFrame:this.currentFrame};O.toString=function(){return("duration: "+O.duration+", currentFrame: "+O.currentFrame);};this.onTween.fire(O);var N=this.runtimeAttributes;for(var M in N){this.setAttribute(M,this.doMethod(M,N[M].start,N[M].end),N[M].unit);}H+=1;};var G=function(){var M=(new Date()-F)/1000;var N={duration:M,frames:H,fps:H/M};N.toString=function(){return("duration: "+N.duration+", frames: "+N.frames+", fps: "+N.fps);};D=false;H=0;this.onComplete.fire(N);};this._onStart=new B.CustomEvent("_start",this,true);this.onStart=new B.CustomEvent("start",this);this.onTween=new B.CustomEvent("tween",this);this._onTween=new B.CustomEvent("_tween",this,true);this.onComplete=new B.CustomEvent("complete",this);this._onComplete=new B.CustomEvent("_complete",this,true);this._onStart.subscribe(L);this._onTween.subscribe(K);this._onComplete.subscribe(G);}};B.Anim=A;})();YAHOO.util.AnimMgr=new function(){var C=null;var B=[];var A=0;this.fps=1000;this.delay=1;this.registerElement=function(F){B[B.length]=F;A+=1;F._onStart.fire();this.start();};this.unRegister=function(G,F){F=F||E(G);if(!G.isAnimated()||F==-1){return false;}G._onComplete.fire();B.splice(F,1);A-=1;if(A<=0){this.stop();}return true;};this.start=function(){if(C===null){C=setInterval(this.run,this.delay);}};this.stop=function(H){if(!H){clearInterval(C);for(var G=0,F=B.length;G<F;++G){this.unRegister(B[0],0);}B=[];C=null;A=0;}else{this.unRegister(H);}};this.run=function(){for(var H=0,F=B.length;H<F;++H){var G=B[H];if(!G||!G.isAnimated()){continue;}if(G.currentFrame<G.totalFrames||G.totalFrames===null){G.currentFrame+=1;if(G.useSeconds){D(G);}G._onTween.fire();}else{YAHOO.util.AnimMgr.stop(G,H);}}};var E=function(H){for(var G=0,F=B.length;G<F;++G){if(B[G]==H){return G;}}return -1;};var D=function(G){var J=G.totalFrames;var I=G.currentFrame;var H=(G.currentFrame*G.duration*1000/G.totalFrames);var F=(new Date()-G.getStartTime());var K=0;if(F<G.duration*1000){K=Math.round((F/H-1)*G.currentFrame);}else{K=J-(I+1);}if(K>0&&isFinite(K)){if(G.currentFrame+K>=J){K=J-(I+1);}G.currentFrame+=K;}};};YAHOO.util.Bezier=new function(){this.getPosition=function(E,D){var F=E.length;var C=[];for(var B=0;B<F;++B){C[B]=[E[B][0],E[B][1]];}for(var A=1;A<F;++A){for(B=0;B<F-A;++B){C[B][0]=(1-D)*C[B][0]+D*C[parseInt(B+1,10)][0];C[B][1]=(1-D)*C[B][1]+D*C[parseInt(B+1,10)][1];}}return[C[0][0],C[0][1]];};};(function(){var A=function(F,E,G,H){A.superclass.constructor.call(this,F,E,G,H);};A.NAME="ColorAnim";var C=YAHOO.util;YAHOO.extend(A,C.Anim);var D=A.superclass;var B=A.prototype;B.patterns.color=/color$/i;B.patterns.rgb=/^rgb\(([0-9]+)\s*,\s*([0-9]+)\s*,\s*([0-9]+)\)$/i;B.patterns.hex=/^#?([0-9A-F]{2})([0-9A-F]{2})([0-9A-F]{2})$/i;B.patterns.hex3=/^#?([0-9A-F]{1})([0-9A-F]{1})([0-9A-F]{1})$/i;B.patterns.transparent=/^transparent|rgba\(0, 0, 0, 0\)$/;B.parseColor=function(E){if(E.length==3){return E;}var F=this.patterns.hex.exec(E);if(F&&F.length==4){return[parseInt(F[1],16),parseInt(F[2],16),parseInt(F[3],16)];}F=this.patterns.rgb.exec(E);if(F&&F.length==4){return[parseInt(F[1],10),parseInt(F[2],10),parseInt(F[3],10)];}F=this.patterns.hex3.exec(E);if(F&&F.length==4){return[parseInt(F[1]+F[1],16),parseInt(F[2]+F[2],16),parseInt(F[3]+F[3],16)];}return null;};B.getAttribute=function(E){var G=this.getEl();if(this.patterns.color.test(E)){var H=YAHOO.util.Dom.getStyle(G,E);
if(this.patterns.transparent.test(H)){var F=G.parentNode;H=C.Dom.getStyle(F,E);while(F&&this.patterns.transparent.test(H)){F=F.parentNode;H=C.Dom.getStyle(F,E);if(F.tagName.toUpperCase()=="HTML"){H="#fff";}}}}else{H=D.getAttribute.call(this,E);}return H;};B.doMethod=function(F,J,G){var I;if(this.patterns.color.test(F)){I=[];for(var H=0,E=J.length;H<E;++H){I[H]=D.doMethod.call(this,F,J[H],G[H]);}I="rgb("+Math.floor(I[0])+","+Math.floor(I[1])+","+Math.floor(I[2])+")";}else{I=D.doMethod.call(this,F,J,G);}return I;};B.setRuntimeAttribute=function(F){D.setRuntimeAttribute.call(this,F);if(this.patterns.color.test(F)){var H=this.attributes;var J=this.parseColor(this.runtimeAttributes[F].start);var G=this.parseColor(this.runtimeAttributes[F].end);if(typeof H[F]["to"]==="undefined"&&typeof H[F]["by"]!=="undefined"){G=this.parseColor(H[F].by);for(var I=0,E=J.length;I<E;++I){G[I]=J[I]+G[I];}}this.runtimeAttributes[F].start=J;this.runtimeAttributes[F].end=G;}};C.ColorAnim=A;})();
/*
TERMS OF USE - EASING EQUATIONS
Open source under the BSD License.
Copyright 2001 Robert Penner All rights reserved.

Redistribution and use in source and binary forms, with or without modification, are permitted provided that the following conditions are met:

 * Redistributions of source code must retain the above copyright notice, this list of conditions and the following disclaimer.
 * Redistributions in binary form must reproduce the above copyright notice, this list of conditions and the following disclaimer in the documentation and/or other materials provided with the distribution.
 * Neither the name of the author nor the names of contributors may be used to endorse or promote products derived from this software without specific prior written permission.

THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS "AS IS" AND ANY EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT LIMITED TO, THE IMPLIED WARRANTIES OF MERCHANTABILITY AND FITNESS FOR A PARTICULAR PURPOSE ARE DISCLAIMED. IN NO EVENT SHALL THE COPYRIGHT OWNER OR CONTRIBUTORS BE LIABLE FOR ANY DIRECT, INDIRECT, INCIDENTAL, SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES (INCLUDING, BUT NOT LIMITED TO, PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES; LOSS OF USE, DATA, OR PROFITS; OR BUSINESS INTERRUPTION) HOWEVER CAUSED AND ON ANY THEORY OF LIABILITY, WHETHER IN CONTRACT, STRICT LIABILITY, OR TORT (INCLUDING NEGLIGENCE OR OTHERWISE) ARISING IN ANY WAY OUT OF THE USE OF THIS SOFTWARE, EVEN IF ADVISED OF THE POSSIBILITY OF SUCH DAMAGE.
*/
YAHOO.util.Easing={easeNone:function(B,A,D,C){return D*B/C+A;},easeIn:function(B,A,D,C){return D*(B/=C)*B+A;},easeOut:function(B,A,D,C){return -D*(B/=C)*(B-2)+A;},easeBoth:function(B,A,D,C){if((B/=C/2)<1){return D/2*B*B+A;}return -D/2*((--B)*(B-2)-1)+A;},easeInStrong:function(B,A,D,C){return D*(B/=C)*B*B*B+A;},easeOutStrong:function(B,A,D,C){return -D*((B=B/C-1)*B*B*B-1)+A;},easeBothStrong:function(B,A,D,C){if((B/=C/2)<1){return D/2*B*B*B*B+A;}return -D/2*((B-=2)*B*B*B-2)+A;},elasticIn:function(C,A,G,F,B,E){if(C==0){return A;}if((C/=F)==1){return A+G;}if(!E){E=F*0.3;}if(!B||B<Math.abs(G)){B=G;var D=E/4;}else{var D=E/(2*Math.PI)*Math.asin(G/B);}return -(B*Math.pow(2,10*(C-=1))*Math.sin((C*F-D)*(2*Math.PI)/E))+A;},elasticOut:function(C,A,G,F,B,E){if(C==0){return A;}if((C/=F)==1){return A+G;}if(!E){E=F*0.3;}if(!B||B<Math.abs(G)){B=G;var D=E/4;}else{var D=E/(2*Math.PI)*Math.asin(G/B);}return B*Math.pow(2,-10*C)*Math.sin((C*F-D)*(2*Math.PI)/E)+G+A;},elasticBoth:function(C,A,G,F,B,E){if(C==0){return A;}if((C/=F/2)==2){return A+G;}if(!E){E=F*(0.3*1.5);}if(!B||B<Math.abs(G)){B=G;var D=E/4;}else{var D=E/(2*Math.PI)*Math.asin(G/B);}if(C<1){return -0.5*(B*Math.pow(2,10*(C-=1))*Math.sin((C*F-D)*(2*Math.PI)/E))+A;}return B*Math.pow(2,-10*(C-=1))*Math.sin((C*F-D)*(2*Math.PI)/E)*0.5+G+A;},backIn:function(B,A,E,D,C){if(typeof C=="undefined"){C=1.70158;}return E*(B/=D)*B*((C+1)*B-C)+A;},backOut:function(B,A,E,D,C){if(typeof C=="undefined"){C=1.70158;}return E*((B=B/D-1)*B*((C+1)*B+C)+1)+A;},backBoth:function(B,A,E,D,C){if(typeof C=="undefined"){C=1.70158;}if((B/=D/2)<1){return E/2*(B*B*(((C*=(1.525))+1)*B-C))+A;}return E/2*((B-=2)*B*(((C*=(1.525))+1)*B+C)+2)+A;},bounceIn:function(B,A,D,C){return D-YAHOO.util.Easing.bounceOut(C-B,0,D,C)+A;},bounceOut:function(B,A,D,C){if((B/=C)<(1/2.75)){return D*(7.5625*B*B)+A;}else{if(B<(2/2.75)){return D*(7.5625*(B-=(1.5/2.75))*B+0.75)+A;}else{if(B<(2.5/2.75)){return D*(7.5625*(B-=(2.25/2.75))*B+0.9375)+A;}}}return D*(7.5625*(B-=(2.625/2.75))*B+0.984375)+A;},bounceBoth:function(B,A,D,C){if(B<C/2){return YAHOO.util.Easing.bounceIn(B*2,0,D,C)*0.5+A;}return YAHOO.util.Easing.bounceOut(B*2-C,0,D,C)*0.5+D*0.5+A;}};(function(){var A=function(H,G,I,J){if(H){A.superclass.constructor.call(this,H,G,I,J);}};A.NAME="Motion";var E=YAHOO.util;YAHOO.extend(A,E.ColorAnim);var F=A.superclass;var C=A.prototype;C.patterns.points=/^points$/i;C.setAttribute=function(G,I,H){if(this.patterns.points.test(G)){H=H||"px";F.setAttribute.call(this,"left",I[0],H);F.setAttribute.call(this,"top",I[1],H);}else{F.setAttribute.call(this,G,I,H);}};C.getAttribute=function(G){if(this.patterns.points.test(G)){var H=[F.getAttribute.call(this,"left"),F.getAttribute.call(this,"top")];}else{H=F.getAttribute.call(this,G);}return H;};C.doMethod=function(G,K,H){var J=null;if(this.patterns.points.test(G)){var I=this.method(this.currentFrame,0,100,this.totalFrames)/100;J=E.Bezier.getPosition(this.runtimeAttributes[G],I);}else{J=F.doMethod.call(this,G,K,H);}return J;};C.setRuntimeAttribute=function(P){if(this.patterns.points.test(P)){var H=this.getEl();var J=this.attributes;var G;var L=J["points"]["control"]||[];var I;var M,O;if(L.length>0&&!(L[0] instanceof Array)){L=[L];}else{var K=[];for(M=0,O=L.length;M<O;++M){K[M]=L[M];}L=K;}if(E.Dom.getStyle(H,"position")=="static"){E.Dom.setStyle(H,"position","relative");}if(D(J["points"]["from"])){E.Dom.setXY(H,J["points"]["from"]);}else{E.Dom.setXY(H,E.Dom.getXY(H));}G=this.getAttribute("points");if(D(J["points"]["to"])){I=B.call(this,J["points"]["to"],G);
var N=E.Dom.getXY(this.getEl());for(M=0,O=L.length;M<O;++M){L[M]=B.call(this,L[M],G);}}else{if(D(J["points"]["by"])){I=[G[0]+J["points"]["by"][0],G[1]+J["points"]["by"][1]];for(M=0,O=L.length;M<O;++M){L[M]=[G[0]+L[M][0],G[1]+L[M][1]];}}}this.runtimeAttributes[P]=[G];if(L.length>0){this.runtimeAttributes[P]=this.runtimeAttributes[P].concat(L);}this.runtimeAttributes[P][this.runtimeAttributes[P].length]=I;}else{F.setRuntimeAttribute.call(this,P);}};var B=function(G,I){var H=E.Dom.getXY(this.getEl());G=[G[0]-H[0]+I[0],G[1]-H[1]+I[1]];return G;};var D=function(G){return(typeof G!=="undefined");};E.Motion=A;})();(function(){var D=function(F,E,G,H){if(F){D.superclass.constructor.call(this,F,E,G,H);}};D.NAME="Scroll";var B=YAHOO.util;YAHOO.extend(D,B.ColorAnim);var C=D.superclass;var A=D.prototype;A.doMethod=function(E,H,F){var G=null;if(E=="scroll"){G=[this.method(this.currentFrame,H[0],F[0]-H[0],this.totalFrames),this.method(this.currentFrame,H[1],F[1]-H[1],this.totalFrames)];}else{G=C.doMethod.call(this,E,H,F);}return G;};A.getAttribute=function(E){var G=null;var F=this.getEl();if(E=="scroll"){G=[F.scrollLeft,F.scrollTop];}else{G=C.getAttribute.call(this,E);}return G;};A.setAttribute=function(E,H,G){var F=this.getEl();if(E=="scroll"){F.scrollLeft=H[0];F.scrollTop=H[1];}else{C.setAttribute.call(this,E,H,G);}};B.Scroll=D;})();YAHOO.register("animation",YAHOO.util.Anim,{version:"2.5.2",build:"1076"});

/*
Copyright (c) 2008, Yahoo! Inc. All rights reserved.
Code licensed under the BSD License:
http://developer.yahoo.net/yui/license.txt
version: 2.5.2
*/
YAHOO.util.Connect={_msxml_progid:["Microsoft.XMLHTTP","MSXML2.XMLHTTP.3.0","MSXML2.XMLHTTP"],_http_headers:{},_has_http_headers:false,_use_default_post_header:true,_default_post_header:"application/x-www-form-urlencoded; charset=UTF-8",_default_form_header:"application/x-www-form-urlencoded",_use_default_xhr_header:true,_default_xhr_header:"XMLHttpRequest",_has_default_headers:true,_default_headers:{},_isFormSubmit:false,_isFileUpload:false,_formNode:null,_sFormData:null,_poll:{},_timeOut:{},_polling_interval:50,_transaction_id:0,_submitElementValue:null,_hasSubmitListener:(function(){if(YAHOO.util.Event){YAHOO.util.Event.addListener(document,"click",function(B){var A=YAHOO.util.Event.getTarget(B);if(A.nodeName.toLowerCase()=="input"&&(A.type&&A.type.toLowerCase()=="submit")){YAHOO.util.Connect._submitElementValue=encodeURIComponent(A.name)+"="+encodeURIComponent(A.value);}});return true;}return false;})(),startEvent:new YAHOO.util.CustomEvent("start"),completeEvent:new YAHOO.util.CustomEvent("complete"),successEvent:new YAHOO.util.CustomEvent("success"),failureEvent:new YAHOO.util.CustomEvent("failure"),uploadEvent:new YAHOO.util.CustomEvent("upload"),abortEvent:new YAHOO.util.CustomEvent("abort"),_customEvents:{onStart:["startEvent","start"],onComplete:["completeEvent","complete"],onSuccess:["successEvent","success"],onFailure:["failureEvent","failure"],onUpload:["uploadEvent","upload"],onAbort:["abortEvent","abort"]},setProgId:function(A){this._msxml_progid.unshift(A);YAHOO.log("ActiveX Program Id  "+A+" added to _msxml_progid.","info","Connection");},setDefaultPostHeader:function(A){if(typeof A=="string"){this._default_post_header=A;YAHOO.log("Default POST header set to  "+A,"info","Connection");}else{if(typeof A=="boolean"){this._use_default_post_header=A;}}},setDefaultXhrHeader:function(A){if(typeof A=="string"){this._default_xhr_header=A;YAHOO.log("Default XHR header set to  "+A,"info","Connection");}else{this._use_default_xhr_header=A;}},setPollingInterval:function(A){if(typeof A=="number"&&isFinite(A)){this._polling_interval=A;YAHOO.log("Default polling interval set to "+A+"ms","info","Connection");}},createXhrObject:function(E){var D,A;try{A=new XMLHttpRequest();D={conn:A,tId:E};YAHOO.log("XHR object created for transaction "+E,"info","Connection");}catch(C){for(var B=0;B<this._msxml_progid.length;++B){try{A=new ActiveXObject(this._msxml_progid[B]);D={conn:A,tId:E};YAHOO.log("ActiveX XHR object created for transaction "+E,"info","Connection");break;}catch(C){}}}finally{return D;}},getConnectionObject:function(A){var C;var D=this._transaction_id;try{if(!A){C=this.createXhrObject(D);}else{C={};C.tId=D;C.isUpload=true;}if(C){this._transaction_id++;}}catch(B){}finally{return C;}},asyncRequest:function(F,C,E,A){var D=(this._isFileUpload)?this.getConnectionObject(true):this.getConnectionObject();var B=(E&&E.argument)?E.argument:null;if(!D){YAHOO.log("Unable to create connection object.","error","Connection");return null;}else{if(E&&E.customevents){this.initCustomEvents(D,E);}if(this._isFormSubmit){if(this._isFileUpload){this.uploadFile(D,E,C,A);return D;}if(F.toUpperCase()=="GET"){if(this._sFormData.length!==0){C+=((C.indexOf("?")==-1)?"?":"&")+this._sFormData;}}else{if(F.toUpperCase()=="POST"){A=A?this._sFormData+"&"+A:this._sFormData;}}}if(F.toUpperCase()=="GET"&&(E&&E.cache===false)){C+=((C.indexOf("?")==-1)?"?":"&")+"rnd="+new Date().valueOf().toString();}D.conn.open(F,C,true);if(this._use_default_xhr_header){if(!this._default_headers["X-Requested-With"]){this.initHeader("X-Requested-With",this._default_xhr_header,true);YAHOO.log("Initialize transaction header X-Request-Header to XMLHttpRequest.","info","Connection");}}if((F.toUpperCase()=="POST"&&this._use_default_post_header)&&this._isFormSubmit===false){this.initHeader("Content-Type",this._default_post_header);YAHOO.log("Initialize header Content-Type to application/x-www-form-urlencoded; UTF-8 for POST transaction.","info","Connection");}if(this._has_default_headers||this._has_http_headers){this.setHeader(D);}this.handleReadyState(D,E);D.conn.send(A||"");YAHOO.log("Transaction "+D.tId+" sent.","info","Connection");if(this._isFormSubmit===true){this.resetFormState();}this.startEvent.fire(D,B);if(D.startEvent){D.startEvent.fire(D,B);}return D;}},initCustomEvents:function(A,C){for(var B in C.customevents){if(this._customEvents[B][0]){A[this._customEvents[B][0]]=new YAHOO.util.CustomEvent(this._customEvents[B][1],(C.scope)?C.scope:null);YAHOO.log("Transaction-specific Custom Event "+A[this._customEvents[B][1]]+" created.","info","Connection");A[this._customEvents[B][0]].subscribe(C.customevents[B]);YAHOO.log("Transaction-specific Custom Event "+A[this._customEvents[B][1]]+" subscribed.","info","Connection");}}},handleReadyState:function(C,D){var B=this;var A=(D&&D.argument)?D.argument:null;if(D&&D.timeout){this._timeOut[C.tId]=window.setTimeout(function(){B.abort(C,D,true);},D.timeout);}this._poll[C.tId]=window.setInterval(function(){if(C.conn&&C.conn.readyState===4){window.clearInterval(B._poll[C.tId]);delete B._poll[C.tId];if(D&&D.timeout){window.clearTimeout(B._timeOut[C.tId]);delete B._timeOut[C.tId];}B.completeEvent.fire(C,A);if(C.completeEvent){C.completeEvent.fire(C,A);}B.handleTransactionResponse(C,D);}},this._polling_interval);},handleTransactionResponse:function(F,G,A){var D,C;var B=(G&&G.argument)?G.argument:null;try{if(F.conn.status!==undefined&&F.conn.status!==0){D=F.conn.status;}else{D=13030;}}catch(E){D=13030;}if(D>=200&&D<300||D===1223){C=this.createResponseObject(F,B);if(G&&G.success){if(!G.scope){G.success(C);YAHOO.log("Success callback. HTTP code is "+D,"info","Connection");}else{G.success.apply(G.scope,[C]);YAHOO.log("Success callback with scope. HTTP code is "+D,"info","Connection");}}this.successEvent.fire(C);if(F.successEvent){F.successEvent.fire(C);}}else{switch(D){case 12002:case 12029:case 12030:case 12031:case 12152:case 13030:C=this.createExceptionObject(F.tId,B,(A?A:false));if(G&&G.failure){if(!G.scope){G.failure(C);
YAHOO.log("Failure callback. Exception detected. Status code is "+D,"warn","Connection");}else{G.failure.apply(G.scope,[C]);YAHOO.log("Failure callback with scope. Exception detected. Status code is "+D,"warn","Connection");}}break;default:C=this.createResponseObject(F,B);if(G&&G.failure){if(!G.scope){G.failure(C);YAHOO.log("Failure callback. HTTP status code is "+D,"warn","Connection");}else{G.failure.apply(G.scope,[C]);YAHOO.log("Failure callback with scope. HTTP status code is "+D,"warn","Connection");}}}this.failureEvent.fire(C);if(F.failureEvent){F.failureEvent.fire(C);}}this.releaseObject(F);C=null;},createResponseObject:function(A,G){var D={};var I={};try{var C=A.conn.getAllResponseHeaders();var F=C.split("\n");for(var E=0;E<F.length;E++){var B=F[E].indexOf(":");if(B!=-1){I[F[E].substring(0,B)]=F[E].substring(B+2);}}}catch(H){}D.tId=A.tId;D.status=(A.conn.status==1223)?204:A.conn.status;D.statusText=(A.conn.status==1223)?"No Content":A.conn.statusText;D.getResponseHeader=I;D.getAllResponseHeaders=C;D.responseText=A.conn.responseText;D.responseXML=A.conn.responseXML;if(G){D.argument=G;}return D;},createExceptionObject:function(H,D,A){var F=0;var G="communication failure";var C=-1;var B="transaction aborted";var E={};E.tId=H;if(A){E.status=C;E.statusText=B;}else{E.status=F;E.statusText=G;}if(D){E.argument=D;}return E;},initHeader:function(A,D,C){var B=(C)?this._default_headers:this._http_headers;B[A]=D;if(C){this._has_default_headers=true;}else{this._has_http_headers=true;}},setHeader:function(A){if(this._has_default_headers){for(var B in this._default_headers){if(YAHOO.lang.hasOwnProperty(this._default_headers,B)){A.conn.setRequestHeader(B,this._default_headers[B]);YAHOO.log("Default HTTP header "+B+" set with value of "+this._default_headers[B],"info","Connection");}}}if(this._has_http_headers){for(var B in this._http_headers){if(YAHOO.lang.hasOwnProperty(this._http_headers,B)){A.conn.setRequestHeader(B,this._http_headers[B]);YAHOO.log("HTTP header "+B+" set with value of "+this._http_headers[B],"info","Connection");}}delete this._http_headers;this._http_headers={};this._has_http_headers=false;}},resetDefaultHeaders:function(){delete this._default_headers;this._default_headers={};this._has_default_headers=false;},setForm:function(K,E,B){this.resetFormState();var J;if(typeof K=="string"){J=(document.getElementById(K)||document.forms[K]);}else{if(typeof K=="object"){J=K;}else{YAHOO.log("Unable to create form object "+K,"warn","Connection");return ;}}if(E){var F=this.createFrame((window.location.href.toLowerCase().indexOf("https")===0||B)?true:false);this._isFormSubmit=true;this._isFileUpload=true;this._formNode=J;return ;}var A,I,G,L;var H=false;for(var D=0;D<J.elements.length;D++){A=J.elements[D];L=A.disabled;I=A.name;G=A.value;if(!L&&I){switch(A.type){case"select-one":case"select-multiple":for(var C=0;C<A.options.length;C++){if(A.options[C].selected){if(window.ActiveXObject){this._sFormData+=encodeURIComponent(I)+"="+encodeURIComponent(A.options[C].attributes["value"].specified?A.options[C].value:A.options[C].text)+"&";}else{this._sFormData+=encodeURIComponent(I)+"="+encodeURIComponent(A.options[C].hasAttribute("value")?A.options[C].value:A.options[C].text)+"&";}}}break;case"radio":case"checkbox":if(A.checked){this._sFormData+=encodeURIComponent(I)+"="+encodeURIComponent(G)+"&";}break;case"file":case undefined:case"reset":case"button":break;case"submit":if(H===false){if(this._hasSubmitListener&&this._submitElementValue){this._sFormData+=this._submitElementValue+"&";}else{this._sFormData+=encodeURIComponent(I)+"="+encodeURIComponent(G)+"&";}H=true;}break;default:this._sFormData+=encodeURIComponent(I)+"="+encodeURIComponent(G)+"&";}}}this._isFormSubmit=true;this._sFormData=this._sFormData.substr(0,this._sFormData.length-1);YAHOO.log("Form initialized for transaction. HTML form POST message is: "+this._sFormData,"info","Connection");this.initHeader("Content-Type",this._default_form_header);YAHOO.log("Initialize header Content-Type to application/x-www-form-urlencoded for setForm() transaction.","info","Connection");return this._sFormData;},resetFormState:function(){this._isFormSubmit=false;this._isFileUpload=false;this._formNode=null;this._sFormData="";},createFrame:function(A){var B="yuiIO"+this._transaction_id;var C;if(window.ActiveXObject){C=document.createElement('<iframe id="'+B+'" name="'+B+'" />');if(typeof A=="boolean"){C.src="javascript:false";}}else{C=document.createElement("iframe");C.id=B;C.name=B;}C.style.position="absolute";C.style.top="-1000px";C.style.left="-1000px";document.body.appendChild(C);YAHOO.log("File upload iframe created. Id is:"+B,"info","Connection");},appendPostData:function(A){var D=[];var B=A.split("&");for(var C=0;C<B.length;C++){var E=B[C].indexOf("=");if(E!=-1){D[C]=document.createElement("input");D[C].type="hidden";D[C].name=B[C].substring(0,E);D[C].value=B[C].substring(E+1);this._formNode.appendChild(D[C]);}}return D;},uploadFile:function(D,M,E,C){var N=this;var H="yuiIO"+D.tId;var I="multipart/form-data";var K=document.getElementById(H);var J=(M&&M.argument)?M.argument:null;var B={action:this._formNode.getAttribute("action"),method:this._formNode.getAttribute("method"),target:this._formNode.getAttribute("target")};this._formNode.setAttribute("action",E);this._formNode.setAttribute("method","POST");this._formNode.setAttribute("target",H);if(YAHOO.env.ua.ie){this._formNode.setAttribute("encoding",I);}else{this._formNode.setAttribute("enctype",I);}if(C){var L=this.appendPostData(C);}this._formNode.submit();this.startEvent.fire(D,J);if(D.startEvent){D.startEvent.fire(D,J);}if(M&&M.timeout){this._timeOut[D.tId]=window.setTimeout(function(){N.abort(D,M,true);},M.timeout);}if(L&&L.length>0){for(var G=0;G<L.length;G++){this._formNode.removeChild(L[G]);}}for(var A in B){if(YAHOO.lang.hasOwnProperty(B,A)){if(B[A]){this._formNode.setAttribute(A,B[A]);}else{this._formNode.removeAttribute(A);}}}this.resetFormState();var F=function(){if(M&&M.timeout){window.clearTimeout(N._timeOut[D.tId]);
delete N._timeOut[D.tId];}N.completeEvent.fire(D,J);if(D.completeEvent){D.completeEvent.fire(D,J);}var P={};P.tId=D.tId;P.argument=M.argument;try{P.responseText=K.contentWindow.document.body?K.contentWindow.document.body.innerHTML:K.contentWindow.document.documentElement.textContent;P.responseXML=K.contentWindow.document.XMLDocument?K.contentWindow.document.XMLDocument:K.contentWindow.document;}catch(O){}if(M&&M.upload){if(!M.scope){M.upload(P);YAHOO.log("Upload callback.","info","Connection");}else{M.upload.apply(M.scope,[P]);YAHOO.log("Upload callback with scope.","info","Connection");}}N.uploadEvent.fire(P);if(D.uploadEvent){D.uploadEvent.fire(P);}YAHOO.util.Event.removeListener(K,"load",F);setTimeout(function(){document.body.removeChild(K);N.releaseObject(D);YAHOO.log("File upload iframe destroyed. Id is:"+H,"info","Connection");},100);};YAHOO.util.Event.addListener(K,"load",F);},abort:function(E,G,A){var D;var B=(G&&G.argument)?G.argument:null;if(E&&E.conn){if(this.isCallInProgress(E)){E.conn.abort();window.clearInterval(this._poll[E.tId]);delete this._poll[E.tId];if(A){window.clearTimeout(this._timeOut[E.tId]);delete this._timeOut[E.tId];}D=true;}}else{if(E&&E.isUpload===true){var C="yuiIO"+E.tId;var F=document.getElementById(C);if(F){YAHOO.util.Event.removeListener(F,"load");document.body.removeChild(F);YAHOO.log("File upload iframe destroyed. Id is:"+C,"info","Connection");if(A){window.clearTimeout(this._timeOut[E.tId]);delete this._timeOut[E.tId];}D=true;}}else{D=false;}}if(D===true){this.abortEvent.fire(E,B);if(E.abortEvent){E.abortEvent.fire(E,B);}this.handleTransactionResponse(E,G,true);YAHOO.log("Transaction "+E.tId+" aborted.","info","Connection");}return D;},isCallInProgress:function(B){if(B&&B.conn){return B.conn.readyState!==4&&B.conn.readyState!==0;}else{if(B&&B.isUpload===true){var A="yuiIO"+B.tId;return document.getElementById(A)?true:false;}else{return false;}}},releaseObject:function(A){if(A&&A.conn){A.conn=null;YAHOO.log("Connection object for transaction "+A.tId+" destroyed.","info","Connection");A=null;}}};YAHOO.register("connection",YAHOO.util.Connect,{version:"2.5.2",build:"1076"});

/*
Copyright (c) 2008, Yahoo! Inc. All rights reserved.
Code licensed under the BSD License:
http://developer.yahoo.net/yui/license.txt
version: 2.5.2
*/
YAHOO.util.Attribute=function(B,A){if(A){this.owner=A;this.configure(B,true);}};YAHOO.util.Attribute.prototype={name:undefined,value:null,owner:null,readOnly:false,writeOnce:false,_initialConfig:null,_written:false,method:null,validator:null,getValue:function(){return this.value;},setValue:function(F,B){var E;var A=this.owner;var C=this.name;var D={type:C,prevValue:this.getValue(),newValue:F};if(this.readOnly||(this.writeOnce&&this._written)){return false;}if(this.validator&&!this.validator.call(A,F)){return false;}if(!B){E=A.fireBeforeChangeEvent(D);if(E===false){return false;}}if(this.method){this.method.call(A,F);}this.value=F;this._written=true;D.type=C;if(!B){this.owner.fireChangeEvent(D);}return true;},configure:function(B,C){B=B||{};this._written=false;this._initialConfig=this._initialConfig||{};for(var A in B){if(A&&YAHOO.lang.hasOwnProperty(B,A)){this[A]=B[A];if(C){this._initialConfig[A]=B[A];}}}},resetValue:function(){return this.setValue(this._initialConfig.value);},resetConfig:function(){this.configure(this._initialConfig);},refresh:function(A){this.setValue(this.value,A);}};(function(){var A=YAHOO.util.Lang;YAHOO.util.AttributeProvider=function(){};YAHOO.util.AttributeProvider.prototype={_configs:null,get:function(C){this._configs=this._configs||{};var B=this._configs[C];if(!B){return undefined;}return B.value;},set:function(D,E,B){this._configs=this._configs||{};var C=this._configs[D];if(!C){return false;}return C.setValue(E,B);},getAttributeKeys:function(){this._configs=this._configs;var D=[];var B;for(var C in this._configs){B=this._configs[C];if(A.hasOwnProperty(this._configs,C)&&!A.isUndefined(B)){D[D.length]=C;}}return D;},setAttributes:function(D,B){for(var C in D){if(A.hasOwnProperty(D,C)){this.set(C,D[C],B);}}},resetValue:function(C,B){this._configs=this._configs||{};if(this._configs[C]){this.set(C,this._configs[C]._initialConfig.value,B);return true;}return false;},refresh:function(E,C){this._configs=this._configs;E=((A.isString(E))?[E]:E)||this.getAttributeKeys();for(var D=0,B=E.length;D<B;++D){if(this._configs[E[D]]&&!A.isUndefined(this._configs[E[D]].value)&&!A.isNull(this._configs[E[D]].value)){this._configs[E[D]].refresh(C);}}},register:function(B,C){this.setAttributeConfig(B,C);},getAttributeConfig:function(C){this._configs=this._configs||{};var B=this._configs[C]||{};var D={};for(C in B){if(A.hasOwnProperty(B,C)){D[C]=B[C];}}return D;},setAttributeConfig:function(B,C,D){this._configs=this._configs||{};C=C||{};if(!this._configs[B]){C.name=B;this._configs[B]=this.createAttribute(C);}else{this._configs[B].configure(C,D);}},configureAttribute:function(B,C,D){this.setAttributeConfig(B,C,D);},resetAttributeConfig:function(B){this._configs=this._configs||{};this._configs[B].resetConfig();},subscribe:function(B,C){this._events=this._events||{};if(!(B in this._events)){this._events[B]=this.createEvent(B);}YAHOO.util.EventProvider.prototype.subscribe.apply(this,arguments);},on:function(){this.subscribe.apply(this,arguments);},addListener:function(){this.subscribe.apply(this,arguments);},fireBeforeChangeEvent:function(C){var B="before";B+=C.type.charAt(0).toUpperCase()+C.type.substr(1)+"Change";C.type=B;return this.fireEvent(C.type,C);},fireChangeEvent:function(B){B.type+="Change";return this.fireEvent(B.type,B);},createAttribute:function(B){return new YAHOO.util.Attribute(B,this);}};YAHOO.augment(YAHOO.util.AttributeProvider,YAHOO.util.EventProvider);})();(function(){var D=YAHOO.util.Dom,F=YAHOO.util.AttributeProvider;YAHOO.util.Element=function(G,H){if(arguments.length){this.init(G,H);}};YAHOO.util.Element.prototype={DOM_EVENTS:null,appendChild:function(G){G=G.get?G.get("element"):G;this.get("element").appendChild(G);},getElementsByTagName:function(G){return this.get("element").getElementsByTagName(G);},hasChildNodes:function(){return this.get("element").hasChildNodes();},insertBefore:function(G,H){G=G.get?G.get("element"):G;H=(H&&H.get)?H.get("element"):H;this.get("element").insertBefore(G,H);},removeChild:function(G){G=G.get?G.get("element"):G;this.get("element").removeChild(G);return true;},replaceChild:function(G,H){G=G.get?G.get("element"):G;H=H.get?H.get("element"):H;return this.get("element").replaceChild(G,H);},initAttributes:function(G){},addListener:function(K,J,L,I){var H=this.get("element");I=I||this;H=this.get("id")||H;var G=this;if(!this._events[K]){if(this.DOM_EVENTS[K]){YAHOO.util.Event.addListener(H,K,function(M){if(M.srcElement&&!M.target){M.target=M.srcElement;}G.fireEvent(K,M);},L,I);}this.createEvent(K,this);}YAHOO.util.EventProvider.prototype.subscribe.apply(this,arguments);},on:function(){this.addListener.apply(this,arguments);},subscribe:function(){this.addListener.apply(this,arguments);},removeListener:function(H,G){this.unsubscribe.apply(this,arguments);},addClass:function(G){D.addClass(this.get("element"),G);},getElementsByClassName:function(H,G){return D.getElementsByClassName(H,G,this.get("element"));},hasClass:function(G){return D.hasClass(this.get("element"),G);},removeClass:function(G){return D.removeClass(this.get("element"),G);},replaceClass:function(H,G){return D.replaceClass(this.get("element"),H,G);},setStyle:function(I,H){var G=this.get("element");if(!G){return this._queue[this._queue.length]=["setStyle",arguments];}return D.setStyle(G,I,H);},getStyle:function(G){return D.getStyle(this.get("element"),G);},fireQueue:function(){var H=this._queue;for(var I=0,G=H.length;I<G;++I){this[H[I][0]].apply(this,H[I][1]);}},appendTo:function(H,I){H=(H.get)?H.get("element"):D.get(H);this.fireEvent("beforeAppendTo",{type:"beforeAppendTo",target:H});I=(I&&I.get)?I.get("element"):D.get(I);var G=this.get("element");if(!G){return false;}if(!H){return false;}if(G.parent!=H){if(I){H.insertBefore(G,I);}else{H.appendChild(G);}}this.fireEvent("appendTo",{type:"appendTo",target:H});},get:function(G){var I=this._configs||{};var H=I.element;if(H&&!I[G]&&!YAHOO.lang.isUndefined(H.value[G])){return H.value[G];}return F.prototype.get.call(this,G);},setAttributes:function(L,H){var K=this.get("element");
for(var J in L){if(!this._configs[J]&&!YAHOO.lang.isUndefined(K[J])){this.setAttributeConfig(J);}}for(var I=0,G=this._configOrder.length;I<G;++I){if(L[this._configOrder[I]]!==undefined){this.set(this._configOrder[I],L[this._configOrder[I]],H);}}},set:function(H,J,G){var I=this.get("element");if(!I){this._queue[this._queue.length]=["set",arguments];if(this._configs[H]){this._configs[H].value=J;}return ;}if(!this._configs[H]&&!YAHOO.lang.isUndefined(I[H])){C.call(this,H);}return F.prototype.set.apply(this,arguments);},setAttributeConfig:function(G,I,J){var H=this.get("element");if(H&&!this._configs[G]&&!YAHOO.lang.isUndefined(H[G])){C.call(this,G,I);}else{F.prototype.setAttributeConfig.apply(this,arguments);}this._configOrder.push(G);},getAttributeKeys:function(){var H=this.get("element");var I=F.prototype.getAttributeKeys.call(this);for(var G in H){if(!this._configs[G]){I[G]=I[G]||H[G];}}return I;},createEvent:function(H,G){this._events[H]=true;F.prototype.createEvent.apply(this,arguments);},init:function(H,G){A.apply(this,arguments);}};var A=function(H,G){this._queue=this._queue||[];this._events=this._events||{};this._configs=this._configs||{};this._configOrder=[];G=G||{};G.element=G.element||H||null;this.DOM_EVENTS={"click":true,"dblclick":true,"keydown":true,"keypress":true,"keyup":true,"mousedown":true,"mousemove":true,"mouseout":true,"mouseover":true,"mouseup":true,"focus":true,"blur":true,"submit":true};var I=false;if(YAHOO.lang.isString(H)){C.call(this,"id",{value:G.element});}if(D.get(H)){I=true;E.call(this,G);B.call(this,G);}YAHOO.util.Event.onAvailable(G.element,function(){if(!I){E.call(this,G);}this.fireEvent("available",{type:"available",target:G.element});},this,true);YAHOO.util.Event.onContentReady(G.element,function(){if(!I){B.call(this,G);}this.fireEvent("contentReady",{type:"contentReady",target:G.element});},this,true);};var E=function(G){this.setAttributeConfig("element",{value:D.get(G.element),readOnly:true});};var B=function(G){this.initAttributes(G);this.setAttributes(G,true);this.fireQueue();};var C=function(G,I){var H=this.get("element");I=I||{};I.name=G;I.method=I.method||function(J){H[G]=J;};I.value=I.value||H[G];this._configs[G]=new YAHOO.util.Attribute(I,this);};YAHOO.augment(YAHOO.util.Element,F);})();YAHOO.register("element",YAHOO.util.Element,{version:"2.5.2",build:"1076"});

/*
Copyright (c) 2008, Yahoo! Inc. All rights reserved.
Code licensed under the BSD License:
http://developer.yahoo.net/yui/license.txt
version: 2.5.2
*/
if(!YAHOO.util.DragDropMgr){YAHOO.util.DragDropMgr=function(){var A=YAHOO.util.Event;return{ids:{},handleIds:{},dragCurrent:null,dragOvers:{},deltaX:0,deltaY:0,preventDefault:true,stopPropagation:true,initialized:false,locked:false,interactionInfo:null,init:function(){this.initialized=true;},POINT:0,INTERSECT:1,STRICT_INTERSECT:2,mode:0,_execOnAll:function(D,C){for(var E in this.ids){for(var B in this.ids[E]){var F=this.ids[E][B];if(!this.isTypeOfDD(F)){continue;}F[D].apply(F,C);}}},_onLoad:function(){this.init();A.on(document,"mouseup",this.handleMouseUp,this,true);A.on(document,"mousemove",this.handleMouseMove,this,true);A.on(window,"unload",this._onUnload,this,true);A.on(window,"resize",this._onResize,this,true);},_onResize:function(B){this._execOnAll("resetConstraints",[]);},lock:function(){this.locked=true;},unlock:function(){this.locked=false;},isLocked:function(){return this.locked;},locationCache:{},useCache:true,clickPixelThresh:3,clickTimeThresh:1000,dragThreshMet:false,clickTimeout:null,startX:0,startY:0,fromTimeout:false,regDragDrop:function(C,B){if(!this.initialized){this.init();}if(!this.ids[B]){this.ids[B]={};}this.ids[B][C.id]=C;},removeDDFromGroup:function(D,B){if(!this.ids[B]){this.ids[B]={};}var C=this.ids[B];if(C&&C[D.id]){delete C[D.id];}},_remove:function(C){for(var B in C.groups){if(B&&this.ids[B][C.id]){delete this.ids[B][C.id];}}delete this.handleIds[C.id];},regHandle:function(C,B){if(!this.handleIds[C]){this.handleIds[C]={};}this.handleIds[C][B]=B;},isDragDrop:function(B){return(this.getDDById(B))?true:false;},getRelated:function(G,C){var F=[];for(var E in G.groups){for(var D in this.ids[E]){var B=this.ids[E][D];if(!this.isTypeOfDD(B)){continue;}if(!C||B.isTarget){F[F.length]=B;}}}return F;},isLegalTarget:function(F,E){var C=this.getRelated(F,true);for(var D=0,B=C.length;D<B;++D){if(C[D].id==E.id){return true;}}return false;},isTypeOfDD:function(B){return(B&&B.__ygDragDrop);},isHandle:function(C,B){return(this.handleIds[C]&&this.handleIds[C][B]);},getDDById:function(C){for(var B in this.ids){if(this.ids[B][C]){return this.ids[B][C];}}return null;},handleMouseDown:function(D,C){this.currentTarget=YAHOO.util.Event.getTarget(D);this.dragCurrent=C;var B=C.getEl();this.startX=YAHOO.util.Event.getPageX(D);this.startY=YAHOO.util.Event.getPageY(D);this.deltaX=this.startX-B.offsetLeft;this.deltaY=this.startY-B.offsetTop;this.dragThreshMet=false;this.clickTimeout=setTimeout(function(){var E=YAHOO.util.DDM;E.startDrag(E.startX,E.startY);E.fromTimeout=true;},this.clickTimeThresh);},startDrag:function(B,D){clearTimeout(this.clickTimeout);var C=this.dragCurrent;if(C&&C.events.b4StartDrag){C.b4StartDrag(B,D);C.fireEvent("b4StartDragEvent",{x:B,y:D});}if(C&&C.events.startDrag){C.startDrag(B,D);C.fireEvent("startDragEvent",{x:B,y:D});}this.dragThreshMet=true;},handleMouseUp:function(B){if(this.dragCurrent){clearTimeout(this.clickTimeout);if(this.dragThreshMet){if(this.fromTimeout){this.fromTimeout=false;this.handleMouseMove(B);}this.fromTimeout=false;this.fireEvents(B,true);}else{}this.stopDrag(B);this.stopEvent(B);}},stopEvent:function(B){if(this.stopPropagation){YAHOO.util.Event.stopPropagation(B);}if(this.preventDefault){YAHOO.util.Event.preventDefault(B);}},stopDrag:function(D,C){var B=this.dragCurrent;if(B&&!C){if(this.dragThreshMet){if(B.events.b4EndDrag){B.b4EndDrag(D);B.fireEvent("b4EndDragEvent",{e:D});}if(B.events.endDrag){B.endDrag(D);B.fireEvent("endDragEvent",{e:D});}}if(B.events.mouseUp){B.onMouseUp(D);B.fireEvent("mouseUpEvent",{e:D});}}this.dragCurrent=null;this.dragOvers={};},handleMouseMove:function(E){var B=this.dragCurrent;if(B){if(YAHOO.util.Event.isIE&&!E.button){this.stopEvent(E);return this.handleMouseUp(E);}else{if(E.clientX<0||E.clientY<0){}}if(!this.dragThreshMet){var D=Math.abs(this.startX-YAHOO.util.Event.getPageX(E));var C=Math.abs(this.startY-YAHOO.util.Event.getPageY(E));if(D>this.clickPixelThresh||C>this.clickPixelThresh){this.startDrag(this.startX,this.startY);}}if(this.dragThreshMet){if(B&&B.events.b4Drag){B.b4Drag(E);B.fireEvent("b4DragEvent",{e:E});}if(B&&B.events.drag){B.onDrag(E);B.fireEvent("dragEvent",{e:E});}if(B){this.fireEvents(E,false);}}this.stopEvent(E);}},fireEvents:function(U,K){var Z=this.dragCurrent;if(!Z||Z.isLocked()||Z.dragOnly){return ;}var M=YAHOO.util.Event.getPageX(U),L=YAHOO.util.Event.getPageY(U),O=new YAHOO.util.Point(M,L),J=Z.getTargetCoord(O.x,O.y),E=Z.getDragEl(),D=["out","over","drop","enter"],T=new YAHOO.util.Region(J.y,J.x+E.offsetWidth,J.y+E.offsetHeight,J.x),H=[],C={},P=[],a={outEvts:[],overEvts:[],dropEvts:[],enterEvts:[]};for(var R in this.dragOvers){var c=this.dragOvers[R];if(!this.isTypeOfDD(c)){continue;}if(!this.isOverTarget(O,c,this.mode,T)){a.outEvts.push(c);}H[R]=true;delete this.dragOvers[R];}for(var Q in Z.groups){if("string"!=typeof Q){continue;}for(R in this.ids[Q]){var F=this.ids[Q][R];if(!this.isTypeOfDD(F)){continue;}if(F.isTarget&&!F.isLocked()&&F!=Z){if(this.isOverTarget(O,F,this.mode,T)){C[Q]=true;if(K){a.dropEvts.push(F);}else{if(!H[F.id]){a.enterEvts.push(F);}else{a.overEvts.push(F);}this.dragOvers[F.id]=F;}}}}}this.interactionInfo={out:a.outEvts,enter:a.enterEvts,over:a.overEvts,drop:a.dropEvts,point:O,draggedRegion:T,sourceRegion:this.locationCache[Z.id],validDrop:K};for(var B in C){P.push(B);}if(K&&!a.dropEvts.length){this.interactionInfo.validDrop=false;if(Z.events.invalidDrop){Z.onInvalidDrop(U);Z.fireEvent("invalidDropEvent",{e:U});}}for(R=0;R<D.length;R++){var X=null;if(a[D[R]+"Evts"]){X=a[D[R]+"Evts"];}if(X&&X.length){var G=D[R].charAt(0).toUpperCase()+D[R].substr(1),W="onDrag"+G,I="b4Drag"+G,N="drag"+G+"Event",V="drag"+G;if(this.mode){if(Z.events[I]){Z[I](U,X,P);Z.fireEvent(I+"Event",{event:U,info:X,group:P});}if(Z.events[V]){Z[W](U,X,P);Z.fireEvent(N,{event:U,info:X,group:P});}}else{for(var Y=0,S=X.length;Y<S;++Y){if(Z.events[I]){Z[I](U,X[Y].id,P[0]);Z.fireEvent(I+"Event",{event:U,info:X[Y].id,group:P[0]});}if(Z.events[V]){Z[W](U,X[Y].id,P[0]);Z.fireEvent(N,{event:U,info:X[Y].id,group:P[0]});
}}}}}},getBestMatch:function(D){var F=null;var C=D.length;if(C==1){F=D[0];}else{for(var E=0;E<C;++E){var B=D[E];if(this.mode==this.INTERSECT&&B.cursorIsOver){F=B;break;}else{if(!F||!F.overlap||(B.overlap&&F.overlap.getArea()<B.overlap.getArea())){F=B;}}}}return F;},refreshCache:function(C){var E=C||this.ids;for(var B in E){if("string"!=typeof B){continue;}for(var D in this.ids[B]){var F=this.ids[B][D];if(this.isTypeOfDD(F)){var G=this.getLocation(F);if(G){this.locationCache[F.id]=G;}else{delete this.locationCache[F.id];}}}}},verifyEl:function(C){try{if(C){var B=C.offsetParent;if(B){return true;}}}catch(D){}return false;},getLocation:function(G){if(!this.isTypeOfDD(G)){return null;}var E=G.getEl(),J,D,C,L,K,M,B,I,F;try{J=YAHOO.util.Dom.getXY(E);}catch(H){}if(!J){return null;}D=J[0];C=D+E.offsetWidth;L=J[1];K=L+E.offsetHeight;M=L-G.padding[0];B=C+G.padding[1];I=K+G.padding[2];F=D-G.padding[3];return new YAHOO.util.Region(M,B,I,F);},isOverTarget:function(J,B,D,E){var F=this.locationCache[B.id];if(!F||!this.useCache){F=this.getLocation(B);this.locationCache[B.id]=F;}if(!F){return false;}B.cursorIsOver=F.contains(J);var I=this.dragCurrent;if(!I||(!D&&!I.constrainX&&!I.constrainY)){return B.cursorIsOver;}B.overlap=null;if(!E){var G=I.getTargetCoord(J.x,J.y);var C=I.getDragEl();E=new YAHOO.util.Region(G.y,G.x+C.offsetWidth,G.y+C.offsetHeight,G.x);}var H=E.intersect(F);if(H){B.overlap=H;return(D)?true:B.cursorIsOver;}else{return false;}},_onUnload:function(C,B){this.unregAll();},unregAll:function(){if(this.dragCurrent){this.stopDrag();this.dragCurrent=null;}this._execOnAll("unreg",[]);this.ids={};},elementCache:{},getElWrapper:function(C){var B=this.elementCache[C];if(!B||!B.el){B=this.elementCache[C]=new this.ElementWrapper(YAHOO.util.Dom.get(C));}return B;},getElement:function(B){return YAHOO.util.Dom.get(B);},getCss:function(C){var B=YAHOO.util.Dom.get(C);return(B)?B.style:null;},ElementWrapper:function(B){this.el=B||null;this.id=this.el&&B.id;this.css=this.el&&B.style;},getPosX:function(B){return YAHOO.util.Dom.getX(B);},getPosY:function(B){return YAHOO.util.Dom.getY(B);},swapNode:function(D,B){if(D.swapNode){D.swapNode(B);}else{var E=B.parentNode;var C=B.nextSibling;if(C==D){E.insertBefore(D,B);}else{if(B==D.nextSibling){E.insertBefore(B,D);}else{D.parentNode.replaceChild(B,D);E.insertBefore(D,C);}}}},getScroll:function(){var D,B,E=document.documentElement,C=document.body;if(E&&(E.scrollTop||E.scrollLeft)){D=E.scrollTop;B=E.scrollLeft;}else{if(C){D=C.scrollTop;B=C.scrollLeft;}else{}}return{top:D,left:B};},getStyle:function(C,B){return YAHOO.util.Dom.getStyle(C,B);},getScrollTop:function(){return this.getScroll().top;},getScrollLeft:function(){return this.getScroll().left;},moveToEl:function(B,D){var C=YAHOO.util.Dom.getXY(D);YAHOO.util.Dom.setXY(B,C);},getClientHeight:function(){return YAHOO.util.Dom.getViewportHeight();},getClientWidth:function(){return YAHOO.util.Dom.getViewportWidth();},numericSort:function(C,B){return(C-B);},_timeoutCount:0,_addListeners:function(){var B=YAHOO.util.DDM;if(YAHOO.util.Event&&document){B._onLoad();}else{if(B._timeoutCount>2000){}else{setTimeout(B._addListeners,10);if(document&&document.body){B._timeoutCount+=1;}}}},handleWasClicked:function(B,D){if(this.isHandle(D,B.id)){return true;}else{var C=B.parentNode;while(C){if(this.isHandle(D,C.id)){return true;}else{C=C.parentNode;}}}return false;}};}();YAHOO.util.DDM=YAHOO.util.DragDropMgr;YAHOO.util.DDM._addListeners();}(function(){var A=YAHOO.util.Event;var B=YAHOO.util.Dom;YAHOO.util.DragDrop=function(E,C,D){if(E){this.init(E,C,D);}};YAHOO.util.DragDrop.prototype={events:null,on:function(){this.subscribe.apply(this,arguments);},id:null,config:null,dragElId:null,handleElId:null,invalidHandleTypes:null,invalidHandleIds:null,invalidHandleClasses:null,startPageX:0,startPageY:0,groups:null,locked:false,lock:function(){this.locked=true;},unlock:function(){this.locked=false;},isTarget:true,padding:null,dragOnly:false,_domRef:null,__ygDragDrop:true,constrainX:false,constrainY:false,minX:0,maxX:0,minY:0,maxY:0,deltaX:0,deltaY:0,maintainOffset:false,xTicks:null,yTicks:null,primaryButtonOnly:true,available:false,hasOuterHandles:false,cursorIsOver:false,overlap:null,b4StartDrag:function(C,D){},startDrag:function(C,D){},b4Drag:function(C){},onDrag:function(C){},onDragEnter:function(C,D){},b4DragOver:function(C){},onDragOver:function(C,D){},b4DragOut:function(C){},onDragOut:function(C,D){},b4DragDrop:function(C){},onDragDrop:function(C,D){},onInvalidDrop:function(C){},b4EndDrag:function(C){},endDrag:function(C){},b4MouseDown:function(C){},onMouseDown:function(C){},onMouseUp:function(C){},onAvailable:function(){},getEl:function(){if(!this._domRef){this._domRef=B.get(this.id);}return this._domRef;},getDragEl:function(){return B.get(this.dragElId);},init:function(F,C,D){this.initTarget(F,C,D);A.on(this._domRef||this.id,"mousedown",this.handleMouseDown,this,true);for(var E in this.events){this.createEvent(E+"Event");}},initTarget:function(E,C,D){this.config=D||{};this.events={};this.DDM=YAHOO.util.DDM;this.groups={};if(typeof E!=="string"){this._domRef=E;E=B.generateId(E);}this.id=E;this.addToGroup((C)?C:"default");this.handleElId=E;A.onAvailable(E,this.handleOnAvailable,this,true);this.setDragElId(E);this.invalidHandleTypes={A:"A"};this.invalidHandleIds={};this.invalidHandleClasses=[];this.applyConfig();},applyConfig:function(){this.events={mouseDown:true,b4MouseDown:true,mouseUp:true,b4StartDrag:true,startDrag:true,b4EndDrag:true,endDrag:true,drag:true,b4Drag:true,invalidDrop:true,b4DragOut:true,dragOut:true,dragEnter:true,b4DragOver:true,dragOver:true,b4DragDrop:true,dragDrop:true};if(this.config.events){for(var C in this.config.events){if(this.config.events[C]===false){this.events[C]=false;}}}this.padding=this.config.padding||[0,0,0,0];this.isTarget=(this.config.isTarget!==false);this.maintainOffset=(this.config.maintainOffset);this.primaryButtonOnly=(this.config.primaryButtonOnly!==false);this.dragOnly=((this.config.dragOnly===true)?true:false);
},handleOnAvailable:function(){this.available=true;this.resetConstraints();this.onAvailable();},setPadding:function(E,C,F,D){if(!C&&0!==C){this.padding=[E,E,E,E];}else{if(!F&&0!==F){this.padding=[E,C,E,C];}else{this.padding=[E,C,F,D];}}},setInitPosition:function(F,E){var G=this.getEl();if(!this.DDM.verifyEl(G)){if(G&&G.style&&(G.style.display=="none")){}else{}return ;}var D=F||0;var C=E||0;var H=B.getXY(G);this.initPageX=H[0]-D;this.initPageY=H[1]-C;this.lastPageX=H[0];this.lastPageY=H[1];this.setStartPosition(H);},setStartPosition:function(D){var C=D||B.getXY(this.getEl());this.deltaSetXY=null;this.startPageX=C[0];this.startPageY=C[1];},addToGroup:function(C){this.groups[C]=true;this.DDM.regDragDrop(this,C);},removeFromGroup:function(C){if(this.groups[C]){delete this.groups[C];}this.DDM.removeDDFromGroup(this,C);},setDragElId:function(C){this.dragElId=C;},setHandleElId:function(C){if(typeof C!=="string"){C=B.generateId(C);}this.handleElId=C;this.DDM.regHandle(this.id,C);},setOuterHandleElId:function(C){if(typeof C!=="string"){C=B.generateId(C);}A.on(C,"mousedown",this.handleMouseDown,this,true);this.setHandleElId(C);this.hasOuterHandles=true;},unreg:function(){A.removeListener(this.id,"mousedown",this.handleMouseDown);this._domRef=null;this.DDM._remove(this);},isLocked:function(){return(this.DDM.isLocked()||this.locked);},handleMouseDown:function(H,G){var D=H.which||H.button;if(this.primaryButtonOnly&&D>1){return ;}if(this.isLocked()){return ;}var C=this.b4MouseDown(H);if(this.events.b4MouseDown){C=this.fireEvent("b4MouseDownEvent",H);}var E=this.onMouseDown(H);if(this.events.mouseDown){E=this.fireEvent("mouseDownEvent",H);}if((C===false)||(E===false)){return ;}this.DDM.refreshCache(this.groups);var F=new YAHOO.util.Point(A.getPageX(H),A.getPageY(H));if(!this.hasOuterHandles&&!this.DDM.isOverTarget(F,this)){}else{if(this.clickValidator(H)){this.setStartPosition();this.DDM.handleMouseDown(H,this);this.DDM.stopEvent(H);}else{}}},clickValidator:function(D){var C=YAHOO.util.Event.getTarget(D);return(this.isValidHandleChild(C)&&(this.id==this.handleElId||this.DDM.handleWasClicked(C,this.id)));},getTargetCoord:function(E,D){var C=E-this.deltaX;var F=D-this.deltaY;if(this.constrainX){if(C<this.minX){C=this.minX;}if(C>this.maxX){C=this.maxX;}}if(this.constrainY){if(F<this.minY){F=this.minY;}if(F>this.maxY){F=this.maxY;}}C=this.getTick(C,this.xTicks);F=this.getTick(F,this.yTicks);return{x:C,y:F};},addInvalidHandleType:function(C){var D=C.toUpperCase();this.invalidHandleTypes[D]=D;},addInvalidHandleId:function(C){if(typeof C!=="string"){C=B.generateId(C);}this.invalidHandleIds[C]=C;},addInvalidHandleClass:function(C){this.invalidHandleClasses.push(C);},removeInvalidHandleType:function(C){var D=C.toUpperCase();delete this.invalidHandleTypes[D];},removeInvalidHandleId:function(C){if(typeof C!=="string"){C=B.generateId(C);}delete this.invalidHandleIds[C];},removeInvalidHandleClass:function(D){for(var E=0,C=this.invalidHandleClasses.length;E<C;++E){if(this.invalidHandleClasses[E]==D){delete this.invalidHandleClasses[E];}}},isValidHandleChild:function(F){var E=true;var H;try{H=F.nodeName.toUpperCase();}catch(G){H=F.nodeName;}E=E&&!this.invalidHandleTypes[H];E=E&&!this.invalidHandleIds[F.id];for(var D=0,C=this.invalidHandleClasses.length;E&&D<C;++D){E=!B.hasClass(F,this.invalidHandleClasses[D]);}return E;},setXTicks:function(F,C){this.xTicks=[];this.xTickSize=C;var E={};for(var D=this.initPageX;D>=this.minX;D=D-C){if(!E[D]){this.xTicks[this.xTicks.length]=D;E[D]=true;}}for(D=this.initPageX;D<=this.maxX;D=D+C){if(!E[D]){this.xTicks[this.xTicks.length]=D;E[D]=true;}}this.xTicks.sort(this.DDM.numericSort);},setYTicks:function(F,C){this.yTicks=[];this.yTickSize=C;var E={};for(var D=this.initPageY;D>=this.minY;D=D-C){if(!E[D]){this.yTicks[this.yTicks.length]=D;E[D]=true;}}for(D=this.initPageY;D<=this.maxY;D=D+C){if(!E[D]){this.yTicks[this.yTicks.length]=D;E[D]=true;}}this.yTicks.sort(this.DDM.numericSort);},setXConstraint:function(E,D,C){this.leftConstraint=parseInt(E,10);this.rightConstraint=parseInt(D,10);this.minX=this.initPageX-this.leftConstraint;this.maxX=this.initPageX+this.rightConstraint;if(C){this.setXTicks(this.initPageX,C);}this.constrainX=true;},clearConstraints:function(){this.constrainX=false;this.constrainY=false;this.clearTicks();},clearTicks:function(){this.xTicks=null;this.yTicks=null;this.xTickSize=0;this.yTickSize=0;},setYConstraint:function(C,E,D){this.topConstraint=parseInt(C,10);this.bottomConstraint=parseInt(E,10);this.minY=this.initPageY-this.topConstraint;this.maxY=this.initPageY+this.bottomConstraint;if(D){this.setYTicks(this.initPageY,D);}this.constrainY=true;},resetConstraints:function(){if(this.initPageX||this.initPageX===0){var D=(this.maintainOffset)?this.lastPageX-this.initPageX:0;var C=(this.maintainOffset)?this.lastPageY-this.initPageY:0;this.setInitPosition(D,C);}else{this.setInitPosition();}if(this.constrainX){this.setXConstraint(this.leftConstraint,this.rightConstraint,this.xTickSize);}if(this.constrainY){this.setYConstraint(this.topConstraint,this.bottomConstraint,this.yTickSize);}},getTick:function(I,F){if(!F){return I;}else{if(F[0]>=I){return F[0];}else{for(var D=0,C=F.length;D<C;++D){var E=D+1;if(F[E]&&F[E]>=I){var H=I-F[D];var G=F[E]-I;return(G>H)?F[D]:F[E];}}return F[F.length-1];}}},toString:function(){return("DragDrop "+this.id);}};YAHOO.augment(YAHOO.util.DragDrop,YAHOO.util.EventProvider);})();YAHOO.util.DD=function(C,A,B){if(C){this.init(C,A,B);}};YAHOO.extend(YAHOO.util.DD,YAHOO.util.DragDrop,{scroll:true,autoOffset:function(C,B){var A=C-this.startPageX;var D=B-this.startPageY;this.setDelta(A,D);},setDelta:function(B,A){this.deltaX=B;this.deltaY=A;},setDragElPos:function(C,B){var A=this.getDragEl();this.alignElWithMouse(A,C,B);},alignElWithMouse:function(C,G,F){var E=this.getTargetCoord(G,F);if(!this.deltaSetXY){var H=[E.x,E.y];YAHOO.util.Dom.setXY(C,H);var D=parseInt(YAHOO.util.Dom.getStyle(C,"left"),10);var B=parseInt(YAHOO.util.Dom.getStyle(C,"top"),10);this.deltaSetXY=[D-E.x,B-E.y];
}else{YAHOO.util.Dom.setStyle(C,"left",(E.x+this.deltaSetXY[0])+"px");YAHOO.util.Dom.setStyle(C,"top",(E.y+this.deltaSetXY[1])+"px");}this.cachePosition(E.x,E.y);var A=this;setTimeout(function(){A.autoScroll.call(A,E.x,E.y,C.offsetHeight,C.offsetWidth);},0);},cachePosition:function(B,A){if(B){this.lastPageX=B;this.lastPageY=A;}else{var C=YAHOO.util.Dom.getXY(this.getEl());this.lastPageX=C[0];this.lastPageY=C[1];}},autoScroll:function(J,I,E,K){if(this.scroll){var L=this.DDM.getClientHeight();var B=this.DDM.getClientWidth();var N=this.DDM.getScrollTop();var D=this.DDM.getScrollLeft();var H=E+I;var M=K+J;var G=(L+N-I-this.deltaY);var F=(B+D-J-this.deltaX);var C=40;var A=(document.all)?80:30;if(H>L&&G<C){window.scrollTo(D,N+A);}if(I<N&&N>0&&I-N<C){window.scrollTo(D,N-A);}if(M>B&&F<C){window.scrollTo(D+A,N);}if(J<D&&D>0&&J-D<C){window.scrollTo(D-A,N);}}},applyConfig:function(){YAHOO.util.DD.superclass.applyConfig.call(this);this.scroll=(this.config.scroll!==false);},b4MouseDown:function(A){this.setStartPosition();this.autoOffset(YAHOO.util.Event.getPageX(A),YAHOO.util.Event.getPageY(A));},b4Drag:function(A){this.setDragElPos(YAHOO.util.Event.getPageX(A),YAHOO.util.Event.getPageY(A));},toString:function(){return("DD "+this.id);}});YAHOO.util.DDProxy=function(C,A,B){if(C){this.init(C,A,B);this.initFrame();}};YAHOO.util.DDProxy.dragElId="ygddfdiv";YAHOO.extend(YAHOO.util.DDProxy,YAHOO.util.DD,{resizeFrame:true,centerFrame:false,createFrame:function(){var B=this,A=document.body;if(!A||!A.firstChild){setTimeout(function(){B.createFrame();},50);return ;}var G=this.getDragEl(),E=YAHOO.util.Dom;if(!G){G=document.createElement("div");G.id=this.dragElId;var D=G.style;D.position="absolute";D.visibility="hidden";D.cursor="move";D.border="2px solid #aaa";D.zIndex=999;D.height="25px";D.width="25px";var C=document.createElement("div");E.setStyle(C,"height","100%");E.setStyle(C,"width","100%");E.setStyle(C,"background-color","#ccc");E.setStyle(C,"opacity","0");G.appendChild(C);if(YAHOO.env.ua.ie){var F=document.createElement("iframe");F.setAttribute("src","javascript:");F.setAttribute("scrolling","no");F.setAttribute("frameborder","0");G.insertBefore(F,G.firstChild);E.setStyle(F,"height","100%");E.setStyle(F,"width","100%");E.setStyle(F,"position","absolute");E.setStyle(F,"top","0");E.setStyle(F,"left","0");E.setStyle(F,"opacity","0");E.setStyle(F,"zIndex","-1");E.setStyle(F.nextSibling,"zIndex","2");}A.insertBefore(G,A.firstChild);}},initFrame:function(){this.createFrame();},applyConfig:function(){YAHOO.util.DDProxy.superclass.applyConfig.call(this);this.resizeFrame=(this.config.resizeFrame!==false);this.centerFrame=(this.config.centerFrame);this.setDragElId(this.config.dragElId||YAHOO.util.DDProxy.dragElId);},showFrame:function(E,D){var C=this.getEl();var A=this.getDragEl();var B=A.style;this._resizeProxy();if(this.centerFrame){this.setDelta(Math.round(parseInt(B.width,10)/2),Math.round(parseInt(B.height,10)/2));}this.setDragElPos(E,D);YAHOO.util.Dom.setStyle(A,"visibility","visible");},_resizeProxy:function(){if(this.resizeFrame){var H=YAHOO.util.Dom;var B=this.getEl();var C=this.getDragEl();var G=parseInt(H.getStyle(C,"borderTopWidth"),10);var I=parseInt(H.getStyle(C,"borderRightWidth"),10);var F=parseInt(H.getStyle(C,"borderBottomWidth"),10);var D=parseInt(H.getStyle(C,"borderLeftWidth"),10);if(isNaN(G)){G=0;}if(isNaN(I)){I=0;}if(isNaN(F)){F=0;}if(isNaN(D)){D=0;}var E=Math.max(0,B.offsetWidth-I-D);var A=Math.max(0,B.offsetHeight-G-F);H.setStyle(C,"width",E+"px");H.setStyle(C,"height",A+"px");}},b4MouseDown:function(B){this.setStartPosition();var A=YAHOO.util.Event.getPageX(B);var C=YAHOO.util.Event.getPageY(B);this.autoOffset(A,C);},b4StartDrag:function(A,B){this.showFrame(A,B);},b4EndDrag:function(A){YAHOO.util.Dom.setStyle(this.getDragEl(),"visibility","hidden");},endDrag:function(D){var C=YAHOO.util.Dom;var B=this.getEl();var A=this.getDragEl();C.setStyle(A,"visibility","");C.setStyle(B,"visibility","hidden");YAHOO.util.DDM.moveToEl(B,A);C.setStyle(A,"visibility","hidden");C.setStyle(B,"visibility","");},toString:function(){return("DDProxy "+this.id);}});YAHOO.util.DDTarget=function(C,A,B){if(C){this.initTarget(C,A,B);}};YAHOO.extend(YAHOO.util.DDTarget,YAHOO.util.DragDrop,{toString:function(){return("DDTarget "+this.id);}});YAHOO.register("dragdrop",YAHOO.util.DragDropMgr,{version:"2.5.2",build:"1076"});

/*
Copyright (c) 2008, Yahoo! Inc. All rights reserved.
Code licensed under the BSD License:
http://developer.yahoo.net/yui/license.txt
version: 2.5.2
*/
YAHOO.namespace("lang");YAHOO.lang.JSON={_ESCAPES:/\\["\\\/bfnrtu]/g,_VALUES:/"[^"\\\n\r]*"|true|false|null|-?\d+(?:\.\d*)?(?:[eE][+\-]?\d+)?/g,_BRACKETS:/(?:^|:|,)(?:\s*\[)+/g,_INVALID:/^[\],:{}\s]*$/,_SPECIAL_CHARS:/["\\\x00-\x1f\x7f-\x9f]/g,_PARSE_DATE:/^(\d{4})-(\d{2})-(\d{2})T(\d{2}):(\d{2}):(\d{2})Z$/,_CHARS:{"\b":"\\b","\t":"\\t","\n":"\\n","\f":"\\f","\r":"\\r",'"':'\\"',"\\":"\\\\"},_applyFilter:function(C,B){var A=function(E,D){var F,G;if(D&&typeof D==="object"){for(F in D){if(YAHOO.lang.hasOwnProperty(D,F)){G=A(F,D[F]);if(G===undefined){delete D[F];}else{D[F]=G;}}}}return B(E,D);};if(YAHOO.lang.isFunction(B)){A("",C);}return C;},isValid:function(A){if(!YAHOO.lang.isString(A)){return false;}return this._INVALID.test(A.replace(this._ESCAPES,"@").replace(this._VALUES,"]").replace(this._BRACKETS,""));},dateToString:function(B){function A(C){return C<10?"0"+C:C;}return'"'+B.getUTCFullYear()+"-"+A(B.getUTCMonth()+1)+"-"+A(B.getUTCDate())+"T"+A(B.getUTCHours())+":"+A(B.getUTCMinutes())+":"+A(B.getUTCSeconds())+'Z"';},stringToDate:function(B){if(this._PARSE_DATE.test(B)){var A=new Date();A.setUTCFullYear(RegExp.$1,(RegExp.$2|0)-1,RegExp.$3);A.setUTCHours(RegExp.$4,RegExp.$5,RegExp.$6);return A;}},parse:function(s,filter){if(this.isValid(s)){return this._applyFilter(eval("("+s+")"),filter);}throw new SyntaxError("parseJSON");},stringify:function(C,K,F){var E=YAHOO.lang,H=E.JSON,D=H._CHARS,A=this._SPECIAL_CHARS,B=[];var I=function(N){if(!D[N]){var J=N.charCodeAt();D[N]="\\u00"+Math.floor(J/16).toString(16)+(J%16).toString(16);}return D[N];};var M=function(J){return'"'+J.replace(A,I)+'"';};var L=H.dateToString;var G=function(J,T,R){var W=typeof J,P,Q,O,N,U,V,S;if(W==="string"){return M(J);}if(W==="boolean"||J instanceof Boolean){return String(J);}if(W==="number"||J instanceof Number){return isFinite(J)?String(J):"null";}if(J instanceof Date){return L(J);}if(E.isArray(J)){for(P=B.length-1;P>=0;--P){if(B[P]===J){return"null";}}B[B.length]=J;S=[];if(R>0){for(P=J.length-1;P>=0;--P){S[P]=G(J[P],T,R-1)||"null";}}B.pop();return"["+S.join(",")+"]";}if(W==="object"){if(!J){return"null";}for(P=B.length-1;P>=0;--P){if(B[P]===J){return"null";}}B[B.length]=J;S=[];if(R>0){if(T){for(P=0,O=0,Q=T.length;P<Q;++P){if(typeof T[P]==="string"){U=G(J[T[P]],T,R-1);if(U){S[O++]=M(T[P])+":"+U;}}}}else{O=0;for(N in J){if(typeof N==="string"&&E.hasOwnProperty(J,N)){U=G(J[N],T,R-1);if(U){S[O++]=M(N)+":"+U;}}}}}B.pop();return"{"+S.join(",")+"}";}return undefined;};F=F>=0?F:1/0;return G(C,K,F);}};YAHOO.register("json",YAHOO.lang.JSON,{version:"2.5.2",build:"1076"});

/*
 * MindTouch DekiWiki - a commercial grade open source wiki
 *  derived from MediaWiki (www.mediawiki.org)
 * Copyright (C) 2006 MindTouch, Inc.
 * www.mindtouch.com  oss@mindtouch.com
 *
 * For community documentation and downloads visit www.opengarden.org;
 *  please review the licensing section.
 *
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 2 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License along
 * with this program; if not, write to the Free Software Foundation, Inc.,
 * 59 Temple Place - Suite 330, Boston, MA 02111-1307, USA.
 * http://www.gnu.org/copyleft/gpl.html
 
 */

 //node is the current checkbox
 function select_checkboxes(node) {
	 //select all checkboxes that is in the same form as this checkbox
	 var boxes = DekiWiki.$("input[@type='checkbox']", DekiWiki.$(node).parents('form'));
	 return node.checked ? boxes.check(): boxes.uncheck();
 }
         
 // make the specified div a windowed control in IE6
 // this masks an iframe (which is a windowed control) onto the div,
 // turning the div into a windowed control itself
 function makeWindowed(p_div)
 {
    var is_ie6 =
       document.all && 
       (navigator.userAgent.toLowerCase().indexOf("msie 6.") != -1);
    if (is_ie6)
    {
       var html =
          "<iframe style=\"position: absolute; display: block; " +
          "z-index: -1; width: 100%; height: 100%; top: 0; left: 0;" +
          "filter: mask(); background-color: #ffff00; \"></iframe>";
       if (p_div) p_div.innerHTML += html;
       // force refresh of div
       var olddisplay = p_div.style.display;
       p_div.style.display = 'none';
       p_div.style.display = olddisplay;
    };
 }
 
var saveFlag = false;

var MTPageLoad = function() {};
MTPageLoad.HookEditSectionIcons = function() {
	DekiWiki.$("h2.editable,h3.editable,h4.editable,h5.editable,h6.editable", DekiWiki.$("#pageText"))
		.wrapInner("<span></span>")
		.append('<div class="editIcon">'
			+'<a href="#" onclick="return editSection(this);" onmouseover="showEditArea(this);" onmouseout="hideEditArea(this);" title="'
			+wfMsg('wikibits-edit-section')+'"><span class="icon"><img src="'+_path_icons+'/icon-trans.gif" class="sectionedit" alt="'+wfMsg('wikibits-edit-section')+'"/></span></a></div>'
		);

	HookSectionEditBehavior(); 
};
var HookSectionEditBehavior = function() {
	DekiWiki.$("h2.editable,h3.editable,h4.editable,h5.editable,h6.editable", DekiWiki.$("#pageText"))
		.hover(
			function() { DekiWiki.$("div.editIcon > a", this).get(0).style.visibility = 'visible'; },
			function() { DekiWiki.$("div.editIcon > a", this).get(0).style.visibility = 'hidden'; }
		);
};

function BrowserVersion(){
    BrowserVersion.minInternetExplorerVersion = 6.0;
    BrowserVersion.minFirefoxVersion = 1.5;
    BrowserVersion.minCaminoVersion = "1.0";
    BrowserVersion.minFlockVersion = "0.5";
    
    this.isIE = false;
    this.isFF = false;
	this.isMozilla = false;
    this.isNS = true;
    this.isCamino = false;
    this.isSafari = false;
    this.isFlock = false;
    this.version = null;
    this.isSupported = true;
    
    var browserApp = navigator.userAgent;
    var s = "MSIE";
    var i;
    if((i = browserApp.indexOf(s)) >= 0){
        this.isIE = true;
        this.isNS = false;
        this.version = parseFloat(browserApp.substr(i+s.length));
        if(this.version < BrowserVersion.minInternetExplorerVersion){
            this.isSupported = false;
        }
        return;
    }
    s = "Firefox/";
    if((i = browserApp.indexOf(s)) >= 0){
        this.isFF = true;
        this.version = parseFloat(browserApp.substr(i+s.length));
        if(this.version < BrowserVersion.minFirefoxVersion){
            this.isSupported = false;
        }
        return;
    }
	s = "SeaMonkey/";
    if((i = browserApp.indexOf(s)) >= 0){
        this.isMozilla = true;
        this.isSupported = true;
        return;
    }
    s = "Safari/";
    if((i = browserApp.indexOf(s)) >= 0){
        this.isSafari = true;
        this.isSupported = true;
        return;
    }
    s = "Camino/";
    if((i = browserApp.indexOf(s)) >= 0){
        this.isCamino = true;
        this.version = browserApp.substr(i+s.length);
        if(this.version < BrowserVersion.minCaminoVersion){
            this.isSupported = false;
        }
        return;
    }
    s = "Flock/";
    if((i = browserApp.indexOf(s)) >= 0){
        this.isFlock = true;
        this.version = browserApp.substr(i+s.length);
        if(this.version >= BrowserVersion.minFlockVersion){
            this.isSupported = true;
        }
        return;
    }
    s = "Netscape6/";
    if((i = browserApp.indexOf(s)) >= 0){
        this.isNS = true;
        this.version = parseFloat(browserApp.substr(i+s.length));
        return;
    }
    s = "Gecko";
    if((i = browserApp.indexOf(s)) >= 0){
        this.isNS = true;
        this.version = 6.1;
    }
};

function showToc(node) {
	return DWMenu.Position('menuPageContent', node, -2, 0);
}
/***
 * hooks an onclick to all links in the table of contents dropdown which closes the window
 */
function hookTOCLinks() {
	DekiWiki.$('.pageToc ol a').click(function() {	DWMenu.BodyClick(); });
};

function breadcrumbLoad(z) {
	document.getElementById('breadcrumb').innerHTML = z;
};

function array_search(needle, haystack) {
	for (var i = 0; i < haystack.length; i++ ) {
		if (haystack[i] == needle)
			return i;	
	}	
	return false;
};

// in [-]HH:MM format...
// won't yet work with non-even tzs
function fetchTimezone() {
	// FIXME: work around Safari bug
	var localclock = new Date();
	// returns negative offset from GMT in minutes
	var tzRaw = localclock.getTimezoneOffset();
	return formatTimezone(tzRaw);
};

function formatTimezone(tzSecs) {
	var tzHour = Math.floor( Math.abs(tzSecs) / 60);
	var tzMin = Math.abs(tzSecs) % 60;
	return  ((tzSecs >= 0) ? "-" : "") + ((tzHour < 10) ? "0" : "") + tzHour +
		":" + ((tzMin < 10) ? "0" : "") + tzMin;
};

function openWindow(href,menu) {
	window.open(href, 'popupwindow', 'width='+(winX - 100)+',height='+(winY - 100)+',scrollbars,resizable' + (menu ? ',menubar=yes' : ''));
	return false;
};

// StepanR: Functions store and check attachments view mode,
// that is if revisions are shown or not
var gAttachments = new Array();
function SwitchShowMode(aId, aShowRevisions) {
    gAttachments[aId] = aShowRevisions;
}
function isShowRevisionsEnabled(aId)
{
    if (gAttachments[aId] != undefined) {
        return gAttachments[aId];
    }
    return 'false';
}

function toggleAttachments(fileId) {
	DekiWiki.$('#showlink-'+fileId).toggle();
	DekiWiki.$('#hidelink-'+fileId).toggle();
	DekiWiki.$('#attachTable tr.attach_'+fileId).toggle();
	return false;
};

function toggleChangesTable(divid) {
	DekiWiki.$('#showlink-'+divid).toggle();
	DekiWiki.$('#hidelink-'+divid).toggle();
	DekiWiki.$('table tr.'+divid).toggle();
    return false;
};

/* blank function for sajax callback */
function cb_blank() {};

function selectSkin(node) {
	var divs = DekiWiki.$('#styleSelections').find('input').get();
	var activeSkin = false;
	for ( var i = 0; i < divs.length; i++ ) {
		if (divs[i].name == 'wgActiveSkin') {
			divs[i].disabled = true;
		}
	}
	var child = DekiWiki.$('#skinStyle'+node.id).find('input').get();	
	for ( var i = 0; i < child.length; i++ ) {
		if (child[i].name == 'wgActiveSkin') {
			child[i].disabled = false;
			activeSkin = child[i].checked == true;
		}
	}
	if (!activeSkin) {
		child[0].checked = true;
	}
	showPreview();
};
function showPreview() {	
	var child = DekiWiki.$('#styleSelections').find('input').get();	
	for ( var i = 0; i < child.length; i++ ) {
		if (child[i].checked == true) {
			if (child[i].name == 'wgActiveTemplate') {
				var wgActiveTemplate = child[i].value;
			}
			else if (child[i].name == 'wgActiveSkin') {
				var wgActiveSkin = child[i].value;
			}
		}
	}
	DekiWiki.$('#previewSkin').html('<img src="/skins/'+wgActiveTemplate+'/'+wgActiveSkin+'/screenshot.png" alt="Skin Preview" />');
};


/*
 * MindTouch DekiWiki - a commercial grade open source wiki
 *  derived from MediaWiki (www.mediawiki.org)
 * Copyright (C) 2006 MindTouch, Inc.
 * www.mindtouch.com  oss@mindtouch.com
 *
 * For community documentation and downloads visit www.opengarden.org;
 *  please review the licensing section.
 *
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 2 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License along
 * with this program; if not, write to the Free Software Foundation, Inc.,
 * 59 Temple Place - Suite 330, Boston, MA 02111-1307, USA.
 * http://www.gnu.org/copyleft/gpl.html
 */
 
function DWMenu() {};
DWMenu.Bubble = false;
DWMenu.Opened = false;
DWMenu.OpenedNow = false;
DWMenu.Selected = false;

DWMenu.LinkClick = function(divid, xoffset) {
	if (DWMenu.Opened && DWMenu.Opened != divid) 
		DWMenu.Toggle(DWMenu.Opened, xoffset);
	DWMenu.Toggle(divid, xoffset);
};

DWMenu.Toggle = function(divid, xoffset) {
	var node = DekiWiki.$('#'+divid);
	//todo nullref
	var display = node.css('display');
	node.toggle();
	if (display == 'block') {
		DWMenu.Opened = false;
	}
	else {
		node.css('visibility', 'hidden'); //for ie6
		var dimensions 	= Mindtouch.util.Dom.getDimensions(node);
		var position 	= YAHOO.util.Dom.getXY(node);
		if (typeof(winX) != 'null') {
			if ((position[0] + dimensions.width) > (winX - 36)) {
				if (typeof(offsetX) == 'undefined') offsetX = 0;
				node.css('left', (position[0] - dimensions.width + offsetX + 5)+'px');
			}
		}
		node.css('visibility', '');
		DWMenu.Opened = divid;
		DWMenu.OpenedNow = true;
	}
}

DWMenu.Position = function (divid, elt, offsetX, offsetY) {
	if (!document.getElementById(divid)) return;
	var x = YAHOO.util.Dom.getX(elt);
	var y = YAHOO.util.Dom.getY(elt);
	var dimensions = Mindtouch.util.Dom.getDimensions(elt);
	offsetY = offsetY + dimensions.height;
	
	if (typeof(offsetX) == 'number') x = x + offsetX;
	if (typeof(offsetY) == 'number') y = y + offsetY;
	DekiWiki.$("#" + divid).css("left", x+'px').css("top", y+'px');
	DWMenu.LinkClick(divid, dimensions.width);	
	return false;
};

DWMenu.Off = function(divid) {
	var display = DekiWiki.$('#'+divid).css('display');
	if (display == 'block') {
		DekiWiki.$('#'+divid).toggle();
		DWMenu.Opened = false;
	}
};

DWMenu.BodyClick = function() {
	if (!DWMenu.OpenedNow && !DWMenu.Bubble && DWMenu.Opened) {
		if (!DWMenu.Selected) {
			DWMenu.Toggle(DWMenu.Opened);
		}
	}
	if (DWMenu.Bubble)
		DWMenu.Bubble = false;	
	if (DWMenu.OpenedNow)
		DWMenu.OpenedNow = false;	
};

//deprecated
var menuLinkClick = function(divid, offsetX) {
	DWMenu.LinkClick(divid, offsetX);
};
var menuToggle = function(navid, offsetX) {
	DWMenu.Toggle(navid, offsetX);
};
var menuPosition = function (navid, elt, offsetX, offsetY) {
	return DWMenu.Position(navid, elt, offsetX, offsetY);
};
var menuOff = function(navid) {
	DWMenu.Off(navid);
};
var menuBodyClick = function() {
	DWMenu.BodyClick();
};

var FileMenu = { 
	lastOpened : null, //the last opened menu id
	isOpening : null,
	openMenu : false,
	justClosed : false,
	maxHeight: 132, //max height of the menu
	minHeight: 1, //min height of the menu; keep at least 1px for IE
	
	bodyClick : function() {
		if (this.isOpening) {
			this.isOpening = null;
			return;
		}
		if(this.lastOpened) {
			this.hide();
		}
		return false;
	},
	/*** 
	 * 
	 */
	show : function(node, titleID, attachID, isLoggedIn, showRevisions, areRevisions, reviseURL, isRestricted, inGallery, fullUrl) {

        this.menuBubble = true;
		this.isOpening = true;
		var divFiller = 'menuFiller'; //filler div for filling the menu
		var divMenu = 'npdmenu_' + titleID; //menu generated by generateMenu()
		
		if (this.lastOpened && '_' + titleID != this.lastOpened) {
			this.hide();
		}
		else if (this.lastOpened) {
			this.hide();
			this.justClosed = true;
			return false;
		}
		this.lastOpened = '_' + titleID;
		
		var eltFiller = document.getElementById(divFiller);
		eltFiller.style.position = 'absolute';
		eltFiller.style.left = (YAHOO.util.Dom.getX(node))+'px';
		eltFiller.style.top = (YAHOO.util.Dom.getY(node) + 16) + 'px';
		
		//StepanR: I need an attachment name for menu generation function, this actual only for latest revisions. Previous revs already has ids in title
	    var lAttachName = node.parentNode.parentNode.className.substr('attach_'.length);

		//for IE
		eltFiller.style.display = '';
		
		//first, generate the new menu
		eltFiller.appendChild(this.generateMenu(titleID, attachID, isLoggedIn, showRevisions, areRevisions, reviseURL, isRestricted, lAttachName, inGallery, fullUrl));
		
		//calculations need to be done when an element is visible
		eltFiller.style.display = 'block';
		
		var dimensions 		= Mindtouch.util.Dom.getDimensions(divMenu);
		var linkDimensions 	= Mindtouch.util.Dom.getDimensions(node);
		var position 		= YAHOO.util.Dom.getXY(eltFiller);
		
		if (typeof(winX) != 'null' && typeof(winY) != 'null')
		{
			var pageDimensions 	= YAHOO.util.Dom.getXY(DekiWiki.$('#bodyHeight').get(0));
			var pageHeight 		= pageDimensions[1];
			var extendsRight 	= (position[0] + dimensions.width) > (winX - 36);
			var extendsBottom 	= (position[1] + dimensions.height) > pageHeight;
			var horizOffset 	= position[0] - dimensions.width + linkDimensions.width + 5;
			
			if (extendsRight) {
				if (typeof(offsetX) == 'undefined') offsetX = 0;
				eltFiller.style.left = horizOffset+'px';
			}
			if (extendsBottom) {
				var vertOffset = position[1] - ((position[1] + dimensions.height) - pageHeight);
				eltFiller.style.top = vertOffset + 'px';
				horizOffset = position[0] + linkDimensions.width;
				eltFiller.style.left = horizOffset+'px';
			}
		}
		DekiWiki.$('#'+divMenu).toggle();
		menuLinkClick(divMenu, dimensions.width);
		
		return false;
	},
	hide: function () {
		if (this.lastOpened) {
			var eltMenu = 'npdmenu' + this.lastOpened;	
			var elt = document.getElementById(eltMenu);
			elt.parentNode.removeChild(elt);
			menuLinkClick(eltMenu);	
		}
		this.lastOpened = null;
	},
	
	generateMenu : function (titleID, attachID, isLoggedIn, showRevisions, areRevisions, reviseURL, isRestricted, lAttachName, inGallery, fullUrl) {
		function addMenuItem(icon, text, href, onclick, cssClass) {
			var item = document.createElement('li');
			var a = document.createElement('a');
			
			a.href = href;
			a.className = 'mlink'+(cssClass && cssClass != '' ? ' '+cssClass: '');
			item.className = 'mlink'+(cssClass && cssClass != '' ? ' '+cssClass: '');
			a.appendChild(iconify(icon+(cssClass && cssClass != '' ? '-'+cssClass: '')));
						
			var span = document.createElement('span');
			span.innerHTML = text;
			span.className = 'text';			
			a.appendChild(span);
			
			if (onclick && isLoggedIn)
			  a.onclick = onclick;
			item.appendChild(a);
			menuList.appendChild(item);
		};
		var divid = 'npdmenu_' + titleID;

		var divMain = document.createElement('div');
		divMain.onclick = function () {
			menuBubble = true;	
		};
		divMain.className = 'dmenu';

		var divWrap = document.createElement('div');
		divWrap.id = divid;
		divWrap.className = 'dmenu-wrap';

		var divTop = document.createElement('div');
		divTop.className = 'dmenu-top';

		var divBottom = document.createElement('div');
		divBottom.className = 'dmenu-bottom';

		var divBody = document.createElement('div');
		divBody.className = 'dmenu-body';

		var menuList = document.createElement('ul');
		
		if (inGallery) {
			addMenuItem('attachoriginal', wfMsg('menu-view-original'), fullUrl, function () {}, false);
		}
		if (isLoggedIn) {
			addMenuItem('attachedit', wfMsg('menu-edit-description'), '#', function () { 
				if (!isRestricted) {
					return doPopupEditAttach(_page_ID, attachID);
				}
			}, isRestricted ? 'disabled': false);
			addMenuItem('attachmove', wfMsg('menu-move-file'), '#', function () { 
				if (!isRestricted) {
					return doPopupMoveAttach(_page_ID, attachID, inGallery);	
				}
			}, isRestricted ? 'disabled': false);
			
			// StepanR: if file revisions are displayed, then we use ids fo deletion.
			var RevMode = isShowRevisionsEnabled(lAttachName);
			addMenuItem('attachdel', wfMsg('menu-delete-file'), '#', function() {
				if (!isRestricted) {
					if (confirm(wfMsg('menu-confirm-delete'))) {
						x_wfDeleteFile(attachID, inGallery, function(z) {
							if (inGallery) {
								Attachments.SetImageCount(Attachments.GetImageCount() - 1);	
								MTGallery.Refresh();
								Attachments.SetCount();
							}
							else {
								window.location.reload();
							}
						});
					}
					return false;
				}
			}, isRestricted ? 'disabled': false);
		}
		else {
			addMenuItem('attachedit', wfMsg('menu-edit-description'), '#', function () { return false; }, 'disabled');
			addMenuItem('attachmove', wfMsg('menu-move-file'), '#', function () { return false; }, 'disabled');
			addMenuItem('attachdel', wfMsg('menu-delete-file'), '#', function() { return false; }, 'disabled');
		}
		if (showRevisions) {
			if (areRevisions) {
				addMenuItem('attachhist', wfMsg('menu-previous-versions'), reviseURL, false, false);
			}
			else {
				addMenuItem('attachhist', wfMsg('menu-previous-versions'), '#', function () { return false;}, 'disabled');
			}
		}
		divBody.appendChild(menuList);

		divWrap.appendChild(divTop);
		divWrap.appendChild(divBody);
		divWrap.appendChild(divBottom);

		divMain.appendChild(divWrap);
		
		return divMain;
	}
};


var hexcase=0;
var b64pad="";
var chrsz=8;
function hex_md5(s){
return binl2hex(core_md5(str2binl(s),s.length*chrsz));
}
function b64_md5(s){
return binl2b64(core_md5(str2binl(s),s.length*chrsz));
}
function str_md5(s){
return binl2str(core_md5(str2binl(s),s.length*chrsz));
}
function hex_hmac_md5(_4,_5){
return binl2hex(core_hmac_md5(_4,_5));
}
function b64_hmac_md5(_6,_7){
return binl2b64(core_hmac_md5(_6,_7));
}
function str_hmac_md5(_8,_9){
return binl2str(core_hmac_md5(_8,_9));
}
function core_md5(x,_b){
x[_b>>5]|=128<<((_b)%32);
x[(((_b+64)>>>9)<<4)+14]=_b;
var a=1732584193;
var b=-271733879;
var c=-1732584194;
var d=271733878;
for(var i=0;i<x.length;i+=16){
var _11=a;
var _12=b;
var _13=c;
var _14=d;
a=md5_ff(a,b,c,d,x[i+0],7,-680876936);
d=md5_ff(d,a,b,c,x[i+1],12,-389564586);
c=md5_ff(c,d,a,b,x[i+2],17,606105819);
b=md5_ff(b,c,d,a,x[i+3],22,-1044525330);
a=md5_ff(a,b,c,d,x[i+4],7,-176418897);
d=md5_ff(d,a,b,c,x[i+5],12,1200080426);
c=md5_ff(c,d,a,b,x[i+6],17,-1473231341);
b=md5_ff(b,c,d,a,x[i+7],22,-45705983);
a=md5_ff(a,b,c,d,x[i+8],7,1770035416);
d=md5_ff(d,a,b,c,x[i+9],12,-1958414417);
c=md5_ff(c,d,a,b,x[i+10],17,-42063);
b=md5_ff(b,c,d,a,x[i+11],22,-1990404162);
a=md5_ff(a,b,c,d,x[i+12],7,1804603682);
d=md5_ff(d,a,b,c,x[i+13],12,-40341101);
c=md5_ff(c,d,a,b,x[i+14],17,-1502002290);
b=md5_ff(b,c,d,a,x[i+15],22,1236535329);
a=md5_gg(a,b,c,d,x[i+1],5,-165796510);
d=md5_gg(d,a,b,c,x[i+6],9,-1069501632);
c=md5_gg(c,d,a,b,x[i+11],14,643717713);
b=md5_gg(b,c,d,a,x[i+0],20,-373897302);
a=md5_gg(a,b,c,d,x[i+5],5,-701558691);
d=md5_gg(d,a,b,c,x[i+10],9,38016083);
c=md5_gg(c,d,a,b,x[i+15],14,-660478335);
b=md5_gg(b,c,d,a,x[i+4],20,-405537848);
a=md5_gg(a,b,c,d,x[i+9],5,568446438);
d=md5_gg(d,a,b,c,x[i+14],9,-1019803690);
c=md5_gg(c,d,a,b,x[i+3],14,-187363961);
b=md5_gg(b,c,d,a,x[i+8],20,1163531501);
a=md5_gg(a,b,c,d,x[i+13],5,-1444681467);
d=md5_gg(d,a,b,c,x[i+2],9,-51403784);
c=md5_gg(c,d,a,b,x[i+7],14,1735328473);
b=md5_gg(b,c,d,a,x[i+12],20,-1926607734);
a=md5_hh(a,b,c,d,x[i+5],4,-378558);
d=md5_hh(d,a,b,c,x[i+8],11,-2022574463);
c=md5_hh(c,d,a,b,x[i+11],16,1839030562);
b=md5_hh(b,c,d,a,x[i+14],23,-35309556);
a=md5_hh(a,b,c,d,x[i+1],4,-1530992060);
d=md5_hh(d,a,b,c,x[i+4],11,1272893353);
c=md5_hh(c,d,a,b,x[i+7],16,-155497632);
b=md5_hh(b,c,d,a,x[i+10],23,-1094730640);
a=md5_hh(a,b,c,d,x[i+13],4,681279174);
d=md5_hh(d,a,b,c,x[i+0],11,-358537222);
c=md5_hh(c,d,a,b,x[i+3],16,-722521979);
b=md5_hh(b,c,d,a,x[i+6],23,76029189);
a=md5_hh(a,b,c,d,x[i+9],4,-640364487);
d=md5_hh(d,a,b,c,x[i+12],11,-421815835);
c=md5_hh(c,d,a,b,x[i+15],16,530742520);
b=md5_hh(b,c,d,a,x[i+2],23,-995338651);
a=md5_ii(a,b,c,d,x[i+0],6,-198630844);
d=md5_ii(d,a,b,c,x[i+7],10,1126891415);
c=md5_ii(c,d,a,b,x[i+14],15,-1416354905);
b=md5_ii(b,c,d,a,x[i+5],21,-57434055);
a=md5_ii(a,b,c,d,x[i+12],6,1700485571);
d=md5_ii(d,a,b,c,x[i+3],10,-1894986606);
c=md5_ii(c,d,a,b,x[i+10],15,-1051523);
b=md5_ii(b,c,d,a,x[i+1],21,-2054922799);
a=md5_ii(a,b,c,d,x[i+8],6,1873313359);
d=md5_ii(d,a,b,c,x[i+15],10,-30611744);
c=md5_ii(c,d,a,b,x[i+6],15,-1560198380);
b=md5_ii(b,c,d,a,x[i+13],21,1309151649);
a=md5_ii(a,b,c,d,x[i+4],6,-145523070);
d=md5_ii(d,a,b,c,x[i+11],10,-1120210379);
c=md5_ii(c,d,a,b,x[i+2],15,718787259);
b=md5_ii(b,c,d,a,x[i+9],21,-343485551);
a=safe_add(a,_11);
b=safe_add(b,_12);
c=safe_add(c,_13);
d=safe_add(d,_14);
}
return Array(a,b,c,d);
}
function md5_cmn(q,a,b,x,s,t){
return safe_add(bit_rol(safe_add(safe_add(a,q),safe_add(x,t)),s),b);
}
function md5_ff(a,b,c,d,x,s,t){
return md5_cmn((b&c)|((~b)&d),a,b,x,s,t);
}
function md5_gg(a,b,c,d,x,s,t){
return md5_cmn((b&d)|(c&(~d)),a,b,x,s,t);
}
function md5_hh(a,b,c,d,x,s,t){
return md5_cmn(b^c^d,a,b,x,s,t);
}
function md5_ii(a,b,c,d,x,s,t){
return md5_cmn(c^(b|(~d)),a,b,x,s,t);
}
function core_hmac_md5(key,_38){
var _39=str2binl(key);
if(_39.length>16){
_39=core_md5(_39,key.length*chrsz);
}
var _3a=Array(16),opad=Array(16);
for(var i=0;i<16;i++){
_3a[i]=_39[i]^909522486;
opad[i]=_39[i]^1549556828;
}
var _3c=core_md5(_3a.concat(str2binl(_38)),512+_38.length*chrsz);
return core_md5(opad.concat(_3c),512+128);
}
function safe_add(x,y){
var lsw=(x&65535)+(y&65535);
var msw=(x>>16)+(y>>16)+(lsw>>16);
return (msw<<16)|(lsw&65535);
}
function bit_rol(num,cnt){
return (num<<cnt)|(num>>>(32-cnt));
}
function str2binl(str){
var bin=Array();
var _45=(1<<chrsz)-1;
for(var i=0;i<str.length*chrsz;i+=chrsz){
bin[i>>5]|=(str.charCodeAt(i/chrsz)&_45)<<(i%32);
}
return bin;
}
function binl2str(bin){
var str="";
var _49=(1<<chrsz)-1;
for(var i=0;i<bin.length*32;i+=chrsz){
str+=String.fromCharCode((bin[i>>5]>>>(i%32))&_49);
}
return str;
}
function binl2hex(_4b){
var _4c=hexcase?"0123456789ABCDEF":"0123456789abcdef";
var str="";
for(var i=0;i<_4b.length*4;i++){
str+=_4c.charAt((_4b[i>>2]>>((i%4)*8+4))&15)+_4c.charAt((_4b[i>>2]>>((i%4)*8))&15);
}
return str;
}
function binl2b64(_4f){
var tab="ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789+/";
var str="";
for(var i=0;i<_4f.length*4;i+=3){
var _53=(((_4f[i>>2]>>8*(i%4))&255)<<16)|(((_4f[i+1>>2]>>8*((i+1)%4))&255)<<8)|((_4f[i+2>>2]>>8*((i+2)%4))&255);
for(var j=0;j<4;j++){
if(i*8+j*6>_4f.length*32){
str+=b64pad;
}else{
str+=tab.charAt((_53>>6*(3-j))&63);
}
}
}
return str;
}



/*
 * MindTouch DekiWiki - a commercial grade open source wiki
 *  derived from MediaWiki (www.mediawiki.org)
 * Copyright (C) 2006 MindTouch, Inc.
 * www.mindtouch.com  oss@mindtouch.com
 *
 * For community documentation and downloads visit www.opengarden.org;
 *  please review the licensing section.
 *
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 2 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License along
 * with this program; if not, write to the Free Software Foundation, Inc.,
 * 59 Temple Place - Suite 330, Boston, MA 02111-1307, USA.
 * http://www.gnu.org/copyleft/gpl.html
 */

var Print = { 
	open : function(href, menu) {
		window.open(href, 'popupwindow', 'width='+600+',height='+winY+'' + (menu ? ',menubar=yes' : '')+',resizable=yes,scrollbars=yes');
		return false;
	}, 
	doPrint : function () {
		window.print();
		// the first time you print in firefox (or mozilla), immediately executing parent.close() will 
		// result in the page just closing with no print; oddly, if you open the print dialogue again, 
		// the document will print then close the window correctly
		// setting a timeout on the close allows the browser to popup the "print" dialogue before parent.close()
		//window.setTimeout("Print.doClose()", 2000);
	},
	doClose : function () {
		window.close();	
	},
	createEndnotes : function () {
		var elt = document.getElementById('pageText');
		var endnotes = '';
		var j = 0;
		var Browser = new BrowserVersion();
		var links = elt.getElementsByTagName('a');
		for (i = 0; i < links.length; i++ ) {
			if (links[i].getAttribute('href')) {
				if (Browser.isIE && Browser.version < 7) {
					if (links[i].innerHTML == '&nbsp;') {
						continue;
					}
				}
				j++;
				var sup = document.createElement('sup');
				sup.className = 'endnotes';
				sup.innerHTML = j;
				links[i].appendChild(sup);
				endnotes += '<sup>'+(j)+'</sup> '+links[i].getAttribute('href')+'<br/>';
			}
		}	
		var div = document.createElement('div');
		div.setAttribute('id', 'endnotes');
		div.setAttribute('class', 'print-toc');
		elt.appendChild(div);
		div.innerHTML = '<h5>'+wfMsg('print-end-notes')+'</h5><div><small>'+endnotes+'</small></div>';
	},
	changeEndnotesDisplay : function () {
		var displayType = document.getElementById('printOptLinks').checked;
		var endnotes = document.getElementsByTagName('sup');
		for (i = 0; i < endnotes.length; i++ ) {
			if (endnotes[i].className == 'endnotes')
				endnotes[i].style.display = displayType ? 'inline': 'none';
		}
		var endnotesBody = document.getElementById('endnotes');
		if (endnotesBody)
			endnotesBody.style.display = displayType ? 'block' : 'none';
	}, 
	changeFooterDisplay : function () {
		if (document.getElementById('printOptFooter').checked)
			DekiWiki.$("#printfooter").css("display", "block");
		else 
			DekiWiki.$("#printfooter").css("display", "none");
	},
	changeTocDisplay : function () {
		if (document.getElementById('printOptToc').checked)
			DekiWiki.$("#pageToc").css("display", "block");
		else 
			DekiWiki.$("#pageToc").css("display", "none");
	},
	onBodyLoad : function () {
	    Print.createEndnotes();
	    Print.changeEndnotesDisplay();
	    Print.changeTocDisplay();
	    Print.changeFooterDisplay();	    
	}, 
	showPreferences: function(node) {
		var prefsnode = document.getElementById('printPrefs');
		if (!prefsnode) return;
		if (prefsnode.style.display == 'none') {
			DekiWiki.$("#pageContent").addClass("prefsToggledOn");
			prefsnode.style.display = 'block';
			node.className = 'showPrintPrefs';
		}
		else {
			DekiWiki.$("#pageContent").removeClass("prefsToggledOn");
			prefsnode.style.display = 'none';
			node.className = 'hidePrintPrefs';
		}
		
	},
	toggleEndnotes : function() {
		Print.changeEndnotesDisplay();
		x_wfSetUserOption('printlinks', document.getElementById('printOptLinks').checked ? '1': 'null', function(returned) {});
	},
	toggleFooter : function() {
		Print.changeFooterDisplay();
		x_wfSetUserOption('printfooter', document.getElementById('printOptFooter').checked ? '1': 'null', function(returned) {});
	}, 
	toggleToc : function() {
		Print.changeTocDisplay();
		x_wfSetUserOption('printtoc', document.getElementById('printOptToc').checked ? '1': 'null', function(returned) {});
	}
};

function saveToPDF (page) {
	window.location = page;
}


function MTGallery() {};
MTGallery.Offset = 0;
MTGallery.PageID = 0;
MTGallery.SortBy = _gallery_sort;
MTGallery.FileID = 0;

MTGallery.Next = function() {
	MTGallery.Offset = MTGallery.Offset + _total_images;
	return MTGallery.Show();
};

MTGallery.Back = function() {
	MTGallery.Offset = MTGallery.Offset - _total_images;
	return MTGallery.Show();
};
MTGallery.Refresh = function() {
	return MTGallery.Show();
};
MTGallery.ShowAll = function(showingRevisions) {
	MTGallery.Offset = -1;
	if (showingRevisions) {
		MTGallery.FileID = 0;
	}
	return MTGallery.Show();
};
MTGallery.ShowRevisions = function(FileID) {	
	MTGallery.Offset = -1;
	MTGallery.SortBy = 'date-desc';
	MTGallery.FileID = FileID;
	MTGallery.Show();
	MTGallery.FileID = 0;
	return false;
};
MTGallery.Sort = function(node) {	
	MTGallery.SortBy = node.value;
	return MTGallery.Show();
};
MTGallery.Show = function() {
	if (MTGallery.PageID == 0) {
		MTGallery.PageID = _page_ID;
	}
	x_wfInlineImageGallery(MTGallery.PageID, MTGallery.Offset, MTGallery.SortBy, MTGallery.FileID, function(z) {
		if (!DekiWiki.$('#pageGallery').get(0)) return;
		DekiWiki.$('#pageGallery').html(z);
		MTGallery.ReloadViewHooks();
	});
	return false;
};

MTGallery.ReloadViewHooks = function() {
	tb_init('#pageGallery a.lightbox');//pass where to apply thickbox
	imgLoader = new Image();// preload image
	imgLoader.src = tb_pathToImage;
}

/***
 * MindTouch Messaging
 * Outputs success/error messages that autoclose
 */
var MTMessage = function () {};

MTMessage.Active = false;
MTMessage.DefaultTimerValue = 6;
MTMessage.TimeValue = MTMessage.DefaultTimerValue;
MTMessage.Timer = false;

MTMessage.Show = function(headerText, bodyText, msgType, detailsArray) {
	if (MTMessage.Active) 
		return;
	
	if (typeof(msgType) == 'undefined')
		msgType = 'ui-errormsg';
	MTMessage.Active = true;
	MTMessage.SetHeader(headerText);
	MTMessage.SetBody(bodyText);
	if (typeof(detailsArray) == 'undefined'  || detailsArray == '') {
		document.getElementById('MTMessageDetailsLink').style.display = 'none';
	}
	else {
		MTMessage.SetDetails(detailsArray);
	}
	
	var node = document.getElementById('MTMessage');
	document.getElementById('MTMessageStyle').className = 'ui-msg '+msgType;
	document.getElementById('MTMessage').style.display = 'block';
	YAHOO.util.Dom.setStyle('MTMessage', 'opacity', 1);
	document.getElementById('MTMessageUnpaused').style.display = 'inline';
	document.getElementById('MTMessagePaused').style.display = 'none';
	document.getElementById('MTMessage').onmouseover = function() {
		if (MTMessage.Timer) 
			MTMessage.PauseTimer();
	};
	MTMessage.GoTimer();
	return false;
};
MTMessage.Hide = function() {
	MTMessage.TimeValue = MTMessage.DefaultTimerValue;
	if (Browser.isIE && Browser.version < 7) {
		document.getElementById('MTMessage').style.display = 'none'; 
 		MTMessage.Active = false;
 		return false;
	}
	var anim = new YAHOO.util.Anim('MTMessage', { opacity: { to: 0 } }, 1, YAHOO.util.Easing.easeOut);
	anim.onComplete.subscribe(function () { 
		document.getElementById('MTMessage').style.display = 'none'; 
		MTMessage.Active = false;
	});	
	anim.animate();
	return false;
};
MTMessage.PauseTimer = function() {
	MTMessage.Timer = false;
	document.getElementById('MTMessageUnpaused').style.display = 'none';
	document.getElementById('MTMessagePaused').style.display = 'inline';
};
MTMessage.UnPauseTimer = function() {
	document.getElementById('MTMessageUnpaused').style.display = 'inline';
	document.getElementById('MTMessagePaused').style.display = 'none';
	MTMessage.GoTimer();
};
MTMessage.GoTimer = function() {
	MTMessage.Timer = true;
	MTMessage.TimeValue = MTMessage.DefaultTimerValue;
	MTMessage.TimerValue(MTMessage.TimeValue);
};
MTMessage.TimerValue = function() {
	if (!MTMessage.Timer)
		return;
	MTMessage.TimeValue = MTMessage.TimeValue - 1;
	document.getElementById('MTMessageTimer').innerHTML = MTMessage.TimeValue+' ';
	if ((MTMessage.TimeValue) < 1) {
		MTMessage.Hide();
	}
	else {
		setTimeout("MTMessage.TimerValue("+(MTMessage.TimeValue)+")", 1000);
	}
};
MTMessage.SetHeader = function(val) {
	document.getElementById('MTMessageHeader').innerHTML = val;
};
MTMessage.SetBody = function(val) {
	document.getElementById('MTMessageDesc').innerHTML = val;
};
MTMessage.ShowDetails = function(anode) {
	document.getElementById('MTMessageDetails').style.display = 'block';
	document.getElementById('MTMessageTextarea').select();
	anode.parentNode.innerHTML = anode.innerHTML; //remove link
};
MTMessage.SetDetails = function(val) {
    
    var node, container;
    
    container = document.getElementById('MTMessageDetails');    
    
    node = document.getElementById('MTMessageTextarea');
    
    // remove the previous message's details    
    if ( node )
    {
        container.removeChild(node);
    }
    
	node = document.createElement('textarea');
	node.id = 'MTMessageTextarea';
	node.className = 'ui-msgtextarea';
	node.setAttribute('readonly', 'true');
	node.value = eval(val);
	container.appendChild(node);
};

String.prototype.utf8ToCodepoint = function() {
  var z = this.charCodeAt(0), length;
  if (z & 0x80) {
    length = 0;
    while (z & 0x80) {
      length++;
      z <<= 1;
    }
  } else
    length = 1;

  if (length != this.length) return false;
  if (length == 1) return z;

  // Mask off the length-determining bits and shift back to the original location
  z &= 0xff;
  z >>= length;

  // Add in the free bits from subsequent bytes
  for ( var i=1; i < length; i++ ) {
    z <<= 6;
    z |= this.charCodeAt(i) & 0x3f;
  }
  return z;
};

String.prototype.utf8ToString = function() {
  var val = this.replace(/[\xc0-\xfd][\x80-\xbf]*/g, function(s) {
    return String.fromCharCode(s.utf8ToCodepoint());
  });;
  return val;
};

String.prototype.utf8URL = function() {
  var val = this.replace(/[ \?%\+&=#\.\u0080-\uFFFF]/g, function(s) {
    switch (s) {
    case ' ': return '_';
//    case ' ': return '%20';
    case '+': return '%2B';
    default:
      return escape(String.charToUtf8(s.charCodeAt(0)));
    }
  });
  return val;
};

String.prototype.utf8 = function() {
  var val = this.replace(/[\u0080-\uFFFF]/g, function(s) {
    return String.charToUtf8(s.charCodeAt(0));
  });
  return val;
};

String.charToUtf8 = function(codepoint) {
  if(codepoint < 0x80) return String.fromCharCode(codepoint);
  if(codepoint < 0x800) return String.fromCharCode(
    codepoint >> 6 & 0x3f | 0xc0,
    codepoint & 0x3f | 0x80);
  if(codepoint < 0x10000) return String.fromCharCode(
    codepoint >> 12 & 0x0f | 0xe0,
    codepoint >> 6 & 0x3f | 0x80,
    codepoint & 0x3f | 0x80);
  if(codepoint < 0x110000) return String.fromCharCode(
    codepoint >> 18 & 0x07 | 0xf0,
    codepoint >> 12 & 0x3f | 0x80,
    codepoint >> 6 & 0x3f | 0x80,
    codepoint & 0x3f | 0x80);

  // There should be no assigned code points outside this range, but
  return String.fromCharCode(codepoint);
};

var winX = null;
var winY = null;

clientWindow = function () {
	if (self.innerHeight) {
		winX = self.innerWidth;
		winY = self.innerHeight;
	}
	else if (document.documentElement && document.documentElement.clientHeight)	{
		winX = document.documentElement.clientWidth;
		winY = document.documentElement.clientHeight;
	}
	else if (document.body) {
		winX = document.body.clientWidth;
		winY = document.body.clientHeight;
	}
};

function mt_gen() {

}

/***
 * takes a string and escapes single quotes and encodes html
 */
mt_gen.htmlspecialchars = function(str) {
	// performs HTML encoding of some given string
	mt_gen.htmlEncode_regEx = [
		new RegExp().compile(/&/ig),
		new RegExp().compile(/</ig),
		new RegExp().compile(/>/ig),
		new RegExp().compile(/'/ig),
		new RegExp().compile(/\xA0/g),
	    // \x22 means '"' -- we use hex reprezentation so that we don't disturb
	    // JS compressors (well, at least mine fails.. ;)
		new RegExp().compile(/\x22/g),
		// special encode none-ASCII
		new RegExp().compile(/[\x80-\xFF]/g)
	];
	mt_gen.htmlEncode_regExR = [
		"&amp;",
		"&lt;",
		"&gt;",
		"\\'",
		"&nbsp;",
		"&quot;",
		function(s,b){return "&#"+s.charCodeAt(0)+";";}
	];

    if(typeof str.replace == 'undefined') str = str.toString();
    for (var i = 0; i < mt_gen.htmlEncode_regEx.length; ++i)
    	str = str.replace(mt_gen.htmlEncode_regEx[i], mt_gen.htmlEncode_regExR[i]);
    return str;
};

mt_gen.getUrlFromName = function(href) {
	href = mt_gen.extractName(href).replace(/ /g,'_');
    if (href.indexOf('&') > 0 || href.indexOf('?') > 0 || href.indexOf('+') > 0 || href.indexOf('#') > 0 ||
        href.indexOf('\\') > 0 || href.indexOf('//') > 0 || href.indexOf('%') > 0
    )
        href = 'index.php?title=' + encodeURIComponent(href);
    return '/' + href;
};

mt_gen.extractName = function(href) {
    if (href.charAt(0) == '/') href = href.substr(1);
    if (href.indexOf('index.php?title=') == 0)
        href = href.substr('index.php?title='.length);
    href = href.replace(/&action=.+$/i, '');
    try { href = unescape(href); } catch (e) {}
    return href;
};

function iconify(icon_class, parentClass) {
	if (!parentClass) parentClass = 'icon';
	var span = document.createElement('span');
	span.className = parentClass;
	var img = document.createElement('img');
	img.src = '/skins/common/icons/icon-trans.gif';
	if (typeof(icon_class) != 'undefined' && icon_class != '') {
		img.className = icon_class;
	}
	span.appendChild(img);
	return span;
};

//returns an XML document
function encode_xml(data, outer) {
	var result = '';
	if (typeof(data) == 'object') {
		for (key in data) {
			var value = data[key];
			if (strncmp(value,'@',1) == 0) {
			} else {
				var tag = outer != null ? outer: key;
				if (is_numeric_array(value)) {
					result += encode_xml(value, key);
				} else if (typeof(value) == 'object') {
					var attrs = '';
					for (attr_key in value) {
						var attr_value = value[attr_key];
						if(strncmp(attr_key, '@', 1) == 0) {
							attrs += ' '+attr_key.substr(0, 1)+ '="'+mt_gen.htmlspecialchars(attr_value)+'"';
						}
					}
					result += '<' + tag + attrs + '>' + encode_xml(value) + '</' + tag + '>'+"\n";
				} else if (tag != '#text') {
					result += '<' + tag + '>' + encode_xml(value) + '</' + tag + '>';
				} else {
					result += mt_gen.htmlspecialchars(value);
				}
			}
		}
	} else if (typeof(data) == 'string') {
		result = mt_gen.htmlspecialchars(data);
	} else {
		result = data;
	}
	return result;
}
function strncmp(str1, str2, len) {
	if (typeof(str1) != 'string' || typeof(str2) != 'string') {
		return 1;
	}
	return str1.substr(0, len) == str2 ? 0: 1; //not exactly like PHP implementation, but returns 0 if true
}
function is_numeric_array(data) {
	var construct = data.constructor;
	return construct == Array;
}


if (typeof DekiWiki == "undefined") {
	var DekiWiki = {};
}

DekiWiki.url = {};
DekiWiki.url.encode = function(plaintext)
{
	// The Javascript escape and unescape functions do not correspond
	// with what browsers actually do...
	var SAFECHARS = "0123456789" +					// Numeric
					"ABCDEFGHIJKLMNOPQRSTUVWXYZ" +	// Alphabetic
					"abcdefghijklmnopqrstuvwxyz" +
					"-_.!~*'()";					// RFC2396 Mark characters
	var HEX = "0123456789ABCDEF";

	var encoded = "";
	for (var i = 0; i < plaintext.length; i++ ) {
		var ch = plaintext.charAt(i);
	    if (ch == " ") {
		    encoded += "+";				// x-www-urlencoded, rather than %20
		} else if (SAFECHARS.indexOf(ch) != -1) {
		    encoded += ch;
		} else {
		    var charCode = ch.charCodeAt(0);
			if (charCode > 255) {
				encoded += "+";
			} else {
				encoded += "%";
				encoded += HEX.charAt((charCode >> 4) & 0xF);
				encoded += HEX.charAt(charCode & 0xF);
			}
		}
	} // for

	return encoded;
}

DekiWiki.util = {};
DekiWiki.util.Dom = {};
DekiWiki.util.Dom.getDimensions = function(element) {
	var region 	= YAHOO.util.Dom.getRegion(element);
	var width 	= region.right - region.left;
	var height 	= region.bottom - region.top;
	return {"width": width, "height": height};
}
DekiWiki.util.Dom.getText = function(node) {
	if(typeof(node.innerText) != 'undefined') {
		return node.innerText;
	} else {
		return node.textContent;
	}
}
DekiWiki.util.Dom.setInnerHTML = function (el, html) {
    el = YAHOO.util.Dom.get(el);
    if (!el || typeof html !== 'string') {
        return null;
    }

    // Break circular references.
    (function (o) {
        var a = o.attributes, i, l, n, c;
        if (a) {
            l = a.length;
            for (i = 0; i < l; i += 1) {
                n = a[i].name;
                if (typeof o[n] === 'function') {
                    o[n] = null;
                }
            }
        }
        a = o.childNodes;
        if (a) {
            l = a.length;
            for (i = 0; i < l; i += 1) {
                c = o.childNodes[i];

                // Purge child nodes.
                arguments.callee(c);

                // Removes all listeners attached to the element via YUI's addListener.
                YAHOO.util.Event.purgeElement(c);
            }
        }
    })(el);

    // Remove scripts from HTML string, and set innerHTML property
    el.innerHTML = html.replace(/<script[^>]*>((.|[\r\n])*?)<\\?\/script>/ig, "");

    // Return a reference to the first child
    return el.firstChild;
};
DekiWiki.util.Dom.setInnerText = function(el, text) {
  if(typeof(el.innerText) != 'undefined') el.innerText = text;
  else el.textContent = text;
};
DekiWiki.publish = function(c,d) { window.PageBus.publish(c,d); };
DekiWiki.subscribe = function(c,o,f,d) { window.PageBus.subscribe(c,o,f,d) };
DekiWiki.hasValue = function(v, d) { return (v != 'undefined') && (v != null) && (v != '') ? v : ((typeof d != 'undefined') ? d : null); };

if (typeof Mindtouch == "undefined") {
	var Mindtouch = {};
}
//transition
var Mindtouch = DekiWiki;

/*
 * jQuery 1.2.6 - New Wave Javascript
 *
 * Copyright (c) 2008 John Resig (jquery.com)
 * Dual licensed under the MIT (MIT-LICENSE.txt)
 * and GPL (GPL-LICENSE.txt) licenses.
 *
 * $Date: 2008-05-24 14:22:17 -0400 (Sat, 24 May 2008) $
 * $Rev: 5685 $
 */
(function(){var _jQuery=window.jQuery,_$=window.$;var jQuery=window.jQuery=window.$=function(selector,context){return new jQuery.fn.init(selector,context);};var quickExpr=/^[^<]*(<(.|\s)+>)[^>]*$|^#(\w+)$/,isSimple=/^.[^:#\[\.]*$/,undefined;jQuery.fn=jQuery.prototype={init:function(selector,context){selector=selector||document;if(selector.nodeType){this[0]=selector;this.length=1;return this;}if(typeof selector=="string"){var match=quickExpr.exec(selector);if(match&&(match[1]||!context)){if(match[1])selector=jQuery.clean([match[1]],context);else{var elem=document.getElementById(match[3]);if(elem){if(elem.id!=match[3])return jQuery().find(selector);return jQuery(elem);}selector=[];}}else
return jQuery(context).find(selector);}else if(jQuery.isFunction(selector))return jQuery(document)[jQuery.fn.ready?"ready":"load"](selector);return this.setArray(jQuery.makeArray(selector));},jquery:"1.2.6",size:function(){return this.length;},length:0,get:function(num){return num==undefined?jQuery.makeArray(this):this[num];},pushStack:function(elems){var ret=jQuery(elems);ret.prevObject=this;return ret;},setArray:function(elems){this.length=0;Array.prototype.push.apply(this,elems);return this;},each:function(callback,args){return jQuery.each(this,callback,args);},index:function(elem){var ret=-1;return jQuery.inArray(elem&&elem.jquery?elem[0]:elem,this);},attr:function(name,value,type){var options=name;if(name.constructor==String)if(value===undefined)return this[0]&&jQuery[type||"attr"](this[0],name);else{options={};options[name]=value;}return this.each(function(i){for(name in options)jQuery.attr(type?this.style:this,name,jQuery.prop(this,options[name],type,i,name));});},css:function(key,value){if((key=='width'||key=='height')&&parseFloat(value)<0)value=undefined;return this.attr(key,value,"curCSS");},text:function(text){if(typeof text!="object"&&text!=null)return this.empty().append((this[0]&&this[0].ownerDocument||document).createTextNode(text));var ret="";jQuery.each(text||this,function(){jQuery.each(this.childNodes,function(){if(this.nodeType!=8)ret+=this.nodeType!=1?this.nodeValue:jQuery.fn.text([this]);});});return ret;},wrapAll:function(html){if(this[0])jQuery(html,this[0].ownerDocument).clone().insertBefore(this[0]).map(function(){var elem=this;while(elem.firstChild)elem=elem.firstChild;return elem;}).append(this);return this;},wrapInner:function(html){return this.each(function(){jQuery(this).contents().wrapAll(html);});},wrap:function(html){return this.each(function(){jQuery(this).wrapAll(html);});},append:function(){return this.domManip(arguments,true,false,function(elem){if(this.nodeType==1)this.appendChild(elem);});},prepend:function(){return this.domManip(arguments,true,true,function(elem){if(this.nodeType==1)this.insertBefore(elem,this.firstChild);});},before:function(){return this.domManip(arguments,false,false,function(elem){this.parentNode.insertBefore(elem,this);});},after:function(){return this.domManip(arguments,false,true,function(elem){this.parentNode.insertBefore(elem,this.nextSibling);});},end:function(){return this.prevObject||jQuery([]);},find:function(selector){var elems=jQuery.map(this,function(elem){return jQuery.find(selector,elem);});return this.pushStack(/[^+>] [^+>]/.test(selector)||selector.indexOf("..")>-1?jQuery.unique(elems):elems);},clone:function(events){var ret=this.map(function(){if(jQuery.browser.msie&&!jQuery.isXMLDoc(this)){var clone=this.cloneNode(true),container=document.createElement("div");container.appendChild(clone);return jQuery.clean([container.innerHTML])[0];}else
return this.cloneNode(true);});var clone=ret.find("*").andSelf().each(function(){if(this[expando]!=undefined)this[expando]=null;});if(events===true)this.find("*").andSelf().each(function(i){if(this.nodeType==3)return;var events=jQuery.data(this,"events");for(var type in events)for(var handler in events[type])jQuery.event.add(clone[i],type,events[type][handler],events[type][handler].data);});return ret;},filter:function(selector){return this.pushStack(jQuery.isFunction(selector)&&jQuery.grep(this,function(elem,i){return selector.call(elem,i);})||jQuery.multiFilter(selector,this));},not:function(selector){if(selector.constructor==String)if(isSimple.test(selector))return this.pushStack(jQuery.multiFilter(selector,this,true));else
selector=jQuery.multiFilter(selector,this);var isArrayLike=selector.length&&selector[selector.length-1]!==undefined&&!selector.nodeType;return this.filter(function(){return isArrayLike?jQuery.inArray(this,selector)<0:this!=selector;});},add:function(selector){return this.pushStack(jQuery.unique(jQuery.merge(this.get(),typeof selector=='string'?jQuery(selector):jQuery.makeArray(selector))));},is:function(selector){return!!selector&&jQuery.multiFilter(selector,this).length>0;},hasClass:function(selector){return this.is("."+selector);},val:function(value){if(value==undefined){if(this.length){var elem=this[0];if(jQuery.nodeName(elem,"select")){var index=elem.selectedIndex,values=[],options=elem.options,one=elem.type=="select-one";if(index<0)return null;for(var i=one?index:0,max=one?index+1:options.length;i<max;i++){var option=options[i];if(option.selected){value=jQuery.browser.msie&&!option.attributes.value.specified?option.text:option.value;if(one)return value;values.push(value);}}return values;}else
return(this[0].value||"").replace(/\r/g,"");}return undefined;}if(value.constructor==Number)value+='';return this.each(function(){if(this.nodeType!=1)return;if(value.constructor==Array&&/radio|checkbox/.test(this.type))this.checked=(jQuery.inArray(this.value,value)>=0||jQuery.inArray(this.name,value)>=0);else if(jQuery.nodeName(this,"select")){var values=jQuery.makeArray(value);jQuery("option",this).each(function(){this.selected=(jQuery.inArray(this.value,values)>=0||jQuery.inArray(this.text,values)>=0);});if(!values.length)this.selectedIndex=-1;}else
this.value=value;});},html:function(value){return value==undefined?(this[0]?this[0].innerHTML:null):this.empty().append(value);},replaceWith:function(value){return this.after(value).remove();},eq:function(i){return this.slice(i,i+1);},slice:function(){return this.pushStack(Array.prototype.slice.apply(this,arguments));},map:function(callback){return this.pushStack(jQuery.map(this,function(elem,i){return callback.call(elem,i,elem);}));},andSelf:function(){return this.add(this.prevObject);},data:function(key,value){var parts=key.split(".");parts[1]=parts[1]?"."+parts[1]:"";if(value===undefined){var data=this.triggerHandler("getData"+parts[1]+"!",[parts[0]]);if(data===undefined&&this.length)data=jQuery.data(this[0],key);return data===undefined&&parts[1]?this.data(parts[0]):data;}else
return this.trigger("setData"+parts[1]+"!",[parts[0],value]).each(function(){jQuery.data(this,key,value);});},removeData:function(key){return this.each(function(){jQuery.removeData(this,key);});},domManip:function(args,table,reverse,callback){var clone=this.length>1,elems;return this.each(function(){if(!elems){elems=jQuery.clean(args,this.ownerDocument);if(reverse)elems.reverse();}var obj=this;if(table&&jQuery.nodeName(this,"table")&&jQuery.nodeName(elems[0],"tr"))obj=this.getElementsByTagName("tbody")[0]||this.appendChild(this.ownerDocument.createElement("tbody"));var scripts=jQuery([]);jQuery.each(elems,function(){var elem=clone?jQuery(this).clone(true)[0]:this;if(jQuery.nodeName(elem,"script"))scripts=scripts.add(elem);else{if(elem.nodeType==1)scripts=scripts.add(jQuery("script",elem).remove());callback.call(obj,elem);}});scripts.each(evalScript);});}};jQuery.fn.init.prototype=jQuery.fn;function evalScript(i,elem){if(elem.src)jQuery.ajax({url:elem.src,async:false,dataType:"script"});else
jQuery.globalEval(elem.text||elem.textContent||elem.innerHTML||"");if(elem.parentNode)elem.parentNode.removeChild(elem);}function now(){return+new Date;}jQuery.extend=jQuery.fn.extend=function(){var target=arguments[0]||{},i=1,length=arguments.length,deep=false,options;if(target.constructor==Boolean){deep=target;target=arguments[1]||{};i=2;}if(typeof target!="object"&&typeof target!="function")target={};if(length==i){target=this;--i;}for(;i<length;i++)if((options=arguments[i])!=null)for(var name in options){var src=target[name],copy=options[name];if(target===copy)continue;if(deep&&copy&&typeof copy=="object"&&!copy.nodeType)target[name]=jQuery.extend(deep,src||(copy.length!=null?[]:{}),copy);else if(copy!==undefined)target[name]=copy;}return target;};var expando="jQuery"+now(),uuid=0,windowData={},exclude=/z-?index|font-?weight|opacity|zoom|line-?height/i,defaultView=document.defaultView||{};jQuery.extend({noConflict:function(deep){window.$=_$;if(deep)window.jQuery=_jQuery;return jQuery;},isFunction:function(fn){return!!fn&&typeof fn!="string"&&!fn.nodeName&&fn.constructor!=Array&&/^[\s[]?function/.test(fn+"");},isXMLDoc:function(elem){return elem.documentElement&&!elem.body||elem.tagName&&elem.ownerDocument&&!elem.ownerDocument.body;},globalEval:function(data){data=jQuery.trim(data);if(data){var head=document.getElementsByTagName("head")[0]||document.documentElement,script=document.createElement("script");script.type="text/javascript";if(jQuery.browser.msie)script.text=data;else
script.appendChild(document.createTextNode(data));head.insertBefore(script,head.firstChild);head.removeChild(script);}},nodeName:function(elem,name){return elem.nodeName&&elem.nodeName.toUpperCase()==name.toUpperCase();},cache:{},data:function(elem,name,data){elem=elem==window?windowData:elem;var id=elem[expando];if(!id)id=elem[expando]=++uuid;if(name&&!jQuery.cache[id])jQuery.cache[id]={};if(data!==undefined)jQuery.cache[id][name]=data;return name?jQuery.cache[id][name]:id;},removeData:function(elem,name){elem=elem==window?windowData:elem;var id=elem[expando];if(name){if(jQuery.cache[id]){delete jQuery.cache[id][name];name="";for(name in jQuery.cache[id])break;if(!name)jQuery.removeData(elem);}}else{try{delete elem[expando];}catch(e){if(elem.removeAttribute)elem.removeAttribute(expando);}delete jQuery.cache[id];}},each:function(object,callback,args){var name,i=0,length=object.length;if(args){if(length==undefined){for(name in object)if(callback.apply(object[name],args)===false)break;}else
for(;i<length;)if(callback.apply(object[i++],args)===false)break;}else{if(length==undefined){for(name in object)if(callback.call(object[name],name,object[name])===false)break;}else
for(var value=object[0];i<length&&callback.call(value,i,value)!==false;value=object[++i]){}}return object;},prop:function(elem,value,type,i,name){if(jQuery.isFunction(value))value=value.call(elem,i);return value&&value.constructor==Number&&type=="curCSS"&&!exclude.test(name)?value+"px":value;},className:{add:function(elem,classNames){jQuery.each((classNames||"").split(/\s+/),function(i,className){if(elem.nodeType==1&&!jQuery.className.has(elem.className,className))elem.className+=(elem.className?" ":"")+className;});},remove:function(elem,classNames){if(elem.nodeType==1)elem.className=classNames!=undefined?jQuery.grep(elem.className.split(/\s+/),function(className){return!jQuery.className.has(classNames,className);}).join(" "):"";},has:function(elem,className){return jQuery.inArray(className,(elem.className||elem).toString().split(/\s+/))>-1;}},swap:function(elem,options,callback){var old={};for(var name in options){old[name]=elem.style[name];elem.style[name]=options[name];}callback.call(elem);for(var name in options)elem.style[name]=old[name];},css:function(elem,name,force){if(name=="width"||name=="height"){var val,props={position:"absolute",visibility:"hidden",display:"block"},which=name=="width"?["Left","Right"]:["Top","Bottom"];function getWH(){val=name=="width"?elem.offsetWidth:elem.offsetHeight;var padding=0,border=0;jQuery.each(which,function(){padding+=parseFloat(jQuery.curCSS(elem,"padding"+this,true))||0;border+=parseFloat(jQuery.curCSS(elem,"border"+this+"Width",true))||0;});val-=Math.round(padding+border);}if(jQuery(elem).is(":visible"))getWH();else
jQuery.swap(elem,props,getWH);return Math.max(0,val);}return jQuery.curCSS(elem,name,force);},curCSS:function(elem,name,force){var ret,style=elem.style;function color(elem){if(!jQuery.browser.safari)return false;var ret=defaultView.getComputedStyle(elem,null);return!ret||ret.getPropertyValue("color")=="";}if(name=="opacity"&&jQuery.browser.msie){ret=jQuery.attr(style,"opacity");return ret==""?"1":ret;}if(jQuery.browser.opera&&name=="display"){var save=style.outline;style.outline="0 solid black";style.outline=save;}if(name.match(/float/i))name=styleFloat;if(!force&&style&&style[name])ret=style[name];else if(defaultView.getComputedStyle){if(name.match(/float/i))name="float";name=name.replace(/([A-Z])/g,"-$1").toLowerCase();var computedStyle=defaultView.getComputedStyle(elem,null);if(computedStyle&&!color(elem))ret=computedStyle.getPropertyValue(name);else{var swap=[],stack=[],a=elem,i=0;for(;a&&color(a);a=a.parentNode)stack.unshift(a);for(;i<stack.length;i++)if(color(stack[i])){swap[i]=stack[i].style.display;stack[i].style.display="block";}ret=name=="display"&&swap[stack.length-1]!=null?"none":(computedStyle&&computedStyle.getPropertyValue(name))||"";for(i=0;i<swap.length;i++)if(swap[i]!=null)stack[i].style.display=swap[i];}if(name=="opacity"&&ret=="")ret="1";}else if(elem.currentStyle){var camelCase=name.replace(/\-(\w)/g,function(all,letter){return letter.toUpperCase();});ret=elem.currentStyle[name]||elem.currentStyle[camelCase];if(!/^\d+(px)?$/i.test(ret)&&/^\d/.test(ret)){var left=style.left,rsLeft=elem.runtimeStyle.left;elem.runtimeStyle.left=elem.currentStyle.left;style.left=ret||0;ret=style.pixelLeft+"px";style.left=left;elem.runtimeStyle.left=rsLeft;}}return ret;},clean:function(elems,context){var ret=[];context=context||document;if(typeof context.createElement=='undefined')context=context.ownerDocument||context[0]&&context[0].ownerDocument||document;jQuery.each(elems,function(i,elem){if(!elem)return;if(elem.constructor==Number)elem+='';if(typeof elem=="string"){elem=elem.replace(/(<(\w+)[^>]*?)\/>/g,function(all,front,tag){return tag.match(/^(abbr|br|col|img|input|link|meta|param|hr|area|embed)$/i)?all:front+"></"+tag+">";});var tags=jQuery.trim(elem).toLowerCase(),div=context.createElement("div");var wrap=!tags.indexOf("<opt")&&[1,"<select multiple='multiple'>","</select>"]||!tags.indexOf("<leg")&&[1,"<fieldset>","</fieldset>"]||tags.match(/^<(thead|tbody|tfoot|colg|cap)/)&&[1,"<table>","</table>"]||!tags.indexOf("<tr")&&[2,"<table><tbody>","</tbody></table>"]||(!tags.indexOf("<td")||!tags.indexOf("<th"))&&[3,"<table><tbody><tr>","</tr></tbody></table>"]||!tags.indexOf("<col")&&[2,"<table><tbody></tbody><colgroup>","</colgroup></table>"]||jQuery.browser.msie&&[1,"div<div>","</div>"]||[0,"",""];div.innerHTML=wrap[1]+elem+wrap[2];while(wrap[0]--)div=div.lastChild;if(jQuery.browser.msie){var tbody=!tags.indexOf("<table")&&tags.indexOf("<tbody")<0?div.firstChild&&div.firstChild.childNodes:wrap[1]=="<table>"&&tags.indexOf("<tbody")<0?div.childNodes:[];for(var j=tbody.length-1;j>=0;--j)if(jQuery.nodeName(tbody[j],"tbody")&&!tbody[j].childNodes.length)tbody[j].parentNode.removeChild(tbody[j]);if(/^\s/.test(elem))div.insertBefore(context.createTextNode(elem.match(/^\s*/)[0]),div.firstChild);}elem=jQuery.makeArray(div.childNodes);}if(elem.length===0&&(!jQuery.nodeName(elem,"form")&&!jQuery.nodeName(elem,"select")))return;if(elem[0]==undefined||jQuery.nodeName(elem,"form")||elem.options)ret.push(elem);else
ret=jQuery.merge(ret,elem);});return ret;},attr:function(elem,name,value){if(!elem||elem.nodeType==3||elem.nodeType==8)return undefined;var notxml=!jQuery.isXMLDoc(elem),set=value!==undefined,msie=jQuery.browser.msie;name=notxml&&jQuery.props[name]||name;if(elem.tagName){var special=/href|src|style/.test(name);if(name=="selected"&&jQuery.browser.safari)elem.parentNode.selectedIndex;if(name in elem&&notxml&&!special){if(set){if(name=="type"&&jQuery.nodeName(elem,"input")&&elem.parentNode)throw"type property can't be changed";elem[name]=value;}if(jQuery.nodeName(elem,"form")&&elem.getAttributeNode(name))return elem.getAttributeNode(name).nodeValue;return elem[name];}if(msie&&notxml&&name=="style")return jQuery.attr(elem.style,"cssText",value);if(set)elem.setAttribute(name,""+value);var attr=msie&&notxml&&special?elem.getAttribute(name,2):elem.getAttribute(name);return attr===null?undefined:attr;}if(msie&&name=="opacity"){if(set){elem.zoom=1;elem.filter=(elem.filter||"").replace(/alpha\([^)]*\)/,"")+(parseInt(value)+''=="NaN"?"":"alpha(opacity="+value*100+")");}return elem.filter&&elem.filter.indexOf("opacity=")>=0?(parseFloat(elem.filter.match(/opacity=([^)]*)/)[1])/100)+'':"";}name=name.replace(/-([a-z])/ig,function(all,letter){return letter.toUpperCase();});if(set)elem[name]=value;return elem[name];},trim:function(text){return(text||"").replace(/^\s+|\s+$/g,"");},makeArray:function(array){var ret=[];if(array!=null){var i=array.length;if(i==null||array.split||array.setInterval||array.call)ret[0]=array;else
while(i)ret[--i]=array[i];}return ret;},inArray:function(elem,array){for(var i=0,length=array.length;i<length;i++)if(array[i]===elem)return i;return-1;},merge:function(first,second){var i=0,elem,pos=first.length;if(jQuery.browser.msie){while(elem=second[i++])if(elem.nodeType!=8)first[pos++]=elem;}else
while(elem=second[i++])first[pos++]=elem;return first;},unique:function(array){var ret=[],done={};try{for(var i=0,length=array.length;i<length;i++){var id=jQuery.data(array[i]);if(!done[id]){done[id]=true;ret.push(array[i]);}}}catch(e){ret=array;}return ret;},grep:function(elems,callback,inv){var ret=[];for(var i=0,length=elems.length;i<length;i++)if(!inv!=!callback(elems[i],i))ret.push(elems[i]);return ret;},map:function(elems,callback){var ret=[];for(var i=0,length=elems.length;i<length;i++){var value=callback(elems[i],i);if(value!=null)ret[ret.length]=value;}return ret.concat.apply([],ret);}});var userAgent=navigator.userAgent.toLowerCase();jQuery.browser={version:(userAgent.match(/.+(?:rv|it|ra|ie)[\/: ]([\d.]+)/)||[])[1],safari:/webkit/.test(userAgent),opera:/opera/.test(userAgent),msie:/msie/.test(userAgent)&&!/opera/.test(userAgent),mozilla:/mozilla/.test(userAgent)&&!/(compatible|webkit)/.test(userAgent)};var styleFloat=jQuery.browser.msie?"styleFloat":"cssFloat";jQuery.extend({boxModel:!jQuery.browser.msie||document.compatMode=="CSS1Compat",props:{"for":"htmlFor","class":"className","float":styleFloat,cssFloat:styleFloat,styleFloat:styleFloat,readonly:"readOnly",maxlength:"maxLength",cellspacing:"cellSpacing"}});jQuery.each({parent:function(elem){return elem.parentNode;},parents:function(elem){return jQuery.dir(elem,"parentNode");},next:function(elem){return jQuery.nth(elem,2,"nextSibling");},prev:function(elem){return jQuery.nth(elem,2,"previousSibling");},nextAll:function(elem){return jQuery.dir(elem,"nextSibling");},prevAll:function(elem){return jQuery.dir(elem,"previousSibling");},siblings:function(elem){return jQuery.sibling(elem.parentNode.firstChild,elem);},children:function(elem){return jQuery.sibling(elem.firstChild);},contents:function(elem){return jQuery.nodeName(elem,"iframe")?elem.contentDocument||elem.contentWindow.document:jQuery.makeArray(elem.childNodes);}},function(name,fn){jQuery.fn[name]=function(selector){var ret=jQuery.map(this,fn);if(selector&&typeof selector=="string")ret=jQuery.multiFilter(selector,ret);return this.pushStack(jQuery.unique(ret));};});jQuery.each({appendTo:"append",prependTo:"prepend",insertBefore:"before",insertAfter:"after",replaceAll:"replaceWith"},function(name,original){jQuery.fn[name]=function(){var args=arguments;return this.each(function(){for(var i=0,length=args.length;i<length;i++)jQuery(args[i])[original](this);});};});jQuery.each({removeAttr:function(name){jQuery.attr(this,name,"");if(this.nodeType==1)this.removeAttribute(name);},addClass:function(classNames){jQuery.className.add(this,classNames);},removeClass:function(classNames){jQuery.className.remove(this,classNames);},toggleClass:function(classNames){jQuery.className[jQuery.className.has(this,classNames)?"remove":"add"](this,classNames);},remove:function(selector){if(!selector||jQuery.filter(selector,[this]).r.length){jQuery("*",this).add(this).each(function(){jQuery.event.remove(this);jQuery.removeData(this);});if(this.parentNode)this.parentNode.removeChild(this);}},empty:function(){jQuery(">*",this).remove();while(this.firstChild)this.removeChild(this.firstChild);}},function(name,fn){jQuery.fn[name]=function(){return this.each(fn,arguments);};});jQuery.each(["Height","Width"],function(i,name){var type=name.toLowerCase();jQuery.fn[type]=function(size){return this[0]==window?jQuery.browser.opera&&document.body["client"+name]||jQuery.browser.safari&&window["inner"+name]||document.compatMode=="CSS1Compat"&&document.documentElement["client"+name]||document.body["client"+name]:this[0]==document?Math.max(Math.max(document.body["scroll"+name],document.documentElement["scroll"+name]),Math.max(document.body["offset"+name],document.documentElement["offset"+name])):size==undefined?(this.length?jQuery.css(this[0],type):null):this.css(type,size.constructor==String?size:size+"px");};});function num(elem,prop){return elem[0]&&parseInt(jQuery.curCSS(elem[0],prop,true),10)||0;}var chars=jQuery.browser.safari&&parseInt(jQuery.browser.version)<417?"(?:[\\w*_-]|\\\\.)":"(?:[\\w\u0128-\uFFFF*_-]|\\\\.)",quickChild=new RegExp("^>\\s*("+chars+"+)"),quickID=new RegExp("^("+chars+"+)(#)("+chars+"+)"),quickClass=new RegExp("^([#.]?)("+chars+"*)");jQuery.extend({expr:{"":function(a,i,m){return m[2]=="*"||jQuery.nodeName(a,m[2]);},"#":function(a,i,m){return a.getAttribute("id")==m[2];},":":{lt:function(a,i,m){return i<m[3]-0;},gt:function(a,i,m){return i>m[3]-0;},nth:function(a,i,m){return m[3]-0==i;},eq:function(a,i,m){return m[3]-0==i;},first:function(a,i){return i==0;},last:function(a,i,m,r){return i==r.length-1;},even:function(a,i){return i%2==0;},odd:function(a,i){return i%2;},"first-child":function(a){return a.parentNode.getElementsByTagName("*")[0]==a;},"last-child":function(a){return jQuery.nth(a.parentNode.lastChild,1,"previousSibling")==a;},"only-child":function(a){return!jQuery.nth(a.parentNode.lastChild,2,"previousSibling");},parent:function(a){return a.firstChild;},empty:function(a){return!a.firstChild;},contains:function(a,i,m){return(a.textContent||a.innerText||jQuery(a).text()||"").indexOf(m[3])>=0;},visible:function(a){return"hidden"!=a.type&&jQuery.css(a,"display")!="none"&&jQuery.css(a,"visibility")!="hidden";},hidden:function(a){return"hidden"==a.type||jQuery.css(a,"display")=="none"||jQuery.css(a,"visibility")=="hidden";},enabled:function(a){return!a.disabled;},disabled:function(a){return a.disabled;},checked:function(a){return a.checked;},selected:function(a){return a.selected||jQuery.attr(a,"selected");},text:function(a){return"text"==a.type;},radio:function(a){return"radio"==a.type;},checkbox:function(a){return"checkbox"==a.type;},file:function(a){return"file"==a.type;},password:function(a){return"password"==a.type;},submit:function(a){return"submit"==a.type;},image:function(a){return"image"==a.type;},reset:function(a){return"reset"==a.type;},button:function(a){return"button"==a.type||jQuery.nodeName(a,"button");},input:function(a){return/input|select|textarea|button/i.test(a.nodeName);},has:function(a,i,m){return jQuery.find(m[3],a).length;},header:function(a){return/h\d/i.test(a.nodeName);},animated:function(a){return jQuery.grep(jQuery.timers,function(fn){return a==fn.elem;}).length;}}},parse:[/^(\[) *@?([\w-]+) *([!*$^~=]*) *('?"?)(.*?)\4 *\]/,/^(:)([\w-]+)\("?'?(.*?(\(.*?\))?[^(]*?)"?'?\)/,new RegExp("^([:.#]*)("+chars+"+)")],multiFilter:function(expr,elems,not){var old,cur=[];while(expr&&expr!=old){old=expr;var f=jQuery.filter(expr,elems,not);expr=f.t.replace(/^\s*,\s*/,"");cur=not?elems=f.r:jQuery.merge(cur,f.r);}return cur;},find:function(t,context){if(typeof t!="string")return[t];if(context&&context.nodeType!=1&&context.nodeType!=9)return[];context=context||document;var ret=[context],done=[],last,nodeName;while(t&&last!=t){var r=[];last=t;t=jQuery.trim(t);var foundToken=false,re=quickChild,m=re.exec(t);if(m){nodeName=m[1].toUpperCase();for(var i=0;ret[i];i++)for(var c=ret[i].firstChild;c;c=c.nextSibling)if(c.nodeType==1&&(nodeName=="*"||c.nodeName.toUpperCase()==nodeName))r.push(c);ret=r;t=t.replace(re,"");if(t.indexOf(" ")==0)continue;foundToken=true;}else{re=/^([>+~])\s*(\w*)/i;if((m=re.exec(t))!=null){r=[];var merge={};nodeName=m[2].toUpperCase();m=m[1];for(var j=0,rl=ret.length;j<rl;j++){var n=m=="~"||m=="+"?ret[j].nextSibling:ret[j].firstChild;for(;n;n=n.nextSibling)if(n.nodeType==1){var id=jQuery.data(n);if(m=="~"&&merge[id])break;if(!nodeName||n.nodeName.toUpperCase()==nodeName){if(m=="~")merge[id]=true;r.push(n);}if(m=="+")break;}}ret=r;t=jQuery.trim(t.replace(re,""));foundToken=true;}}if(t&&!foundToken){if(!t.indexOf(",")){if(context==ret[0])ret.shift();done=jQuery.merge(done,ret);r=ret=[context];t=" "+t.substr(1,t.length);}else{var re2=quickID;var m=re2.exec(t);if(m){m=[0,m[2],m[3],m[1]];}else{re2=quickClass;m=re2.exec(t);}m[2]=m[2].replace(/\\/g,"");var elem=ret[ret.length-1];if(m[1]=="#"&&elem&&elem.getElementById&&!jQuery.isXMLDoc(elem)){var oid=elem.getElementById(m[2]);if((jQuery.browser.msie||jQuery.browser.opera)&&oid&&typeof oid.id=="string"&&oid.id!=m[2])oid=jQuery('[@id="'+m[2]+'"]',elem)[0];ret=r=oid&&(!m[3]||jQuery.nodeName(oid,m[3]))?[oid]:[];}else{for(var i=0;ret[i];i++){var tag=m[1]=="#"&&m[3]?m[3]:m[1]!=""||m[0]==""?"*":m[2];if(tag=="*"&&ret[i].nodeName.toLowerCase()=="object")tag="param";r=jQuery.merge(r,ret[i].getElementsByTagName(tag));}if(m[1]==".")r=jQuery.classFilter(r,m[2]);if(m[1]=="#"){var tmp=[];for(var i=0;r[i];i++)if(r[i].getAttribute("id")==m[2]){tmp=[r[i]];break;}r=tmp;}ret=r;}t=t.replace(re2,"");}}if(t){var val=jQuery.filter(t,r);ret=r=val.r;t=jQuery.trim(val.t);}}if(t)ret=[];if(ret&&context==ret[0])ret.shift();done=jQuery.merge(done,ret);return done;},classFilter:function(r,m,not){m=" "+m+" ";var tmp=[];for(var i=0;r[i];i++){var pass=(" "+r[i].className+" ").indexOf(m)>=0;if(!not&&pass||not&&!pass)tmp.push(r[i]);}return tmp;},filter:function(t,r,not){var last;while(t&&t!=last){last=t;var p=jQuery.parse,m;for(var i=0;p[i];i++){m=p[i].exec(t);if(m){t=t.substring(m[0].length);m[2]=m[2].replace(/\\/g,"");break;}}if(!m)break;if(m[1]==":"&&m[2]=="not")r=isSimple.test(m[3])?jQuery.filter(m[3],r,true).r:jQuery(r).not(m[3]);else if(m[1]==".")r=jQuery.classFilter(r,m[2],not);else if(m[1]=="["){var tmp=[],type=m[3];for(var i=0,rl=r.length;i<rl;i++){var a=r[i],z=a[jQuery.props[m[2]]||m[2]];if(z==null||/href|src|selected/.test(m[2]))z=jQuery.attr(a,m[2])||'';if((type==""&&!!z||type=="="&&z==m[5]||type=="!="&&z!=m[5]||type=="^="&&z&&!z.indexOf(m[5])||type=="$="&&z.substr(z.length-m[5].length)==m[5]||(type=="*="||type=="~=")&&z.indexOf(m[5])>=0)^not)tmp.push(a);}r=tmp;}else if(m[1]==":"&&m[2]=="nth-child"){var merge={},tmp=[],test=/(-?)(\d*)n((?:\+|-)?\d*)/.exec(m[3]=="even"&&"2n"||m[3]=="odd"&&"2n+1"||!/\D/.test(m[3])&&"0n+"+m[3]||m[3]),first=(test[1]+(test[2]||1))-0,last=test[3]-0;for(var i=0,rl=r.length;i<rl;i++){var node=r[i],parentNode=node.parentNode,id=jQuery.data(parentNode);if(!merge[id]){var c=1;for(var n=parentNode.firstChild;n;n=n.nextSibling)if(n.nodeType==1)n.nodeIndex=c++;merge[id]=true;}var add=false;if(first==0){if(node.nodeIndex==last)add=true;}else if((node.nodeIndex-last)%first==0&&(node.nodeIndex-last)/first>=0)add=true;if(add^not)tmp.push(node);}r=tmp;}else{var fn=jQuery.expr[m[1]];if(typeof fn=="object")fn=fn[m[2]];if(typeof fn=="string")fn=eval("false||function(a,i){return "+fn+";}");r=jQuery.grep(r,function(elem,i){return fn(elem,i,m,r);},not);}}return{r:r,t:t};},dir:function(elem,dir){var matched=[],cur=elem[dir];while(cur&&cur!=document){if(cur.nodeType==1)matched.push(cur);cur=cur[dir];}return matched;},nth:function(cur,result,dir,elem){result=result||1;var num=0;for(;cur;cur=cur[dir])if(cur.nodeType==1&&++num==result)break;return cur;},sibling:function(n,elem){var r=[];for(;n;n=n.nextSibling){if(n.nodeType==1&&n!=elem)r.push(n);}return r;}});jQuery.event={add:function(elem,types,handler,data){if(elem.nodeType==3||elem.nodeType==8)return;if(jQuery.browser.msie&&elem.setInterval)elem=window;if(!handler.guid)handler.guid=this.guid++;if(data!=undefined){var fn=handler;handler=this.proxy(fn,function(){return fn.apply(this,arguments);});handler.data=data;}var events=jQuery.data(elem,"events")||jQuery.data(elem,"events",{}),handle=jQuery.data(elem,"handle")||jQuery.data(elem,"handle",function(){if(typeof jQuery!="undefined"&&!jQuery.event.triggered)return jQuery.event.handle.apply(arguments.callee.elem,arguments);});handle.elem=elem;jQuery.each(types.split(/\s+/),function(index,type){var parts=type.split(".");type=parts[0];handler.type=parts[1];var handlers=events[type];if(!handlers){handlers=events[type]={};if(!jQuery.event.special[type]||jQuery.event.special[type].setup.call(elem)===false){if(elem.addEventListener)elem.addEventListener(type,handle,false);else if(elem.attachEvent)elem.attachEvent("on"+type,handle);}}handlers[handler.guid]=handler;jQuery.event.global[type]=true;});elem=null;},guid:1,global:{},remove:function(elem,types,handler){if(elem.nodeType==3||elem.nodeType==8)return;var events=jQuery.data(elem,"events"),ret,index;if(events){if(types==undefined||(typeof types=="string"&&types.charAt(0)=="."))for(var type in events)this.remove(elem,type+(types||""));else{if(types.type){handler=types.handler;types=types.type;}jQuery.each(types.split(/\s+/),function(index,type){var parts=type.split(".");type=parts[0];if(events[type]){if(handler)delete events[type][handler.guid];else
for(handler in events[type])if(!parts[1]||events[type][handler].type==parts[1])delete events[type][handler];for(ret in events[type])break;if(!ret){if(!jQuery.event.special[type]||jQuery.event.special[type].teardown.call(elem)===false){if(elem.removeEventListener)elem.removeEventListener(type,jQuery.data(elem,"handle"),false);else if(elem.detachEvent)elem.detachEvent("on"+type,jQuery.data(elem,"handle"));}ret=null;delete events[type];}}});}for(ret in events)break;if(!ret){var handle=jQuery.data(elem,"handle");if(handle)handle.elem=null;jQuery.removeData(elem,"events");jQuery.removeData(elem,"handle");}}},trigger:function(type,data,elem,donative,extra){data=jQuery.makeArray(data);if(type.indexOf("!")>=0){type=type.slice(0,-1);var exclusive=true;}if(!elem){if(this.global[type])jQuery("*").add([window,document]).trigger(type,data);}else{if(elem.nodeType==3||elem.nodeType==8)return undefined;var val,ret,fn=jQuery.isFunction(elem[type]||null),event=!data[0]||!data[0].preventDefault;if(event){data.unshift({type:type,target:elem,preventDefault:function(){},stopPropagation:function(){},timeStamp:now()});data[0][expando]=true;}data[0].type=type;if(exclusive)data[0].exclusive=true;var handle=jQuery.data(elem,"handle");if(handle)val=handle.apply(elem,data);if((!fn||(jQuery.nodeName(elem,'a')&&type=="click"))&&elem["on"+type]&&elem["on"+type].apply(elem,data)===false)val=false;if(event)data.shift();if(extra&&jQuery.isFunction(extra)){ret=extra.apply(elem,val==null?data:data.concat(val));if(ret!==undefined)val=ret;}if(fn&&donative!==false&&val!==false&&!(jQuery.nodeName(elem,'a')&&type=="click")){this.triggered=true;try{elem[type]();}catch(e){}}this.triggered=false;}return val;},handle:function(event){var val,ret,namespace,all,handlers;event=arguments[0]=jQuery.event.fix(event||window.event);namespace=event.type.split(".");event.type=namespace[0];namespace=namespace[1];all=!namespace&&!event.exclusive;handlers=(jQuery.data(this,"events")||{})[event.type];for(var j in handlers){var handler=handlers[j];if(all||handler.type==namespace){event.handler=handler;event.data=handler.data;ret=handler.apply(this,arguments);if(val!==false)val=ret;if(ret===false){event.preventDefault();event.stopPropagation();}}}return val;},fix:function(event){if(event[expando]==true)return event;var originalEvent=event;event={originalEvent:originalEvent};var props="altKey attrChange attrName bubbles button cancelable charCode clientX clientY ctrlKey currentTarget data detail eventPhase fromElement handler keyCode metaKey newValue originalTarget pageX pageY prevValue relatedNode relatedTarget screenX screenY shiftKey srcElement target timeStamp toElement type view wheelDelta which".split(" ");for(var i=props.length;i;i--)event[props[i]]=originalEvent[props[i]];event[expando]=true;event.preventDefault=function(){if(originalEvent.preventDefault)originalEvent.preventDefault();originalEvent.returnValue=false;};event.stopPropagation=function(){if(originalEvent.stopPropagation)originalEvent.stopPropagation();originalEvent.cancelBubble=true;};event.timeStamp=event.timeStamp||now();if(!event.target)event.target=event.srcElement||document;if(event.target.nodeType==3)event.target=event.target.parentNode;if(!event.relatedTarget&&event.fromElement)event.relatedTarget=event.fromElement==event.target?event.toElement:event.fromElement;if(event.pageX==null&&event.clientX!=null){var doc=document.documentElement,body=document.body;event.pageX=event.clientX+(doc&&doc.scrollLeft||body&&body.scrollLeft||0)-(doc.clientLeft||0);event.pageY=event.clientY+(doc&&doc.scrollTop||body&&body.scrollTop||0)-(doc.clientTop||0);}if(!event.which&&((event.charCode||event.charCode===0)?event.charCode:event.keyCode))event.which=event.charCode||event.keyCode;if(!event.metaKey&&event.ctrlKey)event.metaKey=event.ctrlKey;if(!event.which&&event.button)event.which=(event.button&1?1:(event.button&2?3:(event.button&4?2:0)));return event;},proxy:function(fn,proxy){proxy.guid=fn.guid=fn.guid||proxy.guid||this.guid++;return proxy;},special:{ready:{setup:function(){bindReady();return;},teardown:function(){return;}},mouseenter:{setup:function(){if(jQuery.browser.msie)return false;jQuery(this).bind("mouseover",jQuery.event.special.mouseenter.handler);return true;},teardown:function(){if(jQuery.browser.msie)return false;jQuery(this).unbind("mouseover",jQuery.event.special.mouseenter.handler);return true;},handler:function(event){if(withinElement(event,this))return true;event.type="mouseenter";return jQuery.event.handle.apply(this,arguments);}},mouseleave:{setup:function(){if(jQuery.browser.msie)return false;jQuery(this).bind("mouseout",jQuery.event.special.mouseleave.handler);return true;},teardown:function(){if(jQuery.browser.msie)return false;jQuery(this).unbind("mouseout",jQuery.event.special.mouseleave.handler);return true;},handler:function(event){if(withinElement(event,this))return true;event.type="mouseleave";return jQuery.event.handle.apply(this,arguments);}}}};jQuery.fn.extend({bind:function(type,data,fn){return type=="unload"?this.one(type,data,fn):this.each(function(){jQuery.event.add(this,type,fn||data,fn&&data);});},one:function(type,data,fn){var one=jQuery.event.proxy(fn||data,function(event){jQuery(this).unbind(event,one);return(fn||data).apply(this,arguments);});return this.each(function(){jQuery.event.add(this,type,one,fn&&data);});},unbind:function(type,fn){return this.each(function(){jQuery.event.remove(this,type,fn);});},trigger:function(type,data,fn){return this.each(function(){jQuery.event.trigger(type,data,this,true,fn);});},triggerHandler:function(type,data,fn){return this[0]&&jQuery.event.trigger(type,data,this[0],false,fn);},toggle:function(fn){var args=arguments,i=1;while(i<args.length)jQuery.event.proxy(fn,args[i++]);return this.click(jQuery.event.proxy(fn,function(event){this.lastToggle=(this.lastToggle||0)%i;event.preventDefault();return args[this.lastToggle++].apply(this,arguments)||false;}));},hover:function(fnOver,fnOut){return this.bind('mouseenter',fnOver).bind('mouseleave',fnOut);},ready:function(fn){bindReady();if(jQuery.isReady)fn.call(document,jQuery);else
jQuery.readyList.push(function(){return fn.call(this,jQuery);});return this;}});jQuery.extend({isReady:false,readyList:[],ready:function(){if(!jQuery.isReady){jQuery.isReady=true;if(jQuery.readyList){jQuery.each(jQuery.readyList,function(){this.call(document);});jQuery.readyList=null;}jQuery(document).triggerHandler("ready");}}});var readyBound=false;function bindReady(){if(readyBound)return;readyBound=true;if(document.addEventListener&&!jQuery.browser.opera)document.addEventListener("DOMContentLoaded",jQuery.ready,false);if(jQuery.browser.msie&&window==top)(function(){if(jQuery.isReady)return;try{document.documentElement.doScroll("left");}catch(error){setTimeout(arguments.callee,0);return;}jQuery.ready();})();if(jQuery.browser.opera)document.addEventListener("DOMContentLoaded",function(){if(jQuery.isReady)return;for(var i=0;i<document.styleSheets.length;i++)if(document.styleSheets[i].disabled){setTimeout(arguments.callee,0);return;}jQuery.ready();},false);if(jQuery.browser.safari){var numStyles;(function(){if(jQuery.isReady)return;if(document.readyState!="loaded"&&document.readyState!="complete"){setTimeout(arguments.callee,0);return;}if(numStyles===undefined)numStyles=jQuery("style, link[rel=stylesheet]").length;if(document.styleSheets.length!=numStyles){setTimeout(arguments.callee,0);return;}jQuery.ready();})();}jQuery.event.add(window,"load",jQuery.ready);}jQuery.each(("blur,focus,load,resize,scroll,unload,click,dblclick,"+"mousedown,mouseup,mousemove,mouseover,mouseout,change,select,"+"submit,keydown,keypress,keyup,error").split(","),function(i,name){jQuery.fn[name]=function(fn){return fn?this.bind(name,fn):this.trigger(name);};});var withinElement=function(event,elem){var parent=event.relatedTarget;while(parent&&parent!=elem)try{parent=parent.parentNode;}catch(error){parent=elem;}return parent==elem;};jQuery(window).bind("unload",function(){jQuery("*").add(document).unbind();});jQuery.fn.extend({_load:jQuery.fn.load,load:function(url,params,callback){if(typeof url!='string')return this._load(url);var off=url.indexOf(" ");if(off>=0){var selector=url.slice(off,url.length);url=url.slice(0,off);}callback=callback||function(){};var type="GET";if(params)if(jQuery.isFunction(params)){callback=params;params=null;}else{params=jQuery.param(params);type="POST";}var self=this;jQuery.ajax({url:url,type:type,dataType:"html",data:params,complete:function(res,status){if(status=="success"||status=="notmodified")self.html(selector?jQuery("<div/>").append(res.responseText.replace(/<script(.|\s)*?\/script>/g,"")).find(selector):res.responseText);self.each(callback,[res.responseText,status,res]);}});return this;},serialize:function(){return jQuery.param(this.serializeArray());},serializeArray:function(){return this.map(function(){return jQuery.nodeName(this,"form")?jQuery.makeArray(this.elements):this;}).filter(function(){return this.name&&!this.disabled&&(this.checked||/select|textarea/i.test(this.nodeName)||/text|hidden|password/i.test(this.type));}).map(function(i,elem){var val=jQuery(this).val();return val==null?null:val.constructor==Array?jQuery.map(val,function(val,i){return{name:elem.name,value:val};}):{name:elem.name,value:val};}).get();}});jQuery.each("ajaxStart,ajaxStop,ajaxComplete,ajaxError,ajaxSuccess,ajaxSend".split(","),function(i,o){jQuery.fn[o]=function(f){return this.bind(o,f);};});var jsc=now();jQuery.extend({get:function(url,data,callback,type){if(jQuery.isFunction(data)){callback=data;data=null;}return jQuery.ajax({type:"GET",url:url,data:data,success:callback,dataType:type});},getScript:function(url,callback){return jQuery.get(url,null,callback,"script");},getJSON:function(url,data,callback){return jQuery.get(url,data,callback,"json");},post:function(url,data,callback,type){if(jQuery.isFunction(data)){callback=data;data={};}return jQuery.ajax({type:"POST",url:url,data:data,success:callback,dataType:type});},ajaxSetup:function(settings){jQuery.extend(jQuery.ajaxSettings,settings);},ajaxSettings:{url:location.href,global:true,type:"GET",timeout:0,contentType:"application/x-www-form-urlencoded",processData:true,async:true,data:null,username:null,password:null,accepts:{xml:"application/xml, text/xml",html:"text/html",script:"text/javascript, application/javascript",json:"application/json, text/javascript",text:"text/plain",_default:"*/*"}},lastModified:{},ajax:function(s){s=jQuery.extend(true,s,jQuery.extend(true,{},jQuery.ajaxSettings,s));var jsonp,jsre=/=\?(&|$)/g,status,data,type=s.type.toUpperCase();if(s.data&&s.processData&&typeof s.data!="string")s.data=jQuery.param(s.data);if(s.dataType=="jsonp"){if(type=="GET"){if(!s.url.match(jsre))s.url+=(s.url.match(/\?/)?"&":"?")+(s.jsonp||"callback")+"=?";}else if(!s.data||!s.data.match(jsre))s.data=(s.data?s.data+"&":"")+(s.jsonp||"callback")+"=?";s.dataType="json";}if(s.dataType=="json"&&(s.data&&s.data.match(jsre)||s.url.match(jsre))){jsonp="jsonp"+jsc++;if(s.data)s.data=(s.data+"").replace(jsre,"="+jsonp+"$1");s.url=s.url.replace(jsre,"="+jsonp+"$1");s.dataType="script";window[jsonp]=function(tmp){data=tmp;success();complete();window[jsonp]=undefined;try{delete window[jsonp];}catch(e){}if(head)head.removeChild(script);};}if(s.dataType=="script"&&s.cache==null)s.cache=false;if(s.cache===false&&type=="GET"){var ts=now();var ret=s.url.replace(/(\?|&)_=.*?(&|$)/,"$1_="+ts+"$2");s.url=ret+((ret==s.url)?(s.url.match(/\?/)?"&":"?")+"_="+ts:"");}if(s.data&&type=="GET"){s.url+=(s.url.match(/\?/)?"&":"?")+s.data;s.data=null;}if(s.global&&!jQuery.active++)jQuery.event.trigger("ajaxStart");var remote=/^(?:\w+:)?\/\/([^\/?#]+)/;if(s.dataType=="script"&&type=="GET"&&remote.test(s.url)&&remote.exec(s.url)[1]!=location.host){var head=document.getElementsByTagName("head")[0];var script=document.createElement("script");script.src=s.url;if(s.scriptCharset)script.charset=s.scriptCharset;if(!jsonp){var done=false;script.onload=script.onreadystatechange=function(){if(!done&&(!this.readyState||this.readyState=="loaded"||this.readyState=="complete")){done=true;success();complete();head.removeChild(script);}};}head.appendChild(script);return undefined;}var requestDone=false;var xhr=window.ActiveXObject?new ActiveXObject("Microsoft.XMLHTTP"):new XMLHttpRequest();if(s.username)xhr.open(type,s.url,s.async,s.username,s.password);else
xhr.open(type,s.url,s.async);try{if(s.data)xhr.setRequestHeader("Content-Type",s.contentType);if(s.ifModified)xhr.setRequestHeader("If-Modified-Since",jQuery.lastModified[s.url]||"Thu, 01 Jan 1970 00:00:00 GMT");xhr.setRequestHeader("X-Requested-With","XMLHttpRequest");xhr.setRequestHeader("Accept",s.dataType&&s.accepts[s.dataType]?s.accepts[s.dataType]+", */*":s.accepts._default);}catch(e){}if(s.beforeSend&&s.beforeSend(xhr,s)===false){s.global&&jQuery.active--;xhr.abort();return false;}if(s.global)jQuery.event.trigger("ajaxSend",[xhr,s]);var onreadystatechange=function(isTimeout){if(!requestDone&&xhr&&(xhr.readyState==4||isTimeout=="timeout")){requestDone=true;if(ival){clearInterval(ival);ival=null;}status=isTimeout=="timeout"&&"timeout"||!jQuery.httpSuccess(xhr)&&"error"||s.ifModified&&jQuery.httpNotModified(xhr,s.url)&&"notmodified"||"success";if(status=="success"){try{data=jQuery.httpData(xhr,s.dataType,s.dataFilter);}catch(e){status="parsererror";}}if(status=="success"){var modRes;try{modRes=xhr.getResponseHeader("Last-Modified");}catch(e){}if(s.ifModified&&modRes)jQuery.lastModified[s.url]=modRes;if(!jsonp)success();}else
jQuery.handleError(s,xhr,status);complete();if(s.async)xhr=null;}};if(s.async){var ival=setInterval(onreadystatechange,13);if(s.timeout>0)setTimeout(function(){if(xhr){xhr.abort();if(!requestDone)onreadystatechange("timeout");}},s.timeout);}try{xhr.send(s.data);}catch(e){jQuery.handleError(s,xhr,null,e);}if(!s.async)onreadystatechange();function success(){if(s.success)s.success(data,status);if(s.global)jQuery.event.trigger("ajaxSuccess",[xhr,s]);}function complete(){if(s.complete)s.complete(xhr,status);if(s.global)jQuery.event.trigger("ajaxComplete",[xhr,s]);if(s.global&&!--jQuery.active)jQuery.event.trigger("ajaxStop");}return xhr;},handleError:function(s,xhr,status,e){if(s.error)s.error(xhr,status,e);if(s.global)jQuery.event.trigger("ajaxError",[xhr,s,e]);},active:0,httpSuccess:function(xhr){try{return!xhr.status&&location.protocol=="file:"||(xhr.status>=200&&xhr.status<300)||xhr.status==304||xhr.status==1223||jQuery.browser.safari&&xhr.status==undefined;}catch(e){}return false;},httpNotModified:function(xhr,url){try{var xhrRes=xhr.getResponseHeader("Last-Modified");return xhr.status==304||xhrRes==jQuery.lastModified[url]||jQuery.browser.safari&&xhr.status==undefined;}catch(e){}return false;},httpData:function(xhr,type,filter){var ct=xhr.getResponseHeader("content-type"),xml=type=="xml"||!type&&ct&&ct.indexOf("xml")>=0,data=xml?xhr.responseXML:xhr.responseText;if(xml&&data.documentElement.tagName=="parsererror")throw"parsererror";if(filter)data=filter(data,type);if(type=="script")jQuery.globalEval(data);if(type=="json")data=eval("("+data+")");return data;},param:function(a){var s=[];if(a.constructor==Array||a.jquery)jQuery.each(a,function(){s.push(encodeURIComponent(this.name)+"="+encodeURIComponent(this.value));});else
for(var j in a)if(a[j]&&a[j].constructor==Array)jQuery.each(a[j],function(){s.push(encodeURIComponent(j)+"="+encodeURIComponent(this));});else
s.push(encodeURIComponent(j)+"="+encodeURIComponent(jQuery.isFunction(a[j])?a[j]():a[j]));return s.join("&").replace(/%20/g,"+");}});jQuery.fn.extend({show:function(speed,callback){return speed?this.animate({height:"show",width:"show",opacity:"show"},speed,callback):this.filter(":hidden").each(function(){this.style.display=this.oldblock||"";if(jQuery.css(this,"display")=="none"){var elem=jQuery("<"+this.tagName+" />").appendTo("body");this.style.display=elem.css("display");if(this.style.display=="none")this.style.display="block";elem.remove();}}).end();},hide:function(speed,callback){return speed?this.animate({height:"hide",width:"hide",opacity:"hide"},speed,callback):this.filter(":visible").each(function(){this.oldblock=this.oldblock||jQuery.css(this,"display");this.style.display="none";}).end();},_toggle:jQuery.fn.toggle,toggle:function(fn,fn2){return jQuery.isFunction(fn)&&jQuery.isFunction(fn2)?this._toggle.apply(this,arguments):fn?this.animate({height:"toggle",width:"toggle",opacity:"toggle"},fn,fn2):this.each(function(){jQuery(this)[jQuery(this).is(":hidden")?"show":"hide"]();});},slideDown:function(speed,callback){return this.animate({height:"show"},speed,callback);},slideUp:function(speed,callback){return this.animate({height:"hide"},speed,callback);},slideToggle:function(speed,callback){return this.animate({height:"toggle"},speed,callback);},fadeIn:function(speed,callback){return this.animate({opacity:"show"},speed,callback);},fadeOut:function(speed,callback){return this.animate({opacity:"hide"},speed,callback);},fadeTo:function(speed,to,callback){return this.animate({opacity:to},speed,callback);},animate:function(prop,speed,easing,callback){var optall=jQuery.speed(speed,easing,callback);return this[optall.queue===false?"each":"queue"](function(){if(this.nodeType!=1)return false;var opt=jQuery.extend({},optall),p,hidden=jQuery(this).is(":hidden"),self=this;for(p in prop){if(prop[p]=="hide"&&hidden||prop[p]=="show"&&!hidden)return opt.complete.call(this);if(p=="height"||p=="width"){opt.display=jQuery.css(this,"display");opt.overflow=this.style.overflow;}}if(opt.overflow!=null)this.style.overflow="hidden";opt.curAnim=jQuery.extend({},prop);jQuery.each(prop,function(name,val){var e=new jQuery.fx(self,opt,name);if(/toggle|show|hide/.test(val))e[val=="toggle"?hidden?"show":"hide":val](prop);else{var parts=val.toString().match(/^([+-]=)?([\d+-.]+)(.*)$/),start=e.cur(true)||0;if(parts){var end=parseFloat(parts[2]),unit=parts[3]||"px";if(unit!="px"){self.style[name]=(end||1)+unit;start=((end||1)/e.cur(true))*start;self.style[name]=start+unit;}if(parts[1])end=((parts[1]=="-="?-1:1)*end)+start;e.custom(start,end,unit);}else
e.custom(start,val,"");}});return true;});},queue:function(type,fn){if(jQuery.isFunction(type)||(type&&type.constructor==Array)){fn=type;type="fx";}if(!type||(typeof type=="string"&&!fn))return queue(this[0],type);return this.each(function(){if(fn.constructor==Array)queue(this,type,fn);else{queue(this,type).push(fn);if(queue(this,type).length==1)fn.call(this);}});},stop:function(clearQueue,gotoEnd){var timers=jQuery.timers;if(clearQueue)this.queue([]);this.each(function(){for(var i=timers.length-1;i>=0;i--)if(timers[i].elem==this){if(gotoEnd)timers[i](true);timers.splice(i,1);}});if(!gotoEnd)this.dequeue();return this;}});var queue=function(elem,type,array){if(elem){type=type||"fx";var q=jQuery.data(elem,type+"queue");if(!q||array)q=jQuery.data(elem,type+"queue",jQuery.makeArray(array));}return q;};jQuery.fn.dequeue=function(type){type=type||"fx";return this.each(function(){var q=queue(this,type);q.shift();if(q.length)q[0].call(this);});};jQuery.extend({speed:function(speed,easing,fn){var opt=speed&&speed.constructor==Object?speed:{complete:fn||!fn&&easing||jQuery.isFunction(speed)&&speed,duration:speed,easing:fn&&easing||easing&&easing.constructor!=Function&&easing};opt.duration=(opt.duration&&opt.duration.constructor==Number?opt.duration:jQuery.fx.speeds[opt.duration])||jQuery.fx.speeds.def;opt.old=opt.complete;opt.complete=function(){if(opt.queue!==false)jQuery(this).dequeue();if(jQuery.isFunction(opt.old))opt.old.call(this);};return opt;},easing:{linear:function(p,n,firstNum,diff){return firstNum+diff*p;},swing:function(p,n,firstNum,diff){return((-Math.cos(p*Math.PI)/2)+0.5)*diff+firstNum;}},timers:[],timerId:null,fx:function(elem,options,prop){this.options=options;this.elem=elem;this.prop=prop;if(!options.orig)options.orig={};}});jQuery.fx.prototype={update:function(){if(this.options.step)this.options.step.call(this.elem,this.now,this);(jQuery.fx.step[this.prop]||jQuery.fx.step._default)(this);if(this.prop=="height"||this.prop=="width")this.elem.style.display="block";},cur:function(force){if(this.elem[this.prop]!=null&&this.elem.style[this.prop]==null)return this.elem[this.prop];var r=parseFloat(jQuery.css(this.elem,this.prop,force));return r&&r>-10000?r:parseFloat(jQuery.curCSS(this.elem,this.prop))||0;},custom:function(from,to,unit){this.startTime=now();this.start=from;this.end=to;this.unit=unit||this.unit||"px";this.now=this.start;this.pos=this.state=0;this.update();var self=this;function t(gotoEnd){return self.step(gotoEnd);}t.elem=this.elem;jQuery.timers.push(t);if(jQuery.timerId==null){jQuery.timerId=setInterval(function(){var timers=jQuery.timers;for(var i=0;i<timers.length;i++)if(!timers[i]())timers.splice(i--,1);if(!timers.length){clearInterval(jQuery.timerId);jQuery.timerId=null;}},13);}},show:function(){this.options.orig[this.prop]=jQuery.attr(this.elem.style,this.prop);this.options.show=true;this.custom(0,this.cur());if(this.prop=="width"||this.prop=="height")this.elem.style[this.prop]="1px";jQuery(this.elem).show();},hide:function(){this.options.orig[this.prop]=jQuery.attr(this.elem.style,this.prop);this.options.hide=true;this.custom(this.cur(),0);},step:function(gotoEnd){var t=now();if(gotoEnd||t>this.options.duration+this.startTime){this.now=this.end;this.pos=this.state=1;this.update();this.options.curAnim[this.prop]=true;var done=true;for(var i in this.options.curAnim)if(this.options.curAnim[i]!==true)done=false;if(done){if(this.options.display!=null){this.elem.style.overflow=this.options.overflow;this.elem.style.display=this.options.display;if(jQuery.css(this.elem,"display")=="none")this.elem.style.display="block";}if(this.options.hide)this.elem.style.display="none";if(this.options.hide||this.options.show)for(var p in this.options.curAnim)jQuery.attr(this.elem.style,p,this.options.orig[p]);}if(done)this.options.complete.call(this.elem);return false;}else{var n=t-this.startTime;this.state=n/this.options.duration;this.pos=jQuery.easing[this.options.easing||(jQuery.easing.swing?"swing":"linear")](this.state,n,0,1,this.options.duration);this.now=this.start+((this.end-this.start)*this.pos);this.update();}return true;}};jQuery.extend(jQuery.fx,{speeds:{slow:600,fast:200,def:400},step:{scrollLeft:function(fx){fx.elem.scrollLeft=fx.now;},scrollTop:function(fx){fx.elem.scrollTop=fx.now;},opacity:function(fx){jQuery.attr(fx.elem.style,"opacity",fx.now);},_default:function(fx){fx.elem.style[fx.prop]=fx.now+fx.unit;}}});jQuery.fn.offset=function(){var left=0,top=0,elem=this[0],results;if(elem)with(jQuery.browser){var parent=elem.parentNode,offsetChild=elem,offsetParent=elem.offsetParent,doc=elem.ownerDocument,safari2=safari&&parseInt(version)<522&&!/adobeair/i.test(userAgent),css=jQuery.curCSS,fixed=css(elem,"position")=="fixed";if(elem.getBoundingClientRect){var box=elem.getBoundingClientRect();add(box.left+Math.max(doc.documentElement.scrollLeft,doc.body.scrollLeft),box.top+Math.max(doc.documentElement.scrollTop,doc.body.scrollTop));add(-doc.documentElement.clientLeft,-doc.documentElement.clientTop);}else{add(elem.offsetLeft,elem.offsetTop);while(offsetParent){add(offsetParent.offsetLeft,offsetParent.offsetTop);if(mozilla&&!/^t(able|d|h)$/i.test(offsetParent.tagName)||safari&&!safari2)border(offsetParent);if(!fixed&&css(offsetParent,"position")=="fixed")fixed=true;offsetChild=/^body$/i.test(offsetParent.tagName)?offsetChild:offsetParent;offsetParent=offsetParent.offsetParent;}while(parent&&parent.tagName&&!/^body|html$/i.test(parent.tagName)){if(!/^inline|table.*$/i.test(css(parent,"display")))add(-parent.scrollLeft,-parent.scrollTop);if(mozilla&&css(parent,"overflow")!="visible")border(parent);parent=parent.parentNode;}if((safari2&&(fixed||css(offsetChild,"position")=="absolute"))||(mozilla&&css(offsetChild,"position")!="absolute"))add(-doc.body.offsetLeft,-doc.body.offsetTop);if(fixed)add(Math.max(doc.documentElement.scrollLeft,doc.body.scrollLeft),Math.max(doc.documentElement.scrollTop,doc.body.scrollTop));}results={top:top,left:left};}function border(elem){add(jQuery.curCSS(elem,"borderLeftWidth",true),jQuery.curCSS(elem,"borderTopWidth",true));}function add(l,t){left+=parseInt(l,10)||0;top+=parseInt(t,10)||0;}return results;};jQuery.fn.extend({position:function(){var left=0,top=0,results;if(this[0]){var offsetParent=this.offsetParent(),offset=this.offset(),parentOffset=/^body|html$/i.test(offsetParent[0].tagName)?{top:0,left:0}:offsetParent.offset();offset.top-=num(this,'marginTop');offset.left-=num(this,'marginLeft');parentOffset.top+=num(offsetParent,'borderTopWidth');parentOffset.left+=num(offsetParent,'borderLeftWidth');results={top:offset.top-parentOffset.top,left:offset.left-parentOffset.left};}return results;},offsetParent:function(){var offsetParent=this[0].offsetParent;while(offsetParent&&(!/^body|html$/i.test(offsetParent.tagName)&&jQuery.css(offsetParent,'position')=='static'))offsetParent=offsetParent.offsetParent;return jQuery(offsetParent);}});jQuery.each(['Left','Top'],function(i,name){var method='scroll'+name;jQuery.fn[method]=function(val){if(!this[0])return;return val!=undefined?this.each(function(){this==window||this==document?window.scrollTo(!i?val:jQuery(window).scrollLeft(),i?val:jQuery(window).scrollTop()):this[method]=val;}):this[0]==window||this[0]==document?self[i?'pageYOffset':'pageXOffset']||jQuery.boxModel&&document.documentElement[method]||document.body[method]:this[0][method];};});jQuery.each(["Height","Width"],function(i,name){var tl=i?"Left":"Top",br=i?"Right":"Bottom";jQuery.fn["inner"+name]=function(){return this[name.toLowerCase()]()+num(this,"padding"+tl)+num(this,"padding"+br);};jQuery.fn["outer"+name]=function(margin){return this["inner"+name]()+num(this,"border"+tl+"Width")+num(this,"border"+br+"Width")+(margin?num(this,"margin"+tl)+num(this,"margin"+br):0);};});})();
//initialize jQuery into the MindTouch namespace
if(typeof DekiWiki == "undefined") {
    var DekiWiki = {};
}
DekiWiki.$ = jQuery.noConflict();


jQuery.fn.extend({
   check: function() {
     return this.each(function() { this.checked = true; });
   },
   uncheck: function() {
     return this.each(function() { this.checked = false; });
   }
});

function MTComments() {};
MTComments.ViewingAll = false;

MTComments.HookBehavior = function() {
	MTComments.HookSubmitOnclick();
};

//will make adding comments an inline experience
MTComments.HookSubmitOnclick = function() {
	DekiWiki.$('#commentSubmit').click(function() {
		var cn = document.getElementById('wpCommentNum');
		if (cn && cn.value > 0) {
			return;
		}
		MTComments.PostComment();
		return false;
	});
};

MTComments.PostComment = function(commentnum) {
	x_postComment(_page_ID, document.getElementById('wpComment').value, MTComments.ViewingAll, commentnum, function(t) {
		MTComments.SetComment(t);
		return false;
	});		
};
MTComments.ShowComment = function(commentnum) {
	var commentform = document.getElementById('commentTextForm'+commentnum);
	var commenttext = document.getElementById('commentText'+commentnum);
	
	if (!commentform || !commenttext)
		return false;
		
	commenttext.style.display = 'block';
	commentform.style.display = 'none';
};

MTComments.EditComment = function(commentnum) {
	var commentform = document.getElementById('commentTextForm'+commentnum);
	var commenttext = document.getElementById('commentText'+commentnum);
	
	if (!commentform || !commenttext)
		return false;
		
	//if the comment form hasn't already been loaded
	if (commentform.innerHTML == '') {
		x_editComment(_page_ID, commentnum, function(t) {
			commentform.innerHTML = t;
			//hook behavior to cancel link
			DekiWiki.$('#wpComment').focus();
			document.getElementById('commentCancel'+commentnum).onclick = function() {
				MTComments.ShowComment(commentnum);
				return false;	
			};
			document.getElementById('commentSubmit').onclick = function() {
				MTComments.PostComment(commentnum);
				return false;
			};
		});	
	}
	
	commenttext.style.display = 'none';
	commentform.style.display = 'block';
	
	return false;
};

MTComments.DeleteComment = function(commentnum) {
	if (confirm(wfMsg('comment-delete'))) {
		x_deleteComment(_page_ID, commentnum, function(t) {
			document.getElementById('comment'+commentnum).innerHTML = t;
			return false;
		});	
	}
	return false;
};

MTComments.GetComments = function(commentcount) {
	if (commentcount == 'all') {
		MTComments.ViewingAll = true;
	}
	x_getComments(_page_ID, commentcount, function(t) {
		MTComments.SetComment(t);
		return false;
	});
	return false;
};

MTComments.SetComment = function(markup) {
	document.getElementById('comments').innerHTML = markup;	
	new MTComments.HookBehavior;
};

//hook is in /skins/common/javascript.php

/*
 * Thickbox 3.1 - One Box To Rule Them All.
 * By Cody Lindley (http://www.codylindley.com)
 * Copyright (c) 2007 cody lindley
 * Licensed under the MIT License: http://www.opensource.org/licenses/mit-license.php
*/
		  
var tb_pathToImage = "/skins/common/jquery/thickbox/loadingAnimation.gif";

/*!!!!!!!!!!!!!!!!! edit below this line at your own risk !!!!!!!!!!!!!!!!!!!!!!!*/

//on page load call tb_init
//moved to /skins/common/javascript.php

//add thickbox to href & area elements that have a class of .thickbox
function tb_init(domChunk){
	DekiWiki.$(domChunk).unbind('onclick');
	DekiWiki.$(domChunk).click(function(){
	var t = this.title || this.name || null;
	var a = this.href || this.alt;
	var g = this.rel || false;
	tb_show(t,a,g);
	this.blur();
	return false;
	});
}

function tb_show(caption, url, imageGroup) {//function called when the user clicks on a thickbox link

	try {
		if (typeof document.body.style.maxHeight === "undefined") {//if IE 6
			DekiWiki.$("body","html").css({height: "100%", width: "100%"});
			DekiWiki.$("html").css("overflow","hidden");
			if (document.getElementById("TB_HideSelect") === null) {//iframe to hide select elements in ie6
				DekiWiki.$("body").append("<iframe id='TB_HideSelect'></iframe><div id='TB_overlay'></div><div id='TB_window'></div>");
				DekiWiki.$("#TB_overlay").click(tb_remove);
			}
		}else{//all others
			if(document.getElementById("TB_overlay") === null){
				DekiWiki.$("body").append("<div id='TB_overlay'></div><div id='TB_window'></div>");
				DekiWiki.$("#TB_overlay").click(tb_remove);
			}
		}
		
		if(tb_detectMacXFF()){
			DekiWiki.$("#TB_overlay").addClass("TB_overlayMacFFBGHack");//use png overlay so hide flash
		}else{
			DekiWiki.$("#TB_overlay").addClass("TB_overlayBG");//use background and opacity
		}
		
		if(caption===null){caption="";}
		DekiWiki.$("body").append("<div id='TB_load'><img src='"+imgLoader.src+"' /></div>");//add loader to the page
		DekiWiki.$('#TB_load').show();//show loader
		
		var baseURL;
	   if(url.indexOf("?")!==-1){ //ff there is a query string involved
			baseURL = url.substr(0, url.indexOf("?"));
	   }else{ 
	   		baseURL = url;
	   }
	   
	   var urlString = /\.jpg$|\.jpeg$|\.png$|\.gif$|\.bmp$/;
	   var urlType = baseURL.toLowerCase().match(urlString);

		if(imageGroup || urlType == '.jpg' || urlType == '.jpeg' || urlType == '.png' || urlType == '.gif' || urlType == '.bmp'){//code to show images
				
			TB_PrevCaption = "";
			TB_PrevURL = "";
			TB_PrevHTML = "";
			TB_NextCaption = "";
			TB_NextURL = "";
			TB_NextHTML = "";
			TB_imageCount = "";
			TB_FoundURL = false;
			if(imageGroup){
				TB_TempArray = DekiWiki.$("a[@rel="+imageGroup+"]").get();
				for (TB_Counter = 0; ((TB_Counter < TB_TempArray.length) && (TB_NextHTML === "")); TB_Counter++) {
					var urlTypeTemp = TB_TempArray[TB_Counter].href.toLowerCase().match(urlString);
					if (!(TB_TempArray[TB_Counter].href == url)) {						
						if (TB_FoundURL) {
							TB_NextCaption = TB_TempArray[TB_Counter].title;
							TB_NextURL = TB_TempArray[TB_Counter].href;
							TB_NextHTML = '<span id="TB_next"><a href="#">'+wfMsg('gallery-next')+' &#187;</a></span>';
						} else {
							TB_PrevCaption = TB_TempArray[TB_Counter].title;
							TB_PrevURL = TB_TempArray[TB_Counter].href;
							TB_PrevHTML = '<span id="TB_prev"><a href="#">&#171; '+wfMsg('gallery-prev')+'</a></span>';
						}
					} else {
						TB_FoundURL = true;
						TB_imageCount = " Image " + (TB_Counter + 1) +" of "+ (TB_TempArray.length) + ' ';											
					}
				}
			}
			
			if (TB_PrevHTML == '') {
				TB_PrevHTML = '<span id="TB_prev">&#171; '+wfMsg('gallery-prev')+'</span>';
			}
			
			if (TB_NextHTML == '') {
				TB_NextHTML = '<span id="TB_next">'+wfMsg('gallery-next')+' &#187;</span>';
			}
			imgPreloader = new Image();
			imgPreloader.onload = function(){		
			imgPreloader.onload = null;
				
			// Resizing large images - orginal by Christian Montoya edited by me.
			var pagesize = tb_getPageSize();
			var x = pagesize[0] - 150;
			var y = pagesize[1] - 150;
			var imageWidth = imgPreloader.width;
			var imageHeight = imgPreloader.height;
			if (imageWidth > x) {
				imageHeight = imageHeight * (x / imageWidth); 
				imageWidth = x; 
				if (imageHeight > y) { 
					imageWidth = imageWidth * (y / imageHeight); 
					imageHeight = y; 
				}
			} else if (imageHeight > y) { 
				imageWidth = imageWidth * (y / imageHeight); 
				imageHeight = y; 
				if (imageWidth > x) { 
					imageHeight = imageHeight * (x / imageWidth); 
					imageWidth = x;
				}
			}
			// End Resizing
			
			TB_WIDTH = imageWidth + 30;
			TB_HEIGHT = imageHeight + 60;
			
			// karena: IE doesn't support min-width
			if ( TB_WIDTH < 250 && jQuery.browser.msie && jQuery.browser.version < 7 )
			{
			    TB_WIDTH = 250;
			}
			
			DekiWiki.$("#TB_window").append("<div id='TB_secondLine'>"+ '<div class="TB_navigate">'+TB_PrevHTML + ' ' + TB_NextHTML + '</div>' + TB_imageCount + "</div><a href='' id='TB_ImageOff' title='Close'><img id='TB_Image' src='"+url+"' width='"+imageWidth+"' height='"+imageHeight+"' alt='"+caption+"'/></a>" + "<div id='TB_caption'>"+caption+"</div><div id='TB_closeWindow'><a href='#' id='TB_closeWindowButton' title='"+wfMsg('gallery-close')+"'>"+wfMsg('gallery-close')+"</a></div>"); 		
			
			DekiWiki.$("#TB_closeWindowButton").click(tb_remove);
			
			if (!(TB_PrevHTML === "")) {
				function goPrev(){
					if(DekiWiki.$(document).unbind("click",goPrev)){DekiWiki.$(document).unbind("click",goPrev);}
					DekiWiki.$("#TB_window").remove();
					DekiWiki.$("body").append("<div id='TB_window'></div>");
					tb_show(TB_PrevCaption, TB_PrevURL, imageGroup);
					return false;	
				}
				DekiWiki.$("#TB_prev").click(goPrev);
			}
			
			if (!(TB_NextHTML === "")) {		
				function goNext(){
					DekiWiki.$("#TB_window").remove();
					DekiWiki.$("body").append("<div id='TB_window'></div>");
					tb_show(TB_NextCaption, TB_NextURL, imageGroup);				
					return false;	
				}
				DekiWiki.$("#TB_next").click(goNext);
				
			}

			document.onkeydown = function(e){ 	
				if (e == null) { // ie
					keycode = event.keyCode;
				} else { // mozilla
					keycode = e.which;
				}
				if(keycode == 27){ // close
					tb_remove();
				} else if(keycode == 190){ // display previous image
					if(!(TB_NextHTML == "")){
						document.onkeydown = "";
						goNext();
					}
				} else if(keycode == 188){ // display next image
					if(!(TB_PrevHTML == "")){
						document.onkeydown = "";
						goPrev();
					}
				}	
			};
			
			tb_position();
			DekiWiki.$("#TB_load").remove();
			DekiWiki.$("#TB_ImageOff").click(tb_remove);
			DekiWiki.$("#TB_window").css({display:"block"}); //for safari using css instead of show
			};
			
			imgPreloader.src = url;
		}else{//code to show html
			
			var queryString = url.replace(/^[^\?]+\??/,'');
			var params = tb_parseQuery( queryString );

			TB_WIDTH = (params['width']*1) + 30 || (typeof(winX) == 'undefined' ? 630: winX * .90); //defaults to 630 if no paramaters were added to URL
			TB_HEIGHT = (params['height']*1) + 40 || (typeof(winY) == 'undefined' ? 440: winY * .90); //defaults to 440 if no paramaters were added to URL
			
			ajaxContentW = TB_WIDTH - 30;
			ajaxContentH = TB_HEIGHT - 45;
			
			if(url.indexOf('TB_iframe') != -1){// either iframe or ajax window		
					urlNoQuery = url.split('TB_');
					DekiWiki.$("#TB_iframeContent").remove();
					if(params['modal'] != "true"){//iframe no modal
						DekiWiki.$("#TB_window").append("<div id='TB_title'><div id='TB_ajaxWindowTitle'>"+caption+"</div><div id='TB_closeAjaxWindow'><a href='#' id='TB_closeWindowButton' title='"+wfMsg('gallery-close')+"'><span></span>"+wfMsg('gallery-close')+"</a></div></div><iframe frameborder='0' hspace='0' src='"+urlNoQuery[0]+"' id='TB_iframeContent' name='TB_iframeContent"+Math.round(Math.random()*1000)+"' onload='tb_showIframe()' style='width:"+(ajaxContentW + 29)+"px;height:"+(ajaxContentH + 17)+"px;' > </iframe>");
					}else{//iframe modal
					DekiWiki.$("#TB_overlay").unbind();
						DekiWiki.$("#TB_window").append("<iframe frameborder='0' hspace='0' src='"+urlNoQuery[0]+"' id='TB_iframeContent' name='TB_iframeContent"+Math.round(Math.random()*1000)+"' onload='tb_showIframe()' style='width:"+(ajaxContentW + 29)+"px;height:"+(ajaxContentH + 17)+"px;'> </iframe>");
					}
			}else{// not an iframe, ajax
					if(DekiWiki.$("#TB_window").css("display") != "block"){
						if(params['modal'] != "true"){//ajax no modal
						DekiWiki.$("#TB_window").append("<div id='TB_title'><div id='TB_ajaxWindowTitle'>"+caption+"</div><div id='TB_closeAjaxWindow'><a href='#' id='TB_closeWindowButton'><span></span>"+wfMsg('gallery-close')+"</a></div></div><div id='TB_ajaxContent' style='width:"+ajaxContentW+"px;height:"+ajaxContentH+"px'></div>");
						}else{//ajax modal
						DekiWiki.$("#TB_overlay").unbind();
						DekiWiki.$("#TB_window").append("<div id='TB_ajaxContent' class='TB_modal' style='width:"+ajaxContentW+"px;height:"+ajaxContentH+"px;'></div>");	
						}
					}else{//this means the window is already up, we are just loading new content via ajax
						DekiWiki.$("#TB_ajaxContent")[0].style.width = ajaxContentW +"px";
						DekiWiki.$("#TB_ajaxContent")[0].style.height = ajaxContentH +"px";
						DekiWiki.$("#TB_ajaxContent")[0].scrollTop = 0;
						DekiWiki.$("#TB_ajaxWindowTitle").html(caption);
					}
			}
					
			DekiWiki.$("#TB_closeWindowButton").click(tb_remove);
			
				if(url.indexOf('TB_inline') != -1){	
					DekiWiki.$("#TB_ajaxContent").append(DekiWiki.$('#' + params['inlineId']).children());
					DekiWiki.$("#TB_window").unload(function () {
						DekiWiki.$('#' + params['inlineId']).append( DekiWiki.$("#TB_ajaxContent").children() ); // move elements back when you're finished
					});
					tb_position();
					DekiWiki.$("#TB_load").remove();
					DekiWiki.$("#TB_window").css({display:"block"}); 
				}else if(url.indexOf('TB_iframe') != -1){
					tb_position();
					if($.browser.safari){//safari needs help because it will not fire iframe onload
						DekiWiki.$("#TB_load").remove();
						DekiWiki.$("#TB_window").css({display:"block"});
					}
				}else{
					DekiWiki.$("#TB_ajaxContent").load(url += "&random=" + (new Date().getTime()),function(){//to do a post change this load method
						tb_position();
						DekiWiki.$("#TB_load").remove();
						tb_init("#TB_ajaxContent a.lightbox");
						DekiWiki.$("#TB_window").css({display:"block"});
					});
				}
			
		}

		if(!params['modal']){
			document.onkeyup = function(e){ 	
				if (e == null) { // ie
					keycode = event.keyCode;
				} else { // mozilla
					keycode = e.which;
				}
				if(keycode == 27){ // close
					tb_remove();
				}	
			};
		}
		
	} catch(e) {
		//nothing here
	}
}

//helper functions below
function tb_showIframe(){
	DekiWiki.$("#TB_load").remove();
	DekiWiki.$("#TB_window").css({display:"block"});
}

function tb_remove() {
 	DekiWiki.$("#TB_imageOff").unbind("click");
	DekiWiki.$("#TB_closeWindowButton").unbind("click");
	DekiWiki.$("#TB_window").fadeOut("fast",function(){DekiWiki.$('#TB_window,#TB_overlay,#TB_HideSelect').trigger("unload").unbind().remove();});
	DekiWiki.$("#TB_load").remove();
	if (typeof document.body.style.maxHeight == "undefined") {//if IE 6
		DekiWiki.$("body","html").css({height: "auto", width: "auto"});
		DekiWiki.$("html").css("overflow","");
	}
	document.onkeydown = "";
	document.onkeyup = "";
	return false;
}

function tb_position() {
DekiWiki.$("#TB_window").css({marginLeft: '-' + parseInt((TB_WIDTH / 2),10) + 'px', width: TB_WIDTH + 'px'});
	if ( !(jQuery.browser.msie && jQuery.browser.version < 7)) { // take away IE6
		DekiWiki.$("#TB_window").css({marginTop: '-' + parseInt((TB_HEIGHT / 2),10) + 'px'});
	}
}

function tb_parseQuery ( query ) {
   var Params = {};
   if ( ! query ) {return Params;}// return empty object
   var Pairs = query.split(/[;&]/);
   for ( var i = 0; i < Pairs.length; i++ ) {
      var KeyVal = Pairs[i].split('=');
      if ( ! KeyVal || KeyVal.length != 2 ) {continue;}
      var key = unescape( KeyVal[0] );
      var val = unescape( KeyVal[1] );
      val = val.replace(/\+/g, ' ');
      Params[key] = val;
   }
   return Params;
}

function tb_getPageSize(){
	var de = document.documentElement;
	var w = window.innerWidth || self.innerWidth || (de&&de.clientWidth) || document.body.clientWidth;
	var h = window.innerHeight || self.innerHeight || (de&&de.clientHeight) || document.body.clientHeight;
	arrayPageSize = [w,h];
	return arrayPageSize;
}

function tb_detectMacXFF() {
  var userAgent = navigator.userAgent.toLowerCase();
  if (userAgent.indexOf('mac') != -1 && userAgent.indexOf('firefox')!=-1) {
    return true;
  }
}




/**
 * Copyright (c) 2006-2007, TIBCO Software Inc.
 * Use, modification, and distribution subject to terms of license.
 * 
 * TIBCO(R) PageBus 1.1.0
 */

if(typeof window.PageBus == 'undefined') {

PageBus = {
	version: "1.1.0",
	S: {c:{},s:[]},                 
	X: 0,
	P: 0,
	U: [],
	H: "undefined"
};

PageBus.subscribe = function(name, scope, callback, subscriberData)			
{
	if(name == null)
		this._badName();
	if(scope == null)
		scope = window;
	var path = name.split(".");
	var sub = { f: callback, d: subscriberData, i: this.X++, p: path, w: scope };
	for(var i = 0; i < path.length; i++) {
		if((path[i].indexOf("*") != -1) && (path[i] != "*") && (path[i] != "**"))
					this._badName();
	}
 	this._subscribe(this.S, path, 0, sub);
	return sub;		
}

PageBus.publish = function (name, message)		
{	
	if((name == null) || (name.indexOf("*") != -1)) 
		this._badName();
	var path = name.split(".");
	if(this.P > 100) 
		this._throw("StackOverflow");
	try {
		this.P++;
		this._publish(this.S, path, 0, name, message);
	}
	catch(err) {
		this.P--;
		throw err;
	}
	try {
		this.P--;
		if((this.U.length > 0) && (this.P == 0)) {
			for(var i = 0; i < this.U.length; i++)
				this.unsubscribe(this.U[i]);
			this.U = [];
		}
	}
	catch(err) {	
		// All unsubscribe exceptions should already have 
		// been handled when unsubscribe was called in the
		// publish callback. This is a repeat appearance 
		// of this exception. Discard it.
	}
}

PageBus.unsubscribe = function(sub) 
{
	this._unsubscribe(this.S, sub.p, 0, sub.i);
}

/*
 * @private  @jsxobf-clobber
 */
PageBus._throw = function(n) 
{ 
	throw new Error("PageBus." + n); 
}

/*
 * @private  @jsxobf-clobber
 */
PageBus._badName = function(n) 
{ 
	this._throw("BadName"); 
}

/*
 * @private  @jsxobf-clobber
 */
PageBus._subscribe = function(tree, path, index, sub) 
{
	var tok = path[index];
	if(tok == "")
		this._badName();
	if(index == path.length) 	
		tree.s.push(sub);
	else { 
		if(typeof tree.c == this.H) 
			tree.c = {};
		if(typeof tree.c[tok] == this.H) {
			try {
				tree.c[tok] = { c: {}, s: [] }; 
				this._subscribe(tree.c[tok], path, index + 1, sub);
			}
			catch(err) {
				delete tree.c[tok];
				throw err;
			}
		}
		else 
			this._subscribe( tree.c[tok], path, index + 1, sub );
	}
}

/*
 * @private  @jsxobf-clobber
 */
PageBus._publish = function(tree, path, index, name, msg) {
	if(path[index] == "")
		this._badName();
	if(typeof tree != this.H) {
		if(index < path.length) {
			this._publish(tree.c[path[index]], path, index + 1, name, msg);
			this._publish(tree.c["*"], path, index + 1, name, msg);			
			this._call(tree.c["**"], name, msg);
		}
		else
			this._call(tree, name, msg);
	}
}

/*
 * @private  @jsxobf-clobber
 */
PageBus._call = function(node, name, msg) {
	if(typeof node != this.H) {
		var callbacks = node.s;
		var max = callbacks.length;
		for(var i = 0; i < max; i++) 
			if(callbacks[i].f != null) 
				callbacks[i].f.apply(callbacks[i].w, [name, msg, callbacks[i].d]); 
	}
}
	
/*
 * @jsxobf-clobber
 */
PageBus._unsubscribe = function(tree, path, index, sid) {
	if(typeof tree != this.H) {
		if(index < path.length) {
			var childNode = tree.c[path[index]];
			this._unsubscribe(childNode, path, index + 1, sid);
			if(childNode.s.length == 0) {
				for(var x in childNode.c) // not empty. We're done.
				 	return;
				delete tree.c[path[index]];	// if we got here, c is empty
			}
			return;
		}
		else {
			var callbacks = tree.s;
			var max = callbacks.length;
			for(var i = 0; i < max; i++) {
				if(sid == callbacks[i].i) {
					if(this.P > 0) {
						if(callbacks[i].f == null) 
							this._throw("BadParameter");
						callbacks[i].f = null;
						this.U.push(callbacks[i]);						
					}
					else
						callbacks.splice(i, 1);
					return; 	
				}
			}
			// Not found. Fall through
		}
	}
	this._throw("BadParameter");
}

}

/**
 * A class to parse color values
 * @author Stoyan Stefanov <sstoo@gmail.com>
 * @link   http://www.phpied.com/rgb-color-parser-in-javascript/
 * @license Use it if you like it
 */
function RGBColor(color_string)
{
    this.ok = false;

    // strip any leading #
    if (color_string.charAt(0) == '#') { // remove # if any
        color_string = color_string.substr(1,6);
    }

    color_string = color_string.replace(/ /g,'');
    color_string = color_string.toLowerCase();

    // before getting into regexps, try simple matches
    // and overwrite the input
    var simple_colors = {
        aliceblue: 'f0f8ff',
        antiquewhite: 'faebd7',
        aqua: '00ffff',
        aquamarine: '7fffd4',
        azure: 'f0ffff',
        beige: 'f5f5dc',
        bisque: 'ffe4c4',
        black: '000000',
        blanchedalmond: 'ffebcd',
        blue: '0000ff',
        blueviolet: '8a2be2',
        brown: 'a52a2a',
        burlywood: 'deb887',
        cadetblue: '5f9ea0',
        chartreuse: '7fff00',
        chocolate: 'd2691e',
        coral: 'ff7f50',
        cornflowerblue: '6495ed',
        cornsilk: 'fff8dc',
        crimson: 'dc143c',
        cyan: '00ffff',
        darkblue: '00008b',
        darkcyan: '008b8b',
        darkgoldenrod: 'b8860b',
        darkgray: 'a9a9a9',
        darkgreen: '006400',
        darkkhaki: 'bdb76b',
        darkmagenta: '8b008b',
        darkolivegreen: '556b2f',
        darkorange: 'ff8c00',
        darkorchid: '9932cc',
        darkred: '8b0000',
        darksalmon: 'e9967a',
        darkseagreen: '8fbc8f',
        darkslateblue: '483d8b',
        darkslategray: '2f4f4f',
        darkturquoise: '00ced1',
        darkviolet: '9400d3',
        deeppink: 'ff1493',
        deepskyblue: '00bfff',
        dimgray: '696969',
        dodgerblue: '1e90ff',
        feldspar: 'd19275',
        firebrick: 'b22222',
        floralwhite: 'fffaf0',
        forestgreen: '228b22',
        fuchsia: 'ff00ff',
        gainsboro: 'dcdcdc',
        ghostwhite: 'f8f8ff',
        gold: 'ffd700',
        goldenrod: 'daa520',
        gray: '808080',
        green: '008000',
        greenyellow: 'adff2f',
        honeydew: 'f0fff0',
        hotpink: 'ff69b4',
        indianred : 'cd5c5c',
        indigo : '4b0082',
        ivory: 'fffff0',
        khaki: 'f0e68c',
        lavender: 'e6e6fa',
        lavenderblush: 'fff0f5',
        lawngreen: '7cfc00',
        lemonchiffon: 'fffacd',
        lightblue: 'add8e6',
        lightcoral: 'f08080',
        lightcyan: 'e0ffff',
        lightgoldenrodyellow: 'fafad2',
        lightgrey: 'd3d3d3',
        lightgreen: '90ee90',
        lightpink: 'ffb6c1',
        lightsalmon: 'ffa07a',
        lightseagreen: '20b2aa',
        lightskyblue: '87cefa',
        lightslateblue: '8470ff',
        lightslategray: '778899',
        lightsteelblue: 'b0c4de',
        lightyellow: 'ffffe0',
        lime: '00ff00',
        limegreen: '32cd32',
        linen: 'faf0e6',
        magenta: 'ff00ff',
        maroon: '800000',
        mediumaquamarine: '66cdaa',
        mediumblue: '0000cd',
        mediumorchid: 'ba55d3',
        mediumpurple: '9370d8',
        mediumseagreen: '3cb371',
        mediumslateblue: '7b68ee',
        mediumspringgreen: '00fa9a',
        mediumturquoise: '48d1cc',
        mediumvioletred: 'c71585',
        midnightblue: '191970',
        mintcream: 'f5fffa',
        mistyrose: 'ffe4e1',
        moccasin: 'ffe4b5',
        navajowhite: 'ffdead',
        navy: '000080',
        oldlace: 'fdf5e6',
        olive: '808000',
        olivedrab: '6b8e23',
        orange: 'ffa500',
        orangered: 'ff4500',
        orchid: 'da70d6',
        palegoldenrod: 'eee8aa',
        palegreen: '98fb98',
        paleturquoise: 'afeeee',
        palevioletred: 'd87093',
        papayawhip: 'ffefd5',
        peachpuff: 'ffdab9',
        peru: 'cd853f',
        pink: 'ffc0cb',
        plum: 'dda0dd',
        powderblue: 'b0e0e6',
        purple: '800080',
        red: 'ff0000',
        rosybrown: 'bc8f8f',
        royalblue: '4169e1',
        saddlebrown: '8b4513',
        salmon: 'fa8072',
        sandybrown: 'f4a460',
        seagreen: '2e8b57',
        seashell: 'fff5ee',
        sienna: 'a0522d',
        silver: 'c0c0c0',
        skyblue: '87ceeb',
        slateblue: '6a5acd',
        slategray: '708090',
        snow: 'fffafa',
        springgreen: '00ff7f',
        steelblue: '4682b4',
        tan: 'd2b48c',
        teal: '008080',
        thistle: 'd8bfd8',
        tomato: 'ff6347',
        turquoise: '40e0d0',
        violet: 'ee82ee',
        violetred: 'd02090',
        wheat: 'f5deb3',
        white: 'ffffff',
        whitesmoke: 'f5f5f5',
        yellow: 'ffff00',
        yellowgreen: '9acd32'
    };
    for (var key in simple_colors) {
        if (color_string == key) {
            color_string = simple_colors[key];
        }
    }
    // emd of simple type-in colors

    // array of color definition objects
    var color_defs = [
        {
            re: /^rgb\((\d{1,3}),\s*(\d{1,3}),\s*(\d{1,3})\)$/,
            example: ['rgb(123, 234, 45)', 'rgb(255,234,245)'],
            process: function (bits){
                return [
                    parseInt(bits[1]),
                    parseInt(bits[2]),
                    parseInt(bits[3])
                ];
            }
        },
        {
            re: /^(\w{2})(\w{2})(\w{2})$/,
            example: ['#00ff00', '336699'],
            process: function (bits){
                return [
                    parseInt(bits[1], 16),
                    parseInt(bits[2], 16),
                    parseInt(bits[3], 16)
                ];
            }
        },
        {
            re: /^(\w{1})(\w{1})(\w{1})$/,
            example: ['#fb0', 'f0f'],
            process: function (bits){
                return [
                    parseInt(bits[1] + bits[1], 16),
                    parseInt(bits[2] + bits[2], 16),
                    parseInt(bits[3] + bits[3], 16)
                ];
            }
        }
    ];

    // search through the definitions to find a match
    for (var i = 0; i < color_defs.length; i++) {
        var re = color_defs[i].re;
        var processor = color_defs[i].process;
        var bits = re.exec(color_string);
        if (bits) {
            channels = processor(bits);
            this.r = channels[0];
            this.g = channels[1];
            this.b = channels[2];
            this.ok = true;
        }

    }

    // validate/cleanup values
    this.r = (this.r < 0 || isNaN(this.r)) ? 0 : ((this.r > 255) ? 255 : this.r);
    this.g = (this.g < 0 || isNaN(this.g)) ? 0 : ((this.g > 255) ? 255 : this.g);
    this.b = (this.b < 0 || isNaN(this.b)) ? 0 : ((this.b > 255) ? 255 : this.b);

    // some getters
    this.toRGB = function () {
        return 'rgb(' + this.r + ', ' + this.g + ', ' + this.b + ')';
    }
    this.toHex = function () {
        var r = this.r.toString(16);
        var g = this.g.toString(16);
        var b = this.b.toString(16);
        if (r.length == 1) r = '0' + r;
        if (g.length == 1) g = '0' + g;
        if (b.length == 1) b = '0' + b;
        return '#' + r + g + b;
    }

    // help
    this.getHelpXML = function () {

        var examples = new Array();
        // add regexps
        for (var i = 0; i < color_defs.length; i++) {
            var example = color_defs[i].example;
            for (var j = 0; j < example.length; j++) {
                examples[examples.length] = example[j];
            }
        }
        // add type-in colors
        for (var sc in simple_colors) {
            examples[examples.length] = sc;
        }

        var xml = document.createElement('ul');
        xml.setAttribute('id', 'rgbcolor-examples');
        for (var i = 0; i < examples.length; i++) {
            try {
                var list_item = document.createElement('li');
                var list_color = new RGBColor(examples[i]);
                var example_div = document.createElement('div');
                example_div.style.cssText =
                        'margin: 3px; '
                        + 'border: 1px solid black; '
                        + 'background:' + list_color.toHex() + '; '
                        + 'color:' + list_color.toHex()
                ;
                example_div.appendChild(document.createTextNode('test'));
                var list_item_value = document.createTextNode(
                    ' ' + examples[i] + ' -> ' + list_color.toRGB() + ' -> ' + list_color.toHex()
                );
                list_item.appendChild(example_div);
                list_item.appendChild(list_item_value);
                xml.appendChild(list_item);

            } catch(e){}
        }
        return xml;

    }

}

if(typeof DekiWiki == "undefined")
{
	var DekiWiki = {};
}

DekiWiki.nav = function()
{
	var selectedNode, prevSelectedNode, selectedChildren, timeout;

	//Toggle debug console on/off
	var debug = false;

	//Nav wrapper ID
	var navDivID = "siteNavTree";

	//Animation speed (seconds)
	var animOpenCloseSpeed = 0.15;			// expand, collapse child & hidden nodes
	var animChangeBackgroundSpeed = 0;		// switch background color of selected node
	var animImagePadSpeed = 0; // 0.04;
	var animShiftSpeed = 0.1;

	//Time before redirect occurs (millisec)
	var redirectTime = 0;
	var redirectDelay = 0; // 1500

	//Toggle redirect on/off
	var redirect = true;

	//Max text width in nav pane
	var maxWidth = 0;

	//RGB values (auto detected from css)
	var siblingRGB, dockedNodeRGB, selectedRGB, selectedChildRGB;

	//Width and padding properties
	var properties = {};

	return {
		//Initialize navigation
		init: function()
		{
			//Initialize properties
			DekiWiki.nav.initProperties();

			//Initialize hover
			DekiWiki.nav.initHover();

			DekiWiki.nav.maxWidth = navMaxWidth;

			//Initialize click
			DekiWiki.nav.initClick();
		},

		//Initialize properties
		initProperties: function()
		{
			YAHOO.util.Event.onContentReady(navDivID,
				function()
				{
					//------------------------Determine background colors--------------------

					var testClasses = ["sibling", "dockedNode", "selected", "selectedChild"];

					//Create invisible test node
					DekiWiki.$("#" + navDivID).append("<div id='testNode' class='node' style='display:none'><a></a></div>");

					for(var i = 0; i < testClasses.length; i++)
					{
						var testClass = testClasses[i];

						//Add class to test node
						DekiWiki.$("#testNode").addClass(testClass);

						//Get background color
						var color = DekiWiki.$("#testNode a").css("backgroundColor")
						if(color && (color.toLowerCase() != 'transparent')) {

							//Get color as RGB
							var rgb = new RGBColor(color).toRGB();

							//Set global color variable to RGB
							eval(testClass + "RGB = '" + rgb + "';");
						}

						//Remove class from test node
						DekiWiki.$("#testNode").removeClass(testClass);
					}

					//--------------------------Determine padding and width-----------------------

					properties.linkWidth 		= parseInt(DekiWiki.$("#testNode a").css("width"));
					properties.linkHeight 		= parseInt(DekiWiki.$("#testNode a").css("height")) + parseInt(DekiWiki.$("#testNode a").css("borderBottomWidth"));
					properties.linkPadLeft 		= parseInt(DekiWiki.$("#testNode a").css("paddingLeft"));
					properties.linkPadRight 	= parseInt(DekiWiki.$("#testNode a").css("paddingRight"));
					properties.imgPadRight 		= parseInt(DekiWiki.$("#testNode img.nodeImage").css("paddingRight"));

					DekiWiki.$("#testNode").addClass("selectedChild");

					properties.selChildPadLeft 	= parseInt(DekiWiki.$("#testNode a").css("paddingLeft"));
					properties.selChildPadRight = parseInt(DekiWiki.$("#testNode a").css("paddingRight"));
					properties.selChildWidth 	= parseInt(DekiWiki.$("#testNode a").css("width"));

					DekiWiki.$("#testNode").removeClass("selectedChild").addClass("sibling");

					properties.sibImgPadLeft 	= parseInt(DekiWiki.$("#testNode img.nodeImage").css("paddingLeft"));
					properties.sibImgPadRight 	= parseInt(DekiWiki.$("#testNode img.nodeImage").css("paddingRight"));

					//Remove test node
					DekiWiki.$("#testNode").remove();
				}
			);
		},

		//Initialize hover
		initHover: function()
		{
			//Get child nodes that are not closed
			var childNodes = DekiWiki.$("#" + navDivID + " div.childNode").not(".closedNode").get();

			//Add mouseover listener
			YAHOO.util.Event.addListener(childNodes, "mouseover", DekiWiki.nav.mouseover);

			//Add mouseout listener
			YAHOO.util.Event.addListener(childNodes, "mouseout", DekiWiki.nav.mouseout);

			//----------Debug----------

			if(debug)
			{
				if(!YAHOO.util.Dom.inDocument("navDebug"))
				{
					DekiWiki.$(document.body).append("<div id='navDebug' style='width: 400px; height: 50px; z-index: 2; padding: 10px; background: white; border: 1px solid #666; position:absolute; left: 200px; top: 200px;'></div>");
				}

				YAHOO.util.Event.addListener(DekiWiki.$("div.node"), "mouseover",
					function()
					{
						DekiWiki.$("#navDebug").html(this.className);
					}
				);

				YAHOO.util.Event.addListener(DekiWiki.$("div.node"), "mouseout",
					function()
					{
						DekiWiki.$("#navDebug").html("");
					}
				);
			}
		},

		//Remove hover
		removeHover: function()
		{
			var nodes = DekiWiki.$("#" + navDivID + " div.node").get();

			//Remove listeners
			YAHOO.util.Event.removeListener(nodes, "mouseover");
			YAHOO.util.Event.removeListener(nodes, "mouseout");
		},

		//Reset hover
		resetHover: function()
		{
			DekiWiki.nav.removeHover();
			DekiWiki.nav.initHover();
		},

		//Initialize click
		initClick: function()
		{
			var nodes = DekiWiki.$("#" + navDivID + " div.node");
			nodes.attr("onclick", "return false;");

			//Add click handler
			YAHOO.util.Event.addListener(nodes.get(), "click", DekiWiki.nav.click);
		},

		//Remove click
		removeClick: function()
		{
			var nodes = DekiWiki.$("#" + navDivID + " div.node");
			nodes.attr("onclick", "");

			//Add click handler
			YAHOO.util.Event.removeListener(nodes.get(), "click", DekiWiki.nav.click);
		},

		//Reset click
		resetClick: function()
		{
			DekiWiki.nav.removeClick();
			DekiWiki.nav.initClick();
		},

		//Reset all handlers
		resetAllHandlers: function()
		{
			//Initialize click
			DekiWiki.nav.resetClick();

			//Reset hover
			DekiWiki.nav.resetHover();
		},

		//Mouseover
		mouseover: function()
		{
		},

		//Mouseout
		mouseout: function()
		{
		},

		//Click
		click: function()
		{
			//Redirect turned on
			redirect = true;

			//Get previously selected node
			prevSelectedNode = DekiWiki.$("#" + navDivID + " div.selected").get(0);

			//Currently selected node
			selectedNode = this;

			//Exit if clicked node is already the current node
			if(YAHOO.util.Dom.hasClass(selectedNode, "selected") || (DekiWiki.$(selectedNode).attr("reload") == "1"))
			{
				redirectTime = 0;
				DekiWiki.nav.animComplete();
				return;
			}

			//Hidden nodes
			if(YAHOO.util.Dom.hasClass(selectedNode, "moreNodes"))
			{
				DekiWiki.nav.hiddenNodes.startAnim();
				return;
			}

			//Clear timeout if running
			if(timeout)
			{
				window.clearTimeout(timeout);
			}

			//Automatic redirect if node has no children
			if(	(!YAHOO.util.Dom.hasClass(selectedNode, "parentOpen") && !YAHOO.util.Dom.hasClass(selectedNode, "parentClosed")) )
			{
				redirectTime = 0;
			}
			else
			{
				redirectTime = redirectDelay;
			}

			//Get missing data, animate, redirect
			DekiWiki.nav.getData();

			// KarenA: Bugfix #0002049 - prevented double question during leaving modified page
			return false;
		},

		animComplete: function()
		{
			//Reset Hover
			DekiWiki.nav.resetHover();

			if(selectedNode)
			{
				DekiWiki.$(selectedNode).find("a").css("backgroundColor", "");
			}

			if(prevSelectedNode)
			{
				DekiWiki.$(prevSelectedNode).find("a").css("backgroundColor", "");
			}

			//Start timer
			var disableNavWhenEditorIsLoaded = false;
			if(redirect && ((DekiWiki.$(selectedNode).attr("reload") == "1") || !(disableNavWhenEditorIsLoaded && typeof(wysiwyg_editors) != 'undefined' && wysiwyg_editors)))
			{
				timeout = window.setTimeout(DekiWiki.nav.redirect, redirectTime);
			}
		},

		redirect: function()
		{
			var path = DekiWiki.$(selectedNode).find("a").attr("href");

			// SteveB: remove click handlers (which restores the default 'href' behavior)
			DekiWiki.nav.removeClick();

			if(!path)
			{
				path = "";
			}
			// fix for IE6 when canceling page redirect
			try
			{
				window.location = path;
			}
			catch(e) {}
		},

		//Get missing nodes
		getData: function()
		{
			var allChildren		= false;
			var partialChildren	= false;
			var allSiblings		= false;
			var request 		= [];
			var selChildData 	= DekiWiki.$(selectedNode).attr("cd") || "1";		// children-data (0=data missing, nXYZ=known child)
			var selSiblingData 	= DekiWiki.$(selectedNode).attr("sd") || "1";		// sibling-data (0=data missing)
			var knownChild		= null;
			var exclude			= "";

			if(matchResult = selChildData.match(new RegExp("n([0-9]+)")))
			{
				knownChild = matchResult[0];
			}

			//Child data
			if(selChildData == "0")
			{
				allChildren = true;
				request.push("children");
			}
			else if(knownChild)
			{
				partialChildren = true;
				request.push("children");

				exclude = "&exclude=" + knownChild.replace(new RegExp("n"), "");
			}

			//Sibling data
			if(selSiblingData == "0")
			{
				allSiblings = true;
				request.push("siblings");
			}

			//Ajax call for missing nodes
			if(request.length)
			{
				var nodeID = DekiWiki.$(selectedNode).attr("id").replace(new RegExp("^n"), "");
		        var scheme = window.location.protocol.replace(/:.*/, '');
		        var requestURL = "/@api/deki/site/nav/" + nodeID + "/" + request.join(",") + "?dream.in.scheme=" + scheme + "&dream.out.format=json" + exclude;
        		if(DekiWiki.nav.maxWidth > 0)
				{
					requestURL = requestURL + "&width=" + DekiWiki.nav.maxWidth;
				}

				//Debug
				//DekiWiki.$(document.body).append(requestURL);

				YAHOO.util.Connect.asyncRequest(
					"GET",
					requestURL,
					{
						success: function(obj)
						{
							//Evaluate response
							eval("var response = " + obj.responseText);

							//Children data
							if(response.children)
							{
								var childData 	= response.children.html;
								var childNodes	= response.children.nodes;
							}

							//Sibling data
							if(response.siblings)
							{
								var siblingData 	= response.siblings.html;
								var siblingNodes	= response.siblings.nodes;
							}

							//-------------Add children------------

							//All children
							if(allChildren)
							{
								//Set list of child node IDs
								DekiWiki.$(selectedNode).attr("c", childNodes);

								//Append children
								DekiWiki.$(selectedNode).after(childData);
							}
							//Partial children
							else if(partialChildren)
							{
								//Set list of child node IDs
								DekiWiki.$(selectedNode).attr("c", childNodes);

								//Prepend siblings
								if(childData.pre)
								{
									DekiWiki.$("#" + knownChild).before(childData.pre);
								}

								//Append siblings
								if(childData.post)
								{
									DekiWiki.$(DekiWiki.nav.getLastChild(
											DekiWiki.$("#" + knownChild).get()
										)
									).after(childData.post);
								}

								//All children of the selected node have full sibling knowledge
								DekiWiki.$(
									DekiWiki.nav.common.getNodesFromAttr(selectedNode, "c")
								).attr("sd", "");
							}

							//------------Add siblings-----------

							if(allSiblings)
							{
								//Prepend siblings
								if(siblingData.pre)
								{
									DekiWiki.$(selectedNode).before(siblingData.pre);
								}

								//Append siblings
								if(siblingData.post)
								{
									DekiWiki.$(DekiWiki.nav.getLastChild(selectedNode)).after(siblingData.post);
								}

								//Parent node has full child data
								DekiWiki.$("#" + DekiWiki.$(selectedNode).attr("p")).attr("cd", "").attr("c", siblingNodes);
							}

							//Update data states of selected node
							DekiWiki.$(selectedNode).attr("cd", "").attr("sd", "");

							//Re-initialize event handlers
							DekiWiki.nav.resetAllHandlers();

							//Start animation
							DekiWiki.nav.startAnim();
						}
					}
				);
			}
			else
			{
				//Start animation
				DekiWiki.nav.startAnim();
			}
		},

		//Get last child of node
		getLastChild: function(node)
		{
			var childNodes;

			while(true)
			{
				childNodes = DekiWiki.$(node).attr("c");

				if(childNodes)
				{
					childNodes 	= childNodes.split(",");
					node 		= DekiWiki.$("#" + childNodes[childNodes.length - 1]).get(0);
				}
				else
				{
					break;
				}
			}

			return node;
		},

		//Start animation
		startAnim: function()
		{
			selectedChildren = null;

			//Get children of selected node
			if(YAHOO.util.Dom.hasClass(selectedNode, "parentClosed"))
			{
				selectedChildren = DekiWiki.nav.common.getNodesFromAttr(selectedNode, "c");
			}

			//Sibling
			if(YAHOO.util.Dom.hasClass(selectedNode, "sibling"))
			{
				DekiWiki.nav.sibling.startAnim();
			}
			//Child node
			else if(YAHOO.util.Dom.hasClass(selectedNode, "selectedChild"))
			{
				DekiWiki.nav.child.startAnim();
			}
			//Home node
			else if(YAHOO.util.Dom.hasClass(selectedNode, "homeNode"))
			{
				DekiWiki.nav.docked.homeNode.startAnim();
			}
			//Last docked
			else if(YAHOO.util.Dom.hasClass(selectedNode, "lastDocked"))
			{
				DekiWiki.nav.docked.lastDocked.startAnim();
			}
			//Mid docked
			else
			{
				DekiWiki.nav.docked.midDocked.startAnim();
			}
		},

		//-------------------------------Common--------------------------------

		common:
		{
			//Complete function handler
			onComplete: function(anim, completeFuncs)
			{
				if(completeFuncs)
				{
					if(completeFuncs.length)
					{
					    for (var i=0; i<completeFuncs.length; i++)
					    {
					        if (typeof(completeFuncs[i]) == 'undefined')
					        {
					            continue;
					        }

							if(anim)
							{
								anim.onComplete.subscribe(
									completeFuncs[i]
								);
							}
							else
							{
								completeFuncs[i]();
							}
						}
					}
					else
					{
						if(anim)
						{
							anim.onComplete.subscribe(completeFuncs);
						}
						else
						{
							completeFuncs();
						}
					}
				}
			},

			//Compact nodes
			compactNodes: function(nodes, completeFuncs)
			{
				var browser = new BrowserVersion();
				var anim = new YAHOO.util.Anim(
					nodes,
					{height: {to: (browser.isIE && (browser.version < 7)) ? 0.1 : 0}}, //make collapsing sorta of work for IE6
					animOpenCloseSpeed,
					YAHOO.util.Easing.easeIn
				);

				anim.onComplete.subscribe(
					function()
					{
						DekiWiki.$(nodes).addClass("closedNode");
					}
				);

				DekiWiki.nav.common.onComplete(anim, completeFuncs);

				anim.animate();
			},

			//Open nodes
			openNodes: function(nodes, completeFuncs)
			{
				nodes = DekiWiki.$(nodes).not(".hiddenNode");

				DekiWiki.$(nodes).show();

				var anim = new YAHOO.util.Anim(
					nodes,
					{height: {to: properties.linkHeight}},
					animOpenCloseSpeed,
					YAHOO.util.Easing.easeIn
				);

				anim.onComplete.subscribe(
					function()
					{
						DekiWiki.$(nodes).removeClass("closedNode");
					}
				);

				DekiWiki.nav.common.onComplete(anim, completeFuncs);

				anim.animate();
			},

			//Compact image padding
			compactImagePad: function(nodes, completeFuncs)
			{
				if(animImagePadSpeed > 0)
				{
					var anim = new YAHOO.util.Anim(
						DekiWiki.$(nodes).find("img.nodeImage").get(),
						{paddingLeft: {to: 0}, paddingRight: {to: properties.imgPadRight}},
						animImagePadSpeed,
						YAHOO.util.Easing.easeIn
					);

					DekiWiki.nav.common.onComplete(anim, completeFuncs);
					anim.animate();
				}
				else
				{
					DekiWiki.$(nodes).find("img.nodeImage").css("paddingLeft", 0).css("paddingRight", properties.imgPadRight);
					DekiWiki.nav.common.onComplete(null, completeFuncs);
				}
			},

			//Expand image padding
			expandImagePad: function(nodes, completeFuncs)
			{
				if(animImagePadSpeed > 0)
				{
					var anim = new YAHOO.util.Anim(
						DekiWiki.$(nodes).find("img.nodeImage").get(),
						{paddingLeft: {to: properties.sibImgPadLeft}, paddingRight: {to: properties.sibImgPadRight}},
						animImagePadSpeed,
						YAHOO.util.Easing.easeOut
					);

					DekiWiki.nav.common.onComplete(anim, completeFuncs);
					anim.animate();
				}
				else
				{
					DekiWiki.$(nodes).find("img.nodeImage").css("paddingLeft", properties.sibImgPadLeft).css("paddingRight", properties.sibImgPadRight);
					DekiWiki.nav.common.onComplete(null, completeFuncs);
				}
			},

			//Shift nodes to the left
			shiftLeft: function(nodes, completeFuncs)
			{
				var anim = new YAHOO.util.Anim(
					DekiWiki.$(nodes).find("a").get(),
					{paddingLeft: {to: properties.linkPadLeft}, width: {to: properties.linkWidth}},
					animShiftSpeed,
					YAHOO.util.Easing.easeIn
				);

				DekiWiki.nav.common.onComplete(anim, completeFuncs);
				anim.animate();
			},

			//Shift nodes to the right
			shiftRight: function(nodes, completeFuncs)
			{
				var anim = new YAHOO.util.Anim(
					DekiWiki.$(nodes).find("a").get(),
					{paddingLeft: {to: properties.selChildPadLeft}, width: {to: properties.selChildWidth}},
					animShiftSpeed,
					YAHOO.util.Easing.easeOut
				);

				DekiWiki.nav.common.onComplete(anim, completeFuncs);
				anim.animate();
			},

			//Open parent node
			openParent: function(node)
			{
				if(YAHOO.util.Dom.hasClass(node, "parentClosed"))
				{
					DekiWiki.$(node).removeClass("parentClosed").addClass("parentOpen");
				}
			},

			//Close parent node
			closeParent: function(node)
			{
				if(YAHOO.util.Dom.hasClass(node, "parentOpen"))
				{
					DekiWiki.$(node).removeClass("parentOpen").addClass("parentClosed");
				}
			},

			//Get nodes from attribute
			getNodesFromAttr: function(node, attr, ignore)
			{
				var attribute = DekiWiki.$(node).attr(attr);

				if(attribute)
				{
					var list = attribute.split(",");

					// check if there is an element to ignore
					if(ignore)
					{

						// remove the element to ignore
						var i = 0;
						while(i < list.length)
						{
							if (list[i] == ignore)
							{
								list.splice(i, 1);
								break;
							}
							else
							{
								i++;
							}
						}
					}
					return YAHOO.util.Dom.get(list);
				}
				else
				{
					return [ ];
				}
			}
		},

		//----------------------------Debug-----------------------
		debug:
		{
			printIDs: function(nodes)
			{
				var idStr = "";

				DekiWiki.$(nodes).each(
					function()
					{
						idStr += this.id + ", ";
					}
				);

				alert(idStr);
			},

			logClicks: function()
			{
				DekiWiki.$("#clickLog").append(this.id + "<br />");
			}
		},

		//-------------------------------Docked--------------------------------

		docked:
		{
			//---------------------------Home node---------------------------

			homeNode:
			{
				//Start animation
				startAnim: function()
				{
					if(selectedRGB) {
						DekiWiki.$(selectedNode).find("a").css("backgroundColor", selectedRGB);
					}
					if(siblingRGB) {
						DekiWiki.$(prevSelectedNode).find("a").css("backgroundColor", siblingRGB);
					}

					//Unhighlight selected node
					DekiWiki.$(prevSelectedNode).removeClass("selected");

					//Close parent
					DekiWiki.nav.common.closeParent(prevSelectedNode);

					var nodeStr = 'var nodes = DekiWiki.$("div.node").not(".homeNode").not(".closedNode")';

					DekiWiki.$(selectedChildren).each(
						function()
						{
							nodeStr += '.not("#' + this.id + '")';
						}
					);

					nodeStr += ".get()";

					eval(nodeStr);

					//var nodes = DekiWiki.$("div.node").not(".homeNode").not(".closedNode").not(selectedChildren).get();

					if(nodes.length)
					{
						//Strip nodes
						DekiWiki.$(nodes).removeClass("sibling").removeClass("selectedChild").removeClass("dockedNode").removeClass("lastDocked");

						//Close non-child nodes
						DekiWiki.nav.common.compactNodes(
							nodes,
							DekiWiki.nav.docked.homeNode.showChildren
						);
					}
					else
					{
						DekiWiki.nav.docked.homeNode.showChildren();
					}
				},

				//Show children
				showChildren: function()
				{
					var closedNodes = DekiWiki.$(selectedChildren).filter(".closedNode").not(".hiddenNode").get();

					DekiWiki.$(selectedChildren).each(
						function()
						{
							if(YAHOO.util.Dom.hasClass(this, "parentOpen"))
							{
								DekiWiki.nav.common.closeParent(this);
							}
						}
					);

					//Expand image padding
					DekiWiki.nav.common.expandImagePad(selectedChildren);

					DekiWiki.$(selectedChildren).addClass("sibling").addClass("childNode").removeClass("selectedChild").removeClass("dockedNode").removeClass("lastDocked");

					if(closedNodes.length)
					{
						DekiWiki.nav.common.openNodes(
							closedNodes,
							DekiWiki.nav.docked.homeNode.highlightSelected
						);
					}
					else
					{
						DekiWiki.nav.docked.homeNode.highlightSelected();
					}
				},

				//Highlight selected node
				highlightSelected: function()
				{
					DekiWiki.$(selectedNode).addClass("selected");

					//Animation complete
					DekiWiki.nav.animComplete();
				}
			},

			//---------------------------Last Docked---------------------------

			lastDocked:
			{
				//Start animation
				startAnim: function()
				{
					if(selectedRGB) {
						DekiWiki.$(selectedNode).find("a").css("backgroundColor", selectedRGB);
					}
					if(siblingRGB) {
						DekiWiki.$(prevSelectedNode).find("a").css("backgroundColor", siblingRGB);
					}

					var viewableChildren = DekiWiki.$("#" + navDivID + " div.selectedChild").get();

					//Minimize children of previously selected node (if they exist)
					if(viewableChildren.length)
					{
						DekiWiki.nav.common.compactNodes(
							viewableChildren,
							function()
							{
								DekiWiki.$(viewableChildren).removeClass("selectedChild");

								DekiWiki.nav.docked.lastDocked.siblingsToChildren();
							}
						);
					}
					else
					{
						DekiWiki.nav.docked.lastDocked.siblingsToChildren();
					}
				},

				//Transform siblings into children
				siblingsToChildren: function()
				{
					//Close previously selected node
					DekiWiki.nav.common.closeParent(prevSelectedNode);

					//Move siblings to the right
					DekiWiki.nav.common.shiftRight(DekiWiki.$("#" + navDivID + " div.sibling").get(),
						function()
						{
							DekiWiki.$(prevSelectedNode).find("a").css("backgroundColor", "");

							//Minimize node image padding
							DekiWiki.nav.common.compactImagePad(DekiWiki.$("#" + navDivID + " div.sibling"));

							DekiWiki.$("#" + navDivID + " div.sibling").addClass("selectedChild").removeClass("sibling").addClass("childNode");
							DekiWiki.$(prevSelectedNode).removeClass("selected");

							//Highlight selected node
							DekiWiki.nav.docked.highlightSelected();
						}
					);
				}
			},

			//---------------------------Mid Docked---------------------------

			midDocked:
			{
				//Start animation
				startAnim: function()
				{
					if(selectedRGB) {
						DekiWiki.$(selectedNode).find("a").css("backgroundColor", selectedRGB);
					}
					if(siblingRGB) {
						DekiWiki.$(prevSelectedNode).find("a").css("backgroundColor", siblingRGB);
					}

					//Close current child nodes
					DekiWiki.nav.common.compactNodes(
						DekiWiki.$("#" + navDivID + " div.childNode").not(".closedNode").get(),
						function()
						{
							//Unhighlight previously selected node
							DekiWiki.nav.common.closeParent(prevSelectedNode);
							DekiWiki.$(prevSelectedNode).removeClass("selected");

							// remove child & sibling styles
							DekiWiki.$("#" + navDivID + " div.childNode").removeClass("selectedChild").removeClass("sibling");

							//Hide grandchildren and their children
							DekiWiki.nav.docked.midDocked.hideGrandchildren();
						}
					);
				},

				//Hide grandchildren and their children
				hideGrandchildren: function()
				{
					var grandchildren 	= [];
					var selectedPath 	= DekiWiki.$(selectedNode).attr("path");

					DekiWiki.$("#" + navDivID + " div.dockedNode").each(
						function()
						{
							if((new RegExp(selectedPath + "[^/]+/([^/]+/)+$")).test(this.getAttribute("path")))
							{
								grandchildren.push(
									DekiWiki.$("#" + this.id).get(0)
								);
							}
						}
					);

					if(grandchildren.length)
					{
						DekiWiki.nav.common.compactNodes(
							grandchildren,
							function()
							{
								DekiWiki.$(grandchildren).removeClass("dockedNode");

								DekiWiki.nav.docked.midDocked.transformDockedChild();
							}
						);
					}
					else
					{
						DekiWiki.nav.docked.midDocked.transformDockedChild();
					}
				},

				//Transform docked child
				transformDockedChild: function()
				{
					var dockedChild = DekiWiki.$(selectedChildren).filter(".dockedNode").get(0);

					// switch left icon	& style
					DekiWiki.$(dockedChild).removeClass("dockedNode").removeClass("lastDocked").addClass("childNode").addClass("selectedChild");

					//Move docked child to the right
					DekiWiki.nav.common.shiftRight(
						dockedChild,
						function() { }
					);
					DekiWiki.nav.docked.midDocked.showSelectedChildren();
				},

				//Show selected node's children
				showSelectedChildren: function()
				{
					var hiddenChildren = DekiWiki.$(selectedChildren).filter(".closedNode").get();

					//Shift children to the right
					if(hiddenChildren.length)
					{
						DekiWiki.nav.common.shiftRight(
							hiddenChildren,
							function()
							{
								DekiWiki.$(hiddenChildren).addClass("selectedChild");
							}
						);

						//Minimize image padding
						DekiWiki.nav.common.compactImagePad(hiddenChildren);

						//Open nodes
						DekiWiki.nav.common.openNodes(
							hiddenChildren,
							DekiWiki.nav.docked.highlightSelected
						);
					}
					else
					{
						DekiWiki.nav.docked.highlightSelected();
					}
				}
			},

			//---------------------------Common---------------------------

			//Highlight selected node
			highlightSelected: function()
			{
				//Expand node image padding
				DekiWiki.nav.common.expandImagePad(selectedNode);

				//Highlight node
				DekiWiki.$(selectedNode).removeClass("dockedNode").removeClass("lastDocked").
				addClass("sibling").addClass("selected").addClass("childNode");

				//Open node if parent
				DekiWiki.nav.common.openParent(selectedNode);

				//Set parent to last docked
				var parentID = DekiWiki.$(selectedNode).attr("p");
				DekiWiki.$("#" + parentID).addClass("lastDocked");

				//Show siblings
				DekiWiki.nav.docked.showSiblings();
			},

			//Show siblings
			showSiblings: function()
			{
				// fetch parent of current node
				var parentNode = DekiWiki.$("#" + DekiWiki.$(selectedNode).attr("p"));
				if(parentNode)
				{
					// fetch children of parent (i.e. siblings of current node), but remove current node
					var siblings = DekiWiki.nav.common.getNodesFromAttr(parentNode, "c", DekiWiki.$(selectedNode).attr("id"));
					if(siblings && siblings.length)
					{
						DekiWiki.$(siblings).addClass("sibling").addClass("childNode");

						DekiWiki.nav.common.openNodes(siblings,
							function()
							{
								//Animation complete
								DekiWiki.nav.animComplete();
							}
						);
					}
					else
					{
						//Animation complete
						DekiWiki.nav.animComplete();
					}
				}
				else
				{
					//Animation complete
					DekiWiki.nav.animComplete();
				}
			}
		},

		//-------------------------------Child--------------------------------

		child:
		{
			//Start animation
			startAnim: function()
			{
				if(selectedRGB) {
					DekiWiki.$(selectedNode).find("a").css("backgroundColor", selectedRGB);
				}
				if(dockedNodeRGB) {
					DekiWiki.$(prevSelectedNode).find("a").css("backgroundColor", dockedNodeRGB);
				}

				DekiWiki.nav.child.hideSiblings();
			},

			//Hide siblings
			hideSiblings: function()
			{
				var nodes = DekiWiki.$("#" + navDivID + " div.sibling").not(".selected").get();

				if(nodes.length)
				{
					DekiWiki.nav.common.compactNodes(
						nodes,
						function()
						{
							DekiWiki.$("#" + navDivID + " div.sibling").not(".selected").removeClass("sibling");
							DekiWiki.nav.child.unhighlightSelected();
						}
					);
				} else {
					DekiWiki.nav.child.unhighlightSelected();
				}
			},

			//Unhighlight selected
			unhighlightSelected: function()
			{
				//Last docked is no longer last
				DekiWiki.$("#" + navDivID + " div.lastDocked").removeClass("lastDocked");

				//Transform node into docked node
				DekiWiki.$(prevSelectedNode).removeClass("sibling").removeClass("childNode").removeClass("selected").addClass("dockedNode").addClass("lastDocked").find("img.nodeImage");

				// check if we need to close the previous parent
				if(YAHOO.util.Dom.hasClass(prevSelectedNode, "parentOpen"))
				{
					DekiWiki.$(prevSelectedNode).removeClass("parentOpen").addClass("parentClosed");
				}

				//Remove node image padding
				DekiWiki.nav.common.compactImagePad(prevSelectedNode);

				//Expand node image padding
				DekiWiki.nav.common.expandImagePad(
					DekiWiki.$("#" + navDivID + " div.selectedChild")
				);

				//Move to left
				DekiWiki.nav.common.shiftLeft(
					DekiWiki.$("#" + navDivID + " div.selectedChild"),
					function()
					{
						//Change selected children to sibling nodes
						DekiWiki.$("#" + navDivID + " div.selectedChild").removeClass("selectedChild").addClass("sibling");

						DekiWiki.nav.child.highlightSelected();
					}
				);
			},

			//Highlight selected node
			highlightSelected: function()
			{
				//Mark node as selected
				DekiWiki.$(selectedNode).addClass("selected");

				if(YAHOO.util.Dom.hasClass(DekiWiki.$(selectedNode).get(0), "parentClosed"))
				{
					//Open selected node
					DekiWiki.nav.common.openParent(selectedNode);

					//Open children
					DekiWiki.nav.child.openChildren();
				}
				else
				{
					//Animation complete
					DekiWiki.nav.animComplete();
				}
			},

			//Open children
			openChildren: function()
			{
				// shift right
				DekiWiki.$(selectedChildren).find("a").css("paddingLeft", properties.selChildPadLeft).css("width", properties.selChildWidth);

				DekiWiki.nav.common.openNodes(selectedChildren,
					DekiWiki.nav.child.shiftRight
				);
			},

			//Shift new children to the right
			shiftRight: function()
			{
				DekiWiki.$(selectedChildren).addClass("selectedChild").addClass("childNode");

				//Animation complete
				DekiWiki.nav.animComplete();

				//Compact node image padding
				DekiWiki.nav.common.compactImagePad(selectedChildren);
			}
		},

		//-------------------------------Sibling--------------------------------

		sibling:
		{
			//Start animation
			startAnim: function()
			{
				if(selectedRGB) {
					DekiWiki.$(selectedNode).find("a").css("backgroundColor", selectedRGB);
				}
				if(siblingRGB) {
					DekiWiki.$(prevSelectedNode).find("a").css("backgroundColor", siblingRGB);
				}

				if(YAHOO.util.Dom.hasClass(prevSelectedNode, "parentOpen"))
				{
					//Hide children
					DekiWiki.nav.sibling.hideSelectedChildren();
				}
				else
				{
					//Unhighlight selected
					DekiWiki.nav.sibling.unhighlightSelected();
				}
			},

			//Hide previously selected node's children
			hideSelectedChildren: function()
			{
				DekiWiki.nav.common.compactNodes(
					DekiWiki.$("#" + navDivID + " div.selectedChild"),
					function()
					{
						DekiWiki.$("#" + navDivID + " div.selectedChild").removeClass("selectedChild");
						DekiWiki.nav.sibling.unhighlightSelected();
					}
				);
			},

			//Unhighlight previously selected node
			unhighlightSelected: function()
			{
				//Close parent node
				DekiWiki.nav.common.closeParent(prevSelectedNode);

				//Unhiglight
				DekiWiki.$(prevSelectedNode).removeClass("selected");

				//Highlight selected node
				DekiWiki.nav.sibling.highlightSelected();
			},

			//Highlight selected node
			highlightSelected: function()
			{
				DekiWiki.$(selectedNode).addClass("selected");

				//Open parent
				DekiWiki.nav.common.openParent(selectedNode);

				//Show children
				if(selectedChildren)
				{
					DekiWiki.nav.sibling.showChildren();
				}
				else
				{
					//Animation complete
					DekiWiki.nav.animComplete();
				}
			},

			//Show children
			showChildren: function()
			{
				DekiWiki.$(selectedChildren).addClass("selectedChild").addClass("childNode");

				//Open nodes
				DekiWiki.nav.common.openNodes(
					selectedChildren,
					function()
					{
						//Animation complete
						DekiWiki.nav.animComplete();
					}
				);

				//Shift right
				DekiWiki.nav.common.shiftRight(selectedChildren);

				//Minimize image padding
				DekiWiki.nav.common.compactImagePad(selectedChildren);
			}
		},

		//-------------------------------Hidden Nodes--------------------------------

		hiddenNodes:
		{
			//Start animation
			startAnim: function()
			{
			
				//Set content
				DekiWiki.$(selectedNode).find("span").text(
					DekiWiki.$(selectedNode).attr("content")
				  );

				//Set title
				DekiWiki.$(selectedNode).find("a").attr("title",
					DekiWiki.$(selectedNode).attr("contentTitle")
				);

				//Open hidden nodes
				DekiWiki.nav.hiddenNodes.openNodes();
			},

			//Open hidden nodes
			openNodes: function()
			{
				//Get hidden nodes
				var hiddenNodes = DekiWiki.nav.common.getNodesFromAttr(selectedNode, "hiddenNodes");

				DekiWiki.$(hiddenNodes).show();

				//Animate hidden nodes open
				var anim = new YAHOO.util.Anim(
					hiddenNodes,
					{height: {to: properties.linkHeight}},
					animOpenCloseSpeed,
					YAHOO.util.Easing.easeIn
				);

				//Execute after animation has completed
				anim.onComplete.subscribe(
					function()
					{
						//Unmark node as having more nodes
						DekiWiki.$(selectedNode).removeClass("moreNodes").removeAttr("hiddenNodes");

						//Unmark hidden nodes as being closed and hidden
						DekiWiki.$(hiddenNodes).removeClass("closedNode").removeClass("hiddenNode");

						//Turn redirect off (previously started redirect will not be terminated)
						redirect = false;

						//
						selectedNode = prevSelectedNode;

						//Animation complete
						DekiWiki.nav.animComplete();
					}
				);

				//Animate
				anim.animate();
			}
		}
	};
}();

//the onload event handler is available in /skins/common/javascript.php so we can flag it

