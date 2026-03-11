(self.webpackChunk_N_E = self.webpackChunk_N_E || []).push([
  [99036],
  {
    53846: (e, s, t) => {
      "use strict";
      t.d(s, { AusbildungFAQContent: () => f });
      var r = t(70207),
        a = t(87223),
        n = t(47161),
        l = t(43431),
        i = t(84222),
        o = t(80866),
        c = t(51613),
        d = t(39441),
        m = t(40167),
        u = t(17802),
        x = t(48242),
        h = t(82110),
        p = t(73235),
        g = t(52141),
        b = t(14207);
      function f(e) {
        let { categories: s, questions: t, categoryCounts: f } = e,
          [j, y] = (0, a.useState)(""),
          [N, v] = (0, a.useState)("all"),
          [w, k] = (0, a.useState)(!1),
          [A, C] = (0, a.useState)(new Set()),
          q = "all" !== N,
          F = (0, a.useMemo)(() => {
            let e = t;
            if (
              ("all" !== N && (e = e.filter((e) => e.category.slug === N)), j)
            ) {
              let s = j.toLowerCase();
              e = e.filter(
                (e) =>
                  e.question.toLowerCase().includes(s) ||
                  e.full_answer.toLowerCase().includes(s),
              );
            }
            return e;
          }, [j, N, t]),
          S = (e) => {
            C((s) => {
              let t = new Set(s);
              return (t.has(e) ? t.delete(e) : t.add(e), t);
            });
          },
          _ = () => {
            (v("all"), y(""));
          };
        return (0, r.jsxs)("div", {
          className: "flex flex-col min-h-screen",
          children: [
            (0, r.jsx)(p.d, {
              badge: { text: "FAQ", icon: n.A },
              title: "Frequently Asked Questions About Ausbildung",
              subtitle:
                "Get answers to the most common questions about German vocational training, from application requirements to daily life as a trainee.",
              primaryCta: {
                text: "Browse Questions",
                href: "#faq-categories",
                icon: (0, r.jsx)(l.A, { className: "w-5 h-5 mr-2" }),
              },
              secondaryCta: {
                text: "Ask a Question",
                href: "/contact",
                icon: (0, r.jsx)(i.A, { className: "w-5 h-5 mr-2" }),
              },
              backgroundImage: "black-forest-hero-autumn.webp",
              backgroundAlt:
                "Black Forest in autumn - scenic German forest landscape",
              landmarkCaption: "Black Forest, Baden-W\xfcrttemberg",
              alignment: "center",
            }),
            (0, r.jsx)("section", {
              id: "faq-categories",
              className: "py-8 bg-background border-b border-primary/10",
              children: (0, r.jsxs)("div", {
                className: "container px-4 md:px-6 max-w-4xl mx-auto",
                children: [
                  (0, r.jsx)("div", {
                    className: "flex justify-center mb-6",
                    children: (0, r.jsx)(u.E, {
                      variant: "outline",
                      className: "px-4 py-2 text-sm bg-card border-primary/10",
                      children: (0, r.jsxs)("span", {
                        className: "flex items-center gap-2",
                        children: [
                          (0, r.jsx)(n.A, {
                            className: "w-4 h-4 text-primary",
                          }),
                          (0, r.jsxs)("span", {
                            className: "font-medium",
                            children: [t.length, "+ Questions Answered"],
                          }),
                        ],
                      }),
                    }),
                  }),
                  (0, r.jsx)("div", {
                    className: "w-full",
                    children: (0, r.jsx)("div", {
                      className: "relative max-w-2xl mx-auto mb-6 px-4 sm:px-0",
                      children: (0, r.jsxs)("div", {
                        className: "relative flex items-center",
                        children: [
                          (0, r.jsx)(l.A, {
                            className:
                              "absolute left-3 sm:left-4 h-4 sm:h-5 w-4 sm:w-5 text-primary/60 z-10",
                          }),
                          (0, r.jsx)(m.p, {
                            type: "text",
                            placeholder:
                              "Search questions, answers, or topics...",
                            value: j,
                            onChange: (e) => y(e.target.value),
                            className: (0, h.cn)(
                              "w-full pl-10 sm:pl-12 pr-14 sm:pr-20 h-12 sm:h-14",
                              "text-sm sm:text-base rounded-xl sm:rounded-2xl",
                              "transition-all duration-300",
                              "border-primary/20 bg-card",
                              "focus:border-primary focus:ring-2 focus:ring-primary/20",
                              "placeholder:text-muted-foreground placeholder:text-xs sm:placeholder:text-sm",
                            ),
                          }),
                          (0, r.jsxs)(x.rI, {
                            open: w,
                            onOpenChange: k,
                            children: [
                              (0, r.jsx)(x.ty, {
                                asChild: !0,
                                children: (0, r.jsxs)(d.$, {
                                  variant: "ghost",
                                  size: "sm",
                                  className: (0, h.cn)(
                                    "absolute right-2 h-9 sm:h-10 px-2 sm:px-3",
                                    "rounded-lg sm:rounded-xl transition-all duration-300",
                                    "hover:bg-primary/10",
                                    q && "bg-primary/10 text-primary",
                                  ),
                                  children: [
                                    (0, r.jsx)(o.A, { className: "h-4 w-4" }),
                                    q &&
                                      (0, r.jsx)(u.E, {
                                        variant: "outline",
                                        className:
                                          "ml-1.5 h-4 sm:h-5 min-w-[16px] sm:min-w-[20px] p-0 bg-primary text-primary-foreground text-[10px] sm:text-xs flex items-center justify-center border-0",
                                        children: (0, r.jsx)("span", {
                                          children: "1",
                                        }),
                                      }),
                                  ],
                                }),
                              }),
                              (0, r.jsxs)(x.SQ, {
                                className:
                                  "w-[calc(100vw-2rem)] max-w-sm sm:w-80 p-4 bg-card border-primary/20",
                                align: "end",
                                children: [
                                  (0, r.jsxs)(x.lp, {
                                    className:
                                      "flex items-center gap-2 text-foreground",
                                    children: [
                                      (0, r.jsx)(o.A, { className: "h-4 w-4" }),
                                      "Filter by Category",
                                    ],
                                  }),
                                  (0, r.jsx)(x.mB, { className: "bg-border" }),
                                  (0, r.jsxs)("div", {
                                    className: "space-y-2 mt-4",
                                    children: [
                                      (0, r.jsxs)("button", {
                                        onClick: () => {
                                          (v("all"), k(!1));
                                        },
                                        className: (0, h.cn)(
                                          "w-full text-left px-3 py-2 rounded-lg transition-colors",
                                          "all" === N
                                            ? "bg-primary/10 text-primary font-medium"
                                            : "hover:bg-muted text-foreground",
                                        ),
                                        children: [
                                          "All Categories (",
                                          t.length,
                                          ")",
                                        ],
                                      }),
                                      s.map((e) =>
                                        (0, r.jsxs)(
                                          "button",
                                          {
                                            onClick: () => {
                                              (v(e.slug), k(!1));
                                            },
                                            className: (0, h.cn)(
                                              "w-full text-left px-3 py-2 rounded-lg transition-colors",
                                              N === e.slug
                                                ? "bg-primary/10 text-primary font-medium"
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
                                  q &&
                                    (0, r.jsx)("div", {
                                      className:
                                        "pt-4 mt-4 border-t border-border",
                                      children: (0, r.jsx)(d.$, {
                                        variant: "outline",
                                        size: "sm",
                                        onClick: _,
                                        className: "w-full",
                                        children: "Clear Filters",
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
            (0, r.jsx)("section", {
              className: "py-12 bg-background",
              children: (0, r.jsxs)("div", {
                className: "container mx-auto px-4 max-w-4xl",
                children: [
                  (0, r.jsx)("div", {
                    className: "mb-8",
                    children: (0, r.jsx)("p", {
                      className: "text-muted-foreground",
                      children:
                        j || "all" !== N
                          ? "Found "
                              .concat(F.length, " question")
                              .concat(1 !== F.length ? "s" : "")
                          : "".concat(t.length, " frequently asked questions"),
                    }),
                  }),
                  (0, r.jsx)("div", {
                    className: "space-y-4",
                    children:
                      0 === F.length
                        ? (0, r.jsxs)("div", {
                            className: "text-center py-12",
                            children: [
                              (0, r.jsx)(n.A, {
                                className:
                                  "h-12 w-12 text-muted-foreground mx-auto mb-4",
                              }),
                              (0, r.jsx)("p", {
                                className: "text-lg text-muted-foreground",
                                children:
                                  "No questions found matching your search.",
                              }),
                              (0, r.jsx)(d.$, {
                                variant: "outline",
                                className: "mt-4",
                                onClick: _,
                                children: "Clear Filters",
                              }),
                            ],
                          })
                        : F.map((e) => {
                            let s = A.has(e.id);
                            return (0, r.jsxs)(
                              "div",
                              {
                                className:
                                  "border border-primary/10 rounded-lg bg-card overflow-hidden",
                                children: [
                                  (0, r.jsxs)("button", {
                                    className:
                                      "w-full text-left p-6 flex items-center justify-between hover:bg-muted/50 transition-colors focus:outline-none focus:ring-2 focus:ring-primary/20 focus:ring-inset",
                                    onClick: () => S(e.id),
                                    "aria-expanded": s,
                                    children: [
                                      (0, r.jsx)(g.D, {
                                        level: 3,
                                        className: "pr-4 text-base sm:text-lg",
                                        children: e.question,
                                      }),
                                      (0, r.jsx)(c.A, {
                                        className: (0, h.cn)(
                                          "h-5 w-5 text-muted-foreground transition-transform duration-200 flex-shrink-0",
                                          s && "rotate-180",
                                        ),
                                      }),
                                    ],
                                  }),
                                  (0, r.jsx)("div", {
                                    className: (0, h.cn)(
                                      "transition-all duration-200 ease-in-out",
                                      s
                                        ? "opacity-100"
                                        : "max-h-0 opacity-0 overflow-hidden",
                                    ),
                                    children: (0, r.jsx)("div", {
                                      className: "px-6 pb-6",
                                      children: (0, r.jsx)("div", {
                                        className:
                                          "border-t border-border pt-4",
                                        children: (0, r.jsx)("div", {
                                          className:
                                            "text-muted-foreground leading-relaxed",
                                          children: e.full_answer
                                            .split("\n")
                                            .map((e, s) =>
                                              e.trim()
                                                ? (0, r.jsx)(
                                                    "div",
                                                    {
                                                      className: "mb-1",
                                                      children: ((e) => {
                                                        let t = [],
                                                          a = e,
                                                          n = 0;
                                                        for (; a.length > 0; ) {
                                                          let e =
                                                            a.match(
                                                              /\*\*([^*]+)\*\*/,
                                                            );
                                                          if (e)
                                                            (e.index > 0 &&
                                                              t.push(
                                                                a.substring(
                                                                  0,
                                                                  e.index,
                                                                ),
                                                              ),
                                                              t.push(
                                                                (0, r.jsx)(
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
                                                                      n++,
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
                                                                t.push(
                                                                  a.substring(
                                                                    0,
                                                                    e.index,
                                                                  ),
                                                                ),
                                                                t.push(
                                                                  (0, r.jsx)(
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
                                                                        n++,
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
                                                              a && t.push(a);
                                                              break;
                                                            }
                                                          }
                                                        }
                                                        return t;
                                                      })(e),
                                                    },
                                                    s,
                                                  )
                                                : (0, r.jsx)("br", {}, s),
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
            (0, r.jsx)(b.CTASection, {
              badge: { text: "Ready to Apply?" },
              title: "Find Your Perfect Ausbildung Match",
              description:
                "Browse hundreds of verified Ausbildung positions from German employers actively hiring international students. Start your application journey today.",
              action: {
                text: "Browse Jobs",
                href: "/dashboard/jobs",
                variant: "default",
              },
              secondaryAction: {
                text: "Check Eligibility",
                href: "/tools/eligibility-checker",
                variant: "outline",
              },
              className: "bg-gradient-to-b from-primary/5 to-background",
            }),
          ],
        });
      }
    },
    90153: (e, s, t) => {
      Promise.resolve().then(t.bind(t, 53846));
    },
  },
  (e) => {
    var s = (s) => e((e.s = s));
    (e.O(0, [46593, 36209, 84121, 72076, 77358], () => s(90153)),
      (_N_E = e.O()));
  },
]);
