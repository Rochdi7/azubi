(self.webpackChunk_N_E = self.webpackChunk_N_E || []).push([
  [85126],
  {
    54892: (e, r, t) => {
      "use strict";
      (t.r(r), t.d(r, { default: () => v }));
      var s = t(70207),
        a = t(87223),
        i = t(18051),
        n = t(54604),
        l = t(45748),
        o = t(54459),
        c = t(54928),
        d = t(31159),
        m = t(16148),
        u = t(95540),
        h = t(69312),
        p = t(1904),
        x = t(61280),
        f = t(46031),
        g = t(10542),
        b = t.n(g),
        y = t(84321);
      function j() {
        let e = (0, i.useRouter)(),
          r = (0, i.useSearchParams)(),
          t = (0, n.createClientComponentClient)(),
          [g, j] = (0, a.useState)(!1),
          [v, N] = (0, a.useState)(!1),
          [w, A] = (0, a.useState)(!1),
          [S, k] = (0, a.useState)(!1),
          [C, z] = (0, a.useState)({
            email: "",
            password: "",
            confirmPassword: "",
            companyName: "",
          }),
          P = (e, r) => {
            z((t) => ({ ...t, [e]: r }));
          };
        (0, a.useEffect)(() => {
          let e = r.get("error"),
            t = r.get("message"),
            s = r.get("company");
          if ("invalid_email_domain" === e) {
            c.oR.error("Gesch\xe4ftliche E-Mail erforderlich", {
              description:
                "Bitte verwenden Sie keine privaten E-Mail-Adressen wie Gmail, Yahoo oder Hotmail. Nutzen Sie eine E-Mail-Adresse Ihres Unternehmens (z.B. name@firma.de).",
              duration: 8e3,
            });
            let e = window.location.pathname;
            window.history.replaceState({}, "", e);
          } else if ("team_invitation_required" === e) {
            let e = t
              ? decodeURIComponent(t)
              : "Ihr Unternehmen".concat(
                  s ? " (".concat(decodeURIComponent(s), ")") : "",
                  " hat bereits ein Konto. Bitte kontaktieren Sie Ihren Administrator, um eine Einladung zum Team zu erhalten.",
                );
            c.oR.error("Team-Einladung erforderlich", {
              description: e,
              duration: 1e4,
            });
            let r = window.location.pathname;
            window.history.replaceState({}, "", r);
          }
        }, [r]);
        let R = async () => {
            try {
              N(!0);
              let e = "".concat(
                  window.location.origin,
                  "/arbeitgeber/auth/callback",
                ),
                { error: r, data: s } = await t.auth.signInWithOAuth({
                  provider: "google",
                  options: {
                    redirectTo: e,
                    queryParams: { access_type: "offline", prompt: "consent" },
                  },
                });
              (r &&
                (c.oR.error(
                  "Google-Anmeldung fehlgeschlagen. Bitte versuchen Sie es erneut.",
                ),
                console.error("Google sign-in error:", r),
                N(!1)),
                null == s || s.url);
            } catch (e) {
              (console.error("Google OAuth error:", e),
                c.oR.error(e.message || "Google-Anmeldung fehlgeschlagen"),
                N(!1));
            }
          },
          E = async (r) => {
            if (
              (r.preventDefault(),
              !C.email || !C.password || !C.confirmPassword || !C.companyName)
            ) {
              c.oR.error("Bitte f\xfcllen Sie alle Felder aus");
              return;
            }
            if (C.password.length < 8) {
              c.oR.error("Das Passwort muss mindestens 8 Zeichen lang sein");
              return;
            }
            if (C.password !== C.confirmPassword) {
              c.oR.error("Die Passw\xf6rter stimmen nicht \xfcberein");
              return;
            }
            j(!0);
            try {
              let r = await fetch("/api/arbeitgeber/auth/register", {
                  method: "POST",
                  headers: { "Content-Type": "application/json" },
                  body: JSON.stringify({
                    email: C.email,
                    password: C.password,
                    companyName: C.companyName,
                  }),
                }),
                t = await r.json();
              if (!r.ok) {
                if (
                  "CLAIMABLE_PROFILE_EXISTS" === t.error &&
                  t.claimableProfile
                ) {
                  e.push(
                    "/arbeitgeber/auth/claim?profile_id="
                      .concat(t.claimableProfile.id, "&email=")
                      .concat(encodeURIComponent(C.email)),
                  );
                  return;
                }
                if (t.error && t.error.includes("gesch\xe4ftliche E-Mail")) {
                  (c.oR.error(t.error, {
                    description:
                      "Alternativ k\xf6nnen Sie eine manuelle \xdcberpr\xfcfung beantragen.",
                    action: {
                      label: "Manuelle \xdcberpr\xfcfung",
                      onClick: () =>
                        e.push(
                          "/arbeitgeber/auth/manual-verification?email=".concat(
                            encodeURIComponent(C.email),
                          ),
                        ),
                    },
                    duration: 1e4,
                  }),
                    j(!1));
                  return;
                }
                throw Error(t.error || "Registrierung fehlgeschlagen");
              }
              (c.oR.success(
                "Registrierung erfolgreich! Bitte best\xe4tigen Sie Ihre E-Mail-Adresse.",
              ),
                e.push("/arbeitgeber/auth/wartend"));
            } catch (e) {
              (console.error("Registration error:", e),
                c.oR.error(
                  e.message ||
                    "Ein Fehler ist aufgetreten. Bitte versuchen Sie es erneut.",
                ));
            } finally {
              j(!1);
            }
          };
        return (0, s.jsxs)("div", {
          className:
            "flex min-h-screen flex-col items-center justify-center p-4",
          children: [
            (0, s.jsx)(c.l$, {
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
            (0, s.jsxs)(l.P.div, {
              initial: { opacity: 0, y: -20 },
              animate: { opacity: 1, y: 0 },
              transition: { duration: 0.5 },
              className: "mb-8 text-center",
              children: [
                (0, s.jsx)("div", {
                  className: "flex justify-center mb-2",
                  children: (0, s.jsx)(y.Logo, {
                    iconSize: "lg",
                    showText: !0,
                  }),
                }),
                (0, s.jsx)("p", {
                  className: "mt-2 text-muted-foreground",
                  children: "Arbeitgeber-Konto erstellen",
                }),
              ],
            }),
            (0, s.jsxs)("div", {
              className: "w-full max-w-sm relative",
              children: [
                (0, s.jsx)(o.N, {
                  mode: "wait",
                  children: (0, s.jsxs)(
                    l.P.div,
                    {
                      variants: {
                        hidden: { opacity: 0, y: 20 },
                        visible: {
                          opacity: 1,
                          y: 0,
                          transition: { duration: 0.5, ease: [0.4, 0, 0.2, 1] },
                        },
                        exit: {
                          opacity: 0,
                          y: -20,
                          transition: { duration: 0.3, ease: [0.4, 0, 0.2, 1] },
                        },
                      },
                      initial: "hidden",
                      animate: "visible",
                      exit: "exit",
                      className:
                        "rounded-2xl border bg-card p-8 backdrop-blur-sm",
                      children: [
                        (0, s.jsx)("button", {
                          type: "button",
                          onClick: R,
                          disabled: v || g,
                          className:
                            "w-full rounded-lg border bg-background hover:bg-accent py-2.5 text-sm font-medium flex items-center justify-center gap-3 transition-colors disabled:opacity-50",
                          children: v
                            ? (0, s.jsx)(d.A, {
                                className: "h-4 w-4 animate-spin",
                              })
                            : (0, s.jsxs)(s.Fragment, {
                                children: [
                                  (0, s.jsxs)("svg", {
                                    className: "h-5 w-5",
                                    viewBox: "0 0 24 24",
                                    children: [
                                      (0, s.jsx)("path", {
                                        fill: "#4285F4",
                                        d: "M22.56 12.25c0-.78-.07-1.53-.2-2.25H12v4.26h5.92c-.26 1.37-1.04 2.53-2.21 3.31v2.77h3.57c2.08-1.92 3.28-4.74 3.28-8.09z",
                                      }),
                                      (0, s.jsx)("path", {
                                        fill: "#34A853",
                                        d: "M12 23c2.97 0 5.46-.98 7.28-2.66l-3.57-2.77c-.98.66-2.23 1.06-3.71 1.06-2.86 0-5.29-1.93-6.16-4.53H2.18v2.84C3.99 20.53 7.7 23 12 23z",
                                      }),
                                      (0, s.jsx)("path", {
                                        fill: "#FBBC05",
                                        d: "M5.84 14.09c-.22-.66-.35-1.36-.35-2.09s.13-1.43.35-2.09V7.07H2.18C1.43 8.55 1 10.22 1 12s.43 3.45 1.18 4.93l2.85-2.22.81-.62z",
                                      }),
                                      (0, s.jsx)("path", {
                                        fill: "#EA4335",
                                        d: "M12 5.38c1.62 0 3.06.56 4.21 1.64l3.15-3.15C17.45 2.09 14.97 1 12 1 7.7 1 3.99 3.47 2.18 7.07l3.66 2.84c.87-2.6 3.3-4.53 6.16-4.53z",
                                      }),
                                    ],
                                  }),
                                  "Mit Google anmelden",
                                ],
                              }),
                        }),
                        (0, s.jsxs)("div", {
                          className: "relative my-6",
                          children: [
                            (0, s.jsx)("div", {
                              className: "absolute inset-0 flex items-center",
                              children: (0, s.jsx)("div", {
                                className: "w-full border-t border-border",
                              }),
                            }),
                            (0, s.jsx)("div", {
                              className:
                                "relative flex justify-center text-xs uppercase",
                              children: (0, s.jsx)("span", {
                                className: "bg-card px-2 text-muted-foreground",
                                children: "Oder mit E-Mail fortfahren",
                              }),
                            }),
                          ],
                        }),
                        (0, s.jsxs)("form", {
                          onSubmit: E,
                          className: "space-y-4",
                          children: [
                            (0, s.jsxs)("div", {
                              className: "space-y-2",
                              children: [
                                (0, s.jsx)("label", {
                                  htmlFor: "companyName",
                                  className: "text-sm font-medium",
                                  children: "Firmenname",
                                }),
                                (0, s.jsxs)("div", {
                                  className: "relative",
                                  children: [
                                    (0, s.jsx)(m.A, {
                                      size: 16,
                                      className:
                                        "absolute left-3 top-1/2 -translate-y-1/2 text-muted-foreground",
                                    }),
                                    (0, s.jsx)("input", {
                                      id: "companyName",
                                      type: "text",
                                      value: C.companyName,
                                      onChange: (e) =>
                                        P("companyName", e.target.value),
                                      placeholder: "Muster GmbH",
                                      required: !0,
                                      className:
                                        "w-full rounded-lg border bg-background pl-10 pr-4 py-3 h-12 text-sm outline-none focus:ring-2 focus:ring-primary/20",
                                    }),
                                  ],
                                }),
                              ],
                            }),
                            (0, s.jsxs)("div", {
                              className: "space-y-2",
                              children: [
                                (0, s.jsx)("label", {
                                  htmlFor: "email",
                                  className: "text-sm font-medium",
                                  children: "Gesch\xe4ftliche E-Mail",
                                }),
                                (0, s.jsxs)("div", {
                                  className: "relative",
                                  children: [
                                    (0, s.jsx)(u.A, {
                                      size: 16,
                                      className:
                                        "absolute left-3 top-1/2 -translate-y-1/2 text-muted-foreground",
                                    }),
                                    (0, s.jsx)("input", {
                                      id: "email",
                                      type: "email",
                                      value: C.email,
                                      onChange: (e) =>
                                        P("email", e.target.value),
                                      placeholder: "ihre.email@firma.de",
                                      required: !0,
                                      className:
                                        "w-full rounded-lg border bg-background pl-10 pr-4 py-3 h-12 text-sm outline-none focus:ring-2 focus:ring-primary/20",
                                    }),
                                  ],
                                }),
                              ],
                            }),
                            (0, s.jsxs)("div", {
                              className: "space-y-2",
                              children: [
                                (0, s.jsx)("label", {
                                  htmlFor: "password",
                                  className: "text-sm font-medium",
                                  children: "Passwort",
                                }),
                                (0, s.jsxs)("div", {
                                  className: "relative",
                                  children: [
                                    (0, s.jsx)(h.A, {
                                      size: 16,
                                      className:
                                        "absolute left-3 top-1/2 -translate-y-1/2 text-muted-foreground",
                                    }),
                                    (0, s.jsx)("input", {
                                      id: "password",
                                      type: w ? "text" : "password",
                                      value: C.password,
                                      onChange: (e) =>
                                        P("password", e.target.value),
                                      placeholder:
                                        "Passwort erstellen (min. 8 Zeichen)",
                                      required: !0,
                                      className:
                                        "w-full rounded-lg border bg-background pl-10 pr-12 py-3 h-12 text-sm outline-none focus:ring-2 focus:ring-primary/20",
                                    }),
                                    (0, s.jsx)("button", {
                                      type: "button",
                                      onClick: () => A(!w),
                                      className:
                                        "absolute right-2 top-1/2 -translate-y-1/2 text-muted-foreground hover:text-foreground p-2 min-w-[40px] min-h-[40px] flex items-center justify-center",
                                      tabIndex: -1,
                                      children: w
                                        ? (0, s.jsx)(p.A, {
                                            size: 16,
                                            className:
                                              "opacity-70 hover:opacity-100",
                                          })
                                        : (0, s.jsx)(x.A, {
                                            size: 16,
                                            className:
                                              "opacity-70 hover:opacity-100",
                                          }),
                                    }),
                                  ],
                                }),
                              ],
                            }),
                            (0, s.jsxs)("div", {
                              className: "space-y-2",
                              children: [
                                (0, s.jsx)("label", {
                                  htmlFor: "confirmPassword",
                                  className: "text-sm font-medium",
                                  children: "Passwort best\xe4tigen",
                                }),
                                (0, s.jsxs)("div", {
                                  className: "relative",
                                  children: [
                                    (0, s.jsx)(h.A, {
                                      size: 16,
                                      className:
                                        "absolute left-3 top-1/2 -translate-y-1/2 text-muted-foreground",
                                    }),
                                    (0, s.jsx)("input", {
                                      id: "confirmPassword",
                                      type: S ? "text" : "password",
                                      value: C.confirmPassword,
                                      onChange: (e) =>
                                        P("confirmPassword", e.target.value),
                                      placeholder: "Passwort best\xe4tigen",
                                      required: !0,
                                      className:
                                        "w-full rounded-lg border bg-background pl-10 pr-12 py-3 h-12 text-sm outline-none focus:ring-2 focus:ring-primary/20",
                                    }),
                                    (0, s.jsx)("button", {
                                      type: "button",
                                      onClick: () => k(!S),
                                      className:
                                        "absolute right-2 top-1/2 -translate-y-1/2 text-muted-foreground hover:text-foreground p-2 min-w-[40px] min-h-[40px] flex items-center justify-center",
                                      tabIndex: -1,
                                      children: S
                                        ? (0, s.jsx)(p.A, {
                                            size: 16,
                                            className:
                                              "opacity-70 hover:opacity-100",
                                          })
                                        : (0, s.jsx)(x.A, {
                                            size: 16,
                                            className:
                                              "opacity-70 hover:opacity-100",
                                          }),
                                    }),
                                  ],
                                }),
                              ],
                            }),
                            (0, s.jsxs)("div", {
                              className:
                                "text-xs text-muted-foreground text-center pt-2",
                              children: [
                                "Mit der Registrierung stimmen Sie unseren",
                                " ",
                                (0, s.jsx)(b(), {
                                  href: "/arbeitgeber/agb",
                                  className: "text-primary hover:underline",
                                  children: "AGB",
                                }),
                                " ",
                                "und",
                                " ",
                                (0, s.jsx)(b(), {
                                  href: "/arbeitgeber/datenschutz",
                                  className: "text-primary hover:underline",
                                  children: "Datenschutzerkl\xe4rung",
                                }),
                                " ",
                                "zu.",
                              ],
                            }),
                            (0, s.jsx)("button", {
                              type: "submit",
                              disabled: g,
                              className:
                                "relative w-full rounded-full bg-primary min-h-[48px] text-sm font-medium text-primary-foreground hover:bg-primary/90 focus:outline-none focus:ring-2 focus:ring-primary/20 disabled:opacity-80 flex items-center justify-center",
                              children: g
                                ? (0, s.jsx)(d.A, {
                                    className: "h-4 w-4 animate-spin",
                                  })
                                : (0, s.jsxs)(s.Fragment, {
                                    children: [
                                      "Konto erstellen",
                                      (0, s.jsx)(f.A, {
                                        size: 16,
                                        className: "ml-2",
                                      }),
                                    ],
                                  }),
                            }),
                          ],
                        }),
                      ],
                    },
                    "register",
                  ),
                }),
                (0, s.jsxs)("div", {
                  className: "mt-6 text-center text-sm text-muted-foreground",
                  children: [
                    "Haben Sie bereits ein Konto?",
                    (0, s.jsx)("button", {
                      onClick: () => e.push("/arbeitgeber/auth/anmelden"),
                      className:
                        "ml-1 font-medium text-primary hover:underline focus:outline-none",
                      children: "Jetzt anmelden",
                    }),
                  ],
                }),
                (0, s.jsxs)("div", {
                  className: "mt-4 text-center text-sm text-muted-foreground",
                  children: [
                    "Suchen Sie eine Ausbildung?",
                    " ",
                    (0, s.jsx)(b(), {
                      href: "/auth?signup",
                      className: "font-medium text-primary hover:underline",
                      children: "Als Student registrieren",
                    }),
                  ],
                }),
              ],
            }),
            (0, s.jsxs)("div", {
              className: "absolute inset-0 -z-10 overflow-hidden",
              children: [
                (0, s.jsx)("div", {
                  className:
                    "absolute left-[10%] top-[20%] w-96 h-96 rounded-full bg-[#5D5DE9]/5 blur-3xl",
                }),
                (0, s.jsx)("div", {
                  className:
                    "absolute right-[10%] bottom-[20%] w-80 h-80 rounded-full bg-[#2C3340]/5 blur-3xl",
                }),
              ],
            }),
          ],
        });
      }
      function v() {
        return (0, s.jsx)(a.Suspense, {
          fallback: (0, s.jsx)("div", {
            className: "flex min-h-screen items-center justify-center",
            children: (0, s.jsx)(d.A, {
              className: "h-8 w-8 animate-spin text-primary",
            }),
          }),
          children: (0, s.jsx)(j, {}),
        });
      }
    },
    91380: (e, r, t) => {
      Promise.resolve().then(t.bind(t, 54892));
    },
  },
  (e) => {
    var r = (r) => e((e.s = r));
    (e.O(0, [46593, 84121, 72076, 77358], () => r(91380)), (_N_E = e.O()));
  },
]);
