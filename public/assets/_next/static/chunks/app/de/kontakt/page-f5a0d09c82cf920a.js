(self.webpackChunk_N_E = self.webpackChunk_N_E || []).push([
  [8375],
  {
    1016: (e, r, s) => {
      "use strict";
      s.d(r, { ContactFaqDe: () => g });
      var n = s(70207),
        t = s(87223),
        a = s(45748),
        i = s(54459),
        l = s(95034),
        c = s(52141),
        o = s(35121),
        d = s(47161),
        m = s(51613),
        u = s(82110);
      let h = [
        {
          question: "Wie beginne ich den Ausbildungsbewerbungsprozess?",
          answer:
            "Der Ausbildungsbewerbungsprozess beginnt mit der Suche nach geeigneten Ausbildungsunternehmen und -programmen. Wir helfen bei der Identifizierung von M\xf6glichkeiten, der Vorbereitung Ihrer Bewerbungsunterlagen und begleiten Sie durch den Bewerbungs- und Vorstellungsgespr\xe4chsprozess. Vereinbaren Sie eine Beratung mit uns, um mehr \xfcber Ihren spezifischen Weg zu erfahren.",
        },
        {
          question:
            "Welche Kosten entstehen bei einer Ausbildung in Deutschland?",
          answer:
            "Die Hauptkosten umfassen Visabeantragungsgeb\xfchren (etwa 75€), Krankenversicherung (circa 110€/Monat) und anf\xe4ngliche Unterkunftskosten. Im Gegensatz zu Universit\xe4tsstudenten ben\xf6tigen Auszubildende kein Sperrkonto, da Sie eine monatliche Verg\xfctung von 850-1300€ von Ihrem Ausbildungsunternehmen erhalten, die zur Deckung der Lebenshaltungskosten beitr\xe4gt.",
        },
        {
          question: "Muss ich Deutsch k\xf6nnen, bevor ich mich bewerbe?",
          answer:
            "Ja, die meisten Ausbildungsprogramme erfordern mindestens B1-Deutschkenntnisse. Einige spezialisierte Bereiche k\xf6nnen B2 erfordern. Wir k\xf6nnen Ihnen helfen, Sie mit Deutschkursen zu verbinden, um das erforderliche Niveau vor Ihrer Bewerbung zu erreichen.",
        },
        {
          question: "Wie lange dauert ein typisches Ausbildungsprogramm?",
          answer:
            "Ausbildungsprogramme dauern in der Regel 2-4 Jahre, abh\xe4ngig vom Beruf und Ihren Vorerfahrungen. Die meisten Programme dauern 3 Jahre, k\xf6nnen aber von 2 Jahren f\xfcr einfachere Berufe bis zu 4 Jahren f\xfcr spezialisierte technische Bereiche reichen. Einige Programme bieten Fast-Track-Optionen f\xfcr Kandidaten mit relevanter Erfahrung oder h\xf6herer Bildung.",
        },
        {
          question: "Kann ich w\xe4hrend der Ausbildung arbeiten?",
          answer:
            "Die Ausbildung ist ein duales Ausbildungsprogramm, bei dem Sie gleichzeitig arbeiten und lernen. Sie erhalten eine Verg\xfctung von Ihrem Ausbildungsunternehmen. Zus\xe4tzliche Teilzeitarbeit ist m\xf6glich, aber begrenzt, um sicherzustellen, dass Sie sich auf Ihre Ausbildung konzentrieren k\xf6nnen.",
        },
        {
          question: "Was passiert nach Abschluss der Ausbildung?",
          answer:
            "Nach erfolgreichem Abschluss Ihrer Ausbildung erhalten Sie ein staatlich anerkanntes Qualifikationszertifikat. Die meisten Studenten erhalten Festanstellungen von ihren Ausbildungsunternehmen. Ihre Aufenthaltserlaubnis kann bei Bedarf zur Jobsuche verl\xe4ngert und sp\xe4ter in eine Arbeitserlaubnis umgewandelt werden.",
        },
      ];
      function g() {
        let [e, r] = (0, t.useState)(Array(h.length).fill(!1)),
          s = (e) => {
            r((r) => {
              let s = [...r];
              return ((s[e] = !s[e]), s);
            });
          };
        return (0, n.jsxs)(l.m, {
          size: "lg",
          className: "py-16 md:py-24",
          children: [
            (0, n.jsxs)("div", {
              className: "text-center mb-12",
              children: [
                (0, n.jsx)(c.D, {
                  level: 2,
                  className: "mb-4",
                  children: "H\xe4ufig gestellte Fragen",
                }),
                (0, n.jsx)(o.f, {
                  className: "text-muted-foreground max-w-2xl mx-auto",
                  children:
                    "Finden Sie Antworten auf h\xe4ufige Fragen zur Ausbildung in Deutschland. Falls Sie nicht finden, wonach Sie suchen, z\xf6gern Sie nicht, uns zu kontaktieren.",
                }),
              ],
            }),
            (0, n.jsx)("div", {
              className: "grid md:grid-cols-2 gap-6 md:gap-10",
              children: h.map((r, t) =>
                (0, n.jsx)(
                  "div",
                  {
                    className: "flex flex-col",
                    children: (0, n.jsxs)(a.P.div, {
                      initial: { opacity: 0, y: 20 },
                      animate: { opacity: 1, y: 0 },
                      transition: { delay: 0.1 * t },
                      className: "border rounded-2xl overflow-hidden bg-card",
                      children: [
                        (0, n.jsxs)("button", {
                          onClick: () => s(t),
                          className: (0, u.cn)(
                            "w-full flex items-center justify-between p-5 text-left font-medium transition-all",
                            e[t] ? "border-b" : "",
                          ),
                          "aria-expanded": e[t],
                          "aria-controls": "faq-content-".concat(t),
                          children: [
                            (0, n.jsxs)("span", {
                              className: "flex items-start",
                              children: [
                                (0, n.jsx)(d.A, {
                                  className:
                                    "h-5 w-5 text-primary mr-3 mt-0.5 shrink-0",
                                }),
                                (0, n.jsx)("span", {
                                  className: "text-secondary",
                                  children: r.question,
                                }),
                              ],
                            }),
                            (0, n.jsx)(m.A, {
                              className: (0, u.cn)(
                                "h-5 w-5 text-muted-foreground transition-transform duration-200",
                                e[t] ? "rotate-180" : "",
                              ),
                            }),
                          ],
                        }),
                        (0, n.jsx)(i.N, {
                          children:
                            e[t] &&
                            (0, n.jsx)(a.P.div, {
                              id: "faq-content-".concat(t),
                              initial: { height: 0, opacity: 0 },
                              animate: { height: "auto", opacity: 1 },
                              exit: { height: 0, opacity: 0 },
                              transition: { duration: 0.3 },
                              className: "overflow-hidden",
                              children: (0, n.jsx)(o.f, {
                                size: "sm",
                                className: "p-5 pt-3 text-muted-foreground",
                                children: r.answer,
                              }),
                            }),
                        }),
                      ],
                    }),
                  },
                  t,
                ),
              ),
            }),
            (0, n.jsxs)("div", {
              className: "mt-12 text-center",
              children: [
                (0, n.jsx)(o.f, {
                  className: "text-muted-foreground mb-6",
                  children:
                    "Haben Sie noch Fragen? Wir sind hier, um Ihnen bei jedem Schritt Ihrer Reise zu helfen.",
                }),
                (0, n.jsxs)("div", {
                  className:
                    "inline-flex items-center justify-center px-5 py-2.5 rounded-full bg-muted text-secondary font-medium",
                  children: [
                    (0, n.jsx)("svg", {
                      xmlns: "http://www.w3.org/2000/svg",
                      className: "h-5 w-5 mr-2",
                      fill: "none",
                      viewBox: "0 0 24 24",
                      stroke: "currentColor",
                      children: (0, n.jsx)("path", {
                        strokeLinecap: "round",
                        strokeLinejoin: "round",
                        strokeWidth: 2,
                        d: "M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z",
                      }),
                    }),
                    "Schreiben Sie uns an\xa0",
                    (0, n.jsx)("a", {
                      href: "mailto:hello@azubi.ma",
                      className: "text-primary hover:underline",
                      children: "hello@azubi.ma",
                    }),
                  ],
                }),
              ],
            }),
          ],
        });
      }
    },
    11666: (e, r, s) => {
      "use strict";
      s.d(r, { ContactFormDe: () => A });
      var n = s(70207),
        t = s(87223),
        a = s(45748),
        i = s(95034),
        l = s(80187),
        c = s(40167),
        o = s(87277),
        d = s(39441),
        m = s(61607),
        u = s(52141),
        h = s(35121),
        g = s(70005),
        f = s(95992),
        b = s(31159),
        x = s(46031),
        j = s(50488),
        p = s(54539),
        N = s(6929),
        v = s(44280),
        S = s(93501),
        w = s(82110),
        k = s(49211),
        y = s(64920);
      let _ = p.Ik({
          firstName: p.Yj().min(2, { message: "Vorname ist erforderlich" }),
          lastName: p.Yj().min(2, { message: "Nachname ist erforderlich" }),
          email: p.Yj().email({ message: "Ung\xfcltige E-Mail-Adresse" }),
          phone: p
            .Yj()
            .min(10, {
              message: "Bitte geben Sie eine g\xfcltige Telefonnummer ein",
            }),
          countryCode: p
            .Yj()
            .min(1, { message: "L\xe4ndercode ist erforderlich" }),
          subject: p
            .Yj()
            .min(1, { message: "Bitte w\xe4hlen Sie einen Betreff aus" }),
          message: p
            .Yj()
            .min(10, {
              message: "Nachricht muss mindestens 10 Zeichen lang sein",
            }),
          website: p
            .Yj()
            .refine((e) => "" === e, {
              message: "Dieses Feld sollte leer bleiben",
            }),
        }),
        R = () => {
          try {
            let e = JSON.parse(
                localStorage.getItem("contactFormSubmissions") || "[]",
              ),
              r = Date.now(),
              s = e.filter((e) => r - e < 864e5);
            if (s.length >= 3) return { canSubmit: !1 };
            let n = s[s.length - 1];
            if (n && r - n < 6e4)
              return {
                canSubmit: !1,
                timeRemaining: Math.ceil((6e4 - (r - n)) / 1e3),
              };
            return { canSubmit: !0 };
          } catch (e) {
            return { canSubmit: !0 };
          }
        },
        z = () => {
          try {
            let e = JSON.parse(
              localStorage.getItem("contactFormSubmissions") || "[]",
            );
            (e.push(Date.now()),
              localStorage.setItem(
                "contactFormSubmissions",
                JSON.stringify(e),
              ));
          } catch (e) {
            console.error("Could not record form submission:", e);
          }
        };
      function A() {
        let [e, r] = (0, t.useState)(!1),
          [s, p] = (0, t.useState)(!1),
          [A, F] = (0, t.useState)(null),
          [I, C] = (0, t.useState)(null);
        (0, t.useEffect)(() => {
          (0, k.f0)(k.wf.FORM_START, k.XC.FORM, {
            form_name: "contact_form_de",
          });
        }, []);
        let O = (0, N.mN)({
            resolver: (0, v.u)(_),
            defaultValues: {
              firstName: "",
              lastName: "",
              email: "",
              phone: "",
              countryCode: "",
              subject: "",
              message: "",
              website: "",
            },
          }),
          B = async (e) => {
            F(null);
            let { canSubmit: s, timeRemaining: n } = R();
            if (!s) {
              n
                ? (F(
                    "Bitte warten Sie ".concat(
                      n,
                      " Sekunden bevor Sie erneut absenden.",
                    ),
                  ),
                  (0, k.f0)(k.wf.FORM_ERROR, k.XC.ERROR, {
                    form_name: "contact_form_de",
                    error_type: "rate_limit",
                    error_message: "Rate limit exceeded. Wait ".concat(n, "s"),
                  }))
                : (F(
                    "Sie haben die maximale Anzahl an Einsendungen erreicht. Bitte versuchen Sie es sp\xe4ter erneut.",
                  ),
                  (0, k.f0)(k.wf.FORM_ERROR, k.XC.ERROR, {
                    form_name: "contact_form_de",
                    error_type: "max_submissions",
                    error_message: "Maximum submissions reached",
                  }));
              return;
            }
            if ("" !== e.website) {
              setTimeout(() => {
                p(!0);
              }, 1e3);
              return;
            }
            (r(!0),
              (0, k.f0)(k.wf.FORM_SUBMIT, k.XC.FORM, {
                form_name: "contact_form_de",
                subject: e.subject,
              }));
            try {
              let r = await fetch("/api/slack", {
                  method: "POST",
                  headers: { "Content-Type": "application/json" },
                  body: JSON.stringify({
                    contactData: {
                      firstName: e.firstName,
                      lastName: e.lastName,
                      email: e.email,
                      phone: e.phone,
                      countryCode: e.countryCode,
                    },
                    messageDetails: { subject: e.subject, message: e.message },
                    source: "Contact Form (German)",
                  }),
                }),
                s = await r.json();
              r.ok
                ? (z(),
                  p(!0),
                  (0, j.oR)({
                    title: "Nachricht gesendet",
                    description:
                      "Wir haben Ihre Nachricht erhalten und werden uns bald bei Ihnen melden.",
                    variant: "default",
                  }),
                  (0, k.f0)(k.wf.FORM_COMPLETE, k.XC.CONVERSION, {
                    form_name: "contact_form_de",
                    subject: e.subject,
                  }))
                : (console.error("Error sending message:", s.error),
                  F(
                    s.error ||
                      "Wir konnten Ihre Nachricht nicht senden. Bitte versuchen Sie es erneut.",
                  ),
                  (0, j.oR)({
                    title: "Etwas ist schief gelaufen",
                    description:
                      "Wir konnten Ihre Nachricht nicht senden. Bitte versuchen Sie es erneut.",
                    variant: "destructive",
                  }),
                  (0, k.f0)(k.wf.FORM_ERROR, k.XC.ERROR, {
                    form_name: "contact_form_de",
                    error_type: "api_error",
                    error_message: s.error || "API error",
                  }));
            } catch (e) {
              (console.error("Error sending message:", e),
                F(
                  "Netzwerkfehler. Bitte pr\xfcfen Sie Ihre Verbindung und versuchen Sie es erneut.",
                ),
                (0, j.oR)({
                  title: "Verbindungsfehler",
                  description:
                    "Wir konnten unsere Server nicht erreichen. Bitte pr\xfcfen Sie Ihre Verbindung und versuchen Sie es erneut.",
                  variant: "destructive",
                }),
                (0, k.f0)(k.wf.FORM_ERROR, k.XC.ERROR, {
                  form_name: "contact_form_de",
                  error_type: "network_error",
                  error_message: "Network connection failed",
                }));
            } finally {
              r(!1);
            }
          };
        return (0, n.jsxs)(i.m, {
          size: "sm",
          className: "pb-24",
          children: [
            (0, n.jsx)(l.Zp, {
              className:
                "mx-auto max-w-3xl overflow-hidden bg-card shadow-lg border-0 dark:border dark:border-border",
              children: (0, n.jsx)(l.Wu, {
                className: "p-0",
                children: s
                  ? (0, n.jsxs)("div", {
                      className:
                        "flex flex-col items-center justify-center p-8 text-center h-[500px]",
                      children: [
                        (0, n.jsx)(a.P.div, {
                          initial: { scale: 0 },
                          animate: { scale: 1 },
                          transition: { duration: 0.3, type: "spring" },
                          children: (0, n.jsx)("div", {
                            className:
                              "w-20 h-20 rounded-full bg-secondary flex items-center justify-center mb-6",
                            children: (0, n.jsx)(g.A, {
                              className: "h-10 w-10 text-background",
                            }),
                          }),
                        }),
                        (0, n.jsx)(u.D, {
                          level: 3,
                          className: "mb-2",
                          children: "Nachricht gesendet!",
                        }),
                        (0, n.jsx)(h.f, {
                          className: "text-muted-foreground mb-8 max-w-md",
                          children:
                            "Vielen Dank f\xfcr Ihre Nachricht. Wir haben sie erhalten und werden uns innerhalb von 24 Stunden bei Ihnen melden.",
                        }),
                        (0, n.jsx)(d.$, {
                          variant: "outline",
                          className: "rounded-full",
                          onClick: () => {
                            (p(!1), C(null), O.reset());
                          },
                          children: "Weitere Nachricht senden",
                        }),
                      ],
                    })
                  : (0, n.jsxs)("form", {
                      onSubmit: O.handleSubmit(B),
                      className: "space-y-6 p-6 sm:p-8",
                      children: [
                        (0, n.jsxs)("div", {
                          className: "space-y-1 mb-6",
                          children: [
                            (0, n.jsx)(u.D, {
                              level: 2,
                              children: "Kontakt aufnehmen",
                            }),
                            (0, n.jsx)(h.f, {
                              className: "text-muted-foreground",
                              children:
                                "F\xfcllen Sie das untenstehende Formular aus und wir werden uns so schnell wie m\xf6glich bei Ihnen melden.",
                            }),
                          ],
                        }),
                        A &&
                          (0, n.jsxs)("div", {
                            className:
                              "bg-destructive/10 p-3 rounded-md flex items-start gap-2",
                            children: [
                              (0, n.jsx)(f.A, {
                                className:
                                  "h-5 w-5 text-destructive shrink-0 mt-0.5",
                              }),
                              (0, n.jsx)("div", {
                                className: "text-sm text-destructive",
                                children: A,
                              }),
                            ],
                          }),
                        (0, n.jsxs)("div", {
                          className: "grid gap-6 sm:grid-cols-2",
                          children: [
                            (0, n.jsxs)("div", {
                              className: "space-y-2",
                              children: [
                                (0, n.jsx)(o.J, {
                                  htmlFor: "firstName",
                                  className: (0, w.cn)(
                                    O.formState.errors.firstName &&
                                      "text-destructive",
                                  ),
                                  children: "Vorname",
                                }),
                                (0, n.jsx)(c.p, {
                                  id: "firstName",
                                  ...O.register("firstName"),
                                  className: (0, w.cn)(
                                    O.formState.errors.firstName &&
                                      "border-destructive",
                                  ),
                                }),
                                O.formState.errors.firstName &&
                                  (0, n.jsx)("p", {
                                    className: "text-xs text-destructive mt-1",
                                    children:
                                      O.formState.errors.firstName.message,
                                  }),
                              ],
                            }),
                            (0, n.jsxs)("div", {
                              className: "space-y-2",
                              children: [
                                (0, n.jsx)(o.J, {
                                  htmlFor: "lastName",
                                  className: (0, w.cn)(
                                    O.formState.errors.lastName &&
                                      "text-destructive",
                                  ),
                                  children: "Nachname",
                                }),
                                (0, n.jsx)(c.p, {
                                  id: "lastName",
                                  ...O.register("lastName"),
                                  className: (0, w.cn)(
                                    O.formState.errors.lastName &&
                                      "border-destructive",
                                  ),
                                }),
                                O.formState.errors.lastName &&
                                  (0, n.jsx)("p", {
                                    className: "text-xs text-destructive mt-1",
                                    children:
                                      O.formState.errors.lastName.message,
                                  }),
                              ],
                            }),
                          ],
                        }),
                        (0, n.jsxs)("div", {
                          className: "grid gap-6 sm:grid-cols-2",
                          children: [
                            (0, n.jsxs)("div", {
                              className: "space-y-2",
                              children: [
                                (0, n.jsx)(o.J, {
                                  htmlFor: "email",
                                  className: (0, w.cn)(
                                    O.formState.errors.email &&
                                      "text-destructive",
                                  ),
                                  children: "E-Mail",
                                }),
                                (0, n.jsx)(c.p, {
                                  id: "email",
                                  type: "email",
                                  ...O.register("email"),
                                  className: (0, w.cn)(
                                    O.formState.errors.email &&
                                      "border-destructive",
                                  ),
                                }),
                                O.formState.errors.email &&
                                  (0, n.jsx)("p", {
                                    className: "text-xs text-destructive mt-1",
                                    children: O.formState.errors.email.message,
                                  }),
                              ],
                            }),
                            (0, n.jsxs)("div", {
                              className: "space-y-2",
                              children: [
                                (0, n.jsx)(o.J, {
                                  htmlFor: "phone",
                                  className: (0, w.cn)(
                                    O.formState.errors.phone &&
                                      "text-destructive",
                                  ),
                                  children: "Telefonnummer",
                                }),
                                (0, n.jsx)(y.L, {
                                  value: O.watch("phone"),
                                  onChange: (e) => O.setValue("phone", e),
                                  onCountryChange: (e) => {
                                    (C(e),
                                      O.setValue("countryCode", e.phoneCode));
                                  },
                                  defaultCountry: "IN",
                                  error: !!O.formState.errors.phone,
                                  className: (0, w.cn)(
                                    O.formState.errors.phone &&
                                      "border-destructive",
                                  ),
                                }),
                                O.formState.errors.phone &&
                                  (0, n.jsx)("p", {
                                    className: "text-xs text-destructive mt-1",
                                    children: O.formState.errors.phone.message,
                                  }),
                              ],
                            }),
                          ],
                        }),
                        (0, n.jsxs)("div", {
                          className: "space-y-2",
                          children: [
                            (0, n.jsx)(o.J, {
                              htmlFor: "subject",
                              className: (0, w.cn)(
                                O.formState.errors.subject &&
                                  "text-destructive",
                              ),
                              children: "Betreff",
                            }),
                            (0, n.jsxs)(S.l6, {
                              onValueChange: (e) => O.setValue("subject", e),
                              defaultValue: O.getValues("subject"),
                              children: [
                                (0, n.jsx)(S.bq, {
                                  id: "subject",
                                  className: (0, w.cn)(
                                    O.formState.errors.subject &&
                                      "border-destructive",
                                  ),
                                  children: (0, n.jsx)(S.yv, {
                                    placeholder: "Betreff ausw\xe4hlen",
                                  }),
                                }),
                                (0, n.jsxs)(S.gC, {
                                  children: [
                                    (0, n.jsx)(S.eb, {
                                      value: "general",
                                      children: "Allgemeine Anfrage",
                                    }),
                                    (0, n.jsx)(S.eb, {
                                      value: "ausbildung",
                                      children: "Ausbildungsberatung",
                                    }),
                                    (0, n.jsx)(S.eb, {
                                      value: "application",
                                      children: "Bewerbungsprozess",
                                    }),
                                    (0, n.jsx)(S.eb, {
                                      value: "visa",
                                      children: "Visa & Dokumentation",
                                    }),
                                    (0, n.jsx)(S.eb, {
                                      value: "language",
                                      children: "Sprachanforderungen",
                                    }),
                                    (0, n.jsx)(S.eb, {
                                      value: "fees",
                                      children: "Geb\xfchren & Kosten",
                                    }),
                                  ],
                                }),
                              ],
                            }),
                            O.formState.errors.subject &&
                              (0, n.jsx)("p", {
                                className: "text-xs text-destructive mt-1",
                                children: O.formState.errors.subject.message,
                              }),
                          ],
                        }),
                        (0, n.jsxs)("div", {
                          className: "space-y-2",
                          children: [
                            (0, n.jsx)(o.J, {
                              htmlFor: "message",
                              className: (0, w.cn)(
                                O.formState.errors.message &&
                                  "text-destructive",
                              ),
                              children: "Nachricht",
                            }),
                            (0, n.jsx)(m.T, {
                              id: "message",
                              rows: 4,
                              ...O.register("message"),
                              className: (0, w.cn)(
                                O.formState.errors.message &&
                                  "border-destructive",
                              ),
                            }),
                            O.formState.errors.message &&
                              (0, n.jsx)("p", {
                                className: "text-xs text-destructive mt-1",
                                children: O.formState.errors.message.message,
                              }),
                          ],
                        }),
                        (0, n.jsxs)("div", {
                          className: "hidden",
                          "aria-hidden": "true",
                          children: [
                            (0, n.jsx)(o.J, {
                              htmlFor: "website",
                              children: "Website",
                            }),
                            (0, n.jsx)(c.p, {
                              id: "website",
                              type: "text",
                              tabIndex: -1,
                              autoComplete: "off",
                              ...O.register("website"),
                            }),
                          ],
                        }),
                        (0, n.jsx)(d.$, {
                          type: "submit",
                          className: "w-full rounded-full",
                          disabled: e,
                          children: e
                            ? (0, n.jsxs)(n.Fragment, {
                                children: [
                                  (0, n.jsx)(b.A, {
                                    className: "mr-2 h-4 w-4 animate-spin",
                                  }),
                                  "Wird gesendet...",
                                ],
                              })
                            : (0, n.jsxs)(n.Fragment, {
                                children: [
                                  "Nachricht senden",
                                  (0, n.jsx)(x.A, {
                                    className: "ml-2 h-4 w-4",
                                  }),
                                ],
                              }),
                        }),
                        (0, n.jsx)(h.f, {
                          size: "sm",
                          className: "text-muted-foreground text-center mt-4",
                          children:
                            "Durch das Absenden dieses Formulars stimmen Sie unseren Datenschutzbestimmungen zu. Wir werden Ihre Informationen niemals ohne Ihre Zustimmung weitergeben.",
                        }),
                      ],
                    }),
              }),
            }),
            (0, n.jsx)("div", {
              className: "grid grid-cols-1 sm:grid-cols-3 gap-6 mt-12",
              children: (0, n.jsx)(l.Zp, {
                className:
                  "bg-muted border-0 dark:border dark:border-border overflow-hidden transition-all duration-300 hover:shadow-md sm:col-span-3 rounded-2xl",
                children: (0, n.jsxs)(l.Wu, {
                  className:
                    "p-6 flex flex-col items-center text-center space-y-2",
                  children: [
                    (0, n.jsx)("div", {
                      className:
                        "w-12 h-12 rounded-full bg-secondary flex items-center justify-center mb-2",
                      children: (0, n.jsx)("svg", {
                        xmlns: "http://www.w3.org/2000/svg",
                        className: "h-6 w-6 text-background",
                        fill: "none",
                        viewBox: "0 0 24 24",
                        stroke: "currentColor",
                        children: (0, n.jsx)("path", {
                          strokeLinecap: "round",
                          strokeLinejoin: "round",
                          strokeWidth: 2,
                          d: "M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z",
                        }),
                      }),
                    }),
                    (0, n.jsx)(u.D, {
                      level: 3,
                      children: "Schreiben Sie uns",
                    }),
                    (0, n.jsx)(h.f, {
                      size: "sm",
                      className: "text-muted-foreground",
                      children: "hello@azubi.ma",
                    }),
                  ],
                }),
              }),
            }),
          ],
        });
      }
    },
    77029: (e, r, s) => {
      (Promise.resolve().then(s.t.bind(s, 10542, 23)),
        Promise.resolve().then(s.t.bind(s, 25459, 23)),
        Promise.resolve().then(s.bind(s, 1016)),
        Promise.resolve().then(s.bind(s, 11666)));
    },
  },
  (e) => {
    var r = (r) => e((e.s = r));
    (e.O(0, [46593, 36209, 84121, 72076, 77358], () => r(77029)),
      (_N_E = e.O()));
  },
]);
