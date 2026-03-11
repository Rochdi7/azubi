(self.webpackChunk_N_E = self.webpackChunk_N_E || []).push([
  [56681],
  {
    9993: (e, t, a) => {
      Promise.resolve().then(a.bind(a, 34031));
    },
    34031: (e, t, a) => {
      "use strict";
      (a.r(t), a.d(t, { default: () => q }));
      var s = a(70207),
        i = a(87223),
        l = a(54459),
        r = a(45748),
        n = a(39441),
        c = a(80187),
        o = a(95941),
        d = a(27239),
        m = a(28131),
        x = a(51105),
        h = a(39342),
        u = a(57619),
        p = a(67926),
        v = a(97932),
        f = a(39175),
        g = a(31159),
        j = a(46031),
        b = a(89850),
        w = a(68233),
        N = a(55960);
      function y(e) {
        let {
            onCreateCV: t,
            isCreating: a,
            existingCV: l,
            onUseExistingCV: y,
            onSkipExistingCV: F,
          } = e,
          [k, A] = (0, i.useState)("upload"),
          [B, C] = (0, i.useState)(null),
          [_, E] = (0, i.useState)(!!l),
          [P, D] = (0, i.useState)(!1),
          { t: S } = (0, w.ok)();
        if (l && _) {
          var T;
          return (0, s.jsxs)("div", {
            className:
              "relative z-10 flex flex-col items-center justify-center min-h-[85vh] py-8",
            children: [
              (0, s.jsx)("div", {
                className:
                  "absolute top-20 left-10 w-32 h-32 bg-primary/5 rounded-full blur-3xl animate-pulse",
              }),
              (0, s.jsx)("div", {
                className:
                  "absolute bottom-20 right-10 w-40 h-40 bg-primary/3 rounded-full blur-3xl animate-pulse delay-700",
              }),
              (0, s.jsxs)(r.P.div, {
                initial: { opacity: 0, y: 20 },
                animate: { opacity: 1, y: 0 },
                transition: { duration: 0.5 },
                className: "relative z-10 w-full max-w-3xl px-4",
                children: [
                  (0, s.jsx)("div", {
                    className: "text-center mb-6",
                    children: (0, s.jsxs)(r.P.div, {
                      initial: { scale: 0 },
                      animate: { scale: 1 },
                      transition: {
                        type: "spring",
                        stiffness: 200,
                        delay: 0.1,
                      },
                      className:
                        "inline-flex items-center gap-2 mb-4 p-3 rounded-xl bg-gradient-to-br from-[#344F1F] to-[#2a3f19] shadow-lg",
                      children: [
                        (0, s.jsx)("div", {
                          className: "p-2 rounded-lg bg-[#F4991A] shadow-md",
                          children: (0, s.jsx)(d.A, {
                            className: "h-5 w-5 text-white",
                          }),
                        }),
                        (0, s.jsxs)("div", {
                          className: "text-left",
                          children: [
                            (0, s.jsx)("h2", {
                              className: "text-lg font-bold text-white",
                              children: S("cvBuilder.welcome.existingCvFound"),
                            }),
                            (0, s.jsx)("p", {
                              className: "text-white/70 text-xs",
                              children: S(
                                "cvBuilder.welcome.existingCvDescription",
                              ),
                            }),
                          ],
                        }),
                      ],
                    }),
                  }),
                  (0, s.jsx)(r.P.div, {
                    initial: { opacity: 0, scale: 0.95 },
                    animate: { opacity: 1, scale: 1 },
                    transition: { delay: 0.2, duration: 0.4 },
                    children: (0, s.jsx)(c.Zp, {
                      className:
                        "border border-[#F2EAD3] bg-white shadow-md mb-6",
                      children: (0, s.jsx)(c.Wu, {
                        className: "p-4",
                        children: (0, s.jsxs)("div", {
                          className: "flex items-center gap-3",
                          children: [
                            (0, s.jsx)("div", {
                              className:
                                "p-2.5 rounded-lg bg-gradient-to-br from-[#F4991A] to-[#e08915] shadow-sm flex-shrink-0",
                              children: (0, s.jsx)(d.A, {
                                className: "h-5 w-5 text-white",
                              }),
                            }),
                            (0, s.jsxs)("div", {
                              className: "flex-1 min-w-0",
                              children: [
                                (0, s.jsx)("h3", {
                                  className:
                                    "font-semibold text-sm text-[#344F1F] mb-1.5 break-words",
                                  children: l.original_filename,
                                }),
                                (0, s.jsxs)("div", {
                                  className: "flex flex-wrap gap-3 text-xs",
                                  children: [
                                    (0, s.jsxs)("div", {
                                      className:
                                        "flex items-center gap-1.5 text-[#344F1F]/60",
                                      children: [
                                        (0, s.jsx)(m.A, {
                                          className: "h-3.5 w-3.5",
                                        }),
                                        (0, s.jsx)("span", {
                                          children: new Date(
                                            l.created_at,
                                          ).toLocaleDateString("en-US", {
                                            year: "numeric",
                                            month: "short",
                                            day: "numeric",
                                          }),
                                        }),
                                      ],
                                    }),
                                    (0, s.jsxs)("div", {
                                      className:
                                        "flex items-center gap-1.5 text-[#344F1F]/60",
                                      children: [
                                        (0, s.jsx)(d.A, {
                                          className: "h-3.5 w-3.5",
                                        }),
                                        (0, s.jsx)("span", {
                                          children:
                                            (T = l.file_size) < 1024
                                              ? "".concat(T, " B")
                                              : T < 1048576
                                                ? "".concat(
                                                    (T / 1024).toFixed(1),
                                                    " KB",
                                                  )
                                                : "".concat(
                                                    (T / 1048576).toFixed(1),
                                                    " MB",
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
                  }),
                  (0, s.jsxs)(r.P.div, {
                    initial: { opacity: 0 },
                    animate: { opacity: 1 },
                    transition: { delay: 0.3 },
                    className: "text-center mb-6",
                    children: [
                      (0, s.jsx)("h3", {
                        className: "text-xl font-bold text-[#344F1F] mb-1",
                        children: S("cvBuilder.welcome.howToProceed"),
                      }),
                      (0, s.jsx)("p", {
                        className: "text-sm text-muted-foreground",
                        children: S("cvBuilder.welcome.chooseOption"),
                      }),
                    ],
                  }),
                  (0, s.jsxs)(r.P.div, {
                    initial: { opacity: 0, y: 20 },
                    animate: { opacity: 1, y: 0 },
                    transition: { delay: 0.4 },
                    className: "grid grid-cols-1 md:grid-cols-3 gap-3 mb-6",
                    children: [
                      (0, s.jsx)(n.$, {
                        onClick: y,
                        disabled: a,
                        className:
                          "h-auto py-4 px-4 rounded-full bg-gradient-to-r from-[#F4991A] to-[#e08915] hover:from-[#e08915] hover:to-[#d67f14] text-white font-bold shadow-lg hover:shadow-xl transition-all border-0",
                        children: (0, s.jsxs)("div", {
                          className: "flex flex-col items-center gap-2",
                          children: [
                            (0, s.jsx)("div", {
                              className: "p-2 rounded-full bg-white/20",
                              children: (0, s.jsx)(x.A, {
                                className: "h-4 w-4",
                              }),
                            }),
                            (0, s.jsxs)("div", {
                              className: "text-center",
                              children: [
                                (0, s.jsx)("div", {
                                  className: "text-sm",
                                  children: S("cvBuilder.welcome.useThisCv"),
                                }),
                                (0, s.jsx)("div", {
                                  className: "text-xs opacity-80 font-normal",
                                  children: S("cvBuilder.welcome.autoExtract"),
                                }),
                              ],
                            }),
                          ],
                        }),
                      }),
                      (0, s.jsx)(n.$, {
                        onClick: () => {
                          (E(!1), null == F || F());
                        },
                        disabled: a,
                        variant: "outline",
                        className:
                          "h-auto py-4 px-4 rounded-full border-2 border-[#344F1F] text-[#344F1F] hover:bg-[#344F1F] hover:text-white font-bold shadow-md hover:shadow-lg transition-all group",
                        children: (0, s.jsxs)("div", {
                          className: "flex flex-col items-center gap-2",
                          children: [
                            (0, s.jsx)("div", {
                              className:
                                "p-2 rounded-full bg-[#F2EAD3] group-hover:bg-white/20 transition-colors",
                              children: (0, s.jsx)(h.A, {
                                className: "h-4 w-4",
                              }),
                            }),
                            (0, s.jsxs)("div", {
                              className: "text-center",
                              children: [
                                (0, s.jsx)("div", {
                                  className: "text-sm",
                                  children: S("cvBuilder.welcome.uploadNew"),
                                }),
                                (0, s.jsx)("div", {
                                  className:
                                    "text-xs opacity-70 font-normal group-hover:opacity-90",
                                  children: S(
                                    "cvBuilder.welcome.differentFile",
                                  ),
                                }),
                              ],
                            }),
                          ],
                        }),
                      }),
                      (0, s.jsx)(n.$, {
                        onClick: () => {
                          (E(!1), null == F || F(), t("manual"));
                        },
                        disabled: a,
                        variant: "outline",
                        className:
                          "h-auto py-4 px-4 rounded-full border-2 border-[#344F1F] text-[#344F1F] hover:bg-[#344F1F] hover:text-white font-bold shadow-md hover:shadow-lg transition-all group",
                        children: (0, s.jsxs)("div", {
                          className: "flex flex-col items-center gap-2",
                          children: [
                            (0, s.jsx)("div", {
                              className:
                                "p-2 rounded-full bg-[#F2EAD3] group-hover:bg-white/20 transition-colors",
                              children: (0, s.jsx)(u.A, {
                                className: "h-4 w-4",
                              }),
                            }),
                            (0, s.jsxs)("div", {
                              className: "text-center",
                              children: [
                                (0, s.jsx)("div", {
                                  className: "text-sm",
                                  children: S("cvBuilder.welcome.startFresh"),
                                }),
                                (0, s.jsx)("div", {
                                  className:
                                    "text-xs opacity-70 font-normal group-hover:opacity-90",
                                  children: S("cvBuilder.welcome.fromScratch"),
                                }),
                              ],
                            }),
                          ],
                        }),
                      }),
                    ],
                  }),
                  (0, s.jsx)(r.P.div, {
                    initial: { opacity: 0 },
                    animate: { opacity: 1 },
                    transition: { delay: 0.5 },
                    className:
                      "bg-gradient-to-r from-[#F2EAD3]/50 to-[#F9F5F0] rounded-xl p-4 border border-[#F4991A]/20",
                    children: (0, s.jsxs)("div", {
                      className: "flex items-start gap-2.5",
                      children: [
                        (0, s.jsx)("div", {
                          className:
                            "p-1.5 rounded-lg bg-[#F4991A]/10 mt-0.5 flex-shrink-0",
                          children: (0, s.jsx)(p.A, {
                            className: "h-3.5 w-3.5 text-[#F4991A]",
                          }),
                        }),
                        (0, s.jsxs)("p", {
                          className:
                            "text-xs text-[#344F1F]/80 leading-relaxed",
                          children: [
                            (0, s.jsx)("strong", {
                              className: "text-[#344F1F]",
                              children: S("cvBuilder.welcome.smartParsing"),
                            }),
                            " ",
                            S("cvBuilder.welcome.smartParsingDescription"),
                          ],
                        }),
                      ],
                    }),
                  }),
                ],
              }),
            ],
          });
        }
        return (0, s.jsxs)(s.Fragment, {
          children: [
            (0, s.jsx)("div", {
              className:
                "fixed inset-0 -z-10 overflow-hidden pointer-events-none",
            }),
            (0, s.jsxs)("div", {
              className:
                "relative z-10 flex flex-col items-center justify-center min-h-[85vh] py-12 text-center",
              children: [
                (0, s.jsx)("div", {
                  className:
                    "absolute top-20 left-10 w-32 h-32 bg-primary/5 rounded-full blur-3xl animate-pulse",
                }),
                (0, s.jsx)("div", {
                  className:
                    "absolute bottom-20 right-10 w-40 h-40 bg-primary/3 rounded-full blur-3xl animate-pulse delay-700",
                }),
                (0, s.jsxs)(r.P.div, {
                  initial: { opacity: 0 },
                  animate: { opacity: 1 },
                  transition: { duration: 0.5 },
                  className:
                    "relative z-10 flex flex-col items-center max-w-4xl px-4 w-full",
                  children: [
                    (0, s.jsx)(r.P.div, {
                      initial: { scale: 0 },
                      animate: { scale: 1 },
                      transition: {
                        type: "spring",
                        stiffness: 200,
                        delay: 0.1,
                      },
                      className: "mb-8 relative",
                      children: (0, s.jsx)("div", {
                        className: "p-6 rounded-2xl bg-primary shadow-xl",
                        children: (0, s.jsx)(v.A, {
                          className: "h-12 w-12 text-primary-foreground",
                        }),
                      }),
                    }),
                    (0, s.jsx)(r.P.h1, {
                      initial: { opacity: 0 },
                      animate: { opacity: 1 },
                      transition: { delay: 0.2 },
                      className:
                        "text-4xl md:text-5xl font-bold mb-4 bg-gradient-to-r from-gray-900 to-gray-700 bg-clip-text text-transparent",
                      children: S("cvBuilder.welcome.title"),
                    }),
                    (0, s.jsx)(r.P.p, {
                      initial: { opacity: 0 },
                      animate: { opacity: 1 },
                      transition: { delay: 0.3 },
                      className: "text-lg text-muted-foreground mb-10 max-w-md",
                      children: S("cvBuilder.welcome.subtitle"),
                    }),
                    (0, s.jsxs)(r.P.div, {
                      initial: { opacity: 0 },
                      animate: { opacity: 1 },
                      transition: { delay: 0.4 },
                      className: "flex flex-wrap justify-center gap-3 mb-10",
                      children: [
                        (0, s.jsxs)("div", {
                          className:
                            "flex items-center gap-2 px-4 py-2 bg-white/80 backdrop-blur-sm rounded-full shadow-sm border border-border/50",
                          children: [
                            (0, s.jsx)(m.A, {
                              className: "h-4 w-4 text-primary",
                            }),
                            (0, s.jsx)("span", {
                              className: "text-sm font-medium",
                              children: S("cvBuilder.welcome.fiveMinutes"),
                            }),
                          ],
                        }),
                        (0, s.jsxs)("div", {
                          className:
                            "flex items-center gap-2 px-4 py-2 bg-white/80 backdrop-blur-sm rounded-full shadow-sm border border-border/50",
                          children: [
                            (0, s.jsx)(p.A, {
                              className: "h-4 w-4 text-primary",
                            }),
                            (0, s.jsx)("span", {
                              className: "text-sm font-medium",
                              children: S("cvBuilder.welcome.enhanced"),
                            }),
                          ],
                        }),
                        (0, s.jsxs)("div", {
                          className:
                            "flex items-center gap-2 px-4 py-2 bg-white/80 backdrop-blur-sm rounded-full shadow-sm border border-border/50",
                          children: [
                            (0, s.jsx)(f.A, {
                              className: "h-4 w-4 text-green-500",
                            }),
                            (0, s.jsx)("span", {
                              className: "text-sm font-medium",
                              children: S("cvBuilder.welcome.germanStandard"),
                            }),
                          ],
                        }),
                      ],
                    }),
                    (0, s.jsx)(r.P.div, {
                      initial: { opacity: 0 },
                      animate: { opacity: 1 },
                      transition: { duration: 0.5, delay: 0.2 },
                      className: "w-full max-w-2xl",
                      children: (0, s.jsxs)(c.Zp, {
                        className:
                          "border-0 shadow-xl bg-gradient-to-br from-card via-background to-card",
                        children: [
                          (0, s.jsxs)(c.aR, {
                            className: "text-center pb-4",
                            children: [
                              (0, s.jsx)(c.ZB, {
                                className: "text-xl",
                                children: S("cvBuilder.welcome.createYourCv"),
                              }),
                              (0, s.jsx)(c.BT, {
                                children: S(
                                  "cvBuilder.welcome.chooseHowToStart",
                                ),
                              }),
                            ],
                          }),
                          (0, s.jsxs)(c.Wu, {
                            children: [
                              (0, s.jsxs)(o.Tabs, {
                                value: k,
                                onValueChange: (e) => A(e),
                                children: [
                                  (0, s.jsxs)(o.TabsList, {
                                    className: "flex w-full mb-6",
                                    children: [
                                      (0, s.jsxs)(o.TabsTrigger, {
                                        value: "upload",
                                        className: "flex items-center gap-2",
                                        children: [
                                          (0, s.jsx)(h.A, {
                                            className: "h-4 w-4",
                                          }),
                                          S("cvBuilder.welcome.uploadExisting"),
                                        ],
                                      }),
                                      (0, s.jsxs)(o.TabsTrigger, {
                                        value: "manual",
                                        className: "flex items-center gap-2",
                                        children: [
                                          (0, s.jsx)(u.A, {
                                            className: "h-4 w-4",
                                          }),
                                          S(
                                            "cvBuilder.welcome.startFromScratch",
                                          ),
                                        ],
                                      }),
                                    ],
                                  }),
                                  (0, s.jsx)(o.TabsContent, {
                                    value: "upload",
                                    className: "space-y-4",
                                    children: (0, s.jsxs)("div", {
                                      className: "text-center",
                                      children: [
                                        (0, s.jsx)("p", {
                                          className:
                                            "text-sm text-muted-foreground mb-4",
                                          children: S(
                                            "cvBuilder.welcome.uploadDescription",
                                          ),
                                        }),
                                        (0, s.jsxs)("div", {
                                          className:
                                            "border-2 border-dashed border-border rounded-lg p-8 text-center hover:border-primary/50 transition-colors",
                                          children: [
                                            (0, s.jsx)("input", {
                                              type: "file",
                                              accept: ".pdf,.docx,.doc,.txt",
                                              onChange: (e) => {
                                                var t;
                                                return C(
                                                  (null ===
                                                    (t = e.target.files) ||
                                                  void 0 === t
                                                    ? void 0
                                                    : t[0]) || null,
                                                );
                                              },
                                              className: "hidden",
                                              id: "cv-upload",
                                              disabled: a,
                                            }),
                                            (0, s.jsxs)("label", {
                                              htmlFor: "cv-upload",
                                              className:
                                                "cursor-pointer ".concat(
                                                  a
                                                    ? "opacity-50 cursor-not-allowed"
                                                    : "",
                                                ),
                                              children: [
                                                (0, s.jsx)(h.A, {
                                                  className:
                                                    "h-8 w-8 mx-auto mb-3 text-muted-foreground",
                                                }),
                                                (0, s.jsx)("p", {
                                                  className:
                                                    "text-sm font-medium mb-1",
                                                  children: B
                                                    ? B.name
                                                    : S(
                                                        "cvBuilder.welcome.clickToUpload",
                                                      ),
                                                }),
                                                (0, s.jsx)("p", {
                                                  className:
                                                    "text-xs text-muted-foreground",
                                                  children: S(
                                                    "cvBuilder.welcome.fileTypes",
                                                  ),
                                                }),
                                              ],
                                            }),
                                          ],
                                        }),
                                      ],
                                    }),
                                  }),
                                  (0, s.jsx)(o.TabsContent, {
                                    value: "manual",
                                    className: "space-y-4",
                                    children: (0, s.jsxs)("div", {
                                      className: "text-center",
                                      children: [
                                        (0, s.jsx)("p", {
                                          className:
                                            "text-sm text-muted-foreground mb-4",
                                          children: S(
                                            "cvBuilder.welcome.manualDescription",
                                          ),
                                        }),
                                        (0, s.jsxs)("div", {
                                          className:
                                            "bg-muted/50 rounded-lg p-6",
                                          children: [
                                            (0, s.jsx)(d.A, {
                                              className:
                                                "h-12 w-12 mx-auto mb-3 text-muted-foreground",
                                            }),
                                            (0, s.jsx)("p", {
                                              className:
                                                "text-sm text-muted-foreground",
                                              children: S(
                                                "cvBuilder.welcome.manualHint",
                                              ),
                                            }),
                                          ],
                                        }),
                                      ],
                                    }),
                                  }),
                                ],
                              }),
                              (0, s.jsx)("div", {
                                className: "mt-6 flex justify-center",
                                children: (0, s.jsx)(n.$, {
                                  onClick: () => {
                                    ("upload" !== k || B) && t(k, B || void 0);
                                  },
                                  disabled: !("upload" !== k || B) || a,
                                  size: "lg",
                                  className:
                                    "rounded-full group px-10 py-7 text-lg font-semibold shadow-xl hover:shadow-2xl transition-all transform hover:scale-105 min-w-[200px]",
                                  children: a
                                    ? (0, s.jsxs)(s.Fragment, {
                                        children: [
                                          (0, s.jsx)(g.A, {
                                            className:
                                              "mr-3 h-5 w-5 animate-spin",
                                          }),
                                          S("cvBuilder.welcome.creatingCv"),
                                        ],
                                      })
                                    : (0, s.jsxs)(s.Fragment, {
                                        children: [
                                          (0, s.jsx)(v.A, {
                                            className: "mr-3 h-5 w-5",
                                          }),
                                          S("cvBuilder.welcome.createMyCv"),
                                          (0, s.jsx)(j.A, {
                                            className:
                                              "ml-3 h-5 w-5 transition-transform group-hover:translate-x-1",
                                          }),
                                        ],
                                      }),
                                }),
                              }),
                            ],
                          }),
                        ],
                      }),
                    }),
                    (0, s.jsxs)(r.P.div, {
                      initial: { opacity: 0 },
                      animate: { opacity: 1 },
                      transition: { delay: 0.6 },
                      className: "mt-8 w-full max-w-md",
                      children: [
                        (0, s.jsxs)("div", {
                          className:
                            "bg-gradient-to-br from-[#F9F5F0] to-[#F2EAD3] border-2 border-[#F4991A] rounded-xl p-6 mb-4",
                          children: [
                            (0, s.jsxs)("div", {
                              className:
                                "flex items-center justify-center gap-2 mb-3",
                              children: [
                                (0, s.jsx)(d.A, {
                                  className: "h-5 w-5 text-[#F4991A]",
                                }),
                                (0, s.jsx)("p", {
                                  className:
                                    "font-semibold text-[#344F1F] text-lg",
                                  children: S(
                                    "cvBuilder.welcome.freeTierIncludes",
                                  ),
                                }),
                              ],
                            }),
                            (0, s.jsxs)("div", {
                              className: "space-y-2 text-sm text-[#344F1F]",
                              children: [
                                (0, s.jsxs)("div", {
                                  className:
                                    "flex items-center justify-center gap-2",
                                  children: [
                                    (0, s.jsx)("span", {
                                      className: "text-[#F4991A]",
                                      children: "✓",
                                    }),
                                    (0, s.jsx)("span", {
                                      children: S(
                                        "cvBuilder.welcome.unlimitedEdits",
                                      ),
                                    }),
                                  ],
                                }),
                                (0, s.jsxs)("div", {
                                  className:
                                    "flex items-center justify-center gap-2",
                                  children: [
                                    (0, s.jsx)("span", {
                                      className: "text-[#F4991A]",
                                      children: "✓",
                                    }),
                                    (0, s.jsx)("span", {
                                      children: S(
                                        "cvBuilder.welcome.freeExport",
                                      ),
                                    }),
                                  ],
                                }),
                                (0, s.jsxs)("div", {
                                  className:
                                    "flex items-center justify-center gap-2",
                                  children: [
                                    (0, s.jsx)("span", {
                                      className: "text-[#F4991A]",
                                      children: "✓",
                                    }),
                                    (0, s.jsx)("span", {
                                      children: S(
                                        "cvBuilder.welcome.professionalStandard",
                                      ),
                                    }),
                                  ],
                                }),
                              ],
                            }),
                          ],
                        }),
                        (0, s.jsxs)("div", {
                          className:
                            "bg-gradient-to-r from-[#F4991A] to-[#e08915] rounded-lg p-4 text-white",
                          children: [
                            (0, s.jsxs)("div", {
                              className:
                                "flex items-center justify-center gap-2 mb-2",
                              children: [
                                (0, s.jsx)(b.A, { className: "h-4 w-4" }),
                                (0, s.jsx)("p", {
                                  className: "font-semibold text-sm",
                                  children: "Need Expert Help?",
                                }),
                              ],
                            }),
                            (0, s.jsx)("p", {
                              className: "text-xs opacity-90 mb-3",
                              children:
                                "Let our team handle your applications with native German cover letters",
                            }),
                            (0, s.jsxs)("button", {
                              onClick: () => D(!0),
                              className:
                                "inline-flex items-center justify-center w-full bg-white text-[#F4991A] px-4 py-2 rounded-full text-sm font-semibold hover:bg-[#F9F5F0] transition-colors",
                              children: [
                                "Explore Apply For Me",
                                (0, s.jsx)(j.A, { className: "ml-2 h-4 w-4" }),
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
            (0, s.jsx)(N.f, { open: P, onOpenChange: D }),
          ],
        });
      }
      var F = a(93668),
        k = a(17802),
        A = a(70005),
        B = a(95992),
        C = a(31912),
        _ = a(61280),
        E = a(99251),
        P = a(40300),
        D = a(82164),
        S = a(48242),
        T = a(61889),
        V = a(18051),
        O = a(50488);
      function z(e) {
        var t;
        let { cvProfile: a, onEdit: l, onDelete: o, onRecreate: x } = e,
          [h, p] = (0, i.useState)(!1),
          [v, g] = (0, i.useState)(!1),
          j = (0, V.useRouter)(),
          { toast: b } = (0, O.dj)(),
          { t: N } = (0, w.ok)(),
          y = async () => {
            g(!0);
            try {
              (await o(), p(!1));
            } catch (e) {
              console.error("Delete error:", e);
            } finally {
              g(!1);
            }
          },
          z = async (e) => {
            try {
              let t = await fetch("/api/cv-builder/export", {
                  method: "POST",
                  headers: { "Content-Type": "application/json" },
                  body: JSON.stringify({ cv_id: a.id, export_format: e }),
                }),
                s = await t.json();
              if (!t.ok) throw Error(s.error || "Export failed");
              let i = document.createElement("a");
              ((i.href = s.download_url),
                (i.download = s.filename || "cv.".concat(e)),
                document.body.appendChild(i),
                i.click(),
                document.body.removeChild(i),
                b({
                  title: N("cvBuilder.export.exportSuccess"),
                  description: "Your CV has been exported as ".concat(
                    e.toUpperCase(),
                    ".",
                  ),
                }));
            } catch (e) {
              (console.error("Error exporting CV:", e),
                b({
                  title: N("cvBuilder.toast.error"),
                  description:
                    e instanceof Error
                      ? e.message
                      : N("cvBuilder.export.exportFailed"),
                  variant: "destructive",
                }));
            }
          },
          I =
            (t = a.completion_percentage) >= 90
              ? { color: "text-green-600", icon: A.A, bg: "bg-green-50" }
              : t >= 70
                ? { color: "text-yellow-600", icon: m.A, bg: "bg-yellow-50" }
                : { color: "text-red-600", icon: B.A, bg: "bg-red-50" },
          $ = I.icon;
        return (0, s.jsxs)(s.Fragment, {
          children: [
            (0, s.jsx)("div", {
              className:
                "fixed inset-0 -z-10 overflow-hidden pointer-events-none",
            }),
            (0, s.jsx)("div", {
              className:
                "relative z-10 min-h-[85vh] flex flex-col items-center justify-center py-12",
              children: (0, s.jsxs)(r.P.div, {
                initial: { opacity: 0 },
                animate: { opacity: 1 },
                transition: { duration: 0.5 },
                className: "w-full max-w-4xl px-4",
                children: [
                  (0, s.jsxs)("div", {
                    className: "text-center mb-8",
                    children: [
                      (0, s.jsx)(r.P.div, {
                        initial: { scale: 0 },
                        animate: { scale: 1 },
                        transition: {
                          type: "spring",
                          stiffness: 200,
                          delay: 0.1,
                        },
                        className: "mb-6 flex justify-center",
                        children: (0, s.jsx)("div", {
                          className: "p-4 rounded-2xl bg-primary shadow-xl",
                          children: (0, s.jsx)(d.A, {
                            className: "h-10 w-10 text-primary-foreground",
                          }),
                        }),
                      }),
                      (0, s.jsx)(r.P.h1, {
                        initial: { opacity: 0 },
                        animate: { opacity: 1 },
                        transition: { delay: 0.2 },
                        className: "text-3xl md:text-4xl font-bold mb-2",
                        children: "Your CV Profile",
                      }),
                      (0, s.jsx)(r.P.p, {
                        initial: { opacity: 0 },
                        animate: { opacity: 1 },
                        transition: { delay: 0.3 },
                        className: "text-muted-foreground",
                        children:
                          "Manage and customize your professional German CV",
                      }),
                    ],
                  }),
                  (0, s.jsx)(r.P.div, {
                    initial: { opacity: 0 },
                    animate: { opacity: 1 },
                    transition: { duration: 0.5, delay: 0.2 },
                    className: "mb-8",
                    children: (0, s.jsxs)(c.Zp, {
                      className:
                        "relative overflow-hidden shadow-xl border-0 ".concat(
                          I.bg,
                        ),
                      children: [
                        (0, s.jsx)(c.aR, {
                          className: "pb-4",
                          children: (0, s.jsxs)("div", {
                            className: "flex items-start justify-between",
                            children: [
                              (0, s.jsxs)("div", {
                                className: "flex-1 min-w-0",
                                children: [
                                  (0, s.jsx)(c.ZB, {
                                    className: "text-2xl mb-1",
                                    children:
                                      a.personal_info.full_name || "Your CV",
                                  }),
                                  (0, s.jsx)(c.BT, {
                                    className: "text-base",
                                    children:
                                      a.personal_info.professional_title ||
                                      "Professional Title",
                                  }),
                                ],
                              }),
                              (0, s.jsxs)(S.rI, {
                                children: [
                                  (0, s.jsx)(S.ty, {
                                    asChild: !0,
                                    children: (0, s.jsx)(n.$, {
                                      variant: "ghost",
                                      size: "icon",
                                      className: "h-10 w-10",
                                      children: (0, s.jsx)(C.A, {
                                        className: "h-5 w-5",
                                      }),
                                    }),
                                  }),
                                  (0, s.jsxs)(S.SQ, {
                                    align: "end",
                                    children: [
                                      (0, s.jsxs)(S._2, {
                                        onClick: l,
                                        children: [
                                          (0, s.jsx)(u.A, {
                                            className: "h-4 w-4 mr-2",
                                          }),
                                          N("cvBuilder.buttons.edit"),
                                        ],
                                      }),
                                      (0, s.jsxs)(S._2, {
                                        onClick: () =>
                                          j.push(
                                            "/dashboard/cv-builder/preview/".concat(
                                              a.id,
                                            ),
                                          ),
                                        children: [
                                          (0, s.jsx)(_.A, {
                                            className: "h-4 w-4 mr-2",
                                          }),
                                          N("cvBuilder.buttons.preview"),
                                        ],
                                      }),
                                      (0, s.jsx)(S.mB, {}),
                                      (0, s.jsxs)(S._2, {
                                        onClick: () => z("pdf"),
                                        children: [
                                          (0, s.jsx)(f.A, {
                                            className: "h-4 w-4 mr-2",
                                          }),
                                          N("cvBuilder.export.pdf"),
                                        ],
                                      }),
                                      (0, s.jsxs)(S._2, {
                                        onClick: () => z("html"),
                                        children: [
                                          (0, s.jsx)(f.A, {
                                            className: "h-4 w-4 mr-2",
                                          }),
                                          "Export HTML",
                                        ],
                                      }),
                                      (0, s.jsx)(S.mB, {}),
                                      (0, s.jsxs)(S._2, {
                                        onClick: x,
                                        children: [
                                          (0, s.jsx)(E.A, {
                                            className: "h-4 w-4 mr-2",
                                          }),
                                          N("cvBuilder.buttons.startOver"),
                                        ],
                                      }),
                                      (0, s.jsxs)(S._2, {
                                        className: "text-red-500",
                                        onClick: () => p(!0),
                                        children: [
                                          (0, s.jsx)(P.A, {
                                            className: "h-4 w-4 mr-2",
                                          }),
                                          N("cvBuilder.buttons.delete"),
                                        ],
                                      }),
                                    ],
                                  }),
                                ],
                              }),
                            ],
                          }),
                        }),
                        (0, s.jsxs)(c.Wu, {
                          className: "space-y-6",
                          children: [
                            (0, s.jsxs)("div", {
                              className: "space-y-3",
                              children: [
                                (0, s.jsxs)("div", {
                                  className:
                                    "flex items-center justify-between",
                                  children: [
                                    (0, s.jsxs)("span", {
                                      className:
                                        "flex items-center gap-2 font-medium",
                                      children: [
                                        (0, s.jsx)($, {
                                          className: "h-4 w-4 ".concat(I.color),
                                        }),
                                        "Completion Status",
                                      ],
                                    }),
                                    (0, s.jsxs)("span", {
                                      className: "font-bold text-lg",
                                      children: [a.completion_percentage, "%"],
                                    }),
                                  ],
                                }),
                                (0, s.jsx)(F.Progress, {
                                  value: a.completion_percentage,
                                  className: "h-3",
                                }),
                                (0, s.jsx)("p", {
                                  className: "text-sm text-muted-foreground",
                                  children:
                                    a.completion_percentage >= 90
                                      ? "Your CV is ready for applications!"
                                      : a.completion_percentage >= 70
                                        ? "Almost there! Add a few more details."
                                        : "Complete your CV to make it application-ready.",
                                }),
                              ],
                            }),
                            (0, s.jsxs)("div", {
                              className:
                                "flex items-center justify-between text-sm text-muted-foreground border-t pt-4",
                              children: [
                                (0, s.jsxs)("span", {
                                  children: [
                                    "Updated ",
                                    new Date(a.updated_at).toLocaleDateString(
                                      "en-US",
                                      {
                                        year: "numeric",
                                        month: "short",
                                        day: "numeric",
                                      },
                                    ),
                                  ],
                                }),
                                a.ai_quality_score &&
                                  (0, s.jsxs)(k.E, {
                                    variant: "secondary",
                                    className: "text-sm",
                                    children: [
                                      (0, s.jsx)(D.A, {
                                        className: "h-3 w-3 mr-1",
                                      }),
                                      "Quality Score: ",
                                      a.ai_quality_score,
                                    ],
                                  }),
                              ],
                            }),
                            (0, s.jsxs)("div", {
                              className: "flex gap-3 pt-2",
                              children: [
                                (0, s.jsxs)(n.$, {
                                  onClick: l,
                                  className: "flex-1",
                                  size: "lg",
                                  children: [
                                    (0, s.jsx)(u.A, {
                                      className: "h-4 w-4 mr-2",
                                    }),
                                    N("cvBuilder.buttons.edit"),
                                  ],
                                }),
                                (0, s.jsxs)(n.$, {
                                  variant: "outline",
                                  onClick: () => z("pdf"),
                                  size: "lg",
                                  children: [
                                    (0, s.jsx)(f.A, {
                                      className: "h-4 w-4 mr-2",
                                    }),
                                    N("cvBuilder.export.pdf"),
                                  ],
                                }),
                                (0, s.jsx)(n.$, {
                                  variant: "outline",
                                  onClick: () =>
                                    j.push(
                                      "/dashboard/cv-builder/preview/".concat(
                                        a.id,
                                      ),
                                    ),
                                  size: "lg",
                                  children: (0, s.jsx)(_.A, {
                                    className: "h-4 w-4",
                                  }),
                                }),
                              ],
                            }),
                          ],
                        }),
                      ],
                    }),
                  }),
                  (0, s.jsx)(r.P.div, {
                    initial: { opacity: 0 },
                    animate: { opacity: 1 },
                    transition: { delay: 0.6 },
                    className: "text-center",
                    children: (0, s.jsx)(c.Zp, {
                      className: "border-0 shadow-lg bg-muted/50",
                      children: (0, s.jsxs)(c.Wu, {
                        className: "pt-6",
                        children: [
                          (0, s.jsx)("h3", {
                            className: "font-semibold mb-2",
                            children: "\uD83D\uDCA1 Pro Tips",
                          }),
                          (0, s.jsx)("p", {
                            className:
                              "text-sm text-muted-foreground max-w-2xl mx-auto",
                            children:
                              "Keep your CV updated with recent experiences and achievements. German employers value precise dates, clear job responsibilities, and relevant qualifications.",
                          }),
                        ],
                      }),
                    }),
                  }),
                ],
              }),
            }),
            (0, s.jsx)(T.lG, {
              open: h,
              onOpenChange: p,
              children: (0, s.jsxs)(T.Cf, {
                children: [
                  (0, s.jsxs)(T.c7, {
                    children: [
                      (0, s.jsxs)(T.L3, {
                        className: "flex items-center gap-2 text-destructive",
                        children: [
                          (0, s.jsx)(B.A, { className: "h-5 w-5" }),
                          N("cvBuilder.buttons.delete"),
                          " CV",
                        ],
                      }),
                      (0, s.jsx)(T.rr, {
                        children: N("cvBuilder.modals.confirmDelete"),
                      }),
                    ],
                  }),
                  (0, s.jsx)("div", {
                    className:
                      "p-4 rounded-md border border-destructive/10 bg-destructive/5",
                    children: (0, s.jsxs)("p", {
                      className: "text-sm",
                      children: [
                        (0, s.jsx)("span", {
                          className: "font-medium",
                          children: "CV:",
                        }),
                        " ",
                        a.personal_info.full_name || "Your CV",
                      ],
                    }),
                  }),
                  (0, s.jsxs)(T.Es, {
                    children: [
                      (0, s.jsx)(n.$, {
                        variant: "outline",
                        onClick: () => p(!1),
                        disabled: v,
                        children: N("cvBuilder.buttons.cancel"),
                      }),
                      (0, s.jsx)(n.$, {
                        variant: "destructive",
                        onClick: y,
                        disabled: v,
                        children: v
                          ? (0, s.jsxs)(s.Fragment, {
                              children: [
                                (0, s.jsx)("div", {
                                  className:
                                    "w-4 h-4 border-2 border-white border-t-transparent rounded-full animate-spin mr-2",
                                }),
                                N("cvBuilder.modals.saving"),
                              ],
                            })
                          : (0, s.jsxs)(s.Fragment, {
                              children: [
                                (0, s.jsx)(P.A, { className: "h-4 w-4 mr-2" }),
                                N("cvBuilder.buttons.delete"),
                              ],
                            }),
                      }),
                    ],
                  }),
                ],
              }),
            }),
          ],
        });
      }
      var I = a(28560),
        $ = a(88117),
        L = a(30478),
        U = a(42678),
        Y = a(81994);
      function W(e) {
        let {
            open: t,
            analyzing: a,
            currentStep: i,
            completionPercentage: l,
            extractedData: o,
            onProceed: m,
            onCancel: x,
          } = e,
          { t: h } = (0, w.ok)(),
          u = [
            {
              key: "reading",
              label: h("cvBuilder.analysis.readingFile"),
              icon: d.A,
            },
            {
              key: "personal",
              label: h("cvBuilder.analysis.extractingPersonal"),
              icon: I.A,
            },
            {
              key: "work",
              label: h("cvBuilder.analysis.extractingWork"),
              icon: $.A,
            },
            {
              key: "education",
              label: h("cvBuilder.analysis.extractingEducation"),
              icon: L.A,
            },
            {
              key: "skills",
              label: h("cvBuilder.analysis.extractingSkills"),
              icon: D.A,
            },
            {
              key: "complete",
              label: h("cvBuilder.analysis.complete"),
              icon: U.A,
            },
          ],
          v = (() => {
            let e = u.findIndex((e) => i.includes(e.key));
            return -1 === e ? 0 : e;
          })(),
          f = "complete" === i,
          b = l
            ? l >= 80
              ? {
                  label: "Excellent",
                  color: "text-green-600",
                  bg: "bg-green-50",
                  border: "border-green-200",
                }
              : l >= 60
                ? {
                    label: "Good",
                    color: "text-blue-600",
                    bg: "bg-blue-50",
                    border: "border-blue-200",
                  }
                : l >= 40
                  ? {
                      label: "Fair",
                      color: "text-yellow-600",
                      bg: "bg-yellow-50",
                      border: "border-yellow-200",
                    }
                  : {
                      label: "Needs Work",
                      color: "text-orange-600",
                      bg: "bg-orange-50",
                      border: "border-orange-200",
                    }
            : null;
        return (0, s.jsx)(T.lG, {
          open: t,
          onOpenChange: () => {},
          children: (0, s.jsx)(T.Cf, {
            className:
              "sm:max-w-[600px] max-w-[95vw] border-none bg-[#F9F5F0] p-0 gap-0 overflow-hidden",
            children: (0, s.jsxs)("div", {
              className: "px-6 py-8 space-y-6",
              children: [
                (0, s.jsxs)("div", {
                  className: "text-center",
                  children: [
                    (0, s.jsx)("div", {
                      className:
                        "inline-flex items-center justify-center p-4 rounded-2xl bg-gradient-to-br from-[#F4991A] to-[#e08915] shadow-lg mb-4",
                      children: (0, s.jsx)(d.A, {
                        className: "h-8 w-8 text-white",
                      }),
                    }),
                    (0, s.jsx)("h2", {
                      className: "text-2xl font-bold text-[#344F1F] mb-2",
                      children: h(
                        a
                          ? "cvBuilder.analysis.analyzing"
                          : "cvBuilder.analysis.complete",
                      ),
                    }),
                    (0, s.jsx)("p", {
                      className: "text-[#344F1F]/60",
                      children: h(
                        a
                          ? "cvBuilder.toast.extractingData"
                          : "cvBuilder.analysis.complete",
                      ),
                    }),
                  ],
                }),
                a &&
                  (0, s.jsx)("div", {
                    className: "space-y-3",
                    children: u.map((e, t) => {
                      let a = e.icon,
                        i = t === v,
                        l = t < v;
                      return (0, s.jsxs)(
                        r.P.div,
                        {
                          initial: { opacity: 0, x: -20 },
                          animate: { opacity: 1, x: 0 },
                          transition: { delay: 0.1 * t },
                          className:
                            "flex items-center gap-3 p-3 rounded-lg transition-colors ".concat(
                              i
                                ? "bg-[#F4991A]/10 border border-[#F4991A]/30"
                                : "bg-white/50",
                            ),
                          children: [
                            (0, s.jsx)("div", {
                              className:
                                "p-2 rounded-lg transition-colors ".concat(
                                  l
                                    ? "bg-green-500"
                                    : i
                                      ? "bg-[#F4991A]"
                                      : "bg-[#344F1F]/10",
                                ),
                              children: l
                                ? (0, s.jsx)(U.A, {
                                    className: "h-5 w-5 text-white",
                                  })
                                : i
                                  ? (0, s.jsx)(g.A, {
                                      className:
                                        "h-5 w-5 text-white animate-spin",
                                    })
                                  : (0, s.jsx)(a, {
                                      className: "h-5 w-5 text-[#344F1F]/50",
                                    }),
                            }),
                            (0, s.jsx)("span", {
                              className: "font-medium ".concat(
                                i ? "text-[#344F1F]" : "text-[#344F1F]/50",
                              ),
                              children: e.label,
                            }),
                          ],
                        },
                        e.key,
                      );
                    }),
                  }),
                f &&
                  void 0 !== l &&
                  b &&
                  (0, s.jsx)(r.P.div, {
                    initial: { opacity: 0, scale: 0.95 },
                    animate: { opacity: 1, scale: 1 },
                    transition: { duration: 0.4 },
                    children: (0, s.jsx)(c.Zp, {
                      className: ""
                        .concat(b.bg, " ")
                        .concat(b.border, " border-2"),
                      children: (0, s.jsxs)("div", {
                        className: "p-6",
                        children: [
                          (0, s.jsxs)("div", {
                            className: "flex items-center justify-between mb-4",
                            children: [
                              (0, s.jsxs)("div", {
                                children: [
                                  (0, s.jsx)("p", {
                                    className:
                                      "text-sm font-medium text-[#344F1F]/60 mb-1",
                                    children: h(
                                      "cvBuilder.analysis.completionScore",
                                      { score: l },
                                    ),
                                  }),
                                  (0, s.jsxs)("p", {
                                    className: "text-3xl font-bold ".concat(
                                      b.color,
                                    ),
                                    children: [l, "%"],
                                  }),
                                ],
                              }),
                              (0, s.jsx)("div", {
                                className: "px-4 py-2 rounded-full "
                                  .concat(b.bg, " border ")
                                  .concat(b.border),
                                children: (0, s.jsx)("span", {
                                  className: "text-sm font-semibold ".concat(
                                    b.color,
                                  ),
                                  children: b.label,
                                }),
                              }),
                            ],
                          }),
                          (0, s.jsxs)("div", {
                            className: "space-y-2 pt-4 border-[#344F1F]/10",
                            children: [
                              (0, s.jsx)("p", {
                                className:
                                  "text-sm font-medium text-[#344F1F] mb-3",
                                children: h("cvBuilder.toast.extractingData"),
                              }),
                              (0, s.jsxs)("div", {
                                className: "grid grid-cols-2 gap-3",
                                children: [
                                  (null == o ? void 0 : o.personal_info) &&
                                    (0, s.jsxs)("div", {
                                      className:
                                        "flex items-center gap-2 text-sm",
                                      children: [
                                        (0, s.jsx)(I.A, {
                                          className: "h-4 w-4 text-[#F4991A]",
                                        }),
                                        (0, s.jsx)("span", {
                                          className: "text-[#344F1F]/70",
                                          children: h(
                                            "cvBuilder.analysis.personalInfoExtracted",
                                          ),
                                        }),
                                        (0, s.jsx)(U.A, {
                                          className:
                                            "h-4 w-4 text-green-600 ml-auto",
                                        }),
                                      ],
                                    }),
                                  (null == o ? void 0 : o.work_experiences) &&
                                    o.work_experiences.length > 0 &&
                                    (0, s.jsxs)("div", {
                                      className:
                                        "flex items-center gap-2 text-sm",
                                      children: [
                                        (0, s.jsx)($.A, {
                                          className: "h-4 w-4 text-[#F4991A]",
                                        }),
                                        (0, s.jsx)("span", {
                                          className: "text-[#344F1F]/70",
                                          children: h(
                                            "cvBuilder.analysis.workExperienceExtracted",
                                          ),
                                        }),
                                        (0, s.jsx)(U.A, {
                                          className:
                                            "h-4 w-4 text-green-600 ml-auto",
                                        }),
                                      ],
                                    }),
                                  (null == o ? void 0 : o.educations) &&
                                    o.educations.length > 0 &&
                                    (0, s.jsxs)("div", {
                                      className:
                                        "flex items-center gap-2 text-sm",
                                      children: [
                                        (0, s.jsx)(L.A, {
                                          className: "h-4 w-4 text-[#F4991A]",
                                        }),
                                        (0, s.jsx)("span", {
                                          className: "text-[#344F1F]/70",
                                          children: h(
                                            "cvBuilder.analysis.educationExtracted",
                                          ),
                                        }),
                                        (0, s.jsx)(U.A, {
                                          className:
                                            "h-4 w-4 text-green-600 ml-auto",
                                        }),
                                      ],
                                    }),
                                  (null == o ? void 0 : o.skills) &&
                                    o.skills.length > 0 &&
                                    (0, s.jsxs)("div", {
                                      className:
                                        "flex items-center gap-2 text-sm",
                                      children: [
                                        (0, s.jsx)(D.A, {
                                          className: "h-4 w-4 text-[#F4991A]",
                                        }),
                                        (0, s.jsx)("span", {
                                          className: "text-[#344F1F]/70",
                                          children: h(
                                            "cvBuilder.analysis.skillsExtracted",
                                          ),
                                        }),
                                        (0, s.jsx)(U.A, {
                                          className:
                                            "h-4 w-4 text-green-600 ml-auto",
                                        }),
                                      ],
                                    }),
                                  (null == o ? void 0 : o.languages) &&
                                    o.languages.length > 0 &&
                                    (0, s.jsxs)("div", {
                                      className:
                                        "flex items-center gap-2 text-sm",
                                      children: [
                                        (0, s.jsx)(Y.A, {
                                          className: "h-4 w-4 text-[#F4991A]",
                                        }),
                                        (0, s.jsx)("span", {
                                          className: "text-[#344F1F]/70",
                                          children: h(
                                            "cvBuilder.analysis.languagesExtracted",
                                          ),
                                        }),
                                        (0, s.jsx)(U.A, {
                                          className:
                                            "h-4 w-4 text-green-600 ml-auto",
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
                f &&
                  (0, s.jsx)(r.P.div, {
                    initial: { opacity: 0 },
                    animate: { opacity: 1 },
                    transition: { delay: 0.3 },
                    className:
                      "bg-gradient-to-r from-[#F2EAD3]/50 to-[#F9F5F0] rounded-xl p-4 border border-[#F4991A]/20",
                    children: (0, s.jsxs)("div", {
                      className: "flex items-start gap-3",
                      children: [
                        (0, s.jsx)("div", {
                          className:
                            "p-2 rounded-lg bg-[#F4991A]/10 mt-0.5 flex-shrink-0",
                          children: (0, s.jsx)(p.A, {
                            className: "h-4 w-4 text-[#F4991A]",
                          }),
                        }),
                        (0, s.jsx)("p", {
                          className:
                            "text-sm text-[#344F1F]/80 leading-relaxed",
                          children: h("cvBuilder.toast.allExtractionComplete"),
                        }),
                      ],
                    }),
                  }),
                f &&
                  (0, s.jsxs)(r.P.div, {
                    initial: { opacity: 0, y: 20 },
                    animate: { opacity: 1, y: 0 },
                    transition: { delay: 0.4 },
                    className: "flex gap-3",
                    children: [
                      (0, s.jsx)(n.$, {
                        onClick: x,
                        variant: "outline",
                        className:
                          "flex-1 rounded-full border-2 border-[#344F1F]/30 text-[#344F1F] hover:bg-[#344F1F]/5",
                        children: h("cvBuilder.buttons.cancel"),
                      }),
                      (0, s.jsxs)(n.$, {
                        onClick: m,
                        className:
                          "flex-1 rounded-full bg-gradient-to-r from-[#F4991A] to-[#e08915] hover:from-[#e08915] hover:to-[#d67f14] text-white font-bold shadow-lg hover:shadow-xl transition-all border-0",
                        children: [
                          (0, s.jsx)("span", {
                            children: h("cvBuilder.analysis.proceed"),
                          }),
                          (0, s.jsx)(j.A, { className: "h-5 w-5 ml-2" }),
                        ],
                      }),
                    ],
                  }),
              ],
            }),
          }),
        });
      }
      var M = a(54604),
        Z = a(44948),
        G = a(65711),
        J = a(5313);
      function R() {
        let [e, t] = (0, i.useState)("loading"),
          [a, n] = (0, i.useState)(null),
          [c, o] = (0, i.useState)(!1),
          [d, m] = (0, i.useState)(null),
          [x, h] = (0, i.useState)(!1),
          [u, p] = (0, i.useState)(!1),
          [v, f] = (0, i.useState)(null),
          [g, j] = (0, i.useState)(!1),
          [b, N] = (0, i.useState)(!1),
          [F, k] = (0, i.useState)(""),
          [A, B] = (0, i.useState)(0),
          [C, _] = (0, i.useState)(null),
          E = (0, M.createClientComponentClient)(),
          { toast: P } = (0, O.dj)(),
          D = (0, V.useRouter)(),
          { t: S } = (0, w.ok)();
        (0, i.useEffect)(() => {
          let e = () => {
            p(window.innerWidth < 768);
          };
          return (
            e(),
            window.addEventListener("resize", e),
            "start_over" ===
            new URLSearchParams(window.location.search).get("action")
              ? (h(!0),
                U(),
                window.history.replaceState({}, "", "/dashboard/cv-builder"))
              : T(),
            () => window.removeEventListener("resize", e)
          );
        }, []);
        let T = async () => {
            try {
              let {
                data: { user: e },
                error: a,
              } = await E.auth.getUser();
              if (a || !e) {
                (P({
                  title: S("cvBuilder.auth.required"),
                  description: S("cvBuilder.auth.signInMessage"),
                  variant: "destructive",
                }),
                  D.push("/auth/callback?redirectTo=/dashboard/cv-builder"));
                return;
              }
              m(e);
              let s = await fetch("/api/cv-builder/generate");
              if (s.ok) {
                let e = await s.json();
                if (e.hasCV && e.cvProfile && !x) {
                  (n(e.cvProfile),
                    D.push(
                      "/dashboard/cv-builder/edit/".concat(e.cvProfile.id),
                    ));
                  return;
                }
              }
              let i = await fetch("/api/student/documents?document_type=cv");
              if (i.ok) {
                let e = await i.json();
                if (e.documents && e.documents.length > 0) {
                  let t = e.documents[0];
                  f(t);
                }
              }
              t("welcome");
            } catch (e) {
              (console.error("Error checking for existing CV:", e),
                t("welcome"));
            }
          },
          I = async (e, t) => {
            if (d) {
              o(!0);
              try {
                if ("upload" === e && t) await $(t);
                else if ("manual" === e) {
                  let e = new FormData();
                  (e.append("templateId", "modern"),
                    e.append(
                      "manualCVData",
                      JSON.stringify({
                        personal_info: {
                          full_name: "Your Name",
                          professional_title: "Your Professional Title",
                          email: d.email || "",
                        },
                      }),
                    ));
                  let t = await fetch("/api/cv-builder/generate", {
                    method: "POST",
                    body: e,
                  });
                  if (!t.ok) {
                    let e = await t.json();
                    throw Error(e.error || "Failed to create CV");
                  }
                  let a = await t.json();
                  (P({
                    title: S("cvBuilder.toast.cvCreated"),
                    description: S("cvBuilder.toast.cvCreatedDescription", {
                      percent: a.completion_percentage,
                    }),
                  }),
                    a.cv_id &&
                      D.push("/dashboard/cv-builder/edit/".concat(a.cv_id)));
                }
              } catch (e) {
                (console.error("Error creating CV:", e),
                  P({
                    title: S("cvBuilder.toast.error"),
                    description:
                      e instanceof Error
                        ? e.message
                        : S("cvBuilder.toast.errorCreating"),
                    variant: "destructive",
                  }));
              } finally {
                o(!1);
              }
            }
          },
          $ = async (e) => {
            let t = {};
            try {
              var a, s, i, l, r, n;
              let c = new FormData();
              (c.append("templateId", "modern"),
                c.append(
                  "manualCVData",
                  JSON.stringify({
                    personal_info: {
                      full_name: "Your Name",
                      professional_title: "Your Professional Title",
                      email: d.email || "",
                    },
                  }),
                ));
              let o = await fetch("/api/cv-builder/generate", {
                method: "POST",
                body: c,
              });
              if (!o.ok) {
                let e = await o.json();
                throw Error(e.error || "Failed to create CV");
              }
              let m = (await o.json()).cv_id;
              if (!m) throw Error("Failed to get CV ID");
              P({
                title: "CV Datei wird gelesen...",
                description: "Ihre Datei wird analysiert",
              });
              let x = new FormData();
              x.append("cvFile", e);
              let h = await fetch("/api/cv-builder/parse-file", {
                method: "POST",
                body: x,
              });
              if (!h.ok) {
                let e = await h.json();
                throw Error(e.error || "Failed to parse CV file");
              }
              let u = (await h.json()).cvText;
              (P({
                title: "CV Datei erfolgreich gelesen!",
                description: "Daten werden jetzt extrahiert...",
              }),
                P({
                  title: "Pers\xf6nliche Daten werden extrahiert...",
                  description: "Namen, Kontaktdaten und Profil",
                }));
              let p = new FormData();
              (p.append("cvText", u), p.append("cvId", m));
              let v = await fetch("/api/cv-builder/extract-personal", {
                method: "POST",
                body: p,
              });
              v.ok &&
                ((t.personal_info = (await v.json()).personal_info),
                P({
                  title: "Pers\xf6nliche Daten extrahiert!",
                  description: "Berufserfahrung wird verarbeitet...",
                }));
              let f = new FormData();
              (f.append("cvText", u), f.append("cvId", m));
              let g = await fetch("/api/cv-builder/extract-work", {
                method: "POST",
                body: f,
              });
              g.ok &&
                ((t.work_experiences = (await g.json()).work_experiences),
                P({
                  title: "Berufserfahrung extrahiert!",
                  description: "Ausbildung wird verarbeitet...",
                }));
              let j = new FormData();
              (j.append("cvText", u), j.append("cvId", m));
              let b = await fetch("/api/cv-builder/extract-education", {
                method: "POST",
                body: j,
              });
              b.ok &&
                ((t.educations = (await b.json()).educations),
                P({
                  title: "Ausbildung extrahiert!",
                  description: "F\xe4higkeiten werden verarbeitet...",
                }));
              let w = new FormData();
              (w.append("cvText", u), w.append("cvId", m));
              let N = await fetch("/api/cv-builder/extract-skills", {
                method: "POST",
                body: w,
              });
              if (N.ok) {
                let e = await N.json();
                ((t.skills = e.skills), (t.languages = e.languages));
              }
              let y = {
                personal_info: t.personal_info || {},
                work_experiences: t.work_experiences || [],
                educations: t.educations || [],
                skills: t.skills || [],
                languages: t.languages || [],
              };
              if (
                !(
                  await fetch("/api/cv-builder/profiles/".concat(m), {
                    method: "PUT",
                    headers: { "Content-Type": "application/json" },
                    body: JSON.stringify(y),
                  })
                ).ok
              )
                throw Error("Failed to update CV with extracted data");
              let F = 0;
              ((null === (a = t.personal_info) || void 0 === a
                ? void 0
                : a.full_name) && (F += 15),
                (null === (s = t.personal_info) || void 0 === s
                  ? void 0
                  : s.email) && (F += 10),
                (null === (i = t.work_experiences) || void 0 === i
                  ? void 0
                  : i.length) > 0 && (F += 25),
                (null === (l = t.educations) || void 0 === l
                  ? void 0
                  : l.length) > 0 && (F += 20),
                (null === (r = t.skills) || void 0 === r ? void 0 : r.length) >
                  0 && (F += 15),
                (null === (n = t.languages) || void 0 === n
                  ? void 0
                  : n.length) > 0 && (F += 15),
                P({
                  title: "\uD83C\uDF89 CV erfolgreich erstellt!",
                  description: "Ihre Daten wurden extrahiert (".concat(
                    F,
                    "% vollst\xe4ndig)",
                  ),
                }),
                D.push("/dashboard/cv-builder/edit/".concat(m)));
            } catch (e) {
              throw (
                console.error("Error creating CV with file extraction:", e),
                e
              );
            }
          },
          L = () => {
            a && D.push("/dashboard/cv-builder/edit/".concat(a.id));
          },
          U = async () => {
            (n(null), t("welcome"));
            try {
              let e = await fetch("/api/cv-builder/generate");
              if (e.ok) {
                let t = await e.json();
                if (t.hasCV && t.cvProfile) {
                  if (
                    !(
                      await fetch(
                        "/api/cv-builder/profiles/".concat(t.cvProfile.id),
                        { method: "DELETE" },
                      )
                    ).ok
                  )
                    throw Error("Failed to delete CV");
                  P({
                    title: S("cvBuilder.toast.cvDeleted"),
                    description: S("cvBuilder.toast.startingFresh"),
                  });
                }
              }
            } catch (e) {
              (console.error("Error starting over:", e),
                P({
                  title: S("cvBuilder.toast.error"),
                  description: S("cvBuilder.toast.errorDeleting"),
                  variant: "destructive",
                }));
            } finally {
              h(!1);
            }
          },
          Y = async () => {
            if (a)
              try {
                if (
                  !(
                    await fetch("/api/cv-builder/profiles/".concat(a.id), {
                      method: "DELETE",
                    })
                  ).ok
                )
                  throw Error("Failed to delete CV");
                (P({
                  title: S("cvBuilder.toast.cvDeleted"),
                  description: S("cvBuilder.toast.cvDeletedDescription"),
                }),
                  n(null),
                  t("welcome"));
              } catch (e) {
                (console.error("Error deleting CV:", e),
                  P({
                    title: S("cvBuilder.toast.error"),
                    description: S("cvBuilder.toast.errorDeleting"),
                    variant: "destructive",
                  }));
              }
          },
          R = async () => {
            if (v && d) {
              (j(!0), N(!0), k("reading"));
              try {
                k("reading");
                let { data: e, error: t } = await E.storage
                  .from("user_documents")
                  .download(v.storage_path);
                if (t || !e)
                  throw Error("Failed to fetch CV file from storage");
                let a = new File([e], v.original_filename, { type: e.type }),
                  s = new FormData();
                s.append("cvFile", a);
                let i = await fetch("/api/cv-builder/parse-file", {
                  method: "POST",
                  body: s,
                });
                if (!i.ok) throw Error("Failed to parse CV file");
                let l = (await i.json()).cvText;
                k("personal");
                let r = new FormData();
                r.append("cvText", l);
                let n = await fetch("/api/cv-builder/extract-personal", {
                    method: "POST",
                    body: r,
                  }),
                  c = null;
                (n.ok && (c = (await n.json()).personal_info), k("work"));
                let o = new FormData();
                o.append("cvText", l);
                let d = await fetch("/api/cv-builder/extract-work", {
                    method: "POST",
                    body: o,
                  }),
                  m = [];
                (d.ok && (m = (await d.json()).work_experiences),
                  k("education"));
                let x = new FormData();
                x.append("cvText", l);
                let h = await fetch("/api/cv-builder/extract-education", {
                    method: "POST",
                    body: x,
                  }),
                  u = [];
                (h.ok && (u = (await h.json()).educations), k("skills"));
                let p = new FormData();
                p.append("cvText", l);
                let f = await fetch("/api/cv-builder/extract-skills", {
                    method: "POST",
                    body: p,
                  }),
                  g = [],
                  j = [];
                if (f.ok) {
                  let e = await f.json();
                  ((g = e.skills), (j = e.languages));
                }
                let b = 0;
                ((null == c ? void 0 : c.full_name) && (b += 15),
                  (null == c ? void 0 : c.email) && (b += 10),
                  m.length > 0 && (b += 25),
                  u.length > 0 && (b += 20),
                  g.length > 0 && (b += 15),
                  j.length > 0 && (b += 15));
                let w = {
                  personal_info: c,
                  work_experiences: m,
                  educations: u,
                  skills: g,
                  languages: j,
                };
                (_(w), B(Math.min(100, b)), k("complete"), N(!1));
              } catch (e) {
                (console.error("Error using existing CV:", e),
                  j(!1),
                  N(!1),
                  P({
                    title: S("cvBuilder.toast.error"),
                    description:
                      e instanceof Error
                        ? e.message
                        : S("cvBuilder.toast.errorCreating"),
                    variant: "destructive",
                  }));
              }
            }
          },
          q = async () => {
            if (C && d) {
              (N(!0), j(!1));
              try {
                let e = new FormData();
                (e.append("templateId", "modern"),
                  e.append(
                    "manualCVData",
                    JSON.stringify({ personal_info: C.personal_info || {} }),
                  ));
                let t = await fetch("/api/cv-builder/generate", {
                  method: "POST",
                  body: e,
                });
                if (!t.ok) throw Error("Failed to create CV");
                let a = (await t.json()).cv_id;
                if (!a) throw Error("Failed to get CV ID");
                if (
                  !(
                    await fetch("/api/cv-builder/profiles/".concat(a), {
                      method: "PUT",
                      headers: { "Content-Type": "application/json" },
                      body: JSON.stringify({
                        personal_info: C.personal_info || {},
                        work_experiences: C.work_experiences || [],
                        educations: C.educations || [],
                        skills: C.skills || [],
                        languages: C.languages || [],
                      }),
                    })
                  ).ok
                )
                  throw Error("Failed to update CV with extracted data");
                (P({
                  title: S("cvBuilder.toast.cvCreated"),
                  description: S("cvBuilder.toast.cvCreatedDescription", {
                    percent: A,
                  }),
                }),
                  D.push("/dashboard/cv-builder/edit/".concat(a)));
              } catch (e) {
                (console.error("Error creating CV:", e),
                  P({
                    title: S("cvBuilder.toast.error"),
                    description:
                      e instanceof Error
                        ? e.message
                        : S("cvBuilder.toast.errorCreating"),
                    variant: "destructive",
                  }));
              } finally {
                N(!1);
              }
            }
          },
          H = () => {
            f(null);
          };
        return (0, s.jsxs)("div", {
          className: "min-h-[85vh] relative overflow-visible",
          children: [
            u &&
              (0, s.jsxs)(J.Fc, {
                className: "mb-4 border-orange-200 bg-orange-50",
                children: [
                  (0, s.jsx)(Z.A, { className: "h-4 w-4 text-orange-600" }),
                  (0, s.jsx)(J.TN, {
                    className: "text-orange-800",
                    children: (0, s.jsxs)("div", {
                      className: "flex items-center gap-2",
                      children: [
                        (0, s.jsx)(G.A, { className: "h-4 w-4" }),
                        (0, s.jsxs)("span", {
                          children: [
                            (0, s.jsx)("strong", {
                              children: S("cvBuilder.mobileWarning.title"),
                            }),
                            " ",
                            S("cvBuilder.mobileWarning.description"),
                          ],
                        }),
                      ],
                    }),
                  }),
                ],
              }),
            (0, s.jsx)(l.N, {
              mode: "wait",
              children: (0, s.jsx)(
                r.P.div,
                {
                  initial: { opacity: 0 },
                  animate: { opacity: 1 },
                  exit: { opacity: 0 },
                  transition: { duration: 0.5 },
                  className: "w-full",
                  children: (() => {
                    switch (e) {
                      case "loading":
                        return (0, s.jsx)("div", {
                          className:
                            "flex items-center justify-center min-h-[50vh]",
                          children: (0, s.jsx)("div", {
                            className:
                              "animate-spin rounded-full h-8 w-8 border-b-2 border-primary",
                          }),
                        });
                      case "welcome":
                        return (0, s.jsx)(y, {
                          onCreateCV: I,
                          isCreating: c,
                          existingCV: v,
                          onUseExistingCV: R,
                          onSkipExistingCV: H,
                        });
                      case "editor":
                        return (0, s.jsx)(z, {
                          cvProfile: a,
                          onEdit: L,
                          onDelete: Y,
                          onRecreate: () => t("welcome"),
                        });
                      default:
                        return null;
                    }
                  })(),
                },
                e,
              ),
            }),
            (0, s.jsx)(W, {
              open: g,
              analyzing: b,
              currentStep: F,
              completionPercentage: A,
              extractedData: C,
              onProceed: q,
              onCancel: () => {
                (j(!1), N(!1), k(""), _(null), B(0));
              },
            }),
          ],
        });
      }
      function q() {
        return (0, s.jsx)(R, {});
      }
    },
  },
  (e) => {
    var t = (t) => e((e.s = t));
    (e.O(0, [46593, 36209, 84121, 72076, 77358], () => t(9993)),
      (_N_E = e.O()));
  },
]);
