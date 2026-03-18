(self.webpackChunk_N_E = self.webpackChunk_N_E || []).push([
  [84769],
  {
    23401: (e, s, l) => {
      Promise.resolve().then(l.bind(l, 81397));
    },
    81397: (e, s, l) => {
      "use strict";
      (l.r(s), l.d(s, { default: () => T }));
      var a = l(70207),
        r = l(45795),
        n = l(80187),
        t = l(17802),
        i = l(14207),
        d = l(82110),
        c = l(27239),
        o = l(70005),
        m = l(46031),
        x = l(5101),
        h = l(39441),
        u = l(21402),
        g = l(95889),
        f = l(87223),
        b = l(22718),
        p = l(52461),
        j = l(34379),
        N = l(82164),
        v = l(39175);
      let w = [
        {
          id: "deutscher-lebenslauf",
          filename: "Azubi_Deutscher_Lebenslauf_Vorlage.docx",
          name: "Deutscher Lebenslauf Vorlage",
          description:
            "Traditionelle deutsche Vorlage f\xfcr konservative Branchen.",
          category: "Traditional",
          features: [],
          downloadUrl:
            "https://storage.googleapis.com/Azubi-cv-templates/Azubi_Deutscher_Lebenslauf_Vorlage.docx",
          fileSize: 39115,
          color: "text-blue-500 bg-blue-500/10",
          icon: "FileText",
        },
        {
          id: "einsteiger-lebenslauf",
          filename: "Azubi_Einsteiger_Lebenslauf.docx",
          name: "Einsteiger Lebenslauf",
          description:
            "Speziell f\xfcr Berufseinsteiger und Ausbildungsbewerber.",
          category: "Entry Level",
          features: [],
          downloadUrl:
            "https://storage.googleapis.com/Azubi-cv-templates/Azubi_Einsteiger_Lebenslauf.docx",
          fileSize: 39013,
          color: "text-green-500 bg-green-500/10",
          icon: "Users",
        },
        {
          id: "it-technisch-lebenslauf",
          filename: "Azubi_IT_Technisch_Lebenslauf.docx",
          name: "IT & Technisch Lebenslauf",
          description:
            "Optimiert f\xfcr IT-Berufe und technische Ausbildungen.",
          category: "IT & Technical",
          features: [],
          downloadUrl:
            "https://storage.googleapis.com/Azubi-cv-templates/Azubi_IT_Technisch_Lebenslauf.docx",
          fileSize: 38071,
          color: "text-purple-500 bg-purple-500/10",
          icon: "Code",
        },
        {
          id: "pflege-gesundheit-lebenslauf",
          filename: "Azubi_Pflege_Gesundheit_Lebenslauf.docx",
          name: "Pflege & Gesundheit Lebenslauf",
          description:
            "Ma\xdfgeschneidert f\xfcr Gesundheits- und Pflegeberufe.",
          category: "Healthcare",
          features: [],
          downloadUrl:
            "https://storage.googleapis.com/Azubi-cv-templates/Azubi_Pflege_Gesundheit_Lebenslauf.docx",
          fileSize: 38851,
          color: "text-red-500 bg-red-500/10",
          icon: "Heart",
        },
        {
          id: "traditioneller-lebenslauf",
          filename: "Azubi_Traditioneller_Lebenslauf.docx",
          name: "Traditioneller Lebenslauf",
          description: "Klassisches Design f\xfcr alle Branchen.",
          category: "Classic",
          features: [],
          downloadUrl:
            "https://storage.googleapis.com/Azubi-cv-templates/Azubi_Traditioneller_Lebenslauf.docx",
          fileSize: 37627,
          color: "text-gray-500 bg-gray-500/10",
          icon: "Building",
        },
        {
          id: "modern-professional",
          filename: "Modern_Professional_CV_Template.docx",
          name: "Modern Professional CV",
          description: "Moderne, zweispaltige Vorlage f\xfcr alle Branchen.",
          category: "Modern",
          features: [],
          downloadUrl:
            "https://storage.googleapis.com/Azubi-cv-templates/Modern_Professional_CV_Template.docx",
          fileSize: 38121,
          color: "text-cyan-500 bg-cyan-500/10",
          icon: "Award",
        },
      ];
      function y(e) {
        let { className: s } = e,
          [l, r] = (0, f.useState)([]),
          i = async (e) => {
            r((s) => [...s, e.id]);
            try {
              let s = document.createElement("a");
              ((s.href = e.downloadUrl),
                (s.download = e.filename),
                document.body.appendChild(s),
                s.click(),
                document.body.removeChild(s),
                window.gtag &&
                  window.gtag("event", "download", {
                    event_category: "CV Template",
                    event_label: e.name,
                    value: 1,
                  }));
            } catch (e) {
              console.error("Download failed:", e);
            } finally {
              setTimeout(() => {
                r((s) => s.filter((s) => s !== e.id));
              }, 2e3);
            }
          };
        return (0, a.jsx)("section", {
          className: (0, d.cn)("py-16 md:py-24", s),
          children: (0, a.jsxs)("div", {
            className: "container px-4 md:px-6",
            children: [
              (0, a.jsxs)("div", {
                className: "text-center max-w-3xl mx-auto mb-12",
                children: [
                  (0, a.jsx)("h2", {
                    className:
                      "text-3xl md:text-4xl font-bold tracking-tight mb-4",
                    children: "Kostenlose Word-Vorlagen",
                  }),
                  (0, a.jsx)("p", {
                    className: "text-lg text-muted-foreground",
                    children:
                      "Professionelle Lebenslauf-Vorlagen sofort downloadbar.",
                  }),
                ],
              }),
              (0, a.jsx)("div", {
                className:
                  "grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6",
                children: w.map((e) => {
                  let s =
                    {
                      FileText: c.A,
                      Users: x.A,
                      Code: b.A,
                      Heart: p.A,
                      Building: j.A,
                      Award: N.A,
                    }[e.icon] || c.A;
                  return (0, a.jsxs)(
                    n.Zp,
                    {
                      className:
                        "p-6 text-center hover:shadow-lg transition-shadow",
                      children: [
                        (0, a.jsx)("div", {
                          className: (0, d.cn)(
                            "w-12 h-12 rounded-full flex items-center justify-center mx-auto mb-4",
                            e.color,
                          ),
                          children: (0, a.jsx)(s, { className: "w-6 h-6" }),
                        }),
                        (0, a.jsx)("h3", {
                          className: "text-lg font-semibold mb-2",
                          children: e.name,
                        }),
                        (0, a.jsx)(t.E, {
                          variant: "secondary",
                          className: "mb-3 text-xs",
                          children: e.category,
                        }),
                        (0, a.jsx)("p", {
                          className: "text-sm text-muted-foreground mb-4",
                          children: e.description,
                        }),
                        (0, a.jsxs)("div", {
                          className:
                            "flex justify-between items-center text-xs text-muted-foreground mb-4",
                          children: [
                            (0, a.jsx)("span", { children: "Word Document" }),
                            (0, a.jsx)("span", {
                              children: (function (e) {
                                if (0 === e) return "0 Bytes";
                                let s = Math.floor(
                                  Math.log(e) / Math.log(1024),
                                );
                                return (
                                  parseFloat(
                                    (e / Math.pow(1024, s)).toFixed(1),
                                  ) +
                                  " " +
                                  ["Bytes", "KB", "MB", "GB"][s]
                                );
                              })(e.fileSize),
                            }),
                          ],
                        }),
                        (0, a.jsx)(h.$, {
                          onClick: () => i(e),
                          disabled: l.includes(e.id),
                          className: "w-full",
                          children: l.includes(e.id)
                            ? (0, a.jsxs)(a.Fragment, {
                                children: [
                                  (0, a.jsx)("div", {
                                    className:
                                      "w-4 h-4 mr-2 animate-spin rounded-full border-2 border-background border-t-transparent",
                                  }),
                                  "L\xe4dt...",
                                ],
                              })
                            : (0, a.jsxs)(a.Fragment, {
                                children: [
                                  (0, a.jsx)(v.A, {
                                    className: "w-4 h-4 mr-2",
                                  }),
                                  "Download",
                                ],
                              }),
                        }),
                      ],
                    },
                    e.id,
                  );
                }),
              }),
            ],
          }),
        });
      }
      (w.length,
        w.filter((e) => "Entry Level" === e.category).length,
        w.filter((e) => ["Traditional", "Classic"].includes(e.category)).length,
        w.filter((e) => ["IT & Technical", "Healthcare"].includes(e.category))
          .length,
        w.filter((e) => "Modern" === e.category).length);
      var k = l(52141),
        A = l(35121),
        V = l(50018);
      let D = [
          {
            id: "modern",
            name: "Modern Professional",
            description:
              "Zeitgem\xe4\xdfes Design f\xfcr IT, Ingenieurwesen und moderne Berufe.",
            features: ["Moderne Optik", "ATS-optimiert", "Zweispaltig"],
            color: "text-primary bg-primary/10",
          },
          {
            id: "classic",
            name: "Classic Professional",
            description:
              "Traditioneller Aufbau f\xfcr konservative Branchen und Unternehmen.",
            features: [
              "Konservatives Design",
              "Professionell",
              "ATS-freundlich",
            ],
            color: "text-secondary bg-secondary/10",
          },
          {
            id: "creative",
            name: "Creative Professional",
            description:
              "Kreatives Layout f\xfcr Design, Marketing und Medienberufe.",
            features: [
              "Kreatives Design",
              "Visuell ansprechend",
              "Einzigartig",
            ],
            color: "text-primary bg-secondary/10",
          },
          {
            id: "minimal",
            name: "Minimal Professional",
            description:
              "Minimalistisches Design mit Fokus auf Inhalt und Klarheit.",
            features: ["Minimalistisch", "Klar strukturiert", "Elegant"],
            color: "text-primary bg-primary/10",
          },
        ],
        L = [
          {
            icon: r.Ecc,
            title: "KI-Lebenslauf Builder",
            description:
              "Lade deine CV hoch und erhalte professionelle deutsche Lebensl\xe4ufe in verschiedenen Vorlagen - kostenlos!",
            status: "Verf\xfcgbar",
            href: "/dashboard/cv-builder",
            disabled: !1,
            color: "text-primary bg-primary/10",
          },
          {
            icon: r.$aG,
            title: "Bewerbungsschreiben Generator",
            description:
              "KI-gest\xfctzter Generator f\xfcr personalisierte Anschreiben.",
            status: "Verf\xfcgbar",
            href: "/dashboard/tools/cover-letter",
            disabled: !1,
            color: "text-secondary bg-secondary/10",
          },
          {
            icon: r.JpK,
            title: "Eignungstest",
            description:
              "Pr\xfcfe deine Eignung f\xfcr verschiedene Ausbildungsberufe in Deutschland.",
            status: "Verf\xfcgbar",
            href: "/dashboard/tools/eligibility",
            disabled: !1,
            color: "text-primary bg-secondary/10",
          },
        ];
      function T() {
        return (0, a.jsxs)("div", {
          className: "flex flex-col overflow-hidden",
          children: [
            (0, a.jsx)("section", {
              className: "relative min-h-[60vh] w-full overflow-visible pb-0",
              children: (0, a.jsxs)("div", {
                className:
                  "container relative z-10 mx-auto flex min-h-[60vh] flex-col items-center justify-center gap-8 px-4 pb-0 pt-16 text-center lg:px-6",
                children: [
                  (0, a.jsxs)(t.E, {
                    variant: "outline",
                    className:
                      "mb-4 px-4 py-1.5 text-base border-primary/20 bg-background",
                    children: [
                      (0, a.jsx)(c.A, { className: "w-4 h-4 mr-2" }),
                      (0, a.jsx)("span", {
                        className: "text-primary font-medium",
                        children: "Kostenlose Vorlagen 2026",
                      }),
                    ],
                  }),
                  (0, a.jsxs)("div", {
                    className:
                      "flex flex-col lg:flex-row items-center gap-8 lg:gap-12 max-w-[1200px]",
                    children: [
                      (0, a.jsxs)("div", {
                        className:
                          "flex-1 flex flex-col items-center lg:items-start text-center lg:text-left gap-4",
                        children: [
                          (0, a.jsx)(k.D, {
                            level: 1,
                            className: "animate-appear",
                            children: "Professionelle Lebenslauf-Vorlagen",
                          }),
                          (0, a.jsx)(A.f, {
                            className:
                              "text-lg font-medium animate-appear opacity-0 [animation-delay:300ms] sm:text-xl md:text-2xl",
                            children:
                              "ATS-optimiert | Kostenlos | Sofort downloadbar",
                          }),
                          (0, a.jsxs)(A.f, {
                            className:
                              "max-w-[700px] animate-appear opacity-0 [animation-delay:500ms] leading-relaxed",
                            children: [
                              (0, a.jsx)("strong", {
                                children: "KI-powered CV Builder:",
                              }),
                              " Lade deinen aktuellen Lebenslauf hoch und erhalte professionelle deutsche CVs in 4 verschiedenen Vorlagen.",
                              (0, a.jsx)("strong", {
                                children: "100% kostenlos",
                              }),
                              " - einfach anmelden und loslegen!",
                            ],
                          }),
                          (0, a.jsxs)("div", {
                            className:
                              "flex flex-col sm:flex-row gap-8 animate-appear opacity-0 [animation-delay:700ms] mt-4",
                            children: [
                              (0, a.jsxs)("div", {
                                className: "text-center",
                                children: [
                                  (0, a.jsx)("div", {
                                    className:
                                      "text-4xl font-bold text-primary mb-2",
                                    children: "4",
                                  }),
                                  (0, a.jsx)("div", {
                                    className: "text-sm text-muted-foreground",
                                    children: "Profi-Vorlagen",
                                  }),
                                ],
                              }),
                              (0, a.jsxs)("div", {
                                className: "text-center",
                                children: [
                                  (0, a.jsx)("div", {
                                    className:
                                      "text-4xl font-bold text-primary mb-2",
                                    children: "KI",
                                  }),
                                  (0, a.jsx)("div", {
                                    className: "text-sm text-muted-foreground",
                                    children: "Powered",
                                  }),
                                ],
                              }),
                              (0, a.jsxs)("div", {
                                className: "text-center",
                                children: [
                                  (0, a.jsx)("div", {
                                    className:
                                      "text-4xl font-bold text-primary mb-2",
                                    children: "100%",
                                  }),
                                  (0, a.jsx)("div", {
                                    className: "text-sm text-muted-foreground",
                                    children: "Kostenlos",
                                  }),
                                ],
                              }),
                            ],
                          }),
                        ],
                      }),
                      (0, a.jsx)("div", {
                        className:
                          "relative w-full max-w-md mx-auto lg:max-w-lg",
                        children: (0, a.jsx)("div", {
                          className: "relative w-64 h-64 mx-auto animate-float",
                          children: (0, a.jsx)(V.default, {
                            src: "/mascot/mascot_documents_male.webp",
                            alt: "Young Oak mascot - Your guide to CV templates for Ausbildung",
                            fill: !0,
                            className: "object-contain drop-shadow-2xl",
                            priority: !0,
                          }),
                        }),
                      }),
                    ],
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
                      (0, a.jsx)(k.D, {
                        level: 2,
                        className: "mb-4",
                        children: "KI-Lebenslauf Builder - 100% Kostenlos",
                      }),
                      (0, a.jsx)(A.f, {
                        className: "text-lg",
                        children:
                          "Lade deinen aktuellen CV hoch und erhalte professionelle deutsche Lebensl\xe4ufe in 4 verschiedenen Vorlagen. ATS-optimiert, kostenlos und sofort einsatzbereit.",
                      }),
                    ],
                  }),
                  (0, a.jsx)("div", {
                    className: "max-w-4xl mx-auto mb-16",
                    children: (0, a.jsxs)(n.Zp, {
                      className:
                        "p-8 bg-secondary border-primary/20 text-center",
                      children: [
                        (0, a.jsx)("div", {
                          className:
                            "w-20 h-20 rounded-full flex items-center justify-center mx-auto mb-6 text-primary bg-primary/10",
                          children: (0, a.jsx)(r.Ecc, {
                            className: "h-10 w-10",
                          }),
                        }),
                        (0, a.jsx)(k.D, {
                          level: 3,
                          className: "mb-4",
                          children: "KI-Lebenslauf Builder - 100% Kostenlos",
                        }),
                        (0, a.jsxs)(A.f, {
                          className: "mb-6 max-w-2xl mx-auto",
                          children: [
                            (0, a.jsx)("strong", {
                              children: "Lade deinen aktuellen CV hoch",
                            }),
                            " und erhalte professionelle deutsche Lebensl\xe4ufe in verschiedenen Vorlagen. Perfekt f\xfcr Ausbildungsbewerber - ",
                            (0, a.jsx)("strong", {
                              children: "einfach anmelden und loslegen!",
                            }),
                          ],
                        }),
                        (0, a.jsxs)("div", {
                          className:
                            "grid grid-cols-1 sm:grid-cols-3 gap-4 mb-8",
                          children: [
                            (0, a.jsxs)("div", {
                              className:
                                "flex items-center justify-center gap-2 text-sm",
                              children: [
                                (0, a.jsx)(o.A, {
                                  className: "w-4 h-4 text-secondary",
                                }),
                                (0, a.jsx)("span", {
                                  children: "CV hochladen",
                                }),
                              ],
                            }),
                            (0, a.jsxs)("div", {
                              className:
                                "flex items-center justify-center gap-2 text-sm",
                              children: [
                                (0, a.jsx)(o.A, {
                                  className: "w-4 h-4 text-secondary",
                                }),
                                (0, a.jsx)("span", {
                                  children: "Deutsche Vorlage w\xe4hlen",
                                }),
                              ],
                            }),
                            (0, a.jsxs)("div", {
                              className:
                                "flex items-center justify-center gap-2 text-sm",
                              children: [
                                (0, a.jsx)(o.A, {
                                  className: "w-4 h-4 text-secondary",
                                }),
                                (0, a.jsx)("span", {
                                  children: "PDF herunterladen",
                                }),
                              ],
                            }),
                          ],
                        }),
                        (0, a.jsx)(u.ProtectedLink, {
                          href: "/dashboard/cv-builder",
                          children: (0, a.jsxs)(h.$, {
                            size: "lg",
                            className: "w-full sm:w-auto rounded-full",
                            children: [
                              "Jetzt CV hochladen & Vorlage erstellen ",
                              (0, a.jsx)(m.A, { className: "ml-2 h-4 w-4" }),
                            ],
                          }),
                        }),
                      ],
                    }),
                  }),
                  (0, a.jsxs)("div", {
                    className: "text-center mb-8",
                    children: [
                      (0, a.jsx)(k.D, {
                        level: 3,
                        className: "mb-4",
                        children: "Verf\xfcgbare Vorlagen im KI-CV Builder",
                      }),
                      (0, a.jsx)(A.f, {
                        children:
                          "Diese professionellen Vorlagen stehen dir im CV Builder zur Verf\xfcgung",
                      }),
                    ],
                  }),
                  (0, a.jsx)("div", {
                    className:
                      "grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 md:gap-8",
                    children: D.map((e) =>
                      (0, a.jsxs)(
                        n.Zp,
                        {
                          className:
                            "text-center p-6 border-transparent hover:shadow-lg hover:border-border/20 transition-all duration-300 bg-background rounded-2xl",
                          children: [
                            (0, a.jsx)("div", {
                              className: (0, d.cn)(
                                "w-12 h-12 rounded-full flex items-center justify-center mx-auto mb-5",
                                e.color,
                              ),
                              children: (0, a.jsx)(r.Ecc, {
                                className: "h-6 w-6",
                              }),
                            }),
                            (0, a.jsx)(k.D, {
                              level: 3,
                              className: "text-lg mb-3",
                              children: e.name,
                            }),
                            (0, a.jsx)(A.f, {
                              className: "text-sm leading-relaxed mb-4",
                              children: e.description,
                            }),
                            (0, a.jsx)("div", {
                              className: "space-y-2 mb-4",
                              children: e.features.map((e, s) =>
                                (0, a.jsxs)(
                                  "div",
                                  {
                                    className:
                                      "flex items-center justify-center text-xs text-muted-foreground",
                                    children: [
                                      (0, a.jsx)(o.A, {
                                        className:
                                          "w-3 h-3 text-secondary mr-2",
                                      }),
                                      e,
                                    ],
                                  },
                                  s,
                                ),
                              ),
                            }),
                          ],
                        },
                        e.id,
                      ),
                    ),
                  }),
                  (0, a.jsx)("div", {
                    className: "text-center mt-12",
                    children: (0, a.jsx)(u.ProtectedLink, {
                      href: "/dashboard/cv-builder",
                      children: (0, a.jsxs)(h.$, {
                        size: "lg",
                        className: "px-8 rounded-full",
                        children: [
                          (0, a.jsx)(r.Ecc, { className: "h-5 w-5 mr-3" }),
                          "Alle Vorlagen im CV Builder nutzen",
                          (0, a.jsx)(m.A, { className: "ml-3 h-5 w-5" }),
                        ],
                      }),
                    }),
                  }),
                ],
              }),
            }),
            (0, a.jsx)(y, { className: "bg-secondary" }),
            (0, a.jsx)("section", {
              className: "py-16 md:py-24",
              children: (0, a.jsxs)("div", {
                className: "container px-4 md:px-6",
                children: [
                  (0, a.jsxs)("div", {
                    className: "text-center max-w-2xl mx-auto mb-12",
                    children: [
                      (0, a.jsx)(k.D, {
                        level: 2,
                        className: "mb-4",
                        children: "Zus\xe4tzliche Tools",
                      }),
                      (0, a.jsx)(A.f, {
                        className: "text-lg",
                        children:
                          "Nutze unsere KI-gest\xfctzten Tools, um deine Bewerbung zu perfektionieren",
                      }),
                    ],
                  }),
                  (0, a.jsx)("div", {
                    className:
                      "grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 md:gap-8",
                    children: L.map((e, s) => {
                      let l = e.icon;
                      return (0, a.jsxs)(
                        n.Zp,
                        {
                          className:
                            "text-center p-6 md:p-8 border-transparent hover:shadow-lg hover:border-border/20 transition-all duration-300 bg-background rounded-2xl",
                          children: [
                            (0, a.jsx)("div", {
                              className: (0, d.cn)(
                                "w-12 h-12 rounded-full flex items-center justify-center mx-auto mb-5",
                                e.color,
                              ),
                              children: (0, a.jsx)(l, { className: "h-6 w-6" }),
                            }),
                            (0, a.jsx)(k.D, {
                              level: 3,
                              className: "text-xl mb-3",
                              children: e.title,
                            }),
                            (0, a.jsx)(A.f, {
                              className: "text-sm leading-relaxed mb-4",
                              children: e.description,
                            }),
                            "Coming Soon" === e.status &&
                              (0, a.jsx)(t.E, {
                                className: "mb-4",
                                children: "Coming Soon",
                              }),
                            e.disabled
                              ? (0, a.jsx)(h.$, {
                                  variant: "outline",
                                  disabled: !0,
                                  className: "w-full rounded-full",
                                  children: "Bald verf\xfcgbar",
                                })
                              : (0, a.jsx)(u.ProtectedLink, {
                                  href: e.href,
                                  children: (0, a.jsxs)(h.$, {
                                    className: "w-full rounded-full",
                                    children: [
                                      e.title.includes("CV Builder")
                                        ? "CV Builder starten"
                                        : "Bewerbungsschreiben Generator" ===
                                            e.title
                                          ? "Generator starten"
                                          : "Jetzt pr\xfcfen",
                                      " ",
                                      (0, a.jsx)(m.A, {
                                        className: "ml-2 h-4 w-4",
                                      }),
                                    ],
                                  }),
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
                      (0, a.jsx)(k.D, {
                        level: 2,
                        className: "mb-4",
                        children:
                          "Der perfekte Lebenslauf f\xfcr Ausbildungsbewerber",
                      }),
                      (0, a.jsx)(A.f, {
                        className: "text-lg",
                        children:
                          "Tipps und Struktur f\xfcr einen erfolgreichen deutschen Lebenslauf",
                      }),
                    ],
                  }),
                  (0, a.jsx)("div", {
                    className: "max-w-4xl mx-auto",
                    children: (0, a.jsxs)("div", {
                      className: "grid grid-cols-1 lg:grid-cols-2 gap-8",
                      children: [
                        (0, a.jsxs)(n.Zp, {
                          className:
                            "p-6 md:p-8 border-transparent hover:shadow-lg hover:border-border/20 transition-all duration-300 bg-background rounded-2xl",
                          children: [
                            (0, a.jsx)("div", {
                              className:
                                "w-12 h-12 rounded-full flex items-center justify-center mb-5 text-primary bg-primary/10",
                              children: (0, a.jsx)(o.A, {
                                className: "h-6 w-6",
                              }),
                            }),
                            (0, a.jsx)(k.D, {
                              level: 3,
                              className: "text-xl mb-6",
                              children: "Aufbau des deutschen Lebenslaufs",
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
                                    (0, a.jsxs)(A.f, {
                                      className: "text-sm",
                                      children: [
                                        (0, a.jsx)("strong", {
                                          children: "Pers\xf6nliche Daten:",
                                        }),
                                        " Vollst\xe4ndiger Name, Anschrift, Telefon, E-Mail",
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
                                    (0, a.jsxs)(A.f, {
                                      className: "text-sm",
                                      children: [
                                        (0, a.jsx)("strong", {
                                          children: "Bewerbungsfoto:",
                                        }),
                                        " Professionelles Foto (optional, aber empfohlen)",
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
                                    (0, a.jsxs)(A.f, {
                                      className: "text-sm",
                                      children: [
                                        (0, a.jsx)("strong", {
                                          children: "Schulische Laufbahn:",
                                        }),
                                        " Chronologisch, mit Abschl\xfcssen und Noten",
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
                                    (0, a.jsxs)(A.f, {
                                      className: "text-sm",
                                      children: [
                                        (0, a.jsx)("strong", {
                                          children: "Praktika & Erfahrungen:",
                                        }),
                                        " Relevante berufliche Erfahrungen",
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
                                    (0, a.jsxs)(A.f, {
                                      className: "text-sm",
                                      children: [
                                        (0, a.jsx)("strong", {
                                          children:
                                            "Kenntnisse & F\xe4higkeiten:",
                                        }),
                                        " Sprachen, Software, besondere Qualifikationen",
                                      ],
                                    }),
                                  ],
                                }),
                              ],
                            }),
                          ],
                        }),
                        (0, a.jsxs)(n.Zp, {
                          className:
                            "p-6 md:p-8 border-transparent hover:shadow-lg hover:border-border/20 transition-all duration-300 bg-background rounded-2xl",
                          children: [
                            (0, a.jsx)("div", {
                              className:
                                "w-12 h-12 rounded-full flex items-center justify-center mb-5 text-secondary bg-secondary/10",
                              children: (0, a.jsx)(x.A, {
                                className: "h-6 w-6",
                              }),
                            }),
                            (0, a.jsx)(k.D, {
                              level: 3,
                              className: "text-xl mb-6",
                              children: "Tipps f\xfcr internationale Bewerber",
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
                                    (0, a.jsxs)(A.f, {
                                      className: "text-sm",
                                      children: [
                                        (0, a.jsx)("strong", {
                                          children: "Zeugnisse \xfcbersetzen:",
                                        }),
                                        " Alle Abschl\xfcsse von vereidigten \xdcbersetzern",
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
                                    (0, a.jsxs)(A.f, {
                                      className: "text-sm",
                                      children: [
                                        (0, a.jsx)("strong", {
                                          children: "Deutsche Formatierung:",
                                        }),
                                        " Datum im Format TT.MM.JJJJ",
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
                                    (0, a.jsxs)(A.f, {
                                      className: "text-sm",
                                      children: [
                                        (0, a.jsx)("strong", {
                                          children: "Sprachkenntnisse:",
                                        }),
                                        " Nach dem Gemeinsamen Europ\xe4ischen Referenzrahmen",
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
                                    (0, a.jsxs)(A.f, {
                                      className: "text-sm",
                                      children: [
                                        (0, a.jsx)("strong", {
                                          children: "Kulturelle Anpassung:",
                                        }),
                                        " Deutsche Bewerbungsstandards beachten",
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
              className: "py-16 md:py-24 bg-secondary",
              children: (0, a.jsxs)("div", {
                className: "container px-4 md:px-6",
                children: [
                  (0, a.jsxs)("div", {
                    className: "text-center max-w-2xl mx-auto mb-12",
                    children: [
                      (0, a.jsx)(k.D, {
                        level: 3,
                        className: "text-2xl md:text-3xl mb-4",
                        children: "H\xe4ufig gestellte Fragen",
                      }),
                      (0, a.jsx)(A.f, {
                        className: "text-lg",
                        children:
                          "Die wichtigsten Antworten zu unseren Lebenslauf-Vorlagen",
                      }),
                    ],
                  }),
                  (0, a.jsxs)("div", {
                    className: "max-w-3xl mx-auto space-y-6",
                    children: [
                      (0, a.jsxs)(n.Zp, {
                        className:
                          "p-6 text-left hover:shadow-lg transition-shadow rounded-2xl",
                        children: [
                          (0, a.jsxs)(k.D, {
                            level: 4,
                            className: "mb-4 flex items-center gap-2",
                            children: [
                              (0, a.jsx)(o.A, {
                                className: "w-5 h-5 text-primary",
                              }),
                              "Sind die Lebenslauf-Vorlagen wirklich kostenlos?",
                            ],
                          }),
                          (0, a.jsx)(A.f, {
                            className: "text-sm",
                            children:
                              "Ja, alle Vorlagen sind komplett kostenlos. Du kannst sie herunterladen, bearbeiten und f\xfcr deine Bewerbungen verwenden, ohne versteckte Kosten.",
                          }),
                        ],
                      }),
                      (0, a.jsxs)(n.Zp, {
                        className:
                          "p-6 text-left hover:shadow-lg transition-shadow rounded-2xl",
                        children: [
                          (0, a.jsxs)(k.D, {
                            level: 4,
                            className: "mb-4 flex items-center gap-2",
                            children: [
                              (0, a.jsx)(o.A, {
                                className: "w-5 h-5 text-primary",
                              }),
                              "Kann ich die Vorlagen nach dem Download bearbeiten?",
                            ],
                          }),
                          (0, a.jsx)(A.f, {
                            className: "text-sm",
                            children:
                              "Alle Vorlagen sind als editierbare PDF-Dateien verf\xfcgbar. Du kannst sie mit g\xe4ngigen PDF-Editoren oder unserem Online-Tool bearbeiten.",
                          }),
                        ],
                      }),
                      (0, a.jsxs)(n.Zp, {
                        className:
                          "p-6 text-left hover:shadow-lg transition-shadow rounded-2xl",
                        children: [
                          (0, a.jsxs)(k.D, {
                            level: 4,
                            className: "mb-4 flex items-center gap-2",
                            children: [
                              (0, a.jsx)(o.A, {
                                className: "w-5 h-5 text-primary",
                              }),
                              "Welche Vorlage ist am besten f\xfcr internationale Studenten?",
                            ],
                          }),
                          (0, a.jsx)(A.f, {
                            className: "text-sm",
                            children:
                              'Die "Modern International" Vorlage ist speziell f\xfcr internationale Bewerber entwickelt und ber\xfccksichtigt die besonderen Anforderungen bei der Bewerbung in Deutschland.',
                          }),
                        ],
                      }),
                      (0, a.jsx)("div", {
                        className:
                          "text-center mt-12 p-6 bg-background rounded-2xl",
                        children: (0, a.jsx)(A.f, {
                          className: "text-primary font-medium",
                          children:
                            "Tipp: Nutze unseren kostenlosen ATS-Checker nach dem Download",
                        }),
                      }),
                    ],
                  }),
                ],
              }),
            }),
            (0, a.jsx)(g.HomepageLeadMagnet, { pdfType: "complete-guide" }),
            (0, a.jsx)(i.CTASection, {
              badge: { text: "Jetzt starten" },
              title: "Bereit f\xfcr deine erfolgreiche Bewerbung?",
              description:
                "Nutze unsere kostenlosen Vorlagen und Tools, um deine Chancen auf einen Ausbildungsplatz zu maximieren.",
              action: {
                text: "Vorlagen durchst\xf6bern",
                href: "#templates",
                variant: "default",
              },
              secondaryAction: {
                text: "Kostenlose Beratung",
                href: "/contact",
                variant: "outline",
              },
              className: "bg-secondary",
            }),
          ],
        });
      }
    },
  },
  (e) => {
    var s = (s) => e((e.s = s));
    (e.O(0, [46593, 36209, 84121, 72076, 77358], () => s(23401)),
      (_N_E = e.O()));
  },
]);
