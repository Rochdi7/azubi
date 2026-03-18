(self.webpackChunk_N_E = self.webpackChunk_N_E || []).push([
  [34462],
  {
    42372: (e, n, r) => {
      "use strict";
      (r.r(n), r.d(n, { default: () => N }));
      var s = r(70207),
        t = r(87223),
        i = r(74285),
        a = r(27239),
        l = r(95540),
        d = r(47161),
        c = r(31670),
        o = r(29005),
        u = r(43431),
        m = r(62839),
        h = r(36521),
        x = r(39441),
        g = r(40167),
        f = r(61607),
        p = r(80187),
        b = r(44649),
        j = r(90817);
      function N() {
        let { currentEmployer: e, employerId: n, isLoading: r } = (0, j.B)(),
          [N, w] = (0, t.useState)(""),
          [v, k] = (0, t.useState)(""),
          [S, y] = (0, t.useState)(""),
          [A, z] = (0, t.useState)("");
        if (r)
          return (0, s.jsx)("div", {
            className: "min-h-screen bg-cream p-4 md:p-8",
            children: (0, s.jsxs)("div", {
              className: "max-w-5xl mx-auto space-y-8",
              children: [
                (0, s.jsxs)("div", {
                  className: "text-center space-y-4",
                  children: [
                    (0, s.jsx)("div", {
                      className:
                        "h-10 bg-muted/20 rounded-lg w-64 mx-auto animate-pulse",
                    }),
                    (0, s.jsx)("div", {
                      className:
                        "h-6 bg-muted/20 rounded-lg w-96 mx-auto animate-pulse",
                    }),
                  ],
                }),
                (0, s.jsx)("div", {
                  className: "grid grid-cols-1 md:grid-cols-3 gap-4",
                  children: [1, 2, 3].map((e) =>
                    (0, s.jsx)(
                      "div",
                      {
                        className: "h-40 bg-muted/20 rounded-xl animate-pulse",
                      },
                      e,
                    ),
                  ),
                }),
              ],
            }),
          });
        if (!n || !e) return null;
        let q = [
            {
              id: "getting-started",
              title: "Erste Schritte",
              icon: i.A,
              faqs: [
                {
                  question: "Wie erstelle ich meine erste Stellenanzeige?",
                  answer:
                    'Klicken Sie auf "Neue Stelle" im Men\xfc "Meine Stellen". F\xfcllen Sie alle erforderlichen Felder aus, einschlie\xdflich Stellenbeschreibung, Anforderungen und Gehaltsinformationen. Sie k\xf6nnen die Stelle als Entwurf speichern oder direkt ver\xf6ffentlichen.',
                },
                {
                  question: "Wie verifiziere ich mein Unternehmenskonto?",
                  answer:
                    "Gehen Sie zu den Einstellungen und laden Sie die erforderlichen Dokumente hoch (Handelsregisterauszug, Gewerbeanmeldung). Unser Team pr\xfcft Ihre Unterlagen innerhalb von 2-3 Werktagen.",
                },
                {
                  question:
                    "Welche Informationen sollte eine gute Stellenanzeige enthalten?",
                  answer:
                    "Eine gute Stellenanzeige enth\xe4lt: Klare Stellenbezeichnung, detaillierte Aufgabenbeschreibung, Anforderungen und Qualifikationen, Gehaltsbereich, Standort, Startdatum, Unternehmensvorteile und Bewerbungsprozess.",
                },
              ],
            },
            {
              id: "applications",
              title: "Bewerbungen & Kandidaten",
              icon: a.A,
              faqs: [
                {
                  question: "Wie kann ich Bewerbungen filtern und sortieren?",
                  answer:
                    "Auf der Bewerbungsseite finden Sie Filter nach Status (Neu, In Pr\xfcfung, Shortlist, etc.). Sie k\xf6nnen auch nach Stellenanzeige filtern und Bewerbungen durchsuchen.",
                },
                {
                  question: "Wie kontaktiere ich einen Bewerber?",
                  answer:
                    'Klicken Sie auf das Profil des Bewerbers und w\xe4hlen Sie "Nachricht senden". Sie k\xf6nnen direkt \xfcber unsere Plattform kommunizieren oder die angegebene E-Mail-Adresse verwenden.',
                },
                {
                  question: "Kann ich Bewerbungsunterlagen herunterladen?",
                  answer:
                    "Ja, Sie k\xf6nnen alle eingereichten Dokumente (Lebenslauf, Anschreiben, Zertifikate) direkt herunterladen. Klicken Sie einfach auf das Dokument im Bewerberprofil.",
                },
              ],
            },
            {
              id: "billing",
              title: "Abrechnung & Preise",
              icon: l.A,
              faqs: [
                {
                  question: "Wie funktioniert das Preismodell?",
                  answer:
                    "Wir bieten verschiedene Pakete an: Basis (kostenlos, 1 Stellenanzeige), Standard (monatlich, 5 Stellenanzeigen) und Premium (monatlich, unbegrenzte Stellenanzeigen plus erweiterte Funktionen).",
                },
                {
                  question: "Kann ich mein Paket jederzeit \xe4ndern?",
                  answer:
                    "Ja, Sie k\xf6nnen Ihr Paket jederzeit upgraden oder downgraden. \xc4nderungen werden zum n\xe4chsten Abrechnungszeitraum wirksam.",
                },
                {
                  question: "Gibt es eine Geld-zur\xfcck-Garantie?",
                  answer:
                    "Ja, wir bieten eine 30-Tage-Geld-zur\xfcck-Garantie f\xfcr alle kostenpflichtigen Pakete. Kontaktieren Sie einfach unseren Support.",
                },
              ],
            },
            {
              id: "technical",
              title: "Technische Fragen",
              icon: d.A,
              faqs: [
                {
                  question: "Welche Browser werden unterst\xfctzt?",
                  answer:
                    "Unsere Plattform funktioniert optimal mit den neuesten Versionen von Chrome, Firefox, Safari und Edge. Wir empfehlen, Ihren Browser immer auf dem neuesten Stand zu halten.",
                },
                {
                  question: "Ist die Plattform auch mobil nutzbar?",
                  answer:
                    "Ja, unsere Plattform ist vollst\xe4ndig responsive und kann auf Smartphones und Tablets genutzt werden. Wir bieten auch eine mobile App (in Entwicklung).",
                },
                {
                  question: "Wie sicher sind meine Daten?",
                  answer:
                    "Wir verwenden modernste Verschl\xfcsselungstechnologien und entsprechen den DSGVO-Anforderungen. Alle Daten werden sicher auf Servern in Deutschland gespeichert.",
                },
              ],
            },
          ],
          W = [
            {
              icon: c.A,
              title: "Video-Tutorials",
              description:
                "Schritt-f\xfcr-Schritt Anleitungen f\xfcr alle Funktionen",
              link: "#",
            },
            {
              icon: i.A,
              title: "Handbuch",
              description: "Vollst\xe4ndige Dokumentation und Best Practices",
              link: "#",
            },
            {
              icon: o.A,
              title: "Community Forum",
              description: "Austausch mit anderen Arbeitgebern",
              link: "#",
            },
          ];
        return (0, s.jsx)("div", {
          className: "min-h-screen bg-cream p-4 md:p-8",
          children: (0, s.jsxs)("div", {
            className: "max-w-5xl mx-auto space-y-8",
            children: [
              (0, s.jsxs)("div", {
                className: "text-center space-y-4",
                children: [
                  (0, s.jsx)("h1", {
                    className: "text-3xl md:text-4xl font-bold text-foreground",
                    children: "Hilfe & Support",
                  }),
                  (0, s.jsx)("p", {
                    className:
                      "text-lg text-muted-foreground max-w-2xl mx-auto",
                    children:
                      "Wir sind hier, um Ihnen zu helfen. Durchsuchen Sie unsere FAQs oder kontaktieren Sie unser Support-Team.",
                  }),
                  (0, s.jsx)("div", {
                    className: "max-w-2xl mx-auto pt-4",
                    children: (0, s.jsxs)("div", {
                      className: "relative",
                      children: [
                        (0, s.jsx)(u.A, {
                          className:
                            "absolute left-4 top-1/2 -translate-y-1/2 h-5 w-5 text-muted-foreground",
                        }),
                        (0, s.jsx)(g.p, {
                          type: "text",
                          placeholder: "Suchen Sie nach Antworten...",
                          value: N,
                          onChange: (e) => w(e.target.value),
                          className:
                            "pl-12 h-14 bg-background border-border/40 rounded-full text-base shadow-sm",
                        }),
                      ],
                    }),
                  }),
                ],
              }),
              (0, s.jsx)("div", {
                className: "grid grid-cols-1 md:grid-cols-3 gap-4",
                children: W.map((e, n) => {
                  let r = e.icon;
                  return (0, s.jsx)(
                    p.Zp,
                    {
                      className:
                        "border-border/40 shadow-sm rounded-xl hover:shadow-md transition-shadow cursor-pointer",
                      children: (0, s.jsx)(p.Wu, {
                        className: "p-6",
                        children: (0, s.jsxs)("div", {
                          className: "space-y-3",
                          children: [
                            (0, s.jsx)("div", {
                              className:
                                "w-12 h-12 bg-primary/10 rounded-full flex items-center justify-center",
                              children: (0, s.jsx)(r, {
                                className: "h-6 w-6 text-primary",
                              }),
                            }),
                            (0, s.jsxs)("div", {
                              children: [
                                (0, s.jsx)("h3", {
                                  className:
                                    "font-semibold text-foreground mb-1",
                                  children: e.title,
                                }),
                                (0, s.jsx)("p", {
                                  className: "text-sm text-muted-foreground",
                                  children: e.description,
                                }),
                              ],
                            }),
                            (0, s.jsxs)(x.$, {
                              variant: "link",
                              className: "p-0 h-auto text-primary font-medium",
                              children: [
                                "Mehr erfahren",
                                (0, s.jsx)(m.A, { className: "h-3 w-3 ml-1" }),
                              ],
                            }),
                          ],
                        }),
                      }),
                    },
                    n,
                  );
                }),
              }),
              (0, s.jsxs)("div", {
                className: "space-y-6",
                children: [
                  (0, s.jsx)("h2", {
                    className: "text-2xl font-bold text-foreground",
                    children: "H\xe4ufig gestellte Fragen",
                  }),
                  q.map((e) => {
                    let n = e.icon;
                    return (0, s.jsxs)(
                      p.Zp,
                      {
                        className: "border-border/40 shadow-sm rounded-xl",
                        children: [
                          (0, s.jsx)(p.aR, {
                            children: (0, s.jsxs)(p.ZB, {
                              className: "flex items-center gap-3 text-xl",
                              children: [
                                (0, s.jsx)("div", {
                                  className:
                                    "w-10 h-10 bg-primary/10 rounded-full flex items-center justify-center",
                                  children: (0, s.jsx)(n, {
                                    className: "h-5 w-5 text-primary",
                                  }),
                                }),
                                e.title,
                              ],
                            }),
                          }),
                          (0, s.jsx)(p.Wu, {
                            children: (0, s.jsx)(b.Accordion, {
                              type: "single",
                              collapsible: !0,
                              className: "space-y-2",
                              children: e.faqs.map((n, r) =>
                                (0, s.jsxs)(
                                  b.AccordionItem,
                                  {
                                    value: "".concat(e.id, "-").concat(r),
                                    className:
                                      "border border-border/30 rounded-lg px-4 bg-background/50",
                                    children: [
                                      (0, s.jsx)(b.AccordionTrigger, {
                                        className:
                                          "text-left font-medium hover:no-underline",
                                        children: n.question,
                                      }),
                                      (0, s.jsx)(b.AccordionContent, {
                                        className:
                                          "text-muted-foreground leading-relaxed",
                                        children: n.answer,
                                      }),
                                    ],
                                  },
                                  r,
                                ),
                              ),
                            }),
                          }),
                        ],
                      },
                      e.id,
                    );
                  }),
                ],
              }),
              (0, s.jsxs)(p.Zp, {
                className: "border-border/40 shadow-sm rounded-xl",
                children: [
                  (0, s.jsxs)(p.aR, {
                    children: [
                      (0, s.jsx)(p.ZB, {
                        className: "text-2xl",
                        children: "Kontaktieren Sie uns",
                      }),
                      (0, s.jsx)("p", {
                        className: "text-muted-foreground",
                        children:
                          "Haben Sie keine Antwort gefunden? Unser Support-Team hilft Ihnen gerne weiter.",
                      }),
                    ],
                  }),
                  (0, s.jsx)(p.Wu, {
                    children: (0, s.jsxs)("div", {
                      className: "grid grid-cols-1 md:grid-cols-2 gap-8",
                      children: [
                        (0, s.jsx)("div", {
                          children: (0, s.jsxs)("form", {
                            onSubmit: (e) => {
                              e.preventDefault();
                            },
                            className: "space-y-4",
                            children: [
                              (0, s.jsxs)("div", {
                                children: [
                                  (0, s.jsx)("label", {
                                    htmlFor: "name",
                                    className:
                                      "text-sm font-medium text-foreground block mb-2",
                                    children: "Ihr Name",
                                  }),
                                  (0, s.jsx)(g.p, {
                                    id: "name",
                                    type: "text",
                                    placeholder: "Max Mustermann",
                                    value: v,
                                    onChange: (e) => k(e.target.value),
                                    className: "border-border/40 rounded-lg",
                                    required: !0,
                                  }),
                                ],
                              }),
                              (0, s.jsxs)("div", {
                                children: [
                                  (0, s.jsx)("label", {
                                    htmlFor: "email",
                                    className:
                                      "text-sm font-medium text-foreground block mb-2",
                                    children: "E-Mail-Adresse",
                                  }),
                                  (0, s.jsx)(g.p, {
                                    id: "email",
                                    type: "email",
                                    placeholder: "max@beispiel.de",
                                    value: S,
                                    onChange: (e) => y(e.target.value),
                                    className: "border-border/40 rounded-lg",
                                    required: !0,
                                  }),
                                ],
                              }),
                              (0, s.jsxs)("div", {
                                children: [
                                  (0, s.jsx)("label", {
                                    htmlFor: "message",
                                    className:
                                      "text-sm font-medium text-foreground block mb-2",
                                    children: "Ihre Nachricht",
                                  }),
                                  (0, s.jsx)(f.T, {
                                    id: "message",
                                    placeholder:
                                      "Beschreiben Sie Ihr Anliegen...",
                                    value: A,
                                    onChange: (e) => z(e.target.value),
                                    className:
                                      "min-h-[120px] border-border/40 rounded-lg",
                                    required: !0,
                                  }),
                                ],
                              }),
                              (0, s.jsx)(x.$, {
                                type: "submit",
                                className:
                                  "w-full rounded-full bg-primary hover:bg-primary/90 text-primary-foreground",
                                children: "Nachricht senden",
                              }),
                            ],
                          }),
                        }),
                        (0, s.jsxs)("div", {
                          className: "space-y-6",
                          children: [
                            (0, s.jsxs)("div", {
                              children: [
                                (0, s.jsx)("h3", {
                                  className:
                                    "font-semibold text-foreground mb-4",
                                  children: "Weitere Kontaktm\xf6glichkeiten",
                                }),
                                (0, s.jsxs)("div", {
                                  className: "space-y-4",
                                  children: [
                                    (0, s.jsxs)("div", {
                                      className: "flex items-start gap-3",
                                      children: [
                                        (0, s.jsx)("div", {
                                          className:
                                            "w-10 h-10 bg-primary/10 rounded-full flex items-center justify-center flex-shrink-0",
                                          children: (0, s.jsx)(l.A, {
                                            className: "h-5 w-5 text-primary",
                                          }),
                                        }),
                                        (0, s.jsxs)("div", {
                                          children: [
                                            (0, s.jsx)("p", {
                                              className:
                                                "font-medium text-foreground",
                                              children: "E-Mail Support",
                                            }),
                                            (0, s.jsx)("p", {
                                              className:
                                                "text-sm text-muted-foreground",
                                              children:
                                                "support@azubi.ma",
                                            }),
                                            (0, s.jsx)("p", {
                                              className:
                                                "text-xs text-muted-foreground mt-1",
                                              children:
                                                "Antwortzeit: Innerhalb von 24 Stunden",
                                            }),
                                          ],
                                        }),
                                      ],
                                    }),
                                    (0, s.jsxs)("div", {
                                      className: "flex items-start gap-3",
                                      children: [
                                        (0, s.jsx)("div", {
                                          className:
                                            "w-10 h-10 bg-primary/10 rounded-full flex items-center justify-center flex-shrink-0",
                                          children: (0, s.jsx)(h.A, {
                                            className: "h-5 w-5 text-primary",
                                          }),
                                        }),
                                        (0, s.jsxs)("div", {
                                          children: [
                                            (0, s.jsx)("p", {
                                              className:
                                                "font-medium text-foreground",
                                              children: "Telefon Support",
                                            }),
                                            (0, s.jsx)("p", {
                                              className:
                                                "text-sm text-muted-foreground",
                                              children: "+49 (0) 30 1234 5678",
                                            }),
                                            (0, s.jsx)("p", {
                                              className:
                                                "text-xs text-muted-foreground mt-1",
                                              children:
                                                "Mo-Fr: 9:00 - 18:00 Uhr",
                                            }),
                                          ],
                                        }),
                                      ],
                                    }),
                                    (0, s.jsxs)("div", {
                                      className: "flex items-start gap-3",
                                      children: [
                                        (0, s.jsx)("div", {
                                          className:
                                            "w-10 h-10 bg-primary/10 rounded-full flex items-center justify-center flex-shrink-0",
                                          children: (0, s.jsx)(o.A, {
                                            className: "h-5 w-5 text-primary",
                                          }),
                                        }),
                                        (0, s.jsxs)("div", {
                                          children: [
                                            (0, s.jsx)("p", {
                                              className:
                                                "font-medium text-foreground",
                                              children: "Live Chat",
                                            }),
                                            (0, s.jsx)("p", {
                                              className:
                                                "text-sm text-muted-foreground",
                                              children:
                                                "Sofortige Hilfe w\xe4hrend der Gesch\xe4ftszeiten",
                                            }),
                                            (0, s.jsx)(x.$, {
                                              variant: "link",
                                              className:
                                                "p-0 h-auto text-primary font-medium mt-1",
                                              disabled: !0,
                                              children: "Chat starten",
                                            }),
                                          ],
                                        }),
                                      ],
                                    }),
                                  ],
                                }),
                              ],
                            }),
                            (0, s.jsx)("div", {
                              className:
                                "p-4 bg-beige rounded-xl border border-border/30",
                              children: (0, s.jsxs)("p", {
                                className: "text-sm text-foreground",
                                children: [
                                  (0, s.jsx)("strong", { children: "Tipp:" }),
                                  " F\xfcr technische Probleme f\xfcgen Sie bitte Screenshots oder Fehlermeldungen zu Ihrer Anfrage hinzu. Das hilft uns, Ihr Problem schneller zu l\xf6sen.",
                                ],
                              }),
                            }),
                          ],
                        }),
                      ],
                    }),
                  }),
                ],
              }),
            ],
          }),
        });
      }
    },
    78050: (e, n, r) => {
      Promise.resolve().then(r.bind(r, 42372));
    },
  },
  (e) => {
    var n = (n) => e((e.s = n));
    (e.O(0, [46593, 36209, 84121, 72076, 77358], () => n(78050)),
      (_N_E = e.O()));
  },
]);
