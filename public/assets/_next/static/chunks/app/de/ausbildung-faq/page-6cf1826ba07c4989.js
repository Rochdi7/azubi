(self.webpackChunk_N_E = self.webpackChunk_N_E || []).push([
  [67058],
  {
    21505: (e, s, l) => {
      Promise.resolve().then(l.bind(l, 91996));
    },
    91996: (e, s, l) => {
      "use strict";
      l.d(s, { AusbildungFAQContent: () => j });
      var n = l(70207),
        a = l(87223),
        t = l(47161),
        r = l(43431),
        c = l(80866),
        d = l(51613),
        i = l(39441),
        o = l(40167),
        m = l(17802),
        x = l(52141),
        u = l(35121),
        h = l(48242),
        g = l(82110),
        f = l(10542),
        b = l.n(f),
        p = l(50018);
      function j(e) {
        let { categories: s, questions: l, categoryCounts: f } = e,
          [j, N] = (0, a.useState)(""),
          [w, v] = (0, a.useState)("all"),
          [y, k] = (0, a.useState)(!1),
          [C, A] = (0, a.useState)(new Set()),
          S = "all" !== w,
          F = (0, a.useMemo)(() => {
            let e = l;
            if (
              ("all" !== w && (e = e.filter((e) => e.category.slug === w)), j)
            ) {
              let s = j.toLowerCase();
              e = e.filter(
                (e) =>
                  e.question.toLowerCase().includes(s) ||
                  e.full_answer.toLowerCase().includes(s),
              );
            }
            return e;
          }, [j, w, l]),
          _ = (e) => {
            A((s) => {
              let l = new Set(s);
              return (l.has(e) ? l.delete(e) : l.add(e), l);
            });
          },
          z = () => {
            (v("all"), N(""));
          };
        return (0, n.jsxs)("div", {
          className: "flex flex-col min-h-screen",
          children: [
            (0, n.jsx)("section", {
              className: "py-16 relative overflow-hidden bg-background",
              children: (0, n.jsxs)("div", {
                className:
                  "container px-4 md:px-6 max-w-4xl mx-auto text-center relative z-10",
                children: [
                  (0, n.jsx)("div", {
                    className:
                      "relative w-32 h-32 md:w-40 md:h-40 mx-auto mb-6 animate-float",
                    children: (0, n.jsx)(p.default, {
                      src: "/mascot/mascot_thinking_female.webp",
                      alt: "Mascot helping with FAQs",
                      fill: !0,
                      className: "object-contain drop-shadow-2xl",
                      priority: !0,
                    }),
                  }),
                  (0, n.jsxs)(m.E, {
                    className:
                      "px-4 py-1.5 text-base bg-secondary/10 text-secondary font-medium border border-secondary/20 mb-6 rounded-full",
                    children: [
                      (0, n.jsx)(t.A, { className: "w-4 h-4 mr-2" }),
                      l.length,
                      "+ Fragen beantwortet",
                    ],
                  }),
                  (0, n.jsx)(x.D, {
                    level: 1,
                    className: "mb-3",
                    children: "Ausbildung FAQ",
                  }),
                  (0, n.jsx)(u.f, {
                    size: "lg",
                    className: "text-muted-foreground mb-8",
                    children:
                      "Schnelle Antworten auf alle Ihre Fragen zur deutschen Berufsausbildung",
                  }),
                  (0, n.jsx)("div", {
                    className: "w-full",
                    children: (0, n.jsx)("div", {
                      className: "relative max-w-2xl mx-auto mb-6 px-4 sm:px-0",
                      children: (0, n.jsxs)("div", {
                        className: "relative flex items-center",
                        children: [
                          (0, n.jsx)(r.A, {
                            className:
                              "absolute left-3 sm:left-4 h-4 sm:h-5 w-4 sm:w-5 text-secondary/60 z-10",
                          }),
                          (0, n.jsx)(o.p, {
                            type: "text",
                            placeholder:
                              "Fragen, Antworten oder Themen suchen...",
                            value: j,
                            onChange: (e) => N(e.target.value),
                            className: (0, g.cn)(
                              "w-full pl-10 sm:pl-12 pr-14 sm:pr-20 h-12 sm:h-14",
                              "text-sm sm:text-base rounded-full",
                              "transition-all duration-300",
                              "border-secondary/20 bg-background",
                              "focus:border-secondary focus:ring-2 focus:ring-secondary/20",
                              "placeholder:text-muted-foreground placeholder:text-xs sm:placeholder:text-sm",
                            ),
                          }),
                          (0, n.jsxs)(h.rI, {
                            open: y,
                            onOpenChange: k,
                            children: [
                              (0, n.jsx)(h.ty, {
                                asChild: !0,
                                children: (0, n.jsxs)(i.$, {
                                  variant: "ghost",
                                  size: "sm",
                                  className: (0, g.cn)(
                                    "absolute right-2 h-9 sm:h-10 px-2 sm:px-3",
                                    "rounded-full transition-all duration-300",
                                    "hover:bg-secondary/10",
                                    S && "bg-secondary/10 text-secondary",
                                  ),
                                  children: [
                                    (0, n.jsx)(c.A, { className: "h-4 w-4" }),
                                    S &&
                                      (0, n.jsx)(m.E, {
                                        className:
                                          "ml-1.5 h-4 sm:h-5 min-w-[16px] sm:min-w-[20px] p-0 bg-primary text-primary-foreground text-[10px] sm:text-xs flex items-center justify-center rounded-full",
                                        children: "1",
                                      }),
                                  ],
                                }),
                              }),
                              (0, n.jsxs)(h.SQ, {
                                className:
                                  "w-[calc(100vw-2rem)] max-w-sm sm:w-80 p-4 bg-background border-secondary/20 rounded-2xl",
                                align: "end",
                                children: [
                                  (0, n.jsxs)(h.lp, {
                                    className:
                                      "flex items-center gap-2 text-secondary",
                                    children: [
                                      (0, n.jsx)(c.A, { className: "h-4 w-4" }),
                                      "Nach Kategorie filtern",
                                    ],
                                  }),
                                  (0, n.jsx)(h.mB, { className: "bg-border" }),
                                  (0, n.jsxs)("div", {
                                    className: "space-y-2 mt-4",
                                    children: [
                                      (0, n.jsxs)("button", {
                                        onClick: () => {
                                          (v("all"), k(!1));
                                        },
                                        className: (0, g.cn)(
                                          "w-full text-left px-3 py-2 rounded-lg transition-colors",
                                          "all" === w
                                            ? "bg-secondary/10 text-secondary font-medium"
                                            : "hover:bg-muted text-foreground",
                                        ),
                                        children: [
                                          "Alle Kategorien (",
                                          l.length,
                                          ")",
                                        ],
                                      }),
                                      s.map((e) =>
                                        (0, n.jsxs)(
                                          "button",
                                          {
                                            onClick: () => {
                                              (v(e.slug), k(!1));
                                            },
                                            className: (0, g.cn)(
                                              "w-full text-left px-3 py-2 rounded-lg transition-colors",
                                              w === e.slug
                                                ? "bg-secondary/10 text-secondary font-medium"
                                                : "hover:bg-muted text-foreground",
                                            ),
                                            children: [
                                              e.name,
                                              " (",
                                              f[e.slug] || 0,
                                              ")",
                                            ],
                                          },
                                          e.id,
                                        ),
                                      ),
                                    ],
                                  }),
                                  S &&
                                    (0, n.jsx)("div", {
                                      className:
                                        "pt-4 mt-4 border-t border-border",
                                      children: (0, n.jsx)(i.$, {
                                        variant: "outline",
                                        size: "sm",
                                        onClick: z,
                                        className: "w-full rounded-full",
                                        children: "Filter l\xf6schen",
                                      }),
                                    }),
                                ],
                              }),
                            ],
                          }),
                        ],
                      }),
                    }),
                  }),
                ],
              }),
            }),
            (0, n.jsx)("section", {
              className: "py-12 bg-muted/30",
              children: (0, n.jsxs)("div", {
                className: "container mx-auto px-4 max-w-4xl",
                children: [
                  (0, n.jsx)("div", {
                    className: "mb-8",
                    children: (0, n.jsx)(u.f, {
                      className: "text-muted-foreground",
                      children:
                        j || "all" !== w
                          ? ""
                              .concat(F.length, " Frage")
                              .concat(1 !== F.length ? "n" : "", " gefunden")
                          : "".concat(l.length, " h\xe4ufig gestellte Fragen"),
                    }),
                  }),
                  (0, n.jsx)("div", {
                    className: "space-y-4",
                    children:
                      0 === F.length
                        ? (0, n.jsxs)("div", {
                            className: "text-center py-12",
                            children: [
                              (0, n.jsx)(t.A, {
                                className:
                                  "h-12 w-12 text-muted-foreground mx-auto mb-4",
                              }),
                              (0, n.jsx)(u.f, {
                                size: "lg",
                                className: "text-muted-foreground",
                                children:
                                  "Keine Fragen gefunden, die Ihrer Suche entsprechen.",
                              }),
                              (0, n.jsx)(i.$, {
                                variant: "outline",
                                className: "mt-4 rounded-full",
                                onClick: z,
                                children: "Filter l\xf6schen",
                              }),
                            ],
                          })
                        : F.map((e) => {
                            let s = C.has(e.id);
                            return (0, n.jsxs)(
                              "div",
                              {
                                className:
                                  "border border-border rounded-2xl bg-background overflow-hidden",
                                children: [
                                  (0, n.jsxs)("button", {
                                    className:
                                      "w-full text-left p-6 flex items-center justify-between hover:bg-muted/50 transition-colors focus:outline-none focus:ring-2 focus:ring-secondary/20 focus:ring-inset",
                                    onClick: () => _(e.id),
                                    "aria-expanded": s,
                                    children: [
                                      (0, n.jsx)(x.D, {
                                        level: 3,
                                        className: "pr-4",
                                        children: e.question,
                                      }),
                                      (0, n.jsx)(d.A, {
                                        className: (0, g.cn)(
                                          "h-5 w-5 text-secondary transition-transform duration-200 flex-shrink-0",
                                          s && "rotate-180",
                                        ),
                                      }),
                                    ],
                                  }),
                                  (0, n.jsx)("div", {
                                    className: (0, g.cn)(
                                      "transition-all duration-200 ease-in-out",
                                      s
                                        ? "opacity-100"
                                        : "max-h-0 opacity-0 overflow-hidden",
                                    ),
                                    children: (0, n.jsx)("div", {
                                      className: "px-6 pb-6",
                                      children: (0, n.jsx)("div", {
                                        className:
                                          "border-t border-border pt-4",
                                        children: (0, n.jsx)("div", {
                                          className:
                                            "text-muted-foreground leading-relaxed",
                                          children: e.full_answer
                                            .split("\n")
                                            .map((e, s) =>
                                              e.trim()
                                                ? (0, n.jsx)(
                                                    "div",
                                                    {
                                                      className: "mb-1",
                                                      children: ((e) => {
                                                        let l = [],
                                                          a = e,
                                                          t = 0;
                                                        for (; a.length > 0; ) {
                                                          let e =
                                                            a.match(
                                                              /\*\*([^*]+)\*\*/,
                                                            );
                                                          if (e)
                                                            (e.index > 0 &&
                                                              l.push(
                                                                a.substring(
                                                                  0,
                                                                  e.index,
                                                                ),
                                                              ),
                                                              l.push(
                                                                (0, n.jsx)(
                                                                  "strong",
                                                                  {
                                                                    children:
                                                                      e[1],
                                                                  },
                                                                  "bold-"
                                                                    .concat(
                                                                      s,
                                                                      "-",
                                                                    )
                                                                    .concat(
                                                                      t++,
                                                                    ),
                                                                ),
                                                              ),
                                                              (a = a.substring(
                                                                e.index +
                                                                  e[0].length,
                                                              )));
                                                          else {
                                                            let e =
                                                              a.match(
                                                                /\*([^*]+)\*/,
                                                              );
                                                            if (e)
                                                              (e.index > 0 &&
                                                                l.push(
                                                                  a.substring(
                                                                    0,
                                                                    e.index,
                                                                  ),
                                                                ),
                                                                l.push(
                                                                  (0, n.jsx)(
                                                                    "em",
                                                                    {
                                                                      children:
                                                                        e[1],
                                                                    },
                                                                    "italic-"
                                                                      .concat(
                                                                        s,
                                                                        "-",
                                                                      )
                                                                      .concat(
                                                                        t++,
                                                                      ),
                                                                  ),
                                                                ),
                                                                (a =
                                                                  a.substring(
                                                                    e.index +
                                                                      e[0]
                                                                        .length,
                                                                  )));
                                                            else {
                                                              a && l.push(a);
                                                              break;
                                                            }
                                                          }
                                                        }
                                                        return l;
                                                      })(e),
                                                    },
                                                    s,
                                                  )
                                                : (0, n.jsx)("br", {}, s),
                                            ),
                                        }),
                                      }),
                                    }),
                                  }),
                                ],
                              },
                              e.id,
                            );
                          }),
                  }),
                ],
              }),
            }),
            (0, n.jsx)("section", {
              className: "py-16 bg-secondary/5",
              children: (0, n.jsxs)("div", {
                className: "container mx-auto px-4 text-center max-w-2xl",
                children: [
                  (0, n.jsx)("div", {
                    className:
                      "relative w-32 h-32 md:w-40 md:h-40 mx-auto mb-6 animate-float",
                    children: (0, n.jsx)(p.default, {
                      src: "/mascot/mascot_welcoming.webp",
                      alt: "Mascot welcoming you to consultation",
                      fill: !0,
                      className: "object-contain drop-shadow-2xl",
                    }),
                  }),
                  (0, n.jsx)(x.D, {
                    level: 2,
                    className: "mb-4",
                    children: "Haben Sie noch Fragen?",
                  }),
                  (0, n.jsx)(u.f, {
                    className: "text-muted-foreground mb-6",
                    children:
                      "Starten Sie jetzt Ihre Ausbildungsreise in Deutschland",
                  }),
                  (0, n.jsxs)("div", {
                    className: "flex flex-col sm:flex-row gap-4 justify-center",
                    children: [
                      (0, n.jsx)(i.$, {
                        asChild: !0,
                        className: "rounded-full",
                        children: (0, n.jsx)(b(), {
                          href: "/de/stellenangebote",
                          children: "Stellenangebote durchsuchen",
                        }),
                      }),
                      (0, n.jsx)(i.$, {
                        asChild: !0,
                        variant: "outline",
                        className: "rounded-full",
                        children: (0, n.jsx)(b(), {
                          href: "/tools/eligibility-checker",
                          children: "Eignung pr\xfcfen",
                        }),
                      }),
                    ],
                  }),
                ],
              }),
            }),
          ],
        });
      }
    },
  },
  (e) => {
    var s = (s) => e((e.s = s));
    (e.O(0, [46593, 36209, 84121, 72076, 77358], () => s(21505)),
      (_N_E = e.O()));
  },
]);
