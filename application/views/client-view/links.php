

<script data-no-defer="1" data-no-optimize="1" data-noptimize id="rey-no-js" type="text/javascript">
    document.body.classList.remove('rey-no-js');
    document.body.classList.add('rey-js');
</script>
<script data-no-defer="1" data-no-optimize="1" data-noptimize="" data-pagespeed-no-defer="" id="rey-instant-js"
        type="text/javascript">
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
})();
</script>






<script data-rocket-type='text/javascript' type="rocketlazyloadscript">
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
<script data-rocket-type='text/javascript' type="rocketlazyloadscript">
    (function () {
			var c = document.body.className;
			c = c.replace(/woocommerce-no-js/, 'woocommerce-js');
			document.body.className = c;
		})();
</script>
<script data-rocket-type='text/javascript' id='reystyles-loaded' type="rocketlazyloadscript">
    window.reyStyles=[["rey-theme","rey-header","rey-logo","rey-header-icon","rey-icon","rey-header-menu","reycore-header-abs-fixed","rey-buttons","reycore-elementor-frontend","reycore-elementor-section-opt-rey","rey-hbg","reycore-widget-newsletter-inline-basic","reycore-widget-cover-panels-style","rey-wc-general"],["rey-theme-ext","reycore-elementor-frontend-deferred","rey-wc-elementor","reycore-elementor-section-deferred-opt","rey-overlay","rey-header-mobile-menu","reycore-close-arrow","rey-header-menu-submenus","rey-header-menu-indicators-circle","reycore-main-menu","reycore-header-search-top","reycore-header-search","reycore-side-panel","rey-wc-header-mini-cart-top","reycore-placeholders","reycore-elementor-el-iconbox","reycore-widget-menu-horizontal-def","reycore-widget-menu-style","reycore-widget-menu-horizontal","reycore-elementor-nav-styles","reycore-elementor-el-image-gallery","rey-gallery","rey-wc-general-deferred","rey-simple-scrollbar","reycore-module-minicart-extra-products","reydemos"]];
</script>
<script data-rocket-type='text/javascript' id='reyscripts-loaded' type="rocketlazyloadscript">
    window.reyScripts=["rey-script","reycore-script","rey-mobile-menu-trigger","rey-main-menu","reycore-elementor-elem-header-navigation","reycore-sidepanel","reycore-header-search","reycore-woocommerce","reycore-wc-header-minicart","reycore-elementor-frontend","reycore-widget-product-grid-scripts","reycore-elementor-elem-lazy-load","reycore-mc4wp","reycore-widget-cover-panels-scripts","rey-tmpl","rey-simple-scrollbar","reycore-module-minicart-extra-products","reydemos","reycore-wc-header-ajax-search"];
</script>

<script data-rocket-type="text/javascript" id="rocket-browser-checker-js-after" type="rocketlazyloadscript">
    /* <![CDATA[ */
"use strict";var _createClass=function(){function defineProperties(target,props){for(var i=0;i<props.length;i++){var descriptor=props[i];descriptor.enumerable=descriptor.enumerable||!1,descriptor.configurable=!0,"value"in descriptor&&(descriptor.writable=!0),Object.defineProperty(target,descriptor.key,descriptor)}}return function(Constructor,protoProps,staticProps){return protoProps&&defineProperties(Constructor.prototype,protoProps),staticProps&&defineProperties(Constructor,staticProps),Constructor}}();function _classCallCheck(instance,Constructor){if(!(instance instanceof Constructor))throw new TypeError("Cannot call a class as a function")}var RocketBrowserCompatibilityChecker=function(){function RocketBrowserCompatibilityChecker(options){_classCallCheck(this,RocketBrowserCompatibilityChecker),this.passiveSupported=!1,this._checkPassiveOption(this),this.options=!!this.passiveSupported&&options}return _createClass(RocketBrowserCompatibilityChecker,[{key:"_checkPassiveOption",value:function(self){try{var options={get passive(){return!(self.passiveSupported=!0)}};window.addEventListener("test",null,options),window.removeEventListener("test",null,options)}catch(err){self.passiveSupported=!1}}},{key:"initRequestIdleCallback",value:function(){!1 in window&&(window.requestIdleCallback=function(cb){var start=Date.now();return setTimeout(function(){cb({didTimeout:!1,timeRemaining:function(){return Math.max(0,50-(Date.now()-start))}})},1)}),!1 in window&&(window.cancelIdleCallback=function(id){return clearTimeout(id)})}},{key:"isDataSaverModeOn",value:function(){return"connection"in navigator&&!0===navigator.connection.saveData}},{key:"supportsLinkPrefetch",value:function(){var elem=document.createElement("link");return elem.relList&&elem.relList.supports&&elem.relList.supports("prefetch")&&window.IntersectionObserver&&"isIntersecting"in IntersectionObserverEntry.prototype}},{key:"isSlowConnection",value:function(){return"connection"in navigator&&"effectiveType"in navigator.connection&&("2g"===navigator.connection.effectiveType||"slow-2g"===navigator.connection.effectiveType)}}]),RocketBrowserCompatibilityChecker}();
/* ]]> */
</script>

<script id="rey-script-js-extra" type="text/javascript">
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
                "src": "https:\/\/demos.reytheme.com\/tokyo\/wp-content\/themes\/rey\/assets\/css\/components\/embed-responsive\/embed-responsive.css",
                "elements": [".rey-postContent p > iframe", ".rey-wcPanel iframe[src*=\"youtu\"]", ".woocommerce-Tabs-panel iframe[src*=\"youtu\"]", ".woocommerce-product-details__short-description iframe[src*=\"youtu\"]"]
            },
            "menu_badges_styles": "https:\/\/demos.reytheme.com\/tokyo\/wp-content\/themes\/rey\/assets\/css\/components\/header-menu\/menu-badges.css"
        },
        "lazy_assets": {
            "a[href^='#offcanvas-']": {
                "styles": {
                    "reycore-offcanvas-panels": "https:\/\/demos.reytheme.com\/tokyo\/wp-content\/plugins\/rey-core\/inc\/modules\/offcanvas-panels\/style.css",
                    "rey-simple-scrollbar": "https:\/\/demos.reytheme.com\/tokyo\/wp-content\/plugins\/rey-core\/assets\/css\/lib\/simple-scrollbar.css"
                },
                "scripts": {
                    "reycore-offcanvas-panels": "https:\/\/demos.reytheme.com\/tokyo\/wp-content\/plugins\/rey-core\/inc\/modules\/offcanvas-panels\/script.js",
                    "animejs": "https:\/\/demos.reytheme.com\/tokyo\/wp-content\/plugins\/rey-core\/assets\/js\/lib\/anime.min.js",
                    "rey-simple-scrollbar": "https:\/\/demos.reytheme.com\/tokyo\/wp-content\/plugins\/rey-core\/assets\/js\/lib\/simple-scrollbar.js",
                    "reycore-elementor-frontend": "https:\/\/demos.reytheme.com\/tokyo\/wp-content\/plugins\/rey-core\/assets\/js\/elementor\/general.js"
                }
            },
            "[data-reymodal],[data-rey-inline-modal]": {
                "styles": {"reycore-modals": "https:\/\/demos.reytheme.com\/tokyo\/wp-content\/plugins\/rey-core\/assets\/css\/general-components\/modals\/modals.css"},
                "scripts": {"reycore-modals": "https:\/\/demos.reytheme.com\/tokyo\/wp-content\/plugins\/rey-core\/assets\/js\/general\/c-modal.js"}
            }
        },
        "log_events": "",
        "debug": "",
        "ajaxurl": "https:\/\/demos.reytheme.com\/tokyo\/wp-admin\/admin-ajax.php",
        "ajax_nonce": "9c6b8cda03",
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
            "r_ajax_nonce": "bab6bea623",
            "r_ajax_url": "\/tokyo\/?reycore-ajax=%%endpoint%%",
            "ajax_queue": true
        },
        "check_for_empty": [".--check-empty", ".rey-mobileNav-footer", ".rey-postFooter"],
        "popv_selector": "0",
        "mobile_click_event": "click",
        "optimized_dom": "1",
        "el_pushback_fallback": "",
        "header_fix_elementor_zindex": "",
        "woocommerce": "1",
        "wc_ajax_url": "\/tokyo\/?wc-ajax=%%endpoint%%",
        "rest_url": "https:\/\/demos.reytheme.com\/tokyo\/wp-json\/rey\/v1",
        "rest_nonce": "11bbd67663",
        "catalog_cols": "4",
        "catalog_mobile_cols": "2",
        "added_to_cart_text": "ADDED TO CART",
        "added_to_cart_text_timeout": "10000",
        "cannot_update_cart": "Couldn't update cart!",
        "site_id": "6",
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
            "infinite_cache": true,
            "acc_animation": 250,
            "acc_scroll_top": false,
            "acc_scroll_top_mobile_only": true
        },
        "currency_symbol": "\u00a3",
        "price_format": "\u00a3{{price}}",
        "total_text": "Total:",
        "price_thousand_separator": ",",
        "price_decimal_separator": ".",
        "price_decimal_precision": "2",
        "header_cart_panel": {
            "apply_coupon_nonce": "8929e2cd7a",
            "remove_coupon_nonce": "013bb351ae",
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
        "svg_icons_path": "https:\/\/demos.reytheme.com\/tokyo?get_svg_icon=%%icon%%",
        "svg_icons": {"close": "<svg role=\"img\" viewbox=\"0 0 110 110\" class=\"rey-icon rey-icon-close\"><g stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\" stroke-linecap=\"square\"><path d=\"M4.79541854,4.29541854 L104.945498,104.445498 L4.79541854,4.29541854 Z\" stroke=\"currentColor\" stroke-width=\"var(--stroke-width, 12px)\"><\/path><path d=\"M4.79541854,104.704581 L104.945498,4.55450209 L4.79541854,104.704581 Z\" stroke=\"currentColor\" stroke-width=\"var(--stroke-width, 12px)\"><\/path><\/g><\/svg>"},
        "checkout": {"error_text": "This information is required."}
    };
    /* ]]> */
</script>
<script data-minify="1"
        data-rocket-src="https://demos.reytheme.com/tokyo/wp-content/cache/min/6/tokyo/wp-content/plugins/rey-core/assets/js/general/c-helpers.js?ver=1728434151"
        data-rocket-type="text/javascript" defer
        id="rey-script-js"
        type="rocketlazyloadscript"></script>
<script data-minify="1"
        data-rocket-src="https://demos.reytheme.com/tokyo/wp-content/cache/min/6/tokyo/wp-content/plugins/rey-core/assets/js/general/c-general.js?ver=1722241430"
        data-rocket-type="text/javascript" defer
        id="reycore-script-js"
        type="rocketlazyloadscript"></script>
<script data-minify="1"
        data-rocket-src="https://demos.reytheme.com/tokyo/wp-content/cache/min/6/tokyo/wp-content/themes/rey/assets/js/components/c-mobile-menu-trigger.js?ver=1722241430"
        data-rocket-type="text/javascript" defer
        id="rey-mobile-menu-trigger-js"
        type="rocketlazyloadscript"></script>
<script data-minify="1"
        data-rocket-src="https://demos.reytheme.com/tokyo/wp-content/cache/min/6/tokyo/wp-content/themes/rey/assets/js/components/c-main-menu.js?ver=1722241430"
        data-rocket-type="text/javascript" defer
        id="rey-main-menu-js"
        type="rocketlazyloadscript"></script>
<script data-minify="1"
        data-rocket-src="https://demos.reytheme.com/tokyo/wp-content/cache/min/6/tokyo/wp-content/plugins/rey-core/assets/js/elementor/elem-header-navigation.js?ver=1722241430"
        data-rocket-type="text/javascript" defer
        id="reycore-elementor-elem-header-navigation-js"
        type="rocketlazyloadscript"></script>
<script data-minify="1"
        data-rocket-src="https://demos.reytheme.com/tokyo/wp-content/cache/min/6/tokyo/wp-content/plugins/rey-core/assets/js/general/c-sidepanel.js?ver=1722241430"
        data-rocket-type="text/javascript" defer
        id="reycore-sidepanel-js"
        type="rocketlazyloadscript"></script>
<script data-minify="1"
        data-rocket-src="https://demos.reytheme.com/tokyo/wp-content/cache/min/6/tokyo/wp-content/plugins/rey-core/assets/js/general/c-header-search.js?ver=1722241430"
        data-rocket-type="text/javascript" defer
        id="reycore-header-search-js"
        type="rocketlazyloadscript"></script>
<script data-minify="1"
        data-rocket-src="https://demos.reytheme.com/tokyo/wp-content/cache/min/6/tokyo/wp-content/plugins/rey-core/assets/js/woocommerce/general.js?ver=1722241430"
        data-rocket-type="text/javascript" defer
        id="reycore-woocommerce-js"
        type="rocketlazyloadscript"></script>
<script data-minify="1"
        data-rocket-src="https://demos.reytheme.com/tokyo/wp-content/cache/min/6/tokyo/wp-content/plugins/rey-core/assets/js/woocommerce/header-minicart.js?ver=1722241430"
        data-rocket-type="text/javascript" defer
        id="reycore-wc-header-minicart-js"
        type="rocketlazyloadscript"></script>
<script id="reycore-elementor-frontend-js-extra" type="text/javascript">
    /* <![CDATA[ */
    var reyElementorFrontendParams = {
        "compatibilities": {"column_video": true, "video_bg_play_on_mobile": true},
        "ajax_url": "https:\/\/demos.reytheme.com\/tokyo\/wp-admin\/admin-ajax.php",
        "ajax_nonce": "bb724597ef"
    };
    /* ]]> */
</script>
<script data-minify="1"
        data-rocket-src="https://demos.reytheme.com/tokyo/wp-content/cache/min/6/tokyo/wp-content/plugins/rey-core/assets/js/elementor/general.js?ver=1722241430"
        data-rocket-type="text/javascript" defer
        id="reycore-elementor-frontend-js"
        type="rocketlazyloadscript"></script>
<script data-minify="1"
        data-rocket-src="https://demos.reytheme.com/tokyo/wp-content/cache/min/6/tokyo/wp-content/plugins/rey-core/inc/elementor/widgets/product-grid/assets/script.js?ver=1722241430"
        data-rocket-type="text/javascript" defer
        id="reycore-widget-product-grid-scripts-js"
        type="rocketlazyloadscript"></script>
<script data-minify="1"
        data-rocket-src="https://demos.reytheme.com/tokyo/wp-content/cache/min/6/tokyo/wp-content/plugins/rey-core/assets/js/elementor/elem-lazy-load.js?ver=1722241430"
        data-rocket-type="text/javascript" defer
        id="reycore-elementor-elem-lazy-load-js"
        type="rocketlazyloadscript"></script>
<script data-minify="1"
        data-rocket-src="https://demos.reytheme.com/tokyo/wp-content/cache/min/6/tokyo/wp-content/plugins/rey-core/inc/compatibility/mailchimp-for-wp/script.js?ver=1722241430"
        data-rocket-type="text/javascript" defer
        id="reycore-mc4wp-js"
        type="rocketlazyloadscript"></script>
<script data-minify="1"
        data-rocket-src="https://demos.reytheme.com/tokyo/wp-content/cache/min/6/tokyo/wp-content/plugins/rey-core/inc/elementor/widgets/cover-panels/assets/script.js?ver=1722241430"
        data-rocket-type="text/javascript" defer
        id="reycore-widget-cover-panels-scripts-js"
        type="rocketlazyloadscript"></script>
<script data-minify="1"
        data-rocket-src="https://demos.reytheme.com/tokyo/wp-content/cache/min/6/tokyo/wp-content/plugins/rey-core/assets/js/lib/c-rey-template.js?ver=1722241430"
        data-rocket-type="text/javascript" defer
        id="rey-tmpl-js"
        type="rocketlazyloadscript"></script>
<script data-minify="1"
        data-rocket-src="https://demos.reytheme.com/tokyo/wp-content/cache/min/6/tokyo/wp-content/plugins/rey-core/assets/js/lib/simple-scrollbar.js?ver=1722241430"
        data-rocket-type="text/javascript" defer
        id="rey-simple-scrollbar-js"
        type="rocketlazyloadscript"></script>
<script data-minify="1"
        data-rocket-src="https://demos.reytheme.com/tokyo/wp-content/cache/min/6/tokyo/wp-content/plugins/rey-core/inc/modules/mini-cart-extra-products/script.js?ver=1722241430"
        data-rocket-type="text/javascript" defer
        id="reycore-module-minicart-extra-products-js"
        type="rocketlazyloadscript"></script>
<script data-minify="1"
        data-rocket-src="https://demos.reytheme.com/tokyo/wp-content/cache/min/6/tokyo/wp-content/plugins/rey-demos/assets/js/script.js?ver=1722241430"
        data-rocket-type="text/javascript" defer
        id="reydemos-js"
        type="rocketlazyloadscript"></script>
<script data-minify="1"
        data-rocket-src="https://demos.reytheme.com/tokyo/wp-content/cache/min/6/tokyo/wp-content/plugins/rey-core/assets/js/woocommerce/header-ajax-search.js?ver=1722241430"
        data-rocket-type="text/javascript" defer
        id="reycore-wc-header-ajax-search-js"
        type="rocketlazyloadscript"></script>
<div id="rey-svg-holder" style="display:none !important">
    <svg aria-hidden="true" class="rey-icon rey-icon-close " data-icon-id="close" id="rey-icon-close-675fb7dba54c3"
         role="img" viewbox="0 0 110 110">
        <g fill="none" fill-rule="evenodd" stroke="none" stroke-linecap="square" stroke-width="1">
            <path d="M4.79541854,4.29541854 L104.945498,104.445498 L4.79541854,4.29541854 Z" stroke="currentColor"
                  stroke-width="var(--stroke-width, 12px)"></path>
            <path d="M4.79541854,104.704581 L104.945498,4.55450209 L4.79541854,104.704581 Z" stroke="currentColor"
                  stroke-width="var(--stroke-width, 12px)"></path>
        </g>
    </svg>
    <svg aria-hidden="true" class="rey-icon rey-icon-arrow-classic " data-icon-id="arrow-classic"
         id="rey-icon-arrow-classic-675fb7dba54d2"
         role="img" viewbox="0 0 16 16">
        <polygon fill="var(--icon-fill, currentColor)"
                 points="8 0 6.6 1.4 12.2 7 0 7 0 9 12.2 9 6.6 14.6 8 16 16 8"></polygon>
    </svg>
</div>

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
<script async data-no-minify="1"
        src="https://demos.reytheme.com/tokyo/wp-content/plugins/wp-rocket/assets/js/lazyload/17.8.3/lazyload.min.js"></script>
<script>var rocket_beacon_data = {
    "ajax_url": "https:\/\/demos.reytheme.com\/tokyo\/wp-admin\/admin-ajax.php",
    "nonce": "5f2f4bee59",
    "url": "https:\/\/demos.reytheme.com\/tokyo",
    "is_mobile": false,
    "width_threshold": 1600,
    "height_threshold": 700,
    "delay": 500,
    "debug": null,
    "status": {"atf": true, "lrc": false},
    "elements": "img, video, picture, p, main, div, li, svg, section, header, span",
    "lrc_threshold": 1800
}</script>
<script async
        data-name="wpr-wpr-beacon"
        src='https://demos.reytheme.com/tokyo/wp-content/plugins/wp-rocket/assets/js/wpr-beacon.min.js'></script>
<script>class RocketElementorAnimation {
    constructor() {
        this.deviceMode = document.createElement("span"), this.deviceMode.id = "elementor-device-mode-wpr", this.deviceMode.setAttribute("class", "elementor-screen-only"), document.body.appendChild(this.deviceMode)
    }

    static run() {
        const t = new RocketElementorAnimation;
        requestAnimationFrame(t._detectAnimations.bind(t))
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
}

document.addEventListener("DOMContentLoaded", RocketElementorAnimation.run);</script>
