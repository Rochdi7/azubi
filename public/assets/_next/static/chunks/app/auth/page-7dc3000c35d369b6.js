(self.webpackChunk_N_E = self.webpackChunk_N_E || []).push([
  [8365],
  {
    9963: (e, o, t) => {
      Promise.resolve().then(t.bind(t, 37183));
    },
    37183: (e, o, t) => {
      "use strict";
      (t.r(o), t.d(o, { default: () => C }));
      var a = t(70207),
        s = t(87223),
        i = t(54604),
        l = t(18051),
        r = t(45748),
        c = t(54459),
        n = t(54928),
        m = t(31159),
        d = t(95540),
        u = t(95992),
        h = t(69312),
        g = t(1904),
        x = t(61280),
        p = t(46031),
        f = t(37803),
        y = t(84321),
        b = t(61889),
        j = t(39441),
        v = t(55036);
      let N = {
        "gmial.com": "gmail.com",
        "gmal.com": "gmail.com",
        "gmil.com": "gmail.com",
        "gmai.com": "gmail.com",
        "gmail.con": "gmail.com",
        "gmail.co": "gmail.com",
        "gmail.cm": "gmail.com",
        "gmail.om": "gmail.com",
        "gamil.com": "gmail.com",
        "gnail.com": "gmail.com",
        "gmaill.com": "gmail.com",
        gmailcom: "gmail.com",
        "gmail.cpm": "gmail.com",
        "gmail.vom": "gmail.com",
        "gmail.xom": "gmail.com",
        "g]mail.com": "gmail.com",
        "gemail.com": "gmail.com",
        "gimail.com": "gmail.com",
        "gmsil.com": "gmail.com",
        "gmali.com": "gmail.com",
        "gmaol.com": "gmail.com",
        "gmaikl.com": "gmail.com",
        "gmaik.com": "gmail.com",
        "gmaul.com": "gmail.com",
        "gmqil.com": "gmail.com",
        "gmeil.com": "gmail.com",
        "gmaio.com": "gmail.com",
        "gmaiil.com": "gmail.com",
        "gmailc.om": "gmail.com",
        gmailmcom: "gmail.com",
        "yaho.com": "yahoo.com",
        "yahooo.com": "yahoo.com",
        "yahoo.con": "yahoo.com",
        "yahoo.co": "yahoo.co.uk",
        "yahoo.cm": "yahoo.com",
        "yahoo.om": "yahoo.com",
        "yhaoo.com": "yahoo.com",
        "yhoo.com": "yahoo.com",
        "yaoo.com": "yahoo.com",
        "tahoo.com": "yahoo.com",
        "hotmal.com": "hotmail.com",
        "hotmai.com": "hotmail.com",
        "hotmail.con": "hotmail.com",
        "hotmail.co": "hotmail.com",
        "hotmial.com": "hotmail.com",
        "hotamil.com": "hotmail.com",
        "hotmil.com": "hotmail.com",
        "hotmaill.com": "hotmail.com",
        "hotmeil.com": "hotmail.com",
        "hitmail.com": "hotmail.com",
        "outlok.com": "outlook.com",
        "outloo.com": "outlook.com",
        "outlook.con": "outlook.com",
        "outlook.co": "outlook.com",
        "outlool.com": "outlook.com",
        "outllook.com": "outlook.com",
        "putlook.com": "outlook.com",
        "icloud.con": "icloud.com",
        "icloud.co": "icloud.com",
        "iclou.com": "icloud.com",
        "icoud.com": "icloud.com",
        "iclould.com": "icloud.com",
        "icluod.com": "icloud.com",
        "protonmail.con": "protonmail.com",
        "protonmal.com": "protonmail.com",
        "aol.con": "aol.com",
        "live.con": "live.com",
        "msn.con": "msn.com",
      };
      function w() {
        let e = (0, l.useSearchParams)(),
          [o, t] = (0, s.useState)(!0),
          [w, k] = (0, s.useState)(""),
          [C, A] = (0, s.useState)(""),
          [E, S] = (0, s.useState)(""),
          [P, _] = (0, s.useState)(!1),
          [R, F] = (0, s.useState)(null),
          [I, T] = (0, s.useState)(!1),
          [z, L] = (0, s.useState)(!1),
          [U, B] = (0, s.useState)(!0),
          [O, G] = (0, s.useState)(!1),
          [W, D] = (0, s.useState)(!1),
          [q, M] = (0, s.useState)(""),
          [V, X] = (0, s.useState)(""),
          [H, Y] = (0, s.useState)(!1),
          [$, K] = (0, s.useState)(!1),
          J = (0, l.useRouter)(),
          Q = (0, i.createClientComponentClient)(),
          Z = (0, s.useMemo)(() => {
            if ($) return null;
            if (!w || !w.includes("@")) return null;
            let [e, o] = w.toLowerCase().split("@");
            if (!o) return null;
            let t = N[o];
            if (t) return "".concat(e, "@").concat(t);
            if (o.endsWith("con") && !o.endsWith(".con")) {
              let t = o.slice(0, -3);
              if (
                ["gmail", "yahoo", "hotmail", "outlook", "icloud"].some((e) =>
                  t.includes(e),
                )
              )
                return "".concat(e, "@").concat(t, ".com");
            }
            return null;
          }, [w, $]);
        (0, s.useEffect)(() => {
          K(!1);
        }, [w.split("@")[1]]);
        let ee = () => {
          let o = e.get("source"),
            t = e.get("consultation_success");
          if ("consultation" === o && "true" === t)
            return "/consultation?consultation_success=true";
          let a = e.get("redirect") || e.get("returnTo");
          if (a && a.startsWith("/") && !a.includes("//"))
            try {
              if (
                new URL(a, window.location.origin).origin ===
                window.location.origin
              )
                return a;
            } catch (e) {}
          return "/dashboard";
        };
        ((0, s.useEffect)(() => {
          let e = !0;
          return (
            (async () => {
              if (!H)
                try {
                  let {
                    data: { session: o },
                  } = await Q.auth.getSession();
                  if (!e) return;
                  o ? (Y(!0), J.push(ee())) : e && B(!1);
                } catch (o) {
                  (console.error("Error checking auth:", o), e && B(!1));
                }
            })(),
            () => {
              e = !1;
            }
          );
        }, []),
          (0, s.useEffect)(() => {
            e.has("signup") && t(!1);
          }, [e]),
          (0, s.useEffect)(() => {
            let o = e.get("error"),
              t = e.get("message");
            if (o) {
              let e = "An error occurred. Please try again.";
              (t
                ? (e = decodeURIComponent(t))
                : "profile_creation_failed" === o
                  ? (e =
                      "Failed to create your profile. Please try again or contact support.")
                  : "role_assignment_failed" === o
                    ? (e =
                        "Failed to set up your account permissions. Please try again or contact support.")
                    : "oauth_failed" === o
                      ? (e = "Google sign-in failed. Please try again.")
                      : "callback_failed" === o &&
                        (e = "Authentication failed. Please try again."),
                n.oR.error(e, { duration: 6e3 }));
              let a = new URL(window.location.href);
              (a.searchParams.delete("error"),
                a.searchParams.delete("message"),
                window.history.replaceState({}, "", a.toString()));
            }
          }, [e]),
          s.useEffect(() => {}, []));
        let eo = async (e) => {
            let o = new FormData();
            o.append("cf-turnstile-response", e);
            let t = await fetch("/api/auth/turnstile", {
              method: "POST",
              body: o,
            });
            return (await t.json()).success;
          },
          et = async () => {
            try {
              G(!0);
              let o = "".concat(window.location.origin, "/auth/callback"),
                t = e.get("source"),
                a = e.get("consultation_success");
              if ("consultation" === t && "true" === a)
                o += "?redirect=".concat(
                  encodeURIComponent("/consultation?consultation_success=true"),
                );
              else {
                let t = e.get("redirect") || e.get("returnTo");
                t &&
                  t.startsWith("/") &&
                  !t.includes("//") &&
                  (o += "?redirect=".concat(encodeURIComponent(t)));
              }
              let { error: s, data: i } = await Q.auth.signInWithOAuth({
                provider: "google",
                options: {
                  redirectTo: o,
                  queryParams: { access_type: "offline", prompt: "consent" },
                },
              });
              (s &&
                (n.oR.error("Failed to sign in with Google. Please try again."),
                console.error("Google sign-in error:", s),
                G(!1)),
                null == i || i.url);
            } catch (e) {
              (console.error("Google OAuth error:", e),
                n.oR.error(e.message || "Failed to sign in with Google"),
                G(!1));
            }
          },
          ea = async (s) => {
            if ((s.preventDefault(), !o && Z)) {
              n.oR.error(
                (0, a.jsxs)("div", {
                  children: [
                    (0, a.jsx)("strong", {
                      children: "Please check your email address",
                    }),
                    (0, a.jsxs)("p", {
                      className: "text-sm mt-1",
                      children: ["Did you mean ", Z, "?"],
                    }),
                  ],
                }),
                { duration: 5e3 },
              );
              return;
            }
            if (!o && C !== E) {
              n.oR.error("Passwords do not match");
              return;
            }
            let i = "false" !== v.env.NEXT_PUBLIC_ENABLE_TURNSTILE;
            if (i && !R) {
              n.oR.error("Please complete the bot protection challenge");
              return;
            }
            _(!0);
            try {
              if (i && !(await eo(R))) {
                (n.oR.error(
                  "Bot protection verification failed. Please try again.",
                ),
                  _(!1));
                return;
              }
              if (o) {
                let { error: e, data: o } = await Q.auth.signInWithPassword({
                  email: w,
                  password: C,
                });
                if (e) {
                  if (e.message.includes("credentials"))
                    n.oR.error("Invalid email or password. Please try again.");
                  else if (
                    e.message.includes("not confirmed") ||
                    e.message.includes("Email not confirmed")
                  )
                    (X(w), D(!0));
                  else throw e;
                  _(!1);
                  return;
                }
                (n.oR.success("Welcome back!", { duration: 3e3 }),
                  window.dispatchEvent(
                    new CustomEvent("user:authenticated", {
                      detail: { userId: o.user.id },
                    }),
                  ));
                let t = ee();
                J.push(t);
              } else {
                let o = "".concat(window.location.origin, "/auth/callback"),
                  s = e.get("source"),
                  i = e.get("consultation_success");
                "consultation" === s &&
                  "true" === i &&
                  (o += "?redirect=".concat(
                    encodeURIComponent(
                      "/consultation?consultation_success=true",
                    ),
                  ));
                let { error: l } = await Q.auth.signUp({
                  email: w,
                  password: C,
                  options: { emailRedirectTo: o },
                });
                if (l) {
                  if (l.message.includes("already"))
                    (n.oR.error(
                      "An account with this email already exists. Please sign in instead.",
                      { duration: 5e3 },
                    ),
                      setTimeout(() => t(!0), 2e3));
                  else if (
                    l.message.includes("rate limit") ||
                    l.message.includes("Email rate limit")
                  )
                    (n.oR.error(
                      (0, a.jsxs)("div", {
                        children: [
                          (0, a.jsx)("strong", {
                            children: "Email service temporarily unavailable",
                          }),
                          (0, a.jsx)("p", {
                            className: "text-sm mt-1",
                            children:
                              "Please try again in 60 minutes or contact hello@azubi.ma for immediate assistance.",
                          }),
                        ],
                      }),
                      { duration: 1e4 },
                    ),
                      console.error("Email rate limit error:", l),
                      window.datafast &&
                        window.datafast("error", {
                          type: "email_rate_limit",
                          email: w,
                          timestamp: new Date().toISOString(),
                        }));
                  else throw l;
                  _(!1);
                  return;
                }
                (M(w), D(!0), setTimeout(() => t(!0), 500));
              }
            } catch (e) {
              (n.oR.error(
                e.message || "Failed to ".concat(o ? "sign in" : "register"),
                { duration: 5e3 },
              ),
                F(null));
            } finally {
              _(!1);
            }
          };
        return U
          ? (0, a.jsxs)("div", {
              className:
                "flex min-h-screen flex-col items-center justify-center p-4",
              children: [
                (0, a.jsx)(m.A, {
                  className: "h-8 w-8 animate-spin text-primary",
                }),
                (0, a.jsx)("p", {
                  className: "mt-4 text-muted-foreground",
                  children: "Checking authentication...",
                }),
              ],
            })
          : (0, a.jsxs)("div", {
              className:
                "flex min-h-screen flex-col items-center justify-center p-4",
              children: [
                (0, a.jsx)(n.l$, {
                  position: "top-center",
                  toastOptions: {
                    style: {
                      background: "var(--card)",
                      color: "var(--foreground)",
                      border: "1px solid var(--border)",
                    },
                    className: "rounded-lg shadow-lg",
                    duration: 5e3,
                  },
                }),
                (0, a.jsxs)(r.P.div, {
                  initial: { opacity: 0, y: -20 },
                  animate: { opacity: 1, y: 0 },
                  transition: { duration: 0.5 },
                  className: "mb-8 text-center",
                  children: [
                    (0, a.jsx)("div", {
                      className: "flex justify-center mb-2",
                      children: (0, a.jsx)(y.Logo, {
                        iconSize: "lg",
                        showText: !0,
                      }),
                    }),
                    (0, a.jsx)("p", {
                      className: "mt-2 text-muted-foreground",
                      children: o
                        ? "Sign in to your account"
                        : "Create your account",
                    }),
                  ],
                }),
                (0, a.jsxs)("div", {
                  className: "w-full max-w-sm relative",
                  children: [
                    (0, a.jsx)(c.N, {
                      mode: "wait",
                      children: (0, a.jsxs)(
                        r.P.div,
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
                            (0, a.jsx)("button", {
                              type: "button",
                              onClick: et,
                              disabled: O || P,
                              className:
                                "w-full rounded-lg border bg-background hover:bg-accent py-2.5 text-sm font-medium flex items-center justify-center gap-3 transition-colors disabled:opacity-50",
                              children: O
                                ? (0, a.jsx)(m.A, {
                                    className: "h-4 w-4 animate-spin",
                                  })
                                : (0, a.jsxs)(a.Fragment, {
                                    children: [
                                      (0, a.jsxs)("svg", {
                                        className: "h-5 w-5",
                                        viewBox: "0 0 24 24",
                                        children: [
                                          (0, a.jsx)("path", {
                                            fill: "#4285F4",
                                            d: "M22.56 12.25c0-.78-.07-1.53-.2-2.25H12v4.26h5.92c-.26 1.37-1.04 2.53-2.21 3.31v2.77h3.57c2.08-1.92 3.28-4.74 3.28-8.09z",
                                          }),
                                          (0, a.jsx)("path", {
                                            fill: "#34A853",
                                            d: "M12 23c2.97 0 5.46-.98 7.28-2.66l-3.57-2.77c-.98.66-2.23 1.06-3.71 1.06-2.86 0-5.29-1.93-6.16-4.53H2.18v2.84C3.99 20.53 7.7 23 12 23z",
                                          }),
                                          (0, a.jsx)("path", {
                                            fill: "#FBBC05",
                                            d: "M5.84 14.09c-.22-.66-.35-1.36-.35-2.09s.13-1.43.35-2.09V7.07H2.18C1.43 8.55 1 10.22 1 12s.43 3.45 1.18 4.93l2.85-2.22.81-.62z",
                                          }),
                                          (0, a.jsx)("path", {
                                            fill: "#EA4335",
                                            d: "M12 5.38c1.62 0 3.06.56 4.21 1.64l3.15-3.15C17.45 2.09 14.97 1 12 1 7.7 1 3.99 3.47 2.18 7.07l3.66 2.84c.87-2.6 3.3-4.53 6.16-4.53z",
                                          }),
                                        ],
                                      }),
                                      "Continue with Google",
                                    ],
                                  }),
                            }),
                            (0, a.jsxs)("div", {
                              className: "relative my-6",
                              children: [
                                (0, a.jsx)("div", {
                                  className:
                                    "absolute inset-0 flex items-center",
                                  children: (0, a.jsx)("div", {
                                    className: "w-full border-t border-border",
                                  }),
                                }),
                                (0, a.jsx)("div", {
                                  className:
                                    "relative flex justify-center text-xs uppercase",
                                  children: (0, a.jsx)("span", {
                                    className:
                                      "bg-card px-2 text-muted-foreground",
                                    children: "Or continue with email",
                                  }),
                                }),
                              ],
                            }),
                            (0, a.jsxs)("form", {
                              onSubmit: ea,
                              className: "space-y-4",
                              children: [
                                (0, a.jsxs)("div", {
                                  className: "space-y-2",
                                  children: [
                                    (0, a.jsx)("label", {
                                      htmlFor: "email",
                                      className: "text-sm font-medium",
                                      children: "Email",
                                    }),
                                    (0, a.jsxs)("div", {
                                      className: "relative",
                                      children: [
                                        (0, a.jsx)(d.A, {
                                          size: 16,
                                          className:
                                            "absolute left-3 top-1/2 -translate-y-1/2 text-muted-foreground",
                                        }),
                                        (0, a.jsx)("input", {
                                          id: "email",
                                          type: "email",
                                          value: w,
                                          onChange: (e) => k(e.target.value),
                                          placeholder: "Enter your email",
                                          required: !0,
                                          className:
                                            "w-full rounded-lg border bg-background pl-10 pr-4 py-2 text-sm outline-none focus:ring-2 focus:ring-primary/20 ".concat(
                                              Z
                                                ? "border-amber-500 focus:ring-amber-500/20"
                                                : "",
                                            ),
                                        }),
                                      ],
                                    }),
                                    Z &&
                                      (0, a.jsxs)("div", {
                                        className:
                                          "flex items-start gap-2 p-3 rounded-lg bg-amber-50 dark:bg-amber-950/30 border border-amber-200 dark:border-amber-800",
                                        children: [
                                          (0, a.jsx)(u.A, {
                                            size: 16,
                                            className:
                                              "text-amber-600 dark:text-amber-500 mt-0.5 shrink-0",
                                          }),
                                          (0, a.jsxs)("div", {
                                            className: "flex-1 text-sm",
                                            children: [
                                              (0, a.jsxs)("p", {
                                                className:
                                                  "text-amber-800 dark:text-amber-200",
                                                children: [
                                                  "Did you mean",
                                                  " ",
                                                  (0, a.jsx)("button", {
                                                    type: "button",
                                                    onClick: () => {
                                                      (k(Z), K(!0));
                                                    },
                                                    className:
                                                      "font-semibold text-amber-700 dark:text-amber-300 hover:underline",
                                                    children: Z,
                                                  }),
                                                  "?",
                                                ],
                                              }),
                                              (0, a.jsx)("button", {
                                                type: "button",
                                                onClick: () => K(!0),
                                                className:
                                                  "text-xs text-amber-600 dark:text-amber-400 hover:underline mt-1",
                                                children:
                                                  "No, keep my email as is",
                                              }),
                                            ],
                                          }),
                                        ],
                                      }),
                                  ],
                                }),
                                (0, a.jsxs)("div", {
                                  className: "space-y-2",
                                  children: [
                                    (0, a.jsx)("label", {
                                      htmlFor: "password",
                                      className: "text-sm font-medium",
                                      children: "Password",
                                    }),
                                    (0, a.jsxs)("div", {
                                      className: "relative",
                                      children: [
                                        (0, a.jsx)(h.A, {
                                          size: 16,
                                          className:
                                            "absolute left-3 top-1/2 -translate-y-1/2 text-muted-foreground",
                                        }),
                                        (0, a.jsx)("input", {
                                          id: "password",
                                          type: I ? "text" : "password",
                                          value: C,
                                          onChange: (e) => A(e.target.value),
                                          placeholder: o
                                            ? "Enter your password"
                                            : "Create a password",
                                          required: !0,
                                          className:
                                            "w-full rounded-lg border bg-background pl-10 pr-10 py-2 text-sm outline-none focus:ring-2 focus:ring-primary/20",
                                        }),
                                        (0, a.jsx)("button", {
                                          type: "button",
                                          onClick: () => T(!I),
                                          className:
                                            "absolute right-3 top-1/2 -translate-y-1/2 text-muted-foreground hover:text-foreground",
                                          tabIndex: -1,
                                          children: I
                                            ? (0, a.jsx)(g.A, {
                                                size: 16,
                                                className:
                                                  "opacity-70 hover:opacity-100",
                                              })
                                            : (0, a.jsx)(x.A, {
                                                size: 16,
                                                className:
                                                  "opacity-70 hover:opacity-100",
                                              }),
                                        }),
                                      ],
                                    }),
                                  ],
                                }),
                                !o &&
                                  (0, a.jsxs)("div", {
                                    className: "space-y-2",
                                    children: [
                                      (0, a.jsx)("label", {
                                        htmlFor: "confirmPassword",
                                        className: "text-sm font-medium",
                                        children: "Confirm Password",
                                      }),
                                      (0, a.jsxs)("div", {
                                        className: "relative",
                                        children: [
                                          (0, a.jsx)(h.A, {
                                            size: 16,
                                            className:
                                              "absolute left-3 top-1/2 -translate-y-1/2 text-muted-foreground",
                                          }),
                                          (0, a.jsx)("input", {
                                            id: "confirmPassword",
                                            type: z ? "text" : "password",
                                            value: E,
                                            onChange: (e) => S(e.target.value),
                                            placeholder:
                                              "Confirm your password",
                                            required: !0,
                                            className:
                                              "w-full rounded-lg border bg-background pl-10 pr-10 py-2 text-sm outline-none focus:ring-2 focus:ring-primary/20",
                                          }),
                                          (0, a.jsx)("button", {
                                            type: "button",
                                            onClick: () => L(!z),
                                            className:
                                              "absolute right-3 top-1/2 -translate-y-1/2 text-muted-foreground hover:text-foreground",
                                            tabIndex: -1,
                                            children: z
                                              ? (0, a.jsx)(g.A, {
                                                  size: 16,
                                                  className:
                                                    "opacity-70 hover:opacity-100",
                                                })
                                              : (0, a.jsx)(x.A, {
                                                  size: 16,
                                                  className:
                                                    "opacity-70 hover:opacity-100",
                                                }),
                                          }),
                                        ],
                                      }),
                                    ],
                                  }),
                                "false" !==
                                  v.env.NEXT_PUBLIC_ENABLE_TURNSTILE &&
                                  (0, a.jsx)(f.$, {
                                    siteKey: "0x4AAAAAABL-YxrkWmXumvVU",
                                    onVerify: (e) => {
                                      F(e);
                                    },
                                    onError: (e) => {
                                      (console.error("Turnstile error:", e),
                                        n.oR.error(
                                          "Bot protection verification failed. Please try again.",
                                        ),
                                        F(null));
                                    },
                                    theme: "auto",
                                    size: "normal",
                                    disabled: P,
                                    enabled: !0,
                                  }),
                                (0, a.jsx)("button", {
                                  type: "submit",
                                  disabled:
                                    P ||
                                    ("false" !==
                                      v.env.NEXT_PUBLIC_ENABLE_TURNSTILE &&
                                      !R),
                                  className:
                                    "relative w-full rounded-lg bg-primary py-2.5 text-sm font-medium text-primary-foreground hover:bg-primary/90 focus:outline-none focus:ring-2 focus:ring-primary/20 disabled:opacity-80 flex items-center justify-center",
                                  children: P
                                    ? (0, a.jsx)(m.A, {
                                        className: "h-4 w-4 animate-spin",
                                      })
                                    : (0, a.jsxs)(a.Fragment, {
                                        children: [
                                          o ? "Sign In" : "Create Account",
                                          (0, a.jsx)(p.A, {
                                            size: 16,
                                            className: "ml-2",
                                          }),
                                        ],
                                      }),
                                }),
                              ],
                            }),
                            o &&
                              (0, a.jsx)("div", {
                                className: "mt-6 text-center text-sm",
                                children: (0, a.jsx)("button", {
                                  onClick: () =>
                                    J.push("/auth/forgot-password"),
                                  className:
                                    "text-muted-foreground hover:text-primary transition-colors",
                                  children: "Forgot your password?",
                                }),
                              }),
                          ],
                        },
                        o ? "login" : "register",
                      ),
                    }),
                    (0, a.jsxs)("div", {
                      className:
                        "mt-6 text-center text-sm text-muted-foreground",
                      children: [
                        o
                          ? "Don't have an account?"
                          : "Already have an account?",
                        (0, a.jsx)("button", {
                          onClick: () => {
                            (t(!o), A(""), S(""), F(null));
                          },
                          className:
                            "ml-1 font-medium text-primary hover:underline focus:outline-none",
                          children: o ? "Sign up" : "Sign in",
                        }),
                      ],
                    }),
                  ],
                }),
                (0, a.jsxs)("div", {
                  className: "absolute inset-0 -z-10 overflow-hidden",
                  children: [
                    (0, a.jsx)("div", {
                      className:
                        "absolute left-[10%] top-[20%] w-96 h-96 rounded-full bg-[#5D5DE9]/5 blur-3xl",
                    }),
                    (0, a.jsx)("div", {
                      className:
                        "absolute right-[10%] bottom-[20%] w-80 h-80 rounded-full bg-[#2C3340]/5 blur-3xl",
                    }),
                  ],
                }),
                (0, a.jsx)(b.lG, {
                  open: W,
                  onOpenChange: D,
                  children: (0, a.jsxs)(b.Cf, {
                    className: "bg-white dark:bg-white sm:max-w-md",
                    children: [
                      (0, a.jsxs)(b.c7, {
                        className: "text-center sm:text-center",
                        children: [
                          (0, a.jsx)("div", {
                            className:
                              "mx-auto mb-4 flex h-16 w-16 items-center justify-center rounded-full bg-[#5D5DE9]/10",
                            children: (0, a.jsx)(d.A, {
                              className: "h-8 w-8 text-[#5D5DE9]",
                            }),
                          }),
                          (0, a.jsx)(b.L3, {
                            className:
                              "text-xl sm:text-2xl font-bold text-gray-900",
                            children: V
                              ? "Verify Your Email"
                              : "Check Your Email",
                          }),
                          (0, a.jsx)(b.rr, {
                            asChild: !0,
                            children: (0, a.jsxs)("div", {
                              className:
                                "text-base text-gray-600 mt-4 space-y-3",
                              children: [
                                V
                                  ? (0, a.jsxs)(a.Fragment, {
                                      children: [
                                        (0, a.jsx)("p", {
                                          children: "Check your inbox at:",
                                        }),
                                        (0, a.jsx)("p", {
                                          className:
                                            "font-semibold text-gray-900 break-all px-2",
                                          children: V,
                                        }),
                                        (0, a.jsx)("p", {
                                          children:
                                            "Click the verification link to activate your account.",
                                        }),
                                      ],
                                    })
                                  : (0, a.jsxs)(a.Fragment, {
                                      children: [
                                        (0, a.jsx)("p", {
                                          children:
                                            "Verification email sent to:",
                                        }),
                                        (0, a.jsx)("p", {
                                          className:
                                            "font-semibold text-gray-900 break-all px-2",
                                          children: q,
                                        }),
                                        (0, a.jsx)("p", {
                                          children:
                                            "Click the link in the email to complete registration.",
                                        }),
                                      ],
                                    }),
                                (0, a.jsx)("p", {
                                  className: "text-sm text-gray-500 mt-4",
                                  children: "Check spam folder if not found.",
                                }),
                              ],
                            }),
                          }),
                        ],
                      }),
                      (0, a.jsx)(b.Es, {
                        className: "sm:justify-center mt-2",
                        children: (0, a.jsx)(j.$, {
                          onClick: () => {
                            (D(!1), X(""), M(""));
                          },
                          className:
                            "w-full sm:w-auto bg-[#5D5DE9] hover:bg-[#5D5DE9]/90 text-white font-medium px-8 py-2.5 rounded-full",
                          children: "OK, Got It",
                        }),
                      }),
                    ],
                  }),
                }),
              ],
            });
      }
      function k() {
        return (0, a.jsxs)("div", {
          className:
            "flex min-h-screen flex-col items-center justify-center p-4",
          children: [
            (0, a.jsx)("div", {
              className:
                "h-20 w-[280px] bg-muted/20 animate-pulse rounded mb-8",
            }),
            (0, a.jsx)("div", {
              className:
                "w-full max-w-sm rounded-2xl border bg-card p-8 backdrop-blur-sm",
              children: (0, a.jsxs)("div", {
                className: "space-y-4",
                children: [
                  (0, a.jsx)("div", {
                    className: "h-10 bg-muted/20 animate-pulse rounded",
                  }),
                  (0, a.jsx)("div", {
                    className: "h-10 bg-muted/20 animate-pulse rounded",
                  }),
                  (0, a.jsx)("div", {
                    className: "h-10 bg-muted/20 animate-pulse rounded",
                  }),
                ],
              }),
            }),
          ],
        });
      }
      function C() {
        return (0, a.jsx)(s.Suspense, {
          fallback: (0, a.jsx)(k, {}),
          children: (0, a.jsx)(w, {}),
        });
      }
    },
  },
  (e) => {
    var o = (o) => e((e.s = o));
    (e.O(0, [46593, 36209, 84121, 72076, 77358], () => o(9963)),
      (_N_E = e.O()));
  },
]);
