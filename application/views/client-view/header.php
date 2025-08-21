<meta charset="UTF-8">

    <script>(() => {
        class RocketLazyLoadScripts {
            constructor() {
                this.v = "1.2.6", this.triggerEvents = ["keydown", "mousedown", "mousemove", "touchmove", "touchstart", "touchend", "wheel"], this.userEventHandler = this.t.bind(this), this.touchStartHandler = this.i.bind(this), this.touchMoveHandler = this.o.bind(this), this.touchEndHandler = this.h.bind(this), this.clickHandler = this.u.bind(this), this.interceptedClicks = [], this.interceptedClickListeners = [], this.l(this), window.addEventListener("pageshow", (t => {
                    this.persisted = t.persisted, this.everythingLoaded && this.m()
                })), this.CSPIssue = sessionStorage.getItem("rocketCSPIssue"), document.addEventListener("securitypolicyviolation", (t => {
                    this.CSPIssue || "script-src-elem" !== t.violatedDirective || "data" !== t.blockedURI || (this.CSPIssue = !0, sessionStorage.setItem("rocketCSPIssue", !0))
                })), document.addEventListener("DOMContentLoaded", (() => {
                    this.k()
                })), this.delayedScripts = {normal: [], async: [], defer: []}, this.trash = [], this.allJQueries = []
            }

            static run() {
                const t = new RocketLazyLoadScripts;
                t.p(t)
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
                            originalFunctions: {add: t.addEventListener, remove: t.removeEventListener},
                            eventsToRewrite: []
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
        }

        RocketLazyLoadScripts.run()
    })();</script>

    <meta content="width=device-width, initial-scale=1" name="viewport">
    <link href="//gmpg.org/xfn/11" rel="profile">
    <link href="https://demos.reytheme.com/tokyo/xmlrpc.php" rel="pingback">

    <title>Tokyo Demo &#8211; Rey Theme</title>
    <!--    start backgroud image link -->
    <link as="image" data-rocket-preload fetchpriority="high"
          href="https://demos.reytheme.com/tokyo/wp-content/uploads/sites/6/2019/06/bg-6.svg" rel="preload">
    <!--    end backgroud image link -->
    <meta content='max-image-preview:large' name='robots'/>
    <style>img:is([sizes="auto" i], [sizes^="auto," i]) {
        contain-intrinsic-size: 3000px 1500px
    }</style>



    <link as="style" data-media='all' data-minify="1" data-no-rel='stylesheet'
          href='https://demos.reytheme.com/tokyo/wp-content/cache/min/6/tokyo/wp-content/themes/rey-child/style.css?ver=1732303718'
          id='rey-wp-style-child-css' media="all"
          onload="this.onload=null;this.rel='stylesheet';"
          rel="preload" type='text/css'/>
    <noscript>
        <link data-id='rey-wp-style-child-css' data-media='all' data-minify="1"
              data-type='text/css'
              href='https://demos.reytheme.com/tokyo/wp-content/cache/min/6/tokyo/wp-content/themes/rey-child/style.css?ver=1732303718'
              rel='stylesheet'/>
    </noscript>
    <link href='https://demos.reytheme.com/tokyo/wp-content/plugins/elementor/assets/css/frontend.min.css?ver=3.25.9'
          id='elementor-frontend-css'
          media='all'
          rel='stylesheet' type='text/css'/>
    <link data-minify="1"
          href="https://demos.reytheme.com/tokyo/wp-content/cache/min/6/tokyo/wp-content/uploads/sites/6/rey/hs-804aa92b76.css?ver=1732303718"
          id="rey-hs-css"
          media="all"
          rel="stylesheet" type="text/css"/>
    <link as="style" data-minify="1"
          data-no-optimize="1"
          data-noptimize="" data-pagespeed-no-defer="" data-pagespeed-no-transform=""
          href="https://demos.reytheme.com/tokyo/wp-content/uploads/sites/6/rey/ds-be3ecc54ac.css?ver=3.1.2.1732303718"
          id="rey-ds-css" media="all" onload="this.onload=null;this.rel='stylesheet';" rel="preload" type="text/css"/>
    <noscript>
        <link data-no-minify="1"
              href="https://demos.reytheme.com/tokyo/wp-content/uploads/sites/6/rey/ds-be3ecc54ac.css"
              rel="stylesheet">
    </noscript>

    <link href='https://demos.reytheme.com/tokyo/wp-content/plugins/elementor/assets/css/widget-spacer.min.css?ver=3.25.9'
          id='widget-spacer-css'
          media='all'
          rel='stylesheet' type='text/css'/>
    <link href='https://demos.reytheme.com/tokyo/wp-content/plugins/elementor/assets/css/widget-heading.min.css?ver=3.25.9'
          id='widget-heading-css'
          media='all'
          rel='stylesheet' type='text/css'/>

    <link href='https://demos.reytheme.com/tokyo/wp-content/plugins/elementor/assets/css/widget-social-icons.min.css?ver=3.25.9'
          id='widget-social-icons-css'
          media='all'
          rel='stylesheet' type='text/css'/>
    <link href='https://demos.reytheme.com/tokyo/wp-content/plugins/elementor/assets/css/conditionals/apple-webkit.min.css?ver=3.25.9'
          id='e-apple-webkit-css'
          media='all'
          rel='stylesheet' type='text/css'/>
    <link href='https://demos.reytheme.com/tokyo/wp-content/uploads/sites/6/elementor/css/post-6.css?ver=1732303718'
          id='elementor-post-6-css'
          media='all'
          rel='stylesheet' type='text/css'/>
    <link href='https://demos.reytheme.com/tokyo/wp-content/uploads/sites/6/elementor/css/post-649.css?ver=1732303718'
          id='elementor-post-649-css'
          media='all'
          rel='stylesheet' type='text/css'/>
    <link data-media='all' data-minify="1" data-no-optimize="1" data-no-rel='stylesheet'
          data-noptimize="" data-pagespeed-no-defer="" data-pagespeed-no-transform=""
          href='https://demos.reytheme.com/tokyo/wp-content/uploads/sites/6/elementor/css/post-592.css?ver=1732303718'
          id='elementor-post-592-css' media="print"
          onload="this.onload=null;this.media='all';"
          rel="stylesheet" type='text/css'/>
    <noscript>
        <link data-id='elementor-post-592-css' data-media='all' data-minify="1" data-no-optimize="1"
              data-noptimize="" data-pagespeed-no-defer="" data-pagespeed-no-transform=""
              data-type='text/css'
              href='https://demos.reytheme.com/tokyo/wp-content/uploads/sites/6/elementor/css/post-592.css?ver=1732303718'
              rel='stylesheet'/>
    </noscript>
    <script data-rocket-defer
            data-rocket-src="https://demos.reytheme.com/tokyo/wp-includes/js/jquery/jquery.min.js?ver=3.7.1"
            data-rocket-type="text/javascript"
            defer id="jquery-core-js" type="rocketlazyloadscript"></script>
    <script data-minify="1"
            data-rocket-src="https://demos.reytheme.com/tokyo/wp-content/cache/min/6/tokyo/wp-content/plugins/rey-core/assets/js/woocommerce/blockui.js?ver=1722241430"
            data-rocket-type="text/javascript"
            data-wp-strategy="defer"
            defer="defer" id="jquery-blockui-js" type="rocketlazyloadscript"></script>

    <script data-rocket-src="https://demos.reytheme.com/tokyo/wp-content/plugins/woocommerce/assets/js/js-cookie/js.cookie.min.js?ver=2.1.4-wc.9.4.2"
            data-rocket-type="text/javascript"
            data-wp-strategy="defer"
            defer="defer" id="js-cookie-js" type="rocketlazyloadscript"></script>

    <meta content="WordPress 6.7.1" name="generator"/>
    <meta content="WooCommerce 9.4.2" name="generator"/>

    <meta content="en-us" http-equiv="content-language"/>
    <meta content="Marius H" name="author"/>
    <meta content="Copyright (c)2019-2023 Rey Theme. All Rights Reserved." name="copyright"/>
    <meta content="Transform eCommerce Stores Into a Powerhouse Using Rey Theme - World’s Most Exceptionally Intuitive WooCommerce Theme With FREE High-Converting, Captivating Designs"
          name="description"/>
    <meta content="WordPress, WooCommerce, WooCommerce theme, Rey theme, Elementor" name="keywords"/>

    <meta content="Elementor 3.25.9; features: e_font_icon_svg, additional_custom_breakpoints, e_optimized_control_loading; settings: css_print_method-external, google_font-disabled, font_display-auto"
          name="generator">

    <style class='wp-fonts-local' type='text/css'>
        @font-face {
            font-family: Inter;
            font-style: normal;
            font-weight: 300 900;
            font-display: fallback;
            src: url('https://demos.reytheme.com/tokyo/wp-content/plugins/woocommerce/assets/fonts/Inter-VariableFont_slnt,wght.woff2') format('woff2');
            font-stretch: normal;
        }

        @font-face {
            font-family: Cardo;
            font-style: normal;
            font-weight: 400;
            font-display: fallback;
            src: url('https://demos.reytheme.com/tokyo/wp-content/plugins/woocommerce/assets/fonts/cardo_normal_400.woff2') format('woff2');
        }
    </style>

    <!--    start favicon icon #################-->
    <link href="https://demos.reytheme.com/tokyo/wp-content/uploads/sites/6/2019/09/cropped-rey-red-32x32.png"
          rel="icon"
          sizes="32x32"/>
    <link href="https://demos.reytheme.com/tokyo/wp-content/uploads/sites/6/2019/09/cropped-rey-red-192x192.png"
          rel="icon"
          sizes="192x192"/>
    <link href="https://demos.reytheme.com/tokyo/wp-content/uploads/sites/6/2019/09/cropped-rey-red-180x180.png"
          rel="apple-touch-icon"/>
    <meta content="https://demos.reytheme.com/tokyo/wp-content/uploads/sites/6/2019/09/cropped-rey-red-270x270.png"
          name="msapplication-TileImage"/>
    <!--    end  favicon icon #################-->

    <style data-minify="1" data-no-optimize="1" data-noptimize="" data-pagespeed-no-defer=""
           data-pagespeed-no-transform="" id="reycore-inline-styles">:root {
        --rey-container-spacing: 15px;
        --main-gutter-size: 15px;
        --body-bg-color: #ffffff;
        --neutral-hue: 210;
        --blog-columns: 2;
        --sidebar-size: 25%;
        --post-align-wide-size: 25vw;
        --woocommerce-products-gutter: 30px;
        --woocommerce-sidebar-size: 16%;
        --woocommerce-loop-basic-padding: 0px;
        --woocommerce-summary-size: 44%;
        --woocommerce-summary-padding: 0px;
        --star-rating-color: #ff4545;
    }

    h1, .h1, .rey-pageTitle, .rey-postItem-catText {
        font-family: var(--secondary-ff);
        font-weight: 700;
    }

    h2, .h2 {
        font-family: var(--secondary-ff);
        font-weight: 700;
    }

    h3, .h3 {
        font-family: var(--secondary-ff);
        font-weight: 700;
    }

    h4, .h4 {
        font-family: var(--secondary-ff);
        font-weight: 700;
    }

    h5, .h5 {
        font-family: var(--secondary-ff);
        font-weight: 700;
    }

    h6, .h6 {
        font-family: var(--secondary-ff);
        font-weight: 700;
    }

    body.woocommerce ul.products li.product .woocommerce-loop-product__title, .woocommerce ul.products li.product[class*="rey-wc-skin"] .woocommerce-loop-product__title {
        font-family: var(--primary-ff);
        font-weight: 600;
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
            --woocommerce-summary-padding: 0px;
        }
    }

    @media (max-width: 767px) {
        :root {
            --rey-container-spacing: 15px;
            --main-gutter-size: 15px;
            --blog-columns: 1;
            --woocommerce-products-gutter: 10px;
            --woocommerce-summary-padding: 0px;
        }
    }

    @font-face {
        font-family: 'Outfit';
        font-style: normal;
        font-weight: 400;
        font-display: swap;
        src: url(https://demos.reytheme.com/tokyo/wp-content/fonts/outfit/788596d46eeb2990) format('woff');
    }

    @font-face {
        font-family: 'Outfit';
        font-style: normal;
        font-weight: 700;
        font-display: swap;
        src: url(https://demos.reytheme.com/tokyo/wp-content/fonts/outfit/bb1d62c4f59c2690) format('woff');
    }

    @font-face {
        font-family: 'Rey Primary';
        font-style: normal;
        font-weight: 400;
        font-display: swap;
        src: url(https://demos.reytheme.com/tokyo/wp-content/fonts/outfit/788596d46eeb2990) format('woff');
    }

    @font-face {
        font-family: 'Rey Primary';
        font-style: normal;
        font-weight: 700;
        font-display: swap;
        src: url(https://demos.reytheme.com/tokyo/wp-content/fonts/outfit/bb1d62c4f59c2690) format('woff');
    }

    @font-face {
        font-family: 'Rey Secondary';
        font-style: normal;
        font-weight: 400;
        font-display: swap;
        src: url(https://demos.reytheme.com/tokyo/wp-content/fonts/outfit/788596d46eeb2990) format('woff');
    }

    @font-face {
        font-family: 'Rey Secondary';
        font-style: normal;
        font-weight: 700;
        font-display: swap;
        src: url(https://demos.reytheme.com/tokyo/wp-content/fonts/outfit/bb1d62c4f59c2690) format('woff');
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
        --secondary-ff: Outfit, "Helvetica Neue", Helvetica, Arial, sans-serif;
        --body-font-family: var(--primary-ff);
        --body-font-weight: 300;
        --accent-color: #212529;
        --accent-hover-color: #000000;
        --accent-text-color: #fff;
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
    <meta content="WP Rocket 3.17.3"
          data-wpr-features="wpr_delay_js wpr_defer_js wpr_minify_js wpr_lazyload_images wpr_lazyload_iframes wpr_oci wpr_image_dimensions wpr_minify_css wpr_desktop wpr_preload_links"
          name="generator"/>
