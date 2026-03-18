(self.webpackChunk_N_E = self.webpackChunk_N_E || []).push([
  [88024],
  {
    18775: (e, s, r) => {
      "use strict";
      (r.r(s), r.d(s, { default: () => R }));
      var a = r(70207),
        n = r(87223),
        t = r(81994),
        i = r(79650),
        l = r(84217),
        o = r(28131),
        c = r(74285),
        d = r(82164),
        u = r(70005),
        m = r(79024),
        g = r(65915),
        h = r(69230),
        p = r(62165),
        x = r(62839),
        v = r(27774),
        y = r(10863),
        b = r(20351),
        f = r(93595),
        j = r(14207),
        w = r(80374),
        A = r(79046),
        N = r(39441),
        B = r(93501),
        C = r(40167);
      let k = [
          {
            question:
              "What German language level do I need for Ausbildung in Germany?",
            answer:
              "Most Ausbildung programs require a minimum of B1 German proficiency (intermediate level). However, requirements vary by sector: Healthcare (Nursing) typically requires B2, while IT and Technical fields may accept B1. Some programs offer language support and may accept A2 with intensive German courses during training. Use this calculator to determine your current level and the time needed to reach your target.",
          },
          {
            question: "How long does it take to learn German from A1 to B2?",
            answer:
              "Based on the Common European Framework of Reference (CEFR), it typically takes: A1 to A2 (150-200 hours), A2 to B1 (200-300 hours), and B1 to B2 (300-400 hours). This means reaching B2 from zero German knowledge requires approximately 650-900 hours of structured learning. With intensive study (20 hours/week), you can reach B2 in 8-12 months. With moderate study (10 hours/week), expect 15-18 months. The calculator provides personalized timelines based on your study intensity and current level.",
          },
          {
            question: "Can I start my Ausbildung with A2 German level?",
            answer:
              "While most programs require B1 minimum, some training companies accept A2 level candidates if you commit to intensive German courses before or during the first months of training. This is particularly common in technical sectors with high demand (IT, Engineering, Manufacturing). However, starting with higher proficiency (B1 or B2) significantly improves your success rate, work integration, and overall experience. The calculator helps you plan realistic timelines to reach the recommended level before your intake.",
          },
          {
            question: "What are the CEFR levels (A1, A2, B1, B2, C1, C2)?",
            answer:
              "The Common European Framework of Reference (CEFR) defines six proficiency levels: A1 (Beginner) - basic phrases and simple interactions; A2 (Elementary) - everyday expressions and routine tasks; B1 (Intermediate) - handle most situations, explain opinions; B2 (Upper Intermediate) - understand complex texts, interact fluently; C1 (Advanced) - express ideas fluently and spontaneously; C2 (Mastery) - near-native proficiency. For Ausbildung, B1 is the typical minimum, with B2 preferred for customer-facing or healthcare roles.",
          },
          {
            question: "How much does German language learning cost?",
            answer:
              "Costs vary significantly: Goethe Institut courses (official provider) cost €200-400 per level, online platforms like Duolingo or Babbel cost €10-15/month, private tutors range €20-40/hour, and intensive in-person courses in Germany cost €500-1,200 per level. For budget-conscious learners, combine free resources (Deutsche Welle, YouTube) with affordable apps and occasional tutoring. The calculator estimates total costs based on your chosen learning method and intensity, helping you budget for your language journey.",
          },
          {
            question: "Is Goethe-Zertifikat required for Ausbildung visa?",
            answer:
              "While not always mandatory, a Goethe-Zertifikat (or equivalent like TELC, TestDaF, \xd6SD) is highly recommended and often required by employers and visa authorities as proof of German proficiency. The German embassy may request language certificates during visa application, especially for B1 or B2 claims. Many training companies require certification before contract signing. Budget €150-250 for each exam attempt. The calculator includes certification exam costs in the total budget estimation.",
          },
          {
            question: "Can I learn German while working during Ausbildung?",
            answer:
              "Yes, many international trainees continue improving their German during Ausbildung through workplace immersion, company-provided language courses, and evening classes. Ausbildung provides excellent language practice through daily interactions with colleagues and customers. However, starting with at least B1 level makes the transition much smoother, as you'll understand training materials, safety instructions, and communicate effectively from day one. Use the calculator to plan pre-Ausbildung learning to reach B1, then continue improving to B2/C1 during training.",
          },
          {
            question: "What is the fastest way to learn German for Ausbildung?",
            answer:
              "The fastest approach combines: (1) Intensive structured courses (20+ hours/week with qualified teachers), (2) Daily immersion through German media (news, podcasts, TV shows), (3) Regular conversation practice with native speakers (language exchange, tutors), (4) Focused vocabulary building for your target sector (healthcare, IT, etc.), and (5) Grammar study with practical application. Intensive programs in Germany can achieve A1 to B2 in 6-8 months. The calculator helps you design a realistic intensive study plan based on your available time and resources.",
          },
          {
            question:
              "Do I need to know German before applying for Ausbildung?",
            answer:
              "Yes, most Ausbildung applications require proof of at least A2-B1 German proficiency before the interview process begins. Training companies need to assess your ability to understand safety instructions, communicate with colleagues, and handle customer interactions. Some recruitment agencies offer pre-selection language assessments. Having B1+ German also significantly improves your chances during interviews, as you can express motivation, ask questions, and demonstrate cultural fit. Start learning German 12-18 months before your target Ausbildung start date.",
          },
          {
            question:
              "How is German proficiency tested for Ausbildung applications?",
            answer:
              "German proficiency is assessed through: (1) Official certificates (Goethe-Zertifikat, TELC, TestDaF, \xd6SD), (2) Company-conducted phone or video interviews in German, (3) Written assessments (grammar tests, comprehension exercises), and (4) In-person interviews evaluating conversation skills. Some companies use placement tests to determine your exact level. Even with certificates, expect practical testing during recruitment. The calculator helps you prepare adequately by showing realistic timelines to reach interview-ready proficiency levels (B1-B2).",
          },
        ],
        L = {
          "A1-A2": 150,
          "A2-B1": 250,
          "B1-B2": 350,
          "B2-C1": 400,
          "C1-C2": 450,
        },
        S = {
          "self-study": {
            perHour: 0.5,
            materialsBase: 100,
            name: "Self-Study (Apps & Books)",
          },
          "online-course": {
            perHour: 2,
            materialsBase: 50,
            name: "Online Courses",
          },
          "group-class": {
            perHour: 8,
            materialsBase: 150,
            name: "Group Classes",
          },
          "private-tutor": {
            perHour: 30,
            materialsBase: 50,
            name: "Private Tutor",
          },
          "intensive-program": {
            perHour: 12,
            materialsBase: 200,
            name: "Intensive Program (Germany)",
          },
        },
        T = {
          healthcare: { recommended: "B2", minimum: "B1" },
          "it-tech": { recommended: "B1", minimum: "A2" },
          hospitality: { recommended: "B2", minimum: "B1" },
          engineering: { recommended: "B1", minimum: "B1" },
          business: { recommended: "B2", minimum: "B1" },
          trades: { recommended: "B1", minimum: "A2" },
        },
        G = { A1: 120, A2: 150, B1: 180, B2: 210, C1: 240, C2: 270 },
        q = {
          title: "How to Use the Language Proficiency Calculator",
          description:
            "Assess your German language level and get a personalized learning timeline to reach your target proficiency for Ausbildung.",
          steps: [
            {
              title: "Enter Current Level",
              description:
                'Select your current German proficiency level based on the CEFR framework (A1-C2) or choose "Beginner" if you\'re just starting.',
              icon: t.A,
            },
            {
              title: "Set Target Level",
              description:
                "Choose your target German level based on your Ausbildung sector requirements (B1 minimum for most programs).",
              icon: i.A,
            },
            {
              title: "Get Learning Timeline",
              description:
                "Receive a detailed timeline with study hours, milestones, costs, and a personalized learning roadmap.",
              icon: l.A,
            },
          ],
          inputs: [
            {
              label: "Current German Level",
              description: "Your current CEFR level (Beginner to C1)",
              icon: t.A,
            },
            {
              label: "Target Level",
              description: "Your goal proficiency level (A2-C2)",
              icon: i.A,
            },
            {
              label: "Study Hours per Week",
              description: "Realistic weekly study commitment",
              icon: o.A,
            },
            {
              label: "Learning Method",
              description:
                "Choose from self-study, online courses, group classes, private tutor, or intensive programs",
              icon: c.A,
            },
          ],
          outputs: [
            {
              label: "Time to Goal",
              description: "Weeks and months needed to reach your target level",
              icon: l.A,
            },
            {
              label: "Recommended Courses",
              description: "Learning method suggestions with cost breakdown",
              icon: c.A,
            },
            {
              label: "Proficiency Milestones",
              description: "Step-by-step CEFR level progression timeline",
              icon: d.A,
            },
            {
              label: "Study Plan",
              description: "Total hours required and sector fit assessment",
              icon: u.A,
            },
            {
              label: "Progress Tracking",
              description: "Cumulative hours and weeks for each milestone",
              icon: m.A,
            },
          ],
          additionalInfo:
            "Timeline estimates are based on Common European Framework of Reference (CEFR) standards and average learning curves for international students.",
        };
      function R() {
        let [e, s] = (0, n.useState)({
            currentLevel: "beginner",
            targetLevel: "B1",
            studyHoursPerWeek: 10,
            learningMethod: "online-course",
            targetSector: "it-tech",
          }),
          [r, l] = (0, n.useState)(null),
          u = (e, r) => {
            s((s) => ({ ...s, [e]: r }));
          },
          m = (e, s) => {
            let r = ["A1", "A2", "B1", "B2", "C1", "C2"],
              a = "beginner" === e ? 0 : r.indexOf(e),
              n = r.indexOf(s);
            return r.slice(a, n + 1);
          },
          R = (e, s) => {
            let r = m(e, s),
              a = 0;
            for (let e = 0; e < r.length - 1; e++)
              a += L["".concat(r[e], "-").concat(r[e + 1])] || 0;
            return a;
          },
          H = T[e.targetSector],
          E =
            r &&
            m("A1", r.targetLevel).indexOf(r.targetLevel) >=
              m("A1", H.minimum).indexOf(H.minimum),
          M =
            r &&
            m("A1", r.targetLevel).indexOf(r.targetLevel) >=
              m("A1", H.recommended).indexOf(H.recommended);
        return (0, a.jsxs)(v.d, {
          title: "German Language Proficiency Calculator",
          description:
            "Calculate personalized timelines, study hours, and costs to reach your target German CEFR level for Ausbildung in Germany.",
          icon: t.A,
          category: "Language & Integration",
          toolSlug: "language-proficiency-calculator",
          children: [
            (0, a.jsx)(f.$N, {
              icon: g.A,
              title: "CEFR-Based Learning Timeline",
              description:
                "This calculator uses the Common European Framework of Reference (CEFR) standards to estimate realistic German language learning timelines. Results are based on average study intensity and official Goethe Institut guidelines. Actual progress may vary based on prior language experience and learning dedication.",
              variant: "warning",
            }),
            (0, a.jsxs)(f.tZ, {
              title: "Your Language Learning Plan",
              children: [
                (0, a.jsxs)("div", {
                  className: "grid md:grid-cols-2 gap-6",
                  children: [
                    (0, a.jsx)(f.vC, {
                      label: "Current German Level",
                      description:
                        "Honestly assess your speaking, reading, and writing abilities",
                      children: (0, a.jsxs)(B.l6, {
                        value: e.currentLevel,
                        onValueChange: (e) => u("currentLevel", e),
                        children: [
                          (0, a.jsx)(B.bq, {
                            children: (0, a.jsx)(B.yv, {
                              placeholder: "Select your current level",
                            }),
                          }),
                          (0, a.jsxs)(B.gC, {
                            children: [
                              (0, a.jsx)(B.eb, {
                                value: "beginner",
                                children: "Beginner (No German)",
                              }),
                              (0, a.jsx)(B.eb, {
                                value: "A1",
                                children: "A1 - Basic phrases",
                              }),
                              (0, a.jsx)(B.eb, {
                                value: "A2",
                                children: "A2 - Elementary conversations",
                              }),
                              (0, a.jsx)(B.eb, {
                                value: "B1",
                                children: "B1 - Intermediate proficiency",
                              }),
                              (0, a.jsx)(B.eb, {
                                value: "B2",
                                children: "B2 - Upper intermediate",
                              }),
                              (0, a.jsx)(B.eb, {
                                value: "C1",
                                children: "C1 - Advanced",
                              }),
                            ],
                          }),
                        ],
                      }),
                    }),
                    (0, a.jsx)(f.vC, {
                      label: "Target German Level",
                      description:
                        "B1 is the minimum for most Ausbildung programs",
                      children: (0, a.jsxs)(B.l6, {
                        value: e.targetLevel,
                        onValueChange: (e) => u("targetLevel", e),
                        children: [
                          (0, a.jsx)(B.bq, {
                            children: (0, a.jsx)(B.yv, {
                              placeholder: "Select your target level",
                            }),
                          }),
                          (0, a.jsxs)(B.gC, {
                            children: [
                              (0, a.jsx)(B.eb, {
                                value: "A2",
                                children: "A2 - Elementary",
                              }),
                              (0, a.jsx)(B.eb, {
                                value: "B1",
                                children: "B1 - Intermediate (Most Ausbildung)",
                              }),
                              (0, a.jsx)(B.eb, {
                                value: "B2",
                                children:
                                  "B2 - Upper Intermediate (Healthcare)",
                              }),
                              (0, a.jsx)(B.eb, {
                                value: "C1",
                                children: "C1 - Advanced (Professional)",
                              }),
                              (0, a.jsx)(B.eb, {
                                value: "C2",
                                children: "C2 - Mastery (Near-native)",
                              }),
                            ],
                          }),
                        ],
                      }),
                    }),
                    (0, a.jsx)(f.vC, {
                      label: "Study Hours Per Week",
                      description:
                        "Realistic weekly study time (includes classes, homework, practice)",
                      children: (0, a.jsx)(C.p, {
                        id: "studyHoursPerWeek",
                        type: "number",
                        min: "1",
                        max: "60",
                        value: e.studyHoursPerWeek,
                        onChange: (e) =>
                          u("studyHoursPerWeek", parseInt(e.target.value)),
                      }),
                    }),
                    (0, a.jsx)(f.vC, {
                      label: "Learning Method",
                      description:
                        "Choose based on your budget and learning style",
                      children: (0, a.jsxs)(B.l6, {
                        value: e.learningMethod,
                        onValueChange: (e) => u("learningMethod", e),
                        children: [
                          (0, a.jsx)(B.bq, {
                            children: (0, a.jsx)(B.yv, {
                              placeholder: "Select learning method",
                            }),
                          }),
                          (0, a.jsxs)(B.gC, {
                            children: [
                              (0, a.jsx)(B.eb, {
                                value: "self-study",
                                children: "Self-Study (Apps & Books) - €0.5/hr",
                              }),
                              (0, a.jsx)(B.eb, {
                                value: "online-course",
                                children: "Online Courses - €2/hr",
                              }),
                              (0, a.jsx)(B.eb, {
                                value: "group-class",
                                children: "Group Classes - €8/hr",
                              }),
                              (0, a.jsx)(B.eb, {
                                value: "private-tutor",
                                children: "Private Tutor - €30/hr",
                              }),
                              (0, a.jsx)(B.eb, {
                                value: "intensive-program",
                                children:
                                  "Intensive Program (Germany) - €12/hr",
                              }),
                            ],
                          }),
                        ],
                      }),
                    }),
                    (0, a.jsx)("div", {
                      className: "md:col-span-2",
                      children: (0, a.jsxs)(f.vC, {
                        label: "Target Ausbildung Sector",
                        children: [
                          (0, a.jsxs)(B.l6, {
                            value: e.targetSector,
                            onValueChange: (e) => u("targetSector", e),
                            children: [
                              (0, a.jsx)(B.bq, {
                                children: (0, a.jsx)(B.yv, {
                                  placeholder: "Select target sector",
                                }),
                              }),
                              (0, a.jsxs)(B.gC, {
                                children: [
                                  (0, a.jsx)(B.eb, {
                                    value: "healthcare",
                                    children:
                                      "Healthcare/Nursing (Requires B2)",
                                  }),
                                  (0, a.jsx)(B.eb, {
                                    value: "it-tech",
                                    children: "IT & Technology (Minimum A2-B1)",
                                  }),
                                  (0, a.jsx)(B.eb, {
                                    value: "hospitality",
                                    children:
                                      "Hospitality & Tourism (Requires B2)",
                                  }),
                                  (0, a.jsx)(B.eb, {
                                    value: "engineering",
                                    children:
                                      "Engineering & Manufacturing (Requires B1)",
                                  }),
                                  (0, a.jsx)(B.eb, {
                                    value: "business",
                                    children:
                                      "Business & Administration (Requires B2)",
                                  }),
                                  (0, a.jsx)(B.eb, {
                                    value: "trades",
                                    children: "Skilled Trades (Minimum A2-B1)",
                                  }),
                                ],
                              }),
                            ],
                          }),
                          (0, a.jsxs)("div", {
                            className:
                              "flex items-center gap-2 text-xs text-gray-600 bg-cream rounded-lg p-3 mt-2",
                            children: [
                              (0, a.jsx)(i.A, {
                                className: "h-4 w-4 text-orange",
                                "aria-hidden": "true",
                              }),
                              (0, a.jsxs)("span", {
                                children: [
                                  (0, a.jsx)("strong", {
                                    children: "Requirement:",
                                  }),
                                  " Minimum ",
                                  (0, a.jsx)("strong", { children: H.minimum }),
                                  ", Recommended ",
                                  (0, a.jsx)("strong", {
                                    className: "text-orange",
                                    children: H.recommended,
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
                (0, a.jsxs)("div", {
                  className: "space-y-4",
                  children: [
                    (0, a.jsxs)("div", {
                      className: "flex gap-4",
                      children: [
                        (0, a.jsxs)(N.$, {
                          onClick: () => {
                            let s = R(e.currentLevel, e.targetLevel),
                              r = Math.ceil(s / e.studyHoursPerWeek),
                              a = Math.round((r / 4.33) * 10) / 10,
                              n = S[e.learningMethod],
                              t = s * n.perHour,
                              i = n.materialsBase,
                              o = G[e.targetLevel] || 180,
                              c = t + i + o,
                              d = m(e.currentLevel, e.targetLevel),
                              u = [],
                              g = 0;
                            for (let s = 0; s < d.length - 1; s++) {
                              let r = Math.ceil(
                                (g +=
                                  L["".concat(d[s], "-").concat(d[s + 1])] ||
                                  0) / e.studyHoursPerWeek,
                              );
                              u.push({
                                level: d[s + 1],
                                weeksFromStart: r,
                                cumulativeHours: g,
                              });
                            }
                            (l({
                              currentLevel:
                                "beginner" === e.currentLevel
                                  ? "A1"
                                  : e.currentLevel,
                              targetLevel: e.targetLevel,
                              hoursRequired: s,
                              weeksRequired: r,
                              monthsRequired: a,
                              studyHoursPerWeek: e.studyHoursPerWeek,
                              totalCost: Math.round(c),
                              costBreakdown: {
                                courseFees: Math.round(t),
                                materials: i,
                                examFee: o,
                              },
                              learningMethod: n.name,
                              targetSector: e.targetSector,
                              milestones: u,
                            }),
                              (0, b.r)("language-proficiency-calculator"));
                          },
                          className:
                            "flex-1 bg-orange hover:bg-orange-hover rounded-full",
                          children: [
                            "Calculate Learning Timeline",
                            (0, a.jsx)(t.A, {
                              className: "ml-2 h-4 w-4",
                              "aria-hidden": "true",
                            }),
                          ],
                        }),
                        r &&
                          (0, a.jsx)(N.$, {
                            onClick: () => {
                              (s({
                                currentLevel: "beginner",
                                targetLevel: "B1",
                                studyHoursPerWeek: 10,
                                learningMethod: "online-course",
                                targetSector: "it-tech",
                              }),
                                l(null));
                            },
                            variant: "outline",
                            className: "rounded-full",
                            children: (0, a.jsx)(h.A, {
                              className: "h-4 w-4",
                              "aria-hidden": "true",
                            }),
                          }),
                      ],
                    }),
                    (0, a.jsx)("div", {
                      className: "flex justify-center",
                      children: (0, a.jsx)(b.A, {
                        toolSlug: "language-proficiency-calculator",
                        actionText: "proficiency assessments completed",
                      }),
                    }),
                  ],
                }),
              ],
            }),
            r &&
              (0, a.jsxs)(f.Q$, {
                title: "Your Personalized Learning Plan",
                variant: "success",
                children: [
                  (0, a.jsxs)("section", {
                    className: "grid grid-cols-2 md:grid-cols-4 gap-4 mb-8",
                    "aria-label": "Learning timeline statistics",
                    children: [
                      (0, a.jsx)(f.jA, {
                        label: "Total Study Hours",
                        value: r.hoursRequired.toString(),
                        icon: o.A,
                        variant: "primary",
                      }),
                      (0, a.jsx)(f.jA, {
                        label: "Weeks (".concat(r.studyHoursPerWeek, "h/week)"),
                        value: r.weeksRequired.toString(),
                        icon: o.A,
                        variant: "secondary",
                      }),
                      (0, a.jsx)(f.jA, {
                        label: "Months Estimated",
                        value: r.monthsRequired.toString(),
                        icon: o.A,
                        variant: "accent",
                      }),
                      (0, a.jsx)(f.jA, {
                        label: "Level Progression",
                        value: ""
                          .concat(r.currentLevel, " → ")
                          .concat(r.targetLevel),
                        icon: i.A,
                        variant: "highlight",
                      }),
                    ],
                  }),
                  (0, a.jsxs)("section", {
                    className: "border-2 rounded-xl p-8 mb-8 ".concat(
                      M
                        ? "bg-beige border-secondary"
                        : E
                          ? "bg-beige border-orange"
                          : "bg-card border-border",
                    ),
                    "aria-label": "Sector compatibility assessment",
                    children: [
                      (0, a.jsxs)("h3", {
                        className:
                          "font-semibold text-gray-900 mb-4 flex items-center gap-2",
                        children: [
                          (0, a.jsx)(i.A, {
                            className: "h-5 w-5 ".concat(
                              M
                                ? "text-secondary"
                                : E
                                  ? "text-orange"
                                  : "text-muted-foreground",
                            ),
                            "aria-hidden": "true",
                          }),
                          e.targetSector
                            .split("-")
                            .map((e) => e.charAt(0).toUpperCase() + e.slice(1))
                            .join(" "),
                          " Sector Fit",
                        ],
                      }),
                      (0, a.jsxs)("div", {
                        className: "space-y-2 text-sm",
                        children: [
                          (0, a.jsxs)("div", {
                            className: "flex justify-between",
                            children: [
                              (0, a.jsx)("span", {
                                className: "text-muted-foreground",
                                children: "Your Target Level:",
                              }),
                              (0, a.jsx)("span", {
                                className: "font-semibold text-gray-900",
                                children: r.targetLevel,
                              }),
                            ],
                          }),
                          (0, a.jsxs)("div", {
                            className: "flex justify-between",
                            children: [
                              (0, a.jsx)("span", {
                                className: "text-muted-foreground",
                                children: "Minimum Required:",
                              }),
                              (0, a.jsx)("span", {
                                className: "font-semibold",
                                children: H.minimum,
                              }),
                            ],
                          }),
                          (0, a.jsxs)("div", {
                            className: "flex justify-between",
                            children: [
                              (0, a.jsx)("span", {
                                className: "text-muted-foreground",
                                children: "Recommended Level:",
                              }),
                              (0, a.jsx)("span", {
                                className: "font-semibold text-orange",
                                children: H.recommended,
                              }),
                            ],
                          }),
                          (0, a.jsx)("div", {
                            className: "mt-4 pt-4 border-t border-border",
                            children: M
                              ? (0, a.jsx)("p", {
                                  className: "text-secondary font-semibold",
                                  children:
                                    "✓ Excellent! You meet the recommended level for this sector.",
                                })
                              : E
                                ? (0, a.jsxs)("p", {
                                    className: "text-orange font-semibold",
                                    children: [
                                      "⚠ You meet the minimum. Consider studying further to ",
                                      H.recommended,
                                      " for better opportunities.",
                                    ],
                                  })
                                : (0, a.jsx)("p", {
                                    className:
                                      "text-muted-foreground font-semibold",
                                    children:
                                      "❌ Your target level is below the minimum requirement. Please adjust your target.",
                                  }),
                          }),
                        ],
                      }),
                    ],
                  }),
                  (0, a.jsxs)("section", {
                    className: "mb-6",
                    "aria-label": "Learning milestones timeline",
                    children: [
                      (0, a.jsxs)("h3", {
                        className:
                          "font-semibold text-gray-900 mb-4 flex items-center gap-2",
                        children: [
                          (0, a.jsx)(c.A, {
                            className: "h-5 w-5 text-orange",
                            "aria-hidden": "true",
                          }),
                          "Your Learning Milestones",
                        ],
                      }),
                      (0, a.jsx)("div", {
                        className: "space-y-3",
                        children: r.milestones.map((e, s) =>
                          (0, a.jsx)(
                            "article",
                            {
                              className:
                                "bg-cream border-2 border-beige rounded-xl p-4",
                              children: (0, a.jsxs)("div", {
                                className: "flex justify-between items-center",
                                children: [
                                  (0, a.jsxs)("div", {
                                    children: [
                                      (0, a.jsx)("span", {
                                        className:
                                          "text-lg font-bold text-orange",
                                        children: e.level,
                                      }),
                                      (0, a.jsxs)("span", {
                                        className: "text-sm text-gray-600 ml-2",
                                        children: [
                                          "A1" === e.level &&
                                            "(Basic phrases, simple interactions)",
                                          "A2" === e.level &&
                                            "(Everyday expressions, routine tasks)",
                                          "B1" === e.level &&
                                            "(Handle most situations, explain opinions)",
                                          "B2" === e.level &&
                                            "(Complex texts, fluent interactions)",
                                          "C1" === e.level &&
                                            "(Express ideas fluently)",
                                          "C2" === e.level &&
                                            "(Near-native proficiency)",
                                        ],
                                      }),
                                    ],
                                  }),
                                  (0, a.jsxs)("div", {
                                    className: "text-right",
                                    children: [
                                      (0, a.jsxs)("div", {
                                        className:
                                          "font-semibold text-gray-900",
                                        children: ["Week ", e.weeksFromStart],
                                      }),
                                      (0, a.jsxs)("div", {
                                        className: "text-sm text-gray-600",
                                        children: [
                                          e.cumulativeHours,
                                          "h total",
                                        ],
                                      }),
                                    ],
                                  }),
                                ],
                              }),
                            },
                            e.level,
                          ),
                        ),
                      }),
                    ],
                  }),
                  (0, a.jsxs)("section", {
                    className: "mb-6",
                    "aria-label": "Cost breakdown",
                    children: [
                      (0, a.jsxs)("h3", {
                        className:
                          "font-semibold text-gray-900 mb-4 flex items-center gap-2",
                        children: [
                          (0, a.jsx)(p.A, {
                            className: "h-5 w-5 text-orange",
                            "aria-hidden": "true",
                          }),
                          "Investment Breakdown",
                        ],
                      }),
                      (0, a.jsxs)("div", {
                        className: "space-y-3",
                        children: [
                          (0, a.jsxs)("div", {
                            className:
                              "flex justify-between items-center p-3 bg-cream rounded-lg",
                            children: [
                              (0, a.jsxs)("span", {
                                className: "text-sm text-gray-700",
                                children: [
                                  r.learningMethod,
                                  " (",
                                  r.hoursRequired,
                                  "h)",
                                ],
                              }),
                              (0, a.jsxs)("span", {
                                className: "font-semibold",
                                children: [
                                  "€",
                                  r.costBreakdown.courseFees.toLocaleString(),
                                ],
                              }),
                            ],
                          }),
                          (0, a.jsxs)("div", {
                            className:
                              "flex justify-between items-center p-3 bg-cream rounded-lg",
                            children: [
                              (0, a.jsx)("span", {
                                className: "text-sm text-gray-700",
                                children:
                                  "Learning Materials (Books, Apps, Resources)",
                              }),
                              (0, a.jsxs)("span", {
                                className: "font-semibold",
                                children: ["€", r.costBreakdown.materials],
                              }),
                            ],
                          }),
                          (0, a.jsxs)("div", {
                            className:
                              "flex justify-between items-center p-3 bg-cream rounded-lg",
                            children: [
                              (0, a.jsxs)("span", {
                                className: "text-sm text-gray-700",
                                children: [
                                  "Goethe-Zertifikat ",
                                  r.targetLevel,
                                  " Exam Fee",
                                ],
                              }),
                              (0, a.jsxs)("span", {
                                className: "font-semibold",
                                children: ["€", r.costBreakdown.examFee],
                              }),
                            ],
                          }),
                          (0, a.jsxs)("div", {
                            className:
                              "flex justify-between items-center p-4 bg-beige border-2 border-orange rounded-xl",
                            children: [
                              (0, a.jsx)("span", {
                                className: "font-semibold text-gray-900",
                                children: "Total Investment",
                              }),
                              (0, a.jsxs)("span", {
                                className: "text-2xl font-bold text-orange",
                                children: ["€", r.totalCost.toLocaleString()],
                              }),
                            ],
                          }),
                        ],
                      }),
                    ],
                  }),
                  (0, a.jsxs)("section", {
                    className: "bg-green text-white rounded-xl p-6 mb-6",
                    "aria-label": "Complete learning journey summary",
                    children: [
                      (0, a.jsx)("h3", {
                        className: "font-semibold mb-4",
                        children: "Your Complete Learning Journey",
                      }),
                      (0, a.jsxs)("div", {
                        className: "space-y-2 text-sm",
                        children: [
                          (0, a.jsxs)("div", {
                            className: "flex justify-between",
                            children: [
                              (0, a.jsx)("span", {
                                className: "opacity-90",
                                children: "Current → Target Level:",
                              }),
                              (0, a.jsxs)("span", {
                                className: "font-semibold",
                                children: [
                                  r.currentLevel,
                                  " → ",
                                  r.targetLevel,
                                ],
                              }),
                            ],
                          }),
                          (0, a.jsxs)("div", {
                            className: "flex justify-between",
                            children: [
                              (0, a.jsx)("span", {
                                className: "opacity-90",
                                children: "Study Commitment:",
                              }),
                              (0, a.jsxs)("span", {
                                className: "font-semibold",
                                children: [
                                  r.studyHoursPerWeek,
                                  "h/week for ",
                                  r.monthsRequired,
                                  " months",
                                ],
                              }),
                            ],
                          }),
                          (0, a.jsxs)("div", {
                            className: "flex justify-between",
                            children: [
                              (0, a.jsx)("span", {
                                className: "opacity-90",
                                children: "Learning Method:",
                              }),
                              (0, a.jsx)("span", {
                                className: "font-semibold",
                                children: r.learningMethod,
                              }),
                            ],
                          }),
                          (0, a.jsxs)("div", {
                            className: "flex justify-between",
                            children: [
                              (0, a.jsx)("span", {
                                className: "opacity-90",
                                children: "Total Investment:",
                              }),
                              (0, a.jsxs)("span", {
                                className: "font-semibold",
                                children: ["€", r.totalCost.toLocaleString()],
                              }),
                            ],
                          }),
                          (0, a.jsx)("div", {
                            className: "border-t border-white/20 my-2",
                          }),
                          (0, a.jsxs)("div", {
                            className: "flex justify-between items-center",
                            children: [
                              (0, a.jsx)("span", {
                                className: "font-semibold text-lg",
                                children: "Expected Completion:",
                              }),
                              (0, a.jsx)("span", {
                                className: "text-xl font-bold",
                                children: new Date(
                                  Date.now() + 7 * r.weeksRequired * 864e5,
                                ).toLocaleDateString("en-US", {
                                  month: "long",
                                  year: "numeric",
                                }),
                              }),
                            ],
                          }),
                        ],
                      }),
                    ],
                  }),
                  (0, a.jsxs)("div", {
                    className:
                      "text-sm text-muted-foreground p-3 bg-cream rounded-lg flex items-start gap-2",
                    children: [
                      (0, a.jsx)(g.A, {
                        className: "h-4 w-4 mt-0.5 shrink-0",
                        "aria-hidden": "true",
                      }),
                      (0, a.jsxs)("p", {
                        children: [
                          (0, a.jsx)("strong", { children: "Note:" }),
                          " These timelines are based on CEFR standards and average learning curves. Your actual progress may vary based on prior language experience, study consistency, immersion opportunities, and individual aptitude. Consider booking a language assessment for precise level placement.",
                        ],
                      }),
                    ],
                  }),
                  (0, a.jsx)("a", {
                    href: "https://bookgermantest.com/game?ref=Azubi",
                    target: "_blank",
                    rel: "noopener noreferrer",
                    className:
                      "block mt-4 p-4 bg-gradient-to-r from-slate-800 to-slate-900 rounded-xl border border-slate-700/50 hover:shadow-lg transition-all group",
                    children: (0, a.jsxs)("div", {
                      className: "flex items-center gap-3",
                      children: [
                        (0, a.jsx)("div", {
                          className:
                            "flex-shrink-0 w-10 h-10 rounded-lg bg-amber-500/20 flex items-center justify-center",
                          children: (0, a.jsx)(d.A, {
                            className: "w-5 h-5 text-amber-400",
                          }),
                        }),
                        (0, a.jsxs)("div", {
                          className: "flex-1 min-w-0",
                          children: [
                            (0, a.jsxs)("div", {
                              className: "font-medium text-white",
                              children: [
                                "Next Step: Book Your ",
                                r.targetLevel,
                                " Exam",
                              ],
                            }),
                            (0, a.jsx)("p", {
                              className: "text-sm text-slate-400",
                              children:
                                "Find available Goethe, \xd6SD, TELC & TestDaF slots",
                            }),
                          ],
                        }),
                        (0, a.jsx)(x.A, {
                          className:
                            "w-4 h-4 text-slate-500 group-hover:text-amber-400 transition-colors flex-shrink-0",
                        }),
                      ],
                    }),
                  }),
                ],
              }),
            !r && (0, a.jsx)(w.HowItWorksSection, { content: q }),
            (0, a.jsx)(y.ToolFAQSection, { faqs: k, className: "mb-8" }),
            (0, a.jsx)(A.RelatedTools, {
              currentToolSlug: "language-proficiency-calculator",
              limit: 3,
            }),
            (0, a.jsx)(j.CTASection, {
              title: "Find Your Perfect Ausbildung Match",
              description:
                "Browse verified job postings from German employers and find opportunities that align with your language skills and career goals.",
              action: {
                text: "Browse Live Positions",
                href: "/dashboard/jobs",
                variant: "default",
              },
              secondaryAction: {
                text: "Check Eligibility",
                href: "/tools/eligibility-checker",
                variant: "outline",
              },
              backgroundImage:
                "/images/hero-background-germany-natural-autumn.webp",
            }),
          ],
        });
      }
    },
    95334: (e, s, r) => {
      Promise.resolve().then(r.bind(r, 18775));
    },
  },
  (e) => {
    var s = (s) => e((e.s = s));
    (e.O(0, [46593, 36209, 84121, 72076, 77358], () => s(95334)),
      (_N_E = e.O()));
  },
]);
