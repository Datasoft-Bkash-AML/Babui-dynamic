<!DOCTYPE html>
<html lang="en-US" data-df="" data-container="1440" data-xl="2" data-admin-bar="0" class="elementor-kit-2009"
      style="--scrollbar-width: 15px; --header-default--height: 122px;">
<head>
    <meta charset="UTF-8">
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
    <link rel="profile" href="//gmpg.org/xfn/11">
    <link rel="pingback" href="/babui/assets/client-view/xmlrpc.php">

    <title>Shop – San Francisco</title>
    <link rel="preload" data-rocket-preload="" as="image"
          href="/babui/assets/client-view/wp-content/uploads/sites/24/2022/02/16-330x361.jpg"
          imagesrcset="/babui/assets/client-view/wp-content/uploads/sites/24/2022/02/16-330x361.jpg 330w, /babui/assets/client-view/wp-content/uploads/sites/24/2022/02/16-274x300.jpg 274w, /babui/assets/client-view/wp-content/uploads/sites/24/2022/02/16-936x1024.jpg 936w, /babui/assets/client-view/wp-content/uploads/sites/24/2022/02/16-768x840.jpg 768w, /babui/assets/client-view/wp-content/uploads/sites/24/2022/02/16-600x656.jpg 600w, /babui/assets/client-view/wp-content/uploads/sites/24/2022/02/16.jpg 1024w"
          imagesizes="(max-width: 330px) 100vw, 330px" fetchpriority="high">
    <meta name="robots" content="max-image-preview:large">
    <style>img:is([sizes="auto" i], [sizes^="auto," i]) {
            contain-intrinsic-size: 3000px 1500px
        }</style>

    <link rel="alternate" type="application/rss+xml" title="San Francisco » Feed"
          href="/babui/assets/client-view/feed/">
    <link rel="alternate" type="application/rss+xml" title="San Francisco » Comments Feed"
          href="/babui/assets/client-view/comments/feed/">
    <link rel="alternate" type="application/rss+xml" title="San Francisco » Products Feed"
          href="/babui/assets/client-view/shop/feed/">
    <link rel="preload" as="image" type="image/jpeg"
          href="/babui/assets/client-view/wp-content/uploads/sites/24/2022/02/Rectangle-56.jpg">
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
    <link data-minify="1" rel="stylesheet" as="style" onload="this.onload=null;this.rel='stylesheet';" media="all"
          data-no-rel="stylesheet" id="rey-wp-style-child-css"
          href="/babui/assets/client-view/wp-content/cache/min/24/san-francisco/wp-content/themes/rey-child/style.css?ver=1732304232"
          type="text/css" data-media="all">
    <noscript>
        <link data-minify="1" rel='stylesheet' data-id='rey-wp-style-child-css'
              href='/babui/assets/client-view/wp-content/cache/min/24/san-francisco/wp-content/themes/rey-child/style.css?ver=1732304232'
              data-type='text/css' data-media='all'/>
    </noscript>
    <link rel="stylesheet" id="elementor-frontend-css"
          href="/babui/assets/client-view/wp-content/plugins/elementor/assets/css/frontend.min.css?ver=3.25.9"
          type="text/css" media="all">
    <link id="rey-wc-header-mini-cart-css" rel="stylesheet" type="text/css"
          href="/babui/assets/client-view/css/header-mini-cart.css?ver=1f4e00506ff9">
    <link id="reycore-widget-grid-style-css" rel="stylesheet" type="text/css"
          href="/babui/assets/client-view/wp-content/plugins/rey-core/inc/elementor/widgets/grid/assets/style.css?ver=1f4e00506ff9">
    <link data-minify="1" id="rey-hs-css" type="text/css"
          href="/babui/assets/client-view/wp-content/cache/min/24/san-francisco/wp-content/uploads/sites/24/rey/hs-25f783aa6d.css?ver=1732308633"
          rel="stylesheet" media="all">
    <link id="rey-ds-css" type="text/css"
          href="/babui/assets/client-view/wp-content/uploads/sites/24/rey/ds-75ef6f9c68.css?ver=3.1.2.1732308633"
          data-noptimize="" data-no-optimize="1" data-pagespeed-no-defer="" data-pagespeed-no-transform=""
          data-minify="1" rel="stylesheet" as="style" onload="this.onload=null;this.rel='stylesheet';" media="all">
    <noscript>
        <link rel="stylesheet" href="/babui/assets/client-view/wp-content/uploads/sites/24/rey/ds-75ef6f9c68.css"
              data-no-minify="1">
    </noscript>
    <link rel="stylesheet" id="elementor-post-179-css"
          href="/babui/assets/client-view/wp-content/uploads/sites/24/elementor/css/post-179.css?ver=1732304231"
          type="text/css" media="all">
    <link rel="stylesheet" onload="this.onload=null;this.media='all';" media="all" data-noptimize=""
          data-no-optimize="1" data-pagespeed-no-defer="" data-pagespeed-no-transform="" data-minify="1"
          data-no-rel="stylesheet" id="elementor-post-473-css"
          href="/babui/assets/client-view/wp-content/uploads/sites/24/elementor/css/post-473.css?ver=1732304232"
          type="text/css" data-media="all">
    <noscript>
        <link rel='stylesheet' data-noptimize="" data-no-optimize="1" data-pagespeed-no-defer=""
              data-pagespeed-no-transform="" data-minify="1" data-id='elementor-post-473-css'
              href='/babui/assets/client-view/wp-content/uploads/sites/24/elementor/css/post-473.css?ver=1732304232'
              data-type='text/css' data-media='all'/>
    </noscript>
    <link rel="stylesheet" id="elementor-post-681-css"
          href="/babui/assets/client-view/wp-content/uploads/sites/24/elementor/css/post-681.css?ver=1732308633"
          type="text/css" media="all">
    <script type="text/javascript" src="/babui/assets/client-view/js/custom-cart.js"></script>
    <script type="text/javascript" id="jquery-core-js" data-rocket-defer="" defer=""
            src="/babui/assets/client-view/wp-includes/js/jquery/jquery.min.js?ver=3.7.1"
            data-rocket-status="executed"></script>
    <script type="text/javascript" data-minify="1" id="jquery-blockui-js" defer="defer" data-wp-strategy="defer"
            src="/babui/assets/client-view/wp-content/cache/min/24/san-francisco/wp-content/plugins/rey-core/assets/js/woocommerce/blockui.js?ver=1729932040"
            data-rocket-status="executed"></script>
    <script type="text/javascript" id="wc-add-to-cart-js-extra">
        /* <![CDATA[ */
        var wc_add_to_cart_params = {
            "ajax_url": "\/san-francisco\/wp-admin\/admin-ajax.php",
            "wc_ajax_url": "\/san-francisco\/?wc-ajax=%%endpoint%%",
            "i18n_view_cart": "View cart",
            "cart_url": "https:\/\/demos.reytheme.com\/san-francisco\/cart\/",
            "is_cart": "",
            "cart_redirect_after_add": "no"
        };
        /* ]]> */
    </script>
    <script type="text/javascript" id="wc-add-to-cart-js" defer="defer" data-wp-strategy="defer"
            src="/babui/assets/client-view/wp-content/plugins/woocommerce/assets/js/frontend/add-to-cart.min.js?ver=9.4.2"
            data-rocket-status="executed"></script>
    <script type="text/javascript" id="js-cookie-js" defer="defer" data-wp-strategy="defer"
            src="/babui/assets/client-view/wp-content/plugins/woocommerce/assets/js/js-cookie/js.cookie.min.js?ver=2.1.4-wc.9.4.2"
            data-rocket-status="executed"></script>
    <script type="text/javascript" id="woocommerce-js-extra">
        /* <![CDATA[ */
        var woocommerce_params = {
            "ajax_url": "\/san-francisco\/wp-admin\/admin-ajax.php",
            "wc_ajax_url": "\/san-francisco\/?wc-ajax=%%endpoint%%"
        };
        /* ]]> */
    </script>
    <script type="text/javascript" id="woocommerce-js" defer="defer" data-wp-strategy="defer"
            src="/babui/assets/client-view/wp-content/plugins/woocommerce/assets/js/frontend/woocommerce.min.js?ver=9.4.2"
            data-rocket-status="executed"></script>
    <link rel="https://api.w.org/" href="/babui/assets/client-view/wp-json/">
    <link rel="EditURI" type="application/rsd+xml" title="RSD" href="/babui/assets/client-view/xmlrpc.php?rsd">
    <meta name="generator" content="WordPress 6.7.1">
    <meta name="generator" content="WooCommerce 9.4.2">
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
            src: url('/babui/assets/client-view/wp-content/plugins/woocommerce/assets/fonts/Inter-VariableFont_slnt,wght.woff2') format('woff2');
            font-stretch: normal;
        }

        @font-face {
            font-family: Cardo;
            font-style: normal;
            font-weight: 400;
            font-display: fallback;
            src: url('/babui/assets/client-view/wp-content/plugins/woocommerce/assets/fonts/cardo_normal_400.woff2') format('woff2');
        }
    </style>
    <link rel="icon" href="/babui/assets/client-view/wp-content/uploads/sites/24/2022/10/rey-sf-100x100.png"
          sizes="32x32">
    <link rel="icon" href="/babui/assets/client-view/wp-content/uploads/sites/24/2022/10/rey-sf-300x300.png"
          sizes="192x192">
    <link rel="apple-touch-icon"
          href="/babui/assets/client-view/wp-content/uploads/sites/24/2022/10/rey-sf-300x300.png">
    <meta name="msapplication-TileImage"
          content="/babui/assets/client-view/wp-content/uploads/sites/24/2022/10/rey-sf-300x300.png">
    <style type="text/css" id="wp-custom-css">
        /* Decrease spacing between product page's gallery and summary */
        :root {
            --woocommerce-summary-margin: 20px;
        }

        @media (max-width: 1024px) {
            .rey-checkoutPage.--layout-custom .rey-checkoutPage-form:after {
                display: none;
            }
        }        </style>
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
            src: url(/babui/assets/client-view/wp-content/fonts/outfit/2bfec23b3833c158) format('woff');
        }

        @font-face {
            font-family: 'Outfit';
            font-style: normal;
            font-weight: 400;
            font-display: swap;
            src: url(/babui/assets/client-view/wp-content/fonts/outfit/788596d46eeb2990) format('woff');
        }

        @font-face {
            font-family: 'Outfit';
            font-style: normal;
            font-weight: 700;
            font-display: swap;
            src: url(/babui/assets/client-view/wp-content/fonts/outfit/bb1d62c4f59c2690) format('woff');
        }

        @font-face {
            font-family: 'Outfit';
            font-style: normal;
            font-weight: 900;
            font-display: swap;
            src: url(/babui/assets/client-view/wp-content/fonts/outfit/12450cdb1b4e037d) format('woff');
        }

        @font-face {
            font-family: 'Rey Primary';
            font-style: normal;
            font-weight: 300;
            font-display: swap;
            src: url(/babui/assets/client-view/wp-content/fonts/outfit/2bfec23b3833c158) format('woff');
        }

        @font-face {
            font-family: 'Rey Primary';
            font-style: normal;
            font-weight: 400;
            font-display: swap;
            src: url(/babui/assets/client-view/wp-content/fonts/outfit/788596d46eeb2990) format('woff');
        }

        @font-face {
            font-family: 'Rey Primary';
            font-style: normal;
            font-weight: 700;
            font-display: swap;
            src: url(/babui/assets/client-view/wp-content/fonts/outfit/bb1d62c4f59c2690) format('woff');
        }

        @font-face {
            font-family: 'Rey Primary';
            font-style: normal;
            font-weight: 900;
            font-display: swap;
            src: url(/babui/assets/client-view/wp-content/fonts/outfit/12450cdb1b4e037d) format('woff');
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
    <style id="rey-lazy-bg">.rey-js .elementor-element.rey-lazyBg, .rey-js .elementor-element.rey-lazyBg > .elementor-widget-container, .rey-js .elementor-element.rey-lazyBg > .elementor-widget-wrap {
            background-image: none !important;
        }</style>
    <noscript>
        <style id="rocket-lazyload-nojs-css">.rll-youtube-player, [data-lazy-src] {
                display: none !important;
            }</style>
    </noscript>
    <meta name="generator" content="WP Rocket 3.17.3"
          data-wpr-features="wpr_delay_js wpr_defer_js wpr_minify_js wpr_lazyload_images wpr_lazyload_iframes wpr_oci wpr_minify_css wpr_desktop wpr_preload_links">
    <link rel="prefetch" href="/babui/assets/client-view/product/fitness-health-tracker/">
    <link rel="prefetch" href="/babui/assets/client-view/product-category/speakers/">
</head>

<body data-rsssl="1"
      class="archive post-type-archive post-type-archive-product wp-custom-logo theme-rey woocommerce-shop woocommerce woocommerce-page woocommerce-js ltr elementor-default elementor-kit-2009 rey-cwidth--default --no-acc-focus elementor-opt r-notices rey-js e--ua-blink e--ua-chrome e--ua-webkit"
      data-id="2001" itemtype="https://schema.org/WebPage" itemscope="itemscope" data-rey-device="desktop"
      data-elementor-device-mode="desktop" data-active-filters="0" data-at-top="">

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

<a href="#content" class="skip-link screen-reader-text">Skip to content</a>

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
                    <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-8e9744f"
                         data-id="8e9744f" data-element_type="column">
                        <div class="elementor-column-wrap--8e9744f elementor-widget-wrap elementor-element-populated">
                            <div class="elementor-element elementor-element-559cd29 elementor-widget elementor-widget-reycore-text-scroller"
                                 data-id="559cd29" data-element_type="widget"
                                 data-widget_type="reycore-text-scroller.default">
                                <div class="elementor-widget-container">
                                    <div class="rey-textScroller clearfix">

                                        <div class="rey-textScroller-items splide rey-textScroller-559cd29 --vertical rey-inView splide--fade splide--ltr splide--draggable is-active is-overflow is-initialized"
                                             data-slider-config="{&quot;type&quot;:&quot;fade&quot;,&quot;autoplay&quot;:true,&quot;interval&quot;:4000,&quot;delayInit&quot;:2000,&quot;customArrows&quot;:false,&quot;speed&quot;:1}"
                                             id="splide02" role="region" aria-roledescription="carousel">

                                            <div class="splide__track splide__track--fade splide__track--ltr splide__track--draggable"
                                                 id="splide02-track" aria-live="off" aria-atomic="true"
                                                 aria-busy="false">
                                                <div class="splide__list" id="splide02-list" role="presentation">
                                                    <div class="splide__slide rey-textScroller-item is-active is-visible"
                                                         id="splide02-slide01" role="group" aria-roledescription="slide"
                                                         aria-label="1 of 2"
                                                         style="transform: translateX(0%); transition: opacity 1ms cubic-bezier(0.25, 1, 0.5, 1) 0s;">
                                                        <span><p>FREE WORLDWIDE SHIPPING OVER $100</p></span></div>
                                                    <div class="splide__slide rey-textScroller-item is-next"
                                                         data-lazy-hidden="" id="splide02-slide02" role="group"
                                                         aria-roledescription="slide" aria-label="2 of 2"
                                                         style="transform: translateX(-100%); transition: opacity 1ms cubic-bezier(0.25, 1, 0.5, 1) 0s;"
                                                         aria-hidden="true"><span><p>LAST CALL: LOWEST PRICE GUARANTEE 50% OFF. <a
                                                                        href="#" tabindex="-1">EXPLORE</a></p></span>
                                                    </div>
                                                </div>
                                            </div>


                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-e138032 elementor-hidden-mobile"
                         data-id="e138032" data-element_type="column">
                        <div class="elementor-column-wrap--e138032 elementor-widget-wrap elementor-element-populated">
                            <div class="elementor-element elementor-element-4393b57 reyEl-menu--horizontal --icons-start elementor-widget elementor-widget-reycore-menu"
                                 data-id="4393b57" data-element_type="widget"
                                 data-widget_type="reycore-menu.custom-items">
                                <div class="elementor-widget-container">

                                    <div class="rey-element reyEl-menu">
                                        <div class="reyEl-menu-navWrapper">
                                            <ul class="reyEl-menu-nav rey-navEl --menuHover-">
                                                <li class="menu-item "><a class=""
                                                                          href="/babui/assets/client-view/showrooms/"><span>STORES</span></a>
                                                </li>
                                                <li class="menu-item "><a class=""
                                                                          href="/babui/assets/client-view/contact/"><span>CONTACT</span></a>
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
            <section
                    class="elementor-section elementor-top-section elementor-element elementor-element-f7270e2 elementor-section-content-middle rey-section-bg--classic elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                    data-id="f7270e2" data-element_type="section"
                    data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                <div class="elementor-container elementor-column-gap-no">
                    <div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-6e7b001c"
                         data-id="6e7b001c" data-element_type="column">
                        <div class="elementor-column-wrap--6e7b001c elementor-widget-wrap elementor-element-populated">
                            <div class="elementor-element elementor-element-11648aaf elementor-widget elementor-widget-reycore-header-logo"
                                 data-id="11648aaf" data-element_type="widget"
                                 data-widget_type="reycore-header-logo.default">
                                <div class="elementor-widget-container">

                                    <div class="rey-logoWrapper">


                                        <div class="rey-siteLogo">
                                            <a href="/babui/assets/client-view/" data-no-lazy="1" data-skip-lazy="1"
                                               class="no-lazy custom-logo-link" rel="home" itemprop="url"><img
                                                        width="41" height="21"
                                                        src="/babui/assets/client-view/wp-content/uploads/sites/24/2022/03/logo-black-mobile.svg"
                                                        data-no-lazy="1" data-skip-lazy="1" class="no-lazy custom-logo"
                                                        alt="San Francisco" loading="eager" decoding="async"></a></div>

                                    </div>
                                    <!-- .rey-logoWrapper -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-7b847be"
                         data-id="7b847be" data-element_type="column">
                        <div class="elementor-column-wrap--7b847be elementor-widget-wrap elementor-element-populated">
                            <div class="elementor-element elementor-element-19e0e42b elementor-widget__width-auto --il--tablet-left --il--mobile-left --icons-start --submenu-display-collapsed --tap-open --panel-dir--left elementor-widget elementor-widget-reycore-header-navigation"
                                 data-id="19e0e42b" data-element_type="widget"
                                 data-widget_type="reycore-header-navigation.default">
                                <div class="elementor-widget-container">

                                    <button class="btn rey-mainNavigation-mobileBtn rey-headerIcon __hamburger --hs-25bars"
                                            aria-label="Open menu">
                                        <div class="__bars">
                                            <span class="__bar"></span>
                                            <span class="__bar"></span>
                                            <span class="__bar"></span>
                                        </div>
                                        <svg aria-hidden="true" role="img" id="rey-icon-close-67735525e84f4"
                                             class="rey-icon rey-icon-close " viewBox="0 0 110 110">
                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"
                                               stroke-linecap="square">
                                                <path d="M4.79541854,4.29541854 L104.945498,104.445498 L4.79541854,4.29541854 Z"
                                                      stroke="currentColor"
                                                      stroke-width="var(--stroke-width, 12px)"></path>
                                                <path d="M4.79541854,104.704581 L104.945498,4.55450209 L4.79541854,104.704581 Z"
                                                      stroke="currentColor"
                                                      stroke-width="var(--stroke-width, 12px)"></path>
                                            </g>
                                        </svg>
                                    </button>
                                    <!-- .rey-mainNavigation-mobileBtn -->

                                    <nav id="site-navigation-19e0e42b"
                                         class="rey-mainNavigation rey-mainNavigation--desktop  --shadow-1"
                                         data-id="-19e0e42b" aria-label="Main Menu" data-sm-indicator="dash"
                                         itemtype="https://schema.org/SiteNavigationElement" itemscope="itemscope">

                                        <ul id="main-menu-desktop-19e0e42b"
                                            class="rey-mainMenu rey-mainMenu--desktop id--mainMenu--desktop --has-indicators  rey-navEl --menuHover-simple --megamenu-support">
                                            <li id="menu-item-195"
                                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home menu-item-195 depth--0 --is-regular o-id-2006">
                                                <a href="/babui/assets/client-view/"><span>Home</span></a></li>
                                            <li id="menu-item-196"
                                                class="menu-item menu-item-type-post_type menu-item-object-page current-menu-item current_page_item menu-item-196 depth--0 --is-mega o-id-2001 --is-mega-gs --mega-custom menu-item-has-children"
                                                aria-haspopup="true" aria-expanded="false"><a
                                                        href="/babui/assets/client-view/shop/"
                                                        aria-current="page"><span>Shop</span><i
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
                                                            <div class="elementor-container elementor-column-gap-default">
                                                                <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-8a9663a"
                                                                     data-id="8a9663a" data-element_type="column">
                                                                    <div class="elementor-column-wrap--8a9663a elementor-widget-wrap elementor-element-populated">
                                                                        <section
                                                                                class="elementor-section elementor-inner-section elementor-element elementor-element-a13d32f rey-flexWrap elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                                                                data-id="a13d32f"
                                                                                data-element_type="section">
                                                                            <div class="elementor-container elementor-column-gap-default">
                                                                                <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-dee5240"
                                                                                     data-id="dee5240"
                                                                                     data-element_type="column">
                                                                                    <div class="elementor-column-wrap--dee5240 elementor-widget-wrap elementor-element-populated">
                                                                                        <div class="elementor-element elementor-element-c37db73 elementor-widget elementor-widget-heading"
                                                                                             data-id="c37db73"
                                                                                             data-element_type="widget"
                                                                                             data-widget_type="heading.default">
                                                                                            <div class="elementor-widget-container">
                                                                                                <div class="elementor-heading-title elementor-size-default">
                                                                                                    CATEGORIES
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="elementor-element elementor-element-8d1a5b4 reyEl-menu--vertical reyEl-menu--cols-1 --icons-start elementor-widget elementor-widget-reycore-menu"
                                                                                             data-id="8d1a5b4"
                                                                                             data-element_type="widget"
                                                                                             data-widget_type="reycore-menu.product-categories">
                                                                                            <div class="elementor-widget-container">

                                                                                                <div class="rey-element reyEl-menu">
                                                                                                    <div class="reyEl-menu-navWrapper">
                                                                                                        <ul class="reyEl-menu-nav rey-navEl --menuHover-">
                                                                                                            <li class="menu-item ">
                                                                                                                <a href="/babui/assets/client-view/product-category/accessories/"
                                                                                                                   tabindex="-1"><span>Accessories</span></a>
                                                                                                            </li>
                                                                                                            <li class="menu-item ">
                                                                                                                <a href="/babui/assets/client-view/product-category/cameras/"
                                                                                                                   tabindex="-1"><span>Cameras</span></a>
                                                                                                            </li>
                                                                                                            <li class="menu-item ">
                                                                                                                <a href="/babui/assets/client-view/product-category/headphones/"
                                                                                                                   tabindex="-1"><span>Headphones</span></a>
                                                                                                            </li>
                                                                                                            <li class="menu-item ">
                                                                                                                <a href="/babui/assets/client-view/product-category/speakers/"
                                                                                                                   tabindex="-1"><span>Speakers</span></a>
                                                                                                            </li>
                                                                                                            <li class="menu-item current-menu-item">
                                                                                                                <a href="/babui/assets/client-view/product-category/wearables/"
                                                                                                                   tabindex="-1"><span>Wearables</span></a>
                                                                                                            </li>
                                                                                                        </ul>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-6ce78d1"
                                                                                     data-id="6ce78d1"
                                                                                     data-element_type="column">
                                                                                    <div class="elementor-column-wrap--6ce78d1 elementor-widget-wrap elementor-element-populated">
                                                                                        <div class="elementor-element elementor-element-8bc12ee elementor-button-underline-hover elementor-widget elementor-widget-button"
                                                                                             data-id="8bc12ee"
                                                                                             data-element_type="widget"
                                                                                             data-widget_type="button.default">
                                                                                            <div class="elementor-widget-container">
                                                                                                <div class="elementor-button-wrapper">
                                                                                                    <a class="elementor-button elementor-button-link elementor-size-sm"
                                                                                                       href="/babui/assets/client-view/brands/"
                                                                                                       tabindex="-1">
						<span class="elementor-button-content-wrapper">
									<span class="elementor-button-text">Popular Brands</span>
					</span>
                                                                                                    </a>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="elementor-element elementor-element-a36fd99 elementor-widget elementor-widget-reycore-wc-attributes"
                                                                                             data-id="a36fd99"
                                                                                             data-element_type="widget"
                                                                                             data-widget_type="reycore-wc-attributes.default">
                                                                                            <div class="elementor-widget-container">

                                                                                                <div class="rey-element reyEl-wcAttr reyEl-wcAttr--list rey-filterList rey-filterList--list">

                                                                                                    <ul class="reyEl-wcAttr-list">
                                                                                                        <li>
                                                                                                            <a href="/babui/assets/client-view/product-brand/anter/"
                                                                                                               tabindex="-1">Anter</a>
                                                                                                        </li>
                                                                                                        <li>
                                                                                                            <a href="/babui/assets/client-view/product-brand/bav/"
                                                                                                               tabindex="-1">Bav</a>
                                                                                                        </li>
                                                                                                        <li>
                                                                                                            <a href="/babui/assets/client-view/product-brand/bevel/"
                                                                                                               tabindex="-1">Bevel</a>
                                                                                                        </li>
                                                                                                        <li>
                                                                                                            <a href="/babui/assets/client-view/product-brand/c-pro/"
                                                                                                               tabindex="-1">C
                                                                                                                Pro</a>
                                                                                                        </li>
                                                                                                        <li>
                                                                                                            <a href="/babui/assets/client-view/product-brand/candero/"
                                                                                                               tabindex="-1">Candero</a>
                                                                                                        </li>
                                                                                                        <li>
                                                                                                            <a href="/babui/assets/client-view/product-brand/censis/"
                                                                                                               tabindex="-1">Censis</a>
                                                                                                        </li>
                                                                                                    </ul>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-5a81dc4"
                                                                                     data-id="5a81dc4"
                                                                                     data-element_type="column">
                                                                                    <div class="elementor-column-wrap--5a81dc4 elementor-widget-wrap elementor-element-populated">
                                                                                        <div class="elementor-element elementor-element-fa4ad39 elementor-button-dashed elementor-widget elementor-widget-button"
                                                                                             data-id="fa4ad39"
                                                                                             data-element_type="widget"
                                                                                             data-widget_type="button.default">
                                                                                            <div class="elementor-widget-container">
                                                                                                <div class="elementor-button-wrapper">
                                                                                                    <a class="elementor-button elementor-button-link elementor-size-sm"
                                                                                                       href="/babui/assets/client-view/shop/"
                                                                                                       tabindex="-1">
						<span class="elementor-button-content-wrapper">
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
                                                                <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-585ea7e rey-colbg--classic"
                                                                     data-id="585ea7e" data-element_type="column"
                                                                     data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                                                    <div class="elementor-column-wrap--585ea7e elementor-widget-wrap elementor-element-populated">
                                                                        <div class="elementor-element elementor-element-4fbbda7 elementor-widget elementor-widget-heading"
                                                                             data-id="4fbbda7"
                                                                             data-element_type="widget"
                                                                             data-widget_type="heading.default">
                                                                            <div class="elementor-widget-container">
                                                                                <h3 class="elementor-heading-title elementor-size-default">
                                                                                    Complete your setup</h3></div>
                                                                        </div>
                                                                        <div class="elementor-element elementor-element-87b685f elementor-button-dashed elementor-widget elementor-widget-button"
                                                                             data-id="87b685f"
                                                                             data-element_type="widget"
                                                                             data-widget_type="button.default">
                                                                            <div class="elementor-widget-container">
                                                                                <div class="elementor-button-wrapper">
                                                                                    <a class="elementor-button elementor-button-link elementor-size-sm"
                                                                                       href="/babui/assets/client-view/shop/"
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
                                                <a href="/babui/assets/client-view/new-arrivals/"><span>New Arrivals</span></a>
                                            </li>
                                            <li id="menu-item-1250"
                                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1250 depth--0 --is-regular o-id-1234">
                                                <a href="/babui/assets/client-view/brands/"><span>Brands</span></a></li>
                                            <li id="menu-item-945"
                                                class="menu-item menu-item-type-custom menu-item-object-custom menu-item-945 depth--0 --is-mega --is-mega-gs --mega-custom menu-item-has-children"
                                                aria-haspopup="true" aria-expanded="false"><a
                                                        href="#"><span>Pages</span><i
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
                                                            <div class="elementor-container elementor-column-gap-default">
                                                                <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-f130896"
                                                                     data-id="f130896" data-element_type="column">
                                                                    <div class="elementor-column-wrap--f130896 elementor-widget-wrap elementor-element-populated">
                                                                        <div class="elementor-element elementor-element-f8d4f7d elementor-widget elementor-widget-heading"
                                                                             data-id="f8d4f7d"
                                                                             data-element_type="widget"
                                                                             data-widget_type="heading.default">
                                                                            <div class="elementor-widget-container">
                                                                                <h5 class="elementor-heading-title elementor-size-default">
                                                                                    SITE</h5></div>
                                                                        </div>
                                                                        <div class="elementor-element elementor-element-2e3f54b reyEl-menu--vertical reyEl-menu--cols-1 --icons-start elementor-widget elementor-widget-reycore-menu"
                                                                             data-id="2e3f54b"
                                                                             data-element_type="widget"
                                                                             data-widget_type="reycore-menu.custom-items">
                                                                            <div class="elementor-widget-container">

                                                                                <div class="rey-element reyEl-menu">
                                                                                    <div class="reyEl-menu-navWrapper">
                                                                                        <ul class="reyEl-menu-nav rey-navEl --menuHover-">
                                                                                            <li class="menu-item "><a
                                                                                                        class=""
                                                                                                        href="/babui/assets/client-view/contact/"
                                                                                                        tabindex="-1"><span>Contact</span></a>
                                                                                            </li>
                                                                                            <li class="menu-item "><a
                                                                                                        class=""
                                                                                                        href="/babui/assets/client-view/about-us/"
                                                                                                        tabindex="-1"><span>About Us</span></a>
                                                                                            </li>
                                                                                            <li class="menu-item "><a
                                                                                                        class=""
                                                                                                        href="/babui/assets/client-view/frequently-asked-questions/"
                                                                                                        tabindex="-1"><span>Frequently Asked Questions</span></a>
                                                                                            </li>
                                                                                            <li class="menu-item "><a
                                                                                                        class=""
                                                                                                        href="/babui/assets/client-view/showrooms/"
                                                                                                        tabindex="-1"><span>Showrooms</span></a>
                                                                                            </li>
                                                                                            <li class="menu-item "><a
                                                                                                        class=""
                                                                                                        href="/babui/assets/client-view/news/"
                                                                                                        tabindex="-1"><span>Blog</span></a>
                                                                                            </li>
                                                                                            <li class="menu-item "><a
                                                                                                        class=""
                                                                                                        href="/babui/assets/client-view/2022/03/25/the-vivo-x-fold-has-a-fingerprint-reader-on-both-screens/"
                                                                                                        tabindex="-1"><span>Blog Post</span></a>
                                                                                            </li>
                                                                                            <li class="menu-item "><a
                                                                                                        class=""
                                                                                                        href="/babui/assets/client-view/terms-conditions/"
                                                                                                        tabindex="-1"><span>Terms &amp; Conditions</span></a>
                                                                                            </li>
                                                                                        </ul>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-6c885fc"
                                                                     data-id="6c885fc" data-element_type="column">
                                                                    <div class="elementor-column-wrap--6c885fc elementor-widget-wrap elementor-element-populated">
                                                                        <div class="elementor-element elementor-element-6f251c5 elementor-widget elementor-widget-heading"
                                                                             data-id="6f251c5"
                                                                             data-element_type="widget"
                                                                             data-widget_type="heading.default">
                                                                            <div class="elementor-widget-container">
                                                                                <h5 class="elementor-heading-title elementor-size-default">
                                                                                    SHOP</h5></div>
                                                                        </div>
                                                                        <div class="elementor-element elementor-element-a2811d2 reyEl-menu--vertical reyEl-menu--cols-1 --icons-start elementor-widget elementor-widget-reycore-menu"
                                                                             data-id="a2811d2"
                                                                             data-element_type="widget"
                                                                             data-widget_type="reycore-menu.custom-items">
                                                                            <div class="elementor-widget-container">

                                                                                <div class="rey-element reyEl-menu">
                                                                                    <div class="reyEl-menu-navWrapper">
                                                                                        <ul class="reyEl-menu-nav rey-navEl --menuHover-">
                                                                                            <li class="menu-item current-menu-item">
                                                                                                <a class=""
                                                                                                   href="/babui/assets/client-view/shop/"
                                                                                                   tabindex="-1"><span>Catalogue</span></a>
                                                                                            </li>
                                                                                            <li class="menu-item "><a
                                                                                                        class=""
                                                                                                        href="/babui/assets/client-view/product-category/headphones/"
                                                                                                        tabindex="-1"><span>Category</span></a>
                                                                                            </li>
                                                                                            <li class="menu-item "><a
                                                                                                        class=""
                                                                                                        href="/babui/assets/client-view/product/comfortable-over-ear-headphones/"
                                                                                                        tabindex="-1"><span>Product / Catalog Item</span></a>
                                                                                            </li>
                                                                                            <li class="menu-item "><a
                                                                                                        class=""
                                                                                                        href="/babui/assets/client-view/wishlist/"
                                                                                                        tabindex="-1"><span>Wishlist</span></a>
                                                                                            </li>
                                                                                            <li class="menu-item "><a
                                                                                                        class=""
                                                                                                        href="/babui/assets/client-view/checkout/"
                                                                                                        tabindex="-1"><span>Checkout</span></a>
                                                                                            </li>
                                                                                            <li class="menu-item "><a
                                                                                                        class=""
                                                                                                        href="/babui/assets/client-view/cart/"
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
                                    </nav><!-- .rey-mainNavigation -->


                                    <nav id="site-navigation-mobile-19e0e42b"
                                         class="rey-mainNavigation rey-mainNavigation--mobile rey-mobileNav "
                                         data-id="-19e0e42b" aria-label="Main Menu"
                                         itemtype="https://schema.org/SiteNavigationElement" itemscope="itemscope">
                                        <div class="rey-mobileNav-container">
                                            <div class="rey-mobileNav-header">


                                                <div class="rey-siteLogo">
                                                    <a href="/babui/assets/client-view/" data-no-lazy="1"
                                                       data-skip-lazy="1" class="no-lazy custom-logo-link" rel="home"
                                                       itemprop="url"><img width="41" height="21"
                                                                           src="/babui/assets/client-view/wp-content/uploads/sites/24/2022/03/logo-black-mobile.svg"
                                                                           data-no-lazy="1" data-skip-lazy="1"
                                                                           class="no-lazy custom-logo"
                                                                           alt="San Francisco" loading="eager"
                                                                           decoding="async"></a></div>

                                                <button class="__arrClose btn rey-mobileMenu-close js-rey-mobileMenu-close"
                                                        aria-label="Close menu"><span class="__icons"><svg
                                                                aria-hidden="true" role="img"
                                                                id="rey-icon-close-67735525f1cbb"
                                                                class="rey-icon rey-icon-close " viewBox="0 0 110 110"><g
                                                                    stroke="none" stroke-width="1" fill="none"
                                                                    fill-rule="evenodd" stroke-linecap="square"><path
                                                                        d="M4.79541854,4.29541854 L104.945498,104.445498 L4.79541854,4.29541854 Z"
                                                                        stroke="currentColor"
                                                                        stroke-width="var(--stroke-width, 12px)"></path><path
                                                                        d="M4.79541854,104.704581 L104.945498,4.55450209 L4.79541854,104.704581 Z"
                                                                        stroke="currentColor"
                                                                        stroke-width="var(--stroke-width, 12px)"></path></g></svg><svg
                                                                aria-hidden="true" role="img"
                                                                id="rey-icon-arrow-classic-67735525f1cc4"
                                                                class="rey-icon rey-icon-arrow-classic "
                                                                viewBox="0 0 16 16"><polygon
                                                                    fill="var(--icon-fill, currentColor)"
                                                                    points="8 0 6.6 1.4 12.2 7 0 7 0 9 12.2 9 6.6 14.6 8 16 16 8"></polygon></svg></span>
                                                </button>
                                            </div>

                                            <div class="rey-mobileNav-main">
                                                <ul id="main-menu-mobile-19e0e42b"
                                                    class="rey-mainMenu rey-mainMenu-mobile  --has-indicators  --megamenu-support">
                                                    <li id="mobile-menu-item-195"
                                                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home menu-item-195 depth--0 --is-regular o-id-2006">
                                                        <a href="/babui/assets/client-view/"><span
                                                                    style="transition-delay: 0.3s;">Home</span></a></li>
                                                    <li id="mobile-menu-item-196"
                                                        class="menu-item menu-item-type-post_type menu-item-object-page current-menu-item current_page_item menu-item-196 depth--0 --is-mega o-id-2001 --is-mega-gs --mega-custom menu-item-has-children">
                                                        <a href="/babui/assets/client-view/shop/"
                                                           aria-current="page"><span style="transition-delay: 0.33s;">Shop</span><i
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
                                                                    <div class="elementor-container elementor-column-gap-default">
                                                                        <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-8a9663a"
                                                                             data-id="8a9663a"
                                                                             data-element_type="column">
                                                                            <div class="elementor-column-wrap--8a9663a elementor-widget-wrap elementor-element-populated">
                                                                                <section
                                                                                        class="elementor-section elementor-inner-section elementor-element elementor-element-a13d32f rey-flexWrap elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                                                                        data-id="a13d32f"
                                                                                        data-element_type="section">
                                                                                    <div class="elementor-container elementor-column-gap-default">
                                                                                        <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-dee5240"
                                                                                             data-id="dee5240"
                                                                                             data-element_type="column">
                                                                                            <div class="elementor-column-wrap--dee5240 elementor-widget-wrap elementor-element-populated">
                                                                                                <div class="elementor-element elementor-element-c37db73 elementor-widget elementor-widget-heading"
                                                                                                     data-id="c37db73"
                                                                                                     data-element_type="widget"
                                                                                                     data-widget_type="heading.default">
                                                                                                    <div class="elementor-widget-container">
                                                                                                        <div class="elementor-heading-title elementor-size-default">
                                                                                                            CATEGORIES
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="elementor-element elementor-element-8d1a5b4 reyEl-menu--vertical reyEl-menu--cols-1 --icons-start elementor-widget elementor-widget-reycore-menu"
                                                                                                     data-id="8d1a5b4"
                                                                                                     data-element_type="widget"
                                                                                                     data-widget_type="reycore-menu.product-categories">
                                                                                                    <div class="elementor-widget-container">

                                                                                                        <div class="rey-element reyEl-menu">
                                                                                                            <div class="reyEl-menu-navWrapper">
                                                                                                                <ul class="reyEl-menu-nav rey-navEl --menuHover-">
                                                                                                                    <li class="menu-item ">
                                                                                                                        <a href="/babui/assets/client-view/product-category/accessories/"><span>Accessories</span></a>
                                                                                                                    </li>
                                                                                                                    <li class="menu-item ">
                                                                                                                        <a href="/babui/assets/client-view/product-category/cameras/"><span>Cameras</span></a>
                                                                                                                    </li>
                                                                                                                    <li class="menu-item ">
                                                                                                                        <a href="/babui/assets/client-view/product-category/headphones/"><span>Headphones</span></a>
                                                                                                                    </li>
                                                                                                                    <li class="menu-item ">
                                                                                                                        <a href="/babui/assets/client-view/product-category/speakers/"><span>Speakers</span></a>
                                                                                                                    </li>
                                                                                                                    <li class="menu-item current-menu-item">
                                                                                                                        <a href="/babui/assets/client-view/product-category/wearables/"><span>Wearables</span></a>
                                                                                                                    </li>
                                                                                                                </ul>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-6ce78d1"
                                                                                             data-id="6ce78d1"
                                                                                             data-element_type="column">
                                                                                            <div class="elementor-column-wrap--6ce78d1 elementor-widget-wrap elementor-element-populated">
                                                                                                <div class="elementor-element elementor-element-8bc12ee elementor-button-underline-hover elementor-widget elementor-widget-button"
                                                                                                     data-id="8bc12ee"
                                                                                                     data-element_type="widget"
                                                                                                     data-widget_type="button.default">
                                                                                                    <div class="elementor-widget-container">
                                                                                                        <div class="elementor-button-wrapper">
                                                                                                            <a class="elementor-button elementor-button-link elementor-size-sm"
                                                                                                               href="/babui/assets/client-view/brands/">
						<span class="elementor-button-content-wrapper">
									<span class="elementor-button-text">Popular Brands</span>
					</span>
                                                                                                            </a>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="elementor-element elementor-element-a36fd99 elementor-widget elementor-widget-reycore-wc-attributes"
                                                                                                     data-id="a36fd99"
                                                                                                     data-element_type="widget"
                                                                                                     data-widget_type="reycore-wc-attributes.default">
                                                                                                    <div class="elementor-widget-container">

                                                                                                        <div class="rey-element reyEl-wcAttr reyEl-wcAttr--list rey-filterList rey-filterList--list">

                                                                                                            <ul class="reyEl-wcAttr-list">
                                                                                                                <li>
                                                                                                                    <a href="/babui/assets/client-view/product-brand/anter/">Anter</a>
                                                                                                                </li>
                                                                                                                <li>
                                                                                                                    <a href="/babui/assets/client-view/product-brand/bav/">Bav</a>
                                                                                                                </li>
                                                                                                                <li>
                                                                                                                    <a href="/babui/assets/client-view/product-brand/bevel/">Bevel</a>
                                                                                                                </li>
                                                                                                                <li>
                                                                                                                    <a href="/babui/assets/client-view/product-brand/c-pro/">C
                                                                                                                        Pro</a>
                                                                                                                </li>
                                                                                                                <li>
                                                                                                                    <a href="/babui/assets/client-view/product-brand/candero/">Candero</a>
                                                                                                                </li>
                                                                                                                <li>
                                                                                                                    <a href="/babui/assets/client-view/product-brand/censis/">Censis</a>
                                                                                                                </li>
                                                                                                            </ul>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-5a81dc4"
                                                                                             data-id="5a81dc4"
                                                                                             data-element_type="column">
                                                                                            <div class="elementor-column-wrap--5a81dc4 elementor-widget-wrap elementor-element-populated">
                                                                                                <div class="elementor-element elementor-element-fa4ad39 elementor-button-dashed elementor-widget elementor-widget-button"
                                                                                                     data-id="fa4ad39"
                                                                                                     data-element_type="widget"
                                                                                                     data-widget_type="button.default">
                                                                                                    <div class="elementor-widget-container">
                                                                                                        <div class="elementor-button-wrapper">
                                                                                                            <a class="elementor-button elementor-button-link elementor-size-sm"
                                                                                                               href="/babui/assets/client-view/shop/">
						<span class="elementor-button-content-wrapper">
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
                                                                        <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-585ea7e rey-colbg--classic"
                                                                             data-id="585ea7e"
                                                                             data-element_type="column"
                                                                             data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                                                            <div class="elementor-column-wrap--585ea7e elementor-widget-wrap elementor-element-populated">
                                                                                <div class="elementor-element elementor-element-4fbbda7 elementor-widget elementor-widget-heading"
                                                                                     data-id="4fbbda7"
                                                                                     data-element_type="widget"
                                                                                     data-widget_type="heading.default">
                                                                                    <div class="elementor-widget-container">
                                                                                        <h3 class="elementor-heading-title elementor-size-default">
                                                                                            Complete your setup</h3>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="elementor-element elementor-element-87b685f elementor-button-dashed elementor-widget elementor-widget-button"
                                                                                     data-id="87b685f"
                                                                                     data-element_type="widget"
                                                                                     data-widget_type="button.default">
                                                                                    <div class="elementor-widget-container">
                                                                                        <div class="elementor-button-wrapper">
                                                                                            <a class="elementor-button elementor-button-link elementor-size-sm"
                                                                                               href="/babui/assets/client-view/shop/">
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
                                                    <li id="mobile-menu-item-1828"
                                                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1828 depth--0 --is-regular o-id-1826">
                                                        <a href="/babui/assets/client-view/new-arrivals/"><span
                                                                    style="transition-delay: 0.36s;">New Arrivals</span></a>
                                                    </li>
                                                    <li id="mobile-menu-item-1250"
                                                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1250 depth--0 --is-regular o-id-1234">
                                                        <a href="/babui/assets/client-view/brands/"><span
                                                                    style="transition-delay: 0.39s;">Brands</span></a>
                                                    </li>
                                                    <li id="mobile-menu-item-945"
                                                        class="menu-item menu-item-type-custom menu-item-object-custom menu-item-945 depth--0 --is-mega --is-mega-gs --mega-custom menu-item-has-children">
                                                        <a href="#"><span
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
                                                                    <div class="elementor-container elementor-column-gap-default">
                                                                        <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-f130896"
                                                                             data-id="f130896"
                                                                             data-element_type="column">
                                                                            <div class="elementor-column-wrap--f130896 elementor-widget-wrap elementor-element-populated">
                                                                                <div class="elementor-element elementor-element-f8d4f7d elementor-widget elementor-widget-heading"
                                                                                     data-id="f8d4f7d"
                                                                                     data-element_type="widget"
                                                                                     data-widget_type="heading.default">
                                                                                    <div class="elementor-widget-container">
                                                                                        <h5 class="elementor-heading-title elementor-size-default">
                                                                                            SITE</h5></div>
                                                                                </div>
                                                                                <div class="elementor-element elementor-element-2e3f54b reyEl-menu--vertical reyEl-menu--cols-1 --icons-start elementor-widget elementor-widget-reycore-menu"
                                                                                     data-id="2e3f54b"
                                                                                     data-element_type="widget"
                                                                                     data-widget_type="reycore-menu.custom-items">
                                                                                    <div class="elementor-widget-container">

                                                                                        <div class="rey-element reyEl-menu">
                                                                                            <div class="reyEl-menu-navWrapper">
                                                                                                <ul class="reyEl-menu-nav rey-navEl --menuHover-">
                                                                                                    <li class="menu-item ">
                                                                                                        <a class=""
                                                                                                           href="/babui/assets/client-view/contact/"><span>Contact</span></a>
                                                                                                    </li>
                                                                                                    <li class="menu-item ">
                                                                                                        <a class=""
                                                                                                           href="/babui/assets/client-view/about-us/"><span>About Us</span></a>
                                                                                                    </li>
                                                                                                    <li class="menu-item ">
                                                                                                        <a class=""
                                                                                                           href="/babui/assets/client-view/frequently-asked-questions/"><span>Frequently Asked Questions</span></a>
                                                                                                    </li>
                                                                                                    <li class="menu-item ">
                                                                                                        <a class=""
                                                                                                           href="/babui/assets/client-view/showrooms/"><span>Showrooms</span></a>
                                                                                                    </li>
                                                                                                    <li class="menu-item ">
                                                                                                        <a class=""
                                                                                                           href="/babui/assets/client-view/news/"><span>Blog</span></a>
                                                                                                    </li>
                                                                                                    <li class="menu-item ">
                                                                                                        <a class=""
                                                                                                           href="/babui/assets/client-view/2022/03/25/the-vivo-x-fold-has-a-fingerprint-reader-on-both-screens/"><span>Blog Post</span></a>
                                                                                                    </li>
                                                                                                    <li class="menu-item ">
                                                                                                        <a class=""
                                                                                                           href="/babui/assets/client-view/terms-conditions/"><span>Terms &amp; Conditions</span></a>
                                                                                                    </li>
                                                                                                </ul>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-6c885fc"
                                                                             data-id="6c885fc"
                                                                             data-element_type="column">
                                                                            <div class="elementor-column-wrap--6c885fc elementor-widget-wrap elementor-element-populated">
                                                                                <div class="elementor-element elementor-element-6f251c5 elementor-widget elementor-widget-heading"
                                                                                     data-id="6f251c5"
                                                                                     data-element_type="widget"
                                                                                     data-widget_type="heading.default">
                                                                                    <div class="elementor-widget-container">
                                                                                        <h5 class="elementor-heading-title elementor-size-default">
                                                                                            SHOP</h5></div>
                                                                                </div>
                                                                                <div class="elementor-element elementor-element-a2811d2 reyEl-menu--vertical reyEl-menu--cols-1 --icons-start elementor-widget elementor-widget-reycore-menu"
                                                                                     data-id="a2811d2"
                                                                                     data-element_type="widget"
                                                                                     data-widget_type="reycore-menu.custom-items">
                                                                                    <div class="elementor-widget-container">

                                                                                        <div class="rey-element reyEl-menu">
                                                                                            <div class="reyEl-menu-navWrapper">
                                                                                                <ul class="reyEl-menu-nav rey-navEl --menuHover-">
                                                                                                    <li class="menu-item current-menu-item">
                                                                                                        <a class=""
                                                                                                           href="/babui/assets/client-view/shop/"><span>Catalogue</span></a>
                                                                                                    </li>
                                                                                                    <li class="menu-item ">
                                                                                                        <a class=""
                                                                                                           href="/babui/assets/client-view/product-category/headphones/"><span>Category</span></a>
                                                                                                    </li>
                                                                                                    <li class="menu-item ">
                                                                                                        <a class=""
                                                                                                           href="/babui/assets/client-view/product/comfortable-over-ear-headphones/"><span>Product / Catalog Item</span></a>
                                                                                                    </li>
                                                                                                    <li class="menu-item ">
                                                                                                        <a class=""
                                                                                                           href="/babui/assets/client-view/wishlist/"><span>Wishlist</span></a>
                                                                                                    </li>
                                                                                                    <li class="menu-item ">
                                                                                                        <a class=""
                                                                                                           href="/babui/assets/client-view/checkout/"><span>Checkout</span></a>
                                                                                                    </li>
                                                                                                    <li class="menu-item ">
                                                                                                        <a class=""
                                                                                                           href="/babui/assets/client-view/cart/"><span>Cart</span></a>
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
                                                           href="#" target="_blank">
                                                            <svg aria-hidden="true" role="img"
                                                                 id="rey-icon-instagram-67735525f1d38"
                                                                 class="rey-icon rey-icon-instagram "
                                                                 viewBox="0 0 448 512">
                                                                <path d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z"></path>
                                                            </svg>
                                                        </a>
                                                        <a class="rey-mobileNav-socialIcons-link" rel="noreferrer"
                                                           href="#" target="_blank">
                                                            <svg aria-hidden="true" role="img"
                                                                 id="rey-icon-facebook-67735525f1d4c"
                                                                 class="rey-icon rey-icon-facebook "
                                                                 viewBox="0 0 512 512">
                                                                <path d="M504 256C504 119 393 8 256 8S8 119 8 256c0 123.78 90.69 226.38 209.25 245V327.69h-63V256h63v-54.64c0-62.15 37-96.48 93.67-96.48 27.14 0 55.52 4.84 55.52 4.84v61h-31.28c-30.8 0-40.41 19.12-40.41 38.73V256h68.78l-11 71.69h-57.78V501C413.31 482.38 504 379.78 504 256z"></path>
                                                            </svg>
                                                        </a>
                                                    </div>

                                                </div>
                                                <!-- .rey-mobileNav-social -->

                                                <a href="/babui/assets/client-view/my-account/"
                                                   class="rey-mobileNav--footerItem">
                                                    Connect to your account
                                                    <svg aria-hidden="true" role="img" id="rey-icon-user-67735525f1e4d"
                                                         class="rey-icon rey-icon-user " viewBox="0 0 24 24">
                                                        <path d="M8.68220488,13 L5.8,13 C4.7,11.6 4,9.9 4,8 C4,3.6 7.6,0 12,0 C16.4,0 20,3.6 20,8 C20,9.9 19.3,11.6 18.2,13 L15.3177951,13 C16.9344907,11.9250785 18,10.0869708 18,8 C18,4.6862915 15.3137085,2 12,2 C8.6862915,2 6,4.6862915 6,8 C6,10.0869708 7.06550934,11.9250785 8.68220488,13 Z"></path>
                                                        <path d="M18,14 L6,14 C2.7,14 0,16.7 0,20 L0,23 C0,23.6 0.4,24 1,24 L23,24 C23.6,24 24,23.6 24,23 L24,20 C24,16.7 21.3,14 18,14 Z M22,22 L2,22 L2,20 C2,17.8 3.8,16 6,16 L18,16 C20.2,16 22,17.8 22,20 L22,22 Z"></path>
                                                    </svg>
                                                </a>

                                            </div>
                                        </div>

                                    </nav>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-76c1f9b"
                         data-id="76c1f9b" data-element_type="column">
                        <div class="elementor-column-wrap--76c1f9b elementor-widget-wrap elementor-element-populated">
                            <div class="elementor-element elementor-element-5340c584 elementor-widget__width-auto --inline-layout-ov --inline-mobile-icon --has-button-no elementor-widget elementor-widget-reycore-header-search"
                                 data-id="5340c584" data-element_type="widget"
                                 data-widget_type="reycore-header-search.default">
                                <div class="elementor-widget-container">

                                    <div class="rey-headerSearch rey-headerIcon js-rey-headerSearch  --tp-before --hit-before">

                                        <button class="btn rey-headerIcon-btn rey-headerSearch-toggle js-rey-headerSearch-toggle">


		<span class="__icon rey-headerIcon-icon" aria-hidden="true"><svg aria-hidden="true" role="img"
                                                                         id="rey-icon-search-67735525f2987"
                                                                         class="rey-icon rey-icon-search icon-search"
                                                                         viewBox="0 0 24 24"><circle
                        stroke="currentColor" stroke-width="2.2" fill="none" cx="11" cy="11" r="10"></circle>
			<path d="M20.0152578,17.8888876 L23.5507917,21.4244215 C24.1365782,22.010208 24.1365782,22.9599554 23.5507917,23.5457419 C22.9650053,24.1315283 22.0152578,24.1315283 21.4294714,23.5457419 L17.8939375,20.010208 C17.3081511,19.4244215 17.3081511,18.4746741 17.8939375,17.8888876 C18.4797239,17.3031012 19.4294714,17.3031012 20.0152578,17.8888876 Z"
                  fill="currentColor" stroke="none"></path></svg> <svg data-abs="" data-transparent=""
                                                                       aria-hidden="true" role="img"
                                                                       id="rey-icon-close-67735525f299a"
                                                                       class="rey-icon rey-icon-close icon-close"
                                                                       viewBox="0 0 110 110"><g stroke="none"
                                                                                                stroke-width="1"
                                                                                                fill="none"
                                                                                                fill-rule="evenodd"
                                                                                                stroke-linecap="square"><path
                            d="M4.79541854,4.29541854 L104.945498,104.445498 L4.79541854,4.29541854 Z"
                            stroke="currentColor" stroke-width="var(--stroke-width, 12px)"></path><path
                            d="M4.79541854,104.704581 L104.945498,4.55450209 L4.79541854,104.704581 Z"
                            stroke="currentColor" stroke-width="var(--stroke-width, 12px)"></path></g></svg></span>
                                            <span class="screen-reader-text">Search open</span>

                                        </button>
                                        <!-- .rey-headerSearch-toggle -->

                                    </div>
                                </div>
                            </div>
                            <div class="elementor-element elementor-element-516c983e elementor-widget__width-auto elementor-widget elementor-widget-reycore-header-account"
                                 data-id="516c983e" data-element_type="widget"
                                 data-widget_type="reycore-header-account.default">
                                <div class="elementor-widget-container">

                                    <div class="rey-headerAccount rey-headerIcon ">
                                        <button class="btn rey-headerIcon-btn js-rey-headerAccount rey-headerAccount-btn rey-headerAccount-btn--icon --hit-icon"
                                                data-layout="drop">

                                            <span class="screen-reader-text">Open Account details</span>

                                            <span class="__icon rey-headerIcon-icon" aria-hidden="true"><svg
                                                        aria-hidden="true" role="img" id="rey-icon-user-67735525f3263"
                                                        class="rey-icon rey-icon-user rey-headerAccount-btnIcon"
                                                        viewBox="0 0 24 24"><path
                                                            d="M8.68220488,13 L5.8,13 C4.7,11.6 4,9.9 4,8 C4,3.6 7.6,0 12,0 C16.4,0 20,3.6 20,8 C20,9.9 19.3,11.6 18.2,13 L15.3177951,13 C16.9344907,11.9250785 18,10.0869708 18,8 C18,4.6862915 15.3137085,2 12,2 C8.6862915,2 6,4.6862915 6,8 C6,10.0869708 7.06550934,11.9250785 8.68220488,13 Z"></path><path
                                                            d="M18,14 L6,14 C2.7,14 0,16.7 0,20 L0,23 C0,23.6 0.4,24 1,24 L23,24 C23.6,24 24,23.6 24,23 L24,20 C24,16.7 21.3,14 18,14 Z M22,22 L2,22 L2,20 C2,17.8 3.8,16 6,16 L18,16 C20.2,16 22,17.8 22,20 L22,22 Z"></path></svg></span>
                                            <span class="rey-headerAccount-count rey-headerIcon-counter --hidden --minimal">

	<span class="rey-wishlistCounter-number" data-count="0"></span><svg data-transparent="" data-abs=""
                                                                        aria-hidden="true" role="img"
                                                                        id="rey-icon-close-67735525f34c4"
                                                                        class="rey-icon rey-icon-close __close-icon"
                                                                        viewBox="0 0 110 110"><g stroke="none"
                                                                                                 stroke-width="1"
                                                                                                 fill="none"
                                                                                                 fill-rule="evenodd"
                                                                                                 stroke-linecap="square"><path
                                                                d="M4.79541854,4.29541854 L104.945498,104.445498 L4.79541854,4.29541854 Z"
                                                                stroke="currentColor"
                                                                stroke-width="var(--stroke-width, 12px)"></path><path
                                                                d="M4.79541854,104.704581 L104.945498,4.55450209 L4.79541854,104.704581 Z"
                                                                stroke="currentColor"
                                                                stroke-width="var(--stroke-width, 12px)"></path></g></svg>
</span>
                                        </button>

                                    </div>
                                    <!-- .rey-headerAccount-wrapper -->
                                </div>
                            </div>
                            <div class="elementor-element elementor-element-58addace elementor-widget__width-auto elementor-widget elementor-widget-reycore-header-cart"
                                 data-id="58addace" data-element_type="widget"
                                 data-widget_type="reycore-header-cart.default">
                                <div class="elementor-widget-container">

                                    <div class="rey-headerCart-wrapper rey-headerIcon  " data-rey-cart-count="0">
                                        <button class="btn rey-headerIcon-btn rey-headerCart js-rey-headerCart"
                                                onclick="changeStyle()">
                                            <span class="__icon rey-headerIcon-icon " aria-hidden="true"><svg
                                                        aria-hidden="true" role="img" id="rey-icon-bag-67735525f3b76"
                                                        class="rey-icon rey-icon-bag " viewBox="0 0 24 24"><path
                                                            d="M21,3h-4.4C15.8,1.2,14,0,12,0S8.2,1.2,7.4,3H3C2.4,3,2,3.4,2,4v19c0,0.6,0.4,1,1,1h18c0.6,0,1-0.4,1-1V4  C22,3.4,21.6,3,21,3z M12,1c1.5,0,2.8,0.8,3.4,2H8.6C9.2,1.8,10.5,1,12,1z M20,22H4v-4h16V22z M20,17H4V5h3v4h1V5h8v4h1V5h3V17z"></path></svg></span>
                                            <span class="rey-headerIcon-counter --bubble"><span
                                                        class="__cart-count">0</span></span>
                                            <span class="screen-reader-text">Open cart</span>
                                        </button>
                                    </div>
                                    <!-- .rey-headerCart-wrapper -->
                                </div>
                            </div>
                            <div class="elementor-element elementor-element-e79eb82 elementor-widget__width-auto elementor-widget elementor-widget-reycore-trigger-v2"
                                 data-id="e79eb82" data-element_type="widget"
                                 data-widget_type="reycore-trigger-v2.default">
                                <div class="elementor-widget-container">
                                    <button class="btn rey-triggerBtn js-triggerBtn --button2 " data-trigger="click"
                                            data-action="offcanvas" title="See Categories" data-offcanvas-id="1297"
                                            aria-label="Open"><span class="rey-wicon"><svg
                                                    xmlns="http://www.w3.org/2000/svg"
                                                    xmlns:xlink="http://www.w3.org/1999/xlink" width="126px"
                                                    height="175px" viewBox="0 0 126 175"><g id="Page-1" stroke="none"
                                                                                            stroke-width="1" fill="none"
                                                                                            fill-rule="evenodd"
                                                                                            stroke-linejoin="round"><polygon
                                                            id="Path-2" stroke="#000000" stroke-width="12"
                                                            points="43 6 96.5 6 74 58 120 58 20 168.5 43 90 6 90"></polygon></g></svg></span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <div class="rey-overlay rey-overlay--header" style="opacity:0;"></div>
        <div class="rey-overlay rey-overlay--header-top" style="opacity:0;"></div>

    </header>
    <!-- .rey-siteHeader -->

    <section class="rey-pageCover rey-pageCover--h-rel">
        <div data-elementor-type="wp-post" data-elementor-id="681" class="elementor elementor-681"
             data-elementor-gstype="cover" data-page-el-selector="body.elementor-page-681">
            <section
                    class="elementor-section elementor-top-section elementor-element elementor-element-2042b32 rey-flexWrap elementor-section-content-middle elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                    data-id="2042b32" data-element_type="section">
                <div class="elementor-container elementor-column-gap-default">
                    <div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-fd30c99"
                         data-id="fd30c99" data-element_type="column">
                        <div class="elementor-column-wrap--fd30c99 elementor-widget-wrap elementor-element-populated">
                            <div class="elementor-element elementor-element-5678faf elementor-widget elementor-widget-reycore-breadcrumbs"
                                 data-id="5678faf" data-element_type="widget"
                                 data-widget_type="reycore-breadcrumbs.default">
                                <div class="elementor-widget-container">

                                    <div class="rey-element reyEl-breadcrumbs">

                                        <nav class="rey-breadcrumbs">
                                            <div class="rey-breadcrumbs-item"><a
                                                        href="https://demos.reytheme.com/san-francisco">Home</a></div>
                                            <span class="rey-breadcrumbs-del">›</span>
                                            <div class="rey-breadcrumbs-item">Shop</div>
                                        </nav>
                                    </div>
                                    <!-- .reyEl-breadcrumbs -->
                                </div>
                            </div>
                            <div class="elementor-element elementor-element-47c1a83 elementor-widget elementor-widget-heading"
                                 data-id="47c1a83" data-element_type="widget" data-widget_type="heading.dynamic_title">
                                <div class="elementor-widget-container">
                                    <h1 class="elementor-heading-title">Shop</h1></div>
                            </div>
                            <div class="elementor-element elementor-element-ae8578b elementor-widget elementor-widget-text-editor"
                                 data-id="ae8578b" data-element_type="widget"
                                 data-widget_type="text-editor.dynamic_text">
                                <div class="elementor-widget-container">
                                    <div class="elementor-text-editor elementor-clearfix">
                                        <p>This is where you can browse products in this store.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-54b4c39"
                         data-id="54b4c39" data-element_type="column">
                        <div class="elementor-column-wrap--54b4c39 elementor-widget-wrap elementor-element-populated">
                            <div class="elementor-element elementor-element-a0ef377 elementor-widget elementor-widget-reycore-carousel"
                                 data-id="a0ef377" data-element_type="widget"
                                 data-widget_type="reycore-carousel.default">
                                <div class="elementor-widget-container">
                                    <div data-layout="soho"
                                         class="rey-carouselEl --product_cat --direction-ltr rey-sliderComp-nav"
                                         data-carousel-settings="{&quot;type&quot;:&quot;slide&quot;,&quot;direction&quot;:&quot;ltr&quot;,&quot;items_to_show&quot;:4,&quot;infinite&quot;:true,&quot;autoplay&quot;:false,&quot;pauseOnHover&quot;:false,&quot;interval&quot;:9000,&quot;customArrows&quot;:&quot;arrows-a0ef377-141&quot;,&quot;pagination&quot;:true,&quot;speed&quot;:700,&quot;c_padding&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;top&quot;:&quot;0&quot;,&quot;right&quot;:&quot;40&quot;,&quot;bottom&quot;:&quot;0&quot;,&quot;left&quot;:&quot;0&quot;,&quot;isLinked&quot;:false},&quot;uniqueID&quot;:&quot;carousel-623e3498de8fc&quot;,&quot;targetSync&quot;:&quot;&quot;,&quot;free_drag&quot;:[],&quot;lazy_load&quot;:false,&quot;autoscroll&quot;:&quot;&quot;,&quot;autoscroll_rewind&quot;:false,&quot;autoscroll_pause_hover&quot;:false,&quot;bp_devices&quot;:{&quot;perPage&quot;:&quot;items_to_show&quot;,&quot;padding&quot;:&quot;c_padding&quot;},&quot;items_to_show_tablet&quot;:3,&quot;items_to_show_mobile&quot;:2,&quot;c_padding_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;top&quot;:&quot;&quot;,&quot;right&quot;:&quot;&quot;,&quot;bottom&quot;:&quot;&quot;,&quot;left&quot;:&quot;&quot;,&quot;isLinked&quot;:true},&quot;c_padding_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;top&quot;:&quot;&quot;,&quot;right&quot;:&quot;&quot;,&quot;bottom&quot;:&quot;&quot;,&quot;left&quot;:&quot;&quot;,&quot;isLinked&quot;:true}}"
                                         data-loaded="">
                                        <div class="splide carousel-623e3498de8fc splide--loop splide--ltr splide--draggable is-active is-overflow is-initialized rey-inView"
                                             data-slider-carousel-id="carousel-623e3498de8fc" id="splide01"
                                             role="region" aria-roledescription="carousel">
                                            <div class="splide__track splide__track--loop splide__track--ltr splide__track--draggable"
                                                 id="splide01-track" style="padding-right: 40px;" aria-live="polite"
                                                 aria-atomic="true">
                                                <div class="splide__list __slides" id="splide01-list"
                                                     role="presentation" style="transform: translateX(-980px);">

                                                    <div class="splide__slide __slide elementor-repeater-item-prod-cat-50 splide__slide--clone is-active"
                                                         id="splide01-clone01" role="tabpanel"
                                                         aria-roledescription="slide" aria-label="1 of 5"
                                                         aria-hidden="true">
                                                        <div class="rey-card --soho">
                                                            <div class="__media-wrapper"><a
                                                                        href="/babui/assets/client-view/product-category/wearables/"
                                                                        class="__media-link" aria-label="Wearables 5"
                                                                        tabindex="-1"><img fetchpriority="high"
                                                                                           width="265" height="300"
                                                                                           src="/babui/assets/client-view/wp-content/uploads/sites/24/2022/03/image_23-265x300.jpg"
                                                                                           class="__media" alt=""
                                                                                           decoding="async"
                                                                                           srcset="/babui/assets/client-view/wp-content/uploads/sites/24/2022/03/image_23-265x300.jpg 265w, /babui/assets/client-view/wp-content/uploads/sites/24/2022/03/image_23-330x374.jpg 330w, /babui/assets/client-view/wp-content/uploads/sites/24/2022/03/image_23.jpg 600w"
                                                                                           sizes="(max-width: 265px) 100vw, 265px"></a>
                                                                <div class="__overlay"></div>
                                                            </div>
                                                            <div class="__wrapper"><h2
                                                                        class="__captionEl __captionTitle "><a
                                                                            href="/babui/assets/client-view/product-category/wearables/"
                                                                            class="" aria-label="Wearables 5"
                                                                            tabindex="-1">Wearables <sup>5</sup></a>
                                                                </h2>
                                                                <div class="__captionEl __captionSubtitle">Tristique
                                                                    auctor quis in leo facilisi eget cras. Turpis
                                                                    fermentum lacus proin sagittis, vivamus.
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="splide__slide __slide elementor-repeater-item-prod-cat-46 splide__slide--clone"
                                                         id="splide01-clone02" role="tabpanel"
                                                         aria-roledescription="slide" aria-label="2 of 5"
                                                         aria-hidden="true">
                                                        <div class="rey-card --soho">
                                                            <div class="__media-wrapper"><a
                                                                        href="/babui/assets/client-view/product-category/speakers/"
                                                                        class="__media-link" aria-label="Speakers 6"
                                                                        tabindex="-1"><img width="265" height="300"
                                                                                           src="/babui/assets/client-view/wp-content/uploads/sites/24/2022/03/image_14-265x300.jpg"
                                                                                           class="__media" alt=""
                                                                                           decoding="async"
                                                                                           srcset="/babui/assets/client-view/wp-content/uploads/sites/24/2022/03/image_14-265x300.jpg 265w, /babui/assets/client-view/wp-content/uploads/sites/24/2022/03/image_14-330x374.jpg 330w, /babui/assets/client-view/wp-content/uploads/sites/24/2022/03/image_14.jpg 600w"
                                                                                           sizes="(max-width: 265px) 100vw, 265px"></a>
                                                                <div class="__overlay"></div>
                                                            </div>
                                                            <div class="__wrapper"><h2
                                                                        class="__captionEl __captionTitle "><a
                                                                            href="/babui/assets/client-view/product-category/speakers/"
                                                                            class="" aria-label="Speakers 6"
                                                                            tabindex="-1">Speakers <sup>6</sup></a></h2>
                                                                <div class="__captionEl __captionSubtitle">Tristique
                                                                    auctor quis in leo facilisi eget cras. Turpis
                                                                    fermentum lacus proin sagittis, vivamus.
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="splide__slide __slide elementor-repeater-item-prod-cat-34 splide__slide--clone"
                                                         id="splide01-clone03" role="tabpanel"
                                                         aria-roledescription="slide" aria-label="3 of 5"
                                                         aria-hidden="true">
                                                        <div class="rey-card --soho">
                                                            <div class="__media-wrapper"><a
                                                                        href="/babui/assets/client-view/product-category/headphones/"
                                                                        class="__media-link" aria-label="Headphones 3"
                                                                        tabindex="-1"><img width="265" height="300"
                                                                                           src="/babui/assets/client-view/wp-content/uploads/sites/24/2022/03/image_17-265x300.jpg"
                                                                                           class="__media" alt=""
                                                                                           decoding="async"
                                                                                           srcset="/babui/assets/client-view/wp-content/uploads/sites/24/2022/03/image_17-265x300.jpg 265w, /babui/assets/client-view/wp-content/uploads/sites/24/2022/03/image_17-330x374.jpg 330w, /babui/assets/client-view/wp-content/uploads/sites/24/2022/03/image_17.jpg 600w"
                                                                                           sizes="(max-width: 265px) 100vw, 265px"></a>
                                                                <div class="__overlay"></div>
                                                            </div>
                                                            <div class="__wrapper"><h2
                                                                        class="__captionEl __captionTitle "><a
                                                                            href="/babui/assets/client-view/product-category/headphones/"
                                                                            class="" aria-label="Headphones 3"
                                                                            tabindex="-1">Headphones <sup>3</sup></a>
                                                                </h2>
                                                                <div class="__captionEl __captionSubtitle">Bring your
                                                                    favourite music with you wherever you go, with
                                                                    wireless headphones
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="splide__slide __slide elementor-repeater-item-prod-cat-27 splide__slide--clone"
                                                         id="splide01-clone04" role="tabpanel"
                                                         aria-roledescription="slide" aria-label="4 of 5"
                                                         aria-hidden="true">
                                                        <div class="rey-card --soho">
                                                            <div class="__media-wrapper"><a
                                                                        href="/babui/assets/client-view/product-category/cameras/"
                                                                        class="__media-link" aria-label="Cameras 5"
                                                                        tabindex="-1"><img width="265" height="300"
                                                                                           src="/babui/assets/client-view/wp-content/uploads/sites/24/2022/04/image_24-265x300.jpg"
                                                                                           class="__media" alt=""
                                                                                           decoding="async"
                                                                                           srcset="/babui/assets/client-view/wp-content/uploads/sites/24/2022/04/image_24-265x300.jpg 265w, /babui/assets/client-view/wp-content/uploads/sites/24/2022/04/image_24-330x374.jpg 330w, /babui/assets/client-view/wp-content/uploads/sites/24/2022/04/image_24.jpg 600w"
                                                                                           sizes="(max-width: 265px) 100vw, 265px"></a>
                                                                <div class="__overlay"></div>
                                                            </div>
                                                            <div class="__wrapper"><h2
                                                                        class="__captionEl __captionTitle "><a
                                                                            href="/babui/assets/client-view/product-category/cameras/"
                                                                            class="" aria-label="Cameras 5"
                                                                            tabindex="-1">Cameras <sup>5</sup></a></h2>
                                                                <div class="__captionEl __captionSubtitle">Tristique
                                                                    auctor quis in leo facilisi eget cras. Turpis
                                                                    fermentum lacus proin sagittis, vivamus.
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="splide__slide __slide elementor-repeater-item-prod-cat-17 splide__slide--clone is-prev"
                                                         id="splide01-clone05" role="tabpanel"
                                                         aria-roledescription="slide" aria-label="5 of 5"
                                                         aria-hidden="true">
                                                        <div class="rey-card --soho">
                                                            <div class="__media-wrapper"><a
                                                                        href="/babui/assets/client-view/product-category/accessories/"
                                                                        class="__media-link" aria-label="Accessories 5"
                                                                        tabindex="-1"><img width="265" height="300"
                                                                                           src="/babui/assets/client-view/wp-content/uploads/sites/24/2022/03/image_15-265x300.jpg"
                                                                                           class="__media" alt=""
                                                                                           decoding="async"
                                                                                           srcset="/babui/assets/client-view/wp-content/uploads/sites/24/2022/03/image_15-265x300.jpg 265w, /babui/assets/client-view/wp-content/uploads/sites/24/2022/03/image_15-330x374.jpg 330w, /babui/assets/client-view/wp-content/uploads/sites/24/2022/03/image_15.jpg 600w"
                                                                                           sizes="(max-width: 265px) 100vw, 265px"></a>
                                                                <div class="__overlay"></div>
                                                            </div>
                                                            <div class="__wrapper"><h2
                                                                        class="__captionEl __captionTitle "><a
                                                                            href="/babui/assets/client-view/product-category/accessories/"
                                                                            class="" aria-label="Accessories 5"
                                                                            tabindex="-1">Accessories <sup>5</sup></a>
                                                                </h2>
                                                                <div class="__captionEl __captionSubtitle">Tristique
                                                                    auctor quis in leo facilisi eget cras. Turpis
                                                                    fermentum lacus proin sagittis, vivamus.
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="splide__slide __slide elementor-repeater-item-prod-cat-50 is-active is-visible"
                                                         id="splide01-slide01" role="tabpanel"
                                                         aria-roledescription="slide" aria-label="1 of 5">
                                                        <div class="rey-card --soho">
                                                            <div class="__media-wrapper"><a
                                                                        href="/babui/assets/client-view/product-category/wearables/"
                                                                        class="__media-link"
                                                                        aria-label="Wearables 5"><img
                                                                            fetchpriority="high" width="265"
                                                                            height="300"
                                                                            src="/babui/assets/client-view/wp-content/uploads/sites/24/2022/03/image_23-265x300.jpg"
                                                                            class="__media" alt="" decoding="async"
                                                                            srcset="/babui/assets/client-view/wp-content/uploads/sites/24/2022/03/image_23-265x300.jpg 265w, /babui/assets/client-view/wp-content/uploads/sites/24/2022/03/image_23-330x374.jpg 330w, /babui/assets/client-view/wp-content/uploads/sites/24/2022/03/image_23.jpg 600w"
                                                                            sizes="(max-width: 265px) 100vw, 265px"></a>
                                                                <div class="__overlay"></div>
                                                            </div>
                                                            <div class="__wrapper"><h2
                                                                        class="__captionEl __captionTitle "><a
                                                                            href="/babui/assets/client-view/product-category/wearables/"
                                                                            class="" aria-label="Wearables 5">Wearables
                                                                        <sup>5</sup></a></h2>
                                                                <div class="__captionEl __captionSubtitle">Tristique
                                                                    auctor quis in leo facilisi eget cras. Turpis
                                                                    fermentum lacus proin sagittis, vivamus.
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="splide__slide __slide elementor-repeater-item-prod-cat-46 is-visible is-next"
                                                         id="splide01-slide02" role="tabpanel"
                                                         aria-roledescription="slide" aria-label="2 of 5">
                                                        <div class="rey-card --soho">
                                                            <div class="__media-wrapper"><a
                                                                        href="/babui/assets/client-view/product-category/speakers/"
                                                                        class="__media-link"
                                                                        aria-label="Speakers 6"><img width="265"
                                                                                                     height="300"
                                                                                                     src="/babui/assets/client-view/wp-content/uploads/sites/24/2022/03/image_14-265x300.jpg"
                                                                                                     class="__media"
                                                                                                     alt=""
                                                                                                     decoding="async"
                                                                                                     srcset="/babui/assets/client-view/wp-content/uploads/sites/24/2022/03/image_14-265x300.jpg 265w, /babui/assets/client-view/wp-content/uploads/sites/24/2022/03/image_14-330x374.jpg 330w, /babui/assets/client-view/wp-content/uploads/sites/24/2022/03/image_14.jpg 600w"
                                                                                                     sizes="(max-width: 265px) 100vw, 265px"></a>
                                                                <div class="__overlay"></div>
                                                            </div>
                                                            <div class="__wrapper"><h2
                                                                        class="__captionEl __captionTitle "><a
                                                                            href="/babui/assets/client-view/product-category/speakers/"
                                                                            class="" aria-label="Speakers 6">Speakers
                                                                        <sup>6</sup></a></h2>
                                                                <div class="__captionEl __captionSubtitle">Tristique
                                                                    auctor quis in leo facilisi eget cras. Turpis
                                                                    fermentum lacus proin sagittis, vivamus.
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="splide__slide __slide elementor-repeater-item-prod-cat-34 is-visible"
                                                         id="splide01-slide03" role="tabpanel"
                                                         aria-roledescription="slide" aria-label="3 of 5">
                                                        <div class="rey-card --soho">
                                                            <div class="__media-wrapper"><a
                                                                        href="/babui/assets/client-view/product-category/headphones/"
                                                                        class="__media-link"
                                                                        aria-label="Headphones 3"><img width="265"
                                                                                                       height="300"
                                                                                                       src="/babui/assets/client-view/wp-content/uploads/sites/24/2022/03/image_17-265x300.jpg"
                                                                                                       class="__media"
                                                                                                       alt=""
                                                                                                       decoding="async"
                                                                                                       srcset="/babui/assets/client-view/wp-content/uploads/sites/24/2022/03/image_17-265x300.jpg 265w, /babui/assets/client-view/wp-content/uploads/sites/24/2022/03/image_17-330x374.jpg 330w, /babui/assets/client-view/wp-content/uploads/sites/24/2022/03/image_17.jpg 600w"
                                                                                                       sizes="(max-width: 265px) 100vw, 265px"></a>
                                                                <div class="__overlay"></div>
                                                            </div>
                                                            <div class="__wrapper"><h2
                                                                        class="__captionEl __captionTitle "><a
                                                                            href="/babui/assets/client-view/product-category/headphones/"
                                                                            class="" aria-label="Headphones 3">Headphones
                                                                        <sup>3</sup></a></h2>
                                                                <div class="__captionEl __captionSubtitle">Bring your
                                                                    favourite music with you wherever you go, with
                                                                    wireless headphones
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="splide__slide __slide elementor-repeater-item-prod-cat-27 is-visible"
                                                         id="splide01-slide04" role="tabpanel"
                                                         aria-roledescription="slide" aria-label="4 of 5">
                                                        <div class="rey-card --soho">
                                                            <div class="__media-wrapper"><a
                                                                        href="/babui/assets/client-view/product-category/cameras/"
                                                                        class="__media-link" aria-label="Cameras 5"><img
                                                                            width="265" height="300"
                                                                            src="/babui/assets/client-view/wp-content/uploads/sites/24/2022/04/image_24-265x300.jpg"
                                                                            class="__media" alt="" decoding="async"
                                                                            srcset="/babui/assets/client-view/wp-content/uploads/sites/24/2022/04/image_24-265x300.jpg 265w, /babui/assets/client-view/wp-content/uploads/sites/24/2022/04/image_24-330x374.jpg 330w, /babui/assets/client-view/wp-content/uploads/sites/24/2022/04/image_24.jpg 600w"
                                                                            sizes="(max-width: 265px) 100vw, 265px"></a>
                                                                <div class="__overlay"></div>
                                                            </div>
                                                            <div class="__wrapper"><h2
                                                                        class="__captionEl __captionTitle "><a
                                                                            href="/babui/assets/client-view/product-category/cameras/"
                                                                            class="" aria-label="Cameras 5">Cameras
                                                                        <sup>5</sup></a></h2>
                                                                <div class="__captionEl __captionSubtitle">Tristique
                                                                    auctor quis in leo facilisi eget cras. Turpis
                                                                    fermentum lacus proin sagittis, vivamus.
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="splide__slide __slide elementor-repeater-item-prod-cat-17"
                                                         id="splide01-slide05" role="tabpanel"
                                                         aria-roledescription="slide" aria-label="5 of 5"
                                                         aria-hidden="true">
                                                        <div class="rey-card --soho">
                                                            <div class="__media-wrapper"><a
                                                                        href="/babui/assets/client-view/product-category/accessories/"
                                                                        class="__media-link" aria-label="Accessories 5"
                                                                        tabindex="-1"><img width="265" height="300"
                                                                                           src="/babui/assets/client-view/wp-content/uploads/sites/24/2022/03/image_15-265x300.jpg"
                                                                                           class="__media" alt=""
                                                                                           decoding="async"
                                                                                           srcset="/babui/assets/client-view/wp-content/uploads/sites/24/2022/03/image_15-265x300.jpg 265w, /babui/assets/client-view/wp-content/uploads/sites/24/2022/03/image_15-330x374.jpg 330w, /babui/assets/client-view/wp-content/uploads/sites/24/2022/03/image_15.jpg 600w"
                                                                                           sizes="(max-width: 265px) 100vw, 265px"></a>
                                                                <div class="__overlay"></div>
                                                            </div>
                                                            <div class="__wrapper"><h2
                                                                        class="__captionEl __captionTitle "><a
                                                                            href="/babui/assets/client-view/product-category/accessories/"
                                                                            class="" aria-label="Accessories 5"
                                                                            tabindex="-1">Accessories <sup>5</sup></a>
                                                                </h2>
                                                                <div class="__captionEl __captionSubtitle">Tristique
                                                                    auctor quis in leo facilisi eget cras. Turpis
                                                                    fermentum lacus proin sagittis, vivamus.
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="splide__slide __slide elementor-repeater-item-prod-cat-50 splide__slide--clone is-active"
                                                         id="splide01-clone06" role="tabpanel"
                                                         aria-roledescription="slide" aria-label="1 of 5"
                                                         aria-hidden="true">
                                                        <div class="rey-card --soho">
                                                            <div class="__media-wrapper"><a
                                                                        href="/babui/assets/client-view/product-category/wearables/"
                                                                        class="__media-link" aria-label="Wearables 5"
                                                                        tabindex="-1"><img fetchpriority="high"
                                                                                           width="265" height="300"
                                                                                           src="/babui/assets/client-view/wp-content/uploads/sites/24/2022/03/image_23-265x300.jpg"
                                                                                           class="__media" alt=""
                                                                                           decoding="async"
                                                                                           srcset="/babui/assets/client-view/wp-content/uploads/sites/24/2022/03/image_23-265x300.jpg 265w, /babui/assets/client-view/wp-content/uploads/sites/24/2022/03/image_23-330x374.jpg 330w, /babui/assets/client-view/wp-content/uploads/sites/24/2022/03/image_23.jpg 600w"
                                                                                           sizes="(max-width: 265px) 100vw, 265px"></a>
                                                                <div class="__overlay"></div>
                                                            </div>
                                                            <div class="__wrapper"><h2
                                                                        class="__captionEl __captionTitle "><a
                                                                            href="/babui/assets/client-view/product-category/wearables/"
                                                                            class="" aria-label="Wearables 5"
                                                                            tabindex="-1">Wearables <sup>5</sup></a>
                                                                </h2>
                                                                <div class="__captionEl __captionSubtitle">Tristique
                                                                    auctor quis in leo facilisi eget cras. Turpis
                                                                    fermentum lacus proin sagittis, vivamus.
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="splide__slide __slide elementor-repeater-item-prod-cat-46 splide__slide--clone"
                                                         id="splide01-clone07" role="tabpanel"
                                                         aria-roledescription="slide" aria-label="2 of 5"
                                                         aria-hidden="true">
                                                        <div class="rey-card --soho">
                                                            <div class="__media-wrapper"><a
                                                                        href="/babui/assets/client-view/product-category/speakers/"
                                                                        class="__media-link" aria-label="Speakers 6"
                                                                        tabindex="-1"><img width="265" height="300"
                                                                                           src="/babui/assets/client-view/wp-content/uploads/sites/24/2022/03/image_14-265x300.jpg"
                                                                                           class="__media" alt=""
                                                                                           decoding="async"
                                                                                           srcset="/babui/assets/client-view/wp-content/uploads/sites/24/2022/03/image_14-265x300.jpg 265w, /babui/assets/client-view/wp-content/uploads/sites/24/2022/03/image_14-330x374.jpg 330w, /babui/assets/client-view/wp-content/uploads/sites/24/2022/03/image_14.jpg 600w"
                                                                                           sizes="(max-width: 265px) 100vw, 265px"></a>
                                                                <div class="__overlay"></div>
                                                            </div>
                                                            <div class="__wrapper"><h2
                                                                        class="__captionEl __captionTitle "><a
                                                                            href="/babui/assets/client-view/product-category/speakers/"
                                                                            class="" aria-label="Speakers 6"
                                                                            tabindex="-1">Speakers <sup>6</sup></a></h2>
                                                                <div class="__captionEl __captionSubtitle">Tristique
                                                                    auctor quis in leo facilisi eget cras. Turpis
                                                                    fermentum lacus proin sagittis, vivamus.
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="splide__slide __slide elementor-repeater-item-prod-cat-34 splide__slide--clone"
                                                         id="splide01-clone08" role="tabpanel"
                                                         aria-roledescription="slide" aria-label="3 of 5"
                                                         aria-hidden="true">
                                                        <div class="rey-card --soho">
                                                            <div class="__media-wrapper"><a
                                                                        href="/babui/assets/client-view/product-category/headphones/"
                                                                        class="__media-link" aria-label="Headphones 3"
                                                                        tabindex="-1"><img width="265" height="300"
                                                                                           src="/babui/assets/client-view/wp-content/uploads/sites/24/2022/03/image_17-265x300.jpg"
                                                                                           class="__media" alt=""
                                                                                           decoding="async"
                                                                                           srcset="/babui/assets/client-view/wp-content/uploads/sites/24/2022/03/image_17-265x300.jpg 265w, /babui/assets/client-view/wp-content/uploads/sites/24/2022/03/image_17-330x374.jpg 330w, /babui/assets/client-view/wp-content/uploads/sites/24/2022/03/image_17.jpg 600w"
                                                                                           sizes="(max-width: 265px) 100vw, 265px"></a>
                                                                <div class="__overlay"></div>
                                                            </div>
                                                            <div class="__wrapper"><h2
                                                                        class="__captionEl __captionTitle "><a
                                                                            href="/babui/assets/client-view/product-category/headphones/"
                                                                            class="" aria-label="Headphones 3"
                                                                            tabindex="-1">Headphones <sup>3</sup></a>
                                                                </h2>
                                                                <div class="__captionEl __captionSubtitle">Bring your
                                                                    favourite music with you wherever you go, with
                                                                    wireless headphones
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="splide__slide __slide elementor-repeater-item-prod-cat-27 splide__slide--clone"
                                                         id="splide01-clone09" role="tabpanel"
                                                         aria-roledescription="slide" aria-label="4 of 5"
                                                         aria-hidden="true">
                                                        <div class="rey-card --soho">
                                                            <div class="__media-wrapper"><a
                                                                        href="/babui/assets/client-view/product-category/cameras/"
                                                                        class="__media-link" aria-label="Cameras 5"
                                                                        tabindex="-1"><img width="265" height="300"
                                                                                           src="/babui/assets/client-view/wp-content/uploads/sites/24/2022/04/image_24-265x300.jpg"
                                                                                           class="__media" alt=""
                                                                                           decoding="async"
                                                                                           srcset="/babui/assets/client-view/wp-content/uploads/sites/24/2022/04/image_24-265x300.jpg 265w, /babui/assets/client-view/wp-content/uploads/sites/24/2022/04/image_24-330x374.jpg 330w, /babui/assets/client-view/wp-content/uploads/sites/24/2022/04/image_24.jpg 600w"
                                                                                           sizes="(max-width: 265px) 100vw, 265px"></a>
                                                                <div class="__overlay"></div>
                                                            </div>
                                                            <div class="__wrapper"><h2
                                                                        class="__captionEl __captionTitle "><a
                                                                            href="/babui/assets/client-view/product-category/cameras/"
                                                                            class="" aria-label="Cameras 5"
                                                                            tabindex="-1">Cameras <sup>5</sup></a></h2>
                                                                <div class="__captionEl __captionSubtitle">Tristique
                                                                    auctor quis in leo facilisi eget cras. Turpis
                                                                    fermentum lacus proin sagittis, vivamus.
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="splide__slide __slide elementor-repeater-item-prod-cat-17 splide__slide--clone"
                                                         id="splide01-clone10" role="tabpanel"
                                                         aria-roledescription="slide" aria-label="5 of 5"
                                                         aria-hidden="true">
                                                        <div class="rey-card --soho">
                                                            <div class="__media-wrapper"><a
                                                                        href="/babui/assets/client-view/product-category/accessories/"
                                                                        class="__media-link" aria-label="Accessories 5"
                                                                        tabindex="-1"><img width="265" height="300"
                                                                                           src="/babui/assets/client-view/wp-content/uploads/sites/24/2022/03/image_15-265x300.jpg"
                                                                                           class="__media" alt=""
                                                                                           decoding="async"
                                                                                           srcset="/babui/assets/client-view/wp-content/uploads/sites/24/2022/03/image_15-265x300.jpg 265w, /babui/assets/client-view/wp-content/uploads/sites/24/2022/03/image_15-330x374.jpg 330w, /babui/assets/client-view/wp-content/uploads/sites/24/2022/03/image_15.jpg 600w"
                                                                                           sizes="(max-width: 265px) 100vw, 265px"></a>
                                                                <div class="__overlay"></div>
                                                            </div>
                                                            <div class="__wrapper"><h2
                                                                        class="__captionEl __captionTitle "><a
                                                                            href="/babui/assets/client-view/product-category/accessories/"
                                                                            class="" aria-label="Accessories 5"
                                                                            tabindex="-1">Accessories <sup>5</sup></a>
                                                                </h2>
                                                                <div class="__captionEl __captionSubtitle">Tristique
                                                                    auctor quis in leo facilisi eget cras. Turpis
                                                                    fermentum lacus proin sagittis, vivamus.
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <ul class="splide__pagination rey-sliderDots pagination-a0ef377-141 splide__pagination--ltr"
                                                data-position-y="top" data-position-x="right" data-arrange="outside"
                                                data-style="bars" data-lazy-hidden="" role="tablist"
                                                aria-label="Select a slide to show">
                                                <li role="presentation">
                                                    <button class="splide__pagination__page is-active" type="button"
                                                            role="tab"
                                                            aria-controls="splide01-slide01 splide01-slide02 splide01-slide03 splide01-slide04"
                                                            aria-label="Go to page 1" aria-selected="true"></button>
                                                </li>
                                                <li role="presentation">
                                                    <button class="splide__pagination__page" type="button" role="tab"
                                                            aria-controls="splide01-slide02 splide01-slide03 splide01-slide04 splide01-slide05"
                                                            aria-label="Go to page 2" tabindex="-1"></button>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-0a94a32"
                         data-id="0a94a32" data-element_type="column">
                        <div class="elementor-column-wrap--0a94a32 elementor-widget-wrap elementor-element-populated">
                            <div class="elementor-element elementor-element-9f82550 elementor-widget-divider--view-line elementor-widget elementor-widget-divider"
                                 data-id="9f82550" data-element_type="widget" data-widget_type="divider.default">
                                <div class="elementor-widget-container">
                                    <div class="elementor-divider">
			<span class="elementor-divider-separator">
						</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </section>
    <!-- .rey-pageCover -->

    <div id="content" class="rey-siteContent ">

        <div class="rey-siteContainer ">
            <div class="rey-siteRow">


                <main id="main" class="rey-siteMain --filter-panel">
                    <header class="woocommerce-products-header">

                    </header>
                    <div class="reyajfilter-before-products --anim-default">
                        <div class="reyajfilter-updater --invisible">
                            <div class="rey-lineLoader"></div>
                        </div>
                        <div class="woocommerce-notices-wrapper"></div>
                        <div class="rey-loopHeader --has-filter-btn --active-pos-above_grid">
                            <div class="woocommerce-result-count">
                                <span>Showing 1–16 of 24 results</span></div>

                            <div class="rey-pppSelector rey-loopInlineList">

                                <span class="rey-loopInlineList__label">SHOW</span>

                                <ul class="rey-loopInlineList-list">
                                    <li data-count="16" class="is-active">16</li>
                                    <li data-count="32" class="">32</li>
                                    <li data-count="64" class="">64</li>
                                </ul>

                                <div class="__loop-separator --dnone-md --dnone-sm"></div>

                            </div>

                            <div class="rey-viewSelector rey-loopInlineList --is-visible">

                                <span class="rey-loopInlineList__label">VIEW</span>

                                <ul class="rey-loopInlineList-list rey-viewSelector-list-dk">
                                    <li data-count="2">2</li>
                                    <li data-count="3">3</li>
                                    <li data-count="4" class="is-active">4</li>
                                </ul>


                                <div class="__loop-separator --dnone-md --dnone-sm"></div>

                            </div>

                            <form class="woocommerce-ordering rey-loopSelectList" method="get">

                                <label class="btn btn-line" for="catalog-orderby-list">
                                    <span>Default sorting</span>
                                    <select name="orderby" class="orderby" aria-label="Shop order"
                                            id="catalog-orderby-list">
                                        <option value="menu_order" selected="selected">Default sorting</option>
                                        <option value="popularity">Sort by popularity</option>
                                        <option value="rating">Sort by average rating</option>
                                        <option value="date">Sort by latest</option>
                                        <option value="price">Sort by price: low to high</option>
                                        <option value="price-desc">Sort by price: high to low</option>
                                    </select>
                                </label>

                                <input type="hidden" name="paged" value="1">
                            </form>

                            <div class="rey-filterBtn rey-filterBtn--pos-right  " data-target="filters-sidebar">

                                <div class="__loop-separator --dnone-md --dnone-sm"></div>

                                <button class="btn btn-line rey-filterBtn__label js-rey-filterBtn-open"
                                        aria-label="Open filters">

                                    <svg aria-hidden="true" role="img" id="rey-icon-sliders-6773552608ca9"
                                         class="rey-icon rey-icon-sliders " viewBox="0 0 32 32">
                                        <path d="M24.4766968,14.7761548 L24.4766968,9.88088774 L31.8197368,9.88088774 L31.8197368,4.98552774 L24.4766968,4.98552774 L24.4766968,0.0901677419 L19.5814297,0.0901677419 L19.5814297,4.98552774 L1.03225807e-05,4.98552774 L1.03225807e-05,9.88088774 L19.5814297,9.88088774 L19.5814297,14.7761548 L24.4766968,14.7761548 Z M12.2408258,31.9098839 L12.2408258,27.0145239 L31.8197677,27.0145239 L31.8197677,22.1191639 L12.2408258,22.1191639 L12.2408258,17.2238968 L7.34304,17.2238968 L7.34304,22.1191639 L2.84217094e-14,22.1191639 L2.84217094e-14,27.0145239 L7.34304,27.0145239 L7.34304,31.9098839 L12.2408258,31.9098839 Z"
                                              id="Shape" fill-rule="nonzero"></path>
                                    </svg>
                                    <span>FILTER</span>


                                </button>


                            </div>
                            <div class="reyajfilter-widget-hidden woocommerce reyajfilter-ajax-term-filter widget widget_reyajfilter-active-filters"></div>
                        </div>
                        <ul class="products --skin-proto rey-wcGap-default rey-wcGrid-default --paginated --infinite columns-4 --vs-is-visible"
                            data-cols="4" data-cols-tablet="2" data-cols-mobile="2" data-skin="proto"
                            data-discount-mobile-top="yes" data-params="[]">

                            <li class="rey-swatches rey-swatches--stretch-labels product type-product post-141 status-publish first instock product_cat-earbuds product_cat-headphones product_cat-on-ear product_cat-wireless has-post-thumbnail sale shipping-taxable purchasable product-type-variable is-animated --shadow- --shadow-h-1 --extraImg-second --extraImg-mobile rey-wc-skin--proto rey-wc-loopAlign-left --uncropped"
                                data-pid="141">

                                <div class="rey-productInner ">
                                    <div class="rey-productThumbnail"><a
                                                href="/babui/assets/client-view/product/adaptive-wireless-earbuds/"
                                                class="woocommerce-LoopProduct-link woocommerce-loop-product__link"
                                                aria-label="Adaptive wireless earbuds"><img width="330" height="361"
                                                                                            src="/babui/assets/client-view/wp-content/uploads/sites/24/2022/02/17-330x361.jpg"
                                                                                            class="rey-productThumbnail__second"
                                                                                            alt="" decoding="async"
                                                                                            srcset="/babui/assets/client-view/wp-content/uploads/sites/24/2022/02/17-330x361.jpg 330w, /babui/assets/client-view/wp-content/uploads/sites/24/2022/02/17-274x300.jpg 274w, /babui/assets/client-view/wp-content/uploads/sites/24/2022/02/17-936x1024.jpg 936w, /babui/assets/client-view/wp-content/uploads/sites/24/2022/02/17-768x840.jpg 768w, /babui/assets/client-view/wp-content/uploads/sites/24/2022/02/17-600x656.jpg 600w, /babui/assets/client-view/wp-content/uploads/sites/24/2022/02/17.jpg 1024w"
                                                                                            sizes="(max-width: 330px) 100vw, 330px"><img
                                                    fetchpriority="high" width="330" height="361"
                                                    src="/babui/assets/client-view/wp-content/uploads/sites/24/2022/02/16-330x361.jpg"
                                                    class="rey-thumbImg img--1 attachment-woocommerce_thumbnail size-woocommerce_thumbnail"
                                                    alt="" decoding="async"
                                                    srcset="/babui/assets/client-view/wp-content/uploads/sites/24/2022/02/16-330x361.jpg 330w, /babui/assets/client-view/wp-content/uploads/sites/24/2022/02/16-274x300.jpg 274w, /babui/assets/client-view/wp-content/uploads/sites/24/2022/02/16-936x1024.jpg 936w, /babui/assets/client-view/wp-content/uploads/sites/24/2022/02/16-768x840.jpg 768w, /babui/assets/client-view/wp-content/uploads/sites/24/2022/02/16-600x656.jpg 600w, /babui/assets/client-view/wp-content/uploads/sites/24/2022/02/16.jpg 1024w"
                                                    sizes="(max-width: 330px) 100vw, 330px"></a>
                                        <div class="rey-thPos rey-thPos--top-left" data-position="top-left"><span
                                                    class="rey-discount">Save $40.00</span>
                                            <div class="rey-schedSale --loop" data-position="top_left">
                                                <div class="rey-badgeSale --loop --bg">
                                                    <svg class="rey-icon" width="100%" height="100%" viewBox="0 0 14 14"
                                                         fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M7.72461 0.0374277C7.48398 0.0131834 7.24229 0.0011146 7.00048 0.00122141H6.99322C6.59303 0.00784321 6.27305 0.335943 6.27646 0.736241V3.62164C6.2755 3.71883 6.29526 3.81506 6.33435 3.90402C6.45963 4.20222 6.76808 4.38058 7.08892 4.34053C7.45952 4.28499 7.73145 3.96341 7.72461 3.58885V1.49764C10.4284 1.85255 12.4746 4.11806 12.553 6.844C12.6314 9.56993 10.7189 11.9494 8.04 12.4591C5.36105 12.9688 2.70838 11.458 1.78026 8.89376C0.852143 6.32953 1.92317 3.47083 4.30776 2.14775C4.62475 1.96822 4.7574 1.57988 4.61642 1.24398L4.61557 1.24195C4.53653 1.05088 4.37975 0.902747 4.18451 0.8345C3.98938 0.76636 3.77439 0.78473 3.59357 0.884911C0.576484 2.56599 -0.763363 6.19656 0.43828 9.43451C1.63982 12.6726 5.02377 14.5501 8.40708 13.8559C11.7904 13.1618 14.1617 10.1036 13.9913 6.65399C13.8209 3.20446 11.1598 0.394791 7.72461 0.0374277Z"
                                                              fill="currentColor"></path>
                                                        <path d="M4.35554 4.67456C4.64679 5.44151 5.59969 7.25235 6.31249 8.02336C6.7507 8.51807 7.49896 8.58429 8.01728 8.17438C8.27659 7.95682 8.43263 7.64047 8.44759 7.30234C8.46243 6.9643 8.33459 6.63546 8.09546 6.39601C7.34997 5.65063 5.45796 4.66302 4.66463 4.36184C4.57577 4.32841 4.47548 4.35041 4.40862 4.41791C4.34187 4.48552 4.32104 4.58602 4.35554 4.67456Z"
                                                              fill="currentColor"></path>
                                                    </svg>
                                                    <span class="__text">Ends in <strong>+2 days</strong></span></div>
                                            </div>
                                        </div>
                                        <div class="rey-thPos rey-thPos--top-right" data-position="top-right">
                                            <div class="rey-thPos-item --no-margins">
                                                <button class="--icon-style-rounded rey-wishlistBtn rey-wishlistBtn-link"
                                                        data-lazy-hidden="" data-id="141" title="Add to wishlist"
                                                        aria-label="Add to wishlist">
                                                    <svg aria-hidden="true" role="img"
                                                         class="rey-icon rey-icon-heart rey-wishlistBtn-icon"
                                                         viewBox="0 0 24 24">
                                                        <path fill="var(--icon-fill, none)" stroke="currentColor"
                                                              stroke-width="var(--stroke-width, 1.8px)"
                                                              stroke-linecap="round" stroke-linejoin="round"
                                                              d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path>
                                                    </svg>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="rey-loopDetails --padded">
                                        <div data-attribute="color" data-position="first"
                                             class="rey-productVariations2 --single-attr  --side">
                                            <form class="variations_form cart --catalog"
                                                  action="/babui/assets/client-view/product/adaptive-wireless-earbuds/"
                                                  method="post" enctype="multipart/form-data" data-product_id="141"
                                                  data-product_variations="[{&quot;attributes&quot;:{&quot;attribute_pa_color&quot;:&quot;&quot;},&quot;availability_html&quot;:&quot;&quot;,&quot;backorders_allowed&quot;:false,&quot;dimensions&quot;:{&quot;length&quot;:&quot;&quot;,&quot;width&quot;:&quot;&quot;,&quot;height&quot;:&quot;&quot;},&quot;dimensions_html&quot;:&quot;N\/A&quot;,&quot;display_price&quot;:149,&quot;display_regular_price&quot;:189,&quot;image&quot;:{&quot;title&quot;:&quot;16&quot;,&quot;caption&quot;:&quot;&quot;,&quot;url&quot;:&quot;https:\/\/demos.reytheme.com\/san-francisco\/wp-content\/uploads\/sites\/24\/2022\/02\/16.jpg&quot;,&quot;alt&quot;:&quot;16&quot;,&quot;src&quot;:&quot;https:\/\/demos.reytheme.com\/san-francisco\/wp-content\/uploads\/sites\/24\/2022\/02\/16-600x656.jpg&quot;,&quot;srcset&quot;:&quot;https:\/\/demos.reytheme.com\/san-francisco\/wp-content\/uploads\/sites\/24\/2022\/02\/16-600x656.jpg 600w, https:\/\/demos.reytheme.com\/san-francisco\/wp-content\/uploads\/sites\/24\/2022\/02\/16-274x300.jpg 274w, https:\/\/demos.reytheme.com\/san-francisco\/wp-content\/uploads\/sites\/24\/2022\/02\/16-936x1024.jpg 936w, https:\/\/demos.reytheme.com\/san-francisco\/wp-content\/uploads\/sites\/24\/2022\/02\/16-768x840.jpg 768w, https:\/\/demos.reytheme.com\/san-francisco\/wp-content\/uploads\/sites\/24\/2022\/02\/16-330x361.jpg 330w, https:\/\/demos.reytheme.com\/san-francisco\/wp-content\/uploads\/sites\/24\/2022\/02\/16.jpg 1024w&quot;,&quot;sizes&quot;:&quot;(max-width: 600px) 100vw, 600px&quot;,&quot;full_src&quot;:&quot;https:\/\/demos.reytheme.com\/san-francisco\/wp-content\/uploads\/sites\/24\/2022\/02\/16.jpg&quot;,&quot;full_src_w&quot;:1024,&quot;full_src_h&quot;:1120,&quot;gallery_thumbnail_src&quot;:&quot;https:\/\/demos.reytheme.com\/san-francisco\/wp-content\/uploads\/sites\/24\/2022\/02\/16-100x100.jpg&quot;,&quot;gallery_thumbnail_src_w&quot;:100,&quot;gallery_thumbnail_src_h&quot;:100,&quot;thumb_src&quot;:&quot;https:\/\/demos.reytheme.com\/san-francisco\/wp-content\/uploads\/sites\/24\/2022\/02\/16-330x361.jpg&quot;,&quot;thumb_src_w&quot;:330,&quot;thumb_src_h&quot;:361,&quot;src_w&quot;:600,&quot;src_h&quot;:656},&quot;image_id&quot;:142,&quot;is_downloadable&quot;:false,&quot;is_in_stock&quot;:true,&quot;is_purchasable&quot;:true,&quot;is_sold_individually&quot;:&quot;no&quot;,&quot;is_virtual&quot;:false,&quot;max_qty&quot;:&quot;&quot;,&quot;min_qty&quot;:1,&quot;price_html&quot;:&quot;&quot;,&quot;sku&quot;:&quot;&quot;,&quot;variation_description&quot;:&quot;&quot;,&quot;variation_id&quot;:234,&quot;variation_is_active&quot;:true,&quot;variation_is_visible&quot;:true,&quot;weight&quot;:&quot;&quot;,&quot;weight_html&quot;:&quot;N\/A&quot;,&quot;stock_status&quot;:&quot;instock&quot;,&quot;step_qty&quot;:1}]"
                                                  data-atc-text="Add to cart">
                                                <div class="variations">
                                                    <div class="__s-wrapper"><select style="display:none"
                                                                                     id="pa_color141" class=""
                                                                                     name="attribute_pa_color"
                                                                                     data-attribute_name="attribute_pa_color"
                                                                                     data-show_option_none="yes">
                                                            <option value="">Choose an option</option>
                                                            <option value="black">Black</option>
                                                            <option value="red">Red</option>
                                                        </select>
                                                        <div aria-label="color" data-attribute_name="attribute_pa_color"
                                                             style=""
                                                             class="rey-swatchList --type-color --light-tooltips --disabled-dim --deselection-clear">
                                                            <div title="Black" data-term-id="22" data-term-slug="black"
                                                                 data-attribute-name="pa_color" aria-label="Black"
                                                                 role="radio" aria-checked="false"
                                                                 class="rey-swatchList-item --type-color rey-swatchList-item--regular "
                                                                 data-description=""><span
                                                                        class="rey-swatchList-itemContent"
                                                                        style="background: #45464c;"></span></div>
                                                            <div title="Red" data-term-id="43" data-term-slug="red"
                                                                 data-attribute-name="pa_color" aria-label="Red"
                                                                 role="radio" aria-checked="false"
                                                                 class="rey-swatchList-item --type-color rey-swatchList-item--regular "
                                                                 data-description=""><span
                                                                        class="rey-swatchList-itemContent"
                                                                        style="background: #e75243;"></span></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                        <div class="rey-brandLink --catalog"><a
                                                    href="/babui/assets/client-view/product-brand/quantech/">Quantech</a>
                                        </div>
                                        <h2 class="woocommerce-loop-product__title"><a
                                                    href="/babui/assets/client-view/product/adaptive-wireless-earbuds/">Adaptive
                                                wireless earbuds</a></h2>
                                        <div class="__break"></div>
                                        <span class="price rey-loopPrice"><del aria-hidden="true"><span
                                                        class="woocommerce-Price-amount amount"><bdi><span
                                                                class="woocommerce-Price-currencySymbol">$</span>189.00</bdi></span></del> <span
                                                    class="screen-reader-text">Original price was: $189.00.</span><ins
                                                    aria-hidden="true"><span class="woocommerce-Price-amount amount"><bdi><span
                                                                class="woocommerce-Price-currencySymbol">$</span>149.00</bdi></span></ins><span
                                                    class="screen-reader-text">Current price is: $149.00.</span><span
                                                    class="rey-discount">Save $40.00</span></span>
                                        <div class="rey-loopButtons">
                                            <a href="/babui/assets/client-view/product/adaptive-wireless-earbuds/"
                                               data-quantity="1"
                                               class="button product_type_variable add_to_cart_button rey-btn--hover"
                                               data-product_id="141" data-product_sku=""
                                               aria-label="Select options for “Adaptive wireless earbuds”"
                                               rel="nofollow"><span class="__text">Select options</span></a> <span
                                                    id="woocommerce_loop_add_to_cart_link_describedby_141"
                                                    class="screen-reader-text">
		This product has multiple variants. The options may be chosen on the product page	</span>
                                            <button class="button rey-btn--hover rey-quickviewBtn js-rey-quickviewBtn"
                                                    data-id="141" title="QUICKVIEW">QUICKVIEW
                                            </button>
                                        </div>
                                    </div>
                                </div>

                            </li>


                            <li class="rey-swatches rey-swatches--stretch-labels product type-product post-842 status-publish instock product_cat-fitness-trackers product_cat-glasses product_cat-key-trackers product_cat-smartwatches product_cat-virtual-reality product_cat-wearables has-post-thumbnail sale shipping-taxable purchasable product-type-variable is-animated --shadow- --shadow-h-1 --extraImg-second --extraImg-mobile rey-wc-skin--proto rey-wc-loopAlign-left --uncropped"
                                data-pid="842">

                                <div class="rey-productInner ">
                                    <div class="rey-productThumbnail"><a
                                                href="/babui/assets/client-view/product/advanced-health-smartwatch/"
                                                class="woocommerce-LoopProduct-link woocommerce-loop-product__link"
                                                aria-label="Advanced Health Smartwatch"><img width="330" height="361"
                                                                                             src="/babui/assets/client-view/wp-content/uploads/sites/24/2022/03/20-330x361.jpg"
                                                                                             class="rey-productThumbnail__second"
                                                                                             alt="" decoding="async"
                                                                                             srcset="/babui/assets/client-view/wp-content/uploads/sites/24/2022/03/20-330x361.jpg 330w, /babui/assets/client-view/wp-content/uploads/sites/24/2022/03/20-274x300.jpg 274w, /babui/assets/client-view/wp-content/uploads/sites/24/2022/03/20-936x1024.jpg 936w, /babui/assets/client-view/wp-content/uploads/sites/24/2022/03/20-768x840.jpg 768w, /babui/assets/client-view/wp-content/uploads/sites/24/2022/03/20-600x656.jpg 600w, /babui/assets/client-view/wp-content/uploads/sites/24/2022/03/20.jpg 1024w"
                                                                                             sizes="(max-width: 330px) 100vw, 330px"><img
                                                    width="330" height="361"
                                                    src="/babui/assets/client-view/wp-content/uploads/sites/24/2022/03/21-330x361.jpg"
                                                    class="rey-thumbImg img--1 attachment-woocommerce_thumbnail size-woocommerce_thumbnail"
                                                    alt="" decoding="async"
                                                    srcset="/babui/assets/client-view/wp-content/uploads/sites/24/2022/03/21-330x361.jpg 330w, /babui/assets/client-view/wp-content/uploads/sites/24/2022/03/21-274x300.jpg 274w, /babui/assets/client-view/wp-content/uploads/sites/24/2022/03/21-936x1024.jpg 936w, /babui/assets/client-view/wp-content/uploads/sites/24/2022/03/21-768x840.jpg 768w, /babui/assets/client-view/wp-content/uploads/sites/24/2022/03/21-600x656.jpg 600w, /babui/assets/client-view/wp-content/uploads/sites/24/2022/03/21.jpg 1024w"
                                                    sizes="(max-width: 330px) 100vw, 330px"></a>
                                        <div class="rey-thPos rey-thPos--top-left" data-position="top-left"><span
                                                    class="rey-discount">Save $160.00</span>
                                            <div class="rey-schedSale --loop" data-position="top_left">
                                                <div class="rey-badgeSale --loop --bg">
                                                    <svg class="rey-icon" width="100%" height="100%" viewBox="0 0 14 14"
                                                         fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M7.72461 0.0374277C7.48398 0.0131834 7.24229 0.0011146 7.00048 0.00122141H6.99322C6.59303 0.00784321 6.27305 0.335943 6.27646 0.736241V3.62164C6.2755 3.71883 6.29526 3.81506 6.33435 3.90402C6.45963 4.20222 6.76808 4.38058 7.08892 4.34053C7.45952 4.28499 7.73145 3.96341 7.72461 3.58885V1.49764C10.4284 1.85255 12.4746 4.11806 12.553 6.844C12.6314 9.56993 10.7189 11.9494 8.04 12.4591C5.36105 12.9688 2.70838 11.458 1.78026 8.89376C0.852143 6.32953 1.92317 3.47083 4.30776 2.14775C4.62475 1.96822 4.7574 1.57988 4.61642 1.24398L4.61557 1.24195C4.53653 1.05088 4.37975 0.902747 4.18451 0.8345C3.98938 0.76636 3.77439 0.78473 3.59357 0.884911C0.576484 2.56599 -0.763363 6.19656 0.43828 9.43451C1.63982 12.6726 5.02377 14.5501 8.40708 13.8559C11.7904 13.1618 14.1617 10.1036 13.9913 6.65399C13.8209 3.20446 11.1598 0.394791 7.72461 0.0374277Z"
                                                              fill="currentColor"></path>
                                                        <path d="M4.35554 4.67456C4.64679 5.44151 5.59969 7.25235 6.31249 8.02336C6.7507 8.51807 7.49896 8.58429 8.01728 8.17438C8.27659 7.95682 8.43263 7.64047 8.44759 7.30234C8.46243 6.9643 8.33459 6.63546 8.09546 6.39601C7.34997 5.65063 5.45796 4.66302 4.66463 4.36184C4.57577 4.32841 4.47548 4.35041 4.40862 4.41791C4.34187 4.48552 4.32104 4.58602 4.35554 4.67456Z"
                                                              fill="currentColor"></path>
                                                    </svg>
                                                    <span class="__text">Ends in <strong>+1 day</strong></span></div>
                                            </div>
                                        </div>
                                        <div class="rey-thPos rey-thPos--top-right" data-position="top-right">
                                            <div class="rey-thPos-item --no-margins">
                                                <button class="--icon-style-rounded rey-wishlistBtn rey-wishlistBtn-link"
                                                        data-lazy-hidden="" data-id="842" title="Add to wishlist"
                                                        aria-label="Add to wishlist">
                                                    <svg aria-hidden="true" role="img"
                                                         class="rey-icon rey-icon-heart rey-wishlistBtn-icon"
                                                         viewBox="0 0 24 24">
                                                        <path fill="var(--icon-fill, none)" stroke="currentColor"
                                                              stroke-width="var(--stroke-width, 1.8px)"
                                                              stroke-linecap="round" stroke-linejoin="round"
                                                              d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path>
                                                    </svg>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="rey-loopDetails --padded">
                                        <div data-attribute="color" data-position="first"
                                             class="rey-productVariations2 --single-attr  --side">
                                            <form class="variations_form cart --catalog"
                                                  action="/babui/assets/client-view/product/advanced-health-smartwatch/"
                                                  method="post" enctype="multipart/form-data" data-product_id="842"
                                                  data-product_variations="[{&quot;attributes&quot;:{&quot;attribute_pa_color&quot;:&quot;&quot;},&quot;availability_html&quot;:&quot;&quot;,&quot;backorders_allowed&quot;:false,&quot;dimensions&quot;:{&quot;length&quot;:&quot;&quot;,&quot;width&quot;:&quot;&quot;,&quot;height&quot;:&quot;&quot;},&quot;dimensions_html&quot;:&quot;N\/A&quot;,&quot;display_price&quot;:389,&quot;display_regular_price&quot;:549,&quot;image&quot;:{&quot;title&quot;:&quot;21&quot;,&quot;caption&quot;:&quot;&quot;,&quot;url&quot;:&quot;https:\/\/demos.reytheme.com\/san-francisco\/wp-content\/uploads\/sites\/24\/2022\/03\/21.jpg&quot;,&quot;alt&quot;:&quot;21&quot;,&quot;src&quot;:&quot;https:\/\/demos.reytheme.com\/san-francisco\/wp-content\/uploads\/sites\/24\/2022\/03\/21-600x656.jpg&quot;,&quot;srcset&quot;:&quot;https:\/\/demos.reytheme.com\/san-francisco\/wp-content\/uploads\/sites\/24\/2022\/03\/21-600x656.jpg 600w, https:\/\/demos.reytheme.com\/san-francisco\/wp-content\/uploads\/sites\/24\/2022\/03\/21-274x300.jpg 274w, https:\/\/demos.reytheme.com\/san-francisco\/wp-content\/uploads\/sites\/24\/2022\/03\/21-936x1024.jpg 936w, https:\/\/demos.reytheme.com\/san-francisco\/wp-content\/uploads\/sites\/24\/2022\/03\/21-768x840.jpg 768w, https:\/\/demos.reytheme.com\/san-francisco\/wp-content\/uploads\/sites\/24\/2022\/03\/21-330x361.jpg 330w, https:\/\/demos.reytheme.com\/san-francisco\/wp-content\/uploads\/sites\/24\/2022\/03\/21.jpg 1024w&quot;,&quot;sizes&quot;:&quot;(max-width: 600px) 100vw, 600px&quot;,&quot;full_src&quot;:&quot;https:\/\/demos.reytheme.com\/san-francisco\/wp-content\/uploads\/sites\/24\/2022\/03\/21.jpg&quot;,&quot;full_src_w&quot;:1024,&quot;full_src_h&quot;:1120,&quot;gallery_thumbnail_src&quot;:&quot;https:\/\/demos.reytheme.com\/san-francisco\/wp-content\/uploads\/sites\/24\/2022\/03\/21-100x100.jpg&quot;,&quot;gallery_thumbnail_src_w&quot;:100,&quot;gallery_thumbnail_src_h&quot;:100,&quot;thumb_src&quot;:&quot;https:\/\/demos.reytheme.com\/san-francisco\/wp-content\/uploads\/sites\/24\/2022\/03\/21-330x361.jpg&quot;,&quot;thumb_src_w&quot;:330,&quot;thumb_src_h&quot;:361,&quot;src_w&quot;:600,&quot;src_h&quot;:656},&quot;image_id&quot;:845,&quot;is_downloadable&quot;:false,&quot;is_in_stock&quot;:true,&quot;is_purchasable&quot;:true,&quot;is_sold_individually&quot;:&quot;no&quot;,&quot;is_virtual&quot;:false,&quot;max_qty&quot;:&quot;&quot;,&quot;min_qty&quot;:1,&quot;price_html&quot;:&quot;&quot;,&quot;sku&quot;:&quot;&quot;,&quot;variation_description&quot;:&quot;&quot;,&quot;variation_id&quot;:869,&quot;variation_is_active&quot;:true,&quot;variation_is_visible&quot;:true,&quot;weight&quot;:&quot;&quot;,&quot;weight_html&quot;:&quot;N\/A&quot;,&quot;stock_status&quot;:&quot;instock&quot;,&quot;step_qty&quot;:1}]"
                                                  data-atc-text="Add to cart">
                                                <div class="variations">
                                                    <div class="__s-wrapper"><select style="display:none"
                                                                                     id="pa_color842" class=""
                                                                                     name="attribute_pa_color"
                                                                                     data-attribute_name="attribute_pa_color"
                                                                                     data-show_option_none="yes">
                                                            <option value="">Choose an option</option>
                                                            <option value="beige">Beige</option>
                                                            <option value="grey">Grey</option>
                                                            <option value="red">Red</option>
                                                        </select>
                                                        <div aria-label="color" data-attribute_name="attribute_pa_color"
                                                             style=""
                                                             class="rey-swatchList --type-color --light-tooltips --disabled-dim --deselection-clear">
                                                            <div title="Beige" data-term-id="20" data-term-slug="beige"
                                                                 data-attribute-name="pa_color" aria-label="Beige"
                                                                 role="radio" aria-checked="false"
                                                                 class="rey-swatchList-item --type-color rey-swatchList-item--regular "
                                                                 data-description=""><span
                                                                        class="rey-swatchList-itemContent"
                                                                        style="background: #dfc5a0;"></span></div>
                                                            <div title="Grey" data-term-id="33" data-term-slug="grey"
                                                                 data-attribute-name="pa_color" aria-label="Grey"
                                                                 role="radio" aria-checked="false"
                                                                 class="rey-swatchList-item --type-color rey-swatchList-item--regular "
                                                                 data-description=""><span
                                                                        class="rey-swatchList-itemContent"
                                                                        style="background: #dbdbdb;"></span></div>
                                                            <div title="Red" data-term-id="43" data-term-slug="red"
                                                                 data-attribute-name="pa_color" aria-label="Red"
                                                                 role="radio" aria-checked="false"
                                                                 class="rey-swatchList-item --type-color rey-swatchList-item--regular "
                                                                 data-description=""><span
                                                                        class="rey-swatchList-itemContent"
                                                                        style="background: #e75243;"></span></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                        <div class="rey-brandLink --catalog"><a
                                                    href="/babui/assets/client-view/product-brand/squarex/">SquareX</a>
                                        </div>
                                        <h2 class="woocommerce-loop-product__title"><a
                                                    href="/babui/assets/client-view/product/advanced-health-smartwatch/">Advanced
                                                Health Smartwatch</a></h2>
                                        <div class="__break"></div>
                                        <span class="price rey-loopPrice"><del aria-hidden="true"><span
                                                        class="woocommerce-Price-amount amount"><bdi><span
                                                                class="woocommerce-Price-currencySymbol">$</span>549.00</bdi></span></del> <span
                                                    class="screen-reader-text">Original price was: $549.00.</span><ins
                                                    aria-hidden="true"><span class="woocommerce-Price-amount amount"><bdi><span
                                                                class="woocommerce-Price-currencySymbol">$</span>389.00</bdi></span></ins><span
                                                    class="screen-reader-text">Current price is: $389.00.</span><span
                                                    class="rey-discount">Save $160.00</span></span>
                                        <div class="rey-loopButtons">
                                            <a href="/babui/assets/client-view/product/advanced-health-smartwatch/"
                                               data-quantity="1"
                                               class="button product_type_variable add_to_cart_button rey-btn--hover"
                                               data-product_id="842" data-product_sku=""
                                               aria-label="Select options for “Advanced Health Smartwatch”"
                                               rel="nofollow"><span class="__text">Select options</span></a> <span
                                                    id="woocommerce_loop_add_to_cart_link_describedby_842"
                                                    class="screen-reader-text">
		This product has multiple variants. The options may be chosen on the product page	</span>
                                            <button class="button rey-btn--hover rey-quickviewBtn js-rey-quickviewBtn"
                                                    data-id="842" title="QUICKVIEW">QUICKVIEW
                                            </button>
                                        </div>
                                    </div>
                                </div>

                            </li>


                            <li class="rey-swatches rey-swatches--stretch-labels product type-product post-136 status-publish instock product_cat-headphones product_cat-on-ear product_cat-over-ear product_cat-wireless has-post-thumbnail shipping-taxable purchasable product-type-variable is-animated --shadow- --shadow-h-1 --extraImg-second --extraImg-mobile rey-wc-skin--proto rey-wc-loopAlign-left --uncropped"
                                data-pid="136">

                                <div class="rey-productInner ">
                                    <div class="rey-productThumbnail"><a
                                                href="/babui/assets/client-view/product/comfortable-over-ear-headphones/"
                                                class="woocommerce-LoopProduct-link woocommerce-loop-product__link"
                                                aria-label="Comfortable over-ear headphones"><img width="330"
                                                                                                  height="361"
                                                                                                  src="/babui/assets/client-view/wp-content/uploads/sites/24/2022/02/13-330x361.jpg"
                                                                                                  class="rey-productThumbnail__second"
                                                                                                  alt=""
                                                                                                  decoding="async"
                                                                                                  srcset="/babui/assets/client-view/wp-content/uploads/sites/24/2022/02/13-330x361.jpg 330w, /babui/assets/client-view/wp-content/uploads/sites/24/2022/02/13-274x300.jpg 274w, /babui/assets/client-view/wp-content/uploads/sites/24/2022/02/13-936x1024.jpg 936w, /babui/assets/client-view/wp-content/uploads/sites/24/2022/02/13-768x840.jpg 768w, /babui/assets/client-view/wp-content/uploads/sites/24/2022/02/13-600x656.jpg 600w, /babui/assets/client-view/wp-content/uploads/sites/24/2022/02/13.jpg 1024w"
                                                                                                  sizes="(max-width: 330px) 100vw, 330px"><img
                                                    width="330" height="361"
                                                    src="/babui/assets/client-view/wp-content/uploads/sites/24/2022/02/12-330x361.jpg"
                                                    class="rey-thumbImg img--1 attachment-woocommerce_thumbnail size-woocommerce_thumbnail"
                                                    alt="" decoding="async"
                                                    srcset="/babui/assets/client-view/wp-content/uploads/sites/24/2022/02/12-330x361.jpg 330w, /babui/assets/client-view/wp-content/uploads/sites/24/2022/02/12-274x300.jpg 274w, /babui/assets/client-view/wp-content/uploads/sites/24/2022/02/12-936x1024.jpg 936w, /babui/assets/client-view/wp-content/uploads/sites/24/2022/02/12-768x840.jpg 768w, /babui/assets/client-view/wp-content/uploads/sites/24/2022/02/12-600x656.jpg 600w, /babui/assets/client-view/wp-content/uploads/sites/24/2022/02/12.jpg 1024w"
                                                    sizes="(max-width: 330px) 100vw, 330px"></a>
                                        <div class="rey-thPos rey-thPos--top-right" data-position="top-right">
                                            <div class="rey-thPos-item --no-margins">
                                                <button class="--icon-style-rounded rey-wishlistBtn rey-wishlistBtn-link"
                                                        data-lazy-hidden="" data-id="136" title="Add to wishlist"
                                                        aria-label="Add to wishlist">
                                                    <svg aria-hidden="true" role="img"
                                                         class="rey-icon rey-icon-heart rey-wishlistBtn-icon"
                                                         viewBox="0 0 24 24">
                                                        <path fill="var(--icon-fill, none)" stroke="currentColor"
                                                              stroke-width="var(--stroke-width, 1.8px)"
                                                              stroke-linecap="round" stroke-linejoin="round"
                                                              d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path>
                                                    </svg>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="rey-loopDetails --padded">
                                        <div data-attribute="color" data-position="first"
                                             class="rey-productVariations2 --single-attr  --side">
                                            <form class="variations_form cart --catalog"
                                                  action="/babui/assets/client-view/product/comfortable-over-ear-headphones/"
                                                  method="post" enctype="multipart/form-data" data-product_id="136"
                                                  data-product_variations="[{&quot;attributes&quot;:{&quot;attribute_pa_color&quot;:&quot;&quot;},&quot;availability_html&quot;:&quot;&quot;,&quot;backorders_allowed&quot;:false,&quot;dimensions&quot;:{&quot;length&quot;:&quot;&quot;,&quot;width&quot;:&quot;&quot;,&quot;height&quot;:&quot;&quot;},&quot;dimensions_html&quot;:&quot;N\/A&quot;,&quot;display_price&quot;:689,&quot;display_regular_price&quot;:689,&quot;image&quot;:{&quot;title&quot;:&quot;12&quot;,&quot;caption&quot;:&quot;&quot;,&quot;url&quot;:&quot;https:\/\/demos.reytheme.com\/san-francisco\/wp-content\/uploads\/sites\/24\/2022\/02\/12.jpg&quot;,&quot;alt&quot;:&quot;12&quot;,&quot;src&quot;:&quot;https:\/\/demos.reytheme.com\/san-francisco\/wp-content\/uploads\/sites\/24\/2022\/02\/12-600x656.jpg&quot;,&quot;srcset&quot;:&quot;https:\/\/demos.reytheme.com\/san-francisco\/wp-content\/uploads\/sites\/24\/2022\/02\/12-600x656.jpg 600w, https:\/\/demos.reytheme.com\/san-francisco\/wp-content\/uploads\/sites\/24\/2022\/02\/12-274x300.jpg 274w, https:\/\/demos.reytheme.com\/san-francisco\/wp-content\/uploads\/sites\/24\/2022\/02\/12-936x1024.jpg 936w, https:\/\/demos.reytheme.com\/san-francisco\/wp-content\/uploads\/sites\/24\/2022\/02\/12-768x840.jpg 768w, https:\/\/demos.reytheme.com\/san-francisco\/wp-content\/uploads\/sites\/24\/2022\/02\/12-330x361.jpg 330w, https:\/\/demos.reytheme.com\/san-francisco\/wp-content\/uploads\/sites\/24\/2022\/02\/12.jpg 1024w&quot;,&quot;sizes&quot;:&quot;(max-width: 600px) 100vw, 600px&quot;,&quot;full_src&quot;:&quot;https:\/\/demos.reytheme.com\/san-francisco\/wp-content\/uploads\/sites\/24\/2022\/02\/12.jpg&quot;,&quot;full_src_w&quot;:1024,&quot;full_src_h&quot;:1120,&quot;gallery_thumbnail_src&quot;:&quot;https:\/\/demos.reytheme.com\/san-francisco\/wp-content\/uploads\/sites\/24\/2022\/02\/12-100x100.jpg&quot;,&quot;gallery_thumbnail_src_w&quot;:100,&quot;gallery_thumbnail_src_h&quot;:100,&quot;thumb_src&quot;:&quot;https:\/\/demos.reytheme.com\/san-francisco\/wp-content\/uploads\/sites\/24\/2022\/02\/12-330x361.jpg&quot;,&quot;thumb_src_w&quot;:330,&quot;thumb_src_h&quot;:361,&quot;src_w&quot;:600,&quot;src_h&quot;:656},&quot;image_id&quot;:137,&quot;is_downloadable&quot;:false,&quot;is_in_stock&quot;:true,&quot;is_purchasable&quot;:true,&quot;is_sold_individually&quot;:&quot;no&quot;,&quot;is_virtual&quot;:false,&quot;max_qty&quot;:&quot;&quot;,&quot;min_qty&quot;:1,&quot;price_html&quot;:&quot;&quot;,&quot;sku&quot;:&quot;&quot;,&quot;variation_description&quot;:&quot;&quot;,&quot;variation_id&quot;:886,&quot;variation_is_active&quot;:true,&quot;variation_is_visible&quot;:true,&quot;weight&quot;:&quot;&quot;,&quot;weight_html&quot;:&quot;N\/A&quot;,&quot;stock_status&quot;:&quot;instock&quot;,&quot;step_qty&quot;:1}]"
                                                  data-atc-text="Add to cart">
                                                <div class="variations">
                                                    <div class="__s-wrapper"><select style="display:none"
                                                                                     id="pa_color136" class=""
                                                                                     name="attribute_pa_color"
                                                                                     data-attribute_name="attribute_pa_color"
                                                                                     data-show_option_none="yes">
                                                            <option value="">Choose an option</option>
                                                            <option value="beige">Beige</option>
                                                            <option value="black">Black</option>
                                                            <option value="red">Red</option>
                                                        </select>
                                                        <div aria-label="color" data-attribute_name="attribute_pa_color"
                                                             style=""
                                                             class="rey-swatchList --type-color --light-tooltips --disabled-dim --deselection-clear">
                                                            <div title="Beige" data-term-id="20" data-term-slug="beige"
                                                                 data-attribute-name="pa_color" aria-label="Beige"
                                                                 role="radio" aria-checked="false"
                                                                 class="rey-swatchList-item --type-color rey-swatchList-item--regular "
                                                                 data-description=""><span
                                                                        class="rey-swatchList-itemContent"
                                                                        style="background: #dfc5a0;"></span></div>
                                                            <div title="Black" data-term-id="22" data-term-slug="black"
                                                                 data-attribute-name="pa_color" aria-label="Black"
                                                                 role="radio" aria-checked="false"
                                                                 class="rey-swatchList-item --type-color rey-swatchList-item--regular "
                                                                 data-description=""><span
                                                                        class="rey-swatchList-itemContent"
                                                                        style="background: #45464c;"></span></div>
                                                            <div title="Red" data-term-id="43" data-term-slug="red"
                                                                 data-attribute-name="pa_color" aria-label="Red"
                                                                 role="radio" aria-checked="false"
                                                                 class="rey-swatchList-item --type-color rey-swatchList-item--regular "
                                                                 data-description=""><span
                                                                        class="rey-swatchList-itemContent"
                                                                        style="background: #e75243;"></span></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                        <div class="rey-brandLink --catalog"><a
                                                    href="/babui/assets/client-view/product-brand/quantech/">Quantech</a>
                                        </div>
                                        <h2 class="woocommerce-loop-product__title"><a
                                                    href="/babui/assets/client-view/product/comfortable-over-ear-headphones/">Comfortable
                                                over-ear headphones</a></h2>
                                        <div class="__break"></div>
                                        <span class="price rey-loopPrice"><span class="woocommerce-Price-amount amount"><bdi><span
                                                            class="woocommerce-Price-currencySymbol">$</span>689.00</bdi></span></span>
                                        <div class="rey-loopButtons">
                                            <a href="/babui/assets/client-view/product/comfortable-over-ear-headphones/"
                                               data-quantity="1"
                                               class="button product_type_variable add_to_cart_button rey-btn--hover"
                                               data-product_id="136" data-product_sku=""
                                               aria-label="Select options for “Comfortable over-ear headphones”"
                                               rel="nofollow"><span class="__text">Select options</span></a> <span
                                                    id="woocommerce_loop_add_to_cart_link_describedby_136"
                                                    class="screen-reader-text">
		This product has multiple variants. The options may be chosen on the product page	</span>
                                            <button class="button rey-btn--hover rey-quickviewBtn js-rey-quickviewBtn"
                                                    data-id="136" title="QUICKVIEW">QUICKVIEW
                                            </button>
                                        </div>
                                    </div>
                                </div>

                            </li>


                            <li class="rey-swatches rey-swatches--stretch-labels product type-product post-829 status-publish last instock product_cat-fitness-trackers product_cat-key-trackers product_cat-smartwatches product_cat-virtual-reality product_cat-wearables has-post-thumbnail shipping-taxable purchasable product-type-variable is-animated --shadow- --shadow-h-1 --extraImg-second --extraImg-mobile rey-wc-skin--proto rey-wc-loopAlign-left --uncropped"
                                data-pid="829">

                                <div class="rey-productInner ">
                                    <div class="rey-productThumbnail"><a
                                                href="/babui/assets/client-view/product/fitness-health-tracker/"
                                                class="woocommerce-LoopProduct-link woocommerce-loop-product__link"
                                                aria-label="Fitness &amp; Health Tracker"><img width="330" height="361"
                                                                                               src="/babui/assets/client-view/wp-content/uploads/sites/24/2022/03/26-330x361.jpg"
                                                                                               class="rey-productThumbnail__second"
                                                                                               alt="" decoding="async"
                                                                                               srcset="/babui/assets/client-view/wp-content/uploads/sites/24/2022/03/26-330x361.jpg 330w, /babui/assets/client-view/wp-content/uploads/sites/24/2022/03/26-274x300.jpg 274w, /babui/assets/client-view/wp-content/uploads/sites/24/2022/03/26-936x1024.jpg 936w, /babui/assets/client-view/wp-content/uploads/sites/24/2022/03/26-768x840.jpg 768w, /babui/assets/client-view/wp-content/uploads/sites/24/2022/03/26-600x656.jpg 600w, /babui/assets/client-view/wp-content/uploads/sites/24/2022/03/26.jpg 1024w"
                                                                                               sizes="(max-width: 330px) 100vw, 330px"><img
                                                    width="330" height="361"
                                                    src="/babui/assets/client-view/wp-content/uploads/sites/24/2022/03/25-330x361.jpg"
                                                    class="rey-thumbImg img--1 attachment-woocommerce_thumbnail size-woocommerce_thumbnail"
                                                    alt="" decoding="async"
                                                    srcset="/babui/assets/client-view/wp-content/uploads/sites/24/2022/03/25-330x361.jpg 330w, /babui/assets/client-view/wp-content/uploads/sites/24/2022/03/25-274x300.jpg 274w, /babui/assets/client-view/wp-content/uploads/sites/24/2022/03/25-936x1024.jpg 936w, /babui/assets/client-view/wp-content/uploads/sites/24/2022/03/25-768x840.jpg 768w, /babui/assets/client-view/wp-content/uploads/sites/24/2022/03/25-600x656.jpg 600w, /babui/assets/client-view/wp-content/uploads/sites/24/2022/03/25.jpg 1024w"
                                                    sizes="(max-width: 330px) 100vw, 330px"></a>
                                        <div class="rey-thPos rey-thPos--top-right" data-position="top-right">
                                            <div class="rey-thPos-item --no-margins">
                                                <button class="--icon-style-rounded rey-wishlistBtn rey-wishlistBtn-link"
                                                        data-lazy-hidden="" data-id="829" title="Add to wishlist"
                                                        aria-label="Add to wishlist">
                                                    <svg aria-hidden="true" role="img"
                                                         class="rey-icon rey-icon-heart rey-wishlistBtn-icon"
                                                         viewBox="0 0 24 24">
                                                        <path fill="var(--icon-fill, none)" stroke="currentColor"
                                                              stroke-width="var(--stroke-width, 1.8px)"
                                                              stroke-linecap="round" stroke-linejoin="round"
                                                              d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path>
                                                    </svg>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="rey-loopDetails --padded">
                                        <div data-attribute="color" data-position="first"
                                             class="rey-productVariations2 --single-attr  --side">
                                            <form class="variations_form cart --catalog"
                                                  action="/babui/assets/client-view/product/fitness-health-tracker/"
                                                  method="post" enctype="multipart/form-data" data-product_id="829"
                                                  data-product_variations="[{&quot;attributes&quot;:{&quot;attribute_pa_color&quot;:&quot;&quot;},&quot;availability_html&quot;:&quot;&quot;,&quot;backorders_allowed&quot;:false,&quot;dimensions&quot;:{&quot;length&quot;:&quot;&quot;,&quot;width&quot;:&quot;&quot;,&quot;height&quot;:&quot;&quot;},&quot;dimensions_html&quot;:&quot;N\/A&quot;,&quot;display_price&quot;:189,&quot;display_regular_price&quot;:189,&quot;image&quot;:{&quot;title&quot;:&quot;25&quot;,&quot;caption&quot;:&quot;&quot;,&quot;url&quot;:&quot;https:\/\/demos.reytheme.com\/san-francisco\/wp-content\/uploads\/sites\/24\/2022\/03\/25.jpg&quot;,&quot;alt&quot;:&quot;25&quot;,&quot;src&quot;:&quot;https:\/\/demos.reytheme.com\/san-francisco\/wp-content\/uploads\/sites\/24\/2022\/03\/25-600x656.jpg&quot;,&quot;srcset&quot;:&quot;https:\/\/demos.reytheme.com\/san-francisco\/wp-content\/uploads\/sites\/24\/2022\/03\/25-600x656.jpg 600w, https:\/\/demos.reytheme.com\/san-francisco\/wp-content\/uploads\/sites\/24\/2022\/03\/25-274x300.jpg 274w, https:\/\/demos.reytheme.com\/san-francisco\/wp-content\/uploads\/sites\/24\/2022\/03\/25-936x1024.jpg 936w, https:\/\/demos.reytheme.com\/san-francisco\/wp-content\/uploads\/sites\/24\/2022\/03\/25-768x840.jpg 768w, https:\/\/demos.reytheme.com\/san-francisco\/wp-content\/uploads\/sites\/24\/2022\/03\/25-330x361.jpg 330w, https:\/\/demos.reytheme.com\/san-francisco\/wp-content\/uploads\/sites\/24\/2022\/03\/25.jpg 1024w&quot;,&quot;sizes&quot;:&quot;(max-width: 600px) 100vw, 600px&quot;,&quot;full_src&quot;:&quot;https:\/\/demos.reytheme.com\/san-francisco\/wp-content\/uploads\/sites\/24\/2022\/03\/25.jpg&quot;,&quot;full_src_w&quot;:1024,&quot;full_src_h&quot;:1120,&quot;gallery_thumbnail_src&quot;:&quot;https:\/\/demos.reytheme.com\/san-francisco\/wp-content\/uploads\/sites\/24\/2022\/03\/25-100x100.jpg&quot;,&quot;gallery_thumbnail_src_w&quot;:100,&quot;gallery_thumbnail_src_h&quot;:100,&quot;thumb_src&quot;:&quot;https:\/\/demos.reytheme.com\/san-francisco\/wp-content\/uploads\/sites\/24\/2022\/03\/25-330x361.jpg&quot;,&quot;thumb_src_w&quot;:330,&quot;thumb_src_h&quot;:361,&quot;src_w&quot;:600,&quot;src_h&quot;:656},&quot;image_id&quot;:830,&quot;is_downloadable&quot;:false,&quot;is_in_stock&quot;:true,&quot;is_purchasable&quot;:true,&quot;is_sold_individually&quot;:&quot;no&quot;,&quot;is_virtual&quot;:false,&quot;max_qty&quot;:&quot;&quot;,&quot;min_qty&quot;:1,&quot;price_html&quot;:&quot;&quot;,&quot;sku&quot;:&quot;&quot;,&quot;variation_description&quot;:&quot;&quot;,&quot;variation_id&quot;:885,&quot;variation_is_active&quot;:true,&quot;variation_is_visible&quot;:true,&quot;weight&quot;:&quot;&quot;,&quot;weight_html&quot;:&quot;N\/A&quot;,&quot;stock_status&quot;:&quot;instock&quot;,&quot;step_qty&quot;:1}]"
                                                  data-atc-text="Add to cart">
                                                <div class="variations">
                                                    <div class="__s-wrapper"><select style="display:none"
                                                                                     id="pa_color829" class=""
                                                                                     name="attribute_pa_color"
                                                                                     data-attribute_name="attribute_pa_color"
                                                                                     data-show_option_none="yes">
                                                            <option value="">Choose an option</option>
                                                            <option value="beige">Beige</option>
                                                            <option value="black">Black</option>
                                                            <option value="brown">Brown</option>
                                                        </select>
                                                        <div aria-label="color" data-attribute_name="attribute_pa_color"
                                                             style=""
                                                             class="rey-swatchList --type-color --light-tooltips --disabled-dim --deselection-clear">
                                                            <div title="Beige" data-term-id="20" data-term-slug="beige"
                                                                 data-attribute-name="pa_color" aria-label="Beige"
                                                                 role="radio" aria-checked="false"
                                                                 class="rey-swatchList-item --type-color rey-swatchList-item--regular "
                                                                 data-description=""><span
                                                                        class="rey-swatchList-itemContent"
                                                                        style="background: #dfc5a0;"></span></div>
                                                            <div title="Black" data-term-id="22" data-term-slug="black"
                                                                 data-attribute-name="pa_color" aria-label="Black"
                                                                 role="radio" aria-checked="false"
                                                                 class="rey-swatchList-item --type-color rey-swatchList-item--regular "
                                                                 data-description=""><span
                                                                        class="rey-swatchList-itemContent"
                                                                        style="background: #45464c;"></span></div>
                                                            <div title="Brown" data-term-id="24" data-term-slug="brown"
                                                                 data-attribute-name="pa_color" aria-label="Brown"
                                                                 role="radio" aria-checked="false"
                                                                 class="rey-swatchList-item --type-color rey-swatchList-item--regular "
                                                                 data-description=""><span
                                                                        class="rey-swatchList-itemContent"
                                                                        style="background: #956b45;"></span></div>
                                                            <a href="/babui/assets/client-view/product/fitness-health-tracker/"
                                                               class="rey-swatchList-more" title="Click to see 4 more">4+</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                        <div class="rey-brandLink --catalog"><a
                                                    href="/babui/assets/client-view/product-brand/squarex/">SquareX</a>
                                        </div>
                                        <h2 class="woocommerce-loop-product__title"><a
                                                    href="/babui/assets/client-view/product/fitness-health-tracker/">Fitness
                                                &amp; Health Tracker</a></h2>
                                        <div class="__break"></div>
                                        <span class="price rey-loopPrice"><span class="woocommerce-Price-amount amount"><bdi><span
                                                            class="woocommerce-Price-currencySymbol">$</span>189.00</bdi></span></span>
                                        <div class="rey-loopButtons">
                                            <a href="/babui/assets/client-view/product/fitness-health-tracker/"
                                               data-quantity="1"
                                               class="button product_type_variable add_to_cart_button rey-btn--hover"
                                               data-product_id="829" data-product_sku=""
                                               aria-label="Select options for “Fitness &amp; Health Tracker”"
                                               rel="nofollow"><span class="__text">Select options</span></a> <span
                                                    id="woocommerce_loop_add_to_cart_link_describedby_829"
                                                    class="screen-reader-text">
		This product has multiple variants. The options may be chosen on the product page	</span>
                                            <button class="button rey-btn--hover rey-quickviewBtn js-rey-quickviewBtn"
                                                    data-id="829" title="QUICKVIEW">QUICKVIEW
                                            </button>
                                        </div>
                                    </div>
                                </div>

                            </li>


                            <li class="rey-swatches rey-swatches--stretch-labels product type-product post-846 status-publish first instock product_cat-fitness-trackers product_cat-glasses product_cat-smartwatches product_cat-wearables has-post-thumbnail shipping-taxable purchasable product-type-variable has-default-attributes is-animated --shadow- --shadow-h-1 --extraImg-second --extraImg-mobile rey-wc-skin--proto rey-wc-loopAlign-left --uncropped"
                                data-pid="846">

                                <div class="rey-productInner ">
                                    <div class="rey-productThumbnail"><a
                                                href="/babui/assets/client-view/product/health-fitness-smartwatch/"
                                                class="woocommerce-LoopProduct-link woocommerce-loop-product__link"
                                                aria-label="Health &amp; Fitness Smartwatch"><img width="330"
                                                                                                  height="361"
                                                                                                  src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20330%20361'%3E%3C/svg%3E"
                                                                                                  class="rey-productThumbnail__second"
                                                                                                  alt=""
                                                                                                  decoding="async"
                                                                                                  data-lazy-srcset="/babui/assets/client-view/wp-content/uploads/sites/24/2022/03/24-330x361.jpg 330w, /babui/assets/client-view/wp-content/uploads/sites/24/2022/03/24-274x300.jpg 274w, /babui/assets/client-view/wp-content/uploads/sites/24/2022/03/24-936x1024.jpg 936w, /babui/assets/client-view/wp-content/uploads/sites/24/2022/03/24-768x840.jpg 768w, /babui/assets/client-view/wp-content/uploads/sites/24/2022/03/24-600x656.jpg 600w, /babui/assets/client-view/wp-content/uploads/sites/24/2022/03/24.jpg 1024w"
                                                                                                  data-lazy-sizes="(max-width: 330px) 100vw, 330px"
                                                                                                  data-lazy-src="/babui/assets/client-view/wp-content/uploads/sites/24/2022/03/24-330x361.jpg">
                                            <noscript><img loading="lazy" width="330" height="361"
                                                           src="/babui/assets/client-view/wp-content/uploads/sites/24/2022/03/24-330x361.jpg"
                                                           class="rey-productThumbnail__second" alt="" decoding="async"
                                                           srcset="/babui/assets/client-view/wp-content/uploads/sites/24/2022/03/24-330x361.jpg 330w, /babui/assets/client-view/wp-content/uploads/sites/24/2022/03/24-274x300.jpg 274w, /babui/assets/client-view/wp-content/uploads/sites/24/2022/03/24-936x1024.jpg 936w, /babui/assets/client-view/wp-content/uploads/sites/24/2022/03/24-768x840.jpg 768w, /babui/assets/client-view/wp-content/uploads/sites/24/2022/03/24-600x656.jpg 600w, /babui/assets/client-view/wp-content/uploads/sites/24/2022/03/24.jpg 1024w"
                                                           sizes="(max-width: 330px) 100vw, 330px"/></noscript>
                                            <img width="330" height="361"
                                                 src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20330%20361'%3E%3C/svg%3E"
                                                 class="rey-thumbImg img--1 attachment-woocommerce_thumbnail size-woocommerce_thumbnail"
                                                 alt="" decoding="async"
                                                 data-lazy-srcset="/babui/assets/client-view/wp-content/uploads/sites/24/2022/03/23-330x361.jpg 330w, /babui/assets/client-view/wp-content/uploads/sites/24/2022/03/23-274x300.jpg 274w, /babui/assets/client-view/wp-content/uploads/sites/24/2022/03/23-936x1024.jpg 936w, /babui/assets/client-view/wp-content/uploads/sites/24/2022/03/23-768x840.jpg 768w, /babui/assets/client-view/wp-content/uploads/sites/24/2022/03/23-600x656.jpg 600w, /babui/assets/client-view/wp-content/uploads/sites/24/2022/03/23.jpg 1024w"
                                                 data-lazy-sizes="(max-width: 330px) 100vw, 330px"
                                                 data-lazy-src="/babui/assets/client-view/wp-content/uploads/sites/24/2022/03/23-330x361.jpg">
                                            <noscript><img loading="lazy" width="330" height="361"
                                                           src="/babui/assets/client-view/wp-content/uploads/sites/24/2022/03/23-330x361.jpg"
                                                           class="rey-thumbImg img--1 attachment-woocommerce_thumbnail size-woocommerce_thumbnail"
                                                           alt="" decoding="async"
                                                           srcset="/babui/assets/client-view/wp-content/uploads/sites/24/2022/03/23-330x361.jpg 330w, /babui/assets/client-view/wp-content/uploads/sites/24/2022/03/23-274x300.jpg 274w, /babui/assets/client-view/wp-content/uploads/sites/24/2022/03/23-936x1024.jpg 936w, /babui/assets/client-view/wp-content/uploads/sites/24/2022/03/23-768x840.jpg 768w, /babui/assets/client-view/wp-content/uploads/sites/24/2022/03/23-600x656.jpg 600w, /babui/assets/client-view/wp-content/uploads/sites/24/2022/03/23.jpg 1024w"
                                                           sizes="(max-width: 330px) 100vw, 330px"/></noscript>
                                        </a>
                                        <div class="rey-thPos rey-thPos--top-right" data-position="top-right">
                                            <div class="rey-thPos-item --no-margins">
                                                <button class="--icon-style-rounded rey-wishlistBtn rey-wishlistBtn-link"
                                                        data-lazy-hidden="" data-id="846" title="Add to wishlist"
                                                        aria-label="Add to wishlist">
                                                    <svg aria-hidden="true" role="img"
                                                         class="rey-icon rey-icon-heart rey-wishlistBtn-icon"
                                                         viewBox="0 0 24 24">
                                                        <path fill="var(--icon-fill, none)" stroke="currentColor"
                                                              stroke-width="var(--stroke-width, 1.8px)"
                                                              stroke-linecap="round" stroke-linejoin="round"
                                                              d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path>
                                                    </svg>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="rey-loopDetails --padded">
                                        <div data-attribute="color" data-position="first"
                                             class="rey-productVariations2 --single-attr  --side">
                                            <form class="variations_form cart --catalog"
                                                  action="/babui/assets/client-view/product/health-fitness-smartwatch/"
                                                  method="post" enctype="multipart/form-data" data-product_id="846"
                                                  data-product_variations="[{&quot;attributes&quot;:{&quot;attribute_pa_color&quot;:&quot;&quot;},&quot;availability_html&quot;:&quot;&quot;,&quot;backorders_allowed&quot;:false,&quot;dimensions&quot;:{&quot;length&quot;:&quot;&quot;,&quot;width&quot;:&quot;&quot;,&quot;height&quot;:&quot;&quot;},&quot;dimensions_html&quot;:&quot;N\/A&quot;,&quot;display_price&quot;:399,&quot;display_regular_price&quot;:399,&quot;image&quot;:{&quot;title&quot;:&quot;23&quot;,&quot;caption&quot;:&quot;&quot;,&quot;url&quot;:&quot;https:\/\/demos.reytheme.com\/san-francisco\/wp-content\/uploads\/sites\/24\/2022\/03\/23.jpg&quot;,&quot;alt&quot;:&quot;23&quot;,&quot;src&quot;:&quot;https:\/\/demos.reytheme.com\/san-francisco\/wp-content\/uploads\/sites\/24\/2022\/03\/23-600x656.jpg&quot;,&quot;srcset&quot;:&quot;https:\/\/demos.reytheme.com\/san-francisco\/wp-content\/uploads\/sites\/24\/2022\/03\/23-600x656.jpg 600w, https:\/\/demos.reytheme.com\/san-francisco\/wp-content\/uploads\/sites\/24\/2022\/03\/23-274x300.jpg 274w, https:\/\/demos.reytheme.com\/san-francisco\/wp-content\/uploads\/sites\/24\/2022\/03\/23-936x1024.jpg 936w, https:\/\/demos.reytheme.com\/san-francisco\/wp-content\/uploads\/sites\/24\/2022\/03\/23-768x840.jpg 768w, https:\/\/demos.reytheme.com\/san-francisco\/wp-content\/uploads\/sites\/24\/2022\/03\/23-330x361.jpg 330w, https:\/\/demos.reytheme.com\/san-francisco\/wp-content\/uploads\/sites\/24\/2022\/03\/23.jpg 1024w&quot;,&quot;sizes&quot;:&quot;(max-width: 600px) 100vw, 600px&quot;,&quot;full_src&quot;:&quot;https:\/\/demos.reytheme.com\/san-francisco\/wp-content\/uploads\/sites\/24\/2022\/03\/23.jpg&quot;,&quot;full_src_w&quot;:1024,&quot;full_src_h&quot;:1120,&quot;gallery_thumbnail_src&quot;:&quot;https:\/\/demos.reytheme.com\/san-francisco\/wp-content\/uploads\/sites\/24\/2022\/03\/23-100x100.jpg&quot;,&quot;gallery_thumbnail_src_w&quot;:100,&quot;gallery_thumbnail_src_h&quot;:100,&quot;thumb_src&quot;:&quot;https:\/\/demos.reytheme.com\/san-francisco\/wp-content\/uploads\/sites\/24\/2022\/03\/23-330x361.jpg&quot;,&quot;thumb_src_w&quot;:330,&quot;thumb_src_h&quot;:361,&quot;src_w&quot;:600,&quot;src_h&quot;:656},&quot;image_id&quot;:847,&quot;is_downloadable&quot;:false,&quot;is_in_stock&quot;:true,&quot;is_purchasable&quot;:true,&quot;is_sold_individually&quot;:&quot;no&quot;,&quot;is_virtual&quot;:false,&quot;max_qty&quot;:&quot;&quot;,&quot;min_qty&quot;:1,&quot;price_html&quot;:&quot;&quot;,&quot;sku&quot;:&quot;&quot;,&quot;variation_description&quot;:&quot;&quot;,&quot;variation_id&quot;:866,&quot;variation_is_active&quot;:true,&quot;variation_is_visible&quot;:true,&quot;weight&quot;:&quot;&quot;,&quot;weight_html&quot;:&quot;N\/A&quot;,&quot;stock_status&quot;:&quot;instock&quot;,&quot;step_qty&quot;:1}]"
                                                  data-atc-text="Add to cart">
                                                <div class="variations">
                                                    <div class="__s-wrapper"><select style="display:none"
                                                                                     id="pa_color846" class=""
                                                                                     name="attribute_pa_color"
                                                                                     data-attribute_name="attribute_pa_color"
                                                                                     data-show_option_none="yes">
                                                            <option value="">Choose an option</option>
                                                            <option value="brown" selected="selected">Brown</option>
                                                            <option value="grey">Grey</option>
                                                            <option value="yellow">Yellow</option>
                                                        </select>
                                                        <div aria-label="color" data-attribute_name="attribute_pa_color"
                                                             style=""
                                                             class="rey-swatchList --type-color --light-tooltips --disabled-dim --deselection-clear">
                                                            <div title="Brown" data-term-id="24" data-term-slug="brown"
                                                                 data-attribute-name="pa_color" aria-label="Brown"
                                                                 role="radio" aria-checked="true"
                                                                 class="rey-swatchList-item --type-color rey-swatchList-item--regular --selected"
                                                                 data-description=""><span
                                                                        class="rey-swatchList-itemContent"
                                                                        style="background: #956b45;"></span></div>
                                                            <div title="Grey" data-term-id="33" data-term-slug="grey"
                                                                 data-attribute-name="pa_color" aria-label="Grey"
                                                                 role="radio" aria-checked="false"
                                                                 class="rey-swatchList-item --type-color rey-swatchList-item--regular "
                                                                 data-description=""><span
                                                                        class="rey-swatchList-itemContent"
                                                                        style="background: #dbdbdb;"></span></div>
                                                            <div title="Yellow" data-term-id="54"
                                                                 data-term-slug="yellow" data-attribute-name="pa_color"
                                                                 aria-label="Yellow" role="radio" aria-checked="false"
                                                                 class="rey-swatchList-item --type-color rey-swatchList-item--regular "
                                                                 data-description=""><span
                                                                        class="rey-swatchList-itemContent"
                                                                        style="background: #edea7a;"></span></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                        <div class="rey-brandLink --catalog"><a
                                                    href="/babui/assets/client-view/product-brand/squarex/">SquareX</a>
                                        </div>
                                        <h2 class="woocommerce-loop-product__title"><a
                                                    href="/babui/assets/client-view/product/health-fitness-smartwatch/">Health
                                                &amp; Fitness Smartwatch</a></h2>
                                        <div class="__break"></div>
                                        <span class="price rey-loopPrice"><span class="woocommerce-Price-amount amount"><bdi><span
                                                            class="woocommerce-Price-currencySymbol">$</span>399.00</bdi></span></span>
                                        <div class="rey-loopButtons">
                                            <a href="/babui/assets/client-view/product/health-fitness-smartwatch/"
                                               data-quantity="1"
                                               class="button product_type_variable add_to_cart_button rey-btn--hover"
                                               data-product_id="846" data-product_sku=""
                                               aria-label="Select options for “Health &amp; Fitness Smartwatch”"
                                               rel="nofollow"><span class="__text">Select options</span></a> <span
                                                    id="woocommerce_loop_add_to_cart_link_describedby_846"
                                                    class="screen-reader-text">
		This product has multiple variants. The options may be chosen on the product page	</span>
                                            <button class="button rey-btn--hover rey-quickviewBtn js-rey-quickviewBtn"
                                                    data-id="846" title="QUICKVIEW">QUICKVIEW
                                            </button>
                                        </div>
                                    </div>
                                </div>

                            </li>


                            <li class="rey-swatches rey-swatches--stretch-labels product type-product post-998 status-publish instock product_cat-bluetooth product_cat-portable product_cat-speakers has-post-thumbnail shipping-taxable purchasable product-type-variable is-animated --shadow- --shadow-h-1 --extraImg-second --extraImg-mobile rey-wc-skin--proto rey-wc-loopAlign-left --uncropped"
                                data-pid="998">

                                <div class="rey-productInner ">
                                    <div class="rey-productThumbnail"><a
                                                href="/babui/assets/client-view/product/high-end-wireless-subwoofer/"
                                                class="woocommerce-LoopProduct-link woocommerce-loop-product__link"
                                                aria-label="High-end wireless subwoofer"><img width="330" height="361"
                                                                                              src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20330%20361'%3E%3C/svg%3E"
                                                                                              class="rey-productThumbnail__second"
                                                                                              alt="" decoding="async"
                                                                                              data-lazy-srcset="/babui/assets/client-view/wp-content/uploads/sites/24/2022/05/63-330x361.jpg 330w, /babui/assets/client-view/wp-content/uploads/sites/24/2022/05/63-274x300.jpg 274w, /babui/assets/client-view/wp-content/uploads/sites/24/2022/05/63-936x1024.jpg 936w, /babui/assets/client-view/wp-content/uploads/sites/24/2022/05/63-768x840.jpg 768w, /babui/assets/client-view/wp-content/uploads/sites/24/2022/05/63-600x656.jpg 600w, /babui/assets/client-view/wp-content/uploads/sites/24/2022/05/63.jpg 1024w"
                                                                                              data-lazy-sizes="(max-width: 330px) 100vw, 330px"
                                                                                              data-lazy-src="/babui/assets/client-view/wp-content/uploads/sites/24/2022/05/63-330x361.jpg">
                                            <noscript><img loading="lazy" width="330" height="361"
                                                           src="/babui/assets/client-view/wp-content/uploads/sites/24/2022/05/63-330x361.jpg"
                                                           class="rey-productThumbnail__second" alt="" decoding="async"
                                                           srcset="/babui/assets/client-view/wp-content/uploads/sites/24/2022/05/63-330x361.jpg 330w, /babui/assets/client-view/wp-content/uploads/sites/24/2022/05/63-274x300.jpg 274w, /babui/assets/client-view/wp-content/uploads/sites/24/2022/05/63-936x1024.jpg 936w, /babui/assets/client-view/wp-content/uploads/sites/24/2022/05/63-768x840.jpg 768w, /babui/assets/client-view/wp-content/uploads/sites/24/2022/05/63-600x656.jpg 600w, /babui/assets/client-view/wp-content/uploads/sites/24/2022/05/63.jpg 1024w"
                                                           sizes="(max-width: 330px) 100vw, 330px"/></noscript>
                                            <img width="330" height="361"
                                                 src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20330%20361'%3E%3C/svg%3E"
                                                 class="rey-thumbImg img--1 attachment-woocommerce_thumbnail size-woocommerce_thumbnail"
                                                 alt="" decoding="async"
                                                 data-lazy-srcset="/babui/assets/client-view/wp-content/uploads/sites/24/2022/05/62-330x361.jpg 330w, /babui/assets/client-view/wp-content/uploads/sites/24/2022/05/62-274x300.jpg 274w, /babui/assets/client-view/wp-content/uploads/sites/24/2022/05/62-936x1024.jpg 936w, /babui/assets/client-view/wp-content/uploads/sites/24/2022/05/62-768x840.jpg 768w, /babui/assets/client-view/wp-content/uploads/sites/24/2022/05/62-600x656.jpg 600w, /babui/assets/client-view/wp-content/uploads/sites/24/2022/05/62.jpg 1024w"
                                                 data-lazy-sizes="(max-width: 330px) 100vw, 330px"
                                                 data-lazy-src="/babui/assets/client-view/wp-content/uploads/sites/24/2022/05/62-330x361.jpg">
                                            <noscript><img loading="lazy" width="330" height="361"
                                                           src="/babui/assets/client-view/wp-content/uploads/sites/24/2022/05/62-330x361.jpg"
                                                           class="rey-thumbImg img--1 attachment-woocommerce_thumbnail size-woocommerce_thumbnail"
                                                           alt="" decoding="async"
                                                           srcset="/babui/assets/client-view/wp-content/uploads/sites/24/2022/05/62-330x361.jpg 330w, /babui/assets/client-view/wp-content/uploads/sites/24/2022/05/62-274x300.jpg 274w, /babui/assets/client-view/wp-content/uploads/sites/24/2022/05/62-936x1024.jpg 936w, /babui/assets/client-view/wp-content/uploads/sites/24/2022/05/62-768x840.jpg 768w, /babui/assets/client-view/wp-content/uploads/sites/24/2022/05/62-600x656.jpg 600w, /babui/assets/client-view/wp-content/uploads/sites/24/2022/05/62.jpg 1024w"
                                                           sizes="(max-width: 330px) 100vw, 330px"/></noscript>
                                        </a>
                                        <div class="rey-thPos rey-thPos--top-right" data-position="top-right">
                                            <div class="rey-thPos-item --no-margins">
                                                <button class="--icon-style-rounded rey-wishlistBtn rey-wishlistBtn-link"
                                                        data-lazy-hidden="" data-id="998" title="Add to wishlist"
                                                        aria-label="Add to wishlist">
                                                    <svg aria-hidden="true" role="img"
                                                         class="rey-icon rey-icon-heart rey-wishlistBtn-icon"
                                                         viewBox="0 0 24 24">
                                                        <path fill="var(--icon-fill, none)" stroke="currentColor"
                                                              stroke-width="var(--stroke-width, 1.8px)"
                                                              stroke-linecap="round" stroke-linejoin="round"
                                                              d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path>
                                                    </svg>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="rey-loopDetails --padded">
                                        <div data-attribute="color" data-position="first"
                                             class="rey-productVariations2 --single-attr  --side">
                                            <form class="variations_form cart --catalog"
                                                  action="/babui/assets/client-view/product/high-end-wireless-subwoofer/"
                                                  method="post" enctype="multipart/form-data" data-product_id="998"
                                                  data-product_variations="[{&quot;attributes&quot;:{&quot;attribute_pa_color&quot;:&quot;&quot;},&quot;availability_html&quot;:&quot;&quot;,&quot;backorders_allowed&quot;:false,&quot;dimensions&quot;:{&quot;length&quot;:&quot;&quot;,&quot;width&quot;:&quot;&quot;,&quot;height&quot;:&quot;&quot;},&quot;dimensions_html&quot;:&quot;N\/A&quot;,&quot;display_price&quot;:1989,&quot;display_regular_price&quot;:1989,&quot;image&quot;:{&quot;title&quot;:&quot;62&quot;,&quot;caption&quot;:&quot;&quot;,&quot;url&quot;:&quot;https:\/\/demos.reytheme.com\/san-francisco\/wp-content\/uploads\/sites\/24\/2022\/05\/62.jpg&quot;,&quot;alt&quot;:&quot;62&quot;,&quot;src&quot;:&quot;https:\/\/demos.reytheme.com\/san-francisco\/wp-content\/uploads\/sites\/24\/2022\/05\/62-600x656.jpg&quot;,&quot;srcset&quot;:&quot;https:\/\/demos.reytheme.com\/san-francisco\/wp-content\/uploads\/sites\/24\/2022\/05\/62-600x656.jpg 600w, https:\/\/demos.reytheme.com\/san-francisco\/wp-content\/uploads\/sites\/24\/2022\/05\/62-274x300.jpg 274w, https:\/\/demos.reytheme.com\/san-francisco\/wp-content\/uploads\/sites\/24\/2022\/05\/62-936x1024.jpg 936w, https:\/\/demos.reytheme.com\/san-francisco\/wp-content\/uploads\/sites\/24\/2022\/05\/62-768x840.jpg 768w, https:\/\/demos.reytheme.com\/san-francisco\/wp-content\/uploads\/sites\/24\/2022\/05\/62-330x361.jpg 330w, https:\/\/demos.reytheme.com\/san-francisco\/wp-content\/uploads\/sites\/24\/2022\/05\/62.jpg 1024w&quot;,&quot;sizes&quot;:&quot;(max-width: 600px) 100vw, 600px&quot;,&quot;full_src&quot;:&quot;https:\/\/demos.reytheme.com\/san-francisco\/wp-content\/uploads\/sites\/24\/2022\/05\/62.jpg&quot;,&quot;full_src_w&quot;:1024,&quot;full_src_h&quot;:1120,&quot;gallery_thumbnail_src&quot;:&quot;https:\/\/demos.reytheme.com\/san-francisco\/wp-content\/uploads\/sites\/24\/2022\/05\/62-100x100.jpg&quot;,&quot;gallery_thumbnail_src_w&quot;:100,&quot;gallery_thumbnail_src_h&quot;:100,&quot;thumb_src&quot;:&quot;https:\/\/demos.reytheme.com\/san-francisco\/wp-content\/uploads\/sites\/24\/2022\/05\/62-330x361.jpg&quot;,&quot;thumb_src_w&quot;:330,&quot;thumb_src_h&quot;:361,&quot;src_w&quot;:600,&quot;src_h&quot;:656},&quot;image_id&quot;:1000,&quot;is_downloadable&quot;:false,&quot;is_in_stock&quot;:true,&quot;is_purchasable&quot;:true,&quot;is_sold_individually&quot;:&quot;no&quot;,&quot;is_virtual&quot;:false,&quot;max_qty&quot;:&quot;&quot;,&quot;min_qty&quot;:1,&quot;price_html&quot;:&quot;&quot;,&quot;sku&quot;:&quot;&quot;,&quot;variation_description&quot;:&quot;&quot;,&quot;variation_id&quot;:999,&quot;variation_is_active&quot;:true,&quot;variation_is_visible&quot;:true,&quot;weight&quot;:&quot;&quot;,&quot;weight_html&quot;:&quot;N\/A&quot;,&quot;stock_status&quot;:&quot;instock&quot;,&quot;step_qty&quot;:1}]"
                                                  data-atc-text="Add to cart">
                                                <div class="variations">
                                                    <div class="__s-wrapper"><select style="display:none"
                                                                                     id="pa_color998" class=""
                                                                                     name="attribute_pa_color"
                                                                                     data-attribute_name="attribute_pa_color"
                                                                                     data-show_option_none="yes">
                                                            <option value="">Choose an option</option>
                                                            <option value="beige">Beige</option>
                                                            <option value="black">Black</option>
                                                            <option value="grey">Grey</option>
                                                        </select>
                                                        <div aria-label="color" data-attribute_name="attribute_pa_color"
                                                             style=""
                                                             class="rey-swatchList --type-color --light-tooltips --disabled-dim --deselection-clear">
                                                            <div title="Beige" data-term-id="20" data-term-slug="beige"
                                                                 data-attribute-name="pa_color" aria-label="Beige"
                                                                 role="radio" aria-checked="false"
                                                                 class="rey-swatchList-item --type-color rey-swatchList-item--regular "
                                                                 data-description=""><span
                                                                        class="rey-swatchList-itemContent"
                                                                        style="background: #dfc5a0;"></span></div>
                                                            <div title="Black" data-term-id="22" data-term-slug="black"
                                                                 data-attribute-name="pa_color" aria-label="Black"
                                                                 role="radio" aria-checked="false"
                                                                 class="rey-swatchList-item --type-color rey-swatchList-item--regular "
                                                                 data-description=""><span
                                                                        class="rey-swatchList-itemContent"
                                                                        style="background: #45464c;"></span></div>
                                                            <div title="Grey" data-term-id="33" data-term-slug="grey"
                                                                 data-attribute-name="pa_color" aria-label="Grey"
                                                                 role="radio" aria-checked="false"
                                                                 class="rey-swatchList-item --type-color rey-swatchList-item--regular "
                                                                 data-description=""><span
                                                                        class="rey-swatchList-itemContent"
                                                                        style="background: #dbdbdb;"></span></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                        <div class="rey-brandLink --catalog"><a
                                                    href="/babui/assets/client-view/product-brand/squarex/">SquareX</a>
                                        </div>
                                        <h2 class="woocommerce-loop-product__title"><a
                                                    href="/babui/assets/client-view/product/high-end-wireless-subwoofer/">High-end
                                                wireless subwoofer</a></h2>
                                        <div class="__break"></div>
                                        <span class="price rey-loopPrice"><span class="woocommerce-Price-amount amount"><bdi><span
                                                            class="woocommerce-Price-currencySymbol">$</span>1,989.00</bdi></span></span>
                                        <div class="rey-loopButtons">
                                            <a href="/babui/assets/client-view/product/high-end-wireless-subwoofer/"
                                               data-quantity="1"
                                               class="button product_type_variable add_to_cart_button rey-btn--hover"
                                               data-product_id="998" data-product_sku=""
                                               aria-label="Select options for “High-end wireless subwoofer”"
                                               rel="nofollow"><span class="__text">Select options</span></a> <span
                                                    id="woocommerce_loop_add_to_cart_link_describedby_998"
                                                    class="screen-reader-text">
		This product has multiple variants. The options may be chosen on the product page	</span>
                                            <button class="button rey-btn--hover rey-quickviewBtn js-rey-quickviewBtn"
                                                    data-id="998" title="QUICKVIEW">QUICKVIEW
                                            </button>
                                        </div>
                                    </div>
                                </div>

                            </li>


                            <li class="rey-swatches rey-swatches--stretch-labels product type-product post-1004 status-publish instock product_cat-smartwatches product_cat-wearables has-post-thumbnail shipping-taxable purchasable product-type-variable is-animated --shadow- --shadow-h-1 --extraImg-second --extraImg-mobile rey-wc-skin--proto rey-wc-loopAlign-left --uncropped"
                                data-pid="1004">

                                <div class="rey-productInner ">
                                    <div class="rey-productThumbnail"><a
                                                href="/babui/assets/client-view/product/innovative-smart-watch/"
                                                class="woocommerce-LoopProduct-link woocommerce-loop-product__link"
                                                aria-label="Innovative smart watch"><img width="330" height="361"
                                                                                         src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20330%20361'%3E%3C/svg%3E"
                                                                                         class="rey-productThumbnail__second"
                                                                                         alt="" decoding="async"
                                                                                         data-lazy-srcset="/babui/assets/client-view/wp-content/uploads/sites/24/2022/05/67-330x361.jpg 330w, /babui/assets/client-view/wp-content/uploads/sites/24/2022/05/67-274x300.jpg 274w, /babui/assets/client-view/wp-content/uploads/sites/24/2022/05/67-936x1024.jpg 936w, /babui/assets/client-view/wp-content/uploads/sites/24/2022/05/67-768x840.jpg 768w, /babui/assets/client-view/wp-content/uploads/sites/24/2022/05/67-600x656.jpg 600w, /babui/assets/client-view/wp-content/uploads/sites/24/2022/05/67.jpg 1024w"
                                                                                         data-lazy-sizes="(max-width: 330px) 100vw, 330px"
                                                                                         data-lazy-src="/babui/assets/client-view/wp-content/uploads/sites/24/2022/05/67-330x361.jpg">
                                            <noscript><img loading="lazy" width="330" height="361"
                                                           src="/babui/assets/client-view/wp-content/uploads/sites/24/2022/05/67-330x361.jpg"
                                                           class="rey-productThumbnail__second" alt="" decoding="async"
                                                           srcset="/babui/assets/client-view/wp-content/uploads/sites/24/2022/05/67-330x361.jpg 330w, /babui/assets/client-view/wp-content/uploads/sites/24/2022/05/67-274x300.jpg 274w, /babui/assets/client-view/wp-content/uploads/sites/24/2022/05/67-936x1024.jpg 936w, /babui/assets/client-view/wp-content/uploads/sites/24/2022/05/67-768x840.jpg 768w, /babui/assets/client-view/wp-content/uploads/sites/24/2022/05/67-600x656.jpg 600w, /babui/assets/client-view/wp-content/uploads/sites/24/2022/05/67.jpg 1024w"
                                                           sizes="(max-width: 330px) 100vw, 330px"/></noscript>
                                            <img width="330" height="361"
                                                 src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20330%20361'%3E%3C/svg%3E"
                                                 class="rey-thumbImg img--1 attachment-woocommerce_thumbnail size-woocommerce_thumbnail"
                                                 alt="" decoding="async"
                                                 data-lazy-srcset="/babui/assets/client-view/wp-content/uploads/sites/24/2022/05/66-330x361.jpg 330w, /babui/assets/client-view/wp-content/uploads/sites/24/2022/05/66-274x300.jpg 274w, /babui/assets/client-view/wp-content/uploads/sites/24/2022/05/66-936x1024.jpg 936w, /babui/assets/client-view/wp-content/uploads/sites/24/2022/05/66-768x840.jpg 768w, /babui/assets/client-view/wp-content/uploads/sites/24/2022/05/66-600x656.jpg 600w, /babui/assets/client-view/wp-content/uploads/sites/24/2022/05/66.jpg 1024w"
                                                 data-lazy-sizes="(max-width: 330px) 100vw, 330px"
                                                 data-lazy-src="/babui/assets/client-view/wp-content/uploads/sites/24/2022/05/66-330x361.jpg">
                                            <noscript><img loading="lazy" width="330" height="361"
                                                           src="/babui/assets/client-view/wp-content/uploads/sites/24/2022/05/66-330x361.jpg"
                                                           class="rey-thumbImg img--1 attachment-woocommerce_thumbnail size-woocommerce_thumbnail"
                                                           alt="" decoding="async"
                                                           srcset="/babui/assets/client-view/wp-content/uploads/sites/24/2022/05/66-330x361.jpg 330w, /babui/assets/client-view/wp-content/uploads/sites/24/2022/05/66-274x300.jpg 274w, /babui/assets/client-view/wp-content/uploads/sites/24/2022/05/66-936x1024.jpg 936w, /babui/assets/client-view/wp-content/uploads/sites/24/2022/05/66-768x840.jpg 768w, /babui/assets/client-view/wp-content/uploads/sites/24/2022/05/66-600x656.jpg 600w, /babui/assets/client-view/wp-content/uploads/sites/24/2022/05/66.jpg 1024w"
                                                           sizes="(max-width: 330px) 100vw, 330px"/></noscript>
                                        </a>
                                        <div class="rey-thPos rey-thPos--top-right" data-position="top-right">
                                            <div class="rey-thPos-item --no-margins">
                                                <button class="--icon-style-rounded rey-wishlistBtn rey-wishlistBtn-link"
                                                        data-lazy-hidden="" data-id="1004" title="Add to wishlist"
                                                        aria-label="Add to wishlist">
                                                    <svg aria-hidden="true" role="img"
                                                         class="rey-icon rey-icon-heart rey-wishlistBtn-icon"
                                                         viewBox="0 0 24 24">
                                                        <path fill="var(--icon-fill, none)" stroke="currentColor"
                                                              stroke-width="var(--stroke-width, 1.8px)"
                                                              stroke-linecap="round" stroke-linejoin="round"
                                                              d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path>
                                                    </svg>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="rey-loopDetails --padded">
                                        <div data-attribute="color" data-position="first"
                                             class="rey-productVariations2 --single-attr  --side">
                                            <form class="variations_form cart --catalog"
                                                  action="/babui/assets/client-view/product/innovative-smart-watch/"
                                                  method="post" enctype="multipart/form-data" data-product_id="1004"
                                                  data-product_variations="[{&quot;attributes&quot;:{&quot;attribute_pa_color&quot;:&quot;&quot;},&quot;availability_html&quot;:&quot;&quot;,&quot;backorders_allowed&quot;:false,&quot;dimensions&quot;:{&quot;length&quot;:&quot;&quot;,&quot;width&quot;:&quot;&quot;,&quot;height&quot;:&quot;&quot;},&quot;dimensions_html&quot;:&quot;N\/A&quot;,&quot;display_price&quot;:399,&quot;display_regular_price&quot;:399,&quot;image&quot;:{&quot;title&quot;:&quot;66&quot;,&quot;caption&quot;:&quot;&quot;,&quot;url&quot;:&quot;https:\/\/demos.reytheme.com\/san-francisco\/wp-content\/uploads\/sites\/24\/2022\/05\/66.jpg&quot;,&quot;alt&quot;:&quot;66&quot;,&quot;src&quot;:&quot;https:\/\/demos.reytheme.com\/san-francisco\/wp-content\/uploads\/sites\/24\/2022\/05\/66-600x656.jpg&quot;,&quot;srcset&quot;:&quot;https:\/\/demos.reytheme.com\/san-francisco\/wp-content\/uploads\/sites\/24\/2022\/05\/66-600x656.jpg 600w, https:\/\/demos.reytheme.com\/san-francisco\/wp-content\/uploads\/sites\/24\/2022\/05\/66-274x300.jpg 274w, https:\/\/demos.reytheme.com\/san-francisco\/wp-content\/uploads\/sites\/24\/2022\/05\/66-936x1024.jpg 936w, https:\/\/demos.reytheme.com\/san-francisco\/wp-content\/uploads\/sites\/24\/2022\/05\/66-768x840.jpg 768w, https:\/\/demos.reytheme.com\/san-francisco\/wp-content\/uploads\/sites\/24\/2022\/05\/66-330x361.jpg 330w, https:\/\/demos.reytheme.com\/san-francisco\/wp-content\/uploads\/sites\/24\/2022\/05\/66.jpg 1024w&quot;,&quot;sizes&quot;:&quot;(max-width: 600px) 100vw, 600px&quot;,&quot;full_src&quot;:&quot;https:\/\/demos.reytheme.com\/san-francisco\/wp-content\/uploads\/sites\/24\/2022\/05\/66.jpg&quot;,&quot;full_src_w&quot;:1024,&quot;full_src_h&quot;:1120,&quot;gallery_thumbnail_src&quot;:&quot;https:\/\/demos.reytheme.com\/san-francisco\/wp-content\/uploads\/sites\/24\/2022\/05\/66-100x100.jpg&quot;,&quot;gallery_thumbnail_src_w&quot;:100,&quot;gallery_thumbnail_src_h&quot;:100,&quot;thumb_src&quot;:&quot;https:\/\/demos.reytheme.com\/san-francisco\/wp-content\/uploads\/sites\/24\/2022\/05\/66-330x361.jpg&quot;,&quot;thumb_src_w&quot;:330,&quot;thumb_src_h&quot;:361,&quot;src_w&quot;:600,&quot;src_h&quot;:656},&quot;image_id&quot;:1006,&quot;is_downloadable&quot;:false,&quot;is_in_stock&quot;:true,&quot;is_purchasable&quot;:true,&quot;is_sold_individually&quot;:&quot;no&quot;,&quot;is_virtual&quot;:false,&quot;max_qty&quot;:&quot;&quot;,&quot;min_qty&quot;:1,&quot;price_html&quot;:&quot;&quot;,&quot;sku&quot;:&quot;&quot;,&quot;variation_description&quot;:&quot;&quot;,&quot;variation_id&quot;:1005,&quot;variation_is_active&quot;:true,&quot;variation_is_visible&quot;:true,&quot;weight&quot;:&quot;&quot;,&quot;weight_html&quot;:&quot;N\/A&quot;,&quot;stock_status&quot;:&quot;instock&quot;,&quot;step_qty&quot;:1}]"
                                                  data-atc-text="Add to cart">
                                                <div class="variations">
                                                    <div class="__s-wrapper"><select style="display:none"
                                                                                     id="pa_color1004" class=""
                                                                                     name="attribute_pa_color"
                                                                                     data-attribute_name="attribute_pa_color"
                                                                                     data-show_option_none="yes">
                                                            <option value="">Choose an option</option>
                                                            <option value="black">Black</option>
                                                            <option value="brown">Brown</option>
                                                            <option value="red">Red</option>
                                                        </select>
                                                        <div aria-label="color" data-attribute_name="attribute_pa_color"
                                                             style=""
                                                             class="rey-swatchList --type-color --light-tooltips --disabled-dim --deselection-clear">
                                                            <div title="Black" data-term-id="22" data-term-slug="black"
                                                                 data-attribute-name="pa_color" aria-label="Black"
                                                                 role="radio" aria-checked="false"
                                                                 class="rey-swatchList-item --type-color rey-swatchList-item--regular "
                                                                 data-description=""><span
                                                                        class="rey-swatchList-itemContent"
                                                                        style="background: #45464c;"></span></div>
                                                            <div title="Brown" data-term-id="24" data-term-slug="brown"
                                                                 data-attribute-name="pa_color" aria-label="Brown"
                                                                 role="radio" aria-checked="false"
                                                                 class="rey-swatchList-item --type-color rey-swatchList-item--regular "
                                                                 data-description=""><span
                                                                        class="rey-swatchList-itemContent"
                                                                        style="background: #956b45;"></span></div>
                                                            <div title="Red" data-term-id="43" data-term-slug="red"
                                                                 data-attribute-name="pa_color" aria-label="Red"
                                                                 role="radio" aria-checked="false"
                                                                 class="rey-swatchList-item --type-color rey-swatchList-item--regular "
                                                                 data-description=""><span
                                                                        class="rey-swatchList-itemContent"
                                                                        style="background: #e75243;"></span></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                        <div class="rey-brandLink --catalog"><a
                                                    href="/babui/assets/client-view/product-brand/x-form/">X-Form</a>
                                        </div>
                                        <h2 class="woocommerce-loop-product__title"><a
                                                    href="/babui/assets/client-view/product/innovative-smart-watch/">Innovative
                                                smart watch</a></h2>
                                        <div class="__break"></div>
                                        <span class="price rey-loopPrice"><span class="woocommerce-Price-amount amount"><bdi><span
                                                            class="woocommerce-Price-currencySymbol">$</span>399.00</bdi></span></span>
                                        <div class="rey-loopButtons">
                                            <a href="/babui/assets/client-view/product/innovative-smart-watch/"
                                               data-quantity="1"
                                               class="button product_type_variable add_to_cart_button rey-btn--hover"
                                               data-product_id="1004" data-product_sku=""
                                               aria-label="Select options for “Innovative smart watch”"
                                               rel="nofollow"><span class="__text">Select options</span></a> <span
                                                    id="woocommerce_loop_add_to_cart_link_describedby_1004"
                                                    class="screen-reader-text">
		This product has multiple variants. The options may be chosen on the product page	</span>
                                            <button class="button rey-btn--hover rey-quickviewBtn js-rey-quickviewBtn"
                                                    data-id="1004" title="QUICKVIEW">QUICKVIEW
                                            </button>
                                        </div>
                                    </div>
                                </div>

                            </li>

                            <li class="--teaser rey-swatches rey-swatches--stretch-labels product type-product post-119 status-publish last instock product_cat-bluetooth product_cat-home-audio product_cat-sets product_cat-smart product_cat-speakers product_tag-bluetooth product_tag-portable product_tag-speaker has-post-thumbnail shipping-taxable purchasable product-type-variable is-animated --shadow- --shadow-h-1 --extraImg-second --extraImg-mobile rey-wc-skin--proto rey-wc-loopAlign-left --uncropped">
                                <style>.elementor-1546 .elementor-element.elementor-element-45e2157:not(.elementor-motion-effects-element-type-background) > .elementor-widget-wrap, .elementor-1546 .elementor-element.elementor-element-45e2157 > .elementor-widget-wrap > .elementor-motion-effects-container > .elementor-motion-effects-layer {
                                        background-image: url("/babui/assets/client-view/wp-content/uploads/sites/24/2022/03/image_05.jpg");
                                        background-position: bottom center;
                                        background-repeat: no-repeat;
                                        background-size: cover;
                                    }

                                    .elementor-1546 .elementor-element.elementor-element-45e2157 > .elementor-element-populated > .elementor-background-overlay {
                                        background-color: #252525;
                                        opacity: 0.4;
                                    }

                                    .elementor-bc-flex-widget .elementor-1546 .elementor-element.elementor-element-45e2157.elementor-column .elementor-widget-wrap {
                                        align-items: flex-start;
                                    }

                                    .elementor-1546 .elementor-element.elementor-element-45e2157.elementor-column.elementor-element[data-element_type="column"] > .elementor-widget-wrap.elementor-element-populated {
                                        align-content: flex-start;
                                        align-items: flex-start;
                                    }

                                    .elementor-1546 .elementor-element.elementor-element-45e2157 > .elementor-column-wrap {
                                        min-height: 330px;
                                    }

                                    .elementor-1546 .elementor-element.elementor-element-45e2157 > .elementor-widget-wrap {
                                        min-height: 330px;
                                    }

                                    .elementor-1546 .elementor-element.elementor-element-45e2157 > .elementor-element-populated, .elementor-1546 .elementor-element.elementor-element-45e2157 > .elementor-element-populated > .elementor-background-overlay, .elementor-1546 .elementor-element.elementor-element-45e2157 > .elementor-background-slideshow {
                                        border-radius: 6px 6px 6px 6px;
                                    }

                                    .elementor-1546 .elementor-element.elementor-element-45e2157 > .elementor-element-populated {
                                        transition: background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;
                                        padding: 30px 30px 30px 30px;
                                    }

                                    .elementor-1546 .elementor-element.elementor-element-45e2157 > .elementor-element-populated > .elementor-background-overlay {
                                        transition: background 0.3s, border-radius 0.3s, opacity 0.3s;
                                    }

                                    .elementor-1546 .elementor-element.elementor-element-c17a192 .elementor-heading-title {
                                        color: #FFFFFF80;
                                        text-transform: uppercase;
                                    }

                                    .elementor-1546 .elementor-element.elementor-element-22b5c74 > .elementor-widget-container {
                                        padding: 0% 30% 0% 0%;
                                    }

                                    .elementor-1546 .elementor-element.elementor-element-22b5c74 .elementor-heading-title {
                                        color: var(--e-global-color-d53b3e9);
                                        font-size: 42px;
                                    }

                                    .elementor-1546 .elementor-element.elementor-element-876dd2c .elementor-button {
                                        font-weight: 700;
                                        text-transform: uppercase;
                                        fill: var(--e-global-color-d53b3e9);
                                        color: var(--e-global-color-d53b3e9);
                                    }

                                    @media (max-width: 1024px) {
                                        .elementor-bc-flex-widget .elementor-1546 .elementor-element.elementor-element-45e2157.elementor-column .elementor-widget-wrap {
                                            align-items: center;
                                        }

                                        .elementor-1546 .elementor-element.elementor-element-45e2157.elementor-column.elementor-element[data-element_type="column"] > .elementor-widget-wrap.elementor-element-populated {
                                            align-content: center;
                                            align-items: center;
                                        }

                                        .elementor-1546 .elementor-element.elementor-element-22b5c74 > .elementor-widget-container {
                                            padding: 0% 0% 0% 0%;
                                        }

                                        .elementor-1546 .elementor-element.elementor-element-22b5c74 .elementor-heading-title {
                                            font-size: 42px;
                                        }
                                    }

                                    @media (max-width: 767px) {
                                        .elementor-1546 .elementor-element.elementor-element-45e2157 > .elementor-column-wrap {
                                            min-height: 420px;
                                        }

                                        .elementor-1546 .elementor-element.elementor-element-45e2157 > .elementor-widget-wrap {
                                            min-height: 420px;
                                        }

                                        .elementor-1546 .elementor-element.elementor-element-45e2157 > .elementor-element-populated {
                                            margin: 0px 0px 20px 0px;
                                            --e-column-margin-right: 0px;
                                            --e-column-margin-left: 0px;
                                            padding: 20px 20px 20px 20px;
                                        }

                                        .elementor-1546 .elementor-element.elementor-element-22b5c74 .elementor-heading-title {
                                            font-size: 28px;
                                        }

                                        .elementor-1546 .elementor-element.elementor-element-876dd2c .elementor-button {
                                            font-size: 12px;
                                            padding: 0px 0px 0px 0px;
                                        }
                                    }</style>
                                <div data-elementor-type="wp-post" data-elementor-id="1546"
                                     class="elementor elementor-1546" data-elementor-gstype="generic"
                                     data-page-el-selector="body.elementor-page-1546" data-disable-padding="">
                                    <section
                                            class="elementor-section elementor-top-section elementor-element elementor-element-6ac56f5 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                            data-id="6ac56f5" data-element_type="section">
                                        <div class="elementor-container elementor-column-gap-default">
                                            <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-45e2157 rey-colbg--classic column-flex-dir--vertical"
                                                 data-id="45e2157" data-element_type="column"
                                                 data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                                <div class="elementor-column-wrap--45e2157 elementor-widget-wrap elementor-element-populated">
                                                    <div class="elementor-background-overlay"></div>
                                                    <div class="elementor-element elementor-element-c17a192 elementor-widget elementor-widget-heading"
                                                         data-id="c17a192" data-element_type="widget"
                                                         data-widget_type="heading.default">
                                                        <div class="elementor-widget-container">
                                                            <h6 class="elementor-heading-title elementor-size-default">
                                                                Connected Speakers</h6></div>
                                                    </div>
                                                    <div class="elementor-element elementor-element-22b5c74 elementor-widget elementor-widget-heading"
                                                         data-id="22b5c74" data-element_type="widget"
                                                         data-widget_type="heading.default">
                                                        <div class="elementor-widget-container">
                                                            <h2 class="elementor-heading-title elementor-size-default">
                                                                Sounds better together</h2></div>
                                                    </div>
                                                    <div class="elementor-element elementor-element-876dd2c elementor-align-right m-auto--top elementor-button-dashed --large elementor-widget elementor-widget-button"
                                                         data-id="876dd2c" data-element_type="widget"
                                                         data-widget_type="button.default">
                                                        <div class="elementor-widget-container">
                                                            <div class="elementor-button-wrapper">
                                                                <a class="elementor-button elementor-button-link elementor-size-sm"
                                                                   href="#">
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
                            </li>
                            <li class="rey-swatches rey-swatches--stretch-labels product type-product post-119 status-publish first instock product_cat-bluetooth product_cat-home-audio product_cat-sets product_cat-smart product_cat-speakers product_tag-bluetooth product_tag-portable product_tag-speaker has-post-thumbnail shipping-taxable purchasable product-type-variable is-animated --shadow- --shadow-h-1 --extraImg-second --extraImg-mobile rey-wc-skin--proto rey-wc-loopAlign-left --uncropped"
                                data-pid="119">

                                <div class="rey-productInner ">
                                    <div class="rey-productThumbnail"><a
                                                href="/babui/assets/client-view/product/innovative-wireless-home-speaker/"
                                                class="woocommerce-LoopProduct-link woocommerce-loop-product__link"
                                                aria-label="Innovative wireless home speaker"><img width="330"
                                                                                                   height="361"
                                                                                                   src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20330%20361'%3E%3C/svg%3E"
                                                                                                   class="rey-productThumbnail__second"
                                                                                                   alt=""
                                                                                                   decoding="async"
                                                                                                   data-lazy-srcset="/babui/assets/client-view/wp-content/uploads/sites/24/2022/02/2-330x361.jpg 330w, /babui/assets/client-view/wp-content/uploads/sites/24/2022/02/2-274x300.jpg 274w, /babui/assets/client-view/wp-content/uploads/sites/24/2022/02/2-936x1024.jpg 936w, /babui/assets/client-view/wp-content/uploads/sites/24/2022/02/2-768x840.jpg 768w, /babui/assets/client-view/wp-content/uploads/sites/24/2022/02/2-600x656.jpg 600w, /babui/assets/client-view/wp-content/uploads/sites/24/2022/02/2.jpg 1024w"
                                                                                                   data-lazy-sizes="(max-width: 330px) 100vw, 330px"
                                                                                                   data-lazy-src="/babui/assets/client-view/wp-content/uploads/sites/24/2022/02/2-330x361.jpg">
                                            <noscript><img loading="lazy" width="330" height="361"
                                                           src="/babui/assets/client-view/wp-content/uploads/sites/24/2022/02/2-330x361.jpg"
                                                           class="rey-productThumbnail__second" alt="" decoding="async"
                                                           srcset="/babui/assets/client-view/wp-content/uploads/sites/24/2022/02/2-330x361.jpg 330w, /babui/assets/client-view/wp-content/uploads/sites/24/2022/02/2-274x300.jpg 274w, /babui/assets/client-view/wp-content/uploads/sites/24/2022/02/2-936x1024.jpg 936w, /babui/assets/client-view/wp-content/uploads/sites/24/2022/02/2-768x840.jpg 768w, /babui/assets/client-view/wp-content/uploads/sites/24/2022/02/2-600x656.jpg 600w, /babui/assets/client-view/wp-content/uploads/sites/24/2022/02/2.jpg 1024w"
                                                           sizes="(max-width: 330px) 100vw, 330px"/></noscript>
                                            <img width="330" height="361"
                                                 src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20330%20361'%3E%3C/svg%3E"
                                                 class="rey-thumbImg img--1 attachment-woocommerce_thumbnail size-woocommerce_thumbnail"
                                                 alt="" decoding="async"
                                                 data-lazy-srcset="/babui/assets/client-view/wp-content/uploads/sites/24/2022/02/1-330x361.jpg 330w, /babui/assets/client-view/wp-content/uploads/sites/24/2022/02/1-274x300.jpg 274w, /babui/assets/client-view/wp-content/uploads/sites/24/2022/02/1-936x1024.jpg 936w, /babui/assets/client-view/wp-content/uploads/sites/24/2022/02/1-768x840.jpg 768w, /babui/assets/client-view/wp-content/uploads/sites/24/2022/02/1-600x656.jpg 600w, /babui/assets/client-view/wp-content/uploads/sites/24/2022/02/1.jpg 1024w"
                                                 data-lazy-sizes="(max-width: 330px) 100vw, 330px"
                                                 data-lazy-src="/babui/assets/client-view/wp-content/uploads/sites/24/2022/02/1-330x361.jpg">
                                            <noscript><img loading="lazy" width="330" height="361"
                                                           src="/babui/assets/client-view/wp-content/uploads/sites/24/2022/02/1-330x361.jpg"
                                                           class="rey-thumbImg img--1 attachment-woocommerce_thumbnail size-woocommerce_thumbnail"
                                                           alt="" decoding="async"
                                                           srcset="/babui/assets/client-view/wp-content/uploads/sites/24/2022/02/1-330x361.jpg 330w, /babui/assets/client-view/wp-content/uploads/sites/24/2022/02/1-274x300.jpg 274w, /babui/assets/client-view/wp-content/uploads/sites/24/2022/02/1-936x1024.jpg 936w, /babui/assets/client-view/wp-content/uploads/sites/24/2022/02/1-768x840.jpg 768w, /babui/assets/client-view/wp-content/uploads/sites/24/2022/02/1-600x656.jpg 600w, /babui/assets/client-view/wp-content/uploads/sites/24/2022/02/1.jpg 1024w"
                                                           sizes="(max-width: 330px) 100vw, 330px"/></noscript>
                                        </a>
                                        <div class="rey-thPos rey-thPos--top-right" data-position="top-right">
                                            <div class="rey-thPos-item --no-margins">
                                                <button class="--icon-style-rounded rey-wishlistBtn rey-wishlistBtn-link"
                                                        data-lazy-hidden="" data-id="119" title="Add to wishlist"
                                                        aria-label="Add to wishlist">
                                                    <svg aria-hidden="true" role="img"
                                                         class="rey-icon rey-icon-heart rey-wishlistBtn-icon"
                                                         viewBox="0 0 24 24">
                                                        <path fill="var(--icon-fill, none)" stroke="currentColor"
                                                              stroke-width="var(--stroke-width, 1.8px)"
                                                              stroke-linecap="round" stroke-linejoin="round"
                                                              d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path>
                                                    </svg>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="rey-loopDetails --padded">
                                        <div data-attribute="color" data-position="first"
                                             class="rey-productVariations2 --single-attr  --side">
                                            <form class="variations_form cart --catalog"
                                                  action="/babui/assets/client-view/product/innovative-wireless-home-speaker/"
                                                  method="post" enctype="multipart/form-data" data-product_id="119"
                                                  data-product_variations="[{&quot;attributes&quot;:{&quot;attribute_pa_color&quot;:&quot;&quot;},&quot;availability_html&quot;:&quot;&quot;,&quot;backorders_allowed&quot;:false,&quot;dimensions&quot;:{&quot;length&quot;:&quot;&quot;,&quot;width&quot;:&quot;&quot;,&quot;height&quot;:&quot;&quot;},&quot;dimensions_html&quot;:&quot;N\/A&quot;,&quot;display_price&quot;:1299,&quot;display_regular_price&quot;:1299,&quot;image&quot;:{&quot;title&quot;:&quot;1&quot;,&quot;caption&quot;:&quot;&quot;,&quot;url&quot;:&quot;https:\/\/demos.reytheme.com\/san-francisco\/wp-content\/uploads\/sites\/24\/2022\/02\/1.jpg&quot;,&quot;alt&quot;:&quot;1&quot;,&quot;src&quot;:&quot;https:\/\/demos.reytheme.com\/san-francisco\/wp-content\/uploads\/sites\/24\/2022\/02\/1-600x656.jpg&quot;,&quot;srcset&quot;:&quot;https:\/\/demos.reytheme.com\/san-francisco\/wp-content\/uploads\/sites\/24\/2022\/02\/1-600x656.jpg 600w, https:\/\/demos.reytheme.com\/san-francisco\/wp-content\/uploads\/sites\/24\/2022\/02\/1-274x300.jpg 274w, https:\/\/demos.reytheme.com\/san-francisco\/wp-content\/uploads\/sites\/24\/2022\/02\/1-936x1024.jpg 936w, https:\/\/demos.reytheme.com\/san-francisco\/wp-content\/uploads\/sites\/24\/2022\/02\/1-768x840.jpg 768w, https:\/\/demos.reytheme.com\/san-francisco\/wp-content\/uploads\/sites\/24\/2022\/02\/1-330x361.jpg 330w, https:\/\/demos.reytheme.com\/san-francisco\/wp-content\/uploads\/sites\/24\/2022\/02\/1.jpg 1024w&quot;,&quot;sizes&quot;:&quot;(max-width: 600px) 100vw, 600px&quot;,&quot;full_src&quot;:&quot;https:\/\/demos.reytheme.com\/san-francisco\/wp-content\/uploads\/sites\/24\/2022\/02\/1.jpg&quot;,&quot;full_src_w&quot;:1024,&quot;full_src_h&quot;:1120,&quot;gallery_thumbnail_src&quot;:&quot;https:\/\/demos.reytheme.com\/san-francisco\/wp-content\/uploads\/sites\/24\/2022\/02\/1-100x100.jpg&quot;,&quot;gallery_thumbnail_src_w&quot;:100,&quot;gallery_thumbnail_src_h&quot;:100,&quot;thumb_src&quot;:&quot;https:\/\/demos.reytheme.com\/san-francisco\/wp-content\/uploads\/sites\/24\/2022\/02\/1-330x361.jpg&quot;,&quot;thumb_src_w&quot;:330,&quot;thumb_src_h&quot;:361,&quot;src_w&quot;:600,&quot;src_h&quot;:656},&quot;image_id&quot;:120,&quot;is_downloadable&quot;:false,&quot;is_in_stock&quot;:true,&quot;is_purchasable&quot;:true,&quot;is_sold_individually&quot;:&quot;no&quot;,&quot;is_virtual&quot;:false,&quot;max_qty&quot;:&quot;&quot;,&quot;min_qty&quot;:1,&quot;price_html&quot;:&quot;&quot;,&quot;sku&quot;:&quot;&quot;,&quot;variation_description&quot;:&quot;&quot;,&quot;variation_id&quot;:890,&quot;variation_is_active&quot;:true,&quot;variation_is_visible&quot;:true,&quot;weight&quot;:&quot;&quot;,&quot;weight_html&quot;:&quot;N\/A&quot;,&quot;stock_status&quot;:&quot;instock&quot;,&quot;step_qty&quot;:1}]"
                                                  data-atc-text="Add to cart">
                                                <div class="variations">
                                                    <div class="__s-wrapper"><select style="display:none"
                                                                                     id="pa_color119" class=""
                                                                                     name="attribute_pa_color"
                                                                                     data-attribute_name="attribute_pa_color"
                                                                                     data-show_option_none="yes">
                                                            <option value="">Choose an option</option>
                                                            <option value="beige">Beige</option>
                                                            <option value="grey">Grey</option>
                                                            <option value="red">Red</option>
                                                        </select>
                                                        <div aria-label="color" data-attribute_name="attribute_pa_color"
                                                             style=""
                                                             class="rey-swatchList --type-color --light-tooltips --disabled-dim --deselection-clear">
                                                            <div title="Beige" data-term-id="20" data-term-slug="beige"
                                                                 data-attribute-name="pa_color" aria-label="Beige"
                                                                 role="radio" aria-checked="false"
                                                                 class="rey-swatchList-item --type-color rey-swatchList-item--regular "
                                                                 data-description=""><span
                                                                        class="rey-swatchList-itemContent"
                                                                        style="background: #dfc5a0;"></span></div>
                                                            <div title="Grey" data-term-id="33" data-term-slug="grey"
                                                                 data-attribute-name="pa_color" aria-label="Grey"
                                                                 role="radio" aria-checked="false"
                                                                 class="rey-swatchList-item --type-color rey-swatchList-item--regular "
                                                                 data-description=""><span
                                                                        class="rey-swatchList-itemContent"
                                                                        style="background: #dbdbdb;"></span></div>
                                                            <div title="Red" data-term-id="43" data-term-slug="red"
                                                                 data-attribute-name="pa_color" aria-label="Red"
                                                                 role="radio" aria-checked="false"
                                                                 class="rey-swatchList-item --type-color rey-swatchList-item--regular "
                                                                 data-description=""><span
                                                                        class="rey-swatchList-itemContent"
                                                                        style="background: #e75243;"></span></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                        <div class="rey-brandLink --catalog"><a
                                                    href="/babui/assets/client-view/product-brand/quantech/">Quantech</a>
                                        </div>
                                        <h2 class="woocommerce-loop-product__title"><a
                                                    href="/babui/assets/client-view/product/innovative-wireless-home-speaker/">Innovative
                                                wireless home speaker</a></h2>
                                        <div class="__break"></div>
                                        <span class="price rey-loopPrice"><span class="woocommerce-Price-amount amount"><bdi><span
                                                            class="woocommerce-Price-currencySymbol">$</span>1,299.00</bdi></span></span>
                                        <div class="rey-loopButtons">
                                            <a href="/babui/assets/client-view/product/innovative-wireless-home-speaker/"
                                               data-quantity="1"
                                               class="button product_type_variable add_to_cart_button rey-btn--hover"
                                               data-product_id="119" data-product_sku=""
                                               aria-label="Select options for “Innovative wireless home speaker”"
                                               rel="nofollow"><span class="__text">Select options</span></a> <span
                                                    id="woocommerce_loop_add_to_cart_link_describedby_119"
                                                    class="screen-reader-text">
		This product has multiple variants. The options may be chosen on the product page	</span>
                                            <button class="button rey-btn--hover rey-quickviewBtn js-rey-quickviewBtn"
                                                    data-id="119" title="QUICKVIEW">QUICKVIEW
                                            </button>
                                        </div>
                                    </div>
                                </div>

                            </li>


                            <li class="rey-swatches rey-swatches--stretch-labels product type-product post-833 status-publish instock product_cat-accessories product_cat-cables product_cat-chargers product_cat-straps has-post-thumbnail shipping-taxable purchasable product-type-variable is-animated --shadow- --shadow-h-1 --extraImg-second --extraImg-mobile rey-wc-skin--proto rey-wc-loopAlign-left --uncropped"
                                data-pid="833">

                                <div class="rey-productInner ">
                                    <div class="rey-productThumbnail"><a
                                                href="/babui/assets/client-view/product/leather-cover/"
                                                class="woocommerce-LoopProduct-link woocommerce-loop-product__link"
                                                aria-label="Leather Cover"><img width="330" height="361"
                                                                                src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20330%20361'%3E%3C/svg%3E"
                                                                                class="rey-productThumbnail__second"
                                                                                alt="" decoding="async"
                                                                                data-lazy-srcset="/babui/assets/client-view/wp-content/uploads/sites/24/2022/03/32-330x361.jpg 330w, /babui/assets/client-view/wp-content/uploads/sites/24/2022/03/32-274x300.jpg 274w, /babui/assets/client-view/wp-content/uploads/sites/24/2022/03/32-936x1024.jpg 936w, /babui/assets/client-view/wp-content/uploads/sites/24/2022/03/32-768x840.jpg 768w, /babui/assets/client-view/wp-content/uploads/sites/24/2022/03/32-600x656.jpg 600w, /babui/assets/client-view/wp-content/uploads/sites/24/2022/03/32.jpg 1024w"
                                                                                data-lazy-sizes="(max-width: 330px) 100vw, 330px"
                                                                                data-lazy-src="/babui/assets/client-view/wp-content/uploads/sites/24/2022/03/32-330x361.jpg">
                                            <noscript><img loading="lazy" width="330" height="361"
                                                           src="/babui/assets/client-view/wp-content/uploads/sites/24/2022/03/32-330x361.jpg"
                                                           class="rey-productThumbnail__second" alt="" decoding="async"
                                                           srcset="/babui/assets/client-view/wp-content/uploads/sites/24/2022/03/32-330x361.jpg 330w, /babui/assets/client-view/wp-content/uploads/sites/24/2022/03/32-274x300.jpg 274w, /babui/assets/client-view/wp-content/uploads/sites/24/2022/03/32-936x1024.jpg 936w, /babui/assets/client-view/wp-content/uploads/sites/24/2022/03/32-768x840.jpg 768w, /babui/assets/client-view/wp-content/uploads/sites/24/2022/03/32-600x656.jpg 600w, /babui/assets/client-view/wp-content/uploads/sites/24/2022/03/32.jpg 1024w"
                                                           sizes="(max-width: 330px) 100vw, 330px"/></noscript>
                                            <img width="330" height="361"
                                                 src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20330%20361'%3E%3C/svg%3E"
                                                 class="rey-thumbImg img--1 attachment-woocommerce_thumbnail size-woocommerce_thumbnail"
                                                 alt="" decoding="async"
                                                 data-lazy-srcset="/babui/assets/client-view/wp-content/uploads/sites/24/2022/03/31-330x361.jpg 330w, /babui/assets/client-view/wp-content/uploads/sites/24/2022/03/31-274x300.jpg 274w, /babui/assets/client-view/wp-content/uploads/sites/24/2022/03/31-936x1024.jpg 936w, /babui/assets/client-view/wp-content/uploads/sites/24/2022/03/31-768x840.jpg 768w, /babui/assets/client-view/wp-content/uploads/sites/24/2022/03/31-600x656.jpg 600w, /babui/assets/client-view/wp-content/uploads/sites/24/2022/03/31.jpg 1024w"
                                                 data-lazy-sizes="(max-width: 330px) 100vw, 330px"
                                                 data-lazy-src="/babui/assets/client-view/wp-content/uploads/sites/24/2022/03/31-330x361.jpg">
                                            <noscript><img loading="lazy" width="330" height="361"
                                                           src="/babui/assets/client-view/wp-content/uploads/sites/24/2022/03/31-330x361.jpg"
                                                           class="rey-thumbImg img--1 attachment-woocommerce_thumbnail size-woocommerce_thumbnail"
                                                           alt="" decoding="async"
                                                           srcset="/babui/assets/client-view/wp-content/uploads/sites/24/2022/03/31-330x361.jpg 330w, /babui/assets/client-view/wp-content/uploads/sites/24/2022/03/31-274x300.jpg 274w, /babui/assets/client-view/wp-content/uploads/sites/24/2022/03/31-936x1024.jpg 936w, /babui/assets/client-view/wp-content/uploads/sites/24/2022/03/31-768x840.jpg 768w, /babui/assets/client-view/wp-content/uploads/sites/24/2022/03/31-600x656.jpg 600w, /babui/assets/client-view/wp-content/uploads/sites/24/2022/03/31.jpg 1024w"
                                                           sizes="(max-width: 330px) 100vw, 330px"/></noscript>
                                        </a>
                                        <div class="rey-thPos rey-thPos--top-right" data-position="top-right">
                                            <div class="rey-thPos-item --no-margins">
                                                <button class="--icon-style-rounded rey-wishlistBtn rey-wishlistBtn-link"
                                                        data-lazy-hidden="" data-id="833" title="Add to wishlist"
                                                        aria-label="Add to wishlist">
                                                    <svg aria-hidden="true" role="img"
                                                         class="rey-icon rey-icon-heart rey-wishlistBtn-icon"
                                                         viewBox="0 0 24 24">
                                                        <path fill="var(--icon-fill, none)" stroke="currentColor"
                                                              stroke-width="var(--stroke-width, 1.8px)"
                                                              stroke-linecap="round" stroke-linejoin="round"
                                                              d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path>
                                                    </svg>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="rey-loopDetails --padded">
                                        <div data-attribute="color" data-position="first"
                                             class="rey-productVariations2 --single-attr  --side">
                                            <form class="variations_form cart --catalog"
                                                  action="/babui/assets/client-view/product/leather-cover/"
                                                  method="post" enctype="multipart/form-data" data-product_id="833"
                                                  data-product_variations="[{&quot;attributes&quot;:{&quot;attribute_pa_color&quot;:&quot;&quot;},&quot;availability_html&quot;:&quot;&quot;,&quot;backorders_allowed&quot;:false,&quot;dimensions&quot;:{&quot;length&quot;:&quot;&quot;,&quot;width&quot;:&quot;&quot;,&quot;height&quot;:&quot;&quot;},&quot;dimensions_html&quot;:&quot;N\/A&quot;,&quot;display_price&quot;:29,&quot;display_regular_price&quot;:29,&quot;image&quot;:{&quot;title&quot;:&quot;31&quot;,&quot;caption&quot;:&quot;&quot;,&quot;url&quot;:&quot;https:\/\/demos.reytheme.com\/san-francisco\/wp-content\/uploads\/sites\/24\/2022\/03\/31.jpg&quot;,&quot;alt&quot;:&quot;31&quot;,&quot;src&quot;:&quot;https:\/\/demos.reytheme.com\/san-francisco\/wp-content\/uploads\/sites\/24\/2022\/03\/31-600x656.jpg&quot;,&quot;srcset&quot;:&quot;https:\/\/demos.reytheme.com\/san-francisco\/wp-content\/uploads\/sites\/24\/2022\/03\/31-600x656.jpg 600w, https:\/\/demos.reytheme.com\/san-francisco\/wp-content\/uploads\/sites\/24\/2022\/03\/31-274x300.jpg 274w, https:\/\/demos.reytheme.com\/san-francisco\/wp-content\/uploads\/sites\/24\/2022\/03\/31-936x1024.jpg 936w, https:\/\/demos.reytheme.com\/san-francisco\/wp-content\/uploads\/sites\/24\/2022\/03\/31-768x840.jpg 768w, https:\/\/demos.reytheme.com\/san-francisco\/wp-content\/uploads\/sites\/24\/2022\/03\/31-330x361.jpg 330w, https:\/\/demos.reytheme.com\/san-francisco\/wp-content\/uploads\/sites\/24\/2022\/03\/31.jpg 1024w&quot;,&quot;sizes&quot;:&quot;(max-width: 600px) 100vw, 600px&quot;,&quot;full_src&quot;:&quot;https:\/\/demos.reytheme.com\/san-francisco\/wp-content\/uploads\/sites\/24\/2022\/03\/31.jpg&quot;,&quot;full_src_w&quot;:1024,&quot;full_src_h&quot;:1120,&quot;gallery_thumbnail_src&quot;:&quot;https:\/\/demos.reytheme.com\/san-francisco\/wp-content\/uploads\/sites\/24\/2022\/03\/31-100x100.jpg&quot;,&quot;gallery_thumbnail_src_w&quot;:100,&quot;gallery_thumbnail_src_h&quot;:100,&quot;thumb_src&quot;:&quot;https:\/\/demos.reytheme.com\/san-francisco\/wp-content\/uploads\/sites\/24\/2022\/03\/31-330x361.jpg&quot;,&quot;thumb_src_w&quot;:330,&quot;thumb_src_h&quot;:361,&quot;src_w&quot;:600,&quot;src_h&quot;:656},&quot;image_id&quot;:834,&quot;is_downloadable&quot;:false,&quot;is_in_stock&quot;:true,&quot;is_purchasable&quot;:true,&quot;is_sold_individually&quot;:&quot;no&quot;,&quot;is_virtual&quot;:false,&quot;max_qty&quot;:&quot;&quot;,&quot;min_qty&quot;:1,&quot;price_html&quot;:&quot;&quot;,&quot;sku&quot;:&quot;&quot;,&quot;variation_description&quot;:&quot;&quot;,&quot;variation_id&quot;:873,&quot;variation_is_active&quot;:true,&quot;variation_is_visible&quot;:true,&quot;weight&quot;:&quot;&quot;,&quot;weight_html&quot;:&quot;N\/A&quot;,&quot;stock_status&quot;:&quot;instock&quot;,&quot;step_qty&quot;:1}]"
                                                  data-atc-text="Add to cart">
                                                <div class="variations">
                                                    <div class="__s-wrapper"><select style="display:none"
                                                                                     id="pa_color833" class=""
                                                                                     name="attribute_pa_color"
                                                                                     data-attribute_name="attribute_pa_color"
                                                                                     data-show_option_none="yes">
                                                            <option value="">Choose an option</option>
                                                            <option value="black">Black</option>
                                                            <option value="brown">Brown</option>
                                                        </select>
                                                        <div aria-label="color" data-attribute_name="attribute_pa_color"
                                                             style=""
                                                             class="rey-swatchList --type-color --light-tooltips --disabled-dim --deselection-clear">
                                                            <div title="Black" data-term-id="22" data-term-slug="black"
                                                                 data-attribute-name="pa_color" aria-label="Black"
                                                                 role="radio" aria-checked="false"
                                                                 class="rey-swatchList-item --type-color rey-swatchList-item--regular "
                                                                 data-description=""><span
                                                                        class="rey-swatchList-itemContent"
                                                                        style="background: #45464c;"></span></div>
                                                            <div title="Brown" data-term-id="24" data-term-slug="brown"
                                                                 data-attribute-name="pa_color" aria-label="Brown"
                                                                 role="radio" aria-checked="false"
                                                                 class="rey-swatchList-item --type-color rey-swatchList-item--regular "
                                                                 data-description=""><span
                                                                        class="rey-swatchList-itemContent"
                                                                        style="background: #956b45;"></span></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                        <div class="rey-brandLink --catalog"><a
                                                    href="/babui/assets/client-view/product-brand/x-form/">X-Form</a>
                                        </div>
                                        <h2 class="woocommerce-loop-product__title"><a
                                                    href="/babui/assets/client-view/product/leather-cover/">Leather
                                                Cover</a></h2>
                                        <div class="__break"></div>
                                        <span class="price rey-loopPrice"><span class="woocommerce-Price-amount amount"><bdi><span
                                                            class="woocommerce-Price-currencySymbol">$</span>29.00</bdi></span></span>
                                        <div class="rey-loopButtons">
                                            <a href="/babui/assets/client-view/product/leather-cover/" data-quantity="1"
                                               class="button product_type_variable add_to_cart_button rey-btn--hover"
                                               data-product_id="833" data-product_sku=""
                                               aria-label="Select options for “Leather Cover”" rel="nofollow"><span
                                                        class="__text">Select options</span></a> <span
                                                    id="woocommerce_loop_add_to_cart_link_describedby_833"
                                                    class="screen-reader-text">
		This product has multiple variants. The options may be chosen on the product page	</span>
                                            <button class="button rey-btn--hover rey-quickviewBtn js-rey-quickviewBtn"
                                                    data-id="833" title="QUICKVIEW">QUICKVIEW
                                            </button>
                                        </div>
                                    </div>
                                </div>

                            </li>


                            <li class="rey-swatches rey-swatches--stretch-labels product type-product post-1015 status-publish instock product_cat-accessories product_cat-chargers has-post-thumbnail shipping-taxable purchasable product-type-variable is-animated --shadow- --shadow-h-1 --extraImg-second --extraImg-mobile rey-wc-skin--proto rey-wc-loopAlign-left --uncropped"
                                data-pid="1015">

                                <div class="rey-productInner ">
                                    <div class="rey-productThumbnail"><a
                                                href="/babui/assets/client-view/product/magsafe-charger/"
                                                class="woocommerce-LoopProduct-link woocommerce-loop-product__link"
                                                aria-label="MagSafe Charger"><img width="330" height="361"
                                                                                  src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20330%20361'%3E%3C/svg%3E"
                                                                                  class="rey-productThumbnail__second"
                                                                                  alt="" decoding="async"
                                                                                  data-lazy-srcset="/babui/assets/client-view/wp-content/uploads/sites/24/2022/05/73-330x361.jpg 330w, /babui/assets/client-view/wp-content/uploads/sites/24/2022/05/73-274x300.jpg 274w, /babui/assets/client-view/wp-content/uploads/sites/24/2022/05/73-936x1024.jpg 936w, /babui/assets/client-view/wp-content/uploads/sites/24/2022/05/73-768x840.jpg 768w, /babui/assets/client-view/wp-content/uploads/sites/24/2022/05/73-600x656.jpg 600w, /babui/assets/client-view/wp-content/uploads/sites/24/2022/05/73.jpg 1024w"
                                                                                  data-lazy-sizes="(max-width: 330px) 100vw, 330px"
                                                                                  data-lazy-src="/babui/assets/client-view/wp-content/uploads/sites/24/2022/05/73-330x361.jpg">
                                            <noscript><img loading="lazy" width="330" height="361"
                                                           src="/babui/assets/client-view/wp-content/uploads/sites/24/2022/05/73-330x361.jpg"
                                                           class="rey-productThumbnail__second" alt="" decoding="async"
                                                           srcset="/babui/assets/client-view/wp-content/uploads/sites/24/2022/05/73-330x361.jpg 330w, /babui/assets/client-view/wp-content/uploads/sites/24/2022/05/73-274x300.jpg 274w, /babui/assets/client-view/wp-content/uploads/sites/24/2022/05/73-936x1024.jpg 936w, /babui/assets/client-view/wp-content/uploads/sites/24/2022/05/73-768x840.jpg 768w, /babui/assets/client-view/wp-content/uploads/sites/24/2022/05/73-600x656.jpg 600w, /babui/assets/client-view/wp-content/uploads/sites/24/2022/05/73.jpg 1024w"
                                                           sizes="(max-width: 330px) 100vw, 330px"/></noscript>
                                            <img width="330" height="361"
                                                 src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20330%20361'%3E%3C/svg%3E"
                                                 class="rey-thumbImg img--1 attachment-woocommerce_thumbnail size-woocommerce_thumbnail"
                                                 alt="" decoding="async"
                                                 data-lazy-srcset="/babui/assets/client-view/wp-content/uploads/sites/24/2022/05/72-330x361.jpg 330w, /babui/assets/client-view/wp-content/uploads/sites/24/2022/05/72-274x300.jpg 274w, /babui/assets/client-view/wp-content/uploads/sites/24/2022/05/72-936x1024.jpg 936w, /babui/assets/client-view/wp-content/uploads/sites/24/2022/05/72-768x840.jpg 768w, /babui/assets/client-view/wp-content/uploads/sites/24/2022/05/72-600x656.jpg 600w, /babui/assets/client-view/wp-content/uploads/sites/24/2022/05/72.jpg 1024w"
                                                 data-lazy-sizes="(max-width: 330px) 100vw, 330px"
                                                 data-lazy-src="/babui/assets/client-view/wp-content/uploads/sites/24/2022/05/72-330x361.jpg">
                                            <noscript><img loading="lazy" width="330" height="361"
                                                           src="/babui/assets/client-view/wp-content/uploads/sites/24/2022/05/72-330x361.jpg"
                                                           class="rey-thumbImg img--1 attachment-woocommerce_thumbnail size-woocommerce_thumbnail"
                                                           alt="" decoding="async"
                                                           srcset="/babui/assets/client-view/wp-content/uploads/sites/24/2022/05/72-330x361.jpg 330w, /babui/assets/client-view/wp-content/uploads/sites/24/2022/05/72-274x300.jpg 274w, /babui/assets/client-view/wp-content/uploads/sites/24/2022/05/72-936x1024.jpg 936w, /babui/assets/client-view/wp-content/uploads/sites/24/2022/05/72-768x840.jpg 768w, /babui/assets/client-view/wp-content/uploads/sites/24/2022/05/72-600x656.jpg 600w, /babui/assets/client-view/wp-content/uploads/sites/24/2022/05/72.jpg 1024w"
                                                           sizes="(max-width: 330px) 100vw, 330px"/></noscript>
                                        </a>
                                        <div class="rey-thPos rey-thPos--top-right" data-position="top-right">
                                            <div class="rey-thPos-item --no-margins">
                                                <button class="--icon-style-rounded rey-wishlistBtn rey-wishlistBtn-link"
                                                        data-lazy-hidden="" data-id="1015" title="Add to wishlist"
                                                        aria-label="Add to wishlist">
                                                    <svg aria-hidden="true" role="img"
                                                         class="rey-icon rey-icon-heart rey-wishlistBtn-icon"
                                                         viewBox="0 0 24 24">
                                                        <path fill="var(--icon-fill, none)" stroke="currentColor"
                                                              stroke-width="var(--stroke-width, 1.8px)"
                                                              stroke-linecap="round" stroke-linejoin="round"
                                                              d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path>
                                                    </svg>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="rey-loopDetails --padded">
                                        <div data-attribute="color" data-position="first"
                                             class="rey-productVariations2 --single-attr  --side">
                                            <form class="variations_form cart --catalog"
                                                  action="/babui/assets/client-view/product/magsafe-charger/"
                                                  method="post" enctype="multipart/form-data" data-product_id="1015"
                                                  data-product_variations="[{&quot;attributes&quot;:{&quot;attribute_pa_color&quot;:&quot;&quot;},&quot;availability_html&quot;:&quot;&quot;,&quot;backorders_allowed&quot;:false,&quot;dimensions&quot;:{&quot;length&quot;:&quot;&quot;,&quot;width&quot;:&quot;&quot;,&quot;height&quot;:&quot;&quot;},&quot;dimensions_html&quot;:&quot;N\/A&quot;,&quot;display_price&quot;:159,&quot;display_regular_price&quot;:159,&quot;image&quot;:{&quot;title&quot;:&quot;72&quot;,&quot;caption&quot;:&quot;&quot;,&quot;url&quot;:&quot;https:\/\/demos.reytheme.com\/san-francisco\/wp-content\/uploads\/sites\/24\/2022\/05\/72.jpg&quot;,&quot;alt&quot;:&quot;72&quot;,&quot;src&quot;:&quot;https:\/\/demos.reytheme.com\/san-francisco\/wp-content\/uploads\/sites\/24\/2022\/05\/72-600x656.jpg&quot;,&quot;srcset&quot;:&quot;https:\/\/demos.reytheme.com\/san-francisco\/wp-content\/uploads\/sites\/24\/2022\/05\/72-600x656.jpg 600w, https:\/\/demos.reytheme.com\/san-francisco\/wp-content\/uploads\/sites\/24\/2022\/05\/72-274x300.jpg 274w, https:\/\/demos.reytheme.com\/san-francisco\/wp-content\/uploads\/sites\/24\/2022\/05\/72-936x1024.jpg 936w, https:\/\/demos.reytheme.com\/san-francisco\/wp-content\/uploads\/sites\/24\/2022\/05\/72-768x840.jpg 768w, https:\/\/demos.reytheme.com\/san-francisco\/wp-content\/uploads\/sites\/24\/2022\/05\/72-330x361.jpg 330w, https:\/\/demos.reytheme.com\/san-francisco\/wp-content\/uploads\/sites\/24\/2022\/05\/72.jpg 1024w&quot;,&quot;sizes&quot;:&quot;(max-width: 600px) 100vw, 600px&quot;,&quot;full_src&quot;:&quot;https:\/\/demos.reytheme.com\/san-francisco\/wp-content\/uploads\/sites\/24\/2022\/05\/72.jpg&quot;,&quot;full_src_w&quot;:1024,&quot;full_src_h&quot;:1120,&quot;gallery_thumbnail_src&quot;:&quot;https:\/\/demos.reytheme.com\/san-francisco\/wp-content\/uploads\/sites\/24\/2022\/05\/72-100x100.jpg&quot;,&quot;gallery_thumbnail_src_w&quot;:100,&quot;gallery_thumbnail_src_h&quot;:100,&quot;thumb_src&quot;:&quot;https:\/\/demos.reytheme.com\/san-francisco\/wp-content\/uploads\/sites\/24\/2022\/05\/72-330x361.jpg&quot;,&quot;thumb_src_w&quot;:330,&quot;thumb_src_h&quot;:361,&quot;src_w&quot;:600,&quot;src_h&quot;:656},&quot;image_id&quot;:1017,&quot;is_downloadable&quot;:false,&quot;is_in_stock&quot;:true,&quot;is_purchasable&quot;:true,&quot;is_sold_individually&quot;:&quot;no&quot;,&quot;is_virtual&quot;:false,&quot;max_qty&quot;:&quot;&quot;,&quot;min_qty&quot;:1,&quot;price_html&quot;:&quot;&quot;,&quot;sku&quot;:&quot;&quot;,&quot;variation_description&quot;:&quot;&quot;,&quot;variation_id&quot;:1016,&quot;variation_is_active&quot;:true,&quot;variation_is_visible&quot;:true,&quot;weight&quot;:&quot;&quot;,&quot;weight_html&quot;:&quot;N\/A&quot;,&quot;stock_status&quot;:&quot;instock&quot;,&quot;step_qty&quot;:1}]"
                                                  data-atc-text="Add to cart">
                                                <div class="variations">
                                                    <div class="__s-wrapper"><select style="display:none"
                                                                                     id="pa_color1015" class=""
                                                                                     name="attribute_pa_color"
                                                                                     data-attribute_name="attribute_pa_color"
                                                                                     data-show_option_none="yes">
                                                            <option value="">Choose an option</option>
                                                            <option value="black">Black</option>
                                                            <option value="grey">Grey</option>
                                                        </select>
                                                        <div aria-label="color" data-attribute_name="attribute_pa_color"
                                                             style=""
                                                             class="rey-swatchList --type-color --light-tooltips --disabled-dim --deselection-clear">
                                                            <div title="Black" data-term-id="22" data-term-slug="black"
                                                                 data-attribute-name="pa_color" aria-label="Black"
                                                                 role="radio" aria-checked="false"
                                                                 class="rey-swatchList-item --type-color rey-swatchList-item--regular "
                                                                 data-description=""><span
                                                                        class="rey-swatchList-itemContent"
                                                                        style="background: #45464c;"></span></div>
                                                            <div title="Grey" data-term-id="33" data-term-slug="grey"
                                                                 data-attribute-name="pa_color" aria-label="Grey"
                                                                 role="radio" aria-checked="false"
                                                                 class="rey-swatchList-item --type-color rey-swatchList-item--regular "
                                                                 data-description=""><span
                                                                        class="rey-swatchList-itemContent"
                                                                        style="background: #dbdbdb;"></span></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                        <div class="rey-brandLink --catalog"><a
                                                    href="/babui/assets/client-view/product-brand/quantech/">Quantech</a>
                                        </div>
                                        <h2 class="woocommerce-loop-product__title"><a
                                                    href="/babui/assets/client-view/product/magsafe-charger/">MagSafe
                                                Charger</a></h2>
                                        <div class="__break"></div>
                                        <span class="price rey-loopPrice"><span class="woocommerce-Price-amount amount"><bdi><span
                                                            class="woocommerce-Price-currencySymbol">$</span>159.00</bdi></span></span>
                                        <div class="rey-loopButtons">
                                            <a href="/babui/assets/client-view/product/magsafe-charger/"
                                               data-quantity="1"
                                               class="button product_type_variable add_to_cart_button rey-btn--hover"
                                               data-product_id="1015" data-product_sku=""
                                               aria-label="Select options for “MagSafe Charger”" rel="nofollow"><span
                                                        class="__text">Select options</span></a> <span
                                                    id="woocommerce_loop_add_to_cart_link_describedby_1015"
                                                    class="screen-reader-text">
		This product has multiple variants. The options may be chosen on the product page	</span>
                                            <button class="button rey-btn--hover rey-quickviewBtn js-rey-quickviewBtn"
                                                    data-id="1015" title="QUICKVIEW">QUICKVIEW
                                            </button>
                                        </div>
                                    </div>
                                </div>

                            </li>


                            <li class="rey-swatches rey-swatches--stretch-labels product type-product post-132 status-publish last instock product_cat-bluetooth product_cat-home-audio product_cat-sets product_cat-smart product_cat-speakers has-post-thumbnail shipping-taxable purchasable product-type-simple is-animated --shadow- --shadow-h-1 --extraImg-second --extraImg-mobile rey-wc-skin--proto rey-wc-loopAlign-left --uncropped"
                                data-pid="132">

                                <div class="rey-productInner ">
                                    <div class="rey-productThumbnail"><a
                                                href="/babui/assets/client-view/product/minimalist-bluetooth-speaker/"
                                                class="woocommerce-LoopProduct-link woocommerce-loop-product__link"
                                                aria-label="Minimalist bluetooth speaker"><img width="330" height="361"
                                                                                               src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20330%20361'%3E%3C/svg%3E"
                                                                                               class="rey-productThumbnail__second"
                                                                                               alt="" decoding="async"
                                                                                               data-lazy-srcset="/babui/assets/client-view/wp-content/uploads/sites/24/2022/02/10-330x361.jpg 330w, /babui/assets/client-view/wp-content/uploads/sites/24/2022/02/10-274x300.jpg 274w, /babui/assets/client-view/wp-content/uploads/sites/24/2022/02/10-936x1024.jpg 936w, /babui/assets/client-view/wp-content/uploads/sites/24/2022/02/10-768x840.jpg 768w, /babui/assets/client-view/wp-content/uploads/sites/24/2022/02/10-600x656.jpg 600w, /babui/assets/client-view/wp-content/uploads/sites/24/2022/02/10.jpg 1024w"
                                                                                               data-lazy-sizes="(max-width: 330px) 100vw, 330px"
                                                                                               data-lazy-src="/babui/assets/client-view/wp-content/uploads/sites/24/2022/02/10-330x361.jpg">
                                            <noscript><img loading="lazy" width="330" height="361"
                                                           src="/babui/assets/client-view/wp-content/uploads/sites/24/2022/02/10-330x361.jpg"
                                                           class="rey-productThumbnail__second" alt="" decoding="async"
                                                           srcset="/babui/assets/client-view/wp-content/uploads/sites/24/2022/02/10-330x361.jpg 330w, /babui/assets/client-view/wp-content/uploads/sites/24/2022/02/10-274x300.jpg 274w, /babui/assets/client-view/wp-content/uploads/sites/24/2022/02/10-936x1024.jpg 936w, /babui/assets/client-view/wp-content/uploads/sites/24/2022/02/10-768x840.jpg 768w, /babui/assets/client-view/wp-content/uploads/sites/24/2022/02/10-600x656.jpg 600w, /babui/assets/client-view/wp-content/uploads/sites/24/2022/02/10.jpg 1024w"
                                                           sizes="(max-width: 330px) 100vw, 330px"/></noscript>
                                            <img width="330" height="361"
                                                 src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20330%20361'%3E%3C/svg%3E"
                                                 class="rey-thumbImg img--1 attachment-woocommerce_thumbnail size-woocommerce_thumbnail"
                                                 alt="" decoding="async"
                                                 data-lazy-srcset="/babui/assets/client-view/wp-content/uploads/sites/24/2022/02/9-330x361.jpg 330w, /babui/assets/client-view/wp-content/uploads/sites/24/2022/02/9-274x300.jpg 274w, /babui/assets/client-view/wp-content/uploads/sites/24/2022/02/9-936x1024.jpg 936w, /babui/assets/client-view/wp-content/uploads/sites/24/2022/02/9-768x840.jpg 768w, /babui/assets/client-view/wp-content/uploads/sites/24/2022/02/9-600x656.jpg 600w, /babui/assets/client-view/wp-content/uploads/sites/24/2022/02/9.jpg 1024w"
                                                 data-lazy-sizes="(max-width: 330px) 100vw, 330px"
                                                 data-lazy-src="/babui/assets/client-view/wp-content/uploads/sites/24/2022/02/9-330x361.jpg">
                                            <noscript><img loading="lazy" width="330" height="361"
                                                           src="/babui/assets/client-view/wp-content/uploads/sites/24/2022/02/9-330x361.jpg"
                                                           class="rey-thumbImg img--1 attachment-woocommerce_thumbnail size-woocommerce_thumbnail"
                                                           alt="" decoding="async"
                                                           srcset="/babui/assets/client-view/wp-content/uploads/sites/24/2022/02/9-330x361.jpg 330w, /babui/assets/client-view/wp-content/uploads/sites/24/2022/02/9-274x300.jpg 274w, /babui/assets/client-view/wp-content/uploads/sites/24/2022/02/9-936x1024.jpg 936w, /babui/assets/client-view/wp-content/uploads/sites/24/2022/02/9-768x840.jpg 768w, /babui/assets/client-view/wp-content/uploads/sites/24/2022/02/9-600x656.jpg 600w, /babui/assets/client-view/wp-content/uploads/sites/24/2022/02/9.jpg 1024w"
                                                           sizes="(max-width: 330px) 100vw, 330px"/></noscript>
                                        </a>
                                        <div class="rey-thPos rey-thPos--top-right" data-position="top-right">
                                            <div class="rey-thPos-item --no-margins">
                                                <button class="--icon-style-rounded rey-wishlistBtn rey-wishlistBtn-link"
                                                        data-lazy-hidden="" data-id="132" title="Add to wishlist"
                                                        aria-label="Add to wishlist">
                                                    <svg aria-hidden="true" role="img"
                                                         class="rey-icon rey-icon-heart rey-wishlistBtn-icon"
                                                         viewBox="0 0 24 24">
                                                        <path fill="var(--icon-fill, none)" stroke="currentColor"
                                                              stroke-width="var(--stroke-width, 1.8px)"
                                                              stroke-linecap="round" stroke-linejoin="round"
                                                              d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path>
                                                    </svg>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="rey-loopDetails --padded">
                                        <div class="rey-brandLink --catalog"><a
                                                    href="/babui/assets/client-view/product-brand/x-form/">X-Form</a>
                                        </div>
                                        <h2 class="woocommerce-loop-product__title"><a
                                                    href="/babui/assets/client-view/product/minimalist-bluetooth-speaker/">Minimalist
                                                bluetooth speaker</a></h2>
                                        <div class="__break"></div>
                                        <span class="price rey-loopPrice"><span class="woocommerce-Price-amount amount"><bdi><span
                                                            class="woocommerce-Price-currencySymbol">$</span>499.00</bdi></span></span>
                                        <div class="rey-loopButtons">
                                            <a href="?add-to-cart=132" data-quantity="1"
                                               class="button product_type_simple add_to_cart_button ajax_add_to_cart rey-btn--hover"
                                               data-product_id="132" data-product_sku=""
                                               aria-label="Add to cart: “Minimalist bluetooth speaker”" rel="nofollow"
                                               data-success_message="“Minimalist bluetooth speaker” has been added to your cart"><span
                                                        class="__text">Add to cart</span></a> <span
                                                    id="woocommerce_loop_add_to_cart_link_describedby_132"
                                                    class="screen-reader-text">
			</span>
                                            <button class="button rey-btn--hover rey-quickviewBtn js-rey-quickviewBtn"
                                                    data-id="132" title="QUICKVIEW">QUICKVIEW
                                            </button>
                                        </div>
                                    </div>
                                </div>

                            </li>


                            <li class="rey-swatches rey-swatches--stretch-labels product type-product post-910 status-publish first instock product_cat-accessories-cameras product_cat-action product_cat-cameras product_cat-dslr product_cat-lenses product_cat-mirrorless has-post-thumbnail shipping-taxable purchasable product-type-simple is-animated --shadow- --shadow-h-1 --extraImg-second --extraImg-mobile rey-wc-skin--proto rey-wc-loopAlign-left --uncropped"
                                data-pid="910">

                                <div class="rey-productInner ">
                                    <div class="rey-productThumbnail"><a
                                                href="/babui/assets/client-view/product/mirrorless-camera/"
                                                class="woocommerce-LoopProduct-link woocommerce-loop-product__link"
                                                aria-label="Mirrorless camera"><img width="330" height="361"
                                                                                    src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20330%20361'%3E%3C/svg%3E"
                                                                                    class="rey-productThumbnail__second"
                                                                                    alt="" decoding="async"
                                                                                    data-lazy-srcset="/babui/assets/client-view/wp-content/uploads/sites/24/2022/04/43-330x361.jpg 330w, /babui/assets/client-view/wp-content/uploads/sites/24/2022/04/43-274x300.jpg 274w, /babui/assets/client-view/wp-content/uploads/sites/24/2022/04/43-936x1024.jpg 936w, /babui/assets/client-view/wp-content/uploads/sites/24/2022/04/43-768x840.jpg 768w, /babui/assets/client-view/wp-content/uploads/sites/24/2022/04/43-600x656.jpg 600w, /babui/assets/client-view/wp-content/uploads/sites/24/2022/04/43.jpg 1024w"
                                                                                    data-lazy-sizes="(max-width: 330px) 100vw, 330px"
                                                                                    data-lazy-src="/babui/assets/client-view/wp-content/uploads/sites/24/2022/04/43-330x361.jpg">
                                            <noscript><img loading="lazy" width="330" height="361"
                                                           src="/babui/assets/client-view/wp-content/uploads/sites/24/2022/04/43-330x361.jpg"
                                                           class="rey-productThumbnail__second" alt="" decoding="async"
                                                           srcset="/babui/assets/client-view/wp-content/uploads/sites/24/2022/04/43-330x361.jpg 330w, /babui/assets/client-view/wp-content/uploads/sites/24/2022/04/43-274x300.jpg 274w, /babui/assets/client-view/wp-content/uploads/sites/24/2022/04/43-936x1024.jpg 936w, /babui/assets/client-view/wp-content/uploads/sites/24/2022/04/43-768x840.jpg 768w, /babui/assets/client-view/wp-content/uploads/sites/24/2022/04/43-600x656.jpg 600w, /babui/assets/client-view/wp-content/uploads/sites/24/2022/04/43.jpg 1024w"
                                                           sizes="(max-width: 330px) 100vw, 330px"/></noscript>
                                            <img width="330" height="361"
                                                 src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20330%20361'%3E%3C/svg%3E"
                                                 class="rey-thumbImg img--1 attachment-woocommerce_thumbnail size-woocommerce_thumbnail"
                                                 alt="" decoding="async"
                                                 data-lazy-srcset="/babui/assets/client-view/wp-content/uploads/sites/24/2022/04/42-330x361.jpg 330w, /babui/assets/client-view/wp-content/uploads/sites/24/2022/04/42-274x300.jpg 274w, /babui/assets/client-view/wp-content/uploads/sites/24/2022/04/42-936x1024.jpg 936w, /babui/assets/client-view/wp-content/uploads/sites/24/2022/04/42-768x840.jpg 768w, /babui/assets/client-view/wp-content/uploads/sites/24/2022/04/42-600x656.jpg 600w, /babui/assets/client-view/wp-content/uploads/sites/24/2022/04/42.jpg 1024w"
                                                 data-lazy-sizes="(max-width: 330px) 100vw, 330px"
                                                 data-lazy-src="/babui/assets/client-view/wp-content/uploads/sites/24/2022/04/42-330x361.jpg">
                                            <noscript><img loading="lazy" width="330" height="361"
                                                           src="/babui/assets/client-view/wp-content/uploads/sites/24/2022/04/42-330x361.jpg"
                                                           class="rey-thumbImg img--1 attachment-woocommerce_thumbnail size-woocommerce_thumbnail"
                                                           alt="" decoding="async"
                                                           srcset="/babui/assets/client-view/wp-content/uploads/sites/24/2022/04/42-330x361.jpg 330w, /babui/assets/client-view/wp-content/uploads/sites/24/2022/04/42-274x300.jpg 274w, /babui/assets/client-view/wp-content/uploads/sites/24/2022/04/42-936x1024.jpg 936w, /babui/assets/client-view/wp-content/uploads/sites/24/2022/04/42-768x840.jpg 768w, /babui/assets/client-view/wp-content/uploads/sites/24/2022/04/42-600x656.jpg 600w, /babui/assets/client-view/wp-content/uploads/sites/24/2022/04/42.jpg 1024w"
                                                           sizes="(max-width: 330px) 100vw, 330px"/></noscript>
                                        </a>
                                        <div class="rey-thPos rey-thPos--top-right" data-position="top-right">
                                            <div class="rey-thPos-item --no-margins">
                                                <button class="--icon-style-rounded rey-wishlistBtn rey-wishlistBtn-link"
                                                        data-lazy-hidden="" data-id="910" title="Add to wishlist"
                                                        aria-label="Add to wishlist">
                                                    <svg aria-hidden="true" role="img"
                                                         class="rey-icon rey-icon-heart rey-wishlistBtn-icon"
                                                         viewBox="0 0 24 24">
                                                        <path fill="var(--icon-fill, none)" stroke="currentColor"
                                                              stroke-width="var(--stroke-width, 1.8px)"
                                                              stroke-linecap="round" stroke-linejoin="round"
                                                              d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path>
                                                    </svg>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="rey-loopDetails --padded">
                                        <div class="rey-brandLink --catalog"><a
                                                    href="/babui/assets/client-view/product-brand/squarex/">SquareX</a>
                                        </div>
                                        <h2 class="woocommerce-loop-product__title"><a
                                                    href="/babui/assets/client-view/product/mirrorless-camera/">Mirrorless
                                                camera</a></h2>
                                        <div class="__break"></div>
                                        <span class="price rey-loopPrice"><span class="woocommerce-Price-amount amount"><bdi><span
                                                            class="woocommerce-Price-currencySymbol">$</span>1,699.00</bdi></span></span>
                                        <div class="rey-loopButtons">
                                            <a href="?add-to-cart=910" data-quantity="1"
                                               class="button product_type_simple add_to_cart_button ajax_add_to_cart rey-btn--hover"
                                               data-product_id="910" data-product_sku=""
                                               aria-label="Add to cart: “Mirrorless camera”" rel="nofollow"
                                               data-success_message="“Mirrorless camera” has been added to your cart"><span
                                                        class="__text">Add to cart</span></a> <span
                                                    id="woocommerce_loop_add_to_cart_link_describedby_910"
                                                    class="screen-reader-text">
			</span>
                                            <button class="button rey-btn--hover rey-quickviewBtn js-rey-quickviewBtn"
                                                    data-id="910" title="QUICKVIEW">QUICKVIEW
                                            </button>
                                        </div>
                                    </div>
                                </div>

                            </li>


                            <li class="rey-swatches rey-swatches--stretch-labels product type-product post-1009 status-publish instock product_cat-smartwatches product_cat-wearables has-post-thumbnail shipping-taxable purchasable product-type-variable is-animated --shadow- --shadow-h-1 --extraImg-second --extraImg-mobile rey-wc-skin--proto rey-wc-loopAlign-center --uncropped --stretch-image-cover"
                                data-pid="1009" data-colspan="4" data-colspan-loaded="">

                                <div class="rey-productInner ">
                                    <div class="rey-productThumbnail"><a
                                                href="/babui/assets/client-view/product/immersive-flight-drone/"
                                                class="woocommerce-LoopProduct-link woocommerce-loop-product__link"
                                                aria-label="Immersive flight drone"><img width="1024" height="363"
                                                                                         src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%201024%20363'%3E%3C/svg%3E"
                                                                                         class="attachment-large size-large"
                                                                                         alt="" decoding="async"
                                                                                         data-lazy-srcset="/babui/assets/client-view/wp-content/uploads/sites/24/2022/05/mini-drone-2-1024x363.jpg 1024w, /babui/assets/client-view/wp-content/uploads/sites/24/2022/05/mini-drone-2-300x106.jpg 300w, /babui/assets/client-view/wp-content/uploads/sites/24/2022/05/mini-drone-2-768x272.jpg 768w, /babui/assets/client-view/wp-content/uploads/sites/24/2022/05/mini-drone-2-330x117.jpg 330w, /babui/assets/client-view/wp-content/uploads/sites/24/2022/05/mini-drone-2-600x213.jpg 600w, /babui/assets/client-view/wp-content/uploads/sites/24/2022/05/mini-drone-2.jpg 1410w"
                                                                                         data-lazy-sizes="(max-width: 1024px) 100vw, 1024px"
                                                                                         data-lazy-src="/babui/assets/client-view/wp-content/uploads/sites/24/2022/05/mini-drone-2-1024x363.jpg">
                                            <noscript><img loading="lazy" width="1024" height="363"
                                                           src="/babui/assets/client-view/wp-content/uploads/sites/24/2022/05/mini-drone-2-1024x363.jpg"
                                                           class="attachment-large size-large" alt="" decoding="async"
                                                           srcset="/babui/assets/client-view/wp-content/uploads/sites/24/2022/05/mini-drone-2-1024x363.jpg 1024w, /babui/assets/client-view/wp-content/uploads/sites/24/2022/05/mini-drone-2-300x106.jpg 300w, /babui/assets/client-view/wp-content/uploads/sites/24/2022/05/mini-drone-2-768x272.jpg 768w, /babui/assets/client-view/wp-content/uploads/sites/24/2022/05/mini-drone-2-330x117.jpg 330w, /babui/assets/client-view/wp-content/uploads/sites/24/2022/05/mini-drone-2-600x213.jpg 600w, /babui/assets/client-view/wp-content/uploads/sites/24/2022/05/mini-drone-2.jpg 1410w"
                                                           sizes="(max-width: 1024px) 100vw, 1024px"/></noscript>
                                        </a>
                                        <div class="rey-thPos rey-thPos--top-right" data-position="top-right">
                                            <div class="rey-thPos-item --no-margins">
                                                <button class="--icon-style-rounded rey-wishlistBtn rey-wishlistBtn-link"
                                                        data-lazy-hidden="" data-id="1009" title="Add to wishlist"
                                                        aria-label="Add to wishlist">
                                                    <svg aria-hidden="true" role="img"
                                                         class="rey-icon rey-icon-heart rey-wishlistBtn-icon"
                                                         viewBox="0 0 24 24">
                                                        <path fill="var(--icon-fill, none)" stroke="currentColor"
                                                              stroke-width="var(--stroke-width, 1.8px)"
                                                              stroke-linecap="round" stroke-linejoin="round"
                                                              d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path>
                                                    </svg>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="rey-loopDetails --padded">
                                        <div data-attribute="color" data-position="first"
                                             class="rey-productVariations2 --single-attr  --side">
                                            <form class="variations_form cart --catalog"
                                                  action="/babui/assets/client-view/product/immersive-flight-drone/"
                                                  method="post" enctype="multipart/form-data" data-product_id="1009"
                                                  data-product_variations="[{&quot;attributes&quot;:{&quot;attribute_pa_color&quot;:&quot;&quot;},&quot;availability_html&quot;:&quot;&quot;,&quot;backorders_allowed&quot;:false,&quot;dimensions&quot;:{&quot;length&quot;:&quot;&quot;,&quot;width&quot;:&quot;&quot;,&quot;height&quot;:&quot;&quot;},&quot;dimensions_html&quot;:&quot;N\/A&quot;,&quot;display_price&quot;:399,&quot;display_regular_price&quot;:399,&quot;image&quot;:{&quot;title&quot;:&quot;69&quot;,&quot;caption&quot;:&quot;&quot;,&quot;url&quot;:&quot;https:\/\/demos.reytheme.com\/san-francisco\/wp-content\/uploads\/sites\/24\/2022\/05\/69.jpg&quot;,&quot;alt&quot;:&quot;69&quot;,&quot;src&quot;:&quot;https:\/\/demos.reytheme.com\/san-francisco\/wp-content\/uploads\/sites\/24\/2022\/05\/69-600x656.jpg&quot;,&quot;srcset&quot;:&quot;https:\/\/demos.reytheme.com\/san-francisco\/wp-content\/uploads\/sites\/24\/2022\/05\/69-600x656.jpg 600w, https:\/\/demos.reytheme.com\/san-francisco\/wp-content\/uploads\/sites\/24\/2022\/05\/69-274x300.jpg 274w, https:\/\/demos.reytheme.com\/san-francisco\/wp-content\/uploads\/sites\/24\/2022\/05\/69-936x1024.jpg 936w, https:\/\/demos.reytheme.com\/san-francisco\/wp-content\/uploads\/sites\/24\/2022\/05\/69-768x840.jpg 768w, https:\/\/demos.reytheme.com\/san-francisco\/wp-content\/uploads\/sites\/24\/2022\/05\/69-330x361.jpg 330w, https:\/\/demos.reytheme.com\/san-francisco\/wp-content\/uploads\/sites\/24\/2022\/05\/69.jpg 1024w&quot;,&quot;sizes&quot;:&quot;(max-width: 600px) 100vw, 600px&quot;,&quot;full_src&quot;:&quot;https:\/\/demos.reytheme.com\/san-francisco\/wp-content\/uploads\/sites\/24\/2022\/05\/69.jpg&quot;,&quot;full_src_w&quot;:1024,&quot;full_src_h&quot;:1120,&quot;gallery_thumbnail_src&quot;:&quot;https:\/\/demos.reytheme.com\/san-francisco\/wp-content\/uploads\/sites\/24\/2022\/05\/69-100x100.jpg&quot;,&quot;gallery_thumbnail_src_w&quot;:100,&quot;gallery_thumbnail_src_h&quot;:100,&quot;thumb_src&quot;:&quot;https:\/\/demos.reytheme.com\/san-francisco\/wp-content\/uploads\/sites\/24\/2022\/05\/69-330x361.jpg&quot;,&quot;thumb_src_w&quot;:330,&quot;thumb_src_h&quot;:361,&quot;src_w&quot;:600,&quot;src_h&quot;:656},&quot;image_id&quot;:1011,&quot;is_downloadable&quot;:false,&quot;is_in_stock&quot;:true,&quot;is_purchasable&quot;:true,&quot;is_sold_individually&quot;:&quot;no&quot;,&quot;is_virtual&quot;:false,&quot;max_qty&quot;:&quot;&quot;,&quot;min_qty&quot;:1,&quot;price_html&quot;:&quot;&quot;,&quot;sku&quot;:&quot;&quot;,&quot;variation_description&quot;:&quot;&quot;,&quot;variation_id&quot;:1010,&quot;variation_is_active&quot;:true,&quot;variation_is_visible&quot;:true,&quot;weight&quot;:&quot;&quot;,&quot;weight_html&quot;:&quot;N\/A&quot;,&quot;stock_status&quot;:&quot;instock&quot;,&quot;step_qty&quot;:1}]"
                                                  data-atc-text="Add to cart">
                                                <div class="variations">
                                                    <div class="__s-wrapper"><select style="display:none"
                                                                                     id="pa_color1009" class=""
                                                                                     name="attribute_pa_color"
                                                                                     data-attribute_name="attribute_pa_color"
                                                                                     data-show_option_none="yes">
                                                            <option value="">Choose an option</option>
                                                            <option value="grey">Grey</option>
                                                            <option value="white">White</option>
                                                        </select>
                                                        <div aria-label="color" data-attribute_name="attribute_pa_color"
                                                             style=""
                                                             class="rey-swatchList --type-color --light-tooltips --disabled-dim --deselection-clear">
                                                            <div title="Grey" data-term-id="33" data-term-slug="grey"
                                                                 data-attribute-name="pa_color" aria-label="Grey"
                                                                 role="radio" aria-checked="false"
                                                                 class="rey-swatchList-item --type-color rey-swatchList-item--regular "
                                                                 data-description=""><span
                                                                        class="rey-swatchList-itemContent"
                                                                        style="background: #dbdbdb;"></span></div>
                                                            <div title="White" data-term-id="51" data-term-slug="white"
                                                                 data-attribute-name="pa_color" aria-label="White"
                                                                 role="radio" aria-checked="false"
                                                                 class="rey-swatchList-item --type-color rey-swatchList-item--regular "
                                                                 data-description=""><span
                                                                        class="rey-swatchList-itemContent"
                                                                        style="background: #fcfcfc;"></span></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                        <div class="rey-brandLink --catalog"><a
                                                    href="/babui/assets/client-view/product-brand/x-form/">X-Form</a>
                                        </div>
                                        <h2 class="woocommerce-loop-product__title"><a
                                                    href="/babui/assets/client-view/product/immersive-flight-drone/">Immersive
                                                flight drone</a></h2>
                                        <div class="__break"></div>
                                        <span class="price rey-loopPrice"><span class="woocommerce-Price-amount amount"><bdi><span
                                                            class="woocommerce-Price-currencySymbol">$</span>399.00</bdi></span></span>
                                        <div class="rey-loopButtons">
                                            <a href="/babui/assets/client-view/product/immersive-flight-drone/"
                                               data-quantity="1"
                                               class="button product_type_variable add_to_cart_button rey-btn--hover"
                                               data-product_id="1009" data-product_sku=""
                                               aria-label="Select options for “Immersive flight drone”"
                                               rel="nofollow"><span class="__text">Select options</span></a> <span
                                                    id="woocommerce_loop_add_to_cart_link_describedby_1009"
                                                    class="screen-reader-text">
		This product has multiple variants. The options may be chosen on the product page	</span>
                                            <button class="button rey-btn--hover rey-quickviewBtn js-rey-quickviewBtn"
                                                    data-id="1009" title="QUICKVIEW">QUICKVIEW
                                            </button>
                                        </div>
                                    </div>
                                </div>

                            </li>


                            <li class="rey-swatches rey-swatches--stretch-labels product type-product post-921 status-publish instock product_cat-accessories-cameras product_cat-action product_cat-cameras product_cat-dslr product_cat-lenses product_cat-mirrorless has-post-thumbnail sale shipping-taxable purchasable product-type-variable is-animated --shadow- --shadow-h-1 --extraImg-second --extraImg-mobile rey-wc-skin--proto rey-wc-loopAlign-left --uncropped"
                                data-pid="921">

                                <div class="rey-productInner ">
                                    <div class="rey-productThumbnail"><a
                                                href="/babui/assets/client-view/product/mirrorless-camera-lens/"
                                                class="woocommerce-LoopProduct-link woocommerce-loop-product__link"
                                                aria-label="Mirrorless camera lens"><img width="330" height="361"
                                                                                         src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20330%20361'%3E%3C/svg%3E"
                                                                                         class="rey-productThumbnail__second"
                                                                                         alt="" decoding="async"
                                                                                         data-lazy-srcset="/babui/assets/client-view/wp-content/uploads/sites/24/2022/04/50-330x361.jpg 330w, /babui/assets/client-view/wp-content/uploads/sites/24/2022/04/50-274x300.jpg 274w, /babui/assets/client-view/wp-content/uploads/sites/24/2022/04/50-936x1024.jpg 936w, /babui/assets/client-view/wp-content/uploads/sites/24/2022/04/50-768x840.jpg 768w, /babui/assets/client-view/wp-content/uploads/sites/24/2022/04/50-600x656.jpg 600w, /babui/assets/client-view/wp-content/uploads/sites/24/2022/04/50.jpg 1024w"
                                                                                         data-lazy-sizes="(max-width: 330px) 100vw, 330px"
                                                                                         data-lazy-src="/babui/assets/client-view/wp-content/uploads/sites/24/2022/04/50-330x361.jpg">
                                            <noscript><img loading="lazy" width="330" height="361"
                                                           src="/babui/assets/client-view/wp-content/uploads/sites/24/2022/04/50-330x361.jpg"
                                                           class="rey-productThumbnail__second" alt="" decoding="async"
                                                           srcset="/babui/assets/client-view/wp-content/uploads/sites/24/2022/04/50-330x361.jpg 330w, /babui/assets/client-view/wp-content/uploads/sites/24/2022/04/50-274x300.jpg 274w, /babui/assets/client-view/wp-content/uploads/sites/24/2022/04/50-936x1024.jpg 936w, /babui/assets/client-view/wp-content/uploads/sites/24/2022/04/50-768x840.jpg 768w, /babui/assets/client-view/wp-content/uploads/sites/24/2022/04/50-600x656.jpg 600w, /babui/assets/client-view/wp-content/uploads/sites/24/2022/04/50.jpg 1024w"
                                                           sizes="(max-width: 330px) 100vw, 330px"/></noscript>
                                            <img width="330" height="361"
                                                 src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20330%20361'%3E%3C/svg%3E"
                                                 class="rey-thumbImg img--1 attachment-woocommerce_thumbnail size-woocommerce_thumbnail"
                                                 alt="" decoding="async"
                                                 data-lazy-srcset="/babui/assets/client-view/wp-content/uploads/sites/24/2022/04/49-330x361.jpg 330w, /babui/assets/client-view/wp-content/uploads/sites/24/2022/04/49-274x300.jpg 274w, /babui/assets/client-view/wp-content/uploads/sites/24/2022/04/49-936x1024.jpg 936w, /babui/assets/client-view/wp-content/uploads/sites/24/2022/04/49-768x840.jpg 768w, /babui/assets/client-view/wp-content/uploads/sites/24/2022/04/49-600x656.jpg 600w, /babui/assets/client-view/wp-content/uploads/sites/24/2022/04/49.jpg 1024w"
                                                 data-lazy-sizes="(max-width: 330px) 100vw, 330px"
                                                 data-lazy-src="/babui/assets/client-view/wp-content/uploads/sites/24/2022/04/49-330x361.jpg">
                                            <noscript><img loading="lazy" width="330" height="361"
                                                           src="/babui/assets/client-view/wp-content/uploads/sites/24/2022/04/49-330x361.jpg"
                                                           class="rey-thumbImg img--1 attachment-woocommerce_thumbnail size-woocommerce_thumbnail"
                                                           alt="" decoding="async"
                                                           srcset="/babui/assets/client-view/wp-content/uploads/sites/24/2022/04/49-330x361.jpg 330w, /babui/assets/client-view/wp-content/uploads/sites/24/2022/04/49-274x300.jpg 274w, /babui/assets/client-view/wp-content/uploads/sites/24/2022/04/49-936x1024.jpg 936w, /babui/assets/client-view/wp-content/uploads/sites/24/2022/04/49-768x840.jpg 768w, /babui/assets/client-view/wp-content/uploads/sites/24/2022/04/49-600x656.jpg 600w, /babui/assets/client-view/wp-content/uploads/sites/24/2022/04/49.jpg 1024w"
                                                           sizes="(max-width: 330px) 100vw, 330px"/></noscript>
                                        </a>
                                        <div class="rey-thPos rey-thPos--top-left" data-position="top-left"><span
                                                    class="rey-discount">Save $160.00</span>
                                            <div class="rey-schedSale --loop" data-position="top_left">
                                                <div class="rey-badgeSale --loop --bg">
                                                    <svg class="rey-icon" width="100%" height="100%" viewBox="0 0 14 14"
                                                         fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M7.72461 0.0374277C7.48398 0.0131834 7.24229 0.0011146 7.00048 0.00122141H6.99322C6.59303 0.00784321 6.27305 0.335943 6.27646 0.736241V3.62164C6.2755 3.71883 6.29526 3.81506 6.33435 3.90402C6.45963 4.20222 6.76808 4.38058 7.08892 4.34053C7.45952 4.28499 7.73145 3.96341 7.72461 3.58885V1.49764C10.4284 1.85255 12.4746 4.11806 12.553 6.844C12.6314 9.56993 10.7189 11.9494 8.04 12.4591C5.36105 12.9688 2.70838 11.458 1.78026 8.89376C0.852143 6.32953 1.92317 3.47083 4.30776 2.14775C4.62475 1.96822 4.7574 1.57988 4.61642 1.24398L4.61557 1.24195C4.53653 1.05088 4.37975 0.902747 4.18451 0.8345C3.98938 0.76636 3.77439 0.78473 3.59357 0.884911C0.576484 2.56599 -0.763363 6.19656 0.43828 9.43451C1.63982 12.6726 5.02377 14.5501 8.40708 13.8559C11.7904 13.1618 14.1617 10.1036 13.9913 6.65399C13.8209 3.20446 11.1598 0.394791 7.72461 0.0374277Z"
                                                              fill="currentColor"></path>
                                                        <path d="M4.35554 4.67456C4.64679 5.44151 5.59969 7.25235 6.31249 8.02336C6.7507 8.51807 7.49896 8.58429 8.01728 8.17438C8.27659 7.95682 8.43263 7.64047 8.44759 7.30234C8.46243 6.9643 8.33459 6.63546 8.09546 6.39601C7.34997 5.65063 5.45796 4.66302 4.66463 4.36184C4.57577 4.32841 4.47548 4.35041 4.40862 4.41791C4.34187 4.48552 4.32104 4.58602 4.35554 4.67456Z"
                                                              fill="currentColor"></path>
                                                    </svg>
                                                    <span class="__text">Ends in <strong>+4 days</strong></span></div>
                                            </div>
                                        </div>
                                        <div class="rey-thPos rey-thPos--top-right" data-position="top-right">
                                            <div class="rey-thPos-item --no-margins">
                                                <button class="--icon-style-rounded rey-wishlistBtn rey-wishlistBtn-link"
                                                        data-lazy-hidden="" data-id="921" title="Add to wishlist"
                                                        aria-label="Add to wishlist">
                                                    <svg aria-hidden="true" role="img"
                                                         class="rey-icon rey-icon-heart rey-wishlistBtn-icon"
                                                         viewBox="0 0 24 24">
                                                        <path fill="var(--icon-fill, none)" stroke="currentColor"
                                                              stroke-width="var(--stroke-width, 1.8px)"
                                                              stroke-linecap="round" stroke-linejoin="round"
                                                              d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path>
                                                    </svg>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="rey-loopDetails --padded">
                                        <div class="rey-brandLink --catalog"><a
                                                    href="/babui/assets/client-view/product-brand/quantech/">Quantech</a>
                                        </div>
                                        <h2 class="woocommerce-loop-product__title"><a
                                                    href="/babui/assets/client-view/product/mirrorless-camera-lens/">Mirrorless
                                                camera lens</a></h2>
                                        <div class="__break"></div>
                                        <span class="price rey-loopPrice"><del aria-hidden="true"><span
                                                        class="woocommerce-Price-amount amount"><bdi><span
                                                                class="woocommerce-Price-currencySymbol">$</span>489.00</bdi></span></del> <span
                                                    class="screen-reader-text">Original price was: $489.00.</span><ins
                                                    aria-hidden="true"><span class="woocommerce-Price-amount amount"><bdi><span
                                                                class="woocommerce-Price-currencySymbol">$</span>329.00</bdi></span></ins><span
                                                    class="screen-reader-text">Current price is: $329.00.</span><span
                                                    class="rey-discount">Save $160.00</span></span>
                                        <div class="rey-loopButtons">
                                            <a href="/babui/assets/client-view/product/mirrorless-camera-lens/"
                                               data-quantity="1"
                                               class="button product_type_variable add_to_cart_button rey-btn--hover"
                                               data-product_id="921" data-product_sku=""
                                               aria-label="Select options for “Mirrorless camera lens”"
                                               rel="nofollow"><span class="__text">Select options</span></a> <span
                                                    id="woocommerce_loop_add_to_cart_link_describedby_921"
                                                    class="screen-reader-text">
		This product has multiple variants. The options may be chosen on the product page	</span>
                                            <button class="button rey-btn--hover rey-quickviewBtn js-rey-quickviewBtn"
                                                    data-id="921" title="QUICKVIEW">QUICKVIEW
                                            </button>
                                        </div>
                                    </div>
                                </div>

                            </li>


                            <li class="rey-swatches rey-swatches--stretch-labels product type-product post-914 status-publish last instock product_cat-accessories-cameras product_cat-action product_cat-cameras product_cat-dslr product_cat-lenses product_cat-mirrorless has-post-thumbnail shipping-taxable purchasable product-type-simple is-animated --shadow- --shadow-h-1 --extraImg-second --extraImg-mobile rey-wc-skin--proto rey-wc-loopAlign-left --uncropped"
                                data-pid="914">

                                <div class="rey-productInner ">
                                    <div class="rey-productThumbnail"><a
                                                href="/babui/assets/client-view/product/mirrorless-professional-camera/"
                                                class="woocommerce-LoopProduct-link woocommerce-loop-product__link"
                                                aria-label="Mirrorless professional camera"><img width="330"
                                                                                                 height="361"
                                                                                                 src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20330%20361'%3E%3C/svg%3E"
                                                                                                 class="rey-productThumbnail__second"
                                                                                                 alt="" decoding="async"
                                                                                                 data-lazy-srcset="/babui/assets/client-view/wp-content/uploads/sites/24/2022/04/46-330x361.jpg 330w, /babui/assets/client-view/wp-content/uploads/sites/24/2022/04/46-274x300.jpg 274w, /babui/assets/client-view/wp-content/uploads/sites/24/2022/04/46-936x1024.jpg 936w, /babui/assets/client-view/wp-content/uploads/sites/24/2022/04/46-768x840.jpg 768w, /babui/assets/client-view/wp-content/uploads/sites/24/2022/04/46-600x656.jpg 600w, /babui/assets/client-view/wp-content/uploads/sites/24/2022/04/46.jpg 1024w"
                                                                                                 data-lazy-sizes="(max-width: 330px) 100vw, 330px"
                                                                                                 data-lazy-src="/babui/assets/client-view/wp-content/uploads/sites/24/2022/04/46-330x361.jpg">
                                            <noscript><img loading="lazy" width="330" height="361"
                                                           src="/babui/assets/client-view/wp-content/uploads/sites/24/2022/04/46-330x361.jpg"
                                                           class="rey-productThumbnail__second" alt="" decoding="async"
                                                           srcset="/babui/assets/client-view/wp-content/uploads/sites/24/2022/04/46-330x361.jpg 330w, /babui/assets/client-view/wp-content/uploads/sites/24/2022/04/46-274x300.jpg 274w, /babui/assets/client-view/wp-content/uploads/sites/24/2022/04/46-936x1024.jpg 936w, /babui/assets/client-view/wp-content/uploads/sites/24/2022/04/46-768x840.jpg 768w, /babui/assets/client-view/wp-content/uploads/sites/24/2022/04/46-600x656.jpg 600w, /babui/assets/client-view/wp-content/uploads/sites/24/2022/04/46.jpg 1024w"
                                                           sizes="(max-width: 330px) 100vw, 330px"/></noscript>
                                            <img width="330" height="361"
                                                 src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20330%20361'%3E%3C/svg%3E"
                                                 class="rey-thumbImg img--1 attachment-woocommerce_thumbnail size-woocommerce_thumbnail"
                                                 alt="" decoding="async"
                                                 data-lazy-srcset="/babui/assets/client-view/wp-content/uploads/sites/24/2022/04/45-330x361.jpg 330w, /babui/assets/client-view/wp-content/uploads/sites/24/2022/04/45-274x300.jpg 274w, /babui/assets/client-view/wp-content/uploads/sites/24/2022/04/45-936x1024.jpg 936w, /babui/assets/client-view/wp-content/uploads/sites/24/2022/04/45-768x840.jpg 768w, /babui/assets/client-view/wp-content/uploads/sites/24/2022/04/45-600x656.jpg 600w, /babui/assets/client-view/wp-content/uploads/sites/24/2022/04/45.jpg 1024w"
                                                 data-lazy-sizes="(max-width: 330px) 100vw, 330px"
                                                 data-lazy-src="/babui/assets/client-view/wp-content/uploads/sites/24/2022/04/45-330x361.jpg">
                                            <noscript><img loading="lazy" width="330" height="361"
                                                           src="/babui/assets/client-view/wp-content/uploads/sites/24/2022/04/45-330x361.jpg"
                                                           class="rey-thumbImg img--1 attachment-woocommerce_thumbnail size-woocommerce_thumbnail"
                                                           alt="" decoding="async"
                                                           srcset="/babui/assets/client-view/wp-content/uploads/sites/24/2022/04/45-330x361.jpg 330w, /babui/assets/client-view/wp-content/uploads/sites/24/2022/04/45-274x300.jpg 274w, /babui/assets/client-view/wp-content/uploads/sites/24/2022/04/45-936x1024.jpg 936w, /babui/assets/client-view/wp-content/uploads/sites/24/2022/04/45-768x840.jpg 768w, /babui/assets/client-view/wp-content/uploads/sites/24/2022/04/45-600x656.jpg 600w, /babui/assets/client-view/wp-content/uploads/sites/24/2022/04/45.jpg 1024w"
                                                           sizes="(max-width: 330px) 100vw, 330px"/></noscript>
                                        </a>
                                        <div class="rey-thPos rey-thPos--top-right" data-position="top-right">
                                            <div class="rey-thPos-item --no-margins">
                                                <button class="--icon-style-rounded rey-wishlistBtn rey-wishlistBtn-link"
                                                        data-lazy-hidden="" data-id="914" title="Add to wishlist"
                                                        aria-label="Add to wishlist">
                                                    <svg aria-hidden="true" role="img"
                                                         class="rey-icon rey-icon-heart rey-wishlistBtn-icon"
                                                         viewBox="0 0 24 24">
                                                        <path fill="var(--icon-fill, none)" stroke="currentColor"
                                                              stroke-width="var(--stroke-width, 1.8px)"
                                                              stroke-linecap="round" stroke-linejoin="round"
                                                              d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path>
                                                    </svg>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="rey-loopDetails --padded">
                                        <div class="rey-brandLink --catalog"><a
                                                    href="/babui/assets/client-view/product-brand/x-form/">X-Form</a>
                                        </div>
                                        <h2 class="woocommerce-loop-product__title"><a
                                                    href="/babui/assets/client-view/product/mirrorless-professional-camera/">Mirrorless
                                                professional camera</a></h2>
                                        <div class="__break"></div>
                                        <span class="price rey-loopPrice"><span class="woocommerce-Price-amount amount"><bdi><span
                                                            class="woocommerce-Price-currencySymbol">$</span>1,899.00</bdi></span></span>
                                        <div class="rey-loopButtons">
                                            <a href="?add-to-cart=914" data-quantity="1"
                                               class="button product_type_simple add_to_cart_button ajax_add_to_cart rey-btn--hover"
                                               data-product_id="914" data-product_sku=""
                                               aria-label="Add to cart: “Mirrorless professional camera”" rel="nofollow"
                                               data-success_message="“Mirrorless professional camera” has been added to your cart"><span
                                                        class="__text">Add to cart</span></a> <span
                                                    id="woocommerce_loop_add_to_cart_link_describedby_914"
                                                    class="screen-reader-text">
			</span>
                                            <button class="button rey-btn--hover rey-quickviewBtn js-rey-quickviewBtn"
                                                    data-id="914" title="QUICKVIEW">QUICKVIEW
                                            </button>
                                        </div>
                                    </div>
                                </div>

                            </li>


                            <li class="rey-swatches rey-swatches--stretch-labels product type-product post-837 status-publish first instock product_cat-accessories product_cat-cables product_cat-cases product_cat-chargers has-post-thumbnail shipping-taxable purchasable product-type-variable is-animated --shadow- --shadow-h-1 --extraImg-second --extraImg-mobile rey-wc-skin--proto rey-wc-loopAlign-left --uncropped"
                                data-pid="837">

                                <div class="rey-productInner ">
                                    <div class="rey-productThumbnail"><a
                                                href="/babui/assets/client-view/product/modern-leather-folio/"
                                                class="woocommerce-LoopProduct-link woocommerce-loop-product__link"
                                                aria-label="Modern Leather Folio"><img width="330" height="361"
                                                                                       src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20330%20361'%3E%3C/svg%3E"
                                                                                       class="rey-productThumbnail__second"
                                                                                       alt="" decoding="async"
                                                                                       data-lazy-srcset="/babui/assets/client-view/wp-content/uploads/sites/24/2022/03/28-330x361.jpg 330w, /babui/assets/client-view/wp-content/uploads/sites/24/2022/03/28-274x300.jpg 274w, /babui/assets/client-view/wp-content/uploads/sites/24/2022/03/28-936x1024.jpg 936w, /babui/assets/client-view/wp-content/uploads/sites/24/2022/03/28-768x840.jpg 768w, /babui/assets/client-view/wp-content/uploads/sites/24/2022/03/28-600x656.jpg 600w, /babui/assets/client-view/wp-content/uploads/sites/24/2022/03/28.jpg 1024w"
                                                                                       data-lazy-sizes="(max-width: 330px) 100vw, 330px"
                                                                                       data-lazy-src="/babui/assets/client-view/wp-content/uploads/sites/24/2022/03/28-330x361.jpg">
                                            <noscript><img loading="lazy" width="330" height="361"
                                                           src="/babui/assets/client-view/wp-content/uploads/sites/24/2022/03/28-330x361.jpg"
                                                           class="rey-productThumbnail__second" alt="" decoding="async"
                                                           srcset="/babui/assets/client-view/wp-content/uploads/sites/24/2022/03/28-330x361.jpg 330w, /babui/assets/client-view/wp-content/uploads/sites/24/2022/03/28-274x300.jpg 274w, /babui/assets/client-view/wp-content/uploads/sites/24/2022/03/28-936x1024.jpg 936w, /babui/assets/client-view/wp-content/uploads/sites/24/2022/03/28-768x840.jpg 768w, /babui/assets/client-view/wp-content/uploads/sites/24/2022/03/28-600x656.jpg 600w, /babui/assets/client-view/wp-content/uploads/sites/24/2022/03/28.jpg 1024w"
                                                           sizes="(max-width: 330px) 100vw, 330px"/></noscript>
                                            <img width="330" height="361"
                                                 src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20330%20361'%3E%3C/svg%3E"
                                                 class="rey-thumbImg img--1 attachment-woocommerce_thumbnail size-woocommerce_thumbnail"
                                                 alt="" decoding="async"
                                                 data-lazy-srcset="/babui/assets/client-view/wp-content/uploads/sites/24/2022/03/27-330x361.jpg 330w, /babui/assets/client-view/wp-content/uploads/sites/24/2022/03/27-274x300.jpg 274w, /babui/assets/client-view/wp-content/uploads/sites/24/2022/03/27-936x1024.jpg 936w, /babui/assets/client-view/wp-content/uploads/sites/24/2022/03/27-768x840.jpg 768w, /babui/assets/client-view/wp-content/uploads/sites/24/2022/03/27-600x656.jpg 600w, /babui/assets/client-view/wp-content/uploads/sites/24/2022/03/27.jpg 1024w"
                                                 data-lazy-sizes="(max-width: 330px) 100vw, 330px"
                                                 data-lazy-src="/babui/assets/client-view/wp-content/uploads/sites/24/2022/03/27-330x361.jpg">
                                            <noscript><img loading="lazy" width="330" height="361"
                                                           src="/babui/assets/client-view/wp-content/uploads/sites/24/2022/03/27-330x361.jpg"
                                                           class="rey-thumbImg img--1 attachment-woocommerce_thumbnail size-woocommerce_thumbnail"
                                                           alt="" decoding="async"
                                                           srcset="/babui/assets/client-view/wp-content/uploads/sites/24/2022/03/27-330x361.jpg 330w, /babui/assets/client-view/wp-content/uploads/sites/24/2022/03/27-274x300.jpg 274w, /babui/assets/client-view/wp-content/uploads/sites/24/2022/03/27-936x1024.jpg 936w, /babui/assets/client-view/wp-content/uploads/sites/24/2022/03/27-768x840.jpg 768w, /babui/assets/client-view/wp-content/uploads/sites/24/2022/03/27-600x656.jpg 600w, /babui/assets/client-view/wp-content/uploads/sites/24/2022/03/27.jpg 1024w"
                                                           sizes="(max-width: 330px) 100vw, 330px"/></noscript>
                                        </a>
                                        <div class="rey-thPos rey-thPos--top-right" data-position="top-right">
                                            <div class="rey-thPos-item --no-margins">
                                                <button class="--icon-style-rounded rey-wishlistBtn rey-wishlistBtn-link"
                                                        data-lazy-hidden="" data-id="837" title="Add to wishlist"
                                                        aria-label="Add to wishlist">
                                                    <svg aria-hidden="true" role="img"
                                                         class="rey-icon rey-icon-heart rey-wishlistBtn-icon"
                                                         viewBox="0 0 24 24">
                                                        <path fill="var(--icon-fill, none)" stroke="currentColor"
                                                              stroke-width="var(--stroke-width, 1.8px)"
                                                              stroke-linecap="round" stroke-linejoin="round"
                                                              d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path>
                                                    </svg>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="rey-loopDetails --padded">
                                        <div data-attribute="color" data-position="first"
                                             class="rey-productVariations2 --single-attr  --side">
                                            <form class="variations_form cart --catalog"
                                                  action="/babui/assets/client-view/product/modern-leather-folio/"
                                                  method="post" enctype="multipart/form-data" data-product_id="837"
                                                  data-product_variations="[{&quot;attributes&quot;:{&quot;attribute_pa_color&quot;:&quot;&quot;},&quot;availability_html&quot;:&quot;&quot;,&quot;backorders_allowed&quot;:false,&quot;dimensions&quot;:{&quot;length&quot;:&quot;&quot;,&quot;width&quot;:&quot;&quot;,&quot;height&quot;:&quot;&quot;},&quot;dimensions_html&quot;:&quot;N\/A&quot;,&quot;display_price&quot;:49,&quot;display_regular_price&quot;:49,&quot;image&quot;:{&quot;title&quot;:&quot;27&quot;,&quot;caption&quot;:&quot;&quot;,&quot;url&quot;:&quot;https:\/\/demos.reytheme.com\/san-francisco\/wp-content\/uploads\/sites\/24\/2022\/03\/27.jpg&quot;,&quot;alt&quot;:&quot;27&quot;,&quot;src&quot;:&quot;https:\/\/demos.reytheme.com\/san-francisco\/wp-content\/uploads\/sites\/24\/2022\/03\/27-600x656.jpg&quot;,&quot;srcset&quot;:&quot;https:\/\/demos.reytheme.com\/san-francisco\/wp-content\/uploads\/sites\/24\/2022\/03\/27-600x656.jpg 600w, https:\/\/demos.reytheme.com\/san-francisco\/wp-content\/uploads\/sites\/24\/2022\/03\/27-274x300.jpg 274w, https:\/\/demos.reytheme.com\/san-francisco\/wp-content\/uploads\/sites\/24\/2022\/03\/27-936x1024.jpg 936w, https:\/\/demos.reytheme.com\/san-francisco\/wp-content\/uploads\/sites\/24\/2022\/03\/27-768x840.jpg 768w, https:\/\/demos.reytheme.com\/san-francisco\/wp-content\/uploads\/sites\/24\/2022\/03\/27-330x361.jpg 330w, https:\/\/demos.reytheme.com\/san-francisco\/wp-content\/uploads\/sites\/24\/2022\/03\/27.jpg 1024w&quot;,&quot;sizes&quot;:&quot;(max-width: 600px) 100vw, 600px&quot;,&quot;full_src&quot;:&quot;https:\/\/demos.reytheme.com\/san-francisco\/wp-content\/uploads\/sites\/24\/2022\/03\/27.jpg&quot;,&quot;full_src_w&quot;:1024,&quot;full_src_h&quot;:1120,&quot;gallery_thumbnail_src&quot;:&quot;https:\/\/demos.reytheme.com\/san-francisco\/wp-content\/uploads\/sites\/24\/2022\/03\/27-100x100.jpg&quot;,&quot;gallery_thumbnail_src_w&quot;:100,&quot;gallery_thumbnail_src_h&quot;:100,&quot;thumb_src&quot;:&quot;https:\/\/demos.reytheme.com\/san-francisco\/wp-content\/uploads\/sites\/24\/2022\/03\/27-330x361.jpg&quot;,&quot;thumb_src_w&quot;:330,&quot;thumb_src_h&quot;:361,&quot;src_w&quot;:600,&quot;src_h&quot;:656},&quot;image_id&quot;:838,&quot;is_downloadable&quot;:false,&quot;is_in_stock&quot;:true,&quot;is_purchasable&quot;:true,&quot;is_sold_individually&quot;:&quot;no&quot;,&quot;is_virtual&quot;:false,&quot;max_qty&quot;:&quot;&quot;,&quot;min_qty&quot;:1,&quot;price_html&quot;:&quot;&quot;,&quot;sku&quot;:&quot;&quot;,&quot;variation_description&quot;:&quot;&quot;,&quot;variation_id&quot;:871,&quot;variation_is_active&quot;:true,&quot;variation_is_visible&quot;:true,&quot;weight&quot;:&quot;&quot;,&quot;weight_html&quot;:&quot;N\/A&quot;,&quot;stock_status&quot;:&quot;instock&quot;,&quot;step_qty&quot;:1}]"
                                                  data-atc-text="Add to cart">
                                                <div class="variations">
                                                    <div class="__s-wrapper"><select style="display:none"
                                                                                     id="pa_color837" class=""
                                                                                     name="attribute_pa_color"
                                                                                     data-attribute_name="attribute_pa_color"
                                                                                     data-show_option_none="yes">
                                                            <option value="">Choose an option</option>
                                                            <option value="black">Black</option>
                                                            <option value="brown">Brown</option>
                                                        </select>
                                                        <div aria-label="color" data-attribute_name="attribute_pa_color"
                                                             style=""
                                                             class="rey-swatchList --type-color --light-tooltips --disabled-dim --deselection-clear">
                                                            <div title="Black" data-term-id="22" data-term-slug="black"
                                                                 data-attribute-name="pa_color" aria-label="Black"
                                                                 role="radio" aria-checked="false"
                                                                 class="rey-swatchList-item --type-color rey-swatchList-item--regular "
                                                                 data-description=""><span
                                                                        class="rey-swatchList-itemContent"
                                                                        style="background: #45464c;"></span></div>
                                                            <div title="Brown" data-term-id="24" data-term-slug="brown"
                                                                 data-attribute-name="pa_color" aria-label="Brown"
                                                                 role="radio" aria-checked="false"
                                                                 class="rey-swatchList-item --type-color rey-swatchList-item--regular "
                                                                 data-description=""><span
                                                                        class="rey-swatchList-itemContent"
                                                                        style="background: #956b45;"></span></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                        <div class="rey-brandLink --catalog"><a
                                                    href="/babui/assets/client-view/product-brand/x-form/">X-Form</a>
                                        </div>
                                        <h2 class="woocommerce-loop-product__title"><a
                                                    href="/babui/assets/client-view/product/modern-leather-folio/">Modern
                                                Leather Folio</a></h2>
                                        <div class="__break"></div>
                                        <span class="price rey-loopPrice"><span class="woocommerce-Price-amount amount"><bdi><span
                                                            class="woocommerce-Price-currencySymbol">$</span>49.00</bdi></span></span>
                                        <div class="rey-loopButtons">
                                            <a href="/babui/assets/client-view/product/modern-leather-folio/"
                                               data-quantity="1"
                                               class="button product_type_variable add_to_cart_button rey-btn--hover"
                                               data-product_id="837" data-product_sku=""
                                               aria-label="Select options for “Modern Leather Folio”"
                                               rel="nofollow"><span class="__text">Select options</span></a> <span
                                                    id="woocommerce_loop_add_to_cart_link_describedby_837"
                                                    class="screen-reader-text">
		This product has multiple variants. The options may be chosen on the product page	</span>
                                            <button class="button rey-btn--hover rey-quickviewBtn js-rey-quickviewBtn"
                                                    data-id="837" title="QUICKVIEW">QUICKVIEW
                                            </button>
                                        </div>
                                    </div>
                                </div>

                            </li>

                        </ul>
                        <div data-colspans="4"></div>
                        <nav class="rey-ajaxLoadMore --invisible"><a data-post-type="product"
                                                                     data-target=".rey-siteMain ul.products, .elementor-widget-reycore-woo-loop-products ul.products"
                                                                     data-items="li.product, .rey-postItem"
                                                                     data-text="SHOW MORE" aria-label="SHOW MORE"
                                                                     data-end-text="END"
                                                                     href="/babui/assets/client-view/shop/page/2/"
                                                                     class="rey-ajaxLoadMore-btn btn js-rey-ajaxLoadMore btn-line-active"
                                                                     data-end-count="(2 / 2)" data-count="(1 / 2)"
                                                                     data-history="1"><span
                                        class="rey-ajaxLoadMore-counter">(1 / 2)</span></a>
                            <div class="rey-lineLoader"></div>
                        </nav>
                    </div><!-- .reyajfilter-before-products -->
                </main>
                <!-- .rey-siteMain -->

            </div>


        </div>
        <!-- .rey-siteContainer -->

    </div>
    <!-- .rey-siteContent -->


    <footer class="rey-siteFooter rey-siteFooter--custom">

        <div data-elementor-type="wp-post" data-elementor-id="473" class="elementor elementor-473"
             data-elementor-gstype="footer" data-page-el-selector="body.elementor-page-473">
            <section
                    class="elementor-section elementor-top-section elementor-element elementor-element-acfe834 rey-flexWrap rey-section-bg--classic elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                    data-id="acfe834" data-element_type="section"
                    data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                <div class="elementor-container elementor-column-gap-default">
                    <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-4f38093"
                         data-id="4f38093" data-element_type="column">
                        <div class="elementor-column-wrap--4f38093 elementor-widget-wrap elementor-element-populated">
                            <div class="elementor-element elementor-element-7e0c78e elementor-widget elementor-widget-reycore-header-logo"
                                 data-id="7e0c78e" data-element_type="widget"
                                 data-widget_type="reycore-header-logo.default">
                                <div class="elementor-widget-container">

                                    <div class="rey-logoWrapper">


                                        <div class="rey-siteLogo">
                                            <a href="/babui/assets/client-view/" data-no-lazy="1" data-skip-lazy="1"
                                               class="no-lazy custom-logo-link" rel="home" itemprop="url"><img
                                                        width="41" height="21"
                                                        src="/babui/assets/client-view/wp-content/uploads/sites/24/2022/03/logo-black-mobile.svg"
                                                        data-no-lazy="1" data-skip-lazy="1" class="no-lazy custom-logo"
                                                        alt="San Francisco" loading="eager" decoding="async"></a></div>

                                    </div>
                                    <!-- .rey-logoWrapper -->
                                </div>
                            </div>
                            <div class="elementor-element elementor-element-2fd8854 elementor-position-left elementor-vertical-align-middle elementor-widget__width-initial elementor-view-default elementor-mobile-position-top elementor-widget elementor-widget-icon-box"
                                 data-id="2fd8854" data-element_type="widget" data-widget_type="icon-box.default">
                                <div class="elementor-widget-container">
                                    <div class="elementor-icon-box-wrapper">

                                        <div class="elementor-icon-box-icon">
				<span class="elementor-icon elementor-animation-">
				<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path
                            d="M19.3285 2.97311C17.4113 1.05586 14.8622 0 12.1508 0C9.43947 0 6.8903 1.05586 4.97311 2.97311C3.05586 4.89039 2 7.43947 2 10.1508C2 15.6357 7.18618 20.1979 9.97239 22.6488C10.3596 22.9894 10.6939 23.2835 10.9603 23.5323C11.2941 23.8441 11.7225 24 12.1508 24C12.5792 24 13.0075 23.8441 13.3413 23.5323C13.6077 23.2835 13.942 22.9894 14.3292 22.6488C17.1154 20.1978 22.3016 15.6357 22.3016 10.1508C22.3015 7.43947 21.2457 4.89039 19.3285 2.97311ZM13.4006 21.5932C13.0049 21.9413 12.6633 22.2419 12.3815 22.505C12.2521 22.6258 12.0494 22.6259 11.92 22.505C11.6383 22.2418 11.2966 21.9412 10.9009 21.5932C8.28151 19.289 3.40579 15 3.40579 10.1508C3.40579 5.32886 7.32872 1.40593 12.1507 1.40593C16.9727 1.40593 20.8956 5.32886 20.8956 10.1508C20.8957 15 16.02 19.289 13.4006 21.5932Z"></path><path
                            d="M12.1508 5.294C9.68419 5.294 7.67747 7.30068 7.67747 9.7673C7.67747 12.2339 9.68419 14.2406 12.1508 14.2406C14.6174 14.2406 16.6241 12.2339 16.6241 9.7673C16.6241 7.30068 14.6174 5.294 12.1508 5.294ZM12.1508 12.8347C10.4594 12.8347 9.08335 11.4586 9.08335 9.76726C9.08335 8.07591 10.4594 6.69984 12.1508 6.69984C13.8422 6.69984 15.2182 8.07591 15.2182 9.76726C15.2182 11.4586 13.8422 12.8347 12.1508 12.8347Z"></path></svg>				</span>
                                        </div>

                                        <div class="elementor-icon-box-content">


                                            <p class="elementor-icon-box-description">
                                                17 Irving Pl, New York, <br>
                                                NY 10003 </p>

                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="elementor-element elementor-element-6268c56 elementor-widget__width-initial elementor-widget elementor-widget-text-editor"
                                 data-id="6268c56" data-element_type="widget" data-widget_type="text-editor.default">
                                <div class="elementor-widget-container">
                                    <p><a href="mailto:care@reytheme.com">care@reytheme.com</a> <br>778 568 999</p>
                                </div>
                            </div>
                            <div class="elementor-element elementor-element-1d0bf29 e-grid-align-left elementor-shape-rounded elementor-grid-0 elementor-widget elementor-widget-social-icons"
                                 data-id="1d0bf29" data-element_type="widget" data-widget_type="social-icons.default">
                                <div class="elementor-widget-container">
                                    <div class="elementor-social-icons-wrapper elementor-grid">
							<span class="elementor-grid-item">
					<a class="elementor-icon elementor-social-icon elementor-social-icon- elementor-repeater-item-e292ce8"
                       href="#" target="_blank">
						<span class="elementor-screen-only"></span>
						<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path
                                    d="M17.152 7.77131H13.354V5.2804C13.354 4.34494 13.974 4.12685 14.4107 4.12685C14.8464 4.12685 17.0909 4.12685 17.0909 4.12685V0.0144069L13.3997 0C9.30217 0 8.3697 3.06719 8.3697 5.03001V7.77131H6V12.0089H8.3697C8.3697 17.4473 8.3697 24 8.3697 24H13.354C13.354 24 13.354 17.3827 13.354 12.0089H16.7173L17.152 7.77131Z"></path></svg>					</a>
				</span>
                                        <span class="elementor-grid-item">
					<a class="elementor-icon elementor-social-icon elementor-social-icon- elementor-repeater-item-633a9ab"
                       href="#" target="_blank">
						<span class="elementor-screen-only"></span>
						<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path
                                    d="M12.0027 5.84534C8.59742 5.84534 5.85071 8.5921 5.85071 11.9973C5.85071 15.4025 8.59742 18.1491 12.0027 18.1491C15.408 18.1491 18.1546 15.4025 18.1546 11.9973C18.1546 8.5921 15.4079 5.84534 12.0027 5.84534ZM12.0027 15.9969C9.80217 15.9969 8.00311 14.2032 8.00311 11.9973C8.00311 9.79142 9.79675 7.99778 12.0027 7.99778C14.2085 7.99778 16.0022 9.79142 16.0022 11.9973C16.0022 14.2032 14.2033 15.9969 12.0027 15.9969ZM19.8411 5.59376C19.8411 6.39155 19.1986 7.02865 18.4063 7.02865C17.6084 7.02865 16.9714 6.38618 16.9714 5.59376C16.9714 4.80134 17.6138 4.15881 18.4063 4.15881C19.1986 4.15881 19.8411 4.80128 19.8411 5.59376ZM23.9156 7.04999C23.8247 5.12795 23.3857 3.42524 21.9775 2.02249C20.5747 0.619685 18.8721 0.18064 16.95 0.0843264C14.9689 -0.0281088 9.03114 -0.0281088 7.05009 0.0843264C5.13327 0.175266 3.43067 0.614363 2.02254 2.01717C0.614363 3.41997 0.180692 5.12257 0.0843264 7.04467C-0.0281088 9.02567 -0.0281088 14.9635 0.0843264 16.9445C0.17537 18.8667 0.614363 20.5692 2.02254 21.9721C3.43067 23.3749 5.128 23.8139 7.05009 23.9103C9.03109 24.0226 14.9689 24.0226 16.95 23.9103C18.8721 23.8193 20.5748 23.3801 21.9775 21.9721C23.3803 20.5692 23.8193 18.8667 23.9156 16.9445C24.0281 14.9635 24.0281 9.03104 23.9156 7.04999ZM21.3563 19.0702C20.9387 20.1195 20.1302 20.9281 19.0755 21.351C17.496 21.9776 13.7481 21.8329 12.0027 21.8329C10.2571 21.8329 6.50388 21.9721 4.92979 21.351C3.88036 20.9334 3.07182 20.125 2.64889 19.0702C2.02254 17.4907 2.16717 13.7428 2.16717 11.9973C2.16717 10.2518 2.02792 6.49861 2.64895 4.92447C3.06665 3.87504 3.87504 3.06655 4.92984 2.64362C6.50931 2.01717 10.2572 2.16174 12.0027 2.16174C13.7481 2.16174 17.5014 2.02254 19.0755 2.64362C20.1249 3.06112 20.9334 3.86972 21.3564 4.92447C21.9828 6.50388 21.8383 10.2518 21.8383 11.9973C21.8383 13.7428 21.9828 17.496 21.3563 19.0702Z"></path></svg>					</a>
				</span>
                                        <span class="elementor-grid-item">
					<a class="elementor-icon elementor-social-icon elementor-social-icon- elementor-repeater-item-d46055d"
                       href="#" target="_blank">
						<span class="elementor-screen-only"></span>
						<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path
                                    d="M12.3298 0.00200569C9.91044 -0.0486895 7.5699 0.863393 5.82273 2.53776C4.07556 4.21213 3.06475 6.51176 3.01249 8.93114C2.94548 9.89584 3.14911 10.8601 3.60044 11.7153C4.05178 12.5706 4.7329 13.2828 5.56712 13.7719C5.6626 13.8293 5.77028 13.8632 5.88137 13.8711C5.99247 13.8789 6.10385 13.8604 6.20644 13.8171C6.30904 13.7738 6.39994 13.7068 6.47176 13.6217C6.54358 13.5366 6.59428 13.4357 6.61973 13.3272L6.87397 12.2418C6.9051 12.1253 6.90397 12.0025 6.8707 11.8866C6.83742 11.7707 6.77326 11.666 6.68507 11.5837C6.27871 11.1753 5.97789 10.6741 5.80861 10.1235C5.63932 9.57277 5.60666 8.98915 5.71344 8.42302C5.86408 6.7825 6.61889 5.25647 7.83135 4.14115C9.0438 3.02583 10.6274 2.40079 12.2748 2.38734C16.39 2.31456 18.8805 4.88988 18.0284 9.8602C17.1244 15.1338 12.7828 16.2717 11.7547 13.4123C11.602 12.8881 11.615 12.3296 11.792 11.8132C12.028 10.9959 12.4375 9.71388 12.6376 9.00319C13.1109 7.3226 12.9442 5.76435 11.4148 5.38869C10.2293 5.09752 9.03423 5.89807 8.51698 7.71681C8.26262 8.79958 8.36742 9.93571 8.81554 10.9537L7.0055 18.4507C6.87844 18.9769 6.82605 19.5183 6.84987 20.0591L7.01052 23.7026C7.01357 23.7709 7.03899 23.8362 7.08285 23.8886C7.12672 23.941 7.18659 23.9775 7.25325 23.9924C7.31991 24.0074 7.38963 24 7.45168 23.9714C7.51373 23.9429 7.56466 23.8947 7.5966 23.8343L9.35058 20.5129C9.56127 20.114 9.72444 19.6917 9.83675 19.2547L10.7749 15.6044C13.8853 19.6061 20.4272 16.3896 21.3256 10.3732C22.3454 3.54208 18.4305 0.0574111 12.3298 0.00200569Z"></path></svg>					</a>
				</span>
                                    </div>
                                </div>
                            </div>
                            <div class="elementor-element elementor-element-3c25317 elementor-widget elementor-widget-text-editor"
                                 data-id="3c25317" data-element_type="widget" data-widget_type="text-editor.default">
                                <div class="elementor-widget-container">
                                    <p>© Rey Theme 2024. All rights reserved.</p></div>
                            </div>
                            <div class="elementor-element elementor-element-8ec9781 elementor-absolute rey-default-position-yes --zindexed-1 elementor-hidden-tablet elementor-hidden-mobile elementor-widget elementor-widget-image"
                                 data-id="8ec9781" data-element_type="widget"
                                 data-settings="{&quot;_position&quot;:&quot;absolute&quot;}"
                                 data-widget_type="image.default">
                                <div class="elementor-widget-container">
                                    <img width="540" height="278"
                                         src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20540%20278'%3E%3C/svg%3E"
                                         class="attachment-large size-large wp-image-544" alt=""
                                         data-lazy-src="/babui/assets/client-view/wp-content/uploads/sites/24/2022/03/big-logo-stroke.svg">
                                    <noscript><img loading="lazy" width="540" height="278"
                                                   src="/babui/assets/client-view/wp-content/uploads/sites/24/2022/03/big-logo-stroke.svg"
                                                   class="attachment-large size-large wp-image-544" alt=""/></noscript>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-baef66b"
                         data-id="baef66b" data-element_type="column">
                        <div class="elementor-column-wrap--baef66b elementor-widget-wrap elementor-element-populated">
                            <div class="elementor-element elementor-element-fd170ee elementor-widget elementor-widget-heading"
                                 data-id="fd170ee" data-element_type="widget" data-widget_type="heading.default">
                                <div class="elementor-widget-container">
                                    <h3 class="elementor-heading-title elementor-size-default">Get 5% off by subscribing
                                        to our newsletter</h3></div>
                            </div>
                            <div class="elementor-element elementor-element-9ba906d elementor-widget elementor-widget-text-editor"
                                 data-id="9ba906d" data-element_type="widget" data-widget_type="text-editor.default">
                                <div class="elementor-widget-container">
                                    <p>% be the first to know about new arrivals, special offers, in-store events and
                                        news</p></div>
                            </div>
                            <div class="elementor-element elementor-element-8e02402 --btn-block-yes elementor-widget elementor-widget-reycore-newsletter"
                                 data-id="8e02402" data-element_type="widget"
                                 data-widget_type="reycore-newsletter.default">
                                <div class="elementor-widget-container">

                                    <div class="rey-element rey-newsletterForm rey-nlForm--inline-basic">
                                        <script src="data:text/javascript;base64,KGZ1bmN0aW9uKCkgewoJd2luZG93Lm1jNHdwID0gd2luZG93Lm1jNHdwIHx8IHsKCQlsaXN0ZW5lcnM6IFtdLAoJCWZvcm1zOiB7CgkJCW9uOiBmdW5jdGlvbihldnQsIGNiKSB7CgkJCQl3aW5kb3cubWM0d3AubGlzdGVuZXJzLnB1c2goCgkJCQkJewoJCQkJCQlldmVudCAgIDogZXZ0LAoJCQkJCQljYWxsYmFjazogY2IKCQkJCQl9CgkJCQkpOwoJCQl9CgkJfQoJfQp9KSgpOwo="
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
                                        <form id="mc4wp-form-1" class="mc4wp-form mc4wp-form-212" method="post"
                                              data-id="212" data-name="Newsletter form">
                                            <div class="mc4wp-form-fields"><p>
                                                    <input type="email" name="EMAIL" placeholder="Your email address"
                                                           required="">
                                                </p>

                                                <p>
                                                    <input type="submit" value="JOIN">
                                                </p></div>
                                            <label style="display: none !important;">Leave this field empty if you're
                                                human: <input type="text" name="_mc4wp_honeypot" value="" tabindex="-1"
                                                              autocomplete="off"></label><input type="hidden"
                                                                                                name="_mc4wp_timestamp"
                                                                                                value="1735611686"><input
                                                    type="hidden" name="_mc4wp_form_id" value="212"><input type="hidden"
                                                                                                           name="_mc4wp_form_element_id"
                                                                                                           value="mc4wp-form-1">
                                            <div class="mc4wp-response"></div>
                                        </form><!-- / Mailchimp for WordPress Plugin -->        </div>
                                </div>
                            </div>
                            <section
                                    class="elementor-section elementor-inner-section elementor-element elementor-element-b55a26b elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                    data-id="b55a26b" data-element_type="section">
                                <div class="elementor-container elementor-column-gap-default">
                                    <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-6e294b2"
                                         data-id="6e294b2" data-element_type="column">
                                        <div class="elementor-column-wrap--6e294b2 elementor-widget-wrap elementor-element-populated">
                                            <div class="elementor-element elementor-element-a8ee4d4 reyEl-menu--vertical reyEl-menu--cols-1 --icons-start elementor-widget elementor-widget-reycore-menu"
                                                 data-id="a8ee4d4" data-element_type="widget"
                                                 data-widget_type="reycore-menu.default">
                                                <div class="elementor-widget-container">

                                                    <div class="rey-element reyEl-menu">
                                                        <h4 class="reyEl-menuTitle reyEl-menuTitle--medium">
                                                            <span>Shop</span></h4>
                                                        <div class="reyEl-menu-navWrapper">
                                                            <ul data-menu-qid="2001" id="menu-footer-shop"
                                                                class="reyEl-menu-nav rey-navEl --menuHover-">
                                                                <li id="menu-item-1251"
                                                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1251 o-id-2001">
                                                                    <a href="/babui/assets/client-view/shop/"><span>Shop</span></a>
                                                                </li>
                                                                <li id="menu-item-1255"
                                                                    class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-1255 o-id-46">
                                                                    <a href="/babui/assets/client-view/product-category/speakers/"><span>Speakers</span></a>
                                                                </li>
                                                                <li id="menu-item-1254"
                                                                    class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-1254 o-id-34">
                                                                    <a href="/babui/assets/client-view/product-category/headphones/"><span>Headphones</span></a>
                                                                </li>
                                                                <li id="menu-item-1256"
                                                                    class="menu-item menu-item-type-taxonomy menu-item-object-product_cat  menu-item-1256 o-id-50">
                                                                    <a href="/babui/assets/client-view/product-category/wearables/"
                                                                       aria-current="page"><span>Wearables</span></a>
                                                                </li>
                                                                <li id="menu-item-1253"
                                                                    class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-1253 o-id-27">
                                                                    <a href="/babui/assets/client-view/product-category/cameras/"><span>Cameras</span></a>
                                                                </li>
                                                                <li id="menu-item-1252"
                                                                    class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-1252 o-id-17">
                                                                    <a href="/babui/assets/client-view/product-category/accessories/"><span>Accessories</span></a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-f5eb485"
                                         data-id="f5eb485" data-element_type="column">
                                        <div class="elementor-column-wrap--f5eb485 elementor-widget-wrap elementor-element-populated">
                                            <div class="elementor-element elementor-element-d4659be reyEl-menu--vertical reyEl-menu--cols-1 --icons-start elementor-widget elementor-widget-reycore-menu"
                                                 data-id="d4659be" data-element_type="widget"
                                                 data-widget_type="reycore-menu.default">
                                                <div class="elementor-widget-container">

                                                    <div class="rey-element reyEl-menu">
                                                        <h4 class="reyEl-menuTitle reyEl-menuTitle--medium">
                                                            <span>Help</span></h4>
                                                        <div class="reyEl-menu-navWrapper">
                                                            <ul data-menu-qid="2001" id="menu-footer-help"
                                                                class="reyEl-menu-nav rey-navEl --menuHover-">
                                                                <li id="menu-item-1257"
                                                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1257 o-id-1194">
                                                                    <a href="/babui/assets/client-view/frequently-asked-questions/"><span>FAQs</span></a>
                                                                </li>
                                                                <li id="menu-item-1258"
                                                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1258 o-id-2005">
                                                                    <a href="/babui/assets/client-view/refund-and-exchanges/"><span>Refund and Exchanges</span></a>
                                                                </li>
                                                                <li id="menu-item-1260"
                                                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-privacy-policy menu-item-1260 o-id-1216">
                                                                    <a href="/babui/assets/client-view/privacy-policy/"><span>Privacy Policy</span></a>
                                                                </li>
                                                                <li id="menu-item-1259"
                                                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1259 o-id-1229">
                                                                    <a href="/babui/assets/client-view/terms-conditions/"><span>Terms &amp; Conditions</span></a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-888a7d9"
                                         data-id="888a7d9" data-element_type="column">
                                        <div class="elementor-column-wrap--888a7d9 elementor-widget-wrap elementor-element-populated">
                                            <div class="elementor-element elementor-element-53db867 reyEl-menu--vertical reyEl-menu--cols-1 --icons-start elementor-widget elementor-widget-reycore-menu"
                                                 data-id="53db867" data-element_type="widget"
                                                 data-widget_type="reycore-menu.default">
                                                <div class="elementor-widget-container">

                                                    <div class="rey-element reyEl-menu">
                                                        <h4 class="reyEl-menuTitle reyEl-menuTitle--medium">
                                                            <span>About</span></h4>
                                                        <div class="reyEl-menu-navWrapper">
                                                            <ul data-menu-qid="2001" id="menu-footer-about"
                                                                class="reyEl-menu-nav rey-navEl --menuHover-">
                                                                <li id="menu-item-1262"
                                                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1262 o-id-967">
                                                                    <a href="/babui/assets/client-view/about-us/"><span>About Us</span></a>
                                                                </li>
                                                                <li id="menu-item-1261"
                                                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1261 o-id-970">
                                                                    <a href="/babui/assets/client-view/contact/"><span>Contact</span></a>
                                                                </li>
                                                                <li id="menu-item-1263"
                                                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1263 o-id-963">
                                                                    <a href="/babui/assets/client-view/news/"><span>News</span></a>
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
                </div>
            </section>
        </div>

    </footer>
    <!-- .rey-siteFooter -->


</div>
<!-- .rey-siteWrapper -->


<div data-layout="drop" class="rey-accountPanel-wrapper --layout-drop --invisible rey-header-dropPanel --manual"
     data-location="outside"
     style="--l: auto; --r: unset; --o-top: 70; --o-left: 1468; --w-width: 1831; --t-width: 22; --t-height: 22;">
    <div class="rey-accountPanel rey-header-dropPanel-content" data-lazy-hidden="" aria-modal="true" role="dialog"
         tabindex="-1" style="display: flex;">

        <div class="rey-accountTabs">

            <div class="rey-accountTabs-item --active" data-item="account">
                <span>ACCOUNT</span></div>

            <div class="rey-accountTabs-item" data-item="wishlist">
                <span>Wishlist</span><span class="rey-wishlistCounter-number" data-count="0"></span></div>

        </div>

        <div class="rey-accountWishlist-wrapper " data-account-tab="wishlist">
            <div class="rey-accountPanel-title">
                <a href="/babui/assets/client-view/wishlist/">Wishlist</a><span class="rey-wishlistCounter-number"
                                                                                data-count="0"></span>
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
                               oninput="(function(e){e.target.closest('.rey-form-row').classList.toggle('--has-value',e.target.value)})(arguments[0]);">
                        <label for="username" class="rey-label">Username or email address&nbsp;<span
                                    class="required">*</span></label>
                    </p>

                    <p class="rey-form-row rey-form-row--text">
                        <span class="__passVisibility-wrapper"><input
                                    class="rey-input rey-input--text --suports-visibility" type="password"
                                    name="password" id="password" autocomplete="current-password" required=""
                                    oninput="(function(e){e.target.closest('.rey-form-row').classList.toggle('--has-value',e.target.value)})(arguments[0]);"><span
                                    class="__passVisibility-toggle" data-lazy-hidden=""><svg aria-hidden="true"
                                                                                             role="img"
                                                                                             class="rey-icon rey-icon-eye"
                                                                                             viewBox="0 0 462 346"><g
                                            fill="currentColor"><path
                                                d="M231,346 C361.436183,346 462,200.328259 462,173 C462,140.487458 358.577777,0 231,0 C93.5440287,0 -9.09494702e-13,147.592833 0,173 C-9.09494702e-13,202.891659 98.7537165,346 231,346 Z M56.5824289,160.219944 C66.7713209,143.972119 80.8380648,126.358481 96.9838655,110.409249 C137.421767,70.4636625 183.742247,47 231,47 C274.601338,47 320.969689,69.950087 362.198255,108.597753 C379.196924,124.532309 394.05286,142.102205 404.598894,158.109745 C408.097652,163.420414 410.921082,168.270183 412.937184,172.308999 C410.938053,176.17267 408.227675,180.777961 404.935744,185.802242 C394.313487,202.014365 379.591292,219.766541 362.844874,235.861815 C321.537134,275.563401 275.324602,299 231,299 C185.594631,299 139.232036,275.892241 98.4322564,236.780777 C81.8396065,220.874739 67.3726628,203.315324 57.0346413,187.230288 C53.7287772,182.08666 51.0347693,177.372655 49.078323,173.422728 C50.9746819,169.614712 53.5157275,165.110292 56.5824289,160.219944 Z"
                                                fill-rule="nonzero"></path> <circle id="Oval" cx="231" cy="173"
                                                                                    r="51"></circle></g></svg></span></span>
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
                                   value="5effe99905"><input type="hidden" name="_wp_http_referer"
                                                             value="/san-francisco/shop/">
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
                               oninput="(function(e){e.target.closest('.rey-form-row').classList.toggle('--has-value',e.target.value)})(arguments[0]);">
                    </p>


                    <div class="rey-form-row rey-form-row--text --small-text">

                        <p>A link to set a new password will be sent to your email address.</p>

                    </div>

                    <wc-order-attribution-inputs><input type="hidden" name="wc_order_attribution_source_type"
                                                        value="referral"><input type="hidden"
                                                                                name="wc_order_attribution_referrer"
                                                                                value="http://localhost/"><input
                                type="hidden" name="wc_order_attribution_utm_campaign" value="(none)"><input
                                type="hidden" name="wc_order_attribution_utm_source" value="localhost"><input
                                type="hidden" name="wc_order_attribution_utm_medium" value="referral"><input
                                type="hidden" name="wc_order_attribution_utm_content" value="/"><input type="hidden"
                                                                                                       name="wc_order_attribution_utm_id"
                                                                                                       value="(none)"><input
                                type="hidden" name="wc_order_attribution_utm_term" value="(none)"><input type="hidden"
                                                                                                         name="wc_order_attribution_utm_source_platform"
                                                                                                         value="(none)"><input
                                type="hidden" name="wc_order_attribution_utm_creative_format" value="(none)"><input
                                type="hidden" name="wc_order_attribution_utm_marketing_tactic" value="(none)"><input
                                type="hidden" name="wc_order_attribution_session_entry"
                                value="/babui/assets/client-view/shop/"><input type="hidden"
                                                                               name="wc_order_attribution_session_start_time"
                                                                               value="2024-12-29 23:09:52"><input
                                type="hidden" name="wc_order_attribution_session_pages" value="1"><input type="hidden"
                                                                                                         name="wc_order_attribution_session_count"
                                                                                                         value="13"><input
                                type="hidden" name="wc_order_attribution_user_agent"
                                value="Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36">
                    </wc-order-attribution-inputs>
                    <div class="woocommerce-privacy-policy-text"><p>Your personal data will be used to support your
                            experience throughout this website, to manage access to your account, and for other purposes
                            described in our <a href="/babui/assets/client-view/privacy-policy/"
                                                class="woocommerce-privacy-policy-link" target="_blank">privacy
                                policy</a>.</p>
                    </div>
                    <p class="">
                        <input type="hidden" id="woocommerce-register-nonce" name="woocommerce-register-nonce"
                               value="a27ae52567"><input type="hidden" name="_wp_http_referer"
                                                         value="/san-francisco/shop/">
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
                                   oninput="(function(e){e.target.closest('.rey-form-row').classList.toggle('--has-value',e.target.value)})(arguments[0]);">
                        </p>


                        <p class="">
                            <input type="hidden" name="wc_reset_password" value="true">
                            <button type="submit" class="btn btn-line-active submit-btn" value="Reset password"
                                    aria-label="Reset password">Reset password
                            </button>
                        </p>

                        <input type="hidden" id="woocommerce-lost-password-nonce" name="woocommerce-lost-password-nonce"
                               value="0f583a5b82"><input type="hidden" name="_wp_http_referer"
                                                         value="/san-francisco/shop/">
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
<div id="cartOpenByclick"
     class="rey-cartPanel-wrapper rey-sidePanel js-rey-cartPanel woocommerce --is-open --is-opened">


    <div class="rey-cartExtraProducts" id="rey-cart-extra-products" data-status="open">
        <button class="__toggle">
            <svg aria-hidden="true" role="img" id="rey-icon-chevron-67711a0553245" class="rey-icon rey-icon-chevron  "
                 viewBox="0 0 40 64">
                <polygon fill="currentColor" points="39.5 32 6.83 64 0.5 57.38 26.76 32 0.5 6.62 6.83 0"></polygon>
            </svg>
        </button>
        <div class="__inner">
            <div class="__title">Bestsellers:</div>
            <div class="__content ss-container" style="height: calc(100% - 70px);">
                <div class="ss-wrapper">
                    <div class="ss-content">

                        <div class="__the-content">

                            <div class="__product" data-id="910">
                                <a href="/babui/assets/client-view/product/mirrorless-camera/" class="__product-link">
                                    <img width="330" height="361"
                                         src="/babui/assets/client-view/wp-content/uploads/sites/24/2022/04/42-330x361.jpg"
                                         class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail" alt=""
                                         decoding="async"
                                         srcset="/babui/assets/client-view/wp-content/uploads/sites/24/2022/04/42-330x361.jpg 330w, /babui/assets/client-view/wp-content/uploads/sites/24/2022/04/42-274x300.jpg 274w, /babui/assets/client-view/wp-content/uploads/sites/24/2022/04/42-936x1024.jpg 936w, /babui/assets/client-view/wp-content/uploads/sites/24/2022/04/42-768x840.jpg 768w, /babui/assets/client-view/wp-content/uploads/sites/24/2022/04/42-600x656.jpg 600w, /babui/assets/client-view/wp-content/uploads/sites/24/2022/04/42.jpg 1024w"
                                         sizes="(max-width: 330px) 100vw, 330px">
                                </a>

                                <span class="__product-brand"><a
                                            href="/babui/assets/client-view/product-brand/squarex/">SquareX</a></span>

                                <h4 class="__product-title"><a
                                            href="/babui/assets/client-view/product/mirrorless-camera/">Mirrorless
                                        camera</a></h4>
                                <span class="__product-price"><span class="woocommerce-Price-amount amount"><bdi><span
                                                    class="woocommerce-Price-currencySymbol">$</span>1,699.00</bdi></span></span>
                            </div>

                            <div class="__product" data-id="1004">
                                <a href="/babui/assets/client-view/product/innovative-smart-watch/"
                                   class="__product-link">
                                    <img width="330" height="361"
                                         src="/babui/assets/client-view/wp-content/uploads/sites/24/2022/05/66-330x361.jpg"
                                         class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail" alt=""
                                         decoding="async"
                                         srcset="/babui/assets/client-view/wp-content/uploads/sites/24/2022/05/66-330x361.jpg 330w, /babui/assets/client-view/wp-content/uploads/sites/24/2022/05/66-274x300.jpg 274w, /babui/assets/client-view/wp-content/uploads/sites/24/2022/05/66-936x1024.jpg 936w, /babui/assets/client-view/wp-content/uploads/sites/24/2022/05/66-768x840.jpg 768w, /babui/assets/client-view/wp-content/uploads/sites/24/2022/05/66-600x656.jpg 600w, /babui/assets/client-view/wp-content/uploads/sites/24/2022/05/66.jpg 1024w"
                                         sizes="(max-width: 330px) 100vw, 330px">
                                </a>

                                <span class="__product-brand"><a href="/babui/assets/client-view/product-brand/x-form/">X-Form</a></span>

                                <h4 class="__product-title"><a
                                            href="/babui/assets/client-view/product/innovative-smart-watch/">Innovative
                                        smart watch</a></h4>
                                <span class="__product-price"><span class="woocommerce-Price-amount amount"><bdi><span
                                                    class="woocommerce-Price-currencySymbol">$</span>399.00</bdi></span></span>
                            </div>

                            <div class="__product" data-id="998">
                                <a href="/babui/assets/client-view/product/high-end-wireless-subwoofer/"
                                   class="__product-link">
                                    <img width="330" height="361"
                                         src="/babui/assets/client-view/wp-content/uploads/sites/24/2022/05/62-330x361.jpg"
                                         class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail" alt=""
                                         decoding="async"
                                         srcset="/babui/assets/client-view/wp-content/uploads/sites/24/2022/05/62-330x361.jpg 330w, /babui/assets/client-view/wp-content/uploads/sites/24/2022/05/62-274x300.jpg 274w, /babui/assets/client-view/wp-content/uploads/sites/24/2022/05/62-936x1024.jpg 936w, /babui/assets/client-view/wp-content/uploads/sites/24/2022/05/62-768x840.jpg 768w, /babui/assets/client-view/wp-content/uploads/sites/24/2022/05/62-600x656.jpg 600w, /babui/assets/client-view/wp-content/uploads/sites/24/2022/05/62.jpg 1024w"
                                         sizes="(max-width: 330px) 100vw, 330px">
                                </a>

                                <span class="__product-brand"><a
                                            href="/babui/assets/client-view/product-brand/squarex/">SquareX</a></span>

                                <h4 class="__product-title"><a
                                            href="/babui/assets/client-view/product/high-end-wireless-subwoofer/">High-end
                                        wireless subwoofer</a></h4>
                                <span class="__product-price"><span class="woocommerce-Price-amount amount"><bdi><span
                                                    class="woocommerce-Price-currencySymbol">$</span>1,989.00</bdi></span></span>
                            </div>

                            <div class="__product" data-id="989">
                                <a href="/babui/assets/client-view/product/powerful-bluetooth-speaker/"
                                   class="__product-link">
                                    <img width="330" height="361"
                                         src="/babui/assets/client-view/wp-content/uploads/sites/24/2022/05/55-330x361.jpg"
                                         class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail" alt=""
                                         decoding="async"
                                         srcset="/babui/assets/client-view/wp-content/uploads/sites/24/2022/05/55-330x361.jpg 330w, /babui/assets/client-view/wp-content/uploads/sites/24/2022/05/55-274x300.jpg 274w, /babui/assets/client-view/wp-content/uploads/sites/24/2022/05/55-936x1024.jpg 936w, /babui/assets/client-view/wp-content/uploads/sites/24/2022/05/55-768x840.jpg 768w, /babui/assets/client-view/wp-content/uploads/sites/24/2022/05/55-600x656.jpg 600w, /babui/assets/client-view/wp-content/uploads/sites/24/2022/05/55.jpg 1024w"
                                         sizes="(max-width: 330px) 100vw, 330px">
                                </a>

                                <span class="__product-brand"><a
                                            href="/babui/assets/client-view/product-brand/quantech/">Quantech</a></span>

                                <h4 class="__product-title"><a
                                            href="/babui/assets/client-view/product/powerful-bluetooth-speaker/">Powerful
                                        Bluetooth speaker</a></h4>
                                <span class="__product-price"><span class="woocommerce-Price-amount amount"><bdi><span
                                                    class="woocommerce-Price-currencySymbol">$</span>549.00</bdi></span></span>
                            </div>

                            <div class="__product" data-id="981">
                                <a href="/babui/assets/client-view/product/ultimate-over-ear-headphones/"
                                   class="__product-link">
                                    <img width="330" height="361"
                                         src="/babui/assets/client-view/wp-content/uploads/sites/24/2022/05/49-330x361.jpg"
                                         class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail" alt=""
                                         decoding="async"
                                         srcset="/babui/assets/client-view/wp-content/uploads/sites/24/2022/05/49-330x361.jpg 330w, /babui/assets/client-view/wp-content/uploads/sites/24/2022/05/49-274x300.jpg 274w, /babui/assets/client-view/wp-content/uploads/sites/24/2022/05/49-936x1024.jpg 936w, /babui/assets/client-view/wp-content/uploads/sites/24/2022/05/49-768x840.jpg 768w, /babui/assets/client-view/wp-content/uploads/sites/24/2022/05/49-600x656.jpg 600w, /babui/assets/client-view/wp-content/uploads/sites/24/2022/05/49.jpg 1024w"
                                         sizes="(max-width: 330px) 100vw, 330px">
                                </a>

                                <span class="__product-brand"><a
                                            href="/babui/assets/client-view/product-brand/quantech/">Quantech</a></span>

                                <h4 class="__product-title"><a
                                            href="/babui/assets/client-view/product/ultimate-over-ear-headphones/">Ultimate
                                        over-ear headphones</a></h4>
                                <span class="__product-price"><span class="woocommerce-Price-amount amount"><bdi><span
                                                    class="woocommerce-Price-currencySymbol">$</span>789.00</bdi></span></span>
                            </div>

                            <div class="__product" data-id="905">
                                <a href="/babui/assets/client-view/product/pocket-camera/" class="__product-link">
                                    <img width="330" height="361"
                                         src="/babui/assets/client-view/wp-content/uploads/sites/24/2022/04/39-330x361.jpg"
                                         class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail" alt=""
                                         decoding="async"
                                         srcset="/babui/assets/client-view/wp-content/uploads/sites/24/2022/04/39-330x361.jpg 330w, /babui/assets/client-view/wp-content/uploads/sites/24/2022/04/39-274x300.jpg 274w, /babui/assets/client-view/wp-content/uploads/sites/24/2022/04/39-936x1024.jpg 936w, /babui/assets/client-view/wp-content/uploads/sites/24/2022/04/39-768x840.jpg 768w, /babui/assets/client-view/wp-content/uploads/sites/24/2022/04/39-600x656.jpg 600w, /babui/assets/client-view/wp-content/uploads/sites/24/2022/04/39.jpg 1024w"
                                         sizes="(max-width: 330px) 100vw, 330px">
                                </a>

                                <span class="__product-brand"><a
                                            href="/babui/assets/client-view/product-brand/quantech/">Quantech</a></span>

                                <h4 class="__product-title"><a href="/babui/assets/client-view/product/pocket-camera/">Pocket
                                        camera</a></h4>
                                <span class="__product-price"><span class="woocommerce-Price-amount amount"><bdi><span
                                                    class="woocommerce-Price-currencySymbol">$</span>199.00</bdi></span></span>
                            </div>

                            <div class="__product" data-id="136">
                                <a href="/babui/assets/client-view/product/comfortable-over-ear-headphones/"
                                   class="__product-link">
                                    <img width="330" height="361"
                                         src="/babui/assets/client-view/wp-content/uploads/sites/24/2022/02/12-330x361.jpg"
                                         class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail" alt=""
                                         decoding="async"
                                         srcset="/babui/assets/client-view/wp-content/uploads/sites/24/2022/02/12-330x361.jpg 330w, /babui/assets/client-view/wp-content/uploads/sites/24/2022/02/12-274x300.jpg 274w, /babui/assets/client-view/wp-content/uploads/sites/24/2022/02/12-936x1024.jpg 936w, /babui/assets/client-view/wp-content/uploads/sites/24/2022/02/12-768x840.jpg 768w, /babui/assets/client-view/wp-content/uploads/sites/24/2022/02/12-600x656.jpg 600w, /babui/assets/client-view/wp-content/uploads/sites/24/2022/02/12.jpg 1024w"
                                         sizes="(max-width: 330px) 100vw, 330px">
                                </a>

                                <span class="__product-brand"><a
                                            href="/babui/assets/client-view/product-brand/quantech/">Quantech</a></span>

                                <h4 class="__product-title"><a
                                            href="/babui/assets/client-view/product/comfortable-over-ear-headphones/">Comfortable
                                        over-ear headphones</a></h4>
                                <span class="__product-price"><span class="woocommerce-Price-amount amount"><bdi><span
                                                    class="woocommerce-Price-currencySymbol">$</span>689.00</bdi></span></span>
                            </div>

                            <div class="__product" data-id="1020">
                                <a href="/babui/assets/client-view/product/pathfinder-phone-case/"
                                   class="__product-link">
                                    <img width="330" height="361"
                                         src="/babui/assets/client-view/wp-content/uploads/sites/24/2022/05/75-330x361.jpg"
                                         class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail" alt=""
                                         decoding="async"
                                         srcset="/babui/assets/client-view/wp-content/uploads/sites/24/2022/05/75-330x361.jpg 330w, /babui/assets/client-view/wp-content/uploads/sites/24/2022/05/75-274x300.jpg 274w, /babui/assets/client-view/wp-content/uploads/sites/24/2022/05/75-936x1024.jpg 936w, /babui/assets/client-view/wp-content/uploads/sites/24/2022/05/75-768x840.jpg 768w, /babui/assets/client-view/wp-content/uploads/sites/24/2022/05/75-600x656.jpg 600w, /babui/assets/client-view/wp-content/uploads/sites/24/2022/05/75.jpg 1024w"
                                         sizes="(max-width: 330px) 100vw, 330px">
                                </a>

                                <span class="__product-brand"><a
                                            href="/babui/assets/client-view/product-brand/squarex/">SquareX</a></span>

                                <h4 class="__product-title"><a
                                            href="/babui/assets/client-view/product/pathfinder-phone-case/">Pathfinder
                                        phone case</a></h4>
                                <span class="__product-price"><span class="woocommerce-Price-amount amount"><bdi><span
                                                    class="woocommerce-Price-currencySymbol">$</span>49.00</bdi></span></span>
                            </div>

                            <div class="__product" data-id="1015">
                                <a href="/babui/assets/client-view/product/magsafe-charger/" class="__product-link">
                                    <img width="330" height="361"
                                         src="/babui/assets/client-view/wp-content/uploads/sites/24/2022/05/72-330x361.jpg"
                                         class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail" alt=""
                                         decoding="async"
                                         srcset="/babui/assets/client-view/wp-content/uploads/sites/24/2022/05/72-330x361.jpg 330w, /babui/assets/client-view/wp-content/uploads/sites/24/2022/05/72-274x300.jpg 274w, /babui/assets/client-view/wp-content/uploads/sites/24/2022/05/72-936x1024.jpg 936w, /babui/assets/client-view/wp-content/uploads/sites/24/2022/05/72-768x840.jpg 768w, /babui/assets/client-view/wp-content/uploads/sites/24/2022/05/72-600x656.jpg 600w, /babui/assets/client-view/wp-content/uploads/sites/24/2022/05/72.jpg 1024w"
                                         sizes="(max-width: 330px) 100vw, 330px">
                                </a>

                                <span class="__product-brand"><a
                                            href="/babui/assets/client-view/product-brand/quantech/">Quantech</a></span>

                                <h4 class="__product-title"><a
                                            href="/babui/assets/client-view/product/magsafe-charger/">MagSafe
                                        Charger</a></h4>
                                <span class="__product-price"><span class="woocommerce-Price-amount amount"><bdi><span
                                                    class="woocommerce-Price-currencySymbol">$</span>159.00</bdi></span></span>
                            </div>

                            <div class="__product" data-id="1009">
                                <a href="/babui/assets/client-view/product/immersive-flight-drone/"
                                   class="__product-link">
                                    <img width="330" height="361"
                                         src="/babui/assets/client-view/wp-content/uploads/sites/24/2022/05/69-330x361.jpg"
                                         class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail" alt=""
                                         decoding="async"
                                         srcset="/babui/assets/client-view/wp-content/uploads/sites/24/2022/05/69-330x361.jpg 330w, /babui/assets/client-view/wp-content/uploads/sites/24/2022/05/69-274x300.jpg 274w, /babui/assets/client-view/wp-content/uploads/sites/24/2022/05/69-936x1024.jpg 936w, /babui/assets/client-view/wp-content/uploads/sites/24/2022/05/69-768x840.jpg 768w, /babui/assets/client-view/wp-content/uploads/sites/24/2022/05/69-600x656.jpg 600w, /babui/assets/client-view/wp-content/uploads/sites/24/2022/05/69.jpg 1024w"
                                         sizes="(max-width: 330px) 100vw, 330px">
                                </a>

                                <span class="__product-brand"><a href="/babui/assets/client-view/product-brand/x-form/">X-Form</a></span>

                                <h4 class="__product-title"><a
                                            href="/babui/assets/client-view/product/immersive-flight-drone/">Immersive
                                        flight drone</a></h4>
                                <span class="__product-price"><span class="woocommerce-Price-amount amount"><bdi><span
                                                    class="woocommerce-Price-currencySymbol">$</span>399.00</bdi></span></span>
                            </div>

                            <div class="__product" data-id="921">
                                <a href="/babui/assets/client-view/product/mirrorless-camera-lens/"
                                   class="__product-link">
                                    <img width="330" height="361"
                                         src="/babui/assets/client-view/wp-content/uploads/sites/24/2022/04/49-330x361.jpg"
                                         class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail" alt=""
                                         decoding="async"
                                         srcset="/babui/assets/client-view/wp-content/uploads/sites/24/2022/04/49-330x361.jpg 330w, /babui/assets/client-view/wp-content/uploads/sites/24/2022/04/49-274x300.jpg 274w, /babui/assets/client-view/wp-content/uploads/sites/24/2022/04/49-936x1024.jpg 936w, /babui/assets/client-view/wp-content/uploads/sites/24/2022/04/49-768x840.jpg 768w, /babui/assets/client-view/wp-content/uploads/sites/24/2022/04/49-600x656.jpg 600w, /babui/assets/client-view/wp-content/uploads/sites/24/2022/04/49.jpg 1024w"
                                         sizes="(max-width: 330px) 100vw, 330px">
                                </a>

                                <span class="__product-brand"><a
                                            href="/babui/assets/client-view/product-brand/quantech/">Quantech</a></span>

                                <h4 class="__product-title"><a
                                            href="/babui/assets/client-view/product/mirrorless-camera-lens/">Mirrorless
                                        camera lens</a></h4>
                                <span class="__product-price"><del aria-hidden="true"><span
                                                class="woocommerce-Price-amount amount"><bdi><span
                                                        class="woocommerce-Price-currencySymbol">$</span>489.00</bdi></span></del> <span
                                            class="screen-reader-text">Original price was: $489.00.</span><ins
                                            aria-hidden="true"><span class="woocommerce-Price-amount amount"><bdi><span
                                                        class="woocommerce-Price-currencySymbol">$</span>329.00</bdi></span></ins><span
                                            class="screen-reader-text">Current price is: $329.00.</span></span>
                            </div>

                            <div class="__product" data-id="914">
                                <a href="/babui/assets/client-view/product/mirrorless-professional-camera/"
                                   class="__product-link">
                                    <img width="330" height="361"
                                         src="/babui/assets/client-view/wp-content/uploads/sites/24/2022/04/45-330x361.jpg"
                                         class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail" alt=""
                                         decoding="async"
                                         srcset="/babui/assets/client-view/wp-content/uploads/sites/24/2022/04/45-330x361.jpg 330w, /babui/assets/client-view/wp-content/uploads/sites/24/2022/04/45-274x300.jpg 274w, /babui/assets/client-view/wp-content/uploads/sites/24/2022/04/45-936x1024.jpg 936w, /babui/assets/client-view/wp-content/uploads/sites/24/2022/04/45-768x840.jpg 768w, /babui/assets/client-view/wp-content/uploads/sites/24/2022/04/45-600x656.jpg 600w, /babui/assets/client-view/wp-content/uploads/sites/24/2022/04/45.jpg 1024w"
                                         sizes="(max-width: 330px) 100vw, 330px">
                                </a>

                                <span class="__product-brand"><a href="/babui/assets/client-view/product-brand/x-form/">X-Form</a></span>

                                <h4 class="__product-title"><a
                                            href="/babui/assets/client-view/product/mirrorless-professional-camera/">Mirrorless
                                        professional camera</a></h4>
                                <span class="__product-price"><span class="woocommerce-Price-amount amount"><bdi><span
                                                    class="woocommerce-Price-currencySymbol">$</span>1,899.00</bdi></span></span>
                            </div>

                        </div>

                    </div>
                </div>
                <div class="ss-scroll" style="height: 99.9626%; top: 0%;"></div>
            </div>
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
                        SHOPPING BAG <span class="__cart-count">0</span></div>
                </div>

                <div class="__tab" data-item="recent">
                    <div class="rey-cartPanel-title">
                        RECENTLY VIEWED <span class="__recent-count __nb">2</span></div>
                </div>

            </div>

            <button onclick="cartCloseByClick()" class="btn __arrClose rey-sidePanel-close --invisible"
                    aria-label="Close Panel"><span class="__icons"><svg role="img" viewBox="0 0 110 110"
                                                                        class="rey-icon rey-icon-close"><g stroke="none"
                                                                                                           stroke-width="1"
                                                                                                           fill="none"
                                                                                                           fill-rule="evenodd"
                                                                                                           stroke-linecap="square"><path
                                    d="M4.79541854,4.29541854 L104.945498,104.445498 L4.79541854,4.29541854 Z"
                                    stroke="currentColor" stroke-width="var(--stroke-width, 12px)"></path><path
                                    d="M4.79541854,104.704581 L104.945498,4.55450209 L4.79541854,104.704581 Z"
                                    stroke="currentColor" stroke-width="var(--stroke-width, 12px)"></path></g></svg><svg
                            data-icon-id="arrow-classic" aria-hidden="true" role="img"
                            id="rey-icon-arrow-classic-67711a0557e59" class="rey-icon rey-icon-arrow-classic "
                            viewBox="0 0 16 16"><polygon fill="var(--icon-fill, currentColor)"
                                                         points="8 0 6.6 1.4 12.2 7 0 7 0 9 12.2 9 6.6 14.6 8 16 16 8"></polygon></svg></span>
            </button>
        </div>

        <div class="__tab-content --active" data-item="cart">

            <div class="widget woocommerce widget_shopping_cart">
                <div class="widget_shopping_cart_content">

                    <p class="woocommerce-mini-cart__empty-message">No products in the cart.</p>


                    <div class="rey-emptyMiniCartGs" data-gsid="1816">
                        <style>.elementor-1816 .elementor-element.elementor-element-06b8f59 {
                                margin-top: 40px;
                                margin-bottom: 40px;
                            }

                            .elementor-1816 .elementor-element.elementor-element-cd22f37 .rey-gridEl {
                                --per-row: 1;
                                --gap: 25px;
                                --vgap: 15px;
                            }

                            .elementor-1816 .elementor-element.elementor-element-cd22f37 .rey-card {
                                text-align: left;
                                --align: left;
                                align-items: center;
                                -v-align-items: center;
                                --media-radius: 4px;
                                overflow: hidden;
                            }

                            .elementor-1816 .elementor-element.elementor-element-cd22f37 .__media {
                                object-fit: cover;
                                height: 76px;
                            }

                            .elementor-1816 .elementor-element.elementor-element-cd22f37 .__media-link {
                                --media-max-width: 76px;
                            }

                            .elementor-1816 .elementor-element.elementor-element-cd22f37 .__captionTitle {
                                font-size: 18px;
                            }

                            @media (max-width: 1024px) {
                                .elementor-1816 .elementor-element.elementor-element-cd22f37 .rey-gridEl {
                                    --per-row: 2;
                                }
                            }

                            @media (max-width: 767px) {
                                .elementor-1816 .elementor-element.elementor-element-cd22f37 .rey-gridEl {
                                    --per-row: 1;
                                }
                            }</style>
                        <div data-elementor-type="wp-post" data-elementor-id="1816" class="elementor elementor-1816"
                             data-elementor-gstype="generic" data-page-el-selector="body.elementor-page-1816"
                             data-disable-padding="">
                            <section
                                    class="elementor-section elementor-top-section elementor-element elementor-element-06b8f59 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                    data-id="06b8f59" data-element_type="section">
                                <div class="elementor-container elementor-column-gap-default">
                                    <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-12d27a6"
                                         data-id="12d27a6" data-element_type="column">
                                        <div class="elementor-column-wrap--12d27a6 elementor-widget-wrap elementor-element-populated">
                                            <div class="elementor-element elementor-element-96cf434 elementor-widget elementor-widget-heading"
                                                 data-id="96cf434" data-element_type="widget"
                                                 data-widget_type="heading.default">
                                                <div class="elementor-widget-container">
                                                    <h4 class="elementor-heading-title elementor-size-default">Start
                                                        Shopping</h4></div>
                                            </div>
                                            <div class="elementor-element elementor-element-cd22f37 elementor-widget elementor-widget-reycore-grid"
                                                 data-id="cd22f37" data-element_type="widget"
                                                 data-widget_type="reycore-grid.default">
                                                <div class="elementor-widget-container">
                                                    <div class="rey-gridEl --product_cat --type-vlist --type-md- --type-sm-"
                                                         style="--total:5" data-layout="basic">
                                                        <div class="__items ">
                                                            <div class="__item elementor-repeater-item-prod-cat-50">
                                                                <div class="rey-card --basic"><a
                                                                            href="/babui/assets/client-view/product-category/wearables/"
                                                                            class="__media-link"
                                                                            aria-label="Wearables 5"><img width="265"
                                                                                                          height="300"
                                                                                                          src="/babui/assets/client-view/wp-content/uploads/sites/24/2022/03/image_23-265x300.jpg"
                                                                                                          class="__media"
                                                                                                          alt=""
                                                                                                          decoding="async"
                                                                                                          srcset="/babui/assets/client-view/wp-content/uploads/sites/24/2022/03/image_23-265x300.jpg 265w, /babui/assets/client-view/wp-content/uploads/sites/24/2022/03/image_23-330x374.jpg 330w, /babui/assets/client-view/wp-content/uploads/sites/24/2022/03/image_23.jpg 600w"
                                                                                                          sizes="(max-width: 265px) 100vw, 265px"></a>
                                                                    <div class="__caption"><h2
                                                                                class="__captionEl __captionTitle "><a
                                                                                    href="/babui/assets/client-view/product-category/wearables/"
                                                                                    class="" aria-label="Wearables 5">Wearables
                                                                                <sup>5</sup></a></h2></div>
                                                                </div>
                                                            </div>
                                                            <div class="__item elementor-repeater-item-prod-cat-46">
                                                                <div class="rey-card --basic"><a
                                                                            href="/babui/assets/client-view/product-category/speakers/"
                                                                            class="__media-link"
                                                                            aria-label="Speakers 6"><img width="265"
                                                                                                         height="300"
                                                                                                         src="/babui/assets/client-view/wp-content/uploads/sites/24/2022/03/image_14-265x300.jpg"
                                                                                                         class="__media"
                                                                                                         alt=""
                                                                                                         decoding="async"
                                                                                                         srcset="/babui/assets/client-view/wp-content/uploads/sites/24/2022/03/image_14-265x300.jpg 265w, /babui/assets/client-view/wp-content/uploads/sites/24/2022/03/image_14-330x374.jpg 330w, /babui/assets/client-view/wp-content/uploads/sites/24/2022/03/image_14.jpg 600w"
                                                                                                         sizes="(max-width: 265px) 100vw, 265px"></a>
                                                                    <div class="__caption"><h2
                                                                                class="__captionEl __captionTitle "><a
                                                                                    href="/babui/assets/client-view/product-category/speakers/"
                                                                                    class="" aria-label="Speakers 6">Speakers
                                                                                <sup>6</sup></a></h2></div>
                                                                </div>
                                                            </div>
                                                            <div class="__item elementor-repeater-item-prod-cat-34">
                                                                <div class="rey-card --basic"><a
                                                                            href="/babui/assets/client-view/product-category/headphones/"
                                                                            class="__media-link"
                                                                            aria-label="Headphones 3"><img width="265"
                                                                                                           height="300"
                                                                                                           src="/babui/assets/client-view/wp-content/uploads/sites/24/2022/03/image_17-265x300.jpg"
                                                                                                           class="__media"
                                                                                                           alt=""
                                                                                                           decoding="async"
                                                                                                           srcset="/babui/assets/client-view/wp-content/uploads/sites/24/2022/03/image_17-265x300.jpg 265w, /babui/assets/client-view/wp-content/uploads/sites/24/2022/03/image_17-330x374.jpg 330w, /babui/assets/client-view/wp-content/uploads/sites/24/2022/03/image_17.jpg 600w"
                                                                                                           sizes="(max-width: 265px) 100vw, 265px"></a>
                                                                    <div class="__caption"><h2
                                                                                class="__captionEl __captionTitle "><a
                                                                                    href="/babui/assets/client-view/product-category/headphones/"
                                                                                    class="" aria-label="Headphones 3">Headphones
                                                                                <sup>3</sup></a></h2></div>
                                                                </div>
                                                            </div>
                                                            <div class="__item elementor-repeater-item-prod-cat-27">
                                                                <div class="rey-card --basic"><a
                                                                            href="/babui/assets/client-view/product-category/cameras/"
                                                                            class="__media-link" aria-label="Cameras 5"><img
                                                                                width="265" height="300"
                                                                                src="/babui/assets/client-view/wp-content/uploads/sites/24/2022/04/image_24-265x300.jpg"
                                                                                class="__media" alt="" decoding="async"
                                                                                srcset="/babui/assets/client-view/wp-content/uploads/sites/24/2022/04/image_24-265x300.jpg 265w, /babui/assets/client-view/wp-content/uploads/sites/24/2022/04/image_24-330x374.jpg 330w, /babui/assets/client-view/wp-content/uploads/sites/24/2022/04/image_24.jpg 600w"
                                                                                sizes="(max-width: 265px) 100vw, 265px"></a>
                                                                    <div class="__caption"><h2
                                                                                class="__captionEl __captionTitle "><a
                                                                                    href="/babui/assets/client-view/product-category/cameras/"
                                                                                    class="" aria-label="Cameras 5">Cameras
                                                                                <sup>5</sup></a></h2></div>
                                                                </div>
                                                            </div>
                                                            <div class="__item elementor-repeater-item-prod-cat-17">
                                                                <div class="rey-card --basic"><a
                                                                            href="/babui/assets/client-view/product-category/accessories/"
                                                                            class="__media-link"
                                                                            aria-label="Accessories 5"><img width="265"
                                                                                                            height="300"
                                                                                                            src="/babui/assets/client-view/wp-content/uploads/sites/24/2022/03/image_15-265x300.jpg"
                                                                                                            class="__media"
                                                                                                            alt=""
                                                                                                            decoding="async"
                                                                                                            srcset="/babui/assets/client-view/wp-content/uploads/sites/24/2022/03/image_15-265x300.jpg 265w, /babui/assets/client-view/wp-content/uploads/sites/24/2022/03/image_15-330x374.jpg 330w, /babui/assets/client-view/wp-content/uploads/sites/24/2022/03/image_15.jpg 600w"
                                                                                                            sizes="(max-width: 265px) 100vw, 265px"></a>
                                                                    <div class="__caption"><h2
                                                                                class="__captionEl __captionTitle "><a
                                                                                    href="/babui/assets/client-view/product-category/accessories/"
                                                                                    class="" aria-label="Accessories 5">Accessories
                                                                                <sup>5</sup></a></h2></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="elementor-element elementor-element-d3c3c54 elementor-button-underline elementor-widget elementor-widget-button"
                                                 data-id="d3c3c54" data-element_type="widget"
                                                 data-widget_type="button.default">
                                                <div class="elementor-widget-container">
                                                    <div class="elementor-button-wrapper">
                                                        <a class="elementor-button elementor-button-link elementor-size-sm"
                                                           href="/babui/shop/">
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
                    </div>
                </div>
            </div>

        </div>

        <div class="__tab-content rey-cartRecent-itemsWrapper --loading" data-item="recent">
            <div class="rey-lineLoader"></div>
        </div>
    </div>


</div>

<script type="text/html" id="tmpl-reyCrossSellsBubble">

    <# var items = data.items; #>
    <# if( items.length ){ #>
    <div class="rey-crossSells-bubble --loading">

        <div class="rey-crossSells-bubble-title">You may also like&hellip;</div>


        <# for (var i = 0; i < items.length; i++) { #>
        <div class="rey-crossSells-item __cart-product " data-id="{{items[i].id}}">
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


        <div><a class="rey-crossSells-bubble-close btn btn-primary-outline btn--block" href="#">Continue shopping</a>
        </div>

    </div>
    <# } #>

</script>
<script type="text/html" id="tmpl-reyCrossSellsCarousel">

    <# var items = data.items; #>
    <# if( items.length ){ #>
    <div class="splide rey-crossSells-carousel --loading" data-slider-config='{"autoplay":false,"autoplaySpeed":3000}'>
        <h3 class="rey-crossSells-carousel-title">
            <span class="__text">You may also like&hellip;</span>
            <!-- <span class="__hidebtn --dnone-lg --dnone-md">
                <svg aria-hidden="true" role="img" id="rey-icon-arrow-677355264474d" class="rey-icon rey-icon-arrow " viewbox="0 0 22 13"><style type="text/css">.rey-icon-arrow.--to-left{transform:rotate(90deg) scale(0.7);}.rey-icon-arrow.--to-right{transform:rotate(-90deg) scale(0.7);}.rey-icon-arrow.--to-top{transform:rotate(180deg);}</style><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
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


<div class="rey-filterPanel-wrapper rey-sidePanel" data-lazy-hidden="" data-align="right" id="js-filterPanel">


    <div class="rey-filterPanel">

        <header class="rey-filterPanel__header">
            <button class="rey-filterPanel__reset btn btn-line-active js-rey-filter-reset"
                    data-location="/babui/assets/client-view/shop/" aria-label="RESET FILTERS">RESET FILTERS
            </button>
            <button class="btn __arrClose rey-sidePanel-close --invisible" aria-label="Close Panel"><span
                        class="__icons"><svg style="width:1px;height:1px;display:inline-block;"
                                             data-icon-placeholder="close"></svg><svg
                            style="width:1px;height:1px;display:inline-block;"
                            data-icon-placeholder="arrow-classic"></svg></span></button>
        </header>

        <div class="rey-filterPanel-content-wrapper">
            <div class="rey-filterPanel-content">
                <div class="rey-ecommSidebar ">
                    <section id="reyajfilter-category-filter-1"
                             class="woocommerce reyajfilter-ajax-term-filter --count-stretch widget  widget_reyajfilter-category-filter">
                        <h3 class="widget-title ">Categories</h3>
                        <div class="reyajfilter-layered-nav --hierarchy --accordion --style-checkboxes"
                             data-taxonomy="product_cat" data-shop="/babui/assets/client-view/shop/" data-vtype="id">
                            <div class="reyajfilter-layered-navInner" style="">
                                <ul class="reyajfilter-layered-list">
                                    <li class="" data-value="15"><a
                                                href="/babui/assets/client-view/product-category/uncategorized/"
                                                data-key="product-cato" data-value="15" data-slug="uncategorized"
                                                aria-label="Uncategorized 0"><span class="__checkbox "></span> <span
                                                    class="__name">Uncategorized</span> <span
                                                    class="__count">0</span></a></li>
                                    <li class="" data-value="17">
                                        <button class="__toggle --collapsed">
                                            <svg aria-hidden="true" role="img" id="rey-icon-arrow-6773552645ce1"
                                                 class="rey-icon rey-icon-arrow " viewBox="0 0 22 13">
                                                <style type="text/css">.rey-icon-arrow.--to-left {
                                                        transform: rotate(90deg) scale(0.7);
                                                    }

                                                    .rey-icon-arrow.--to-right {
                                                        transform: rotate(-90deg) scale(0.7);
                                                    }

                                                    .rey-icon-arrow.--to-top {
                                                        transform: rotate(180deg);
                                                    }</style>
                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                    <polygon fill="currentColor"
                                                             points="-0.01 2.44 10.99 13.073 21.98 2.44 19.5 0.008 10.99 8.243 2.47 0.008"></polygon>
                                                </g>
                                            </svg>
                                        </button>
                                        <a href="/babui/assets/client-view/product-category/accessories/"
                                           data-key="product-cato" data-value="17" data-slug="accessories"
                                           aria-label="Accessories 5"><span class="__checkbox "></span> <span
                                                    class="__name">Accessories</span> <span class="__count">5</span></a>
                                        <ul class="children --hidden">
                                            <li class="" data-value="26"><a
                                                        href="/babui/assets/client-view/product-category/accessories/cables/"
                                                        data-key="product-cato" data-value="26" data-slug="cables"
                                                        aria-label="Cables 3"><span class="__checkbox "></span> <span
                                                            class="__name">Cables</span> <span class="__count">3</span></a>
                                            </li>
                                            <li class="" data-value="29"><a
                                                        href="/babui/assets/client-view/product-category/accessories/cases/"
                                                        data-key="product-cato" data-value="29" data-slug="cases"
                                                        aria-label="Cases 3"><span class="__checkbox "></span> <span
                                                            class="__name">Cases</span> <span
                                                            class="__count">3</span></a></li>
                                            <li class="" data-value="31"><a
                                                        href="/babui/assets/client-view/product-category/accessories/chargers/"
                                                        data-key="product-cato" data-value="31" data-slug="chargers"
                                                        aria-label="Chargers 3"><span class="__checkbox "></span> <span
                                                            class="__name">Chargers</span> <span
                                                            class="__count">3</span></a></li>
                                            <li class="" data-value="48"><a
                                                        href="/babui/assets/client-view/product-category/accessories/straps/"
                                                        data-key="product-cato" data-value="48" data-slug="straps"
                                                        aria-label="Straps 2"><span class="__checkbox "></span> <span
                                                            class="__name">Straps</span> <span class="__count">2</span></a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="" data-value="27">
                                        <button class="__toggle --collapsed">
                                            <svg aria-hidden="true" role="img" id="rey-icon-arrow-67735526464c8"
                                                 class="rey-icon rey-icon-arrow " viewBox="0 0 22 13">
                                                <style type="text/css">.rey-icon-arrow.--to-left {
                                                        transform: rotate(90deg) scale(0.7);
                                                    }

                                                    .rey-icon-arrow.--to-right {
                                                        transform: rotate(-90deg) scale(0.7);
                                                    }

                                                    .rey-icon-arrow.--to-top {
                                                        transform: rotate(180deg);
                                                    }</style>
                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                    <polygon fill="currentColor"
                                                             points="-0.01 2.44 10.99 13.073 21.98 2.44 19.5 0.008 10.99 8.243 2.47 0.008"></polygon>
                                                </g>
                                            </svg>
                                        </button>
                                        <a href="/babui/assets/client-view/product-category/cameras/"
                                           data-key="product-cato" data-value="27" data-slug="cameras"
                                           aria-label="Cameras 5"><span class="__checkbox "></span> <span
                                                    class="__name">Cameras</span> <span class="__count">5</span></a>
                                        <ul class="children --hidden">
                                            <li class="" data-value="55"><a
                                                        href="/babui/assets/client-view/product-category/cameras/accessories-cameras/"
                                                        data-key="product-cato" data-value="55"
                                                        data-slug="accessories-cameras" aria-label="Accessories 5"><span
                                                            class="__checkbox "></span> <span
                                                            class="__name">Accessories</span> <span
                                                            class="__count">5</span></a></li>
                                            <li class="" data-value="56"><a
                                                        href="/babui/assets/client-view/product-category/cameras/action/"
                                                        data-key="product-cato" data-value="56" data-slug="action"
                                                        aria-label="Action 5"><span class="__checkbox "></span> <span
                                                            class="__name">Action</span> <span class="__count">5</span></a>
                                            </li>
                                            <li class="" data-value="32"><a
                                                        href="/babui/assets/client-view/product-category/cameras/dslr/"
                                                        data-key="product-cato" data-value="32" data-slug="dslr"
                                                        aria-label="DSLR 5"><span class="__checkbox "></span> <span
                                                            class="__name">DSLR</span> <span
                                                            class="__count">5</span></a></li>
                                            <li class="" data-value="35"><a
                                                        href="/babui/assets/client-view/product-category/cameras/lenses/"
                                                        data-key="product-cato" data-value="35" data-slug="lenses"
                                                        aria-label="Lenses 5"><span class="__checkbox "></span> <span
                                                            class="__name">Lenses</span> <span class="__count">5</span></a>
                                            </li>
                                            <li class="" data-value="36"><a
                                                        href="/babui/assets/client-view/product-category/cameras/mirrorless/"
                                                        data-key="product-cato" data-value="36" data-slug="mirrorless"
                                                        aria-label="Mirrorless 5"><span class="__checkbox "></span>
                                                    <span class="__name">Mirrorless</span> <span
                                                            class="__count">5</span></a></li>
                                        </ul>
                                    </li>
                                    <li class="" data-value="34">
                                        <button class="__toggle --collapsed">
                                            <svg aria-hidden="true" role="img" id="rey-icon-arrow-6773552646b22"
                                                 class="rey-icon rey-icon-arrow " viewBox="0 0 22 13">
                                                <style type="text/css">.rey-icon-arrow.--to-left {
                                                        transform: rotate(90deg) scale(0.7);
                                                    }

                                                    .rey-icon-arrow.--to-right {
                                                        transform: rotate(-90deg) scale(0.7);
                                                    }

                                                    .rey-icon-arrow.--to-top {
                                                        transform: rotate(180deg);
                                                    }</style>
                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                    <polygon fill="currentColor"
                                                             points="-0.01 2.44 10.99 13.073 21.98 2.44 19.5 0.008 10.99 8.243 2.47 0.008"></polygon>
                                                </g>
                                            </svg>
                                        </button>
                                        <a href="/babui/assets/client-view/product-category/headphones/"
                                           data-key="product-cato" data-value="34" data-slug="headphones"
                                           aria-label="Headphones 3"><span class="__checkbox "></span> <span
                                                    class="__name">Headphones</span> <span class="__count">3</span></a>
                                        <ul class="children --hidden">
                                            <li class="" data-value="58"><a
                                                        href="/babui/assets/client-view/product-category/headphones/earbuds/"
                                                        data-key="product-cato" data-value="58" data-slug="earbuds"
                                                        aria-label="Earbuds 1"><span class="__checkbox "></span> <span
                                                            class="__name">Earbuds</span> <span class="__count">1</span></a>
                                            </li>
                                            <li class="" data-value="38"><a
                                                        href="/babui/assets/client-view/product-category/headphones/on-ear/"
                                                        data-key="product-cato" data-value="38" data-slug="on-ear"
                                                        aria-label="On Ear 2"><span class="__checkbox "></span> <span
                                                            class="__name">On Ear</span> <span class="__count">2</span></a>
                                            </li>
                                            <li class="" data-value="39"><a
                                                        href="/babui/assets/client-view/product-category/headphones/over-ear/"
                                                        data-key="product-cato" data-value="39" data-slug="over-ear"
                                                        aria-label="Over Ear 2"><span class="__checkbox "></span> <span
                                                            class="__name">Over Ear</span> <span
                                                            class="__count">2</span></a></li>
                                            <li class="" data-value="52"><a
                                                        href="/babui/assets/client-view/product-category/headphones/wireless/"
                                                        data-key="product-cato" data-value="52" data-slug="wireless"
                                                        aria-label="Wireless 2"><span class="__checkbox "></span> <span
                                                            class="__name">Wireless</span> <span
                                                            class="__count">2</span></a></li>
                                        </ul>
                                    </li>
                                    <li class="" data-value="46">
                                        <button class="__toggle --collapsed">
                                            <svg aria-hidden="true" role="img" id="rey-icon-arrow-6773552647283"
                                                 class="rey-icon rey-icon-arrow " viewBox="0 0 22 13">
                                                <style type="text/css">.rey-icon-arrow.--to-left {
                                                        transform: rotate(90deg) scale(0.7);
                                                    }

                                                    .rey-icon-arrow.--to-right {
                                                        transform: rotate(-90deg) scale(0.7);
                                                    }

                                                    .rey-icon-arrow.--to-top {
                                                        transform: rotate(180deg);
                                                    }</style>
                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                    <polygon fill="currentColor"
                                                             points="-0.01 2.44 10.99 13.073 21.98 2.44 19.5 0.008 10.99 8.243 2.47 0.008"></polygon>
                                                </g>
                                            </svg>
                                        </button>
                                        <a href="/babui/assets/client-view/product-category/speakers/"
                                           data-key="product-cato" data-value="46" data-slug="speakers"
                                           aria-label="Speakers 6"><span class="__checkbox "></span> <span
                                                    class="__name">Speakers</span> <span class="__count">6</span></a>
                                        <ul class="children --hidden">
                                            <li class="" data-value="57"><a
                                                        href="/babui/assets/client-view/product-category/speakers/bluetooth/"
                                                        data-key="product-cato" data-value="57" data-slug="bluetooth"
                                                        aria-label="Bluetooth 6"><span class="__checkbox "></span> <span
                                                            class="__name">Bluetooth</span> <span
                                                            class="__count">6</span></a></li>
                                            <li class="" data-value="61"><a
                                                        href="/babui/assets/client-view/product-category/speakers/home-audio/"
                                                        data-key="product-cato" data-value="61" data-slug="home-audio"
                                                        aria-label="Home Audio 4"><span class="__checkbox "></span>
                                                    <span class="__name">Home Audio</span> <span
                                                            class="__count">4</span></a></li>
                                            <li class="" data-value="63"><a
                                                        href="/babui/assets/client-view/product-category/speakers/portable/"
                                                        data-key="product-cato" data-value="63" data-slug="portable"
                                                        aria-label="Portable 4"><span class="__checkbox "></span> <span
                                                            class="__name">Portable</span> <span
                                                            class="__count">4</span></a></li>
                                            <li class="" data-value="64"><a
                                                        href="/babui/assets/client-view/product-category/speakers/sets/"
                                                        data-key="product-cato" data-value="64" data-slug="sets"
                                                        aria-label="Sets 4"><span class="__checkbox "></span> <span
                                                            class="__name">Sets</span> <span
                                                            class="__count">4</span></a></li>
                                            <li class="" data-value="65"><a
                                                        href="/babui/assets/client-view/product-category/speakers/smart/"
                                                        data-key="product-cato" data-value="65" data-slug="smart"
                                                        aria-label="Smart 3"><span class="__checkbox "></span> <span
                                                            class="__name">Smart</span> <span
                                                            class="__count">3</span></a></li>
                                        </ul>
                                    </li>
                                    <li class="" data-value="50">
                                        <button class="__toggle --collapsed">
                                            <svg aria-hidden="true" role="img" id="rey-icon-arrow-6773552647a89"
                                                 class="rey-icon rey-icon-arrow " viewBox="0 0 22 13">
                                                <style type="text/css">.rey-icon-arrow.--to-left {
                                                        transform: rotate(90deg) scale(0.7);
                                                    }

                                                    .rey-icon-arrow.--to-right {
                                                        transform: rotate(-90deg) scale(0.7);
                                                    }

                                                    .rey-icon-arrow.--to-top {
                                                        transform: rotate(180deg);
                                                    }</style>
                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                    <polygon fill="currentColor"
                                                             points="-0.01 2.44 10.99 13.073 21.98 2.44 19.5 0.008 10.99 8.243 2.47 0.008"></polygon>
                                                </g>
                                            </svg>
                                        </button>
                                        <a href="/babui/assets/client-view/product-category/wearables/"
                                           data-key="product-cato" data-value="50" data-slug="wearables"
                                           aria-label="Wearables 5"><span class="__checkbox "></span> <span
                                                    class="__name">Wearables</span> <span class="__count">5</span></a>
                                        <ul class="children --hidden">
                                            <li class="" data-value="59"><a
                                                        href="/babui/assets/client-view/product-category/wearables/fitness-trackers/"
                                                        data-key="product-cato" data-value="59"
                                                        data-slug="fitness-trackers"
                                                        aria-label="Fitness Trackers 3"><span
                                                            class="__checkbox "></span> <span class="__name">Fitness Trackers</span>
                                                    <span class="__count">3</span></a></li>
                                            <li class="" data-value="60"><a
                                                        href="/babui/assets/client-view/product-category/wearables/glasses/"
                                                        data-key="product-cato" data-value="60" data-slug="glasses"
                                                        aria-label="Glasses 2"><span class="__checkbox "></span> <span
                                                            class="__name">Glasses</span> <span class="__count">2</span></a>
                                            </li>
                                            <li class="" data-value="62"><a
                                                        href="/babui/assets/client-view/product-category/wearables/key-trackers/"
                                                        data-key="product-cato" data-value="62" data-slug="key-trackers"
                                                        aria-label="Key Trackers 2"><span class="__checkbox "></span>
                                                    <span class="__name">Key Trackers</span> <span
                                                            class="__count">2</span></a></li>
                                            <li class="" data-value="66"><a
                                                        href="/babui/assets/client-view/product-category/wearables/smartwatches/"
                                                        data-key="product-cato" data-value="66" data-slug="smartwatches"
                                                        aria-label="Smartwatches 5"><span class="__checkbox "></span>
                                                    <span class="__name">Smartwatches</span> <span
                                                            class="__count">5</span></a></li>
                                            <li class="" data-value="67"><a
                                                        href="/babui/assets/client-view/product-category/wearables/virtual-reality/"
                                                        data-key="product-cato" data-value="67"
                                                        data-slug="virtual-reality" aria-label="Virtual Reality 2"><span
                                                            class="__checkbox "></span> <span class="__name">Virtual Reality</span>
                                                    <span class="__count">2</span></a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </section>
                    <section id="reyajfilter-attribute-filter-1"
                             class="woocommerce reyajfilter-ajax-term-filter rey-filterList rey-filterList--clist --count-stretch widget  widget_reyajfilter-attribute-filter">
                        <h3 class="widget-title ">Colors</h3>
                        <div class="reyajfilter-layered-nav --style-checkboxes" data-taxonomy="pa_color"
                             data-shop="/babui/assets/client-view/shop/" data-vtype="id">
                            <div class="reyajfilter-layered-navInner" style="">
                                <ul class="reyajfilter-layered-list">
                                    <li class="" data-value="20"><a href="#" data-key="attro-color" data-value="20"
                                                                    data-slug="beige" aria-label="Beige 5"><span
                                                    class="__checkbox "></span> <span class="__name">Beige</span> <span
                                                    class="__count">5</span><span style="background: #dfc5a0;"
                                                                                  data-slug="beige" title="Beige"
                                                                                  class="__swatch"></span></a></li>
                                    <li class="" data-value="22"><a href="#" data-key="attro-color" data-value="22"
                                                                    data-slug="black" aria-label="Black 20"><span
                                                    class="__checkbox "></span> <span class="__name">Black</span> <span
                                                    class="__count">20</span><span style="background: #45464c;"
                                                                                   data-slug="black" title="Black"
                                                                                   class="__swatch"></span></a></li>
                                    <li class="" data-value="24"><a href="#" data-key="attro-color" data-value="24"
                                                                    data-slug="brown" aria-label="Brown 10"><span
                                                    class="__checkbox "></span> <span class="__name">Brown</span> <span
                                                    class="__count">10</span><span style="background: #956b45;"
                                                                                   data-slug="brown" title="Brown"
                                                                                   class="__swatch"></span></a></li>
                                    <li class="" data-value="33"><a href="#" data-key="attro-color" data-value="33"
                                                                    data-slug="grey" aria-label="Grey 12"><span
                                                    class="__checkbox "></span> <span class="__name">Grey</span> <span
                                                    class="__count">12</span><span style="background: #dbdbdb;"
                                                                                   data-slug="grey" title="Grey"
                                                                                   class="__swatch"></span></a></li>
                                    <li class="" data-value="43"><a href="#" data-key="attro-color" data-value="43"
                                                                    data-slug="red" aria-label="Red 10"><span
                                                    class="__checkbox "></span> <span class="__name">Red</span> <span
                                                    class="__count">10</span><span style="background: #e75243;"
                                                                                   data-slug="red" title="Red"
                                                                                   class="__swatch"></span></a></li>
                                    <li class="" data-value="51"><a href="#" data-key="attro-color" data-value="51"
                                                                    data-slug="white" aria-label="White 3"><span
                                                    class="__checkbox "></span> <span class="__name">White</span> <span
                                                    class="__count">3</span><span style="background: #fcfcfc;"
                                                                                  data-slug="white" title="White"
                                                                                  class="__swatch"></span></a></li>
                                    <li class="" data-value="54"><a href="#" data-key="attro-color" data-value="54"
                                                                    data-slug="yellow" aria-label="Yellow 4"><span
                                                    class="__checkbox "></span> <span class="__name">Yellow</span> <span
                                                    class="__count">4</span><span style="background: #edea7a;"
                                                                                  data-slug="yellow" title="Yellow"
                                                                                  class="__swatch"></span></a></li>
                                </ul>
                            </div>
                        </div>
                    </section>
                    <section id="reyajfilter-attribute-filter-2"
                             class="woocommerce reyajfilter-ajax-term-filter --count-stretch widget  widget_reyajfilter-attribute-filter">
                        <h3 class="widget-title ">Brands</h3>
                        <div class="reyajfilter-layered-nav --style-checkboxes" data-taxonomy="pa_product-brand"
                             data-shop="/babui/assets/client-view/shop/" data-vtype="id">
                            <div class="reyajfilter-layered-navInner" style="">
                                <ul class="reyajfilter-layered-list">
                                    <li class="" data-value="18"><a
                                                href="/babui/assets/client-view/product-brand/anter/"
                                                data-key="attro-product-brand" data-value="18" data-slug="anter"
                                                aria-label="Anter 0"><span class="__checkbox "></span> <span
                                                    class="__name">Anter</span> <span class="__count">0</span></a></li>
                                    <li class="" data-value="19"><a href="/babui/assets/client-view/product-brand/bav/"
                                                                    data-key="attro-product-brand" data-value="19"
                                                                    data-slug="bav" aria-label="Bav 0"><span
                                                    class="__checkbox "></span> <span class="__name">Bav</span> <span
                                                    class="__count">0</span></a></li>
                                    <li class="" data-value="21"><a
                                                href="/babui/assets/client-view/product-brand/bevel/"
                                                data-key="attro-product-brand" data-value="21" data-slug="bevel"
                                                aria-label="Bevel 0"><span class="__checkbox "></span> <span
                                                    class="__name">Bevel</span> <span class="__count">0</span></a></li>
                                    <li class="" data-value="25"><a
                                                href="/babui/assets/client-view/product-brand/c-pro/"
                                                data-key="attro-product-brand" data-value="25" data-slug="c-pro"
                                                aria-label="C Pro 0"><span class="__checkbox "></span> <span
                                                    class="__name">C Pro</span> <span class="__count">0</span></a></li>
                                    <li class="" data-value="28"><a
                                                href="/babui/assets/client-view/product-brand/candero/"
                                                data-key="attro-product-brand" data-value="28" data-slug="candero"
                                                aria-label="Candero 0"><span class="__checkbox "></span> <span
                                                    class="__name">Candero</span> <span class="__count">0</span></a>
                                    </li>
                                    <li class="" data-value="30"><a
                                                href="/babui/assets/client-view/product-brand/censis/"
                                                data-key="attro-product-brand" data-value="30" data-slug="censis"
                                                aria-label="Censis 0"><span class="__checkbox "></span> <span
                                                    class="__name">Censis</span> <span class="__count">0</span></a></li>
                                    <li class="" data-value="42"><a
                                                href="/babui/assets/client-view/product-brand/quantech/"
                                                data-key="attro-product-brand" data-value="42" data-slug="quantech"
                                                aria-label="Quantech 8"><span class="__checkbox "></span> <span
                                                    class="__name">Quantech</span> <span class="__count">8</span></a>
                                    </li>
                                    <li class="" data-value="47"><a
                                                href="/babui/assets/client-view/product-brand/squarex/"
                                                data-key="attro-product-brand" data-value="47" data-slug="squarex"
                                                aria-label="SquareX 10"><span class="__checkbox "></span> <span
                                                    class="__name">SquareX</span> <span class="__count">10</span></a>
                                    </li>
                                    <li class="" data-value="49"><a
                                                href="/babui/assets/client-view/product-brand/virtuoz/"
                                                data-key="attro-product-brand" data-value="49" data-slug="virtuoz"
                                                aria-label="Virtuoz 0"><span class="__checkbox "></span> <span
                                                    class="__name">Virtuoz</span> <span class="__count">0</span></a>
                                    </li>
                                    <li class="" data-value="53"><a
                                                href="/babui/assets/client-view/product-brand/x-form/"
                                                data-key="attro-product-brand" data-value="53" data-slug="x-form"
                                                aria-label="X-Form 6"><span class="__checkbox "></span> <span
                                                    class="__name">X-Form</span> <span class="__count">6</span></a></li>
                                </ul>
                            </div>
                        </div>
                    </section>
                    <section id="reyajfilter-price-filter-1"
                             class="woocommerce reyajfilter-price-filter-widget reyajfilter-ajax-term-filter --style-list widget  widget_reyajfilter-price-filter">
                        <h3 class="widget-title ">Price</h3>
                        <div class="reyajfilter-layered-nav --style-checkboxes --range-points">
                            <ul>
                                <li><a class="reyajfilter-rangePoints-listItem" href="javascript:void(0)"
                                       data-key-min="min-price" data-value-min="" data-key-max="max-price"
                                       data-value-max="99"><span class="__checkbox "></span><span
                                                class="__text">Under</span><span class="__max">99</span></a></li>
                                <li><a class="reyajfilter-rangePoints-listItem" href="javascript:void(0)"
                                       data-key-min="min-price" data-value-min="100" data-key-max="max-price"
                                       data-value-max="199"><span class="__checkbox "></span><span
                                                class="__min">100</span><span class="__to">to</span><span class="__max">199</span></a>
                                </li>
                                <li><a class="reyajfilter-rangePoints-listItem" href="javascript:void(0)"
                                       data-key-min="min-price" data-value-min="200" data-key-max="max-price"
                                       data-value-max="499"><span class="__checkbox "></span><span
                                                class="__min">200</span><span class="__to">to</span><span class="__max">499</span></a>
                                </li>
                                <li><a class="reyajfilter-rangePoints-listItem" href="javascript:void(0)"
                                       data-key-min="min-price" data-value-min="500" data-key-max="max-price"
                                       data-value-max="999"><span class="__checkbox "></span><span
                                                class="__min">500</span><span class="__to">to</span><span class="__max">999</span></a>
                                </li>
                                <li><a class="reyajfilter-rangePoints-listItem" href="javascript:void(0)"
                                       data-key-min="min-price" data-value-min="1000" data-key-max="max-price"
                                       data-value-max=""><span class="__checkbox "></span><span
                                                class="__text">Over</span><span class="__min">1000</span></a></li>
                            </ul>
                        </div>
                    </section>
                </div>
            </div>
        </div>

    </div>
</div>
<script src="data:text/javascript;base64,KGZ1bmN0aW9uKCkge2Z1bmN0aW9uIG1heWJlUHJlZml4VXJsRmllbGQgKCkgewogIGNvbnN0IHZhbHVlID0gdGhpcy52YWx1ZS50cmltKCkKICBpZiAodmFsdWUgIT09ICcnICYmIHZhbHVlLmluZGV4T2YoJ2h0dHAnKSAhPT0gMCkgewogICAgdGhpcy52YWx1ZSA9ICdodHRwOi8vJyArIHZhbHVlCiAgfQp9Cgpjb25zdCB1cmxGaWVsZHMgPSBkb2N1bWVudC5xdWVyeVNlbGVjdG9yQWxsKCcubWM0d3AtZm9ybSBpbnB1dFt0eXBlPSJ1cmwiXScpCmZvciAobGV0IGogPSAwOyBqIDwgdXJsRmllbGRzLmxlbmd0aDsgaisrKSB7CiAgdXJsRmllbGRzW2pdLmFkZEV2ZW50TGlzdGVuZXIoJ2JsdXInLCBtYXliZVByZWZpeFVybEZpZWxkKQp9Cn0pKCk7"
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
    })();</script>
<div class="rey-demoPanel-wrapper" id="rey-demoPanel-wrapper">
    <div class="rey-demoPanel-overlay"></div>
    <div class="rey-demoPanel-panelWrapper">
        <div class="rey-demoPanel-buttonsWrapper">
            <div class="rey-demoPanel-buttons">
                <a href="#" class="rey-demoPanel-btn js-rey-moreDemos">
                    <span>MORE DEMOS</span>
                    <span class="rey-demoPanel-arr"><svg aria-hidden="true" role="img"
                                                         id="rey-icon-chevron-6773552649877"
                                                         class="rey-icon rey-icon-chevron  " viewBox="0 0 40 64"><polygon
                                    fill="currentColor"
                                    points="39.5 32 6.83 64 0.5 57.38 26.76 32 0.5 6.62 6.83 0"></polygon></svg></span>
                </a>
                <a href="https://1.envato.market/5bY379" class="rey-demoPanel-btn">BUY AT &nbsp;$69</a>
                <a href="#" class="rey-demoPanel-btn rey-demoPanel-remove" data-rey-demos-tooltip="REMOVE PANEL">
                    <svg aria-hidden="true" role="img" id="rey-icon-logo-677355264988a" class="rey-icon rey-icon-logo "
                         viewBox="0 0 78 40">
                        <path d="M78,0.857908847 L68.673913,0.857908847 L63.5869565,15.1206434 L58.5,0.857908847 L49.173913,0.857908847 L59.4008152,24.9865952 L52.7086216,40 L62.0226252,40 L78,0.857908847 Z M8.47826087,5.63002681 L8.47826087,0.857908847 L0,0.857908847 L0,26.5951743 L8.47826087,26.5951743 L8.47826087,17.1045576 C8.47826087,12.922252 10.7038043,10.1340483 13.1413043,9.43699732 C14.6779891,9.0080429 16.2146739,8.95442359 17.8043478,9.43699732 L17.8043478,0 C13.0353261,0.321715818 10.2269022,1.93029491 8.47826087,5.63002681 Z M35.7146739,19.9463807 C34.7078804,19.9463807 33.701087,19.7855228 33.0652174,19.4101877 L48.1141304,10.2949062 C46.1535326,1.769437 39.6888587,0 36.0326087,0 C27.1834239,0 21.8315217,6.11260054 21.8315217,13.7265416 C21.8315217,21.3404826 27.1834239,27.4530831 36.0326087,27.4530831 C40.1127717,27.4530831 43.6100543,25.9517426 46.4184783,23.2171582 L42.0733696,17.4798928 C40.5366848,18.9276139 38.2581522,19.9463807 35.7146739,19.9463807 Z M36.0326087,7.50670241 C37.4103261,7.50670241 38.3641304,8.20375335 38.7880435,8.90080429 L29.9918478,14.2091153 C29.4619565,10.1876676 32.4293478,7.50670241 36.0326087,7.50670241 Z"
                              fill="currentColor" fill-rule="nonzero"></path>
                    </svg>
                    <svg aria-hidden="true" role="img" id="rey-icon-close-6773552649893"
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
                    <li><a href="#" class="--active" data-tab="demos">DEMOS</a></li>
                    <li><a href="#" data-tab="pages" data-supports="categories, search">PAGES</a></li>
                    <li data-rey-demos-tooltip="COMING SOON!"><a href="#" data-tab="sections" class="--disabled">SECTIONS</a>
                    </li>
                    <li data-rey-demos-tooltip="COMING SOON!"><a href="#" data-tab="features" class="--disabled">FEATURES</a>
                    </li>
                </ul>
                <div class="rey-demoPanel-search js-demoPanel-search">
                    <svg class="rey-icon u-icon" height="100%" width="100%" xmlns="http://www.w3.org/2000/svg"
                         viewBox="0 0 30 30">
                        <title>Search</title>
                        <path d="M29.784,26.394 L25.103,21.831 C25.056,21.785 24.995,21.764 24.943,21.727 C29.501,16.417 28.792,8.956 23.676,3.969 C21.055,1.414 17.571,0.006 13.865,0.006 C10.158,0.006 6.673,1.414 4.053,3.969 C-1.358,9.244 -1.358,17.827 4.053,23.101 C6.673,25.657 10.158,27.065 13.865,27.065 C17.155,27.065 19.831,26.323 22.322,24.285 C22.361,24.336 22.381,24.394 22.428,24.441 L26.726,28.630 C26.975,28.873 27.301,28.995 27.627,28.995 C27.953,28.995 29.099,28.873 29.347,28.630 C29.845,28.145 30.282,26.879 29.784,26.394 ZM13.865,23.834 C7.538,23.834 3.588,19.596 3.526,13.649 C3.460,7.397 7.666,3.397 13.865,3.397 C20.087,3.397 24.519,7.410 24.477,13.609 C24.436,19.609 20.169,23.834 13.865,23.834 Z"></path>
                    </svg>
                    <input type="search" placeholder="Type to search..">
                </div>


                <ul class="rey-demoPanel-links">

                    <li class="rey-demoPanel-links--askQuestion">
                        <svg class="rey-icon" height="100%" width="100%" viewBox="0 0 56 53" version="1.1"
                             xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <path d="M43.3,29.5 C43.3,30 42.9,30.6 42.6,30.9 C40.9,33.4 35.8,37.6 28,37.6 C20.2,37.6 15.1,33.4 13.4,30.9 C13.1,30.5 12.8,30.1 12.8,29.6 C12.8,29 13.2,28.4 13.9,28.4 C14.2,28.4 14.5,28.5 14.7,28.7 C17.6,31.2 22.3,33.5 28.1,33.5 C33.9,33.5 38.7,31.2 41.5,28.7 C41.7,28.5 41.9,28.4 42.2,28.4 C42.8,28.4 43.3,28.9 43.3,29.5 Z M51,49 C51.5,49.2 51.8,49.7 51.8,50.4 C51.8,51.4 51.2,52.4 49.6,52.4 C44.6,52.4 38.9,50.5 35.1,48.1 C34.7,47.9 34.4,47.8 33.9,47.9 C32,48.2 30,48.4 28,48.4 C12.5,48.4 0,37.5 0,24.2 C0,10.8 12.5,0 28,0 C43.5,0 56,10.9 56,24.2 C56,31.4 52.4,37.8 46.7,42.2 C46.3,42.5 46.1,42.9 46.3,43.4 C47.1,46 49,47.9 51,49 Z M43.5,46.6 C42.1,44.8 41.1,42 41.1,40.9 C41.1,40.4 41.5,39.9 41.9,39.7 C47.6,36.2 51.3,30.5 51.3,24.2 C51.3,13.6 40.9,5 28,5 C15.1,5 4.7,13.6 4.7,24.2 C4.7,34.8 15.1,43.4 28,43.4 C30,43.4 32,43.2 33.9,42.8 C34.6,42.6 35,42.7 35.3,43 C37.6,44.9 41.9,47.2 43.3,47.2 C43.4,47.2 43.6,47.1 43.6,46.9 C43.6,46.8 43.6,46.7 43.5,46.6 Z"
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
                            <path d="M39.9,7.9 C39.1,7 38,6.4 36.8,6.4 L21.4,6.4 C20.9,6.4 20.4,6.8 20.4,7.4 C20.4,8 20.9,8.4 21.4,8.4 L36.8,8.4 C37.4,8.4 38,8.7 38.4,9.1 C38.8,9.6 39,10.2 38.8,10.8 L37.9,15.8 L26.9,15.8 C26.4,15.8 25.9,16.2 25.9,16.8 C25.9,17.4 26.4,17.8 26.9,17.8 L37.6,17.8 L36.7,22.6 C36.6,23.3 35.9,23.8 35.2,23.8 L16,23.8 C15.3,23.8 14.7,23.3 14.5,22.6 L10.6,0.9 C10.5,0.4 10.1,0.1 9.6,0.1 L1.9,0.1 C1.4,0.1 0.9,0.5 0.9,1.1 C0.9,1.7 1.4,2.1 1.9,2.1 L8.8,2.1 L12.6,23.1 C12.8,24.5 13.8,25.5 15.1,25.9 C14.6,26.6 14.2,27.5 14.2,28.5 C14.2,31 16.2,33 18.7,33 C21.2,33 23.2,31 23.2,28.5 C23.2,27.6 22.9,26.7 22.4,26 L28.5,26 C28,26.7 27.7,27.6 27.7,28.5 C27.7,31 29.7,33 32.2,33 C34.7,33 36.7,31 36.7,28.5 C36.7,27.5 36.4,26.6 35.9,25.9 C37.2,25.6 38.3,24.5 38.6,23.1 L40.8,11.3 C41,10.1 40.7,8.9 39.9,7.9 Z M21.2,28.4 C21.2,29.8 20.1,30.9 18.7,30.9 C17.3,30.9 16.2,29.8 16.2,28.4 C16.2,27 17.3,25.9 18.7,25.9 C20.1,25.9 21.2,27 21.2,28.4 Z M32.3,30.9 C30.9,30.9 29.8,29.8 29.8,28.4 C29.8,27 30.9,25.9 32.3,25.9 C33.7,25.9 34.8,27 34.8,28.4 C34.8,29.8 33.7,30.9 32.3,30.9 Z"
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
                            <a href="#" class="demoPanel-sizeControls" data-sizing="1"
                               data-rey-demos-tooltip="ENLARGE PANEL">
                                <svg class="rey-icon" width="24px" height="15px" viewBox="0 0 24 15" version="1.1"
                                     xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                    <polygon fill="currentColor" fill-rule="nonzero"
                                             points="24 11.71 12 -0.01 0 11.71 2.71 14.39 12 5.31 21.29 14.39"></polygon>
                                </svg>
                            </a>
                        </li>
                        <li class="demoPanel-sizeControls-dots"><span></span> <span></span> <span></span></li>
                        <li>
                            <a href="#" class="demoPanel-sizeControls" data-sizing="-1"
                               data-rey-demos-tooltip="SHRINK PANEL">
                                <svg class="rey-icon --flip-vertical" width="24px" height="15px" viewBox="0 0 24 15"
                                     version="1.1" xmlns="http://www.w3.org/2000/svg"
                                     xmlns:xlink="http://www.w3.org/1999/xlink">
                                    <polygon fill="currentColor" fill-rule="nonzero"
                                             points="24 11.71 12 -0.01 0 11.71 2.71 14.39 12 5.31 21.29 14.39"></polygon>
                                </svg>
                            </a>
                        </li>
                    </ul>
                    <a href="#" class="rey-demoPanel-close" data-rey-demos-tooltip="CLOSE PANEL">
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
<script type="application/ld+json">{
        "@context": "https:\/\/schema.org\/",
        "@type": "BreadcrumbList",
        "itemListElement": [
            {
                "@type": "ListItem",
                "position": 1,
                "item": {
                    "name": "Home",
                    "@id": "https:\/\/demos.reytheme.com\/san-francisco"
                }
            },
            {
                "@type": "ListItem",
                "position": 2,
                "item": {
                    "name": "Shop",
                    "@id": "https:\/\/demos.reytheme.com\/san-francisco\/shop\/"
                }
            }
        ]
    }</script>
<div class="rey-quickviewPanel woocommerce " id="js-rey-quickviewPanel" data-lazy-hidden="">

    <div class="rey-quickview-container" data-openstyle="slide"></div>

    <button class="btn rey-quickviewPanel-close js-rey-quickviewPanel-close" aria-label="">
        <svg aria-hidden="true" role="img" id="rey-icon-close-67735526499dd" class="rey-icon rey-icon-close "
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
    <div class="rey-wishlist-notice"><span>Added to wishlist!</span> <a href="/babui/assets/client-view/wishlist/"
                                                                        class="btn btn-line-active">VIEW WISHLIST</a>
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
                    <svg aria-hidden="true" role="img" id="rey-icon-close-677355264a408"
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
                <svg aria-hidden="true" role="img" id="rey-icon-close-677355264a408" class="rey-icon rey-icon-close "
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

        <form role="search" action="/babui/assets/client-view/" method="get">

            <label for="search-input-677355264a59a">Search demos.reytheme.com/san-francisco</label>
            <div class="rey-searchPanel-innerForm">

                <input type="search" name="s" placeholder="type to search.." id="search-input-677355264a59a" value="">

                <div class="rey-headerSearch-actions">
                    <input type="hidden" name="post_type" value="product"></div>

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
        src="data:text/javascript;base64,CiB3aW5kb3cucmV5U3R5bGVzPVtbInJleS10aGVtZSIsInJleS1idXR0b25zIiwicmV5LWhlYWRlciIsInJleS1zcGxpZGUtbGl0ZSIsInJleS1sb2dvIiwicmV5Y29yZS1oYmctc3R5bGVzIiwicmV5LWhlYWRlci1pY29uIiwicmV5LWljb24iLCJyZXktaGVhZGVyLW1lbnUiLCJyZXljb3JlLWJyZWFkY3J1bWJzIiwicmV5LXdpZGdldHMtbGl0ZSIsInJleWNvcmUtdmFyaWF0aW9uLXN3YXRjaGVzLWxpdGUiLCJyZXktd2MtZ2VuZXJhbCIsInJleS13Yy1sb29wLWhlYWRlci1saXRlIiwicmV5Y29yZS1lbGVtZW50b3ItZnJvbnRlbmQiLCJyZXljb3JlLWVsZW1lbnRvci1zZWN0aW9uLW9wdC1yZXkiLCJyZXljb3JlLXdpZGdldC10ZXh0LXNjcm9sbGVyLWxpdGUiLCJyZXljb3JlLXdpZGdldC1tZW51LXN0eWxlIiwicmV5Y29yZS13aWRnZXQtbWVudS1ob3Jpem9udGFsIiwicmV5LWhiZyIsInJleWNvcmUtd2lkZ2V0LWhlYWRlci1uYXZpZ2F0aW9uLXNvY2lhbCIsInJleWNvcmUtd2lkZ2V0LXRyaWdnZXItdjItYnV0dG9uIiwicmV5Y29yZS13aWRnZXQtY2Fyb3VzZWwtc3R5bGUiLCJyZXljb3JlLWNhcmRzLXNvaG8iLCJyZXljb3JlLWxvb3AtcHJvZHVjdC1za2luLXByb3RvIiwicmV5Y29yZS1zY2hlZHVsZWQtc2FsZXMiXSxbInJleS10aGVtZS1leHQiLCJyZXktd2Mtbm90aWNlcyIsInJleS13Yy1nZW5lcmFsLWRlZmVycmVkIiwicmV5LXdjLWdlbmVyYWwtZGVmZXJyZWQtZm9udCIsInJleS13Yy1sb29wIiwicmV5LXdjLWxvb3AtaGVhZGVyIiwicmV5LXdjLXRhZy1zdHJldGNoIiwicmV5Y29yZS1lbGVtZW50b3ItZnJvbnRlbmQtZGVmZXJyZWQiLCJyZXljb3JlLWVsZW1lbnRvci1zZWN0aW9uLWRlZmVycmVkLW9wdCIsInJleS1zcGxpZGUiLCJyZXljb3JlLXdpZGdldC10ZXh0LXNjcm9sbGVyLXN0eWxlIiwicmV5Y29yZS13aWRnZXQtbWVudS1ob3Jpem9udGFsLWRlZiIsInJleWNvcmUtZWxlbWVudG9yLW5hdi1zdHlsZXMiLCJyZXktb3ZlcmxheSIsInJleS1oZWFkZXItbW9iaWxlLW1lbnUiLCJyZXljb3JlLW1vZHVsZS1tZWdhLW1lbnUiLCJyZXljb3JlLXdpZGdldC1tZW51LXZlcnRpY2FsIiwicmV5Y29yZS13aWRnZXQtd2MtYXR0cmlidXRlcy1zdHlsZSIsInJleS13Yy10YWctYXR0cmlidXRlcyIsInJleWNvcmUtY2xvc2UtYXJyb3ciLCJyZXktaGVhZGVyLW1lbnUtc3VibWVudXMiLCJyZXktaGVhZGVyLW1lbnUtaW5kaWNhdG9ycy1kYXNoIiwicmV5Y29yZS1tYWluLW1lbnUiLCJyZXljb3JlLWhlYWRlci1zZWFyY2gtdG9wIiwicmV5Y29yZS1oZWFkZXItc2VhcmNoIiwicmV5LXdjLWhlYWRlci1hY2NvdW50LXBhbmVsLXRvcCIsInJleS13Yy1oZWFkZXItYWNjb3VudC1wYW5lbCIsInJleS13Yy1oZWFkZXItd2lzaGxpc3QiLCJyZXktd2MtaGVhZGVyLW1pbmktY2FydC10b3AiLCJyZXktc2ltcGxlLXNjcm9sbGJhciIsInJleWNvcmUtb2ZmY2FudmFzLXBhbmVscyIsInJleWNvcmUtc2xpZGVyLWNvbXBvbmVudHMiLCJyZXktd2MtbG9vcC1pbmxpbmVsaXN0IiwicmV5Y29yZS1wcHAiLCJyZXljb3JlLW1vZHVsZS12aWV3LXN3aXRjaGVyIiwicmV5LXdjLXdpZGdldHMtZmlsdGVyLWJ1dHRvbiIsInJleS13aWRnZXRzIiwicmV5Y29yZS13aXNobGlzdCIsInJleWNvcmUtdG9vbHRpcHMiLCJyZXljb3JlLXZhcmlhdGlvbi1zd2F0Y2hlcyIsInJleWNvcmUtcXVpY2t2aWV3IiwicmV5Y29yZS1hamF4LWxvYWQtbW9yZSIsInJleWNvcmUtZWxlbWVudG9yLWVsLWljb25ib3giLCJyZXljb3JlLXdpZGdldC1uZXdzbGV0dGVyLWlubGluZS1iYXNpYyIsInJleWNvcmUtd2lkZ2V0LW1lbnUtdGl0bGUiLCJyZXktaGVhZGVyLWRyb3AtcGFuZWwiLCJyZXljb3JlLXBhc3MtdmlzaWJpbGl0eSIsInJleS1mb3JtLXJvdyIsInJleWNvcmUtbW9kdWxlLW1pbmljYXJ0LWV4dHJhLXByb2R1Y3RzIiwicmV5Y29yZS1zaWRlLXBhbmVsIiwicmV5LXdjLXdpZGdldHMtc2lkZWJhci1maWx0ZXItcGFuZWwiLCJyZXljb3JlLWFqYXhmaWx0ZXItbGF5ZXJlZC1uYXYiLCJyZXljb3JlLWFqYXhmaWx0ZXItcmFuZ2UtcG9pbnRzIiwicmV5ZGVtb3MiLCJyZXktd2MtZWxlbWVudG9yIiwicmV5Y29yZS1hamF4ZmlsdGVyLXN0eWxlIl1dOyAK"
        data-rocket-status="executed">
    window.reyStyles = [["rey-theme", "rey-buttons", "rey-header", "rey-splide-lite", "rey-logo", "reycore-hbg-styles", "rey-header-icon", "rey-icon", "rey-header-menu", "reycore-breadcrumbs", "rey-widgets-lite", "reycore-variation-swatches-lite", "rey-wc-general", "rey-wc-loop-header-lite", "reycore-elementor-frontend", "reycore-elementor-section-opt-rey", "reycore-widget-text-scroller-lite", "reycore-widget-menu-style", "reycore-widget-menu-horizontal", "rey-hbg", "reycore-widget-header-navigation-social", "reycore-widget-trigger-v2-button", "reycore-widget-carousel-style", "reycore-cards-soho", "reycore-loop-product-skin-proto", "reycore-scheduled-sales"], ["rey-theme-ext", "rey-wc-notices", "rey-wc-general-deferred", "rey-wc-general-deferred-font", "rey-wc-loop", "rey-wc-loop-header", "rey-wc-tag-stretch", "reycore-elementor-frontend-deferred", "reycore-elementor-section-deferred-opt", "rey-splide", "reycore-widget-text-scroller-style", "reycore-widget-menu-horizontal-def", "reycore-elementor-nav-styles", "rey-overlay", "rey-header-mobile-menu", "reycore-module-mega-menu", "reycore-widget-menu-vertical", "reycore-widget-wc-attributes-style", "rey-wc-tag-attributes", "reycore-close-arrow", "rey-header-menu-submenus", "rey-header-menu-indicators-dash", "reycore-main-menu", "reycore-header-search-top", "reycore-header-search", "rey-wc-header-account-panel-top", "rey-wc-header-account-panel", "rey-wc-header-wishlist", "rey-wc-header-mini-cart-top", "rey-simple-scrollbar", "reycore-offcanvas-panels", "reycore-slider-components", "rey-wc-loop-inlinelist", "reycore-ppp", "reycore-module-view-switcher", "rey-wc-widgets-filter-button", "rey-widgets", "reycore-wishlist", "reycore-tooltips", "reycore-variation-swatches", "reycore-quickview", "reycore-ajax-load-more", "reycore-elementor-el-iconbox", "reycore-widget-newsletter-inline-basic", "reycore-widget-menu-title", "rey-header-drop-panel", "reycore-pass-visibility", "rey-form-row", "reycore-module-minicart-extra-products", "reycore-side-panel", "rey-wc-widgets-sidebar-filter-panel", "reycore-ajaxfilter-layered-nav", "reycore-ajaxfilter-range-points", "reydemos", "rey-wc-elementor", "reycore-ajaxfilter-style"]];
</script>
<script type="text/javascript" id="reyscripts-loaded"
        src="data:text/javascript;base64,d2luZG93LmFkZEV2ZW50TGlzdGVuZXIoJ0RPTUNvbnRlbnRMb2FkZWQnLCBmdW5jdGlvbigpIHsKIHdpbmRvdy5yZXlTY3JpcHRzPVsicmV5LXNjcmlwdCIsInJleWNvcmUtc2NyaXB0IiwicmV5Y29yZS13b29jb21tZXJjZSIsInJleWNvcmUtd2MtbG9vcC1ncmlkcyIsInJleWNvcmUtZWxlbWVudG9yLWZyb250ZW5kIiwicmV5Y29yZS13aWRnZXQtdGV4dC1zY3JvbGxlci1zY3JpcHRzIiwic3BsaWRlanMiLCJyZXktc3BsaWRlIiwicmV5Y29yZS1tb2R1bGUtbWVnYS1tZW51IiwicmV5LW1vYmlsZS1tZW51LXRyaWdnZXIiLCJyZXktbWFpbi1tZW51IiwicmV5Y29yZS1lbGVtZW50b3ItZWxlbS1oZWFkZXItbmF2aWdhdGlvbiIsInJleWNvcmUtc2lkZXBhbmVsIiwicmV5Y29yZS1oZWFkZXItc2VhcmNoIiwicmV5LWRyb3AtcGFuZWwiLCJyZXljb3JlLXdjLWhlYWRlci1hY2NvdW50LXBhbmVsIiwicmV5LXRtcGwiLCJyZXljb3JlLXdjLWhlYWRlci13aXNobGlzdCIsInJleWNvcmUtdG9vbHRpcHMiLCJyZXljb3JlLXdpc2hsaXN0IiwicmV5Y29yZS13Yy1oZWFkZXItbWluaWNhcnQiLCJhbmltZWpzIiwicmV5LXNpbXBsZS1zY3JvbGxiYXIiLCJyZXljb3JlLW9mZmNhbnZhcy1wYW5lbHMiLCJlbGVtZW50b3ItZnJvbnRlbmQiLCJyZXljb3JlLXdpZGdldC1jYXJvdXNlbC1zY3JpcHRzIiwicmV5Y29yZS13Yy1sb29wLXN0cmV0Y2giLCJyZXljb3JlLXBwcCIsInJleWNvcmUtbW9kdWxlLXZpZXctc3dpdGNoZXIiLCJyZXljb3JlLXdjLWxvb3AtZmlsdGVyLWNvdW50IiwicmV5Y29yZS1hamF4ZmlsdGVyLXNjcmlwdCIsInJleWNvcmUtdmFyaWF0aW9uLXN3YXRjaGVzIiwianF1ZXJ5LWJsb2NrdWkiLCJ3Yy1hZGQtdG8tY2FydC12YXJpYXRpb24iLCJyZXljb3JlLXF1aWNrdmlldyIsInJleWNvcmUtbG9hZC1tb3JlIiwicmV5Y29yZS13Yy1sb29wLWNvdW50LWxvYWRtb3JlIiwicmV5Y29yZS1tYzR3cCIsInJleWNvcmUtd2MtaGVhZGVyLWFjY291bnQtZm9ybXMiLCJyZXljb3JlLW1vZHVsZS1taW5pY2FydC1leHRyYS1wcm9kdWN0cyIsInJleWNvcmUtd2MtbG9vcC1maWx0ZXItcGFuZWwiLCJyZXlkZW1vcyIsInJleWNvcmUtd2MtaGVhZGVyLWFqYXgtc2VhcmNoIl07IAp9KTs="
        data-rocket-status="executed">window.addEventListener('DOMContentLoaded', function () {
        window.reyScripts = ["rey-script", "reycore-script", "reycore-woocommerce", "reycore-wc-loop-grids", "reycore-elementor-frontend", "reycore-widget-text-scroller-scripts", "splidejs", "rey-splide", "reycore-module-mega-menu", "rey-mobile-menu-trigger", "rey-main-menu", "reycore-elementor-elem-header-navigation", "reycore-sidepanel", "reycore-header-search", "rey-drop-panel", "reycore-wc-header-account-panel", "rey-tmpl", "reycore-wc-header-wishlist", "reycore-tooltips", "reycore-wishlist", "reycore-wc-header-minicart", "animejs", "rey-simple-scrollbar", "reycore-offcanvas-panels", "elementor-frontend", "reycore-widget-carousel-scripts", "reycore-wc-loop-stretch", "reycore-ppp", "reycore-module-view-switcher", "reycore-wc-loop-filter-count", "reycore-ajaxfilter-script", "reycore-variation-swatches", "jquery-blockui", "wc-add-to-cart-variation", "reycore-quickview", "reycore-load-more", "reycore-wc-loop-count-loadmore", "reycore-mc4wp", "reycore-wc-header-account-forms", "reycore-module-minicart-extra-products", "reycore-wc-loop-filter-panel", "reydemos", "reycore-wc-header-ajax-search"];
    });</script>
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
<link data-minify="1" rel="stylesheet" id="wc-blocks-style-css"
      href="/babui/assets/client-view/wp-content/cache/min/24/san-francisco/wp-content/plugins/woocommerce/assets/client/blocks/wc-blocks.css?ver=1732304232"
      type="text/css" media="all">
<link rel="stylesheet" onload="this.onload=null;this.media='all';" media="all" data-noptimize="" data-no-optimize="1"
      data-pagespeed-no-defer="" data-pagespeed-no-transform="" data-minify="1" data-no-rel="stylesheet"
      id="elementor-post-1142-css"
      href="/babui/assets/client-view/wp-content/uploads/sites/24/elementor/css/post-1142.css?ver=1732304232"
      type="text/css" data-media="all">
<noscript>
    <link rel='stylesheet' data-noptimize="" data-no-optimize="1" data-pagespeed-no-defer=""
          data-pagespeed-no-transform="" data-minify="1" data-id='elementor-post-1142-css'
          href='/babui/assets/client-view/wp-content/uploads/sites/24/elementor/css/post-1142.css?ver=1732304232'
          data-type='text/css' data-media='all'/>
</noscript>
<link rel="stylesheet" id="widget-heading-css"
      href="/babui/assets/client-view/wp-content/plugins/elementor/assets/css/widget-heading.min.css?ver=3.25.9"
      type="text/css" media="all">
<link rel="stylesheet" onload="this.onload=null;this.media='all';" media="all" data-noptimize="" data-no-optimize="1"
      data-pagespeed-no-defer="" data-pagespeed-no-transform="" data-minify="1" data-no-rel="stylesheet"
      id="elementor-post-1168-css"
      href="/babui/assets/client-view/wp-content/uploads/sites/24/elementor/css/post-1168.css?ver=1732304232"
      type="text/css" data-media="all">
<noscript>
    <link rel='stylesheet' data-noptimize="" data-no-optimize="1" data-pagespeed-no-defer=""
          data-pagespeed-no-transform="" data-minify="1" data-id='elementor-post-1168-css'
          href='/babui/assets/client-view/wp-content/uploads/sites/24/elementor/css/post-1168.css?ver=1732304232'
          data-type='text/css' data-media='all'/>
</noscript>
<link rel="stylesheet" id="widget-text-editor-css"
      href="/babui/assets/client-view/wp-content/plugins/elementor/assets/css/widget-text-editor.min.css?ver=3.25.9"
      type="text/css" media="all">
<link rel="stylesheet" id="widget-divider-css"
      href="/babui/assets/client-view/wp-content/plugins/elementor/assets/css/widget-divider.min.css?ver=3.25.9"
      type="text/css" media="all">
<link rel="stylesheet" as="style" onload="this.onload=null;this.rel='stylesheet';" media="all" data-noptimize=""
      data-no-optimize="1" data-pagespeed-no-defer="" data-pagespeed-no-transform="" data-minify="1"
      data-no-rel="stylesheet" id="elementor-post-1546-css"
      href="/babui/assets/client-view/wp-content/uploads/sites/24/elementor/css/post-1546.css?ver=1732313097"
      type="text/css" data-media="all">
<noscript>
    <link rel='stylesheet' data-noptimize="" data-no-optimize="1" data-pagespeed-no-defer=""
          data-pagespeed-no-transform="" data-minify="1" data-id='elementor-post-1546-css'
          href='/babui/assets/client-view/wp-content/uploads/sites/24/elementor/css/post-1546.css?ver=1732313097'
          data-type='text/css' data-media='all'/>
</noscript>
<link rel="stylesheet" id="widget-icon-box-css"
      href="/babui/assets/client-view/wp-content/plugins/elementor/assets/css/widget-icon-box.min.css?ver=3.25.9"
      type="text/css" media="all">
<link rel="stylesheet" id="widget-social-icons-css"
      href="/babui/assets/client-view/wp-content/plugins/elementor/assets/css/widget-social-icons.min.css?ver=3.25.9"
      type="text/css" media="all">
<link rel="stylesheet" id="e-apple-webkit-css"
      href="/babui/assets/client-view/wp-content/plugins/elementor/assets/css/conditionals/apple-webkit.min.css?ver=3.25.9"
      type="text/css" media="all">
<link rel="stylesheet" id="widget-image-css"
      href="/babui/assets/client-view/wp-content/plugins/elementor/assets/css/widget-image.min.css?ver=3.25.9"
      type="text/css" media="all">
<link rel="stylesheet" id="e-swiper-css"
      href="/babui/assets/client-view/wp-content/plugins/elementor/assets/css/conditionals/e-swiper.min.css?ver=3.25.9"
      type="text/css" media="all">
<link rel="stylesheet" id="elementor-post-2009-css"
      href="/babui/assets/client-view/wp-content/uploads/sites/24/elementor/css/post-2009.css?ver=1732304232"
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
        src="/babui/assets/client-view/wp-content/plugins/woocommerce/assets/js/sourcebuster/sourcebuster.min.js?ver=9.4.2"
        data-rocket-status="executed"></script>
<script type="text/javascript" id="wc-order-attribution-js-extra">
    /* <![CDATA[ */
    var wc_order_attribution = {
        "params": {
            "lifetime": 1.0000000000000000818030539140313095458623138256371021270751953125e-5,
            "session": 30,
            "base64": false,
            "ajaxurl": "https:\/\/demos.reytheme.com\/san-francisco\/wp-admin\/admin-ajax.php",
            "prefix": "wc_order_attribution_",
            "allowTracking": true
        },
        "fields": {
            "source_type": "current.typ",
            "referrer": "current_add.rf",
            "utm_campaign": "current.cmp",
            "utm_source": "current.src",
            "utm_medium": "current.mdm",
            "utm_content": "current.cnt",
            "utm_id": "current.id",
            "utm_term": "current.trm",
            "utm_source_platform": "current.plt",
            "utm_creative_format": "current.fmt",
            "utm_marketing_tactic": "current.tct",
            "session_entry": "current_add.ep",
            "session_start_time": "current_add.fd",
            "session_pages": "session.pgs",
            "session_count": "udata.vst",
            "user_agent": "udata.uag"
        }
    };
    /* ]]> */
</script>
<script type="text/javascript" id="wc-order-attribution-js" data-rocket-defer="" defer=""
        src="/babui/assets/client-view/wp-content/plugins/woocommerce/assets/js/frontend/order-attribution.min.js?ver=9.4.2"
        data-rocket-status="executed"></script>
<script type="text/javascript" id="elementor-webpack-runtime-js" data-rocket-defer="" defer=""
        src="/babui/assets/client-view/wp-content/plugins/elementor/assets/js/webpack.runtime.min.js?ver=3.25.9"
        data-rocket-status="executed"></script>
<script type="text/javascript" id="elementor-frontend-modules-js" data-rocket-defer="" defer=""
        src="/babui/assets/client-view/wp-content/plugins/elementor/assets/js/frontend-modules.min.js?ver=3.25.9"
        data-rocket-status="executed"></script>
<script type="text/javascript" id="elementor-frontend-js-before"
        src="data:text/javascript;base64,Ci8qIDwhW0NEQVRBWyAqLwp2YXIgZWxlbWVudG9yRnJvbnRlbmRDb25maWcgPSB7ImVudmlyb25tZW50TW9kZSI6eyJlZGl0IjpmYWxzZSwid3BQcmV2aWV3IjpmYWxzZSwiaXNTY3JpcHREZWJ1ZyI6ZmFsc2V9LCJpMThuIjp7InNoYXJlT25GYWNlYm9vayI6IlNoYXJlIG9uIEZhY2Vib29rIiwic2hhcmVPblR3aXR0ZXIiOiJTaGFyZSBvbiBUd2l0dGVyIiwicGluSXQiOiJQaW4gaXQiLCJkb3dubG9hZCI6IkRvd25sb2FkIiwiZG93bmxvYWRJbWFnZSI6IkRvd25sb2FkIGltYWdlIiwiZnVsbHNjcmVlbiI6IkZ1bGxzY3JlZW4iLCJ6b29tIjoiWm9vbSIsInNoYXJlIjoiU2hhcmUiLCJwbGF5VmlkZW8iOiJQbGF5IFZpZGVvIiwicHJldmlvdXMiOiJQcmV2aW91cyIsIm5leHQiOiJOZXh0IiwiY2xvc2UiOiJDbG9zZSIsImExMXlDYXJvdXNlbFdyYXBwZXJBcmlhTGFiZWwiOiJDYXJvdXNlbCB8IEhvcml6b250YWwgc2Nyb2xsaW5nOiBBcnJvdyBMZWZ0ICYgUmlnaHQiLCJhMTF5Q2Fyb3VzZWxQcmV2U2xpZGVNZXNzYWdlIjoiUHJldmlvdXMgc2xpZGUiLCJhMTF5Q2Fyb3VzZWxOZXh0U2xpZGVNZXNzYWdlIjoiTmV4dCBzbGlkZSIsImExMXlDYXJvdXNlbEZpcnN0U2xpZGVNZXNzYWdlIjoiVGhpcyBpcyB0aGUgZmlyc3Qgc2xpZGUiLCJhMTF5Q2Fyb3VzZWxMYXN0U2xpZGVNZXNzYWdlIjoiVGhpcyBpcyB0aGUgbGFzdCBzbGlkZSIsImExMXlDYXJvdXNlbFBhZ2luYXRpb25CdWxsZXRNZXNzYWdlIjoiR28gdG8gc2xpZGUifSwiaXNfcnRsIjpmYWxzZSwiYnJlYWtwb2ludHMiOnsieHMiOjAsInNtIjo0ODAsIm1kIjo3NjgsImxnIjoxMDI1LCJ4bCI6MTQ0MCwieHhsIjoxNjAwfSwicmVzcG9uc2l2ZSI6eyJicmVha3BvaW50cyI6eyJtb2JpbGUiOnsibGFiZWwiOiJNb2JpbGUgUG9ydHJhaXQiLCJ2YWx1ZSI6NzY3LCJkZWZhdWx0X3ZhbHVlIjo3NjcsImRpcmVjdGlvbiI6Im1heCIsImlzX2VuYWJsZWQiOnRydWV9LCJtb2JpbGVfZXh0cmEiOnsibGFiZWwiOiJNb2JpbGUgTGFuZHNjYXBlIiwidmFsdWUiOjg4MCwiZGVmYXVsdF92YWx1ZSI6ODgwLCJkaXJlY3Rpb24iOiJtYXgiLCJpc19lbmFibGVkIjpmYWxzZX0sInRhYmxldCI6eyJsYWJlbCI6IlRhYmxldCBQb3J0cmFpdCIsInZhbHVlIjoxMDI0LCJkZWZhdWx0X3ZhbHVlIjoxMDI0LCJkaXJlY3Rpb24iOiJtYXgiLCJpc19lbmFibGVkIjp0cnVlfSwidGFibGV0X2V4dHJhIjp7ImxhYmVsIjoiVGFibGV0IExhbmRzY2FwZSIsInZhbHVlIjoxMjAwLCJkZWZhdWx0X3ZhbHVlIjoxMjAwLCJkaXJlY3Rpb24iOiJtYXgiLCJpc19lbmFibGVkIjpmYWxzZX0sImxhcHRvcCI6eyJsYWJlbCI6IkxhcHRvcCIsInZhbHVlIjoxMzY2LCJkZWZhdWx0X3ZhbHVlIjoxMzY2LCJkaXJlY3Rpb24iOiJtYXgiLCJpc19lbmFibGVkIjpmYWxzZX0sIndpZGVzY3JlZW4iOnsibGFiZWwiOiJXaWRlc2NyZWVuIiwidmFsdWUiOjI0MDAsImRlZmF1bHRfdmFsdWUiOjI0MDAsImRpcmVjdGlvbiI6Im1pbiIsImlzX2VuYWJsZWQiOmZhbHNlfX0sImhhc0N1c3RvbUJyZWFrcG9pbnRzIjpmYWxzZX0sInZlcnNpb24iOiIzLjI1LjkiLCJpc19zdGF0aWMiOmZhbHNlLCJleHBlcmltZW50YWxGZWF0dXJlcyI6eyJlX2ZvbnRfaWNvbl9zdmciOnRydWUsImVfc3dpcGVyX2xhdGVzdCI6dHJ1ZSwiZV9uZXN0ZWRfYXRvbWljX3JlcGVhdGVycyI6dHJ1ZSwiZV9vcHRpbWl6ZWRfY29udHJvbF9sb2FkaW5nIjp0cnVlLCJlX29uYm9hcmRpbmciOnRydWUsImVfY3NzX3Ntb290aF9zY3JvbGwiOnRydWUsImhvbWVfc2NyZWVuIjp0cnVlLCJsYW5kaW5nLXBhZ2VzIjp0cnVlLCJuZXN0ZWQtZWxlbWVudHMiOnRydWUsImVkaXRvcl92MiI6dHJ1ZSwibGluay1pbi1iaW8iOnRydWUsImZsb2F0aW5nLWJ1dHRvbnMiOnRydWV9LCJ1cmxzIjp7ImFzc2V0cyI6Imh0dHBzOlwvXC9kZW1vcy5yZXl0aGVtZS5jb21cL3Nhbi1mcmFuY2lzY29cL3dwLWNvbnRlbnRcL3BsdWdpbnNcL2VsZW1lbnRvclwvYXNzZXRzXC8iLCJhamF4dXJsIjoiaHR0cHM6XC9cL2RlbW9zLnJleXRoZW1lLmNvbVwvc2FuLWZyYW5jaXNjb1wvd3AtYWRtaW5cL2FkbWluLWFqYXgucGhwIiwidXBsb2FkVXJsIjoiaHR0cHM6XC9cL2RlbW9zLnJleXRoZW1lLmNvbVwvc2FuLWZyYW5jaXNjb1wvd3AtY29udGVudFwvdXBsb2Fkc1wvc2l0ZXNcLzI0In0sIm5vbmNlcyI6eyJmbG9hdGluZ0J1dHRvbnNDbGlja1RyYWNraW5nIjoiMzAyYTk4NDlhOSJ9LCJzd2lwZXJDbGFzcyI6InN3aXBlciIsInNldHRpbmdzIjp7ImVkaXRvclByZWZlcmVuY2VzIjpbXX0sImtpdCI6eyJhY3RpdmVfYnJlYWtwb2ludHMiOlsidmlld3BvcnRfbW9iaWxlIiwidmlld3BvcnRfdGFibGV0Il0sImdsb2JhbF9pbWFnZV9saWdodGJveCI6InllcyIsImxpZ2h0Ym94X2VuYWJsZV9jb3VudGVyIjoieWVzIiwibGlnaHRib3hfZW5hYmxlX2Z1bGxzY3JlZW4iOiJ5ZXMiLCJsaWdodGJveF9lbmFibGVfem9vbSI6InllcyIsImxpZ2h0Ym94X2VuYWJsZV9zaGFyZSI6InllcyIsImxpZ2h0Ym94X3RpdGxlX3NyYyI6InRpdGxlIiwibGlnaHRib3hfZGVzY3JpcHRpb25fc3JjIjoiZGVzY3JpcHRpb24ifSwicG9zdCI6eyJpZCI6MCwidGl0bGUiOiJTaG9wICYjODIxMTsgU2FuIEZyYW5jaXNjbyIsImV4Y2VycHQiOiI8cD5UaGlzIGlzIHdoZXJlIHlvdSBjYW4gYnJvd3NlIHByb2R1Y3RzIGluIHRoaXMgc3RvcmUuPFwvcD5cbiJ9fTsKLyogXV0+ICovCg=="
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
        "nonces": {"floatingButtonsClickTracking": "302a9849a9"},
        "swiperClass": "swiper",
        "settings": {"editorPreferences": []},
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
            "id": 0,
            "title": "Shop &#8211; San Francisco",
            "excerpt": "<p>This is where you can browse products in this store.<\/p>\n"
        }
    };
    /* ]]> */
</script>
<script type="text/javascript" defer="" id="elementor-frontend-js"
        src="/babui/assets/client-view/wp-content/plugins/elementor/assets/js/frontend.min.js?ver=3.25.9"
        data-rocket-status="executed"></script>
<script type="text/javascript" id="wc-cart-fragments-js-extra">
    /* <![CDATA[ */
    var wc_cart_fragments_params = {
        "ajax_url": "\/san-francisco\/wp-admin\/admin-ajax.php",
        "wc_ajax_url": "\/san-francisco\/?wc-ajax=%%endpoint%%",
        "cart_hash_key": "wc_cart_hash_d16790dd395a1b6d8d5f5708813f6026",
        "fragment_name": "wc_fragments_d16790dd395a1b6d8d5f5708813f6026",
        "request_timeout": "5000"
    };
    /* ]]> */
</script>
<script type="text/javascript" data-minify="1" id="wc-cart-fragments-js" defer="defer" data-wp-strategy="defer"
        src="/babui/assets/client-view/wp-content/cache/min/24/san-francisco/wp-content/plugins/rey-core/assets/js/woocommerce/cart-fragments.js?ver=1729932040"
        data-rocket-status="executed"></script>
<script type="text/javascript" data-minify="1" defer="" id="mc4wp-forms-api-js"
        src="/babui/assets/client-view/wp-content/cache/min/24/san-francisco/wp-content/plugins/mailchimp-for-wp/assets/js/forms.js?ver=1729932040"
        data-rocket-status="executed"></script>
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
        "ajax_nonce": "65710377e7",
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
            "r_ajax_nonce": "aea8901e1e",
            "r_ajax_url": "\/san-francisco\/?reycore-ajax=%%endpoint%%",
            "ajax_queue": true
        },
        "check_for_empty": [".--check-empty", ".rey-mobileNav-footer", ".rey-postFooter"],
        "popv_selector": "0",
        "mobile_click_event": "click",
        "optimized_dom": "1",
        "el_pushback_fallback": "",
        "header_fix_elementor_zindex": "",
        "woocommerce": "1",
        "wc_ajax_url": "\/san-francisco\/?wc-ajax=%%endpoint%%",
        "rest_url": "https:\/\/demos.reytheme.com\/san-francisco\/wp-json\/rey\/v1",
        "rest_nonce": "71b7c90143",
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
            "apply_coupon_nonce": "6641188e38",
            "remove_coupon_nonce": "54f7a7982f",
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
        src="/babui/assets/client-view/wp-content/cache/min/24/san-francisco/wp-content/plugins/rey-core/assets/js/general/c-helpers.js?ver=1732304232"
        data-rocket-status="executed"></script>
<script type="text/javascript" data-minify="1" defer="" id="reycore-script-js"
        src="/babui/assets/client-view/wp-content/cache/min/24/san-francisco/wp-content/plugins/rey-core/assets/js/general/c-general.js?ver=1729932040"
        data-rocket-status="executed"></script>
<script type="text/javascript" data-minify="1" defer="" id="reycore-woocommerce-js"
        src="/babui/assets/client-view/wp-content/cache/min/24/san-francisco/wp-content/plugins/rey-core/assets/js/woocommerce/general.js?ver=1729932040"
        data-rocket-status="executed"></script>
<script type="text/javascript" data-minify="1" defer="" id="reycore-wc-loop-grids-js"
        src="/babui/assets/client-view/wp-content/cache/min/24/san-francisco/wp-content/plugins/rey-core/assets/js/woocommerce/loop-grids.js?ver=1729932040"
        data-rocket-status="executed"></script>
<script type="text/javascript" id="reycore-elementor-frontend-js-extra">
    /* <![CDATA[ */
    var reyElementorFrontendParams = {
        "compatibilities": {"column_video": true, "video_bg_play_on_mobile": true},
        "ajax_url": "https:\/\/demos.reytheme.com\/san-francisco\/wp-admin\/admin-ajax.php",
        "ajax_nonce": "4a2b045ba6"
    };
    /* ]]> */
</script>
<script type="text/javascript" data-minify="1" defer="" id="reycore-elementor-frontend-js"
        src="/babui/assets/client-view/wp-content/cache/min/24/san-francisco/wp-content/plugins/rey-core/assets/js/elementor/general.js?ver=1729932040"
        data-rocket-status="executed"></script>
<script type="text/javascript" data-minify="1" defer="" id="reycore-widget-text-scroller-scripts-js"
        src="/babui/assets/client-view/wp-content/cache/min/24/san-francisco/wp-content/plugins/rey-core/inc/elementor/widgets/text-scroller/assets/script.js?ver=1729932040"
        data-rocket-status="executed"></script>
<script type="text/javascript" data-minify="1" defer="" id="splidejs-js"
        src="/babui/assets/client-view/wp-content/cache/min/24/san-francisco/wp-content/plugins/rey-core/assets/js/lib/splide.js?ver=1729932040"
        data-rocket-status="executed"></script>
<script type="text/javascript" data-minify="1" defer="" id="rey-splide-js"
        src="/babui/assets/client-view/wp-content/cache/min/24/san-francisco/wp-content/plugins/rey-core/assets/js/general/c-slider.js?ver=1729932040"
        data-rocket-status="executed"></script>
<script type="text/javascript" data-minify="1" defer="" id="reycore-module-mega-menu-js"
        src="/babui/assets/client-view/wp-content/cache/min/24/san-francisco/wp-content/plugins/rey-core/inc/modules/mega-menus/script.js?ver=1729932040"
        data-rocket-status="executed"></script>
<script type="text/javascript" data-minify="1" defer="" id="rey-mobile-menu-trigger-js"
        src="/babui/assets/client-view/wp-content/cache/min/24/san-francisco/wp-content/themes/rey/assets/js/components/c-mobile-menu-trigger.js?ver=1729932040"
        data-rocket-status="executed"></script>
<script type="text/javascript" data-minify="1" defer="" id="rey-main-menu-js"
        src="/babui/assets/client-view/wp-content/cache/min/24/san-francisco/wp-content/themes/rey/assets/js/components/c-main-menu.js?ver=1729932040"
        data-rocket-status="executed"></script>
<script type="text/javascript" data-minify="1" defer="" id="reycore-elementor-elem-header-navigation-js"
        src="/babui/assets/client-view/wp-content/cache/min/24/san-francisco/wp-content/plugins/rey-core/assets/js/elementor/elem-header-navigation.js?ver=1729932040"
        data-rocket-status="executed"></script>
<script type="text/javascript" data-minify="1" defer="" id="reycore-sidepanel-js"
        src="/babui/assets/client-view/wp-content/cache/min/24/san-francisco/wp-content/plugins/rey-core/assets/js/general/c-sidepanel.js?ver=1729932040"
        data-rocket-status="executed"></script>
<script type="text/javascript" data-minify="1" defer="" id="reycore-header-search-js"
        src="/babui/assets/client-view/wp-content/cache/min/24/san-francisco/wp-content/plugins/rey-core/assets/js/general/c-header-search.js?ver=1729932040"
        data-rocket-status="executed"></script>
<script type="text/javascript" data-minify="1" defer="" id="rey-drop-panel-js"
        src="/babui/assets/client-view/wp-content/cache/min/24/san-francisco/wp-content/themes/rey/assets/js/components/c-drop-panel.js?ver=1729932040"
        data-rocket-status="executed"></script>
<script type="text/javascript" data-minify="1" defer="" id="reycore-wc-header-account-panel-js"
        src="/babui/assets/client-view/wp-content/cache/min/24/san-francisco/wp-content/plugins/rey-core/assets/js/woocommerce/header-account-panel.js?ver=1729932040"
        data-rocket-status="executed"></script>
<script type="text/javascript" data-minify="1" defer="" id="rey-tmpl-js"
        src="/babui/assets/client-view/wp-content/cache/min/24/san-francisco/wp-content/plugins/rey-core/assets/js/lib/c-rey-template.js?ver=1729932040"
        data-rocket-status="executed"></script>
<script type="text/javascript" data-minify="1" defer="" id="reycore-wc-header-wishlist-js"
        src="/babui/assets/client-view/wp-content/cache/min/24/san-francisco/wp-content/plugins/rey-core/assets/js/woocommerce/header-wishlist.js?ver=1729932040"
        data-rocket-status="executed"></script>
<script type="text/javascript" data-minify="1" defer="" id="reycore-tooltips-js"
        src="/babui/assets/client-view/wp-content/cache/min/24/san-francisco/wp-content/plugins/rey-core/assets/js/general/c-tooltips.js?ver=1729932040"
        data-rocket-status="executed"></script>
<script type="text/javascript" data-minify="1" defer="" id="reycore-wishlist-js"
        src="/babui/assets/client-view/wp-content/cache/min/24/san-francisco/wp-content/plugins/rey-core/inc/modules/wishlist/script.js?ver=1729932040"
        data-rocket-status="executed"></script>
<script type="text/javascript" data-minify="1" defer="" id="reycore-wc-header-minicart-js"
        src="/babui/assets/client-view/wp-content/cache/min/24/san-francisco/wp-content/plugins/rey-core/assets/js/woocommerce/header-minicart.js?ver=1729932040"
        data-rocket-status="executed"></script>
<script type="text/javascript" defer="" id="animejs-js"
        src="/babui/assets/client-view/wp-content/plugins/rey-core/assets/js/lib/anime.min.js?ver=3.1.0"
        data-rocket-status="executed"></script>
<script type="text/javascript" data-minify="1" defer="" id="rey-simple-scrollbar-js"
        src="/babui/assets/client-view/wp-content/cache/min/24/san-francisco/wp-content/plugins/rey-core/assets/js/lib/simple-scrollbar.js?ver=1729932040"
        data-rocket-status="executed"></script>
<script type="text/javascript" data-minify="1" defer="" id="reycore-offcanvas-panels-js"
        src="/babui/assets/client-view/wp-content/cache/min/24/san-francisco/wp-content/plugins/rey-core/inc/modules/offcanvas-panels/script.js?ver=1729932040"
        data-rocket-status="executed"></script>
<script type="text/javascript" data-minify="1" defer="" id="reycore-widget-carousel-scripts-js"
        src="/babui/assets/client-view/wp-content/cache/min/24/san-francisco/wp-content/plugins/rey-core/inc/elementor/widgets/carousel/assets/script.js?ver=1729932040"
        data-rocket-status="executed"></script>
<script type="text/javascript" data-minify="1" defer="" id="reycore-wc-loop-stretch-js"
        src="/babui/assets/client-view/wp-content/cache/min/24/san-francisco/wp-content/plugins/rey-core/assets/js/woocommerce/loop-stretch.js?ver=1729934240"
        data-rocket-status="executed"></script>
<script type="text/javascript" id="reycore-ppp-js-extra">
    /* <![CDATA[ */
    var reycore_ppp_params = {"key": "products-per-page"};
    /* ]]> */
</script>
<script type="text/javascript" data-minify="1" defer="" id="reycore-ppp-js"
        src="/babui/assets/client-view/wp-content/cache/min/24/san-francisco/wp-content/plugins/rey-core/inc/modules/products-per-page/frontend-script.js?ver=1729934240"
        data-rocket-status="executed"></script>
<script type="text/javascript" data-minify="1" defer="" id="reycore-module-view-switcher-js"
        src="/babui/assets/client-view/wp-content/cache/min/24/san-francisco/wp-content/plugins/rey-core/inc/modules/view-switcher/script.js?ver=1729934240"
        data-rocket-status="executed"></script>
<script type="text/javascript" data-minify="1" defer="" id="reycore-wc-loop-filter-count-js"
        src="/babui/assets/client-view/wp-content/cache/min/24/san-francisco/wp-content/plugins/rey-core/assets/js/woocommerce/loop-filter-count.js?ver=1729934240"
        data-rocket-status="executed"></script>
<script type="text/javascript" id="reycore-ajaxfilter-script-js-extra">
    /* <![CDATA[ */
    var reyajaxfilter_params = {
        "shop_loop_container": ".rey-siteMain .reyajfilter-before-products,.elementor-widget-loop-grid .reyajfilter-before-products,.elementor-widget-woocommerce-products .reyajfilter-before-products, .elementor-widget-reycore-woo-loop-products .reyajfilter-before-products",
        "not_found_container": ".rey-siteMain .reyajfilter-before-products,.elementor-widget-loop-grid .reyajfilter-before-products,.elementor-widget-woocommerce-products .reyajfilter-before-products, .elementor-widget-reycore-woo-loop-products .reyajfilter-before-products",
        "pagination_container": ".woocommerce-pagination",
        "extra_containers": [".rey-pageCover", ".rey-siteMain .rey-breadcrumbs", ".rey-siteMain .woocommerce-products-header"],
        "animation_type": "default",
        "sorting_control": "1",
        "scroll_to_top": "1",
        "scroll_to_top_offset": "100",
        "scroll_to_top_from": "grid",
        "apply_filter_fixed": "1",
        "dd_search_threshold": "5",
        "prevent_mobile_popstate": "1",
        "page_url": "https:\/\/demos.reytheme.com\/san-francisco\/shop\/",
        "minimal_tpl": "1",
        "slider_margin": "10",
        "slider_step": "1",
        "apply_live_results": "",
        "reset_filters_text": "RESET FILTERS",
        "reset_filters_link": "https:\/\/demos.reytheme.com\/san-francisco\/shop\/",
        "filter_params": ["keyword", "product-cata", "product-cato", "product-taga", "product-tago", "attra", "attro", "max-range", "min-range", "min-price", "max-price", "in-stock", "on-sale", "is-featured", "rating_filter", "product-meta"],
        "panel_keep_open": "",
        "shop_page": "https:\/\/demos.reytheme.com\/san-francisco\/shop\/"
    };
    /* ]]> */
</script>
<script type="text/javascript" data-minify="1" defer="" id="reycore-ajaxfilter-script-js"
        src="/babui/assets/client-view/wp-content/cache/min/24/san-francisco/wp-content/plugins/rey-core/inc/modules/ajax-filters/assets/js/scripts.js?ver=1729934240"
        data-rocket-status="executed"></script>
<script type="text/javascript" data-minify="1" defer="" id="reycore-variation-swatches-js"
        src="/babui/assets/client-view/wp-content/cache/min/24/san-francisco/wp-content/plugins/rey-core/inc/modules/variation-swatches/frontend-script.js?ver=1729932040"
        data-rocket-status="executed"></script>
<script type="text/javascript" id="wc-add-to-cart-variation-js-extra">
    /* <![CDATA[ */
    var wc_add_to_cart_variation_params = {
        "wc_ajax_url": "\/san-francisco\/?wc-ajax=%%endpoint%%",
        "i18n_no_matching_variations_text": "Sorry, no products matched your selection. Please choose a different combination.",
        "i18n_make_a_selection_text": "Please select some product options before adding this product to your cart.",
        "i18n_unavailable_text": "Sorry, this product is unavailable. Please choose a different combination."
    };
    /* ]]> */
</script>
<script type="text/javascript" data-minify="1" id="wc-add-to-cart-variation-js" defer="defer" data-wp-strategy="defer"
        src="/babui/assets/client-view/wp-content/cache/min/24/san-francisco/wp-content/plugins/rey-core/assets/js/woocommerce/add-to-cart-variation.js?ver=1729932040"
        data-rocket-status="executed"></script>
<script type="text/javascript" data-minify="1" defer="" id="reycore-quickview-js"
        src="/babui/assets/client-view/wp-content/cache/min/24/san-francisco/wp-content/plugins/rey-core/inc/modules/quickview/script.js?ver=1729932040"
        data-rocket-status="executed"></script>
<script type="text/javascript" data-minify="1" defer="" id="reycore-load-more-js"
        src="/babui/assets/client-view/wp-content/cache/min/24/san-francisco/wp-content/plugins/rey-core/assets/js/general/c-load-more.js?ver=1729934240"
        data-rocket-status="executed"></script>
<script type="text/javascript" data-minify="1" defer="" id="reycore-wc-loop-count-loadmore-js"
        src="/babui/assets/client-view/wp-content/cache/min/24/san-francisco/wp-content/plugins/rey-core/assets/js/woocommerce/loop-count-loadmore.js?ver=1729934240"
        data-rocket-status="executed"></script>
<script type="text/javascript" data-minify="1" defer="" id="reycore-mc4wp-js"
        src="/babui/assets/client-view/wp-content/cache/min/24/san-francisco/wp-content/plugins/rey-core/inc/compatibility/mailchimp-for-wp/script.js?ver=1729932040"
        data-rocket-status="executed"></script>
<script type="text/javascript" data-minify="1" defer="" id="reycore-wc-header-account-forms-js"
        src="/babui/assets/client-view/wp-content/cache/min/24/san-francisco/wp-content/plugins/rey-core/assets/js/woocommerce/header-account-forms.js?ver=1729932040"
        data-rocket-status="executed"></script>
<script type="text/javascript" data-minify="1" defer="" id="reycore-module-minicart-extra-products-js"
        src="/babui/assets/client-view/wp-content/cache/min/24/san-francisco/wp-content/plugins/rey-core/inc/modules/mini-cart-extra-products/script.js?ver=1729932040"
        data-rocket-status="executed"></script>
<script type="text/javascript" data-minify="1" defer="" id="reycore-wc-loop-filter-panel-js"
        src="/babui/assets/client-view/wp-content/cache/min/24/san-francisco/wp-content/plugins/rey-core/assets/js/woocommerce/loop-filter-panel.js?ver=1729934240"
        data-rocket-status="executed"></script>
<script type="text/javascript" data-minify="1" defer="" id="reydemos-js"
        src="/babui/assets/client-view/wp-content/cache/min/24/san-francisco/wp-content/plugins/rey-demos/assets/js/script.js?ver=1729932040"
        data-rocket-status="executed"></script>
<script type="text/javascript" data-minify="1" defer="" id="reycore-wc-header-ajax-search-js"
        src="/babui/assets/client-view/wp-content/cache/min/24/san-francisco/wp-content/plugins/rey-core/assets/js/woocommerce/header-ajax-search.js?ver=1729932040"
        data-rocket-status="executed"></script>
<div style="display:none !important" id="rey-svg-holder">
    <svg data-icon-id="arrow-long" aria-hidden="true" role="img" id="rey-icon-arrow-long-677355264bb07"
         class="rey-icon rey-icon-arrow-long  --default" viewBox="0 0 50 8">
        <path d="M0.928904706,3.0387609 L44.0113745,3.0387609 L44.0113745,4.97541883 L0.928904706,4.97541883 C0.415884803,4.97541883 2.13162821e-14,4.54188318 2.13162821e-14,4.00708986 C2.13162821e-14,3.47229655 0.415884803,3.0387609 0.928904706,3.0387609 Z"
              class="rey-arrowSvg-dash"
              style="transform:var(--i-dsh-tr,initial);transition:var(--i-trs,initial);transform-origin:100% 50%;"></path>
        <path d="M49.6399545,3.16320794 L45.1502484,0.129110528 C45.0056033,0.0532149593 44.8474869,0.0092610397 44.685796,3.99680289e-14 C44.5479741,0.0112891909 44.4144881,0.0554642381 44.2956561,0.129110528 C44.0242223,0.2506013 43.8503957,0.531340097 43.8559745,0.839218433 L43.8559745,6.90741326 C43.8503957,7.21529159 44.0242223,7.49603039 44.2956561,7.61752116 C44.5594727,7.77895738 44.8864318,7.77895738 45.1502484,7.61752116 L49.6399545,4.58342375 C49.8682741,4.42554586 50.0055358,4.15892769 50.0055358,3.87331584 C50.0055358,3.587704 49.8682741,3.32108583 49.6399545,3.16320794 Z"></path>
    </svg>
    <svg data-icon-id="close" aria-hidden="true" role="img" id="rey-icon-close-677355264bb17"
         class="rey-icon rey-icon-close " viewBox="0 0 110 110">
        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" stroke-linecap="square">
            <path d="M4.79541854,4.29541854 L104.945498,104.445498 L4.79541854,4.29541854 Z" stroke="currentColor"
                  stroke-width="var(--stroke-width, 12px)"></path>
            <path d="M4.79541854,104.704581 L104.945498,4.55450209 L4.79541854,104.704581 Z" stroke="currentColor"
                  stroke-width="var(--stroke-width, 12px)"></path>
        </g>
    </svg>
    <svg data-icon-id="arrow-classic" aria-hidden="true" role="img" id="rey-icon-arrow-classic-677355264bb21"
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
    }, !1)</script>
<script data-no-minify="1" async=""
        src="/babui/assets/client-view/wp-content/plugins/wp-rocket/assets/js/lazyload/17.8.3/lazyload.min.js"></script>
<script>var rocket_beacon_data = {
        "ajax_url": "https:\/\/demos.reytheme.com\/san-francisco\/wp-admin\/admin-ajax.php",
        "nonce": "c55e8f1878",
        "url": "https:\/\/demos.reytheme.com\/san-francisco\/shop",
        "is_mobile": false,
        "width_threshold": 1600,
        "height_threshold": 700,
        "delay": 500,
        "debug": null,
        "status": {"atf": true, "lrc": false},
        "elements": "img, video, picture, p, main, div, li, svg, section, header, span",
        "lrc_threshold": 1800
    }</script>
<script data-name="wpr-wpr-beacon"
        src="/babui/assets/client-view/wp-content/plugins/wp-rocket/assets/js/wpr-beacon.min.js" async=""
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
