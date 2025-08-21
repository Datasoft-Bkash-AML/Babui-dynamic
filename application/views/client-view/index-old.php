<!DOCTYPE html>
<!-- saved from url=(0041)https://demos.reytheme.com/san-francisco/ -->
<html lang="en-US" data-df="" data-container="1440" data-xl="1" data-admin-bar="0" class="elementor-kit-2009"
	  style="--scrollbar-width: 15px; --header-default--height: 122px;">
<head>
	<base href="<?php echo base_url(); ?>">
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<script>if (navigator.userAgent.match(/MSIE|Internet Explorer/i) || navigator.userAgent.match(/Trident\/7\..*?rv:11/i)) {
			var href = document.location.href;
			if (!href.match(/[?&]nowprocket/)) {
				if (href.indexOf("?") == -1) {
					if (href.indexOf("#") == -1) {
						document.location.href = href + "?nowprocket=1"
					} else {
						document.location.href = href.replace("#", "?nowprocket=1#")
					}
				} else {
					if (href.indexOf("#") == -1) {
						document.location.href = href + "&nowprocket=1"
					} else {
						document.location.href = href.replace("#", "&nowprocket=1#")
					}
				}
			}
		}</script>
	<script>(() => {
			class RocketLazyLoadScripts {
				constructor() {
					this.v = "1.2.6", this.triggerEvents = ["keydown", "mousedown", "mousemove", "touchmove", "touchstart", "touchend", "wheel"], this.userEventHandler = this.t.bind(this), this.touchStartHandler = this.i.bind(this), this.touchMoveHandler = this.o.bind(this), this.touchEndHandler = this.h.bind(this), this.clickHandler = this.u.bind(this), this.interceptedClicks = [], this.interceptedClickListeners = [], this.l(this), window.addEventListener("pageshow", (t => {
						this.persisted = t.persisted, this.everythingLoaded && this.m()
					})), this.CSPIssue = sessionStorage.getItem("rocketCSPIssue"), document.addEventListener("securitypolicyviolation", (t => {
						this.CSPIssue || "script-src-elem" !== t.violatedDirective || "data" !== t.blockedURI || (this.CSPIssue = !0, sessionStorage.setItem("rocketCSPIssue", !0))
					})), document.addEventListener("DOMContentLoaded", (() => {
						this.k()
					})), this.delayedScripts = {
						normal: [],
						async: [],
						defer: []
					}, this.trash = [], this.allJQueries = []
				}

				p(t) {
					document.hidden ? t.t() : (this.triggerEvents.forEach((e => window.addEventListener(e, t.userEventHandler, {passive: !0}))), window.addEventListener("touchstart", t.touchStartHandler, {passive: !0}), window.addEventListener("mousedown", t.touchStartHandler), document.addEventListener("visibilitychange", t.userEventHandler))
				}

				_() {
					this.triggerEvents.forEach((t => window.removeEventListener(t, this.userEventHandler, {passive: !0}))), document.removeEventListener("visibilitychange", this.userEventHandler)
				}

				i(t) {
					"HTML" !== t.target.tagName && (window.addEventListener("touchend", this.touchEndHandler), window.addEventListener("mouseup", this.touchEndHandler), window.addEventListener("touchmove", this.touchMoveHandler, {passive: !0}), window.addEventListener("mousemove", this.touchMoveHandler), t.target.addEventListener("click", this.clickHandler), this.L(t.target, !0), this.S(t.target, "onclick", "rocket-onclick"), this.C())
				}

				o(t) {
					window.removeEventListener("touchend", this.touchEndHandler), window.removeEventListener("mouseup", this.touchEndHandler), window.removeEventListener("touchmove", this.touchMoveHandler, {passive: !0}), window.removeEventListener("mousemove", this.touchMoveHandler), t.target.removeEventListener("click", this.clickHandler), this.L(t.target, !1), this.S(t.target, "rocket-onclick", "onclick"), this.M()
				}

				h() {
					window.removeEventListener("touchend", this.touchEndHandler), window.removeEventListener("mouseup", this.touchEndHandler), window.removeEventListener("touchmove", this.touchMoveHandler, {passive: !0}), window.removeEventListener("mousemove", this.touchMoveHandler)
				}

				u(t) {
					t.target.removeEventListener("click", this.clickHandler), this.L(t.target, !1), this.S(t.target, "rocket-onclick", "onclick"), this.interceptedClicks.push(t), t.preventDefault(), t.stopPropagation(), t.stopImmediatePropagation(), this.M()
				}

				O() {
					window.removeEventListener("touchstart", this.touchStartHandler, {passive: !0}), window.removeEventListener("mousedown", this.touchStartHandler), this.interceptedClicks.forEach((t => {
						t.target.dispatchEvent(new MouseEvent("click", {view: t.view, bubbles: !0, cancelable: !0}))
					}))
				}

				l(t) {
					EventTarget.prototype.addEventListenerWPRocketBase = EventTarget.prototype.addEventListener, EventTarget.prototype.addEventListener = function (e, i, o) {
						"click" !== e || t.windowLoaded || i === t.clickHandler || t.interceptedClickListeners.push({
							target: this,
							func: i,
							options: o
						}), (this || window).addEventListenerWPRocketBase(e, i, o)
					}
				}

				L(t, e) {
					this.interceptedClickListeners.forEach((i => {
						i.target === t && (e ? t.removeEventListener("click", i.func, i.options) : t.addEventListener("click", i.func, i.options))
					})), t.parentNode !== document.documentElement && this.L(t.parentNode, e)
				}

				D() {
					return new Promise((t => {
						this.P ? this.M = t : t()
					}))
				}

				C() {
					this.P = !0
				}

				M() {
					this.P = !1
				}

				S(t, e, i) {
					t.hasAttribute && t.hasAttribute(e) && (event.target.setAttribute(i, event.target.getAttribute(e)), event.target.removeAttribute(e))
				}

				t() {
					this._(this), "loading" === document.readyState ? document.addEventListener("DOMContentLoaded", this.R.bind(this)) : this.R()
				}

				k() {
					let t = [];
					document.querySelectorAll("script[type=rocketlazyloadscript][data-rocket-src]").forEach((e => {
						let i = e.getAttribute("data-rocket-src");
						if (i && !i.startsWith("data:")) {
							0 === i.indexOf("//") && (i = location.protocol + i);
							try {
								const o = new URL(i).origin;
								o !== location.origin && t.push({
									src: o,
									crossOrigin: e.crossOrigin || "module" === e.getAttribute("data-rocket-type")
								})
							} catch (t) {
							}
						}
					})), t = [...new Map(t.map((t => [JSON.stringify(t), t]))).values()], this.T(t, "preconnect")
				}

				async R() {
					this.lastBreath = Date.now(), this.j(this), this.F(this), this.I(), this.W(), this.q(), await this.A(this.delayedScripts.normal), await this.A(this.delayedScripts.defer), await this.A(this.delayedScripts.async);
					try {
						await this.U(), await this.H(this), await this.J()
					} catch (t) {
						console.error(t)
					}
					window.dispatchEvent(new Event("rocket-allScriptsLoaded")), this.everythingLoaded = !0, this.D().then((() => {
						this.O()
					})), this.N()
				}

				W() {
					document.querySelectorAll("script[type=rocketlazyloadscript]").forEach((t => {
						t.hasAttribute("data-rocket-src") ? t.hasAttribute("async") && !1 !== t.async ? this.delayedScripts.async.push(t) : t.hasAttribute("defer") && !1 !== t.defer || "module" === t.getAttribute("data-rocket-type") ? this.delayedScripts.defer.push(t) : this.delayedScripts.normal.push(t) : this.delayedScripts.normal.push(t)
					}))
				}

				async B(t) {
					if (await this.G(), !0 !== t.noModule || !("noModule" in HTMLScriptElement.prototype)) return new Promise((e => {
						let i;

						function o() {
							(i || t).setAttribute("data-rocket-status", "executed"), e()
						}

						try {
							if (navigator.userAgent.indexOf("Firefox/") > 0 || "" === navigator.vendor || this.CSPIssue) i = document.createElement("script"), [...t.attributes].forEach((t => {
								let e = t.nodeName;
								"type" !== e && ("data-rocket-type" === e && (e = "type"), "data-rocket-src" === e && (e = "src"), i.setAttribute(e, t.nodeValue))
							})), t.text && (i.text = t.text), i.hasAttribute("src") ? (i.addEventListener("load", o), i.addEventListener("error", (function () {
								i.setAttribute("data-rocket-status", "failed-network"), e()
							})), setTimeout((() => {
								i.isConnected || e()
							}), 1)) : (i.text = t.text, o()), t.parentNode.replaceChild(i, t); else {
								const i = t.getAttribute("data-rocket-type"), s = t.getAttribute("data-rocket-src");
								i ? (t.type = i, t.removeAttribute("data-rocket-type")) : t.removeAttribute("type"), t.addEventListener("load", o), t.addEventListener("error", (i => {
									this.CSPIssue && i.target.src.startsWith("data:") ? (console.log("WPRocket: data-uri blocked by CSP -> fallback"), t.removeAttribute("src"), this.B(t).then(e)) : (t.setAttribute("data-rocket-status", "failed-network"), e())
								})), s ? (t.removeAttribute("data-rocket-src"), t.src = s) : t.src = "data:text/javascript;base64," + window.btoa(unescape(encodeURIComponent(t.text)))
							}
						} catch (i) {
							t.setAttribute("data-rocket-status", "failed-transform"), e()
						}
					}));
					t.setAttribute("data-rocket-status", "skipped")
				}

				async A(t) {
					const e = t.shift();
					return e && e.isConnected ? (await this.B(e), this.A(t)) : Promise.resolve()
				}

				q() {
					this.T([...this.delayedScripts.normal, ...this.delayedScripts.defer, ...this.delayedScripts.async], "preload")
				}

				T(t, e) {
					var i = document.createDocumentFragment();
					t.forEach((t => {
						const o = t.getAttribute && t.getAttribute("data-rocket-src") || t.src;
						if (o && !o.startsWith("data:")) {
							const s = document.createElement("link");
							s.href = o, s.rel = e, "preconnect" !== e && (s.as = "script"), t.getAttribute && "module" === t.getAttribute("data-rocket-type") && (s.crossOrigin = !0), t.crossOrigin && (s.crossOrigin = t.crossOrigin), t.integrity && (s.integrity = t.integrity), i.appendChild(s), this.trash.push(s)
						}
					})), document.head.appendChild(i)
				}

				j(t) {
					let e = {};

					function i(i, o) {
						return e[o].eventsToRewrite.indexOf(i) >= 0 && !t.everythingLoaded ? "rocket-" + i : i
					}

					function o(t, o) {
						!function (t) {
							e[t] || (e[t] = {
								originalFunctions: {
									add: t.addEventListener,
									remove: t.removeEventListener
								}, eventsToRewrite: []
							}, t.addEventListener = function () {
								arguments[0] = i(arguments[0], t), e[t].originalFunctions.add.apply(t, arguments)
							}, t.removeEventListener = function () {
								arguments[0] = i(arguments[0], t), e[t].originalFunctions.remove.apply(t, arguments)
							})
						}(t), e[t].eventsToRewrite.push(o)
					}

					function s(e, i) {
						let o = e[i];
						e[i] = null, Object.defineProperty(e, i, {
							get: () => o || function () {
							}, set(s) {
								t.everythingLoaded ? o = s : e["rocket" + i] = o = s
							}
						})
					}

					o(document, "DOMContentLoaded"), o(window, "DOMContentLoaded"), o(window, "load"), o(window, "pageshow"), o(document, "readystatechange"), s(document, "onreadystatechange"), s(window, "onload"), s(window, "onpageshow");
					try {
						Object.defineProperty(document, "readyState", {
							get: () => t.rocketReadyState, set(e) {
								t.rocketReadyState = e
							}, configurable: !0
						}), document.readyState = "loading"
					} catch (t) {
						console.log("WPRocket DJE readyState conflict, bypassing")
					}
				}

				F(t) {
					let e;

					function i(e) {
						return t.everythingLoaded ? e : e.split(" ").map((t => "load" === t || 0 === t.indexOf("load.") ? "rocket-jquery-load" : t)).join(" ")
					}

					function o(o) {
						function s(t) {
							const e = o.fn[t];
							o.fn[t] = o.fn.init.prototype[t] = function () {
								return this[0] === window && ("string" == typeof arguments[0] || arguments[0] instanceof String ? arguments[0] = i(arguments[0]) : "object" == typeof arguments[0] && Object.keys(arguments[0]).forEach((t => {
									const e = arguments[0][t];
									delete arguments[0][t], arguments[0][i(t)] = e
								}))), e.apply(this, arguments), this
							}
						}

						o && o.fn && !t.allJQueries.includes(o) && (o.fn.ready = o.fn.init.prototype.ready = function (e) {
							return t.domReadyFired ? e.bind(document)(o) : document.addEventListener("rocket-DOMContentLoaded", (() => e.bind(document)(o))), o([])
						}, s("on"), s("one"), t.allJQueries.push(o)), e = o
					}

					o(window.jQuery), Object.defineProperty(window, "jQuery", {
						get: () => e, set(t) {
							o(t)
						}
					})
				}

				async H(t) {
					const e = document.querySelector("script[data-webpack]");
					e && (await async function () {
						return new Promise((t => {
							e.addEventListener("load", t), e.addEventListener("error", t)
						}))
					}(), await t.K(), await t.H(t))
				}

				async U() {
					this.domReadyFired = !0;
					try {
						document.readyState = "interactive"
					} catch (t) {
					}
					await this.G(), document.dispatchEvent(new Event("rocket-readystatechange")), await this.G(), document.rocketonreadystatechange && document.rocketonreadystatechange(), await this.G(), document.dispatchEvent(new Event("rocket-DOMContentLoaded")), await this.G(), window.dispatchEvent(new Event("rocket-DOMContentLoaded"))
				}

				async J() {
					try {
						document.readyState = "complete"
					} catch (t) {
					}
					await this.G(), document.dispatchEvent(new Event("rocket-readystatechange")), await this.G(), document.rocketonreadystatechange && document.rocketonreadystatechange(), await this.G(), window.dispatchEvent(new Event("rocket-load")), await this.G(), window.rocketonload && window.rocketonload(), await this.G(), this.allJQueries.forEach((t => t(window).trigger("rocket-jquery-load"))), await this.G();
					const t = new Event("rocket-pageshow");
					t.persisted = this.persisted, window.dispatchEvent(t), await this.G(), window.rocketonpageshow && window.rocketonpageshow({persisted: this.persisted}), this.windowLoaded = !0
				}

				m() {
					document.onreadystatechange && document.onreadystatechange(), window.onload && window.onload(), window.onpageshow && window.onpageshow({persisted: this.persisted})
				}

				I() {
					const t = new Map;
					document.write = document.writeln = function (e) {
						const i = document.currentScript;
						i || console.error("WPRocket unable to document.write this: " + e);
						const o = document.createRange(), s = i.parentElement;
						let n = t.get(i);
						void 0 === n && (n = i.nextSibling, t.set(i, n));
						const c = document.createDocumentFragment();
						o.setStart(c, 0), c.appendChild(o.createContextualFragment(e)), s.insertBefore(c, n)
					}
				}

				async G() {
					Date.now() - this.lastBreath > 45 && (await this.K(), this.lastBreath = Date.now())
				}

				async K() {
					return document.hidden ? new Promise((t => setTimeout(t))) : new Promise((t => requestAnimationFrame(t)))
				}

				N() {
					this.trash.forEach((t => t.remove()))
				}

				static run() {
					const t = new RocketLazyLoadScripts;
					t.p(t)
				}
			}

			RocketLazyLoadScripts.run()
		})();</script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link rel="pingback" href="https://demos.reytheme.com/san-francisco/xmlrpc.php">
	<title>San Francisco – Rey Theme</title>
	<!--	<link rel="preload" data-rocket-preload="" as="image" href="/babui/assets/client-view/image/2-936x1024.jpg"-->
	<!--		  imagesrcset="https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/02/2-936x1024.jpg 936w, https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/02/2-274x300.jpg 274w, https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/02/2-768x840.jpg 768w, https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/02/2-330x361.jpg 330w, https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/02/2-600x656.jpg 600w, https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/02/2.jpg 1024w"-->
	<!--		  imagesizes="(max-width: 936px) 100vw, 936px" fetchpriority="high">-->
	<meta name="robots" content="max-image-preview:large">
	<style>img:is([sizes="auto" i], [sizes^="auto," i]) {
			contain-intrinsic-size: 3000px 1500px
		}</style>
	<!--	<link rel="alternate" type="application/rss+xml" title="San Francisco » Feed"-->
	<!--		  href="https://demos.reytheme.com/san-francisco/feed/">-->
	<!--	<link rel="alternate" type="application/rss+xml" title="San Francisco » Comments Feed"-->
	<!--		  href="https://demos.reytheme.com/san-francisco/comments/feed/">-->
	<!--	<link rel="preload" as="image" type="image/jpeg"-->
	<!--		  href="https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/02/Rectangle-56.jpg">-->
	<style id="classic-theme-styles-inline-css" type="text/css">
		/*! This file is auto-generated */
		.wp-block-button__link {
			color: #fff;
			background-color: #32373c;
			border-radius: 9999px;
			box-shadow: none;
			text-decoration: none;
			padding: calc(.667em + 2px) calc(1.333em + 2px);
			font-size: 1.125em
		}

		.wp-block-file__button {
			background: #32373c;
			color: #fff;
			text-decoration: none
		}
	</style>
	<style id="woocommerce-inline-inline-css" type="text/css">
		.woocommerce form .form-row .required {
			visibility: visible;
		}

		.woocommerce form .form-row abbr.required {
			visibility: visible;
		}
	</style>
	<link data-minify="1" rel="stylesheet" as="style" onload="this.onload=null;this.rel=&#39;stylesheet&#39;"
		  media="all" data-no-rel="stylesheet" id="rey-wp-style-child-css"
		  href="/babui/assets/client-view/css/style.css" type="text/css" data-media="all">
	<noscript>
		<link data-minify="1" rel='stylesheet' data-id='rey-wp-style-child-css'
			  href='https://demos.reytheme.com/san-francisco/wp-content/cache/min/24/san-francisco/wp-content/themes/rey-child/style.css?ver=1732304232'
			  data-type='text/css' data-media='all'/>
	</noscript>
	<link rel="stylesheet" id="elementor-frontend-css" href="/babui/assets/client-view/css/frontend.min.css"
		  type="text/css" media="all">
	<link data-minify="1" id="rey-hs-css" type="text/css" href="/babui/assets/client-view/css/hs-3848f492a2.css"
		  rel="stylesheet" media="all">
	<link id="rey-ds-css" type="text/css" href="/babui/assets/client-view/css/ds-44a1d70a31.css" data-noptimize=""
		  data-no-optimize="1" data-pagespeed-no-defer="" data-pagespeed-no-transform="" data-minify="1"
		  rel="stylesheet" as="style" onload="this.onload=null;this.rel=&#39;stylesheet&#39;" media="all">
	<noscript>
		<link rel="stylesheet"
			  href="https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/rey/ds-44a1d70a31.css"
			  data-no-minify="1">
	</noscript>
	<link rel="stylesheet" id="e-swiper-css" href="/babui/assets/client-view/css/e-swiper.min.css" type="text/css"
		  media="all">
	<link rel="stylesheet" id="elementor-post-2009-css" href="/babui/assets/client-view/css/post-2009.css"
		  type="text/css" media="all">
	<link rel="stylesheet" id="widget-heading-css" href="/babui/assets/client-view/css/widget-heading.min.css"
		  type="text/css" media="all">
	<link rel="stylesheet" id="e-shapes-css" href="/babui/assets/client-view/css/shapes.min.css" type="text/css"
		  media="all">
	<link rel="stylesheet" id="widget-icon-box-css" href="/babui/assets/client-view/css/widget-icon-box.min.css"
		  type="text/css" media="all">
	<link rel="stylesheet" id="widget-image-css" href="/babui/assets/client-view/css/widget-image.min.css"
		  type="text/css" media="all">
	<link rel="stylesheet" id="widget-image-gallery-css"
		  href="/babui/assets/client-view/css/widget-image-gallery.min.css" type="text/css" media="all">
	<link rel="stylesheet" id="elementor-post-2006-css" href="/babui/assets/client-view/css/post-2006.css"
		  type="text/css" media="all">
	<link rel="stylesheet" id="elementor-post-179-css" href="/babui/assets/client-view/css/post-179.css"
		  type="text/css" media="all">
	<link rel="stylesheet" onload="this.onload=null;this.media=&#39;all&#39;" media="all" data-noptimize=""
		  data-no-optimize="1" data-pagespeed-no-defer="" data-pagespeed-no-transform="" data-minify="1"
		  data-no-rel="stylesheet" id="elementor-post-473-css" href="/babui/assets/client-view/css/post-473.css"
		  type="text/css" data-media="all">
	<noscript>
		<link rel='stylesheet' data-noptimize="" data-no-optimize="1" data-pagespeed-no-defer=""
			  data-pagespeed-no-transform="" data-minify="1" data-id='elementor-post-473-css'
			  href='https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/elementor/css/post-473.css?ver=1732304232'
			  data-type='text/css' data-media='all'/>
	</noscript>
	<script type="text/javascript" id="jquery-core-js" data-rocket-defer="" defer=""
			src="/babui/assets/client-view/js/jquery.min.js" data-rocket-status="executed"></script>
	<script type="text/javascript" data-minify="1" id="jquery-blockui-js" defer="defer" data-wp-strategy="defer"
			src="/babui/assets/client-view/js/blockui.js" data-rocket-status="executed"></script>
	<script type="text/javascript" id="wc-add-to-cart-js-extra">
		/* <![CDATA[ */
		var wc_add_to_cart_params = {
			"ajax_url": "\/san-francisco\/wp-admin\/admin-ajax.php",
			"wc_ajax_url": "https:\/\/demos.reytheme.com\/san-francisco\/?wc-ajax=%%endpoint%%",
			"i18n_view_cart": "View cart",
			"cart_url": "https:\/\/demos.reytheme.com\/san-francisco\/cart\/",
			"is_cart": "",
			"cart_redirect_after_add": "no"
		};
		/* ]]> */
	</script>
	<script type="text/javascript" id="wc-add-to-cart-js" defer="defer" data-wp-strategy="defer"
			src="/babui/assets/client-view/js/add-to-cart.min.js" data-rocket-status="executed"></script>
	<script type="text/javascript" id="js-cookie-js" defer="defer" data-wp-strategy="defer"
			src="/babui/assets/client-view/js/js.cookie.min.js" data-rocket-status="executed"></script>
	<script type="text/javascript" id="woocommerce-js-extra">
		/* <![CDATA[ */
		var woocommerce_params = {
			"ajax_url": "\/san-francisco\/wp-admin\/admin-ajax.php",
			"wc_ajax_url": "https:\/\/demos.reytheme.com\/san-francisco\/?wc-ajax=%%endpoint%%"
		};
		/* ]]> */
	</script>
	<script type="text/javascript" id="woocommerce-js" defer="defer" data-wp-strategy="defer"
			src="/babui/assets/client-view/js/woocommerce.min.js" data-rocket-status="executed"></script>
	<link rel="https://api.w.org/" href="https://demos.reytheme.com/san-francisco/wp-json/">
	<link rel="alternate" title="JSON" type="application/json"
		  href="https://demos.reytheme.com/san-francisco/wp-json/wp/v2/pages/2006">
	<link rel="EditURI" type="application/rsd+xml" title="RSD"
		  href="https://demos.reytheme.com/san-francisco/xmlrpc.php?rsd">
	<meta name="generator" content="WordPress 6.7.1">
	<meta name="generator" content="WooCommerce 9.4.2">
	<link rel="canonical" href="https://demos.reytheme.com/san-francisco/">
	<link rel="shortlink" href="https://demos.reytheme.com/san-francisco/">
	<link rel="alternate" title="oEmbed (JSON)" type="application/json+oembed"
		  href="https://demos.reytheme.com/san-francisco/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fdemos.reytheme.com%2Fsan-francisco%2F">
	<link rel="alternate" title="oEmbed (XML)" type="text/xml+oembed"
		  href="https://demos.reytheme.com/san-francisco/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fdemos.reytheme.com%2Fsan-francisco%2F&amp;format=xml">
	<meta http-equiv="content-language" content="en-us">
	<meta name="author" content="Marius H">
	<meta name="copyright" content="Copyright (c)2019-2023 Rey Theme. All Rights Reserved.">
	<meta name="description"
		  content="Transform eCommerce Stores Into a Powerhouse Using Rey Theme - World’s Most Exceptionally Intuitive WooCommerce Theme With FREE High-Converting, Captivating Designs">
	<meta name="keywords" content="WordPress, WooCommerce, WooCommerce theme, Rey theme, Elementor">
	<noscript>
		<style>
			.woocommerce ul.products li.product.is-animated-entry {
				opacity: 1;
				transform: none;
			}

			.woocommerce div.product .woocommerce-product-gallery:after {
				display: none;
			}

			.woocommerce div.product .woocommerce-product-gallery .woocommerce-product-gallery__wrapper {
				opacity: 1
			}
		</style>
	</noscript>
	<noscript>
		<style>.woocommerce-product-gallery {
				opacity: 1 !important;
			}</style>
	</noscript>
	<meta name="generator"
		  content="Elementor 3.25.9; features: e_font_icon_svg, e_optimized_control_loading; settings: css_print_method-external, google_font-disabled, font_display-auto">
	<style>
		.e-con.e-parent:nth-of-type(n+4):not(.e-lazyloaded):not(.e-no-lazyload),
		.e-con.e-parent:nth-of-type(n+4):not(.e-lazyloaded):not(.e-no-lazyload) * {
			background-image: none !important;
		}

		@media screen and (max-height: 1024px) {
			.e-con.e-parent:nth-of-type(n+3):not(.e-lazyloaded):not(.e-no-lazyload),
			.e-con.e-parent:nth-of-type(n+3):not(.e-lazyloaded):not(.e-no-lazyload) * {
				background-image: none !important;
			}
		}

		@media screen and (max-height: 640px) {
			.e-con.e-parent:nth-of-type(n+2):not(.e-lazyloaded):not(.e-no-lazyload),
			.e-con.e-parent:nth-of-type(n+2):not(.e-lazyloaded):not(.e-no-lazyload) * {
				background-image: none !important;
			}
		}
	</style>
	<style class="wp-fonts-local" type="text/css">
		@font-face {
			font-family: Inter;
			font-style: normal;
			font-weight: 300 900;
			font-display: fallback;
			src: url('https://demos.reytheme.com/san-francisco/wp-content/plugins/woocommerce/assets/fonts/Inter-VariableFont_slnt,wght.woff2') format('woff2');
			font-stretch: normal;
		}

		@font-face {
			font-family: Cardo;
			font-style: normal;
			font-weight: 400;
			font-display: fallback;
			src: url('https://demos.reytheme.com/san-francisco/wp-content/plugins/woocommerce/assets/fonts/cardo_normal_400.woff2') format('woff2');
		}
	</style>
	<link rel="icon"
		  href="https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/10/rey-sf-100x100.png"
		  sizes="32x32">
	<link rel="icon"
		  href="https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/10/rey-sf-300x300.png"
		  sizes="192x192">
	<link rel="apple-touch-icon"
		  href="https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/10/rey-sf-300x300.png">
	<meta name="msapplication-TileImage"
		  content="https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/10/rey-sf-300x300.png">
	<style type="text/css" id="wp-custom-css">
		/* Decrease spacing between product page's gallery and summary */
		:root {
			--woocommerce-summary-margin: 20px;
		}

		@media (max-width: 1024px) {
			.rey-checkoutPage.--layout-custom .rey-checkoutPage-form:after {
				display: none;
			}
		}
	</style>
	<style id="reycore-inline-styles" data-noptimize="" data-no-optimize="1" data-pagespeed-no-defer=""
		   data-pagespeed-no-transform="" data-minify="1">:root {
			--rey-container-spacing: 15px;
			--main-gutter-size: 15px;
			--site-wrapper-overflow: visible;
			--body-bg-color: #f8f8f8;
			--neutral-hue: 210;
			--blog-columns: 3;
			--post-width: 960px;
			--post-align-wide-size: 25vw;
			--woocommerce-products-gutter: 30px;
			--woocommerce-sidebar-size: 16%;
			--woocommerce-swatches-width: 14px;
			--woocommerce-swatches-height: 14px;
			--woocommerce-swatches-spacing: 2px;
			--woocommerce-swatches-border: 0px;
			--woocommerce-swatches-radius: 15px;
			--sch-sale-text-color: #ffffff;
			--sch-sale-bg-color: #5ec486;
			--woocommerce-summary-size: 49%;
			--woocommerce-summary-padding: 50px;
			--woocommerce-summary-bgcolor: #ffffff;
			--star-rating-color: #ff4545;
		}

		.rey-postList .rey-postTitle > a {
			font-size: 32px;
			letter-spacing: -1px;
			line-height: 1;
		}

		.rey-postList .rey-postContent, .rey-postList .rey-postContent a {
			font-size: 16px;
			line-height: 1.8;
		}

		.single-post .rey-postContent, .single-post .rey-postContent a {
			font-size: 16px;
			line-height: 1.8;
		}

		body.header-top-overlay--is-opened.--o-src-menu {
			--header-text-color: #ffffff;
		}

		body.header-overlay--is-opened.--o-src-menu .rey-mainNavigation--desktop .menu-item.depth--0 {
			color: #ffffff;
		}

		.woocommerce ul.products.--skin-proto {
			--woocommerce-loop-proto-bgcolor: #ffffff;
		}

		body.woocommerce ul.products li.product .woocommerce-loop-product__title, .woocommerce ul.products li.product[class*="rey-wc-skin"] .woocommerce-loop-product__title {
			font-family: var(--primary-ff);
			font-size: 16px;
			font-weight: 500;
			color: #252525;
		}

		.woocommerce ul.products li.product .price {
			font-size: 16px;
			color: var(--e-global-color-a91f731);
		}

		.woocommerce div.product p.price {
			font-size: 22px;
			color: #252525;
		}

		.woocommerce-store-notice .woocommerce-store-notice-content {
			min-height: 32px;
		}

		@media (min-width: 768px) and (max-width: 1025px) {
			:root {
				--rey-container-spacing: 15px;
				--main-gutter-size: 15px;
				--blog-columns: 1;
				--woocommerce-products-gutter: 10px;
				--woocommerce-summary-padding: 30px;
			}
		}

		@media (max-width: 767px) {
			:root {
				--rey-container-spacing: 15px;
				--main-gutter-size: 15px;
				--blog-columns: 1;
				--woocommerce-products-gutter: 10px;
				--woocommerce-summary-padding: 20px;
			}
		}

		@font-face {
			font-family: 'Outfit';
			font-style: normal;
			font-weight: 300;
			font-display: swap;
			src: url(https://demos.reytheme.com/san-francisco/wp-content/fonts/outfit/2bfec23b3833c158) format('woff');
		}

		@font-face {
			font-family: 'Outfit';
			font-style: normal;
			font-weight: 400;
			font-display: swap;
			src: url(https://demos.reytheme.com/san-francisco/wp-content/fonts/outfit/788596d46eeb2990) format('woff');
		}

		@font-face {
			font-family: 'Outfit';
			font-style: normal;
			font-weight: 700;
			font-display: swap;
			src: url(https://demos.reytheme.com/san-francisco/wp-content/fonts/outfit/bb1d62c4f59c2690) format('woff');
		}

		@font-face {
			font-family: 'Outfit';
			font-style: normal;
			font-weight: 900;
			font-display: swap;
			src: url(https://demos.reytheme.com/san-francisco/wp-content/fonts/outfit/12450cdb1b4e037d) format('woff');
		}

		@font-face {
			font-family: 'Rey Primary';
			font-style: normal;
			font-weight: 300;
			font-display: swap;
			src: url(https://demos.reytheme.com/san-francisco/wp-content/fonts/outfit/2bfec23b3833c158) format('woff');
		}

		@font-face {
			font-family: 'Rey Primary';
			font-style: normal;
			font-weight: 400;
			font-display: swap;
			src: url(https://demos.reytheme.com/san-francisco/wp-content/fonts/outfit/788596d46eeb2990) format('woff');
		}

		@font-face {
			font-family: 'Rey Primary';
			font-style: normal;
			font-weight: 700;
			font-display: swap;
			src: url(https://demos.reytheme.com/san-francisco/wp-content/fonts/outfit/bb1d62c4f59c2690) format('woff');
		}

		@font-face {
			font-family: 'Rey Primary';
			font-style: normal;
			font-weight: 900;
			font-display: swap;
			src: url(https://demos.reytheme.com/san-francisco/wp-content/fonts/outfit/12450cdb1b4e037d) format('woff');
		}

		:root {
			--zero-px: 0.001px;
		}

		@media (max-width: 1024px) {
			:root {
				--nav-breakpoint-desktop: none;
				--nav-breakpoint-mobile: flex;
			}
		}

		:root {
			--primary-ff: Outfit, "Helvetica Neue", Helvetica, Arial, sans-serif;
			--body-font-family: var(--primary-ff);
			--accent-color: #212529;
			--accent-hover-color: #000000;
			--accent-text-color: #fff;
		}

		.rey-mainMenu--desktop .menu-item.menu-item-has-children.menu-item-196 {
			--ec-max-width: 920px;
			--body-bg-color: rgba(255, 255, 255, 0);
			--submenus-padding: 0px;
		}

		.rey-mainMenu--desktop .menu-item.menu-item-has-children.menu-item-945 {
			--ec-max-width: 600px;
			--submenus-padding: 0px;
		}

		:root {
			--woocommerce-grid-columns: 4;
		}

		@media (min-width: 768px) and (max-width: 1024px) {
			:root {
				--woocommerce-grid-columns: 2;
			}
		}

		@media (max-width: 767px) {
			:root {
				--woocommerce-grid-columns: 2;
			}
		}     </style>
	<style
		id="rey-lazy-bg">.rey-js .elementor-element.rey-lazyBg, .rey-js .elementor-element.rey-lazyBg > .elementor-widget-container, .rey-js .elementor-element.rey-lazyBg > .elementor-widget-wrap {
			background-image: none !important;
		}</style>
	<noscript>
		<style id="rocket-lazyload-nojs-css">.rll-youtube-player, [data-lazy-src] {
				display: none !important;
			}</style>
	</noscript>
	<meta name="generator" content="WP Rocket 3.17.3"
		  data-wpr-features="wpr_delay_js wpr_defer_js wpr_minify_js wpr_lazyload_images wpr_lazyload_iframes wpr_oci wpr_minify_css wpr_desktop wpr_preload_links">
	<style id="rey-colorize-section-css">.elementor.--will-colorize.--colorize-active-028f717 {
			--colorized-color: #FFFFFF;
			--colorized-link-color: #FFFFFF;
			--colorized-link-color-hover: #F0F0F0;
		}

		.elementor.--will-colorize.--colorize-active-028f717 .elementor-element[data-id="028f717"] {
			background-color: rgba(0, 0, 0, 0)
		}</style>
	<link rel="prefetch" href="https://demos.reytheme.com/san-francisco/new-arrivals/">
</head>
<body data-rsssl="1"
	  class="home page-template page-template-template-builder page-template-template-builder-php page page-id-2006 wp-custom-logo theme-rey woocommerce-js ltr woocommerce elementor-default elementor-kit-2009 elementor-page elementor-page-2006 rey-cwidth--default --no-acc-focus elementor-opt r-notices rey-js e--ua-blink e--ua-chrome e--ua-mac e--ua-webkit"
	  data-id="2006" itemtype="https://schema.org/WebPage" itemscope="itemscope" data-rey-device="desktop"
	  data-elementor-device-mode="desktop" data-at-top="">
<script type="text/javascript" id="rey-no-js" data-noptimize="" data-no-optimize="1" data-no-defer="1">
	document.body.classList.remove('rey-no-js');
	document.body.classList.add('rey-js');
</script>
<script type="text/javascript" id="rey-instant-js" data-noptimize="" data-no-optimize="1" data-no-defer="1"
		data-pagespeed-no-defer="">
	(function () {
		if (!window.matchMedia("(max-width: 1024px)").matches && ("IntersectionObserver" in window)) {
			var io = new IntersectionObserver(entries => {
				window.reyScrollbarWidth = window.innerWidth - entries[0].boundingClientRect.width;
				document.documentElement.style.setProperty('--scrollbar-width', window.reyScrollbarWidth + "px");
				io.disconnect();
			});
			io.observe(document.documentElement);
		}
		let cw = parseInt(document.documentElement.getAttribute('data-container') || 1440);
		const sxl = function () {
			let xl;
			if (window.matchMedia('(min-width: 1025px) and (max-width: ' + cw + 'px)').matches) xl = 1; // 1440px - 1025px
			else if (window.matchMedia('(min-width: ' + (cw + 1) + 'px)').matches) xl = 2; // +1440px
			document.documentElement.setAttribute('data-xl', xl || 0);
		};
		sxl();
		window.addEventListener('resize', sxl);
	})();
</script>
<a href="https://demos.reytheme.com/san-francisco/#content" class="skip-link screen-reader-text">Skip to content</a>
<div id="page" class="rey-siteWrapper ">
	<div class="rey-overlay rey-overlay--site" style="opacity:0;"></div>
	<header class="rey-siteHeader rey-siteHeader--custom rey-siteHeader--179 header-pos--rel">
		<div data-elementor-type="wp-post" data-elementor-id="179" class="elementor elementor-179"
			 data-elementor-gstype="header" data-page-el-selector="body.elementor-page-179">
			<section
				class="elementor-section elementor-top-section elementor-element elementor-element-0d4940d rey-section-bg--classic elementor-section-boxed elementor-section-height-default elementor-section-height-default"
				data-id="0d4940d" data-element_type="section"
				data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
				<div class="elementor-container elementor-column-gap-default">
					<div
						class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-8e9744f"
						data-id="8e9744f" data-element_type="column">
						<div class="elementor-column-wrap--8e9744f elementor-widget-wrap elementor-element-populated">
							<div
								class="elementor-element elementor-element-559cd29 elementor-widget elementor-widget-reycore-text-scroller"
								data-id="559cd29" data-element_type="widget"
								data-widget_type="reycore-text-scroller.default">
								<div class="elementor-widget-container">
									<div class="rey-textScroller clearfix">
										<div
											class="rey-textScroller-items splide rey-textScroller-559cd29 --vertical rey-inView splide--fade splide--ltr splide--draggable is-active is-overflow is-initialized"
											data-slider-config="{&quot;type&quot;:&quot;fade&quot;,&quot;autoplay&quot;:true,&quot;interval&quot;:4000,&quot;delayInit&quot;:2000,&quot;customArrows&quot;:false,&quot;speed&quot;:1}"
											id="splide02" role="region" aria-roledescription="carousel">
											<div
												class="splide__track splide__track--fade splide__track--ltr splide__track--draggable"
												id="splide02-track" aria-live="off" aria-atomic="true"
												aria-busy="false">
												<div class="splide__list" id="splide02-list" role="presentation">

													<!-- Top news feed header start to loop -->

													<div class="splide__slide rey-textScroller-item is-prev"
														 id="splide02-slide01" role="group" aria-roledescription="slide"
														 aria-label="1 of 2" aria-hidden="true"
														 style="transform: translateX(0%); transition: opacity 1ms cubic-bezier(0.25, 1, 0.5, 1);">
                                                <span>
                                                   <p>FREE WORLDWIDE SHIPPING OVER $100</p>
                                                </span>
													</div>
													<div
														class="splide__slide rey-textScroller-item is-active is-visible"
														data-lazy-hidden="" id="splide02-slide02" role="group"
														aria-roledescription="slide" aria-label="2 of 2"
														style="transform: translateX(-100%); transition: opacity 1ms cubic-bezier(0.25, 1, 0.5, 1);">
                                                <span>
                                                   <p>LAST CALL: LOWEST PRICE GUARANTEE 50% OFF. <a
														   href="https://demos.reytheme.com/san-francisco/#">EXPLORE</a></p>
                                                </span>
													</div>

													<!-- End Top news feed header start to loop -->
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

					<!-- start top store and contact section -->
					<div
						class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-e138032 elementor-hidden-mobile"
						data-id="e138032" data-element_type="column">
						<div class="elementor-column-wrap--e138032 elementor-widget-wrap elementor-element-populated">
							<div
								class="elementor-element elementor-element-4393b57 reyEl-menu--horizontal --icons-start elementor-widget elementor-widget-reycore-menu"
								data-id="4393b57" data-element_type="widget"
								data-widget_type="reycore-menu.custom-items">
								<div class="elementor-widget-container">
									<div class="rey-element reyEl-menu">
										<div class="reyEl-menu-navWrapper">
											<ul class="reyEl-menu-nav rey-navEl --menuHover-">
												<li class="menu-item "><a class=""
																		  href="https://demos.reytheme.com/san-francisco/showrooms/"><span>STORES</span></a>
												</li>
												<li class="menu-item "><a class=""
																		  href="https://demos.reytheme.com/san-francisco/contact/"><span>CONTACT</span></a>
												</li>
											</ul>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- End top store and contact section -->

				</div>
			</section>
			<section
				class="elementor-section elementor-top-section elementor-element elementor-element-f7270e2 elementor-section-content-middle rey-section-bg--classic elementor-section-boxed elementor-section-height-default elementor-section-height-default"
				data-id="f7270e2" data-element_type="section"
				data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
				<div class="elementor-container elementor-column-gap-no">
					<div
						class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-6e7b001c"
						data-id="6e7b001c" data-element_type="column">
						<div class="elementor-column-wrap--6e7b001c elementor-widget-wrap elementor-element-populated">
							<div
								class="elementor-element elementor-element-11648aaf elementor-widget elementor-widget-reycore-header-logo"
								data-id="11648aaf" data-element_type="widget"
								data-widget_type="reycore-header-logo.default">
								<!-- Start .rey-logoWrapper -->
								<div class="elementor-widget-container">
									<div class="rey-logoWrapper">
										<div class="rey-siteLogo">
											<a href="https://demos.reytheme.com/san-francisco/" data-no-lazy="1"
											   data-skip-lazy="1" class="no-lazy custom-logo-link" rel="home"
											   itemprop="url"><img width="41" height="21"
																   src="/babui/assets/client-view/image/logo-black-mobile.svg"
																   data-no-lazy="1" data-skip-lazy="1"
																   class="no-lazy custom-logo" alt="San Francisco"
																   loading="eager" decoding="async"></a>
										</div>
									</div>
									<!-- End .rey-logoWrapper -->
								</div>
							</div>
						</div>
					</div>

					<!-- Start menu  -->
					<div
						class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-7b847be"
						data-id="7b847be" data-element_type="column">
						<div class="elementor-column-wrap--7b847be elementor-widget-wrap elementor-element-populated">
							<div
								class="elementor-element elementor-element-19e0e42b elementor-widget__width-auto --il--tablet-left --il--mobile-left --icons-start --submenu-display-collapsed --tap-open --panel-dir--left elementor-widget elementor-widget-reycore-header-navigation"
								data-id="19e0e42b" data-element_type="widget"
								data-widget_type="reycore-header-navigation.default">
								<div class="elementor-widget-container">
									<button
										class="btn rey-mainNavigation-mobileBtn rey-headerIcon __hamburger --hs-25bars"
										aria-label="Open menu">
										<div class="__bars">
											<span class="__bar"></span>
											<span class="__bar"></span>
											<span class="__bar"></span>
										</div>
										<svg aria-hidden="true" role="img" id="rey-icon-close-676113ecb3472"
											 class="rey-icon rey-icon-close " viewBox="0 0 110 110">
											<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"
											   stroke-linecap="square">
												<path
													d="M4.79541854,4.29541854 L104.945498,104.445498 L4.79541854,4.29541854 Z"
													stroke="currentColor"
													stroke-width="var(--stroke-width, 12px)"></path>
												<path
													d="M4.79541854,104.704581 L104.945498,4.55450209 L4.79541854,104.704581 Z"
													stroke="currentColor"
													stroke-width="var(--stroke-width, 12px)"></path>
											</g>
										</svg>
									</button>
									<!-- .rey-mainNavigation-mobileBtn -->
									<nav id="site-navigation-19e0e42b"
										 class="rey-mainNavigation rey-mainNavigation--desktop --shadow-1"
										 data-id="-19e0e42b" aria-label="Main Menu" data-sm-indicator="dash"
										 itemtype="https://schema.org/SiteNavigationElement" itemscope="itemscope">
										<ul id="main-menu-desktop-19e0e42b"
											class="rey-mainMenu rey-mainMenu--desktop id--mainMenu--desktop --has-indicators  rey-navEl --menuHover-simple --megamenu-support">
											<li id="menu-item-195"
												class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-2006 current_page_item menu-item-195 depth--0 --is-regular o-id-2006">
												<a href="https://demos.reytheme.com/san-francisco/" aria-current="page"><span>Home</span></a>
											</li>
											<li id="menu-item-196"
												class="menu-item menu-item-type-post_type menu-item-object-page menu-item-196 depth--0 --is-mega o-id-2001 --is-mega-gs --mega-custom menu-item-has-children"
												aria-haspopup="true" aria-expanded="false">
												<a href="https://demos.reytheme.com/san-francisco/shop/"><span>Shop</span><i
														class="--submenu-indicator --submenu-indicator-dash"></i></a>
												<div class="rey-mega-gs">
													<div data-elementor-type="wp-post" data-elementor-id="1142"
														 class="elementor elementor-1142"
														 data-elementor-gstype="megamenu"
														 data-page-el-selector="body.elementor-page-1142">
														<section
															class="elementor-section elementor-top-section elementor-element elementor-element-2479f4e rey-flexWrap rey-section-bg--classic elementor-section-boxed elementor-section-height-default elementor-section-height-default"
															data-id="2479f4e" data-element_type="section"
															data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
															<div
																class="elementor-container elementor-column-gap-default">
																<div
																	class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-8a9663a"
																	data-id="8a9663a" data-element_type="column">
																	<div
																		class="elementor-column-wrap--8a9663a elementor-widget-wrap elementor-element-populated">
																		<section
																			class="elementor-section elementor-inner-section elementor-element elementor-element-a13d32f rey-flexWrap elementor-section-boxed elementor-section-height-default elementor-section-height-default"
																			data-id="a13d32f"
																			data-element_type="section">
																			<div
																				class="elementor-container elementor-column-gap-default">
																				<div
																					class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-dee5240"
																					data-id="dee5240"
																					data-element_type="column">
																					<div
																						class="elementor-column-wrap--dee5240 elementor-widget-wrap elementor-element-populated">
																						<div
																							class="elementor-element elementor-element-c37db73 elementor-widget elementor-widget-heading"
																							data-id="c37db73"
																							data-element_type="widget"
																							data-widget_type="heading.default">
																							<div
																								class="elementor-widget-container">
																								<div
																									class="elementor-heading-title elementor-size-default">
																									CATEGORIES
																								</div>
																							</div>
																						</div>
																						<div
																							class="elementor-element elementor-element-8d1a5b4 reyEl-menu--vertical reyEl-menu--cols-1 --icons-start elementor-widget elementor-widget-reycore-menu"
																							data-id="8d1a5b4"
																							data-element_type="widget"
																							data-widget_type="reycore-menu.product-categories">
																							<div
																								class="elementor-widget-container">
																								<div
																									class="rey-element reyEl-menu">
																									<div
																										class="reyEl-menu-navWrapper">
																										<ul class="reyEl-menu-nav rey-navEl --menuHover-">
																											<li class="menu-item ">
																												<a href="https://demos.reytheme.com/san-francisco/product-category/accessories/"
																												   tabindex="-1"><span>Accessories</span></a>
																											</li>
																											<li class="menu-item ">
																												<a href="https://demos.reytheme.com/san-francisco/product-category/cameras/"
																												   tabindex="-1"><span>Cameras</span></a>
																											</li>
																											<li class="menu-item ">
																												<a href="https://demos.reytheme.com/san-francisco/product-category/headphones/"
																												   tabindex="-1"><span>Headphones</span></a>
																											</li>
																											<li class="menu-item ">
																												<a href="https://demos.reytheme.com/san-francisco/product-category/speakers/"
																												   tabindex="-1"><span>Speakers</span></a>
																											</li>
																											<li class="menu-item ">
																												<a href="https://demos.reytheme.com/san-francisco/product-category/wearables/"
																												   tabindex="-1"><span>Wearables</span></a>
																											</li>
																										</ul>
																									</div>
																								</div>
																							</div>
																						</div>
																					</div>
																				</div>
																				<div
																					class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-6ce78d1"
																					data-id="6ce78d1"
																					data-element_type="column">
																					<div
																						class="elementor-column-wrap--6ce78d1 elementor-widget-wrap elementor-element-populated">
																						<div
																							class="elementor-element elementor-element-8bc12ee elementor-button-underline-hover elementor-widget elementor-widget-button"
																							data-id="8bc12ee"
																							data-element_type="widget"
																							data-widget_type="button.default">
																							<div
																								class="elementor-widget-container">
																								<div
																									class="elementor-button-wrapper">
																									<a class="elementor-button elementor-button-link elementor-size-sm"
																									   href="https://demos.reytheme.com/san-francisco/brands/"
																									   tabindex="-1">
                                                                                 <span
																					 class="elementor-button-content-wrapper">
                                                                                 <span class="elementor-button-text">Popular Brands</span>
                                                                                 </span>
																									</a>
																								</div>
																							</div>
																						</div>
																						<div
																							class="elementor-element elementor-element-a36fd99 elementor-widget elementor-widget-reycore-wc-attributes"
																							data-id="a36fd99"
																							data-element_type="widget"
																							data-widget_type="reycore-wc-attributes.default">
																							<div
																								class="elementor-widget-container">
																								<div
																									class="rey-element reyEl-wcAttr reyEl-wcAttr--list rey-filterList rey-filterList--list">
																									<ul class="reyEl-wcAttr-list">
																										<li>
																											<a href="https://demos.reytheme.com/san-francisco/product-brand/anter/"
																											   tabindex="-1">Anter</a>
																										</li>
																										<li>
																											<a href="https://demos.reytheme.com/san-francisco/product-brand/bav/"
																											   tabindex="-1">Bav</a>
																										</li>
																										<li>
																											<a href="https://demos.reytheme.com/san-francisco/product-brand/bevel/"
																											   tabindex="-1">Bevel</a>
																										</li>
																										<li>
																											<a href="https://demos.reytheme.com/san-francisco/product-brand/c-pro/"
																											   tabindex="-1">C
																												Pro</a>
																										</li>
																										<li>
																											<a href="https://demos.reytheme.com/san-francisco/product-brand/candero/"
																											   tabindex="-1">Candero</a>
																										</li>
																										<li>
																											<a href="https://demos.reytheme.com/san-francisco/product-brand/censis/"
																											   tabindex="-1">Censis</a>
																										</li>
																									</ul>
																								</div>
																							</div>
																						</div>
																					</div>
																				</div>
																				<div
																					class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-5a81dc4"
																					data-id="5a81dc4"
																					data-element_type="column">
																					<div
																						class="elementor-column-wrap--5a81dc4 elementor-widget-wrap elementor-element-populated">
																						<div
																							class="elementor-element elementor-element-fa4ad39 elementor-button-dashed elementor-widget elementor-widget-button"
																							data-id="fa4ad39"
																							data-element_type="widget"
																							data-widget_type="button.default">
																							<div
																								class="elementor-widget-container">
																								<div
																									class="elementor-button-wrapper">
																									<a class="elementor-button elementor-button-link elementor-size-sm"
																									   href="https://demos.reytheme.com/san-francisco/shop/"
																									   tabindex="-1">
                                                                                 <span
																					 class="elementor-button-content-wrapper">
                                                                                 <span class="elementor-button-text">Shop all products</span>
                                                                                 </span>
																									</a>
																								</div>
																							</div>
																						</div>
																					</div>
																				</div>
																			</div>
																		</section>
																	</div>
																</div>
																<div
																	class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-585ea7e rey-colbg--classic"
																	data-id="585ea7e" data-element_type="column"
																	data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
																	<div
																		class="elementor-column-wrap--585ea7e elementor-widget-wrap elementor-element-populated">
																		<div
																			class="elementor-element elementor-element-4fbbda7 elementor-widget elementor-widget-heading"
																			data-id="4fbbda7" data-element_type="widget"
																			data-widget_type="heading.default">
																			<div class="elementor-widget-container">
																				<h3 class="elementor-heading-title elementor-size-default">
																					Complete your setup</h3>
																			</div>
																		</div>
																		<div
																			class="elementor-element elementor-element-87b685f elementor-button-dashed elementor-widget elementor-widget-button"
																			data-id="87b685f" data-element_type="widget"
																			data-widget_type="button.default">
																			<div class="elementor-widget-container">
																				<div class="elementor-button-wrapper">
																					<a class="elementor-button elementor-button-link elementor-size-sm"
																					   href="https://demos.reytheme.com/san-francisco/shop/"
																					   tabindex="-1">
                                                                     <span class="elementor-button-content-wrapper">
                                                                     <span class="elementor-button-text">Discover</span>
                                                                     </span>
																					</a>
																				</div>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
														</section>
													</div>
												</div>
											</li>
											<li id="menu-item-1828"
												class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1828 depth--0 --is-regular o-id-1826">
												<a href="https://demos.reytheme.com/san-francisco/new-arrivals/"><span>New Arrivals</span></a>
											</li>
											<li id="menu-item-1250"
												class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1250 depth--0 --is-regular o-id-1234">
												<a href="https://demos.reytheme.com/san-francisco/brands/"><span>Brands</span></a>
											</li>
											<li id="menu-item-945"
												class="menu-item menu-item-type-custom menu-item-object-custom menu-item-945 depth--0 --is-mega --is-mega-gs --mega-custom menu-item-has-children"
												aria-haspopup="true" aria-expanded="false">
												<a href="https://demos.reytheme.com/san-francisco/#"><span>Pages</span><i
														class="--submenu-indicator --submenu-indicator-dash"></i></a>
												<div class="rey-mega-gs">
													<div data-elementor-type="wp-post" data-elementor-id="1168"
														 class="elementor elementor-1168"
														 data-elementor-gstype="megamenu"
														 data-page-el-selector="body.elementor-page-1168">
														<section
															class="elementor-section elementor-top-section elementor-element elementor-element-79a0704 rey-section-bg--classic elementor-section-boxed elementor-section-height-default elementor-section-height-default"
															data-id="79a0704" data-element_type="section"
															data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
															<div
																class="elementor-container elementor-column-gap-default">
																<div
																	class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-f130896"
																	data-id="f130896" data-element_type="column">
																	<div
																		class="elementor-column-wrap--f130896 elementor-widget-wrap elementor-element-populated">
																		<div
																			class="elementor-element elementor-element-f8d4f7d elementor-widget elementor-widget-heading"
																			data-id="f8d4f7d" data-element_type="widget"
																			data-widget_type="heading.default">
																			<div class="elementor-widget-container">
																				<h5 class="elementor-heading-title elementor-size-default">
																					SITE</h5>
																			</div>
																		</div>
																		<div
																			class="elementor-element elementor-element-2e3f54b reyEl-menu--vertical reyEl-menu--cols-1 --icons-start elementor-widget elementor-widget-reycore-menu"
																			data-id="2e3f54b" data-element_type="widget"
																			data-widget_type="reycore-menu.custom-items">
																			<div class="elementor-widget-container">
																				<div class="rey-element reyEl-menu">
																					<div class="reyEl-menu-navWrapper">
																						<ul class="reyEl-menu-nav rey-navEl --menuHover-">
																							<li class="menu-item "><a
																									class=""
																									href="https://demos.reytheme.com/san-francisco/contact/"
																									tabindex="-1"><span>Contact</span></a>
																							</li>
																							<li class="menu-item "><a
																									class=""
																									href="https://demos.reytheme.com/san-francisco/about-us/"
																									tabindex="-1"><span>About Us</span></a>
																							</li>
																							<li class="menu-item "><a
																									class=""
																									href="https://demos.reytheme.com/san-francisco/frequently-asked-questions/"
																									tabindex="-1"><span>Frequently Asked Questions</span></a>
																							</li>
																							<li class="menu-item "><a
																									class=""
																									href="https://demos.reytheme.com/san-francisco/showrooms/"
																									tabindex="-1"><span>Showrooms</span></a>
																							</li>
																							<li class="menu-item "><a
																									class=""
																									href="https://demos.reytheme.com/san-francisco/news/"
																									tabindex="-1"><span>Blog</span></a>
																							</li>
																							<li class="menu-item "><a
																									class=""
																									href="https://demos.reytheme.com/san-francisco/2022/03/25/the-vivo-x-fold-has-a-fingerprint-reader-on-both-screens/"
																									tabindex="-1"><span>Blog Post</span></a>
																							</li>
																							<li class="menu-item "><a
																									class=""
																									href="https://demos.reytheme.com/san-francisco/terms-conditions/"
																									tabindex="-1"><span>Terms &amp; Conditions</span></a>
																							</li>
																						</ul>
																					</div>
																				</div>
																			</div>
																		</div>
																	</div>
																</div>
																<div
																	class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-6c885fc"
																	data-id="6c885fc" data-element_type="column">
																	<div
																		class="elementor-column-wrap--6c885fc elementor-widget-wrap elementor-element-populated">
																		<div
																			class="elementor-element elementor-element-6f251c5 elementor-widget elementor-widget-heading"
																			data-id="6f251c5" data-element_type="widget"
																			data-widget_type="heading.default">
																			<div class="elementor-widget-container">
																				<h5 class="elementor-heading-title elementor-size-default">
																					SHOP</h5>
																			</div>
																		</div>
																		<div
																			class="elementor-element elementor-element-a2811d2 reyEl-menu--vertical reyEl-menu--cols-1 --icons-start elementor-widget elementor-widget-reycore-menu"
																			data-id="a2811d2" data-element_type="widget"
																			data-widget_type="reycore-menu.custom-items">
																			<div class="elementor-widget-container">
																				<div class="rey-element reyEl-menu">
																					<div class="reyEl-menu-navWrapper">
																						<ul class="reyEl-menu-nav rey-navEl --menuHover-">
																							<li class="menu-item "><a
																									class=""
																									href="https://demos.reytheme.com/san-francisco/shop/"
																									tabindex="-1"><span>Catalogue</span></a>
																							</li>
																							<li class="menu-item "><a
																									class=""
																									href="https://demos.reytheme.com/san-francisco/product-category/headphones/"
																									tabindex="-1"><span>Category</span></a>
																							</li>
																							<li class="menu-item "><a
																									class=""
																									href="https://demos.reytheme.com/san-francisco/product/comfortable-over-ear-headphones/"
																									tabindex="-1"><span>Product / Catalog Item</span></a>
																							</li>
																							<li class="menu-item "><a
																									class=""
																									href="https://demos.reytheme.com/san-francisco/wishlist/"
																									tabindex="-1"><span>Wishlist</span></a>
																							</li>
																							<li class="menu-item "><a
																									class=""
																									href="https://demos.reytheme.com/san-francisco/checkout/"
																									tabindex="-1"><span>Checkout</span></a>
																							</li>
																							<li class="menu-item "><a
																									class=""
																									href="https://demos.reytheme.com/san-francisco/cart/"
																									tabindex="-1"><span>Cart</span></a>
																							</li>
																						</ul>
																					</div>
																				</div>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
														</section>
													</div>
												</div>
											</li>
										</ul>
									</nav>
									<!-- .rey-mainNavigation -->
									<nav id="site-navigation-mobile-19e0e42b"
										 class="rey-mainNavigation rey-mainNavigation--mobile rey-mobileNav "
										 data-id="-19e0e42b" aria-label="Main Menu"
										 itemtype="https://schema.org/SiteNavigationElement" itemscope="itemscope">
										<div class="rey-mobileNav-container">
											<div class="rey-mobileNav-header">
												<div class="rey-siteLogo">
													<a href="https://demos.reytheme.com/san-francisco/" data-no-lazy="1"
													   data-skip-lazy="1" class="no-lazy custom-logo-link" rel="home"
													   itemprop="url"><img width="41" height="21"
																		   src="/babui/assets/client-view/image/logo-black-mobile.svg"
																		   data-no-lazy="1" data-skip-lazy="1"
																		   class="no-lazy custom-logo"
																		   alt="San Francisco" loading="eager"
																		   decoding="async"></a>
												</div>
												<button
													class="__arrClose btn rey-mobileMenu-close js-rey-mobileMenu-close"
													aria-label="Close menu">
                                             <span class="__icons">
                                                <svg aria-hidden="true" role="img" id="rey-icon-close-676113ecbbb1a"
													 class="rey-icon rey-icon-close " viewBox="0 0 110 110">
                                                   <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"
													  stroke-linecap="square">
                                                      <path
														  d="M4.79541854,4.29541854 L104.945498,104.445498 L4.79541854,4.29541854 Z"
														  stroke="currentColor"
														  stroke-width="var(--stroke-width, 12px)"></path>
                                                      <path
														  d="M4.79541854,104.704581 L104.945498,4.55450209 L4.79541854,104.704581 Z"
														  stroke="currentColor"
														  stroke-width="var(--stroke-width, 12px)"></path>
                                                   </g>
                                                </svg>
                                                <svg aria-hidden="true" role="img"
													 id="rey-icon-arrow-classic-676113ecbbb29"
													 class="rey-icon rey-icon-arrow-classic " viewBox="0 0 16 16">
                                                   <polygon fill="var(--icon-fill, currentColor)"
															points="8 0 6.6 1.4 12.2 7 0 7 0 9 12.2 9 6.6 14.6 8 16 16 8"></polygon>
                                                </svg>
                                             </span>
												</button>
											</div>
											<div class="rey-mobileNav-main">
												<ul id="main-menu-mobile-19e0e42b"
													class="rey-mainMenu rey-mainMenu-mobile  --has-indicators  --megamenu-support">
													<li id="mobile-menu-item-195"
														class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-2006 current_page_item menu-item-195 depth--0 --is-regular o-id-2006">
														<a href="https://demos.reytheme.com/san-francisco/"
														   aria-current="page"><span style="transition-delay: 0.3s;">Home</span></a>
													</li>
													<li id="mobile-menu-item-196"
														class="menu-item menu-item-type-post_type menu-item-object-page menu-item-196 depth--0 --is-mega o-id-2001 --is-mega-gs --mega-custom menu-item-has-children">
														<a href="https://demos.reytheme.com/san-francisco/shop/"><span
																style="transition-delay: 0.33s;">Shop</span><i
																class="--submenu-indicator --submenu-indicator-dash"></i></a>
														<div class="rey-mega-gs">
															<div data-elementor-type="wp-post" data-elementor-id="1142"
																 class="elementor elementor-1142"
																 data-elementor-gstype="megamenu"
																 data-page-el-selector="body.elementor-page-1142">
																<section
																	class="elementor-section elementor-top-section elementor-element elementor-element-2479f4e rey-flexWrap rey-section-bg--classic elementor-section-boxed elementor-section-height-default elementor-section-height-default"
																	data-id="2479f4e" data-element_type="section"
																	data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
																	<div
																		class="elementor-container elementor-column-gap-default">
																		<div
																			class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-8a9663a"
																			data-id="8a9663a"
																			data-element_type="column">
																			<div
																				class="elementor-column-wrap--8a9663a elementor-widget-wrap elementor-element-populated">
																				<section
																					class="elementor-section elementor-inner-section elementor-element elementor-element-a13d32f rey-flexWrap elementor-section-boxed elementor-section-height-default elementor-section-height-default"
																					data-id="a13d32f"
																					data-element_type="section">
																					<div
																						class="elementor-container elementor-column-gap-default">
																						<div
																							class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-dee5240"
																							data-id="dee5240"
																							data-element_type="column">
																							<div
																								class="elementor-column-wrap--dee5240 elementor-widget-wrap elementor-element-populated">
																								<div
																									class="elementor-element elementor-element-c37db73 elementor-widget elementor-widget-heading"
																									data-id="c37db73"
																									data-element_type="widget"
																									data-widget_type="heading.default">
																									<div
																										class="elementor-widget-container">
																										<div
																											class="elementor-heading-title elementor-size-default">
																											CATEGORIES
																										</div>
																									</div>
																								</div>
																								<div
																									class="elementor-element elementor-element-8d1a5b4 reyEl-menu--vertical reyEl-menu--cols-1 --icons-start elementor-widget elementor-widget-reycore-menu"
																									data-id="8d1a5b4"
																									data-element_type="widget"
																									data-widget_type="reycore-menu.product-categories">
																									<div
																										class="elementor-widget-container">
																										<div
																											class="rey-element reyEl-menu">
																											<div
																												class="reyEl-menu-navWrapper">
																												<ul class="reyEl-menu-nav rey-navEl --menuHover-">
																													<li class="menu-item ">
																														<a href="https://demos.reytheme.com/san-francisco/product-category/accessories/"><span>Accessories</span></a>
																													</li>
																													<li class="menu-item ">
																														<a href="https://demos.reytheme.com/san-francisco/product-category/cameras/"><span>Cameras</span></a>
																													</li>
																													<li class="menu-item ">
																														<a href="https://demos.reytheme.com/san-francisco/product-category/headphones/"><span>Headphones</span></a>
																													</li>
																													<li class="menu-item ">
																														<a href="https://demos.reytheme.com/san-francisco/product-category/speakers/"><span>Speakers</span></a>
																													</li>
																													<li class="menu-item ">
																														<a href="https://demos.reytheme.com/san-francisco/product-category/wearables/"><span>Wearables</span></a>
																													</li>
																												</ul>
																											</div>
																										</div>
																									</div>
																								</div>
																							</div>
																						</div>
																						<div
																							class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-6ce78d1"
																							data-id="6ce78d1"
																							data-element_type="column">
																							<div
																								class="elementor-column-wrap--6ce78d1 elementor-widget-wrap elementor-element-populated">
																								<div
																									class="elementor-element elementor-element-8bc12ee elementor-button-underline-hover elementor-widget elementor-widget-button"
																									data-id="8bc12ee"
																									data-element_type="widget"
																									data-widget_type="button.default">
																									<div
																										class="elementor-widget-container">
																										<div
																											class="elementor-button-wrapper">
																											<a class="elementor-button elementor-button-link elementor-size-sm"
																											   href="https://demos.reytheme.com/san-francisco/brands/">
                                                                                       <span
																						   class="elementor-button-content-wrapper">
                                                                                       <span
																						   class="elementor-button-text">Popular Brands</span>
                                                                                       </span>
																											</a>
																										</div>
																									</div>
																								</div>
																								<div
																									class="elementor-element elementor-element-a36fd99 elementor-widget elementor-widget-reycore-wc-attributes"
																									data-id="a36fd99"
																									data-element_type="widget"
																									data-widget_type="reycore-wc-attributes.default">
																									<div
																										class="elementor-widget-container">
																										<div
																											class="rey-element reyEl-wcAttr reyEl-wcAttr--list rey-filterList rey-filterList--list">
																											<ul class="reyEl-wcAttr-list">
																												<li>
																													<a href="https://demos.reytheme.com/san-francisco/product-brand/anter/">Anter</a>
																												</li>
																												<li>
																													<a href="https://demos.reytheme.com/san-francisco/product-brand/bav/">Bav</a>
																												</li>
																												<li>
																													<a href="https://demos.reytheme.com/san-francisco/product-brand/bevel/">Bevel</a>
																												</li>
																												<li>
																													<a href="https://demos.reytheme.com/san-francisco/product-brand/c-pro/">C
																														Pro</a>
																												</li>
																												<li>
																													<a href="https://demos.reytheme.com/san-francisco/product-brand/candero/">Candero</a>
																												</li>
																												<li>
																													<a href="https://demos.reytheme.com/san-francisco/product-brand/censis/">Censis</a>
																												</li>
																											</ul>
																										</div>
																									</div>
																								</div>
																							</div>
																						</div>
																						<div
																							class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-5a81dc4"
																							data-id="5a81dc4"
																							data-element_type="column">
																							<div
																								class="elementor-column-wrap--5a81dc4 elementor-widget-wrap elementor-element-populated">
																								<div
																									class="elementor-element elementor-element-fa4ad39 elementor-button-dashed elementor-widget elementor-widget-button"
																									data-id="fa4ad39"
																									data-element_type="widget"
																									data-widget_type="button.default">
																									<div
																										class="elementor-widget-container">
																										<div
																											class="elementor-button-wrapper">
																											<a class="elementor-button elementor-button-link elementor-size-sm"
																											   href="https://demos.reytheme.com/san-francisco/shop/">
                                                                                       <span
																						   class="elementor-button-content-wrapper">
                                                                                       <span
																						   class="elementor-button-text">Shop all products</span>
                                                                                       </span>
																											</a>
																										</div>
																									</div>
																								</div>
																							</div>
																						</div>
																					</div>
																				</section>
																			</div>
																		</div>
																		<div
																			class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-585ea7e rey-colbg--classic"
																			data-id="585ea7e" data-element_type="column"
																			data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
																			<div
																				class="elementor-column-wrap--585ea7e elementor-widget-wrap elementor-element-populated">
																				<div
																					class="elementor-element elementor-element-4fbbda7 elementor-widget elementor-widget-heading"
																					data-id="4fbbda7"
																					data-element_type="widget"
																					data-widget_type="heading.default">
																					<div
																						class="elementor-widget-container">
																						<h3 class="elementor-heading-title elementor-size-default">
																							Complete your setup</h3>
																					</div>
																				</div>
																				<div
																					class="elementor-element elementor-element-87b685f elementor-button-dashed elementor-widget elementor-widget-button"
																					data-id="87b685f"
																					data-element_type="widget"
																					data-widget_type="button.default">
																					<div
																						class="elementor-widget-container">
																						<div
																							class="elementor-button-wrapper">
																							<a class="elementor-button elementor-button-link elementor-size-sm"
																							   href="https://demos.reytheme.com/san-francisco/shop/">
                                                                           <span
																			   class="elementor-button-content-wrapper">
                                                                           <span
																			   class="elementor-button-text">Discover</span>
                                                                           </span>
																							</a>
																						</div>
																					</div>
																				</div>
																			</div>
																		</div>
																	</div>
																</section>
															</div>
														</div>
													</li>
													<li id="mobile-menu-item-1828"
														class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1828 depth--0 --is-regular o-id-1826">
														<a href="https://demos.reytheme.com/san-francisco/new-arrivals/"><span
																style="transition-delay: 0.36s;">New Arrivals</span></a>
													</li>
													<li id="mobile-menu-item-1250"
														class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1250 depth--0 --is-regular o-id-1234">
														<a href="https://demos.reytheme.com/san-francisco/brands/"><span
																style="transition-delay: 0.39s;">Brands</span></a></li>
													<li id="mobile-menu-item-945"
														class="menu-item menu-item-type-custom menu-item-object-custom menu-item-945 depth--0 --is-mega --is-mega-gs --mega-custom menu-item-has-children">
														<a href="https://demos.reytheme.com/san-francisco/#"><span
																style="transition-delay: 0.42s;">Pages</span><i
																class="--submenu-indicator --submenu-indicator-dash"></i></a>
														<div class="rey-mega-gs">
															<div data-elementor-type="wp-post" data-elementor-id="1168"
																 class="elementor elementor-1168"
																 data-elementor-gstype="megamenu"
																 data-page-el-selector="body.elementor-page-1168">
																<section
																	class="elementor-section elementor-top-section elementor-element elementor-element-79a0704 rey-section-bg--classic elementor-section-boxed elementor-section-height-default elementor-section-height-default"
																	data-id="79a0704" data-element_type="section"
																	data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
																	<div
																		class="elementor-container elementor-column-gap-default">
																		<div
																			class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-f130896"
																			data-id="f130896"
																			data-element_type="column">
																			<div
																				class="elementor-column-wrap--f130896 elementor-widget-wrap elementor-element-populated">
																				<div
																					class="elementor-element elementor-element-f8d4f7d elementor-widget elementor-widget-heading"
																					data-id="f8d4f7d"
																					data-element_type="widget"
																					data-widget_type="heading.default">
																					<div
																						class="elementor-widget-container">
																						<h5 class="elementor-heading-title elementor-size-default">
																							SITE</h5>
																					</div>
																				</div>
																				<div
																					class="elementor-element elementor-element-2e3f54b reyEl-menu--vertical reyEl-menu--cols-1 --icons-start elementor-widget elementor-widget-reycore-menu"
																					data-id="2e3f54b"
																					data-element_type="widget"
																					data-widget_type="reycore-menu.custom-items">
																					<div
																						class="elementor-widget-container">
																						<div
																							class="rey-element reyEl-menu">
																							<div
																								class="reyEl-menu-navWrapper">
																								<ul class="reyEl-menu-nav rey-navEl --menuHover-">
																									<li class="menu-item ">
																										<a class=""
																										   href="https://demos.reytheme.com/san-francisco/contact/"><span>Contact</span></a>
																									</li>
																									<li class="menu-item ">
																										<a class=""
																										   href="https://demos.reytheme.com/san-francisco/about-us/"><span>About Us</span></a>
																									</li>
																									<li class="menu-item ">
																										<a class=""
																										   href="https://demos.reytheme.com/san-francisco/frequently-asked-questions/"><span>Frequently Asked Questions</span></a>
																									</li>
																									<li class="menu-item ">
																										<a class=""
																										   href="https://demos.reytheme.com/san-francisco/showrooms/"><span>Showrooms</span></a>
																									</li>
																									<li class="menu-item ">
																										<a class=""
																										   href="https://demos.reytheme.com/san-francisco/news/"><span>Blog</span></a>
																									</li>
																									<li class="menu-item ">
																										<a class=""
																										   href="https://demos.reytheme.com/san-francisco/2022/03/25/the-vivo-x-fold-has-a-fingerprint-reader-on-both-screens/"><span>Blog Post</span></a>
																									</li>
																									<li class="menu-item ">
																										<a class=""
																										   href="https://demos.reytheme.com/san-francisco/terms-conditions/"><span>Terms &amp; Conditions</span></a>
																									</li>
																								</ul>
																							</div>
																						</div>
																					</div>
																				</div>
																			</div>
																		</div>
																		<div
																			class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-6c885fc"
																			data-id="6c885fc"
																			data-element_type="column">
																			<div
																				class="elementor-column-wrap--6c885fc elementor-widget-wrap elementor-element-populated">
																				<div
																					class="elementor-element elementor-element-6f251c5 elementor-widget elementor-widget-heading"
																					data-id="6f251c5"
																					data-element_type="widget"
																					data-widget_type="heading.default">
																					<div
																						class="elementor-widget-container">
																						<h5 class="elementor-heading-title elementor-size-default">
																							SHOP</h5>
																					</div>
																				</div>
																				<div
																					class="elementor-element elementor-element-a2811d2 reyEl-menu--vertical reyEl-menu--cols-1 --icons-start elementor-widget elementor-widget-reycore-menu"
																					data-id="a2811d2"
																					data-element_type="widget"
																					data-widget_type="reycore-menu.custom-items">
																					<div
																						class="elementor-widget-container">
																						<div
																							class="rey-element reyEl-menu">
																							<div
																								class="reyEl-menu-navWrapper">
																								<ul class="reyEl-menu-nav rey-navEl --menuHover-">
																									<li class="menu-item ">
																										<a class=""
																										   href="https://demos.reytheme.com/san-francisco/shop/"><span>Catalogue</span></a>
																									</li>
																									<li class="menu-item ">
																										<a class=""
																										   href="https://demos.reytheme.com/san-francisco/product-category/headphones/"><span>Category</span></a>
																									</li>
																									<li class="menu-item ">
																										<a class=""
																										   href="https://demos.reytheme.com/san-francisco/product/comfortable-over-ear-headphones/"><span>Product / Catalog Item</span></a>
																									</li>
																									<li class="menu-item ">
																										<a class=""
																										   href="https://demos.reytheme.com/san-francisco/wishlist/"><span>Wishlist</span></a>
																									</li>
																									<li class="menu-item ">
																										<a class=""
																										   href="https://demos.reytheme.com/san-francisco/checkout/"><span>Checkout</span></a>
																									</li>
																									<li class="menu-item ">
																										<a class=""
																										   href="https://demos.reytheme.com/san-francisco/cart/"><span>Cart</span></a>
																									</li>
																								</ul>
																							</div>
																						</div>
																					</div>
																				</div>
																			</div>
																		</div>
																	</div>
																</section>
															</div>
														</div>
													</li>
												</ul>
											</div>
											<div class="rey-mobileNav-footer">
												<div class="rey-mobileNav--footerItem rey-mobileNav-social">
													<div class="rey-mobileNav-socialIcons">
														<div class="rey-mobileNav-socialText">FOLLOW US</div>
														<a class="rey-mobileNav-socialIcons-link" rel="noreferrer"
														   href="https://demos.reytheme.com/san-francisco/#"
														   target="_blank">
															<svg aria-hidden="true" role="img"
																 id="rey-icon-instagram-676113ecbbbb5"
																 class="rey-icon rey-icon-instagram "
																 viewBox="0 0 448 512">
																<path
																	d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z"></path>
															</svg>
														</a>
														<a class="rey-mobileNav-socialIcons-link" rel="noreferrer"
														   href="https://demos.reytheme.com/san-francisco/#"
														   target="_blank">
															<svg aria-hidden="true" role="img"
																 id="rey-icon-facebook-676113ecbbbce"
																 class="rey-icon rey-icon-facebook "
																 viewBox="0 0 512 512">
																<path
																	d="M504 256C504 119 393 8 256 8S8 119 8 256c0 123.78 90.69 226.38 209.25 245V327.69h-63V256h63v-54.64c0-62.15 37-96.48 93.67-96.48 27.14 0 55.52 4.84 55.52 4.84v61h-31.28c-30.8 0-40.41 19.12-40.41 38.73V256h68.78l-11 71.69h-57.78V501C413.31 482.38 504 379.78 504 256z"></path>
															</svg>
														</a>
													</div>
												</div>
												<!-- .rey-mobileNav-social -->
												<a href="https://demos.reytheme.com/san-francisco/my-account/"
												   class="rey-mobileNav--footerItem">
													Connect to your account
													<svg aria-hidden="true" role="img" id="rey-icon-user-676113ecbbd4b"
														 class="rey-icon rey-icon-user " viewBox="0 0 24 24">
														<path
															d="M8.68220488,13 L5.8,13 C4.7,11.6 4,9.9 4,8 C4,3.6 7.6,0 12,0 C16.4,0 20,3.6 20,8 C20,9.9 19.3,11.6 18.2,13 L15.3177951,13 C16.9344907,11.9250785 18,10.0869708 18,8 C18,4.6862915 15.3137085,2 12,2 C8.6862915,2 6,4.6862915 6,8 C6,10.0869708 7.06550934,11.9250785 8.68220488,13 Z"></path>
														<path
															d="M18,14 L6,14 C2.7,14 0,16.7 0,20 L0,23 C0,23.6 0.4,24 1,24 L23,24 C23.6,24 24,23.6 24,23 L24,20 C24,16.7 21.3,14 18,14 Z M22,22 L2,22 L2,20 C2,17.8 3.8,16 6,16 L18,16 C20.2,16 22,17.8 22,20 L22,22 Z"></path>
													</svg>
												</a>
											</div>
										</div>
									</nav>
								</div>
							</div>
						</div>
					</div>

					<!-- End Menu -->
					<!-- Start -header extra content -->
					<div
						class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-76c1f9b"
						data-id="76c1f9b" data-element_type="column">

						<div class="elementor-column-wrap--76c1f9b elementor-widget-wrap elementor-element-populated">
							<div
								class="elementor-element elementor-element-5340c584 elementor-widget__width-auto --inline-layout-ov --inline-mobile-icon --has-button-no elementor-widget elementor-widget-reycore-header-search"
								data-id="5340c584" data-element_type="widget"
								data-widget_type="reycore-header-search.default">
								<div class="elementor-widget-container">
									<div
										class="rey-headerSearch rey-headerIcon js-rey-headerSearch  --tp-before --hit-before">
										<button
											class="btn rey-headerIcon-btn rey-headerSearch-toggle js-rey-headerSearch-toggle">
                                       <span class="__icon rey-headerIcon-icon" aria-hidden="true">
                                          <svg aria-hidden="true" role="img" id="rey-icon-search-676113ecbc859"
											   class="rey-icon rey-icon-search icon-search" viewBox="0 0 24 24">
                                             <circle stroke="currentColor" stroke-width="2.2" fill="none" cx="11"
													 cy="11" r="10"></circle>
                                             <path
												 d="M20.0152578,17.8888876 L23.5507917,21.4244215 C24.1365782,22.010208 24.1365782,22.9599554 23.5507917,23.5457419 C22.9650053,24.1315283 22.0152578,24.1315283 21.4294714,23.5457419 L17.8939375,20.010208 C17.3081511,19.4244215 17.3081511,18.4746741 17.8939375,17.8888876 C18.4797239,17.3031012 19.4294714,17.3031012 20.0152578,17.8888876 Z"
												 fill="currentColor" stroke="none"></path>
                                          </svg>
                                          <svg data-abs="" data-transparent="" aria-hidden="true" role="img"
											   id="rey-icon-close-676113ecbc86c"
											   class="rey-icon rey-icon-close icon-close" viewBox="0 0 110 110">
                                             <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"
												stroke-linecap="square">
                                                <path
													d="M4.79541854,4.29541854 L104.945498,104.445498 L4.79541854,4.29541854 Z"
													stroke="currentColor"
													stroke-width="var(--stroke-width, 12px)"></path>
                                                <path
													d="M4.79541854,104.704581 L104.945498,4.55450209 L4.79541854,104.704581 Z"
													stroke="currentColor"
													stroke-width="var(--stroke-width, 12px)"></path>
                                             </g>
                                          </svg>
                                       </span>
											<span class="screen-reader-text">Search open</span>
										</button>
										<!-- .rey-headerSearch-toggle -->
									</div>
								</div>
							</div>
							<div
								class="elementor-element elementor-element-516c983e elementor-widget__width-auto elementor-widget elementor-widget-reycore-header-account"
								data-id="516c983e" data-element_type="widget"
								data-widget_type="reycore-header-account.default">
								<div class="elementor-widget-container">
									<div class="rey-headerAccount rey-headerIcon ">
										<button
											class="btn rey-headerIcon-btn js-rey-headerAccount rey-headerAccount-btn rey-headerAccount-btn--icon --hit-icon"
											data-layout="drop">
											<span class="screen-reader-text">Open Account details</span>
											<span class="__icon rey-headerIcon-icon" aria-hidden="true">
                                          <svg aria-hidden="true" role="img" id="rey-icon-user-676113ecbd11b"
											   class="rey-icon rey-icon-user rey-headerAccount-btnIcon"
											   viewBox="0 0 24 24">
                                             <path
												 d="M8.68220488,13 L5.8,13 C4.7,11.6 4,9.9 4,8 C4,3.6 7.6,0 12,0 C16.4,0 20,3.6 20,8 C20,9.9 19.3,11.6 18.2,13 L15.3177951,13 C16.9344907,11.9250785 18,10.0869708 18,8 C18,4.6862915 15.3137085,2 12,2 C8.6862915,2 6,4.6862915 6,8 C6,10.0869708 7.06550934,11.9250785 8.68220488,13 Z"></path>
                                             <path
												 d="M18,14 L6,14 C2.7,14 0,16.7 0,20 L0,23 C0,23.6 0.4,24 1,24 L23,24 C23.6,24 24,23.6 24,23 L24,20 C24,16.7 21.3,14 18,14 Z M22,22 L2,22 L2,20 C2,17.8 3.8,16 6,16 L18,16 C20.2,16 22,17.8 22,20 L22,22 Z"></path>
                                          </svg>
                                       </span>
											<span
												class="rey-headerAccount-count rey-headerIcon-counter --hidden --minimal">
                                          <span class="rey-wishlistCounter-number" data-count="0"></span>
                                          <svg data-transparent="" data-abs="" aria-hidden="true" role="img"
											   id="rey-icon-close-676113ecbd379"
											   class="rey-icon rey-icon-close __close-icon" viewBox="0 0 110 110">
                                             <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"
												stroke-linecap="square">
                                                <path
													d="M4.79541854,4.29541854 L104.945498,104.445498 L4.79541854,4.29541854 Z"
													stroke="currentColor"
													stroke-width="var(--stroke-width, 12px)"></path>
                                                <path
													d="M4.79541854,104.704581 L104.945498,4.55450209 L4.79541854,104.704581 Z"
													stroke="currentColor"
													stroke-width="var(--stroke-width, 12px)"></path>
                                             </g>
                                          </svg>
                                       </span>
										</button>
									</div>
									<!-- .rey-headerAccount-wrapper -->
								</div>
							</div>

							<div
								class="elementor-element elementor-element-58addace elementor-widget__width-auto elementor-widget elementor-widget-reycore-header-cart"
								data-id="58addace" data-element_type="widget"
								data-widget_type="reycore-header-cart.default">
								<div class="elementor-widget-container">
									<div class="rey-headerCart-wrapper rey-headerIcon  " data-rey-cart-count="0">
										<button class="btn rey-headerIcon-btn rey-headerCart js-rey-headerCart">
                                       <span class="__icon rey-headerIcon-icon " aria-hidden="true">
                                          <svg aria-hidden="true" role="img" id="rey-icon-bag-676113ecbda50"
											   class="rey-icon rey-icon-bag " viewBox="0 0 24 24">
                                             <path
												 d="M21,3h-4.4C15.8,1.2,14,0,12,0S8.2,1.2,7.4,3H3C2.4,3,2,3.4,2,4v19c0,0.6,0.4,1,1,1h18c0.6,0,1-0.4,1-1V4  C22,3.4,21.6,3,21,3z M12,1c1.5,0,2.8,0.8,3.4,2H8.6C9.2,1.8,10.5,1,12,1z M20,22H4v-4h16V22z M20,17H4V5h3v4h1V5h8v4h1V5h3V17z"></path>
                                          </svg>
                                       </span>
											<span class="rey-headerIcon-counter --bubble"><span
													class="__cart-count">1</span></span>
											<span class="screen-reader-text">Open cart</span>
										</button>
									</div>
									<!-- .rey-headerCart-wrapper -->
								</div>
							</div>
							<div
								class="elementor-element elementor-element-e79eb82 elementor-widget__width-auto elementor-widget elementor-widget-reycore-trigger-v2"
								data-id="e79eb82" data-element_type="widget"
								data-widget_type="reycore-trigger-v2.default">
								<div class="elementor-widget-container">
									<button class="btn rey-triggerBtn js-triggerBtn --button2 " data-trigger="click"
											data-action="offcanvas" title="See Categories" data-offcanvas-id="1297"
											aria-label="Open">
                                    <span class="rey-wicon">
                                       <svg xmlns="http://www.w3.org/2000/svg"
											xmlns:xlink="http://www.w3.org/1999/xlink" width="126px" height="175px"
											viewBox="0 0 126 175">
                                          <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"
											 stroke-linejoin="round">
                                             <polygon id="Path-2" stroke="#000000" stroke-width="12"
													  points="43 6 96.5 6 74 58 120 58 20 168.5 43 90 6 90"></polygon>
                                          </g>
                                       </svg>
                                    </span>
									</button>
								</div>
							</div>
						</div>
					</div>
					<!-- End -header extra content -->
				</div>
			</section>
		</div>
		<div class="rey-overlay rey-overlay--header" style="opacity:0;"></div>
		<div class="rey-overlay rey-overlay--header-top" style="opacity:0;"></div>
	</header>

	<script type="rocketlazyloadscript" data-minify="1" data-rocket-type="text/javascript" defer
			data-rocket-src="https://demos.reytheme.com/tokyo/wp-content/cache/min/6/tokyo/wp-content/plugins/rey-core/inc/elementor/widgets/cover-panels/assets/script.js?ver=1722241430"
			id="reycore-widget-cover-panels-scripts-js"></script>

	<link data-minify="1" id="rey-hs-css" type="text/css"
		  href="https://demos.reytheme.com/tokyo/wp-content/cache/min/6/tokyo/wp-content/uploads/sites/6/rey/hs-804aa92b76.css?ver=1732303718"
		  rel="stylesheet" media="all"/>
	<link id="rey-ds-css" type="text/css"
		  href="https://demos.reytheme.com/tokyo/wp-content/uploads/sites/6/rey/ds-be3ecc54ac.css?ver=3.1.2.1732303718"
		  data-noptimize="" data-no-optimize="1" data-pagespeed-no-defer="" data-pagespeed-no-transform=""
		  data-minify="1" rel="preload" as="style" onload="this.onload=null;this.rel='stylesheet';" media="all"/>

	<link rel='stylesheet' id='elementor-post-6-css'
		  href='http://localhost/babui/assets/client-view/css/post-6.css'
		  type='text/css' media='all'/>

	<div class="rey-siteContent --tpl-template-builder-php" id="content">

		<div class="rey-siteContainer rey-pbTemplate" data-page-el-selector="body.elementor-page-6">
			<div class="rey-siteRow">


				<main class="rey-siteMain --filter-panel" id="main">
					<div class="elementor elementor-6" data-elementor-id="6" data-elementor-type="wp-post">
						<section
							class="elementor-section elementor-top-section elementor-element elementor-element-0602c22 rey-section-stretched elementor-section-full_width elementor-section-height-full rey-flexWrap elementor-section-items-top rey-section-bg--classic elementor-section-height-default"
							data-element_type="section" data-id="0602c22"
							data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
							<div class="elementor-container elementor-column-gap-no">

								<!-- ######### Start left side content ########## -->
								<div
									class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-47ea720"
									data-element_type="column" data-id="47ea720">
									<div
										class="elementor-column-wrap--47ea720 elementor-widget-wrap elementor-element-populated">
										<section
											class="elementor-section elementor-inner-section elementor-element elementor-element-3040a17 rey-flexWrap elementor-section-boxed elementor-section-height-default elementor-section-height-default"
											data-element_type="section" data-id="3040a17">
											<div class="elementor-container elementor-column-gap-default">
												<div
													class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-bbe8ab8"
													data-element_type="column" data-id="bbe8ab8">
													<div
														class="elementor-column-wrap--bbe8ab8 elementor-widget-wrap elementor-element-populated">
														<div
															class="elementor-element elementor-element-74ad995 elementor-hidden-tablet elementor-hidden-phone elementor-widget elementor-widget-spacer"
															data-element_type="widget" data-id="74ad995"
															data-widget_type="spacer.default">
															<div class="elementor-widget-container">
																<div class="elementor-spacer">
																	<div class="elementor-spacer-inner"></div>
																</div>
															</div>
														</div>
														<div
															class="elementor-element elementor-element-a26159c elementor-widget__width-auto elementor-widget elementor-widget-heading"
															data-element_type="widget" data-id="a26159c"
															data-widget_type="heading.default">
															<div class="elementor-widget-container">
																<h2 class="elementor-heading-title elementor-size-medium">
																	JUST IN</h2></div>
														</div>
														<div
															class="elementor-element elementor-element-a26821b elementor-button-underline-hover elementor-widget__width-auto --il--right --il--tablet-right --il--mobile-right elementor-widget elementor-widget-button"
															data-element_type="widget" data-id="a26821b"
															data-widget_type="button.default">
															<div class="elementor-widget-container">
																<div class="elementor-button-wrapper">
																	<a class="elementor-button elementor-button-link elementor-size-sm"
																	   href="https://demos.reytheme.com/tokyo/new-arrivals/">
						<span class="elementor-button-content-wrapper">
									<span class="elementor-button-text">SHOP ALL</span>
					</span>
																	</a>
																</div>
															</div>
														</div>
														<div
															class="pg-skin-basic elementor-element elementor-element-6de47e0 elementor-widget elementor-widget-reycore-product-grid"
															data-element_type="widget"
															data-id="6de47e0"
															data-lazy-load="{&quot;element_id&quot;:&quot;6de47e0&quot;,&quot;skin&quot;:&quot;carousel&quot;,&quot;trigger&quot;:&quot;scroll&quot;,&quot;qid&quot;:6,&quot;pid&quot;:6,&quot;options&quot;:{&quot;prevent_ba_content&quot;:&quot;yes&quot;,&quot;prevent_stretched&quot;:&quot;yes&quot;},&quot;cache&quot;:true}"
															data-widget_type="reycore-product-grid.carousel">
															<div class="elementor-widget-container">
																<div
																	class="__placeholder-wrapper placeholder_products products">
																	<div class="__placeholders "
																		 style="--cols: 2; --cols-tablet: 2; --cols-mobile: 2;">
																		<div class="__placeholder-item">
																			<div class="__placeholder-thumb"></div>
																			<div class="__placeholder-title"></div>
																			<div class="__placeholder-subtitle"></div>
																		</div>
																		<div class="__placeholder-item">
																			<div class="__placeholder-thumb"></div>
																			<div class="__placeholder-title"></div>
																			<div class="__placeholder-subtitle"></div>
																		</div>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
												<div
													class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-32b9597"
													data-element_type="column" data-id="32b9597">
													<div
														class="elementor-column-wrap--32b9597 elementor-widget-wrap elementor-element-populated">
														<div
															class="elementor-element elementor-element-2cead56 elementor-widget elementor-widget-heading"
															data-element_type="widget" data-id="2cead56"
															data-widget_type="heading.default">
															<div class="elementor-widget-container">
																<h4 class="elementor-heading-title elementor-size-default">
																	GET 10% OFF</h4></div>
														</div>
														<div
															class="elementor-element elementor-element-0a74df7 elementor-widget elementor-widget-text-editor"
															data-element_type="widget" data-id="0a74df7"
															data-widget_type="text-editor.default">
															<div class="elementor-widget-container">
																<p>Get 10% off your first purchase by joining our
																	mailing list, <br/>and receive some of the best
																	deals possible.</p></div>
														</div>
														<div
															class="elementor-element elementor-element-26167c0 --btn-block-yes elementor-widget elementor-widget-reycore-newsletter"
															data-element_type="widget" data-id="26167c0"
															data-widget_type="reycore-newsletter.default">
															<div class="elementor-widget-container">

																<div
																	class="rey-element rey-newsletterForm rey-nlForm--inline-basic">
																	<form class="mc4wp-form mc4wp-form-102"
																		  data-id="102"
																		  data-name="Newsletter form" id="mc4wp-form-1"
																		  method="post">
																		<div class="mc4wp-form-fields"><p>
																				<input name="EMAIL"
																					   placeholder="email address"
																					   required
																					   type="email"/>
																			</p>

																			<p>
																				<input type="submit" value="JOIN NOW"/>
																			</p></div>
																		<label style="display: none !important;">Leave
																			this field empty if you're human: <input
																				autocomplete="off"
																				name="_mc4wp_honeypot"
																				tabindex="-1" type="text"
																				value=""/></label><input
																			name="_mc4wp_timestamp" type="hidden"
																			value="1734326235"/><input
																			name="_mc4wp_form_id"
																			type="hidden"
																			value="102"/><input
																			name="_mc4wp_form_element_id" type="hidden"
																			value="mc4wp-form-1"/>
																		<div class="mc4wp-response"></div>
																	</form><!-- / Mailchimp for WordPress Plugin -->
																</div>
															</div>
														</div>
													</div>
												</div>

												<!-- ######### Start Social media ########## -->
												<div
													class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-b31b3b9"
													data-element_type="column" data-id="b31b3b9">
													<div
														class="elementor-column-wrap--b31b3b9 elementor-widget-wrap elementor-element-populated">
														<div
															class="elementor-element elementor-element-6c6dde8 elementor-widget__width-auto elementor-widget elementor-widget-heading"
															data-element_type="widget" data-id="6c6dde8"
															data-widget_type="heading.default">
															<div class="elementor-widget-container">
																<h4 class="elementor-heading-title elementor-size-default">
																	FOLLOW US</h4></div>
														</div>
														<div
															class="elementor-element elementor-element-fc164d9 elementor-widget__width-auto elementor-widget-divider--view-line elementor-widget elementor-widget-divider"
															data-element_type="widget" data-id="fc164d9"
															data-widget_type="divider.default">
															<div class="elementor-widget-container">
																<div class="elementor-divider">
			<span class="elementor-divider-separator">
						</span>
																</div>
															</div>
														</div>
														<div
															class="elementor-element elementor-element-118c310 elementor-widget__width-auto --il--left elementor-shape-rounded elementor-grid-0 e-grid-align-center elementor-widget elementor-widget-social-icons"
															data-element_type="widget" data-id="118c310"
															data-widget_type="social-icons.default">
															<div class="elementor-widget-container">
																<div
																	class="elementor-social-icons-wrapper elementor-grid">
							<span class="elementor-grid-item">
					<a class="elementor-icon elementor-social-icon elementor-social-icon-facebook-f elementor-repeater-item-22ff633"
					   href="#" target="_blank">
						<span class="elementor-screen-only">Facebook-f</span>
						<svg class="e-font-icon-svg e-fab-facebook-f" viewBox="0 0 320 512"
							 xmlns="http://www.w3.org/2000/svg"><path
								d="M279.14 288l14.22-92.66h-88.91v-60.13c0-25.35 12.42-50.06 52.24-50.06h40.42V6.26S260.43 0 225.36 0c-73.22 0-121.08 44.38-121.08 124.72v70.62H22.89V288h81.39v224h100.17V288z"></path></svg>					</a>
				</span>
																	<span class="elementor-grid-item">
					<a class="elementor-icon elementor-social-icon elementor-social-icon-instagram elementor-repeater-item-63b898b"
					   href="#" target="_blank">
						<span class="elementor-screen-only">Instagram</span>
						<svg class="e-font-icon-svg e-fab-instagram" viewBox="0 0 448 512"
							 xmlns="http://www.w3.org/2000/svg"><path
								d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z"></path></svg>					</a>
				</span>
																	<span class="elementor-grid-item">
					<a class="elementor-icon elementor-social-icon elementor-social-icon-pinterest elementor-repeater-item-232da2c"
					   href="#" target="_blank">
						<span class="elementor-screen-only">Pinterest</span>
						<svg class="e-font-icon-svg e-fab-pinterest" viewBox="0 0 496 512"
							 xmlns="http://www.w3.org/2000/svg"><path
								d="M496 256c0 137-111 248-248 248-25.6 0-50.2-3.9-73.4-11.1 10.1-16.5 25.2-43.5 30.8-65 3-11.6 15.4-59 15.4-59 8.1 15.4 31.7 28.5 56.8 28.5 74.8 0 128.7-68.8 128.7-154.3 0-81.9-66.9-143.2-152.9-143.2-107 0-163.9 71.8-163.9 150.1 0 36.4 19.4 81.7 50.3 96.1 4.7 2.2 7.2 1.2 8.3-3.3.8-3.4 5-20.3 6.9-28.1.6-2.5.3-4.7-1.7-7.1-10.1-12.5-18.3-35.3-18.3-56.6 0-54.7 41.4-107.6 112-107.6 60.9 0 103.6 41.5 103.6 100.9 0 67.1-33.9 113.6-78 113.6-24.3 0-42.6-20.1-36.7-44.8 7-29.5 20.5-61.3 20.5-82.6 0-19-10.2-34.9-31.4-34.9-24.9 0-44.9 25.7-44.9 60.2 0 22 7.4 36.8 7.4 36.8s-24.5 103.8-29 123.2c-5 21.4-3 51.6-.9 71.2C65.4 450.9 0 361.1 0 256 0 119 111 8 248 8s248 111 248 248z"></path></svg>					</a>
				</span>
																</div>
															</div>
														</div>
													</div>
												</div>

												<!-- ######### End Social media ########## -->
											</div>
										</section>
									</div>
								</div>

								<!-- ######### End left side content ########## -->
								<div
									class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-030f65d"
									data-element_type="column" data-id="030f65d">
									<div
										class="elementor-column-wrap--030f65d elementor-widget-wrap elementor-element-populated">
										<div
											class="elementor-element elementor-element-ba71935 elementor-widget elementor-widget-reycore-cover-panels"
											data-element_type="widget" data-id="ba71935"
											data-widget_type="reycore-cover-panels.default">
											<div class="elementor-widget-container">

												<div class="rey-coverPanels --no-bg">

													<div class="cPanels-loadingBg cPanels-abs"></div>
													<div class="cPanels-slideBgWrapper cPanels-abs">
														<div
															class="cPanels-slideBg cPanels-abs elementor-repeater-item-a99de87"></div>
														<div
															class="cPanels-slideBg cPanels-abs elementor-repeater-item-86e99e4"></div>
														<div
															class="cPanels-slideBg cPanels-abs elementor-repeater-item-9d32ca1"></div>
													</div>
													<!--  Start Women's cPanels-slide -->
													<div
														class="cPanels-slide  elementor-repeater-item-86e99e4 cPanels-slide--2"
														data-index="1">

														<div class="cPanels-mobileImg">
															<img alt="" class=""
																 data-lazy-sizes="(max-width: 300px) 100vw, 300px"
																 data-lazy-src="/babui/assets/client-view/image/Hussain-rehar1536x1198.jpg"
																 data-lazy-srcset="/babui/assets/client-view/image/Hussain-rehar1536x1198.jpg"
																 decoding="async"
																 height="234"
																 src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20300%20234'%3E%3C/svg%3E"
																 width="300"/>
															<noscript><img alt="" class="" decoding="async"
																		   height="234"
																		   sizes="(max-width: 300px) 100vw, 300px"
																		   src="/babui/assets/client-view/image/Hussain-rehar1536x1198.jpg"
																		   srcset="/babui/assets/client-view/image/Hussain-rehar1536x1198.jpg"
																		   width="300"/>
															</noscript>
														</div>

														<div class="cPanels-hoverBg cPanels-hoverBg--1"></div>
														<div class="cPanels-hoverBg cPanels-hoverBg--2"></div>

														<div class="cPanels-active cPanels-abs">
															<div class="cPanels-activeBg cPanels-abs"></div>
															<h2 class="cPanels-title">Women's</h2>
															<div class="cPanels-btn">

																<a class="btn btn-line-active"
																   href="https://demos.reytheme.com/tokyo/shop/">
																	BROWSE ALL </a>
															</div>
														</div>

														<div class="cPanels-hover cPanels-abs">

															<ul class="cPanels-menu" data-menu-qid="6"
																id="menu-quick-menu">
																<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-937 o-id-613"
																	id="menu-item-937">
																	<a href="https://demos.reytheme.com/tokyo/shop/"><span>Shirts</span></a>
																</li>
																<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-938 o-id-613"
																	id="menu-item-938">
																	<a href="https://demos.reytheme.com/tokyo/shop/"><span>Fashion Hoodies &#038; Sweatshirts</span></a>
																</li>
																<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-939 o-id-613"
																	id="menu-item-939">
																	<a href="https://demos.reytheme.com/tokyo/shop/"><span>Jackets &#038; Coats</span></a>
																</li>
																<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-943 o-id-613"
																	id="menu-item-943">
																	<a href="https://demos.reytheme.com/tokyo/shop/"><span>Jeans</span></a>
																</li>
																<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-940 o-id-613"
																	id="menu-item-940">
																	<a href="https://demos.reytheme.com/tokyo/shop/"><span>Pants</span></a>
																</li>
																<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-941 o-id-613"
																	id="menu-item-941">
																	<a href="https://demos.reytheme.com/tokyo/shop/"><span>Suits &#038; Sport Coats</span></a>
																</li>
																<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-942 o-id-613"
																	id="menu-item-942">
																	<a href="https://demos.reytheme.com/tokyo/shop/"><span>Active</span></a>
																</li>
															</ul>
															<h2 class="cPanels-title">Women's</h2>
															<div class="cPanels-btn">

																<a class="btn btn-line-active"
																   href="https://demos.reytheme.com/tokyo/shop/">
																	BROWSE ALL </a>
															</div>
														</div>
													</div>
													<!--  End Women's cPanels-slide -->

													<!--  Start Men's cPanels-slide -->

													<div
														class="cPanels-slide  elementor-repeater-item-a99de87 cPanels-slide--1"
														data-index="0">

														<div class="cPanels-mobileImg">
															<img alt="" class=""
																 data-lazy-sizes="(max-width: 300px) 100vw, 300px"
																 data-lazy-src="https://demos.reytheme.com/tokyo/wp-content/uploads/sites/6/2019/05/img-1-300x234.jpg"
																 data-lazy-srcset="https://demos.reytheme.com/tokyo/wp-content/uploads/sites/6/2019/05/img-1-300x234.jpg 300w, https://demos.reytheme.com/tokyo/wp-content/uploads/sites/6/2019/05/img-1-1024x799.jpg 1024w, https://demos.reytheme.com/tokyo/wp-content/uploads/sites/6/2019/05/img-1-768x599.jpg 768w, https://demos.reytheme.com/tokyo/wp-content/uploads/sites/6/2019/05/img-1-1536x1198.jpg 1536w, https://demos.reytheme.com/tokyo/wp-content/uploads/sites/6/2019/05/img-1-800x624.jpg 800w, https://demos.reytheme.com/tokyo/wp-content/uploads/sites/6/2019/05/img-1-942x735.jpg 942w, https://demos.reytheme.com/tokyo/wp-content/uploads/sites/6/2019/05/img-1.jpg 1895w"
																 decoding="async" fetchpriority="high"
																 height="234"
																 src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20300%20234'%3E%3C/svg%3E"
																 width="300"/>
															<noscript><img alt="" class=""
																		   decoding="async" fetchpriority="high"
																		   height="234"
																		   sizes="(max-width: 300px) 100vw, 300px"
																		   src="https://demos.reytheme.com/tokyo/wp-content/uploads/sites/6/2019/05/img-1-300x234.jpg"
																		   srcset="https://demos.reytheme.com/tokyo/wp-content/uploads/sites/6/2019/05/img-1-300x234.jpg 300w, https://demos.reytheme.com/tokyo/wp-content/uploads/sites/6/2019/05/img-1-1024x799.jpg 1024w, https://demos.reytheme.com/tokyo/wp-content/uploads/sites/6/2019/05/img-1-768x599.jpg 768w, https://demos.reytheme.com/tokyo/wp-content/uploads/sites/6/2019/05/img-1-1536x1198.jpg 1536w, https://demos.reytheme.com/tokyo/wp-content/uploads/sites/6/2019/05/img-1-800x624.jpg 800w, https://demos.reytheme.com/tokyo/wp-content/uploads/sites/6/2019/05/img-1-942x735.jpg 942w, https://demos.reytheme.com/tokyo/wp-content/uploads/sites/6/2019/05/img-1.jpg 1895w"
																		   width="300"/>
															</noscript>
														</div>

														<div class="cPanels-hoverBg cPanels-hoverBg--1"></div>
														<div class="cPanels-hoverBg cPanels-hoverBg--2"></div>

														<div class="cPanels-active cPanels-abs">
															<div class="cPanels-activeBg cPanels-abs"></div>
															<h2 class="cPanels-title">Men's</h2>
															<div class="cPanels-btn">

																<a class="btn btn-line-active"
																   href="https://demos.reytheme.com/tokyo/shop/">
																	BROWSE ALL </a>
															</div>
														</div>

														<div class="cPanels-hover cPanels-abs">

															<ul class="cPanels-menu" data-menu-qid="6"
																id="menu-quick-menu">
																<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-937 o-id-613"
																	id="menu-item-937">
																	<a href="https://demos.reytheme.com/tokyo/shop/"><span>Shirts</span></a>
																</li>
																<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-938 o-id-613"
																	id="menu-item-938">
																	<a href="https://demos.reytheme.com/tokyo/shop/"><span>Fashion Hoodies &#038; Sweatshirts</span></a>
																</li>
																<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-939 o-id-613"
																	id="menu-item-939">
																	<a href="https://demos.reytheme.com/tokyo/shop/"><span>Jackets &#038; Coats</span></a>
																</li>
																<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-943 o-id-613"
																	id="menu-item-943">
																	<a href="https://demos.reytheme.com/tokyo/shop/"><span>Jeans</span></a>
																</li>
																<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-940 o-id-613"
																	id="menu-item-940">
																	<a href="https://demos.reytheme.com/tokyo/shop/"><span>Pants</span></a>
																</li>
																<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-941 o-id-613"
																	id="menu-item-941">
																	<a href="https://demos.reytheme.com/tokyo/shop/"><span>Suits &#038; Sport Coats</span></a>
																</li>
																<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-942 o-id-613"
																	id="menu-item-942">
																	<a href="https://demos.reytheme.com/tokyo/shop/"><span>Active</span></a>
																</li>
															</ul>
															<h2 class="cPanels-title">Men's</h2>
															<div class="cPanels-btn">

																<a class="btn btn-line-active"
																   href="https://demos.reytheme.com/tokyo/shop/">
																	BROWSE ALL </a>
															</div>
														</div>
													</div>
													<!--  End Men's cPanels-slide -->


													<!--  Start Child's cPanels-slide -->
													<div
														class="cPanels-slide  elementor-repeater-item-9d32ca1 cPanels-slide--3"
														data-index="2">

														<div class="cPanels-mobileImg">
															<img alt="" class=""
																 data-lazy-sizes="(max-width: 300px) 100vw, 300px"
																 data-lazy-src="https://demos.reytheme.com/tokyo/wp-content/uploads/sites/6/2019/05/img-3-300x234.jpg"
																 data-lazy-srcset="https://demos.reytheme.com/tokyo/wp-content/uploads/sites/6/2019/05/img-3-300x234.jpg 300w, https://demos.reytheme.com/tokyo/wp-content/uploads/sites/6/2019/05/img-3-1024x799.jpg 1024w, https://demos.reytheme.com/tokyo/wp-content/uploads/sites/6/2019/05/img-3-768x599.jpg 768w, https://demos.reytheme.com/tokyo/wp-content/uploads/sites/6/2019/05/img-3-1536x1198.jpg 1536w, https://demos.reytheme.com/tokyo/wp-content/uploads/sites/6/2019/05/img-3-800x624.jpg 800w, https://demos.reytheme.com/tokyo/wp-content/uploads/sites/6/2019/05/img-3-942x735.jpg 942w, https://demos.reytheme.com/tokyo/wp-content/uploads/sites/6/2019/05/img-3.jpg 1895w"
																 decoding="async"
																 height="234"
																 src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20300%20234'%3E%3C/svg%3E"
																 width="300"/>
															<noscript><img alt="" class="" decoding="async"
																		   height="234"
																		   sizes="(max-width: 300px) 100vw, 300px"
																		   src="https://demos.reytheme.com/tokyo/wp-content/uploads/sites/6/2019/05/img-3-300x234.jpg"
																		   srcset="https://demos.reytheme.com/tokyo/wp-content/uploads/sites/6/2019/05/img-3-300x234.jpg 300w, https://demos.reytheme.com/tokyo/wp-content/uploads/sites/6/2019/05/img-3-1024x799.jpg 1024w, https://demos.reytheme.com/tokyo/wp-content/uploads/sites/6/2019/05/img-3-768x599.jpg 768w, https://demos.reytheme.com/tokyo/wp-content/uploads/sites/6/2019/05/img-3-1536x1198.jpg 1536w, https://demos.reytheme.com/tokyo/wp-content/uploads/sites/6/2019/05/img-3-800x624.jpg 800w, https://demos.reytheme.com/tokyo/wp-content/uploads/sites/6/2019/05/img-3-942x735.jpg 942w, https://demos.reytheme.com/tokyo/wp-content/uploads/sites/6/2019/05/img-3.jpg 1895w"
																		   width="300"/>
															</noscript>
														</div>

														<div class="cPanels-hoverBg cPanels-hoverBg--1"></div>
														<div class="cPanels-hoverBg cPanels-hoverBg--2"></div>

														<div class="cPanels-active cPanels-abs">
															<div class="cPanels-activeBg cPanels-abs"></div>
															<h2 class="cPanels-title">Kid's</h2>
															<div class="cPanels-btn">

																<a class="btn btn-line-active"
																   href="https://demos.reytheme.com/tokyo/shop/">
																	BROWSE ALL </a>
															</div>
														</div>

														<div class="cPanels-hover cPanels-abs">

															<ul class="cPanels-menu" data-menu-qid="6"
																id="menu-quick-menu">
																<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-937 o-id-613"
																	id="menu-item-937">
																	<a href="https://demos.reytheme.com/tokyo/shop/"><span>Shirts</span></a>
																</li>
																<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-938 o-id-613"
																	id="menu-item-938">
																	<a href="https://demos.reytheme.com/tokyo/shop/"><span>Fashion Hoodies &#038; Sweatshirts</span></a>
																</li>
																<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-939 o-id-613"
																	id="menu-item-939">
																	<a href="https://demos.reytheme.com/tokyo/shop/"><span>Jackets &#038; Coats</span></a>
																</li>
																<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-943 o-id-613"
																	id="menu-item-943">
																	<a href="https://demos.reytheme.com/tokyo/shop/"><span>Jeans</span></a>
																</li>
																<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-940 o-id-613"
																	id="menu-item-940">
																	<a href="https://demos.reytheme.com/tokyo/shop/"><span>Pants</span></a>
																</li>
																<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-941 o-id-613"
																	id="menu-item-941">
																	<a href="https://demos.reytheme.com/tokyo/shop/"><span>Suits &#038; Sport Coats</span></a>
																</li>
																<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-942 o-id-613"
																	id="menu-item-942">
																	<a href="https://demos.reytheme.com/tokyo/shop/"><span>Active</span></a>
																</li>
															</ul>
															<h2 class="cPanels-title">Kid's</h2>
															<div class="cPanels-btn">

																<a class="btn btn-line-active"
																   href="https://demos.reytheme.com/tokyo/shop/">
																	BROWSE ALL </a>
															</div>
														</div>
													</div>
													<!--  End child's cPanels-slide -->
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</section>
					</div>

				</main>
				<!-- .rey-siteMain -->

			</div>


		</div>
		<!-- .rey-siteContainer -->

	</div>


	<!-- ################# -->


	<div id="content" class="rey-siteContent --tpl-template-builder-php">
		<div class="rey-siteContainer rey-pbTemplate" data-page-el-selector="body.elementor-page-2006">
			<div class="rey-siteRow">
				<main id="main" class="rey-siteMain --filter-panel">
					<div data-elementor-type="wp-page" data-elementor-id="2006"
						 class="elementor elementor-2006 --will-colorize">
						<div class="__colorize-bg" data-section-id="028f717" style="--body-bg-color: #272C31;"></div>
						<!--############  Start Of second Section  ############ -->
						<section
							class="elementor-section elementor-top-section elementor-element elementor-element-0742d50 rey-section-stretched elementor-section-full_width rey-flexWrap elementor-section-height-default elementor-section-height-default"
							data-id="0742d50" data-element_type="section"
							data-settings="{&quot;shape_divider_bottom&quot;:&quot;tilt&quot;}">
							<div class="elementor-shape elementor-shape-bottom" data-negative="false">
								<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 100"
									 preserveAspectRatio="none">
									<path class="elementor-shape-fill" d="M0,6V0h1000v100L0,6z"></path>
								</svg>
							</div>
							<div class="elementor-container elementor-column-gap-custom">

								<!-- ############  Second Section first column ############ -->
								<div
									class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-8096c33"
									data-id="8096c33" data-element_type="column">
									<div
										class="elementor-column-wrap--8096c33 elementor-widget-wrap elementor-element-populated">
										<div
											class="elementor-element elementor-element-aec60b3 u-ov-hidden elementor-widget elementor-widget-reycore-basic-slider"
											data-id="aec60b3" data-element_type="widget"
											data-widget_type="reycore-basic-slider.default">
											<div class="elementor-widget-container">
												<div data-slider-carousel-id="slider-623d84be78fe3"
													 data-carousel-settings="{&quot;direction&quot;:&quot;ltr&quot;,&quot;infinite&quot;:true,&quot;autoplay&quot;:true,&quot;interval&quot;:10000,&quot;pause_on_hover&quot;:true,&quot;transition&quot;:&quot;slide&quot;,&quot;speed&quot;:500,&quot;uniqueID&quot;:&quot;slider-623d84be78fe3&quot;,&quot;targetSync&quot;:&quot;&quot;,&quot;customArrows&quot;:false,&quot;pagination&quot;:true}"
													 data-c-anim="top"
													 class="splide rey-bSlider --source-custom slider-623d84be78fe3 rey-sliderComp-nav --pause-hover splide--slide splide--loop splide--ltr splide--draggable is-active is-overflow is-initialized rey-inView"
													 data-loaded="" id="splide01" role="region"
													 aria-roledescription="carousel">
													<div
														class="splide__track splide__track--loop splide__track--ltr splide__track--draggable"
														id="splide01-track" aria-live="off" aria-atomic="true"
														aria-busy="false">
														<div class="splide__list __slides" id="splide01-list"
															 role="presentation"
															 style="transform: translateX(-1228px);">
															<a class="splide__slide __slide elementor-repeater-item-a538392 splide__slide--clone is-active"
															   href="https://demos.reytheme.com/san-francisco/#"
															   id="splide01-clone01" role="tabpanel"
															   aria-roledescription="slide" aria-label="1 of 2"
															   aria-hidden="true">
																<img fetchpriority="high" decoding="async" width="1024"
																	 height="836"
																	 src="./San Francisco – Rey Theme_files/Rectangle-56-1024x836.jpg"
																	 class="__media" alt=""
																	 srcset="https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/02/Rectangle-56-1024x836.jpg 1024w, https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/02/Rectangle-56-300x245.jpg 300w, https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/02/Rectangle-56-768x627.jpg 768w, https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/02/Rectangle-56-330x270.jpg 330w, https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/02/Rectangle-56-600x490.jpg 600w, https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/02/Rectangle-56.jpg 1200w"
																	 sizes="(max-width: 1024px) 100vw, 1024px">
																<div class="__caption">
																	<h2 class="__captionEl __title">Innovative, wireless
																		home speaker</h2>
																	<div class="__captionEl __button btn btn-dash-line">
																		Discover
																	</div>
																</div>
															</a>
															<a class="splide__slide __slide elementor-repeater-item-d766825 splide__slide--clone is-prev"
															   href="https://demos.reytheme.com/san-francisco/#"
															   id="splide01-clone02" role="tabpanel"
															   aria-roledescription="slide" aria-label="2 of 2"
															   aria-hidden="true">
																<img fetchpriority="high" decoding="async" width="936"
																	 height="1024"
																	 src="./San Francisco – Rey Theme_files/2-936x1024.jpg"
																	 class="__media" alt=""
																	 srcset="https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/02/2-936x1024.jpg 936w, https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/02/2-274x300.jpg 274w, https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/02/2-768x840.jpg 768w, https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/02/2-330x361.jpg 330w, https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/02/2-600x656.jpg 600w, https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/02/2.jpg 1024w"
																	 sizes="(max-width: 936px) 100vw, 936px">
																<div class="__caption">
																	<h2 class="__captionEl __title">Outstanding <br>performance
																	</h2>
																	<div class="__captionEl __button btn btn-dash-line">
																		EXPLORE
																	</div>
																</div>
															</a>
															<a class="splide__slide __slide elementor-repeater-item-a538392 is-active is-visible"
															   href="https://demos.reytheme.com/san-francisco/#"
															   id="splide01-slide01" role="tabpanel"
															   aria-roledescription="slide" aria-label="1 of 2">
																<img fetchpriority="high" decoding="async" width="1024"
																	 height="836"
																	 src="./San Francisco – Rey Theme_files/Rectangle-56-1024x836.jpg"
																	 class="__media" alt=""
																	 srcset="https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/02/Rectangle-56-1024x836.jpg 1024w, https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/02/Rectangle-56-300x245.jpg 300w, https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/02/Rectangle-56-768x627.jpg 768w, https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/02/Rectangle-56-330x270.jpg 330w, https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/02/Rectangle-56-600x490.jpg 600w, https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/02/Rectangle-56.jpg 1200w"
																	 sizes="(max-width: 1024px) 100vw, 1024px">
																<div class="__caption">
																	<h2 class="__captionEl __title">Innovative, wireless
																		home speaker</h2>
																	<div class="__captionEl __button btn btn-dash-line">
																		Discover
																	</div>
																</div>
															</a>
															<a class="splide__slide __slide elementor-repeater-item-d766825 is-next"
															   href="https://demos.reytheme.com/san-francisco/#"
															   id="splide01-slide02" role="tabpanel"
															   aria-roledescription="slide" aria-label="2 of 2"
															   aria-hidden="true">
																<img fetchpriority="high" decoding="async" width="936"
																	 height="1024"
																	 src="./San Francisco – Rey Theme_files/2-936x1024.jpg"
																	 class="__media" alt=""
																	 srcset="https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/02/2-936x1024.jpg 936w, https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/02/2-274x300.jpg 274w, https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/02/2-768x840.jpg 768w, https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/02/2-330x361.jpg 330w, https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/02/2-600x656.jpg 600w, https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/02/2.jpg 1024w"
																	 sizes="(max-width: 936px) 100vw, 936px">
																<div class="__caption">
																	<h2 class="__captionEl __title">Outstanding <br>performance
																	</h2>
																	<div class="__captionEl __button btn btn-dash-line">
																		EXPLORE
																	</div>
																</div>
															</a>
															<a class="splide__slide __slide elementor-repeater-item-a538392 splide__slide--clone is-active"
															   href="https://demos.reytheme.com/san-francisco/#"
															   id="splide01-clone03" role="tabpanel"
															   aria-roledescription="slide" aria-label="1 of 2"
															   aria-hidden="true">
																<img fetchpriority="high" decoding="async" width="1024"
																	 height="836"
																	 src="./San Francisco – Rey Theme_files/Rectangle-56-1024x836.jpg"
																	 class="__media" alt=""
																	 srcset="https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/02/Rectangle-56-1024x836.jpg 1024w, https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/02/Rectangle-56-300x245.jpg 300w, https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/02/Rectangle-56-768x627.jpg 768w, https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/02/Rectangle-56-330x270.jpg 330w, https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/02/Rectangle-56-600x490.jpg 600w, https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/02/Rectangle-56.jpg 1200w"
																	 sizes="(max-width: 1024px) 100vw, 1024px">
																<div class="__caption">
																	<h2 class="__captionEl __title">Innovative, wireless
																		home speaker</h2>
																	<div class="__captionEl __button btn btn-dash-line">
																		Discover
																	</div>
																</div>
															</a>
															<a class="splide__slide __slide elementor-repeater-item-d766825 splide__slide--clone"
															   href="https://demos.reytheme.com/san-francisco/#"
															   id="splide01-clone04" role="tabpanel"
															   aria-roledescription="slide" aria-label="2 of 2"
															   aria-hidden="true">
																<img fetchpriority="high" decoding="async" width="936"
																	 height="1024"
																	 src="./San Francisco – Rey Theme_files/2-936x1024.jpg"
																	 class="__media" alt=""
																	 srcset="https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/02/2-936x1024.jpg 936w, https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/02/2-274x300.jpg 274w, https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/02/2-768x840.jpg 768w, https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/02/2-330x361.jpg 330w, https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/02/2-600x656.jpg 600w, https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/02/2.jpg 1024w"
																	 sizes="(max-width: 936px) 100vw, 936px">
																<div class="__caption">
																	<h2 class="__captionEl __title">Outstanding <br>performance
																	</h2>
																	<div class="__captionEl __button btn btn-dash-line">
																		EXPLORE
																	</div>
																</div>
															</a>
														</div>
													</div>
													<ul class="splide__pagination rey-sliderDots pagination-aec60b3-2006 --autoplay splide__pagination--ltr"
														data-position-y="bottom" data-position-x="right"
														data-arrange="inside" data-style="bars" data-lazy-hidden=""
														role="tablist" aria-label="Select a slide to show">
														<li role="presentation">
															<button class="splide__pagination__page is-active"
																	type="button" role="tab"
																	aria-controls="splide01-slide01"
																	aria-label="Go to slide 1"
																	aria-selected="true"></button>
														</li>
														<li role="presentation">
															<button class="splide__pagination__page" type="button"
																	role="tab" aria-controls="splide01-slide02"
																	aria-label="Go to slide 2" tabindex="-1"></button>
														</li>
													</ul>
												</div>
											</div>
										</div>
									</div>
								</div>
								<!-- ############  Second Section first column ############ -->
								<!-- ############  Second Section 2nd column ############ -->
								<div
									class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-ed65f59 rey-colbg--classic column-flex-dir--vertical"
									data-id="ed65f59" data-element_type="column"
									data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
									<div
										class="elementor-column-wrap--ed65f59 elementor-widget-wrap elementor-element-populated">
										<div
											class="elementor-element elementor-element-e00a363 elementor-widget elementor-widget-heading colorized-element"
											data-id="e00a363" data-element_type="widget"
											data-widget_type="heading.default">
											<div class="elementor-widget-container">
												<h6 class="elementor-heading-title elementor-size-default">Apple watch 8
													series</h6>
											</div>
										</div>
										<div
											class="elementor-element elementor-element-d00b05e elementor-widget elementor-widget-heading colorized-element"
											data-id="d00b05e" data-element_type="widget"
											data-widget_type="heading.default">
											<div class="elementor-widget-container">
												<h3 class="elementor-heading-title elementor-size-default">The future of
													health is on your wrist</h3>
											</div>
										</div>
										<div
											class="elementor-element elementor-element-17adc9a elementor-button-dashed --large elementor-align-right m-auto--top elementor-widget elementor-widget-button colorized-element"
											data-id="17adc9a" data-element_type="widget"
											data-widget_type="button.default">
											<div class="elementor-widget-container">
												<div class="elementor-button-wrapper">
													<a class="elementor-button elementor-button-link elementor-size-sm"
													   href="https://demos.reytheme.com/san-francisco/#">
                                             <span class="elementor-button-content-wrapper">
                                             <span class="elementor-button-text">Discover</span>
                                             </span>
													</a>
												</div>
											</div>
										</div>
									</div>
								</div>

								<!-- ############  End Second Section 2nd column ############ -->
								<!-- ############  Second Section 3 column ############ -->
								<div
									class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-bba438a"
									data-id="bba438a" data-element_type="column">
									<div
										class="elementor-column-wrap--bba438a elementor-widget-wrap elementor-element-populated">
										<section
											class="elementor-section elementor-inner-section elementor-element elementor-element-321f698 rey-flexWrap elementor-section-boxed elementor-section-height-default elementor-section-height-default"
											data-id="321f698" data-element_type="section">
											<div class="elementor-container elementor-column-gap-default">
												<div
													class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-3f2a729 rey-colbg--classic u-ov-hidden"
													data-id="3f2a729" data-element_type="column"
													data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
													<div
														class="elementor-column-wrap--3f2a729 elementor-widget-wrap elementor-element-populated">
														<div
															class="elementor-element elementor-element-263180c elementor-heading--vertical elementor-widget__width-auto elementor-absolute elementor-widget elementor-widget-heading colorized-element"
															data-id="263180c" data-element_type="widget"
															data-settings="{&quot;_position&quot;:&quot;absolute&quot;}"
															data-widget_type="heading.default">
															<div class="elementor-widget-container">
																<span
																	class="elementor-heading-title elementor-size-default">5% OFF</span>
															</div>
														</div>
														<div
															class="elementor-element elementor-element-cebb743 elementor-widget elementor-widget-heading colorized-element"
															data-id="cebb743" data-element_type="widget"
															data-widget_type="heading.default">
															<div class="elementor-widget-container">
																<h6 class="elementor-heading-title elementor-size-default">
																	Don't miss</h6>
															</div>
														</div>
														<div
															class="elementor-element elementor-element-51bf09d elementor-widget elementor-widget-heading colorized-element"
															data-id="51bf09d" data-element_type="widget"
															data-widget_type="heading.default">
															<div class="elementor-widget-container">
																<h4 class="elementor-heading-title elementor-size-default">
																	Get 5% discount by subscribing to our
																	newsletter</h4>
															</div>
														</div>
														<div
															class="elementor-element elementor-element-7e20766 --btn-block-yes elementor-widget elementor-widget-reycore-newsletter"
															data-id="7e20766" data-element_type="widget"
															data-widget_type="reycore-newsletter.default">
															<div class="elementor-widget-container">
																<div
																	class="rey-element rey-newsletterForm rey-nlForm--inline-basic">
																	<script
																		src="data:text/javascript;base64,KGZ1bmN0aW9uKCkgewoJd2luZG93Lm1jNHdwID0gd2luZG93Lm1jNHdwIHx8IHsKCQlsaXN0ZW5lcnM6IFtdLAoJCWZvcm1zOiB7CgkJCW9uOiBmdW5jdGlvbihldnQsIGNiKSB7CgkJCQl3aW5kb3cubWM0d3AubGlzdGVuZXJzLnB1c2goCgkJCQkJewoJCQkJCQlldmVudCAgIDogZXZ0LAoJCQkJCQljYWxsYmFjazogY2IKCQkJCQl9CgkJCQkpOwoJCQl9CgkJfQoJfQp9KSgpOwo="
																		data-rocket-status="executed">(function () {
																			window.mc4wp = window.mc4wp || {
																				listeners: [],
																				forms: {
																					on: function (evt, cb) {
																						window.mc4wp.listeners.push(
																							{
																								event: evt,
																								callback: cb
																							}
																						);
																					}
																				}
																			}
																		})();
																	</script>
																	<!-- Mailchimp for WordPress v4.9.19 - https://wordpress.org/plugins/mailchimp-for-wp/ -->
																	<form id="mc4wp-form-1"
																		  class="mc4wp-form mc4wp-form-212"
																		  method="post" data-id="212"
																		  data-name="Newsletter form">
																		<div class="mc4wp-form-fields">
																			<p>
																				<input type="email" name="EMAIL"
																					   placeholder="Your email address"
																					   required="">
																			</p>
																			<p>
																				<input type="submit" value="JOIN">
																			</p>
																		</div>
																		<label style="display: none !important;">Leave
																			this field empty if you're human: <input
																				type="text" name="_mc4wp_honeypot"
																				value="" tabindex="-1"
																				autocomplete="off"></label><input
																			type="hidden" name="_mc4wp_timestamp"
																			value="1734415340"><input type="hidden"
																									  name="_mc4wp_form_id"
																									  value="212"><input
																			type="hidden" name="_mc4wp_form_element_id"
																			value="mc4wp-form-1">
																		<div class="mc4wp-response"></div>
																	</form>
																	<!-- / Mailchimp for WordPress Plugin -->
																</div>
															</div>
														</div>
													</div>
												</div>
												<div
													class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-9258a93 rey-colbg--classic"
													data-id="9258a93" data-element_type="column"
													data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
													<div
														class="elementor-column-wrap--9258a93 elementor-widget-wrap elementor-element-populated">
														<div
															class="elementor-element elementor-element-323919e elementor-widget elementor-widget-heading colorized-element"
															data-id="323919e" data-element_type="widget"
															data-widget_type="heading.default">
															<div class="elementor-widget-container">
																<h6 class="elementor-heading-title elementor-size-default">
																	E8 3rd Gen</h6>
															</div>
														</div>
														<div
															class="elementor-element elementor-element-08af00c elementor-widget elementor-widget-heading colorized-element"
															data-id="08af00c" data-element_type="widget"
															data-widget_type="heading.default">
															<div class="elementor-widget-container">
																<h3 class="elementor-heading-title elementor-size-default">
																	With active noise cancelling</h3>
															</div>
														</div>
													</div>
												</div>
											</div>
										</section>
									</div>
								</div>
								<!-- ############ End Second Section 3 column ############ -->
							</div>
						</section>
						<!--############  End Of second Section  ############ -->

						<!-- ############  Start Third Section  ############ -->
						<section
							class="elementor-section elementor-top-section elementor-element elementor-element-5fe1785 rey-section-stretched rey-section-bg--classic elementor-section-boxed elementor-section-height-default elementor-section-height-default"
							data-id="5fe1785" data-element_type="section"
							data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
							<div class="elementor-container elementor-column-gap-default">
								<div
									class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-24215ef"
									data-id="24215ef" data-element_type="column">
									<div
										class="elementor-column-wrap--24215ef elementor-widget-wrap elementor-element-populated">
										<div
											class="elementor-element elementor-element-fed71cf elementor-position-left elementor-vertical-align-middle elementor-widget__width-auto elementor-view-default elementor-mobile-position-top elementor-widget elementor-widget-icon-box"
											data-id="fed71cf" data-element_type="widget"
											data-widget_type="icon-box.default">
											<div class="elementor-widget-container">
												<div class="elementor-icon-box-wrapper">
													<div class="elementor-icon-box-icon">
                                                <span class="elementor-icon elementor-animation-">
                                                   <svg xmlns="http://www.w3.org/2000/svg" width="128" height="128"
														viewBox="0 0 128 128" fill="none">
                                                      <path
														  d="M116.627 101.688L99.2097 70.0115C104.87 61.406 107.22 51.0416 105.827 40.837C104.434 30.6312 99.3894 21.2763 91.6299 14.5043C83.869 7.73115 73.9186 4 63.6174 4C53.317 4 43.3665 7.73115 35.6049 14.5043C27.8451 21.2763 22.8004 30.631 21.4074 40.837C20.013 51.0419 22.3646 61.4063 28.025 70.0115L10.5892 101.688C10.1888 102.411 9.98603 103.226 10.0007 104.053C10.0155 104.879 10.2477 105.687 10.6732 106.395C11.0704 107.121 11.662 107.721 12.3828 108.125C13.1036 108.531 13.9242 108.725 14.7501 108.688L30.3124 108.57L38.5408 121.783C39.4003 123.162 40.9081 123.999 42.5326 124H42.664C44.3325 123.954 45.8509 123.028 46.6568 121.566L63.6074 90.7484L80.5537 121.548C81.3586 123.009 82.878 123.935 84.5455 123.981H84.6769C86.3013 123.98 87.81 123.143 88.6697 121.764L96.8981 108.551L112.46 108.669H112.459C114.113 108.636 115.643 107.784 116.542 106.395C116.967 105.687 117.199 104.879 117.214 104.053C117.229 103.226 117.026 102.411 116.626 101.688L116.627 101.688ZM63.609 13.4862C72.4111 13.4862 80.8517 16.983 87.0751 23.2066C93.2984 29.4302 96.7955 37.8719 96.7955 46.6727C96.7955 55.4748 93.2987 63.9154 87.0751 70.1398C80.8515 76.3634 72.4109 79.8592 63.609 79.8592C54.8072 79.8592 46.3663 76.3634 40.143 70.1398C33.9194 63.9151 30.4225 55.4745 30.4225 46.6727C30.432 37.8748 33.932 29.4396 40.1535 23.2171C46.3749 16.9957 54.8101 13.4967 63.609 13.4862V13.4862ZM42.2855 109.986L36.91 101.357H36.9089C36.0347 99.9766 34.5143 99.1402 32.8803 99.1402L22.7122 99.2159L34.5279 77.7366C40.0515 82.9313 46.8645 86.5532 54.2606 88.2293L42.2855 109.986ZM94.3402 99.1591H94.3391C92.7084 99.1717 91.1933 100.005 90.3105 101.376L84.9339 109.967L72.9586 88.2094V88.2105C80.3547 86.5346 87.1676 82.9128 92.6913 77.7178L104.507 99.1971L94.3402 99.1591ZM46.4656 64.707C46.3111 66.3619 47.0413 67.9758 48.3863 68.953C49.7312 69.9302 51.4912 70.1246 53.018 69.4658L63.6094 64.8991L74.2009 69.4658C75.7276 70.1246 77.4877 69.9302 78.8326 68.953C80.1776 67.9758 80.9078 66.3619 80.7534 64.707L79.6805 53.2024L87.2878 44.5452H87.2868C88.3848 43.298 88.7431 41.5643 88.2303 39.9829C87.7176 38.4026 86.4084 37.2099 84.7881 36.8443L73.5379 34.3163L67.6581 24.3836C66.746 23.0439 65.2309 22.2412 63.6095 22.2412C61.9881 22.2412 60.4731 23.0439 59.561 24.3836L53.6822 34.3026L42.432 36.8306H42.431C40.8107 37.1952 39.5014 38.3889 38.9887 39.9692C38.476 41.5495 38.8343 43.2831 39.9323 44.5315L47.5385 53.2021L46.4656 64.707ZM57.7252 43.0766V43.0776C58.9892 42.7939 60.0809 42.0016 60.7429 40.8879L63.6093 36.0114L66.4756 40.8499C67.1376 41.9637 68.2293 42.756 69.4934 43.0397L74.9824 44.2732L71.2679 48.5098V48.5088C70.4126 49.4817 69.9944 50.7636 70.1142 52.054L70.6364 57.6514L65.4584 55.4249H65.4595C64.269 54.9111 62.9209 54.9111 61.7305 55.4249L56.5524 57.6514L57.0746 52.054H57.0757C57.1955 50.7637 56.7783 49.4818 55.922 48.5088L52.2075 44.2722L57.7252 43.0766Z"
														  fill="currentColor"></path>
                                                   </svg>
                                                </span>
													</div>
													<div class="elementor-icon-box-content">
														<h5 class="elementor-icon-box-title">
                                                   <span>
                                                   Exclusive Products						</span>
														</h5>
													</div>
												</div>
											</div>
										</div>
										<div
											class="elementor-element elementor-element-2b41c6d elementor-position-left elementor-vertical-align-middle elementor-widget__width-auto elementor-view-default elementor-mobile-position-top elementor-widget elementor-widget-icon-box"
											data-id="2b41c6d" data-element_type="widget"
											data-widget_type="icon-box.default">
											<div class="elementor-widget-container">
												<div class="elementor-icon-box-wrapper">
													<div class="elementor-icon-box-icon">
                                                <span class="elementor-icon elementor-animation-">
                                                   <svg xmlns="http://www.w3.org/2000/svg" width="128" height="128"
														viewBox="0 0 128 128" fill="none">
                                                      <path fill-rule="evenodd" clip-rule="evenodd"
															d="M100.597 4H28.1723C24.2493 4 20.7558 6.48284 19.4588 10.1896L9.29567 39.3035C9.10199 39.8062 9 40.3512 9 40.923V114.769C9 119.869 13.1312 124 18.2308 124H110.539C115.638 124 119.769 119.869 119.769 114.769V40.923C119.769 40.3502 119.667 39.8062 119.474 39.3035L109.311 10.1896C108.014 6.48387 104.52 4 100.597 4H100.597ZM110.539 45.5385V114.769H18.2308V45.5385H110.539ZM50.5385 64.0001H78.2309C80.7786 64.0001 82.8462 61.9324 82.8462 59.3847C82.8462 56.8369 80.7786 54.7693 78.2309 54.7693H50.5385C47.9908 54.7693 45.9231 56.8369 45.9231 59.3847C45.9231 61.9324 47.9908 64.0001 50.5385 64.0001ZM59.7693 13.2308V36.3077H20.1139L28.1723 13.2308H59.7693ZM69.0001 13.2308H100.596L108.654 36.3077H68.9988L69.0001 13.2308Z"
															fill="currentColor"></path>
                                                   </svg>
                                                </span>
													</div>
													<div class="elementor-icon-box-content">
														<h5 class="elementor-icon-box-title">
                                                   <span>
                                                   Premium Packaging​						</span>
														</h5>
													</div>
												</div>
											</div>
										</div>
										<div
											class="elementor-element elementor-element-ca2aac5 elementor-position-left elementor-vertical-align-middle elementor-widget__width-auto elementor-view-default elementor-mobile-position-top elementor-widget elementor-widget-icon-box"
											data-id="ca2aac5" data-element_type="widget"
											data-widget_type="icon-box.default">
											<div class="elementor-widget-container">
												<div class="elementor-icon-box-wrapper">
													<div class="elementor-icon-box-icon">
                                                <span class="elementor-icon elementor-animation-">
                                                   <svg xmlns="http://www.w3.org/2000/svg" width="128" height="128"
														viewBox="0 0 128 128" fill="none">
                                                      <path fill-rule="evenodd" clip-rule="evenodd"
															d="M85.0599 114.661H12.4355C7.77523 114.661 4 110.886 4 106.225V38.7417C4 38.2183 4.0932 37.7212 4.2702 37.2617L13.5576 10.6563C14.7429 7.26986 17.9354 5 21.5205 5H87.705C91.2901 5 94.4825 7.26892 95.6678 10.6563L104.955 37.2617C105.132 37.7212 105.225 38.2192 105.225 38.7417V69.1889L118.904 72.6091C120.494 73.0054 121.709 74.2924 122.021 75.9032C125.572 94.3265 124.206 104.967 119.026 111.985C115.454 116.827 109.979 120.125 102.438 122.846C101.531 123.171 100.54 123.179 99.6287 122.863C93.4077 120.712 88.5826 118.147 85.0606 114.659L85.0599 114.661ZM114.225 80.1381C116.595 93.5548 116.208 101.598 112.238 106.975C109.771 110.315 105.971 112.475 100.981 114.39C95.937 112.534 92.1034 110.421 89.6311 107.097C85.6412 101.737 85.3078 93.6553 87.7755 80.1376L101.007 76.8311L114.225 80.1381ZM96.789 69.1889V42.9594H12.4345V106.225H79.7374C77.3036 99.3885 77.2274 89.8646 79.9991 75.8842C80.3154 74.2819 81.5299 73.008 83.1115 72.6117L96.79 69.1915L96.789 69.1889ZM41.9586 59.8299H67.2649C69.5932 59.8299 71.4827 57.9404 71.4827 55.6121C71.4827 53.2839 69.5932 51.3944 67.2649 51.3944H41.9586C39.6303 51.3944 37.7408 53.2839 37.7408 55.6121C37.7408 57.9404 39.6303 59.8299 41.9586 59.8299ZM50.394 13.4349V34.5235H14.1553L21.5195 13.4349H50.394ZM58.8295 13.4349H87.7028L95.067 34.5235H58.8283L58.8295 13.4349Z"
															fill="currentColor"></path>
                                                   </svg>
                                                </span>
													</div>
													<div class="elementor-icon-box-content">
														<h5 class="elementor-icon-box-title">
                                                   <span>
                                                   Check Package on Delivery​						</span>
														</h5>
													</div>
												</div>
											</div>
										</div>
										<div
											class="elementor-element elementor-element-a8c9f73 elementor-position-left elementor-vertical-align-middle elementor-widget__width-auto elementor-view-default elementor-mobile-position-top elementor-widget elementor-widget-icon-box"
											data-id="a8c9f73" data-element_type="widget"
											data-widget_type="icon-box.default">
											<div class="elementor-widget-container">
												<div class="elementor-icon-box-wrapper">
													<div class="elementor-icon-box-icon">
                                                <span class="elementor-icon elementor-animation-">
                                                   <svg xmlns="http://www.w3.org/2000/svg" width="128" height="128"
														viewBox="0 0 128 128" fill="none">
                                                      <path fill-rule="evenodd" clip-rule="evenodd"
															d="M27.9999 72.7282V71.5765C27.9999 67.1568 24.4196 63.5765 20 63.5765H12C7.58033 63.5765 4 67.1568 4 71.5765V116.001C4 120.421 7.58033 124.001 12 124.001H20C23.8678 124.001 27.0964 121.258 27.8402 117.609C29.9723 118.537 32.4365 119.593 34.6884 120.506C40.6643 123.202 47.2561 124.374 53.8321 123.898C62.8204 123.49 69.2517 122.106 76.4517 119.698C76.4633 119.694 76.4793 119.69 76.4918 119.686C81.0758 118.102 85.2399 115.498 88.6722 112.067C95.9158 104.823 111.12 89.6148 120.293 80.4416C122.981 77.7577 124.317 74.006 123.936 70.2256C123.556 66.4453 121.496 63.0373 118.328 60.9418V60.9382C112.585 57.1382 104.988 57.7542 99.932 62.4266C93.5597 68.323 83.7999 77.3461 77.6322 83.0462C74.6759 85.782 70.7966 87.2981 66.7723 87.2981H54.3161C54.576 87.1624 54.8438 87.0222 55.1161 86.8865C58.2725 85.29 60.5724 82.3946 61.4126 78.9624C62.2528 75.5267 61.5447 71.8945 59.4804 69.0266C59.4769 69.0231 59.4769 69.0186 59.4724 69.0186C55.0761 62.9071 46.7127 61.2303 40.3001 65.1704L28.0003 72.7301L27.9999 72.7282ZM20 116.001V71.5763H12V116.001H20ZM27.9999 108.941V82.1163L44.4883 71.9842C47.3286 70.236 51.0321 70.9807 52.9802 73.6878L52.9838 73.6958C53.6838 74.6682 53.9239 75.8958 53.64 77.0602C53.3561 78.2245 52.5757 79.2039 51.5079 79.7441C43.9641 83.5557 38.7918 88.36 38.7918 88.36C37.5838 89.4797 37.1838 91.2242 37.7882 92.7564C38.3882 94.2885 39.8641 95.2965 41.5123 95.2965H66.7717C72.8119 95.2965 78.6279 93.0206 83.0635 88.9205C89.2279 83.217 98.9913 74.1928 105.363 68.3009C107.711 66.1286 111.244 65.8447 113.911 67.6089C115.079 68.3813 115.836 69.6366 115.976 71.0249C116.116 72.4169 115.624 73.7973 114.636 74.7847L83.0105 106.41C80.4427 108.977 77.3266 110.929 73.8944 112.118C67.3783 114.294 61.5543 115.542 53.3943 115.91C53.3586 115.913 53.322 115.913 53.2863 115.918C48.0024 116.302 42.7023 115.358 37.8784 113.174C37.8301 113.15 37.7784 113.13 37.7301 113.11C34.3338 111.729 30.4266 110.018 27.9981 108.942L27.9999 108.941ZM57.3278 51.0604C47.3242 48.1686 40.0001 38.9327 40.0001 27.9999C40.0001 14.7563 50.7564 4 64.0001 4C71.5481 4 78.2885 7.49188 82.6885 12.9437C92.6848 15.8438 99.9999 25.0715 99.9999 35.9997C99.9999 49.2433 89.2436 59.9996 76 59.9996C68.4563 59.9996 61.7196 56.5112 57.3278 51.0595V51.0604ZM87.8466 25.3051C87.9466 26.189 87.9984 27.089 87.9984 28.0015C87.9984 38.9416 80.6626 48.1818 70.6467 51.0666C72.3109 51.6782 74.1189 52.0023 75.9984 52.0023C84.8306 52.0023 91.9984 44.8346 91.9984 36.0024C91.9984 31.8746 90.4341 28.1139 87.8466 25.3059L87.8466 25.3051ZM63.9975 12.0016C72.8297 12.0016 79.9975 19.1693 79.9975 28.0015C79.9975 36.8337 72.8297 44.0015 63.9975 44.0015C55.1653 44.0015 47.9976 36.8337 47.9976 28.0015C47.9976 19.1693 55.1653 12.0016 63.9975 12.0016Z"
															fill="currentColor"></path>
                                                   </svg>
                                                </span>
													</div>
													<div class="elementor-icon-box-content">
														<h5 class="elementor-icon-box-title">
                                                   <span>
                                                   30 days money back						</span>
														</h5>
													</div>
												</div>
											</div>
										</div>
										<div
											class="elementor-element elementor-element-d4001d4 elementor-position-left elementor-vertical-align-middle elementor-widget__width-auto elementor-view-default elementor-mobile-position-top elementor-widget elementor-widget-icon-box"
											data-id="d4001d4" data-element_type="widget"
											data-widget_type="icon-box.default">
											<div class="elementor-widget-container">
												<div class="elementor-icon-box-wrapper">
													<div class="elementor-icon-box-icon">
                                                <span class="elementor-icon elementor-animation-">
                                                   <svg xmlns="http://www.w3.org/2000/svg" width="128" height="128"
														viewBox="0 0 128 128" fill="none">
                                                      <path fill-rule="evenodd" clip-rule="evenodd"
															d="M27.9996 65.9999V33.9999C27.9996 33.5276 28.0835 33.0723 28.2317 32.6482L35.2916 11.4722C36.3836 8.20434 39.4397 6 42.8836 6H93.1166C96.5602 6 99.6167 8.20356 100.709 11.4722L107.768 32.6482C107.917 33.0723 108.001 33.5285 108.001 33.9999V56.5999C111.52 56.1079 115.197 56.8677 118.328 58.9356V58.9392C121.496 61.0356 123.556 64.4427 123.936 68.2231C124.317 72.0034 122.98 75.7552 120.293 78.439C111.12 87.6114 95.9179 102.818 88.6722 110.064C85.2399 113.496 81.0758 116.1 76.4919 117.684C76.4803 117.687 76.4642 117.692 76.4517 117.695C69.2517 120.103 62.8195 121.487 53.8321 121.895C47.2561 122.371 40.6644 121.199 34.6884 118.503C32.4366 117.592 29.9723 116.535 27.8402 115.607C27.0964 119.255 23.8678 121.999 20 121.999H12C7.58033 121.999 4 118.419 4 113.999V65.999C4 61.5794 7.58033 57.9991 12 57.9991H20C24.4196 57.9991 27.9999 61.5794 27.9999 65.999L27.9996 65.9999ZM11.9997 65.9999V114H19.9996V65.9999H11.9997ZM27.9996 106.939V80.1141L44.488 69.982C47.3282 68.2338 51.0318 68.9784 52.9799 71.6856L52.9835 71.6936C53.6835 72.6659 53.9236 73.8936 53.6397 75.0579C53.3558 76.2222 52.5754 77.2017 51.5076 77.7418C43.9638 81.5535 38.7915 86.3578 38.7915 86.3578C37.5835 87.4774 37.1835 89.222 37.7879 90.7541C38.3879 92.2863 39.8638 93.2942 41.512 93.2942H66.7714C72.8116 93.2942 78.6276 91.0184 83.0632 86.9183C89.2276 81.2147 98.991 72.1905 105.363 66.2987C107.711 64.1263 111.243 63.8424 113.911 65.6067C115.079 66.379 115.835 67.6344 115.975 69.0227C116.116 70.4146 115.624 71.795 114.635 72.7825L83.0102 104.408C80.4424 106.975 77.3263 108.927 73.8941 110.116C67.378 112.291 61.554 113.54 53.394 113.908C53.3583 113.911 53.3217 113.911 53.286 113.916C48.0021 114.3 42.702 113.356 37.878 111.172C37.8298 111.148 37.778 111.128 37.7298 111.108C34.3335 109.727 30.4263 108.016 27.9977 106.94L27.9996 106.939ZM99.9994 37.9999H35.9996V65.8079L40.2995 63.1676C46.7111 59.2275 55.0754 60.9034 59.4718 67.0159C59.4753 67.0159 59.4753 67.0194 59.4798 67.0239C61.5441 69.8918 62.2521 73.524 61.4119 76.9596C60.5717 80.3918 58.2718 83.2874 55.1155 84.8837C54.8432 85.0194 54.5753 85.1596 54.3155 85.2953H66.7717C70.7957 85.2953 74.6752 83.7793 77.6315 81.0435C83.7993 75.3434 99.9992 60.3631 99.9992 60.3631V37.9988L99.9994 37.9999ZM59.9995 49.9999H75.9995C78.2075 49.9999 79.9995 48.2079 79.9995 45.9999C79.9995 43.7919 78.2075 41.9999 75.9995 41.9999H59.9995C57.7915 41.9999 55.9995 43.7919 55.9995 45.9999C55.9995 48.2079 57.7915 49.9999 59.9995 49.9999ZM63.9995 14V30H37.547L42.8828 14H63.9995ZM71.9995 14H93.1155L98.4513 30H71.9988L71.9995 14Z"
															fill="currentColor"></path>
                                                   </svg>
                                                </span>
													</div>
													<div class="elementor-icon-box-content">
														<h5 class="elementor-icon-box-title">
                                                   <span>
                                                   Free Shipping 						</span>
														</h5>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</section>
						<!-- ############  End  Third Section  ############ -->
						<!-- ############  Start Fourth Section  ############ -->
						<section
							class="elementor-section elementor-top-section elementor-element elementor-element-e3d0b37 rey-flexWrap elementor-section-boxed elementor-section-height-default elementor-section-height-default"
							data-id="e3d0b37" data-element_type="section">
							<div class="elementor-container elementor-column-gap-default">
								<div
									class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-6e79b74"
									data-id="6e79b74" data-element_type="column">
									<div
										class="elementor-column-wrap--6e79b74 elementor-widget-wrap elementor-element-populated">
										<div
											class="elementor-element elementor-element-7d534be elementor-widget elementor-widget-heading colorized-element"
											data-id="7d534be" data-element_type="widget"
											data-widget_type="heading.default">
											<div class="elementor-widget-container">
												<h3 class="elementor-heading-title elementor-size-default">New
													Arrivals</h3>
											</div>
										</div>
									</div>
								</div>
								<div
									class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-125c600"
									data-id="125c600" data-element_type="column">
									<div
										class="elementor-column-wrap--125c600 elementor-widget-wrap elementor-element-populated">
										<div
											class="elementor-element elementor-element-41f2945 elementor-button-dashed --large elementor-align-right elementor-mobile-align-left elementor-widget elementor-widget-button colorized-element"
											data-id="41f2945" data-element_type="widget"
											data-widget_type="button.default">
											<div class="elementor-widget-container">
												<div class="elementor-button-wrapper">
													<a class="elementor-button elementor-button-link elementor-size-sm"
													   href="https://demos.reytheme.com/san-francisco/#">
                                             <span class="elementor-button-content-wrapper">
                                             <span class="elementor-button-text">View all</span>
                                             </span>
													</a>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div
									class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-5593340"
									data-id="5593340" data-element_type="column">
									<div
										class="elementor-column-wrap--5593340 elementor-widget-wrap elementor-element-populated">
										<div
											class="pg-skin-proto elementor-element elementor-element-3c5a705 --carousel-navPos-outside elementor-widget elementor-widget-reycore-product-grid"
											data-id="3c5a705" data-element_type="widget"
											data-widget_type="reycore-product-grid.carousel">
											<div class="elementor-widget-container">
												<div
													class="woocommerce rey-element reyEl-productGrid reyEl-productGrid--has-thumbs reyEl-productGrid--skin-carousel "
													data-carousel-settings="{&quot;type&quot;:&quot;slide&quot;,&quot;slides_to_show&quot;:&quot;4&quot;,&quot;slides_to_show_tablet&quot;:3,&quot;slides_to_show_mobile&quot;:2,&quot;slides_to_move&quot;:false,&quot;autoplay&quot;:false,&quot;autoplaySpeed&quot;:null,&quot;pause_on_hover&quot;:&quot;yes&quot;,&quot;infinite&quot;:true,&quot;infinite_tablet&quot;:false,&quot;infinite_mobile&quot;:false,&quot;speed&quot;:500,&quot;direction&quot;:&quot;ltr&quot;,&quot;carousel_padding&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;top&quot;:&quot;0&quot;,&quot;right&quot;:&quot;0&quot;,&quot;bottom&quot;:&quot;0&quot;,&quot;left&quot;:&quot;0&quot;,&quot;isLinked&quot;:true},&quot;carousel_padding_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;top&quot;:&quot;&quot;,&quot;right&quot;:&quot;&quot;,&quot;bottom&quot;:&quot;&quot;,&quot;left&quot;:&quot;&quot;,&quot;isLinked&quot;:true},&quot;carousel_padding_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;top&quot;:&quot;0&quot;,&quot;right&quot;:&quot;60&quot;,&quot;bottom&quot;:&quot;0&quot;,&quot;left&quot;:&quot;0&quot;,&quot;isLinked&quot;:false},&quot;delayInit&quot;:&quot;&quot;,&quot;customArrows&quot;:&quot;.__arrows-3c5a705&quot;,&quot;free_drag&quot;:[],&quot;side_offset&quot;:&quot;&quot;}"
													data-qt="recent">
													<div class="splide reyEl-productGrid-splide carousel-6238a381cedc0"
														 data-skin="proto">
														<div class="splide__track">
															<ul class="products --prevent-thumbnail-sliders --prevent-scattered --prevent-masonry splide__list rey-wcGap-default rey-wcGrid-default --skin-proto"
																data-slider-carousel-id="carousel-6238a381cedc0"
																data-discount-mobile-top="yes" data-params="[]">
																<li class="rey-swatches rey-swatches--stretch-labels product type-product post-1004 status-publish first instock product_cat-smartwatches product_cat-wearables has-post-thumbnail shipping-taxable purchasable product-type-variable is-animated --shadow- --shadow-h-1 --extraImg-second --extraImg-mobile rey-wc-skin--proto rey-wc-loopAlign-left --uncropped splide__slide"
																	data-pid="1004">
																	<div class="rey-productInner --box-styler">
																		<div class="rey-productThumbnail">
																			<a href="https://demos.reytheme.com/san-francisco/product/innovative-smart-watch/"
																			   class="woocommerce-LoopProduct-link woocommerce-loop-product__link"
																			   aria-label="Innovative smart watch"><img
																					decoding="async" width="330"
																					height="361"
																					src="./San Francisco – Rey Theme_files/67-330x361.jpg"
																					class="rey-productThumbnail__second"
																					alt=""
																					srcset="https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/05/67-330x361.jpg 330w, https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/05/67-274x300.jpg 274w, https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/05/67-936x1024.jpg 936w, https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/05/67-768x840.jpg 768w, https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/05/67-600x656.jpg 600w, https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/05/67.jpg 1024w"
																					sizes="(max-width: 330px) 100vw, 330px"><img
																					decoding="async" width="330"
																					height="361"
																					src="./San Francisco – Rey Theme_files/66-330x361.jpg"
																					class="rey-thumbImg img--1 attachment-woocommerce_thumbnail size-woocommerce_thumbnail"
																					alt=""
																					srcset="https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/05/66-330x361.jpg 330w, https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/05/66-274x300.jpg 274w, https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/05/66-936x1024.jpg 936w, https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/05/66-768x840.jpg 768w, https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/05/66-600x656.jpg 600w, https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/05/66.jpg 1024w"
																					sizes="(max-width: 330px) 100vw, 330px"></a>
																			<div class="rey-thPos rey-thPos--top-right"
																				 data-position="top-right">
																				<div
																					class="rey-thPos-item --no-margins">
																					<button
																						class="--icon-style-rounded rey-wishlistBtn rey-wishlistBtn-link"
																						data-lazy-hidden=""
																						data-id="1004"
																						title="Add to wishlist"
																						aria-label="Add to wishlist">
																						<svg aria-hidden="true"
																							 role="img"
																							 class="rey-icon rey-icon-heart rey-wishlistBtn-icon"
																							 viewBox="0 0 24 24">
																							<path
																								fill="var(--icon-fill, none)"
																								stroke="currentColor"
																								stroke-width="var(--stroke-width, 1.8px)"
																								stroke-linecap="round"
																								stroke-linejoin="round"
																								d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path>
																						</svg>
																					</button>
																				</div>
																			</div>
																		</div>
																		<div class="rey-loopDetails --padded">
																			<div data-attribute="color"
																				 data-position="first"
																				 class="rey-productVariations2 --single-attr  --side">
																				<form
																					class="variations_form cart --catalog"
																					action="https://demos.reytheme.com/san-francisco/product/innovative-smart-watch/"
																					method="post"
																					enctype="multipart/form-data"
																					data-product_id="1004"
																					data-product_variations="[{&quot;attributes&quot;:{&quot;attribute_pa_color&quot;:&quot;&quot;},&quot;availability_html&quot;:&quot;&quot;,&quot;backorders_allowed&quot;:false,&quot;dimensions&quot;:{&quot;length&quot;:&quot;&quot;,&quot;width&quot;:&quot;&quot;,&quot;height&quot;:&quot;&quot;},&quot;dimensions_html&quot;:&quot;N\/A&quot;,&quot;display_price&quot;:399,&quot;display_regular_price&quot;:399,&quot;image&quot;:{&quot;title&quot;:&quot;66&quot;,&quot;caption&quot;:&quot;&quot;,&quot;url&quot;:&quot;https:\/\/demos.reytheme.com\/san-francisco\/wp-content\/uploads\/sites\/24\/2022\/05\/66.jpg&quot;,&quot;alt&quot;:&quot;66&quot;,&quot;src&quot;:&quot;https:\/\/demos.reytheme.com\/san-francisco\/wp-content\/uploads\/sites\/24\/2022\/05\/66-600x656.jpg&quot;,&quot;srcset&quot;:&quot;https:\/\/demos.reytheme.com\/san-francisco\/wp-content\/uploads\/sites\/24\/2022\/05\/66-600x656.jpg 600w, https:\/\/demos.reytheme.com\/san-francisco\/wp-content\/uploads\/sites\/24\/2022\/05\/66-274x300.jpg 274w, https:\/\/demos.reytheme.com\/san-francisco\/wp-content\/uploads\/sites\/24\/2022\/05\/66-936x1024.jpg 936w, https:\/\/demos.reytheme.com\/san-francisco\/wp-content\/uploads\/sites\/24\/2022\/05\/66-768x840.jpg 768w, https:\/\/demos.reytheme.com\/san-francisco\/wp-content\/uploads\/sites\/24\/2022\/05\/66-330x361.jpg 330w, https:\/\/demos.reytheme.com\/san-francisco\/wp-content\/uploads\/sites\/24\/2022\/05\/66.jpg 1024w&quot;,&quot;sizes&quot;:&quot;(max-width: 600px) 100vw, 600px&quot;,&quot;full_src&quot;:&quot;https:\/\/demos.reytheme.com\/san-francisco\/wp-content\/uploads\/sites\/24\/2022\/05\/66.jpg&quot;,&quot;full_src_w&quot;:1024,&quot;full_src_h&quot;:1120,&quot;gallery_thumbnail_src&quot;:&quot;https:\/\/demos.reytheme.com\/san-francisco\/wp-content\/uploads\/sites\/24\/2022\/05\/66-100x100.jpg&quot;,&quot;gallery_thumbnail_src_w&quot;:100,&quot;gallery_thumbnail_src_h&quot;:100,&quot;thumb_src&quot;:&quot;https:\/\/demos.reytheme.com\/san-francisco\/wp-content\/uploads\/sites\/24\/2022\/05\/66-330x361.jpg&quot;,&quot;thumb_src_w&quot;:330,&quot;thumb_src_h&quot;:361,&quot;src_w&quot;:600,&quot;src_h&quot;:656},&quot;image_id&quot;:1006,&quot;is_downloadable&quot;:false,&quot;is_in_stock&quot;:true,&quot;is_purchasable&quot;:true,&quot;is_sold_individually&quot;:&quot;no&quot;,&quot;is_virtual&quot;:false,&quot;max_qty&quot;:&quot;&quot;,&quot;min_qty&quot;:1,&quot;price_html&quot;:&quot;&quot;,&quot;sku&quot;:&quot;&quot;,&quot;variation_description&quot;:&quot;&quot;,&quot;variation_id&quot;:1005,&quot;variation_is_active&quot;:true,&quot;variation_is_visible&quot;:true,&quot;weight&quot;:&quot;&quot;,&quot;weight_html&quot;:&quot;N\/A&quot;,&quot;stock_status&quot;:&quot;instock&quot;,&quot;step_qty&quot;:1}]"
																					data-atc-text="Add to cart">
																					<div class="variations">
																						<div class="__s-wrapper">
																							<select style="display:none"
																									id="pa_color1004"
																									class=""
																									name="attribute_pa_color"
																									data-attribute_name="attribute_pa_color"
																									data-show_option_none="yes">
																								<option value="">Choose
																									an option
																								</option>
																								<option value="black">
																									Black
																								</option>
																								<option value="brown">
																									Brown
																								</option>
																								<option value="red">
																									Red
																								</option>
																							</select>
																							<div aria-label="color"
																								 data-attribute_name="attribute_pa_color"
																								 style=""
																								 class="rey-swatchList --type-color --light-tooltips --disabled-dim --deselection-clear">
																								<div title="Black"
																									 data-term-id="22"
																									 data-term-slug="black"
																									 data-attribute-name="pa_color"
																									 aria-label="Black"
																									 role="radio"
																									 aria-checked="false"
																									 class="rey-swatchList-item --type-color rey-swatchList-item--regular "
																									 data-description="">
																									<span
																										class="rey-swatchList-itemContent"
																										style="background: #45464c;"></span>
																								</div>
																								<div title="Brown"
																									 data-term-id="24"
																									 data-term-slug="brown"
																									 data-attribute-name="pa_color"
																									 aria-label="Brown"
																									 role="radio"
																									 aria-checked="false"
																									 class="rey-swatchList-item --type-color rey-swatchList-item--regular "
																									 data-description="">
																									<span
																										class="rey-swatchList-itemContent"
																										style="background: #956b45;"></span>
																								</div>
																								<div title="Red"
																									 data-term-id="43"
																									 data-term-slug="red"
																									 data-attribute-name="pa_color"
																									 aria-label="Red"
																									 role="radio"
																									 aria-checked="false"
																									 class="rey-swatchList-item --type-color rey-swatchList-item--regular "
																									 data-description="">
																									<span
																										class="rey-swatchList-itemContent"
																										style="background: #e75243;"></span>
																								</div>
																							</div>
																						</div>
																					</div>
																				</form>
																			</div>
																			<div class="rey-brandLink --catalog"><a
																					href="https://demos.reytheme.com/san-francisco/product-brand/x-form/">X-Form</a>
																			</div>
																			<h2 class="woocommerce-loop-product__title">
																				<a href="https://demos.reytheme.com/san-francisco/product/innovative-smart-watch/">Innovative
																					smart watch</a></h2>
																			<div class="__break"></div>
																			<span class="price rey-loopPrice"><span
																					class="woocommerce-Price-amount amount"><bdi><span
																							class="woocommerce-Price-currencySymbol">$</span>399.00</bdi></span></span>
																			<div class="rey-loopButtons">
																				<a href="https://demos.reytheme.com/san-francisco/product/innovative-smart-watch/"
																				   data-quantity="1"
																				   class="button product_type_variable add_to_cart_button rey-btn--hover"
																				   data-product_id="1004"
																				   data-product_sku=""
																				   aria-label="Select options for “Innovative smart watch”"
																				   rel="nofollow"><span class="__text">Select options</span></a>
																				<span
																					id="woocommerce_loop_add_to_cart_link_describedby_1004"
																					class="screen-reader-text">
                                                                  This product has multiple variants. The options may be chosen on the product page	</span>
																				<button
																					class="button rey-btn--hover rey-quickviewBtn js-rey-quickviewBtn"
																					data-id="1004" title="QUICKVIEW">
																					QUICKVIEW
																				</button>
																			</div>
																		</div>
																	</div>
																</li>
																<li class="rey-swatches rey-swatches--stretch-labels product type-product post-989 status-publish instock product_cat-bluetooth product_cat-portable product_cat-speakers has-post-thumbnail shipping-taxable purchasable product-type-variable is-animated --shadow- --shadow-h-1 --extraImg-second --extraImg-mobile rey-wc-skin--proto rey-wc-loopAlign-left --uncropped splide__slide"
																	data-pid="989">
																	<div class="rey-productInner --box-styler">
																		<div class="rey-productThumbnail">
																			<a href="https://demos.reytheme.com/san-francisco/product/powerful-bluetooth-speaker/"
																			   class="woocommerce-LoopProduct-link woocommerce-loop-product__link"
																			   aria-label="Powerful Bluetooth speaker"><img
																					decoding="async" width="330"
																					height="361"
																					src="./San Francisco – Rey Theme_files/56-330x361.jpg"
																					class="rey-productThumbnail__second"
																					alt=""
																					srcset="https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/05/56-330x361.jpg 330w, https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/05/56-274x300.jpg 274w, https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/05/56-936x1024.jpg 936w, https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/05/56-768x840.jpg 768w, https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/05/56-600x656.jpg 600w, https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/05/56.jpg 1024w"
																					sizes="(max-width: 330px) 100vw, 330px"><img
																					decoding="async" width="330"
																					height="361"
																					src="./San Francisco – Rey Theme_files/55-330x361.jpg"
																					class="rey-thumbImg img--1 attachment-woocommerce_thumbnail size-woocommerce_thumbnail"
																					alt=""
																					srcset="https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/05/55-330x361.jpg 330w, https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/05/55-274x300.jpg 274w, https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/05/55-936x1024.jpg 936w, https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/05/55-768x840.jpg 768w, https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/05/55-600x656.jpg 600w, https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/05/55.jpg 1024w"
																					sizes="(max-width: 330px) 100vw, 330px"></a>
																			<div class="rey-thPos rey-thPos--top-right"
																				 data-position="top-right">
																				<div
																					class="rey-thPos-item --no-margins">
																					<button
																						class="--icon-style-rounded rey-wishlistBtn rey-wishlistBtn-link"
																						data-lazy-hidden=""
																						data-id="989"
																						title="Add to wishlist"
																						aria-label="Add to wishlist">
																						<svg aria-hidden="true"
																							 role="img"
																							 class="rey-icon rey-icon-heart rey-wishlistBtn-icon"
																							 viewBox="0 0 24 24">
																							<path
																								fill="var(--icon-fill, none)"
																								stroke="currentColor"
																								stroke-width="var(--stroke-width, 1.8px)"
																								stroke-linecap="round"
																								stroke-linejoin="round"
																								d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path>
																						</svg>
																					</button>
																				</div>
																			</div>
																		</div>
																		<div class="rey-loopDetails --padded">
																			<div data-attribute="color"
																				 data-position="first"
																				 class="rey-productVariations2 --single-attr  --side">
																				<form
																					class="variations_form cart --catalog"
																					action="https://demos.reytheme.com/san-francisco/product/powerful-bluetooth-speaker/"
																					method="post"
																					enctype="multipart/form-data"
																					data-product_id="989"
																					data-product_variations="[{&quot;attributes&quot;:{&quot;attribute_pa_color&quot;:&quot;&quot;},&quot;availability_html&quot;:&quot;&quot;,&quot;backorders_allowed&quot;:false,&quot;dimensions&quot;:{&quot;length&quot;:&quot;&quot;,&quot;width&quot;:&quot;&quot;,&quot;height&quot;:&quot;&quot;},&quot;dimensions_html&quot;:&quot;N\/A&quot;,&quot;display_price&quot;:549,&quot;display_regular_price&quot;:549,&quot;image&quot;:{&quot;title&quot;:&quot;55&quot;,&quot;caption&quot;:&quot;&quot;,&quot;url&quot;:&quot;https:\/\/demos.reytheme.com\/san-francisco\/wp-content\/uploads\/sites\/24\/2022\/05\/55.jpg&quot;,&quot;alt&quot;:&quot;55&quot;,&quot;src&quot;:&quot;https:\/\/demos.reytheme.com\/san-francisco\/wp-content\/uploads\/sites\/24\/2022\/05\/55-600x656.jpg&quot;,&quot;srcset&quot;:&quot;https:\/\/demos.reytheme.com\/san-francisco\/wp-content\/uploads\/sites\/24\/2022\/05\/55-600x656.jpg 600w, https:\/\/demos.reytheme.com\/san-francisco\/wp-content\/uploads\/sites\/24\/2022\/05\/55-274x300.jpg 274w, https:\/\/demos.reytheme.com\/san-francisco\/wp-content\/uploads\/sites\/24\/2022\/05\/55-936x1024.jpg 936w, https:\/\/demos.reytheme.com\/san-francisco\/wp-content\/uploads\/sites\/24\/2022\/05\/55-768x840.jpg 768w, https:\/\/demos.reytheme.com\/san-francisco\/wp-content\/uploads\/sites\/24\/2022\/05\/55-330x361.jpg 330w, https:\/\/demos.reytheme.com\/san-francisco\/wp-content\/uploads\/sites\/24\/2022\/05\/55.jpg 1024w&quot;,&quot;sizes&quot;:&quot;(max-width: 600px) 100vw, 600px&quot;,&quot;full_src&quot;:&quot;https:\/\/demos.reytheme.com\/san-francisco\/wp-content\/uploads\/sites\/24\/2022\/05\/55.jpg&quot;,&quot;full_src_w&quot;:1024,&quot;full_src_h&quot;:1120,&quot;gallery_thumbnail_src&quot;:&quot;https:\/\/demos.reytheme.com\/san-francisco\/wp-content\/uploads\/sites\/24\/2022\/05\/55-100x100.jpg&quot;,&quot;gallery_thumbnail_src_w&quot;:100,&quot;gallery_thumbnail_src_h&quot;:100,&quot;thumb_src&quot;:&quot;https:\/\/demos.reytheme.com\/san-francisco\/wp-content\/uploads\/sites\/24\/2022\/05\/55-330x361.jpg&quot;,&quot;thumb_src_w&quot;:330,&quot;thumb_src_h&quot;:361,&quot;src_w&quot;:600,&quot;src_h&quot;:656},&quot;image_id&quot;:991,&quot;is_downloadable&quot;:false,&quot;is_in_stock&quot;:true,&quot;is_purchasable&quot;:true,&quot;is_sold_individually&quot;:&quot;no&quot;,&quot;is_virtual&quot;:false,&quot;max_qty&quot;:&quot;&quot;,&quot;min_qty&quot;:1,&quot;price_html&quot;:&quot;&quot;,&quot;sku&quot;:&quot;&quot;,&quot;variation_description&quot;:&quot;&quot;,&quot;variation_id&quot;:990,&quot;variation_is_active&quot;:true,&quot;variation_is_visible&quot;:true,&quot;weight&quot;:&quot;&quot;,&quot;weight_html&quot;:&quot;N\/A&quot;,&quot;stock_status&quot;:&quot;instock&quot;,&quot;step_qty&quot;:1}]"
																					data-atc-text="Add to cart">
																					<div class="variations">
																						<div class="__s-wrapper">
																							<select style="display:none"
																									id="pa_color989"
																									class=""
																									name="attribute_pa_color"
																									data-attribute_name="attribute_pa_color"
																									data-show_option_none="yes">
																								<option value="">Choose
																									an option
																								</option>
																								<option value="black">
																									Black
																								</option>
																								<option value="brown">
																									Brown
																								</option>
																								<option value="grey">
																									Grey
																								</option>
																							</select>
																							<div aria-label="color"
																								 data-attribute_name="attribute_pa_color"
																								 style=""
																								 class="rey-swatchList --type-color --light-tooltips --disabled-dim --deselection-clear">
																								<div title="Black"
																									 data-term-id="22"
																									 data-term-slug="black"
																									 data-attribute-name="pa_color"
																									 aria-label="Black"
																									 role="radio"
																									 aria-checked="false"
																									 class="rey-swatchList-item --type-color rey-swatchList-item--regular "
																									 data-description="">
																									<span
																										class="rey-swatchList-itemContent"
																										style="background: #45464c;"></span>
																								</div>
																								<div title="Brown"
																									 data-term-id="24"
																									 data-term-slug="brown"
																									 data-attribute-name="pa_color"
																									 aria-label="Brown"
																									 role="radio"
																									 aria-checked="false"
																									 class="rey-swatchList-item --type-color rey-swatchList-item--regular "
																									 data-description="">
																									<span
																										class="rey-swatchList-itemContent"
																										style="background: #956b45;"></span>
																								</div>
																								<div title="Grey"
																									 data-term-id="33"
																									 data-term-slug="grey"
																									 data-attribute-name="pa_color"
																									 aria-label="Grey"
																									 role="radio"
																									 aria-checked="false"
																									 class="rey-swatchList-item --type-color rey-swatchList-item--regular "
																									 data-description="">
																									<span
																										class="rey-swatchList-itemContent"
																										style="background: #dbdbdb;"></span>
																								</div>
																								<a href="https://demos.reytheme.com/san-francisco/product/powerful-bluetooth-speaker/"
																								   class="rey-swatchList-more"
																								   title="Click to see 1 more">1+</a>
																							</div>
																						</div>
																					</div>
																				</form>
																			</div>
																			<div class="rey-brandLink --catalog"><a
																					href="https://demos.reytheme.com/san-francisco/product-brand/quantech/">Quantech</a>
																			</div>
																			<h2 class="woocommerce-loop-product__title">
																				<a href="https://demos.reytheme.com/san-francisco/product/powerful-bluetooth-speaker/">Powerful
																					Bluetooth speaker</a></h2>
																			<div class="__break"></div>
																			<span class="price rey-loopPrice"><span
																					class="woocommerce-Price-amount amount"><bdi><span
																							class="woocommerce-Price-currencySymbol">$</span>549.00</bdi></span></span>
																			<div class="rey-loopButtons">
																				<a href="https://demos.reytheme.com/san-francisco/product/powerful-bluetooth-speaker/"
																				   data-quantity="1"
																				   class="button product_type_variable add_to_cart_button rey-btn--hover"
																				   data-product_id="989"
																				   data-product_sku=""
																				   aria-label="Select options for “Powerful Bluetooth speaker”"
																				   rel="nofollow"><span class="__text">Select options</span></a>
																				<span
																					id="woocommerce_loop_add_to_cart_link_describedby_989"
																					class="screen-reader-text">
                                                                  This product has multiple variants. The options may be chosen on the product page	</span>
																				<button
																					class="button rey-btn--hover rey-quickviewBtn js-rey-quickviewBtn"
																					data-id="989" title="QUICKVIEW">
																					QUICKVIEW
																				</button>
																			</div>
																		</div>
																	</div>
																</li>
																<li class="rey-swatches rey-swatches--stretch-labels product type-product post-998 status-publish instock product_cat-bluetooth product_cat-portable product_cat-speakers has-post-thumbnail shipping-taxable purchasable product-type-variable is-animated --shadow- --shadow-h-1 --extraImg-second --extraImg-mobile rey-wc-skin--proto rey-wc-loopAlign-left --uncropped splide__slide"
																	data-pid="998">
																	<div class="rey-productInner --box-styler">
																		<div class="rey-productThumbnail">
																			<a href="https://demos.reytheme.com/san-francisco/product/high-end-wireless-subwoofer/"
																			   class="woocommerce-LoopProduct-link woocommerce-loop-product__link"
																			   aria-label="High-end wireless subwoofer"><img
																					decoding="async" width="330"
																					height="361"
																					src="./San Francisco – Rey Theme_files/63-330x361.jpg"
																					class="rey-productThumbnail__second"
																					alt=""
																					srcset="https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/05/63-330x361.jpg 330w, https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/05/63-274x300.jpg 274w, https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/05/63-936x1024.jpg 936w, https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/05/63-768x840.jpg 768w, https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/05/63-600x656.jpg 600w, https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/05/63.jpg 1024w"
																					sizes="(max-width: 330px) 100vw, 330px"><img
																					decoding="async" width="330"
																					height="361"
																					src="./San Francisco – Rey Theme_files/62-330x361.jpg"
																					class="rey-thumbImg img--1 attachment-woocommerce_thumbnail size-woocommerce_thumbnail"
																					alt=""
																					srcset="https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/05/62-330x361.jpg 330w, https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/05/62-274x300.jpg 274w, https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/05/62-936x1024.jpg 936w, https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/05/62-768x840.jpg 768w, https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/05/62-600x656.jpg 600w, https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/05/62.jpg 1024w"
																					sizes="(max-width: 330px) 100vw, 330px"></a>
																			<div class="rey-thPos rey-thPos--top-right"
																				 data-position="top-right">
																				<div
																					class="rey-thPos-item --no-margins">
																					<button
																						class="--icon-style-rounded rey-wishlistBtn rey-wishlistBtn-link"
																						data-lazy-hidden=""
																						data-id="998"
																						title="Add to wishlist"
																						aria-label="Add to wishlist">
																						<svg aria-hidden="true"
																							 role="img"
																							 class="rey-icon rey-icon-heart rey-wishlistBtn-icon"
																							 viewBox="0 0 24 24">
																							<path
																								fill="var(--icon-fill, none)"
																								stroke="currentColor"
																								stroke-width="var(--stroke-width, 1.8px)"
																								stroke-linecap="round"
																								stroke-linejoin="round"
																								d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path>
																						</svg>
																					</button>
																				</div>
																			</div>
																		</div>
																		<div class="rey-loopDetails --padded">
																			<div data-attribute="color"
																				 data-position="first"
																				 class="rey-productVariations2 --single-attr  --side">
																				<form
																					class="variations_form cart --catalog"
																					action="https://demos.reytheme.com/san-francisco/product/high-end-wireless-subwoofer/"
																					method="post"
																					enctype="multipart/form-data"
																					data-product_id="998"
																					data-product_variations="[{&quot;attributes&quot;:{&quot;attribute_pa_color&quot;:&quot;&quot;},&quot;availability_html&quot;:&quot;&quot;,&quot;backorders_allowed&quot;:false,&quot;dimensions&quot;:{&quot;length&quot;:&quot;&quot;,&quot;width&quot;:&quot;&quot;,&quot;height&quot;:&quot;&quot;},&quot;dimensions_html&quot;:&quot;N\/A&quot;,&quot;display_price&quot;:1989,&quot;display_regular_price&quot;:1989,&quot;image&quot;:{&quot;title&quot;:&quot;62&quot;,&quot;caption&quot;:&quot;&quot;,&quot;url&quot;:&quot;https:\/\/demos.reytheme.com\/san-francisco\/wp-content\/uploads\/sites\/24\/2022\/05\/62.jpg&quot;,&quot;alt&quot;:&quot;62&quot;,&quot;src&quot;:&quot;https:\/\/demos.reytheme.com\/san-francisco\/wp-content\/uploads\/sites\/24\/2022\/05\/62-600x656.jpg&quot;,&quot;srcset&quot;:&quot;https:\/\/demos.reytheme.com\/san-francisco\/wp-content\/uploads\/sites\/24\/2022\/05\/62-600x656.jpg 600w, https:\/\/demos.reytheme.com\/san-francisco\/wp-content\/uploads\/sites\/24\/2022\/05\/62-274x300.jpg 274w, https:\/\/demos.reytheme.com\/san-francisco\/wp-content\/uploads\/sites\/24\/2022\/05\/62-936x1024.jpg 936w, https:\/\/demos.reytheme.com\/san-francisco\/wp-content\/uploads\/sites\/24\/2022\/05\/62-768x840.jpg 768w, https:\/\/demos.reytheme.com\/san-francisco\/wp-content\/uploads\/sites\/24\/2022\/05\/62-330x361.jpg 330w, https:\/\/demos.reytheme.com\/san-francisco\/wp-content\/uploads\/sites\/24\/2022\/05\/62.jpg 1024w&quot;,&quot;sizes&quot;:&quot;(max-width: 600px) 100vw, 600px&quot;,&quot;full_src&quot;:&quot;https:\/\/demos.reytheme.com\/san-francisco\/wp-content\/uploads\/sites\/24\/2022\/05\/62.jpg&quot;,&quot;full_src_w&quot;:1024,&quot;full_src_h&quot;:1120,&quot;gallery_thumbnail_src&quot;:&quot;https:\/\/demos.reytheme.com\/san-francisco\/wp-content\/uploads\/sites\/24\/2022\/05\/62-100x100.jpg&quot;,&quot;gallery_thumbnail_src_w&quot;:100,&quot;gallery_thumbnail_src_h&quot;:100,&quot;thumb_src&quot;:&quot;https:\/\/demos.reytheme.com\/san-francisco\/wp-content\/uploads\/sites\/24\/2022\/05\/62-330x361.jpg&quot;,&quot;thumb_src_w&quot;:330,&quot;thumb_src_h&quot;:361,&quot;src_w&quot;:600,&quot;src_h&quot;:656},&quot;image_id&quot;:1000,&quot;is_downloadable&quot;:false,&quot;is_in_stock&quot;:true,&quot;is_purchasable&quot;:true,&quot;is_sold_individually&quot;:&quot;no&quot;,&quot;is_virtual&quot;:false,&quot;max_qty&quot;:&quot;&quot;,&quot;min_qty&quot;:1,&quot;price_html&quot;:&quot;&quot;,&quot;sku&quot;:&quot;&quot;,&quot;variation_description&quot;:&quot;&quot;,&quot;variation_id&quot;:999,&quot;variation_is_active&quot;:true,&quot;variation_is_visible&quot;:true,&quot;weight&quot;:&quot;&quot;,&quot;weight_html&quot;:&quot;N\/A&quot;,&quot;stock_status&quot;:&quot;instock&quot;,&quot;step_qty&quot;:1}]"
																					data-atc-text="Add to cart">
																					<div class="variations">
																						<div class="__s-wrapper">
																							<select style="display:none"
																									id="pa_color998"
																									class=""
																									name="attribute_pa_color"
																									data-attribute_name="attribute_pa_color"
																									data-show_option_none="yes">
																								<option value="">Choose
																									an option
																								</option>
																								<option value="beige">
																									Beige
																								</option>
																								<option value="black">
																									Black
																								</option>
																								<option value="grey">
																									Grey
																								</option>
																							</select>
																							<div aria-label="color"
																								 data-attribute_name="attribute_pa_color"
																								 style=""
																								 class="rey-swatchList --type-color --light-tooltips --disabled-dim --deselection-clear">
																								<div title="Beige"
																									 data-term-id="20"
																									 data-term-slug="beige"
																									 data-attribute-name="pa_color"
																									 aria-label="Beige"
																									 role="radio"
																									 aria-checked="false"
																									 class="rey-swatchList-item --type-color rey-swatchList-item--regular "
																									 data-description="">
																									<span
																										class="rey-swatchList-itemContent"
																										style="background: #dfc5a0;"></span>
																								</div>
																								<div title="Black"
																									 data-term-id="22"
																									 data-term-slug="black"
																									 data-attribute-name="pa_color"
																									 aria-label="Black"
																									 role="radio"
																									 aria-checked="false"
																									 class="rey-swatchList-item --type-color rey-swatchList-item--regular "
																									 data-description="">
																									<span
																										class="rey-swatchList-itemContent"
																										style="background: #45464c;"></span>
																								</div>
																								<div title="Grey"
																									 data-term-id="33"
																									 data-term-slug="grey"
																									 data-attribute-name="pa_color"
																									 aria-label="Grey"
																									 role="radio"
																									 aria-checked="false"
																									 class="rey-swatchList-item --type-color rey-swatchList-item--regular "
																									 data-description="">
																									<span
																										class="rey-swatchList-itemContent"
																										style="background: #dbdbdb;"></span>
																								</div>
																							</div>
																						</div>
																					</div>
																				</form>
																			</div>
																			<div class="rey-brandLink --catalog"><a
																					href="https://demos.reytheme.com/san-francisco/product-brand/squarex/">SquareX</a>
																			</div>
																			<h2 class="woocommerce-loop-product__title">
																				<a href="https://demos.reytheme.com/san-francisco/product/high-end-wireless-subwoofer/">High-end
																					wireless subwoofer</a></h2>
																			<div class="__break"></div>
																			<span class="price rey-loopPrice"><span
																					class="woocommerce-Price-amount amount"><bdi><span
																							class="woocommerce-Price-currencySymbol">$</span>1,989.00</bdi></span></span>
																			<div class="rey-loopButtons">
																				<a href="https://demos.reytheme.com/san-francisco/product/high-end-wireless-subwoofer/"
																				   data-quantity="1"
																				   class="button product_type_variable add_to_cart_button rey-btn--hover"
																				   data-product_id="998"
																				   data-product_sku=""
																				   aria-label="Select options for “High-end wireless subwoofer”"
																				   rel="nofollow"><span class="__text">Select options</span></a>
																				<span
																					id="woocommerce_loop_add_to_cart_link_describedby_998"
																					class="screen-reader-text">
                                                                  This product has multiple variants. The options may be chosen on the product page	</span>
																				<button
																					class="button rey-btn--hover rey-quickviewBtn js-rey-quickviewBtn"
																					data-id="998" title="QUICKVIEW">
																					QUICKVIEW
																				</button>
																			</div>
																		</div>
																	</div>
																</li>
																<li class="rey-swatches rey-swatches--stretch-labels product type-product post-136 status-publish last instock product_cat-headphones product_cat-on-ear product_cat-over-ear product_cat-wireless has-post-thumbnail shipping-taxable purchasable product-type-variable is-animated --shadow- --shadow-h-1 --extraImg-second --extraImg-mobile rey-wc-skin--proto rey-wc-loopAlign-left --uncropped splide__slide"
																	data-pid="136">
																	<div class="rey-productInner --box-styler">
																		<div class="rey-productThumbnail">
																			<a href="https://demos.reytheme.com/san-francisco/product/comfortable-over-ear-headphones/"
																			   class="woocommerce-LoopProduct-link woocommerce-loop-product__link"
																			   aria-label="Comfortable over-ear headphones"><img
																					decoding="async" width="330"
																					height="361"
																					src="./San Francisco – Rey Theme_files/13-330x361.jpg"
																					class="rey-productThumbnail__second"
																					alt=""
																					srcset="https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/02/13-330x361.jpg 330w, https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/02/13-274x300.jpg 274w, https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/02/13-936x1024.jpg 936w, https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/02/13-768x840.jpg 768w, https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/02/13-600x656.jpg 600w, https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/02/13.jpg 1024w"
																					sizes="(max-width: 330px) 100vw, 330px"><img
																					decoding="async" width="330"
																					height="361"
																					src="./San Francisco – Rey Theme_files/12-330x361.jpg"
																					class="rey-thumbImg img--1 attachment-woocommerce_thumbnail size-woocommerce_thumbnail"
																					alt=""
																					srcset="https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/02/12-330x361.jpg 330w, https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/02/12-274x300.jpg 274w, https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/02/12-936x1024.jpg 936w, https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/02/12-768x840.jpg 768w, https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/02/12-600x656.jpg 600w, https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/02/12.jpg 1024w"
																					sizes="(max-width: 330px) 100vw, 330px"></a>
																			<div class="rey-thPos rey-thPos--top-right"
																				 data-position="top-right">
																				<div
																					class="rey-thPos-item --no-margins">
																					<button
																						class="--icon-style-rounded rey-wishlistBtn rey-wishlistBtn-link"
																						data-lazy-hidden=""
																						data-id="136"
																						title="Add to wishlist"
																						aria-label="Add to wishlist">
																						<svg aria-hidden="true"
																							 role="img"
																							 class="rey-icon rey-icon-heart rey-wishlistBtn-icon"
																							 viewBox="0 0 24 24">
																							<path
																								fill="var(--icon-fill, none)"
																								stroke="currentColor"
																								stroke-width="var(--stroke-width, 1.8px)"
																								stroke-linecap="round"
																								stroke-linejoin="round"
																								d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path>
																						</svg>
																					</button>
																				</div>
																			</div>
																		</div>
																		<div class="rey-loopDetails --padded">
																			<div data-attribute="color"
																				 data-position="first"
																				 class="rey-productVariations2 --single-attr  --side">
																				<form
																					class="variations_form cart --catalog"
																					action="https://demos.reytheme.com/san-francisco/product/comfortable-over-ear-headphones/"
																					method="post"
																					enctype="multipart/form-data"
																					data-product_id="136"
																					data-product_variations="[{&quot;attributes&quot;:{&quot;attribute_pa_color&quot;:&quot;&quot;},&quot;availability_html&quot;:&quot;&quot;,&quot;backorders_allowed&quot;:false,&quot;dimensions&quot;:{&quot;length&quot;:&quot;&quot;,&quot;width&quot;:&quot;&quot;,&quot;height&quot;:&quot;&quot;},&quot;dimensions_html&quot;:&quot;N\/A&quot;,&quot;display_price&quot;:689,&quot;display_regular_price&quot;:689,&quot;image&quot;:{&quot;title&quot;:&quot;12&quot;,&quot;caption&quot;:&quot;&quot;,&quot;url&quot;:&quot;https:\/\/demos.reytheme.com\/san-francisco\/wp-content\/uploads\/sites\/24\/2022\/02\/12.jpg&quot;,&quot;alt&quot;:&quot;12&quot;,&quot;src&quot;:&quot;https:\/\/demos.reytheme.com\/san-francisco\/wp-content\/uploads\/sites\/24\/2022\/02\/12-600x656.jpg&quot;,&quot;srcset&quot;:&quot;https:\/\/demos.reytheme.com\/san-francisco\/wp-content\/uploads\/sites\/24\/2022\/02\/12-600x656.jpg 600w, https:\/\/demos.reytheme.com\/san-francisco\/wp-content\/uploads\/sites\/24\/2022\/02\/12-274x300.jpg 274w, https:\/\/demos.reytheme.com\/san-francisco\/wp-content\/uploads\/sites\/24\/2022\/02\/12-936x1024.jpg 936w, https:\/\/demos.reytheme.com\/san-francisco\/wp-content\/uploads\/sites\/24\/2022\/02\/12-768x840.jpg 768w, https:\/\/demos.reytheme.com\/san-francisco\/wp-content\/uploads\/sites\/24\/2022\/02\/12-330x361.jpg 330w, https:\/\/demos.reytheme.com\/san-francisco\/wp-content\/uploads\/sites\/24\/2022\/02\/12.jpg 1024w&quot;,&quot;sizes&quot;:&quot;(max-width: 600px) 100vw, 600px&quot;,&quot;full_src&quot;:&quot;https:\/\/demos.reytheme.com\/san-francisco\/wp-content\/uploads\/sites\/24\/2022\/02\/12.jpg&quot;,&quot;full_src_w&quot;:1024,&quot;full_src_h&quot;:1120,&quot;gallery_thumbnail_src&quot;:&quot;https:\/\/demos.reytheme.com\/san-francisco\/wp-content\/uploads\/sites\/24\/2022\/02\/12-100x100.jpg&quot;,&quot;gallery_thumbnail_src_w&quot;:100,&quot;gallery_thumbnail_src_h&quot;:100,&quot;thumb_src&quot;:&quot;https:\/\/demos.reytheme.com\/san-francisco\/wp-content\/uploads\/sites\/24\/2022\/02\/12-330x361.jpg&quot;,&quot;thumb_src_w&quot;:330,&quot;thumb_src_h&quot;:361,&quot;src_w&quot;:600,&quot;src_h&quot;:656},&quot;image_id&quot;:137,&quot;is_downloadable&quot;:false,&quot;is_in_stock&quot;:true,&quot;is_purchasable&quot;:true,&quot;is_sold_individually&quot;:&quot;no&quot;,&quot;is_virtual&quot;:false,&quot;max_qty&quot;:&quot;&quot;,&quot;min_qty&quot;:1,&quot;price_html&quot;:&quot;&quot;,&quot;sku&quot;:&quot;&quot;,&quot;variation_description&quot;:&quot;&quot;,&quot;variation_id&quot;:886,&quot;variation_is_active&quot;:true,&quot;variation_is_visible&quot;:true,&quot;weight&quot;:&quot;&quot;,&quot;weight_html&quot;:&quot;N\/A&quot;,&quot;stock_status&quot;:&quot;instock&quot;,&quot;step_qty&quot;:1}]"
																					data-atc-text="Add to cart">
																					<div class="variations">
																						<div class="__s-wrapper">
																							<select style="display:none"
																									id="pa_color136"
																									class=""
																									name="attribute_pa_color"
																									data-attribute_name="attribute_pa_color"
																									data-show_option_none="yes">
																								<option value="">Choose
																									an option
																								</option>
																								<option value="beige">
																									Beige
																								</option>
																								<option value="black">
																									Black
																								</option>
																								<option value="red">
																									Red
																								</option>
																							</select>
																							<div aria-label="color"
																								 data-attribute_name="attribute_pa_color"
																								 style=""
																								 class="rey-swatchList --type-color --light-tooltips --disabled-dim --deselection-clear">
																								<div title="Beige"
																									 data-term-id="20"
																									 data-term-slug="beige"
																									 data-attribute-name="pa_color"
																									 aria-label="Beige"
																									 role="radio"
																									 aria-checked="false"
																									 class="rey-swatchList-item --type-color rey-swatchList-item--regular "
																									 data-description="">
																									<span
																										class="rey-swatchList-itemContent"
																										style="background: #dfc5a0;"></span>
																								</div>
																								<div title="Black"
																									 data-term-id="22"
																									 data-term-slug="black"
																									 data-attribute-name="pa_color"
																									 aria-label="Black"
																									 role="radio"
																									 aria-checked="false"
																									 class="rey-swatchList-item --type-color rey-swatchList-item--regular "
																									 data-description="">
																									<span
																										class="rey-swatchList-itemContent"
																										style="background: #45464c;"></span>
																								</div>
																								<div title="Red"
																									 data-term-id="43"
																									 data-term-slug="red"
																									 data-attribute-name="pa_color"
																									 aria-label="Red"
																									 role="radio"
																									 aria-checked="false"
																									 class="rey-swatchList-item --type-color rey-swatchList-item--regular "
																									 data-description="">
																									<span
																										class="rey-swatchList-itemContent"
																										style="background: #e75243;"></span>
																								</div>
																							</div>
																						</div>
																					</div>
																				</form>
																			</div>
																			<div class="rey-brandLink --catalog"><a
																					href="https://demos.reytheme.com/san-francisco/product-brand/quantech/">Quantech</a>
																			</div>
																			<h2 class="woocommerce-loop-product__title">
																				<a href="https://demos.reytheme.com/san-francisco/product/comfortable-over-ear-headphones/">Comfortable
																					over-ear headphones</a></h2>
																			<div class="__break"></div>
																			<span class="price rey-loopPrice"><span
																					class="woocommerce-Price-amount amount"><bdi><span
																							class="woocommerce-Price-currencySymbol">$</span>689.00</bdi></span></span>
																			<div class="rey-loopButtons">
																				<a href="https://demos.reytheme.com/san-francisco/product/comfortable-over-ear-headphones/"
																				   data-quantity="1"
																				   class="button product_type_variable add_to_cart_button rey-btn--hover"
																				   data-product_id="136"
																				   data-product_sku=""
																				   aria-label="Select options for “Comfortable over-ear headphones”"
																				   rel="nofollow"><span class="__text">Select options</span></a>
																				<span
																					id="woocommerce_loop_add_to_cart_link_describedby_136"
																					class="screen-reader-text">
                                                                  This product has multiple variants. The options may be chosen on the product page	</span>
																				<button
																					class="button rey-btn--hover rey-quickviewBtn js-rey-quickviewBtn"
																					data-id="136" title="QUICKVIEW">
																					QUICKVIEW
																				</button>
																			</div>
																		</div>
																	</div>
																</li>
																<li class="rey-swatches rey-swatches--stretch-labels product type-product post-905 status-publish first instock product_cat-accessories-cameras product_cat-action product_cat-cameras product_cat-dslr product_cat-lenses product_cat-mirrorless has-post-thumbnail shipping-taxable purchasable product-type-variable is-animated --shadow- --shadow-h-1 --extraImg-second --extraImg-mobile rey-wc-skin--proto rey-wc-loopAlign-left --uncropped splide__slide"
																	data-pid="905">
																	<div class="rey-productInner --box-styler">
																		<div class="rey-productThumbnail">
																			<a href="https://demos.reytheme.com/san-francisco/product/pocket-camera/"
																			   class="woocommerce-LoopProduct-link woocommerce-loop-product__link"
																			   aria-label="Pocket camera">
																				<img decoding="async" width="330"
																					 height="361"
																					 src="data:image/svg+xml,%3Csvg%20xmlns=&#39;http://www.w3.org/2000/svg&#39;%20viewBox=&#39;0%200%20330%20361&#39;%3E%3C/svg%3E"
																					 class="rey-productThumbnail__second"
																					 alt=""
																					 data-lazy-srcset="https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/04/40-330x361.jpg 330w, https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/04/40-274x300.jpg 274w, https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/04/40-936x1024.jpg 936w, https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/04/40-768x840.jpg 768w, https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/04/40-600x656.jpg 600w, https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/04/40.jpg 1024w"
																					 data-lazy-sizes="(max-width: 330px) 100vw, 330px"
																					 data-lazy-src="https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/04/40-330x361.jpg">
																				<noscript><img loading="lazy"
																							   decoding="async"
																							   width="330" height="361"
																							   src="https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/04/40-330x361.jpg"
																							   class="rey-productThumbnail__second"
																							   alt=""
																							   srcset="https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/04/40-330x361.jpg 330w, https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/04/40-274x300.jpg 274w, https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/04/40-936x1024.jpg 936w, https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/04/40-768x840.jpg 768w, https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/04/40-600x656.jpg 600w, https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/04/40.jpg 1024w"
																							   sizes="(max-width: 330px) 100vw, 330px"/>
																				</noscript>
																				<img decoding="async" width="330"
																					 height="361"
																					 src="data:image/svg+xml,%3Csvg%20xmlns=&#39;http://www.w3.org/2000/svg&#39;%20viewBox=&#39;0%200%20330%20361&#39;%3E%3C/svg%3E"
																					 class="rey-thumbImg img--1 attachment-woocommerce_thumbnail size-woocommerce_thumbnail"
																					 alt=""
																					 data-lazy-srcset="https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/04/39-330x361.jpg 330w, https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/04/39-274x300.jpg 274w, https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/04/39-936x1024.jpg 936w, https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/04/39-768x840.jpg 768w, https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/04/39-600x656.jpg 600w, https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/04/39.jpg 1024w"
																					 data-lazy-sizes="(max-width: 330px) 100vw, 330px"
																					 data-lazy-src="https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/04/39-330x361.jpg">
																				<noscript><img loading="lazy"
																							   decoding="async"
																							   width="330" height="361"
																							   src="https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/04/39-330x361.jpg"
																							   class="rey-thumbImg img--1 attachment-woocommerce_thumbnail size-woocommerce_thumbnail"
																							   alt=""
																							   srcset="https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/04/39-330x361.jpg 330w, https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/04/39-274x300.jpg 274w, https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/04/39-936x1024.jpg 936w, https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/04/39-768x840.jpg 768w, https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/04/39-600x656.jpg 600w, https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/04/39.jpg 1024w"
																							   sizes="(max-width: 330px) 100vw, 330px"/>
																				</noscript>
																			</a>
																			<div class="rey-thPos rey-thPos--top-right"
																				 data-position="top-right">
																				<div
																					class="rey-thPos-item --no-margins">
																					<button
																						class="--icon-style-rounded rey-wishlistBtn rey-wishlistBtn-link"
																						data-lazy-hidden=""
																						data-id="905"
																						title="Add to wishlist"
																						aria-label="Add to wishlist">
																						<svg aria-hidden="true"
																							 role="img"
																							 class="rey-icon rey-icon-heart rey-wishlistBtn-icon"
																							 viewBox="0 0 24 24">
																							<path
																								fill="var(--icon-fill, none)"
																								stroke="currentColor"
																								stroke-width="var(--stroke-width, 1.8px)"
																								stroke-linecap="round"
																								stroke-linejoin="round"
																								d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path>
																						</svg>
																					</button>
																				</div>
																			</div>
																		</div>
																		<div class="rey-loopDetails --padded">
																			<div data-attribute="color"
																				 data-position="first"
																				 class="rey-productVariations2 --single-attr  --side">
																				<form
																					class="variations_form cart --catalog"
																					action="https://demos.reytheme.com/san-francisco/product/pocket-camera/"
																					method="post"
																					enctype="multipart/form-data"
																					data-product_id="905"
																					data-product_variations="[{&quot;attributes&quot;:{&quot;attribute_pa_color&quot;:&quot;&quot;},&quot;availability_html&quot;:&quot;&quot;,&quot;backorders_allowed&quot;:false,&quot;dimensions&quot;:{&quot;length&quot;:&quot;&quot;,&quot;width&quot;:&quot;&quot;,&quot;height&quot;:&quot;&quot;},&quot;dimensions_html&quot;:&quot;N\/A&quot;,&quot;display_price&quot;:199,&quot;display_regular_price&quot;:199,&quot;image&quot;:{&quot;title&quot;:&quot;39&quot;,&quot;caption&quot;:&quot;&quot;,&quot;url&quot;:&quot;https:\/\/demos.reytheme.com\/san-francisco\/wp-content\/uploads\/sites\/24\/2022\/04\/39.jpg&quot;,&quot;alt&quot;:&quot;39&quot;,&quot;src&quot;:&quot;https:\/\/demos.reytheme.com\/san-francisco\/wp-content\/uploads\/sites\/24\/2022\/04\/39-600x656.jpg&quot;,&quot;srcset&quot;:&quot;https:\/\/demos.reytheme.com\/san-francisco\/wp-content\/uploads\/sites\/24\/2022\/04\/39-600x656.jpg 600w, https:\/\/demos.reytheme.com\/san-francisco\/wp-content\/uploads\/sites\/24\/2022\/04\/39-274x300.jpg 274w, https:\/\/demos.reytheme.com\/san-francisco\/wp-content\/uploads\/sites\/24\/2022\/04\/39-936x1024.jpg 936w, https:\/\/demos.reytheme.com\/san-francisco\/wp-content\/uploads\/sites\/24\/2022\/04\/39-768x840.jpg 768w, https:\/\/demos.reytheme.com\/san-francisco\/wp-content\/uploads\/sites\/24\/2022\/04\/39-330x361.jpg 330w, https:\/\/demos.reytheme.com\/san-francisco\/wp-content\/uploads\/sites\/24\/2022\/04\/39.jpg 1024w&quot;,&quot;sizes&quot;:&quot;(max-width: 600px) 100vw, 600px&quot;,&quot;full_src&quot;:&quot;https:\/\/demos.reytheme.com\/san-francisco\/wp-content\/uploads\/sites\/24\/2022\/04\/39.jpg&quot;,&quot;full_src_w&quot;:1024,&quot;full_src_h&quot;:1120,&quot;gallery_thumbnail_src&quot;:&quot;https:\/\/demos.reytheme.com\/san-francisco\/wp-content\/uploads\/sites\/24\/2022\/04\/39-100x100.jpg&quot;,&quot;gallery_thumbnail_src_w&quot;:100,&quot;gallery_thumbnail_src_h&quot;:100,&quot;thumb_src&quot;:&quot;https:\/\/demos.reytheme.com\/san-francisco\/wp-content\/uploads\/sites\/24\/2022\/04\/39-330x361.jpg&quot;,&quot;thumb_src_w&quot;:330,&quot;thumb_src_h&quot;:361,&quot;src_w&quot;:600,&quot;src_h&quot;:656},&quot;image_id&quot;:907,&quot;is_downloadable&quot;:false,&quot;is_in_stock&quot;:true,&quot;is_purchasable&quot;:true,&quot;is_sold_individually&quot;:&quot;no&quot;,&quot;is_virtual&quot;:false,&quot;max_qty&quot;:&quot;&quot;,&quot;min_qty&quot;:1,&quot;price_html&quot;:&quot;&quot;,&quot;sku&quot;:&quot;&quot;,&quot;variation_description&quot;:&quot;&quot;,&quot;variation_id&quot;:906,&quot;variation_is_active&quot;:true,&quot;variation_is_visible&quot;:true,&quot;weight&quot;:&quot;&quot;,&quot;weight_html&quot;:&quot;N\/A&quot;,&quot;stock_status&quot;:&quot;instock&quot;,&quot;step_qty&quot;:1}]"
																					data-atc-text="Add to cart">
																					<div class="variations">
																						<div class="__s-wrapper">
																							<select style="display:none"
																									id="pa_color905"
																									class=""
																									name="attribute_pa_color"
																									data-attribute_name="attribute_pa_color"
																									data-show_option_none="yes">
																								<option value="">Choose
																									an option
																								</option>
																								<option value="black">
																									Black
																								</option>
																								<option value="grey">
																									Grey
																								</option>
																							</select>
																							<div aria-label="color"
																								 data-attribute_name="attribute_pa_color"
																								 style=""
																								 class="rey-swatchList --type-color --light-tooltips --disabled-dim --deselection-clear">
																								<div title="Black"
																									 data-term-id="22"
																									 data-term-slug="black"
																									 data-attribute-name="pa_color"
																									 aria-label="Black"
																									 role="radio"
																									 aria-checked="false"
																									 class="rey-swatchList-item --type-color rey-swatchList-item--regular "
																									 data-description="">
																									<span
																										class="rey-swatchList-itemContent"
																										style="background: #45464c;"></span>
																								</div>
																								<div title="Grey"
																									 data-term-id="33"
																									 data-term-slug="grey"
																									 data-attribute-name="pa_color"
																									 aria-label="Grey"
																									 role="radio"
																									 aria-checked="false"
																									 class="rey-swatchList-item --type-color rey-swatchList-item--regular "
																									 data-description="">
																									<span
																										class="rey-swatchList-itemContent"
																										style="background: #dbdbdb;"></span>
																								</div>
																							</div>
																						</div>
																					</div>
																				</form>
																			</div>
																			<div class="rey-brandLink --catalog"><a
																					href="https://demos.reytheme.com/san-francisco/product-brand/quantech/">Quantech</a>
																			</div>
																			<h2 class="woocommerce-loop-product__title">
																				<a href="https://demos.reytheme.com/san-francisco/product/pocket-camera/">Pocket
																					camera</a></h2>
																			<div class="__break"></div>
																			<span class="price rey-loopPrice"><span
																					class="woocommerce-Price-amount amount"><bdi><span
																							class="woocommerce-Price-currencySymbol">$</span>199.00</bdi></span></span>
																			<div class="rey-loopButtons">
																				<a href="https://demos.reytheme.com/san-francisco/product/pocket-camera/"
																				   data-quantity="1"
																				   class="button product_type_variable add_to_cart_button rey-btn--hover"
																				   data-product_id="905"
																				   data-product_sku=""
																				   aria-label="Select options for “Pocket camera”"
																				   rel="nofollow"><span class="__text">Select options</span></a>
																				<span
																					id="woocommerce_loop_add_to_cart_link_describedby_905"
																					class="screen-reader-text">
                                                                  This product has multiple variants. The options may be chosen on the product page	</span>
																				<button
																					class="button rey-btn--hover rey-quickviewBtn js-rey-quickviewBtn"
																					data-id="905" title="QUICKVIEW">
																					QUICKVIEW
																				</button>
																			</div>
																		</div>
																	</div>
																</li>
																<li class="rey-swatches rey-swatches--stretch-labels product type-product post-981 status-publish instock product_cat-headphones product_cat-over-ear has-post-thumbnail shipping-taxable purchasable product-type-variable is-animated --shadow- --shadow-h-1 --extraImg-second --extraImg-mobile rey-wc-skin--proto rey-wc-loopAlign-left --uncropped splide__slide"
																	data-pid="981">
																	<div class="rey-productInner --box-styler">
																		<div class="rey-productThumbnail">
																			<a href="https://demos.reytheme.com/san-francisco/product/ultimate-over-ear-headphones/"
																			   class="woocommerce-LoopProduct-link woocommerce-loop-product__link"
																			   aria-label="Ultimate over-ear headphones">
																				<img decoding="async" width="330"
																					 height="361"
																					 src="data:image/svg+xml,%3Csvg%20xmlns=&#39;http://www.w3.org/2000/svg&#39;%20viewBox=&#39;0%200%20330%20361&#39;%3E%3C/svg%3E"
																					 class="rey-productThumbnail__second"
																					 alt=""
																					 data-lazy-srcset="https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/05/50-330x361.jpg 330w, https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/05/50-274x300.jpg 274w, https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/05/50-936x1024.jpg 936w, https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/05/50-768x840.jpg 768w, https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/05/50-600x656.jpg 600w, https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/05/50.jpg 1024w"
																					 data-lazy-sizes="(max-width: 330px) 100vw, 330px"
																					 data-lazy-src="https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/05/50-330x361.jpg">
																				<noscript><img loading="lazy"
																							   decoding="async"
																							   width="330" height="361"
																							   src="https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/05/50-330x361.jpg"
																							   class="rey-productThumbnail__second"
																							   alt=""
																							   srcset="https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/05/50-330x361.jpg 330w, https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/05/50-274x300.jpg 274w, https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/05/50-936x1024.jpg 936w, https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/05/50-768x840.jpg 768w, https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/05/50-600x656.jpg 600w, https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/05/50.jpg 1024w"
																							   sizes="(max-width: 330px) 100vw, 330px"/>
																				</noscript>
																				<img decoding="async" width="330"
																					 height="361"
																					 src="data:image/svg+xml,%3Csvg%20xmlns=&#39;http://www.w3.org/2000/svg&#39;%20viewBox=&#39;0%200%20330%20361&#39;%3E%3C/svg%3E"
																					 class="rey-thumbImg img--1 attachment-woocommerce_thumbnail size-woocommerce_thumbnail"
																					 alt=""
																					 data-lazy-srcset="https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/05/49-330x361.jpg 330w, https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/05/49-274x300.jpg 274w, https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/05/49-936x1024.jpg 936w, https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/05/49-768x840.jpg 768w, https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/05/49-600x656.jpg 600w, https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/05/49.jpg 1024w"
																					 data-lazy-sizes="(max-width: 330px) 100vw, 330px"
																					 data-lazy-src="https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/05/49-330x361.jpg">
																				<noscript><img loading="lazy"
																							   decoding="async"
																							   width="330" height="361"
																							   src="https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/05/49-330x361.jpg"
																							   class="rey-thumbImg img--1 attachment-woocommerce_thumbnail size-woocommerce_thumbnail"
																							   alt=""
																							   srcset="https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/05/49-330x361.jpg 330w, https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/05/49-274x300.jpg 274w, https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/05/49-936x1024.jpg 936w, https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/05/49-768x840.jpg 768w, https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/05/49-600x656.jpg 600w, https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/05/49.jpg 1024w"
																							   sizes="(max-width: 330px) 100vw, 330px"/>
																				</noscript>
																			</a>
																			<div class="rey-thPos rey-thPos--top-right"
																				 data-position="top-right">
																				<div
																					class="rey-thPos-item --no-margins">
																					<button
																						class="--icon-style-rounded rey-wishlistBtn rey-wishlistBtn-link"
																						data-lazy-hidden=""
																						data-id="981"
																						title="Add to wishlist"
																						aria-label="Add to wishlist">
																						<svg aria-hidden="true"
																							 role="img"
																							 class="rey-icon rey-icon-heart rey-wishlistBtn-icon"
																							 viewBox="0 0 24 24">
																							<path
																								fill="var(--icon-fill, none)"
																								stroke="currentColor"
																								stroke-width="var(--stroke-width, 1.8px)"
																								stroke-linecap="round"
																								stroke-linejoin="round"
																								d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path>
																						</svg>
																					</button>
																				</div>
																			</div>
																		</div>
																		<div class="rey-loopDetails --padded">
																			<div data-attribute="color"
																				 data-position="first"
																				 class="rey-productVariations2 --single-attr  --side">
																				<form
																					class="variations_form cart --catalog"
																					action="https://demos.reytheme.com/san-francisco/product/ultimate-over-ear-headphones/"
																					method="post"
																					enctype="multipart/form-data"
																					data-product_id="981"
																					data-product_variations="[{&quot;attributes&quot;:{&quot;attribute_pa_color&quot;:&quot;&quot;},&quot;availability_html&quot;:&quot;&quot;,&quot;backorders_allowed&quot;:false,&quot;dimensions&quot;:{&quot;length&quot;:&quot;&quot;,&quot;width&quot;:&quot;&quot;,&quot;height&quot;:&quot;&quot;},&quot;dimensions_html&quot;:&quot;N\/A&quot;,&quot;display_price&quot;:789,&quot;display_regular_price&quot;:789,&quot;image&quot;:{&quot;title&quot;:&quot;49&quot;,&quot;caption&quot;:&quot;&quot;,&quot;url&quot;:&quot;https:\/\/demos.reytheme.com\/san-francisco\/wp-content\/uploads\/sites\/24\/2022\/05\/49.jpg&quot;,&quot;alt&quot;:&quot;49&quot;,&quot;src&quot;:&quot;https:\/\/demos.reytheme.com\/san-francisco\/wp-content\/uploads\/sites\/24\/2022\/05\/49-600x656.jpg&quot;,&quot;srcset&quot;:&quot;https:\/\/demos.reytheme.com\/san-francisco\/wp-content\/uploads\/sites\/24\/2022\/05\/49-600x656.jpg 600w, https:\/\/demos.reytheme.com\/san-francisco\/wp-content\/uploads\/sites\/24\/2022\/05\/49-274x300.jpg 274w, https:\/\/demos.reytheme.com\/san-francisco\/wp-content\/uploads\/sites\/24\/2022\/05\/49-936x1024.jpg 936w, https:\/\/demos.reytheme.com\/san-francisco\/wp-content\/uploads\/sites\/24\/2022\/05\/49-768x840.jpg 768w, https:\/\/demos.reytheme.com\/san-francisco\/wp-content\/uploads\/sites\/24\/2022\/05\/49-330x361.jpg 330w, https:\/\/demos.reytheme.com\/san-francisco\/wp-content\/uploads\/sites\/24\/2022\/05\/49.jpg 1024w&quot;,&quot;sizes&quot;:&quot;(max-width: 600px) 100vw, 600px&quot;,&quot;full_src&quot;:&quot;https:\/\/demos.reytheme.com\/san-francisco\/wp-content\/uploads\/sites\/24\/2022\/05\/49.jpg&quot;,&quot;full_src_w&quot;:1024,&quot;full_src_h&quot;:1120,&quot;gallery_thumbnail_src&quot;:&quot;https:\/\/demos.reytheme.com\/san-francisco\/wp-content\/uploads\/sites\/24\/2022\/05\/49-100x100.jpg&quot;,&quot;gallery_thumbnail_src_w&quot;:100,&quot;gallery_thumbnail_src_h&quot;:100,&quot;thumb_src&quot;:&quot;https:\/\/demos.reytheme.com\/san-francisco\/wp-content\/uploads\/sites\/24\/2022\/05\/49-330x361.jpg&quot;,&quot;thumb_src_w&quot;:330,&quot;thumb_src_h&quot;:361,&quot;src_w&quot;:600,&quot;src_h&quot;:656},&quot;image_id&quot;:983,&quot;is_downloadable&quot;:false,&quot;is_in_stock&quot;:true,&quot;is_purchasable&quot;:true,&quot;is_sold_individually&quot;:&quot;no&quot;,&quot;is_virtual&quot;:false,&quot;max_qty&quot;:&quot;&quot;,&quot;min_qty&quot;:1,&quot;price_html&quot;:&quot;&quot;,&quot;sku&quot;:&quot;&quot;,&quot;variation_description&quot;:&quot;&quot;,&quot;variation_id&quot;:982,&quot;variation_is_active&quot;:true,&quot;variation_is_visible&quot;:true,&quot;weight&quot;:&quot;&quot;,&quot;weight_html&quot;:&quot;N\/A&quot;,&quot;stock_status&quot;:&quot;instock&quot;,&quot;step_qty&quot;:1}]"
																					data-atc-text="Add to cart">
																					<div class="variations">
																						<div class="__s-wrapper">
																							<select style="display:none"
																									id="pa_color981"
																									class=""
																									name="attribute_pa_color"
																									data-attribute_name="attribute_pa_color"
																									data-show_option_none="yes">
																								<option value="">Choose
																									an option
																								</option>
																								<option value="black">
																									Black
																								</option>
																								<option value="brown">
																									Brown
																								</option>
																								<option value="grey">
																									Grey
																								</option>
																							</select>
																							<div aria-label="color"
																								 data-attribute_name="attribute_pa_color"
																								 style=""
																								 class="rey-swatchList --type-color --light-tooltips --disabled-dim --deselection-clear">
																								<div title="Black"
																									 data-term-id="22"
																									 data-term-slug="black"
																									 data-attribute-name="pa_color"
																									 aria-label="Black"
																									 role="radio"
																									 aria-checked="false"
																									 class="rey-swatchList-item --type-color rey-swatchList-item--regular "
																									 data-description="">
																									<span
																										class="rey-swatchList-itemContent"
																										style="background: #45464c;"></span>
																								</div>
																								<div title="Brown"
																									 data-term-id="24"
																									 data-term-slug="brown"
																									 data-attribute-name="pa_color"
																									 aria-label="Brown"
																									 role="radio"
																									 aria-checked="false"
																									 class="rey-swatchList-item --type-color rey-swatchList-item--regular "
																									 data-description="">
																									<span
																										class="rey-swatchList-itemContent"
																										style="background: #956b45;"></span>
																								</div>
																								<div title="Grey"
																									 data-term-id="33"
																									 data-term-slug="grey"
																									 data-attribute-name="pa_color"
																									 aria-label="Grey"
																									 role="radio"
																									 aria-checked="false"
																									 class="rey-swatchList-item --type-color rey-swatchList-item--regular "
																									 data-description="">
																									<span
																										class="rey-swatchList-itemContent"
																										style="background: #dbdbdb;"></span>
																								</div>
																								<a href="https://demos.reytheme.com/san-francisco/product/ultimate-over-ear-headphones/"
																								   class="rey-swatchList-more"
																								   title="Click to see 1 more">1+</a>
																							</div>
																						</div>
																					</div>
																				</form>
																			</div>
																			<div class="rey-brandLink --catalog"><a
																					href="https://demos.reytheme.com/san-francisco/product-brand/quantech/">Quantech</a>
																			</div>
																			<h2 class="woocommerce-loop-product__title">
																				<a href="https://demos.reytheme.com/san-francisco/product/ultimate-over-ear-headphones/">Ultimate
																					over-ear headphones</a></h2>
																			<div class="__break"></div>
																			<span class="price rey-loopPrice"><span
																					class="woocommerce-Price-amount amount"><bdi><span
																							class="woocommerce-Price-currencySymbol">$</span>789.00</bdi></span></span>
																			<div class="rey-loopButtons">
																				<a href="https://demos.reytheme.com/san-francisco/product/ultimate-over-ear-headphones/"
																				   data-quantity="1"
																				   class="button product_type_variable add_to_cart_button rey-btn--hover"
																				   data-product_id="981"
																				   data-product_sku=""
																				   aria-label="Select options for “Ultimate over-ear headphones”"
																				   rel="nofollow"><span class="__text">Select options</span></a>
																				<span
																					id="woocommerce_loop_add_to_cart_link_describedby_981"
																					class="screen-reader-text">
                                                                  This product has multiple variants. The options may be chosen on the product page	</span>
																				<button
																					class="button rey-btn--hover rey-quickviewBtn js-rey-quickviewBtn"
																					data-id="981" title="QUICKVIEW">
																					QUICKVIEW
																				</button>
																			</div>
																		</div>
																	</div>
																</li>
																<li class="rey-swatches rey-swatches--stretch-labels product type-product post-119 status-publish instock product_cat-bluetooth product_cat-home-audio product_cat-sets product_cat-smart product_cat-speakers product_tag-bluetooth product_tag-portable product_tag-speaker has-post-thumbnail shipping-taxable purchasable product-type-variable is-animated --shadow- --shadow-h-1 --extraImg-second --extraImg-mobile rey-wc-skin--proto rey-wc-loopAlign-left --uncropped splide__slide"
																	data-pid="119">
																	<div class="rey-productInner --box-styler">
																		<div class="rey-productThumbnail">
																			<a href="https://demos.reytheme.com/san-francisco/product/innovative-wireless-home-speaker/"
																			   class="woocommerce-LoopProduct-link woocommerce-loop-product__link"
																			   aria-label="Innovative wireless home speaker">
																				<img decoding="async" width="330"
																					 height="361"
																					 src="data:image/svg+xml,%3Csvg%20xmlns=&#39;http://www.w3.org/2000/svg&#39;%20viewBox=&#39;0%200%20330%20361&#39;%3E%3C/svg%3E"
																					 class="rey-productThumbnail__second"
																					 alt=""
																					 data-lazy-srcset="https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/02/2-330x361.jpg 330w, https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/02/2-274x300.jpg 274w, https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/02/2-936x1024.jpg 936w, https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/02/2-768x840.jpg 768w, https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/02/2-600x656.jpg 600w, https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/02/2.jpg 1024w"
																					 data-lazy-sizes="(max-width: 330px) 100vw, 330px"
																					 data-lazy-src="https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/02/2-330x361.jpg">
																				<noscript><img loading="lazy"
																							   decoding="async"
																							   width="330" height="361"
																							   src="https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/02/2-330x361.jpg"
																							   class="rey-productThumbnail__second"
																							   alt=""
																							   srcset="https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/02/2-330x361.jpg 330w, https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/02/2-274x300.jpg 274w, https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/02/2-936x1024.jpg 936w, https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/02/2-768x840.jpg 768w, https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/02/2-600x656.jpg 600w, https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/02/2.jpg 1024w"
																							   sizes="(max-width: 330px) 100vw, 330px"/>
																				</noscript>
																				<img decoding="async" width="330"
																					 height="361"
																					 src="data:image/svg+xml,%3Csvg%20xmlns=&#39;http://www.w3.org/2000/svg&#39;%20viewBox=&#39;0%200%20330%20361&#39;%3E%3C/svg%3E"
																					 class="rey-thumbImg img--1 attachment-woocommerce_thumbnail size-woocommerce_thumbnail"
																					 alt=""
																					 data-lazy-srcset="https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/02/1-330x361.jpg 330w, https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/02/1-274x300.jpg 274w, https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/02/1-936x1024.jpg 936w, https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/02/1-768x840.jpg 768w, https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/02/1-600x656.jpg 600w, https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/02/1.jpg 1024w"
																					 data-lazy-sizes="(max-width: 330px) 100vw, 330px"
																					 data-lazy-src="https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/02/1-330x361.jpg">
																				<noscript><img loading="lazy"
																							   decoding="async"
																							   width="330" height="361"
																							   src="https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/02/1-330x361.jpg"
																							   class="rey-thumbImg img--1 attachment-woocommerce_thumbnail size-woocommerce_thumbnail"
																							   alt=""
																							   srcset="https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/02/1-330x361.jpg 330w, https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/02/1-274x300.jpg 274w, https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/02/1-936x1024.jpg 936w, https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/02/1-768x840.jpg 768w, https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/02/1-600x656.jpg 600w, https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/02/1.jpg 1024w"
																							   sizes="(max-width: 330px) 100vw, 330px"/>
																				</noscript>
																			</a>
																			<div class="rey-thPos rey-thPos--top-right"
																				 data-position="top-right">
																				<div
																					class="rey-thPos-item --no-margins">
																					<button
																						class="--icon-style-rounded rey-wishlistBtn rey-wishlistBtn-link"
																						data-lazy-hidden=""
																						data-id="119"
																						title="Add to wishlist"
																						aria-label="Add to wishlist">
																						<svg aria-hidden="true"
																							 role="img"
																							 class="rey-icon rey-icon-heart rey-wishlistBtn-icon"
																							 viewBox="0 0 24 24">
																							<path
																								fill="var(--icon-fill, none)"
																								stroke="currentColor"
																								stroke-width="var(--stroke-width, 1.8px)"
																								stroke-linecap="round"
																								stroke-linejoin="round"
																								d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path>
																						</svg>
																					</button>
																				</div>
																			</div>
																		</div>
																		<div class="rey-loopDetails --padded">
																			<div data-attribute="color"
																				 data-position="first"
																				 class="rey-productVariations2 --single-attr  --side">
																				<form
																					class="variations_form cart --catalog"
																					action="https://demos.reytheme.com/san-francisco/product/innovative-wireless-home-speaker/"
																					method="post"
																					enctype="multipart/form-data"
																					data-product_id="119"
																					data-product_variations="[{&quot;attributes&quot;:{&quot;attribute_pa_color&quot;:&quot;&quot;},&quot;availability_html&quot;:&quot;&quot;,&quot;backorders_allowed&quot;:false,&quot;dimensions&quot;:{&quot;length&quot;:&quot;&quot;,&quot;width&quot;:&quot;&quot;,&quot;height&quot;:&quot;&quot;},&quot;dimensions_html&quot;:&quot;N\/A&quot;,&quot;display_price&quot;:1299,&quot;display_regular_price&quot;:1299,&quot;image&quot;:{&quot;title&quot;:&quot;1&quot;,&quot;caption&quot;:&quot;&quot;,&quot;url&quot;:&quot;https:\/\/demos.reytheme.com\/san-francisco\/wp-content\/uploads\/sites\/24\/2022\/02\/1.jpg&quot;,&quot;alt&quot;:&quot;1&quot;,&quot;src&quot;:&quot;https:\/\/demos.reytheme.com\/san-francisco\/wp-content\/uploads\/sites\/24\/2022\/02\/1-600x656.jpg&quot;,&quot;srcset&quot;:&quot;https:\/\/demos.reytheme.com\/san-francisco\/wp-content\/uploads\/sites\/24\/2022\/02\/1-600x656.jpg 600w, https:\/\/demos.reytheme.com\/san-francisco\/wp-content\/uploads\/sites\/24\/2022\/02\/1-274x300.jpg 274w, https:\/\/demos.reytheme.com\/san-francisco\/wp-content\/uploads\/sites\/24\/2022\/02\/1-936x1024.jpg 936w, https:\/\/demos.reytheme.com\/san-francisco\/wp-content\/uploads\/sites\/24\/2022\/02\/1-768x840.jpg 768w, https:\/\/demos.reytheme.com\/san-francisco\/wp-content\/uploads\/sites\/24\/2022\/02\/1-330x361.jpg 330w, https:\/\/demos.reytheme.com\/san-francisco\/wp-content\/uploads\/sites\/24\/2022\/02\/1.jpg 1024w&quot;,&quot;sizes&quot;:&quot;(max-width: 600px) 100vw, 600px&quot;,&quot;full_src&quot;:&quot;https:\/\/demos.reytheme.com\/san-francisco\/wp-content\/uploads\/sites\/24\/2022\/02\/1.jpg&quot;,&quot;full_src_w&quot;:1024,&quot;full_src_h&quot;:1120,&quot;gallery_thumbnail_src&quot;:&quot;https:\/\/demos.reytheme.com\/san-francisco\/wp-content\/uploads\/sites\/24\/2022\/02\/1-100x100.jpg&quot;,&quot;gallery_thumbnail_src_w&quot;:100,&quot;gallery_thumbnail_src_h&quot;:100,&quot;thumb_src&quot;:&quot;https:\/\/demos.reytheme.com\/san-francisco\/wp-content\/uploads\/sites\/24\/2022\/02\/1-330x361.jpg&quot;,&quot;thumb_src_w&quot;:330,&quot;thumb_src_h&quot;:361,&quot;src_w&quot;:600,&quot;src_h&quot;:656},&quot;image_id&quot;:120,&quot;is_downloadable&quot;:false,&quot;is_in_stock&quot;:true,&quot;is_purchasable&quot;:true,&quot;is_sold_individually&quot;:&quot;no&quot;,&quot;is_virtual&quot;:false,&quot;max_qty&quot;:&quot;&quot;,&quot;min_qty&quot;:1,&quot;price_html&quot;:&quot;&quot;,&quot;sku&quot;:&quot;&quot;,&quot;variation_description&quot;:&quot;&quot;,&quot;variation_id&quot;:890,&quot;variation_is_active&quot;:true,&quot;variation_is_visible&quot;:true,&quot;weight&quot;:&quot;&quot;,&quot;weight_html&quot;:&quot;N\/A&quot;,&quot;stock_status&quot;:&quot;instock&quot;,&quot;step_qty&quot;:1}]"
																					data-atc-text="Add to cart">
																					<div class="variations">
																						<div class="__s-wrapper">
																							<select style="display:none"
																									id="pa_color119"
																									class=""
																									name="attribute_pa_color"
																									data-attribute_name="attribute_pa_color"
																									data-show_option_none="yes">
																								<option value="">Choose
																									an option
																								</option>
																								<option value="beige">
																									Beige
																								</option>
																								<option value="grey">
																									Grey
																								</option>
																								<option value="red">
																									Red
																								</option>
																							</select>
																							<div aria-label="color"
																								 data-attribute_name="attribute_pa_color"
																								 style=""
																								 class="rey-swatchList --type-color --light-tooltips --disabled-dim --deselection-clear">
																								<div title="Beige"
																									 data-term-id="20"
																									 data-term-slug="beige"
																									 data-attribute-name="pa_color"
																									 aria-label="Beige"
																									 role="radio"
																									 aria-checked="false"
																									 class="rey-swatchList-item --type-color rey-swatchList-item--regular "
																									 data-description="">
																									<span
																										class="rey-swatchList-itemContent"
																										style="background: #dfc5a0;"></span>
																								</div>
																								<div title="Grey"
																									 data-term-id="33"
																									 data-term-slug="grey"
																									 data-attribute-name="pa_color"
																									 aria-label="Grey"
																									 role="radio"
																									 aria-checked="false"
																									 class="rey-swatchList-item --type-color rey-swatchList-item--regular "
																									 data-description="">
																									<span
																										class="rey-swatchList-itemContent"
																										style="background: #dbdbdb;"></span>
																								</div>
																								<div title="Red"
																									 data-term-id="43"
																									 data-term-slug="red"
																									 data-attribute-name="pa_color"
																									 aria-label="Red"
																									 role="radio"
																									 aria-checked="false"
																									 class="rey-swatchList-item --type-color rey-swatchList-item--regular "
																									 data-description="">
																									<span
																										class="rey-swatchList-itemContent"
																										style="background: #e75243;"></span>
																								</div>
																							</div>
																						</div>
																					</div>
																				</form>
																			</div>
																			<div class="rey-brandLink --catalog"><a
																					href="https://demos.reytheme.com/san-francisco/product-brand/quantech/">Quantech</a>
																			</div>
																			<h2 class="woocommerce-loop-product__title">
																				<a href="https://demos.reytheme.com/san-francisco/product/innovative-wireless-home-speaker/">Innovative
																					wireless home speaker</a></h2>
																			<div class="__break"></div>
																			<span class="price rey-loopPrice"><span
																					class="woocommerce-Price-amount amount"><bdi><span
																							class="woocommerce-Price-currencySymbol">$</span>1,299.00</bdi></span></span>
																			<div class="rey-loopButtons">
																				<a href="https://demos.reytheme.com/san-francisco/product/innovative-wireless-home-speaker/"
																				   data-quantity="1"
																				   class="button product_type_variable add_to_cart_button rey-btn--hover"
																				   data-product_id="119"
																				   data-product_sku=""
																				   aria-label="Select options for “Innovative wireless home speaker”"
																				   rel="nofollow"><span class="__text">Select options</span></a>
																				<span
																					id="woocommerce_loop_add_to_cart_link_describedby_119"
																					class="screen-reader-text">
                                                                  This product has multiple variants. The options may be chosen on the product page	</span>
																				<button
																					class="button rey-btn--hover rey-quickviewBtn js-rey-quickviewBtn"
																					data-id="119" title="QUICKVIEW">
																					QUICKVIEW
																				</button>
																			</div>
																		</div>
																	</div>
																</li>
																<li class="rey-swatches rey-swatches--stretch-labels product type-product post-1015 status-publish last instock product_cat-accessories product_cat-chargers has-post-thumbnail shipping-taxable purchasable product-type-variable is-animated --shadow- --shadow-h-1 --extraImg-second --extraImg-mobile rey-wc-skin--proto rey-wc-loopAlign-left --uncropped splide__slide"
																	data-pid="1015">
																	<div class="rey-productInner --box-styler">
																		<div class="rey-productThumbnail">
																			<a href="https://demos.reytheme.com/san-francisco/product/magsafe-charger/"
																			   class="woocommerce-LoopProduct-link woocommerce-loop-product__link"
																			   aria-label="MagSafe Charger">
																				<img decoding="async" width="330"
																					 height="361"
																					 src="data:image/svg+xml,%3Csvg%20xmlns=&#39;http://www.w3.org/2000/svg&#39;%20viewBox=&#39;0%200%20330%20361&#39;%3E%3C/svg%3E"
																					 class="rey-productThumbnail__second"
																					 alt=""
																					 data-lazy-srcset="https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/05/73-330x361.jpg 330w, https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/05/73-274x300.jpg 274w, https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/05/73-936x1024.jpg 936w, https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/05/73-768x840.jpg 768w, https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/05/73-600x656.jpg 600w, https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/05/73.jpg 1024w"
																					 data-lazy-sizes="(max-width: 330px) 100vw, 330px"
																					 data-lazy-src="https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/05/73-330x361.jpg">
																				<noscript><img loading="lazy"
																							   decoding="async"
																							   width="330" height="361"
																							   src="https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/05/73-330x361.jpg"
																							   class="rey-productThumbnail__second"
																							   alt=""
																							   srcset="https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/05/73-330x361.jpg 330w, https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/05/73-274x300.jpg 274w, https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/05/73-936x1024.jpg 936w, https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/05/73-768x840.jpg 768w, https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/05/73-600x656.jpg 600w, https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/05/73.jpg 1024w"
																							   sizes="(max-width: 330px) 100vw, 330px"/>
																				</noscript>
																				<img decoding="async" width="330"
																					 height="361"
																					 src="data:image/svg+xml,%3Csvg%20xmlns=&#39;http://www.w3.org/2000/svg&#39;%20viewBox=&#39;0%200%20330%20361&#39;%3E%3C/svg%3E"
																					 class="rey-thumbImg img--1 attachment-woocommerce_thumbnail size-woocommerce_thumbnail"
																					 alt=""
																					 data-lazy-srcset="https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/05/72-330x361.jpg 330w, https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/05/72-274x300.jpg 274w, https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/05/72-936x1024.jpg 936w, https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/05/72-768x840.jpg 768w, https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/05/72-600x656.jpg 600w, https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/05/72.jpg 1024w"
																					 data-lazy-sizes="(max-width: 330px) 100vw, 330px"
																					 data-lazy-src="https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/05/72-330x361.jpg">
																				<noscript><img loading="lazy"
																							   decoding="async"
																							   width="330" height="361"
																							   src="https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/05/72-330x361.jpg"
																							   class="rey-thumbImg img--1 attachment-woocommerce_thumbnail size-woocommerce_thumbnail"
																							   alt=""
																							   srcset="https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/05/72-330x361.jpg 330w, https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/05/72-274x300.jpg 274w, https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/05/72-936x1024.jpg 936w, https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/05/72-768x840.jpg 768w, https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/05/72-600x656.jpg 600w, https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/05/72.jpg 1024w"
																							   sizes="(max-width: 330px) 100vw, 330px"/>
																				</noscript>
																			</a>
																			<div class="rey-thPos rey-thPos--top-right"
																				 data-position="top-right">
																				<div
																					class="rey-thPos-item --no-margins">
																					<button
																						class="--icon-style-rounded rey-wishlistBtn rey-wishlistBtn-link"
																						data-lazy-hidden=""
																						data-id="1015"
																						title="Add to wishlist"
																						aria-label="Add to wishlist">
																						<svg aria-hidden="true"
																							 role="img"
																							 class="rey-icon rey-icon-heart rey-wishlistBtn-icon"
																							 viewBox="0 0 24 24">
																							<path
																								fill="var(--icon-fill, none)"
																								stroke="currentColor"
																								stroke-width="var(--stroke-width, 1.8px)"
																								stroke-linecap="round"
																								stroke-linejoin="round"
																								d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path>
																						</svg>
																					</button>
																				</div>
																			</div>
																		</div>
																		<div class="rey-loopDetails --padded">
																			<div data-attribute="color"
																				 data-position="first"
																				 class="rey-productVariations2 --single-attr  --side">
																				<form
																					class="variations_form cart --catalog"
																					action="https://demos.reytheme.com/san-francisco/product/magsafe-charger/"
																					method="post"
																					enctype="multipart/form-data"
																					data-product_id="1015"
																					data-product_variations="[{&quot;attributes&quot;:{&quot;attribute_pa_color&quot;:&quot;&quot;},&quot;availability_html&quot;:&quot;&quot;,&quot;backorders_allowed&quot;:false,&quot;dimensions&quot;:{&quot;length&quot;:&quot;&quot;,&quot;width&quot;:&quot;&quot;,&quot;height&quot;:&quot;&quot;},&quot;dimensions_html&quot;:&quot;N\/A&quot;,&quot;display_price&quot;:159,&quot;display_regular_price&quot;:159,&quot;image&quot;:{&quot;title&quot;:&quot;72&quot;,&quot;caption&quot;:&quot;&quot;,&quot;url&quot;:&quot;https:\/\/demos.reytheme.com\/san-francisco\/wp-content\/uploads\/sites\/24\/2022\/05\/72.jpg&quot;,&quot;alt&quot;:&quot;72&quot;,&quot;src&quot;:&quot;https:\/\/demos.reytheme.com\/san-francisco\/wp-content\/uploads\/sites\/24\/2022\/05\/72-600x656.jpg&quot;,&quot;srcset&quot;:&quot;https:\/\/demos.reytheme.com\/san-francisco\/wp-content\/uploads\/sites\/24\/2022\/05\/72-600x656.jpg 600w, https:\/\/demos.reytheme.com\/san-francisco\/wp-content\/uploads\/sites\/24\/2022\/05\/72-274x300.jpg 274w, https:\/\/demos.reytheme.com\/san-francisco\/wp-content\/uploads\/sites\/24\/2022\/05\/72-936x1024.jpg 936w, https:\/\/demos.reytheme.com\/san-francisco\/wp-content\/uploads\/sites\/24\/2022\/05\/72-768x840.jpg 768w, https:\/\/demos.reytheme.com\/san-francisco\/wp-content\/uploads\/sites\/24\/2022\/05\/72-330x361.jpg 330w, https:\/\/demos.reytheme.com\/san-francisco\/wp-content\/uploads\/sites\/24\/2022\/05\/72.jpg 1024w&quot;,&quot;sizes&quot;:&quot;(max-width: 600px) 100vw, 600px&quot;,&quot;full_src&quot;:&quot;https:\/\/demos.reytheme.com\/san-francisco\/wp-content\/uploads\/sites\/24\/2022\/05\/72.jpg&quot;,&quot;full_src_w&quot;:1024,&quot;full_src_h&quot;:1120,&quot;gallery_thumbnail_src&quot;:&quot;https:\/\/demos.reytheme.com\/san-francisco\/wp-content\/uploads\/sites\/24\/2022\/05\/72-100x100.jpg&quot;,&quot;gallery_thumbnail_src_w&quot;:100,&quot;gallery_thumbnail_src_h&quot;:100,&quot;thumb_src&quot;:&quot;https:\/\/demos.reytheme.com\/san-francisco\/wp-content\/uploads\/sites\/24\/2022\/05\/72-330x361.jpg&quot;,&quot;thumb_src_w&quot;:330,&quot;thumb_src_h&quot;:361,&quot;src_w&quot;:600,&quot;src_h&quot;:656},&quot;image_id&quot;:1017,&quot;is_downloadable&quot;:false,&quot;is_in_stock&quot;:true,&quot;is_purchasable&quot;:true,&quot;is_sold_individually&quot;:&quot;no&quot;,&quot;is_virtual&quot;:false,&quot;max_qty&quot;:&quot;&quot;,&quot;min_qty&quot;:1,&quot;price_html&quot;:&quot;&quot;,&quot;sku&quot;:&quot;&quot;,&quot;variation_description&quot;:&quot;&quot;,&quot;variation_id&quot;:1016,&quot;variation_is_active&quot;:true,&quot;variation_is_visible&quot;:true,&quot;weight&quot;:&quot;&quot;,&quot;weight_html&quot;:&quot;N\/A&quot;,&quot;stock_status&quot;:&quot;instock&quot;,&quot;step_qty&quot;:1}]"
																					data-atc-text="Add to cart">
																					<div class="variations">
																						<div class="__s-wrapper">
																							<select style="display:none"
																									id="pa_color1015"
																									class=""
																									name="attribute_pa_color"
																									data-attribute_name="attribute_pa_color"
																									data-show_option_none="yes">
																								<option value="">Choose
																									an option
																								</option>
																								<option value="black">
																									Black
																								</option>
																								<option value="grey">
																									Grey
																								</option>
																							</select>
																							<div aria-label="color"
																								 data-attribute_name="attribute_pa_color"
																								 style=""
																								 class="rey-swatchList --type-color --light-tooltips --disabled-dim --deselection-clear">
																								<div title="Black"
																									 data-term-id="22"
																									 data-term-slug="black"
																									 data-attribute-name="pa_color"
																									 aria-label="Black"
																									 role="radio"
																									 aria-checked="false"
																									 class="rey-swatchList-item --type-color rey-swatchList-item--regular "
																									 data-description="">
																									<span
																										class="rey-swatchList-itemContent"
																										style="background: #45464c;"></span>
																								</div>
																								<div title="Grey"
																									 data-term-id="33"
																									 data-term-slug="grey"
																									 data-attribute-name="pa_color"
																									 aria-label="Grey"
																									 role="radio"
																									 aria-checked="false"
																									 class="rey-swatchList-item --type-color rey-swatchList-item--regular "
																									 data-description="">
																									<span
																										class="rey-swatchList-itemContent"
																										style="background: #dbdbdb;"></span>
																								</div>
																							</div>
																						</div>
																					</div>
																				</form>
																			</div>
																			<div class="rey-brandLink --catalog"><a
																					href="https://demos.reytheme.com/san-francisco/product-brand/quantech/">Quantech</a>
																			</div>
																			<h2 class="woocommerce-loop-product__title">
																				<a href="https://demos.reytheme.com/san-francisco/product/magsafe-charger/">MagSafe
																					Charger</a></h2>
																			<div class="__break"></div>
																			<span class="price rey-loopPrice"><span
																					class="woocommerce-Price-amount amount"><bdi><span
																							class="woocommerce-Price-currencySymbol">$</span>159.00</bdi></span></span>
																			<div class="rey-loopButtons">
																				<a href="https://demos.reytheme.com/san-francisco/product/magsafe-charger/"
																				   data-quantity="1"
																				   class="button product_type_variable add_to_cart_button rey-btn--hover"
																				   data-product_id="1015"
																				   data-product_sku=""
																				   aria-label="Select options for “MagSafe Charger”"
																				   rel="nofollow"><span class="__text">Select options</span></a>
																				<span
																					id="woocommerce_loop_add_to_cart_link_describedby_1015"
																					class="screen-reader-text">
                                                                  This product has multiple variants. The options may be chosen on the product page	</span>
																				<button
																					class="button rey-btn--hover rey-quickviewBtn js-rey-quickviewBtn"
																					data-id="1015" title="QUICKVIEW">
																					QUICKVIEW
																				</button>
																			</div>
																		</div>
																	</div>
																</li>
															</ul>
														</div>
														<div
															class="reyEl-productGrid-carouselNav __arrows-3c5a705 --dnone-md --dnone-sm">
															<div class="rey-arrowSvg rey-arrowSvg--left "
																 data-dir="&lt;">
																<svg xmlns="http://www.w3.org/2000/svg"
																	 viewBox="0 0 26 12">
																	<path
																		d="M19.8 12L26 6L19.9 -5.33279e-07L18.4 1.4L22.1 5L6.11959e-07 5L4.37114e-07 7L22.1 7L18.4 10.6L19.8 12Z"></path>
																</svg>
															</div>
															<div class="rey-arrowSvg rey-arrowSvg--right "
																 data-dir="&gt;">
																<svg xmlns="http://www.w3.org/2000/svg"
																	 viewBox="0 0 26 12">
																	<path
																		d="M19.8 12L26 6L19.9 -5.33279e-07L18.4 1.4L22.1 5L6.11959e-07 5L4.37114e-07 7L22.1 7L18.4 10.6L19.8 12Z"></path>
																</svg>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</section>
						<!-- ############  End Fourth Section  ############ -->
						<!-- ############  Start Fifth Section  ############ -->
						<section
							class="elementor-section elementor-top-section elementor-element elementor-element-45ca964 rey-flexWrap elementor-section-boxed elementor-section-height-default elementor-section-height-default"
							data-id="45ca964" data-element_type="section">
							<div class="elementor-container elementor-column-gap-default">
								<div
									class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-72bad9e"
									data-id="72bad9e" data-element_type="column">
									<div
										class="elementor-column-wrap--72bad9e elementor-widget-wrap elementor-element-populated">
										<div
											class="elementor-element elementor-element-b2b49b0 elementor-widget elementor-widget-reycore-carousel"
											data-id="b2b49b0" data-element_type="widget"
											data-widget_type="reycore-carousel.default">
											<div class="elementor-widget-container">
												<div data-layout="brooklyn"
													 class="rey-carouselEl --product_cat --direction-ltr rey-sliderComp-nav"
													 data-carousel-settings="{&quot;type&quot;:&quot;slide&quot;,&quot;direction&quot;:&quot;ltr&quot;,&quot;items_to_show&quot;:&quot;4&quot;,&quot;infinite&quot;:true,&quot;autoplay&quot;:false,&quot;pauseOnHover&quot;:false,&quot;interval&quot;:9000,&quot;customArrows&quot;:&quot;arrows-b2b49b0-2006&quot;,&quot;pagination&quot;:false,&quot;speed&quot;:700,&quot;c_padding&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;top&quot;:&quot;&quot;,&quot;right&quot;:&quot;&quot;,&quot;bottom&quot;:&quot;&quot;,&quot;left&quot;:&quot;&quot;,&quot;isLinked&quot;:true},&quot;uniqueID&quot;:&quot;carousel-6238a381c700b&quot;,&quot;targetSync&quot;:&quot;&quot;,&quot;free_drag&quot;:[],&quot;lazy_load&quot;:false,&quot;autoscroll&quot;:&quot;&quot;,&quot;autoscroll_rewind&quot;:false,&quot;autoscroll_pause_hover&quot;:false,&quot;bp_devices&quot;:{&quot;perPage&quot;:&quot;items_to_show&quot;,&quot;padding&quot;:&quot;c_padding&quot;},&quot;items_to_show_tablet&quot;:&quot;2&quot;,&quot;items_to_show_mobile&quot;:2,&quot;c_padding_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;top&quot;:&quot;&quot;,&quot;right&quot;:&quot;&quot;,&quot;bottom&quot;:&quot;&quot;,&quot;left&quot;:&quot;&quot;,&quot;isLinked&quot;:true},&quot;c_padding_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;top&quot;:&quot;&quot;,&quot;right&quot;:&quot;&quot;,&quot;bottom&quot;:&quot;&quot;,&quot;left&quot;:&quot;&quot;,&quot;isLinked&quot;:true}}"
													 data-loaded="">
													<div class="splide carousel-6238a381c700b" data-side-offset="right"
														 data-slider-carousel-id="carousel-6238a381c700b">
														<div class="splide__track">
															<div class="splide__list __slides">
																<div
																	class="splide__slide __slide elementor-repeater-item-prod-cat-50">
																	<div class="rey-card --brooklyn">
																		<a href="https://demos.reytheme.com/san-francisco/product-category/wearables/"
																		   class="__media-link"
																		   aria-label="Wearables 5">
																			<img decoding="async" width="600"
																				 height="680"
																				 src="data:image/svg+xml,%3Csvg%20xmlns=&#39;http://www.w3.org/2000/svg&#39;%20viewBox=&#39;0%200%20600%20680&#39;%3E%3C/svg%3E"
																				 class="__media" alt=""
																				 data-lazy-srcset="https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/03/image_23.jpg 600w, https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/03/image_23-265x300.jpg 265w, https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/03/image_23-330x374.jpg 330w"
																				 data-lazy-sizes="(max-width: 600px) 100vw, 600px"
																				 data-lazy-src="https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/03/image_23.jpg">
																			<noscript><img loading="lazy"
																						   decoding="async" width="600"
																						   height="680"
																						   src="https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/03/image_23.jpg"
																						   class="__media" alt=""
																						   srcset="https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/03/image_23.jpg 600w, https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/03/image_23-265x300.jpg 265w, https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/03/image_23-330x374.jpg 330w"
																						   sizes="(max-width: 600px) 100vw, 600px"/>
																			</noscript>
																		</a>
																		<div class="__overlay"></div>
																		<h2 class="__captionEl __captionTitle ">
																			Wearables <sup>5</sup></h2>
																		<h2 class="__captionEl __captionTitle __hover-title">
																			Wearables <sup>5</sup></h2>
																		<div class="__captionEl __captionBtn"><a
																				href="https://demos.reytheme.com/san-francisco/product-category/wearables/"
																				class="btn btn-dash-line"
																				aria-label="Wearables 5">EXPLORE</a>
																		</div>
																	</div>
																</div>
																<div
																	class="splide__slide __slide elementor-repeater-item-prod-cat-46">
																	<div class="rey-card --brooklyn">
																		<a href="https://demos.reytheme.com/san-francisco/product-category/speakers/"
																		   class="__media-link" aria-label="Speakers 6">
																			<img decoding="async" width="600"
																				 height="680"
																				 src="data:image/svg+xml,%3Csvg%20xmlns=&#39;http://www.w3.org/2000/svg&#39;%20viewBox=&#39;0%200%20600%20680&#39;%3E%3C/svg%3E"
																				 class="__media" alt=""
																				 data-lazy-srcset="https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/03/image_14.jpg 600w, https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/03/image_14-265x300.jpg 265w, https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/03/image_14-330x374.jpg 330w"
																				 data-lazy-sizes="(max-width: 600px) 100vw, 600px"
																				 data-lazy-src="https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/03/image_14.jpg">
																			<noscript><img loading="lazy"
																						   decoding="async" width="600"
																						   height="680"
																						   src="https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/03/image_14.jpg"
																						   class="__media" alt=""
																						   srcset="https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/03/image_14.jpg 600w, https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/03/image_14-265x300.jpg 265w, https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/03/image_14-330x374.jpg 330w"
																						   sizes="(max-width: 600px) 100vw, 600px"/>
																			</noscript>
																		</a>
																		<div class="__overlay"></div>
																		<h2 class="__captionEl __captionTitle ">Speakers
																			<sup>6</sup></h2>
																		<h2 class="__captionEl __captionTitle __hover-title">
																			Speakers <sup>6</sup></h2>
																		<div class="__captionEl __captionBtn"><a
																				href="https://demos.reytheme.com/san-francisco/product-category/speakers/"
																				class="btn btn-dash-line"
																				aria-label="Speakers 6">EXPLORE</a>
																		</div>
																	</div>
																</div>
																<div
																	class="splide__slide __slide elementor-repeater-item-prod-cat-34">
																	<div class="rey-card --brooklyn">
																		<a href="https://demos.reytheme.com/san-francisco/product-category/headphones/"
																		   class="__media-link"
																		   aria-label="Headphones 3">
																			<img decoding="async" width="600"
																				 height="680"
																				 src="data:image/svg+xml,%3Csvg%20xmlns=&#39;http://www.w3.org/2000/svg&#39;%20viewBox=&#39;0%200%20600%20680&#39;%3E%3C/svg%3E"
																				 class="__media" alt=""
																				 data-lazy-srcset="https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/03/image_17.jpg 600w, https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/03/image_17-265x300.jpg 265w, https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/03/image_17-330x374.jpg 330w"
																				 data-lazy-sizes="(max-width: 600px) 100vw, 600px"
																				 data-lazy-src="https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/03/image_17.jpg">
																			<noscript><img loading="lazy"
																						   decoding="async" width="600"
																						   height="680"
																						   src="https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/03/image_17.jpg"
																						   class="__media" alt=""
																						   srcset="https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/03/image_17.jpg 600w, https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/03/image_17-265x300.jpg 265w, https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/03/image_17-330x374.jpg 330w"
																						   sizes="(max-width: 600px) 100vw, 600px"/>
																			</noscript>
																		</a>
																		<div class="__overlay"></div>
																		<h2 class="__captionEl __captionTitle ">
																			Headphones <sup>3</sup></h2>
																		<h2 class="__captionEl __captionTitle __hover-title">
																			Headphones <sup>3</sup></h2>
																		<div class="__captionEl __captionBtn"><a
																				href="https://demos.reytheme.com/san-francisco/product-category/headphones/"
																				class="btn btn-dash-line"
																				aria-label="Headphones 3">EXPLORE</a>
																		</div>
																	</div>
																</div>
																<div
																	class="splide__slide __slide elementor-repeater-item-prod-cat-27">
																	<div class="rey-card --brooklyn">
																		<a href="https://demos.reytheme.com/san-francisco/product-category/cameras/"
																		   class="__media-link" aria-label="Cameras 5">
																			<img decoding="async" width="600"
																				 height="680"
																				 src="data:image/svg+xml,%3Csvg%20xmlns=&#39;http://www.w3.org/2000/svg&#39;%20viewBox=&#39;0%200%20600%20680&#39;%3E%3C/svg%3E"
																				 class="__media" alt=""
																				 data-lazy-srcset="https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/04/image_24.jpg 600w, https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/04/image_24-265x300.jpg 265w, https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/04/image_24-330x374.jpg 330w"
																				 data-lazy-sizes="(max-width: 600px) 100vw, 600px"
																				 data-lazy-src="https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/04/image_24.jpg">
																			<noscript><img loading="lazy"
																						   decoding="async" width="600"
																						   height="680"
																						   src="https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/04/image_24.jpg"
																						   class="__media" alt=""
																						   srcset="https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/04/image_24.jpg 600w, https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/04/image_24-265x300.jpg 265w, https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/04/image_24-330x374.jpg 330w"
																						   sizes="(max-width: 600px) 100vw, 600px"/>
																			</noscript>
																		</a>
																		<div class="__overlay"></div>
																		<h2 class="__captionEl __captionTitle ">Cameras
																			<sup>5</sup></h2>
																		<h2 class="__captionEl __captionTitle __hover-title">
																			Cameras <sup>5</sup></h2>
																		<div class="__captionEl __captionBtn"><a
																				href="https://demos.reytheme.com/san-francisco/product-category/cameras/"
																				class="btn btn-dash-line"
																				aria-label="Cameras 5">EXPLORE</a></div>
																	</div>
																</div>
																<div
																	class="splide__slide __slide elementor-repeater-item-prod-cat-17">
																	<div class="rey-card --brooklyn">
																		<a href="https://demos.reytheme.com/san-francisco/product-category/accessories/"
																		   class="__media-link"
																		   aria-label="Accessories 5">
																			<img decoding="async" width="600"
																				 height="680"
																				 src="data:image/svg+xml,%3Csvg%20xmlns=&#39;http://www.w3.org/2000/svg&#39;%20viewBox=&#39;0%200%20600%20680&#39;%3E%3C/svg%3E"
																				 class="__media" alt=""
																				 data-lazy-srcset="https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/03/image_15.jpg 600w, https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/03/image_15-265x300.jpg 265w, https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/03/image_15-330x374.jpg 330w"
																				 data-lazy-sizes="(max-width: 600px) 100vw, 600px"
																				 data-lazy-src="https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/03/image_15.jpg">
																			<noscript><img loading="lazy"
																						   decoding="async" width="600"
																						   height="680"
																						   src="https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/03/image_15.jpg"
																						   class="__media" alt=""
																						   srcset="https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/03/image_15.jpg 600w, https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/03/image_15-265x300.jpg 265w, https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/03/image_15-330x374.jpg 330w"
																						   sizes="(max-width: 600px) 100vw, 600px"/>
																			</noscript>
																		</a>
																		<div class="__overlay"></div>
																		<h2 class="__captionEl __captionTitle ">
																			Accessories <sup>5</sup></h2>
																		<h2 class="__captionEl __captionTitle __hover-title">
																			Accessories <sup>5</sup></h2>
																		<div class="__captionEl __captionBtn"><a
																				href="https://demos.reytheme.com/san-francisco/product-category/accessories/"
																				class="btn btn-dash-line"
																				aria-label="Accessories 5">EXPLORE</a>
																		</div>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div
									class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-a31aed7"
									data-id="a31aed7" data-element_type="column">
									<div
										class="elementor-column-wrap--a31aed7 elementor-widget-wrap elementor-element-populated">
										<div
											class="elementor-element elementor-element-18029b6 elementor-widget elementor-widget-reycore-slider-nav"
											data-id="18029b6" data-element_type="widget"
											data-widget_type="reycore-slider-nav.default">
											<div class="elementor-widget-container">
												<div class="rey-sliderNav --hidden" data-type="arrows"
													 data-slider-source="carousel"
													 data-slider-id="carousel-6238a381c700b">
													<div class="rey-arrowSvg rey-arrowSvg--left ">
														<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 26 12">
															<path
																d="M19.8 12L26 6L19.9 -5.33279e-07L18.4 1.4L22.1 5L6.11959e-07 5L4.37114e-07 7L22.1 7L18.4 10.6L19.8 12Z"></path>
														</svg>
													</div>
													<div class="rey-sliderNav-counter">
														<span class="rey-sliderNav-counterCurrent"></span>
														<span class="rey-sliderNav-counterSeparator">—</span>
														<span class="rey-sliderNav-counterTotal"></span>
													</div>
													<div class="rey-arrowSvg rey-arrowSvg--right ">
														<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 26 12">
															<path
																d="M19.8 12L26 6L19.9 -5.33279e-07L18.4 1.4L22.1 5L6.11959e-07 5L4.37114e-07 7L22.1 7L18.4 10.6L19.8 12Z"></path>
														</svg>
													</div>
													<div class="rey-sliderNav-lines --left"></div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</section>

						<!-- ############  End Fifth Section  ############ -->
						<!-- ############  Start Six Section  ############ -->
						<section
							class="elementor-section elementor-top-section elementor-element elementor-element-220aee7 rey-flexWrap elementor-section-boxed elementor-section-height-default elementor-section-height-default"
							data-id="220aee7" data-element_type="section">
							<div class="elementor-container elementor-column-gap-default">
								<div
									class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-37e16cc"
									data-id="37e16cc" data-element_type="column">
									<div
										class="elementor-column-wrap--37e16cc elementor-widget-wrap elementor-element-populated">
										<div
											class="elementor-element elementor-element-2df9493 elementor-widget elementor-widget-heading colorized-element"
											data-id="2df9493" data-element_type="widget"
											data-widget_type="heading.default">
											<div class="elementor-widget-container">
												<h3 class="elementor-heading-title elementor-size-default">Flash
													Deals</h3>
											</div>
										</div>
									</div>
								</div>
								<div
									class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-8f07df4"
									data-id="8f07df4" data-element_type="column">
									<div
										class="elementor-column-wrap--8f07df4 elementor-widget-wrap elementor-element-populated">
										<div
											class="elementor-element elementor-element-37398e4 elementor-button-dashed --large elementor-align-right elementor-mobile-align-left elementor-widget elementor-widget-button colorized-element"
											data-id="37398e4" data-element_type="widget"
											data-widget_type="button.default">
											<div class="elementor-widget-container">
												<div class="elementor-button-wrapper">
													<a class="elementor-button elementor-button-link elementor-size-sm"
													   href="https://demos.reytheme.com/san-francisco/#">
                                             <span class="elementor-button-content-wrapper">
                                             <span class="elementor-button-text">View all</span>
                                             </span>
													</a>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div
									class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-fa4a28f"
									data-id="fa4a28f" data-element_type="column">
									<div
										class="elementor-column-wrap--fa4a28f elementor-widget-wrap elementor-element-populated">
										<div
											class="pg-skin-proto elementor-element elementor-element-e9fd2f2 --carousel-navPos-outside elementor-widget elementor-widget-reycore-product-grid"
											data-id="e9fd2f2" data-element_type="widget"
											data-widget_type="reycore-product-grid.carousel">
											<div class="elementor-widget-container">
												<div
													class="woocommerce rey-element reyEl-productGrid reyEl-productGrid--has-thumbs reyEl-productGrid--skin-carousel "
													data-carousel-settings="{&quot;type&quot;:&quot;slide&quot;,&quot;slides_to_show&quot;:&quot;4&quot;,&quot;slides_to_show_tablet&quot;:3,&quot;slides_to_show_mobile&quot;:2,&quot;slides_to_move&quot;:false,&quot;autoplay&quot;:false,&quot;autoplaySpeed&quot;:null,&quot;pause_on_hover&quot;:&quot;yes&quot;,&quot;infinite&quot;:true,&quot;infinite_tablet&quot;:false,&quot;infinite_mobile&quot;:false,&quot;speed&quot;:500,&quot;direction&quot;:&quot;ltr&quot;,&quot;carousel_padding&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;top&quot;:&quot;&quot;,&quot;right&quot;:&quot;&quot;,&quot;bottom&quot;:&quot;&quot;,&quot;left&quot;:&quot;&quot;,&quot;isLinked&quot;:true},&quot;carousel_padding_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;top&quot;:&quot;&quot;,&quot;right&quot;:&quot;&quot;,&quot;bottom&quot;:&quot;&quot;,&quot;left&quot;:&quot;&quot;,&quot;isLinked&quot;:true},&quot;carousel_padding_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;top&quot;:&quot;0&quot;,&quot;right&quot;:&quot;60&quot;,&quot;bottom&quot;:&quot;0&quot;,&quot;left&quot;:&quot;0&quot;,&quot;isLinked&quot;:false},&quot;delayInit&quot;:&quot;&quot;,&quot;customArrows&quot;:&quot;.__arrows-e9fd2f2&quot;,&quot;free_drag&quot;:[],&quot;side_offset&quot;:&quot;&quot;}"
													data-qt="sale">
													<div class="splide reyEl-productGrid-splide carousel-6238a381cedc0"
														 data-skin="proto">
														<div class="splide__track">
															<ul class="products --prevent-thumbnail-sliders --prevent-scattered --prevent-masonry splide__list rey-wcGap-default rey-wcGrid-default --skin-proto"
																data-slider-carousel-id="carousel-6238a381cedc0"
																data-discount-mobile-top="yes" data-params="[]">
																<li class="rey-swatches rey-swatches--stretch-labels product type-product post-125 status-publish first instock product_cat-bluetooth product_cat-home-audio product_cat-portable product_cat-sets product_cat-speakers product_tag-bluetooth product_tag-speaker has-post-thumbnail sale shipping-taxable purchasable product-type-variable is-animated --shadow- --shadow-h-1 --extraImg-second --extraImg-mobile rey-wc-skin--proto rey-wc-loopAlign-left --uncropped splide__slide"
																	data-pid="125">
																	<div class="rey-productInner --box-styler">
																		<div class="rey-productThumbnail">
																			<a href="https://demos.reytheme.com/san-francisco/product/powerful-multiroom-speaker/"
																			   class="woocommerce-LoopProduct-link woocommerce-loop-product__link"
																			   aria-label="Powerful multiroom speaker">
																				<img decoding="async" width="330"
																					 height="361"
																					 src="data:image/svg+xml,%3Csvg%20xmlns=&#39;http://www.w3.org/2000/svg&#39;%20viewBox=&#39;0%200%20330%20361&#39;%3E%3C/svg%3E"
																					 class="rey-productThumbnail__second"
																					 alt=""
																					 data-lazy-srcset="https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/02/5-330x361.jpg 330w, https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/02/5-274x300.jpg 274w, https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/02/5-936x1024.jpg 936w, https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/02/5-768x840.jpg 768w, https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/02/5-600x656.jpg 600w, https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/02/5.jpg 1024w"
																					 data-lazy-sizes="(max-width: 330px) 100vw, 330px"
																					 data-lazy-src="https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/02/5-330x361.jpg">
																				<noscript><img loading="lazy"
																							   decoding="async"
																							   width="330" height="361"
																							   src="https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/02/5-330x361.jpg"
																							   class="rey-productThumbnail__second"
																							   alt=""
																							   srcset="https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/02/5-330x361.jpg 330w, https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/02/5-274x300.jpg 274w, https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/02/5-936x1024.jpg 936w, https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/02/5-768x840.jpg 768w, https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/02/5-600x656.jpg 600w, https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/02/5.jpg 1024w"
																							   sizes="(max-width: 330px) 100vw, 330px"/>
																				</noscript>
																				<img decoding="async" width="330"
																					 height="361"
																					 src="data:image/svg+xml,%3Csvg%20xmlns=&#39;http://www.w3.org/2000/svg&#39;%20viewBox=&#39;0%200%20330%20361&#39;%3E%3C/svg%3E"
																					 class="rey-thumbImg img--1 attachment-woocommerce_thumbnail size-woocommerce_thumbnail"
																					 alt=""
																					 data-lazy-srcset="https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/02/4-330x361.jpg 330w, https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/02/4-274x300.jpg 274w, https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/02/4-936x1024.jpg 936w, https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/02/4-768x840.jpg 768w, https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/02/4-600x656.jpg 600w, https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/02/4.jpg 1024w"
																					 data-lazy-sizes="(max-width: 330px) 100vw, 330px"
																					 data-lazy-src="https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/02/4-330x361.jpg">
																				<noscript><img loading="lazy"
																							   decoding="async"
																							   width="330" height="361"
																							   src="https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/02/4-330x361.jpg"
																							   class="rey-thumbImg img--1 attachment-woocommerce_thumbnail size-woocommerce_thumbnail"
																							   alt=""
																							   srcset="https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/02/4-330x361.jpg 330w, https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/02/4-274x300.jpg 274w, https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/02/4-936x1024.jpg 936w, https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/02/4-768x840.jpg 768w, https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/02/4-600x656.jpg 600w, https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/02/4.jpg 1024w"
																							   sizes="(max-width: 330px) 100vw, 330px"/>
																				</noscript>
																			</a>
																			<div class="rey-thPos rey-thPos--top-left"
																				 data-position="top-left">
																				<span
																					class="rey-discount">Save $130.00</span>
																				<div class="rey-schedSale --loop"
																					 data-position="top_left">
																					<div
																						class="rey-badgeSale --loop --bg">
																						<svg class="rey-icon"
																							 width="100%" height="100%"
																							 viewBox="0 0 14 14"
																							 fill="none"
																							 xmlns="http://www.w3.org/2000/svg">
																							<path
																								d="M7.72461 0.0374277C7.48398 0.0131834 7.24229 0.0011146 7.00048 0.00122141H6.99322C6.59303 0.00784321 6.27305 0.335943 6.27646 0.736241V3.62164C6.2755 3.71883 6.29526 3.81506 6.33435 3.90402C6.45963 4.20222 6.76808 4.38058 7.08892 4.34053C7.45952 4.28499 7.73145 3.96341 7.72461 3.58885V1.49764C10.4284 1.85255 12.4746 4.11806 12.553 6.844C12.6314 9.56993 10.7189 11.9494 8.04 12.4591C5.36105 12.9688 2.70838 11.458 1.78026 8.89376C0.852143 6.32953 1.92317 3.47083 4.30776 2.14775C4.62475 1.96822 4.7574 1.57988 4.61642 1.24398L4.61557 1.24195C4.53653 1.05088 4.37975 0.902747 4.18451 0.8345C3.98938 0.76636 3.77439 0.78473 3.59357 0.884911C0.576484 2.56599 -0.763363 6.19656 0.43828 9.43451C1.63982 12.6726 5.02377 14.5501 8.40708 13.8559C11.7904 13.1618 14.1617 10.1036 13.9913 6.65399C13.8209 3.20446 11.1598 0.394791 7.72461 0.0374277Z"
																								fill="currentColor"></path>
																							<path
																								d="M4.35554 4.67456C4.64679 5.44151 5.59969 7.25235 6.31249 8.02336C6.7507 8.51807 7.49896 8.58429 8.01728 8.17438C8.27659 7.95682 8.43263 7.64047 8.44759 7.30234C8.46243 6.9643 8.33459 6.63546 8.09546 6.39601C7.34997 5.65063 5.45796 4.66302 4.66463 4.36184C4.57577 4.32841 4.47548 4.35041 4.40862 4.41791C4.34187 4.48552 4.32104 4.58602 4.35554 4.67456Z"
																								fill="currentColor"></path>
																						</svg>
																						<span
																							class="__text">Ends in <strong>+17 hours</strong></span>
																					</div>
																				</div>
																			</div>
																			<div class="rey-thPos rey-thPos--top-right"
																				 data-position="top-right">
																				<div
																					class="rey-thPos-item --no-margins">
																					<button
																						class="--icon-style-rounded rey-wishlistBtn rey-wishlistBtn-link"
																						data-lazy-hidden=""
																						data-id="125"
																						title="Add to wishlist"
																						aria-label="Add to wishlist">
																						<svg aria-hidden="true"
																							 role="img"
																							 class="rey-icon rey-icon-heart rey-wishlistBtn-icon"
																							 viewBox="0 0 24 24">
																							<path
																								fill="var(--icon-fill, none)"
																								stroke="currentColor"
																								stroke-width="var(--stroke-width, 1.8px)"
																								stroke-linecap="round"
																								stroke-linejoin="round"
																								d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path>
																						</svg>
																					</button>
																				</div>
																			</div>
																		</div>
																		<div class="rey-loopDetails --padded">
																			<div data-attribute="color"
																				 data-position="first"
																				 class="rey-productVariations2 --single-attr  --side">
																				<form
																					class="variations_form cart --catalog"
																					action="https://demos.reytheme.com/san-francisco/product/powerful-multiroom-speaker/"
																					method="post"
																					enctype="multipart/form-data"
																					data-product_id="125"
																					data-product_variations="[{&quot;attributes&quot;:{&quot;attribute_pa_color&quot;:&quot;&quot;},&quot;availability_html&quot;:&quot;&quot;,&quot;backorders_allowed&quot;:false,&quot;dimensions&quot;:{&quot;length&quot;:&quot;&quot;,&quot;width&quot;:&quot;&quot;,&quot;height&quot;:&quot;&quot;},&quot;dimensions_html&quot;:&quot;N\/A&quot;,&quot;display_price&quot;:769,&quot;display_regular_price&quot;:899,&quot;image&quot;:{&quot;title&quot;:&quot;4&quot;,&quot;caption&quot;:&quot;&quot;,&quot;url&quot;:&quot;https:\/\/demos.reytheme.com\/san-francisco\/wp-content\/uploads\/sites\/24\/2022\/02\/4.jpg&quot;,&quot;alt&quot;:&quot;4&quot;,&quot;src&quot;:&quot;https:\/\/demos.reytheme.com\/san-francisco\/wp-content\/uploads\/sites\/24\/2022\/02\/4-600x656.jpg&quot;,&quot;srcset&quot;:&quot;https:\/\/demos.reytheme.com\/san-francisco\/wp-content\/uploads\/sites\/24\/2022\/02\/4-600x656.jpg 600w, https:\/\/demos.reytheme.com\/san-francisco\/wp-content\/uploads\/sites\/24\/2022\/02\/4-274x300.jpg 274w, https:\/\/demos.reytheme.com\/san-francisco\/wp-content\/uploads\/sites\/24\/2022\/02\/4-936x1024.jpg 936w, https:\/\/demos.reytheme.com\/san-francisco\/wp-content\/uploads\/sites\/24\/2022\/02\/4-768x840.jpg 768w, https:\/\/demos.reytheme.com\/san-francisco\/wp-content\/uploads\/sites\/24\/2022\/02\/4-330x361.jpg 330w, https:\/\/demos.reytheme.com\/san-francisco\/wp-content\/uploads\/sites\/24\/2022\/02\/4.jpg 1024w&quot;,&quot;sizes&quot;:&quot;(max-width: 600px) 100vw, 600px&quot;,&quot;full_src&quot;:&quot;https:\/\/demos.reytheme.com\/san-francisco\/wp-content\/uploads\/sites\/24\/2022\/02\/4.jpg&quot;,&quot;full_src_w&quot;:1024,&quot;full_src_h&quot;:1120,&quot;gallery_thumbnail_src&quot;:&quot;https:\/\/demos.reytheme.com\/san-francisco\/wp-content\/uploads\/sites\/24\/2022\/02\/4-100x100.jpg&quot;,&quot;gallery_thumbnail_src_w&quot;:100,&quot;gallery_thumbnail_src_h&quot;:100,&quot;thumb_src&quot;:&quot;https:\/\/demos.reytheme.com\/san-francisco\/wp-content\/uploads\/sites\/24\/2022\/02\/4-330x361.jpg&quot;,&quot;thumb_src_w&quot;:330,&quot;thumb_src_h&quot;:361,&quot;src_w&quot;:600,&quot;src_h&quot;:656},&quot;image_id&quot;:126,&quot;is_downloadable&quot;:false,&quot;is_in_stock&quot;:true,&quot;is_purchasable&quot;:true,&quot;is_sold_individually&quot;:&quot;no&quot;,&quot;is_virtual&quot;:false,&quot;max_qty&quot;:&quot;&quot;,&quot;min_qty&quot;:1,&quot;price_html&quot;:&quot;&quot;,&quot;sku&quot;:&quot;&quot;,&quot;variation_description&quot;:&quot;&quot;,&quot;variation_id&quot;:889,&quot;variation_is_active&quot;:true,&quot;variation_is_visible&quot;:true,&quot;weight&quot;:&quot;&quot;,&quot;weight_html&quot;:&quot;N\/A&quot;,&quot;stock_status&quot;:&quot;instock&quot;,&quot;step_qty&quot;:1}]"
																					data-atc-text="Add to cart">
																					<div class="variations">
																						<div class="__s-wrapper">
																							<select style="display:none"
																									id="pa_color125"
																									class=""
																									name="attribute_pa_color"
																									data-attribute_name="attribute_pa_color"
																									data-show_option_none="yes">
																								<option value="">Choose
																									an option
																								</option>
																								<option value="black">
																									Black
																								</option>
																								<option value="brown">
																									Brown
																								</option>
																								<option value="grey">
																									Grey
																								</option>
																							</select>
																							<div aria-label="color"
																								 data-attribute_name="attribute_pa_color"
																								 style=""
																								 class="rey-swatchList --type-color --light-tooltips --disabled-dim --deselection-clear">
																								<div title="Black"
																									 data-term-id="22"
																									 data-term-slug="black"
																									 data-attribute-name="pa_color"
																									 aria-label="Black"
																									 role="radio"
																									 aria-checked="false"
																									 class="rey-swatchList-item --type-color rey-swatchList-item--regular "
																									 data-description="">
																									<span
																										class="rey-swatchList-itemContent"
																										style="background: #45464c;"></span>
																								</div>
																								<div title="Brown"
																									 data-term-id="24"
																									 data-term-slug="brown"
																									 data-attribute-name="pa_color"
																									 aria-label="Brown"
																									 role="radio"
																									 aria-checked="false"
																									 class="rey-swatchList-item --type-color rey-swatchList-item--regular "
																									 data-description="">
																									<span
																										class="rey-swatchList-itemContent"
																										style="background: #956b45;"></span>
																								</div>
																								<div title="Grey"
																									 data-term-id="33"
																									 data-term-slug="grey"
																									 data-attribute-name="pa_color"
																									 aria-label="Grey"
																									 role="radio"
																									 aria-checked="false"
																									 class="rey-swatchList-item --type-color rey-swatchList-item--regular "
																									 data-description="">
																									<span
																										class="rey-swatchList-itemContent"
																										style="background: #dbdbdb;"></span>
																								</div>
																							</div>
																						</div>
																					</div>
																				</form>
																			</div>
																			<div class="rey-brandLink --catalog"><a
																					href="https://demos.reytheme.com/san-francisco/product-brand/squarex/">SquareX</a>
																			</div>
																			<h2 class="woocommerce-loop-product__title">
																				<a href="https://demos.reytheme.com/san-francisco/product/powerful-multiroom-speaker/">Powerful
																					multiroom speaker</a></h2>
																			<div class="__break"></div>
																			<span class="price rey-loopPrice"><del
																					aria-hidden="true"><span
																						class="woocommerce-Price-amount amount"><bdi><span
																								class="woocommerce-Price-currencySymbol">$</span>899.00</bdi></span></del> <span
																					class="screen-reader-text">Original price was: $899.00.</span><ins
																					aria-hidden="true"><span
																						class="woocommerce-Price-amount amount"><bdi><span
																								class="woocommerce-Price-currencySymbol">$</span>769.00</bdi></span></ins><span
																					class="screen-reader-text">Current price is: $769.00.</span><span
																					class="rey-discount">Save $130.00</span></span>
																			<div class="rey-loopButtons">
																				<a href="https://demos.reytheme.com/san-francisco/product/powerful-multiroom-speaker/"
																				   data-quantity="1"
																				   class="button product_type_variable add_to_cart_button rey-btn--hover"
																				   data-product_id="125"
																				   data-product_sku=""
																				   aria-label="Select options for “Powerful multiroom speaker”"
																				   rel="nofollow"><span class="__text">Select options</span></a>
																				<span
																					id="woocommerce_loop_add_to_cart_link_describedby_125"
																					class="screen-reader-text">
                                                                  This product has multiple variants. The options may be chosen on the product page	</span>
																				<button
																					class="button rey-btn--hover rey-quickviewBtn js-rey-quickviewBtn"
																					data-id="125" title="QUICKVIEW">
																					QUICKVIEW
																				</button>
																			</div>
																		</div>
																	</div>
																</li>
																<li class="rey-swatches rey-swatches--stretch-labels product type-product post-921 status-publish instock product_cat-accessories-cameras product_cat-action product_cat-cameras product_cat-dslr product_cat-lenses product_cat-mirrorless has-post-thumbnail sale shipping-taxable purchasable product-type-variable is-animated --shadow- --shadow-h-1 --extraImg-second --extraImg-mobile rey-wc-skin--proto rey-wc-loopAlign-left --uncropped splide__slide"
																	data-pid="921">
																	<div class="rey-productInner --box-styler">
																		<div class="rey-productThumbnail">
																			<a href="https://demos.reytheme.com/san-francisco/product/mirrorless-camera-lens/"
																			   class="woocommerce-LoopProduct-link woocommerce-loop-product__link"
																			   aria-label="Mirrorless camera lens">
																				<img decoding="async" width="330"
																					 height="361"
																					 src="data:image/svg+xml,%3Csvg%20xmlns=&#39;http://www.w3.org/2000/svg&#39;%20viewBox=&#39;0%200%20330%20361&#39;%3E%3C/svg%3E"
																					 class="rey-productThumbnail__second"
																					 alt=""
																					 data-lazy-srcset="https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/04/50-330x361.jpg 330w, https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/04/50-274x300.jpg 274w, https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/04/50-936x1024.jpg 936w, https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/04/50-768x840.jpg 768w, https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/04/50-600x656.jpg 600w, https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/04/50.jpg 1024w"
																					 data-lazy-sizes="(max-width: 330px) 100vw, 330px"
																					 data-lazy-src="https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/04/50-330x361.jpg">
																				<noscript><img loading="lazy"
																							   decoding="async"
																							   width="330" height="361"
																							   src="https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/04/50-330x361.jpg"
																							   class="rey-productThumbnail__second"
																							   alt=""
																							   srcset="https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/04/50-330x361.jpg 330w, https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/04/50-274x300.jpg 274w, https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/04/50-936x1024.jpg 936w, https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/04/50-768x840.jpg 768w, https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/04/50-600x656.jpg 600w, https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/04/50.jpg 1024w"
																							   sizes="(max-width: 330px) 100vw, 330px"/>
																				</noscript>
																				<img decoding="async" width="330"
																					 height="361"
																					 src="data:image/svg+xml,%3Csvg%20xmlns=&#39;http://www.w3.org/2000/svg&#39;%20viewBox=&#39;0%200%20330%20361&#39;%3E%3C/svg%3E"
																					 class="rey-thumbImg img--1 attachment-woocommerce_thumbnail size-woocommerce_thumbnail"
																					 alt=""
																					 data-lazy-srcset="https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/04/49-330x361.jpg 330w, https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/04/49-274x300.jpg 274w, https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/04/49-936x1024.jpg 936w, https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/04/49-768x840.jpg 768w, https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/04/49-600x656.jpg 600w, https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/04/49.jpg 1024w"
																					 data-lazy-sizes="(max-width: 330px) 100vw, 330px"
																					 data-lazy-src="https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/04/49-330x361.jpg">
																				<noscript><img loading="lazy"
																							   decoding="async"
																							   width="330" height="361"
																							   src="https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/04/49-330x361.jpg"
																							   class="rey-thumbImg img--1 attachment-woocommerce_thumbnail size-woocommerce_thumbnail"
																							   alt=""
																							   srcset="https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/04/49-330x361.jpg 330w, https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/04/49-274x300.jpg 274w, https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/04/49-936x1024.jpg 936w, https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/04/49-768x840.jpg 768w, https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/04/49-600x656.jpg 600w, https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/04/49.jpg 1024w"
																							   sizes="(max-width: 330px) 100vw, 330px"/>
																				</noscript>
																			</a>
																			<div class="rey-thPos rey-thPos--top-left"
																				 data-position="top-left">
																				<span
																					class="rey-discount">Save $160.00</span>
																				<div class="rey-schedSale --loop"
																					 data-position="top_left">
																					<div
																						class="rey-badgeSale --loop --bg">
																						<svg class="rey-icon"
																							 width="100%" height="100%"
																							 viewBox="0 0 14 14"
																							 fill="none"
																							 xmlns="http://www.w3.org/2000/svg">
																							<path
																								d="M7.72461 0.0374277C7.48398 0.0131834 7.24229 0.0011146 7.00048 0.00122141H6.99322C6.59303 0.00784321 6.27305 0.335943 6.27646 0.736241V3.62164C6.2755 3.71883 6.29526 3.81506 6.33435 3.90402C6.45963 4.20222 6.76808 4.38058 7.08892 4.34053C7.45952 4.28499 7.73145 3.96341 7.72461 3.58885V1.49764C10.4284 1.85255 12.4746 4.11806 12.553 6.844C12.6314 9.56993 10.7189 11.9494 8.04 12.4591C5.36105 12.9688 2.70838 11.458 1.78026 8.89376C0.852143 6.32953 1.92317 3.47083 4.30776 2.14775C4.62475 1.96822 4.7574 1.57988 4.61642 1.24398L4.61557 1.24195C4.53653 1.05088 4.37975 0.902747 4.18451 0.8345C3.98938 0.76636 3.77439 0.78473 3.59357 0.884911C0.576484 2.56599 -0.763363 6.19656 0.43828 9.43451C1.63982 12.6726 5.02377 14.5501 8.40708 13.8559C11.7904 13.1618 14.1617 10.1036 13.9913 6.65399C13.8209 3.20446 11.1598 0.394791 7.72461 0.0374277Z"
																								fill="currentColor"></path>
																							<path
																								d="M4.35554 4.67456C4.64679 5.44151 5.59969 7.25235 6.31249 8.02336C6.7507 8.51807 7.49896 8.58429 8.01728 8.17438C8.27659 7.95682 8.43263 7.64047 8.44759 7.30234C8.46243 6.9643 8.33459 6.63546 8.09546 6.39601C7.34997 5.65063 5.45796 4.66302 4.66463 4.36184C4.57577 4.32841 4.47548 4.35041 4.40862 4.41791C4.34187 4.48552 4.32104 4.58602 4.35554 4.67456Z"
																								fill="currentColor"></path>
																						</svg>
																						<span
																							class="__text">Ends in <strong>+3 days</strong></span>
																					</div>
																				</div>
																			</div>
																			<div class="rey-thPos rey-thPos--top-right"
																				 data-position="top-right">
																				<div
																					class="rey-thPos-item --no-margins">
																					<button
																						class="--icon-style-rounded rey-wishlistBtn rey-wishlistBtn-link"
																						data-lazy-hidden=""
																						data-id="921"
																						title="Add to wishlist"
																						aria-label="Add to wishlist">
																						<svg aria-hidden="true"
																							 role="img"
																							 class="rey-icon rey-icon-heart rey-wishlistBtn-icon"
																							 viewBox="0 0 24 24">
																							<path
																								fill="var(--icon-fill, none)"
																								stroke="currentColor"
																								stroke-width="var(--stroke-width, 1.8px)"
																								stroke-linecap="round"
																								stroke-linejoin="round"
																								d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path>
																						</svg>
																					</button>
																				</div>
																			</div>
																		</div>
																		<div class="rey-loopDetails --padded">
																			<div class="rey-brandLink --catalog"><a
																					href="https://demos.reytheme.com/san-francisco/product-brand/quantech/">Quantech</a>
																			</div>
																			<h2 class="woocommerce-loop-product__title">
																				<a href="https://demos.reytheme.com/san-francisco/product/mirrorless-camera-lens/">Mirrorless
																					camera lens</a></h2>
																			<div class="__break"></div>
																			<span class="price rey-loopPrice"><del
																					aria-hidden="true"><span
																						class="woocommerce-Price-amount amount"><bdi><span
																								class="woocommerce-Price-currencySymbol">$</span>489.00</bdi></span></del> <span
																					class="screen-reader-text">Original price was: $489.00.</span><ins
																					aria-hidden="true"><span
																						class="woocommerce-Price-amount amount"><bdi><span
																								class="woocommerce-Price-currencySymbol">$</span>329.00</bdi></span></ins><span
																					class="screen-reader-text">Current price is: $329.00.</span><span
																					class="rey-discount">Save $160.00</span></span>
																			<div class="rey-loopButtons">
																				<a href="https://demos.reytheme.com/san-francisco/product/mirrorless-camera-lens/"
																				   data-quantity="1"
																				   class="button product_type_variable add_to_cart_button rey-btn--hover"
																				   data-product_id="921"
																				   data-product_sku=""
																				   aria-label="Select options for “Mirrorless camera lens”"
																				   rel="nofollow"><span class="__text">Select options</span></a>
																				<span
																					id="woocommerce_loop_add_to_cart_link_describedby_921"
																					class="screen-reader-text">
                                                                  This product has multiple variants. The options may be chosen on the product page	</span>
																				<button
																					class="button rey-btn--hover rey-quickviewBtn js-rey-quickviewBtn"
																					data-id="921" title="QUICKVIEW">
																					QUICKVIEW
																				</button>
																			</div>
																		</div>
																	</div>
																</li>
																<li class="rey-swatches rey-swatches--stretch-labels product type-product post-900 status-publish instock product_cat-accessories-cameras product_cat-action product_cat-cameras product_cat-dslr product_cat-lenses product_cat-mirrorless has-post-thumbnail sale shipping-taxable purchasable product-type-variable is-animated --shadow- --shadow-h-1 --extraImg-second --extraImg-mobile rey-wc-skin--proto rey-wc-loopAlign-left --uncropped splide__slide"
																	data-pid="900">
																	<div class="rey-productInner --box-styler">
																		<div class="rey-productThumbnail">
																			<a href="https://demos.reytheme.com/san-francisco/product/tiny-action-camera/"
																			   class="woocommerce-LoopProduct-link woocommerce-loop-product__link"
																			   aria-label="Tiny action camera">
																				<img decoding="async" width="330"
																					 height="361"
																					 src="data:image/svg+xml,%3Csvg%20xmlns=&#39;http://www.w3.org/2000/svg&#39;%20viewBox=&#39;0%200%20330%20361&#39;%3E%3C/svg%3E"
																					 class="rey-productThumbnail__second"
																					 alt=""
																					 data-lazy-srcset="https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/04/38-330x361.jpg 330w, https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/04/38-274x300.jpg 274w, https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/04/38-936x1024.jpg 936w, https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/04/38-768x840.jpg 768w, https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/04/38-600x656.jpg 600w, https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/04/38.jpg 1024w"
																					 data-lazy-sizes="(max-width: 330px) 100vw, 330px"
																					 data-lazy-src="https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/04/38-330x361.jpg">
																				<noscript><img loading="lazy"
																							   decoding="async"
																							   width="330" height="361"
																							   src="https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/04/38-330x361.jpg"
																							   class="rey-productThumbnail__second"
																							   alt=""
																							   srcset="https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/04/38-330x361.jpg 330w, https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/04/38-274x300.jpg 274w, https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/04/38-936x1024.jpg 936w, https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/04/38-768x840.jpg 768w, https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/04/38-600x656.jpg 600w, https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/04/38.jpg 1024w"
																							   sizes="(max-width: 330px) 100vw, 330px"/>
																				</noscript>
																				<img decoding="async" width="330"
																					 height="361"
																					 src="data:image/svg+xml,%3Csvg%20xmlns=&#39;http://www.w3.org/2000/svg&#39;%20viewBox=&#39;0%200%20330%20361&#39;%3E%3C/svg%3E"
																					 class="rey-thumbImg img--1 attachment-woocommerce_thumbnail size-woocommerce_thumbnail"
																					 alt=""
																					 data-lazy-srcset="https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/04/36-330x361.jpg 330w, https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/04/36-274x300.jpg 274w, https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/04/36-936x1024.jpg 936w, https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/04/36-768x840.jpg 768w, https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/04/36-600x656.jpg 600w, https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/04/36.jpg 1024w"
																					 data-lazy-sizes="(max-width: 330px) 100vw, 330px"
																					 data-lazy-src="https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/04/36-330x361.jpg">
																				<noscript><img loading="lazy"
																							   decoding="async"
																							   width="330" height="361"
																							   src="https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/04/36-330x361.jpg"
																							   class="rey-thumbImg img--1 attachment-woocommerce_thumbnail size-woocommerce_thumbnail"
																							   alt=""
																							   srcset="https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/04/36-330x361.jpg 330w, https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/04/36-274x300.jpg 274w, https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/04/36-936x1024.jpg 936w, https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/04/36-768x840.jpg 768w, https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/04/36-600x656.jpg 600w, https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/04/36.jpg 1024w"
																							   sizes="(max-width: 330px) 100vw, 330px"/>
																				</noscript>
																			</a>
																			<div class="rey-thPos rey-thPos--top-left"
																				 data-position="top-left">
																				<span
																					class="rey-discount">Save $20.00</span>
																				<div class="rey-schedSale --loop"
																					 data-position="top_left">
																					<div
																						class="rey-badgeSale --loop --bg">
																						<svg class="rey-icon"
																							 width="100%" height="100%"
																							 viewBox="0 0 14 14"
																							 fill="none"
																							 xmlns="http://www.w3.org/2000/svg">
																							<path
																								d="M7.72461 0.0374277C7.48398 0.0131834 7.24229 0.0011146 7.00048 0.00122141H6.99322C6.59303 0.00784321 6.27305 0.335943 6.27646 0.736241V3.62164C6.2755 3.71883 6.29526 3.81506 6.33435 3.90402C6.45963 4.20222 6.76808 4.38058 7.08892 4.34053C7.45952 4.28499 7.73145 3.96341 7.72461 3.58885V1.49764C10.4284 1.85255 12.4746 4.11806 12.553 6.844C12.6314 9.56993 10.7189 11.9494 8.04 12.4591C5.36105 12.9688 2.70838 11.458 1.78026 8.89376C0.852143 6.32953 1.92317 3.47083 4.30776 2.14775C4.62475 1.96822 4.7574 1.57988 4.61642 1.24398L4.61557 1.24195C4.53653 1.05088 4.37975 0.902747 4.18451 0.8345C3.98938 0.76636 3.77439 0.78473 3.59357 0.884911C0.576484 2.56599 -0.763363 6.19656 0.43828 9.43451C1.63982 12.6726 5.02377 14.5501 8.40708 13.8559C11.7904 13.1618 14.1617 10.1036 13.9913 6.65399C13.8209 3.20446 11.1598 0.394791 7.72461 0.0374277Z"
																								fill="currentColor"></path>
																							<path
																								d="M4.35554 4.67456C4.64679 5.44151 5.59969 7.25235 6.31249 8.02336C6.7507 8.51807 7.49896 8.58429 8.01728 8.17438C8.27659 7.95682 8.43263 7.64047 8.44759 7.30234C8.46243 6.9643 8.33459 6.63546 8.09546 6.39601C7.34997 5.65063 5.45796 4.66302 4.66463 4.36184C4.57577 4.32841 4.47548 4.35041 4.40862 4.41791C4.34187 4.48552 4.32104 4.58602 4.35554 4.67456Z"
																								fill="currentColor"></path>
																						</svg>
																						<span
																							class="__text">Ends in <strong>+17 hours</strong></span>
																					</div>
																				</div>
																			</div>
																			<div class="rey-thPos rey-thPos--top-right"
																				 data-position="top-right">
																				<div
																					class="rey-thPos-item --no-margins">
																					<button
																						class="--icon-style-rounded rey-wishlistBtn rey-wishlistBtn-link"
																						data-lazy-hidden=""
																						data-id="900"
																						title="Add to wishlist"
																						aria-label="Add to wishlist">
																						<svg aria-hidden="true"
																							 role="img"
																							 class="rey-icon rey-icon-heart rey-wishlistBtn-icon"
																							 viewBox="0 0 24 24">
																							<path
																								fill="var(--icon-fill, none)"
																								stroke="currentColor"
																								stroke-width="var(--stroke-width, 1.8px)"
																								stroke-linecap="round"
																								stroke-linejoin="round"
																								d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path>
																						</svg>
																					</button>
																				</div>
																			</div>
																		</div>
																		<div class="rey-loopDetails --padded">
																			<div class="rey-brandLink --catalog"><a
																					href="https://demos.reytheme.com/san-francisco/product-brand/squarex/">SquareX</a>
																			</div>
																			<h2 class="woocommerce-loop-product__title">
																				<a href="https://demos.reytheme.com/san-francisco/product/tiny-action-camera/">Tiny
																					action camera</a></h2>
																			<div class="__break"></div>
																			<span class="price rey-loopPrice"><del
																					aria-hidden="true"><span
																						class="woocommerce-Price-amount amount"><bdi><span
																								class="woocommerce-Price-currencySymbol">$</span>289.00</bdi></span></del> <span
																					class="screen-reader-text">Original price was: $289.00.</span><ins
																					aria-hidden="true"><span
																						class="woocommerce-Price-amount amount"><bdi><span
																								class="woocommerce-Price-currencySymbol">$</span>269.00</bdi></span></ins><span
																					class="screen-reader-text">Current price is: $269.00.</span><span
																					class="rey-discount">Save $20.00</span></span>
																			<div class="rey-loopButtons">
																				<a href="https://demos.reytheme.com/san-francisco/product/tiny-action-camera/"
																				   data-quantity="1"
																				   class="button product_type_variable add_to_cart_button rey-btn--hover"
																				   data-product_id="900"
																				   data-product_sku=""
																				   aria-label="Select options for “Tiny action camera”"
																				   rel="nofollow"><span class="__text">Select options</span></a>
																				<span
																					id="woocommerce_loop_add_to_cart_link_describedby_900"
																					class="screen-reader-text">
                                                                  This product has multiple variants. The options may be chosen on the product page	</span>
																				<button
																					class="button rey-btn--hover rey-quickviewBtn js-rey-quickviewBtn"
																					data-id="900" title="QUICKVIEW">
																					QUICKVIEW
																				</button>
																			</div>
																		</div>
																	</div>
																</li>
																<li class="rey-swatches rey-swatches--stretch-labels product type-product post-842 status-publish last instock product_cat-fitness-trackers product_cat-glasses product_cat-key-trackers product_cat-smartwatches product_cat-virtual-reality product_cat-wearables has-post-thumbnail sale shipping-taxable purchasable product-type-variable is-animated --shadow- --shadow-h-1 --extraImg-second --extraImg-mobile rey-wc-skin--proto rey-wc-loopAlign-left --uncropped splide__slide"
																	data-pid="842">
																	<div class="rey-productInner --box-styler">
																		<div class="rey-productThumbnail">
																			<a href="https://demos.reytheme.com/san-francisco/product/advanced-health-smartwatch/"
																			   class="woocommerce-LoopProduct-link woocommerce-loop-product__link"
																			   aria-label="Advanced Health Smartwatch">
																				<img decoding="async" width="330"
																					 height="361"
																					 src="data:image/svg+xml,%3Csvg%20xmlns=&#39;http://www.w3.org/2000/svg&#39;%20viewBox=&#39;0%200%20330%20361&#39;%3E%3C/svg%3E"
																					 class="rey-productThumbnail__second"
																					 alt=""
																					 data-lazy-srcset="https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/03/20-330x361.jpg 330w, https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/03/20-274x300.jpg 274w, https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/03/20-936x1024.jpg 936w, https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/03/20-768x840.jpg 768w, https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/03/20-600x656.jpg 600w, https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/03/20.jpg 1024w"
																					 data-lazy-sizes="(max-width: 330px) 100vw, 330px"
																					 data-lazy-src="https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/03/20-330x361.jpg">
																				<noscript><img loading="lazy"
																							   decoding="async"
																							   width="330" height="361"
																							   src="https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/03/20-330x361.jpg"
																							   class="rey-productThumbnail__second"
																							   alt=""
																							   srcset="https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/03/20-330x361.jpg 330w, https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/03/20-274x300.jpg 274w, https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/03/20-936x1024.jpg 936w, https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/03/20-768x840.jpg 768w, https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/03/20-600x656.jpg 600w, https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/03/20.jpg 1024w"
																							   sizes="(max-width: 330px) 100vw, 330px"/>
																				</noscript>
																				<img decoding="async" width="330"
																					 height="361"
																					 src="data:image/svg+xml,%3Csvg%20xmlns=&#39;http://www.w3.org/2000/svg&#39;%20viewBox=&#39;0%200%20330%20361&#39;%3E%3C/svg%3E"
																					 class="rey-thumbImg img--1 attachment-woocommerce_thumbnail size-woocommerce_thumbnail"
																					 alt=""
																					 data-lazy-srcset="https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/03/21-330x361.jpg 330w, https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/03/21-274x300.jpg 274w, https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/03/21-936x1024.jpg 936w, https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/03/21-768x840.jpg 768w, https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/03/21-600x656.jpg 600w, https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/03/21.jpg 1024w"
																					 data-lazy-sizes="(max-width: 330px) 100vw, 330px"
																					 data-lazy-src="https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/03/21-330x361.jpg">
																				<noscript><img loading="lazy"
																							   decoding="async"
																							   width="330" height="361"
																							   src="https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/03/21-330x361.jpg"
																							   class="rey-thumbImg img--1 attachment-woocommerce_thumbnail size-woocommerce_thumbnail"
																							   alt=""
																							   srcset="https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/03/21-330x361.jpg 330w, https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/03/21-274x300.jpg 274w, https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/03/21-936x1024.jpg 936w, https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/03/21-768x840.jpg 768w, https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/03/21-600x656.jpg 600w, https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/03/21.jpg 1024w"
																							   sizes="(max-width: 330px) 100vw, 330px"/>
																				</noscript>
																			</a>
																			<div class="rey-thPos rey-thPos--top-left"
																				 data-position="top-left">
																				<span
																					class="rey-discount">Save $160.00</span>
																				<div class="rey-schedSale --loop"
																					 data-position="top_left">
																					<div
																						class="rey-badgeSale --loop --bg">
																						<svg class="rey-icon"
																							 width="100%" height="100%"
																							 viewBox="0 0 14 14"
																							 fill="none"
																							 xmlns="http://www.w3.org/2000/svg">
																							<path
																								d="M7.72461 0.0374277C7.48398 0.0131834 7.24229 0.0011146 7.00048 0.00122141H6.99322C6.59303 0.00784321 6.27305 0.335943 6.27646 0.736241V3.62164C6.2755 3.71883 6.29526 3.81506 6.33435 3.90402C6.45963 4.20222 6.76808 4.38058 7.08892 4.34053C7.45952 4.28499 7.73145 3.96341 7.72461 3.58885V1.49764C10.4284 1.85255 12.4746 4.11806 12.553 6.844C12.6314 9.56993 10.7189 11.9494 8.04 12.4591C5.36105 12.9688 2.70838 11.458 1.78026 8.89376C0.852143 6.32953 1.92317 3.47083 4.30776 2.14775C4.62475 1.96822 4.7574 1.57988 4.61642 1.24398L4.61557 1.24195C4.53653 1.05088 4.37975 0.902747 4.18451 0.8345C3.98938 0.76636 3.77439 0.78473 3.59357 0.884911C0.576484 2.56599 -0.763363 6.19656 0.43828 9.43451C1.63982 12.6726 5.02377 14.5501 8.40708 13.8559C11.7904 13.1618 14.1617 10.1036 13.9913 6.65399C13.8209 3.20446 11.1598 0.394791 7.72461 0.0374277Z"
																								fill="currentColor"></path>
																							<path
																								d="M4.35554 4.67456C4.64679 5.44151 5.59969 7.25235 6.31249 8.02336C6.7507 8.51807 7.49896 8.58429 8.01728 8.17438C8.27659 7.95682 8.43263 7.64047 8.44759 7.30234C8.46243 6.9643 8.33459 6.63546 8.09546 6.39601C7.34997 5.65063 5.45796 4.66302 4.66463 4.36184C4.57577 4.32841 4.47548 4.35041 4.40862 4.41791C4.34187 4.48552 4.32104 4.58602 4.35554 4.67456Z"
																								fill="currentColor"></path>
																						</svg>
																						<span
																							class="__text">Ends in <strong>+1 day</strong></span>
																					</div>
																				</div>
																			</div>
																			<div class="rey-thPos rey-thPos--top-right"
																				 data-position="top-right">
																				<div
																					class="rey-thPos-item --no-margins">
																					<button
																						class="--icon-style-rounded rey-wishlistBtn rey-wishlistBtn-link"
																						data-lazy-hidden=""
																						data-id="842"
																						title="Add to wishlist"
																						aria-label="Add to wishlist">
																						<svg aria-hidden="true"
																							 role="img"
																							 class="rey-icon rey-icon-heart rey-wishlistBtn-icon"
																							 viewBox="0 0 24 24">
																							<path
																								fill="var(--icon-fill, none)"
																								stroke="currentColor"
																								stroke-width="var(--stroke-width, 1.8px)"
																								stroke-linecap="round"
																								stroke-linejoin="round"
																								d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path>
																						</svg>
																					</button>
																				</div>
																			</div>
																		</div>
																		<div class="rey-loopDetails --padded">
																			<div data-attribute="color"
																				 data-position="first"
																				 class="rey-productVariations2 --single-attr  --side">
																				<form
																					class="variations_form cart --catalog"
																					action="https://demos.reytheme.com/san-francisco/product/advanced-health-smartwatch/"
																					method="post"
																					enctype="multipart/form-data"
																					data-product_id="842"
																					data-product_variations="[{&quot;attributes&quot;:{&quot;attribute_pa_color&quot;:&quot;&quot;},&quot;availability_html&quot;:&quot;&quot;,&quot;backorders_allowed&quot;:false,&quot;dimensions&quot;:{&quot;length&quot;:&quot;&quot;,&quot;width&quot;:&quot;&quot;,&quot;height&quot;:&quot;&quot;},&quot;dimensions_html&quot;:&quot;N\/A&quot;,&quot;display_price&quot;:389,&quot;display_regular_price&quot;:549,&quot;image&quot;:{&quot;title&quot;:&quot;21&quot;,&quot;caption&quot;:&quot;&quot;,&quot;url&quot;:&quot;https:\/\/demos.reytheme.com\/san-francisco\/wp-content\/uploads\/sites\/24\/2022\/03\/21.jpg&quot;,&quot;alt&quot;:&quot;21&quot;,&quot;src&quot;:&quot;https:\/\/demos.reytheme.com\/san-francisco\/wp-content\/uploads\/sites\/24\/2022\/03\/21-600x656.jpg&quot;,&quot;srcset&quot;:&quot;https:\/\/demos.reytheme.com\/san-francisco\/wp-content\/uploads\/sites\/24\/2022\/03\/21-600x656.jpg 600w, https:\/\/demos.reytheme.com\/san-francisco\/wp-content\/uploads\/sites\/24\/2022\/03\/21-274x300.jpg 274w, https:\/\/demos.reytheme.com\/san-francisco\/wp-content\/uploads\/sites\/24\/2022\/03\/21-936x1024.jpg 936w, https:\/\/demos.reytheme.com\/san-francisco\/wp-content\/uploads\/sites\/24\/2022\/03\/21-768x840.jpg 768w, https:\/\/demos.reytheme.com\/san-francisco\/wp-content\/uploads\/sites\/24\/2022\/03\/21-330x361.jpg 330w, https:\/\/demos.reytheme.com\/san-francisco\/wp-content\/uploads\/sites\/24\/2022\/03\/21.jpg 1024w&quot;,&quot;sizes&quot;:&quot;(max-width: 600px) 100vw, 600px&quot;,&quot;full_src&quot;:&quot;https:\/\/demos.reytheme.com\/san-francisco\/wp-content\/uploads\/sites\/24\/2022\/03\/21.jpg&quot;,&quot;full_src_w&quot;:1024,&quot;full_src_h&quot;:1120,&quot;gallery_thumbnail_src&quot;:&quot;https:\/\/demos.reytheme.com\/san-francisco\/wp-content\/uploads\/sites\/24\/2022\/03\/21-100x100.jpg&quot;,&quot;gallery_thumbnail_src_w&quot;:100,&quot;gallery_thumbnail_src_h&quot;:100,&quot;thumb_src&quot;:&quot;https:\/\/demos.reytheme.com\/san-francisco\/wp-content\/uploads\/sites\/24\/2022\/03\/21-330x361.jpg&quot;,&quot;thumb_src_w&quot;:330,&quot;thumb_src_h&quot;:361,&quot;src_w&quot;:600,&quot;src_h&quot;:656},&quot;image_id&quot;:845,&quot;is_downloadable&quot;:false,&quot;is_in_stock&quot;:true,&quot;is_purchasable&quot;:true,&quot;is_sold_individually&quot;:&quot;no&quot;,&quot;is_virtual&quot;:false,&quot;max_qty&quot;:&quot;&quot;,&quot;min_qty&quot;:1,&quot;price_html&quot;:&quot;&quot;,&quot;sku&quot;:&quot;&quot;,&quot;variation_description&quot;:&quot;&quot;,&quot;variation_id&quot;:869,&quot;variation_is_active&quot;:true,&quot;variation_is_visible&quot;:true,&quot;weight&quot;:&quot;&quot;,&quot;weight_html&quot;:&quot;N\/A&quot;,&quot;stock_status&quot;:&quot;instock&quot;,&quot;step_qty&quot;:1}]"
																					data-atc-text="Add to cart">
																					<div class="variations">
																						<div class="__s-wrapper">
																							<select style="display:none"
																									id="pa_color842"
																									class=""
																									name="attribute_pa_color"
																									data-attribute_name="attribute_pa_color"
																									data-show_option_none="yes">
																								<option value="">Choose
																									an option
																								</option>
																								<option value="beige">
																									Beige
																								</option>
																								<option value="grey">
																									Grey
																								</option>
																								<option value="red">
																									Red
																								</option>
																							</select>
																							<div aria-label="color"
																								 data-attribute_name="attribute_pa_color"
																								 style=""
																								 class="rey-swatchList --type-color --light-tooltips --disabled-dim --deselection-clear">
																								<div title="Beige"
																									 data-term-id="20"
																									 data-term-slug="beige"
																									 data-attribute-name="pa_color"
																									 aria-label="Beige"
																									 role="radio"
																									 aria-checked="false"
																									 class="rey-swatchList-item --type-color rey-swatchList-item--regular "
																									 data-description="">
																									<span
																										class="rey-swatchList-itemContent"
																										style="background: #dfc5a0;"></span>
																								</div>
																								<div title="Grey"
																									 data-term-id="33"
																									 data-term-slug="grey"
																									 data-attribute-name="pa_color"
																									 aria-label="Grey"
																									 role="radio"
																									 aria-checked="false"
																									 class="rey-swatchList-item --type-color rey-swatchList-item--regular "
																									 data-description="">
																									<span
																										class="rey-swatchList-itemContent"
																										style="background: #dbdbdb;"></span>
																								</div>
																								<div title="Red"
																									 data-term-id="43"
																									 data-term-slug="red"
																									 data-attribute-name="pa_color"
																									 aria-label="Red"
																									 role="radio"
																									 aria-checked="false"
																									 class="rey-swatchList-item --type-color rey-swatchList-item--regular "
																									 data-description="">
																									<span
																										class="rey-swatchList-itemContent"
																										style="background: #e75243;"></span>
																								</div>
																							</div>
																						</div>
																					</div>
																				</form>
																			</div>
																			<div class="rey-brandLink --catalog"><a
																					href="https://demos.reytheme.com/san-francisco/product-brand/squarex/">SquareX</a>
																			</div>
																			<h2 class="woocommerce-loop-product__title">
																				<a href="https://demos.reytheme.com/san-francisco/product/advanced-health-smartwatch/">Advanced
																					Health Smartwatch</a></h2>
																			<div class="__break"></div>
																			<span class="price rey-loopPrice"><del
																					aria-hidden="true"><span
																						class="woocommerce-Price-amount amount"><bdi><span
																								class="woocommerce-Price-currencySymbol">$</span>549.00</bdi></span></del> <span
																					class="screen-reader-text">Original price was: $549.00.</span><ins
																					aria-hidden="true"><span
																						class="woocommerce-Price-amount amount"><bdi><span
																								class="woocommerce-Price-currencySymbol">$</span>389.00</bdi></span></ins><span
																					class="screen-reader-text">Current price is: $389.00.</span><span
																					class="rey-discount">Save $160.00</span></span>
																			<div class="rey-loopButtons">
																				<a href="https://demos.reytheme.com/san-francisco/product/advanced-health-smartwatch/"
																				   data-quantity="1"
																				   class="button product_type_variable add_to_cart_button rey-btn--hover"
																				   data-product_id="842"
																				   data-product_sku=""
																				   aria-label="Select options for “Advanced Health Smartwatch”"
																				   rel="nofollow"><span class="__text">Select options</span></a>
																				<span
																					id="woocommerce_loop_add_to_cart_link_describedby_842"
																					class="screen-reader-text">
                                                                  This product has multiple variants. The options may be chosen on the product page	</span>
																				<button
																					class="button rey-btn--hover rey-quickviewBtn js-rey-quickviewBtn"
																					data-id="842" title="QUICKVIEW">
																					QUICKVIEW
																				</button>
																			</div>
																		</div>
																	</div>
																</li>
																<li class="rey-swatches rey-swatches--stretch-labels product type-product post-141 status-publish first instock product_cat-earbuds product_cat-headphones product_cat-on-ear product_cat-wireless has-post-thumbnail sale shipping-taxable purchasable product-type-variable is-animated --shadow- --shadow-h-1 --extraImg-second --extraImg-mobile rey-wc-skin--proto rey-wc-loopAlign-left --uncropped splide__slide"
																	data-pid="141">
																	<div class="rey-productInner --box-styler">
																		<div class="rey-productThumbnail">
																			<a href="https://demos.reytheme.com/san-francisco/product/adaptive-wireless-earbuds/"
																			   class="woocommerce-LoopProduct-link woocommerce-loop-product__link"
																			   aria-label="Adaptive wireless earbuds">
																				<img decoding="async" width="330"
																					 height="361"
																					 src="data:image/svg+xml,%3Csvg%20xmlns=&#39;http://www.w3.org/2000/svg&#39;%20viewBox=&#39;0%200%20330%20361&#39;%3E%3C/svg%3E"
																					 class="rey-productThumbnail__second"
																					 alt=""
																					 data-lazy-srcset="https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/02/17-330x361.jpg 330w, https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/02/17-274x300.jpg 274w, https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/02/17-936x1024.jpg 936w, https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/02/17-768x840.jpg 768w, https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/02/17-600x656.jpg 600w, https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/02/17.jpg 1024w"
																					 data-lazy-sizes="(max-width: 330px) 100vw, 330px"
																					 data-lazy-src="https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/02/17-330x361.jpg">
																				<noscript><img loading="lazy"
																							   decoding="async"
																							   width="330" height="361"
																							   src="https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/02/17-330x361.jpg"
																							   class="rey-productThumbnail__second"
																							   alt=""
																							   srcset="https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/02/17-330x361.jpg 330w, https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/02/17-274x300.jpg 274w, https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/02/17-936x1024.jpg 936w, https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/02/17-768x840.jpg 768w, https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/02/17-600x656.jpg 600w, https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/02/17.jpg 1024w"
																							   sizes="(max-width: 330px) 100vw, 330px"/>
																				</noscript>
																				<img decoding="async" width="330"
																					 height="361"
																					 src="data:image/svg+xml,%3Csvg%20xmlns=&#39;http://www.w3.org/2000/svg&#39;%20viewBox=&#39;0%200%20330%20361&#39;%3E%3C/svg%3E"
																					 class="rey-thumbImg img--1 attachment-woocommerce_thumbnail size-woocommerce_thumbnail"
																					 alt=""
																					 data-lazy-srcset="https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/02/16-330x361.jpg 330w, https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/02/16-274x300.jpg 274w, https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/02/16-936x1024.jpg 936w, https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/02/16-768x840.jpg 768w, https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/02/16-600x656.jpg 600w, https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/02/16.jpg 1024w"
																					 data-lazy-sizes="(max-width: 330px) 100vw, 330px"
																					 data-lazy-src="https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/02/16-330x361.jpg">
																				<noscript><img loading="lazy"
																							   decoding="async"
																							   width="330" height="361"
																							   src="https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/02/16-330x361.jpg"
																							   class="rey-thumbImg img--1 attachment-woocommerce_thumbnail size-woocommerce_thumbnail"
																							   alt=""
																							   srcset="https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/02/16-330x361.jpg 330w, https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/02/16-274x300.jpg 274w, https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/02/16-936x1024.jpg 936w, https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/02/16-768x840.jpg 768w, https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/02/16-600x656.jpg 600w, https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/02/16.jpg 1024w"
																							   sizes="(max-width: 330px) 100vw, 330px"/>
																				</noscript>
																			</a>
																			<div class="rey-thPos rey-thPos--top-left"
																				 data-position="top-left">
																				<span
																					class="rey-discount">Save $40.00</span>
																				<div class="rey-schedSale --loop"
																					 data-position="top_left">
																					<div
																						class="rey-badgeSale --loop --bg">
																						<svg class="rey-icon"
																							 width="100%" height="100%"
																							 viewBox="0 0 14 14"
																							 fill="none"
																							 xmlns="http://www.w3.org/2000/svg">
																							<path
																								d="M7.72461 0.0374277C7.48398 0.0131834 7.24229 0.0011146 7.00048 0.00122141H6.99322C6.59303 0.00784321 6.27305 0.335943 6.27646 0.736241V3.62164C6.2755 3.71883 6.29526 3.81506 6.33435 3.90402C6.45963 4.20222 6.76808 4.38058 7.08892 4.34053C7.45952 4.28499 7.73145 3.96341 7.72461 3.58885V1.49764C10.4284 1.85255 12.4746 4.11806 12.553 6.844C12.6314 9.56993 10.7189 11.9494 8.04 12.4591C5.36105 12.9688 2.70838 11.458 1.78026 8.89376C0.852143 6.32953 1.92317 3.47083 4.30776 2.14775C4.62475 1.96822 4.7574 1.57988 4.61642 1.24398L4.61557 1.24195C4.53653 1.05088 4.37975 0.902747 4.18451 0.8345C3.98938 0.76636 3.77439 0.78473 3.59357 0.884911C0.576484 2.56599 -0.763363 6.19656 0.43828 9.43451C1.63982 12.6726 5.02377 14.5501 8.40708 13.8559C11.7904 13.1618 14.1617 10.1036 13.9913 6.65399C13.8209 3.20446 11.1598 0.394791 7.72461 0.0374277Z"
																								fill="currentColor"></path>
																							<path
																								d="M4.35554 4.67456C4.64679 5.44151 5.59969 7.25235 6.31249 8.02336C6.7507 8.51807 7.49896 8.58429 8.01728 8.17438C8.27659 7.95682 8.43263 7.64047 8.44759 7.30234C8.46243 6.9643 8.33459 6.63546 8.09546 6.39601C7.34997 5.65063 5.45796 4.66302 4.66463 4.36184C4.57577 4.32841 4.47548 4.35041 4.40862 4.41791C4.34187 4.48552 4.32104 4.58602 4.35554 4.67456Z"
																								fill="currentColor"></path>
																						</svg>
																						<span
																							class="__text">Ends in <strong>+17 hours</strong></span>
																					</div>
																				</div>
																			</div>
																			<div class="rey-thPos rey-thPos--top-right"
																				 data-position="top-right">
																				<div
																					class="rey-thPos-item --no-margins">
																					<button
																						class="--icon-style-rounded rey-wishlistBtn rey-wishlistBtn-link"
																						data-lazy-hidden=""
																						data-id="141"
																						title="Add to wishlist"
																						aria-label="Add to wishlist">
																						<svg aria-hidden="true"
																							 role="img"
																							 class="rey-icon rey-icon-heart rey-wishlistBtn-icon"
																							 viewBox="0 0 24 24">
																							<path
																								fill="var(--icon-fill, none)"
																								stroke="currentColor"
																								stroke-width="var(--stroke-width, 1.8px)"
																								stroke-linecap="round"
																								stroke-linejoin="round"
																								d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path>
																						</svg>
																					</button>
																				</div>
																			</div>
																		</div>
																		<div class="rey-loopDetails --padded">
																			<div data-attribute="color"
																				 data-position="first"
																				 class="rey-productVariations2 --single-attr  --side">
																				<form
																					class="variations_form cart --catalog"
																					action="https://demos.reytheme.com/san-francisco/product/adaptive-wireless-earbuds/"
																					method="post"
																					enctype="multipart/form-data"
																					data-product_id="141"
																					data-product_variations="[{&quot;attributes&quot;:{&quot;attribute_pa_color&quot;:&quot;&quot;},&quot;availability_html&quot;:&quot;&quot;,&quot;backorders_allowed&quot;:false,&quot;dimensions&quot;:{&quot;length&quot;:&quot;&quot;,&quot;width&quot;:&quot;&quot;,&quot;height&quot;:&quot;&quot;},&quot;dimensions_html&quot;:&quot;N\/A&quot;,&quot;display_price&quot;:149,&quot;display_regular_price&quot;:189,&quot;image&quot;:{&quot;title&quot;:&quot;16&quot;,&quot;caption&quot;:&quot;&quot;,&quot;url&quot;:&quot;https:\/\/demos.reytheme.com\/san-francisco\/wp-content\/uploads\/sites\/24\/2022\/02\/16.jpg&quot;,&quot;alt&quot;:&quot;16&quot;,&quot;src&quot;:&quot;https:\/\/demos.reytheme.com\/san-francisco\/wp-content\/uploads\/sites\/24\/2022\/02\/16-600x656.jpg&quot;,&quot;srcset&quot;:&quot;https:\/\/demos.reytheme.com\/san-francisco\/wp-content\/uploads\/sites\/24\/2022\/02\/16-600x656.jpg 600w, https:\/\/demos.reytheme.com\/san-francisco\/wp-content\/uploads\/sites\/24\/2022\/02\/16-274x300.jpg 274w, https:\/\/demos.reytheme.com\/san-francisco\/wp-content\/uploads\/sites\/24\/2022\/02\/16-936x1024.jpg 936w, https:\/\/demos.reytheme.com\/san-francisco\/wp-content\/uploads\/sites\/24\/2022\/02\/16-768x840.jpg 768w, https:\/\/demos.reytheme.com\/san-francisco\/wp-content\/uploads\/sites\/24\/2022\/02\/16-330x361.jpg 330w, https:\/\/demos.reytheme.com\/san-francisco\/wp-content\/uploads\/sites\/24\/2022\/02\/16.jpg 1024w&quot;,&quot;sizes&quot;:&quot;(max-width: 600px) 100vw, 600px&quot;,&quot;full_src&quot;:&quot;https:\/\/demos.reytheme.com\/san-francisco\/wp-content\/uploads\/sites\/24\/2022\/02\/16.jpg&quot;,&quot;full_src_w&quot;:1024,&quot;full_src_h&quot;:1120,&quot;gallery_thumbnail_src&quot;:&quot;https:\/\/demos.reytheme.com\/san-francisco\/wp-content\/uploads\/sites\/24\/2022\/02\/16-100x100.jpg&quot;,&quot;gallery_thumbnail_src_w&quot;:100,&quot;gallery_thumbnail_src_h&quot;:100,&quot;thumb_src&quot;:&quot;https:\/\/demos.reytheme.com\/san-francisco\/wp-content\/uploads\/sites\/24\/2022\/02\/16-330x361.jpg&quot;,&quot;thumb_src_w&quot;:330,&quot;thumb_src_h&quot;:361,&quot;src_w&quot;:600,&quot;src_h&quot;:656},&quot;image_id&quot;:142,&quot;is_downloadable&quot;:false,&quot;is_in_stock&quot;:true,&quot;is_purchasable&quot;:true,&quot;is_sold_individually&quot;:&quot;no&quot;,&quot;is_virtual&quot;:false,&quot;max_qty&quot;:&quot;&quot;,&quot;min_qty&quot;:1,&quot;price_html&quot;:&quot;&quot;,&quot;sku&quot;:&quot;&quot;,&quot;variation_description&quot;:&quot;&quot;,&quot;variation_id&quot;:234,&quot;variation_is_active&quot;:true,&quot;variation_is_visible&quot;:true,&quot;weight&quot;:&quot;&quot;,&quot;weight_html&quot;:&quot;N\/A&quot;,&quot;stock_status&quot;:&quot;instock&quot;,&quot;step_qty&quot;:1}]"
																					data-atc-text="Add to cart">
																					<div class="variations">
																						<div class="__s-wrapper">
																							<select style="display:none"
																									id="pa_color141"
																									class=""
																									name="attribute_pa_color"
																									data-attribute_name="attribute_pa_color"
																									data-show_option_none="yes">
																								<option value="">Choose
																									an option
																								</option>
																								<option value="black">
																									Black
																								</option>
																								<option value="red">
																									Red
																								</option>
																							</select>
																							<div aria-label="color"
																								 data-attribute_name="attribute_pa_color"
																								 style=""
																								 class="rey-swatchList --type-color --light-tooltips --disabled-dim --deselection-clear">
																								<div title="Black"
																									 data-term-id="22"
																									 data-term-slug="black"
																									 data-attribute-name="pa_color"
																									 aria-label="Black"
																									 role="radio"
																									 aria-checked="false"
																									 class="rey-swatchList-item --type-color rey-swatchList-item--regular "
																									 data-description="">
																									<span
																										class="rey-swatchList-itemContent"
																										style="background: #45464c;"></span>
																								</div>
																								<div title="Red"
																									 data-term-id="43"
																									 data-term-slug="red"
																									 data-attribute-name="pa_color"
																									 aria-label="Red"
																									 role="radio"
																									 aria-checked="false"
																									 class="rey-swatchList-item --type-color rey-swatchList-item--regular "
																									 data-description="">
																									<span
																										class="rey-swatchList-itemContent"
																										style="background: #e75243;"></span>
																								</div>
																							</div>
																						</div>
																					</div>
																				</form>
																			</div>
																			<div class="rey-brandLink --catalog"><a
																					href="https://demos.reytheme.com/san-francisco/product-brand/quantech/">Quantech</a>
																			</div>
																			<h2 class="woocommerce-loop-product__title">
																				<a href="https://demos.reytheme.com/san-francisco/product/adaptive-wireless-earbuds/">Adaptive
																					wireless earbuds</a></h2>
																			<div class="__break"></div>
																			<span class="price rey-loopPrice"><del
																					aria-hidden="true"><span
																						class="woocommerce-Price-amount amount"><bdi><span
																								class="woocommerce-Price-currencySymbol">$</span>189.00</bdi></span></del> <span
																					class="screen-reader-text">Original price was: $189.00.</span><ins
																					aria-hidden="true"><span
																						class="woocommerce-Price-amount amount"><bdi><span
																								class="woocommerce-Price-currencySymbol">$</span>149.00</bdi></span></ins><span
																					class="screen-reader-text">Current price is: $149.00.</span><span
																					class="rey-discount">Save $40.00</span></span>
																			<div class="rey-loopButtons">
																				<a href="https://demos.reytheme.com/san-francisco/product/adaptive-wireless-earbuds/"
																				   data-quantity="1"
																				   class="button product_type_variable add_to_cart_button rey-btn--hover"
																				   data-product_id="141"
																				   data-product_sku=""
																				   aria-label="Select options for “Adaptive wireless earbuds”"
																				   rel="nofollow"><span class="__text">Select options</span></a>
																				<span
																					id="woocommerce_loop_add_to_cart_link_describedby_141"
																					class="screen-reader-text">
                                                                  This product has multiple variants. The options may be chosen on the product page	</span>
																				<button
																					class="button rey-btn--hover rey-quickviewBtn js-rey-quickviewBtn"
																					data-id="141" title="QUICKVIEW">
																					QUICKVIEW
																				</button>
																			</div>
																		</div>
																	</div>
																</li>
															</ul>
														</div>
														<div
															class="reyEl-productGrid-carouselNav __arrows-e9fd2f2 --dnone-md --dnone-sm">
															<div class="rey-arrowSvg rey-arrowSvg--left "
																 data-dir="&lt;">
																<svg xmlns="http://www.w3.org/2000/svg"
																	 viewBox="0 0 26 12">
																	<path
																		d="M19.8 12L26 6L19.9 -5.33279e-07L18.4 1.4L22.1 5L6.11959e-07 5L4.37114e-07 7L22.1 7L18.4 10.6L19.8 12Z"></path>
																</svg>
															</div>
															<div class="rey-arrowSvg rey-arrowSvg--right "
																 data-dir="&gt;">
																<svg xmlns="http://www.w3.org/2000/svg"
																	 viewBox="0 0 26 12">
																	<path
																		d="M19.8 12L26 6L19.9 -5.33279e-07L18.4 1.4L22.1 5L6.11959e-07 5L4.37114e-07 7L22.1 7L18.4 10.6L19.8 12Z"></path>
																</svg>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</section>
						<!-- ############  End Six Section  ############ -->
						<!-- ############  Start Seven Section  ############ -->
						<section
							class="elementor-section elementor-top-section elementor-element elementor-element-4336300 rey-section-stretched elementor-section-full_width elementor-section-height-default elementor-section-height-default"
							data-id="4336300" data-element_type="section">
							<div class="elementor-container elementor-column-gap-default">
								<div
									class="rey-lazyBg elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-8c15c98 rey-colbg--classic column-flex-dir--vertical"
									data-id="8c15c98" data-element_type="column"
									data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
									<div
										class="elementor-column-wrap--8c15c98 elementor-widget-wrap elementor-element-populated">
										<div class="elementor-background-overlay"></div>
										<div
											class="elementor-element elementor-element-6bd05f4 elementor-widget elementor-widget-heading colorized-element"
											data-id="6bd05f4" data-element_type="widget"
											data-widget_type="heading.default">
											<div class="elementor-widget-container">
												<h6 class="elementor-heading-title elementor-size-default">Connected
													Speakers</h6>
											</div>
										</div>
										<div
											class="elementor-element elementor-element-2d99339 elementor-widget elementor-widget-heading colorized-element"
											data-id="2d99339" data-element_type="widget"
											data-widget_type="heading.default">
											<div class="elementor-widget-container">
												<h2 class="elementor-heading-title elementor-size-default">Sounds better
													together</h2>
											</div>
										</div>
										<div
											class="elementor-element elementor-element-3c74c2f elementor-align-right m-auto--top elementor-button-dashed --large elementor-widget elementor-widget-button colorized-element"
											data-id="3c74c2f" data-element_type="widget"
											data-widget_type="button.default">
											<div class="elementor-widget-container">
												<div class="elementor-button-wrapper">
													<a class="elementor-button elementor-button-link elementor-size-sm"
													   href="https://demos.reytheme.com/san-francisco/#">
                                             <span class="elementor-button-content-wrapper">
                                             <span class="elementor-button-text">Discover</span>
                                             </span>
													</a>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div
									class="rey-lazyBg elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-03eb1c2 rey-colbg--classic column-flex-dir--vertical"
									data-id="03eb1c2" data-element_type="column"
									data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
									<div
										class="elementor-column-wrap--03eb1c2 elementor-widget-wrap elementor-element-populated">
										<div
											class="elementor-element elementor-element-c21f4df elementor-widget elementor-widget-heading colorized-element"
											data-id="c21f4df" data-element_type="widget"
											data-widget_type="heading.default">
											<div class="elementor-widget-container">
												<h6 class="elementor-heading-title elementor-size-default">Apple watch 6
													series</h6>
											</div>
										</div>
										<div
											class="elementor-element elementor-element-8a5d349 elementor-widget elementor-widget-heading colorized-element"
											data-id="8a5d349" data-element_type="widget"
											data-widget_type="heading.default">
											<div class="elementor-widget-container">
												<h2 class="elementor-heading-title elementor-size-default">The future of
													health is on your wrist</h2>
											</div>
										</div>
										<div
											class="elementor-element elementor-element-f8c9296 elementor-align-right m-auto--top elementor-button-dashed --large elementor-widget elementor-widget-button colorized-element"
											data-id="f8c9296" data-element_type="widget"
											data-widget_type="button.default">
											<div class="elementor-widget-container">
												<div class="elementor-button-wrapper">
													<a class="elementor-button elementor-button-link elementor-size-sm"
													   href="https://demos.reytheme.com/san-francisco/#">
                                             <span class="elementor-button-content-wrapper">
                                             <span class="elementor-button-text">Discover</span>
                                             </span>
													</a>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</section>
						<!-- ############  End Seventh Section  ############ -->
						<!-- ############  Start Eight Section  ############ -->
						<section
							class="elementor-section elementor-top-section elementor-element elementor-element-9ba7172 rey-flexWrap elementor-section-boxed elementor-section-height-default elementor-section-height-default"
							data-id="9ba7172" data-element_type="section">
							<div class="elementor-container elementor-column-gap-default">
								<div
									class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-d1bd9fb"
									data-id="d1bd9fb" data-element_type="column">
									<div
										class="elementor-column-wrap--d1bd9fb elementor-widget-wrap elementor-element-populated">
										<div
											class="elementor-element elementor-element-7512367 elementor-widget elementor-widget-heading colorized-element"
											data-id="7512367" data-element_type="widget"
											data-widget_type="heading.default">
											<div class="elementor-widget-container">
												<h3 class="elementor-heading-title elementor-size-default">
													Promotions</h3>
											</div>
										</div>
									</div>
								</div>
								<div
									class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-ef57b29"
									data-id="ef57b29" data-element_type="column">
									<div
										class="elementor-column-wrap--ef57b29 elementor-widget-wrap elementor-element-populated">
										<div
											class="elementor-element elementor-element-306ad15 elementor-button-dashed --large elementor-align-right elementor-mobile-align-left elementor-widget elementor-widget-button colorized-element"
											data-id="306ad15" data-element_type="widget"
											data-widget_type="button.default">
											<div class="elementor-widget-container">
												<div class="elementor-button-wrapper">
													<a class="elementor-button elementor-button-link elementor-size-sm"
													   href="https://demos.reytheme.com/san-francisco/#">
                                             <span class="elementor-button-content-wrapper">
                                             <span class="elementor-button-text">View all</span>
                                             </span>
													</a>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div
									class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-19bd138"
									data-id="19bd138" data-element_type="column">
									<div
										class="elementor-column-wrap--19bd138 elementor-widget-wrap elementor-element-populated">
										<div
											class="pg-skin-proto elementor-element elementor-element-2c7ebe0 --carousel-navPos-outside elementor-widget elementor-widget-reycore-product-grid"
											data-id="2c7ebe0" data-element_type="widget"
											data-widget_type="reycore-product-grid.carousel">
											<div class="elementor-widget-container">
												<div
													class="woocommerce rey-element reyEl-productGrid reyEl-productGrid--has-thumbs reyEl-productGrid--skin-carousel "
													data-carousel-settings="{&quot;type&quot;:&quot;slide&quot;,&quot;slides_to_show&quot;:4,&quot;slides_to_show_tablet&quot;:3,&quot;slides_to_show_mobile&quot;:2,&quot;slides_to_move&quot;:false,&quot;autoplay&quot;:false,&quot;autoplaySpeed&quot;:null,&quot;pause_on_hover&quot;:&quot;yes&quot;,&quot;infinite&quot;:true,&quot;infinite_tablet&quot;:false,&quot;infinite_mobile&quot;:false,&quot;speed&quot;:500,&quot;direction&quot;:&quot;ltr&quot;,&quot;carousel_padding&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;top&quot;:&quot;&quot;,&quot;right&quot;:&quot;&quot;,&quot;bottom&quot;:&quot;&quot;,&quot;left&quot;:&quot;&quot;,&quot;isLinked&quot;:true},&quot;carousel_padding_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;top&quot;:&quot;&quot;,&quot;right&quot;:&quot;&quot;,&quot;bottom&quot;:&quot;&quot;,&quot;left&quot;:&quot;&quot;,&quot;isLinked&quot;:true},&quot;carousel_padding_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;top&quot;:&quot;0&quot;,&quot;right&quot;:&quot;60&quot;,&quot;bottom&quot;:&quot;0&quot;,&quot;left&quot;:&quot;0&quot;,&quot;isLinked&quot;:false},&quot;delayInit&quot;:&quot;&quot;,&quot;customArrows&quot;:&quot;.__arrows-2c7ebe0&quot;,&quot;free_drag&quot;:[],&quot;side_offset&quot;:&quot;&quot;}"
													data-qt="sale">
													<div class="splide reyEl-productGrid-splide carousel-6238a381cedc0"
														 data-skin="proto">
														<div class="splide__track">
															<ul class="products --prevent-thumbnail-sliders --prevent-scattered --prevent-masonry splide__list rey-wcGap-default rey-wcGrid-default --skin-proto"
																data-slider-carousel-id="carousel-6238a381cedc0"
																data-discount-mobile-top="yes" data-params="[]">
																<li class="rey-swatches rey-swatches--stretch-labels product type-product post-125 status-publish first instock product_cat-bluetooth product_cat-home-audio product_cat-portable product_cat-sets product_cat-speakers product_tag-bluetooth product_tag-speaker has-post-thumbnail sale shipping-taxable purchasable product-type-variable is-animated --shadow- --shadow-h-1 --extraImg-second --extraImg-mobile rey-wc-skin--proto rey-wc-loopAlign-left --uncropped splide__slide"
																	data-pid="125">
																	<div class="rey-productInner --box-styler">
																		<div class="rey-productThumbnail">
																			<a href="https://demos.reytheme.com/san-francisco/product/powerful-multiroom-speaker/"
																			   class="woocommerce-LoopProduct-link woocommerce-loop-product__link"
																			   aria-label="Powerful multiroom speaker">
																				<img decoding="async" width="330"
																					 height="361"
																					 src="data:image/svg+xml,%3Csvg%20xmlns=&#39;http://www.w3.org/2000/svg&#39;%20viewBox=&#39;0%200%20330%20361&#39;%3E%3C/svg%3E"
																					 class="rey-productThumbnail__second"
																					 alt=""
																					 data-lazy-srcset="https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/02/5-330x361.jpg 330w, https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/02/5-274x300.jpg 274w, https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/02/5-936x1024.jpg 936w, https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/02/5-768x840.jpg 768w, https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/02/5-600x656.jpg 600w, https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/02/5.jpg 1024w"
																					 data-lazy-sizes="(max-width: 330px) 100vw, 330px"
																					 data-lazy-src="https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/02/5-330x361.jpg">
																				<noscript><img loading="lazy"
																							   decoding="async"
																							   width="330" height="361"
																							   src="https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/02/5-330x361.jpg"
																							   class="rey-productThumbnail__second"
																							   alt=""
																							   srcset="https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/02/5-330x361.jpg 330w, https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/02/5-274x300.jpg 274w, https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/02/5-936x1024.jpg 936w, https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/02/5-768x840.jpg 768w, https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/02/5-600x656.jpg 600w, https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/02/5.jpg 1024w"
																							   sizes="(max-width: 330px) 100vw, 330px"/>
																				</noscript>
																				<img decoding="async" width="330"
																					 height="361"
																					 src="data:image/svg+xml,%3Csvg%20xmlns=&#39;http://www.w3.org/2000/svg&#39;%20viewBox=&#39;0%200%20330%20361&#39;%3E%3C/svg%3E"
																					 class="rey-thumbImg img--1 attachment-woocommerce_thumbnail size-woocommerce_thumbnail"
																					 alt=""
																					 data-lazy-srcset="https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/02/4-330x361.jpg 330w, https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/02/4-274x300.jpg 274w, https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/02/4-936x1024.jpg 936w, https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/02/4-768x840.jpg 768w, https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/02/4-600x656.jpg 600w, https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/02/4.jpg 1024w"
																					 data-lazy-sizes="(max-width: 330px) 100vw, 330px"
																					 data-lazy-src="https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/02/4-330x361.jpg">
																				<noscript><img loading="lazy"
																							   decoding="async"
																							   width="330" height="361"
																							   src="https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/02/4-330x361.jpg"
																							   class="rey-thumbImg img--1 attachment-woocommerce_thumbnail size-woocommerce_thumbnail"
																							   alt=""
																							   srcset="https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/02/4-330x361.jpg 330w, https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/02/4-274x300.jpg 274w, https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/02/4-936x1024.jpg 936w, https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/02/4-768x840.jpg 768w, https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/02/4-600x656.jpg 600w, https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/02/4.jpg 1024w"
																							   sizes="(max-width: 330px) 100vw, 330px"/>
																				</noscript>
																			</a>
																			<div class="rey-thPos rey-thPos--top-left"
																				 data-position="top-left"><span
																					class="rey-discount">Save $130.00</span>
																			</div>
																			<div class="rey-thPos rey-thPos--top-right"
																				 data-position="top-right">
																				<div
																					class="rey-thPos-item --no-margins">
																					<button
																						class="--icon-style-rounded rey-wishlistBtn rey-wishlistBtn-link"
																						data-lazy-hidden=""
																						data-id="125"
																						title="Add to wishlist"
																						aria-label="Add to wishlist">
																						<svg aria-hidden="true"
																							 role="img"
																							 class="rey-icon rey-icon-heart rey-wishlistBtn-icon"
																							 viewBox="0 0 24 24">
																							<path
																								fill="var(--icon-fill, none)"
																								stroke="currentColor"
																								stroke-width="var(--stroke-width, 1.8px)"
																								stroke-linecap="round"
																								stroke-linejoin="round"
																								d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path>
																						</svg>
																					</button>
																				</div>
																			</div>
																		</div>
																		<div class="rey-loopDetails --padded">
																			<div data-attribute="color"
																				 data-position="first"
																				 class="rey-productVariations2 --single-attr  --side">
																				<form
																					class="variations_form cart --catalog"
																					action="https://demos.reytheme.com/san-francisco/product/powerful-multiroom-speaker/"
																					method="post"
																					enctype="multipart/form-data"
																					data-product_id="125"
																					data-product_variations="[{&quot;attributes&quot;:{&quot;attribute_pa_color&quot;:&quot;&quot;},&quot;availability_html&quot;:&quot;&quot;,&quot;backorders_allowed&quot;:false,&quot;dimensions&quot;:{&quot;length&quot;:&quot;&quot;,&quot;width&quot;:&quot;&quot;,&quot;height&quot;:&quot;&quot;},&quot;dimensions_html&quot;:&quot;N\/A&quot;,&quot;display_price&quot;:769,&quot;display_regular_price&quot;:899,&quot;image&quot;:{&quot;title&quot;:&quot;4&quot;,&quot;caption&quot;:&quot;&quot;,&quot;url&quot;:&quot;https:\/\/demos.reytheme.com\/san-francisco\/wp-content\/uploads\/sites\/24\/2022\/02\/4.jpg&quot;,&quot;alt&quot;:&quot;4&quot;,&quot;src&quot;:&quot;https:\/\/demos.reytheme.com\/san-francisco\/wp-content\/uploads\/sites\/24\/2022\/02\/4-600x656.jpg&quot;,&quot;srcset&quot;:&quot;https:\/\/demos.reytheme.com\/san-francisco\/wp-content\/uploads\/sites\/24\/2022\/02\/4-600x656.jpg 600w, https:\/\/demos.reytheme.com\/san-francisco\/wp-content\/uploads\/sites\/24\/2022\/02\/4-274x300.jpg 274w, https:\/\/demos.reytheme.com\/san-francisco\/wp-content\/uploads\/sites\/24\/2022\/02\/4-936x1024.jpg 936w, https:\/\/demos.reytheme.com\/san-francisco\/wp-content\/uploads\/sites\/24\/2022\/02\/4-768x840.jpg 768w, https:\/\/demos.reytheme.com\/san-francisco\/wp-content\/uploads\/sites\/24\/2022\/02\/4-330x361.jpg 330w, https:\/\/demos.reytheme.com\/san-francisco\/wp-content\/uploads\/sites\/24\/2022\/02\/4.jpg 1024w&quot;,&quot;sizes&quot;:&quot;(max-width: 600px) 100vw, 600px&quot;,&quot;full_src&quot;:&quot;https:\/\/demos.reytheme.com\/san-francisco\/wp-content\/uploads\/sites\/24\/2022\/02\/4.jpg&quot;,&quot;full_src_w&quot;:1024,&quot;full_src_h&quot;:1120,&quot;gallery_thumbnail_src&quot;:&quot;https:\/\/demos.reytheme.com\/san-francisco\/wp-content\/uploads\/sites\/24\/2022\/02\/4-100x100.jpg&quot;,&quot;gallery_thumbnail_src_w&quot;:100,&quot;gallery_thumbnail_src_h&quot;:100,&quot;thumb_src&quot;:&quot;https:\/\/demos.reytheme.com\/san-francisco\/wp-content\/uploads\/sites\/24\/2022\/02\/4-330x361.jpg&quot;,&quot;thumb_src_w&quot;:330,&quot;thumb_src_h&quot;:361,&quot;src_w&quot;:600,&quot;src_h&quot;:656},&quot;image_id&quot;:126,&quot;is_downloadable&quot;:false,&quot;is_in_stock&quot;:true,&quot;is_purchasable&quot;:true,&quot;is_sold_individually&quot;:&quot;no&quot;,&quot;is_virtual&quot;:false,&quot;max_qty&quot;:&quot;&quot;,&quot;min_qty&quot;:1,&quot;price_html&quot;:&quot;&quot;,&quot;sku&quot;:&quot;&quot;,&quot;variation_description&quot;:&quot;&quot;,&quot;variation_id&quot;:889,&quot;variation_is_active&quot;:true,&quot;variation_is_visible&quot;:true,&quot;weight&quot;:&quot;&quot;,&quot;weight_html&quot;:&quot;N\/A&quot;,&quot;stock_status&quot;:&quot;instock&quot;,&quot;step_qty&quot;:1}]"
																					data-atc-text="Add to cart">
																					<div class="variations">
																						<div class="__s-wrapper">
																							<select style="display:none"
																									id="pa_color125"
																									class=""
																									name="attribute_pa_color"
																									data-attribute_name="attribute_pa_color"
																									data-show_option_none="yes">
																								<option value="">Choose
																									an option
																								</option>
																								<option value="black">
																									Black
																								</option>
																								<option value="brown">
																									Brown
																								</option>
																								<option value="grey">
																									Grey
																								</option>
																							</select>
																							<div aria-label="color"
																								 data-attribute_name="attribute_pa_color"
																								 style=""
																								 class="rey-swatchList --type-color --light-tooltips --disabled-dim --deselection-clear">
																								<div title="Black"
																									 data-term-id="22"
																									 data-term-slug="black"
																									 data-attribute-name="pa_color"
																									 aria-label="Black"
																									 role="radio"
																									 aria-checked="false"
																									 class="rey-swatchList-item --type-color rey-swatchList-item--regular "
																									 data-description="">
																									<span
																										class="rey-swatchList-itemContent"
																										style="background: #45464c;"></span>
																								</div>
																								<div title="Brown"
																									 data-term-id="24"
																									 data-term-slug="brown"
																									 data-attribute-name="pa_color"
																									 aria-label="Brown"
																									 role="radio"
																									 aria-checked="false"
																									 class="rey-swatchList-item --type-color rey-swatchList-item--regular "
																									 data-description="">
																									<span
																										class="rey-swatchList-itemContent"
																										style="background: #956b45;"></span>
																								</div>
																								<div title="Grey"
																									 data-term-id="33"
																									 data-term-slug="grey"
																									 data-attribute-name="pa_color"
																									 aria-label="Grey"
																									 role="radio"
																									 aria-checked="false"
																									 class="rey-swatchList-item --type-color rey-swatchList-item--regular "
																									 data-description="">
																									<span
																										class="rey-swatchList-itemContent"
																										style="background: #dbdbdb;"></span>
																								</div>
																							</div>
																						</div>
																					</div>
																				</form>
																			</div>
																			<div class="rey-brandLink --catalog"><a
																					href="https://demos.reytheme.com/san-francisco/product-brand/squarex/">SquareX</a>
																			</div>
																			<h2 class="woocommerce-loop-product__title">
																				<a href="https://demos.reytheme.com/san-francisco/product/powerful-multiroom-speaker/">Powerful
																					multiroom speaker</a></h2>
																			<div class="__break"></div>
																			<span class="price rey-loopPrice"><del
																					aria-hidden="true"><span
																						class="woocommerce-Price-amount amount"><bdi><span
																								class="woocommerce-Price-currencySymbol">$</span>899.00</bdi></span></del> <span
																					class="screen-reader-text">Original price was: $899.00.</span><ins
																					aria-hidden="true"><span
																						class="woocommerce-Price-amount amount"><bdi><span
																								class="woocommerce-Price-currencySymbol">$</span>769.00</bdi></span></ins><span
																					class="screen-reader-text">Current price is: $769.00.</span><span
																					class="rey-discount">Save $130.00</span></span>
																			<div class="rey-loopButtons">
																				<a href="https://demos.reytheme.com/san-francisco/product/powerful-multiroom-speaker/"
																				   data-quantity="1"
																				   class="button product_type_variable add_to_cart_button rey-btn--hover"
																				   data-product_id="125"
																				   data-product_sku=""
																				   aria-label="Select options for “Powerful multiroom speaker”"
																				   rel="nofollow"><span class="__text">Select options</span></a>
																				<span
																					id="woocommerce_loop_add_to_cart_link_describedby_125"
																					class="screen-reader-text">
                                                                  This product has multiple variants. The options may be chosen on the product page	</span>
																				<button
																					class="button rey-btn--hover rey-quickviewBtn js-rey-quickviewBtn"
																					data-id="125" title="QUICKVIEW">
																					QUICKVIEW
																				</button>
																			</div>
																		</div>
																	</div>
																</li>
																<li class="rey-swatches rey-swatches--stretch-labels product type-product post-921 status-publish instock product_cat-accessories-cameras product_cat-action product_cat-cameras product_cat-dslr product_cat-lenses product_cat-mirrorless has-post-thumbnail sale shipping-taxable purchasable product-type-variable is-animated --shadow- --shadow-h-1 --extraImg-second --extraImg-mobile rey-wc-skin--proto rey-wc-loopAlign-left --uncropped splide__slide"
																	data-pid="921">
																	<div class="rey-productInner --box-styler">
																		<div class="rey-productThumbnail">
																			<a href="https://demos.reytheme.com/san-francisco/product/mirrorless-camera-lens/"
																			   class="woocommerce-LoopProduct-link woocommerce-loop-product__link"
																			   aria-label="Mirrorless camera lens">
																				<img decoding="async" width="330"
																					 height="361"
																					 src="data:image/svg+xml,%3Csvg%20xmlns=&#39;http://www.w3.org/2000/svg&#39;%20viewBox=&#39;0%200%20330%20361&#39;%3E%3C/svg%3E"
																					 class="rey-productThumbnail__second"
																					 alt=""
																					 data-lazy-srcset="https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/04/50-330x361.jpg 330w, https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/04/50-274x300.jpg 274w, https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/04/50-936x1024.jpg 936w, https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/04/50-768x840.jpg 768w, https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/04/50-600x656.jpg 600w, https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/04/50.jpg 1024w"
																					 data-lazy-sizes="(max-width: 330px) 100vw, 330px"
																					 data-lazy-src="https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/04/50-330x361.jpg">
																				<noscript><img loading="lazy"
																							   decoding="async"
																							   width="330" height="361"
																							   src="https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/04/50-330x361.jpg"
																							   class="rey-productThumbnail__second"
																							   alt=""
																							   srcset="https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/04/50-330x361.jpg 330w, https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/04/50-274x300.jpg 274w, https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/04/50-936x1024.jpg 936w, https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/04/50-768x840.jpg 768w, https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/04/50-600x656.jpg 600w, https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/04/50.jpg 1024w"
																							   sizes="(max-width: 330px) 100vw, 330px"/>
																				</noscript>
																				<img decoding="async" width="330"
																					 height="361"
																					 src="data:image/svg+xml,%3Csvg%20xmlns=&#39;http://www.w3.org/2000/svg&#39;%20viewBox=&#39;0%200%20330%20361&#39;%3E%3C/svg%3E"
																					 class="rey-thumbImg img--1 attachment-woocommerce_thumbnail size-woocommerce_thumbnail"
																					 alt=""
																					 data-lazy-srcset="https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/04/49-330x361.jpg 330w, https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/04/49-274x300.jpg 274w, https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/04/49-936x1024.jpg 936w, https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/04/49-768x840.jpg 768w, https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/04/49-600x656.jpg 600w, https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/04/49.jpg 1024w"
																					 data-lazy-sizes="(max-width: 330px) 100vw, 330px"
																					 data-lazy-src="https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/04/49-330x361.jpg">
																				<noscript><img loading="lazy"
																							   decoding="async"
																							   width="330" height="361"
																							   src="https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/04/49-330x361.jpg"
																							   class="rey-thumbImg img--1 attachment-woocommerce_thumbnail size-woocommerce_thumbnail"
																							   alt=""
																							   srcset="https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/04/49-330x361.jpg 330w, https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/04/49-274x300.jpg 274w, https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/04/49-936x1024.jpg 936w, https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/04/49-768x840.jpg 768w, https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/04/49-600x656.jpg 600w, https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/04/49.jpg 1024w"
																							   sizes="(max-width: 330px) 100vw, 330px"/>
																				</noscript>
																			</a>
																			<div class="rey-thPos rey-thPos--top-left"
																				 data-position="top-left"><span
																					class="rey-discount">Save $160.00</span>
																			</div>
																			<div class="rey-thPos rey-thPos--top-right"
																				 data-position="top-right">
																				<div
																					class="rey-thPos-item --no-margins">
																					<button
																						class="--icon-style-rounded rey-wishlistBtn rey-wishlistBtn-link"
																						data-lazy-hidden=""
																						data-id="921"
																						title="Add to wishlist"
																						aria-label="Add to wishlist">
																						<svg aria-hidden="true"
																							 role="img"
																							 class="rey-icon rey-icon-heart rey-wishlistBtn-icon"
																							 viewBox="0 0 24 24">
																							<path
																								fill="var(--icon-fill, none)"
																								stroke="currentColor"
																								stroke-width="var(--stroke-width, 1.8px)"
																								stroke-linecap="round"
																								stroke-linejoin="round"
																								d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path>
																						</svg>
																					</button>
																				</div>
																			</div>
																		</div>
																		<div class="rey-loopDetails --padded">
																			<div class="rey-brandLink --catalog"><a
																					href="https://demos.reytheme.com/san-francisco/product-brand/quantech/">Quantech</a>
																			</div>
																			<h2 class="woocommerce-loop-product__title">
																				<a href="https://demos.reytheme.com/san-francisco/product/mirrorless-camera-lens/">Mirrorless
																					camera lens</a></h2>
																			<div class="__break"></div>
																			<span class="price rey-loopPrice"><del
																					aria-hidden="true"><span
																						class="woocommerce-Price-amount amount"><bdi><span
																								class="woocommerce-Price-currencySymbol">$</span>489.00</bdi></span></del> <span
																					class="screen-reader-text">Original price was: $489.00.</span><ins
																					aria-hidden="true"><span
																						class="woocommerce-Price-amount amount"><bdi><span
																								class="woocommerce-Price-currencySymbol">$</span>329.00</bdi></span></ins><span
																					class="screen-reader-text">Current price is: $329.00.</span><span
																					class="rey-discount">Save $160.00</span></span>
																			<div class="rey-loopButtons">
																				<a href="https://demos.reytheme.com/san-francisco/product/mirrorless-camera-lens/"
																				   data-quantity="1"
																				   class="button product_type_variable add_to_cart_button rey-btn--hover"
																				   data-product_id="921"
																				   data-product_sku=""
																				   aria-label="Select options for “Mirrorless camera lens”"
																				   rel="nofollow"><span class="__text">Select options</span></a>
																				<span
																					id="woocommerce_loop_add_to_cart_link_describedby_921"
																					class="screen-reader-text">
                                                                  This product has multiple variants. The options may be chosen on the product page	</span>
																				<button
																					class="button rey-btn--hover rey-quickviewBtn js-rey-quickviewBtn"
																					data-id="921" title="QUICKVIEW">
																					QUICKVIEW
																				</button>
																			</div>
																		</div>
																	</div>
																</li>
																<li class="rey-swatches rey-swatches--stretch-labels product type-product post-900 status-publish instock product_cat-accessories-cameras product_cat-action product_cat-cameras product_cat-dslr product_cat-lenses product_cat-mirrorless has-post-thumbnail sale shipping-taxable purchasable product-type-variable is-animated --shadow- --shadow-h-1 --extraImg-second --extraImg-mobile rey-wc-skin--proto rey-wc-loopAlign-left --uncropped splide__slide"
																	data-pid="900">
																	<div class="rey-productInner --box-styler">
																		<div class="rey-productThumbnail">
																			<a href="https://demos.reytheme.com/san-francisco/product/tiny-action-camera/"
																			   class="woocommerce-LoopProduct-link woocommerce-loop-product__link"
																			   aria-label="Tiny action camera">
																				<img decoding="async" width="330"
																					 height="361"
																					 src="data:image/svg+xml,%3Csvg%20xmlns=&#39;http://www.w3.org/2000/svg&#39;%20viewBox=&#39;0%200%20330%20361&#39;%3E%3C/svg%3E"
																					 class="rey-productThumbnail__second"
																					 alt=""
																					 data-lazy-srcset="https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/04/38-330x361.jpg 330w, https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/04/38-274x300.jpg 274w, https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/04/38-936x1024.jpg 936w, https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/04/38-768x840.jpg 768w, https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/04/38-600x656.jpg 600w, https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/04/38.jpg 1024w"
																					 data-lazy-sizes="(max-width: 330px) 100vw, 330px"
																					 data-lazy-src="https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/04/38-330x361.jpg">
																				<noscript><img loading="lazy"
																							   decoding="async"
																							   width="330" height="361"
																							   src="https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/04/38-330x361.jpg"
																							   class="rey-productThumbnail__second"
																							   alt=""
																							   srcset="https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/04/38-330x361.jpg 330w, https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/04/38-274x300.jpg 274w, https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/04/38-936x1024.jpg 936w, https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/04/38-768x840.jpg 768w, https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/04/38-600x656.jpg 600w, https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/04/38.jpg 1024w"
																							   sizes="(max-width: 330px) 100vw, 330px"/>
																				</noscript>
																				<img decoding="async" width="330"
																					 height="361"
																					 src="data:image/svg+xml,%3Csvg%20xmlns=&#39;http://www.w3.org/2000/svg&#39;%20viewBox=&#39;0%200%20330%20361&#39;%3E%3C/svg%3E"
																					 class="rey-thumbImg img--1 attachment-woocommerce_thumbnail size-woocommerce_thumbnail"
																					 alt=""
																					 data-lazy-srcset="https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/04/36-330x361.jpg 330w, https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/04/36-274x300.jpg 274w, https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/04/36-936x1024.jpg 936w, https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/04/36-768x840.jpg 768w, https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/04/36-600x656.jpg 600w, https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/04/36.jpg 1024w"
																					 data-lazy-sizes="(max-width: 330px) 100vw, 330px"
																					 data-lazy-src="https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/04/36-330x361.jpg">
																				<noscript><img loading="lazy"
																							   decoding="async"
																							   width="330" height="361"
																							   src="https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/04/36-330x361.jpg"
																							   class="rey-thumbImg img--1 attachment-woocommerce_thumbnail size-woocommerce_thumbnail"
																							   alt=""
																							   srcset="https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/04/36-330x361.jpg 330w, https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/04/36-274x300.jpg 274w, https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/04/36-936x1024.jpg 936w, https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/04/36-768x840.jpg 768w, https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/04/36-600x656.jpg 600w, https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/04/36.jpg 1024w"
																							   sizes="(max-width: 330px) 100vw, 330px"/>
																				</noscript>
																			</a>
																			<div class="rey-thPos rey-thPos--top-left"
																				 data-position="top-left"><span
																					class="rey-discount">Save $20.00</span>
																			</div>
																			<div class="rey-thPos rey-thPos--top-right"
																				 data-position="top-right">
																				<div
																					class="rey-thPos-item --no-margins">
																					<button
																						class="--icon-style-rounded rey-wishlistBtn rey-wishlistBtn-link"
																						data-lazy-hidden=""
																						data-id="900"
																						title="Add to wishlist"
																						aria-label="Add to wishlist">
																						<svg aria-hidden="true"
																							 role="img"
																							 class="rey-icon rey-icon-heart rey-wishlistBtn-icon"
																							 viewBox="0 0 24 24">
																							<path
																								fill="var(--icon-fill, none)"
																								stroke="currentColor"
																								stroke-width="var(--stroke-width, 1.8px)"
																								stroke-linecap="round"
																								stroke-linejoin="round"
																								d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path>
																						</svg>
																					</button>
																				</div>
																			</div>
																		</div>
																		<div class="rey-loopDetails --padded">
																			<div class="rey-brandLink --catalog"><a
																					href="https://demos.reytheme.com/san-francisco/product-brand/squarex/">SquareX</a>
																			</div>
																			<h2 class="woocommerce-loop-product__title">
																				<a href="https://demos.reytheme.com/san-francisco/product/tiny-action-camera/">Tiny
																					action camera</a></h2>
																			<div class="__break"></div>
																			<span class="price rey-loopPrice"><del
																					aria-hidden="true"><span
																						class="woocommerce-Price-amount amount"><bdi><span
																								class="woocommerce-Price-currencySymbol">$</span>289.00</bdi></span></del> <span
																					class="screen-reader-text">Original price was: $289.00.</span><ins
																					aria-hidden="true"><span
																						class="woocommerce-Price-amount amount"><bdi><span
																								class="woocommerce-Price-currencySymbol">$</span>269.00</bdi></span></ins><span
																					class="screen-reader-text">Current price is: $269.00.</span><span
																					class="rey-discount">Save $20.00</span></span>
																			<div class="rey-loopButtons">
																				<a href="https://demos.reytheme.com/san-francisco/product/tiny-action-camera/"
																				   data-quantity="1"
																				   class="button product_type_variable add_to_cart_button rey-btn--hover"
																				   data-product_id="900"
																				   data-product_sku=""
																				   aria-label="Select options for “Tiny action camera”"
																				   rel="nofollow"><span class="__text">Select options</span></a>
																				<span
																					id="woocommerce_loop_add_to_cart_link_describedby_900"
																					class="screen-reader-text">
                                                                  This product has multiple variants. The options may be chosen on the product page	</span>
																				<button
																					class="button rey-btn--hover rey-quickviewBtn js-rey-quickviewBtn"
																					data-id="900" title="QUICKVIEW">
																					QUICKVIEW
																				</button>
																			</div>
																		</div>
																	</div>
																</li>
																<li class="rey-swatches rey-swatches--stretch-labels product type-product post-842 status-publish last instock product_cat-fitness-trackers product_cat-glasses product_cat-key-trackers product_cat-smartwatches product_cat-virtual-reality product_cat-wearables has-post-thumbnail sale shipping-taxable purchasable product-type-variable is-animated --shadow- --shadow-h-1 --extraImg-second --extraImg-mobile rey-wc-skin--proto rey-wc-loopAlign-left --uncropped splide__slide"
																	data-pid="842">
																	<div class="rey-productInner --box-styler">
																		<div class="rey-productThumbnail">
																			<a href="https://demos.reytheme.com/san-francisco/product/advanced-health-smartwatch/"
																			   class="woocommerce-LoopProduct-link woocommerce-loop-product__link"
																			   aria-label="Advanced Health Smartwatch">
																				<img decoding="async" width="330"
																					 height="361"
																					 src="data:image/svg+xml,%3Csvg%20xmlns=&#39;http://www.w3.org/2000/svg&#39;%20viewBox=&#39;0%200%20330%20361&#39;%3E%3C/svg%3E"
																					 class="rey-productThumbnail__second"
																					 alt=""
																					 data-lazy-srcset="https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/03/20-330x361.jpg 330w, https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/03/20-274x300.jpg 274w, https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/03/20-936x1024.jpg 936w, https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/03/20-768x840.jpg 768w, https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/03/20-600x656.jpg 600w, https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/03/20.jpg 1024w"
																					 data-lazy-sizes="(max-width: 330px) 100vw, 330px"
																					 data-lazy-src="https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/03/20-330x361.jpg">
																				<noscript><img loading="lazy"
																							   decoding="async"
																							   width="330" height="361"
																							   src="https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/03/20-330x361.jpg"
																							   class="rey-productThumbnail__second"
																							   alt=""
																							   srcset="https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/03/20-330x361.jpg 330w, https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/03/20-274x300.jpg 274w, https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/03/20-936x1024.jpg 936w, https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/03/20-768x840.jpg 768w, https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/03/20-600x656.jpg 600w, https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/03/20.jpg 1024w"
																							   sizes="(max-width: 330px) 100vw, 330px"/>
																				</noscript>
																				<img decoding="async" width="330"
																					 height="361"
																					 src="data:image/svg+xml,%3Csvg%20xmlns=&#39;http://www.w3.org/2000/svg&#39;%20viewBox=&#39;0%200%20330%20361&#39;%3E%3C/svg%3E"
																					 class="rey-thumbImg img--1 attachment-woocommerce_thumbnail size-woocommerce_thumbnail"
																					 alt=""
																					 data-lazy-srcset="https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/03/21-330x361.jpg 330w, https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/03/21-274x300.jpg 274w, https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/03/21-936x1024.jpg 936w, https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/03/21-768x840.jpg 768w, https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/03/21-600x656.jpg 600w, https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/03/21.jpg 1024w"
																					 data-lazy-sizes="(max-width: 330px) 100vw, 330px"
																					 data-lazy-src="https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/03/21-330x361.jpg">
																				<noscript><img loading="lazy"
																							   decoding="async"
																							   width="330" height="361"
																							   src="https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/03/21-330x361.jpg"
																							   class="rey-thumbImg img--1 attachment-woocommerce_thumbnail size-woocommerce_thumbnail"
																							   alt=""
																							   srcset="https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/03/21-330x361.jpg 330w, https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/03/21-274x300.jpg 274w, https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/03/21-936x1024.jpg 936w, https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/03/21-768x840.jpg 768w, https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/03/21-600x656.jpg 600w, https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/03/21.jpg 1024w"
																							   sizes="(max-width: 330px) 100vw, 330px"/>
																				</noscript>
																			</a>
																			<div class="rey-thPos rey-thPos--top-left"
																				 data-position="top-left"><span
																					class="rey-discount">Save $160.00</span>
																			</div>
																			<div class="rey-thPos rey-thPos--top-right"
																				 data-position="top-right">
																				<div
																					class="rey-thPos-item --no-margins">
																					<button
																						class="--icon-style-rounded rey-wishlistBtn rey-wishlistBtn-link"
																						data-lazy-hidden=""
																						data-id="842"
																						title="Add to wishlist"
																						aria-label="Add to wishlist">
																						<svg aria-hidden="true"
																							 role="img"
																							 class="rey-icon rey-icon-heart rey-wishlistBtn-icon"
																							 viewBox="0 0 24 24">
																							<path
																								fill="var(--icon-fill, none)"
																								stroke="currentColor"
																								stroke-width="var(--stroke-width, 1.8px)"
																								stroke-linecap="round"
																								stroke-linejoin="round"
																								d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path>
																						</svg>
																					</button>
																				</div>
																			</div>
																		</div>
																		<div class="rey-loopDetails --padded">
																			<div data-attribute="color"
																				 data-position="first"
																				 class="rey-productVariations2 --single-attr  --side">
																				<form
																					class="variations_form cart --catalog"
																					action="https://demos.reytheme.com/san-francisco/product/advanced-health-smartwatch/"
																					method="post"
																					enctype="multipart/form-data"
																					data-product_id="842"
																					data-product_variations="[{&quot;attributes&quot;:{&quot;attribute_pa_color&quot;:&quot;&quot;},&quot;availability_html&quot;:&quot;&quot;,&quot;backorders_allowed&quot;:false,&quot;dimensions&quot;:{&quot;length&quot;:&quot;&quot;,&quot;width&quot;:&quot;&quot;,&quot;height&quot;:&quot;&quot;},&quot;dimensions_html&quot;:&quot;N\/A&quot;,&quot;display_price&quot;:389,&quot;display_regular_price&quot;:549,&quot;image&quot;:{&quot;title&quot;:&quot;21&quot;,&quot;caption&quot;:&quot;&quot;,&quot;url&quot;:&quot;https:\/\/demos.reytheme.com\/san-francisco\/wp-content\/uploads\/sites\/24\/2022\/03\/21.jpg&quot;,&quot;alt&quot;:&quot;21&quot;,&quot;src&quot;:&quot;https:\/\/demos.reytheme.com\/san-francisco\/wp-content\/uploads\/sites\/24\/2022\/03\/21-600x656.jpg&quot;,&quot;srcset&quot;:&quot;https:\/\/demos.reytheme.com\/san-francisco\/wp-content\/uploads\/sites\/24\/2022\/03\/21-600x656.jpg 600w, https:\/\/demos.reytheme.com\/san-francisco\/wp-content\/uploads\/sites\/24\/2022\/03\/21-274x300.jpg 274w, https:\/\/demos.reytheme.com\/san-francisco\/wp-content\/uploads\/sites\/24\/2022\/03\/21-936x1024.jpg 936w, https:\/\/demos.reytheme.com\/san-francisco\/wp-content\/uploads\/sites\/24\/2022\/03\/21-768x840.jpg 768w, https:\/\/demos.reytheme.com\/san-francisco\/wp-content\/uploads\/sites\/24\/2022\/03\/21-330x361.jpg 330w, https:\/\/demos.reytheme.com\/san-francisco\/wp-content\/uploads\/sites\/24\/2022\/03\/21.jpg 1024w&quot;,&quot;sizes&quot;:&quot;(max-width: 600px) 100vw, 600px&quot;,&quot;full_src&quot;:&quot;https:\/\/demos.reytheme.com\/san-francisco\/wp-content\/uploads\/sites\/24\/2022\/03\/21.jpg&quot;,&quot;full_src_w&quot;:1024,&quot;full_src_h&quot;:1120,&quot;gallery_thumbnail_src&quot;:&quot;https:\/\/demos.reytheme.com\/san-francisco\/wp-content\/uploads\/sites\/24\/2022\/03\/21-100x100.jpg&quot;,&quot;gallery_thumbnail_src_w&quot;:100,&quot;gallery_thumbnail_src_h&quot;:100,&quot;thumb_src&quot;:&quot;https:\/\/demos.reytheme.com\/san-francisco\/wp-content\/uploads\/sites\/24\/2022\/03\/21-330x361.jpg&quot;,&quot;thumb_src_w&quot;:330,&quot;thumb_src_h&quot;:361,&quot;src_w&quot;:600,&quot;src_h&quot;:656},&quot;image_id&quot;:845,&quot;is_downloadable&quot;:false,&quot;is_in_stock&quot;:true,&quot;is_purchasable&quot;:true,&quot;is_sold_individually&quot;:&quot;no&quot;,&quot;is_virtual&quot;:false,&quot;max_qty&quot;:&quot;&quot;,&quot;min_qty&quot;:1,&quot;price_html&quot;:&quot;&quot;,&quot;sku&quot;:&quot;&quot;,&quot;variation_description&quot;:&quot;&quot;,&quot;variation_id&quot;:869,&quot;variation_is_active&quot;:true,&quot;variation_is_visible&quot;:true,&quot;weight&quot;:&quot;&quot;,&quot;weight_html&quot;:&quot;N\/A&quot;,&quot;stock_status&quot;:&quot;instock&quot;,&quot;step_qty&quot;:1}]"
																					data-atc-text="Add to cart">
																					<div class="variations">
																						<div class="__s-wrapper">
																							<select style="display:none"
																									id="pa_color842"
																									class=""
																									name="attribute_pa_color"
																									data-attribute_name="attribute_pa_color"
																									data-show_option_none="yes">
																								<option value="">Choose
																									an option
																								</option>
																								<option value="beige">
																									Beige
																								</option>
																								<option value="grey">
																									Grey
																								</option>
																								<option value="red">
																									Red
																								</option>
																							</select>
																							<div aria-label="color"
																								 data-attribute_name="attribute_pa_color"
																								 style=""
																								 class="rey-swatchList --type-color --light-tooltips --disabled-dim --deselection-clear">
																								<div title="Beige"
																									 data-term-id="20"
																									 data-term-slug="beige"
																									 data-attribute-name="pa_color"
																									 aria-label="Beige"
																									 role="radio"
																									 aria-checked="false"
																									 class="rey-swatchList-item --type-color rey-swatchList-item--regular "
																									 data-description="">
																									<span
																										class="rey-swatchList-itemContent"
																										style="background: #dfc5a0;"></span>
																								</div>
																								<div title="Grey"
																									 data-term-id="33"
																									 data-term-slug="grey"
																									 data-attribute-name="pa_color"
																									 aria-label="Grey"
																									 role="radio"
																									 aria-checked="false"
																									 class="rey-swatchList-item --type-color rey-swatchList-item--regular "
																									 data-description="">
																									<span
																										class="rey-swatchList-itemContent"
																										style="background: #dbdbdb;"></span>
																								</div>
																								<div title="Red"
																									 data-term-id="43"
																									 data-term-slug="red"
																									 data-attribute-name="pa_color"
																									 aria-label="Red"
																									 role="radio"
																									 aria-checked="false"
																									 class="rey-swatchList-item --type-color rey-swatchList-item--regular "
																									 data-description="">
																									<span
																										class="rey-swatchList-itemContent"
																										style="background: #e75243;"></span>
																								</div>
																							</div>
																						</div>
																					</div>
																				</form>
																			</div>
																			<div class="rey-brandLink --catalog"><a
																					href="https://demos.reytheme.com/san-francisco/product-brand/squarex/">SquareX</a>
																			</div>
																			<h2 class="woocommerce-loop-product__title">
																				<a href="https://demos.reytheme.com/san-francisco/product/advanced-health-smartwatch/">Advanced
																					Health Smartwatch</a></h2>
																			<div class="__break"></div>
																			<span class="price rey-loopPrice"><del
																					aria-hidden="true"><span
																						class="woocommerce-Price-amount amount"><bdi><span
																								class="woocommerce-Price-currencySymbol">$</span>549.00</bdi></span></del> <span
																					class="screen-reader-text">Original price was: $549.00.</span><ins
																					aria-hidden="true"><span
																						class="woocommerce-Price-amount amount"><bdi><span
																								class="woocommerce-Price-currencySymbol">$</span>389.00</bdi></span></ins><span
																					class="screen-reader-text">Current price is: $389.00.</span><span
																					class="rey-discount">Save $160.00</span></span>
																			<div class="rey-loopButtons">
																				<a href="https://demos.reytheme.com/san-francisco/product/advanced-health-smartwatch/"
																				   data-quantity="1"
																				   class="button product_type_variable add_to_cart_button rey-btn--hover"
																				   data-product_id="842"
																				   data-product_sku=""
																				   aria-label="Select options for “Advanced Health Smartwatch”"
																				   rel="nofollow"><span class="__text">Select options</span></a>
																				<span
																					id="woocommerce_loop_add_to_cart_link_describedby_842"
																					class="screen-reader-text">
                                                                  This product has multiple variants. The options may be chosen on the product page	</span>
																				<button
																					class="button rey-btn--hover rey-quickviewBtn js-rey-quickviewBtn"
																					data-id="842" title="QUICKVIEW">
																					QUICKVIEW
																				</button>
																			</div>
																		</div>
																	</div>
																</li>
																<li class="rey-swatches rey-swatches--stretch-labels product type-product post-141 status-publish first instock product_cat-earbuds product_cat-headphones product_cat-on-ear product_cat-wireless has-post-thumbnail sale shipping-taxable purchasable product-type-variable is-animated --shadow- --shadow-h-1 --extraImg-second --extraImg-mobile rey-wc-skin--proto rey-wc-loopAlign-left --uncropped splide__slide"
																	data-pid="141">
																	<div class="rey-productInner --box-styler">
																		<div class="rey-productThumbnail">
																			<a href="https://demos.reytheme.com/san-francisco/product/adaptive-wireless-earbuds/"
																			   class="woocommerce-LoopProduct-link woocommerce-loop-product__link"
																			   aria-label="Adaptive wireless earbuds">
																				<img decoding="async" width="330"
																					 height="361"
																					 src="data:image/svg+xml,%3Csvg%20xmlns=&#39;http://www.w3.org/2000/svg&#39;%20viewBox=&#39;0%200%20330%20361&#39;%3E%3C/svg%3E"
																					 class="rey-productThumbnail__second"
																					 alt=""
																					 data-lazy-srcset="https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/02/17-330x361.jpg 330w, https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/02/17-274x300.jpg 274w, https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/02/17-936x1024.jpg 936w, https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/02/17-768x840.jpg 768w, https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/02/17-600x656.jpg 600w, https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/02/17.jpg 1024w"
																					 data-lazy-sizes="(max-width: 330px) 100vw, 330px"
																					 data-lazy-src="https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/02/17-330x361.jpg">
																				<noscript><img loading="lazy"
																							   decoding="async"
																							   width="330" height="361"
																							   src="https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/02/17-330x361.jpg"
																							   class="rey-productThumbnail__second"
																							   alt=""
																							   srcset="https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/02/17-330x361.jpg 330w, https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/02/17-274x300.jpg 274w, https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/02/17-936x1024.jpg 936w, https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/02/17-768x840.jpg 768w, https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/02/17-600x656.jpg 600w, https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/02/17.jpg 1024w"
																							   sizes="(max-width: 330px) 100vw, 330px"/>
																				</noscript>
																				<img decoding="async" width="330"
																					 height="361"
																					 src="data:image/svg+xml,%3Csvg%20xmlns=&#39;http://www.w3.org/2000/svg&#39;%20viewBox=&#39;0%200%20330%20361&#39;%3E%3C/svg%3E"
																					 class="rey-thumbImg img--1 attachment-woocommerce_thumbnail size-woocommerce_thumbnail"
																					 alt=""
																					 data-lazy-srcset="https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/02/16-330x361.jpg 330w, https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/02/16-274x300.jpg 274w, https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/02/16-936x1024.jpg 936w, https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/02/16-768x840.jpg 768w, https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/02/16-600x656.jpg 600w, https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/02/16.jpg 1024w"
																					 data-lazy-sizes="(max-width: 330px) 100vw, 330px"
																					 data-lazy-src="https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/02/16-330x361.jpg">
																				<noscript><img loading="lazy"
																							   decoding="async"
																							   width="330" height="361"
																							   src="https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/02/16-330x361.jpg"
																							   class="rey-thumbImg img--1 attachment-woocommerce_thumbnail size-woocommerce_thumbnail"
																							   alt=""
																							   srcset="https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/02/16-330x361.jpg 330w, https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/02/16-274x300.jpg 274w, https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/02/16-936x1024.jpg 936w, https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/02/16-768x840.jpg 768w, https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/02/16-600x656.jpg 600w, https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/02/16.jpg 1024w"
																							   sizes="(max-width: 330px) 100vw, 330px"/>
																				</noscript>
																			</a>
																			<div class="rey-thPos rey-thPos--top-left"
																				 data-position="top-left"><span
																					class="rey-discount">Save $40.00</span>
																			</div>
																			<div class="rey-thPos rey-thPos--top-right"
																				 data-position="top-right">
																				<div
																					class="rey-thPos-item --no-margins">
																					<button
																						class="--icon-style-rounded rey-wishlistBtn rey-wishlistBtn-link"
																						data-lazy-hidden=""
																						data-id="141"
																						title="Add to wishlist"
																						aria-label="Add to wishlist">
																						<svg aria-hidden="true"
																							 role="img"
																							 class="rey-icon rey-icon-heart rey-wishlistBtn-icon"
																							 viewBox="0 0 24 24">
																							<path
																								fill="var(--icon-fill, none)"
																								stroke="currentColor"
																								stroke-width="var(--stroke-width, 1.8px)"
																								stroke-linecap="round"
																								stroke-linejoin="round"
																								d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path>
																						</svg>
																					</button>
																				</div>
																			</div>
																		</div>
																		<div class="rey-loopDetails --padded">
																			<div data-attribute="color"
																				 data-position="first"
																				 class="rey-productVariations2 --single-attr  --side">
																				<form
																					class="variations_form cart --catalog"
																					action="https://demos.reytheme.com/san-francisco/product/adaptive-wireless-earbuds/"
																					method="post"
																					enctype="multipart/form-data"
																					data-product_id="141"
																					data-product_variations="[{&quot;attributes&quot;:{&quot;attribute_pa_color&quot;:&quot;&quot;},&quot;availability_html&quot;:&quot;&quot;,&quot;backorders_allowed&quot;:false,&quot;dimensions&quot;:{&quot;length&quot;:&quot;&quot;,&quot;width&quot;:&quot;&quot;,&quot;height&quot;:&quot;&quot;},&quot;dimensions_html&quot;:&quot;N\/A&quot;,&quot;display_price&quot;:149,&quot;display_regular_price&quot;:189,&quot;image&quot;:{&quot;title&quot;:&quot;16&quot;,&quot;caption&quot;:&quot;&quot;,&quot;url&quot;:&quot;https:\/\/demos.reytheme.com\/san-francisco\/wp-content\/uploads\/sites\/24\/2022\/02\/16.jpg&quot;,&quot;alt&quot;:&quot;16&quot;,&quot;src&quot;:&quot;https:\/\/demos.reytheme.com\/san-francisco\/wp-content\/uploads\/sites\/24\/2022\/02\/16-600x656.jpg&quot;,&quot;srcset&quot;:&quot;https:\/\/demos.reytheme.com\/san-francisco\/wp-content\/uploads\/sites\/24\/2022\/02\/16-600x656.jpg 600w, https:\/\/demos.reytheme.com\/san-francisco\/wp-content\/uploads\/sites\/24\/2022\/02\/16-274x300.jpg 274w, https:\/\/demos.reytheme.com\/san-francisco\/wp-content\/uploads\/sites\/24\/2022\/02\/16-936x1024.jpg 936w, https:\/\/demos.reytheme.com\/san-francisco\/wp-content\/uploads\/sites\/24\/2022\/02\/16-768x840.jpg 768w, https:\/\/demos.reytheme.com\/san-francisco\/wp-content\/uploads\/sites\/24\/2022\/02\/16-330x361.jpg 330w, https:\/\/demos.reytheme.com\/san-francisco\/wp-content\/uploads\/sites\/24\/2022\/02\/16.jpg 1024w&quot;,&quot;sizes&quot;:&quot;(max-width: 600px) 100vw, 600px&quot;,&quot;full_src&quot;:&quot;https:\/\/demos.reytheme.com\/san-francisco\/wp-content\/uploads\/sites\/24\/2022\/02\/16.jpg&quot;,&quot;full_src_w&quot;:1024,&quot;full_src_h&quot;:1120,&quot;gallery_thumbnail_src&quot;:&quot;https:\/\/demos.reytheme.com\/san-francisco\/wp-content\/uploads\/sites\/24\/2022\/02\/16-100x100.jpg&quot;,&quot;gallery_thumbnail_src_w&quot;:100,&quot;gallery_thumbnail_src_h&quot;:100,&quot;thumb_src&quot;:&quot;https:\/\/demos.reytheme.com\/san-francisco\/wp-content\/uploads\/sites\/24\/2022\/02\/16-330x361.jpg&quot;,&quot;thumb_src_w&quot;:330,&quot;thumb_src_h&quot;:361,&quot;src_w&quot;:600,&quot;src_h&quot;:656},&quot;image_id&quot;:142,&quot;is_downloadable&quot;:false,&quot;is_in_stock&quot;:true,&quot;is_purchasable&quot;:true,&quot;is_sold_individually&quot;:&quot;no&quot;,&quot;is_virtual&quot;:false,&quot;max_qty&quot;:&quot;&quot;,&quot;min_qty&quot;:1,&quot;price_html&quot;:&quot;&quot;,&quot;sku&quot;:&quot;&quot;,&quot;variation_description&quot;:&quot;&quot;,&quot;variation_id&quot;:234,&quot;variation_is_active&quot;:true,&quot;variation_is_visible&quot;:true,&quot;weight&quot;:&quot;&quot;,&quot;weight_html&quot;:&quot;N\/A&quot;,&quot;stock_status&quot;:&quot;instock&quot;,&quot;step_qty&quot;:1}]"
																					data-atc-text="Add to cart">
																					<div class="variations">
																						<div class="__s-wrapper">
																							<select style="display:none"
																									id="pa_color141"
																									class=""
																									name="attribute_pa_color"
																									data-attribute_name="attribute_pa_color"
																									data-show_option_none="yes">
																								<option value="">Choose
																									an option
																								</option>
																								<option value="black">
																									Black
																								</option>
																								<option value="red">
																									Red
																								</option>
																							</select>
																							<div aria-label="color"
																								 data-attribute_name="attribute_pa_color"
																								 style=""
																								 class="rey-swatchList --type-color --light-tooltips --disabled-dim --deselection-clear">
																								<div title="Black"
																									 data-term-id="22"
																									 data-term-slug="black"
																									 data-attribute-name="pa_color"
																									 aria-label="Black"
																									 role="radio"
																									 aria-checked="false"
																									 class="rey-swatchList-item --type-color rey-swatchList-item--regular "
																									 data-description="">
																									<span
																										class="rey-swatchList-itemContent"
																										style="background: #45464c;"></span>
																								</div>
																								<div title="Red"
																									 data-term-id="43"
																									 data-term-slug="red"
																									 data-attribute-name="pa_color"
																									 aria-label="Red"
																									 role="radio"
																									 aria-checked="false"
																									 class="rey-swatchList-item --type-color rey-swatchList-item--regular "
																									 data-description="">
																									<span
																										class="rey-swatchList-itemContent"
																										style="background: #e75243;"></span>
																								</div>
																							</div>
																						</div>
																					</div>
																				</form>
																			</div>
																			<div class="rey-brandLink --catalog"><a
																					href="https://demos.reytheme.com/san-francisco/product-brand/quantech/">Quantech</a>
																			</div>
																			<h2 class="woocommerce-loop-product__title">
																				<a href="https://demos.reytheme.com/san-francisco/product/adaptive-wireless-earbuds/">Adaptive
																					wireless earbuds</a></h2>
																			<div class="__break"></div>
																			<span class="price rey-loopPrice"><del
																					aria-hidden="true"><span
																						class="woocommerce-Price-amount amount"><bdi><span
																								class="woocommerce-Price-currencySymbol">$</span>189.00</bdi></span></del> <span
																					class="screen-reader-text">Original price was: $189.00.</span><ins
																					aria-hidden="true"><span
																						class="woocommerce-Price-amount amount"><bdi><span
																								class="woocommerce-Price-currencySymbol">$</span>149.00</bdi></span></ins><span
																					class="screen-reader-text">Current price is: $149.00.</span><span
																					class="rey-discount">Save $40.00</span></span>
																			<div class="rey-loopButtons">
																				<a href="https://demos.reytheme.com/san-francisco/product/adaptive-wireless-earbuds/"
																				   data-quantity="1"
																				   class="button product_type_variable add_to_cart_button rey-btn--hover"
																				   data-product_id="141"
																				   data-product_sku=""
																				   aria-label="Select options for “Adaptive wireless earbuds”"
																				   rel="nofollow"><span class="__text">Select options</span></a>
																				<span
																					id="woocommerce_loop_add_to_cart_link_describedby_141"
																					class="screen-reader-text">
                                                                  This product has multiple variants. The options may be chosen on the product page	</span>
																				<button
																					class="button rey-btn--hover rey-quickviewBtn js-rey-quickviewBtn"
																					data-id="141" title="QUICKVIEW">
																					QUICKVIEW
																				</button>
																			</div>
																		</div>
																	</div>
																</li>
															</ul>
														</div>
														<div
															class="reyEl-productGrid-carouselNav __arrows-2c7ebe0 --dnone-md --dnone-sm">
															<div class="rey-arrowSvg rey-arrowSvg--left "
																 data-dir="&lt;">
																<svg xmlns="http://www.w3.org/2000/svg"
																	 viewBox="0 0 26 12">
																	<path
																		d="M19.8 12L26 6L19.9 -5.33279e-07L18.4 1.4L22.1 5L6.11959e-07 5L4.37114e-07 7L22.1 7L18.4 10.6L19.8 12Z"></path>
																</svg>
															</div>
															<div class="rey-arrowSvg rey-arrowSvg--right "
																 data-dir="&gt;">
																<svg xmlns="http://www.w3.org/2000/svg"
																	 viewBox="0 0 26 12">
																	<path
																		d="M19.8 12L26 6L19.9 -5.33279e-07L18.4 1.4L22.1 5L6.11959e-07 5L4.37114e-07 7L22.1 7L18.4 10.6L19.8 12Z"></path>
																</svg>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</section>
						<!-- ############  End Eight Section  ############ -->
						<!-- ############  End Ninth Section  ############ -->
						<section
							class="elementor-section elementor-top-section elementor-element elementor-element-1de5dc2 rey-section-stretched elementor-section-full_width rey-section-bg--classic elementor-section-height-default elementor-section-height-default"
							data-id="1de5dc2" data-element_type="section"
							data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
							<div class="elementor-container elementor-column-gap-no">
								<div
									class="rey-lazyBg elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-4c09e7d rey-colbg--classic"
									data-id="4c09e7d" data-element_type="column"
									data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
									<div
										class="elementor-column-wrap--4c09e7d elementor-widget-wrap elementor-element-populated">
										<div
											class="elementor-element elementor-element-de3dd93 elementor-widget elementor-widget-heading colorized-element"
											data-id="de3dd93" data-element_type="widget"
											data-widget_type="heading.default">
											<div class="elementor-widget-container">
												<h1 class="elementor-heading-title elementor-size-default">A new sound
													experience</h1>
											</div>
										</div>
										<div
											class="elementor-element elementor-element-d7e445a elementor-align-center m-auto--top elementor-button-dashed --large elementor-widget elementor-widget-button colorized-element"
											data-id="d7e445a" data-element_type="widget"
											data-widget_type="button.default">
											<div class="elementor-widget-container">
												<div class="elementor-button-wrapper">
													<a class="elementor-button elementor-button-link elementor-size-sm"
													   href="https://demos.reytheme.com/san-francisco/#">
                                             <span class="elementor-button-content-wrapper">
                                             <span class="elementor-button-text">Discover</span>
                                             </span>
													</a>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</section>
						<!-- ############  End Ninth Section  ############ -->
						<!-- ############  Start Tenth Section  ############ -->
						<section
							data-colorize-config="{&quot;bg&quot;:&quot;#272C31&quot;,&quot;text&quot;:&quot;#FFFFFF&quot;,&quot;link&quot;:&quot;#FFFFFF&quot;,&quot;link_hover&quot;:&quot;#F0F0F0&quot;,&quot;threshold&quot;:0.25}"
							class="elementor-section elementor-top-section elementor-element elementor-element-028f717 rey-flexWrap rey-sectionScroll rey-sectionScroll--colorize elementor-section-boxed elementor-section-height-default elementor-section-height-default"
							data-id="028f717" data-element_type="section"
							data-settings="{&quot;rey_clip_threshold&quot;:0.25}" style="--in: 0;">
							<div class="elementor-container elementor-column-gap-extended">
								<div
									class="elementor-column elementor-col-25 elementor-top-column elementor-element elementor-element-58c1180"
									data-id="58c1180" data-element_type="column">
									<div
										class="elementor-column-wrap--58c1180 elementor-widget-wrap elementor-element-populated">
										<div
											class="elementor-element elementor-element-99e513e elementor-widget elementor-widget-heading colorized-element"
											data-id="99e513e" data-element_type="widget"
											data-widget_type="heading.default">
											<div class="elementor-widget-container">
												<h6 class="elementor-heading-title elementor-size-default">Experience a
													whole</h6>
											</div>
										</div>
										<div
											class="elementor-element elementor-element-81cfb28 elementor-widget elementor-widget-heading colorized-element"
											data-id="81cfb28" data-element_type="widget"
											data-widget_type="heading.default">
											<div class="elementor-widget-container">
												<h2 class="elementor-heading-title elementor-size-default">New
													design.</h2>
											</div>
										</div>
										<div
											class="elementor-element elementor-element-92d2f71 elementor-widget elementor-widget-heading colorized-element"
											data-id="92d2f71" data-element_type="widget"
											data-widget_type="heading.default">
											<div class="elementor-widget-container">
												<h2 class="elementor-heading-title elementor-size-default">New Era.</h2>
											</div>
										</div>
									</div>
								</div>
								<div
									class="elementor-column elementor-col-25 elementor-top-column elementor-element elementor-element-5513548"
									data-id="5513548" data-element_type="column">
									<div
										class="elementor-column-wrap--5513548 elementor-widget-wrap elementor-element-populated">
										<section
											class="elementor-section elementor-inner-section elementor-element elementor-element-c67bd78 rey-flexWrap elementor-section-boxed elementor-section-height-default elementor-section-height-default"
											data-id="c67bd78" data-element_type="section">
											<div class="elementor-container elementor-column-gap-default">
												<div
													class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-771007c u-ov-hidden"
													data-id="771007c" data-element_type="column">
													<div
														class="elementor-column-wrap--771007c elementor-widget-wrap elementor-element-populated">
														<div
															class="elementor-element elementor-element-498673f elementor-widget elementor-widget-image"
															data-id="498673f" data-element_type="widget"
															data-widget_type="image.default">
															<div class="elementor-widget-container">
																<img decoding="async" width="900" height="650"
																	 src="data:image/svg+xml,%3Csvg%20xmlns=&#39;http://www.w3.org/2000/svg&#39;%20viewBox=&#39;0%200%20900%20650&#39;%3E%3C/svg%3E"
																	 class="attachment-large size-large wp-image-790"
																	 alt=""
																	 data-lazy-srcset="https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/03/image_21.jpg 900w, https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/03/image_21-300x217.jpg 300w, https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/03/image_21-768x555.jpg 768w, https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/03/image_21-330x238.jpg 330w, https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/03/image_21-600x433.jpg 600w"
																	 data-lazy-sizes="(max-width: 900px) 100vw, 900px"
																	 data-lazy-src="https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/03/image_21.jpg">
																<noscript><img loading="lazy" decoding="async"
																			   width="900" height="650"
																			   src="https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/03/image_21.jpg"
																			   class="attachment-large size-large wp-image-790"
																			   alt=""
																			   srcset="https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/03/image_21.jpg 900w, https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/03/image_21-300x217.jpg 300w, https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/03/image_21-768x555.jpg 768w, https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/03/image_21-330x238.jpg 330w, https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/03/image_21-600x433.jpg 600w"
																			   sizes="(max-width: 900px) 100vw, 900px"/>
																</noscript>
															</div>
														</div>
													</div>
												</div>
												<div
													class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-94c1cb5 u-ov-hidden"
													data-id="94c1cb5" data-element_type="column">
													<div
														class="elementor-column-wrap--94c1cb5 elementor-widget-wrap elementor-element-populated">
														<div
															class="elementor-element elementor-element-99797c8 elementor-widget elementor-widget-image"
															data-id="99797c8" data-element_type="widget"
															data-widget_type="image.default">
															<div class="elementor-widget-container">
																<img decoding="async" width="900" height="650"
																	 src="data:image/svg+xml,%3Csvg%20xmlns=&#39;http://www.w3.org/2000/svg&#39;%20viewBox=&#39;0%200%20900%20650&#39;%3E%3C/svg%3E"
																	 class="attachment-large size-large wp-image-791"
																	 alt=""
																	 data-lazy-srcset="https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/03/image_22.jpg 900w, https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/03/image_22-300x217.jpg 300w, https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/03/image_22-768x555.jpg 768w, https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/03/image_22-330x238.jpg 330w, https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/03/image_22-600x433.jpg 600w"
																	 data-lazy-sizes="(max-width: 900px) 100vw, 900px"
																	 data-lazy-src="https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/03/image_22.jpg">
																<noscript><img loading="lazy" decoding="async"
																			   width="900" height="650"
																			   src="https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/03/image_22.jpg"
																			   class="attachment-large size-large wp-image-791"
																			   alt=""
																			   srcset="https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/03/image_22.jpg 900w, https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/03/image_22-300x217.jpg 300w, https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/03/image_22-768x555.jpg 768w, https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/03/image_22-330x238.jpg 330w, https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/03/image_22-600x433.jpg 600w"
																			   sizes="(max-width: 900px) 100vw, 900px"/>
																</noscript>
															</div>
														</div>
													</div>
												</div>
											</div>
										</section>

									</div>
								</div>
								<div
									class="rey-lazyBg elementor-column elementor-col-25 elementor-top-column elementor-element elementor-element-17adf7c rey-colbg--classic u-ov-hidden no-colorize"
									data-id="17adf7c" data-element_type="column"
									data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
									<div
										class="elementor-column-wrap--17adf7c elementor-widget-wrap elementor-element-populated">
										<div class="elementor-background-overlay"></div>
										<div
											class="elementor-element elementor-element-bafbbdd elementor-widget elementor-widget-heading"
											data-id="bafbbdd" data-element_type="widget"
											data-widget_type="heading.default">
											<div class="elementor-widget-container">
												<h6 class="elementor-heading-title elementor-size-default">Superior
													sound</h6>
											</div>
										</div>
										<div
											class="elementor-element elementor-element-150c637 elementor-widget elementor-widget-heading"
											data-id="150c637" data-element_type="widget"
											data-widget_type="heading.default">
											<div class="elementor-widget-container">
												<h3 class="elementor-heading-title elementor-size-default">Create your
													soundscape</h3>
											</div>
										</div>
									</div>
								</div>
								<div
									class="elementor-column elementor-col-25 elementor-top-column elementor-element elementor-element-8711a25"
									data-id="8711a25" data-element_type="column">
									<div
										class="elementor-column-wrap--8711a25 elementor-widget-wrap elementor-element-populated">
										<section
											class="elementor-section elementor-inner-section elementor-element elementor-element-0bb0eb3 rey-flexWrap elementor-section-boxed elementor-section-height-default elementor-section-height-default"
											data-id="0bb0eb3" data-element_type="section">
											<div class="elementor-container elementor-column-gap-default">
												<div
													class="rey-lazyBg elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-a1c8d65 rey-colbg--classic no-colorize"
													data-id="a1c8d65" data-element_type="column"
													data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
													<div
														class="elementor-column-wrap--a1c8d65 elementor-widget-wrap elementor-element-populated">
														<div class="elementor-background-overlay"></div>
														<div
															class="elementor-element elementor-element-635b579 elementor-widget elementor-widget-heading"
															data-id="635b579" data-element_type="widget"
															data-widget_type="heading.default">
															<div class="elementor-widget-container">
																<h6 class="elementor-heading-title elementor-size-default">
																	Made to wear</h6>
															</div>
														</div>
														<div
															class="elementor-element elementor-element-83d74a8 elementor-widget elementor-widget-heading"
															data-id="83d74a8" data-element_type="widget"
															data-widget_type="heading.default">
															<div class="elementor-widget-container">
																<h3 class="elementor-heading-title elementor-size-default">
																	Long-lasting comfort</h3>
															</div>
														</div>
													</div>
												</div>
												<div
													class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-c8730c5"
													data-id="c8730c5" data-element_type="column">
													<div
														class="elementor-column-wrap--c8730c5 elementor-widget-wrap elementor-element-populated">
														<div
															class="elementor-element elementor-element-e22b055 elementor-button-dashed --large elementor-widget elementor-widget-button colorized-element"
															data-id="e22b055" data-element_type="widget"
															data-widget_type="button.default">
															<div class="elementor-widget-container">
																<div class="elementor-button-wrapper">
																	<a class="elementor-button elementor-button-link elementor-size-sm"
																	   href="https://demos.reytheme.com/san-francisco/shop/">
                                                         <span class="elementor-button-content-wrapper">
                                                         <span
															 class="elementor-button-text">Discover more products</span>
                                                         </span>
																	</a>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</section>
									</div>
								</div>
							</div>
						</section>
						<!-- ############  End Tenth Section  ############ -->
						<!-- ############  Start Eleventh Section  ############ -->
						<section
							class="elementor-section elementor-top-section elementor-element elementor-element-245d39e elementor-section-boxed elementor-section-height-default elementor-section-height-default"
							data-id="245d39e" data-element_type="section">
							<div class="elementor-container elementor-column-gap-default">
								<div
									class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-fe346ff"
									data-id="fe346ff" data-element_type="column">
									<div
										class="elementor-column-wrap--fe346ff elementor-widget-wrap elementor-element-populated">
										<div
											class="elementor-element elementor-element-39ab397 elementor-widget elementor-widget-heading colorized-element"
											data-id="39ab397" data-element_type="widget"
											data-widget_type="heading.default">
											<div class="elementor-widget-container">
												<h3 class="elementor-heading-title elementor-size-default">Journal</h3>
											</div>
										</div>
									</div>
								</div>
								<div
									class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-10c8b04"
									data-id="10c8b04" data-element_type="column">
									<div
										class="elementor-column-wrap--10c8b04 elementor-widget-wrap elementor-element-populated">
										<div
											class="elementor-element elementor-element-dbdb601 elementor-button-dashed --large elementor-align-right elementor-mobile-align-left elementor-widget elementor-widget-button colorized-element"
											data-id="dbdb601" data-element_type="widget"
											data-widget_type="button.default">
											<div class="elementor-widget-container">
												<div class="elementor-button-wrapper">
													<a class="elementor-button elementor-button-link elementor-size-sm"
													   href="https://demos.reytheme.com/san-francisco/#">
                                             <span class="elementor-button-content-wrapper">
                                             <span class="elementor-button-text">Go to journal</span>
                                             </span>
													</a>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</section>
						<!-- ############  End Eleventh Section  ############ -->
						<!-- ############  Start Thirteen Section  ############ -->
						<section
							class="elementor-section elementor-top-section elementor-element elementor-element-4f96d53 rey-flexWrap elementor-section-content-top elementor-section-boxed elementor-section-height-default elementor-section-height-default"
							data-id="4f96d53" data-element_type="section">
							<div class="elementor-container elementor-column-gap-default">
								<div
									class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-de8ed3e"
									data-id="de8ed3e" data-element_type="column">
									<div
										class="elementor-column-wrap--de8ed3e elementor-widget-wrap elementor-element-populated">
										<div
											class="elementor-element elementor-element-acd0b2d reyEl-bPostGrid--1 reyEl-bpost-thumb--custom u-ov-hidden reyEl-bPostGrid-tablet--1 reyEl-bPostGrid-mobile--1 elementor-widget elementor-widget-reycore-basic-post-grid"
											data-id="acd0b2d" data-element_type="widget"
											data-widget_type="reycore-basic-post-grid.inner">
											<div class="elementor-widget-container">
												<div
													class="rey-element reyEl-bPostGrid reyEl-bPostGrid--inner --stretch-image --inner-effect-none">
													<div class="reyEl-bPostGrid-item  ">
														<div class="reyEl-bPostGrid-itemInner --box-styler">
															<div class="reyEl-bpost-thumb">
																<a class="reyEl-bpost-thumbLink  --inner-bg-gradient"
																   href="https://demos.reytheme.com/san-francisco/2022/03/25/the-vivo-x-fold-has-a-fingerprint-reader-on-both-screens/"
																   aria-hidden="true" tabindex="-1">
																	<img decoding="async" width="768" height="768"
																		 src="data:image/svg+xml,%3Csvg%20xmlns=&#39;http://www.w3.org/2000/svg&#39;%20viewBox=&#39;0%200%20768%20768&#39;%3E%3C/svg%3E"
																		 class="attachment-medium_large size-medium_large wp-post-image"
																		 alt=""
																		 data-lazy-srcset="https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/03/image_02-768x768.jpg 768w, https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/03/image_02-300x300.jpg 300w, https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/03/image_02-1024x1024.jpg 1024w, https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/03/image_02-150x150.jpg 150w, https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/03/image_02-330x330.jpg 330w, https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/03/image_02-600x600.jpg 600w, https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/03/image_02-100x100.jpg 100w, https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/03/image_02.jpg 1200w"
																		 data-lazy-sizes="(max-width: 768px) 100vw, 768px"
																		 data-lazy-src="https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/03/image_02-768x768.jpg">
																	<noscript><img loading="lazy" decoding="async"
																				   width="768" height="768"
																				   src="https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/03/image_02-768x768.jpg"
																				   class="attachment-medium_large size-medium_large wp-post-image"
																				   alt=""
																				   srcset="https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/03/image_02-768x768.jpg 768w, https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/03/image_02-300x300.jpg 300w, https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/03/image_02-1024x1024.jpg 1024w, https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/03/image_02-150x150.jpg 150w, https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/03/image_02-330x330.jpg 330w, https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/03/image_02-600x600.jpg 600w, https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/03/image_02-100x100.jpg 100w, https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/03/image_02.jpg 1200w"
																				   sizes="(max-width: 768px) 100vw, 768px"/>
																	</noscript>
																</a>
															</div>
															<div class="reyEl-bPostGrid-inner">
																<div class="reyEl-bpost-contentWrap">
																	<h3 class="reyEl-bpost-title"><a
																			href="https://demos.reytheme.com/san-francisco/2022/03/25/the-vivo-x-fold-has-a-fingerprint-reader-on-both-screens/"
																			rel="bookmark">The Vivo X Fold has a
																			fingerprint reader on both screens</a></h3>
																	<div class="reyEl-bpost-cats"><span
																			class="screen-reader-text">Posted in</span><a
																			href="https://demos.reytheme.com/san-francisco/category/sound-stories/"
																			rel="category tag">Sound Stories</a></div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div
									class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-8cbd880"
									data-id="8cbd880" data-element_type="column">
									<div
										class="elementor-column-wrap--8cbd880 elementor-widget-wrap elementor-element-populated">
										<div
											class="elementor-element elementor-element-3de2edf reyEl-bpost-thumb--custom reyEl-bPostGrid--2 reyEl-bPostGrid-tablet--2 reyEl-bPostGrid-mobile--1 elementor-widget elementor-widget-reycore-basic-post-grid"
											data-id="3de2edf" data-element_type="widget"
											data-widget_type="reycore-basic-post-grid.default">
											<div class="elementor-widget-container">
												<div class="rey-element reyEl-bPostGrid reyEl-bPostGrid--default">
													<div class="reyEl-bPostGrid-item ">
														<div class="reyEl-bPostGrid-itemInner --box-styler">
															<div class="reyEl-bpost-thumb">
																<a class="reyEl-bpost-thumbLink "
																   href="https://demos.reytheme.com/san-francisco/2022/03/25/samsung-galaxy-watch-5-what-we-want-to-see/"
																   aria-hidden="true" tabindex="-1">
																	<img decoding="async" width="768" height="768"
																		 src="data:image/svg+xml,%3Csvg%20xmlns=&#39;http://www.w3.org/2000/svg&#39;%20viewBox=&#39;0%200%20768%20768&#39;%3E%3C/svg%3E"
																		 class="attachment-medium_large size-medium_large wp-post-image"
																		 alt=""
																		 data-lazy-srcset="https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/03/image_03-768x768.jpg 768w, https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/03/image_03-300x300.jpg 300w, https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/03/image_03-1024x1024.jpg 1024w, https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/03/image_03-150x150.jpg 150w, https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/03/image_03-330x330.jpg 330w, https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/03/image_03-600x600.jpg 600w, https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/03/image_03-100x100.jpg 100w, https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/03/image_03.jpg 1200w"
																		 data-lazy-sizes="(max-width: 768px) 100vw, 768px"
																		 data-lazy-src="https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/03/image_03-768x768.jpg">
																	<noscript><img loading="lazy" decoding="async"
																				   width="768" height="768"
																				   src="https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/03/image_03-768x768.jpg"
																				   class="attachment-medium_large size-medium_large wp-post-image"
																				   alt=""
																				   srcset="https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/03/image_03-768x768.jpg 768w, https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/03/image_03-300x300.jpg 300w, https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/03/image_03-1024x1024.jpg 1024w, https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/03/image_03-150x150.jpg 150w, https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/03/image_03-330x330.jpg 330w, https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/03/image_03-600x600.jpg 600w, https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/03/image_03-100x100.jpg 100w, https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/03/image_03.jpg 1200w"
																				   sizes="(max-width: 768px) 100vw, 768px"/>
																	</noscript>
																</a>
															</div>
															<h3 class="reyEl-bpost-title"><a
																	href="https://demos.reytheme.com/san-francisco/2022/03/25/samsung-galaxy-watch-5-what-we-want-to-see/"
																	rel="bookmark">Samsung Galaxy Watch 5: what we want
																	to see</a></h3>
															<div class="reyEl-bpost-cats"><span
																	class="screen-reader-text">Posted in</span><a
																	href="https://demos.reytheme.com/san-francisco/category/sound-stories/"
																	rel="category tag">Sound Stories</a></div>
														</div>
													</div>
													<div class="reyEl-bPostGrid-item ">
														<div class="reyEl-bPostGrid-itemInner --box-styler">
															<div class="reyEl-bpost-thumb">
																<a class="reyEl-bpost-thumbLink "
																   href="https://demos.reytheme.com/san-francisco/2022/03/25/the-best-smartglasses-and-ar-specs-2022/"
																   aria-hidden="true" tabindex="-1">
																	<img decoding="async" width="768" height="480"
																		 src="data:image/svg+xml,%3Csvg%20xmlns=&#39;http://www.w3.org/2000/svg&#39;%20viewBox=&#39;0%200%20768%20480&#39;%3E%3C/svg%3E"
																		 class="attachment-medium_large size-medium_large wp-post-image"
																		 alt=""
																		 data-lazy-srcset="https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/03/image_08-768x480.jpg 768w, https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/03/image_08-300x188.jpg 300w, https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/03/image_08-1024x640.jpg 1024w, https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/03/image_08-330x206.jpg 330w, https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/03/image_08-600x375.jpg 600w, https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/03/image_08.jpg 1440w"
																		 data-lazy-sizes="(max-width: 768px) 100vw, 768px"
																		 data-lazy-src="https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/03/image_08-768x480.jpg">
																	<noscript><img loading="lazy" decoding="async"
																				   width="768" height="480"
																				   src="https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/03/image_08-768x480.jpg"
																				   class="attachment-medium_large size-medium_large wp-post-image"
																				   alt=""
																				   srcset="https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/03/image_08-768x480.jpg 768w, https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/03/image_08-300x188.jpg 300w, https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/03/image_08-1024x640.jpg 1024w, https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/03/image_08-330x206.jpg 330w, https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/03/image_08-600x375.jpg 600w, https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/03/image_08.jpg 1440w"
																				   sizes="(max-width: 768px) 100vw, 768px"/>
																	</noscript>
																</a>
															</div>
															<h3 class="reyEl-bpost-title"><a
																	href="https://demos.reytheme.com/san-francisco/2022/03/25/the-best-smartglasses-and-ar-specs-2022/"
																	rel="bookmark">The best smartglasses and AR specs
																	2022</a></h3>
															<div class="reyEl-bpost-cats"><span
																	class="screen-reader-text">Posted in</span><a
																	href="https://demos.reytheme.com/san-francisco/category/sound-stories/"
																	rel="category tag">Sound Stories</a></div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</section>
						<!-- ############  End Thirteen Section  ############ -->
						<!-- ############  Start Fourteenth Section  ############ -->
						<section
							class="elementor-section elementor-top-section elementor-element elementor-element-ad8612b elementor-section-content-middle rey-flexWrap elementor-section-boxed elementor-section-height-default elementor-section-height-default"
							data-id="ad8612b" data-element_type="section">
							<div class="elementor-container elementor-column-gap-default">
								<div
									class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-3b25375"
									data-id="3b25375" data-element_type="column">
									<div
										class="elementor-column-wrap--3b25375 elementor-widget-wrap elementor-element-populated">
										<div
											class="elementor-element elementor-element-ad54f36 gallery-cols--5 gallery-cols--tablet-3 gallery-cols--mobile-3 gallery-spacing-custom elementor-widget elementor-widget-image-gallery"
											data-id="ad54f36" data-element_type="widget"
											data-widget_type="image-gallery.default">
											<div class="elementor-widget-container">
												<div class="elementor-image-gallery">
													<div id="gallery-1"
														 class="gallery galleryid-2006 gallery-columns-5 gallery-size-medium">
														<figure class="gallery-item">
															<div class="gallery-icon landscape">
																<img decoding="async" width="200" height="200"
																	 src="data:image/svg+xml,%3Csvg%20xmlns=&#39;http://www.w3.org/2000/svg&#39;%20viewBox=&#39;0%200%20200%20200&#39;%3E%3C/svg%3E"
																	 class="attachment-medium size-medium" alt=""
																	 data-lazy-src="https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/03/logo8.svg">
																<noscript><img loading="lazy" decoding="async"
																			   width="200" height="200"
																			   src="https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/03/logo8.svg"
																			   class="attachment-medium size-medium"
																			   alt=""/></noscript>
															</div>
														</figure>
														<figure class="gallery-item">
															<div class="gallery-icon landscape">
																<img decoding="async" width="201" height="200"
																	 src="data:image/svg+xml,%3Csvg%20xmlns=&#39;http://www.w3.org/2000/svg&#39;%20viewBox=&#39;0%200%20201%20200&#39;%3E%3C/svg%3E"
																	 class="attachment-medium size-medium" alt=""
																	 data-lazy-src="https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/03/logo10.svg">
																<noscript><img loading="lazy" decoding="async"
																			   width="201" height="200"
																			   src="https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/03/logo10.svg"
																			   class="attachment-medium size-medium"
																			   alt=""/></noscript>
															</div>
														</figure>
														<figure class="gallery-item">
															<div class="gallery-icon landscape">
																<img decoding="async" width="200" height="200"
																	 src="data:image/svg+xml,%3Csvg%20xmlns=&#39;http://www.w3.org/2000/svg&#39;%20viewBox=&#39;0%200%20200%20200&#39;%3E%3C/svg%3E"
																	 class="attachment-medium size-medium" alt=""
																	 data-lazy-src="https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/03/logo2.svg">
																<noscript><img loading="lazy" decoding="async"
																			   width="200" height="200"
																			   src="https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/03/logo2.svg"
																			   class="attachment-medium size-medium"
																			   alt=""/></noscript>
															</div>
														</figure>
														<figure class="gallery-item">
															<div class="gallery-icon landscape">
																<img decoding="async" width="201" height="200"
																	 src="data:image/svg+xml,%3Csvg%20xmlns=&#39;http://www.w3.org/2000/svg&#39;%20viewBox=&#39;0%200%20201%20200&#39;%3E%3C/svg%3E"
																	 class="attachment-medium size-medium" alt=""
																	 data-lazy-src="https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/03/logo5.svg">
																<noscript><img loading="lazy" decoding="async"
																			   width="201" height="200"
																			   src="https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/03/logo5.svg"
																			   class="attachment-medium size-medium"
																			   alt=""/></noscript>
															</div>
														</figure>
														<figure class="gallery-item">
															<div class="gallery-icon landscape">
																<img decoding="async" width="200" height="200"
																	 src="data:image/svg+xml,%3Csvg%20xmlns=&#39;http://www.w3.org/2000/svg&#39;%20viewBox=&#39;0%200%20200%20200&#39;%3E%3C/svg%3E"
																	 class="attachment-medium size-medium" alt=""
																	 data-lazy-src="https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/03/logo1.svg">
																<noscript><img loading="lazy" decoding="async"
																			   width="200" height="200"
																			   src="https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/03/logo1.svg"
																			   class="attachment-medium size-medium"
																			   alt=""/></noscript>
															</div>
														</figure>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div
									class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-93db151"
									data-id="93db151" data-element_type="column">
									<div
										class="elementor-column-wrap--93db151 elementor-widget-wrap elementor-element-populated">
										<div
											class="elementor-element elementor-element-468a17e elementor-button-dashed --large elementor-align-right elementor-mobile-align-center elementor-widget elementor-widget-button colorized-element"
											data-id="468a17e" data-element_type="widget"
											data-widget_type="button.default">
											<div class="elementor-widget-container">
												<div class="elementor-button-wrapper">
													<a class="elementor-button elementor-button-link elementor-size-sm"
													   href="https://demos.reytheme.com/san-francisco/#">
                                             <span class="elementor-button-content-wrapper">
                                             <span class="elementor-button-text">Discover all</span>
                                             </span>
													</a>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</section>
						<!-- ############  End Fourteenth Section  ############ -->
					</div>
				</main>
				<!-- .rey-siteMain -->
			</div>
		</div>
		<!-- .rey-siteContainer -->
	</div>
	<!-- .rey-siteContent -->
	<?php $this->load->view('client-view/footer'); ?>
	<!-- .rey-siteFooter -->
</div>
<!-- .rey-siteWrapper -->
<div data-layout="drop" class="rey-accountPanel-wrapper --layout-drop --invisible rey-header-dropPanel --manual"
	 data-location="outside">
	<div class="rey-accountPanel rey-header-dropPanel-content" data-lazy-hidden="" aria-modal="true" role="dialog"
		 tabindex="-1">
		<div class="rey-accountTabs">
			<div class="rey-accountTabs-item --active" data-item="account">
				<span>ACCOUNT</span>
			</div>
			<div class="rey-accountTabs-item" data-item="wishlist">
				<span>Wishlist</span><span class="rey-wishlistCounter-number" data-count="0"></span>
			</div>
		</div>
		<div class="rey-accountWishlist-wrapper " data-account-tab="wishlist">
			<div class="rey-accountPanel-title">
				<a href="https://demos.reytheme.com/san-francisco/wishlist/">Wishlist</a><span
					class="rey-wishlistCounter-number" data-count="0"></span>
			</div>
			<div class="rey-wishlistPanel-container" data-type="grid">
				<div class="rey-accountWishlist rey-wishlistPanel"></div>
				<div class="rey-lineLoader"></div>
			</div>
		</div>
		<div class="rey-accountForms --active" data-redirect-type="load_menu" data-redirect-url=""
			 data-account-tab="account">
			<div class="rey-accountPanel-form rey-loginForm --active">
				<div class="rey-accountPanel-title">Login</div>
				<form class="woocommerce-form woocommerce-form-login js-rey-woocommerce-form-login login" method="post">
					<p class="rey-form-row rey-form-row--text ">
						<input type="text" class="rey-input rey-input--text" name="username" id="username"
							   autocomplete="username" value="" required=""
							   oninput="(function(e){e.target.closest(&#39;.rey-form-row&#39;).classList.toggle(&#39;--has-value&#39;,e.target.value)})(arguments[0]);">
						<label for="username" class="rey-label">Username or email address&nbsp;<span
								class="required">*</span></label>
					</p>
					<p class="rey-form-row rey-form-row--text">
                        <span class="__passVisibility-wrapper">
                           <input class="rey-input rey-input--text --suports-visibility" type="password" name="password"
								  id="password" autocomplete="current-password" required=""
								  oninput="(function(e){e.target.closest(&#39;.rey-form-row&#39;).classList.toggle(&#39;--has-value&#39;,e.target.value)})(arguments[0]);">
                           <span class="__passVisibility-toggle" data-lazy-hidden="">
                              <svg aria-hidden="true" role="img" class="rey-icon rey-icon-eye" viewBox="0 0 462 346">
                                 <g fill="currentColor">
                                    <path
										d="M231,346 C361.436183,346 462,200.328259 462,173 C462,140.487458 358.577777,0 231,0 C93.5440287,0 -9.09494702e-13,147.592833 0,173 C-9.09494702e-13,202.891659 98.7537165,346 231,346 Z M56.5824289,160.219944 C66.7713209,143.972119 80.8380648,126.358481 96.9838655,110.409249 C137.421767,70.4636625 183.742247,47 231,47 C274.601338,47 320.969689,69.950087 362.198255,108.597753 C379.196924,124.532309 394.05286,142.102205 404.598894,158.109745 C408.097652,163.420414 410.921082,168.270183 412.937184,172.308999 C410.938053,176.17267 408.227675,180.777961 404.935744,185.802242 C394.313487,202.014365 379.591292,219.766541 362.844874,235.861815 C321.537134,275.563401 275.324602,299 231,299 C185.594631,299 139.232036,275.892241 98.4322564,236.780777 C81.8396065,220.874739 67.3726628,203.315324 57.0346413,187.230288 C53.7287772,182.08666 51.0347693,177.372655 49.078323,173.422728 C50.9746819,169.614712 53.5157275,165.110292 56.5824289,160.219944 Z"
										fill-rule="nonzero"></path>
                                    <circle id="Oval" cx="231" cy="173" r="51"></circle>
                                 </g>
                              </svg>
                           </span>
                        </span>
						<label for="password" class="rey-label">Password&nbsp;<span class="required">*</span></label>
					</p>
					<div class="rey-form-row rey-form-row--reset-mobile">
						<p class="col">
							<label class="rey-label rey-label--checkbox" for="rememberme">
								<input class="rey-input rey-input--checkbox" name="rememberme" type="checkbox"
									   id="rememberme" value="forever">
								<span></span>
								<span class="rey-label-text">Remember me</span>
							</label>
						</p>
						<p class="col text-right">
							<input type="hidden" id="woocommerce-login-nonce" name="woocommerce-login-nonce"
								   value="23c944f15c"><input type="hidden" name="_wp_http_referer"
															 value="/san-francisco/">
							<button type="submit" class="btn btn-line-active submit-btn" name="login" value="SIGN IN"
									aria-label="SIGN IN">SIGN IN
							</button>
						</p>
					</div>
					<div class="rey-accountForms-notice"></div>
					<div class="rey-accountPanel-links rey-accountForms-links">
						<button class="btn btn-line" data-location="rey-registerForm">Create Account</button>
						<button class="btn btn-line" data-location="rey-forgetForm">Forgot password</button>
					</div>
				</form>
			</div>
			<div class="rey-accountPanel-form rey-registerForm ">
				<div class="rey-accountPanel-title">Create an account</div>
				<form method="post"
					  class="register woocommerce-form woocommerce-form-register js-rey-woocommerce-form-register">
					<p class="rey-form-row rey-form-row--text ">
						<label class="rey-label" for="reg_email">Email address&nbsp;<span
								class="required">*</span></label>
						<input type="email" class="rey-input rey-input--text" name="email" id="reg_email"
							   autocomplete="email" value="" required=""
							   pattern="[\w]{1,}[\w.+-]{0,}@[\w-]{2,}([.][a-zA-Z]{2,}|[.][\w-]{2,}[.][a-zA-Z]{2,})$"
							   oninput="(function(e){e.target.closest(&#39;.rey-form-row&#39;).classList.toggle(&#39;--has-value&#39;,e.target.value)})(arguments[0]);">
					</p>
					<div class="rey-form-row rey-form-row--text --small-text">
						<p>A link to set a new password will be sent to your email address.</p>
					</div>
					<wc-order-attribution-inputs><input type="hidden" name="wc_order_attribution_source_type"
														value="typein"><input type="hidden"
																			  name="wc_order_attribution_referrer"
																			  value="(none)"><input type="hidden"
																									name="wc_order_attribution_utm_campaign"
																									value="(none)"><input
							type="hidden" name="wc_order_attribution_utm_source" value="(direct)"><input type="hidden"
																										 name="wc_order_attribution_utm_medium"
																										 value="(none)"><input
							type="hidden" name="wc_order_attribution_utm_content" value="(none)"><input type="hidden"
																										name="wc_order_attribution_utm_id"
																										value="(none)"><input
							type="hidden" name="wc_order_attribution_utm_term" value="(none)"><input type="hidden"
																									 name="wc_order_attribution_utm_source_platform"
																									 value="(none)"><input
							type="hidden" name="wc_order_attribution_utm_creative_format" value="(none)"><input
							type="hidden" name="wc_order_attribution_utm_marketing_tactic" value="(none)"><input
							type="hidden" name="wc_order_attribution_session_entry"
							value="https://demos.reytheme.com/san-francisco/product/innovative-smart-watch/"><input
							type="hidden" name="wc_order_attribution_session_start_time"
							value="2024-12-17 12:07:36"><input type="hidden" name="wc_order_attribution_session_pages"
															   value="4"><input type="hidden"
																				name="wc_order_attribution_session_count"
																				value="2"><input type="hidden"
																								 name="wc_order_attribution_user_agent"
																								 value="Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36">
					</wc-order-attribution-inputs>
					<div class="woocommerce-privacy-policy-text">
						<p>Your personal data will be used to support your experience throughout this website, to manage
							access to your account, and for other purposes described in our <a
								href="https://demos.reytheme.com/san-francisco/privacy-policy/"
								class="woocommerce-privacy-policy-link" target="_blank">privacy policy</a>.</p>
					</div>
					<p class="">
						<input type="hidden" id="woocommerce-register-nonce" name="woocommerce-register-nonce"
							   value="d2bff068de"><input type="hidden" name="_wp_http_referer" value="/san-francisco/">
						<button type="submit" class="btn btn-line-active submit-btn" name="register" value="Register"
								aria-label="Register">CREATE ACCOUNT
						</button>
					</p>
					<div class="rey-accountForms-notice"></div>
					<div class="rey-accountPanel-links rey-accountForms-links">
						<button class="btn btn-line" data-location="rey-loginForm">Login</button>
						<button class="btn btn-line" data-location="rey-forgetForm">Forgot password</button>
					</div>
				</form>
			</div>
			<div class="rey-accountPanel-form rey-forgetForm ">
				<div class="rey-accountPanel-title">Password Recovery</div>
				<form method="post" class="woocommerce-form woocommerce-form-forgot js-rey-woocommerce-form-forgot">
					<div class="woocommerce-form-forgot-formData">
						<p>Lost your password? Please enter your username or email address. You will receive a link to
							create a new password via email.</p>
						<p class="rey-form-row rey-form-row--text ">
							<label class="rey-label" for="user_login">Username or email</label>
							<input class="rey-input rey-input--text" type="text" name="user_login" id="user_login"
								   autocomplete="username" required="" value=""
								   oninput="(function(e){e.target.closest(&#39;.rey-form-row&#39;).classList.toggle(&#39;--has-value&#39;,e.target.value)})(arguments[0]);">
						</p>
						<p class="">
							<input type="hidden" name="wc_reset_password" value="true">
							<button type="submit" class="btn btn-line-active submit-btn" value="Reset password"
									aria-label="Reset password">Reset password
							</button>
						</p>
						<input type="hidden" id="woocommerce-lost-password-nonce" name="woocommerce-lost-password-nonce"
							   value="cba1485133"><input type="hidden" name="_wp_http_referer" value="/san-francisco/">
					</div>
					<div class="rey-accountForms-notice"></div>
					<div class="rey-accountPanel-links rey-accountForms-links">
						<button class="btn btn-line" data-location="rey-registerForm">Create Account</button>
						<button class="btn btn-line" data-location="rey-loginForm">Login</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
/* style is added from click event of jquery for display modal. here is manually added for testing */
<div class="rey-cartPanel-wrapper rey-sidePanel js-rey-cartPanel woocommerce --is-open --is-opened" style="display: none;">


	<div class="rey-cartExtraProducts" id="rey-cart-extra-products" data-status="open">
		<button class="__toggle"><svg aria-hidden="true" role="img" id="rey-icon-chevron-67707697af729" class="rey-icon rey-icon-chevron  " viewBox="0 0 40 64"><polygon fill="currentColor" points="39.5 32 6.83 64 0.5 57.38 26.76 32 0.5 6.62 6.83 0"></polygon></svg></button>
		<div class="__inner">
			<div class="__title">Bestsellers:</div>
			<div class="__content ss-container" style="height: calc(100% - 70px);"><div class="ss-wrapper"><div class="ss-content">

						<div class="__the-content">

							<div class="__product" data-id="910">
								<a href="https://demos.reytheme.com/san-francisco/product/mirrorless-camera/" class="__product-link">
									<img width="330" height="361" src="https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/04/42-330x361.jpg" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail" alt="" decoding="async" srcset="https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/04/42-330x361.jpg 330w, https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/04/42-274x300.jpg 274w, https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/04/42-936x1024.jpg 936w, https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/04/42-768x840.jpg 768w, https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/04/42-600x656.jpg 600w, https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/04/42.jpg 1024w" sizes="(max-width: 330px) 100vw, 330px">
								</a>

								<span class="__product-brand"><a href="https://demos.reytheme.com/san-francisco/product-brand/squarex/">SquareX</a></span>

								<h4 class="__product-title"><a href="https://demos.reytheme.com/san-francisco/product/mirrorless-camera/">Mirrorless camera</a></h4>
								<span class="__product-price"><span class="woocommerce-Price-amount amount"><bdi><span class="woocommerce-Price-currencySymbol">$</span>1,699.00</bdi></span></span>
							</div>

							<div class="__product" data-id="1004">
								<a href="https://demos.reytheme.com/san-francisco/product/innovative-smart-watch/" class="__product-link">
									<img width="330" height="361" src="https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/05/66-330x361.jpg" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail" alt="" decoding="async" srcset="https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/05/66-330x361.jpg 330w, https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/05/66-274x300.jpg 274w, https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/05/66-936x1024.jpg 936w, https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/05/66-768x840.jpg 768w, https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/05/66-600x656.jpg 600w, https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/05/66.jpg 1024w" sizes="(max-width: 330px) 100vw, 330px">
								</a>

								<span class="__product-brand"><a href="https://demos.reytheme.com/san-francisco/product-brand/x-form/">X-Form</a></span>

								<h4 class="__product-title"><a href="https://demos.reytheme.com/san-francisco/product/innovative-smart-watch/">Innovative smart watch</a></h4>
								<span class="__product-price"><span class="woocommerce-Price-amount amount"><bdi><span class="woocommerce-Price-currencySymbol">$</span>399.00</bdi></span></span>
							</div>

							<div class="__product" data-id="998">
								<a href="https://demos.reytheme.com/san-francisco/product/high-end-wireless-subwoofer/" class="__product-link">
									<img width="330" height="361" src="https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/05/62-330x361.jpg" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail" alt="" decoding="async" srcset="https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/05/62-330x361.jpg 330w, https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/05/62-274x300.jpg 274w, https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/05/62-936x1024.jpg 936w, https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/05/62-768x840.jpg 768w, https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/05/62-600x656.jpg 600w, https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/05/62.jpg 1024w" sizes="(max-width: 330px) 100vw, 330px">
								</a>

								<span class="__product-brand"><a href="https://demos.reytheme.com/san-francisco/product-brand/squarex/">SquareX</a></span>

								<h4 class="__product-title"><a href="https://demos.reytheme.com/san-francisco/product/high-end-wireless-subwoofer/">High-end wireless subwoofer</a></h4>
								<span class="__product-price"><span class="woocommerce-Price-amount amount"><bdi><span class="woocommerce-Price-currencySymbol">$</span>1,989.00</bdi></span></span>
							</div>

							<div class="__product" data-id="989">
								<a href="https://demos.reytheme.com/san-francisco/product/powerful-bluetooth-speaker/" class="__product-link">
									<img width="330" height="361" src="https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/05/55-330x361.jpg" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail" alt="" decoding="async" srcset="https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/05/55-330x361.jpg 330w, https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/05/55-274x300.jpg 274w, https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/05/55-936x1024.jpg 936w, https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/05/55-768x840.jpg 768w, https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/05/55-600x656.jpg 600w, https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/05/55.jpg 1024w" sizes="(max-width: 330px) 100vw, 330px">
								</a>

								<span class="__product-brand"><a href="https://demos.reytheme.com/san-francisco/product-brand/quantech/">Quantech</a></span>

								<h4 class="__product-title"><a href="https://demos.reytheme.com/san-francisco/product/powerful-bluetooth-speaker/">Powerful Bluetooth speaker</a></h4>
								<span class="__product-price"><span class="woocommerce-Price-amount amount"><bdi><span class="woocommerce-Price-currencySymbol">$</span>549.00</bdi></span></span>
							</div>

							<div class="__product" data-id="981">
								<a href="https://demos.reytheme.com/san-francisco/product/ultimate-over-ear-headphones/" class="__product-link">
									<img width="330" height="361" src="https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/05/49-330x361.jpg" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail" alt="" decoding="async" srcset="https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/05/49-330x361.jpg 330w, https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/05/49-274x300.jpg 274w, https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/05/49-936x1024.jpg 936w, https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/05/49-768x840.jpg 768w, https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/05/49-600x656.jpg 600w, https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/05/49.jpg 1024w" sizes="(max-width: 330px) 100vw, 330px">
								</a>

								<span class="__product-brand"><a href="https://demos.reytheme.com/san-francisco/product-brand/quantech/">Quantech</a></span>

								<h4 class="__product-title"><a href="https://demos.reytheme.com/san-francisco/product/ultimate-over-ear-headphones/">Ultimate over-ear headphones</a></h4>
								<span class="__product-price"><span class="woocommerce-Price-amount amount"><bdi><span class="woocommerce-Price-currencySymbol">$</span>789.00</bdi></span></span>
							</div>

							<div class="__product" data-id="905">
								<a href="https://demos.reytheme.com/san-francisco/product/pocket-camera/" class="__product-link">
									<img width="330" height="361" src="https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/04/39-330x361.jpg" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail" alt="" decoding="async" srcset="https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/04/39-330x361.jpg 330w, https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/04/39-274x300.jpg 274w, https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/04/39-936x1024.jpg 936w, https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/04/39-768x840.jpg 768w, https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/04/39-600x656.jpg 600w, https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/04/39.jpg 1024w" sizes="(max-width: 330px) 100vw, 330px">
								</a>

								<span class="__product-brand"><a href="https://demos.reytheme.com/san-francisco/product-brand/quantech/">Quantech</a></span>

								<h4 class="__product-title"><a href="https://demos.reytheme.com/san-francisco/product/pocket-camera/">Pocket camera</a></h4>
								<span class="__product-price"><span class="woocommerce-Price-amount amount"><bdi><span class="woocommerce-Price-currencySymbol">$</span>199.00</bdi></span></span>
							</div>

							<div class="__product" data-id="136">
								<a href="https://demos.reytheme.com/san-francisco/product/comfortable-over-ear-headphones/" class="__product-link">
									<img width="330" height="361" src="https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/02/12-330x361.jpg" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail" alt="" decoding="async" srcset="https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/02/12-330x361.jpg 330w, https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/02/12-274x300.jpg 274w, https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/02/12-936x1024.jpg 936w, https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/02/12-768x840.jpg 768w, https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/02/12-600x656.jpg 600w, https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/02/12.jpg 1024w" sizes="(max-width: 330px) 100vw, 330px">
								</a>

								<span class="__product-brand"><a href="https://demos.reytheme.com/san-francisco/product-brand/quantech/">Quantech</a></span>

								<h4 class="__product-title"><a href="https://demos.reytheme.com/san-francisco/product/comfortable-over-ear-headphones/">Comfortable over-ear headphones</a></h4>
								<span class="__product-price"><span class="woocommerce-Price-amount amount"><bdi><span class="woocommerce-Price-currencySymbol">$</span>689.00</bdi></span></span>
							</div>

							<div class="__product" data-id="1020">
								<a href="https://demos.reytheme.com/san-francisco/product/pathfinder-phone-case/" class="__product-link">
									<img width="330" height="361" src="https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/05/75-330x361.jpg" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail" alt="" decoding="async" srcset="https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/05/75-330x361.jpg 330w, https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/05/75-274x300.jpg 274w, https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/05/75-936x1024.jpg 936w, https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/05/75-768x840.jpg 768w, https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/05/75-600x656.jpg 600w, https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/05/75.jpg 1024w" sizes="(max-width: 330px) 100vw, 330px">
								</a>

								<span class="__product-brand"><a href="https://demos.reytheme.com/san-francisco/product-brand/squarex/">SquareX</a></span>

								<h4 class="__product-title"><a href="https://demos.reytheme.com/san-francisco/product/pathfinder-phone-case/">Pathfinder phone case</a></h4>
								<span class="__product-price"><span class="woocommerce-Price-amount amount"><bdi><span class="woocommerce-Price-currencySymbol">$</span>49.00</bdi></span></span>
							</div>

							<div class="__product" data-id="1015">
								<a href="https://demos.reytheme.com/san-francisco/product/magsafe-charger/" class="__product-link">
									<img width="330" height="361" src="https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/05/72-330x361.jpg" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail" alt="" decoding="async" srcset="https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/05/72-330x361.jpg 330w, https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/05/72-274x300.jpg 274w, https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/05/72-936x1024.jpg 936w, https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/05/72-768x840.jpg 768w, https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/05/72-600x656.jpg 600w, https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/05/72.jpg 1024w" sizes="(max-width: 330px) 100vw, 330px">
								</a>

								<span class="__product-brand"><a href="https://demos.reytheme.com/san-francisco/product-brand/quantech/">Quantech</a></span>

								<h4 class="__product-title"><a href="https://demos.reytheme.com/san-francisco/product/magsafe-charger/">MagSafe Charger</a></h4>
								<span class="__product-price"><span class="woocommerce-Price-amount amount"><bdi><span class="woocommerce-Price-currencySymbol">$</span>159.00</bdi></span></span>
							</div>

							<div class="__product" data-id="1009">
								<a href="https://demos.reytheme.com/san-francisco/product/immersive-flight-drone/" class="__product-link">
									<img width="330" height="361" src="https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/05/69-330x361.jpg" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail" alt="" decoding="async" srcset="https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/05/69-330x361.jpg 330w, https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/05/69-274x300.jpg 274w, https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/05/69-936x1024.jpg 936w, https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/05/69-768x840.jpg 768w, https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/05/69-600x656.jpg 600w, https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/05/69.jpg 1024w" sizes="(max-width: 330px) 100vw, 330px">
								</a>

								<span class="__product-brand"><a href="https://demos.reytheme.com/san-francisco/product-brand/x-form/">X-Form</a></span>

								<h4 class="__product-title"><a href="https://demos.reytheme.com/san-francisco/product/immersive-flight-drone/">Immersive flight drone</a></h4>
								<span class="__product-price"><span class="woocommerce-Price-amount amount"><bdi><span class="woocommerce-Price-currencySymbol">$</span>399.00</bdi></span></span>
							</div>

							<div class="__product" data-id="921">
								<a href="https://demos.reytheme.com/san-francisco/product/mirrorless-camera-lens/" class="__product-link">
									<img width="330" height="361" src="https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/04/49-330x361.jpg" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail" alt="" decoding="async" srcset="https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/04/49-330x361.jpg 330w, https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/04/49-274x300.jpg 274w, https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/04/49-936x1024.jpg 936w, https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/04/49-768x840.jpg 768w, https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/04/49-600x656.jpg 600w, https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/04/49.jpg 1024w" sizes="(max-width: 330px) 100vw, 330px">
								</a>

								<span class="__product-brand"><a href="https://demos.reytheme.com/san-francisco/product-brand/quantech/">Quantech</a></span>

								<h4 class="__product-title"><a href="https://demos.reytheme.com/san-francisco/product/mirrorless-camera-lens/">Mirrorless camera lens</a></h4>
								<span class="__product-price"><del aria-hidden="true"><span class="woocommerce-Price-amount amount"><bdi><span class="woocommerce-Price-currencySymbol">$</span>489.00</bdi></span></del> <span class="screen-reader-text">Original price was: $489.00.</span><ins aria-hidden="true"><span class="woocommerce-Price-amount amount"><bdi><span class="woocommerce-Price-currencySymbol">$</span>329.00</bdi></span></ins><span class="screen-reader-text">Current price is: $329.00.</span></span>
							</div>

							<div class="__product" data-id="914">
								<a href="https://demos.reytheme.com/san-francisco/product/mirrorless-professional-camera/" class="__product-link">
									<img width="330" height="361" src="https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/04/45-330x361.jpg" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail" alt="" decoding="async" srcset="https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/04/45-330x361.jpg 330w, https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/04/45-274x300.jpg 274w, https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/04/45-936x1024.jpg 936w, https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/04/45-768x840.jpg 768w, https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/04/45-600x656.jpg 600w, https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/04/45.jpg 1024w" sizes="(max-width: 330px) 100vw, 330px">
								</a>

								<span class="__product-brand"><a href="https://demos.reytheme.com/san-francisco/product-brand/x-form/">X-Form</a></span>

								<h4 class="__product-title"><a href="https://demos.reytheme.com/san-francisco/product/mirrorless-professional-camera/">Mirrorless professional camera</a></h4>
								<span class="__product-price"><span class="woocommerce-Price-amount amount"><bdi><span class="woocommerce-Price-currencySymbol">$</span>1,899.00</bdi></span></span>
							</div>

						</div>

					</div></div><div class="ss-scroll" style="height: 10.1384%; top: 0%;"></div></div>
		</div>
	</div>

	<script type="text/html" id="tmpl-reyCartExtraProducts">
		<# if( data.items.length ){ #>
		<div class="__the-content">
			<# for (var i = 0; i < data.items.length; i++) { #>
			<div class="__product" data-id="{{data.items[i].id}}">
				<a href="{{data.items[i].link}}" class="__product-link">
					{{{data.items[i].image}}}
				</a>
				<# if( data.items[i].brand ){ #>
				<span class="__product-brand">{{{data.items[i].brand}}}</span>
				<# } #>
				<h4 class="__product-title"><a href="{{data.items[i].link}}">{{{data.items[i].title}}}</a></h4>
				<span class="__product-price">{{{data.items[i].price}}}</span>
			</div>
			<# } #>
		</div>
		<# } #>
	</script>


	<div class="rey-cartPanel --btns-inline">

		<div class="rey-cartPanel-header">

			<div class="__tabs">

				<div class="__tab --active" data-item="cart">
					<div class="rey-cartPanel-title">
						SHOPPING BAG						<span class="__cart-count">0</span>					</div>
				</div>

				<div class="__tab" data-item="recent">
					<div class="rey-cartPanel-title">
						RECENTLY VIEWED				<span class="__recent-count __nb">2</span>			</div>
				</div>

			</div>

			<button class="btn __arrClose rey-sidePanel-close --invisible" aria-label="Close Panel"><span class="__icons"><svg role="img" viewBox="0 0 110 110" class="rey-icon rey-icon-close"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" stroke-linecap="square"><path d="M4.79541854,4.29541854 L104.945498,104.445498 L4.79541854,4.29541854 Z" stroke="currentColor" stroke-width="var(--stroke-width, 12px)"></path><path d="M4.79541854,104.704581 L104.945498,4.55450209 L4.79541854,104.704581 Z" stroke="currentColor" stroke-width="var(--stroke-width, 12px)"></path></g></svg><svg data-icon-id="arrow-classic" aria-hidden="true" role="img" id="rey-icon-arrow-classic-67707697b5270" class="rey-icon rey-icon-arrow-classic " viewBox="0 0 16 16"><polygon fill="var(--icon-fill, currentColor)" points="8 0 6.6 1.4 12.2 7 0 7 0 9 12.2 9 6.6 14.6 8 16 16 8"></polygon></svg></span></button></div>

		<div class="__tab-content --active" data-item="cart">

			<div class="widget woocommerce widget_shopping_cart">
				<div class="widget_shopping_cart_content">

					<p class="woocommerce-mini-cart__empty-message">No products in the cart.</p>


					<div class="rey-emptyMiniCartGs" data-gsid="1816"><style>.elementor-1816 .elementor-element.elementor-element-06b8f59{margin-top:40px;margin-bottom:40px;}.elementor-1816 .elementor-element.elementor-element-cd22f37 .rey-gridEl{--per-row:1;--gap:25px;--vgap:15px;}.elementor-1816 .elementor-element.elementor-element-cd22f37 .rey-card{text-align:left;--align:left;align-items:center;-v-align-items:center;--media-radius:4px;overflow:hidden;}.elementor-1816 .elementor-element.elementor-element-cd22f37 .__media{object-fit:cover;height:76px;}.elementor-1816 .elementor-element.elementor-element-cd22f37 .__media-link{--media-max-width:76px;}.elementor-1816 .elementor-element.elementor-element-cd22f37 .__captionTitle{font-size:18px;}@media(max-width:1024px){.elementor-1816 .elementor-element.elementor-element-cd22f37 .rey-gridEl{--per-row:2;}}@media(max-width:767px){.elementor-1816 .elementor-element.elementor-element-cd22f37 .rey-gridEl{--per-row:1;}}</style>		<div data-elementor-type="wp-post" data-elementor-id="1816" class="elementor elementor-1816" data-elementor-gstype="generic" data-page-el-selector="body.elementor-page-1816" data-disable-padding="">
							<section class="elementor-section elementor-top-section elementor-element elementor-element-06b8f59 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="06b8f59" data-element_type="section">
								<div class="elementor-container elementor-column-gap-default">
									<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-12d27a6" data-id="12d27a6" data-element_type="column">
										<div class="elementor-column-wrap--12d27a6 elementor-widget-wrap elementor-element-populated">
											<div class="elementor-element elementor-element-96cf434 elementor-widget elementor-widget-heading" data-id="96cf434" data-element_type="widget" data-widget_type="heading.default">
												<div class="elementor-widget-container">
													<h4 class="elementor-heading-title elementor-size-default">Start Shopping</h4>		</div>
											</div>
											<div class="elementor-element elementor-element-cd22f37 elementor-widget elementor-widget-reycore-grid" data-id="cd22f37" data-element_type="widget" data-widget_type="reycore-grid.default">
												<div class="elementor-widget-container">
													<div class="rey-gridEl --product_cat --type-vlist --type-md- --type-sm-" style="--total:5" data-layout="basic">
														<div class="__items ">
															<div class="__item elementor-repeater-item-prod-cat-50"><div class="rey-card --basic"><a href="https://demos.reytheme.com/san-francisco/product-category/wearables/" class="__media-link" aria-label="Wearables 5"><img width="265" height="300" src="https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/03/image_23-265x300.jpg" class="__media" alt="" decoding="async" srcset="https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/03/image_23-265x300.jpg 265w, https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/03/image_23-330x374.jpg 330w, https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/03/image_23.jpg 600w" sizes="(max-width: 265px) 100vw, 265px"></a><div class="__caption"><h2 class="__captionEl __captionTitle "><a href="https://demos.reytheme.com/san-francisco/product-category/wearables/" class="" aria-label="Wearables 5">Wearables <sup>5</sup></a></h2></div></div></div><div class="__item elementor-repeater-item-prod-cat-46"><div class="rey-card --basic"><a href="https://demos.reytheme.com/san-francisco/product-category/speakers/" class="__media-link" aria-label="Speakers 6"><img width="265" height="300" src="https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/03/image_14-265x300.jpg" class="__media" alt="" decoding="async" srcset="https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/03/image_14-265x300.jpg 265w, https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/03/image_14-330x374.jpg 330w, https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/03/image_14.jpg 600w" sizes="(max-width: 265px) 100vw, 265px"></a><div class="__caption"><h2 class="__captionEl __captionTitle "><a href="https://demos.reytheme.com/san-francisco/product-category/speakers/" class="" aria-label="Speakers 6">Speakers <sup>6</sup></a></h2></div></div></div><div class="__item elementor-repeater-item-prod-cat-34"><div class="rey-card --basic"><a href="https://demos.reytheme.com/san-francisco/product-category/headphones/" class="__media-link" aria-label="Headphones 3"><img width="265" height="300" src="https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/03/image_17-265x300.jpg" class="__media" alt="" decoding="async" srcset="https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/03/image_17-265x300.jpg 265w, https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/03/image_17-330x374.jpg 330w, https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/03/image_17.jpg 600w" sizes="(max-width: 265px) 100vw, 265px"></a><div class="__caption"><h2 class="__captionEl __captionTitle "><a href="https://demos.reytheme.com/san-francisco/product-category/headphones/" class="" aria-label="Headphones 3">Headphones <sup>3</sup></a></h2></div></div></div><div class="__item elementor-repeater-item-prod-cat-27"><div class="rey-card --basic"><a href="https://demos.reytheme.com/san-francisco/product-category/cameras/" class="__media-link" aria-label="Cameras 5"><img width="265" height="300" src="https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/04/image_24-265x300.jpg" class="__media" alt="" decoding="async" srcset="https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/04/image_24-265x300.jpg 265w, https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/04/image_24-330x374.jpg 330w, https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/04/image_24.jpg 600w" sizes="(max-width: 265px) 100vw, 265px"></a><div class="__caption"><h2 class="__captionEl __captionTitle "><a href="https://demos.reytheme.com/san-francisco/product-category/cameras/" class="" aria-label="Cameras 5">Cameras <sup>5</sup></a></h2></div></div></div><div class="__item elementor-repeater-item-prod-cat-17"><div class="rey-card --basic"><a href="https://demos.reytheme.com/san-francisco/product-category/accessories/" class="__media-link" aria-label="Accessories 5"><img width="265" height="300" src="https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/03/image_15-265x300.jpg" class="__media" alt="" decoding="async" srcset="https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/03/image_15-265x300.jpg 265w, https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/03/image_15-330x374.jpg 330w, https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/03/image_15.jpg 600w" sizes="(max-width: 265px) 100vw, 265px"></a><div class="__caption"><h2 class="__captionEl __captionTitle "><a href="https://demos.reytheme.com/san-francisco/product-category/accessories/" class="" aria-label="Accessories 5">Accessories <sup>5</sup></a></h2></div></div></div>		</div>
													</div>		</div>
											</div>
											<div class="elementor-element elementor-element-d3c3c54 elementor-button-underline elementor-widget elementor-widget-button" data-id="d3c3c54" data-element_type="widget" data-widget_type="button.default">
												<div class="elementor-widget-container">
													<div class="elementor-button-wrapper">
														<a class="elementor-button elementor-button-link elementor-size-sm" href="https://demos.reytheme.com/san-francisco/shop/">
						<span class="elementor-button-content-wrapper">
									<span class="elementor-button-text">EXPLORE SHOP</span>
					</span>
														</a>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</section>
						</div>
					</div></div>
			</div>

		</div>

		<div class="__tab-content rey-cartRecent-itemsWrapper --loading" data-item="recent">
			<div class="rey-lineLoader"></div>
		</div>
	</div>


</div>
<!--<script type="text/html" id="tmpl-reyCrossSellsBubble">-->
<!--	<# var items = data.items; #>-->
<!--	<# if( items.length ){ #>-->
<!--	<div class="rey-crossSells-bubble --loading">-->
<!---->
<!--		<div class="rey-crossSells-bubble-title">You may also like&hellip;</div>-->
<!---->
<!---->
<!--		<# for (var i = 0; i < items.length; i++) { #>-->
<!--		<div class="rey-crossSells-item __cart-product " data-id="{{items[i].id}}">-->
<!--			<div class="rey-crossSells-itemThumb">-->
<!--				<a href="{{items[i].link}}" class="woocommerce-LoopProduct-link woocommerce-loop-product__link">-->
<!--					{{{items[i].image}}}-->
<!--				</a>-->
<!--			</div>-->
<!--			<div class="rey-crossSells-itemContent">-->
<!--				<# if(items[i].brand){ #> {{{items[i].brand}}} <# } #> <h4 class="rey-crossSells-itemTitle"><a-->
<!--						href="{{items[i].link}}">{{{items[i].title}}}</a></h4>-->
<!--				<span class="price rey-loopPrice">{{{items[i].price}}}</span>-->
<!--				<div class="rey-crossSells-itemButtons">-->
<!--					{{{items[i].button}}}-->
<!--					<# if(items[i].quickview){ #> {{{items[i].quickview}}} <# } #><# if(items[i].wishlist){ #>-->
<!--					{{{items[i].wishlist}}} <# } #>-->
<!--				</div>-->
<!--			</div>-->
<!--		</div>-->
<!--		<# } #>-->
<!---->
<!---->
<!--		<div><a class="rey-crossSells-bubble-close btn btn-primary-outline btn--block" href="#">Continue shopping</a>-->
<!--		</div>-->
<!---->
<!--	</div>-->
<!--	<# } #>-->
<!---->
<!--</script>-->
<script type="text/html" id="tmpl-reyCrossSellsBubble">
	<div class="rey-crossSells-bubble --loading">

		<div class="rey-crossSells-bubble-title">You may also like&hellip;</div>

		<div class="rey-crossSells-item __cart-product " data-id="998">
			<div class="rey-crossSells-itemThumb">
				<a href="https://demos.reytheme.com/san-francisco/product/high-end-wireless-subwoofer/" class="woocommerce-LoopProduct-link woocommerce-loop-product__link">
					<img width="330" height="361" src="https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/05/62-330x361.jpg" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail" alt="" decoding="async" srcset="https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/05/62-330x361.jpg 330w, https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/05/62-274x300.jpg 274w, https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/05/62-936x1024.jpg 936w, https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/05/62-768x840.jpg 768w, https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/05/62-600x656.jpg 600w, https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/2022/05/62.jpg 1024w" sizes="(max-width: 330px) 100vw, 330px" />
				</a>
			</div>
			<div class="rey-crossSells-itemContent">
				<h4 class="rey-crossSells-itemTitle"><a
						href="https://demos.reytheme.com/san-francisco/product/high-end-wireless-subwoofer/">High-end wireless subwoofer</a></h4>
				<span class="price rey-loopPrice"><span class="woocommerce-Price-amount amount"><bdi><span class="woocommerce-Price-currencySymbol">&#36;</span>1,989.00</bdi></span></span>
				<div class="rey-crossSells-itemButtons">
<!--					{{{items[i].button}}}-->
<!--					<# if(items[i].quickview){ #> {{{items[i].quickview}}} <# } #><# if(items[i].wishlist){ #>-->
<!--					{{{items[i].wishlist}}}-->
				</div>
			</div>
		</div>
		<div><a class="rey-crossSells-bubble-close btn btn-primary-outline btn--block" href="#">Continue shopping</a>
		</div>

	</div>

</script>
<script type="text/html" id="tmpl-reyCrossSellsCarousel">
	<# var items = data.items; #>
	<# if( items.length ){ #>
	<div class="splide rey-crossSells-carousel --loading" data-slider-config='{"autoplay":false,"autoplaySpeed":3000}'>
		<h3 class="rey-crossSells-carousel-title">
			<span class="__text">You may also like&hellip;</span>
			<!-- <span class="__hidebtn --dnone-lg --dnone-md">
         			<svg aria-hidden="true" role="img" id="rey-icon-arrow-676113ed38003" class="rey-icon rey-icon-arrow " viewbox="0 0 22 13"><style type="text/css">.rey-icon-arrow.--to-left{transform:rotate(90deg) scale(0.7);}.rey-icon-arrow.--to-right{transform:rotate(-90deg) scale(0.7);}.rey-icon-arrow.--to-top{transform:rotate(180deg);}</style><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                   <polygon fill="currentColor" points="-0.01 2.44 10.99 13.073 21.98 2.44 19.5 0.008 10.99 8.243 2.47 0.008"></polygon></g></svg>				</span> -->
		</h3>

		<div class="splide__track">
			<div class="rey-crossSells-itemsWrapper splide__list">

				<# for (var i = 0; i < items.length; i++) { #>
				<div class="rey-crossSells-item __cart-product splide__slide" data-id="{{items[i].id}}">
					<div class="rey-crossSells-itemThumb">
						<a href="{{items[i].link}}" class="woocommerce-LoopProduct-link woocommerce-loop-product__link">
							{{{items[i].image}}}
						</a>
					</div>
					<div class="rey-crossSells-itemContent">
						<# if(items[i].brand){ #> {{{items[i].brand}}} <# } #> <h4 class="rey-crossSells-itemTitle"><a
								href="{{items[i].link}}">{{{items[i].title}}}</a></h4>
						<span class="price rey-loopPrice">{{{items[i].price}}}</span>
						<div class="rey-crossSells-itemButtons">
							{{{items[i].button}}}
							<# if(items[i].quickview){ #> {{{items[i].quickview}}} <# } #><# if(items[i].wishlist){ #>
							{{{items[i].wishlist}}} <# } #>
						</div>
					</div>
				</div>
				<# } #>

			</div>
		</div>

	</div><!-- end -->
	<# } #>

</script>
<script type="text/html" id="tmpl-reyCartRecent">
	<# var items = data.items; #>
	<# if( items.length ){ #>
	<div data-ss-container>
		<div class="rey-cartRecent-items">
			<# for (var i = 0; i < items.length; i++) { #>
			<div class="rey-cartRecent-item __cart-product" data-id="{{items[i].id}}">
				<div class="rey-cartRecent-itemThumb ">
					<a href="{{items[i].link}}" class="woocommerce-LoopProduct-link woocommerce-loop-product__link">
						{{{items[i].image}}}
					</a>
				</div>
				<div class="rey-cartRecent-itemContent">
					<# if(items[i].brand){ #> {{{items[i].brand}}} <# } #> <h4 class="rey-cartRecent-itemTitle"><a
							href="{{items[i].link}}">{{{items[i].title}}}</a></h4>
					<span class="price rey-loopPrice">{{{items[i].price}}}</span>
					<div class="rey-cartRecent-itemButtons">
						{{{items[i].button}}}
						<# if(items[i].quickview){ #> {{{items[i].quickview}}} <# } #><# if(items[i].wishlist){ #>
						{{{items[i].wishlist}}} <# } #>
					</div>
				</div>
			</div>
			<# } #>
		</div>
	</div>
	<# } else { #>
	<p class="woocommerce-mini-cart__empty-message">No products in the list.</p><# } #>

</script>
<script
	src="data:text/javascript;base64,KGZ1bmN0aW9uKCkge2Z1bmN0aW9uIG1heWJlUHJlZml4VXJsRmllbGQgKCkgewogIGNvbnN0IHZhbHVlID0gdGhpcy52YWx1ZS50cmltKCkKICBpZiAodmFsdWUgIT09ICcnICYmIHZhbHVlLmluZGV4T2YoJ2h0dHAnKSAhPT0gMCkgewogICAgdGhpcy52YWx1ZSA9ICdodHRwOi8vJyArIHZhbHVlCiAgfQp9Cgpjb25zdCB1cmxGaWVsZHMgPSBkb2N1bWVudC5xdWVyeVNlbGVjdG9yQWxsKCcubWM0d3AtZm9ybSBpbnB1dFt0eXBlPSJ1cmwiXScpCmZvciAobGV0IGogPSAwOyBqIDwgdXJsRmllbGRzLmxlbmd0aDsgaisrKSB7CiAgdXJsRmllbGRzW2pdLmFkZEV2ZW50TGlzdGVuZXIoJ2JsdXInLCBtYXliZVByZWZpeFVybEZpZWxkKQp9Cn0pKCk7"
	data-rocket-status="executed">(function () {
		function maybePrefixUrlField() {
			const value = this.value.trim()
			if (value !== '' && value.indexOf('http') !== 0) {
				this.value = 'http://' + value
			}
		}

		const urlFields = document.querySelectorAll('.mc4wp-form input[type="url"]')
		for (let j = 0; j < urlFields.length; j++) {
			urlFields[j].addEventListener('blur', maybePrefixUrlField)
		}
	})();
</script>
<div class="rey-demoPanel-wrapper" id="rey-demoPanel-wrapper">
	<div class="rey-demoPanel-overlay"></div>
	<div class="rey-demoPanel-panelWrapper">
		<div class="rey-demoPanel-buttonsWrapper">
			<div class="rey-demoPanel-buttons">
				<a href="https://demos.reytheme.com/san-francisco/#" class="rey-demoPanel-btn js-rey-moreDemos">
					<span>MORE DEMOS</span>
					<span class="rey-demoPanel-arr">
                        <svg aria-hidden="true" role="img" id="rey-icon-chevron-676113ed384e1"
							 class="rey-icon rey-icon-chevron  " viewBox="0 0 40 64">
                           <polygon fill="currentColor"
									points="39.5 32 6.83 64 0.5 57.38 26.76 32 0.5 6.62 6.83 0"></polygon>
                        </svg>
                     </span>
				</a>
				<a href="https://1.envato.market/5bY379" class="rey-demoPanel-btn">BUY AT &nbsp;$69</a>
				<a href="https://demos.reytheme.com/san-francisco/#" class="rey-demoPanel-btn rey-demoPanel-remove"
				   data-rey-demos-tooltip="REMOVE PANEL">
					<svg aria-hidden="true" role="img" id="rey-icon-logo-676113ed384fb" class="rey-icon rey-icon-logo "
						 viewBox="0 0 78 40">
						<path
							d="M78,0.857908847 L68.673913,0.857908847 L63.5869565,15.1206434 L58.5,0.857908847 L49.173913,0.857908847 L59.4008152,24.9865952 L52.7086216,40 L62.0226252,40 L78,0.857908847 Z M8.47826087,5.63002681 L8.47826087,0.857908847 L0,0.857908847 L0,26.5951743 L8.47826087,26.5951743 L8.47826087,17.1045576 C8.47826087,12.922252 10.7038043,10.1340483 13.1413043,9.43699732 C14.6779891,9.0080429 16.2146739,8.95442359 17.8043478,9.43699732 L17.8043478,0 C13.0353261,0.321715818 10.2269022,1.93029491 8.47826087,5.63002681 Z M35.7146739,19.9463807 C34.7078804,19.9463807 33.701087,19.7855228 33.0652174,19.4101877 L48.1141304,10.2949062 C46.1535326,1.769437 39.6888587,0 36.0326087,0 C27.1834239,0 21.8315217,6.11260054 21.8315217,13.7265416 C21.8315217,21.3404826 27.1834239,27.4530831 36.0326087,27.4530831 C40.1127717,27.4530831 43.6100543,25.9517426 46.4184783,23.2171582 L42.0733696,17.4798928 C40.5366848,18.9276139 38.2581522,19.9463807 35.7146739,19.9463807 Z M36.0326087,7.50670241 C37.4103261,7.50670241 38.3641304,8.20375335 38.7880435,8.90080429 L29.9918478,14.2091153 C29.4619565,10.1876676 32.4293478,7.50670241 36.0326087,7.50670241 Z"
							fill="currentColor" fill-rule="nonzero"></path>
					</svg>
					<svg aria-hidden="true" role="img" id="rey-icon-close-676113ed3850a"
						 class="rey-icon rey-icon-close " viewBox="0 0 110 110">
						<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" stroke-linecap="square">
							<path d="M4.79541854,4.29541854 L104.945498,104.445498 L4.79541854,4.29541854 Z"
								  stroke="currentColor" stroke-width="var(--stroke-width, 12px)"></path>
							<path d="M4.79541854,104.704581 L104.945498,4.55450209 L4.79541854,104.704581 Z"
								  stroke="currentColor" stroke-width="var(--stroke-width, 12px)"></path>
						</g>
					</svg>
				</a>
			</div>
		</div>
		<div class="rey-demoPanel" data-size="1">
			<div class="rey-demoPanel-handler js-demoPanel-handler" data-rey-demos-tooltip="CLICK TO RESIZE"></div>
			<div class="rey-demoPanel-header">
				<ul class="rey-demoPanel-tabs">
					<li><a href="https://demos.reytheme.com/san-francisco/#" class="--active" data-tab="demos">DEMOS</a>
					</li>
					<li><a href="https://demos.reytheme.com/san-francisco/#" data-tab="pages"
						   data-supports="categories, search">PAGES</a></li>
					<li data-rey-demos-tooltip="COMING SOON!"><a href="https://demos.reytheme.com/san-francisco/#"
																 data-tab="sections" class="--disabled">SECTIONS</a>
					</li>
					<li data-rey-demos-tooltip="COMING SOON!"><a href="https://demos.reytheme.com/san-francisco/#"
																 data-tab="features" class="--disabled">FEATURES</a>
					</li>
				</ul>
				<div class="rey-demoPanel-search js-demoPanel-search">
					<svg class="rey-icon u-icon" height="100%" width="100%" xmlns="http://www.w3.org/2000/svg"
						 viewBox="0 0 30 30">
						<title>Search</title>
						<path
							d="M29.784,26.394 L25.103,21.831 C25.056,21.785 24.995,21.764 24.943,21.727 C29.501,16.417 28.792,8.956 23.676,3.969 C21.055,1.414 17.571,0.006 13.865,0.006 C10.158,0.006 6.673,1.414 4.053,3.969 C-1.358,9.244 -1.358,17.827 4.053,23.101 C6.673,25.657 10.158,27.065 13.865,27.065 C17.155,27.065 19.831,26.323 22.322,24.285 C22.361,24.336 22.381,24.394 22.428,24.441 L26.726,28.630 C26.975,28.873 27.301,28.995 27.627,28.995 C27.953,28.995 29.099,28.873 29.347,28.630 C29.845,28.145 30.282,26.879 29.784,26.394 ZM13.865,23.834 C7.538,23.834 3.588,19.596 3.526,13.649 C3.460,7.397 7.666,3.397 13.865,3.397 C20.087,3.397 24.519,7.410 24.477,13.609 C24.436,19.609 20.169,23.834 13.865,23.834 Z"></path>
					</svg>
					<input type="search" placeholder="Type to search..">
				</div>
				<ul class="rey-demoPanel-links">
					<li class="rey-demoPanel-links--askQuestion">
						<svg class="rey-icon" height="100%" width="100%" viewBox="0 0 56 53" version="1.1"
							 xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
							<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
								<path
									d="M43.3,29.5 C43.3,30 42.9,30.6 42.6,30.9 C40.9,33.4 35.8,37.6 28,37.6 C20.2,37.6 15.1,33.4 13.4,30.9 C13.1,30.5 12.8,30.1 12.8,29.6 C12.8,29 13.2,28.4 13.9,28.4 C14.2,28.4 14.5,28.5 14.7,28.7 C17.6,31.2 22.3,33.5 28.1,33.5 C33.9,33.5 38.7,31.2 41.5,28.7 C41.7,28.5 41.9,28.4 42.2,28.4 C42.8,28.4 43.3,28.9 43.3,29.5 Z M51,49 C51.5,49.2 51.8,49.7 51.8,50.4 C51.8,51.4 51.2,52.4 49.6,52.4 C44.6,52.4 38.9,50.5 35.1,48.1 C34.7,47.9 34.4,47.8 33.9,47.9 C32,48.2 30,48.4 28,48.4 C12.5,48.4 0,37.5 0,24.2 C0,10.8 12.5,0 28,0 C43.5,0 56,10.9 56,24.2 C56,31.4 52.4,37.8 46.7,42.2 C46.3,42.5 46.1,42.9 46.3,43.4 C47.1,46 49,47.9 51,49 Z M43.5,46.6 C42.1,44.8 41.1,42 41.1,40.9 C41.1,40.4 41.5,39.9 41.9,39.7 C47.6,36.2 51.3,30.5 51.3,24.2 C51.3,13.6 40.9,5 28,5 C15.1,5 4.7,13.6 4.7,24.2 C4.7,34.8 15.1,43.4 28,43.4 C30,43.4 32,43.2 33.9,42.8 C34.6,42.6 35,42.7 35.3,43 C37.6,44.9 41.9,47.2 43.3,47.2 C43.4,47.2 43.6,47.1 43.6,46.9 C43.6,46.8 43.6,46.7 43.5,46.6 Z"
									fill="currentColor" fill-rule="nonzero"></path>
							</g>
						</svg>
						<a href="https://themeforest.net/item/rey-multipurpose-woocommerce-theme/24689383/comments"
						   target="_blank">
							<span>ASK ANY QUESTION</span>
						</a>
					</li>
					<li>
						<svg class="rey-icon" xmlns="http://www.w3.org/2000/svg"
							 xmlns:xlink="http://www.w3.org/1999/xlink" height="100%" width="100%" viewBox="0 0 41 33"
							 version="1.1" role="img">
							<path
								d="M39.9,7.9 C39.1,7 38,6.4 36.8,6.4 L21.4,6.4 C20.9,6.4 20.4,6.8 20.4,7.4 C20.4,8 20.9,8.4 21.4,8.4 L36.8,8.4 C37.4,8.4 38,8.7 38.4,9.1 C38.8,9.6 39,10.2 38.8,10.8 L37.9,15.8 L26.9,15.8 C26.4,15.8 25.9,16.2 25.9,16.8 C25.9,17.4 26.4,17.8 26.9,17.8 L37.6,17.8 L36.7,22.6 C36.6,23.3 35.9,23.8 35.2,23.8 L16,23.8 C15.3,23.8 14.7,23.3 14.5,22.6 L10.6,0.9 C10.5,0.4 10.1,0.1 9.6,0.1 L1.9,0.1 C1.4,0.1 0.9,0.5 0.9,1.1 C0.9,1.7 1.4,2.1 1.9,2.1 L8.8,2.1 L12.6,23.1 C12.8,24.5 13.8,25.5 15.1,25.9 C14.6,26.6 14.2,27.5 14.2,28.5 C14.2,31 16.2,33 18.7,33 C21.2,33 23.2,31 23.2,28.5 C23.2,27.6 22.9,26.7 22.4,26 L28.5,26 C28,26.7 27.7,27.6 27.7,28.5 C27.7,31 29.7,33 32.2,33 C34.7,33 36.7,31 36.7,28.5 C36.7,27.5 36.4,26.6 35.9,25.9 C37.2,25.6 38.3,24.5 38.6,23.1 L40.8,11.3 C41,10.1 40.7,8.9 39.9,7.9 Z M21.2,28.4 C21.2,29.8 20.1,30.9 18.7,30.9 C17.3,30.9 16.2,29.8 16.2,28.4 C16.2,27 17.3,25.9 18.7,25.9 C20.1,25.9 21.2,27 21.2,28.4 Z M32.3,30.9 C30.9,30.9 29.8,29.8 29.8,28.4 C29.8,27 30.9,25.9 32.3,25.9 C33.7,25.9 34.8,27 34.8,28.4 C34.8,29.8 33.7,30.9 32.3,30.9 Z"
								fill="currentColor" fill-rule="nonzero"></path>
						</svg>
						<a href="https://1.envato.market/5bY379" target="_blank">
							<span>BUY AT &nbsp;$69</span>
						</a>
					</li>
				</ul>
				<div class="rey-demoPanel-controls">
					<ul>
						<li>
							<a href="https://demos.reytheme.com/san-francisco/#" class="demoPanel-sizeControls"
							   data-sizing="1" data-rey-demos-tooltip="ENLARGE PANEL">
								<svg class="rey-icon" width="24px" height="15px" viewBox="0 0 24 15" version="1.1"
									 xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
									<polygon fill="currentColor" fill-rule="nonzero"
											 points="24 11.71 12 -0.01 0 11.71 2.71 14.39 12 5.31 21.29 14.39"></polygon>
								</svg>
							</a>
						</li>
						<li class="demoPanel-sizeControls-dots"><span></span> <span></span> <span></span></li>
						<li>
							<a href="https://demos.reytheme.com/san-francisco/#" class="demoPanel-sizeControls"
							   data-sizing="-1" data-rey-demos-tooltip="SHRINK PANEL">
								<svg class="rey-icon --flip-vertical" width="24px" height="15px" viewBox="0 0 24 15"
									 version="1.1" xmlns="http://www.w3.org/2000/svg"
									 xmlns:xlink="http://www.w3.org/1999/xlink">
									<polygon fill="currentColor" fill-rule="nonzero"
											 points="24 11.71 12 -0.01 0 11.71 2.71 14.39 12 5.31 21.29 14.39"></polygon>
								</svg>
							</a>
						</li>
					</ul>
					<a href="https://demos.reytheme.com/san-francisco/#" class="rey-demoPanel-close"
					   data-rey-demos-tooltip="CLOSE PANEL">
						<svg class="rey-icon" width="17px" height="17px" viewBox="0 0 17 17" version="1.1"
							 xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
							<polygon fill="currentColor" fill-rule="nonzero"
									 points="11.33 8.5 16.99 14.16 14.16 16.99 8.5 11.33 2.84 16.99 0.01 14.16 5.67 8.5 0.01 2.84 2.84 0.01 8.5 5.67 14.16 0.01 16.99 2.84"></polygon>
						</svg>
					</a>
				</div>
			</div>
			<!-- .rey-demoPanel-header -->
			<div class="rey-demoPanel-contentWrapper">
				<div class="rey-demoPanel-content">
					<div class="rey-demoPanel-contentTab --active" data-tab="demos"></div>
					<div class="rey-demoPanel-contentTab" data-tab="pages" data-per-row="7"></div>
				</div>
			</div>
		</div>
	</div>
</div>
<script type="text/html" id="tmpl-rey-demos-template">
	<div class="rey-demoPanel-contentItems">
		<# Object.keys(data.items).forEach(function(item, index) { #>
		<# if( data.items[item]?.visibility !== 'private' ){ #>
		<# var keywords = typeof data.items[item].k !== 'undefined' ? data.items[item].k : ''; #>
		<# var categories = typeof data.items[item].categories !== 'undefined' ? data.items[item].categories : ''; #>
		<div class="rey-demoPanel-item " data-keywords="{{keywords}}" data-categories="{{categories}}">
			<div class="rey-demoPanel-itemContent">
				<a href="{{data.items[item]['url']}}" target="_blank" class="rey-demoPanel-itemThumbnail">
					<img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
						 data-src="{{data.items[item].preview_img}}" alt="{{data.items[item].name}}" class="">
				</a>
				<h4 class="rey-demoPanel-itemName">{{{data.items[item].name}}}</h4>
			</div>
			<div class="rey-demoPanel-loader"></div>
		</div>
		<# } #>
		<# }); #>
	</div>
</script>
<script type="text/html" id="tmpl-rey-demos-categories">
	<div class="rey-demoPanel-ctg">
		<# Object.keys(data).forEach(function(item, index) { #>
		<# var ctgName = data[index].replace(/-/g, ' ').toUpperCase(); #>
		<# var isActive = index === 0 ? '--active' : ''; #>
		<# ctgName = index === 0 ? 'All' : ctgName; #>
		<span class="rey-demoPanel-ctgItem {{isActive}}" data-category="{{data[index]}}">{{ctgName}}</span>
		<# }); #>
	</div>
</script>
<div class="rey-quickviewPanel woocommerce " id="js-rey-quickviewPanel" data-lazy-hidden="">
	<div class="rey-quickview-container" data-openstyle="slide"></div>
	<button class="btn rey-quickviewPanel-close js-rey-quickviewPanel-close" aria-label="">
		<svg aria-hidden="true" role="img" id="rey-icon-close-676113ed386f2" class="rey-icon rey-icon-close "
			 viewBox="0 0 110 110">
			<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" stroke-linecap="square">
				<path d="M4.79541854,4.29541854 L104.945498,104.445498 L4.79541854,4.29541854 Z" stroke="currentColor"
					  stroke-width="var(--stroke-width, 12px)"></path>
				<path d="M4.79541854,104.704581 L104.945498,4.55450209 L4.79541854,104.704581 Z" stroke="currentColor"
					  stroke-width="var(--stroke-width, 12px)"></path>
			</g>
		</svg>
	</button>
	<div class="rey-lineLoader"></div>
</div>
<script type="text/template" id="tmpl-variation-template">
	<# if( data.variation.variation_description ){ #>
	<div class="woocommerce-variation-description">{{{ data.variation.variation_description }}}</div>
	<# } #>

	<# if( data.variation.price_html ){ #>
	<div class="woocommerce-variation-price">{{{ data.variation.price_html }}}</div>
	<# } #>

	<# if( data.variation.availability_html ){ #>
	<div class="woocommerce-variation-availability">{{{ data.variation.availability_html }}}</div>
	<# } #>
</script>
<script type="text/template" id="tmpl-unavailable-variation-template">
	<p>Sorry, this product is unavailable. Please choose a different combination.</p>
</script>
<div class="rey-wishlist-notice-wrapper" data-lazy-hidden="">
	<div class="rey-wishlist-notice"><span>Added to wishlist!</span> <a
			href="https://demos.reytheme.com/san-francisco/wishlist/" class="btn btn-line-active">VIEW WISHLIST</a>
	</div>
</div>
<script type="text/javascript"
		src="data:text/javascript;base64,CgkJCQljb25zdCBsYXp5bG9hZFJ1bk9ic2VydmVyID0gKCkgPT4gewoJCQkJCWNvbnN0IGxhenlsb2FkQmFja2dyb3VuZHMgPSBkb2N1bWVudC5xdWVyeVNlbGVjdG9yQWxsKCBgLmUtY29uLmUtcGFyZW50Om5vdCguZS1sYXp5bG9hZGVkKWAgKTsKCQkJCQljb25zdCBsYXp5bG9hZEJhY2tncm91bmRPYnNlcnZlciA9IG5ldyBJbnRlcnNlY3Rpb25PYnNlcnZlciggKCBlbnRyaWVzICkgPT4gewoJCQkJCQllbnRyaWVzLmZvckVhY2goICggZW50cnkgKSA9PiB7CgkJCQkJCQlpZiAoIGVudHJ5LmlzSW50ZXJzZWN0aW5nICkgewoJCQkJCQkJCWxldCBsYXp5bG9hZEJhY2tncm91bmQgPSBlbnRyeS50YXJnZXQ7CgkJCQkJCQkJaWYoIGxhenlsb2FkQmFja2dyb3VuZCApIHsKCQkJCQkJCQkJbGF6eWxvYWRCYWNrZ3JvdW5kLmNsYXNzTGlzdC5hZGQoICdlLWxhenlsb2FkZWQnICk7CgkJCQkJCQkJfQoJCQkJCQkJCWxhenlsb2FkQmFja2dyb3VuZE9ic2VydmVyLnVub2JzZXJ2ZSggZW50cnkudGFyZ2V0ICk7CgkJCQkJCQl9CgkJCQkJCX0pOwoJCQkJCX0sIHsgcm9vdE1hcmdpbjogJzIwMHB4IDBweCAyMDBweCAwcHgnIH0gKTsKCQkJCQlsYXp5bG9hZEJhY2tncm91bmRzLmZvckVhY2goICggbGF6eWxvYWRCYWNrZ3JvdW5kICkgPT4gewoJCQkJCQlsYXp5bG9hZEJhY2tncm91bmRPYnNlcnZlci5vYnNlcnZlKCBsYXp5bG9hZEJhY2tncm91bmQgKTsKCQkJCQl9ICk7CgkJCQl9OwoJCQkJY29uc3QgZXZlbnRzID0gWwoJCQkJCSdET01Db250ZW50TG9hZGVkJywKCQkJCQknZWxlbWVudG9yL2xhenlsb2FkL29ic2VydmUnLAoJCQkJXTsKCQkJCWV2ZW50cy5mb3JFYWNoKCAoIGV2ZW50ICkgPT4gewoJCQkJCWRvY3VtZW50LmFkZEV2ZW50TGlzdGVuZXIoIGV2ZW50LCBsYXp5bG9hZFJ1bk9ic2VydmVyICk7CgkJCQl9ICk7CgkJCQ=="
		data-rocket-status="executed">
	const lazyloadRunObserver = () => {
		const lazyloadBackgrounds = document.querySelectorAll(`.e-con.e-parent:not(.e-lazyloaded)`);
		const lazyloadBackgroundObserver = new IntersectionObserver((entries) => {
			entries.forEach((entry) => {
				if (entry.isIntersecting) {
					let lazyloadBackground = entry.target;
					if (lazyloadBackground) {
						lazyloadBackground.classList.add('e-lazyloaded');
					}
					lazyloadBackgroundObserver.unobserve(entry.target);
				}
			});
		}, {rootMargin: '200px 0px 200px 0px'});
		lazyloadBackgrounds.forEach((lazyloadBackground) => {
			lazyloadBackgroundObserver.observe(lazyloadBackground);
		});
	};
	const events = [
		'DOMContentLoaded',
		'elementor/lazyload/observe',
	];
	events.forEach((event) => {
		document.addEventListener(event, lazyloadRunObserver);
	});
</script>
<script type="text/javascript"
		src="data:text/javascript;base64,CgkJKGZ1bmN0aW9uICgpIHsKCQkJdmFyIGMgPSBkb2N1bWVudC5ib2R5LmNsYXNzTmFtZTsKCQkJYyA9IGMucmVwbGFjZSgvd29vY29tbWVyY2Utbm8tanMvLCAnd29vY29tbWVyY2UtanMnKTsKCQkJZG9jdW1lbnQuYm9keS5jbGFzc05hbWUgPSBjOwoJCX0pKCk7Cgk="
		data-rocket-status="executed">
	(function () {
		var c = document.body.className;
		c = c.replace(/woocommerce-no-js/, 'woocommerce-js');
		document.body.className = c;
	})();
</script>
<script type="text/html" id="tmpl-reyWishlistItem">
	<div class="rey-wishlist-list">
		<# for (var i = 0; i < data.num; i++) { #>
		<# var ttFixed = typeof data.fixedContainer !== "undefined" && data.fixedContainer ? "data-fx-tooltip" : ""; #>
		<div class="rey-wishlistItem" style="transition-delay: {{i * 0.07}}s ">
			<div class="rey-wishlistItem-thumbnail ">
				<a href="{{data.ob[i].url}}" class="rey-wishlistItem-thumbnailLink">{{{data.ob[i].image}}}</a>
				<# if( typeof data.ob[i].add_to_cart !== "undefined" ){ #>
				<div class="rey-wishlistItem-atc --no-var-popup" data-rey-tooltip="{{data.ob[i].add_to_cart_text}}"
					 data-rey-tooltip-source="wishlist-atc" {{{ttFixed}}}>{{{data.ob[i].add_to_cart}}}
				</div>
				<# } #> <a class="rey-wishlistItem-remove" data-rey-tooltip="Remove from wishlist" {{{ttFixed}}}
						   data-rey-tooltip-source="wishlist" href="#" data-id="{{data.ob[i].id}}"
						   aria-label="Remove from wishlist">
					<svg aria-hidden="true" role="img" id="rey-icon-close-676113ed39ae2"
						 class="rey-icon rey-icon-close " viewbox="0 0 110 110">
						<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" stroke-linecap="square">
							<path d="M4.79541854,4.29541854 L104.945498,104.445498 L4.79541854,4.29541854 Z"
								  stroke="currentColor" stroke-width="var(--stroke-width, 12px)"></path>
							<path d="M4.79541854,104.704581 L104.945498,4.55450209 L4.79541854,104.704581 Z"
								  stroke="currentColor" stroke-width="var(--stroke-width, 12px)"></path>
						</g>
					</svg>
				</a></div>
			<div class="rey-wishlistItem-name">
				<a href="{{data.ob[i].url}}">{{data.ob[i].title}}</a>
				<# if(!data.grid){ #>
				<div class="rey-wishlistItem-price">{{{data.ob[i].price}}}</div>
				<# } #>
			</div>
			<# if(data.grid){ #>
			<div class="rey-wishlistItem-price">{{{data.ob[i].price}}}</div>
			<# } #>
			<# if( typeof data.ob[i].add_to_cart !== "undefined" ){ #>
			<div class="rey-wishlistItem-atc --no-var-popup" data-rey-tooltip="{{data.ob[i].add_to_cart_text}}"
				 data-rey-tooltip-source="wishlist-atc" {{{ttFixed}}}>{{{data.ob[i].add_to_cart}}}
			</div>
			<# } #> <a class="rey-wishlistItem-remove" data-rey-tooltip="Remove from wishlist" {{{ttFixed}}}
					   data-rey-tooltip-source="wishlist" href="#" data-id="{{data.ob[i].id}}"
					   aria-label="Remove from wishlist">
				<svg aria-hidden="true" role="img" id="rey-icon-close-676113ed39ae2" class="rey-icon rey-icon-close "
					 viewbox="0 0 110 110">
					<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" stroke-linecap="square">
						<path d="M4.79541854,4.29541854 L104.945498,104.445498 L4.79541854,4.29541854 Z"
							  stroke="currentColor" stroke-width="var(--stroke-width, 12px)"></path>
						<path d="M4.79541854,104.704581 L104.945498,4.55450209 L4.79541854,104.704581 Z"
							  stroke="currentColor" stroke-width="var(--stroke-width, 12px)"></path>
					</g>
				</svg>
			</a></div>
		<# } #>
		<div class="rey-wishlistItem --placeholder" style="transition-delay: {{data.num * 0.07}}s ">
		</div>
</script>
<div id="rey-searchPanel" class="rey-searchPanel rey-searchForm rey-searchAjax js-rey-ajaxSearch --hidden"
	 data-style="wide">
	<div class="rey-searchPanel-inner">
		<form role="search" action="https://demos.reytheme.com/san-francisco/" method="get">
			<label for="search-input-676113ed39d6d">Search demos.reytheme.com/san-francisco</label>
			<div class="rey-searchPanel-innerForm">
				<input type="search" name="s" placeholder="type to search.." id="search-input-676113ed39d6d" value="">
				<div class="rey-headerSearch-actions">
					<input type="hidden" name="post_type" value="product">
				</div>
			</div>
		</form>
		<div class="rey-searchResults js-rey-searchResults "></div>
		<div class="rey-lineLoader"></div>
		<nav class="rey-searchPanel__suggestions" aria-label="Search Suggestions" data-lazy-hidden="">
			<div class="rey-searchPanel__suggestionsTitle">
				TRENDING
			</div>
			<button aria-label="Search for health">health</button>
			<button aria-label="Search for speaker">speaker</button>
			<button aria-label="Search for fitness">fitness</button>
			<button aria-label="Search for wireless">wireless</button>
			<button aria-label="Search for watch">watch</button>
			<button aria-label="Search for charger">charger</button>
		</nav>
		<!-- .row -->
	</div>
</div>
<div class="rey-searchPanel-wideOverlay rey-overlay --no-js-close" style="opacity:0;"></div>
<!-- .rey-searchPanel -->
<script type="text/javascript" id="reystyles-loaded"
		src="data:text/javascript;base64,CiB3aW5kb3cucmV5U3R5bGVzPVtbInJleS10aGVtZSIsInJleS1oZWFkZXIiLCJyZXktc3BsaWRlLWxpdGUiLCJyZXktbG9nbyIsInJleWNvcmUtaGJnLXN0eWxlcyIsInJleS1oZWFkZXItaWNvbiIsInJleS1pY29uIiwicmV5LWhlYWRlci1tZW51IiwicmV5Y29yZS1lbGVtZW50b3ItZnJvbnRlbmQiLCJyZXljb3JlLWVsZW1lbnRvci1zZWN0aW9uLW9wdC1yZXkiLCJyZXljb3JlLXdpZGdldC10ZXh0LXNjcm9sbGVyLWxpdGUiLCJyZXljb3JlLXdpZGdldC1tZW51LXN0eWxlIiwicmV5Y29yZS13aWRnZXQtbWVudS1ob3Jpem9udGFsIiwicmV5LWhiZyIsInJleWNvcmUtd2lkZ2V0LWhlYWRlci1uYXZpZ2F0aW9uLXNvY2lhbCIsInJleWNvcmUtd2lkZ2V0LXRyaWdnZXItdjItYnV0dG9uIiwicmV5Y29yZS13aWRnZXQtYmFzaWMtc2xpZGVyLXN0eWxlIiwicmV5Y29yZS13aWRnZXQtbmV3c2xldHRlci1pbmxpbmUtYmFzaWMiXSxbInJleS10aGVtZS1leHQiLCJyZXljb3JlLWVsZW1lbnRvci1mcm9udGVuZC1kZWZlcnJlZCIsInJleS13Yy1lbGVtZW50b3IiLCJyZXljb3JlLWVsZW1lbnRvci1zZWN0aW9uLWRlZmVycmVkLW9wdCIsInJleS1zcGxpZGUiLCJyZXljb3JlLXdpZGdldC10ZXh0LXNjcm9sbGVyLXN0eWxlIiwicmV5Y29yZS13aWRnZXQtbWVudS1ob3Jpem9udGFsLWRlZiIsInJleWNvcmUtZWxlbWVudG9yLW5hdi1zdHlsZXMiLCJyZXktb3ZlcmxheSIsInJleS1oZWFkZXItbW9iaWxlLW1lbnUiLCJyZXljb3JlLW1vZHVsZS1tZWdhLW1lbnUiLCJyZXljb3JlLXdpZGdldC1tZW51LXZlcnRpY2FsIiwicmV5LWJ1dHRvbnMiLCJyZXljb3JlLXdpZGdldC13Yy1hdHRyaWJ1dGVzLXN0eWxlIiwicmV5LXdjLXRhZy1hdHRyaWJ1dGVzIiwicmV5Y29yZS1jbG9zZS1hcnJvdyIsInJleS1oZWFkZXItbWVudS1zdWJtZW51cyIsInJleS1oZWFkZXItbWVudS1pbmRpY2F0b3JzLWRhc2giLCJyZXljb3JlLW1haW4tbWVudSIsInJleWNvcmUtaGVhZGVyLXNlYXJjaC10b3AiLCJyZXljb3JlLWhlYWRlci1zZWFyY2giLCJyZXktd2MtaGVhZGVyLWFjY291bnQtcGFuZWwtdG9wIiwicmV5LXdjLWhlYWRlci1hY2NvdW50LXBhbmVsIiwicmV5LXdjLWhlYWRlci13aXNobGlzdCIsInJleS13Yy1oZWFkZXItbWluaS1jYXJ0LXRvcCIsInJleS1zaW1wbGUtc2Nyb2xsYmFyIiwicmV5Y29yZS1vZmZjYW52YXMtcGFuZWxzIiwicmV5Y29yZS1zbGlkZXItY29tcG9uZW50cyIsInJleWNvcmUtZWxlbWVudG9yLWhlYWRpbmctdmVydGljYWwiLCJyZXljb3JlLWVsZW1lbnRvci1lbC1pY29uYm94IiwicmV5LXdjLWdlbmVyYWwiLCJyZXktd2MtZ2VuZXJhbC1kZWZlcnJlZCIsInJleWNvcmUtd2lkZ2V0LXByb2R1Y3QtZ3JpZC1zdHlsZSIsInJleWNvcmUtd2lkZ2V0LXByb2R1Y3QtZ3JpZC1jYXJvdXNlbCIsInJleS13Yy1nZW5lcmFsLWRlZmVycmVkLWZvbnQiLCJyZXktd2MtbG9vcCIsInJleWNvcmUtbG9vcC1wcm9kdWN0LXNraW4tcHJvdG8iLCJyZXljb3JlLXdpc2hsaXN0IiwicmV5Y29yZS10b29sdGlwcyIsInJleWNvcmUtdmFyaWF0aW9uLXN3YXRjaGVzLWxpdGUiLCJyZXljb3JlLXZhcmlhdGlvbi1zd2F0Y2hlcyIsInJleWNvcmUtcXVpY2t2aWV3IiwicmV5Y29yZS13aWRnZXQtY2Fyb3VzZWwtc3R5bGUiLCJyZXljb3JlLWNhcmRzLWJyb29rbHluIiwicmV5Y29yZS13aWRnZXQtc2xpZGVyLW5hdi1zdHlsZSIsInJleWNvcmUtc2NoZWR1bGVkLXNhbGVzIiwicmV5Y29yZS1tb2R1bGUtZWxlbWVudG9yLXNlY3Rpb24tZWxlbWVudG9yLXNlY3Rpb24tc2Nyb2xsLWVmZmVjdHMiLCJyZXljb3JlLXdpZGdldC1iYXNpYy1wb3N0LWdyaWQtc3R5bGUiLCJyZXktYmxvZyIsInJleWNvcmUtZWxlbWVudG9yLWVsLWltYWdlLWdhbGxlcnkiLCJyZXktZ2FsbGVyeSIsInJleWNvcmUtd2lkZ2V0LW1lbnUtdGl0bGUiLCJyZXktaGVhZGVyLWRyb3AtcGFuZWwiLCJyZXljb3JlLXBhc3MtdmlzaWJpbGl0eSIsInJleS1mb3JtLXJvdyIsInJleWNvcmUtbW9kdWxlLW1pbmljYXJ0LWV4dHJhLXByb2R1Y3RzIiwicmV5ZGVtb3MiXV07IAo="
		data-rocket-status="executed">
	window.reyStyles = [["rey-theme", "rey-header", "rey-splide-lite", "rey-logo", "reycore-hbg-styles", "rey-header-icon", "rey-icon", "rey-header-menu", "reycore-elementor-frontend", "reycore-elementor-section-opt-rey", "reycore-widget-text-scroller-lite", "reycore-widget-menu-style", "reycore-widget-menu-horizontal", "rey-hbg", "reycore-widget-header-navigation-social", "reycore-widget-trigger-v2-button", "reycore-widget-basic-slider-style", "reycore-widget-newsletter-inline-basic"], ["rey-theme-ext", "reycore-elementor-frontend-deferred", "rey-wc-elementor", "reycore-elementor-section-deferred-opt", "rey-splide", "reycore-widget-text-scroller-style", "reycore-widget-menu-horizontal-def", "reycore-elementor-nav-styles", "rey-overlay", "rey-header-mobile-menu", "reycore-module-mega-menu", "reycore-widget-menu-vertical", "rey-buttons", "reycore-widget-wc-attributes-style", "rey-wc-tag-attributes", "reycore-close-arrow", "rey-header-menu-submenus", "rey-header-menu-indicators-dash", "reycore-main-menu", "reycore-header-search-top", "reycore-header-search", "rey-wc-header-account-panel-top", "rey-wc-header-account-panel", "rey-wc-header-wishlist", "rey-wc-header-mini-cart-top", "rey-simple-scrollbar", "reycore-offcanvas-panels", "reycore-slider-components", "reycore-elementor-heading-vertical", "reycore-elementor-el-iconbox", "rey-wc-general", "rey-wc-general-deferred", "reycore-widget-product-grid-style", "reycore-widget-product-grid-carousel", "rey-wc-general-deferred-font", "rey-wc-loop", "reycore-loop-product-skin-proto", "reycore-wishlist", "reycore-tooltips", "reycore-variation-swatches-lite", "reycore-variation-swatches", "reycore-quickview", "reycore-widget-carousel-style", "reycore-cards-brooklyn", "reycore-widget-slider-nav-style", "reycore-scheduled-sales", "reycore-module-elementor-section-elementor-section-scroll-effects", "reycore-widget-basic-post-grid-style", "rey-blog", "reycore-elementor-el-image-gallery", "rey-gallery", "reycore-widget-menu-title", "rey-header-drop-panel", "reycore-pass-visibility", "rey-form-row", "reycore-module-minicart-extra-products", "reydemos"]];
</script>
<script type="text/javascript" id="reyscripts-loaded">window.addEventListener('DOMContentLoaded', function () {
		window.reyScripts = ["rey-script", "reycore-script", "reycore-elementor-frontend", "reycore-widget-text-scroller-scripts", "splidejs", "rey-splide", "reycore-module-mega-menu", "reycore-woocommerce", "rey-mobile-menu-trigger", "rey-main-menu", "reycore-elementor-elem-header-navigation", "reycore-sidepanel", "reycore-header-search", "rey-drop-panel", "reycore-wc-header-account-panel", "rey-tmpl", "reycore-wc-header-wishlist", "reycore-tooltips", "reycore-wishlist", "reycore-wc-header-minicart", "animejs", "rey-simple-scrollbar", "reycore-offcanvas-panels", "reycore-widget-basic-slider-scripts", "reycore-module-elementor-lazy-bg", "reycore-mc4wp", "reycore-widget-product-grid-scripts", "reycore-wc-loop-grids", "reycore-variation-swatches", "jquery-blockui", "wc-add-to-cart-variation", "reycore-quickview", "elementor-frontend", "reycore-widget-carousel-scripts", "reycore-widget-slider-nav-scripts", "reycore-module-elementor-section-elementor-section-scroll-effects-colorize", "reycore-wc-header-account-forms", "reycore-module-minicart-extra-products", "reydemos", "reycore-wc-header-ajax-search"];
	});
</script>
<script type="text/template" id="tmpl-variation-template">
	<# if( data.variation.variation_description ){ #>
	<div class="woocommerce-variation-description">{{{ data.variation.variation_description }}}</div>
	<# } #>

	<# if( data.variation.price_html ){ #>
	<div class="woocommerce-variation-price">{{{ data.variation.price_html }}}</div>
	<# } #>

	<# if( data.variation.availability_html ){ #>
	<div class="woocommerce-variation-availability">{{{ data.variation.availability_html }}}</div>
	<# } #>
</script>
<script type="text/template" id="tmpl-unavailable-variation-template">
	<p>Sorry, this product is unavailable. Please choose a different combination.</p>
</script>
<link data-minify="1" rel="stylesheet" id="wc-blocks-style-css" href="/babui/assets/client-view/css/wc-blocks.css"
	  type="text/css" media="all">
<link rel="stylesheet" onload="this.onload=null;this.media=&#39;all&#39;" media="all" data-noptimize=""
	  data-no-optimize="1" data-pagespeed-no-defer="" data-pagespeed-no-transform="" data-minify="1"
	  data-no-rel="stylesheet" id="elementor-post-1142-css" href="/babui/assets/client-view/css/post-1142.css"
	  type="text/css" data-media="all">
<noscript>
	<link rel='stylesheet' data-noptimize="" data-no-optimize="1" data-pagespeed-no-defer=""
		  data-pagespeed-no-transform="" data-minify="1" data-id='elementor-post-1142-css'
		  href='https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/elementor/css/post-1142.css?ver=1732304232'
		  data-type='text/css' data-media='all'/>
</noscript>
<link rel="stylesheet" onload="this.onload=null;this.media=&#39;all&#39;" media="all" data-noptimize=""
	  data-no-optimize="1" data-pagespeed-no-defer="" data-pagespeed-no-transform="" data-minify="1"
	  data-no-rel="stylesheet" id="elementor-post-1168-css" href="/babui/assets/client-view/css/post-1168.css"
	  type="text/css" data-media="all">
<noscript>
	<link rel='stylesheet' data-noptimize="" data-no-optimize="1" data-pagespeed-no-defer=""
		  data-pagespeed-no-transform="" data-minify="1" data-id='elementor-post-1168-css'
		  href='https://demos.reytheme.com/san-francisco/wp-content/uploads/sites/24/elementor/css/post-1168.css?ver=1732304232'
		  data-type='text/css' data-media='all'/>
</noscript>
<link rel="stylesheet" id="widget-text-editor-css" href="/babui/assets/client-view/css/widget-text-editor.min.css"
	  type="text/css" media="all">
<link rel="stylesheet" id="widget-social-icons-css" href="/babui/assets/client-view/css/widget-social-icons.min.css"
	  type="text/css" media="all">
<link rel="stylesheet" id="e-apple-webkit-css" href="/babui/assets/client-view/css/apple-webkit.min.css"
	  type="text/css" media="all">
<script type="text/javascript" id="rocket-browser-checker-js-after"
		src="data:text/javascript;base64,Ci8qIDwhW0NEQVRBWyAqLwoidXNlIHN0cmljdCI7dmFyIF9jcmVhdGVDbGFzcz1mdW5jdGlvbigpe2Z1bmN0aW9uIGRlZmluZVByb3BlcnRpZXModGFyZ2V0LHByb3BzKXtmb3IodmFyIGk9MDtpPHByb3BzLmxlbmd0aDtpKyspe3ZhciBkZXNjcmlwdG9yPXByb3BzW2ldO2Rlc2NyaXB0b3IuZW51bWVyYWJsZT1kZXNjcmlwdG9yLmVudW1lcmFibGV8fCExLGRlc2NyaXB0b3IuY29uZmlndXJhYmxlPSEwLCJ2YWx1ZSJpbiBkZXNjcmlwdG9yJiYoZGVzY3JpcHRvci53cml0YWJsZT0hMCksT2JqZWN0LmRlZmluZVByb3BlcnR5KHRhcmdldCxkZXNjcmlwdG9yLmtleSxkZXNjcmlwdG9yKX19cmV0dXJuIGZ1bmN0aW9uKENvbnN0cnVjdG9yLHByb3RvUHJvcHMsc3RhdGljUHJvcHMpe3JldHVybiBwcm90b1Byb3BzJiZkZWZpbmVQcm9wZXJ0aWVzKENvbnN0cnVjdG9yLnByb3RvdHlwZSxwcm90b1Byb3BzKSxzdGF0aWNQcm9wcyYmZGVmaW5lUHJvcGVydGllcyhDb25zdHJ1Y3RvcixzdGF0aWNQcm9wcyksQ29uc3RydWN0b3J9fSgpO2Z1bmN0aW9uIF9jbGFzc0NhbGxDaGVjayhpbnN0YW5jZSxDb25zdHJ1Y3Rvcil7aWYoIShpbnN0YW5jZSBpbnN0YW5jZW9mIENvbnN0cnVjdG9yKSl0aHJvdyBuZXcgVHlwZUVycm9yKCJDYW5ub3QgY2FsbCBhIGNsYXNzIGFzIGEgZnVuY3Rpb24iKX12YXIgUm9ja2V0QnJvd3NlckNvbXBhdGliaWxpdHlDaGVja2VyPWZ1bmN0aW9uKCl7ZnVuY3Rpb24gUm9ja2V0QnJvd3NlckNvbXBhdGliaWxpdHlDaGVja2VyKG9wdGlvbnMpe19jbGFzc0NhbGxDaGVjayh0aGlzLFJvY2tldEJyb3dzZXJDb21wYXRpYmlsaXR5Q2hlY2tlciksdGhpcy5wYXNzaXZlU3VwcG9ydGVkPSExLHRoaXMuX2NoZWNrUGFzc2l2ZU9wdGlvbih0aGlzKSx0aGlzLm9wdGlvbnM9ISF0aGlzLnBhc3NpdmVTdXBwb3J0ZWQmJm9wdGlvbnN9cmV0dXJuIF9jcmVhdGVDbGFzcyhSb2NrZXRCcm93c2VyQ29tcGF0aWJpbGl0eUNoZWNrZXIsW3trZXk6Il9jaGVja1Bhc3NpdmVPcHRpb24iLHZhbHVlOmZ1bmN0aW9uKHNlbGYpe3RyeXt2YXIgb3B0aW9ucz17Z2V0IHBhc3NpdmUoKXtyZXR1cm4hKHNlbGYucGFzc2l2ZVN1cHBvcnRlZD0hMCl9fTt3aW5kb3cuYWRkRXZlbnRMaXN0ZW5lcigidGVzdCIsbnVsbCxvcHRpb25zKSx3aW5kb3cucmVtb3ZlRXZlbnRMaXN0ZW5lcigidGVzdCIsbnVsbCxvcHRpb25zKX1jYXRjaChlcnIpe3NlbGYucGFzc2l2ZVN1cHBvcnRlZD0hMX19fSx7a2V5OiJpbml0UmVxdWVzdElkbGVDYWxsYmFjayIsdmFsdWU6ZnVuY3Rpb24oKXshMSBpbiB3aW5kb3cmJih3aW5kb3cucmVxdWVzdElkbGVDYWxsYmFjaz1mdW5jdGlvbihjYil7dmFyIHN0YXJ0PURhdGUubm93KCk7cmV0dXJuIHNldFRpbWVvdXQoZnVuY3Rpb24oKXtjYih7ZGlkVGltZW91dDohMSx0aW1lUmVtYWluaW5nOmZ1bmN0aW9uKCl7cmV0dXJuIE1hdGgubWF4KDAsNTAtKERhdGUubm93KCktc3RhcnQpKX19KX0sMSl9KSwhMSBpbiB3aW5kb3cmJih3aW5kb3cuY2FuY2VsSWRsZUNhbGxiYWNrPWZ1bmN0aW9uKGlkKXtyZXR1cm4gY2xlYXJUaW1lb3V0KGlkKX0pfX0se2tleToiaXNEYXRhU2F2ZXJNb2RlT24iLHZhbHVlOmZ1bmN0aW9uKCl7cmV0dXJuImNvbm5lY3Rpb24iaW4gbmF2aWdhdG9yJiYhMD09PW5hdmlnYXRvci5jb25uZWN0aW9uLnNhdmVEYXRhfX0se2tleToic3VwcG9ydHNMaW5rUHJlZmV0Y2giLHZhbHVlOmZ1bmN0aW9uKCl7dmFyIGVsZW09ZG9jdW1lbnQuY3JlYXRlRWxlbWVudCgibGluayIpO3JldHVybiBlbGVtLnJlbExpc3QmJmVsZW0ucmVsTGlzdC5zdXBwb3J0cyYmZWxlbS5yZWxMaXN0LnN1cHBvcnRzKCJwcmVmZXRjaCIpJiZ3aW5kb3cuSW50ZXJzZWN0aW9uT2JzZXJ2ZXImJiJpc0ludGVyc2VjdGluZyJpbiBJbnRlcnNlY3Rpb25PYnNlcnZlckVudHJ5LnByb3RvdHlwZX19LHtrZXk6ImlzU2xvd0Nvbm5lY3Rpb24iLHZhbHVlOmZ1bmN0aW9uKCl7cmV0dXJuImNvbm5lY3Rpb24iaW4gbmF2aWdhdG9yJiYiZWZmZWN0aXZlVHlwZSJpbiBuYXZpZ2F0b3IuY29ubmVjdGlvbiYmKCIyZyI9PT1uYXZpZ2F0b3IuY29ubmVjdGlvbi5lZmZlY3RpdmVUeXBlfHwic2xvdy0yZyI9PT1uYXZpZ2F0b3IuY29ubmVjdGlvbi5lZmZlY3RpdmVUeXBlKX19XSksUm9ja2V0QnJvd3NlckNvbXBhdGliaWxpdHlDaGVja2VyfSgpOwovKiBdXT4gKi8K"
		data-rocket-status="executed">
	/* <![CDATA[ */
	"use strict";
	var _createClass = function () {
		function defineProperties(target, props) {
			for (var i = 0; i < props.length; i++) {
				var descriptor = props[i];
				descriptor.enumerable = descriptor.enumerable || !1, descriptor.configurable = !0, "value" in descriptor && (descriptor.writable = !0), Object.defineProperty(target, descriptor.key, descriptor)
			}
		}

		return function (Constructor, protoProps, staticProps) {
			return protoProps && defineProperties(Constructor.prototype, protoProps), staticProps && defineProperties(Constructor, staticProps), Constructor
		}
	}();

	function _classCallCheck(instance, Constructor) {
		if (!(instance instanceof Constructor)) throw new TypeError("Cannot call a class as a function")
	}

	var RocketBrowserCompatibilityChecker = function () {
		function RocketBrowserCompatibilityChecker(options) {
			_classCallCheck(this, RocketBrowserCompatibilityChecker), this.passiveSupported = !1, this._checkPassiveOption(this), this.options = !!this.passiveSupported && options
		}

		return _createClass(RocketBrowserCompatibilityChecker, [{
			key: "_checkPassiveOption", value: function (self) {
				try {
					var options = {
						get passive() {
							return !(self.passiveSupported = !0)
						}
					};
					window.addEventListener("test", null, options), window.removeEventListener("test", null, options)
				} catch (err) {
					self.passiveSupported = !1
				}
			}
		}, {
			key: "initRequestIdleCallback", value: function () {
				!1 in window && (window.requestIdleCallback = function (cb) {
					var start = Date.now();
					return setTimeout(function () {
						cb({
							didTimeout: !1, timeRemaining: function () {
								return Math.max(0, 50 - (Date.now() - start))
							}
						})
					}, 1)
				}), !1 in window && (window.cancelIdleCallback = function (id) {
					return clearTimeout(id)
				})
			}
		}, {
			key: "isDataSaverModeOn", value: function () {
				return "connection" in navigator && !0 === navigator.connection.saveData
			}
		}, {
			key: "supportsLinkPrefetch", value: function () {
				var elem = document.createElement("link");
				return elem.relList && elem.relList.supports && elem.relList.supports("prefetch") && window.IntersectionObserver && "isIntersecting" in IntersectionObserverEntry.prototype
			}
		}, {
			key: "isSlowConnection", value: function () {
				return "connection" in navigator && "effectiveType" in navigator.connection && ("2g" === navigator.connection.effectiveType || "slow-2g" === navigator.connection.effectiveType)
			}
		}]), RocketBrowserCompatibilityChecker
	}();
	/* ]]> */
</script>
<script type="text/javascript" id="rocket-preload-links-js-extra">
	/* <![CDATA[ */
	var RocketPreloadLinksConfig = {
		"excludeUris": "\/(?:.+\/)?feed(?:\/(?:.+\/?)?)?$|\/(?:.+\/)?embed\/|\/san-francisco\/checkout\/??(.*)|\/san-francisco\/cart\/?|\/san-francisco\/my-account\/??(.*)|http:\/\/(\/%5B\/%5D+)?\/(index.php\/)?(.*)wp-json(\/.*|$)|\/refer\/|\/go\/|\/recommend\/|\/recommends\/",
		"usesTrailingSlash": "1",
		"imageExt": "jpg|jpeg|gif|png|tiff|bmp|webp|avif|pdf|doc|docx|xls|xlsx|php",
		"fileExt": "jpg|jpeg|gif|png|tiff|bmp|webp|avif|pdf|doc|docx|xls|xlsx|php|html|htm",
		"siteUrl": "https:\/\/demos.reytheme.com\/san-francisco",
		"onHoverDelay": "100",
		"rateThrottle": "3"
	};
	/* ]]> */
</script>
<script type="text/javascript" id="rocket-preload-links-js-after"
		src="data:text/javascript;base64,Ci8qIDwhW0NEQVRBWyAqLwooZnVuY3Rpb24oKSB7CiJ1c2Ugc3RyaWN0Ijt2YXIgcj0iZnVuY3Rpb24iPT10eXBlb2YgU3ltYm9sJiYic3ltYm9sIj09dHlwZW9mIFN5bWJvbC5pdGVyYXRvcj9mdW5jdGlvbihlKXtyZXR1cm4gdHlwZW9mIGV9OmZ1bmN0aW9uKGUpe3JldHVybiBlJiYiZnVuY3Rpb24iPT10eXBlb2YgU3ltYm9sJiZlLmNvbnN0cnVjdG9yPT09U3ltYm9sJiZlIT09U3ltYm9sLnByb3RvdHlwZT8ic3ltYm9sIjp0eXBlb2YgZX0sZT1mdW5jdGlvbigpe2Z1bmN0aW9uIGkoZSx0KXtmb3IodmFyIG49MDtuPHQubGVuZ3RoO24rKyl7dmFyIGk9dFtuXTtpLmVudW1lcmFibGU9aS5lbnVtZXJhYmxlfHwhMSxpLmNvbmZpZ3VyYWJsZT0hMCwidmFsdWUiaW4gaSYmKGkud3JpdGFibGU9ITApLE9iamVjdC5kZWZpbmVQcm9wZXJ0eShlLGkua2V5LGkpfX1yZXR1cm4gZnVuY3Rpb24oZSx0LG4pe3JldHVybiB0JiZpKGUucHJvdG90eXBlLHQpLG4mJmkoZSxuKSxlfX0oKTtmdW5jdGlvbiBpKGUsdCl7aWYoIShlIGluc3RhbmNlb2YgdCkpdGhyb3cgbmV3IFR5cGVFcnJvcigiQ2Fubm90IGNhbGwgYSBjbGFzcyBhcyBhIGZ1bmN0aW9uIil9dmFyIHQ9ZnVuY3Rpb24oKXtmdW5jdGlvbiBuKGUsdCl7aSh0aGlzLG4pLHRoaXMuYnJvd3Nlcj1lLHRoaXMuY29uZmlnPXQsdGhpcy5vcHRpb25zPXRoaXMuYnJvd3Nlci5vcHRpb25zLHRoaXMucHJlZmV0Y2hlZD1uZXcgU2V0LHRoaXMuZXZlbnRUaW1lPW51bGwsdGhpcy50aHJlc2hvbGQ9MTExMSx0aGlzLm51bU9uSG92ZXI9MH1yZXR1cm4gZShuLFt7a2V5OiJpbml0Iix2YWx1ZTpmdW5jdGlvbigpeyF0aGlzLmJyb3dzZXIuc3VwcG9ydHNMaW5rUHJlZmV0Y2goKXx8dGhpcy5icm93c2VyLmlzRGF0YVNhdmVyTW9kZU9uKCl8fHRoaXMuYnJvd3Nlci5pc1Nsb3dDb25uZWN0aW9uKCl8fCh0aGlzLnJlZ2V4PXtleGNsdWRlVXJpczpSZWdFeHAodGhpcy5jb25maWcuZXhjbHVkZVVyaXMsImkiKSxpbWFnZXM6UmVnRXhwKCIuKCIrdGhpcy5jb25maWcuaW1hZ2VFeHQrIikkIiwiaSIpLGZpbGVFeHQ6UmVnRXhwKCIuKCIrdGhpcy5jb25maWcuZmlsZUV4dCsiKSQiLCJpIil9LHRoaXMuX2luaXRMaXN0ZW5lcnModGhpcykpfX0se2tleToiX2luaXRMaXN0ZW5lcnMiLHZhbHVlOmZ1bmN0aW9uKGUpey0xPHRoaXMuY29uZmlnLm9uSG92ZXJEZWxheSYmZG9jdW1lbnQuYWRkRXZlbnRMaXN0ZW5lcigibW91c2VvdmVyIixlLmxpc3RlbmVyLmJpbmQoZSksZS5saXN0ZW5lck9wdGlvbnMpLGRvY3VtZW50LmFkZEV2ZW50TGlzdGVuZXIoIm1vdXNlZG93biIsZS5saXN0ZW5lci5iaW5kKGUpLGUubGlzdGVuZXJPcHRpb25zKSxkb2N1bWVudC5hZGRFdmVudExpc3RlbmVyKCJ0b3VjaHN0YXJ0IixlLmxpc3RlbmVyLmJpbmQoZSksZS5saXN0ZW5lck9wdGlvbnMpfX0se2tleToibGlzdGVuZXIiLHZhbHVlOmZ1bmN0aW9uKGUpe3ZhciB0PWUudGFyZ2V0LmNsb3Nlc3QoImEiKSxuPXRoaXMuX3ByZXBhcmVVcmwodCk7aWYobnVsbCE9PW4pc3dpdGNoKGUudHlwZSl7Y2FzZSJtb3VzZWRvd24iOmNhc2UidG91Y2hzdGFydCI6dGhpcy5fYWRkUHJlZmV0Y2hMaW5rKG4pO2JyZWFrO2Nhc2UibW91c2VvdmVyIjp0aGlzLl9lYXJseVByZWZldGNoKHQsbiwibW91c2VvdXQiKX19fSx7a2V5OiJfZWFybHlQcmVmZXRjaCIsdmFsdWU6ZnVuY3Rpb24odCxlLG4pe3ZhciBpPXRoaXMscj1zZXRUaW1lb3V0KGZ1bmN0aW9uKCl7aWYocj1udWxsLDA9PT1pLm51bU9uSG92ZXIpc2V0VGltZW91dChmdW5jdGlvbigpe3JldHVybiBpLm51bU9uSG92ZXI9MH0sMWUzKTtlbHNlIGlmKGkubnVtT25Ib3Zlcj5pLmNvbmZpZy5yYXRlVGhyb3R0bGUpcmV0dXJuO2kubnVtT25Ib3ZlcisrLGkuX2FkZFByZWZldGNoTGluayhlKX0sdGhpcy5jb25maWcub25Ib3ZlckRlbGF5KTt0LmFkZEV2ZW50TGlzdGVuZXIobixmdW5jdGlvbiBlKCl7dC5yZW1vdmVFdmVudExpc3RlbmVyKG4sZSx7cGFzc2l2ZTohMH0pLG51bGwhPT1yJiYoY2xlYXJUaW1lb3V0KHIpLHI9bnVsbCl9LHtwYXNzaXZlOiEwfSl9fSx7a2V5OiJfYWRkUHJlZmV0Y2hMaW5rIix2YWx1ZTpmdW5jdGlvbihpKXtyZXR1cm4gdGhpcy5wcmVmZXRjaGVkLmFkZChpLmhyZWYpLG5ldyBQcm9taXNlKGZ1bmN0aW9uKGUsdCl7dmFyIG49ZG9jdW1lbnQuY3JlYXRlRWxlbWVudCgibGluayIpO24ucmVsPSJwcmVmZXRjaCIsbi5ocmVmPWkuaHJlZixuLm9ubG9hZD1lLG4ub25lcnJvcj10LGRvY3VtZW50LmhlYWQuYXBwZW5kQ2hpbGQobil9KS5jYXRjaChmdW5jdGlvbigpe30pfX0se2tleToiX3ByZXBhcmVVcmwiLHZhbHVlOmZ1bmN0aW9uKGUpe2lmKG51bGw9PT1lfHwib2JqZWN0IiE9PSh2b2lkIDA9PT1lPyJ1bmRlZmluZWQiOnIoZSkpfHwhMSBpbiBlfHwtMT09PVsiaHR0cDoiLCJodHRwczoiXS5pbmRleE9mKGUucHJvdG9jb2wpKXJldHVybiBudWxsO3ZhciB0PWUuaHJlZi5zdWJzdHJpbmcoMCx0aGlzLmNvbmZpZy5zaXRlVXJsLmxlbmd0aCksbj10aGlzLl9nZXRQYXRobmFtZShlLmhyZWYsdCksaT17b3JpZ2luYWw6ZS5ocmVmLHByb3RvY29sOmUucHJvdG9jb2wsb3JpZ2luOnQscGF0aG5hbWU6bixocmVmOnQrbn07cmV0dXJuIHRoaXMuX2lzTGlua09rKGkpP2k6bnVsbH19LHtrZXk6Il9nZXRQYXRobmFtZSIsdmFsdWU6ZnVuY3Rpb24oZSx0KXt2YXIgbj10P2Uuc3Vic3RyaW5nKHRoaXMuY29uZmlnLnNpdGVVcmwubGVuZ3RoKTplO3JldHVybiBuLnN0YXJ0c1dpdGgoIi8iKXx8KG49Ii8iK24pLHRoaXMuX3Nob3VsZEFkZFRyYWlsaW5nU2xhc2gobik/bisiLyI6bn19LHtrZXk6Il9zaG91bGRBZGRUcmFpbGluZ1NsYXNoIix2YWx1ZTpmdW5jdGlvbihlKXtyZXR1cm4gdGhpcy5jb25maWcudXNlc1RyYWlsaW5nU2xhc2gmJiFlLmVuZHNXaXRoKCIvIikmJiF0aGlzLnJlZ2V4LmZpbGVFeHQudGVzdChlKX19LHtrZXk6Il9pc0xpbmtPayIsdmFsdWU6ZnVuY3Rpb24oZSl7cmV0dXJuIG51bGwhPT1lJiYib2JqZWN0Ij09PSh2b2lkIDA9PT1lPyJ1bmRlZmluZWQiOnIoZSkpJiYoIXRoaXMucHJlZmV0Y2hlZC5oYXMoZS5ocmVmKSYmZS5vcmlnaW49PT10aGlzLmNvbmZpZy5zaXRlVXJsJiYtMT09PWUuaHJlZi5pbmRleE9mKCI/IikmJi0xPT09ZS5ocmVmLmluZGV4T2YoIiMiKSYmIXRoaXMucmVnZXguZXhjbHVkZVVyaXMudGVzdChlLmhyZWYpJiYhdGhpcy5yZWdleC5pbWFnZXMudGVzdChlLmhyZWYpKX19XSxbe2tleToicnVuIix2YWx1ZTpmdW5jdGlvbigpeyJ1bmRlZmluZWQiIT10eXBlb2YgUm9ja2V0UHJlbG9hZExpbmtzQ29uZmlnJiZuZXcgbihuZXcgUm9ja2V0QnJvd3NlckNvbXBhdGliaWxpdHlDaGVja2VyKHtjYXB0dXJlOiEwLHBhc3NpdmU6ITB9KSxSb2NrZXRQcmVsb2FkTGlua3NDb25maWcpLmluaXQoKX19XSksbn0oKTt0LnJ1bigpOwp9KCkpOwovKiBdXT4gKi8K"
		data-rocket-status="executed">
	/* <![CDATA[ */
	(function () {
		"use strict";
		var r = "function" == typeof Symbol && "symbol" == typeof Symbol.iterator ? function (e) {
			return typeof e
		} : function (e) {
			return e && "function" == typeof Symbol && e.constructor === Symbol && e !== Symbol.prototype ? "symbol" : typeof e
		}, e = function () {
			function i(e, t) {
				for (var n = 0; n < t.length; n++) {
					var i = t[n];
					i.enumerable = i.enumerable || !1, i.configurable = !0, "value" in i && (i.writable = !0), Object.defineProperty(e, i.key, i)
				}
			}

			return function (e, t, n) {
				return t && i(e.prototype, t), n && i(e, n), e
			}
		}();

		function i(e, t) {
			if (!(e instanceof t)) throw new TypeError("Cannot call a class as a function")
		}

		var t = function () {
			function n(e, t) {
				i(this, n), this.browser = e, this.config = t, this.options = this.browser.options, this.prefetched = new Set, this.eventTime = null, this.threshold = 1111, this.numOnHover = 0
			}

			return e(n, [{
				key: "init", value: function () {
					!this.browser.supportsLinkPrefetch() || this.browser.isDataSaverModeOn() || this.browser.isSlowConnection() || (this.regex = {
						excludeUris: RegExp(this.config.excludeUris, "i"),
						images: RegExp(".(" + this.config.imageExt + ")$", "i"),
						fileExt: RegExp(".(" + this.config.fileExt + ")$", "i")
					}, this._initListeners(this))
				}
			}, {
				key: "_initListeners", value: function (e) {
					-1 < this.config.onHoverDelay && document.addEventListener("mouseover", e.listener.bind(e), e.listenerOptions), document.addEventListener("mousedown", e.listener.bind(e), e.listenerOptions), document.addEventListener("touchstart", e.listener.bind(e), e.listenerOptions)
				}
			}, {
				key: "listener", value: function (e) {
					var t = e.target.closest("a"), n = this._prepareUrl(t);
					if (null !== n) switch (e.type) {
						case"mousedown":
						case"touchstart":
							this._addPrefetchLink(n);
							break;
						case"mouseover":
							this._earlyPrefetch(t, n, "mouseout")
					}
				}
			}, {
				key: "_earlyPrefetch", value: function (t, e, n) {
					var i = this, r = setTimeout(function () {
						if (r = null, 0 === i.numOnHover) setTimeout(function () {
							return i.numOnHover = 0
						}, 1e3); else if (i.numOnHover > i.config.rateThrottle) return;
						i.numOnHover++, i._addPrefetchLink(e)
					}, this.config.onHoverDelay);
					t.addEventListener(n, function e() {
						t.removeEventListener(n, e, {passive: !0}), null !== r && (clearTimeout(r), r = null)
					}, {passive: !0})
				}
			}, {
				key: "_addPrefetchLink", value: function (i) {
					return this.prefetched.add(i.href), new Promise(function (e, t) {
						var n = document.createElement("link");
						n.rel = "prefetch", n.href = i.href, n.onload = e, n.onerror = t, document.head.appendChild(n)
					}).catch(function () {
					})
				}
			}, {
				key: "_prepareUrl", value: function (e) {
					if (null === e || "object" !== (void 0 === e ? "undefined" : r(e)) || !1 in e || -1 === ["http:", "https:"].indexOf(e.protocol)) return null;
					var t = e.href.substring(0, this.config.siteUrl.length), n = this._getPathname(e.href, t),
						i = {original: e.href, protocol: e.protocol, origin: t, pathname: n, href: t + n};
					return this._isLinkOk(i) ? i : null
				}
			}, {
				key: "_getPathname", value: function (e, t) {
					var n = t ? e.substring(this.config.siteUrl.length) : e;
					return n.startsWith("/") || (n = "/" + n), this._shouldAddTrailingSlash(n) ? n + "/" : n
				}
			}, {
				key: "_shouldAddTrailingSlash", value: function (e) {
					return this.config.usesTrailingSlash && !e.endsWith("/") && !this.regex.fileExt.test(e)
				}
			}, {
				key: "_isLinkOk", value: function (e) {
					return null !== e && "object" === (void 0 === e ? "undefined" : r(e)) && (!this.prefetched.has(e.href) && e.origin === this.config.siteUrl && -1 === e.href.indexOf("?") && -1 === e.href.indexOf("#") && !this.regex.excludeUris.test(e.href) && !this.regex.images.test(e.href))
				}
			}], [{
				key: "run", value: function () {
					"undefined" != typeof RocketPreloadLinksConfig && new n(new RocketBrowserCompatibilityChecker({
						capture: !0,
						passive: !0
					}), RocketPreloadLinksConfig).init()
				}
			}]), n
		}();
		t.run();
	}());
	/* ]]> */
</script>
<script type="text/javascript" id="sourcebuster-js-js" data-rocket-defer="" defer=""
		src="/babui/assets/client-view/js/sourcebuster.min.js" data-rocket-status="executed"></script>

<script type="text/javascript" id="wc-order-attribution-js" data-rocket-defer="" defer=""
		src="/babui/assets/client-view/js/order-attribution.min.js" data-rocket-status="executed"></script>
<script type="text/javascript" id="elementor-webpack-runtime-js" data-rocket-defer="" defer=""
		src="/babui/assets/client-view/js/webpack.runtime.min.js" data-rocket-status="executed"></script>
<script type="text/javascript" id="elementor-frontend-modules-js" data-rocket-defer="" defer=""
		src="/babui/assets/client-view/js/frontend-modules.min.js" data-rocket-status="executed"></script>
<script type="text/javascript" id="elementor-frontend-js-before"
		src="data:text/javascript;base64,Ci8qIDwhW0NEQVRBWyAqLwp2YXIgZWxlbWVudG9yRnJvbnRlbmRDb25maWcgPSB7ImVudmlyb25tZW50TW9kZSI6eyJlZGl0IjpmYWxzZSwid3BQcmV2aWV3IjpmYWxzZSwiaXNTY3JpcHREZWJ1ZyI6ZmFsc2V9LCJpMThuIjp7InNoYXJlT25GYWNlYm9vayI6IlNoYXJlIG9uIEZhY2Vib29rIiwic2hhcmVPblR3aXR0ZXIiOiJTaGFyZSBvbiBUd2l0dGVyIiwicGluSXQiOiJQaW4gaXQiLCJkb3dubG9hZCI6IkRvd25sb2FkIiwiZG93bmxvYWRJbWFnZSI6IkRvd25sb2FkIGltYWdlIiwiZnVsbHNjcmVlbiI6IkZ1bGxzY3JlZW4iLCJ6b29tIjoiWm9vbSIsInNoYXJlIjoiU2hhcmUiLCJwbGF5VmlkZW8iOiJQbGF5IFZpZGVvIiwicHJldmlvdXMiOiJQcmV2aW91cyIsIm5leHQiOiJOZXh0IiwiY2xvc2UiOiJDbG9zZSIsImExMXlDYXJvdXNlbFdyYXBwZXJBcmlhTGFiZWwiOiJDYXJvdXNlbCB8IEhvcml6b250YWwgc2Nyb2xsaW5nOiBBcnJvdyBMZWZ0ICYgUmlnaHQiLCJhMTF5Q2Fyb3VzZWxQcmV2U2xpZGVNZXNzYWdlIjoiUHJldmlvdXMgc2xpZGUiLCJhMTF5Q2Fyb3VzZWxOZXh0U2xpZGVNZXNzYWdlIjoiTmV4dCBzbGlkZSIsImExMXlDYXJvdXNlbEZpcnN0U2xpZGVNZXNzYWdlIjoiVGhpcyBpcyB0aGUgZmlyc3Qgc2xpZGUiLCJhMTF5Q2Fyb3VzZWxMYXN0U2xpZGVNZXNzYWdlIjoiVGhpcyBpcyB0aGUgbGFzdCBzbGlkZSIsImExMXlDYXJvdXNlbFBhZ2luYXRpb25CdWxsZXRNZXNzYWdlIjoiR28gdG8gc2xpZGUifSwiaXNfcnRsIjpmYWxzZSwiYnJlYWtwb2ludHMiOnsieHMiOjAsInNtIjo0ODAsIm1kIjo3NjgsImxnIjoxMDI1LCJ4bCI6MTQ0MCwieHhsIjoxNjAwfSwicmVzcG9uc2l2ZSI6eyJicmVha3BvaW50cyI6eyJtb2JpbGUiOnsibGFiZWwiOiJNb2JpbGUgUG9ydHJhaXQiLCJ2YWx1ZSI6NzY3LCJkZWZhdWx0X3ZhbHVlIjo3NjcsImRpcmVjdGlvbiI6Im1heCIsImlzX2VuYWJsZWQiOnRydWV9LCJtb2JpbGVfZXh0cmEiOnsibGFiZWwiOiJNb2JpbGUgTGFuZHNjYXBlIiwidmFsdWUiOjg4MCwiZGVmYXVsdF92YWx1ZSI6ODgwLCJkaXJlY3Rpb24iOiJtYXgiLCJpc19lbmFibGVkIjpmYWxzZX0sInRhYmxldCI6eyJsYWJlbCI6IlRhYmxldCBQb3J0cmFpdCIsInZhbHVlIjoxMDI0LCJkZWZhdWx0X3ZhbHVlIjoxMDI0LCJkaXJlY3Rpb24iOiJtYXgiLCJpc19lbmFibGVkIjp0cnVlfSwidGFibGV0X2V4dHJhIjp7ImxhYmVsIjoiVGFibGV0IExhbmRzY2FwZSIsInZhbHVlIjoxMjAwLCJkZWZhdWx0X3ZhbHVlIjoxMjAwLCJkaXJlY3Rpb24iOiJtYXgiLCJpc19lbmFibGVkIjpmYWxzZX0sImxhcHRvcCI6eyJsYWJlbCI6IkxhcHRvcCIsInZhbHVlIjoxMzY2LCJkZWZhdWx0X3ZhbHVlIjoxMzY2LCJkaXJlY3Rpb24iOiJtYXgiLCJpc19lbmFibGVkIjpmYWxzZX0sIndpZGVzY3JlZW4iOnsibGFiZWwiOiJXaWRlc2NyZWVuIiwidmFsdWUiOjI0MDAsImRlZmF1bHRfdmFsdWUiOjI0MDAsImRpcmVjdGlvbiI6Im1pbiIsImlzX2VuYWJsZWQiOmZhbHNlfX0sImhhc0N1c3RvbUJyZWFrcG9pbnRzIjpmYWxzZX0sInZlcnNpb24iOiIzLjI1LjkiLCJpc19zdGF0aWMiOmZhbHNlLCJleHBlcmltZW50YWxGZWF0dXJlcyI6eyJlX2ZvbnRfaWNvbl9zdmciOnRydWUsImVfc3dpcGVyX2xhdGVzdCI6dHJ1ZSwiZV9uZXN0ZWRfYXRvbWljX3JlcGVhdGVycyI6dHJ1ZSwiZV9vcHRpbWl6ZWRfY29udHJvbF9sb2FkaW5nIjp0cnVlLCJlX29uYm9hcmRpbmciOnRydWUsImVfY3NzX3Ntb290aF9zY3JvbGwiOnRydWUsImhvbWVfc2NyZWVuIjp0cnVlLCJsYW5kaW5nLXBhZ2VzIjp0cnVlLCJuZXN0ZWQtZWxlbWVudHMiOnRydWUsImVkaXRvcl92MiI6dHJ1ZSwibGluay1pbi1iaW8iOnRydWUsImZsb2F0aW5nLWJ1dHRvbnMiOnRydWV9LCJ1cmxzIjp7ImFzc2V0cyI6Imh0dHBzOlwvXC9kZW1vcy5yZXl0aGVtZS5jb21cL3Nhbi1mcmFuY2lzY29cL3dwLWNvbnRlbnRcL3BsdWdpbnNcL2VsZW1lbnRvclwvYXNzZXRzXC8iLCJhamF4dXJsIjoiaHR0cHM6XC9cL2RlbW9zLnJleXRoZW1lLmNvbVwvc2FuLWZyYW5jaXNjb1wvd3AtYWRtaW5cL2FkbWluLWFqYXgucGhwIiwidXBsb2FkVXJsIjoiaHR0cHM6XC9cL2RlbW9zLnJleXRoZW1lLmNvbVwvc2FuLWZyYW5jaXNjb1wvd3AtY29udGVudFwvdXBsb2Fkc1wvc2l0ZXNcLzI0In0sIm5vbmNlcyI6eyJmbG9hdGluZ0J1dHRvbnNDbGlja1RyYWNraW5nIjoiMzg1OWE5MWMwOSJ9LCJzd2lwZXJDbGFzcyI6InN3aXBlciIsInNldHRpbmdzIjp7InBhZ2UiOltdLCJlZGl0b3JQcmVmZXJlbmNlcyI6W119LCJraXQiOnsiYWN0aXZlX2JyZWFrcG9pbnRzIjpbInZpZXdwb3J0X21vYmlsZSIsInZpZXdwb3J0X3RhYmxldCJdLCJnbG9iYWxfaW1hZ2VfbGlnaHRib3giOiJ5ZXMiLCJsaWdodGJveF9lbmFibGVfY291bnRlciI6InllcyIsImxpZ2h0Ym94X2VuYWJsZV9mdWxsc2NyZWVuIjoieWVzIiwibGlnaHRib3hfZW5hYmxlX3pvb20iOiJ5ZXMiLCJsaWdodGJveF9lbmFibGVfc2hhcmUiOiJ5ZXMiLCJsaWdodGJveF90aXRsZV9zcmMiOiJ0aXRsZSIsImxpZ2h0Ym94X2Rlc2NyaXB0aW9uX3NyYyI6ImRlc2NyaXB0aW9uIn0sInBvc3QiOnsiaWQiOjIwMDYsInRpdGxlIjoiU2FuJTIwRnJhbmNpc2NvJTIwJUUyJTgwJTkzJTIwUmV5JTIwVGhlbWUiLCJleGNlcnB0IjoiIiwiZmVhdHVyZWRJbWFnZSI6ZmFsc2V9fTsKLyogXV0+ICovCg=="
		data-rocket-status="executed">
	/* <![CDATA[ */
	var elementorFrontendConfig = {
		"environmentMode": {"edit": false, "wpPreview": false, "isScriptDebug": false},
		"i18n": {
			"shareOnFacebook": "Share on Facebook",
			"shareOnTwitter": "Share on Twitter",
			"pinIt": "Pin it",
			"download": "Download",
			"downloadImage": "Download image",
			"fullscreen": "Fullscreen",
			"zoom": "Zoom",
			"share": "Share",
			"playVideo": "Play Video",
			"previous": "Previous",
			"next": "Next",
			"close": "Close",
			"a11yCarouselWrapperAriaLabel": "Carousel | Horizontal scrolling: Arrow Left & Right",
			"a11yCarouselPrevSlideMessage": "Previous slide",
			"a11yCarouselNextSlideMessage": "Next slide",
			"a11yCarouselFirstSlideMessage": "This is the first slide",
			"a11yCarouselLastSlideMessage": "This is the last slide",
			"a11yCarouselPaginationBulletMessage": "Go to slide"
		},
		"is_rtl": false,
		"breakpoints": {"xs": 0, "sm": 480, "md": 768, "lg": 1025, "xl": 1440, "xxl": 1600},
		"responsive": {
			"breakpoints": {
				"mobile": {
					"label": "Mobile Portrait",
					"value": 767,
					"default_value": 767,
					"direction": "max",
					"is_enabled": true
				},
				"mobile_extra": {
					"label": "Mobile Landscape",
					"value": 880,
					"default_value": 880,
					"direction": "max",
					"is_enabled": false
				},
				"tablet": {
					"label": "Tablet Portrait",
					"value": 1024,
					"default_value": 1024,
					"direction": "max",
					"is_enabled": true
				},
				"tablet_extra": {
					"label": "Tablet Landscape",
					"value": 1200,
					"default_value": 1200,
					"direction": "max",
					"is_enabled": false
				},
				"laptop": {
					"label": "Laptop",
					"value": 1366,
					"default_value": 1366,
					"direction": "max",
					"is_enabled": false
				},
				"widescreen": {
					"label": "Widescreen",
					"value": 2400,
					"default_value": 2400,
					"direction": "min",
					"is_enabled": false
				}
			}, "hasCustomBreakpoints": false
		},
		"version": "3.25.9",
		"is_static": false,
		"experimentalFeatures": {
			"e_font_icon_svg": true,
			"e_swiper_latest": true,
			"e_nested_atomic_repeaters": true,
			"e_optimized_control_loading": true,
			"e_onboarding": true,
			"e_css_smooth_scroll": true,
			"home_screen": true,
			"landing-pages": true,
			"nested-elements": true,
			"editor_v2": true,
			"link-in-bio": true,
			"floating-buttons": true
		},
		"urls": {
			"assets": "https:\/\/demos.reytheme.com\/san-francisco\/wp-content\/plugins\/elementor\/assets\/",
			"ajaxurl": "https:\/\/demos.reytheme.com\/san-francisco\/wp-admin\/admin-ajax.php",
			"uploadUrl": "https:\/\/demos.reytheme.com\/san-francisco\/wp-content\/uploads\/sites\/24"
		},
		"nonces": {"floatingButtonsClickTracking": "3859a91c09"},
		"swiperClass": "swiper",
		"settings": {"page": [], "editorPreferences": []},
		"kit": {
			"active_breakpoints": ["viewport_mobile", "viewport_tablet"],
			"global_image_lightbox": "yes",
			"lightbox_enable_counter": "yes",
			"lightbox_enable_fullscreen": "yes",
			"lightbox_enable_zoom": "yes",
			"lightbox_enable_share": "yes",
			"lightbox_title_src": "title",
			"lightbox_description_src": "description"
		},
		"post": {
			"id": 2006,
			"title": "San%20Francisco%20%E2%80%93%20Rey%20Theme",
			"excerpt": "",
			"featuredImage": false
		}
	};
	/* ]]> */
</script>
<script type="text/javascript" defer="" id="elementor-frontend-js"
		src="/babui/assets/client-view/js/frontend.min.js" data-rocket-status="executed"></script>
<script type="text/javascript" id="wc-cart-fragments-js-extra">
	/* <![CDATA[ */
	var wc_cart_fragments_params = {
		"ajax_url": "\/san-francisco\/wp-admin\/admin-ajax.php",
		"wc_ajax_url": "https:\/\/demos.reytheme.com\/san-francisco\/?wc-ajax=%%endpoint%%",
		"cart_hash_key": "wc_cart_hash_d16790dd395a1b6d8d5f5708813f6026",
		"fragment_name": "wc_fragments_d16790dd395a1b6d8d5f5708813f6026",
		"request_timeout": "5000"
	};
	/* ]]> */
</script>
<script type="text/javascript" data-minify="1" id="wc-cart-fragments-js" defer="defer" data-wp-strategy="defer"
		src="/babui/assets/client-view/js/cart-fragments.js" data-rocket-status="executed"></script>
<script type="text/javascript" data-minify="1" defer="" id="mc4wp-forms-api-js"
		src="/babui/assets/client-view/js/forms.js" data-rocket-status="executed"></script>
<script type="text/javascript" id="rey-script-js-extra">
	/* <![CDATA[ */
	var reyParams = {
		"theme_js_params": {
			"menu_delays": true,
			"menu_hover_overlay": "show",
			"menu_mobile_overlay": "show",
			"menu_hover_timer": 500,
			"menu_items_hover_timer": 100,
			"menu_items_leave_timer": 200,
			"menu_items_open_event": "hover",
			"embed_responsive": {
				"src": "https:\/\/demos.reytheme.com\/san-francisco\/wp-content\/themes\/rey\/assets\/css\/components\/embed-responsive\/embed-responsive.css",
				"elements": [".rey-postContent p > iframe", ".rey-wcPanel iframe[src*=\"youtu\"]", ".woocommerce-Tabs-panel iframe[src*=\"youtu\"]", ".woocommerce-product-details__short-description iframe[src*=\"youtu\"]"]
			},
			"menu_badges_styles": "https:\/\/demos.reytheme.com\/san-francisco\/wp-content\/themes\/rey\/assets\/css\/components\/header-menu\/menu-badges.css"
		},
		"lazy_assets": {
			"a[href^='#offcanvas-']": {
				"styles": {
					"reycore-offcanvas-panels": "https:\/\/demos.reytheme.com\/san-francisco\/wp-content\/plugins\/rey-core\/inc\/modules\/offcanvas-panels\/style.css",
					"rey-simple-scrollbar": "https:\/\/demos.reytheme.com\/san-francisco\/wp-content\/plugins\/rey-core\/assets\/css\/lib\/simple-scrollbar.css"
				},
				"scripts": {
					"reycore-offcanvas-panels": "https:\/\/demos.reytheme.com\/san-francisco\/wp-content\/plugins\/rey-core\/inc\/modules\/offcanvas-panels\/script.js",
					"animejs": "https:\/\/demos.reytheme.com\/san-francisco\/wp-content\/plugins\/rey-core\/assets\/js\/lib\/anime.min.js",
					"rey-simple-scrollbar": "https:\/\/demos.reytheme.com\/san-francisco\/wp-content\/plugins\/rey-core\/assets\/js\/lib\/simple-scrollbar.js",
					"reycore-elementor-frontend": "https:\/\/demos.reytheme.com\/san-francisco\/wp-content\/plugins\/rey-core\/assets\/js\/elementor\/general.js"
				}
			},
			"[data-reymodal],[data-rey-inline-modal]": {
				"styles": {"reycore-modals": "https:\/\/demos.reytheme.com\/san-francisco\/wp-content\/plugins\/rey-core\/assets\/css\/general-components\/modals\/modals.css"},
				"scripts": {"reycore-modals": "https:\/\/demos.reytheme.com\/san-francisco\/wp-content\/plugins\/rey-core\/assets\/js\/general\/c-modal.js"}
			}
		},
		"log_events": "",
		"debug": "",
		"ajaxurl": "https:\/\/demos.reytheme.com\/san-francisco\/wp-admin\/admin-ajax.php",
		"ajax_nonce": "039bfda997",
		"preloader_timeout": "",
		"v": "d9e15b759911",
		"wpch": "1",
		"delay_forced_js_event": "",
		"delay_final_js_event": "rocket-allScriptsLoaded",
		"delay_js_dom_event": "rocket-DOMContentLoaded",
		"lazy_attribute": "data-lazy-stylesheet",
		"core": {
			"js_params": {
				"sticky_debounce": 200,
				"dir_aware": false,
				"panel_close_text": "Close Panel",
				"refresh_forms_nonces": false
			},
			"v": "1f4e00506ff9",
			"r_ajax_debug": false,
			"r_ajax_nonce": "30ce41828a",
			"r_ajax_url": "https:\/\/demos.reytheme.com\/san-francisco\/?reycore-ajax=%%endpoint%%",
			"ajax_queue": true
		},
		"check_for_empty": [".--check-empty", ".rey-mobileNav-footer", ".rey-postFooter"],
		"popv_selector": "0",
		"mobile_click_event": "click",
		"optimized_dom": "1",
		"el_pushback_fallback": "",
		"header_fix_elementor_zindex": "",
		"woocommerce": "1",
		"wc_ajax_url": "https:\/\/demos.reytheme.com\/san-francisco\/?wc-ajax=%%endpoint%%",
		"rest_url": "https:\/\/demos.reytheme.com\/san-francisco\/wp-json\/rey\/v1",
		"rest_nonce": "6160148508",
		"catalog_cols": "4",
		"catalog_mobile_cols": "2",
		"added_to_cart_text": "ADDED TO CART",
		"added_to_cart_text_timeout": "10000",
		"cannot_update_cart": "Couldn't update cart!",
		"site_id": "24",
		"after_add_to_cart": "cart",
		"ajax_add_review": "1",
		"ajax_add_review_reload_text": "Reloading page...",
		"ajax_add_review_await_approval_text": "Your review is awaiting approval",
		"js_params": {
			"select2_overrides": true,
			"scattered_grid_max_items": 7,
			"scattered_grid_custom_items": [],
			"product_item_slideshow_nav": "dots",
			"product_item_slideshow_disable_mobile": false,
			"product_item_slideshow_hover_delay": 250,
			"scroll_top_after_variation_change": false,
			"scroll_top_after_variation_change_desktop": false,
			"ajax_search_letter_count": 3,
			"ajax_search_allow_empty": false,
			"cart_update_threshold": 1000,
			"cart_update_by_qty": true,
			"photoswipe_light": true,
			"customize_pdp_atc_text": true,
			"infinite_cache": false,
			"acc_animation": 250,
			"acc_scroll_top": false,
			"acc_scroll_top_mobile_only": true
		},
		"currency_symbol": "$",
		"price_format": "${{price}}",
		"total_text": "Total:",
		"price_thousand_separator": ",",
		"price_decimal_separator": ".",
		"price_decimal_precision": "2",
		"header_cart_panel": {
			"apply_coupon_nonce": "ecb5bbd4ae",
			"remove_coupon_nonce": "3b58f2dca3",
			"cart_fragment_tweak": true
		},
		"quickview_only": "",
		"quickview_mobile": "",
		"updateCatalogPriceSingleAttribute": "",
		"wishlist_after_add": "notice",
		"wishlist_text_add": "Add to wishlist",
		"wishlist_text_rm": "Remove from wishlist",
		"wishlist_expire": "",
		"wishlist_get_results": "",
		"single_ajax_add_to_cart": "1",
		"tabs_mobile_closed": "",
		"qty_debounce": "50",
		"search_texts": {"NO_RESULTS": "Sorry, but nothing matched your search terms. Please try again with some different keywords."},
		"ajax_search_only_title": "",
		"ajax_search": "1",
		"wishlist_type": "native",
		"wishlist_empty_text": "Your Wishlist is currently empty.",
		"module_extra_variation_images": "",
		"svg_icons_path": "https:\/\/demos.reytheme.com\/san-francisco?get_svg_icon=%%icon%%",
		"svg_icons": {"close": "<svg role=\"img\" viewbox=\"0 0 110 110\" class=\"rey-icon rey-icon-close\"><g stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\" stroke-linecap=\"square\"><path d=\"M4.79541854,4.29541854 L104.945498,104.445498 L4.79541854,4.29541854 Z\" stroke=\"currentColor\" stroke-width=\"var(--stroke-width, 12px)\"><\/path><path d=\"M4.79541854,104.704581 L104.945498,4.55450209 L4.79541854,104.704581 Z\" stroke=\"currentColor\" stroke-width=\"var(--stroke-width, 12px)\"><\/path><\/g><\/svg>"},
		"checkout": {"error_text": "This information is required."}
	};
	/* ]]> */
</script>
<script type="text/javascript" data-minify="1" defer="" id="rey-script-js"
		src="/babui/assets/client-view/js/c-helpers.js" data-rocket-status="executed"></script>
<script type="text/javascript" data-minify="1" defer="" id="reycore-script-js"
		src="/babui/assets/client-view/js/c-general.js" data-rocket-status="executed"></script>
<script type="text/javascript" id="reycore-elementor-frontend-js-extra">
	/* <![CDATA[ */
	var reyElementorFrontendParams = {
		"compatibilities": {"column_video": true, "video_bg_play_on_mobile": true},
		"ajax_url": "https:\/\/demos.reytheme.com\/san-francisco\/wp-admin\/admin-ajax.php",
		"ajax_nonce": "f3a2d9ba96"
	};
	/* ]]> */
</script>
<script type="text/javascript" data-minify="1" defer="" id="reycore-elementor-frontend-js"
		src="/babui/assets/client-view/js/general.js" data-rocket-status="executed"></script>
<script type="text/javascript" data-minify="1" defer="" id="reycore-widget-text-scroller-scripts-js"
		src="/babui/assets/client-view/js/script.js" data-rocket-status="executed"></script>
<script type="text/javascript" data-minify="1" defer="" id="splidejs-js"
		src="/babui/assets/client-view/js/splide.js" data-rocket-status="executed"></script>
<script type="text/javascript" data-minify="1" defer="" id="rey-splide-js"
		src="/babui/assets/client-view/js/c-slider.js" data-rocket-status="executed"></script>
<script type="text/javascript" data-minify="1" defer="" id="reycore-module-mega-menu-js"
		src="/babui/assets/client-view/js/script(1).js" data-rocket-status="executed"></script>
<script type="text/javascript" data-minify="1" defer="" id="reycore-woocommerce-js"
		src="/babui/assets/client-view/js/general(1).js" data-rocket-status="executed"></script>
<script type="text/javascript" data-minify="1" defer="" id="rey-mobile-menu-trigger-js"
		src="/babui/assets/client-view/js/c-mobile-menu-trigger.js" data-rocket-status="executed"></script>
<script type="text/javascript" data-minify="1" defer="" id="rey-main-menu-js"
		src="/babui/assets/client-view/js/c-main-menu.js" data-rocket-status="executed"></script>
<script type="text/javascript" data-minify="1" defer="" id="reycore-elementor-elem-header-navigation-js"
		src="/babui/assets/client-view/js/elem-header-navigation.js" data-rocket-status="executed"></script>
<script type="text/javascript" data-minify="1" defer="" id="reycore-sidepanel-js"
		src="/babui/assets/client-view/js/c-sidepanel.js" data-rocket-status="executed"></script>
<script type="text/javascript" data-minify="1" defer="" id="reycore-header-search-js"
		src="/babui/assets/client-view/js/c-header-search.js" data-rocket-status="executed"></script>
<script type="text/javascript" data-minify="1" defer="" id="rey-drop-panel-js"
		src="/babui/assets/client-view/js/c-drop-panel.js" data-rocket-status="executed"></script>
<script type="text/javascript" data-minify="1" defer="" id="reycore-wc-header-account-panel-js"
		src="/babui/assets/client-view/js/header-account-panel.js" data-rocket-status="executed"></script>
<script type="text/javascript" data-minify="1" defer="" id="rey-tmpl-js"
		src="/babui/assets/client-view/js/c-rey-template.js" data-rocket-status="executed"></script>
<script type="text/javascript" data-minify="1" defer="" id="reycore-wc-header-wishlist-js"
		src="/babui/assets/client-view/js/header-wishlist.js" data-rocket-status="executed"></script>
<script type="text/javascript" data-minify="1" defer="" id="reycore-tooltips-js"
		src="/babui/assets/client-view/js/c-tooltips.js" data-rocket-status="executed"></script>
<script type="text/javascript" data-minify="1" defer="" id="reycore-wishlist-js"
		src="/babui/assets/client-view/js/script(2).js" data-rocket-status="executed"></script>
<script type="text/javascript" data-minify="1" defer="" id="reycore-wc-header-minicart-js"
		src="/babui/assets/client-view/js/header-minicart.js" data-rocket-status="executed"></script>
<script type="text/javascript" defer="" id="animejs-js" src="/babui/assets/client-view/js/anime.min.js"
		data-rocket-status="executed"></script>
<script type="text/javascript" data-minify="1" defer="" id="rey-simple-scrollbar-js"
		src="/babui/assets/client-view/js/simple-scrollbar.js" data-rocket-status="executed"></script>
<script type="text/javascript" data-minify="1" defer="" id="reycore-offcanvas-panels-js"
		src="/babui/assets/client-view/js/script(3).js" data-rocket-status="executed"></script>
<script type="text/javascript" data-minify="1" defer="" id="reycore-widget-basic-slider-scripts-js"
		src="/babui/assets/client-view/js/script(4).js" data-rocket-status="executed"></script>
<script data-minify="1" type="text/javascript" defer="" src="/babui/assets/client-view/js/script(5).js"
		id="reycore-module-elementor-lazy-bg-js"></script>
<script type="text/javascript" data-minify="1" defer="" id="reycore-mc4wp-js"
		src="/babui/assets/client-view/js/script(6).js" data-rocket-status="executed"></script>
<script type="text/javascript" data-minify="1" defer="" id="reycore-widget-product-grid-scripts-js"
		src="/babui/assets/client-view/js/script(7).js" data-rocket-status="executed"></script>
<script type="text/javascript" data-minify="1" defer="" id="reycore-wc-loop-grids-js"
		src="/babui/assets/client-view/js/loop-grids.js" data-rocket-status="executed"></script>
<script type="text/javascript" data-minify="1" defer="" id="reycore-variation-swatches-js"
		src="/babui/assets/client-view/js/frontend-script.js" data-rocket-status="executed"></script>
<script type="text/javascript" id="wc-add-to-cart-variation-js-extra">
	/* <![CDATA[ */
	var wc_add_to_cart_variation_params = {
		"wc_ajax_url": "https:\/\/demos.reytheme.com\/san-francisco\/?wc-ajax=%%endpoint%%",
		"i18n_no_matching_variations_text": "Sorry, no products matched your selection. Please choose a different combination.",
		"i18n_make_a_selection_text": "Please select some product options before adding this product to your cart.",
		"i18n_unavailable_text": "Sorry, this product is unavailable. Please choose a different combination."
	};
	/* ]]> */
</script>
<script type="text/javascript" data-minify="1" id="wc-add-to-cart-variation-js" defer="defer" data-wp-strategy="defer"
		src="/babui/assets/client-view/js/add-to-cart-variation.js" data-rocket-status="executed"></script>
<script type="text/javascript" data-minify="1" defer="" id="reycore-quickview-js"
		src="/babui/assets/client-view/js/script(8).js" data-rocket-status="executed"></script>
<script type="text/javascript" data-minify="1" defer="" id="reycore-widget-carousel-scripts-js"
		src="/babui/assets/client-view/js/script(9).js" data-rocket-status="executed"></script>
<script type="text/javascript" data-minify="1" defer="" id="reycore-widget-slider-nav-scripts-js"
		src="/babui/assets/client-view/js/script(10).js" data-rocket-status="executed"></script>
<script type="text/javascript" data-minify="1" defer=""
		id="reycore-module-elementor-section-elementor-section-scroll-effects-colorize-js"
		src="/babui/assets/client-view/js/colorize.js" data-rocket-status="executed"></script>
<script type="text/javascript" data-minify="1" defer="" id="reycore-wc-header-account-forms-js"
		src="/babui/assets/client-view/js/header-account-forms.js" data-rocket-status="executed"></script>
<script type="text/javascript" data-minify="1" defer="" id="reycore-module-minicart-extra-products-js"
		src="/babui/assets/client-view/js/script(11).js" data-rocket-status="executed"></script>
<script type="text/javascript" data-minify="1" defer="" id="reydemos-js"
		src="/babui/assets/client-view/js/script(12).js" data-rocket-status="executed"></script>
<script type="text/javascript" data-minify="1" defer="" id="reycore-wc-header-ajax-search-js"
		src="/babui/assets/client-view/js/header-ajax-search.js" data-rocket-status="executed"></script>
<div style="display:none !important" id="rey-svg-holder">
	<svg data-icon-id="arrow-long" aria-hidden="true" role="img" id="rey-icon-arrow-long-676113ed3bcc5"
		 class="rey-icon rey-icon-arrow-long  --default" viewBox="0 0 50 8">
		<path
			d="M0.928904706,3.0387609 L44.0113745,3.0387609 L44.0113745,4.97541883 L0.928904706,4.97541883 C0.415884803,4.97541883 2.13162821e-14,4.54188318 2.13162821e-14,4.00708986 C2.13162821e-14,3.47229655 0.415884803,3.0387609 0.928904706,3.0387609 Z"
			class="rey-arrowSvg-dash"
			style="transform:var(--i-dsh-tr,initial);transition:var(--i-trs,initial);transform-origin:100% 50%;"></path>
		<path
			d="M49.6399545,3.16320794 L45.1502484,0.129110528 C45.0056033,0.0532149593 44.8474869,0.0092610397 44.685796,3.99680289e-14 C44.5479741,0.0112891909 44.4144881,0.0554642381 44.2956561,0.129110528 C44.0242223,0.2506013 43.8503957,0.531340097 43.8559745,0.839218433 L43.8559745,6.90741326 C43.8503957,7.21529159 44.0242223,7.49603039 44.2956561,7.61752116 C44.5594727,7.77895738 44.8864318,7.77895738 45.1502484,7.61752116 L49.6399545,4.58342375 C49.8682741,4.42554586 50.0055358,4.15892769 50.0055358,3.87331584 C50.0055358,3.587704 49.8682741,3.32108583 49.6399545,3.16320794 Z"></path>
	</svg>
	<svg data-icon-id="close" aria-hidden="true" role="img" id="rey-icon-close-676113ed3bcd6"
		 class="rey-icon rey-icon-close " viewBox="0 0 110 110">
		<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" stroke-linecap="square">
			<path d="M4.79541854,4.29541854 L104.945498,104.445498 L4.79541854,4.29541854 Z" stroke="currentColor"
				  stroke-width="var(--stroke-width, 12px)"></path>
			<path d="M4.79541854,104.704581 L104.945498,4.55450209 L4.79541854,104.704581 Z" stroke="currentColor"
				  stroke-width="var(--stroke-width, 12px)"></path>
		</g>
	</svg>
	<svg data-icon-id="arrow-classic" aria-hidden="true" role="img" id="rey-icon-arrow-classic-676113ed3bce0"
		 class="rey-icon rey-icon-arrow-classic " viewBox="0 0 16 16">
		<polygon fill="var(--icon-fill, currentColor)"
				 points="8 0 6.6 1.4 12.2 7 0 7 0 9 12.2 9 6.6 14.6 8 16 16 8"></polygon>
	</svg>
</div>
<script type="text/html" id="tmpl-reySearchPanel">
	<div class="rey-searchItems">
		<# var items = data.items; #>
		<# for (var i = 0; i < items.length; i++) { #>
		<div class="rey-searchItem {{( items[i].default ? '--last' : '' )}}" style="transition-delay: {{i * 0.024}}s "
			 data-id="{{items[i].id}}">
			<a href="{{items[i].permalink}}" class="{{( items[i].default ? 'btn btn-line-active' : '' )}}">
				<# if( items[i].default ) { #>
				{{{items[i].text}}}
				<# } else { #>
				<# if( ! data.only_title && items[i].img ) { #>
				<div class="rey-searchItem-thumbnail"><img src="{{items[i].img}}" alt="{{items[i].text}}"></div>
				<# } #>
				<div class="rey-searchItem-content">
					<div class="rey-searchItem-title">{{{items[i].text}}}</div>
					<# if( ! data.only_title && items[i].price ) { #>
					<div class="rey-searchItem-price">{{{items[i].price}}}</div>
					<# } #>
				</div>
				<# } #>
			</a>
		</div>
		<# } #>
	</div>
</script>
<script>window.lazyLoadOptions = [{
		elements_selector: "img[data-lazy-src],.rocket-lazyload,iframe[data-lazy-src]",
		data_src: "lazy-src",
		data_srcset: "lazy-srcset",
		data_sizes: "lazy-sizes",
		class_loading: "lazyloading",
		class_loaded: "lazyloaded",
		threshold: 300,
		callback_loaded: function (element) {
			if (element.tagName === "IFRAME" && element.dataset.rocketLazyload == "fitvidscompatible") {
				if (element.classList.contains("lazyloaded")) {
					if (typeof window.jQuery != "undefined") {
						if (jQuery.fn.fitVids) {
							jQuery(element).parent().fitVids()
						}
					}
				}
			}
		}
	}, {
		elements_selector: ".rocket-lazyload",
		data_src: "lazy-src",
		data_srcset: "lazy-srcset",
		data_sizes: "lazy-sizes",
		class_loading: "lazyloading",
		class_loaded: "lazyloaded",
		threshold: 300,
	}];
	window.addEventListener('LazyLoad::Initialized', function (e) {
		var lazyLoadInstance = e.detail.instance;
		if (window.MutationObserver) {
			var observer = new MutationObserver(function (mutations) {
				var image_count = 0;
				var iframe_count = 0;
				var rocketlazy_count = 0;
				mutations.forEach(function (mutation) {
					for (var i = 0; i < mutation.addedNodes.length; i++) {
						if (typeof mutation.addedNodes[i].getElementsByTagName !== 'function') {
							continue
						}
						if (typeof mutation.addedNodes[i].getElementsByClassName !== 'function') {
							continue
						}
						images = mutation.addedNodes[i].getElementsByTagName('img');
						is_image = mutation.addedNodes[i].tagName == "IMG";
						iframes = mutation.addedNodes[i].getElementsByTagName('iframe');
						is_iframe = mutation.addedNodes[i].tagName == "IFRAME";
						rocket_lazy = mutation.addedNodes[i].getElementsByClassName('rocket-lazyload');
						image_count += images.length;
						iframe_count += iframes.length;
						rocketlazy_count += rocket_lazy.length;
						if (is_image) {
							image_count += 1
						}
						if (is_iframe) {
							iframe_count += 1
						}
					}
				});
				if (image_count > 0 || iframe_count > 0 || rocketlazy_count > 0) {
					lazyLoadInstance.update()
				}
			});
			var b = document.getElementsByTagName("body")[0];
			var config = {childList: !0, subtree: !0};
			observer.observe(b, config)
		}
	}, !1)
</script>
<script data-no-minify="1" async="" src="/babui/assets/client-view/js/lazyload.min.js"></script>
<script>var rocket_beacon_data = {
		"ajax_url": "https:\/\/demos.reytheme.com\/san-francisco\/wp-admin\/admin-ajax.php",
		"nonce": "2ab055f25a",
		"url": "https:\/\/demos.reytheme.com\/san-francisco",
		"is_mobile": false,
		"width_threshold": 1600,
		"height_threshold": 700,
		"delay": 500,
		"debug": null,
		"status": {"atf": true, "lrc": false},
		"elements": "img, video, picture, p, main, div, li, svg, section, header, span",
		"lrc_threshold": 1800
	}</script>
<script data-name="wpr-wpr-beacon" src="/babui/assets/client-view/js/wpr-beacon.min.js" async=""
		beacon-completed="true"></script>
<script>class RocketElementorAnimation {
		constructor() {
			this.deviceMode = document.createElement("span"), this.deviceMode.id = "elementor-device-mode-wpr", this.deviceMode.setAttribute("class", "elementor-screen-only"), document.body.appendChild(this.deviceMode)
		}

		_detectAnimations() {
			let t = getComputedStyle(this.deviceMode, ":after").content.replace(/"/g, "");
			this.animationSettingKeys = this._listAnimationSettingsKeys(t), document.querySelectorAll(".elementor-invisible[data-settings]").forEach(t => {
				const e = t.getBoundingClientRect();
				if (e.bottom >= 0 && e.top <= window.innerHeight) try {
					this._animateElement(t)
				} catch (t) {
				}
			})
		}

		_animateElement(t) {
			const e = JSON.parse(t.dataset.settings), i = e._animation_delay || e.animation_delay || 0,
				n = e[this.animationSettingKeys.find(t => e[t])];
			if ("none" === n) return void t.classList.remove("elementor-invisible");
			t.classList.remove(n), this.currentAnimation && t.classList.remove(this.currentAnimation), this.currentAnimation = n;
			let s = setTimeout(() => {
				t.classList.remove("elementor-invisible"), t.classList.add("animated", n), this._removeAnimationSettings(t, e)
			}, i);
			window.addEventListener("rocket-startLoading", function () {
				clearTimeout(s)
			})
		}

		_listAnimationSettingsKeys(t = "mobile") {
			const e = [""];
			switch (t) {
				case"mobile":
					e.unshift("_mobile");
				case"tablet":
					e.unshift("_tablet");
				case"desktop":
					e.unshift("_desktop")
			}
			const i = [];
			return ["animation", "_animation"].forEach(t => {
				e.forEach(e => {
					i.push(t + e)
				})
			}), i
		}

		_removeAnimationSettings(t, e) {
			this._listAnimationSettingsKeys().forEach(t => delete e[t]), t.dataset.settings = JSON.stringify(e)
		}

		static run() {
			const t = new RocketElementorAnimation;
			requestAnimationFrame(t._detectAnimations.bind(t))
		}
	}

	document.addEventListener("DOMContentLoaded", RocketElementorAnimation.run);</script>
<span id="elementor-device-mode-wpr" class="elementor-screen-only"></span><span id="elementor-device-mode"
																				class="elementor-screen-only"></span>
<div class="widget_shopping_cart_live_region screen-reader-text" role="status"></div>
</body>
</html>



