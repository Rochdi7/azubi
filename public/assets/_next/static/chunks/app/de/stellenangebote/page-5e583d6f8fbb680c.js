(self.webpackChunk_N_E = self.webpackChunk_N_E || []).push([
  [51849],
  {
    49291: (e, s, a) => {
      "use strict";
      (a.r(s), a.d(s, { default: () => E }));
      var l = a(70207),
        r = a(87223),
        t = a(18051),
        n = a(54604),
        i = a(83106),
        c = a(80187),
        d = a(17802),
        o = a(58212),
        m = a(52141),
        x = a(35121),
        u = a(61216),
        h = a(73235),
        p = a(88117),
        b = a(5101),
        g = a(27239),
        j = a(46031),
        f = a(31670),
        N = a(84222),
        w = a(21402),
        v = a(95889);
      function y() {
        let [e, s] = (0, r.useState)([]),
          [a, o] = (0, r.useState)(0),
          [y, E] = (0, r.useState)(!0),
          k = (0, t.useSearchParams)();
        return (
          k.get("search"),
          k.get("location"),
          k.get("sector"),
          k.get("jobType"),
          k.get("startDate"),
          k.get("page"),
          (0, r.useEffect)(() => {
            (async function () {
              let e = (0, n.createClientComponentClient)(),
                { data: a, count: l } = await e
                  .from("job_postings")
                  .select(
                    "\n          *,\n          employer:employer_profiles!inner(\n            id,\n            company_name,\n            company_logo_url,\n            company_slug,\n            industry_sector,\n            company_size,\n            city,\n            is_verified\n          )\n        ",
                    { count: "exact" },
                  )
                  .eq("status", "active")
                  .order("published_at", { ascending: !1 })
                  .range(0, 11);
              (s(a || []), o(l || 0), E(!1));
            })();
          }, []),
          (0, l.jsxs)("div", {
            className: "flex flex-col",
            children: [
              (0, l.jsx)(h.d, {
                badge: { text: "Stellenangebote", icon: p.A },
                title: "Finden Sie Ihre Traumausbildung",
                subtitle: "Entdecken Sie ".concat(
                  a > 0 ? a + "+" : "tausende",
                  " Ausbildungspl\xe4tze von verifizierten deutschen Arbeitgebern",
                ),
                primaryCta: {
                  text: "Alle Jobs durchsuchen",
                  href: "#jobs-section",
                  icon: (0, l.jsx)(p.A, { className: "w-5 h-5 mr-2" }),
                },
                secondaryCta: {
                  text: "Profil erstellen",
                  href: "/auth?signup",
                  icon: (0, l.jsx)(b.A, { className: "w-5 h-5 mr-2" }),
                },
                backgroundImage: "hamburg-harbor-hero-autumn.webp",
                backgroundAlt:
                  "Hamburger Hafen im Herbst - Deutschlands Wirtschafts- und Hafenstadt",
                landmarkCaption: "Hamburger Hafen, Deutschland",
                alignment: "left",
              }),
              (0, l.jsx)("section", {
                id: "jobs-section",
                className: "py-16",
                children: (0, l.jsx)("div", {
                  className: "container mx-auto px-4 md:px-6",
                  children: y
                    ? (0, l.jsx)(_, {})
                    : (0, l.jsx)(i._, {
                        initialJobs: e,
                        initialCount: a,
                        isPublicView: !0,
                        language: "de",
                      }),
                }),
              }),
              (0, l.jsx)("section", {
                id: "application-tools",
                className: "py-16 sm:py-20 bg-primary",
                children: (0, l.jsxs)("div", {
                  className: "container mx-auto px-4",
                  children: [
                    (0, l.jsx)(u.X, {
                      title: "Heben Sie sich von anderen Bewerbern ab",
                      description:
                        "Nutzen Sie unsere KI-gest\xfctzten Tools f\xfcr perfekte Bewerbungen",
                      titleClassName: "text-white",
                      descriptionClassName: "text-white/90",
                      className: "mb-12",
                    }),
                    (0, l.jsxs)("div", {
                      className: "grid md:grid-cols-3 gap-6",
                      children: [
                        (0, l.jsx)("a", {
                          href: "/tools/cover-letter",
                          className: "group",
                          children: (0, l.jsxs)(c.Zp, {
                            className:
                              "relative h-full p-6 bg-background border-0 hover:shadow-lg transition-all duration-300 rounded-2xl",
                            children: [
                              (0, l.jsx)(d.E, {
                                className:
                                  "absolute -top-2 right-6 text-xs px-2 py-0.5 font-medium bg-secondary text-foreground border-border rounded-full",
                                children: "KI-gest\xfctzt",
                              }),
                              (0, l.jsxs)("div", {
                                className: "relative",
                                children: [
                                  (0, l.jsx)("div", {
                                    className:
                                      "w-12 h-12 rounded-2xl bg-card flex items-center justify-center text-white mb-4",
                                    children: (0, l.jsx)(g.A, {
                                      className: "w-6 h-6",
                                    }),
                                  }),
                                  (0, l.jsx)(m.D, {
                                    level: 3,
                                    className: "mb-2",
                                    children: "Anschreiben-Generator",
                                  }),
                                  (0, l.jsx)(x.f, {
                                    size: "sm",
                                    className: "mb-4",
                                    children:
                                      "Deutsche Anschreiben in Sekunden",
                                  }),
                                  (0, l.jsxs)("div", {
                                    className:
                                      "flex items-center justify-between",
                                    children: [
                                      (0, l.jsx)(x.f, {
                                        size: "xs",
                                        className: "text-muted-foreground",
                                        children: "10.000+ erstellt",
                                      }),
                                      (0, l.jsxs)("div", {
                                        className:
                                          "flex items-center text-sm font-medium text-primary opacity-0 group-hover:opacity-100 transition-opacity duration-300",
                                        children: [
                                          (0, l.jsx)("span", {
                                            children: "Jetzt testen",
                                          }),
                                          (0, l.jsx)(j.A, {
                                            className: "w-4 h-4 ml-1",
                                          }),
                                        ],
                                      }),
                                    ],
                                  }),
                                ],
                              }),
                            ],
                          }),
                        }),
                        (0, l.jsx)(w.ProtectedLink, {
                          href: "/dashboard/interview",
                          className: "group",
                          children: (0, l.jsxs)(c.Zp, {
                            className:
                              "relative h-full p-6 bg-background border-0 hover:shadow-lg transition-all duration-300 rounded-2xl",
                            children: [
                              (0, l.jsx)(d.E, {
                                className:
                                  "absolute -top-2 right-6 text-xs px-2 py-0.5 font-medium bg-secondary text-foreground border-border rounded-full",
                                children: "Neu",
                              }),
                              (0, l.jsxs)("div", {
                                className: "relative",
                                children: [
                                  (0, l.jsx)("div", {
                                    className:
                                      "w-12 h-12 rounded-2xl bg-primary flex items-center justify-center text-white mb-4",
                                    children: (0, l.jsx)(f.A, {
                                      className: "w-6 h-6",
                                    }),
                                  }),
                                  (0, l.jsx)(m.D, {
                                    level: 3,
                                    className: "mb-2",
                                    children:
                                      "KI-Vorstellungsgespr\xe4ch-Simulator",
                                  }),
                                  (0, l.jsx)(x.f, {
                                    size: "sm",
                                    className: "mb-4",
                                    children: "\xdcben mit Sprach-KI",
                                  }),
                                  (0, l.jsxs)("div", {
                                    className:
                                      "flex items-center justify-between",
                                    children: [
                                      (0, l.jsx)(x.f, {
                                        size: "xs",
                                        className: "text-muted-foreground",
                                        children: "500+ t\xe4gliche Sitzungen",
                                      }),
                                      (0, l.jsxs)("div", {
                                        className:
                                          "flex items-center text-sm font-medium text-primary opacity-0 group-hover:opacity-100 transition-opacity duration-300",
                                        children: [
                                          (0, l.jsx)("span", {
                                            children: "Jetzt testen",
                                          }),
                                          (0, l.jsx)(j.A, {
                                            className: "w-4 h-4 ml-1",
                                          }),
                                        ],
                                      }),
                                    ],
                                  }),
                                ],
                              }),
                            ],
                          }),
                        }),
                        (0, l.jsx)(w.ProtectedLink, {
                          href: "/dashboard/german",
                          className: "group",
                          children: (0, l.jsxs)(c.Zp, {
                            className:
                              "relative h-full p-6 bg-background border-0 hover:shadow-lg transition-all duration-300 rounded-2xl",
                            children: [
                              (0, l.jsx)(d.E, {
                                className:
                                  "absolute -top-2 right-6 text-xs px-2 py-0.5 font-medium bg-secondary text-foreground border-border rounded-full",
                                children: "Beliebteste",
                              }),
                              (0, l.jsxs)("div", {
                                className: "relative",
                                children: [
                                  (0, l.jsx)("div", {
                                    className:
                                      "w-12 h-12 rounded-2xl bg-card flex items-center justify-center text-white mb-4",
                                    children: (0, l.jsx)(N.A, {
                                      className: "w-6 h-6",
                                    }),
                                  }),
                                  (0, l.jsx)(m.D, {
                                    level: 3,
                                    className: "mb-2",
                                    children: "Deutschsprachtraining",
                                  }),
                                  (0, l.jsx)(x.f, {
                                    size: "sm",
                                    className: "mb-4",
                                    children:
                                      "Deutsch meistern mit KI-Gespr\xe4chen",
                                  }),
                                  (0, l.jsxs)("div", {
                                    className:
                                      "flex items-center justify-between",
                                    children: [
                                      (0, l.jsx)(x.f, {
                                        size: "xs",
                                        className: "text-muted-foreground",
                                        children: "15.000+ Lernende",
                                      }),
                                      (0, l.jsxs)("div", {
                                        className:
                                          "flex items-center text-sm font-medium text-primary opacity-0 group-hover:opacity-100 transition-opacity duration-300",
                                        children: [
                                          (0, l.jsx)("span", {
                                            children: "Jetzt testen",
                                          }),
                                          (0, l.jsx)(j.A, {
                                            className: "w-4 h-4 ml-1",
                                          }),
                                        ],
                                      }),
                                    ],
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
              }),
              (0, l.jsx)("section", {
                className: "py-16 bg-background",
                children: (0, l.jsx)("div", {
                  className: "container px-4 md:px-6",
                  children: (0, l.jsx)(v.HomepageLeadMagnet, {
                    pdfType: "winning-applications",
                  }),
                }),
              }),
            ],
          })
        );
      }
      function _() {
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
                    (0, l.jsx)(o.E, { className: "h-10 w-full rounded-full" }),
                    (0, l.jsx)(o.E, { className: "h-10 w-full rounded-full" }),
                  ],
                }),
                (0, l.jsxs)("div", {
                  className: "grid grid-cols-1 md:grid-cols-3 gap-4",
                  children: [
                    (0, l.jsx)(o.E, { className: "h-10 w-full rounded-full" }),
                    (0, l.jsx)(o.E, { className: "h-10 w-full rounded-full" }),
                    (0, l.jsx)(o.E, { className: "h-10 w-full rounded-full" }),
                  ],
                }),
              ],
            }),
            (0, l.jsx)("div", {
              className: "mb-6",
              children: (0, l.jsx)(o.E, { className: "h-4 w-[200px]" }),
            }),
            (0, l.jsx)("div", {
              className: "grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6",
              children: Array.from({ length: 6 }).map((e, s) =>
                (0, l.jsxs)(
                  "div",
                  {
                    className:
                      "bg-white border-2 border-[rgba(52,79,31,0.1)] rounded-xl shadow-[0_2px_4px_rgba(52,79,31,0.06),0_1px_2px_rgba(52,79,31,0.04)] p-6 flex flex-col h-full",
                    children: [
                      (0, l.jsxs)("div", {
                        className: "flex items-start justify-between mb-4",
                        children: [
                          (0, l.jsx)(o.E, {
                            className: "h-12 w-12 rounded-lg",
                          }),
                          (0, l.jsx)(o.E, {
                            className: "h-6 w-[60px] rounded-full",
                          }),
                        ],
                      }),
                      (0, l.jsx)(o.E, { className: "h-6 w-full mb-1" }),
                      (0, l.jsx)(o.E, { className: "h-4 w-[140px] mb-3" }),
                      (0, l.jsxs)("div", {
                        className: "flex items-center justify-between mb-4",
                        children: [
                          (0, l.jsx)(o.E, { className: "h-3 w-[80px]" }),
                          (0, l.jsx)(o.E, { className: "h-3 w-[80px]" }),
                        ],
                      }),
                      (0, l.jsxs)("div", {
                        className: "flex flex-wrap gap-2 mb-4",
                        children: [
                          (0, l.jsx)(o.E, {
                            className: "h-6 w-[80px] rounded-full",
                          }),
                          (0, l.jsx)(o.E, {
                            className: "h-6 w-[70px] rounded-full",
                          }),
                          (0, l.jsx)(o.E, {
                            className: "h-6 w-[50px] rounded-full",
                          }),
                        ],
                      }),
                      (0, l.jsx)(o.E, { className: "h-4 w-full mb-1" }),
                      (0, l.jsx)(o.E, { className: "h-4 w-full mb-1" }),
                      (0, l.jsx)(o.E, { className: "h-4 w-3/4 mb-4" }),
                      (0, l.jsx)(o.E, { className: "h-4 w-[120px] mb-4" }),
                      (0, l.jsx)("div", {
                        className: "mt-auto",
                        children: (0, l.jsx)(o.E, {
                          className: "h-10 w-full rounded-full",
                        }),
                      }),
                    ],
                  },
                  s,
                ),
              ),
            }),
          ],
        });
      }
      function E() {
        return (0, l.jsx)(r.Suspense, {
          fallback: (0, l.jsx)("div", { children: "Loading..." }),
          children: (0, l.jsx)(y, {}),
        });
      }
    },
    50785: (e, s, a) => {
      Promise.resolve().then(a.bind(a, 49291));
    },
  },
  (e) => {
    var s = (s) => e((e.s = s));
    (e.O(0, [46593, 36209, 84121, 72076, 77358], () => s(50785)),
      (_N_E = e.O()));
  },
]);
