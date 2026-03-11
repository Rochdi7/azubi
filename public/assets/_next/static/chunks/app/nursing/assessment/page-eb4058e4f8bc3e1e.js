(self.webpackChunk_N_E = self.webpackChunk_N_E || []).push([
  [6994],
  {
    2697: (e, s, r) => {
      (Promise.resolve().then(r.bind(r, 79574)),
        Promise.resolve().then(r.bind(r, 75344)),
        Promise.resolve().then(r.bind(r, 78166)),
        Promise.resolve().then(r.bind(r, 72901)),
        Promise.resolve().then(r.bind(r, 48627)),
        Promise.resolve().then(r.bind(r, 11318)),
        Promise.resolve().then(r.bind(r, 96719)),
        Promise.resolve().then(r.bind(r, 64518)),
        Promise.resolve().then(r.bind(r, 48362)),
        Promise.resolve().then(r.bind(r, 14966)),
        Promise.resolve().then(r.bind(r, 53890)),
        Promise.resolve().then(r.bind(r, 66050)),
        Promise.resolve().then(r.bind(r, 20787)));
    },
    11318: (e, s, r) => {
      "use strict";
      r.d(s, { NursingResultsScreen: () => b });
      var a = r(70207),
        t = r(87223),
        i = r(39441),
        n = r(80187),
        l = r(25385),
        c = r(45180),
        o = r(95992),
        d = r(18790),
        m = r(52461),
        u = r(28131),
        h = r(5101),
        x = r(70005),
        p = r(74285),
        g = r(99251),
        f = r(46031),
        j = r(82110),
        y = r(50488),
        N = r(10542),
        v = r.n(N);
      function b(e) {
        let { answers: s, onReset: r } = e,
          [N, b] = (0, t.useState)(!1),
          [_, w] = (0, t.useState)(!1),
          [A, k] = (0, t.useState)(!1),
          C = (0, t.useRef)(!1),
          {
            eligibilityScore: q,
            recommendation: S,
            recommendations: E,
            estimatedTimeline: P,
            supportLevel: G,
          } = (function (e) {
            let s,
              r,
              a,
              t,
              i = 0,
              n = [],
              l = [];
            switch (e.educationLevel) {
              case "bachelor-nursing":
                i += 30;
                break;
              case "diploma-nursing":
                i += 25;
                break;
              case "bachelor-other":
                ((i += 20),
                  n.push(
                    "Consider additional nursing-specific qualifications",
                  ));
                break;
              case "diploma-other":
                ((i += 15),
                  n.push("Nursing education or certification may be required"));
                break;
              case "healthcare-cert":
                ((i += 12), n.push("Formal nursing education recommended"));
                break;
              case "no-background":
                ((i += 5),
                  n.push(
                    "Complete nursing education or healthcare foundation courses",
                  ));
            }
            switch (e.experienceLevel) {
              case "5plus":
                i += 25;
                break;
              case "2-5":
                i += 20;
                break;
              case "0-2":
                i += 15;
                break;
              case "none":
                ((i += 5),
                  n.push(
                    "Gain practical healthcare experience through internships or volunteering",
                  ));
            }
            switch (e.germanLevel) {
              case "b2-plus":
                i += 30;
                break;
              case "b1":
                ((i += 22),
                  n.push(
                    "Improve German to B2 level for better opportunities",
                  ));
                break;
              case "a2":
                ((i += 15),
                  n.push(
                    "Intensive German language training required (target: B2)",
                  ));
                break;
              case "a1":
                ((i += 8),
                  n.push("Extensive German language preparation needed"));
                break;
              case "none":
                ((i += 0),
                  n.push(
                    "German language skills are essential - start with A1 level",
                  ));
            }
            switch (e.timelinePreference) {
              case "asap":
                i += 10;
                break;
              case "medium":
                i += 8;
                break;
              case "long-term":
                i += 6;
            }
            return (
              (i += 5) >= 80
                ? ((s = "Direct Placement"),
                  (r =
                    "You are well-qualified for direct placement in German healthcare facilities. Your strong nursing background and German language skills make you an excellent candidate."),
                  (a = "6-12 months"),
                  (t = "High"),
                  l.push(
                    "Apply for recognition of your nursing qualifications",
                  ),
                  l.push(
                    "Prepare for direct job applications in German healthcare",
                  ),
                  l.push(
                    "Consider specialized nursing certifications in Germany",
                  ))
                : i >= 65
                  ? ((s = "Ausbildung"),
                    (r =
                      "A nursing Ausbildung program would be ideal for you. This provides comprehensive training while earning a salary and guarantees job placement."),
                    (a = "3-4 years (including preparation)"),
                    (t = "High"),
                    l.push("Apply for nursing Ausbildung programs"),
                    l.push("Improve German language skills if needed"),
                    l.push("Prepare application documents and CV"))
                  : i >= 45
                    ? ((s = "Preparation Needed"),
                      (r =
                        "You need some preparation before applying. Focus on improving your German language skills and gaining healthcare experience."),
                      (a = "1-2 years preparation + 3 years Ausbildung"),
                      (t = "Medium"),
                      l.push("Enroll in intensive German language course"),
                      l.push(
                        "Gain healthcare experience through volunteering or courses",
                      ),
                      l.push("Research nursing requirements in Germany"))
                    : ((s = "Not Eligible"),
                      (r =
                        "Significant preparation is needed to meet the requirements for nursing in Germany. Consider starting with healthcare foundation courses."),
                      (a = "2-3 years preparation + 3 years Ausbildung"),
                      (t = "Low"),
                      l.push("Complete basic healthcare education"),
                      l.push("Start German language learning from basics"),
                      l.push("Consider alternative healthcare pathways")),
              {
                eligibilityScore: i,
                recommendation: s,
                recommendations: {
                  pathwayRecommendation: r,
                  nextSteps: l,
                  improvementAreas: n,
                },
                estimatedTimeline: a,
                supportLevel: t,
              }
            );
          })(s),
          B = "Direct Placement" === S || "Ausbildung" === S,
          L = (0, t.useCallback)(() => {
            if (!s.email) return null;
            try {
              let e = JSON.parse(s.email);
              if (!e.firstName || !e.phone || !e.email) return null;
              return e;
            } catch (e) {
              return (console.error("Error parsing contact data:", e), null);
            }
          }, [s.email]),
          F = (0, t.useCallback)(
            (e) =>
              "nursing-"
                .concat(e.email, "-")
                .concat(e.phone, "-")
                .concat(Date.now().toString().slice(0, 8)),
            [],
          ),
          D = (0, t.useCallback)((e) => {
            try {
              return localStorage.getItem("nursing_submission_id") === e;
            } catch (e) {
              return !1;
            }
          }, []),
          R = (0, t.useCallback)((e) => {
            try {
              localStorage.setItem("nursing_submission_id", e);
            } catch (e) {
              console.error("Error saving submission state:", e);
            }
          }, []);
        (0, t.useEffect)(() => {
          try {
            window.datafast &&
              window.datafast("nursing_assessment", {
                description: "Nursing assessment completed",
                recommendation: S,
                score: q,
              });
          } catch (e) {
            console.error("Error tracking nursing assessment:", e);
          }
        }, [q, S]);
        let T = (0, t.useCallback)(
          async (e) => {
            if (A || C.current) return;
            C.current = !0;
            let r = F(e);
            if (D(r)) {
              k(!0);
              return;
            }
            w(!0);
            try {
              let a = await fetch("/api/slack", {
                  method: "POST",
                  headers: { "Content-Type": "application/json" },
                  body: JSON.stringify({
                    contactData: e,
                    assessmentType: "nursing",
                    eligibilityScore: q,
                    recommendation: S,
                    estimatedTimeline: P,
                    supportLevel: G,
                    profileDetails: {
                      educationLevel: s.educationLevel,
                      experienceLevel: s.experienceLevel,
                      germanLevel: s.germanLevel,
                      timelinePreference: s.timelinePreference,
                      preferredLocation: s.preferredLocation,
                    },
                  }),
                }),
                t = await a.json();
              a.ok
                ? (R(r),
                  k(!0),
                  (0, y.oR)({
                    title: "Thank you!",
                    description:
                      "Your nursing assessment has been submitted successfully.",
                    variant: "default",
                  }))
                : (console.error("Error sending nursing assessment:", t.error),
                  (C.current = !1),
                  (0, y.oR)({
                    title: "Something went wrong",
                    description:
                      "We couldn't submit your assessment. Please try again.",
                    variant: "destructive",
                  }));
            } catch (e) {
              var a;
              (console.error("Fetch error details:", e),
                console.error(
                  "Error type:",
                  null == e
                    ? void 0
                    : null === (a = e.constructor) || void 0 === a
                      ? void 0
                      : a.name,
                ),
                console.error("Error message:", null == e ? void 0 : e.message),
                (C.current = !1),
                (0, y.oR)({
                  title: "Connection error",
                  description: "Network error: ".concat(
                    (null == e ? void 0 : e.message) ||
                      "Please check your connection and try again.",
                  ),
                  variant: "destructive",
                }));
            } finally {
              w(!1);
            }
          },
          [A, q, S, P, G, s, F, D, R],
        );
        (0, t.useEffect)(() => {
          if (C.current) return;
          let e = L();
          e && !A && T(e);
        }, [A, L, T]);
        let M = {
            "Direct Placement": {
              text: "text-green-600",
              bg: "bg-green-100",
              border: "border-green-200",
              shadow: "shadow-green-500/10",
            },
            Ausbildung: {
              text: "text-primary",
              bg: "bg-beige",
              border: "border-border",
              shadow: "shadow-blue-500/10",
            },
            "Preparation Needed": {
              text: "text-amber-600",
              bg: "bg-amber-100",
              border: "border-amber-200",
              shadow: "shadow-amber-500/10",
            },
            "Not Eligible": {
              text: "text-red-600",
              bg: "bg-red-100",
              border: "border-red-200",
              shadow: "shadow-red-500/10",
            },
          },
          z = {
            "Direct Placement": (0, a.jsx)(l.A, {
              className: "h-8 w-8 text-green-500",
            }),
            Ausbildung: (0, a.jsx)(c.A, { className: "h-8 w-8 text-primary" }),
            "Preparation Needed": (0, a.jsx)(o.A, {
              className: "h-8 w-8 text-amber-500",
            }),
            "Not Eligible": (0, a.jsx)(d.A, {
              className: "h-8 w-8 text-red-500",
            }),
          },
          W = (0, t.useCallback)(() => {
            let e = document.createElement("div");
            if (
              ((e.innerHTML = "\uD83C\uDF89"),
              (e.style.cssText =
                "\n      position: fixed;\n      top: 50%;\n      left: 50%;\n      transform: translate(-50%, -50%);\n      font-size: 4rem;\n      animation: celebration 2s ease-out forwards;\n      pointer-events: none;\n      z-index: 9999;\n    "),
              !document.getElementById("celebration-style"))
            ) {
              let e = document.createElement("style");
              ((e.id = "celebration-style"),
                (e.textContent =
                  "\n        @keyframes celebration {\n          0% { transform: translate(-50%, -50%) scale(0) rotate(0deg); opacity: 1; }\n          50% { transform: translate(-50%, -50%) scale(1.2) rotate(180deg); opacity: 1; }\n          100% { transform: translate(-50%, -50%) scale(0.8) rotate(360deg); opacity: 0; }\n        }\n      "),
                document.head.appendChild(e));
            }
            (document.body.appendChild(e),
              setTimeout(() => {
                e.parentNode && e.parentNode.removeChild(e);
              }, 2e3));
          }, []);
        return (
          (0, t.useEffect)(() => {
            B && !N && (b(!0), W());
          }, [B, N, W]),
          (0, a.jsxs)("div", {
            className: "w-full max-w-lg mx-auto space-y-6 px-4 sm:px-0",
            children: [
              (0, a.jsxs)("div", {
                className: "text-center mb-8 pt-4 sm:pt-0",
                children: [
                  (0, a.jsxs)("div", {
                    className: "flex items-center justify-center gap-2 mb-2",
                    children: [
                      (0, a.jsx)(m.A, { className: "h-6 w-6 text-primary" }),
                      (0, a.jsx)("h2", {
                        className: "text-2xl font-bold",
                        children: "Your Nursing Assessment Results",
                      }),
                    ],
                  }),
                  (0, a.jsx)("p", {
                    className: "text-muted-foreground",
                    children:
                      "Based on your profile, here's your personalized nursing career pathway:",
                  }),
                ],
              }),
              (0, a.jsx)("div", {
                className: "relative",
                children: (0, a.jsxs)(n.Zp, {
                  className: (0, j.cn)(
                    "border-2 overflow-hidden",
                    M[S].border,
                    M[S].shadow,
                  ),
                  children: [
                    (0, a.jsx)("div", {
                      className: (0, j.cn)(
                        "absolute top-0 right-0 w-32 h-32 -mt-8 -mr-8 rounded-full blur-xl opacity-20",
                        M[S].bg,
                      ),
                    }),
                    (0, a.jsxs)(n.Wu, {
                      className: "p-6 relative",
                      children: [
                        (0, a.jsxs)("div", {
                          className: "flex items-center gap-4 mb-4",
                          children: [
                            (0, a.jsx)("div", {
                              className: (0, j.cn)("p-3 rounded-full", M[S].bg),
                              children: z[S],
                            }),
                            (0, a.jsxs)("div", {
                              className: "flex-1",
                              children: [
                                (0, a.jsx)("h3", {
                                  className: (0, j.cn)(
                                    "text-xl font-bold",
                                    M[S].text,
                                  ),
                                  children: S,
                                }),
                                (0, a.jsxs)("div", {
                                  className: "flex items-center gap-2 mt-1",
                                  children: [
                                    (0, a.jsx)("div", {
                                      className:
                                        "h-2 w-full bg-muted rounded-full overflow-hidden",
                                      children: (0, a.jsx)("div", {
                                        className: (0, j.cn)(
                                          "h-full transition-all duration-1000",
                                          q >= 80
                                            ? "bg-green-500"
                                            : q >= 65
                                              ? "bg-primary"
                                              : q >= 45
                                                ? "bg-amber-500"
                                                : "bg-red-500",
                                        ),
                                        style: { width: "".concat(q, "%") },
                                      }),
                                    }),
                                    (0, a.jsxs)("span", {
                                      className:
                                        "text-sm font-medium min-w-[3rem] text-right",
                                      children: [q, "/100"],
                                    }),
                                  ],
                                }),
                              ],
                            }),
                          ],
                        }),
                        (0, a.jsx)("div", {
                          className: "mb-6",
                          children: (0, a.jsx)("p", {
                            className: "text-sm leading-relaxed",
                            children: E.pathwayRecommendation,
                          }),
                        }),
                        (0, a.jsxs)("div", {
                          className: "grid grid-cols-2 gap-4 mb-6",
                          children: [
                            (0, a.jsxs)("div", {
                              className: "flex items-center gap-2",
                              children: [
                                (0, a.jsx)(u.A, {
                                  className: "h-4 w-4 text-muted-foreground",
                                }),
                                (0, a.jsxs)("div", {
                                  children: [
                                    (0, a.jsx)("p", {
                                      className:
                                        "text-xs text-muted-foreground",
                                      children: "Timeline",
                                    }),
                                    (0, a.jsx)("p", {
                                      className: "text-sm font-medium",
                                      children: P,
                                    }),
                                  ],
                                }),
                              ],
                            }),
                            (0, a.jsxs)("div", {
                              className: "flex items-center gap-2",
                              children: [
                                (0, a.jsx)(h.A, {
                                  className: "h-4 w-4 text-muted-foreground",
                                }),
                                (0, a.jsxs)("div", {
                                  children: [
                                    (0, a.jsx)("p", {
                                      className:
                                        "text-xs text-muted-foreground",
                                      children: "Support Level",
                                    }),
                                    (0, a.jsx)("p", {
                                      className: "text-sm font-medium",
                                      children: G,
                                    }),
                                  ],
                                }),
                              ],
                            }),
                          ],
                        }),
                        (0, a.jsxs)("div", {
                          className: "mb-6",
                          children: [
                            (0, a.jsx)("h4", {
                              className:
                                "font-medium mb-3 text-sm pb-2 border-b",
                              children: "Your Profile",
                            }),
                            (0, a.jsxs)("div", {
                              className: "grid gap-2 text-sm",
                              children: [
                                (0, a.jsxs)("div", {
                                  className: "flex justify-between",
                                  children: [
                                    (0, a.jsx)("span", {
                                      className: "text-muted-foreground",
                                      children: "Education:",
                                    }),
                                    (0, a.jsxs)("span", {
                                      className: "font-medium",
                                      children: [
                                        "bachelor-nursing" ===
                                          s.educationLevel &&
                                          "Bachelor's in Nursing",
                                        "diploma-nursing" ===
                                          s.educationLevel && "Nursing Diploma",
                                        "bachelor-other" === s.educationLevel &&
                                          "Bachelor's (Other)",
                                        "diploma-other" === s.educationLevel &&
                                          "Diploma (Healthcare)",
                                        "healthcare-cert" ===
                                          s.educationLevel &&
                                          "Healthcare Certification",
                                        "no-background" === s.educationLevel &&
                                          "No Healthcare Background",
                                      ],
                                    }),
                                  ],
                                }),
                                (0, a.jsxs)("div", {
                                  className: "flex justify-between",
                                  children: [
                                    (0, a.jsx)("span", {
                                      className: "text-muted-foreground",
                                      children: "Experience:",
                                    }),
                                    (0, a.jsxs)("span", {
                                      className: "font-medium",
                                      children: [
                                        "5plus" === s.experienceLevel &&
                                          "5+ Years",
                                        "2-5" === s.experienceLevel &&
                                          "2-5 Years",
                                        "0-2" === s.experienceLevel &&
                                          "0-2 Years",
                                        "none" === s.experienceLevel &&
                                          "No Experience",
                                      ],
                                    }),
                                  ],
                                }),
                                (0, a.jsxs)("div", {
                                  className: "flex justify-between",
                                  children: [
                                    (0, a.jsx)("span", {
                                      className: "text-muted-foreground",
                                      children: "German Level:",
                                    }),
                                    (0, a.jsxs)("span", {
                                      className: "font-medium",
                                      children: [
                                        "b2-plus" === s.germanLevel &&
                                          "B2 or Higher",
                                        "b1" === s.germanLevel && "B1 Level",
                                        "a2" === s.germanLevel && "A2 Level",
                                        "a1" === s.germanLevel && "A1 Level",
                                        "none" === s.germanLevel && "No German",
                                      ],
                                    }),
                                  ],
                                }),
                                (0, a.jsxs)("div", {
                                  className: "flex justify-between",
                                  children: [
                                    (0, a.jsx)("span", {
                                      className: "text-muted-foreground",
                                      children: "Timeline:",
                                    }),
                                    (0, a.jsxs)("span", {
                                      className: "font-medium",
                                      children: [
                                        "asap" === s.timelinePreference &&
                                          "ASAP (6-12 months)",
                                        "medium" === s.timelinePreference &&
                                          "Medium-term (1-2 years)",
                                        "long-term" === s.timelinePreference &&
                                          "Long-term (2+ years)",
                                      ],
                                    }),
                                  ],
                                }),
                              ],
                            }),
                          ],
                        }),
                        (0, a.jsxs)("div", {
                          className: "mb-6",
                          children: [
                            (0, a.jsx)("h4", {
                              className:
                                "font-medium mb-3 text-sm pb-2 border-b",
                              children: "Next Steps",
                            }),
                            (0, a.jsx)("div", {
                              className: "space-y-2",
                              children: E.nextSteps.map((e, s) =>
                                (0, a.jsxs)(
                                  "div",
                                  {
                                    className: "flex items-start gap-2 text-sm",
                                    children: [
                                      (0, a.jsx)(x.A, {
                                        className:
                                          "h-4 w-4 text-green-500 shrink-0 mt-0.5",
                                      }),
                                      (0, a.jsx)("span", { children: e }),
                                    ],
                                  },
                                  s,
                                ),
                              ),
                            }),
                          ],
                        }),
                        E.improvementAreas.length > 0 &&
                          (0, a.jsxs)("div", {
                            className: "mb-6",
                            children: [
                              (0, a.jsx)("h4", {
                                className:
                                  "font-medium mb-3 text-sm pb-2 border-b",
                                children: "Areas for Improvement",
                              }),
                              (0, a.jsx)("div", {
                                className: "space-y-2",
                                children: E.improvementAreas.map((e, s) =>
                                  (0, a.jsxs)(
                                    "div",
                                    {
                                      className:
                                        "flex items-start gap-2 text-sm p-2 rounded bg-muted/50",
                                      children: [
                                        (0, a.jsx)(o.A, {
                                          className:
                                            "h-4 w-4 text-amber-500 shrink-0 mt-0.5",
                                        }),
                                        (0, a.jsx)("span", { children: e }),
                                      ],
                                    },
                                    s,
                                  ),
                                ),
                              }),
                            ],
                          }),
                        (0, a.jsxs)("div", {
                          children: [
                            (0, a.jsx)("h4", {
                              className:
                                "font-medium mb-3 text-sm pb-2 border-b",
                              children: "Get Support",
                            }),
                            (0, a.jsxs)("div", {
                              className: "space-y-3",
                              children: [
                                (0, a.jsxs)("div", {
                                  className:
                                    "flex items-start gap-3 p-3 rounded-lg border bg-primary/5",
                                  children: [
                                    (0, a.jsx)(m.A, {
                                      className: "h-5 w-5 text-primary mt-0.5",
                                    }),
                                    (0, a.jsxs)("div", {
                                      children: [
                                        (0, a.jsx)("h5", {
                                          className: "font-medium text-sm",
                                          children: "Nursing Programs",
                                        }),
                                        (0, a.jsx)("p", {
                                          className:
                                            "text-sm text-muted-foreground mt-1",
                                          children:
                                            "Explore nursing programs and career paths in Germany.",
                                        }),
                                        (0, a.jsx)(i.$, {
                                          variant: "link",
                                          size: "sm",
                                          className: "mt-1 h-7 px-0 text-xs",
                                          asChild: !0,
                                          children: (0, a.jsx)(v(), {
                                            href: "/nursing-germany",
                                            children: "Explore programs",
                                          }),
                                        }),
                                      ],
                                    }),
                                  ],
                                }),
                                (0, a.jsxs)("div", {
                                  className:
                                    "flex items-start gap-3 p-3 rounded-lg border bg-primary/5",
                                  children: [
                                    (0, a.jsx)(p.A, {
                                      className: "h-5 w-5 text-primary mt-0.5",
                                    }),
                                    (0, a.jsxs)("div", {
                                      children: [
                                        (0, a.jsx)("h5", {
                                          className: "font-medium text-sm",
                                          children: "Nursing Resources",
                                        }),
                                        (0, a.jsx)("p", {
                                          className:
                                            "text-sm text-muted-foreground mt-1",
                                          children:
                                            "Access guides on nursing qualifications, German healthcare system, and more.",
                                        }),
                                        (0, a.jsx)(i.$, {
                                          variant: "link",
                                          size: "sm",
                                          className: "mt-1 h-7 px-0 text-xs",
                                          asChild: !0,
                                          children: (0, a.jsx)(v(), {
                                            href: "/blog",
                                            children: "View resources",
                                          }),
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
              (0, a.jsxs)("div", {
                className:
                  "flex flex-col sm:flex-row gap-4 mt-8 justify-stretch sm:justify-end pb-4 sm:pb-0",
                children: [
                  (0, a.jsxs)(i.$, {
                    onClick: r,
                    variant: "outline",
                    className: "gap-2",
                    children: [
                      (0, a.jsx)(g.A, { className: "h-4 w-4" }),
                      "Retake Assessment",
                    ],
                  }),
                  (0, a.jsx)(i.$, {
                    className: "gap-2",
                    asChild: !0,
                    children: (0, a.jsxs)(v(), {
                      href: "/nursing-germany",
                      children: [
                        "Explore Nursing Programs",
                        (0, a.jsx)(f.A, { className: "h-4 w-4" }),
                      ],
                    }),
                  }),
                ],
              }),
            ],
          })
        );
      }
    },
    14966: (e, s, r) => {
      "use strict";
      r.d(s, { EligibilityAssessment: () => y });
      var a = r(70207),
        t = r(87223),
        i = r(54459),
        n = r(45748),
        l = r(50018),
        c = r(39441),
        o = r(64518),
        d = r(75344),
        m = r(78166),
        u = r(72901),
        h = r(96719),
        x = r(48627),
        p = r(79574),
        g = r(11318),
        f = r(81555);
      function j() {
        let [e, s] = (0, t.useState)(0),
          [r, j] = (0, t.useState)({
            educationLevel: "",
            experienceLevel: "",
            germanLevel: "",
            timelinePreference: "",
            preferredLocation: "",
            email: "",
          }),
          y = () => {
            s((e) => e + 1);
          },
          N = (e, s) => {
            j((r) => ({ ...r, [e]: s }));
          },
          v = () => {
            (s(0),
              j({
                educationLevel: "",
                experienceLevel: "",
                germanLevel: "",
                timelinePreference: "",
                preferredLocation: "",
                email: "",
              }));
          },
          b = () => {
            switch (e) {
              case 0:
                return (0, a.jsx)(o.NursingWelcomeScreen, { onStart: y });
              case 1:
                return (0, a.jsx)(d.NursingEducationQuestion, {
                  value: r.educationLevel,
                  onChange: (e) => N("educationLevel", e),
                });
              case 2:
                return (0, a.jsx)(m.NursingExperienceQuestion, {
                  value: r.experienceLevel,
                  onChange: (e) => N("experienceLevel", e),
                });
              case 3:
                return (0, a.jsx)(u.NursingGermanLevelQuestion, {
                  value: r.germanLevel,
                  onChange: (e) => N("germanLevel", e),
                });
              case 4:
                return (0, a.jsx)(h.NursingTimelineQuestion, {
                  value: r.timelinePreference,
                  onChange: (e) => N("timelinePreference", e),
                });
              case 5:
                return (0, a.jsx)(x.NursingLocationQuestion, {
                  value: r.preferredLocation,
                  onChange: (e) => N("preferredLocation", e),
                });
              case 6:
                return (0, a.jsx)(p.NursingContactQuestion, {
                  value: r.email,
                  onChange: (e) => N("email", e),
                });
              case 7:
                return (0, a.jsx)(g.NursingResultsScreen, {
                  answers: r,
                  onReset: v,
                });
              default:
                return null;
            }
          };
        return (0, a.jsx)("div", {
          className: "container max-w-xl mx-auto",
          children:
            0 === e
              ? (0, a.jsx)("div", {
                  className: "min-h-[450px] flex flex-col",
                  children: (0, a.jsx)(i.N, {
                    mode: "wait",
                    children: (0, a.jsx)(
                      n.P.div,
                      {
                        initial: { opacity: 0, y: 10 },
                        animate: { opacity: 1, y: 0 },
                        exit: { opacity: 0, y: -10 },
                        transition: { duration: 0.3 },
                        className: "flex-1 flex flex-col",
                        children: b(),
                      },
                      e,
                    ),
                  }),
                })
              : (0, a.jsxs)("div", {
                  className:
                    "bg-card shadow-lg rounded-xl border overflow-hidden",
                  children: [
                    e > 0 &&
                      e < 7 &&
                      (0, a.jsx)("div", {
                        className: "w-full bg-muted h-2",
                        children: (0, a.jsx)("div", {
                          className:
                            "bg-primary h-full transition-all duration-300",
                          style: { width: "".concat((e / 6) * 100, "%") },
                        }),
                      }),
                    (0, a.jsxs)("div", {
                      className: "p-6 min-h-[450px] flex flex-col",
                      children: [
                        (0, a.jsx)(i.N, {
                          mode: "wait",
                          children: (0, a.jsx)(
                            n.P.div,
                            {
                              initial: { opacity: 0, y: 10 },
                              animate: { opacity: 1, y: 0 },
                              exit: { opacity: 0, y: -10 },
                              transition: { duration: 0.3 },
                              className: "flex-1 flex flex-col",
                              children: b(),
                            },
                            e,
                          ),
                        }),
                        e > 0 &&
                          e < 7 &&
                          (0, a.jsxs)("div", {
                            className: "mt-6 flex justify-between",
                            children: [
                              (0, a.jsx)(c.$, {
                                variant: "outline",
                                onClick: () => {
                                  s((e) => Math.max(0, e - 1));
                                },
                                children: "Back",
                              }),
                              (0, a.jsxs)("div", {
                                className:
                                  "text-sm text-muted-foreground flex items-center",
                                children: ["Step ", e, " of ", 6],
                              }),
                              (0, a.jsx)(c.$, {
                                onClick: y,
                                disabled:
                                  (1 === e && !r.educationLevel) ||
                                  (2 === e && !r.experienceLevel) ||
                                  (3 === e && !r.germanLevel) ||
                                  (4 === e && !r.timelinePreference) ||
                                  (5 === e && !r.preferredLocation) ||
                                  (6 === e && !r.email),
                                children: 6 === e ? "See Results" : "Next",
                              }),
                            ],
                          }),
                      ],
                    }),
                    (0, a.jsx)("div", {
                      className:
                        "bg-muted border-t px-6 py-3 flex justify-center",
                      children: (0, a.jsxs)("div", {
                        className: "flex flex-col items-center",
                        children: [
                          (0, a.jsx)("div", {
                            className: "flex -space-x-2 mb-1",
                            children: f.T.slice(0, 5).map((e, s) =>
                              (0, a.jsx)(
                                "div",
                                {
                                  className:
                                    "w-6 h-6 rounded-full border-2 border-background relative overflow-hidden",
                                  style: { zIndex: 5 - s },
                                  children: (0, a.jsx)(l.default, {
                                    src: e,
                                    alt: "Successful nursing professional",
                                    fill: !0,
                                    sizes: "24px",
                                    className: "object-cover",
                                  }),
                                },
                                s,
                              ),
                            ),
                          }),
                          (0, a.jsx)("p", {
                            className: "text-xs text-muted-foreground",
                            children:
                              "200+ nurses successfully placed in German healthcare",
                          }),
                        ],
                      }),
                    }),
                  ],
                }),
        });
      }
      function y() {
        return (0, a.jsxs)("div", {
          className: "py-8 md:py-12 relative min-h-screen",
          children: [
            (0, a.jsxs)("div", {
              className: "absolute inset-0 pointer-events-none overflow-hidden",
              children: [
                (0, a.jsx)("div", {
                  className:
                    "absolute top-0 left-1/4 w-96 h-96 bg-primary/5 rounded-full blur-3xl opacity-50",
                }),
                (0, a.jsx)("div", {
                  className:
                    "absolute bottom-0 right-1/4 w-96 h-96 bg-primary/5 rounded-full blur-3xl opacity-50",
                }),
                (0, a.jsx)("div", {
                  className:
                    "absolute top-1/4 right-1/3 w-64 h-64 bg-secondary/5 rounded-full blur-3xl opacity-40",
                }),
              ],
            }),
            (0, a.jsx)("div", {
              className: "relative z-10 max-w-3xl mx-auto",
              children: (0, a.jsx)(j, {}),
            }),
          ],
        });
      }
    },
    20787: (e, s, r) => {
      "use strict";
      r.d(s, { SalaryCalculator: () => v });
      var a = r(70207),
        t = r(87223),
        i = r(80187),
        n = r(87277),
        l = r(93501),
        c = r(67454),
        o = r(17802),
        d = r(7782),
        m = r(55289),
        u = r(11299),
        h = r(33482),
        x = r(1701),
        p = r(28131),
        g = r(95992),
        f = r(79024),
        j = r(1422),
        y = r(64964),
        N = r(39859);
      function v(e) {
        let { initialRegion: s, onCalculationComplete: r } = e,
          [v, b] = (0, t.useState)({
            region: s || "North Rhine-Westphalia",
            employment_type: "direct",
            experience_years: 0,
            specialization: "General Nursing",
            night_shifts_per_month: 4,
            weekend_shifts_per_month: 2,
            holiday_shifts_per_year: 3,
            include_cost_of_living: !0,
          }),
          [_, w] = (0, t.useState)(null),
          [A, k] = (0, t.useState)(!1),
          [C, q] = (0, t.useState)([]),
          [S, E] = (0, t.useState)(null),
          P = (0, y.u8)();
        ((0, t.useEffect)(() => {
          (async function () {
            try {
              let e = await P.getAvailableRegions();
              q(e.length > 0 ? e : Array.from(N.C1));
            } catch (e) {
              (console.error("Failed to load regions:", e),
                q(Array.from(N.C1)));
            }
          })();
        }, []),
          (0, t.useEffect)(() => {
            v.region && v.employment_type && G();
          }, [v]));
        let G = async () => {
            (k(!0), E(null));
            try {
              let e = {
                  region: v.region,
                  employment_type: v.employment_type,
                  experience_years: v.experience_years,
                  specialization: v.specialization,
                  night_shifts_per_month: v.night_shifts_per_month,
                  weekend_shifts_per_month: v.weekend_shifts_per_month,
                  holiday_shifts_per_year: v.holiday_shifts_per_year,
                },
                s = await P.calculateSalary(e);
              if (s.success && s.data) (w(s.data), null == r || r(s.data));
              else {
                E(s.error || "Failed to calculate salary");
                let e = {
                  base_salary: "direct" === v.employment_type ? 42e3 : 16500,
                  monthly_base: "direct" === v.employment_type ? 3500 : 1375,
                  annual_night_bonus: 12 * v.night_shifts_per_month * 50,
                  annual_weekend_bonus: 12 * v.weekend_shifts_per_month * 30,
                  annual_holiday_bonus: 80 * v.holiday_shifts_per_year,
                  total_annual: 0,
                  monthly_average: 0,
                  net_estimate: 0,
                  cost_of_living_adjustment: 105,
                };
                ((e.total_annual =
                  e.base_salary +
                  e.annual_night_bonus +
                  e.annual_weekend_bonus +
                  e.annual_holiday_bonus),
                  (e.monthly_average = e.total_annual / 12),
                  (e.net_estimate = Math.round(0.65 * e.total_annual)),
                  w(e));
              }
            } catch (e) {
              (console.error("Calculation error:", e),
                E("An error occurred while calculating salary"));
            } finally {
              k(!1);
            }
          },
          B = (e, s) => {
            b((r) => ({ ...r, [e]: s }));
          },
          L = (e) =>
            new Intl.NumberFormat("de-DE", {
              style: "currency",
              currency: "EUR",
              minimumFractionDigits: 0,
              maximumFractionDigits: 0,
            }).format(e);
        return (0, a.jsxs)("div", {
          className: "w-full space-y-6",
          children: [
            (0, a.jsxs)("div", {
              className: "text-center space-y-2",
              children: [
                (0, a.jsx)("div", {
                  className: "flex items-center justify-center mb-4",
                  children: (0, a.jsx)("div", {
                    className: "p-3 rounded-full bg-primary/10",
                    children: (0, a.jsx)(u.A, {
                      className: "w-6 h-6 text-primary",
                    }),
                  }),
                }),
                (0, a.jsx)("h2", {
                  className: "text-2xl md:text-3xl font-bold",
                  children: "Nursing Salary Calculator",
                }),
                (0, a.jsx)("p", {
                  className: "text-muted-foreground max-w-2xl mx-auto",
                  children:
                    "Calculate your potential earnings as a nurse in Germany. Get personalized estimates based on location, experience, and work schedule.",
                }),
              ],
            }),
            (0, a.jsxs)("div", {
              className: "grid lg:grid-cols-2 gap-6",
              children: [
                (0, a.jsxs)(i.Zp, {
                  children: [
                    (0, a.jsxs)(i.aR, {
                      children: [
                        (0, a.jsxs)(i.ZB, {
                          className: "flex items-center",
                          children: [
                            (0, a.jsx)(h.A, {
                              className: "w-5 h-5 mr-2 text-primary",
                            }),
                            "Salary Parameters",
                          ],
                        }),
                        (0, a.jsx)(i.BT, {
                          children:
                            "Adjust the parameters to get your personalized salary estimate",
                        }),
                      ],
                    }),
                    (0, a.jsxs)(i.Wu, {
                      className: "space-y-6",
                      children: [
                        (0, a.jsxs)("div", {
                          className: "space-y-2",
                          children: [
                            (0, a.jsx)(n.J, { children: "Employment Type" }),
                            (0, a.jsxs)(l.l6, {
                              value: v.employment_type,
                              onValueChange: (e) => B("employment_type", e),
                              children: [
                                (0, a.jsx)(l.bq, {
                                  children: (0, a.jsx)(l.yv, {}),
                                }),
                                (0, a.jsxs)(l.gC, {
                                  children: [
                                    (0, a.jsx)(l.eb, {
                                      value: "direct",
                                      children:
                                        "Direct Placement (Qualified Nurse)",
                                    }),
                                    (0, a.jsx)(l.eb, {
                                      value: "ausbildung",
                                      children: "Ausbildung Training",
                                    }),
                                  ],
                                }),
                              ],
                            }),
                          ],
                        }),
                        (0, a.jsxs)("div", {
                          className: "space-y-2",
                          children: [
                            (0, a.jsxs)(n.J, {
                              className: "flex items-center",
                              children: [
                                (0, a.jsx)(x.A, { className: "w-4 h-4 mr-1" }),
                                "Region/State",
                              ],
                            }),
                            (0, a.jsxs)(l.l6, {
                              value: v.region,
                              onValueChange: (e) => B("region", e),
                              children: [
                                (0, a.jsx)(l.bq, {
                                  children: (0, a.jsx)(l.yv, {}),
                                }),
                                (0, a.jsx)(l.gC, {
                                  children: C.map((e) =>
                                    (0, a.jsx)(
                                      l.eb,
                                      { value: e, children: e },
                                      e,
                                    ),
                                  ),
                                }),
                              ],
                            }),
                          ],
                        }),
                        "direct" === v.employment_type &&
                          (0, a.jsxs)("div", {
                            className: "space-y-3",
                            children: [
                              (0, a.jsxs)(n.J, {
                                children: [
                                  "Years of Experience: ",
                                  v.experience_years,
                                ],
                              }),
                              (0, a.jsx)(c.A, {
                                value: [v.experience_years],
                                onValueChange: (e) =>
                                  B("experience_years", e[0]),
                                max: 15,
                                step: 1,
                                className: "w-full",
                              }),
                              (0, a.jsxs)("div", {
                                className:
                                  "flex justify-between text-xs text-muted-foreground",
                                children: [
                                  (0, a.jsx)("span", {
                                    children: "Fresh Graduate",
                                  }),
                                  (0, a.jsx)("span", { children: "15+ Years" }),
                                ],
                              }),
                            ],
                          }),
                        "direct" === v.employment_type &&
                          (0, a.jsxs)("div", {
                            className: "space-y-2",
                            children: [
                              (0, a.jsx)(n.J, { children: "Specialization" }),
                              (0, a.jsxs)(l.l6, {
                                value: v.specialization,
                                onValueChange: (e) => B("specialization", e),
                                children: [
                                  (0, a.jsx)(l.bq, {
                                    children: (0, a.jsx)(l.yv, {}),
                                  }),
                                  (0, a.jsx)(l.gC, {
                                    children: N.IP.map((e) =>
                                      (0, a.jsx)(
                                        l.eb,
                                        { value: e, children: e },
                                        e,
                                      ),
                                    ),
                                  }),
                                ],
                              }),
                            ],
                          }),
                        (0, a.jsxs)("div", {
                          className: "space-y-4",
                          children: [
                            (0, a.jsxs)("div", {
                              className: "flex items-center justify-between",
                              children: [
                                (0, a.jsx)(n.J, {
                                  className: "text-base font-medium",
                                  children: "Shift Premiums",
                                }),
                                (0, a.jsx)(o.E, {
                                  variant: "outline",
                                  children: "Optional Bonuses",
                                }),
                              ],
                            }),
                            (0, a.jsxs)("div", {
                              className: "space-y-3",
                              children: [
                                (0, a.jsxs)(n.J, {
                                  className: "flex items-center",
                                  children: [
                                    (0, a.jsx)(p.A, {
                                      className: "w-4 h-4 mr-1",
                                    }),
                                    "Night Shifts per Month: ",
                                    v.night_shifts_per_month,
                                  ],
                                }),
                                (0, a.jsx)(c.A, {
                                  value: [v.night_shifts_per_month],
                                  onValueChange: (e) =>
                                    B("night_shifts_per_month", e[0]),
                                  max: 20,
                                  step: 1,
                                  className: "w-full",
                                }),
                              ],
                            }),
                            (0, a.jsxs)("div", {
                              className: "space-y-3",
                              children: [
                                (0, a.jsxs)(n.J, {
                                  children: [
                                    "Weekend Shifts per Month: ",
                                    v.weekend_shifts_per_month,
                                  ],
                                }),
                                (0, a.jsx)(c.A, {
                                  value: [v.weekend_shifts_per_month],
                                  onValueChange: (e) =>
                                    B("weekend_shifts_per_month", e[0]),
                                  max: 8,
                                  step: 1,
                                  className: "w-full",
                                }),
                              ],
                            }),
                            (0, a.jsxs)("div", {
                              className: "space-y-3",
                              children: [
                                (0, a.jsxs)(n.J, {
                                  children: [
                                    "Holiday Shifts per Year: ",
                                    v.holiday_shifts_per_year,
                                  ],
                                }),
                                (0, a.jsx)(c.A, {
                                  value: [v.holiday_shifts_per_year],
                                  onValueChange: (e) =>
                                    B("holiday_shifts_per_year", e[0]),
                                  max: 12,
                                  step: 1,
                                  className: "w-full",
                                }),
                              ],
                            }),
                          ],
                        }),
                        (0, a.jsxs)("div", {
                          className: "flex items-center space-x-2",
                          children: [
                            (0, a.jsx)(m.d, {
                              checked: v.include_cost_of_living,
                              onCheckedChange: (e) =>
                                B("include_cost_of_living", e),
                            }),
                            (0, a.jsx)(n.J, {
                              children: "Include cost of living adjustment",
                            }),
                          ],
                        }),
                        S &&
                          (0, a.jsxs)("div", {
                            className:
                              "flex items-center space-x-2 text-amber-600 text-sm",
                            children: [
                              (0, a.jsx)(g.A, { className: "w-4 h-4" }),
                              (0, a.jsx)("span", { children: S }),
                            ],
                          }),
                      ],
                    }),
                  ],
                }),
                (0, a.jsxs)(i.Zp, {
                  children: [
                    (0, a.jsxs)(i.aR, {
                      children: [
                        (0, a.jsxs)(i.ZB, {
                          className: "flex items-center",
                          children: [
                            (0, a.jsx)(f.A, {
                              className: "w-5 h-5 mr-2 text-primary",
                            }),
                            "Salary Breakdown",
                          ],
                        }),
                        (0, a.jsxs)(i.BT, {
                          children: ["Your estimated earnings in ", v.region],
                        }),
                      ],
                    }),
                    (0, a.jsx)(i.Wu, {
                      children: A
                        ? (0, a.jsx)("div", {
                            className: "flex items-center justify-center h-64",
                            children: (0, a.jsx)("div", {
                              className:
                                "animate-spin rounded-full h-8 w-8 border-b-2 border-primary",
                            }),
                          })
                        : _
                          ? (0, a.jsxs)("div", {
                              className: "space-y-6",
                              children: [
                                (0, a.jsxs)("div", {
                                  className: "grid grid-cols-1 gap-4",
                                  children: [
                                    (0, a.jsx)("div", {
                                      className:
                                        "p-4 rounded-lg bg-primary/5 border border-primary/20",
                                      children: (0, a.jsxs)("div", {
                                        className: "text-center",
                                        children: [
                                          (0, a.jsx)("div", {
                                            className:
                                              "text-2xl font-bold text-primary",
                                            children: L(_.total_annual),
                                          }),
                                          (0, a.jsx)("div", {
                                            className:
                                              "text-sm text-muted-foreground",
                                            children: "Total Annual Gross",
                                          }),
                                        ],
                                      }),
                                    }),
                                    (0, a.jsx)("div", {
                                      className: "p-4 rounded-lg bg-muted/30",
                                      children: (0, a.jsxs)("div", {
                                        className: "text-center",
                                        children: [
                                          (0, a.jsx)("div", {
                                            className: "text-xl font-semibold",
                                            children: L(_.monthly_average),
                                          }),
                                          (0, a.jsx)("div", {
                                            className:
                                              "text-sm text-muted-foreground",
                                            children: "Monthly Average",
                                          }),
                                        ],
                                      }),
                                    }),
                                    _.net_estimate &&
                                      (0, a.jsx)("div", {
                                        className:
                                          "p-4 rounded-lg bg-green-50 border border-green-200",
                                        children: (0, a.jsxs)("div", {
                                          className: "text-center",
                                          children: [
                                            (0, a.jsx)("div", {
                                              className:
                                                "text-xl font-semibold text-green-700",
                                              children: L(_.net_estimate),
                                            }),
                                            (0, a.jsx)("div", {
                                              className:
                                                "text-sm text-green-600",
                                              children: "Estimated Net Annual",
                                            }),
                                            (0, a.jsx)("div", {
                                              className:
                                                "text-xs text-green-600 mt-1",
                                              children:
                                                "After taxes and social contributions",
                                            }),
                                          ],
                                        }),
                                      }),
                                  ],
                                }),
                                (0, a.jsx)(d.Separator, {}),
                                (0, a.jsxs)("div", {
                                  className: "space-y-3",
                                  children: [
                                    (0, a.jsxs)("h4", {
                                      className:
                                        "font-semibold flex items-center",
                                      children: [
                                        (0, a.jsx)(j.A, {
                                          className: "w-4 h-4 mr-2",
                                        }),
                                        "Breakdown",
                                      ],
                                    }),
                                    (0, a.jsxs)("div", {
                                      className: "space-y-2 text-sm",
                                      children: [
                                        (0, a.jsxs)("div", {
                                          className: "flex justify-between",
                                          children: [
                                            (0, a.jsx)("span", {
                                              children: "Base Salary",
                                            }),
                                            (0, a.jsx)("span", {
                                              className: "font-medium",
                                              children: L(_.base_salary),
                                            }),
                                          ],
                                        }),
                                        _.annual_night_bonus > 0 &&
                                          (0, a.jsxs)("div", {
                                            className:
                                              "flex justify-between text-primary",
                                            children: [
                                              (0, a.jsx)("span", {
                                                children: "Night Shift Bonus",
                                              }),
                                              (0, a.jsxs)("span", {
                                                className: "font-medium",
                                                children: [
                                                  "+",
                                                  L(_.annual_night_bonus),
                                                ],
                                              }),
                                            ],
                                          }),
                                        _.annual_weekend_bonus > 0 &&
                                          (0, a.jsxs)("div", {
                                            className:
                                              "flex justify-between text-primary",
                                            children: [
                                              (0, a.jsx)("span", {
                                                children: "Weekend Bonus",
                                              }),
                                              (0, a.jsxs)("span", {
                                                className: "font-medium",
                                                children: [
                                                  "+",
                                                  L(_.annual_weekend_bonus),
                                                ],
                                              }),
                                            ],
                                          }),
                                        _.annual_holiday_bonus > 0 &&
                                          (0, a.jsxs)("div", {
                                            className:
                                              "flex justify-between text-orange-600",
                                            children: [
                                              (0, a.jsx)("span", {
                                                children: "Holiday Bonus",
                                              }),
                                              (0, a.jsxs)("span", {
                                                className: "font-medium",
                                                children: [
                                                  "+",
                                                  L(_.annual_holiday_bonus),
                                                ],
                                              }),
                                            ],
                                          }),
                                      ],
                                    }),
                                  ],
                                }),
                                v.include_cost_of_living &&
                                  _.cost_of_living_adjustment &&
                                  (0, a.jsxs)(a.Fragment, {
                                    children: [
                                      (0, a.jsx)(d.Separator, {}),
                                      (0, a.jsxs)("div", {
                                        className: "text-sm space-y-2",
                                        children: [
                                          (0, a.jsx)("h4", {
                                            className: "font-semibold",
                                            children: "Cost of Living",
                                          }),
                                          (0, a.jsxs)("div", {
                                            className: "flex justify-between",
                                            children: [
                                              (0, a.jsx)("span", {
                                                children: "Regional Index",
                                              }),
                                              (0, a.jsxs)(o.E, {
                                                variant:
                                                  _.cost_of_living_adjustment >
                                                  110
                                                    ? "destructive"
                                                    : "secondary",
                                                children: [
                                                  _.cost_of_living_adjustment,
                                                  "%",
                                                ],
                                              }),
                                            ],
                                          }),
                                          (0, a.jsx)("p", {
                                            className:
                                              "text-xs text-muted-foreground",
                                            children:
                                              _.cost_of_living_adjustment > 110
                                                ? "Higher cost of living area"
                                                : "Average to lower cost of living area",
                                          }),
                                        ],
                                      }),
                                    ],
                                  }),
                                (0, a.jsxs)("div", {
                                  className:
                                    "text-xs text-muted-foreground p-3 bg-muted/30 rounded",
                                  children: [
                                    (0, a.jsx)(g.A, {
                                      className: "w-4 h-4 inline mr-1",
                                    }),
                                    "Estimates are based on current market data and may vary by employer, specific qualifications, and individual negotiations.",
                                  ],
                                }),
                              ],
                            })
                          : (0, a.jsx)("div", {
                              className:
                                "flex items-center justify-center h-64 text-muted-foreground",
                              children: (0, a.jsxs)("div", {
                                className: "text-center",
                                children: [
                                  (0, a.jsx)(u.A, {
                                    className:
                                      "w-12 h-12 mx-auto mb-4 opacity-50",
                                  }),
                                  (0, a.jsx)("p", {
                                    children:
                                      "Select your parameters to see salary estimates",
                                  }),
                                ],
                              }),
                            }),
                    }),
                  ],
                }),
              ],
            }),
          ],
        });
      }
    },
    39859: (e, s, r) => {
      "use strict";
      r.d(s, { C1: () => a, IP: () => t, dO: () => i });
      let a = [
          "Baden-W\xfcrttemberg",
          "Bavaria",
          "Berlin",
          "Brandenburg",
          "Bremen",
          "Hamburg",
          "Hesse",
          "Lower Saxony",
          "Mecklenburg-Vorpommern",
          "North Rhine-Westphalia",
          "Rhineland-Palatinate",
          "Saarland",
          "Saxony",
          "Saxony-Anhalt",
          "Schleswig-Holstein",
          "Thuringia",
        ],
        t = [
          "General Nursing",
          "Intensive Care",
          "Emergency Nursing",
          "Pediatric Nursing",
          "Geriatric Care",
          "Mental Health Nursing",
          "Surgical Nursing",
          "Oncology Nursing",
          "Cardiology",
          "Nephrology",
          "Anesthesia",
          "Operating Room",
          "Community Health",
        ],
        i = {
          nursing_degree: {
            type: "nursing_degree",
            name: "Nursing Degree Certificate",
            description: "Original nursing degree certificate or diploma",
            is_required: !0,
            format_requirements: [
              "PDF or JPG",
              "High quality scan",
              "All pages included",
            ],
            notes:
              "Must be officially translated to German if not in German or English",
          },
          transcripts: {
            type: "transcripts",
            name: "Academic Transcripts",
            description:
              "Complete academic transcripts showing all courses and grades",
            is_required: !0,
            format_requirements: [
              "PDF format",
              "Official seal visible",
              "All semesters included",
            ],
          },
          professional_license: {
            type: "professional_license",
            name: "Professional Nursing License",
            description: "Current nursing license from your home country",
            is_required: !0,
            format_requirements: [
              "PDF or JPG",
              "Current and valid",
              "Clear and legible",
            ],
          },
          work_experience: {
            type: "work_experience",
            name: "Work Experience Letters",
            description:
              "Letters from employers confirming nursing work experience",
            is_required: !1,
            format_requirements: [
              "On company letterhead",
              "Signed and dated",
              "Specific duties mentioned",
            ],
          },
          language_certificate: {
            type: "language_certificate",
            name: "German Language Certificate",
            description:
              "B2 level German language certificate (Telc, Goethe, etc.)",
            is_required: !0,
            format_requirements: [
              "PDF format",
              "Original certificate",
              "Not older than 2 years",
            ],
          },
          passport: {
            type: "passport",
            name: "Passport Copy",
            description: "Copy of passport with personal information page",
            is_required: !0,
            format_requirements: [
              "PDF or JPG",
              "High quality scan",
              "Valid for at least 6 months",
            ],
          },
          cv: {
            type: "cv",
            name: "Curriculum Vitae",
            description: "Detailed CV in German format (Europass recommended)",
            is_required: !0,
            format_requirements: [
              "PDF format",
              "German language",
              "Professional photo included",
            ],
          },
          motivation_letter: {
            type: "motivation_letter",
            name: "Motivation Letter",
            description: "Letter explaining motivation to work in Germany",
            is_required: !0,
            format_requirements: [
              "PDF format",
              "German language",
              "Maximum 2 pages",
            ],
          },
          police_clearance: {
            type: "police_clearance",
            name: "Police Clearance Certificate",
            description: "Criminal background check from home country",
            is_required: !0,
            format_requirements: [
              "PDF format",
              "Apostilled",
              "Not older than 6 months",
            ],
          },
          medical_certificate: {
            type: "medical_certificate",
            name: "Medical Fitness Certificate",
            description:
              "Medical certificate confirming fitness to work in healthcare",
            is_required: !0,
            format_requirements: [
              "PDF format",
              "From licensed physician",
              "Not older than 3 months",
            ],
          },
          other: {
            type: "other",
            name: "Other Documents",
            description: "Any additional documents as required",
            is_required: !1,
            format_requirements: ["PDF format preferred"],
          },
        };
    },
    48362: (e, s, r) => {
      "use strict";
      r.d(s, { DocumentChecklist: () => P });
      var a = r(70207),
        t = r(87223),
        i = r(80187),
        n = r(39441),
        l = r(17802),
        c = r(93668),
        o = r(40167),
        d = r(87277),
        m = r(61607),
        u = r(61889),
        h = r(11279),
        x = r(70005),
        p = r(28131),
        g = r(39945),
        f = r(95992),
        j = r(27239),
        y = r(23072),
        N = r(51613),
        v = r(50341),
        b = r(62839),
        _ = r(65915),
        w = r(39342),
        A = r(39175),
        k = r(84217),
        C = r(82110),
        q = r(64964),
        S = r(39859);
      let E = (e) => {
        let s = ["passport", "cv", "language_certificate"];
        return "direct" === e
          ? [
              ...s,
              "nursing_degree",
              "transcripts",
              "professional_license",
              "work_experience",
              "motivation_letter",
              "police_clearance",
              "medical_certificate",
            ]
          : [
              ...s,
              "motivation_letter",
              "police_clearance",
              "medical_certificate",
            ];
      };
      function P(e) {
        let {
            userId: s,
            pathwayId: r,
            pathwayType: P,
            onDocumentUpdate: G,
          } = e,
          [B, L] = (0, t.useState)([]),
          [F, D] = (0, t.useState)(!0),
          [R, T] = (0, t.useState)(null),
          [M, z] = (0, t.useState)(null),
          [W, O] = (0, t.useState)(new Set()),
          [H, I] = (0, t.useState)({
            document_name: "",
            notes: "",
            expires_at: "",
          }),
          J = (0, q.u8)(),
          Y = E(P);
        (0, t.useEffect)(() => {
          Z();
        }, [s, r]);
        let Z = async () => {
            D(!0);
            try {
              let e = await J.getUserDocuments(s, r);
              e.success && e.data && L(e.data);
            } catch (e) {
              console.error("Failed to load documents:", e);
            } finally {
              D(!1);
            }
          },
          U = async (e, a) => {
            T(e);
            try {
              let t = {
                  user_id: s,
                  pathway_id: r,
                  document_type: e,
                  document_name: H.document_name || a.name,
                  is_required: Y.includes(e),
                  is_submitted: !0,
                  submission_date: new Date().toISOString(),
                  verification_status: "pending",
                  file_path: "/uploads/".concat(s, "/").concat(a.name),
                  notes: H.notes,
                  expires_at: H.expires_at || void 0,
                },
                i = await J.saveDocument(t);
              i.success &&
                i.data &&
                (L((s) => [...s.filter((s) => s.document_type !== e), i.data]),
                null == G || G(i.data),
                I({ document_name: "", notes: "", expires_at: "" }),
                z(null));
            } catch (e) {
              console.error("Failed to upload document:", e);
            } finally {
              T(null);
            }
          },
          V = (e) => {
            let s = B.find((s) => s.document_type === e);
            return s
              ? "verified" === s.verification_status
                ? { document: s, status: "verified" }
                : "rejected" === s.verification_status
                  ? { document: s, status: "rejected" }
                  : "needs_revision" === s.verification_status
                    ? { document: s, status: "needs_revision" }
                    : { document: s, status: "submitted" }
              : { document: null, status: "missing" };
          },
          $ = (e) => {
            switch (e) {
              case "verified":
                return "text-green-600 bg-green-50 border-green-200";
              case "submitted":
                return "text-primary bg-beige border-border";
              case "rejected":
                return "text-red-600 bg-red-50 border-red-200";
              case "needs_revision":
                return "text-amber-600 bg-amber-50 border-amber-200";
              default:
                return "text-muted-foreground bg-cream border-border";
            }
          },
          Q = (e) => {
            switch (e) {
              case "verified":
                return (0, a.jsx)(x.A, { className: "w-4 h-4 text-green-600" });
              case "submitted":
                return (0, a.jsx)(p.A, { className: "w-4 h-4 text-primary" });
              case "rejected":
                return (0, a.jsx)(g.A, { className: "w-4 h-4 text-red-600" });
              case "needs_revision":
                return (0, a.jsx)(f.A, { className: "w-4 h-4 text-amber-600" });
              default:
                return (0, a.jsx)(j.A, {
                  className: "w-4 h-4 text-muted-foreground",
                });
            }
          },
          K = (e) => {
            O((s) => {
              let r = new Set(s);
              return (r.has(e) ? r.delete(e) : r.add(e), r);
            });
          };
        if (F)
          return (0, a.jsx)(i.Zp, {
            children: (0, a.jsx)(i.Wu, {
              className: "flex items-center justify-center h-64",
              children: (0, a.jsx)("div", {
                className:
                  "animate-spin rounded-full h-8 w-8 border-b-2 border-primary",
              }),
            }),
          });
        let X = (() => {
            let e = Y.length;
            return Math.round(
              (Y.filter((e) => {
                let { status: s } = V(e);
                return "verified" === s;
              }).length /
                e) *
                100,
            );
          })(),
          ee = Y.length,
          es = Y.filter((e) => {
            let { status: s } = V(e);
            return "verified" === s;
          }).length;
        return (0, a.jsxs)("div", {
          className: "w-full space-y-6",
          children: [
            (0, a.jsxs)("div", {
              className: "text-center space-y-2",
              children: [
                (0, a.jsx)("div", {
                  className: "flex items-center justify-center mb-4",
                  children: (0, a.jsx)("div", {
                    className: "p-3 rounded-full bg-primary/10",
                    children: (0, a.jsx)(y.A, {
                      className: "w-6 h-6 text-primary",
                    }),
                  }),
                }),
                (0, a.jsx)("h2", {
                  className: "text-2xl md:text-3xl font-bold",
                  children: "Document Checklist",
                }),
                (0, a.jsxs)("p", {
                  className: "text-muted-foreground max-w-2xl mx-auto",
                  children: [
                    "Track and manage all required documents for your ",
                    "direct" === P ? "direct placement" : "Ausbildung training",
                    " application.",
                  ],
                }),
              ],
            }),
            (0, a.jsxs)(i.Zp, {
              children: [
                (0, a.jsxs)(i.aR, {
                  children: [
                    (0, a.jsxs)(i.ZB, {
                      className: "flex items-center justify-between",
                      children: [
                        (0, a.jsxs)("span", {
                          className: "flex items-center",
                          children: [
                            (0, a.jsx)(j.A, {
                              className: "w-5 h-5 mr-2 text-primary",
                            }),
                            "Document Progress",
                          ],
                        }),
                        (0, a.jsxs)(l.E, {
                          variant: "outline",
                          children: [es, "/", ee, " Verified"],
                        }),
                      ],
                    }),
                    (0, a.jsx)(i.BT, {
                      children:
                        "Complete document verification to proceed with your application",
                    }),
                  ],
                }),
                (0, a.jsxs)(i.Wu, {
                  className: "space-y-4",
                  children: [
                    (0, a.jsx)(c.Progress, { value: X, className: "h-3" }),
                    (0, a.jsxs)("div", {
                      className:
                        "grid grid-cols-2 md:grid-cols-4 gap-4 text-center",
                      children: [
                        (0, a.jsxs)("div", {
                          className: "space-y-1",
                          children: [
                            (0, a.jsx)("div", {
                              className: "text-2xl font-bold text-green-600",
                              children: es,
                            }),
                            (0, a.jsx)("div", {
                              className: "text-sm text-muted-foreground",
                              children: "Verified",
                            }),
                          ],
                        }),
                        (0, a.jsxs)("div", {
                          className: "space-y-1",
                          children: [
                            (0, a.jsx)("div", {
                              className: "text-2xl font-bold text-primary",
                              children: Y.filter(
                                (e) => "submitted" === V(e).status,
                              ).length,
                            }),
                            (0, a.jsx)("div", {
                              className: "text-sm text-muted-foreground",
                              children: "Under Review",
                            }),
                          ],
                        }),
                        (0, a.jsxs)("div", {
                          className: "space-y-1",
                          children: [
                            (0, a.jsx)("div", {
                              className: "text-2xl font-bold text-amber-600",
                              children: Y.filter((e) => {
                                let s = V(e).status;
                                return (
                                  "needs_revision" === s || "rejected" === s
                                );
                              }).length,
                            }),
                            (0, a.jsx)("div", {
                              className: "text-sm text-muted-foreground",
                              children: "Need Action",
                            }),
                          ],
                        }),
                        (0, a.jsxs)("div", {
                          className: "space-y-1",
                          children: [
                            (0, a.jsx)("div", {
                              className:
                                "text-2xl font-bold text-muted-foreground",
                              children: Y.filter(
                                (e) => "missing" === V(e).status,
                              ).length,
                            }),
                            (0, a.jsx)("div", {
                              className: "text-sm text-muted-foreground",
                              children: "Missing",
                            }),
                          ],
                        }),
                      ],
                    }),
                  ],
                }),
              ],
            }),
            (0, a.jsxs)(i.Zp, {
              children: [
                (0, a.jsxs)(i.aR, {
                  children: [
                    (0, a.jsx)(i.ZB, { children: "Required Documents" }),
                    (0, a.jsx)(i.BT, {
                      children:
                        "Upload and track verification status for each required document",
                    }),
                  ],
                }),
                (0, a.jsx)(i.Wu, {
                  children: (0, a.jsx)("div", {
                    className: "space-y-4",
                    children: Y.map((e) => {
                      var s;
                      let { document: r, status: t } = V(e),
                        i = S.dO[e],
                        c = W.has(e);
                      return (0, a.jsx)(
                        "div",
                        {
                          className: (0, C.cn)(
                            "border rounded-lg overflow-hidden",
                            $(t),
                          ),
                          children: (0, a.jsxs)(h.Nt, {
                            children: [
                              (0, a.jsxs)(h.R6, {
                                className:
                                  "w-full p-4 flex items-center justify-between hover:bg-muted/50 transition-colors",
                                onClick: () => K(e),
                                children: [
                                  (0, a.jsxs)("div", {
                                    className: "flex items-center space-x-3",
                                    children: [
                                      Q(t),
                                      (0, a.jsxs)("div", {
                                        className: "text-left",
                                        children: [
                                          (0, a.jsx)("h4", {
                                            className: "font-medium",
                                            children: i.name,
                                          }),
                                          (0, a.jsx)("p", {
                                            className:
                                              "text-sm text-muted-foreground",
                                            children: i.description,
                                          }),
                                        ],
                                      }),
                                    ],
                                  }),
                                  (0, a.jsxs)("div", {
                                    className: "flex items-center space-x-2",
                                    children: [
                                      (0, a.jsx)(l.E, {
                                        variant: "outline",
                                        className: "text-xs",
                                        children: i.is_required
                                          ? "Required"
                                          : "Optional",
                                      }),
                                      (0, a.jsx)(l.E, {
                                        variant:
                                          "verified" === t
                                            ? "default"
                                            : "secondary",
                                        className: "text-xs",
                                        children: t.replace("_", " "),
                                      }),
                                      c
                                        ? (0, a.jsx)(N.A, {
                                            className: "w-4 h-4",
                                          })
                                        : (0, a.jsx)(v.A, {
                                            className: "w-4 h-4",
                                          }),
                                    ],
                                  }),
                                ],
                              }),
                              (0, a.jsx)(h.Ke, {
                                className: "px-4 pb-4",
                                children: (0, a.jsxs)("div", {
                                  className: "space-y-4 pt-4 border-t",
                                  children: [
                                    (0, a.jsxs)("div", {
                                      className: "grid md:grid-cols-2 gap-4",
                                      children: [
                                        (0, a.jsxs)("div", {
                                          className: "space-y-2",
                                          children: [
                                            (0, a.jsx)("h5", {
                                              className: "font-medium text-sm",
                                              children: "Format Requirements",
                                            }),
                                            (0, a.jsx)("ul", {
                                              className: "space-y-1",
                                              children:
                                                null ===
                                                  (s = i.format_requirements) ||
                                                void 0 === s
                                                  ? void 0
                                                  : s.map((e, s) =>
                                                      (0, a.jsxs)(
                                                        "li",
                                                        {
                                                          className:
                                                            "flex items-start text-sm",
                                                          children: [
                                                            (0, a.jsx)(x.A, {
                                                              className:
                                                                "w-3 h-3 mr-2 mt-0.5 text-primary flex-shrink-0",
                                                            }),
                                                            e,
                                                          ],
                                                        },
                                                        s,
                                                      ),
                                                    ),
                                            }),
                                          ],
                                        }),
                                        i.helpful_links &&
                                          (0, a.jsxs)("div", {
                                            className: "space-y-2",
                                            children: [
                                              (0, a.jsx)("h5", {
                                                className:
                                                  "font-medium text-sm",
                                                children: "Helpful Resources",
                                              }),
                                              (0, a.jsx)("div", {
                                                className: "space-y-1",
                                                children: i.helpful_links.map(
                                                  (e, s) =>
                                                    (0, a.jsxs)(
                                                      "a",
                                                      {
                                                        href: e.url,
                                                        target: "_blank",
                                                        rel: "noopener noreferrer",
                                                        className:
                                                          "flex items-center text-sm text-primary hover:underline",
                                                        children: [
                                                          (0, a.jsx)(b.A, {
                                                            className:
                                                              "w-3 h-3 mr-1",
                                                          }),
                                                          e.title,
                                                        ],
                                                      },
                                                      s,
                                                    ),
                                                ),
                                              }),
                                            ],
                                          }),
                                      ],
                                    }),
                                    i.notes &&
                                      (0, a.jsx)("div", {
                                        className:
                                          "p-3 bg-beige border border-border rounded text-sm",
                                        children: (0, a.jsxs)("div", {
                                          className: "flex items-start",
                                          children: [
                                            (0, a.jsx)(_.A, {
                                              className:
                                                "w-4 h-4 mr-2 text-primary flex-shrink-0 mt-0.5",
                                            }),
                                            (0, a.jsx)("p", {
                                              className: "text-secondary",
                                              children: i.notes,
                                            }),
                                          ],
                                        }),
                                      }),
                                    (0, a.jsx)("div", {
                                      className: "flex items-center space-x-2",
                                      children: r
                                        ? (0, a.jsxs)("div", {
                                            className:
                                              "flex items-center space-x-2",
                                            children: [
                                              (0, a.jsxs)(n.$, {
                                                size: "sm",
                                                variant: "outline",
                                                children: [
                                                  (0, a.jsx)(A.A, {
                                                    className: "w-4 h-4 mr-2",
                                                  }),
                                                  "View Document",
                                                ],
                                              }),
                                              "rejected" ===
                                                r.verification_status ||
                                              "needs_revision" ===
                                                r.verification_status
                                                ? (0, a.jsxs)(n.$, {
                                                    size: "sm",
                                                    children: [
                                                      (0, a.jsx)(w.A, {
                                                        className:
                                                          "w-4 h-4 mr-2",
                                                      }),
                                                      "Replace Document",
                                                    ],
                                                  })
                                                : null,
                                            ],
                                          })
                                        : (0, a.jsxs)(u.lG, {
                                            children: [
                                              (0, a.jsx)(u.zM, {
                                                asChild: !0,
                                                children: (0, a.jsxs)(n.$, {
                                                  size: "sm",
                                                  onClick: () => z(e),
                                                  children: [
                                                    (0, a.jsx)(w.A, {
                                                      className: "w-4 h-4 mr-2",
                                                    }),
                                                    "Upload Document",
                                                  ],
                                                }),
                                              }),
                                              (0, a.jsxs)(u.Cf, {
                                                children: [
                                                  (0, a.jsxs)(u.c7, {
                                                    children: [
                                                      (0, a.jsxs)(u.L3, {
                                                        children: [
                                                          "Upload ",
                                                          i.name,
                                                        ],
                                                      }),
                                                      (0, a.jsx)(u.rr, {
                                                        children: i.description,
                                                      }),
                                                    ],
                                                  }),
                                                  (0, a.jsxs)("div", {
                                                    className: "space-y-4",
                                                    children: [
                                                      (0, a.jsxs)("div", {
                                                        className: "space-y-2",
                                                        children: [
                                                          (0, a.jsx)(d.J, {
                                                            htmlFor: "file",
                                                            children:
                                                              "Select File",
                                                          }),
                                                          (0, a.jsx)(o.p, {
                                                            id: "file",
                                                            type: "file",
                                                            accept:
                                                              ".pdf,.jpg,.jpeg,.png",
                                                            onChange: (e) => {
                                                              var s;
                                                              let r =
                                                                null ===
                                                                  (s =
                                                                    e.target
                                                                      .files) ||
                                                                void 0 === s
                                                                  ? void 0
                                                                  : s[0];
                                                              r && M && U(M, r);
                                                            },
                                                          }),
                                                        ],
                                                      }),
                                                      (0, a.jsxs)("div", {
                                                        className: "space-y-2",
                                                        children: [
                                                          (0, a.jsx)(d.J, {
                                                            htmlFor:
                                                              "document_name",
                                                            children:
                                                              "Document Name (Optional)",
                                                          }),
                                                          (0, a.jsx)(o.p, {
                                                            id: "document_name",
                                                            value:
                                                              H.document_name,
                                                            onChange: (e) =>
                                                              I((s) => ({
                                                                ...s,
                                                                document_name:
                                                                  e.target
                                                                    .value,
                                                              })),
                                                            placeholder:
                                                              "Custom name for this document",
                                                          }),
                                                        ],
                                                      }),
                                                      (0, a.jsxs)("div", {
                                                        className: "space-y-2",
                                                        children: [
                                                          (0, a.jsx)(d.J, {
                                                            htmlFor:
                                                              "expires_at",
                                                            children:
                                                              "Expiration Date (If Applicable)",
                                                          }),
                                                          (0, a.jsx)(o.p, {
                                                            id: "expires_at",
                                                            type: "date",
                                                            value: H.expires_at,
                                                            onChange: (e) =>
                                                              I((s) => ({
                                                                ...s,
                                                                expires_at:
                                                                  e.target
                                                                    .value,
                                                              })),
                                                          }),
                                                        ],
                                                      }),
                                                      (0, a.jsxs)("div", {
                                                        className: "space-y-2",
                                                        children: [
                                                          (0, a.jsx)(d.J, {
                                                            htmlFor: "notes",
                                                            children: "Notes",
                                                          }),
                                                          (0, a.jsx)(m.T, {
                                                            id: "notes",
                                                            value: H.notes,
                                                            onChange: (e) =>
                                                              I((s) => ({
                                                                ...s,
                                                                notes:
                                                                  e.target
                                                                    .value,
                                                              })),
                                                            placeholder:
                                                              "Any additional notes about this document",
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
                                    r &&
                                      (0, a.jsxs)("div", {
                                        className:
                                          "text-sm space-y-1 text-muted-foreground",
                                        children: [
                                          (0, a.jsxs)("div", {
                                            className: "flex items-center",
                                            children: [
                                              (0, a.jsx)(k.A, {
                                                className: "w-3 h-3 mr-1",
                                              }),
                                              "Submitted: ",
                                              new Date(
                                                r.submission_date ||
                                                  r.created_at,
                                              ).toLocaleDateString(),
                                            ],
                                          }),
                                          r.expires_at &&
                                            (0, a.jsxs)("div", {
                                              className: "flex items-center",
                                              children: [
                                                (0, a.jsx)(k.A, {
                                                  className: "w-3 h-3 mr-1",
                                                }),
                                                "Expires: ",
                                                new Date(
                                                  r.expires_at,
                                                ).toLocaleDateString(),
                                              ],
                                            }),
                                          r.notes &&
                                            (0, a.jsxs)("div", {
                                              className: "text-xs",
                                              children: ["Note: ", r.notes],
                                            }),
                                        ],
                                      }),
                                  ],
                                }),
                              }),
                            ],
                          }),
                        },
                        e,
                      );
                    }),
                  }),
                }),
              ],
            }),
            (0, a.jsxs)(i.Zp, {
              children: [
                (0, a.jsx)(i.aR, {
                  children: (0, a.jsx)(i.ZB, {
                    children: "Document Guidelines",
                  }),
                }),
                (0, a.jsx)(i.Wu, {
                  children: (0, a.jsxs)("div", {
                    className: "grid md:grid-cols-2 gap-6",
                    children: [
                      (0, a.jsxs)("div", {
                        className: "space-y-3",
                        children: [
                          (0, a.jsx)("h4", {
                            className: "font-semibold text-green-600",
                            children: "Best Practices",
                          }),
                          (0, a.jsxs)("ul", {
                            className: "space-y-2 text-sm",
                            children: [
                              (0, a.jsxs)("li", {
                                className: "flex items-start",
                                children: [
                                  (0, a.jsx)(x.A, {
                                    className:
                                      "w-3 h-3 mr-2 mt-0.5 text-green-500 flex-shrink-0",
                                  }),
                                  "Scan documents in high resolution (300 DPI minimum)",
                                ],
                              }),
                              (0, a.jsxs)("li", {
                                className: "flex items-start",
                                children: [
                                  (0, a.jsx)(x.A, {
                                    className:
                                      "w-3 h-3 mr-2 mt-0.5 text-green-500 flex-shrink-0",
                                  }),
                                  "Use certified translation services for non-German documents",
                                ],
                              }),
                              (0, a.jsxs)("li", {
                                className: "flex items-start",
                                children: [
                                  (0, a.jsx)(x.A, {
                                    className:
                                      "w-3 h-3 mr-2 mt-0.5 text-green-500 flex-shrink-0",
                                  }),
                                  "Ensure all pages are clear and legible",
                                ],
                              }),
                              (0, a.jsxs)("li", {
                                className: "flex items-start",
                                children: [
                                  (0, a.jsx)(x.A, {
                                    className:
                                      "w-3 h-3 mr-2 mt-0.5 text-green-500 flex-shrink-0",
                                  }),
                                  "Keep original documents safe for verification",
                                ],
                              }),
                            ],
                          }),
                        ],
                      }),
                      (0, a.jsxs)("div", {
                        className: "space-y-3",
                        children: [
                          (0, a.jsx)("h4", {
                            className: "font-semibold text-amber-600",
                            children: "Common Issues",
                          }),
                          (0, a.jsxs)("ul", {
                            className: "space-y-2 text-sm",
                            children: [
                              (0, a.jsxs)("li", {
                                className: "flex items-start",
                                children: [
                                  (0, a.jsx)(f.A, {
                                    className:
                                      "w-3 h-3 mr-2 mt-0.5 text-amber-500 flex-shrink-0",
                                  }),
                                  "Blurry or poor quality scans",
                                ],
                              }),
                              (0, a.jsxs)("li", {
                                className: "flex items-start",
                                children: [
                                  (0, a.jsx)(f.A, {
                                    className:
                                      "w-3 h-3 mr-2 mt-0.5 text-amber-500 flex-shrink-0",
                                  }),
                                  "Missing official seals or signatures",
                                ],
                              }),
                              (0, a.jsxs)("li", {
                                className: "flex items-start",
                                children: [
                                  (0, a.jsx)(f.A, {
                                    className:
                                      "w-3 h-3 mr-2 mt-0.5 text-amber-500 flex-shrink-0",
                                  }),
                                  "Incorrect or uncertified translations",
                                ],
                              }),
                              (0, a.jsxs)("li", {
                                className: "flex items-start",
                                children: [
                                  (0, a.jsx)(f.A, {
                                    className:
                                      "w-3 h-3 mr-2 mt-0.5 text-amber-500 flex-shrink-0",
                                  }),
                                  "Expired documents or certificates",
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
        });
      }
    },
    48627: (e, s, r) => {
      "use strict";
      r.d(s, { NursingLocationQuestion: () => d });
      var a = r(70207),
        t = r(34379),
        i = r(68592),
        n = r(5101),
        l = r(1701),
        c = r(42678),
        o = r(82110);
      function d(e) {
        let { value: s, onChange: r } = e,
          d = [
            {
              id: "berlin",
              label: "Berlin",
              description: "Capital city with diverse healthcare opportunities",
              icon: t.A,
              details: "Major hospitals, international environment",
            },
            {
              id: "munich",
              label: "Munich",
              description:
                "Bavaria's largest city with excellent healthcare facilities",
              icon: t.A,
              details: "High salaries, quality of life",
            },
            {
              id: "hamburg",
              label: "Hamburg",
              description: "Northern Germany's major port city",
              icon: t.A,
              details: "Strong healthcare sector, cultural diversity",
            },
            {
              id: "frankfurt",
              label: "Frankfurt",
              description: "Financial hub with modern medical facilities",
              icon: t.A,
              details: "International atmosphere, good transport links",
            },
            {
              id: "cologne",
              label: "Cologne",
              description: "Historic city with growing healthcare sector",
              icon: t.A,
              details: "Cultural center, good work-life balance",
            },
            {
              id: "smaller-cities",
              label: "Smaller Cities",
              description: "Rural areas and smaller towns",
              icon: i.A,
              details: "Often higher demand, better work-life balance",
            },
            {
              id: "flexible",
              label: "Flexible/Open",
              description: "Open to various locations based on opportunities",
              icon: n.A,
              details: "Maximize opportunities across Germany",
            },
          ];
        return (0, a.jsxs)("div", {
          className: "space-y-4 h-full flex flex-col",
          children: [
            (0, a.jsxs)("div", {
              className: "mb-4",
              children: [
                (0, a.jsxs)("div", {
                  className: "flex items-center gap-2 mb-2",
                  children: [
                    (0, a.jsx)(l.A, { className: "h-5 w-5 text-primary" }),
                    (0, a.jsx)("h2", {
                      className: "text-xl font-semibold",
                      children: "Where would you prefer to work?",
                    }),
                  ],
                }),
                (0, a.jsx)("p", {
                  className: "text-sm text-muted-foreground",
                  children:
                    "Different regions in Germany offer various opportunities and benefits for nursing professionals.",
                }),
              ],
            }),
            (0, a.jsx)("div", {
              className: "flex-1 overflow-y-auto pr-1 grid gap-3",
              children: d.map((e) => {
                let t = s === e.id,
                  i = e.icon;
                return (0, a.jsx)(
                  "div",
                  {
                    onClick: () => r(e.id),
                    className: (0, o.cn)(
                      "relative p-4 rounded-xl border cursor-pointer transition-all duration-200",
                      "hover:border-primary/50 hover:shadow-sm",
                      t
                        ? "bg-primary/10 border-primary shadow-sm"
                        : "bg-card hover:bg-muted/30",
                    ),
                    children: (0, a.jsxs)("div", {
                      className: "flex items-start gap-3",
                      children: [
                        (0, a.jsx)("div", {
                          className: (0, o.cn)(
                            "p-2 rounded-full",
                            t ? "bg-primary/20" : "bg-muted",
                          ),
                          children: (0, a.jsx)(i, {
                            className: (0, o.cn)(
                              "h-5 w-5",
                              t ? "text-primary" : "text-muted-foreground",
                            ),
                          }),
                        }),
                        (0, a.jsxs)("div", {
                          className: "flex-1",
                          children: [
                            (0, a.jsxs)("div", {
                              className: "flex items-center justify-between",
                              children: [
                                (0, a.jsx)("h3", {
                                  className: "font-medium",
                                  children: e.label,
                                }),
                                t &&
                                  (0, a.jsx)(c.A, {
                                    className:
                                      "h-5 w-5 text-primary animate-in fade-in zoom-in duration-200",
                                  }),
                              ],
                            }),
                            (0, a.jsx)("p", {
                              className: "text-sm text-muted-foreground mt-1",
                              children: e.description,
                            }),
                            (0, a.jsx)("p", {
                              className:
                                "text-xs text-muted-foreground/80 mt-1",
                              children: e.details,
                            }),
                          ],
                        }),
                      ],
                    }),
                  },
                  e.id,
                );
              }),
            }),
            (0, a.jsxs)("div", {
              className: "mt-4 bg-muted/50 rounded-lg p-4 text-sm",
              children: [
                (0, a.jsx)("p", {
                  className: "font-medium text-foreground/90 mb-1",
                  children: "Location considerations:",
                }),
                (0, a.jsx)("p", {
                  className: "text-muted-foreground",
                  children:
                    "Major cities offer more opportunities but higher living costs. Smaller cities and rural areas often have higher demand for nurses and may offer better work-life balance.",
                }),
              ],
            }),
          ],
        });
      }
    },
    53890: (e, s, r) => {
      "use strict";
      r.d(s, { PathwayComparison: () => N });
      var a = r(70207),
        t = r(87223),
        i = r(80187),
        n = r(17802),
        l = r(39441),
        c = r(95941),
        o = r(93668),
        d = r(70005),
        m = r(30478),
        u = r(52461),
        h = r(28131),
        x = r(33482),
        p = r(46031),
        g = r(5101),
        f = r(95992),
        j = r(82110);
      let y = [
        {
          type: "direct",
          title: "Direct Placement",
          subtitle: "For nursing graduates",
          timeline: "12-18 months",
          requirements: [
            "Bachelor's degree in Nursing",
            "B2 German proficiency",
            "Recognition process (Anerkennung)",
            "0-5 years experience preferred",
          ],
          salary_range: "€35,000 - €50,000",
          pros: [
            "Higher starting salary",
            "Immediate professional status",
            "Career advancement opportunities",
            "Work authorization through nursing license",
          ],
          cons: [
            "Complex recognition process",
            "B2 German requirement",
            "Document translation needed",
            "May require additional courses",
          ],
          eligibility_criteria: {
            education: [
              "Bachelor in Nursing",
              "Master in Nursing",
              "Nursing degree equivalent",
            ],
            experience: [
              "Fresh graduates accepted",
              "0-5 years optimal",
              "Any nursing experience helpful",
            ],
            language: [
              "B2 German minimum",
              "Telc Deutsch B1\xb7B2 Pflege preferred",
              "Medical German vocabulary",
            ],
            other: [
              "EU/Non-EU citizens eligible",
              "Clean criminal record",
              "Medical fitness certificate",
            ],
          },
          process_steps: [
            {
              step: "Document preparation",
              description: "Gather and translate all required documents",
              duration: "2-4 weeks",
            },
            {
              step: "Recognition application",
              description: "Submit application to state authority",
              duration: "3-6 months",
            },
            {
              step: "Assessment review",
              description: "Authority reviews qualifications",
              duration: "2-4 months",
            },
            {
              step: "Compensation measures",
              description: "Complete any required courses/exams",
              duration: "3-12 months",
            },
            {
              step: "Job applications",
              description: "Apply to hospitals and healthcare facilities",
              duration: "1-3 months",
            },
          ],
          success_rate: 85,
          difficulty_level: "High",
        },
        {
          type: "ausbildung",
          title: "Ausbildung Training",
          subtitle: "For career starters",
          timeline: "3 years",
          requirements: [
            "High school diploma",
            "B1 German proficiency",
            "Interest in healthcare",
            "No prior nursing education required",
          ],
          salary_range: "€1,341 - €1,503 (monthly stipend)",
          pros: [
            "Structured 3-year program",
            "Paid training with stipend",
            "Job guarantee after completion",
            "Lower German requirement (B1)",
          ],
          cons: [
            "Longer commitment (3 years)",
            "Lower income during training",
            "Competitive application process",
            "Age limitations may apply",
          ],
          eligibility_criteria: {
            education: [
              "High school diploma",
              "Equivalent qualification",
              "No nursing background needed",
            ],
            experience: [
              "No experience required",
              "Any healthcare experience helpful",
              "Life experience valued",
            ],
            language: [
              "B1 German minimum",
              "Medical German helpful",
              "Continuous improvement expected",
            ],
            other: [
              "Typically under 35 years",
              "EU/Non-EU citizens eligible",
              "Physical fitness required",
            ],
          },
          process_steps: [
            {
              step: "School application",
              description: "Apply to nursing schools and training hospitals",
              duration: "1-3 months",
            },
            {
              step: "Entrance tests",
              description: "Complete aptitude tests and interviews",
              duration: "1-2 months",
            },
            {
              step: "Training placement",
              description: "Secure training position with healthcare facility",
              duration: "1-2 months",
            },
            {
              step: "Visa process",
              description: "Apply for education/training visa",
              duration: "2-4 months",
            },
            {
              step: "Start training",
              description: "Begin 3-year dual education program",
              duration: "3 years",
            },
          ],
          success_rate: 92,
          difficulty_level: "Medium",
        },
      ];
      function N(e) {
        var s;
        let { selectedPathway: r, onPathwaySelect: N } = e,
          [v, b] = (0, t.useState)("overview");
        return (0, a.jsxs)("div", {
          className: "w-full space-y-6",
          children: [
            (0, a.jsxs)("div", {
              className: "text-center space-y-2",
              children: [
                (0, a.jsx)("h2", {
                  className: "text-2xl md:text-3xl font-bold",
                  children: "Choose Your Pathway",
                }),
                (0, a.jsx)("p", {
                  className: "text-muted-foreground max-w-2xl mx-auto",
                  children:
                    "Two distinct routes to building your nursing career in Germany. Compare options to find the best fit for your background and goals.",
                }),
              ],
            }),
            (0, a.jsx)("div", {
              className: "grid md:grid-cols-2 gap-6",
              children: y.map((e) =>
                (0, a.jsxs)(
                  i.Zp,
                  {
                    className: (0, j.cn)(
                      "relative cursor-pointer transition-all duration-300 hover:shadow-lg",
                      r === e.type
                        ? "ring-2 ring-primary shadow-lg"
                        : "hover:shadow-md",
                    ),
                    onClick: () => N(e.type),
                    children: [
                      r === e.type &&
                        (0, a.jsx)("div", {
                          className: "absolute -top-2 -right-2",
                          children: (0, a.jsxs)(n.E, {
                            className: "rounded-full px-3 py-1",
                            children: [
                              (0, a.jsx)(d.A, { className: "w-3 h-3 mr-1" }),
                              "Selected",
                            ],
                          }),
                        }),
                      (0, a.jsxs)(i.aR, {
                        className: "space-y-3",
                        children: [
                          (0, a.jsxs)("div", {
                            className: "flex items-center justify-between",
                            children: [
                              (0, a.jsx)("div", {
                                className: "p-2 rounded-lg bg-primary/10",
                                children:
                                  "direct" === e.type
                                    ? (0, a.jsx)(m.A, {
                                        className: "w-6 h-6 text-primary",
                                      })
                                    : (0, a.jsx)(u.A, {
                                        className: "w-6 h-6 text-primary",
                                      }),
                              }),
                              (0, a.jsx)(n.E, {
                                variant:
                                  "High" === e.difficulty_level
                                    ? "destructive"
                                    : "secondary",
                                children: e.difficulty_level,
                              }),
                            ],
                          }),
                          (0, a.jsxs)("div", {
                            children: [
                              (0, a.jsx)(i.ZB, {
                                className: "text-xl",
                                children: e.title,
                              }),
                              (0, a.jsx)(i.BT, {
                                className: "text-sm",
                                children: e.subtitle,
                              }),
                            ],
                          }),
                        ],
                      }),
                      (0, a.jsxs)(i.Wu, {
                        className: "space-y-4",
                        children: [
                          (0, a.jsxs)("div", {
                            className: "grid grid-cols-2 gap-4",
                            children: [
                              (0, a.jsxs)("div", {
                                className: "space-y-1",
                                children: [
                                  (0, a.jsxs)("div", {
                                    className:
                                      "flex items-center text-sm text-muted-foreground",
                                    children: [
                                      (0, a.jsx)(h.A, {
                                        className: "w-4 h-4 mr-1",
                                      }),
                                      "Timeline",
                                    ],
                                  }),
                                  (0, a.jsx)("p", {
                                    className: "font-medium",
                                    children: e.timeline,
                                  }),
                                ],
                              }),
                              (0, a.jsxs)("div", {
                                className: "space-y-1",
                                children: [
                                  (0, a.jsxs)("div", {
                                    className:
                                      "flex items-center text-sm text-muted-foreground",
                                    children: [
                                      (0, a.jsx)(x.A, {
                                        className: "w-4 h-4 mr-1",
                                      }),
                                      "Salary",
                                    ],
                                  }),
                                  (0, a.jsx)("p", {
                                    className: "font-medium text-sm",
                                    children: e.salary_range,
                                  }),
                                ],
                              }),
                            ],
                          }),
                          (0, a.jsxs)("div", {
                            className: "space-y-2",
                            children: [
                              (0, a.jsxs)("div", {
                                className: "flex justify-between text-sm",
                                children: [
                                  (0, a.jsx)("span", {
                                    className: "text-muted-foreground",
                                    children: "Success Rate",
                                  }),
                                  (0, a.jsxs)("span", {
                                    className: "font-medium",
                                    children: [e.success_rate, "%"],
                                  }),
                                ],
                              }),
                              (0, a.jsx)(o.Progress, {
                                value: e.success_rate,
                                className: "h-2",
                              }),
                            ],
                          }),
                          (0, a.jsxs)("div", {
                            className: "space-y-2",
                            children: [
                              (0, a.jsx)("h4", {
                                className: "font-medium text-sm",
                                children: "Key Requirements",
                              }),
                              (0, a.jsx)("ul", {
                                className: "space-y-1",
                                children: e.requirements
                                  .slice(0, 3)
                                  .map((e, s) =>
                                    (0, a.jsxs)(
                                      "li",
                                      {
                                        className:
                                          "flex items-start text-sm text-muted-foreground",
                                        children: [
                                          (0, a.jsx)(d.A, {
                                            className:
                                              "w-3 h-3 mr-2 mt-0.5 text-primary flex-shrink-0",
                                          }),
                                          e,
                                        ],
                                      },
                                      s,
                                    ),
                                  ),
                              }),
                            ],
                          }),
                          (0, a.jsxs)(l.$, {
                            variant: r === e.type ? "default" : "outline",
                            className: "w-full group",
                            onClick: (s) => {
                              (s.stopPropagation(), N(e.type));
                            },
                            children: [
                              r === e.type ? "Selected" : "Select Pathway",
                              (0, a.jsx)(p.A, {
                                className:
                                  "w-4 h-4 ml-2 transition-transform group-hover:translate-x-1",
                              }),
                            ],
                          }),
                        ],
                      }),
                    ],
                  },
                  e.type,
                ),
              ),
            }),
            r &&
              (0, a.jsxs)(i.Zp, {
                children: [
                  (0, a.jsxs)(i.aR, {
                    children: [
                      (0, a.jsxs)(i.ZB, {
                        className: "flex items-center",
                        children: [
                          (0, a.jsx)(g.A, {
                            className: "w-5 h-5 mr-2 text-primary",
                          }),
                          "Detailed Analysis: ",
                          null === (s = y.find((e) => e.type === r)) ||
                          void 0 === s
                            ? void 0
                            : s.title,
                        ],
                      }),
                      (0, a.jsx)(i.BT, {
                        children:
                          "Everything you need to know about this pathway",
                      }),
                    ],
                  }),
                  (0, a.jsx)(i.Wu, {
                    children: (0, a.jsxs)(c.Tabs, {
                      value: v,
                      onValueChange: (e) => b(e),
                      children: [
                        (0, a.jsxs)(c.TabsList, {
                          className: "flex w-full",
                          children: [
                            (0, a.jsx)(c.TabsTrigger, {
                              value: "overview",
                              children: "Overview",
                            }),
                            (0, a.jsx)(c.TabsTrigger, {
                              value: "requirements",
                              children: "Requirements",
                            }),
                            (0, a.jsx)(c.TabsTrigger, {
                              value: "process",
                              children: "Process",
                            }),
                          ],
                        }),
                        (0, a.jsx)(c.TabsContent, {
                          value: "overview",
                          className: "space-y-6 mt-6",
                          children: (() => {
                            let e = y.find((e) => e.type === r);
                            return (0, a.jsx)(a.Fragment, {
                              children: (0, a.jsxs)("div", {
                                className: "grid md:grid-cols-2 gap-6",
                                children: [
                                  (0, a.jsxs)("div", {
                                    className: "space-y-3",
                                    children: [
                                      (0, a.jsxs)("h4", {
                                        className:
                                          "font-semibold text-green-600 flex items-center",
                                        children: [
                                          (0, a.jsx)(d.A, {
                                            className: "w-4 h-4 mr-2",
                                          }),
                                          "Advantages",
                                        ],
                                      }),
                                      (0, a.jsx)("ul", {
                                        className: "space-y-2",
                                        children: e.pros.map((e, s) =>
                                          (0, a.jsxs)(
                                            "li",
                                            {
                                              className:
                                                "flex items-start text-sm",
                                              children: [
                                                (0, a.jsx)(d.A, {
                                                  className:
                                                    "w-3 h-3 mr-2 mt-0.5 text-green-500 flex-shrink-0",
                                                }),
                                                e,
                                              ],
                                            },
                                            s,
                                          ),
                                        ),
                                      }),
                                    ],
                                  }),
                                  (0, a.jsxs)("div", {
                                    className: "space-y-3",
                                    children: [
                                      (0, a.jsxs)("h4", {
                                        className:
                                          "font-semibold text-amber-600 flex items-center",
                                        children: [
                                          (0, a.jsx)(f.A, {
                                            className: "w-4 h-4 mr-2",
                                          }),
                                          "Considerations",
                                        ],
                                      }),
                                      (0, a.jsx)("ul", {
                                        className: "space-y-2",
                                        children: e.cons.map((e, s) =>
                                          (0, a.jsxs)(
                                            "li",
                                            {
                                              className:
                                                "flex items-start text-sm",
                                              children: [
                                                (0, a.jsx)(f.A, {
                                                  className:
                                                    "w-3 h-3 mr-2 mt-0.5 text-amber-500 flex-shrink-0",
                                                }),
                                                e,
                                              ],
                                            },
                                            s,
                                          ),
                                        ),
                                      }),
                                    ],
                                  }),
                                ],
                              }),
                            });
                          })(),
                        }),
                        (0, a.jsx)(c.TabsContent, {
                          value: "requirements",
                          className: "space-y-6 mt-6",
                          children: (() => {
                            let e = y.find((e) => e.type === r);
                            return (0, a.jsx)("div", {
                              className: "grid md:grid-cols-2 gap-6",
                              children: Object.entries(
                                e.eligibility_criteria,
                              ).map((e) => {
                                let [s, r] = e;
                                return (0, a.jsxs)(
                                  "div",
                                  {
                                    className: "space-y-3",
                                    children: [
                                      (0, a.jsx)("h4", {
                                        className: "font-semibold capitalize",
                                        children:
                                          "other" === s
                                            ? "Additional Requirements"
                                            : s,
                                      }),
                                      (0, a.jsx)("ul", {
                                        className: "space-y-2",
                                        children: r.map((e, s) =>
                                          (0, a.jsxs)(
                                            "li",
                                            {
                                              className:
                                                "flex items-start text-sm",
                                              children: [
                                                (0, a.jsx)(d.A, {
                                                  className:
                                                    "w-3 h-3 mr-2 mt-0.5 text-primary flex-shrink-0",
                                                }),
                                                e,
                                              ],
                                            },
                                            s,
                                          ),
                                        ),
                                      }),
                                    ],
                                  },
                                  s,
                                );
                              }),
                            });
                          })(),
                        }),
                        (0, a.jsx)(c.TabsContent, {
                          value: "process",
                          className: "space-y-6 mt-6",
                          children: (() => {
                            let e = y.find((e) => e.type === r);
                            return (0, a.jsx)("div", {
                              className: "space-y-4",
                              children: e.process_steps.map((e, s) =>
                                (0, a.jsxs)(
                                  "div",
                                  {
                                    className:
                                      "flex items-start space-x-4 p-4 rounded-lg border",
                                    children: [
                                      (0, a.jsx)("div", {
                                        className: "flex-shrink-0",
                                        children: (0, a.jsx)("div", {
                                          className:
                                            "w-8 h-8 rounded-full bg-primary/10 flex items-center justify-center",
                                          children: (0, a.jsx)("span", {
                                            className:
                                              "text-sm font-semibold text-primary",
                                            children: s + 1,
                                          }),
                                        }),
                                      }),
                                      (0, a.jsxs)("div", {
                                        className: "flex-1 space-y-1",
                                        children: [
                                          (0, a.jsx)("h4", {
                                            className: "font-medium",
                                            children: e.step,
                                          }),
                                          (0, a.jsx)("p", {
                                            className:
                                              "text-sm text-muted-foreground",
                                            children: e.description,
                                          }),
                                          (0, a.jsxs)(n.E, {
                                            variant: "outline",
                                            className: "text-xs",
                                            children: [
                                              (0, a.jsx)(h.A, {
                                                className: "w-3 h-3 mr-1",
                                              }),
                                              e.duration,
                                            ],
                                          }),
                                        ],
                                      }),
                                    ],
                                  },
                                  s,
                                ),
                              ),
                            });
                          })(),
                        }),
                      ],
                    }),
                  }),
                ],
              }),
          ],
        });
      }
    },
    64518: (e, s, r) => {
      "use strict";
      r.d(s, { NursingWelcomeScreen: () => o });
      var a = r(70207),
        t = r(39441),
        i = r(52461),
        n = r(45180),
        l = r(70005),
        c = r(46031);
      function o(e) {
        let { onStart: s } = e;
        return (0, a.jsxs)("div", {
          className:
            "flex flex-col items-center justify-center h-full py-8 text-center relative",
          children: [
            (0, a.jsx)("div", {
              className:
                "absolute inset-0 bg-gradient-to-b from-background via-background to-transparent opacity-70 pointer-events-none",
            }),
            (0, a.jsxs)("div", {
              className: "relative z-10 flex flex-col items-center max-w-md",
              children: [
                (0, a.jsx)("div", {
                  className: "mb-6 flex items-center justify-center",
                  children: (0, a.jsx)("div", {
                    className: "p-5 rounded-full bg-primary/10 animate-pulse",
                    children: (0, a.jsxs)("div", {
                      className: "relative",
                      children: [
                        (0, a.jsx)(i.A, {
                          className: "h-10 w-10 md:h-12 md:w-12 text-primary",
                        }),
                        (0, a.jsx)(n.A, {
                          className:
                            "h-6 w-6 text-primary/70 absolute -bottom-1 -right-1",
                        }),
                      ],
                    }),
                  }),
                }),
                (0, a.jsx)("h1", {
                  className: "text-2xl md:text-3xl font-bold mb-4",
                  children: "Nursing Career Assessment",
                }),
                (0, a.jsx)("p", {
                  className: "text-muted-foreground mb-3 max-w-md",
                  children:
                    "Discover your pathway to a nursing career in Germany. Get personalized recommendations for direct placement or Ausbildung based on your background.",
                }),
                (0, a.jsxs)("div", {
                  className:
                    "flex items-center justify-center mb-8 bg-muted/30 px-4 py-2 rounded-full",
                  children: [
                    (0, a.jsx)(l.A, { className: "h-4 w-4 text-primary mr-2" }),
                    (0, a.jsx)("p", {
                      className: "text-sm text-muted-foreground",
                      children: "Takes only 3 minutes to complete",
                    }),
                  ],
                }),
                (0, a.jsxs)(t.$, {
                  onClick: s,
                  size: "lg",
                  className:
                    "rounded-full group px-8 py-6 hover:shadow-md transition-all",
                  children: [
                    "Start Assessment",
                    (0, a.jsx)(c.A, {
                      className:
                        "ml-2 h-4 w-4 transition-transform group-hover:translate-x-1",
                    }),
                  ],
                }),
              ],
            }),
          ],
        });
      }
    },
    64964: (e, s, r) => {
      "use strict";
      r.d(s, { u8: () => i });
      var a = r(33501);
      class t {
        static getInstance(e) {
          return (t.instance || (t.instance = new t(e)), t.instance);
        }
        async createPathway(e) {
          try {
            let { data: s, error: r } = await this.supabase
              .from("nursing_pathways")
              .insert(e)
              .select("*")
              .single();
            if (r)
              return (
                console.error("Error creating nursing pathway:", r),
                { success: !1, error: r.message }
              );
            return { success: !0, data: s };
          } catch (e) {
            return (
              console.error("Error creating nursing pathway:", e),
              { success: !1, error: "Failed to create nursing pathway" }
            );
          }
        }
        async getUserPathway(e) {
          try {
            let { data: s, error: r } = await this.supabase
              .from("nursing_pathways")
              .select("*")
              .eq("user_id", e)
              .single();
            if (r) {
              if ("PGRST116" === r.code) return { success: !0, data: void 0 };
              return (
                console.error("Error fetching user pathway:", r),
                { success: !1, error: r.message }
              );
            }
            return { success: !0, data: s };
          } catch (e) {
            return (
              console.error("Error fetching user pathway:", e),
              { success: !1, error: "Failed to fetch nursing pathway" }
            );
          }
        }
        async updatePathway(e, s) {
          try {
            let { data: r, error: a } = await this.supabase
              .from("nursing_pathways")
              .update(s)
              .eq("id", e)
              .select("*")
              .single();
            if (a)
              return (
                console.error("Error updating nursing pathway:", a),
                { success: !1, error: a.message }
              );
            return { success: !0, data: r };
          } catch (e) {
            return (
              console.error("Error updating nursing pathway:", e),
              { success: !1, error: "Failed to update nursing pathway" }
            );
          }
        }
        async saveAssessment(e) {
          try {
            let { data: s, error: r } = await this.supabase
              .from("nursing_assessments")
              .insert(e)
              .select("*")
              .single();
            if (r)
              return (
                console.error("Error saving assessment:", r),
                { success: !1, error: r.message }
              );
            return { success: !0, data: s };
          } catch (e) {
            return (
              console.error("Error saving assessment:", e),
              { success: !1, error: "Failed to save assessment" }
            );
          }
        }
        async getUserAssessment(e) {
          try {
            let { data: s, error: r } = await this.supabase
              .from("nursing_assessments")
              .select("*")
              .eq("user_id", e)
              .order("completed_at", { ascending: !1 })
              .limit(1)
              .single();
            if (r) {
              if ("PGRST116" === r.code) return { success: !0, data: void 0 };
              return (
                console.error("Error fetching user assessment:", r),
                { success: !1, error: r.message }
              );
            }
            return { success: !0, data: s };
          } catch (e) {
            return (
              console.error("Error fetching user assessment:", e),
              { success: !1, error: "Failed to fetch assessment" }
            );
          }
        }
        calculateAssessmentScore(e) {
          let s,
            r,
            a = 0,
            t = 0,
            i = {},
            n = {
              education: 30,
              experience: 25,
              language: 25,
              timeline: 10,
              preparation: 10,
            };
          e.forEach((e) => {
            let s = e.points || 0;
            ((a += s),
              e.question_id.includes("education")
                ? ((i.education = (i.education || 0) + s), (t += n.education))
                : e.question_id.includes("experience")
                  ? ((i.experience = (i.experience || 0) + s),
                    (t += n.experience))
                  : e.question_id.includes("language")
                    ? ((i.language = (i.language || 0) + s), (t += n.language))
                    : e.question_id.includes("timeline")
                      ? ((i.timeline = (i.timeline || 0) + s),
                        (t += n.timeline))
                      : ((i.preparation = (i.preparation || 0) + s),
                        (t += n.preparation)));
          });
          let l = Math.round((a / t) * 100),
            c = [],
            o = e.some(
              (e) =>
                "education_level" === e.question_id &&
                ("Bachelor in Nursing" === e.answer ||
                  "Masters in Nursing" === e.answer),
            ),
            d = e.some(
              (e) =>
                "german_level" === e.question_id &&
                ("B2" === e.answer || "C1" === e.answer || "C2" === e.answer),
            ),
            m = e.some(
              (e) =>
                "german_level" === e.question_id &&
                ("B1" === e.answer || "B2" === e.answer),
            );
          return (
            o && d && l >= 80
              ? ((s = "eligible"),
                (r = "direct"),
                c.push(
                  "You are eligible for direct placement as a nurse in Germany",
                ),
                c.push(
                  "Start the recognition process (Anerkennung) for your nursing qualification",
                ),
                c.push(
                  "Begin job applications with German hospitals and healthcare facilities",
                ))
              : m && l >= 60
                ? ((s = "eligible"),
                  (r = "ausbildung"),
                  c.push(
                    "You are eligible for nursing Ausbildung (vocational training) in Germany",
                  ),
                  c.push(
                    "Apply for nursing training positions with German healthcare institutions",
                  ),
                  c.push(
                    "Consider improving your German to B2 level for better opportunities",
                  ))
                : l >= 50
                  ? ((s = "needs-preparation"),
                    (r = "language-first"),
                    c.push(
                      "Focus on improving your German language skills first",
                    ),
                    c.push(
                      "Aim for B2 level German for direct placement or B1 for Ausbildung",
                    ),
                    c.push(
                      "Consider taking a specialized German course for healthcare professionals",
                    ),
                    o
                      ? c.push(
                          "Once you achieve B2 German, you can pursue direct placement",
                        )
                      : c.push(
                          "Consider nursing Ausbildung after reaching B1 German level",
                        ))
                  : ((s = "not-eligible"),
                    (r = "language-first"),
                    c.push(
                      "You need significant preparation before pursuing nursing in Germany",
                    ),
                    c.push(
                      "Focus on German language learning as your first priority",
                    ),
                    c.push(
                      "Consider completing additional nursing education if needed",
                    ),
                    c.push(
                      "Research German healthcare system requirements thoroughly",
                    )),
            i.education < 20 &&
              c.push("Consider additional nursing education or certification"),
            i.language < 15 &&
              c.push("German language skills need significant improvement"),
            i.experience < 15 &&
              c.push("Gain more practical nursing experience if possible"),
            {
              score: l,
              eligibility_status: s,
              recommended_pathway: r,
              recommendations: c,
            }
          );
        }
        async getOpportunities() {
          let e =
            arguments.length > 0 && void 0 !== arguments[0] ? arguments[0] : {};
          try {
            let {
                location: s,
                employment_type: r,
                salary_min: a,
                specializations: t,
                page: i = 1,
                limit: n = 10,
              } = e,
              l = this.supabase
                .from("nursing_opportunities")
                .select("*", { count: "exact" })
                .eq("is_active", !0);
            (s && (l = l.ilike("location", "%".concat(s, "%"))),
              r && (l = l.eq("employment_type", r)),
              a && (l = l.gte("salary_min", a)),
              t && t.length > 0 && (l = l.overlaps("specializations", t)));
            let c = (i - 1) * n;
            l = (l = l.range(c, c + n - 1))
              .order("is_featured", { ascending: !1 })
              .order("created_at", { ascending: !1 });
            let { data: o, error: d, count: m } = await l;
            if (d)
              return (
                console.error("Error fetching opportunities:", d),
                { data: [], total: 0, page: i, limit: n, total_pages: 0 }
              );
            return {
              data: o || [],
              total: m || 0,
              page: i,
              limit: n,
              total_pages: Math.ceil((m || 0) / n),
            };
          } catch (e) {
            return (
              console.error("Error fetching opportunities:", e),
              { data: [], total: 0, page: 1, limit: 10, total_pages: 0 }
            );
          }
        }
        async getOpportunity(e) {
          try {
            let { data: s, error: r } = await this.supabase
              .from("nursing_opportunities")
              .select("*")
              .eq("id", e)
              .eq("is_active", !0)
              .single();
            if (r)
              return (
                console.error("Error fetching opportunity:", r),
                { success: !1, error: r.message }
              );
            return { success: !0, data: s };
          } catch (e) {
            return (
              console.error("Error fetching opportunity:", e),
              { success: !1, error: "Failed to fetch opportunity" }
            );
          }
        }
        async getSalaryData(e, s) {
          try {
            let r = this.supabase.from("nursing_salary_data").select("*");
            (e && (r = r.eq("region", e)),
              s && (r = r.eq("employment_type", s)));
            let { data: a, error: t } = await r;
            if (t)
              return (
                console.error("Error fetching salary data:", t),
                { success: !1, error: t.message }
              );
            return { success: !0, data: a || [] };
          } catch (e) {
            return (
              console.error("Error fetching salary data:", e),
              { success: !1, error: "Failed to fetch salary data" }
            );
          }
        }
        async calculateSalary(e) {
          try {
            var s;
            let {
                region: r,
                employment_type: a,
                experience_years: t = 0,
                specialization: i,
                night_shifts_per_month: n = 0,
                weekend_shifts_per_month: l = 0,
                holiday_shifts_per_year: c = 0,
              } = e,
              o = await this.getSalaryData(r, a);
            if (
              !o.success ||
              !(null === (s = o.data) || void 0 === s ? void 0 : s.length)
            )
              return {
                success: !1,
                error:
                  "Salary data not found for specified region and employment type",
              };
            let d = o.data[0],
              m = d.base_salary_min;
            if (t > 0) {
              let e = Math.min(0.02 * t, 0.15);
              m = Math.round(m * (1 + e));
            }
            if (i && d.specialization_bonus) {
              let e = d.specialization_bonus[i] || 0;
              m += e;
            }
            let { data: u, error: h } = await this.supabase.rpc(
              "calculate_nursing_compensation",
              {
                base_salary: m,
                night_shifts_per_month: n,
                weekend_shifts_per_month: l,
                holiday_shifts_per_year: c,
                night_bonus_percent: d.night_shift_bonus_percent,
                weekend_bonus_percent: d.weekend_bonus_percent,
                holiday_bonus_percent: d.holiday_bonus_percent,
              },
            );
            if (h)
              return (
                console.error("Error calculating salary:", h),
                { success: !1, error: "Failed to calculate salary" }
              );
            let x = {
              base_salary: u.base_salary,
              monthly_base: u.monthly_base,
              annual_night_bonus: u.annual_night_bonus,
              annual_weekend_bonus: u.annual_weekend_bonus,
              annual_holiday_bonus: u.annual_holiday_bonus,
              total_annual: u.total_annual,
              monthly_average: u.monthly_average,
              net_estimate: Math.round(0.65 * u.total_annual),
              cost_of_living_adjustment: d.cost_of_living_index,
            };
            return { success: !0, data: x };
          } catch (e) {
            return (
              console.error("Error calculating salary:", e),
              { success: !1, error: "Failed to calculate salary" }
            );
          }
        }
        async getUserDocuments(e, s) {
          try {
            let { data: r, error: a } = await this.supabase
              .from("nursing_documents")
              .select("*")
              .eq("user_id", e)
              .eq("pathway_id", s)
              .order("created_at", { ascending: !1 });
            if (a)
              return (
                console.error("Error fetching user documents:", a),
                { success: !1, error: a.message }
              );
            return { success: !0, data: r || [] };
          } catch (e) {
            return (
              console.error("Error fetching user documents:", e),
              { success: !1, error: "Failed to fetch documents" }
            );
          }
        }
        async saveDocument(e) {
          try {
            let { data: s, error: r } = await this.supabase
              .from("nursing_documents")
              .insert(e)
              .select("*")
              .single();
            if (r)
              return (
                console.error("Error saving document:", r),
                { success: !1, error: r.message }
              );
            return { success: !0, data: s };
          } catch (e) {
            return (
              console.error("Error saving document:", e),
              { success: !1, error: "Failed to save document" }
            );
          }
        }
        async updateDocument(e, s) {
          try {
            let { data: r, error: a } = await this.supabase
              .from("nursing_documents")
              .update(s)
              .eq("id", e)
              .select("*")
              .single();
            if (a)
              return (
                console.error("Error updating document:", a),
                { success: !1, error: a.message }
              );
            return { success: !0, data: r };
          } catch (e) {
            return (
              console.error("Error updating document:", e),
              { success: !1, error: "Failed to update document" }
            );
          }
        }
        async getRecognitionProgress(e, s) {
          try {
            let { data: r, error: a } = await this.supabase
              .from("nursing_recognition_progress")
              .select("*")
              .eq("user_id", e)
              .eq("pathway_id", s)
              .order("created_at", { ascending: !0 });
            if (a)
              return (
                console.error("Error fetching recognition progress:", a),
                { success: !1, error: a.message }
              );
            return { success: !0, data: r || [] };
          } catch (e) {
            return (
              console.error("Error fetching recognition progress:", e),
              { success: !1, error: "Failed to fetch recognition progress" }
            );
          }
        }
        async updateRecognitionStep(e, s) {
          try {
            let { data: r, error: a } = await this.supabase
              .from("nursing_recognition_progress")
              .update(s)
              .eq("id", e)
              .select("*")
              .single();
            if (a)
              return (
                console.error("Error updating recognition step:", a),
                { success: !1, error: a.message }
              );
            return { success: !0, data: r };
          } catch (e) {
            return (
              console.error("Error updating recognition step:", e),
              { success: !1, error: "Failed to update recognition step" }
            );
          }
        }
        async createApplication(e) {
          try {
            let { data: s, error: r } = await this.supabase
              .from("nursing_applications")
              .insert(e)
              .select("*")
              .single();
            if (r)
              return (
                console.error("Error creating application:", r),
                { success: !1, error: r.message }
              );
            return { success: !0, data: s };
          } catch (e) {
            return (
              console.error("Error creating application:", e),
              { success: !1, error: "Failed to create application" }
            );
          }
        }
        async getUserApplications(e) {
          try {
            let { data: s, error: r } = await this.supabase
              .from("nursing_applications")
              .select(
                "\n          *,\n          nursing_opportunities(id, title, hospital_name, location)\n        ",
              )
              .eq("user_id", e)
              .order("application_date", { ascending: !1 });
            if (r)
              return (
                console.error("Error fetching user applications:", r),
                { success: !1, error: r.message }
              );
            return { success: !0, data: s || [] };
          } catch (e) {
            return (
              console.error("Error fetching user applications:", e),
              { success: !1, error: "Failed to fetch applications" }
            );
          }
        }
        async updateApplicationStatus(e, s, r) {
          try {
            let a = { application_status: s };
            r && (a.application_notes = r);
            let { data: t, error: i } = await this.supabase
              .from("nursing_applications")
              .update(a)
              .eq("id", e)
              .select("*")
              .single();
            if (i)
              return (
                console.error("Error updating application status:", i),
                { success: !1, error: i.message }
              );
            return { success: !0, data: t };
          } catch (e) {
            return (
              console.error("Error updating application status:", e),
              { success: !1, error: "Failed to update application status" }
            );
          }
        }
        async getAvailableRegions() {
          try {
            let { data: e, error: s } = await this.supabase
              .from("nursing_salary_data")
              .select("region")
              .order("region");
            if (s) return (console.error("Error fetching regions:", s), []);
            return Array.from(
              new Set((null == e ? void 0 : e.map((e) => e.region)) || []),
            );
          } catch (e) {
            return (console.error("Error fetching regions:", e), []);
          }
        }
        async getNursingStats() {
          try {
            let [{ count: e }, { count: s }, { data: r }] = await Promise.all([
                this.supabase
                  .from("nursing_opportunities")
                  .select("*", { count: "exact", head: !0 })
                  .eq("is_active", !0),
                this.supabase
                  .from("nursing_applications")
                  .select("*", { count: "exact", head: !0 }),
                this.supabase
                  .from("nursing_salary_data")
                  .select("base_salary_min, base_salary_max")
                  .eq("employment_type", "direct"),
              ]),
              a =
                r && r.length > 0
                  ? Math.round(
                      r.reduce(
                        (e, s) =>
                          e + (s.base_salary_min + s.base_salary_max) / 2,
                        0,
                      ) / r.length,
                    )
                  : 42e3;
            return {
              total_opportunities: e || 0,
              total_applications: s || 0,
              average_salary: a,
              success_rate: 85,
            };
          } catch (e) {
            return (
              console.error("Error fetching nursing stats:", e),
              {
                total_opportunities: 0,
                total_applications: 0,
                average_salary: 42e3,
                success_rate: 85,
              }
            );
          }
        }
        constructor(e) {
          this.supabase = e;
        }
      }
      function i() {
        let e = (0, a.U)();
        return t.getInstance(e);
      }
      ((t.instance = null), i());
    },
    66050: (e, s, r) => {
      "use strict";
      r.d(s, { RecognitionTracker: () => q });
      var a = r(70207),
        t = r(87223),
        i = r(80187),
        n = r(39441),
        l = r(17802),
        c = r(93668),
        o = r(61607),
        d = r(40167),
        m = r(87277),
        u = r(61889),
        h = r(70005),
        x = r(99251),
        p = r(95992),
        g = r(28131),
        f = r(27239),
        j = r(5101),
        y = r(84217),
        N = r(57619),
        v = r(95540),
        b = r(36521),
        _ = r(63016),
        w = r(62839),
        A = r(82110),
        k = r(64964);
      let C = [
        {
          id: "document_preparation",
          title: "Document Preparation",
          description:
            "Gather and translate all required educational and professional documents",
          status: "pending",
          estimated_duration: "2-4 weeks",
          requirements: [
            "Original nursing degree certificate",
            "Academic transcripts",
            "Professional license from home country",
            "Work experience letters (if applicable)",
            "Certified translations to German",
          ],
          documents_needed: [
            "nursing_degree",
            "transcripts",
            "professional_license",
            "work_experience",
          ],
        },
        {
          id: "language_certification",
          title: "German Language Certification",
          description:
            "Obtain B2 level German certification with medical terminology",
          status: "pending",
          estimated_duration: "3-12 months",
          requirements: [
            "B2 German proficiency",
            "Telc Deutsch B1\xb7B2 Pflege (recommended)",
            "Medical German vocabulary knowledge",
            "Speaking and writing skills assessment",
          ],
          authority_contact: {
            name: "Telc gGmbH",
            website: "https://www.telc.net",
            email: "info@telc.net",
          },
        },
        {
          id: "application_submission",
          title: "Recognition Application",
          description:
            "Submit formal application to the competent state authority",
          status: "pending",
          estimated_duration: "1-2 weeks",
          requirements: [
            "Completed application form",
            "All translated documents",
            "Language certificates",
            "Application fee payment",
            "Passport copy",
          ],
        },
        {
          id: "equivalency_review",
          title: "Equivalency Assessment",
          description:
            "Authority reviews your qualifications against German standards",
          status: "pending",
          estimated_duration: "3-6 months",
          requirements: [
            "Document verification",
            "Educational content comparison",
            "Practical hours assessment",
            "Competency gap analysis",
          ],
        },
        {
          id: "compensation_measures",
          title: "Compensation Measures",
          description:
            "Complete any required additional training or examinations",
          status: "pending",
          estimated_duration: "1-12 months",
          requirements: [
            "Adaptation course (if required)",
            "Knowledge examination (if required)",
            "Practical training placement",
            "Final competency assessment",
          ],
        },
        {
          id: "final_recognition",
          title: "Final Recognition",
          description:
            "Receive official recognition certificate and begin job search",
          status: "pending",
          estimated_duration: "2-4 weeks",
          requirements: [
            "Recognition certificate issuance",
            "Professional registration",
            "Work permit processing",
            "Job application preparation",
          ],
        },
      ];
      function q(e) {
        let { userId: s, pathwayId: r, onStepUpdate: q } = e,
          [S, E] = (0, t.useState)(C),
          [P, G] = (0, t.useState)([]),
          [B, L] = (0, t.useState)(!0),
          [F, D] = (0, t.useState)(null),
          [R, T] = (0, t.useState)(""),
          [M, z] = (0, t.useState)(""),
          [W, O] = (0, t.useState)(""),
          H = (0, k.u8)();
        (0, t.useEffect)(() => {
          r && I();
        }, [s, r]);
        let I = async () => {
            if (!r) {
              L(!1);
              return;
            }
            L(!0);
            try {
              let e = await H.getRecognitionProgress(s, r);
              e.success && e.data && (G(e.data), J(e.data));
            } catch (e) {
              console.error("Failed to load progress data:", e);
            } finally {
              L(!1);
            }
          },
          J = (e) => {
            E(
              S.map((s) => {
                let r = e.find((e) => e.current_step === s.id);
                return r
                  ? {
                      ...s,
                      status: r.step_status,
                      authority_contact:
                        r.authority_contact || s.authority_contact,
                    }
                  : s;
              }),
            );
          },
          Y = async (e, s) => {
            try {
              let r = P.find((s) => s.current_step === e);
              (r &&
                (
                  await H.updateRecognitionStep(r.id, {
                    step_status: s,
                    notes: R,
                    estimated_completion: W || void 0,
                  })
                ).success &&
                (await I(), null == q || q(e, s)),
                E((r) => r.map((r) => (r.id === e ? { ...r, status: s } : r))),
                T(""),
                O(""),
                D(null));
            } catch (e) {
              console.error("Failed to update step:", e);
            }
          },
          Z = (e) => {
            switch (e) {
              case "completed":
                return "text-green-600 bg-green-50 border-green-200";
              case "in_progress":
                return "text-primary bg-beige border-border";
              case "rejected":
                return "text-red-600 bg-red-50 border-red-200";
              default:
                return "text-muted-foreground bg-cream border-border";
            }
          },
          U = (e) => {
            switch (e) {
              case "completed":
                return (0, a.jsx)(h.A, { className: "w-5 h-5 text-green-600" });
              case "in_progress":
                return (0, a.jsx)(x.A, {
                  className: "w-5 h-5 text-primary animate-spin",
                });
              case "rejected":
                return (0, a.jsx)(p.A, { className: "w-5 h-5 text-red-600" });
              default:
                return (0, a.jsx)(g.A, {
                  className: "w-5 h-5 text-muted-foreground",
                });
            }
          };
        if (B)
          return (0, a.jsx)(i.Zp, {
            children: (0, a.jsx)(i.Wu, {
              className: "flex items-center justify-center h-64",
              children: (0, a.jsx)("div", {
                className:
                  "animate-spin rounded-full h-8 w-8 border-b-2 border-primary",
              }),
            }),
          });
        let V =
            S.find((e) => "in_progress" === e.status) ||
            S.find((e) => "pending" === e.status),
          $ = Math.round(
            (S.filter((e) => "completed" === e.status).length / S.length) * 100,
          );
        return (0, a.jsxs)("div", {
          className: "w-full space-y-6",
          children: [
            (0, a.jsxs)("div", {
              className: "text-center space-y-2",
              children: [
                (0, a.jsx)("div", {
                  className: "flex items-center justify-center mb-4",
                  children: (0, a.jsx)("div", {
                    className: "p-3 rounded-full bg-primary/10",
                    children: (0, a.jsx)(f.A, {
                      className: "w-6 h-6 text-primary",
                    }),
                  }),
                }),
                (0, a.jsx)("h2", {
                  className: "text-2xl md:text-3xl font-bold",
                  children: "Recognition Process Tracker",
                }),
                (0, a.jsx)("p", {
                  className: "text-muted-foreground max-w-2xl mx-auto",
                  children:
                    "Track your nursing qualification recognition (Anerkennung) progress through each step of the process.",
                }),
              ],
            }),
            (0, a.jsxs)(i.Zp, {
              children: [
                (0, a.jsxs)(i.aR, {
                  children: [
                    (0, a.jsxs)(i.ZB, {
                      className: "flex items-center justify-between",
                      children: [
                        (0, a.jsxs)("span", {
                          className: "flex items-center",
                          children: [
                            (0, a.jsx)(j.A, {
                              className: "w-5 h-5 mr-2 text-primary",
                            }),
                            "Overall Progress",
                          ],
                        }),
                        (0, a.jsxs)(l.E, {
                          variant: "outline",
                          children: [$, "% Complete"],
                        }),
                      ],
                    }),
                    (0, a.jsx)(i.BT, {
                      children:
                        "Your journey through the German nursing recognition process",
                    }),
                  ],
                }),
                (0, a.jsxs)(i.Wu, {
                  className: "space-y-4",
                  children: [
                    (0, a.jsx)(c.Progress, { value: $, className: "h-3" }),
                    (0, a.jsxs)("div", {
                      className: "grid md:grid-cols-3 gap-4 text-center",
                      children: [
                        (0, a.jsxs)("div", {
                          className: "space-y-1",
                          children: [
                            (0, a.jsx)("div", {
                              className: "text-2xl font-bold text-green-600",
                              children: S.filter(
                                (e) => "completed" === e.status,
                              ).length,
                            }),
                            (0, a.jsx)("div", {
                              className: "text-sm text-muted-foreground",
                              children: "Completed",
                            }),
                          ],
                        }),
                        (0, a.jsxs)("div", {
                          className: "space-y-1",
                          children: [
                            (0, a.jsx)("div", {
                              className: "text-2xl font-bold text-primary",
                              children: S.filter(
                                (e) => "in_progress" === e.status,
                              ).length,
                            }),
                            (0, a.jsx)("div", {
                              className: "text-sm text-muted-foreground",
                              children: "In Progress",
                            }),
                          ],
                        }),
                        (0, a.jsxs)("div", {
                          className: "space-y-1",
                          children: [
                            (0, a.jsx)("div", {
                              className:
                                "text-2xl font-bold text-muted-foreground",
                              children: S.filter((e) => "pending" === e.status)
                                .length,
                            }),
                            (0, a.jsx)("div", {
                              className: "text-sm text-muted-foreground",
                              children: "Pending",
                            }),
                          ],
                        }),
                      ],
                    }),
                    V &&
                      (0, a.jsxs)("div", {
                        className:
                          "p-4 rounded-lg bg-primary/5 border border-primary/20",
                        children: [
                          (0, a.jsx)("h4", {
                            className: "font-semibold text-primary mb-2",
                            children: "Current Step",
                          }),
                          (0, a.jsx)("p", {
                            className: "text-sm font-medium",
                            children: V.title,
                          }),
                          (0, a.jsx)("p", {
                            className: "text-sm text-muted-foreground",
                            children: V.description,
                          }),
                          (0, a.jsxs)("div", {
                            className:
                              "flex items-center mt-2 text-xs text-muted-foreground",
                            children: [
                              (0, a.jsx)(y.A, { className: "w-3 h-3 mr-1" }),
                              "Estimated duration: ",
                              V.estimated_duration,
                            ],
                          }),
                        ],
                      }),
                  ],
                }),
              ],
            }),
            (0, a.jsxs)(i.Zp, {
              children: [
                (0, a.jsxs)(i.aR, {
                  children: [
                    (0, a.jsx)(i.ZB, { children: "Recognition Steps" }),
                    (0, a.jsx)(i.BT, {
                      children:
                        "Detailed breakdown of each step in the recognition process",
                    }),
                  ],
                }),
                (0, a.jsx)(i.Wu, {
                  children: (0, a.jsx)("div", {
                    className: "space-y-4",
                    children: S.map((e, s) =>
                      (0, a.jsxs)(
                        "div",
                        {
                          className: "relative",
                          children: [
                            s < S.length - 1 &&
                              (0, a.jsx)("div", {
                                className:
                                  "absolute left-6 top-12 w-0.5 h-16 bg-border",
                              }),
                            (0, a.jsxs)("div", {
                              className: (0, A.cn)(
                                "flex items-start space-x-4 p-4 rounded-lg border transition-all",
                                Z(e.status),
                              ),
                              children: [
                                (0, a.jsx)("div", {
                                  className: "flex-shrink-0 p-1",
                                  children: U(e.status),
                                }),
                                (0, a.jsxs)("div", {
                                  className: "flex-1 space-y-2",
                                  children: [
                                    (0, a.jsxs)("div", {
                                      className:
                                        "flex items-center justify-between",
                                      children: [
                                        (0, a.jsx)("h4", {
                                          className: "font-semibold",
                                          children: e.title,
                                        }),
                                        (0, a.jsxs)("div", {
                                          className:
                                            "flex items-center space-x-2",
                                          children: [
                                            (0, a.jsxs)(l.E, {
                                              variant: "outline",
                                              className: "text-xs",
                                              children: [
                                                (0, a.jsx)(g.A, {
                                                  className: "w-3 h-3 mr-1",
                                                }),
                                                e.estimated_duration,
                                              ],
                                            }),
                                            (0, a.jsxs)(u.lG, {
                                              children: [
                                                (0, a.jsx)(u.zM, {
                                                  asChild: !0,
                                                  children: (0, a.jsxs)(n.$, {
                                                    size: "sm",
                                                    variant: "outline",
                                                    onClick: () => D(e),
                                                    children: [
                                                      (0, a.jsx)(N.A, {
                                                        className:
                                                          "w-3 h-3 mr-1",
                                                      }),
                                                      "Update",
                                                    ],
                                                  }),
                                                }),
                                                (0, a.jsxs)(u.Cf, {
                                                  children: [
                                                    (0, a.jsxs)(u.c7, {
                                                      children: [
                                                        (0, a.jsxs)(u.L3, {
                                                          children: [
                                                            "Update Step: ",
                                                            e.title,
                                                          ],
                                                        }),
                                                        (0, a.jsx)(u.rr, {
                                                          children:
                                                            "Update the status and add notes for this step",
                                                        }),
                                                      ],
                                                    }),
                                                    (0, a.jsxs)("div", {
                                                      className: "space-y-4",
                                                      children: [
                                                        (0, a.jsxs)("div", {
                                                          className:
                                                            "space-y-2",
                                                          children: [
                                                            (0, a.jsx)(m.J, {
                                                              children:
                                                                "Status",
                                                            }),
                                                            (0, a.jsx)("div", {
                                                              className:
                                                                "flex space-x-2",
                                                              children: [
                                                                "pending",
                                                                "in_progress",
                                                                "completed",
                                                                "rejected",
                                                              ].map((s) =>
                                                                (0, a.jsx)(
                                                                  n.$,
                                                                  {
                                                                    size: "sm",
                                                                    variant:
                                                                      e.status ===
                                                                      s
                                                                        ? "default"
                                                                        : "outline",
                                                                    onClick:
                                                                      () =>
                                                                        Y(
                                                                          e.id,
                                                                          s,
                                                                        ),
                                                                    children:
                                                                      s.replace(
                                                                        "_",
                                                                        " ",
                                                                      ),
                                                                  },
                                                                  s,
                                                                ),
                                                              ),
                                                            }),
                                                          ],
                                                        }),
                                                        (0, a.jsxs)("div", {
                                                          className:
                                                            "space-y-2",
                                                          children: [
                                                            (0, a.jsx)(m.J, {
                                                              htmlFor: "notes",
                                                              children: "Notes",
                                                            }),
                                                            (0, a.jsx)(o.T, {
                                                              id: "notes",
                                                              value: R,
                                                              onChange: (e) =>
                                                                T(
                                                                  e.target
                                                                    .value,
                                                                ),
                                                              placeholder:
                                                                "Add any notes or updates about this step...",
                                                            }),
                                                          ],
                                                        }),
                                                        (0, a.jsxs)("div", {
                                                          className:
                                                            "space-y-2",
                                                          children: [
                                                            (0, a.jsx)(m.J, {
                                                              htmlFor:
                                                                "estimated_date",
                                                              children:
                                                                "Estimated Completion",
                                                            }),
                                                            (0, a.jsx)(d.p, {
                                                              id: "estimated_date",
                                                              type: "date",
                                                              value: W,
                                                              onChange: (e) =>
                                                                O(
                                                                  e.target
                                                                    .value,
                                                                ),
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
                                    (0, a.jsx)("p", {
                                      className:
                                        "text-sm text-muted-foreground",
                                      children: e.description,
                                    }),
                                    (0, a.jsxs)("div", {
                                      className: "space-y-2",
                                      children: [
                                        (0, a.jsx)("h5", {
                                          className: "text-sm font-medium",
                                          children: "Requirements:",
                                        }),
                                        (0, a.jsx)("ul", {
                                          className: "space-y-1",
                                          children: e.requirements.map((e, s) =>
                                            (0, a.jsxs)(
                                              "li",
                                              {
                                                className:
                                                  "flex items-start text-sm",
                                                children: [
                                                  (0, a.jsx)(h.A, {
                                                    className:
                                                      "w-3 h-3 mr-2 mt-0.5 text-primary flex-shrink-0",
                                                  }),
                                                  e,
                                                ],
                                              },
                                              s,
                                            ),
                                          ),
                                        }),
                                      ],
                                    }),
                                    e.authority_contact &&
                                      (0, a.jsxs)("div", {
                                        className:
                                          "mt-3 p-3 rounded bg-muted/30 border",
                                        children: [
                                          (0, a.jsxs)("h5", {
                                            className:
                                              "text-sm font-medium mb-2 flex items-center",
                                            children: [
                                              (0, a.jsx)(j.A, {
                                                className: "w-4 h-4 mr-1",
                                              }),
                                              "Authority Contact",
                                            ],
                                          }),
                                          (0, a.jsxs)("div", {
                                            className: "space-y-1 text-sm",
                                            children: [
                                              e.authority_contact.name &&
                                                (0, a.jsx)("div", {
                                                  children:
                                                    e.authority_contact.name,
                                                }),
                                              e.authority_contact.email &&
                                                (0, a.jsxs)("div", {
                                                  className:
                                                    "flex items-center",
                                                  children: [
                                                    (0, a.jsx)(v.A, {
                                                      className: "w-3 h-3 mr-1",
                                                    }),
                                                    (0, a.jsx)("a", {
                                                      href: "mailto:".concat(
                                                        e.authority_contact
                                                          .email,
                                                      ),
                                                      className:
                                                        "text-primary hover:underline",
                                                      children:
                                                        e.authority_contact
                                                          .email,
                                                    }),
                                                  ],
                                                }),
                                              e.authority_contact.phone &&
                                                (0, a.jsxs)("div", {
                                                  className:
                                                    "flex items-center",
                                                  children: [
                                                    (0, a.jsx)(b.A, {
                                                      className: "w-3 h-3 mr-1",
                                                    }),
                                                    e.authority_contact.phone,
                                                  ],
                                                }),
                                              e.authority_contact.website &&
                                                (0, a.jsxs)("div", {
                                                  className:
                                                    "flex items-center",
                                                  children: [
                                                    (0, a.jsx)(_.A, {
                                                      className: "w-3 h-3 mr-1",
                                                    }),
                                                    (0, a.jsxs)("a", {
                                                      href: e.authority_contact
                                                        .website,
                                                      target: "_blank",
                                                      rel: "noopener noreferrer",
                                                      className:
                                                        "text-primary hover:underline flex items-center",
                                                      children: [
                                                        "Visit Website",
                                                        (0, a.jsx)(w.A, {
                                                          className:
                                                            "w-3 h-3 ml-1",
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
                          ],
                        },
                        e.id,
                      ),
                    ),
                  }),
                }),
              ],
            }),
            (0, a.jsxs)(i.Zp, {
              children: [
                (0, a.jsx)(i.aR, {
                  children: (0, a.jsx)(i.ZB, { children: "Tips for Success" }),
                }),
                (0, a.jsx)(i.Wu, {
                  children: (0, a.jsxs)("div", {
                    className: "grid md:grid-cols-2 gap-4",
                    children: [
                      (0, a.jsxs)("div", {
                        className: "space-y-2",
                        children: [
                          (0, a.jsx)("h4", {
                            className: "font-semibold text-green-600",
                            children: "Best Practices",
                          }),
                          (0, a.jsxs)("ul", {
                            className: "space-y-1 text-sm",
                            children: [
                              (0, a.jsxs)("li", {
                                className: "flex items-start",
                                children: [
                                  (0, a.jsx)(h.A, {
                                    className:
                                      "w-3 h-3 mr-2 mt-0.5 text-green-500 flex-shrink-0",
                                  }),
                                  "Start document preparation early",
                                ],
                              }),
                              (0, a.jsxs)("li", {
                                className: "flex items-start",
                                children: [
                                  (0, a.jsx)(h.A, {
                                    className:
                                      "w-3 h-3 mr-2 mt-0.5 text-green-500 flex-shrink-0",
                                  }),
                                  "Use certified translation services",
                                ],
                              }),
                              (0, a.jsxs)("li", {
                                className: "flex items-start",
                                children: [
                                  (0, a.jsx)(h.A, {
                                    className:
                                      "w-3 h-3 mr-2 mt-0.5 text-green-500 flex-shrink-0",
                                  }),
                                  "Keep copies of all submissions",
                                ],
                              }),
                              (0, a.jsxs)("li", {
                                className: "flex items-start",
                                children: [
                                  (0, a.jsx)(h.A, {
                                    className:
                                      "w-3 h-3 mr-2 mt-0.5 text-green-500 flex-shrink-0",
                                  }),
                                  "Follow up regularly with authorities",
                                ],
                              }),
                            ],
                          }),
                        ],
                      }),
                      (0, a.jsxs)("div", {
                        className: "space-y-2",
                        children: [
                          (0, a.jsx)("h4", {
                            className: "font-semibold text-amber-600",
                            children: "Common Delays",
                          }),
                          (0, a.jsxs)("ul", {
                            className: "space-y-1 text-sm",
                            children: [
                              (0, a.jsxs)("li", {
                                className: "flex items-start",
                                children: [
                                  (0, a.jsx)(p.A, {
                                    className:
                                      "w-3 h-3 mr-2 mt-0.5 text-amber-500 flex-shrink-0",
                                  }),
                                  "Incomplete documentation",
                                ],
                              }),
                              (0, a.jsxs)("li", {
                                className: "flex items-start",
                                children: [
                                  (0, a.jsx)(p.A, {
                                    className:
                                      "w-3 h-3 mr-2 mt-0.5 text-amber-500 flex-shrink-0",
                                  }),
                                  "Poor quality translations",
                                ],
                              }),
                              (0, a.jsxs)("li", {
                                className: "flex items-start",
                                children: [
                                  (0, a.jsx)(p.A, {
                                    className:
                                      "w-3 h-3 mr-2 mt-0.5 text-amber-500 flex-shrink-0",
                                  }),
                                  "Missing apostille/legalization",
                                ],
                              }),
                              (0, a.jsxs)("li", {
                                className: "flex items-start",
                                children: [
                                  (0, a.jsx)(p.A, {
                                    className:
                                      "w-3 h-3 mr-2 mt-0.5 text-amber-500 flex-shrink-0",
                                  }),
                                  "Insufficient German proficiency",
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
        });
      }
    },
    72901: (e, s, r) => {
      "use strict";
      r.d(s, { NursingGermanLevelQuestion: () => m });
      var a = r(70207),
        t = r(7535),
        i = r(82164),
        n = r(74285),
        l = r(95992),
        c = r(81994),
        o = r(42678),
        d = r(82110);
      function m(e) {
        let { value: s, onChange: r } = e,
          m = [
            {
              id: "b2-plus",
              label: "B2 or Higher",
              description: "Upper intermediate to advanced German (B2, C1, C2)",
              icon: t.A,
              score: 30,
              color: "text-green-600",
            },
            {
              id: "b1",
              label: "B1 Level",
              description:
                "Intermediate German - can handle most work situations",
              icon: i.A,
              score: 22,
              color: "text-primary",
            },
            {
              id: "a2",
              label: "A2 Level",
              description: "Basic German - can handle simple conversations",
              icon: n.A,
              score: 15,
              color: "text-amber-600",
            },
            {
              id: "a1",
              label: "A1 Level",
              description: "Beginner German - basic words and phrases",
              icon: n.A,
              score: 8,
              color: "text-orange-600",
            },
            {
              id: "none",
              label: "No German Knowledge",
              description: "Just starting to learn German",
              icon: l.A,
              score: 0,
              color: "text-red-600",
            },
          ];
        return (0, a.jsxs)("div", {
          className: "space-y-4 h-full flex flex-col",
          children: [
            (0, a.jsxs)("div", {
              className: "mb-4",
              children: [
                (0, a.jsxs)("div", {
                  className: "flex items-center gap-2 mb-2",
                  children: [
                    (0, a.jsx)(c.A, { className: "h-5 w-5 text-primary" }),
                    (0, a.jsx)("h2", {
                      className: "text-xl font-semibold",
                      children: "What is your German language level?",
                    }),
                  ],
                }),
                (0, a.jsx)("p", {
                  className: "text-sm text-muted-foreground",
                  children:
                    "German language skills are crucial for nursing in Germany. Most positions require at least B2 level.",
                }),
              ],
            }),
            (0, a.jsx)("div", {
              className: "flex-1 overflow-y-auto pr-1 grid gap-3",
              children: m.map((e) => {
                let t = s === e.id,
                  i = e.icon;
                return (0, a.jsx)(
                  "div",
                  {
                    onClick: () => r(e.id),
                    className: (0, d.cn)(
                      "relative p-4 rounded-xl border cursor-pointer transition-all duration-200",
                      "hover:border-primary/50 hover:shadow-sm",
                      t
                        ? "bg-primary/10 border-primary shadow-sm"
                        : "bg-card hover:bg-muted/30",
                    ),
                    children: (0, a.jsxs)("div", {
                      className: "flex items-start gap-3",
                      children: [
                        (0, a.jsx)("div", {
                          className: (0, d.cn)(
                            "p-2 rounded-full",
                            t ? "bg-primary/20" : "bg-muted",
                          ),
                          children: (0, a.jsx)(i, {
                            className: (0, d.cn)(
                              "h-5 w-5",
                              t ? "text-primary" : "text-muted-foreground",
                            ),
                          }),
                        }),
                        (0, a.jsxs)("div", {
                          className: "flex-1",
                          children: [
                            (0, a.jsxs)("div", {
                              className: "flex items-center justify-between",
                              children: [
                                (0, a.jsxs)("div", {
                                  className: "flex items-center gap-2",
                                  children: [
                                    (0, a.jsx)("h3", {
                                      className: "font-medium",
                                      children: e.label,
                                    }),
                                    (0, a.jsx)("span", {
                                      className: (0, d.cn)(
                                        "text-xs font-medium",
                                        e.color,
                                      ),
                                      children:
                                        e.score > 0
                                          ? "".concat(e.score, " pts")
                                          : "Critical",
                                    }),
                                  ],
                                }),
                                t &&
                                  (0, a.jsx)(o.A, {
                                    className:
                                      "h-5 w-5 text-primary animate-in fade-in zoom-in duration-200",
                                  }),
                              ],
                            }),
                            (0, a.jsx)("p", {
                              className: "text-sm text-muted-foreground mt-1",
                              children: e.description,
                            }),
                          ],
                        }),
                      ],
                    }),
                  },
                  e.id,
                );
              }),
            }),
            (0, a.jsxs)("div", {
              className: "mt-4 bg-muted/50 rounded-lg p-4 text-sm",
              children: [
                (0, a.jsx)("p", {
                  className: "font-medium text-foreground/90 mb-1",
                  children: "Language Requirements:",
                }),
                (0, a.jsx)("p", {
                  className: "text-muted-foreground",
                  children:
                    "Most nursing positions in Germany require B2 level German. Direct placement typically needs B2+, while Ausbildung programs may accept B1 with commitment to improve.",
                }),
              ],
            }),
          ],
        });
      }
    },
    75344: (e, s, r) => {
      "use strict";
      r.d(s, { NursingEducationQuestion: () => m });
      var a = r(70207),
        t = r(30478),
        i = r(82164),
        n = r(94231),
        l = r(74285),
        c = r(52461),
        o = r(42678),
        d = r(82110);
      function m(e) {
        let { value: s, onChange: r } = e,
          m = [
            {
              id: "bachelor-nursing",
              label: "Bachelor's in Nursing",
              description: "BSN, BScN, or equivalent nursing degree",
              icon: t.A,
              score: 30,
            },
            {
              id: "diploma-nursing",
              label: "Nursing Diploma",
              description:
                "Diploma in Nursing, RN certification, or equivalent",
              icon: i.A,
              score: 25,
            },
            {
              id: "bachelor-other",
              label: "Bachelor's in Other Field",
              description: "Bachelor's degree in healthcare or related field",
              icon: t.A,
              score: 20,
            },
            {
              id: "diploma-other",
              label: "Diploma in Healthcare",
              description:
                "Diploma in health sciences, medical technology, or related",
              icon: n.A,
              score: 15,
            },
            {
              id: "healthcare-cert",
              label: "Healthcare Certification",
              description:
                "Medical assistant, healthcare aide, or similar certification",
              icon: l.A,
              score: 12,
            },
            {
              id: "no-background",
              label: "No Healthcare Background",
              description:
                "New to healthcare field, looking to start nursing career",
              icon: c.A,
              score: 5,
            },
          ];
        return (0, a.jsxs)("div", {
          className: "space-y-4 h-full flex flex-col",
          children: [
            (0, a.jsxs)("div", {
              className: "mb-4",
              children: [
                (0, a.jsxs)("div", {
                  className: "flex items-center gap-2 mb-2",
                  children: [
                    (0, a.jsx)(t.A, { className: "h-5 w-5 text-primary" }),
                    (0, a.jsx)("h2", {
                      className: "text-xl font-semibold",
                      children: "What is your educational background?",
                    }),
                  ],
                }),
                (0, a.jsx)("p", {
                  className: "text-sm text-muted-foreground",
                  children:
                    "Your educational background helps us determine the best pathway for your nursing career in Germany.",
                }),
              ],
            }),
            (0, a.jsx)("div", {
              className: "flex-1 overflow-y-auto pr-1 grid gap-3",
              children: m.map((e) => {
                let t = s === e.id,
                  i = e.icon;
                return (0, a.jsx)(
                  "div",
                  {
                    onClick: () => r(e.id),
                    className: (0, d.cn)(
                      "relative p-4 rounded-xl border cursor-pointer transition-all duration-200",
                      "hover:border-primary/50 hover:shadow-sm",
                      t
                        ? "bg-primary/10 border-primary shadow-sm"
                        : "bg-card hover:bg-muted/30",
                    ),
                    children: (0, a.jsxs)("div", {
                      className: "flex items-start gap-3",
                      children: [
                        (0, a.jsx)("div", {
                          className: (0, d.cn)(
                            "p-2 rounded-full",
                            t ? "bg-primary/20" : "bg-muted",
                          ),
                          children: (0, a.jsx)(i, {
                            className: (0, d.cn)(
                              "h-5 w-5",
                              t ? "text-primary" : "text-muted-foreground",
                            ),
                          }),
                        }),
                        (0, a.jsxs)("div", {
                          className: "flex-1",
                          children: [
                            (0, a.jsxs)("div", {
                              className: "flex items-center justify-between",
                              children: [
                                (0, a.jsx)("h3", {
                                  className: "font-medium",
                                  children: e.label,
                                }),
                                t &&
                                  (0, a.jsx)(o.A, {
                                    className:
                                      "h-5 w-5 text-primary animate-in fade-in zoom-in duration-200",
                                  }),
                              ],
                            }),
                            (0, a.jsx)("p", {
                              className: "text-sm text-muted-foreground mt-1",
                              children: e.description,
                            }),
                          ],
                        }),
                      ],
                    }),
                  },
                  e.id,
                );
              }),
            }),
            (0, a.jsxs)("div", {
              className: "mt-4 bg-muted/50 rounded-lg p-4 text-sm",
              children: [
                (0, a.jsx)("p", {
                  className: "font-medium text-foreground/90 mb-1",
                  children: "Why this matters:",
                }),
                (0, a.jsx)("p", {
                  className: "text-muted-foreground",
                  children:
                    "Nursing in Germany requires specific qualifications. Your educational background determines whether you can pursue direct placement or need to complete an Ausbildung program.",
                }),
              ],
            }),
          ],
        });
      }
    },
    78166: (e, s, r) => {
      "use strict";
      r.d(s, { NursingExperienceQuestion: () => m });
      var a = r(70207),
        t = r(82164),
        i = r(49769),
        n = r(28131),
        l = r(52461),
        c = r(88117),
        o = r(42678),
        d = r(82110);
      function m(e) {
        let { value: s, onChange: r } = e,
          m = [
            {
              id: "5plus",
              label: "5+ Years Experience",
              description: "Extensive nursing or healthcare experience",
              icon: t.A,
              score: 25,
            },
            {
              id: "2-5",
              label: "2-5 Years Experience",
              description: "Moderate nursing or healthcare experience",
              icon: i.A,
              score: 20,
            },
            {
              id: "0-2",
              label: "0-2 Years Experience",
              description: "Some nursing or healthcare experience",
              icon: n.A,
              score: 15,
            },
            {
              id: "none",
              label: "No Professional Experience",
              description: "New to nursing/healthcare field",
              icon: l.A,
              score: 5,
            },
          ];
        return (0, a.jsxs)("div", {
          className: "space-y-4 h-full flex flex-col",
          children: [
            (0, a.jsxs)("div", {
              className: "mb-4",
              children: [
                (0, a.jsxs)("div", {
                  className: "flex items-center gap-2 mb-2",
                  children: [
                    (0, a.jsx)(c.A, { className: "h-5 w-5 text-primary" }),
                    (0, a.jsx)("h2", {
                      className: "text-xl font-semibold",
                      children: "What is your professional experience level?",
                    }),
                  ],
                }),
                (0, a.jsx)("p", {
                  className: "text-sm text-muted-foreground",
                  children:
                    "Your professional experience in nursing or healthcare helps determine your qualification level.",
                }),
              ],
            }),
            (0, a.jsx)("div", {
              className: "flex-1 overflow-y-auto pr-1 grid gap-3",
              children: m.map((e) => {
                let t = s === e.id,
                  i = e.icon;
                return (0, a.jsx)(
                  "div",
                  {
                    onClick: () => r(e.id),
                    className: (0, d.cn)(
                      "relative p-4 rounded-xl border cursor-pointer transition-all duration-200",
                      "hover:border-primary/50 hover:shadow-sm",
                      t
                        ? "bg-primary/10 border-primary shadow-sm"
                        : "bg-card hover:bg-muted/30",
                    ),
                    children: (0, a.jsxs)("div", {
                      className: "flex items-start gap-3",
                      children: [
                        (0, a.jsx)("div", {
                          className: (0, d.cn)(
                            "p-2 rounded-full",
                            t ? "bg-primary/20" : "bg-muted",
                          ),
                          children: (0, a.jsx)(i, {
                            className: (0, d.cn)(
                              "h-5 w-5",
                              t ? "text-primary" : "text-muted-foreground",
                            ),
                          }),
                        }),
                        (0, a.jsxs)("div", {
                          className: "flex-1",
                          children: [
                            (0, a.jsxs)("div", {
                              className: "flex items-center justify-between",
                              children: [
                                (0, a.jsx)("h3", {
                                  className: "font-medium",
                                  children: e.label,
                                }),
                                t &&
                                  (0, a.jsx)(o.A, {
                                    className:
                                      "h-5 w-5 text-primary animate-in fade-in zoom-in duration-200",
                                  }),
                              ],
                            }),
                            (0, a.jsx)("p", {
                              className: "text-sm text-muted-foreground mt-1",
                              children: e.description,
                            }),
                          ],
                        }),
                      ],
                    }),
                  },
                  e.id,
                );
              }),
            }),
            (0, a.jsxs)("div", {
              className: "mt-4 bg-muted/50 rounded-lg p-4 text-sm",
              children: [
                (0, a.jsx)("p", {
                  className: "font-medium text-foreground/90 mb-1",
                  children: "Why this matters:",
                }),
                (0, a.jsx)("p", {
                  className: "text-muted-foreground",
                  children:
                    "Professional experience in nursing or healthcare demonstrates your practical skills and helps with qualification recognition in Germany.",
                }),
              ],
            }),
          ],
        });
      }
    },
    79574: (e, s, r) => {
      "use strict";
      r.d(s, { NursingContactQuestion: () => h });
      var a = r(70207),
        t = r(87223),
        i = r(28560),
        n = r(95992),
        l = r(95540),
        c = r(42678),
        o = r(40167),
        d = r(87277),
        m = r(64920),
        u = r(82110);
      function h(e) {
        let { value: s, onChange: r } = e,
          [h, x] = (0, t.useState)(() => {
            try {
              return s
                ? JSON.parse(s)
                : { firstName: "", phone: "", email: "", countryCode: "" };
            } catch (e) {
              return { firstName: "", phone: "", email: "", countryCode: "" };
            }
          }),
          [p, g] = (0, t.useState)({ firstName: "", phone: "", email: "" }),
          f = (e, s) => {
            switch (e) {
              case "firstName":
                if (!s.trim()) return "First name is required";
                if (s.length < 2)
                  return "First name must be at least 2 characters";
                return "";
              case "phone":
                if (!s.trim()) return "Phone number is required";
                if (s.length < 10) return "Please enter a valid phone number";
                return "";
              case "email":
                if (!s.trim()) return "Email is required";
                if (!/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(s))
                  return "Please enter a valid email address";
                return "";
              default:
                return "";
            }
          },
          j = (e, s) => {
            let a = { ...h, [e]: s };
            x(a);
            let t = f(e, s);
            (g((s) => ({ ...s, [e]: t })), r(JSON.stringify(a)));
          },
          y =
            h.firstName &&
            h.phone &&
            h.email &&
            !p.firstName &&
            !p.phone &&
            !p.email;
        return (0, a.jsxs)("div", {
          className: "space-y-4 h-full flex flex-col",
          children: [
            (0, a.jsxs)("div", {
              className: "mb-4",
              children: [
                (0, a.jsxs)("div", {
                  className: "flex items-center gap-2 mb-2",
                  children: [
                    (0, a.jsx)(i.A, { className: "h-5 w-5 text-primary" }),
                    (0, a.jsx)("h2", {
                      className: "text-xl font-semibold",
                      children: "Contact Information",
                    }),
                  ],
                }),
                (0, a.jsx)("p", {
                  className: "text-sm text-muted-foreground",
                  children:
                    "We'll use this information to send you personalized nursing career guidance and opportunities.",
                }),
              ],
            }),
            (0, a.jsxs)("div", {
              className: "flex-1 space-y-4",
              children: [
                (0, a.jsxs)("div", {
                  className: "space-y-2",
                  children: [
                    (0, a.jsx)(d.J, {
                      htmlFor: "firstName",
                      children: "First Name",
                    }),
                    (0, a.jsxs)("div", {
                      className: "relative",
                      children: [
                        (0, a.jsx)(o.p, {
                          id: "firstName",
                          type: "text",
                          placeholder: "Your first name",
                          value: h.firstName,
                          onChange: (e) => j("firstName", e.target.value),
                          className: (0, u.cn)(
                            "pl-10",
                            p.firstName ? "border-red-500" : "",
                          ),
                        }),
                        (0, a.jsx)(i.A, {
                          className:
                            "absolute left-3 top-1/2 transform -translate-y-1/2 h-4 w-4 text-muted-foreground",
                        }),
                      ],
                    }),
                    p.firstName &&
                      (0, a.jsxs)("div", {
                        className:
                          "flex items-center gap-1 text-red-500 text-sm",
                        children: [
                          (0, a.jsx)(n.A, { className: "h-3 w-3" }),
                          p.firstName,
                        ],
                      }),
                  ],
                }),
                (0, a.jsxs)("div", {
                  className: "space-y-2",
                  children: [
                    (0, a.jsx)(d.J, {
                      htmlFor: "phone",
                      children: "Phone Number",
                    }),
                    (0, a.jsx)(m.L, {
                      value: h.phone,
                      onChange: (e) => j("phone", e),
                      onCountryChange: (e) =>
                        j(
                          "countryCode",
                          (null == e ? void 0 : e.phoneCode) || "",
                        ),
                      defaultCountry: "IN",
                      error: !!p.phone,
                    }),
                    p.phone &&
                      (0, a.jsxs)("div", {
                        className:
                          "flex items-center gap-1 text-red-500 text-sm",
                        children: [
                          (0, a.jsx)(n.A, { className: "h-3 w-3" }),
                          p.phone,
                        ],
                      }),
                  ],
                }),
                (0, a.jsxs)("div", {
                  className: "space-y-2",
                  children: [
                    (0, a.jsx)(d.J, {
                      htmlFor: "email",
                      children: "Email Address",
                    }),
                    (0, a.jsxs)("div", {
                      className: "relative",
                      children: [
                        (0, a.jsx)(o.p, {
                          id: "email",
                          type: "email",
                          placeholder: "your.email@example.com",
                          value: h.email,
                          onChange: (e) => j("email", e.target.value),
                          className: (0, u.cn)(
                            "pl-10",
                            p.email ? "border-red-500" : "",
                          ),
                        }),
                        (0, a.jsx)(l.A, {
                          className:
                            "absolute left-3 top-1/2 transform -translate-y-1/2 h-4 w-4 text-muted-foreground",
                        }),
                      ],
                    }),
                    p.email &&
                      (0, a.jsxs)("div", {
                        className:
                          "flex items-center gap-1 text-red-500 text-sm",
                        children: [
                          (0, a.jsx)(n.A, { className: "h-3 w-3" }),
                          p.email,
                        ],
                      }),
                  ],
                }),
                y &&
                  (0, a.jsxs)("div", {
                    className:
                      "flex items-center gap-2 text-green-600 text-sm bg-green-50 p-3 rounded-lg",
                    children: [
                      (0, a.jsx)(c.A, { className: "h-4 w-4" }),
                      "All information provided correctly",
                    ],
                  }),
              ],
            }),
            (0, a.jsxs)("div", {
              className: "mt-4 bg-muted/50 rounded-lg p-4 text-sm",
              children: [
                (0, a.jsx)("p", {
                  className: "font-medium text-foreground/90 mb-1",
                  children: "Privacy assurance:",
                }),
                (0, a.jsx)("p", {
                  className: "text-muted-foreground",
                  children:
                    "Your contact information is secure and will only be used to provide you with personalized nursing career guidance and relevant opportunities in Germany.",
                }),
              ],
            }),
          ],
        });
      }
    },
    96719: (e, s, r) => {
      "use strict";
      r.d(s, { NursingTimelineQuestion: () => d });
      var a = r(70207),
        t = r(67926),
        i = r(84217),
        n = r(1701),
        l = r(28131),
        c = r(42678),
        o = r(82110);
      function d(e) {
        let { value: s, onChange: r } = e,
          d = [
            {
              id: "asap",
              label: "ASAP (6-12 months)",
              description: "Ready to start immediately, can relocate quickly",
              icon: t.A,
              score: 10,
            },
            {
              id: "medium",
              label: "Medium-term (1-2 years)",
              description:
                "Need time for preparation, language learning, or planning",
              icon: i.A,
              score: 8,
            },
            {
              id: "long-term",
              label: "Long-term (2+ years)",
              description: "Flexible timeline, want thorough preparation",
              icon: n.A,
              score: 6,
            },
          ];
        return (0, a.jsxs)("div", {
          className: "space-y-4 h-full flex flex-col",
          children: [
            (0, a.jsxs)("div", {
              className: "mb-4",
              children: [
                (0, a.jsxs)("div", {
                  className: "flex items-center gap-2 mb-2",
                  children: [
                    (0, a.jsx)(l.A, { className: "h-5 w-5 text-primary" }),
                    (0, a.jsx)("h2", {
                      className: "text-xl font-semibold",
                      children: "What is your preferred timeline?",
                    }),
                  ],
                }),
                (0, a.jsx)("p", {
                  className: "text-sm text-muted-foreground",
                  children:
                    "Your timeline preference helps us recommend the most suitable pathway for your nursing career.",
                }),
              ],
            }),
            (0, a.jsx)("div", {
              className: "flex-1 overflow-y-auto pr-1 grid gap-3",
              children: d.map((e) => {
                let t = s === e.id,
                  i = e.icon;
                return (0, a.jsx)(
                  "div",
                  {
                    onClick: () => r(e.id),
                    className: (0, o.cn)(
                      "relative p-4 rounded-xl border cursor-pointer transition-all duration-200",
                      "hover:border-primary/50 hover:shadow-sm",
                      t
                        ? "bg-primary/10 border-primary shadow-sm"
                        : "bg-card hover:bg-muted/30",
                    ),
                    children: (0, a.jsxs)("div", {
                      className: "flex items-start gap-3",
                      children: [
                        (0, a.jsx)("div", {
                          className: (0, o.cn)(
                            "p-2 rounded-full",
                            t ? "bg-primary/20" : "bg-muted",
                          ),
                          children: (0, a.jsx)(i, {
                            className: (0, o.cn)(
                              "h-5 w-5",
                              t ? "text-primary" : "text-muted-foreground",
                            ),
                          }),
                        }),
                        (0, a.jsxs)("div", {
                          className: "flex-1",
                          children: [
                            (0, a.jsxs)("div", {
                              className: "flex items-center justify-between",
                              children: [
                                (0, a.jsx)("h3", {
                                  className: "font-medium",
                                  children: e.label,
                                }),
                                t &&
                                  (0, a.jsx)(c.A, {
                                    className:
                                      "h-5 w-5 text-primary animate-in fade-in zoom-in duration-200",
                                  }),
                              ],
                            }),
                            (0, a.jsx)("p", {
                              className: "text-sm text-muted-foreground mt-1",
                              children: e.description,
                            }),
                          ],
                        }),
                      ],
                    }),
                  },
                  e.id,
                );
              }),
            }),
            (0, a.jsxs)("div", {
              className: "mt-4 bg-muted/50 rounded-lg p-4 text-sm",
              children: [
                (0, a.jsx)("p", {
                  className: "font-medium text-foreground/90 mb-1",
                  children: "Timeline considerations:",
                }),
                (0, a.jsx)("p", {
                  className: "text-muted-foreground",
                  children:
                    "Direct placement can be faster (6-12 months) if you have strong qualifications. Ausbildung programs typically take 3 years but provide comprehensive training and guaranteed employment.",
                }),
              ],
            }),
          ],
        });
      }
    },
  },
  (e) => {
    var s = (s) => e((e.s = s));
    (e.O(0, [46593, 36209, 84121, 72076, 77358], () => s(2697)),
      (_N_E = e.O()));
  },
]);
