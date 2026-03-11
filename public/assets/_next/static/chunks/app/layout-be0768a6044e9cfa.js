(self.webpackChunk_N_E = self.webpackChunk_N_E || []).push([
  [7177],
  {
    2328: (e, t, r) => {
      "use strict";
      (r.d(t, { CookieConsentBannerEn: () => a }), r(70207));
      var n = r(87223),
        o = (r(54459), r(45748), r(30945), r(65915), r(39441), r(13577)),
        s = r(10542),
        i = r(18051);
      function a() {
        let { showBanner: e, acceptAll: t, rejectAll: r } = (0, o.uC)(),
          [s, a] = (0, n.useState)(!1),
          l = (0, i.usePathname)(),
          c = null == l ? void 0 : l.startsWith("/admin");
        return ((0, n.useEffect)(() => {}, [e, !1, c]), null);
      }
    },
    13491: () => {},
    19997: (e, t, r) => {
      "use strict";
      r.d(t, { Providers: () => a });
      var n = r(70207),
        o = r(24015),
        s = r(16365),
        i = r(87223);
      function a(e) {
        let { children: t } = e,
          r = (0, i.useRef)(null);
        return (
          r.current ||
            (r.current = new o.E({
              defaultOptions: {
                queries: { staleTime: 6e4, refetchOnWindowFocus: !1 },
              },
            })),
          (0, n.jsx)(s.Ht, { client: r.current, children: t })
        );
      }
    },
    35175: (e, t, r) => {
      (Promise.resolve().then(r.t.bind(r, 4463, 23)),
        Promise.resolve().then(r.t.bind(r, 34337, 23)),
        Promise.resolve().then(r.t.bind(r, 13491, 23)),
        Promise.resolve().then(r.bind(r, 19997)),
        Promise.resolve().then(r.bind(r, 47561)),
        Promise.resolve().then(r.bind(r, 95290)),
        Promise.resolve().then(r.bind(r, 70129)),
        Promise.resolve().then(r.bind(r, 53681)),
        Promise.resolve().then(r.bind(r, 2328)),
        Promise.resolve().then(r.bind(r, 92371)),
        Promise.resolve().then(r.bind(r, 13577)));
    },
    47561: (e, t, r) => {
      "use strict";
      r.d(t, {
        ConsentAwareAnalytics: () => a,
        ConsentAwareClarity: () => c,
        ConsentAwareDataFast: () => l,
      });
      var n = r(70207),
        o = r(87223),
        s = r(4286),
        i = r(13577);
      function a(e) {
        let { gaTrackingId: t } = e,
          r = (0, i.vP)();
        return ((0, o.useEffect)(() => {
          let e = () => {
              window.gtag
                ? window.gtag("config", t, {
                    page_path: window.location.pathname,
                    transport_type: "beacon",
                    debug_mode: !1,
                  })
                : window.location.reload();
            },
            r = () => {
              ([
                "_ga",
                "_ga_".concat(t.replace("G-", "")),
                "_gid",
                "_gat",
                "_gtag",
                "_gcl_au",
              ].forEach((e) => {
                ((document.cookie = "".concat(
                  e,
                  "=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/;",
                )),
                  (document.cookie = "".concat(
                    e,
                    "=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/; domain=.goausbildung.com;",
                  )));
              }),
                window.gtag &&
                  window.gtag("consent", "update", {
                    analytics_storage: "denied",
                  }));
            };
          return (
            window.addEventListener("cookieConsentAnalyticsEnabled", e),
            window.addEventListener("cookieConsentAnalyticsDisabled", r),
            () => {
              (window.removeEventListener("cookieConsentAnalyticsEnabled", e),
                window.removeEventListener(
                  "cookieConsentAnalyticsDisabled",
                  r,
                ));
            }
          );
        }, [t]),
        r)
          ? (0, n.jsxs)(n.Fragment, {
              children: [
                (0, n.jsx)(s.default, {
                  src: "https://www.googletagmanager.com/gtag/js?id=".concat(t),
                  strategy: "afterInteractive",
                }),
                (0, n.jsx)(s.default, {
                  id: "google-analytics",
                  strategy: "afterInteractive",
                  children:
                    "\n          try {\n            window.dataLayer = window.dataLayer || [];\n            function gtag(){dataLayer.push(arguments);}\n            gtag('js', new Date());\n            gtag('config', '".concat(
                      t,
                      "', {\n              page_path: window.location.pathname,\n              transport_type: 'beacon',\n              debug_mode: false\n            });\n            \n            // Set initial consent state\n            gtag('consent', 'default', {\n              'analytics_storage': 'granted'\n            });\n          } catch (error) {\n            // Silently handle analytics errors (likely ad blocker)\n            console.warn('Analytics blocked or failed to load');\n          }\n        ",
                    ),
                }),
              ],
            })
          : null;
      }
      function l() {
        return (0, i.vP)()
          ? (0, n.jsx)(s.default, {
              id: "datafast-analytics",
              src: "https://datafa.st/js/script.js",
              "data-website-id": "67ff61886ee3717bf87bc569",
              "data-domain": "goausbildung.com",
              defer: !0,
            })
          : null;
      }
      function c() {
        let e = (0, i.vP)();
        return ((0, o.useEffect)(() => {
          let e = () => {
              ([
                "_clck",
                "_clsk",
                "CLID",
                "ANONCHK",
                "MR",
                "MUID",
                "SM",
              ].forEach((e) => {
                ((document.cookie = "".concat(
                  e,
                  "=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/;",
                )),
                  (document.cookie = "".concat(
                    e,
                    "=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/; domain=.goausbildung.com;",
                  )));
              }),
                window.clarity && delete window.clarity);
            },
            t = () => {
              window.clarity || window.location.reload();
            };
          return (
            window.addEventListener("cookieConsentAnalyticsEnabled", t),
            window.addEventListener("cookieConsentAnalyticsDisabled", e),
            () => {
              (window.removeEventListener("cookieConsentAnalyticsEnabled", t),
                window.removeEventListener(
                  "cookieConsentAnalyticsDisabled",
                  e,
                ));
            }
          );
        }, []),
        e)
          ? (0, n.jsx)(s.default, {
              id: "microsoft-clarity",
              strategy: "afterInteractive",
              children:
                '\n        try {\n          (function(c,l,a,r,i,t,y){\n            c[a]=c[a]||function(){(c[a].q=c[a].q||[]).push(arguments)};\n            t=l.createElement(r);t.async=1;t.src="https://www.clarity.ms/tag/"+i;\n            y=l.getElementsByTagName(r)[0];y.parentNode.insertBefore(t,y);\n          })(window, document, "clarity", "script", "u9mo6gjj2k");\n        } catch (error) {\n          console.warn(\'Microsoft Clarity blocked or failed to load\');\n        }\n      ',
            })
          : null;
      }
    },
    53681: (e, t, r) => {
      "use strict";
      r.d(t, { HtmlLangSetter: () => s });
      var n = r(18051),
        o = r(87223);
      function s() {
        let e = (0, n.usePathname)();
        return (
          (0, o.useEffect)(() => {
            let t = e.startsWith("/de");
            document.documentElement.lang = t ? "de" : "en";
          }, [e]),
          null
        );
      }
    },
    70129: (e, t, r) => {
      "use strict";
      r.d(t, { ClientLayoutWrapper: () => K });
      var n = r(70207),
        o = r(18051),
        s = r(87223),
        i = r(54573),
        a = r(43431),
        l = r(80750),
        c = r(33710),
        d = r(11299),
        u = r(79024),
        h = r(11166),
        m = r(86188),
        x = r(27239),
        g = r(84217),
        f = r(275),
        p = r(1422),
        v = r(81994),
        j = r(14535),
        w = r(23072),
        b = r(88117),
        y = r(60914),
        N = r(30478),
        k = r(74285),
        A = r(72982),
        C = r(63016),
        L = r(67739),
        E = r(34379),
        _ = r(52461),
        P = r(5101),
        W = r(72815),
        T = r(5e4),
        S = r(28131),
        B = r(47161),
        I = r(81077),
        M = r(55853);
      let D = [
        { name: "Home", url: "/", icon: i.A },
        { name: "Jobs", url: "/jobs", icon: a.A },
        {
          name: "Tools",
          url: "/tools",
          icon: l.A,
          children: [
            {
              name: "Eligibility Checker",
              url: "/tools/eligibility-checker",
              icon: c.A,
              featured: !0,
            },
            {
              name: "Living Cost Calculator",
              url: "/tools/living-cost-calculator",
              icon: d.A,
              featured: !0,
            },
            {
              name: "ROI Calculator",
              url: "/tools/roi-calculator",
              icon: u.A,
              featured: !0,
            },
            {
              name: "Document Checklist",
              url: "/tools/document-checklist",
              icon: h.A,
              featured: !0,
            },
            {
              name: "Career Pathway",
              url: "/tools/career-pathway-decision",
              icon: m.A,
              featured: !0,
            },
            {
              name: "Cover Letter Generator",
              url: "/tools/cover-letter",
              icon: x.A,
              featured: !0,
            },
            {
              name: "Application Timeline",
              url: "/tools/application-timeline",
              icon: g.A,
              featured: !1,
            },
            {
              name: "Pre-departure Checklist",
              url: "/tools/pre-departure-checklist",
              icon: f.A,
              featured: !1,
            },
            {
              name: "Blocked Account Calculator",
              url: "/tools/blocked-account-calculator",
              icon: p.A,
              featured: !1,
            },
            {
              name: "Language Calculator",
              url: "/tools/language-proficiency-calculator",
              icon: v.A,
              featured: !1,
            },
            {
              name: "Ausbildung vs University",
              url: "/tools/ausbildung-vs-university-comparison",
              icon: j.A,
              featured: !1,
            },
            {
              name: "Sector Comparison",
              url: "/tools/ausbildung-sector-comparison",
              icon: j.A,
              featured: !1,
            },
            {
              name: "CV Comparison",
              url: "/tools/cv-comparison",
              icon: w.A,
              featured: !1,
            },
          ],
        },
        {
          name: "Sectors",
          url: "/sectors",
          icon: b.A,
          children: M.dk.map((e) => ({
            name: e.name,
            url: "/sectors/".concat(e.slug),
            icon: e.icon,
            featured: e.featured,
          })),
        },
        {
          name: "Learn",
          url: "/ausbildung-in-germany",
          icon: y.A,
          children: [
            {
              name: "Ausbildung in Germany",
              url: "/ausbildung-in-germany",
              icon: N.A,
            },
            { name: "Ausbildung Basics", url: "/ausbildung-basics", icon: k.A },
            {
              name: "Why Choose Ausbildung",
              url: "/why-ausbildung",
              icon: A.A,
            },
            { name: "Finding Programs", url: "/finding-programs", icon: a.A },
            { name: "Requirements", url: "/requirements", icon: w.A },
            { name: "Language", url: "/language", icon: v.A },
            { name: "Visa", url: "/visa", icon: C.A },
            { name: "Costs", url: "/costs", icon: L.A },
            { name: "Application", url: "/application", icon: N.A },
            { name: "Housing", url: "/housing", icon: E.A },
            { name: "Timeline", url: "/ausbildung-timeline", icon: g.A },
            { name: "Daily Life", url: "/daily-life", icon: _.A },
            {
              name: "Cultural Integration",
              url: "/cultural-integration",
              icon: P.A,
            },
            { name: "Trainee Rights", url: "/trainee-rights", icon: W.A },
            {
              name: "Switch Your Ausbildung",
              url: "/ausbildung/change-career",
              icon: T.A,
            },
            { name: "After Ausbildung", url: "/after-ausbildung", icon: S.A },
            { name: "FAQ", url: "/ausbildung-faq", icon: B.A },
          ],
        },
      ];
      function F() {
        return (0, n.jsx)("header", {
          children: (0, n.jsx)(I.j, { items: D }),
        });
      }
      var H = r(10542),
        z = r.n(H),
        G = r(50018),
        J = r(39441),
        R = r(84321);
      function U() {
        let [e, t] = (0, s.useState)("18K+");
        return (
          (0, s.useEffect)(() => {
            (async function () {
              try {
                let e = await fetch("/api/stats/marketplace");
                if (e.ok) {
                  let r = (await e.json()).total_jobs || 18e3;
                  r >= 1e3
                    ? t("".concat(Math.floor(r / 1e3), "K+"))
                    : t("".concat(r, "+"));
                }
              } catch (e) {
                console.error("Failed to fetch job count:", e);
              }
            })();
          }, []),
          (0, n.jsx)("span", {
            className:
              "inline-flex items-center px-1.5 py-0.5 text-[10px] font-semibold text-white bg-primary rounded-full shadow-sm min-h-[16px] h-4",
            children: e,
          })
        );
      }
      function O() {
        return (0, n.jsx)("footer", {
          className: "border-t bg-background",
          children: (0, n.jsxs)("div", {
            className: "container py-12 md:py-16",
            children: [
              (0, n.jsxs)("div", {
                className:
                  "grid gap-6 md:grid-cols-2 lg:grid-cols-[1.4fr_1fr_1fr_1fr_1fr_1fr] lg:gap-8",
                children: [
                  (0, n.jsxs)("div", {
                    className: "space-y-2",
                    children: [
                      (0, n.jsx)(R.Logo, { iconSize: "md" }),
                      (0, n.jsx)("p", {
                        className: "text-sm text-muted-foreground",
                        children:
                          "Apply to Ausbildung positions 10x faster. Smart application kits, intelligent job matching, and application tracking for international students.",
                      }),
                      (0, n.jsxs)("div", {
                        className: "flex flex-col gap-3 mt-4",
                        children: [
                          (0, n.jsxs)(z(), {
                            href: "https://pikassostudio.com",
                            target: "_blank",
                            rel: "dofollow noopener noreferrer",
                            className:
                              "inline-flex items-center px-3 py-1.5 rounded-lg border border-gray-800 bg-black/80 backdrop-blur-md hover:bg-black/90 hover:border-gray-700 transition-all duration-300 w-fit group",
                            children: [
                              (0, n.jsx)("div", {
                                className:
                                  "relative w-4 h-4 flex-shrink-0 mr-1.5",
                                children: (0, n.jsx)(G.default, {
                                  src: "/pikasso-logo-dark-1024x1024.svg",
                                  alt: "Pikasso",
                                  width: 16,
                                  height: 16,
                                }),
                              }),
                              (0, n.jsx)("span", {
                                className:
                                  "text-xs text-muted-foreground group-hover:text-white transition-colors mr-0.5",
                                children: "Built by",
                              }),
                              (0, n.jsxs)("span", {
                                className: "text-xs font-medium text-white",
                                children: [
                                  "Pikasso",
                                  (0, n.jsx)("span", {
                                    className:
                                      "text-[#FF6500] text-base leading-none",
                                    children: ".",
                                  }),
                                ],
                              }),
                            ],
                          }),
                          (0, n.jsxs)("div", {
                            className: "flex space-x-4",
                            children: [
                              (0, n.jsx)(z(), {
                                href: "https://www.linkedin.com/company/goausbildung/",
                                target: "_blank",
                                rel: "noopener noreferrer",
                                children: (0, n.jsxs)(J.$, {
                                  variant: "ghost",
                                  size: "icon",
                                  className:
                                    "h-8 w-8 touch-target hover:bg-muted group",
                                  children: [
                                    (0, n.jsxs)("svg", {
                                      xmlns: "http://www.w3.org/2000/svg",
                                      width: "16",
                                      height: "16",
                                      viewBox: "0 0 24 24",
                                      fill: "none",
                                      stroke: "currentColor",
                                      strokeWidth: "2",
                                      strokeLinecap: "round",
                                      strokeLinejoin: "round",
                                      className:
                                        "lucide lucide-linkedin text-secondary group-hover:text-primary transition-colors",
                                      children: [
                                        (0, n.jsx)("path", {
                                          d: "M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 0 0-2-2 2 2 0 0 0-2 2v7h-4v-7a6 6 0 0 1 6-6z",
                                        }),
                                        (0, n.jsx)("rect", {
                                          width: "4",
                                          height: "12",
                                          x: "2",
                                          y: "9",
                                        }),
                                        (0, n.jsx)("circle", {
                                          cx: "4",
                                          cy: "4",
                                          r: "2",
                                        }),
                                      ],
                                    }),
                                    (0, n.jsx)("span", {
                                      className: "sr-only",
                                      children: "LinkedIn",
                                    }),
                                  ],
                                }),
                              }),
                              (0, n.jsx)(z(), {
                                href: "https://www.instagram.com/goausbildung.global/",
                                target: "_blank",
                                rel: "noopener noreferrer",
                                children: (0, n.jsxs)(J.$, {
                                  variant: "ghost",
                                  size: "icon",
                                  className:
                                    "h-8 w-8 touch-target hover:bg-muted group",
                                  children: [
                                    (0, n.jsxs)("svg", {
                                      xmlns: "http://www.w3.org/2000/svg",
                                      width: "16",
                                      height: "16",
                                      viewBox: "0 0 24 24",
                                      fill: "none",
                                      stroke: "currentColor",
                                      strokeWidth: "2",
                                      strokeLinecap: "round",
                                      strokeLinejoin: "round",
                                      className:
                                        "lucide lucide-instagram text-secondary group-hover:text-primary transition-colors",
                                      children: [
                                        (0, n.jsx)("rect", {
                                          width: "20",
                                          height: "20",
                                          x: "2",
                                          y: "2",
                                          rx: "5",
                                          ry: "5",
                                        }),
                                        (0, n.jsx)("path", {
                                          d: "M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z",
                                        }),
                                        (0, n.jsx)("line", {
                                          x1: "17.5",
                                          x2: "17.51",
                                          y1: "6.5",
                                          y2: "6.5",
                                        }),
                                      ],
                                    }),
                                    (0, n.jsx)("span", {
                                      className: "sr-only",
                                      children: "Instagram",
                                    }),
                                  ],
                                }),
                              }),
                              (0, n.jsx)(z(), {
                                href: "https://x.com/goausbildung",
                                target: "_blank",
                                rel: "noopener noreferrer",
                                children: (0, n.jsxs)(J.$, {
                                  variant: "ghost",
                                  size: "icon",
                                  className:
                                    "h-8 w-8 touch-target hover:bg-muted group",
                                  children: [
                                    (0, n.jsxs)("svg", {
                                      xmlns: "http://www.w3.org/2000/svg",
                                      width: "16",
                                      height: "16",
                                      viewBox: "0 0 24 24",
                                      fill: "none",
                                      stroke: "currentColor",
                                      strokeWidth: "2",
                                      strokeLinecap: "round",
                                      strokeLinejoin: "round",
                                      className:
                                        "text-secondary group-hover:text-primary transition-colors",
                                      children: [
                                        (0, n.jsx)("path", {
                                          d: "M4 4l11.733 16h4.267l-11.733 -16z",
                                        }),
                                        (0, n.jsx)("path", {
                                          d: "M4 20l6.768 -6.768m2.46 -2.46l6.772 -6.772",
                                        }),
                                      ],
                                    }),
                                    (0, n.jsx)("span", {
                                      className: "sr-only",
                                      children: "X (formerly Twitter)",
                                    }),
                                  ],
                                }),
                              }),
                              (0, n.jsx)(z(), {
                                href: "https://www.youtube.com/@goausbildung",
                                target: "_blank",
                                rel: "noopener noreferrer",
                                children: (0, n.jsxs)(J.$, {
                                  variant: "ghost",
                                  size: "icon",
                                  className:
                                    "h-8 w-8 touch-target hover:bg-muted group",
                                  children: [
                                    (0, n.jsxs)("svg", {
                                      xmlns: "http://www.w3.org/2000/svg",
                                      width: "16",
                                      height: "16",
                                      viewBox: "0 0 24 24",
                                      fill: "none",
                                      stroke: "currentColor",
                                      strokeWidth: "2",
                                      strokeLinecap: "round",
                                      strokeLinejoin: "round",
                                      className:
                                        "text-secondary group-hover:text-primary transition-colors",
                                      children: [
                                        (0, n.jsx)("path", {
                                          d: "M2.5 17a24.12 24.12 0 0 1 0-10 2 2 0 0 1 1.4-1.4 49.56 49.56 0 0 1 16.2 0A2 2 0 0 1 21.5 7a24.12 24.12 0 0 1 0 10 2 2 0 0 1-1.4 1.4 49.55 49.55 0 0 1-16.2 0A2 2 0 0 1 2.5 17",
                                        }),
                                        (0, n.jsx)("path", {
                                          d: "m10 15 5-3-5-3z",
                                        }),
                                      ],
                                    }),
                                    (0, n.jsx)("span", {
                                      className: "sr-only",
                                      children: "YouTube",
                                    }),
                                  ],
                                }),
                              }),
                            ],
                          }),
                        ],
                      }),
                    ],
                  }),
                  (0, n.jsxs)("div", {
                    className: "space-y-4",
                    children: [
                      (0, n.jsx)("h3", {
                        className: "text-sm font-medium",
                        children: "Platform",
                      }),
                      (0, n.jsxs)("ul", {
                        className: "space-y-2 text-sm",
                        children: [
                          (0, n.jsx)("li", {
                            children: (0, n.jsxs)(z(), {
                              href: "/jobs",
                              className:
                                "inline-flex items-center gap-2 text-muted-foreground hover:text-foreground transition-colors",
                              children: ["Job Marketplace", (0, n.jsx)(U, {})],
                            }),
                          }),
                          (0, n.jsx)("li", {
                            children: (0, n.jsxs)(z(), {
                              href: "/dashboard/applications",
                              className:
                                "inline-flex items-center gap-2 text-muted-foreground hover:text-foreground transition-colors",
                              children: [
                                "AI Application Kit",
                                (0, n.jsx)("span", {
                                  className:
                                    "inline-flex items-center px-1.5 py-0.5 text-[10px] font-semibold text-white bg-primary rounded-full shadow-sm min-h-[16px] h-4",
                                  children: "NEW",
                                }),
                              ],
                            }),
                          }),
                          (0, n.jsx)("li", {
                            children: (0, n.jsx)(z(), {
                              href: "/dashboard/cv-builder",
                              className:
                                "text-muted-foreground hover:text-foreground transition-colors",
                              children: "CV Builder",
                            }),
                          }),
                          (0, n.jsx)("li", {
                            children: (0, n.jsx)(z(), {
                              href: "/dashboard/german",
                              className:
                                "text-muted-foreground hover:text-foreground transition-colors",
                              children: "German Learning",
                            }),
                          }),
                          (0, n.jsx)("li", {
                            children: (0, n.jsx)(z(), {
                              href: "/dashboard/interview",
                              className:
                                "text-muted-foreground hover:text-foreground transition-colors",
                              children: "Interview Prep",
                            }),
                          }),
                          (0, n.jsx)("li", {
                            children: (0, n.jsx)(z(), {
                              href: "/consultation",
                              className:
                                "text-muted-foreground hover:text-foreground transition-colors",
                              children: "Apply For Me",
                            }),
                          }),
                        ],
                      }),
                    ],
                  }),
                  (0, n.jsxs)("div", {
                    className: "space-y-4",
                    children: [
                      (0, n.jsx)("h3", {
                        className: "text-sm font-medium",
                        children: "Jobs by Sector",
                      }),
                      (0, n.jsxs)("ul", {
                        className: "space-y-2 text-sm",
                        children: [
                          (0, n.jsx)("li", {
                            children: (0, n.jsx)(z(), {
                              href: "/jobs/healthcare",
                              className:
                                "text-muted-foreground hover:text-foreground transition-colors",
                              children: "Healthcare",
                            }),
                          }),
                          (0, n.jsx)("li", {
                            children: (0, n.jsx)(z(), {
                              href: "/jobs/it",
                              className:
                                "text-muted-foreground hover:text-foreground transition-colors",
                              children: "IT & Technology",
                            }),
                          }),
                          (0, n.jsx)("li", {
                            children: (0, n.jsx)(z(), {
                              href: "/jobs/engineering",
                              className:
                                "text-muted-foreground hover:text-foreground transition-colors",
                              children: "Engineering",
                            }),
                          }),
                          (0, n.jsx)("li", {
                            children: (0, n.jsx)(z(), {
                              href: "/jobs/retail",
                              className:
                                "text-muted-foreground hover:text-foreground transition-colors",
                              children: "Retail & Sales",
                            }),
                          }),
                          (0, n.jsx)("li", {
                            children: (0, n.jsx)(z(), {
                              href: "/jobs/hospitality",
                              className:
                                "text-muted-foreground hover:text-foreground transition-colors",
                              children: "Hospitality",
                            }),
                          }),
                          (0, n.jsx)("li", {
                            children: (0, n.jsx)(z(), {
                              href: "/jobs/logistics",
                              className:
                                "text-muted-foreground hover:text-foreground transition-colors",
                              children: "Logistics",
                            }),
                          }),
                          (0, n.jsx)("li", {
                            children: (0, n.jsx)(z(), {
                              href: "/sectors",
                              className:
                                "text-muted-foreground hover:text-foreground transition-colors",
                              children: "All 15 Sectors",
                            }),
                          }),
                        ],
                      }),
                    ],
                  }),
                  (0, n.jsxs)("div", {
                    className: "space-y-4",
                    children: [
                      (0, n.jsx)("h3", {
                        className: "text-sm font-medium",
                        children: "Jobs by City",
                      }),
                      (0, n.jsxs)("ul", {
                        className: "space-y-2 text-sm",
                        children: [
                          (0, n.jsx)("li", {
                            children: (0, n.jsx)(z(), {
                              href: "/jobs/berlin",
                              className:
                                "text-muted-foreground hover:text-foreground transition-colors",
                              children: "Berlin",
                            }),
                          }),
                          (0, n.jsx)("li", {
                            children: (0, n.jsx)(z(), {
                              href: "/jobs/munich",
                              className:
                                "text-muted-foreground hover:text-foreground transition-colors",
                              children: "Munich",
                            }),
                          }),
                          (0, n.jsx)("li", {
                            children: (0, n.jsx)(z(), {
                              href: "/jobs/hamburg",
                              className:
                                "text-muted-foreground hover:text-foreground transition-colors",
                              children: "Hamburg",
                            }),
                          }),
                          (0, n.jsx)("li", {
                            children: (0, n.jsx)(z(), {
                              href: "/jobs/frankfurt",
                              className:
                                "text-muted-foreground hover:text-foreground transition-colors",
                              children: "Frankfurt",
                            }),
                          }),
                          (0, n.jsx)("li", {
                            children: (0, n.jsx)(z(), {
                              href: "/jobs/cologne",
                              className:
                                "text-muted-foreground hover:text-foreground transition-colors",
                              children: "Cologne",
                            }),
                          }),
                          (0, n.jsx)("li", {
                            children: (0, n.jsx)(z(), {
                              href: "/jobs/dusseldorf",
                              className:
                                "text-muted-foreground hover:text-foreground transition-colors",
                              children: "D\xfcsseldorf",
                            }),
                          }),
                          (0, n.jsx)("li", {
                            children: (0, n.jsx)(z(), {
                              href: "/companies",
                              className:
                                "text-muted-foreground hover:text-foreground transition-colors",
                              children: "All Companies",
                            }),
                          }),
                        ],
                      }),
                    ],
                  }),
                  (0, n.jsxs)("div", {
                    className: "space-y-4",
                    children: [
                      (0, n.jsx)("h3", {
                        className: "text-sm font-medium",
                        children: "Free Tools",
                      }),
                      (0, n.jsxs)("ul", {
                        className: "space-y-2 text-sm",
                        children: [
                          (0, n.jsx)("li", {
                            children: (0, n.jsx)(z(), {
                              href: "/tools/eligibility-checker",
                              className:
                                "text-muted-foreground hover:text-foreground transition-colors",
                              children: "Eligibility Checker",
                            }),
                          }),
                          (0, n.jsx)("li", {
                            children: (0, n.jsx)(z(), {
                              href: "/tools/cover-letter",
                              className:
                                "text-muted-foreground hover:text-foreground transition-colors",
                              children: "Cover Letter Generator",
                            }),
                          }),
                          (0, n.jsx)("li", {
                            children: (0, n.jsx)(z(), {
                              href: "/tools/living-cost-calculator",
                              className:
                                "text-muted-foreground hover:text-foreground transition-colors",
                              children: "Living Cost Calculator",
                            }),
                          }),
                          (0, n.jsx)("li", {
                            children: (0, n.jsx)(z(), {
                              href: "/tools/roi-calculator",
                              className:
                                "text-muted-foreground hover:text-foreground transition-colors",
                              children: "ROI Calculator",
                            }),
                          }),
                          (0, n.jsx)("li", {
                            children: (0, n.jsx)(z(), {
                              href: "/tools/document-checklist",
                              className:
                                "text-muted-foreground hover:text-foreground transition-colors",
                              children: "Document Checklist",
                            }),
                          }),
                          (0, n.jsx)("li", {
                            children: (0, n.jsx)(z(), {
                              href: "/tools",
                              className:
                                "text-muted-foreground hover:text-foreground transition-colors",
                              children: "All 13 Tools",
                            }),
                          }),
                          (0, n.jsx)("li", {
                            children: (0, n.jsxs)(z(), {
                              href: "https://bookgermantest.com?ref=goausbildung",
                              target: "_blank",
                              rel: "noopener noreferrer",
                              className:
                                "inline-flex items-center gap-1 text-muted-foreground hover:text-foreground transition-colors",
                              children: [
                                "Book German Test",
                                (0, n.jsxs)("svg", {
                                  xmlns: "http://www.w3.org/2000/svg",
                                  width: "12",
                                  height: "12",
                                  viewBox: "0 0 24 24",
                                  fill: "none",
                                  stroke: "currentColor",
                                  strokeWidth: "2",
                                  strokeLinecap: "round",
                                  strokeLinejoin: "round",
                                  className: "opacity-50",
                                  children: [
                                    (0, n.jsx)("path", {
                                      d: "M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6",
                                    }),
                                    (0, n.jsx)("polyline", {
                                      points: "15 3 21 3 21 9",
                                    }),
                                    (0, n.jsx)("line", {
                                      x1: "10",
                                      x2: "21",
                                      y1: "14",
                                      y2: "3",
                                    }),
                                  ],
                                }),
                              ],
                            }),
                          }),
                        ],
                      }),
                    ],
                  }),
                  (0, n.jsxs)("div", {
                    className: "space-y-4",
                    children: [
                      (0, n.jsx)("h3", {
                        className: "text-sm font-medium",
                        children: "Company",
                      }),
                      (0, n.jsxs)("ul", {
                        className: "space-y-2 text-sm",
                        children: [
                          (0, n.jsx)("li", {
                            children: (0, n.jsx)(z(), {
                              href: "/about",
                              className:
                                "text-muted-foreground hover:text-foreground transition-colors",
                              children: "About Us",
                            }),
                          }),
                          (0, n.jsx)("li", {
                            children: (0, n.jsx)(z(), {
                              href: "/blog",
                              className:
                                "text-muted-foreground hover:text-foreground transition-colors",
                              children: "Blog",
                            }),
                          }),
                          (0, n.jsx)("li", {
                            children: (0, n.jsx)(z(), {
                              href: "/success-stories",
                              className:
                                "text-muted-foreground hover:text-foreground transition-colors",
                              children: "Success Stories",
                            }),
                          }),
                          (0, n.jsx)("li", {
                            children: (0, n.jsx)(z(), {
                              href: "/arbeitgeber",
                              className:
                                "text-muted-foreground hover:text-foreground transition-colors",
                              children: "For Employers",
                            }),
                          }),
                          (0, n.jsx)("li", {
                            children: (0, n.jsx)(z(), {
                              href: "/partner-with-us",
                              className:
                                "text-muted-foreground hover:text-foreground transition-colors",
                              children: "Partner with Us",
                            }),
                          }),
                          (0, n.jsx)("li", {
                            children: (0, n.jsx)(z(), {
                              href: "/contact",
                              className:
                                "text-muted-foreground hover:text-foreground transition-colors",
                              children: "Contact",
                            }),
                          }),
                          (0, n.jsx)("li", {
                            children: (0, n.jsx)(z(), {
                              href: "/docs/students",
                              className:
                                "text-muted-foreground hover:text-foreground transition-colors",
                              children: "Help Center",
                            }),
                          }),
                        ],
                      }),
                    ],
                  }),
                ],
              }),
              (0, n.jsx)("div", {
                className: "mt-12 border-t pt-6",
                children: (0, n.jsxs)("div", {
                  className:
                    "flex flex-col items-center justify-between gap-4 text-center text-sm text-muted-foreground md:flex-row md:text-left",
                  children: [
                    (0, n.jsxs)("p", {
                      children: [
                        "\xa9 ",
                        new Date().getFullYear(),
                        " GoAusbildung. All rights reserved.",
                      ],
                    }),
                    (0, n.jsxs)("div", {
                      className: "flex items-center space-x-4",
                      children: [
                        (0, n.jsx)(z(), {
                          href: "/privacy",
                          className: "hover:text-foreground transition-colors",
                          children: "Privacy",
                        }),
                        (0, n.jsx)("span", {
                          className: "text-muted-foreground/60",
                          children: "•",
                        }),
                        (0, n.jsx)(z(), {
                          href: "/terms",
                          className: "hover:text-foreground transition-colors",
                          children: "Terms",
                        }),
                        (0, n.jsx)("span", {
                          className: "text-muted-foreground/60",
                          children: "•",
                        }),
                        (0, n.jsx)(z(), {
                          href: "/imprint",
                          className: "hover:text-foreground transition-colors",
                          children: "Imprint",
                        }),
                        (0, n.jsx)("span", {
                          className: "text-muted-foreground/60",
                          children: "•",
                        }),
                        (0, n.jsx)(z(), {
                          href: "/cookies",
                          className: "hover:text-foreground transition-colors",
                          children: "Cookies",
                        }),
                        (0, n.jsx)("span", {
                          className: "text-muted-foreground/60",
                          children: "•",
                        }),
                        (0, n.jsx)(z(), {
                          href: "/refund-policy",
                          className: "hover:text-foreground transition-colors",
                          children: "Refund Policy",
                        }),
                      ],
                    }),
                  ],
                }),
              }),
            ],
          }),
        });
      }
      var q = r(49211);
      function K(e) {
        let { children: t } = e,
          r = (0, o.usePathname)();
        return ((0, s.useEffect)(() => {
          (0, q.JR)(r);
        }, [r]),
        r.startsWith("/auth") ||
          r.startsWith("/dashboard") ||
          r.startsWith("/admin") ||
          r.startsWith("/arbeitgeber") ||
          r.startsWith("/de") ||
          r.startsWith("/docs") ||
          r.startsWith("/share") ||
          r.startsWith("/student/") ||
          r.startsWith("/employer/"))
          ? (0, n.jsx)("div", {
              className:
                "relative flex min-h-screen flex-col overflow-x-hidden max-w-full",
              children: (0, n.jsx)("main", {
                className: "flex-1 max-w-full",
                children: t,
              }),
            })
          : (0, n.jsxs)("div", {
              className:
                "relative flex min-h-screen flex-col overflow-x-hidden max-w-full",
              children: [
                (0, n.jsx)(F, {}),
                (0, n.jsx)("main", {
                  className: "flex-1 max-w-full",
                  children: t,
                }),
                (0, n.jsx)(O, {}),
              ],
            });
      }
    },
    95290: (e, t, r) => {
      "use strict";
      r.d(t, { default: () => d });
      var n = r(70207),
        o = r(87223),
        s = r(26928),
        i = r(18051);
      let a = [
          "What is Ausbildung?",
          "How do I apply for Ausbildung in Germany?",
          "What are the best paying Ausbildung programs?",
          "What services can help me with the Ausbildung process?",
        ],
        l = (0, s.default)(
          () =>
            Promise.all([r.e(36209), r.e(84121), r.e(72076), r.e(12621)]).then(
              r.bind(r, 12621),
            ),
          {
            loadableGenerated: { webpack: () => [12621] },
            ssr: !1,
            loading: () => null,
          },
        ),
        c = () => {
          Promise.all([r.e(36209), r.e(84121), r.e(72076), r.e(12621)]).then(
            r.bind(r, 12621),
          );
        };
      function d() {
        let [e, t] = (0, o.useState)(!1),
          r = (0, i.usePathname)(),
          s = null == r ? void 0 : r.startsWith("/dashboard"),
          d = null == r ? void 0 : r.startsWith("/arbeitgeber"),
          u = null == r ? void 0 : r.startsWith("/admin"),
          h = null == r ? void 0 : r.startsWith("/student/"),
          m = s || d || u || h;
        return ((0, o.useEffect)(() => {
          if (m) return;
          let e = !0,
            r = !1,
            n = () => {
              (window.scrollY /
                (document.documentElement.scrollHeight - window.innerHeight)) *
                100 >
                30 &&
                !r &&
                ((r = !0), e && t(!0));
            },
            o = () => {
              (c(),
                document.removeEventListener("mousemove", o),
                document.removeEventListener("click", o),
                document.removeEventListener("keydown", o),
                document.removeEventListener("touchstart", o));
            };
          (window.addEventListener("scroll", n, { passive: !0 }),
            document.addEventListener("mousemove", o, {
              once: !0,
              passive: !0,
            }),
            document.addEventListener("click", o, { once: !0, passive: !0 }),
            document.addEventListener("keydown", o, { once: !0, passive: !0 }),
            document.addEventListener("touchstart", o, {
              once: !0,
              passive: !0,
            }));
          let s = setTimeout(() => {
            e && !r && t(!0);
          }, 15e3);
          return () => {
            ((e = !1),
              clearTimeout(s),
              window.removeEventListener("scroll", n),
              document.removeEventListener("mousemove", o),
              document.removeEventListener("click", o),
              document.removeEventListener("keydown", o),
              document.removeEventListener("touchstart", o));
          };
        }, [m]),
        m || !e)
          ? null
          : (0, n.jsx)(l, { commonQuestions: a });
      }
    },
  },
  (e) => {
    var t = (t) => e((e.s = t));
    (e.O(0, [62840, 47786, 46593, 36209, 84121, 72076, 77358], () => t(35175)),
      (_N_E = e.O()));
  },
]);
