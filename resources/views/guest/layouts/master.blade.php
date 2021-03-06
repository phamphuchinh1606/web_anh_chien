
<!DOCTYPE html>
<!--[if lt IE 7]><html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]><html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]><html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if IE 9 ]><html class="ie9 no-js"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html dir="ltr" lang="en-US"> <!--<![endif]-->
<head>
    <link rel="shortcut icon" href="{{asset('images/guest/favicon.png')}}" type="image/png" />
    <!-- <meta charset="utf-8" /> -->
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1' /><![endif]-->
    <meta http-equiv="content-language" content="vi">
    <title>
        The Bag
    </title>

    <meta name="keywords" content="The Bag">
    <meta name="robots" content="noodp,index,follow">
    <meta name="revisit-after" content="1 days">
    <meta name="language" content="vietnamese">
    <link rel="canonical" href="https://the-bag.myharavan.com/" />
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=2.0, user-scalable=0' name='viewport' />
    <meta name="theme-color" content="#ff551f">
    <meta name="msapplication-TileColor" content="#ff551f">
    <!-- Product meta ================================================== -->

    <meta property="og:type" content="website" />
    <meta property="og:title" content="The Bag" />

    <meta property="og:image" content="{{asset('images/logo.png')}}" />
    <meta property="og:image" content="{{asset('images/logo.png')}}" />


    <link rel="stylesheet" type="text/css" href="{{asset('css/guest/plugins/style.css')}}">

    <meta property="og:url" content="https://the-bag.myharavan.com/" />
    <meta property="og:site_name" content="The Bag" />
    <script>
        {{$amount = 0}}
        if(typeof EGA === 'undefined')	EGA = {};
        EGA.product = {};
        EGA.plugin = {};
        EGA.addScript = {};
        EGA.header = {};
        EGA.filter = {};
        EGA.options = {
            money_format: "{{$amount}}₫",
        }
    </script>
    <script>
        /** vim: et:ts=4:sw=4:sts=4
         * @license RequireJS 2.3.3 Copyright jQuery Foundation and other contributors.
         * Released under MIT license, https://github.com/requirejs/requirejs/blob/master/LICENSE
         */
        var requirejs,require,define;!function(global,setTimeout){function commentReplace(e,t){return t||""}function isFunction(e){return"[object Function]"===ostring.call(e)}function isArray(e){return"[object Array]"===ostring.call(e)}function each(e,t){if(e){var i;for(i=0;i<e.length&&(!e[i]||!t(e[i],i,e));i+=1);}}function eachReverse(e,t){if(e){var i;for(i=e.length-1;i>-1&&(!e[i]||!t(e[i],i,e));i-=1);}}function hasProp(e,t){return hasOwn.call(e,t)}function getOwn(e,t){return hasProp(e,t)&&e[t]}function eachProp(e,t){var i;for(i in e)if(hasProp(e,i)&&t(e[i],i))break}function mixin(e,t,i,r){return t&&eachProp(t,function(t,n){!i&&hasProp(e,n)||(!r||"object"!=typeof t||!t||isArray(t)||isFunction(t)||t instanceof RegExp?e[n]=t:(e[n]||(e[n]={}),mixin(e[n],t,i,r)))}),e}function bind(e,t){return function(){return t.apply(e,arguments)}}function scripts(){return document.getElementsByTagName("script")}function defaultOnError(e){throw e}function getGlobal(e){if(!e)return e;var t=global;return each(e.split("."),function(e){t=t[e]}),t}function makeError(e,t,i,r){var n=new Error(t+"\nhttp://requirejs.org/docs/errors.html#"+e);return n.requireType=e,n.requireModules=r,i&&(n.originalError=i),n}function newContext(e){function t(e){var t,i;for(t=0;t<e.length;t++)if(i=e[t],"."===i)e.splice(t,1),t-=1;else if(".."===i){if(0===t||1===t&&".."===e[2]||".."===e[t-1])continue;t>0&&(e.splice(t-1,2),t-=2)}}function i(e,i,r){var n,o,a,s,u,c,d,p,f,l,h,m,g=i&&i.split("/"),v=y.map,x=v&&v["*"];if(e&&(e=e.split("/"),d=e.length-1,y.nodeIdCompat&&jsSuffixRegExp.test(e[d])&&(e[d]=e[d].replace(jsSuffixRegExp,"")),"."===e[0].charAt(0)&&g&&(m=g.slice(0,g.length-1),e=m.concat(e)),t(e),e=e.join("/")),r&&v&&(g||x)){a=e.split("/");e:for(s=a.length;s>0;s-=1){if(c=a.slice(0,s).join("/"),g)for(u=g.length;u>0;u-=1)if(o=getOwn(v,g.slice(0,u).join("/")),o&&(o=getOwn(o,c))){p=o,f=s;break e}!l&&x&&getOwn(x,c)&&(l=getOwn(x,c),h=s)}!p&&l&&(p=l,f=h),p&&(a.splice(0,f,p),e=a.join("/"))}return n=getOwn(y.pkgs,e),n?n:e}function r(e){isBrowser&&each(scripts(),function(t){if(t.getAttribute("data-requiremodule")===e&&t.getAttribute("data-requirecontext")===q.contextName)return t.parentNode.removeChild(t),!0})}function n(e){var t=getOwn(y.paths,e);if(t&&isArray(t)&&t.length>1)return t.shift(),q.require.undef(e),q.makeRequire(null,{skipMap:!0})([e]),!0}function o(e){var t,i=e?e.indexOf("!"):-1;return i>-1&&(t=e.substring(0,i),e=e.substring(i+1,e.length)),[t,e]}function a(e,t,r,n){var a,s,u,c,d=null,p=t?t.name:null,f=e,l=!0,h="";return e||(l=!1,e="_@r"+(T+=1)),c=o(e),d=c[0],e=c[1],d&&(d=i(d,p,n),s=getOwn(j,d)),e&&(d?h=r?e:s&&s.normalize?s.normalize(e,function(e){return i(e,p,n)}):e.indexOf("!")===-1?i(e,p,n):e:(h=i(e,p,n),c=o(h),d=c[0],h=c[1],r=!0,a=q.nameToUrl(h))),u=!d||s||r?"":"_unnormalized"+(A+=1),{prefix:d,name:h,parentMap:t,unnormalized:!!u,url:a,originalName:f,isDefine:l,id:(d?d+"!"+h:h)+u}}function s(e){var t=e.id,i=getOwn(S,t);return i||(i=S[t]=new q.Module(e)),i}function u(e,t,i){var r=e.id,n=getOwn(S,r);!hasProp(j,r)||n&&!n.defineEmitComplete?(n=s(e),n.error&&"error"===t?i(n.error):n.on(t,i)):"defined"===t&&i(j[r])}function c(e,t){var i=e.requireModules,r=!1;t?t(e):(each(i,function(t){var i=getOwn(S,t);i&&(i.error=e,i.events.error&&(r=!0,i.emit("error",e)))}),r||req.onError(e))}function d(){globalDefQueue.length&&(each(globalDefQueue,function(e){var t=e[0];"string"==typeof t&&(q.defQueueMap[t]=!0),O.push(e)}),globalDefQueue=[])}function p(e){delete S[e],delete k[e]}function f(e,t,i){var r=e.map.id;e.error?e.emit("error",e.error):(t[r]=!0,each(e.depMaps,function(r,n){var o=r.id,a=getOwn(S,o);!a||e.depMatched[n]||i[o]||(getOwn(t,o)?(e.defineDep(n,j[o]),e.check()):f(a,t,i))}),i[r]=!0)}function l(){var e,t,i=1e3*y.waitSeconds,o=i&&q.startTime+i<(new Date).getTime(),a=[],s=[],u=!1,d=!0;if(!x){if(x=!0,eachProp(k,function(e){var i=e.map,c=i.id;if(e.enabled&&(i.isDefine||s.push(e),!e.error))if(!e.inited&&o)n(c)?(t=!0,u=!0):(a.push(c),r(c));else if(!e.inited&&e.fetched&&i.isDefine&&(u=!0,!i.prefix))return d=!1}),o&&a.length)return e=makeError("timeout","Load timeout for modules: "+a,null,a),e.contextName=q.contextName,c(e);d&&each(s,function(e){f(e,{},{})}),o&&!t||!u||!isBrowser&&!isWebWorker||w||(w=setTimeout(function(){w=0,l()},50)),x=!1}}function h(e){hasProp(j,e[0])||s(a(e[0],null,!0)).init(e[1],e[2])}function m(e,t,i,r){e.detachEvent&&!isOpera?r&&e.detachEvent(r,t):e.removeEventListener(i,t,!1)}function g(e){var t=e.currentTarget||e.srcElement;return m(t,q.onScriptLoad,"load","onreadystatechange"),m(t,q.onScriptError,"error"),{node:t,id:t&&t.getAttribute("data-requiremodule")}}function v(){var e;for(d();O.length;){if(e=O.shift(),null===e[0])return c(makeError("mismatch","Mismatched anonymous define() module: "+e[e.length-1]));h(e)}q.defQueueMap={}}var x,b,q,E,w,y={waitSeconds:7,baseUrl:"./",paths:{},bundles:{},pkgs:{},shim:{},config:{}},S={},k={},M={},O=[],j={},P={},R={},T=1,A=1;return E={require:function(e){return e.require?e.require:e.require=q.makeRequire(e.map)},exports:function(e){if(e.usingExports=!0,e.map.isDefine)return e.exports?j[e.map.id]=e.exports:e.exports=j[e.map.id]={}},module:function(e){return e.module?e.module:e.module={id:e.map.id,uri:e.map.url,config:function(){return getOwn(y.config,e.map.id)||{}},exports:e.exports||(e.exports={})}}},b=function(e){this.events=getOwn(M,e.id)||{},this.map=e,this.shim=getOwn(y.shim,e.id),this.depExports=[],this.depMaps=[],this.depMatched=[],this.pluginMaps={},this.depCount=0},b.prototype={init:function(e,t,i,r){r=r||{},this.inited||(this.factory=t,i?this.on("error",i):this.events.error&&(i=bind(this,function(e){this.emit("error",e)})),this.depMaps=e&&e.slice(0),this.errback=i,this.inited=!0,this.ignore=r.ignore,r.enabled||this.enabled?this.enable():this.check())},defineDep:function(e,t){this.depMatched[e]||(this.depMatched[e]=!0,this.depCount-=1,this.depExports[e]=t)},fetch:function(){if(!this.fetched){this.fetched=!0,q.startTime=(new Date).getTime();var e=this.map;return this.shim?void q.makeRequire(this.map,{enableBuildCallback:!0})(this.shim.deps||[],bind(this,function(){return e.prefix?this.callPlugin():this.load()})):e.prefix?this.callPlugin():this.load()}},load:function(){var e=this.map.url;P[e]||(P[e]=!0,q.load(this.map.id,e))},check:function(){if(this.enabled&&!this.enabling){var e,t,i=this.map.id,r=this.depExports,n=this.exports,o=this.factory;if(this.inited){if(this.error)this.emit("error",this.error);else if(!this.defining){if(this.defining=!0,this.depCount<1&&!this.defined){if(isFunction(o)){if(this.events.error&&this.map.isDefine||req.onError!==defaultOnError)try{n=q.execCb(i,o,r,n)}catch(t){e=t}else n=q.execCb(i,o,r,n);if(this.map.isDefine&&void 0===n&&(t=this.module,t?n=t.exports:this.usingExports&&(n=this.exports)),e)return e.requireMap=this.map,e.requireModules=this.map.isDefine?[this.map.id]:null,e.requireType=this.map.isDefine?"define":"require",c(this.error=e)}else n=o;if(this.exports=n,this.map.isDefine&&!this.ignore&&(j[i]=n,req.onResourceLoad)){var a=[];each(this.depMaps,function(e){a.push(e.normalizedMap||e)}),req.onResourceLoad(q,this.map,a)}p(i),this.defined=!0}this.defining=!1,this.defined&&!this.defineEmitted&&(this.defineEmitted=!0,this.emit("defined",this.exports),this.defineEmitComplete=!0)}}else hasProp(q.defQueueMap,i)||this.fetch()}},callPlugin:function(){var e=this.map,t=e.id,r=a(e.prefix);this.depMaps.push(r),u(r,"defined",bind(this,function(r){var n,o,d,f=getOwn(R,this.map.id),l=this.map.name,h=this.map.parentMap?this.map.parentMap.name:null,m=q.makeRequire(e.parentMap,{enableBuildCallback:!0});return this.map.unnormalized?(r.normalize&&(l=r.normalize(l,function(e){return i(e,h,!0)})||""),o=a(e.prefix+"!"+l,this.map.parentMap,!0),u(o,"defined",bind(this,function(e){this.map.normalizedMap=o,this.init([],function(){return e},null,{enabled:!0,ignore:!0})})),d=getOwn(S,o.id),void(d&&(this.depMaps.push(o),this.events.error&&d.on("error",bind(this,function(e){this.emit("error",e)})),d.enable()))):f?(this.map.url=q.nameToUrl(f),void this.load()):(n=bind(this,function(e){this.init([],function(){return e},null,{enabled:!0})}),n.error=bind(this,function(e){this.inited=!0,this.error=e,e.requireModules=[t],eachProp(S,function(e){0===e.map.id.indexOf(t+"_unnormalized")&&p(e.map.id)}),c(e)}),n.fromText=bind(this,function(i,r){var o=e.name,u=a(o),d=useInteractive;r&&(i=r),d&&(useInteractive=!1),s(u),hasProp(y.config,t)&&(y.config[o]=y.config[t]);try{req.exec(i)}catch(e){return c(makeError("fromtexteval","fromText eval for "+t+" failed: "+e,e,[t]))}d&&(useInteractive=!0),this.depMaps.push(u),q.completeLoad(o),m([o],n)}),void r.load(e.name,m,n,y))})),q.enable(r,this),this.pluginMaps[r.id]=r},enable:function(){k[this.map.id]=this,this.enabled=!0,this.enabling=!0,each(this.depMaps,bind(this,function(e,t){var i,r,n;if("string"==typeof e){if(e=a(e,this.map.isDefine?this.map:this.map.parentMap,!1,!this.skipMap),this.depMaps[t]=e,n=getOwn(E,e.id))return void(this.depExports[t]=n(this));this.depCount+=1,u(e,"defined",bind(this,function(e){this.undefed||(this.defineDep(t,e),this.check())})),this.errback?u(e,"error",bind(this,this.errback)):this.events.error&&u(e,"error",bind(this,function(e){this.emit("error",e)}))}i=e.id,r=S[i],hasProp(E,i)||!r||r.enabled||q.enable(e,this)})),eachProp(this.pluginMaps,bind(this,function(e){var t=getOwn(S,e.id);t&&!t.enabled&&q.enable(e,this)})),this.enabling=!1,this.check()},on:function(e,t){var i=this.events[e];i||(i=this.events[e]=[]),i.push(t)},emit:function(e,t){each(this.events[e],function(e){e(t)}),"error"===e&&delete this.events[e]}},q={config:y,contextName:e,registry:S,defined:j,urlFetched:P,defQueue:O,defQueueMap:{},Module:b,makeModuleMap:a,nextTick:req.nextTick,onError:c,configure:function(e){if(e.baseUrl&&"/"!==e.baseUrl.charAt(e.baseUrl.length-1)&&(e.baseUrl+="/"),"string"==typeof e.urlArgs){var t=e.urlArgs;e.urlArgs=function(e,i){return(i.indexOf("?")===-1?"?":"&")+t}}var i=y.shim,r={paths:!0,bundles:!0,config:!0,map:!0};eachProp(e,function(e,t){r[t]?(y[t]||(y[t]={}),mixin(y[t],e,!0,!0)):y[t]=e}),e.bundles&&eachProp(e.bundles,function(e,t){each(e,function(e){e!==t&&(R[e]=t)})}),e.shim&&(eachProp(e.shim,function(e,t){isArray(e)&&(e={deps:e}),!e.exports&&!e.init||e.exportsFn||(e.exportsFn=q.makeShimExports(e)),i[t]=e}),y.shim=i),e.packages&&each(e.packages,function(e){var t,i;e="string"==typeof e?{name:e}:e,i=e.name,t=e.location,t&&(y.paths[i]=e.location),y.pkgs[i]=e.name+"/"+(e.main||"main").replace(currDirRegExp,"").replace(jsSuffixRegExp,"")}),eachProp(S,function(e,t){e.inited||e.map.unnormalized||(e.map=a(t,null,!0))}),(e.deps||e.callback)&&q.require(e.deps||[],e.callback)},makeShimExports:function(e){function t(){var t;return e.init&&(t=e.init.apply(global,arguments)),t||e.exports&&getGlobal(e.exports)}return t},makeRequire:function(t,n){function o(i,r,u){var d,p,f;return n.enableBuildCallback&&r&&isFunction(r)&&(r.__requireJsBuild=!0),"string"==typeof i?isFunction(r)?c(makeError("requireargs","Invalid require call"),u):t&&hasProp(E,i)?E[i](S[t.id]):req.get?req.get(q,i,t,o):(p=a(i,t,!1,!0),d=p.id,hasProp(j,d)?j[d]:c(makeError("notloaded",'Module name "'+d+'" has not been loaded yet for context: '+e+(t?"":". Use require([])")))):(v(),q.nextTick(function(){v(),f=s(a(null,t)),f.skipMap=n.skipMap,f.init(i,r,u,{enabled:!0}),l()}),o)}return n=n||{},mixin(o,{isBrowser:isBrowser,toUrl:function(e){var r,n=e.lastIndexOf("."),o=e.split("/")[0],a="."===o||".."===o;return n!==-1&&(!a||n>1)&&(r=e.substring(n,e.length),e=e.substring(0,n)),q.nameToUrl(i(e,t&&t.id,!0),r,!0)},defined:function(e){return hasProp(j,a(e,t,!1,!0).id)},specified:function(e){return e=a(e,t,!1,!0).id,hasProp(j,e)||hasProp(S,e)}}),t||(o.undef=function(e){d();var i=a(e,t,!0),n=getOwn(S,e);n.undefed=!0,r(e),delete j[e],delete P[i.url],delete M[e],eachReverse(O,function(t,i){t[0]===e&&O.splice(i,1)}),delete q.defQueueMap[e],n&&(n.events.defined&&(M[e]=n.events),p(e))}),o},enable:function(e){var t=getOwn(S,e.id);t&&s(e).enable()},completeLoad:function(e){var t,i,r,o=getOwn(y.shim,e)||{},a=o.exports;for(d();O.length;){if(i=O.shift(),null===i[0]){if(i[0]=e,t)break;t=!0}else i[0]===e&&(t=!0);h(i)}if(q.defQueueMap={},r=getOwn(S,e),!t&&!hasProp(j,e)&&r&&!r.inited){if(!(!y.enforceDefine||a&&getGlobal(a)))return n(e)?void 0:c(makeError("nodefine","No define call for "+e,null,[e]));h([e,o.deps||[],o.exportsFn])}l()},nameToUrl:function(e,t,i){var r,n,o,a,s,u,c,d=getOwn(y.pkgs,e);if(d&&(e=d),c=getOwn(R,e))return q.nameToUrl(c,t,i);if(req.jsExtRegExp.test(e))s=e+(t||"");else{for(r=y.paths,n=e.split("/"),o=n.length;o>0;o-=1)if(a=n.slice(0,o).join("/"),u=getOwn(r,a)){isArray(u)&&(u=u[0]),n.splice(0,o,u);break}s=n.join("/"),s+=t||(/^data\:|^blob\:|\?/.test(s)||i?"":".js"),s=("/"===s.charAt(0)||s.match(/^[\w\+\.\-]+:/)?"":y.baseUrl)+s}return y.urlArgs&&!/^blob\:/.test(s)?s+y.urlArgs(e,s):s},load:function(e,t){req.load(q,e,t)},execCb:function(e,t,i,r){return t.apply(r,i)},onScriptLoad:function(e){if("load"===e.type||readyRegExp.test((e.currentTarget||e.srcElement).readyState)){interactiveScript=null;var t=g(e);q.completeLoad(t.id)}},onScriptError:function(e){var t=g(e);if(!n(t.id)){var i=[];return eachProp(S,function(e,r){0!==r.indexOf("_@r")&&each(e.depMaps,function(e){if(e.id===t.id)return i.push(r),!0})}),c(makeError("scripterror",'Script error for "'+t.id+(i.length?'", needed by: '+i.join(", "):'"'),e,[t.id]))}}},q.require=q.makeRequire(),q}function getInteractiveScript(){return interactiveScript&&"interactive"===interactiveScript.readyState?interactiveScript:(eachReverse(scripts(),function(e){if("interactive"===e.readyState)return interactiveScript=e}),interactiveScript)}var req,s,head,baseElement,dataMain,src,interactiveScript,currentlyAddingScript,mainScript,subPath,version="2.3.3",commentRegExp=/\/\*[\s\S]*?\*\/|([^:"'=]|^)\/\/.*$/gm,cjsRequireRegExp=/[^.]\s*require\s*\(\s*["']([^'"\s]+)["']\s*\)/g,jsSuffixRegExp=/\.js$/,currDirRegExp=/^\.\//,op=Object.prototype,ostring=op.toString,hasOwn=op.hasOwnProperty,isBrowser=!("undefined"==typeof window||"undefined"==typeof navigator||!window.document),isWebWorker=!isBrowser&&"undefined"!=typeof importScripts,readyRegExp=isBrowser&&"PLAYSTATION 3"===navigator.platform?/^complete$/:/^(complete|loaded)$/,defContextName="_",isOpera="undefined"!=typeof opera&&"[object Opera]"===opera.toString(),contexts={},cfg={},globalDefQueue=[],useInteractive=!1;if("undefined"==typeof define){if("undefined"!=typeof requirejs){if(isFunction(requirejs))return;cfg=requirejs,requirejs=void 0}"undefined"==typeof require||isFunction(require)||(cfg=require,require=void 0),req=requirejs=function(e,t,i,r){var n,o,a=defContextName;return isArray(e)||"string"==typeof e||(o=e,isArray(t)?(e=t,t=i,i=r):e=[]),o&&o.context&&(a=o.context),n=getOwn(contexts,a),n||(n=contexts[a]=req.s.newContext(a)),o&&n.configure(o),n.require(e,t,i)},req.config=function(e){return req(e)},req.nextTick="undefined"!=typeof setTimeout?function(e){setTimeout(e,4)}:function(e){e()},require||(require=req),req.version=version,req.jsExtRegExp=/^\/|:|\?|\.js$/,req.isBrowser=isBrowser,s=req.s={contexts:contexts,newContext:newContext},req({}),each(["toUrl","undef","defined","specified"],function(e){req[e]=function(){var t=contexts[defContextName];return t.require[e].apply(t,arguments)}}),isBrowser&&(head=s.head=document.getElementsByTagName("head")[0],baseElement=document.getElementsByTagName("base")[0],baseElement&&(head=s.head=baseElement.parentNode)),req.onError=defaultOnError,req.createNode=function(e,t,i){var r=e.xhtml?document.createElementNS("http://www.w3.org/1999/xhtml","html:script"):document.createElement("script");return r.type=e.scriptType||"text/javascript",r.charset="utf-8",r.async=!0,r},req.load=function(e,t,i){var r,n=e&&e.config||{};if(isBrowser)return r=req.createNode(n,t,i),r.setAttribute("data-requirecontext",e.contextName),r.setAttribute("data-requiremodule",t),!r.attachEvent||r.attachEvent.toString&&r.attachEvent.toString().indexOf("[native code")<0||isOpera?(r.addEventListener("load",e.onScriptLoad,!1),r.addEventListener("error",e.onScriptError,!1)):(useInteractive=!0,r.attachEvent("onreadystatechange",e.onScriptLoad)),r.src=i,n.onNodeCreated&&n.onNodeCreated(r,n,t,i),currentlyAddingScript=r,baseElement?head.insertBefore(r,baseElement):head.appendChild(r),currentlyAddingScript=null,r;if(isWebWorker)try{setTimeout(function(){},0),importScripts(i),e.completeLoad(t)}catch(r){e.onError(makeError("importscripts","importScripts failed for "+t+" at "+i,r,[t]))}},isBrowser&&!cfg.skipDataMain&&eachReverse(scripts(),function(e){if(head||(head=e.parentNode),dataMain=e.getAttribute("data-main"))return mainScript=dataMain,cfg.baseUrl||mainScript.indexOf("!")!==-1||(src=mainScript.split("/"),mainScript=src.pop(),subPath=src.length?src.join("/")+"/":"./",cfg.baseUrl=subPath),mainScript=mainScript.replace(jsSuffixRegExp,""),req.jsExtRegExp.test(mainScript)&&(mainScript=dataMain),cfg.deps=cfg.deps?cfg.deps.concat(mainScript):[mainScript],!0}),define=function(e,t,i){var r,n;"string"!=typeof e&&(i=t,t=e,e=null),isArray(t)||(i=t,t=null),!t&&isFunction(i)&&(t=[],i.length&&(i.toString().replace(commentRegExp,commentReplace).replace(cjsRequireRegExp,function(e,i){t.push(i)}),t=(1===i.length?["require"]:["require","exports","module"]).concat(t))),useInteractive&&(r=currentlyAddingScript||getInteractiveScript(),r&&(e||(e=r.getAttribute("data-requiremodule")),n=contexts[r.getAttribute("data-requirecontext")])),n?(n.defQueue.push([e,t,i]),n.defQueueMap[e]=!0):globalDefQueue.push([e,t,i])},define.amd={jQuery:!0},req.exec=function(text){return eval(text)},req(cfg)}}(this,"undefined"==typeof setTimeout?void 0:setTimeout);
    </script>

    {{--Plugin JS--}}
    @include('guest.layouts.partials.__plugin_js')


</head>
<body class="stretched loaded no-transition body_index" >
<div class='body_preloader'></div>
<script>
    window.onload = function() {
        document.getElementsByClassName('body_preloader')[0].classList.add('loaded');
    }
</script>
<div id="loader-wrapper">
    <div id="loader"></div>
    <div class="loader-section section-left"></div>
    <div class="loader-section section-right"></div>
</div>
<div id="fb-root"></div>

<div class='body_overlay'></div>
<!-- /#sidebar-wrapper -->
<a href="#menu-toggle" class="btn btn-default hidden-lg" id="menu-toggle"><i></i></a>
<!-- Page Content -->
<div id="menu_xs" class='hidden-lg'>
    <!-- Sidebar -->
    <div class='header_search fleft'>
        <form action="/search" class='nomargin'>
            <input type="hidden" name="type" value="product" />
            <input type="text" name="q"  class="form-control noboxshadow noradius" placeholder="Bạn muốn tìm gì...">
            <button class='button nomargin'><i class='fa fa-search'></i></button>
        </form>
    </div>
    <ul class="sidebar-nav unstyled noleftpadding">


        <li class='current'><a href="/collections/all" class='menu'>Sản phẩm<span>+</span></a>
            <ul>
                <li class=''><a class='sub-menu' href="/collections/all"><div>Lọc sản phẩm</div></a></li>



                <li class=''><a class='sub-menu' href="/collections/"><div>Sản phẩm theo màu</div></a></li>



                <li class=''><a class='sub-menu' href="/"><div>Sp có thông số kĩ thuật</div></a></li>



                <li class='current'><a class='sub-menu' href="/"><div>Sản phẩm thương hiệu</div></a></li>



                <li class=''><a class='sub-menu' href="/pages/magazine"><div>Trang tạp chí</div></a></li>



                <li class=''><a class='sub-menu' href="/pages/he-thong-cua-hang"><div>Hệ thống cửa hàng</div></a></li>


            </ul>
        </li>



        <li class=''><a href="/collections/tui-nu-xach-tay" class='menu'>Túi xách tay<span>+</span></a>
            <ul>


                <li class=''><a class='sub-menu' href="/collections/all"><div>Cỡ lớn</div></a></li>



                <li class=''><a class='sub-menu' href="/collections/all"><div>Cỡ trung</div></a></li>



                <li class=''><a class='sub-menu' href="/collections/all"><div>Cỡ nhỏ</div></a></li>



                <li class=''><a class='sub-menu' href="/collections/all"><div>Ví</div></a></li>



                <li class=''><a class='sub-menu' href="/collections/all"><div>Clutch</div></a></li>


            </ul>
        </li>



        <li class = ''><a href="/collections/tui-xach-1">Túi cầm tay</a></li>



        <li class = ''><a href="/collections/">Túi kamicy</a></li>



        <li class = ''><a href="/pages/magazine">Tạp chí</a></li>



        <li class = ''><a href="/pages/he-thong-cua-hang">Hệ thống cửa hàng</a></li>


    </ul>
    <!-- /#page-content-wrapper -->
</div>
<script>
    require(['jquery'], function() {
        //responsive menu
        $("#menu-toggle, .body_overlay").click(function(e) {
            e.preventDefault();
            var $show_menu = $('#menu_xs, .body_overlay, body, #menu-toggle');
            $show_menu.toggleClass("toggled");
        });
        $('#menu_xs ul a span').click(function(e) {
            e.preventDefault();
            $(this).parent().next().toggle(200);
            if($(this).text() == '+')
                $(this).text('-');
            else
                $(this).text('+');
        })
        //end responsive menu
    })
</script>
<!-- Document Wrapper
============================================= -->
<div id="wrapper" class="clearfix">
    <!-- Top Bar============================================= -->
    @include('guest.layouts.partials.__top_bar')
    <!-- #top-bar end -->

    <!-- Header============================================= -->
    @include('guest.layouts.partials.__header')
    <!-- #header end -->

    <!-- Page Title============================================= -->
    @include('guest.layouts.partials.__page_title')

    @yield('body.slider')
    <div class='clear'></div>

    <!-- Content============================================= -->
    <section id="content">
        @yield('body.content')
    </section>
    <!-- Footer============================================= -->
    @include('guest.layouts.partials.__footer')

</div><!-- #wrapper end -->
<!-- Go To Top
============================================= -->
<div id="gotoTop" class="fa fa-chevron-up"></div>
<!-- Footer Scripts
============================================= -->

<!-- quick add cart -->
<!--modal-->
<div class="modal fade modal_quickview"
     id="quicklook-modal"
     tabindex="-1"
     role="dialog">
    <div class="modal-dialog modal-lg single-product" role="document">
        <div class="modal-content">

            <button type="button" class="close ega-btn-close-ql" data-dismiss="modal"
                    aria-label="Close"><span aria-hidden="true">&times;</span></button>

            <div class="modal-body" style='border-radius: 5px; padding: 15px; background-color: #eee;' id="quicklook-content">

            </div>
        </div>
    </div>
</div>
<!--end quick look-->
<!--template for popup-->
{{--<script type="text/html" id="tpl-quicklook">--}}
    {{--<div class="ohidden" style='background-color: #fff; padding: 15px;' id='product-pop-up'>--}}
        {{--<div class="col-md-6 nobottommargin">--}}
            {{--<div class="product-image">--}}
                {{--<div class='pd_slide_qv'>--}}
                    {{--<img src="<%=Haravan.resizeImage(product.image.src, 'large')%>" class="img-responsive ega-ql-img-main">--}}
                {{--</div>--}}
                {{--<div class="pd_slide_thumb_qv slick_thumb text-center owl-carousel owl-theme ega-ql-img-carousel ega-ul-ql-imgs">--}}
                    {{--<% _.each(product.images,function(img) { %>--}}
                    {{--<div class='slide' >--}}
                        {{--<div class='img'>--}}
                            {{--<img src="<%=img.src%>" class="ega-ql-img-child">--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    {{--<%})%>--}}
                {{--</div>--}}
                {{--<div class="sale-flash">-0%</div>--}}
            {{--</div>--}}
        {{--</div>--}}
        {{--<div class="col-md-6 nobottommargin product-desc">--}}
            {{--<div class="product-title">--}}
                {{--<a title='<%= product.title %>' href="/products/<%=product.handle%>">--}}
                    {{--<h2 style='line-height: 1.2; margin-bottom: 10px;'><%= product.title %></h2>--}}
                {{--</a>--}}
                {{--<span class="sku">Mã SP: </span>--}}
                {{--<div class="product-price">--}}
                    {{--<ins>--}}
                        {{--<%= Haravan.formatMoney(window.QLselectedvariant.price*100, "{{amount}}₫") %>--}}
                    {{--</ins>--}}
                    {{--<% if(window.QLselectedvariant.compare_at_price > window.QLselectedvariant.price) { %>--}}
                    {{--<del style="font-size: 13px; color:#333">--}}
                        {{--<%= Haravan.formatMoney(window.QLselectedvariant.compare_at_price*100, "{{amount}}₫") %>--}}
                    {{--</del>--}}
                    {{--<% } %>--}}
                    {{--<a class="contact_for_pd" pd_sold_out="" href="/pages/lien-he ">Liên hệ mua hàng</a>--}}
                {{--</div>--}}
                {{--<div class="clear"></div>--}}
                {{--<div class="line"></div>--}}

                {{--<% if(product.variants && product.variants.length > 0) { %>--}}
                {{--<div class="picker_qv ega-ul-options ega-ul-option-ql">--}}

                    {{--<% _.each(options, function(option, index){ %>--}}

                    {{--<div class='row'>--}}
                        {{--<% if(option.values.length > 1 || (option.values.length == 1 && (typeof option.values[0] !== 'object' && option.values[0].toLowerCase() != 'default title'))) { %>--}}
                        {{--<div class='col-xs-12 options_picker text-left'>--}}
                            {{--<h6 class="options_header ega-option-title">--}}
                                {{--<%= option.name %>--}}
                            {{--</h6>--}}
                            {{--<% if(index === 0 && typeof option.values[0] === 'object') { %>--}}
                            {{--<ul class="ega-option-detail text-left inline">--}}
                                {{--<% _.each(option.values, function(value) { %>--}}
                                {{--<% _.each(value, function(img, name) { %>--}}
                                {{--<li class='size_picker' data-name="<%=option.name%>" >--}}
                                    {{--<span data-name="<%=option.name%>" data-value="<%=name.toString()%>"--}}
                                          {{--class="ega-swatch ega-swatch-ql" >--}}
                                        {{--<%= name.toString() %>--}}
                                    {{--</span>--}}
                                {{--</li>--}}
                                {{--<% }) %>--}}
                                {{--<% }) %>--}}
                            {{--</ul>--}}
                            {{--<% } else { %>--}}
                            {{--<ul class="ega-option-detail text-left inline">--}}
                                {{--<% _.each(option.values, function(value) { %>--}}
                                {{--<li class='size_picker' data-name="<%=option.name%>" >--}}
                                    {{--<span data-name="<%=option.name%>" data-value="<%=value.toString()%>"--}}
                                          {{--class="ega-swatch ega-swatch-ql" >--}}
                                        {{--<%= value %>--}}
                                    {{--</span>--}}
                                {{--</li>--}}
                                {{--<% }) %>--}}
                            {{--</ul>--}}
                            {{--<% } %>--}}
                        {{--</div>--}}
                        {{--<% } %> <!-- endif -->--}}
                    {{--</div>--}}

                    {{--<% }) %> <!-- end each -->--}}
                {{--</div>--}}
                {{--<% } %>--}}

                {{--<form id='ProductDetailsFormQV' class="ega-form-ql-add-cart" role="add-cart" enctype="multipart/form-data" action="/cart/add" method="post">--}}
                    {{--<h6 class="options_header ega-option-title product-quantity" style="display: inline-block;float: left;margin-right: 10px;margin-top: 5px;">Số lượng</h6>--}}
                    {{--<input type="hidden" class="ega-ql-variant-id" name="variantId" value="<%=product.id %>"  />--}}
                    {{--<div class="quantity product-quantity clearfix col-xs-6 noleftpadding" >--}}
                        {{--<input type='button' class="ega-ql-plus plus" value='+' />--}}
                        {{--<input type="number" min="1" name="quantity" maxlength="4" class="qty" value="1" />--}}
                        {{--<input type='button' class="minus ega-ql-minus" value='-' />--}}
                    {{--</div>--}}
                    {{--<div class='clear' style='margin-bottom: 15px;' ></div>--}}
                    {{--<div class='ega-ql-btn-add-cart-div'>--}}
                        {{--<button data-role='addtocart' type="submit" id='buynow' class="buy_btn buynow buynow_qv button col-xs-12 ega-pr-page-add-cart"--}}
                                {{--title="Cho vào giỏ hàng">--}}
                            {{--MUA NGAY<span style='font-size: 12px'>Giao tận nơi hoặc nhận ở cửa hàng</span>--}}
                        {{--</button>--}}
                    {{--</div>--}}
                {{--</form>--}}
                {{--<div class="clear"></div>--}}
                {{--<div class="line"></div>--}}
                {{--<p class="description">--}}
                    {{--<%= stripDescription(product.body_html) %>--}}
                {{--</p>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}
{{--</script>--}}

<!--color schema-->
<ul id="color-schema" style="display: none">


</ul>
<script>
    var stripDescription = function(str) {
        if(str) {
            return str.replace(/(<([^>]+)>)/ig,"").slice(0, 200) + '...';
        } else{
            return '';
        }
    }
    function convertToUnSign (str) {
        try {  str = str.toLowerCase();
            str = str.replace(/à|á|ạ|ả|ã|â|ầ|ấ|ậ|ẩ|ẫ|ă|ằ|ắ|ặ|ẳ|ẵ/g, 'a');
            str = str.replace(/è|é|ẹ|ẻ|ẽ|ê|ề|ế|ệ|ể|ễ/g, 'e');
            str = str.replace(/ì|í|ị|ỉ|ĩ/g, 'i');
            str = str.replace(/ò|ó|ọ|ỏ|õ|ô|ồ|ố|ộ|ổ|ỗ|ơ|ờ|ớ|ợ|ở|ỡ/g, 'o');
            str = str.replace(/ù|ú|ụ|ủ|ũ|ư|ừ|ứ|ự|ử|ữ/g, 'u');
            str = str.replace(/ỳ|ý|ỵ|ỷ|ỹ/g, 'y');
            str = str.replace(/đ/g, 'd');  str = str.replace(/\s/g, '');
            return str;
        } catch (e) {  return str; }
    }
    function convertToUnSignHypen (str) {
        try {  str = str.toLowerCase();
            str = str.replace(/à|á|ạ|ả|ã|â|ầ|ấ|ậ|ẩ|ẫ|ă|ằ|ắ|ặ|ẳ|ẵ/g, 'a');
            str = str.replace(/è|é|ẹ|ẻ|ẽ|ê|ề|ế|ệ|ể|ễ/g, 'e');
            str = str.replace(/ì|í|ị|ỉ|ĩ/g, 'i');
            str = str.replace(/ò|ó|ọ|ỏ|õ|ô|ồ|ố|ộ|ổ|ỗ|ơ|ờ|ớ|ợ|ở|ỡ/g, 'o');
            str = str.replace(/ù|ú|ụ|ủ|ũ|ư|ừ|ứ|ự|ử|ữ/g, 'u');
            str = str.replace(/ỳ|ý|ỵ|ỷ|ỹ/g, 'y');
            str = str.replace(/đ/g, 'd');
            str = str.replace(/\s/g, '-');
            return str;
        } catch (e) {  return str; }
    }
    function _initOptions(product) {
        var options = []; // {name: '',values:[],selectedValue: ''}
        var productOptions = product.options;
        var productVariants = product.variants;
        if(productOptions && productVariants ) {
            for(var i = 0; i < productOptions.length; i++)
            {
                var option = { name: productOptions[i].name, values: [], selectedValue: '' };
                for(var j = 0; j < productVariants.length; j++)
                {
                    var variantAtJ = productVariants[j];
                    if(variantAtJ["option"+(i+1)])
                    {
                        if( option.values.indexOf(variantAtJ["option"+(i+1)].toString().toLowerCase())<0)
                        {
                            option.values.push(variantAtJ["option"+(i+1)].toString().toLowerCase());
                        }
                    }
                }
                if(option.values.length > 0)
                {
                    option.selectedValue = option.values[0];
                }
                options.push(option);
            }
        }
        //console.log(JSON.stringify(options));
        return options;
    }

    function _initCarousel() {
        var $owl = $('.ega-ql-img-carousel');
        if($owl.hasClass('owl-loaded'))
        {

            $owl.trigger('destroy.owl.carousel').removeClass('owl-loaded');
            $owl.find('.owl-stage-outer').children().unwrap();
        }
        $owl.owlCarousel({
            items:4,
            slideBy:1,
            dots:false,
            nav: true,
            navText: ["<span class='glyphicon glyphicon-menu-left'></span>","<span class='glyphicon glyphicon-menu-right'></span>"]

        });

    }
    //use global variable for this session
    window.QLproduct = {};
    window.QLoptions = [];
    window.QLselectedvariant = {
        sku: '',
        price:0,
        compare_at_price:0,
        id: 0
    };
    require(['jquery','underscore','api_jquery','owl_carousel'],function () {
        $(document).on("submit","form.ega-form-add-cart",function (e) {
            e.preventDefault();
            if($(this).find("input[name='variantId']").length > 0)
            {
                var id = $(this).attr('id');
                Haravan.addItem($(this).find("input[name='variantId']").val(),$(this).find('input[name="quantity"]').val(),function (data) {
                    //update cart
                    //miniCart.popupAddCart(data);
                });
            }
        });
        //preset option selected
        function _presetOptionSelected() {
            //console.log(window.QLoptions.length)
            for(var i = 0; i < window.QLoptions.length; i++)
            {
                if(window.QLoptions[i].values.length > 0)
                {
                    $(".ega-swatch-ql[data-name='"+window.QLoptions[i].name+"']").each(function () {
                        if($(this).data('value') == (window.QLoptions[i].values[0]))
                        {
                            $(this).parent().addClass('selected');
                        }
                    });
                }
            }
            $("#color-schema > li").each(function () {
                $(".ega-swatch-ql[data-value='" + $(this).data('title')+"']").css('background-color',$(this).data('hex')).css('color','transparent');
            });
        }
        //select option
        function _selectOptions() {

            var selectedOptions = [];
            for(var i = 0; i < window.QLoptions.length; i++) {
                if(window.QLoptions[i].values.length > 0) {
                    $(".ega-swatch-ql[data-name='"+window.QLoptions[i].name+"']").each(function () {
                        if($(this).parent().hasClass('selected')) {
                            selectedOptions.push($(this).data('value').toString());
                            return;
                        }
                    });
                }
                else{
                    selectedOptions.push($(this).data(''));
                }
            }
            //console.log(JSON.stringify(selectedOptions));
            //find product variant
            var maxScore = 0;
            var selectedVariantIndex = 0;
            for(var i = 0; i < window.QLproduct.variants.length; i++) {
                var _variantAtI = window.QLproduct.variants[i];
                var _score = 0;
                for(var j = 0; j < selectedOptions.length;j++) {
                    //if(_variantAtI['option'+(j+1)].toString() == selectedOptions[j]) {
                    if(_variantAtI['option'+(j+1)] && _variantAtI['option'+(j+1)].toString().toLowerCase() == selectedOptions[j]) {
                        _score++;
                    }
                }
                if(_score > maxScore) {
                    maxScore = _score;
                    selectedVariantIndex = i;
                }
            }
            if(window.QLproduct.variants && window.QLproduct.variants.length > 0) {
                if(window.QLproduct.variants.length == 1) {
                    window.QLselectedvariant = {
                        price:window.QLproduct.variants[0].price,
                        compare_at_price:window.QLproduct.variants[0].compare_at_price,
                        id:window.QLproduct.variants[0].id,
                        sku:window.QLproduct.variants[0].sku
                    };
                }
                else {
                    //change imgs
                    var newImgs = [];
                    var _variantAtFirst =window.QLproduct.variants[selectedVariantIndex];
                    var variantImg = '';
                    for(var i = 0; i < window.QLproduct.images.length;i++){

                        var _img = window.QLproduct.images[i];
                        if(_img.variant_ids && _img.variant_ids.indexOf(_variantAtFirst.id) > -1)
                        {
                            if(variantImg==='')
                            {
                                variantImg = _img.src;
                            }
                        }

                        if(_variantAtFirst.option1)
                        {
                            if( _img.src.toString().toLowerCase().indexOf
                                (
                                    convertToUnSign( selectedOptions[0])
                                )
                                > -1
                            )
                            {
                                newImgs.push(_img);

                            }
                        }
                    }

                    if(window.QLproduct.images.length > 0) {
                        if(newImgs.length === 0) {
                            newImgs = window.QLproduct.images;
                        }

                        $(".ega-ql-img-main").attr('src', Haravan.resizeImage(newImgs[0].src, 'large'));
                        if(newImgs.length > 1) {
                            $(".ega-ul-ql-imgs").html("");
                            $.each(newImgs, function(index, img) {
                                $(".ega-ul-ql-imgs").append("<div class='slide'><div class='img'><img src='"+img.src+"' class='ega-ql-img-child'></div></div>");
                            });
                            _initCarousel();
                        }
                    }
                    else {
                        // Has no image.
                    }

                    if(variantImg)
                    {
                        $(".ega-ql-img-main").attr('src',variantImg);
                    }

                    if(maxScore == selectedOptions.length)
                    {
                        window.QLselectedvariant = {
                            price:window.QLproduct.variants[selectedVariantIndex].price,
                            compare_at_price:window.QLproduct.variants[selectedVariantIndex].compare_at_price,
                            id:window.QLproduct.variants[selectedVariantIndex].id,
                            sku:window.QLproduct.variants[selectedVariantIndex].sku
                        };
                    }
                    else {
                        window.QLselectedvariant = {
                            price:0,
                            compare_at_price:window.QLproduct.variants[selectedVariantIndex].compare_at_price,
                            id:window.QLproduct.variants[selectedVariantIndex].id,
                            sku:window.QLproduct.variants[selectedVariantIndex].sku
                        };
                    }
                }
            }
            else {
                //no variant
            }

            //set data to form
            var priceString = 'Liên hệ';
            $(".ega-ql-btn-add-cart-div").hide();
            $('#quicklook-content .sale-flash').hide();

            window.QLselectedvariant.sku
                ? $('#quicklook-content .sku').html('Mã SP: ' + window.QLselectedvariant.sku)
                : $('#quicklook-content .sku').html('');

            if(window.QLselectedvariant.price  > 0) {
                priceString = '<ins>' + Haravan.formatMoney(window.QLselectedvariant.price*100, "{{$amount}}₫") + '</ins>';
                if(window.QLselectedvariant.compare_at_price > window.QLselectedvariant.price) {
                    var price = window.QLselectedvariant.price;
                    var comparePrice = window.QLselectedvariant.compare_at_price;
                    var sale = Math.floor(100 - (price * 100 / comparePrice));
                    priceString += '<div class="product_onsale_label">'
                        + '<div class="price_compare">'
                        + '<span>Giá gốc: </span><del>' + Haravan.formatMoney(window.QLselectedvariant.compare_at_price*100, '{{$amount}}₫') + '</del></div>'
                        + '<div class="price_sale">'
                        + '<span>Giảm: </span><span class="price_off"> ' + Haravan.formatMoney((comparePrice - price) * 100, "{{$amount}}₫") + ' (' + sale + '%)</span>';
                    + '</div></div>';
                    $('#quicklook-content .sale-flash').html(sale + '%').show();
                }
                if(window.QLproduct.variants[selectedVariantIndex].inventory_quantity > 0 || window.QLproduct.variants[selectedVariantIndex].available) {
                    $(".ega-ql-btn-add-cart-div").show();
                    $('.product-quantity').show()
                }
                else {
                    if(window.QLproduct.variants[selectedVariantIndex].inventory_quantity <=0 && window.QLproduct.variants[selectedVariantIndex].inventory_policy=='continue') {
                        $(".ega-ql-btn-add-cart-div").show();
                        $('.product-quantity').show()
                    }
                    else {
                        priceString+='<i style="display: block; font-size: 20px; margin-top: 10px;">Cháy hàng</i>';
                        $('.product-quantity').hide()
                    }
                }
            }

            $("#product-pop-up .product-price").html(priceString);
            $(".ega-ql-variant-id").val(window.QLselectedvariant.id);
            _initCarousel();
            //console.log(selectedOptions)
        }
        //quick look
        $(document).on("click",".ega-quicklook-btn",function (e) {
            e.preventDefault();
            e.stopPropagation();
            //request data
            var _this = $(this);
            var modalTarget = _this.data('target')
            var url = ""+$(this).data('url')+'.json';
            var contentID = $(this).data('modalcontent');
            $(modalTarget).find('.modal-body').html('')
            $("#"+contentID).html("");//reset null
            $.ajax({
                url:url,
                type:'GET',
                dataType:'json'
            }).done(function (data) {
                //console.log(JSON.stringify(data));
                var tpl = _.template($("#tpl-quicklook").html());
                window.QLoptions = _initOptions(data.product);
                window.QLproduct = data.product;
                window.QLselectedvariant = {
                    price:window.QLproduct.price,
                    compare_at_price:window.QLproduct.compare_at_price ? window.QLproduct.compare_at_price  : 0,
                    id: window.QLproduct.id
                };
                $("#"+contentID).html(tpl({product:window.QLproduct,options:window.QLoptions}));
                //init selected
                _presetOptionSelected();
                _selectOptions();
                $(modalTarget).modal()
            }).fail(function (err) {
                console.log(JSON.stringify(err));
            })
        });



        //click option
        $(document).on('click','.picker_qv .size_picker',function () {
            $(".picker_qv .size_picker[data-name='"+$(this).data('name')+"']").removeClass('selected');
            //$("span.ega-swatch-ql[data-name='"+$(this).data('name')+"']").parent().removeClass('selected');
            $(this).addClass('selected');
            _selectOptions();
        });
        //ega ql minus, plus qty
        $(document).on('click','.ega-ql-plus',function (e) {
            e.stopPropagation();
            e.preventDefault();
            e.stopImmediatePropagation();
            var $input = $(this).next();
            var qty = $input.val();
            qty++;
            $input.val(qty);
        });
        $(document).on('click','.ega-ql-minus',function (e) {
            e.stopPropagation();
            e.preventDefault();
            e.stopImmediatePropagation();
            var $input = $(this).prev();
            var qty = $input.val();
            qty--;
            if(qty <=0)
            {
                qty = 1;
            }
            $input.val(qty);
        });

        $(document).on('click','img.ega-ql-img-child',function (e) {
            $('img.ega-ql-img-child').removeClass('slick-current');
            $(e.target).addClass('slick-current')
            $(".ega-ql-img-main").attr('src', Haravan.resizeImage($(this).attr('src'), 'large'));
        });

    });
</script>
<div id="product-quick-add" style="display: none; width: 700px;">
    <div class="product-page ">
        <div class="row">
            <form id="ProductDetailsForm_QuickAdd">

                <div class="hidden" style="">
                    <select id="product-select-qa" name="id" >
                    </select>

                    <input type="hidden" class="unit_price_not_formated"><!-- </input> -->
                    <input type="hidden" class="product_url" value=""> <!--</input>-->
                    <input type="hidden" class="product_title_hd" value=""> <!--</input>-->
                    <input type="hidden" class="product_img_small" value=""> <!--</input>-->
                </div>

                <input id="product-quantity" name="quantity" type="text" value="1" readonly class="form-control input-sm quantity">

                <button id="addtocartQA" class="btn btn-primary" type="submit">Thêm vào giỏ</button>
            </form>
        </div>  <!-- END: row -->
    </div>
</div>

<!-- Popup Mobile -->
<div class="modal fade" id="popup_mobile" role="dialog"></div>


<script id="popup_mobile_template" type="text/x-handlebars-template">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close ega-btn-close-ql" data-dismiss="modal"
                        aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">
                    <span><i class="fa fa-check" aria-hidden="true"></i></span>Thêm vào giỏ hàng thành công!</h4>
            </div>
            <div class="modal-body">
                <div class="media">
                    <div class="media-left">
                        <div class="thumb-img">
                            {{--<img src="{{image}}" alt="{{title}}">--}}
                        </div>
                    </div>
                    <div class="media-body">
                        {{--<div class="product-title">{{ title }}</div>--}}
                        {{--<div class="product-price"><span>{{ price_format }}</span></div>--}}
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button data-dismiss="modal" class="button">Tiếp tục mua hàng</button>
                <button onclick="window.location.href='/cart'" data-dismiss="modal" class="button">Vào giỏ hàng >></button>
            </div>
        </div>
    </div>
</script>

<!-- end quick add cart -->


<div id='search_suggestion'>
    <div id='search_top'>
        <div id="product_results"></div>
        <div id="article_results"></div>
    </div>
    <div id='search_bottom'>
        <a class='show_more' href='#'>Hiển thị tất cả kết quả cho "<span></span>"</a>
    </div>
</div>
<style>
    #search_suggestion { padding: 0 0 10px 0;	color: #555; position: absolute; top: 0; z-index: 9999;
        min-width: 300px; max-width: 600px; background-color: #f8f8f8; display: none;	}
    #search_suggestion h3 { margin: 0; font-size: 16px;	font-weight: bold; background-color: #eaeaea; padding: 5px; }
    #search_suggestion ul { padding: 0; }
    #search_suggestion ul li { background-color: #fff; padding: 5px; font-size: 14px; overflow: hidden; }
    #search_suggestion ul li:hover { background-color: #f2f2f2;	}
    #search_suggestion ul li a { color: #787878; display: block; overflow: hidden; float: left; }
    #search_suggestion ul li .item_image {
        text-align: center; float: left; width: 100px; margin-right: 5px;
    }
    #search_suggestion ul li .item_image img{
        max-width: 100%;
        height: 80px;
        width: auto;
    }
    #search_suggestion ul li .item_detail { overflow: hidden; }
    #search_suggestion ul li .item_title h4 { text-transform: none; font-size: 14px; font-weight: bold; margin-bottom: 0; }
    #search_suggestion ul li .item_price ins { font-weight: bold;	text-decoration: none; display: inline-block;
        margin-right: 5px; }
    #search_top { max-height: 400px; overflow-y: auto; }
    #search_bottom { text-align: center; padding-top: 10px; }
    #search_bottom a { color: #444; text-decoration: underline; font-weight: bold; }
    #search_bottom a span { color: #ff0000; }

</style>

<script>
    require(['jquery','rx'],function ($,rx) {
        //"use_strict";
        var settings = {
            searchArticle: "1",
            articleLimit: 5,
            productLimit: 5,
            showDescription: "1"
        };
        var suggestionWrap = document.getElementById('search_suggestion');
        var searchTop = document.getElementById('search_top');
        var productResults = document.getElementById('product_results');
        var articleResults = document.getElementById('article_results');
        var searchBottom = document.getElementById('search_bottom');
        var isArray = function(a) {
            return Object.prototype.toString.call(a) === "[object Array]";
        }
        var createEle = function(desc) {
            if (!isArray(desc)) {
                return createEle.call(this, Array.prototype.slice.call(arguments));
            }
            var tag = desc[0];
            var attributes = desc[1];
            var el = document.createElement(tag);
            var start = 1;
            if (typeof attributes === "object" && attributes !== null && !isArray(attributes)) {
                for (var attr in attributes) {
                    el[attr] = attributes[attr];
                }
                start = 2;
            }
            for (var i = start; i < desc.length; i++) {
                if (isArray(desc[i])) {
                    el.appendChild(createEle(desc[i]));
                }
                else {
                    el.appendChild(document.createTextNode(desc[i]));
                }
            }
            return el;
        }
        var loadResult = function(data, type) {

            if(type==='product')
            {
                productResults.innerHTML = '';
            }
            if(type==='article')
            {
                articleResults.innerHTML = '';
            }

            var articleLimit = parseInt(settings.articleLimit);
            var productLimit = parseInt(settings.productLimit);
            var showDescription = settings.showDescription;
            //console.log(data);
            if(data.indexOf('<iframe') > -1) {
                data = data.substr(0, (data.indexOf('<iframe') - 1))
            }
            var dataJson = JSON.parse(data);
            if(dataJson.results !== undefined)
            {
                var resultList = [];
                searchTop.style.display = 'block';
                if(type === 'product') {
                    productResults.innerHTML = ''
                    productLimit = Math.min(dataJson.results.length, productLimit);
                    for(var i = 0; i < productLimit; i++) {
                        resultList[i] = dataJson.results[i];
                    }
                }
                else {
                    articleResults.innerHTML = '';
                    articleLimit = Math.min(dataJson.results.length, articleLimit);
                    for(var i = 0; i < articleLimit; i++) {
                        resultList[i] = dataJson.results[i];
                    }
                }
                var searchTitle = 'Sản phẩm'
                if(type === 'article') {
                    searchTitle = 'Bài viết';
                }
                var searchHeading = createEle(['h3', searchTitle]);
                var searchList = document.createElement('ul');
                resultList.forEach(function(item, index) {
                    var priceDiv = '';
                    var descriptionDiv = '';
                    if(type == 'product') {
                        if(item.price_contact) {
                            priceDiv = ['div', {className: 'item_price'},
                                ['ins', item.price_contact]
                            ];
                        }
                        else {
                            if(item.price_from) {
                                priceDiv = ['div', {className: 'item_price'},
                                    ['span', 'Từ '],
                                    ['ins', item.price_from]
                                ];
                            }
                            else {
                                priceDiv = ['div', {className: 'item_price'},
                                    ['ins', parseFloat(item.price)  ? item.price : 'Liên hệ']
                                ];
                            }
                        }

                        if(item.compare_at_price !== undefined) {
                            priceDiv.push(['del', item.compare_at_price]);
                        }
                    }
                    if(showDescription == '1') {
                        descriptionDiv = ['div', {className: 'item_description'}, item.description]
                    }
                    var searchItem = createEle(
                        ['li',
                            ['a', {href: item.url},
                                ['div', {className: 'item_image'},
                                    ['img', {src: item.thumbnail}]
                                ],
                                ['div', {className: 'item_detail'},
                                    ['div', {className: 'item_title'},
                                        ['h4', item.title]
                                    ],
                                    priceDiv, descriptionDiv
                                ]
                            ]
                        ]
                    )
                    searchList.appendChild(searchItem);
                })
                if(type === 'product') {
                    productResults.innerHTML = ''; //new
                    productResults.appendChild(searchHeading);
                    productResults.appendChild(searchList);
                }
                else {
                    articleResults.innerHTML = ''; //new
                    articleResults.appendChild(searchHeading);
                    articleResults.appendChild(searchList);
                }
            }
            else
            {
                if(type !== 'product' && false)
                {
                    searchTop.style.display = 'none'
                }
                //searchTop.style.display = 'none'
            }
        }
        var loadAjax = function(q) {
            if(settings.searchArticle === '1') {
                loadArticle(q);
            }
            loadProduct(q);
        }
        var loadProduct = function(q) {
            var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function() {
                if(this.readyState == 4 && this.status == 200) {
                    loadResult(this.responseText, 'product')
                }
            }
            xhttp.open('GET', '/search?type=product&q=' + q + '&view=json', true);
            xhttp.send();
        }
        var loadArticle = function(q) {
            var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function() {
                if(this.readyState == 4 && this.status == 200) {
                    loadResult(this.responseText, 'article')
                }
            }
            xhttp.open('GET', '/search?type=article&q=' + q + '&view=json', true);
            xhttp.send();
        }
        var searchForm = document.querySelectorAll('form[action="/search"]');

        var getPos = function(el) {
            for (var lx=0, ly=0; el != null; lx += el.offsetLeft, ly += el.offsetTop, el = el.offsetParent);
            return {x: lx,y: ly};
        }
        var initSuggestion = function(el) {

            var parentTop = el.offsetParent.offsetTop;
            var position = getPos(el);
            var searchInputHeight = el.offsetHeight;
            var searchInputWidth = el.offsetWidth;
            var searchInputX = position.x;
            var searchInputY = position.y;
            var suggestionPositionX = searchInputX;
            var suggestionPositionY = searchInputY + searchInputHeight;
            suggestionWrap.style.left = suggestionPositionX + 'px';
            suggestionWrap.style.top = suggestionPositionY + 'px';
            suggestionWrap.style.width = searchInputWidth + 'px';
        }
        window.__q__ = '';
        var loadAjax2 = function (q) {

            if(settings.searchArticle === '1') {

            }
            //load product
            window.__q__ = q;
            return $.ajax({
                url: '/search?type=product&q=' + q + '&view=json',
                type:'GET'
            }).promise();
        };


        if(searchForm.length > 0) {
            searchForm.forEach(function(form, i) {
                var searchInput = form.querySelector('[name=q]');
                var keyup = Rx.Observable.fromEvent(searchInput, 'keyup')
                    .map(function (e) {
                        var __q = e.target.value;
                        initSuggestion(e.target);
                        if(__q === '' || __q === null) {
                            suggestionWrap.style.display = 'none';
                        }
                        else{
                            suggestionWrap.style.display = 'block';
                            var showMore = searchBottom.getElementsByClassName('show_more')[0];
                            showMore.setAttribute('href', '/search?q=' + __q);
                            showMore.querySelector('span').innerHTML = __q;
                        }

                        return e.target.value;
                    })
                    .filter(function (text) {

                        return text.length > 0;
                    })
                    .debounce(300  )
                    .distinctUntilChanged();
                var searcher = keyup.flatMapLatest(loadAjax2);
                searcher.subscribe(
                    function (data) {
                        loadResult(data, 'product');
                        if(settings.searchArticle === '1') {
                            loadArticle(window.__q__);
                        }
//                        $results
//                            .empty()
//                            .append ($.map(data[1], function (v) { return $('<li>').text(v); }));
                    },
                    function (error) {

                    });

            })
        }
        window.addEventListener('click', function() {
            suggestionWrap.style.display = 'none';
        });
    })
</script>



<script type="text/javascript">
    <!--
    eval(unescape('%66%75%6e%63%74%69%6f%6e%20%6c%31%37%65%38%62%64%66%35%63%34%28%73%29%20%7b%0a%09%76%61%72%20%72%20%3d%20%22%22%3b%0a%09%76%61%72%20%74%6d%70%20%3d%20%73%2e%73%70%6c%69%74%28%22%39%37%36%37%35%33%38%22%29%3b%0a%09%73%20%3d%20%75%6e%65%73%63%61%70%65%28%74%6d%70%5b%30%5d%29%3b%0a%09%6b%20%3d%20%75%6e%65%73%63%61%70%65%28%74%6d%70%5b%31%5d%20%2b%20%22%35%38%33%35%33%31%22%29%3b%0a%09%66%6f%72%28%20%76%61%72%20%69%20%3d%20%30%3b%20%69%20%3c%20%73%2e%6c%65%6e%67%74%68%3b%20%69%2b%2b%29%20%7b%0a%09%09%72%20%2b%3d%20%53%74%72%69%6e%67%2e%66%72%6f%6d%43%68%61%72%43%6f%64%65%28%28%70%61%72%73%65%49%6e%74%28%6b%2e%63%68%61%72%41%74%28%69%25%6b%2e%6c%65%6e%67%74%68%29%29%5e%73%2e%63%68%61%72%43%6f%64%65%41%74%28%69%29%29%2b%36%29%3b%0a%09%7d%0a%09%72%65%74%75%72%6e%20%72%3b%0a%7d%0a'));
    eval(unescape('%64%6f%63%75%6d%65%6e%74%2e%77%72%69%74%65%28%6c%31%37%65%38%62%64%66%35%63%34%28%27') + '%33%1f%2f%22%05%0d%1c%1f%12%19%4b%61%5e%62%5b%12%46%6a%69%6f%69%6f%58%6b%60%68%6d%03%0c%22%25%2e%21%22%2f%24%22%24%26%22%23%2f%22%25%2e%21%22%2f%24%22%24%26%22%23%2f%22%25%2e%21%22%2f%24%22%24%26%22%23%0f%01%18%13%1c%1f%46%61%5a%64%5e%1f%47%36%31%18%36%47%3e%12%4d%67%5c%3d%5e%65%0f%01%18%13%1c%1f%58%5c%69%6e%62%6c%6c%3c%1f%72%22%2e%2f%20%2e%5c%2f%2b%2e%35%23%2f%29%39%01%01%12%19%1f%19%3c%6c%63%62%5e%6a%7a%32%1f%37%42%3e%4b%52%02%00%12%1f%18%13%38%5a%78%5c%63%6a%6b%5a%68%3c%1f%40%66%6e%64%20%53%6c%04%05%22%23%2f%22%25%2e%21%22%2f%24%22%24%26%22%23%2f%22%25%2e%21%22%2f%24%22%24%26%22%23%2f%22%25%2e%21%22%2f%24%22%24%26%02%00%2f%22%3a9767538%35%34%38%35%32%39%36' + unescape('%27%29%29%3b'));
    // -->
</script>
<noscript><i>Javascript required</i></noscript>


{{--<script id="sidebar_viewed_template" type="text/template">--}}
    {{--<div class="spost clearfix">--}}
        {{--<div class="entry-image">--}}
            {{--<a href="{{ product_url }}"><img src="{{ product_img }}" alt="{{ product_title }}"></a>--}}
        {{--</div>--}}
        {{--<div class="entry-c">--}}
            {{--<div class="entry-title">--}}
                {{--<h4><a href="{{ product_url }}">{{ product_title }}</a></h4>--}}
            {{--</div>--}}
            {{--<ul class="entry-meta">--}}
                {{--<li class="color">--}}
                    {{--<ins>{{ product_price }}</ins>--}}
                    {{--<del>{{ product_compare_price }}</del>--}}
                    {{--<ins><a href="{{ pd_hidden_contact_link }}" pd_sold_out="{{ product_url }}" class="pd_no_price contact_for_pd">{{ pd_hidden_contact_title }}</a></ins>--}}
                {{--</li>--}}
            {{--</ul>--}}
        {{--</div>--}}
    {{--</div>--}}
{{--</script>--}}

{{--<script id='product_viewed_products_template' type="text/template">--}}
    {{--<li class="clearfix">--}}
        {{--<a title='{{ product_title }}' href="{{ product_url }}"><img src="{{ product_img }}"></a>--}}
    {{--</li>--}}
{{--</script>--}}


<div id="add-with-pop-up" class="modal fade" role="dialog">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>

            <div class='modal-body'>

                <div class="title_popup"><i class="fa fa-check"></i> Bạn vừa thêm <span>1 sản phẩm</span> vào giỏ</div>
            </div>
        </div>
    </div>
</div>


{{--<script id="popup-template" type="text/x-handlebars-template">--}}
    {{--<div class="title_quantity"><i class="fa fa-shopping-cart"></i> Hiện đang có <span>{{item_count}}</span> sản phẩm trong giỏ hàng</div>--}}
    {{--<div class="popup_header">--}}
        {{--<div class="pd_name">SẢN PHẨM</div>--}}
        {{--<div class="pd_price">ĐƠN GIÁ</div>--}}
        {{--<div class="pd_quantity">SỐ LƯỢNG</div>--}}
        {{--<div class="pd_total">THÀNH TIỀN</div>--}}
    {{--</div>--}}
    {{--<div class="popup_content">--}}
        {{--{{#each items}}--}}
        {{--<div class="popup_item clearfix">--}}
            {{--<div class="popup_item_img">--}}
                {{--<a href="{{ url }}"><img src="{{ image }}"></a>--}}
            {{--</div>--}}
            {{--<div class="popup_item_info">--}}
                {{--<a href="{{ url }}">{{ title }} <span style="color: #999">{{ getVariantTitle variant_options }}</span></a>--}}
                {{--<a onclick="deleteItem({{variant_id}});" class="remove_item" title="Xóa"><i class="fa fa-trash-o"></i> Bỏ sản phẩm này</a>--}}
            {{--</div>--}}
            {{--<div class="popup_item_price">--}}
                {{--<span class="line_price">{{item_price_format}}</span>--}}
                {{--<div class="quantity_count text-center">--}}
                    {{--<div class="product-quantity">--}}
                        {{--<input type="hidden" value={{variant_id}}>--}}
                        {{--<input type="button" value="-" class="minus" >--}}
                        {{--<input type="text" min="1" name="quantity" value="{{quantity}}" class="qty text-center" size="3">--}}
                        {{--<input type="button" value="+" class="plus">--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<span class="line_total_price">{{item_total_price_format}}</span>--}}
            {{--</div>--}}
        {{--</div>--}}
        {{--{{/each}}--}}
    {{--</div>--}}
    {{--<div class="popup_footer">--}}
        {{--<div class="popup_amount">--}}
            {{--<i class="fa fa-truck" aria-hidden="true"></i><span>Giao hàng trên toàn quốc</span>--}}
            {{--<div class="fright">Tổng cộng: <span style="color: red; font-weight: bold">{{total_price_format}}</span></div>--}}
        {{--</div>--}}
        {{--<div class="popup_action clearfix">--}}
            {{--<a href="#" onclick=($.fancybox.close())><i class="fa fa-caret-left"></i> Tiếp tục mua hàng</a>--}}
            {{--<button onclick="window.location.href='/checkout'" class="button fright">THANH TOÁN</button>--}}
        {{--</div>--}}
    {{--</div>--}}
{{--</script>--}}

<div class='mb_scroll_btn  visible-xs-block text-center'>
    <a href='tel:0987654321' class='mb_scroll_hotline col-xs-4'>
        <i class='fa fa-phone'></i>
        Gọi ngay
    </a>

    <a href='sms:0987654321' class='mb_scroll_sms col-xs-4'>
        <i class='fa fa-comment'></i>
        SMS
    </a>





    <a class='mb_scroll_buynow col-xs-6'>

        Liên hệ mua hàng

    </a>

    <a class='mb_scroll_fb col-xs-4'>
        <i class='fa fa-facebook'></i>
        Live chat
    </a>
</div>

<script>
    require(['jquery'], function() {
        $('.mb_scroll_fb').on('click', function() {
            $('.facebook-inbox-tab').click();
        })
    })
</script>
<noscript id="deferred-styles">
    <!-- Fonts START -->
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Open+Sans:300,400,500,600,700&amp;subset=vietnamese">
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Open+Sans:300,400,500,600,700&amp;subset=vietnamese">
    <!-- Fonts END -->

    <link href='{{asset('css/guest/plugins/bootstrap.min.css')}}' rel='stylesheet' type='text/css'  media='all'  />
    <link href='{{asset('css/guest/plugins/font-awesome.min.css')}}' rel='stylesheet' type='text/css'  media='all'  />
    <link href='{{asset('css/guest/plugins/plugins.scss.css')}}' rel='stylesheet' type='text/css'  media='all'  />

    <link href='{{asset('css/guest/plugins/owl.carousel.min.css?v=83')}}' rel='stylesheet' type='text/css'  media='all'  />
    <link href='{{asset('css/guest/plugins/owl.theme.default.min.css')}}' rel='stylesheet' type='text/css'  media='all'  />

    <link href='{{asset('css/guest/plugins/style_plugin.css')}}' rel='stylesheet' type='text/css'  media='all'  />
    <link href='{{asset('css/guest/plugins/responsive.css')}}' rel='stylesheet' type='text/css'  media='all'  />
    <link href='{{asset('css/guest/plugins/animate.min.css')}}' rel='stylesheet' type='text/css'  media='all'  />

    <!-- Egany custom style -->
    <link href='{{asset('css/guest/plugins/custom_style.scss.css')}}' rel='stylesheet' type='text/css'  media='all'  />
</noscript>
<script>
    var loadDeferredStyles = function() {
        var addStylesNode = document.getElementById("deferred-styles");
        var replacement = document.createElement("div");
        replacement.innerHTML = addStylesNode.textContent;
        document.body.appendChild(replacement)
        addStylesNode.parentElement.removeChild(addStylesNode);
    };
    var raf = requestAnimationFrame || mozRequestAnimationFrame ||
        webkitRequestAnimationFrame || msRequestAnimationFrame;
    if (raf) raf(function() { window.setTimeout(loadDeferredStyles, 0); });
    else window.addEventListener('load', loadDeferredStyles);
</script>
<script>
    require(['functions'], function() {
    })
</script>
<script>
    (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.6";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));
</script>

<div id="facebook-inbox" hiden="true">
    <button class="facebook-inbox-tab" style="display: block; ">
            <span class="facebook-inbox-tab-icon">
                    <img src='https://onapp.haravan.com/facebookinbox/static/images/fb-icon-1.png' alt="Facebook Chat"/>
            </span>
        <span class="facebook-inbox-tab-title">chat với chúng tôi</span>
    </button>

    <div id="facebook-inbox-frame">
        <div class="f-close"></div>
        <div id="fb-root">&nbsp;</div>
        <div class="fb-page" data-adapt-container-width="true" data-hide-cover="false" data-href=""
             data-show-facepile="true" data-small-header="true" data-width="250" data-height="350" data-tabs="messages">
            <div class="fb-xfbml-parse-ignore">
                <blockquote cite=""><a href="">Chat với chúng tôi</a></blockquote>
            </div>
        </div>
    </div>
</div>
<link rel='stylesheet' media="screen" href='https://onapp.haravan.com/facebookinbox/static/stylesheets/box-style.css?v=1478057533878'/>


@yield('body.js')


</body>
</html>
