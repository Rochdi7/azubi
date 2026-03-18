(self.webpackChunk_N_E = self.webpackChunk_N_E || []).push([
  [95953],
  {
    34616: (e, t, s) => {
      "use strict";
      s.d(t, { AuthorAvatar: () => a });
      var r = s(70207),
        l = s(87223),
        i = s(50018);
      function a(e) {
        let { src: t, alt: s, name: a, size: n = "lg" } = e,
          [o, c] = (0, l.useState)(!1),
          [d, m] = (0, l.useState)(t || "/logo-icon.png"),
          h = {
            sm: { width: 32, height: 32 },
            md: { width: 48, height: 48 },
            lg: { width: 64, height: 64 },
          };
        return (0, r.jsx)(i.default, {
          src: d,
          alt: s,
          width: h[n].width,
          height: h[n].height,
          className: "".concat(
            { sm: "w-8 h-8", md: "w-12 h-12", lg: "w-16 h-16" }[n],
            " rounded-full object-cover",
          ),
          onError: () => {
            o || (c(!0), m("/logo-icon.png"));
          },
        });
      }
    },
    36428: (e, t, s) => {
      "use strict";
      s.d(t, { TableOfContents: () => n });
      var r = s(70207),
        l = s(87223),
        i = s(82110);
      let a = (e) =>
        e.map((e) => {
          let t = "slug" in e && e.slug ? e.slug : (0, i.z9)(e.title);
          return {
            id: e.id,
            slug: t,
            title: e.title,
            level: e.level,
            position: e.position,
            items: e.children ? a(e.children) : e.items ? a(e.items) : void 0,
          };
        });
      function n(e) {
        let { items: t } = e,
          [s, n] = (0, l.useState)(""),
          o = a(t),
          c = (0, l.useRef)(null),
          d = (e) =>
            e.reduce((e, t) => {
              let s = t.items ? d(t.items) : [];
              return [...e, t.slug, ...s];
            }, []);
        (0, l.useEffect)(() => {
          let e = d(o);
          c.current && c.current.disconnect();
          let t = new Map();
          e.forEach((e) => {
            t.set(e, { visible: !1, score: 0 });
          });
          let r = () => {
            let e = 0,
              r = "";
            (t.forEach((t, s) => {
              t.visible && t.score > e && ((e = t.score), (r = s));
            }),
              r && r !== s && n(r));
          };
          return (
            (c.current = new IntersectionObserver(
              (e) => {
                e.forEach((e) => {
                  let s = e.target.id,
                    l = t.get(s) || { visible: !1, score: 0 };
                  if (((l.visible = e.isIntersecting), e.isIntersecting)) {
                    let t = window.innerHeight,
                      s = e.boundingClientRect;
                    l.score =
                      1 - Math.abs(s.top + s.height / 2 - t / 2) / (t / 2);
                  } else l.score = 0;
                  (t.set(s, l), r());
                });
              },
              {
                rootMargin: "-20px 0px -80% 0px",
                threshold: [0, 0.1, 0.2, 0.3, 0.4, 0.5, 0.6, 0.7, 0.8, 0.9, 1],
              },
            )),
            e.forEach((e) => {
              let t = document.getElementById(e);
              if (t) {
                var s;
                null === (s = c.current) || void 0 === s || s.observe(t);
              }
            }),
            () => {
              var e;
              null === (e = c.current) || void 0 === e || e.disconnect();
            }
          );
        }, [o, s]);
        let m = (e, t) => {
            t.preventDefault();
            let s = document.getElementById(e);
            if (s) {
              window.history.pushState(null, "", "#".concat(e));
              let t = s.getBoundingClientRect().top + window.scrollY - 100;
              (window.scrollTo({ top: t, behavior: "smooth" }), n(e));
            }
          },
          h = (e) =>
            (0, r.jsx)("ul", {
              className: "space-y-2",
              children: e.map((e) =>
                (0, r.jsxs)(
                  "li",
                  {
                    className: (0, i.cn)("relative", e.level > 2 ? "ml-4" : ""),
                    children: [
                      (0, r.jsx)("a", {
                        href: "#".concat(e.slug),
                        onClick: (t) => m(e.slug, t),
                        className: (0, i.cn)(
                          "block py-2 px-3 rounded-md text-sm transition-all duration-200",
                          "border-l-2",
                          s === e.slug
                            ? [
                                "border-primary text-primary font-medium bg-primary/5",
                              ]
                            : [
                                "border-border/30 text-muted-foreground hover:border-primary/50 hover:text-foreground hover:bg-primary/5",
                              ],
                        ),
                        children: e.title,
                      }),
                      e.items && e.items.length > 0 && h(e.items),
                    ],
                  },
                  e.id,
                ),
              ),
            });
        return (0, r.jsxs)("div", {
          className: "h-full overflow-auto py-8 pr-2 pl-4 mb-16",
          children: [
            (0, r.jsx)("div", {
              className: "text-lg font-semibold mb-6 pl-3",
              children: "Contents",
            }),
            h(o),
          ],
        });
      }
    },
    47830: (e, t, s) => {
      "use strict";
      s.d(t, { BlogPostHeader: () => u });
      var r = s(70207),
        l = s(10542),
        i = s.n(l),
        a = s(60358),
        n = s(84217),
        o = s(28131),
        c = s(58233),
        d = s(17802),
        m = s(39441),
        h = s(34616);
      function u(e) {
        var t, s, l, u;
        let { post: x } = e,
          g = async () => {
            let e = window.location.href,
              t = x.title || "Azubi Blog";
            if (navigator.share)
              try {
                await navigator.share({ title: t, url: e });
              } catch (e) {}
            else
              try {
                await navigator.clipboard.writeText(e);
              } catch (e) {
                console.error("Could not copy link");
              }
          };
        return (0, r.jsxs)("header", {
          className: "mb-8",
          children: [
            (0, r.jsxs)("div", {
              className: "flex items-center justify-between mb-6",
              children: [
                (0, r.jsxs)(i(), {
                  href: "/blog",
                  className:
                    "inline-flex items-center text-sm text-primary hover:text-primary transition-colors",
                  children: [
                    (0, r.jsx)(a.A, { className: "mr-2 h-4 w-4" }),
                    "Back to Blog",
                  ],
                }),
                (0, r.jsx)(d.E, {
                  variant: "secondary",
                  className: "bg-beige text-primary hover:bg-beige",
                  children: x.category,
                }),
              ],
            }),
            (0, r.jsx)("h1", {
              className: "text-4xl font-bold text-secondary mb-4 leading-tight",
              children: x.title,
            }),
            (0, r.jsx)("p", {
              className: "text-xl text-muted-foreground mb-6 leading-relaxed",
              children: x.description,
            }),
            (0, r.jsxs)("div", {
              className:
                "flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4 text-sm text-muted-foreground mb-6",
              children: [
                (0, r.jsxs)("div", {
                  className:
                    "flex flex-col sm:flex-row sm:items-center gap-3 sm:gap-6",
                  children: [
                    (0, r.jsxs)("div", {
                      className: "flex items-center gap-2",
                      children: [
                        (0, r.jsx)(h.AuthorAvatar, {
                          src:
                            null === (t = x.author) || void 0 === t
                              ? void 0
                              : t.avatar_url,
                          alt:
                            (null === (s = x.author) || void 0 === s
                              ? void 0
                              : s.name) || "Author",
                          name:
                            (null === (l = x.author) || void 0 === l
                              ? void 0
                              : l.name) || "Azubi Team",
                          size: "sm",
                        }),
                        (0, r.jsx)("span", {
                          className: "font-medium text-secondary",
                          children:
                            (null === (u = x.author) || void 0 === u
                              ? void 0
                              : u.name) || "Azubi Team",
                        }),
                      ],
                    }),
                    (0, r.jsxs)("div", {
                      className: "flex items-center gap-3 sm:gap-4",
                      children: [
                        (0, r.jsxs)("div", {
                          className:
                            "flex items-center gap-1 whitespace-nowrap",
                          children: [
                            (0, r.jsx)(n.A, {
                              className: "h-4 w-4 flex-shrink-0",
                            }),
                            (0, r.jsx)("span", {
                              children: x.published_at
                                ? new Date(x.published_at).toLocaleDateString(
                                    "en-US",
                                    {
                                      month: "short",
                                      day: "numeric",
                                      year: "numeric",
                                    },
                                  )
                                : "Draft",
                            }),
                          ],
                        }),
                        (0, r.jsxs)("div", {
                          className:
                            "flex items-center gap-1 whitespace-nowrap",
                          children: [
                            (0, r.jsx)(o.A, {
                              className: "h-4 w-4 flex-shrink-0",
                            }),
                            (0, r.jsxs)("span", {
                              children: [x.read_time, " min read"],
                            }),
                          ],
                        }),
                      ],
                    }),
                  ],
                }),
                (0, r.jsxs)(m.$, {
                  onClick: g,
                  variant: "outline",
                  size: "sm",
                  className: "flex items-center gap-2 self-start sm:self-auto",
                  children: [
                    (0, r.jsx)(c.A, { className: "h-4 w-4" }),
                    "Share",
                  ],
                }),
              ],
            }),
          ],
        });
      }
    },
    66913: (e, t, s) => {
      (Promise.resolve().then(s.t.bind(s, 4463, 23)),
        Promise.resolve().then(s.bind(s, 47830)),
        Promise.resolve().then(s.bind(s, 34616)),
        Promise.resolve().then(s.bind(s, 85862)),
        Promise.resolve().then(s.bind(s, 64883)),
        Promise.resolve().then(s.bind(s, 73849)),
        Promise.resolve().then(s.bind(s, 44026)),
        Promise.resolve().then(s.bind(s, 83401)),
        Promise.resolve().then(s.bind(s, 76906)),
        Promise.resolve().then(s.bind(s, 36428)));
    },
    76906: (e, t, s) => {
      "use strict";
      s.d(t, { RelatedPosts: () => h });
      var r = s(70207),
        l = s(50018),
        i = s(10542),
        a = s.n(i),
        n = s(46031),
        o = s(80187),
        c = s(17802),
        d = s(78809),
        m = s(87223);
      function h(e) {
        let { posts: t } = e,
          [s, i] = (0, m.useState)({});
        return t && 0 !== t.length
          ? (0, r.jsxs)("section", {
              className: "py-12 not-prose",
              children: [
                (0, r.jsx)("h2", {
                  className: "text-2xl font-bold mb-8",
                  children: "Related Articles",
                }),
                (0, r.jsx)("div", {
                  className: "grid gap-6 sm:grid-cols-2 md:grid-cols-3",
                  children: t.map((e) => {
                    let t = s[e.id]
                      ? "".concat(d.nz.DEFAULT, ".webp")
                      : e.image;
                    return (0, r.jsx)(
                      o.Zp,
                      {
                        className:
                          "overflow-hidden h-full flex flex-col transition-all duration-300 hover:shadow-md:shadow-primary/10 border-border/60",
                        children: (0, r.jsxs)(a(), {
                          href: e.slug,
                          className: "block h-full",
                          children: [
                            (0, r.jsxs)("div", {
                              className:
                                "relative aspect-[16/9] w-full overflow-hidden",
                              children: [
                                (0, r.jsx)(l.default, {
                                  src: t,
                                  alt: e.title,
                                  fill: !0,
                                  className:
                                    "object-cover transition-transform duration-300 hover:scale-105",
                                  sizes:
                                    "(max-width: 768px) 100vw, (max-width: 1200px) 50vw, 33vw",
                                  onError: () =>
                                    i((t) => ({ ...t, [e.id]: !0 })),
                                }),
                                (0, r.jsx)("div", {
                                  className: "absolute top-3 left-3",
                                  children: (0, r.jsx)(c.E, {
                                    variant: "secondary",
                                    className:
                                      "px-2 py-1 text-xs font-medium rounded-full",
                                    children: e.category,
                                  }),
                                }),
                              ],
                            }),
                            (0, r.jsx)(o.aR, {
                              className: "p-4 pb-2",
                              children: (0, r.jsx)(o.ZB, {
                                className:
                                  "text-lg line-clamp-2 group-hover:text-primary transition-colors",
                                children: e.title,
                              }),
                            }),
                            (0, r.jsx)(o.wL, {
                              className:
                                "p-4 pt-0 mt-auto flex justify-end items-center",
                              children: (0, r.jsxs)("div", {
                                className:
                                  "text-sm text-primary flex items-center gap-1 font-medium hover:underline",
                                children: [
                                  "Read article ",
                                  (0, r.jsx)(n.A, {
                                    className: "h-3.5 w-3.5 ml-1",
                                  }),
                                ],
                              }),
                            }),
                          ],
                        }),
                      },
                      e.id,
                    );
                  }),
                }),
              ],
            })
          : null;
      }
    },
    85862: (e, t, s) => {
      "use strict";
      s.d(t, { CallToAction: () => o });
      var r = s(70207),
        l = s(10542),
        i = s.n(l),
        a = s(46031),
        n = s(39441);
      function o(e) {
        let {
          title: t = "Ready to Start Your Ausbildung Journey in Germany?",
          description:
            s = "Explore our resources and get personalized guidance to find the perfect Ausbildung program aligned with your career goals.",
          buttonText: l = "Check Eligibility",
          buttonLink: o = "/tools/eligibility-checker",
          secondaryButtonText: c = "Get Expert Help",
          secondaryButtonLink: d = "/consultation",
          showSecondaryButton: m = !0,
        } = e;
        return (0, r.jsxs)("section", {
          className:
            "relative overflow-hidden rounded-xl p-8 sm:p-10 mt-16 mb-8 shadow-lg not-prose",
          style: {
            backgroundImage: "url('/images/arbeitgeber-hero-background.webp')",
            backgroundSize: "cover",
            backgroundPosition: "center bottom",
            backgroundRepeat: "no-repeat",
          },
          children: [
            (0, r.jsx)("div", {
              className: "absolute inset-0 bg-black/30 z-0",
            }),
            (0, r.jsx)("div", {
              className: "absolute inset-0 z-[1]",
              style: {
                background:
                  "\n            radial-gradient(ellipse at center, transparent 0%, transparent 40%, rgba(0,0,0,0.4) 100%),\n            linear-gradient(to top, rgba(0,0,0,0.5) 0%, transparent 30%),\n            linear-gradient(to right, rgba(0,0,0,0.3) 0%, transparent 15%),\n            linear-gradient(to left, rgba(0,0,0,0.3) 0%, transparent 15%)\n          ",
              },
            }),
            (0, r.jsxs)("div", {
              className: "relative z-10 max-w-3xl mx-auto",
              children: [
                (0, r.jsx)("h2", {
                  className:
                    "text-2xl sm:text-3xl font-bold tracking-tight mb-4 text-white",
                  children: t,
                }),
                (0, r.jsx)("p", {
                  className: "text-white/90 mb-8 max-w-2xl",
                  children: s,
                }),
                (0, r.jsxs)("div", {
                  className: "flex flex-col sm:flex-row gap-4",
                  children: [
                    (0, r.jsx)(n.$, {
                      asChild: !0,
                      size: "lg",
                      className: "w-full sm:w-auto rounded-full",
                      children: (0, r.jsxs)(i(), {
                        href: o,
                        children: [
                          l,
                          " ",
                          (0, r.jsx)(a.A, { className: "ml-2 h-4 w-4" }),
                        ],
                      }),
                    }),
                    m &&
                      (0, r.jsx)(n.$, {
                        asChild: !0,
                        size: "lg",
                        variant: "outline",
                        className:
                          "w-full sm:w-auto rounded-full border-2 border-white text-white hover:bg-white hover:text-[#344F1F]",
                        children: (0, r.jsx)(i(), { href: d, children: c }),
                      }),
                  ],
                }),
              ],
            }),
          ],
        });
      }
    },
  },
  (e) => {
    var t = (t) => e((e.s = t));
    (e.O(0, [46593, 36209, 84121, 72076, 77358], () => t(66913)),
      (_N_E = e.O()));
  },
]);
