(self.webpackChunk_N_E = self.webpackChunk_N_E || []).push([
  [23792],
  {
    6140: (e, s, t) => {
      "use strict";
      t.d(s, { VisitorSegmentationDE: () => x });
      var r = t(70207),
        a = t(23072),
        l = t(25147),
        i = t(88117),
        n = t(46031),
        d = t(39441),
        c = t(82110),
        o = t(10542),
        m = t.n(o);
      function x(e) {
        let { className: s } = e,
          t = [
            {
              emoji: "\uD83E\uDD14",
              title: "Ich erkunde nur",
              description:
                "Erfahre mehr \xfcber Ausbildung und pr\xfcfe, ob es das Richtige f\xfcr dich ist",
              cta: "Berechtigung pr\xfcfen",
              href: "/tools/eligibility-checker",
              icon: (0, r.jsx)(a.A, { className: "h-5 w-5" }),
              popular: !1,
            },
            {
              emoji: "\uD83D\uDE80",
              title: "Ich bin bereit zum Bewerben",
              description:
                "Erhalte KI-gest\xfctzte Bewerbungskits mit Anschreiben, Checklisten und E-Mail-Vorlagen",
              cta: "Kostenloses Konto erstellen",
              href: "/auth?signup",
              icon: (0, r.jsx)(l.A, { className: "h-5 w-5" }),
              popular: !0,
            },
            {
              emoji: "\uD83D\uDCBC",
              title: "Ich m\xf6chte Jobs durchsuchen",
              description:
                "Entdecke tausende echte Ausbildungsstellen von verifizierten deutschen Arbeitgebern",
              cta: "Jobs durchsuchen",
              href: "/de/stellenangebote",
              icon: (0, r.jsx)(i.A, { className: "h-5 w-5" }),
              popular: !1,
            },
          ];
        return (0, r.jsxs)("section", {
          className: (0, c.cn)(
            "py-12 sm:py-16 md:py-20 relative overflow-hidden",
            s,
          ),
          children: [
            (0, r.jsxs)("div", {
              className:
                "absolute inset-0 -z-10 overflow-hidden pointer-events-none",
              children: [
                (0, r.jsx)("div", {
                  className:
                    "absolute left-1/4 top-1/4 w-72 h-72 bg-primary/3 rounded-full blur-3xl opacity-60",
                }),
                (0, r.jsx)("div", {
                  className:
                    "absolute right-1/4 bottom-1/4 w-96 h-96 bg-blue-500/3 rounded-full blur-3xl opacity-60",
                }),
              ],
            }),
            (0, r.jsxs)("div", {
              className: "container mx-auto px-4 relative z-10",
              children: [
                (0, r.jsxs)("div", {
                  className: "text-center max-w-3xl mx-auto mb-12 sm:mb-16",
                  children: [
                    (0, r.jsx)("span", {
                      className:
                        "px-4 py-1.5 rounded-full bg-primary/10 border border-primary/10 backdrop-blur-sm text-primary text-sm font-medium inline-block mb-4",
                      children: "W\xe4hle deinen Weg",
                    }),
                    (0, r.jsx)("h2", {
                      className:
                        "text-2xl sm:text-3xl md:text-4xl font-bold tracking-tight mb-6 bg-gradient-to-b from-foreground to-muted-foreground bg-clip-text text-transparent",
                      children: "Was beschreibt dich am besten?",
                    }),
                    (0, r.jsx)("p", {
                      className: "text-base sm:text-lg text-muted-foreground",
                      children:
                        "Erhalte personalisierte Beratung basierend auf deinem Stand in deiner Ausbildungsreise",
                    }),
                  ],
                }),
                (0, r.jsx)("div", {
                  className:
                    "grid grid-cols-1 md:grid-cols-3 gap-4 sm:gap-6 max-w-5xl mx-auto",
                  children: t.map((e, s) =>
                    (0, r.jsxs)(
                      "div",
                      {
                        className: (0, c.cn)(
                          "relative group rounded-2xl border backdrop-blur-md p-4 sm:p-6 transition-all duration-300 hover:shadow-lg cursor-pointer",
                          "bg-card/40 border-border/60 hover:border-primary/30",
                          e.popular && "ring-2 ring-primary/20",
                        ),
                        children: [
                          e.popular &&
                            (0, r.jsx)("div", {
                              className:
                                "absolute -top-3 left-1/2 transform -translate-x-1/2",
                              children: (0, r.jsx)("span", {
                                className:
                                  "px-3 py-1 bg-primary text-primary-foreground text-xs font-medium rounded-full",
                                children: "Am beliebtesten",
                              }),
                            }),
                          (0, r.jsx)("div", {
                            className:
                              "absolute inset-0 bg-gradient-to-br from-white/5 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 rounded-2xl",
                          }),
                          (0, r.jsxs)("div", {
                            className: "relative z-10 text-center",
                            children: [
                              (0, r.jsx)("div", {
                                className: "text-3xl sm:text-4xl mb-3 sm:mb-4",
                                children: e.emoji,
                              }),
                              (0, r.jsx)("h3", {
                                className:
                                  "text-base sm:text-lg font-semibold mb-3",
                                children: e.title,
                              }),
                              (0, r.jsx)("p", {
                                className:
                                  "text-sm text-muted-foreground mb-6 leading-relaxed",
                                children: e.description,
                              }),
                              (0, r.jsx)(d.$, {
                                asChild: !0,
                                variant: e.popular ? "default" : "outline",
                                size: "sm",
                                className: (0, c.cn)(
                                  "w-full group-hover:scale-105 transition-transform duration-200",
                                  e.popular
                                    ? "bg-primary hover:bg-primary/90 text-primary-foreground"
                                    : "border-primary/30 bg-primary/5 text-primary hover:bg-primary/10",
                                ),
                                children: (0, r.jsxs)(m(), {
                                  href: e.href,
                                  className:
                                    "flex items-center justify-center gap-2",
                                  children: [
                                    e.icon,
                                    e.cta,
                                    (0, r.jsx)(n.A, { className: "h-4 w-4" }),
                                  ],
                                }),
                              }),
                              "/tools/eligibility-checker" === e.href &&
                                (0, r.jsx)("p", {
                                  className:
                                    "text-[10px] text-center text-muted-foreground mt-2 opacity-70",
                                  children: "2-Minuten-KI-Bewertung",
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
          ],
        });
      }
    },
    16591: (e, s, t) => {
      "use strict";
      t.d(s, { FAQSectionDE: () => h });
      var r = t(70207),
        a = t(87223),
        l = t(45748),
        i = t(54459),
        n = t(47161),
        d = t(26304),
        c = t(51613),
        o = t(17802),
        m = t(39441);
      let x = [
        {
          question: "Was ist eine Ausbildung in Deutschland?",
          answer:
            "Eine Ausbildung ist Deutschlands duales Bildungssystem, das praktische Arbeitserfahrung mit theoretischer Bildung kombiniert. Studenten verbringen 3-4 Tage pro Woche in einem Unternehmen und 1-2 Tage in der Berufsschule und verdienen dabei €900-1.300 monatlich.",
        },
        {
          question: "Wer ist f\xfcr Ausbildungsprogramme berechtigt?",
          answer:
            "Internationale Studenten im Alter von 18-30 Jahren mit mindestens 10+2 Bildung (Abitur) und deutschen Sprachkenntnissen auf B1-B2 Niveau sind berechtigt. Sie ben\xf6tigen einen g\xfcltigen Reisepass und ein sauberes F\xfchrungszeugnis.",
        },
        {
          question: "Wie viel kostet eine Ausbildung?",
          answer:
            "Die Hauptkosten umfassen: Sperrkonto (€11.904 f\xfcr 2025), Visageb\xfchren (€75-100), Krankenversicherung (€110-120/Monat) und Servicegeb\xfchren. Die Ausbildung selbst ist kostenlos und Sie verdienen ein monatliches Stipendium.",
        },
        {
          question: "Wie sind die Karriereaussichten nach der Ausbildung?",
          answer:
            "Nach Abschluss der Ausbildung k\xf6nnen Absolventen mit Startgeh\xe4ltern von €2.500-4.000/Monat rechnen und haben exzellente Karrierem\xf6glichkeiten in ganz Deutschland und der EU. Die Erfolgsquote liegt bei 98% mit hohen Jobvermittlungsraten.",
        },
        {
          question: "Wie lange dauert der Bewerbungsprozess?",
          answer:
            "Der komplette Prozess dauert normalerweise 3-6 Monate von der ersten Bewerbung bis zur Ankunft in Deutschland. Dies umfasst 2-4 Wochen f\xfcr die Bewerbungsvorbereitung und 4-12 Wochen f\xfcr die Visa-Bearbeitung.",
        },
        {
          question: "Welche Branchen bieten die besten Chancen?",
          answer:
            "Besonders gute Chancen gibt es in Gesundheitswesen & Pflege, IT & Technologie, Ingenieurswesen, Logistik und Gastronomie. Diese Bereiche haben einen hohen Fachkr\xe4ftemangel und bieten ausgezeichnete Karriereaussichten.",
        },
      ];
      function h() {
        let [e, s] = (0, a.useState)(0),
          t = (t) => {
            s(e === t ? null : t);
          };
        return (0, r.jsx)("section", {
          className:
            "py-12 sm:py-16 md:py-20 bg-gradient-to-b from-muted/30 to-background",
          children: (0, r.jsx)("div", {
            className: "container mx-auto px-4",
            children: (0, r.jsxs)("div", {
              className: "max-w-4xl mx-auto",
              children: [
                (0, r.jsxs)("div", {
                  className: "text-center mb-12 sm:mb-16",
                  children: [
                    (0, r.jsxs)(o.E, {
                      variant: "outline",
                      className:
                        "mb-4 px-4 py-1.5 text-sm font-medium bg-blue-500/10 text-blue-600 border-blue-500/20",
                      children: [
                        (0, r.jsx)(n.A, { className: "w-4 h-4 mr-2" }),
                        "H\xc4UFIGE FRAGEN",
                      ],
                    }),
                    (0, r.jsx)(l.P.h2, {
                      className:
                        "text-2xl sm:text-3xl md:text-4xl lg:text-5xl font-bold tracking-tight mb-6",
                      initial: { opacity: 0, y: 20 },
                      whileInView: { opacity: 1, y: 0 },
                      transition: { duration: 0.8 },
                      viewport: { once: !0 },
                      children: "H\xe4ufig gestellte Fragen",
                    }),
                    (0, r.jsx)(l.P.p, {
                      className:
                        "text-base sm:text-lg md:text-xl text-muted-foreground",
                      initial: { opacity: 0, y: 20 },
                      whileInView: { opacity: 1, y: 0 },
                      transition: { duration: 0.8, delay: 0.2 },
                      viewport: { once: !0 },
                      children:
                        "Hier findest du Antworten auf die wichtigsten Fragen zur Ausbildung in Deutschland",
                    }),
                  ],
                }),
                (0, r.jsx)("div", {
                  className: "space-y-4",
                  children: x.map((s, a) =>
                    (0, r.jsxs)(
                      l.P.div,
                      {
                        initial: { opacity: 0, y: 20 },
                        whileInView: { opacity: 1, y: 0 },
                        transition: { duration: 0.5, delay: 0.1 * a },
                        viewport: { once: !0 },
                        className:
                          "bg-background rounded-xl border border-border/50 overflow-hidden",
                        children: [
                          (0, r.jsxs)("button", {
                            onClick: () => t(a),
                            className:
                              "w-full px-6 py-4 text-left hover:bg-muted/50 transition-colors duration-200 flex items-center justify-between group",
                            children: [
                              (0, r.jsx)("span", {
                                className:
                                  "text-foreground font-medium group-hover:text-primary transition-colors",
                                children: s.question,
                              }),
                              (0, r.jsx)("div", {
                                className: "ml-4 flex-shrink-0",
                                children:
                                  e === a
                                    ? (0, r.jsx)(d.A, {
                                        className: "h-5 w-5 text-primary",
                                      })
                                    : (0, r.jsx)(c.A, {
                                        className:
                                          "h-5 w-5 text-muted-foreground group-hover:text-primary transition-colors",
                                      }),
                              }),
                            ],
                          }),
                          (0, r.jsx)(i.N, {
                            children:
                              e === a &&
                              (0, r.jsx)(l.P.div, {
                                initial: { height: 0, opacity: 0 },
                                animate: { height: "auto", opacity: 1 },
                                exit: { height: 0, opacity: 0 },
                                transition: {
                                  duration: 0.3,
                                  ease: "easeInOut",
                                },
                                children: (0, r.jsx)("div", {
                                  className:
                                    "px-6 pb-4 text-muted-foreground leading-relaxed",
                                  children: s.answer,
                                }),
                              }),
                          }),
                        ],
                      },
                      a,
                    ),
                  ),
                }),
                (0, r.jsx)(l.P.div, {
                  className: "text-center mt-12 sm:mt-16",
                  initial: { opacity: 0, y: 20 },
                  whileInView: { opacity: 1, y: 0 },
                  transition: { duration: 0.8, delay: 0.8 },
                  viewport: { once: !0 },
                  children: (0, r.jsxs)("div", {
                    className:
                      "bg-gradient-to-r from-primary/5 via-background to-primary/5 rounded-2xl p-6 sm:p-8 border border-primary/10",
                    children: [
                      (0, r.jsx)("h3", {
                        className: "text-xl font-bold text-foreground mb-4",
                        children: "Hast du noch weitere Fragen?",
                      }),
                      (0, r.jsx)("p", {
                        className: "text-muted-foreground mb-6",
                        children:
                          "Unser Expertenteam beantwortet gerne alle deine Fragen zur Ausbildung in Deutschland.",
                      }),
                      (0, r.jsx)(m.$, {
                        size: "lg",
                        asChild: !0,
                        children: (0, r.jsx)("a", {
                          href: "/de/kontakt",
                          children: "Kostenlose Beratung buchen",
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
    },
    25800: (e, s, t) => {
      "use strict";
      t.d(s, { HowItWorksDE: () => x });
      var r = t(70207),
        a = t(39441),
        l = t(82110),
        i = t(28560),
        n = t(32834),
        d = t(86654),
        c = t(50341),
        o = t(10542),
        m = t.n(o);
      function x(e) {
        let {
          title: s = "Drei Schritte zum Ausbildungserfolg",
          subtitle: t = "So funktioniert's",
          description:
            o = "Unsere Plattform vereinfacht das Finden und Bewerben f\xfcr Ausbildungsprogramme.",
          steps: x = [
            {
              title: "Profil erstellen",
              description:
                "Vervollst\xe4ndige dein Profil mit Bildung, Sprachkenntnissen und Pr\xe4ferenzen, um deinen Eignungsscore zu sehen.",
              icon: (0, r.jsx)(i.A, { className: "h-6 w-6" }),
              color: "text-primary bg-primary/10 border-primary/20",
            },
            {
              title: "Bewerbung aufbauen",
              description:
                "Nutze den Lebenslauf-Builder, das Bewerbungskit f\xfcr KI-Anschreiben, Video-Vorstellungen und Dokumenten-Tools.",
              icon: (0, r.jsx)(n.A, { className: "h-6 w-6" }),
              color: "text-secondary bg-secondary/10 border-secondary/20",
            },
            {
              title: "Selbstbewusst bewerben",
              description:
                "Erstelle Bewerbungskits mit personalisierten Anschreiben, Checklisten und E-Mail-Vorlagen f\xfcr jeden Job.",
              icon: (0, r.jsx)(d.A, { className: "h-6 w-6" }),
              color: "text-primary bg-primary/10 border-primary/20",
            },
          ],
          cta: h = { text: "Loslegen", href: "/auth?signup" },
          className: u,
        } = e;
        return (0, r.jsxs)("section", {
          className: (0, l.cn)(
            "py-12 sm:py-16 md:py-24 relative overflow-hidden",
            u,
          ),
          children: [
            (0, r.jsxs)("div", {
              className:
                "absolute inset-0 -z-10 overflow-hidden pointer-events-none",
              children: [
                (0, r.jsx)("div", {
                  className:
                    "absolute -right-10 top-10 w-60 h-60 rounded-full bg-primary/5 blur-3xl opacity-40 animate-float-slow",
                }),
                (0, r.jsx)("div", {
                  className:
                    "absolute -left-10 bottom-10 w-60 h-60 rounded-full bg-secondary/5 blur-3xl opacity-40 animate-float-slow-reverse",
                }),
                (0, r.jsx)("div", {
                  className:
                    "absolute right-1/3 top-1/3 w-32 h-32 rounded-full bg-primary/5 blur-xl opacity-30 animate-float",
                }),
              ],
            }),
            (0, r.jsxs)("div", {
              className: "container mx-auto px-4",
              children: [
                (0, r.jsxs)("div", {
                  className: "text-center max-w-2xl mx-auto mb-12 sm:mb-16",
                  children: [
                    t &&
                      (0, r.jsx)("span", {
                        className:
                          "px-4 py-1.5 rounded-full bg-primary/10 border border-primary/10 text-primary text-sm font-medium inline-block mb-4",
                        children: t,
                      }),
                    s &&
                      (0, r.jsx)("h2", {
                        className:
                          "text-2xl sm:text-3xl md:text-4xl font-bold tracking-tight mb-6 text-secondary",
                        children: s,
                      }),
                    o &&
                      (0, r.jsx)("p", {
                        className: "text-base sm:text-lg text-muted-foreground",
                        children: o,
                      }),
                  ],
                }),
                (0, r.jsxs)("div", {
                  className: "relative",
                  children: [
                    (0, r.jsx)("div", {
                      className:
                        "hidden md:block absolute top-[31px] left-0 w-full h-0.5 bg-primary/20",
                    }),
                    (0, r.jsx)("div", {
                      className:
                        "grid grid-cols-1 md:grid-cols-3 gap-8 sm:gap-10 md:gap-6 lg:gap-12 relative",
                      children: x.map((e, s) =>
                        (0, r.jsxs)(
                          "div",
                          {
                            className:
                              "relative flex flex-col items-center text-center group",
                            children: [
                              (0, r.jsxs)("div", {
                                className: "mb-4 sm:mb-6 relative",
                                children: [
                                  (0, r.jsx)("div", {
                                    className:
                                      "absolute -left-3 -top-3 w-6 h-6 rounded-full bg-primary border border-primary/30 flex items-center justify-center text-xs font-bold text-primary-foreground z-20",
                                    children: s + 1,
                                  }),
                                  (0, r.jsx)("div", {
                                    className: (0, l.cn)(
                                      "w-12 h-12 sm:w-16 sm:h-16 rounded-full flex items-center justify-center relative z-10 border",
                                      e.color,
                                      "transition-transform duration-300 group-hover:scale-110",
                                    ),
                                    children: e.icon,
                                  }),
                                  (0, r.jsx)("div", {
                                    className: (0, l.cn)(
                                      "absolute inset-0 rounded-full blur-md opacity-0 group-hover:opacity-40 transition-opacity duration-300",
                                      e.color.includes("primary") && 0 === s
                                        ? "bg-primary/30"
                                        : e.color.includes("secondary")
                                          ? "bg-secondary/30"
                                          : "bg-primary/30",
                                    ),
                                  }),
                                ],
                              }),
                              (0, r.jsxs)("div", {
                                className:
                                  "bg-card/30 p-4 sm:p-5 rounded-xl border border-border/40 group-hover:bg-card/40 transition-colors duration-300",
                                children: [
                                  (0, r.jsx)("h3", {
                                    className:
                                      "text-lg sm:text-xl font-semibold mb-3",
                                    children: e.title,
                                  }),
                                  (0, r.jsx)("p", {
                                    className: "text-muted-foreground text-sm",
                                    children: e.description,
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
                h &&
                  (0, r.jsx)("div", {
                    className: "mt-12 sm:mt-16 text-center",
                    children: (0, r.jsx)(a.$, {
                      asChild: !0,
                      size: "lg",
                      className:
                        "rounded-full px-6 sm:px-8 py-4 sm:py-6 text-sm sm:text-base",
                      children: (0, r.jsxs)(m(), {
                        href: h.href,
                        children: [
                          h.text,
                          (0, r.jsx)(c.A, { className: "ml-1 h-4 w-4" }),
                        ],
                      }),
                    }),
                  }),
              ],
            }),
          ],
        });
      }
    },
    39609: (e, s, t) => {
      (Promise.resolve().then(t.t.bind(t, 10542, 23)),
        Promise.resolve().then(t.t.bind(t, 25459, 23)),
        Promise.resolve().then(t.bind(t, 99206)),
        Promise.resolve().then(t.bind(t, 59851)),
        Promise.resolve().then(t.bind(t, 95311)),
        Promise.resolve().then(t.bind(t, 66758)),
        Promise.resolve().then(t.bind(t, 42320)),
        Promise.resolve().then(t.bind(t, 70083)),
        Promise.resolve().then(t.bind(t, 70589)),
        Promise.resolve().then(t.bind(t, 41287)),
        Promise.resolve().then(t.bind(t, 16591)),
        Promise.resolve().then(t.bind(t, 43661)),
        Promise.resolve().then(t.bind(t, 25800)),
        Promise.resolve().then(t.bind(t, 84359)),
        Promise.resolve().then(t.bind(t, 6140)),
        Promise.resolve().then(t.bind(t, 56388)),
        Promise.resolve().then(t.bind(t, 4426)));
    },
    41287: (e, s, t) => {
      "use strict";
      t.d(s, { DashboardFeaturesDE: () => A });
      var r = t(70207),
        a = t(45748),
        l = t(84222),
        i = t(31670),
        n = t(63016),
        d = t(86654),
        c = t(27239),
        o = t(49055),
        m = t(5101),
        x = t(37426),
        h = t(79024),
        u = t(82164),
        g = t(67926),
        b = t(46031),
        p = t(39441),
        j = t(17802),
        v = t(82110),
        f = t(10542),
        N = t.n(f),
        y = t(21402),
        w = t(87223);
      function A() {
        let [e, s] = (0, w.useState)(null),
          t = [
            {
              id: "german",
              title: "Deutschtraining",
              description: "Meistere Deutsch mit intelligenten Gespr\xe4chen",
              icon: (0, r.jsx)(l.A, { className: "w-5 h-5" }),
              color: "bg-primary",
              bgGradient: "bg-primary/10",
              href: "/dashboard/german",
              badge: "Am beliebtesten",
              highlight: "15.000+ Lernende",
              metric: "A1 bis B2",
            },
            {
              id: "interview",
              title: "Interview-Simulator",
              description: "\xdcbe mit Sprachassistent",
              icon: (0, r.jsx)(i.A, { className: "w-5 h-5" }),
              color: "bg-secondary",
              bgGradient: "bg-secondary/10",
              href: "/dashboard/interview",
              badge: "Neu",
              highlight: "500+ t\xe4gliche Sessions",
              metric: "Echtzeit",
            },
            {
              id: "culture",
              title: "Kulturelle Integration",
              description: "13 Videomodule \xfcber deutsche Kultur",
              icon: (0, r.jsx)(n.A, { className: "w-5 h-5" }),
              color: "bg-primary",
              bgGradient: "bg-primary/10",
              href: "/dashboard/culture",
              highlight: "98% Abschlussrate",
              metric: "Zertifikat",
            },
            {
              id: "eligibility",
              title: "Eignungspr\xfcfer",
              description: "Sofortige Eignungsauswertung",
              icon: (0, r.jsx)(d.A, { className: "w-5 h-5" }),
              color: "bg-secondary",
              bgGradient: "bg-secondary/10",
              href: "/dashboard/tools/eligibility",
              highlight: "2-Minuten-Test",
              metric: "Sofort",
            },
            {
              id: "cvbuilder",
              title: "Lebenslauf-Builder",
              description: "Professionelle deutsche CVs in Minuten",
              icon: (0, r.jsx)(c.A, { className: "w-5 h-5" }),
              color: "bg-primary",
              bgGradient: "bg-primary/10",
              href: "/dashboard/cv-builder",
              badge: "Neu",
              highlight: "ATS-optimiert",
              metric: "PDF-Export",
            },
            {
              id: "applicationkit",
              title: "Bewerbungskit",
              description: "KI-Anschreiben, Checklisten & E-Mails",
              icon: (0, r.jsx)(o.A, { className: "w-5 h-5" }),
              color: "bg-secondary",
              bgGradient: "bg-secondary/10",
              href: "/dashboard/applications",
              badge: "Intelligent",
              highlight: "Komplette Bewerbungsunterlagen",
              metric: "PDF",
            },
          ],
          f = [
            {
              icon: (0, r.jsx)(m.A, { className: "w-5 h-5" }),
              text: "Intelligente Profilverwaltung",
            },
            {
              icon: (0, r.jsx)(x.A, { className: "w-5 h-5" }),
              text: "Sichere Dokumentenablage",
            },
            {
              icon: (0, r.jsx)(h.A, { className: "w-5 h-5" }),
              text: "Fortschrittsverfolgung",
            },
            {
              icon: (0, r.jsx)(u.A, { className: "w-5 h-5" }),
              text: "Erfolgs-Badges",
            },
          ];
        return (0, r.jsxs)("section", {
          className: "py-16 sm:py-20 relative overflow-hidden bg-secondary",
          children: [
            (0, r.jsxs)("div", {
              className: "absolute inset-0 -z-10",
              children: [
                (0, r.jsx)("div", {
                  className:
                    "absolute top-0 left-1/4 w-96 h-96 bg-primary/10 rounded-full blur-3xl animate-pulse",
                }),
                (0, r.jsx)("div", {
                  className:
                    "absolute bottom-0 right-1/4 w-96 h-96 bg-primary/10 rounded-full blur-3xl animate-pulse delay-1000",
                }),
              ],
            }),
            (0, r.jsxs)("div", {
              className: "container mx-auto px-4",
              children: [
                (0, r.jsx)("div", {
                  className: "text-center max-w-3xl mx-auto mb-12",
                  children: (0, r.jsxs)(a.P.div, {
                    initial: { opacity: 0, y: 10 },
                    whileInView: { opacity: 1, y: 0 },
                    viewport: { once: !0 },
                    transition: { duration: 0.4 },
                    children: [
                      (0, r.jsxs)("span", {
                        className:
                          "inline-flex items-center gap-2 px-4 py-1.5 rounded-full bg-primary/10 border border-primary/20 text-primary text-sm font-medium mb-4",
                        children: [
                          (0, r.jsx)(g.A, { className: "h-4 w-4" }),
                          "Intelligente Tools",
                        ],
                      }),
                      (0, r.jsx)("h2", {
                        className:
                          "text-2xl sm:text-3xl md:text-4xl font-bold tracking-tight mb-6 text-background",
                        children: "Alles was du zum Erfolg brauchst",
                      }),
                      (0, r.jsx)("p", {
                        className: "text-base sm:text-lg text-background/80",
                        children:
                          "Sechs intelligente Tools speziell f\xfcr deine Ausbildungsreise in Deutschland entwickelt",
                      }),
                    ],
                  }),
                }),
                (0, r.jsx)("div", {
                  className:
                    "grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4 mb-12",
                  children: t.map((e, t) =>
                    (0, r.jsx)(
                      a.P.div,
                      {
                        initial: { opacity: 0, y: 20 },
                        whileInView: { opacity: 1, y: 0 },
                        viewport: { once: !0 },
                        transition: { duration: 0.4, delay: 0.05 * t },
                        children: (0, r.jsx)(y.ProtectedLink, {
                          href: e.href,
                          children: (0, r.jsxs)("div", {
                            className:
                              "group relative h-full p-6 rounded-2xl bg-background/10 border border-background/20 hover:border-background/40 hover:bg-background/20 transition-all duration-300",
                            onMouseEnter: () => s(e.id),
                            onMouseLeave: () => s(null),
                            children: [
                              e.badge &&
                                (0, r.jsx)(j.E, {
                                  className:
                                    "absolute -top-2 right-6 text-[10px] px-2 py-0.5 font-medium bg-primary text-background border-primary",
                                  children: e.badge,
                                }),
                              (0, r.jsxs)("div", {
                                className: "relative",
                                children: [
                                  (0, r.jsx)("div", {
                                    className: (0, v.cn)(
                                      "w-10 h-10 rounded-xl flex items-center justify-center text-background mb-4 shadow-sm",
                                      e.color,
                                    ),
                                    children: e.icon,
                                  }),
                                  (0, r.jsx)("h3", {
                                    className:
                                      "font-semibold text-base mb-1.5 text-background",
                                    children: e.title,
                                  }),
                                  (0, r.jsx)("p", {
                                    className:
                                      "text-sm text-background/70 mb-4",
                                    children: e.description,
                                  }),
                                  (0, r.jsxs)("div", {
                                    className:
                                      "flex items-center justify-between",
                                    children: [
                                      (0, r.jsx)("span", {
                                        className: "text-xs text-background/60",
                                        children: e.highlight,
                                      }),
                                      (0, r.jsxs)("div", {
                                        className:
                                          "flex items-center text-xs font-medium text-primary opacity-0 group-hover:opacity-100 transition-opacity duration-300",
                                        children: [
                                          (0, r.jsx)("span", {
                                            children: "Jetzt testen",
                                          }),
                                          (0, r.jsx)(b.A, {
                                            className: "w-3 h-3 ml-1",
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
                      },
                      e.id,
                    ),
                  ),
                }),
                (0, r.jsx)(a.P.div, {
                  initial: { opacity: 0 },
                  whileInView: { opacity: 1 },
                  viewport: { once: !0 },
                  transition: { duration: 0.5, delay: 0.3 },
                  className:
                    "flex flex-wrap items-center justify-center gap-4 sm:gap-8 text-xs text-background/70 mb-12",
                  children: f.map((e, s) =>
                    (0, r.jsxs)(
                      "div",
                      {
                        className: "flex items-center gap-1.5",
                        children: [
                          (0, r.jsx)("span", {
                            className: "text-primary",
                            children: e.icon,
                          }),
                          (0, r.jsx)("span", { children: e.text }),
                        ],
                      },
                      s,
                    ),
                  ),
                }),
                (0, r.jsxs)(a.P.div, {
                  initial: { opacity: 0, y: 10 },
                  whileInView: { opacity: 1, y: 0 },
                  viewport: { once: !0 },
                  transition: { duration: 0.5, delay: 0.4 },
                  className: "text-center",
                  children: [
                    (0, r.jsx)("p", {
                      className: "text-sm text-background/80 mb-6",
                      children:
                        "Schlie\xdfe dich 15.000+ Studenten an, die sich bereits auf den Erfolg vorbereiten",
                    }),
                    (0, r.jsx)(N(), {
                      href: "/auth?signup",
                      children: (0, r.jsxs)(p.$, {
                        size: "lg",
                        className:
                          "bg-primary text-background hover:bg-primary/90 rounded-full px-8 font-semibold",
                        children: [
                          "Starte deine Reise",
                          (0, r.jsx)(b.A, { className: "w-4 h-4 ml-2" }),
                        ],
                      }),
                    }),
                  ],
                }),
              ],
            }),
          ],
        });
      }
    },
    43661: (e, s, t) => {
      "use strict";
      t.d(s, { HomepageLeadMagnetDE: () => F });
      var r = t(70207),
        a = t(87223),
        l = t(45748),
        i = t(6625),
        n = t(39175),
        d = t(7535),
        c = t(70005),
        o = t(46031),
        m = t(37426),
        x = t(67926),
        h = t(39441),
        u = t(40167),
        g = t(93501),
        b = t(17802),
        p = t(80187),
        j = t(50488),
        v = t(54539),
        f = t(86056);
      let N = v.Ik({
          firstName: v.Yj().min(2, "Vorname muss mindestens 2 Zeichen haben"),
          lastName: v.Yj().min(2, "Nachname muss mindestens 2 Zeichen haben"),
          email: v
            .Yj()
            .email("Bitte geben Sie eine g\xfcltige E-Mail-Adresse ein"),
          germanLevel: v
            .Yj()
            .min(1, "Bitte w\xe4hlen Sie Ihr deutsches Sprachniveau aus"),
          interestedField: v
            .Yj()
            .min(1, "Bitte w\xe4hlen Sie Ihr Interessensgebiet aus"),
          currentCountry: v
            .Yj()
            .min(1, "Bitte w\xe4hlen Sie Ihr aktuelles Land aus"),
        }),
        y = [
          { value: "A1", label: "A1 - Anf\xe4nger" },
          { value: "A2", label: "A2 - Grundlagen" },
          { value: "B1", label: "B1 - Fortgeschritten" },
          { value: "B2", label: "B2 - Selbst\xe4ndig" },
          { value: "C1", label: "C1 - Versiert" },
          { value: "C2", label: "C2 - Kompetent" },
          { value: "Native", label: "Muttersprachler" },
        ],
        w = [
          { value: "engineering", label: "Ingenieurwesen & Fertigung" },
          { value: "healthcare", label: "Gesundheitswesen & Pflege" },
          { value: "it", label: "IT & Technologie" },
          { value: "hospitality", label: "Gastgewerbe & Tourismus" },
          { value: "logistics", label: "Logistik & Supply Chain" },
          { value: "sales", label: "Vertrieb & Gesch\xe4ft" },
          { value: "other", label: "Andere Bereiche" },
        ],
        A = [
          { value: "india", label: "Indien" },
          { value: "philippines", label: "Philippinen" },
          { value: "vietnam", label: "Vietnam" },
          { value: "bangladesh", label: "Bangladesch" },
          { value: "pakistan", label: "Pakistan" },
          { value: "nepal", label: "Nepal" },
          { value: "indonesia", label: "Indonesien" },
          { value: "sri-lanka", label: "Sri Lanka" },
          { value: "other", label: "Anderes Land" },
        ],
        k = {
          badge: "\uD83D\uDEA8 CORPORATE INTEL",
          title: "Wie deutsche CEOs die Uni \xfcbersprungen haben",
          description:
            "847 F\xfchrungsprofile von BMW, Siemens & Mercedes-Benz analysiert!",
          mockupTitle: "Wir haben 847 deutsche CEOs verfolgt:",
          mockupSubtitle: "73% haben nie studiert",
          mockupBrands: "BMW • Siemens • Mercedes",
          mockupPages: "67 Seiten Insider-Intel",
        };
      function F() {
        let [e, s] = (0, a.useState)({}),
          [t, v] = (0, a.useState)(!1),
          [F, S] = (0, a.useState)({}),
          [E, P] = (0, a.useState)(4247),
          [I, C] = (0, a.useState)(!1),
          [D, B] = (0, a.useState)("");
        (0, a.useState)(() => {
          let e = setInterval(() => {
            P((e) => e + Math.floor(3 * Math.random()));
          }, 15e3);
          return () => clearInterval(e);
        });
        let z = (e, t) => {
            (s((s) => ({ ...s, [e]: t })),
              F[e] && S((s) => ({ ...s, [e]: void 0 })));
          },
          V = async (s) => {
            (s.preventDefault(), v(!0), S({}));
            try {
              let s = N.parse(e),
                t = await fetch("/api/lead-magnets/download", {
                  method: "POST",
                  headers: { "Content-Type": "application/json" },
                  body: JSON.stringify({
                    ...s,
                    pdfType: "german-corporate-intelligence",
                    placement: "homepage-post-explanation-de",
                  }),
                }),
                r = await t.json();
              if (!t.ok)
                throw Error(
                  r.error || "Formular konnte nicht \xfcbermittelt werden",
                );
              (B(s.email), C(!0));
            } catch (e) {
              if (e instanceof f.G) {
                let s = {};
                (e.errors.forEach((e) => {
                  e.path[0] && (s[e.path[0]] = e.message);
                }),
                  S(s),
                  (0, j.oR)({
                    title: "Validierungsfehler im Formular",
                    description:
                      "Bitte \xfcberpr\xfcfen Sie das Formular und versuchen Sie es erneut",
                    variant: "destructive",
                  }));
              } else
                (console.error("Form submission error:", e),
                  (0, j.oR)({
                    title: "Etwas ist schiefgelaufen",
                    description:
                      "Bitte versuchen Sie es erneut. Wenn das Problem weiterhin besteht, wenden Sie sich an den Support.",
                    variant: "destructive",
                  }));
            } finally {
              v(!1);
            }
          };
        return (0, r.jsx)("section", {
          className: "relative py-12 overflow-hidden",
          children: (0, r.jsx)("div", {
            className: "container relative z-10 mx-auto px-4",
            children: (0, r.jsx)("div", {
              className: "max-w-7xl mx-auto",
              children: (0, r.jsx)(l.P.div, {
                initial: { opacity: 0, y: 20 },
                whileInView: { opacity: 1, y: 0 },
                viewport: { once: !0 },
                transition: { duration: 0.5 },
                className: "relative",
                children: (0, r.jsxs)(p.Zp, {
                  className:
                    "relative bg-slate-800/90 backdrop-blur-xl border border-slate-700/50 shadow-2xl overflow-hidden",
                  children: [
                    (0, r.jsx)("div", {
                      className:
                        "absolute inset-0 bg-gradient-to-r from-primary/5 via-transparent to-primary/5",
                    }),
                    (0, r.jsxs)("div", {
                      className: "relative p-4 sm:p-6 lg:p-8",
                      children: [
                        (0, r.jsxs)("div", {
                          className: "block lg:hidden space-y-6",
                          children: [
                            (0, r.jsxs)("div", {
                              className: "text-center",
                              children: [
                                (0, r.jsxs)(b.E, {
                                  variant: "secondary",
                                  className:
                                    "bg-primary/20 text-primary border-primary/30 px-3 py-1 text-xs font-bold mb-3",
                                  children: [
                                    (0, r.jsx)(i.A, {
                                      className: "w-3 h-3 mr-1",
                                    }),
                                    k.badge,
                                  ],
                                }),
                                (0, r.jsxs)("h3", {
                                  className:
                                    "text-lg sm:text-xl font-bold text-white leading-tight mb-2",
                                  children: [
                                    (0, r.jsx)("span", {
                                      className:
                                        "bg-gradient-to-r from-primary to-primary/80 bg-clip-text text-transparent",
                                      children: "ENTH\xdcLLT:",
                                    }),
                                    " ",
                                    k.title,
                                  ],
                                }),
                                (0, r.jsx)("p", {
                                  className: "text-sm text-slate-300 mb-4",
                                  children: k.description,
                                }),
                                (0, r.jsxs)("div", {
                                  className:
                                    "flex items-center justify-center gap-4 text-xs mb-4",
                                  children: [
                                    (0, r.jsxs)("div", {
                                      className: "flex items-center gap-1",
                                      children: [
                                        (0, r.jsx)(n.A, {
                                          className: "w-3 h-3 text-primary",
                                        }),
                                        (0, r.jsx)("span", {
                                          className: "font-bold text-primary",
                                          children: E.toLocaleString(),
                                        }),
                                        (0, r.jsx)("span", {
                                          className: "text-slate-400",
                                          children: "heruntergeladen",
                                        }),
                                      ],
                                    }),
                                    (0, r.jsxs)("div", {
                                      className: "flex items-center gap-1",
                                      children: [
                                        [
                                          void 0,
                                          void 0,
                                          void 0,
                                          void 0,
                                          void 0,
                                        ].map((e, s) =>
                                          (0, r.jsx)(
                                            d.A,
                                            {
                                              className:
                                                "w-3 h-3 fill-yellow-400 text-yellow-400",
                                            },
                                            s,
                                          ),
                                        ),
                                        (0, r.jsx)("span", {
                                          className: "text-slate-400",
                                          children: "(4.9)",
                                        }),
                                      ],
                                    }),
                                  ],
                                }),
                              ],
                            }),
                            (0, r.jsx)("div", {
                              children: I
                                ? (0, r.jsxs)("div", {
                                    className:
                                      "bg-green-50 border-2 border-green-200 rounded-xl p-4 text-center space-y-3",
                                    children: [
                                      (0, r.jsx)("div", {
                                        className: "flex justify-center",
                                        children: (0, r.jsx)("div", {
                                          className:
                                            "w-12 h-12 bg-green-100 rounded-full flex items-center justify-center",
                                          children: (0, r.jsx)(c.A, {
                                            className: "w-6 h-6 text-green-600",
                                          }),
                                        }),
                                      }),
                                      (0, r.jsxs)("div", {
                                        children: [
                                          (0, r.jsx)("h4", {
                                            className:
                                              "text-lg font-bold text-green-800 mb-2",
                                            children:
                                              "\uD83C\uDFAF PDF erfolgreich gesendet!",
                                          }),
                                          (0, r.jsx)("p", {
                                            className:
                                              "text-green-700 text-sm leading-relaxed",
                                            children:
                                              "Ihre exklusive Analyse wurde gesendet an:",
                                          }),
                                          (0, r.jsx)("p", {
                                            className:
                                              "font-bold text-green-800 text-base mt-1",
                                            children: D,
                                          }),
                                          (0, r.jsx)("p", {
                                            className:
                                              "text-green-600 text-xs mt-2",
                                            children:
                                              "Bitte \xfcberpr\xfcfen Sie Ihren Posteingang (und Spam-Ordner) f\xfcr die E-Mail mit dem PDF-Anhang.",
                                          }),
                                        ],
                                      }),
                                    ],
                                  })
                                : (0, r.jsxs)("div", {
                                    className:
                                      "bg-white/95 backdrop-blur-xl rounded-xl border border-slate-200/50 p-4 shadow-xl",
                                    children: [
                                      (0, r.jsxs)("div", {
                                        className: "space-y-2 mb-4",
                                        children: [
                                          (0, r.jsx)("h4", {
                                            className:
                                              "text-base font-bold text-slate-900",
                                            children:
                                              "Holen Sie sich Ihre exklusive Analyse",
                                          }),
                                          (0, r.jsxs)(b.E, {
                                            variant: "outline",
                                            className:
                                              "border-primary/30 bg-primary/15 text-primary text-xs font-bold",
                                            children: [
                                              (0, r.jsx)(c.A, {
                                                className: "w-3 h-3 mr-1",
                                              }),
                                              "Kostenloses Angebot f\xfcr begrenzte Zeit",
                                            ],
                                          }),
                                        ],
                                      }),
                                      (0, r.jsxs)("form", {
                                        onSubmit: V,
                                        className: "space-y-3",
                                        children: [
                                          (0, r.jsxs)("div", {
                                            className:
                                              "grid grid-cols-1 sm:grid-cols-2 gap-3",
                                            children: [
                                              (0, r.jsx)(u.p, {
                                                placeholder: "Vorname *",
                                                value: e.firstName || "",
                                                onChange: (e) =>
                                                  z(
                                                    "firstName",
                                                    e.target.value,
                                                  ),
                                                className:
                                                  "bg-white/90 border-slate-300 h-10 text-slate-900 text-sm ".concat(
                                                    F.firstName
                                                      ? "border-red-500"
                                                      : "",
                                                  ),
                                                disabled: t,
                                                required: !0,
                                              }),
                                              (0, r.jsx)(u.p, {
                                                placeholder: "Nachname *",
                                                value: e.lastName || "",
                                                onChange: (e) =>
                                                  z("lastName", e.target.value),
                                                className:
                                                  "bg-white/90 border-slate-300 h-10 text-slate-900 text-sm ".concat(
                                                    F.lastName
                                                      ? "border-red-500"
                                                      : "",
                                                  ),
                                                disabled: t,
                                                required: !0,
                                              }),
                                            ],
                                          }),
                                          (0, r.jsx)(u.p, {
                                            type: "email",
                                            placeholder:
                                              "Ihre E-Mail-Adresse *",
                                            value: e.email || "",
                                            onChange: (e) =>
                                              z("email", e.target.value),
                                            className:
                                              "bg-white/90 border-slate-300 h-10 text-slate-900 text-sm ".concat(
                                                F.email ? "border-red-500" : "",
                                              ),
                                            disabled: t,
                                            required: !0,
                                          }),
                                          (0, r.jsxs)("div", {
                                            className: "grid grid-cols-1 gap-3",
                                            children: [
                                              (0, r.jsxs)(g.l6, {
                                                onValueChange: (e) =>
                                                  z("germanLevel", e),
                                                disabled: t,
                                                required: !0,
                                                children: [
                                                  (0, r.jsx)(g.bq, {
                                                    className:
                                                      "bg-white/90 border-slate-300 h-10 text-slate-900 text-sm ".concat(
                                                        F.germanLevel
                                                          ? "border-red-500"
                                                          : "",
                                                      ),
                                                    children: (0, r.jsx)(g.yv, {
                                                      placeholder:
                                                        "Deutschniveau *",
                                                    }),
                                                  }),
                                                  (0, r.jsx)(g.gC, {
                                                    className:
                                                      "bg-white border-slate-300",
                                                    children: y.map((e) =>
                                                      (0, r.jsx)(
                                                        g.eb,
                                                        {
                                                          value: e.value,
                                                          className: "text-sm",
                                                          children: e.label,
                                                        },
                                                        e.value,
                                                      ),
                                                    ),
                                                  }),
                                                ],
                                              }),
                                              (0, r.jsxs)(g.l6, {
                                                onValueChange: (e) =>
                                                  z("interestedField", e),
                                                disabled: t,
                                                required: !0,
                                                children: [
                                                  (0, r.jsx)(g.bq, {
                                                    className:
                                                      "bg-white/90 border-slate-300 h-10 text-slate-900 text-sm ".concat(
                                                        F.interestedField
                                                          ? "border-red-500"
                                                          : "",
                                                      ),
                                                    children: (0, r.jsx)(g.yv, {
                                                      placeholder:
                                                        "Interessensgebiet *",
                                                    }),
                                                  }),
                                                  (0, r.jsx)(g.gC, {
                                                    className:
                                                      "bg-white border-slate-300",
                                                    children: w.map((e) =>
                                                      (0, r.jsx)(
                                                        g.eb,
                                                        {
                                                          value: e.value,
                                                          className: "text-sm",
                                                          children: e.label,
                                                        },
                                                        e.value,
                                                      ),
                                                    ),
                                                  }),
                                                ],
                                              }),
                                              (0, r.jsxs)(g.l6, {
                                                onValueChange: (e) =>
                                                  z("currentCountry", e),
                                                disabled: t,
                                                required: !0,
                                                children: [
                                                  (0, r.jsx)(g.bq, {
                                                    className:
                                                      "bg-white/90 border-slate-300 h-10 text-slate-900 text-sm ".concat(
                                                        F.currentCountry
                                                          ? "border-red-500"
                                                          : "",
                                                      ),
                                                    children: (0, r.jsx)(g.yv, {
                                                      placeholder:
                                                        "Aktuelles Land *",
                                                    }),
                                                  }),
                                                  (0, r.jsx)(g.gC, {
                                                    className:
                                                      "bg-white border-slate-300",
                                                    children: A.map((e) =>
                                                      (0, r.jsx)(
                                                        g.eb,
                                                        {
                                                          value: e.value,
                                                          className: "text-sm",
                                                          children: e.label,
                                                        },
                                                        e.value,
                                                      ),
                                                    ),
                                                  }),
                                                ],
                                              }),
                                            ],
                                          }),
                                          (0, r.jsx)(h.$, {
                                            type: "submit",
                                            size: "sm",
                                            className:
                                              "w-full h-12 bg-gradient-to-r from-red-600 to-orange-600 hover:from-red-700 hover:to-orange-700 text-white font-bold text-sm transition-all duration-300 transform hover:scale-[1.02] shadow-lg",
                                            disabled: t,
                                            children: t
                                              ? (0, r.jsxs)(r.Fragment, {
                                                  children: [
                                                    (0, r.jsx)("div", {
                                                      className:
                                                        "w-4 h-4 border-2 border-white/30 border-t-white rounded-full animate-spin mr-2",
                                                    }),
                                                    "Analyse wird gesendet...",
                                                  ],
                                                })
                                              : (0, r.jsxs)(r.Fragment, {
                                                  children: [
                                                    (0, r.jsx)(n.A, {
                                                      className: "w-4 h-4 mr-2",
                                                    }),
                                                    "\uD83C\uDFAF EXKLUSIVE INSIGHTS JETZT HOLEN",
                                                    (0, r.jsx)(o.A, {
                                                      className: "w-4 h-4 ml-2",
                                                    }),
                                                  ],
                                                }),
                                          }),
                                          (0, r.jsxs)("div", {
                                            className:
                                              "flex items-center justify-center gap-4 text-xs text-slate-600 pt-1",
                                            children: [
                                              (0, r.jsxs)("div", {
                                                className:
                                                  "flex items-center gap-1",
                                                children: [
                                                  (0, r.jsx)(m.A, {
                                                    className: "w-3 h-3",
                                                  }),
                                                  (0, r.jsx)("span", {
                                                    children: "Sicher",
                                                  }),
                                                ],
                                              }),
                                              (0, r.jsxs)("div", {
                                                className:
                                                  "flex items-center gap-1",
                                                children: [
                                                  (0, r.jsx)(x.A, {
                                                    className: "w-3 h-3",
                                                  }),
                                                  (0, r.jsx)("span", {
                                                    children: "Sofort",
                                                  }),
                                                ],
                                              }),
                                            ],
                                          }),
                                          Object.keys(F).length > 0 &&
                                            (0, r.jsx)("p", {
                                              className:
                                                "text-red-500 text-xs text-center",
                                              children:
                                                "Bitte f\xfcllen Sie alle erforderlichen Felder aus",
                                            }),
                                        ],
                                      }),
                                    ],
                                  }),
                            }),
                          ],
                        }),
                        (0, r.jsx)("div", {
                          className: "hidden lg:block",
                          children: (0, r.jsxs)("div", {
                            className:
                              "grid lg:grid-cols-12 gap-6 items-center",
                            children: [
                              (0, r.jsx)("div", {
                                className:
                                  "lg:col-span-3 flex justify-center lg:justify-start",
                                children: (0, r.jsxs)("div", {
                                  className: "relative group",
                                  children: [
                                    (0, r.jsx)("div", {
                                      className:
                                        "absolute -inset-4 bg-gradient-to-br from-primary/30 to-secondary/30 rounded-2xl blur-xl opacity-70",
                                    }),
                                    (0, r.jsx)("div", {
                                      className:
                                        "relative bg-white rounded-xl shadow-2xl p-6 transform rotate-[-6deg] hover:rotate-[-3deg] transition-all duration-300 w-48 h-64",
                                      children: (0, r.jsxs)("div", {
                                        className:
                                          "h-full bg-gradient-to-br from-slate-50 to-slate-100 rounded-lg border-2 border-slate-200 flex flex-col p-4",
                                        children: [
                                          (0, r.jsxs)("div", {
                                            className:
                                              "text-sm font-bold text-primary mb-3 flex items-center gap-2",
                                            children: [
                                              (0, r.jsx)("div", {
                                                className:
                                                  "w-2 h-2 bg-primary rounded-full",
                                              }),
                                              "EXKLUSIVE FORSCHUNG",
                                            ],
                                          }),
                                          (0, r.jsxs)("div", {
                                            className:
                                              "text-xs font-bold text-slate-900 mb-4 leading-tight",
                                            children: [
                                              k.mockupTitle,
                                              (0, r.jsx)("br", {}),
                                              (0, r.jsx)("span", {
                                                className: "text-primary",
                                                children: k.mockupSubtitle,
                                              }),
                                            ],
                                          }),
                                          (0, r.jsxs)("div", {
                                            className: "space-y-2 flex-1",
                                            children: [
                                              (0, r.jsx)("div", {
                                                className:
                                                  "h-2 bg-slate-300 rounded w-full",
                                              }),
                                              (0, r.jsx)("div", {
                                                className:
                                                  "h-2 bg-slate-300 rounded w-5/6",
                                              }),
                                              (0, r.jsx)("div", {
                                                className:
                                                  "h-2 bg-slate-300 rounded w-4/5",
                                              }),
                                              (0, r.jsx)("div", {
                                                className:
                                                  "h-4 bg-primary/10 border border-primary/20 rounded mt-3 flex items-center justify-center",
                                                children: (0, r.jsx)("div", {
                                                  className:
                                                    "text-[8px] font-bold text-primary",
                                                  children: k.mockupBrands,
                                                }),
                                              }),
                                              (0, r.jsx)("div", {
                                                className:
                                                  "h-2 bg-slate-300 rounded w-3/4",
                                              }),
                                              (0, r.jsx)("div", {
                                                className:
                                                  "h-2 bg-slate-300 rounded w-full",
                                              }),
                                              (0, r.jsx)("div", {
                                                className:
                                                  "h-2 bg-slate-300 rounded w-2/3",
                                              }),
                                              (0, r.jsx)("div", {
                                                className:
                                                  "h-2 bg-slate-300 rounded w-5/6",
                                              }),
                                            ],
                                          }),
                                          (0, r.jsx)("div", {
                                            className:
                                              "text-xs text-slate-600 mt-4 font-medium text-center",
                                            children: k.mockupPages,
                                          }),
                                        ],
                                      }),
                                    }),
                                  ],
                                }),
                              }),
                              (0, r.jsxs)("div", {
                                className: "lg:col-span-4 space-y-3",
                                children: [
                                  (0, r.jsxs)(b.E, {
                                    variant: "secondary",
                                    className:
                                      "bg-primary/20 text-primary border-primary/30 px-3 py-1 text-xs font-bold",
                                    children: [
                                      (0, r.jsx)(i.A, {
                                        className: "w-3 h-3 mr-1",
                                      }),
                                      k.badge,
                                    ],
                                  }),
                                  (0, r.jsxs)("h3", {
                                    className:
                                      "text-xl lg:text-2xl font-bold text-white leading-tight",
                                    children: [
                                      (0, r.jsx)("span", {
                                        className:
                                          "bg-gradient-to-r from-primary to-primary/80 bg-clip-text text-transparent",
                                        children: "ENTH\xdcLLT:",
                                      }),
                                      " ",
                                      k.title,
                                    ],
                                  }),
                                  (0, r.jsx)("p", {
                                    className: "text-sm text-slate-300",
                                    children: k.description,
                                  }),
                                  (0, r.jsxs)("div", {
                                    className:
                                      "flex items-center gap-4 text-xs",
                                    children: [
                                      (0, r.jsxs)("div", {
                                        className: "flex items-center gap-1",
                                        children: [
                                          (0, r.jsx)(n.A, {
                                            className: "w-3 h-3 text-primary",
                                          }),
                                          (0, r.jsx)("span", {
                                            className: "font-bold text-primary",
                                            children: E.toLocaleString(),
                                          }),
                                          (0, r.jsx)("span", {
                                            className: "text-slate-400",
                                            children:
                                              "Profis haben heruntergeladen",
                                          }),
                                        ],
                                      }),
                                      (0, r.jsxs)("div", {
                                        className: "flex items-center gap-1",
                                        children: [
                                          [
                                            void 0,
                                            void 0,
                                            void 0,
                                            void 0,
                                            void 0,
                                          ].map((e, s) =>
                                            (0, r.jsx)(
                                              d.A,
                                              {
                                                className:
                                                  "w-3 h-3 fill-yellow-400 text-yellow-400",
                                              },
                                              s,
                                            ),
                                          ),
                                          (0, r.jsx)("span", {
                                            className: "text-slate-400",
                                            children: "(4.9)",
                                          }),
                                        ],
                                      }),
                                    ],
                                  }),
                                ],
                              }),
                              (0, r.jsx)("div", {
                                className: "lg:col-span-5",
                                children: I
                                  ? (0, r.jsxs)("div", {
                                      className:
                                        "bg-green-50 border-2 border-green-200 rounded-xl p-6 text-center space-y-4",
                                      children: [
                                        (0, r.jsx)("div", {
                                          className: "flex justify-center",
                                          children: (0, r.jsx)("div", {
                                            className:
                                              "w-16 h-16 bg-green-100 rounded-full flex items-center justify-center",
                                            children: (0, r.jsx)(c.A, {
                                              className:
                                                "w-8 h-8 text-green-600",
                                            }),
                                          }),
                                        }),
                                        (0, r.jsxs)("div", {
                                          children: [
                                            (0, r.jsx)("h4", {
                                              className:
                                                "text-xl font-bold text-green-800 mb-3",
                                              children:
                                                "\uD83C\uDFAF PDF erfolgreich gesendet!",
                                            }),
                                            (0, r.jsx)("p", {
                                              className:
                                                "text-green-700 text-base leading-relaxed",
                                              children:
                                                "Ihre exklusive Analyse wurde gesendet an:",
                                            }),
                                            (0, r.jsx)("p", {
                                              className:
                                                "font-bold text-green-800 text-lg mt-2",
                                              children: D,
                                            }),
                                            (0, r.jsx)("p", {
                                              className:
                                                "text-green-600 text-sm mt-3",
                                              children:
                                                "Bitte \xfcberpr\xfcfen Sie Ihren Posteingang (und Spam-Ordner) f\xfcr die E-Mail mit dem PDF-Anhang.",
                                            }),
                                          ],
                                        }),
                                      ],
                                    })
                                  : (0, r.jsxs)("div", {
                                      className:
                                        "bg-white/95 backdrop-blur-xl rounded-xl border border-slate-200/50 p-4 shadow-xl",
                                      children: [
                                        (0, r.jsxs)("div", {
                                          className: "space-y-3 mb-4",
                                          children: [
                                            (0, r.jsx)("h4", {
                                              className:
                                                "text-lg font-bold text-slate-900",
                                              children:
                                                "Holen Sie sich Ihre exklusive Analyse",
                                            }),
                                            (0, r.jsxs)(b.E, {
                                              variant: "outline",
                                              className:
                                                "border-primary/30 bg-primary/15 text-primary text-xs font-bold",
                                              children: [
                                                (0, r.jsx)(c.A, {
                                                  className: "w-3 h-3 mr-1",
                                                }),
                                                "Kostenloses Angebot f\xfcr begrenzte Zeit",
                                              ],
                                            }),
                                          ],
                                        }),
                                        (0, r.jsxs)("form", {
                                          onSubmit: V,
                                          className: "space-y-3",
                                          children: [
                                            (0, r.jsxs)("div", {
                                              className:
                                                "grid grid-cols-2 gap-2",
                                              children: [
                                                (0, r.jsx)(u.p, {
                                                  placeholder: "Vorname *",
                                                  value: e.firstName || "",
                                                  onChange: (e) =>
                                                    z(
                                                      "firstName",
                                                      e.target.value,
                                                    ),
                                                  className:
                                                    "bg-white/90 border-slate-300 h-9 text-slate-900 text-sm ".concat(
                                                      F.firstName
                                                        ? "border-red-500"
                                                        : "",
                                                    ),
                                                  disabled: t,
                                                  required: !0,
                                                }),
                                                (0, r.jsx)(u.p, {
                                                  placeholder: "Nachname *",
                                                  value: e.lastName || "",
                                                  onChange: (e) =>
                                                    z(
                                                      "lastName",
                                                      e.target.value,
                                                    ),
                                                  className:
                                                    "bg-white/90 border-slate-300 h-9 text-slate-900 text-sm ".concat(
                                                      F.lastName
                                                        ? "border-red-500"
                                                        : "",
                                                    ),
                                                  disabled: t,
                                                  required: !0,
                                                }),
                                              ],
                                            }),
                                            (0, r.jsx)(u.p, {
                                              type: "email",
                                              placeholder:
                                                "Ihre E-Mail-Adresse *",
                                              value: e.email || "",
                                              onChange: (e) =>
                                                z("email", e.target.value),
                                              className:
                                                "bg-white/90 border-slate-300 h-9 text-slate-900 text-sm ".concat(
                                                  F.email
                                                    ? "border-red-500"
                                                    : "",
                                                ),
                                              disabled: t,
                                              required: !0,
                                            }),
                                            (0, r.jsxs)("div", {
                                              className:
                                                "grid grid-cols-3 gap-2",
                                              children: [
                                                (0, r.jsxs)(g.l6, {
                                                  onValueChange: (e) =>
                                                    z("germanLevel", e),
                                                  disabled: t,
                                                  required: !0,
                                                  children: [
                                                    (0, r.jsx)(g.bq, {
                                                      className:
                                                        "bg-white/90 border-slate-300 h-9 text-slate-900 text-sm ".concat(
                                                          F.germanLevel
                                                            ? "border-red-500"
                                                            : "",
                                                        ),
                                                      children: (0, r.jsx)(
                                                        g.yv,
                                                        {
                                                          placeholder:
                                                            "Deutsch *",
                                                        },
                                                      ),
                                                    }),
                                                    (0, r.jsx)(g.gC, {
                                                      className:
                                                        "bg-white border-slate-300",
                                                      children: y.map((e) =>
                                                        (0, r.jsx)(
                                                          g.eb,
                                                          {
                                                            value: e.value,
                                                            className:
                                                              "text-sm",
                                                            children: e.value,
                                                          },
                                                          e.value,
                                                        ),
                                                      ),
                                                    }),
                                                  ],
                                                }),
                                                (0, r.jsxs)(g.l6, {
                                                  onValueChange: (e) =>
                                                    z("interestedField", e),
                                                  disabled: t,
                                                  required: !0,
                                                  children: [
                                                    (0, r.jsx)(g.bq, {
                                                      className:
                                                        "bg-white/90 border-slate-300 h-9 text-slate-900 text-sm ".concat(
                                                          F.interestedField
                                                            ? "border-red-500"
                                                            : "",
                                                        ),
                                                      children: (0, r.jsx)(
                                                        g.yv,
                                                        {
                                                          placeholder:
                                                            "Bereich *",
                                                        },
                                                      ),
                                                    }),
                                                    (0, r.jsxs)(g.gC, {
                                                      className:
                                                        "bg-white border-slate-300",
                                                      children: [
                                                        (0, r.jsx)(g.eb, {
                                                          value: "engineering",
                                                          className: "text-sm",
                                                          children:
                                                            "Ingenieurwesen",
                                                        }),
                                                        (0, r.jsx)(g.eb, {
                                                          value: "healthcare",
                                                          className: "text-sm",
                                                          children:
                                                            "Gesundheitswesen",
                                                        }),
                                                        (0, r.jsx)(g.eb, {
                                                          value: "it",
                                                          className: "text-sm",
                                                          children: "IT & Tech",
                                                        }),
                                                        (0, r.jsx)(g.eb, {
                                                          value: "hospitality",
                                                          className: "text-sm",
                                                          children:
                                                            "Gastgewerbe",
                                                        }),
                                                        (0, r.jsx)(g.eb, {
                                                          value: "logistics",
                                                          className: "text-sm",
                                                          children: "Logistik",
                                                        }),
                                                        (0, r.jsx)(g.eb, {
                                                          value: "other",
                                                          className: "text-sm",
                                                          children: "Andere",
                                                        }),
                                                      ],
                                                    }),
                                                  ],
                                                }),
                                                (0, r.jsxs)(g.l6, {
                                                  onValueChange: (e) =>
                                                    z("currentCountry", e),
                                                  disabled: t,
                                                  required: !0,
                                                  children: [
                                                    (0, r.jsx)(g.bq, {
                                                      className:
                                                        "bg-white/90 border-slate-300 h-9 text-slate-900 text-sm ".concat(
                                                          F.currentCountry
                                                            ? "border-red-500"
                                                            : "",
                                                        ),
                                                      children: (0, r.jsx)(
                                                        g.yv,
                                                        {
                                                          placeholder: "Land *",
                                                        },
                                                      ),
                                                    }),
                                                    (0, r.jsxs)(g.gC, {
                                                      className:
                                                        "bg-white border-slate-300",
                                                      children: [
                                                        (0, r.jsx)(g.eb, {
                                                          value: "india",
                                                          className: "text-sm",
                                                          children: "Indien",
                                                        }),
                                                        (0, r.jsx)(g.eb, {
                                                          value: "philippines",
                                                          className: "text-sm",
                                                          children:
                                                            "Philippinen",
                                                        }),
                                                        (0, r.jsx)(g.eb, {
                                                          value: "vietnam",
                                                          className: "text-sm",
                                                          children: "Vietnam",
                                                        }),
                                                        (0, r.jsx)(g.eb, {
                                                          value: "bangladesh",
                                                          className: "text-sm",
                                                          children:
                                                            "Bangladesch",
                                                        }),
                                                        (0, r.jsx)(g.eb, {
                                                          value: "pakistan",
                                                          className: "text-sm",
                                                          children: "Pakistan",
                                                        }),
                                                        (0, r.jsx)(g.eb, {
                                                          value: "other",
                                                          className: "text-sm",
                                                          children: "Andere",
                                                        }),
                                                      ],
                                                    }),
                                                  ],
                                                }),
                                              ],
                                            }),
                                            (0, r.jsx)(h.$, {
                                              type: "submit",
                                              size: "sm",
                                              className:
                                                "w-full h-10 bg-gradient-to-r from-red-600 to-orange-600 hover:from-red-700 hover:to-orange-700 text-white font-bold text-sm transition-all duration-300 transform hover:scale-[1.02] shadow-lg",
                                              disabled: t,
                                              children: t
                                                ? (0, r.jsxs)(r.Fragment, {
                                                    children: [
                                                      (0, r.jsx)("div", {
                                                        className:
                                                          "w-4 h-4 border-2 border-white/30 border-t-white rounded-full animate-spin mr-2",
                                                      }),
                                                      "Analyse wird gesendet...",
                                                    ],
                                                  })
                                                : (0, r.jsxs)(r.Fragment, {
                                                    children: [
                                                      (0, r.jsx)(n.A, {
                                                        className:
                                                          "w-4 h-4 mr-2",
                                                      }),
                                                      "\uD83C\uDFAF EXKLUSIVE INSIGHTS JETZT HOLEN",
                                                      (0, r.jsx)(o.A, {
                                                        className:
                                                          "w-4 h-4 ml-2",
                                                      }),
                                                    ],
                                                  }),
                                            }),
                                            (0, r.jsxs)("div", {
                                              className:
                                                "flex items-center justify-center gap-4 text-xs text-slate-600 pt-1",
                                              children: [
                                                (0, r.jsxs)("div", {
                                                  className:
                                                    "flex items-center gap-1",
                                                  children: [
                                                    (0, r.jsx)(m.A, {
                                                      className: "w-3 h-3",
                                                    }),
                                                    (0, r.jsx)("span", {
                                                      children: "Sicher",
                                                    }),
                                                  ],
                                                }),
                                                (0, r.jsxs)("div", {
                                                  className:
                                                    "flex items-center gap-1",
                                                  children: [
                                                    (0, r.jsx)(x.A, {
                                                      className: "w-3 h-3",
                                                    }),
                                                    (0, r.jsx)("span", {
                                                      children: "Sofort",
                                                    }),
                                                  ],
                                                }),
                                              ],
                                            }),
                                            Object.keys(F).length > 0 &&
                                              (0, r.jsx)("p", {
                                                className:
                                                  "text-red-500 text-xs text-center",
                                                children:
                                                  "Bitte f\xfcllen Sie alle erforderlichen Felder aus",
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
                  ],
                }),
              }),
            }),
          }),
        });
      }
    },
    56388: (e, s, t) => {
      "use strict";
      t.d(s, { NursingCTASection: () => b });
      var r = t(70207),
        a = t(52461),
        l = t(33482),
        i = t(79024),
        n = t(28131),
        d = t(46031),
        c = t(5101),
        o = t(70005),
        m = t(39441),
        x = t(61216),
        h = t(10542),
        u = t.n(h),
        g = t(82110);
      function b() {
        let e = [
          {
            icon: (0, r.jsx)(a.A, { className: "h-5 w-5 text-[#5D5DE9]" }),
            title: "High Demand",
            description: "40,000+ open positions",
          },
          {
            icon: (0, r.jsx)(l.A, { className: "h-5 w-5 text-[#2C3340]" }),
            title: "Paid Training",
            description: "€950-1,200 monthly",
          },
          {
            icon: (0, r.jsx)(i.A, { className: "h-5 w-5 text-[#5D5DE9]" }),
            title: "Career Growth",
            description: "€3,200+ after graduation",
          },
          {
            icon: (0, r.jsx)(n.A, { className: "h-5 w-5 text-[#2C3340]" }),
            title: "3-Year Program",
            description: "Professional qualification",
          },
        ];
        return (0, r.jsx)("section", {
          className:
            "py-12 sm:py-16 px-4 relative overflow-hidden bg-[#F7F8FA]",
          children: (0, r.jsxs)("div", {
            className: "container mx-auto relative",
            children: [
              (0, r.jsx)(x.X, {
                badge: "Healthcare Sector",
                badgeIcon: (0, r.jsx)(a.A, { className: "h-4 w-4" }),
                title: "Nursing Ausbildung in Germany",
                description:
                  "Start your healthcare career with guaranteed placement and excellent growth opportunities in Germany's high-demand healthcare sector.",
                level: 2,
              }),
              (0, r.jsxs)("div", {
                className:
                  "grid lg:grid-cols-2 gap-8 sm:gap-12 items-center mt-12",
                children: [
                  (0, r.jsxs)("div", {
                    className: "space-y-6 sm:space-y-8",
                    children: [
                      (0, r.jsx)("div", {
                        className:
                          "grid grid-cols-1 sm:grid-cols-2 gap-3 sm:gap-4",
                        children: e.map((e, s) =>
                          (0, r.jsxs)(
                            "div",
                            {
                              className:
                                "flex items-start gap-3 p-3 sm:p-4 rounded-2xl bg-white/80 backdrop-blur-sm border-2 border-[#2C3340]/10 hover:border-[#5D5DE9]/30 hover:shadow-lg transition-all duration-300",
                              children: [
                                (0, r.jsx)("div", {
                                  className: "flex-shrink-0 mt-1",
                                  children: e.icon,
                                }),
                                (0, r.jsxs)("div", {
                                  children: [
                                    (0, r.jsx)("h3", {
                                      className:
                                        "font-semibold text-sm mb-1 text-[#2C3340]",
                                      children: e.title,
                                    }),
                                    (0, r.jsx)("p", {
                                      className: "text-xs text-[#2C3340]/70",
                                      children: e.description,
                                    }),
                                  ],
                                }),
                              ],
                            },
                            s,
                          ),
                        ),
                      }),
                      (0, r.jsx)("div", {
                        children: (0, r.jsx)(m.$, {
                          asChild: !0,
                          size: "lg",
                          className:
                            "bg-[#5D5DE9] hover:bg-[#2C3340] text-white rounded-full px-8 py-6 text-base font-semibold shadow-lg hover:shadow-xl hover:-translate-y-1 transition-all duration-300",
                          children: (0, r.jsxs)(u(), {
                            href: "/nursing-germany",
                            children: [
                              "Explore Nursing Programs",
                              (0, r.jsx)(d.A, { className: "ml-2 h-5 w-5" }),
                            ],
                          }),
                        }),
                      }),
                      (0, r.jsxs)("div", {
                        className:
                          "flex flex-col sm:flex-row items-start sm:items-center gap-3 sm:gap-6 pt-4",
                        children: [
                          (0, r.jsxs)("div", {
                            className:
                              "flex items-center gap-2 bg-white/80 backdrop-blur-sm px-3 py-2 rounded-full",
                            children: [
                              (0, r.jsx)(c.A, {
                                className: "h-4 w-4 text-[#5D5DE9]",
                              }),
                              (0, r.jsx)("span", {
                                className:
                                  "text-xs sm:text-sm text-[#2C3340]/90 font-medium",
                                children: "5,000+ students enrolled",
                              }),
                            ],
                          }),
                          (0, r.jsxs)("div", {
                            className:
                              "flex items-center gap-2 bg-white/80 backdrop-blur-sm px-3 py-2 rounded-full",
                            children: [
                              (0, r.jsx)(o.A, {
                                className: "h-4 w-4 text-[#2C3340]",
                              }),
                              (0, r.jsx)("span", {
                                className:
                                  "text-xs sm:text-sm text-[#2C3340]/90 font-medium",
                                children: "98% placement rate",
                              }),
                            ],
                          }),
                        ],
                      }),
                    ],
                  }),
                  (0, r.jsxs)("div", {
                    className: "relative",
                    children: [
                      (0, r.jsx)("div", {
                        className:
                          "absolute -z-10 top-0 right-0 w-72 h-72 bg-[#5D5DE9]/10 rounded-full blur-3xl",
                      }),
                      (0, r.jsx)("div", {
                        className:
                          "absolute -z-10 bottom-0 left-0 w-60 h-60 bg-[#2C3340]/10 rounded-full blur-3xl",
                      }),
                      (0, r.jsxs)("div", {
                        className:
                          "relative rounded-2xl overflow-hidden bg-white/80 backdrop-blur-md p-4 sm:p-6 lg:p-8 border-2 border-[#2C3340]/10 shadow-xl mt-8 lg:mt-0",
                        children: [
                          (0, r.jsxs)("div", {
                            className:
                              "grid grid-cols-2 gap-3 sm:gap-4 mb-4 sm:mb-6",
                            children: [
                              (0, r.jsxs)("div", {
                                className:
                                  "bg-[#5D5DE9]/10 backdrop-blur-sm p-3 sm:p-4 rounded-2xl border-2 border-[#5D5DE9]/20",
                                children: [
                                  (0, r.jsx)("div", {
                                    className:
                                      "text-xl sm:text-2xl font-bold text-[#5D5DE9]",
                                    children: "40K+",
                                  }),
                                  (0, r.jsx)("div", {
                                    className:
                                      "text-xs text-[#2C3340]/70 font-medium",
                                    children: "Open Positions",
                                  }),
                                ],
                              }),
                              (0, r.jsxs)("div", {
                                className:
                                  "bg-[#2C3340]/10 backdrop-blur-sm p-3 sm:p-4 rounded-2xl border-2 border-[#2C3340]/20",
                                children: [
                                  (0, r.jsx)("div", {
                                    className:
                                      "text-xl sm:text-2xl font-bold text-[#2C3340]",
                                    children: "€3,200",
                                  }),
                                  (0, r.jsx)("div", {
                                    className:
                                      "text-xs text-[#2C3340]/70 font-medium",
                                    children: "Starting Salary",
                                  }),
                                ],
                              }),
                            ],
                          }),
                          (0, r.jsxs)("div", {
                            className: "space-y-3",
                            children: [
                              (0, r.jsx)("h4", {
                                className:
                                  "text-sm sm:text-base font-semibold text-[#2C3340]",
                                children: "Your Journey:",
                              }),
                              (0, r.jsx)("div", {
                                className: "space-y-2",
                                children: [
                                  {
                                    step: "Year 1",
                                    title: "Foundation",
                                    amount: "€950/mo",
                                  },
                                  {
                                    step: "Year 2",
                                    title: "Specialized",
                                    amount: "€1,050/mo",
                                  },
                                  {
                                    step: "Year 3",
                                    title: "Advanced",
                                    amount: "€1,200/mo",
                                  },
                                  {
                                    step: "Graduate",
                                    title: "Qualified Nurse",
                                    amount: "€3,200+/mo",
                                  },
                                ].map((e, s) =>
                                  (0, r.jsxs)(
                                    "div",
                                    {
                                      className:
                                        "flex items-center justify-between p-2 bg-white/60 backdrop-blur-sm rounded-xl border-2 border-[#2C3340]/10",
                                      children: [
                                        (0, r.jsxs)("div", {
                                          className: "flex items-center gap-2",
                                          children: [
                                            (0, r.jsx)("div", {
                                              className: (0, g.cn)(
                                                "w-2 h-2 rounded-full",
                                                s < 3
                                                  ? "bg-[#5D5DE9]"
                                                  : "bg-[#2C3340]",
                                              ),
                                            }),
                                            (0, r.jsx)("span", {
                                              className:
                                                "text-xs font-medium text-[#2C3340]",
                                              children: e.step,
                                            }),
                                            (0, r.jsx)("span", {
                                              className:
                                                "text-xs text-[#2C3340]/70",
                                              children: e.title,
                                            }),
                                          ],
                                        }),
                                        (0, r.jsx)("span", {
                                          className:
                                            "text-xs font-semibold text-[#2C3340]",
                                          children: e.amount,
                                        }),
                                      ],
                                    },
                                    s,
                                  ),
                                ),
                              }),
                            ],
                          }),
                          (0, r.jsxs)("div", {
                            className:
                              "mt-6 p-4 bg-[#EEF0F4]/80 backdrop-blur-sm rounded-2xl border-2 border-[#2C3340]/10",
                            children: [
                              (0, r.jsx)("h4", {
                                className:
                                  "text-sm font-semibold mb-2 text-[#2C3340]",
                                children: "Available Programs:",
                              }),
                              (0, r.jsx)("div", {
                                className: "grid grid-cols-2 gap-2",
                                children: [
                                  "General Nursing",
                                  "Geriatric Care",
                                  "Healthcare Assistant",
                                  "Medical Technology",
                                ].map((e, s) =>
                                  (0, r.jsxs)(
                                    "div",
                                    {
                                      className: "flex items-center gap-1",
                                      children: [
                                        (0, r.jsx)(o.A, {
                                          className: "h-3 w-3 text-[#2C3340]",
                                        }),
                                        (0, r.jsx)("span", {
                                          className:
                                            "text-xs text-[#2C3340]/90 font-medium",
                                          children: e,
                                        }),
                                      ],
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
            ],
          }),
        });
      }
    },
    70083: (e, s, t) => {
      "use strict";
      t.d(s, { AusbildungExplanationDE: () => m });
      var r = t(70207),
        a = t(74285),
        l = t(80268),
        i = t(34379),
        n = t(30478),
        d = t(79024),
        c = t(5101),
        o = t(82110);
      function m(e) {
        let { className: s } = e;
        return (0, r.jsxs)("section", {
          className: (0, o.cn)(
            "py-12 sm:py-16 md:py-20 relative overflow-hidden bg-muted/30",
            s,
          ),
          children: [
            (0, r.jsxs)("div", {
              className:
                "absolute inset-0 -z-10 overflow-hidden pointer-events-none",
              children: [
                (0, r.jsx)("div", {
                  className:
                    "absolute left-1/3 top-0 w-96 h-96 bg-blue-500/3 rounded-full blur-3xl opacity-60",
                }),
                (0, r.jsx)("div", {
                  className:
                    "absolute right-1/3 bottom-0 w-80 h-80 bg-primary/3 rounded-full blur-3xl opacity-60",
                }),
              ],
            }),
            (0, r.jsxs)("div", {
              className: "container mx-auto px-4 relative z-10",
              children: [
                (0, r.jsxs)("div", {
                  className: "text-center max-w-4xl mx-auto mb-12 sm:mb-16",
                  children: [
                    (0, r.jsx)("span", {
                      className:
                        "px-4 py-1.5 rounded-full bg-primary/10 border border-primary/10 backdrop-blur-sm text-primary text-sm font-medium inline-block mb-4",
                      children:
                        "\uD83C\uDDE9\uD83C\uDDEA Deutschlands Erfolgsgeheimnis",
                    }),
                    (0, r.jsx)("h2", {
                      className:
                        "text-2xl sm:text-3xl md:text-4xl lg:text-5xl font-bold tracking-tight mb-6 bg-gradient-to-b from-foreground to-muted-foreground bg-clip-text text-transparent",
                      children: "Was ist eine Ausbildung?",
                    }),
                    (0, r.jsxs)("p", {
                      className:
                        "text-base sm:text-lg md:text-xl text-muted-foreground leading-relaxed",
                      children: [
                        (0, r.jsx)("strong", {
                          className: "text-foreground",
                          children: "Ausbildung",
                        }),
                        " ist Deutschlands weltbekanntes duales Bildungssystem, das",
                        (0, r.jsx)("span", {
                          className: "text-primary font-semibold",
                          children: " praktische Arbeitserfahrung",
                        }),
                        " mit",
                        (0, r.jsx)("span", {
                          className: "text-primary font-semibold",
                          children: " theoretischer Bildung",
                        }),
                        " kombiniert. So starten 60% der Deutschen ihre Karriere!",
                      ],
                    }),
                  ],
                }),
                (0, r.jsx)("div", {
                  className: "max-w-5xl mx-auto mb-12 sm:mb-16",
                  children: (0, r.jsxs)("div", {
                    className:
                      "grid sm:grid-cols-1 md:grid-cols-2 gap-6 sm:gap-8",
                    children: [
                      (0, r.jsxs)("div", {
                        className:
                          "relative p-6 rounded-2xl border-2 border-red-200 bg-red-50/50 dark:bg-red-950/20 dark:border-red-800/30",
                        children: [
                          (0, r.jsx)("div", {
                            className: "absolute top-4 right-4",
                            children: (0, r.jsx)("div", {
                              className:
                                "w-8 h-8 rounded-full bg-red-500/20 flex items-center justify-center",
                              children: (0, r.jsx)("span", {
                                className: "text-red-600 text-lg font-bold",
                                children: "✗",
                              }),
                            }),
                          }),
                          (0, r.jsxs)("div", {
                            className: "flex items-center gap-4 mb-4",
                            children: [
                              (0, r.jsx)("div", {
                                className:
                                  "w-12 h-12 rounded-xl bg-red-100 dark:bg-red-900/30 flex items-center justify-center",
                                children: (0, r.jsx)(a.A, {
                                  className: "h-6 w-6 text-red-600",
                                }),
                              }),
                              (0, r.jsx)("h3", {
                                className:
                                  "text-xl font-bold text-red-700 dark:text-red-400",
                                children: "Traditionelle Universit\xe4t",
                              }),
                            ],
                          }),
                          (0, r.jsxs)("div", {
                            className: "space-y-3",
                            children: [
                              (0, r.jsxs)("div", {
                                className: "flex items-center gap-3",
                                children: [
                                  (0, r.jsx)("div", {
                                    className:
                                      "w-4 h-4 rounded-full bg-red-500/20 flex items-center justify-center",
                                    children: (0, r.jsx)("span", {
                                      className: "text-red-600 text-xs",
                                      children: "✗",
                                    }),
                                  }),
                                  (0, r.jsx)("span", {
                                    className:
                                      "text-sm text-red-700 dark:text-red-300",
                                    children: "Nur theoriefokussiertes Lernen",
                                  }),
                                ],
                              }),
                              (0, r.jsxs)("div", {
                                className: "flex items-center gap-3",
                                children: [
                                  (0, r.jsx)("div", {
                                    className:
                                      "w-4 h-4 rounded-full bg-red-500/20 flex items-center justify-center",
                                    children: (0, r.jsx)("span", {
                                      className: "text-red-600 text-xs",
                                      children: "✗",
                                    }),
                                  }),
                                  (0, r.jsx)("span", {
                                    className:
                                      "text-sm text-red-700 dark:text-red-300",
                                    children:
                                      "Kein Einkommen w\xe4hrend 4+ Jahren",
                                  }),
                                ],
                              }),
                              (0, r.jsxs)("div", {
                                className: "flex items-center gap-3",
                                children: [
                                  (0, r.jsx)("div", {
                                    className:
                                      "w-4 h-4 rounded-full bg-red-500/20 flex items-center justify-center",
                                    children: (0, r.jsx)("span", {
                                      className: "text-red-600 text-xs",
                                      children: "✗",
                                    }),
                                  }),
                                  (0, r.jsx)("span", {
                                    className:
                                      "text-sm text-red-700 dark:text-red-300",
                                    children: "Unsichere Jobaussichten",
                                  }),
                                ],
                              }),
                              (0, r.jsxs)("div", {
                                className: "flex items-center gap-3",
                                children: [
                                  (0, r.jsx)("div", {
                                    className:
                                      "w-4 h-4 rounded-full bg-red-500/20 flex items-center justify-center",
                                    children: (0, r.jsx)("span", {
                                      className: "text-red-600 text-xs",
                                      children: "✗",
                                    }),
                                  }),
                                  (0, r.jsx)("span", {
                                    className:
                                      "text-sm text-red-700 dark:text-red-300",
                                    children: "Hohe Studiengeb\xfchren",
                                  }),
                                ],
                              }),
                            ],
                          }),
                        ],
                      }),
                      (0, r.jsxs)("div", {
                        className:
                          "relative p-6 rounded-2xl border-2 border-green-200 bg-green-50/50 dark:bg-green-950/20 dark:border-green-800/30",
                        children: [
                          (0, r.jsx)("div", {
                            className: "absolute top-4 right-4",
                            children: (0, r.jsx)("div", {
                              className:
                                "w-8 h-8 rounded-full bg-green-500/20 flex items-center justify-center",
                              children: (0, r.jsx)("span", {
                                className: "text-green-600 text-lg font-bold",
                                children: "✓",
                              }),
                            }),
                          }),
                          (0, r.jsxs)("div", {
                            className: "flex items-center gap-4 mb-4",
                            children: [
                              (0, r.jsx)("div", {
                                className:
                                  "w-12 h-12 rounded-xl bg-green-100 dark:bg-green-900/30 flex items-center justify-center",
                                children: (0, r.jsx)(l.A, {
                                  className: "h-6 w-6 text-green-600",
                                }),
                              }),
                              (0, r.jsx)("h3", {
                                className:
                                  "text-xl font-bold text-green-700 dark:text-green-400",
                                children: "Deutsche Ausbildung",
                              }),
                            ],
                          }),
                          (0, r.jsxs)("div", {
                            className: "space-y-3",
                            children: [
                              (0, r.jsxs)("div", {
                                className: "flex items-center gap-3",
                                children: [
                                  (0, r.jsx)("div", {
                                    className:
                                      "w-4 h-4 rounded-full bg-green-500/20 flex items-center justify-center",
                                    children: (0, r.jsx)("span", {
                                      className: "text-green-600 text-xs",
                                      children: "✓",
                                    }),
                                  }),
                                  (0, r.jsx)("span", {
                                    className:
                                      "text-sm text-green-700 dark:text-green-300",
                                    children: "Theorie + praktische Erfahrung",
                                  }),
                                ],
                              }),
                              (0, r.jsxs)("div", {
                                className: "flex items-center gap-3",
                                children: [
                                  (0, r.jsx)("div", {
                                    className:
                                      "w-4 h-4 rounded-full bg-green-500/20 flex items-center justify-center",
                                    children: (0, r.jsx)("span", {
                                      className: "text-green-600 text-xs",
                                      children: "✓",
                                    }),
                                  }),
                                  (0, r.jsx)("span", {
                                    className:
                                      "text-sm text-green-700 dark:text-green-300",
                                    children: "Verdiene €900-1.300 monatlich",
                                  }),
                                ],
                              }),
                              (0, r.jsxs)("div", {
                                className: "flex items-center gap-3",
                                children: [
                                  (0, r.jsx)("div", {
                                    className:
                                      "w-4 h-4 rounded-full bg-green-500/20 flex items-center justify-center",
                                    children: (0, r.jsx)("span", {
                                      className: "text-green-600 text-xs",
                                      children: "✓",
                                    }),
                                  }),
                                  (0, r.jsx)("span", {
                                    className:
                                      "text-sm text-green-700 dark:text-green-300",
                                    children: "85% Jobvermittlungsgarantie",
                                  }),
                                ],
                              }),
                              (0, r.jsxs)("div", {
                                className: "flex items-center gap-3",
                                children: [
                                  (0, r.jsx)("div", {
                                    className:
                                      "w-4 h-4 rounded-full bg-green-500/20 flex items-center justify-center",
                                    children: (0, r.jsx)("span", {
                                      className: "text-green-600 text-xs",
                                      children: "✓",
                                    }),
                                  }),
                                  (0, r.jsx)("span", {
                                    className:
                                      "text-sm text-green-700 dark:text-green-300",
                                    children:
                                      "K\xfcrzere 2-3,5 Jahre Programme",
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
                (0, r.jsxs)("div", {
                  className:
                    "grid sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4 sm:gap-6",
                  children: [
                    (0, r.jsxs)("div", {
                      className:
                        "text-center p-4 sm:p-6 rounded-2xl border border-border/60 bg-card/40 backdrop-blur-md hover:shadow-md transition-all duration-300",
                      children: [
                        (0, r.jsx)("div", {
                          className:
                            "w-12 h-12 rounded-lg bg-blue-500/10 text-blue-500 flex items-center justify-center mb-4 mx-auto",
                          children: (0, r.jsx)(i.A, { className: "h-6 w-6" }),
                        }),
                        (0, r.jsx)("h3", {
                          className: "font-semibold mb-2",
                          children: "Echtes Unternehmen",
                        }),
                        (0, r.jsx)("p", {
                          className: "text-sm text-muted-foreground",
                          children:
                            "Arbeite 3-4 Tage pro Woche in echten deutschen Unternehmen wie BMW, Bosch oder Lufthansa",
                        }),
                      ],
                    }),
                    (0, r.jsxs)("div", {
                      className:
                        "text-center p-4 sm:p-6 rounded-2xl border border-border/60 bg-card/40 backdrop-blur-md hover:shadow-md transition-all duration-300",
                      children: [
                        (0, r.jsx)("div", {
                          className:
                            "w-12 h-12 rounded-lg bg-emerald-500/10 text-emerald-500 flex items-center justify-center mb-4 mx-auto",
                          children: (0, r.jsx)(n.A, { className: "h-6 w-6" }),
                        }),
                        (0, r.jsx)("h3", {
                          className: "font-semibold mb-2",
                          children: "Theorie lernen",
                        }),
                        (0, r.jsx)("p", {
                          className: "text-sm text-muted-foreground",
                          children:
                            "Besuche 1-2 Tage pro Woche die Berufsschule f\xfcr theoretisches Wissen",
                        }),
                      ],
                    }),
                    (0, r.jsxs)("div", {
                      className:
                        "text-center p-4 sm:p-6 rounded-2xl border border-border/60 bg-card/40 backdrop-blur-md hover:shadow-md transition-all duration-300",
                      children: [
                        (0, r.jsx)("div", {
                          className:
                            "w-12 h-12 rounded-lg bg-amber-500/10 text-amber-500 flex items-center justify-center mb-4 mx-auto",
                          children: (0, r.jsx)(d.A, { className: "h-6 w-6" }),
                        }),
                        (0, r.jsx)("h3", {
                          className: "font-semibold mb-2",
                          children: "Geld verdienen",
                        }),
                        (0, r.jsx)("p", {
                          className: "text-sm text-muted-foreground",
                          children:
                            "Erhalte ein monatliches Stipendium, das jedes Jahr deiner Ausbildung steigt",
                        }),
                      ],
                    }),
                    (0, r.jsxs)("div", {
                      className:
                        "text-center p-4 sm:p-6 rounded-2xl border border-border/60 bg-card/40 backdrop-blur-md hover:shadow-md transition-all duration-300",
                      children: [
                        (0, r.jsx)("div", {
                          className:
                            "w-12 h-12 rounded-lg bg-purple-500/10 text-purple-500 flex items-center justify-center mb-4 mx-auto",
                          children: (0, r.jsx)(c.A, { className: "h-6 w-6" }),
                        }),
                        (0, r.jsx)("h3", {
                          className: "font-semibold mb-2",
                          children: "Job bekommen",
                        }),
                        (0, r.jsx)("p", {
                          className: "text-sm text-muted-foreground",
                          children:
                            "85% der Auszubildenden erhalten ein permanentes Stellenangebot von ihrem Ausbildungsunternehmen",
                        }),
                      ],
                    }),
                  ],
                }),
              ],
            }),
          ],
        });
      }
    },
    70589: (e, s, t) => {
      "use strict";
      t.d(s, { CTASectionDE: () => v });
      var r = t(70207),
        a = t(45748),
        l = t(87223),
        i = t(6971),
        n = t(95795),
        d = t(14285),
        c = t(16784),
        o = t(79366),
        m = t(25147),
        x = t(46031),
        h = t(39441),
        u = t(10542),
        g = t.n(u),
        b = t(50018),
        p = t(78809),
        j = t(82110);
      function v() {
        let [e, s] = (0, l.useState)(!1),
          [t, u] = (0, l.useState)(!0),
          [v, f] = (0, l.useState)(!1),
          N = (0, l.useRef)(null);
        (0, l.useEffect)(() => {
          f(!0);
        }, []);
        let y = (t) => {
          (t.stopPropagation(),
            N.current &&
              (e
                ? N.current.pause()
                : N.current.play().catch((e) => {
                    console.error("Error playing video:", e);
                  }),
              s(!e)));
        };
        return (0, r.jsxs)("section", {
          className: "py-20 md:py-28 lg:py-36 relative overflow-hidden",
          children: [
            (0, r.jsx)(b.default, {
              src: "/images/arbeitgeber-hero-background.webp",
              alt: "Professional German workplace environment",
              fill: !0,
              quality: 85,
              sizes: "100vw",
              className: "object-cover object-center",
            }),
            (0, r.jsx)("div", {
              className: "absolute inset-0 bg-black/30 z-0",
            }),
            (0, r.jsx)("div", {
              className: "absolute inset-0 z-[1]",
              style: {
                background:
                  "\n            radial-gradient(ellipse at center, transparent 0%, transparent 40%, rgba(0,0,0,0.4) 100%),\n            linear-gradient(to top, rgba(0,0,0,0.5) 0%, transparent 30%),\n            linear-gradient(to right, rgba(0,0,0,0.3) 0%, transparent 15%),\n            linear-gradient(to left, rgba(0,0,0,0.3) 0%, transparent 15%)\n          ",
              },
            }),
            (0, r.jsx)("div", {
              className: "container px-4 mx-auto relative z-10",
              children: (0, r.jsxs)("div", {
                className: "max-w-5xl mx-auto",
                children: [
                  (0, r.jsxs)(a.P.div, {
                    initial: { opacity: 0, y: 20 },
                    whileInView: { opacity: 1, y: 0 },
                    viewport: { once: !0, margin: "-100px" },
                    transition: { duration: 0.6 },
                    className: "text-center mb-16",
                    children: [
                      (0, r.jsxs)("span", {
                        className:
                          "inline-flex items-center gap-2 px-4 py-1.5 rounded-full bg-primary/10 text-primary font-medium text-sm backdrop-blur-sm border border-primary/10 mb-6",
                        children: [
                          (0, r.jsx)(i.A, { className: "h-4 w-4" }),
                          "Beginne deine Reise",
                        ],
                      }),
                      (0, r.jsx)("h2", {
                        className: (0, j.cn)(
                          "text-3xl md:text-4xl lg:text-5xl font-bold tracking-tight mb-6",
                          "bg-gradient-to-b from-foreground to-muted-foreground/70 bg-clip-text text-transparent",
                        ),
                        children: "Dein Ausbildungsabenteuer beginnt hier",
                      }),
                      (0, r.jsx)("p", {
                        className:
                          "text-lg md:text-xl text-muted-foreground max-w-3xl mx-auto",
                        children:
                          "Schlie\xdfe dich 500+ internationalen Studenten an, die erfolgreiche Karrieren in Deutschland durch Berufsausbildung aufbauen. Erhalte personalisierte Beratung von der Berechtigung bis zur Vermittlung.",
                      }),
                    ],
                  }),
                  (0, r.jsxs)("div", {
                    className:
                      "grid md:grid-cols-2 gap-12 items-center bg-card/30 backdrop-blur-md rounded-3xl border border-border/40 p-6 md:p-10 overflow-hidden shadow-xl",
                    children: [
                      (0, r.jsx)(a.P.div, {
                        initial: { opacity: 0, x: -20 },
                        whileInView: { opacity: 1, x: 0 },
                        viewport: { once: !0, margin: "-100px" },
                        transition: { duration: 0.6 },
                        className:
                          "relative aspect-[9/16] md:aspect-square rounded-2xl overflow-hidden border border-[hsl(var(--border))] shadow-xl bg-[hsl(var(--card))] dark:bg-[hsl(var(--card))/50] backdrop-blur-sm group",
                        children:
                          v &&
                          (0, r.jsxs)(r.Fragment, {
                            children: [
                              (0, r.jsx)("video", {
                                ref: N,
                                className:
                                  "absolute inset-0 w-full h-full object-cover",
                                playsInline: !0,
                                muted: t,
                                loop: !0,
                                controls: !1,
                                src: p.BI.CTA,
                                poster: p.BI.CTA_THUMBNAIL,
                                onClick: y,
                              }),
                              (0, r.jsx)("div", {
                                className:
                                  "absolute inset-0 flex items-center justify-center bg-black/40 transition-opacity duration-300 ".concat(
                                    e
                                      ? "opacity-0 group-hover:opacity-100"
                                      : "opacity-100",
                                  ),
                                onClick: y,
                                children: (0, r.jsx)("button", {
                                  className:
                                    "transform transition-all duration-300 hover:scale-110 focus:outline-none",
                                  "aria-label": e
                                    ? "Video pausieren"
                                    : "Video abspielen",
                                  children: (0, r.jsx)("div", {
                                    className: "bg-black/80 rounded-full p-6",
                                    children: e
                                      ? (0, r.jsx)(n.A, {
                                          className: "w-8 h-8 text-white",
                                        })
                                      : (0, r.jsx)(d.A, {
                                          className: "w-8 h-8 text-white",
                                          fill: "white",
                                        }),
                                  }),
                                }),
                              }),
                              (0, r.jsx)("button", {
                                onClick: (e) => {
                                  (e.stopPropagation(),
                                    N.current &&
                                      ((N.current.muted = !t), u(!t)));
                                },
                                className:
                                  "absolute bottom-4 right-4 bg-black/80 rounded-full p-3 transform transition-all duration-300 hover:scale-110 focus:outline-none z-10",
                                "aria-label": t
                                  ? "Ton einschalten"
                                  : "Ton ausschalten",
                                children: t
                                  ? (0, r.jsx)(c.A, {
                                      className: "w-5 h-5 text-white",
                                    })
                                  : (0, r.jsx)(o.A, {
                                      className: "w-5 h-5 text-white",
                                    }),
                              }),
                            ],
                          }),
                      }),
                      (0, r.jsxs)(a.P.div, {
                        initial: { opacity: 0, x: 20 },
                        whileInView: { opacity: 1, x: 0 },
                        viewport: { once: !0, margin: "-100px" },
                        transition: { duration: 0.6, delay: 0.2 },
                        className: "flex flex-col justify-center",
                        children: [
                          (0, r.jsx)("h3", {
                            className: "text-xl md:text-2xl font-bold mb-4",
                            children: "Erlebe die Vorteile der Ausbildung",
                          }),
                          (0, r.jsx)("ul", {
                            className: "space-y-4 mb-8",
                            children: [
                              "Verdiene €900-1.300 monatlich beim Lernen",
                              "Erhalte anerkannte Qualifikation in 2-3,5 Jahren",
                              "Zugang zu 6 intelligenten Vorbereitungstools",
                              "Verfolge deinen Fortschritt in einem Dashboard",
                              "Genie\xdfe hohe Arbeitsplatzsicherheit nach Abschluss",
                              "Zugang zu deutscher Gesundheitsversorgung und Sozialleistungen",
                            ].map((e, s) =>
                              (0, r.jsxs)(
                                a.P.li,
                                {
                                  initial: { opacity: 0, x: 20 },
                                  whileInView: { opacity: 1, x: 0 },
                                  viewport: { once: !0 },
                                  transition: {
                                    duration: 0.4,
                                    delay: 0.3 + 0.1 * s,
                                  },
                                  className: "flex items-start gap-3",
                                  children: [
                                    (0, r.jsx)("div", {
                                      className:
                                        "mt-1 rounded-full bg-primary/10 p-1 text-primary",
                                      children: (0, r.jsx)("svg", {
                                        xmlns: "http://www.w3.org/2000/svg",
                                        viewBox: "0 0 20 20",
                                        fill: "currentColor",
                                        className: "w-4 h-4",
                                        children: (0, r.jsx)("path", {
                                          fillRule: "evenodd",
                                          d: "M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z",
                                          clipRule: "evenodd",
                                        }),
                                      }),
                                    }),
                                    (0, r.jsx)("span", {
                                      className: "text-foreground/90",
                                      children: e,
                                    }),
                                  ],
                                },
                                s,
                              ),
                            ),
                          }),
                          (0, r.jsxs)(a.P.div, {
                            initial: { opacity: 0, y: 20 },
                            whileInView: { opacity: 1, y: 0 },
                            viewport: { once: !0 },
                            transition: { duration: 0.5, delay: 0.6 },
                            className: "flex flex-col gap-4",
                            children: [
                              (0, r.jsxs)("div", {
                                className: "flex flex-col sm:flex-row gap-3",
                                children: [
                                  (0, r.jsx)(h.$, {
                                    asChild: !0,
                                    size: "lg",
                                    className:
                                      "rounded-full px-8 py-6 text-base group relative overflow-hidden flex-1",
                                    children: (0, r.jsxs)(g(), {
                                      href: "/auth?signup",
                                      className:
                                        "flex items-center justify-center",
                                      children: [
                                        (0, r.jsx)("span", {
                                          className: "mr-2",
                                          children: (0, r.jsx)(m.A, {
                                            className: "h-5 w-5",
                                          }),
                                        }),
                                        "Kostenloses Konto erstellen",
                                        (0, r.jsx)("span", {
                                          className:
                                            "ml-2 transform transition-transform duration-300 group-hover:translate-x-1",
                                          children: (0, r.jsx)(x.A, {
                                            className: "h-5 w-5",
                                          }),
                                        }),
                                        (0, r.jsx)("span", {
                                          className:
                                            "absolute inset-0 w-full h-full bg-white dark:bg-white pointer-events-none opacity-0 group-hover:opacity-10 -translate-x-full group-hover:translate-x-full transition-all duration-700 ease-in-out",
                                        }),
                                      ],
                                    }),
                                  }),
                                  (0, r.jsx)(h.$, {
                                    asChild: !0,
                                    variant: "outline",
                                    size: "lg",
                                    className:
                                      "rounded-full px-8 py-6 text-base group border-emerald-500/30 text-emerald-600 hover:bg-emerald-50 dark:hover:bg-emerald-950 flex-1",
                                    children: (0, r.jsxs)(g(), {
                                      href: "/consultation",
                                      className:
                                        "flex items-center justify-center",
                                      children: [
                                        (0, r.jsx)("span", {
                                          className: "mr-2",
                                          children: (0, r.jsx)("svg", {
                                            className: "w-5 h-5",
                                            fill: "none",
                                            stroke: "currentColor",
                                            viewBox: "0 0 24 24",
                                            children: (0, r.jsx)("path", {
                                              strokeLinecap: "round",
                                              strokeLinejoin: "round",
                                              strokeWidth: 2,
                                              d: "M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z",
                                            }),
                                          }),
                                        }),
                                        "Kostenlose Beratung",
                                      ],
                                    }),
                                  }),
                                ],
                              }),
                              (0, r.jsx)("p", {
                                className:
                                  "text-sm text-muted-foreground text-center",
                                children:
                                  "Schlie\xdfe dich 500+ erfolgreichen internationalen Studenten in Deutschland an",
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
        });
      }
    },
    84359: (e, s, t) => {
      "use strict";
      t.d(s, { VideoExplainerSectionDE: () => i });
      var r = t(70207),
        a = t(14285),
        l = t(78809);
      function i() {
        return (0, r.jsx)("section", {
          className: "py-12 sm:py-16",
          children: (0, r.jsx)("div", {
            className: "container mx-auto px-4",
            children: (0, r.jsxs)("div", {
              className: "max-w-4xl mx-auto",
              children: [
                (0, r.jsxs)("div", {
                  className: "text-center mb-8",
                  children: [
                    (0, r.jsxs)("span", {
                      className:
                        "inline-flex items-center gap-2 px-4 py-1.5 rounded-full bg-primary/10 border border-primary/10 backdrop-blur-sm text-primary text-sm font-medium inline-block mb-4",
                      children: [
                        (0, r.jsx)(a.A, { className: "h-4 w-4" }),
                        "Video Guide",
                      ],
                    }),
                    (0, r.jsx)("h2", {
                      className:
                        "text-2xl sm:text-3xl md:text-4xl font-bold tracking-tight mb-6 bg-gradient-to-b from-foreground to-muted-foreground bg-clip-text text-transparent",
                      children: "Kompletter Ausbildungs-Guide",
                    }),
                    (0, r.jsx)("p", {
                      className: "text-base sm:text-lg text-muted-foreground",
                      children:
                        "Erfahre alles \xfcber Deutschlands Ausbildungssystem in diesem umfassenden 6-Minuten-Video",
                    }),
                  ],
                }),
                (0, r.jsx)("div", {
                  className:
                    "relative rounded-xl overflow-hidden shadow-xl bg-black",
                  children: (0, r.jsx)("div", {
                    className: "aspect-video",
                    children: (0, r.jsxs)("video", {
                      className: "w-full h-full object-cover",
                      controls: !0,
                      playsInline: !0,
                      poster:
                        "https://images.azubi.ma/hero-images/ausbildung-video-cover-v2.webp",
                      children: [
                        (0, r.jsx)("source", {
                          src: l.BI.AUSBILDUNG_EXPLAINER,
                          type: "video/mp4",
                        }),
                        "Your browser does not support the video tag.",
                      ],
                    }),
                  }),
                }),
              ],
            }),
          }),
        });
      }
    },
    95311: (e, s, t) => {
      "use strict";
      (t.r(s), t.d(s, { BlogPreviewSection: () => v }));
      var r = t(70207),
        a = t(87223),
        l = t(10542),
        i = t.n(l),
        n = t(45748),
        d = t(28131),
        c = t(17802),
        o = t(61216),
        m = t(50018),
        x = t(30620),
        h = t(82110),
        u = t(78809);
      function g(e) {
        let {
            title: s,
            slug: t,
            excerpt: l,
            coverImage: n,
            date: o,
            readTime: g,
            category: b,
            className: p,
          } = e,
          [j, v] = (0, a.useState)(!1),
          f = (0, x.GP)(new Date(o), "MMM d, yyyy"),
          N = j ? "".concat(u.nz.DEFAULT, ".webp") : n;
        return (0, r.jsxs)(i(), {
          href: "/blog/".concat(t),
          className: (0, h.cn)(
            "group flex flex-col items-center rounded-xl border bg-background transition-all hover:border-primary hover:bg-muted/50",
            p,
          ),
          children: [
            (0, r.jsx)("div", {
              className:
                "relative aspect-[16/9] w-full overflow-hidden rounded-t-xl border-b",
              children: (0, r.jsx)(m.default, {
                src: N,
                alt: s,
                fill: !0,
                sizes:
                  "(min-width: 1024px) 270px, (min-width: 768px) 30vw, 45vw",
                className:
                  "object-cover transition-all duration-300 group-hover:scale-105",
                onError: () => v(!0),
              }),
            }),
            (0, r.jsxs)("div", {
              className: "flex flex-1 flex-col p-4 md:p-6",
              children: [
                (0, r.jsx)("h3", {
                  className:
                    "font-semibold leading-6 text-primary line-clamp-2",
                  children: s,
                }),
                (0, r.jsx)("p", {
                  className:
                    "mt-2 line-clamp-3 text-sm leading-6 text-muted-foreground",
                  children: l,
                }),
                (0, r.jsxs)("div", {
                  className: "mt-auto flex items-center gap-x-4 text-xs",
                  children: [
                    (0, r.jsx)("time", {
                      dateTime: o,
                      className: "text-muted-foreground",
                      children: f,
                    }),
                    (0, r.jsxs)("div", {
                      className: "flex items-center gap-x-1",
                      children: [
                        (0, r.jsx)(d.A, {
                          className: "size-3 text-muted-foreground",
                        }),
                        g,
                      ],
                    }),
                    (0, r.jsx)(c.E, { children: b }),
                  ],
                }),
              ],
            }),
          ],
        });
      }
      var b = t(39441),
        p = t(78406),
        j = t(54604);
      function v() {
        let [e, s] = (0, a.useState)([]),
          [t, l] = (0, a.useState)(!0),
          [m, x] = (0, a.useState)(null);
        return (
          (0, a.useEffect)(() => {
            (async () => {
              (l(!0), x(null));
              try {
                let e = (0, j.createClientComponentClient)(),
                  t = p.c.getInstance(e),
                  r = await t.getAllPosts();
                r && "posts" in r && Array.isArray(r.posts)
                  ? s(r.posts.slice(0, 3))
                  : s([]);
              } catch (e) {
                (console.error("Error fetching blog posts:", e),
                  x(
                    e instanceof Error
                      ? e
                      : Error("Unknown error fetching blog posts"),
                  ),
                  s([]));
              } finally {
                l(!1);
              }
            })();
          }, []),
          (0, r.jsx)("section", {
            className: "py-12 md:py-16 lg:py-20 bg-[#F7F8FA]",
            children: (0, r.jsxs)("div", {
              className: "container",
              children: [
                (0, r.jsx)(n.P.div, {
                  initial: { opacity: 0, y: 20 },
                  whileInView: { opacity: 1, y: 0 },
                  viewport: { once: !0, margin: "-100px" },
                  transition: { duration: 0.5 },
                  children: (0, r.jsx)(o.X, {
                    badge: "Expert Guides",
                    badgeIcon: (0, r.jsx)("svg", {
                      className: "h-4 w-4",
                      fill: "none",
                      stroke: "currentColor",
                      viewBox: "0 0 24 24",
                      children: (0, r.jsx)("path", {
                        strokeLinecap: "round",
                        strokeLinejoin: "round",
                        strokeWidth: 2,
                        d: "M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.746 0 3.332.477 4.5 1.253v13C19.832 18.477 18.246 18 16.5 18c-1.746 0-3.332.477-4.5 1.253",
                      }),
                    }),
                    title: "Ausbildung Resources",
                    description:
                      "Expert guides on German language, visa application, blocked account setup, and Ausbildung programs.",
                    level: 2,
                  }),
                }),
                t
                  ? (0, r.jsx)("div", {
                      className:
                        "grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mb-8",
                      children: Array.from({ length: 3 }).map((e, s) =>
                        (0, r.jsxs)(
                          n.P.div,
                          {
                            className:
                              "flex animate-pulse flex-col space-y-4 bg-[hsl(var(--card))] rounded-xl overflow-hidden border border-[hsl(var(--border))] h-[400px]",
                            initial: { opacity: 0, y: 20 },
                            animate: { opacity: 1, y: 0 },
                            transition: { duration: 0.5, delay: 0.1 * s },
                            children: [
                              (0, r.jsx)("div", { className: "h-48 bg-muted" }),
                              (0, r.jsxs)("div", {
                                className: "p-5 space-y-3",
                                children: [
                                  (0, r.jsx)("div", {
                                    className: "h-4 bg-muted rounded w-1/3",
                                  }),
                                  (0, r.jsx)("div", {
                                    className: "h-6 bg-muted rounded w-full",
                                  }),
                                  (0, r.jsx)("div", {
                                    className: "h-4 bg-muted rounded w-full",
                                  }),
                                  (0, r.jsx)("div", {
                                    className: "h-4 bg-muted rounded w-2/3",
                                  }),
                                ],
                              }),
                            ],
                          },
                          s,
                        ),
                      ),
                    })
                  : m
                    ? (0, r.jsxs)("div", {
                        className:
                          "bg-destructive/10 border border-destructive/20 rounded-lg p-6 text-center mb-8",
                        children: [
                          (0, r.jsx)("p", {
                            className: "text-destructive mb-2",
                            children: "Failed to load blog posts",
                          }),
                          (0, r.jsx)("p", {
                            className: "text-muted-foreground text-sm",
                            children:
                              "Please try again later or check our social media for updates",
                          }),
                        ],
                      })
                    : e.length > 0
                      ? (0, r.jsx)("div", {
                          className:
                            "grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mb-8",
                          children: e.map((e, s) =>
                            (0, r.jsx)(
                              n.P.div,
                              {
                                initial: { opacity: 0, y: 20 },
                                whileInView: { opacity: 1, y: 0 },
                                viewport: { once: !0, margin: "-50px" },
                                transition: { duration: 0.5, delay: 0.1 * s },
                                children: (0, r.jsx)(g, {
                                  title: e.title,
                                  slug: e.slug,
                                  excerpt: e.description,
                                  coverImage: e.image_url,
                                  date: e.published_at || "",
                                  readTime: "".concat(e.read_time, " min"),
                                  category: e.category,
                                }),
                              },
                              e.id,
                            ),
                          ),
                        })
                      : (0, r.jsxs)("div", {
                          className:
                            "grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mb-8",
                          children: [
                            (0, r.jsxs)(n.P.div, {
                              initial: { opacity: 0, y: 20 },
                              whileInView: { opacity: 1, y: 0 },
                              viewport: { once: !0, margin: "-50px" },
                              transition: { duration: 0.5 },
                              className:
                                "bg-card border rounded-xl overflow-hidden h-full",
                              children: [
                                (0, r.jsx)("div", {
                                  className:
                                    "relative aspect-[16/9] w-full overflow-hidden rounded-t-xl border-b bg-muted",
                                  children: (0, r.jsx)("div", {
                                    className:
                                      "absolute inset-0 flex items-center justify-center",
                                    children: (0, r.jsx)("div", {
                                      className: "text-4xl",
                                      children: "\uD83D\uDCDD",
                                    }),
                                  }),
                                }),
                                (0, r.jsxs)("div", {
                                  className: "flex flex-1 flex-col p-4 md:p-6",
                                  children: [
                                    (0, r.jsx)("h3", {
                                      className:
                                        "font-semibold leading-6 text-primary line-clamp-2",
                                      children:
                                        "Complete Guide to German Ausbildung",
                                    }),
                                    (0, r.jsx)("p", {
                                      className:
                                        "mt-2 line-clamp-3 text-sm leading-6 text-muted-foreground",
                                      children:
                                        "Learn everything about the German vocational training system and how to qualify as an international student.",
                                    }),
                                    (0, r.jsxs)("div", {
                                      className:
                                        "mt-auto flex items-center gap-x-4 text-xs",
                                      children: [
                                        (0, r.jsx)("time", {
                                          className: "text-muted-foreground",
                                          children: "Jun 12, 2023",
                                        }),
                                        (0, r.jsxs)("div", {
                                          className:
                                            "flex items-center gap-x-1",
                                          children: [
                                            (0, r.jsx)(d.A, {
                                              className:
                                                "size-3 text-muted-foreground",
                                            }),
                                            "5 min",
                                          ],
                                        }),
                                        (0, r.jsx)(c.E, {
                                          children: "Ausbildung Guide",
                                        }),
                                      ],
                                    }),
                                  ],
                                }),
                              ],
                            }),
                            (0, r.jsxs)(n.P.div, {
                              initial: { opacity: 0, y: 20 },
                              whileInView: { opacity: 1, y: 0 },
                              viewport: { once: !0, margin: "-50px" },
                              transition: { duration: 0.5, delay: 0.1 },
                              className:
                                "bg-card border rounded-xl overflow-hidden h-full",
                              children: [
                                (0, r.jsx)("div", {
                                  className:
                                    "relative aspect-[16/9] w-full overflow-hidden rounded-t-xl border-b bg-muted",
                                  children: (0, r.jsx)("div", {
                                    className:
                                      "absolute inset-0 flex items-center justify-center",
                                    children: (0, r.jsx)("div", {
                                      className: "text-4xl",
                                      children: "\uD83C\uDDE9\uD83C\uDDEA",
                                    }),
                                  }),
                                }),
                                (0, r.jsxs)("div", {
                                  className: "flex flex-1 flex-col p-4 md:p-6",
                                  children: [
                                    (0, r.jsx)("h3", {
                                      className:
                                        "font-semibold leading-6 text-primary line-clamp-2",
                                      children:
                                        "How to Reach B1 German in 6 Months",
                                    }),
                                    (0, r.jsx)("p", {
                                      className:
                                        "mt-2 line-clamp-3 text-sm leading-6 text-muted-foreground",
                                      children:
                                        "Practical tips and strategies to achieve B1 German proficiency required for Ausbildung programs.",
                                    }),
                                    (0, r.jsxs)("div", {
                                      className:
                                        "mt-auto flex items-center gap-x-4 text-xs",
                                      children: [
                                        (0, r.jsx)("time", {
                                          className: "text-muted-foreground",
                                          children: "Jul 18, 2023",
                                        }),
                                        (0, r.jsxs)("div", {
                                          className:
                                            "flex items-center gap-x-1",
                                          children: [
                                            (0, r.jsx)(d.A, {
                                              className:
                                                "size-3 text-muted-foreground",
                                            }),
                                            "8 min",
                                          ],
                                        }),
                                        (0, r.jsx)(c.E, {
                                          children: "Language Tips",
                                        }),
                                      ],
                                    }),
                                  ],
                                }),
                              ],
                            }),
                            (0, r.jsxs)(n.P.div, {
                              initial: { opacity: 0, y: 20 },
                              whileInView: { opacity: 1, y: 0 },
                              viewport: { once: !0, margin: "-50px" },
                              transition: { duration: 0.5, delay: 0.2 },
                              className:
                                "bg-card border rounded-xl overflow-hidden h-full",
                              children: [
                                (0, r.jsx)("div", {
                                  className:
                                    "relative aspect-[16/9] w-full overflow-hidden rounded-t-xl border-b bg-muted",
                                  children: (0, r.jsx)("div", {
                                    className:
                                      "absolute inset-0 flex items-center justify-center",
                                    children: (0, r.jsx)("div", {
                                      className: "text-4xl",
                                      children: "\uD83D\uDCCB",
                                    }),
                                  }),
                                }),
                                (0, r.jsxs)("div", {
                                  className: "flex flex-1 flex-col p-4 md:p-6",
                                  children: [
                                    (0, r.jsx)("h3", {
                                      className:
                                        "font-semibold leading-6 text-primary line-clamp-2",
                                      children:
                                        "Visa Requirements for Ausbildung",
                                    }),
                                    (0, r.jsx)("p", {
                                      className:
                                        "mt-2 line-clamp-3 text-sm leading-6 text-muted-foreground",
                                      children:
                                        "A complete checklist of documents and requirements for securing your German training visa.",
                                    }),
                                    (0, r.jsxs)("div", {
                                      className:
                                        "mt-auto flex items-center gap-x-4 text-xs",
                                      children: [
                                        (0, r.jsx)("time", {
                                          className: "text-muted-foreground",
                                          children: "Aug 3, 2023",
                                        }),
                                        (0, r.jsxs)("div", {
                                          className:
                                            "flex items-center gap-x-1",
                                          children: [
                                            (0, r.jsx)(d.A, {
                                              className:
                                                "size-3 text-muted-foreground",
                                            }),
                                            "6 min",
                                          ],
                                        }),
                                        (0, r.jsx)(c.E, {
                                          children: "Application Process",
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
                  className: "flex justify-center mt-8",
                  children: (0, r.jsx)(b.$, {
                    asChild: !0,
                    variant: "outline",
                    className:
                      "rounded-full border-2 border-[#5D5DE9]/30 bg-[#5D5DE9]/5 text-[#5D5DE9] hover:text-[#5D5DE9] hover:bg-[#5D5DE9]/10 font-semibold hover:shadow-lg transition-all duration-300",
                    children: (0, r.jsxs)(i(), {
                      href: "/blog",
                      className: "flex items-center",
                      children: [
                        "View All Articles",
                        (0, r.jsx)("svg", {
                          xmlns: "http://www.w3.org/2000/svg",
                          fill: "none",
                          viewBox: "0 0 24 24",
                          strokeWidth: 2,
                          stroke: "currentColor",
                          className: "w-4 h-4 ml-2",
                          children: (0, r.jsx)("path", {
                            strokeLinecap: "round",
                            strokeLinejoin: "round",
                            d: "M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3",
                          }),
                        }),
                      ],
                    }),
                  }),
                }),
              ],
            }),
          })
        );
      }
    },
  },
  (e) => {
    var s = (s) => e((e.s = s));
    (e.O(0, [46593, 36209, 84121, 72076, 77358], () => s(39609)),
      (_N_E = e.O()));
  },
]);
