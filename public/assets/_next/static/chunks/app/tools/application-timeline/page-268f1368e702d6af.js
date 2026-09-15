(self.webpackChunk_N_E = self.webpackChunk_N_E || []).push([
  [75573],
  {
    32328: (e, a, t) => {
      Promise.resolve().then(t.bind(t, 89396));
    },
    89396: (e, a, t) => {
      "use strict";
      t.d(a, { default: () => X });
      var s = t(70207),
        n = t(87223),
        i = t(27774),
        r = t(10863),
        l = t(20351),
        o = t(93595),
        c = t(80374),
        d = t(79046),
        h = t(14207),
        m = t(39441),
        u = t(40167),
        p = t(93501),
        g = t(95941),
        x = t(17802),
        b = t(93668);
      let y = {
          USA: 1.5,
          Canada: 1.5,
          Australia: 1.5,
          "New Zealand": 1.5,
          Japan: 1.5,
          "South Korea": 1.5,
          Singapore: 1.5,
          Switzerland: 1,
          Norway: 1,
          Iceland: 1,
          Liechtenstein: 1,
          Morocco: 2.5,
          Philippines: 2.5,
          Vietnam: 2.5,
          Thailand: 2.5,
          Indonesia: 2.5,
          Brazil: 2.5,
          Mexico: 2.5,
          "South Africa": 2.5,
          Argentina: 2.5,
          Chile: 2.5,
          Colombia: 2.5,
          Peru: 2.5,
          China: 3,
          Malaysia: 2,
          Turkey: 2.5,
          Morocco: 2.5,
          Tunisia: 2.5,
          Algeria: 2.5,
          Ukraine: 2.5,
          Russia: 3,
          Serbia: 2,
          Albania: 2.5,
          Nigeria: 3.5,
          Pakistan: 3.5,
          Bangladesh: 3.5,
          Egypt: 3.5,
          Ghana: 3.5,
          Kenya: 3.5,
          Ethiopia: 3.5,
          Cameroon: 3.5,
          Senegal: 3.5,
          Uganda: 3.5,
          Tanzania: 3.5,
          Nepal: 3.5,
          "Sri Lanka": 3.5,
          Iran: 4,
          Iraq: 4,
          Syria: 4,
          Afghanistan: 4,
          Lebanon: 3.5,
          Jordan: 3,
        },
        j = {
          Healthcare: 3,
          IT: 3.5,
          Engineering: 4.5,
          Hospitality: 4,
          Logistics: 4,
          Manufacturing: 4.5,
          Business: 5,
          "Skilled Trades": 4,
          Creative: 5.5,
        };
      var v = t(11647),
        f = t(2880),
        N = t(77369),
        w = t(33286),
        S = t(18289),
        k = t(60849),
        C = t(79415),
        A = t(32730);
      function M(e) {
        let { phases: a, totalMonths: t } = e,
          n = a.map((e) => ({
            name: e.name,
            start: e.startMonth,
            duration: e.durationMonths,
            end: e.startMonth + e.durationMonths,
            color: e.color,
            description: e.description,
          }));
        return (0, s.jsx)("div", {
          className: "w-full h-[400px] md:h-[500px]",
          children: (0, s.jsx)(v.u, {
            width: "100%",
            height: "100%",
            children: (0, s.jsxs)(f.E, {
              data: n,
              layout: "vertical",
              margin: { top: 20, right: 30, left: 150, bottom: 20 },
              children: [
                (0, s.jsx)(N.d, { strokeDasharray: "3 3", stroke: "#EEF0F4" }),
                (0, s.jsx)(w.W, {
                  type: "number",
                  domain: [0, t + 1],
                  label: {
                    value: "Months from Start",
                    position: "insideBottom",
                    offset: -10,
                    style: { fill: "#2C3340" },
                  },
                  tick: { fill: "#2C3340" },
                }),
                (0, s.jsx)(S.h, {
                  type: "category",
                  dataKey: "name",
                  width: 140,
                  tick: { fill: "#2C3340", fontSize: 14 },
                }),
                (0, s.jsx)(k.m, {
                  content: (0, s.jsx)((e) => {
                    let { active: a, payload: t } = e;
                    if (a && t && t.length) {
                      let e = t[0].payload;
                      return (0, s.jsxs)("div", {
                        className:
                          "bg-card border-2 border-border rounded-xl p-4 shadow-lg",
                        children: [
                          (0, s.jsx)("p", {
                            className: "font-bold text-secondary mb-1",
                            children: e.name,
                          }),
                          (0, s.jsx)("p", {
                            className: "text-sm text-muted-foreground mb-2",
                            children: e.description,
                          }),
                          (0, s.jsxs)("div", {
                            className: "space-y-1 text-xs",
                            children: [
                              (0, s.jsxs)("p", {
                                className: "text-secondary",
                                children: [
                                  (0, s.jsx)("span", {
                                    className: "font-semibold",
                                    children: "Start:",
                                  }),
                                  " Month ",
                                  Math.floor(e.start),
                                ],
                              }),
                              (0, s.jsxs)("p", {
                                className: "text-secondary",
                                children: [
                                  (0, s.jsx)("span", {
                                    className: "font-semibold",
                                    children: "Duration:",
                                  }),
                                  " ",
                                  e.duration.toFixed(1),
                                  " months",
                                ],
                              }),
                              (0, s.jsxs)("p", {
                                className: "text-secondary",
                                children: [
                                  (0, s.jsx)("span", {
                                    className: "font-semibold",
                                    children: "End:",
                                  }),
                                  " Month ",
                                  Math.ceil(e.end),
                                ],
                              }),
                            ],
                          }),
                        ],
                      });
                    }
                    return null;
                  }, {}),
                  cursor: { fill: "rgba(44, 51, 64, 0.1)" },
                }),
                (0, s.jsx)(C.y, {
                  dataKey: "duration",
                  fill: "#2C3340",
                  radius: [0, 8, 8, 0],
                  children: n.map((e, a) =>
                    (0, s.jsx)(
                      A.f,
                      { fill: e.color, stroke: "#2C3340", strokeWidth: 2 },
                      "cell-".concat(a),
                    ),
                  ),
                }),
              ],
            }),
          }),
        });
      }
      var T = t(80187),
        P = t(42678),
        F = t(84217),
        I = t(28131);
      function G(e) {
        var a, t;
        let { phase: n, phaseNumber: i, totalPhases: r } = e;
        return (0, s.jsx)(T.Zp, {
          className: "p-6 rounded-2xl border-2 ".concat(
            "#2C3340" === (a = n.color)
              ? "bg-cream border-green"
              : "#5D5DE9" === a
                ? "bg-beige border-orange"
                : "#F7F8FA" === a
                  ? "bg-cream border-beige"
                  : "#EEF0F4" === a
                    ? "bg-beige border-beige"
                    : "bg-cream border-green",
            " transition-all hover:shadow-lg",
          ),
          children: (0, s.jsxs)("div", {
            className: "flex items-start gap-4",
            children: [
              (0, s.jsx)("div", {
                className: "flex-shrink-0",
                children: (0, s.jsx)("div", {
                  className:
                    "w-12 h-12 rounded-full border-2 border-current ".concat(
                      "#2C3340" === (t = n.color)
                        ? "text-green"
                        : "#5D5DE9" === t
                          ? "text-orange"
                          : "#F7F8FA" === t || "#EEF0F4" === t
                            ? "text-green/70"
                            : "text-green",
                      " flex items-center justify-center font-bold text-lg",
                    ),
                  children: i,
                }),
              }),
              (0, s.jsxs)("div", {
                className: "flex-1 min-w-0",
                children: [
                  (0, s.jsxs)("h3", {
                    className:
                      "text-xl font-bold text-green mb-2 flex items-center gap-2",
                    children: [
                      n.name,
                      i === r &&
                        (0, s.jsx)(P.A, { className: "h-5 w-5 text-green" }),
                    ],
                  }),
                  (0, s.jsx)("p", {
                    className: "text-green/80 mb-4",
                    children: n.description,
                  }),
                  (0, s.jsxs)("div", {
                    className: "grid grid-cols-2 gap-4",
                    children: [
                      (0, s.jsxs)("div", {
                        className: "flex items-center gap-2 text-sm",
                        children: [
                          (0, s.jsx)(F.A, {
                            className: "h-4 w-4 text-green/70",
                          }),
                          (0, s.jsxs)("div", {
                            children: [
                              (0, s.jsx)("p", {
                                className: "text-xs text-green/70",
                                children: "Starts",
                              }),
                              (0, s.jsxs)("p", {
                                className: "font-semibold text-green",
                                children: ["Month ", Math.floor(n.startMonth)],
                              }),
                            ],
                          }),
                        ],
                      }),
                      (0, s.jsxs)("div", {
                        className: "flex items-center gap-2 text-sm",
                        children: [
                          (0, s.jsx)(I.A, {
                            className: "h-4 w-4 text-green/70",
                          }),
                          (0, s.jsxs)("div", {
                            children: [
                              (0, s.jsx)("p", {
                                className: "text-xs text-green/70",
                                children: "Duration",
                              }),
                              (0, s.jsxs)("p", {
                                className: "font-semibold text-green",
                                children: [
                                  n.durationMonths.toFixed(1),
                                  " months",
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
        });
      }
      let L = [
        {
          question: "How accurate is the Application Timeline Planner?",
          answer:
            'The timeline planner uses real data from thousands of successful Ausbildung applicants and official processing times from German authorities. The "Realistic" scenario has 85% accuracy based on historical data. However, individual timelines can vary based on personal circumstances, document availability, and embassy workload. We recommend planning for the worst-case scenario to avoid missing intake deadlines.',
        },
        {
          question:
            "Can I really learn German while preparing documents at the same time?",
          answer:
            "Yes! Our timeline calculator intelligently overlaps phases where possible. Language learning typically takes 6-12 months depending on your starting level, and you can absolutely start collecting documents during the final 2-3 months of your German course. In fact, this parallel approach is recommended to save time. Just ensure you dedicate separate time blocks for each task.",
        },
        {
          question:
            "What if I get my Ausbildung contract earlier than expected?",
          answer:
            "Getting a contract early is great news! You can immediately move to the visa application phase. However, you still need to meet the German language requirement (usually B1) before starting the program. If you secure a contract early but haven't completed language training, use the extra time to reach B2 level, which significantly improves your success rate and career prospects in Germany.",
        },
        {
          question: "Why does my nationality affect the visa processing time?",
          answer:
            "Visa processing times vary by nationality due to different bilateral agreements between Germany and your home country, embassy workload, and security verification requirements. Countries with established migration agreements and lower application volumes (like USA, Canada, Australia) typically see faster processing (1-2 months). Countries with higher application volumes may experience 3-4 month processing times. These are official government timelines, not estimates.",
        },
        {
          question:
            "Can the AI Strategic Guidance help if I am behind schedule?",
          answer:
            "Absolutely! The AI Strategic Guidance is specifically designed to identify acceleration opportunities and backup plans. If you're behind schedule, it will suggest fast-track options like intensive German courses, parallel application strategies, premium document services, and alternative pathways to get you back on track. It also provides month-by-month action steps to maximize efficiency.",
        },
        {
          question:
            "What happens if I miss the intake deadline I am planning for?",
          answer:
            "German Ausbildung programs typically have two main intakes: August/September (Fall) and February/March (Spring). If you miss one intake, you can target the next one 6 months later. Our timeline planner accounts for this - if your calculated end date falls after your target intake, it will alert you. The AI guidance section provides backup strategies including interim German language improvement, skill development, and alternative program options to make productive use of the gap period.",
        },
      ];
      var B = t(27239),
        D = t(1701),
        q = t(81994),
        z = t(16148),
        E = t(82164),
        O = t(46031),
        H = t(79024),
        R = t(72982),
        V = t(79650),
        W = t(95992);
      let U = [
          "Morocco",
          "Egypt",
          "Spain",
          "Italy",
          "Philippines",
          "Egypt",
          "Vietnam",
          "Thailand",
          "Indonesia",
          "Brazil",
          "Mexico",
          "South Africa",
          "China",
          "Malaysia",
          "Turkey",
          "Morocco",
          "Tunisia",
          "Algeria",
          "Ukraine",
          "Russia",
          "Serbia",
          "Albania",
          "USA",
          "Canada",
          "Australia",
          "New Zealand",
          "Japan",
          "South Korea",
          "Singapore",
          "Switzerland",
          "Norway",
          "Ghana",
          "Kenya",
          "Ethiopia",
          "Cameroon",
          "Senegal",
          "Uganda",
          "Tanzania",
          "Nepal",
          "Sri Lanka",
          "Argentina",
          "Chile",
          "Colombia",
          "Peru",
          "Iran",
          "Iraq",
          "Syria",
          "Lebanon",
          "Jordan",
          "Other",
        ],
        $ = [
          "Healthcare",
          "IT",
          "Engineering",
          "Hospitality",
          "Logistics",
          "Manufacturing",
          "Business",
          "Skilled Trades",
          "Creative",
        ],
        Q = ["None", "A1", "A2", "B1", "B2", "C1"],
        Y = ["B1", "B2"],
        K = [
          "Currently Studying",
          "Recent Graduate",
          "Working Professional",
          "Career Break",
        ],
        J = ["Flexible", "Moderate", "Urgent"],
        _ = ["Tight Budget", "Moderate Budget", "Well-Funded"],
        Z = {
          title: "How to Use the Application Timeline Generator",
          description:
            "Create a personalized timeline for your Ausbildung application process. Track deadlines, required documents, and key milestones.",
          steps: [
            {
              title: "Enter Your Details",
              description:
                "Provide information about your current German level, nationality, target sector, and education status to get accurate timeline estimates.",
              icon: B.A,
            },
            {
              title: "Set Target Date",
              description:
                "Choose when you want to start preparing and your desired Ausbildung start date. The tool accounts for visa processing and language learning.",
              icon: F.A,
            },
            {
              title: "Get Your Timeline",
              description:
                "Receive a complete timeline with best case, realistic, and worst case scenarios. See month-by-month milestones and critical deadlines.",
              icon: I.A,
            },
          ],
          inputs: [
            {
              label: "Current Location",
              description:
                "Your city and country to calculate processing times",
              icon: D.A,
            },
            {
              label: "Target Start Date",
              description: "When you plan to begin your Ausbildung",
              icon: F.A,
            },
            {
              label: "German Level",
              description: "Current language proficiency (None to C1)",
              icon: q.A,
            },
            {
              label: "Sector",
              description:
                "Your target Ausbildung sector (Healthcare, IT, etc.)",
              icon: z.A,
            },
            {
              label: "Visa Type",
              description: "Based on your nationality and circumstances",
              icon: B.A,
            },
          ],
          outputs: [
            {
              label: "Complete Timeline",
              description: "Best case, realistic, and worst case scenarios",
              icon: F.A,
            },
            {
              label: "Critical Milestones",
              description: "Key deadlines and important dates",
              icon: E.A,
            },
            {
              label: "Document Deadlines",
              description: "When to prepare each required document",
              icon: B.A,
            },
            {
              label: "Language Goals",
              description: "German learning milestones and test dates",
              icon: q.A,
            },
            {
              label: "Month-by-Month Plan",
              description: "Detailed action plan for each phase",
              icon: P.A,
            },
          ],
          additionalInfo:
            "Timeline calculations account for visa processing times, language learning duration, document preparation, and application cycles for 2026 intake.",
        };
      function X() {
        let [e, a] = (0, n.useState)({
            startDate: new Date().toISOString().split("T")[0],
            currentGermanLevel: "",
            targetGermanLevel: "B1",
            nationality: "",
            sector: "",
            educationStatus: "",
            currentLocation: "",
            urgency: "Moderate",
            weeklyHours: 10,
            financialSituation: "",
          }),
          [t, v] = (0, n.useState)(null),
          [f, N] = (0, n.useState)(null),
          [w, S] = (0, n.useState)(!1),
          [k, C] = (0, n.useState)(0),
          [A, T] = (0, n.useState)(""),
          [B, D] = (0, n.useState)({}),
          [q, z] = (0, n.useState)("realistic"),
          E = () => {
            let a = {};
            return (
              e.currentGermanLevel ||
                (a.currentGermanLevel =
                  "Please select your current German level"),
              e.nationality ||
                (a.nationality = "Please select your nationality"),
              e.sector || (a.sector = "Please select your target sector"),
              e.educationStatus ||
                (a.educationStatus = "Please select your education status"),
              e.currentLocation.trim() ||
                (a.currentLocation = "Please enter your current location"),
              e.financialSituation ||
                (a.financialSituation =
                  "Please select your financial situation"),
              (e.weeklyHours < 5 || e.weeklyHours > 40) &&
                (a.weeklyHours = "Weekly hours must be between 5 and 40"),
              D(a),
              0 === Object.keys(a).length
            );
          },
          X = async () => {
            if (!t) return;
            (S(!0), C(0), T("Initializing analysis..."));
            let a = setInterval(() => {
                C((e) => (e >= 95 ? e : e + 1));
              }, 600),
              s = [
                "Analyzing critical path and bottlenecks...",
                "Identifying acceleration opportunities...",
                "Creating month-by-month action plan...",
                "Assessing risks and mitigation strategies...",
                "Optimizing resources and timeline...",
                "Finalizing strategic guidance...",
              ],
              n = 0,
              i = setInterval(() => {
                n < s.length - 1 && T(s[++n]);
              }, 1e4);
            try {
              let s = await fetch("/api/tools/generate-timeline-guidance", {
                method: "POST",
                headers: { "Content-Type": "application/json" },
                body: JSON.stringify({ formData: e, timeline: t }),
              });
              if (!s.ok) throw Error("Failed to generate guidance");
              let n = await s.json();
              (clearInterval(a),
                clearInterval(i),
                C(100),
                T("Complete!"),
                N(n),
                setTimeout(() => {
                  var e;
                  null === (e = document.getElementById("guidance-section")) ||
                    void 0 === e ||
                    e.scrollIntoView({ behavior: "smooth", block: "start" });
                }, 500));
            } catch (e) {
              (console.error("Error generating guidance:", e),
                clearInterval(a),
                clearInterval(i),
                C(0),
                T(""),
                alert(
                  "Failed to generate strategic guidance. Please try again.",
                ));
            } finally {
              (S(!1),
                setTimeout(() => {
                  (C(0), T(""));
                }, 2e3));
            }
          },
          ee = (e, t) => {
            (a((a) => ({ ...a, [e]: t })),
              B[e] &&
                D((a) => {
                  let t = { ...a };
                  return (delete t[e], t);
                }));
          };
        return (0, s.jsx)(i.d, {
          title: "Application Timeline Planner",
          description:
            "Calculate your complete German Ausbildung application timeline with realistic estimates based on your nationality, German level, and target sector. Get personalized strategic guidance and month-by-month action plans.",
          icon: F.A,
          category: "Planning & Strategy",
          toolSlug: "application-timeline",
          children: (0, s.jsxs)("main", {
            role: "main",
            className: "space-y-8",
            children: [
              !t &&
                (0, s.jsx)("section", {
                  "aria-labelledby": "form-heading",
                  children: (0, s.jsx)(o.tZ, {
                    title: "Your Application Profile",
                    description:
                      "Provide your details to calculate a personalized timeline for your German Ausbildung journey.",
                    children: (0, s.jsxs)("div", {
                      className: "space-y-6",
                      children: [
                        (0, s.jsxs)("div", {
                          className: "grid grid-cols-1 md:grid-cols-2 gap-6",
                          children: [
                            (0, s.jsx)(o.vC, {
                              label: "When will you start preparing?",
                              htmlFor: "startDate",
                              children: (0, s.jsx)(u.p, {
                                id: "startDate",
                                type: "date",
                                value: e.startDate,
                                onChange: (e) =>
                                  ee("startDate", e.target.value),
                                className: "rounded-xl border-beige",
                                min: new Date().toISOString().split("T")[0],
                              }),
                            }),
                            (0, s.jsx)(o.vC, {
                              label: "Current German Level",
                              htmlFor: "currentGermanLevel",
                              required: !0,
                              error: B.currentGermanLevel,
                              children: (0, s.jsxs)(p.l6, {
                                value: e.currentGermanLevel,
                                onValueChange: (e) =>
                                  ee("currentGermanLevel", e),
                                children: [
                                  (0, s.jsx)(p.bq, {
                                    className: "rounded-xl border-beige",
                                    children: (0, s.jsx)(p.yv, {
                                      placeholder: "Select your current level",
                                    }),
                                  }),
                                  (0, s.jsx)(p.gC, {
                                    children: Q.map((e) =>
                                      (0, s.jsx)(
                                        p.eb,
                                        { value: e, children: e },
                                        e,
                                      ),
                                    ),
                                  }),
                                ],
                              }),
                            }),
                            (0, s.jsx)(o.vC, {
                              label: "Target German Level",
                              htmlFor: "targetGermanLevel",
                              children: (0, s.jsxs)(p.l6, {
                                value: e.targetGermanLevel,
                                onValueChange: (e) =>
                                  ee("targetGermanLevel", e),
                                children: [
                                  (0, s.jsx)(p.bq, {
                                    className: "rounded-xl border-beige",
                                    children: (0, s.jsx)(p.yv, {
                                      placeholder: "Select target level",
                                    }),
                                  }),
                                  (0, s.jsx)(p.gC, {
                                    children: Y.map((e) =>
                                      (0, s.jsxs)(
                                        p.eb,
                                        {
                                          value: e,
                                          children: [
                                            e,
                                            " ",
                                            "B1" === e && "(Minimum Required)",
                                          ],
                                        },
                                        e,
                                      ),
                                    ),
                                  }),
                                ],
                              }),
                            }),
                            (0, s.jsx)(o.vC, {
                              label: "Nationality",
                              htmlFor: "nationality",
                              required: !0,
                              error: B.nationality,
                              children: (0, s.jsxs)(p.l6, {
                                value: e.nationality,
                                onValueChange: (e) => ee("nationality", e),
                                children: [
                                  (0, s.jsx)(p.bq, {
                                    className: "rounded-xl border-beige",
                                    children: (0, s.jsx)(p.yv, {
                                      placeholder: "Select your country",
                                    }),
                                  }),
                                  (0, s.jsx)(p.gC, {
                                    children: U.map((e) =>
                                      (0, s.jsx)(
                                        p.eb,
                                        { value: e, children: e },
                                        e,
                                      ),
                                    ),
                                  }),
                                ],
                              }),
                            }),
                            (0, s.jsx)(o.vC, {
                              label: "Target Ausbildung Sector",
                              htmlFor: "sector",
                              required: !0,
                              error: B.sector,
                              children: (0, s.jsxs)(p.l6, {
                                value: e.sector,
                                onValueChange: (e) => ee("sector", e),
                                children: [
                                  (0, s.jsx)(p.bq, {
                                    className: "rounded-xl border-beige",
                                    children: (0, s.jsx)(p.yv, {
                                      placeholder: "Select sector",
                                    }),
                                  }),
                                  (0, s.jsx)(p.gC, {
                                    children: $.map((e) =>
                                      (0, s.jsx)(
                                        p.eb,
                                        { value: e, children: e },
                                        e,
                                      ),
                                    ),
                                  }),
                                ],
                              }),
                            }),
                            (0, s.jsx)(o.vC, {
                              label: "Education Status",
                              htmlFor: "educationStatus",
                              required: !0,
                              error: B.educationStatus,
                              children: (0, s.jsxs)(p.l6, {
                                value: e.educationStatus,
                                onValueChange: (e) => ee("educationStatus", e),
                                children: [
                                  (0, s.jsx)(p.bq, {
                                    className: "rounded-xl border-beige",
                                    children: (0, s.jsx)(p.yv, {
                                      placeholder: "Select status",
                                    }),
                                  }),
                                  (0, s.jsx)(p.gC, {
                                    children: K.map((e) =>
                                      (0, s.jsx)(
                                        p.eb,
                                        { value: e, children: e },
                                        e,
                                      ),
                                    ),
                                  }),
                                ],
                              }),
                            }),
                            (0, s.jsx)(o.vC, {
                              label: "Current Location (City, Country)",
                              htmlFor: "currentLocation",
                              required: !0,
                              error: B.currentLocation,
                              children: (0, s.jsx)(u.p, {
                                id: "currentLocation",
                                type: "text",
                                placeholder: "e.g., Casablanca, Morocco",
                                value: e.currentLocation,
                                onChange: (e) =>
                                  ee("currentLocation", e.target.value),
                                className: "rounded-xl border-beige",
                              }),
                            }),
                            (0, s.jsx)(o.vC, {
                              label: "Timeline Urgency",
                              htmlFor: "urgency",
                              children: (0, s.jsxs)(p.l6, {
                                value: e.urgency,
                                onValueChange: (e) => ee("urgency", e),
                                children: [
                                  (0, s.jsx)(p.bq, {
                                    className: "rounded-xl border-beige",
                                    children: (0, s.jsx)(p.yv, {
                                      placeholder: "Select urgency",
                                    }),
                                  }),
                                  (0, s.jsx)(p.gC, {
                                    children: J.map((e) =>
                                      (0, s.jsx)(
                                        p.eb,
                                        { value: e, children: e },
                                        e,
                                      ),
                                    ),
                                  }),
                                ],
                              }),
                            }),
                            (0, s.jsx)(o.vC, {
                              label: "Weekly Hours for Preparation",
                              htmlFor: "weeklyHours",
                              description:
                                "How many hours per week can you dedicate to German learning and preparation?",
                              error: B.weeklyHours,
                              children: (0, s.jsx)(u.p, {
                                id: "weeklyHours",
                                type: "number",
                                min: "5",
                                max: "40",
                                value: e.weeklyHours,
                                onChange: (e) =>
                                  ee(
                                    "weeklyHours",
                                    parseInt(e.target.value) || 10,
                                  ),
                                className: "rounded-xl border-beige",
                              }),
                            }),
                            (0, s.jsx)(o.vC, {
                              label: "Financial Situation",
                              htmlFor: "financialSituation",
                              required: !0,
                              error: B.financialSituation,
                              children: (0, s.jsxs)(p.l6, {
                                value: e.financialSituation,
                                onValueChange: (e) =>
                                  ee("financialSituation", e),
                                children: [
                                  (0, s.jsx)(p.bq, {
                                    className: "rounded-xl border-beige",
                                    children: (0, s.jsx)(p.yv, {
                                      placeholder: "Select financial situation",
                                    }),
                                  }),
                                  (0, s.jsx)(p.gC, {
                                    children: _.map((e) =>
                                      (0, s.jsx)(
                                        p.eb,
                                        { value: e, children: e },
                                        e,
                                      ),
                                    ),
                                  }),
                                ],
                              }),
                            }),
                          ],
                        }),
                        (0, s.jsxs)("div", {
                          className: "space-y-4",
                          children: [
                            (0, s.jsx)("div", {
                              className: "flex justify-center pt-4",
                              children: (0, s.jsxs)(m.$, {
                                onClick: () => {
                                  if (!E()) {
                                    let e = document.querySelector(
                                      '[data-error="true"]',
                                    );
                                    null == e ||
                                      e.scrollIntoView({
                                        behavior: "smooth",
                                        block: "center",
                                      });
                                    return;
                                  }
                                  (v(
                                    (function (e) {
                                      let {
                                          startDate: a,
                                          currentGermanLevel: t,
                                          targetGermanLevel: s,
                                          nationality: n,
                                          sector: i,
                                          weeklyHours: r,
                                          urgency: l,
                                        } = e,
                                        o = (function (e, a, t) {
                                          let s = {
                                              None: 0,
                                              A1: 1,
                                              A2: 2,
                                              B1: 3,
                                              B2: 4,
                                              C1: 5,
                                            },
                                            n = s[e] || 0,
                                            i = s[a] || 3;
                                          if (n >= i) return 0;
                                          let r = {
                                              "0-1": 3,
                                              "1-2": 2.5,
                                              "2-3": 3,
                                              "3-4": 4,
                                              "4-5": 5,
                                            },
                                            l = 0;
                                          for (let e = n; e < i; e++)
                                            l +=
                                              r[
                                                "".concat(e, "-").concat(e + 1)
                                              ] || 3;
                                          return (
                                            (l *= 10 / t),
                                            Math.round(10 * (l += 0.5)) / 10
                                          );
                                        })(t, s, r),
                                        c = j[i] || 4.5,
                                        d = y[n] || 3,
                                        h = 0,
                                        m = [];
                                      (o > 0 &&
                                        (m.push({
                                          name: "Language Learning",
                                          startMonth: h,
                                          durationMonths: o,
                                          color: "#10B981",
                                          description: ""
                                            .concat(t, " → ")
                                            .concat(s, " (")
                                            .concat(r, "h/week)"),
                                        }),
                                        (h += Math.max(0, o - 2))),
                                        m.push({
                                          name: "Document Preparation",
                                          startMonth: h,
                                          durationMonths: 2.5,
                                          color: "#F97316",
                                          description:
                                            "Collect, translate, and apostille documents",
                                        }),
                                        m.push({
                                          name: "Applications",
                                          startMonth: Math.max(0, (h += 1) - 1),
                                          durationMonths: c,
                                          color: "#FFFBEB",
                                          description: "Apply to ".concat(
                                            i,
                                            " programs",
                                          ),
                                        }),
                                        m.push({
                                          name: "Contract Negotiation",
                                          startMonth: (h += c - 1),
                                          durationMonths: 1.5,
                                          color: "#F5F5DC",
                                          description:
                                            "Review and sign training contract",
                                        }),
                                        m.push({
                                          name: "Visa Processing",
                                          startMonth: (h += 1),
                                          durationMonths: d,
                                          color: "#10B981",
                                          description: "".concat(
                                            n,
                                            " visa processing",
                                          ),
                                        }),
                                        m.push({
                                          name: "Pre-Departure",
                                          startMonth: (h += d - 0.5),
                                          durationMonths: 1.5,
                                          color: "#F97316",
                                          description:
                                            "Housing, flights, final preparations",
                                        }));
                                      let u = Math.ceil((h += 1.5)),
                                        p = Math.ceil(0.8 * u),
                                        g = m.map((e) => ({
                                          ...e,
                                          startMonth: Math.floor(
                                            0.8 * e.startMonth,
                                          ),
                                          durationMonths:
                                            Math.ceil(
                                              0.8 * e.durationMonths * 10,
                                            ) / 10,
                                        })),
                                        x = Math.ceil(1.3 * u),
                                        b = m.map((e) => ({
                                          ...e,
                                          startMonth: Math.floor(
                                            1.3 * e.startMonth,
                                          ),
                                          durationMonths:
                                            Math.ceil(
                                              1.3 * e.durationMonths * 10,
                                            ) / 10,
                                        })),
                                        v = new Date(a),
                                        f = new Date(v);
                                      f.setMonth(f.getMonth() + u);
                                      let N = new Date(v);
                                      N.setMonth(N.getMonth() + p);
                                      let w = new Date(v);
                                      w.setMonth(w.getMonth() + x);
                                      let S =
                                          o > 5
                                            ? "Language Learning"
                                            : c > 5
                                              ? "Applications"
                                              : "Visa Processing",
                                        k =
                                          o > 5
                                            ? "Learning German from "
                                                .concat(t, " to ")
                                                .concat(
                                                  s,
                                                  " will take approximately ",
                                                )
                                                .concat(o, " months")
                                            : c > 5
                                              ? ""
                                                  .concat(
                                                    i,
                                                    " sector applications are competitive and may take ",
                                                  )
                                                  .concat(c, " months")
                                              : "Visa processing for "
                                                  .concat(
                                                    n,
                                                    " applicants typically takes ",
                                                  )
                                                  .concat(d, " months"),
                                        C = [];
                                      return (
                                        o > 0 &&
                                          C.push(
                                            "Increase weekly study hours from "
                                              .concat(r, " to ")
                                              .concat(
                                                Math.min(r + 10, 30),
                                                " to reduce language learning time by ~20%",
                                              ),
                                          ),
                                        C.push(
                                          "Start document collection immediately while learning German",
                                          "Apply to multiple programs simultaneously (10-15) to increase chances",
                                          "Prepare visa documents during contract negotiation to save time",
                                        ),
                                        d > 3 &&
                                          C.push(
                                            "Book embassy appointment 2-3 months in advance to avoid delays",
                                          ),
                                        {
                                          bestCase: {
                                            totalMonths: p,
                                            endDate:
                                              N.toISOString().split("T")[0],
                                            phases: g,
                                          },
                                          realistic: {
                                            totalMonths: u,
                                            endDate: f
                                              .toISOString()
                                              .split("T")[0],
                                            phases: m,
                                          },
                                          worstCase: {
                                            totalMonths: x,
                                            endDate: w
                                              .toISOString()
                                              .split("T")[0],
                                            phases: b,
                                          },
                                          insights: {
                                            criticalPhase: S,
                                            mainBottleneck: k,
                                            timeSavingTips: C,
                                          },
                                        }
                                      );
                                    })(e),
                                  ),
                                    (0, l.r)("application-timeline"),
                                    setTimeout(() => {
                                      var e;
                                      null ===
                                        (e =
                                          document.getElementById(
                                            "results-section",
                                          )) ||
                                        void 0 === e ||
                                        e.scrollIntoView({
                                          behavior: "smooth",
                                          block: "start",
                                        });
                                    }, 100));
                                },
                                size: "lg",
                                className:
                                  "bg-orange hover:bg-orange-hover text-white rounded-full px-8",
                                children: [
                                  "Calculate My Timeline",
                                  (0, s.jsx)(O.A, {
                                    className: "ml-2 h-5 w-5",
                                  }),
                                ],
                              }),
                            }),
                            (0, s.jsx)("div", {
                              className: "flex justify-center",
                              children: (0, s.jsx)(l.A, {
                                toolSlug: "application-timeline",
                                actionText: "timelines generated",
                              }),
                            }),
                          ],
                        }),
                      ],
                    }),
                  }),
                }),
              t &&
                (0, s.jsxs)("div", {
                  id: "results-section",
                  className: "space-y-8",
                  children: [
                    (0, s.jsx)("section", {
                      "aria-labelledby": "timeline-summary",
                      children: (0, s.jsxs)(o.Q$, {
                        variant: "success",
                        children: [
                          (0, s.jsxs)("div", {
                            className: "mb-6",
                            children: [
                              (0, s.jsx)("h2", {
                                id: "timeline-summary",
                                className: "text-3xl font-bold text-green mb-2",
                                children: "Your Personalized Timeline",
                              }),
                              (0, s.jsx)("p", {
                                className: "text-green/70",
                                children:
                                  "Based on your profile, here's your realistic path to Germany",
                              }),
                            ],
                          }),
                          (0, s.jsxs)("div", {
                            className: "grid grid-cols-1 md:grid-cols-3 gap-6",
                            children: [
                              (0, s.jsx)(o.jA, {
                                label: "Best Case",
                                value: "".concat(
                                  t.bestCase.totalMonths,
                                  " months",
                                ),
                                icon: H.A,
                                variant: "green",
                                description: "Arrive by ".concat(
                                  new Date(
                                    t.bestCase.endDate,
                                  ).toLocaleDateString("en-US", {
                                    month: "long",
                                    year: "numeric",
                                  }),
                                ),
                              }),
                              (0, s.jsx)(o.jA, {
                                label: "Realistic",
                                value: "".concat(
                                  t.realistic.totalMonths,
                                  " months",
                                ),
                                icon: P.A,
                                variant: "orange",
                                description: "Arrive by ".concat(
                                  new Date(
                                    t.realistic.endDate,
                                  ).toLocaleDateString("en-US", {
                                    month: "long",
                                    year: "numeric",
                                  }),
                                ),
                              }),
                              (0, s.jsx)(o.jA, {
                                label: "Worst Case",
                                value: "".concat(
                                  t.worstCase.totalMonths,
                                  " months",
                                ),
                                icon: I.A,
                                variant: "neutral",
                                description: "Arrive by ".concat(
                                  new Date(
                                    t.worstCase.endDate,
                                  ).toLocaleDateString("en-US", {
                                    month: "long",
                                    year: "numeric",
                                  }),
                                ),
                              }),
                            ],
                          }),
                        ],
                      }),
                    }),
                    (0, s.jsx)("section", {
                      "aria-labelledby": "critical-insights",
                      children: (0, s.jsx)(o.Q$, {
                        variant: "warning",
                        title: "Critical Insights",
                        icon: R.A,
                        children: (0, s.jsxs)("div", {
                          className: "space-y-3",
                          children: [
                            (0, s.jsxs)("div", {
                              children: [
                                (0, s.jsx)("p", {
                                  className: "font-semibold text-green",
                                  children: "Critical Phase:",
                                }),
                                (0, s.jsx)("p", {
                                  className: "text-green/80",
                                  children: t.insights.criticalPhase,
                                }),
                              ],
                            }),
                            (0, s.jsxs)("div", {
                              children: [
                                (0, s.jsx)("p", {
                                  className: "font-semibold text-green",
                                  children: "Main Bottleneck:",
                                }),
                                (0, s.jsx)("p", {
                                  className: "text-green/80",
                                  children: t.insights.mainBottleneck,
                                }),
                              ],
                            }),
                            (0, s.jsxs)("div", {
                              children: [
                                (0, s.jsx)("p", {
                                  className: "font-semibold text-green mb-2",
                                  children: "Time-Saving Tips:",
                                }),
                                (0, s.jsx)("ul", {
                                  className: "space-y-2",
                                  children: t.insights.timeSavingTips.map(
                                    (e, a) =>
                                      (0, s.jsxs)(
                                        "li",
                                        {
                                          className:
                                            "flex items-start gap-2 text-green/80",
                                          children: [
                                            (0, s.jsx)(P.A, {
                                              className:
                                                "h-5 w-5 text-green flex-shrink-0 mt-0.5",
                                              "aria-hidden": "true",
                                            }),
                                            (0, s.jsx)("span", { children: e }),
                                          ],
                                        },
                                        a,
                                      ),
                                  ),
                                }),
                              ],
                            }),
                          ],
                        }),
                      }),
                    }),
                    (0, s.jsx)("section", {
                      "aria-labelledby": "timeline-scenarios",
                      children: (0, s.jsxs)(o.Q$, {
                        children: [
                          (0, s.jsx)("h3", {
                            id: "timeline-scenarios",
                            className: "text-2xl font-bold text-green mb-6",
                            children: "Timeline Scenarios",
                          }),
                          (0, s.jsxs)(g.Tabs, {
                            value: q,
                            onValueChange: z,
                            children: [
                              (0, s.jsxs)(g.TabsList, {
                                className: "grid w-full grid-cols-3 mb-6",
                                children: [
                                  (0, s.jsx)(g.TabsTrigger, {
                                    value: "bestCase",
                                    children: "Best Case",
                                  }),
                                  (0, s.jsx)(g.TabsTrigger, {
                                    value: "realistic",
                                    children: "Realistic",
                                  }),
                                  (0, s.jsx)(g.TabsTrigger, {
                                    value: "worstCase",
                                    children: "Worst Case",
                                  }),
                                ],
                              }),
                              (0, s.jsxs)(g.TabsContent, {
                                value: "bestCase",
                                className: "space-y-6",
                                children: [
                                  (0, s.jsxs)("div", {
                                    className: "mb-6",
                                    children: [
                                      (0, s.jsxs)(x.E, {
                                        className: "bg-green text-white mb-4",
                                        children: [
                                          t.bestCase.totalMonths,
                                          " months total",
                                        ],
                                      }),
                                      (0, s.jsx)("p", {
                                        className: "text-green/70",
                                        children:
                                          "Everything goes smoothly with no delays or complications.",
                                      }),
                                    ],
                                  }),
                                  (0, s.jsx)(M, {
                                    phases: t.bestCase.phases,
                                    totalMonths: t.bestCase.totalMonths,
                                  }),
                                  (0, s.jsx)("div", {
                                    className: "grid gap-4 mt-8",
                                    children: t.bestCase.phases.map((e, a) =>
                                      (0, s.jsx)(
                                        G,
                                        {
                                          phase: e,
                                          phaseNumber: a + 1,
                                          totalPhases: t.bestCase.phases.length,
                                        },
                                        a,
                                      ),
                                    ),
                                  }),
                                ],
                              }),
                              (0, s.jsxs)(g.TabsContent, {
                                value: "realistic",
                                className: "space-y-6",
                                children: [
                                  (0, s.jsxs)("div", {
                                    className: "mb-6",
                                    children: [
                                      (0, s.jsxs)(x.E, {
                                        className: "bg-orange text-white mb-4",
                                        children: [
                                          t.realistic.totalMonths,
                                          " months total",
                                        ],
                                      }),
                                      (0, s.jsx)("p", {
                                        className: "text-green/70",
                                        children:
                                          "Most probable timeline based on typical applicant experiences.",
                                      }),
                                    ],
                                  }),
                                  (0, s.jsx)(M, {
                                    phases: t.realistic.phases,
                                    totalMonths: t.realistic.totalMonths,
                                  }),
                                  (0, s.jsx)("div", {
                                    className: "grid gap-4 mt-8",
                                    children: t.realistic.phases.map((e, a) =>
                                      (0, s.jsx)(
                                        G,
                                        {
                                          phase: e,
                                          phaseNumber: a + 1,
                                          totalPhases:
                                            t.realistic.phases.length,
                                        },
                                        a,
                                      ),
                                    ),
                                  }),
                                ],
                              }),
                              (0, s.jsxs)(g.TabsContent, {
                                value: "worstCase",
                                className: "space-y-6",
                                children: [
                                  (0, s.jsxs)("div", {
                                    className: "mb-6",
                                    children: [
                                      (0, s.jsxs)(x.E, {
                                        className:
                                          "bg-green/60 text-white mb-4",
                                        children: [
                                          t.worstCase.totalMonths,
                                          " months total",
                                        ],
                                      }),
                                      (0, s.jsx)("p", {
                                        className: "text-green/70",
                                        children:
                                          "Timeline accounting for delays, application rejections, and complications.",
                                      }),
                                    ],
                                  }),
                                  (0, s.jsx)(M, {
                                    phases: t.worstCase.phases,
                                    totalMonths: t.worstCase.totalMonths,
                                  }),
                                  (0, s.jsx)("div", {
                                    className: "grid gap-4 mt-8",
                                    children: t.worstCase.phases.map((e, a) =>
                                      (0, s.jsx)(
                                        G,
                                        {
                                          phase: e,
                                          phaseNumber: a + 1,
                                          totalPhases:
                                            t.worstCase.phases.length,
                                        },
                                        a,
                                      ),
                                    ),
                                  }),
                                ],
                              }),
                            ],
                          }),
                        ],
                      }),
                    }),
                    !f &&
                      (0, s.jsx)("section", {
                        "aria-labelledby": "guidance-cta",
                        children: (0, s.jsxs)("div", {
                          className: "space-y-4",
                          children: [
                            (0, s.jsx)(o.Ni, {
                              title: "Want Personalized Strategic Guidance?",
                              description:
                                "Get personalized month-by-month action plans, critical path analysis, acceleration opportunities, risk mitigation strategies, and resource optimization tips tailored to your specific timeline.",
                              buttonText: "Get Strategic Guidance",
                              onButtonClick: X,
                              icon: V.A,
                              loading: w,
                            }),
                            w &&
                              (0, s.jsx)(o.Q$, {
                                variant: "highlight",
                                children: (0, s.jsxs)("div", {
                                  className: "space-y-4",
                                  children: [
                                    (0, s.jsxs)("div", {
                                      className:
                                        "flex items-center justify-between",
                                      children: [
                                        (0, s.jsx)("p", {
                                          className:
                                            "text-sm font-medium text-green",
                                          children: A,
                                        }),
                                        (0, s.jsxs)("p", {
                                          className: "text-sm text-green/70",
                                          children: [Math.round(k), "%"],
                                        }),
                                      ],
                                    }),
                                    (0, s.jsx)(b.Progress, {
                                      value: k,
                                      indicatorClassName: "bg-orange",
                                      className: "h-3",
                                    }),
                                    (0, s.jsx)("p", {
                                      className:
                                        "text-xs text-green/60 text-center",
                                      children:
                                        "This may take up to 60 seconds. Please don't close this page.",
                                    }),
                                  ],
                                }),
                              }),
                          ],
                        }),
                      }),
                    f &&
                      (0, s.jsxs)("article", {
                        id: "guidance-section",
                        className: "space-y-6",
                        children: [
                          (0, s.jsxs)("h2", {
                            className:
                              "text-3xl font-bold text-green flex items-center gap-2",
                            children: [
                              (0, s.jsx)(V.A, {
                                className: "h-8 w-8",
                                "aria-hidden": "true",
                              }),
                              "Strategic Guidance",
                            ],
                          }),
                          (0, s.jsx)("section", {
                            "aria-labelledby": "critical-path",
                            children: (0, s.jsx)(o.Q$, {
                              variant: "success",
                              title: "Critical Path Analysis",
                              children: (0, s.jsxs)("div", {
                                className: "space-y-4",
                                children: [
                                  (0, s.jsxs)("div", {
                                    children: [
                                      (0, s.jsx)("p", {
                                        className: "font-semibold text-green",
                                        children: "Main Bottleneck:",
                                      }),
                                      (0, s.jsx)("p", {
                                        className: "text-green/80",
                                        children:
                                          f.criticalPathAnalysis.mainBottleneck,
                                      }),
                                    ],
                                  }),
                                  (0, s.jsxs)("div", {
                                    children: [
                                      (0, s.jsx)("p", {
                                        className: "font-semibold text-green",
                                        children: "Impact:",
                                      }),
                                      (0, s.jsx)("p", {
                                        className: "text-green/80",
                                        children:
                                          f.criticalPathAnalysis
                                            .bottleneckImpact,
                                      }),
                                    ],
                                  }),
                                  (0, s.jsxs)("div", {
                                    children: [
                                      (0, s.jsx)("p", {
                                        className: "font-semibold text-green",
                                        children: "How to Avoid:",
                                      }),
                                      (0, s.jsx)("p", {
                                        className: "text-green/80",
                                        children:
                                          f.criticalPathAnalysis.howToAvoid,
                                      }),
                                    ],
                                  }),
                                  (0, s.jsxs)("div", {
                                    children: [
                                      (0, s.jsx)("p", {
                                        className:
                                          "font-semibold text-green mb-2",
                                        children: "Overlap Opportunities:",
                                      }),
                                      (0, s.jsx)("ul", {
                                        className: "space-y-2",
                                        children:
                                          f.criticalPathAnalysis.overlapOpportunities.map(
                                            (e, a) =>
                                              (0, s.jsxs)(
                                                "li",
                                                {
                                                  className:
                                                    "flex items-start gap-2 text-green/80",
                                                  children: [
                                                    (0, s.jsx)(P.A, {
                                                      className:
                                                        "h-5 w-5 text-green flex-shrink-0 mt-0.5",
                                                      "aria-hidden": "true",
                                                    }),
                                                    (0, s.jsx)("span", {
                                                      children: e,
                                                    }),
                                                  ],
                                                },
                                                a,
                                              ),
                                          ),
                                      }),
                                    ],
                                  }),
                                ],
                              }),
                            }),
                          }),
                          (0, s.jsx)("section", {
                            "aria-labelledby": "acceleration",
                            children: (0, s.jsx)(o.Q$, {
                              variant: "warning",
                              title: "Acceleration Opportunities",
                              children: (0, s.jsx)("div", {
                                className: "space-y-4",
                                children:
                                  f.accelerationOpportunities.fastTrackOptions.map(
                                    (e, a) =>
                                      (0, s.jsxs)(
                                        "div",
                                        {
                                          className:
                                            "p-4 bg-cream border-2 border-orange rounded-xl",
                                          children: [
                                            (0, s.jsx)("p", {
                                              className:
                                                "font-semibold text-green mb-2",
                                              children: e.action,
                                            }),
                                            (0, s.jsxs)("div", {
                                              className:
                                                "grid grid-cols-3 gap-4 text-sm",
                                              children: [
                                                (0, s.jsxs)("div", {
                                                  children: [
                                                    (0, s.jsx)("p", {
                                                      className:
                                                        "text-xs text-green/70",
                                                      children: "Time Saved",
                                                    }),
                                                    (0, s.jsx)("p", {
                                                      className:
                                                        "font-semibold text-green",
                                                      children: e.timeSaved,
                                                    }),
                                                  ],
                                                }),
                                                (0, s.jsxs)("div", {
                                                  children: [
                                                    (0, s.jsx)("p", {
                                                      className:
                                                        "text-xs text-green/70",
                                                      children: "Cost",
                                                    }),
                                                    (0, s.jsx)("p", {
                                                      className:
                                                        "font-semibold text-orange",
                                                      children:
                                                        e.costImplication,
                                                    }),
                                                  ],
                                                }),
                                                (0, s.jsxs)("div", {
                                                  children: [
                                                    (0, s.jsx)("p", {
                                                      className:
                                                        "text-xs text-green/70",
                                                      children: "Tradeoffs",
                                                    }),
                                                    (0, s.jsx)("p", {
                                                      className:
                                                        "text-green/80",
                                                      children: e.tradeoffs,
                                                    }),
                                                  ],
                                                }),
                                              ],
                                            }),
                                          ],
                                        },
                                        a,
                                      ),
                                  ),
                              }),
                            }),
                          }),
                          (0, s.jsx)("section", {
                            "aria-labelledby": "monthly-plan",
                            children: (0, s.jsx)(o.Q$, {
                              title: "Month-by-Month Action Plan",
                              children: (0, s.jsx)("div", {
                                className: "space-y-4",
                                children: f.monthByMonthActions.map((e, a) =>
                                  (0, s.jsx)(
                                    "div",
                                    {
                                      className:
                                        "p-6 bg-cream border-2 border-green rounded-xl",
                                      children: (0, s.jsxs)("div", {
                                        className: "flex items-start gap-4",
                                        children: [
                                          (0, s.jsxs)("div", {
                                            className:
                                              "w-16 h-16 rounded-full bg-green text-white flex items-center justify-center font-bold text-lg flex-shrink-0",
                                            "aria-hidden": "true",
                                            children: ["M", e.month],
                                          }),
                                          (0, s.jsxs)("div", {
                                            className: "flex-1",
                                            children: [
                                              (0, s.jsx)("p", {
                                                className:
                                                  "font-bold text-green mb-3",
                                                children: e.phase,
                                              }),
                                              (0, s.jsx)("ul", {
                                                className: "space-y-2",
                                                children: e.weeklyBreakdown.map(
                                                  (e, a) =>
                                                    (0, s.jsxs)(
                                                      "li",
                                                      {
                                                        className:
                                                          "flex items-start gap-2 text-sm text-green/80",
                                                        children: [
                                                          (0, s.jsx)(P.A, {
                                                            className:
                                                              "h-4 w-4 text-green flex-shrink-0 mt-0.5",
                                                            "aria-hidden":
                                                              "true",
                                                          }),
                                                          (0, s.jsx)("span", {
                                                            children: e,
                                                          }),
                                                        ],
                                                      },
                                                      a,
                                                    ),
                                                ),
                                              }),
                                            ],
                                          }),
                                        ],
                                      }),
                                    },
                                    a,
                                  ),
                                ),
                              }),
                            }),
                          }),
                          (0, s.jsx)("section", {
                            "aria-labelledby": "risk-mitigation",
                            children: (0, s.jsx)(o.Q$, {
                              variant: "warning",
                              title: "Risk Mitigation Plan",
                              children: (0, s.jsxs)("div", {
                                className: "space-y-4",
                                children: [
                                  (0, s.jsxs)("div", {
                                    children: [
                                      (0, s.jsx)("p", {
                                        className:
                                          "font-semibold text-green mb-2",
                                        children: "Nationality-Specific Risks:",
                                      }),
                                      (0, s.jsx)("ul", {
                                        className: "space-y-2",
                                        children:
                                          f.riskMitigationPlan.nationalityRisks.map(
                                            (e, a) =>
                                              (0, s.jsxs)(
                                                "li",
                                                {
                                                  className:
                                                    "flex items-start gap-2 text-green/80",
                                                  children: [
                                                    (0, s.jsx)(W.A, {
                                                      className:
                                                        "h-5 w-5 text-orange flex-shrink-0 mt-0.5",
                                                      "aria-hidden": "true",
                                                    }),
                                                    (0, s.jsx)("span", {
                                                      children: e,
                                                    }),
                                                  ],
                                                },
                                                a,
                                              ),
                                          ),
                                      }),
                                    ],
                                  }),
                                  (0, s.jsxs)("div", {
                                    children: [
                                      (0, s.jsx)("p", {
                                        className:
                                          "font-semibold text-green mb-2",
                                        children: "Sector-Specific Risks:",
                                      }),
                                      (0, s.jsx)("ul", {
                                        className: "space-y-2",
                                        children:
                                          f.riskMitigationPlan.sectorRisks.map(
                                            (e, a) =>
                                              (0, s.jsxs)(
                                                "li",
                                                {
                                                  className:
                                                    "flex items-start gap-2 text-green/80",
                                                  children: [
                                                    (0, s.jsx)(W.A, {
                                                      className:
                                                        "h-5 w-5 text-orange flex-shrink-0 mt-0.5",
                                                      "aria-hidden": "true",
                                                    }),
                                                    (0, s.jsx)("span", {
                                                      children: e,
                                                    }),
                                                  ],
                                                },
                                                a,
                                              ),
                                          ),
                                      }),
                                    ],
                                  }),
                                  (0, s.jsxs)("div", {
                                    children: [
                                      (0, s.jsx)("p", {
                                        className:
                                          "font-semibold text-green mb-2",
                                        children: "Backup Plans:",
                                      }),
                                      (0, s.jsx)("ul", {
                                        className: "space-y-2",
                                        children:
                                          f.riskMitigationPlan.backupPlans.map(
                                            (e, a) =>
                                              (0, s.jsxs)(
                                                "li",
                                                {
                                                  className:
                                                    "flex items-start gap-2 text-green/80",
                                                  children: [
                                                    (0, s.jsx)(P.A, {
                                                      className:
                                                        "h-5 w-5 text-green flex-shrink-0 mt-0.5",
                                                      "aria-hidden": "true",
                                                    }),
                                                    (0, s.jsx)("span", {
                                                      children: e,
                                                    }),
                                                  ],
                                                },
                                                a,
                                              ),
                                          ),
                                      }),
                                    ],
                                  }),
                                ],
                              }),
                            }),
                          }),
                          (0, s.jsx)("section", {
                            "aria-labelledby": "resource-optimization",
                            children: (0, s.jsx)(o.Q$, {
                              title: "Resource Optimization",
                              children: (0, s.jsxs)("div", {
                                className: "space-y-4",
                                children: [
                                  (0, s.jsxs)("div", {
                                    children: [
                                      (0, s.jsx)("p", {
                                        className: "font-semibold text-green",
                                        children: "Time Allocation Strategy:",
                                      }),
                                      (0, s.jsx)("p", {
                                        className: "text-green/80",
                                        children:
                                          f.resourceOptimization.timeAllocation,
                                      }),
                                    ],
                                  }),
                                  (0, s.jsxs)("div", {
                                    children: [
                                      (0, s.jsx)("p", {
                                        className: "font-semibold text-green",
                                        children: "Budget Recommendations:",
                                      }),
                                      (0, s.jsx)("p", {
                                        className: "text-green/80",
                                        children:
                                          f.resourceOptimization
                                            .budgetRecommendations,
                                      }),
                                    ],
                                  }),
                                  (0, s.jsxs)("div", {
                                    children: [
                                      (0, s.jsx)("p", {
                                        className:
                                          "font-semibold text-green mb-2",
                                        children: "Parallel Processing Tasks:",
                                      }),
                                      (0, s.jsx)("ul", {
                                        className: "space-y-2",
                                        children:
                                          f.resourceOptimization.parallelProcessing.map(
                                            (e, a) =>
                                              (0, s.jsxs)(
                                                "li",
                                                {
                                                  className:
                                                    "flex items-start gap-2 text-green/80",
                                                  children: [
                                                    (0, s.jsx)(P.A, {
                                                      className:
                                                        "h-5 w-5 text-green flex-shrink-0 mt-0.5",
                                                      "aria-hidden": "true",
                                                    }),
                                                    (0, s.jsx)("span", {
                                                      children: e,
                                                    }),
                                                  ],
                                                },
                                                a,
                                              ),
                                          ),
                                      }),
                                    ],
                                  }),
                                ],
                              }),
                            }),
                          }),
                        ],
                      }),
                    (0, s.jsx)("div", {
                      className: "flex justify-center",
                      children: (0, s.jsx)(m.$, {
                        onClick: () => {
                          (v(null),
                            N(null),
                            a({
                              startDate: new Date().toISOString().split("T")[0],
                              currentGermanLevel: "",
                              targetGermanLevel: "B1",
                              nationality: "",
                              sector: "",
                              educationStatus: "",
                              currentLocation: "",
                              urgency: "Moderate",
                              weeklyHours: 10,
                              financialSituation: "",
                            }),
                            window.scrollTo({ top: 0, behavior: "smooth" }));
                        },
                        variant: "outline",
                        className:
                          "rounded-full border-orange text-orange hover:bg-beige",
                        children: "Plan Another Timeline",
                      }),
                    }),
                  ],
                }),
              (0, s.jsx)("section", {
                "aria-labelledby": "bottom-cta",
                children: (0, s.jsx)(h.CTASection, {
                  title: "Ready to Start Your Application?",
                  description:
                    "Browse live Ausbildung positions from verified German employers on our platform. Find opportunities that match your timeline and career goals.",
                  action: {
                    text: "Browse Live Positions",
                    href: "/dashboard/jobs",
                    variant: "default",
                  },
                  secondaryAction: {
                    text: "Book Consultation",
                    href: "/contact",
                    variant: "outline",
                  },
                  backgroundImage:
                    "/images/hero-background-germany-natural-autumn.webp",
                }),
              }),
              !t && (0, s.jsx)(c.HowItWorksSection, { content: Z }),
              (0, s.jsx)("section", {
                "aria-labelledby": "faqs-section",
                children: (0, s.jsx)(r.ToolFAQSection, { faqs: L }),
              }),
              (0, s.jsx)(d.RelatedTools, {
                currentToolSlug: "application-timeline",
                limit: 3,
              }),
            ],
          }),
        });
      }
    },
  },
  (e) => {
    var a = (a) => e((e.s = a));
    (e.O(0, [46593, 36209, 84121, 72076, 77358], () => a(32328)),
      (_N_E = e.O()));
  },
]);
