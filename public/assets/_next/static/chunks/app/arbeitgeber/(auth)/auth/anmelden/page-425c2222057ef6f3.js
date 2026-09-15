(self.webpackChunk_N_E = self.webpackChunk_N_E || []).push([
  [38917],
  {
    51575: (e, s, r) => {
      "use strict";
      (r.r(s), r.d(s, { default: () => j }));
      var t = r(70207),
        a = r(87223),
        i = r(54604),
        l = r(18051),
        n = r(45748),
        o = r(54459),
        d = r(54928),
        c = r(31159),
        m = r(95540),
        u = r(69312),
        h = r(1904),
        p = r(61280),
        x = r(46031),
        f = r(10542),
        g = r.n(f),
        b = r(84321);
      function y() {
        let e = (0, l.useRouter)(),
          s = (0, l.useSearchParams)(),
          r = (0, i.createClientComponentClient)(),
          [f, y] = (0, a.useState)(!1),
          [j, v] = (0, a.useState)(!1),
          [w, N] = (0, a.useState)(!1),
          [A, _] = (0, a.useState)(!0),
          [S, k] = (0, a.useState)({ email: "", password: "" });
        ((0, a.useEffect)(() => {
          (async () => {
            try {
              let {
                data: { session: s },
              } = await r.auth.getSession();
              if (s) {
                let { data: t } = await r
                  .from("employer_profiles")
                  .select("is_verified")
                  .eq("user_id", s.user.id)
                  .maybeSingle();
                if (t) e.push("/arbeitgeber/dashboard");
                else {
                  let { data: t } = await r
                    .from("employer_team_members")
                    .select("employer_id")
                    .eq("user_id", s.user.id)
                    .eq("status", "active")
                    .limit(1)
                    .maybeSingle();
                  t ? e.push("/arbeitgeber/dashboard") : _(!1);
                }
              } else _(!1);
            } catch (e) {
              (console.error("Error checking auth:", e), _(!1));
            }
          })();
        }, [r, e]),
          (0, a.useEffect)(() => {
            if ("invalid_email_domain" === s.get("error")) {
              d.oR.error("Gesch\xe4ftliche E-Mail erforderlich", {
                description:
                  "Bitte verwenden Sie keine privaten E-Mail-Adressen wie Gmail, Yahoo oder Hotmail. Nutzen Sie eine E-Mail-Adresse Ihres Unternehmens (z.B. name@firma.de).",
                duration: 8e3,
              });
              let e = window.location.pathname;
              window.history.replaceState({}, "", e);
            }
          }, [s]));
        let z = (e, s) => {
            k((r) => ({ ...r, [e]: s }));
          },
          C = async () => {
            try {
              v(!0);
              let e = "".concat(
                  window.location.origin,
                  "/arbeitgeber/auth/callback",
                ),
                { error: s, data: t } = await r.auth.signInWithOAuth({
                  provider: "google",
                  options: {
                    redirectTo: e,
                    queryParams: { access_type: "offline", prompt: "consent" },
                  },
                });
              (s &&
                (d.oR.error(
                  "Google-Anmeldung fehlgeschlagen. Bitte versuchen Sie es erneut.",
                ),
                console.error("Google sign-in error:", s),
                v(!1)),
                null == t || t.url);
            } catch (e) {
              (console.error("Google OAuth error:", e),
                d.oR.error(e.message || "Google-Anmeldung fehlgeschlagen"),
                v(!1));
            }
          },
          E = async (s) => {
            if ((s.preventDefault(), !S.email || !S.password)) {
              d.oR.error("Bitte f\xfcllen Sie alle Felder aus");
              return;
            }
            y(!0);
            try {
              let { data: s, error: t } = await r.auth.signInWithPassword({
                email: S.email,
                password: S.password,
              });
              if (t) throw t;
              if (!s.user) throw Error("Anmeldung fehlgeschlagen");
              let { data: a } = await r
                .from("employer_profiles")
                .select("is_verified")
                .eq("user_id", s.user.id)
                .maybeSingle();
              if (!a) {
                let { data: t } = await r
                  .from("employer_team_members")
                  .select("employer_id")
                  .eq("user_id", s.user.id)
                  .eq("status", "active")
                  .limit(1)
                  .maybeSingle();
                if (!t) {
                  (await r.auth.signOut(),
                    d.oR.error("Kein Arbeitgeber-Konto gefunden"));
                  return;
                }
                (d.oR.success("Erfolgreich angemeldet!"),
                  e.push("/arbeitgeber/dashboard"));
                return;
              }
              if (!a.is_verified) {
                e.push("/arbeitgeber/auth/wartend");
                return;
              }
              (d.oR.success("Erfolgreich angemeldet!"),
                e.push("/arbeitgeber/dashboard"));
            } catch (e) {
              (console.error("Login error:", e),
                d.oR.error(
                  e.message ||
                    "Anmeldung fehlgeschlagen. Bitte \xfcberpr\xfcfen Sie Ihre Zugangsdaten.",
                ));
            } finally {
              y(!1);
            }
          };
        return A
          ? (0, t.jsxs)("div", {
              className:
                "flex min-h-screen flex-col items-center justify-center p-4",
              children: [
                (0, t.jsx)(c.A, {
                  className: "h-8 w-8 animate-spin text-primary",
                }),
                (0, t.jsx)("p", {
                  className: "mt-4 text-muted-foreground",
                  children: "Authentifizierung wird \xfcberpr\xfcft...",
                }),
              ],
            })
          : (0, t.jsxs)("div", {
              className:
                "flex min-h-screen flex-col items-center justify-center p-4",
              children: [
                (0, t.jsx)(d.l$, {
                  position: "top-center",
                  toastOptions: {
                    style: {
                      background: "#ffffff",
                      color: "#1a1a1a",
                      border: "1px solid #e5e5e5",
                      boxShadow:
                        "0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -4px rgba(0, 0, 0, 0.1)",
                    },
                    className: "rounded-lg",
                    duration: 5e3,
                  },
                }),
                (0, t.jsxs)(n.P.div, {
                  initial: { opacity: 0, y: -20 },
                  animate: { opacity: 1, y: 0 },
                  transition: { duration: 0.5 },
                  className: "mb-8 text-center",
                  children: [
                    (0, t.jsx)("div", {
                      className: "flex justify-center mb-2",
                      children: (0, t.jsx)(b.Logo, {
                        iconSize: "lg",
                        showText: !0,
                      }),
                    }),
                    (0, t.jsx)("p", {
                      className: "mt-2 text-muted-foreground",
                      children: "Arbeitgeber-Anmeldung",
                    }),
                  ],
                }),
                (0, t.jsxs)("div", {
                  className: "w-full max-w-sm relative",
                  children: [
                    (0, t.jsx)(o.N, {
                      mode: "wait",
                      children: (0, t.jsxs)(
                        n.P.div,
                        {
                          variants: {
                            hidden: { opacity: 0, y: 20 },
                            visible: {
                              opacity: 1,
                              y: 0,
                              transition: {
                                duration: 0.5,
                                ease: [0.4, 0, 0.2, 1],
                              },
                            },
                            exit: {
                              opacity: 0,
                              y: -20,
                              transition: {
                                duration: 0.3,
                                ease: [0.4, 0, 0.2, 1],
                              },
                            },
                          },
                          initial: "hidden",
                          animate: "visible",
                          exit: "exit",
                          className:
                            "rounded-2xl border bg-card p-8 backdrop-blur-sm",
                          children: [
                            (0, t.jsx)("button", {
                              type: "button",
                              onClick: C,
                              disabled: j || f,
                              className:
                                "w-full rounded-lg border bg-background hover:bg-accent py-2.5 text-sm font-medium flex items-center justify-center gap-3 transition-colors disabled:opacity-50",
                              children: j
                                ? (0, t.jsx)(c.A, {
                                    className: "h-4 w-4 animate-spin",
                                  })
                                : (0, t.jsxs)(t.Fragment, {
                                    children: [
                                      (0, t.jsxs)("svg", {
                                        className: "h-5 w-5",
                                        viewBox: "0 0 24 24",
                                        children: [
                                          (0, t.jsx)("path", {
                                            fill: "#4285F4",
                                            d: "M22.56 12.25c0-.78-.07-1.53-.2-2.25H12v4.26h5.92c-.26 1.37-1.04 2.53-2.21 3.31v2.77h3.57c2.08-1.92 3.28-4.74 3.28-8.09z",
                                          }),
                                          (0, t.jsx)("path", {
                                            fill: "#34A853",
                                            d: "M12 23c2.97 0 5.46-.98 7.28-2.66l-3.57-2.77c-.98.66-2.23 1.06-3.71 1.06-2.86 0-5.29-1.93-6.16-4.53H2.18v2.84C3.99 20.53 7.7 23 12 23z",
                                          }),
                                          (0, t.jsx)("path", {
                                            fill: "#FBBC05",
                                            d: "M5.84 14.09c-.22-.66-.35-1.36-.35-2.09s.13-1.43.35-2.09V7.07H2.18C1.43 8.55 1 10.22 1 12s.43 3.45 1.18 4.93l2.85-2.22.81-.62z",
                                          }),
                                          (0, t.jsx)("path", {
                                            fill: "#EA4335",
                                            d: "M12 5.38c1.62 0 3.06.56 4.21 1.64l3.15-3.15C17.45 2.09 14.97 1 12 1 7.7 1 3.99 3.47 2.18 7.07l3.66 2.84c.87-2.6 3.3-4.53 6.16-4.53z",
                                          }),
                                        ],
                                      }),
                                      "Mit Google anmelden",
                                    ],
                                  }),
                            }),
                            (0, t.jsxs)("div", {
                              className: "relative my-6",
                              children: [
                                (0, t.jsx)("div", {
                                  className:
                                    "absolute inset-0 flex items-center",
                                  children: (0, t.jsx)("div", {
                                    className: "w-full border-t border-border",
                                  }),
                                }),
                                (0, t.jsx)("div", {
                                  className:
                                    "relative flex justify-center text-xs uppercase",
                                  children: (0, t.jsx)("span", {
                                    className:
                                      "bg-card px-2 text-muted-foreground",
                                    children: "Oder mit E-Mail fortfahren",
                                  }),
                                }),
                              ],
                            }),
                            (0, t.jsxs)("form", {
                              onSubmit: E,
                              className: "space-y-4",
                              children: [
                                (0, t.jsxs)("div", {
                                  className: "space-y-2",
                                  children: [
                                    (0, t.jsx)("label", {
                                      htmlFor: "email",
                                      className: "text-sm font-medium",
                                      children: "E-Mail-Adresse",
                                    }),
                                    (0, t.jsxs)("div", {
                                      className: "relative",
                                      children: [
                                        (0, t.jsx)(m.A, {
                                          size: 16,
                                          className:
                                            "absolute left-3 top-1/2 -translate-y-1/2 text-muted-foreground",
                                        }),
                                        (0, t.jsx)("input", {
                                          id: "email",
                                          type: "email",
                                          value: S.email,
                                          onChange: (e) =>
                                            z("email", e.target.value),
                                          placeholder: "ihre.email@firma.de",
                                          required: !0,
                                          className:
                                            "w-full rounded-lg border bg-background pl-10 pr-4 py-3 h-12 text-sm outline-none focus:ring-2 focus:ring-primary/20",
                                        }),
                                      ],
                                    }),
                                  ],
                                }),
                                (0, t.jsxs)("div", {
                                  className: "space-y-2",
                                  children: [
                                    (0, t.jsx)("label", {
                                      htmlFor: "password",
                                      className: "text-sm font-medium",
                                      children: "Passwort",
                                    }),
                                    (0, t.jsxs)("div", {
                                      className: "relative",
                                      children: [
                                        (0, t.jsx)(u.A, {
                                          size: 16,
                                          className:
                                            "absolute left-3 top-1/2 -translate-y-1/2 text-muted-foreground",
                                        }),
                                        (0, t.jsx)("input", {
                                          id: "password",
                                          type: w ? "text" : "password",
                                          value: S.password,
                                          onChange: (e) =>
                                            z("password", e.target.value),
                                          placeholder: "Ihr Passwort eingeben",
                                          required: !0,
                                          className:
                                            "w-full rounded-lg border bg-background pl-10 pr-12 py-3 h-12 text-sm outline-none focus:ring-2 focus:ring-primary/20",
                                        }),
                                        (0, t.jsx)("button", {
                                          type: "button",
                                          onClick: () => N(!w),
                                          className:
                                            "absolute right-2 top-1/2 -translate-y-1/2 text-muted-foreground hover:text-foreground p-2 min-w-[40px] min-h-[40px] flex items-center justify-center",
                                          tabIndex: -1,
                                          children: w
                                            ? (0, t.jsx)(h.A, {
                                                size: 16,
                                                className:
                                                  "opacity-70 hover:opacity-100",
                                              })
                                            : (0, t.jsx)(p.A, {
                                                size: 16,
                                                className:
                                                  "opacity-70 hover:opacity-100",
                                              }),
                                        }),
                                      ],
                                    }),
                                  ],
                                }),
                                (0, t.jsx)("button", {
                                  type: "submit",
                                  disabled: f,
                                  className:
                                    "relative w-full rounded-full bg-primary min-h-[48px] text-sm font-medium text-primary-foreground hover:bg-primary/90 focus:outline-none focus:ring-2 focus:ring-primary/20 disabled:opacity-80 flex items-center justify-center",
                                  children: f
                                    ? (0, t.jsx)(c.A, {
                                        className: "h-4 w-4 animate-spin",
                                      })
                                    : (0, t.jsxs)(t.Fragment, {
                                        children: [
                                          "Anmelden",
                                          (0, t.jsx)(x.A, {
                                            size: 16,
                                            className: "ml-2",
                                          }),
                                        ],
                                      }),
                                }),
                              ],
                            }),
                            (0, t.jsx)("div", {
                              className: "mt-6 text-center text-sm",
                              children: (0, t.jsx)("button", {
                                onClick: () =>
                                  e.push(
                                    "/arbeitgeber/auth/passwort-vergessen",
                                  ),
                                className:
                                  "text-muted-foreground hover:text-primary transition-colors min-h-[44px] px-4 py-2",
                                children: "Passwort vergessen?",
                              }),
                            }),
                          ],
                        },
                        "login",
                      ),
                    }),
                    (0, t.jsxs)("div", {
                      className:
                        "mt-6 text-center text-sm text-muted-foreground",
                      children: [
                        "Noch kein Konto?",
                        (0, t.jsx)("button", {
                          onClick: () => e.push("/arbeitgeber/auth/anmeldung"),
                          className:
                            "ml-1 font-medium text-primary hover:underline focus:outline-none",
                          children: "Jetzt registrieren",
                        }),
                      ],
                    }),
                    (0, t.jsxs)("div", {
                      className:
                        "mt-4 text-center text-sm text-muted-foreground",
                      children: [
                        "Sie sind Auszubildende/r?",
                        " ",
                        (0, t.jsx)(g(), {
                          href: "/auth",
                          className: "font-medium text-primary hover:underline",
                          children: "Zur Student-Anmeldung",
                        }),
                      ],
                    }),
                  ],
                }),
                (0, t.jsxs)("div", {
                  className: "absolute inset-0 -z-10 overflow-hidden",
                  children: [
                    (0, t.jsx)("div", {
                      className:
                        "absolute left-[10%] top-[20%] w-96 h-96 rounded-full bg-[#5D5DE9]/5 blur-3xl",
                    }),
                    (0, t.jsx)("div", {
                      className:
                        "absolute right-[10%] bottom-[20%] w-80 h-80 rounded-full bg-[#2C3340]/5 blur-3xl",
                    }),
                  ],
                }),
              ],
            });
      }
      function j() {
        return (0, t.jsx)(a.Suspense, {
          fallback: (0, t.jsx)("div", {
            className: "flex min-h-screen items-center justify-center",
            children: (0, t.jsx)(c.A, {
              className: "h-8 w-8 animate-spin text-primary",
            }),
          }),
          children: (0, t.jsx)(y, {}),
        });
      }
    },
    81389: (e, s, r) => {
      Promise.resolve().then(r.bind(r, 51575));
    },
  },
  (e) => {
    var s = (s) => e((e.s = s));
    (e.O(0, [46593, 84121, 72076, 77358], () => s(81389)), (_N_E = e.O()));
  },
]);
