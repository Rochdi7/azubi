(self.webpackChunk_N_E = self.webpackChunk_N_E || []).push([
  [59650],
  {
    9356: (e, a, n) => {
      Promise.resolve().then(n.bind(n, 50933));
    },
    50933: (e, a, n) => {
      "use strict";
      (n.r(a), n.d(a, { default: () => T }));
      var s = n(70207),
        t = n(87223),
        r = n(16148),
        o = n(15450),
        i = n(72582),
        c = n(27239),
        l = n(84217),
        d = n(28131),
        u = n(15480),
        m = n(67739),
        h = n(62165),
        p = n(65915),
        x = n(69230),
        f = n(27774),
        b = n(10863),
        y = n(20351),
        g = n(93595),
        v = n(80374),
        j = n(79046),
        k = n(39441),
        N = n(87277),
        w = n(93501),
        A = n(40167);
      let C = [
          {
            question: "What is a blocked account (Sperrkonto) for Germany?",
            answer:
              "A blocked account (Sperrkonto in German) is a special bank account required for all international students and Ausbildung trainees applying for a German visa. You must deposit a specific minimum amount (€11,904 for Winter 2026) before applying for your visa. Once in Germany, you can withdraw a limited amount each month (€992/month) to cover living expenses. This proves to German authorities that you have sufficient funds to support yourself during your stay.",
          },
          {
            question:
              "How much money do I need in my blocked account for Ausbildung in 2026?",
            answer:
              "For Winter 2026 intake (starting September 2026 or later), you need exactly €11,904 in your blocked account. This amount is set by the German Federal Foreign Office and is updated annually based on living cost estimates. For Summer 2026 (if applicable), the requirement may differ. The €11,904 covers 12 months of living expenses at €992 per month, which is the government-mandated minimum for financial proof.",
          },
          {
            question: "When do I need to open my blocked account?",
            answer:
              "You should open your blocked account 3-4 months before your visa appointment. The timeline: Month 1: Research banks and choose provider, Month 2: Submit application and wait for account confirmation (can take 2-4 weeks), Month 3: Transfer funds and wait for confirmation certificate (1-2 weeks), Month 4: Use confirmation certificate for visa application. Starting early is crucial because international bank transfers can take time, and you need the certificate before your visa interview.",
          },
          {
            question: "Which banks offer blocked accounts for Germany?",
            answer:
              "Popular blocked account providers include: Fintiba (€149 setup, most popular, fast processing), Deutsche Bank (€150 setup, traditional option), Expatrio (€49 setup, includes additional services), Coracle (digital-first, competitive fees), X-Patrio (student-focused). Each has different fees, processing times, and additional services. Our calculator helps you compare total costs including setup fees, monthly charges, and transfer fees.",
          },
          {
            question: "What are the total costs for opening a blocked account?",
            answer:
              "Total costs typically include: Setup/Opening Fee: €49-€150 (one-time), Monthly Account Fee: €0-€5.90/month, International Transfer Fee: €10-€50 (varies by your bank), Currency Conversion Fee: 0.5%-3% of transfer amount. Total first-year costs typically range from €100 to €300 depending on the provider. Our calculator shows exact costs for each option so you can choose the most affordable solution.",
          },
          {
            question: "Can I use a blocked account from my home country bank?",
            answer:
              "No, you cannot use a regular savings account from your home country. German visa authorities only accept blocked accounts (Sperrkonto) from specific German banks or authorized international providers. These accounts have special legal status in Germany and are regulated to ensure monthly withdrawal limits. You must use one of the approved providers like Fintiba, Deutsche Bank, Expatrio, or other licensed Sperrkonto services.",
          },
          {
            question: "How do monthly withdrawals from blocked account work?",
            answer:
              "Once you arrive in Germany and register your address (Anmeldung), your blocked account is activated for monthly withdrawals. You can withdraw €992 per month automatically. The money is transferred to your regular German bank account (like N26, Sparkasse, or Deutsche Bank). You cannot withdraw the full amount at once - it is strictly limited to 1/12 of the total each month. This ensures you have funds available throughout the year.",
          },
          {
            question:
              "What happens to my blocked account money if my visa is rejected?",
            answer:
              "If your visa application is rejected, you can request a full refund of your blocked account deposit. The process: Submit visa rejection letter to your blocked account provider, Request account closure and refund, Money is transferred back to your original account within 2-4 weeks, Setup fees are generally non-refundable. Keep all documentation from your visa interview. Most providers have straightforward refund processes for rejected visa cases.",
          },
          {
            question:
              "Do I need a blocked account if I have an Ausbildung contract with stipend?",
            answer:
              "Yes, you still need a blocked account even if you have an Ausbildung contract with a monthly stipend. German visa law requires financial proof for all visa types, regardless of whether you will earn money during training. However, some consulates may reduce the required amount if you can prove guaranteed monthly income from your training contract. Contact your local German consulate to confirm specific requirements for Ausbildung visa applicants.",
          },
          {
            question: "Can I top up my blocked account after opening it?",
            answer:
              "Yes, you can add more money to your blocked account at any time. This is useful if: Living costs increase, You want extra emergency funds, You extend your stay in Germany beyond the initial period, Your visa is extended for additional training years. Simply make another international transfer to your blocked account number. The monthly withdrawal limit may be adjusted based on the new total balance and remaining months.",
          },
        ],
        F = [
          {
            id: "fintiba",
            name: "Fintiba",
            setupFee: 149,
            monthlyFee: 5.9,
            transferFee: 0,
            currencyConversionRate: 1.5,
            processingTime: "1-2 weeks",
            additionalServices: [
              "Insurance support",
              "Student ID",
              "24/7 support",
            ],
            popularity: "Most popular",
          },
          {
            id: "deutsche-bank",
            name: "Deutsche Bank",
            setupFee: 150,
            monthlyFee: 0,
            transferFee: 15,
            currencyConversionRate: 2,
            processingTime: "2-3 weeks",
            additionalServices: ["Traditional banking", "Branch access"],
            popularity: "Traditional option",
          },
          {
            id: "expatrio",
            name: "Expatrio",
            setupFee: 49,
            monthlyFee: 4.9,
            transferFee: 5,
            currencyConversionRate: 1.2,
            processingTime: "1-2 weeks",
            additionalServices: [
              "Insurance included",
              "SIM card",
              "Banking app",
            ],
            popularity: "Budget-friendly",
          },
          {
            id: "coracle",
            name: "Coracle",
            setupFee: 50,
            monthlyFee: 0,
            transferFee: 10,
            currencyConversionRate: 1,
            processingTime: "1 week",
            additionalServices: [
              "Digital-first",
              "Fast processing",
              "Low fees",
            ],
            popularity: "Digital banking",
          },
        ],
        S = {
          title: "How to Use the Blocked Account Calculator",
          description:
            "Get accurate cost estimates for your German blocked account (Sperrkonto) in seconds. Compare providers and plan your budget effectively.",
          steps: [
            {
              title: "Select Your Provider",
              description:
                "Choose from popular blocked account providers like Fintiba, Deutsche Bank, Expatrio, or Coracle. Each has different fee structures and services.",
              icon: r.A,
            },
            {
              title: "Configure Your Details",
              description:
                "Enter your visa type, duration of stay, and intake year to get accurate calculations based on 2026 requirements.",
              icon: o.A,
            },
            {
              title: "Get Instant Breakdown",
              description:
                "See the complete cost breakdown including setup fees, monthly charges, transfer fees, and currency conversion estimates.",
              icon: i.A,
            },
          ],
          inputs: [
            {
              label: "Provider",
              description:
                "Choose from Fintiba, Deutsche Bank, Expatrio, or Coracle",
              icon: r.A,
            },
            {
              label: "Visa Type",
              description: "Ausbildung, Student Visa, or Job Seeker Visa",
              icon: c.A,
            },
            {
              label: "Duration",
              description: "Number of months (6-36 months)",
              icon: l.A,
            },
            {
              label: "Intake Year",
              description: "2026 or 2027 (amounts may vary)",
              icon: d.A,
            },
          ],
          outputs: [
            {
              label: "Required Amount",
              description: "Minimum blocked account deposit (€11,904 for 2026)",
              icon: u.A,
            },
            {
              label: "Setup Fees",
              description: "One-time provider setup/opening fee",
              icon: m.A,
            },
            {
              label: "Monthly Fees",
              description: "Account maintenance fees over your duration",
              icon: l.A,
            },
            {
              label: "Transfer & Conversion Fees",
              description:
                "International transfer and currency conversion costs",
              icon: h.A,
            },
            {
              label: "Total Cost",
              description:
                "Complete amount you need to prepare including all fees",
              icon: i.A,
            },
            {
              label: "Provider Details",
              description: "Processing time and additional services included",
              icon: p.A,
            },
          ],
          additionalInfo:
            "All calculations are based on official 2026 blocked account requirements (€992/month). The calculator helps you compare total costs across different providers to make an informed decision.",
        };
      function T() {
        let [e, a] = (0, t.useState)({
            provider: "fintiba",
            visaType: "ausbildung",
            duration: 12,
            intakeYear: "2026",
          }),
          [n, o] = (0, t.useState)(null),
          c = (e, n) => {
            a((a) => ({ ...a, [e]: n }));
          };
        return (0, s.jsxs)(f.d, {
          title: "Blocked Account Calculator for Germany",
          description:
            "Calculate the exact blocked account (Sperrkonto) amount and total costs for your German Ausbildung visa. Compare providers and fees.",
          icon: i.A,
          category: "Financial Planning",
          toolSlug: "blocked-account-calculator",
          children: [
            (0, s.jsx)("div", {
              className: "bg-beige border-2 border-border rounded-2xl p-6 mb-8",
              children: (0, s.jsxs)("div", {
                className: "flex items-start gap-4",
                children: [
                  (0, s.jsx)("div", {
                    className: "p-3 bg-orange rounded-lg",
                    "aria-hidden": "true",
                    children: (0, s.jsx)(p.A, {
                      className: "h-6 w-6 text-white",
                    }),
                  }),
                  (0, s.jsxs)("div", {
                    children: [
                      (0, s.jsx)("h3", {
                        className: "font-semibold text-green mb-2",
                        children: "Winter 2026 Intake Requirement",
                      }),
                      (0, s.jsxs)("p", {
                        className: "text-sm text-green/80",
                        children: [
                          "The official blocked account amount for Winter 2026 (September 2026 onwards) is",
                          " ",
                          (0, s.jsx)("strong", {
                            className: "text-orange",
                            children: "€11,904",
                          }),
                          " (€992/month \xd7 12 months). This is set by the German Federal Foreign Office and updated annually.",
                        ],
                      }),
                    ],
                  }),
                ],
              }),
            }),
            (0, s.jsxs)(g.tZ, {
              title: "Calculate Your Costs",
              children: [
                (0, s.jsxs)("div", {
                  className: "grid md:grid-cols-2 gap-6",
                  children: [
                    (0, s.jsxs)("div", {
                      className: "space-y-3",
                      children: [
                        (0, s.jsx)(N.J, {
                          htmlFor: "provider",
                          children: "Blocked Account Provider",
                        }),
                        (0, s.jsxs)(w.l6, {
                          value: e.provider,
                          onValueChange: (e) => c("provider", e),
                          children: [
                            (0, s.jsx)(w.bq, {
                              children: (0, s.jsx)(w.yv, {
                                placeholder: "Select a provider",
                              }),
                            }),
                            (0, s.jsx)(w.gC, {
                              children: F.map((e) =>
                                (0, s.jsxs)(
                                  w.eb,
                                  {
                                    value: e.id,
                                    children: [e.name, " - ", e.popularity],
                                  },
                                  e.id,
                                ),
                              ),
                            }),
                          ],
                        }),
                        (0, s.jsx)("p", {
                          className: "text-xs text-muted-foreground",
                          children:
                            "Compare different blocked account providers based on fees and services",
                        }),
                      ],
                    }),
                    (0, s.jsxs)("div", {
                      className: "space-y-3",
                      children: [
                        (0, s.jsx)(N.J, {
                          htmlFor: "visaType",
                          children: "Visa Type",
                        }),
                        (0, s.jsxs)(w.l6, {
                          value: e.visaType,
                          onValueChange: (e) => c("visaType", e),
                          children: [
                            (0, s.jsx)(w.bq, {
                              children: (0, s.jsx)(w.yv, {
                                placeholder: "Select visa type",
                              }),
                            }),
                            (0, s.jsxs)(w.gC, {
                              children: [
                                (0, s.jsx)(w.eb, {
                                  value: "ausbildung",
                                  children: "Ausbildung (Vocational Training)",
                                }),
                                (0, s.jsx)(w.eb, {
                                  value: "student",
                                  children: "Student Visa",
                                }),
                                (0, s.jsx)(w.eb, {
                                  value: "jobseeker",
                                  children: "Job Seeker Visa",
                                }),
                              ],
                            }),
                          ],
                        }),
                        (0, s.jsx)("p", {
                          className: "text-xs text-muted-foreground",
                          children:
                            "All visa types require the same minimum amount",
                        }),
                      ],
                    }),
                    (0, s.jsxs)("div", {
                      className: "space-y-3",
                      children: [
                        (0, s.jsx)(N.J, {
                          htmlFor: "duration",
                          children: "Duration (months)",
                        }),
                        (0, s.jsx)(A.p, {
                          id: "duration",
                          type: "number",
                          min: "6",
                          max: "36",
                          value: e.duration,
                          onChange: (e) =>
                            c("duration", parseInt(e.target.value)),
                        }),
                        (0, s.jsx)("p", {
                          className: "text-xs text-muted-foreground",
                          children:
                            "Standard is 12 months; extend for longer programs",
                        }),
                      ],
                    }),
                    (0, s.jsxs)("div", {
                      className: "space-y-3",
                      children: [
                        (0, s.jsx)(N.J, {
                          htmlFor: "intakeYear",
                          children: "Intake Year",
                        }),
                        (0, s.jsxs)(w.l6, {
                          value: e.intakeYear,
                          onValueChange: (e) => c("intakeYear", e),
                          children: [
                            (0, s.jsx)(w.bq, {
                              children: (0, s.jsx)(w.yv, {
                                placeholder: "Select intake year",
                              }),
                            }),
                            (0, s.jsxs)(w.gC, {
                              children: [
                                (0, s.jsx)(w.eb, {
                                  value: "2026",
                                  children: "2026 (Winter)",
                                }),
                                (0, s.jsx)(w.eb, {
                                  value: "2027",
                                  children: "2027 (Winter)",
                                }),
                              ],
                            }),
                          ],
                        }),
                        (0, s.jsx)("p", {
                          className: "text-xs text-muted-foreground",
                          children: "Amount may change for future years",
                        }),
                      ],
                    }),
                  ],
                }),
                (0, s.jsxs)("div", {
                  className: "space-y-4 mt-6",
                  children: [
                    (0, s.jsxs)("div", {
                      className: "flex gap-4",
                      children: [
                        (0, s.jsxs)(k.$, {
                          onClick: () => {
                            let a = F.find((a) => a.id === e.provider),
                              n = a.setupFee,
                              s = a.monthlyFee * e.duration,
                              t = a.transferFee,
                              r = Math.round(
                                (11904 * a.currencyConversionRate) / 100,
                              );
                            (o({
                              requiredAmount: 11904,
                              monthlyWithdrawal: 992,
                              totalMonths: e.duration,
                              setupFee: n,
                              monthlyFee: a.monthlyFee,
                              transferFee: t,
                              currencyConversionFee: r,
                              totalCost: n + s + t + r,
                              provider: a.name,
                              processingTime: a.processingTime,
                              additionalServices: a.additionalServices,
                            }),
                              (0, y.r)("blocked-account-calculator"));
                          },
                          className:
                            "flex-1 bg-orange hover:bg-orange-hover rounded-full",
                          children: [
                            "Calculate Total Costs",
                            (0, s.jsx)(i.A, {
                              className: "ml-2 h-4 w-4",
                              "aria-hidden": "true",
                            }),
                          ],
                        }),
                        n &&
                          (0, s.jsx)(k.$, {
                            onClick: () => {
                              (a({
                                provider: "fintiba",
                                visaType: "ausbildung",
                                duration: 12,
                                intakeYear: "2026",
                              }),
                                o(null));
                            },
                            variant: "outline",
                            className: "rounded-full",
                            children: (0, s.jsx)(x.A, {
                              className: "h-4 w-4",
                              "aria-hidden": "true",
                            }),
                          }),
                      ],
                    }),
                    (0, s.jsx)("div", {
                      className: "flex justify-center",
                      children: (0, s.jsx)(y.A, {
                        toolSlug: "blocked-account-calculator",
                        actionText: "calculations completed",
                      }),
                    }),
                  ],
                }),
              ],
            }),
            n &&
              (0, s.jsxs)(g.Q$, {
                title: "Your Blocked Account Breakdown",
                variant: "success",
                children: [
                  (0, s.jsxs)("div", {
                    className:
                      "bg-beige border-2 border-border rounded-xl p-6 mb-6",
                    children: [
                      (0, s.jsxs)("div", {
                        className: "flex items-center justify-between mb-2",
                        children: [
                          (0, s.jsx)("span", {
                            className: "text-sm text-green/70",
                            children: "Required Blocked Account Amount",
                          }),
                          (0, s.jsx)(r.A, {
                            className: "h-5 w-5 text-green",
                            "aria-hidden": "true",
                          }),
                        ],
                      }),
                      (0, s.jsxs)("div", {
                        className: "text-4xl font-bold text-green mb-1",
                        children: ["€", n.requiredAmount.toLocaleString()],
                      }),
                      (0, s.jsxs)("p", {
                        className: "text-sm text-green/70",
                        children: [
                          "€",
                          n.monthlyWithdrawal,
                          " per month \xd7 ",
                          n.totalMonths,
                          " months",
                        ],
                      }),
                    ],
                  }),
                  (0, s.jsxs)("div", {
                    className: "space-y-4 mb-6",
                    children: [
                      (0, s.jsxs)("h3", {
                        className:
                          "font-semibold text-green flex items-center gap-2",
                        children: [
                          (0, s.jsx)(h.A, {
                            className: "h-5 w-5 text-orange",
                            "aria-hidden": "true",
                          }),
                          "Additional Costs Breakdown",
                        ],
                      }),
                      (0, s.jsxs)("div", {
                        className: "space-y-3",
                        children: [
                          (0, s.jsxs)("div", {
                            className:
                              "flex justify-between items-center p-3 bg-cream rounded-lg",
                            children: [
                              (0, s.jsxs)("span", {
                                className: "text-sm text-green/80",
                                children: [
                                  "Setup/Opening Fee (",
                                  n.provider,
                                  ")",
                                ],
                              }),
                              (0, s.jsxs)("span", {
                                className: "font-semibold",
                                children: ["€", n.setupFee],
                              }),
                            ],
                          }),
                          (0, s.jsxs)("div", {
                            className:
                              "flex justify-between items-center p-3 bg-cream rounded-lg",
                            children: [
                              (0, s.jsxs)("span", {
                                className: "text-sm text-green/80",
                                children: [
                                  "Monthly Account Fee (€",
                                  n.monthlyFee,
                                  "/month \xd7 ",
                                  n.totalMonths,
                                  ")",
                                ],
                              }),
                              (0, s.jsxs)("span", {
                                className: "font-semibold",
                                children: [
                                  "€",
                                  (n.monthlyFee * n.totalMonths).toFixed(2),
                                ],
                              }),
                            ],
                          }),
                          (0, s.jsxs)("div", {
                            className:
                              "flex justify-between items-center p-3 bg-cream rounded-lg",
                            children: [
                              (0, s.jsx)("span", {
                                className: "text-sm text-green/80",
                                children: "International Transfer Fee",
                              }),
                              (0, s.jsxs)("span", {
                                className: "font-semibold",
                                children: ["€", n.transferFee],
                              }),
                            ],
                          }),
                          (0, s.jsxs)("div", {
                            className:
                              "flex justify-between items-center p-3 bg-cream rounded-lg",
                            children: [
                              (0, s.jsx)("span", {
                                className: "text-sm text-green/80",
                                children: "Currency Conversion Fee (estimated)",
                              }),
                              (0, s.jsxs)("span", {
                                className: "font-semibold",
                                children: ["€", n.currencyConversionFee],
                              }),
                            ],
                          }),
                          (0, s.jsxs)("div", {
                            className:
                              "flex justify-between items-center p-4 bg-beige border-2 border-border rounded-lg",
                            children: [
                              (0, s.jsx)("span", {
                                className: "font-semibold text-green",
                                children: "Total Additional Costs",
                              }),
                              (0, s.jsxs)("span", {
                                className: "text-xl font-bold text-orange",
                                children: ["€", n.totalCost],
                              }),
                            ],
                          }),
                        ],
                      }),
                    ],
                  }),
                  (0, s.jsxs)("div", {
                    className:
                      "bg-cream border-2 border-beige rounded-xl p-6 mb-6",
                    children: [
                      (0, s.jsxs)("h3", {
                        className:
                          "font-semibold text-green mb-4 flex items-center gap-2",
                        children: [
                          (0, s.jsx)(l.A, {
                            className: "h-5 w-5 text-orange",
                            "aria-hidden": "true",
                          }),
                          n.provider,
                          " Details",
                        ],
                      }),
                      (0, s.jsxs)("div", {
                        className: "space-y-2 text-sm",
                        children: [
                          (0, s.jsxs)("div", {
                            className: "flex justify-between",
                            children: [
                              (0, s.jsx)("span", {
                                className: "text-green/70",
                                children: "Processing Time:",
                              }),
                              (0, s.jsx)("span", {
                                className: "font-semibold text-green",
                                children: n.processingTime,
                              }),
                            ],
                          }),
                          (0, s.jsxs)("div", {
                            children: [
                              (0, s.jsx)("span", {
                                className: "text-green/70 block mb-1",
                                children: "Additional Services:",
                              }),
                              (0, s.jsx)("ul", {
                                className:
                                  "list-disc list-inside space-y-1 ml-2",
                                children: n.additionalServices.map((e, a) =>
                                  (0, s.jsx)(
                                    "li",
                                    { className: "text-green/80", children: e },
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
                  (0, s.jsxs)("div", {
                    className: "bg-green text-white rounded-xl p-6 mb-6",
                    children: [
                      (0, s.jsx)("h3", {
                        className: "font-semibold mb-4",
                        children: "Grand Total to Prepare",
                      }),
                      (0, s.jsxs)("div", {
                        className: "space-y-2",
                        children: [
                          (0, s.jsxs)("div", {
                            className: "flex justify-between text-sm",
                            children: [
                              (0, s.jsx)("span", {
                                className: "opacity-90",
                                children: "Blocked Account Deposit:",
                              }),
                              (0, s.jsxs)("span", {
                                children: [
                                  "€",
                                  n.requiredAmount.toLocaleString(),
                                ],
                              }),
                            ],
                          }),
                          (0, s.jsxs)("div", {
                            className: "flex justify-between text-sm",
                            children: [
                              (0, s.jsx)("span", {
                                className: "opacity-90",
                                children: "Provider Fees & Charges:",
                              }),
                              (0, s.jsxs)("span", {
                                children: ["€", n.totalCost],
                              }),
                            ],
                          }),
                          (0, s.jsx)("div", {
                            className: "border-t border-white/20 my-2",
                          }),
                          (0, s.jsxs)("div", {
                            className: "flex justify-between items-center",
                            children: [
                              (0, s.jsx)("span", {
                                className: "font-semibold text-lg",
                                children: "Total Amount Needed:",
                              }),
                              (0, s.jsxs)("span", {
                                className: "text-2xl font-bold",
                                children: [
                                  "€",
                                  (
                                    n.requiredAmount + n.totalCost
                                  ).toLocaleString(),
                                ],
                              }),
                            ],
                          }),
                        ],
                      }),
                    ],
                  }),
                  (0, s.jsxs)("div", {
                    className:
                      "text-sm text-green/80 p-3 bg-beige rounded-lg flex items-start gap-2",
                    children: [
                      (0, s.jsx)(p.A, {
                        className: "h-4 w-4 mt-0.5 shrink-0",
                        "aria-hidden": "true",
                      }),
                      (0, s.jsxs)("p", {
                        children: [
                          (0, s.jsx)("strong", { children: "Privacy Note:" }),
                          " Your financial information is private and secure. All calculations are done locally in your browser and not stored on our servers.",
                        ],
                      }),
                    ],
                  }),
                  (0, s.jsx)("div", {
                    className: "mt-6",
                    children: (0, s.jsx)(y.A, {
                      toolSlug: "blocked-account-calculator",
                      actionText: "calculations completed",
                    }),
                  }),
                ],
              }),
            !n && (0, s.jsx)(v.HowItWorksSection, { content: S }),
            (0, s.jsx)(b.ToolFAQSection, { faqs: C, className: "mb-8" }),
            (0, s.jsx)(j.RelatedTools, {
              currentToolSlug: "blocked-account-calculator",
              limit: 3,
            }),
            (0, s.jsxs)("section", {
              className:
                "bg-beige rounded-2xl border-2 border-border p-8 text-center",
              children: [
                (0, s.jsx)("h3", {
                  className: "text-2xl font-semibold text-green mb-3",
                  children: "Need Help with Your Blocked Account?",
                }),
                (0, s.jsx)("p", {
                  className: "text-green/80 mb-6 max-w-2xl mx-auto",
                  children:
                    "Create your free account to access more tools and resources to help you prepare for your German visa application.",
                }),
                (0, s.jsx)(k.$, {
                  asChild: !0,
                  size: "lg",
                  className: "bg-orange hover:bg-orange-hover rounded-full",
                  children: (0, s.jsx)("a", {
                    href: "/auth?signup",
                    children: "Create Free Account",
                  }),
                }),
              ],
            }),
          ],
        });
      }
    },
  },
  (e) => {
    var a = (a) => e((e.s = a));
    (e.O(0, [46593, 36209, 84121, 72076, 77358], () => a(9356)),
      (_N_E = e.O()));
  },
]);
