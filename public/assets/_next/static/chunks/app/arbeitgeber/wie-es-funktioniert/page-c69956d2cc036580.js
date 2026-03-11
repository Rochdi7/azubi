(self.webpackChunk_N_E = self.webpackChunk_N_E || []).push([
  [32531],
  {
    2458: (e, s, t) => {
      (Promise.resolve().then(t.t.bind(t, 10542, 23)),
        Promise.resolve().then(t.t.bind(t, 25459, 23)),
        Promise.resolve().then(t.bind(t, 56288)),
        Promise.resolve().then(t.bind(t, 94405)),
        Promise.resolve().then(t.bind(t, 50039)),
        Promise.resolve().then(t.bind(t, 7306)),
        Promise.resolve().then(t.bind(t, 14207)));
    },
    7306: (e, s, t) => {
      "use strict";
      t.d(s, { SuccessMetrics: () => h });
      var i = t(70207),
        n = t(45748),
        l = t(16148),
        r = t(5101),
        a = t(28131),
        d = t(23072);
      let c = [
          {
            icon: l.A,
            value: "847",
            label: "Unternehmen",
            description: "vertrauen GoAusbildung",
          },
          {
            icon: r.A,
            value: "12.500+",
            label: "Kandidaten",
            description: "vorqualifiziert & verifiziert",
          },
          {
            icon: a.A,
            value: "14 Tage",
            label: "Durchschnitt",
            description: "bis zu ersten Bewerbungen",
          },
          {
            icon: d.A,
            value: "8-12",
            label: "Bewerbungen",
            description: "pro Stellenanzeige im Schnitt",
          },
        ],
        x = {
          hidden: { opacity: 0 },
          visible: { opacity: 1, transition: { staggerChildren: 0.1 } },
        },
        m = {
          hidden: { opacity: 0, y: 20 },
          visible: { opacity: 1, y: 0, transition: { duration: 0.6 } },
        };
      function h() {
        return (0, i.jsx)("div", {
          className: "relative w-full px-4 py-16 md:py-20 bg-[#F2EAD3]",
          children: (0, i.jsxs)("div", {
            className: "max-w-7xl mx-auto",
            children: [
              (0, i.jsxs)(n.P.div, {
                initial: { opacity: 0, y: 20 },
                whileInView: { opacity: 1, y: 0 },
                viewport: { once: !0 },
                transition: { duration: 0.6 },
                className: "text-center space-y-4 mb-12",
                children: [
                  (0, i.jsx)("h2", {
                    className:
                      "text-3xl md:text-4xl lg:text-5xl font-bold text-[#344F1F]",
                    children: "GoAusbildung in Zahlen",
                  }),
                  (0, i.jsx)("p", {
                    className:
                      "text-lg md:text-xl text-[#344F1F]/70 max-w-2xl mx-auto",
                    children:
                      "Vertrauen Sie auf eine Plattform, die bereits hunderte Unternehmen erfolgreich unterst\xfctzt",
                  }),
                ],
              }),
              (0, i.jsx)(n.P.div, {
                variants: x,
                initial: "hidden",
                whileInView: "visible",
                viewport: { once: !0 },
                className:
                  "grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 md:gap-8",
                children: c.map((e, s) => {
                  let t = e.icon;
                  return (0, i.jsx)(
                    n.P.div,
                    {
                      variants: m,
                      className: "relative group",
                      children: (0, i.jsxs)("div", {
                        className:
                          "h-full p-6 md:p-8 rounded-2xl bg-white border-2 border-[#344F1F]/10 hover:border-[#F4991A]/30 transition-all duration-300 hover:shadow-lg",
                        children: [
                          (0, i.jsx)("div", {
                            className:
                              "flex items-center justify-center w-14 h-14 rounded-full bg-[#F4991A]/10 mb-6 group-hover:bg-[#F4991A]/20 transition-colors duration-300",
                            children: (0, i.jsx)(t, {
                              className: "w-7 h-7 text-[#F4991A]",
                            }),
                          }),
                          (0, i.jsx)("div", {
                            className:
                              "text-4xl md:text-5xl font-bold text-[#344F1F] mb-2",
                            children: e.value,
                          }),
                          (0, i.jsx)("div", {
                            className:
                              "text-lg md:text-xl font-semibold text-[#344F1F] mb-2",
                            children: e.label,
                          }),
                          (0, i.jsx)("div", {
                            className: "text-sm md:text-base text-[#344F1F]/60",
                            children: e.description,
                          }),
                        ],
                      }),
                    },
                    s,
                  );
                }),
              }),
              (0, i.jsx)(n.P.div, {
                initial: { opacity: 0, y: 20 },
                whileInView: { opacity: 1, y: 0 },
                viewport: { once: !0 },
                transition: { duration: 0.6, delay: 0.4 },
                className: "text-center pt-12",
                children: (0, i.jsxs)("p", {
                  className:
                    "text-base md:text-lg text-[#344F1F]/60 max-w-3xl mx-auto",
                  children: [
                    "Zahlen aktualisiert am ",
                    new Date().toLocaleDateString("de-DE", {
                      year: "numeric",
                      month: "long",
                    }),
                    " – wir wachsen kontinuierlich weiter",
                  ],
                }),
              }),
            ],
          }),
        });
      }
    },
    50039: (e, s, t) => {
      "use strict";
      t.d(s, { ProcessFAQSection: () => a });
      var i = t(70207),
        n = t(45748),
        l = t(44649);
      let r = [
        {
          question: "Wie lange dauert die Registrierung wirklich?",
          answer:
            "Die Registrierung dauert tats\xe4chlich nur 2 Minuten. Sie ben\xf6tigen lediglich Ihre E-Mail-Adresse, ein Passwort und grundlegende Unternehmensinformationen wie Name, Branche und Standort. Nach der Registrierung haben Sie sofortigen Zugang zur Plattform und k\xf6nnen mit dem Vervollst\xe4ndigen Ihres Profils beginnen.",
        },
        {
          question: "Muss ich sofort eine Stellenanzeige erstellen?",
          answer:
            "Nein, Sie k\xf6nnen sich zun\xe4chst in Ruhe auf der Plattform umsehen und sich mit den Funktionen vertraut machen. Sie haben die volle Kontrolle dar\xfcber, wann Sie Ihr Profil vervollst\xe4ndigen und wann Sie Ihre erste Stellenanzeige ver\xf6ffentlichen. Es gibt keine zeitlichen Verpflichtungen oder Fristen.",
        },
        {
          question:
            "Kann ich meine Stellenanzeige nach der Ver\xf6ffentlichung bearbeiten?",
          answer:
            "Ja, Sie k\xf6nnen Ihre Stellenanzeigen jederzeit bearbeiten, pausieren oder l\xf6schen. \xc4nderungen werden sofort \xfcbernommen und f\xfcr alle Kandidaten sichtbar. Sie haben volle Flexibilit\xe4t bei der Verwaltung Ihrer Anzeigen und k\xf6nnen auf Feedback von Bewerbern schnell reagieren.",
        },
        {
          question: "Wie werden Kandidaten vorqualifiziert?",
          answer:
            "Alle Kandidaten durchlaufen einen mehrstufigen Verifizierungsprozess: Deutschkenntnisse werden durch standardisierte Tests (Goethe-Institut oder telc) nachgewiesen und \xfcberpr\xfcft. Bildungsabschl\xfcsse werden verifiziert. Profile werden auf Vollst\xe4ndigkeit und Plausibilit\xe4t gepr\xfcft. Zus\xe4tzlich f\xfchren wir m\xfcndliche Bewertungen durch, um die angegebenen F\xe4higkeiten zu best\xe4tigen.",
        },
        {
          question: "Was passiert, nachdem ich Bewerbungen erhalte?",
          answer:
            "Sie erhalten sofort eine E-Mail-Benachrichtigung bei jeder neuen Bewerbung. In Ihrem Dashboard k\xf6nnen Sie alle Bewerbungen \xfcbersichtlich verwalten, Kandidaten nach Ihren Kriterien filtern und direkt mit Bewerbern \xfcber unsere Chat-Funktion kommunizieren. Sie k\xf6nnen Kandidaten als Favoriten markieren, Bewerbungen ablehnen oder zum Vorstellungsgespr\xe4ch einladen.",
        },
        {
          question: "Bekomme ich Unterst\xfctzung beim Visa-Prozess?",
          answer:
            "Ja, wir bieten umfassende Unterst\xfctzung: Detaillierte Checklisten und Schritt-f\xfcr-Schritt-Anleitungen f\xfcr den Visa-Prozess, Informationsmaterialien zur Aufenthaltserlaubnis f\xfcr Ausbildung, Kontakt zu Visa-Experten bei komplexen F\xe4llen und unsere Kandidaten sind bereits mit dem Prozess vertraut und wissen, welche Dokumente sie ben\xf6tigen.",
        },
        {
          question:
            "Kann ich mehrere Stellenanzeigen gleichzeitig ver\xf6ffentlichen?",
          answer:
            "Ja, Sie k\xf6nnen unbegrenzt viele Stellenanzeigen erstellen und ver\xf6ffentlichen – komplett kostenfrei. Jede Anzeige wird separat verwaltet, und Sie erhalten f\xfcr jede Stelle eigene Bewerbungen in Ihrem Dashboard. Das ist ideal f\xfcr gr\xf6\xdfere Unternehmen oder Unternehmen mit mehreren Standorten.",
        },
        {
          question: "Wie schnell kann ich mit ersten Ergebnissen rechnen?",
          answer:
            "Die meisten Arbeitgeber erhalten innerhalb der ersten 7-14 Tage nach Ver\xf6ffentlichung 8-12 qualifizierte Bewerbungen. Die Geschwindigkeit h\xe4ngt von verschiedenen Faktoren ab: Standort Ihres Unternehmens, Branche und Ausbildungsberuf, Attraktivit\xe4t Ihres Stellenangebots und Ihre Anforderungen an Sprachniveau und Qualifikationen. In beliebten Berufsfeldern wie Pflege oder IT k\xf6nnen Bewerbungen bereits innerhalb der ersten 48 Stunden eingehen.",
        },
      ];
      function a() {
        return (0, i.jsx)("div", {
          className: "relative w-full px-4 py-16 md:py-20 lg:py-24 bg-white",
          children: (0, i.jsxs)("div", {
            className: "max-w-4xl mx-auto",
            children: [
              (0, i.jsxs)(n.P.div, {
                initial: { opacity: 0, y: 20 },
                whileInView: { opacity: 1, y: 0 },
                viewport: { once: !0 },
                transition: { duration: 0.6 },
                className: "text-center space-y-4 mb-12",
                children: [
                  (0, i.jsx)("h2", {
                    className:
                      "text-3xl md:text-4xl lg:text-5xl font-bold text-[#344F1F]",
                    children: "H\xe4ufig gestellte Fragen",
                  }),
                  (0, i.jsx)("p", {
                    className:
                      "text-lg md:text-xl text-[#344F1F]/70 max-w-2xl mx-auto",
                    children:
                      "Alles, was Sie \xfcber den Prozess wissen m\xfcssen",
                  }),
                ],
              }),
              (0, i.jsx)(n.P.div, {
                initial: { opacity: 0, y: 20 },
                whileInView: { opacity: 1, y: 0 },
                viewport: { once: !0 },
                transition: { duration: 0.6, delay: 0.2 },
                children: (0, i.jsx)(l.Accordion, {
                  type: "single",
                  collapsible: !0,
                  className: "space-y-4",
                  children: r.map((e, s) =>
                    (0, i.jsxs)(
                      l.AccordionItem,
                      {
                        value: "item-".concat(s),
                        className:
                          "border-2 border-[#344F1F]/10 rounded-2xl px-6 bg-[#F9F5F0] hover:bg-[#F2EAD3] hover:border-[#F4991A]/30 transition-all duration-300",
                        children: [
                          (0, i.jsx)(l.AccordionTrigger, {
                            className:
                              "text-left font-semibold text-[#344F1F] hover:text-[#F4991A] hover:no-underline py-5 text-base md:text-lg",
                            children: e.question,
                          }),
                          (0, i.jsx)(l.AccordionContent, {
                            className:
                              "text-[#344F1F]/70 leading-relaxed pb-5 text-sm md:text-base",
                            children: e.answer,
                          }),
                        ],
                      },
                      s,
                    ),
                  ),
                }),
              }),
              (0, i.jsxs)(n.P.div, {
                initial: { opacity: 0, y: 20 },
                whileInView: { opacity: 1, y: 0 },
                viewport: { once: !0 },
                transition: { duration: 0.6, delay: 0.4 },
                className: "text-center pt-12",
                children: [
                  (0, i.jsx)("p", {
                    className: "text-base md:text-lg text-[#344F1F]/70 mb-4",
                    children: "Haben Sie weitere Fragen?",
                  }),
                  (0, i.jsx)("a", {
                    href: "/arbeitgeber/kontakt",
                    className:
                      "inline-flex items-center gap-2 px-6 py-3 rounded-full bg-white hover:bg-[#F2EAD3] transition-all duration-300 border-2 border-[#344F1F]/10 hover:border-[#F4991A]/30",
                    children: (0, i.jsx)("span", {
                      className: "text-base font-semibold text-[#344F1F]",
                      children: "Kontaktieren Sie uns",
                    }),
                  }),
                ],
              }),
            ],
          }),
        });
      }
    },
    94405: (e, s, t) => {
      "use strict";
      t.d(s, { DetailedProcess: () => F });
      var i = t(70207),
        n = t(45748),
        l = t(25147),
        r = t(16148),
        a = t(27239),
        d = t(34949),
        c = t(49769),
        x = t(28131),
        m = t(46031);
      let h = [
          {
            stepNumber: 1,
            icon: l.A,
            title: "Kostenlos registrieren",
            timeEstimate: "2 Minuten",
            description:
              "Erstellen Sie Ihr Arbeitgeberkonto in wenigen Schritten – keine Kreditkarte erforderlich.",
            features: [
              "E-Mail-Adresse und Passwort festlegen",
              "Unternehmens-Basisinformationen eingeben",
              "Sofortiger Zugang zur Plattform",
              "Keine versteckten Kosten oder Geb\xfchren",
            ],
          },
          {
            stepNumber: 2,
            icon: r.A,
            title: "Firmenprofil vervollst\xe4ndigen",
            timeEstimate: "10-15 Minuten",
            description:
              "Pr\xe4sentieren Sie Ihr Unternehmen professionell und erh\xf6hen Sie die Attraktivit\xe4t f\xfcr qualifizierte Kandidaten.",
            features: [
              "Unternehmensbeschreibung und -kultur darstellen",
              "Logo und Bilder hochladen",
              "Ausbildungsprogramme und Benefits hervorheben",
              "Kontaktinformationen und Standorte angeben",
            ],
          },
          {
            stepNumber: 3,
            icon: a.A,
            title: "Stellenanzeige erstellen",
            timeEstimate: "15-20 Minuten",
            description:
              "Verfassen Sie eine detaillierte Stellenbeschreibung mit intelligenter Unterst\xfctzung f\xfcr maximale Reichweite.",
            features: [
              "Ausbildungsberuf und Anforderungen definieren",
              "Intelligente Vorschl\xe4ge f\xfcr Stellentexte",
              "Automatische \xdcbersetzung ins Englische",
              "Sofortige Ver\xf6ffentlichung f\xfcr 12.500+ Kandidaten",
            ],
          },
          {
            stepNumber: 4,
            icon: d.A,
            title: "Bewerbungen erhalten",
            timeEstimate: "Durchschnittlich 14 Tage",
            description:
              "Erhalten Sie qualifizierte Bewerbungen direkt in Ihrem Dashboard mit intelligenter Vorsortierung.",
            features: [
              "E-Mail-Benachrichtigungen bei neuen Bewerbungen",
              "Vorqualifizierte Kandidaten nach Ihren Kriterien",
              "\xdcbersichtliche Bewerberverwaltung im Dashboard",
              "Chat-Funktion f\xfcr direkte Kommunikation",
            ],
          },
          {
            stepNumber: 5,
            icon: c.A,
            title: "Kandidaten einstellen",
            timeEstimate: "Ihre Entscheidung",
            description:
              "W\xe4hlen Sie die besten Kandidaten aus und erhalten Sie Unterst\xfctzung bei Visa und Onboarding.",
            features: [
              "Direkte Kontaktaufnahme mit Favoriten",
              "Unterst\xfctzung bei Visumsbeantragung",
              "Onboarding-Checklisten und Ressourcen",
              "Nachbetreuung w\xe4hrend der Ausbildung",
            ],
          },
        ],
        o = {
          hidden: { opacity: 0 },
          visible: { opacity: 1, transition: { staggerChildren: 0.2 } },
        },
        u = {
          hidden: { opacity: 0, y: 40 },
          visible: {
            opacity: 1,
            y: 0,
            transition: { duration: 0.6, ease: "easeOut" },
          },
        };
      function F() {
        return (0, i.jsx)("div", {
          id: "process",
          className: "relative w-full px-4 py-16 md:py-20 lg:py-24 bg-white",
          children: (0, i.jsxs)("div", {
            className: "max-w-7xl mx-auto",
            children: [
              (0, i.jsxs)(n.P.div, {
                initial: { opacity: 0, y: 20 },
                whileInView: { opacity: 1, y: 0 },
                viewport: { once: !0 },
                transition: { duration: 0.6 },
                className: "text-center space-y-4 mb-16",
                children: [
                  (0, i.jsx)("h2", {
                    className:
                      "text-3xl md:text-4xl lg:text-5xl font-bold text-[#344F1F]",
                    children: "Der komplette Prozess im Detail",
                  }),
                  (0, i.jsx)("p", {
                    className:
                      "text-lg md:text-xl text-[#344F1F]/70 max-w-3xl mx-auto",
                    children:
                      "Von der Anmeldung bis zur erfolgreichen Einstellung – transparent und unkompliziert",
                  }),
                ],
              }),
              (0, i.jsx)(n.P.div, {
                variants: o,
                initial: "hidden",
                whileInView: "visible",
                viewport: { once: !0 },
                className: "space-y-12 md:space-y-16",
                children: h.map((e, s) => {
                  let t = e.icon,
                    l = s % 2 == 0;
                  return (0, i.jsxs)(
                    n.P.div,
                    {
                      variants: u,
                      className: "relative",
                      children: [
                        (0, i.jsxs)("div", {
                          className:
                            "hidden md:grid md:grid-cols-2 md:gap-12 lg:gap-16 items-center",
                          children: [
                            (0, i.jsxs)("div", {
                              className: "space-y-6 ".concat(
                                l ? "md:order-1" : "md:order-2",
                              ),
                              children: [
                                (0, i.jsxs)("div", {
                                  className: "flex items-center gap-4",
                                  children: [
                                    (0, i.jsx)("div", {
                                      className:
                                        "flex items-center justify-center w-12 h-12 rounded-full bg-[#F4991A] text-white font-bold text-xl",
                                      children: e.stepNumber,
                                    }),
                                    (0, i.jsxs)("div", {
                                      className:
                                        "flex items-center gap-2 px-3 py-1.5 rounded-full bg-[#F2EAD3]",
                                      children: [
                                        (0, i.jsx)(x.A, {
                                          className: "w-4 h-4 text-[#344F1F]",
                                        }),
                                        (0, i.jsx)("span", {
                                          className:
                                            "text-sm font-medium text-[#344F1F]",
                                          children: e.timeEstimate,
                                        }),
                                      ],
                                    }),
                                  ],
                                }),
                                (0, i.jsxs)("div", {
                                  className: "space-y-3",
                                  children: [
                                    (0, i.jsx)("h3", {
                                      className:
                                        "text-2xl lg:text-3xl font-bold text-[#344F1F]",
                                      children: e.title,
                                    }),
                                    (0, i.jsx)("p", {
                                      className:
                                        "text-base lg:text-lg text-[#344F1F]/70",
                                      children: e.description,
                                    }),
                                  ],
                                }),
                                (0, i.jsx)("ul", {
                                  className: "space-y-3",
                                  children: e.features.map((e, s) =>
                                    (0, i.jsxs)(
                                      "li",
                                      {
                                        className: "flex items-start gap-3",
                                        children: [
                                          (0, i.jsx)(m.A, {
                                            className:
                                              "w-5 h-5 text-[#F4991A] flex-shrink-0 mt-0.5",
                                          }),
                                          (0, i.jsx)("span", {
                                            className:
                                              "text-sm lg:text-base text-[#344F1F]/80",
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
                            (0, i.jsx)("div", {
                              className: "".concat(
                                l ? "md:order-2" : "md:order-1",
                              ),
                              children: (0, i.jsx)("div", {
                                className: "relative",
                                children: (0, i.jsxs)("div", {
                                  className:
                                    "w-full max-w-[400px] mx-auto rounded-3xl bg-white border-2 border-[#344F1F]/10 p-6 shadow-lg",
                                  children: [
                                    1 === e.stepNumber &&
                                      (0, i.jsxs)("div", {
                                        className: "space-y-4",
                                        children: [
                                          (0, i.jsxs)("div", {
                                            className:
                                              "flex items-center gap-3 mb-6",
                                            children: [
                                              (0, i.jsx)(t, {
                                                className:
                                                  "w-10 h-10 text-[#F4991A]",
                                              }),
                                              (0, i.jsx)("div", {
                                                className:
                                                  "text-lg font-bold text-[#344F1F]",
                                                children: "Registrierung",
                                              }),
                                            ],
                                          }),
                                          (0, i.jsxs)("div", {
                                            className: "space-y-3",
                                            children: [
                                              (0, i.jsxs)("div", {
                                                children: [
                                                  (0, i.jsx)("div", {
                                                    className:
                                                      "text-xs font-medium text-[#344F1F]/60 mb-1",
                                                    children: "E-Mail-Adresse",
                                                  }),
                                                  (0, i.jsx)("div", {
                                                    className:
                                                      "h-10 rounded-lg bg-[#F9F5F0] border border-[#344F1F]/10 flex items-center px-3",
                                                    children: (0, i.jsx)(
                                                      "div",
                                                      {
                                                        className:
                                                          "text-sm text-[#344F1F]/40",
                                                        children:
                                                          "firma@beispiel.de",
                                                      },
                                                    ),
                                                  }),
                                                ],
                                              }),
                                              (0, i.jsxs)("div", {
                                                children: [
                                                  (0, i.jsx)("div", {
                                                    className:
                                                      "text-xs font-medium text-[#344F1F]/60 mb-1",
                                                    children: "Passwort",
                                                  }),
                                                  (0, i.jsx)("div", {
                                                    className:
                                                      "h-10 rounded-lg bg-[#F9F5F0] border border-[#344F1F]/10 flex items-center px-3",
                                                    children: (0, i.jsxs)(
                                                      "div",
                                                      {
                                                        className: "flex gap-1",
                                                        children: [
                                                          (0, i.jsx)("div", {
                                                            className:
                                                              "w-2 h-2 rounded-full bg-[#344F1F]/40",
                                                          }),
                                                          (0, i.jsx)("div", {
                                                            className:
                                                              "w-2 h-2 rounded-full bg-[#344F1F]/40",
                                                          }),
                                                          (0, i.jsx)("div", {
                                                            className:
                                                              "w-2 h-2 rounded-full bg-[#344F1F]/40",
                                                          }),
                                                          (0, i.jsx)("div", {
                                                            className:
                                                              "w-2 h-2 rounded-full bg-[#344F1F]/40",
                                                          }),
                                                        ],
                                                      },
                                                    ),
                                                  }),
                                                ],
                                              }),
                                              (0, i.jsxs)("div", {
                                                children: [
                                                  (0, i.jsx)("div", {
                                                    className:
                                                      "text-xs font-medium text-[#344F1F]/60 mb-1",
                                                    children: "Firmenname",
                                                  }),
                                                  (0, i.jsx)("div", {
                                                    className:
                                                      "h-10 rounded-lg bg-[#F9F5F0] border border-[#344F1F]/10 flex items-center px-3",
                                                    children: (0, i.jsx)(
                                                      "div",
                                                      {
                                                        className:
                                                          "text-sm text-[#344F1F]/40",
                                                        children:
                                                          "Musterfirma GmbH",
                                                      },
                                                    ),
                                                  }),
                                                ],
                                              }),
                                              (0, i.jsx)("div", {
                                                className: "pt-2",
                                                children: (0, i.jsx)("div", {
                                                  className:
                                                    "h-10 rounded-full bg-[#F4991A] flex items-center justify-center",
                                                  children: (0, i.jsx)("div", {
                                                    className:
                                                      "text-sm font-semibold text-white",
                                                    children: "Konto erstellen",
                                                  }),
                                                }),
                                              }),
                                            ],
                                          }),
                                        ],
                                      }),
                                    2 === e.stepNumber &&
                                      (0, i.jsxs)("div", {
                                        className: "space-y-4",
                                        children: [
                                          (0, i.jsxs)("div", {
                                            className:
                                              "flex items-center gap-3 mb-6",
                                            children: [
                                              (0, i.jsx)(t, {
                                                className:
                                                  "w-10 h-10 text-[#F4991A]",
                                              }),
                                              (0, i.jsx)("div", {
                                                className:
                                                  "text-lg font-bold text-[#344F1F]",
                                                children: "Firmenprofil",
                                              }),
                                            ],
                                          }),
                                          (0, i.jsxs)("div", {
                                            className: "space-y-4",
                                            children: [
                                              (0, i.jsxs)("div", {
                                                className:
                                                  "flex items-center gap-3",
                                                children: [
                                                  (0, i.jsx)("div", {
                                                    className:
                                                      "w-16 h-16 rounded-xl bg-[#F9F5F0] border border-[#344F1F]/10 flex items-center justify-center",
                                                    children: (0, i.jsx)(r.A, {
                                                      className:
                                                        "w-8 h-8 text-[#F4991A]/40",
                                                    }),
                                                  }),
                                                  (0, i.jsx)("div", {
                                                    className:
                                                      "text-xs text-[#F4991A] font-medium",
                                                    children: "Logo hochladen",
                                                  }),
                                                ],
                                              }),
                                              (0, i.jsxs)("div", {
                                                children: [
                                                  (0, i.jsx)("div", {
                                                    className:
                                                      "text-xs font-medium text-[#344F1F]/60 mb-1",
                                                    children: "\xdcber uns",
                                                  }),
                                                  (0, i.jsx)("div", {
                                                    className:
                                                      "h-20 rounded-lg bg-[#F9F5F0] border border-[#344F1F]/10 p-2",
                                                    children: (0, i.jsxs)(
                                                      "div",
                                                      {
                                                        className: "space-y-1",
                                                        children: [
                                                          (0, i.jsx)("div", {
                                                            className:
                                                              "h-1.5 w-full rounded bg-[#344F1F]/10",
                                                          }),
                                                          (0, i.jsx)("div", {
                                                            className:
                                                              "h-1.5 w-full rounded bg-[#344F1F]/10",
                                                          }),
                                                          (0, i.jsx)("div", {
                                                            className:
                                                              "h-1.5 w-3/4 rounded bg-[#344F1F]/10",
                                                          }),
                                                        ],
                                                      },
                                                    ),
                                                  }),
                                                ],
                                              }),
                                              (0, i.jsxs)("div", {
                                                className:
                                                  "grid grid-cols-2 gap-2",
                                                children: [
                                                  (0, i.jsxs)("div", {
                                                    children: [
                                                      (0, i.jsx)("div", {
                                                        className:
                                                          "text-xs font-medium text-[#344F1F]/60 mb-1",
                                                        children: "Branche",
                                                      }),
                                                      (0, i.jsx)("div", {
                                                        className:
                                                          "h-8 rounded-lg bg-[#F9F5F0] border border-[#344F1F]/10",
                                                      }),
                                                    ],
                                                  }),
                                                  (0, i.jsxs)("div", {
                                                    children: [
                                                      (0, i.jsx)("div", {
                                                        className:
                                                          "text-xs font-medium text-[#344F1F]/60 mb-1",
                                                        children: "Gr\xf6\xdfe",
                                                      }),
                                                      (0, i.jsx)("div", {
                                                        className:
                                                          "h-8 rounded-lg bg-[#F9F5F0] border border-[#344F1F]/10",
                                                      }),
                                                    ],
                                                  }),
                                                ],
                                              }),
                                            ],
                                          }),
                                        ],
                                      }),
                                    3 === e.stepNumber &&
                                      (0, i.jsxs)("div", {
                                        className: "space-y-4",
                                        children: [
                                          (0, i.jsxs)("div", {
                                            className:
                                              "flex items-center gap-3 mb-6",
                                            children: [
                                              (0, i.jsx)(t, {
                                                className:
                                                  "w-10 h-10 text-[#F4991A]",
                                              }),
                                              (0, i.jsx)("div", {
                                                className:
                                                  "text-lg font-bold text-[#344F1F]",
                                                children: "Stellenanzeige",
                                              }),
                                            ],
                                          }),
                                          (0, i.jsxs)("div", {
                                            className: "space-y-3",
                                            children: [
                                              (0, i.jsxs)("div", {
                                                children: [
                                                  (0, i.jsx)("div", {
                                                    className:
                                                      "text-xs font-medium text-[#344F1F]/60 mb-1",
                                                    children:
                                                      "Ausbildungsberuf",
                                                  }),
                                                  (0, i.jsx)("div", {
                                                    className:
                                                      "h-10 rounded-lg bg-[#F9F5F0] border border-[#344F1F]/10 flex items-center px-3",
                                                    children: (0, i.jsx)(
                                                      "div",
                                                      {
                                                        className:
                                                          "text-sm text-[#344F1F]/40",
                                                        children:
                                                          "Pflegefachmann/-frau",
                                                      },
                                                    ),
                                                  }),
                                                ],
                                              }),
                                              (0, i.jsxs)("div", {
                                                children: [
                                                  (0, i.jsx)("div", {
                                                    className:
                                                      "text-xs font-medium text-[#344F1F]/60 mb-1",
                                                    children:
                                                      "Stellenbeschreibung",
                                                  }),
                                                  (0, i.jsx)("div", {
                                                    className:
                                                      "h-24 rounded-lg bg-[#F9F5F0] border border-[#344F1F]/10 p-2",
                                                    children: (0, i.jsxs)(
                                                      "div",
                                                      {
                                                        className: "space-y-1",
                                                        children: [
                                                          (0, i.jsx)("div", {
                                                            className:
                                                              "h-1.5 w-full rounded bg-[#344F1F]/10",
                                                          }),
                                                          (0, i.jsx)("div", {
                                                            className:
                                                              "h-1.5 w-full rounded bg-[#344F1F]/10",
                                                          }),
                                                          (0, i.jsx)("div", {
                                                            className:
                                                              "h-1.5 w-full rounded bg-[#344F1F]/10",
                                                          }),
                                                          (0, i.jsx)("div", {
                                                            className:
                                                              "h-1.5 w-2/3 rounded bg-[#344F1F]/10",
                                                          }),
                                                        ],
                                                      },
                                                    ),
                                                  }),
                                                ],
                                              }),
                                              (0, i.jsxs)("div", {
                                                className:
                                                  "flex items-center gap-2 text-xs text-[#F4991A]",
                                                children: [
                                                  (0, i.jsx)("div", {
                                                    className:
                                                      "w-3 h-3 rounded bg-[#F4991A]/20 flex items-center justify-center",
                                                    children: (0, i.jsx)(
                                                      "div",
                                                      {
                                                        className: "text-[8px]",
                                                        children: "✨",
                                                      },
                                                    ),
                                                  }),
                                                  (0, i.jsx)("span", {
                                                    className: "font-medium",
                                                    children:
                                                      "Intelligente Vorschl\xe4ge verf\xfcgbar",
                                                  }),
                                                ],
                                              }),
                                              (0, i.jsx)("div", {
                                                className: "pt-2",
                                                children: (0, i.jsx)("div", {
                                                  className:
                                                    "h-10 rounded-full bg-[#F4991A] flex items-center justify-center",
                                                  children: (0, i.jsx)("div", {
                                                    className:
                                                      "text-sm font-semibold text-white",
                                                    children:
                                                      "Stelle ver\xf6ffentlichen",
                                                  }),
                                                }),
                                              }),
                                            ],
                                          }),
                                        ],
                                      }),
                                    4 === e.stepNumber &&
                                      (0, i.jsxs)("div", {
                                        className: "space-y-4",
                                        children: [
                                          (0, i.jsxs)("div", {
                                            className:
                                              "flex items-center justify-between mb-6",
                                            children: [
                                              (0, i.jsxs)("div", {
                                                className:
                                                  "flex items-center gap-3",
                                                children: [
                                                  (0, i.jsx)(t, {
                                                    className:
                                                      "w-10 h-10 text-[#F4991A]",
                                                  }),
                                                  (0, i.jsx)("div", {
                                                    className:
                                                      "text-lg font-bold text-[#344F1F]",
                                                    children: "Bewerbungen",
                                                  }),
                                                ],
                                              }),
                                              (0, i.jsx)("div", {
                                                className:
                                                  "w-6 h-6 rounded-full bg-[#F4991A] flex items-center justify-center",
                                                children: (0, i.jsx)("div", {
                                                  className:
                                                    "text-xs font-bold text-white",
                                                  children: "8",
                                                }),
                                              }),
                                            ],
                                          }),
                                          (0, i.jsx)("div", {
                                            className: "space-y-2",
                                            children: [1, 2, 3].map((e) =>
                                              (0, i.jsxs)(
                                                "div",
                                                {
                                                  className:
                                                    "flex items-center gap-3 p-3 rounded-xl bg-[#F9F5F0] border border-[#344F1F]/10",
                                                  children: [
                                                    (0, i.jsx)("div", {
                                                      className:
                                                        "w-10 h-10 rounded-full bg-[#F4991A]/20 flex items-center justify-center",
                                                      children: (0, i.jsx)(
                                                        c.A,
                                                        {
                                                          className:
                                                            "w-5 h-5 text-[#F4991A]",
                                                        },
                                                      ),
                                                    }),
                                                    (0, i.jsxs)("div", {
                                                      className:
                                                        "flex-1 space-y-1",
                                                      children: [
                                                        (0, i.jsx)("div", {
                                                          className:
                                                            "h-2 w-24 rounded bg-[#344F1F]/20",
                                                        }),
                                                        (0, i.jsx)("div", {
                                                          className:
                                                            "h-1.5 w-16 rounded bg-[#344F1F]/10",
                                                        }),
                                                      ],
                                                    }),
                                                    (0, i.jsx)("div", {
                                                      className:
                                                        "text-xs font-medium text-[#F4991A]",
                                                      children: "Neu",
                                                    }),
                                                  ],
                                                },
                                                e,
                                              ),
                                            ),
                                          }),
                                          (0, i.jsxs)("div", {
                                            className: "flex gap-2 pt-2",
                                            children: [
                                              (0, i.jsx)("div", {
                                                className:
                                                  "flex-1 h-8 rounded-full border-2 border-[#344F1F]/10 flex items-center justify-center",
                                                children: (0, i.jsx)("div", {
                                                  className:
                                                    "text-xs font-medium text-[#344F1F]",
                                                  children: "Filter",
                                                }),
                                              }),
                                              (0, i.jsx)("div", {
                                                className:
                                                  "flex-1 h-8 rounded-full bg-[#F4991A]/10 flex items-center justify-center",
                                                children: (0, i.jsx)("div", {
                                                  className:
                                                    "text-xs font-medium text-[#F4991A]",
                                                  children: "Favoriten",
                                                }),
                                              }),
                                            ],
                                          }),
                                        ],
                                      }),
                                    5 === e.stepNumber &&
                                      (0, i.jsxs)("div", {
                                        className: "space-y-4",
                                        children: [
                                          (0, i.jsxs)("div", {
                                            className:
                                              "flex items-center gap-3 mb-6",
                                            children: [
                                              (0, i.jsx)(t, {
                                                className:
                                                  "w-10 h-10 text-[#F4991A]",
                                              }),
                                              (0, i.jsx)("div", {
                                                className:
                                                  "text-lg font-bold text-[#344F1F]",
                                                children: "Kandidaten",
                                              }),
                                            ],
                                          }),
                                          (0, i.jsxs)("div", {
                                            className: "space-y-3",
                                            children: [
                                              (0, i.jsxs)("div", {
                                                className:
                                                  "p-4 rounded-xl bg-[#F9F5F0] border-2 border-[#F4991A]/30",
                                                children: [
                                                  (0, i.jsxs)("div", {
                                                    className:
                                                      "flex items-center gap-3 mb-3",
                                                    children: [
                                                      (0, i.jsx)("div", {
                                                        className:
                                                          "w-12 h-12 rounded-full bg-[#F4991A]/20 flex items-center justify-center",
                                                        children: (0, i.jsx)(
                                                          c.A,
                                                          {
                                                            className:
                                                              "w-6 h-6 text-[#F4991A]",
                                                          },
                                                        ),
                                                      }),
                                                      (0, i.jsxs)("div", {
                                                        className: "flex-1",
                                                        children: [
                                                          (0, i.jsx)("div", {
                                                            className:
                                                              "h-2 w-32 rounded bg-[#344F1F]/30 mb-1",
                                                          }),
                                                          (0, i.jsx)("div", {
                                                            className:
                                                              "h-1.5 w-20 rounded bg-[#344F1F]/20",
                                                          }),
                                                        ],
                                                      }),
                                                      (0, i.jsx)("div", {
                                                        className:
                                                          "text-xs font-bold text-[#F4991A]",
                                                        children: "★ 4.8",
                                                      }),
                                                    ],
                                                  }),
                                                  (0, i.jsxs)("div", {
                                                    className: "flex gap-2",
                                                    children: [
                                                      (0, i.jsx)("div", {
                                                        className:
                                                          "px-2 py-1 rounded-full bg-white text-xs font-medium text-[#344F1F]",
                                                        children: "B2 Deutsch",
                                                      }),
                                                      (0, i.jsx)("div", {
                                                        className:
                                                          "px-2 py-1 rounded-full bg-white text-xs font-medium text-[#344F1F]",
                                                        children: "Verifiziert",
                                                      }),
                                                    ],
                                                  }),
                                                ],
                                              }),
                                              (0, i.jsxs)("div", {
                                                className:
                                                  "grid grid-cols-2 gap-2",
                                                children: [
                                                  (0, i.jsx)("div", {
                                                    className:
                                                      "h-10 rounded-full border-2 border-[#344F1F]/10 flex items-center justify-center",
                                                    children: (0, i.jsx)(
                                                      "div",
                                                      {
                                                        className:
                                                          "text-xs font-medium text-[#344F1F]",
                                                        children: "Chat",
                                                      },
                                                    ),
                                                  }),
                                                  (0, i.jsx)("div", {
                                                    className:
                                                      "h-10 rounded-full bg-[#F4991A] flex items-center justify-center",
                                                    children: (0, i.jsx)(
                                                      "div",
                                                      {
                                                        className:
                                                          "text-xs font-semibold text-white",
                                                        children:
                                                          "Ausw\xe4hlen",
                                                      },
                                                    ),
                                                  }),
                                                ],
                                              }),
                                              (0, i.jsxs)("div", {
                                                className: "pt-2 space-y-2",
                                                children: [
                                                  (0, i.jsx)("div", {
                                                    className:
                                                      "text-xs font-medium text-[#344F1F]/60",
                                                    children:
                                                      "Visa-Unterst\xfctzung verf\xfcgbar",
                                                  }),
                                                  (0, i.jsx)("div", {
                                                    className: "flex gap-2",
                                                    children: [
                                                      "Visum",
                                                      "Wohnung",
                                                      "Onboarding",
                                                    ].map((e) =>
                                                      (0, i.jsxs)(
                                                        "div",
                                                        {
                                                          className:
                                                            "flex items-center gap-1",
                                                          children: [
                                                            (0, i.jsx)("div", {
                                                              className:
                                                                "w-3 h-3 rounded-sm bg-[#F4991A]/20 flex items-center justify-center",
                                                              children: (0,
                                                              i.jsx)("div", {
                                                                className:
                                                                  "text-[8px] text-[#F4991A]",
                                                                children: "✓",
                                                              }),
                                                            }),
                                                            (0, i.jsx)("div", {
                                                              className:
                                                                "text-[10px] text-[#344F1F]/60",
                                                              children: e,
                                                            }),
                                                          ],
                                                        },
                                                        e,
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
                              }),
                            }),
                          ],
                        }),
                        (0, i.jsxs)("div", {
                          className: "md:hidden space-y-6",
                          children: [
                            (0, i.jsxs)("div", {
                              className: "flex items-center gap-4",
                              children: [
                                (0, i.jsx)("div", {
                                  className:
                                    "flex items-center justify-center w-12 h-12 rounded-full bg-[#F4991A] text-white font-bold text-xl",
                                  children: e.stepNumber,
                                }),
                                (0, i.jsxs)("div", {
                                  className:
                                    "flex items-center gap-2 px-3 py-1.5 rounded-full bg-[#F2EAD3]",
                                  children: [
                                    (0, i.jsx)(x.A, {
                                      className: "w-4 h-4 text-[#344F1F]",
                                    }),
                                    (0, i.jsx)("span", {
                                      className:
                                        "text-sm font-medium text-[#344F1F]",
                                      children: e.timeEstimate,
                                    }),
                                  ],
                                }),
                              ],
                            }),
                            (0, i.jsxs)("div", {
                              className:
                                "w-full rounded-3xl bg-white border-2 border-[#344F1F]/10 p-4 shadow-lg",
                              children: [
                                1 === e.stepNumber &&
                                  (0, i.jsxs)("div", {
                                    className: "space-y-3",
                                    children: [
                                      (0, i.jsxs)("div", {
                                        className:
                                          "flex items-center gap-2 mb-4",
                                        children: [
                                          (0, i.jsx)(t, {
                                            className: "w-8 h-8 text-[#F4991A]",
                                          }),
                                          (0, i.jsx)("div", {
                                            className:
                                              "text-base font-bold text-[#344F1F]",
                                            children: "Registrierung",
                                          }),
                                        ],
                                      }),
                                      (0, i.jsxs)("div", {
                                        className: "space-y-2",
                                        children: [
                                          (0, i.jsxs)("div", {
                                            children: [
                                              (0, i.jsx)("div", {
                                                className:
                                                  "text-xs font-medium text-[#344F1F]/60 mb-1",
                                                children: "E-Mail-Adresse",
                                              }),
                                              (0, i.jsx)("div", {
                                                className:
                                                  "h-9 rounded-lg bg-[#F9F5F0] border border-[#344F1F]/10 flex items-center px-3",
                                                children: (0, i.jsx)("div", {
                                                  className:
                                                    "text-xs text-[#344F1F]/40",
                                                  children: "firma@beispiel.de",
                                                }),
                                              }),
                                            ],
                                          }),
                                          (0, i.jsxs)("div", {
                                            children: [
                                              (0, i.jsx)("div", {
                                                className:
                                                  "text-xs font-medium text-[#344F1F]/60 mb-1",
                                                children: "Passwort",
                                              }),
                                              (0, i.jsx)("div", {
                                                className:
                                                  "h-9 rounded-lg bg-[#F9F5F0] border border-[#344F1F]/10 flex items-center px-3",
                                                children: (0, i.jsxs)("div", {
                                                  className: "flex gap-1",
                                                  children: [
                                                    (0, i.jsx)("div", {
                                                      className:
                                                        "w-1.5 h-1.5 rounded-full bg-[#344F1F]/40",
                                                    }),
                                                    (0, i.jsx)("div", {
                                                      className:
                                                        "w-1.5 h-1.5 rounded-full bg-[#344F1F]/40",
                                                    }),
                                                    (0, i.jsx)("div", {
                                                      className:
                                                        "w-1.5 h-1.5 rounded-full bg-[#344F1F]/40",
                                                    }),
                                                  ],
                                                }),
                                              }),
                                            ],
                                          }),
                                          (0, i.jsxs)("div", {
                                            children: [
                                              (0, i.jsx)("div", {
                                                className:
                                                  "text-xs font-medium text-[#344F1F]/60 mb-1",
                                                children: "Firmenname",
                                              }),
                                              (0, i.jsx)("div", {
                                                className:
                                                  "h-9 rounded-lg bg-[#F9F5F0] border border-[#344F1F]/10 flex items-center px-3",
                                                children: (0, i.jsx)("div", {
                                                  className:
                                                    "text-xs text-[#344F1F]/40",
                                                  children: "Musterfirma GmbH",
                                                }),
                                              }),
                                            ],
                                          }),
                                          (0, i.jsx)("div", {
                                            className: "pt-1",
                                            children: (0, i.jsx)("div", {
                                              className:
                                                "h-9 rounded-full bg-[#F4991A] flex items-center justify-center",
                                              children: (0, i.jsx)("div", {
                                                className:
                                                  "text-xs font-semibold text-white",
                                                children: "Konto erstellen",
                                              }),
                                            }),
                                          }),
                                        ],
                                      }),
                                    ],
                                  }),
                                2 === e.stepNumber &&
                                  (0, i.jsxs)("div", {
                                    className: "space-y-3",
                                    children: [
                                      (0, i.jsxs)("div", {
                                        className:
                                          "flex items-center gap-2 mb-4",
                                        children: [
                                          (0, i.jsx)(t, {
                                            className: "w-8 h-8 text-[#F4991A]",
                                          }),
                                          (0, i.jsx)("div", {
                                            className:
                                              "text-base font-bold text-[#344F1F]",
                                            children: "Firmenprofil",
                                          }),
                                        ],
                                      }),
                                      (0, i.jsxs)("div", {
                                        className: "space-y-3",
                                        children: [
                                          (0, i.jsxs)("div", {
                                            className:
                                              "flex items-center gap-2",
                                            children: [
                                              (0, i.jsx)("div", {
                                                className:
                                                  "w-12 h-12 rounded-lg bg-[#F9F5F0] border border-[#344F1F]/10 flex items-center justify-center",
                                                children: (0, i.jsx)(r.A, {
                                                  className:
                                                    "w-6 h-6 text-[#F4991A]/40",
                                                }),
                                              }),
                                              (0, i.jsx)("div", {
                                                className:
                                                  "text-xs text-[#F4991A] font-medium",
                                                children: "Logo hochladen",
                                              }),
                                            ],
                                          }),
                                          (0, i.jsxs)("div", {
                                            children: [
                                              (0, i.jsx)("div", {
                                                className:
                                                  "text-xs font-medium text-[#344F1F]/60 mb-1",
                                                children: "\xdcber uns",
                                              }),
                                              (0, i.jsx)("div", {
                                                className:
                                                  "h-16 rounded-lg bg-[#F9F5F0] border border-[#344F1F]/10 p-2",
                                                children: (0, i.jsxs)("div", {
                                                  className: "space-y-1",
                                                  children: [
                                                    (0, i.jsx)("div", {
                                                      className:
                                                        "h-1 w-full rounded bg-[#344F1F]/10",
                                                    }),
                                                    (0, i.jsx)("div", {
                                                      className:
                                                        "h-1 w-full rounded bg-[#344F1F]/10",
                                                    }),
                                                    (0, i.jsx)("div", {
                                                      className:
                                                        "h-1 w-3/4 rounded bg-[#344F1F]/10",
                                                    }),
                                                  ],
                                                }),
                                              }),
                                            ],
                                          }),
                                          (0, i.jsxs)("div", {
                                            className: "grid grid-cols-2 gap-2",
                                            children: [
                                              (0, i.jsxs)("div", {
                                                children: [
                                                  (0, i.jsx)("div", {
                                                    className:
                                                      "text-xs font-medium text-[#344F1F]/60 mb-1",
                                                    children: "Branche",
                                                  }),
                                                  (0, i.jsx)("div", {
                                                    className:
                                                      "h-7 rounded-lg bg-[#F9F5F0] border border-[#344F1F]/10",
                                                  }),
                                                ],
                                              }),
                                              (0, i.jsxs)("div", {
                                                children: [
                                                  (0, i.jsx)("div", {
                                                    className:
                                                      "text-xs font-medium text-[#344F1F]/60 mb-1",
                                                    children: "Gr\xf6\xdfe",
                                                  }),
                                                  (0, i.jsx)("div", {
                                                    className:
                                                      "h-7 rounded-lg bg-[#F9F5F0] border border-[#344F1F]/10",
                                                  }),
                                                ],
                                              }),
                                            ],
                                          }),
                                        ],
                                      }),
                                    ],
                                  }),
                                3 === e.stepNumber &&
                                  (0, i.jsxs)("div", {
                                    className: "space-y-3",
                                    children: [
                                      (0, i.jsxs)("div", {
                                        className:
                                          "flex items-center gap-2 mb-4",
                                        children: [
                                          (0, i.jsx)(t, {
                                            className: "w-8 h-8 text-[#F4991A]",
                                          }),
                                          (0, i.jsx)("div", {
                                            className:
                                              "text-base font-bold text-[#344F1F]",
                                            children: "Stellenanzeige",
                                          }),
                                        ],
                                      }),
                                      (0, i.jsxs)("div", {
                                        className: "space-y-2",
                                        children: [
                                          (0, i.jsxs)("div", {
                                            children: [
                                              (0, i.jsx)("div", {
                                                className:
                                                  "text-xs font-medium text-[#344F1F]/60 mb-1",
                                                children: "Ausbildungsberuf",
                                              }),
                                              (0, i.jsx)("div", {
                                                className:
                                                  "h-9 rounded-lg bg-[#F9F5F0] border border-[#344F1F]/10 flex items-center px-3",
                                                children: (0, i.jsx)("div", {
                                                  className:
                                                    "text-xs text-[#344F1F]/40",
                                                  children:
                                                    "Pflegefachmann/-frau",
                                                }),
                                              }),
                                            ],
                                          }),
                                          (0, i.jsxs)("div", {
                                            children: [
                                              (0, i.jsx)("div", {
                                                className:
                                                  "text-xs font-medium text-[#344F1F]/60 mb-1",
                                                children: "Stellenbeschreibung",
                                              }),
                                              (0, i.jsx)("div", {
                                                className:
                                                  "h-20 rounded-lg bg-[#F9F5F0] border border-[#344F1F]/10 p-2",
                                                children: (0, i.jsxs)("div", {
                                                  className: "space-y-1",
                                                  children: [
                                                    (0, i.jsx)("div", {
                                                      className:
                                                        "h-1 w-full rounded bg-[#344F1F]/10",
                                                    }),
                                                    (0, i.jsx)("div", {
                                                      className:
                                                        "h-1 w-full rounded bg-[#344F1F]/10",
                                                    }),
                                                    (0, i.jsx)("div", {
                                                      className:
                                                        "h-1 w-full rounded bg-[#344F1F]/10",
                                                    }),
                                                    (0, i.jsx)("div", {
                                                      className:
                                                        "h-1 w-2/3 rounded bg-[#344F1F]/10",
                                                    }),
                                                  ],
                                                }),
                                              }),
                                            ],
                                          }),
                                          (0, i.jsxs)("div", {
                                            className:
                                              "flex items-center gap-1 text-xs text-[#F4991A]",
                                            children: [
                                              (0, i.jsx)("div", {
                                                className:
                                                  "w-3 h-3 rounded bg-[#F4991A]/20 flex items-center justify-center text-[8px]",
                                                children: "✨",
                                              }),
                                              (0, i.jsx)("span", {
                                                className: "font-medium",
                                                children:
                                                  "Intelligente Vorschl\xe4ge",
                                              }),
                                            ],
                                          }),
                                          (0, i.jsx)("div", {
                                            className: "pt-1",
                                            children: (0, i.jsx)("div", {
                                              className:
                                                "h-9 rounded-full bg-[#F4991A] flex items-center justify-center",
                                              children: (0, i.jsx)("div", {
                                                className:
                                                  "text-xs font-semibold text-white",
                                                children:
                                                  "Stelle ver\xf6ffentlichen",
                                              }),
                                            }),
                                          }),
                                        ],
                                      }),
                                    ],
                                  }),
                                4 === e.stepNumber &&
                                  (0, i.jsxs)("div", {
                                    className: "space-y-3",
                                    children: [
                                      (0, i.jsxs)("div", {
                                        className:
                                          "flex items-center justify-between mb-4",
                                        children: [
                                          (0, i.jsxs)("div", {
                                            className:
                                              "flex items-center gap-2",
                                            children: [
                                              (0, i.jsx)(t, {
                                                className:
                                                  "w-8 h-8 text-[#F4991A]",
                                              }),
                                              (0, i.jsx)("div", {
                                                className:
                                                  "text-base font-bold text-[#344F1F]",
                                                children: "Bewerbungen",
                                              }),
                                            ],
                                          }),
                                          (0, i.jsx)("div", {
                                            className:
                                              "w-5 h-5 rounded-full bg-[#F4991A] flex items-center justify-center",
                                            children: (0, i.jsx)("div", {
                                              className:
                                                "text-xs font-bold text-white",
                                              children: "8",
                                            }),
                                          }),
                                        ],
                                      }),
                                      (0, i.jsx)("div", {
                                        className: "space-y-2",
                                        children: [1, 2, 3].map((e) =>
                                          (0, i.jsxs)(
                                            "div",
                                            {
                                              className:
                                                "flex items-center gap-2 p-2 rounded-lg bg-[#F9F5F0] border border-[#344F1F]/10",
                                              children: [
                                                (0, i.jsx)("div", {
                                                  className:
                                                    "w-8 h-8 rounded-full bg-[#F4991A]/20 flex items-center justify-center",
                                                  children: (0, i.jsx)(c.A, {
                                                    className:
                                                      "w-4 h-4 text-[#F4991A]",
                                                  }),
                                                }),
                                                (0, i.jsxs)("div", {
                                                  className: "flex-1 space-y-1",
                                                  children: [
                                                    (0, i.jsx)("div", {
                                                      className:
                                                        "h-1.5 w-20 rounded bg-[#344F1F]/20",
                                                    }),
                                                    (0, i.jsx)("div", {
                                                      className:
                                                        "h-1 w-14 rounded bg-[#344F1F]/10",
                                                    }),
                                                  ],
                                                }),
                                                (0, i.jsx)("div", {
                                                  className:
                                                    "text-[10px] font-medium text-[#F4991A]",
                                                  children: "Neu",
                                                }),
                                              ],
                                            },
                                            e,
                                          ),
                                        ),
                                      }),
                                      (0, i.jsxs)("div", {
                                        className: "flex gap-2 pt-1",
                                        children: [
                                          (0, i.jsx)("div", {
                                            className:
                                              "flex-1 h-7 rounded-full border-2 border-[#344F1F]/10 flex items-center justify-center",
                                            children: (0, i.jsx)("div", {
                                              className:
                                                "text-xs font-medium text-[#344F1F]",
                                              children: "Filter",
                                            }),
                                          }),
                                          (0, i.jsx)("div", {
                                            className:
                                              "flex-1 h-7 rounded-full bg-[#F4991A]/10 flex items-center justify-center",
                                            children: (0, i.jsx)("div", {
                                              className:
                                                "text-xs font-medium text-[#F4991A]",
                                              children: "Favoriten",
                                            }),
                                          }),
                                        ],
                                      }),
                                    ],
                                  }),
                                5 === e.stepNumber &&
                                  (0, i.jsxs)("div", {
                                    className: "space-y-3",
                                    children: [
                                      (0, i.jsxs)("div", {
                                        className:
                                          "flex items-center gap-2 mb-4",
                                        children: [
                                          (0, i.jsx)(t, {
                                            className: "w-8 h-8 text-[#F4991A]",
                                          }),
                                          (0, i.jsx)("div", {
                                            className:
                                              "text-base font-bold text-[#344F1F]",
                                            children: "Kandidaten",
                                          }),
                                        ],
                                      }),
                                      (0, i.jsxs)("div", {
                                        className: "space-y-2",
                                        children: [
                                          (0, i.jsxs)("div", {
                                            className:
                                              "p-3 rounded-lg bg-[#F9F5F0] border-2 border-[#F4991A]/30",
                                            children: [
                                              (0, i.jsxs)("div", {
                                                className:
                                                  "flex items-center gap-2 mb-2",
                                                children: [
                                                  (0, i.jsx)("div", {
                                                    className:
                                                      "w-10 h-10 rounded-full bg-[#F4991A]/20 flex items-center justify-center",
                                                    children: (0, i.jsx)(c.A, {
                                                      className:
                                                        "w-5 h-5 text-[#F4991A]",
                                                    }),
                                                  }),
                                                  (0, i.jsxs)("div", {
                                                    className: "flex-1",
                                                    children: [
                                                      (0, i.jsx)("div", {
                                                        className:
                                                          "h-1.5 w-24 rounded bg-[#344F1F]/30 mb-1",
                                                      }),
                                                      (0, i.jsx)("div", {
                                                        className:
                                                          "h-1 w-16 rounded bg-[#344F1F]/20",
                                                      }),
                                                    ],
                                                  }),
                                                  (0, i.jsx)("div", {
                                                    className:
                                                      "text-xs font-bold text-[#F4991A]",
                                                    children: "★ 4.8",
                                                  }),
                                                ],
                                              }),
                                              (0, i.jsxs)("div", {
                                                className: "flex gap-1",
                                                children: [
                                                  (0, i.jsx)("div", {
                                                    className:
                                                      "px-2 py-0.5 rounded-full bg-white text-[10px] font-medium text-[#344F1F]",
                                                    children: "B2 Deutsch",
                                                  }),
                                                  (0, i.jsx)("div", {
                                                    className:
                                                      "px-2 py-0.5 rounded-full bg-white text-[10px] font-medium text-[#344F1F]",
                                                    children: "Verifiziert",
                                                  }),
                                                ],
                                              }),
                                            ],
                                          }),
                                          (0, i.jsxs)("div", {
                                            className: "grid grid-cols-2 gap-2",
                                            children: [
                                              (0, i.jsx)("div", {
                                                className:
                                                  "h-9 rounded-full border-2 border-[#344F1F]/10 flex items-center justify-center",
                                                children: (0, i.jsx)("div", {
                                                  className:
                                                    "text-xs font-medium text-[#344F1F]",
                                                  children: "Chat",
                                                }),
                                              }),
                                              (0, i.jsx)("div", {
                                                className:
                                                  "h-9 rounded-full bg-[#F4991A] flex items-center justify-center",
                                                children: (0, i.jsx)("div", {
                                                  className:
                                                    "text-xs font-semibold text-white",
                                                  children: "Ausw\xe4hlen",
                                                }),
                                              }),
                                            ],
                                          }),
                                          (0, i.jsxs)("div", {
                                            className: "pt-1 space-y-1",
                                            children: [
                                              (0, i.jsx)("div", {
                                                className:
                                                  "text-xs font-medium text-[#344F1F]/60",
                                                children:
                                                  "Visa-Unterst\xfctzung",
                                              }),
                                              (0, i.jsx)("div", {
                                                className:
                                                  "flex gap-2 flex-wrap",
                                                children: [
                                                  "Visum",
                                                  "Wohnung",
                                                  "Onboarding",
                                                ].map((e) =>
                                                  (0, i.jsxs)(
                                                    "div",
                                                    {
                                                      className:
                                                        "flex items-center gap-1",
                                                      children: [
                                                        (0, i.jsx)("div", {
                                                          className:
                                                            "w-2.5 h-2.5 rounded-sm bg-[#F4991A]/20 flex items-center justify-center text-[8px] text-[#F4991A]",
                                                          children: "✓",
                                                        }),
                                                        (0, i.jsx)("div", {
                                                          className:
                                                            "text-[10px] text-[#344F1F]/60",
                                                          children: e,
                                                        }),
                                                      ],
                                                    },
                                                    e,
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
                            (0, i.jsxs)("div", {
                              className: "space-y-3",
                              children: [
                                (0, i.jsx)("h3", {
                                  className: "text-xl font-bold text-[#344F1F]",
                                  children: e.title,
                                }),
                                (0, i.jsx)("p", {
                                  className: "text-base text-[#344F1F]/70",
                                  children: e.description,
                                }),
                              ],
                            }),
                            (0, i.jsx)("ul", {
                              className: "space-y-3",
                              children: e.features.map((e, s) =>
                                (0, i.jsxs)(
                                  "li",
                                  {
                                    className: "flex items-start gap-3",
                                    children: [
                                      (0, i.jsx)(m.A, {
                                        className:
                                          "w-5 h-5 text-[#F4991A] flex-shrink-0 mt-0.5",
                                      }),
                                      (0, i.jsx)("span", {
                                        className: "text-sm text-[#344F1F]/80",
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
                        s < h.length - 1 &&
                          (0, i.jsx)("div", {
                            className:
                              "hidden md:block absolute left-1/2 -translate-x-1/2 w-0.5 h-16 bg-[#F4991A]/20 top-full mt-8",
                          }),
                      ],
                    },
                    e.stepNumber,
                  );
                }),
              }),
              (0, i.jsxs)(n.P.div, {
                initial: { opacity: 0, y: 20 },
                whileInView: { opacity: 1, y: 0 },
                viewport: { once: !0 },
                transition: { duration: 0.6, delay: 0.3 },
                className: "text-center pt-16",
                children: [
                  (0, i.jsx)("p", {
                    className: "text-lg md:text-xl text-[#344F1F]/70 mb-6",
                    children: "Bereit, loszulegen?",
                  }),
                  (0, i.jsxs)("a", {
                    href: "/arbeitgeber/auth/anmeldung",
                    className:
                      "inline-flex items-center gap-3 px-8 py-4 rounded-full bg-[#F4991A] hover:bg-[#e08915] transition-all duration-300 shadow-lg hover:shadow-xl",
                    children: [
                      (0, i.jsx)(l.A, { className: "w-5 h-5 text-white" }),
                      (0, i.jsx)("span", {
                        className:
                          "text-base md:text-lg font-semibold text-white",
                        children: "Jetzt kostenlos starten",
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
  },
  (e) => {
    var s = (s) => e((e.s = s));
    (e.O(0, [46593, 36209, 84121, 72076, 77358], () => s(2458)),
      (_N_E = e.O()));
  },
]);
