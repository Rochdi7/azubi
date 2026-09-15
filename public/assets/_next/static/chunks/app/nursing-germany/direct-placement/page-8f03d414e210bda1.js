(self.webpackChunk_N_E = self.webpackChunk_N_E || []).push([
  [97827],
  {
    21730: (e, s, a) => {
      Promise.resolve().then(a.bind(a, 53237));
    },
    53237: (e, s, a) => {
      "use strict";
      a.d(s, { default: () => A });
      var l = a(70207),
        i = a(87223),
        r = a(10542),
        t = a.n(r),
        n = a(97020),
        c = a(82164),
        d = a(70005),
        m = a(63016),
        x = a(28131),
        o = a(33482),
        h = a(79024),
        u = a(11299),
        g = a(5101),
        j = a(79650),
        p = a(63604),
        f = a(78809),
        N = a(17802),
        b = a(80187),
        v = a(14207),
        y = a(7782),
        w = a(82822);
      function A() {
        let [e, s] = (0, i.useState)("berlin"),
          [a, r] = (0, i.useState)("0-2"),
          [A, k] = (0, i.useState)("general"),
          S = {
            berlin: { name: "Berlin", multiplier: 1, cost: "High" },
            munich: { name: "Munich", multiplier: 1.15, cost: "Very High" },
            hamburg: { name: "Hamburg", multiplier: 1.05, cost: "High" },
            cologne: { name: "Cologne", multiplier: 1, cost: "Medium" },
            frankfurt: { name: "Frankfurt", multiplier: 1.1, cost: "High" },
            dresden: { name: "Dresden", multiplier: 0.9, cost: "Medium" },
            leipzig: { name: "Leipzig", multiplier: 0.88, cost: "Low" },
            nuremberg: { name: "Nuremberg", multiplier: 0.95, cost: "Medium" },
          },
          C = {
            "0-2": { multiplier: 1, label: "0-2 years" },
            "2-5": { multiplier: 1.15, label: "2-5 years" },
            "5+": { multiplier: 1.3, label: "5+ years" },
          },
          G = {
            general: { multiplier: 1, label: "General Nursing" },
            icu: { multiplier: 1.2, label: "Intensive Care" },
            or: { multiplier: 1.18, label: "Operating Room" },
            emergency: { multiplier: 1.15, label: "Emergency Care" },
            pediatric: { multiplier: 1.1, label: "Pediatric" },
            geriatric: { multiplier: 1.05, label: "Geriatric" },
            psychiatric: { multiplier: 1.08, label: "Psychiatric" },
          };
        return (0, l.jsxs)("div", {
          className: "flex flex-col",
          children: [
            (0, l.jsxs)("section", {
              className: "relative",
              children: [
                (0, l.jsxs)("div", {
                  className: "relative h-[40vh] md:h-[60vh] w-full",
                  children: [
                    (0, l.jsx)(p.Cv, {
                      src: "/images/nursing-direct-placement-hero.webp",
                      alt: "Direct Placement for Nursing Graduates in Germany",
                      fallbackSrc: "".concat(f.je.HERO, ".webp"),
                      className: "object-cover h-full w-full",
                      priority: !0,
                    }),
                    (0, l.jsx)("div", {
                      className: "absolute inset-0 bg-black/60",
                    }),
                  ],
                }),
                (0, l.jsxs)("div", {
                  className:
                    "container mx-auto px-4 md:px-6 relative z-10 -mt-32 md:-mt-40",
                  children: [
                    (0, l.jsxs)(t(), {
                      href: "/nursing-germany",
                      className:
                        "inline-flex items-center text-white hover:text-primary/90 mb-6 transition-colors",
                      children: [
                        (0, l.jsx)(n.A, { className: "mr-1 h-4 w-4" }),
                        (0, l.jsx)("span", {
                          className: "text-sm",
                          children: "Back to Nursing Overview",
                        }),
                      ],
                    }),
                    (0, l.jsxs)("div", {
                      className:
                        "bg-background/95 backdrop-blur-sm border rounded-xl p-6 md:p-8 shadow-lg max-w-4xl",
                      children: [
                        (0, l.jsxs)(N.E, {
                          variant: "outline",
                          className:
                            "mb-4 px-3 py-1 text-sm border-border bg-beige text-primary",
                          children: [
                            (0, l.jsx)(c.A, { className: "w-4 h-4 mr-2" }),
                            (0, l.jsx)("span", {
                              className: "font-medium",
                              children: "Direct Placement Program",
                            }),
                          ],
                        }),
                        (0, l.jsx)("h1", {
                          className:
                            "text-3xl md:text-4xl font-bold mb-4 text-secondary",
                          children: "Direct Placement for Nursing Graduates",
                        }),
                        (0, l.jsx)("p", {
                          className:
                            "text-lg text-muted-foreground mb-6 leading-relaxed",
                          children:
                            "Fast-track your nursing career in Germany with our direct placement program. Perfect for qualified nurses with Bachelor's degrees who want to start working immediately.",
                        }),
                        (0, l.jsxs)("div", {
                          className: "grid grid-cols-2 md:grid-cols-4 gap-4",
                          children: [
                            (0, l.jsxs)("div", {
                              className: "text-center p-3 rounded-lg bg-beige",
                              children: [
                                (0, l.jsx)("div", {
                                  className: "text-2xl font-bold text-primary",
                                  children: "12-18",
                                }),
                                (0, l.jsx)("div", {
                                  className: "text-sm text-muted-foreground",
                                  children: "Months to Start",
                                }),
                              ],
                            }),
                            (0, l.jsxs)("div", {
                              className:
                                "text-center p-3 rounded-lg bg-green-50",
                              children: [
                                (0, l.jsx)("div", {
                                  className:
                                    "text-2xl font-bold text-green-600",
                                  children: "€35k-50k",
                                }),
                                (0, l.jsx)("div", {
                                  className: "text-sm text-muted-foreground",
                                  children: "Annual Salary",
                                }),
                              ],
                            }),
                            (0, l.jsxs)("div", {
                              className: "text-center p-3 rounded-lg bg-beige",
                              children: [
                                (0, l.jsx)("div", {
                                  className: "text-2xl font-bold text-primary",
                                  children: "B2",
                                }),
                                (0, l.jsx)("div", {
                                  className: "text-sm text-muted-foreground",
                                  children: "German Level",
                                }),
                              ],
                            }),
                            (0, l.jsxs)("div", {
                              className:
                                "text-center p-3 rounded-lg bg-orange-50",
                              children: [
                                (0, l.jsx)("div", {
                                  className:
                                    "text-2xl font-bold text-orange-600",
                                  children: "95%",
                                }),
                                (0, l.jsx)("div", {
                                  className: "text-sm text-muted-foreground",
                                  children: "Success Rate",
                                }),
                              ],
                            }),
                          ],
                        }),
                      ],
                    }),
                  ],
                }),
              ],
            }),
            (0, l.jsx)("section", {
              className: "py-16 bg-muted/30",
              children: (0, l.jsx)("div", {
                className: "container mx-auto px-4 md:px-6",
                children: (0, l.jsxs)("div", {
                  className: "max-w-4xl mx-auto",
                  children: [
                    (0, l.jsx)("h2", {
                      className: "text-3xl font-bold mb-8 text-center",
                      children: "Eligibility Requirements",
                    }),
                    (0, l.jsxs)("div", {
                      className: "grid md:grid-cols-2 gap-8",
                      children: [
                        (0, l.jsxs)(b.Zp, {
                          className: "border-green-200 bg-green-50/50",
                          children: [
                            (0, l.jsx)(b.aR, {
                              children: (0, l.jsxs)(b.ZB, {
                                className:
                                  "flex items-center gap-2 text-green-700",
                                children: [
                                  (0, l.jsx)(d.A, { className: "h-5 w-5" }),
                                  "Education Requirements",
                                ],
                              }),
                            }),
                            (0, l.jsxs)(b.Wu, {
                              className: "space-y-3",
                              children: [
                                (0, l.jsxs)("div", {
                                  className: "flex items-center gap-2",
                                  children: [
                                    (0, l.jsx)(d.A, {
                                      className: "h-4 w-4 text-green-500",
                                    }),
                                    (0, l.jsx)("span", {
                                      children: "Bachelor's degree in Nursing",
                                    }),
                                  ],
                                }),
                                (0, l.jsxs)("div", {
                                  className: "flex items-center gap-2",
                                  children: [
                                    (0, l.jsx)(d.A, {
                                      className: "h-4 w-4 text-green-500",
                                    }),
                                    (0, l.jsx)("span", {
                                      children:
                                        "Nursing license from home country",
                                    }),
                                  ],
                                }),
                                (0, l.jsxs)("div", {
                                  className: "flex items-center gap-2",
                                  children: [
                                    (0, l.jsx)(d.A, {
                                      className: "h-4 w-4 text-green-500",
                                    }),
                                    (0, l.jsx)("span", {
                                      children: "Academic transcripts",
                                    }),
                                  ],
                                }),
                                (0, l.jsxs)("div", {
                                  className: "flex items-center gap-2",
                                  children: [
                                    (0, l.jsx)(d.A, {
                                      className: "h-4 w-4 text-green-500",
                                    }),
                                    (0, l.jsx)("span", {
                                      children:
                                        "Minimum 3 years nursing program",
                                    }),
                                  ],
                                }),
                              ],
                            }),
                          ],
                        }),
                        (0, l.jsxs)(b.Zp, {
                          className: "border-border bg-beige/50",
                          children: [
                            (0, l.jsx)(b.aR, {
                              children: (0, l.jsxs)(b.ZB, {
                                className:
                                  "flex items-center gap-2 text-primary",
                                children: [
                                  (0, l.jsx)(m.A, { className: "h-5 w-5" }),
                                  "Language & Personal",
                                ],
                              }),
                            }),
                            (0, l.jsxs)(b.Wu, {
                              className: "space-y-3",
                              children: [
                                (0, l.jsxs)("div", {
                                  className: "flex items-center gap-2",
                                  children: [
                                    (0, l.jsx)(d.A, {
                                      className: "h-4 w-4 text-primary",
                                    }),
                                    (0, l.jsx)("span", {
                                      children:
                                        "B2 German language certificate",
                                    }),
                                  ],
                                }),
                                (0, l.jsxs)("div", {
                                  className: "flex items-center gap-2",
                                  children: [
                                    (0, l.jsx)(d.A, {
                                      className: "h-4 w-4 text-primary",
                                    }),
                                    (0, l.jsx)("span", {
                                      children: "Age 21-45 years (optimal)",
                                    }),
                                  ],
                                }),
                                (0, l.jsxs)("div", {
                                  className: "flex items-center gap-2",
                                  children: [
                                    (0, l.jsx)(d.A, {
                                      className: "h-4 w-4 text-primary",
                                    }),
                                    (0, l.jsx)("span", {
                                      children: "Clean criminal background",
                                    }),
                                  ],
                                }),
                                (0, l.jsxs)("div", {
                                  className: "flex items-center gap-2",
                                  children: [
                                    (0, l.jsx)(d.A, {
                                      className: "h-4 w-4 text-primary",
                                    }),
                                    (0, l.jsx)("span", {
                                      children: "Medical fitness certificate",
                                    }),
                                  ],
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
            }),
            (0, l.jsx)("section", {
              className: "py-16",
              children: (0, l.jsx)("div", {
                className: "container mx-auto px-4 md:px-6",
                children: (0, l.jsxs)("div", {
                  className: "max-w-4xl mx-auto",
                  children: [
                    (0, l.jsx)("h2", {
                      className: "text-3xl font-bold mb-8 text-center",
                      children: "Recognition Process Timeline",
                    }),
                    (0, l.jsxs)("div", {
                      className: "space-y-8",
                      children: [
                        (0, l.jsxs)("div", {
                          className: "flex gap-6",
                          children: [
                            (0, l.jsx)("div", {
                              className: "flex-shrink-0",
                              children: (0, l.jsx)("div", {
                                className:
                                  "w-12 h-12 rounded-full bg-beige flex items-center justify-center",
                                children: (0, l.jsx)("span", {
                                  className: "text-lg font-bold text-primary",
                                  children: "1",
                                }),
                              }),
                            }),
                            (0, l.jsxs)("div", {
                              className: "flex-grow",
                              children: [
                                (0, l.jsx)("h3", {
                                  className: "text-xl font-semibold mb-2",
                                  children: "Document Preparation",
                                }),
                                (0, l.jsx)("p", {
                                  className: "text-muted-foreground mb-3",
                                  children:
                                    "Gather and translate all required documents including diplomas, transcripts, and work certificates.",
                                }),
                                (0, l.jsxs)("div", {
                                  className: "flex items-center gap-4 text-sm",
                                  children: [
                                    (0, l.jsxs)("div", {
                                      className: "flex items-center gap-1",
                                      children: [
                                        (0, l.jsx)(x.A, {
                                          className:
                                            "h-4 w-4 text-muted-foreground",
                                        }),
                                        (0, l.jsx)("span", {
                                          children: "4-6 weeks",
                                        }),
                                      ],
                                    }),
                                    (0, l.jsxs)("div", {
                                      className: "flex items-center gap-1",
                                      children: [
                                        (0, l.jsx)(o.A, {
                                          className:
                                            "h-4 w-4 text-muted-foreground",
                                        }),
                                        (0, l.jsx)("span", {
                                          children: "€300-500",
                                        }),
                                      ],
                                    }),
                                  ],
                                }),
                              ],
                            }),
                          ],
                        }),
                        (0, l.jsx)(y.Separator, {}),
                        (0, l.jsxs)("div", {
                          className: "flex gap-6",
                          children: [
                            (0, l.jsx)("div", {
                              className: "flex-shrink-0",
                              children: (0, l.jsx)("div", {
                                className:
                                  "w-12 h-12 rounded-full bg-beige flex items-center justify-center",
                                children: (0, l.jsx)("span", {
                                  className: "text-lg font-bold text-primary",
                                  children: "2",
                                }),
                              }),
                            }),
                            (0, l.jsxs)("div", {
                              className: "flex-grow",
                              children: [
                                (0, l.jsx)("h3", {
                                  className: "text-xl font-semibold mb-2",
                                  children: "German Language Certification",
                                }),
                                (0, l.jsx)("p", {
                                  className: "text-muted-foreground mb-3",
                                  children:
                                    "Achieve B2 level German proficiency with specialized medical terminology.",
                                }),
                                (0, l.jsxs)("div", {
                                  className: "flex items-center gap-4 text-sm",
                                  children: [
                                    (0, l.jsxs)("div", {
                                      className: "flex items-center gap-1",
                                      children: [
                                        (0, l.jsx)(x.A, {
                                          className:
                                            "h-4 w-4 text-muted-foreground",
                                        }),
                                        (0, l.jsx)("span", {
                                          children: "6-12 months",
                                        }),
                                      ],
                                    }),
                                    (0, l.jsxs)("div", {
                                      className: "flex items-center gap-1",
                                      children: [
                                        (0, l.jsx)(o.A, {
                                          className:
                                            "h-4 w-4 text-muted-foreground",
                                        }),
                                        (0, l.jsx)("span", {
                                          children: "€800-1,500",
                                        }),
                                      ],
                                    }),
                                  ],
                                }),
                              ],
                            }),
                          ],
                        }),
                        (0, l.jsx)(y.Separator, {}),
                        (0, l.jsxs)("div", {
                          className: "flex gap-6",
                          children: [
                            (0, l.jsx)("div", {
                              className: "flex-shrink-0",
                              children: (0, l.jsx)("div", {
                                className:
                                  "w-12 h-12 rounded-full bg-beige flex items-center justify-center",
                                children: (0, l.jsx)("span", {
                                  className: "text-lg font-bold text-primary",
                                  children: "3",
                                }),
                              }),
                            }),
                            (0, l.jsxs)("div", {
                              className: "flex-grow",
                              children: [
                                (0, l.jsx)("h3", {
                                  className: "text-xl font-semibold mb-2",
                                  children: "Recognition Application",
                                }),
                                (0, l.jsx)("p", {
                                  className: "text-muted-foreground mb-3",
                                  children:
                                    "Submit application to state recognition authority and undergo qualification assessment.",
                                }),
                                (0, l.jsxs)("div", {
                                  className: "flex items-center gap-4 text-sm",
                                  children: [
                                    (0, l.jsxs)("div", {
                                      className: "flex items-center gap-1",
                                      children: [
                                        (0, l.jsx)(x.A, {
                                          className:
                                            "h-4 w-4 text-muted-foreground",
                                        }),
                                        (0, l.jsx)("span", {
                                          children: "3-6 months",
                                        }),
                                      ],
                                    }),
                                    (0, l.jsxs)("div", {
                                      className: "flex items-center gap-1",
                                      children: [
                                        (0, l.jsx)(o.A, {
                                          className:
                                            "h-4 w-4 text-muted-foreground",
                                        }),
                                        (0, l.jsx)("span", {
                                          children: "€600",
                                        }),
                                      ],
                                    }),
                                  ],
                                }),
                              ],
                            }),
                          ],
                        }),
                        (0, l.jsx)(y.Separator, {}),
                        (0, l.jsxs)("div", {
                          className: "flex gap-6",
                          children: [
                            (0, l.jsx)("div", {
                              className: "flex-shrink-0",
                              children: (0, l.jsx)("div", {
                                className:
                                  "w-12 h-12 rounded-full bg-green-100 flex items-center justify-center",
                                children: (0, l.jsx)("span", {
                                  className: "text-lg font-bold text-green-600",
                                  children: "4",
                                }),
                              }),
                            }),
                            (0, l.jsxs)("div", {
                              className: "flex-grow",
                              children: [
                                (0, l.jsx)("h3", {
                                  className: "text-xl font-semibold mb-2",
                                  children: "Job Placement & Start",
                                }),
                                (0, l.jsx)("p", {
                                  className: "text-muted-foreground mb-3",
                                  children:
                                    "Receive recognition certificate and begin working as a qualified nurse in Germany.",
                                }),
                                (0, l.jsxs)("div", {
                                  className: "flex items-center gap-4 text-sm",
                                  children: [
                                    (0, l.jsxs)("div", {
                                      className: "flex items-center gap-1",
                                      children: [
                                        (0, l.jsx)(x.A, {
                                          className:
                                            "h-4 w-4 text-muted-foreground",
                                        }),
                                        (0, l.jsx)("span", {
                                          children: "1-2 months",
                                        }),
                                      ],
                                    }),
                                    (0, l.jsxs)("div", {
                                      className: "flex items-center gap-1",
                                      children: [
                                        (0, l.jsx)(h.A, {
                                          className: "h-4 w-4 text-green-600",
                                        }),
                                        (0, l.jsx)("span", {
                                          children: "Career starts!",
                                        }),
                                      ],
                                    }),
                                  ],
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
            }),
            (0, l.jsx)("section", {
              className: "py-16 bg-muted/30",
              children: (0, l.jsx)("div", {
                className: "container mx-auto px-4 md:px-6",
                children: (0, l.jsxs)("div", {
                  className: "max-w-4xl mx-auto",
                  children: [
                    (0, l.jsx)("h2", {
                      className: "text-3xl font-bold mb-8 text-center",
                      children: "Salary Calculator",
                    }),
                    (0, l.jsxs)(b.Zp, {
                      className: "border-primary/20",
                      children: [
                        (0, l.jsx)(b.aR, {
                          children: (0, l.jsxs)(b.ZB, {
                            className: "flex items-center gap-2",
                            children: [
                              (0, l.jsx)(u.A, { className: "h-5 w-5" }),
                              "Calculate Your Expected Salary",
                            ],
                          }),
                        }),
                        (0, l.jsxs)(b.Wu, {
                          children: [
                            (0, l.jsxs)("div", {
                              className: "grid md:grid-cols-3 gap-6 mb-6",
                              children: [
                                (0, l.jsx)(w.b, {
                                  label: "Select Region",
                                  value: e,
                                  onChange: s,
                                  options: Object.entries(S).map((e) => {
                                    let [s, a] = e;
                                    return {
                                      value: s,
                                      label: a.name,
                                      description: "Living cost: ".concat(
                                        a.cost,
                                      ),
                                    };
                                  }),
                                }),
                                (0, l.jsx)(w.b, {
                                  label: "Experience Level",
                                  value: a,
                                  onChange: r,
                                  options: Object.entries(C).map((e) => {
                                    let [s, a] = e;
                                    return { value: s, label: a.label };
                                  }),
                                }),
                                (0, l.jsx)(w.b, {
                                  label: "Specialization",
                                  value: A,
                                  onChange: k,
                                  options: Object.entries(G).map((e) => {
                                    let [s, a] = e;
                                    return { value: s, label: a.label };
                                  }),
                                }),
                              ],
                            }),
                            (0, l.jsxs)("div", {
                              className:
                                "bg-[#EEF0F4] p-6 rounded-lg text-center border-2 border-[#2C3340]/20",
                              children: [
                                (0, l.jsx)("h3", {
                                  className: "text-lg font-medium mb-2",
                                  children: "Expected Annual Salary",
                                }),
                                (0, l.jsxs)("div", {
                                  className:
                                    "text-4xl font-bold text-green-600 mb-2",
                                  children: [
                                    "€",
                                    (() => {
                                      let s = S[e],
                                        l = C[a],
                                        i = G[A];
                                      return Math.round(
                                        35e3 *
                                          s.multiplier *
                                          l.multiplier *
                                          i.multiplier,
                                      );
                                    })().toLocaleString(),
                                  ],
                                }),
                                (0, l.jsx)("div", {
                                  className: "text-sm text-muted-foreground",
                                  children:
                                    "Plus benefits: 30+ vacation days, health insurance, pension contributions",
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
            }),
            (0, l.jsx)("section", {
              className: "py-16",
              children: (0, l.jsx)("div", {
                className: "container mx-auto px-4 md:px-6",
                children: (0, l.jsxs)("div", {
                  className: "max-w-4xl mx-auto",
                  children: [
                    (0, l.jsx)("h2", {
                      className: "text-3xl font-bold mb-8 text-center",
                      children: "Why Choose Direct Placement?",
                    }),
                    (0, l.jsxs)("div", {
                      className: "grid md:grid-cols-2 gap-8",
                      children: [
                        (0, l.jsxs)("div", {
                          className: "space-y-6",
                          children: [
                            (0, l.jsxs)("div", {
                              className: "flex items-start gap-3",
                              children: [
                                (0, l.jsx)("div", {
                                  className:
                                    "w-8 h-8 rounded-full bg-green-100 flex items-center justify-center flex-shrink-0",
                                  children: (0, l.jsx)(h.A, {
                                    className: "h-4 w-4 text-green-600",
                                  }),
                                }),
                                (0, l.jsxs)("div", {
                                  children: [
                                    (0, l.jsx)("h3", {
                                      className: "font-semibold mb-1",
                                      children: "Immediate Career Growth",
                                    }),
                                    (0, l.jsx)("p", {
                                      className:
                                        "text-sm text-muted-foreground",
                                      children:
                                        "Start earning a professional salary immediately, no need to spend 3 years in training.",
                                    }),
                                  ],
                                }),
                              ],
                            }),
                            (0, l.jsxs)("div", {
                              className: "flex items-start gap-3",
                              children: [
                                (0, l.jsx)("div", {
                                  className:
                                    "w-8 h-8 rounded-full bg-beige flex items-center justify-center flex-shrink-0",
                                  children: (0, l.jsx)(c.A, {
                                    className: "h-4 w-4 text-primary",
                                  }),
                                }),
                                (0, l.jsxs)("div", {
                                  children: [
                                    (0, l.jsx)("h3", {
                                      className: "font-semibold mb-1",
                                      children: "Skills Recognition",
                                    }),
                                    (0, l.jsx)("p", {
                                      className:
                                        "text-sm text-muted-foreground",
                                      children:
                                        "Your existing qualifications and experience are valued and recognized in Germany.",
                                    }),
                                  ],
                                }),
                              ],
                            }),
                            (0, l.jsxs)("div", {
                              className: "flex items-start gap-3",
                              children: [
                                (0, l.jsx)("div", {
                                  className:
                                    "w-8 h-8 rounded-full bg-beige flex items-center justify-center flex-shrink-0",
                                  children: (0, l.jsx)(g.A, {
                                    className: "h-4 w-4 text-primary",
                                  }),
                                }),
                                (0, l.jsxs)("div", {
                                  children: [
                                    (0, l.jsx)("h3", {
                                      className: "font-semibold mb-1",
                                      children: "Professional Network",
                                    }),
                                    (0, l.jsx)("p", {
                                      className:
                                        "text-sm text-muted-foreground",
                                      children:
                                        "Join established healthcare teams and build professional relationships quickly.",
                                    }),
                                  ],
                                }),
                              ],
                            }),
                          ],
                        }),
                        (0, l.jsxs)("div", {
                          className: "space-y-6",
                          children: [
                            (0, l.jsxs)("div", {
                              className: "flex items-start gap-3",
                              children: [
                                (0, l.jsx)("div", {
                                  className:
                                    "w-8 h-8 rounded-full bg-orange-100 flex items-center justify-center flex-shrink-0",
                                  children: (0, l.jsx)(o.A, {
                                    className: "h-4 w-4 text-orange-600",
                                  }),
                                }),
                                (0, l.jsxs)("div", {
                                  children: [
                                    (0, l.jsx)("h3", {
                                      className: "font-semibold mb-1",
                                      children: "Higher Earning Potential",
                                    }),
                                    (0, l.jsx)("p", {
                                      className:
                                        "text-sm text-muted-foreground",
                                      children:
                                        "Earn significantly more than traditional apprenticeship programs from day one.",
                                    }),
                                  ],
                                }),
                              ],
                            }),
                            (0, l.jsxs)("div", {
                              className: "flex items-start gap-3",
                              children: [
                                (0, l.jsx)("div", {
                                  className:
                                    "w-8 h-8 rounded-full bg-red-100 flex items-center justify-center flex-shrink-0",
                                  children: (0, l.jsx)(j.A, {
                                    className: "h-4 w-4 text-red-600",
                                  }),
                                }),
                                (0, l.jsxs)("div", {
                                  children: [
                                    (0, l.jsx)("h3", {
                                      className: "font-semibold mb-1",
                                      children: "Career Autonomy",
                                    }),
                                    (0, l.jsx)("p", {
                                      className:
                                        "text-sm text-muted-foreground",
                                      children:
                                        "Work independently as a qualified professional with full nursing responsibilities.",
                                    }),
                                  ],
                                }),
                              ],
                            }),
                            (0, l.jsxs)("div", {
                              className: "flex items-start gap-3",
                              children: [
                                (0, l.jsx)("div", {
                                  className:
                                    "w-8 h-8 rounded-full bg-teal-100 flex items-center justify-center flex-shrink-0",
                                  children: (0, l.jsx)(m.A, {
                                    className: "h-4 w-4 text-primary",
                                  }),
                                }),
                                (0, l.jsxs)("div", {
                                  children: [
                                    (0, l.jsx)("h3", {
                                      className: "font-semibold mb-1",
                                      children: "EU Mobility",
                                    }),
                                    (0, l.jsx)("p", {
                                      className:
                                        "text-sm text-muted-foreground",
                                      children:
                                        "Your German nursing license is recognized across the European Union.",
                                    }),
                                  ],
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
            }),
            (0, l.jsx)(v.CTASection, {
              badge: { text: "Ready to Start Your Career?" },
              title: "Begin Your Direct Placement Journey Today",
              description:
                "Take our nursing assessment to see if you qualify for direct placement in Germany. Get personalized guidance from our healthcare experts.",
              action: {
                text: "Take Assessment",
                href: "/nursing/assessment",
                variant: "default",
              },
              secondaryAction: {
                text: "Contact an Advisor",
                href: "/contact",
                variant: "outline",
              },
            }),
          ],
        });
      }
    },
  },
  (e) => {
    var s = (s) => e((e.s = s));
    (e.O(0, [46593, 36209, 84121, 72076, 77358], () => s(21730)),
      (_N_E = e.O()));
  },
]);
