(self.webpackChunk_N_E = self.webpackChunk_N_E || []).push([
  [71838],
  {
    7080: (e, s, n) => {
      (Promise.resolve().then(n.t.bind(n, 10542, 23)),
        Promise.resolve().then(n.t.bind(n, 25459, 23)),
        Promise.resolve().then(n.bind(n, 96378)),
        Promise.resolve().then(n.bind(n, 60067)),
        Promise.resolve().then(n.bind(n, 53447)));
    },
    53447: (e, s, n) => {
      "use strict";
      n.d(s, { EmployerContactForm: () => k });
      var a = n(70207),
        r = n(87223),
        l = n(6929),
        t = n(44280),
        i = n(95034),
        o = n(80187),
        c = n(40167),
        m = n(87277),
        d = n(39441),
        h = n(61607),
        u = n(93501),
        x = n(64920),
        g = n(70005),
        p = n(95992),
        b = n(31159),
        j = n(74577),
        f = n(50488),
        y = n(50018),
        N = n(54539);
      let F = [
          "allgemeine_anfrage",
          "technischer_support",
          "abrechnung",
          "partnership",
          "feature_anfrage",
          "problem_melden",
        ],
        w = {
          allgemeine_anfrage: "Allgemeine Anfrage",
          technischer_support: "Technischer Support",
          abrechnung: "Abrechnung & Preise",
          partnership: "Partnerschaft",
          feature_anfrage: "Feature-Anfrage",
          problem_melden: "Problem melden",
        },
        v = ["1-10", "11-50", "51-200", "201-500", "500+"],
        S = N.Ik({
          firstName: N.Yj()
            .min(2, "Vorname muss mindestens 2 Zeichen lang sein")
            .max(50, "Vorname darf maximal 50 Zeichen lang sein")
            .regex(
              /^[a-zA-ZäöüÄÖÜß\s-]+$/,
              "Vorname enth\xe4lt ung\xfcltige Zeichen",
            ),
          lastName: N.Yj()
            .min(2, "Nachname muss mindestens 2 Zeichen lang sein")
            .max(50, "Nachname darf maximal 50 Zeichen lang sein")
            .regex(
              /^[a-zA-ZäöüÄÖÜß\s-]+$/,
              "Nachname enth\xe4lt ung\xfcltige Zeichen",
            ),
          email: N.Yj()
            .email("Bitte geben Sie eine g\xfcltige E-Mail-Adresse ein")
            .toLowerCase(),
          subject: N.k5(F, {
            errorMap: () => ({
              message: "Bitte w\xe4hlen Sie ein Betreff aus",
            }),
          }),
          message: N.Yj()
            .min(10, "Nachricht muss mindestens 10 Zeichen lang sein")
            .max(2e3, "Nachricht darf maximal 2000 Zeichen lang sein"),
          phone: N.Yj().optional(),
          countryCode: N.Yj().default("+49"),
          companyName: N.Yj()
            .max(100, "Firmenname darf maximal 100 Zeichen lang sein")
            .optional()
            .or(N.eu("")),
          companyWebsite: N.Yj()
            .url(
              "Bitte geben Sie eine g\xfcltige URL ein (z.B. https://example.com)",
            )
            .optional()
            .or(N.eu("")),
          industrySector: N.Yj()
            .max(100, "Branche darf maximal 100 Zeichen lang sein")
            .optional()
            .or(N.eu("")),
          companySize: N.k5(v).optional().or(N.eu("")),
          honeypot: N.Yj().refine((e) => "" === e, { message: "Spam erkannt" }),
        });
      function k() {
        let [e, s] = (0, r.useState)(!1),
          [n, N] = (0, r.useState)(!1),
          [k, A] = (0, r.useState)(""),
          {
            register: C,
            handleSubmit: z,
            formState: { errors: E },
            setValue: I,
            watch: _,
            reset: Y,
          } = (0, l.mN)({
            resolver: (0, t.u)(S),
            defaultValues: {
              firstName: "",
              lastName: "",
              email: "",
              phone: "",
              countryCode: "+49",
              companyName: "",
              companyWebsite: "",
              industrySector: "",
              companySize: "",
              subject: void 0,
              message: "",
              honeypot: "",
            },
          }),
          B = _("subject"),
          W = _("phone"),
          M = async (e) => {
            try {
              s(!0);
              let n = await fetch("/api/arbeitgeber/kontakt", {
                  method: "POST",
                  headers: { "Content-Type": "application/json" },
                  body: JSON.stringify(e),
                }),
                a = await n.json();
              if (!n.ok) {
                if (429 === n.status) {
                  (0, f.oR)({
                    title: "Zu viele Anfragen",
                    description:
                      a.error || "Bitte versuchen Sie es sp\xe4ter erneut.",
                    variant: "destructive",
                  });
                  return;
                }
                if (400 === n.status && a.details) {
                  a.details.forEach((e) => {
                    (0, f.oR)({
                      title: "Ung\xfcltige Eingabe",
                      description: "".concat(e.field, ": ").concat(e.message),
                      variant: "destructive",
                    });
                  });
                  return;
                }
                throw Error(a.error || "Ein Fehler ist aufgetreten");
              }
              (N(!0),
                A(a.referenceNumber || ""),
                (0, f.oR)({
                  title: "Nachricht gesendet!",
                  description:
                    "Ihre Anfrage wurde erfolgreich \xfcbermittelt. Referenznummer: ".concat(
                      a.referenceNumber,
                    ),
                  duration: 6e3,
                }),
                Y());
            } catch (e) {
              (console.error("[FORM ERROR]", e),
                (0, f.oR)({
                  title: "Fehler beim Senden",
                  description:
                    e instanceof Error
                      ? e.message
                      : "Bitte versuchen Sie es erneut.",
                  variant: "destructive",
                }));
            } finally {
              s(!1);
            }
          };
        return n
          ? (0, a.jsx)(i.m, {
              size: "default",
              children: (0, a.jsx)(o.Zp, {
                className: "p-8 md:p-12 rounded-2xl text-center",
                style: {
                  backgroundColor: "white",
                  boxShadow: "0 20px 40px rgba(52, 79, 31, 0.08)",
                },
                children: (0, a.jsxs)("div", {
                  className: "space-y-6",
                  children: [
                    (0, a.jsx)("div", {
                      className:
                        "w-20 h-20 rounded-full flex items-center justify-center mx-auto",
                      style: { backgroundColor: "rgba(244, 153, 26, 0.1)" },
                      children: (0, a.jsx)(g.A, {
                        className: "w-12 h-12",
                        style: { color: "#F4991A" },
                      }),
                    }),
                    (0, a.jsxs)("div", {
                      children: [
                        (0, a.jsx)("h3", {
                          className: "text-2xl font-bold mb-2",
                          style: { color: "#344F1F" },
                          children: "Vielen Dank f\xfcr Ihre Nachricht!",
                        }),
                        (0, a.jsx)("p", {
                          className: "text-lg",
                          style: { color: "rgba(52, 79, 31, 0.7)" },
                          children:
                            "Wir haben Ihre Anfrage erhalten und werden uns innerhalb von 24 Stunden bei Ihnen melden.",
                        }),
                      ],
                    }),
                    k &&
                      (0, a.jsxs)("div", {
                        className: "p-4 rounded-xl inline-block",
                        style: { backgroundColor: "#F2EAD3" },
                        children: [
                          (0, a.jsx)("p", {
                            className: "text-sm font-medium mb-1",
                            style: { color: "#344F1F" },
                            children: "Ihre Referenznummer:",
                          }),
                          (0, a.jsx)("p", {
                            className: "text-lg font-bold",
                            style: { color: "#F4991A" },
                            children: k,
                          }),
                        ],
                      }),
                    (0, a.jsx)("p", {
                      className: "text-sm",
                      style: { color: "rgba(52, 79, 31, 0.6)" },
                      children:
                        "Eine Best\xe4tigungs-E-Mail wurde an Ihre E-Mail-Adresse gesendet.",
                    }),
                    (0, a.jsx)(d.$, {
                      onClick: () => N(!1),
                      className: "rounded-full",
                      style: {
                        backgroundColor: "#F4991A",
                        color: "white",
                        minHeight: "48px",
                      },
                      children: "Neue Nachricht senden",
                    }),
                  ],
                }),
              }),
            })
          : (0, a.jsx)(i.m, {
              size: "default",
              children: (0, a.jsxs)("div", {
                className: "grid lg:grid-cols-[0.8fr_1.2fr] gap-8 items-start",
                children: [
                  (0, a.jsx)("div", {
                    className: "hidden lg:block sticky top-8",
                    children: (0, a.jsxs)("div", {
                      className: "relative",
                      children: [
                        (0, a.jsx)(y.default, {
                          src: "/mascot/mascot_pointing_male.webp",
                          alt: "Wir helfen Ihnen gerne",
                          width: 400,
                          height: 400,
                          className: "w-full h-auto",
                        }),
                        (0, a.jsxs)("div", {
                          className: "mt-4 p-4 rounded-xl text-center",
                          style: { backgroundColor: "#F2EAD3" },
                          children: [
                            (0, a.jsx)("p", {
                              className: "text-sm font-medium",
                              style: { color: "#344F1F" },
                              children: "Brauchen Sie Hilfe?",
                            }),
                            (0, a.jsx)("p", {
                              className: "text-xs mt-1",
                              style: { color: "rgba(52, 79, 31, 0.7)" },
                              children: "Unser Team ist f\xfcr Sie da!",
                            }),
                          ],
                        }),
                      ],
                    }),
                  }),
                  (0, a.jsx)(o.Zp, {
                    className: "p-6 md:p-8 rounded-2xl",
                    style: {
                      backgroundColor: "white",
                      boxShadow: "0 20px 40px rgba(52, 79, 31, 0.08)",
                    },
                    children: (0, a.jsxs)("form", {
                      onSubmit: z(M),
                      className: "space-y-6",
                      children: [
                        (0, a.jsxs)("div", {
                          className: "space-y-2",
                          children: [
                            (0, a.jsx)("h3", {
                              className: "text-2xl font-bold",
                              style: { color: "#344F1F" },
                              children: "Kontaktformular",
                            }),
                            (0, a.jsx)("p", {
                              style: { color: "rgba(52, 79, 31, 0.7)" },
                              children:
                                "F\xfcllen Sie das Formular aus und wir melden uns zeitnah bei Ihnen.",
                            }),
                          ],
                        }),
                        (0, a.jsxs)("div", {
                          className: "grid sm:grid-cols-2 gap-4",
                          children: [
                            (0, a.jsxs)("div", {
                              className: "space-y-2",
                              children: [
                                (0, a.jsx)(m.J, {
                                  htmlFor: "firstName",
                                  className: "text-sm font-medium",
                                  style: { color: "#344F1F" },
                                  children: "Vorname *",
                                }),
                                (0, a.jsx)(c.p, {
                                  id: "firstName",
                                  ...C("firstName"),
                                  className: "rounded-lg",
                                  style: {
                                    minHeight: "48px",
                                    borderColor: E.firstName
                                      ? "#EF4444"
                                      : "rgba(52, 79, 31, 0.15)",
                                  },
                                  placeholder: "Max",
                                }),
                                E.firstName &&
                                  (0, a.jsxs)("p", {
                                    className:
                                      "text-sm flex items-center gap-1",
                                    style: { color: "#EF4444" },
                                    children: [
                                      (0, a.jsx)(p.A, { className: "w-4 h-4" }),
                                      E.firstName.message,
                                    ],
                                  }),
                              ],
                            }),
                            (0, a.jsxs)("div", {
                              className: "space-y-2",
                              children: [
                                (0, a.jsx)(m.J, {
                                  htmlFor: "lastName",
                                  className: "text-sm font-medium",
                                  style: { color: "#344F1F" },
                                  children: "Nachname *",
                                }),
                                (0, a.jsx)(c.p, {
                                  id: "lastName",
                                  ...C("lastName"),
                                  className: "rounded-lg",
                                  style: {
                                    minHeight: "48px",
                                    borderColor: E.lastName
                                      ? "#EF4444"
                                      : "rgba(52, 79, 31, 0.15)",
                                  },
                                  placeholder: "Mustermann",
                                }),
                                E.lastName &&
                                  (0, a.jsxs)("p", {
                                    className:
                                      "text-sm flex items-center gap-1",
                                    style: { color: "#EF4444" },
                                    children: [
                                      (0, a.jsx)(p.A, { className: "w-4 h-4" }),
                                      E.lastName.message,
                                    ],
                                  }),
                              ],
                            }),
                          ],
                        }),
                        (0, a.jsxs)("div", {
                          className: "space-y-2",
                          children: [
                            (0, a.jsx)(m.J, {
                              htmlFor: "email",
                              className: "text-sm font-medium",
                              style: { color: "#344F1F" },
                              children: "E-Mail-Adresse *",
                            }),
                            (0, a.jsx)(c.p, {
                              id: "email",
                              type: "email",
                              ...C("email"),
                              className: "rounded-lg",
                              style: {
                                minHeight: "48px",
                                borderColor: E.email
                                  ? "#EF4444"
                                  : "rgba(52, 79, 31, 0.15)",
                              },
                              placeholder: "max.mustermann@firma.de",
                            }),
                            E.email &&
                              (0, a.jsxs)("p", {
                                className: "text-sm flex items-center gap-1",
                                style: { color: "#EF4444" },
                                children: [
                                  (0, a.jsx)(p.A, { className: "w-4 h-4" }),
                                  E.email.message,
                                ],
                              }),
                          ],
                        }),
                        (0, a.jsxs)("div", {
                          className: "space-y-2",
                          children: [
                            (0, a.jsxs)(m.J, {
                              htmlFor: "phone",
                              className: "text-sm font-medium",
                              style: { color: "#344F1F" },
                              children: [
                                "Telefonnummer ",
                                (0, a.jsx)("span", {
                                  style: { color: "rgba(52, 79, 31, 0.5)" },
                                  children: "(optional)",
                                }),
                              ],
                            }),
                            (0, a.jsx)(x.L, {
                              value: W || "",
                              onChange: (e, s) => {
                                (I("phone", e || ""),
                                  I(
                                    "countryCode",
                                    (null == s ? void 0 : s.dialCode)
                                      ? "+".concat(s.dialCode)
                                      : "+49",
                                  ));
                              },
                              defaultCountry: "de",
                              placeholder: "+49 XXX XXXXXXX",
                            }),
                            E.phone &&
                              (0, a.jsxs)("p", {
                                className: "text-sm flex items-center gap-1",
                                style: { color: "#EF4444" },
                                children: [
                                  (0, a.jsx)(p.A, { className: "w-4 h-4" }),
                                  E.phone.message,
                                ],
                              }),
                          ],
                        }),
                        (0, a.jsxs)("div", {
                          className: "space-y-2",
                          children: [
                            (0, a.jsxs)(m.J, {
                              htmlFor: "companyName",
                              className: "text-sm font-medium",
                              style: { color: "#344F1F" },
                              children: [
                                "Firmenname ",
                                (0, a.jsx)("span", {
                                  style: { color: "rgba(52, 79, 31, 0.5)" },
                                  children: "(optional)",
                                }),
                              ],
                            }),
                            (0, a.jsx)(c.p, {
                              id: "companyName",
                              ...C("companyName"),
                              className: "rounded-lg",
                              style: {
                                minHeight: "48px",
                                borderColor: E.companyName
                                  ? "#EF4444"
                                  : "rgba(52, 79, 31, 0.15)",
                              },
                              placeholder: "Musterfirma GmbH",
                            }),
                            E.companyName &&
                              (0, a.jsxs)("p", {
                                className: "text-sm flex items-center gap-1",
                                style: { color: "#EF4444" },
                                children: [
                                  (0, a.jsx)(p.A, { className: "w-4 h-4" }),
                                  E.companyName.message,
                                ],
                              }),
                          ],
                        }),
                        (0, a.jsxs)("div", {
                          className: "space-y-2",
                          children: [
                            (0, a.jsxs)(m.J, {
                              htmlFor: "companyWebsite",
                              className: "text-sm font-medium",
                              style: { color: "#344F1F" },
                              children: [
                                "Firmenwebsite ",
                                (0, a.jsx)("span", {
                                  style: { color: "rgba(52, 79, 31, 0.5)" },
                                  children: "(optional)",
                                }),
                              ],
                            }),
                            (0, a.jsx)(c.p, {
                              id: "companyWebsite",
                              type: "url",
                              ...C("companyWebsite"),
                              className: "rounded-lg",
                              style: {
                                minHeight: "48px",
                                borderColor: E.companyWebsite
                                  ? "#EF4444"
                                  : "rgba(52, 79, 31, 0.15)",
                              },
                              placeholder: "https://www.beispiel.de",
                            }),
                            E.companyWebsite &&
                              (0, a.jsxs)("p", {
                                className: "text-sm flex items-center gap-1",
                                style: { color: "#EF4444" },
                                children: [
                                  (0, a.jsx)(p.A, { className: "w-4 h-4" }),
                                  E.companyWebsite.message,
                                ],
                              }),
                          ],
                        }),
                        (0, a.jsxs)("div", {
                          className: "grid sm:grid-cols-2 gap-4",
                          children: [
                            (0, a.jsxs)("div", {
                              className: "space-y-2",
                              children: [
                                (0, a.jsxs)(m.J, {
                                  htmlFor: "industrySector",
                                  className: "text-sm font-medium",
                                  style: { color: "#344F1F" },
                                  children: [
                                    "Branche ",
                                    (0, a.jsx)("span", {
                                      style: { color: "rgba(52, 79, 31, 0.5)" },
                                      children: "(optional)",
                                    }),
                                  ],
                                }),
                                (0, a.jsx)(c.p, {
                                  id: "industrySector",
                                  ...C("industrySector"),
                                  className: "rounded-lg",
                                  style: {
                                    minHeight: "48px",
                                    borderColor: E.industrySector
                                      ? "#EF4444"
                                      : "rgba(52, 79, 31, 0.15)",
                                  },
                                  placeholder: "z.B. IT, Pflege, Gastronomie",
                                }),
                                E.industrySector &&
                                  (0, a.jsxs)("p", {
                                    className:
                                      "text-sm flex items-center gap-1",
                                    style: { color: "#EF4444" },
                                    children: [
                                      (0, a.jsx)(p.A, { className: "w-4 h-4" }),
                                      E.industrySector.message,
                                    ],
                                  }),
                              ],
                            }),
                            (0, a.jsxs)("div", {
                              className: "space-y-2",
                              children: [
                                (0, a.jsxs)(m.J, {
                                  htmlFor: "companySize",
                                  className: "text-sm font-medium",
                                  style: { color: "#344F1F" },
                                  children: [
                                    "Firmengr\xf6\xdfe ",
                                    (0, a.jsx)("span", {
                                      style: { color: "rgba(52, 79, 31, 0.5)" },
                                      children: "(optional)",
                                    }),
                                  ],
                                }),
                                (0, a.jsxs)(u.l6, {
                                  value: _("companySize") || "",
                                  onValueChange: (e) => I("companySize", e),
                                  children: [
                                    (0, a.jsx)(u.bq, {
                                      className: "rounded-lg",
                                      style: {
                                        minHeight: "48px",
                                        borderColor: E.companySize
                                          ? "#EF4444"
                                          : "rgba(52, 79, 31, 0.15)",
                                      },
                                      children: (0, a.jsx)(u.yv, {
                                        placeholder: "Mitarbeiteranzahl",
                                      }),
                                    }),
                                    (0, a.jsx)(u.gC, {
                                      children: v.map((e) =>
                                        (0, a.jsxs)(
                                          u.eb,
                                          {
                                            value: e,
                                            children: [e, " Mitarbeiter"],
                                          },
                                          e,
                                        ),
                                      ),
                                    }),
                                  ],
                                }),
                                E.companySize &&
                                  (0, a.jsxs)("p", {
                                    className:
                                      "text-sm flex items-center gap-1",
                                    style: { color: "#EF4444" },
                                    children: [
                                      (0, a.jsx)(p.A, { className: "w-4 h-4" }),
                                      E.companySize.message,
                                    ],
                                  }),
                              ],
                            }),
                          ],
                        }),
                        (0, a.jsxs)("div", {
                          className: "space-y-2",
                          children: [
                            (0, a.jsx)(m.J, {
                              htmlFor: "subject",
                              className: "text-sm font-medium",
                              style: { color: "#344F1F" },
                              children: "Betreff *",
                            }),
                            (0, a.jsxs)(u.l6, {
                              value: B,
                              onValueChange: (e) => I("subject", e),
                              children: [
                                (0, a.jsx)(u.bq, {
                                  className: "rounded-lg",
                                  style: {
                                    minHeight: "48px",
                                    borderColor: E.subject
                                      ? "#EF4444"
                                      : "rgba(52, 79, 31, 0.15)",
                                  },
                                  children: (0, a.jsx)(u.yv, {
                                    placeholder: "W\xe4hlen Sie einen Betreff",
                                  }),
                                }),
                                (0, a.jsx)(u.gC, {
                                  children: F.map((e) =>
                                    (0, a.jsx)(
                                      u.eb,
                                      { value: e, children: w[e] },
                                      e,
                                    ),
                                  ),
                                }),
                              ],
                            }),
                            E.subject &&
                              (0, a.jsxs)("p", {
                                className: "text-sm flex items-center gap-1",
                                style: { color: "#EF4444" },
                                children: [
                                  (0, a.jsx)(p.A, { className: "w-4 h-4" }),
                                  E.subject.message,
                                ],
                              }),
                          ],
                        }),
                        (0, a.jsxs)("div", {
                          className: "space-y-2",
                          children: [
                            (0, a.jsx)(m.J, {
                              htmlFor: "message",
                              className: "text-sm font-medium",
                              style: { color: "#344F1F" },
                              children: "Nachricht *",
                            }),
                            (0, a.jsx)(h.T, {
                              id: "message",
                              ...C("message"),
                              className: "rounded-lg min-h-[150px]",
                              style: {
                                borderColor: E.message
                                  ? "#EF4444"
                                  : "rgba(52, 79, 31, 0.15)",
                              },
                              placeholder: "Beschreiben Sie Ihre Anfrage...",
                            }),
                            E.message &&
                              (0, a.jsxs)("p", {
                                className: "text-sm flex items-center gap-1",
                                style: { color: "#EF4444" },
                                children: [
                                  (0, a.jsx)(p.A, { className: "w-4 h-4" }),
                                  E.message.message,
                                ],
                              }),
                            (0, a.jsx)("p", {
                              className: "text-xs",
                              style: { color: "rgba(52, 79, 31, 0.5)" },
                              children: "Mindestens 10 Zeichen",
                            }),
                          ],
                        }),
                        (0, a.jsx)("input", {
                          type: "text",
                          ...C("honeypot"),
                          style: { display: "none" },
                          tabIndex: -1,
                          autoComplete: "off",
                        }),
                        (0, a.jsx)(d.$, {
                          type: "submit",
                          disabled: e,
                          className:
                            "w-full rounded-full text-base font-medium",
                          style: {
                            backgroundColor: "#F4991A",
                            color: "white",
                            minHeight: "56px",
                          },
                          children: e
                            ? (0, a.jsxs)(a.Fragment, {
                                children: [
                                  (0, a.jsx)(b.A, {
                                    className: "mr-2 h-5 w-5 animate-spin",
                                  }),
                                  "Wird gesendet...",
                                ],
                              })
                            : (0, a.jsxs)(a.Fragment, {
                                children: [
                                  (0, a.jsx)(j.A, {
                                    className: "mr-2 h-5 w-5",
                                  }),
                                  "Nachricht senden",
                                ],
                              }),
                        }),
                        (0, a.jsx)("p", {
                          className: "text-xs text-center",
                          style: { color: "rgba(52, 79, 31, 0.5)" },
                          children: "* Pflichtfelder",
                        }),
                      ],
                    }),
                  }),
                ],
              }),
            });
      }
      (S.extend({
        honeypot: N.Yj().optional(),
        ipAddress: N.Yj().ip().optional(),
        userAgent: N.Yj().optional(),
        userId: N.Yj().uuid().optional(),
        employerProfileId: N.Yj().uuid().optional(),
      }),
        N.Ik({
          first_name: N.Yj(),
          last_name: N.Yj(),
          email: N.Yj().email(),
          phone: N.Yj().nullable(),
          country_code: N.Yj(),
          company_name: N.Yj().nullable(),
          company_website: N.Yj().nullable(),
          industry_sector: N.Yj().nullable(),
          company_size: N.Yj().nullable(),
          subject: N.k5(F),
          message: N.Yj(),
          user_id: N.Yj().uuid().nullable(),
          employer_profile_id: N.Yj().uuid().nullable(),
          ip_address: N.Yj().nullable(),
          user_agent: N.Yj().nullable(),
          honeypot_field: N.Yj().nullable(),
          submission_source: N.Yj().default("arbeitgeber_website"),
        }));
    },
    60067: (e, s, n) => {
      "use strict";
      n.d(s, { EmployerContactFAQ: () => i });
      var a = n(70207),
        r = n(95034),
        l = n(44649);
      let t = [
        {
          question: "Wie schnell erhalte ich eine Antwort?",
          answer:
            "Unser Team antwortet in der Regel innerhalb von 24 Stunden w\xe4hrend unserer Gesch\xe4ftszeiten (Montag bis Freitag, 9:00-18:00 Uhr GST (Gulf Standard Time)). In dringenden F\xe4llen k\xf6nnen Sie uns auch telefonisch erreichen.",
        },
        {
          question: "Kann ich auch per Telefon Kontakt aufnehmen?",
          answer:
            "Ja, w\xe4hrend unserer Gesch\xe4ftszeiten (Montag bis Freitag, 9:00-18:00 Uhr GST (Gulf Standard Time)) erreichen Sie uns telefonisch unter +971 52 288 4118. F\xfcr detaillierte Anfragen empfehlen wir jedoch das Kontaktformular, damit wir Ihnen eine umfassende schriftliche Antwort geben k\xf6nnen.",
        },
        {
          question: "Bieten Sie Support auf Englisch an?",
          answer:
            "Ja, unser Team ist mehrsprachig und kann Sie sowohl auf Deutsch als auch auf Englisch unterst\xfctzen. Geben Sie einfach in Ihrer Nachricht an, in welcher Sprache Sie kommunizieren m\xf6chten.",
        },
        {
          question: "Wie kann ich eine Partnerschaft anfragen?",
          answer:
            'W\xe4hlen Sie im Kontaktformular den Betreff "Partnerschaft" aus und beschreiben Sie Ihr Anliegen. Unser Partnerschafts-Team wird sich dann direkt mit Ihnen in Verbindung setzen, um die M\xf6glichkeiten zu besprechen. Alternativ besuchen Sie unsere Partner-Seite f\xfcr weitere Informationen.',
        },
        {
          question: "Was passiert mit meinen Daten?",
          answer:
            "Ihre Daten werden gem\xe4\xdf unserer Datenschutzerkl\xe4rung und der DSGVO verarbeitet. Wir verwenden Ihre Informationen ausschlie\xdflich zur Bearbeitung Ihrer Anfrage und geben sie nicht an Dritte weiter. Weitere Details finden Sie in unserer Datenschutzerkl\xe4rung.",
        },
        {
          question: "Ist die Nutzung von GoAusbildung wirklich kostenlos?",
          answer:
            "Ja, GoAusbildung ist f\xfcr Arbeitgeber 100% kostenlos. Es fallen keine Vermittlungsgeb\xfchren, Abonnementkosten oder versteckte Geb\xfchren an. Sie k\xf6nnen kostenlos Stellenanzeigen ver\xf6ffentlichen, Bewerbungen erhalten und mit Kandidaten kommunizieren.",
        },
        {
          question: "Wie lange dauert die Registrierung als Arbeitgeber?",
          answer:
            "Die Registrierung dauert nur wenige Minuten. Nach der Anmeldung durchl\xe4uft Ihr Unternehmen einen kurzen Verifizierungsprozess, der in der Regel innerhalb von 1-2 Werktagen abgeschlossen ist. Danach k\xf6nnen Sie sofort Stellenanzeigen ver\xf6ffentlichen.",
        },
        {
          question: "Welche Branchen werden unterst\xfctzt?",
          answer:
            "GoAusbildung unterst\xfctzt alle Branchen, die Ausbildungspl\xe4tze anbieten. Besonders stark vertreten sind IT, Pflege, Gastronomie, Handwerk, Technik und kaufm\xe4nnische Berufe. Wenn Sie sich unsicher sind, kontaktieren Sie uns gerne - wir beraten Sie.",
        },
      ];
      function i() {
        return (0, a.jsx)("section", {
          className: "py-16 md:py-20",
          style: { backgroundColor: "white" },
          children: (0, a.jsxs)(r.m, {
            size: "lg",
            children: [
              (0, a.jsxs)("div", {
                className: "text-center max-w-2xl mx-auto mb-12",
                children: [
                  (0, a.jsx)("h2", {
                    className: "text-3xl font-bold mb-4",
                    style: { color: "#344F1F" },
                    children: "H\xe4ufig gestellte Fragen",
                  }),
                  (0, a.jsx)("p", {
                    className: "text-lg leading-relaxed",
                    style: { color: "rgba(52, 79, 31, 0.7)" },
                    children:
                      "Hier finden Sie Antworten auf die am h\xe4ufigsten gestellten Fragen zum Kontakt und unseren Services.",
                  }),
                ],
              }),
              (0, a.jsx)("div", {
                className: "max-w-3xl mx-auto",
                children: (0, a.jsx)(l.Accordion, {
                  type: "single",
                  collapsible: !0,
                  className: "space-y-4",
                  children: t.map((e, s) =>
                    (0, a.jsxs)(
                      l.AccordionItem,
                      {
                        value: "item-".concat(s),
                        className: "rounded-xl border px-6",
                        style: {
                          backgroundColor: "#F9F5F0",
                          borderColor: "rgba(52, 79, 31, 0.1)",
                        },
                        children: [
                          (0, a.jsx)(l.AccordionTrigger, {
                            className:
                              "text-left font-semibold hover:no-underline py-5",
                            style: { color: "#344F1F" },
                            children: e.question,
                          }),
                          (0, a.jsx)(l.AccordionContent, {
                            className: "text-base leading-relaxed pb-5",
                            style: { color: "rgba(52, 79, 31, 0.7)" },
                            children: e.answer,
                          }),
                        ],
                      },
                      s,
                    ),
                  ),
                }),
              }),
              (0, a.jsxs)("div", {
                className: "mt-12 text-center",
                children: [
                  (0, a.jsx)("p", {
                    className: "text-base mb-4",
                    style: { color: "rgba(52, 79, 31, 0.7)" },
                    children: "Haben Sie weitere Fragen?",
                  }),
                  (0, a.jsxs)("a", {
                    href: "mailto:hello@goausbildung.com",
                    className:
                      "inline-flex items-center gap-2 text-base font-semibold hover:underline",
                    style: { color: "#F4991A" },
                    children: [
                      "Kontaktieren Sie uns direkt",
                      (0, a.jsx)("svg", {
                        className: "w-5 h-5",
                        fill: "none",
                        viewBox: "0 0 24 24",
                        stroke: "currentColor",
                        children: (0, a.jsx)("path", {
                          strokeLinecap: "round",
                          strokeLinejoin: "round",
                          strokeWidth: 2,
                          d: "M17 8l4 4m0 0l-4 4m4-4H3",
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
    96378: (e, s, n) => {
      "use strict";
      n.d(s, { EmployerContactCards: () => h });
      var a = n(70207),
        r = n(95034),
        l = n(80187),
        t = n(95540),
        i = n(36521),
        o = n(28131),
        c = n(1701),
        m = n(39441);
      function d(e) {
        let { icon: s, title: n, content: r, action: t } = e;
        return (0, a.jsx)(l.Zp, {
          className:
            "p-6 md:p-8 rounded-xl border transition-all hover:shadow-lg hover:transform hover:-translate-y-1",
          style: {
            backgroundColor: "white",
            borderColor: "rgba(52, 79, 31, 0.1)",
            boxShadow: "0 4px 8px rgba(52, 79, 31, 0.06)",
          },
          children: (0, a.jsxs)("div", {
            className: "flex flex-col items-center text-center space-y-4",
            children: [
              (0, a.jsx)("div", {
                className:
                  "w-14 h-14 rounded-full flex items-center justify-center",
                style: { backgroundColor: "rgba(244, 153, 26, 0.1)" },
                children: s,
              }),
              (0, a.jsx)("h3", {
                className: "text-lg font-semibold",
                style: { color: "#344F1F" },
                children: n,
              }),
              (0, a.jsx)("div", {
                className: "text-base leading-relaxed",
                style: { color: "rgba(52, 79, 31, 0.7)" },
                children: r,
              }),
              t &&
                (0, a.jsx)(m.$, {
                  asChild: !0,
                  variant: "ghost",
                  className: "rounded-full mt-2 font-medium",
                  style: { color: "#F4991A" },
                  children: t.external
                    ? (0, a.jsx)("a", {
                        href: t.href,
                        target: "_blank",
                        rel: "noopener noreferrer",
                        children: t.label,
                      })
                    : (0, a.jsx)("a", { href: t.href, children: t.label }),
                }),
            ],
          }),
        });
      }
      function h() {
        return (0, a.jsx)("section", {
          className: "py-12 md:py-16",
          style: { backgroundColor: "#F9F5F0" },
          children: (0, a.jsxs)(r.m, {
            size: "lg",
            children: [
              (0, a.jsxs)("div", {
                className: "text-center max-w-2xl mx-auto mb-12",
                children: [
                  (0, a.jsx)("h2", {
                    className: "text-3xl font-bold mb-4",
                    style: { color: "#344F1F" },
                    children: "Kontaktm\xf6glichkeiten",
                  }),
                  (0, a.jsx)("p", {
                    className: "text-lg leading-relaxed",
                    style: { color: "rgba(52, 79, 31, 0.7)" },
                    children:
                      "W\xe4hlen Sie Ihre bevorzugte Kontaktmethode. Wir sind hier, um Ihnen zu helfen.",
                  }),
                ],
              }),
              (0, a.jsxs)("div", {
                className: "grid md:grid-cols-3 gap-6 mb-12",
                children: [
                  (0, a.jsx)(d, {
                    icon: (0, a.jsx)(t.A, {
                      className: "w-7 h-7",
                      style: { color: "#F4991A" },
                    }),
                    title: "E-Mail",
                    content: (0, a.jsxs)("div", {
                      className: "space-y-2",
                      children: [
                        (0, a.jsx)("p", {
                          className: "font-medium",
                          style: { color: "#344F1F" },
                          children: "hello@goausbildung.com",
                        }),
                        (0, a.jsx)("p", {
                          className: "text-sm",
                          children:
                            "Schreiben Sie uns eine E-Mail und erhalten Sie eine Antwort innerhalb von 24 Stunden.",
                        }),
                      ],
                    }),
                    action: {
                      label: "E-Mail senden",
                      href: "mailto:hello@goausbildung.com",
                    },
                  }),
                  (0, a.jsx)(d, {
                    icon: (0, a.jsx)(i.A, {
                      className: "w-7 h-7",
                      style: { color: "#F4991A" },
                    }),
                    title: "Telefon",
                    content: (0, a.jsxs)("div", {
                      className: "space-y-2",
                      children: [
                        (0, a.jsx)("p", {
                          className: "font-medium",
                          style: { color: "#344F1F" },
                          children: "+971 52 288 4118",
                        }),
                        (0, a.jsx)("p", {
                          className: "text-sm",
                          children:
                            "Rufen Sie uns an w\xe4hrend unserer Gesch\xe4ftszeiten f\xfcr sofortige Unterst\xfctzung.",
                        }),
                      ],
                    }),
                    action: {
                      label: "Jetzt anrufen",
                      href: "tel:+971522884118",
                    },
                  }),
                  (0, a.jsx)(d, {
                    icon: (0, a.jsx)(o.A, {
                      className: "w-7 h-7",
                      style: { color: "#F4991A" },
                    }),
                    title: "Gesch\xe4ftszeiten",
                    content: (0, a.jsxs)("div", {
                      className: "space-y-2",
                      children: [
                        (0, a.jsx)("p", {
                          className: "font-medium",
                          style: { color: "#344F1F" },
                          children: "Montag - Freitag",
                        }),
                        (0, a.jsx)("p", {
                          className: "text-sm",
                          children: "9:00 - 18:00 Uhr",
                        }),
                        (0, a.jsx)("p", {
                          className: "text-xs",
                          style: { color: "rgba(52, 79, 31, 0.6)" },
                          children:
                            "Samstag: 10:00 - 15:00 Uhr, Sonntag geschlossen",
                        }),
                      ],
                    }),
                  }),
                ],
              }),
              (0, a.jsxs)("div", {
                className: "mt-16",
                children: [
                  (0, a.jsx)("h3", {
                    className: "text-2xl font-bold text-center mb-8",
                    style: { color: "#344F1F" },
                    children: "Unsere Standorte",
                  }),
                  (0, a.jsxs)("div", {
                    className: "grid md:grid-cols-2 gap-6 max-w-4xl mx-auto",
                    children: [
                      (0, a.jsxs)(l.Zp, {
                        className: "p-8 rounded-2xl",
                        style: { backgroundColor: "#F2EAD3", border: "none" },
                        children: [
                          (0, a.jsxs)("div", {
                            className: "flex items-start gap-3 mb-4",
                            children: [
                              (0, a.jsx)(c.A, {
                                className: "w-5 h-5 shrink-0 mt-1",
                                style: { color: "#F4991A" },
                              }),
                              (0, a.jsx)("h4", {
                                className: "text-lg font-semibold",
                                style: { color: "#344F1F" },
                                children: "Dubai Hauptsitz",
                              }),
                            ],
                          }),
                          (0, a.jsxs)("div", {
                            className: "pl-8 space-y-1",
                            style: { color: "rgba(52, 79, 31, 0.7)" },
                            children: [
                              (0, a.jsx)("p", {
                                children: "Onyx Building, Unit 101-228",
                              }),
                              (0, a.jsx)("p", {
                                children: "Al Khabeesi, Dubai 239532",
                              }),
                              (0, a.jsx)("p", {
                                children: "Vereinigte Arabische Emirate",
                              }),
                            ],
                          }),
                        ],
                      }),
                      (0, a.jsxs)(l.Zp, {
                        className: "p-8 rounded-2xl",
                        style: { backgroundColor: "#F2EAD3", border: "none" },
                        children: [
                          (0, a.jsxs)("div", {
                            className: "flex items-start gap-3 mb-4",
                            children: [
                              (0, a.jsx)(c.A, {
                                className: "w-5 h-5 shrink-0 mt-1",
                                style: { color: "#F4991A" },
                              }),
                              (0, a.jsx)("h4", {
                                className: "text-lg font-semibold",
                                style: { color: "#344F1F" },
                                children: "Indien B\xfcro",
                              }),
                            ],
                          }),
                          (0, a.jsxs)("div", {
                            className: "pl-8 space-y-1",
                            style: { color: "rgba(52, 79, 31, 0.7)" },
                            children: [
                              (0, a.jsx)("p", {
                                children: "No. 113, Kanaka Towers",
                              }),
                              (0, a.jsx)("p", {
                                children: "16th Cross, JP Nagar 4th Phase",
                              }),
                              (0, a.jsx)("p", {
                                children: "Bangalore 560078, Karnataka, Indien",
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
  },
  (e) => {
    var s = (s) => e((e.s = s));
    (e.O(0, [46593, 36209, 84121, 72076, 77358], () => s(7080)),
      (_N_E = e.O()));
  },
]);
