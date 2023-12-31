/* Copyright 2016 DotControl */ ! function () {
    "use strict";

    function e() {
        var e = window.pageYOffset || document.documentElement.scrollTop || document.body.scrollTop;
        e += window.innerHeight;
        for (var t = 0; t < w.length; t++) {
            var i = w[t],
                n = $(i).offset().top;
            p || y ? i.style.letterSpacing = "0.3em" : e >= n && i.classList.add("animated")
        }
    }

    function t() {
        g = window.pageYOffset, c && !s && i(), f && n()
    }

    function i() {
        var e = .08,
            t = (1e3 - e * (g / 4)) / 1e3;
        c.style.transform = "translateY(-" + e * g + "px) scale(" + t + ")", l.style.transform = "translateY(-" + e * g + "px) scale(" + t + ")"
    }

    function n() {
        var e = -200 / m.height;
        f.style.transform = "translateY(" + e * g + "px)"
    }

    function o() {
        Object.defineProperties(m, {
            height: {
                get: function () {
                    return Math.max(u.scrollHeight, u.offsetHeight, d.clientHeight, d.scrollHeight, d.offsetHeight)
                },
                set: function (e) {
                    return e
                }
            },
            width: {
                get: function () {
                    return Math.max(u.scrollWidth, u.offsetWidth, d.clientWidth, d.scrollWidth, d.offsetWidth)
                },
                set: function (e) {
                    return e
                }
            }
        }), Object.defineProperties(h, {
            height: {
                get: function () {
                    return window.innerHeight
                },
                set: function (e) {
                    return e
                }
            },
            width: {
                get: function () {
                    return window.innerWidth
                },
                set: function (e) {
                    return e
                }
            }
        }), c && Object.defineProperties(v, {
            height: {
                get: function () {
                    return Math.max(c.clientHeight, c.offsetHeight, c.scrollHeight)
                },
                set: function (e) {
                    return e
                }
            },
            width: {
                get: function () {
                    return Math.max(c.clientWidth, c.offsetWidth, c.scrollWidth)
                },
                set: function (e) {
                    return e
                }
            }
        })
    }

    function r() {
        var e = window.navigator.userAgent,
            t = e.indexOf("MSIE ");
        if (t > 0) return parseInt(e.substring(t + 5, e.indexOf(".", t)), 10);
        var i = e.indexOf("Trident/");
        if (i > 0) {
            var n = e.indexOf("rv:");
            return parseInt(e.substring(n + 3, e.indexOf(".", n)), 10)
        }
        var o = e.indexOf("Edge/");
        return o > 0 && parseInt(e.substring(o + 5, e.indexOf(".", o)), 10)
    }

    function a() {
        return navigator.userAgent.search("Safari") >= 0 && navigator.userAgent.search("Chrome") < 0
    }
    var s = /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent),
        u = document.body,
        d = document.documentElement,
        c = document.querySelector(".mars .mars__planet"),
        l = document.querySelector(".mars .mars__black"),
        f = document.querySelector(".stars"),
        m = {},
        h = {},
        v = {},
        g = 0,
        p = r(),
        y = a(),
        w = document.querySelectorAll(".block__title");
    s || o(), window.addEventListener("scroll", function () {
        requestAnimationFrame(t), requestAnimationFrame(e)
    }, !1), t(), e(), p && (d.style.overflow = "hidden", d.style.height = "100%", u.style.overflowX = "hidden", u.style.overflowY = "auto", u.style.height = "100%")
}(),
function () {
    "use strict";

    function e(e, t, i) {
        var n = "";
        if (i) {
            var o = new Date;
            o.setTime(o.getTime() + 24 * i * 60 * 60 * 1e3), n = "; expires=" + o.toGMTString()
        }
        document.cookie = e + "=" + t + n + "; path=/"
    }

    function t(e) {
        for (var t = e + "=", i = document.cookie.split(";"), n = 0; n < i.length; n++) {
            for (var o = i[n];
                " " === o.charAt(0);) o = o.substring(1, o.length);
            if (0 === o.indexOf(t)) return o.substring(t.length, o.length)
        }
        return null
    }
    var i = document.querySelector(".cookie"),
        n = i.querySelector(".cookie__link"),
        o = t("cookiePolicy");
    o || (i.classList.remove("cookie--hidden"), n.addEventListener("click", function (t) {
        t.preventDefault(), e("cookiePolicy", "accepted", 30), i.classList.add("cookie--hidden")
    }, !1))
}(), $(document).ready(function () {
        "use strict";
        $("body").Effects()
    }),
    function (e) {
        e.Effects || (e.Effects = {}), e.Effects = function (t, i) {
            var n = this;
            n._this = e(t), n._this.data("Effects", n), n.init = function () {
                n.myFunctionParam = i, n.options = e.extend({}, e.Effects.defaultOptions, n.myFunctionParam), n._this[0].classList.add("ready");
                var t = document.body;
                html = document.documentElement, html.style.overflow = "hidden", html.style.height = "100%", t.style.overflowX = "hidden", t.style.overflowY = "auto", t.style.height = "100%", e("html, body").scrollTop(1), html.style = "", t.style = "", n.options.isMobile = /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent), e.each(n._this.find(".visual canvas"), function (t, i) {
                    setTimeout(function () {
                        var t = window.location.href;
                        t = t.substring(0, t.lastIndexOf("/") + 1), t += e(i).attr("data-imgsrc"), n.image.effect(t, e(i).attr("id"), e(i).parent())
                    }, 2e3)
                }), n.options.isMobile || n.audio.init(), n.astroid.init()
            }, n.image = {
                effect: function (e, t) {
                    var i, o, r, a = document.getElementById(t),
                        s = a.getContext("2d"),
                        u = new Image,
                        d = 0,
                        c = 30,
                        l = .01,
                        f = window.requestAnimationFrame || window.mozRequestAnimationFrame || window.webkitRequestAnimationFrame || window.msRequestAnimationFrame;
                    window.requestAnimationFrame = f, u.crossOrigin = "Anonymous", u.src = e, u.onload = function () {
                        m(), h()
                    };
                    var m = function () {
                            a.width = i = u.width, l = i * l, a.height = o = ~~(u.height * (i - 2 * l) / u.width)
                        }.bind(this),
                        h = function () {
                            d % c && !(d > c) || (q(), s.drawImage(u, 0, 0, u.width, u.height, l, 0, i - 2 * l, o), r = s.getImageData(0, 0, i, o), s.putImageData(r, 0, 0), d = 0), d === b(25, c) && (r = y(r, 1, v), s.putImageData(r, 0, 0), w(i, o, b(3, 10), g), w(i, o, b(3, 30), p)), d++, n.options.isMobile || window.requestAnimationFrame(h)
                        },
                        v = function (e, t) {
                            t[e] = t[e + 16]
                        },
                        g = function (e, t, n) {
                            if (e > 3) {
                                var o = 1 + b(0, 5);
                                s.drawImage(a, t, n, t, o, b(0, t), n, b(t, i), o)
                            }
                        },
                        p = function (e, t, n) {
                            var o = 1 + b(1, 10);
                            s.drawImage(a, l, n, i - 2 * l, o, 1 + b(0, 2 * l), n + b(0, 10), i - l, o)
                        },
                        y = function (e, t, i) {
                            var n = e.data || [];
                            if (t = 4 * t || 4, n.length) {
                                for (var o = 0; o < n.length; o += t) i && i(o, n);
                                return e
                            }
                            return e
                        },
                        w = function (e, t, i, n) {
                            for (var o = 0; o < (i || 10); o++) {
                                var r = Math.random() * e + 1,
                                    a = Math.random() * t + 1;
                                n(o, r, a)
                            }
                        },
                        b = function (e, t) {
                            return ~~(Math.random() * (t - e) + e)
                        },
                        q = function () {
                            s.clearRect(0, 0, i, o)
                        }
                }
            }, n.audio = {
                init: function () {
                    n.$audio = n._this.find("audio"), n.audio.equalizer.init(), n.window.visibility.set(), document.addEventListener(n.options.visibilityChange, n.audio.tabChange, !1)
                },
                equalizer: {
                    init: function () {
                        n.$equalizer = n._this.find(".equalizer"), n.audio.equalizer.events.attachEvents()
                    },
                    events: {
                        attachEvents: function () {
                            n.$equalizer.off("click.equalizer").on("click.equalizer", n.audio.equalizer.events.click)
                        },
                        click: function () {
                            n.$equalizer[0].classList.contains("equalizer--paused") ? n.audio.equalizer.state.playing() : n.audio.equalizer.state.paused()
                        }
                    },
                    state: {
                        playing: function () {
                            n.$equalizer[0].classList.remove("equalizer--paused"), n.audio.play()
                        },
                        paused: function () {
                            n.$equalizer[0].classList.add("equalizer--paused"), n.audio.stop()
                        }
                    }
                },
                tabChange: function () {
                    document[n.options.hidden] ? n.audio.stop() : n.$equalizer[0].classList.contains("equalizer--paused") || n.audio.play()
                },
                play: function () {
                    n.$audio[0].play()
                },
                stop: function () {
                    n.$audio[0].pause()
                }
            }, n.astroid = {
                init: function () {
                    n.$astroid = n._this.find(".astroid"), n.astroid.start()
                },
                start: function () {
                    var e = 8e3;
                    setInterval(function () {
                        e = Math.floor(5e3 * Math.random()) + 5e3, n.astroid.animate()
                    }, e)
                },
                animate: function () {
                    n.$astroid[0].classList.add("astroid--move"), setTimeout(function () {
                        n.$astroid[0].classList.remove("astroid--move")
                    }, 500)
                }
            }, n.content = {}, n.window = {
                visibility: {
                    set: function () {
                        n.options.hidden, n.options.visibilityChange, "undefined" != typeof document.hidden ? (n.options.hidden = "hidden", n.options.visibilityChange = "visibilitychange") : "undefined" != typeof document.msHidden ? (n.options.hidden = "msHidden", n.options.visibilityChange = "msvisibilitychange") : "undefined" != typeof document.webkitHidden && (n.options.hidden = "webkitHidden", n.options.visibilityChange = "webkitvisibilitychange")
                    }
                }
            }, n.init()
        }, e.Effects.defaultOptions = {}, e.fn.Effects = function (t, i) {
            return this.each(function () {
                new e.Effects(this, t, i)
            })
        }
    }($),
    function () {
        "use strict";

        function e() {
            d = c.pageYOffset, d <= 900 ? (s.classList.add("toggled"), u && clearTimeout(u)) : (s.classList.add("toggled"), u && clearTimeout(u), u = setTimeout(function () {
                s.classList.remove("toggled"), u = null
            }, 1e3))
        }

        function t() {
            var e = window.pageYOffset || document.documentElement.scrollTop || document.body.scrollTop,
                t = {
                    opacity: 1 - .002 * e,
                    header: 0 + .05 * e,
                    scroller: 0 + .1 * e
                };
            o.style.opacity = t.opacity, a.style.opacity = t.opacity, o.style.transform = "translateY(-" + t.header + "rem)", a.style.transform = "translateY(-" + t.scroller + "rem)"
        }

        function i() {
            var e = window.navigator.userAgent,
                t = e.indexOf("MSIE ");
            if (t > 0) return parseInt(e.substring(t + 5, e.indexOf(".", t)), 10);
            var i = e.indexOf("Trident/");
            if (i > 0) {
                var n = e.indexOf("rv:");
                return parseInt(e.substring(n + 3, e.indexOf(".", n)), 10)
            }
            var o = e.indexOf("Edge/");
            return o > 0 && parseInt(e.substring(o + 5, e.indexOf(".", o)), 10)
        }

        function n() {
            return navigator.userAgent.search("Safari") >= 0 && navigator.userAgent.search("Chrome") < 0
        }
        var o = document.querySelector(".header__content"),
            r = document.getElementById("intro"),
            a = document.querySelector(".button--mouse"),
            s = document.querySelector(".navigation__list"),
            u = null,
            d = 0,
            c = window,
            l = i(),
            f = n(),
            m = /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent),
            h = document.querySelector(".mars");
        o && (l || f || m ? (h.style.zIndex = "-1", s.style.display = "none", document.querySelector(".header").style.position = "relative") : (r.style.marginTop = "100vh", c.addEventListener("scroll", t))), s && (e(), c.addEventListener("scroll", e))
    }(),
    function () {
        "use strict";

        function e() {
            s.requestAnimationFrame(t)
        }

        function t() {
            var e = s.pageYOffset || document.documentElement.scrollTop || document.body.scrollTop;
            if (f > 0)
                for (var t = 0; t < f; t++) {
                    var i = e / 7;
                    c[t].classList.contains("visual--fast") ? c[t].style.transform = "translateY(-" + 2.75 * i + "px)" : c[t].style.transform = "translateY(-" + i + "px)"
                }
            if (m > 0)
                for (var n = 0; n < m; n++) l[n].style.transform = "translateY(" + e / 7 + "px)"
        }

        function i() {
            var e = window.navigator.userAgent,
                t = e.indexOf("MSIE ");
            if (t > 0) return parseInt(e.substring(t + 5, e.indexOf(".", t)), 10);
            var i = e.indexOf("Trident/");
            if (i > 0) {
                var n = e.indexOf("rv:");
                return parseInt(e.substring(n + 3, e.indexOf(".", n)), 10)
            }
            var o = e.indexOf("Edge/");
            return o > 0 && parseInt(e.substring(o + 5, e.indexOf(".", o)), 10)
        }

        function n() {
            return navigator.userAgent.search("Safari") >= 0 && navigator.userAgent.search("Chrome") < 0
        }
        var o = document.querySelector(".wrapper"),
            r = /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent),
            a = i(),
            s = window,
            u = n(),
            d = document.body.offsetWidth;
        if (!a && !u && d >= 1200) {
            if (o && !r) {
                var c = o.querySelectorAll(".visual--up"),
                    l = o.querySelectorAll(".visual--down"),
                    f = c.length,
                    m = l.length;
                if (!c || !l) return;
                (f > 0 || m > 0) && s.addEventListener("scroll", e, !1)
            }
        } else
            for (var h = document.querySelectorAll(".visual"), v = 0; v < h.length; v++) h[v].classList.remove("visual--up"), h[v].classList.remove("visual--down"), h[v].classList.remove("visual--fast");
        window.addEventListener("resize", function () {
            if (d = document.body.offsetWidth, d < 1200) {
                s.removeEventListener("scroll", e, !1);
                for (var t = document.querySelectorAll(".visual"), i = 0; i < t.length; i++) t[i].style = null, t[i].classList.remove("visual--up"), t[i].classList.remove("visual--down"), t[i].classList.remove("visual--fast")
            }
        }, !1)
    }(),
    function () {
        "use strict";

        function e() {
            i = document.querySelectorAll(".section"), n = o.querySelectorAll("li"), window.addEventListener("scroll", t, !1)
        }

        function t() {
            var e = r.pageYOffset + 300,
                t = !1;
            t = void 0 === n[a + 1], t === !1 && e >= i[a + 1].offsetTop ? (n[a].classList.remove("navigation__item--active"), a++, n[a].classList.add("navigation__item--active")) : e < i[a].offsetTop && e > i[0].offsetTop && (n[a].classList.remove("navigation__item--active"), a--, n[a].classList.add("navigation__item--active"))
        }
        $("a[href*=\\#]:not([href=\\#])").click(function () {
            if (location.pathname.replace(/^\//, "") === this.pathname.replace(/^\//, "") && location.hostname === this.hostname) {
                var e = $(this.hash);
                if (e = e.length ? e : $("[name=" + this.hash.slice(1) + "]"), e.length) return $("html,body").animate({
                    scrollTop: e.offset().top
                }, 1e3), !1
            }
        });
        var i, n, o = document.querySelector(".navigation"),
            r = window,
            a = 0;
        o && e()
    }();
