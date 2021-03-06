var delaware = delaware || {};
! function(e) {
    "use strict";
    e(function() {
        var i = e("body"),
            a = e(window),
            t = e("#masthead"),
            n = e("#primary-mobile-nav"),
            s = e(".post-type-archive-project .content-area .list-project");
        a.scroll(function() {
            e(window).scrollTop() > e(window).height() ? e("#scroll-top").addClass("show-scroll") : e("#scroll-top").removeClass("show-scroll")
        }), e("#scroll-top").on("click", function(i) {
            i.preventDefault(), e("html, body").stop().animate({
                scrollTop: 0
            }, 1200)
        }), a.on("resize", function() {
            a.on("scroll", function() {
                var n = e(".site-contact").outerHeight(!0),
                    s = e(".topbar").outerHeight(!0),
                    o = n + s;
                a.width() <= 1200 && (o = i.hasClass("hide-topbar-mobile") ? 0 : s), a.scrollTop() > o ? (t.addClass("minimized"), e("#fh-header-minimized").addClass("minimized")) : (t.removeClass("minimized"), e("#fh-header-minimized").removeClass("minimized"))
            });
            var n;
            if (a.width() < 1200) {
                n = t;
                var s = e(".header-transparent .site-header"),
                    o = e(".topbar").outerHeight(!0);
                i.hasClass("hide-topbar-mobile") && (o = 0), i.hasClass("admin-bar") ? s.css({
                    top: o + 42
                }) : s.css({
                    top: o + 10
                })
            } else n = e(".site-menu").outerHeight(!0);
            i.hasClass("header-sticky") && e("#fh-header-minimized").height(n)
        }).trigger("resize"), e("ul.filter").on("click", "li", function(i) {
            i.preventDefault();
            var a = e(this),
                t = a.attr("data-option-value");
            a.hasClass("active") || (a.closest(".filters-dropdown").next(".list-project").isotope({
                filter: t
            }), a.addClass("active").siblings(".active").removeClass("active"))
        }),
        
        e("#off-canvas-layer").on("click", function(e) {
                e.preventDefault(), i.removeClass("display-mobile-menu")
            }), i.on("click", ".navbar-toggle .navbars-icon", function(a) {
                a.preventDefault(), e(this).toggleClass("selected-mobile"), i.toggleClass("display-mobile-menu")
            }), e("ul.menu li.menu-item-has-children a").addClass("dropdown-toggle"),
            function() {
                n.find(".menu .menu-item-has-children").prepend('<span class="toggle-children "><i class="fa fa-angle-right" aria-hidden="true"></i></span>'), n.find(".menu .menu-item-has-children").each(function() {
                    var i = "";
                    e(this).children("a").hasClass("dropdown-toggle") && (i = e(this).children(".dropdown-toggle").html()), e(this).children("ul").prepend('<li class="menu-parent-items">' + i + "</li>"), e(this).children("ul").prepend('<li class="menu-back">' + delaware.delaware_back + "</li>")
                }), n.find(".menu .menu-item-has-children").on("click", ".toggle-children", function(i) {
                    i.preventDefault(), e(this).parent("li").addClass("over-menu"), e(this).parents(".menu").addClass("over-submenu")
                }), n.find(".menu .menu-item-has-children").on("click", ".menu-back", function(i) {
                    i.preventDefault(), e(this).closest("ul").closest("li").removeClass("over-menu"), n.find(".menu .menu-item-has-children").hasClass("over-menu") || n.find(".menu").removeClass("over-submenu")
                }), n.on("click", ".close-canvas-mobile-panel", function(e) {
                    e.preventDefault(), i.toggleClass("display-mobile-menu")
                })
            }(),
            function() {
                var a = e("#modal"),
                    t = a.find(".modal-body");
                e(".woocommerce").on("click", ".product-quick-view", function(n) {
                    n.preventDefault(), a.fadeIn().addClass("in"), t.html('<div class="ajax-loading"><i class="fa fa-spin fa-spinner"></i></div>'), i.addClass("modal-open"), e.get(e(this).attr("data-href"), function(i) {
                        if (i) {
                            var n = e(i).find(".product-details");
                            t.html(n);
                            var s = a.find(".modal-content").height(),
                                o = (e(window).height() - s) / 2;
                            o < 0 && (o = 0), a.find(".modal-content").css({
                                "margin-top": o
                            })
                        }
                    })
                }), a.on("click", "button.close", function(t) {
                    t.preventDefault(), a.fadeOut(500, function() {
                        i.removeClass("modal-open"), a.removeClass("in"), e(window).trigger("resize")
                    })
                })
            }()
    })
}(jQuery);