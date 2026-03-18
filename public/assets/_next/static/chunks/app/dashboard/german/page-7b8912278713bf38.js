(self.webpackChunk_N_E = self.webpackChunk_N_E || []).push([
  [90172],
  {
    62703: (e, s, a) => {
      "use strict";
      (a.r(s), a.d(s, { default: () => X }));
      var t = a(70207),
        r = a(68588),
        i = a.n(r),
        l = a(87223),
        n = a(18051),
        c = a(80187),
        o = a(39441),
        d = a(17802),
        m = a(52141),
        x = a(35121),
        b = a(48372),
        g = a(76953),
        p = a(46742),
        h = a(30453),
        f = a(28514),
        j = a(28131),
        u = a(74285),
        N = a(25385),
        w = a(50341),
        v = a(84222),
        y = a(46031),
        F = a(79650),
        k = a(27239),
        A = a(79024),
        P = a(34097),
        _ = a(62839),
        S = a(6316),
        C = a(45748),
        E = a(93775),
        D = a(61889),
        z = a(22718),
        W = a(52461),
        G = a(80750),
        T = a(88117),
        K = a(16148),
        Z = a(53011),
        B = a(51105),
        H = a(68233);
      let $ = [
        {
          id: "it",
          nameKey: "german.jobPostings.sectors.it.name",
          descriptionKey: "german.jobPostings.sectors.it.description",
          icon: z.A,
        },
        {
          id: "nursing",
          nameKey: "german.jobPostings.sectors.nursing.name",
          descriptionKey: "german.jobPostings.sectors.nursing.description",
          icon: W.A,
        },
        {
          id: "manufacturing",
          nameKey: "german.jobPostings.sectors.manufacturing.name",
          descriptionKey:
            "german.jobPostings.sectors.manufacturing.description",
          icon: G.A,
        },
        {
          id: "business",
          nameKey: "german.jobPostings.sectors.business.name",
          descriptionKey: "german.jobPostings.sectors.business.description",
          icon: T.A,
        },
        {
          id: "construction",
          nameKey: "german.jobPostings.sectors.construction.name",
          descriptionKey: "german.jobPostings.sectors.construction.description",
          icon: K.A,
        },
        {
          id: "hospitality",
          nameKey: "german.jobPostings.sectors.hospitality.name",
          descriptionKey: "german.jobPostings.sectors.hospitality.description",
          icon: Z.A,
        },
      ];
      function L(e) {
        let { open: s, onComplete: a, onClose: r } = e,
          { t: i } = (0, H.ok)(),
          [n, d] = (0, l.useState)(null),
          [m, x] = (0, l.useState)(!1),
          b = async () => {
            if (n) {
              x(!0);
              try {
                if (
                  !(
                    await fetch("/api/german/user/sector", {
                      method: "POST",
                      headers: { "Content-Type": "application/json" },
                      body: JSON.stringify({ sector: n }),
                    })
                  ).ok
                )
                  throw Error("Failed to save sector");
                a(n);
              } catch (e) {
                (console.error("Error saving sector:", e),
                  alert(i("german.jobPostings.sectors.selectError")));
              } finally {
                x(!1);
              }
            }
          };
        return (0, t.jsx)(D.lG, {
          open: s,
          onOpenChange: (e) => {
            !e && r && r();
          },
          children: (0, t.jsxs)(D.Cf, {
            className:
              "max-w-4xl max-h-[90vh] overflow-y-auto bg-cream border-2 border-beige",
            children: [
              (0, t.jsxs)(D.c7, {
                children: [
                  (0, t.jsx)(D.L3, {
                    className: "text-2xl font-bold text-[#344F1F]",
                    children: i("german.jobPostings.sectors.modalTitle"),
                  }),
                  (0, t.jsx)(D.rr, {
                    className: "text-base text-[#344F1F]/70",
                    children: i("german.jobPostings.sectors.modalDescription"),
                  }),
                ],
              }),
              (0, t.jsx)("div", {
                className: "grid grid-cols-1 md:grid-cols-2 gap-4 mt-4",
                children: $.map((e) => {
                  let s = e.icon,
                    a = n === e.id;
                  return (0, t.jsx)(
                    c.Zp,
                    {
                      className:
                        "cursor-pointer transition-all border-2 ".concat(
                          a
                            ? "border-primary bg-primary/10 shadow-md"
                            : "border-beige bg-card hover:border-primary/50 hover:shadow-sm",
                        ),
                      onClick: () => d(e.id),
                      children: (0, t.jsx)(c.Wu, {
                        className: "p-4 min-h-[88px]",
                        children: (0, t.jsxs)("div", {
                          className: "flex items-start gap-3",
                          children: [
                            (0, t.jsx)("div", {
                              className: "p-3 rounded-xl flex-shrink-0 ".concat(
                                a ? "bg-primary" : "bg-beige",
                              ),
                              children: (0, t.jsx)(s, {
                                className: "h-6 w-6 ".concat(
                                  a ? "text-white" : "text-primary",
                                ),
                              }),
                            }),
                            (0, t.jsxs)("div", {
                              className: "flex-1 min-w-0",
                              children: [
                                (0, t.jsx)("h3", {
                                  className:
                                    "font-semibold text-base text-[#344F1F] mb-1 leading-tight",
                                  children: i(e.nameKey),
                                }),
                                (0, t.jsx)("p", {
                                  className:
                                    "text-sm text-[#344F1F]/70 leading-snug",
                                  children: i(e.descriptionKey),
                                }),
                              ],
                            }),
                            a &&
                              (0, t.jsx)(B.A, {
                                className:
                                  "h-5 w-5 text-primary flex-shrink-0 mt-1",
                              }),
                          ],
                        }),
                      }),
                    },
                    e.id,
                  );
                }),
              }),
              (0, t.jsxs)("div", {
                className: "mt-6 flex flex-col gap-3",
                children: [
                  (0, t.jsx)(o.$, {
                    onClick: b,
                    disabled: !n || m,
                    className:
                      "w-full h-12 rounded-full bg-primary hover:bg-primary/90 text-white font-medium",
                    size: "lg",
                    children: m
                      ? i("common.status.saving")
                      : i("common.buttons.continue"),
                  }),
                  r &&
                    (0, t.jsx)(o.$, {
                      onClick: r,
                      variant: "outline",
                      disabled: m,
                      className:
                        "w-full h-12 rounded-full border-2 border-beige bg-transparent hover:bg-beige/20 text-[#344F1F] font-medium",
                      size: "lg",
                      children: i("german.jobPostings.sectors.skipForNow"),
                    }),
                ],
              }),
              (0, t.jsx)("p", {
                className: "text-xs text-[#344F1F]/60 text-center mt-2",
                children: i("german.jobPostings.sectors.helperText"),
              }),
            ],
          }),
        });
      }
      let M = {
          it: z.A,
          nursing: W.A,
          manufacturing: G.A,
          business: T.A,
          construction: K.A,
          hospitality: Z.A,
        },
        O = {
          A1: "bg-[#344F1F]/10 text-[#344F1F] border-[#344F1F]/20",
          A2: "bg-primary/10 text-primary border-primary/20",
          B1: "bg-primary text-white border-primary",
          B2: "bg-[#344F1F] text-white border-[#344F1F]",
        };
      function R(e) {
        var s;
        let { userName: a, sector: r, germanLevel: i } = e,
          { t: l, language: n } = (0, H.ok)(),
          o = r ? M[r] : null,
          m =
            (r &&
              (null ===
                (s = {
                  it: { en: "IT", de: "IT" },
                  nursing: { en: "Healthcare", de: "Gesundheitswesen" },
                  manufacturing: { en: "Manufacturing", de: "Produktion" },
                  business: { en: "Business", de: "Wirtschaft" },
                  construction: { en: "Construction", de: "Bauwesen" },
                  hospitality: { en: "Hospitality", de: "Gastgewerbe" },
                  general: { en: "General", de: "Allgemein" },
                }[r]) || void 0 === s
                ? void 0
                : s[n])) ||
            "Ausbildung";
        return (0, t.jsx)(c.Zp, {
          className: "bg-primary border-2 border-primary shadow-lg",
          children: (0, t.jsx)(c.Wu, {
            className: "p-6",
            children: (0, t.jsxs)("div", {
              className:
                "flex flex-col md:flex-row md:items-center md:justify-between gap-4",
              children: [
                (0, t.jsxs)("div", {
                  className: "flex items-center gap-3",
                  children: [
                    o &&
                      (0, t.jsx)("div", {
                        className: "hidden md:flex p-3 rounded-xl bg-white",
                        children: (0, t.jsx)(o, {
                          className: "h-6 w-6 text-primary",
                        }),
                      }),
                    (0, t.jsxs)("div", {
                      children: [
                        (0, t.jsx)("h1", {
                          className:
                            "text-xl md:text-2xl font-bold text-white leading-tight",
                          children: l("german.components.welcome.greeting", {
                            name: a,
                          }),
                        }),
                        (0, t.jsx)("p", {
                          className: "text-white/90 text-sm md:text-base mt-1",
                          children:
                            "de" === n
                              ? (0, t.jsxs)(t.Fragment, {
                                  children: [
                                    "Dein Weg zur",
                                    " ",
                                    (0, t.jsxs)("span", {
                                      className: "font-semibold",
                                      children: [m, " Ausbildung"],
                                    }),
                                  ],
                                })
                              : (0, t.jsxs)(t.Fragment, {
                                  children: [
                                    "Your Path to",
                                    " ",
                                    (0, t.jsxs)("span", {
                                      className: "font-semibold",
                                      children: [m, " Ausbildung"],
                                    }),
                                  ],
                                }),
                        }),
                      ],
                    }),
                  ],
                }),
                i &&
                  (0, t.jsxs)(d.E, {
                    className:
                      "px-4 py-2 text-sm font-semibold border-2 ".concat(
                        O[i] || O.A1,
                      ),
                    children: [l("german.components.welcome.level"), ": ", i],
                  }),
              ],
            }),
          }),
        });
      }
      var I = a(93668);
      let Y = (e) => [
        {
          id: "core_skills",
          title: e("german.progress.categories.coreSkills"),
          subtitle:
            e("german.page.sections.coreSkillsDesc").split(" - ")[1] ||
            e("german.page.sections.coreSkillsDesc"),
          icon: u.A,
          color: "text-primary",
        },
        {
          id: "workplace_german",
          title: e("german.progress.categories.workplaceGerman"),
          subtitle:
            e("german.page.sections.workplaceGermanDesc").split(" - ")[1] ||
            e("german.page.sections.workplaceGermanDesc"),
          icon: T.A,
          color: "text-[#344F1F]",
        },
        {
          id: "ausbildung_prep",
          title: e("german.progress.categories.ausbildungPrep"),
          subtitle:
            e("german.page.sections.ausbildungPrepDesc").split(" - ")[1] ||
            e("german.page.sections.ausbildungPrepDesc"),
          icon: k.A,
          color: "text-primary",
        },
      ];
      function q(e) {
        let {
            coreSkills: s,
            workplaceGerman: a,
            ausbildungPrep: r,
            overallProgress: i,
          } = e,
          { t: l } = (0, H.ok)(),
          n = { core_skills: s, workplace_german: a, ausbildung_prep: r },
          o = Y(l);
        return (0, t.jsxs)("div", {
          className: "space-y-4",
          children: [
            (0, t.jsx)(c.Zp, {
              className: "bg-beige border-2 border-beige",
              children: (0, t.jsxs)(c.Wu, {
                className: "p-4",
                children: [
                  (0, t.jsxs)("div", {
                    className: "flex items-center justify-between mb-2",
                    children: [
                      (0, t.jsxs)("div", {
                        className: "flex items-center gap-2",
                        children: [
                          (0, t.jsx)(A.A, {
                            className: "h-5 w-5 text-primary",
                          }),
                          (0, t.jsx)("h3", {
                            className: "font-semibold text-[#344F1F]",
                            children: l("german.page.stats.overallProgress"),
                          }),
                        ],
                      }),
                      (0, t.jsxs)("span", {
                        className: "text-2xl font-bold text-primary",
                        children: [i, "%"],
                      }),
                    ],
                  }),
                  (0, t.jsx)(I.Progress, { value: i, className: "h-3" }),
                ],
              }),
            }),
            (0, t.jsx)("div", {
              className: "grid grid-cols-1 md:grid-cols-3 gap-4",
              children: o.map((e) => {
                var s, a;
                let r = n[e.id],
                  i = e.icon,
                  o =
                    (s = r.progress) >= 70
                      ? "text-[#344F1F]"
                      : s >= 40
                        ? "text-primary"
                        : "text-[#344F1F]/60",
                  d =
                    (a = r.progress) >= 70
                      ? "bg-[#344F1F]"
                      : a >= 40
                        ? "bg-primary"
                        : "bg-[#344F1F]/40";
                return (0, t.jsxs)(
                  c.Zp,
                  {
                    className:
                      "bg-card border-2 border-beige hover:border-primary/30 transition-all",
                    children: [
                      (0, t.jsx)(c.aR, {
                        className: "pb-3",
                        children: (0, t.jsxs)("div", {
                          className: "flex items-start justify-between",
                          children: [
                            (0, t.jsxs)("div", {
                              className: "flex-1",
                              children: [
                                (0, t.jsx)(c.ZB, {
                                  className:
                                    "text-base font-semibold text-[#344F1F] mb-1",
                                  children: e.title,
                                }),
                                (0, t.jsx)("p", {
                                  className: "text-xs text-[#344F1F]/70",
                                  children: e.subtitle,
                                }),
                              ],
                            }),
                            (0, t.jsx)("div", {
                              className: "p-2 rounded-lg bg-beige",
                              children: (0, t.jsx)(i, {
                                className: "h-5 w-5 ".concat(e.color),
                              }),
                            }),
                          ],
                        }),
                      }),
                      (0, t.jsxs)(c.Wu, {
                        className: "pt-0",
                        children: [
                          (0, t.jsxs)("div", {
                            className: "mb-3",
                            children: [
                              (0, t.jsxs)("div", {
                                className:
                                  "flex items-center justify-between mb-1.5",
                                children: [
                                  (0, t.jsx)("span", {
                                    className: "text-xs text-[#344F1F]/70",
                                    children: l(
                                      "german.assessmentShared.progressBar.progress",
                                    ),
                                  }),
                                  (0, t.jsxs)("span", {
                                    className: "text-sm font-bold ".concat(o),
                                    children: [r.progress, "%"],
                                  }),
                                ],
                              }),
                              (0, t.jsx)("div", {
                                className:
                                  "h-2 bg-beige rounded-full overflow-hidden",
                                children: (0, t.jsx)("div", {
                                  className: "h-full ".concat(
                                    d,
                                    " transition-all duration-500 rounded-full",
                                  ),
                                  style: { width: "".concat(r.progress, "%") },
                                }),
                              }),
                            ],
                          }),
                          (0, t.jsxs)("div", {
                            className:
                              "flex items-center justify-between text-xs",
                            children: [
                              (0, t.jsx)("span", {
                                className: "text-[#344F1F]/70",
                                children: l(
                                  "german.assessment.testInfo.modules",
                                ),
                              }),
                              (0, t.jsxs)("span", {
                                className: "font-semibold text-[#344F1F]",
                                children: [
                                  r.modules_completed,
                                  " / ",
                                  r.total_modules,
                                ],
                              }),
                            ],
                          }),
                        ],
                      }),
                    ],
                  },
                  e.id,
                );
              }),
            }),
          ],
        });
      }
      var J = a(72982);
      let Q = {
        core_skills: "bg-primary/10 text-primary border-primary/20",
        workplace_german: "bg-[#344F1F]/10 text-[#344F1F] border-[#344F1F]/20",
        ausbildung_prep: "bg-primary/10 text-primary border-primary/20",
      };
      function U(e) {
        let { recommendations: s } = e,
          a = (0, n.useRouter)(),
          { t: r } = (0, H.ok)(),
          i = (e) => {
            switch (e) {
              case "core_skills":
              default:
                return r("german.progress.categories.coreSkills");
              case "workplace_german":
                return r("german.progress.categories.workplaceGerman");
              case "ausbildung_prep":
                return r("german.progress.categories.ausbildungPrep");
            }
          };
        return s && 0 !== s.length
          ? (0, t.jsxs)("div", {
              className: "space-y-4",
              children: [
                (0, t.jsxs)("div", {
                  className: "flex items-center gap-2",
                  children: [
                    (0, t.jsx)(J.A, { className: "h-5 w-5 text-primary" }),
                    (0, t.jsx)("h2", {
                      className: "text-lg font-bold text-[#344F1F]",
                      children: r("german.components.recommendations.title"),
                    }),
                  ],
                }),
                (0, t.jsx)("div", {
                  className: "grid grid-cols-1 md:grid-cols-3 gap-4",
                  children: s.map((e, s) => {
                    let l = Q[e.category] || Q.core_skills,
                      n = i(e.category);
                    return (0, t.jsxs)(
                      c.Zp,
                      {
                        className:
                          "bg-card border-2 border-beige hover:border-primary/30 hover:shadow-md transition-all",
                        children: [
                          (0, t.jsxs)(c.aR, {
                            className: "pb-3",
                            children: [
                              (0, t.jsxs)("div", {
                                className:
                                  "flex items-center justify-between mb-2",
                                children: [
                                  (0, t.jsx)(d.E, {
                                    variant: "outline",
                                    className:
                                      "text-xs font-medium border ".concat(l),
                                    children: n,
                                  }),
                                  (0, t.jsxs)("span", {
                                    className:
                                      "text-xs font-semibold text-primary",
                                    children: ["#", s + 1],
                                  }),
                                ],
                              }),
                              (0, t.jsx)(c.ZB, {
                                className:
                                  "text-base font-bold text-[#344F1F] leading-tight",
                                children: e.module_name,
                              }),
                            ],
                          }),
                          (0, t.jsxs)(c.Wu, {
                            className: "pt-0",
                            children: [
                              (0, t.jsx)("p", {
                                className:
                                  "text-sm text-[#344F1F]/70 mb-4 leading-snug",
                                children: e.reason,
                              }),
                              (0, t.jsxs)(o.$, {
                                onClick: () => a.push(e.module_path),
                                className:
                                  "w-full rounded-full bg-primary hover:bg-primary/90 text-white font-medium h-11",
                                size: "sm",
                                children: [
                                  1 === e.priority
                                    ? r("common.buttons.startNow")
                                    : r("common.buttons.continue"),
                                  (0, t.jsx)(w.A, {
                                    className: "ml-2 h-4 w-4",
                                  }),
                                ],
                              }),
                            ],
                          }),
                        ],
                      },
                      e.module_id,
                    );
                  }),
                }),
                s.length > 1 &&
                  (0, t.jsxs)("p", {
                    className:
                      "text-xs text-[#344F1F]/60 text-center md:hidden",
                    children: [
                      r("german.components.recommendations.subtitle"),
                      " →",
                    ],
                  }),
              ],
            })
          : (0, t.jsx)(c.Zp, {
              className: "bg-beige border-2 border-beige",
              children: (0, t.jsxs)(c.Wu, {
                className: "p-6 text-center",
                children: [
                  (0, t.jsx)(F.A, {
                    className: "h-12 w-12 text-[#344F1F]/40 mx-auto mb-3",
                  }),
                  (0, t.jsx)("p", {
                    className: "text-[#344F1F] font-semibold mb-1",
                    children: r("german.progress.goals.yourGoals"),
                  }),
                  (0, t.jsx)("p", {
                    className: "text-sm text-[#344F1F]/70",
                    children: r("german.progress.achievements.startPracticing"),
                  }),
                ],
              }),
            });
      }
      var V = a(54604);
      function X() {
        let e = (0, n.useRouter)(),
          s = (0, V.createClientComponentClient)(),
          { t: a } = (0, H.ok)(),
          [r, D] = (0, l.useState)(!0),
          [z, W] = (0, l.useState)({
            wordsLearned: 0,
            totalWords: 1e3,
            scenariosCompleted: 0,
            totalScenarios: 50,
            readyForB1: !1,
          }),
          [G, T] = (0, l.useState)(null),
          [K, Z] = (0, l.useState)(null),
          [B, $] = (0, l.useState)(!1),
          [M, O] = (0, l.useState)(null),
          [I, Y] = (0, l.useState)(null),
          [J, Q] = (0, l.useState)(""),
          [X, ee] = (0, l.useState)(null),
          [es, ea] = (0, l.useState)([]),
          et = [
            {
              id: "swipe",
              title: a("german.page.modules.articleTrainer.title"),
              subtitle: a("german.page.modules.articleTrainer.subtitle"),
              icon: b.A,
              bgColor: "bg-primary",
              iconColor: "text-primary",
              path: "/dashboard/german/swipe",
              preview: { type: "swipe", sample: "Azubi" },
            },
            {
              id: "sentence",
              title: a("german.page.modules.sentenceBuilder.title"),
              subtitle: a("german.page.modules.sentenceBuilder.subtitle"),
              icon: g.A,
              bgColor: "bg-primary",
              iconColor: "text-primary",
              path: "/dashboard/german/sentence-builder",
              preview: {
                type: "sentence",
                words: ["Ich", "arbeite", "bei", "BMW"],
              },
            },
            {
              id: "pattern",
              title: a("german.page.modules.patternMatch.title"),
              subtitle: a("german.page.modules.patternMatch.subtitle"),
              icon: p.A,
              bgColor: "bg-primary",
              iconColor: "text-secondary",
              path: "/dashboard/german/pattern-match",
              preview: {
                type: "pattern",
                pattern: ["Ich", "___", "zur Arbeit"],
                answer: "gehe",
              },
            },
            {
              id: "flashcards",
              title: a("german.page.modules.visualCards.title"),
              subtitle: a("german.page.modules.visualCards.subtitle"),
              icon: h.A,
              bgColor: "bg-primary",
              iconColor: "text-primary",
              path: "/dashboard/german/flashcards",
              preview: {
                type: "flashcard",
                word: "Werkzeug",
                translation: "Tool",
              },
            },
          ];
        (0, l.useEffect)(() => {
          (async () => {
            (await er(), await Promise.all([ei(), ec(), en(), el()]), D(!1));
          })();
        }, []);
        let er = async () => {
            try {
              let e = await fetch("/api/german/user/sector");
              if (e.ok) {
                let s = await e.json();
                (O(s.sector), Y(s.germanLevel), s.hasSelectedSector || $(!0));
              }
            } catch (e) {
              console.error("Error checking sector:", e);
            }
          },
          ei = async () => {
            try {
              let {
                data: { user: a },
              } = await s.auth.getUser();
              if (a) {
                var e;
                let { data: t } = await s
                  .from("user_profiles")
                  .select("full_name")
                  .eq("user_id", a.id)
                  .single();
                Q(
                  (null == t
                    ? void 0
                    : null === (e = t.full_name) || void 0 === e
                      ? void 0
                      : e.split(" ")[0]) || "Student",
                );
              }
            } catch (e) {
              console.error("Error loading user profile:", e);
            }
          },
          el = async () => {
            try {
              let e = await fetch("/api/german/recommendations");
              if (e.ok) {
                let s = await e.json();
                ea(s.recommendations || []);
              }
            } catch (e) {
              console.error("Error loading recommendations:", e);
            }
          },
          en = async () => {
            try {
              let e = await fetch("/api/german/stats");
              if (e.ok) {
                let s = await e.json();
                T(s);
              }
            } catch (e) {
              console.error("Failed to load German stats:", e);
            }
          },
          ec = async () => {
            try {
              let e = await fetch("/api/german/progress/overview");
              if (e.ok) {
                let s = await e.json();
                ee(s);
              }
              let [s, a] = await Promise.all([
                  fetch("/api/german/vocabulary/progress"),
                  fetch("/api/german/scenarios/progress"),
                ]),
                t = 0;
              s.ok && (t = (await s.json()).totalWordsLearned || 0);
              let r = 0;
              (a.ok && (r = (await a.json()).completedCount || 0),
                W({
                  wordsLearned: t,
                  totalWords: 1e3,
                  scenariosCompleted: r,
                  totalScenarios: 6,
                  readyForB1: !1,
                }));
            } catch (e) {
              console.error("Failed to load German dashboard overview:", e);
            }
          },
          eo = (s) => {
            e.push(s);
          };
        return r
          ? (0, t.jsx)(E.Gx, {})
          : (0, t.jsxs)(S.Ay, {
              module: "general",
              children: [
                (0, t.jsx)(L, {
                  open: B,
                  onComplete: (e) => {
                    (O(e), $(!1), el());
                  },
                  onClose: () => {
                    $(!1);
                  },
                }),
                (0, t.jsxs)("div", {
                  className:
                    "jsx-a7f9ab7c02f698b4 w-full max-w-7xl mx-auto px-4 py-6 sm:py-10 space-y-8",
                  children: [
                    J &&
                      (0, t.jsx)(R, { userName: J, sector: M, germanLevel: I }),
                    X &&
                      (0, t.jsx)(q, {
                        coreSkills: X.core_skills,
                        workplaceGerman: X.workplace_german,
                        ausbildungPrep: X.ausbildung_prep,
                        overallProgress: X.overall_progress,
                      }),
                    es.length > 0 && (0, t.jsx)(U, { recommendations: es }),
                    G &&
                      (0, t.jsx)(C.P.div, {
                        initial: { opacity: 0, y: -10 },
                        animate: { opacity: 1, y: 0 },
                        transition: { duration: 0.3 },
                        className: "mb-8",
                        children: (0, t.jsx)(c.Zp, {
                          className:
                            "bg-primary border-2 border-primary shadow-lg",
                          children: (0, t.jsxs)(c.Wu, {
                            className: "p-4",
                            children: [
                              (0, t.jsxs)("div", {
                                className:
                                  "jsx-a7f9ab7c02f698b4 grid grid-cols-2 md:grid-cols-4 gap-4",
                                children: [
                                  (0, t.jsxs)("div", {
                                    className:
                                      "jsx-a7f9ab7c02f698b4 flex items-center gap-3",
                                    children: [
                                      (0, t.jsx)("div", {
                                        className:
                                          "jsx-a7f9ab7c02f698b4 p-2.5 rounded-lg bg-white",
                                        children: (0, t.jsx)(f.A, {
                                          className: "h-5 w-5 text-primary",
                                        }),
                                      }),
                                      (0, t.jsxs)("div", {
                                        className: "jsx-a7f9ab7c02f698b4",
                                        children: [
                                          (0, t.jsx)("p", {
                                            className:
                                              "jsx-a7f9ab7c02f698b4 text-2xl font-bold text-white",
                                            children: G.quickStats.streak,
                                          }),
                                          (0, t.jsx)("p", {
                                            className:
                                              "jsx-a7f9ab7c02f698b4 text-xs text-white/90",
                                            children: a(
                                              "german.page.stats.dayStreak",
                                            ),
                                          }),
                                        ],
                                      }),
                                    ],
                                  }),
                                  (0, t.jsxs)("div", {
                                    className:
                                      "jsx-a7f9ab7c02f698b4 flex items-center gap-3",
                                    children: [
                                      (0, t.jsx)("div", {
                                        className:
                                          "jsx-a7f9ab7c02f698b4 p-2.5 rounded-lg bg-white",
                                        children: (0, t.jsx)(j.A, {
                                          className: "h-5 w-5 text-[#344F1F]",
                                        }),
                                      }),
                                      (0, t.jsxs)("div", {
                                        className: "jsx-a7f9ab7c02f698b4",
                                        children: [
                                          (0, t.jsx)("p", {
                                            className:
                                              "jsx-a7f9ab7c02f698b4 text-2xl font-bold text-white",
                                            children: G.quickStats.todayMinutes,
                                          }),
                                          (0, t.jsx)("p", {
                                            className:
                                              "jsx-a7f9ab7c02f698b4 text-xs text-white/90",
                                            children: a(
                                              "german.page.stats.minutesToday",
                                            ),
                                          }),
                                        ],
                                      }),
                                    ],
                                  }),
                                  (0, t.jsxs)("div", {
                                    className:
                                      "jsx-a7f9ab7c02f698b4 flex items-center gap-3",
                                    children: [
                                      (0, t.jsx)("div", {
                                        className:
                                          "jsx-a7f9ab7c02f698b4 p-2.5 rounded-lg bg-white",
                                        children: (0, t.jsx)(u.A, {
                                          className: "h-5 w-5 text-primary",
                                        }),
                                      }),
                                      (0, t.jsxs)("div", {
                                        className: "jsx-a7f9ab7c02f698b4",
                                        children: [
                                          (0, t.jsx)("p", {
                                            className:
                                              "jsx-a7f9ab7c02f698b4 text-2xl font-bold text-white",
                                            children:
                                              G.moduleStats.vocabulary
                                                .totalWords,
                                          }),
                                          (0, t.jsx)("p", {
                                            className:
                                              "jsx-a7f9ab7c02f698b4 text-xs text-white/90",
                                            children: a(
                                              "german.page.stats.wordsLearned",
                                            ),
                                          }),
                                        ],
                                      }),
                                    ],
                                  }),
                                  (0, t.jsxs)("div", {
                                    className:
                                      "jsx-a7f9ab7c02f698b4 flex items-center gap-3",
                                    children: [
                                      (0, t.jsx)("div", {
                                        className:
                                          "jsx-a7f9ab7c02f698b4 p-2.5 rounded-lg bg-white",
                                        children: (0, t.jsx)(N.A, {
                                          className: "h-5 w-5 text-[#344F1F]",
                                        }),
                                      }),
                                      (0, t.jsxs)("div", {
                                        className: "jsx-a7f9ab7c02f698b4",
                                        children: [
                                          (0, t.jsx)("p", {
                                            className:
                                              "jsx-a7f9ab7c02f698b4 text-2xl font-bold text-white",
                                            children:
                                              G.moduleStats.vocabulary
                                                .masteredWords,
                                          }),
                                          (0, t.jsx)("p", {
                                            className:
                                              "jsx-a7f9ab7c02f698b4 text-xs text-white/90",
                                            children: a(
                                              "german.page.stats.wordsMastered",
                                            ),
                                          }),
                                        ],
                                      }),
                                    ],
                                  }),
                                ],
                              }),
                              (0, t.jsxs)("div", {
                                className:
                                  "jsx-a7f9ab7c02f698b4 mt-4 pt-4 border-t border-white/20",
                                children: [
                                  (0, t.jsxs)("div", {
                                    className:
                                      "jsx-a7f9ab7c02f698b4 flex items-center justify-between mb-2",
                                    children: [
                                      (0, t.jsx)("p", {
                                        className:
                                          "jsx-a7f9ab7c02f698b4 text-xs font-semibold text-white",
                                        children: a(
                                          "german.page.stats.overallProgress",
                                        ),
                                      }),
                                      (0, t.jsxs)("p", {
                                        className:
                                          "jsx-a7f9ab7c02f698b4 text-xs font-bold text-white",
                                        children: [
                                          Math.round(
                                            G.moduleStats.vocabulary.progress,
                                          ),
                                          "%",
                                        ],
                                      }),
                                    ],
                                  }),
                                  (0, t.jsx)("div", {
                                    className:
                                      "jsx-a7f9ab7c02f698b4 w-full h-2 bg-white/20 rounded-full overflow-hidden",
                                    children: (0, t.jsx)(C.P.div, {
                                      initial: { width: 0 },
                                      animate: {
                                        width: "".concat(
                                          G.moduleStats.vocabulary.progress,
                                          "%",
                                        ),
                                      },
                                      transition: {
                                        duration: 1,
                                        ease: "easeOut",
                                      },
                                      className: "h-full bg-white rounded-full",
                                    }),
                                  }),
                                ],
                              }),
                            ],
                          }),
                        }),
                      }),
                    (0, t.jsxs)("section", {
                      className: "jsx-a7f9ab7c02f698b4",
                      children: [
                        (0, t.jsxs)(m.D, {
                          level: 2,
                          size: "compact",
                          className: "mb-6 flex items-center gap-2",
                          children: [
                            (0, t.jsx)(u.A, {
                              className: "h-5 w-5 text-primary",
                            }),
                            a("german.page.sections.coreSkills"),
                          ],
                        }),
                        (0, t.jsx)(x.f, {
                          className: "text-sm text-[#344F1F]/70 mb-6",
                          children: a("german.page.sections.coreSkillsDesc"),
                        }),
                        (0, t.jsx)("div", {
                          className:
                            "jsx-a7f9ab7c02f698b4 grid grid-cols-1 md:grid-cols-2 xl:grid-cols-4 gap-6",
                          children: et.map((e, s) => {
                            var r, i;
                            return (0, t.jsx)(
                              C.P.div,
                              {
                                initial: { opacity: 0 },
                                animate: { opacity: 1 },
                                transition: { duration: 0.5, delay: 0.1 * s },
                                whileHover: { y: -5 },
                                onHoverStart: () => Z(e.id),
                                onHoverEnd: () => Z(null),
                                className: "relative group",
                                children: (0, t.jsx)(c.Zp, {
                                  className:
                                    "h-full cursor-pointer overflow-hidden transition-all duration-300 "
                                      .concat(e.bgColor, " ")
                                      .concat(
                                        K === e.id ? "shadow-xl" : "shadow-md",
                                      ),
                                  onClick: () => eo(e.path),
                                  children: (0, t.jsxs)(c.Wu, {
                                    className:
                                      "relative p-6 h-full flex flex-col",
                                    children: [
                                      (0, t.jsxs)("div", {
                                        className:
                                          "jsx-a7f9ab7c02f698b4 flex items-start justify-between mb-4",
                                        children: [
                                          (0, t.jsxs)("div", {
                                            className: "jsx-a7f9ab7c02f698b4",
                                            children: [
                                              (0, t.jsx)(m.D, {
                                                level: 3,
                                                size: "compact",
                                                className: "text-white",
                                                children: e.title,
                                              }),
                                              (0, t.jsx)(x.f, {
                                                size: "sm",
                                                className: "text-white/90",
                                                children: e.subtitle,
                                              }),
                                            ],
                                          }),
                                          (0, t.jsx)("div", {
                                            className:
                                              "jsx-a7f9ab7c02f698b4 p-3 rounded-lg bg-white shadow-md",
                                            children: (0, t.jsx)(e.icon, {
                                              className:
                                                "h-5 w-5 text-[#344F1F]",
                                            }),
                                          }),
                                        ],
                                      }),
                                      (0, t.jsxs)("div", {
                                        className:
                                          "jsx-a7f9ab7c02f698b4 flex-1 flex items-center justify-center my-6",
                                        children: [
                                          "swipe" === e.preview.type &&
                                            (0, t.jsxs)(C.P.div, {
                                              animate:
                                                K === e.id
                                                  ? { rotateZ: [0, -5, 5, 0] }
                                                  : {},
                                              transition: { duration: 0.5 },
                                              className:
                                                "bg-white rounded-xl p-4 shadow-lg border border-border",
                                              children: [
                                                (0, t.jsx)("p", {
                                                  className:
                                                    "jsx-a7f9ab7c02f698b4 text-2xl font-bold text-center mb-2 text-secondary",
                                                  children: e.preview.sample,
                                                }),
                                                (0, t.jsxs)("div", {
                                                  className:
                                                    "jsx-a7f9ab7c02f698b4 flex justify-center gap-2 text-xs",
                                                  children: [
                                                    (0, t.jsx)("span", {
                                                      className:
                                                        "jsx-a7f9ab7c02f698b4 px-2 py-1 rounded bg-beige text-secondary font-medium",
                                                      children: "der",
                                                    }),
                                                    (0, t.jsx)("span", {
                                                      className:
                                                        "jsx-a7f9ab7c02f698b4 px-2 py-1 rounded bg-cream text-secondary font-medium",
                                                      children: "die",
                                                    }),
                                                    (0, t.jsx)("span", {
                                                      className:
                                                        "jsx-a7f9ab7c02f698b4 px-2 py-1 rounded bg-card text-secondary font-medium",
                                                      children: "das",
                                                    }),
                                                  ],
                                                }),
                                              ],
                                            }),
                                          "sentence" === e.preview.type &&
                                            (0, t.jsx)("div", {
                                              className:
                                                "jsx-a7f9ab7c02f698b4 space-y-2",
                                              children: (0, t.jsx)("div", {
                                                className:
                                                  "jsx-a7f9ab7c02f698b4 flex gap-1 flex-wrap justify-center",
                                                children:
                                                  null ===
                                                    (r = e.preview.words) ||
                                                  void 0 === r
                                                    ? void 0
                                                    : r.map((s, a) =>
                                                        (0, t.jsx)(
                                                          C.P.span,
                                                          {
                                                            animate:
                                                              K === e.id
                                                                ? {
                                                                    y: [
                                                                      0, -3, 0,
                                                                    ],
                                                                  }
                                                                : {},
                                                            transition: {
                                                              delay: 0.1 * a,
                                                            },
                                                            className:
                                                              "px-3 py-1 bg-white rounded-lg shadow text-sm font-medium border border-border text-secondary",
                                                            children: s,
                                                          },
                                                          a,
                                                        ),
                                                      ),
                                              }),
                                            }),
                                          "pattern" === e.preview.type &&
                                            (0, t.jsxs)("div", {
                                              className:
                                                "jsx-a7f9ab7c02f698b4 bg-white rounded-xl p-3 shadow-lg border border-border",
                                              children: [
                                                (0, t.jsx)("div", {
                                                  className:
                                                    "jsx-a7f9ab7c02f698b4 flex gap-1 items-center justify-center text-sm text-secondary",
                                                  children:
                                                    null ===
                                                      (i = e.preview.pattern) ||
                                                    void 0 === i
                                                      ? void 0
                                                      : i.map((e, s) =>
                                                          (0, t.jsx)(
                                                            "span",
                                                            {
                                                              className:
                                                                "jsx-a7f9ab7c02f698b4 " +
                                                                (("___" === e
                                                                  ? "px-3 py-1 border-b-2 border-dashed border-primary"
                                                                  : "") || ""),
                                                              children: e,
                                                            },
                                                            s,
                                                          ),
                                                        ),
                                                }),
                                                (0, t.jsx)(C.P.p, {
                                                  animate:
                                                    K === e.id
                                                      ? { opacity: 1 }
                                                      : { opacity: 0 },
                                                  className:
                                                    "text-xs text-center mt-2 text-secondary font-medium",
                                                  children: e.preview.answer,
                                                }),
                                              ],
                                            }),
                                          "flashcard" === e.preview.type &&
                                            (0, t.jsxs)(C.P.div, {
                                              animate:
                                                K === e.id
                                                  ? { rotateY: 180 }
                                                  : { rotateY: 0 },
                                              transition: { duration: 0.6 },
                                              style: {
                                                transformStyle: "preserve-3d",
                                              },
                                              className: "relative w-32 h-20",
                                              children: [
                                                (0, t.jsx)("div", {
                                                  className:
                                                    "jsx-a7f9ab7c02f698b4 absolute inset-0 bg-white rounded-xl shadow-lg border border-border flex items-center justify-center backface-hidden",
                                                  children: (0, t.jsx)("p", {
                                                    className:
                                                      "jsx-a7f9ab7c02f698b4 font-bold text-secondary",
                                                    children: e.preview.word,
                                                  }),
                                                }),
                                                (0, t.jsx)("div", {
                                                  className:
                                                    "jsx-a7f9ab7c02f698b4 absolute inset-0 bg-primary rounded-xl shadow-lg flex items-center justify-center [transform:rotateY(180deg)] backface-hidden",
                                                  children: (0, t.jsx)("p", {
                                                    className:
                                                      "jsx-a7f9ab7c02f698b4 font-bold text-white",
                                                    children:
                                                      e.preview.translation,
                                                  }),
                                                }),
                                              ],
                                            }),
                                        ],
                                      }),
                                      (0, t.jsxs)(o.$, {
                                        className:
                                          "w-full group-hover:shadow-lg transition-all bg-[#344F1F] hover:bg-[#2a3f19] text-white",
                                        children: [
                                          a(
                                            "german.page.buttons.startTraining",
                                          ),
                                          (0, t.jsx)(w.A, {
                                            className:
                                              "ml-2 h-4 w-4 group-hover:translate-x-1 transition-transform",
                                          }),
                                        ],
                                      }),
                                    ],
                                  }),
                                }),
                              },
                              e.id,
                            );
                          }),
                        }),
                      ],
                    }),
                    (0, t.jsxs)("section", {
                      className: "jsx-a7f9ab7c02f698b4",
                      children: [
                        (0, t.jsxs)(m.D, {
                          level: 2,
                          size: "compact",
                          className: "mb-6 flex items-center gap-2",
                          children: [
                            (0, t.jsx)(v.A, {
                              className: "h-5 w-5 text-[#344F1F]",
                            }),
                            a("german.page.sections.workplaceGerman"),
                          ],
                        }),
                        (0, t.jsx)(x.f, {
                          className: "text-sm text-[#344F1F]/70 mb-6",
                          children: a(
                            "german.page.sections.workplaceGermanDesc",
                          ),
                        }),
                        (0, t.jsx)(c.Zp, {
                          className:
                            "hover:shadow-lg transition-all cursor-pointer bg-card border-2 border-beige",
                          onClick: () => eo("/dashboard/german/scenarios"),
                          children: (0, t.jsx)(c.Wu, {
                            className: "p-6",
                            children: (0, t.jsxs)("div", {
                              className:
                                "jsx-a7f9ab7c02f698b4 flex items-center justify-between",
                              children: [
                                (0, t.jsxs)("div", {
                                  className: "jsx-a7f9ab7c02f698b4",
                                  children: [
                                    (0, t.jsx)(m.D, {
                                      level: 3,
                                      size: "compact",
                                      className: "mb-1",
                                      children: a(
                                        "german.page.workplaceScenarios.title",
                                      ),
                                    }),
                                    (0, t.jsx)(x.f, {
                                      size: "sm",
                                      className: "text-[#344F1F]/70",
                                      children: a(
                                        "german.page.workplaceScenarios.description",
                                      ),
                                    }),
                                  ],
                                }),
                                (0, t.jsxs)(o.$, {
                                  variant: "outline",
                                  className: "rounded-full",
                                  children: [
                                    a("german.page.buttons.viewAll"),
                                    (0, t.jsx)(y.A, {
                                      className: "ml-2 h-4 w-4",
                                    }),
                                  ],
                                }),
                              ],
                            }),
                          }),
                        }),
                      ],
                    }),
                    (0, t.jsxs)("section", {
                      className: "jsx-a7f9ab7c02f698b4",
                      children: [
                        (0, t.jsxs)(m.D, {
                          level: 2,
                          size: "compact",
                          className: "mb-6 flex items-center gap-2",
                          children: [
                            (0, t.jsx)(F.A, {
                              className: "h-5 w-5 text-primary",
                            }),
                            a("german.page.sections.ausbildungPrep"),
                          ],
                        }),
                        (0, t.jsx)(x.f, {
                          className: "text-sm text-[#344F1F]/70 mb-6",
                          children: a(
                            "german.page.sections.ausbildungPrepDesc",
                          ),
                        }),
                        (0, t.jsxs)("div", {
                          className:
                            "jsx-a7f9ab7c02f698b4 grid grid-cols-1 md:grid-cols-2 gap-6",
                          children: [
                            (0, t.jsx)(c.Zp, {
                              className:
                                "hover:shadow-lg transition-all cursor-pointer bg-card border-2 border-beige",
                              onClick: () => eo("/dashboard/german/forms"),
                              children: (0, t.jsxs)(c.Wu, {
                                className: "p-6",
                                children: [
                                  (0, t.jsxs)("div", {
                                    className:
                                      "jsx-a7f9ab7c02f698b4 flex items-center gap-3 mb-3",
                                    children: [
                                      (0, t.jsx)("div", {
                                        className:
                                          "jsx-a7f9ab7c02f698b4 p-3 rounded-xl bg-[#344F1F]",
                                        children: (0, t.jsx)(k.A, {
                                          className: "h-5 w-5 text-white",
                                        }),
                                      }),
                                      (0, t.jsxs)("div", {
                                        className: "jsx-a7f9ab7c02f698b4",
                                        children: [
                                          (0, t.jsx)(m.D, {
                                            level: 3,
                                            size: "compact",
                                            className: "mb-1",
                                            children: a(
                                              "german.page.formFilling.title",
                                            ),
                                          }),
                                          (0, t.jsx)(x.f, {
                                            size: "sm",
                                            className: "text-[#344F1F]/70",
                                            children: a(
                                              "german.page.formFilling.description",
                                            ),
                                          }),
                                        ],
                                      }),
                                    ],
                                  }),
                                  (0, t.jsxs)("div", {
                                    className:
                                      "jsx-a7f9ab7c02f698b4 flex flex-wrap gap-2 mb-4",
                                    children: [
                                      (0, t.jsx)(d.E, {
                                        variant: "outline",
                                        className:
                                          "bg-beige text-[#344F1F] border-beige text-xs",
                                        children: a(
                                          "german.page.formFilling.badges.essentialForms",
                                        ),
                                      }),
                                      (0, t.jsx)(d.E, {
                                        variant: "outline",
                                        className:
                                          "bg-beige text-[#344F1F] border-beige text-xs",
                                        children: a(
                                          "german.page.formFilling.badges.fieldHelpers",
                                        ),
                                      }),
                                      (0, t.jsx)(d.E, {
                                        variant: "outline",
                                        className:
                                          "bg-beige text-[#344F1F] border-beige text-xs",
                                        children: a(
                                          "german.page.formFilling.badges.exampleData",
                                        ),
                                      }),
                                    ],
                                  }),
                                  (0, t.jsxs)(o.$, {
                                    variant: "outline",
                                    className: "w-full rounded-full",
                                    children: [
                                      a("german.page.buttons.startPractice"),
                                      (0, t.jsx)(y.A, {
                                        className: "ml-2 h-4 w-4",
                                      }),
                                    ],
                                  }),
                                ],
                              }),
                            }),
                            (0, t.jsx)(c.Zp, {
                              className:
                                "hover:shadow-lg transition-all cursor-pointer bg-card border-2 border-beige",
                              onClick: () =>
                                eo("/dashboard/german/job-postings"),
                              children: (0, t.jsxs)(c.Wu, {
                                className: "p-6",
                                children: [
                                  (0, t.jsxs)("div", {
                                    className:
                                      "jsx-a7f9ab7c02f698b4 flex items-center gap-3 mb-3",
                                    children: [
                                      (0, t.jsx)("div", {
                                        className:
                                          "jsx-a7f9ab7c02f698b4 p-3 rounded-xl bg-primary",
                                        children: (0, t.jsx)(k.A, {
                                          className: "h-5 w-5 text-white",
                                        }),
                                      }),
                                      (0, t.jsxs)("div", {
                                        className: "jsx-a7f9ab7c02f698b4",
                                        children: [
                                          (0, t.jsx)(m.D, {
                                            level: 3,
                                            size: "compact",
                                            className: "mb-1",
                                            children: a(
                                              "german.page.jobPosting.title",
                                            ),
                                          }),
                                          (0, t.jsx)(x.f, {
                                            size: "sm",
                                            className: "text-[#344F1F]/70",
                                            children: a(
                                              "german.page.jobPosting.description",
                                            ),
                                          }),
                                        ],
                                      }),
                                    ],
                                  }),
                                  (0, t.jsxs)("div", {
                                    className:
                                      "jsx-a7f9ab7c02f698b4 flex flex-wrap gap-2 mb-4",
                                    children: [
                                      (0, t.jsx)(d.E, {
                                        variant: "outline",
                                        className:
                                          "bg-beige text-[#344F1F] border-beige text-xs",
                                        children: a(
                                          "german.page.jobPosting.badges.completeJobs",
                                        ),
                                      }),
                                      (0, t.jsx)(d.E, {
                                        variant: "outline",
                                        className:
                                          "bg-beige text-[#344F1F] border-beige text-xs",
                                        children: a(
                                          "german.page.jobPosting.badges.germanEnglish",
                                        ),
                                      }),
                                      (0, t.jsx)(d.E, {
                                        variant: "outline",
                                        className:
                                          "bg-beige text-[#344F1F] border-beige text-xs",
                                        children: a(
                                          "german.page.jobPosting.badges.vocabularyHelp",
                                        ),
                                      }),
                                    ],
                                  }),
                                  (0, t.jsxs)(o.$, {
                                    variant: "outline",
                                    className: "w-full rounded-full",
                                    children: [
                                      a("german.page.buttons.startReading"),
                                      (0, t.jsx)(y.A, {
                                        className: "ml-2 h-4 w-4",
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
                    (0, t.jsx)(C.P.div, {
                      initial: { opacity: 0, y: 20 },
                      animate: { opacity: 1, y: 0 },
                      transition: { duration: 0.5, delay: 0.4 },
                      className: "w-full mt-8",
                      children: (0, t.jsx)("div", {
                        onClick: () => eo("/dashboard/german/assessment"),
                        className:
                          "jsx-a7f9ab7c02f698b4 bg-primary rounded-2xl p-6 md:p-10 cursor-pointer hover:shadow-xl transition-all",
                        children: (0, t.jsx)("div", {
                          className: "jsx-a7f9ab7c02f698b4 max-w-6xl mx-auto",
                          children: (0, t.jsxs)("div", {
                            className:
                              "jsx-a7f9ab7c02f698b4 flex flex-col md:flex-row items-center gap-6 md:gap-8",
                            children: [
                              (0, t.jsx)(C.P.div, {
                                className: "flex-shrink-0",
                                whileHover: { scale: 1.05 },
                                transition: { type: "spring", stiffness: 300 },
                                children: (0, t.jsx)("div", {
                                  className:
                                    "jsx-a7f9ab7c02f698b4 relative w-40 h-40 md:w-48 md:h-48",
                                  children: (0, t.jsx)("img", {
                                    src: "/mascot/mascot_celebrating_female.webp",
                                    alt: "Young Oak ready for testing",
                                    className:
                                      "jsx-a7f9ab7c02f698b4 object-contain w-full h-full",
                                  }),
                                }),
                              }),
                              (0, t.jsxs)("div", {
                                className:
                                  "jsx-a7f9ab7c02f698b4 flex-1 text-center md:text-left",
                                children: [
                                  (0, t.jsxs)(m.D, {
                                    level: 2,
                                    className:
                                      "text-white mb-3 flex items-center justify-center md:justify-start gap-2",
                                    children: [
                                      (0, t.jsx)(F.A, { className: "h-6 w-6" }),
                                      a("german.page.assessment.title"),
                                    ],
                                  }),
                                  (0, t.jsx)(x.f, {
                                    className:
                                      "text-white/95 leading-relaxed mb-4",
                                    children: a(
                                      "german.page.assessment.description",
                                    ),
                                  }),
                                  (0, t.jsxs)(o.$, {
                                    size: "lg",
                                    className:
                                      "bg-[#344F1F] hover:bg-[#2a3f19] text-white shadow-lg hover:shadow-xl transition-all rounded-full px-8",
                                    children: [
                                      a("german.page.buttons.startAssessment"),
                                      (0, t.jsx)(w.A, {
                                        className: "ml-2 h-5 w-5",
                                      }),
                                    ],
                                  }),
                                ],
                              }),
                              (0, t.jsxs)("div", {
                                className:
                                  "jsx-a7f9ab7c02f698b4 flex-shrink-0 grid grid-cols-2 gap-3",
                                children: [
                                  (0, t.jsxs)("div", {
                                    className:
                                      "jsx-a7f9ab7c02f698b4 flex flex-col items-center gap-2 bg-[#E5890F] rounded-xl p-4 min-w-[140px]",
                                    children: [
                                      (0, t.jsx)(u.A, {
                                        className: "w-6 h-6 text-white",
                                      }),
                                      (0, t.jsx)("span", {
                                        className:
                                          "jsx-a7f9ab7c02f698b4 text-white font-medium text-sm text-center",
                                        children: a(
                                          "german.page.assessment.features.readingTests",
                                        ),
                                      }),
                                    ],
                                  }),
                                  (0, t.jsxs)("div", {
                                    className:
                                      "jsx-a7f9ab7c02f698b4 flex flex-col items-center gap-2 bg-[#E5890F] rounded-xl p-4 min-w-[140px]",
                                    children: [
                                      (0, t.jsx)(v.A, {
                                        className: "w-6 h-6 text-white",
                                      }),
                                      (0, t.jsx)("span", {
                                        className:
                                          "jsx-a7f9ab7c02f698b4 text-white font-medium text-sm text-center",
                                        children: a(
                                          "german.page.assessment.features.writingTests",
                                        ),
                                      }),
                                    ],
                                  }),
                                  (0, t.jsxs)("div", {
                                    className:
                                      "jsx-a7f9ab7c02f698b4 flex flex-col items-center gap-2 bg-[#E5890F] rounded-xl p-4 min-w-[140px]",
                                    children: [
                                      (0, t.jsx)(N.A, {
                                        className: "w-6 h-6 text-white",
                                      }),
                                      (0, t.jsx)("span", {
                                        className:
                                          "jsx-a7f9ab7c02f698b4 text-white font-medium text-sm text-center",
                                        children: a(
                                          "german.page.assessment.features.getCertified",
                                        ),
                                      }),
                                    ],
                                  }),
                                  (0, t.jsxs)("div", {
                                    className:
                                      "jsx-a7f9ab7c02f698b4 flex flex-col items-center gap-2 bg-[#E5890F] rounded-xl p-4 min-w-[140px]",
                                    children: [
                                      (0, t.jsx)(A.A, {
                                        className: "w-6 h-6 text-white",
                                      }),
                                      (0, t.jsx)("span", {
                                        className:
                                          "jsx-a7f9ab7c02f698b4 text-white font-medium text-sm text-center",
                                        children: a(
                                          "german.page.assessment.features.trackProgress",
                                        ),
                                      }),
                                    ],
                                  }),
                                ],
                              }),
                            ],
                          }),
                        }),
                      }),
                    }),
                    (0, t.jsx)(C.P.div, {
                      initial: { opacity: 0, y: 20 },
                      animate: { opacity: 1, y: 0 },
                      transition: { duration: 0.5, delay: 0.5 },
                      className: "w-full mt-6",
                      children: (0, t.jsx)("a", {
                        href: "https://bookgermantest.com/game?ref=Azubi",
                        target: "_blank",
                        rel: "noopener noreferrer",
                        className: "jsx-a7f9ab7c02f698b4 block",
                        children: (0, t.jsx)("div", {
                          className:
                            "jsx-a7f9ab7c02f698b4 bg-gradient-to-r from-slate-800 to-slate-900 rounded-xl p-4 md:p-5 hover:shadow-lg transition-all border border-slate-700/50 group",
                          children: (0, t.jsxs)("div", {
                            className:
                              "jsx-a7f9ab7c02f698b4 flex items-center gap-4",
                            children: [
                              (0, t.jsx)("div", {
                                className:
                                  "jsx-a7f9ab7c02f698b4 flex-shrink-0 w-10 h-10 rounded-lg bg-amber-500/20 flex items-center justify-center",
                                children: (0, t.jsx)(P.A, {
                                  className: "w-5 h-5 text-amber-400",
                                }),
                              }),
                              (0, t.jsxs)("div", {
                                className:
                                  "jsx-a7f9ab7c02f698b4 flex-1 min-w-0",
                                children: [
                                  (0, t.jsxs)("div", {
                                    className:
                                      "jsx-a7f9ab7c02f698b4 flex items-center gap-2",
                                    children: [
                                      (0, t.jsx)("span", {
                                        className:
                                          "jsx-a7f9ab7c02f698b4 font-medium text-white",
                                        children: "German Exam Readiness Quiz",
                                      }),
                                      (0, t.jsx)(d.E, {
                                        variant: "outline",
                                        className:
                                          "text-[10px] px-1.5 py-0 border-amber-500/50 text-amber-400",
                                        children: "FREE",
                                      }),
                                    ],
                                  }),
                                  (0, t.jsx)("p", {
                                    className:
                                      "jsx-a7f9ab7c02f698b4 text-sm text-slate-400 mt-0.5",
                                    children:
                                      "Test your readiness for Goethe, \xd6SD, TELC & TestDaF exams",
                                  }),
                                ],
                              }),
                              (0, t.jsx)(_.A, {
                                className:
                                  "w-4 h-4 text-slate-500 group-hover:text-amber-400 transition-colors flex-shrink-0",
                              }),
                            ],
                          }),
                        }),
                      }),
                    }),
                  ],
                }),
                (0, t.jsx)(i(), {
                  id: "a7f9ab7c02f698b4",
                  children:
                    ".backface-hidden.jsx-a7f9ab7c02f698b4{-webkit-backface-visibility:hidden;-moz-backface-visibility:hidden;backface-visibility:hidden}",
                }),
              ],
            });
      }
    },
    99462: (e, s, a) => {
      Promise.resolve().then(a.bind(a, 62703));
    },
  },
  (e) => {
    var s = (s) => e((e.s = s));
    (e.O(0, [46593, 36209, 84121, 72076, 77358], () => s(99462)),
      (_N_E = e.O()));
  },
]);
