/*
 slick-animation.js

 Version: 0.3.3 Beta
 Author: Marvin HÃ¼bner
 Docs: https://github.com/marvinhuebner/slick-animation
 Repo: https://github.com/marvinhuebner/slick-animation
 */
!function (a) {
    a.fn.slickAnimation = function () {
        function n(a, n, t, i, o) { o = "undefined" != typeof o ? o : !1, 1 == n.opacity ? (a.addClass(t), a.addClass(i)) : (a.removeClass(t), a.removeClass(i)), o && a.css(n) } function t(a, n) { return a ? 1e3 * a + 1e3 : n ? 1e3 * n : a || n ? 1e3 * a + 1e3 * n : 1e3 } function i(a, n, t) {
            var i = ["animation-" + n, "-webkit-animation-" + n, "-moz-animation-" + n, "-o-animation-" + n, "-ms-animation-" + n], o = {}
            i.forEach(function (a) { o[a] = t + "s" }), a.css(o)
        } var o = a(this), e = o.find(".slick-list .slick-track > div"), s = o.find('[data-slick-index="0"]'), r = "animated", c = { opacity: "1" }, d = { opacity: "0" }
        return e.each(function () {
            var e = a(this)
            e.find("[data-animation-in]").each(function () {
                var u = a(this)
                u.css(d)
                var l = u.attr("data-animation-in"), f = u.attr("data-animation-out"), h = u.attr("data-delay-in"), m = u.attr("data-duration-in"), y = u.attr("data-delay-out"), C = u.attr("data-duration-out")
                f ? (s.length > 0 && e.hasClass("slick-current") && (n(u, c, l, r, !0), h && i(u, "delay", h), m && i(u, "duration", m), setTimeout(function () { n(u, d, l, r), n(u, c, f, r), y && i(u, "delay", y), C && i(u, "duration", C) }, t(h, m))), o.on("afterChange", function (a, o, s) { e.hasClass("slick-current") && (n(u, c, l, r, !0), h && i(u, "delay", h), m && i(u, "duration", m), setTimeout(function () { n(u, d, l, r), n(u, c, f, r), y && i(u, "delay", y), C && i(u, "duration", C) }, t(h, m))) }), o.on("beforeChange", function (a, t, i) { n(u, d, f, r, !0) })) : (s.length > 0 && e.hasClass("slick-current") && (n(u, c, l, r, !0), h && i(u, "delay", h), m && i(u, "duration", m)), o.on("afterChange", function (a, t, o) { e.hasClass("slick-current") && (n(u, c, l, r, !0), h && i(u, "delay", h), m && i(u, "duration", m)) }), o.on("beforeChange", function (a, t, i) { n(u, d, l, r, !0) }))
            })
        }), this
    }
}(jQuery)