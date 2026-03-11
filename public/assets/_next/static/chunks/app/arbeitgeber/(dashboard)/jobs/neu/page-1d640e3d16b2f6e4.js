(self.webpackChunk_N_E = self.webpackChunk_N_E || []).push([
  [81469],
  {
    32427: (e, s, r) => {
      "use strict";
      (r.r(s), r.d(s, { default: () => I }));
      var i = r(70207),
        a = r(87223),
        t = r(18051),
        n = r(45748),
        l = r(60358),
        d = r(44948),
        c = r(37426),
        o = r(10194),
        m = r(51105),
        h = r(69312),
        x = r(31159),
        u = r(74577),
        p = r(22242),
        g = r(39441),
        f = r(40167),
        b = r(87277),
        j = r(98390),
        v = r(82110),
        N = r(10542),
        _ = r.n(N),
        y = r(54928),
        w = r(61889),
        S = r(42678),
        k = r(28131),
        z = r(46031);
      let A = {
        publish_job: {
          title: "Verifizierung erforderlich",
          description:
            "Um Stellenanzeigen zu ver\xf6ffentlichen, muss Ihr Unternehmen verifiziert werden. Dies sch\xfctzt Bewerber und erh\xf6ht die Qualit\xe4t der Plattform.",
          icon: h.A,
          benefit:
            "Verifizierte Arbeitgeber erhalten 3x mehr qualifizierte Bewerbungen",
        },
        message_student: {
          title: "Verifizierung erforderlich",
          description:
            "Um Kandidaten direkt zu kontaktieren, muss Ihr Unternehmen verifiziert werden. Dies sch\xfctzt Bewerber vor Spam und unseri\xf6sen Anfragen.",
          icon: h.A,
          benefit: "Direkter Zugang zu \xfcber 1.000+ qualifizierten Bewerbern",
        },
        view_contact: {
          title: "Verifizierung erforderlich",
          description:
            "Kontaktdaten und Dokumente sind nur f\xfcr verifizierte Arbeitgeber sichtbar. Vervollst\xe4ndigen Sie Ihr Profil, um vollen Zugriff zu erhalten.",
          icon: c.A,
          benefit: "Zugriff auf CVs, Zertifikate und Kontaktinformationen",
        },
        access_documents: {
          title: "Verifizierung erforderlich",
          description:
            "Bewerbungsunterlagen k\xf6nnen nur von verifizierten Arbeitgebern eingesehen werden. Dies sch\xfctzt die Privatsph\xe4re der Bewerber.",
          icon: c.A,
          benefit: "Download von CVs und Dokumenten aller Bewerber",
        },
      };
      function B(e) {
        let {
            open: s,
            onClose: r,
            title: a,
            description: l,
            action: d,
            profileCompleteness: c = 0,
            missingFields: o = 0,
          } = e,
          m = (0, t.useRouter)(),
          x = A[d],
          u = x.icon;
        return (0, i.jsx)(w.lG, {
          open: s,
          onOpenChange: r,
          children: (0, i.jsxs)(w.Cf, {
            className: "sm:max-w-[500px] overflow-hidden",
            children: [
              (0, i.jsx)(w.c7, {
                children: (0, i.jsxs)("div", {
                  className: "flex flex-col items-center text-center mb-4",
                  children: [
                    (0, i.jsxs)(n.P.div, {
                      initial: { scale: 0 },
                      animate: { scale: 1 },
                      transition: { type: "spring", duration: 0.5 },
                      className: "mb-4 relative",
                      children: [
                        (0, i.jsx)("div", {
                          className:
                            "w-20 h-20 rounded-full bg-primary/10 flex items-center justify-center",
                          children: (0, i.jsx)(u, {
                            className: "w-10 h-10 text-primary",
                          }),
                        }),
                        (0, i.jsx)("div", {
                          className:
                            "absolute -bottom-1 -right-1 w-8 h-8 bg-yellow-100 rounded-full flex items-center justify-center border-2 border-background",
                          children: (0, i.jsx)(h.A, {
                            className: "w-4 h-4 text-yellow-600",
                          }),
                        }),
                      ],
                    }),
                    (0, i.jsx)(w.L3, {
                      className: "text-2xl",
                      children: a || x.title,
                    }),
                    (0, i.jsx)(w.rr, {
                      className: "mt-2 text-base",
                      children: l || x.description,
                    }),
                  ],
                }),
              }),
              (0, i.jsx)("div", {
                className: "bg-beige rounded-lg p-4 my-4",
                children: (0, i.jsxs)("div", {
                  className: "flex items-start gap-3",
                  children: [
                    (0, i.jsx)(S.A, {
                      className: "w-5 h-5 text-primary flex-shrink-0 mt-0.5",
                    }),
                    (0, i.jsxs)("div", {
                      children: [
                        (0, i.jsx)("p", {
                          className: "text-sm font-medium text-secondary mb-1",
                          children: "Nach der Verifizierung erhalten Sie:",
                        }),
                        (0, i.jsx)("p", {
                          className: "text-sm text-muted-foreground",
                          children: x.benefit,
                        }),
                      ],
                    }),
                  ],
                }),
              }),
              c > 0 &&
                (0, i.jsxs)("div", {
                  className: "space-y-2",
                  children: [
                    (0, i.jsxs)("div", {
                      className: "flex items-center justify-between text-sm",
                      children: [
                        (0, i.jsx)("span", {
                          className: "font-medium",
                          children: "Profilfortschritt",
                        }),
                        (0, i.jsxs)("span", {
                          className: (0, v.cn)(
                            "font-semibold",
                            c >= 60 ? "text-green-600" : "text-orange-600",
                          ),
                          children: [c, "%"],
                        }),
                      ],
                    }),
                    (0, i.jsx)("div", {
                      className: "h-2 bg-muted rounded-full overflow-hidden",
                      children: (0, i.jsx)(n.P.div, {
                        initial: { width: 0 },
                        animate: { width: "".concat(c, "%") },
                        transition: { duration: 0.5 },
                        className: (0, v.cn)(
                          "h-full rounded-full",
                          c >= 60 ? "bg-green-500" : "bg-orange-500",
                        ),
                      }),
                    }),
                    o > 0 &&
                      (0, i.jsxs)("p", {
                        className: "text-xs text-muted-foreground",
                        children: [
                          "Noch ",
                          o,
                          " ",
                          1 === o ? "Feld" : "Felder",
                          " erforderlich",
                        ],
                      }),
                  ],
                }),
              (0, i.jsxs)("div", {
                className:
                  "bg-green-50 border border-green-200 rounded-lg p-4 flex items-start gap-3",
                children: [
                  (0, i.jsx)(k.A, {
                    className: "w-5 h-5 text-green-700 flex-shrink-0 mt-0.5",
                  }),
                  (0, i.jsxs)("div", {
                    children: [
                      (0, i.jsx)("p", {
                        className: "text-sm font-medium text-green-900 mb-1",
                        children: "Schnelle Bearbeitung",
                      }),
                      (0, i.jsx)("p", {
                        className: "text-xs text-green-700",
                        children:
                          "In der Regel wird Ihr Profil innerhalb von 24-48 Stunden verifiziert, nachdem Sie Ihr Profil vervollst\xe4ndigt haben.",
                      }),
                    ],
                  }),
                ],
              }),
              (0, i.jsxs)("div", {
                className: "flex flex-col sm:flex-row gap-2 mt-4",
                children: [
                  (0, i.jsx)(g.$, {
                    variant: "outline",
                    onClick: r,
                    className: "flex-1",
                    children: "Sp\xe4ter",
                  }),
                  (0, i.jsxs)(g.$, {
                    onClick: () => {
                      (r(), m.push("/arbeitgeber/einstellungen?tab=company"));
                    },
                    className: "flex-1 min-h-[44px]",
                    children: [
                      "Profil vervollst\xe4ndigen",
                      (0, i.jsx)(z.A, { className: "ml-2 h-4 w-4" }),
                    ],
                  }),
                ],
              }),
              (0, i.jsxs)("p", {
                className: "text-xs text-center text-muted-foreground mt-4",
                children: [
                  "Fragen? Kontaktieren Sie uns unter",
                  " ",
                  (0, i.jsx)("a", {
                    href: "mailto:arbeitgeber@goausbildung.com",
                    className: "text-primary hover:underline",
                    children: "arbeitgeber@goausbildung.com",
                  }),
                ],
              }),
            ],
          }),
        });
      }
      var C = r(90817),
        F = r(9647),
        J = r(44208),
        V = r(72288);
      let P = [
          "Baden-W\xfcrttemberg",
          "Bayern",
          "Berlin",
          "Brandenburg",
          "Bremen",
          "Hamburg",
          "Hessen",
          "Mecklenburg-Vorpommern",
          "Niedersachsen",
          "Nordrhein-Westfalen",
          "Rheinland-Pfalz",
          "Saarland",
          "Sachsen",
          "Sachsen-Anhalt",
          "Schleswig-Holstein",
          "Th\xfcringen",
        ],
        E = [
          { value: "apprenticeship", label: "Ausbildung" },
          { value: "full_time", label: "Vollzeit" },
          { value: "part_time", label: "Teilzeit" },
          { value: "internship", label: "Praktikum" },
        ];
      function I() {
        var e, s, r;
        let N = (0, t.useRouter)(),
          { currentEmployer: w, employerId: S, isLoading: k } = (0, C.B)(),
          [z, A] = (0, a.useState)(!1),
          [I, R] = (0, a.useState)({}),
          [O, $] = (0, a.useState)(null),
          [L, M] = (0, a.useState)(!1),
          [U, q] = (0, a.useState)(!0),
          [D, H] = (0, a.useState)([]),
          [K, Z] = (0, a.useState)([]),
          [T, W] = (0, a.useState)(!0),
          [G, Q] = (0, a.useState)(!1),
          [X, Y] = (0, a.useState)(!1),
          [ee, es] = (0, a.useState)({
            title_de: "",
            sector_id: "",
            city_id: "",
            state: "",
            postal_code: "",
            street_address: "",
            employment_type: "apprenticeship",
            salary_min: "",
            salary_max: "",
            salary_period: "monthly",
            description_de: "",
            requirements_de: "",
            benefits_de: "",
            responsibilities_de: "",
            start_date: "",
            contact_email: "",
            contact_phone: "",
          });
        ((0, a.useEffect)(() => {
          (async () => {
            try {
              let e = await fetch(
                  "/api/arbeitgeber/profile/verification-status",
                ),
                s = await e.json();
              s.success && $(s.verification);
            } catch (e) {
              console.error("Error fetching verification status:", e);
            } finally {
              q(!1);
            }
          })();
        }, []),
          (0, a.useEffect)(() => {
            (async () => {
              try {
                let e = (0, F.A)(),
                  { data: s, error: r } = await e
                    .from("sectors")
                    .select("id, name_de")
                    .order("name_de");
                r
                  ? (console.error("Error fetching sectors:", r),
                    y.oR.error("Fehler beim Laden der Bereiche"))
                  : H(s || []);
                let { data: i, error: a } = await e
                  .from("cities")
                  .select("id, name_de")
                  .order("name_de");
                a
                  ? (console.error("Error fetching cities:", a),
                    y.oR.error("Fehler beim Laden der St\xe4dte"))
                  : Z(i || []);
              } catch (e) {
                (console.error("Error fetching data:", e),
                  y.oR.error("Fehler beim Laden der Daten"));
              } finally {
                W(!1);
              }
            })();
          }, []));
        let er = (e, s) => {
            (es((r) => ({ ...r, [e]: s })),
              I[e] && R((s) => ({ ...s, [e]: "" })));
          },
          ei = () => {
            let e = {};
            (ee.title_de.length < 10 &&
              (e.title_de = "Titel muss mindestens 10 Zeichen lang sein"),
              ee.sector_id ||
                (e.sector_id = "Bitte w\xe4hlen Sie einen Bereich"),
              ee.city_id || (e.city_id = "Stadt ist erforderlich"),
              ee.state || (e.state = "Bundesland ist erforderlich"));
            let s = parseInt(ee.salary_min),
              r = parseInt(ee.salary_max);
            return (
              (!ee.salary_min || s < 0) &&
                (e.salary_min = "Ung\xfcltiges Mindestgehalt"),
              (!ee.salary_max || r < 0) &&
                (e.salary_max = "Ung\xfcltiges H\xf6chstgehalt"),
              r < s &&
                (e.salary_max =
                  "H\xf6chstgehalt muss gr\xf6\xdfer oder gleich Mindestgehalt sein"),
              ee.description_de.replace(/<[^>]*>/g, "").trim().length < 100 &&
                (e.description_de =
                  "Beschreibung muss mindestens 100 Zeichen lang sein"),
              ee.requirements_de.replace(/<[^>]*>/g, "").trim().length < 50 &&
                (e.requirements_de =
                  "Anforderungen m\xfcssen mindestens 50 Zeichen lang sein"),
              ee.contact_email &&
                !ee.contact_email.match(/^[^\s@]+@[^\s@]+\.[^\s@]+$/) &&
                (e.contact_email = "Ung\xfcltige E-Mail-Adresse"),
              R(e),
              0 === Object.keys(e).length
            );
          },
          ea = async (e) => {
            if ("active" === e && O && !O.is_verified) {
              M(!0);
              return;
            }
            if (!ei()) {
              y.oR.error("Bitte \xfcberpr\xfcfen Sie die Formularfehler");
              return;
            }
            A(!0);
            try {
              let r = parseInt(ee.salary_min),
                i = parseInt(ee.salary_max);
              if (isNaN(r) || isNaN(i)) {
                y.oR.error("Bitte geben Sie g\xfcltige Gehaltswerte ein");
                return;
              }
              let a = await fetch("/api/arbeitgeber/jobs/create", {
                  method: "POST",
                  headers: { "Content-Type": "application/json" },
                  body: JSON.stringify({
                    employerId: S,
                    ...ee,
                    salary_min: r,
                    salary_max: i,
                    status: e,
                  }),
                }),
                t = await a.json();
              if (a.ok)
                (y.oR.success(t.message || "Stelle erfolgreich erstellt"),
                  t.warning && y.oR.info(t.warning, { duration: 5e3 }),
                  N.push("/arbeitgeber/jobs"));
              else if (t.details && Array.isArray(t.details)) {
                console.error("Validation errors:", t.details);
                let e = t.details[0];
                if (e) {
                  var s;
                  let r =
                      (null === (s = e.path) || void 0 === s
                        ? void 0
                        : s.join(".")) || "Unbekanntes Feld",
                    i = e.message || "Validierungsfehler";
                  y.oR.error("".concat(r, ": ").concat(i));
                } else y.oR.error(t.error || "Validierungsfehler");
              } else y.oR.error(t.error || "Fehler beim Erstellen der Stelle");
            } catch (e) {
              (console.error("Error submitting form:", e),
                y.oR.error("Verbindungsfehler"));
            } finally {
              A(!1);
            }
          };
        return k || U || T
          ? (0, i.jsxs)("div", {
              className: "space-y-6 max-w-4xl",
              children: [
                (0, i.jsxs)("div", {
                  className: "flex items-center gap-4",
                  children: [
                    (0, i.jsx)("div", {
                      className:
                        "h-10 w-10 rounded-full bg-muted animate-pulse",
                    }),
                    (0, i.jsxs)("div", {
                      className: "space-y-2 flex-1",
                      children: [
                        (0, i.jsx)("div", {
                          className: "h-8 bg-muted rounded w-1/2 animate-pulse",
                        }),
                        (0, i.jsx)("div", {
                          className: "h-4 bg-muted rounded w-3/4 animate-pulse",
                        }),
                      ],
                    }),
                  ],
                }),
                (0, i.jsxs)("div", {
                  className:
                    "bg-card border border-border rounded-xl p-6 space-y-4",
                  children: [
                    (0, i.jsx)("div", {
                      className: "h-10 bg-muted rounded animate-pulse",
                    }),
                    (0, i.jsx)("div", {
                      className: "h-10 bg-muted rounded animate-pulse",
                    }),
                    (0, i.jsx)("div", {
                      className: "h-32 bg-muted rounded animate-pulse",
                    }),
                  ],
                }),
              ],
            })
          : S && w
            ? (0, i.jsxs)("div", {
                className: "space-y-6 max-w-4xl",
                children: [
                  (0, i.jsx)(B, {
                    open: L,
                    onClose: () => M(!1),
                    action: "publish_job",
                    profileCompleteness:
                      (null == O ? void 0 : O.profile_completeness) || 0,
                    missingFields:
                      (null == O
                        ? void 0
                        : null === (e = O.missing_requirements) || void 0 === e
                          ? void 0
                          : e.length) || 0,
                  }),
                  (0, i.jsxs)("div", {
                    className: "flex items-center gap-4",
                    children: [
                      (0, i.jsx)(g.$, {
                        variant: "ghost",
                        size: "icon",
                        asChild: !0,
                        className: "rounded-full",
                        children: (0, i.jsx)(_(), {
                          href: "/arbeitgeber/jobs",
                          children: (0, i.jsx)(l.A, { className: "h-5 w-5" }),
                        }),
                      }),
                      (0, i.jsxs)("div", {
                        children: [
                          (0, i.jsx)("h1", {
                            className: "text-3xl font-bold text-foreground",
                            children: "Neue Stellenanzeige erstellen",
                          }),
                          (0, i.jsx)("p", {
                            className: "text-muted-foreground mt-1",
                            children:
                              "F\xfcllen Sie alle Informationen aus, um eine neue Ausbildungsstelle zu ver\xf6ffentlichen",
                          }),
                        ],
                      }),
                    ],
                  }),
                  !U &&
                    O &&
                    !O.is_verified &&
                    (0, i.jsx)(n.P.div, {
                      initial: { opacity: 0, y: -10 },
                      animate: { opacity: 1, y: 0 },
                      className:
                        "p-4 rounded-xl bg-amber-50 border-2 border-amber-200 shadow-sm",
                      children: (0, i.jsxs)("div", {
                        className: "flex items-start gap-3",
                        children: [
                          (0, i.jsx)("div", {
                            className: "p-2 rounded-lg bg-amber-100",
                            children: (0, i.jsx)(d.A, {
                              className: "h-5 w-5 text-amber-700",
                            }),
                          }),
                          (0, i.jsxs)("div", {
                            className: "flex-1",
                            children: [
                              (0, i.jsx)("h4", {
                                className: "font-semibold text-amber-900 mb-1",
                                children: "Verifizierung erforderlich",
                              }),
                              (0, i.jsx)("p", {
                                className: "text-sm text-amber-800 mb-2",
                                children:
                                  "Sie k\xf6nnen Entw\xfcrfe erstellen, aber Stellenanzeigen k\xf6nnen erst ver\xf6ffentlicht werden, nachdem Ihr Unternehmen verifiziert wurde.",
                              }),
                              (0, i.jsxs)(g.$, {
                                variant: "outline",
                                size: "sm",
                                onClick: () =>
                                  N.push(
                                    "/arbeitgeber/einstellungen?tab=company",
                                  ),
                                className:
                                  "bg-white hover:bg-amber-50 border-amber-300",
                                children: [
                                  (0, i.jsx)(c.A, {
                                    className: "mr-2 h-4 w-4",
                                  }),
                                  "Profil vervollst\xe4ndigen (",
                                  O.profile_completeness,
                                  "%)",
                                ],
                              }),
                            ],
                          }),
                        ],
                      }),
                    }),
                  (0, i.jsxs)(n.P.div, {
                    initial: { opacity: 0, y: 20 },
                    animate: { opacity: 1, y: 0 },
                    className:
                      "bg-card border border-border rounded-xl p-6 space-y-8",
                    children: [
                      (0, i.jsxs)("div", {
                        className: "space-y-2",
                        children: [
                          (0, i.jsxs)(b.J, {
                            htmlFor: "title_de",
                            className: "text-base font-semibold",
                            children: [
                              "Stellentitel ",
                              (0, i.jsx)("span", {
                                className: "text-red-500",
                                children: "*",
                              }),
                            ],
                          }),
                          (0, i.jsx)(f.p, {
                            id: "title_de",
                            value: ee.title_de,
                            onChange: (e) => er("title_de", e.target.value),
                            placeholder:
                              "z.B. Ausbildung zum Fachinformatiker (m/w/d)",
                            className: (0, v.cn)(
                              I.title_de && "border-red-500",
                            ),
                          }),
                          I.title_de &&
                            (0, i.jsx)("p", {
                              className: "text-sm text-red-500",
                              children: I.title_de,
                            }),
                        ],
                      }),
                      (0, i.jsxs)("div", {
                        className: "space-y-2",
                        children: [
                          (0, i.jsxs)(b.J, {
                            className: "text-base font-semibold",
                            children: [
                              "Bereich ",
                              (0, i.jsx)("span", {
                                className: "text-red-500",
                                children: "*",
                              }),
                            ],
                          }),
                          (0, i.jsxs)(V.AM, {
                            open: G,
                            onOpenChange: Q,
                            children: [
                              (0, i.jsx)(V.Wv, {
                                asChild: !0,
                                children: (0, i.jsxs)(g.$, {
                                  variant: "outline",
                                  role: "combobox",
                                  "aria-expanded": G,
                                  className: (0, v.cn)(
                                    "w-full justify-between h-12 sm:h-10 font-normal",
                                    !ee.sector_id && "text-muted-foreground",
                                    I.sector_id && "border-red-500",
                                  ),
                                  children: [
                                    ee.sector_id
                                      ? null ===
                                          (s = D.find(
                                            (e) => e.id === ee.sector_id,
                                          )) || void 0 === s
                                        ? void 0
                                        : s.name_de
                                      : "Bitte w\xe4hlen...",
                                    (0, i.jsx)(o.A, {
                                      className:
                                        "ml-2 h-4 w-4 shrink-0 opacity-50",
                                    }),
                                  ],
                                }),
                              }),
                              (0, i.jsx)(V.hl, {
                                className: "w-full p-0",
                                align: "start",
                                children: (0, i.jsxs)(J.uB, {
                                  children: [
                                    (0, i.jsx)(J.G7, {
                                      placeholder: "Bereich suchen...",
                                    }),
                                    (0, i.jsxs)(J.oI, {
                                      children: [
                                        (0, i.jsx)(J.xL, {
                                          children: "Kein Bereich gefunden.",
                                        }),
                                        (0, i.jsx)(J.L$, {
                                          children: D.map((e) =>
                                            (0, i.jsxs)(
                                              J.h_,
                                              {
                                                value: e.name_de,
                                                onSelect: () => {
                                                  (er("sector_id", e.id),
                                                    Q(!1));
                                                },
                                                children: [
                                                  (0, i.jsx)(m.A, {
                                                    className: (0, v.cn)(
                                                      "mr-2 h-4 w-4",
                                                      ee.sector_id === e.id
                                                        ? "opacity-100"
                                                        : "opacity-0",
                                                    ),
                                                  }),
                                                  e.name_de,
                                                ],
                                              },
                                              e.id,
                                            ),
                                          ),
                                        }),
                                      ],
                                    }),
                                  ],
                                }),
                              }),
                            ],
                          }),
                          I.sector_id &&
                            (0, i.jsx)("p", {
                              className: "text-sm text-red-500",
                              children: I.sector_id,
                            }),
                        ],
                      }),
                      (0, i.jsxs)("div", {
                        className: "space-y-4",
                        children: [
                          (0, i.jsx)("h3", {
                            className: "text-base font-semibold",
                            children: "Standort",
                          }),
                          (0, i.jsxs)("div", {
                            className: "grid grid-cols-1 sm:grid-cols-2 gap-4",
                            children: [
                              (0, i.jsxs)("div", {
                                className: "space-y-2",
                                children: [
                                  (0, i.jsxs)(b.J, {
                                    children: [
                                      "Stadt ",
                                      (0, i.jsx)("span", {
                                        className: "text-red-500",
                                        children: "*",
                                      }),
                                    ],
                                  }),
                                  (0, i.jsxs)(V.AM, {
                                    open: X,
                                    onOpenChange: Y,
                                    children: [
                                      (0, i.jsx)(V.Wv, {
                                        asChild: !0,
                                        children: (0, i.jsxs)(g.$, {
                                          variant: "outline",
                                          role: "combobox",
                                          "aria-expanded": X,
                                          className: (0, v.cn)(
                                            "w-full justify-between h-12 sm:h-10 font-normal",
                                            !ee.city_id &&
                                              "text-muted-foreground",
                                            I.city_id && "border-red-500",
                                          ),
                                          children: [
                                            ee.city_id
                                              ? null ===
                                                  (r = K.find(
                                                    (e) => e.id === ee.city_id,
                                                  )) || void 0 === r
                                                ? void 0
                                                : r.name_de
                                              : "z.B. M\xfcnchen",
                                            (0, i.jsx)(o.A, {
                                              className:
                                                "ml-2 h-4 w-4 shrink-0 opacity-50",
                                            }),
                                          ],
                                        }),
                                      }),
                                      (0, i.jsx)(V.hl, {
                                        className: "w-full p-0",
                                        align: "start",
                                        children: (0, i.jsxs)(J.uB, {
                                          children: [
                                            (0, i.jsx)(J.G7, {
                                              placeholder: "Stadt suchen...",
                                            }),
                                            (0, i.jsxs)(J.oI, {
                                              children: [
                                                (0, i.jsx)(J.xL, {
                                                  children:
                                                    "Keine Stadt gefunden.",
                                                }),
                                                (0, i.jsx)(J.L$, {
                                                  children: K.map((e) =>
                                                    (0, i.jsxs)(
                                                      J.h_,
                                                      {
                                                        value: e.name_de,
                                                        onSelect: () => {
                                                          (er("city_id", e.id),
                                                            Y(!1));
                                                        },
                                                        children: [
                                                          (0, i.jsx)(m.A, {
                                                            className: (0,
                                                            v.cn)(
                                                              "mr-2 h-4 w-4",
                                                              ee.city_id ===
                                                                e.id
                                                                ? "opacity-100"
                                                                : "opacity-0",
                                                            ),
                                                          }),
                                                          e.name_de,
                                                        ],
                                                      },
                                                      e.id,
                                                    ),
                                                  ),
                                                }),
                                              ],
                                            }),
                                          ],
                                        }),
                                      }),
                                    ],
                                  }),
                                  I.city_id &&
                                    (0, i.jsx)("p", {
                                      className: "text-sm text-red-500",
                                      children: I.city_id,
                                    }),
                                ],
                              }),
                              (0, i.jsxs)("div", {
                                className: "space-y-2",
                                children: [
                                  (0, i.jsxs)(b.J, {
                                    htmlFor: "state",
                                    children: [
                                      "Bundesland ",
                                      (0, i.jsx)("span", {
                                        className: "text-red-500",
                                        children: "*",
                                      }),
                                    ],
                                  }),
                                  (0, i.jsxs)("select", {
                                    id: "state",
                                    value: ee.state,
                                    onChange: (e) =>
                                      er("state", e.target.value),
                                    className: (0, v.cn)(
                                      "flex h-12 sm:h-10 w-full rounded-md border border-input bg-background px-3 py-2 text-sm ring-offset-background",
                                      "focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2",
                                      I.state && "border-red-500",
                                    ),
                                    children: [
                                      (0, i.jsx)("option", {
                                        value: "",
                                        children: "Bitte w\xe4hlen...",
                                      }),
                                      P.map((e) =>
                                        (0, i.jsx)(
                                          "option",
                                          { value: e, children: e },
                                          e,
                                        ),
                                      ),
                                    ],
                                  }),
                                  I.state &&
                                    (0, i.jsx)("p", {
                                      className: "text-sm text-red-500",
                                      children: I.state,
                                    }),
                                ],
                              }),
                              (0, i.jsxs)("div", {
                                className: "space-y-2",
                                children: [
                                  (0, i.jsx)(b.J, {
                                    htmlFor: "postal_code",
                                    children: "Postleitzahl",
                                  }),
                                  (0, i.jsx)(f.p, {
                                    id: "postal_code",
                                    value: ee.postal_code,
                                    onChange: (e) =>
                                      er("postal_code", e.target.value),
                                    placeholder: "z.B. 80331",
                                  }),
                                ],
                              }),
                              (0, i.jsxs)("div", {
                                className: "space-y-2",
                                children: [
                                  (0, i.jsx)(b.J, {
                                    htmlFor: "street_address",
                                    children: "Stra\xdfe und Hausnummer",
                                  }),
                                  (0, i.jsx)(f.p, {
                                    id: "street_address",
                                    value: ee.street_address,
                                    onChange: (e) =>
                                      er("street_address", e.target.value),
                                    placeholder: "z.B. Marienplatz 1",
                                  }),
                                ],
                              }),
                            ],
                          }),
                        ],
                      }),
                      (0, i.jsxs)("div", {
                        className: "space-y-2",
                        children: [
                          (0, i.jsxs)(b.J, {
                            htmlFor: "employment_type",
                            className: "text-base font-semibold",
                            children: [
                              "Anstellungsart ",
                              (0, i.jsx)("span", {
                                className: "text-red-500",
                                children: "*",
                              }),
                            ],
                          }),
                          (0, i.jsx)("select", {
                            id: "employment_type",
                            value: ee.employment_type,
                            onChange: (e) =>
                              er("employment_type", e.target.value),
                            className:
                              "flex h-12 sm:h-10 w-full rounded-md border border-input bg-background px-3 py-2 text-sm ring-offset-background focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2",
                            children: E.map((e) =>
                              (0, i.jsx)(
                                "option",
                                { value: e.value, children: e.label },
                                e.value,
                              ),
                            ),
                          }),
                        ],
                      }),
                      (0, i.jsxs)("div", {
                        className: "space-y-4",
                        children: [
                          (0, i.jsx)("h3", {
                            className: "text-base font-semibold",
                            children: "Ausbildungsverg\xfctung",
                          }),
                          (0, i.jsxs)("div", {
                            className: "grid grid-cols-1 sm:grid-cols-3 gap-4",
                            children: [
                              (0, i.jsxs)("div", {
                                className: "space-y-2",
                                children: [
                                  (0, i.jsxs)(b.J, {
                                    htmlFor: "salary_min",
                                    children: [
                                      "Von (€) ",
                                      (0, i.jsx)("span", {
                                        className: "text-red-500",
                                        children: "*",
                                      }),
                                    ],
                                  }),
                                  (0, i.jsx)(f.p, {
                                    id: "salary_min",
                                    type: "number",
                                    value: ee.salary_min,
                                    onChange: (e) =>
                                      er("salary_min", e.target.value),
                                    placeholder: "900",
                                    className: (0, v.cn)(
                                      I.salary_min && "border-red-500",
                                    ),
                                  }),
                                  I.salary_min &&
                                    (0, i.jsx)("p", {
                                      className: "text-sm text-red-500",
                                      children: I.salary_min,
                                    }),
                                ],
                              }),
                              (0, i.jsxs)("div", {
                                className: "space-y-2",
                                children: [
                                  (0, i.jsxs)(b.J, {
                                    htmlFor: "salary_max",
                                    children: [
                                      "Bis (€) ",
                                      (0, i.jsx)("span", {
                                        className: "text-red-500",
                                        children: "*",
                                      }),
                                    ],
                                  }),
                                  (0, i.jsx)(f.p, {
                                    id: "salary_max",
                                    type: "number",
                                    value: ee.salary_max,
                                    onChange: (e) =>
                                      er("salary_max", e.target.value),
                                    placeholder: "1300",
                                    className: (0, v.cn)(
                                      I.salary_max && "border-red-500",
                                    ),
                                  }),
                                  I.salary_max &&
                                    (0, i.jsx)("p", {
                                      className: "text-sm text-red-500",
                                      children: I.salary_max,
                                    }),
                                ],
                              }),
                              (0, i.jsxs)("div", {
                                className: "space-y-2",
                                children: [
                                  (0, i.jsx)(b.J, {
                                    htmlFor: "salary_period",
                                    children: "Zeitraum",
                                  }),
                                  (0, i.jsxs)("select", {
                                    id: "salary_period",
                                    value: ee.salary_period,
                                    onChange: (e) =>
                                      er("salary_period", e.target.value),
                                    className:
                                      "flex h-12 sm:h-10 w-full rounded-md border border-input bg-background px-3 py-2 text-sm ring-offset-background focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2",
                                    children: [
                                      (0, i.jsx)("option", {
                                        value: "monthly",
                                        children: "Monatlich",
                                      }),
                                      (0, i.jsx)("option", {
                                        value: "yearly",
                                        children: "J\xe4hrlich",
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
                        className: "space-y-2",
                        children: [
                          (0, i.jsxs)(b.J, {
                            className: "text-base font-semibold",
                            children: [
                              "Stellenbeschreibung ",
                              (0, i.jsx)("span", {
                                className: "text-red-500",
                                children: "*",
                              }),
                            ],
                          }),
                          (0, i.jsx)("p", {
                            className: "text-sm text-muted-foreground mb-2",
                            children:
                              "Beschreiben Sie die Ausbildungsstelle und was die Bewerber erwartet",
                          }),
                          (0, i.jsx)(j.d, {
                            content: ee.description_de,
                            onChange: (e) => er("description_de", e),
                            placeholder:
                              "Beschreiben Sie die Ausbildungsstelle...",
                            error: I.description_de,
                          }),
                        ],
                      }),
                      (0, i.jsxs)("div", {
                        className: "space-y-2",
                        children: [
                          (0, i.jsxs)(b.J, {
                            className: "text-base font-semibold",
                            children: [
                              "Anforderungen ",
                              (0, i.jsx)("span", {
                                className: "text-red-500",
                                children: "*",
                              }),
                            ],
                          }),
                          (0, i.jsx)("p", {
                            className: "text-sm text-muted-foreground mb-2",
                            children:
                              "Listen Sie die erforderlichen Qualifikationen und F\xe4higkeiten auf",
                          }),
                          (0, i.jsx)(j.d, {
                            content: ee.requirements_de,
                            onChange: (e) => er("requirements_de", e),
                            placeholder:
                              "z.B. Schulabschluss, Sprachkenntnisse, pers\xf6nliche Eigenschaften...",
                            error: I.requirements_de,
                          }),
                        ],
                      }),
                      (0, i.jsxs)("div", {
                        className: "space-y-2",
                        children: [
                          (0, i.jsxs)(b.J, {
                            className: "text-base font-semibold",
                            children: [
                              "Aufgaben und Verantwortlichkeiten ",
                              (0, i.jsx)("span", {
                                className: "text-muted-foreground text-sm",
                                children: "(Optional)",
                              }),
                            ],
                          }),
                          (0, i.jsx)(j.d, {
                            content: ee.responsibilities_de,
                            onChange: (e) => er("responsibilities_de", e),
                            placeholder:
                              "Beschreiben Sie die Hauptaufgaben w\xe4hrend der Ausbildung...",
                            minHeight: "min-h-[150px]",
                          }),
                        ],
                      }),
                      (0, i.jsxs)("div", {
                        className: "space-y-2",
                        children: [
                          (0, i.jsxs)(b.J, {
                            className: "text-base font-semibold",
                            children: [
                              "Vorteile und Benefits ",
                              (0, i.jsx)("span", {
                                className: "text-muted-foreground text-sm",
                                children: "(Optional)",
                              }),
                            ],
                          }),
                          (0, i.jsx)(j.d, {
                            content: ee.benefits_de,
                            onChange: (e) => er("benefits_de", e),
                            placeholder:
                              "z.B. Urlaubstage, Weiterbildungsm\xf6glichkeiten, \xdcbernahmechancen...",
                            minHeight: "min-h-[150px]",
                          }),
                        ],
                      }),
                      (0, i.jsxs)("div", {
                        className: "space-y-4",
                        children: [
                          (0, i.jsx)("h3", {
                            className: "text-base font-semibold",
                            children: "Zeitplan",
                          }),
                          (0, i.jsx)("div", {
                            className: "grid grid-cols-1 sm:grid-cols-2 gap-4",
                            children: (0, i.jsxs)("div", {
                              className: "space-y-2",
                              children: [
                                (0, i.jsx)(b.J, {
                                  htmlFor: "start_date",
                                  children: "Startdatum",
                                }),
                                (0, i.jsx)(f.p, {
                                  id: "start_date",
                                  type: "date",
                                  value: ee.start_date,
                                  onChange: (e) =>
                                    er("start_date", e.target.value),
                                }),
                              ],
                            }),
                          }),
                        ],
                      }),
                      (0, i.jsxs)("div", {
                        className: "space-y-4",
                        children: [
                          (0, i.jsxs)("h3", {
                            className: "text-base font-semibold",
                            children: [
                              "Kontaktinformationen ",
                              (0, i.jsx)("span", {
                                className: "text-muted-foreground text-sm",
                                children: "(Optional)",
                              }),
                            ],
                          }),
                          (0, i.jsx)("p", {
                            className: "text-sm text-muted-foreground",
                            children:
                              "Falls abweichend von Ihren Profilinformationen",
                          }),
                          (0, i.jsxs)("div", {
                            className: "grid grid-cols-1 sm:grid-cols-2 gap-4",
                            children: [
                              (0, i.jsxs)("div", {
                                className: "space-y-2",
                                children: [
                                  (0, i.jsx)(b.J, {
                                    htmlFor: "contact_email",
                                    children: "Kontakt-E-Mail",
                                  }),
                                  (0, i.jsx)(f.p, {
                                    id: "contact_email",
                                    type: "email",
                                    value: ee.contact_email,
                                    onChange: (e) =>
                                      er("contact_email", e.target.value),
                                    placeholder: "bewerbungen@firma.de",
                                    className: (0, v.cn)(
                                      I.contact_email && "border-red-500",
                                    ),
                                  }),
                                  I.contact_email &&
                                    (0, i.jsx)("p", {
                                      className: "text-sm text-red-500",
                                      children: I.contact_email,
                                    }),
                                ],
                              }),
                              (0, i.jsxs)("div", {
                                className: "space-y-2",
                                children: [
                                  (0, i.jsx)(b.J, {
                                    htmlFor: "contact_phone",
                                    children: "Kontakt-Telefon",
                                  }),
                                  (0, i.jsx)(f.p, {
                                    id: "contact_phone",
                                    type: "tel",
                                    value: ee.contact_phone,
                                    onChange: (e) =>
                                      er("contact_phone", e.target.value),
                                    placeholder: "+49 123 456789",
                                  }),
                                ],
                              }),
                            ],
                          }),
                        ],
                      }),
                      (0, i.jsxs)("div", {
                        className:
                          "flex flex-col sm:flex-row gap-4 pt-4 border-t",
                        children: [
                          (0, i.jsxs)(g.$, {
                            type: "button",
                            size: "lg",
                            onClick: () => ea("active"),
                            disabled: z,
                            className: (0, v.cn)(
                              "flex-1 rounded-full min-h-[44px] sm:min-h-0 relative",
                              O && !O.is_verified && "opacity-70",
                            ),
                            children: [
                              O &&
                                !O.is_verified &&
                                (0, i.jsx)(h.A, {
                                  className: "h-4 w-4 mr-2 opacity-70",
                                }),
                              (0, i.jsx)(x.A, {
                                className: (0, v.cn)(
                                  "h-5 w-5 animate-spin mr-2",
                                  !z && "hidden",
                                ),
                              }),
                              (0, i.jsx)(u.A, {
                                className: (0, v.cn)(
                                  "h-5 w-5 mr-2",
                                  z && "hidden",
                                  O && !O.is_verified && "hidden",
                                ),
                              }),
                              O && !O.is_verified
                                ? "Verifizierung erforderlich"
                                : "Jetzt ver\xf6ffentlichen",
                            ],
                          }),
                          (0, i.jsxs)(g.$, {
                            type: "button",
                            variant: "outline",
                            size: "lg",
                            onClick: () => ea("draft"),
                            disabled: z,
                            className:
                              "flex-1 rounded-full min-h-[44px] sm:min-h-0",
                            children: [
                              (0, i.jsx)(x.A, {
                                className: (0, v.cn)(
                                  "h-5 w-5 animate-spin mr-2",
                                  !z && "hidden",
                                ),
                              }),
                              (0, i.jsx)(p.A, {
                                className: (0, v.cn)(
                                  "h-5 w-5 mr-2",
                                  z && "hidden",
                                ),
                              }),
                              "Als Entwurf speichern",
                            ],
                          }),
                        ],
                      }),
                      (0, i.jsxs)("p", {
                        className: "text-sm text-muted-foreground text-center",
                        children: [
                          (0, i.jsx)("span", {
                            className: "text-red-500",
                            children: "*",
                          }),
                          " Pflichtfelder | Die Stellenanzeige wird automatisch ins Englische \xfcbersetzt",
                        ],
                      }),
                    ],
                  }),
                ],
              })
            : null;
      }
    },
    99497: (e, s, r) => {
      Promise.resolve().then(r.bind(r, 32427));
    },
  },
  (e) => {
    var s = (s) => e((e.s = s));
    (e.O(0, [46593, 36209, 84121, 72076, 77358], () => s(99497)),
      (_N_E = e.O()));
  },
]);
