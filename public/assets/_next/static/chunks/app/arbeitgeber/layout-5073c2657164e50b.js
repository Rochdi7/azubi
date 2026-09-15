(self.webpackChunk_N_E = self.webpackChunk_N_E || []).push([
  [10466],
  {
    26548: (e, s, l) => {
      "use strict";
      l.d(s, { ConditionalLandingLayout: () => g });
      var n = l(70207),
        r = l(18051),
        t = l(90669),
        a = l(22951),
        i = l(87223),
        o = l(10542),
        d = l.n(o),
        c = l(39945),
        u = l(30945),
        x = l(15450),
        m = l(39441),
        h = l(80187);
      function f() {
        let [e, s] = (0, i.useState)(!1),
          [l, r] = (0, i.useState)(!1),
          [t, a] = (0, i.useState)({
            necessary: !0,
            analytics: !1,
            functional: !1,
          });
        (0, i.useEffect)(() => {
          let e = localStorage.getItem("cookie-consent");
          if (e)
            try {
              let s = JSON.parse(e);
              (a(s), o(s));
            } catch (e) {
              console.error("Failed to parse cookie consent:", e);
            }
          else setTimeout(() => s(!0), 1e3);
        }, []);
        let o = (e) => {
            e.analytics
              ? window.gtag &&
                window.gtag("consent", "update", {
                  analytics_storage: "granted",
                })
              : window.gtag &&
                window.gtag("consent", "update", {
                  analytics_storage: "denied",
                });
          },
          f = (e) => {
            (localStorage.setItem("cookie-consent", JSON.stringify(e)),
              localStorage.setItem(
                "cookie-consent-date",
                new Date().toISOString(),
              ),
              o(e),
              s(!1),
              r(!1));
          },
          g = () => {
            let e = { necessary: !0, analytics: !0, functional: !0 };
            (a(e), f(e));
          },
          b = () => {
            let e = { necessary: !0, analytics: !1, functional: !1 };
            (a(e), f(e));
          };
        return e
          ? (0, n.jsxs)(n.Fragment, {
              children: [
                (0, n.jsx)("div", {
                  className: "fixed inset-0 bg-black/20 z-40",
                  style: { backdropFilter: "blur(2px)" },
                }),
                (0, n.jsx)("div", {
                  className: "fixed bottom-0 left-0 right-0 z-50 p-4 md:p-6",
                  children: (0, n.jsx)("div", {
                    className: "container max-w-5xl mx-auto",
                    children: (0, n.jsxs)(h.Zp, {
                      className:
                        "relative shadow-2xl rounded-2xl overflow-hidden",
                      style: {
                        backgroundColor: "white",
                        border: "1px solid rgba(44, 51, 64, 0.1)",
                      },
                      children: [
                        (0, n.jsx)("button", {
                          onClick: b,
                          className:
                            "absolute top-4 right-4 w-8 h-8 rounded-full flex items-center justify-center hover:bg-muted transition-colors",
                          "aria-label": "Ablehnen und schlie\xdfen",
                          children: (0, n.jsx)(c.A, {
                            className: "w-5 h-5 text-muted-foreground",
                          }),
                        }),
                        (0, n.jsx)("div", {
                          className: "p-6 md:p-8",
                          children: l
                            ? (0, n.jsxs)("div", {
                                className: "space-y-5",
                                children: [
                                  (0, n.jsxs)("div", {
                                    className: "flex items-center gap-3 pr-8",
                                    children: [
                                      (0, n.jsx)("button", {
                                        onClick: () => r(!1),
                                        className:
                                          "text-muted-foreground hover:text-foreground",
                                        children: "← Zur\xfcck",
                                      }),
                                      (0, n.jsx)("h3", {
                                        className: "text-xl font-semibold",
                                        style: { color: "#2C3340" },
                                        children:
                                          "Cookie-Einstellungen anpassen",
                                      }),
                                    ],
                                  }),
                                  (0, n.jsxs)("div", {
                                    className: "space-y-4",
                                    children: [
                                      (0, n.jsx)("div", {
                                        className: "p-4 rounded-xl",
                                        style: {
                                          backgroundColor:
                                            "rgba(44, 51, 64, 0.05)",
                                        },
                                        children: (0, n.jsxs)("div", {
                                          className:
                                            "flex items-start justify-between gap-4",
                                          children: [
                                            (0, n.jsxs)("div", {
                                              className: "flex-1",
                                              children: [
                                                (0, n.jsxs)("div", {
                                                  className:
                                                    "flex items-center gap-2 mb-2",
                                                  children: [
                                                    (0, n.jsx)("h4", {
                                                      className:
                                                        "font-semibold text-foreground",
                                                      children:
                                                        "Notwendige Cookies",
                                                    }),
                                                    (0, n.jsx)("span", {
                                                      className:
                                                        "text-xs px-2 py-0.5 rounded-full",
                                                      style: {
                                                        backgroundColor:
                                                          "rgba(44, 51, 64, 0.1)",
                                                        color: "#2C3340",
                                                      },
                                                      children: "Immer aktiv",
                                                    }),
                                                  ],
                                                }),
                                                (0, n.jsx)("p", {
                                                  className:
                                                    "text-sm text-muted-foreground leading-relaxed",
                                                  children:
                                                    "Diese Cookies sind f\xfcr die Grundfunktionen der Plattform erforderlich (Login, Sitzungsverwaltung).",
                                                }),
                                              ],
                                            }),
                                            (0, n.jsx)("div", {
                                              className:
                                                "w-12 h-6 rounded-full flex items-center px-1 shrink-0",
                                              style: {
                                                backgroundColor: "#5D5DE9",
                                              },
                                              children: (0, n.jsx)("div", {
                                                className:
                                                  "w-4 h-4 rounded-full bg-white ml-auto",
                                              }),
                                            }),
                                          ],
                                        }),
                                      }),
                                      (0, n.jsx)("div", {
                                        className: "p-4 rounded-xl",
                                        style: {
                                          backgroundColor:
                                            "rgba(44, 51, 64, 0.05)",
                                        },
                                        children: (0, n.jsxs)("div", {
                                          className:
                                            "flex items-start justify-between gap-4",
                                          children: [
                                            (0, n.jsxs)("div", {
                                              className: "flex-1",
                                              children: [
                                                (0, n.jsx)("h4", {
                                                  className:
                                                    "font-semibold text-foreground mb-2",
                                                  children: "Analyse-Cookies",
                                                }),
                                                (0, n.jsx)("p", {
                                                  className:
                                                    "text-sm text-muted-foreground leading-relaxed",
                                                  children:
                                                    "Helfen uns zu verstehen, wie Sie die Plattform nutzen (Google Analytics mit anonymisierten IPs).",
                                                }),
                                              ],
                                            }),
                                            (0, n.jsx)("button", {
                                              onClick: () => {
                                                a((e) => ({
                                                  ...e,
                                                  analytics: !e.analytics,
                                                }));
                                              },
                                              className:
                                                "w-12 h-6 rounded-full flex items-center px-1 shrink-0 transition-colors",
                                              style: {
                                                backgroundColor: t.analytics
                                                  ? "#5D5DE9"
                                                  : "#e5e7eb",
                                              },
                                              "aria-label": t.analytics
                                                ? "Analyse-Cookies deaktivieren"
                                                : "Analyse-Cookies aktivieren",
                                              children: (0, n.jsx)("div", {
                                                className:
                                                  "w-4 h-4 rounded-full bg-white transition-transform",
                                                style: {
                                                  transform: t.analytics
                                                    ? "translateX(24px)"
                                                    : "translateX(0)",
                                                },
                                              }),
                                            }),
                                          ],
                                        }),
                                      }),
                                      (0, n.jsx)("div", {
                                        className: "p-4 rounded-xl",
                                        style: {
                                          backgroundColor:
                                            "rgba(44, 51, 64, 0.05)",
                                        },
                                        children: (0, n.jsxs)("div", {
                                          className:
                                            "flex items-start justify-between gap-4",
                                          children: [
                                            (0, n.jsxs)("div", {
                                              className: "flex-1",
                                              children: [
                                                (0, n.jsx)("h4", {
                                                  className:
                                                    "font-semibold text-foreground mb-2",
                                                  children:
                                                    "Funktionale Cookies",
                                                }),
                                                (0, n.jsx)("p", {
                                                  className:
                                                    "text-sm text-muted-foreground leading-relaxed",
                                                  children:
                                                    "Speichern Ihre Pr\xe4ferenzen (Sprache, UI-Einstellungen) f\xfcr ein besseres Nutzererlebnis.",
                                                }),
                                              ],
                                            }),
                                            (0, n.jsx)("button", {
                                              onClick: () => {
                                                a((e) => ({
                                                  ...e,
                                                  functional: !e.functional,
                                                }));
                                              },
                                              className:
                                                "w-12 h-6 rounded-full flex items-center px-1 shrink-0 transition-colors",
                                              style: {
                                                backgroundColor: t.functional
                                                  ? "#5D5DE9"
                                                  : "#e5e7eb",
                                              },
                                              "aria-label": t.functional
                                                ? "Funktionale Cookies deaktivieren"
                                                : "Funktionale Cookies aktivieren",
                                              children: (0, n.jsx)("div", {
                                                className:
                                                  "w-4 h-4 rounded-full bg-white transition-transform",
                                                style: {
                                                  transform: t.functional
                                                    ? "translateX(24px)"
                                                    : "translateX(0)",
                                                },
                                              }),
                                            }),
                                          ],
                                        }),
                                      }),
                                    ],
                                  }),
                                  (0, n.jsxs)("div", {
                                    className:
                                      "flex flex-col sm:flex-row gap-3 pt-4",
                                    children: [
                                      (0, n.jsx)(m.$, {
                                        onClick: () => {
                                          f(t);
                                        },
                                        className: "rounded-full flex-1",
                                        style: {
                                          backgroundColor: "#5D5DE9",
                                          color: "white",
                                        },
                                        children: "Auswahl speichern",
                                      }),
                                      (0, n.jsx)(m.$, {
                                        onClick: g,
                                        variant: "outline",
                                        className: "rounded-full flex-1",
                                        style: {
                                          borderColor: "#2C3340",
                                          color: "#2C3340",
                                        },
                                        children: "Alle akzeptieren",
                                      }),
                                    ],
                                  }),
                                  (0, n.jsx)("div", {
                                    className: "pt-3 border-t border-border/30",
                                    children: (0, n.jsxs)("p", {
                                      className:
                                        "text-xs text-muted-foreground",
                                      children: [
                                        "Detaillierte Informationen zu den verwendeten Cookies finden Sie in unserer",
                                        " ",
                                        (0, n.jsx)(d(), {
                                          href: "/arbeitgeber/cookies",
                                          className:
                                            "font-medium hover:underline",
                                          style: { color: "#5D5DE9" },
                                          children: "Cookie-Richtlinie",
                                        }),
                                        ".",
                                      ],
                                    }),
                                  }),
                                ],
                              })
                            : (0, n.jsxs)("div", {
                                className: "space-y-5",
                                children: [
                                  (0, n.jsxs)("div", {
                                    className: "flex items-start gap-4 pr-8",
                                    children: [
                                      (0, n.jsx)("div", {
                                        className:
                                          "w-12 h-12 rounded-full flex items-center justify-center shrink-0",
                                        style: {
                                          backgroundColor:
                                            "rgba(93, 93, 233, 0.1)",
                                        },
                                        children: (0, n.jsx)(u.A, {
                                          className: "w-6 h-6",
                                          style: { color: "#5D5DE9" },
                                        }),
                                      }),
                                      (0, n.jsxs)("div", {
                                        children: [
                                          (0, n.jsx)("h3", {
                                            className:
                                              "text-xl font-semibold mb-2",
                                            style: { color: "#2C3340" },
                                            children:
                                              "Ihre Cookie-Einstellungen",
                                          }),
                                          (0, n.jsx)("p", {
                                            className:
                                              "text-sm text-muted-foreground leading-relaxed",
                                            children:
                                              "Wir verwenden Cookies, um Ihnen die bestm\xf6gliche Nutzung unserer Plattform zu erm\xf6glichen. Notwendige Cookies sind f\xfcr die Funktionalit\xe4t erforderlich. Analyse-Cookies helfen uns, die Plattform zu verbessern.",
                                          }),
                                        ],
                                      }),
                                    ],
                                  }),
                                  (0, n.jsxs)("div", {
                                    className:
                                      "flex flex-col sm:flex-row gap-3",
                                    children: [
                                      (0, n.jsx)(m.$, {
                                        onClick: g,
                                        className:
                                          "rounded-full flex-1 sm:flex-initial",
                                        style: {
                                          backgroundColor: "#5D5DE9",
                                          color: "white",
                                        },
                                        children: "Alle akzeptieren",
                                      }),
                                      (0, n.jsx)(m.$, {
                                        onClick: b,
                                        variant: "outline",
                                        className:
                                          "rounded-full flex-1 sm:flex-initial",
                                        style: {
                                          borderColor: "#2C3340",
                                          color: "#2C3340",
                                        },
                                        children: "Nur notwendige",
                                      }),
                                      (0, n.jsxs)(m.$, {
                                        onClick: () => r(!0),
                                        variant: "ghost",
                                        className:
                                          "rounded-full flex-1 sm:flex-initial",
                                        style: { color: "#2C3340" },
                                        children: [
                                          (0, n.jsx)(x.A, {
                                            className: "w-4 h-4 mr-2",
                                          }),
                                          "Einstellungen",
                                        ],
                                      }),
                                    ],
                                  }),
                                  (0, n.jsx)("div", {
                                    className: "pt-3 border-t border-border/30",
                                    children: (0, n.jsxs)("p", {
                                      className:
                                        "text-xs text-muted-foreground",
                                      children: [
                                        "Weitere Informationen finden Sie in unserer",
                                        " ",
                                        (0, n.jsx)(d(), {
                                          href: "/arbeitgeber/cookies",
                                          className:
                                            "font-medium hover:underline",
                                          style: { color: "#5D5DE9" },
                                          children: "Cookie-Richtlinie",
                                        }),
                                        " ",
                                        "und",
                                        " ",
                                        (0, n.jsx)(d(), {
                                          href: "/arbeitgeber/datenschutz",
                                          className:
                                            "font-medium hover:underline",
                                          style: { color: "#5D5DE9" },
                                          children: "Datenschutzerkl\xe4rung",
                                        }),
                                        ".",
                                      ],
                                    }),
                                  }),
                                ],
                              }),
                        }),
                      ],
                    }),
                  }),
                }),
              ],
            })
          : null;
      }
      function g(e) {
        let { children: s } = e,
          l = (0, r.usePathname)(),
          i = [
            "/arbeitgeber/dashboard",
            "/arbeitgeber/jobs",
            "/arbeitgeber/bewerbungen",
            "/arbeitgeber/kandidaten",
            "/arbeitgeber/nachrichten",
            "/arbeitgeber/benachrichtigungen",
            "/arbeitgeber/einstellungen",
            "/arbeitgeber/hilfe",
            "/arbeitgeber/team",
          ].some((e) => l.startsWith(e));
        return !l.startsWith("/arbeitgeber") || i || l.includes("/auth/")
          ? (0, n.jsxs)(n.Fragment, { children: [s, (0, n.jsx)(f, {})] })
          : (0, n.jsxs)(n.Fragment, {
              children: [
                (0, n.jsx)(t.M, {}),
                (0, n.jsx)("main", { className: "min-h-screen", children: s }),
                (0, n.jsx)(a.i, {}),
                (0, n.jsx)(f, {}),
              ],
            });
      }
    },
    66952: (e, s, l) => {
      Promise.resolve().then(l.bind(l, 26548));
    },
  },
  (e) => {
    var s = (s) => e((e.s = s));
    (e.O(0, [46593, 36209, 84121, 72076, 77358], () => s(66952)),
      (_N_E = e.O()));
  },
]);
