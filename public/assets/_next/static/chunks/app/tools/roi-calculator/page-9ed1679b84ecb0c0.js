(self.webpackChunk_N_E = self.webpackChunk_N_E || []).push([
  [40978],
  {
    9391: (e, n, a) => {
      Promise.resolve().then(a.bind(a, 91960));
    },
    91960: (e, n, a) => {
      "use strict";
      a.d(n, { ROICalculatorClient: () => N });
      var t = a(70207),
        i = a(87223),
        s = a(16148),
        r = a(15450),
        o = a(11299),
        l = a(28131),
        c = a(72582),
        u = a(33482),
        d = a(79024),
        g = a(79650),
        m = a(81624),
        h = a(69230),
        p = a(47981),
        y = a(65915),
        v = a(27774),
        f = a(10863),
        b = a(20351),
        x = a(93595),
        A = a(14207),
        j = a(80374),
        C = a(79046),
        w = a(39441),
        I = a(67454),
        k = a(93501),
        T = a(55853),
        S = a(50018);
      let O = [
          {
            question: "What is the Ausbildung ROI Calculator?",
            answer:
              "The Ausbildung ROI Calculator is a free financial planning tool that helps you calculate the Return on Investment (ROI) for German vocational training programs. It analyzes total costs (blocked account, living expenses, insurance, visa fees), training stipend earnings (typically €850-€1,300/month), and post-training salary potential to determine how quickly your investment pays back and your long-term financial gains.",
          },
          {
            question: "How does the ROI Calculator work?",
            answer:
              "The calculator works by: (1) Collecting your planned expenses (blocked account €11,904, monthly living costs, insurance, travel), (2) Factoring in Ausbildung stipend earnings over 3 years (varies by sector: €850-€1,300/month), (3) Calculating post-training salary potential (€2,500-€4,000/month depending on sector), (4) Determining total investment, total earnings during training, and break-even point, (5) Comparing ROI with alternative education paths like university degrees.",
          },
          {
            question:
              "What costs are included in the Ausbildung ROI calculation?",
            answer:
              "The calculator includes all major costs: (1) Blocked Account: €11,904 for 2025 (mandatory financial proof), (2) Living Expenses: €700-€1,200/month (rent, food, utilities, transport), (3) Health Insurance: €110-€120/month, (4) Visa & Permit Fees: €75-€100, (5) Travel Costs: €500-€2,000 (flights to Germany), (6) Language Courses: €300-€800 (if needed), (7) Other Setup Costs: €500-€1,000 (deposits, initial expenses). Total typical investment: €20,000-€35,000 for the 3-year program.",
          },
          {
            question: "How much stipend will I earn during Ausbildung?",
            answer:
              "Ausbildung stipend (training salary) varies by sector and training year: Year 1: €850-€1,050/month, Year 2: €950-€1,150/month, Year 3: €1,050-€1,300/month. Healthcare and IT sectors typically offer higher stipends (€1,100-€1,300 in Year 3), while hospitality may be lower (€850-€1,000). Total earnings over 3 years typically range from €33,000 to €42,000, which significantly offsets your initial investment.",
          },
          {
            question:
              "What is the typical payback period for Ausbildung investment?",
            answer:
              "The payback period (time to recover your investment) typically ranges from 1-3 years after completing Ausbildung. For example, if you invest €25,000 total and earn a post-training salary of €3,000/month (€36,000/year), with living costs of €1,000/month (€12,000/year), your annual savings are €24,000. Minus the €33,000-€42,000 you already earned during training, you often break even within 1-2 years post-graduation.",
          },
          {
            question: "How does Ausbildung ROI compare to a university degree?",
            answer:
              "Ausbildung typically offers better short-term ROI than university: (1) Ausbildung: 3 years, earn €33,000-€42,000 during training, start work immediately, break even in 1-3 years. (2) University: 3-4 years, no earnings (or minimal part-time), higher total costs (€30,000-€60,000), break even in 4-7 years. However, university may offer higher long-term earnings in some fields. The calculator helps you compare both paths based on your specific situation.",
          },
          {
            question: "What salary can I expect after completing Ausbildung?",
            answer:
              "Post-Ausbildung salaries vary by sector: Healthcare (Nursing): €2,800-€3,500/month, IT & Technology: €3,000-€4,000/month, Engineering: €2,800-€3,800/month, Business Administration: €2,500-€3,200/month, Hospitality: €2,200-€2,800/month. With experience (5-10 years), salaries can increase to €3,500-€5,500/month. The calculator uses sector-specific salary data to project your earnings.",
          },
          {
            question: "Is the ROI Calculator accurate?",
            answer:
              "The calculator provides highly accurate estimates based on official data from: (1) German Federal Foreign Office (visa and blocked account requirements), (2) IHK - Chamber of Commerce (stipend ranges by sector), (3) German Federal Statistical Office (living costs, salary data), (4) GoAusbildung internal data from 1000+ successful placements. However, actual costs and earnings can vary based on city, company, and individual circumstances. Use it as a planning tool, not an absolute guarantee.",
          },
          {
            question:
              "Can I factor in scholarships or financial aid in the calculator?",
            answer:
              "Yes, the calculator allows you to input any scholarships, grants, or financial aid you receive. This reduces your total investment amount and improves your ROI significantly. Common sources include: DAAD scholarships (up to €850/month), company-sponsored training (some companies cover blocked account), government grants, and family support. Enter these amounts to see how they impact your break-even timeline.",
          },
          {
            question: "What factors can improve my Ausbildung ROI?",
            answer:
              "You can improve your ROI by: (1) Choosing high-paying sectors (Healthcare, IT, Engineering), (2) Living in affordable cities (Leipzig, Dresden vs Munich, Frankfurt), (3) Securing scholarships or company sponsorships, (4) Working part-time (up to 20 hours/week) during training, (5) Minimizing initial costs (shared housing, used furniture), (6) Completing language training in home country (cheaper than in Germany), (7) Negotiating higher starting salary after training completion.",
          },
        ],
        R = {
          title: "How to Use the ROI Calculator",
          description:
            "Calculate your return on investment for Ausbildung vs home country career. Compare earnings, costs, and long-term financial benefits.",
          steps: [
            {
              title: "Select Your Sector",
              description:
                "Choose the Ausbildung sector that matches your career goals. Different sectors offer different stipend ranges and post-training salaries.",
              icon: s.A,
            },
            {
              title: "Enter Your Details",
              description:
                "Configure your training duration, initial costs, monthly expenses, and current German level to get personalized calculations.",
              icon: r.A,
            },
            {
              title: "Compare ROI Results",
              description:
                "Review your complete financial breakdown including break-even point, 5-year earnings projection, and monthly balance during training.",
              icon: o.A,
            },
          ],
          inputs: [
            {
              label: "Ausbildung Sector",
              description: "Choose from Healthcare, IT, Engineering, etc.",
              icon: s.A,
            },
            {
              label: "Years of Experience",
              description: "Training duration (2-3.5 years)",
              icon: l.A,
            },
            {
              label: "Home Country Salary",
              description: "Initial investment including visa, flights, setup",
              icon: c.A,
            },
            {
              label: "Monthly Budget",
              description: "Living expenses during training",
              icon: u.A,
            },
          ],
          outputs: [
            {
              label: "Total ROI",
              description: "Complete return on investment calculation",
              icon: d.A,
            },
            {
              label: "Breakeven Point",
              description: "Time to recover your initial investment",
              icon: g.A,
            },
            {
              label: "Lifetime Earnings",
              description: "5-year earnings projection after training",
              icon: u.A,
            },
            {
              label: "Net Savings",
              description: "Your net position after training completion",
              icon: c.A,
            },
            {
              label: "Career Growth",
              description: "Salary progression with annual increases",
              icon: m.A,
            },
            {
              label: "Investment Analysis",
              description: "Monthly balance and total costs breakdown",
              icon: o.A,
            },
          ],
          additionalInfo:
            "All calculations factor in German living costs, tax rates, Ausbildung salary progression, and opportunity costs to give you accurate financial projections.",
        };
      function N() {
        let [e, n] = (0, i.useState)({
            sector: "",
            trainingDuration: 3,
            initialCosts: 14e3,
            monthlyExpenses: 750,
            germanLevel: "a1",
          }),
          [a, s] = (0, i.useState)(null),
          r = (e, a) => {
            n((n) => ({ ...n, [e]: a }));
          };
        return (0, t.jsxs)(v.d, {
          title: "Ausbildung ROI Calculator",
          description:
            "Calculate the financial benefits of German vocational training compared to other education options with 5-year projection.",
          icon: o.A,
          category: "Financial Planning",
          toolSlug: "roi-calculator",
          children: [
            (0, t.jsx)(x.$N, {
              icon: o.A,
              title: "Calculate Your Ausbildung ROI",
              description:
                "Discover the true financial benefits of German vocational training. This calculator analyzes your total investment, monthly stipend earnings (€850-€1,300), and post-training salary potential to show exactly when you'll break even and your long-term financial gains compared to university education.",
              variant: "info",
            }),
            (0, t.jsxs)(x.tZ, {
              title: "Enter Your Details",
              children: [
                (0, t.jsxs)("div", {
                  className: "grid md:grid-cols-2 gap-6",
                  children: [
                    (0, t.jsx)(x.vC, {
                      label: "Ausbildung Sector",
                      htmlFor: "sector",
                      required: !0,
                      children: (0, t.jsxs)(k.l6, {
                        value: e.sector,
                        onValueChange: (e) => r("sector", e),
                        children: [
                          (0, t.jsx)(k.bq, {
                            children: (0, t.jsx)(k.yv, {
                              placeholder: "Select a sector",
                            }),
                          }),
                          (0, t.jsx)(k.gC, {
                            children: (0, t.jsx)(k.s3, {
                              children: T.eS.map((e) =>
                                (0, t.jsx)(
                                  k.eb,
                                  { value: e.id, children: e.name },
                                  e.id,
                                ),
                              ),
                            }),
                          }),
                        ],
                      }),
                    }),
                    (0, t.jsx)(x.vC, {
                      label: "Training Duration (years)",
                      htmlFor: "trainingDuration",
                      description: "".concat(e.trainingDuration, " years"),
                      children: (0, t.jsx)(I.A, {
                        id: "trainingDuration",
                        min: 2,
                        max: 3.5,
                        step: 0.5,
                        value: [e.trainingDuration],
                        onValueChange: (e) => r("trainingDuration", e[0]),
                      }),
                    }),
                    (0, t.jsx)(x.vC, {
                      label: "Initial Investment (€)",
                      htmlFor: "initialCosts",
                      description:
                        "Includes visa costs, flights, setup costs in Germany and language preparation",
                      children: (0, t.jsxs)("div", {
                        className: "space-y-2",
                        children: [
                          (0, t.jsxs)("div", {
                            className:
                              "text-sm text-muted-foreground text-right",
                            children: [e.initialCosts, "€"],
                          }),
                          (0, t.jsx)(I.A, {
                            id: "initialCosts",
                            min: 1e4,
                            max: 2e4,
                            step: 1e3,
                            value: [e.initialCosts],
                            onValueChange: (e) => r("initialCosts", e[0]),
                          }),
                        ],
                      }),
                    }),
                    (0, t.jsx)(x.vC, {
                      label: "Monthly Expenses (€)",
                      htmlFor: "monthlyExpenses",
                      description:
                        "Includes rent, food, transportation, health insurance, etc.",
                      children: (0, t.jsxs)("div", {
                        className: "space-y-2",
                        children: [
                          (0, t.jsxs)("div", {
                            className:
                              "text-sm text-muted-foreground text-right",
                            children: [e.monthlyExpenses, "€"],
                          }),
                          (0, t.jsx)(I.A, {
                            id: "monthlyExpenses",
                            min: 600,
                            max: 1e3,
                            step: 50,
                            value: [e.monthlyExpenses],
                            onValueChange: (e) => r("monthlyExpenses", e[0]),
                          }),
                        ],
                      }),
                    }),
                    (0, t.jsx)(x.vC, {
                      label: "Current German Level",
                      htmlFor: "germanLevel",
                      description:
                        "This affects language course costs in your initial investment",
                      className: "md:col-span-2",
                      children: (0, t.jsxs)(k.l6, {
                        value: e.germanLevel,
                        onValueChange: (e) => r("germanLevel", e),
                        children: [
                          (0, t.jsx)(k.bq, {
                            children: (0, t.jsx)(k.yv, {
                              placeholder: "Select your current level",
                            }),
                          }),
                          (0, t.jsxs)(k.gC, {
                            children: [
                              (0, t.jsx)(k.eb, {
                                value: "none",
                                children: "No knowledge",
                              }),
                              (0, t.jsx)(k.eb, {
                                value: "a1",
                                children: "A1 (Basic)",
                              }),
                              (0, t.jsx)(k.eb, {
                                value: "a2",
                                children: "A2 (Elementary)",
                              }),
                              (0, t.jsx)(k.eb, {
                                value: "b1",
                                children: "B1 or higher (Intermediate)",
                              }),
                            ],
                          }),
                        ],
                      }),
                    }),
                  ],
                }),
                (0, t.jsx)("div", {
                  className: "space-y-4 mt-8",
                  children: (0, t.jsxs)("div", {
                    className: "flex gap-4",
                    children: [
                      (0, t.jsxs)(w.$, {
                        onClick: () => {
                          let n = T.eS.find((n) => n.id === e.sector),
                            a = 950;
                          if (n) {
                            let e = n.stipendRange.replace("€", "").split("-");
                            2 === e.length &&
                              (a = Math.floor(
                                (parseInt(e[0]) + parseInt(e[1])) / 2,
                              ));
                          }
                          let t = 0;
                          for (let n = 1; n <= e.trainingDuration; n++)
                            t += 12 * Math.floor(a * (1 + (n - 1) * 0.1));
                          let i = 12 * e.monthlyExpenses * e.trainingDuration,
                            r = 0;
                          switch (e.germanLevel) {
                            case "none":
                              r = 1500;
                              break;
                            case "a1":
                              r = 1e3;
                              break;
                            case "a2":
                              r = 500;
                              break;
                            default:
                              r = 0;
                          }
                          let o = e.initialCosts + r,
                            l = t - i - o,
                            c = 0;
                          switch (e.sector) {
                            case "healthcare":
                              c = 2800;
                              break;
                            case "it":
                              c = 3200;
                              break;
                            case "engineering":
                              c = 3e3;
                              break;
                            case "hospitality":
                              c = 2400;
                              break;
                            case "logistics":
                              c = 2600;
                              break;
                            case "sales":
                              c = 2500;
                              break;
                            default:
                              c = 2700;
                          }
                          let u = 0,
                            d = c;
                          for (let e = 1; e <= 5; e++)
                            ((u += 12 * d), (d *= 1.03));
                          let g = "";
                          if (l >= 0) g = "During training";
                          else {
                            let e = Math.ceil(Math.abs(l) / c);
                            g = "".concat(e, " months after training");
                          }
                          let m =
                            t / (12 * e.trainingDuration) - e.monthlyExpenses;
                          (s({
                            initialInvestment: o,
                            totalStipend: t,
                            netPositionAfterTraining: l,
                            startingSalary: c,
                            fiveYearEarnings: u,
                            timeToROI: g,
                            monthlyBalance: m,
                            totalExpenses: i,
                          }),
                            (0, b.r)("roi-calculator"));
                        },
                        className:
                          "flex-1 bg-orange hover:bg-orange/90 rounded-full",
                        disabled: !e.sector,
                        children: [
                          "Calculate ROI",
                          (0, t.jsx)(o.A, { className: "ml-2 h-4 w-4" }),
                        ],
                      }),
                      a &&
                        (0, t.jsx)(w.$, {
                          onClick: () => {
                            (n({
                              sector: "",
                              trainingDuration: 3,
                              initialCosts: 14e3,
                              monthlyExpenses: 750,
                              germanLevel: "a1",
                            }),
                              s(null));
                          },
                          variant: "outline",
                          className: "rounded-full",
                          children: (0, t.jsx)(h.A, { className: "h-4 w-4" }),
                        }),
                    ],
                  }),
                }),
              ],
            }),
            (0, t.jsx)("div", {
              className: "flex justify-center -mt-4 mb-8",
              children: (0, t.jsx)(b.A, {
                toolSlug: "roi-calculator",
                actionText: "ROI calculations completed",
              }),
            }),
            a &&
              (0, t.jsxs)(x.Q$, {
                title: "Your ROI Analysis",
                variant: "success",
                children: [
                  (0, t.jsx)("div", {
                    className: "flex justify-center mb-8",
                    "aria-hidden": "true",
                    children: (0, t.jsx)(S.default, {
                      src: "/mascot/mascot_excited_female.webp",
                      alt: "Young Oak mascot celebrating your ROI results",
                      width: 150,
                      height: 150,
                      className: "animate-float-slow",
                    }),
                  }),
                  (0, t.jsxs)("div", {
                    className: "grid md:grid-cols-2 gap-4 mb-6",
                    children: [
                      (0, t.jsx)(x.jA, {
                        label: "Initial Investment",
                        value: "€".concat(a.initialInvestment.toLocaleString()),
                        icon: p.A,
                        variant: "neutral",
                      }),
                      (0, t.jsx)(x.jA, {
                        label: "Total Stipend",
                        value: "€".concat(a.totalStipend.toLocaleString()),
                        icon: u.A,
                        variant: "green",
                      }),
                    ],
                  }),
                  (0, t.jsxs)("div", {
                    className: "grid md:grid-cols-2 gap-4 mb-6",
                    children: [
                      (0, t.jsx)(x.jA, {
                        label: "Monthly Balance",
                        value: ""
                          .concat(a.monthlyBalance >= 0 ? "+" : "", "€")
                          .concat(a.monthlyBalance.toLocaleString()),
                        icon: d.A,
                        variant: a.monthlyBalance >= 0 ? "green" : "neutral",
                      }),
                      (0, t.jsx)(x.jA, {
                        label: "After Training",
                        value: ""
                          .concat(
                            a.netPositionAfterTraining >= 0 ? "+" : "",
                            "€",
                          )
                          .concat(a.netPositionAfterTraining.toLocaleString()),
                        icon: d.A,
                        variant:
                          a.netPositionAfterTraining >= 0 ? "green" : "neutral",
                      }),
                    ],
                  }),
                  (0, t.jsxs)("div", {
                    className: "grid md:grid-cols-3 gap-4 mb-6",
                    children: [
                      (0, t.jsx)(x.jA, {
                        label: "Time to ROI",
                        value: a.timeToROI,
                        icon: l.A,
                        variant: "orange",
                      }),
                      (0, t.jsx)(x.jA, {
                        label: "Starting Salary",
                        value: "€".concat(
                          a.startingSalary.toLocaleString(),
                          "/mo",
                        ),
                        icon: u.A,
                        variant: "green",
                      }),
                      (0, t.jsx)(x.jA, {
                        label: "5-Year Earnings",
                        value: "€".concat(a.fiveYearEarnings.toLocaleString()),
                        icon: d.A,
                        variant: "green",
                      }),
                    ],
                  }),
                  (0, t.jsxs)("div", {
                    className:
                      "text-sm text-muted-foreground p-4 bg-muted rounded-lg flex items-start gap-2",
                    children: [
                      (0, t.jsx)(y.A, {
                        className: "h-4 w-4 mt-0.5 shrink-0",
                        "aria-hidden": "true",
                      }),
                      (0, t.jsx)("p", {
                        children:
                          "These calculations are estimates based on average values. Actual figures may vary based on location, company, and personal circumstances.",
                      }),
                    ],
                  }),
                ],
              }),
            !a && (0, t.jsx)(j.HowItWorksSection, { content: R }),
            (0, t.jsx)(f.ToolFAQSection, { faqs: O, className: "mb-8" }),
            (0, t.jsx)(C.RelatedTools, {
              currentToolSlug: "roi-calculator",
              limit: 3,
            }),
            (0, t.jsx)(A.CTASection, {
              title: "Ready to Apply? Browse Live Positions",
              description:
                "Explore verified job openings from German employers seeking international talent. Start your Ausbildung journey today.",
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
            }),
          ],
        });
      }
    },
  },
  (e) => {
    var n = (n) => e((e.s = n));
    (e.O(0, [46593, 36209, 84121, 72076, 77358], () => n(9391)),
      (_N_E = e.O()));
  },
]);
