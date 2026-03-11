(self.webpackChunk_N_E = self.webpackChunk_N_E || []).push([
  [52758],
  {
    48191: (e, s, a) => {
      "use strict";
      a.d(s, { CompaniesHubClient: () => m });
      var l = a(70207),
        r = a(87223),
        i = a(73235),
        n = a(16148),
        o = a(88117),
        t = a(5101),
        c = a(21881),
        d = a(58212);
      function m() {
        let [e, s] = (0, r.useState)([]),
          [a, d] = (0, r.useState)(0),
          [m, x] = (0, r.useState)(!0);
        return (
          (0, r.useEffect)(() => {
            (async function () {
              try {
                let e = await fetch("/api/companies?limit=100&offset=0"),
                  a = await e.json();
                a.success && (s(a.companies || []), d(a.total || 0));
              } catch (e) {
                console.error("Error fetching companies:", e);
              } finally {
                x(!1);
              }
            })();
          }, []),
          (0, l.jsxs)("div", {
            className: "flex flex-col",
            children: [
              (0, l.jsx)(i.d, {
                badge: { text: "Employer Directory", icon: n.A },
                title: "Find Your Perfect German Employer",
                subtitle: "Browse ".concat(
                  a > 0 ? a + "+" : "hundreds of",
                  " verified companies offering Ausbildung positions across Germany",
                ),
                primaryCta: {
                  text: "Browse All Employers",
                  href: "#companies-section",
                  icon: (0, l.jsx)(n.A, { className: "w-5 h-5 mr-2" }),
                },
                secondaryCta: {
                  text: "View All Jobs",
                  href: "/jobs",
                  icon: (0, l.jsx)(o.A, { className: "w-5 h-5 mr-2" }),
                },
                backgroundImage: "hamburg-harbor-hero-autumn.webp",
                backgroundAlt:
                  "Hamburg harbor in autumn - Germany's business and port city",
                landmarkCaption: "Hamburg Harbor, Germany",
                alignment: "left",
              }),
              (0, l.jsx)("section", {
                id: "companies-section",
                className: "py-16",
                children: (0, l.jsx)("div", {
                  className: "container mx-auto px-4 md:px-6",
                  children: m
                    ? (0, l.jsx)(u, {})
                    : (0, l.jsx)(c.X, { initialCompanies: e, initialCount: a }),
                }),
              }),
              (0, l.jsxs)("section", {
                className: "py-16 sm:py-20 relative overflow-hidden bg-primary",
                children: [
                  (0, l.jsxs)("div", {
                    className: "absolute inset-0 -z-10",
                    children: [
                      (0, l.jsx)("div", {
                        className:
                          "absolute top-0 left-1/4 w-96 h-96 bg-secondary/10 rounded-full blur-3xl animate-float-slow",
                      }),
                      (0, l.jsx)("div", {
                        className:
                          "absolute bottom-0 right-1/4 w-96 h-96 bg-background/10 rounded-full blur-3xl animate-float-slow-reverse",
                      }),
                    ],
                  }),
                  (0, l.jsx)("div", {
                    className: "container mx-auto px-4",
                    children: (0, l.jsxs)("div", {
                      className: "text-center max-w-2xl mx-auto",
                      children: [
                        (0, l.jsx)("h2", {
                          className:
                            "text-3xl md:text-4xl font-bold text-white mb-6",
                          children: "Are You an Employer?",
                        }),
                        (0, l.jsxs)("p", {
                          className: "text-lg text-white/90 mb-8",
                          children: [
                            "Join ",
                            a > 0 ? a + "+" : "hundreds of",
                            " companies hiring international talent through Ausbildung programs. Post your positions and connect with qualified candidates.",
                          ],
                        }),
                        (0, l.jsxs)("a", {
                          href: "/arbeitgeber/auth/anmeldung",
                          className:
                            "inline-flex items-center px-8 py-4 rounded-full bg-secondary text-white font-medium hover:bg-secondary/90 transition-colors",
                          children: [
                            "Post Your Jobs",
                            (0, l.jsx)(t.A, { className: "w-5 h-5 ml-2" }),
                          ],
                        }),
                      ],
                    }),
                  }),
                ],
              }),
            ],
          })
        );
      }
      function u() {
        return (0, l.jsxs)("div", {
          className: "w-full",
          children: [
            (0, l.jsxs)("div", {
              className:
                "bg-white border-2 border-[rgba(52,79,31,0.1)] rounded-xl shadow-[0_2px_4px_rgba(52,79,31,0.06),0_1px_2px_rgba(52,79,31,0.04)] p-6 mb-8",
              children: [
                (0, l.jsxs)("div", {
                  className: "grid grid-cols-1 md:grid-cols-2 gap-4 mb-4",
                  children: [
                    (0, l.jsx)(d.E, { className: "h-10 w-full rounded-full" }),
                    (0, l.jsx)(d.E, { className: "h-10 w-full rounded-full" }),
                  ],
                }),
                (0, l.jsxs)("div", {
                  className: "grid grid-cols-1 md:grid-cols-3 gap-4",
                  children: [
                    (0, l.jsx)(d.E, { className: "h-10 w-full rounded-full" }),
                    (0, l.jsx)(d.E, { className: "h-10 w-full rounded-full" }),
                    (0, l.jsx)(d.E, { className: "h-10 w-full rounded-full" }),
                  ],
                }),
              ],
            }),
            (0, l.jsx)("div", {
              className: "mb-6",
              children: (0, l.jsx)(d.E, { className: "h-4 w-[200px]" }),
            }),
            (0, l.jsx)("div", {
              className: "grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6",
              children: Array.from({ length: 6 }).map((e, s) =>
                (0, l.jsx)(d.E, { className: "h-[400px] rounded-xl" }, s),
              ),
            }),
          ],
        });
      }
    },
    54432: (e, s, a) => {
      Promise.resolve().then(a.bind(a, 48191));
    },
  },
  (e) => {
    var s = (s) => e((e.s = s));
    (e.O(0, [46593, 36209, 84121, 72076, 77358], () => s(54432)),
      (_N_E = e.O()));
  },
]);
