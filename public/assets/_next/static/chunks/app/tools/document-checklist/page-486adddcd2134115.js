(self.webpackChunk_N_E = self.webpackChunk_N_E || []).push([
  [79275],
  {
    65798: (e, t, i) => {
      "use strict";
      i.d(t, { default: () => $ });
      var s = i(70207),
        a = i(87223),
        r = i(27774),
        n = i(10863),
        o = i(20351),
        c = i(93595),
        l = i(14207),
        d = i(80374),
        m = i(79046),
        u = i(39441),
        p = i(40167),
        h = i(93501);
      let g = [
          "Personal Documents",
          "Educational Documents",
          "Financial Documents",
          "Professional Documents",
          "Medical Documents",
          "Legal Documents",
        ],
        x = [
          {
            id: "passport",
            name: "Valid Passport",
            description:
              "Passport valid for at least 6 months beyond intended stay in Germany",
            category: "Personal Documents",
            estimatedCost: "€50-150",
            processingTime: "2-6 weeks",
            priority: "urgent",
            required: !0,
            notes: "Must have at least 2 blank pages for visa stamps",
          },
          {
            id: "birth-certificate",
            name: "Birth Certificate",
            description:
              "Original birth certificate with apostille and German translation",
            category: "Personal Documents",
            estimatedCost: "€20-50",
            processingTime: "1-3 weeks",
            priority: "urgent",
            required: !0,
            notes: "Must be issued within last 6 months or apostilled",
          },
          {
            id: "passport-photos",
            name: "Biometric Passport Photos",
            description: "4-6 recent biometric passport photos (35mm x 45mm)",
            category: "Personal Documents",
            estimatedCost: "€10-20",
            processingTime: "1 day",
            priority: "high",
            required: !0,
            notes: "Must meet German biometric photo requirements",
          },
          {
            id: "marriage-certificate",
            name: "Marriage Certificate (if applicable)",
            description:
              "Marriage certificate with apostille and German translation",
            category: "Personal Documents",
            estimatedCost: "€30-60",
            processingTime: "2-4 weeks",
            priority: "medium",
            required: !1,
            notes: "Required if married or applying with spouse",
          },
          {
            id: "children-birth-certificates",
            name: "Children's Birth Certificates (if applicable)",
            description:
              "Birth certificates for all children with apostille and translation",
            category: "Personal Documents",
            estimatedCost: "€30-50 per child",
            processingTime: "2-4 weeks",
            priority: "medium",
            required: !1,
            notes: "Required if applying with children",
          },
          {
            id: "name-change-certificate",
            name: "Name Change Certificate (if applicable)",
            description: "Official documentation of any name changes",
            category: "Personal Documents",
            estimatedCost: "€20-40",
            processingTime: "1-2 weeks",
            priority: "medium",
            required: !1,
          },
          {
            id: "high-school-diploma",
            name: "High School Diploma",
            description:
              "Original high school diploma with apostille and German translation",
            category: "Educational Documents",
            estimatedCost: "€40-80",
            processingTime: "3-6 weeks",
            priority: "urgent",
            required: !0,
            notes: "Must be evaluated for German equivalency",
          },
          {
            id: "high-school-transcripts",
            name: "High School Transcripts",
            description: "Complete transcripts showing all grades and subjects",
            category: "Educational Documents",
            estimatedCost: "€30-60",
            processingTime: "2-4 weeks",
            priority: "urgent",
            required: !0,
            notes: "Must include grading scale explanation",
          },
          {
            id: "bachelor-degree",
            name: "Bachelor's Degree (if applicable)",
            description:
              "University degree certificate with apostille and translation",
            category: "Educational Documents",
            estimatedCost: "€50-100",
            processingTime: "4-8 weeks",
            priority: "high",
            required: !1,
            notes: "Include if you have higher education",
          },
          {
            id: "university-transcripts",
            name: "University Transcripts (if applicable)",
            description:
              "Complete university transcripts with courses and grades",
            category: "Educational Documents",
            estimatedCost: "€40-80",
            processingTime: "3-6 weeks",
            priority: "high",
            required: !1,
          },
          {
            id: "language-certificates",
            name: "German Language Certificate",
            description:
              "B1/B2 German language proficiency certificate (Goethe, TestDaF, telc)",
            category: "Educational Documents",
            estimatedCost: "€150-200",
            processingTime: "4-12 weeks",
            priority: "urgent",
            required: !0,
            notes: "Minimum B1 required for most Ausbildung programs",
          },
          {
            id: "english-language-certificate",
            name: "English Language Certificate (optional)",
            description: "TOEFL, IELTS, or Cambridge certificate if applicable",
            category: "Educational Documents",
            estimatedCost: "€200-250",
            processingTime: "4-8 weeks",
            priority: "low",
            required: !1,
          },
          {
            id: "vocational-certificates",
            name: "Previous Vocational Certificates",
            description:
              "Any previous vocational training or professional certificates",
            category: "Educational Documents",
            estimatedCost: "€30-60",
            processingTime: "2-4 weeks",
            priority: "medium",
            required: !1,
            notes: "Can strengthen your application",
          },
          {
            id: "recognition-assessment",
            name: "Educational Recognition Assessment",
            description: "anabin or ZAB assessment of foreign qualifications",
            category: "Educational Documents",
            estimatedCost: "€100-200",
            processingTime: "8-12 weeks",
            priority: "high",
            required: !0,
            notes: "Required for foreign educational credentials",
          },
          {
            id: "blocked-account",
            name: "Blocked Account (Sperrkonto)",
            description: "Blocked account with minimum €11,208 for first year",
            category: "Financial Documents",
            estimatedCost: "€11,208 + setup fees",
            processingTime: "2-4 weeks",
            priority: "urgent",
            required: !0,
            notes:
              "Required for visa application - can use Fintiba, Deutsche Bank, or Expatrio",
          },
          {
            id: "blocked-account-confirmation",
            name: "Blocked Account Confirmation Letter",
            description:
              "Official confirmation letter from blocked account provider",
            category: "Financial Documents",
            estimatedCost: "Included",
            processingTime: "1 week",
            priority: "urgent",
            required: !0,
            notes: "Automatically provided by blocked account provider",
          },
          {
            id: "bank-statements",
            name: "Bank Statements (Last 6 Months)",
            description: "Personal bank statements showing financial stability",
            category: "Financial Documents",
            estimatedCost: "€10-30",
            processingTime: "1-2 weeks",
            priority: "high",
            required: !0,
            notes: "Must show regular income or savings",
          },
          {
            id: "sponsorship-letter",
            name: "Sponsorship Letter (if applicable)",
            description:
              "Letter from sponsor with income proof and bank statements",
            category: "Financial Documents",
            estimatedCost: "€0",
            processingTime: "1 week",
            priority: "medium",
            required: !1,
            notes: "Alternative to blocked account in some cases",
          },
          {
            id: "income-tax-returns",
            name: "Income Tax Returns",
            description:
              "Last 2 years of income tax returns or proof of income",
            category: "Financial Documents",
            estimatedCost: "€20-40",
            processingTime: "1-2 weeks",
            priority: "medium",
            required: !1,
            notes: "Strengthens financial proof",
          },
          {
            id: "scholarship-letter",
            name: "Scholarship Award Letter (if applicable)",
            description:
              "Official scholarship confirmation from recognized institution",
            category: "Financial Documents",
            estimatedCost: "€0",
            processingTime: "2-4 weeks",
            priority: "medium",
            required: !1,
            notes: "Can reduce blocked account requirement",
          },
          {
            id: "ausbildung-contract",
            name: "Ausbildung Training Contract",
            description: "Signed training contract from German company",
            category: "Professional Documents",
            estimatedCost: "€0",
            processingTime: "4-12 weeks",
            priority: "urgent",
            required: !0,
            notes: "Most critical document - required before visa application",
          },
          {
            id: "company-registration",
            name: "Company Registration Certificate",
            description:
              "Official registration certificate of training company",
            category: "Professional Documents",
            estimatedCost: "€0",
            processingTime: "1 week",
            priority: "high",
            required: !0,
            notes: "Provided by employer",
          },
          {
            id: "cv-resume",
            name: "CV/Resume (German format)",
            description:
              "Professional CV in German format (Europass or tabular)",
            category: "Professional Documents",
            estimatedCost: "€0-50",
            processingTime: "1 week",
            priority: "urgent",
            required: !0,
            notes: "Must include photo, complete work history, and education",
          },
          {
            id: "cover-letter",
            name: "Cover Letter (Motivationsschreiben)",
            description:
              "Motivation letter in German explaining interest in Ausbildung",
            category: "Professional Documents",
            estimatedCost: "€0-50",
            processingTime: "1 week",
            priority: "high",
            required: !0,
            notes: "Should be tailored to specific sector and company",
          },
          {
            id: "work-experience-certificates",
            name: "Work Experience Certificates",
            description:
              "Letters of recommendation and work certificates from previous employers",
            category: "Professional Documents",
            estimatedCost: "€0-30",
            processingTime: "2-4 weeks",
            priority: "medium",
            required: !1,
            notes: "Include if you have relevant work experience",
          },
          {
            id: "professional-references",
            name: "Professional References",
            description: "Contact details of 2-3 professional references",
            category: "Professional Documents",
            estimatedCost: "€0",
            processingTime: "1 week",
            priority: "low",
            required: !1,
            notes: "Optional but helpful",
          },
          {
            id: "portfolio",
            name: "Portfolio/Work Samples (if applicable)",
            description: "Portfolio of work for creative or technical fields",
            category: "Professional Documents",
            estimatedCost: "€0-100",
            processingTime: "2-4 weeks",
            priority: "medium",
            required: !1,
            notes: "Important for IT, design, engineering sectors",
          },
          {
            id: "health-insurance",
            name: "Health Insurance Proof",
            description:
              "Travel health insurance or German health insurance confirmation",
            category: "Medical Documents",
            estimatedCost: "€30-100/month",
            processingTime: "1-2 weeks",
            priority: "urgent",
            required: !0,
            notes: "Must cover minimum €30,000 for entire visa period",
          },
          {
            id: "medical-certificate",
            name: "Medical Fitness Certificate",
            description: "Doctor's certificate confirming fitness for training",
            category: "Medical Documents",
            estimatedCost: "€50-100",
            processingTime: "1-2 weeks",
            priority: "high",
            required: !0,
            notes:
              "Required for most Ausbildung programs, especially healthcare",
          },
          {
            id: "vaccination-records",
            name: "Vaccination Records",
            description:
              "Complete vaccination history including COVID-19, measles, etc.",
            category: "Medical Documents",
            estimatedCost: "€20-40",
            processingTime: "1 week",
            priority: "high",
            required: !0,
            notes: "Measles vaccination mandatory in Germany",
          },
          {
            id: "tb-test",
            name: "TB Test Certificate (for certain countries)",
            description:
              "Tuberculosis test certificate if required for your nationality",
            category: "Medical Documents",
            estimatedCost: "€40-80",
            processingTime: "1-2 weeks",
            priority: "medium",
            required: !1,
            notes: "Required for applicants from high-risk countries",
          },
          {
            id: "medical-history",
            name: "Medical History Summary",
            description: "Summary of medical history and current medications",
            category: "Medical Documents",
            estimatedCost: "€30-60",
            processingTime: "1 week",
            priority: "low",
            required: !1,
            notes: "Helpful for healthcare sector applications",
          },
          {
            id: "police-clearance",
            name: "Police Clearance Certificate",
            description:
              "Criminal record certificate from country of residence",
            category: "Legal Documents",
            estimatedCost: "€20-100",
            processingTime: "4-8 weeks",
            priority: "urgent",
            required: !0,
            notes: "Must be issued within last 3 months and apostilled",
          },
          {
            id: "visa-application-form",
            name: "Visa Application Form",
            description: "Completed German national visa application form",
            category: "Legal Documents",
            estimatedCost: "€75 visa fee",
            processingTime: "1 day",
            priority: "urgent",
            required: !0,
            notes: "Available at German embassy/consulate website",
          },
          {
            id: "declaration-authenticity",
            name: "Declaration of Authenticity",
            description: "Signed declaration that all documents are authentic",
            category: "Legal Documents",
            estimatedCost: "€0",
            processingTime: "1 day",
            priority: "high",
            required: !0,
            notes: "Usually provided by embassy",
          },
          {
            id: "residence-permit-application",
            name: "Residence Permit Application",
            description: "Application for residence permit (after arrival)",
            category: "Legal Documents",
            estimatedCost: "€100",
            processingTime: "8-12 weeks",
            priority: "medium",
            required: !0,
            notes: "Applied for after arrival in Germany",
          },
          {
            id: "housing-agreement",
            name: "Housing Contract/Confirmation",
            description:
              "Proof of accommodation in Germany (rental contract or confirmation)",
            category: "Legal Documents",
            estimatedCost: "€400-800/month",
            processingTime: "2-8 weeks",
            priority: "high",
            required: !0,
            notes: "Required for residence registration (Anmeldung)",
          },
          {
            id: "anmeldung-confirmation",
            name: "Anmeldung (Registration Confirmation)",
            description: "Registration with local authorities after arrival",
            category: "Legal Documents",
            estimatedCost: "€0",
            processingTime: "1-4 weeks",
            priority: "high",
            required: !0,
            notes: "Must be done within 14 days of arrival",
          },
          {
            id: "proof-of-address",
            name: "Proof of Address in Home Country",
            description:
              "Utility bill or official document showing current address",
            category: "Legal Documents",
            estimatedCost: "€0-10",
            processingTime: "1 week",
            priority: "medium",
            required: !0,
            notes: "Must be recent (within 3 months)",
          },
          {
            id: "consent-letter-minors",
            name: "Parental Consent Letter (if under 18)",
            description: "Notarized parental consent for applicants under 18",
            category: "Legal Documents",
            estimatedCost: "€30-80",
            processingTime: "1-2 weeks",
            priority: "urgent",
            required: !1,
            notes: "Required for minors traveling alone",
          },
        ];
      var f = i(80187),
        y = i(93668),
        b = i(23072),
        v = i(95992),
        j = i(28131),
        w = i(62165),
        N = i(68163),
        k = i(1701),
        C = i(65915),
        A = i(44948),
        T = i(79650),
        q = i(33710),
        S = i(72982),
        D = i(84217),
        P = i(26304),
        G = i(51613),
        M = i(84844),
        L = i(39175);
      function I(e) {
        var t, i, r, n;
        let {
            documents: o,
            formData: l,
            onGetPersonalizedGuidance: d,
            aiGuidance: m,
            loadingAI: p,
            aiProgress: h,
            aiProgressMessage: x,
          } = e,
          [I, E] = (0, a.useState)(new Set()),
          [B, F] = (0, a.useState)(new Set(g)),
          R = (e) => {
            let t = new Set(I);
            (t.has(e) ? t.delete(e) : t.add(e), E(t));
          },
          V = (e) => {
            let t = new Set(B);
            (t.has(e) ? t.delete(e) : t.add(e), F(t));
          },
          O = (e) => o.filter((t) => t.category === e),
          z = (e) => {
            switch (e) {
              case "urgent":
              case "high":
                return "bg-beige text-orange border-orange";
              case "medium":
                return "bg-beige text-green border-beige";
              case "low":
                return "bg-cream text-green border-green";
              default:
                return "bg-cream text-green border-beige";
            }
          },
          H =
            null !== (t = null == m ? void 0 : m.countrySpecificIntelligence) &&
            void 0 !== t
              ? t
              : {
                  uniqueDocuments: [],
                  alternativeDocuments: [],
                  commonMistakes: [],
                },
          W =
            null !== (i = null == m ? void 0 : m.sectorSpecificRequirements) &&
            void 0 !== i
              ? i
              : { mandatoryDocuments: [], recommendedDocuments: [], tips: [] },
          Y =
            null !== (r = null == m ? void 0 : m.whereAndHow) && void 0 !== r
              ? r
              : [],
          U =
            null !== (n = null == m ? void 0 : m.priorityActionPlan) &&
            void 0 !== n
              ? n
              : {
                  criticalPath: [],
                  monthlyBreakdown: [],
                  budgetBreakdown: { total: "", items: [] },
                  riskAlerts: [],
                },
          Z = o.length,
          _ = o.filter((e) => e.required).length,
          J = I.size,
          $ = Math.round((J / Z) * 100);
        return (0, s.jsxs)("div", {
          className: "space-y-8",
          children: [
            (0, s.jsx)(f.Zp, {
              className: "p-8 rounded-2xl bg-cream border-beige",
              children: (0, s.jsxs)("div", {
                className: "space-y-6",
                children: [
                  (0, s.jsxs)("div", {
                    className: "flex items-center justify-between",
                    children: [
                      (0, s.jsxs)("div", {
                        children: [
                          (0, s.jsx)("h3", {
                            className: "text-2xl font-bold text-green",
                            children: "Your Document Checklist",
                          }),
                          (0, s.jsxs)("p", {
                            className: "text-muted-foreground mt-2",
                            children: [
                              J,
                              " of ",
                              Z,
                              " documents completed (",
                              $,
                              "%)",
                            ],
                          }),
                        ],
                      }),
                      (0, s.jsx)(b.A, { className: "h-12 w-12 text-orange" }),
                    ],
                  }),
                  (0, s.jsxs)("div", {
                    className: "space-y-2",
                    children: [
                      (0, s.jsx)("div", {
                        className:
                          "w-full h-4 bg-beige rounded-full overflow-hidden",
                        children: (0, s.jsx)("div", {
                          className:
                            "h-full bg-orange transition-all duration-500",
                          style: { width: "".concat($, "%") },
                        }),
                      }),
                      (0, s.jsxs)("div", {
                        className:
                          "flex justify-between text-sm text-muted-foreground",
                        children: [
                          (0, s.jsxs)("span", {
                            children: [_, " required documents"],
                          }),
                          (0, s.jsxs)("span", {
                            children: [Z - _, " optional documents"],
                          }),
                        ],
                      }),
                    ],
                  }),
                  (0, s.jsxs)("div", {
                    className: "grid grid-cols-1 md:grid-cols-3 gap-4",
                    children: [
                      (0, s.jsx)("div", {
                        className:
                          "bg-white p-4 rounded-xl border border-beige",
                        children: (0, s.jsxs)("div", {
                          className: "flex items-center gap-3",
                          children: [
                            (0, s.jsx)(v.A, {
                              className: "h-5 w-5 text-orange",
                            }),
                            (0, s.jsxs)("div", {
                              children: [
                                (0, s.jsx)("p", {
                                  className: "text-sm text-muted-foreground",
                                  children: "Urgent",
                                }),
                                (0, s.jsx)("p", {
                                  className: "text-xl font-bold text-green",
                                  children: o.filter(
                                    (e) => "urgent" === e.priority,
                                  ).length,
                                }),
                              ],
                            }),
                          ],
                        }),
                      }),
                      (0, s.jsx)("div", {
                        className:
                          "bg-white p-4 rounded-xl border border-beige",
                        children: (0, s.jsxs)("div", {
                          className: "flex items-center gap-3",
                          children: [
                            (0, s.jsx)(j.A, {
                              className: "h-5 w-5 text-orange",
                            }),
                            (0, s.jsxs)("div", {
                              children: [
                                (0, s.jsx)("p", {
                                  className: "text-sm text-muted-foreground",
                                  children: "Est. Timeline",
                                }),
                                (0, s.jsx)("p", {
                                  className: "text-xl font-bold text-green",
                                  children: "3-6 months",
                                }),
                              ],
                            }),
                          ],
                        }),
                      }),
                      (0, s.jsx)("div", {
                        className:
                          "bg-white p-4 rounded-xl border border-beige",
                        children: (0, s.jsxs)("div", {
                          className: "flex items-center gap-3",
                          children: [
                            (0, s.jsx)(w.A, {
                              className: "h-5 w-5 text-green",
                            }),
                            (0, s.jsxs)("div", {
                              children: [
                                (0, s.jsx)("p", {
                                  className: "text-sm text-muted-foreground",
                                  children: "Est. Total Cost",
                                }),
                                (0, s.jsx)("p", {
                                  className: "text-xl font-bold text-green",
                                  children: "€2,000-4,000",
                                }),
                              ],
                            }),
                          ],
                        }),
                      }),
                    ],
                  }),
                  !m &&
                    (0, s.jsxs)("div", {
                      className: "space-y-4",
                      children: [
                        (0, s.jsx)(c.OY, {
                          icon: N.A,
                          title: "Get Personalized Guidance",
                          description:
                            "Unlock country-specific instructions, exact office locations, costs in your local currency, common mistakes from "
                              .concat(
                                l.nationality,
                                " applicants, and a month-by-month action plan tailored to your ",
                              )
                              .concat(l.sector, " Ausbildung."),
                          buttonText: "Get Personalized Guidance",
                          onGenerate: d,
                          isLoading: p,
                          loadingText: "Generating Guidance...",
                        }),
                        p &&
                          (0, s.jsx)(f.Zp, {
                            className:
                              "p-8 bg-cream border border-border rounded-xl",
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
                                      children: x,
                                    }),
                                    (0, s.jsxs)("p", {
                                      className:
                                        "text-sm text-muted-foreground",
                                      children: [Math.round(h), "%"],
                                    }),
                                  ],
                                }),
                                (0, s.jsx)(y.Progress, {
                                  value: h,
                                  indicatorClassName: "bg-orange",
                                  className: "h-3",
                                }),
                                (0, s.jsx)("p", {
                                  className:
                                    "text-xs text-muted-foreground text-center",
                                  children:
                                    "This may take up to 60 seconds. Please don't close this page.",
                                }),
                              ],
                            }),
                          }),
                      ],
                    }),
                ],
              }),
            }),
            m &&
              (0, s.jsxs)("div", {
                className: "space-y-8",
                children: [
                  (0, s.jsxs)(f.Zp, {
                    className: "p-8 rounded-2xl bg-white border-beige",
                    children: [
                      (0, s.jsxs)("div", {
                        className: "flex items-start gap-4 mb-6",
                        children: [
                          (0, s.jsx)(k.A, {
                            className: "h-6 w-6 text-orange flex-shrink-0",
                          }),
                          (0, s.jsxs)("div", {
                            children: [
                              (0, s.jsxs)("h3", {
                                className: "text-xl font-bold text-green mb-2",
                                children: [
                                  "Country-Specific Intelligence: ",
                                  l.nationality,
                                ],
                              }),
                              (0, s.jsxs)("p", {
                                className: "text-sm text-muted-foreground",
                                children: [
                                  "Special requirements and tips for applicants from ",
                                  l.nationality,
                                ],
                              }),
                            ],
                          }),
                        ],
                      }),
                      (0, s.jsxs)("div", {
                        className: "grid grid-cols-1 md:grid-cols-2 gap-6",
                        children: [
                          (0, s.jsxs)("div", {
                            className: "bg-cream p-6 rounded-xl",
                            children: [
                              (0, s.jsxs)("h4", {
                                className:
                                  "font-bold text-green mb-3 flex items-center gap-2",
                                children: [
                                  (0, s.jsx)(C.A, {
                                    className: "h-5 w-5 text-orange",
                                    "aria-hidden": "true",
                                  }),
                                  "Critical Documents for ",
                                  l.nationality,
                                ],
                              }),
                              (0, s.jsx)("ul", {
                                className: "space-y-2",
                                children: H.uniqueDocuments.map((e, t) =>
                                  (0, s.jsxs)(
                                    "li",
                                    {
                                      className:
                                        "text-sm text-secondary flex items-start gap-2",
                                      children: [
                                        (0, s.jsx)("span", {
                                          className: "text-orange mt-1",
                                          children: "•",
                                        }),
                                        (0, s.jsx)("span", { children: e }),
                                      ],
                                    },
                                    t,
                                  ),
                                ),
                              }),
                            ],
                          }),
                          (0, s.jsxs)("div", {
                            className: "bg-cream p-6 rounded-xl",
                            children: [
                              (0, s.jsxs)("h4", {
                                className:
                                  "font-bold text-green mb-3 flex items-center gap-2",
                                children: [
                                  (0, s.jsx)(A.A, {
                                    className: "h-5 w-5 text-orange",
                                    "aria-hidden": "true",
                                  }),
                                  "Avoid These Mistakes",
                                ],
                              }),
                              (0, s.jsx)("ul", {
                                className: "space-y-2",
                                children: H.commonMistakes.map((e, t) =>
                                  (0, s.jsxs)(
                                    "li",
                                    {
                                      className:
                                        "text-sm text-secondary flex items-start gap-2",
                                      children: [
                                        (0, s.jsx)("span", {
                                          className: "text-orange mt-1",
                                          children: "⚠",
                                        }),
                                        (0, s.jsx)("span", { children: e }),
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
                  }),
                  (0, s.jsxs)(f.Zp, {
                    className: "p-8 rounded-2xl bg-white border-beige",
                    children: [
                      (0, s.jsxs)("div", {
                        className: "flex items-start gap-4 mb-6",
                        children: [
                          (0, s.jsx)(T.A, {
                            className: "h-6 w-6 text-orange flex-shrink-0",
                          }),
                          (0, s.jsxs)("div", {
                            children: [
                              (0, s.jsxs)("h3", {
                                className: "text-xl font-bold text-green mb-2",
                                children: [l.sector, " Sector Requirements"],
                              }),
                              (0, s.jsxs)("p", {
                                className: "text-sm text-muted-foreground",
                                children: [
                                  "Specific documents and requirements for ",
                                  l.sector,
                                  " Ausbildung",
                                ],
                              }),
                            ],
                          }),
                        ],
                      }),
                      (0, s.jsxs)("div", {
                        className: "bg-cream p-6 rounded-xl mb-6",
                        children: [
                          (0, s.jsxs)("h4", {
                            className:
                              "font-bold text-green mb-3 flex items-center gap-2",
                            children: [
                              (0, s.jsx)(q.A, {
                                className: "h-5 w-5 text-orange",
                                "aria-hidden": "true",
                              }),
                              "Mandatory for ",
                              l.sector,
                            ],
                          }),
                          (0, s.jsx)("ul", {
                            className: "space-y-2",
                            children: W.mandatoryDocuments.map((e, t) =>
                              (0, s.jsxs)(
                                "li",
                                {
                                  className:
                                    "text-sm text-secondary flex items-start gap-2",
                                  children: [
                                    (0, s.jsx)("span", {
                                      className: "text-orange mt-1",
                                      children: "•",
                                    }),
                                    (0, s.jsx)("span", { children: e }),
                                  ],
                                },
                                t,
                              ),
                            ),
                          }),
                        ],
                      }),
                      (0, s.jsxs)("div", {
                        className: "bg-beige p-6 rounded-xl",
                        children: [
                          (0, s.jsxs)("h4", {
                            className:
                              "font-bold text-green mb-3 flex items-center gap-2",
                            children: [
                              (0, s.jsx)(S.A, {
                                className: "h-5 w-5 text-orange",
                                "aria-hidden": "true",
                              }),
                              "Success Tips",
                            ],
                          }),
                          (0, s.jsx)("ul", {
                            className: "space-y-2",
                            children: W.tips.map((e, t) =>
                              (0, s.jsxs)(
                                "li",
                                {
                                  className:
                                    "text-sm text-secondary flex items-start gap-2",
                                  children: [
                                    (0, s.jsx)("span", {
                                      className: "text-orange mt-1",
                                      children: "→",
                                    }),
                                    (0, s.jsx)("span", { children: e }),
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
                  (0, s.jsxs)(f.Zp, {
                    className: "p-8 rounded-2xl bg-white border-beige",
                    children: [
                      (0, s.jsxs)("div", {
                        className: "flex items-start gap-4 mb-6",
                        children: [
                          (0, s.jsx)(k.A, {
                            className: "h-6 w-6 text-orange flex-shrink-0",
                          }),
                          (0, s.jsxs)("div", {
                            children: [
                              (0, s.jsx)("h3", {
                                className: "text-xl font-bold text-green mb-2",
                                children: "Where & How to Get Your Documents",
                              }),
                              (0, s.jsxs)("p", {
                                className: "text-sm text-muted-foreground",
                                children: [
                                  "Exact locations, costs, and timelines for obtaining documents in ",
                                  l.currentLocation,
                                ],
                              }),
                            ],
                          }),
                        ],
                      }),
                      (0, s.jsx)("div", {
                        className: "grid grid-cols-1 gap-4",
                        children: Y.map((e, t) =>
                          (0, s.jsxs)(
                            "div",
                            {
                              className:
                                "bg-cream p-6 rounded-xl border border-beige",
                              children: [
                                (0, s.jsxs)("div", {
                                  className:
                                    "flex items-start justify-between gap-4 mb-4",
                                  children: [
                                    (0, s.jsx)("h4", {
                                      className: "font-bold text-green",
                                      children: e.documentName,
                                    }),
                                    (0, s.jsx)("span", {
                                      className:
                                        "text-sm bg-beige text-orange px-4 py-1 rounded-full whitespace-nowrap",
                                      children: e.cost,
                                    }),
                                  ],
                                }),
                                (0, s.jsxs)("div", {
                                  className:
                                    "grid grid-cols-1 md:grid-cols-2 gap-4 mb-4",
                                  children: [
                                    (0, s.jsxs)("div", {
                                      className: "flex items-start gap-2",
                                      children: [
                                        (0, s.jsx)(k.A, {
                                          className:
                                            "h-4 w-4 text-orange mt-0.5 flex-shrink-0",
                                        }),
                                        (0, s.jsxs)("div", {
                                          children: [
                                            (0, s.jsx)("p", {
                                              className:
                                                "text-xs text-muted-foreground mb-1",
                                              children: "Location",
                                            }),
                                            (0, s.jsx)("p", {
                                              className: "text-sm text-green",
                                              children: e.location,
                                            }),
                                          ],
                                        }),
                                      ],
                                    }),
                                    (0, s.jsxs)("div", {
                                      className: "flex items-start gap-2",
                                      children: [
                                        (0, s.jsx)(j.A, {
                                          className:
                                            "h-4 w-4 text-orange mt-0.5 flex-shrink-0",
                                        }),
                                        (0, s.jsxs)("div", {
                                          children: [
                                            (0, s.jsx)("p", {
                                              className:
                                                "text-xs text-muted-foreground mb-1",
                                              children: "Processing Time",
                                            }),
                                            (0, s.jsx)("p", {
                                              className: "text-sm text-green",
                                              children: e.processingTime,
                                            }),
                                          ],
                                        }),
                                      ],
                                    }),
                                  ],
                                }),
                                (0, s.jsx)("div", {
                                  className:
                                    "bg-beige p-4 rounded-lg border border-border",
                                  children: (0, s.jsxs)("p", {
                                    className:
                                      "text-sm text-secondary flex items-start gap-2",
                                    children: [
                                      (0, s.jsx)(S.A, {
                                        className:
                                          "h-4 w-4 text-orange mt-0.5 flex-shrink-0",
                                      }),
                                      (0, s.jsxs)("span", {
                                        children: [
                                          (0, s.jsx)("strong", {
                                            children: "Pro Tip:",
                                          }),
                                          " ",
                                          e.proTip,
                                        ],
                                      }),
                                    ],
                                  }),
                                }),
                              ],
                            },
                            t,
                          ),
                        ),
                      }),
                    ],
                  }),
                  (0, s.jsxs)(f.Zp, {
                    className: "p-8 rounded-2xl bg-white border-beige",
                    children: [
                      (0, s.jsxs)("div", {
                        className: "flex items-start gap-4 mb-6",
                        children: [
                          (0, s.jsx)(D.A, {
                            className: "h-6 w-6 text-orange flex-shrink-0",
                          }),
                          (0, s.jsxs)("div", {
                            children: [
                              (0, s.jsx)("h3", {
                                className: "text-xl font-bold text-green mb-2",
                                children: "Your Priority Action Plan",
                              }),
                              (0, s.jsx)("p", {
                                className: "text-sm text-muted-foreground",
                                children:
                                  "Month-by-month roadmap to complete your document preparation",
                              }),
                            ],
                          }),
                        ],
                      }),
                      (0, s.jsxs)("div", {
                        className:
                          "bg-beige p-8 rounded-xl border border-border mb-8",
                        children: [
                          (0, s.jsxs)("h4", {
                            className:
                              "font-bold text-orange mb-4 flex items-center gap-2",
                            children: [
                              (0, s.jsx)(v.A, { className: "h-5 w-5" }),
                              "START NOW - Critical Path Items",
                            ],
                          }),
                          (0, s.jsx)("ul", {
                            className: "space-y-2",
                            children: U.criticalPath.map((e, t) =>
                              (0, s.jsxs)(
                                "li",
                                {
                                  className:
                                    "text-sm text-secondary flex items-start gap-2",
                                  children: [
                                    (0, s.jsxs)("span", {
                                      className: "text-orange font-bold mt-1",
                                      children: [t + 1, "."],
                                    }),
                                    (0, s.jsx)("span", { children: e }),
                                  ],
                                },
                                t,
                              ),
                            ),
                          }),
                        ],
                      }),
                      (0, s.jsxs)("div", {
                        className: "space-y-4 mb-8",
                        children: [
                          (0, s.jsx)("h4", {
                            className: "font-bold text-green",
                            children: "Monthly Timeline",
                          }),
                          U.monthlyBreakdown.map((e) =>
                            (0, s.jsxs)(
                              "div",
                              {
                                className: "bg-cream p-8 rounded-xl",
                                children: [
                                  (0, s.jsxs)("h5", {
                                    className: "font-bold text-green mb-4",
                                    children: ["Month ", e.month],
                                  }),
                                  (0, s.jsx)("ul", {
                                    className: "space-y-2",
                                    children: e.tasks.map((e, t) =>
                                      (0, s.jsxs)(
                                        "li",
                                        {
                                          className:
                                            "text-sm text-secondary flex items-start gap-2",
                                          children: [
                                            (0, s.jsx)(q.A, {
                                              className:
                                                "h-4 w-4 text-orange mt-0.5 flex-shrink-0",
                                            }),
                                            (0, s.jsx)("span", { children: e }),
                                          ],
                                        },
                                        t,
                                      ),
                                    ),
                                  }),
                                ],
                              },
                              e.month,
                            ),
                          ),
                        ],
                      }),
                      (0, s.jsxs)("div", {
                        className:
                          "bg-beige p-8 rounded-xl border border-border mb-8",
                        children: [
                          (0, s.jsxs)("h4", {
                            className:
                              "font-bold text-green mb-4 flex items-center gap-2",
                            children: [
                              (0, s.jsx)(w.A, { className: "h-5 w-5" }),
                              "Budget Breakdown",
                            ],
                          }),
                          (0, s.jsxs)("div", {
                            className: "text-2xl font-bold text-green mb-4",
                            children: [
                              "Total: ",
                              U.budgetBreakdown.total ||
                                "Provided in EUR/local currency mix",
                            ],
                          }),
                          (0, s.jsx)("div", {
                            className: "space-y-2",
                            children: U.budgetBreakdown.items.map((e, t) =>
                              (0, s.jsxs)(
                                "div",
                                {
                                  className:
                                    "flex justify-between items-center text-sm",
                                  children: [
                                    (0, s.jsx)("span", {
                                      className: "text-secondary",
                                      children: e.category,
                                    }),
                                    (0, s.jsx)("span", {
                                      className: "font-semibold text-green",
                                      children: e.cost,
                                    }),
                                  ],
                                },
                                t,
                              ),
                            ),
                          }),
                        ],
                      }),
                      U.riskAlerts.length > 0 &&
                        (0, s.jsxs)("div", {
                          className:
                            "bg-beige p-8 rounded-xl border border-border",
                          children: [
                            (0, s.jsxs)("h4", {
                              className:
                                "font-bold text-orange mb-4 flex items-center gap-2",
                              children: [
                                (0, s.jsx)(A.A, { className: "h-5 w-5" }),
                                "Risk Alerts & Important Notes",
                              ],
                            }),
                            (0, s.jsx)("ul", {
                              className: "space-y-2",
                              children: U.riskAlerts.map((e, t) =>
                                (0, s.jsxs)(
                                  "li",
                                  {
                                    className:
                                      "text-sm text-secondary flex items-start gap-2",
                                    children: [
                                      (0, s.jsx)(A.A, {
                                        className:
                                          "h-4 w-4 text-orange mt-0.5 flex-shrink-0",
                                      }),
                                      (0, s.jsx)("span", { children: e }),
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
              }),
            (0, s.jsx)("div", {
              className: "space-y-4",
              children: g.map((e) => {
                let t = O(e),
                  i = B.has(e),
                  a = t.filter((e) => I.has(e.id)).length;
                return (0, s.jsxs)(
                  f.Zp,
                  {
                    className: "rounded-2xl overflow-hidden border-beige",
                    children: [
                      (0, s.jsxs)("button", {
                        onClick: () => V(e),
                        className:
                          "w-full p-8 bg-cream hover:bg-beige transition-colors flex items-center justify-between",
                        children: [
                          (0, s.jsxs)("div", {
                            className: "flex items-center gap-4",
                            children: [
                              (0, s.jsx)("div", {
                                className:
                                  "w-12 h-12 rounded-full bg-beige flex items-center justify-center",
                                children: (0, s.jsx)(b.A, {
                                  className: "h-6 w-6 text-orange",
                                }),
                              }),
                              (0, s.jsxs)("div", {
                                className: "text-left",
                                children: [
                                  (0, s.jsx)("h3", {
                                    className: "font-bold text-green text-lg",
                                    children: e,
                                  }),
                                  (0, s.jsxs)("p", {
                                    className: "text-sm text-muted-foreground",
                                    children: [
                                      a,
                                      " of ",
                                      t.length,
                                      " completed",
                                    ],
                                  }),
                                ],
                              }),
                            ],
                          }),
                          i
                            ? (0, s.jsx)(P.A, {
                                className: "h-5 w-5 text-muted-foreground",
                              })
                            : (0, s.jsx)(G.A, {
                                className: "h-5 w-5 text-muted-foreground",
                              }),
                        ],
                      }),
                      i &&
                        (0, s.jsx)("div", {
                          className: "p-6 space-y-4 bg-white",
                          children: t.map((e) =>
                            (0, s.jsx)(
                              "div",
                              {
                                className:
                                  "p-8 rounded-xl border border-beige hover:border-orange transition-colors",
                                children: (0, s.jsxs)("div", {
                                  className: "flex items-start gap-4",
                                  children: [
                                    (0, s.jsx)("button", {
                                      onClick: () => R(e.id),
                                      className: "mt-1 flex-shrink-0",
                                      children: I.has(e.id)
                                        ? (0, s.jsx)(q.A, {
                                            className: "h-6 w-6 text-orange",
                                          })
                                        : (0, s.jsx)(M.A, {
                                            className:
                                              "h-6 w-6 text-muted-foreground",
                                          }),
                                    }),
                                    (0, s.jsxs)("div", {
                                      className: "flex-1 space-y-3",
                                      children: [
                                        (0, s.jsxs)("div", {
                                          className:
                                            "flex items-start justify-between gap-4",
                                          children: [
                                            (0, s.jsxs)("div", {
                                              children: [
                                                (0, s.jsxs)("h4", {
                                                  className:
                                                    "font-bold text-green flex items-center gap-2",
                                                  children: [
                                                    e.name,
                                                    e.required &&
                                                      (0, s.jsx)("span", {
                                                        className:
                                                          "text-xs bg-beige text-orange px-2 py-1 rounded-full border border-orange",
                                                        children: "Required",
                                                      }),
                                                  ],
                                                }),
                                                (0, s.jsx)("p", {
                                                  className:
                                                    "text-sm text-muted-foreground mt-1",
                                                  children: e.description,
                                                }),
                                              ],
                                            }),
                                            (0, s.jsx)("span", {
                                              className:
                                                "text-xs px-3 py-1 rounded-full border whitespace-nowrap ".concat(
                                                  z(e.priority),
                                                ),
                                              children: e.priority,
                                            }),
                                          ],
                                        }),
                                        (0, s.jsxs)("div", {
                                          className:
                                            "grid grid-cols-1 md:grid-cols-3 gap-4",
                                          children: [
                                            (0, s.jsxs)("div", {
                                              className:
                                                "flex items-center gap-2 text-sm text-secondary",
                                              children: [
                                                (0, s.jsx)(w.A, {
                                                  className:
                                                    "h-4 w-4 text-orange",
                                                }),
                                                (0, s.jsx)("span", {
                                                  children: e.estimatedCost,
                                                }),
                                              ],
                                            }),
                                            (0, s.jsxs)("div", {
                                              className:
                                                "flex items-center gap-2 text-sm text-secondary",
                                              children: [
                                                (0, s.jsx)(j.A, {
                                                  className:
                                                    "h-4 w-4 text-orange",
                                                }),
                                                (0, s.jsx)("span", {
                                                  children: e.processingTime,
                                                }),
                                              ],
                                            }),
                                            (0, s.jsxs)("div", {
                                              className:
                                                "flex items-center gap-2 text-sm text-secondary",
                                              children: [
                                                (0, s.jsx)(C.A, {
                                                  className:
                                                    "h-4 w-4 text-orange",
                                                }),
                                                (0, s.jsx)("span", {
                                                  children: e.category,
                                                }),
                                              ],
                                            }),
                                          ],
                                        }),
                                        e.notes &&
                                          (0, s.jsx)("div", {
                                            className:
                                              "bg-beige p-4 rounded-lg",
                                            children: (0, s.jsxs)("p", {
                                              className:
                                                "text-sm text-secondary flex items-start gap-2",
                                              children: [
                                                (0, s.jsx)(C.A, {
                                                  className:
                                                    "h-4 w-4 text-orange mt-0.5 flex-shrink-0",
                                                }),
                                                (0, s.jsx)("span", {
                                                  children: e.notes,
                                                }),
                                              ],
                                            }),
                                          }),
                                        e.alternativeOptions &&
                                          (0, s.jsx)("div", {
                                            className:
                                              "bg-beige p-4 rounded-lg",
                                            children: (0, s.jsxs)("p", {
                                              className:
                                                "text-sm text-secondary",
                                              children: [
                                                (0, s.jsx)("strong", {
                                                  children: "Alternatives:",
                                                }),
                                                " ",
                                                e.alternativeOptions.join(", "),
                                              ],
                                            }),
                                          }),
                                      ],
                                    }),
                                  ],
                                }),
                              },
                              e.id,
                            ),
                          ),
                        }),
                    ],
                  },
                  e,
                );
              }),
            }),
            (0, s.jsx)("div", {
              className: "flex justify-center",
              children: (0, s.jsxs)(u.$, {
                onClick: () => window.print(),
                variant: "outline",
                className:
                  "rounded-full border-orange text-orange hover:bg-beige",
                children: [
                  (0, s.jsx)(L.A, { className: "h-4 w-4 mr-2" }),
                  "Download Checklist (Print Page)",
                ],
              }),
            }),
          ],
        });
      }
      let E = [
        {
          question: "What documents are required for Ausbildung application?",
          answer:
            "The core required documents include: valid passport, birth certificate (apostilled), high school diploma and transcripts (apostilled and translated), German language certificate (B1/B2), Ausbildung training contract from a German company, blocked account confirmation (€11,208), health insurance proof, police clearance certificate, CV/resume in German format, and medical fitness certificate. Additional documents may be required based on your specific situation, nationality, and chosen sector.",
        },
        {
          question: "Do document requirements vary by nationality?",
          answer:
            "Yes, document requirements can vary significantly based on your nationality. Some countries require additional documents like TB test certificates, extra financial proof, or specific educational evaluations. Embassy requirements also differ - for example, Indian applicants might need APS certificates, while Nigerian applicants may face stricter financial documentation requirements. Our tool provides country-specific guidance to ensure you prepare the correct documents for your nationality.",
        },
        {
          question: "What is apostille and which documents need it?",
          answer:
            "An apostille is an international certification that authenticates the origin of a public document for use in foreign countries under the Hague Convention. Documents requiring apostille typically include: birth certificate, marriage certificate (if applicable), high school diploma and transcripts, university degrees, police clearance certificate, and sometimes medical certificates. The apostille must be obtained from the issuing country's designated authority before submitting to the German embassy. Countries not part of the Hague Convention need embassy legalization instead.",
        },
        {
          question: "Do I need to translate all documents to German?",
          answer:
            "Yes, all documents not originally in German or English must be translated to German by a certified translator. This includes educational certificates, birth certificates, marriage certificates, work experience letters, and police clearance certificates. The translation must be done by a sworn translator (vereidigter \xdcbersetzer) recognized by German authorities. Some embassies maintain lists of approved translators. Both original documents and certified German translations must be submitted together. Translation costs typically range from €30-100 per document depending on length and complexity.",
        },
        {
          question: "How long are documents valid for the application process?",
          answer:
            "Document validity varies: Police clearance certificates are typically valid for 3-6 months from issue date. Medical fitness certificates are usually valid for 6 months. Bank statements should be recent (within 3 months). Language certificates don't expire but should be recent (within 2 years preferred). Birth certificates with apostille remain valid indefinitely but some embassies prefer recent issues (within 6 months). Passport must be valid for at least 6 months beyond your intended stay. Health insurance must cover the entire visa period. Always check specific embassy requirements as validity periods can vary.",
        },
        {
          question: "What is the total cost for document preparation?",
          answer:
            "The total cost for document preparation typically ranges from €2,000-4,000, excluding the blocked account (€11,208). Major expenses include: blocked account setup fees (€50-150), apostille services (€20-50 per document), certified translations (€30-100 per document), German language course and B1/B2 exam (€500-1,500), health insurance (€30-100/month), passport photos (€10-20), police clearance (€20-100), medical certificates (€50-100), visa application fee (€75), and document courier services (€50-200). Costs vary significantly by country - obtaining apostilles and translations in some countries can be more expensive.",
        },
        {
          question: "How long does it take to collect all documents?",
          answer:
            "The complete document collection process typically takes 3-6 months, depending on your country and situation. Timeline breakdown: Educational credential evaluation (8-12 weeks), German language certificate preparation (3-6 months for B1/B2 level), police clearance certificate (4-8 weeks), apostille services (2-6 weeks depending on country), blocked account setup (2-4 weeks), medical certificates (2-3 weeks), document translations (1-2 weeks per document). The longest items are usually the German language certificate and educational evaluations. It's recommended to start the process at least 6-9 months before your intended Ausbildung start date.",
        },
        {
          question: "Where do I get documents in my home country?",
          answer:
            "Document sources vary by country but generally: Birth certificates come from civil registry offices or vital statistics departments. Educational certificates from your school/university registrar. Police clearance from national police headquarters or local police stations (some countries have online systems). Apostille services from the Ministry of Foreign Affairs or designated apostille offices. Medical certificates from licensed physicians or approved medical centers. Translations from certified/sworn translators (often listed on German embassy websites). Each country has specific procedures - our personalized guidance provides exact office names, addresses, and procedures for your specific nationality.",
        },
        {
          question: "What happens if I'm missing a document?",
          answer:
            "Missing documents can delay or result in rejection of your visa application. If you're missing a required document: Contact the German embassy immediately to discuss alternatives or extensions. Some documents have acceptable substitutes (e.g., sponsorship letter instead of blocked account in rare cases). For unavailable documents from your home country, you may need a sworn affidavit explaining why it cannot be obtained. Educational documents can sometimes be replaced with school leaving certificates if originals are lost. The Ausbildung contract is non-negotiable and must be obtained. Never submit fake or altered documents - this can result in a permanent visa ban. Plan ahead and start collecting documents early to avoid last-minute issues.",
        },
        {
          question: "Can I use digital copies or do I need original documents?",
          answer:
            "For the initial visa application, most German embassies accept certified copies or notarized photocopies along with originals for verification. However, you must bring original documents to your visa interview for verification - they will be checked against the copies. After visa approval, you'll need original documents for: residence permit application in Germany, Anmeldung (registration) with local authorities, and enrollment with your Ausbildung company. Some documents like the Ausbildung contract, blocked account confirmation, and health insurance must be submitted as originals or certified copies. Always maintain at least 2-3 certified copies of all important documents, and keep digital scans as backup. Never send original documents by regular mail - use secure courier services.",
        },
      ];
      var B = i(27239),
        F = i(16148),
        R = i(82164),
        V = i(5101),
        O = i(33482),
        z = i(46031);
      let H = [
          "India",
          "Nigeria",
          "Pakistan",
          "Bangladesh",
          "Philippines",
          "Egypt",
          "Vietnam",
          "Turkey",
          "Morocco",
          "Tunisia",
          "Algeria",
          "Kenya",
          "Ghana",
          "Ethiopia",
          "South Africa",
          "Mexico",
          "Brazil",
          "Colombia",
          "Argentina",
          "Peru",
          "China",
          "Indonesia",
          "Thailand",
          "Nepal",
          "Sri Lanka",
          "Ukraine",
          "Russia",
          "Serbia",
          "Albania",
          "Bosnia and Herzegovina",
          "North Macedonia",
          "Jordan",
          "Lebanon",
          "Syria",
          "Iran",
          "Iraq",
          "Afghanistan",
          "Cameroon",
          "Senegal",
          "Ivory Coast",
          "Uganda",
          "Tanzania",
          "Zimbabwe",
          "Other",
        ],
        W = [
          "Healthcare (Nursing, Elderly Care, Medical Assistant)",
          "IT & Technology (Software Development, Networking, Data Analysis)",
          "Engineering (Mechanical, Electrical, Automotive)",
          "Hospitality & Tourism (Hotel Management, Restaurant Service)",
          "Business & Administration (Office Management, Accounting, Marketing)",
          "Construction & Trades (Carpentry, Plumbing, Electrical)",
          "Logistics & Transportation (Warehouse, Shipping, Driving)",
          "Retail & Sales (Shop Assistant, Customer Service)",
          "Other",
        ],
        Y = [
          "High School",
          "Bachelor's Degree",
          "Master's Degree",
          "PhD/Doctorate",
          "Vocational Training",
          "Other",
        ],
        U = [
          "Ausbildung Training Visa",
          "Work Visa",
          "Student Visa",
          "Job Seeker Visa",
          "Other",
        ],
        Z = ["Single", "Couple (No Children)", "With Children"],
        _ = [
          "Tight (Minimal funds)",
          "Moderate (Average budget)",
          "Flexible (Good financial backing)",
        ],
        J = {
          title: "How to Use the Document Checklist Generator",
          description:
            "Get a complete, personalized checklist of all required documents for your Ausbildung visa application based on your nationality and situation.",
          steps: [
            {
              title: "Enter Your Profile",
              description:
                "Provide your nationality, sector, education level, visa type, family status, and current location to get accurate requirements.",
              icon: k.A,
            },
            {
              title: "Select Document Type",
              description:
                "Choose your Ausbildung sector and visa type to identify sector-specific and visa-specific document requirements.",
              icon: B.A,
            },
            {
              title: "Get Your Checklist",
              description:
                "Receive a comprehensive checklist with all required documents, organized by category with detailed descriptions.",
              icon: b.A,
            },
          ],
          inputs: [
            {
              label: "Nationality",
              description: "Your country of citizenship",
              icon: k.A,
            },
            {
              label: "Sector",
              description: "Healthcare, IT, Engineering, Hospitality, etc.",
              icon: F.A,
            },
            {
              label: "Education Level",
              description: "High School, Bachelor's, Master's, PhD, etc.",
              icon: R.A,
            },
            {
              label: "Visa Type",
              description:
                "Ausbildung Training Visa, Work Visa, Student Visa, etc.",
              icon: B.A,
            },
            {
              label: "Family Status",
              description: "Single, Couple, With Children",
              icon: V.A,
            },
            {
              label: "Current Location",
              description: "City and country where you currently live",
              icon: k.A,
            },
          ],
          outputs: [
            {
              label: "Complete Checklist",
              description: "All required documents organized by category",
              icon: b.A,
            },
            {
              label: "Country-Specific Docs",
              description:
                "Additional documents required based on your nationality",
              icon: k.A,
            },
            {
              label: "Timeline",
              description: "Estimated time to collect each document",
              icon: D.A,
            },
            {
              label: "Cost Estimates",
              description: "Approximate costs for obtaining documents",
              icon: O.A,
            },
            {
              label: "Processing Times",
              description: "Expected processing duration for each document",
              icon: j.A,
            },
          ],
          additionalInfo:
            "Checklists are tailored to your nationality and include country-specific requirements, embassy procedures, and 2026 visa regulations.",
        };
      function $() {
        let [e, t] = (0, a.useState)({
            nationality: "",
            sector: "",
            educationLevel: "",
            visaType: "",
            familyStatus: "",
            currentLocation: "",
            timelineStartDate: "",
            budget: "",
          }),
          [i, g] = (0, a.useState)(null),
          [f, y] = (0, a.useState)(null),
          [v, j] = (0, a.useState)(!1),
          [w, N] = (0, a.useState)(0),
          [k, C] = (0, a.useState)(""),
          [A, T] = (0, a.useState)({}),
          q = () => {
            let t = {};
            return (
              e.nationality ||
                (t.nationality = "Please select your nationality"),
              e.sector || (t.sector = "Please select your Ausbildung sector"),
              e.educationLevel ||
                (t.educationLevel = "Please select your education level"),
              e.visaType || (t.visaType = "Please select your visa type"),
              e.familyStatus ||
                (t.familyStatus = "Please select your family status"),
              e.currentLocation.trim() ||
                (t.currentLocation = "Please enter your current location"),
              e.budget || (t.budget = "Please select your budget range"),
              T(t),
              0 === Object.keys(t).length
            );
          },
          S = async () => {
            (j(!0), N(0), C("Initializing AI analysis..."));
            let t = setInterval(() => {
                N((e) => (e >= 95 ? e : e + 1));
              }, 600),
              i = [
                "Analyzing country-specific requirements...",
                "Identifying sector-specific documents...",
                "Finding procurement locations and costs...",
                "Creating your priority action plan...",
                "Finalizing personalized guidance...",
              ],
              s = 0,
              a = setInterval(() => {
                s < i.length - 1 && C(i[++s]);
              }, 12e3);
            try {
              let i = await fetch("/api/tools/generate-checklist-guidance", {
                method: "POST",
                headers: { "Content-Type": "application/json" },
                body: JSON.stringify(e),
              });
              if (!i.ok) throw Error("Failed to generate guidance");
              let s = await i.json();
              (clearInterval(t),
                clearInterval(a),
                N(100),
                C("Complete!"),
                y(s),
                setTimeout(() => {
                  var e;
                  null ===
                    (e = document.getElementById("ai-guidance-section")) ||
                    void 0 === e ||
                    e.scrollIntoView({ behavior: "smooth", block: "start" });
                }, 500));
            } catch (e) {
              (console.error("Error generating guidance:", e),
                clearInterval(t),
                clearInterval(a),
                N(0),
                C(""),
                alert(
                  "Failed to generate personalized guidance. Please try again or use the base checklist.",
                ));
            } finally {
              (j(!1),
                setTimeout(() => {
                  (N(0), C(""));
                }, 2e3));
            }
          },
          D = (e, i) => {
            (t((t) => ({ ...t, [e]: i })),
              A[e] &&
                T((t) => {
                  let i = { ...t };
                  return (delete i[e], i);
                }));
          };
        return (0, s.jsx)(r.d, {
          title: "Document Checklist Generator",
          description:
            "Generate a personalized document checklist for your German Ausbildung application based on your nationality and sector. Get exact locations, costs, and timelines for obtaining each document.",
          icon: b.A,
          category: "Application & Documentation",
          toolSlug: "document-checklist",
          children: (0, s.jsxs)("div", {
            className: "space-y-8",
            children: [
              !i &&
                (0, s.jsx)(c.tZ, {
                  title: "Your Application Profile",
                  description:
                    "Provide your details to generate a comprehensive document checklist tailored to your specific situation.",
                  children: (0, s.jsxs)("div", {
                    className: "space-y-8",
                    children: [
                      (0, s.jsxs)("div", {
                        className: "grid grid-cols-1 md:grid-cols-2 gap-6",
                        children: [
                          (0, s.jsx)(c.vC, {
                            label: "Nationality",
                            htmlFor: "nationality",
                            required: !0,
                            error: A.nationality,
                            children: (0, s.jsxs)(h.l6, {
                              value: e.nationality,
                              onValueChange: (e) => D("nationality", e),
                              children: [
                                (0, s.jsx)(h.bq, {
                                  className: "rounded-xl border-beige",
                                  children: (0, s.jsx)(h.yv, {
                                    placeholder: "Select your country",
                                  }),
                                }),
                                (0, s.jsx)(h.gC, {
                                  children: H.map((e) =>
                                    (0, s.jsx)(
                                      h.eb,
                                      { value: e, children: e },
                                      e,
                                    ),
                                  ),
                                }),
                              ],
                            }),
                          }),
                          (0, s.jsx)(c.vC, {
                            label: "Ausbildung Sector",
                            htmlFor: "sector",
                            required: !0,
                            error: A.sector,
                            children: (0, s.jsxs)(h.l6, {
                              value: e.sector,
                              onValueChange: (e) => D("sector", e),
                              children: [
                                (0, s.jsx)(h.bq, {
                                  className: "rounded-xl border-beige",
                                  children: (0, s.jsx)(h.yv, {
                                    placeholder: "Select sector",
                                  }),
                                }),
                                (0, s.jsx)(h.gC, {
                                  children: W.map((e) =>
                                    (0, s.jsx)(
                                      h.eb,
                                      { value: e, children: e },
                                      e,
                                    ),
                                  ),
                                }),
                              ],
                            }),
                          }),
                          (0, s.jsx)(c.vC, {
                            label: "Education Level",
                            htmlFor: "educationLevel",
                            required: !0,
                            error: A.educationLevel,
                            children: (0, s.jsxs)(h.l6, {
                              value: e.educationLevel,
                              onValueChange: (e) => D("educationLevel", e),
                              children: [
                                (0, s.jsx)(h.bq, {
                                  className: "rounded-xl border-beige",
                                  children: (0, s.jsx)(h.yv, {
                                    placeholder: "Select education level",
                                  }),
                                }),
                                (0, s.jsx)(h.gC, {
                                  children: Y.map((e) =>
                                    (0, s.jsx)(
                                      h.eb,
                                      { value: e, children: e },
                                      e,
                                    ),
                                  ),
                                }),
                              ],
                            }),
                          }),
                          (0, s.jsx)(c.vC, {
                            label: "Visa Type",
                            htmlFor: "visaType",
                            required: !0,
                            error: A.visaType,
                            children: (0, s.jsxs)(h.l6, {
                              value: e.visaType,
                              onValueChange: (e) => D("visaType", e),
                              children: [
                                (0, s.jsx)(h.bq, {
                                  className: "rounded-xl border-beige",
                                  children: (0, s.jsx)(h.yv, {
                                    placeholder: "Select visa type",
                                  }),
                                }),
                                (0, s.jsx)(h.gC, {
                                  children: U.map((e) =>
                                    (0, s.jsx)(
                                      h.eb,
                                      { value: e, children: e },
                                      e,
                                    ),
                                  ),
                                }),
                              ],
                            }),
                          }),
                          (0, s.jsx)(c.vC, {
                            label: "Family Status",
                            htmlFor: "familyStatus",
                            required: !0,
                            error: A.familyStatus,
                            children: (0, s.jsxs)(h.l6, {
                              value: e.familyStatus,
                              onValueChange: (e) => D("familyStatus", e),
                              children: [
                                (0, s.jsx)(h.bq, {
                                  className: "rounded-xl border-beige",
                                  children: (0, s.jsx)(h.yv, {
                                    placeholder: "Select family status",
                                  }),
                                }),
                                (0, s.jsx)(h.gC, {
                                  children: Z.map((e) =>
                                    (0, s.jsx)(
                                      h.eb,
                                      { value: e, children: e },
                                      e,
                                    ),
                                  ),
                                }),
                              ],
                            }),
                          }),
                          (0, s.jsx)(c.vC, {
                            label: "Budget Range",
                            htmlFor: "budget",
                            required: !0,
                            error: A.budget,
                            children: (0, s.jsxs)(h.l6, {
                              value: e.budget,
                              onValueChange: (e) => D("budget", e),
                              children: [
                                (0, s.jsx)(h.bq, {
                                  className: "rounded-xl border-beige",
                                  children: (0, s.jsx)(h.yv, {
                                    placeholder: "Select budget range",
                                  }),
                                }),
                                (0, s.jsx)(h.gC, {
                                  children: _.map((e) =>
                                    (0, s.jsx)(
                                      h.eb,
                                      { value: e, children: e },
                                      e,
                                    ),
                                  ),
                                }),
                              ],
                            }),
                          }),
                          (0, s.jsx)(c.vC, {
                            label: "Current Location (City, Country)",
                            htmlFor: "currentLocation",
                            required: !0,
                            error: A.currentLocation,
                            children: (0, s.jsx)(p.p, {
                              id: "currentLocation",
                              type: "text",
                              placeholder: "e.g., Mumbai, India",
                              value: e.currentLocation,
                              onChange: (e) =>
                                D("currentLocation", e.target.value),
                              className: "rounded-xl border-beige",
                            }),
                          }),
                          (0, s.jsx)(c.vC, {
                            label: "Desired Start Date (Optional)",
                            htmlFor: "timelineStartDate",
                            description:
                              "When do you plan to start your Ausbildung?",
                            children: (0, s.jsx)(p.p, {
                              id: "timelineStartDate",
                              type: "date",
                              value: e.timelineStartDate,
                              onChange: (e) =>
                                D("timelineStartDate", e.target.value),
                              className: "rounded-xl border-beige",
                              min: new Date().toISOString().split("T")[0],
                            }),
                          }),
                        ],
                      }),
                      (0, s.jsxs)("div", {
                        className: "flex flex-col items-center space-y-4 pt-4",
                        children: [
                          (0, s.jsxs)(u.$, {
                            onClick: () => {
                              if (!q()) {
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
                              (g({ documents: x, formData: e }),
                                (0, o.r)("document-checklist"),
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
                              "Generate Document Checklist",
                              (0, s.jsx)(z.A, { className: "ml-2 h-5 w-5" }),
                            ],
                          }),
                          (0, s.jsx)(o.A, {
                            toolSlug: "document-checklist",
                            actionText: "checklists generated",
                          }),
                        ],
                      }),
                    ],
                  }),
                }),
              !i && (0, s.jsx)(d.HowItWorksSection, { content: J }),
              i &&
                (0, s.jsxs)("div", {
                  id: "results-section",
                  children: [
                    (0, s.jsx)(I, {
                      documents: i.documents,
                      formData: i.formData,
                      onGetPersonalizedGuidance: S,
                      aiGuidance: f,
                      loadingAI: v,
                      aiProgress: w,
                      aiProgressMessage: k,
                    }),
                    (0, s.jsx)("div", {
                      className: "flex justify-center mt-8",
                      children: (0, s.jsx)(u.$, {
                        onClick: () => {
                          (g(null),
                            y(null),
                            t({
                              nationality: "",
                              sector: "",
                              educationLevel: "",
                              visaType: "",
                              familyStatus: "",
                              currentLocation: "",
                              timelineStartDate: "",
                              budget: "",
                            }),
                            window.scrollTo({ top: 0, behavior: "smooth" }));
                        },
                        variant: "outline",
                        className:
                          "rounded-full border-orange text-orange hover:bg-beige",
                        children: "Start Over with New Profile",
                      }),
                    }),
                  ],
                }),
              (0, s.jsx)(l.CTASection, {
                title: "Start Your Job Search Today",
                description:
                  "Now that you know what documents you need, explore real job openings from verified German employers and take the next step in your Ausbildung journey.",
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
              (0, s.jsx)(n.ToolFAQSection, { faqs: E }),
              (0, s.jsx)(m.RelatedTools, {
                currentToolSlug: "document-checklist",
                limit: 3,
              }),
            ],
          }),
        });
      }
    },
    80006: (e, t, i) => {
      Promise.resolve().then(i.bind(i, 65798));
    },
  },
  (e) => {
    var t = (t) => e((e.s = t));
    (e.O(0, [46593, 36209, 84121, 72076, 77358], () => t(80006)),
      (_N_E = e.O()));
  },
]);
