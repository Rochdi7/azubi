(self.webpackChunk_N_E = self.webpackChunk_N_E || []).push([
  [43297],
  {
    18427: (e, s, t) => {
      "use strict";
      t.d(s, { FAQSection: () => l });
      var i = t(70207),
        a = t(68528),
        r = t(44649);
      let n = [
        {
          question:
            "Wie sind die Deutschkenntnisse der Kandidaten verifiziert?",
          answer:
            "Alle Kandidaten durchlaufen standardisierte Deutschtests (Goethe-Institut oder telc) und m\xfcssen ihre Sprachniveaus (A1-C2) nachweisen. Wir verifizieren alle Zertifikate und f\xfchren zus\xe4tzliche m\xfcndliche Bewertungen durch, um sicherzustellen, dass die angegebenen Sprachniveaus der Realit\xe4t entsprechen.",
        },
        {
          question: "Helfen Sie bei Visa und Aufenthaltserlaubnis?",
          answer:
            "Ja, wir bieten umfassende Unterst\xfctzung beim Visa-Prozess. Wir stellen Informationsmaterialien, Checklisten und Guidance zur Verf\xfcgung. Unsere Kandidaten sind bereits mit dem Prozess vertraut und wissen, welche Schritte erforderlich sind.",
        },
        {
          question:
            "Was kostet die Nutzung wirklich? Gibt es versteckte Geb\xfchren?",
          answer:
            "Nein, Azubi ist 100% kostenlos f\xfcr Arbeitgeber. Wir erheben keine Vermittlungsgeb\xfchren, keine Abonnementkosten und keine versteckten Geb\xfchren. Sie k\xf6nnen unbegrenzt Stellen ver\xf6ffentlichen und mit Kandidaten kommunizieren – komplett kostenfrei.",
        },
        {
          question: "Wie lange dauert der Visa-Prozess?",
          answer:
            "Der Visa-Prozess f\xfcr eine Ausbildung in Deutschland dauert in der Regel 6-12 Wochen, abh\xe4ngig vom Herkunftsland und der Auslastung der deutschen Botschaft. Wir empfehlen, den Prozess mindestens 3-4 Monate vor dem geplanten Ausbildungsbeginn zu starten.",
        },
        {
          question:
            "Was ist, wenn der Kandidat nicht nach Deutschland kommen kann?",
          answer:
            "In seltenen F\xe4llen kann ein Visum abgelehnt werden oder andere Umst\xe4nde verhindern die Einreise. Da unsere Plattform kostenlos ist, entstehen Ihnen keine finanziellen Verluste. Sie k\xf6nnen dann einfach weitere Kandidaten kontaktieren. Wir helfen Ihnen, schnell passende Alternativen zu finden.",
        },
        {
          question:
            "Unterscheiden sich internationale Azubis rechtlich von deutschen?",
          answer:
            "Internationale Azubis mit g\xfcltiger Aufenthaltserlaubnis haben die gleichen Rechte und Pflichten wie deutsche Auszubildende. Sie unterliegen denselben Arbeitsgesetzen, Ausbildungsverordnungen und haben Anspruch auf dieselbe Verg\xfctung. Der einzige Unterschied besteht in den Visa-Anforderungen vor der Einstellung.",
        },
        {
          question: "Bieten Sie Unterst\xfctzung bei der Integration?",
          answer:
            "Ja, wir stellen Ressourcen f\xfcr kulturelle Integration bereit, einschlie\xdflich Onboarding-Checklisten, Informationen zur deutschen Arbeitskultur und Tipps f\xfcr Arbeitgeber. Wir unterst\xfctzen Sie auch bei der Wohnungssuche durch unser Partner-Netzwerk.",
        },
        {
          question: "Wie schnell erhalte ich Bewerbungen?",
          answer:
            "Die meisten Arbeitgeber erhalten innerhalb der ersten 7-14 Tage nach Ver\xf6ffentlichung 8-12 qualifizierte Bewerbungen. Die Geschwindigkeit h\xe4ngt von Faktoren wie Standort, Branche und spezifischen Anforderungen ab.",
        },
      ];
      function l() {
        return (0, i.jsx)(a.$, {
          background: "white",
          id: "faq",
          className: "py-16 md:py-24",
          children: (0, i.jsxs)("div", {
            className: "max-w-4xl mx-auto space-y-12",
            children: [
              (0, i.jsxs)("h2", {
                className: "text-3xl md:text-4xl font-bold text-center",
                children: [
                  "H\xe4ufig gestellte ",
                  (0, i.jsx)("span", {
                    className: "text-primary",
                    children: "Fragen",
                  }),
                ],
              }),
              (0, i.jsx)(r.Accordion, {
                type: "single",
                collapsible: !0,
                className: "space-y-4",
                children: n.map((e, s) =>
                  (0, i.jsxs)(
                    r.AccordionItem,
                    {
                      value: "item-".concat(s),
                      className:
                        "border border-border rounded-xl px-6 bg-cream/30 hover:bg-cream transition-colors",
                      children: [
                        (0, i.jsx)(r.AccordionTrigger, {
                          className:
                            "text-left font-semibold text-secondary hover:text-primary hover:no-underline py-5",
                          children: e.question,
                        }),
                        (0, i.jsx)(r.AccordionContent, {
                          className:
                            "text-muted-foreground leading-relaxed pb-5",
                          children: e.answer,
                        }),
                      ],
                    },
                    s,
                  ),
                ),
              }),
            ],
          }),
        });
      }
    },
    21885: (e, s, t) => {
      "use strict";
      t.d(s, { WhyChooseSection: () => h });
      var i = t(70207),
        a = t(10542),
        r = t.n(a),
        n = t(50018),
        l = t(46031),
        d = t(27845),
        o = t(68528),
        c = t(39441),
        x = t(81555);
      let m = [
        {
          id: "verification",
          title: "Verifizierte Deutschkenntnisse",
          description:
            "Alle Kandidaten mit B1-C1 Zertifikaten. Dokumente und Sprachniveaus pers\xf6nlich gepr\xfcft f\xfcr Ihre Sicherheit.",
          badge: { text: "Qualit\xe4tsgepr\xfcft", color: "green" },
          image: {
            src: "/images/benefits/verification-mascot.webp",
            alt: "Verifizierte Kandidaten",
          },
          gradient: "green",
          cardSize: "large-vertical",
        },
        {
          id: "cost",
          title: "100% Kostenlos f\xfcr Arbeitgeber",
          description:
            "Keine versteckten Kosten, keine Vermittlungsgeb\xfchren, keine Abos. Kostenlos.",
          image: {
            src: "/images/benefits/cost-free-mascot.webp",
            alt: "Kostenlos",
          },
          gradient: "orange",
          cardSize: "horizontal",
        },
        {
          id: "speed",
          title: "2 Wochen bis zur ersten Bewerbung",
          description:
            "Direkter Kandidatenkontakt ohne Wartezeit. Schneller Einstellungsprozess.",
          image: {
            src: "/images/benefits/timeline-mascot.webp",
            alt: "Schneller Prozess",
          },
          gradient: "cream",
          cardSize: "large-vertical",
        },
        {
          id: "legal",
          title: "Vollst\xe4ndig Rechtssicher",
          description:
            "Visa-Unterst\xfctzung, konform mit Ausl\xe4nderbesch\xe4ftigungsgesetz und DSGVO. Ihre rechtliche Sicherheit ist garantiert.",
          badge: { text: "DSGVO-konform", color: "blue" },
          image: {
            src: "/images/benefits/legal-mascot.webp",
            alt: "Rechtssicherheit",
          },
          gradient: "green",
          cardSize: "large-vertical",
        },
        {
          id: "integration",
          title: "Vorbereitet f\xfcr deutsche Arbeitskultur",
          description:
            "Kandidaten kennen P\xfcnktlichkeit, Teamarbeit und deutsche Arbeitswerte. Nahtlose Integration ins Team.",
          image: {
            src: "/images/benefits/integration-mascot.webp",
            alt: "Kulturelle Integration",
          },
          gradient: "cream",
          cardSize: "horizontal",
        },
        {
          id: "support",
          title: "Pers\xf6nlicher Support",
          description:
            "Email-Support und umfassende Hilfe-Dokumentation. Wir sind f\xfcr Sie da.",
          image: {
            src: "/images/benefits/support-mascot.webp",
            alt: "Support",
          },
          gradient: "orange",
          cardSize: "standard",
        },
      ];
      function h() {
        return (0, i.jsx)(o.$, {
          background: "white",
          className: "py-12 md:py-16 lg:py-20",
          children: (0, i.jsxs)("div", {
            className: "max-w-7xl mx-auto space-y-12",
            children: [
              (0, i.jsxs)("div", {
                className: "text-center space-y-4 max-w-3xl mx-auto",
                children: [
                  (0, i.jsxs)("h2", {
                    className:
                      "text-3xl md:text-4xl lg:text-5xl font-bold text-secondary",
                    children: [
                      "Warum Arbeitgeber",
                      " ",
                      (0, i.jsx)("span", {
                        className: "text-primary",
                        children: "Azubi w\xe4hlen",
                      }),
                    ],
                  }),
                  (0, i.jsx)("p", {
                    className: "text-base md:text-lg text-secondary/70",
                    children:
                      "Die perfekte L\xf6sung f\xfcr internationale Fachkr\xe4ftegewinnung – kostenlos, rechtssicher und effizient.",
                  }),
                ],
              }),
              (0, i.jsxs)("div", {
                className: "hidden lg:grid lg:grid-cols-3 gap-6",
                children: [
                  (0, i.jsx)(d.Q, { ...m[0] }),
                  (0, i.jsx)(d.Q, { ...m[1] }),
                  (0, i.jsx)(d.Q, { ...m[2] }),
                  (0, i.jsx)(d.Q, { ...m[3] }),
                  (0, i.jsxs)(r(), {
                    href: "/arbeitgeber/auth/anmeldung",
                    className:
                      "group px-5 py-4 rounded-2xl bg-secondary text-white hover:shadow-xl transition-all duration-300 flex items-center justify-between hover:bg-secondary/90 border border-black/20 self-start h-[75px]",
                    children: [
                      (0, i.jsxs)("div", {
                        className: "flex items-center gap-3",
                        children: [
                          (0, i.jsx)("div", {
                            className: "flex -space-x-2",
                            children: x.T.slice(0, 3).map((e, s) =>
                              (0, i.jsx)(
                                "div",
                                {
                                  className:
                                    "w-9 h-9 rounded-full bg-white border-[3px] border-white shadow-md overflow-hidden flex-shrink-0",
                                  children: (0, i.jsx)(n.default, {
                                    src: e,
                                    alt: "Avatar ".concat(s + 1),
                                    width: 36,
                                    height: 36,
                                    className: "w-full h-full object-cover",
                                  }),
                                },
                                s,
                              ),
                            ),
                          }),
                          (0, i.jsxs)("div", {
                            className: "leading-tight",
                            children: [
                              (0, i.jsxs)("p", {
                                className: "text-xs font-medium",
                                children: [
                                  (0, i.jsx)("span", {
                                    className: "text-lg font-bold",
                                    children: "847",
                                  }),
                                  " Unternehmen",
                                ],
                              }),
                              (0, i.jsx)("span", {
                                className: "text-xs font-medium",
                                children: "Jetzt starten",
                              }),
                            ],
                          }),
                        ],
                      }),
                      (0, i.jsx)("div", {
                        className:
                          "flex items-center justify-center w-8 h-8 rounded-full bg-white/10 group-hover:bg-white/20 transition-colors flex-shrink-0",
                        children: (0, i.jsx)(l.A, {
                          className:
                            "w-4 h-4 group-hover:translate-x-1 transition-transform",
                        }),
                      }),
                    ],
                  }),
                  (0, i.jsx)(d.Q, { ...m[5] }),
                  (0, i.jsx)(d.Q, { ...m[4] }),
                ],
              }),
              (0, i.jsxs)("div", {
                className: "hidden md:grid lg:hidden md:grid-cols-2 gap-6",
                children: [
                  m.map((e) =>
                    (0, i.jsx)(d.Q, { ...e, cardSize: "standard" }, e.id),
                  ),
                  (0, i.jsxs)("div", {
                    className:
                      "group p-6 rounded-2xl bg-secondary text-white hover:shadow-xl transition-all duration-300 flex flex-col justify-between",
                    children: [
                      (0, i.jsxs)("div", {
                        className: "space-y-4",
                        children: [
                          (0, i.jsx)("div", {
                            className: "flex -space-x-3",
                            children: [1, 2, 3].map((e) =>
                              (0, i.jsx)(
                                "div",
                                {
                                  className:
                                    "w-10 h-10 rounded-full bg-primary border-2 border-secondary flex items-center justify-center text-xs font-bold",
                                  children: 1 === e ? "B" : 2 === e ? "S" : "V",
                                },
                                e,
                              ),
                            ),
                          }),
                          (0, i.jsxs)("p", {
                            className: "text-sm font-medium",
                            children: [
                              (0, i.jsx)("span", {
                                className: "text-2xl font-bold",
                                children: "847",
                              }),
                              " Unternehmen",
                              (0, i.jsx)("br", {}),
                              "nutzen Azubi",
                            ],
                          }),
                        ],
                      }),
                      (0, i.jsx)(r(), {
                        href: "/arbeitgeber/auth/anmeldung",
                        children: (0, i.jsxs)(c.$, {
                          size: "sm",
                          className:
                            "w-full bg-white text-secondary hover:bg-white/90 rounded-full mt-4 group/btn",
                          children: [
                            "Jetzt starten",
                            (0, i.jsx)(l.A, {
                              className:
                                "w-4 h-4 ml-2 group-hover/btn:translate-x-1 transition-transform",
                            }),
                          ],
                        }),
                      }),
                    ],
                  }),
                ],
              }),
              (0, i.jsxs)("div", {
                className: "grid md:hidden grid-cols-1 gap-4",
                children: [
                  m.map((e) =>
                    (0, i.jsx)(d.Q, { ...e, cardSize: "standard" }, e.id),
                  ),
                  (0, i.jsxs)("div", {
                    className:
                      "p-6 rounded-2xl bg-secondary text-white space-y-4",
                    children: [
                      (0, i.jsx)("div", {
                        className: "flex -space-x-3",
                        children: [1, 2, 3].map((e) =>
                          (0, i.jsx)(
                            "div",
                            {
                              className:
                                "w-10 h-10 rounded-full bg-primary border-2 border-secondary flex items-center justify-center text-xs font-bold",
                              children: 1 === e ? "B" : 2 === e ? "S" : "V",
                            },
                            e,
                          ),
                        ),
                      }),
                      (0, i.jsxs)("p", {
                        className: "text-sm font-medium",
                        children: [
                          (0, i.jsx)("span", {
                            className: "text-2xl font-bold",
                            children: "847",
                          }),
                          " Unternehmen nutzen Azubi",
                        ],
                      }),
                      (0, i.jsx)(r(), {
                        href: "/arbeitgeber/auth/anmeldung",
                        children: (0, i.jsxs)(c.$, {
                          size: "sm",
                          className:
                            "w-full bg-white text-secondary hover:bg-white/90 rounded-full group/btn",
                          children: [
                            "Jetzt starten",
                            (0, i.jsx)(l.A, {
                              className:
                                "w-4 h-4 ml-2 group-hover/btn:translate-x-1 transition-transform",
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
        });
      }
    },
    22932: (e, s, t) => {
      (Promise.resolve().then(t.bind(t, 66689)),
        Promise.resolve().then(t.bind(t, 57943)),
        Promise.resolve().then(t.bind(t, 57049)),
        Promise.resolve().then(t.bind(t, 49383)),
        Promise.resolve().then(t.bind(t, 18427)),
        Promise.resolve().then(t.bind(t, 98896)),
        Promise.resolve().then(t.bind(t, 77805)),
        Promise.resolve().then(t.bind(t, 56288)),
        Promise.resolve().then(t.bind(t, 34119)),
        Promise.resolve().then(t.bind(t, 21885)));
    },
    34119: (e, s, t) => {
      "use strict";
      t.d(s, { StickyCTABar: () => h });
      var i = t(70207),
        a = t(87223),
        r = t(54459),
        n = t(45748),
        l = t(39441),
        d = t(88117),
        o = t(5101),
        c = t(39945),
        x = t(10542),
        m = t.n(x);
      function h() {
        let [e, s] = (0, a.useState)(!1),
          [t, x] = (0, a.useState)(!1);
        return ((0, a.useEffect)(() => {
          if ("true" === sessionStorage.getItem("ctaBarDismissed")) {
            x(!0);
            return;
          }
          let e = () => {
            let e =
              (window.scrollY /
                (document.documentElement.scrollHeight - window.innerHeight)) *
              100;
            e > 50 && !t ? s(!0) : e <= 50 && s(!1);
          };
          return (
            window.addEventListener("scroll", e),
            e(),
            () => window.removeEventListener("scroll", e)
          );
        }, [t]),
        t)
          ? null
          : (0, i.jsx)(r.N, {
              children:
                e &&
                (0, i.jsx)(n.P.div, {
                  initial: { y: 100, opacity: 0 },
                  animate: { y: 0, opacity: 1 },
                  exit: { y: 100, opacity: 0 },
                  transition: { type: "spring", stiffness: 300, damping: 30 },
                  className:
                    "fixed bottom-0 left-0 right-0 z-50 bg-white border-t-2 border-primary/20 shadow-2xl",
                  children: (0, i.jsx)("div", {
                    className: "max-w-7xl mx-auto px-4 sm:px-6 lg:px-8",
                    children: (0, i.jsxs)("div", {
                      className: "flex items-center justify-between gap-4 py-4",
                      children: [
                        (0, i.jsxs)("div", {
                          className: "flex items-center gap-3 flex-1 min-w-0",
                          children: [
                            (0, i.jsx)("div", {
                              className:
                                "hidden sm:flex items-center justify-center p-2 bg-primary/10 rounded-xl flex-shrink-0",
                              children: (0, i.jsx)(d.A, {
                                className: "w-5 h-5 text-primary",
                              }),
                            }),
                            (0, i.jsxs)("div", {
                              className: "min-w-0 flex-1",
                              children: [
                                (0, i.jsx)("p", {
                                  className:
                                    "text-sm sm:text-base font-semibold text-secondary truncate",
                                  children:
                                    "Kostenlos qualifizierte Azubis finden",
                                }),
                                (0, i.jsxs)("div", {
                                  className:
                                    "flex items-center gap-2 text-xs sm:text-sm text-muted-foreground",
                                  children: [
                                    (0, i.jsx)(o.A, {
                                      className: "w-4 h-4 flex-shrink-0",
                                    }),
                                    (0, i.jsxs)("span", {
                                      className: "truncate",
                                      children: [
                                        (0, i.jsx)("span", {
                                          className:
                                            "font-semibold text-primary",
                                          children: "12.847",
                                        }),
                                        " Kandidaten warten",
                                      ],
                                    }),
                                  ],
                                }),
                              ],
                            }),
                          ],
                        }),
                        (0, i.jsxs)("div", {
                          className:
                            "flex items-center gap-2 sm:gap-3 flex-shrink-0",
                          children: [
                            (0, i.jsx)(m(), {
                              href: "/arbeitgeber/auth/anmeldung",
                              className: "flex-shrink-0",
                              children: (0, i.jsx)(l.$, {
                                size: "default",
                                className:
                                  "bg-primary hover:bg-[#2C3340] text-white shadow-lg hover:shadow-xl transition-all duration-300 rounded-full px-4 sm:px-6 font-semibold text-sm sm:text-base whitespace-nowrap",
                                children: "Kostenlos starten",
                              }),
                            }),
                            (0, i.jsx)("button", {
                              onClick: () => {
                                (x(!0),
                                  s(!1),
                                  sessionStorage.setItem(
                                    "ctaBarDismissed",
                                    "true",
                                  ));
                              },
                              className:
                                "p-2 rounded-full hover:bg-muted transition-colors flex-shrink-0",
                              "aria-label": "Schlie\xdfen",
                              children: (0, i.jsx)(c.A, {
                                className:
                                  "w-4 h-4 sm:w-5 sm:h-5 text-muted-foreground",
                              }),
                            }),
                          ],
                        }),
                      ],
                    }),
                  }),
                }),
            });
      }
    },
    49383: (e, s, t) => {
      "use strict";
      t.d(s, { ExitIntentPopup: () => g });
      var i = t(70207),
        a = t(68588),
        r = t.n(a),
        n = t(87223),
        l = t(54459),
        d = t(45748),
        o = t(39945),
        c = t(6971),
        x = t(50018),
        m = t(10542),
        h = t.n(m),
        u = t(78809),
        p = t(81555);
      function g() {
        let [e, s] = (0, n.useState)(!1),
          [t, a] = (0, n.useState)(!1);
        (0, n.useEffect)(() => {
          if (t) return;
          let e = (e) => {
              e.clientY <= 0 && !t && (s(!0), a(!0));
            },
            i = setTimeout(() => {
              document.addEventListener("mouseleave", e);
            }, 5e3);
          return () => {
            (clearTimeout(i), document.removeEventListener("mouseleave", e));
          };
        }, [t]);
        let m = () => {
          s(!1);
        };
        return (0, i.jsx)(l.N, {
          children:
            e &&
            (0, i.jsxs)(i.Fragment, {
              children: [
                (0, i.jsx)(d.P.div, {
                  initial: { opacity: 0 },
                  animate: { opacity: 1 },
                  exit: { opacity: 0 },
                  onClick: m,
                  className:
                    "fixed inset-0 bg-black/70 backdrop-blur-sm z-[100]",
                }),
                (0, i.jsx)(d.P.div, {
                  initial: { opacity: 0, scale: 0.95, y: 20 },
                  animate: { opacity: 1, scale: 1, y: 0 },
                  exit: { opacity: 0, scale: 0.95, y: 20 },
                  transition: { type: "spring", stiffness: 300, damping: 30 },
                  className:
                    "fixed inset-0 z-[101] flex items-center justify-center p-4",
                  onClick: (e) => e.stopPropagation(),
                  children: (0, i.jsxs)("div", {
                    className:
                      "relative overflow-hidden rounded-[24px] md:rounded-[32px] max-w-5xl w-full",
                    style: {
                      background:
                        "linear-gradient(135deg, #5D5DE9 0%, #2C3340 50%, #5D5DE9 100%)",
                    },
                    children: [
                      (0, i.jsx)("button", {
                        onClick: m,
                        className:
                          "absolute top-4 right-4 z-20 p-2 rounded-full bg-white/20 hover:bg-white/30 backdrop-blur-sm transition-all duration-300",
                        children: (0, i.jsx)(o.A, {
                          className: "w-5 h-5 text-white",
                        }),
                      }),
                      (0, i.jsx)("div", {
                        className: "absolute inset-0 z-0",
                        style: {
                          backgroundImage:
                            "linear-gradient(rgba(255,255,255,0.08) 1px, transparent 1px),\n                                   linear-gradient(90deg, rgba(255,255,255,0.08) 1px, transparent 1px)",
                          backgroundSize: "40px 40px",
                        },
                      }),
                      (0, i.jsxs)("div", {
                        className:
                          "relative z-10 flex flex-col md:flex-row items-center justify-between gap-8 px-6 py-8 md:px-12 md:py-10",
                        children: [
                          (0, i.jsxs)("div", {
                            className: "flex-1 text-left space-y-5",
                            children: [
                              (0, i.jsxs)("div", {
                                className:
                                  "inline-flex items-center gap-2 px-4 py-2 rounded-full bg-white/20 backdrop-blur-sm border border-white/30",
                                children: [
                                  (0, i.jsx)("div", {
                                    className:
                                      "w-2 h-2 rounded-full bg-white animate-pulse",
                                  }),
                                  (0, i.jsx)("span", {
                                    className: "text-sm font-medium text-white",
                                    children:
                                      "12.500+ verifizierte Kandidaten warten",
                                  }),
                                ],
                              }),
                              (0, i.jsxs)("h2", {
                                className:
                                  "text-3xl md:text-4xl lg:text-5xl font-bold text-white leading-tight",
                                children: [
                                  "Warten Sie!",
                                  (0, i.jsx)("br", {}),
                                  "Entdecken Sie unseren",
                                  (0, i.jsx)("br", {}),
                                  "Talentpool",
                                ],
                              }),
                              (0, i.jsx)("p", {
                                className:
                                  "text-base md:text-lg text-white/90 leading-relaxed max-w-md",
                                children:
                                  "Zugriff auf qualifizierte internationale Kandidaten mit B1-C1 Deutsch, verifizierte Profile, und Visa-Support.",
                              }),
                              (0, i.jsxs)(h(), {
                                href: "/arbeitgeber/auth/anmeldung",
                                className:
                                  "group relative inline-flex items-center gap-3 px-6 py-3 md:px-8 md:py-4 rounded-full overflow-hidden",
                                style: {
                                  backgroundColor: "rgba(0, 0, 0, 0.15)",
                                  boxShadow:
                                    "\n                        rgba(0, 0, 0, 0.1) 0px 2px 4px,\n                        rgba(0, 0, 0, 0.1) 0px 8px 16px\n                      ",
                                },
                                children: [
                                  (0, i.jsx)("div", {
                                    className:
                                      "absolute inset-[3px] rounded-full bg-white z-0",
                                  }),
                                  (0, i.jsx)("div", {
                                    className: "relative z-10 flex-shrink-0",
                                    children: (0, i.jsx)(c.A, {
                                      className: "w-5 h-5 text-secondary",
                                    }),
                                  }),
                                  (0, i.jsx)("span", {
                                    className:
                                      "relative z-10 text-base md:text-lg font-medium text-secondary",
                                    style: {
                                      fontWeight: 500,
                                      letterSpacing: "-0.02em",
                                    },
                                    children: "Jetzt kostenlos starten",
                                  }),
                                ],
                              }),
                              (0, i.jsx)("p", {
                                className: "text-sm text-white/80",
                                children:
                                  "✓ Kostenlos • ✓ Keine Kreditkarte • ✓ 847 Unternehmen vertrauen uns",
                              }),
                            ],
                          }),
                          (0, i.jsxs)("div", {
                            className:
                              "jsx-f5f63364af781941 flex-shrink-0 relative w-[340px] md:w-[400px]",
                            children: [
                              (0, i.jsx)(r(), {
                                id: "f5f63364af781941",
                                children:
                                  "@-webkit-keyframes pulse-glow{0%,100%{-webkit-box-shadow:0 0 20px rgba(255,255,255,.3);box-shadow:0 0 20px rgba(255,255,255,.3)}50%{-webkit-box-shadow:0 0 40px rgba(255,255,255,.5);box-shadow:0 0 40px rgba(255,255,255,.5)}}@-moz-keyframes pulse-glow{0%,100%{-moz-box-shadow:0 0 20px rgba(255,255,255,.3);box-shadow:0 0 20px rgba(255,255,255,.3)}50%{-moz-box-shadow:0 0 40px rgba(255,255,255,.5);box-shadow:0 0 40px rgba(255,255,255,.5)}}@-o-keyframes pulse-glow{0%,100%{box-shadow:0 0 20px rgba(255,255,255,.3)}50%{box-shadow:0 0 40px rgba(255,255,255,.5)}}@keyframes pulse-glow{0%,100%{-webkit-box-shadow:0 0 20px rgba(255,255,255,.3);-moz-box-shadow:0 0 20px rgba(255,255,255,.3);box-shadow:0 0 20px rgba(255,255,255,.3)}50%{-webkit-box-shadow:0 0 40px rgba(255,255,255,.5);-moz-box-shadow:0 0 40px rgba(255,255,255,.5);box-shadow:0 0 40px rgba(255,255,255,.5)}}",
                              }),
                              (0, i.jsxs)("div", {
                                className:
                                  "jsx-f5f63364af781941 grid grid-cols-3 gap-5 md:gap-6",
                                children: [
                                  [0, 1, 2].map((e) =>
                                    (0, i.jsx)(
                                      d.P.div,
                                      {
                                        initial: { opacity: 0, scale: 0.3 },
                                        animate: { opacity: 1, scale: 1 },
                                        transition: {
                                          delay: 0.3 + 0.15 * e,
                                          duration: 0.4,
                                          ease: [0.34, 1.56, 0.64, 1],
                                        },
                                        children: (0, i.jsx)("div", {
                                          className:
                                            "jsx-f5f63364af781941 w-20 h-20 md:w-24 md:h-24 rounded-full border-3 border-white bg-white overflow-hidden shadow-xl",
                                          children: (0, i.jsx)(x.default, {
                                            src: p.T[e % p.T.length],
                                            alt: "Candidate",
                                            width: 96,
                                            height: 96,
                                            className:
                                              "w-full h-full object-cover",
                                            priority: !0,
                                          }),
                                        }),
                                      },
                                      "row1-".concat(e),
                                    ),
                                  ),
                                  (0, i.jsx)(d.P.div, {
                                    initial: { opacity: 0, scale: 0.3 },
                                    animate: { opacity: 1, scale: 1 },
                                    transition: {
                                      delay: 0.75,
                                      duration: 0.4,
                                      ease: [0.34, 1.56, 0.64, 1],
                                    },
                                    children: (0, i.jsx)("div", {
                                      className:
                                        "jsx-f5f63364af781941 w-20 h-20 md:w-24 md:h-24 rounded-full border-3 border-white bg-white overflow-hidden shadow-xl",
                                      children: (0, i.jsx)(x.default, {
                                        src: p.T[3 % p.T.length],
                                        alt: "Candidate",
                                        width: 96,
                                        height: 96,
                                        className: "w-full h-full object-cover",
                                        priority: !0,
                                      }),
                                    }),
                                  }),
                                  (0, i.jsx)(d.P.div, {
                                    initial: { opacity: 0, scale: 0.3 },
                                    animate: { opacity: 1, scale: 1 },
                                    transition: {
                                      delay: 0.9,
                                      duration: 0.4,
                                      ease: [0.34, 1.56, 0.64, 1],
                                    },
                                    children: (0, i.jsx)("div", {
                                      className:
                                        "jsx-f5f63364af781941 relative w-20 h-20 md:w-24 md:h-24 rounded-full bg-white flex items-center justify-center shadow-xl",
                                      children: (0, i.jsx)(x.default, {
                                        src: u.KN.ICON,
                                        alt: "Azubi Logo",
                                        width: 64,
                                        height: 64,
                                        className:
                                          "w-12 h-12 md:w-14 md:h-14 object-contain",
                                        priority: !0,
                                      }),
                                    }),
                                  }),
                                  (0, i.jsx)(d.P.div, {
                                    initial: { opacity: 0, scale: 0.3 },
                                    animate: { opacity: 1, scale: 1 },
                                    transition: {
                                      delay: 1.05,
                                      duration: 0.4,
                                      ease: [0.34, 1.56, 0.64, 1],
                                    },
                                    children: (0, i.jsx)("div", {
                                      className:
                                        "jsx-f5f63364af781941 w-20 h-20 md:w-24 md:h-24 rounded-full border-3 border-white bg-white overflow-hidden shadow-xl",
                                      children: (0, i.jsx)(x.default, {
                                        src: p.T[4 % p.T.length],
                                        alt: "Candidate",
                                        width: 96,
                                        height: 96,
                                        className: "w-full h-full object-cover",
                                        priority: !0,
                                      }),
                                    }),
                                  }),
                                  [5, 0, 1].map((e, s) =>
                                    (0, i.jsx)(
                                      d.P.div,
                                      {
                                        initial: { opacity: 0, scale: 0.3 },
                                        animate: { opacity: 1, scale: 1 },
                                        transition: {
                                          delay: 1.2 + 0.15 * s,
                                          duration: 0.4,
                                          ease: [0.34, 1.56, 0.64, 1],
                                        },
                                        children: (0, i.jsx)("div", {
                                          className:
                                            "jsx-f5f63364af781941 w-20 h-20 md:w-24 md:h-24 rounded-full border-3 border-white bg-white overflow-hidden shadow-xl",
                                          children: (0, i.jsx)(x.default, {
                                            src: p.T[e % p.T.length],
                                            alt: "Candidate",
                                            width: 96,
                                            height: 96,
                                            className:
                                              "w-full h-full object-cover",
                                            priority: !0,
                                          }),
                                        }),
                                      },
                                      "row3-".concat(s),
                                    ),
                                  ),
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
        });
      }
    },
    57049: (e, s, t) => {
      "use strict";
      t.d(s, { CostCalculatorSection: () => m });
      var i = t(70207),
        a = t(87223),
        r = t(45748),
        n = t(11299),
        l = t(5101),
        d = t(47981),
        o = t(33482),
        c = t(67454);
      function x(e) {
        let { value: s, prefix: t = "", suffix: r = "" } = e,
          [n, l] = (0, a.useState)(0);
        return (
          (0, a.useEffect)(() => {
            let e = s / 60,
              t = 0,
              i = setInterval(() => {
                (t += e) >= s ? (l(s), clearInterval(i)) : l(Math.floor(t));
              }, 1e3 / 60);
            return () => clearInterval(i);
          }, [s]),
          (0, i.jsxs)("span", { children: [t, n.toLocaleString("de-DE"), r] })
        );
      }
      function m() {
        let [e, s] = (0, a.useState)(3),
          [t, m] = (0, a.useState)(!1),
          h = 12e3 * e,
          u = 1500 * e;
        return (0, i.jsxs)("section", {
          className:
            "relative bg-gradient-to-br from-cream via-background to-beige py-12 md:py-16 overflow-hidden",
          children: [
            (0, i.jsxs)("div", {
              className: "absolute inset-0 overflow-hidden pointer-events-none",
              children: [
                (0, i.jsx)("div", {
                  className:
                    "absolute -top-40 -right-40 w-80 h-80 bg-primary rounded-full blur-3xl opacity-5",
                }),
                (0, i.jsx)("div", {
                  className:
                    "absolute top-1/2 -left-40 w-96 h-96 bg-green rounded-full blur-3xl opacity-5",
                }),
              ],
            }),
            (0, i.jsx)("div", {
              className: "container mx-auto px-4 md:px-6 relative",
              children: (0, i.jsxs)("div", {
                className: "max-w-6xl mx-auto space-y-8",
                children: [
                  (0, i.jsxs)("div", {
                    className: "text-center space-y-3",
                    children: [
                      (0, i.jsx)(r.P.div, {
                        initial: { scale: 0 },
                        whileInView: { scale: 1 },
                        transition: { type: "spring", duration: 0.6 },
                        className:
                          "inline-flex items-center justify-center p-2.5 bg-beige rounded-2xl mb-1 border border-primary",
                        children: (0, i.jsx)(n.A, {
                          className: "w-7 h-7 text-primary",
                        }),
                      }),
                      (0, i.jsxs)("h2", {
                        className:
                          "text-2xl md:text-3xl font-bold text-secondary",
                        children: [
                          "Berechnen Sie Ihre",
                          " ",
                          (0, i.jsx)("span", {
                            className: "text-primary",
                            children: "Kostenersparnis",
                          }),
                        ],
                      }),
                      (0, i.jsx)("p", {
                        className:
                          "text-base text-secondary/70 max-w-2xl mx-auto",
                        children:
                          "Sehen Sie sofort, wie viel Sie mit Azubi im Vergleich zu traditionellen Methoden sparen",
                      }),
                    ],
                  }),
                  (0, i.jsxs)("div", {
                    className:
                      "bg-white rounded-3xl border border-black/10 shadow-2xl overflow-hidden",
                    children: [
                      (0, i.jsx)("div", {
                        className:
                          "bg-gradient-to-br from-beige to-cream p-5 md:p-7 border-b border-black/5",
                        children: (0, i.jsxs)("div", {
                          className: "max-w-3xl mx-auto space-y-4",
                          children: [
                            (0, i.jsxs)("div", {
                              className: "text-center space-y-1.5",
                              children: [
                                (0, i.jsx)("label", {
                                  className:
                                    "text-sm md:text-base font-semibold text-secondary",
                                  children:
                                    "Wie viele Azubis stellen Sie pro Jahr ein?",
                                }),
                                (0, i.jsxs)(
                                  r.P.div,
                                  {
                                    initial: { scale: 0.8, opacity: 0 },
                                    animate: { scale: 1, opacity: 1 },
                                    className:
                                      "flex items-center justify-center gap-2",
                                    children: [
                                      (0, i.jsx)(l.A, {
                                        className:
                                          "w-7 h-7 md:w-8 md:h-8 text-primary",
                                      }),
                                      (0, i.jsx)("span", {
                                        className:
                                          "text-4xl md:text-5xl font-bold text-primary",
                                        children: e,
                                      }),
                                    ],
                                  },
                                  e,
                                ),
                              ],
                            }),
                            (0, i.jsxs)("div", {
                              className: "space-y-2",
                              children: [
                                (0, i.jsx)(c.A, {
                                  value: [e],
                                  onValueChange: (e) => {
                                    (s(e[0]),
                                      m(!0),
                                      setTimeout(() => m(!1), 1e3));
                                  },
                                  min: 1,
                                  max: 20,
                                  step: 1,
                                  className: "w-full",
                                }),
                                (0, i.jsxs)("div", {
                                  className:
                                    "flex justify-between text-xs md:text-sm text-secondary/70",
                                  children: [
                                    (0, i.jsx)("span", { children: "1 Azubi" }),
                                    (0, i.jsx)("span", {
                                      children: "20 Azubis",
                                    }),
                                  ],
                                }),
                              ],
                            }),
                          ],
                        }),
                      }),
                      (0, i.jsxs)("div", {
                        className: "p-5 md:p-7",
                        children: [
                          (0, i.jsxs)("div", {
                            className: "grid md:grid-cols-2 gap-5 md:gap-6",
                            children: [
                              (0, i.jsxs)(r.P.div, {
                                initial: { opacity: 0, x: -20 },
                                whileInView: { opacity: 1, x: 0 },
                                transition: { delay: 0.2 },
                                className: "space-y-3",
                                children: [
                                  (0, i.jsxs)("div", {
                                    className:
                                      "flex items-center justify-between",
                                    children: [
                                      (0, i.jsxs)("div", {
                                        children: [
                                          (0, i.jsx)("p", {
                                            className:
                                              "text-sm text-secondary font-medium",
                                            children: "vs. Personalvermittlung",
                                          }),
                                          (0, i.jsx)("p", {
                                            className:
                                              "text-xs text-secondary/70",
                                            children: "€12.000 pro Einstellung",
                                          }),
                                        ],
                                      }),
                                      (0, i.jsx)("div", {
                                        className:
                                          "px-3 py-1 rounded-full border-2 border-secondary text-secondary text-xs font-semibold",
                                        children: "TEUER",
                                      }),
                                    ],
                                  }),
                                  (0, i.jsxs)("div", {
                                    className:
                                      "relative h-10 bg-beige rounded-xl overflow-hidden border-2 border-beige",
                                    children: [
                                      (0, i.jsx)(r.P.div, {
                                        initial: { width: 0 },
                                        whileInView: { width: "100%" },
                                        transition: {
                                          duration: 0.8,
                                          delay: 0.3,
                                        },
                                        className: "absolute inset-0 bg-beige",
                                      }),
                                      (0, i.jsxs)("div", {
                                        className:
                                          "relative h-full flex items-center justify-between px-3",
                                        children: [
                                          (0, i.jsx)("span", {
                                            className:
                                              "text-xs font-semibold text-secondary",
                                            children: "Kosten",
                                          }),
                                          (0, i.jsxs)("span", {
                                            className:
                                              "text-base md:text-lg font-bold text-secondary",
                                            children: [
                                              "€",
                                              h.toLocaleString("de-DE"),
                                            ],
                                          }),
                                        ],
                                      }),
                                    ],
                                  }),
                                  (0, i.jsx)("div", {
                                    className:
                                      "p-3 rounded-xl bg-cream border-2 border-green",
                                    children: (0, i.jsxs)("div", {
                                      className: "flex items-center gap-2.5",
                                      children: [
                                        (0, i.jsx)("div", {
                                          className:
                                            "p-1.5 bg-beige rounded-lg border border-green",
                                          children: (0, i.jsx)(d.A, {
                                            className: "w-4 h-4 text-green",
                                          }),
                                        }),
                                        (0, i.jsxs)("div", {
                                          children: [
                                            (0, i.jsx)("p", {
                                              className:
                                                "text-xs text-secondary font-medium",
                                              children: "Sie sparen",
                                            }),
                                            (0, i.jsx)("p", {
                                              className:
                                                "text-xl font-bold text-green",
                                              children: (0, i.jsx)(x, {
                                                value: h,
                                                prefix: "€",
                                              }),
                                            }),
                                          ],
                                        }),
                                      ],
                                    }),
                                  }),
                                ],
                              }),
                              (0, i.jsxs)(r.P.div, {
                                initial: { opacity: 0, x: 20 },
                                whileInView: { opacity: 1, x: 0 },
                                transition: { delay: 0.2 },
                                className: "space-y-3",
                                children: [
                                  (0, i.jsxs)("div", {
                                    className:
                                      "flex items-center justify-between",
                                    children: [
                                      (0, i.jsxs)("div", {
                                        children: [
                                          (0, i.jsx)("p", {
                                            className:
                                              "text-sm text-secondary font-medium",
                                            children: "vs. Job-Portale",
                                          }),
                                          (0, i.jsx)("p", {
                                            className:
                                              "text-xs text-secondary/70",
                                            children: "€1.500 pro Einstellung",
                                          }),
                                        ],
                                      }),
                                      (0, i.jsx)("div", {
                                        className:
                                          "px-3 py-1 rounded-full border-2 border-primary text-primary text-xs font-semibold",
                                        children: "MITTEL",
                                      }),
                                    ],
                                  }),
                                  (0, i.jsxs)("div", {
                                    className:
                                      "relative h-10 bg-beige rounded-xl overflow-hidden border-2 border-beige",
                                    children: [
                                      (0, i.jsx)(r.P.div, {
                                        initial: { width: 0 },
                                        whileInView: { width: "60%" },
                                        transition: {
                                          duration: 0.8,
                                          delay: 0.3,
                                        },
                                        className: "absolute inset-0 bg-beige",
                                      }),
                                      (0, i.jsxs)("div", {
                                        className:
                                          "relative h-full flex items-center justify-between px-3",
                                        children: [
                                          (0, i.jsx)("span", {
                                            className:
                                              "text-xs font-semibold text-secondary",
                                            children: "Kosten",
                                          }),
                                          (0, i.jsxs)("span", {
                                            className:
                                              "text-base md:text-lg font-bold text-secondary",
                                            children: [
                                              "€",
                                              u.toLocaleString("de-DE"),
                                            ],
                                          }),
                                        ],
                                      }),
                                    ],
                                  }),
                                  (0, i.jsx)("div", {
                                    className:
                                      "p-3 rounded-xl bg-cream border-2 border-green",
                                    children: (0, i.jsxs)("div", {
                                      className: "flex items-center gap-2.5",
                                      children: [
                                        (0, i.jsx)("div", {
                                          className:
                                            "p-1.5 bg-beige rounded-lg border border-green",
                                          children: (0, i.jsx)(d.A, {
                                            className: "w-4 h-4 text-green",
                                          }),
                                        }),
                                        (0, i.jsxs)("div", {
                                          children: [
                                            (0, i.jsx)("p", {
                                              className:
                                                "text-xs text-secondary font-medium",
                                              children: "Sie sparen",
                                            }),
                                            (0, i.jsx)("p", {
                                              className:
                                                "text-xl font-bold text-green",
                                              children: (0, i.jsx)(x, {
                                                value: u,
                                                prefix: "€",
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
                          (0, i.jsx)(r.P.div, {
                            initial: { opacity: 0, y: 20 },
                            whileInView: { opacity: 1, y: 0 },
                            transition: { delay: 0.4 },
                            className:
                              "mt-5 p-3 md:p-4 rounded-2xl bg-beige border-2 border-green",
                            children: (0, i.jsxs)("div", {
                              className:
                                "flex items-center justify-between gap-4",
                              children: [
                                (0, i.jsx)("div", {
                                  className: "flex items-center gap-3",
                                  children: (0, i.jsx)("h3", {
                                    className:
                                      "text-base md:text-lg font-bold text-secondary",
                                    children: "Mit Azubi",
                                  }),
                                }),
                                (0, i.jsxs)("div", {
                                  className: "text-right",
                                  children: [
                                    (0, i.jsxs)("div", {
                                      className:
                                        "flex items-center justify-end gap-1.5",
                                      children: [
                                        (0, i.jsx)(o.A, {
                                          className:
                                            "w-5 h-5 md:w-6 md:h-6 text-green",
                                        }),
                                        (0, i.jsx)("span", {
                                          className:
                                            "text-3xl md:text-4xl font-bold text-green",
                                          children: "0",
                                        }),
                                      ],
                                    }),
                                    (0, i.jsx)("p", {
                                      className:
                                        "text-xs text-secondary font-semibold",
                                      children: "Kostenlos",
                                    }),
                                  ],
                                }),
                              ],
                            }),
                          }),
                          (0, i.jsx)("div", {
                            className: "mt-5 pt-4 border-t border-black/5",
                            children: (0, i.jsxs)("p", {
                              className:
                                "text-xs text-center text-secondary/70",
                              children: [
                                (0, i.jsx)("span", {
                                  className: "font-semibold text-secondary",
                                  children: "Keine Vertragsbindung",
                                }),
                                " • ",
                                (0, i.jsx)("span", {
                                  className: "font-semibold text-secondary",
                                  children: "Keine versteckten Kosten",
                                }),
                                " • ",
                                (0, i.jsx)("span", {
                                  className: "font-semibold text-secondary",
                                  children: "Jederzeit k\xfcndbar",
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
    57943: (e, s, t) => {
      "use strict";
      t.d(s, { ComparisonTableSection: () => d });
      var i = t(70207),
        a = t(82110);
      function r(e) {
        let { className: s } = e;
        return (0, i.jsxs)("svg", {
          className: (0, a.cn)("w-5 h-5 flex-shrink-0", s),
          viewBox: "0 0 24 24",
          fill: "none",
          children: [
            (0, i.jsx)("circle", {
              cx: "12",
              cy: "12",
              r: "10",
              fill: "#2C3340",
              fillOpacity: "0.1",
            }),
            (0, i.jsx)("path", {
              d: "M8 12.5L10.5 15L16 9.5",
              stroke: "#2C3340",
              strokeWidth: "2",
              strokeLinecap: "round",
              strokeLinejoin: "round",
            }),
          ],
        });
      }
      function n(e) {
        let { className: s } = e;
        return (0, i.jsxs)("svg", {
          className: (0, a.cn)("w-5 h-5 flex-shrink-0", s),
          viewBox: "0 0 24 24",
          fill: "none",
          children: [
            (0, i.jsx)("circle", {
              cx: "12",
              cy: "12",
              r: "10",
              fill: "#EF4444",
              fillOpacity: "0.1",
            }),
            (0, i.jsx)("path", {
              d: "M15 9L9 15M9 9L15 15",
              stroke: "#EF4444",
              strokeWidth: "2",
              strokeLinecap: "round",
              strokeLinejoin: "round",
            }),
          ],
        });
      }
      let l = [
        {
          feature: "Kosten",
          traditional: {
            value: "Anzeigengeb\xfchren + versteckte Kosten",
            isPositive: !1,
          },
          agencies: {
            value: "€5.000-15.000 pro erfolgreiche Vermittlung",
            isPositive: !1,
          },
          Azubi: {
            value: "100% kostenlos - keine versteckten Geb\xfchren",
            isPositive: !0,
          },
        },
        {
          feature: "Kandidatenpool",
          traditional: { value: "Begrenzte lokale Reichweite", isPositive: !1 },
          agencies: { value: "Kleine, exklusive Auswahl", isPositive: !1 },
          Azubi: {
            value: "12.500+ internationale Kandidaten",
            isPositive: !0,
          },
        },
        {
          feature: "Deutschkenntnisse",
          traditional: {
            value: "Nicht \xfcberpr\xfcft oder dokumentiert",
            isPositive: !1,
          },
          agencies: { value: "Grundlegende \xdcberpr\xfcfung", isPositive: !1 },
          Azubi: {
            value: "92% mit B1-C1 Level verifiziert",
            isPositive: !0,
          },
        },
        {
          feature: "Kulturvorbereitung",
          traditional: { value: "Keine Vorbereitung", isPositive: !1 },
          agencies: { value: "Minimale Vorbereitung", isPositive: !1 },
          Azubi: {
            value: "Umfassendes Kulturtraining & Etikette",
            isPositive: !0,
          },
        },
        {
          feature: "Dokumentenqualit\xe4t",
          traditional: {
            value: "Standardisierte Lebensl\xe4ufe",
            isPositive: !1,
          },
          agencies: { value: "Basis-Dokumentenpr\xfcfung", isPositive: !1 },
          Azubi: {
            value: "Deutsche Standards + Video-Profile",
            isPositive: !0,
          },
        },
        {
          feature: "Geschwindigkeit",
          traditional: { value: "Wochen bis Monate", isPositive: !1 },
          agencies: { value: "2-4 Wochen", isPositive: !1 },
          Azubi: {
            value: "Erste Antworten in 48-72 Stunden",
            isPositive: !0,
          },
        },
        {
          feature: "Technologie",
          traditional: {
            value: "Manuelle Suche und Filterung",
            isPositive: !1,
          },
          agencies: { value: "Traditionelle Vermittlung", isPositive: !1 },
          Azubi: {
            value: "Intelligentes Matching & Automatisierung",
            isPositive: !0,
          },
        },
        {
          feature: "Qualifikation",
          traditional: { value: "Gemischtes Bildungsniveau", isPositive: !1 },
          agencies: { value: "Vorqualifiziert", isPositive: !0 },
          Azubi: { value: "78% mit Hochschulabschluss", isPositive: !0 },
        },
        {
          feature: "Support",
          traditional: { value: "Nur technischer Support", isPositive: !1 },
          agencies: { value: "Kostenpflichtiger Support", isPositive: !1 },
          Azubi: {
            value: "Kostenloser Email Support inklusive",
            isPositive: !0,
          },
        },
        {
          feature: "Rechtssicherheit",
          traditional: { value: "Keine Unterst\xfctzung", isPositive: !1 },
          agencies: { value: "Begrenzte Beratung", isPositive: !1 },
          Azubi: {
            value: "DSGVO-konform + Visa-Support",
            isPositive: !0,
          },
        },
      ];
      function d() {
        return (0, i.jsxs)("section", {
          className:
            "relative bg-gradient-to-br from-cream via-background to-beige py-16 md:py-24 overflow-hidden",
          children: [
            (0, i.jsxs)("div", {
              className: "absolute inset-0 overflow-hidden pointer-events-none",
              children: [
                (0, i.jsx)("div", {
                  className:
                    "absolute -top-40 -right-40 w-80 h-80 bg-primary/5 rounded-full blur-3xl",
                }),
                (0, i.jsx)("div", {
                  className:
                    "absolute top-1/2 -left-40 w-96 h-96 bg-green/5 rounded-full blur-3xl",
                }),
              ],
            }),
            (0, i.jsx)("div", {
              className: "container mx-auto px-4 md:px-6 relative",
              children: (0, i.jsxs)("div", {
                className: "max-w-6xl mx-auto space-y-8",
                children: [
                  (0, i.jsxs)("div", {
                    className: "text-center space-y-4",
                    children: [
                      (0, i.jsxs)("h2", {
                        className:
                          "text-3xl md:text-4xl font-bold text-secondary",
                        children: [
                          "Vom Fachkr\xe4ftemangel zur",
                          " ",
                          (0, i.jsx)("span", {
                            className: "text-primary",
                            children: "erfolgreichen Einstellung",
                          }),
                        ],
                      }),
                      (0, i.jsx)("p", {
                        className:
                          "text-lg text-secondary/70 max-w-3xl mx-auto",
                        children:
                          "Warum Azubi anders ist als traditionelle Jobb\xf6rsen und Personalvermittlungen",
                      }),
                    ],
                  }),
                  (0, i.jsx)("div", {
                    className: "hidden lg:block",
                    children: (0, i.jsx)("div", {
                      className: "relative bg-beige rounded-[32px] p-[5px]",
                      children: (0, i.jsx)("div", {
                        className: "bg-white rounded-[27px] overflow-hidden",
                        children: (0, i.jsxs)("div", {
                          className: "min-w-[1000px]",
                          children: [
                            (0, i.jsxs)("div", {
                              className:
                                "grid grid-cols-[280px_1fr_1fr_1fr] gap-6",
                              children: [
                                (0, i.jsx)("div", {
                                  className:
                                    "px-6 py-6 bg-beige rounded-tl-[27px] ml-[5px] mt-[5px] border-b-[5px] border-white",
                                  children: (0, i.jsx)("p", {
                                    className: "font-semibold text-secondary",
                                    children: "Vergleichskriterium",
                                  }),
                                }),
                                (0, i.jsx)("div", {
                                  className:
                                    "px-4 py-6 bg-white mt-[5px] border-b-[5px] border-white",
                                  children: (0, i.jsx)("p", {
                                    className:
                                      "font-semibold text-primary text-center",
                                    children: "Azubi ⭐",
                                  }),
                                }),
                                (0, i.jsx)("div", {
                                  className:
                                    "px-4 py-6 bg-white mt-[5px] border-b-[5px] border-white",
                                  children: (0, i.jsx)("p", {
                                    className:
                                      "font-semibold text-secondary text-center",
                                    children: "Traditionelle Jobb\xf6rsen",
                                  }),
                                }),
                                (0, i.jsx)("div", {
                                  className:
                                    "px-4 py-6 bg-white rounded-tr-[27px] mr-[5px] mt-[5px] border-b-[5px] border-white",
                                  children: (0, i.jsx)("p", {
                                    className:
                                      "font-semibold text-secondary text-center",
                                    children: "Personalvermittler",
                                  }),
                                }),
                              ],
                            }),
                            l.map((e, s) => {
                              let t = s === l.length - 1;
                              return (0, i.jsxs)(
                                "div",
                                {
                                  className:
                                    "grid grid-cols-[280px_1fr_1fr_1fr] gap-6",
                                  children: [
                                    (0, i.jsx)("div", {
                                      className: (0, a.cn)(
                                        "px-6 py-6 bg-beige ml-[5px]",
                                        t
                                          ? "rounded-bl-[27px] mb-[5px]"
                                          : "border-b-[5px] border-white",
                                      ),
                                      children: (0, i.jsx)("p", {
                                        className:
                                          "font-semibold text-secondary",
                                        children: e.feature,
                                      }),
                                    }),
                                    (0, i.jsx)("div", {
                                      className: (0, a.cn)(
                                        "px-4 py-6 bg-white",
                                        !t && "border-b-[5px] border-white",
                                      ),
                                      children: (0, i.jsxs)("div", {
                                        className: "flex items-start gap-3",
                                        children: [
                                          e.Azubi.isPositive
                                            ? (0, i.jsx)(r, {
                                                className: "mt-0.5",
                                              })
                                            : (0, i.jsx)(n, {
                                                className: "mt-0.5",
                                              }),
                                          (0, i.jsx)("span", {
                                            className:
                                              "text-secondary text-sm font-medium leading-relaxed",
                                            children: e.Azubi.value,
                                          }),
                                        ],
                                      }),
                                    }),
                                    (0, i.jsx)("div", {
                                      className: (0, a.cn)(
                                        "px-4 py-6 bg-white",
                                        !t && "border-b-[5px] border-white",
                                      ),
                                      children: (0, i.jsxs)("div", {
                                        className: "flex items-start gap-3",
                                        children: [
                                          e.traditional.isPositive
                                            ? (0, i.jsx)(r, {
                                                className: "mt-0.5",
                                              })
                                            : (0, i.jsx)(n, {
                                                className: "mt-0.5",
                                              }),
                                          (0, i.jsx)("span", {
                                            className:
                                              "text-secondary text-sm leading-relaxed",
                                            children: e.traditional.value,
                                          }),
                                        ],
                                      }),
                                    }),
                                    (0, i.jsx)("div", {
                                      className: (0, a.cn)(
                                        "px-4 py-6 bg-white mr-[5px]",
                                        t
                                          ? "rounded-br-[27px] mb-[5px]"
                                          : "border-b-[5px] border-white",
                                      ),
                                      children: (0, i.jsxs)("div", {
                                        className: "flex items-start gap-3",
                                        children: [
                                          e.agencies.isPositive
                                            ? (0, i.jsx)(r, {
                                                className: "mt-0.5",
                                              })
                                            : (0, i.jsx)(n, {
                                                className: "mt-0.5",
                                              }),
                                          (0, i.jsx)("span", {
                                            className:
                                              "text-secondary text-sm leading-relaxed",
                                            children: e.agencies.value,
                                          }),
                                        ],
                                      }),
                                    }),
                                  ],
                                },
                                s,
                              );
                            }),
                          ],
                        }),
                      }),
                    }),
                  }),
                  (0, i.jsx)("div", {
                    className: "hidden md:block lg:hidden overflow-x-auto",
                    children: (0, i.jsx)("div", {
                      className:
                        "relative bg-beige rounded-[32px] p-[5px] min-w-[800px]",
                      children: (0, i.jsx)("div", {
                        className: "bg-white rounded-[27px] overflow-hidden",
                        children: (0, i.jsxs)("div", {
                          className: "min-w-[800px]",
                          children: [
                            (0, i.jsxs)("div", {
                              className:
                                "grid grid-cols-[200px_1fr_1fr_1fr] gap-4",
                              children: [
                                (0, i.jsx)("div", {
                                  className:
                                    "px-4 py-4 bg-beige rounded-tl-[27px] ml-[5px] mt-[5px] border-b-[5px] border-white",
                                  children: (0, i.jsx)("p", {
                                    className:
                                      "font-semibold text-secondary text-sm",
                                    children: "Kriterium",
                                  }),
                                }),
                                (0, i.jsx)("div", {
                                  className:
                                    "px-3 py-4 bg-white mt-[5px] border-b-[5px] border-white",
                                  children: (0, i.jsx)("p", {
                                    className:
                                      "font-semibold text-primary text-center text-sm",
                                    children: "Azubi ⭐",
                                  }),
                                }),
                                (0, i.jsx)("div", {
                                  className:
                                    "px-3 py-4 bg-white mt-[5px] border-b-[5px] border-white",
                                  children: (0, i.jsx)("p", {
                                    className:
                                      "font-semibold text-secondary text-center text-sm",
                                    children: "Traditionell",
                                  }),
                                }),
                                (0, i.jsx)("div", {
                                  className:
                                    "px-3 py-4 bg-white rounded-tr-[27px] mr-[5px] mt-[5px] border-b-[5px] border-white",
                                  children: (0, i.jsx)("p", {
                                    className:
                                      "font-semibold text-secondary text-center text-sm",
                                    children: "Vermittler",
                                  }),
                                }),
                              ],
                            }),
                            l.map((e, s) => {
                              let t = s === l.length - 1;
                              return (0, i.jsxs)(
                                "div",
                                {
                                  className:
                                    "grid grid-cols-[200px_1fr_1fr_1fr] gap-4",
                                  children: [
                                    (0, i.jsx)("div", {
                                      className: (0, a.cn)(
                                        "px-4 py-4 bg-beige ml-[5px]",
                                        t
                                          ? "rounded-bl-[27px] mb-[5px]"
                                          : "border-b-[5px] border-white",
                                      ),
                                      children: (0, i.jsx)("p", {
                                        className:
                                          "font-semibold text-secondary text-sm",
                                        children: e.feature,
                                      }),
                                    }),
                                    (0, i.jsx)("div", {
                                      className: (0, a.cn)(
                                        "px-3 py-4 bg-white",
                                        !t && "border-b-[5px] border-white",
                                      ),
                                      children: (0, i.jsxs)("div", {
                                        className: "flex items-start gap-2",
                                        children: [
                                          e.Azubi.isPositive
                                            ? (0, i.jsx)(r, {
                                                className: "mt-0.5 w-4 h-4",
                                              })
                                            : (0, i.jsx)(n, {
                                                className: "mt-0.5 w-4 h-4",
                                              }),
                                          (0, i.jsx)("span", {
                                            className:
                                              "text-secondary text-xs font-medium leading-relaxed",
                                            children: e.Azubi.value,
                                          }),
                                        ],
                                      }),
                                    }),
                                    (0, i.jsx)("div", {
                                      className: (0, a.cn)(
                                        "px-3 py-4 bg-white",
                                        !t && "border-b-[5px] border-white",
                                      ),
                                      children: (0, i.jsxs)("div", {
                                        className: "flex items-start gap-2",
                                        children: [
                                          e.traditional.isPositive
                                            ? (0, i.jsx)(r, {
                                                className: "mt-0.5 w-4 h-4",
                                              })
                                            : (0, i.jsx)(n, {
                                                className: "mt-0.5 w-4 h-4",
                                              }),
                                          (0, i.jsx)("span", {
                                            className:
                                              "text-secondary text-xs leading-relaxed",
                                            children: e.traditional.value,
                                          }),
                                        ],
                                      }),
                                    }),
                                    (0, i.jsx)("div", {
                                      className: (0, a.cn)(
                                        "px-3 py-4 bg-white mr-[5px]",
                                        t
                                          ? "rounded-br-[27px] mb-[5px]"
                                          : "border-b-[5px] border-white",
                                      ),
                                      children: (0, i.jsxs)("div", {
                                        className: "flex items-start gap-2",
                                        children: [
                                          e.agencies.isPositive
                                            ? (0, i.jsx)(r, {
                                                className: "mt-0.5 w-4 h-4",
                                              })
                                            : (0, i.jsx)(n, {
                                                className: "mt-0.5 w-4 h-4",
                                              }),
                                          (0, i.jsx)("span", {
                                            className:
                                              "text-secondary text-xs leading-relaxed",
                                            children: e.agencies.value,
                                          }),
                                        ],
                                      }),
                                    }),
                                  ],
                                },
                                s,
                              );
                            }),
                          ],
                        }),
                      }),
                    }),
                  }),
                  (0, i.jsx)("div", {
                    className: "md:hidden overflow-x-auto",
                    children: (0, i.jsx)("div", {
                      className:
                        "relative bg-beige rounded-[32px] p-[5px] min-w-[700px]",
                      children: (0, i.jsx)("div", {
                        className: "bg-white rounded-[27px] overflow-hidden",
                        children: (0, i.jsxs)("div", {
                          className: "min-w-[700px]",
                          children: [
                            (0, i.jsxs)("div", {
                              className:
                                "grid grid-cols-[140px_1fr_1fr_1fr] gap-3",
                              children: [
                                (0, i.jsx)("div", {
                                  className:
                                    "px-3 py-3 bg-beige rounded-tl-[27px] ml-[5px] mt-[5px] border-b-[5px] border-white",
                                  children: (0, i.jsx)("p", {
                                    className:
                                      "font-semibold text-secondary text-xs",
                                    children: "Kriterium",
                                  }),
                                }),
                                (0, i.jsx)("div", {
                                  className:
                                    "px-2 py-3 bg-white mt-[5px] border-b-[5px] border-white",
                                  children: (0, i.jsx)("p", {
                                    className:
                                      "font-semibold text-primary text-center text-xs",
                                    children: "Azubi ⭐",
                                  }),
                                }),
                                (0, i.jsx)("div", {
                                  className:
                                    "px-2 py-3 bg-white mt-[5px] border-b-[5px] border-white",
                                  children: (0, i.jsx)("p", {
                                    className:
                                      "font-semibold text-secondary text-center text-xs",
                                    children: "Traditionell",
                                  }),
                                }),
                                (0, i.jsx)("div", {
                                  className:
                                    "px-2 py-3 bg-white rounded-tr-[27px] mr-[5px] mt-[5px] border-b-[5px] border-white",
                                  children: (0, i.jsx)("p", {
                                    className:
                                      "font-semibold text-secondary text-center text-xs",
                                    children: "Vermittler",
                                  }),
                                }),
                              ],
                            }),
                            l.map((e, s) => {
                              let t = s === l.length - 1;
                              return (0, i.jsxs)(
                                "div",
                                {
                                  className:
                                    "grid grid-cols-[140px_1fr_1fr_1fr] gap-3",
                                  children: [
                                    (0, i.jsx)("div", {
                                      className: (0, a.cn)(
                                        "px-3 py-3 bg-beige ml-[5px]",
                                        t
                                          ? "rounded-bl-[27px] mb-[5px]"
                                          : "border-b-[5px] border-white",
                                      ),
                                      children: (0, i.jsx)("p", {
                                        className:
                                          "font-semibold text-secondary text-xs",
                                        children: e.feature,
                                      }),
                                    }),
                                    (0, i.jsx)("div", {
                                      className: (0, a.cn)(
                                        "px-2 py-3 bg-white",
                                        !t && "border-b-[5px] border-white",
                                      ),
                                      children: (0, i.jsxs)("div", {
                                        className: "flex items-start gap-1.5",
                                        children: [
                                          e.Azubi.isPositive
                                            ? (0, i.jsx)(r, {
                                                className:
                                                  "mt-0.5 w-3.5 h-3.5 flex-shrink-0",
                                              })
                                            : (0, i.jsx)(n, {
                                                className:
                                                  "mt-0.5 w-3.5 h-3.5 flex-shrink-0",
                                              }),
                                          (0, i.jsx)("span", {
                                            className:
                                              "text-secondary text-[10px] leading-relaxed font-medium",
                                            children: e.Azubi.value,
                                          }),
                                        ],
                                      }),
                                    }),
                                    (0, i.jsx)("div", {
                                      className: (0, a.cn)(
                                        "px-2 py-3 bg-white",
                                        !t && "border-b-[5px] border-white",
                                      ),
                                      children: (0, i.jsxs)("div", {
                                        className: "flex items-start gap-1.5",
                                        children: [
                                          e.traditional.isPositive
                                            ? (0, i.jsx)(r, {
                                                className:
                                                  "mt-0.5 w-3.5 h-3.5 flex-shrink-0",
                                              })
                                            : (0, i.jsx)(n, {
                                                className:
                                                  "mt-0.5 w-3.5 h-3.5 flex-shrink-0",
                                              }),
                                          (0, i.jsx)("span", {
                                            className:
                                              "text-secondary text-[10px] leading-relaxed",
                                            children: e.traditional.value,
                                          }),
                                        ],
                                      }),
                                    }),
                                    (0, i.jsx)("div", {
                                      className: (0, a.cn)(
                                        "px-2 py-3 bg-white mr-[5px]",
                                        t
                                          ? "rounded-br-[27px] mb-[5px]"
                                          : "border-b-[5px] border-white",
                                      ),
                                      children: (0, i.jsxs)("div", {
                                        className: "flex items-start gap-1.5",
                                        children: [
                                          e.agencies.isPositive
                                            ? (0, i.jsx)(r, {
                                                className:
                                                  "mt-0.5 w-3.5 h-3.5 flex-shrink-0",
                                              })
                                            : (0, i.jsx)(n, {
                                                className:
                                                  "mt-0.5 w-3.5 h-3.5 flex-shrink-0",
                                              }),
                                          (0, i.jsx)("span", {
                                            className:
                                              "text-secondary text-[10px] leading-relaxed",
                                            children: e.agencies.value,
                                          }),
                                        ],
                                      }),
                                    }),
                                  ],
                                },
                                s,
                              );
                            }),
                          ],
                        }),
                      }),
                    }),
                  }),
                ],
              }),
            }),
          ],
        });
      }
    },
    66689: (e, s, t) => {
      "use strict";
      t.d(s, { ActivityFeed: () => u });
      var i = t(70207),
        a = t(87223),
        r = t(54459),
        n = t(45748),
        l = t(88117),
        d = t(79024),
        o = t(66650),
        c = t(39945),
        x = t(1701);
      let m = [
        {
          type: "application",
          message: "IT-Unternehmen aus M\xfcnchen hat 3 Bewerbungen erhalten",
          location: "M\xfcnchen",
          icon: "bell",
        },
        {
          type: "job_posted",
          message: "Pflegeheim in Hamburg ver\xf6ffentlicht neue Stelle",
          location: "Hamburg",
          icon: "briefcase",
        },
        {
          type: "contact",
          message: "Maschinenbauer in Stuttgart hat Kandidat kontaktiert",
          location: "Stuttgart",
          icon: "trending",
        },
        {
          type: "registration",
          message: "Neues Unternehmen aus Berlin registriert",
          location: "Berlin",
          icon: "bell",
        },
        {
          type: "application",
          message: "Gastronomie-Betrieb in K\xf6ln hat 5 Bewerbungen erhalten",
          location: "K\xf6ln",
          icon: "bell",
        },
        {
          type: "job_posted",
          message: "Tech-Startup in Frankfurt sucht Fachinformatiker",
          location: "Frankfurt",
          icon: "briefcase",
        },
        {
          type: "contact",
          message: "Handwerksbetrieb in D\xfcsseldorf hat Interview vereinbart",
          location: "D\xfcsseldorf",
          icon: "trending",
        },
        {
          type: "application",
          message: "Automobilzulieferer in Ingolstadt hat 7 Bewerbungen",
          location: "Ingolstadt",
          icon: "bell",
        },
        {
          type: "job_posted",
          message: "Klinik in Leipzig ver\xf6ffentlicht Pflegestelle",
          location: "Leipzig",
          icon: "briefcase",
        },
        {
          type: "registration",
          message: "Mittelst\xe4ndler aus N\xfcrnberg registriert",
          location: "N\xfcrnberg",
          icon: "bell",
        },
      ];
      function h() {
        return {
          ...m[Math.floor(Math.random() * m.length)],
          id: "activity-".concat(Date.now(), "-").concat(Math.random()),
          timestamp: (function () {
            let e = Math.floor(28 * Math.random()) + 2;
            return "Vor ".concat(e, " ").concat(1 === e ? "Minute" : "Minuten");
          })(),
        };
      }
      function u() {
        let [e, s] = (0, a.useState)([]),
          [t, m] = (0, a.useState)(!0);
        ((0, a.useEffect)(() => {
          let e = setTimeout(() => {
              s([h()]);
            }, 1e4),
            t = setInterval(
              () => {
                let e = h();
                s((s) => [e, ...s].slice(0, 2));
              },
              3e4 * Math.random() + 6e4,
            );
          return () => {
            (clearTimeout(e), clearInterval(t));
          };
        }, []),
          (0, a.useEffect)(() => {
            if (e.length > 0) {
              let e = setTimeout(() => {
                s((e) => e.slice(0, -1));
              }, 1e4);
              return () => clearTimeout(e);
            }
          }, [e]));
        let u = (e) => {
            switch (e) {
              case "briefcase":
                return (0, i.jsx)(l.A, { className: "w-4 h-4" });
              case "trending":
                return (0, i.jsx)(d.A, { className: "w-4 h-4" });
              default:
                return (0, i.jsx)(o.A, { className: "w-4 h-4" });
            }
          },
          p = (e) => {
            s((s) => s.filter((s) => s.id !== e));
          },
          g = () => {
            window.location.href = "/arbeitgeber/auth/anmeldung";
          };
        return t
          ? (0, i.jsx)("div", {
              className:
                "fixed bottom-6 right-6 z-50 flex flex-col gap-3 pointer-events-none",
              children: (0, i.jsx)(r.N, {
                children: e.map((e) =>
                  (0, i.jsx)(
                    n.P.div,
                    {
                      initial: { opacity: 0, x: 100, scale: 0.8 },
                      animate: { opacity: 1, x: 0, scale: 1 },
                      exit: { opacity: 0, x: 100, scale: 0.8 },
                      transition: {
                        type: "spring",
                        stiffness: 200,
                        damping: 20,
                      },
                      className: "pointer-events-auto",
                      children: (0, i.jsxs)("div", {
                        onClick: g,
                        className:
                          "bg-white border border-border rounded-2xl shadow-lg hover:shadow-xl transition-all duration-300 p-4 max-w-sm cursor-pointer group hover:border-primary/30",
                        children: [
                          (0, i.jsxs)("div", {
                            className: "flex items-start gap-3",
                            children: [
                              (0, i.jsx)("div", {
                                className:
                                  "flex-shrink-0 p-2 rounded-lg bg-primary/10 text-primary group-hover:bg-primary group-hover:text-white transition-colors",
                                children: u(e.icon),
                              }),
                              (0, i.jsxs)("div", {
                                className: "flex-1 min-w-0",
                                children: [
                                  (0, i.jsxs)("div", {
                                    className:
                                      "flex items-start justify-between gap-2",
                                    children: [
                                      (0, i.jsx)("p", {
                                        className:
                                          "text-sm font-medium text-secondary leading-snug",
                                        children: e.message,
                                      }),
                                      (0, i.jsx)("button", {
                                        onClick: (s) => {
                                          (s.stopPropagation(), p(e.id));
                                        },
                                        className:
                                          "flex-shrink-0 p-1 rounded-full hover:bg-muted transition-colors",
                                        children: (0, i.jsx)(c.A, {
                                          className:
                                            "w-3 h-3 text-muted-foreground",
                                        }),
                                      }),
                                    ],
                                  }),
                                  (0, i.jsxs)("div", {
                                    className:
                                      "flex items-center gap-2 mt-1 text-xs text-muted-foreground",
                                    children: [
                                      (0, i.jsx)(x.A, { className: "w-3 h-3" }),
                                      (0, i.jsx)("span", {
                                        children: e.location,
                                      }),
                                      (0, i.jsx)("span", { children: "•" }),
                                      (0, i.jsx)("span", {
                                        children: e.timestamp,
                                      }),
                                    ],
                                  }),
                                ],
                              }),
                            ],
                          }),
                          (0, i.jsx)("div", {
                            className: "mt-2 pt-2 border-t border-border/50",
                            children: (0, i.jsx)("p", {
                              className:
                                "text-xs text-primary font-medium group-hover:underline",
                              children: "Kostenlos registrieren →",
                            }),
                          }),
                        ],
                      }),
                    },
                    e.id,
                  ),
                ),
              }),
            })
          : null;
      }
    },
    77805: (e, s, t) => {
      "use strict";
      t.d(s, { HeroSection: () => k });
      var i = t(70207),
        a = t(10542),
        r = t.n(a),
        n = t(50018),
        l = t(39441),
        d = t(95034),
        o = t(75980),
        c = t(88117),
        x = t(43431),
        m = t(5101),
        h = t(95540),
        u = t(61280),
        p = t(70005),
        g = t(47161),
        b = t(15450),
        f = t(79024),
        v = t(45748),
        j = t(78809);
      let N = [
          { name: "BMW", id: "bmw" },
          { name: "Siemens", id: "siemens" },
          { name: "Volkswagen", id: "volkswagen" },
          { name: "SAP", id: "sap" },
          { name: "Bosch", id: "bosch" },
          { name: "Mercedes-Benz", id: "mercedes" },
          { name: "Deutsche Telekom", id: "telekom" },
          { name: "BASF", id: "basf" },
          { name: "Allianz", id: "allianz" },
          { name: "Deutsche Bank", id: "deutsche-bank" },
          { name: "Lufthansa", id: "lufthansa" },
          { name: "Adidas", id: "adidas" },
        ],
        w = [
          { icon: o.A, label: "Dashboard" },
          { icon: c.A, label: "Meine Stellen" },
          { icon: x.A, label: "Kandidaten" },
          { icon: m.A, label: "Bewerbungen" },
          { icon: h.A, label: "Nachrichten" },
        ],
        y = [
          {
            label: "Aktive Stellen",
            value: "3",
            subtext: "2 Entw\xfcrfe",
            icon: c.A,
          },
          { label: "Bewerbungen", value: "24", subtext: "8 neu", icon: m.A },
          {
            label: "Profilansichten",
            value: "156",
            subtext: "Letzte 7 Tage",
            icon: u.A,
          },
        ];
      function k() {
        return (0, i.jsxs)(i.Fragment, {
          children: [
            (0, i.jsxs)("section", {
              className:
                "relative py-16 md:py-24 overflow-hidden -mt-24 pt-40 md:pt-48 pb-32 md:pb-40",
              children: [
                (0, i.jsx)(n.default, {
                  src: "/images/arbeitgeber-hero-background.webp",
                  alt: "Professional German workplace environment",
                  fill: !0,
                  priority: !0,
                  quality: 85,
                  sizes: "100vw",
                  className: "object-cover object-bottom",
                }),
                (0, i.jsx)("div", {
                  className: "absolute inset-0 bg-black/30 z-0",
                }),
                (0, i.jsx)("div", {
                  className: "absolute inset-0 z-0",
                  style: {
                    background:
                      "\n              radial-gradient(ellipse at center, transparent 0%, transparent 40%, rgba(0,0,0,0.4) 100%),\n              linear-gradient(to top, rgba(0,0,0,0.5) 0%, transparent 30%),\n              linear-gradient(to right, rgba(0,0,0,0.3) 0%, transparent 15%),\n              linear-gradient(to left, rgba(0,0,0,0.3) 0%, transparent 15%)\n            ",
                  },
                }),
                (0, i.jsx)(d.m, {
                  size: "lg",
                  className: "relative z-10",
                  children: (0, i.jsxs)(v.P.div, {
                    initial: { opacity: 0, y: 20 },
                    animate: { opacity: 1, y: 0 },
                    transition: { duration: 0.6 },
                    className:
                      "flex flex-col items-center text-center space-y-6 max-w-4xl mx-auto",
                    children: [
                      (0, i.jsxs)("div", {
                        className: "space-y-4",
                        children: [
                          (0, i.jsxs)("h1", {
                            className:
                              "text-4xl md:text-5xl lg:text-6xl font-bold leading-[1.1] tracking-tight text-white drop-shadow-2xl",
                            children: [
                              "Qualifizierte internationale",
                              " ",
                              (0, i.jsx)("span", {
                                className: "text-primary",
                                children: "Azubis",
                              }),
                              " finden",
                            ],
                          }),
                          (0, i.jsx)("p", {
                            className:
                              "text-lg md:text-xl text-white/90 leading-relaxed drop-shadow-lg",
                            children:
                              "Kostenlose Recruiting-Plattform f\xfcr deutsche Unternehmen. Verifizierte Kandidaten mit Deutschkenntnissen.",
                          }),
                        ],
                      }),
                      (0, i.jsxs)("div", {
                        className:
                          "flex flex-wrap justify-center gap-6 text-white/90",
                        children: [
                          (0, i.jsxs)("div", {
                            className: "flex items-center gap-2",
                            children: [
                              (0, i.jsx)(p.A, {
                                className:
                                  "w-5 h-5 text-primary drop-shadow-md",
                              }),
                              (0, i.jsx)("span", {
                                className: "font-medium drop-shadow-md",
                                children: "100% Kostenlos",
                              }),
                            ],
                          }),
                          (0, i.jsxs)("div", {
                            className: "flex items-center gap-2",
                            children: [
                              (0, i.jsx)(p.A, {
                                className:
                                  "w-5 h-5 text-primary drop-shadow-md",
                              }),
                              (0, i.jsx)("span", {
                                className: "font-medium drop-shadow-md",
                                children: "B1-C1 Deutsch",
                              }),
                            ],
                          }),
                          (0, i.jsxs)("div", {
                            className: "flex items-center gap-2",
                            children: [
                              (0, i.jsx)(p.A, {
                                className:
                                  "w-5 h-5 text-primary drop-shadow-md",
                              }),
                              (0, i.jsx)("span", {
                                className: "font-medium drop-shadow-md",
                                children: "Verifizierte Profile",
                              }),
                            ],
                          }),
                        ],
                      }),
                      (0, i.jsxs)("div", {
                        className:
                          "flex flex-col sm:flex-row gap-4 pt-2 justify-center",
                        children: [
                          (0, i.jsx)(r(), {
                            href: "/arbeitgeber/auth/anmeldung",
                            children: (0, i.jsx)(l.$, {
                              size: "lg",
                              className:
                                "bg-primary hover:bg-[#2C3340] text-white shadow-lg hover:shadow-xl transition-all duration-300 rounded-full px-8 h-14 text-base font-semibold hover:-translate-y-1",
                              children: "Kostenlos registrieren",
                            }),
                          }),
                          (0, i.jsx)(r(), {
                            href: "#wie-es-funktioniert",
                            children: (0, i.jsx)(l.$, {
                              size: "lg",
                              variant: "outline",
                              className:
                                "border-2 border-white/80 hover:border-white text-white hover:text-white hover:bg-white/10 backdrop-blur-sm transition-all duration-300 rounded-full px-8 h-14 text-base font-semibold",
                              children: "Demo ansehen",
                            }),
                          }),
                        ],
                      }),
                    ],
                  }),
                }),
              ],
            }),
            (0, i.jsx)("section", {
              className: "relative -mt-12 md:-mt-16 z-20",
              children: (0, i.jsx)(d.m, {
                size: "lg",
                children: (0, i.jsx)(v.P.div, {
                  initial: { opacity: 0, y: 50 },
                  animate: { opacity: 1, y: 0 },
                  transition: { duration: 0.8, delay: 0.3 },
                  className: "relative max-w-5xl mx-auto",
                  children: (0, i.jsx)("div", {
                    className: "relative w-full",
                    children: (0, i.jsxs)("div", {
                      className:
                        "bg-white rounded-2xl shadow-2xl border border-border/20 overflow-hidden",
                      children: [
                        (0, i.jsxs)("div", {
                          className:
                            "h-10 bg-muted border-b border-border flex items-center px-4 gap-2",
                          children: [
                            (0, i.jsxs)("div", {
                              className: "flex gap-2",
                              children: [
                                (0, i.jsx)("div", {
                                  className: "w-3 h-3 rounded-full bg-red-400",
                                }),
                                (0, i.jsx)("div", {
                                  className:
                                    "w-3 h-3 rounded-full bg-yellow-400",
                                }),
                                (0, i.jsx)("div", {
                                  className: "w-3 h-3 rounded-full bg-green",
                                }),
                              ],
                            }),
                            (0, i.jsx)("div", {
                              className:
                                "ml-4 flex-1 h-6 bg-background/60 rounded px-3 flex items-center text-xs text-muted-foreground",
                              children:
                                "azubi.ma/arbeitgeber/dashboard",
                            }),
                          ],
                        }),
                        (0, i.jsxs)("div", {
                          className: "flex",
                          children: [
                            (0, i.jsxs)("div", {
                              className:
                                "w-16 bg-beige border-r border-border/10 py-4 flex flex-col items-center group/sidebar",
                              children: [
                                (0, i.jsx)("div", {
                                  className:
                                    "mb-4 flex items-center justify-center",
                                  children: (0, i.jsx)(n.default, {
                                    src: j.KN.ICON,
                                    alt: "Azubi",
                                    width: 32,
                                    height: 32,
                                    className: "object-contain",
                                  }),
                                }),
                                (0, i.jsx)("div", {
                                  className: "space-y-2 flex-1",
                                  children: w.map((e, s) => {
                                    let t = e.icon;
                                    return (0, i.jsxs)(
                                      "div",
                                      {
                                        className: "relative group",
                                        children: [
                                          (0, i.jsx)("div", {
                                            className:
                                              "flex items-center justify-center w-10 h-10 rounded-lg transition-colors ".concat(
                                                0 === s
                                                  ? "bg-primary/10 text-primary border border-primary/20"
                                                  : "text-secondary/70 hover:bg-secondary/5",
                                              ),
                                            children: (0, i.jsx)(t, {
                                              size: 18,
                                            }),
                                          }),
                                          (0, i.jsx)("div", {
                                            className:
                                              "absolute left-14 top-1/2 -translate-y-1/2 bg-secondary text-white px-2 py-1 rounded text-xs whitespace-nowrap opacity-0 group-hover:opacity-100 transition-opacity pointer-events-none z-50",
                                            children: e.label,
                                          }),
                                        ],
                                      },
                                      e.label,
                                    );
                                  }),
                                }),
                                (0, i.jsxs)("div", {
                                  className: "space-y-2 mt-auto",
                                  children: [
                                    (0, i.jsxs)("div", {
                                      className: "relative group",
                                      children: [
                                        (0, i.jsx)("div", {
                                          className:
                                            "flex items-center justify-center w-10 h-10 rounded-lg text-secondary/70 hover:bg-secondary/5 transition-colors",
                                          children: (0, i.jsx)(g.A, {
                                            size: 18,
                                          }),
                                        }),
                                        (0, i.jsx)("div", {
                                          className:
                                            "absolute left-14 top-1/2 -translate-y-1/2 bg-secondary text-white px-2 py-1 rounded text-xs whitespace-nowrap opacity-0 group-hover:opacity-100 transition-opacity pointer-events-none z-50",
                                          children: "Hilfe & Support",
                                        }),
                                      ],
                                    }),
                                    (0, i.jsxs)("div", {
                                      className: "relative group",
                                      children: [
                                        (0, i.jsx)("div", {
                                          className:
                                            "flex items-center justify-center w-10 h-10 rounded-lg text-secondary/70 hover:bg-secondary/5 transition-colors",
                                          children: (0, i.jsx)(b.A, {
                                            size: 18,
                                          }),
                                        }),
                                        (0, i.jsx)("div", {
                                          className:
                                            "absolute left-14 top-1/2 -translate-y-1/2 bg-secondary text-white px-2 py-1 rounded text-xs whitespace-nowrap opacity-0 group-hover:opacity-100 transition-opacity pointer-events-none z-50",
                                          children: "Einstellungen",
                                        }),
                                      ],
                                    }),
                                  ],
                                }),
                              ],
                            }),
                            (0, i.jsx)("div", {
                              className:
                                "flex-1 bg-gradient-to-br from-background to-muted/20 p-6 overflow-hidden",
                              children: (0, i.jsxs)("div", {
                                className: "space-y-4",
                                children: [
                                  (0, i.jsxs)("div", {
                                    className: "mb-4",
                                    children: [
                                      (0, i.jsx)("h2", {
                                        className:
                                          "text-xl font-bold text-secondary mb-1",
                                        children:
                                          "Willkommen zur\xfcck, Firma GmbH!",
                                      }),
                                      (0, i.jsx)("p", {
                                        className:
                                          "text-xs text-muted-foreground",
                                        children:
                                          "Hier ist Ihre \xdcbersicht f\xfcr heute",
                                      }),
                                    ],
                                  }),
                                  (0, i.jsxs)("div", {
                                    className: "grid grid-cols-2 gap-3",
                                    children: [
                                      (0, i.jsxs)("div", {
                                        className:
                                          "p-4 rounded-xl bg-gradient-to-br from-primary to-primary/90 text-white shadow-md hover:shadow-lg transition-all cursor-pointer group",
                                        children: [
                                          (0, i.jsxs)("div", {
                                            className:
                                              "flex items-center justify-between mb-2",
                                            children: [
                                              (0, i.jsx)(c.A, {
                                                className:
                                                  "h-5 w-5 group-hover:scale-110 transition-transform",
                                              }),
                                              (0, i.jsx)(f.A, {
                                                className: "h-4 w-4 opacity-70",
                                              }),
                                            ],
                                          }),
                                          (0, i.jsx)("div", {
                                            className:
                                              "text-sm font-medium mb-1",
                                            children: "Neue Stelle erstellen",
                                          }),
                                          (0, i.jsx)("div", {
                                            className: "text-xs opacity-90",
                                            children:
                                              "Erreichen Sie 1000+ Kandidaten",
                                          }),
                                        ],
                                      }),
                                      (0, i.jsxs)("div", {
                                        className:
                                          "p-4 rounded-xl bg-gradient-to-br from-green to-green/90 text-white shadow-md hover:shadow-lg transition-all cursor-pointer group",
                                        children: [
                                          (0, i.jsxs)("div", {
                                            className:
                                              "flex items-center justify-between mb-2",
                                            children: [
                                              (0, i.jsx)(x.A, {
                                                className:
                                                  "h-5 w-5 group-hover:scale-110 transition-transform",
                                              }),
                                              (0, i.jsx)(m.A, {
                                                className: "h-4 w-4 opacity-70",
                                              }),
                                            ],
                                          }),
                                          (0, i.jsx)("div", {
                                            className:
                                              "text-sm font-medium mb-1",
                                            children: "Kandidaten durchsuchen",
                                          }),
                                          (0, i.jsx)("div", {
                                            className: "text-xs opacity-90",
                                            children:
                                              "Finden Sie perfekte Matches",
                                          }),
                                        ],
                                      }),
                                    ],
                                  }),
                                  (0, i.jsx)("div", {
                                    className: "grid grid-cols-3 gap-3",
                                    children: y.map((e, s) => {
                                      let t = e.icon;
                                      return (0, i.jsxs)(
                                        "div",
                                        {
                                          className:
                                            "p-3 rounded-xl bg-white border border-border/50 shadow-sm hover:shadow-md transition-shadow",
                                          children: [
                                            (0, i.jsxs)("div", {
                                              className:
                                                "flex items-center justify-between mb-2",
                                              children: [
                                                (0, i.jsx)("span", {
                                                  className:
                                                    "text-xs font-medium text-muted-foreground",
                                                  children: e.label,
                                                }),
                                                (0, i.jsx)("div", {
                                                  className:
                                                    "p-1.5 rounded-lg bg-primary/10",
                                                  children: (0, i.jsx)(t, {
                                                    className:
                                                      "h-3.5 w-3.5 text-primary",
                                                  }),
                                                }),
                                              ],
                                            }),
                                            (0, i.jsx)("div", {
                                              className:
                                                "text-xl font-bold text-secondary mb-0.5",
                                              children: e.value,
                                            }),
                                            (0, i.jsx)("div", {
                                              className:
                                                "text-xs text-green/80",
                                              children: e.subtext,
                                            }),
                                          ],
                                        },
                                        s,
                                      );
                                    }),
                                  }),
                                  (0, i.jsxs)("div", {
                                    className: "grid grid-cols-2 gap-3",
                                    children: [
                                      (0, i.jsxs)("div", {
                                        className:
                                          "bg-white rounded-xl border border-border/50 shadow-sm p-4",
                                        children: [
                                          (0, i.jsxs)("div", {
                                            className:
                                              "flex items-center justify-between mb-3",
                                            children: [
                                              (0, i.jsx)("h3", {
                                                className:
                                                  "text-sm font-semibold text-secondary",
                                                children:
                                                  "Bewerbungen (7 Tage)",
                                              }),
                                              (0, i.jsx)("span", {
                                                className:
                                                  "text-xs text-green font-medium",
                                                children: "+18% ↑",
                                              }),
                                            ],
                                          }),
                                          (0, i.jsx)("div", {
                                            className:
                                              "flex items-end justify-between h-16 gap-1.5",
                                            children: [
                                              { day: "Mo", value: 3 },
                                              { day: "Di", value: 5 },
                                              { day: "Mi", value: 4 },
                                              { day: "Do", value: 7 },
                                              { day: "Fr", value: 8 },
                                              { day: "Sa", value: 6 },
                                              { day: "So", value: 11 },
                                            ].map((e, s) => {
                                              let t = Math.max(
                                                (e.value / 11) * 52,
                                                8,
                                              );
                                              return (0, i.jsxs)(
                                                "div",
                                                {
                                                  className:
                                                    "flex-1 flex flex-col items-center gap-1.5",
                                                  children: [
                                                    (0, i.jsx)("div", {
                                                      className:
                                                        "w-full bg-gradient-to-t from-primary to-primary/60 rounded-t transition-all hover:from-primary/90 hover:to-primary/50 cursor-pointer relative group",
                                                      style: {
                                                        height: "".concat(
                                                          t,
                                                          "px",
                                                        ),
                                                      },
                                                      children: (0, i.jsx)(
                                                        "div",
                                                        {
                                                          className:
                                                            "absolute -top-6 left-1/2 -translate-x-1/2 bg-secondary text-white px-1.5 py-0.5 rounded text-xs opacity-0 group-hover:opacity-100 transition-opacity whitespace-nowrap z-10",
                                                          children: e.value,
                                                        },
                                                      ),
                                                    }),
                                                    (0, i.jsx)("span", {
                                                      className:
                                                        "text-xs text-muted-foreground font-medium",
                                                      children: e.day,
                                                    }),
                                                  ],
                                                },
                                                e.day,
                                              );
                                            }),
                                          }),
                                        ],
                                      }),
                                      (0, i.jsxs)("div", {
                                        className:
                                          "bg-white rounded-xl border border-border/50 shadow-sm p-4",
                                        children: [
                                          (0, i.jsxs)("div", {
                                            className:
                                              "flex items-center justify-between mb-3",
                                            children: [
                                              (0, i.jsx)("h3", {
                                                className:
                                                  "text-sm font-semibold text-secondary",
                                                children: "Beliebteste Stelle",
                                              }),
                                              (0, i.jsx)("span", {
                                                className:
                                                  "text-xs text-primary font-medium",
                                                children: "Top",
                                              }),
                                            ],
                                          }),
                                          (0, i.jsxs)("div", {
                                            className: "space-y-2.5",
                                            children: [
                                              (0, i.jsxs)("div", {
                                                className:
                                                  "flex items-center gap-2",
                                                children: [
                                                  (0, i.jsxs)("div", {
                                                    className: "flex-1",
                                                    children: [
                                                      (0, i.jsx)("p", {
                                                        className:
                                                          "text-xs font-semibold text-secondary mb-0.5",
                                                        children:
                                                          "Pflegefachkraft",
                                                      }),
                                                      (0, i.jsx)("p", {
                                                        className:
                                                          "text-xs text-muted-foreground",
                                                        children:
                                                          "Berlin • Vollzeit",
                                                      }),
                                                    ],
                                                  }),
                                                  (0, i.jsxs)("div", {
                                                    className: "text-right",
                                                    children: [
                                                      (0, i.jsx)("p", {
                                                        className:
                                                          "text-lg font-bold text-primary",
                                                        children: "12",
                                                      }),
                                                      (0, i.jsx)("p", {
                                                        className:
                                                          "text-xs text-muted-foreground",
                                                        children: "Bewerbungen",
                                                      }),
                                                    ],
                                                  }),
                                                ],
                                              }),
                                              (0, i.jsx)("div", {
                                                className:
                                                  "w-full h-1.5 bg-muted rounded-full overflow-hidden",
                                                children: (0, i.jsx)("div", {
                                                  className:
                                                    "h-full bg-gradient-to-r from-primary to-primary/60 rounded-full",
                                                  style: { width: "75%" },
                                                }),
                                              }),
                                              (0, i.jsxs)("div", {
                                                className:
                                                  "flex items-center justify-between text-xs pt-1",
                                                children: [
                                                  (0, i.jsxs)("span", {
                                                    className:
                                                      "text-muted-foreground",
                                                    children: [
                                                      "IT-Systemelektroniker: ",
                                                      (0, i.jsx)("span", {
                                                        className:
                                                          "font-semibold text-secondary",
                                                        children: "8",
                                                      }),
                                                    ],
                                                  }),
                                                  (0, i.jsxs)("span", {
                                                    className:
                                                      "text-muted-foreground",
                                                    children: [
                                                      "Hotelfachfrau: ",
                                                      (0, i.jsx)("span", {
                                                        className:
                                                          "font-semibold text-secondary",
                                                        children: "4",
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
                                  (0, i.jsxs)("div", {
                                    className:
                                      "bg-white rounded-xl border border-border/50 shadow-sm overflow-hidden",
                                    children: [
                                      (0, i.jsxs)("div", {
                                        className:
                                          "px-4 py-2.5 border-b border-border/50 flex items-center justify-between",
                                        children: [
                                          (0, i.jsx)("h3", {
                                            className:
                                              "text-sm font-semibold text-secondary",
                                            children: "Neue Bewerbungen",
                                          }),
                                          (0, i.jsx)("span", {
                                            className:
                                              "px-2 py-0.5 rounded-full text-xs font-medium bg-green/10 text-green",
                                            children: "8 neue",
                                          }),
                                        ],
                                      }),
                                      (0, i.jsxs)("div", {
                                        className: "divide-y divide-border/30",
                                        children: [
                                          (0, i.jsx)("div", {
                                            className:
                                              "px-4 py-3 hover:bg-muted/30 transition-colors cursor-pointer",
                                            children: (0, i.jsxs)("div", {
                                              className:
                                                "flex items-center gap-3",
                                              children: [
                                                (0, i.jsx)(n.default, {
                                                  src: "/images/avatars/avatar-2.webp",
                                                  alt: "Candidate",
                                                  width: 40,
                                                  height: 40,
                                                  className:
                                                    "rounded-full object-cover ring-2 ring-primary/20",
                                                }),
                                                (0, i.jsxs)("div", {
                                                  className: "flex-1 min-w-0",
                                                  children: [
                                                    (0, i.jsxs)("div", {
                                                      className:
                                                        "flex items-center gap-2",
                                                      children: [
                                                        (0, i.jsx)("p", {
                                                          className:
                                                            "text-sm font-semibold text-secondary truncate",
                                                          children:
                                                            "Sarah M\xfcller",
                                                        }),
                                                        (0, i.jsx)("span", {
                                                          className:
                                                            "px-1.5 py-0.5 rounded-full text-xs font-medium bg-green/10 text-green",
                                                          children: "Neu",
                                                        }),
                                                      ],
                                                    }),
                                                    (0, i.jsx)("p", {
                                                      className:
                                                        "text-xs text-muted-foreground truncate",
                                                      children:
                                                        "Pflegefachkraft • B2 Deutsch",
                                                    }),
                                                  ],
                                                }),
                                                (0, i.jsxs)("div", {
                                                  className:
                                                    "text-right shrink-0",
                                                  children: [
                                                    (0, i.jsx)("p", {
                                                      className:
                                                        "text-xs text-muted-foreground",
                                                      children: "Vor 2 Std.",
                                                    }),
                                                    (0, i.jsxs)("div", {
                                                      className:
                                                        "flex items-center gap-1 mt-0.5",
                                                      children: [
                                                        (0, i.jsx)("div", {
                                                          className:
                                                            "w-1.5 h-1.5 rounded-full bg-green",
                                                        }),
                                                        (0, i.jsx)("span", {
                                                          className:
                                                            "text-xs text-green",
                                                          children: "Online",
                                                        }),
                                                      ],
                                                    }),
                                                  ],
                                                }),
                                              ],
                                            }),
                                          }),
                                          (0, i.jsx)("div", {
                                            className:
                                              "px-4 py-3 hover:bg-muted/30 transition-colors cursor-pointer",
                                            children: (0, i.jsxs)("div", {
                                              className:
                                                "flex items-center gap-3",
                                              children: [
                                                (0, i.jsx)(n.default, {
                                                  src: "/images/avatars/avatar-5.webp",
                                                  alt: "Candidate",
                                                  width: 40,
                                                  height: 40,
                                                  className:
                                                    "rounded-full object-cover ring-2 ring-primary/20",
                                                }),
                                                (0, i.jsxs)("div", {
                                                  className: "flex-1 min-w-0",
                                                  children: [
                                                    (0, i.jsxs)("div", {
                                                      className:
                                                        "flex items-center gap-2",
                                                      children: [
                                                        (0, i.jsx)("p", {
                                                          className:
                                                            "text-sm font-semibold text-secondary truncate",
                                                          children:
                                                            "Ahmed Hassan",
                                                        }),
                                                        (0, i.jsx)("span", {
                                                          className:
                                                            "px-1.5 py-0.5 rounded-full text-xs font-medium bg-green/10 text-green",
                                                          children: "Neu",
                                                        }),
                                                      ],
                                                    }),
                                                    (0, i.jsx)("p", {
                                                      className:
                                                        "text-xs text-muted-foreground truncate",
                                                      children:
                                                        "IT-Systemelektroniker • C1 Deutsch",
                                                    }),
                                                  ],
                                                }),
                                                (0, i.jsxs)("div", {
                                                  className:
                                                    "text-right shrink-0",
                                                  children: [
                                                    (0, i.jsx)("p", {
                                                      className:
                                                        "text-xs text-muted-foreground",
                                                      children: "Vor 5 Std.",
                                                    }),
                                                    (0, i.jsxs)("div", {
                                                      className:
                                                        "flex items-center gap-1 mt-0.5",
                                                      children: [
                                                        (0, i.jsx)("div", {
                                                          className:
                                                            "w-1.5 h-1.5 rounded-full bg-green",
                                                        }),
                                                        (0, i.jsx)("span", {
                                                          className:
                                                            "text-xs text-green",
                                                          children: "Online",
                                                        }),
                                                      ],
                                                    }),
                                                  ],
                                                }),
                                              ],
                                            }),
                                          }),
                                          (0, i.jsx)("div", {
                                            className:
                                              "px-4 py-3 hover:bg-muted/30 transition-colors cursor-pointer",
                                            children: (0, i.jsxs)("div", {
                                              className:
                                                "flex items-center gap-3",
                                              children: [
                                                (0, i.jsx)(n.default, {
                                                  src: "/images/avatars/avatar-4.webp",
                                                  alt: "Candidate",
                                                  width: 40,
                                                  height: 40,
                                                  className:
                                                    "rounded-full object-cover ring-2 ring-border/30",
                                                }),
                                                (0, i.jsxs)("div", {
                                                  className: "flex-1 min-w-0",
                                                  children: [
                                                    (0, i.jsx)("p", {
                                                      className:
                                                        "text-sm font-semibold text-secondary truncate",
                                                      children:
                                                        "Maria Rodriguez",
                                                    }),
                                                    (0, i.jsx)("p", {
                                                      className:
                                                        "text-xs text-muted-foreground truncate",
                                                      children:
                                                        "Hotelfachfrau • B2 Deutsch",
                                                    }),
                                                  ],
                                                }),
                                                (0, i.jsxs)("div", {
                                                  className:
                                                    "text-right shrink-0",
                                                  children: [
                                                    (0, i.jsx)("p", {
                                                      className:
                                                        "text-xs text-muted-foreground",
                                                      children: "Gestern",
                                                    }),
                                                    (0, i.jsxs)("div", {
                                                      className:
                                                        "flex items-center gap-1 mt-0.5",
                                                      children: [
                                                        (0, i.jsx)("div", {
                                                          className:
                                                            "w-1.5 h-1.5 rounded-full bg-muted-foreground/50",
                                                        }),
                                                        (0, i.jsx)("span", {
                                                          className:
                                                            "text-xs text-muted-foreground",
                                                          children: "Offline",
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
                                    ],
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
            }),
            (0, i.jsx)("section", {
              className: "py-12 md:py-16 bg-background",
              children: (0, i.jsxs)(d.m, {
                size: "lg",
                children: [
                  (0, i.jsxs)("p", {
                    className:
                      "text-center text-sm md:text-base text-foreground/80 mb-6 font-medium",
                    children: [
                      "Qualifizierte Azubis f\xfcr ",
                      (0, i.jsx)("span", {
                        className: "text-primary font-semibold",
                        children: "Unternehmen wie",
                      }),
                    ],
                  }),
                  (0, i.jsxs)("div", {
                    className: "relative overflow-hidden py-2",
                    children: [
                      (0, i.jsx)("div", {
                        className:
                          "absolute left-0 top-0 bottom-0 w-24 md:w-32 bg-gradient-to-r from-background to-transparent z-10 pointer-events-none",
                      }),
                      (0, i.jsx)("div", {
                        className:
                          "absolute right-0 top-0 bottom-0 w-24 md:w-32 bg-gradient-to-l from-background to-transparent z-10 pointer-events-none",
                      }),
                      (0, i.jsxs)("div", {
                        className:
                          "flex animate-scroll-infinite gap-12 md:gap-16",
                        children: [
                          N.map((e) =>
                            (0, i.jsx)(
                              "div",
                              {
                                className:
                                  "flex items-center justify-center shrink-0 group",
                                title: e.name,
                                children: (0, i.jsx)(n.default, {
                                  src: "/logos/companies/".concat(
                                    e.id,
                                    ".webp",
                                  ),
                                  alt: e.name,
                                  width: 100,
                                  height: 100,
                                  className:
                                    "object-contain w-20 h-20 md:w-24 md:h-24 grayscale group-hover:grayscale-0 transition-all duration-300",
                                }),
                              },
                              "first-".concat(e.id),
                            ),
                          ),
                          N.map((e) =>
                            (0, i.jsx)(
                              "div",
                              {
                                className:
                                  "flex items-center justify-center shrink-0 group",
                                title: e.name,
                                children: (0, i.jsx)(n.default, {
                                  src: "/logos/companies/".concat(
                                    e.id,
                                    ".webp",
                                  ),
                                  alt: e.name,
                                  width: 100,
                                  height: 100,
                                  className:
                                    "object-contain w-20 h-20 md:w-24 md:h-24 grayscale group-hover:grayscale-0 transition-all duration-300",
                                }),
                              },
                              "second-".concat(e.id),
                            ),
                          ),
                          N.map((e) =>
                            (0, i.jsx)(
                              "div",
                              {
                                className:
                                  "flex items-center justify-center shrink-0 group",
                                title: e.name,
                                children: (0, i.jsx)(n.default, {
                                  src: "/logos/companies/".concat(
                                    e.id,
                                    ".webp",
                                  ),
                                  alt: e.name,
                                  width: 100,
                                  height: 100,
                                  className:
                                    "object-contain w-20 h-20 md:w-24 md:h-24 grayscale group-hover:grayscale-0 transition-all duration-300",
                                }),
                              },
                              "third-".concat(e.id),
                            ),
                          ),
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
    98896: (e, s, t) => {
      "use strict";
      t.d(s, { FinalCTASection: () => o });
      var i = t(70207),
        a = t(10542),
        r = t.n(a),
        n = t(50018),
        l = t(6971),
        d = t(29377);
      function o() {
        return (0, i.jsx)("div", {
          className: "relative w-full px-4 py-12 md:py-16 lg:py-20 bg-cream",
          children: (0, i.jsx)("div", {
            className: "max-w-7xl mx-auto",
            children: (0, i.jsxs)("div", {
              className:
                "relative overflow-hidden rounded-[24px] md:rounded-[32px] px-6 py-6 md:py-8",
              children: [
                (0, i.jsx)(n.default, {
                  src: "/images/hero-background-germany-natural-autumn.webp",
                  alt: "Beautiful autumn landscape in Germany",
                  fill: !0,
                  quality: 85,
                  sizes:
                    "(max-width: 768px) 100vw, (max-width: 1280px) 90vw, 1280px",
                  className:
                    "object-cover object-center rounded-[24px] md:rounded-[32px]",
                }),
                (0, i.jsx)("div", {
                  className:
                    "absolute inset-0 bg-black/30 z-0 rounded-[24px] md:rounded-[32px]",
                }),
                (0, i.jsx)("div", {
                  className:
                    "absolute inset-0 z-[1] rounded-[24px] md:rounded-[32px]",
                  style: {
                    background:
                      "\n                radial-gradient(ellipse at center, transparent 0%, transparent 40%, rgba(0,0,0,0.4) 100%),\n                linear-gradient(to top, rgba(0,0,0,0.5) 0%, transparent 30%),\n                linear-gradient(to right, rgba(0,0,0,0.3) 0%, transparent 15%),\n                linear-gradient(to left, rgba(0,0,0,0.3) 0%, transparent 15%)\n              ",
                  },
                }),
                (0, i.jsxs)("div", {
                  className: "relative z-10 text-center space-y-3 md:space-y-4",
                  children: [
                    (0, i.jsx)("h2", {
                      className:
                        "text-3xl md:text-4xl lg:text-5xl xl:text-6xl font-bold tracking-tight text-white px-4 pb-6 md:pb-8",
                      children: "Bereit, Ihre n\xe4chsten Talente zu finden?",
                    }),
                    (0, i.jsxs)("div", {
                      className: "flex flex-col items-center gap-4 md:gap-6",
                      children: [
                        (0, i.jsxs)(r(), {
                          href: "/arbeitgeber/auth/anmeldung",
                          className:
                            "group relative inline-flex items-center gap-3 px-8 py-4 rounded-full overflow-hidden",
                          style: {
                            backgroundColor: "rgba(0, 0, 0, 0.11)",
                            borderRadius: "118px",
                            boxShadow:
                              "\n                    rgba(0, 0, 0, 0.067) 0px 2.51941px 2.51941px -0.46875px,\n                    rgba(0, 0, 0, 0.067) 0px 5.97144px 5.97144px -0.9375px,\n                    rgba(0, 0, 0, 0.063) 0px 10.8925px 10.8925px -1.40625px,\n                    rgba(0, 0, 0, 0.063) 0px 18.1088px 18.1088px -1.875px,\n                    rgba(0, 0, 0, 0.06) 0px 29.2442px 29.2442px -2.34375px,\n                    rgba(0, 0, 0, 0.055) 0px 47.8699px 47.8699px -2.8125px,\n                    rgba(0, 0, 0, 0.043) 0px 82.4287px 82.4287px -3.28125px,\n                    rgba(0, 0, 0, 0.024) 0px 150px 150px -3.75px\n                  ",
                          },
                          children: [
                            (0, i.jsx)("div", {
                              className:
                                "absolute inset-[3px] rounded-[114px] bg-white z-0",
                            }),
                            (0, i.jsx)("div", {
                              className: "relative z-10 flex-shrink-0",
                              children: (0, i.jsx)(l.A, {
                                className: "w-5 h-5 text-secondary",
                              }),
                            }),
                            (0, i.jsx)("span", {
                              className:
                                "relative z-10 text-base md:text-lg font-medium tracking-tight text-secondary",
                              style: {
                                fontWeight: 500,
                                letterSpacing: "-0.04em",
                              },
                              children: "Kostenlos Arbeitgeberprofil erstellen",
                            }),
                          ],
                        }),
                        (0, i.jsx)("div", {
                          className: "relative mt-2 h-16",
                          children: (0, i.jsxs)("div", {
                            className:
                              "absolute pointer-events-none animate-cursor-stops",
                            style: { left: "50%", top: "50%" },
                            children: [
                              (0, i.jsx)("div", {
                                className:
                                  "absolute left-0 -top-6 -translate-x-1/2",
                                children: (0, i.jsx)("svg", {
                                  width: "20",
                                  height: "19",
                                  viewBox: "0 0 24 23",
                                  fill: "none",
                                  xmlns: "http://www.w3.org/2000/svg",
                                  className: "drop-shadow-lg",
                                  children: (0, i.jsx)("path", {
                                    d: "M 8.065 7.445 C 7.971 6.231 9.325 5.449 10.33 6.137 L 20.112 12.846 C 21.187 13.583 20.819 15.252 19.535 15.47 L 15.214 16.201 C 14.871 16.259 14.56 16.439 14.339 16.706 L 11.545 20.083 C 10.714 21.087 9.084 20.57 8.983 19.271 Z",
                                    fill: "rgb(0, 0, 0)",
                                    stroke: "rgb(255, 255, 255)",
                                    strokeWidth: "2",
                                    strokeMiterlimit: "10",
                                  }),
                                }),
                              }),
                              (0, i.jsx)("div", {
                                className:
                                  "absolute left-0 top-0 -translate-x-1/2 px-3 py-1 rounded-full border border-white/80 bg-secondary/90",
                                style: { fontSize: "10px" },
                                children: (0, i.jsx)("span", {
                                  className:
                                    "text-white font-medium whitespace-nowrap",
                                  children: "Jetzt klicken",
                                }),
                              }),
                            ],
                          }),
                        }),
                      ],
                    }),
                    (0, i.jsx)("p", {
                      className:
                        "text-base md:text-lg text-white/70 font-medium",
                      children:
                        "847 Unternehmen vertrauen Azubi bereits",
                    }),
                    (0, i.jsx)("p", {
                      className: "text-sm md:text-base text-white/50",
                      children:
                        "\xdcber 12.500 vorqualifizierte internationale Kandidaten warten auf Ihre Stellenanzeigen",
                    }),
                    (0, i.jsx)("div", {
                      className: "mt-6",
                      children: (0, i.jsx)(d.C, {
                        leftItems: [
                          { text: "Kein Deutsch", qualified: !0 },
                          { text: "B1 Deutsch", qualified: !0 },
                          { text: "Ungepr\xfcft", qualified: !0 },
                          { text: "Keine Erfahrung", qualified: !0 },
                          { text: "A2 Deutsch", qualified: !0 },
                          { text: "Ung\xfcltige Visa", qualified: !0 },
                          { text: "Nicht verifiziert", qualified: !0 },
                          { text: "B2 Deutsch", qualified: !0 },
                        ],
                        rightItems: [
                          { text: "B1-C1 Deutsch", qualified: !0 },
                          { text: "Verifizierte Profile", qualified: !0 },
                          { text: "Visa Support", qualified: !0 },
                          { text: "Qualit\xe4tsgepr\xfcft", qualified: !0 },
                          { text: "Kein Deutsch", qualified: !1 },
                          { text: "Ungepr\xfcft", qualified: !1 },
                          { text: "Ung\xfcltige Visa", qualified: !1 },
                          { text: "12.500+ Kandidaten", qualified: !0 },
                        ],
                      }),
                    }),
                  ],
                }),
              ],
            }),
          }),
        });
      }
    },
  },
  (e) => {
    var s = (s) => e((e.s = s));
    (e.O(0, [46593, 36209, 84121, 72076, 77358], () => s(22932)),
      (_N_E = e.O()));
  },
]);
