(self.webpackChunk_N_E = self.webpackChunk_N_E || []).push([
  [35105],
  {
    10779: (e, t, s) => {
      Promise.resolve().then(s.bind(s, 68434));
    },
    68434: (e, t, s) => {
      "use strict";
      (s.r(t), s.d(t, { default: () => ey }));
      var a = s(70207),
        i = s(87223),
        r = s(54604),
        l = s(45748),
        n = s(70134),
        o = s(79024),
        c = s(18051),
        d = s(79593),
        m = s(52141),
        x = s(35121),
        h = s(58212),
        u = s(50018),
        p = s(10542),
        g = s.n(p),
        b = s(7859),
        f = s(54459),
        v = s(30478),
        j = s(81994),
        N = s(84217),
        y = s(88117),
        w = s(79650),
        A = s(39945),
        F = s(50341),
        _ = s(82164),
        k = s(95992),
        S = s(72982),
        C = s(70005),
        E = s(39441),
        P = s(54928),
        D = s(82110);
      let I = [
          { value: "masters", label: "Master's Degree", icon: "\uD83C\uDF93" },
          {
            value: "bachelors",
            label: "Bachelor's Degree",
            icon: "\uD83C\uDF93",
          },
          {
            value: "12th-science",
            label: "12th Grade (Science)",
            icon: "\uD83D\uDCDA",
          },
          {
            value: "12th-commerce",
            label: "12th Grade (Commerce)",
            icon: "\uD83D\uDCCA",
          },
          {
            value: "12th-arts",
            label: "12th Grade (Arts)",
            icon: "\uD83C\uDFA8",
          },
          { value: "diploma", label: "Diploma", icon: "\uD83D\uDCDC" },
          { value: "other", label: "Other", icon: "\uD83D\uDCDD" },
        ],
        G = [
          {
            value: "c2",
            label: "C2 - Mastery",
            description: "Native-like fluency",
          },
          {
            value: "c1",
            label: "C1 - Advanced",
            description: "Fluent communication",
          },
          {
            value: "b2",
            label: "B2 - Upper Intermediate",
            description: "Professional working",
          },
          {
            value: "b1",
            label: "B1 - Intermediate",
            description: "Everyday conversations",
          },
          {
            value: "a2",
            label: "A2 - Elementary",
            description: "Basic communication",
          },
          {
            value: "a1",
            label: "A1 - Beginner",
            description: "Simple phrases",
          },
          {
            value: "none",
            label: "No German",
            description: "Starting from scratch",
          },
        ],
        O = [
          {
            value: "healthcare",
            label: "Healthcare & Nursing",
            icon: "\uD83C\uDFE5",
          },
          { value: "it", label: "IT & Technology", icon: "\uD83D\uDCBB" },
          { value: "engineering", label: "Engineering", icon: "⚙️" },
          {
            value: "business",
            label: "Business & Finance",
            icon: "\uD83D\uDCBC",
          },
          {
            value: "hospitality",
            label: "Hospitality & Tourism",
            icon: "\uD83C\uDFE8",
          },
          { value: "automotive", label: "Automotive", icon: "\uD83D\uDE97" },
          { value: "retail", label: "Retail & Sales", icon: "\uD83D\uDECD️" },
          {
            value: "construction",
            label: "Construction",
            icon: "\uD83C\uDFD7️",
          },
        ];
      function q(e) {
        var t, s, n, o;
        let {
            isOpen: c,
            onClose: d,
            userId: m,
            existingData: x,
            onComplete: h,
          } = e,
          u = (0, r.createClientComponentClient)(),
          [p, g] = (0, i.useState)(1),
          [b, q] = (0, i.useState)(!1),
          [T, H] = (0, i.useState)(!1),
          [R, B] = (0, i.useState)({
            education_level: (null == x ? void 0 : x.education_level) || "",
            education_percentage:
              (null == x ? void 0 : x.education_percentage) || "",
            german_level: (null == x ? void 0 : x.german_level) || "",
            age: (null == x ? void 0 : x.age) || "",
            preferred_sectors: (null == x ? void 0 : x.preferred_sectors) || [],
            current_location: (null == x ? void 0 : x.current_location) || "",
            work_experience: (null == x ? void 0 : x.work_experience) || [],
          }),
          [M, z] = (0, i.useState)(null),
          L = () => {
            let e = 0,
              t = {
                education: 0,
                academic: 0,
                language: 0,
                age: 0,
                experience: 0,
              },
              s = [];
            switch (R.education_level) {
              case "masters":
                t.education = 30;
                break;
              case "bachelors":
                t.education = 25;
                break;
              case "12th-science":
              case "12th-commerce":
              case "12th-arts":
                t.education = 20;
                break;
              case "diploma":
                t.education = 18;
                break;
              default:
                ((t.education = 10),
                  s.push(
                    "Consider completing higher education for better opportunities",
                  ));
            }
            let a = parseInt(R.education_percentage);
            switch (
              (a >= 80
                ? (t.academic = 20)
                : a >= 60
                  ? (t.academic = 15)
                  : a >= 40
                    ? ((t.academic = 10),
                      s.push(
                        "Strong academic performance can increase your chances",
                      ))
                    : ((t.academic = 5),
                      s.push(
                        "Focus on skill development to compensate for grades",
                      )),
              R.german_level)
            ) {
              case "c2":
                t.language = 25;
                break;
              case "c1":
                t.language = 23;
                break;
              case "b2":
                t.language = 20;
                break;
              case "b1":
                ((t.language = 15),
                  s.push("Reach B2 level for most Ausbildung programs"));
                break;
              case "a2":
                ((t.language = 10),
                  s.push("Intensive German learning recommended - aim for B2"));
                break;
              case "a1":
                ((t.language = 5),
                  s.push("Start intensive German courses immediately"));
                break;
              default:
                ((t.language = 2),
                  s.push("German language is essential - begin learning now"));
            }
            let i = parseInt(R.age);
            (i >= 18 && i <= 25
              ? (t.age = 15)
              : i <= 30
                ? (t.age = 12)
                : i <= 35
                  ? (t.age = 8)
                  : ((t.age = 5),
                    s.push(
                      "Some programs have age preferences - research carefully",
                    )),
              R.work_experience && R.work_experience.length > 0
                ? (t.experience = 10)
                : ((t.experience = 5),
                  s.push("Any relevant experience or internships will help")));
            let r = [];
            return (
              (e = Object.values(t).reduce((e, t) => e + t, 0)) >= 80
                ? (r.push("Excellent profile! Apply to top-tier programs"),
                  r.push("Consider premium sectors like IT or Engineering"))
                : e >= 60
                  ? (r.push("Strong candidate for most Ausbildung programs"),
                    r.push("Focus on improving German if below B2"))
                  : e >= 40
                    ? (r.push("Good potential with some improvements needed"),
                      r.push("Consider vocational preparation courses"))
                    : (r.push("Foundation building required for success"),
                      r.push("Start with language and skill development")),
              {
                score: e,
                breakdown: t,
                suggestions: s.slice(0, 3),
                recommendations: r,
                calculated_at: new Date().toISOString(),
              }
            );
          },
          $ = async () => {
            q(!0);
            try {
              let e = L(),
                t = "not_eligible";
              e.score >= 80
                ? (t = "highly_eligible")
                : e.score >= 60
                  ? (t = "eligible")
                  : e.score >= 40
                    ? (t = "conditionally_eligible")
                    : e.score >= 25 && (t = "needs_improvement");
              try {
                (
                  await fetch("/api/tools/eligibility/save", {
                    method: "POST",
                    headers: { "Content-Type": "application/json" },
                    body: JSON.stringify({
                      educationLevel: R.education_level,
                      educationPercentage:
                        parseInt(R.education_percentage) || 0,
                      age: parseInt(R.age) || 0,
                      germanLevel: R.german_level,
                      preferredSectors: R.preferred_sectors || [],
                      currentLocation: R.current_location,
                      eligibilityScore: e.score,
                      eligibilityStatus: t,
                      recommendations: e.recommendations,
                      improvementAreas: e.suggestions,
                      categoryScores: e.breakdown,
                    }),
                  })
                ).ok ||
                  console.warn(
                    "Failed to save to eligibility_results, continuing with profile update",
                  );
              } catch (e) {
                console.warn("Eligibility API call failed:", e);
              }
              let { error: s } = await u
                .from("user_profiles")
                .update({
                  eligibility_score: e,
                  updated_at: new Date().toISOString(),
                })
                .eq("user_id", m);
              if (s) throw s;
              (z(e),
                H(!0),
                h && h(e),
                P.oR.success("Assessment completed successfully!"));
            } catch (e) {
              (console.error("Error saving assessment:", e),
                P.oR.error("Failed to save assessment"));
            } finally {
              q(!1);
            }
          };
        return (0, a.jsx)(f.N, {
          children:
            c &&
            (0, a.jsx)(l.P.div, {
              initial: { opacity: 0 },
              animate: { opacity: 1 },
              exit: { opacity: 0 },
              className: "fixed inset-0 z-50 overflow-y-auto",
              children: (0, a.jsxs)("div", {
                className: "flex min-h-screen items-center justify-center p-4",
                children: [
                  (0, a.jsx)(l.P.div, {
                    className:
                      "fixed inset-0 bg-background/80 backdrop-blur-sm",
                    onClick: () => !b && d(),
                  }),
                  (0, a.jsx)(l.P.div, {
                    initial: { scale: 0.95, opacity: 0 },
                    animate: { scale: 1, opacity: 1 },
                    exit: { scale: 0.95, opacity: 0 },
                    className:
                      "relative bg-background border rounded-2xl shadow-xl max-w-lg w-full max-h-[90vh] sm:max-h-[85vh] overflow-hidden z-10",
                    children: T
                      ? (0, a.jsxs)("div", {
                          className:
                            "flex flex-col h-full max-h-[90vh] sm:max-h-[85vh]",
                          children: [
                            (0, a.jsxs)(l.P.div, {
                              initial: { opacity: 0, scale: 0.95 },
                              animate: { opacity: 1, scale: 1 },
                              className: "flex-1 p-4 sm:p-6 overflow-y-auto",
                              children: [
                                (0, a.jsxs)("div", {
                                  className: "text-center mb-6",
                                  children: [
                                    (0, a.jsx)(l.P.div, {
                                      initial: { scale: 0 },
                                      animate: { scale: 1 },
                                      transition: {
                                        delay: 0.2,
                                        type: "spring",
                                      },
                                      className:
                                        "inline-flex items-center justify-center w-20 h-20 rounded-full bg-primary/10 mb-4",
                                      children: (0, a.jsx)(_.A, {
                                        className: "h-10 w-10 text-primary",
                                      }),
                                    }),
                                    (0, a.jsx)(l.P.h2, {
                                      initial: { opacity: 0, y: 10 },
                                      animate: { opacity: 1, y: 0 },
                                      transition: { delay: 0.3 },
                                      className: "text-2xl font-bold mb-2",
                                      children: "Your Eligibility Score",
                                    }),
                                    (0, a.jsxs)(l.P.div, {
                                      initial: { scale: 0 },
                                      animate: { scale: 1 },
                                      transition: {
                                        delay: 0.4,
                                        type: "spring",
                                      },
                                      className: (0, D.cn)(
                                        "text-5xl font-bold",
                                        (n =
                                          (null == M ? void 0 : M.score) ||
                                          0) >= 80
                                          ? "text-green-500"
                                          : n >= 60
                                            ? "text-primary"
                                            : n >= 40
                                              ? "text-yellow-500"
                                              : "text-red-500",
                                      ),
                                      children: [
                                        null == M ? void 0 : M.score,
                                        "%",
                                      ],
                                    }),
                                    (0, a.jsx)(l.P.p, {
                                      initial: { opacity: 0 },
                                      animate: { opacity: 1 },
                                      transition: { delay: 0.5 },
                                      className: "text-lg font-medium mt-2",
                                      children:
                                        (o =
                                          (null == M ? void 0 : M.score) ||
                                          0) >= 80
                                          ? "Excellent Match"
                                          : o >= 60
                                            ? "Good Potential"
                                            : o >= 40
                                              ? "Fair Chances"
                                              : "Needs Improvement",
                                    }),
                                  ],
                                }),
                                (0, a.jsxs)(l.P.div, {
                                  initial: { opacity: 0, y: 20 },
                                  animate: { opacity: 1, y: 0 },
                                  transition: { delay: 0.6 },
                                  className: "space-y-3 mb-6",
                                  children: [
                                    (0, a.jsx)("h3", {
                                      className:
                                        "font-medium text-sm text-muted-foreground",
                                      children: "Score Breakdown",
                                    }),
                                    Object.entries(
                                      (null == M ? void 0 : M.breakdown) || {},
                                    ).map((e) => {
                                      let [t, s] = e;
                                      return (0, a.jsxs)(
                                        "div",
                                        {
                                          className:
                                            "flex items-center justify-between",
                                          children: [
                                            (0, a.jsx)("span", {
                                              className: "text-sm capitalize",
                                              children: t.replace("_", " "),
                                            }),
                                            (0, a.jsxs)("div", {
                                              className:
                                                "flex items-center gap-2",
                                              children: [
                                                (0, a.jsx)("div", {
                                                  className:
                                                    "w-32 h-2 bg-muted rounded-full overflow-hidden",
                                                  children: (0, a.jsx)(
                                                    l.P.div,
                                                    {
                                                      initial: { width: 0 },
                                                      animate: {
                                                        width: "".concat(
                                                          (s / 30) * 100,
                                                          "%",
                                                        ),
                                                      },
                                                      transition: {
                                                        delay: 0.8,
                                                        duration: 0.5,
                                                      },
                                                      className:
                                                        "h-full bg-primary rounded-full",
                                                    },
                                                  ),
                                                }),
                                                (0, a.jsx)("span", {
                                                  className:
                                                    "text-sm font-medium w-10 text-right",
                                                  children: s,
                                                }),
                                              ],
                                            }),
                                          ],
                                        },
                                        t,
                                      );
                                    }),
                                  ],
                                }),
                                (null == M
                                  ? void 0
                                  : null === (t = M.suggestions) || void 0 === t
                                    ? void 0
                                    : t.length) > 0 &&
                                  (0, a.jsxs)(l.P.div, {
                                    initial: { opacity: 0, y: 20 },
                                    animate: { opacity: 1, y: 0 },
                                    transition: { delay: 0.9 },
                                    className: "space-y-2 mb-6",
                                    children: [
                                      (0, a.jsxs)("h3", {
                                        className:
                                          "font-medium text-sm text-muted-foreground flex items-center gap-2",
                                        children: [
                                          (0, a.jsx)(k.A, {
                                            className: "h-4 w-4",
                                          }),
                                          "Areas for Improvement",
                                        ],
                                      }),
                                      M.suggestions.map((e, t) =>
                                        (0, a.jsxs)(
                                          "div",
                                          {
                                            className:
                                              "flex items-start gap-2 text-sm",
                                            children: [
                                              (0, a.jsx)("div", {
                                                className:
                                                  "h-1.5 w-1.5 rounded-full bg-yellow-500 mt-1.5",
                                              }),
                                              (0, a.jsx)("span", {
                                                children: e,
                                              }),
                                            ],
                                          },
                                          t,
                                        ),
                                      ),
                                    ],
                                  }),
                                (0, a.jsxs)(l.P.div, {
                                  initial: { opacity: 0, y: 20 },
                                  animate: { opacity: 1, y: 0 },
                                  transition: { delay: 1 },
                                  className: "space-y-2 mb-6",
                                  children: [
                                    (0, a.jsxs)("h3", {
                                      className:
                                        "font-medium text-sm text-muted-foreground flex items-center gap-2",
                                      children: [
                                        (0, a.jsx)(S.A, {
                                          className: "h-4 w-4",
                                        }),
                                        "Recommendations",
                                      ],
                                    }),
                                    null == M
                                      ? void 0
                                      : null === (s = M.recommendations) ||
                                          void 0 === s
                                        ? void 0
                                        : s.map((e, t) =>
                                            (0, a.jsxs)(
                                              "div",
                                              {
                                                className:
                                                  "flex items-start gap-2 text-sm",
                                                children: [
                                                  (0, a.jsx)(C.A, {
                                                    className:
                                                      "h-4 w-4 text-green-500 mt-0.5",
                                                  }),
                                                  (0, a.jsx)("span", {
                                                    children: e,
                                                  }),
                                                ],
                                              },
                                              t,
                                            ),
                                          ),
                                  ],
                                }),
                              ],
                            }),
                            (0, a.jsx)("div", {
                              className:
                                "p-4 sm:p-6 border-t bg-background mt-auto",
                              children: (0, a.jsx)(E.$, {
                                onClick: d,
                                className:
                                  "w-full sm:w-auto sm:mx-auto sm:block",
                                children: "Done",
                              }),
                            }),
                          ],
                        })
                      : (0, a.jsxs)(a.Fragment, {
                          children: [
                            (0, a.jsxs)("div", {
                              className:
                                "p-4 sm:p-6 border-b bg-background sticky top-0 z-10",
                              children: [
                                (0, a.jsxs)("div", {
                                  className:
                                    "flex items-center justify-between",
                                  children: [
                                    (0, a.jsxs)("div", {
                                      children: [
                                        (0, a.jsx)("h2", {
                                          className:
                                            "text-lg sm:text-xl font-semibold",
                                          children: "Eligibility Assessment",
                                        }),
                                        (0, a.jsxs)("p", {
                                          className:
                                            "text-sm text-muted-foreground mt-1",
                                          children: ["Step ", p, " of ", 5],
                                        }),
                                      ],
                                    }),
                                    (0, a.jsx)("button", {
                                      onClick: d,
                                      disabled: b,
                                      className:
                                        "p-2 hover:bg-muted rounded-lg transition-colors",
                                      children: (0, a.jsx)(A.A, {
                                        className: "h-4 w-4",
                                      }),
                                    }),
                                  ],
                                }),
                                (0, a.jsx)("div", {
                                  className:
                                    "mt-4 h-1.5 bg-muted rounded-full overflow-hidden",
                                  children: (0, a.jsx)(l.P.div, {
                                    className: "h-full bg-primary rounded-full",
                                    initial: { width: 0 },
                                    animate: {
                                      width: "".concat((p / 5) * 100, "%"),
                                    },
                                    transition: { duration: 0.3 },
                                  }),
                                }),
                              ],
                            }),
                            (0, a.jsx)("div", {
                              className: "p-4 sm:p-6 overflow-y-auto",
                              style: {
                                maxHeight: "calc(90vh - 180px)",
                                minHeight: "200px",
                              },
                              children: (0, a.jsx)(f.N, {
                                mode: "wait",
                                children: (0, a.jsx)(
                                  l.P.div,
                                  {
                                    initial: { opacity: 0, x: 20 },
                                    animate: { opacity: 1, x: 0 },
                                    exit: { opacity: 0, x: -20 },
                                    transition: { duration: 0.2 },
                                    children: (() => {
                                      switch (p) {
                                        case 1:
                                          return (0, a.jsxs)("div", {
                                            className: "space-y-4",
                                            children: [
                                              (0, a.jsxs)("div", {
                                                className: "text-center mb-6",
                                                children: [
                                                  (0, a.jsx)(v.A, {
                                                    className:
                                                      "h-12 w-12 mx-auto text-primary mb-3",
                                                  }),
                                                  (0, a.jsx)("h3", {
                                                    className:
                                                      "text-lg font-semibold",
                                                    children:
                                                      "Education Background",
                                                  }),
                                                  (0, a.jsx)("p", {
                                                    className:
                                                      "text-sm text-muted-foreground",
                                                    children:
                                                      "Tell us about your academic qualifications",
                                                  }),
                                                ],
                                              }),
                                              (0, a.jsxs)("div", {
                                                className: "space-y-3",
                                                children: [
                                                  (0, a.jsx)("label", {
                                                    className:
                                                      "text-sm font-medium",
                                                    children:
                                                      "Highest Education Level",
                                                  }),
                                                  (0, a.jsx)("div", {
                                                    className:
                                                      "grid grid-cols-1 gap-2",
                                                    children: I.map((e) =>
                                                      (0, a.jsxs)(
                                                        "button",
                                                        {
                                                          onClick: () =>
                                                            B({
                                                              ...R,
                                                              education_level:
                                                                e.value,
                                                            }),
                                                          className: (0, D.cn)(
                                                            "flex items-center gap-2 sm:gap-3 p-2 sm:p-3 rounded-lg border transition-all text-left text-sm sm:text-base",
                                                            R.education_level ===
                                                              e.value
                                                              ? "border-primary bg-primary/5"
                                                              : "border-border hover:border-primary/50",
                                                          ),
                                                          children: [
                                                            (0, a.jsx)("span", {
                                                              className:
                                                                "text-xl",
                                                              children: e.icon,
                                                            }),
                                                            (0, a.jsx)("span", {
                                                              className:
                                                                "text-sm font-medium",
                                                              children: e.label,
                                                            }),
                                                          ],
                                                        },
                                                        e.value,
                                                      ),
                                                    ),
                                                  }),
                                                ],
                                              }),
                                              (0, a.jsxs)("div", {
                                                className: "space-y-3",
                                                children: [
                                                  (0, a.jsx)("label", {
                                                    className:
                                                      "text-sm font-medium",
                                                    children:
                                                      "Academic Performance (%)",
                                                  }),
                                                  (0, a.jsx)("input", {
                                                    type: "number",
                                                    min: "0",
                                                    max: "100",
                                                    value:
                                                      R.education_percentage,
                                                    onChange: (e) =>
                                                      B({
                                                        ...R,
                                                        education_percentage:
                                                          e.target.value,
                                                      }),
                                                    placeholder:
                                                      "Enter your percentage",
                                                    className:
                                                      "w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-primary/20 focus:border-primary outline-none",
                                                  }),
                                                ],
                                              }),
                                            ],
                                          });
                                        case 2:
                                          return (0, a.jsxs)("div", {
                                            className: "space-y-4",
                                            children: [
                                              (0, a.jsxs)("div", {
                                                className: "text-center mb-6",
                                                children: [
                                                  (0, a.jsx)(j.A, {
                                                    className:
                                                      "h-12 w-12 mx-auto text-primary mb-3",
                                                  }),
                                                  (0, a.jsx)("h3", {
                                                    className:
                                                      "text-lg font-semibold",
                                                    children:
                                                      "German Language Skills",
                                                  }),
                                                  (0, a.jsx)("p", {
                                                    className:
                                                      "text-sm text-muted-foreground",
                                                    children:
                                                      "Your current German proficiency level",
                                                  }),
                                                ],
                                              }),
                                              (0, a.jsx)("div", {
                                                className: "space-y-2",
                                                children: G.map((e) =>
                                                  (0, a.jsxs)(
                                                    "button",
                                                    {
                                                      onClick: () =>
                                                        B({
                                                          ...R,
                                                          german_level: e.value,
                                                        }),
                                                      className: (0, D.cn)(
                                                        "w-full p-2 sm:p-3 rounded-lg border transition-all text-left",
                                                        R.german_level ===
                                                          e.value
                                                          ? "border-primary bg-primary/5"
                                                          : "border-border hover:border-primary/50",
                                                      ),
                                                      children: [
                                                        (0, a.jsx)("div", {
                                                          className:
                                                            "font-medium text-xs sm:text-sm",
                                                          children: e.label,
                                                        }),
                                                        (0, a.jsx)("div", {
                                                          className:
                                                            "text-xs text-muted-foreground mt-0.5",
                                                          children:
                                                            e.description,
                                                        }),
                                                      ],
                                                    },
                                                    e.value,
                                                  ),
                                                ),
                                              }),
                                            ],
                                          });
                                        case 3:
                                          return (0, a.jsxs)("div", {
                                            className: "space-y-4",
                                            children: [
                                              (0, a.jsxs)("div", {
                                                className: "text-center mb-6",
                                                children: [
                                                  (0, a.jsx)(N.A, {
                                                    className:
                                                      "h-12 w-12 mx-auto text-primary mb-3",
                                                  }),
                                                  (0, a.jsx)("h3", {
                                                    className:
                                                      "text-lg font-semibold",
                                                    children:
                                                      "Personal Information",
                                                  }),
                                                  (0, a.jsx)("p", {
                                                    className:
                                                      "text-sm text-muted-foreground",
                                                    children:
                                                      "Basic details for eligibility check",
                                                  }),
                                                ],
                                              }),
                                              (0, a.jsxs)("div", {
                                                className: "space-y-3",
                                                children: [
                                                  (0, a.jsx)("label", {
                                                    className:
                                                      "text-sm font-medium",
                                                    children: "Your Age",
                                                  }),
                                                  (0, a.jsx)("input", {
                                                    type: "number",
                                                    min: "16",
                                                    max: "60",
                                                    value: R.age,
                                                    onChange: (e) =>
                                                      B({
                                                        ...R,
                                                        age: e.target.value,
                                                      }),
                                                    placeholder:
                                                      "Enter your age",
                                                    className:
                                                      "w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-primary/20 focus:border-primary outline-none",
                                                  }),
                                                ],
                                              }),
                                              (0, a.jsxs)("div", {
                                                className: "space-y-3",
                                                children: [
                                                  (0, a.jsx)("label", {
                                                    className:
                                                      "text-sm font-medium",
                                                    children:
                                                      "Current Location",
                                                  }),
                                                  (0, a.jsx)("input", {
                                                    type: "text",
                                                    value: R.current_location,
                                                    onChange: (e) =>
                                                      B({
                                                        ...R,
                                                        current_location:
                                                          e.target.value,
                                                      }),
                                                    placeholder:
                                                      "e.g., Casablanca, Morocco",
                                                    className:
                                                      "w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-primary/20 focus:border-primary outline-none",
                                                  }),
                                                ],
                                              }),
                                            ],
                                          });
                                        case 4:
                                          return (0, a.jsxs)("div", {
                                            className: "space-y-4",
                                            children: [
                                              (0, a.jsxs)("div", {
                                                className: "text-center mb-6",
                                                children: [
                                                  (0, a.jsx)(y.A, {
                                                    className:
                                                      "h-12 w-12 mx-auto text-primary mb-3",
                                                  }),
                                                  (0, a.jsx)("h3", {
                                                    className:
                                                      "text-lg font-semibold",
                                                    children:
                                                      "Career Interests",
                                                  }),
                                                  (0, a.jsx)("p", {
                                                    className:
                                                      "text-sm text-muted-foreground",
                                                    children:
                                                      "Select your preferred sectors (max 3)",
                                                  }),
                                                ],
                                              }),
                                              (0, a.jsx)("div", {
                                                className:
                                                  "grid grid-cols-2 gap-2",
                                                children: O.map((e) => {
                                                  var t;
                                                  return (0, a.jsxs)(
                                                    "button",
                                                    {
                                                      onClick: () => {
                                                        let t =
                                                          R.preferred_sectors ||
                                                          [];
                                                        t.includes(e.value)
                                                          ? B({
                                                              ...R,
                                                              preferred_sectors:
                                                                t.filter(
                                                                  (t) =>
                                                                    t !==
                                                                    e.value,
                                                                ),
                                                            })
                                                          : t.length < 3 &&
                                                            B({
                                                              ...R,
                                                              preferred_sectors:
                                                                [...t, e.value],
                                                            });
                                                      },
                                                      className: (0, D.cn)(
                                                        "p-2 sm:p-3 rounded-lg border transition-all",
                                                        (
                                                          null ===
                                                            (t =
                                                              R.preferred_sectors) ||
                                                          void 0 === t
                                                            ? void 0
                                                            : t.includes(
                                                                e.value,
                                                              )
                                                        )
                                                          ? "border-primary bg-primary/5"
                                                          : "border-border hover:border-primary/50",
                                                      ),
                                                      children: [
                                                        (0, a.jsx)("div", {
                                                          className:
                                                            "text-lg sm:text-xl mb-1",
                                                          children: e.icon,
                                                        }),
                                                        (0, a.jsx)("div", {
                                                          className:
                                                            "text-xs font-medium",
                                                          children: e.label,
                                                        }),
                                                      ],
                                                    },
                                                    e.value,
                                                  );
                                                }),
                                              }),
                                            ],
                                          });
                                        case 5:
                                          var e, t, s;
                                          return (0, a.jsxs)("div", {
                                            className: "space-y-4",
                                            children: [
                                              (0, a.jsxs)("div", {
                                                className: "text-center mb-6",
                                                children: [
                                                  (0, a.jsx)(w.A, {
                                                    className:
                                                      "h-12 w-12 mx-auto text-primary mb-3",
                                                  }),
                                                  (0, a.jsx)("h3", {
                                                    className:
                                                      "text-lg font-semibold",
                                                    children:
                                                      "Review Your Information",
                                                  }),
                                                  (0, a.jsx)("p", {
                                                    className:
                                                      "text-sm text-muted-foreground",
                                                    children:
                                                      "Confirm your details before assessment",
                                                  }),
                                                ],
                                              }),
                                              (0, a.jsxs)("div", {
                                                className:
                                                  "space-y-3 bg-muted/30 rounded-lg p-4",
                                                children: [
                                                  (0, a.jsxs)("div", {
                                                    className:
                                                      "flex justify-between text-sm",
                                                    children: [
                                                      (0, a.jsx)("span", {
                                                        className:
                                                          "text-muted-foreground",
                                                        children: "Education:",
                                                      }),
                                                      (0, a.jsx)("span", {
                                                        className:
                                                          "font-medium",
                                                        children:
                                                          (null ===
                                                            (e = I.find(
                                                              (e) =>
                                                                e.value ===
                                                                R.education_level,
                                                            )) || void 0 === e
                                                            ? void 0
                                                            : e.label) ||
                                                          "Not selected",
                                                      }),
                                                    ],
                                                  }),
                                                  (0, a.jsxs)("div", {
                                                    className:
                                                      "flex justify-between text-sm",
                                                    children: [
                                                      (0, a.jsx)("span", {
                                                        className:
                                                          "text-muted-foreground",
                                                        children:
                                                          "Performance:",
                                                      }),
                                                      (0, a.jsxs)("span", {
                                                        className:
                                                          "font-medium",
                                                        children: [
                                                          R.education_percentage ||
                                                            "Not entered",
                                                          "%",
                                                        ],
                                                      }),
                                                    ],
                                                  }),
                                                  (0, a.jsxs)("div", {
                                                    className:
                                                      "flex justify-between text-sm",
                                                    children: [
                                                      (0, a.jsx)("span", {
                                                        className:
                                                          "text-muted-foreground",
                                                        children:
                                                          "German Level:",
                                                      }),
                                                      (0, a.jsx)("span", {
                                                        className:
                                                          "font-medium",
                                                        children:
                                                          (null ===
                                                            (t = G.find(
                                                              (e) =>
                                                                e.value ===
                                                                R.german_level,
                                                            )) || void 0 === t
                                                            ? void 0
                                                            : t.label) ||
                                                          "Not selected",
                                                      }),
                                                    ],
                                                  }),
                                                  (0, a.jsxs)("div", {
                                                    className:
                                                      "flex justify-between text-sm",
                                                    children: [
                                                      (0, a.jsx)("span", {
                                                        className:
                                                          "text-muted-foreground",
                                                        children: "Age:",
                                                      }),
                                                      (0, a.jsxs)("span", {
                                                        className:
                                                          "font-medium",
                                                        children: [
                                                          R.age ||
                                                            "Not entered",
                                                          " years",
                                                        ],
                                                      }),
                                                    ],
                                                  }),
                                                  (0, a.jsxs)("div", {
                                                    className:
                                                      "flex justify-between text-sm",
                                                    children: [
                                                      (0, a.jsx)("span", {
                                                        className:
                                                          "text-muted-foreground",
                                                        children:
                                                          "Preferred Sectors:",
                                                      }),
                                                      (0, a.jsxs)("span", {
                                                        className:
                                                          "font-medium",
                                                        children: [
                                                          (null ===
                                                            (s =
                                                              R.preferred_sectors) ||
                                                          void 0 === s
                                                            ? void 0
                                                            : s.length) || 0,
                                                          " selected",
                                                        ],
                                                      }),
                                                    ],
                                                  }),
                                                ],
                                              }),
                                            ],
                                          });
                                        default:
                                          return null;
                                      }
                                    })(),
                                  },
                                  p,
                                ),
                              }),
                            }),
                            (0, a.jsxs)("div", {
                              className:
                                "p-4 sm:p-6 border-t bg-background flex justify-between sticky bottom-0",
                              children: [
                                (0, a.jsx)(E.$, {
                                  variant: "outline",
                                  onClick: () => {
                                    p > 1 && g(p - 1);
                                  },
                                  disabled: 1 === p || b,
                                  children: "Back",
                                }),
                                (0, a.jsx)(E.$, {
                                  onClick: () => {
                                    p < 5 ? g(p + 1) : $();
                                  },
                                  disabled: b,
                                  children: b
                                    ? (0, a.jsxs)("span", {
                                        className: "flex items-center gap-2",
                                        children: [
                                          (0, a.jsx)(l.P.div, {
                                            className:
                                              "h-4 w-4 border-2 border-white/30 border-t-white rounded-full",
                                            animate: { rotate: 360 },
                                            transition: {
                                              duration: 1,
                                              repeat: 1 / 0,
                                              ease: "linear",
                                            },
                                          }),
                                          "Processing...",
                                        ],
                                      })
                                    : 5 === p
                                      ? "Calculate Score"
                                      : (0, a.jsxs)(a.Fragment, {
                                          children: [
                                            "Next",
                                            (0, a.jsx)(F.A, {
                                              className: "h-4 w-4 ml-1",
                                            }),
                                          ],
                                        }),
                                }),
                              ],
                            }),
                          ],
                        }),
                  }),
                ],
              }),
            }),
        });
      }
      var T = s(74285),
        H = s(27239),
        R = s(275),
        B = s(54573),
        M = s(65915),
        z = s(6971),
        L = s(97020);
      let $ = () => {
          let e = new Date(),
            t = e.getMonth() + 1,
            s = e.getFullYear(),
            a = [],
            i = new Date(e);
          i.setMonth(i.getMonth() + 4);
          for (let e = 0; e < 5; e++) {
            let r = s + Math.floor(e / 2) + +(0 === e && t > 8);
            if (e % 2 == 0) {
              let e = new Date(r, 7, 1),
                t = new Date(r, 8, 1);
              (e > i &&
                a.push({
                  id: "".concat(r, "-08"),
                  label: "August ".concat(r),
                  season: "Fall",
                  description: "Main intake - Most programs available",
                  intakeDate: e,
                  applicationDeadline: new Date(r, 4, 31),
                  visaDeadline: new Date(r, 5, 30),
                }),
                t > i &&
                  a.length < 5 &&
                  a.push({
                    id: "".concat(r, "-09"),
                    label: "September ".concat(r),
                    season: "Fall",
                    description: "Secondary fall intake",
                    intakeDate: t,
                    applicationDeadline: new Date(r, 5, 30),
                    visaDeadline: new Date(r, 6, 31),
                  }));
            } else {
              let e = r + 1,
                t = new Date(e, 1, 1),
                s = new Date(e, 2, 1);
              (t > i &&
                a.length < 5 &&
                a.push({
                  id: "".concat(e, "-02"),
                  label: "February ".concat(e),
                  season: "Spring",
                  description: "Spring intake - Limited programs",
                  intakeDate: t,
                  applicationDeadline: new Date(e - 1, 10, 30),
                  visaDeadline: new Date(e - 1, 11, 31),
                }),
                s > i &&
                  a.length < 5 &&
                  a.push({
                    id: "".concat(e, "-03"),
                    label: "March ".concat(e),
                    season: "Spring",
                    description: "Secondary spring intake",
                    intakeDate: s,
                    applicationDeadline: new Date(e - 1, 11, 31),
                    visaDeadline: new Date(e, 0, 31),
                  }));
            }
          }
          return a.slice(0, 5);
        },
        U = (e) => {
          let t = new Date(),
            s = new Date(e.intakeDate),
            a = new Date(e.applicationDeadline),
            i = new Date(e.visaDeadline),
            r = [
              {
                id: "research",
                title: "Research Programs",
                description: "Explore Ausbildung options and requirements",
                icon: T.A,
                date: new Date(Math.max(t.getTime() + 6048e5, t.getTime())),
                status: "upcoming",
                tips: [
                  "Use our job matching tool",
                  "Check program requirements",
                  "Research cities",
                ],
              },
              {
                id: "language",
                title: "German Language Preparation",
                description: "Reach required German level (B1/B2)",
                icon: v.A,
                date: new Date(a.getTime() - 7776e6),
                status: "upcoming",
                tips: [
                  "Take placement test",
                  "Enroll in intensive course",
                  "Practice daily with our tools",
                ],
              },
              {
                id: "documents",
                title: "Prepare Documents",
                description: "Gather all required documents",
                icon: H.A,
                date: new Date(a.getTime() - 3888e6),
                status: "upcoming",
                tips: [
                  "Get transcripts translated",
                  "Prepare CV in German format",
                  "Obtain certificates",
                ],
              },
              {
                id: "apply",
                title: "Submit Applications",
                description: "Apply to selected programs",
                icon: w.A,
                date: new Date(a.getTime() - 2592e6),
                status: "upcoming",
                tips: [
                  "Apply to 3-5 programs",
                  "Follow up regularly",
                  "Prepare for interviews",
                ],
              },
              {
                id: "interview",
                title: "Interview Preparation",
                description: "Prepare for online/phone interviews",
                icon: y.A,
                date: a,
                status: "upcoming",
                tips: [
                  "Use our mock interview tool",
                  "Research companies",
                  "Practice German interview phrases",
                ],
              },
              {
                id: "visa",
                title: "Visa Application",
                description: "Apply for German student/training visa",
                icon: R.A,
                date: i,
                status: "upcoming",
                tips: [
                  "Book appointment early",
                  "Prepare financial proof",
                  "Get health insurance",
                ],
              },
              {
                id: "arrival",
                title: "Arrival in Germany",
                description: "Start your Ausbildung journey!",
                icon: B.A,
                date: s,
                status: "upcoming",
                tips: [
                  "Find accommodation",
                  "Register with authorities",
                  "Open bank account",
                ],
              },
            ],
            l = t.getTime();
          return (
            r.forEach((e) => {
              e.date.getTime() < l
                ? (e.status = "overdue")
                : e.date.getTime() - l < 2592e6 && (e.status = "soon");
            }),
            r
          );
        };
      function K(e) {
        var t, s, n, o, c, d;
        let {
            isOpen: m,
            onClose: x,
            userId: h,
            existingData: u,
            eligibilityScore: p,
            onComplete: g,
          } = e,
          b = (0, r.createClientComponentClient)(),
          [v, j] = (0, i.useState)(null),
          [y, _] = (0, i.useState)([]),
          [k, S] = (0, i.useState)([]),
          [I, G] = (0, i.useState)(!1),
          [O, q] = (0, i.useState)(!1);
        (0, i.useEffect)(() => {
          if (m) {
            var e;
            let t = $();
            if (
              (_(t),
              null == u
                ? void 0
                : null === (e = u.timeline_data) || void 0 === e
                  ? void 0
                  : e.selected_intake)
            ) {
              let e = t.find((e) => e.id === u.timeline_data.selected_intake);
              e && (j(e), S(U(e)), q(!0));
            }
          }
        }, [m, u]);
        let T = (e) => {
            (j(e), S(U(e)));
          },
          H = async () => {
            if (v && 0 !== k.length) {
              G(!0);
              try {
                let e = {
                    selected_intake: v.id,
                    intake_details: {
                      label: v.label,
                      season: v.season,
                      date: v.intakeDate.toISOString(),
                    },
                    milestones: k.map((e) => ({
                      id: e.id,
                      title: e.title,
                      description: e.description,
                      date: e.date.toISOString(),
                      status: e.status,
                      tips: e.tips,
                    })),
                    created_at: new Date().toISOString(),
                    updated_at: new Date().toISOString(),
                  },
                  { error: t } = await b
                    .from("user_profiles")
                    .update({
                      timeline_data: e,
                      updated_at: new Date().toISOString(),
                    })
                    .eq("user_id", h);
                if (t) throw t;
                (P.oR.success("Timeline saved successfully!"), g && g(e), x());
              } catch (e) {
                (console.error("Error saving timeline:", e),
                  P.oR.error("Failed to save timeline"));
              } finally {
                G(!1);
              }
            }
          },
          R = (e) => {
            let t = new Date();
            return Math.ceil((e.getTime() - t.getTime()) / 864e5);
          },
          B = (e) => {
            switch (e) {
              case "overdue":
                return "text-red-500 bg-red-500/10";
              case "soon":
                return "text-yellow-500 bg-yellow-500/10";
              default:
                return "text-green-500 bg-green-500/10";
            }
          },
          K = (e) =>
            e.toLocaleDateString("en-US", {
              month: "short",
              day: "numeric",
              year: "numeric",
            });
        return (0, a.jsx)(f.N, {
          children:
            m &&
            (0, a.jsx)(l.P.div, {
              initial: { opacity: 0 },
              animate: { opacity: 1 },
              exit: { opacity: 0 },
              className: "fixed inset-0 z-50 overflow-y-auto",
              children: (0, a.jsxs)("div", {
                className: "flex min-h-full items-center justify-center p-4",
                children: [
                  (0, a.jsx)(l.P.div, {
                    className:
                      "fixed inset-0 bg-background/80 backdrop-blur-sm",
                    onClick: () => !I && x(),
                  }),
                  (0, a.jsx)(l.P.div, {
                    initial: { scale: 0.95, opacity: 0 },
                    animate: { scale: 1, opacity: 1 },
                    exit: { scale: 0.95, opacity: 0 },
                    className:
                      "relative bg-background border rounded-2xl shadow-xl max-w-2xl w-full max-h-[85vh] flex flex-col z-10",
                    children: O
                      ? (0, a.jsxs)(a.Fragment, {
                          children: [
                            (0, a.jsx)("div", {
                              className: "p-4 sm:p-6 border-b bg-background",
                              children: (0, a.jsxs)("div", {
                                className: "flex items-center justify-between",
                                children: [
                                  (0, a.jsxs)("div", {
                                    children: [
                                      (0, a.jsx)("h2", {
                                        className:
                                          "text-lg sm:text-xl font-semibold",
                                        children: "Your Personalized Timeline",
                                      }),
                                      (0, a.jsxs)("p", {
                                        className:
                                          "text-sm text-muted-foreground mt-1",
                                        children: [
                                          null == v ? void 0 : v.label,
                                          " Intake",
                                        ],
                                      }),
                                    ],
                                  }),
                                  (0, a.jsx)("button", {
                                    onClick: x,
                                    className:
                                      "p-2 hover:bg-muted rounded-lg transition-colors",
                                    children: (0, a.jsx)(A.A, {
                                      className: "h-4 w-4",
                                    }),
                                  }),
                                ],
                              }),
                            }),
                            (0, a.jsxs)("div", {
                              className: "flex-1 p-4 sm:p-6 overflow-y-auto",
                              children: [
                                (0, a.jsxs)("div", {
                                  className: "mb-6 text-center",
                                  children: [
                                    (0, a.jsx)(l.P.div, {
                                      initial: { scale: 0 },
                                      animate: { scale: 1 },
                                      transition: { type: "spring" },
                                      className:
                                        "inline-flex items-center justify-center w-16 h-16 rounded-full bg-primary/10 mb-3",
                                      children: (0, a.jsx)(z.A, {
                                        className: "h-8 w-8 text-primary",
                                      }),
                                    }),
                                    (0, a.jsx)("h3", {
                                      className: "text-lg font-semibold",
                                      children: "Your Journey Roadmap",
                                    }),
                                    (0, a.jsx)("p", {
                                      className:
                                        "text-sm text-muted-foreground",
                                      children:
                                        "Follow these milestones to achieve your Ausbildung goals",
                                    }),
                                  ],
                                }),
                                (0, a.jsx)("div", {
                                  className: "space-y-4",
                                  children: k.map((e, t) => {
                                    let s = e.icon,
                                      i = R(e.date);
                                    return (0, a.jsxs)(
                                      l.P.div,
                                      {
                                        initial: { opacity: 0, x: -20 },
                                        animate: { opacity: 1, x: 0 },
                                        transition: { delay: 0.1 * t },
                                        className: "relative",
                                        children: [
                                          t < k.length - 1 &&
                                            (0, a.jsx)("div", {
                                              className:
                                                "absolute left-6 top-12 bottom-0 w-0.5 bg-border",
                                            }),
                                          (0, a.jsxs)("div", {
                                            className: "flex gap-4",
                                            children: [
                                              (0, a.jsx)("div", {
                                                className: (0, D.cn)(
                                                  "flex items-center justify-center w-12 h-12 rounded-full border-2",
                                                  B(e.status),
                                                ),
                                                children: (0, a.jsx)(s, {
                                                  className: "h-5 w-5",
                                                }),
                                              }),
                                              (0, a.jsxs)("div", {
                                                className: "flex-1 pb-8",
                                                children: [
                                                  (0, a.jsxs)("div", {
                                                    className:
                                                      "flex items-start justify-between mb-1",
                                                    children: [
                                                      (0, a.jsxs)("div", {
                                                        children: [
                                                          (0, a.jsx)("h4", {
                                                            className:
                                                              "font-medium",
                                                            children: e.title,
                                                          }),
                                                          (0, a.jsx)("p", {
                                                            className:
                                                              "text-sm text-muted-foreground",
                                                            children:
                                                              e.description,
                                                          }),
                                                        ],
                                                      }),
                                                      (0, a.jsxs)("div", {
                                                        className: "text-right",
                                                        children: [
                                                          (0, a.jsx)("p", {
                                                            className:
                                                              "text-sm font-medium",
                                                            children: K(e.date),
                                                          }),
                                                          (0, a.jsx)("p", {
                                                            className:
                                                              "text-xs text-muted-foreground",
                                                            children:
                                                              i > 0
                                                                ? "".concat(
                                                                    i,
                                                                    " days",
                                                                  )
                                                                : "Overdue",
                                                          }),
                                                        ],
                                                      }),
                                                    ],
                                                  }),
                                                  (0, a.jsx)("div", {
                                                    className: "mt-3 space-y-1",
                                                    children: e.tips.map(
                                                      (e, t) =>
                                                        (0, a.jsxs)(
                                                          "div",
                                                          {
                                                            className:
                                                              "flex items-start gap-2",
                                                            children: [
                                                              (0, a.jsx)(
                                                                "div",
                                                                {
                                                                  className:
                                                                    "h-1.5 w-1.5 rounded-full bg-muted-foreground/50 mt-1.5",
                                                                },
                                                              ),
                                                              (0, a.jsx)(
                                                                "span",
                                                                {
                                                                  className:
                                                                    "text-xs text-muted-foreground",
                                                                  children: e,
                                                                },
                                                              ),
                                                            ],
                                                          },
                                                          t,
                                                        ),
                                                    ),
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
                                (0, a.jsx)(l.P.div, {
                                  initial: { opacity: 0, y: 20 },
                                  animate: { opacity: 1, y: 0 },
                                  transition: { delay: 0.5 },
                                  className:
                                    "mt-8 p-4 rounded-lg bg-gradient-to-r from-primary/5 to-primary/10 border border-primary/20",
                                  children: (0, a.jsxs)("div", {
                                    className: "flex items-center gap-3",
                                    children: [
                                      (0, a.jsx)(C.A, {
                                        className: "h-5 w-5 text-primary",
                                      }),
                                      (0, a.jsxs)("div", {
                                        children: [
                                          (0, a.jsx)("p", {
                                            className: "font-medium text-sm",
                                            children: "Ready to Start?",
                                          }),
                                          (0, a.jsx)("p", {
                                            className:
                                              "text-xs text-muted-foreground mt-0.5",
                                            children:
                                              "Save this timeline and we'll help you track your progress",
                                          }),
                                        ],
                                      }),
                                    ],
                                  }),
                                }),
                              ],
                            }),
                            (0, a.jsx)("div", {
                              className: "p-4 sm:p-6 border-t bg-background",
                              children: (0, a.jsxs)("div", {
                                className: "flex justify-between gap-3",
                                children: [
                                  (0, a.jsxs)(E.$, {
                                    variant: "outline",
                                    onClick: () => q(!1),
                                    className: "flex-1 sm:flex-none",
                                    children: [
                                      (0, a.jsx)(L.A, {
                                        className: "h-4 w-4 mr-1",
                                      }),
                                      "Back",
                                    ],
                                  }),
                                  (0, a.jsx)(E.$, {
                                    onClick: H,
                                    disabled: I,
                                    className: "flex-1 sm:flex-none",
                                    children: I
                                      ? (0, a.jsxs)("span", {
                                          className: "flex items-center gap-2",
                                          children: [
                                            (0, a.jsx)(l.P.div, {
                                              className:
                                                "h-4 w-4 border-2 border-white/30 border-t-white rounded-full",
                                              animate: { rotate: 360 },
                                              transition: {
                                                duration: 1,
                                                repeat: 1 / 0,
                                                ease: "linear",
                                              },
                                            }),
                                            "Saving...",
                                          ],
                                        })
                                      : (0, a.jsxs)(a.Fragment, {
                                          children: [
                                            "Save Timeline",
                                            (0, a.jsx)(C.A, {
                                              className: "h-4 w-4 ml-1",
                                            }),
                                          ],
                                        }),
                                  }),
                                ],
                              }),
                            }),
                          ],
                        })
                      : (0, a.jsxs)(a.Fragment, {
                          children: [
                            (0, a.jsx)("div", {
                              className: "p-4 sm:p-6 border-b bg-background",
                              children: (0, a.jsxs)("div", {
                                className: "flex items-center justify-between",
                                children: [
                                  (0, a.jsxs)("div", {
                                    children: [
                                      (0, a.jsx)("h2", {
                                        className:
                                          "text-lg sm:text-xl font-semibold",
                                        children: "Plan Your Journey",
                                      }),
                                      (0, a.jsx)("p", {
                                        className:
                                          "text-sm text-muted-foreground mt-1",
                                        children:
                                          "Select your target intake period",
                                      }),
                                    ],
                                  }),
                                  (0, a.jsx)("button", {
                                    onClick: x,
                                    className:
                                      "p-2 hover:bg-muted rounded-lg transition-colors",
                                    children: (0, a.jsx)(A.A, {
                                      className: "h-4 w-4",
                                    }),
                                  }),
                                ],
                              }),
                            }),
                            (0, a.jsxs)("div", {
                              className: "flex-1 p-4 sm:p-6 overflow-y-auto",
                              children: [
                                p &&
                                  y.length > 0 &&
                                  (0, a.jsx)(l.P.div, {
                                    initial: { opacity: 0, y: -10 },
                                    animate: { opacity: 1, y: 0 },
                                    className:
                                      "mb-6 p-4 rounded-lg bg-primary/5 border border-primary/20",
                                    children: (0, a.jsxs)("div", {
                                      className: "flex items-center gap-3",
                                      children: [
                                        (0, a.jsx)("div", {
                                          className:
                                            "p-2 rounded-lg bg-primary/10",
                                          children: (0, a.jsx)(w.A, {
                                            className: "h-5 w-5 text-primary",
                                          }),
                                        }),
                                        (0, a.jsxs)("div", {
                                          className: "flex-1",
                                          children: [
                                            (0, a.jsx)("p", {
                                              className:
                                                "text-sm text-muted-foreground",
                                              children: "Recommended Intake",
                                            }),
                                            (0, a.jsx)("p", {
                                              className:
                                                "text-lg font-semibold text-primary",
                                              children:
                                                p >= 70
                                                  ? "".concat(
                                                      null === (t = y[0]) ||
                                                        void 0 === t
                                                        ? void 0
                                                        : t.label,
                                                      " (Most programs available)",
                                                    )
                                                  : p >= 50
                                                    ? "".concat(
                                                        (null === (s = y[1]) ||
                                                        void 0 === s
                                                          ? void 0
                                                          : s.label) ||
                                                          (null ===
                                                            (n = y[0]) ||
                                                          void 0 === n
                                                            ? void 0
                                                            : n.label),
                                                        " (More preparation time)",
                                                      )
                                                    : "".concat(
                                                        (null === (o = y[2]) ||
                                                        void 0 === o
                                                          ? void 0
                                                          : o.label) ||
                                                          (null ===
                                                            (c = y[1]) ||
                                                          void 0 === c
                                                            ? void 0
                                                            : c.label) ||
                                                          (null ===
                                                            (d = y[0]) ||
                                                          void 0 === d
                                                            ? void 0
                                                            : d.label),
                                                        " (Extra preparation recommended)",
                                                      ),
                                            }),
                                          ],
                                        }),
                                      ],
                                    }),
                                  }),
                                (0, a.jsxs)("div", {
                                  className: "text-center mb-6",
                                  children: [
                                    (0, a.jsx)(N.A, {
                                      className:
                                        "h-12 w-12 mx-auto text-primary mb-3",
                                    }),
                                    (0, a.jsx)("h3", {
                                      className: "text-lg font-semibold",
                                      children: "Choose Your Target Intake",
                                    }),
                                    (0, a.jsx)("p", {
                                      className:
                                        "text-sm text-muted-foreground",
                                      children:
                                        "We'll create a personalized timeline based on your selection",
                                    }),
                                  ],
                                }),
                                (0, a.jsx)("div", {
                                  className: "space-y-3",
                                  children: y.map((e) => {
                                    let t = R(e.intakeDate),
                                      s = "Fall" === e.season && p && p >= 70;
                                    return (0, a.jsxs)(
                                      l.P.button,
                                      {
                                        onClick: () => T(e),
                                        whileHover: { scale: 1.01 },
                                        whileTap: { scale: 0.99 },
                                        className: (0, D.cn)(
                                          "w-full p-4 rounded-lg border transition-all text-left relative",
                                          (null == v ? void 0 : v.id) === e.id
                                            ? "border-primary bg-primary/5 shadow-sm"
                                            : "border-border hover:border-primary/50",
                                        ),
                                        children: [
                                          s &&
                                            (0, a.jsx)("div", {
                                              className:
                                                "absolute -top-2 -right-2 px-2 py-0.5 bg-green-500 text-white text-xs rounded-full",
                                              children: "Recommended",
                                            }),
                                          (0, a.jsxs)("div", {
                                            className:
                                              "flex items-start justify-between",
                                            children: [
                                              (0, a.jsxs)("div", {
                                                className: "flex-1",
                                                children: [
                                                  (0, a.jsxs)("div", {
                                                    className:
                                                      "flex items-center gap-2 mb-1",
                                                    children: [
                                                      (0, a.jsx)("h4", {
                                                        className:
                                                          "font-medium",
                                                        children: e.label,
                                                      }),
                                                      (0, a.jsx)("span", {
                                                        className: (0, D.cn)(
                                                          "px-2 py-0.5 text-xs rounded-full",
                                                          "Fall" === e.season
                                                            ? "bg-orange-500/10 text-orange-600"
                                                            : "bg-primary/10 text-primary",
                                                        ),
                                                        children: e.season,
                                                      }),
                                                    ],
                                                  }),
                                                  (0, a.jsx)("p", {
                                                    className:
                                                      "text-sm text-muted-foreground mb-2",
                                                    children: e.description,
                                                  }),
                                                  (0, a.jsxs)("div", {
                                                    className:
                                                      "flex items-center gap-4 text-xs text-muted-foreground",
                                                    children: [
                                                      (0, a.jsxs)("span", {
                                                        children: [
                                                          "Apply by: ",
                                                          K(
                                                            e.applicationDeadline,
                                                          ),
                                                        ],
                                                      }),
                                                      (0, a.jsx)("span", {
                                                        children: "•",
                                                      }),
                                                      (0, a.jsxs)("span", {
                                                        children: [
                                                          t,
                                                          " days from today",
                                                        ],
                                                      }),
                                                    ],
                                                  }),
                                                ],
                                              }),
                                              (null == v ? void 0 : v.id) ===
                                                e.id &&
                                                (0, a.jsx)(C.A, {
                                                  className:
                                                    "h-5 w-5 text-primary mt-1",
                                                }),
                                            ],
                                          }),
                                        ],
                                      },
                                      e.id,
                                    );
                                  }),
                                }),
                                (0, a.jsx)("div", {
                                  className:
                                    "mt-6 p-4 rounded-lg bg-muted/50 border border-border",
                                  children: (0, a.jsxs)("div", {
                                    className: "flex items-start gap-2",
                                    children: [
                                      (0, a.jsx)(M.A, {
                                        className:
                                          "h-4 w-4 text-muted-foreground mt-0.5",
                                      }),
                                      (0, a.jsxs)("div", {
                                        className:
                                          "text-sm text-muted-foreground",
                                        children: [
                                          (0, a.jsx)("p", {
                                            className: "font-medium mb-1",
                                            children: "About Intake Periods",
                                          }),
                                          (0, a.jsx)("p", {
                                            children:
                                              "• Fall intakes (August/September) have the most program options",
                                          }),
                                          (0, a.jsx)("p", {
                                            children:
                                              "• Spring intakes (February/March) have limited programs",
                                          }),
                                          (0, a.jsx)("p", {
                                            children:
                                              "• Application deadlines are typically 2-3 months before the intake",
                                          }),
                                          (0, a.jsx)("p", {
                                            children:
                                              "• We've selected intakes with enough time for visa processing",
                                          }),
                                        ],
                                      }),
                                    ],
                                  }),
                                }),
                              ],
                            }),
                            (0, a.jsx)("div", {
                              className: "p-4 sm:p-6 border-t bg-background",
                              children: (0, a.jsxs)("div", {
                                className: "flex justify-between gap-3",
                                children: [
                                  (0, a.jsx)(E.$, {
                                    variant: "outline",
                                    onClick: x,
                                    className: "flex-1 sm:flex-none",
                                    children: "Cancel",
                                  }),
                                  (0, a.jsxs)(E.$, {
                                    onClick: () => {
                                      v && q(!0);
                                    },
                                    disabled: !v,
                                    className: "flex-1 sm:flex-none",
                                    children: [
                                      "Continue",
                                      (0, a.jsx)(F.A, {
                                        className: "h-4 w-4 ml-1",
                                      }),
                                    ],
                                  }),
                                ],
                              }),
                            }),
                          ],
                        }),
                  }),
                ],
              }),
            }),
        });
      }
      var J = s(7535),
        Y = s(99251),
        W = s(16148),
        V = s(42678),
        Z = s(1701),
        Q = s(62165),
        X = s(52119),
        ee = s(46031),
        et = s(50488),
        es = s(63604),
        ea = s(68233);
      function ei() {
        let [e, t] = (0, i.useState)(null),
          [s, n] = (0, i.useState)(!0),
          [d, m] = (0, i.useState)([]),
          [x, u] = (0, i.useState)(null),
          [p, b] = (0, i.useState)(null),
          [f, v] = (0, i.useState)(!1),
          [j, y] = (0, i.useState)(!1),
          { toast: A } = (0, et.dj)(),
          F = (0, c.useRouter)(),
          _ = (0, r.createClientComponentClient)(),
          { t: k, language: S } = (0, ea.ok)();
        (0, i.useEffect)(() => {
          !(async function () {
            try {
              let { data: e, error: s } = await _.auth.getUser();
              if (s) {
                (console.error("Error fetching user:", s), n(!1));
                return;
              }
              ((null == e ? void 0 : e.user) &&
                (t(e.user.id), await C(e.user.id)),
                n(!1));
            } catch (e) {
              (console.error("Error fetching user data:", e), n(!1));
            }
          })();
        }, [_]);
        let C = async (t) => {
            let s = t || e;
            if (s) {
              (n(!0), u(null));
              try {
                let e = await fetch(
                    "/api/student/recommendations?limit=".concat(20),
                  ),
                  t = await e.json();
                if (!e.ok) {
                  if (t.requiresProfileCompletion) {
                    (u(k("home.recommendations.error.profileIncomplete")),
                      m([]));
                    return;
                  }
                  (console.warn(
                    "Recommendations API returned non-OK status:",
                    e.status,
                    t,
                  ),
                    m([]));
                  return;
                }
                if (t.success && t.data.recommendations) {
                  let e = t.data.recommendations.map((e) => e.job.id);
                  try {
                    let { data: a, error: i } = await _.from(
                      "saved_job_postings",
                    )
                      .select("job_posting_id")
                      .eq("user_id", s)
                      .in("job_posting_id", e);
                    if (!i && a) {
                      let e = new Set(a.map((e) => e.job_posting_id));
                      t.data.recommendations.forEach((t) => {
                        t.isSaved = e.has(t.job.id);
                      });
                    }
                  } catch (e) {
                    console.error("Error checking saved jobs:", e);
                  }
                  m(t.data.recommendations);
                } else m([]);
              } catch (e) {
                (console.error("Error in fetchRecommendations:", e), m([]));
              } finally {
                n(!1);
              }
            }
          },
          P = async () => {
            if (e && !f) {
              (v(!0),
                A({
                  title: k("home.recommendations.toast.generating"),
                  description: k("home.recommendations.toast.analyzingJobs"),
                }));
              try {
                let e = await fetch("/api/student/recommendations/refresh", {
                    method: "POST",
                  }),
                  t = await e.json();
                if (!e.ok) {
                  if (404 === e.status || t.requiresProfileSetup) {
                    (A({
                      title: k(
                        "home.recommendations.toast.profileSetupRequired",
                      ),
                      description:
                        t.message ||
                        k("home.recommendations.toast.completeProfileFirst"),
                      variant: "destructive",
                    }),
                      F.push("/dashboard/profile"));
                    return;
                  }
                  if (
                    400 === e.status &&
                    "Profile too incomplete for recommendations" === t.error
                  ) {
                    (u(
                      t.message ||
                        k("home.recommendations.error.profileIncomplete"),
                    ),
                      A({
                        title: k(
                          "home.recommendations.toast.profileIncomplete",
                        ),
                        description:
                          t.message ||
                          k("home.recommendations.toast.completeMoreProfile"),
                      }));
                    return;
                  }
                  if (429 === e.status) {
                    A({
                      title: k("home.recommendations.toast.rateLimitReached"),
                      description:
                        t.error ||
                        k("home.recommendations.toast.tooManyRequests"),
                      variant: "destructive",
                    });
                    return;
                  }
                  (console.error("Error generating recommendations:", t.error),
                    A({
                      title: k("home.recommendations.toast.unableToGenerate"),
                      description: k(
                        "home.recommendations.toast.tryAgainOrUpdate",
                      ),
                      variant: "destructive",
                    }));
                  return;
                }
                (A({
                  title: k("home.recommendations.toast.updated"),
                  description: k("home.recommendations.toast.foundMatches", {
                    count: t.data.total,
                  }),
                }),
                  await C());
              } catch (e) {
                (console.error("Error refreshing recommendations:", e),
                  A({
                    title: k("home.recommendations.toast.connectionError"),
                    description: k(
                      "home.recommendations.toast.checkConnection",
                    ),
                    variant: "destructive",
                  }));
              } finally {
                v(!1);
              }
            }
          },
          I = async (t, s, a) => {
            if ((a.preventDefault(), a.stopPropagation(), !e)) {
              A({
                title: k("home.recommendations.toast.authRequired"),
                description: k("home.recommendations.toast.signInToSave"),
                variant: "destructive",
              });
              return;
            }
            b(t);
            try {
              if (
                (m((e) =>
                  e.map((e) => (e.job.id === t ? { ...e, isSaved: !s } : e)),
                ),
                s)
              ) {
                if (
                  !(
                    await fetch("/api/student/saved-jobs", {
                      method: "DELETE",
                      headers: { "Content-Type": "application/json" },
                      body: JSON.stringify({ job_posting_id: t }),
                    })
                  ).ok
                )
                  throw Error("Failed to unsave job");
                A({
                  title: k("home.recommendations.toast.jobRemoved"),
                  description: k("home.recommendations.toast.jobRemovedDesc"),
                  duration: 2e3,
                });
              } else {
                if (
                  !(
                    await fetch("/api/student/saved-jobs", {
                      method: "POST",
                      headers: { "Content-Type": "application/json" },
                      body: JSON.stringify({ job_posting_id: t }),
                    })
                  ).ok
                )
                  throw Error("Failed to save job");
                A({
                  title: k("home.recommendations.toast.jobSaved"),
                  description: k("home.recommendations.toast.jobSavedDesc"),
                  duration: 2e3,
                });
              }
            } catch (e) {
              (console.error("Error toggling save:", e),
                m((e) =>
                  e.map((e) => (e.job.id === t ? { ...e, isSaved: s } : e)),
                ),
                A({
                  title: k("home.recommendations.toast.error"),
                  description: k("home.recommendations.toast.failedToUpdate"),
                  variant: "destructive",
                }));
            } finally {
              b(null);
            }
          },
          G = (e, t) =>
            e && t
              ? "€"
                  .concat(e.toLocaleString(), "-€")
                  .concat(t.toLocaleString(), "/mo")
              : "",
          O = (e) =>
            e >= 80
              ? "text-[#2C3340] bg-[rgba(44,51,64,0.1)]"
              : e >= 60
                ? "text-[#5D5DE9] bg-[rgba(93,93,233,0.1)]"
                : "text-[rgba(44,51,64,0.7)] bg-[rgba(44,51,64,0.05)]",
          q = (e) => {
            var t;
            let s =
                null === (t = e.employer) || void 0 === t
                  ? void 0
                  : t.company_slug,
              a = e.slug;
            if (s && a) return "/dashboard/jobs/".concat(s, "/").concat(a);
            let i = (e.title_en || e.title_de || "job")
              .toLowerCase()
              .replace(/[^a-z0-9]+/g, "-")
              .replace(/^-|-$/g, "");
            return s
              ? "/dashboard/jobs/"
                  .concat(s, "/")
                  .concat(i, "-")
                  .concat(e.id.slice(0, 8))
              : "/dashboard/jobs";
          };
        return s
          ? (0, a.jsxs)("div", {
              className: (0, D.cn)(
                "bg-[#F7F8FA] rounded-xl p-6",
                "border-2 border-[rgba(44,51,64,0.1)]",
                "shadow-[0_2px_4px_rgba(44,51,64,0.06)]",
              ),
              children: [
                (0, a.jsxs)("div", {
                  className: "flex items-center gap-2 mb-4",
                  children: [
                    (0, a.jsx)(h.E, { className: "h-6 w-6 rounded-full" }),
                    (0, a.jsx)(h.E, { className: "h-6 w-48" }),
                  ],
                }),
                (0, a.jsx)("div", {
                  className: (0, D.cn)(
                    "bg-white rounded-xl overflow-hidden",
                    "border-2 border-[rgba(44,51,64,0.1)]",
                  ),
                  children: Array.from({ length: 3 }).map((e, t) =>
                    (0, a.jsxs)(
                      "div",
                      {
                        className:
                          "flex items-center gap-4 p-4 border-b border-[rgba(44,51,64,0.08)] last:border-b-0",
                        children: [
                          (0, a.jsx)(h.E, {
                            className: "h-12 w-12 rounded-lg flex-shrink-0",
                          }),
                          (0, a.jsxs)("div", {
                            className: "flex-1 space-y-2",
                            children: [
                              (0, a.jsx)(h.E, { className: "h-4 w-3/4" }),
                              (0, a.jsx)(h.E, { className: "h-3 w-1/2" }),
                            ],
                          }),
                          (0, a.jsx)(h.E, {
                            className: "h-8 w-20 rounded-full",
                          }),
                        ],
                      },
                      t,
                    ),
                  ),
                }),
              ],
            })
          : x
            ? (0, a.jsx)("div", {
                className: (0, D.cn)(
                  "bg-[#F7F8FA] rounded-xl p-6",
                  "border-2 border-[rgba(93,93,233,0.3)]",
                  "shadow-[0_2px_4px_rgba(93,93,233,0.1)]",
                ),
                children: (0, a.jsxs)("div", {
                  className: "text-center py-8",
                  children: [
                    (0, a.jsx)("div", {
                      className:
                        "mx-auto w-16 h-16 mb-4 rounded-full bg-[rgba(93,93,233,0.15)] flex items-center justify-center",
                      children: (0, a.jsx)(w.A, {
                        className: "h-8 w-8 text-[#5D5DE9]",
                      }),
                    }),
                    (0, a.jsx)("h3", {
                      className: "text-lg font-semibold text-[#2C3340] mb-2",
                      children: k("home.recommendations.error.profileRequired"),
                    }),
                    (0, a.jsx)("p", {
                      className:
                        "text-sm text-[rgba(44,51,64,0.7)] mb-6 max-w-md mx-auto",
                      children: x,
                    }),
                    (0, a.jsx)(E.$, {
                      onClick: () => F.push("/dashboard/profile"),
                      className: (0, D.cn)(
                        "bg-[#5D5DE9] hover:bg-[#2C3340] text-white",
                        "rounded-full px-6",
                        "shadow-[0_4px_12px_rgba(93,93,233,0.2)]",
                        "hover:shadow-[0_8px_20px_rgba(93,93,233,0.25)]",
                      ),
                      children: k("home.recommendations.error.completeProfile"),
                    }),
                  ],
                }),
              })
            : 0 === d.length
              ? (0, a.jsx)("div", {
                  className: (0, D.cn)(
                    "bg-[#F7F8FA] rounded-xl p-6",
                    "border-2 border-[rgba(44,51,64,0.1)]",
                    "shadow-[0_2px_4px_rgba(44,51,64,0.06)]",
                  ),
                  children: (0, a.jsxs)("div", {
                    className: "text-center py-8",
                    children: [
                      (0, a.jsx)("div", {
                        className:
                          "mx-auto w-16 h-16 mb-4 rounded-full bg-[rgba(93,93,233,0.15)] flex items-center justify-center",
                        children: (0, a.jsx)(J.A, {
                          className: "h-8 w-8 text-[#5D5DE9]",
                        }),
                      }),
                      (0, a.jsx)("h3", {
                        className: "text-lg font-semibold text-[#2C3340] mb-2",
                        children: k("home.recommendations.empty.title"),
                      }),
                      (0, a.jsx)("p", {
                        className:
                          "text-sm text-[rgba(44,51,64,0.7)] mb-6 max-w-md mx-auto",
                        children: k("home.recommendations.empty.description"),
                      }),
                      (0, a.jsxs)("div", {
                        className:
                          "flex flex-col sm:flex-row gap-3 justify-center",
                        children: [
                          (0, a.jsx)(E.$, {
                            onClick: () => F.push("/dashboard/profile"),
                            variant: "outline",
                            className: (0, D.cn)(
                              "border-2 border-[rgba(44,51,64,0.15)]",
                              "text-[#2C3340]",
                              "hover:bg-[rgba(93,93,233,0.05)] hover:border-[#5D5DE9] hover:text-[#5D5DE9]",
                              "rounded-full px-6",
                            ),
                            children: k(
                              "home.recommendations.empty.setPreferences",
                            ),
                          }),
                          (0, a.jsx)(E.$, {
                            onClick: P,
                            disabled: f,
                            className: (0, D.cn)(
                              "bg-[#5D5DE9] hover:bg-[#2C3340] text-white",
                              "rounded-full px-6",
                              "shadow-[0_4px_12px_rgba(93,93,233,0.2)]",
                              "hover:shadow-[0_8px_20px_rgba(93,93,233,0.25)]",
                              "disabled:opacity-60",
                            ),
                            children: f
                              ? (0, a.jsxs)(a.Fragment, {
                                  children: [
                                    (0, a.jsx)(Y.A, {
                                      className: "h-4 w-4 mr-2 animate-spin",
                                    }),
                                    k("home.recommendations.empty.generating"),
                                  ],
                                })
                              : (0, a.jsxs)(a.Fragment, {
                                  children: [
                                    (0, a.jsx)(J.A, {
                                      className: "h-4 w-4 mr-2",
                                    }),
                                    k("home.recommendations.empty.generate"),
                                  ],
                                }),
                          }),
                        ],
                      }),
                    ],
                  }),
                })
              : (0, a.jsxs)("div", {
                  className: (0, D.cn)(
                    "bg-[#F7F8FA] rounded-xl p-6",
                    "border-2 border-[rgba(44,51,64,0.1)]",
                    "shadow-[0_2px_4px_rgba(44,51,64,0.06),0_1px_2px_rgba(44,51,64,0.04)]",
                  ),
                  children: [
                    (0, a.jsxs)("div", {
                      className: "flex items-center justify-between mb-4",
                      children: [
                        (0, a.jsxs)("div", {
                          className: "flex items-center gap-3",
                          children: [
                            (0, a.jsx)("div", {
                              className: (0, D.cn)(
                                "p-2 rounded-xl",
                                "bg-[#5D5DE9]",
                                "shadow-[0_2px_4px_rgba(93,93,233,0.2)]",
                              ),
                              children: (0, a.jsx)(J.A, {
                                className: "h-5 w-5 text-white",
                              }),
                            }),
                            (0, a.jsxs)("div", {
                              children: [
                                (0, a.jsxs)("h2", {
                                  className: "text-lg font-bold text-[#2C3340]",
                                  children: [
                                    k("home.recommendations.title"),
                                    (0, a.jsx)("span", {
                                      className:
                                        "ml-2 text-sm font-medium text-[#5D5DE9]",
                                      children: k(
                                        "home.recommendations.matchCount",
                                        { count: d.length },
                                      ),
                                    }),
                                  ],
                                }),
                                (0, a.jsx)("p", {
                                  className:
                                    "text-xs text-[rgba(44,51,64,0.6)]",
                                  children: k("home.recommendations.subtitle"),
                                }),
                              ],
                            }),
                          ],
                        }),
                        (0, a.jsxs)(E.$, {
                          onClick: P,
                          disabled: f,
                          variant: "outline",
                          size: "sm",
                          className: (0, D.cn)(
                            "border-2 border-[rgba(44,51,64,0.15)]",
                            "text-[#2C3340]",
                            "hover:bg-[rgba(93,93,233,0.05)] hover:border-[#5D5DE9] hover:text-[#5D5DE9]",
                            "rounded-full gap-2",
                          ),
                          children: [
                            (0, a.jsx)(Y.A, {
                              className: (0, D.cn)(
                                "h-4 w-4",
                                f && "animate-spin",
                              ),
                            }),
                            f
                              ? k("home.recommendations.updating")
                              : k("home.recommendations.refresh"),
                          ],
                        }),
                      ],
                    }),
                    (0, a.jsx)("div", {
                      className: (0, D.cn)(
                        "bg-white",
                        "border-2 border-[rgba(44,51,64,0.1)]",
                        "rounded-xl",
                        "shadow-[0_2px_4px_rgba(44,51,64,0.06),0_1px_2px_rgba(44,51,64,0.04)]",
                        "overflow-hidden",
                      ),
                      children: (j ? d : d.slice(0, 5)).map((e, t) => {
                        var s, i, r, n, c, d;
                        let m = e.job,
                          x = m.title_en || m.title_de || "Ausbildung Position",
                          h =
                            (null === (s = m.employer) || void 0 === s
                              ? void 0
                              : s.company_name) || "Company",
                          u =
                            null === (i = m.employer) || void 0 === i
                              ? void 0
                              : i.company_logo_url,
                          b = G(m.salary_min, m.salary_max),
                          f = Math.round(e.match_score),
                          v = m.start_date
                            ? new Date(m.start_date).toLocaleDateString(
                                "en-US",
                                { month: "short", year: "numeric" },
                              )
                            : null;
                        return (0, a.jsx)(
                          l.P.div,
                          {
                            initial: { opacity: 0, y: 10 },
                            animate: { opacity: 1, y: 0 },
                            transition: { duration: 0.2, delay: 0.05 * t },
                            children: (0, a.jsxs)(g(), {
                              href: q(m),
                              className: (0, D.cn)(
                                "group block transition-all duration-200",
                                "bg-white",
                                "border-b border-[rgba(44,51,64,0.08)] last:border-b-0",
                                "hover:bg-[#F7F8FA]",
                                e.isSaved && "bg-[rgba(93,93,233,0.02)]",
                              ),
                              children: [
                                (0, a.jsxs)("div", {
                                  className:
                                    "flex md:hidden items-start gap-3 py-4 px-4",
                                  children: [
                                    (0, a.jsx)("div", {
                                      className: "flex-shrink-0",
                                      children: u
                                        ? (0, a.jsx)("div", {
                                            className:
                                              "w-10 h-10 rounded overflow-hidden bg-[#EEF0F4]",
                                            children: (0, a.jsx)(
                                              es.OptimizedImage,
                                              {
                                                src: u,
                                                alt: h,
                                                width: 40,
                                                height: 40,
                                                className:
                                                  "w-full h-full object-cover",
                                                sizes: "40px",
                                                priority: !1,
                                                quality: 75,
                                              },
                                            ),
                                          })
                                        : (0, a.jsx)("div", {
                                            className:
                                              "w-10 h-10 rounded bg-[#5D5DE9] flex items-center justify-center",
                                            children: (0, a.jsx)(W.A, {
                                              className: "w-5 h-5 text-white",
                                            }),
                                          }),
                                    }),
                                    (0, a.jsxs)("div", {
                                      className: "flex-1 min-w-0",
                                      children: [
                                        (0, a.jsxs)("div", {
                                          className:
                                            "flex items-center gap-2 mb-1",
                                          children: [
                                            (0, a.jsxs)("span", {
                                              className: (0, D.cn)(
                                                "inline-flex items-center gap-1 px-2 py-0.5 rounded-full text-xs font-semibold",
                                                O(f),
                                              ),
                                              children: [
                                                (0, a.jsx)(o.A, {
                                                  className: "h-3 w-3",
                                                }),
                                                f,
                                                "%",
                                              ],
                                            }),
                                            (null === (r = m.employer) ||
                                            void 0 === r
                                              ? void 0
                                              : r.is_pro_subscriber) &&
                                              (0, a.jsx)("span", {
                                                className:
                                                  "px-2 py-0.5 bg-[rgba(93,93,233,0.15)] text-[#5D5DE9] rounded-full text-xs font-medium",
                                                children: k(
                                                  "home.recommendations.premium",
                                                ),
                                              }),
                                          ],
                                        }),
                                        (0, a.jsx)("h3", {
                                          className:
                                            "text-sm font-semibold text-[#2C3340] line-clamp-1 mb-0.5 group-hover:text-[#5D5DE9] transition-colors",
                                          children: x,
                                        }),
                                        (0, a.jsxs)("div", {
                                          className:
                                            "flex items-center gap-1.5 text-xs text-[rgba(44,51,64,0.7)] mb-1.5",
                                          children: [
                                            (0, a.jsx)("span", {
                                              className: "font-medium truncate",
                                              children: h,
                                            }),
                                            (null === (n = m.employer) ||
                                            void 0 === n
                                              ? void 0
                                              : n.is_verified) &&
                                              (0, a.jsx)(V.A, {
                                                className:
                                                  "w-3 h-3 text-[#5D5DE9] flex-shrink-0",
                                              }),
                                          ],
                                        }),
                                        (0, a.jsxs)("div", {
                                          className:
                                            "flex flex-wrap items-center gap-x-3 gap-y-1 text-xs text-[rgba(44,51,64,0.6)]",
                                          children: [
                                            m.city &&
                                              (0, a.jsxs)("span", {
                                                className:
                                                  "flex items-center gap-1",
                                                children: [
                                                  (0, a.jsx)(Z.A, {
                                                    className: "w-3 h-3",
                                                  }),
                                                  m.city,
                                                ],
                                              }),
                                            m.sector &&
                                              (0, a.jsx)("span", {
                                                className:
                                                  "px-2 py-0.5 bg-[rgba(93,93,233,0.1)] text-[#5D5DE9] rounded-full text-xs font-medium",
                                                children: m.sector,
                                              }),
                                            b &&
                                              (0, a.jsxs)("span", {
                                                className:
                                                  "flex items-center gap-1",
                                                children: [
                                                  (0, a.jsx)(Q.A, {
                                                    className: "w-3 h-3",
                                                  }),
                                                  b,
                                                ],
                                              }),
                                          ],
                                        }),
                                        e.recommendation_reason &&
                                          (0, a.jsxs)("div", {
                                            className:
                                              "mt-2 flex items-start gap-1.5 text-xs text-[rgba(44,51,64,0.6)]",
                                            children: [
                                              (0, a.jsx)(w.A, {
                                                className:
                                                  "w-3 h-3 flex-shrink-0 mt-0.5 text-[#5D5DE9]",
                                              }),
                                              (0, a.jsx)("span", {
                                                className: "line-clamp-1",
                                                children:
                                                  e.recommendation_reason,
                                              }),
                                            ],
                                          }),
                                      ],
                                    }),
                                    (0, a.jsx)("div", {
                                      className:
                                        "flex items-center gap-1 flex-shrink-0",
                                      children: (0, a.jsx)("button", {
                                        onClick: (t) => I(m.id, !!e.isSaved, t),
                                        disabled: p === m.id,
                                        className: (0, D.cn)(
                                          "p-2 rounded-full transition-all duration-200",
                                          e.isSaved
                                            ? "text-[#5D5DE9]"
                                            : "text-[#2C3340]/30 hover:text-[#5D5DE9]",
                                        ),
                                        children: (0, a.jsx)(X.A, {
                                          className: (0, D.cn)(
                                            "w-4 h-4",
                                            e.isSaved && "fill-current",
                                          ),
                                        }),
                                      }),
                                    }),
                                  ],
                                }),
                                (0, a.jsxs)("div", {
                                  className:
                                    "hidden md:flex items-center gap-4 py-4 px-6",
                                  children: [
                                    (0, a.jsx)("div", {
                                      className: "flex-shrink-0",
                                      children: u
                                        ? (0, a.jsx)("div", {
                                            className:
                                              "w-12 h-12 rounded-lg overflow-hidden bg-[#EEF0F4]",
                                            children: (0, a.jsx)(
                                              es.OptimizedImage,
                                              {
                                                src: u,
                                                alt: h,
                                                width: 48,
                                                height: 48,
                                                className:
                                                  "w-full h-full object-cover",
                                                sizes: "48px",
                                                priority: !1,
                                                quality: 75,
                                              },
                                            ),
                                          })
                                        : (0, a.jsx)("div", {
                                            className:
                                              "w-12 h-12 rounded-lg bg-[#5D5DE9] flex items-center justify-center",
                                            children: (0, a.jsx)(W.A, {
                                              className: "w-6 h-6 text-white",
                                            }),
                                          }),
                                    }),
                                    (0, a.jsx)("div", {
                                      className: "flex-1 min-w-0",
                                      children: (0, a.jsxs)("div", {
                                        className:
                                          "flex items-start justify-between gap-4",
                                        children: [
                                          (0, a.jsxs)("div", {
                                            className: "flex-1 min-w-0",
                                            children: [
                                              (0, a.jsx)("h3", {
                                                className:
                                                  "text-base font-semibold text-[#2C3340] line-clamp-1 mb-0.5 group-hover:text-[#5D5DE9] transition-colors",
                                                children: x,
                                              }),
                                              (0, a.jsxs)("div", {
                                                className:
                                                  "flex items-center gap-2 text-sm text-[rgba(44,51,64,0.7)]",
                                                children: [
                                                  (0, a.jsx)("span", {
                                                    className: "font-medium",
                                                    children: h,
                                                  }),
                                                  (null === (c = m.employer) ||
                                                  void 0 === c
                                                    ? void 0
                                                    : c.is_verified) &&
                                                    (0, a.jsx)(V.A, {
                                                      className:
                                                        "w-3.5 h-3.5 text-[#5D5DE9] flex-shrink-0",
                                                    }),
                                                  (null === (d = m.employer) ||
                                                  void 0 === d
                                                    ? void 0
                                                    : d.is_pro_subscriber) &&
                                                    (0, a.jsx)("span", {
                                                      className:
                                                        "px-2 py-0.5 bg-[rgba(93,93,233,0.15)] text-[#5D5DE9] rounded-full text-xs font-medium",
                                                      children: k(
                                                        "home.recommendations.premium",
                                                      ),
                                                    }),
                                                ],
                                              }),
                                              (0, a.jsxs)("div", {
                                                className:
                                                  "flex flex-wrap items-center gap-x-4 gap-y-1 mt-2 text-xs text-[rgba(44,51,64,0.6)]",
                                                children: [
                                                  m.city &&
                                                    (0, a.jsxs)("span", {
                                                      className:
                                                        "flex items-center gap-1",
                                                      children: [
                                                        (0, a.jsx)(Z.A, {
                                                          className:
                                                            "w-3.5 h-3.5 text-[#5D5DE9]",
                                                        }),
                                                        m.city,
                                                      ],
                                                    }),
                                                  m.sector &&
                                                    (0, a.jsx)("span", {
                                                      className:
                                                        "px-2 py-0.5 bg-[rgba(93,93,233,0.1)] text-[#5D5DE9] rounded-full text-xs font-medium",
                                                      children: m.sector,
                                                    }),
                                                  b &&
                                                    (0, a.jsxs)("span", {
                                                      className:
                                                        "flex items-center gap-1 font-medium text-[#2C3340]",
                                                      children: [
                                                        (0, a.jsx)(Q.A, {
                                                          className:
                                                            "w-3.5 h-3.5 text-[#5D5DE9]",
                                                        }),
                                                        b,
                                                      ],
                                                    }),
                                                  v &&
                                                    (0, a.jsxs)("span", {
                                                      className:
                                                        "flex items-center gap-1",
                                                      children: [
                                                        (0, a.jsx)(N.A, {
                                                          className:
                                                            "w-3.5 h-3.5 text-[#5D5DE9]",
                                                        }),
                                                        v,
                                                      ],
                                                    }),
                                                  e.recommendation_reason &&
                                                    (0, a.jsxs)("span", {
                                                      className:
                                                        "flex items-center gap-1 text-[rgba(44,51,64,0.5)]",
                                                      children: [
                                                        (0, a.jsx)(w.A, {
                                                          className:
                                                            "w-3.5 h-3.5 text-[#5D5DE9]",
                                                        }),
                                                        e.recommendation_reason,
                                                      ],
                                                    }),
                                                ],
                                              }),
                                            ],
                                          }),
                                          (0, a.jsxs)("div", {
                                            className:
                                              "flex items-center gap-3 flex-shrink-0",
                                            children: [
                                              (0, a.jsxs)("div", {
                                                className: (0, D.cn)(
                                                  "flex items-center gap-1.5 px-3 py-1.5 rounded-full text-sm font-semibold",
                                                  O(f),
                                                ),
                                                children: [
                                                  (0, a.jsx)(o.A, {
                                                    className: "h-4 w-4",
                                                  }),
                                                  k(
                                                    "home.recommendations.match.percentMatch",
                                                    { percent: f },
                                                  ),
                                                ],
                                              }),
                                              (0, a.jsx)("button", {
                                                onClick: (t) =>
                                                  I(m.id, !!e.isSaved, t),
                                                disabled: p === m.id,
                                                className: (0, D.cn)(
                                                  "p-2 rounded-full transition-all duration-200",
                                                  e.isSaved
                                                    ? "text-[#5D5DE9]"
                                                    : "text-[#2C3340]/30 hover:text-[#5D5DE9]",
                                                ),
                                                children: (0, a.jsx)(X.A, {
                                                  className: (0, D.cn)(
                                                    "w-5 h-5",
                                                    e.isSaved && "fill-current",
                                                  ),
                                                }),
                                              }),
                                              (0, a.jsxs)(E.$, {
                                                size: "sm",
                                                className: (0, D.cn)(
                                                  "bg-[#5D5DE9] hover:bg-[#2C3340] text-white",
                                                  "rounded-full px-4",
                                                  "shadow-[0_2px_8px_rgba(93,93,233,0.2)]",
                                                  "hover:shadow-[0_4px_12px_rgba(93,93,233,0.3)]",
                                                  "transition-all duration-200",
                                                  "gap-1.5",
                                                ),
                                                children: [
                                                  k(
                                                    "home.recommendations.view",
                                                  ),
                                                  (0, a.jsx)(ee.A, {
                                                    className:
                                                      "h-3.5 w-3.5 group-hover:translate-x-0.5 transition-transform",
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
                          },
                          e.id,
                        );
                      }),
                    }),
                    d.length > 5 &&
                      (0, a.jsx)("div", {
                        className: "text-center pt-4",
                        children: (0, a.jsx)(E.$, {
                          variant: "outline",
                          onClick: () => y(!j),
                          className: (0, D.cn)(
                            "border-2 border-[rgba(44,51,64,0.15)]",
                            "bg-white",
                            "text-[#2C3340]",
                            "hover:bg-[rgba(93,93,233,0.05)] hover:border-[#5D5DE9] hover:text-[#5D5DE9]",
                            "rounded-full px-6 gap-2",
                          ),
                          children: j
                            ? (0, a.jsx)(a.Fragment, {
                                children: k("home.recommendations.showLess"),
                              })
                            : (0, a.jsxs)(a.Fragment, {
                                children: [
                                  k("home.recommendations.showMore", {
                                    count: d.length - 5,
                                  }),
                                  (0, a.jsx)(ee.A, { className: "h-4 w-4" }),
                                ],
                              }),
                        }),
                      }),
                    (0, a.jsx)("div", {
                      className: "text-center pt-3",
                      children: (0, a.jsxs)(E.$, {
                        variant: "ghost",
                        onClick: () => F.push("/dashboard/jobs"),
                        className: (0, D.cn)(
                          "text-[rgba(44,51,64,0.6)]",
                          "hover:text-[#5D5DE9] hover:bg-transparent",
                          "rounded-full px-4 gap-2 text-sm",
                        ),
                        children: [
                          k("home.recommendations.viewAllJobs"),
                          (0, a.jsx)(ee.A, { className: "h-3.5 w-3.5" }),
                        ],
                      }),
                    }),
                  ],
                });
      }
      var er = s(34025),
        el = s(11166);
      let en = "smartHeroCard_dismissed";
      function eo(e) {
        let {
            completionPercentage: t,
            eligibilityScore: s,
            recommendationsCount: r,
            hasTimeline: n,
            isLoading: c = !1,
            applicationsCount: d = 0,
            className: m,
          } = e,
          [x, u] = (0, i.useState)(!1),
          [p, b] = (0, i.useState)(!1),
          { t: v } = (0, ea.ok)();
        if (
          ((0, i.useEffect)(() => {
            ("true" === localStorage.getItem(en) && u(!0), b(!0));
          }, []),
          x)
        )
          return null;
        if (c || !p)
          return (0, a.jsx)("div", {
            className: m,
            children: (0, a.jsx)("div", {
              className:
                "relative overflow-hidden rounded-2xl p-6 md:p-8 bg-gradient-to-br from-[#5D5DE9] to-[#e88a0f]",
              children: (0, a.jsxs)("div", {
                className:
                  "relative z-10 flex flex-col md:flex-row md:items-center md:justify-between gap-6",
                children: [
                  (0, a.jsxs)("div", {
                    className: "flex-1 max-w-2xl",
                    children: [
                      (0, a.jsx)("div", {
                        className: "flex items-center gap-3 mb-4",
                        children: (0, a.jsx)(h.E, {
                          className: "w-12 h-12 rounded-xl bg-white/20",
                        }),
                      }),
                      (0, a.jsx)(h.E, {
                        className: "h-8 w-64 mb-2 bg-white/20",
                      }),
                      (0, a.jsx)(h.E, {
                        className: "h-5 w-48 mb-3 bg-white/20",
                      }),
                      (0, a.jsx)(h.E, { className: "h-4 w-80 bg-white/20" }),
                    ],
                  }),
                  (0, a.jsx)("div", {
                    className: "flex-shrink-0",
                    children: (0, a.jsx)(h.E, {
                      className: "h-12 w-40 rounded-full bg-white/30",
                    }),
                  }),
                ],
              }),
            }),
          });
        let j =
            t < 30
              ? "newcomer"
              : t < 50 && !s
                ? "building"
                : t >= 50 && d > 0
                  ? "applying"
                  : t < 70
                    ? "ready"
                    : "active",
          N = {
            newcomer: {
              title: v("home.smartHero.newcomer.title"),
              subtitle: v("home.smartHero.newcomer.subtitle"),
              description: v("home.smartHero.newcomer.description", {
                percent: t,
              }),
              cta: v("home.smartHero.newcomer.cta"),
              href: "/dashboard/profile",
              icon: er.A,
              gradient: "from-[#2C3340] to-[#3F4A5C]",
              accentColor: "#5D5DE9",
            },
            building: {
              title: v("home.smartHero.building.title"),
              subtitle: v("home.smartHero.building.subtitle"),
              description: v("home.smartHero.building.description"),
              cta: v("home.smartHero.building.cta"),
              href: "/dashboard/tools/eligibility",
              icon: w.A,
              gradient: "from-[#5D5DE9] to-[#e88a0f]",
              accentColor: "#2C3340",
            },
            applying: {
              title: v("home.smartHero.applying.title"),
              subtitle: v("home.smartHero.applying.subtitle", { count: d }),
              description: v("home.smartHero.applying.description"),
              cta: v("home.smartHero.applying.cta"),
              href: "/dashboard/jobs",
              icon: el.A,
              gradient: "from-[#5D5DE9] to-[#e88a0f]",
              accentColor: "#2C3340",
            },
            ready: {
              title: v("home.smartHero.ready.title"),
              subtitle: v("home.smartHero.ready.subtitle"),
              description: s
                ? v("home.smartHero.ready.descriptionWithScore", { percent: s })
                : v("home.smartHero.ready.descriptionDefault"),
              cta: v("home.smartHero.ready.cta"),
              href: "/dashboard/jobs",
              icon: y.A,
              gradient: "from-[#2C3340] to-[#3F4A5C]",
              accentColor: "#5D5DE9",
            },
            active: {
              title:
                r > 0
                  ? v("home.smartHero.active.titleWithCount", { count: r })
                  : v("home.smartHero.active.titleDefault"),
              subtitle: v("home.smartHero.active.subtitle"),
              description: v(
                r > 0
                  ? "home.smartHero.active.descriptionWithCount"
                  : "home.smartHero.active.descriptionDefault",
              ),
              cta: v(
                r > 0
                  ? "home.smartHero.active.ctaView"
                  : "home.smartHero.active.ctaGenerate",
              ),
              href: "#recommendations",
              icon: J.A,
              gradient: "from-[#5D5DE9] to-[#e88a0f]",
              accentColor: "#2C3340",
            },
          }[j],
          F = N.icon;
        return (0, a.jsx)(f.N, {
          children: (0, a.jsx)(l.P.div, {
            initial: { opacity: 0, y: 20 },
            animate: { opacity: 1, y: 0 },
            exit: { opacity: 0, y: -20, height: 0 },
            transition: { duration: 0.4 },
            className: m,
            children: (0, a.jsx)(g(), {
              href: N.href,
              onClick: (e) => {
                if ("#recommendations" === N.href) {
                  e.preventDefault();
                  let t = document.getElementById("recommendations");
                  t && t.scrollIntoView({ behavior: "smooth", block: "start" });
                }
              },
              children: (0, a.jsxs)("div", {
                className: (0, D.cn)(
                  "relative overflow-hidden rounded-2xl p-6 md:p-8 cursor-pointer",
                  "bg-gradient-to-br",
                  N.gradient,
                  "shadow-lg hover:shadow-xl transition-all duration-300",
                  "group",
                ),
                children: [
                  (0, a.jsx)("button", {
                    onClick: (e) => {
                      (e.preventDefault(),
                        e.stopPropagation(),
                        u(!0),
                        localStorage.setItem(en, "true"));
                    },
                    className:
                      "absolute top-4 right-4 z-20 p-1.5 rounded-full bg-white/10 hover:bg-white/20 transition-colors",
                    "aria-label": "Dismiss card",
                    children: (0, a.jsx)(A.A, {
                      className: "h-4 w-4 text-white",
                    }),
                  }),
                  (0, a.jsxs)("div", {
                    className: "absolute inset-0 opacity-10",
                    children: [
                      (0, a.jsx)("div", {
                        className:
                          "absolute top-0 right-0 w-64 h-64 bg-white rounded-full -translate-y-1/2 translate-x-1/2",
                      }),
                      (0, a.jsx)("div", {
                        className:
                          "absolute bottom-0 left-0 w-48 h-48 bg-white rounded-full translate-y-1/2 -translate-x-1/2",
                      }),
                    ],
                  }),
                  (0, a.jsxs)("div", {
                    className:
                      "relative z-10 flex flex-col md:flex-row md:items-center md:justify-between gap-6",
                    children: [
                      (0, a.jsxs)("div", {
                        className: "flex-1 max-w-2xl",
                        children: [
                          (0, a.jsxs)("div", {
                            className: "flex items-center gap-3 mb-4",
                            children: [
                              (0, a.jsx)("div", {
                                className: "p-3 rounded-xl",
                                style: {
                                  backgroundColor: "".concat(
                                    N.accentColor,
                                    "30",
                                  ),
                                },
                                children: (0, a.jsx)(F, {
                                  className: "h-6 w-6 text-white",
                                }),
                              }),
                              "active" === j &&
                                r > 0 &&
                                (0, a.jsxs)("span", {
                                  className:
                                    "px-3 py-1 rounded-full bg-white/20 text-white text-sm font-medium flex items-center gap-1.5",
                                  children: [
                                    (0, a.jsx)(o.A, {
                                      className: "h-3.5 w-3.5",
                                    }),
                                    v("home.smartHero.badges.newMatches"),
                                  ],
                                }),
                              "newcomer" === j &&
                                (0, a.jsx)("span", {
                                  className:
                                    "px-3 py-1 rounded-full bg-white/20 text-white text-sm font-medium",
                                  children: v(
                                    "home.smartHero.badges.percentComplete",
                                    { percent: t },
                                  ),
                                }),
                              "building" === j &&
                                s &&
                                (0, a.jsxs)("span", {
                                  className:
                                    "px-3 py-1 rounded-full bg-white/20 text-white text-sm font-medium flex items-center gap-1.5",
                                  children: [
                                    (0, a.jsx)(V.A, {
                                      className: "h-3.5 w-3.5",
                                    }),
                                    v("home.smartHero.badges.percentEligible", {
                                      percent: s,
                                    }),
                                  ],
                                }),
                              "applying" === j &&
                                (0, a.jsxs)("span", {
                                  className:
                                    "px-3 py-1 rounded-full bg-white/20 text-white text-sm font-medium flex items-center gap-1.5",
                                  children: [
                                    (0, a.jsx)(el.A, {
                                      className: "h-3.5 w-3.5",
                                    }),
                                    v(
                                      "home.smartHero.badges.applicationsInProgress",
                                      { count: d },
                                    ),
                                  ],
                                }),
                            ],
                          }),
                          (0, a.jsx)("h2", {
                            className:
                              "text-2xl md:text-3xl font-bold text-white mb-2",
                            children: N.title,
                          }),
                          (0, a.jsx)("p", {
                            className: "text-white/90 text-lg mb-3",
                            children: N.subtitle,
                          }),
                          (0, a.jsx)("p", {
                            className:
                              "text-white/70 text-sm md:text-base max-w-lg",
                            children: N.description,
                          }),
                        ],
                      }),
                      (0, a.jsx)("div", {
                        className: "flex-shrink-0",
                        children: (0, a.jsxs)(E.$, {
                          size: "lg",
                          className: (0, D.cn)(
                            "rounded-full px-8 py-6 text-base font-semibold",
                            "bg-white hover:bg-white/90",
                            "shadow-lg hover:shadow-xl",
                            "transition-all duration-300",
                            "group-hover:scale-105",
                          ),
                          style: {
                            color: N.gradient.includes("#2C3340")
                              ? "#2C3340"
                              : "#5D5DE9",
                          },
                          children: [
                            N.cta,
                            (0, a.jsx)(ee.A, {
                              className:
                                "ml-2 h-5 w-5 group-hover:translate-x-1 transition-transform",
                            }),
                          ],
                        }),
                      }),
                    ],
                  }),
                ],
              }),
            }),
          }),
        });
      }
      var ec = s(25385);
      function ed(e) {
        let {
            label: t,
            value: s,
            subtext: i,
            icon: r,
            href: l,
            progress: n,
          } = e,
          o = (0, a.jsxs)("div", {
            className: (0, D.cn)(
              "relative flex flex-col items-center justify-center p-3 md:p-4",
              "rounded-xl overflow-hidden",
              "min-h-[85px] md:min-h-[95px]",
              "bg-gradient-to-br from-[#5D5DE9] via-[#F5A733] to-[#2C3340]",
              "shadow-md shadow-[#5D5DE9]/20",
              "transition-all duration-300 ease-out",
              l &&
                "cursor-pointer hover:shadow-lg hover:shadow-[#5D5DE9]/30 hover:scale-[1.02] hover:-translate-y-0.5",
            ),
            children: [
              (0, a.jsx)("div", {
                className: "p-2 rounded-lg mb-1.5 bg-white/20",
                children: (0, a.jsx)(r, {
                  className: "h-4 w-4 md:h-5 md:w-5 text-white",
                }),
              }),
              (0, a.jsx)("p", {
                className: "text-xl md:text-2xl font-bold text-white",
                children: s,
              }),
              (0, a.jsx)("p", {
                className: "text-[11px] font-medium text-white/90 mt-0.5",
                children: t,
              }),
              void 0 !== n &&
                (0, a.jsx)("div", {
                  className:
                    "absolute bottom-0 left-0 right-0 h-1.5 bg-white/20",
                  children: (0, a.jsx)("div", {
                    className: "h-full transition-all duration-500 bg-white",
                    style: { width: "".concat(n, "%") },
                  }),
                }),
              i &&
                (0, a.jsx)("span", {
                  className:
                    "absolute top-2 right-2 text-[10px] font-semibold px-2 py-0.5 rounded-full bg-white/30 text-white",
                  children: i,
                }),
            ],
          });
        return l ? (0, a.jsx)(g(), { href: l, children: o }) : o;
      }
      function em(e) {
        let {
            profileStrength: t,
            eligibilityScore: s,
            germanLevel: i,
            savedJobsCount: r,
            applicationsCount: n,
            applicationsPending: o = 0,
            className: c,
          } = e,
          { t: d } = (0, ea.ok)(),
          m = [
            {
              label: d("home.metrics.profile"),
              value: "".concat(t),
              icon: ec.A,
              href: "/dashboard/profile",
              progress: t,
            },
            {
              label: d("home.metrics.eligibility"),
              value: s ? "".concat(s, "%") : "—",
              icon: w.A,
              href: "/dashboard/tools/eligibility",
              progress: s || 0,
            },
            {
              label: d("home.metrics.german"),
              value: i && "" !== i.trim() ? i.toUpperCase() : "—",
              icon: T.A,
              href: "/dashboard/german",
            },
            {
              label: d("home.metrics.applications"),
              value: n,
              icon: el.A,
              href: "/dashboard/applications",
              subtext: o > 0 ? d("home.metrics.pending", { count: o }) : void 0,
            },
            {
              label: d("home.metrics.saved"),
              value: r,
              icon: X.A,
              href: "/dashboard/jobs/saved",
            },
          ];
        return (0, a.jsx)(l.P.div, {
          initial: { opacity: 0, y: 10 },
          animate: { opacity: 1, y: 0 },
          transition: { duration: 0.4, delay: 0.1 },
          className: c,
          children: (0, a.jsx)("div", {
            className:
              "grid grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-3 md:gap-4",
            children: m.map((e, t) =>
              (0, a.jsx)(
                l.P.div,
                {
                  initial: { opacity: 0, y: 10 },
                  animate: { opacity: 1, y: 0 },
                  transition: { duration: 0.3, delay: 0.05 * t },
                  children: (0, a.jsx)(ed, { ...e }),
                },
                e.label,
              ),
            ),
          }),
        });
      }
      var ex = s(69312),
        eh = s(80187),
        eu = s(46605),
        ep = s(95282);
      function eg(e) {
        let { className: t } = e,
          { features: s, completionPercentage: i, isLoading: r } = (0, eu._K)(),
          { t: n } = (0, ea.ok)(),
          o = [
            {
              id: "browse-jobs",
              title: n("home.quickActionsGrid.browseJobs.title"),
              description: n("home.quickActionsGrid.browseJobs.description"),
              icon: y.A,
              href: "/dashboard/jobs",
              color: "#5D5DE9",
            },
            {
              id: "application-kit",
              title: n("home.quickActionsGrid.applicationKit.title"),
              description: n(
                "home.quickActionsGrid.applicationKit.description",
              ),
              icon: el.A,
              href: "/dashboard/applications",
              color: "#2C3340",
            },
            {
              id: "build-cv",
              title: n("home.quickActionsGrid.buildCv.title"),
              description: n("home.quickActionsGrid.buildCv.description"),
              icon: H.A,
              href: "/dashboard/cv-builder",
              color: "#2C3340",
              featureKey: "cvBuilder",
              threshold: eu.EU.CV_BUILDER,
            },
            {
              id: "improve-german",
              title: n("home.quickActionsGrid.improveGerman.title"),
              description: n("home.quickActionsGrid.improveGerman.description"),
              icon: j.A,
              href: "/dashboard/german",
              color: "#5D5DE9",
              featureKey: "germanLearning",
              threshold: eu.EU.GERMAN_LEARNING,
            },
          ];
        return (0, a.jsx)("div", {
          className: t,
          children: (0, a.jsx)("div", {
            className: "grid grid-cols-2 md:grid-cols-4 gap-4",
            children: o.map((e, t) => {
              let r = e.icon,
                o = e.featureKey && !s[e.featureKey],
                c = e.threshold ? e.threshold - i : 0,
                d = (0, a.jsx)(
                  l.P.div,
                  {
                    initial: { opacity: 0, y: 20 },
                    animate: { opacity: 1, y: 0 },
                    transition: { duration: 0.3, delay: 0.05 * t },
                    className: "relative h-full",
                    children: (0, a.jsxs)(eh.Zp, {
                      className: (0, D.cn)(
                        "p-5 transition-all border-[rgba(44,51,64,0.08)] group h-full",
                        "min-h-[130px] flex flex-col justify-center",
                        o
                          ? "cursor-not-allowed opacity-60"
                          : "hover:shadow-lg cursor-pointer hover:border-[#5D5DE9]/30 hover:bg-[#F7F8FA]/50",
                      ),
                      children: [
                        o &&
                          (0, a.jsxs)("div", {
                            className:
                              "absolute inset-0 bg-white/70 backdrop-blur-[1px] rounded-xl z-10 flex flex-col items-center justify-center",
                            children: [
                              (0, a.jsx)("div", {
                                className:
                                  "p-2.5 rounded-full bg-[#EEF0F4] mb-2",
                                children: (0, a.jsx)(ex.A, {
                                  className:
                                    "h-4 w-4 text-[rgba(44,51,64,0.4)]",
                                }),
                              }),
                              (0, a.jsx)("span", {
                                className:
                                  "text-xs font-medium text-[rgba(44,51,64,0.5)] text-center px-2",
                                children: n(
                                  "home.quickActionsGrid.locked.percentToUnlock",
                                  { percent: c },
                                ),
                              }),
                            ],
                          }),
                        (0, a.jsxs)("div", {
                          className:
                            "flex flex-col items-center text-center space-y-3",
                          children: [
                            (0, a.jsx)("div", {
                              className: (0, D.cn)(
                                "p-3.5 rounded-xl transition-all duration-200",
                                !o &&
                                  "group-hover:scale-105 group-hover:shadow-md",
                              ),
                              style: {
                                backgroundColor: "".concat(e.color, "15"),
                              },
                              children: (0, a.jsx)(r, {
                                className: "h-6 w-6",
                                style: { color: e.color },
                              }),
                            }),
                            (0, a.jsxs)("div", {
                              children: [
                                (0, a.jsx)("p", {
                                  className:
                                    "font-semibold text-[#2C3340] mb-0.5 text-sm",
                                  children: e.title,
                                }),
                                (0, a.jsx)("p", {
                                  className:
                                    "text-xs text-[rgba(44,51,64,0.6)] leading-tight",
                                  children: e.description,
                                }),
                              ],
                            }),
                          ],
                        }),
                      ],
                    }),
                  },
                  e.id,
                );
              return o
                ? (0, a.jsx)(
                    ep.Bc,
                    {
                      children: (0, a.jsxs)(ep.m_, {
                        children: [
                          (0, a.jsx)(ep.k$, {
                            asChild: !0,
                            children: (0, a.jsx)("div", { children: d }),
                          }),
                          (0, a.jsxs)(ep.ZI, {
                            children: [
                              (0, a.jsx)("p", {
                                className: "text-sm",
                                children: n(
                                  "home.quickActionsGrid.locked.completeProfile",
                                  { percent: c },
                                ),
                              }),
                              (0, a.jsx)("p", {
                                className: "text-xs text-muted-foreground mt-1",
                                children: n(
                                  "home.quickActionsGrid.locked.updateToUnlock",
                                  { feature: e.title },
                                ),
                              }),
                            ],
                          }),
                        ],
                      }),
                    },
                    e.id,
                  )
                : (0, a.jsx)(g(), { href: e.href, children: d }, e.id);
            }),
          }),
        });
      }
      var eb = s(59827);
      let ef = [
        { key: "preparing", label: "Prep", color: "#6B7280" },
        { key: "applied", label: "Applied", color: "#5D5DE9" },
        { key: "waiting", label: "Wait", color: "#3B82F6" },
        { key: "interview", label: "Interview", color: "#8B5CF6" },
        { key: "accepted", label: "Offer", color: "#10B981" },
      ];
      function ev(e) {
        let { stats: t, pendingCount: s, totalCount: i, className: r } = e,
          { t: n } = (0, ea.ok)();
        return 0 === i
          ? (0, a.jsx)(l.P.div, {
              initial: { opacity: 0, y: 20 },
              animate: { opacity: 1, y: 0 },
              transition: { duration: 0.4, delay: 0.15 },
              className: r,
              children: (0, a.jsx)(eh.Zp, {
                className:
                  "p-6 border-[rgba(44,51,64,0.08)] bg-gradient-to-br from-white to-[#F7F8FA]/30",
                children: (0, a.jsxs)("div", {
                  className:
                    "flex flex-col md:flex-row md:items-center md:justify-between gap-4",
                  children: [
                    (0, a.jsxs)("div", {
                      className: "flex items-center gap-4",
                      children: [
                        (0, a.jsx)("div", {
                          className: "p-3 rounded-xl bg-[#5D5DE9]/10",
                          children: (0, a.jsx)(el.A, {
                            className: "h-6 w-6 text-[#5D5DE9]",
                          }),
                        }),
                        (0, a.jsxs)("div", {
                          children: [
                            (0, a.jsx)("h3", {
                              className: "font-semibold text-[#2C3340] mb-1",
                              children: n(
                                "home.applicationsOverview.emptyTitle",
                              ),
                            }),
                            (0, a.jsx)("p", {
                              className: "text-sm text-[rgba(44,51,64,0.6)]",
                              children: n(
                                "home.applicationsOverview.emptyDescription",
                              ),
                            }),
                          ],
                        }),
                      ],
                    }),
                    (0, a.jsx)(g(), {
                      href: "/dashboard/jobs",
                      children: (0, a.jsxs)(E.$, {
                        className:
                          "bg-[#5D5DE9] hover:bg-[#2C3340] text-white rounded-full px-6",
                        children: [
                          (0, a.jsx)(y.A, { className: "h-4 w-4 mr-2" }),
                          n("home.applicationsOverview.browseJobs"),
                        ],
                      }),
                    }),
                  ],
                }),
              }),
            })
          : (0, a.jsx)(l.P.div, {
              initial: { opacity: 0, y: 20 },
              animate: { opacity: 1, y: 0 },
              transition: { duration: 0.4, delay: 0.15 },
              className: r,
              children: (0, a.jsxs)(eh.Zp, {
                className: "p-6 border-[rgba(44,51,64,0.08)]",
                children: [
                  (0, a.jsxs)("div", {
                    className: "flex items-center justify-between mb-5",
                    children: [
                      (0, a.jsxs)("div", {
                        className: "flex items-center gap-3",
                        children: [
                          (0, a.jsx)("div", {
                            className: "p-2.5 rounded-xl bg-[#2C3340]/10",
                            children: (0, a.jsx)(el.A, {
                              className: "h-5 w-5 text-[#2C3340]",
                            }),
                          }),
                          (0, a.jsxs)("div", {
                            children: [
                              (0, a.jsx)("h3", {
                                className: "font-semibold text-[#2C3340]",
                                children: n("home.applicationsOverview.title"),
                              }),
                              (0, a.jsx)("p", {
                                className: "text-xs text-[rgba(44,51,64,0.5)]",
                                children: n(
                                  "home.applicationsOverview.subtitle",
                                  { count: i },
                                ),
                              }),
                            ],
                          }),
                        ],
                      }),
                      (0, a.jsxs)(g(), {
                        href: "/dashboard/applications",
                        className:
                          "flex items-center gap-1.5 text-sm font-medium text-[#5D5DE9] hover:text-[#2C3340] transition-colors",
                        children: [
                          n("home.applicationsOverview.viewAll"),
                          (0, a.jsx)(ee.A, { className: "h-4 w-4" }),
                        ],
                      }),
                    ],
                  }),
                  (0, a.jsx)("div", {
                    className: "mb-5",
                    children: (0, a.jsx)("div", {
                      className: "flex items-center justify-between gap-2",
                      children: ef.map((e, s) => {
                        let i = (null == t ? void 0 : t[e.key]) || 0,
                          r = i > 0;
                        return (0, a.jsxs)(
                          "div",
                          {
                            className: "flex-1 flex flex-col items-center",
                            children: [
                              (0, a.jsxs)("div", {
                                className: "flex items-center w-full mb-2",
                                children: [
                                  s > 0 &&
                                    (0, a.jsx)("div", {
                                      className: "flex-1 h-0.5 -ml-1",
                                      style: {
                                        backgroundColor: r
                                          ? e.color
                                          : "#E5E7EB",
                                      },
                                    }),
                                  (0, a.jsx)("div", {
                                    className: (0, D.cn)(
                                      "w-4 h-4 rounded-full flex items-center justify-center transition-all",
                                      r ? "scale-110" : "scale-100",
                                    ),
                                    style: {
                                      backgroundColor: r ? e.color : "#E5E7EB",
                                    },
                                    children:
                                      r &&
                                      (0, a.jsx)("span", {
                                        className:
                                          "text-[8px] font-bold text-white",
                                        children: i > 9 ? "9+" : i,
                                      }),
                                  }),
                                  s < ef.length - 1 &&
                                    (0, a.jsx)("div", {
                                      className: "flex-1 h-0.5 -mr-1",
                                      style: {
                                        backgroundColor:
                                          ((null == t
                                            ? void 0
                                            : t[ef[s + 1].key]) || 0) > 0
                                            ? ef[s + 1].color
                                            : "#E5E7EB",
                                      },
                                    }),
                                ],
                              }),
                              (0, a.jsx)("span", {
                                className: (0, D.cn)(
                                  "text-[10px] font-medium text-center",
                                  r
                                    ? "text-[#2C3340]"
                                    : "text-[rgba(44,51,64,0.4)]",
                                ),
                                children: e.label,
                              }),
                            ],
                          },
                          e.key,
                        );
                      }),
                    }),
                  }),
                  s > 0 &&
                    (0, a.jsxs)("div", {
                      className:
                        "flex items-center gap-2 mb-5 p-3 rounded-lg bg-[#5D5DE9]/10 border border-[#5D5DE9]/20",
                      children: [
                        (0, a.jsx)(k.A, {
                          className: "h-4 w-4 text-[#5D5DE9] flex-shrink-0",
                        }),
                        (0, a.jsxs)("p", {
                          className: "text-sm text-[#2C3340]",
                          children: [
                            (0, a.jsx)("span", {
                              className: "font-medium",
                              children: s,
                            }),
                            " ",
                            n(
                              1 === s
                                ? "home.applicationsOverview.needsAttentionSingular"
                                : "home.applicationsOverview.needsAttentionPlural",
                            ),
                          ],
                        }),
                      ],
                    }),
                  (0, a.jsxs)("div", {
                    className: "flex flex-col sm:flex-row gap-3",
                    children: [
                      (0, a.jsx)(g(), {
                        href: "/dashboard/jobs",
                        className: "flex-1",
                        children: (0, a.jsxs)(E.$, {
                          variant: "default",
                          className:
                            "w-full bg-[#2C3340] hover:bg-[#1E242E] text-white rounded-full",
                          children: [
                            (0, a.jsx)(y.A, { className: "h-4 w-4 mr-2" }),
                            n("home.applicationsOverview.applyNew"),
                          ],
                        }),
                      }),
                      (0, a.jsx)(g(), {
                        href: "/dashboard/applications",
                        className: "flex-1",
                        children: (0, a.jsxs)(E.$, {
                          variant: "outline",
                          className:
                            "w-full border-[#2C3340]/20 text-[#2C3340] hover:bg-[#2C3340]/5 rounded-full",
                          children: [
                            (0, a.jsx)(eb.A, { className: "h-4 w-4 mr-2" }),
                            n("home.applicationsOverview.trackExternal"),
                          ],
                        }),
                      }),
                    ],
                  }),
                ],
              }),
            });
      }
      var ej = s(36600),
        eN = s(29268);
      function ey() {
        var e;
        let t = (0, r.createClientComponentClient)(),
          s = (0, c.useRouter)(),
          p = (0, c.useSearchParams)(),
          [f, v] = (0, i.useState)(null),
          [j, N] = (0, i.useState)(!0),
          [y, w] = (0, i.useState)(null),
          [A, F] = (0, i.useState)(!1),
          [_, k] = (0, i.useState)(!1),
          [S, C] = (0, i.useState)(null),
          [E, I] = (0, i.useState)(null),
          [G, O] = (0, i.useState)(0),
          [T, H] = (0, i.useState)(0),
          [R, B] = (0, i.useState)(0),
          [M, z] = (0, i.useState)(null),
          [L, $] = (0, i.useState)(0),
          [U, J] = (0, i.useState)(0),
          [Y, W] = (0, i.useState)(null),
          { data: V } = (0, b.QA)(),
          { completionPercentage: Z, isLoading: Q } = (0, eu._K)(),
          { t: X } = (0, ea.ok)(),
          ee =
            (null == V
              ? void 0
              : null === (e = V.strength) || void 0 === e
                ? void 0
                : e.score) || 0;
        ((0, i.useEffect)(() => {
          (async () => {
            try {
              let { data: e } = await t.auth.getUser();
              if (null == e ? void 0 : e.user) {
                v(e.user);
                let { data: s, error: a } = await t
                  .from("user_profiles")
                  .select("*")
                  .eq("user_id", e.user.id)
                  .maybeSingle();
                if (a) {
                  (console.error("Error fetching profile:", a), N(!1));
                  return;
                }
                if (s) {
                  if (
                    (w(s),
                    s.eligibility_score && C(s.eligibility_score),
                    s.timeline_data && I(s.timeline_data),
                    s.created_at)
                  ) {
                    let e = new Date(s.created_at),
                      t = new Date(),
                      a = Math.abs(t.getTime() - e.getTime()),
                      i = Math.max(1, Math.ceil(a / 864e5));
                    O(i);
                  }
                } else {
                  (console.error(
                    "No profile found for user - signup may have failed",
                  ),
                    P.oR.error(X("home.page.profileSetupError")),
                    N(!1));
                  return;
                }
                let { count: i } = await t
                  .from("saved_job_postings")
                  .select("id", { count: "exact", head: !0 })
                  .eq("user_id", e.user.id);
                H(i || 0);
                let { count: r } = await t
                  .from("job_recommendations")
                  .select("id", { count: "exact", head: !0 })
                  .eq("user_id", e.user.id)
                  .eq("viewed", !1)
                  .eq("dismissed", !1);
                B(r || 0);
                let { data: l } = await t
                  .from("languages")
                  .select("proficiency")
                  .eq("user_id", e.user.id)
                  .eq("language", "German")
                  .maybeSingle();
                (null == l ? void 0 : l.proficiency) && z(l.proficiency);
                let { count: n } = await t
                  .from("student_applications")
                  .select("id", { count: "exact", head: !0 })
                  .eq("user_id", e.user.id);
                $(n || 0);
                let { count: o } = await t
                  .from("student_applications")
                  .select("id", { count: "exact", head: !0 })
                  .eq("user_id", e.user.id)
                  .in("status", ["preparing", "waiting"]);
                J(o || 0);
                let { data: c } = await t
                  .from("student_applications")
                  .select("status")
                  .eq("user_id", e.user.id);
                if (c) {
                  let e = c.reduce(
                    (e, t) => ((e[t.status] = (e[t.status] || 0) + 1), e),
                    {},
                  );
                  W(e);
                }
                N(!1);
              } else s.replace("/auth");
            } catch (e) {
              (console.error("Error checking user:", e), N(!1));
            }
          })();
        }, []),
          (0, i.useEffect)(() => {
            var e;
            if (!f) return;
            let t = "true" === p.get("confirmed"),
              s =
                (null === (e = f.app_metadata) || void 0 === e
                  ? void 0
                  : e.provider) === "google"
                  ? "google"
                  : "email",
              a = "login_tracked_".concat(f.id);
            if (
              (sessionStorage.getItem(a) ||
                (eN.T.trackLogin({ userId: f.id, method: s }),
                sessionStorage.setItem(a, "true")),
              t)
            ) {
              let e = "signup_tracked_".concat(f.id);
              sessionStorage.getItem(e) ||
                (eN.T.trackSignup({ userId: f.id, method: s }),
                sessionStorage.setItem(e, "true"));
            }
          }, [p, f]));
        let et = (null == S ? void 0 : S.score) || null;
        return j
          ? (0, a.jsx)(d.O, {})
          : (0, a.jsxs)("div", {
              className: "w-full max-w-7xl mx-auto",
              children: [
                (0, a.jsxs)("div", {
                  className: "space-y-6",
                  children: [
                    (0, a.jsxs)(l.P.div, {
                      initial: { opacity: 0 },
                      animate: { opacity: 1 },
                      transition: { duration: 0.3 },
                      className:
                        "flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4",
                      children: [
                        (0, a.jsxs)("div", {
                          className: "flex items-center gap-3",
                          children: [
                            (0, a.jsx)("div", {
                              className:
                                "relative w-12 h-12 md:w-14 md:h-14 flex-shrink-0",
                              children: (0, a.jsx)(u.default, {
                                src: "/mascot/mascot_welcoming.webp",
                                alt: "Young Oak welcomes you",
                                fill: !0,
                                className: "object-contain",
                                priority: !0,
                              }),
                            }),
                            (0, a.jsxs)("div", {
                              children: [
                                (0, a.jsx)(m.D, {
                                  level: 1,
                                  size: "compact",
                                  variant: "default",
                                  className: "text-lg md:text-xl mb-0",
                                  children: X("home.page.welcome", {
                                    name:
                                      (0, ej.O4)(y) ||
                                      X("home.page.defaultName"),
                                  }),
                                }),
                                (0, a.jsx)(x.f, {
                                  size: "sm",
                                  className: "text-muted-foreground",
                                  children: X("home.page.journeyDay", { n: G }),
                                }),
                              ],
                            }),
                          ],
                        }),
                        (0, a.jsx)(g(), {
                          href: "/dashboard/profile",
                          children: (0, a.jsxs)("div", {
                            className: (0, D.cn)(
                              "flex items-center gap-3 px-4 py-2.5 rounded-full",
                              "bg-white border border-[rgba(44,51,64,0.1)]",
                              "shadow-sm hover:shadow-md transition-all cursor-pointer",
                              "hover:border-[#5D5DE9]/30",
                            ),
                            children: [
                              (0, a.jsxs)("div", {
                                className: "flex items-center gap-2",
                                children: [
                                  (0, a.jsx)(n.A, {
                                    className: "h-4 w-4 text-[#5D5DE9]",
                                  }),
                                  (0, a.jsx)("span", {
                                    className:
                                      "text-sm font-medium text-[#2C3340]",
                                    children: X("home.page.profile"),
                                  }),
                                ],
                              }),
                              Q
                                ? (0, a.jsxs)("div", {
                                    className: "flex items-center gap-2",
                                    children: [
                                      (0, a.jsx)(h.E, {
                                        className: "w-20 h-2 rounded-full",
                                      }),
                                      (0, a.jsx)(h.E, {
                                        className: "w-9 h-4 rounded",
                                      }),
                                    ],
                                  })
                                : (0, a.jsxs)(a.Fragment, {
                                    children: [
                                      (0, a.jsxs)("div", {
                                        className: "flex items-center gap-2",
                                        children: [
                                          (0, a.jsx)("div", {
                                            className:
                                              "w-20 h-2 bg-[#EEF0F4] rounded-full overflow-hidden",
                                            children: (0, a.jsx)("div", {
                                              className:
                                                "h-full bg-[#5D5DE9] rounded-full transition-all duration-500",
                                              style: {
                                                width: "".concat(Z, "%"),
                                              },
                                            }),
                                          }),
                                          (0, a.jsxs)("span", {
                                            className:
                                              "text-sm font-semibold text-[#2C3340] min-w-[36px]",
                                            children: [Z, "%"],
                                          }),
                                        ],
                                      }),
                                      Z >= 80 &&
                                        (0, a.jsx)(o.A, {
                                          className: "h-4 w-4 text-[#2C3340]",
                                        }),
                                    ],
                                  }),
                            ],
                          }),
                        }),
                      ],
                    }),
                    (0, a.jsx)(eo, {
                      completionPercentage: Z,
                      eligibilityScore: et,
                      recommendationsCount: R,
                      hasTimeline: !!E,
                      isLoading: Q,
                      applicationsCount: L,
                    }),
                    (0, a.jsx)(em, {
                      profileStrength: ee,
                      eligibilityScore: et,
                      germanLevel: M,
                      savedJobsCount: T,
                      applicationsCount: L,
                      applicationsPending: U,
                    }),
                    (0, a.jsx)("div", {
                      id: "recommendations",
                      children: (0, a.jsx)(ei, {}),
                    }),
                    (0, a.jsx)(ev, {
                      stats: Y,
                      pendingCount: U,
                      totalCount: L,
                    }),
                    (0, a.jsxs)(l.P.div, {
                      initial: { opacity: 0, y: 20 },
                      animate: { opacity: 1, y: 0 },
                      transition: { duration: 0.4, delay: 0.2 },
                      children: [
                        (0, a.jsxs)("div", {
                          className: "mb-4",
                          children: [
                            (0, a.jsx)(m.D, {
                              level: 3,
                              size: "compact",
                              className: "text-[#2C3340]",
                              children: X("home.page.quickActions"),
                            }),
                            (0, a.jsx)(x.f, {
                              size: "sm",
                              className: "text-muted-foreground",
                              children: X("home.page.quickActionsSubtitle"),
                            }),
                          ],
                        }),
                        (0, a.jsx)(eg, {}),
                      ],
                    }),
                    (0, a.jsx)(l.P.div, {
                      initial: { opacity: 0 },
                      animate: { opacity: 1 },
                      transition: { duration: 0.4, delay: 0.4 },
                      className:
                        "border-t border-[rgba(44,51,64,0.08)] pt-6 mt-4",
                      children: (0, a.jsxs)("div", {
                        className:
                          "flex flex-wrap items-center justify-between gap-4",
                        children: [
                          (0, a.jsx)("p", {
                            className:
                              "text-xs text-muted-foreground font-medium",
                            children: X("home.page.helpfulResources"),
                          }),
                          (0, a.jsx)("div", {
                            className: "flex flex-wrap gap-6",
                            children: [
                              {
                                labelKey: "home.resources.applicationGuide",
                                href: "/application",
                              },
                              {
                                labelKey: "home.resources.financialPlanning",
                                href: "/costs",
                              },
                              {
                                labelKey: "home.resources.visaGuide",
                                href: "/visa",
                              },
                              {
                                labelKey: "home.resources.livingInGermany",
                                href: "/living-in-germany",
                              },
                            ].map((e) =>
                              (0, a.jsx)(
                                g(),
                                {
                                  href: e.href,
                                  target: "_blank",
                                  className:
                                    "text-xs text-[rgba(44,51,64,0.5)] hover:text-[#5D5DE9] transition-colors",
                                  children: X(e.labelKey),
                                },
                                e.href,
                              ),
                            ),
                          }),
                        ],
                      }),
                    }),
                  ],
                }),
                (0, a.jsx)(q, {
                  isOpen: A,
                  onClose: () => F(!1),
                  userId: null == f ? void 0 : f.id,
                  existingData: y,
                  onComplete: (e) => {
                    (C(e),
                      w((t) => ({
                        ...(null != t ? t : {}),
                        eligibility_score: e,
                      })));
                  },
                }),
                (0, a.jsx)(K, {
                  isOpen: _,
                  onClose: () => k(!1),
                  userId: null == f ? void 0 : f.id,
                  existingData: y,
                  eligibilityScore: et,
                  onComplete: (e) => {
                    I(e);
                  },
                }),
              ],
            });
      }
    },
  },
  (e) => {
    var t = (t) => e((e.s = t));
    (e.O(0, [46593, 36209, 84121, 72076, 77358], () => t(10779)),
      (_N_E = e.O()));
  },
]);
