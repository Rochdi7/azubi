(self.webpackChunk_N_E = self.webpackChunk_N_E || []).push([
  [41679],
  {
    16619: (e, t, s) => {
      "use strict";
      s.d(t, { ChangelogContent: () => v });
      var a = s(70207),
        r = s(87223),
        l = s(27239),
        n = s(17773),
        i = s(84217),
        d = s(17802),
        c = s(82110);
      let o = {
          feature: "bg-primary text-white",
          improvement: "bg-secondary text-secondary-foreground",
          update: "bg-beige text-secondary",
        },
        m = {
          students: { en: "Students", de: "Studierende" },
          employers: { en: "Employers", de: "Arbeitgeber" },
          both: { en: "All", de: "Alle" },
        },
        u = {
          feature: { en: "Feature", de: "Funktion" },
          improvement: { en: "Improvement", de: "Verbesserung" },
          update: { en: "Update", de: "Aktualisierung" },
        };
      function x(e) {
        var t, s;
        let { entry: r, language: l = "en", className: n } = e,
          x = new Date(r.release_date),
          h = x.toLocaleDateString("de" === l ? "de-DE" : "en-US", {
            month: "short",
            day: "numeric",
            year: "numeric",
          }),
          p = Math.floor((Date.now() - x.getTime()) / 864e5),
          g = "de" === l && r.title_de ? r.title_de : r.title,
          b = (
            "de" === l && r.description_de ? r.description_de : r.description
          )
            .split("\n")
            .filter((e) => e.trim())
            .map((e) => e.replace(/^[•\-]\s*/, "").trim());
        return (0, a.jsxs)("article", {
          className: (0, c.cn)(
            "rounded-xl border border-border/20 bg-card p-6",
            "transition-all duration-200",
            "hover:border-border/40 hover:shadow-sm",
            n,
          ),
          itemScope: !0,
          itemType: "https://schema.org/Article",
          children: [
            (0, a.jsxs)("div", {
              className: "flex flex-col gap-3 mb-4",
              children: [
                (0, a.jsxs)("div", {
                  className: "flex items-start justify-between gap-4",
                  children: [
                    (0, a.jsxs)("div", {
                      className: "flex items-center gap-2 flex-1",
                      children: [
                        (0, a.jsx)("h3", {
                          className:
                            "text-lg font-semibold text-secondary leading-tight",
                          itemProp: "headline",
                          children: g,
                        }),
                        p <= 14 &&
                          (0, a.jsx)(d.E, {
                            className:
                              "bg-primary text-white text-xs px-2 py-0.5",
                            children: "de" === l ? "Neu" : "New",
                          }),
                      ],
                    }),
                    (0, a.jsxs)("div", {
                      className:
                        "flex items-center gap-1 text-sm text-muted-foreground flex-shrink-0",
                      children: [
                        (0, a.jsx)(i.A, {
                          className: "h-4 w-4",
                          "aria-hidden": "true",
                        }),
                        (0, a.jsx)("time", {
                          dateTime: r.release_date,
                          itemProp: "datePublished",
                          children: h,
                        }),
                      ],
                    }),
                  ],
                }),
                (0, a.jsxs)("div", {
                  className: "flex flex-wrap items-center gap-2",
                  children: [
                    (0, a.jsx)(d.E, {
                      variant: "secondary",
                      className: (0, c.cn)(
                        "font-medium capitalize",
                        o[r.category] || "bg-secondary",
                      ),
                      children:
                        (null === (t = u[r.category]) || void 0 === t
                          ? void 0
                          : t[l]) || r.category,
                    }),
                    "both" !== r.audience &&
                      (0, a.jsx)(d.E, {
                        variant: "outline",
                        className: "font-medium",
                        children:
                          (null === (s = m[r.audience]) || void 0 === s
                            ? void 0
                            : s[l]) || r.audience,
                      }),
                  ],
                }),
              ],
            }),
            (0, a.jsx)("ul", {
              className: "space-y-2",
              itemProp: "articleBody",
              children: b.map((e, t) =>
                (0, a.jsxs)(
                  "li",
                  {
                    className:
                      "flex items-start gap-2 text-sm text-muted-foreground",
                    children: [
                      (0, a.jsx)("span", {
                        className: "text-primary mt-1 flex-shrink-0",
                        "aria-hidden": "true",
                        children: "•",
                      }),
                      (0, a.jsx)("span", { className: "flex-1", children: e }),
                    ],
                  },
                  t,
                ),
              ),
            }),
            (0, a.jsx)("meta", {
              itemProp: "author",
              content: "GoAusbildung Team",
            }),
            (0, a.jsx)("meta", {
              itemProp: "dateModified",
              content: r.updated_at,
            }),
          ],
        });
      }
      function h(e) {
        let { month: t, className: s } = e;
        return (0, a.jsxs)("div", {
          className: (0, c.cn)("flex items-center gap-4 my-8", s),
          children: [
            (0, a.jsx)("h2", {
              className: "text-2xl font-bold text-secondary whitespace-nowrap",
              children: t,
            }),
            (0, a.jsx)("div", { className: "flex-1 h-px bg-border/30" }),
          ],
        });
      }
      var p = s(23744),
        g = s(39441),
        b = s(93501),
        f = s(10542),
        j = s.n(f);
      let y = {
        en: {
          title: "What's New at GoAusbildung",
          subtitle:
            "Stay updated with our latest features, improvements, and platform updates",
          noUpdates: "No updates to show yet. Check back soon!",
          filterCategory: "Filter by Type:",
          filterAudience: "Filter by Audience:",
          all: "All",
          feature: "Features",
          improvement: "Improvements",
          update: "Updates",
          students: "Students",
          employers: "Employers",
          both: "Everyone",
        },
        de: {
          title: "Was gibt es Neues bei GoAusbildung",
          subtitle:
            "Bleiben Sie \xfcber neue Features, Verbesserungen und Updates informiert",
          noUpdates:
            "Noch keine Updates verf\xfcgbar. Schauen Sie bald wieder vorbei!",
          filterCategory: "Nach Typ filtern:",
          filterAudience: "Nach Zielgruppe filtern:",
          all: "Alle",
          feature: "Funktionen",
          improvement: "Verbesserungen",
          update: "Aktualisierungen",
          students: "Studierende",
          employers: "Arbeitgeber",
          both: "Alle",
        },
      };
      function v(e) {
        let { groupedEntries: t } = e,
          [s, i] = (0, r.useState)("en"),
          [d, c] = (0, r.useState)("all"),
          [o, m] = (0, r.useState)("all"),
          u = y[s],
          f = (0, r.useMemo)(
            () =>
              t
                .map((e) => ({
                  ...e,
                  entries: e.entries.filter((e) => {
                    let t = "all" === d || e.category === d,
                      s =
                        "all" === o ||
                        e.audience === o ||
                        "both" === e.audience;
                    return t && s;
                  }),
                }))
                .filter((e) => e.entries.length > 0),
            [t, d, o],
          );
        return (0, a.jsx)("main", {
          className: "min-h-screen bg-background",
          children: (0, a.jsxs)("div", {
            className: "container max-w-4xl mx-auto px-4 py-8 md:py-12",
            children: [
              (0, a.jsxs)("header", {
                className: "text-center mb-12",
                children: [
                  (0, a.jsx)("div", {
                    className:
                      "inline-flex items-center justify-center w-16 h-16 rounded-full bg-primary/10 mb-4",
                    "aria-hidden": "true",
                    children: (0, a.jsx)(l.A, {
                      className: "w-8 h-8 text-primary",
                    }),
                  }),
                  (0, a.jsx)("h1", {
                    className:
                      "text-3xl md:text-4xl font-bold text-secondary mb-3",
                    children: u.title,
                  }),
                  (0, a.jsx)("p", {
                    className:
                      "text-lg text-muted-foreground max-w-2xl mx-auto mb-6",
                    children: u.subtitle,
                  }),
                  (0, a.jsx)("div", {
                    className: "flex justify-center mb-6",
                    children: (0, a.jsx)(p.J, {
                      currentLanguage: s,
                      onLanguageChange: i,
                    }),
                  }),
                  (0, a.jsxs)("div", {
                    className: "flex items-center justify-between gap-4",
                    children: [
                      (0, a.jsxs)("div", {
                        className: "flex items-center gap-3",
                        children: [
                          (0, a.jsxs)(b.l6, {
                            value: d,
                            onValueChange: (e) => c(e),
                            children: [
                              (0, a.jsx)(b.bq, {
                                className: "w-[160px]",
                                children: (0, a.jsx)(b.yv, {}),
                              }),
                              (0, a.jsxs)(b.gC, {
                                children: [
                                  (0, a.jsxs)(b.eb, {
                                    value: "all",
                                    children: [
                                      u.all,
                                      " ",
                                      "de" === s ? "Typen" : "Types",
                                    ],
                                  }),
                                  (0, a.jsx)(b.eb, {
                                    value: "feature",
                                    children: u.feature,
                                  }),
                                  (0, a.jsx)(b.eb, {
                                    value: "improvement",
                                    children: u.improvement,
                                  }),
                                  (0, a.jsx)(b.eb, {
                                    value: "update",
                                    children: u.update,
                                  }),
                                ],
                              }),
                            ],
                          }),
                          (0, a.jsxs)(b.l6, {
                            value: o,
                            onValueChange: (e) => m(e),
                            children: [
                              (0, a.jsx)(b.bq, {
                                className: "w-[160px]",
                                children: (0, a.jsx)(b.yv, {}),
                              }),
                              (0, a.jsxs)(b.gC, {
                                children: [
                                  (0, a.jsxs)(b.eb, {
                                    value: "all",
                                    children: [
                                      u.all,
                                      " ",
                                      "de" === s ? "Zielgruppen" : "Audiences",
                                    ],
                                  }),
                                  (0, a.jsx)(b.eb, {
                                    value: "students",
                                    children: u.students,
                                  }),
                                  (0, a.jsx)(b.eb, {
                                    value: "employers",
                                    children: u.employers,
                                  }),
                                ],
                              }),
                            ],
                          }),
                        ],
                      }),
                      (0, a.jsx)(j(), {
                        href: "/changelog/feed.xml",
                        target: "_blank",
                        children: (0, a.jsxs)(g.$, {
                          variant: "outline",
                          size: "sm",
                          className: "gap-2",
                          children: [
                            (0, a.jsx)(n.A, { className: "w-4 h-4" }),
                            "RSS",
                          ],
                        }),
                      }),
                    ],
                  }),
                ],
              }),
              (0, a.jsx)("section", {
                className: "space-y-8",
                "aria-label": "Changelog entries",
                children:
                  0 === f.length
                    ? (0, a.jsx)("div", {
                        className: "text-center py-12",
                        children: (0, a.jsx)("p", {
                          className: "text-muted-foreground",
                          children: u.noUpdates,
                        }),
                      })
                    : f.map((e) =>
                        (0, a.jsxs)(
                          "div",
                          {
                            children: [
                              (0, a.jsx)(h, { month: e.month }),
                              (0, a.jsx)("div", {
                                className: "space-y-4",
                                children: e.entries.map((e) =>
                                  (0, a.jsx)(
                                    x,
                                    { entry: e, language: s },
                                    e.id,
                                  ),
                                ),
                              }),
                            ],
                          },
                          e.month,
                        ),
                      ),
              }),
            ],
          }),
        });
      }
    },
    94170: (e, t, s) => {
      (Promise.resolve().then(s.t.bind(s, 4463, 23)),
        Promise.resolve().then(s.bind(s, 16619)));
    },
  },
  (e) => {
    var t = (t) => e((e.s = t));
    (e.O(0, [46593, 36209, 84121, 72076, 77358], () => t(94170)),
      (_N_E = e.O()));
  },
]);
