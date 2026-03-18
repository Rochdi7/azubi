(self.webpackChunk_N_E = self.webpackChunk_N_E || []).push([
  [10893],
  {
    56893: (e, s, r) => {
      Promise.resolve().then(r.bind(r, 61162));
    },
    61162: (e, s, r) => {
      "use strict";
      (r.r(s), r.d(s, { default: () => q }));
      var a = r(70207),
        t = r(87223),
        i = r(45748),
        l = r(68233),
        o = r(39441),
        n = r(80187),
        c = r(61889),
        d = r(95941),
        m = r(40167),
        u = r(87277),
        x = r(61607),
        h = r(70005),
        b = r(95992),
        p = r(31159),
        g = r(46031),
        f = r(50488),
        j = r(54539),
        v = r(6929),
        N = r(44280),
        y = r(93501),
        w = r(82110),
        k = r(49211),
        S = r(64920);
      let _ = j.Ik({
          firstName: j.Yj().min(2, { message: "First name is required" }),
          lastName: j.Yj().min(2, { message: "Last name is required" }),
          email: j.Yj().email({ message: "Invalid email address" }),
          phone: j
            .Yj()
            .min(10, { message: "Please enter a valid phone number" }),
          countryCode: j.Yj().optional(),
          subject: j.Yj().min(1, { message: "Please select a subject" }),
          message: j
            .Yj()
            .min(10, { message: "Message must be at least 10 characters" }),
          website: j
            .Yj()
            .refine((e) => "" === e, {
              message: "This field should be left empty",
            }),
        }),
        R = () => {
          try {
            let e = JSON.parse(
                localStorage.getItem("contactFormSubmissions") || "[]",
              ),
              s = Date.now(),
              r = e.filter((e) => s - e < 864e5);
            if (r.length >= 3) return { canSubmit: !1 };
            let a = r[r.length - 1];
            if (a && s - a < 6e4)
              return {
                canSubmit: !1,
                timeRemaining: Math.ceil((6e4 - (s - a)) / 1e3),
              };
            return { canSubmit: !0 };
          } catch (e) {
            return { canSubmit: !0 };
          }
        },
        C = () => {
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
      function z(e) {
        let { onSuccess: s } = e,
          [r, l] = (0, t.useState)(!1),
          [n, c] = (0, t.useState)(!1),
          [d, j] = (0, t.useState)(null),
          [z, O] = (0, t.useState)(null);
        (0, t.useEffect)(() => {
          (0, k.f0)(k.wf.FORM_START, k.XC.FORM, {
            form_name: "contact_form_dialog",
          });
        }, []);
        let T = (0, v.mN)({
            resolver: (0, N.u)(_),
            defaultValues: {
              firstName: "",
              lastName: "",
              email: "",
              phone: "",
              countryCode: "+212",
              subject: "",
              message: "",
              website: "",
            },
          }),
          F = async (e) => {
            j(null);
            let { canSubmit: r, timeRemaining: a } = R();
            if (!r) {
              a
                ? (j(
                    "Please wait ".concat(
                      a,
                      " seconds before submitting again.",
                    ),
                  ),
                  (0, k.f0)(k.wf.FORM_ERROR, k.XC.ERROR, {
                    form_name: "contact_form_dialog",
                    error_type: "rate_limit",
                    error_message: "Rate limit exceeded. Wait ".concat(a, "s"),
                  }))
                : (j(
                    "You have reached the maximum number of submissions. Please try again later.",
                  ),
                  (0, k.f0)(k.wf.FORM_ERROR, k.XC.ERROR, {
                    form_name: "contact_form_dialog",
                    error_type: "max_submissions",
                    error_message: "Maximum submissions reached",
                  }));
              return;
            }
            if ("" !== e.website) {
              setTimeout(() => {
                (c(!0), s && setTimeout(s, 2e3));
              }, 1e3);
              return;
            }
            (l(!0),
              (0, k.f0)(k.wf.FORM_SUBMIT, k.XC.FORM, {
                form_name: "contact_form_dialog",
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
                      countryCode: e.countryCode || "+212",
                    },
                    messageDetails: { subject: e.subject, message: e.message },
                    source: "Contact Form",
                  }),
                }),
                a = await r.json();
              r.ok
                ? (C(),
                  c(!0),
                  (0, f.oR)({
                    title: "Message sent",
                    description:
                      "We've received your message and will get back to you soon.",
                    variant: "default",
                  }),
                  (0, k.f0)(k.wf.FORM_COMPLETE, k.XC.CONVERSION, {
                    form_name: "contact_form_dialog",
                    subject: e.subject,
                  }),
                  s && setTimeout(s, 2e3))
                : (j(
                    a.error ||
                      "We couldn't send your message. Please try again.",
                  ),
                  (0, f.oR)({
                    title: "Something went wrong",
                    description:
                      "We couldn't send your message. Please try again.",
                    variant: "destructive",
                  }),
                  (0, k.f0)(k.wf.FORM_ERROR, k.XC.ERROR, {
                    form_name: "contact_form_dialog",
                    error_type: "api_error",
                    error_message: a.error || "API error",
                  }));
            } catch (e) {
              (j("Network error. Please check your connection and try again."),
                (0, f.oR)({
                  title: "Connection error",
                  description:
                    "We couldn't reach our servers. Please check your connection and try again.",
                  variant: "destructive",
                }),
                (0, k.f0)(k.wf.FORM_ERROR, k.XC.ERROR, {
                  form_name: "contact_form_dialog",
                  error_type: "network_error",
                  error_message: "Network connection failed",
                }));
            } finally {
              l(!1);
            }
          };
        return n
          ? (0, a.jsxs)("div", {
              className:
                "flex flex-col items-center justify-center p-6 sm:p-8 text-center min-h-[250px]",
              children: [
                (0, a.jsx)(i.P.div, {
                  initial: { scale: 0, opacity: 0 },
                  animate: { scale: 1, opacity: 1 },
                  transition: { duration: 0.4, type: "spring", bounce: 0.4 },
                  children: (0, a.jsxs)("div", {
                    className: "relative",
                    children: [
                      (0, a.jsx)("div", {
                        className:
                          "absolute inset-0 bg-primary/20 rounded-full blur-2xl animate-pulse",
                      }),
                      (0, a.jsx)("div", {
                        className:
                          "relative w-14 h-14 rounded-full bg-gradient-to-br from-primary/20 to-primary/10 backdrop-blur-sm flex items-center justify-center mb-4 shadow-xl",
                        children: (0, a.jsx)(h.A, {
                          className: "h-7 w-7 text-primary",
                        }),
                      }),
                    ],
                  }),
                }),
                (0, a.jsx)(i.P.h3, {
                  initial: { opacity: 0, y: 10 },
                  animate: { opacity: 1, y: 0 },
                  transition: { delay: 0.2 },
                  className:
                    "text-lg font-bold mb-2 bg-gradient-to-r from-foreground to-foreground/80 bg-clip-text text-transparent",
                  children: "Message Sent Successfully!",
                }),
                (0, a.jsx)(i.P.p, {
                  initial: { opacity: 0, y: 10 },
                  animate: { opacity: 1, y: 0 },
                  transition: { delay: 0.3 },
                  className: "text-sm text-muted-foreground max-w-sm",
                  children: "We'll respond within 24 hours.",
                }),
              ],
            })
          : (0, a.jsxs)("form", {
              onSubmit: T.handleSubmit(F),
              className: "space-y-3 p-4 sm:p-5",
              children: [
                (0, a.jsxs)("div", {
                  className: "space-y-1",
                  children: [
                    (0, a.jsx)("h2", {
                      className:
                        "text-lg sm:text-xl font-bold bg-gradient-to-r from-foreground to-foreground/80 bg-clip-text text-transparent",
                      children: "Get in Touch",
                    }),
                    (0, a.jsx)("p", {
                      className: "text-xs text-muted-foreground/90",
                      children:
                        "We're here to help with your Ausbildung journey",
                    }),
                  ],
                }),
                d &&
                  (0, a.jsxs)(i.P.div, {
                    initial: { opacity: 0, scale: 0.95 },
                    animate: { opacity: 1, scale: 1 },
                    className:
                      "bg-destructive/10 backdrop-blur-sm p-3 rounded-lg border border-destructive/20 flex items-start gap-2",
                    children: [
                      (0, a.jsx)(b.A, {
                        className: "h-5 w-5 text-destructive shrink-0 mt-0.5",
                      }),
                      (0, a.jsx)("div", {
                        className: "text-sm text-destructive",
                        children: d,
                      }),
                    ],
                  }),
                (0, a.jsxs)("div", {
                  className: "grid gap-3 grid-cols-1 sm:grid-cols-2",
                  children: [
                    (0, a.jsxs)("div", {
                      className: "space-y-1.5",
                      children: [
                        (0, a.jsx)(u.J, {
                          htmlFor: "firstName",
                          className: (0, w.cn)(
                            "text-xs font-medium",
                            T.formState.errors.firstName && "text-destructive",
                          ),
                          children: "First Name",
                        }),
                        (0, a.jsx)(m.p, {
                          id: "firstName",
                          ...T.register("firstName"),
                          className: (0, w.cn)(
                            "h-10 sm:h-9 bg-background/50 backdrop-blur-sm border-border/50 focus:border-primary/50 transition-all text-sm",
                            T.formState.errors.firstName &&
                              "border-destructive/50 focus:border-destructive",
                          ),
                          placeholder: "John",
                        }),
                        T.formState.errors.firstName &&
                          (0, a.jsx)("p", {
                            className: "text-xs text-destructive",
                            children: T.formState.errors.firstName.message,
                          }),
                      ],
                    }),
                    (0, a.jsxs)("div", {
                      className: "space-y-1.5",
                      children: [
                        (0, a.jsx)(u.J, {
                          htmlFor: "lastName",
                          className: (0, w.cn)(
                            "text-xs font-medium",
                            T.formState.errors.lastName && "text-destructive",
                          ),
                          children: "Last Name",
                        }),
                        (0, a.jsx)(m.p, {
                          id: "lastName",
                          ...T.register("lastName"),
                          className: (0, w.cn)(
                            "h-10 sm:h-9 bg-background/50 backdrop-blur-sm border-border/50 focus:border-primary/50 transition-all text-sm",
                            T.formState.errors.lastName &&
                              "border-destructive/50 focus:border-destructive",
                          ),
                          placeholder: "Doe",
                        }),
                        T.formState.errors.lastName &&
                          (0, a.jsx)("p", {
                            className: "text-xs text-destructive",
                            children: T.formState.errors.lastName.message,
                          }),
                      ],
                    }),
                  ],
                }),
                (0, a.jsxs)("div", {
                  className: "space-y-1.5",
                  children: [
                    (0, a.jsx)(u.J, {
                      htmlFor: "email",
                      className: (0, w.cn)(
                        "text-xs font-medium",
                        T.formState.errors.email && "text-destructive",
                      ),
                      children: "Email Address",
                    }),
                    (0, a.jsx)(m.p, {
                      id: "email",
                      type: "email",
                      ...T.register("email"),
                      className: (0, w.cn)(
                        "h-10 sm:h-9 bg-background/50 backdrop-blur-sm border-border/50 focus:border-primary/50 transition-all text-sm",
                        T.formState.errors.email &&
                          "border-destructive/50 focus:border-destructive",
                      ),
                      placeholder: "john@example.com",
                    }),
                    T.formState.errors.email &&
                      (0, a.jsx)("p", {
                        className: "text-xs text-destructive",
                        children: T.formState.errors.email.message,
                      }),
                  ],
                }),
                (0, a.jsxs)("div", {
                  className: "space-y-1.5",
                  children: [
                    (0, a.jsx)(u.J, {
                      htmlFor: "phone",
                      className: (0, w.cn)(
                        "text-xs font-medium",
                        T.formState.errors.phone && "text-destructive",
                      ),
                      children: "Phone Number",
                    }),
                    (0, a.jsx)(S.L, {
                      value: T.watch("phone"),
                      onChange: (e) => T.setValue("phone", e),
                      onCountryChange: (e) => {
                        (O(e), T.setValue("countryCode", e.phoneCode));
                      },
                      defaultCountry: "IN",
                      error: !!T.formState.errors.phone,
                      className: (0, w.cn)(
                        "h-10 sm:h-9 bg-background/50 backdrop-blur-sm border-border/50 focus:border-primary/50 transition-all text-sm",
                        T.formState.errors.phone &&
                          "border-destructive/50 focus:border-destructive",
                      ),
                      placeholder: "Enter your phone number",
                    }),
                    T.formState.errors.phone &&
                      (0, a.jsx)("p", {
                        className: "text-xs text-destructive",
                        children: T.formState.errors.phone.message,
                      }),
                  ],
                }),
                (0, a.jsxs)("div", {
                  className: "space-y-1.5",
                  children: [
                    (0, a.jsx)(u.J, {
                      htmlFor: "subject",
                      className: (0, w.cn)(
                        "text-xs font-medium",
                        T.formState.errors.subject && "text-destructive",
                      ),
                      children: "Subject",
                    }),
                    (0, a.jsxs)(y.l6, {
                      onValueChange: (e) => T.setValue("subject", e),
                      defaultValue: T.getValues("subject"),
                      children: [
                        (0, a.jsx)(y.bq, {
                          id: "subject",
                          className: (0, w.cn)(
                            "h-10 sm:h-9 bg-background/50 backdrop-blur-sm border-border/50 focus:border-primary/50 transition-all text-sm",
                            T.formState.errors.subject &&
                              "border-destructive/50 focus:border-destructive",
                          ),
                          children: (0, a.jsx)(y.yv, {
                            placeholder: "Choose a topic",
                          }),
                        }),
                        (0, a.jsxs)(y.gC, {
                          children: [
                            (0, a.jsx)(y.eb, {
                              value: "general",
                              children: "General Inquiry",
                            }),
                            (0, a.jsx)(y.eb, {
                              value: "ausbildung",
                              children: "Ausbildung Consultation",
                            }),
                            (0, a.jsx)(y.eb, {
                              value: "application",
                              children: "Application Process",
                            }),
                            (0, a.jsx)(y.eb, {
                              value: "visa",
                              children: "Visa & Documentation",
                            }),
                            (0, a.jsx)(y.eb, {
                              value: "language",
                              children: "Language Requirements",
                            }),
                            (0, a.jsx)(y.eb, {
                              value: "fees",
                              children: "Fees & Costs",
                            }),
                          ],
                        }),
                      ],
                    }),
                    T.formState.errors.subject &&
                      (0, a.jsx)("p", {
                        className: "text-xs text-destructive",
                        children: T.formState.errors.subject.message,
                      }),
                  ],
                }),
                (0, a.jsxs)("div", {
                  className: "space-y-1.5",
                  children: [
                    (0, a.jsx)(u.J, {
                      htmlFor: "message",
                      className: (0, w.cn)(
                        "text-xs font-medium",
                        T.formState.errors.message && "text-destructive",
                      ),
                      children: "Your Message",
                    }),
                    (0, a.jsx)(x.T, {
                      id: "message",
                      rows: 3,
                      ...T.register("message"),
                      className: (0, w.cn)(
                        "resize-none bg-background/50 backdrop-blur-sm border-border/50 focus:border-primary/50 transition-all text-sm min-h-[70px] sm:min-h-[60px]",
                        T.formState.errors.message &&
                          "border-destructive/50 focus:border-destructive",
                      ),
                      placeholder: "Tell us how we can help you...",
                    }),
                    T.formState.errors.message &&
                      (0, a.jsx)("p", {
                        className: "text-xs text-destructive",
                        children: T.formState.errors.message.message,
                      }),
                  ],
                }),
                (0, a.jsxs)("div", {
                  className: "hidden",
                  "aria-hidden": "true",
                  children: [
                    (0, a.jsx)(u.J, {
                      htmlFor: "website",
                      children: "Website",
                    }),
                    (0, a.jsx)(m.p, {
                      id: "website",
                      type: "text",
                      tabIndex: -1,
                      autoComplete: "off",
                      ...T.register("website"),
                    }),
                  ],
                }),
                (0, a.jsx)(o.$, {
                  type: "submit",
                  className:
                    "w-full h-11 sm:h-10 bg-primary hover:bg-primary/90 text-primary-foreground font-medium shadow-lg shadow-primary/25 transition-all hover:shadow-xl hover:shadow-primary/30 text-sm touch-manipulation",
                  disabled: r,
                  children: r
                    ? (0, a.jsxs)(i.P.div, {
                        className: "flex items-center",
                        initial: { opacity: 0 },
                        animate: { opacity: 1 },
                        children: [
                          (0, a.jsx)(p.A, {
                            className: "mr-2 h-4 w-4 animate-spin",
                          }),
                          "Sending your message...",
                        ],
                      })
                    : (0, a.jsxs)(i.P.div, {
                        className: "flex items-center",
                        whileHover: { x: 2 },
                        children: [
                          "Send Message",
                          (0, a.jsx)(g.A, { className: "ml-2 h-4 w-4" }),
                        ],
                      }),
                }),
                (0, a.jsxs)("p", {
                  className: "text-xs text-muted-foreground/70 text-center",
                  children: [
                    "By submitting this form, you agree to our",
                    " ",
                    (0, a.jsx)("span", {
                      className:
                        "underline underline-offset-2 hover:text-muted-foreground transition-colors cursor-pointer",
                      children: "privacy policy",
                    }),
                  ],
                }),
              ],
            });
      }
      var O = r(95540),
        T = r(43431),
        F = r(76112),
        P = r(74285),
        A = r(55604),
        M = r(29005),
        E = r(10542),
        W = r.n(E);
      function q() {
        let { t: e } = (0, l.ok)(),
          [s, r] = (0, t.useState)(!1),
          u = e("help.faqs");
        return (0, a.jsxs)("div", {
          className: "min-h-[85vh] relative overflow-visible",
          children: [
            (0, a.jsx)("div", {
              className:
                "fixed inset-0 -z-10 overflow-hidden pointer-events-none",
            }),
            (0, a.jsxs)("div", {
              className: "relative z-10",
              children: [
                (0, a.jsxs)(i.P.div, {
                  initial: { opacity: 0 },
                  animate: { opacity: 1 },
                  transition: { duration: 0.5 },
                  className: "mb-8",
                  children: [
                    (0, a.jsx)("h1", {
                      className: "text-3xl md:text-4xl font-bold",
                      children: e("help.title"),
                    }),
                    (0, a.jsx)("p", {
                      className: "text-muted-foreground mt-2",
                      children: e("help.subtitle"),
                    }),
                  ],
                }),
                (0, a.jsx)("div", {
                  className: "mb-8",
                  children: (0, a.jsxs)(i.P.div, {
                    initial: { opacity: 0 },
                    animate: { opacity: 1 },
                    transition: { duration: 0.5, delay: 0.1 },
                    className:
                      "relative overflow-hidden rounded-2xl border backdrop-blur-md bg-background/30 p-6",
                    children: [
                      (0, a.jsx)("div", {
                        className:
                          "absolute inset-0 bg-gradient-to-br from-primary/5 via-secondary/5 to-background/10 z-0",
                      }),
                      (0, a.jsx)("div", {
                        className:
                          "absolute inset-0 w-full h-full bg-grid-white/5 z-0 opacity-10",
                      }),
                      (0, a.jsxs)("div", {
                        className:
                          "relative z-10 flex items-center justify-between",
                        children: [
                          (0, a.jsxs)("div", {
                            children: [
                              (0, a.jsxs)("h2", {
                                className:
                                  "text-xl font-bold mb-2 flex items-center",
                                children: [
                                  (0, a.jsx)(O.A, {
                                    className: "h-5 w-5 mr-2 text-primary",
                                  }),
                                  e("help.support.title"),
                                ],
                              }),
                              (0, a.jsx)("p", {
                                className: "text-muted-foreground max-w-2xl",
                                children: e("help.support.description"),
                              }),
                            ],
                          }),
                          (0, a.jsxs)(c.lG, {
                            open: s,
                            onOpenChange: r,
                            children: [
                              (0, a.jsx)(c.zM, {
                                asChild: !0,
                                children: (0, a.jsx)(o.$, {
                                  className: "whitespace-nowrap",
                                  children: e("help.support.contactButton"),
                                }),
                              }),
                              (0, a.jsxs)(c.Cf, {
                                className:
                                  "w-[calc(100%-2rem)] max-w-[95vw] sm:max-w-[480px] mx-auto p-0 overflow-hidden border-border/50 bg-background/95 backdrop-blur-xl max-h-[85vh] sm:max-h-[90vh] rounded-xl",
                                children: [
                                  (0, a.jsx)(c.c7, {
                                    className: "sr-only",
                                    children: (0, a.jsx)(c.L3, {
                                      children: e("help.support.dialogTitle"),
                                    }),
                                  }),
                                  (0, a.jsxs)("div", {
                                    className: "relative",
                                    children: [
                                      (0, a.jsx)("div", {
                                        className:
                                          "absolute inset-0 bg-gradient-to-br from-primary/10 via-primary/5 to-transparent",
                                      }),
                                      (0, a.jsx)("div", {
                                        className:
                                          "absolute inset-0 bg-gradient-to-tr from-transparent via-background/50 to-background/80",
                                      }),
                                      (0, a.jsx)("button", {
                                        onClick: () => r(!1),
                                        className:
                                          "absolute right-3 top-3 z-10 rounded-full bg-background/80 backdrop-blur-sm p-1.5 hover:bg-background/90 transition-colors sm:hidden",
                                        "aria-label": "Close dialog",
                                        children: (0, a.jsx)("svg", {
                                          className: "h-4 w-4",
                                          fill: "none",
                                          viewBox: "0 0 24 24",
                                          stroke: "currentColor",
                                          children: (0, a.jsx)("path", {
                                            strokeLinecap: "round",
                                            strokeLinejoin: "round",
                                            strokeWidth: 2,
                                            d: "M6 18L18 6M6 6l12 12",
                                          }),
                                        }),
                                      }),
                                      (0, a.jsx)("div", {
                                        className: "relative",
                                        children: (0, a.jsx)(z, {
                                          onSuccess: () => r(!1),
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
                    ],
                  }),
                }),
                (0, a.jsx)(i.P.div, {
                  initial: { opacity: 0 },
                  animate: { opacity: 1 },
                  transition: { duration: 0.5, delay: 0.2 },
                  className: "mb-8",
                  children: (0, a.jsxs)("div", {
                    className:
                      "relative overflow-hidden rounded-2xl border backdrop-blur-md bg-background/30 p-6",
                    children: [
                      (0, a.jsx)("div", {
                        className:
                          "absolute inset-0 bg-gradient-to-br from-primary/5 via-blue-300/5 to-background/10 z-0",
                      }),
                      (0, a.jsx)("div", {
                        className:
                          "absolute inset-0 w-full h-full bg-grid-white/5 z-0 opacity-10",
                      }),
                      (0, a.jsxs)("div", {
                        className: "relative z-10",
                        children: [
                          (0, a.jsxs)("div", {
                            className: "flex items-center mb-4",
                            children: [
                              (0, a.jsx)("div", {
                                className:
                                  "p-2 rounded-lg bg-primary/10 text-primary mr-3",
                                children: (0, a.jsx)(T.A, {
                                  className: "h-5 w-5",
                                }),
                              }),
                              (0, a.jsx)("h2", {
                                className: "text-xl font-bold",
                                children: e("help.search.title"),
                              }),
                            ],
                          }),
                          (0, a.jsxs)("div", {
                            className: "flex flex-col space-y-4",
                            children: [
                              (0, a.jsxs)("div", {
                                className:
                                  "relative opacity-70 pointer-events-none",
                                children: [
                                  (0, a.jsx)(m.p, {
                                    className:
                                      "pr-24 bg-background/50 backdrop-blur-sm",
                                    placeholder: e("help.search.placeholder"),
                                  }),
                                  (0, a.jsx)("div", {
                                    className:
                                      "absolute right-2 top-1/2 -translate-y-1/2",
                                    children: (0, a.jsx)(o.$, {
                                      size: "sm",
                                      variant: "ghost",
                                      disabled: !0,
                                      className: "h-7 text-xs",
                                      children: e("help.search.comingSoon"),
                                    }),
                                  }),
                                ],
                              }),
                              (0, a.jsx)("p", {
                                className: "text-sm text-muted-foreground",
                                children: e("help.search.description"),
                              }),
                            ],
                          }),
                        ],
                      }),
                    ],
                  }),
                }),
                (0, a.jsx)("div", {
                  className: "mb-12",
                  children: (0, a.jsxs)(d.Tabs, {
                    defaultValue: "faq",
                    className: "w-full",
                    children: [
                      (0, a.jsxs)(d.TabsList, {
                        className:
                          "mb-6 w-full justify-start bg-transparent p-0 space-x-4",
                        children: [
                          (0, a.jsxs)(d.TabsTrigger, {
                            value: "faq",
                            className:
                              "data-[state=active]:bg-primary/10 data-[state=active]:text-primary transition-all",
                            children: [
                              (0, a.jsx)(F.A, { className: "h-4 w-4 mr-2" }),
                              e("help.tabs.faq"),
                            ],
                          }),
                          (0, a.jsxs)(d.TabsTrigger, {
                            value: "guides",
                            className:
                              "data-[state=active]:bg-primary/10 data-[state=active]:text-primary transition-all",
                            children: [
                              (0, a.jsx)(P.A, { className: "h-4 w-4 mr-2" }),
                              e("help.tabs.guides"),
                            ],
                          }),
                          (0, a.jsxs)(d.TabsTrigger, {
                            value: "videos",
                            className:
                              "data-[state=active]:bg-primary/10 data-[state=active]:text-primary transition-all",
                            children: [
                              (0, a.jsx)(A.A, { className: "h-4 w-4 mr-2" }),
                              e("help.tabs.videos"),
                            ],
                          }),
                          (0, a.jsxs)(d.TabsTrigger, {
                            value: "community",
                            className:
                              "data-[state=active]:bg-primary/10 data-[state=active]:text-primary transition-all",
                            children: [
                              (0, a.jsx)(M.A, { className: "h-4 w-4 mr-2" }),
                              e("help.tabs.community"),
                            ],
                          }),
                        ],
                      }),
                      (0, a.jsx)(d.TabsContent, {
                        value: "faq",
                        className: "mt-0",
                        children: (0, a.jsxs)("div", {
                          className:
                            "relative overflow-hidden rounded-2xl border backdrop-blur-md bg-background/30 p-6",
                          children: [
                            (0, a.jsx)("div", {
                              className:
                                "absolute inset-0 bg-gradient-to-br from-primary/5 via-secondary/5 to-background/10 z-0",
                            }),
                            (0, a.jsx)("div", {
                              className:
                                "absolute inset-0 w-full h-full bg-grid-white/5 z-0 opacity-10",
                            }),
                            (0, a.jsxs)("div", {
                              className: "relative z-10",
                              children: [
                                (0, a.jsx)("h2", {
                                  className: "text-xl font-bold mb-6",
                                  children: e("help.faq.title"),
                                }),
                                (0, a.jsx)("div", {
                                  className: "space-y-6",
                                  children:
                                    Array.isArray(u) &&
                                    u.map((e, s) =>
                                      (0, a.jsxs)(
                                        "div",
                                        {
                                          className:
                                            "border-b border-border/50 pb-6 last:border-0",
                                          children: [
                                            (0, a.jsx)("h3", {
                                              className: "font-medium mb-2",
                                              children: e.question,
                                            }),
                                            (0, a.jsx)("p", {
                                              className:
                                                "text-sm text-muted-foreground",
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
                          ],
                        }),
                      }),
                      (0, a.jsx)(d.TabsContent, {
                        value: "guides",
                        className: "mt-0",
                        children: (0, a.jsxs)("div", {
                          className:
                            "relative overflow-hidden rounded-2xl border backdrop-blur-md bg-background/30 p-6",
                          children: [
                            (0, a.jsx)("div", {
                              className:
                                "absolute inset-0 bg-gradient-to-br from-primary/5 via-secondary/5 to-background/10 z-0",
                            }),
                            (0, a.jsx)("div", {
                              className:
                                "absolute inset-0 w-full h-full bg-grid-white/5 z-0 opacity-10",
                            }),
                            (0, a.jsxs)("div", {
                              className: "relative z-10",
                              children: [
                                (0, a.jsx)("h2", {
                                  className: "text-xl font-bold mb-6",
                                  children: e("help.guides.title"),
                                }),
                                (0, a.jsxs)("div", {
                                  className:
                                    "grid grid-cols-1 md:grid-cols-2 gap-6",
                                  children: [
                                    (0, a.jsxs)(n.Zp, {
                                      className:
                                        "bg-card/50 backdrop-blur-sm border-border/50",
                                      children: [
                                        (0, a.jsx)(n.aR, {
                                          children: (0, a.jsx)(n.ZB, {
                                            className: "text-base",
                                            children: e(
                                              "help.guides.basics.title",
                                            ),
                                          }),
                                        }),
                                        (0, a.jsxs)(n.Wu, {
                                          children: [
                                            (0, a.jsx)("p", {
                                              className:
                                                "text-sm text-muted-foreground mb-4",
                                              children: e(
                                                "help.guides.basics.description",
                                              ),
                                            }),
                                            (0, a.jsx)(W(), {
                                              href: "/ausbildung-basics",
                                              target: "_blank",
                                              rel: "noopener noreferrer",
                                              children: (0, a.jsx)(o.$, {
                                                variant: "outline",
                                                size: "sm",
                                                children: e(
                                                  "help.guides.readGuide",
                                                ),
                                              }),
                                            }),
                                          ],
                                        }),
                                      ],
                                    }),
                                    (0, a.jsxs)(n.Zp, {
                                      className:
                                        "bg-card/50 backdrop-blur-sm border-border/50",
                                      children: [
                                        (0, a.jsx)(n.aR, {
                                          children: (0, a.jsx)(n.ZB, {
                                            className: "text-base",
                                            children: e(
                                              "help.guides.application.title",
                                            ),
                                          }),
                                        }),
                                        (0, a.jsxs)(n.Wu, {
                                          children: [
                                            (0, a.jsx)("p", {
                                              className:
                                                "text-sm text-muted-foreground mb-4",
                                              children: e(
                                                "help.guides.application.description",
                                              ),
                                            }),
                                            (0, a.jsx)(W(), {
                                              href: "/application",
                                              target: "_blank",
                                              rel: "noopener noreferrer",
                                              children: (0, a.jsx)(o.$, {
                                                variant: "outline",
                                                size: "sm",
                                                children: e(
                                                  "help.guides.readGuide",
                                                ),
                                              }),
                                            }),
                                          ],
                                        }),
                                      ],
                                    }),
                                    (0, a.jsxs)(n.Zp, {
                                      className:
                                        "bg-card/50 backdrop-blur-sm border-border/50",
                                      children: [
                                        (0, a.jsx)(n.aR, {
                                          children: (0, a.jsx)(n.ZB, {
                                            className: "text-base",
                                            children: e(
                                              "help.guides.visa.title",
                                            ),
                                          }),
                                        }),
                                        (0, a.jsxs)(n.Wu, {
                                          children: [
                                            (0, a.jsx)("p", {
                                              className:
                                                "text-sm text-muted-foreground mb-4",
                                              children: e(
                                                "help.guides.visa.description",
                                              ),
                                            }),
                                            (0, a.jsx)(W(), {
                                              href: "/visa",
                                              target: "_blank",
                                              rel: "noopener noreferrer",
                                              children: (0, a.jsx)(o.$, {
                                                variant: "outline",
                                                size: "sm",
                                                children: e(
                                                  "help.guides.readGuide",
                                                ),
                                              }),
                                            }),
                                          ],
                                        }),
                                      ],
                                    }),
                                    (0, a.jsxs)(n.Zp, {
                                      className:
                                        "bg-card/50 backdrop-blur-sm border-border/50",
                                      children: [
                                        (0, a.jsx)(n.aR, {
                                          children: (0, a.jsx)(n.ZB, {
                                            className: "text-base",
                                            children: e(
                                              "help.guides.language.title",
                                            ),
                                          }),
                                        }),
                                        (0, a.jsxs)(n.Wu, {
                                          children: [
                                            (0, a.jsx)("p", {
                                              className:
                                                "text-sm text-muted-foreground mb-4",
                                              children: e(
                                                "help.guides.language.description",
                                              ),
                                            }),
                                            (0, a.jsx)(W(), {
                                              href: "/language",
                                              target: "_blank",
                                              rel: "noopener noreferrer",
                                              children: (0, a.jsx)(o.$, {
                                                variant: "outline",
                                                size: "sm",
                                                children: e(
                                                  "help.guides.readGuide",
                                                ),
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
                          ],
                        }),
                      }),
                      (0, a.jsx)(d.TabsContent, {
                        value: "videos",
                        className: "mt-0",
                        children: (0, a.jsxs)("div", {
                          className:
                            "relative overflow-hidden rounded-2xl border backdrop-blur-md bg-background/30 p-6",
                          children: [
                            (0, a.jsx)("div", {
                              className:
                                "absolute inset-0 bg-gradient-to-br from-primary/5 via-secondary/5 to-background/10 z-0",
                            }),
                            (0, a.jsx)("div", {
                              className:
                                "absolute inset-0 w-full h-full bg-grid-white/5 z-0 opacity-10",
                            }),
                            (0, a.jsx)("div", {
                              className:
                                "relative z-10 flex flex-col items-center justify-center py-12",
                              children: (0, a.jsxs)("div", {
                                className:
                                  "mb-6 flex flex-col items-center text-center",
                                children: [
                                  (0, a.jsx)("div", {
                                    className:
                                      "p-3 rounded-full bg-primary/10 mb-4",
                                    children: (0, a.jsx)(A.A, {
                                      className: "h-10 w-10 text-primary",
                                    }),
                                  }),
                                  (0, a.jsx)("h2", {
                                    className: "text-2xl font-bold mb-2",
                                    children: e("help.videos.title"),
                                  }),
                                  (0, a.jsx)("p", {
                                    className:
                                      "text-muted-foreground max-w-md text-center mb-8",
                                    children: e("help.videos.description"),
                                  }),
                                  (0, a.jsxs)("div", {
                                    className:
                                      "inline-flex items-center text-sm text-primary",
                                    children: [
                                      (0, a.jsx)(A.A, {
                                        className: "h-4 w-4 mr-2",
                                      }),
                                      (0, a.jsx)("span", {
                                        children: e("help.videos.comingSoon"),
                                      }),
                                    ],
                                  }),
                                ],
                              }),
                            }),
                          ],
                        }),
                      }),
                      (0, a.jsx)(d.TabsContent, {
                        value: "community",
                        className: "mt-0",
                        children: (0, a.jsxs)("div", {
                          className:
                            "relative overflow-hidden rounded-2xl border backdrop-blur-md bg-background/30 p-6",
                          children: [
                            (0, a.jsx)("div", {
                              className:
                                "absolute inset-0 bg-gradient-to-br from-primary/5 via-secondary/5 to-background/10 z-0",
                            }),
                            (0, a.jsx)("div", {
                              className:
                                "absolute inset-0 w-full h-full bg-grid-white/5 z-0 opacity-10",
                            }),
                            (0, a.jsx)("div", {
                              className:
                                "relative z-10 flex flex-col items-center justify-center py-12",
                              children: (0, a.jsxs)("div", {
                                className:
                                  "mb-6 flex flex-col items-center text-center",
                                children: [
                                  (0, a.jsx)("div", {
                                    className:
                                      "p-3 rounded-full bg-primary/10 mb-4",
                                    children: (0, a.jsx)(M.A, {
                                      className: "h-10 w-10 text-primary",
                                    }),
                                  }),
                                  (0, a.jsx)("h2", {
                                    className: "text-2xl font-bold mb-2",
                                    children: e("help.community.title"),
                                  }),
                                  (0, a.jsx)("p", {
                                    className:
                                      "text-muted-foreground max-w-md text-center mb-8",
                                    children: e("help.community.description"),
                                  }),
                                  (0, a.jsxs)("div", {
                                    className:
                                      "inline-flex items-center text-sm text-primary",
                                    children: [
                                      (0, a.jsx)(M.A, {
                                        className: "h-4 w-4 mr-2",
                                      }),
                                      (0, a.jsx)("span", {
                                        children: e(
                                          "help.community.comingSoon",
                                        ),
                                      }),
                                    ],
                                  }),
                                ],
                              }),
                            }),
                          ],
                        }),
                      }),
                    ],
                  }),
                }),
              ],
            }),
          ],
        });
      }
    },
  },
  (e) => {
    var s = (s) => e((e.s = s));
    (e.O(0, [46593, 36209, 84121, 72076, 77358], () => s(56893)),
      (_N_E = e.O()));
  },
]);
