(self.webpackChunk_N_E = self.webpackChunk_N_E || []).push([
  [46150],
  {
    24998: (e, s, a) => {
      Promise.resolve().then(a.bind(a, 98747));
    },
    98747: (e, s, a) => {
      "use strict";
      (a.r(s), a.d(s, { default: () => k }));
      var r = a(70207),
        t = a(87223),
        l = a(18051),
        i = a(10542),
        n = a.n(i),
        c = a(31159),
        d = a(97020),
        o = a(10299),
        m = a(17802),
        u = a(39441),
        x = a(80187),
        h = a(44649),
        p = a(95941),
        g = a(14207),
        j = a(85177),
        f = a(82110),
        b = a(4286);
      let N = {
        name: "Azubi",
        description:
          "Your gateway to German Ausbildung opportunities - connecting international students with vocational training in Germany.",
        url: "https://azubi.ma",
        ogImage: a(78809)._l.OG_IMAGE,
        links: {
          facebook:
            "https://www.facebook.com/people/Azubi/61583863540385/",
          instagram: "https://www.instagram.com/Azubi.global/",
          linkedin: "https://www.linkedin.com/company/Azubi/",
          twitter: "https://x.com/Azubi",
          youtube: "https://www.youtube.com/@Azubi",
          github: "https://github.com/udaysy007/Azubi",
          pinterest: "https://pinterest.com/Azubi",
        },
      };
      function v(e) {
        return {
          "@context": "https://schema.org",
          "@type": "BreadcrumbList",
          itemListElement: e.map((e, s) => ({
            "@type": "ListItem",
            position: s + 1,
            name: e.name,
            item: e.url,
          })),
        };
      }
      var y = a(54573),
        w = a(50341);
      function _(e) {
        let { items: s, className: a } = e,
          t = v(
            s.map((e) => ({
              name: e.label,
              url: e.href.startsWith("http")
                ? e.href
                : "https://azubi.ma".concat(
                    "/" === e.href ? "" : e.href,
                  ),
            })),
          );
        return (0, r.jsxs)(r.Fragment, {
          children: [
            (0, r.jsx)(b.default, {
              type: "application/ld+json",
              dangerouslySetInnerHTML: { __html: JSON.stringify(t) },
            }),
            (0, r.jsx)("nav", {
              className: (0, f.cn)("flex", a),
              "aria-label": "Breadcrumb",
              children: (0, r.jsxs)("ol", {
                className:
                  "inline-flex items-center space-x-1 text-sm text-muted-foreground flex-wrap",
                children: [
                  (0, r.jsx)("li", {
                    className: "inline-flex items-center",
                    children: (0, r.jsxs)(n(), {
                      href: "/",
                      className:
                        "inline-flex items-center hover:text-primary transition-colors",
                      children: [
                        (0, r.jsx)(y.A, { className: "h-4 w-4" }),
                        (0, r.jsx)("span", {
                          className: "sr-only",
                          children: "Home",
                        }),
                      ],
                    }),
                  }),
                  s.map((e, s) =>
                    (0, r.jsxs)(
                      "li",
                      {
                        className: "inline-flex items-center",
                        children: [
                          (0, r.jsx)(w.A, {
                            className: "mx-1 h-4 w-4 text-muted-foreground/50",
                            "aria-hidden": "true",
                          }),
                          e.isCurrentPage
                            ? (0, r.jsx)("span", {
                                className: "text-foreground font-medium",
                                "aria-current": "page",
                                children: e.label,
                              })
                            : (0, r.jsx)(n(), {
                                href: e.href,
                                className:
                                  "hover:text-primary transition-colors",
                                children: e.label,
                              }),
                        ],
                      },
                      s,
                    ),
                  ),
                ],
              }),
            }),
          ],
        });
      }
      let T = (e) => {
        let { name: s, className: a } = e;
        if (!s) return null;
        let t = o[s];
        return t ? (0, r.jsx)(t, { className: a }) : null;
      };
      function k() {
        var e, s, a, i, o, y, w;
        let k = (0, l.useParams)().slug,
          [C, S] = (0, t.useState)(null),
          [P, A] = (0, t.useState)(!0),
          [q, E] = (0, t.useState)(null);
        if (
          ((0, t.useEffect)(() => {
            let e = async () => {
              try {
                A(!0);
                let e = await (0, j.A1)(k);
                S(e);
              } catch (e) {
                (console.error("Failed to fetch program data:", e),
                  E(
                    "Failed to load program information. Please try again later.",
                  ));
              } finally {
                A(!1);
              }
            };
            k && e();
          }, [k]),
          P)
        )
          return (0, r.jsxs)("div", {
            className:
              "container py-20 flex flex-col items-center justify-center",
            children: [
              (0, r.jsx)(c.A, {
                className: "h-10 w-10 animate-spin text-primary mb-4",
              }),
              (0, r.jsx)("p", {
                className: "text-lg",
                children: "Loading program information...",
              }),
            ],
          });
        if (q || !C)
          return (0, r.jsxs)("div", {
            className: "container py-20 text-center",
            children: [
              (0, r.jsx)("h2", {
                className: "text-2xl font-bold mb-4",
                children: q || "Program not found",
              }),
              (0, r.jsx)("p", {
                className: "mb-6 text-muted-foreground",
                children:
                  "We couldn't find the program you're looking for. Please try again or explore other programs.",
              }),
              (0, r.jsx)(n(), {
                href: "/sectors",
                children: (0, r.jsxs)(u.$, {
                  children: [
                    (0, r.jsx)(d.A, { className: "mr-2 h-4 w-4" }),
                    "Back to Sectors",
                  ],
                }),
              }),
            ],
          });
        let O = C.requirements.reduce(
            (e, s) => (
              e[s.category] || (e[s.category] = []),
              e[s.category].push(s),
              e
            ),
            {},
          ),
          G = C.benefits.reduce(
            (e, s) => (
              e[s.category] || (e[s.category] = []),
              e[s.category].push(s),
              e
            ),
            {},
          ),
          L = C.skills.reduce(
            (e, s) => (
              e[s.category] || (e[s.category] = []),
              e[s.category].push(s),
              e
            ),
            {},
          ),
          I = C.faqs.reduce((e, s) => {
            let a = s.category || "general";
            return (e[a] || (e[a] = []), e[s.category || "general"].push(s), e);
          }, {}),
          B = v([
            { name: "Home", url: "https://azubi.ma" },
            { name: "Sectors", url: "https://azubi.ma/sectors" },
            {
              name:
                (null === (e = C.sectors) || void 0 === e ? void 0 : e.name) ||
                "Sector",
              url: "https://azubi.ma/sectors/".concat(
                (null === (s = C.sectors) || void 0 === s ? void 0 : s.slug) ||
                  "",
              ),
            },
            {
              name: C.name,
              url: "https://azubi.ma/programs/".concat(C.slug),
            },
          ]),
          F = C.requirements.map((e) => e.title),
          M = C.skills.map((e) => "".concat(e.name, " (").concat(e.level, ")")),
          R = (function (e) {
            let {
              name: s,
              germanName: a,
              description: r,
              duration: t,
              stipendRange: l,
              sectorName: i,
              url: n,
              applicationUrl: c,
              programCode: d,
              requirements: o = [],
              skills: m = [],
              image: u = "".concat(
                N.url,
                "/images/programs/default-program.jpg",
              ),
            } = e;
            return {
              "@context": "https://schema.org",
              "@type": "EducationalOccupationalProgram",
              name: s,
              alternateName: a,
              description: r,
              occupationalCategory: i,
              programType: "Ausbildung (Vocational Training)",
              timeToComplete: t,
              provider: {
                "@type": "Organization",
                name: "German Vocational Training System",
                url: "https://www.bibb.de/en/index.php",
              },
              ...(d && { programCode: d }),
              educationalCredentialAwarded:
                "Vocational qualification certificate",
              trainingSalary: l,
              educationalProgramMode:
                "Dual system (company-based and school-based)",
              applicationStartDate: "Year-round",
              occupationalCredentialAwarded: "Certified skilled worker",
              offers: {
                "@type": "Offer",
                category: "Paid Training",
                availability: "https://schema.org/LimitedAvailability",
              },
              applicationUrl: c || "".concat(N.url, "/application"),
              hasCourse: {
                "@type": "Course",
                courseCode: d || s,
                name: s,
                description: r,
                provider: {
                  "@type": "Organization",
                  name: "German Vocational Schools",
                },
              },
              mainEntityOfPage: n,
              ...(o.length > 0 && {
                competencyRequired: o.map((e) => ({
                  "@type": "DefinedTerm",
                  name: e,
                })),
              }),
              ...(m.length > 0 && {
                skills: m.map((e) => ({ "@type": "DefinedTerm", name: e })),
              }),
              image: u,
            };
          })({
            name: C.name,
            germanName: C.german_name,
            description: C.description,
            duration: C.duration,
            stipendRange: C.stipend_range,
            sectorName:
              (null === (a = C.sectors) || void 0 === a ? void 0 : a.name) ||
              "Vocational Training",
            url: "https://azubi.ma/programs/".concat(C.slug),
            applicationUrl: "https://azubi.ma/application",
            programCode: C.program_code || void 0,
            requirements: F,
            skills: M,
            image: C.featured_image_url || void 0,
          }),
          D = C.faqs.map((e) => ({ question: e.question, answer: e.answer })),
          W =
            D.length > 0
              ? {
                  "@context": "https://schema.org",
                  "@type": "FAQPage",
                  mainEntity: D.map((e) => ({
                    "@type": "Question",
                    name: e.question,
                    acceptedAnswer: { "@type": "Answer", text: e.answer },
                  })),
                }
              : null;
        return (0, r.jsxs)("div", {
          className: "flex flex-col",
          children: [
            (0, r.jsx)(b.default, {
              id: "program-structured-data",
              type: "application/ld+json",
              dangerouslySetInnerHTML: { __html: JSON.stringify(B) },
            }),
            (0, r.jsx)(b.default, {
              id: "program-detail-schema",
              type: "application/ld+json",
              dangerouslySetInnerHTML: { __html: JSON.stringify(R) },
            }),
            W &&
              (0, r.jsx)(b.default, {
                id: "program-faq-schema",
                type: "application/ld+json",
                dangerouslySetInnerHTML: { __html: JSON.stringify(W) },
              }),
            (0, r.jsx)("section", {
              className: "relative bg-muted/30 pt-16 pb-24",
              children: (0, r.jsxs)("div", {
                className: "container mx-auto px-4 md:px-6",
                children: [
                  (0, r.jsx)(_, {
                    items: [
                      { label: "Sectors", href: "/sectors" },
                      {
                        label:
                          (null === (i = C.sectors) || void 0 === i
                            ? void 0
                            : i.name) || "Sector",
                        href: "/sectors/".concat(
                          (null === (o = C.sectors) || void 0 === o
                            ? void 0
                            : o.slug) || "",
                        ),
                      },
                      {
                        label: C.name,
                        href: "/programs/".concat(C.slug),
                        isCurrentPage: !0,
                      },
                    ],
                    className: "mb-6",
                  }),
                  (0, r.jsxs)("div", {
                    className: "grid grid-cols-1 lg:grid-cols-3 gap-8",
                    children: [
                      (0, r.jsxs)("div", {
                        className: "lg:col-span-2",
                        children: [
                          (0, r.jsxs)(m.E, {
                            variant: "outline",
                            className:
                              "mb-4 px-3 py-1 text-sm border-primary/20 bg-background/70",
                            children: [
                              (0, r.jsxs)("span", {
                                className: "text-primary font-medium",
                                children: [
                                  null === (y = C.sectors) || void 0 === y
                                    ? void 0
                                    : y.name,
                                  " Program",
                                ],
                              }),
                              (null === (w = C.sectors) || void 0 === w
                                ? void 0
                                : w.sub_sector) &&
                                (0, r.jsxs)("span", {
                                  className: "ml-2 text-muted-foreground",
                                  children: ["| ", C.sectors.sub_sector],
                                }),
                            ],
                          }),
                          (0, r.jsx)("h1", {
                            className: "text-3xl md:text-4xl font-bold mb-2",
                            children: C.name,
                          }),
                          (0, r.jsx)("p", {
                            className:
                              "text-xl text-muted-foreground mb-6 italic",
                            children: C.german_name,
                          }),
                          C.program_code &&
                            (0, r.jsxs)("p", {
                              className: "text-sm text-muted-foreground mb-2",
                              children: ["Program Code: ", C.program_code],
                            }),
                          (0, r.jsx)("p", {
                            className: "text-lg mb-8",
                            children: C.description,
                          }),
                          (0, r.jsxs)("div", {
                            className:
                              "grid grid-cols-2 sm:grid-cols-4 gap-4 mb-6",
                            children: [
                              (0, r.jsxs)("div", {
                                className:
                                  "bg-background rounded-lg p-4 border",
                                children: [
                                  (0, r.jsx)("p", {
                                    className:
                                      "text-sm text-muted-foreground mb-1",
                                    children: "Duration",
                                  }),
                                  (0, r.jsx)("p", {
                                    className: "font-semibold",
                                    children: C.duration,
                                  }),
                                ],
                              }),
                              (0, r.jsxs)("div", {
                                className:
                                  "bg-background rounded-lg p-4 border",
                                children: [
                                  (0, r.jsx)("p", {
                                    className:
                                      "text-sm text-muted-foreground mb-1",
                                    children: "Stipend",
                                  }),
                                  (0, r.jsx)("p", {
                                    className: "font-semibold",
                                    children: C.stipend_range,
                                  }),
                                ],
                              }),
                              (0, r.jsxs)("div", {
                                className:
                                  "bg-background rounded-lg p-4 border",
                                children: [
                                  (0, r.jsx)("p", {
                                    className:
                                      "text-sm text-muted-foreground mb-1",
                                    children: "Theory",
                                  }),
                                  (0, r.jsxs)("p", {
                                    className: "font-semibold",
                                    children: [
                                      C.theoretical_training_percentage,
                                      "%",
                                    ],
                                  }),
                                ],
                              }),
                              (0, r.jsxs)("div", {
                                className:
                                  "bg-background rounded-lg p-4 border",
                                children: [
                                  (0, r.jsx)("p", {
                                    className:
                                      "text-sm text-muted-foreground mb-1",
                                    children: "Practical",
                                  }),
                                  (0, r.jsxs)("p", {
                                    className: "font-semibold",
                                    children: [
                                      C.practical_training_percentage,
                                      "%",
                                    ],
                                  }),
                                ],
                              }),
                            ],
                          }),
                          (C.demand_rating ||
                            C.complexity_rating ||
                            C.popularity_rating) &&
                            (0, r.jsxs)("div", {
                              className:
                                "bg-background rounded-lg p-6 border mb-6",
                              children: [
                                (0, r.jsx)("h3", {
                                  className: "text-lg font-semibold mb-4",
                                  children: "Program Ratings",
                                }),
                                (0, r.jsxs)("div", {
                                  className: "grid grid-cols-3 gap-4",
                                  children: [
                                    C.demand_rating &&
                                      (0, r.jsxs)("div", {
                                        children: [
                                          (0, r.jsx)("p", {
                                            className:
                                              "text-sm text-muted-foreground mb-1",
                                            children: "Demand",
                                          }),
                                          (0, r.jsx)("div", {
                                            className: "flex",
                                            children: [
                                              void 0,
                                              void 0,
                                              void 0,
                                              void 0,
                                              void 0,
                                            ].map((e, s) =>
                                              (0, r.jsx)(
                                                T,
                                                {
                                                  name: "Star",
                                                  className: "h-5 w-5 ".concat(
                                                    s < C.demand_rating
                                                      ? "text-yellow-500"
                                                      : "text-muted",
                                                  ),
                                                },
                                                s,
                                              ),
                                            ),
                                          }),
                                        ],
                                      }),
                                    C.complexity_rating &&
                                      (0, r.jsxs)("div", {
                                        children: [
                                          (0, r.jsx)("p", {
                                            className:
                                              "text-sm text-muted-foreground mb-1",
                                            children: "Complexity",
                                          }),
                                          (0, r.jsx)("div", {
                                            className: "flex",
                                            children: [
                                              void 0,
                                              void 0,
                                              void 0,
                                              void 0,
                                              void 0,
                                            ].map((e, s) =>
                                              (0, r.jsx)(
                                                T,
                                                {
                                                  name: "Zap",
                                                  className: "h-5 w-5 ".concat(
                                                    s < C.complexity_rating
                                                      ? "text-primary"
                                                      : "text-muted",
                                                  ),
                                                },
                                                s,
                                              ),
                                            ),
                                          }),
                                        ],
                                      }),
                                    C.popularity_rating &&
                                      (0, r.jsxs)("div", {
                                        children: [
                                          (0, r.jsx)("p", {
                                            className:
                                              "text-sm text-muted-foreground mb-1",
                                            children: "Popularity",
                                          }),
                                          (0, r.jsx)("div", {
                                            className: "flex",
                                            children: [
                                              void 0,
                                              void 0,
                                              void 0,
                                              void 0,
                                              void 0,
                                            ].map((e, s) =>
                                              (0, r.jsx)(
                                                T,
                                                {
                                                  name: "Users",
                                                  className: "h-5 w-5 ".concat(
                                                    s < C.popularity_rating
                                                      ? "text-primary"
                                                      : "text-muted",
                                                  ),
                                                },
                                                s,
                                              ),
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
                      (0, r.jsx)("div", {
                        className: "lg:col-span-1",
                        children: (0, r.jsx)(x.Zp, {
                          children: (0, r.jsxs)(x.Wu, {
                            className: "p-6",
                            children: [
                              (0, r.jsx)("h3", {
                                className: "text-lg font-semibold mb-4",
                                children: "Program Requirements",
                              }),
                              (0, r.jsxs)("ul", {
                                className: "space-y-2",
                                children: [
                                  (0, r.jsxs)("li", {
                                    className: "flex items-start gap-2",
                                    children: [
                                      (0, r.jsx)(T, {
                                        name: "GraduationCap",
                                        className:
                                          "h-5 w-5 text-primary shrink-0 mt-0.5",
                                      }),
                                      (0, r.jsxs)("div", {
                                        children: [
                                          (0, r.jsx)("span", {
                                            className: "font-medium",
                                            children: "Education:",
                                          }),
                                          " ",
                                          (0, r.jsx)("span", {
                                            className: "text-muted-foreground",
                                            children: C.education_requirement,
                                          }),
                                        ],
                                      }),
                                    ],
                                  }),
                                  (0, r.jsxs)("li", {
                                    className: "flex items-start gap-2",
                                    children: [
                                      (0, r.jsx)(T, {
                                        name: "Languages",
                                        className:
                                          "h-5 w-5 text-primary shrink-0 mt-0.5",
                                      }),
                                      (0, r.jsxs)("div", {
                                        children: [
                                          (0, r.jsx)("span", {
                                            className: "font-medium",
                                            children: "Language:",
                                          }),
                                          " ",
                                          (0, r.jsx)("span", {
                                            className: "text-muted-foreground",
                                            children: C.language_requirement,
                                          }),
                                        ],
                                      }),
                                    ],
                                  }),
                                  C.international_friendly &&
                                    (0, r.jsxs)("li", {
                                      className: "flex items-start gap-2",
                                      children: [
                                        (0, r.jsx)(T, {
                                          name: "Globe",
                                          className:
                                            "h-5 w-5 text-green-500 shrink-0 mt-0.5",
                                        }),
                                        (0, r.jsx)("div", {
                                          children: (0, r.jsx)("span", {
                                            className:
                                              "font-medium text-green-600",
                                            children: "International-Friendly",
                                          }),
                                        }),
                                      ],
                                    }),
                                ],
                              }),
                            ],
                          }),
                        }),
                      }),
                    ],
                  }),
                ],
              }),
            }),
            (0, r.jsx)("section", {
              className: "py-16",
              children: (0, r.jsx)("div", {
                className: "container mx-auto px-4 md:px-6",
                children: (0, r.jsxs)(p.Tabs, {
                  defaultValue: "overview",
                  className: "w-full",
                  children: [
                    (0, r.jsxs)(p.TabsList, {
                      className: "flex w-full mb-8 overflow-x-auto",
                      children: [
                        (0, r.jsx)(p.TabsTrigger, {
                          value: "overview",
                          children: "Overview",
                        }),
                        (0, r.jsx)(p.TabsTrigger, {
                          value: "requirements",
                          children: "Requirements",
                        }),
                        (0, r.jsx)(p.TabsTrigger, {
                          value: "benefits",
                          children: "Benefits",
                        }),
                        (0, r.jsx)(p.TabsTrigger, {
                          value: "curriculum",
                          children: "Curriculum",
                        }),
                        (0, r.jsx)(p.TabsTrigger, {
                          value: "faqs",
                          children: "FAQs",
                        }),
                      ],
                    }),
                    (0, r.jsxs)(p.TabsContent, {
                      value: "overview",
                      className: "space-y-8",
                      children: [
                        C.detailed_description &&
                          (0, r.jsxs)("div", {
                            children: [
                              (0, r.jsx)("h2", {
                                className: "text-2xl font-semibold mb-4",
                                children: "Program Description",
                              }),
                              (0, r.jsx)("p", {
                                className: "text-muted-foreground mb-6",
                                children: C.detailed_description,
                              }),
                            ],
                          }),
                        (0, r.jsxs)("div", {
                          children: [
                            (0, r.jsx)("h2", {
                              className: "text-2xl font-semibold mb-4",
                              children: "Skills You'll Gain",
                            }),
                            (0, r.jsx)("div", {
                              className:
                                "grid grid-cols-1 md:grid-cols-2 gap-6",
                              children: Object.entries(L).map((e) => {
                                let [s, a] = e;
                                return (0, r.jsx)(
                                  x.Zp,
                                  {
                                    className: "overflow-hidden",
                                    children: (0, r.jsxs)(x.Wu, {
                                      className: "p-6",
                                      children: [
                                        (0, r.jsxs)("h3", {
                                          className:
                                            "text-lg font-semibold capitalize mb-4",
                                          children: [s, " Skills"],
                                        }),
                                        (0, r.jsx)("ul", {
                                          className: "space-y-4",
                                          children: a.map((e) =>
                                            (0, r.jsxs)(
                                              "li",
                                              {
                                                className: "flex flex-col",
                                                children: [
                                                  (0, r.jsxs)("div", {
                                                    className:
                                                      "flex items-center justify-between",
                                                    children: [
                                                      (0, r.jsx)("span", {
                                                        className:
                                                          "font-medium",
                                                        children: e.name,
                                                      }),
                                                      (0, r.jsx)(m.E, {
                                                        variant:
                                                          "Advanced" === e.level
                                                            ? "default"
                                                            : "Intermediate" ===
                                                                e.level
                                                              ? "secondary"
                                                              : "outline",
                                                        children: e.level,
                                                      }),
                                                    ],
                                                  }),
                                                  e.description &&
                                                    (0, r.jsx)("p", {
                                                      className:
                                                        "text-sm text-muted-foreground mt-1",
                                                      children: e.description,
                                                    }),
                                                ],
                                              },
                                              e.id,
                                            ),
                                          ),
                                        }),
                                      ],
                                    }),
                                  },
                                  s,
                                );
                              }),
                            }),
                          ],
                        }),
                        (0, r.jsxs)("div", {
                          children: [
                            (0, r.jsx)("h2", {
                              className: "text-2xl font-semibold mb-4",
                              children: "Training Structure",
                            }),
                            (0, r.jsxs)("div", {
                              className:
                                "grid grid-cols-1 md:grid-cols-2 gap-6",
                              children: [
                                (0, r.jsxs)("div", {
                                  className:
                                    "bg-muted/30 border rounded-lg p-6",
                                  children: [
                                    (0, r.jsxs)("h3", {
                                      className: "text-lg font-semibold mb-3",
                                      children: [
                                        "Theoretical Training (",
                                        C.theoretical_training_percentage,
                                        "%)",
                                      ],
                                    }),
                                    (0, r.jsx)("p", {
                                      className: "text-muted-foreground",
                                      children:
                                        "The theoretical portion of your training takes place at vocational schools (Berufsschulen) where you'll learn the fundamental concepts, theories, and knowledge needed for your profession.",
                                    }),
                                  ],
                                }),
                                (0, r.jsxs)("div", {
                                  className:
                                    "bg-muted/30 border rounded-lg p-6",
                                  children: [
                                    (0, r.jsxs)("h3", {
                                      className: "text-lg font-semibold mb-3",
                                      children: [
                                        "Practical Training (",
                                        C.practical_training_percentage,
                                        "%)",
                                      ],
                                    }),
                                    (0, r.jsx)("p", {
                                      className: "text-muted-foreground",
                                      children:
                                        "The practical component takes place at your training company, where you'll apply what you've learned in real work situations under the guidance of experienced professionals.",
                                    }),
                                  ],
                                }),
                              ],
                            }),
                          ],
                        }),
                      ],
                    }),
                    (0, r.jsx)(p.TabsContent, {
                      value: "requirements",
                      className: "space-y-8",
                      children: (0, r.jsxs)("div", {
                        children: [
                          (0, r.jsx)("h2", {
                            className: "text-2xl font-semibold mb-6",
                            children: "Program Requirements",
                          }),
                          (0, r.jsx)("div", {
                            className: "space-y-8",
                            children: Object.entries(O).map((e) => {
                              let [s, a] = e;
                              return (0, r.jsxs)(
                                "div",
                                {
                                  className: "border rounded-lg p-6",
                                  children: [
                                    (0, r.jsxs)("h3", {
                                      className:
                                        "text-lg font-semibold capitalize mb-4",
                                      children: [s, " Requirements"],
                                    }),
                                    (0, r.jsx)("ul", {
                                      className: "space-y-4",
                                      children: a.map((e) =>
                                        (0, r.jsxs)(
                                          "li",
                                          {
                                            className: "flex items-start gap-3",
                                            children: [
                                              (0, r.jsx)("div", {
                                                className: (0, f.cn)(
                                                  "h-6 w-6 rounded-full flex items-center justify-center shrink-0 mt-0.5",
                                                  e.is_mandatory
                                                    ? "bg-primary text-primary-foreground"
                                                    : "bg-muted text-muted-foreground",
                                                ),
                                                children: e.is_mandatory
                                                  ? (0, r.jsx)(T, {
                                                      name: "Check",
                                                      className: "h-4 w-4",
                                                    })
                                                  : (0, r.jsx)(T, {
                                                      name: "Plus",
                                                      className: "h-4 w-4",
                                                    }),
                                              }),
                                              (0, r.jsxs)("div", {
                                                children: [
                                                  (0, r.jsx)("h4", {
                                                    className: "font-medium",
                                                    children: e.title,
                                                  }),
                                                  (0, r.jsx)("p", {
                                                    className:
                                                      "text-sm text-muted-foreground mt-1",
                                                    children: e.description,
                                                  }),
                                                  !e.is_mandatory &&
                                                    (0, r.jsx)(m.E, {
                                                      variant: "outline",
                                                      className: "mt-2 text-xs",
                                                      children:
                                                        "Preferred but not mandatory",
                                                    }),
                                                ],
                                              }),
                                            ],
                                          },
                                          e.id,
                                        ),
                                      ),
                                    }),
                                  ],
                                },
                                s,
                              );
                            }),
                          }),
                        ],
                      }),
                    }),
                    (0, r.jsx)(p.TabsContent, {
                      value: "benefits",
                      className: "space-y-8",
                      children: (0, r.jsxs)("div", {
                        children: [
                          (0, r.jsx)("h2", {
                            className: "text-2xl font-semibold mb-6",
                            children: "Program Benefits",
                          }),
                          (0, r.jsx)("div", {
                            className: "grid grid-cols-1 md:grid-cols-2 gap-6",
                            children: Object.entries(G).map((e) => {
                              let [s, a] = e;
                              return (0, r.jsx)(
                                x.Zp,
                                {
                                  children: (0, r.jsxs)(x.Wu, {
                                    className: "p-6",
                                    children: [
                                      (0, r.jsxs)("h3", {
                                        className:
                                          "text-lg font-semibold capitalize mb-4",
                                        children: [s, " Benefits"],
                                      }),
                                      (0, r.jsx)("ul", {
                                        className: "space-y-4",
                                        children: a.map((e) =>
                                          (0, r.jsxs)(
                                            "li",
                                            {
                                              className:
                                                "flex items-start gap-3",
                                              children: [
                                                (0, r.jsx)("div", {
                                                  className:
                                                    "w-10 h-10 rounded-full bg-primary/10 flex items-center justify-center shrink-0",
                                                  children: (0, r.jsx)(T, {
                                                    name:
                                                      e.icon_name || "Check",
                                                    className:
                                                      "h-5 w-5 text-primary",
                                                  }),
                                                }),
                                                (0, r.jsxs)("div", {
                                                  children: [
                                                    (0, r.jsx)("h4", {
                                                      className: "font-medium",
                                                      children: e.title,
                                                    }),
                                                    (0, r.jsx)("p", {
                                                      className:
                                                        "text-sm text-muted-foreground mt-1",
                                                      children: e.description,
                                                    }),
                                                  ],
                                                }),
                                              ],
                                            },
                                            e.id,
                                          ),
                                        ),
                                      }),
                                    ],
                                  }),
                                },
                                s,
                              );
                            }),
                          }),
                        ],
                      }),
                    }),
                    (0, r.jsx)(p.TabsContent, {
                      value: "curriculum",
                      className: "space-y-8",
                      children: (0, r.jsxs)("div", {
                        children: [
                          (0, r.jsx)("h2", {
                            className: "text-2xl font-semibold mb-6",
                            children: "Program Curriculum",
                          }),
                          C.curriculum && C.curriculum.length > 0
                            ? (0, r.jsx)("div", {
                                className: "space-y-8",
                                children: [
                                  ...new Set(C.curriculum.map((e) => e.year)),
                                ]
                                  .sort()
                                  .map((e) =>
                                    (0, r.jsxs)(
                                      "div",
                                      {
                                        className:
                                          "border rounded-lg overflow-hidden",
                                        children: [
                                          (0, r.jsx)("div", {
                                            className:
                                              "bg-muted/30 px-6 py-4 border-b",
                                            children: (0, r.jsxs)("h3", {
                                              className:
                                                "text-lg font-semibold",
                                              children: ["Year ", e],
                                            }),
                                          }),
                                          (0, r.jsxs)("div", {
                                            className: "p-4",
                                            children: [
                                              C.curriculum &&
                                                [
                                                  ...new Set(
                                                    C.curriculum
                                                      .filter(
                                                        (s) => s.year === e,
                                                      )
                                                      .map((e) => e.semester),
                                                  ),
                                                ]
                                                  .filter(Boolean)
                                                  .sort()
                                                  .map((s) =>
                                                    (0, r.jsxs)(
                                                      "div",
                                                      {
                                                        className:
                                                          "mb-6 last:mb-0",
                                                        children: [
                                                          s &&
                                                            (0, r.jsxs)("h4", {
                                                              className:
                                                                "font-medium mb-3",
                                                              children: [
                                                                "Semester ",
                                                                s,
                                                              ],
                                                            }),
                                                          (0, r.jsx)("div", {
                                                            className:
                                                              "space-y-4",
                                                            children:
                                                              C.curriculum &&
                                                              C.curriculum
                                                                .filter(
                                                                  (a) =>
                                                                    a.year ===
                                                                      e &&
                                                                    a.semester ===
                                                                      s,
                                                                )
                                                                .sort(
                                                                  (e, s) =>
                                                                    e.order_index -
                                                                    s.order_index,
                                                                )
                                                                .map((e) =>
                                                                  (0, r.jsx)(
                                                                    x.Zp,
                                                                    {
                                                                      children:
                                                                        (0,
                                                                        r.jsx)(
                                                                          x.Wu,
                                                                          {
                                                                            className:
                                                                              "p-4",
                                                                            children:
                                                                              (0,
                                                                              r.jsxs)(
                                                                                "div",
                                                                                {
                                                                                  className:
                                                                                    "flex items-start justify-between",
                                                                                  children:
                                                                                    [
                                                                                      (0,
                                                                                      r.jsxs)(
                                                                                        "div",
                                                                                        {
                                                                                          children:
                                                                                            [
                                                                                              (0,
                                                                                              r.jsx)(
                                                                                                "h5",
                                                                                                {
                                                                                                  className:
                                                                                                    "font-semibold",
                                                                                                  children:
                                                                                                    e.module_name,
                                                                                                },
                                                                                              ),
                                                                                              (0,
                                                                                              r.jsx)(
                                                                                                "p",
                                                                                                {
                                                                                                  className:
                                                                                                    "text-sm text-muted-foreground mt-1",
                                                                                                  children:
                                                                                                    e.module_description,
                                                                                                },
                                                                                              ),
                                                                                              (0,
                                                                                              r.jsxs)(
                                                                                                "div",
                                                                                                {
                                                                                                  className:
                                                                                                    "flex items-center gap-4 mt-3 text-sm",
                                                                                                  children:
                                                                                                    [
                                                                                                      e.hours &&
                                                                                                        (0,
                                                                                                        r.jsxs)(
                                                                                                          "span",
                                                                                                          {
                                                                                                            className:
                                                                                                              "flex items-center",
                                                                                                            children:
                                                                                                              [
                                                                                                                (0,
                                                                                                                r.jsx)(
                                                                                                                  T,
                                                                                                                  {
                                                                                                                    name: "Clock",
                                                                                                                    className:
                                                                                                                      "h-4 w-4 mr-1 text-muted-foreground",
                                                                                                                  },
                                                                                                                ),
                                                                                                                e.hours,
                                                                                                                " hours",
                                                                                                              ],
                                                                                                          },
                                                                                                        ),
                                                                                                      e.learning_location &&
                                                                                                        (0,
                                                                                                        r.jsxs)(
                                                                                                          "span",
                                                                                                          {
                                                                                                            className:
                                                                                                              "flex items-center",
                                                                                                            children:
                                                                                                              [
                                                                                                                (0,
                                                                                                                r.jsx)(
                                                                                                                  T,
                                                                                                                  {
                                                                                                                    name: "MapPin",
                                                                                                                    className:
                                                                                                                      "h-4 w-4 mr-1 text-muted-foreground",
                                                                                                                  },
                                                                                                                ),
                                                                                                                e.learning_location,
                                                                                                              ],
                                                                                                          },
                                                                                                        ),
                                                                                                    ],
                                                                                                },
                                                                                              ),
                                                                                            ],
                                                                                        },
                                                                                      ),
                                                                                      e.is_core
                                                                                        ? (0,
                                                                                          r.jsx)(
                                                                                            m.E,
                                                                                            {
                                                                                              children:
                                                                                                "Core",
                                                                                            },
                                                                                          )
                                                                                        : (0,
                                                                                          r.jsx)(
                                                                                            m.E,
                                                                                            {
                                                                                              variant:
                                                                                                "outline",
                                                                                              children:
                                                                                                "Elective",
                                                                                            },
                                                                                          ),
                                                                                    ],
                                                                                },
                                                                              ),
                                                                          },
                                                                        ),
                                                                    },
                                                                    e.id,
                                                                  ),
                                                                ),
                                                          }),
                                                        ],
                                                      },
                                                      ""
                                                        .concat(e, "-")
                                                        .concat(s),
                                                    ),
                                                  ),
                                              C.curriculum &&
                                                C.curriculum.filter(
                                                  (s) =>
                                                    s.year === e && !s.semester,
                                                ).length > 0 &&
                                                (0, r.jsx)("div", {
                                                  className: "space-y-4",
                                                  children: C.curriculum
                                                    .filter(
                                                      (s) =>
                                                        s.year === e &&
                                                        !s.semester,
                                                    )
                                                    .sort(
                                                      (e, s) =>
                                                        e.order_index -
                                                        s.order_index,
                                                    )
                                                    .map((e) =>
                                                      (0, r.jsx)(
                                                        x.Zp,
                                                        {
                                                          children: (0, r.jsx)(
                                                            x.Wu,
                                                            {
                                                              className: "p-4",
                                                              children: (0,
                                                              r.jsxs)("div", {
                                                                className:
                                                                  "flex items-start justify-between",
                                                                children: [
                                                                  (0, r.jsxs)(
                                                                    "div",
                                                                    {
                                                                      children:
                                                                        [
                                                                          (0,
                                                                          r.jsx)(
                                                                            "h5",
                                                                            {
                                                                              className:
                                                                                "font-semibold",
                                                                              children:
                                                                                e.module_name,
                                                                            },
                                                                          ),
                                                                          (0,
                                                                          r.jsx)(
                                                                            "p",
                                                                            {
                                                                              className:
                                                                                "text-sm text-muted-foreground mt-1",
                                                                              children:
                                                                                e.module_description,
                                                                            },
                                                                          ),
                                                                          (0,
                                                                          r.jsxs)(
                                                                            "div",
                                                                            {
                                                                              className:
                                                                                "flex items-center gap-4 mt-3 text-sm",
                                                                              children:
                                                                                [
                                                                                  e.hours &&
                                                                                    (0,
                                                                                    r.jsxs)(
                                                                                      "span",
                                                                                      {
                                                                                        className:
                                                                                          "flex items-center",
                                                                                        children:
                                                                                          [
                                                                                            (0,
                                                                                            r.jsx)(
                                                                                              T,
                                                                                              {
                                                                                                name: "Clock",
                                                                                                className:
                                                                                                  "h-4 w-4 mr-1 text-muted-foreground",
                                                                                              },
                                                                                            ),
                                                                                            e.hours,
                                                                                            " hours",
                                                                                          ],
                                                                                      },
                                                                                    ),
                                                                                  e.learning_location &&
                                                                                    (0,
                                                                                    r.jsxs)(
                                                                                      "span",
                                                                                      {
                                                                                        className:
                                                                                          "flex items-center",
                                                                                        children:
                                                                                          [
                                                                                            (0,
                                                                                            r.jsx)(
                                                                                              T,
                                                                                              {
                                                                                                name: "MapPin",
                                                                                                className:
                                                                                                  "h-4 w-4 mr-1 text-muted-foreground",
                                                                                              },
                                                                                            ),
                                                                                            e.learning_location,
                                                                                          ],
                                                                                      },
                                                                                    ),
                                                                                ],
                                                                            },
                                                                          ),
                                                                        ],
                                                                    },
                                                                  ),
                                                                  e.is_core
                                                                    ? (0,
                                                                      r.jsx)(
                                                                        m.E,
                                                                        {
                                                                          children:
                                                                            "Core",
                                                                        },
                                                                      )
                                                                    : (0,
                                                                      r.jsx)(
                                                                        m.E,
                                                                        {
                                                                          variant:
                                                                            "outline",
                                                                          children:
                                                                            "Elective",
                                                                        },
                                                                      ),
                                                                ],
                                                              }),
                                                            },
                                                          ),
                                                        },
                                                        e.id,
                                                      ),
                                                    ),
                                                }),
                                            ],
                                          }),
                                        ],
                                      },
                                      e,
                                    ),
                                  ),
                              })
                            : (0, r.jsxs)("div", {
                                className:
                                  "text-center py-10 bg-muted/20 rounded-lg",
                                children: [
                                  (0, r.jsx)(T, {
                                    name: "FileText",
                                    className:
                                      "h-10 w-10 text-muted-foreground mx-auto mb-3",
                                  }),
                                  (0, r.jsx)("p", {
                                    className: "text-muted-foreground",
                                    children:
                                      "Curriculum details will be available soon.",
                                  }),
                                ],
                              }),
                        ],
                      }),
                    }),
                    (0, r.jsx)(p.TabsContent, {
                      value: "faqs",
                      className: "space-y-8",
                      children: (0, r.jsxs)("div", {
                        children: [
                          (0, r.jsx)("h2", {
                            className: "text-2xl font-semibold mb-6",
                            children: "Frequently Asked Questions",
                          }),
                          (0, r.jsx)("div", {
                            className: "space-y-6",
                            children: Object.entries(I).map((e) => {
                              let [s, a] = e;
                              return (0, r.jsxs)(
                                "div",
                                {
                                  children: [
                                    (0, r.jsxs)("h3", {
                                      className:
                                        "text-lg font-semibold capitalize mb-4",
                                      children: [s, " Questions"],
                                    }),
                                    (0, r.jsx)(h.Accordion, {
                                      type: "single",
                                      collapsible: !0,
                                      className: "w-full",
                                      children: a.map((e, s) =>
                                        (0, r.jsxs)(
                                          h.AccordionItem,
                                          {
                                            value: "faq-".concat(s),
                                            children: [
                                              (0, r.jsx)(h.AccordionTrigger, {
                                                className: "text-left",
                                                children: e.question,
                                              }),
                                              (0, r.jsx)(h.AccordionContent, {
                                                children: (0, r.jsx)("p", {
                                                  className:
                                                    "text-muted-foreground",
                                                  children: e.answer,
                                                }),
                                              }),
                                            ],
                                          },
                                          e.id,
                                        ),
                                      ),
                                    }),
                                  ],
                                },
                                s,
                              );
                            }),
                          }),
                        ],
                      }),
                    }),
                  ],
                }),
              }),
            }),
            (0, r.jsx)(g.CTASection, {
              badge: { text: "Ready to apply?" },
              title: "Begin Your ".concat(C.name, " Training"),
              description:
                "Our advisors will guide you through the application process and help you prepare for a successful career in Germany.",
              action: {
                text: "Start Your Application",
                href: "/application",
                variant: "default",
              },
            }),
          ],
        });
      }
    },
  },
  (e) => {
    var s = (s) => e((e.s = s));
    (e.O(0, [46593, 36209, 84121, 72076, 77358], () => s(24998)),
      (_N_E = e.O()));
  },
]);
