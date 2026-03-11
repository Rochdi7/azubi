(self.webpackChunk_N_E = self.webpackChunk_N_E || []).push([
  [33321],
  {
    45326: (e, t, s) => {
      "use strict";
      s.d(t, { PartnerHero: () => c });
      var a = s(70207),
        r = s(73235),
        n = s(80268),
        i = s(46031),
        o = s(95540);
      function c() {
        return (0, a.jsx)(r.d, {
          badge: { text: "Partner With Us", icon: n.A },
          title: "Partner with GoAusbildung",
          subtitle:
            "Join our network of successful education partners helping international students achieve their German Ausbildung dreams while building profitable business relationships.",
          primaryCta: {
            text: "Get Started",
            href: "#partner-benefits",
            icon: (0, a.jsx)(i.A, { className: "w-5 h-5 mr-2" }),
          },
          secondaryCta: {
            text: "Contact Us",
            href: "/contact",
            icon: (0, a.jsx)(o.A, { className: "w-5 h-5 mr-2" }),
          },
          backgroundImage: "brandenburg-gate-hero-autumn.webp",
          backgroundAlt:
            "Brandenburg Gate in autumn - symbol of German partnerships and collaboration",
          landmarkCaption: "Brandenburg Gate, Berlin",
          alignment: "center",
        });
      }
    },
    56047: (e, t, s) => {
      "use strict";
      s.d(t, { PartnerForm: () => I });
      var a = s(70207),
        r = s(87223),
        n = s(45748),
        i = s(54459),
        o = s(70005),
        c = s(46031),
        l = s(95992),
        d = s(97020),
        m = s(50341),
        u = s(31159),
        h = s(80187),
        x = s(39441),
        p = s(40167),
        g = s(87277),
        j = s(61607),
        y = s(93501),
        f = s(41082),
        b = s(17802),
        N = s(95034),
        v = s(64920),
        w = s(6929),
        S = s(44280),
        C = s(50488),
        P = s(82110),
        A = s(54539);
      let B = A.Ik({
          companyName: A.Yj()
            .min(2, "Company name is required")
            .max(200, "Company name too long"),
          organizationType: A.k5(
            [
              "language_school",
              "recruitment_agency",
              "educational_institution",
              "consulting_firm",
              "other",
            ],
            {
              errorMap: () => ({ message: "Please select organization type" }),
            },
          ),
          countryOfOperation: A.Yj()
            .min(1, "Country is required")
            .max(100, "Country name too long"),
          websiteUrl: A.Yj().url("Invalid website URL").or(A.eu("")).optional(),
          contactName: A.Yj()
            .min(2, "Contact name is required")
            .max(150, "Contact name too long"),
          contactPosition: A.Yj()
            .min(1, "Position is required")
            .max(100, "Position title too long"),
          email: A.Yj()
            .email("Invalid email address")
            .max(255, "Email too long"),
          phone: A.Yj()
            .min(10, "Valid phone number required")
            .max(50, "Phone number too long"),
          countryCode: A.Yj()
            .min(1, "Country code required")
            .max(10, "Invalid country code"),
          studentCountB1B2: A.ai()
            .min(1, "Must have at least 1 B1/B2 student")
            .max(1e4, "Student count seems unrealistic"),
          studentSpecializations: A.YO(A.Yj())
            .min(1, "Select at least one specialization")
            .max(5, "Too many specializations selected"),
          servicesExpected: A.Yj()
            .min(10, "Please describe expected services briefly")
            .max(500, "Description too long"),
          additionalComments: A.Yj().max(500, "Comments too long").optional(),
          website: A.Yj().refine((e) => "" === e, {
            message: "This field should be left empty",
          }),
        }),
        k = [
          "IT & Software",
          "Healthcare & Nursing",
          "Engineering",
          "Business & Management",
          "Hospitality & Tourism",
          "Manufacturing",
          "Construction",
          "Other",
        ],
        O = {
          language_school: "Language School",
          recruitment_agency: "Recruitment Agency",
          educational_institution: "Educational Institution",
          consulting_firm: "Consulting Firm",
          other: "Other",
        },
        z = [
          "Afghanistan",
          "Albania",
          "Algeria",
          "Argentina",
          "Armenia",
          "Australia",
          "Austria",
          "Azerbaijan",
          "Bahrain",
          "Bangladesh",
          "Belarus",
          "Belgium",
          "Bolivia",
          "Bosnia and Herzegovina",
          "Brazil",
          "Bulgaria",
          "Cambodia",
          "Cameroon",
          "Canada",
          "Chile",
          "China",
          "Colombia",
          "Costa Rica",
          "Croatia",
          "Czech Republic",
          "Denmark",
          "Dominican Republic",
          "Ecuador",
          "Egypt",
          "El Salvador",
          "Estonia",
          "Ethiopia",
          "Finland",
          "France",
          "Georgia",
          "Germany",
          "Ghana",
          "Greece",
          "Guatemala",
          "Honduras",
          "Hungary",
          "Iceland",
          "India",
          "Indonesia",
          "Iran",
          "Iraq",
          "Ireland",
          "Israel",
          "Italy",
          "Japan",
          "Jordan",
          "Kazakhstan",
          "Kenya",
          "Kuwait",
          "Kyrgyzstan",
          "Latvia",
          "Lebanon",
          "Lithuania",
          "Luxembourg",
          "Malaysia",
          "Mexico",
          "Morocco",
          "Nepal",
          "Netherlands",
          "New Zealand",
          "Nigeria",
          "North Macedonia",
          "Norway",
          "Pakistan",
          "Peru",
          "Philippines",
          "Poland",
          "Portugal",
          "Qatar",
          "Romania",
          "Russia",
          "Saudi Arabia",
          "Serbia",
          "Singapore",
          "Slovakia",
          "Slovenia",
          "South Africa",
          "South Korea",
          "Spain",
          "Sri Lanka",
          "Sweden",
          "Switzerland",
          "Thailand",
          "Tunisia",
          "Turkey",
          "Ukraine",
          "United Arab Emirates",
          "United Kingdom",
          "United States",
          "Uruguay",
          "Uzbekistan",
          "Venezuela",
          "Vietnam",
        ],
        E = [
          { id: 1, title: "Organization", description: "Company details" },
          { id: 2, title: "Contact", description: "Contact information" },
          { id: 3, title: "Partnership", description: "Partnership details" },
        ];
      function I() {
        let [e, t] = (0, r.useState)(1),
          [s, A] = (0, r.useState)(!1),
          [I, F] = (0, r.useState)(!1),
          [J, T] = (0, r.useState)(null),
          [U, G] = (0, r.useState)(null),
          [_, Y] = (0, r.useState)(new Set()),
          M = (0, w.mN)({
            resolver: (0, S.u)(B),
            mode: "onChange",
            defaultValues: {
              companyName: "",
              organizationType: "language_school",
              countryOfOperation: "",
              websiteUrl: "",
              contactName: "",
              contactPosition: "",
              email: "",
              phone: "",
              countryCode: "91",
              studentCountB1B2: void 0,
              studentSpecializations: [],
              servicesExpected: "",
              additionalComments: "",
              website: "",
            },
          }),
          R = async () => {
            let s = V(e);
            (await M.trigger(s))
              ? t((e) => Math.min(e + 1, E.length))
              : Y((e) => {
                  let t = new Set(e);
                  return (s.forEach((e) => t.add(e)), t);
                });
          },
          V = (e) => {
            switch (e) {
              case 1:
                return [
                  "companyName",
                  "organizationType",
                  "countryOfOperation",
                  "websiteUrl",
                ];
              case 2:
                return [
                  "contactName",
                  "contactPosition",
                  "email",
                  "phone",
                  "countryCode",
                ];
              case 3:
                return [
                  "studentCountB1B2",
                  "studentSpecializations",
                  "servicesExpected",
                ];
              default:
                return [];
            }
          },
          W = async (e) => {
            if ((T(null), "" !== e.website)) {
              setTimeout(() => F(!0), 1e3);
              return;
            }
            A(!0);
            try {
              let t = await fetch("/api/partner", {
                  method: "POST",
                  headers: { "Content-Type": "application/json" },
                  body: JSON.stringify(e),
                }),
                s = await t.json();
              t.ok
                ? (F(!0),
                  (0, C.oR)({
                    title: "Partnership Application Submitted!",
                    description:
                      "We've received your application and will contact you within 48 hours.",
                    variant: "default",
                  }))
                : (T(
                    s.error ||
                      "We couldn't process your application. Please try again.",
                  ),
                  (0, C.oR)({
                    title: "Something went wrong",
                    description: s.error || "Please try again.",
                    variant: "destructive",
                  }));
            } catch (e) {
              (console.error("Error submitting partnership application:", e),
                T("Network error. Please check your connection and try again."),
                (0, C.oR)({
                  title: "Connection error",
                  description: "Please check your connection and try again.",
                  variant: "destructive",
                }));
            } finally {
              A(!1);
            }
          },
          q = (e) => {
            let t = M.getValues("studentSpecializations"),
              s = t.includes(e) ? t.filter((t) => t !== e) : [...t, e];
            M.setValue("studentSpecializations", s, { shouldValidate: !0 });
          };
        return I
          ? (0, a.jsx)(N.m, {
              size: "sm",
              children: (0, a.jsx)(h.Zp, {
                className:
                  "mx-auto max-w-2xl overflow-hidden bg-card shadow-lg border-0",
                children: (0, a.jsxs)(h.Wu, {
                  className: "p-12 text-center",
                  children: [
                    (0, a.jsx)(n.P.div, {
                      initial: { scale: 0 },
                      animate: { scale: 1 },
                      transition: { duration: 0.5, type: "spring" },
                      className: "mb-6",
                      children: (0, a.jsx)("img", {
                        src: "/mascot/mascot_graduate_female.webp",
                        alt: "GoAusbildung mascot celebrating partnership",
                        className: "w-32 h-32 mx-auto",
                      }),
                    }),
                    (0, a.jsx)("h2", {
                      className: "text-3xl font-bold mb-4 text-secondary",
                      children: "Partnership Application Submitted!",
                    }),
                    (0, a.jsx)("p", {
                      className:
                        "text-lg text-muted-foreground mb-8 max-w-md mx-auto",
                      children:
                        "Thank you for your interest in partnering with GoAusbildung! Our partnerships team will review your application and contact you within 48 hours.",
                    }),
                    (0, a.jsxs)("div", {
                      className: "bg-beige rounded-lg p-6 mb-8",
                      children: [
                        (0, a.jsx)("h3", {
                          className: "font-semibold mb-3 text-secondary",
                          children: "What happens next?",
                        }),
                        (0, a.jsxs)("div", {
                          className: "space-y-2 text-sm text-muted-foreground",
                          children: [
                            (0, a.jsxs)("div", {
                              className: "flex items-center gap-2",
                              children: [
                                (0, a.jsx)(o.A, {
                                  className: "w-4 h-4 text-secondary",
                                }),
                                (0, a.jsx)("span", {
                                  children:
                                    "We'll review your partnership application",
                                }),
                              ],
                            }),
                            (0, a.jsxs)("div", {
                              className: "flex items-center gap-2",
                              children: [
                                (0, a.jsx)(o.A, {
                                  className: "w-4 h-4 text-secondary",
                                }),
                                (0, a.jsx)("span", {
                                  children:
                                    "Our partnerships team will contact you within 48 hours",
                                }),
                              ],
                            }),
                            (0, a.jsxs)("div", {
                              className: "flex items-center gap-2",
                              children: [
                                (0, a.jsx)(o.A, {
                                  className: "w-4 h-4 text-secondary",
                                }),
                                (0, a.jsx)("span", {
                                  children:
                                    "Schedule a partnership discussion call",
                                }),
                              ],
                            }),
                            (0, a.jsxs)("div", {
                              className: "flex items-center gap-2",
                              children: [
                                (0, a.jsx)(o.A, {
                                  className: "w-4 h-4 text-secondary",
                                }),
                                (0, a.jsx)("span", {
                                  children:
                                    "Begin placing your B1/B2 students in Ausbildung programs",
                                }),
                              ],
                            }),
                          ],
                        }),
                      ],
                    }),
                    (0, a.jsx)(x.$, {
                      asChild: !0,
                      children: (0, a.jsxs)("a", {
                        href: "/",
                        children: [
                          "Back to Homepage",
                          (0, a.jsx)(c.A, { className: "w-4 h-4 ml-2" }),
                        ],
                      }),
                    }),
                  ],
                }),
              }),
            })
          : (0, a.jsxs)(N.m, {
              size: "md",
              children: [
                (0, a.jsx)("div", {
                  className: "mb-8 hidden sm:block overflow-hidden",
                  children: (0, a.jsx)("div", {
                    className:
                      "flex items-center justify-center gap-2 max-w-2xl mx-auto px-4",
                    children: E.map((t, s) =>
                      (0, a.jsxs)(
                        r.Fragment,
                        {
                          children: [
                            (0, a.jsxs)("div", {
                              className: "flex flex-col items-center",
                              children: [
                                (0, a.jsx)("div", {
                                  className: (0, P.cn)(
                                    "w-10 h-10 rounded-full flex items-center justify-center text-sm font-medium mb-2 transition-colors shrink-0",
                                    e >= t.id
                                      ? "bg-secondary text-white"
                                      : "bg-beige text-muted-foreground",
                                  ),
                                  children:
                                    e > t.id
                                      ? (0, a.jsx)(o.A, {
                                          className: "w-5 h-5",
                                        })
                                      : t.id,
                                }),
                                (0, a.jsxs)("div", {
                                  className: "text-center",
                                  children: [
                                    (0, a.jsx)("div", {
                                      className: (0, P.cn)(
                                        "font-medium text-sm whitespace-nowrap",
                                        e >= t.id
                                          ? "text-secondary"
                                          : "text-muted-foreground",
                                      ),
                                      children: t.title,
                                    }),
                                    (0, a.jsx)("div", {
                                      className:
                                        "text-xs text-muted-foreground whitespace-nowrap",
                                      children: t.description,
                                    }),
                                  ],
                                }),
                              ],
                            }),
                            s < E.length - 1 &&
                              (0, a.jsx)("div", {
                                className: (0, P.cn)(
                                  "h-0.5 w-12 shrink-0 mx-2 mt-[-20px]",
                                  e > t.id ? "bg-secondary" : "bg-beige",
                                ),
                              }),
                          ],
                        },
                        t.id,
                      ),
                    ),
                  }),
                }),
                (0, a.jsx)("div", {
                  className: "mb-6 sm:hidden",
                  children: (0, a.jsxs)("div", {
                    className: "flex items-center justify-center gap-2",
                    children: [
                      (0, a.jsxs)("span", {
                        className: "text-sm font-medium text-muted-foreground",
                        children: ["Step ", e, " of ", E.length],
                      }),
                      (0, a.jsx)(b.E, {
                        variant: "secondary",
                        className: "text-xs",
                        children: E[e - 1].title,
                      }),
                    ],
                  }),
                }),
                (0, a.jsx)(h.Zp, {
                  className:
                    "mx-auto max-w-3xl overflow-hidden bg-card shadow-lg border-0",
                  children: (0, a.jsxs)(h.Wu, {
                    className: "p-8",
                    children: [
                      J &&
                        (0, a.jsxs)("div", {
                          className:
                            "bg-destructive/10 p-3 rounded-md flex items-start gap-2 mb-6",
                          children: [
                            (0, a.jsx)(l.A, {
                              className:
                                "h-5 w-5 text-destructive shrink-0 mt-0.5",
                            }),
                            (0, a.jsx)("div", {
                              className: "text-sm text-destructive",
                              children: J,
                            }),
                          ],
                        }),
                      (0, a.jsxs)("form", {
                        onSubmit: M.handleSubmit(W),
                        className: "space-y-8",
                        children: [
                          (0, a.jsx)(i.N, {
                            mode: "wait",
                            children: (0, a.jsx)(
                              n.P.div,
                              {
                                initial: { opacity: 0, x: 20 },
                                animate: { opacity: 1, x: 0 },
                                exit: { opacity: 0, x: -20 },
                                transition: { duration: 0.3 },
                                children: (() => {
                                  switch (e) {
                                    case 1:
                                      return (0, a.jsxs)("div", {
                                        className: "space-y-6",
                                        children: [
                                          (0, a.jsxs)("div", {
                                            className: "text-center mb-6",
                                            children: [
                                              (0, a.jsx)("h3", {
                                                className:
                                                  "text-xl font-semibold mb-2",
                                                children:
                                                  "Organization Details",
                                              }),
                                              (0, a.jsx)("p", {
                                                className:
                                                  "text-sm text-muted-foreground",
                                                children:
                                                  "Tell us about your company",
                                              }),
                                            ],
                                          }),
                                          (0, a.jsxs)("div", {
                                            className:
                                              "grid gap-4 sm:grid-cols-2",
                                            children: [
                                              (0, a.jsxs)("div", {
                                                className: "sm:col-span-2",
                                                children: [
                                                  (0, a.jsx)(g.J, {
                                                    htmlFor: "companyName",
                                                    className: (0, P.cn)(
                                                      "text-sm",
                                                      _.has("companyName") &&
                                                        M.formState.errors
                                                          .companyName &&
                                                        "text-destructive",
                                                    ),
                                                    children: "Company Name *",
                                                  }),
                                                  (0, a.jsx)(p.p, {
                                                    id: "companyName",
                                                    placeholder:
                                                      "Your Organization Name",
                                                    ...M.register(
                                                      "companyName",
                                                    ),
                                                    className: (0, P.cn)(
                                                      "mt-1",
                                                      _.has("companyName") &&
                                                        M.formState.errors
                                                          .companyName &&
                                                        "border-destructive",
                                                    ),
                                                  }),
                                                  _.has("companyName") &&
                                                    M.formState.errors
                                                      .companyName &&
                                                    (0, a.jsx)("p", {
                                                      className:
                                                        "text-xs text-destructive mt-1",
                                                      children:
                                                        M.formState.errors
                                                          .companyName.message,
                                                    }),
                                                ],
                                              }),
                                              (0, a.jsxs)("div", {
                                                children: [
                                                  (0, a.jsx)(g.J, {
                                                    htmlFor: "organizationType",
                                                    className: "text-sm",
                                                    children:
                                                      "Organization Type *",
                                                  }),
                                                  (0, a.jsx)(w.xI, {
                                                    name: "organizationType",
                                                    control: M.control,
                                                    render: (e) => {
                                                      let { field: t } = e;
                                                      return (0, a.jsxs)(y.l6, {
                                                        onValueChange:
                                                          t.onChange,
                                                        value: t.value,
                                                        children: [
                                                          (0, a.jsx)(y.bq, {
                                                            className: "mt-1",
                                                            children: (0,
                                                            a.jsx)(y.yv, {
                                                              placeholder:
                                                                "Select type",
                                                            }),
                                                          }),
                                                          (0, a.jsx)(y.gC, {
                                                            children:
                                                              Object.entries(
                                                                O,
                                                              ).map((e) => {
                                                                let [t, s] = e;
                                                                return (0,
                                                                a.jsx)(
                                                                  y.eb,
                                                                  {
                                                                    value: t,
                                                                    children: s,
                                                                  },
                                                                  t,
                                                                );
                                                              }),
                                                          }),
                                                        ],
                                                      });
                                                    },
                                                  }),
                                                ],
                                              }),
                                              (0, a.jsxs)("div", {
                                                children: [
                                                  (0, a.jsx)(g.J, {
                                                    htmlFor:
                                                      "countryOfOperation",
                                                    className: (0, P.cn)(
                                                      "text-sm",
                                                      _.has(
                                                        "countryOfOperation",
                                                      ) &&
                                                        M.formState.errors
                                                          .countryOfOperation &&
                                                        "text-destructive",
                                                    ),
                                                    children: "Country *",
                                                  }),
                                                  (0, a.jsx)(w.xI, {
                                                    name: "countryOfOperation",
                                                    control: M.control,
                                                    render: (e) => {
                                                      let { field: t } = e;
                                                      return (0, a.jsxs)(y.l6, {
                                                        onValueChange:
                                                          t.onChange,
                                                        value: t.value,
                                                        children: [
                                                          (0, a.jsx)(y.bq, {
                                                            className: (0,
                                                            P.cn)(
                                                              "mt-1",
                                                              _.has(
                                                                "countryOfOperation",
                                                              ) &&
                                                                M.formState
                                                                  .errors
                                                                  .countryOfOperation &&
                                                                "border-destructive",
                                                            ),
                                                            children: (0,
                                                            a.jsx)(y.yv, {
                                                              placeholder:
                                                                "Select country",
                                                            }),
                                                          }),
                                                          (0, a.jsx)(y.gC, {
                                                            className:
                                                              "max-h-60 overflow-y-auto",
                                                            children: z.map(
                                                              (e) =>
                                                                (0, a.jsx)(
                                                                  y.eb,
                                                                  {
                                                                    value: e,
                                                                    children: e,
                                                                  },
                                                                  e,
                                                                ),
                                                            ),
                                                          }),
                                                        ],
                                                      });
                                                    },
                                                  }),
                                                  _.has("countryOfOperation") &&
                                                    M.formState.errors
                                                      .countryOfOperation &&
                                                    (0, a.jsx)("p", {
                                                      className:
                                                        "text-xs text-destructive mt-1",
                                                      children:
                                                        M.formState.errors
                                                          .countryOfOperation
                                                          .message,
                                                    }),
                                                ],
                                              }),
                                              (0, a.jsxs)("div", {
                                                className: "sm:col-span-2",
                                                children: [
                                                  (0, a.jsx)(g.J, {
                                                    htmlFor: "websiteUrl",
                                                    className: "text-sm",
                                                    children: "Website URL",
                                                  }),
                                                  (0, a.jsx)(p.p, {
                                                    id: "websiteUrl",
                                                    placeholder:
                                                      "https://yourwebsite.com",
                                                    className: "mt-1",
                                                    ...M.register("websiteUrl"),
                                                  }),
                                                  M.formState.errors
                                                    .websiteUrl &&
                                                    (0, a.jsx)("p", {
                                                      className:
                                                        "text-xs text-destructive mt-1",
                                                      children:
                                                        M.formState.errors
                                                          .websiteUrl.message,
                                                    }),
                                                ],
                                              }),
                                            ],
                                          }),
                                        ],
                                      });
                                    case 2:
                                      return (0, a.jsxs)("div", {
                                        className: "space-y-6",
                                        children: [
                                          (0, a.jsxs)("div", {
                                            className: "text-center mb-6",
                                            children: [
                                              (0, a.jsx)("h3", {
                                                className:
                                                  "text-xl font-semibold mb-2",
                                                children: "Contact Information",
                                              }),
                                              (0, a.jsx)("p", {
                                                className:
                                                  "text-sm text-muted-foreground",
                                                children:
                                                  "Primary contact details",
                                              }),
                                            ],
                                          }),
                                          (0, a.jsxs)("div", {
                                            className:
                                              "grid gap-4 sm:grid-cols-2",
                                            children: [
                                              (0, a.jsxs)("div", {
                                                children: [
                                                  (0, a.jsx)(g.J, {
                                                    htmlFor: "contactName",
                                                    className: (0, P.cn)(
                                                      "text-sm",
                                                      _.has("contactName") &&
                                                        M.formState.errors
                                                          .contactName &&
                                                        "text-destructive",
                                                    ),
                                                    children: "Contact Name *",
                                                  }),
                                                  (0, a.jsx)(p.p, {
                                                    id: "contactName",
                                                    placeholder: "John Doe",
                                                    ...M.register(
                                                      "contactName",
                                                    ),
                                                    className: (0, P.cn)(
                                                      "mt-1",
                                                      _.has("contactName") &&
                                                        M.formState.errors
                                                          .contactName &&
                                                        "border-destructive",
                                                    ),
                                                  }),
                                                  _.has("contactName") &&
                                                    M.formState.errors
                                                      .contactName &&
                                                    (0, a.jsx)("p", {
                                                      className:
                                                        "text-xs text-destructive mt-1",
                                                      children:
                                                        M.formState.errors
                                                          .contactName.message,
                                                    }),
                                                ],
                                              }),
                                              (0, a.jsxs)("div", {
                                                children: [
                                                  (0, a.jsx)(g.J, {
                                                    htmlFor: "contactPosition",
                                                    className: (0, P.cn)(
                                                      "text-sm",
                                                      _.has(
                                                        "contactPosition",
                                                      ) &&
                                                        M.formState.errors
                                                          .contactPosition &&
                                                        "text-destructive",
                                                    ),
                                                    children: "Position *",
                                                  }),
                                                  (0, a.jsx)(p.p, {
                                                    id: "contactPosition",
                                                    placeholder:
                                                      "Director, Manager, etc.",
                                                    ...M.register(
                                                      "contactPosition",
                                                    ),
                                                    className: (0, P.cn)(
                                                      "mt-1",
                                                      _.has(
                                                        "contactPosition",
                                                      ) &&
                                                        M.formState.errors
                                                          .contactPosition &&
                                                        "border-destructive",
                                                    ),
                                                  }),
                                                  _.has("contactPosition") &&
                                                    M.formState.errors
                                                      .contactPosition &&
                                                    (0, a.jsx)("p", {
                                                      className:
                                                        "text-xs text-destructive mt-1",
                                                      children:
                                                        M.formState.errors
                                                          .contactPosition
                                                          .message,
                                                    }),
                                                ],
                                              }),
                                              (0, a.jsxs)("div", {
                                                children: [
                                                  (0, a.jsx)(g.J, {
                                                    htmlFor: "email",
                                                    className: (0, P.cn)(
                                                      "text-sm",
                                                      _.has("email") &&
                                                        M.formState.errors
                                                          .email &&
                                                        "text-destructive",
                                                    ),
                                                    children: "Email *",
                                                  }),
                                                  (0, a.jsx)(p.p, {
                                                    id: "email",
                                                    type: "email",
                                                    placeholder:
                                                      "contact@yourcompany.com",
                                                    ...M.register("email"),
                                                    className: (0, P.cn)(
                                                      "mt-1",
                                                      _.has("email") &&
                                                        M.formState.errors
                                                          .email &&
                                                        "border-destructive",
                                                    ),
                                                  }),
                                                  _.has("email") &&
                                                    M.formState.errors.email &&
                                                    (0, a.jsx)("p", {
                                                      className:
                                                        "text-xs text-destructive mt-1",
                                                      children:
                                                        M.formState.errors.email
                                                          .message,
                                                    }),
                                                ],
                                              }),
                                              (0, a.jsxs)("div", {
                                                children: [
                                                  (0, a.jsx)(g.J, {
                                                    htmlFor: "phone",
                                                    className: (0, P.cn)(
                                                      "text-sm",
                                                      _.has("phone") &&
                                                        M.formState.errors
                                                          .phone &&
                                                        "text-destructive",
                                                    ),
                                                    children: "Phone *",
                                                  }),
                                                  (0, a.jsx)(w.xI, {
                                                    name: "phone",
                                                    control: M.control,
                                                    render: (e) => {
                                                      let { field: t } = e;
                                                      return (0, a.jsx)(v.L, {
                                                        value: t.value,
                                                        onChange: (e) =>
                                                          t.onChange(e),
                                                        onCountryChange: (
                                                          e,
                                                        ) => {
                                                          (G(e),
                                                            M.setValue(
                                                              "countryCode",
                                                              e.phoneCode,
                                                            ));
                                                        },
                                                        defaultCountry: "IN",
                                                        error: !!(
                                                          _.has("phone") &&
                                                          M.formState.errors
                                                            .phone
                                                        ),
                                                        className: (0, P.cn)(
                                                          "mt-1",
                                                          _.has("phone") &&
                                                            M.formState.errors
                                                              .phone &&
                                                            "border-destructive",
                                                        ),
                                                      });
                                                    },
                                                  }),
                                                  _.has("phone") &&
                                                    M.formState.errors.phone &&
                                                    (0, a.jsx)("p", {
                                                      className:
                                                        "text-xs text-destructive mt-1",
                                                      children:
                                                        M.formState.errors.phone
                                                          .message,
                                                    }),
                                                ],
                                              }),
                                            ],
                                          }),
                                        ],
                                      });
                                    case 3:
                                      return (0, a.jsxs)("div", {
                                        className: "space-y-6",
                                        children: [
                                          (0, a.jsxs)("div", {
                                            className: "text-center mb-6",
                                            children: [
                                              (0, a.jsx)("h3", {
                                                className:
                                                  "text-xl font-semibold mb-2",
                                                children: "Partnership Details",
                                              }),
                                              (0, a.jsx)("p", {
                                                className:
                                                  "text-sm text-muted-foreground",
                                                children:
                                                  "About your students and partnership goals",
                                              }),
                                            ],
                                          }),
                                          (0, a.jsxs)("div", {
                                            className:
                                              "grid gap-4 sm:grid-cols-2",
                                            children: [
                                              (0, a.jsxs)("div", {
                                                children: [
                                                  (0, a.jsx)(g.J, {
                                                    htmlFor: "studentCountB1B2",
                                                    className: (0, P.cn)(
                                                      "text-sm",
                                                      _.has(
                                                        "studentCountB1B2",
                                                      ) &&
                                                        M.formState.errors
                                                          .studentCountB1B2 &&
                                                        "text-destructive",
                                                    ),
                                                    children:
                                                      "Number of B1/B2 Students *",
                                                  }),
                                                  (0, a.jsx)(p.p, {
                                                    id: "studentCountB1B2",
                                                    type: "number",
                                                    placeholder: "50",
                                                    ...M.register(
                                                      "studentCountB1B2",
                                                      { valueAsNumber: !0 },
                                                    ),
                                                    className: (0, P.cn)(
                                                      "mt-1",
                                                      _.has(
                                                        "studentCountB1B2",
                                                      ) &&
                                                        M.formState.errors
                                                          .studentCountB1B2 &&
                                                        "border-destructive",
                                                    ),
                                                  }),
                                                  _.has("studentCountB1B2") &&
                                                    M.formState.errors
                                                      .studentCountB1B2 &&
                                                    (0, a.jsx)("p", {
                                                      className:
                                                        "text-xs text-destructive mt-1",
                                                      children:
                                                        M.formState.errors
                                                          .studentCountB1B2
                                                          .message,
                                                    }),
                                                ],
                                              }),
                                              (0, a.jsxs)("div", {
                                                className: "sm:col-span-2",
                                                children: [
                                                  (0, a.jsx)(g.J, {
                                                    className: "text-sm",
                                                    children:
                                                      "Student Specializations *",
                                                  }),
                                                  (0, a.jsx)("div", {
                                                    className:
                                                      "grid grid-cols-2 sm:grid-cols-4 gap-3 mt-2 p-3 border rounded-md bg-muted/20",
                                                    children: k.map((e) =>
                                                      (0, a.jsxs)(
                                                        "div",
                                                        {
                                                          className:
                                                            "flex items-center space-x-2",
                                                          children: [
                                                            (0, a.jsx)(f.S, {
                                                              id: e,
                                                              checked: M.watch(
                                                                "studentSpecializations",
                                                              ).includes(e),
                                                              onCheckedChange:
                                                                () => q(e),
                                                              className:
                                                                "data-[state=checked]:bg-primary data-[state=checked]:border-primary",
                                                            }),
                                                            (0, a.jsx)(g.J, {
                                                              htmlFor: e,
                                                              className:
                                                                "text-xs cursor-pointer leading-tight",
                                                              children: e,
                                                            }),
                                                          ],
                                                        },
                                                        e,
                                                      ),
                                                    ),
                                                  }),
                                                  M.formState.errors
                                                    .studentSpecializations &&
                                                    (0, a.jsx)("p", {
                                                      className:
                                                        "text-xs text-destructive mt-1",
                                                      children:
                                                        M.formState.errors
                                                          .studentSpecializations
                                                          .message,
                                                    }),
                                                ],
                                              }),
                                              (0, a.jsxs)("div", {
                                                className: "sm:col-span-2",
                                                children: [
                                                  (0, a.jsx)(g.J, {
                                                    htmlFor: "servicesExpected",
                                                    className: (0, P.cn)(
                                                      "text-sm",
                                                      _.has(
                                                        "servicesExpected",
                                                      ) &&
                                                        M.formState.errors
                                                          .servicesExpected &&
                                                        "text-destructive",
                                                    ),
                                                    children:
                                                      "What services do you expect from us? *",
                                                  }),
                                                  (0, a.jsx)(j.T, {
                                                    id: "servicesExpected",
                                                    placeholder:
                                                      "Describe what services you expect (e.g., student placement, training support, documentation help, etc.)",
                                                    rows: 3,
                                                    ...M.register(
                                                      "servicesExpected",
                                                    ),
                                                    className: (0, P.cn)(
                                                      "mt-1 resize-none",
                                                      _.has(
                                                        "servicesExpected",
                                                      ) &&
                                                        M.formState.errors
                                                          .servicesExpected &&
                                                        "border-destructive",
                                                    ),
                                                  }),
                                                  _.has("servicesExpected") &&
                                                    M.formState.errors
                                                      .servicesExpected &&
                                                    (0, a.jsx)("p", {
                                                      className:
                                                        "text-xs text-destructive mt-1",
                                                      children:
                                                        M.formState.errors
                                                          .servicesExpected
                                                          .message,
                                                    }),
                                                ],
                                              }),
                                              (0, a.jsxs)("div", {
                                                className: "sm:col-span-2",
                                                children: [
                                                  (0, a.jsx)(g.J, {
                                                    htmlFor:
                                                      "additionalComments",
                                                    className: "text-sm",
                                                    children:
                                                      "Additional Comments",
                                                  }),
                                                  (0, a.jsx)(j.T, {
                                                    id: "additionalComments",
                                                    placeholder:
                                                      "Any other information you'd like us to know",
                                                    rows: 2,
                                                    className:
                                                      "mt-1 resize-none",
                                                    ...M.register(
                                                      "additionalComments",
                                                    ),
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
                              e,
                            ),
                          }),
                          (0, a.jsxs)("div", {
                            className: "hidden",
                            "aria-hidden": "true",
                            children: [
                              (0, a.jsx)(g.J, {
                                htmlFor: "website",
                                children: "Website",
                              }),
                              (0, a.jsx)(p.p, {
                                id: "website",
                                type: "text",
                                tabIndex: -1,
                                autoComplete: "off",
                                ...M.register("website"),
                              }),
                            ],
                          }),
                          (0, a.jsxs)("div", {
                            className:
                              "flex flex-col sm:flex-row justify-between gap-4 pt-8 border-t",
                            children: [
                              (0, a.jsxs)(x.$, {
                                type: "button",
                                variant: "outline",
                                onClick: () => {
                                  t((e) => Math.max(e - 1, 1));
                                },
                                disabled: 1 === e,
                                className:
                                  "flex items-center justify-center gap-2 h-12 px-6 text-base font-medium order-2 sm:order-1",
                                children: [
                                  (0, a.jsx)(d.A, { className: "w-5 h-5" }),
                                  "Back",
                                ],
                              }),
                              e < E.length
                                ? (0, a.jsxs)(x.$, {
                                    type: "button",
                                    onClick: R,
                                    className:
                                      "flex items-center justify-center gap-2 h-12 px-8 text-base font-medium bg-primary hover:bg-primary/90 order-1 sm:order-2",
                                    children: [
                                      "Continue",
                                      (0, a.jsx)(m.A, { className: "w-5 h-5" }),
                                    ],
                                  })
                                : (0, a.jsx)(x.$, {
                                    type: "button",
                                    onClick: async () => {
                                      (Y(
                                        new Set(
                                          Object.keys(
                                            M.formState.defaultValues,
                                          ),
                                        ),
                                      ),
                                        (await M.trigger()) &&
                                          (await M.handleSubmit(W)()));
                                    },
                                    disabled: s,
                                    className:
                                      "flex items-center justify-center gap-2 h-12 px-8 text-base font-medium bg-primary hover:bg-primary/90 disabled:opacity-50 order-1 sm:order-2",
                                    children: s
                                      ? (0, a.jsxs)(a.Fragment, {
                                          children: [
                                            (0, a.jsx)(u.A, {
                                              className: "w-5 h-5 animate-spin",
                                            }),
                                            "Submitting...",
                                          ],
                                        })
                                      : (0, a.jsxs)(a.Fragment, {
                                          children: [
                                            "Submit Application",
                                            (0, a.jsx)(c.A, {
                                              className: "w-5 h-5",
                                            }),
                                          ],
                                        }),
                                  }),
                            ],
                          }),
                        ],
                      }),
                    ],
                  }),
                }),
              ],
            });
      }
    },
    70461: (e, t, s) => {
      (Promise.resolve().then(s.bind(s, 83738)),
        Promise.resolve().then(s.bind(s, 56047)),
        Promise.resolve().then(s.bind(s, 45326)),
        Promise.resolve().then(s.bind(s, 14207)));
    },
    83738: (e, t, s) => {
      "use strict";
      s.d(t, { PartnerBenefits: () => p });
      var a = s(70207),
        r = s(80187),
        n = s(61216),
        i = s(33482),
        o = s(5101),
        c = s(80268),
        l = s(82164),
        d = s(79024),
        m = s(84308),
        u = s(82110);
      let h = [
          {
            icon: i.A,
            title: "Revenue Sharing",
            description:
              "Earn competitive commissions for every successful student placement with transparent fee structure.",
            color: "text-secondary bg-secondary/10",
          },
          {
            icon: o.A,
            title: "Quality Opportunities",
            description:
              "Connect students with vetted German companies offering genuine Ausbildung positions.",
            color: "text-primary bg-primary/10",
          },
          {
            icon: c.A,
            title: "End-to-End Support",
            description:
              "Complete placement process support from application to visa assistance for your students.",
            color: "text-primary bg-primary/10",
          },
          {
            icon: l.A,
            title: "Partner Certification",
            description:
              "Become a certified GoAusbildung partner with official recognition and enhanced credibility.",
            color: "text-primary bg-primary/10",
          },
          {
            icon: d.A,
            title: "Proven Success",
            description:
              "Partner with a platform that has successfully placed 500+ students with 95% success rate.",
            color: "text-secondary bg-secondary/10",
          },
          {
            icon: m.A,
            title: "Dedicated Manager",
            description:
              "Each partner gets a dedicated account manager for personalized support and communication.",
            color: "text-secondary bg-secondary/10",
          },
        ],
        x = (e) => {
          let { icon: t, title: s, description: n, color: i } = e;
          return (0, a.jsxs)(r.Zp, {
            className:
              "text-center p-6 md:p-8 border-transparent hover:shadow-lg hover:border-border/20 transition-all duration-300 bg-background",
            children: [
              (0, a.jsx)("div", {
                className: (0, u.cn)(
                  "w-12 h-12 rounded-full flex items-center justify-center mx-auto mb-5",
                  i,
                ),
                children: (0, a.jsx)(t, { className: "h-6 w-6" }),
              }),
              (0, a.jsx)("h3", {
                className: "text-xl font-semibold mb-3",
                children: s,
              }),
              (0, a.jsx)("p", {
                className: "text-muted-foreground text-sm leading-relaxed",
                children: n,
              }),
            ],
          });
        };
      function p() {
        return (0, a.jsx)("section", {
          id: "partner-benefits",
          className: "py-16 md:py-24 bg-muted/20",
          children: (0, a.jsxs)("div", {
            className: "container px-4 md:px-6",
            children: [
              (0, a.jsx)(n.X, {
                title: "Why Partner with GoAusbildung?",
                description:
                  "Join our network of successful education partners helping international students achieve their German Ausbildung goals.",
                level: 2,
              }),
              (0, a.jsx)("div", {
                className:
                  "grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 md:gap-8",
                children: h.map((e, t) =>
                  (0, a.jsx)(
                    x,
                    {
                      icon: e.icon,
                      title: e.title,
                      description: e.description,
                      color: e.color,
                    },
                    e.title,
                  ),
                ),
              }),
            ],
          }),
        });
      }
    },
  },
  (e) => {
    var t = (t) => e((e.s = t));
    (e.O(0, [46593, 36209, 84121, 72076, 77358], () => t(70461)),
      (_N_E = e.O()));
  },
]);
