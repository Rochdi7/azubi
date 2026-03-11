(self.webpackChunk_N_E = self.webpackChunk_N_E || []).push([
  [86858],
  {
    61008: (e, s, r) => {
      Promise.resolve().then(r.bind(r, 82640));
    },
    82640: (e, s, r) => {
      "use strict";
      (r.r(s), r.d(s, { default: () => E }));
      var a = r(70207),
        n = r(87223),
        t = r(50018),
        l = r(45795),
        i = r(80187),
        d = r(17802),
        c = r(14207),
        m = r(82110),
        o = r(28131),
        x = r(1701),
        h = r(34379),
        u = r(30478),
        g = r(33482),
        f = r(46031),
        p = r(70005),
        b = r(79650),
        j = r(49055),
        N = r(39441),
        v = r(21402),
        w = r(95889),
        y = r(52141),
        k = r(35121);
      let A = [
          {
            id: 1,
            job: "Pflegefachkraft",
            averageSalary: "3.400€",
            range: "2.800€ - 4.200€",
            experience: "Nach Ausbildung",
            growth: "+8%",
            color: "text-primary bg-primary/10",
            description: "Altenpflege, Krankenpflege, Gesundheitswesen",
          },
          {
            id: 2,
            job: "IT-Systemadministrator",
            averageSalary: "3.800€",
            range: "3.200€ - 4.600€",
            experience: "Nach Ausbildung",
            growth: "+12%",
            color: "text-secondary bg-secondary/10",
            description: "Fachinformatiker, Systemintegration",
          },
          {
            id: 3,
            job: "Bankkaufmann/frau",
            averageSalary: "3.200€",
            range: "2.700€ - 3.900€",
            experience: "Nach Ausbildung",
            growth: "+5%",
            color: "text-primary bg-muted",
            description: "Bankwesen, Finanzdienstleistungen",
          },
          {
            id: 4,
            job: "Mechatroniker",
            averageSalary: "3.600€",
            range: "3.000€ - 4.400€",
            experience: "Nach Ausbildung",
            growth: "+9%",
            color: "text-primary bg-primary/10",
            description: "Maschinenbau, Automatisierung",
          },
          {
            id: 5,
            job: "Erzieher/in",
            averageSalary: "3.100€",
            range: "2.600€ - 3.700€",
            experience: "Nach Ausbildung",
            growth: "+7%",
            color: "text-primary bg-primary/10",
            description: "Kinderbetreuung, P\xe4dagogik",
          },
          {
            id: 6,
            job: "Industriekaufmann/frau",
            averageSalary: "3.300€",
            range: "2.800€ - 4.000€",
            experience: "Nach Ausbildung",
            growth: "+6%",
            color: "text-secondary bg-muted",
            description: "Industrie, Verwaltung, Einkauf",
          },
        ],
        z = [
          {
            title: "Berufserfahrung",
            description:
              "Mit jedem Jahr Berufserfahrung steigt das Gehalt um durchschnittlich 3-5%.",
            icon: o.A,
            color: "text-primary bg-primary/10",
          },
          {
            title: "Bundesland & Region",
            description:
              "In Bayern und Baden-W\xfcrttemberg sind die Geh\xe4lter oft 10-20% h\xf6her als im Osten.",
            icon: x.A,
            color: "text-secondary bg-secondary/10",
          },
          {
            title: "Unternehmensgr\xf6\xdfe",
            description:
              "Gro\xdfe Konzerne zahlen oft 15-30% mehr als kleine und mittelst\xe4ndische Betriebe.",
            icon: h.A,
            color: "text-primary bg-muted",
          },
          {
            title: "Weiterbildung & Qualifikation",
            description:
              "Zus\xe4tzliche Zertifikate und Weiterbildungen k\xf6nnen das Gehalt um 10-25% steigern.",
            icon: u.A,
            color: "text-primary bg-primary/10",
          },
        ],
        B = [
          {
            region: "Bayern",
            multiplier: "115%",
            averageBonus: "+500€",
            topJobs: ["IT", "Maschinenbau", "Finanzwesen"],
          },
          {
            region: "Baden-W\xfcrttemberg",
            multiplier: "112%",
            averageBonus: "+400€",
            topJobs: ["Automotive", "IT", "Ingenieurwesen"],
          },
          {
            region: "Nordrhein-Westfalen",
            multiplier: "105%",
            averageBonus: "+200€",
            topJobs: ["Logistik", "Chemie", "Energie"],
          },
          {
            region: "Berlin",
            multiplier: "98%",
            averageBonus: "+150€",
            topJobs: ["Startups", "Medien", "IT"],
          },
          {
            region: "Sachsen",
            multiplier: "92%",
            averageBonus: "+100€",
            topJobs: ["Maschinenbau", "Elektronik", "Automotive"],
          },
          {
            region: "Mecklenburg-Vorpommern",
            multiplier: "88%",
            averageBonus: "+80€",
            topJobs: ["Tourismus", "Landwirtschaft", "Gesundheit"],
          },
        ],
        D = [
          {
            level: "Azubi (1. Jahr)",
            salary: "515€ - 620€",
            description: "Erstes Ausbildungsjahr",
            icon: "\uD83C\uDF93",
          },
          {
            level: "Azubi (3. Jahr)",
            salary: "610€ - 790€",
            description: "Drittes Ausbildungsjahr",
            icon: "\uD83D\uDCDA",
          },
          {
            level: "Nach Ausbildung",
            salary: "2.400€ - 4.500€",
            description: "Einstiegsgehalt (je nach Beruf)",
            icon: "\uD83D\uDCBC",
          },
          {
            level: "5 Jahre Erfahrung",
            salary: "3.200€ - 5.800€",
            description: "Mit Berufserfahrung",
            icon: "⭐",
          },
          {
            level: "10+ Jahre",
            salary: "4.000€ - 7.500€",
            description: "Senior-Position",
            icon: "\uD83C\uDFC6",
          },
        ];
      function E() {
        let [e, s] = (0, n.useState)("Alle");
        return (0, a.jsxs)("div", {
          className: "flex flex-col overflow-hidden",
          children: [
            (0, a.jsx)("section", {
              className:
                "relative min-h-[60vh] w-full overflow-visible pb-0 bg-background",
              children: (0, a.jsxs)("div", {
                className:
                  "container relative z-10 mx-auto grid min-h-[60vh] grid-cols-1 lg:grid-cols-2 gap-12 items-center px-4 pb-0 pt-16 lg:px-6",
                children: [
                  (0, a.jsxs)("div", {
                    className:
                      "flex flex-col items-center lg:items-start text-center lg:text-left gap-6",
                    children: [
                      (0, a.jsxs)(d.E, {
                        variant: "outline",
                        className:
                          "mb-2 px-4 py-1.5 text-base border-primary/20 bg-background",
                        children: [
                          (0, a.jsx)(g.A, { className: "w-4 h-4 mr-2" }),
                          (0, a.jsx)("span", {
                            className: "text-primary font-medium",
                            children: "Gehaltsvergleich 2026",
                          }),
                        ],
                      }),
                      (0, a.jsxs)("div", {
                        className: "flex flex-col gap-4 max-w-[600px]",
                        children: [
                          (0, a.jsx)(y.D, {
                            level: 1,
                            className: "animate-appear",
                            children: "Ausbildung Gehalt in Deutschland",
                          }),
                          (0, a.jsx)(k.f, {
                            size: "lg",
                            className:
                              "font-medium text-muted-foreground animate-appear opacity-0 [animation-delay:300ms]",
                            children:
                              "Aktuell | Regional | Nach Berufserfahrung",
                          }),
                        ],
                      }),
                      (0, a.jsx)(k.f, {
                        className:
                          "max-w-[600px] text-muted-foreground animate-appear opacity-0 [animation-delay:500ms]",
                        children:
                          "Entdecke Gehaltsinformationen f\xfcr \xfcber 350 Ausbildungsberufe in Deutschland. Vergleiche L\xf6hne nach Region, Berufserfahrung und Unternehmensgr\xf6\xdfe.",
                      }),
                      (0, a.jsxs)("div", {
                        className:
                          "flex flex-col sm:flex-row gap-8 animate-appear opacity-0 [animation-delay:700ms] mt-4",
                        children: [
                          (0, a.jsxs)("div", {
                            className: "text-center lg:text-left",
                            children: [
                              (0, a.jsx)("div", {
                                className:
                                  "text-4xl font-bold text-primary mb-2",
                                children: "350+",
                              }),
                              (0, a.jsx)("div", {
                                className: "text-sm text-muted-foreground",
                                children: "Berufe",
                              }),
                            ],
                          }),
                          (0, a.jsxs)("div", {
                            className: "text-center lg:text-left",
                            children: [
                              (0, a.jsx)("div", {
                                className:
                                  "text-4xl font-bold text-primary mb-2",
                                children: "16",
                              }),
                              (0, a.jsx)("div", {
                                className: "text-sm text-muted-foreground",
                                children: "Bundesl\xe4nder",
                              }),
                            ],
                          }),
                          (0, a.jsxs)("div", {
                            className: "text-center lg:text-left",
                            children: [
                              (0, a.jsx)("div", {
                                className:
                                  "text-4xl font-bold text-primary mb-2",
                                children: "3.200€",
                              }),
                              (0, a.jsx)("div", {
                                className: "text-sm text-muted-foreground",
                                children: "⌀ Einstiegsgehalt",
                              }),
                            ],
                          }),
                        ],
                      }),
                    ],
                  }),
                  (0, a.jsx)("div", {
                    className: "relative w-full max-w-md mx-auto lg:max-w-lg",
                    children: (0, a.jsx)("div", {
                      className: "relative w-64 h-64 mx-auto animate-float",
                      children: (0, a.jsx)(t.default, {
                        src: "/mascot/mascot_celebrating_female.webp",
                        alt: "Mascot celebrating salary success in Ausbildung",
                        fill: !0,
                        className: "object-contain drop-shadow-2xl",
                        priority: !0,
                      }),
                    }),
                  }),
                ],
              }),
            }),
            (0, a.jsx)("section", {
              className: "py-16 md:py-24",
              children: (0, a.jsxs)("div", {
                className: "container px-4 md:px-6",
                children: [
                  (0, a.jsxs)("div", {
                    className: "text-center max-w-2xl mx-auto mb-12",
                    children: [
                      (0, a.jsx)(y.D, {
                        level: 2,
                        className: "mb-4",
                        children: "Beliebteste Ausbildungsberufe & Geh\xe4lter",
                      }),
                      (0, a.jsx)(k.f, {
                        size: "lg",
                        className: "text-muted-foreground",
                        children:
                          "Die gefragtesten Ausbildungsberufe und ihre durchschnittlichen Einstiegsgeh\xe4lter nach der Ausbildung",
                      }),
                    ],
                  }),
                  (0, a.jsx)("div", {
                    className:
                      "grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 md:gap-8",
                    children: A.map((e) =>
                      (0, a.jsxs)(
                        i.Zp,
                        {
                          className:
                            "p-6 border-transparent hover:shadow-lg hover:border-border/20 transition-all duration-300 bg-background",
                          children: [
                            (0, a.jsxs)("div", {
                              className:
                                "flex items-start justify-between mb-4",
                              children: [
                                (0, a.jsx)("div", {
                                  className: (0, m.cn)(
                                    "w-12 h-12 rounded-full flex items-center justify-center",
                                    e.color,
                                  ),
                                  children: (0, a.jsx)(g.A, {
                                    className: "h-6 w-6",
                                  }),
                                }),
                                (0, a.jsxs)(d.E, {
                                  variant: "outline",
                                  className:
                                    "text-xs bg-secondary text-background border-secondary",
                                  children: [e.growth, " Wachstum"],
                                }),
                              ],
                            }),
                            (0, a.jsx)(y.D, {
                              level: 3,
                              className: "mb-2",
                              children: e.job,
                            }),
                            (0, a.jsx)(k.f, {
                              size: "sm",
                              className: "text-muted-foreground mb-4",
                              children: e.description,
                            }),
                            (0, a.jsxs)("div", {
                              className: "space-y-2",
                              children: [
                                (0, a.jsxs)("div", {
                                  className:
                                    "flex justify-between items-center",
                                  children: [
                                    (0, a.jsx)("span", {
                                      className:
                                        "text-sm text-muted-foreground",
                                      children: "Durchschnitt:",
                                    }),
                                    (0, a.jsx)("span", {
                                      className:
                                        "font-bold text-xl text-primary",
                                      children: e.averageSalary,
                                    }),
                                  ],
                                }),
                                (0, a.jsxs)("div", {
                                  className:
                                    "flex justify-between items-center",
                                  children: [
                                    (0, a.jsx)("span", {
                                      className:
                                        "text-sm text-muted-foreground",
                                      children: "Spanne:",
                                    }),
                                    (0, a.jsx)("span", {
                                      className: "text-sm font-medium",
                                      children: e.range,
                                    }),
                                  ],
                                }),
                                (0, a.jsxs)("div", {
                                  className:
                                    "flex justify-between items-center",
                                  children: [
                                    (0, a.jsx)("span", {
                                      className:
                                        "text-sm text-muted-foreground",
                                      children: "Niveau:",
                                    }),
                                    (0, a.jsx)("span", {
                                      className: "text-sm font-medium",
                                      children: e.experience,
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
                  (0, a.jsx)("div", {
                    className: "max-w-2xl mx-auto mt-12",
                    children: (0, a.jsx)(i.Zp, {
                      className: "p-8 bg-muted border-primary/20",
                      children: (0, a.jsxs)("div", {
                        className: "text-center",
                        children: [
                          (0, a.jsx)("div", {
                            className:
                              "w-20 h-20 rounded-full flex items-center justify-center mx-auto mb-6 text-primary bg-primary/10",
                            children: (0, a.jsx)(l.eFy, {
                              className: "h-10 w-10",
                            }),
                          }),
                          (0, a.jsx)(y.D, {
                            level: 3,
                            className: "mb-4",
                            children:
                              "Dein Eignungstest f\xfcr hohe Geh\xe4lter",
                          }),
                          (0, a.jsx)(k.f, {
                            className: "text-muted-foreground mb-6",
                            children:
                              "Finde heraus, f\xfcr welche gut bezahlten Ausbildungsberufe du geeignet bist",
                          }),
                          (0, a.jsx)(v.ProtectedLink, {
                            href: "/dashboard/tools/eligibility",
                            children: (0, a.jsxs)(N.$, {
                              size: "lg",
                              className: "w-full rounded-full",
                              children: [
                                "Jetzt kostenlos testen ",
                                (0, a.jsx)(f.A, { className: "ml-2 h-4 w-4" }),
                              ],
                            }),
                          }),
                        ],
                      }),
                    }),
                  }),
                ],
              }),
            }),
            (0, a.jsx)("section", {
              className: "py-16 md:py-24 bg-muted/20",
              children: (0, a.jsxs)("div", {
                className: "container px-4 md:px-6",
                children: [
                  (0, a.jsxs)("div", {
                    className: "text-center max-w-2xl mx-auto mb-12",
                    children: [
                      (0, a.jsx)(y.D, {
                        level: 2,
                        className: "mb-4",
                        children: "Was beeinflusst dein Gehalt?",
                      }),
                      (0, a.jsx)(k.f, {
                        size: "lg",
                        className: "text-muted-foreground",
                        children:
                          "Diese Faktoren haben den gr\xf6\xdften Einfluss auf die H\xf6he deines Gehalts",
                      }),
                    ],
                  }),
                  (0, a.jsx)("div", {
                    className:
                      "grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 md:gap-8",
                    children: z.map((e, s) => {
                      let r = e.icon;
                      return (0, a.jsxs)(
                        i.Zp,
                        {
                          className:
                            "text-center p-6 border-transparent hover:shadow-lg hover:border-border/20 transition-all duration-300 bg-background",
                          children: [
                            (0, a.jsx)("div", {
                              className: (0, m.cn)(
                                "w-12 h-12 rounded-full flex items-center justify-center mx-auto mb-5",
                                e.color,
                              ),
                              children: (0, a.jsx)(r, { className: "h-6 w-6" }),
                            }),
                            (0, a.jsx)(y.D, {
                              level: 3,
                              className: "mb-3",
                              children: e.title,
                            }),
                            (0, a.jsx)(k.f, {
                              size: "sm",
                              className:
                                "text-muted-foreground leading-relaxed",
                              children: e.description,
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
            (0, a.jsx)("section", {
              className: "py-16 md:py-24",
              children: (0, a.jsxs)("div", {
                className: "container px-4 md:px-6",
                children: [
                  (0, a.jsxs)("div", {
                    className: "text-center max-w-2xl mx-auto mb-12",
                    children: [
                      (0, a.jsx)(y.D, {
                        level: 2,
                        className: "mb-4",
                        children: "Gehaltsaussichten: Von Azubi bis Senior",
                      }),
                      (0, a.jsx)(k.f, {
                        size: "lg",
                        className: "text-muted-foreground",
                        children:
                          "So entwickelt sich dein Gehalt w\xe4hrend und nach der Ausbildung",
                      }),
                    ],
                  }),
                  (0, a.jsx)("div", {
                    className: "max-w-4xl mx-auto",
                    children: (0, a.jsx)("div", {
                      className: "space-y-6",
                      children: D.map((e, s) =>
                        (0, a.jsx)(
                          i.Zp,
                          {
                            className:
                              "p-6 hover:shadow-lg transition-shadow rounded-2xl",
                            children: (0, a.jsxs)("div", {
                              className: "flex items-center gap-6",
                              children: [
                                (0, a.jsx)("div", {
                                  className: "text-4xl",
                                  children: e.icon,
                                }),
                                (0, a.jsxs)("div", {
                                  className: "flex-1",
                                  children: [
                                    (0, a.jsxs)("div", {
                                      className:
                                        "flex items-center justify-between mb-2",
                                      children: [
                                        (0, a.jsx)(y.D, {
                                          level: 3,
                                          children: e.level,
                                        }),
                                        (0, a.jsx)("span", {
                                          className:
                                            "text-2xl font-bold text-primary",
                                          children: e.salary,
                                        }),
                                      ],
                                    }),
                                    (0, a.jsx)(k.f, {
                                      size: "sm",
                                      className: "text-muted-foreground",
                                      children: e.description,
                                    }),
                                  ],
                                }),
                              ],
                            }),
                          },
                          s,
                        ),
                      ),
                    }),
                  }),
                ],
              }),
            }),
            (0, a.jsx)("section", {
              className: "py-16 md:py-24 bg-muted/20",
              children: (0, a.jsxs)("div", {
                className: "container px-4 md:px-6",
                children: [
                  (0, a.jsxs)("div", {
                    className: "text-center max-w-2xl mx-auto mb-12",
                    children: [
                      (0, a.jsx)(y.D, {
                        level: 2,
                        className: "mb-4",
                        children: "Geh\xe4lter nach Bundesl\xe4ndern",
                      }),
                      (0, a.jsx)(k.f, {
                        size: "lg",
                        className: "text-muted-foreground",
                        children:
                          "Regionale Unterschiede bei Ausbildungsgeh\xe4ltern und Einstiegsgeh\xe4ltern",
                      }),
                    ],
                  }),
                  (0, a.jsx)("div", {
                    className:
                      "grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 md:gap-8",
                    children: B.map((e, s) =>
                      (0, a.jsxs)(
                        i.Zp,
                        {
                          className:
                            "p-6 text-center hover:shadow-lg transition-shadow rounded-2xl",
                          children: [
                            (0, a.jsxs)("div", {
                              className:
                                "flex items-center justify-center gap-2 mb-4",
                              children: [
                                (0, a.jsx)(x.A, {
                                  className: "w-5 h-5 text-primary",
                                }),
                                (0, a.jsx)(y.D, {
                                  level: 3,
                                  children: e.region,
                                }),
                              ],
                            }),
                            (0, a.jsxs)("div", {
                              className: "space-y-3 mb-4",
                              children: [
                                (0, a.jsxs)("div", {
                                  className:
                                    "flex justify-between items-center",
                                  children: [
                                    (0, a.jsx)("span", {
                                      className:
                                        "text-sm text-muted-foreground",
                                      children: "Gehaltsniveau:",
                                    }),
                                    (0, a.jsx)(d.E, {
                                      variant: "outline",
                                      className: "font-bold",
                                      children: e.multiplier,
                                    }),
                                  ],
                                }),
                                (0, a.jsxs)("div", {
                                  className:
                                    "flex justify-between items-center",
                                  children: [
                                    (0, a.jsx)("span", {
                                      className:
                                        "text-sm text-muted-foreground",
                                      children: "⌀ Bonus:",
                                    }),
                                    (0, a.jsx)("span", {
                                      className: "font-medium text-secondary",
                                      children: e.averageBonus,
                                    }),
                                  ],
                                }),
                              ],
                            }),
                            (0, a.jsxs)("div", {
                              className: "text-left",
                              children: [
                                (0, a.jsx)("div", {
                                  className:
                                    "text-sm font-medium text-muted-foreground mb-2",
                                  children: "Top-Branchen:",
                                }),
                                (0, a.jsx)("div", {
                                  className: "flex flex-wrap gap-2",
                                  children: e.topJobs.map((e, s) =>
                                    (0, a.jsx)(
                                      d.E,
                                      {
                                        variant: "secondary",
                                        className: "text-xs",
                                        children: e,
                                      },
                                      s,
                                    ),
                                  ),
                                }),
                              ],
                            }),
                          ],
                        },
                        s,
                      ),
                    ),
                  }),
                ],
              }),
            }),
            (0, a.jsx)("section", {
              className: "py-16 md:py-24",
              children: (0, a.jsxs)("div", {
                className: "container px-4 md:px-6",
                children: [
                  (0, a.jsxs)("div", {
                    className: "text-center max-w-2xl mx-auto mb-12",
                    children: [
                      (0, a.jsx)(y.D, {
                        level: 2,
                        className: "mb-4",
                        children: "Tipps f\xfcr h\xf6here Geh\xe4lter",
                      }),
                      (0, a.jsx)(k.f, {
                        size: "lg",
                        className: "text-muted-foreground",
                        children:
                          "So verhandelst du erfolgreich und steigerst dein Einkommen",
                      }),
                    ],
                  }),
                  (0, a.jsx)("div", {
                    className: "max-w-4xl mx-auto",
                    children: (0, a.jsxs)("div", {
                      className: "grid grid-cols-1 md:grid-cols-2 gap-8",
                      children: [
                        (0, a.jsxs)(i.Zp, {
                          className:
                            "p-6 text-left hover:shadow-lg transition-shadow rounded-2xl",
                          children: [
                            (0, a.jsxs)(y.D, {
                              level: 4,
                              className: "mb-4 flex items-center gap-2",
                              children: [
                                (0, a.jsx)(p.A, {
                                  className: "w-5 h-5 text-primary",
                                }),
                                "W\xe4hrend der Ausbildung",
                              ],
                            }),
                            (0, a.jsxs)("div", {
                              className: "space-y-4",
                              children: [
                                (0, a.jsxs)("div", {
                                  className: "flex items-start",
                                  children: [
                                    (0, a.jsx)("span", {
                                      className:
                                        "w-2 h-2 bg-primary rounded-full mt-2 mr-3 flex-shrink-0",
                                    }),
                                    (0, a.jsxs)("span", {
                                      className:
                                        "text-sm text-muted-foreground",
                                      children: [
                                        (0, a.jsx)("strong", {
                                          children:
                                            "\xdcbertarifliche Bezahlung:",
                                        }),
                                        " Bei gro\xdfen Unternehmen nachfragen",
                                      ],
                                    }),
                                  ],
                                }),
                                (0, a.jsxs)("div", {
                                  className: "flex items-start",
                                  children: [
                                    (0, a.jsx)("span", {
                                      className:
                                        "w-2 h-2 bg-primary rounded-full mt-2 mr-3 flex-shrink-0",
                                    }),
                                    (0, a.jsxs)("span", {
                                      className:
                                        "text-sm text-muted-foreground",
                                      children: [
                                        (0, a.jsx)("strong", {
                                          children: "Zusatzleistungen:",
                                        }),
                                        " Fahrkostenzuschuss, Kantinengeld, B\xfcchergeld",
                                      ],
                                    }),
                                  ],
                                }),
                                (0, a.jsxs)("div", {
                                  className: "flex items-start",
                                  children: [
                                    (0, a.jsx)("span", {
                                      className:
                                        "w-2 h-2 bg-primary rounded-full mt-2 mr-3 flex-shrink-0",
                                    }),
                                    (0, a.jsxs)("span", {
                                      className:
                                        "text-sm text-muted-foreground",
                                      children: [
                                        (0, a.jsx)("strong", {
                                          children: "Leistung zeigen:",
                                        }),
                                        " Engagement und gute Noten k\xf6nnen belohnt werden",
                                      ],
                                    }),
                                  ],
                                }),
                                (0, a.jsxs)("div", {
                                  className: "flex items-start",
                                  children: [
                                    (0, a.jsx)("span", {
                                      className:
                                        "w-2 h-2 bg-primary rounded-full mt-2 mr-3 flex-shrink-0",
                                    }),
                                    (0, a.jsxs)("span", {
                                      className:
                                        "text-sm text-muted-foreground",
                                      children: [
                                        (0, a.jsx)("strong", {
                                          children: "\xdcbernahmegarantie:",
                                        }),
                                        " Verhandlung \xfcber Einstiegsgehalt nach Ausbildung",
                                      ],
                                    }),
                                  ],
                                }),
                              ],
                            }),
                          ],
                        }),
                        (0, a.jsxs)(i.Zp, {
                          className:
                            "p-6 text-left hover:shadow-lg transition-shadow rounded-2xl",
                          children: [
                            (0, a.jsxs)(y.D, {
                              level: 4,
                              className: "mb-4 flex items-center gap-2",
                              children: [
                                (0, a.jsx)(p.A, {
                                  className: "w-5 h-5 text-primary",
                                }),
                                "Nach der Ausbildung",
                              ],
                            }),
                            (0, a.jsxs)("div", {
                              className: "space-y-4",
                              children: [
                                (0, a.jsxs)("div", {
                                  className: "flex items-start",
                                  children: [
                                    (0, a.jsx)("span", {
                                      className:
                                        "w-2 h-2 bg-primary rounded-full mt-2 mr-3 flex-shrink-0",
                                    }),
                                    (0, a.jsxs)("span", {
                                      className:
                                        "text-sm text-muted-foreground",
                                      children: [
                                        (0, a.jsx)("strong", {
                                          children: "Weiterbildung:",
                                        }),
                                        " Meister, Techniker oder Fachwirt-Abschluss",
                                      ],
                                    }),
                                  ],
                                }),
                                (0, a.jsxs)("div", {
                                  className: "flex items-start",
                                  children: [
                                    (0, a.jsx)("span", {
                                      className:
                                        "w-2 h-2 bg-primary rounded-full mt-2 mr-3 flex-shrink-0",
                                    }),
                                    (0, a.jsxs)("span", {
                                      className:
                                        "text-sm text-muted-foreground",
                                      children: [
                                        (0, a.jsx)("strong", {
                                          children: "Regionswechsel:",
                                        }),
                                        " In gut bezahlende Bundesl\xe4nder wechseln",
                                      ],
                                    }),
                                  ],
                                }),
                                (0, a.jsxs)("div", {
                                  className: "flex items-start",
                                  children: [
                                    (0, a.jsx)("span", {
                                      className:
                                        "w-2 h-2 bg-primary rounded-full mt-2 mr-3 flex-shrink-0",
                                    }),
                                    (0, a.jsxs)("span", {
                                      className:
                                        "text-sm text-muted-foreground",
                                      children: [
                                        (0, a.jsx)("strong", {
                                          children: "Spezialisierung:",
                                        }),
                                        " Nischenkenntnisse und Zertifikate erwerben",
                                      ],
                                    }),
                                  ],
                                }),
                                (0, a.jsxs)("div", {
                                  className: "flex items-start",
                                  children: [
                                    (0, a.jsx)("span", {
                                      className:
                                        "w-2 h-2 bg-primary rounded-full mt-2 mr-3 flex-shrink-0",
                                    }),
                                    (0, a.jsxs)("span", {
                                      className:
                                        "text-sm text-muted-foreground",
                                      children: [
                                        (0, a.jsx)("strong", {
                                          children: "Unternehmenswechsel:",
                                        }),
                                        " Nach 2-3 Jahren f\xfcr h\xf6heres Gehalt wechseln",
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
                ],
              }),
            }),
            (0, a.jsx)("section", {
              className: "py-16 md:py-24 bg-muted/20",
              children: (0, a.jsxs)("div", {
                className: "container px-4 md:px-6",
                children: [
                  (0, a.jsxs)("div", {
                    className: "text-center max-w-2xl mx-auto mb-12",
                    children: [
                      (0, a.jsx)(y.D, {
                        level: 2,
                        className: "mb-4",
                        children: "H\xe4ufig gestellte Fragen",
                      }),
                      (0, a.jsx)(k.f, {
                        size: "lg",
                        className: "text-muted-foreground",
                        children:
                          "Die wichtigsten Antworten zu Geh\xe4ltern in der Ausbildung",
                      }),
                    ],
                  }),
                  (0, a.jsxs)("div", {
                    className: "max-w-3xl mx-auto space-y-6",
                    children: [
                      (0, a.jsxs)(i.Zp, {
                        className:
                          "p-6 text-left hover:shadow-lg transition-shadow rounded-2xl",
                        children: [
                          (0, a.jsxs)(y.D, {
                            level: 4,
                            className: "mb-4 flex items-center gap-2",
                            children: [
                              (0, a.jsx)(p.A, {
                                className: "w-5 h-5 text-primary",
                              }),
                              "Wie hoch ist die Ausbildungsverg\xfctung in Deutschland?",
                            ],
                          }),
                          (0, a.jsx)(k.f, {
                            size: "sm",
                            className: "text-muted-foreground",
                            children:
                              "Die Ausbildungsverg\xfctung variiert stark nach Beruf und Bundesland. Im ersten Jahr liegt sie meist zwischen 515€ und 620€, im dritten Jahr zwischen 610€ und 790€. Einige Branchen wie die Metall- und Elektroindustrie zahlen deutlich mehr.",
                          }),
                        ],
                      }),
                      (0, a.jsxs)(i.Zp, {
                        className:
                          "p-6 text-left hover:shadow-lg transition-shadow rounded-2xl",
                        children: [
                          (0, a.jsxs)(y.D, {
                            level: 4,
                            className: "mb-4 flex items-center gap-2",
                            children: [
                              (0, a.jsx)(p.A, {
                                className: "w-5 h-5 text-primary",
                              }),
                              "Welche Ausbildungsberufe haben die h\xf6chsten Geh\xe4lter?",
                            ],
                          }),
                          (0, a.jsx)(k.f, {
                            size: "sm",
                            className: "text-muted-foreground",
                            children:
                              "IT-Berufe, Mechatroniker, Bankkaufleute und Pflegefachkr\xe4fte geh\xf6ren zu den bestbezahlten Ausbildungsberufen. Nach der Ausbildung k\xf6nnen Einstiegsgeh\xe4lter von 3.000€ bis 4.500€ erreicht werden.",
                          }),
                        ],
                      }),
                      (0, a.jsxs)(i.Zp, {
                        className:
                          "p-6 text-left hover:shadow-lg transition-shadow rounded-2xl",
                        children: [
                          (0, a.jsxs)(y.D, {
                            level: 4,
                            className: "mb-4 flex items-center gap-2",
                            children: [
                              (0, a.jsx)(p.A, {
                                className: "w-5 h-5 text-primary",
                              }),
                              "Kann ich \xfcber mein Ausbildungsgehalt verhandeln?",
                            ],
                          }),
                          (0, a.jsx)(k.f, {
                            size: "sm",
                            className: "text-muted-foreground",
                            children:
                              "Bei tarifgebundenen Unternehmen ist das Gehalt meist festgelegt. In nicht-tarifgebundenen Betrieben kann man durchaus verhandeln, besonders wenn man gute Leistungen bringt oder das Unternehmen Nachwuchs dringend braucht.",
                          }),
                        ],
                      }),
                      (0, a.jsxs)(i.Zp, {
                        className:
                          "p-6 text-left hover:shadow-lg transition-shadow rounded-2xl",
                        children: [
                          (0, a.jsxs)(y.D, {
                            level: 4,
                            className: "mb-4 flex items-center gap-2",
                            children: [
                              (0, a.jsx)(p.A, {
                                className: "w-5 h-5 text-primary",
                              }),
                              "Wie entwickelt sich mein Gehalt nach der Ausbildung?",
                            ],
                          }),
                          (0, a.jsx)(k.f, {
                            size: "sm",
                            className: "text-muted-foreground",
                            children:
                              "Das Einstiegsgehalt nach der Ausbildung liegt meist 30-50% \xfcber der letzten Ausbildungsverg\xfctung. Mit Berufserfahrung, Weiterbildungen und Spezialisierung kann das Gehalt kontinuierlich gesteigert werden.",
                          }),
                        ],
                      }),
                    ],
                  }),
                ],
              }),
            }),
            (0, a.jsx)("section", {
              className: "py-16",
              children: (0, a.jsxs)("div", {
                className: "container px-4 md:px-6",
                children: [
                  (0, a.jsxs)("div", {
                    className: "text-center max-w-2xl mx-auto mb-12",
                    children: [
                      (0, a.jsx)(y.D, {
                        level: 2,
                        className: "mb-4",
                        children: "N\xe4chste Schritte",
                      }),
                      (0, a.jsx)(k.f, {
                        size: "lg",
                        className: "text-muted-foreground",
                        children:
                          "Nutze diese Tools, um deinen Weg zu einem gut bezahlten Beruf zu planen",
                      }),
                    ],
                  }),
                  (0, a.jsxs)("div", {
                    className:
                      "grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 md:gap-8",
                    children: [
                      (0, a.jsxs)(i.Zp, {
                        className:
                          "text-center p-6 border-transparent hover:shadow-lg hover:border-border/20 transition-all duration-300 bg-background rounded-2xl",
                        children: [
                          (0, a.jsx)("div", {
                            className:
                              "w-12 h-12 rounded-full flex items-center justify-center mx-auto mb-5 text-primary bg-primary/10",
                            children: (0, a.jsx)(b.A, { className: "h-6 w-6" }),
                          }),
                          (0, a.jsx)(y.D, {
                            level: 3,
                            className: "mb-3",
                            children: "Berufstest",
                          }),
                          (0, a.jsx)(k.f, {
                            size: "sm",
                            className:
                              "text-muted-foreground leading-relaxed mb-4",
                            children:
                              "Finde heraus, welche gut bezahlten Berufe zu dir passen",
                          }),
                          (0, a.jsx)(v.ProtectedLink, {
                            href: "/de/berufstest",
                            children: (0, a.jsxs)(N.$, {
                              className: "w-full rounded-full",
                              children: [
                                "Test starten ",
                                (0, a.jsx)(f.A, { className: "ml-2 h-4 w-4" }),
                              ],
                            }),
                          }),
                        ],
                      }),
                      (0, a.jsxs)(i.Zp, {
                        className:
                          "text-center p-6 border-transparent hover:shadow-lg hover:border-border/20 transition-all duration-300 bg-background rounded-2xl",
                        children: [
                          (0, a.jsx)("div", {
                            className:
                              "w-12 h-12 rounded-full flex items-center justify-center mx-auto mb-5 text-secondary bg-secondary/10",
                            children: (0, a.jsx)(u.A, { className: "h-6 w-6" }),
                          }),
                          (0, a.jsx)(y.D, {
                            level: 3,
                            className: "mb-3",
                            children: "Sch\xfclerpraktikum",
                          }),
                          (0, a.jsx)(k.f, {
                            size: "sm",
                            className:
                              "text-muted-foreground leading-relaxed mb-4",
                            children:
                              "Erste Erfahrungen in gut bezahlten Branchen sammeln",
                          }),
                          (0, a.jsx)(v.ProtectedLink, {
                            href: "/de/schuelerpraktikum",
                            children: (0, a.jsxs)(N.$, {
                              className: "w-full rounded-full",
                              children: [
                                "Praktikum finden ",
                                (0, a.jsx)(f.A, { className: "ml-2 h-4 w-4" }),
                              ],
                            }),
                          }),
                        ],
                      }),
                      (0, a.jsxs)(i.Zp, {
                        className:
                          "text-center p-6 border-transparent hover:shadow-lg hover:border-border/20 transition-all duration-300 bg-background rounded-2xl",
                        children: [
                          (0, a.jsx)("div", {
                            className:
                              "w-12 h-12 rounded-full flex items-center justify-center mx-auto mb-5 text-primary bg-muted",
                            children: (0, a.jsx)(j.A, { className: "h-6 w-6" }),
                          }),
                          (0, a.jsx)(y.D, {
                            level: 3,
                            className: "mb-3",
                            children: "Bewerbungstools",
                          }),
                          (0, a.jsx)(k.f, {
                            size: "sm",
                            className:
                              "text-muted-foreground leading-relaxed mb-4",
                            children:
                              "Erstelle \xfcberzeugende Bewerbungen f\xfcr Top-Stellen",
                          }),
                          (0, a.jsx)(v.ProtectedLink, {
                            href: "/de/lebenslauf-vorlagen",
                            children: (0, a.jsxs)(N.$, {
                              className: "w-full rounded-full",
                              children: [
                                "Tools nutzen ",
                                (0, a.jsx)(f.A, { className: "ml-2 h-4 w-4" }),
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
            (0, a.jsx)(w.HomepageLeadMagnet, { pdfType: "salary-guide" }),
            (0, a.jsx)(c.CTASection, {
              badge: { text: "Kostenlos testen" },
              title: "Finde deinen gut bezahlten Traumjob",
              description:
                "Nutze unseren Eignungstest, um herauszufinden, welche gut bezahlten Ausbildungsberufe zu dir passen.",
              action: {
                text: "Eignungstest starten",
                href: "/dashboard/tools/eligibility",
                variant: "default",
              },
              secondaryAction: {
                text: "Kostenlose Beratung",
                href: "/contact",
                variant: "outline",
              },
              className: "bg-muted/30",
            }),
          ],
        });
      }
    },
  },
  (e) => {
    var s = (s) => e((e.s = s));
    (e.O(0, [46593, 36209, 84121, 72076, 77358], () => s(61008)),
      (_N_E = e.O()));
  },
]);
