(self.webpackChunk_N_E = self.webpackChunk_N_E || []).push([
  [85292],
  {
    65779: (e, i, a) => {
      "use strict";
      a.d(i, { default: () => er });
      var n = a(70207),
        r = a(87223),
        s = a(30478),
        t = a(79650),
        l = a(82164),
        o = a(84217),
        c = a(88117),
        d = a(33482),
        u = a(81994),
        m = a(28131),
        g = a(81624),
        h = a(79024),
        y = a(72815),
        p = a(63016),
        v = a(52461),
        x = a(82254),
        b = a(27774),
        f = a(10863),
        j = a(20351),
        w = a(14207),
        N = a(80374),
        k = a(79046),
        A = a(39441),
        S = a(87277),
        P = a(40167),
        C = a(93501),
        F = a(60358),
        T = a(46031);
      function B(e) {
        var i, a;
        let { onSubmit: s } = e,
          [t, l] = (0, r.useState)(1),
          [o, c] = (0, r.useState)({
            age: 24,
            priorities: {
              cost: 5,
              time: 5,
              careerGrowth: 5,
              stability: 5,
              flexibility: 5,
              prestige: 5,
            },
          }),
          d = (e, i) => {
            c((a) => ({ ...a, [e]: i }));
          },
          u = (e, i) => {
            c((a) => ({ ...a, priorities: { ...a.priorities, [e]: i } }));
          },
          m = () =>
            1 === t
              ? o.age && o.educationLevel && o.fieldOfInterest
              : 2 === t
                ? o.availableFunds && o.monthlyBudget
                : 3 === t
                  ? o.germanLevel && o.learningPreference
                  : 4 !== t || (o.timeToStart && o.workLifeBalancePriority);
        return (0, n.jsxs)("div", {
          className: "bg-white rounded-2xl border-2 border-gray-200 p-8",
          children: [
            (0, n.jsxs)("div", {
              className: "mb-8",
              children: [
                (0, n.jsx)("div", {
                  className: "flex justify-between mb-2",
                  children: [1, 2, 3, 4, 5].map((e) =>
                    (0, n.jsx)(
                      "div",
                      {
                        className: "h-2 flex-1 mx-1 rounded-full ".concat(
                          e <= t ? "bg-primary" : "bg-gray-200",
                        ),
                      },
                      e,
                    ),
                  ),
                }),
                (0, n.jsxs)("p", {
                  className: "text-sm text-gray-600 text-center",
                  children: [
                    "Step ",
                    t,
                    " of 5: ",
                    1 === t
                      ? "Personal Profile"
                      : 2 === t
                        ? "Financial Assessment"
                        : 3 === t
                          ? "Academic & Skills"
                          : 4 === t
                            ? "Lifestyle & Goals"
                            : "Priorities",
                  ],
                }),
              ],
            }),
            1 === t &&
              (0, n.jsxs)("div", {
                className: "space-y-6",
                children: [
                  (0, n.jsxs)("div", {
                    children: [
                      (0, n.jsx)(S.J, { children: "Age" }),
                      (0, n.jsx)(P.p, {
                        type: "number",
                        value: o.age || "",
                        onChange: (e) => d("age", parseInt(e.target.value)),
                        min: "18",
                        max: "40",
                      }),
                    ],
                  }),
                  (0, n.jsxs)("div", {
                    children: [
                      (0, n.jsx)(S.J, { children: "Current Education Level" }),
                      (0, n.jsxs)(C.l6, {
                        value: o.educationLevel,
                        onValueChange: (e) => d("educationLevel", e),
                        children: [
                          (0, n.jsx)(C.bq, {
                            children: (0, n.jsx)(C.yv, {
                              placeholder: "Select education level",
                            }),
                          }),
                          (0, n.jsxs)(C.gC, {
                            children: [
                              (0, n.jsx)(C.eb, {
                                value: "high-school",
                                children: "High School",
                              }),
                              (0, n.jsx)(C.eb, {
                                value: "diploma",
                                children: "Diploma/Vocational Certificate",
                              }),
                              (0, n.jsx)(C.eb, {
                                value: "bachelors",
                                children: "Bachelor's Degree",
                              }),
                              (0, n.jsx)(C.eb, {
                                value: "working-professional",
                                children: "Working Professional",
                              }),
                            ],
                          }),
                        ],
                      }),
                    ],
                  }),
                  (0, n.jsxs)("div", {
                    children: [
                      (0, n.jsx)(S.J, { children: "Field of Interest" }),
                      (0, n.jsxs)(C.l6, {
                        value: o.fieldOfInterest,
                        onValueChange: (e) => d("fieldOfInterest", e),
                        children: [
                          (0, n.jsx)(C.bq, {
                            children: (0, n.jsx)(C.yv, {
                              placeholder: "Select field",
                            }),
                          }),
                          (0, n.jsxs)(C.gC, {
                            children: [
                              (0, n.jsx)(C.eb, {
                                value: "IT & Software Development",
                                children: "IT & Software Development",
                              }),
                              (0, n.jsx)(C.eb, {
                                value: "Healthcare & Nursing",
                                children: "Healthcare & Nursing",
                              }),
                              (0, n.jsx)(C.eb, {
                                value: "Engineering & Manufacturing",
                                children: "Engineering & Manufacturing",
                              }),
                              (0, n.jsx)(C.eb, {
                                value: "Business & Administration",
                                children: "Business & Administration",
                              }),
                            ],
                          }),
                        ],
                      }),
                    ],
                  }),
                  (0, n.jsxs)("div", {
                    children: [
                      (0, n.jsx)(S.J, { children: "Career Goal" }),
                      (0, n.jsxs)(C.l6, {
                        value: o.careerGoal,
                        onValueChange: (e) => d("careerGoal", e),
                        children: [
                          (0, n.jsx)(C.bq, {
                            children: (0, n.jsx)(C.yv, {
                              placeholder: "Select goal",
                            }),
                          }),
                          (0, n.jsxs)(C.gC, {
                            children: [
                              (0, n.jsx)(C.eb, {
                                value: "quick-employment",
                                children: "Quick Employment",
                              }),
                              (0, n.jsx)(C.eb, {
                                value: "practical-skills",
                                children: "Practical Skills Development",
                              }),
                              (0, n.jsx)(C.eb, {
                                value: "academic-advancement",
                                children: "Academic Advancement",
                              }),
                              (0, n.jsx)(C.eb, {
                                value: "research",
                                children: "Research & Innovation",
                              }),
                              (0, n.jsx)(C.eb, {
                                value: "entrepreneurship",
                                children: "Entrepreneurship",
                              }),
                            ],
                          }),
                        ],
                      }),
                    ],
                  }),
                ],
              }),
            2 === t &&
              (0, n.jsxs)("div", {
                className: "space-y-6",
                children: [
                  (0, n.jsxs)("div", {
                    children: [
                      (0, n.jsx)(S.J, { children: "Available Funds" }),
                      (0, n.jsxs)(C.l6, {
                        value: o.availableFunds,
                        onValueChange: (e) => d("availableFunds", e),
                        children: [
                          (0, n.jsx)(C.bq, {
                            children: (0, n.jsx)(C.yv, {
                              placeholder: "Select available funds",
                            }),
                          }),
                          (0, n.jsxs)(C.gC, {
                            children: [
                              (0, n.jsx)(C.eb, {
                                value: "0-5k",
                                children: "€0 - €5,000",
                              }),
                              (0, n.jsx)(C.eb, {
                                value: "5k-15k",
                                children: "€5,000 - €15,000",
                              }),
                              (0, n.jsx)(C.eb, {
                                value: "15k-30k",
                                children: "€15,000 - €30,000",
                              }),
                              (0, n.jsx)(C.eb, {
                                value: "30k+",
                                children: "€30,000+",
                              }),
                            ],
                          }),
                        ],
                      }),
                    ],
                  }),
                  (0, n.jsxs)("div", {
                    children: [
                      (0, n.jsx)(S.J, {
                        children: "Monthly Budget Capacity (€)",
                      }),
                      (0, n.jsx)(P.p, {
                        type: "number",
                        value: o.monthlyBudget || "",
                        onChange: (e) =>
                          d("monthlyBudget", parseInt(e.target.value)),
                        min: "0",
                        max: "5000",
                      }),
                    ],
                  }),
                  (0, n.jsxs)("div", {
                    children: [
                      (0, n.jsx)(S.J, {
                        children: "Need Income During Studies?",
                      }),
                      (0, n.jsxs)(C.l6, {
                        value:
                          null === (i = o.needIncome) || void 0 === i
                            ? void 0
                            : i.toString(),
                        onValueChange: (e) =>
                          d(
                            "needIncome",
                            "true" === e || ("false" !== e && "partial"),
                          ),
                        children: [
                          (0, n.jsx)(C.bq, {
                            children: (0, n.jsx)(C.yv, {
                              placeholder: "Select",
                            }),
                          }),
                          (0, n.jsxs)(C.gC, {
                            children: [
                              (0, n.jsx)(C.eb, {
                                value: "true",
                                children: "Yes, absolutely necessary",
                              }),
                              (0, n.jsx)(C.eb, {
                                value: "partial",
                                children: "Partial income would help",
                              }),
                              (0, n.jsx)(C.eb, {
                                value: "false",
                                children: "No, have sufficient funds",
                              }),
                            ],
                          }),
                        ],
                      }),
                    ],
                  }),
                  (0, n.jsxs)("div", {
                    children: [
                      (0, n.jsx)(S.J, { children: "Family Financial Support" }),
                      (0, n.jsxs)(C.l6, {
                        value: o.familySupport,
                        onValueChange: (e) => d("familySupport", e),
                        children: [
                          (0, n.jsx)(C.bq, {
                            children: (0, n.jsx)(C.yv, {
                              placeholder: "Select",
                            }),
                          }),
                          (0, n.jsxs)(C.gC, {
                            children: [
                              (0, n.jsx)(C.eb, {
                                value: "full",
                                children: "Full support",
                              }),
                              (0, n.jsx)(C.eb, {
                                value: "partial",
                                children: "Partial support",
                              }),
                              (0, n.jsx)(C.eb, {
                                value: "none",
                                children: "No support",
                              }),
                            ],
                          }),
                        ],
                      }),
                    ],
                  }),
                ],
              }),
            3 === t &&
              (0, n.jsxs)("div", {
                className: "space-y-6",
                children: [
                  (0, n.jsxs)("div", {
                    children: [
                      (0, n.jsx)(S.J, {
                        children: "Current German Language Level",
                      }),
                      (0, n.jsxs)(C.l6, {
                        value: o.germanLevel,
                        onValueChange: (e) => d("germanLevel", e),
                        children: [
                          (0, n.jsx)(C.bq, {
                            children: (0, n.jsx)(C.yv, {
                              placeholder: "Select level",
                            }),
                          }),
                          (0, n.jsxs)(C.gC, {
                            children: [
                              (0, n.jsx)(C.eb, {
                                value: "none",
                                children: "None",
                              }),
                              (0, n.jsx)(C.eb, {
                                value: "a1-a2",
                                children: "A1-A2 (Beginner)",
                              }),
                              (0, n.jsx)(C.eb, {
                                value: "b1-b2",
                                children: "B1-B2 (Intermediate)",
                              }),
                              (0, n.jsx)(C.eb, {
                                value: "c1-c2",
                                children: "C1-C2 (Advanced)",
                              }),
                            ],
                          }),
                        ],
                      }),
                    ],
                  }),
                  (0, n.jsxs)("div", {
                    children: [
                      (0, n.jsx)(S.J, {
                        children: "Learning Style Preference",
                      }),
                      (0, n.jsxs)(C.l6, {
                        value: o.learningPreference,
                        onValueChange: (e) => d("learningPreference", e),
                        children: [
                          (0, n.jsx)(C.bq, {
                            children: (0, n.jsx)(C.yv, {
                              placeholder: "Select preference",
                            }),
                          }),
                          (0, n.jsxs)(C.gC, {
                            children: [
                              (0, n.jsx)(C.eb, {
                                value: "hands-on",
                                children: "Hands-on / Practical",
                              }),
                              (0, n.jsx)(C.eb, {
                                value: "theoretical",
                                children: "Theoretical / Research",
                              }),
                              (0, n.jsx)(C.eb, {
                                value: "mixed",
                                children: "Mixed approach",
                              }),
                            ],
                          }),
                        ],
                      }),
                    ],
                  }),
                  (0, n.jsxs)("div", {
                    children: [
                      (0, n.jsx)(S.J, { children: "Academic Performance" }),
                      (0, n.jsxs)(C.l6, {
                        value: o.academicPerformance,
                        onValueChange: (e) => d("academicPerformance", e),
                        children: [
                          (0, n.jsx)(C.bq, {
                            children: (0, n.jsx)(C.yv, {
                              placeholder: "Select performance",
                            }),
                          }),
                          (0, n.jsxs)(C.gC, {
                            children: [
                              (0, n.jsx)(C.eb, {
                                value: "excellent",
                                children: "Excellent (Top 10%)",
                              }),
                              (0, n.jsx)(C.eb, {
                                value: "good",
                                children: "Good (Top 25%)",
                              }),
                              (0, n.jsx)(C.eb, {
                                value: "average",
                                children: "Average",
                              }),
                              (0, n.jsx)(C.eb, {
                                value: "below-average",
                                children: "Below Average",
                              }),
                            ],
                          }),
                        ],
                      }),
                    ],
                  }),
                  (0, n.jsxs)("div", {
                    children: [
                      (0, n.jsx)(S.J, {
                        children: "Previous Work Experience (years)",
                      }),
                      (0, n.jsx)(P.p, {
                        type: "number",
                        value: o.previousWorkExperience || 0,
                        onChange: (e) =>
                          d("previousWorkExperience", parseInt(e.target.value)),
                        min: "0",
                        max: "20",
                      }),
                    ],
                  }),
                ],
              }),
            4 === t &&
              (0, n.jsxs)("div", {
                className: "space-y-6",
                children: [
                  (0, n.jsxs)("div", {
                    children: [
                      (0, n.jsx)(S.J, { children: "Time to Start" }),
                      (0, n.jsxs)(C.l6, {
                        value: o.timeToStart,
                        onValueChange: (e) => d("timeToStart", e),
                        children: [
                          (0, n.jsx)(C.bq, {
                            children: (0, n.jsx)(C.yv, {
                              placeholder: "Select timeline",
                            }),
                          }),
                          (0, n.jsxs)(C.gC, {
                            children: [
                              (0, n.jsx)(C.eb, {
                                value: "asap",
                                children: "ASAP (within 6 months)",
                              }),
                              (0, n.jsx)(C.eb, {
                                value: "6-months",
                                children: "6 months",
                              }),
                              (0, n.jsx)(C.eb, {
                                value: "1-year",
                                children: "1 year",
                              }),
                              (0, n.jsx)(C.eb, {
                                value: "2-years",
                                children: "2 years",
                              }),
                            ],
                          }),
                        ],
                      }),
                    ],
                  }),
                  (0, n.jsxs)("div", {
                    children: [
                      (0, n.jsx)(S.J, {
                        children: "Work-Life Balance Priority",
                      }),
                      (0, n.jsxs)(C.l6, {
                        value: o.workLifeBalancePriority,
                        onValueChange: (e) => d("workLifeBalancePriority", e),
                        children: [
                          (0, n.jsx)(C.bq, {
                            children: (0, n.jsx)(C.yv, {
                              placeholder: "Select priority",
                            }),
                          }),
                          (0, n.jsxs)(C.gC, {
                            children: [
                              (0, n.jsx)(C.eb, {
                                value: "high",
                                children: "High (very important)",
                              }),
                              (0, n.jsx)(C.eb, {
                                value: "medium",
                                children: "Medium",
                              }),
                              (0, n.jsx)(C.eb, {
                                value: "low",
                                children: "Low (career focused)",
                              }),
                            ],
                          }),
                        ],
                      }),
                    ],
                  }),
                  (0, n.jsxs)("div", {
                    children: [
                      (0, n.jsx)(S.J, {
                        children: "Long-term Settlement in Germany?",
                      }),
                      (0, n.jsxs)(C.l6, {
                        value:
                          null === (a = o.longTermSettlement) || void 0 === a
                            ? void 0
                            : a.toString(),
                        onValueChange: (e) =>
                          d("longTermSettlement", "true" === e),
                        children: [
                          (0, n.jsx)(C.bq, {
                            children: (0, n.jsx)(C.yv, {
                              placeholder: "Select",
                            }),
                          }),
                          (0, n.jsxs)(C.gC, {
                            children: [
                              (0, n.jsx)(C.eb, {
                                value: "true",
                                children: "Yes, plan to settle permanently",
                              }),
                              (0, n.jsx)(C.eb, {
                                value: "false",
                                children: "No, want international mobility",
                              }),
                            ],
                          }),
                        ],
                      }),
                    ],
                  }),
                ],
              }),
            5 === t &&
              (0, n.jsxs)("div", {
                className: "space-y-6",
                children: [
                  (0, n.jsx)("p", {
                    className: "text-sm text-gray-600 mb-4",
                    children:
                      "Rate each factor from 1-10 (1 = not important, 10 = very important)",
                  }),
                  Object.entries({
                    cost: "Financial Cost",
                    time: "Time to Employment",
                    careerGrowth: "Career Growth Potential",
                    stability: "Job Stability & Security",
                    flexibility: "Schedule Flexibility",
                    prestige: "Qualification Prestige",
                  }).map((e) => {
                    var i, a;
                    let [r, s] = e;
                    return (0, n.jsxs)(
                      "div",
                      {
                        children: [
                          (0, n.jsxs)("div", {
                            className: "flex justify-between mb-2",
                            children: [
                              (0, n.jsx)(S.J, { children: s }),
                              (0, n.jsxs)("span", {
                                className: "text-sm font-semibold text-orange",
                                children: [
                                  (null === (i = o.priorities) || void 0 === i
                                    ? void 0
                                    : i[r]) || 5,
                                  "/10",
                                ],
                              }),
                            ],
                          }),
                          (0, n.jsx)("input", {
                            type: "range",
                            min: "1",
                            max: "10",
                            value:
                              (null === (a = o.priorities) || void 0 === a
                                ? void 0
                                : a[r]) || 5,
                            onChange: (e) => u(r, parseInt(e.target.value)),
                            className:
                              "w-full h-2 bg-gray-200 rounded-full appearance-none cursor-pointer [&::-webkit-slider-thumb]:bg-primary [&::-moz-range-thumb]:bg-primary",
                          }),
                        ],
                      },
                      r,
                    );
                  }),
                ],
              }),
            (0, n.jsxs)("div", {
              className: "flex gap-4 mt-8",
              children: [
                t > 1 &&
                  (0, n.jsxs)(A.$, {
                    onClick: () => l(t - 1),
                    variant: "outline",
                    className: "flex-1",
                    children: [
                      (0, n.jsx)(F.A, { className: "h-4 w-4 mr-2" }),
                      "Previous",
                    ],
                  }),
                t < 5
                  ? (0, n.jsxs)(A.$, {
                      onClick: () => l(t + 1),
                      disabled: !m(),
                      className:
                        "flex-1 bg-primary hover:bg-primary/90 text-cream rounded-full",
                      children: [
                        "Next",
                        (0, n.jsx)(T.A, { className: "h-4 w-4 ml-2" }),
                      ],
                    })
                  : (0, n.jsx)(A.$, {
                      onClick: () => {
                        s(o);
                      },
                      disabled: !m(),
                      className:
                        "flex-1 bg-primary hover:bg-primary/90 text-cream rounded-full",
                      children: "Get Comparison Results",
                    }),
              ],
            }),
          ],
        });
      }
      var M = a(51613),
        I = a(82110);
      function R(e) {
        let {
            title: i,
            icon: a,
            defaultExpanded: s = !1,
            children: t,
            className: l = "",
            badge: o,
            badgeColor: c = "default",
          } = e,
          [d, u] = (0, r.useState)(s);
        return (0, n.jsxs)("div", {
          className: (0, I.cn)(
            "bg-white rounded-2xl border-2 border-gray-200 overflow-hidden",
            l,
          ),
          children: [
            (0, n.jsxs)("button", {
              onClick: () => u(!d),
              className:
                "w-full flex items-center justify-between p-6 bg-beige hover:bg-primary/10 transition-colors duration-200",
              "aria-expanded": d,
              children: [
                (0, n.jsxs)("div", {
                  className: "flex items-center gap-4",
                  children: [
                    (0, n.jsx)("div", {
                      className: "p-3 bg-primary rounded-xl",
                      children: (0, n.jsx)(a, {
                        className: "h-6 w-6 text-cream",
                      }),
                    }),
                    (0, n.jsxs)("div", {
                      className: "flex items-center gap-3",
                      children: [
                        (0, n.jsx)("h3", {
                          className:
                            "text-lg font-semibold text-secondary text-left",
                          children: i,
                        }),
                        o &&
                          (0, n.jsx)("span", {
                            className: (0, I.cn)(
                              "px-3 py-1 rounded-full text-xs font-medium",
                              {
                                orange: "bg-orange text-white",
                                green: "bg-green text-cream",
                                default: "bg-gray-200 text-gray-700",
                              }[c],
                            ),
                            children: o,
                          }),
                      ],
                    }),
                  ],
                }),
                (0, n.jsx)(M.A, {
                  className: (0, I.cn)(
                    "h-6 w-6 text-secondary transition-transform duration-300 flex-shrink-0",
                    d && "rotate-180",
                  ),
                }),
              ],
            }),
            (0, n.jsx)("div", {
              className: (0, I.cn)(
                "overflow-hidden transition-all duration-300 ease-in-out",
                d ? "max-h-[10000px] opacity-100" : "max-h-0 opacity-0",
              ),
              children: (0, n.jsx)("div", {
                className: "p-6 pt-0 md:p-8 md:pt-0",
                children: (0, n.jsx)("div", { className: "pt-6", children: t }),
              }),
            }),
          ],
        });
      }
      var L = a(11647),
        q = a(96131),
        E = a(77369),
        G = a(33286),
        U = a(18289),
        D = a(60849),
        W = a(99003),
        H = a(40747);
      function Y(e) {
        let { ausbildungData: i, universityData: a } = e,
          r = [
            { year: "Start", ausbildung: i.starting, university: a.starting },
            { year: "Year 5", ausbildung: i.year5, university: a.year5 },
            { year: "Year 10", ausbildung: i.year10, university: a.year10 },
          ];
        return (0, n.jsxs)("div", {
          className:
            "w-full h-[300px] bg-white rounded-xl p-4 border-2 border-gray-200",
          children: [
            (0, n.jsx)("h4", {
              className: "font-semibold text-gray-900 mb-4",
              children: "Salary Growth Projection",
            }),
            (0, n.jsx)(L.u, {
              width: "100%",
              height: "100%",
              children: (0, n.jsxs)(q.b, {
                data: r,
                children: [
                  (0, n.jsx)(E.d, {
                    strokeDasharray: "3 3",
                    stroke: "#E5E7EB",
                  }),
                  (0, n.jsx)(G.W, {
                    dataKey: "year",
                    stroke: "#6B7280",
                    style: { fontSize: "12px" },
                  }),
                  (0, n.jsx)(U.h, {
                    stroke: "#6B7280",
                    style: { fontSize: "12px" },
                    tickFormatter: (e) => "€".concat((e / 1e3).toFixed(0), "k"),
                  }),
                  (0, n.jsx)(D.m, {
                    formatter: (e) => "€".concat(e.toLocaleString()),
                    contentStyle: {
                      backgroundColor: "#FFFFFF",
                      border: "2px solid #E5E7EB",
                      borderRadius: "12px",
                      padding: "8px 12px",
                    },
                  }),
                  (0, n.jsx)(W.s, {
                    wrapperStyle: { fontSize: "12px" },
                    iconType: "line",
                  }),
                  (0, n.jsx)(H.N, {
                    type: "monotone",
                    dataKey: "ausbildung",
                    stroke: "#F4991A",
                    strokeWidth: 3,
                    name: "Ausbildung",
                    dot: { fill: "#F4991A", r: 5 },
                    activeDot: { r: 7 },
                  }),
                  (0, n.jsx)(H.N, {
                    type: "monotone",
                    dataKey: "university",
                    stroke: "#344F1F",
                    strokeWidth: 3,
                    name: "University",
                    dot: { fill: "#344F1F", r: 5 },
                    activeDot: { r: 7 },
                  }),
                ],
              }),
            }),
          ],
        });
      }
      var O = a(2880),
        z = a(48860),
        V = a(79415);
      function J(e) {
        let { ausbildungData: i, universityData: a } = e,
          r = [
            {
              category: "Total Costs",
              ausbildung: -i.totalCost,
              university: -a.totalCost,
            },
            {
              category: "Total Income",
              ausbildung: i.totalIncome,
              university: a.totalIncome,
            },
            {
              category: "Net Position",
              ausbildung: i.netPosition,
              university: a.netPosition,
            },
          ];
        return (0, n.jsxs)("div", {
          className:
            "w-full h-[350px] bg-white rounded-xl p-4 border-2 border-gray-200",
          children: [
            (0, n.jsx)("h4", {
              className: "font-semibold text-gray-900 mb-4",
              children: "5-Year Financial Comparison",
            }),
            (0, n.jsx)(L.u, {
              width: "100%",
              height: "100%",
              children: (0, n.jsxs)(O.E, {
                data: r,
                children: [
                  (0, n.jsx)(E.d, {
                    strokeDasharray: "3 3",
                    stroke: "#E5E7EB",
                  }),
                  (0, n.jsx)(G.W, {
                    dataKey: "category",
                    stroke: "#6B7280",
                    style: { fontSize: "12px" },
                  }),
                  (0, n.jsx)(U.h, {
                    stroke: "#6B7280",
                    style: { fontSize: "12px" },
                    tickFormatter: (e) => "€".concat((e / 1e3).toFixed(0), "k"),
                  }),
                  (0, n.jsx)(D.m, {
                    formatter: (e) => "€".concat(Math.abs(e).toLocaleString()),
                    contentStyle: {
                      backgroundColor: "#FFFFFF",
                      border: "2px solid #E5E7EB",
                      borderRadius: "12px",
                      padding: "8px 12px",
                    },
                  }),
                  (0, n.jsx)(W.s, {
                    wrapperStyle: { fontSize: "12px" },
                    iconType: "rect",
                  }),
                  (0, n.jsx)(z.e, { y: 0, stroke: "#6B7280", strokeWidth: 2 }),
                  (0, n.jsx)(V.y, {
                    dataKey: "ausbildung",
                    fill: "#F4991A",
                    name: "Ausbildung",
                    radius: [8, 8, 0, 0],
                  }),
                  (0, n.jsx)(V.y, {
                    dataKey: "university",
                    fill: "#344F1F",
                    name: "University",
                    radius: [8, 8, 0, 0],
                  }),
                ],
              }),
            }),
          ],
        });
      }
      let K = {
          it: {
            name: "IT & Software Development",
            ausbildung: {
              title: "Fachinformatiker",
              specializations: [
                "Application Development",
                "System Integration",
                "Data & Process Analysis",
              ],
              duration: 36,
              stipend: { min: 900, max: 1200 },
              startingSalary: { min: 2800, max: 3200 },
              year5Salary: { min: 3800, max: 4500 },
              year10Salary: { min: 4800, max: 5500 },
              demand: 95,
              openings: 15e3,
            },
            university: {
              title: "Computer Science / Informatik",
              programs: [
                "Computer Science",
                "Software Engineering",
                "Data Science",
              ],
              duration: 36,
              startingSalary: { min: 3800, max: 4500 },
              year5Salary: { min: 5e3, max: 6500 },
              year10Salary: { min: 6500, max: 8500 },
              demand: 90,
              openings: 8e3,
            },
          },
          healthcare: {
            name: "Healthcare & Nursing",
            ausbildung: {
              title: "Pflegefachmann/-frau",
              specializations: [
                "General Nursing",
                "Pediatric Care",
                "Geriatric Care",
              ],
              duration: 36,
              stipend: { min: 1100, max: 1300 },
              startingSalary: { min: 2700, max: 3200 },
              year5Salary: { min: 3400, max: 4e3 },
              year10Salary: { min: 4200, max: 4800 },
              demand: 98,
              openings: 5e4,
            },
            university: {
              title: "Nursing Science / Bachelor of Nursing",
              programs: [
                "Nursing Science",
                "Healthcare Management",
                "Public Health",
              ],
              duration: 36,
              startingSalary: { min: 3200, max: 3800 },
              year5Salary: { min: 4e3, max: 5e3 },
              year10Salary: { min: 5e3, max: 6e3 },
              demand: 85,
              openings: 5e3,
            },
          },
          engineering: {
            name: "Engineering & Manufacturing",
            ausbildung: {
              title: "Mechatroniker / Industriemechaniker",
              specializations: [
                "Mechatronics",
                "Industrial Mechanics",
                "Automation",
              ],
              duration: 42,
              stipend: { min: 950, max: 1150 },
              startingSalary: { min: 2900, max: 3400 },
              year5Salary: { min: 3800, max: 4500 },
              year10Salary: { min: 4800, max: 5800 },
              demand: 92,
              openings: 25e3,
            },
            university: {
              title: "Engineering (Mechanical, Electrical, etc.)",
              programs: [
                "Mechanical Engineering",
                "Electrical Engineering",
                "Automotive Engineering",
              ],
              duration: 36,
              startingSalary: { min: 3800, max: 4500 },
              year5Salary: { min: 5200, max: 6500 },
              year10Salary: { min: 6800, max: 9e3 },
              demand: 88,
              openings: 12e3,
            },
          },
          business: {
            name: "Business & Administration",
            ausbildung: {
              title: "Kaufmann/-frau",
              specializations: [
                "Office Management",
                "Retail",
                "Logistics",
                "E-commerce",
              ],
              duration: 36,
              stipend: { min: 800, max: 1e3 },
              startingSalary: { min: 2500, max: 3e3 },
              year5Salary: { min: 3200, max: 3800 },
              year10Salary: { min: 4e3, max: 4800 },
              demand: 75,
              openings: 3e4,
            },
            university: {
              title: "Business Administration (BWL)",
              programs: [
                "Business Administration",
                "Management",
                "Finance",
                "Marketing",
              ],
              duration: 36,
              startingSalary: { min: 3500, max: 4200 },
              year5Salary: { min: 4800, max: 6200 },
              year10Salary: { min: 6500, max: 8500 },
              demand: 70,
              openings: 15e3,
            },
          },
        },
        _ = {
          blockedAccountAmount: 11904,
          totalMonthlyLivingCosts: { min: 950, average: 1250, max: 1550 },
          hiddenCosts: {
            visaApplication: 75,
            residencePermit: 100,
            anmeldung: 0,
            bankAccount: 0,
            semesterTicket: 200,
            healthInsuranceCopay: 10,
            books: { ausbildung: 50, university: 300 },
            languageCourse: 800,
          },
          partTimeWork: {
            maxHoursPerWeek: 20,
            hourlyWage: 12.5,
            maxDaysPerYear: 120,
            estimatedMonthlyIncome: 500,
          },
        },
        Q = {
          ausbildung: {
            languagePrepB1: { min: 6, max: 12, average: 9 },
            applicationProcess: { min: 1, max: 3, average: 2 },
            visaProcessing: { min: 6, max: 12, average: 8 },
            programDuration: { min: 24, max: 42, average: 36 },
            timeToEmployment: 0,
            totalTimeline: { min: 31, max: 57, average: 47 },
          },
          university: {
            languagePrepB2: { min: 12, max: 18, average: 15 },
            applicationProcess: { min: 2, max: 4, average: 3 },
            visaProcessing: { min: 8, max: 14, average: 11 },
            programDuration: { bachelor: 36, master: 24, total: 36 },
            jobSearch: { min: 3, max: 6, average: 4 },
            totalTimeline: { min: 53, max: 78, average: 64 },
          },
        },
        Z = {
          ausbildung: {
            visaType: "\xa717 AufenthG - Training Visa",
            requirements: [
              "Signed training contract (Ausbildungsvertrag)",
              "Vocational school confirmation",
              "German B1 certificate",
              "Financial proof (€11,904 or stipend letter)",
              "Health insurance",
              "Clean criminal record",
            ],
            approvalRate: 78,
            processingWeeks: { min: 6, max: 12, average: 8 },
            workRights: "Full work rights within training scope",
            prPathway:
              "Work 5 years (including training) → PR or Blue Card route",
            prTimelineMonths: { viaWork: 60, viaBlueCard: 27 },
          },
          university: {
            visaType: "\xa716b AufenthG - Student Visa",
            requirements: [
              "University admission letter (Zulassungsbescheid)",
              "German B2-C1 certificate (or English proficiency)",
              "Blocked account (€11,904)",
              "Health insurance",
              "Clean criminal record",
            ],
            approvalRate: 87,
            processingWeeks: { min: 8, max: 14, average: 10 },
            workRights: "Limited: 120 full days or 240 half days per year",
            prPathway:
              "18-month job search visa → Work → Blue Card or general PR",
            prTimelineMonths: { viaBlueCard: 27, viaWork: 60 },
          },
        },
        $ = {
          ausbildung: {
            weeklyHours: { min: 35, max: 40, average: 38 },
            workingDays: 5,
            vacationDays: { min: 25, max: 30, average: 28 },
            stressLevel: 55,
            workLifeBalance: 75,
            flexibility: 40,
            socialLife: 65,
            culturalIntegration: 85,
            mentalHealthSupport: "Company support + IHK oversight",
            schedule: "Fixed: Mon-Fri, weekends free",
          },
          university: {
            weeklyHours: { min: 30, max: 45, average: 35 },
            workingDays: 5,
            vacationDays: 120,
            stressLevel: 60,
            workLifeBalance: 65,
            flexibility: 85,
            socialLife: 80,
            culturalIntegration: 60,
            mentalHealthSupport: "Student counseling services",
            schedule: "Flexible: varies by semester, long breaks",
          },
        },
        X = {
          ausbildung: {
            practicalPercent: 75,
            theoreticalPercent: 25,
            approach: "Hands-on learning in real workplace",
            skillsType: "Industry-specific technical + workplace soft skills",
            industryConnections:
              "Direct employer relationship + company network",
            portfolio: "Real project work over 2-3 years",
            internationalRecognition: "Strong in DACH, limited globally",
            continuingEducation: [
              "Meister",
              "Techniker",
              "University with qualification",
            ],
          },
          university: {
            practicalPercent: 20,
            theoreticalPercent: 80,
            approach: "Academic lectures, seminars, research",
            skillsType: "Theoretical foundations + research methodology",
            industryConnections:
              "Career fairs, alumni network, optional internships",
            portfolio: "Academic projects, thesis, maybe 1 internship",
            internationalRecognition: "Global (Bologna Process)",
            continuingEducation: [
              "Master",
              "PhD",
              "Professional certifications",
            ],
          },
        };
      function ee(e, i) {
        if ("ausbildung" === e) {
          let e = 90;
          return (
            i.priorities.cost >= 8 && (e = 95),
            i.needIncome && (e = 98),
            e
          );
        }
        {
          let e = 40;
          return (
            "30k+" === i.availableFunds && (e = 60),
            "full" === i.familySupport && (e += 10),
            i.scholarshipEligible && (e += 10),
            Math.min(100, e)
          );
        }
      }
      function ei(e, i) {
        if ("ausbildung" === e) {
          let e = 90;
          return (
            i.priorities.time >= 8 && (e = 95),
            "1-2-years" === i.preferredTimelineToEmployment && (e = 98),
            e
          );
        }
        {
          let e = 55;
          return (
            "5-plus-years" === i.preferredTimelineToEmployment && (e = 75),
            e
          );
        }
      }
      let ea = [
          {
            question:
              "What is the fundamental difference between Ausbildung and University in Germany?",
            answer:
              "Ausbildung (vocational training) is a dual system combining practical work at a company (70-80% of time) with theoretical classes at a vocational school (20-30% of time). You learn a specific profession through hands-on experience and earn a monthly stipend (€800-1,200) while training. University is academic education focusing on theoretical knowledge, research, and broad subject mastery. You attend lectures and seminars, complete a thesis, but earn no income during studies. Ausbildung takes 2-3 years and leads directly to employment, while University takes 3-6 years (Bachelor + Master) with job search required afterward. Ausbildung requires German B1 level; University typically requires B2-C1. Both pathways can lead to successful careers and permanent residency in Germany, but they suit different learning styles and career goals.",
          },
          {
            question:
              "Which pathway is financially better for international students?",
            answer:
              "Ausbildung is significantly better financially. During a 2-3 year Ausbildung, you EARN approximately €28,800-43,200 total (€1,000-1,200/month stipend \xd7 24-36 months) while gaining work experience. Your living costs are 60-80% covered by the stipend, requiring minimal external support. In contrast, University costs approximately €36,000-45,000 for a 3-year Bachelor (€12,000-15,000 per year in living expenses, plus blocked account requirements of €11,904/year). You have no income unless working part-time (limited to 120 full days/year). The financial difference is stark: Ausbildung = -€30,000 (you gain money), University = +€40,000 (you spend money). After completing Ausbildung, you start earning €2,800-3,200/month immediately, reaching ROI instantly. University graduates earn €3,500-4,500 initially but take 4-5 years post-graduation to break even on their investment.",
          },
          {
            question:
              "Can I earn money during Ausbildung but not during University?",
            answer:
              "Yes. Ausbildung trainees receive a guaranteed monthly stipend (Ausbildungsverg\xfctung) ranging from €800-1,200 depending on the sector and training year. This is a legal employment contract, and the stipend increases each year of training. For example, Year 1 might be €900, Year 2: €1,000, Year 3: €1,100. You are a salaried employee with benefits including health insurance contribution, vacation days (25-30 days/year), and social security coverage. University students can only work part-time with restrictions: maximum 120 full days or 240 half days per year at minimum wage (€12.50/hour in 2026). This typically yields €400-800/month if you work the maximum allowed hours. However, this work is separate from your studies, not integrated like Ausbildung. Most students struggle to find part-time work due to limited German skills and time constraints, making the blocked account their primary funding source.",
          },
          {
            question:
              "Which is faster to employment: Ausbildung or University?",
            answer:
              "Ausbildung is significantly faster. Total timeline from decision to stable employment: Ausbildung = 3-4 years (6-12 months language prep + 2-3 months visa + 2-3 years training = immediate job). University = 5-7.5 years (6-12 months language prep + 3-4 months visa + 3-6 years study + 3-6 months job search = employment). Key difference: Ausbildung trainees have a job FROM DAY ONE of training. 75-80% of trainees are hired permanently by their training company immediately after completing Ausbildung. For those who aren't, German employers highly value Ausbildung qualifications, making job search quick (1-2 months average). University graduates must search for jobs after graduation, competing with other graduates. In high-demand fields like IT or Healthcare, Ausbildung graduates often start earning 2-3 years before their University counterparts, accumulating €70,000-100,000 in earnings and work experience while University students are still studying.",
          },
          {
            question:
              "What are the language requirements and how strict are they?",
            answer:
              "Ausbildung requires German B1 level (CEFR) for visa approval. This is intermediate conversational German: you can handle everyday workplace situations, understand instructions, and communicate with colleagues. Most students achieve B1 in 6-12 months of intensive study (4-6 hours/week). Some companies may prefer B2, but B1 is the official visa requirement. University requires German B2-C1 depending on the program and institution. B2 is upper-intermediate; C1 is advanced academic German. This typically takes 12-18 months of intensive study for most learners. Technical programs (Engineering, IT) may accept English-taught programs with no German requirement, but you'll still need A2-B1 for daily life. Strictness: Both pathways verify language through TestDaF, Goethe-Zertifikat, or telc exams. Consulates check certificates carefully during visa interviews. Without the required level, your visa will be rejected. Important: B1 to B2 is a significant jump requiring 200-300 additional study hours. If time is limited, Ausbildung's B1 requirement is more achievable.",
          },
          {
            question:
              "Which pathway offers better permanent residency (PR) chances?",
            answer:
              "Both pathways offer excellent PR opportunities with nearly identical timelines if you meet salary thresholds. The FASTEST route is via EU Blue Card: Earn €45,300+ annually (2026 threshold) and apply for Blue Card → 21 months with B1 German OR 33 months with A1 German → Permanent Residency. Both Ausbildung and University graduates can access this if their job salary meets the threshold. Ausbildung graduates in high-demand fields (IT, Healthcare, Engineering) typically earn €2,800-3,400/month (€33,600-40,800/year) initially, reaching Blue Card threshold within 1-2 years of promotions. University graduates often start above the threshold (€3,800+/month = €45,600/year). Alternative PR route: General Residence Permit → Work for 5 years → PR. Ausbildung has an advantage here: your training years COUNT toward the 5-year requirement, meaning you can apply for PR just 2-3 years after completing your 2-3 year Ausbildung (total 5 years in Germany). University students must complete 3-6 years of study first, then work 5 additional years. Important: Both pathways lead to citizenship eligibility after 6-8 years total residence (after receiving PR).",
          },
          {
            question:
              "Can I switch from Ausbildung to University or vice versa later?",
            answer:
              'Yes, both directions are possible, and Germany actively supports such transitions. Ausbildung → University: After completing Ausbildung and gaining work experience, you can apply to universities. Your Ausbildung qualification may grant you direct university admission rights (Hochschulzugangsberechtigung) depending on your state and field. Many students do a "dual pathway": complete Ausbildung (earn €30,000 while training), work 2-3 years (earn €80,000-100,000), then use savings to fund University studies debt-free. This is increasingly popular among smart planners. Some credits may transfer, shortening your degree. University → Ausbildung: If university studies are too theoretical, financially burdensome, or you struggle to find employment, you can enter an Ausbildung program. Universities respect this decision, and many employers value the combination of theoretical education plus practical training. You may complete Ausbildung faster (1.5-2 years instead of 3) due to prior knowledge. Best hybrid option: "Duales Studium" (dual study program) which combines University Bachelor degree with Ausbildung-style company training over 3-3.5 years, with monthly stipend (€1,000-1,600). This gives you both qualifications simultaneously, but admission is very competitive.',
          },
          {
            question:
              "Which has better long-term career prospects and salary growth?",
            answer:
              "It depends on your field and career ceiling goals. 10-year salary comparison: Ausbildung: Start €2,800 → Year 5: €3,800 → Year 10: €4,800-5,500/month. Growth is steady but may plateau without additional qualifications (Meister, Techniker, or Bachelor). University: Start €3,500-4,500 → Year 5: €5,000-6,500 → Year 10: €6,500-8,000+/month. University graduates typically reach higher salary ceilings faster and have easier access to senior management and C-suite positions. However, Ausbildung graduates who pursue additional qualifications (Meister certification costs €5,000-8,000, 1-2 years) can reach equivalent or higher positions. Meister qualification = Bachelor-equivalent in Germany and allows you to open your own business, train apprentices, and command high respect. Career flexibility: University degrees offer broader career pivoting (easier to switch industries). Ausbildung is more specialized but guarantees employability in that specific field. Job security: Ausbildung graduates have superior job security during recessions due to the dual system's government backing and employer loyalty. In fields like Healthcare, IT (Fachinformatiker), and Engineering (Mechatroniker), Ausbildung can lead to €60,000-70,000+ annual salaries by year 10-15, rivaling university paths without the debt burden.",
          },
          {
            question:
              "Do employers in Germany value Ausbildung or University degrees more?",
            answer:
              'Germany uniquely values BOTH equally, but in different contexts. This is not like other countries where university is universally preferred. German culture deeply respects Ausbildung: 50% of German youth choose Ausbildung over university, including children of doctors, lawyers, and professors. Ausbildung is NOT considered "lower class" – it is a professional qualification with high social standing. Employer preferences by sector: (1) Skilled Trades (Construction, Automotive, Manufacturing): Ausbildung STRONGLY preferred. Employers trust the hands-on training over theoretical degrees. (2) IT & Tech: BOTH valued equally. A Fachinformatiker Ausbildung is as respected as a Computer Science degree. Employers often prefer Ausbildung graduates for practical roles due to immediate productivity. (3) Healthcare: Nursing Ausbildung is the standard pathway; University (Bachelor of Nursing) is newer and primarily for leadership roles. (4) Engineering: University degrees preferred for R&D, design, and management roles. Ausbildung (Mechatroniker, Industriemechaniker) preferred for technical, hands-on positions. (5) Business: University preferred for management consulting, finance; Ausbildung (Kaufmann/-frau) preferred for operations, administration. Key insight: German employers hire for COMPETENCE demonstrated through qualifications and experience, not prestige. Ausbildung graduates with 5 years experience often outcompete fresh university graduates with no work history.',
          },
          {
            question:
              "What is the visa process difference between Ausbildung and University?",
            answer:
              "Both pathways require German student/training visas, but requirements differ slightly. Ausbildung Visa (\xa717 AufenthG Residence Permit): Requirements: (1) Signed training contract (Ausbildungsvertrag) from a German company + training school confirmation, (2) German B1 certificate (TestDaF, Goethe, telc), (3) Financial proof (blocked account €11,904 OR company stipend letter showing €850+/month), (4) Health insurance, (5) Clean criminal record. Approval rate: ~75-80% for complete applications. Processing time: 6-12 weeks at German consulate. Visa valid for duration of Ausbildung (2-3 years), renewable. University Visa (\xa716b AufenthG Residence Permit): Requirements: (1) University admission letter (Zulassungsbescheid), (2) German B2-C1 certificate (or English for English-taught programs + A2 German for daily life), (3) Blocked account (Sperrkonto) with €11,904 deposited for first year, (4) Health insurance, (5) Clean criminal record. Approval rate: ~85-90% (slightly higher due to standardized process). Processing time: 8-14 weeks. Visa valid for duration of study, renewable annually. Key differences: Ausbildung may not always require blocked account if stipend is sufficient (consulate discretion). University ALWAYS requires blocked account. Both allow part-time work (Ausbildung: within training scope; University: 120 full days/year).",
          },
          {
            question:
              "Which option is better for specific fields like IT, Healthcare, Engineering, or Business?",
            answer:
              "Field-specific recommendations: **IT & Software Development**: BOTH excellent, slight edge to Ausbildung. Fachinformatiker Ausbildung (specializations: Application Development, System Integration, Data/Process Analysis) provides immediate coding skills, job security, and €900-1,200/month stipend during 3 years. Starting salary: €2,800-3,200/month. University Computer Science offers deeper algorithms, theory, research skills. Starting salary: €3,800-4,500/month. German IT employers value Ausbildung highly – you can reach senior developer roles with Ausbildung + experience. Recommendation: Ausbildung if you want immediate income and hands-on skills; University if you want research, AI/ML specialization, or international mobility. **Healthcare & Nursing**: Ausbildung STRONGLY recommended. Nursing Ausbildung (Pflegefachmann/-frau) is the standard pathway in Germany with €1,100-1,300/month stipend, 3 years training, starting salary €2,700-3,200/month. Guaranteed employment (severe shortage, 50,000+ open positions). University nursing is newer, primarily for management/research roles, requires German B2, offers no stipend. Recommendation: Ausbildung for clinical nursing; University only if aiming for hospital administration or academic roles. **Engineering**: University preferred for design, R&D, and management; Ausbildung for technical/hands-on roles. Mechatroniker or Industriemechaniker Ausbildung provides excellent practical engineering skills, €950-1,150/month stipend, starting salary €2,900-3,400/month. University engineering (Mechanical, Electrical, Civil) offers theoretical depth, starting salary €3,800-4,500/month, access to senior engineering and management roles. Recommendation: University for design engineering; Ausbildung for manufacturing, maintenance, technical roles. **Business & Administration**: University preferred for management consulting, finance, strategy roles. Kaufmann/-frau Ausbildung (various specializations: Office Management, Retail, Logistics) provides operational business skills, €800-1,000/month stipend, starting salary €2,500-3,000/month. University Business/BWL offers broader career options, starting salary €3,500-4,200/month. Recommendation: University for corporate careers; Ausbildung for SME operations, administration.",
          },
          {
            question:
              "What if I want to return to my home country eventually? Which pathway is better recognized internationally?",
            answer:
              "University degrees have superior international recognition and portability. Bachelor's and Master's degrees from German universities are recognized globally through the Bologna Process (47 countries) and are understood worldwide. This makes career transitions to other countries relatively straightforward, especially in fields like Engineering, IT, Business, and Sciences. Your degree title (e.g., \"Master of Science in Computer Science, Technical University of Munich\") is universally understood. Ausbildung (IHK vocational certificates) has LIMITED international recognition outside German-speaking countries (Germany, Austria, Switzerland, parts of Belgium/Luxembourg). The term \"Ausbildung\" doesn't translate easily, and foreign employers often don't understand the dual system's value. However, within the EU, there are frameworks for recognizing vocational qualifications, though the process can be bureaucratic. Practical solutions if you want flexibility: (1) Complete Ausbildung → work 2-3 years → then pursue University degree (you'll have German work experience + international degree); (2) After Ausbildung, obtain additional international certifications (e.g., AWS certifications for IT, Project Management Professional, etc.) to supplement your IHK certificate; (3) Focus on Ausbildung in globally-recognized fields (Healthcare, IT) where practical skills matter more than degree titles. Important consideration: Many international students who complete Ausbildung find Germany's quality of life, salary, and work-life balance so superior that they choose to stay permanently rather than return home. The permanent residency pathway is equally accessible from both Ausbildung and University, and German citizenship allows you to live anywhere in the EU (27 countries), greatly expanding your options.",
          },
        ],
        en = {
          title: "How to Use the Comparison Tool",
          description:
            "Compare Ausbildung and university pathways based on your profile, priorities, and career goals. Get a personalized recommendation.",
          steps: [
            {
              title: "Complete Your Profile",
              description:
                "Enter your age, education level, and field of interest to help us understand your background and aspirations.",
              icon: s.A,
            },
            {
              title: "Set Your Priorities",
              description:
                "Tell us what matters most to you - career goals, financial situation, German language level, and work-life balance preferences.",
              icon: t.A,
            },
            {
              title: "Get Recommendation",
              description:
                "Receive a detailed comparison with personalized recommendation, financial analysis, timeline breakdown, and career prospects for both pathways.",
              icon: l.A,
            },
          ],
          inputs: [
            {
              label: "Age",
              description:
                "Your current age (affects timeline and opportunities)",
              icon: o.A,
            },
            {
              label: "Education Level",
              description: "Highest completed education qualification",
              icon: s.A,
            },
            {
              label: "Field of Interest",
              description: "Your preferred career sector or field",
              icon: c.A,
            },
            {
              label: "Career Goal",
              description: "Immediate employment vs long-term research",
              icon: t.A,
            },
            {
              label: "Available Funds",
              description: "Financial resources for education and living costs",
              icon: d.A,
            },
            {
              label: "German Level",
              description: "Current German language proficiency (A1-C2)",
              icon: u.A,
            },
            {
              label: "Work-Life Balance Priority",
              description: "How important is work-life balance to you",
              icon: m.A,
            },
          ],
          outputs: [
            {
              label: "Recommendation",
              description:
                "Personalized pathway recommendation (Ausbildung, University, or Hybrid)",
              icon: l.A,
            },
            {
              label: "Confidence Score",
              description:
                "How confident we are in the recommendation (0-100%)",
              icon: g.A,
            },
            {
              label: "Financial Comparison",
              description:
                "Complete cost breakdown, ROI timeline, and 5-year net worth projection",
              icon: d.A,
            },
            {
              label: "Time Comparison",
              description:
                "Duration breakdown for each pathway and age impact analysis",
              icon: m.A,
            },
            {
              label: "Career Analysis",
              description:
                "Salary ranges, growth projections, and job market demand comparison",
              icon: h.A,
            },
          ],
          additionalInfo:
            "Recommendations are based on your unique profile, German education system requirements, and 2026 labor market projections.",
        };
      function er() {
        var e, i, a;
        let [t, l] = (0, r.useState)(null),
          [o, d] = (0, r.useState)(!1),
          [u, g] = (0, r.useState)(null),
          [A, S] = (0, r.useState)(!1),
          P = async (e) => {
            d(!0);
            try {
              let i = (function (e) {
                  var i, a;
                  let n =
                    K[
                      (function (e) {
                        let i = e.toLowerCase();
                        return i.includes("it") ||
                          i.includes("software") ||
                          i.includes("computer")
                          ? "it"
                          : i.includes("health") ||
                              i.includes("nurs") ||
                              i.includes("medical")
                            ? "healthcare"
                            : i.includes("engineer") ||
                                i.includes("mechanic") ||
                                i.includes("manufacturing")
                              ? "engineering"
                              : i.includes("business") ||
                                  i.includes("admin") ||
                                  i.includes("management")
                                ? "business"
                                : "it";
                      })(e.fieldOfInterest)
                    ] || K.it;
                  return {
                    ausbildung: (function (e, i) {
                      let a =
                          (i.ausbildung.stipend.min +
                            i.ausbildung.stipend.max) /
                          2,
                        n = i.ausbildung.duration,
                        r = _.totalMonthlyLivingCosts.average,
                        s = [],
                        t = Math.ceil(n / 12);
                      for (let e = 1; e <= t; e++) {
                        let i = a + (e - 1) * 100;
                        s.push({
                          year: e,
                          income: 12 * i,
                          expenses: 12 * r,
                          netCashFlow: (i - r) * 12,
                        });
                      }
                      let l = s.reduce((e, i) => e + i.income, 0);
                      return {
                        name: "ausbildung",
                        totalCost: s.reduce((e, i) => e + i.expenses, 0) - l,
                        monthlyIncome: a,
                        monthlyExpenses: r,
                        yearlyBreakdown: s,
                        hiddenCosts: [
                          {
                            category: "Visa application",
                            amount: _.hiddenCosts.visaApplication,
                            frequency: "one-time",
                          },
                          {
                            category: "Language course (pre-arrival)",
                            amount: _.hiddenCosts.languageCourse,
                            frequency: "one-time",
                          },
                          {
                            category: "Books & materials",
                            amount: _.hiddenCosts.books.ausbildung,
                            frequency: "yearly",
                          },
                        ],
                        fundingOpportunities: [
                          "Monthly stipend (€" + a + ")",
                          "Company-provided health insurance contribution",
                          "Some companies offer housing assistance",
                        ],
                        durationMonths: n,
                        applicationTimeline:
                          Q.ausbildung.applicationProcess.average,
                        visaProcessing: 4 * Q.ausbildung.visaProcessing.average,
                        timeToFirstSalary: 1,
                        timeToEmployment: n,
                        milestones: [
                          {
                            name: "Start German B1 preparation",
                            month: 0,
                            description: "Begin intensive language study",
                          },
                          {
                            name: "Apply for training positions",
                            month: Q.ausbildung.languagePrepB1.average - 3,
                            description:
                              "Submit applications to 10-15 companies",
                          },
                          {
                            name: "Secure training contract",
                            month: Q.ausbildung.languagePrepB1.average,
                            description: "Sign Ausbildungsvertrag",
                          },
                          {
                            name: "Apply for visa",
                            month: Q.ausbildung.languagePrepB1.average + 1,
                            description:
                              "Submit visa application with all documents",
                          },
                          {
                            name: "Start Ausbildung",
                            month: Q.ausbildung.languagePrepB1.average + 3,
                            description: "Begin training and earning stipend",
                          },
                          {
                            name: "Complete Ausbildung",
                            month: Q.ausbildung.languagePrepB1.average + 3 + n,
                            description:
                              "Receive IHK certificate and job offer",
                          },
                        ],
                        startingSalary: i.ausbildung.startingSalary,
                        salaryProgression: [
                          {
                            year: 0,
                            salary:
                              (i.ausbildung.startingSalary.min +
                                i.ausbildung.startingSalary.max) /
                              2,
                          },
                          {
                            year: 3,
                            salary: i.ausbildung.startingSalary.max + 500,
                          },
                          {
                            year: 5,
                            salary:
                              (i.ausbildung.year5Salary.min +
                                i.ausbildung.year5Salary.max) /
                              2,
                          },
                          {
                            year: 10,
                            salary:
                              (i.ausbildung.year10Salary.min +
                                i.ausbildung.year10Salary.max) /
                              2,
                          },
                        ],
                        jobSecurityScore: 85,
                        careerAdvancementScore: 70,
                        careerCeiling:
                          "Middle management without additional qualifications (Meister/University)",
                        leadershipOpportunities:
                          "Team lead, department supervisor; C-suite requires additional education",
                        visaType: Z.ausbildung.visaType,
                        visaApprovalRate: Z.ausbildung.approvalRate,
                        workRightsDuring: Z.ausbildung.workRights,
                        workRightsAfter:
                          "1-year job search visa or direct employment",
                        prPathway: Z.ausbildung.prPathway,
                        prTimeline:
                          "5 years total residence (training + work) or Blue Card route (27 months)",
                        citizenshipEligibility: "6-8 years after PR",
                        workLifeBalanceScore: $.ausbildung.workLifeBalance,
                        weeklyHours: $.ausbildung.weeklyHours.average,
                        stressLevel: $.ausbildung.stressLevel,
                        socialOpportunities:
                          "Workplace colleagues, smaller peer group, local community integration",
                        flexibilityScore: $.ausbildung.flexibility,
                        vacationDays: $.ausbildung.vacationDays.average,
                        practicalTheoryRatio: "75% practical, 25% theory",
                        skillsAcquired: [
                          "Industry-specific technical skills",
                          "German workplace soft skills",
                          "Hands-on project experience",
                          "Professional communication",
                          "Team collaboration",
                        ],
                        industryConnections: X.ausbildung.industryConnections,
                        continuingEducation: X.ausbildung.continuingEducation,
                        internationalRecognition:
                          X.ausbildung.internationalRecognition,
                        languageRequirement: "German B1 (CEFR)",
                        academicPrerequisites: [
                          "Secondary school certificate",
                          "Equivalent to German Realschulabschluss or Abitur",
                        ],
                        entryBarriers: [
                          "Competition for quality positions",
                          "Age bias for older applicants (28+)",
                        ],
                        documentRequirements: Z.ausbildung.requirements,
                      };
                    })(0, n),
                    university: (function (e, i) {
                      let a = i.university.duration,
                        n = _.totalMonthlyLivingCosts.average,
                        r = _.partTimeWork.estimatedMonthlyIncome,
                        s = [],
                        t = Math.ceil(a / 12);
                      for (let e = 1; e <= t; e++)
                        s.push({
                          year: e,
                          income: 12 * r,
                          expenses: 12 * n,
                          netCashFlow: (r - n) * 12,
                        });
                      let l = s.reduce((e, i) => e + i.income, 0);
                      return {
                        name: "university",
                        totalCost: s.reduce((e, i) => e + i.expenses, 0) - l,
                        monthlyIncome: r,
                        monthlyExpenses: n,
                        yearlyBreakdown: s,
                        hiddenCosts: [
                          {
                            category: "Blocked account (per year)",
                            amount: _.blockedAccountAmount,
                            frequency: "yearly",
                          },
                          {
                            category: "Semester ticket",
                            amount: _.hiddenCosts.semesterTicket,
                            frequency: "yearly",
                          },
                          {
                            category: "Books & materials",
                            amount: _.hiddenCosts.books.university,
                            frequency: "yearly",
                          },
                          {
                            category: "Language course (pre-arrival)",
                            amount: _.hiddenCosts.languageCourse,
                            frequency: "one-time",
                          },
                        ],
                        fundingOpportunities: [
                          "DAAD scholarships (competitive)",
                          "Part-time work (€500/month realistic)",
                          "Erasmus+ exchange funding",
                          "University-specific scholarships",
                        ],
                        durationMonths: a,
                        applicationTimeline:
                          Q.university.applicationProcess.average,
                        visaProcessing: 4 * Q.university.visaProcessing.average,
                        timeToFirstSalary: a + Q.university.jobSearch.average,
                        timeToEmployment: a + Q.university.jobSearch.average,
                        milestones: [
                          {
                            name: "Start German B2 preparation",
                            month: 0,
                            description: "Begin intensive language study",
                          },
                          {
                            name: "Apply to universities",
                            month: Q.university.languagePrepB2.average - 6,
                            description: "Submit Uni-Assist applications",
                          },
                          {
                            name: "Receive admission",
                            month: Q.university.languagePrepB2.average - 3,
                            description: "Get Zulassungsbescheid",
                          },
                          {
                            name: "Open blocked account",
                            month: Q.university.languagePrepB2.average - 2,
                            description: "Deposit €11,904",
                          },
                          {
                            name: "Apply for visa",
                            month: Q.university.languagePrepB2.average,
                            description: "Submit student visa application",
                          },
                          {
                            name: "Start university",
                            month: Q.university.languagePrepB2.average + 3,
                            description: "Begin semester",
                          },
                          {
                            name: "Graduate",
                            month: Q.university.languagePrepB2.average + 3 + a,
                            description: "Receive Bachelor degree",
                          },
                          {
                            name: "Secure employment",
                            month:
                              Q.university.languagePrepB2.average + 3 + a + 4,
                            description: "Start first job",
                          },
                        ],
                        startingSalary: i.university.startingSalary,
                        salaryProgression: [
                          {
                            year: 0,
                            salary:
                              (i.university.startingSalary.min +
                                i.university.startingSalary.max) /
                              2,
                          },
                          {
                            year: 3,
                            salary: i.university.startingSalary.max + 600,
                          },
                          {
                            year: 5,
                            salary:
                              (i.university.year5Salary.min +
                                i.university.year5Salary.max) /
                              2,
                          },
                          {
                            year: 10,
                            salary:
                              (i.university.year10Salary.min +
                                i.university.year10Salary.max) /
                              2,
                          },
                        ],
                        jobSecurityScore: 75,
                        careerAdvancementScore: 85,
                        careerCeiling:
                          "Senior management, C-suite accessible with experience",
                        leadershipOpportunities:
                          "Team lead, project manager, department head, executive roles",
                        visaType: Z.university.visaType,
                        visaApprovalRate: Z.university.approvalRate,
                        workRightsDuring: Z.university.workRights,
                        workRightsAfter: "18-month job search visa",
                        prPathway: Z.university.prPathway,
                        prTimeline:
                          "Work 5 years after graduation OR Blue Card route (27 months)",
                        citizenshipEligibility: "6-8 years after PR",
                        workLifeBalanceScore: $.university.workLifeBalance,
                        weeklyHours: $.university.weeklyHours.average,
                        stressLevel: $.university.stressLevel,
                        socialOpportunities:
                          "Large student community, international network, diverse events",
                        flexibilityScore: $.university.flexibility,
                        vacationDays: 120,
                        practicalTheoryRatio: "20% practical, 80% theory",
                        skillsAcquired: [
                          "Theoretical foundations",
                          "Research methodology",
                          "Academic writing",
                          "Critical thinking",
                          "Interdisciplinary analysis",
                        ],
                        industryConnections: X.university.industryConnections,
                        continuingEducation: X.university.continuingEducation,
                        internationalRecognition:
                          X.university.internationalRecognition,
                        languageRequirement:
                          "German B2-C1 (CEFR) or English proficiency for English programs",
                        academicPrerequisites: [
                          "High school diploma equivalent to German Abitur",
                          "Uni-Assist evaluation (for international qualifications)",
                        ],
                        entryBarriers: [
                          "Higher language requirement",
                          "Competitive admission for popular programs",
                        ],
                        documentRequirements: Z.university.requirements,
                      };
                    })(0, n),
                    financial: (function (e, i) {
                      let a =
                          (i.ausbildung.stipend.min +
                            i.ausbildung.stipend.max) /
                          2,
                        n = _.totalMonthlyLivingCosts.average,
                        r = i.ausbildung.duration,
                        s = i.university.duration,
                        t = a * r,
                        l = _.partTimeWork.estimatedMonthlyIncome,
                        o = l * s,
                        c = n * s - o,
                        d =
                          (i.ausbildung.startingSalary.min +
                            i.ausbildung.startingSalary.max) /
                          2,
                        u =
                          (i.university.startingSalary.min +
                            i.university.startingSalary.max) /
                          2,
                        m = t + 12 * d * 2 - 60 * n,
                        g = o + 12 * u * 2 - 60 * n;
                      return {
                        ausbildung: {
                          totalInvestment: t - n * r,
                          stipendMonthly: a,
                          livingCosts: n,
                          coveredPercentage: Math.round((a / n) * 100),
                          roiTimeline: "Immediate (you earn from day 1)",
                          fiveYearNetWorth: Math.round(m),
                          tenYearNetWorth: Math.round(m + 12 * d * 5 - 60 * n),
                        },
                        university: {
                          totalInvestment: c,
                          livingCosts: n,
                          blockedAccount: _.blockedAccountAmount,
                          partTimeIncome: l,
                          roiTimeline: "4-5 years post-graduation",
                          fiveYearNetWorth: Math.round(g),
                          tenYearNetWorth: Math.round(g + 12 * u * 5 - 60 * n),
                        },
                        breakEvenAnalysis: {
                          ausbildungBreakEven: 0,
                          universityBreakEven: Math.ceil((c / u) * 12),
                        },
                      };
                    })(0, n),
                    timeline: (function (e) {
                      let i = e.age;
                      return {
                        ausbildung: {
                          phases: [
                            {
                              name: "German B1 Preparation",
                              durationMonths:
                                Q.ausbildung.languagePrepB1.average,
                              startMonth: 0,
                              endMonth: Q.ausbildung.languagePrepB1.average,
                              ageAtCompletion: i,
                            },
                            {
                              name: "Application & Visa",
                              durationMonths:
                                Q.ausbildung.applicationProcess.average + 2,
                              startMonth: Q.ausbildung.languagePrepB1.average,
                              endMonth: Q.ausbildung.languagePrepB1.average + 5,
                              ageAtCompletion: i + 1,
                            },
                            {
                              name: "Ausbildung Training",
                              durationMonths: 36,
                              startMonth:
                                Q.ausbildung.languagePrepB1.average + 5,
                              endMonth:
                                Q.ausbildung.languagePrepB1.average + 5 + 36,
                              ageAtCompletion: i + 4,
                            },
                          ],
                          totalDuration: Q.ausbildung.totalTimeline.average,
                          criticalPath: [
                            "Achieve B1 German",
                            "Secure training contract",
                            "Obtain visa",
                            "Complete Ausbildung",
                          ],
                        },
                        university: {
                          phases: [
                            {
                              name: "German B2 Preparation",
                              durationMonths:
                                Q.university.languagePrepB2.average,
                              startMonth: 0,
                              endMonth: Q.university.languagePrepB2.average,
                              ageAtCompletion: i + 1,
                            },
                            {
                              name: "Application & Visa",
                              durationMonths:
                                Q.university.applicationProcess.average + 3,
                              startMonth: Q.university.languagePrepB2.average,
                              endMonth: Q.university.languagePrepB2.average + 6,
                              ageAtCompletion: i + 2,
                            },
                            {
                              name: "Bachelor Studies",
                              durationMonths: 36,
                              startMonth:
                                Q.university.languagePrepB2.average + 6,
                              endMonth:
                                Q.university.languagePrepB2.average + 6 + 36,
                              ageAtCompletion: i + 5,
                            },
                            {
                              name: "Job Search",
                              durationMonths: Q.university.jobSearch.average,
                              startMonth:
                                Q.university.languagePrepB2.average + 6 + 36,
                              endMonth:
                                Q.university.languagePrepB2.average +
                                6 +
                                36 +
                                4,
                              ageAtCompletion: i + 5,
                            },
                          ],
                          totalDuration: Q.university.totalTimeline.average,
                          criticalPath: [
                            "Achieve B2 German",
                            "Get university admission",
                            "Secure blocked account",
                            "Complete degree",
                            "Find employment",
                          ],
                        },
                        comparison: {
                          timeDifference:
                            Q.university.totalTimeline.average -
                            Q.ausbildung.totalTimeline.average,
                          ageImpact: "Ausbildung: Employed by age "
                            .concat(i + 4, "; University: Employed by age ")
                            .concat(i + 5),
                          flexibilityToPivot: {
                            ausbildung:
                              "Can switch after year 1 (lose time invested); easier to add University later",
                            university:
                              "Can change major (adds 1-2 years); can add Ausbildung specialization later",
                          },
                        },
                      };
                    })(e),
                    career:
                      ((i = e),
                      (a = n),
                      {
                        field: i.fieldOfInterest,
                        ausbildung: {
                          positions: [
                            "".concat(a.ausbildung.title),
                            "Team Lead",
                            "Department Supervisor",
                            "Meister (with certification)",
                          ],
                          startingSalary: a.ausbildung.startingSalary,
                          year5Salary: a.ausbildung.year5Salary,
                          year10Salary: a.ausbildung.year10Salary,
                          jobMarketDemand: a.ausbildung.demand,
                          recessionResilience: 85,
                          internationalMobility: 50,
                        },
                        university: {
                          positions: [
                            "".concat(a.university.title),
                            "Senior Position",
                            "Project Manager",
                            "Department Head",
                            "Executive",
                          ],
                          startingSalary: a.university.startingSalary,
                          year5Salary: a.university.year5Salary,
                          year10Salary: a.university.year10Salary,
                          jobMarketDemand: a.university.demand,
                          recessionResilience: 70,
                          internationalMobility: 90,
                        },
                      }),
                    visa: {
                      ausbildung: {
                        visaType: Z.ausbildung.visaType,
                        requirements: Z.ausbildung.requirements,
                        approvalRate: Z.ausbildung.approvalRate,
                        processingWeeks: Z.ausbildung.processingWeeks.average,
                        workRights: Z.ausbildung.workRights,
                        prPathway: Z.ausbildung.prPathway,
                        prTimelineMonths: Z.ausbildung.prTimelineMonths.viaWork,
                      },
                      university: {
                        visaType: Z.university.visaType,
                        requirements: Z.university.requirements,
                        approvalRate: Z.university.approvalRate,
                        processingWeeks: Z.university.processingWeeks.average,
                        workRights: Z.university.workRights,
                        prPathway: Z.university.prPathway,
                        prTimelineMonths: Z.university.prTimelineMonths.viaWork,
                      },
                      familyReunion: {
                        ausbildung:
                          "Allowed after securing employment post-Ausbildung",
                        university:
                          "Allowed after securing employment post-graduation",
                      },
                    },
                    lifestyle: {
                      ausbildung: {
                        weeklyHours: $.ausbildung.weeklyHours.average,
                        stressLevel: $.ausbildung.stressLevel,
                        socialLife: $.ausbildung.socialLife,
                        workLifeBalance: $.ausbildung.workLifeBalance,
                        vacationDays: $.ausbildung.vacationDays.average,
                        flexibility: $.ausbildung.flexibility,
                        mentalHealthSupport: $.ausbildung.mentalHealthSupport,
                        culturalIntegration: $.ausbildung.culturalIntegration,
                      },
                      university: {
                        weeklyHours: $.university.weeklyHours.average,
                        stressLevel: $.university.stressLevel,
                        socialLife: $.university.socialLife,
                        workLifeBalance: $.university.workLifeBalance,
                        vacationDays: $.university.vacationDays,
                        flexibility: $.university.flexibility,
                        mentalHealthSupport: $.university.mentalHealthSupport,
                        culturalIntegration: $.university.culturalIntegration,
                      },
                    },
                    learning: {
                      ausbildung: {
                        learningApproach: X.ausbildung.approach,
                        practicalPercent: X.ausbildung.practicalPercent,
                        theoreticalPercent: X.ausbildung.theoreticalPercent,
                        skillsAcquired: [
                          "Technical skills",
                          "Workplace soft skills",
                          "Industry-specific knowledge",
                        ],
                        industryConnections: X.ausbildung.industryConnections,
                        continuingEducationOptions:
                          X.ausbildung.continuingEducation,
                        portfolioOpportunities: X.ausbildung.portfolio,
                      },
                      university: {
                        learningApproach: X.university.approach,
                        practicalPercent: X.university.practicalPercent,
                        theoreticalPercent: X.university.theoreticalPercent,
                        skillsAcquired: [
                          "Theoretical foundations",
                          "Research skills",
                          "Academic methodology",
                        ],
                        industryConnections: X.university.industryConnections,
                        continuingEducationOptions:
                          X.university.continuingEducation,
                        portfolioOpportunities: X.university.portfolio,
                      },
                      internationalRecognition: {
                        ausbildung: X.ausbildung.internationalRecognition,
                        university: X.university.internationalRecognition,
                      },
                    },
                  };
                })(e),
                a = (function (e) {
                  var i, a, n;
                  let r,
                    s,
                    t,
                    l,
                    o =
                      ((i = e),
                      (t =
                        50 +
                        0.25 *
                          (function (e, i) {
                            let a =
                                {
                                  none: 0,
                                  "a1-a2": 0.25,
                                  "b1-b2": 0.6,
                                  "c1-c2": 1,
                                }[e] || 0,
                              n = 0.6;
                            return a >= n
                              ? 1
                              : a >= n - 0.2
                                ? 0.7
                                : a >= n - 0.4
                                  ? 0.4
                                  : 0.2;
                          })(i.germanLevel, "b1") *
                          100),
                      !0 === i.needIncome
                        ? (t += 20)
                        : "partial" === i.needIncome && (t += 10),
                      ("0-5k" === i.availableFunds ||
                        "5k-15k" === i.availableFunds) &&
                        (t += 10),
                      "hands-on" === i.learningPreference
                        ? (t += 20)
                        : "mixed" === i.learningPreference && (t += 10),
                      i.priorities.time >= 8
                        ? (t += 15)
                        : i.priorities.time >= 6
                          ? (t += 10)
                          : i.priorities.time >= 4 && (t += 5),
                      i.age <= 25
                        ? (t += 10)
                        : i.age <= 28
                          ? (t += 7)
                          : i.age <= 32 && (t += 4),
                      i.priorities.stability >= 8
                        ? (t += 10)
                        : i.priorities.stability >= 6 && (t += 5),
                      i.previousWorkExperience >= 2 && (t += 5),
                      i.priorities.prestige >= 8 && (t -= 10),
                      ("research" === i.careerGoal ||
                        "academic-advancement" === i.careerGoal) &&
                        (t -= 15),
                      Math.max(0, Math.min(100, t))),
                    c =
                      ((a = e),
                      (l = 50),
                      "30k+" === a.availableFunds
                        ? (l += 25)
                        : "15k-30k" === a.availableFunds
                          ? (l += 15)
                          : "5k-15k" === a.availableFunds
                            ? (l += 5)
                            : (l -= 10),
                      "full" === a.familySupport
                        ? (l += 10)
                        : "partial" === a.familySupport && (l += 5),
                      "excellent" === a.academicPerformance
                        ? (l += 20)
                        : "good" === a.academicPerformance
                          ? (l += 15)
                          : "average" === a.academicPerformance
                            ? (l += 10)
                            : (l += 5),
                      "theoretical" === a.learningPreference
                        ? (l += 20)
                        : "mixed" === a.learningPreference && (l += 10),
                      "research" === a.careerGoal ||
                      "academic-advancement" === a.careerGoal
                        ? (l += 15)
                        : "entrepreneurship" === a.careerGoal && (l += 10),
                      a.priorities.prestige >= 8
                        ? (l += 10)
                        : a.priorities.prestige >= 6 && (l += 5),
                      a.priorities.careerGrowth >= 8
                        ? (l += 10)
                        : a.priorities.careerGrowth >= 6 && (l += 5),
                      a.longTermSettlement || (l += 10),
                      !0 === a.needIncome
                        ? (l -= 20)
                        : "partial" === a.needIncome && (l -= 10),
                      a.priorities.time >= 8 && (l -= 10),
                      ("none" === a.germanLevel || "a1-a2" === a.germanLevel) &&
                        (l -= 15),
                      Math.max(0, Math.min(100, l))),
                    d =
                      ((n = e),
                      {
                        financialValue: {
                          ausbildung: ee("ausbildung", n),
                          university: ee("university", n),
                        },
                        timeEfficiency: {
                          ausbildung: ei("ausbildung", n),
                          university: ei("university", n),
                        },
                        careerStability: { ausbildung: 85, university: 75 },
                        flexibility: { ausbildung: 60, university: 85 },
                        prestige: { ausbildung: 70, university: 85 },
                      }),
                    u = Math.abs(o - c);
                  u < 10
                    ? ((r = "either"), (s = 50 + u))
                    : u < 20 && e.priorities.careerGrowth > 8
                      ? ((r = "hybrid"), (s = 65 + u))
                      : ((r = o > c ? "ausbildung" : "university"),
                        (s = Math.min(95, 50 + 2 * u)));
                  let m = (function (e, i, a) {
                      let n = [];
                      return (
                        "ausbildung" === i
                          ? ((e.needIncome ||
                              "0-5k" === e.availableFunds ||
                              "5k-15k" === e.availableFunds) &&
                              n.push(
                                "You'll earn €".concat(
                                  900,
                                  "-€",
                                  1200,
                                  "/month while training instead of paying €36,000+ for university",
                                ),
                              ),
                            e.priorities.time >= 7 &&
                              n.push(
                                "Employment in 3-4 years vs 5-7 years with university - ".concat(
                                  1.5,
                                  "-",
                                  3,
                                  " years faster",
                                ),
                              ),
                            "hands-on" === e.learningPreference &&
                              n.push(
                                "Your hands-on learning preference aligns perfectly with Ausbildung's 75% practical training",
                              ),
                            n.push(
                              "75-80% placement rate with your training company, plus high recession resilience",
                            ),
                            ("a1-a2" === e.germanLevel ||
                              "b1-b2" === e.germanLevel) &&
                              n.push(
                                "B1 German is achievable in 6-9 months, much easier than university's B2-C1 requirement",
                              ))
                          : "university" === i
                            ? (("30k+" === e.availableFunds ||
                                "full" === e.familySupport) &&
                                n.push(
                                  "You have the financial resources to invest in higher education (€36,000-45,000 total)",
                                ),
                              (e.priorities.careerGrowth >= 7 ||
                                e.priorities.prestige >= 7) &&
                                n.push(
                                  "University offers higher salary ceiling (€6,500-8,500/month by year 10) and easier path to senior management",
                                ),
                              ("theoretical" === e.learningPreference ||
                                "research" === e.careerGoal) &&
                                n.push(
                                  "Your theoretical learning preference and ".concat(
                                    e.careerGoal,
                                    " career goal align with university education",
                                  ),
                                ),
                              e.longTermSettlement ||
                                n.push(
                                  "University degree offers superior international recognition and global career mobility",
                                ),
                              ("excellent" === e.academicPerformance ||
                                "good" === e.academicPerformance) &&
                                n.push(
                                  "Your ".concat(
                                    e.academicPerformance,
                                    " academic record positions you well for university admission and success",
                                  ),
                                ))
                            : "hybrid" === i
                              ? (n.push(
                                  "Your profile shows strong fit for BOTH pathways - consider a hybrid approach",
                                ),
                                n.push(
                                  "Duales Studium combines university degree with work experience and €1,000-1,600/month stipend",
                                ),
                                n.push(
                                  "Alternatively: Complete Ausbildung first (earn €30k+), then pursue University debt-free",
                                ))
                              : (n.push(
                                  "Both pathways are equally suitable for your profile - choice depends on personal preference",
                                ),
                                n.push(
                                  "Ausbildung: Faster, earn money, practical skills. University: Higher ceiling, global mobility, research",
                                ),
                                n.push(
                                  "Consider your learning style preference as the deciding factor",
                                )),
                        n.slice(0, 3)
                      );
                    })(e, r, 0),
                    g = (function (e, i) {
                      let a = [];
                      if ("ausbildung" === i) {
                        if (
                          "none" === e.germanLevel ||
                          "a1-a2" === e.germanLevel
                        ) {
                          let i = "none" === e.germanLevel ? 9 : 6;
                          a.push({
                            type: "warning",
                            message:
                              "Language gap: You need B1 German. Start intensive study now - requires ".concat(
                                i,
                                "-12 months",
                              ),
                            priority: "high",
                          });
                        }
                      } else if (
                        "university" === i &&
                        "c1-c2" !== e.germanLevel
                      ) {
                        let i =
                          "none" === e.germanLevel
                            ? 18
                            : "a1-a2" === e.germanLevel
                              ? 15
                              : 12;
                        a.push({
                          type: "warning",
                          message:
                            "Language gap: You need B2-C1 German. Requires ".concat(
                              i,
                              "-18 months of intensive study",
                            ),
                          priority: "high",
                        });
                      }
                      (e.age >= 28 &&
                        "ausbildung" === i &&
                        a.push({
                          type: "info",
                          message: "Age consideration: At ".concat(
                            e.age,
                            ", you're older than typical Ausbildung applicants (18-25). Emphasize maturity and work experience",
                          ),
                          priority: "medium",
                        }),
                        "university" === i &&
                          ("0-5k" === e.availableFunds ||
                            "5k-15k" === e.availableFunds) &&
                          a.push({
                            type: "warning",
                            message:
                              "Financial risk: University requires €36,000-45,000 total. Current funds insufficient. Explore DAAD scholarships",
                            priority: "high",
                          }));
                      let n = e.fieldOfInterest.toLowerCase();
                      return (
                        "ausbildung" === i &&
                          (n.includes("it") || n.includes("healthcare")) &&
                          a.push({
                            type: "success",
                            message: "Field advantage: ".concat(
                              e.fieldOfInterest,
                              " has high Ausbildung demand with 50,000+ open positions annually",
                            ),
                            priority: "medium",
                          }),
                        "asap" === e.timeToStart &&
                          "none" === e.germanLevel &&
                          a.push({
                            type: "warning",
                            message:
                              'Timeline conflict: "ASAP" start impossible with no German. Realistic timeline: 9-12 months minimum for B1',
                            priority: "high",
                          }),
                        !0 === e.needIncome &&
                          "university" === i &&
                          a.push({
                            type: "warning",
                            message:
                              "Income conflict: You need income, but university offers only limited part-time work (€500/month). Consider Ausbildung or Duales Studium",
                            priority: "high",
                          }),
                        "ausbildung" === i &&
                          "hands-on" === e.learningPreference &&
                          a.push({
                            type: "success",
                            message:
                              "Perfect match: Your hands-on learning style is ideal for Ausbildung's 75% practical training approach",
                            priority: "low",
                          }),
                        a
                      );
                    })(e, r);
                  return {
                    ausbildungScore: o,
                    universityScore: c,
                    recommendation: r,
                    confidenceScore: s,
                    topReasons: m,
                    alerts: g,
                    scorecard: d,
                  };
                })(e);
              (l({ ...i, scores: a, formData: e }),
                (0, j.r)("ausbildung-vs-university-comparison"));
            } catch (e) {
              console.error("Error calculating comparison:", e);
            } finally {
              d(!1);
            }
          },
          C = async () => {
            if (t && !A) {
              S(!0);
              try {
                let e =
                    "either" === t.scores.recommendation ||
                    "hybrid" === t.scores.recommendation
                      ? "ausbildung"
                      : t.scores.recommendation,
                  i = await fetch("/api/tools/generate-action-plan", {
                    method: "POST",
                    headers: { "Content-Type": "application/json" },
                    body: JSON.stringify({
                      pathway: e,
                      userProfile: t.formData,
                    }),
                  });
                if (!i.ok) throw Error("Failed to generate action plan");
                let a = await i.json();
                g(a);
              } catch (e) {
                (console.error("Error generating action plan:", e),
                  g({
                    error:
                      "Failed to generate personalized action plan. Please try again.",
                  }));
              } finally {
                S(!1);
              }
            }
          };
        return (0, n.jsx)(b.d, {
          title: "Ausbildung vs University Comparison Tool",
          description:
            "Make an informed decision about your German education pathway with our comprehensive AI-powered comparison tool. Compare costs, timeline, career prospects, visa requirements, and more.",
          icon: y.A,
          category: "Education Planning",
          toolSlug: "ausbildung-vs-university-comparison",
          children: (0, n.jsxs)("main", {
            role: "main",
            children: [
              (0, n.jsx)("section", {
                className:
                  "bg-beige border-2 border-border rounded-2xl p-6 mb-8",
                children: (0, n.jsxs)("div", {
                  className: "flex items-start gap-4",
                  children: [
                    (0, n.jsx)("div", {
                      className: "p-3 bg-[#344F1F] rounded-xl",
                      "aria-hidden": "true",
                      children: (0, n.jsx)(y.A, {
                        className: "h-6 w-6 text-cream",
                      }),
                    }),
                    (0, n.jsxs)("div", {
                      children: [
                        (0, n.jsx)("h3", {
                          className: "font-semibold text-gray-900 mb-2",
                          children: "Choose Your Path Wisely",
                        }),
                        (0, n.jsx)("p", {
                          className: "text-sm text-gray-700",
                          children:
                            "This comprehensive tool analyzes 8 key factors to help you choose between Ausbildung (vocational training) and University education in Germany. Answer all questions honestly for the most accurate recommendation.",
                        }),
                      ],
                    }),
                  ],
                }),
              }),
              !t &&
                (0, n.jsxs)("div", {
                  className: "space-y-4",
                  children: [
                    (0, n.jsx)(B, { onSubmit: P }),
                    (0, n.jsx)("div", {
                      className: "flex justify-center",
                      children: (0, n.jsx)(j.A, {
                        toolSlug: "ausbildung-vs-university-comparison",
                        actionText: "comparisons completed",
                      }),
                    }),
                  ],
                }),
              !t && (0, n.jsx)(N.HowItWorksSection, { content: en }),
              t &&
                (0, n.jsxs)("div", {
                  className: "space-y-6",
                  children: [
                    (0, n.jsxs)("article", {
                      className:
                        "bg-white rounded-2xl border-2 border-gray-200 p-8",
                      children: [
                        (0, n.jsxs)("header", {
                          className: "flex items-center gap-4 mb-6",
                          children: [
                            (0, n.jsx)("div", {
                              className: "p-3 bg-beige rounded-xl",
                              "aria-hidden": "true",
                              children: (0, n.jsx)(h.A, {
                                className: "h-6 w-6 text-[#F4991A]",
                              }),
                            }),
                            (0, n.jsx)("h2", {
                              className:
                                "text-2xl font-semibold text-[#344F1F]",
                              children: "Executive Summary",
                            }),
                          ],
                        }),
                        (0, n.jsx)("div", {
                          className:
                            "bg-beige border-2 border-border rounded-xl p-6 mb-6",
                          children: (0, n.jsxs)("div", {
                            className: "text-center",
                            children: [
                              (0, n.jsx)("p", {
                                className: "text-sm text-gray-600 mb-2",
                                children: "Our Recommendation",
                              }),
                              (0, n.jsx)("h3", {
                                className:
                                  "text-3xl font-bold text-[#F4991A] mb-2 capitalize",
                                children:
                                  "ausbildung" === t.scores.recommendation
                                    ? "Ausbildung (Vocational Training)"
                                    : "university" === t.scores.recommendation
                                      ? "University Education"
                                      : "hybrid" === t.scores.recommendation
                                        ? "Hybrid Pathway"
                                        : "Either Pathway",
                              }),
                              (0, n.jsxs)("p", {
                                className: "text-lg text-gray-700",
                                children: [
                                  "Confidence Score: ",
                                  t.scores.confidenceScore,
                                  "%",
                                ],
                              }),
                            ],
                          }),
                        }),
                        (0, n.jsxs)("div", {
                          className: "mb-6",
                          children: [
                            (0, n.jsx)("h4", {
                              className: "font-semibold text-gray-900 mb-3",
                              children: "Top 3 Reasons:",
                            }),
                            (0, n.jsx)("ul", {
                              className: "space-y-2",
                              children: t.scores.topReasons.map((e, i) =>
                                (0, n.jsxs)(
                                  "li",
                                  {
                                    className: "flex items-start gap-3",
                                    children: [
                                      (0, n.jsx)("span", {
                                        className:
                                          "flex-shrink-0 w-6 h-6 bg-beige text-[#F4991A] rounded-full flex items-center justify-center text-sm font-semibold",
                                        "aria-hidden": "true",
                                        children: i + 1,
                                      }),
                                      (0, n.jsx)("span", {
                                        className: "text-gray-700",
                                        children: e,
                                      }),
                                    ],
                                  },
                                  i,
                                ),
                              ),
                            }),
                          ],
                        }),
                        t.scores.alerts &&
                          t.scores.alerts.length > 0 &&
                          (0, n.jsx)("div", {
                            className: "space-y-2",
                            children: t.scores.alerts.map((e, i) =>
                              (0, n.jsx)(
                                "div",
                                {
                                  className: "p-4 rounded-xl border-2 ".concat(
                                    ("warning" === e.type || e.type,
                                    "bg-beige border-border"),
                                  ),
                                  children: (0, n.jsx)("p", {
                                    className: "text-sm font-medium",
                                    children: e.message,
                                  }),
                                },
                                i,
                              ),
                            ),
                          }),
                        (0, n.jsx)("div", {
                          className:
                            "mt-6 grid grid-cols-2 md:grid-cols-5 gap-4",
                          children: Object.entries(t.scores.scorecard).map(
                            (e) => {
                              let [i, a] = e;
                              return (0, n.jsxs)(
                                "div",
                                {
                                  className:
                                    "text-center p-4 bg-[#F9F5F0] rounded-xl",
                                  children: [
                                    (0, n.jsx)("p", {
                                      className:
                                        "text-xs text-gray-600 mb-2 capitalize",
                                      children: i
                                        .replace(/([A-Z])/g, " $1")
                                        .trim(),
                                    }),
                                    (0, n.jsxs)("div", {
                                      className: "flex justify-center gap-2",
                                      children: [
                                        (0, n.jsxs)("div", {
                                          className: "text-center",
                                          children: [
                                            (0, n.jsx)("div", {
                                              className:
                                                "text-lg font-bold text-[#F4991A]",
                                              children: a.ausbildung,
                                            }),
                                            (0, n.jsx)("div", {
                                              className:
                                                "text-xs text-gray-500",
                                              children: "Ausb.",
                                            }),
                                          ],
                                        }),
                                        (0, n.jsx)("div", {
                                          className: "text-gray-400",
                                          "aria-hidden": "true",
                                          children: "vs",
                                        }),
                                        (0, n.jsxs)("div", {
                                          className: "text-center",
                                          children: [
                                            (0, n.jsx)("div", {
                                              className:
                                                "text-lg font-bold text-[#344F1F]",
                                              children: a.university,
                                            }),
                                            (0, n.jsx)("div", {
                                              className:
                                                "text-xs text-gray-500",
                                              children: "Uni",
                                            }),
                                          ],
                                        }),
                                      ],
                                    }),
                                  ],
                                },
                                i,
                              );
                            },
                          ),
                        }),
                      ],
                    }),
                    (0, n.jsx)(R, {
                      title: "Financial Deep Dive",
                      icon: h.A,
                      children: (0, n.jsxs)("div", {
                        className: "space-y-6",
                        children: [
                          (0, n.jsx)(J, {
                            ausbildungData: {
                              totalCost: t.financial.ausbildung.totalInvestment,
                              totalIncome:
                                t.financial.ausbildung.fiveYearNetWorth +
                                t.financial.ausbildung.totalInvestment,
                              netPosition:
                                t.financial.ausbildung.fiveYearNetWorth,
                            },
                            universityData: {
                              totalCost: t.financial.university.totalInvestment,
                              totalIncome:
                                t.financial.university.fiveYearNetWorth +
                                t.financial.university.totalInvestment,
                              netPosition:
                                t.financial.university.fiveYearNetWorth,
                            },
                          }),
                          (0, n.jsxs)("div", {
                            className: "grid md:grid-cols-2 gap-6",
                            children: [
                              (0, n.jsxs)("div", {
                                className:
                                  "bg-beige border-2 border-border rounded-xl p-6",
                                children: [
                                  (0, n.jsx)("h4", {
                                    className:
                                      "font-semibold text-[#F4991A] mb-4",
                                    children: "Ausbildung",
                                  }),
                                  (0, n.jsxs)("div", {
                                    className: "space-y-3",
                                    children: [
                                      (0, n.jsxs)("div", {
                                        className: "flex justify-between",
                                        children: [
                                          (0, n.jsx)("span", {
                                            className: "text-gray-700",
                                            children: "Total Investment:",
                                          }),
                                          (0, n.jsxs)("span", {
                                            className:
                                              "font-bold text-[#344F1F]",
                                            children: [
                                              "€",
                                              t.financial.ausbildung.totalInvestment.toLocaleString(),
                                            ],
                                          }),
                                        ],
                                      }),
                                      (0, n.jsxs)("div", {
                                        className: "flex justify-between",
                                        children: [
                                          (0, n.jsx)("span", {
                                            className: "text-gray-700",
                                            children: "Monthly Stipend:",
                                          }),
                                          (0, n.jsxs)("span", {
                                            className: "font-semibold",
                                            children: [
                                              "€",
                                              t.financial.ausbildung
                                                .stipendMonthly,
                                            ],
                                          }),
                                        ],
                                      }),
                                      (0, n.jsxs)("div", {
                                        className: "flex justify-between",
                                        children: [
                                          (0, n.jsx)("span", {
                                            className: "text-gray-700",
                                            children: "Living Costs Covered:",
                                          }),
                                          (0, n.jsxs)("span", {
                                            className: "font-semibold",
                                            children: [
                                              t.financial.ausbildung
                                                .coveredPercentage,
                                              "%",
                                            ],
                                          }),
                                        ],
                                      }),
                                      (0, n.jsxs)("div", {
                                        className: "flex justify-between",
                                        children: [
                                          (0, n.jsx)("span", {
                                            className: "text-gray-700",
                                            children: "ROI Timeline:",
                                          }),
                                          (0, n.jsx)("span", {
                                            className: "font-semibold",
                                            children:
                                              t.financial.ausbildung
                                                .roiTimeline,
                                          }),
                                        ],
                                      }),
                                      (0, n.jsxs)("div", {
                                        className: "flex justify-between",
                                        children: [
                                          (0, n.jsx)("span", {
                                            className: "text-gray-700",
                                            children: "5-Year Net Worth:",
                                          }),
                                          (0, n.jsxs)("span", {
                                            className: "font-semibold",
                                            children: [
                                              "€",
                                              t.financial.ausbildung.fiveYearNetWorth.toLocaleString(),
                                            ],
                                          }),
                                        ],
                                      }),
                                    ],
                                  }),
                                ],
                              }),
                              (0, n.jsxs)("div", {
                                className:
                                  "bg-beige border-2 border-border rounded-xl p-6",
                                children: [
                                  (0, n.jsx)("h4", {
                                    className:
                                      "font-semibold text-[#344F1F] mb-4",
                                    children: "University",
                                  }),
                                  (0, n.jsxs)("div", {
                                    className: "space-y-3",
                                    children: [
                                      (0, n.jsxs)("div", {
                                        className: "flex justify-between",
                                        children: [
                                          (0, n.jsx)("span", {
                                            className: "text-gray-700",
                                            children: "Total Investment:",
                                          }),
                                          (0, n.jsxs)("span", {
                                            className:
                                              "font-bold text-[#F4991A]",
                                            children: [
                                              "€",
                                              t.financial.university.totalInvestment.toLocaleString(),
                                            ],
                                          }),
                                        ],
                                      }),
                                      (0, n.jsxs)("div", {
                                        className: "flex justify-between",
                                        children: [
                                          (0, n.jsx)("span", {
                                            className: "text-gray-700",
                                            children: "Blocked Account:",
                                          }),
                                          (0, n.jsxs)("span", {
                                            className: "font-semibold",
                                            children: [
                                              "€",
                                              t.financial.university.blockedAccount.toLocaleString(),
                                              "/year",
                                            ],
                                          }),
                                        ],
                                      }),
                                      (0, n.jsxs)("div", {
                                        className: "flex justify-between",
                                        children: [
                                          (0, n.jsx)("span", {
                                            className: "text-gray-700",
                                            children: "Part-time Income:",
                                          }),
                                          (0, n.jsxs)("span", {
                                            className: "font-semibold",
                                            children: [
                                              "€",
                                              t.financial.university
                                                .partTimeIncome,
                                              "/month",
                                            ],
                                          }),
                                        ],
                                      }),
                                      (0, n.jsxs)("div", {
                                        className: "flex justify-between",
                                        children: [
                                          (0, n.jsx)("span", {
                                            className: "text-gray-700",
                                            children: "ROI Timeline:",
                                          }),
                                          (0, n.jsx)("span", {
                                            className: "font-semibold",
                                            children:
                                              t.financial.university
                                                .roiTimeline,
                                          }),
                                        ],
                                      }),
                                      (0, n.jsxs)("div", {
                                        className: "flex justify-between",
                                        children: [
                                          (0, n.jsx)("span", {
                                            className: "text-gray-700",
                                            children: "5-Year Net Worth:",
                                          }),
                                          (0, n.jsxs)("span", {
                                            className: "font-semibold",
                                            children: [
                                              "€",
                                              t.financial.university.fiveYearNetWorth.toLocaleString(),
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
                    (0, n.jsx)(R, {
                      title: "Timeline & Age Impact",
                      icon: m.A,
                      children: (0, n.jsxs)("div", {
                        className: "space-y-6",
                        children: [
                          (0, n.jsxs)("div", {
                            className: "grid md:grid-cols-2 gap-6",
                            children: [
                              (0, n.jsxs)("div", {
                                children: [
                                  (0, n.jsx)("h4", {
                                    className:
                                      "font-semibold text-[#F4991A] mb-3",
                                    children: "Ausbildung Timeline",
                                  }),
                                  (0, n.jsxs)("div", {
                                    className: "space-y-2",
                                    children: [
                                      t.timeline.ausbildung.phases.map((e, i) =>
                                        (0, n.jsxs)(
                                          "div",
                                          {
                                            className:
                                              "flex justify-between items-center p-3 bg-[#F9F5F0] rounded-lg",
                                            children: [
                                              (0, n.jsx)("span", {
                                                className: "text-sm",
                                                children: e.name,
                                              }),
                                              (0, n.jsxs)("span", {
                                                className:
                                                  "text-sm font-semibold",
                                                children: [
                                                  e.durationMonths,
                                                  "m",
                                                ],
                                              }),
                                            ],
                                          },
                                          i,
                                        ),
                                      ),
                                      (0, n.jsx)("div", {
                                        className:
                                          "mt-4 p-4 bg-beige rounded-xl",
                                        children: (0, n.jsxs)("p", {
                                          className: "text-sm font-semibold",
                                          children: [
                                            "Total: ",
                                            t.timeline.ausbildung.totalDuration,
                                            " months",
                                          ],
                                        }),
                                      }),
                                    ],
                                  }),
                                ],
                              }),
                              (0, n.jsxs)("div", {
                                children: [
                                  (0, n.jsx)("h4", {
                                    className:
                                      "font-semibold text-[#344F1F] mb-3",
                                    children: "University Timeline",
                                  }),
                                  (0, n.jsxs)("div", {
                                    className: "space-y-2",
                                    children: [
                                      t.timeline.university.phases.map((e, i) =>
                                        (0, n.jsxs)(
                                          "div",
                                          {
                                            className:
                                              "flex justify-between items-center p-3 bg-[#F9F5F0] rounded-lg",
                                            children: [
                                              (0, n.jsx)("span", {
                                                className: "text-sm",
                                                children: e.name,
                                              }),
                                              (0, n.jsxs)("span", {
                                                className:
                                                  "text-sm font-semibold",
                                                children: [
                                                  e.durationMonths,
                                                  "m",
                                                ],
                                              }),
                                            ],
                                          },
                                          i,
                                        ),
                                      ),
                                      (0, n.jsx)("div", {
                                        className:
                                          "mt-4 p-4 bg-beige rounded-xl",
                                        children: (0, n.jsxs)("p", {
                                          className: "text-sm font-semibold",
                                          children: [
                                            "Total: ",
                                            t.timeline.university.totalDuration,
                                            " months",
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
                            className:
                              "bg-beige border-2 border-border rounded-xl p-6",
                            children: [
                              (0, n.jsxs)("p", {
                                className: "text-sm",
                                children: [
                                  (0, n.jsx)("strong", {
                                    children: "Time Difference:",
                                  }),
                                  " ",
                                  t.timeline.comparison.timeDifference,
                                  " months (~",
                                  Math.round(
                                    t.timeline.comparison.timeDifference / 12,
                                  ),
                                  " years)",
                                ],
                              }),
                              (0, n.jsxs)("p", {
                                className: "text-sm mt-2",
                                children: [
                                  (0, n.jsx)("strong", {
                                    children: "Age Impact:",
                                  }),
                                  " ",
                                  t.timeline.comparison.ageImpact,
                                ],
                              }),
                            ],
                          }),
                        ],
                      }),
                    }),
                    (0, n.jsx)(R, {
                      title: "Career Prospects & Salary",
                      icon: c.A,
                      children: (0, n.jsxs)("div", {
                        className: "space-y-6",
                        children: [
                          (0, n.jsx)(Y, {
                            ausbildungData: {
                              starting:
                                (t.career.ausbildung.startingSalary.min +
                                  t.career.ausbildung.startingSalary.max) /
                                2,
                              year5:
                                (t.career.ausbildung.year5Salary.min +
                                  t.career.ausbildung.year5Salary.max) /
                                2,
                              year10:
                                (t.career.ausbildung.year10Salary.min +
                                  t.career.ausbildung.year10Salary.max) /
                                2,
                            },
                            universityData: {
                              starting:
                                (t.career.university.startingSalary.min +
                                  t.career.university.startingSalary.max) /
                                2,
                              year5:
                                (t.career.university.year5Salary.min +
                                  t.career.university.year5Salary.max) /
                                2,
                              year10:
                                (t.career.university.year10Salary.min +
                                  t.career.university.year10Salary.max) /
                                2,
                            },
                          }),
                          (0, n.jsxs)("div", {
                            className: "grid md:grid-cols-2 gap-6",
                            children: [
                              (0, n.jsxs)("div", {
                                children: [
                                  (0, n.jsx)("h4", {
                                    className:
                                      "font-semibold text-[#F4991A] mb-3",
                                    children: "Ausbildung Career Path",
                                  }),
                                  (0, n.jsxs)("div", {
                                    className: "space-y-3",
                                    children: [
                                      (0, n.jsxs)("div", {
                                        children: [
                                          (0, n.jsx)("p", {
                                            className: "text-sm text-gray-600",
                                            children: "Starting Salary",
                                          }),
                                          (0, n.jsxs)("p", {
                                            className: "text-lg font-bold",
                                            children: [
                                              "€",
                                              t.career.ausbildung.startingSalary.min.toLocaleString(),
                                              " - €",
                                              t.career.ausbildung.startingSalary.max.toLocaleString(),
                                            ],
                                          }),
                                        ],
                                      }),
                                      (0, n.jsxs)("div", {
                                        children: [
                                          (0, n.jsx)("p", {
                                            className: "text-sm text-gray-600",
                                            children: "Year 5 Salary",
                                          }),
                                          (0, n.jsxs)("p", {
                                            className: "text-lg font-bold",
                                            children: [
                                              "€",
                                              t.career.ausbildung.year5Salary.min.toLocaleString(),
                                              " - €",
                                              t.career.ausbildung.year5Salary.max.toLocaleString(),
                                            ],
                                          }),
                                        ],
                                      }),
                                      (0, n.jsxs)("div", {
                                        children: [
                                          (0, n.jsx)("p", {
                                            className: "text-sm text-gray-600",
                                            children: "Year 10 Salary",
                                          }),
                                          (0, n.jsxs)("p", {
                                            className: "text-lg font-bold",
                                            children: [
                                              "€",
                                              t.career.ausbildung.year10Salary.min.toLocaleString(),
                                              " - €",
                                              t.career.ausbildung.year10Salary.max.toLocaleString(),
                                            ],
                                          }),
                                        ],
                                      }),
                                      (0, n.jsxs)("div", {
                                        children: [
                                          (0, n.jsx)("p", {
                                            className: "text-sm text-gray-600",
                                            children: "Job Market Demand",
                                          }),
                                          (0, n.jsx)("div", {
                                            className:
                                              "w-full bg-gray-200 rounded-full h-2",
                                            children: (0, n.jsx)("div", {
                                              className:
                                                "bg-[#F4991A] h-2 rounded-full",
                                              style: {
                                                width: "".concat(
                                                  t.career.ausbildung
                                                    .jobMarketDemand,
                                                  "%",
                                                ),
                                              },
                                            }),
                                          }),
                                          (0, n.jsxs)("p", {
                                            className:
                                              "text-xs text-gray-500 mt-1",
                                            children: [
                                              t.career.ausbildung
                                                .jobMarketDemand,
                                              "%",
                                            ],
                                          }),
                                        ],
                                      }),
                                    ],
                                  }),
                                ],
                              }),
                              (0, n.jsxs)("div", {
                                children: [
                                  (0, n.jsx)("h4", {
                                    className:
                                      "font-semibold text-[#344F1F] mb-3",
                                    children: "University Career Path",
                                  }),
                                  (0, n.jsxs)("div", {
                                    className: "space-y-3",
                                    children: [
                                      (0, n.jsxs)("div", {
                                        children: [
                                          (0, n.jsx)("p", {
                                            className: "text-sm text-gray-600",
                                            children: "Starting Salary",
                                          }),
                                          (0, n.jsxs)("p", {
                                            className: "text-lg font-bold",
                                            children: [
                                              "€",
                                              t.career.university.startingSalary.min.toLocaleString(),
                                              " - €",
                                              t.career.university.startingSalary.max.toLocaleString(),
                                            ],
                                          }),
                                        ],
                                      }),
                                      (0, n.jsxs)("div", {
                                        children: [
                                          (0, n.jsx)("p", {
                                            className: "text-sm text-gray-600",
                                            children: "Year 5 Salary",
                                          }),
                                          (0, n.jsxs)("p", {
                                            className: "text-lg font-bold",
                                            children: [
                                              "€",
                                              t.career.university.year5Salary.min.toLocaleString(),
                                              " - €",
                                              t.career.university.year5Salary.max.toLocaleString(),
                                            ],
                                          }),
                                        ],
                                      }),
                                      (0, n.jsxs)("div", {
                                        children: [
                                          (0, n.jsx)("p", {
                                            className: "text-sm text-gray-600",
                                            children: "Year 10 Salary",
                                          }),
                                          (0, n.jsxs)("p", {
                                            className: "text-lg font-bold",
                                            children: [
                                              "€",
                                              t.career.university.year10Salary.min.toLocaleString(),
                                              " - €",
                                              t.career.university.year10Salary.max.toLocaleString(),
                                            ],
                                          }),
                                        ],
                                      }),
                                      (0, n.jsxs)("div", {
                                        children: [
                                          (0, n.jsx)("p", {
                                            className: "text-sm text-gray-600",
                                            children: "Job Market Demand",
                                          }),
                                          (0, n.jsx)("div", {
                                            className:
                                              "w-full bg-gray-200 rounded-full h-2",
                                            children: (0, n.jsx)("div", {
                                              className:
                                                "bg-[#344F1F] h-2 rounded-full",
                                              style: {
                                                width: "".concat(
                                                  t.career.university
                                                    .jobMarketDemand,
                                                  "%",
                                                ),
                                              },
                                            }),
                                          }),
                                          (0, n.jsxs)("p", {
                                            className:
                                              "text-xs text-gray-500 mt-1",
                                            children: [
                                              t.career.university
                                                .jobMarketDemand,
                                              "%",
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
                    (0, n.jsx)(R, {
                      title: "Visa & Immigration Pathway",
                      icon: p.A,
                      children: (0, n.jsxs)("div", {
                        className: "grid md:grid-cols-2 gap-6",
                        children: [
                          (0, n.jsxs)("div", {
                            className:
                              "bg-beige border-2 border-border rounded-xl p-6",
                            children: [
                              (0, n.jsx)("h4", {
                                className: "font-semibold text-[#F4991A] mb-4",
                                children: "Ausbildung Visa",
                              }),
                              (0, n.jsxs)("div", {
                                className: "space-y-2 text-sm",
                                children: [
                                  (0, n.jsxs)("p", {
                                    children: [
                                      (0, n.jsx)("strong", {
                                        children: "Type:",
                                      }),
                                      " ",
                                      t.visa.ausbildung.visaType,
                                    ],
                                  }),
                                  (0, n.jsxs)("p", {
                                    children: [
                                      (0, n.jsx)("strong", {
                                        children: "Approval Rate:",
                                      }),
                                      " ",
                                      t.visa.ausbildung.approvalRate,
                                      "%",
                                    ],
                                  }),
                                  (0, n.jsxs)("p", {
                                    children: [
                                      (0, n.jsx)("strong", {
                                        children: "Processing:",
                                      }),
                                      " ",
                                      t.visa.ausbildung.processingWeeks,
                                      " weeks",
                                    ],
                                  }),
                                  (0, n.jsxs)("p", {
                                    children: [
                                      (0, n.jsx)("strong", {
                                        children: "Work Rights:",
                                      }),
                                      " ",
                                      t.visa.ausbildung.workRights,
                                    ],
                                  }),
                                  (0, n.jsxs)("p", {
                                    children: [
                                      (0, n.jsx)("strong", {
                                        children: "PR Timeline:",
                                      }),
                                      " ",
                                      t.visa.ausbildung.prTimelineMonths,
                                      " months",
                                    ],
                                  }),
                                ],
                              }),
                            ],
                          }),
                          (0, n.jsxs)("div", {
                            className:
                              "bg-beige border-2 border-border rounded-xl p-6",
                            children: [
                              (0, n.jsx)("h4", {
                                className: "font-semibold text-[#344F1F] mb-4",
                                children: "University Visa",
                              }),
                              (0, n.jsxs)("div", {
                                className: "space-y-2 text-sm",
                                children: [
                                  (0, n.jsxs)("p", {
                                    children: [
                                      (0, n.jsx)("strong", {
                                        children: "Type:",
                                      }),
                                      " ",
                                      t.visa.university.visaType,
                                    ],
                                  }),
                                  (0, n.jsxs)("p", {
                                    children: [
                                      (0, n.jsx)("strong", {
                                        children: "Approval Rate:",
                                      }),
                                      " ",
                                      t.visa.university.approvalRate,
                                      "%",
                                    ],
                                  }),
                                  (0, n.jsxs)("p", {
                                    children: [
                                      (0, n.jsx)("strong", {
                                        children: "Processing:",
                                      }),
                                      " ",
                                      t.visa.university.processingWeeks,
                                      " weeks",
                                    ],
                                  }),
                                  (0, n.jsxs)("p", {
                                    children: [
                                      (0, n.jsx)("strong", {
                                        children: "Work Rights:",
                                      }),
                                      " ",
                                      t.visa.university.workRights,
                                    ],
                                  }),
                                  (0, n.jsxs)("p", {
                                    children: [
                                      (0, n.jsx)("strong", {
                                        children: "PR Timeline:",
                                      }),
                                      " ",
                                      t.visa.university.prTimelineMonths,
                                      " months",
                                    ],
                                  }),
                                ],
                              }),
                            ],
                          }),
                        ],
                      }),
                    }),
                    (0, n.jsx)(R, {
                      title: "Lifestyle & Quality of Life",
                      icon: v.A,
                      children: (0, n.jsxs)("div", {
                        className: "grid md:grid-cols-2 gap-6",
                        children: [
                          (0, n.jsxs)("div", {
                            children: [
                              (0, n.jsx)("h4", {
                                className: "font-semibold text-[#F4991A] mb-3",
                                children: "Ausbildung Lifestyle",
                              }),
                              (0, n.jsx)("div", {
                                className: "space-y-3",
                                children: [
                                  {
                                    label: "Work-Life Balance",
                                    value:
                                      t.lifestyle.ausbildung.workLifeBalance,
                                  },
                                  {
                                    label: "Social Life",
                                    value: t.lifestyle.ausbildung.socialLife,
                                  },
                                  {
                                    label: "Flexibility",
                                    value: t.lifestyle.ausbildung.flexibility,
                                  },
                                  {
                                    label: "Cultural Integration",
                                    value:
                                      t.lifestyle.ausbildung
                                        .culturalIntegration,
                                  },
                                ].map((e, i) =>
                                  (0, n.jsxs)(
                                    "div",
                                    {
                                      children: [
                                        (0, n.jsxs)("div", {
                                          className:
                                            "flex justify-between text-sm mb-1",
                                          children: [
                                            (0, n.jsx)("span", {
                                              children: e.label,
                                            }),
                                            (0, n.jsxs)("span", {
                                              className: "font-semibold",
                                              children: [e.value, "%"],
                                            }),
                                          ],
                                        }),
                                        (0, n.jsx)("div", {
                                          className:
                                            "w-full bg-gray-200 rounded-full h-2",
                                          children: (0, n.jsx)("div", {
                                            className:
                                              "bg-[#F4991A] h-2 rounded-full",
                                            style: {
                                              width: "".concat(e.value, "%"),
                                            },
                                          }),
                                        }),
                                      ],
                                    },
                                    i,
                                  ),
                                ),
                              }),
                            ],
                          }),
                          (0, n.jsxs)("div", {
                            children: [
                              (0, n.jsx)("h4", {
                                className: "font-semibold text-[#344F1F] mb-3",
                                children: "University Lifestyle",
                              }),
                              (0, n.jsx)("div", {
                                className: "space-y-3",
                                children: [
                                  {
                                    label: "Work-Life Balance",
                                    value:
                                      t.lifestyle.university.workLifeBalance,
                                  },
                                  {
                                    label: "Social Life",
                                    value: t.lifestyle.university.socialLife,
                                  },
                                  {
                                    label: "Flexibility",
                                    value: t.lifestyle.university.flexibility,
                                  },
                                  {
                                    label: "Cultural Integration",
                                    value:
                                      t.lifestyle.university
                                        .culturalIntegration,
                                  },
                                ].map((e, i) =>
                                  (0, n.jsxs)(
                                    "div",
                                    {
                                      children: [
                                        (0, n.jsxs)("div", {
                                          className:
                                            "flex justify-between text-sm mb-1",
                                          children: [
                                            (0, n.jsx)("span", {
                                              children: e.label,
                                            }),
                                            (0, n.jsxs)("span", {
                                              className: "font-semibold",
                                              children: [e.value, "%"],
                                            }),
                                          ],
                                        }),
                                        (0, n.jsx)("div", {
                                          className:
                                            "w-full bg-gray-200 rounded-full h-2",
                                          children: (0, n.jsx)("div", {
                                            className:
                                              "bg-[#344F1F] h-2 rounded-full",
                                            style: {
                                              width: "".concat(e.value, "%"),
                                            },
                                          }),
                                        }),
                                      ],
                                    },
                                    i,
                                  ),
                                ),
                              }),
                            ],
                          }),
                        ],
                      }),
                    }),
                    (0, n.jsx)(R, {
                      title: "Learning Experience & Skills",
                      icon: s.A,
                      children: (0, n.jsxs)("div", {
                        className: "grid md:grid-cols-2 gap-6",
                        children: [
                          (0, n.jsxs)("div", {
                            className:
                              "bg-beige border-2 border-border rounded-xl p-6",
                            children: [
                              (0, n.jsx)("h4", {
                                className: "font-semibold text-[#F4991A] mb-4",
                                children: "Ausbildung",
                              }),
                              (0, n.jsx)("p", {
                                className: "text-sm mb-4",
                                children:
                                  t.learning.ausbildung.learningApproach,
                              }),
                              (0, n.jsxs)("div", {
                                className: "flex gap-4 mb-4",
                                children: [
                                  (0, n.jsxs)("div", {
                                    className: "text-center",
                                    children: [
                                      (0, n.jsxs)("div", {
                                        className:
                                          "text-2xl font-bold text-[#F4991A]",
                                        children: [
                                          t.learning.ausbildung
                                            .practicalPercent,
                                          "%",
                                        ],
                                      }),
                                      (0, n.jsx)("div", {
                                        className: "text-xs text-gray-600",
                                        children: "Practical",
                                      }),
                                    ],
                                  }),
                                  (0, n.jsxs)("div", {
                                    className: "text-center",
                                    children: [
                                      (0, n.jsxs)("div", {
                                        className:
                                          "text-2xl font-bold text-gray-400",
                                        children: [
                                          t.learning.ausbildung
                                            .theoreticalPercent,
                                          "%",
                                        ],
                                      }),
                                      (0, n.jsx)("div", {
                                        className: "text-xs text-gray-600",
                                        children: "Theory",
                                      }),
                                    ],
                                  }),
                                ],
                              }),
                              (0, n.jsxs)("p", {
                                className: "text-xs text-gray-600",
                                children: [
                                  (0, n.jsx)("strong", {
                                    children: "Recognition:",
                                  }),
                                  " ",
                                  t.learning.internationalRecognition
                                    .ausbildung,
                                ],
                              }),
                            ],
                          }),
                          (0, n.jsxs)("div", {
                            className:
                              "bg-beige border-2 border-border rounded-xl p-6",
                            children: [
                              (0, n.jsx)("h4", {
                                className: "font-semibold text-[#344F1F] mb-4",
                                children: "University",
                              }),
                              (0, n.jsx)("p", {
                                className: "text-sm mb-4",
                                children:
                                  t.learning.university.learningApproach,
                              }),
                              (0, n.jsxs)("div", {
                                className: "flex gap-4 mb-4",
                                children: [
                                  (0, n.jsxs)("div", {
                                    className: "text-center",
                                    children: [
                                      (0, n.jsxs)("div", {
                                        className:
                                          "text-2xl font-bold text-gray-400",
                                        children: [
                                          t.learning.university
                                            .practicalPercent,
                                          "%",
                                        ],
                                      }),
                                      (0, n.jsx)("div", {
                                        className: "text-xs text-gray-600",
                                        children: "Practical",
                                      }),
                                    ],
                                  }),
                                  (0, n.jsxs)("div", {
                                    className: "text-center",
                                    children: [
                                      (0, n.jsxs)("div", {
                                        className:
                                          "text-2xl font-bold text-[#344F1F]",
                                        children: [
                                          t.learning.university
                                            .theoreticalPercent,
                                          "%",
                                        ],
                                      }),
                                      (0, n.jsx)("div", {
                                        className: "text-xs text-gray-600",
                                        children: "Theory",
                                      }),
                                    ],
                                  }),
                                ],
                              }),
                              (0, n.jsxs)("p", {
                                className: "text-xs text-gray-600",
                                children: [
                                  (0, n.jsx)("strong", {
                                    children: "Recognition:",
                                  }),
                                  " ",
                                  t.learning.internationalRecognition
                                    .university,
                                ],
                              }),
                            ],
                          }),
                        ],
                      }),
                    }),
                    (0, n.jsxs)("section", {
                      className:
                        "bg-beige rounded-2xl border-2 border-border p-8 mt-8",
                      children: [
                        (0, n.jsxs)("header", {
                          className: "flex items-center gap-4 mb-6",
                          children: [
                            (0, n.jsx)("div", {
                              className: "p-3 bg-[#344F1F] rounded-xl",
                              "aria-hidden": "true",
                              children: (0, n.jsx)(x.A, {
                                className: "h-6 w-6 text-cream",
                              }),
                            }),
                            (0, n.jsxs)("div", {
                              children: [
                                (0, n.jsx)("h3", {
                                  className:
                                    "text-xl font-semibold text-[#344F1F]",
                                  children: "Your Personalized Action Plan",
                                }),
                                (0, n.jsx)("p", {
                                  className: "text-sm text-gray-600",
                                  children:
                                    "AI-generated step-by-step roadmap based on your profile",
                                }),
                              ],
                            }),
                          ],
                        }),
                        !u &&
                          (0, n.jsx)("button", {
                            onClick: C,
                            disabled: A,
                            className:
                              "w-full bg-[#344F1F] hover:bg-[#344F1F]/90 text-cream font-semibold py-4 px-6 rounded-full transition-colors duration-200 disabled:opacity-50 disabled:cursor-not-allowed",
                            children: A
                              ? "Generating Your Plan..."
                              : "Generate My Personalized Action Plan",
                          }),
                        u &&
                          !u.error &&
                          (0, n.jsxs)("div", {
                            className: "space-y-6",
                            children: [
                              (0, n.jsxs)("div", {
                                className:
                                  "bg-white rounded-xl p-6 border-2 border-gray-200",
                                children: [
                                  (0, n.jsx)("h4", {
                                    className:
                                      "font-semibold text-[#F4991A] mb-4",
                                    children: "Next 30 Days - Quick Wins",
                                  }),
                                  (0, n.jsx)("div", {
                                    className: "space-y-3",
                                    children:
                                      null === (e = u.next30Days) ||
                                      void 0 === e
                                        ? void 0
                                        : e.map((e, i) =>
                                            (0, n.jsxs)(
                                              "div",
                                              {
                                                className:
                                                  "flex items-start gap-3 p-3 bg-[#F9F5F0] rounded-xl",
                                                children: [
                                                  (0, n.jsx)("div", {
                                                    className:
                                                      "mt-0.5 w-2 h-2 rounded-full flex-shrink-0 ".concat(
                                                        "high" === e.priority
                                                          ? "bg-[#F4991A]"
                                                          : (e.priority,
                                                            "bg-[#344F1F]"),
                                                      ),
                                                    "aria-hidden": "true",
                                                  }),
                                                  (0, n.jsxs)("div", {
                                                    className: "flex-1",
                                                    children: [
                                                      (0, n.jsx)("p", {
                                                        className:
                                                          "text-sm font-medium text-gray-900",
                                                        children: e.task,
                                                      }),
                                                      (0, n.jsx)("p", {
                                                        className:
                                                          "text-xs text-gray-600 mt-1",
                                                        children:
                                                          e.estimatedTime,
                                                      }),
                                                    ],
                                                  }),
                                                ],
                                              },
                                              i,
                                            ),
                                          ),
                                  }),
                                ],
                              }),
                              (0, n.jsxs)("div", {
                                className:
                                  "bg-white rounded-xl p-6 border-2 border-gray-200",
                                children: [
                                  (0, n.jsx)("h4", {
                                    className:
                                      "font-semibold text-[#F4991A] mb-4",
                                    children: "Next 3 Months - Key Milestones",
                                  }),
                                  (0, n.jsx)("div", {
                                    className: "space-y-4",
                                    children:
                                      null === (i = u.next3Months) ||
                                      void 0 === i
                                        ? void 0
                                        : i.map((e, i) => {
                                            var a;
                                            return (0, n.jsxs)(
                                              "div",
                                              {
                                                className:
                                                  "border-l-4 border-[#344F1F] pl-4",
                                                children: [
                                                  (0, n.jsxs)("div", {
                                                    className:
                                                      "flex items-center justify-between mb-2",
                                                    children: [
                                                      (0, n.jsx)("h5", {
                                                        className:
                                                          "font-semibold text-gray-900",
                                                        children: e.milestone,
                                                      }),
                                                      (0, n.jsx)("span", {
                                                        className:
                                                          "text-xs text-gray-600 bg-[#F9F5F0] px-2 py-1 rounded-full",
                                                        children: e.deadline,
                                                      }),
                                                    ],
                                                  }),
                                                  (0, n.jsx)("ul", {
                                                    className: "space-y-1",
                                                    children:
                                                      null ===
                                                        (a = e.requirements) ||
                                                      void 0 === a
                                                        ? void 0
                                                        : a.map((e, i) =>
                                                            (0, n.jsxs)(
                                                              "li",
                                                              {
                                                                className:
                                                                  "text-sm text-gray-700 flex items-start gap-2",
                                                                children: [
                                                                  (0, n.jsx)(
                                                                    "span",
                                                                    {
                                                                      className:
                                                                        "text-[#F4991A] mt-0.5",
                                                                      "aria-hidden":
                                                                        "true",
                                                                      children:
                                                                        "→",
                                                                    },
                                                                  ),
                                                                  (0, n.jsx)(
                                                                    "span",
                                                                    {
                                                                      children:
                                                                        e,
                                                                    },
                                                                  ),
                                                                ],
                                                              },
                                                              i,
                                                            ),
                                                          ),
                                                  }),
                                                ],
                                              },
                                              i,
                                            );
                                          }),
                                  }),
                                ],
                              }),
                              (0, n.jsxs)("div", {
                                className:
                                  "bg-white rounded-xl p-6 border-2 border-gray-200",
                                children: [
                                  (0, n.jsx)("h4", {
                                    className:
                                      "font-semibold text-[#F4991A] mb-4",
                                    children: "Next 6-12 Months - Major Goals",
                                  }),
                                  (0, n.jsx)("div", {
                                    className: "space-y-4",
                                    children:
                                      null === (a = u.next6To12Months) ||
                                      void 0 === a
                                        ? void 0
                                        : a.map((e, i) => {
                                            var a;
                                            return (0, n.jsxs)(
                                              "div",
                                              {
                                                className:
                                                  "bg-beige border-2 border-border rounded-xl p-4",
                                                children: [
                                                  (0, n.jsx)("h5", {
                                                    className:
                                                      "font-semibold text-[#344F1F] mb-3",
                                                    children: e.goal,
                                                  }),
                                                  (0, n.jsxs)("div", {
                                                    className: "space-y-2 mb-3",
                                                    children: [
                                                      (0, n.jsx)("p", {
                                                        className:
                                                          "text-xs font-semibold text-gray-600 uppercase",
                                                        children: "Steps:",
                                                      }),
                                                      null === (a = e.steps) ||
                                                      void 0 === a
                                                        ? void 0
                                                        : a.map((e, i) =>
                                                            (0, n.jsxs)(
                                                              "div",
                                                              {
                                                                className:
                                                                  "flex items-start gap-2 text-sm text-gray-700",
                                                                children: [
                                                                  (0, n.jsxs)(
                                                                    "span",
                                                                    {
                                                                      className:
                                                                        "text-[#344F1F] font-bold",
                                                                      children:
                                                                        [
                                                                          i + 1,
                                                                          ".",
                                                                        ],
                                                                    },
                                                                  ),
                                                                  (0, n.jsx)(
                                                                    "span",
                                                                    {
                                                                      children:
                                                                        e,
                                                                    },
                                                                  ),
                                                                ],
                                                              },
                                                              i,
                                                            ),
                                                          ),
                                                    ],
                                                  }),
                                                  e.resources &&
                                                    e.resources.length > 0 &&
                                                    (0, n.jsxs)("div", {
                                                      children: [
                                                        (0, n.jsx)("p", {
                                                          className:
                                                            "text-xs font-semibold text-gray-600 uppercase mb-2",
                                                          children:
                                                            "Resources:",
                                                        }),
                                                        (0, n.jsx)("div", {
                                                          className:
                                                            "flex flex-wrap gap-2",
                                                          children:
                                                            e.resources.map(
                                                              (e, i) =>
                                                                (0, n.jsx)(
                                                                  "span",
                                                                  {
                                                                    className:
                                                                      "text-xs bg-white border border-border px-2 py-1 rounded-full",
                                                                    children: e,
                                                                  },
                                                                  i,
                                                                ),
                                                            ),
                                                        }),
                                                      ],
                                                    }),
                                                ],
                                              },
                                              i,
                                            );
                                          }),
                                  }),
                                ],
                              }),
                              u.commonPitfalls &&
                                u.commonPitfalls.length > 0 &&
                                (0, n.jsxs)("div", {
                                  className:
                                    "bg-beige border-2 border-border rounded-xl p-6",
                                  children: [
                                    (0, n.jsx)("h4", {
                                      className:
                                        "font-semibold text-[#F4991A] mb-3",
                                      children: "Common Pitfalls to Avoid",
                                    }),
                                    (0, n.jsx)("ul", {
                                      className: "space-y-2",
                                      children: u.commonPitfalls.map((e, i) =>
                                        (0, n.jsxs)(
                                          "li",
                                          {
                                            className:
                                              "flex items-start gap-2 text-sm text-gray-700",
                                            children: [
                                              (0, n.jsx)("span", {
                                                className:
                                                  "text-[#F4991A] mt-1",
                                                "aria-hidden": "true",
                                                children: "•",
                                              }),
                                              (0, n.jsx)("span", {
                                                children: e,
                                              }),
                                            ],
                                          },
                                          i,
                                        ),
                                      ),
                                    }),
                                  ],
                                }),
                            ],
                          }),
                        (null == u ? void 0 : u.error) &&
                          (0, n.jsxs)("div", {
                            className:
                              "bg-red-50 border-2 border-red-200 rounded-xl p-6 text-center",
                            children: [
                              (0, n.jsx)("p", {
                                className: "text-red-600",
                                children: u.error,
                              }),
                              (0, n.jsx)("button", {
                                onClick: C,
                                className:
                                  "mt-4 bg-[#344F1F] hover:bg-[#344F1F]/90 text-cream font-semibold py-2 px-6 rounded-full transition-colors duration-200",
                                children: "Try Again",
                              }),
                            ],
                          }),
                      ],
                    }),
                  ],
                }),
              (0, n.jsx)("section", {
                className: "mt-12",
                children: (0, n.jsx)(f.ToolFAQSection, { faqs: ea }),
              }),
              (0, n.jsx)(k.RelatedTools, {
                currentToolSlug: "ausbildung-vs-university-comparison",
                limit: 3,
              }),
              (0, n.jsx)(w.CTASection, {
                title: "Ready to Apply? Browse Live Positions",
                description:
                  "Make an informed decision and explore real Ausbildung opportunities from verified German employers hiring international candidates.",
                action: {
                  text: "Browse Jobs",
                  href: "/dashboard/jobs",
                  variant: "default",
                },
                secondaryAction: {
                  text: "Book Consultation",
                  href: "/contact",
                  variant: "outline",
                },
                backgroundImage: "/images/arbeitgeber-hero-background.webp",
                className: "mt-12",
              }),
            ],
          }),
        });
      }
    },
    86625: (e, i, a) => {
      Promise.resolve().then(a.bind(a, 65779));
    },
  },
  (e) => {
    var i = (i) => e((e.s = i));
    (e.O(0, [46593, 36209, 84121, 72076, 77358], () => i(86625)),
      (_N_E = e.O()));
  },
]);
