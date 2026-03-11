(self.webpackChunk_N_E = self.webpackChunk_N_E || []).push([
  [30102],
  {
    51388: (e, s, i) => {
      "use strict";
      (i.r(s), i.d(s, { default: () => E }));
      var t = i(70207),
        a = i(87223),
        r = i(54604),
        n = i(45748),
        l = i(54459),
        d = i(88117),
        c = i(70134),
        o = i(37426),
        m = i(46031),
        h = i(42678),
        x = i(72982),
        u = i(99251),
        p = i(39945),
        f = i(59827),
        b = i(43431),
        g = i(5101),
        j = i(61280),
        v = i(79024),
        N = i(28131),
        w = i(18051),
        y = i(39441),
        z = i(52141),
        A = i(35121),
        _ = i(10542),
        k = i.n(_),
        S = i(82110),
        B = i(4130),
        D = i(90817);
      let P = [
        "Internationale Auszubildende bringen frische Perspektiven und erh\xf6hen die kulturelle Vielfalt in Ihrem Team.",
        "Deutschkenntnisse ab B1-Niveau reichen oft aus f\xfcr einen erfolgreichen Ausbildungsstart.",
        "Die beste Bewerbungszeit ist 6-9 Monate vor dem gew\xfcnschten Ausbildungsbeginn.",
        "Bieten Sie Visum-Unterst\xfctzung an – das macht Ihr Angebot deutlich attraktiver f\xfcr internationale Bewerber.",
        "Detaillierte Stellenbeschreibungen mit klaren Anforderungen f\xfchren zu passgenderen Bewerbungen.",
        "Videointerview-Optionen erleichtern internationale Bewerbern den ersten Kontakt.",
        "Ein strukturiertes Onboarding-Programm erh\xf6ht die Erfolgsquote bei internationalen Azubis deutlich.",
        "Viele internationale Azubis bleiben langfristig – die Bindung ist oft st\xe4rker als bei lokalen Bewerbern.",
        "Unterk\xfcnfte in Firmenn\xe4he zu vermitteln erleichtert internationalen Azubis den Einstieg enorm.",
        "Schnelle R\xfcckmeldungen auf Bewerbungen (max. 5 Tage) sind entscheidend im Wettbewerb um Talente.",
        "Ein Mentor-System mit deutschen Kollegen beschleunigt die Integration internationaler Azubis.",
        "Die Anerkennung ausl\xe4ndischer Bildungsabschl\xfcsse ist einfacher als viele denken – wir unterst\xfctzen dabei.",
        "Internationale Azubis zeigen oft h\xf6here Motivation und Leistungsbereitschaft.",
        "Flexibilit\xe4t bei Probearbeitszeiten (virtuell m\xf6glich) \xf6ffnet Ihnen den Zugang zu mehr Kandidaten.",
        "Positive Bewertungen bisheriger internationaler Azubis wirken als st\xe4rkster Recruiting-Magnet.",
        "Die durchschnittliche Bearbeitungszeit f\xfcr Visa betr\xe4gt 6-12 Wochen – planen Sie entsprechend.",
        "Transparenz bei Verg\xfctung und Zusatzleistungen erh\xf6ht Ihre Bewerberzahl um bis zu 40%.",
        "Regelm\xe4\xdfige Feedbackgespr\xe4che sind besonders wichtig f\xfcr internationale Azubis in der Eingew\xf6hnungsphase.",
        "Kulturelle Sensibilit\xe4t im Team schafft ein Arbeitsumfeld, in dem alle erfolgreich sein k\xf6nnen.",
        "Investitionen in Sprachf\xf6rderung zahlen sich durch bessere Arbeitsleistung mehrfach aus.",
      ];
      function E() {
        var e;
        let s = (0, r.createClientComponentClient)(),
          i = (0, w.useRouter)(),
          { currentEmployer: _, employerId: E, isLoading: I } = (0, D.B)(),
          [V, q] = (0, a.useState)(!0),
          [T, M] = (0, a.useState)(null),
          [J, O] = (0, a.useState)({
            activeJobs: 0,
            draftJobs: 0,
            totalApplications: 0,
            newApplications: 0,
            profileViewsLast7Days: 0,
            totalHires: 0,
          }),
          [C, K] = (0, a.useState)([]),
          [L, F] = (0, a.useState)(0),
          [H, R] = (0, a.useState)(!0),
          [W, G] = (0, a.useState)(!1),
          [U, Z] = (0, a.useState)(0),
          [$, Q] = (0, a.useState)(null);
        (0, a.useEffect)(() => {
          (!I && E && X(), F(Math.floor(Math.random() * P.length)));
          let e = setInterval(() => {
            H && Y();
          }, 3e4);
          return () => clearInterval(e);
        }, [H, E, I]);
        let X = async () => {
            try {
              if (!E) return;
              let { data: e } = await s
                .from("employer_profiles")
                .select("*")
                .eq("id", E)
                .single();
              if (e) {
                M(e);
                let i = new Date(e.created_at),
                  t = new Date(),
                  a = Math.abs(t.getTime() - i.getTime()),
                  r = Math.max(1, Math.ceil(a / 864e5));
                Z(r);
                let { count: n } = await s
                    .from("job_postings")
                    .select("*", { count: "exact", head: !0 })
                    .eq("employer_id", E)
                    .eq("status", "active"),
                  { count: l } = await s
                    .from("job_postings")
                    .select("*", { count: "exact", head: !0 })
                    .eq("employer_id", E)
                    .eq("status", "draft"),
                  { count: d } = await s
                    .from("job_applications")
                    .select("*", { count: "exact", head: !0 })
                    .eq("employer_id", E),
                  c = new Date();
                c.setDate(c.getDate() - 7);
                let { count: o } = await s
                    .from("job_applications")
                    .select("*", { count: "exact", head: !0 })
                    .eq("employer_id", E)
                    .gte("applied_at", c.toISOString()),
                  { count: m } = await s
                    .from("profile_views")
                    .select("*", { count: "exact", head: !0 })
                    .eq("employer_id", E)
                    .gte("viewed_at", c.toISOString());
                O({
                  activeJobs: n || 0,
                  draftJobs: l || 0,
                  totalApplications: d || 0,
                  newApplications: o || 0,
                  profileViewsLast7Days: m || 0,
                  totalHires: e.total_hires_made || 0,
                });
                let { data: h } = await s
                  .from("job_applications")
                  .select(
                    "\n            id,\n            applied_at,\n            status,\n            job_postings (title_de),\n            user_profiles (full_name)\n          ",
                  )
                  .eq("employer_id", E)
                  .order("applied_at", { ascending: !1 })
                  .limit(5);
                if ((h && K(h), !e.is_verified)) {
                  let { data: e } = await fetch(
                    "/api/arbeitgeber/profile/verification-status?employerId=".concat(
                      E,
                    ),
                  )
                    .then((e) => e.json())
                    .catch(() => ({ data: null }));
                  (null == e ? void 0 : e.success) && Q(e.verification);
                }
              }
              q(!1);
            } catch (e) {
              (console.error("Error loading dashboard data:", e), q(!1));
            }
          },
          Y = () => {
            (G(!0),
              setTimeout(() => {
                let e;
                do e = Math.floor(Math.random() * P.length);
                while (e === L && P.length > 1);
                (F(e), G(!1));
              }, 300));
          };
        return I
          ? (0, t.jsx)(B.O2, {})
          : E && _
            ? V
              ? (0, t.jsx)(B.O2, {})
              : (0, t.jsx)("div", {
                  className: "w-full",
                  children: (0, t.jsxs)("div", {
                    className: "relative space-y-6",
                    children: [
                      (0, t.jsx)(n.P.div, {
                        initial: { opacity: 0 },
                        animate: { opacity: 1 },
                        transition: { duration: 0.4 },
                        children: (0, t.jsxs)("div", {
                          className: "flex items-center justify-between mb-2",
                          children: [
                            (0, t.jsxs)("div", {
                              className: "flex items-center gap-4",
                              children: [
                                (0, t.jsx)("div", {
                                  className:
                                    "relative w-16 h-16 md:w-20 md:h-20 rounded-xl overflow-hidden bg-white border-2 border-primary/10 shadow-sm flex items-center justify-center",
                                  children: (
                                    null == T ? void 0 : T.company_logo_url
                                  )
                                    ? (0, t.jsx)("img", {
                                        src: T.company_logo_url,
                                        alt: "".concat(T.company_name, " Logo"),
                                        className: "w-full h-full object-cover",
                                      })
                                    : (0, t.jsx)(d.A, {
                                        className: "h-10 w-10 text-primary",
                                      }),
                                }),
                                (0, t.jsxs)("div", {
                                  children: [
                                    (0, t.jsxs)(z.D, {
                                      level: 1,
                                      size: "compact",
                                      variant: "default",
                                      className: "mb-1",
                                      children: [
                                        "Willkommen zur\xfcck, ",
                                        null == T ? void 0 : T.company_name,
                                        "!",
                                      ],
                                    }),
                                    (0, t.jsxs)(A.f, {
                                      className:
                                        "text-muted-foreground leading-relaxed",
                                      children: [
                                        "Tag ",
                                        U,
                                        " als Arbeitgeber auf GoAusbildung",
                                      ],
                                    }),
                                  ],
                                }),
                              ],
                            }),
                            (0, t.jsxs)("div", {
                              className:
                                "hidden md:flex items-center gap-2 px-4 py-2 rounded-full bg-card border border-border",
                              children: [
                                (0, t.jsx)(c.A, {
                                  className: "h-4 w-4 text-primary",
                                }),
                                (0, t.jsx)("span", {
                                  className:
                                    "text-sm font-medium text-secondary",
                                  children: (null == T ? void 0 : T.is_verified)
                                    ? "Verifiziert"
                                    : "In Pr\xfcfung",
                                }),
                              ],
                            }),
                          ],
                        }),
                      }),
                      !(null == T ? void 0 : T.is_verified) &&
                        $ &&
                        (0, t.jsx)(n.P.div, {
                          initial: { opacity: 0, y: -20 },
                          animate: { opacity: 1, y: 0 },
                          transition: { duration: 0.4, delay: 0.1 },
                          children: (0, t.jsx)("div", {
                            className:
                              "p-5 rounded-xl bg-gradient-to-r from-orange-50 to-amber-50 border-2 border-primary/20 shadow-md",
                            children: (0, t.jsxs)("div", {
                              className: "flex items-start gap-4",
                              children: [
                                (0, t.jsx)("div", {
                                  className:
                                    "p-3 rounded-xl bg-white shadow-sm",
                                  children: (0, t.jsx)(o.A, {
                                    className: "h-6 w-6 text-primary",
                                  }),
                                }),
                                (0, t.jsxs)("div", {
                                  className: "flex-1",
                                  children: [
                                    (0, t.jsxs)("div", {
                                      className:
                                        "flex items-start justify-between gap-4 mb-3",
                                      children: [
                                        (0, t.jsxs)("div", {
                                          children: [
                                            (0, t.jsx)("h3", {
                                              className:
                                                "text-lg font-bold text-secondary mb-1",
                                              children:
                                                "Vervollst\xe4ndigen Sie Ihre Verifizierung",
                                            }),
                                            (0, t.jsxs)("p", {
                                              className:
                                                "text-sm text-muted-foreground",
                                              children: [
                                                "Noch ",
                                                (null ===
                                                  (e =
                                                    $.missing_requirements) ||
                                                void 0 === e
                                                  ? void 0
                                                  : e.length) || 0,
                                                " Felder erforderlich • Erhalten Sie 3x mehr qualifizierte Bewerbungen",
                                              ],
                                            }),
                                          ],
                                        }),
                                        (0, t.jsxs)(y.$, {
                                          onClick: () =>
                                            i.push(
                                              "/arbeitgeber/einstellungen?tab=company",
                                            ),
                                          className: "whitespace-nowrap",
                                          children: [
                                            "Jetzt vervollst\xe4ndigen",
                                            (0, t.jsx)(m.A, {
                                              className: "ml-2 h-4 w-4",
                                            }),
                                          ],
                                        }),
                                      ],
                                    }),
                                    (0, t.jsxs)("div", {
                                      className: "space-y-2",
                                      children: [
                                        (0, t.jsxs)("div", {
                                          className:
                                            "flex items-center justify-between text-sm",
                                          children: [
                                            (0, t.jsxs)("span", {
                                              className:
                                                "font-medium text-secondary",
                                              children: [
                                                "Profilfortschritt: ",
                                                $.profile_completeness,
                                                "%",
                                              ],
                                            }),
                                            (0, t.jsx)("span", {
                                              className: (0, S.cn)(
                                                "font-semibold",
                                                $.is_verification_eligible
                                                  ? "text-green-600"
                                                  : "text-orange-600",
                                              ),
                                              children:
                                                $.is_verification_eligible
                                                  ? "Bereit zur Verifizierung!"
                                                  : "Noch nicht bereit",
                                            }),
                                          ],
                                        }),
                                        (0, t.jsx)("div", {
                                          className:
                                            "h-2.5 bg-white rounded-full overflow-hidden shadow-inner",
                                          children: (0, t.jsx)(n.P.div, {
                                            initial: { width: 0 },
                                            animate: {
                                              width: "".concat(
                                                $.profile_completeness,
                                                "%",
                                              ),
                                            },
                                            transition: {
                                              duration: 0.8,
                                              ease: "easeOut",
                                            },
                                            className: (0, S.cn)(
                                              "h-full rounded-full",
                                              $.is_verification_eligible
                                                ? "bg-green-500"
                                                : "bg-primary",
                                            ),
                                          }),
                                        }),
                                      ],
                                    }),
                                    (0, t.jsxs)("div", {
                                      className:
                                        "mt-4 grid grid-cols-1 md:grid-cols-3 gap-3",
                                      children: [
                                        (0, t.jsxs)("div", {
                                          className:
                                            "flex items-center gap-2 text-sm",
                                          children: [
                                            (0, t.jsx)(h.A, {
                                              className:
                                                "h-4 w-4 text-green-600 flex-shrink-0",
                                            }),
                                            (0, t.jsx)("span", {
                                              className: "text-secondary",
                                              children:
                                                "Stellen ver\xf6ffentlichen",
                                            }),
                                          ],
                                        }),
                                        (0, t.jsxs)("div", {
                                          className:
                                            "flex items-center gap-2 text-sm",
                                          children: [
                                            (0, t.jsx)(h.A, {
                                              className:
                                                "h-4 w-4 text-green-600 flex-shrink-0",
                                            }),
                                            (0, t.jsx)("span", {
                                              className: "text-secondary",
                                              children:
                                                "Kandidaten kontaktieren",
                                            }),
                                          ],
                                        }),
                                        (0, t.jsxs)("div", {
                                          className:
                                            "flex items-center gap-2 text-sm",
                                          children: [
                                            (0, t.jsx)(h.A, {
                                              className:
                                                "h-4 w-4 text-green-600 flex-shrink-0",
                                            }),
                                            (0, t.jsx)("span", {
                                              className: "text-secondary",
                                              children: "Volle Profilzugriffe",
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
                      (0, t.jsx)(l.N, {
                        children:
                          H &&
                          (0, t.jsx)(n.P.div, {
                            initial: { opacity: 0 },
                            animate: { opacity: 1 },
                            exit: { opacity: 0 },
                            transition: { duration: 0.3 },
                            className:
                              "p-4 rounded-xl bg-beige border border-border shadow-sm relative",
                            children: (0, t.jsxs)("div", {
                              className: "flex items-start gap-3",
                              children: [
                                (0, t.jsx)("div", {
                                  className: "p-2 rounded-lg bg-primary",
                                  children: (0, t.jsx)(x.A, {
                                    className: "h-5 w-5 text-white",
                                  }),
                                }),
                                (0, t.jsxs)("div", {
                                  className: "flex-1",
                                  children: [
                                    (0, t.jsxs)("div", {
                                      className:
                                        "flex items-center justify-between mb-1",
                                      children: [
                                        (0, t.jsx)(z.D, {
                                          level: 6,
                                          size: "compact",
                                          className: "uppercase tracking-wider",
                                          children: "Tipp f\xfcr Arbeitgeber",
                                        }),
                                        (0, t.jsxs)("div", {
                                          className: "flex items-center gap-1",
                                          children: [
                                            (0, t.jsx)("button", {
                                              onClick: Y,
                                              disabled: W,
                                              className:
                                                "p-2.5 hover:bg-cream rounded-full transition-all duration-300 disabled:opacity-50 min-w-[44px] min-h-[44px] flex items-center justify-center",
                                              "aria-label": "Neuer Tipp",
                                              children: (0, t.jsx)(u.A, {
                                                className: (0, S.cn)(
                                                  "h-4 w-4 text-primary transition-transform duration-500",
                                                  W && "animate-spin",
                                                ),
                                              }),
                                            }),
                                            (0, t.jsx)("button", {
                                              onClick: () => R(!1),
                                              className:
                                                "p-2.5 hover:bg-cream rounded-full transition-all duration-300 min-w-[44px] min-h-[44px] flex items-center justify-center",
                                              "aria-label": "Tipp schlie\xdfen",
                                              children: (0, t.jsx)(p.A, {
                                                className:
                                                  "h-4 w-4 text-muted-foreground hover:text-destructive transition-colors",
                                              }),
                                            }),
                                          ],
                                        }),
                                      ],
                                    }),
                                    (0, t.jsx)(l.N, {
                                      mode: "wait",
                                      children: (0, t.jsx)(
                                        n.P.div,
                                        {
                                          initial: { opacity: 0 },
                                          animate: { opacity: 1 },
                                          exit: { opacity: 0 },
                                          transition: { duration: 0.3 },
                                          children: (0, t.jsx)(A.f, {
                                            size: "sm",
                                            className:
                                              "text-secondary min-h-[2.5rem]",
                                            children: P[L],
                                          }),
                                        },
                                        L,
                                      ),
                                    }),
                                  ],
                                }),
                              ],
                            }),
                          }),
                      }),
                      (0, t.jsxs)("div", {
                        className: "grid md:grid-cols-2 gap-6",
                        children: [
                          (0, t.jsx)(n.P.div, {
                            initial: { opacity: 0 },
                            animate: { opacity: 1 },
                            transition: { duration: 0.5, delay: 0.1 },
                            whileHover: { scale: 1.02 },
                            className: "relative group",
                            children: (0, t.jsx)(k(), {
                              href: "/arbeitgeber/jobs/neu",
                              children: (0, t.jsx)("div", {
                                className:
                                  "relative overflow-hidden rounded-xl p-6 cursor-pointer transition-all bg-primary text-white shadow-lg hover:shadow-xl",
                                children: (0, t.jsxs)("div", {
                                  className: "relative z-10",
                                  children: [
                                    (0, t.jsx)("div", {
                                      className:
                                        "flex items-start justify-between mb-4",
                                      children: (0, t.jsx)("div", {
                                        className: "p-3 rounded-lg bg-white/20",
                                        children: (0, t.jsx)(f.A, {
                                          className: "h-6 w-6",
                                        }),
                                      }),
                                    }),
                                    (0, t.jsx)(z.D, {
                                      level: 3,
                                      size: "compact",
                                      className: "mb-2 text-white",
                                      children:
                                        "Neue Stelle ver\xf6ffentlichen",
                                    }),
                                    (0, t.jsx)(A.f, {
                                      size: "sm",
                                      className:
                                        "opacity-90 mb-4 h-10 text-white",
                                      children:
                                        "Erstellen Sie eine neue Ausbildungsstellen-Anzeige",
                                    }),
                                    (0, t.jsxs)("div", {
                                      className:
                                        "flex items-center gap-2 text-sm font-medium",
                                      children: [
                                        (0, t.jsx)("span", {
                                          children: "Stelle erstellen",
                                        }),
                                        (0, t.jsx)(m.A, {
                                          className:
                                            "h-4 w-4 group-hover:translate-x-1 transition-transform",
                                        }),
                                      ],
                                    }),
                                  ],
                                }),
                              }),
                            }),
                          }),
                          (0, t.jsx)(n.P.div, {
                            initial: { opacity: 0 },
                            animate: { opacity: 1 },
                            transition: { duration: 0.5, delay: 0.2 },
                            whileHover: { scale: 1.02 },
                            className: "relative group",
                            children: (0, t.jsx)(k(), {
                              href: "/arbeitgeber/kandidaten",
                              children: (0, t.jsx)("div", {
                                className:
                                  "relative overflow-hidden rounded-xl p-6 cursor-pointer transition-all bg-secondary text-white shadow-lg hover:shadow-xl",
                                children: (0, t.jsxs)("div", {
                                  className: "relative z-10",
                                  children: [
                                    (0, t.jsx)("div", {
                                      className:
                                        "flex items-start justify-between mb-4",
                                      children: (0, t.jsx)("div", {
                                        className: "p-3 rounded-lg bg-white/20",
                                        children: (0, t.jsx)(b.A, {
                                          className: "h-6 w-6",
                                        }),
                                      }),
                                    }),
                                    (0, t.jsx)(z.D, {
                                      level: 3,
                                      size: "compact",
                                      className: "mb-2 text-white",
                                      children: "Kandidaten suchen",
                                    }),
                                    (0, t.jsx)(A.f, {
                                      size: "sm",
                                      className:
                                        "opacity-90 mb-4 h-10 text-white",
                                      children:
                                        "Durchsuchen Sie qualifizierte Bewerber",
                                    }),
                                    (0, t.jsxs)("div", {
                                      className:
                                        "flex items-center gap-2 text-sm font-medium",
                                      children: [
                                        (0, t.jsx)("span", {
                                          children: "Suche starten",
                                        }),
                                        (0, t.jsx)(m.A, {
                                          className:
                                            "h-4 w-4 group-hover:translate-x-1 transition-transform",
                                        }),
                                      ],
                                    }),
                                  ],
                                }),
                              }),
                            }),
                          }),
                        ],
                      }),
                      (0, t.jsxs)(n.P.div, {
                        initial: { opacity: 0 },
                        animate: { opacity: 1 },
                        transition: { duration: 0.5, delay: 0.3 },
                        className: "grid grid-cols-2 md:grid-cols-4 gap-4",
                        children: [
                          (0, t.jsx)(k(), {
                            href: "/arbeitgeber/jobs",
                            children: (0, t.jsxs)("div", {
                              className:
                                "relative p-4 md:p-5 rounded-xl bg-card border border-border shadow-sm hover:shadow-md transition-all cursor-pointer min-h-[120px] flex flex-col justify-between",
                              children: [
                                (0, t.jsxs)("div", {
                                  className:
                                    "flex items-center justify-between mb-2",
                                  children: [
                                    (0, t.jsx)("span", {
                                      className:
                                        "text-xs text-muted-foreground",
                                      children: "Aktive Stellen",
                                    }),
                                    (0, t.jsx)(d.A, {
                                      className: "h-4 w-4 text-primary",
                                    }),
                                  ],
                                }),
                                (0, t.jsx)("p", {
                                  className: "text-xl font-bold text-secondary",
                                  children: J.activeJobs,
                                }),
                                (0, t.jsxs)("p", {
                                  className:
                                    "text-xs text-muted-foreground mt-1",
                                  children: [J.draftJobs, " Entw\xfcrfe"],
                                }),
                              ],
                            }),
                          }),
                          (0, t.jsx)(k(), {
                            href: "/arbeitgeber/bewerbungen",
                            children: (0, t.jsxs)("div", {
                              className:
                                "relative p-4 md:p-5 rounded-xl bg-card border border-border shadow-sm hover:shadow-md transition-all cursor-pointer min-h-[120px] flex flex-col justify-between",
                              children: [
                                (0, t.jsxs)("div", {
                                  className:
                                    "flex items-center justify-between mb-2",
                                  children: [
                                    (0, t.jsx)("span", {
                                      className:
                                        "text-xs text-muted-foreground",
                                      children: "Bewerbungen",
                                    }),
                                    (0, t.jsx)(g.A, {
                                      className: "h-4 w-4 text-primary",
                                    }),
                                  ],
                                }),
                                (0, t.jsx)("p", {
                                  className: "text-xl font-bold text-secondary",
                                  children: J.totalApplications,
                                }),
                                (0, t.jsxs)("p", {
                                  className:
                                    "text-xs text-muted-foreground mt-1",
                                  children: [J.newApplications, " neu"],
                                }),
                              ],
                            }),
                          }),
                          (0, t.jsxs)("div", {
                            className:
                              "relative p-4 md:p-5 rounded-xl bg-card border border-border shadow-sm hover:shadow-md transition-shadow min-h-[120px] flex flex-col justify-between",
                            children: [
                              (0, t.jsxs)("div", {
                                className:
                                  "flex items-center justify-between mb-2",
                                children: [
                                  (0, t.jsx)("span", {
                                    className: "text-xs text-muted-foreground",
                                    children: "Profilansichten",
                                  }),
                                  (0, t.jsx)(j.A, {
                                    className: "h-4 w-4 text-primary",
                                  }),
                                ],
                              }),
                              (0, t.jsx)("p", {
                                className: "text-xl font-bold text-secondary",
                                children: J.profileViewsLast7Days,
                              }),
                              (0, t.jsx)("p", {
                                className: "text-xs text-muted-foreground mt-1",
                                children: "Letzte 7 Tage",
                              }),
                            ],
                          }),
                          (0, t.jsxs)("div", {
                            className:
                              "relative p-4 md:p-5 rounded-xl bg-card border border-border shadow-sm hover:shadow-md transition-shadow min-h-[120px] flex flex-col justify-between",
                            children: [
                              (0, t.jsxs)("div", {
                                className:
                                  "flex items-center justify-between mb-2",
                                children: [
                                  (0, t.jsx)("span", {
                                    className: "text-xs text-muted-foreground",
                                    children: "Einstellungen",
                                  }),
                                  (0, t.jsx)(v.A, {
                                    className: "h-4 w-4 text-secondary",
                                  }),
                                ],
                              }),
                              (0, t.jsx)("p", {
                                className: "text-xl font-bold text-secondary",
                                children: J.totalHires,
                              }),
                              (0, t.jsx)("p", {
                                className: "text-xs text-muted-foreground mt-1",
                                children: "Gesamt",
                              }),
                            ],
                          }),
                        ],
                      }),
                      (0, t.jsxs)("div", {
                        className: "grid md:grid-cols-2 gap-6",
                        children: [
                          (0, t.jsxs)(n.P.div, {
                            initial: { opacity: 0 },
                            animate: { opacity: 1 },
                            transition: { duration: 0.5, delay: 0.4 },
                            className:
                              "p-6 rounded-xl bg-card border border-border shadow-sm",
                            children: [
                              (0, t.jsxs)(z.D, {
                                level: 3,
                                size: "compact",
                                className: "mb-4 flex items-center gap-2",
                                children: [
                                  (0, t.jsx)(c.A, {
                                    className: "h-4 w-4 text-primary",
                                  }),
                                  "Letzte Bewerbungen",
                                ],
                              }),
                              (0, t.jsx)("div", {
                                className: "space-y-3",
                                children:
                                  C.length > 0
                                    ? C.map((e) => {
                                        var s, i;
                                        return (0, t.jsxs)(
                                          "div",
                                          {
                                            className:
                                              "flex items-start gap-3 py-2",
                                            children: [
                                              (0, t.jsx)("div", {
                                                className:
                                                  "mt-1 p-2 rounded-full bg-beige min-w-[32px] min-h-[32px] flex items-center justify-center",
                                                children: (0, t.jsx)(h.A, {
                                                  className:
                                                    "h-4 w-4 text-primary",
                                                }),
                                              }),
                                              (0, t.jsxs)("div", {
                                                className: "flex-1",
                                                children: [
                                                  (0, t.jsxs)(A.f, {
                                                    size: "sm",
                                                    children: [
                                                      (null ===
                                                        (s = e.user_profiles) ||
                                                      void 0 === s
                                                        ? void 0
                                                        : s.full_name) ||
                                                        "Bewerber",
                                                      " hat sich beworben",
                                                    ],
                                                  }),
                                                  (0, t.jsx)(A.f, {
                                                    size: "sm",
                                                    className:
                                                      "text-muted-foreground",
                                                    children:
                                                      (null ===
                                                        (i = e.job_postings) ||
                                                      void 0 === i
                                                        ? void 0
                                                        : i.title_de) ||
                                                      "Position",
                                                  }),
                                                ],
                                              }),
                                            ],
                                          },
                                          e.id,
                                        );
                                      })
                                    : (0, t.jsx)(A.f, {
                                        size: "sm",
                                        className:
                                          "text-muted-foreground text-center py-4",
                                        children:
                                          "Noch keine Bewerbungen vorhanden",
                                      }),
                              }),
                              C.length > 0 &&
                                (0, t.jsx)(k(), {
                                  href: "/arbeitgeber/bewerbungen",
                                  children: (0, t.jsx)(y.$, {
                                    variant: "outline",
                                    className:
                                      "w-full mt-4 rounded-full min-h-[44px]",
                                    children: "Alle Bewerbungen ansehen",
                                  }),
                                }),
                            ],
                          }),
                          (0, t.jsxs)(n.P.div, {
                            initial: { opacity: 0 },
                            animate: { opacity: 1 },
                            transition: { duration: 0.5, delay: 0.5 },
                            className:
                              "p-6 rounded-xl bg-card border border-border shadow-sm",
                            children: [
                              (0, t.jsxs)(z.D, {
                                level: 3,
                                size: "compact",
                                className: "mb-4 flex items-center gap-2",
                                children: [
                                  (0, t.jsx)(N.A, {
                                    className: "h-4 w-4 text-primary",
                                  }),
                                  "Empfohlene Aktionen",
                                ],
                              }),
                              (0, t.jsxs)("div", {
                                className: "space-y-3",
                                children: [
                                  0 === J.activeJobs &&
                                    (0, t.jsx)(k(), {
                                      href: "/arbeitgeber/jobs/neu",
                                      className: "block",
                                      children: (0, t.jsxs)("div", {
                                        className:
                                          "flex items-center gap-3 cursor-pointer hover:opacity-80 transition-opacity py-2 min-h-[56px]",
                                        children: [
                                          (0, t.jsx)("div", {
                                            className:
                                              "p-2.5 rounded-lg bg-beige min-w-[36px] min-h-[36px] flex items-center justify-center",
                                            children: (0, t.jsx)("span", {
                                              className:
                                                "text-xs font-bold text-primary",
                                              children: "1",
                                            }),
                                          }),
                                          (0, t.jsxs)("div", {
                                            className: "flex-1",
                                            children: [
                                              (0, t.jsx)(A.f, {
                                                size: "sm",
                                                className: "font-medium",
                                                children:
                                                  "Erste Stelle ver\xf6ffentlichen",
                                              }),
                                              (0, t.jsx)(A.f, {
                                                size: "sm",
                                                className:
                                                  "text-muted-foreground",
                                                children:
                                                  "Erreichen Sie qualifizierte Kandidaten",
                                              }),
                                            ],
                                          }),
                                          (0, t.jsx)(m.A, {
                                            className:
                                              "h-4 w-4 text-muted-foreground",
                                          }),
                                        ],
                                      }),
                                    }),
                                  (0, t.jsx)(k(), {
                                    href: "/arbeitgeber/kandidaten",
                                    className: "block",
                                    children: (0, t.jsxs)("div", {
                                      className:
                                        "flex items-center gap-3 cursor-pointer hover:opacity-80 transition-opacity py-2 min-h-[56px]",
                                      children: [
                                        (0, t.jsx)("div", {
                                          className:
                                            "p-2.5 rounded-lg bg-beige min-w-[36px] min-h-[36px] flex items-center justify-center",
                                          children: (0, t.jsx)("span", {
                                            className:
                                              "text-xs font-bold text-primary",
                                            children:
                                              0 === J.activeJobs ? "2" : "1",
                                          }),
                                        }),
                                        (0, t.jsxs)("div", {
                                          className: "flex-1",
                                          children: [
                                            (0, t.jsx)(A.f, {
                                              size: "sm",
                                              className: "font-medium",
                                              children:
                                                "Kandidaten durchsuchen",
                                            }),
                                            (0, t.jsx)(A.f, {
                                              size: "sm",
                                              className:
                                                "text-muted-foreground",
                                              children:
                                                "Finden Sie passende Bewerber",
                                            }),
                                          ],
                                        }),
                                        (0, t.jsx)(m.A, {
                                          className:
                                            "h-4 w-4 text-muted-foreground",
                                        }),
                                      ],
                                    }),
                                  }),
                                  (0, t.jsx)(k(), {
                                    href: "/arbeitgeber/einstellungen/firma",
                                    className: "block",
                                    children: (0, t.jsxs)("div", {
                                      className:
                                        "flex items-center gap-3 cursor-pointer hover:opacity-80 transition-opacity py-2 min-h-[56px]",
                                      children: [
                                        (0, t.jsx)("div", {
                                          className:
                                            "p-2.5 rounded-lg bg-beige min-w-[36px] min-h-[36px] flex items-center justify-center",
                                          children: (0, t.jsx)("span", {
                                            className:
                                              "text-xs font-bold text-primary",
                                            children:
                                              0 === J.activeJobs ? "3" : "2",
                                          }),
                                        }),
                                        (0, t.jsxs)("div", {
                                          className: "flex-1",
                                          children: [
                                            (0, t.jsx)(A.f, {
                                              size: "sm",
                                              className: "font-medium",
                                              children:
                                                "Firmenprofil vervollst\xe4ndigen",
                                            }),
                                            (0, t.jsx)(A.f, {
                                              size: "sm",
                                              className:
                                                "text-muted-foreground",
                                              children:
                                                "Verbessern Sie Ihre Sichtbarkeit",
                                            }),
                                          ],
                                        }),
                                        (0, t.jsx)(m.A, {
                                          className:
                                            "h-4 w-4 text-muted-foreground",
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
                    ],
                  }),
                })
            : null;
      }
    },
    69638: (e, s, i) => {
      Promise.resolve().then(i.bind(i, 51388));
    },
  },
  (e) => {
    var s = (s) => e((e.s = s));
    (e.O(0, [46593, 36209, 84121, 72076, 77358], () => s(69638)),
      (_N_E = e.O()));
  },
]);
