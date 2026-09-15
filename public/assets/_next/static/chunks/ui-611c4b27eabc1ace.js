"use strict";
(self.webpackChunk_N_E = self.webpackChunk_N_E || []).push([
  [36209],
  {
    456: (e, s, a) => {
      a.d(s, { JN: () => d });
      var t = a(70207);
      a(87223);
      var r = a(45748),
        l = a(82110),
        n = a(68233),
        i = a(99275);
      function d(e) {
        let { className: s, size: a = "default", variant: d = "default" } = e,
          { language: o, setLanguage: c, isLoading: m } = (0, n.ok)(),
          x = async (e) => {
            e === o || m || (await c(e));
          },
          u = {
            sm: {
              container: "h-8 p-1 gap-0.5",
              button: "h-6 px-3 text-xs",
              indicator: "h-6",
            },
            default: {
              container: "h-10 p-1.5 gap-1",
              button: "h-7 px-4 text-sm",
              indicator: "h-7",
            },
            lg: {
              container: "h-12 p-1.5 gap-1",
              button: "h-9 px-5 text-base",
              indicator: "h-9",
            },
          }[a];
        return (0, t.jsxs)("div", {
          className: (0, l.cn)(
            "relative inline-flex items-center rounded-full",
            {
              default: "bg-transparent border border-border",
              outline: "bg-transparent border border-border",
              ghost: "bg-transparent border border-border",
            }[d],
            u.container,
            "transition-all duration-300",
            s,
          ),
          role: "group",
          "aria-label": "Language selection",
          children: [
            (0, t.jsx)(r.P.div, {
              className: (0, l.cn)(
                "absolute rounded-full",
                "bg-orange-500 dark:bg-orange-500",
                "shadow-sm",
                u.indicator,
              ),
              initial: !1,
              animate: {
                left: "en" === o ? 4 : "calc(50% + 2px)",
                width: "calc(50% - 6px)",
              },
              transition: {
                type: "spring",
                stiffness: 400,
                damping: 30,
                mass: 0.8,
              },
            }),
            (0, t.jsx)("button", {
              type: "button",
              onClick: () => x("en"),
              disabled: m,
              className: (0, l.cn)(
                "relative z-10 rounded-full font-semibold",
                "flex items-center justify-center",
                "transition-all duration-200",
                "focus:outline-none focus-visible:ring-2 focus-visible:ring-primary/20 focus-visible:ring-offset-1",
                u.button,
                "en" === o
                  ? "text-white"
                  : "text-secondary hover:text-secondary/80",
                m && "cursor-wait opacity-70",
              ),
              "aria-pressed": "en" === o,
              "aria-label": "Switch to English",
              children: i.uj.en,
            }),
            (0, t.jsx)("button", {
              type: "button",
              onClick: () => x("de"),
              disabled: m,
              className: (0, l.cn)(
                "relative z-10 rounded-full font-semibold",
                "flex items-center justify-center",
                "transition-all duration-200",
                "focus:outline-none focus-visible:ring-2 focus-visible:ring-primary/20 focus-visible:ring-offset-1",
                u.button,
                "de" === o
                  ? "text-white"
                  : "text-secondary hover:text-secondary/80",
                m && "cursor-wait opacity-70",
              ),
              "aria-pressed": "de" === o,
              "aria-label": "Zu Deutsch wechseln",
              children: i.uj.de,
            }),
          ],
        });
      }
    },
    1526: (e, s, a) => {
      a.d(s, {
        $v: () => f,
        EO: () => m,
        Lt: () => d,
        Rx: () => p,
        Zr: () => b,
        ck: () => u,
        r7: () => h,
        wd: () => x,
      });
      var t = a(70207),
        r = a(87223),
        l = a(56156),
        n = a(82110),
        i = a(39441);
      let d = l.bL;
      l.l9;
      let o = l.ZL,
        c = r.forwardRef((e, s) => {
          let { className: a, ...r } = e;
          return (0, t.jsx)(l.hJ, {
            className: (0, n.cn)(
              "fixed inset-0 z-50 bg-black/80 data-[state=open]:animate-in data-[state=closed]:animate-out data-[state=closed]:fade-out-0 data-[state=open]:fade-in-0",
              a,
            ),
            ...r,
            ref: s,
          });
        });
      c.displayName = l.hJ.displayName;
      let m = r.forwardRef((e, s) => {
        let { className: a, ...r } = e;
        return (0, t.jsxs)(o, {
          children: [
            (0, t.jsx)(c, {}),
            (0, t.jsx)(l.UC, {
              ref: s,
              className: (0, n.cn)(
                "fixed left-[50%] top-[50%] z-50 grid w-full max-w-lg translate-x-[-50%] translate-y-[-50%] gap-4 border bg-background p-6 shadow-lg duration-200 data-[state=open]:animate-in data-[state=closed]:animate-out data-[state=closed]:fade-out-0 data-[state=open]:fade-in-0 data-[state=closed]:zoom-out-95 data-[state=open]:zoom-in-95 data-[state=closed]:slide-out-to-left-1/2 data-[state=closed]:slide-out-to-top-[48%] data-[state=open]:slide-in-from-left-1/2 data-[state=open]:slide-in-from-top-[48%] sm:rounded-lg",
                a,
              ),
              ...r,
            }),
          ],
        });
      });
      m.displayName = l.UC.displayName;
      let x = (e) => {
        let { className: s, ...a } = e;
        return (0, t.jsx)("div", {
          className: (0, n.cn)(
            "flex flex-col space-y-2 text-center sm:text-left",
            s,
          ),
          ...a,
        });
      };
      x.displayName = "AlertDialogHeader";
      let u = (e) => {
        let { className: s, ...a } = e;
        return (0, t.jsx)("div", {
          className: (0, n.cn)(
            "flex flex-col-reverse sm:flex-row sm:justify-end sm:space-x-2",
            s,
          ),
          ...a,
        });
      };
      u.displayName = "AlertDialogFooter";
      let h = r.forwardRef((e, s) => {
        let { className: a, ...r } = e;
        return (0, t.jsx)(l.hE, {
          ref: s,
          className: (0, n.cn)("text-lg font-semibold", a),
          ...r,
        });
      });
      h.displayName = l.hE.displayName;
      let f = r.forwardRef((e, s) => {
        let { className: a, ...r } = e;
        return (0, t.jsx)(l.VY, {
          ref: s,
          className: (0, n.cn)("text-sm text-muted-foreground", a),
          ...r,
        });
      });
      f.displayName = l.VY.displayName;
      let p = r.forwardRef((e, s) => {
        let { className: a, ...r } = e;
        return (0, t.jsx)(l.rc, {
          ref: s,
          className: (0, n.cn)((0, i.r)(), a),
          ...r,
        });
      });
      p.displayName = l.rc.displayName;
      let b = r.forwardRef((e, s) => {
        let { className: a, ...r } = e;
        return (0, t.jsx)(l.ZD, {
          ref: s,
          className: (0, n.cn)(
            (0, i.r)({ variant: "outline" }),
            "mt-2 sm:mt-0",
            a,
          ),
          ...r,
        });
      });
      b.displayName = l.ZD.displayName;
    },
    3202: (e, s, a) => {
      a.d(s, { B: () => c });
      var t = a(70207),
        r = a(87223),
        l = a(63030),
        n = a(50018),
        i = a(39945),
        d = a(66076),
        o = a(39441);
      function c(e) {
        let { src: s, alt: a, isOpen: c, onClose: m } = e;
        if (
          ((0, r.useEffect)(() => {
            let e = (e) => {
              "Escape" === e.key && m();
            };
            return (
              c &&
                (document.addEventListener("keydown", e),
                (document.body.style.overflow = "hidden")),
              () => {
                (document.removeEventListener("keydown", e),
                  (document.body.style.overflow = "unset"));
              }
            );
          }, [c, m]),
          !c)
        )
          return null;
        let x = (0, t.jsxs)("div", {
          className:
            "fixed inset-0 z-[9999] flex items-center justify-center bg-black/95 animate-in fade-in-0 duration-300",
          onClick: m,
          children: [
            (0, t.jsx)(o.$, {
              variant: "ghost",
              size: "icon",
              onClick: m,
              className:
                "absolute top-6 right-6 text-white hover:text-muted-foreground hover:bg-white/10 transition-colors z-10 h-12 w-12",
              "aria-label": "Close lightbox",
              children: (0, t.jsx)(i.A, { className: "h-6 w-6" }),
            }),
            (0, t.jsxs)("div", {
              className:
                "relative w-full h-full flex items-center justify-center px-8 py-16",
              onClick: (e) => e.stopPropagation(),
              children: [
                (0, t.jsx)(n.default, {
                  src: s,
                  alt: a,
                  width: 1920,
                  height: 1080,
                  className:
                    "max-w-full max-h-full object-contain animate-in zoom-in-95 duration-300",
                  priority: !0,
                  quality: 100,
                }),
                (0, t.jsxs)("div", {
                  className:
                    "absolute bottom-6 left-6 bg-black/60 backdrop-blur-sm rounded-lg px-4 py-3 text-white",
                  children: [
                    (0, t.jsx)("p", {
                      className: "text-sm opacity-80",
                      children: "Job Poster",
                    }),
                    (0, t.jsx)("p", {
                      className: "text-base font-medium",
                      children: a,
                    }),
                  ],
                }),
                (0, t.jsxs)("div", {
                  className:
                    "absolute top-6 left-6 bg-black/60 backdrop-blur-sm rounded-lg px-4 py-2 text-white text-sm flex items-center gap-2",
                  children: [
                    (0, t.jsx)(d.A, { className: "h-4 w-4" }),
                    (0, t.jsx)("span", {
                      children: "ESC to close • Click outside to exit",
                    }),
                  ],
                }),
              ],
            }),
          ],
        });
        return (0, l.createPortal)(x, document.body);
      }
    },
    4426: (e, s, a) => {
      a.d(s, { AvatarCircles: () => d });
      var t = a(70207);
      a(87223);
      var r = a(82110),
        l = a(50018),
        n = a(81555);
      let i = (e) =>
          e.includes("/hero/small/")
            ? e.replace("/hero/small/", "/hero/webp/").replace(".png", ".webp")
            : e,
        d = (e) => {
          let { numPeople: s = 0, className: a, avatarUrls: d = n.T } = e,
            o = d.slice(0, 5),
            c = s > 0 ? s : d.length - 5;
          return (0, t.jsxs)("div", {
            className: (0, r.cn)("z-10 flex -space-x-4 rtl:space-x-reverse", a),
            children: [
              o.map((e, s) =>
                (0, t.jsx)(
                  "div",
                  {
                    className: "relative h-10 w-10",
                    children: (0, t.jsxs)("picture", {
                      children: [
                        (0, t.jsx)("source", {
                          srcSet: i(e),
                          type: "image/webp",
                        }),
                        (0, t.jsx)(l.default, {
                          src: e,
                          alt: "Avatar ".concat(s + 1),
                          width: 40,
                          height: 40,
                          className: "rounded-full border-2 border-white",
                          priority: s < 2,
                          loading: s < 2 ? "eager" : "lazy",
                        }),
                      ],
                    }),
                  },
                  s,
                ),
              ),
              c > 0 &&
                (0, t.jsxs)("div", {
                  className:
                    "flex h-10 w-10 items-center justify-center rounded-full border-2 border-white bg-green text-center text-xs font-medium text-white z-20",
                  children: [
                    "+",
                    c >= 1e3 ? "".concat(Math.floor(c / 1e3), "k") : c,
                  ],
                }),
            ],
          });
        };
    },
    5313: (e, s, a) => {
      a.d(s, { Fc: () => d, TN: () => c, XL: () => o });
      var t = a(70207),
        r = a(87223),
        l = a(8128),
        n = a(82110);
      let i = (0, l.F)(
          "relative w-full rounded-lg border p-4 [&>svg~*]:pl-7 [&>svg+div]:translate-y-[-3px] [&>svg]:absolute [&>svg]:left-4 [&>svg]:top-4 [&>svg]:text-foreground",
          {
            variants: {
              variant: {
                default: "bg-background text-foreground",
                destructive:
                  "border-destructive/50 text-destructive [&>svg]:text-destructive",
              },
            },
            defaultVariants: { variant: "default" },
          },
        ),
        d = r.forwardRef((e, s) => {
          let { className: a, variant: r, ...l } = e;
          return (0, t.jsx)("div", {
            ref: s,
            role: "alert",
            className: (0, n.cn)(i({ variant: r }), a),
            ...l,
          });
        });
      d.displayName = "Alert";
      let o = r.forwardRef((e, s) => {
        let { className: a, ...r } = e;
        return (0, t.jsx)("h5", {
          ref: s,
          className: (0, n.cn)(
            "mb-1 font-medium leading-none tracking-tight",
            a,
          ),
          ...r,
        });
      });
      o.displayName = "AlertTitle";
      let c = r.forwardRef((e, s) => {
        let { className: a, ...r } = e;
        return (0, t.jsx)("div", {
          ref: s,
          className: (0, n.cn)("text-sm [&_p]:leading-relaxed", a),
          ...r,
        });
      });
      c.displayName = "AlertDescription";
    },
    5491: (e, s, a) => {
      a.d(s, { P: () => o });
      var t = a(70207),
        r = a(87223),
        l = a(1526),
        n = a(44948),
        i = a(31159),
        d = a(82110);
      function o(e) {
        let {
            open: s,
            onOpenChange: a,
            onConfirm: o,
            title: c = "Delete Document?",
            description: m,
            documentName: x,
            isVerified: u = !1,
            loading: h = !1,
          } = e,
          [f, p] = r.useState(!1),
          b = async () => {
            p(!0);
            try {
              (await o(), a(!1));
            } catch (e) {
              console.error("Delete error:", e);
            } finally {
              p(!1);
            }
          };
        return (0, t.jsx)(l.Lt, {
          open: s,
          onOpenChange: a,
          children: (0, t.jsxs)(l.EO, {
            className: "sm:max-w-md bg-background border border-border",
            children: [
              (0, t.jsxs)(l.wd, {
                className: "space-y-3",
                children: [
                  (0, t.jsxs)("div", {
                    className: "flex items-center gap-3",
                    children: [
                      (0, t.jsx)("div", {
                        className:
                          "flex items-center justify-center w-12 h-12 bg-destructive/10 rounded-full flex-shrink-0",
                        children: (0, t.jsx)(n.A, {
                          className: "h-6 w-6 text-destructive",
                        }),
                      }),
                      (0, t.jsx)(l.r7, {
                        className: "text-lg font-semibold text-secondary",
                        children: c,
                      }),
                    ],
                  }),
                  m
                    ? (0, t.jsx)(l.$v, {
                        className: "text-sm text-muted-foreground",
                        children: m,
                      })
                    : (0, t.jsxs)(t.Fragment, {
                        children: [
                          x &&
                            (0, t.jsxs)(l.$v, {
                              className: "text-sm text-muted-foreground",
                              children: [
                                "You are about to delete ",
                                (0, t.jsx)("strong", {
                                  className: "text-secondary",
                                  children: x,
                                }),
                                ". This action cannot be undone.",
                              ],
                            }),
                          !x &&
                            (0, t.jsx)(l.$v, {
                              className: "text-sm text-muted-foreground",
                              children: "This action cannot be undone.",
                            }),
                        ],
                      }),
                  u &&
                    (0, t.jsxs)("div", {
                      className:
                        "p-3 bg-orange/10 border border-orange rounded-xl",
                      children: [
                        (0, t.jsxs)("div", {
                          className:
                            "text-sm font-medium text-orange flex items-center gap-2",
                          children: [
                            (0, t.jsx)(n.A, { className: "h-4 w-4" }),
                            "Warning: You will lose your verification status",
                          ],
                        }),
                        (0, t.jsx)("div", {
                          className: "text-xs text-orange/80 mt-1",
                          children:
                            "Your verification badge will be removed and you'll need to upload a new document to get verified again.",
                        }),
                      ],
                    }),
                ],
              }),
              (0, t.jsxs)(l.ck, {
                className: "flex-col sm:flex-row gap-2 sm:gap-2",
                children: [
                  (0, t.jsx)(l.Zr, {
                    disabled: f || h,
                    className: (0, d.cn)(
                      "rounded-full h-11 min-h-[44px] px-6",
                      "border-border bg-background hover:bg-cream",
                      "text-secondary font-medium",
                    ),
                    children: "Cancel",
                  }),
                  (0, t.jsx)(l.Rx, {
                    onClick: b,
                    disabled: f || h,
                    className: (0, d.cn)(
                      "rounded-full h-11 min-h-[44px] px-6",
                      "bg-destructive hover:bg-destructive/90 text-destructive-foreground",
                      "font-medium",
                    ),
                    children:
                      f || h
                        ? (0, t.jsxs)(t.Fragment, {
                            children: [
                              (0, t.jsx)(i.A, {
                                className: "w-4 h-4 mr-2 animate-spin",
                              }),
                              "Deleting...",
                            ],
                          })
                        : "Delete Document",
                  }),
                ],
              }),
            ],
          }),
        });
      }
    },
    6083: (e, s, a) => {
      a.d(s, { PrintButton: () => n });
      var t = a(70207),
        r = a(4697),
        l = a(39441);
      function n() {
        return (0, t.jsxs)(l.$, {
          variant: "outline",
          size: "sm",
          onClick: () => window.print(),
          className: "flex items-center gap-2",
          children: [(0, t.jsx)(r.A, { className: "h-4 w-4" }), "Print"],
        });
      }
    },
    6710: (e, s, a) => {
      a.d(s, { $: () => x });
      var t = a(70207);
      a(87223);
      var r = a(70311),
        l = a(67926),
        n = a(28131),
        i = a(95992),
        d = a(18790),
        o = a(82110);
      let c = {
          verified: {
            icon: r.A,
            className: "bg-blue-600 text-white border-blue-600",
            defaultLabel: "Verified",
          },
          priority: {
            icon: l.A,
            className:
              "bg-gradient-to-r from-purple-500 via-purple-600 to-purple-500 text-white border-purple-600 shadow-[0_0_12px_rgba(168,85,247,0.5)] hover:shadow-[0_0_16px_rgba(168,85,247,0.7)] transition-all",
            defaultLabel: "Priority",
          },
          pending: {
            icon: n.A,
            className: "bg-orange-500 text-white border-orange-500",
            defaultLabel: "Pending Review",
          },
          unverified: {
            icon: i.A,
            className: "bg-muted text-muted-foreground border-muted",
            defaultLabel: "Not Verified",
          },
          rejected: {
            icon: d.A,
            className:
              "bg-destructive text-destructive-foreground border-destructive",
            defaultLabel: "Rejected",
          },
        },
        m = {
          xs: {
            container: "px-1.5 py-0.5 gap-0.5",
            icon: "h-3 w-3",
            text: "text-[10px]",
          },
          sm: {
            container: "px-2 py-1 gap-1",
            icon: "h-3.5 w-3.5",
            text: "text-xs",
          },
          md: {
            container: "px-2.5 py-1 gap-1",
            icon: "h-4 w-4",
            text: "text-xs",
          },
          lg: {
            container: "px-3 py-1.5 gap-1.5",
            icon: "h-5 w-5",
            text: "text-sm",
          },
          xl: {
            container: "px-4 py-2 gap-2",
            icon: "h-6 w-6",
            text: "text-base",
          },
        };
      function x(e) {
        let {
            status: s,
            label: a,
            className: r,
            showIcon: l = !0,
            showLabel: n = !0,
            size: i = "md",
            pulse: d = !1,
          } = e,
          x = c[s],
          u = m[i],
          h = x.icon,
          f = a || x.defaultLabel;
        return ("verified" !== s && "priority" !== s) || n
          ? (0, t.jsxs)("span", {
              className: (0, o.cn)(
                "inline-flex items-center font-semibold rounded-xl border transition-all",
                x.className,
                u.container,
                u.text,
                d && "verified" === s && "animate-pulse",
                r,
              ),
              title: f,
              children: [
                l && (0, t.jsx)(h, { className: u.icon }),
                n && (0, t.jsx)("span", { children: f }),
              ],
            })
          : (0, t.jsxs)("span", {
              className: "relative group/badge inline-block",
              children: [
                (0, t.jsx)(h, {
                  className: (0, o.cn)(
                    u.icon,
                    "verified" === s && "text-blue-600",
                    "priority" === s && "text-purple-600",
                    d && "animate-pulse",
                    r,
                  ),
                }),
                (0, t.jsx)("span", {
                  className:
                    "absolute bottom-full left-1/2 -translate-x-1/2 mb-2 px-2 py-1 bg-[#2C3340] text-white text-xs rounded-lg opacity-0 group-hover/badge:opacity-100 transition-opacity pointer-events-none whitespace-nowrap z-50",
                  children: f,
                }),
              ],
            });
      }
    },
    7782: (e, s, a) => {
      a.d(s, { Separator: () => i });
      var t = a(70207),
        r = a(87223),
        l = a(54276),
        n = a(82110);
      let i = r.forwardRef((e, s) => {
        let {
          className: a,
          orientation: r = "horizontal",
          decorative: i = !0,
          ...d
        } = e;
        return (0, t.jsx)(l.b, {
          ref: s,
          decorative: i,
          orientation: r,
          className: (0, n.cn)(
            "shrink-0 bg-beige",
            "horizontal" === r ? "h-[1px] w-full" : "h-full w-[1px]",
            a,
          ),
          ...d,
        });
      });
      i.displayName = l.b.displayName;
    },
    11279: (e, s, a) => {
      a.d(s, { Ke: () => o, Nt: () => i, R6: () => d });
      var t = a(70207),
        r = a(87223),
        l = a(76175),
        n = a(82110);
      let i = l.bL,
        d = l.l9,
        o = r.forwardRef((e, s) => {
          let { className: a, ...r } = e;
          return (0, t.jsx)(l.UC, {
            ref: s,
            className: (0, n.cn)(
              "data-[state=closed]:animate-collapsible-up data-[state=open]:animate-collapsible-down overflow-hidden",
              a,
            ),
            ...r,
          });
        });
      o.displayName = "CollapsibleContent";
    },
    13804: (e, s, a) => {
      a.d(s, { l: () => d });
      var t = a(70207);
      a(87223);
      var r = a(30620),
        l = a(84217),
        n = a(82110),
        i = a(40167);
      function d(e) {
        let {
            value: s,
            onChange: a,
            placeholder: d = "Select date",
            disabled: o = !1,
            minDate: c,
            maxDate: m,
            className: x,
          } = e,
          u = s instanceof Date ? s : s ? new Date(s) : void 0,
          h = u ? (0, r.GP)(u, "yyyy-MM-dd") : "",
          f = c ? (0, r.GP)(c, "yyyy-MM-dd") : void 0,
          p = m ? (0, r.GP)(m, "yyyy-MM-dd") : void 0;
        return (0, t.jsxs)("div", {
          className: "relative",
          children: [
            (0, t.jsx)(i.p, {
              type: "date",
              value: h,
              onChange: (e) => {
                let s = e.target.value;
                if (!s) {
                  a(null);
                  return;
                }
                let t = new Date(s);
                isNaN(t.getTime()) || a(t);
              },
              disabled: o,
              min: f,
              max: p,
              placeholder: d,
              className: (0, n.cn)(
                "w-full rounded-full h-12 pr-10",
                !s && "text-muted-foreground",
                x,
              ),
            }),
            (0, t.jsx)(l.A, {
              className:
                "absolute right-4 top-1/2 -translate-y-1/2 h-4 w-4 text-muted-foreground pointer-events-none",
            }),
          ],
        });
      }
    },
    14207: (e, s, a) => {
      (a.r(s), a.d(s, { CTASection: () => c }));
      var t = a(70207),
        r = a(39441),
        l = a(17802),
        n = a(52141),
        i = a(35121),
        d = a(82110),
        o = a(50018);
      function c(e) {
        let {
          badge: s,
          title: a,
          description: c,
          action: m,
          secondaryAction: x,
          mascot: u,
          withGlow: h = !0,
          className: f,
          backgroundImage: p = "/images/arbeitgeber-hero-background.webp",
        } = e;
        return (0, t.jsx)("div", {
          className: "container mx-auto px-4 lg:px-6 my-16",
          children: (0, t.jsxs)("section", {
            className: (0, d.cn)(
              "relative py-16 md:py-20 rounded-2xl overflow-hidden shadow-lg",
              f,
            ),
            children: [
              (0, t.jsx)(o.default, {
                src: p,
                alt: "Background",
                fill: !0,
                quality: 85,
                sizes:
                  "(max-width: 768px) 100vw, (max-width: 1280px) 90vw, 1280px",
                className: "object-cover object-center rounded-2xl",
              }),
              (0, t.jsx)("div", {
                className: "absolute inset-0 bg-black/30 z-0 rounded-2xl",
              }),
              (0, t.jsx)("div", {
                className: "absolute inset-0 z-[1] rounded-2xl",
                style: {
                  background:
                    "\n              radial-gradient(ellipse at center, transparent 0%, transparent 40%, rgba(0,0,0,0.4) 100%),\n              linear-gradient(to top, rgba(0,0,0,0.5) 0%, transparent 30%),\n              linear-gradient(to right, rgba(0,0,0,0.3) 0%, transparent 15%),\n              linear-gradient(to left, rgba(0,0,0,0.3) 0%, transparent 15%)\n            ",
                },
              }),
              (0, t.jsxs)("div", {
                className: (0, d.cn)(
                  "relative z-10 mx-auto flex max-w-container gap-8 px-6 sm:gap-10 md:px-12",
                  u
                    ? "grid lg:grid-cols-2 items-center"
                    : "flex-col items-center text-center",
                ),
                children: [
                  u &&
                    (0, t.jsx)("div", {
                      className:
                        "hidden lg:flex justify-center items-center order-first",
                      children: (0, t.jsx)("div", {
                        className: "relative w-full max-w-md",
                        children: (0, t.jsx)("img", {
                          src: u.src,
                          alt: u.alt,
                          className: "relative w-full h-auto drop-shadow-xl",
                        }),
                      }),
                    }),
                  (0, t.jsxs)("div", {
                    className: (0, d.cn)(
                      "flex flex-col gap-8",
                      u ? "" : "items-center text-center",
                    ),
                    children: [
                      s &&
                        (0, t.jsx)(l.E, {
                          variant: "outline",
                          className:
                            "border-white/80 bg-white/10 backdrop-blur-sm px-4 py-1.5 text-base w-fit",
                          children: (0, t.jsx)("span", {
                            className: "text-white font-medium",
                            children: s.text,
                          }),
                        }),
                      (0, t.jsx)(n.D, {
                        level: 2,
                        className: (0, d.cn)(
                          "text-white",
                          u ? "" : "text-center",
                        ),
                        children: a,
                      }),
                      c &&
                        (0, t.jsx)(i.f, {
                          className: (0, d.cn)(
                            "text-white/90 leading-relaxed",
                            u ? "" : "max-w-2xl text-center",
                          ),
                          children: c,
                        }),
                      (0, t.jsxs)("div", {
                        className:
                          "flex flex-col sm:flex-row items-center gap-3",
                        children: [
                          (0, t.jsx)(r.$, {
                            variant: m.variant || "default",
                            size: "lg",
                            className:
                              "px-8 py-6 text-lg font-medium rounded-full transition-all duration-300",
                            asChild: !0,
                            children: (0, t.jsx)("a", {
                              href: m.href,
                              children: m.text,
                            }),
                          }),
                          x &&
                            (0, t.jsx)(r.$, {
                              variant: x.variant || "secondary",
                              size: "lg",
                              className:
                                "px-8 py-6 text-lg font-medium rounded-full transition-all duration-300",
                              asChild: !0,
                              children: (0, t.jsx)("a", {
                                href: x.href,
                                children: x.text,
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
        });
      }
    },
    14691: (e, s, a) => {
      a.d(s, {
        A0: () => i,
        BF: () => d,
        Hj: () => o,
        XI: () => n,
        nA: () => m,
        nd: () => c,
      });
      var t = a(70207),
        r = a(87223),
        l = a(82110);
      let n = r.forwardRef((e, s) => {
        let { className: a, ...r } = e;
        return (0, t.jsx)("div", {
          className: "relative w-full overflow-auto rounded-lg",
          children: (0, t.jsx)("table", {
            ref: s,
            className: (0, l.cn)("w-full caption-bottom text-sm", a),
            ...r,
          }),
        });
      });
      n.displayName = "Table";
      let i = r.forwardRef((e, s) => {
        let { className: a, ...r } = e;
        return (0, t.jsx)("thead", {
          ref: s,
          className: (0, l.cn)("bg-beige/60", a),
          ...r,
        });
      });
      i.displayName = "TableHeader";
      let d = r.forwardRef((e, s) => {
        let { className: a, ...r } = e;
        return (0, t.jsx)("tbody", {
          ref: s,
          className: (0, l.cn)("[&_tr:last-child]:border-0", a),
          ...r,
        });
      });
      ((d.displayName = "TableBody"),
        (r.forwardRef((e, s) => {
          let { className: a, ...r } = e;
          return (0, t.jsx)("tfoot", {
            ref: s,
            className: (0, l.cn)("bg-beige/40 font-semibold", a),
            ...r,
          });
        }).displayName = "TableFooter"));
      let o = r.forwardRef((e, s) => {
        let { className: a, ...r } = e;
        return (0, t.jsx)("tr", {
          ref: s,
          className: (0, l.cn)(
            "border-b border-beige transition-colors duration-150 hover:bg-cream data-[state=selected]:bg-orange-light",
            a,
          ),
          ...r,
        });
      });
      o.displayName = "TableRow";
      let c = r.forwardRef((e, s) => {
        let { className: a, ...r } = e;
        return (0, t.jsx)("th", {
          ref: s,
          className: (0, l.cn)(
            "h-12 px-4 py-3 text-left align-middle font-semibold text-foreground [&:has([role=checkbox])]:pr-0",
            a,
          ),
          ...r,
        });
      });
      c.displayName = "TableHead";
      let m = r.forwardRef((e, s) => {
        let { className: a, ...r } = e;
        return (0, t.jsx)("td", {
          ref: s,
          className: (0, l.cn)(
            "px-4 py-4 align-middle [&:has([role=checkbox])]:pr-0",
            a,
          ),
          ...r,
        });
      });
      ((m.displayName = "TableCell"),
        (r.forwardRef((e, s) => {
          let { className: a, ...r } = e;
          return (0, t.jsx)("caption", {
            ref: s,
            className: (0, l.cn)("mt-4 text-sm text-muted-foreground", a),
            ...r,
          });
        }).displayName = "TableCaption"));
    },
    15954: (e, s, a) => {
      a.d(s, { k: () => o });
      var t = a(70207),
        r = a(63016),
        l = a(93501),
        n = a(75281),
        i = a(82110);
      function d(e) {
        let {
            value: s,
            onChange: a,
            className: d,
            compact: o = !1,
            showFlag: c = !0,
            disabled: m = !1,
          } = e,
          x = (0, n.VC)(),
          u = x.find((e) => e.code === s);
        return (0, t.jsxs)(l.l6, {
          value: s,
          onValueChange: a,
          disabled: m,
          children: [
            (0, t.jsx)(l.bq, {
              className: (0, i.cn)(
                "bg-white/80 border-[#2C3340]/20 hover:border-[#5D5DE9] focus:ring-[#5D5DE9]/20",
                o ? "h-8 px-2 text-xs" : "h-10 px-3 text-sm",
                d,
              ),
              children: (0, t.jsx)(l.yv, {
                children: (0, t.jsx)("span", {
                  className: "flex items-center gap-1.5",
                  children: o
                    ? (0, t.jsxs)(t.Fragment, {
                        children: [
                          (0, t.jsx)(r.A, {
                            className: "h-3 w-3 text-[#2C3340]/60",
                          }),
                          (0, t.jsx)("span", {
                            className: "font-medium",
                            children: null == u ? void 0 : u.code,
                          }),
                        ],
                      })
                    : (0, t.jsxs)(t.Fragment, {
                        children: [
                          c &&
                            (null == u ? void 0 : u.flag) &&
                            (0, t.jsx)("span", {
                              className: "text-base",
                              children: u.flag,
                            }),
                          (0, t.jsxs)("span", {
                            className: "font-medium",
                            children: [
                              null == u ? void 0 : u.symbol,
                              " ",
                              null == u ? void 0 : u.code,
                            ],
                          }),
                        ],
                      }),
                }),
              }),
            }),
            (0, t.jsx)(l.gC, {
              children: x.map((e) =>
                (0, t.jsx)(
                  l.eb,
                  {
                    value: e.code,
                    className: "cursor-pointer",
                    children: (0, t.jsxs)("span", {
                      className: "flex items-center gap-2",
                      children: [
                        c &&
                          (0, t.jsx)("span", {
                            className: "text-base",
                            children: e.flag,
                          }),
                        (0, t.jsx)("span", {
                          className: "font-medium",
                          children: e.symbol,
                        }),
                        (0, t.jsx)("span", {
                          className: "text-[#2C3340]/70",
                          children: e.code,
                        }),
                        !o &&
                          (0, t.jsx)("span", {
                            className: "text-xs text-[#2C3340]/50 ml-1",
                            children: e.name,
                          }),
                      ],
                    }),
                  },
                  e.code,
                ),
              ),
            }),
          ],
        });
      }
      function o(e) {
        let { value: s, onChange: a, className: r } = e;
        return (0, t.jsx)(d, {
          value: s,
          onChange: a,
          className: (0, i.cn)("w-auto min-w-[80px]", r),
          compact: !0,
          showFlag: !1,
        });
      }
    },
    17802: (e, s, a) => {
      a.d(s, { E: () => i });
      var t = a(70207);
      a(87223);
      var r = a(8128),
        l = a(82110);
      let n = (0, r.F)(
        "inline-flex items-center rounded-full border px-2.5 py-0.5 text-xs font-semibold transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2",
        {
          variants: {
            variant: {
              default:
                "border-transparent bg-primary text-primary-foreground hover:bg-primary/80",
              secondary:
                "border-transparent bg-secondary text-secondary-foreground hover:bg-secondary/80",
              destructive:
                "border-transparent bg-destructive text-destructive-foreground hover:bg-destructive/80",
              outline: "text-foreground",
              "high-demand":
                "border-transparent bg-secondary text-secondary-foreground hover:bg-secondary/90 shadow-sm px-1 py-0 text-[10px] leading-tight min-h-[16px] h-4",
              popular:
                "border-transparent bg-primary text-white hover:bg-primary/90 shadow-sm px-1 py-0 text-[10px] leading-tight min-h-[16px] h-4",
            },
          },
          defaultVariants: { variant: "default" },
        },
      );
      function i(e) {
        let { className: s, variant: a, ...r } = e;
        return (0, t.jsx)("div", {
          className: (0, l.cn)(n({ variant: a }), s),
          ...r,
        });
      }
    },
    21402: (e, s, a) => {
      (a.r(s), a.d(s, { ProtectedLink: () => m }));
      var t = a(70207),
        r = a(87223),
        l = a(10542),
        n = a.n(l),
        i = a(18051),
        d = a(70773),
        o = a(82110),
        c = a(92266);
      function m(e) {
        let { href: s, children: a, className: l, onClick: m } = e,
          x = (0, i.useRouter)(),
          [u, h] = (0, r.useState)(null),
          f = (0, d.U)();
        return ((0, r.useEffect)(() => {
          (async function () {
            let {
              data: { session: e },
            } = await f.auth.getSession();
            h(!!e);
          })();
          let {
            data: { subscription: e },
          } = f.auth.onAuthStateChange((e, s) => {
            h(!!s);
          });
          return () => e.unsubscribe();
        }, [f]),
        null === u)
          ? (0, t.jsx)("div", {
              className: (0, o.cn)(l, "opacity-50 pointer-events-none"),
              children: a,
            })
          : (0, t.jsx)(n(), {
              href: s,
              className: l,
              onClick: (e) => {
                if ((m && m(), null === u)) {
                  e.preventDefault();
                  return;
                }
                if (!u && s.startsWith("/dashboard")) {
                  (e.preventDefault(),
                    (0, c.vA)(s),
                    x.push("/auth?redirect=".concat(encodeURIComponent(s))));
                  return;
                }
              },
              children: a,
            });
      }
    },
    27845: (e, s, a) => {
      a.d(s, { Q: () => o });
      var t = a(70207),
        r = a(87223),
        l = a(50018),
        n = a(82110);
      let i = {
          orange:
            "bg-gradient-to-br from-orange-50 to-amber-50 border-black/20",
          green:
            "bg-gradient-to-br from-green-50 to-emerald-50 border-black/20",
          cream: "bg-gradient-to-br from-cream to-beige border-black/20",
        },
        d = {
          green: "bg-green-500",
          blue: "bg-blue-500",
          orange: "bg-primary",
        };
      function o(e) {
        let {
            title: s,
            description: a,
            image: o,
            badge: c,
            gradient: m,
            cardSize: x,
            imagePosition: u = "center",
            className: h,
          } = e,
          [f, p] = (0, r.useState)(!1),
          b = (0, r.useRef)(null);
        (0, r.useEffect)(() => {
          let e = new IntersectionObserver(
            (s) => {
              s.forEach((s) => {
                s.isIntersecting && (p(!0), e.unobserve(s.target));
              });
            },
            { threshold: 0.1, rootMargin: "50px" },
          );
          return (
            b.current && e.observe(b.current),
            () => {
              b.current && e.unobserve(b.current);
            }
          );
        }, []);
        let g = "large-vertical" === x;
        return (0, t.jsx)("div", {
          ref: b,
          className: (0, n.cn)(
            "group relative rounded-2xl border transition-all duration-700 ease-out hover:shadow-xl",
            i[m],
            {
              "large-vertical": "lg:row-span-2 p-6 md:p-8 min-h-[400px]",
              horizontal: "lg:col-span-2 p-6",
              standard: "p-6",
            }[x],
            f ? "opacity-100 translate-y-0" : "opacity-0 translate-y-8",
            h,
          ),
          children:
            "horizontal" === x
              ? (0, t.jsxs)("div", {
                  className:
                    "flex flex-col md:flex-row items-center justify-between gap-6 md:gap-8",
                  children: [
                    (0, t.jsxs)("div", {
                      className: "flex-1 space-y-3",
                      children: [
                        c &&
                          (0, t.jsxs)("div", {
                            className:
                              "inline-flex items-center gap-2 px-3 py-1.5 rounded-full bg-white/80 backdrop-blur-sm",
                            children: [
                              (0, t.jsx)("div", {
                                className: (0, n.cn)(
                                  "w-2 h-2 rounded-full",
                                  d[c.color],
                                ),
                              }),
                              (0, t.jsx)("span", {
                                className: "text-xs font-medium text-secondary",
                                children: c.text,
                              }),
                            ],
                          }),
                        (0, t.jsx)("h3", {
                          className:
                            "text-xl md:text-2xl font-bold text-secondary",
                          children: s,
                        }),
                        (0, t.jsx)("p", {
                          className:
                            "text-sm md:text-base text-secondary/70 leading-relaxed",
                          children: a,
                        }),
                      ],
                    }),
                    (0, t.jsx)("div", {
                      className: "flex-shrink-0",
                      children: (0, t.jsx)("div", {
                        className: "relative w-40 h-40 md:w-56 md:h-56",
                        children: (0, t.jsx)(l.default, {
                          src: o.src,
                          alt: o.alt,
                          width: 224,
                          height: 224,
                          className:
                            "object-contain w-full h-full transition-transform duration-500 group-hover:scale-110",
                        }),
                      }),
                    }),
                  ],
                })
              : (0, t.jsxs)("div", {
                  className: (0, n.cn)("space-y-4", g && "space-y-6"),
                  children: [
                    c &&
                      (0, t.jsxs)("div", {
                        className:
                          "inline-flex items-center gap-2 px-3 py-1.5 rounded-full bg-white/80 backdrop-blur-sm",
                        children: [
                          (0, t.jsx)("div", {
                            className: (0, n.cn)(
                              "w-2 h-2 rounded-full",
                              d[c.color],
                            ),
                          }),
                          (0, t.jsx)("span", {
                            className: "text-xs font-medium text-secondary",
                            children: c.text,
                          }),
                        ],
                      }),
                    (0, t.jsx)("h3", {
                      className: (0, n.cn)(
                        "font-bold text-secondary",
                        g ? "text-2xl md:text-3xl" : "text-xl md:text-2xl",
                      ),
                      children: s,
                    }),
                    (0, t.jsx)("p", {
                      className:
                        "text-sm md:text-base text-secondary/70 leading-relaxed",
                      children: a,
                    }),
                    (0, t.jsx)("div", {
                      className: (0, n.cn)(
                        "flex justify-center pt-2",
                        g && "pt-4",
                      ),
                      children: (0, t.jsx)("div", {
                        className: (0, n.cn)(
                          "relative",
                          g
                            ? "w-48 h-48 md:w-64 md:h-64"
                            : "w-32 h-32 md:w-40 md:h-40",
                        ),
                        children: (0, t.jsx)(l.default, {
                          src: o.src,
                          alt: o.alt,
                          width: g ? 256 : 160,
                          height: g ? 256 : 160,
                          className:
                            "object-contain w-full h-full transition-transform duration-500 group-hover:scale-110",
                        }),
                      }),
                    }),
                  ],
                }),
        });
      }
    },
    28073: (e, s, a) => {
      a.d(s, { x: () => l });
      var t = a(70207);
      a(87223);
      var r = a(82110);
      function l(e) {
        let { children: s, className: a, cols: l = 3, gap: n = "md" } = e;
        return (0, t.jsx)("div", {
          className: (0, r.cn)(
            "grid",
            (() => {
              if ("number" == typeof l)
                return {
                  1: "grid-cols-1",
                  2: "grid-cols-1 md:grid-cols-2",
                  3: "grid-cols-1 md:grid-cols-2 lg:grid-cols-3",
                  4: "grid-cols-1 md:grid-cols-2 lg:grid-cols-4",
                }[l];
              {
                let e = [];
                return (
                  l.default && e.push("grid-cols-".concat(l.default)),
                  l.sm && e.push("sm:grid-cols-".concat(l.sm)),
                  l.md && e.push("md:grid-cols-".concat(l.md)),
                  l.lg && e.push("lg:grid-cols-".concat(l.lg)),
                  e.join(" ")
                );
              }
            })(),
            { sm: "gap-4", md: "gap-6", lg: "gap-8" }[n],
            a,
          ),
          children: s,
        });
      }
    },
    28670: (e, s, a) => {
      a.d(s, { BK: () => d, eu: () => i, q5: () => o });
      var t = a(70207),
        r = a(87223),
        l = a(73474),
        n = a(82110);
      let i = r.forwardRef((e, s) => {
        let { className: a, ...r } = e;
        return (0, t.jsx)(l.bL, {
          ref: s,
          className: (0, n.cn)(
            "relative flex h-10 w-10 shrink-0 overflow-hidden rounded-full",
            a,
          ),
          ...r,
        });
      });
      i.displayName = l.bL.displayName;
      let d = r.forwardRef((e, s) => {
        let { className: a, ...r } = e;
        return (0, t.jsx)(l._V, {
          ref: s,
          className: (0, n.cn)("aspect-square h-full w-full", a),
          ...r,
        });
      });
      d.displayName = l._V.displayName;
      let o = r.forwardRef((e, s) => {
        let { className: a, ...r } = e;
        return (0, t.jsx)(l.H4, {
          ref: s,
          className: (0, n.cn)(
            "flex h-full w-full items-center justify-center rounded-full bg-beige font-semibold text-foreground",
            a,
          ),
          ...r,
        });
      });
      o.displayName = l.H4.displayName;
    },
    29377: (e, s, a) => {
      a.d(s, { C: () => o });
      var t = a(70207),
        r = a(68588),
        l = a.n(r),
        n = a(45748),
        i = a(50018),
        d = a(78809);
      function o(e) {
        let { leftItems: s, rightItems: a } = e,
          r = [...s, ...s, ...s],
          o = [...a, ...a, ...a];
        return (0, t.jsx)("div", {
          className: "relative w-full py-8",
          children: (0, t.jsxs)("div", {
            className: "flex items-center justify-center gap-0",
            children: [
              (0, t.jsx)("section", {
                className: "flex items-center overflow-hidden",
                style: {
                  width: "100%",
                  maxWidth: "100%",
                  maskImage:
                    "linear-gradient(to right, rgba(0, 0, 0, 0) 0%, rgb(0, 0, 0) 12.5%, rgb(0, 0, 0) 87.5%, rgba(0, 0, 0, 0) 100%)",
                },
                children: (0, t.jsx)(n.P.ul, {
                  className: "flex items-center gap-3 list-none m-0 p-0",
                  animate: { x: ["-33.333%", "0%"] },
                  transition: { duration: 20, repeat: 1 / 0, ease: "linear" },
                  style: {
                    position: "relative",
                    flexDirection: "row",
                    willChange: "transform",
                  },
                  children: r.map((e, s) =>
                    (0, t.jsx)(
                      "li",
                      {
                        className: "flex-shrink-0",
                        children: (0, t.jsxs)("div", {
                          className:
                            "flex items-center gap-3 whitespace-nowrap px-5 py-2.5 rounded-full border border-dashed border-white/20 bg-transparent",
                          children: [
                            (0, t.jsx)("div", {
                              className: "relative w-5 h-5",
                              children: (0, t.jsx)("div", {
                                className:
                                  "absolute inset-0 rounded-full border-2 border-white/30",
                              }),
                            }),
                            (0, t.jsx)("span", {
                              className:
                                "text-[10px] font-medium text-white/40",
                              children: e.text,
                            }),
                          ],
                        }),
                      },
                      "left-".concat(s),
                    ),
                  ),
                }),
              }),
              (0, t.jsxs)("div", {
                style: { marginTop: "5px" },
                className: "jsx-35a5491e342e1f8a relative z-10 flex-shrink-0",
                children: [
                  (0, t.jsx)(l(), {
                    id: "35a5491e342e1f8a",
                    children:
                      "@-webkit-keyframes subtle-pulse{0%,100%{-webkit-box-shadow:0 0 20px rgba(93,93,233,.3);box-shadow:0 0 20px rgba(93,93,233,.3)}50%{-webkit-box-shadow:0 0 40px rgba(93,93,233,.5);box-shadow:0 0 40px rgba(93,93,233,.5)}}@-moz-keyframes subtle-pulse{0%,100%{-moz-box-shadow:0 0 20px rgba(93,93,233,.3);box-shadow:0 0 20px rgba(93,93,233,.3)}50%{-moz-box-shadow:0 0 40px rgba(93,93,233,.5);box-shadow:0 0 40px rgba(93,93,233,.5)}}@-o-keyframes subtle-pulse{0%,100%{box-shadow:0 0 20px rgba(93,93,233,.3)}50%{box-shadow:0 0 40px rgba(93,93,233,.5)}}@keyframes subtle-pulse{0%,100%{-webkit-box-shadow:0 0 20px rgba(93,93,233,.3);-moz-box-shadow:0 0 20px rgba(93,93,233,.3);box-shadow:0 0 20px rgba(93,93,233,.3)}50%{-webkit-box-shadow:0 0 40px rgba(93,93,233,.5);-moz-box-shadow:0 0 40px rgba(93,93,233,.5);box-shadow:0 0 40px rgba(93,93,233,.5)}}",
                  }),
                  (0, t.jsx)("div", {
                    style: {
                      background:
                        "linear-gradient(135deg, #5D5DE9, #F5A83A, #F6B854)",
                      animation: "subtle-pulse 2s ease-in-out infinite",
                    },
                    className:
                      "jsx-35a5491e342e1f8a relative p-[2px] rounded-[12px]",
                    children: (0, t.jsxs)("div", {
                      className:
                        "jsx-35a5491e342e1f8a relative px-8 py-4 bg-white rounded-[10px] flex items-center justify-center gap-1",
                      children: [
                        (0, t.jsx)(i.default, {
                          src: d.KN.ICON,
                          alt: "Azubi Logo",
                          width: 40,
                          height: 40,
                          className: "h-8 w-8 object-contain flex-shrink-0",
                          priority: !0,
                        }),
                        (0, t.jsx)("span", {
                          style: { letterSpacing: "-0.02em" },
                          className:
                            "jsx-35a5491e342e1f8a font-bold text-secondary text-base",
                          children: "Azubi",
                        }),
                      ],
                    }),
                  }),
                ],
              }),
              (0, t.jsx)("section", {
                className: "flex items-center overflow-hidden",
                style: {
                  width: "100%",
                  maxWidth: "100%",
                  maskImage:
                    "linear-gradient(to right, rgba(0, 0, 0, 0) 0%, rgb(0, 0, 0) 12.5%, rgb(0, 0, 0) 87.5%, rgba(0, 0, 0, 0) 100%)",
                },
                children: (0, t.jsx)(n.P.ul, {
                  className: "flex items-center gap-3 list-none m-0 p-0",
                  animate: { x: ["-33.333%", "0%"] },
                  transition: { duration: 20, repeat: 1 / 0, ease: "linear" },
                  style: {
                    position: "relative",
                    flexDirection: "row",
                    willChange: "transform",
                  },
                  children: o.map((e, s) =>
                    (0, t.jsx)(
                      "li",
                      {
                        className: "flex-shrink-0",
                        children: (0, t.jsxs)("div", {
                          className:
                            "flex items-center gap-3 whitespace-nowrap px-5 py-2.5 rounded-full border border-solid border-white/20 bg-transparent",
                          children: [
                            (0, t.jsx)("div", {
                              className: "relative w-5 h-5",
                              children: e.qualified
                                ? (0, t.jsx)("div", {
                                    className:
                                      "absolute inset-0 rounded-full bg-white flex items-center justify-center",
                                    children: (0, t.jsx)("svg", {
                                      width: "12",
                                      height: "10",
                                      viewBox: "0 0 12 10",
                                      fill: "none",
                                      xmlns: "http://www.w3.org/2000/svg",
                                      children: (0, t.jsx)("path", {
                                        d: "M1 5L4.5 8.5L11 1.5",
                                        stroke: "black",
                                        strokeWidth: "2",
                                        strokeLinecap: "round",
                                        strokeLinejoin: "round",
                                      }),
                                    }),
                                  })
                                : (0, t.jsx)("div", {
                                    className:
                                      "absolute inset-0 rounded-full border-2 border-white/30 flex items-center justify-center",
                                    children: (0, t.jsx)("svg", {
                                      width: "10",
                                      height: "10",
                                      viewBox: "0 0 10 10",
                                      fill: "none",
                                      xmlns: "http://www.w3.org/2000/svg",
                                      children: (0, t.jsx)("path", {
                                        d: "M2 2L8 8M8 2L2 8",
                                        stroke: "white",
                                        strokeWidth: "2",
                                        strokeLinecap: "round",
                                      }),
                                    }),
                                  }),
                            }),
                            (0, t.jsx)("span", {
                              className:
                                "text-[10px] font-medium text-white/90",
                              children: e.text,
                            }),
                          ],
                        }),
                      },
                      "right-".concat(s),
                    ),
                  ),
                }),
              }),
            ],
          }),
        });
      }
    },
    30612: (e, s, a) => {
      a.d(s, { F: () => i });
      var t = a(70207),
        r = a(87223),
        l = a(40289),
        n = a(82110);
      let i = r.forwardRef((e, s) => {
        let { className: a, children: r, ...i } = e;
        return (0, t.jsxs)(l.bL, {
          ref: s,
          className: (0, n.cn)("relative overflow-hidden", a),
          ...i,
          children: [
            (0, t.jsx)(l.LM, {
              className: "h-full w-full rounded-[inherit]",
              children: r,
            }),
            (0, t.jsx)(d, {}),
            (0, t.jsx)(l.OK, {}),
          ],
        });
      });
      i.displayName = l.bL.displayName;
      let d = r.forwardRef((e, s) => {
        let { className: a, orientation: r = "vertical", ...i } = e;
        return (0, t.jsx)(l.VM, {
          ref: s,
          orientation: r,
          className: (0, n.cn)(
            "flex touch-none select-none transition-colors",
            "vertical" === r &&
              "h-full w-2.5 border-l border-l-transparent p-[1px]",
            "horizontal" === r && "h-2.5 border-t border-t-transparent p-[1px]",
            a,
          ),
          ...i,
          children: (0, t.jsx)(l.lr, {
            className:
              "relative flex-1 rounded-full bg-beige hover:bg-beige/80 transition-colors duration-200",
          }),
        });
      });
      d.displayName = l.VM.displayName;
    },
    35121: (e, s, a) => {
      a.d(s, { f: () => l });
      var t = a(70207);
      a(87223);
      var r = a(82110);
      function l(e) {
        let { children: s, size: a = "base", className: l } = e;
        return (0, t.jsx)("p", {
          className: (0, r.cn)(
            {
              sm: "text-sm leading-relaxed",
              base: "text-base leading-relaxed",
              lg: "text-lg leading-relaxed",
            }[a],
            l,
          ),
          children: s,
        });
      }
    },
    37803: (e, s, a) => {
      a.d(s, { $: () => d });
      var t = a(70207),
        r = a(87223),
        l = a(82426),
        n = a(82110),
        i = a(55036);
      function d(e) {
        let {
            siteKey: s,
            onVerify: a,
            theme: d = "auto",
            size: o = "normal",
            refreshExpired: c = "auto",
            className: m,
            onError: x,
            disabled: u = !1,
            enabled: h = !0,
            ...f
          } = e,
          p = h && "false" !== i.env.NEXT_PUBLIC_ENABLE_TURNSTILE;
        return (r.useEffect(() => {
          if (!p && a) {
            let e = setTimeout(() => {
              a("dev_environment_auto_verified");
            }, 100);
            return () => clearTimeout(e);
          }
        }, [p, a]),
        p)
          ? (0, t.jsx)("div", {
              className: (0, n.cn)("w-full flex justify-center my-4", m),
              ...f,
              children: (0, t.jsx)(l.Xs, {
                siteKey: s,
                onSuccess: a,
                options: {
                  theme: d,
                  size: o,
                  refreshExpired: c,
                  tabIndex: u ? -1 : 0,
                },
                onError: x,
              }),
            })
          : null;
      }
    },
    39441: (e, s, a) => {
      a.d(s, { $: () => o, r: () => d });
      var t = a(70207),
        r = a(87223),
        l = a(42801),
        n = a(8128),
        i = a(82110);
      let d = (0, n.F)(
          "inline-flex items-center justify-center gap-2 whitespace-nowrap rounded-full text-sm font-semibold transition-all duration-200 focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 [&_svg]:pointer-events-none [&_svg]:size-4 [&_svg]:shrink-0",
          {
            variants: {
              variant: {
                default:
                  "bg-primary text-primary-foreground shadow-md hover:bg-orange-hover hover:shadow-lg hover:-translate-y-0.5 active:translate-y-0",
                destructive:
                  "bg-destructive text-destructive-foreground shadow-sm hover:bg-destructive/90 hover:-translate-y-0.5 active:translate-y-0",
                outline:
                  "border-2 border-primary bg-transparent text-primary shadow-sm hover:bg-[#F7F8FA] hover:text-[#2C3340] hover:border-[#2C3340]/30 hover:-translate-y-0.5 active:translate-y-0",
                secondary:
                  "bg-secondary text-secondary-foreground shadow-sm hover:bg-secondary/90 hover:-translate-y-0.5 active:translate-y-0",
                ghost: "hover:bg-green-light/5 hover:text-foreground",
                link: "text-primary underline-offset-4 hover:underline",
              },
              size: {
                default: "h-12 px-8 py-3",
                sm: "h-10 px-6 text-sm",
                lg: "h-14 px-10 text-base",
                icon: "h-12 w-12",
              },
            },
            defaultVariants: { variant: "default", size: "default" },
          },
        ),
        o = r.forwardRef((e, s) => {
          let { className: a, variant: r, size: n, asChild: o = !1, ...c } = e,
            m = o ? l.DX : "button";
          return (0, t.jsx)(m, {
            className: (0, i.cn)(d({ variant: r, size: n, className: a })),
            ref: s,
            ...c,
          });
        });
      o.displayName = "Button";
    },
    39884: (e, s, a) => {
      a.d(s, { K: () => m });
      var t = a(70207);
      a(87223);
      var r = a(48242),
        l = a(39441),
        n = a(9325),
        i = a(61280),
        d = a(39175),
        o = a(40300),
        c = a(82110);
      function m(e) {
        let {
          onView: s,
          onDownload: a,
          onDelete: m,
          disabled: x = !1,
          className: u,
        } = e;
        return (0, t.jsxs)(r.rI, {
          children: [
            (0, t.jsx)(r.ty, {
              asChild: !0,
              children: (0, t.jsx)(l.$, {
                variant: "ghost",
                size: "icon",
                disabled: x,
                className: (0, c.cn)(
                  "h-10 w-10 min-h-[44px] min-w-[44px] rounded-full",
                  "hover:bg-cream data-[state=open]:bg-cream",
                  "focus-visible:ring-2 focus-visible:ring-primary focus-visible:ring-offset-2",
                  u,
                ),
                "aria-label": "Document actions",
                children: (0, t.jsx)(n.A, {
                  className: "h-5 w-5 text-muted-foreground",
                }),
              }),
            }),
            (0, t.jsxs)(r.SQ, {
              align: "end",
              className: "w-48 bg-background border-border",
              children: [
                s &&
                  (0, t.jsxs)(r._2, {
                    onClick: s,
                    className: (0, c.cn)(
                      "cursor-pointer gap-2 py-2.5 px-3",
                      "focus:bg-cream focus:text-secondary",
                      "text-secondary",
                    ),
                    children: [
                      (0, t.jsx)(i.A, { className: "h-4 w-4" }),
                      (0, t.jsx)("span", { children: "View Document" }),
                    ],
                  }),
                a &&
                  (0, t.jsxs)(r._2, {
                    onClick: a,
                    className: (0, c.cn)(
                      "cursor-pointer gap-2 py-2.5 px-3",
                      "focus:bg-cream focus:text-secondary",
                      "text-secondary",
                    ),
                    children: [
                      (0, t.jsx)(d.A, { className: "h-4 w-4" }),
                      (0, t.jsx)("span", { children: "Download" }),
                    ],
                  }),
                m && (s || a) && (0, t.jsx)(r.mB, {}),
                m &&
                  (0, t.jsxs)(r._2, {
                    onClick: m,
                    className: (0, c.cn)(
                      "cursor-pointer gap-2 py-2.5 px-3",
                      "focus:bg-destructive/10 focus:text-destructive",
                      "text-destructive",
                    ),
                    children: [
                      (0, t.jsx)(o.A, { className: "h-4 w-4" }),
                      (0, t.jsx)("span", { children: "Delete Document" }),
                    ],
                  }),
              ],
            }),
          ],
        });
      }
    },
    40167: (e, s, a) => {
      a.d(s, { p: () => n });
      var t = a(70207),
        r = a(87223),
        l = a(82110);
      let n = r.forwardRef((e, s) => {
        let { className: a, type: r, ...n } = e;
        return (0, t.jsx)("input", {
          type: r,
          className: (0, l.cn)(
            "flex h-10 w-full rounded-md border border-input bg-background px-3 py-2 text-sm ring-offset-background file:border-0 file:bg-transparent file:text-sm file:font-medium placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring disabled:cursor-not-allowed disabled:opacity-50",
            a,
          ),
          ref: s,
          ...n,
        });
      });
      n.displayName = "Input";
    },
    41082: (e, s, a) => {
      a.d(s, { S: () => d });
      var t = a(70207),
        r = a(87223),
        l = a(41215),
        n = a(51105),
        i = a(82110);
      let d = r.forwardRef((e, s) => {
        let { className: a, ...r } = e;
        return (0, t.jsx)(l.bL, {
          ref: s,
          className: (0, i.cn)(
            "peer h-5 w-5 shrink-0 rounded border-2 border-primary ring-offset-background transition-all duration-200 focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-primary focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50 data-[state=checked]:bg-primary data-[state=checked]:text-primary-foreground hover:border-primary hover:bg-orange-light/20",
            a,
          ),
          ...r,
          children: (0, t.jsx)(l.C1, {
            className: (0, i.cn)(
              "flex items-center justify-center text-current",
            ),
            children: (0, t.jsx)(n.A, { className: "h-4 w-4" }),
          }),
        });
      });
      d.displayName = l.bL.displayName;
    },
    42978: (e, s, a) => {
      a.d(s, { y: () => m });
      var t = a(70207),
        r = a(87223),
        l = a(61889),
        n = a(39441),
        i = a(27239),
        d = a(39175),
        o = a(31159),
        c = a(95992);
      function m(e) {
        let {
            open: s,
            onOpenChange: a,
            documentUrl: m,
            documentName: x = "Document",
            mimeType: u = "application/pdf",
            onDownload: h,
          } = e,
          [f, p] = r.useState(!0),
          [b, g] = r.useState(!1);
        r.useEffect(() => {
          s && m && (p(!0), g(!1));
        }, [s, m]);
        let j = () => {
            (p(!1), g(!1));
          },
          v = () => {
            (p(!1), g(!0));
          },
          w = "application/pdf" === u || x.toLowerCase().endsWith(".pdf"),
          N =
            (null == u ? void 0 : u.startsWith("image/")) ||
            /\.(jpg|jpeg|png|gif|webp)$/i.test(x);
        return (0, t.jsx)(l.lG, {
          open: s,
          onOpenChange: a,
          children: (0, t.jsxs)(l.Cf, {
            className:
              "sm:max-w-4xl max-w-full h-[90vh] sm:h-[85vh] p-0 gap-0 bg-background",
            children: [
              (0, t.jsx)(l.c7, {
                className:
                  "px-4 sm:px-6 py-4 border-b bg-cream sticky top-0 z-10",
                children: (0, t.jsxs)("div", {
                  className: "flex items-center justify-between gap-4",
                  children: [
                    (0, t.jsxs)("div", {
                      className: "flex items-center gap-3 flex-1 min-w-0",
                      children: [
                        (0, t.jsx)("div", {
                          className:
                            "flex items-center justify-center w-10 h-10 bg-primary rounded-full flex-shrink-0",
                          children: (0, t.jsx)(i.A, {
                            className: "h-5 w-5 text-white",
                          }),
                        }),
                        (0, t.jsx)(l.L3, {
                          className:
                            "text-base sm:text-lg font-semibold text-secondary truncate",
                          children: x,
                        }),
                      ],
                    }),
                    (0, t.jsx)("div", {
                      className: "flex items-center gap-2 flex-shrink-0",
                      children:
                        h &&
                        m &&
                        (0, t.jsxs)(n.$, {
                          onClick: h,
                          size: "sm",
                          variant: "outline",
                          className: "rounded-full h-10 min-h-[44px] px-4",
                          children: [
                            (0, t.jsx)(d.A, { className: "h-4 w-4 sm:mr-2" }),
                            (0, t.jsx)("span", {
                              className: "hidden sm:inline",
                              children: "Download",
                            }),
                          ],
                        }),
                    }),
                  ],
                }),
              }),
              (0, t.jsxs)("div", {
                className: "flex-1 overflow-hidden relative bg-muted",
                children: [
                  f &&
                    (0, t.jsx)("div", {
                      className:
                        "absolute inset-0 flex items-center justify-center bg-background z-10",
                      children: (0, t.jsxs)("div", {
                        className: "flex flex-col items-center gap-3",
                        children: [
                          (0, t.jsx)(o.A, {
                            className: "h-8 w-8 text-primary animate-spin",
                          }),
                          (0, t.jsx)("p", {
                            className: "text-sm text-muted-foreground",
                            children: "Loading preview...",
                          }),
                        ],
                      }),
                    }),
                  b &&
                    (0, t.jsx)("div", {
                      className:
                        "absolute inset-0 flex items-center justify-center bg-background z-10",
                      children: (0, t.jsxs)("div", {
                        className:
                          "flex flex-col items-center gap-3 text-center px-4",
                        children: [
                          (0, t.jsx)("div", {
                            className:
                              "flex items-center justify-center w-16 h-16 bg-destructive/10 rounded-full",
                            children: (0, t.jsx)(c.A, {
                              className: "h-8 w-8 text-destructive",
                            }),
                          }),
                          (0, t.jsxs)("div", {
                            children: [
                              (0, t.jsx)("p", {
                                className: "text-sm font-medium text-secondary",
                                children: "Failed to load preview",
                              }),
                              (0, t.jsx)("p", {
                                className: "text-xs text-muted-foreground mt-1",
                                children:
                                  "The document could not be displayed. Try downloading it instead.",
                              }),
                            ],
                          }),
                          h &&
                            (0, t.jsxs)(n.$, {
                              onClick: h,
                              size: "sm",
                              className:
                                "rounded-full h-10 min-h-[44px] px-6 mt-2",
                              children: [
                                (0, t.jsx)(d.A, { className: "h-4 w-4 mr-2" }),
                                "Download Document",
                              ],
                            }),
                        ],
                      }),
                    }),
                  m &&
                    !b &&
                    (0, t.jsxs)(t.Fragment, {
                      children: [
                        w &&
                          (0, t.jsx)("iframe", {
                            src: m,
                            className: "w-full h-full border-0",
                            title: x,
                            onLoad: j,
                            onError: v,
                          }),
                        N &&
                          !w &&
                          (0, t.jsx)("div", {
                            className:
                              "w-full h-full flex items-center justify-center p-4 overflow-auto",
                            children: (0, t.jsx)("img", {
                              src: m,
                              alt: x,
                              className:
                                "max-w-full max-h-full object-contain rounded-xl",
                              onLoad: j,
                              onError: v,
                            }),
                          }),
                        !w &&
                          !N &&
                          (0, t.jsx)("div", {
                            className:
                              "absolute inset-0 flex items-center justify-center bg-background",
                            children: (0, t.jsxs)("div", {
                              className:
                                "flex flex-col items-center gap-3 text-center px-4",
                              children: [
                                (0, t.jsx)("div", {
                                  className:
                                    "flex items-center justify-center w-16 h-16 bg-muted rounded-full",
                                  children: (0, t.jsx)(i.A, {
                                    className: "h-8 w-8 text-muted-foreground",
                                  }),
                                }),
                                (0, t.jsxs)("div", {
                                  children: [
                                    (0, t.jsx)("p", {
                                      className:
                                        "text-sm font-medium text-secondary",
                                      children: "Preview not available",
                                    }),
                                    (0, t.jsx)("p", {
                                      className:
                                        "text-xs text-muted-foreground mt-1",
                                      children:
                                        "This file type cannot be previewed. Please download to view.",
                                    }),
                                  ],
                                }),
                                h &&
                                  (0, t.jsxs)(n.$, {
                                    onClick: h,
                                    size: "sm",
                                    className:
                                      "rounded-full h-10 min-h-[44px] px-6 mt-2",
                                    children: [
                                      (0, t.jsx)(d.A, {
                                        className: "h-4 w-4 mr-2",
                                      }),
                                      "Download Document",
                                    ],
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
        });
      }
    },
    43866: (e, s, a) => {
      a.d(s, {
        CG: () => c,
        Fm: () => f,
        Qs: () => b,
        cj: () => o,
        h: () => h,
        qp: () => p,
      });
      var t = a(70207),
        r = a(87223),
        l = a(52090),
        n = a(8128),
        i = a(39945),
        d = a(82110);
      let o = l.bL,
        c = l.l9;
      l.bm;
      let m = l.ZL,
        x = r.forwardRef((e, s) => {
          let { className: a, ...r } = e;
          return (0, t.jsx)(l.hJ, {
            className: (0, d.cn)(
              "fixed inset-0 z-50 bg-black/80 data-[state=open]:animate-in data-[state=closed]:animate-out data-[state=closed]:fade-out-0 data-[state=open]:fade-in-0",
              a,
            ),
            ...r,
            ref: s,
          });
        });
      x.displayName = l.hJ.displayName;
      let u = (0, n.F)(
          "fixed z-50 gap-4 bg-background p-6 shadow-lg transition ease-in-out data-[state=closed]:duration-300 data-[state=open]:duration-500 data-[state=open]:animate-in data-[state=closed]:animate-out",
          {
            variants: {
              side: {
                top: "inset-x-0 top-0 border-b data-[state=closed]:slide-out-to-top data-[state=open]:slide-in-from-top",
                bottom:
                  "inset-x-0 bottom-0 border-t data-[state=closed]:slide-out-to-bottom data-[state=open]:slide-in-from-bottom",
                left: "inset-y-0 left-0 h-full w-3/4 border-r data-[state=closed]:slide-out-to-left data-[state=open]:slide-in-from-left sm:max-w-sm",
                right:
                  "inset-y-0 right-0 h-full w-3/4 border-l data-[state=closed]:slide-out-to-right data-[state=open]:slide-in-from-right sm:max-w-sm",
              },
            },
            defaultVariants: { side: "right" },
          },
        ),
        h = r.forwardRef((e, s) => {
          let { side: a = "right", className: r, children: n, ...o } = e;
          return (0, t.jsxs)(m, {
            children: [
              (0, t.jsx)(x, {}),
              (0, t.jsxs)(l.UC, {
                ref: s,
                className: (0, d.cn)(u({ side: a }), r),
                ...o,
                children: [
                  (0, t.jsxs)(l.bm, {
                    className:
                      "absolute right-4 top-4 rounded-sm opacity-70 ring-offset-background transition-opacity hover:opacity-100 focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 disabled:pointer-events-none data-[state=open]:bg-secondary",
                    children: [
                      (0, t.jsx)(i.A, { className: "h-4 w-4" }),
                      (0, t.jsx)("span", {
                        className: "sr-only",
                        children: "Close",
                      }),
                    ],
                  }),
                  n,
                ],
              }),
            ],
          });
        });
      h.displayName = l.UC.displayName;
      let f = (e) => {
        let { className: s, ...a } = e;
        return (0, t.jsx)("div", {
          className: (0, d.cn)(
            "flex flex-col space-y-2 text-center sm:text-left",
            s,
          ),
          ...a,
        });
      };
      f.displayName = "SheetHeader";
      let p = r.forwardRef((e, s) => {
        let { className: a, ...r } = e;
        return (0, t.jsx)(l.hE, {
          ref: s,
          className: (0, d.cn)("text-lg font-semibold text-foreground", a),
          ...r,
        });
      });
      p.displayName = l.hE.displayName;
      let b = r.forwardRef((e, s) => {
        let { className: a, ...r } = e;
        return (0, t.jsx)(l.VY, {
          ref: s,
          className: (0, d.cn)("text-sm text-muted-foreground", a),
          ...r,
        });
      });
      b.displayName = l.VY.displayName;
    },
    44208: (e, s, a) => {
      a.d(s, {
        G7: () => o,
        L$: () => x,
        h_: () => u,
        oI: () => c,
        uB: () => d,
        xL: () => m,
      });
      var t = a(70207),
        r = a(87223),
        l = a(80141),
        n = a(43431),
        i = a(82110);
      a(61889);
      let d = r.forwardRef((e, s) => {
        let { className: a, ...r } = e;
        return (0, t.jsx)(l.uB, {
          ref: s,
          className: (0, i.cn)(
            "flex h-full w-full flex-col overflow-hidden rounded-xl bg-white text-foreground",
            a,
          ),
          ...r,
        });
      });
      d.displayName = l.uB.displayName;
      let o = r.forwardRef((e, s) => {
        let { className: a, ...r } = e;
        return (0, t.jsxs)("div", {
          className: "flex items-center border-b border-beige px-4",
          "cmdk-input-wrapper": "",
          children: [
            (0, t.jsx)(n.A, {
              className: "mr-3 h-5 w-5 shrink-0 text-muted-foreground",
            }),
            (0, t.jsx)(l.uB.Input, {
              ref: s,
              className: (0, i.cn)(
                "flex h-12 w-full rounded-md bg-transparent py-3 text-sm font-medium outline-none placeholder:text-muted-foreground disabled:cursor-not-allowed disabled:opacity-50",
                a,
              ),
              ...r,
            }),
          ],
        });
      });
      o.displayName = l.uB.Input.displayName;
      let c = r.forwardRef((e, s) => {
        let { className: a, ...r } = e;
        return (0, t.jsx)(l.uB.List, {
          ref: s,
          className: (0, i.cn)(
            "max-h-[300px] overflow-y-auto overflow-x-hidden",
            a,
          ),
          ...r,
        });
      });
      c.displayName = l.uB.List.displayName;
      let m = r.forwardRef((e, s) =>
        (0, t.jsx)(l.uB.Empty, {
          ref: s,
          className: "py-6 text-center text-sm",
          ...e,
        }),
      );
      m.displayName = l.uB.Empty.displayName;
      let x = r.forwardRef((e, s) => {
        let { className: a, ...r } = e;
        return (0, t.jsx)(l.uB.Group, {
          ref: s,
          className: (0, i.cn)(
            "overflow-hidden p-2 text-foreground [&_[cmdk-group-heading]]:px-3 [&_[cmdk-group-heading]]:py-2 [&_[cmdk-group-heading]]:text-xs [&_[cmdk-group-heading]]:font-semibold [&_[cmdk-group-heading]]:text-muted-foreground",
            a,
          ),
          ...r,
        });
      });
      ((x.displayName = l.uB.Group.displayName),
        (r.forwardRef((e, s) => {
          let { className: a, ...r } = e;
          return (0, t.jsx)(l.uB.Separator, {
            ref: s,
            className: (0, i.cn)("-mx-1 h-px bg-beige", a),
            ...r,
          });
        }).displayName = l.uB.Separator.displayName));
      let u = r.forwardRef((e, s) => {
        let { className: a, ...r } = e;
        return (0, t.jsx)(l.uB.Item, {
          ref: s,
          className: (0, i.cn)(
            "relative flex cursor-default gap-2 select-none items-center rounded-lg px-3 py-2.5 text-sm font-medium outline-none transition-colors duration-150 data-[disabled=true]:pointer-events-none data-[selected=true]:bg-orange-light data-[selected=true]:text-primary data-[disabled=true]:opacity-50 hover:bg-beige [&_svg]:pointer-events-none [&_svg]:size-4 [&_svg]:shrink-0",
            a,
          ),
          ...r,
        });
      });
      u.displayName = l.uB.Item.displayName;
    },
    44649: (e, s, a) => {
      a.d(s, {
        Accordion: () => d,
        AccordionContent: () => m,
        AccordionItem: () => o,
        AccordionTrigger: () => c,
      });
      var t = a(70207),
        r = a(87223),
        l = a(29973),
        n = a(51613),
        i = a(82110);
      let d = l.bL,
        o = r.forwardRef((e, s) => {
          let { className: a, ...r } = e;
          return (0, t.jsx)(l.q7, {
            ref: s,
            className: (0, i.cn)("border-b border-beige", a),
            ...r,
          });
        });
      o.displayName = "AccordionItem";
      let c = r.forwardRef((e, s) => {
        let { className: a, children: r, ...d } = e;
        return (0, t.jsx)(l.Y9, {
          className: "flex",
          children: (0, t.jsxs)(l.l9, {
            ref: s,
            className: (0, i.cn)(
              "flex flex-1 items-center justify-between py-4 text-sm font-semibold text-foreground transition-all duration-200 hover:text-primary [&[data-state=open]>svg]:rotate-180 [&[data-state=open]]:text-primary",
              a,
            ),
            ...d,
            children: [
              r,
              (0, t.jsx)(n.A, {
                className:
                  "h-5 w-5 shrink-0 text-muted-foreground transition-transform duration-200",
              }),
            ],
          }),
        });
      });
      c.displayName = l.l9.displayName;
      let m = r.forwardRef((e, s) => {
        let { className: a, children: r, ...n } = e;
        return (0, t.jsx)(l.UC, {
          ref: s,
          className: (0, i.cn)(
            "overflow-hidden text-sm text-muted-foreground transition-all data-[state=closed]:animate-accordion-up data-[state=open]:animate-accordion-down",
            a,
          ),
          ...n,
          children: (0, t.jsx)("div", { className: "pb-4 pt-0", children: r }),
        });
      });
      m.displayName = l.UC.displayName;
    },
    48242: (e, s, a) => {
      a.d(s, {
        SQ: () => x,
        _2: () => u,
        lp: () => h,
        mB: () => f,
        rI: () => c,
        ty: () => m,
      });
      var t = a(70207),
        r = a(87223),
        l = a(77241),
        n = a(50341),
        i = a(51105),
        d = a(61695),
        o = a(82110);
      let c = l.bL,
        m = l.l9;
      (l.YJ,
        l.ZL,
        l.Pb,
        l.z6,
        (r.forwardRef((e, s) => {
          let { className: a, inset: r, children: i, ...d } = e;
          return (0, t.jsxs)(l.ZP, {
            ref: s,
            className: (0, o.cn)(
              "flex cursor-default select-none items-center gap-2 rounded-lg px-3 py-2 text-sm font-medium outline-none transition-colors duration-150 focus:bg-orange-light data-[state=open]:bg-orange-light hover:bg-beige [&_svg]:pointer-events-none [&_svg]:size-4 [&_svg]:shrink-0",
              r && "pl-10",
              a,
            ),
            ...d,
            children: [
              i,
              (0, t.jsx)(n.A, { className: "ml-auto text-muted-foreground" }),
            ],
          });
        }).displayName = l.ZP.displayName),
        (r.forwardRef((e, s) => {
          let { className: a, ...r } = e;
          return (0, t.jsx)(l.G5, {
            ref: s,
            className: (0, o.cn)(
              "z-50 min-w-[8rem] overflow-hidden rounded-xl border border-border bg-white p-2 text-foreground shadow-lg data-[state=open]:animate-in data-[state=closed]:animate-out data-[state=closed]:fade-out-0 data-[state=open]:fade-in-0 data-[state=closed]:zoom-out-95 data-[state=open]:zoom-in-95 data-[side=bottom]:slide-in-from-top-2 data-[side=left]:slide-in-from-right-2 data-[side=right]:slide-in-from-left-2 data-[side=top]:slide-in-from-bottom-2 origin-[--radix-dropdown-menu-content-transform-origin]",
              a,
            ),
            ...r,
          });
        }).displayName = l.G5.displayName));
      let x = r.forwardRef((e, s) => {
        let { className: a, sideOffset: r = 4, ...n } = e;
        return (0, t.jsx)(l.ZL, {
          children: (0, t.jsx)(l.UC, {
            ref: s,
            sideOffset: r,
            className: (0, o.cn)(
              "z-50 max-h-[var(--radix-dropdown-menu-content-available-height)] min-w-[8rem] overflow-y-auto overflow-x-hidden rounded-xl border border-border bg-white p-2 text-foreground shadow-lg",
              "data-[state=open]:animate-in data-[state=closed]:animate-out data-[state=closed]:fade-out-0 data-[state=open]:fade-in-0 data-[state=closed]:zoom-out-95 data-[state=open]:zoom-in-95 data-[side=bottom]:slide-in-from-top-2 data-[side=left]:slide-in-from-right-2 data-[side=right]:slide-in-from-left-2 data-[side=top]:slide-in-from-bottom-2 origin-[--radix-dropdown-menu-content-transform-origin]",
              a,
            ),
            ...n,
          }),
        });
      });
      x.displayName = l.UC.displayName;
      let u = r.forwardRef((e, s) => {
        let { className: a, inset: r, ...n } = e;
        return (0, t.jsx)(l.q7, {
          ref: s,
          className: (0, o.cn)(
            "relative flex cursor-default select-none items-center gap-2 rounded-lg px-3 py-2 text-sm font-medium outline-none transition-colors duration-150 focus:bg-orange-light focus:text-primary data-[disabled]:pointer-events-none data-[disabled]:opacity-50 hover:bg-beige [&>svg]:size-4 [&>svg]:shrink-0",
            r && "pl-10",
            a,
          ),
          ...n,
        });
      });
      ((u.displayName = l.q7.displayName),
        (r.forwardRef((e, s) => {
          let { className: a, children: r, checked: n, ...d } = e;
          return (0, t.jsxs)(l.H_, {
            ref: s,
            className: (0, o.cn)(
              "relative flex cursor-default select-none items-center rounded-lg py-2 pl-10 pr-3 text-sm font-medium outline-none transition-colors duration-150 focus:bg-orange-light focus:text-primary data-[disabled]:pointer-events-none data-[disabled]:opacity-50 hover:bg-beige",
              a,
            ),
            checked: n,
            ...d,
            children: [
              (0, t.jsx)("span", {
                className:
                  "absolute left-3 flex h-4 w-4 items-center justify-center",
                children: (0, t.jsx)(l.VF, {
                  children: (0, t.jsx)(i.A, {
                    className: "h-4 w-4 text-primary",
                  }),
                }),
              }),
              r,
            ],
          });
        }).displayName = l.H_.displayName),
        (r.forwardRef((e, s) => {
          let { className: a, children: r, ...n } = e;
          return (0, t.jsxs)(l.hN, {
            ref: s,
            className: (0, o.cn)(
              "relative flex cursor-default select-none items-center rounded-lg py-2 pl-10 pr-3 text-sm font-medium outline-none transition-colors duration-150 focus:bg-orange-light focus:text-primary data-[disabled]:pointer-events-none data-[disabled]:opacity-50 hover:bg-beige",
              a,
            ),
            ...n,
            children: [
              (0, t.jsx)("span", {
                className:
                  "absolute left-3 flex h-4 w-4 items-center justify-center",
                children: (0, t.jsx)(l.VF, {
                  children: (0, t.jsx)(d.A, {
                    className: "h-2.5 w-2.5 fill-primary",
                  }),
                }),
              }),
              r,
            ],
          });
        }).displayName = l.hN.displayName));
      let h = r.forwardRef((e, s) => {
        let { className: a, inset: r, ...n } = e;
        return (0, t.jsx)(l.JU, {
          ref: s,
          className: (0, o.cn)(
            "px-3 py-2 text-sm font-semibold text-muted-foreground",
            r && "pl-10",
            a,
          ),
          ...n,
        });
      });
      h.displayName = l.JU.displayName;
      let f = r.forwardRef((e, s) => {
        let { className: a, ...r } = e;
        return (0, t.jsx)(l.wv, {
          ref: s,
          className: (0, o.cn)("-mx-1 my-2 h-px bg-beige", a),
          ...r,
        });
      });
      f.displayName = l.wv.displayName;
    },
    50488: (e, s, a) => {
      a.d(s, { dj: () => x, oR: () => m });
      var t = a(87223);
      let r = 0,
        l = new Map(),
        n = (e) => {
          if (l.has(e)) return;
          let s = setTimeout(() => {
            (l.delete(e), c({ type: "REMOVE_TOAST", toastId: e }));
          }, 1e6);
          l.set(e, s);
        },
        i = (e, s) => {
          switch (s.type) {
            case "ADD_TOAST":
              return { ...e, toasts: [s.toast, ...e.toasts].slice(0, 1) };
            case "UPDATE_TOAST":
              return {
                ...e,
                toasts: e.toasts.map((e) =>
                  e.id === s.toast.id ? { ...e, ...s.toast } : e,
                ),
              };
            case "DISMISS_TOAST": {
              let { toastId: a } = s;
              return (
                a
                  ? n(a)
                  : e.toasts.forEach((e) => {
                      n(e.id);
                    }),
                {
                  ...e,
                  toasts: e.toasts.map((e) =>
                    e.id === a || void 0 === a ? { ...e, open: !1 } : e,
                  ),
                }
              );
            }
            case "REMOVE_TOAST":
              if (void 0 === s.toastId) return { ...e, toasts: [] };
              return {
                ...e,
                toasts: e.toasts.filter((e) => e.id !== s.toastId),
              };
          }
        },
        d = [],
        o = { toasts: [] };
      function c(e) {
        ((o = i(o, e)),
          d.forEach((e) => {
            e(o);
          }));
      }
      function m(e) {
        let { ...s } = e,
          a = (r = (r + 1) % Number.MAX_VALUE).toString(),
          t = () => c({ type: "DISMISS_TOAST", toastId: a });
        return (
          c({
            type: "ADD_TOAST",
            toast: {
              ...s,
              id: a,
              open: !0,
              onOpenChange: (e) => {
                e || t();
              },
            },
          }),
          {
            id: a,
            dismiss: t,
            update: (e) => c({ type: "UPDATE_TOAST", toast: { ...e, id: a } }),
          }
        );
      }
      function x() {
        let [e, s] = t.useState(o);
        return (
          t.useEffect(
            () => (
              d.push(s),
              () => {
                let e = d.indexOf(s);
                e > -1 && d.splice(e, 1);
              }
            ),
            [e],
          ),
          {
            ...e,
            toast: m,
            dismiss: (e) => c({ type: "DISMISS_TOAST", toastId: e }),
          }
        );
      }
    },
    52141: (e, s, a) => {
      a.d(s, { D: () => l });
      var t = a(70207);
      a(87223);
      var r = a(82110);
      function l(e) {
        let {
            level: s = 1,
            children: a,
            className: l,
            variant: n = "default",
            size: i = "default",
          } = e,
          d = (0, r.cn)(
            "leading-tight tracking-tight",
            {
              1: "font-bold",
              2: "font-bold",
              3: "font-semibold",
              4: "font-semibold",
              5: "font-semibold",
              6: "font-semibold",
            }[s],
            ("compact" === i
              ? {
                  1: "text-2xl sm:text-3xl",
                  2: "text-lg sm:text-xl",
                  3: "text-sm sm:text-base",
                  4: "text-sm",
                  5: "text-xs sm:text-sm",
                  6: "text-xs",
                }
              : {
                  1: "text-3xl sm:text-4xl md:text-5xl",
                  2: "text-2xl sm:text-3xl",
                  3: "text-base sm:text-lg",
                  4: "text-sm sm:text-base",
                  5: "text-sm",
                  6: "text-xs sm:text-sm",
                })[s],
            { default: "text-secondary", accent: "text-primary" }[n],
            l,
          );
        switch (s) {
          case 1:
          default:
            return (0, t.jsx)("h1", { className: d, children: a });
          case 2:
            return (0, t.jsx)("h2", { className: d, children: a });
          case 3:
            return (0, t.jsx)("h3", { className: d, children: a });
          case 4:
            return (0, t.jsx)("h4", { className: d, children: a });
          case 5:
            return (0, t.jsx)("h5", { className: d, children: a });
          case 6:
            return (0, t.jsx)("h6", { className: d, children: a });
        }
      }
    },
    55289: (e, s, a) => {
      a.d(s, { d: () => i });
      var t = a(70207),
        r = a(87223),
        l = a(39906),
        n = a(82110);
      let i = r.forwardRef((e, s) => {
        let { className: a, ...r } = e;
        return (0, t.jsx)(l.bL, {
          className: (0, n.cn)(
            "peer inline-flex h-6 w-11 shrink-0 cursor-pointer items-center rounded-full border-2 border-transparent shadow-sm transition-all duration-200 focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-primary focus-visible:ring-offset-2 focus-visible:ring-offset-background disabled:cursor-not-allowed disabled:opacity-50 data-[state=checked]:bg-primary data-[state=unchecked]:bg-beige hover:data-[state=unchecked]:bg-beige/80",
            a,
          ),
          ...r,
          ref: s,
          children: (0, t.jsx)(l.zi, {
            className: (0, n.cn)(
              "pointer-events-none block h-5 w-5 rounded-full bg-white shadow-lg ring-0 transition-transform data-[state=checked]:translate-x-5 data-[state=unchecked]:translate-x-0",
            ),
          }),
        });
      });
      i.displayName = l.bL.displayName;
    },
    58212: (e, s, a) => {
      a.d(s, { E: () => l });
      var t = a(70207),
        r = a(82110);
      function l(e) {
        let { className: s, variant: a = "default", ...l } = e;
        return (0, t.jsx)("div", {
          className: (0, r.cn)(
            "rounded-lg",
            {
              default:
                "bg-beige/80 relative overflow-hidden before:absolute before:inset-0 before:-translate-x-full before:animate-[shimmer_2s_infinite] before:bg-gradient-to-r before:from-transparent before:via-cream/60 before:to-transparent",
              primary:
                "bg-primary/10 relative overflow-hidden before:absolute before:inset-0 before:-translate-x-full before:animate-[shimmer_2s_infinite] before:bg-gradient-to-r before:from-transparent before:via-primary/20 before:to-transparent",
              secondary:
                "bg-secondary/10 relative overflow-hidden before:absolute before:inset-0 before:-translate-x-full before:animate-[shimmer_2s_infinite] before:bg-gradient-to-r before:from-transparent before:via-secondary/20 before:to-transparent",
            }[a],
            s,
          ),
          ...l,
        });
      }
    },
    61216: (e, s, a) => {
      a.d(s, { X: () => n });
      var t = a(70207);
      a(87223);
      var r = a(82110),
        l = a(17802);
      function n(e) {
        let {
          badge: s,
          badgeIcon: a,
          title: n,
          description: i,
          level: d = 2,
          align: o = "center",
          className: c,
        } = e;
        return (0, t.jsxs)("div", {
          className: (0, r.cn)(
            "flex flex-col space-y-4 max-w-4xl mx-auto mb-12 sm:mb-16",
            {
              left: "text-left items-start",
              center: "text-center items-center",
              right: "text-right items-end",
            }[o],
            c,
          ),
          children: [
            s &&
              (0, t.jsxs)(l.E, {
                className:
                  "bg-[#5D5DE9]/10 border-[#5D5DE9]/20 text-[#5D5DE9] hover:bg-[#5D5DE9]/20 px-4 py-2 text-sm font-semibold w-fit",
                children: [
                  a && (0, t.jsx)("span", { className: "mr-2", children: a }),
                  s,
                ],
              }),
            (0, t.jsx)("h".concat(d), {
              className: (0, r.cn)(
                "font-bold tracking-tight leading-tight text-[#2C3340]",
                {
                  1: "text-3xl sm:text-4xl md:text-5xl",
                  2: "text-2xl sm:text-3xl md:text-4xl",
                  3: "text-xl sm:text-2xl md:text-3xl",
                  4: "text-lg sm:text-xl md:text-2xl",
                  5: "text-base sm:text-lg md:text-xl",
                  6: "text-sm sm:text-base md:text-lg",
                }[d],
              ),
              children: n,
            }),
            i &&
              (0, t.jsx)("p", {
                className:
                  "text-base sm:text-lg text-[#2C3340]/70 font-medium leading-relaxed max-w-3xl",
                children: i,
              }),
          ],
        });
      }
    },
    61607: (e, s, a) => {
      a.d(s, { T: () => n });
      var t = a(70207),
        r = a(87223),
        l = a(82110);
      let n = r.forwardRef((e, s) => {
        let { className: a, ...r } = e;
        return (0, t.jsx)("textarea", {
          className: (0, l.cn)(
            "flex min-h-[80px] w-full rounded-md border border-input bg-background px-3 py-2 text-sm ring-offset-background placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50",
            a,
          ),
          ref: s,
          ...r,
        });
      });
      n.displayName = "Textarea";
    },
    61889: (e, s, a) => {
      a.d(s, {
        Cf: () => x,
        Es: () => h,
        L3: () => f,
        c7: () => u,
        lG: () => d,
        rr: () => p,
        zM: () => o,
      });
      var t = a(70207),
        r = a(87223),
        l = a(52090),
        n = a(39945),
        i = a(82110);
      let d = l.bL,
        o = l.l9,
        c = l.ZL;
      l.bm;
      let m = r.forwardRef((e, s) => {
        let { className: a, ...r } = e;
        return (0, t.jsx)(l.hJ, {
          ref: s,
          className: (0, i.cn)(
            "fixed inset-0 z-50 bg-green/20 backdrop-blur-sm data-[state=open]:animate-in data-[state=closed]:animate-out data-[state=closed]:fade-out-0 data-[state=open]:fade-in-0",
            a,
          ),
          ...r,
        });
      });
      m.displayName = l.hJ.displayName;
      let x = r.forwardRef((e, s) => {
        let { className: a, children: r, ...d } = e;
        return (0, t.jsxs)(c, {
          children: [
            (0, t.jsx)(m, {}),
            (0, t.jsxs)(l.UC, {
              ref: s,
              className: (0, i.cn)(
                "fixed left-[50%] top-[50%] z-50 grid w-full translate-x-[-50%] translate-y-[-50%] gap-6 border border-border bg-white shadow-xl duration-200 data-[state=open]:animate-in data-[state=closed]:animate-out data-[state=closed]:fade-out-0 data-[state=open]:fade-in-0 data-[state=closed]:zoom-out-95 data-[state=open]:zoom-in-95 data-[state=closed]:slide-out-to-left-1/2 data-[state=closed]:slide-out-to-top-[48%] data-[state=open]:slide-in-from-left-1/2 data-[state=open]:slide-in-from-top-[48%] rounded-2xl",
                "max-w-[calc(100vw-2rem)] max-h-[calc(100vh-2rem)] sm:max-w-lg sm:max-h-[90vh]",
                "p-6 sm:p-8",
                "overflow-y-auto overflow-x-hidden",
                "custom-scrollbar",
                a,
              ),
              ...d,
              children: [
                r,
                (0, t.jsxs)(l.bm, {
                  className:
                    "absolute right-4 top-4 sm:right-6 sm:top-6 rounded-full p-2.5 opacity-70 ring-offset-background transition-all duration-200 hover:opacity-100 hover:bg-orange-light focus:outline-none focus:ring-2 focus:ring-primary focus:ring-offset-2 disabled:pointer-events-none min-w-[44px] min-h-[44px] flex items-center justify-center",
                  children: [
                    (0, t.jsx)(n.A, { className: "h-5 w-5 text-foreground" }),
                    (0, t.jsx)("span", {
                      className: "sr-only",
                      children: "Close",
                    }),
                  ],
                }),
              ],
            }),
          ],
        });
      });
      x.displayName = l.UC.displayName;
      let u = (e) => {
        let { className: s, ...a } = e;
        return (0, t.jsx)("div", {
          className: (0, i.cn)(
            "flex flex-col space-y-1.5 text-center sm:text-left",
            s,
          ),
          ...a,
        });
      };
      u.displayName = "DialogHeader";
      let h = (e) => {
        let { className: s, ...a } = e;
        return (0, t.jsx)("div", {
          className: (0, i.cn)(
            "flex flex-col-reverse sm:flex-row sm:justify-end sm:space-x-2",
            s,
          ),
          ...a,
        });
      };
      h.displayName = "DialogFooter";
      let f = r.forwardRef((e, s) => {
        let { className: a, ...r } = e;
        return (0, t.jsx)(l.hE, {
          ref: s,
          className: (0, i.cn)(
            "text-lg font-semibold leading-none tracking-tight break-words",
            a,
          ),
          ...r,
        });
      });
      f.displayName = l.hE.displayName;
      let p = r.forwardRef((e, s) => {
        let { className: a, ...r } = e;
        return (0, t.jsx)(l.VY, {
          ref: s,
          className: (0, i.cn)("text-sm text-muted-foreground break-words", a),
          ...r,
        });
      });
      p.displayName = l.VY.displayName;
    },
    64920: (e, s, a) => {
      a.d(s, { L: () => x });
      var t = a(70207),
        r = a(87223),
        l = a(51613),
        n = a(51105),
        i = a(82110),
        d = a(39441),
        o = a(72288),
        c = a(40167),
        m = a(35724);
      function x(e) {
        let {
            value: s,
            onChange: a,
            onCountryChange: x,
            onFocus: u,
            onBlur: h,
            defaultCountry: f = "IN",
            error: p = !1,
            className: b,
            inputClassName: g,
            disabled: j = !1,
            autoComplete: v = "tel",
          } = e,
          w = r.useMemo(
            () =>
              m.X.find((e) => e.code === f) ||
              m.X.find((e) => "IN" === e.code) ||
              m.X[0],
            [f],
          ),
          N = r.useRef(!1),
          [y, k] = r.useState(w);
        r.useEffect(() => {
          N.current || (k(w), (N.current = !0));
        }, [w]);
        let [E, C] = r.useState(!1),
          [A, S] = r.useState(""),
          R = (e) => {
            (k(e), C(!1), x && x(e));
          },
          F = r.useMemo(
            () =>
              A
                ? m.X.filter(
                    (e) =>
                      e.name.toLowerCase().includes(A.toLowerCase()) ||
                      e.phoneCode.includes(A),
                  )
                : m.X,
            [A],
          );
        return (0, t.jsx)("div", {
          className: (0, i.cn)("flex relative", b),
          children: (0, t.jsxs)("div", {
            className: (0, i.cn)(
              "flex h-12 w-full rounded-lg border border-input bg-white text-sm ring-offset-background transition-all duration-200",
              p && "border-red-500",
              "focus-within:ring-2 focus-within:ring-primary focus-within:border-primary",
              j && "cursor-not-allowed opacity-50",
            ),
            children: [
              (0, t.jsxs)(o.AM, {
                open: E,
                onOpenChange: C,
                children: [
                  (0, t.jsx)(o.Wv, {
                    asChild: !0,
                    children: (0, t.jsx)("button", {
                      type: "button",
                      disabled: j,
                      className: (0, i.cn)(
                        "flex h-full items-center gap-1 rounded-l-lg border-0 bg-transparent px-3 py-2 text-sm font-medium transition-colors duration-200",
                        "focus:outline-none focus:ring-0",
                        "hover:bg-beige/50",
                      ),
                      children: (0, t.jsxs)("span", {
                        className: "flex items-center gap-1",
                        children: [
                          (0, t.jsx)("span", {
                            className: "text-base",
                            children: y.flag,
                          }),
                          (0, t.jsxs)("span", {
                            className: "hidden sm:inline",
                            children: ["+", y.phoneCode],
                          }),
                          (0, t.jsxs)("span", {
                            className: "inline sm:hidden",
                            children: ["+", y.phoneCode],
                          }),
                          (0, t.jsx)(l.A, { className: "h-4 w-4 opacity-50" }),
                        ],
                      }),
                    }),
                  }),
                  (0, t.jsx)(o.hl, {
                    className: "w-[230px] p-2",
                    align: "start",
                    children: (0, t.jsxs)("div", {
                      className: "space-y-2",
                      children: [
                        (0, t.jsx)(c.p, {
                          placeholder: "Search country...",
                          value: A,
                          onChange: (e) => S(e.target.value),
                          className: "h-8",
                        }),
                        (0, t.jsx)("div", {
                          className:
                            "max-h-[300px] overflow-y-auto overflow-x-hidden",
                          children:
                            0 === F.length
                              ? (0, t.jsx)("div", {
                                  className:
                                    "py-6 text-center text-sm text-muted-foreground",
                                  children: "No country found.",
                                })
                              : (0, t.jsx)("div", {
                                  className: "space-y-1",
                                  children: F.map((e) =>
                                    (0, t.jsx)(
                                      d.$,
                                      {
                                        variant: "ghost",
                                        onClick: () => R(e),
                                        className:
                                          "w-full justify-start text-left",
                                        children: (0, t.jsxs)("div", {
                                          className: "flex items-center gap-2",
                                          children: [
                                            (0, t.jsx)("span", {
                                              className: "text-base",
                                              children: e.flag,
                                            }),
                                            (0, t.jsxs)("span", {
                                              className: "flex-1 truncate",
                                              children: [
                                                e.name,
                                                " (+",
                                                e.phoneCode,
                                                ")",
                                              ],
                                            }),
                                            e.code === y.code &&
                                              (0, t.jsx)(n.A, {
                                                className:
                                                  "h-4 w-4 opacity-100",
                                              }),
                                          ],
                                        }),
                                      },
                                      e.code,
                                    ),
                                  ),
                                }),
                        }),
                      ],
                    }),
                  }),
                ],
              }),
              (0, t.jsx)("div", { className: "h-full w-px bg-beige" }),
              (0, t.jsx)("input", {
                type: "tel",
                value: s,
                onChange: (e) => {
                  a(e.target.value.replace(/\D/g, ""));
                },
                onFocus: u,
                onBlur: h,
                disabled: j,
                placeholder: "Phone number",
                autoComplete: v,
                className: (0, i.cn)(
                  "flex-1 border-0 bg-transparent px-3 py-2 text-sm outline-none",
                  "focus:ring-0 focus-visible:ring-0 focus-visible:ring-offset-0",
                  "placeholder:text-muted-foreground",
                  g,
                ),
              }),
            ],
          }),
        });
      }
    },
    67454: (e, s, a) => {
      a.d(s, { A: () => i });
      var t = a(70207),
        r = a(87223),
        l = a(9928),
        n = a(82110);
      let i = r.forwardRef((e, s) => {
        let { className: a, ...r } = e;
        return (0, t.jsxs)(l.bL, {
          ref: s,
          className: (0, n.cn)(
            "relative flex w-full touch-none select-none items-center",
            a,
          ),
          ...r,
          children: [
            (0, t.jsx)(l.CC, {
              className:
                "relative h-2 w-full grow overflow-hidden rounded-full bg-beige",
              children: (0, t.jsx)(l.Q6, {
                className: "absolute h-full bg-primary",
              }),
            }),
            (0, t.jsx)(l.zi, {
              className:
                "block h-5 w-5 rounded-full border-2 border-primary bg-white shadow-md ring-offset-background transition-all duration-200 focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-primary focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 hover:scale-110",
            }),
          ],
        });
      });
      i.displayName = l.bL.displayName;
    },
    68528: (e, s, a) => {
      a.d(s, { $: () => l });
      var t = a(70207),
        r = a(82110);
      function l(e) {
        let {
          children: s,
          className: a,
          containerClassName: l,
          id: n,
          background: i = "white",
        } = e;
        return (0, t.jsx)("section", {
          id: n,
          className: (0, r.cn)(
            "py-16 md:py-24",
            {
              cream: "bg-cream",
              white: "bg-white",
              beige: "bg-beige",
              green: "bg-green text-white",
            }[i],
            a,
          ),
          children: (0, t.jsx)("div", {
            className: (0, r.cn)("container mx-auto px-4 md:px-6", l),
            children: s,
          }),
        });
      }
    },
    71592: (e, s, a) => {
      a.d(s, { C: () => o, z: () => d });
      var t = a(70207),
        r = a(87223),
        l = a(59237),
        n = a(61695),
        i = a(82110);
      let d = r.forwardRef((e, s) => {
        let { className: a, ...r } = e;
        return (0, t.jsx)(l.bL, {
          className: (0, i.cn)("grid gap-2", a),
          ...r,
          ref: s,
        });
      });
      d.displayName = l.bL.displayName;
      let o = r.forwardRef((e, s) => {
        let { className: a, ...r } = e;
        return (0, t.jsx)(l.q7, {
          ref: s,
          className: (0, i.cn)(
            "aspect-square h-5 w-5 rounded-full border-2 border-primary text-primary ring-offset-background transition-all duration-200 focus:outline-none focus-visible:ring-2 focus-visible:ring-primary focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50 hover:border-primary hover:bg-orange-light/20",
            a,
          ),
          ...r,
          children: (0, t.jsx)(l.C1, {
            className: "flex items-center justify-center",
            children: (0, t.jsx)(n.A, {
              className: "h-2.5 w-2.5 fill-primary text-primary",
            }),
          }),
        });
      });
      o.displayName = l.q7.displayName;
    },
    72288: (e, s, a) => {
      a.d(s, { AM: () => i, Wv: () => d, hl: () => o });
      var t = a(70207),
        r = a(87223),
        l = a(58988),
        n = a(82110);
      let i = l.bL,
        d = l.l9;
      l.Mz;
      let o = r.forwardRef((e, s) => {
        let { className: a, align: r = "center", sideOffset: i = 4, ...d } = e;
        return (0, t.jsx)(l.ZL, {
          children: (0, t.jsx)(l.UC, {
            ref: s,
            align: r,
            sideOffset: i,
            className: (0, n.cn)(
              "z-50 w-72 rounded-xl border border-border bg-white p-4 text-foreground shadow-lg outline-none data-[state=open]:animate-in data-[state=closed]:animate-out data-[state=closed]:fade-out-0 data-[state=open]:fade-in-0 data-[state=closed]:zoom-out-95 data-[state=open]:zoom-in-95 data-[side=bottom]:slide-in-from-top-2 data-[side=left]:slide-in-from-right-2 data-[side=right]:slide-in-from-left-2 data-[side=top]:slide-in-from-bottom-2 origin-[--radix-popover-content-transform-origin]",
              a,
            ),
            ...d,
          }),
        });
      });
      o.displayName = l.UC.displayName;
    },
    73235: (e, s, a) => {
      a.d(s, { d: () => x });
      var t = a(70207),
        r = a(82110),
        l = a(39441),
        n = a(17802),
        i = a(52141),
        d = a(35121),
        o = a(10542),
        c = a.n(o),
        m = a(50018);
      function x(e) {
        let {
            badge: s,
            title: a,
            subtitle: o,
            primaryCta: x,
            secondaryCta: u,
            backgroundImage: h,
            backgroundAlt: f = "Beautiful autumn landscape in Germany",
            landmarkCaption: p,
            className: b,
            children: g,
            alignment: j = "center",
          } = e,
          v = null == s ? void 0 : s.icon;
        return (0, t.jsxs)("section", {
          className: (0, r.cn)(
            "relative text-foreground",
            "py-16 sm:py-20 md:py-24 lg:py-28 min-h-[600px] sm:min-h-[650px] lg:min-h-[700px]",
            "overflow-hidden",
            "w-full",
            "flex items-center justify-center",
            "-mt-24 pt-36 sm:pt-40 md:pt-44",
            b,
          ),
          children: [
            (0, t.jsx)(m.default, {
              src: "/images/hero-backgrounds/".concat(h),
              alt: f,
              fill: !0,
              priority: !0,
              quality: 85,
              sizes: "100vw",
              className: "object-cover object-center",
              loading: "eager",
            }),
            (0, t.jsx)("div", {
              className: "absolute inset-0 bg-black/30 z-0",
            }),
            (0, t.jsx)("div", {
              className: "absolute inset-0 z-0",
              style: {
                background:
                  "\n            radial-gradient(ellipse at center, transparent 0%, transparent 40%, rgba(0,0,0,0.4) 100%),\n            linear-gradient(to top, rgba(0,0,0,0.5) 0%, transparent 30%),\n            linear-gradient(to right, rgba(0,0,0,0.3) 0%, transparent 15%),\n            linear-gradient(to left, rgba(0,0,0,0.3) 0%, transparent 15%)\n          ",
              },
            }),
            (0, t.jsx)("div", {
              className: (0, r.cn)(
                "container mx-auto px-4 sm:px-6 md:px-8 relative z-10 flex flex-col gap-4 sm:gap-5",
                "center" === j
                  ? "items-center text-center max-w-4xl"
                  : "items-start text-left max-w-7xl",
              ),
              children: (0, t.jsxs)("div", {
                className: (0, r.cn)(
                  "flex flex-col gap-4 sm:gap-5",
                  "left" === j && "max-w-2xl",
                ),
                children: [
                  s &&
                    (0, t.jsx)("div", {
                      className: "animate-fade-in-up animation-delay-100",
                      children: (0, t.jsxs)(n.E, {
                        variant: "outline",
                        className:
                          "border-2 border-white/80 text-white backdrop-blur-sm bg-white/10 hover:bg-white/20 px-3 py-1.5 text-sm font-semibold",
                        "aria-label": s.text,
                        children: [
                          v &&
                            (0, t.jsx)(v, {
                              className: "h-4 w-4 mr-2",
                              "aria-hidden": "true",
                            }),
                          s.text,
                        ],
                      }),
                    }),
                  (0, t.jsx)(i.D, {
                    level: 1,
                    className: (0, r.cn)(
                      "text-white",
                      "drop-shadow-2xl",
                      "animate-fade-in-up animation-delay-200",
                    ),
                    children: a,
                  }),
                  (0, t.jsx)(d.f, {
                    size: "lg",
                    className: (0, r.cn)(
                      "text-white/90",
                      "drop-shadow-lg",
                      "animate-fade-in-up animation-delay-300",
                    ),
                    children: o,
                  }),
                  (0, t.jsxs)("nav", {
                    className: (0, r.cn)(
                      "flex flex-col sm:flex-row gap-3 sm:gap-4 animate-fade-in-up animation-delay-400 mt-2",
                      "center" === j
                        ? "w-full max-w-md mx-auto justify-center"
                        : "justify-start",
                    ),
                    "aria-label": "Primary navigation",
                    children: [
                      (0, t.jsx)(l.$, {
                        asChild: !0,
                        size: "lg",
                        className: (0, r.cn)(
                          "bg-[#5D5DE9] hover:bg-[#2C3340]",
                          "text-white shadow-lg hover:shadow-xl",
                          "transition-all duration-300",
                          "rounded-full",
                          "px-6 sm:px-7 py-5 text-base font-semibold",
                          "w-full sm:w-auto",
                          "hover:-translate-y-1",
                        ),
                        children: (0, t.jsxs)(c(), {
                          href: x.href,
                          className: "inline-flex items-center justify-center",
                          "aria-label": x.text,
                          children: [
                            x.icon &&
                              (0, t.jsx)("span", {
                                "aria-hidden": "true",
                                children: x.icon,
                              }),
                            (0, t.jsx)("span", { children: x.text }),
                          ],
                        }),
                      }),
                      (0, t.jsx)(l.$, {
                        asChild: !0,
                        size: "lg",
                        variant: "outline",
                        className: (0, r.cn)(
                          "border-2 border-white/80 hover:border-white",
                          "text-white hover:text-white hover:bg-white/10 backdrop-blur-sm",
                          "transition-all duration-300",
                          "rounded-full",
                          "px-6 sm:px-7 py-5 text-base font-semibold",
                          "w-full sm:w-auto",
                          "shadow-lg",
                        ),
                        children: (0, t.jsxs)(c(), {
                          href: u.href,
                          className: "inline-flex items-center justify-center",
                          "aria-label": u.text,
                          children: [
                            u.icon &&
                              (0, t.jsx)("span", {
                                "aria-hidden": "true",
                                children: u.icon,
                              }),
                            (0, t.jsx)("span", { children: u.text }),
                          ],
                        }),
                      }),
                    ],
                  }),
                  g &&
                    (0, t.jsx)("div", {
                      className: "animate-fade-in-up animation-delay-500 mt-4",
                      children: g,
                    }),
                ],
              }),
            }),
            p &&
              (0, t.jsx)("div", {
                className: "hidden md:block absolute bottom-4 right-4 z-10",
                children: (0, t.jsx)("p", {
                  className:
                    "text-xs text-white/70 bg-black/20 backdrop-blur-sm px-3 py-1.5 rounded-full",
                  children: p,
                }),
              }),
          ],
        });
      }
    },
    79593: (e, s, a) => {
      a.d(s, { O: () => l });
      var t = a(70207);
      a(87223);
      var r = a(58212);
      function l() {
        return (0, t.jsx)("div", {
          className: "container mx-auto p-4 md:p-6 lg:p-8 max-w-7xl",
          children: (0, t.jsxs)("div", {
            className: "relative",
            children: [
              (0, t.jsxs)("div", {
                className: "absolute inset-0 -z-10",
                children: [
                  (0, t.jsx)("div", {
                    className:
                      "absolute top-0 -left-4 w-72 h-72 bg-beige rounded-full mix-blend-multiply filter blur-xl opacity-20 animate-blob",
                  }),
                  (0, t.jsx)("div", {
                    className:
                      "absolute top-0 -right-4 w-72 h-72 bg-primary/30 rounded-full mix-blend-multiply filter blur-xl opacity-20 animate-blob animation-delay-2000",
                  }),
                  (0, t.jsx)("div", {
                    className:
                      "absolute -bottom-8 left-20 w-72 h-72 bg-secondary/30 rounded-full mix-blend-multiply filter blur-xl opacity-20 animate-blob animation-delay-4000",
                  }),
                ],
              }),
              (0, t.jsx)("div", {
                className: "mb-6",
                children: (0, t.jsxs)("div", {
                  className: "flex items-center justify-between mb-2",
                  children: [
                    (0, t.jsxs)("div", {
                      children: [
                        (0, t.jsx)(r.E, {
                          variant: "secondary",
                          className: "h-9 md:h-10 w-[280px] md:w-[350px] mb-1",
                        }),
                        (0, t.jsx)(r.E, { className: "h-5 w-[200px] mt-1" }),
                      ],
                    }),
                    (0, t.jsx)(r.E, {
                      variant: "primary",
                      className: "hidden md:flex h-10 w-[90px] rounded-full",
                    }),
                  ],
                }),
              }),
              (0, t.jsx)("div", {
                className:
                  "mb-8 p-4 rounded-2xl bg-gradient-to-r from-primary/10 via-primary/5 to-beige border border-primary/20 backdrop-blur-sm",
                children: (0, t.jsxs)("div", {
                  className: "flex items-start gap-3",
                  children: [
                    (0, t.jsx)("div", {
                      className:
                        "p-2 rounded-lg bg-gradient-to-br from-primary/20 to-primary/10",
                      children: (0, t.jsx)(r.E, {
                        variant: "primary",
                        className: "h-5 w-5",
                      }),
                    }),
                    (0, t.jsxs)("div", {
                      className: "flex-1",
                      children: [
                        (0, t.jsxs)("div", {
                          className: "flex items-center justify-between mb-1",
                          children: [
                            (0, t.jsx)(r.E, {
                              variant: "secondary",
                              className: "h-3 w-[100px]",
                            }),
                            (0, t.jsxs)("div", {
                              className: "flex items-center gap-1",
                              children: [
                                (0, t.jsx)(r.E, {
                                  variant: "primary",
                                  className: "h-5 w-5 rounded-full",
                                }),
                                (0, t.jsx)(r.E, {
                                  variant: "primary",
                                  className: "h-5 w-5 rounded-full",
                                }),
                              ],
                            }),
                          ],
                        }),
                        (0, t.jsx)(r.E, {
                          className: "h-5 w-full min-h-[2.5rem]",
                        }),
                      ],
                    }),
                  ],
                }),
              }),
              (0, t.jsxs)("div", {
                className: "grid md:grid-cols-2 gap-6 mb-8",
                children: [
                  (0, t.jsxs)("div", {
                    className:
                      "relative overflow-hidden rounded-2xl p-6 bg-gradient-to-br from-primary/20 to-primary/10 shadow-xl",
                    children: [
                      (0, t.jsx)("div", {
                        className: "absolute inset-0 opacity-10",
                        children: (0, t.jsx)("div", {
                          className: "absolute inset-0 bg-grid-white/20",
                        }),
                      }),
                      (0, t.jsxs)("div", {
                        className: "relative z-10",
                        children: [
                          (0, t.jsxs)("div", {
                            className: "flex items-start justify-between mb-4",
                            children: [
                              (0, t.jsx)("div", {
                                className:
                                  "p-3 rounded-xl bg-white/20 backdrop-blur-sm",
                                children: (0, t.jsx)(r.E, {
                                  variant: "primary",
                                  className: "h-6 w-6",
                                }),
                              }),
                              (0, t.jsxs)("div", {
                                className: "text-right",
                                children: [
                                  (0, t.jsx)(r.E, {
                                    variant: "primary",
                                    className: "h-9 w-[60px] mb-1",
                                  }),
                                  (0, t.jsx)(r.E, {
                                    className: "h-3 w-[80px]",
                                  }),
                                ],
                              }),
                            ],
                          }),
                          (0, t.jsx)(r.E, {
                            variant: "primary",
                            className: "h-7 w-[200px] mb-2",
                          }),
                          (0, t.jsx)(r.E, {
                            className: "h-4 w-full mb-4 opacity-90",
                          }),
                          (0, t.jsx)(r.E, {
                            variant: "primary",
                            className: "h-12 mb-4",
                          }),
                          (0, t.jsxs)("div", {
                            className: "flex items-center gap-2",
                            children: [
                              (0, t.jsx)(r.E, { className: "h-4 w-[120px]" }),
                              (0, t.jsx)(r.E, { className: "h-4 w-4" }),
                            ],
                          }),
                        ],
                      }),
                      (0, t.jsx)("div", {
                        className:
                          "absolute -bottom-6 -right-6 w-24 h-24 bg-white/10 rounded-full blur-2xl",
                      }),
                      (0, t.jsx)("div", {
                        className:
                          "absolute -top-6 -left-6 w-32 h-32 bg-white/10 rounded-full blur-3xl",
                      }),
                    ],
                  }),
                  (0, t.jsxs)("div", {
                    className:
                      "relative overflow-hidden rounded-2xl p-6 bg-gradient-to-br from-secondary/20 to-secondary/10 shadow-xl",
                    children: [
                      (0, t.jsx)("div", {
                        className: "absolute inset-0 opacity-10",
                        children: (0, t.jsx)("div", {
                          className: "absolute inset-0 bg-grid-white/20",
                        }),
                      }),
                      (0, t.jsxs)("div", {
                        className: "relative z-10",
                        children: [
                          (0, t.jsxs)("div", {
                            className: "flex items-start justify-between mb-4",
                            children: [
                              (0, t.jsx)("div", {
                                className:
                                  "p-3 rounded-xl bg-white/20 backdrop-blur-sm",
                                children: (0, t.jsx)(r.E, {
                                  variant: "secondary",
                                  className: "h-6 w-6",
                                }),
                              }),
                              (0, t.jsxs)("div", {
                                className: "text-right",
                                children: [
                                  (0, t.jsx)(r.E, {
                                    variant: "secondary",
                                    className: "h-5 w-[70px] mb-1",
                                  }),
                                  (0, t.jsx)(r.E, {
                                    className: "h-3 w-[80px]",
                                  }),
                                ],
                              }),
                            ],
                          }),
                          (0, t.jsx)(r.E, {
                            variant: "secondary",
                            className: "h-7 w-[180px] mb-2",
                          }),
                          (0, t.jsx)(r.E, {
                            className: "h-4 w-full mb-4 opacity-90",
                          }),
                          (0, t.jsx)(r.E, {
                            variant: "secondary",
                            className: "h-12 mb-4",
                          }),
                          (0, t.jsxs)("div", {
                            className: "flex items-center gap-2",
                            children: [
                              (0, t.jsx)(r.E, { className: "h-4 w-[120px]" }),
                              (0, t.jsx)(r.E, { className: "h-4 w-4" }),
                            ],
                          }),
                        ],
                      }),
                      (0, t.jsx)("div", {
                        className:
                          "absolute -bottom-6 -right-6 w-24 h-24 bg-white/10 rounded-full blur-2xl",
                      }),
                      (0, t.jsx)("div", {
                        className:
                          "absolute -top-6 -left-6 w-32 h-32 bg-white/10 rounded-full blur-3xl",
                      }),
                    ],
                  }),
                ],
              }),
              (0, t.jsx)("div", {
                className: "grid grid-cols-2 md:grid-cols-4 gap-4 mb-8",
                children: [
                  { label: "Eligibility", icon: "target" },
                  { label: "German", icon: "book" },
                  { label: "Active", icon: "trending" },
                  { label: "Badges", icon: "award" },
                ].map((e, s) =>
                  (0, t.jsxs)(
                    "div",
                    {
                      className:
                        "relative p-4 rounded-xl bg-card border border-border shadow-sm",
                      children: [
                        (0, t.jsxs)("div", {
                          className: "flex items-center justify-between mb-2",
                          children: [
                            (0, t.jsx)(r.E, {
                              variant: "secondary",
                              className: "h-3 w-[60px]",
                            }),
                            (0, t.jsx)(r.E, {
                              variant: "primary",
                              className: "h-4 w-4",
                            }),
                          ],
                        }),
                        (0, t.jsx)(r.E, {
                          variant: "primary",
                          className: "h-8 w-[45px] mb-1",
                        }),
                        (0, t.jsx)(r.E, { className: "h-3 w-[70px] mt-1" }),
                      ],
                    },
                    s,
                  ),
                ),
              }),
              (0, t.jsxs)("div", {
                className: "grid md:grid-cols-2 gap-6 mb-8",
                children: [
                  (0, t.jsxs)("div", {
                    className:
                      "p-6 rounded-xl bg-card border border-border shadow-sm",
                    children: [
                      (0, t.jsxs)("div", {
                        className: "flex items-center gap-2 mb-4",
                        children: [
                          (0, t.jsx)(r.E, {
                            variant: "primary",
                            className: "h-4 w-4",
                          }),
                          (0, t.jsx)(r.E, {
                            variant: "secondary",
                            className: "h-5 w-[120px] font-semibold",
                          }),
                        ],
                      }),
                      (0, t.jsx)("div", {
                        className: "space-y-3",
                        children: [1, 2].map((e) =>
                          (0, t.jsxs)(
                            "div",
                            {
                              className: "flex items-start gap-3",
                              children: [
                                (0, t.jsx)("div", {
                                  className: "mt-1 p-1.5 rounded-full bg-beige",
                                  children: (0, t.jsx)(r.E, {
                                    variant: "secondary",
                                    className: "h-3 w-3",
                                  }),
                                }),
                                (0, t.jsxs)("div", {
                                  className: "flex-1",
                                  children: [
                                    (0, t.jsx)(r.E, {
                                      variant: "secondary",
                                      className: "h-4 w-[180px]",
                                    }),
                                    (0, t.jsx)(r.E, {
                                      className: "h-3 w-[140px] mt-1",
                                    }),
                                  ],
                                }),
                              ],
                            },
                            e,
                          ),
                        ),
                      }),
                    ],
                  }),
                  (0, t.jsxs)("div", {
                    className:
                      "p-6 rounded-xl bg-card border border-border shadow-sm",
                    children: [
                      (0, t.jsxs)("div", {
                        className: "flex items-center gap-2 mb-4",
                        children: [
                          (0, t.jsx)(r.E, {
                            variant: "primary",
                            className: "h-4 w-4",
                          }),
                          (0, t.jsx)(r.E, {
                            variant: "secondary",
                            className: "h-5 w-[120px] font-semibold",
                          }),
                        ],
                      }),
                      (0, t.jsx)("div", {
                        className: "space-y-3",
                        children: [1, 2].map((e) =>
                          (0, t.jsxs)(
                            "div",
                            {
                              className: "flex items-center gap-3",
                              children: [
                                (0, t.jsx)("div", {
                                  className: "p-2 rounded-lg bg-primary/10",
                                  children: (0, t.jsx)(r.E, {
                                    variant: "primary",
                                    className: "h-3 w-3",
                                  }),
                                }),
                                (0, t.jsxs)("div", {
                                  className: "flex-1",
                                  children: [
                                    (0, t.jsx)(r.E, {
                                      variant: "secondary",
                                      className: "h-4 w-[160px] font-medium",
                                    }),
                                    (0, t.jsx)(r.E, {
                                      className: "h-3 w-[140px] mt-1",
                                    }),
                                  ],
                                }),
                                (0, t.jsx)(r.E, {
                                  variant: "primary",
                                  className: "h-4 w-4",
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
              (0, t.jsxs)("div", {
                className: "border-t pt-6",
                children: [
                  (0, t.jsx)(r.E, {
                    variant: "secondary",
                    className: "h-3 w-[120px] font-semibold mb-3",
                  }),
                  (0, t.jsx)("div", {
                    className: "flex flex-wrap gap-4",
                    children: [1, 2, 3].map((e) =>
                      (0, t.jsxs)(
                        "div",
                        {
                          className: "flex items-center gap-1",
                          children: [
                            (0, t.jsx)(r.E, { className: "h-3 w-[100px]" }),
                            (0, t.jsx)(r.E, {
                              variant: "primary",
                              className: "h-3 w-3",
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
        });
      }
    },
    80187: (e, s, a) => {
      a.d(s, {
        BT: () => o,
        Wu: () => c,
        ZB: () => d,
        Zp: () => n,
        aR: () => i,
        wL: () => m,
      });
      var t = a(70207),
        r = a(87223),
        l = a(82110);
      let n = r.forwardRef((e, s) => {
        let { className: a, ...r } = e;
        return (0, t.jsx)("div", {
          ref: s,
          className: (0, l.cn)(
            "rounded-xl border bg-card text-card-foreground shadow",
            a,
          ),
          ...r,
        });
      });
      n.displayName = "Card";
      let i = r.forwardRef((e, s) => {
        let { className: a, ...r } = e;
        return (0, t.jsx)("div", {
          ref: s,
          className: (0, l.cn)("flex flex-col space-y-1.5 p-6", a),
          ...r,
        });
      });
      i.displayName = "CardHeader";
      let d = r.forwardRef((e, s) => {
        let { className: a, ...r } = e;
        return (0, t.jsx)("div", {
          ref: s,
          className: (0, l.cn)("font-semibold leading-none tracking-tight", a),
          ...r,
        });
      });
      d.displayName = "CardTitle";
      let o = r.forwardRef((e, s) => {
        let { className: a, ...r } = e;
        return (0, t.jsx)("div", {
          ref: s,
          className: (0, l.cn)("text-sm text-muted-foreground", a),
          ...r,
        });
      });
      o.displayName = "CardDescription";
      let c = r.forwardRef((e, s) => {
        let { className: a, ...r } = e;
        return (0, t.jsx)("div", {
          ref: s,
          className: (0, l.cn)("p-6 pt-0", a),
          ...r,
        });
      });
      c.displayName = "CardContent";
      let m = r.forwardRef((e, s) => {
        let { className: a, ...r } = e;
        return (0, t.jsx)("div", {
          ref: s,
          className: (0, l.cn)("flex items-center p-6 pt-0", a),
          ...r,
        });
      });
      m.displayName = "CardFooter";
    },
    80606: (e, s, a) => {
      a.d(s, { b: () => x });
      var t = a(70207),
        r = a(87223),
        l = a(10194),
        n = a(51105),
        i = a(82110),
        d = a(39441),
        o = a(44208),
        c = a(72288);
      let m = a(35724).X.map((e) => ({
        value: e.name,
        label: e.name,
        flag: e.flag,
      }));
      function x(e) {
        let {
            value: s,
            onChange: a,
            placeholder: x = "Select country...",
            disabled: u = !1,
            className: h,
          } = e,
          [f, p] = r.useState(!1),
          b = m.find((e) => e.value === s);
        return (0, t.jsxs)(c.AM, {
          open: f,
          onOpenChange: p,
          children: [
            (0, t.jsx)(c.Wv, {
              asChild: !0,
              children: (0, t.jsxs)(d.$, {
                variant: "outline",
                role: "combobox",
                "aria-expanded": f,
                disabled: u,
                className: (0, i.cn)(
                  "w-full justify-between rounded-full h-12",
                  !s && "text-muted-foreground",
                  h,
                ),
                children: [
                  b
                    ? (0, t.jsxs)("span", {
                        className: "flex items-center gap-2",
                        children: [
                          (0, t.jsx)("span", {
                            className: "text-lg",
                            children: b.flag,
                          }),
                          b.label,
                        ],
                      })
                    : x,
                  (0, t.jsx)(l.A, {
                    className: "ml-2 h-4 w-4 shrink-0 opacity-50",
                  }),
                ],
              }),
            }),
            (0, t.jsx)(c.hl, {
              className: "w-full p-0",
              align: "start",
              children: (0, t.jsxs)(o.uB, {
                children: [
                  (0, t.jsx)(o.G7, {
                    placeholder: "Search country...",
                    className: "h-10",
                  }),
                  (0, t.jsxs)(o.oI, {
                    children: [
                      (0, t.jsx)(o.xL, { children: "No country found." }),
                      (0, t.jsx)(o.L$, {
                        children: m.map((e) =>
                          (0, t.jsxs)(
                            o.h_,
                            {
                              value: e.value,
                              onSelect: (e) => {
                                (a(e === s ? "" : e), p(!1));
                              },
                              className: "cursor-pointer",
                              children: [
                                (0, t.jsxs)("span", {
                                  className: "flex items-center gap-2 flex-1",
                                  children: [
                                    (0, t.jsx)("span", {
                                      className: "text-lg",
                                      children: e.flag,
                                    }),
                                    e.label,
                                  ],
                                }),
                                (0, t.jsx)(n.A, {
                                  className: (0, i.cn)(
                                    "ml-auto h-4 w-4",
                                    s === e.value ? "opacity-100" : "opacity-0",
                                  ),
                                }),
                              ],
                            },
                            e.value,
                          ),
                        ),
                      }),
                    ],
                  }),
                ],
              }),
            }),
          ],
        });
      }
    },
    81077: (e, s, a) => {
      a.d(s, { j: () => U });
      var t = a(70207),
        r = a(87223),
        l = a(45748),
        n = a(54459),
        i = a(10542),
        d = a.n(i),
        o = a(51613),
        c = a(46031),
        m = a(9325),
        x = a(75980),
        u = a(63728),
        h = a(66176),
        f = a(84829),
        p = a(39945),
        b = a(65336),
        g = a(82110),
        j = a(39441),
        v = a(66409),
        w = a(18051),
        N = a(58212),
        y = a(84321),
        k = a(50341),
        E = a(53045),
        C = a(17802),
        A = a(55853);
      let S = (e) => {
        let s = {
          Requirements: "bg-green-500/90",
          Language: "bg-primary/90",
          Visa: "bg-beige/90",
          Costs: "bg-orange-500/90",
          Application: "bg-pink-500/90",
          "Ausbildung Basics": "bg-beige/90",
          "Why Choose Ausbildung": "bg-teal-500/90",
          "Finding Programs": "bg-amber-500/90",
          Housing: "bg-rose-500/90",
          Timeline: "bg-cyan-500/90",
          "Daily Life": "bg-red-500/90",
          "Cultural Integration": "bg-lime-500/90",
          "Trainee Rights": "bg-secondary/90",
          "After Ausbildung": "bg-secondary/90",
          FAQ: "bg-card/90",
          "Eligibility Checker": "bg-cyan-500/90",
          "ROI Calculator": "bg-amber-500/90",
          "Nursing in Germany": "bg-red-500/90",
          Study: "bg-beige/90",
          Tools: "bg-primary/90",
          Services: "bg-rose-500/90",
          default: "bg-primary/90",
        };
        return s[e] || s.default;
      };
      function R(e) {
        let {
          items: s,
          isOpen: a,
          onClose: i,
          activeTab: o,
          setActiveTab: m,
          user: u,
          topOffset: h = 86,
        } = e;
        (0, r.useEffect)(() => {
          if (a) {
            let e = document.createElement("style");
            return (
              (e.textContent =
                "\n        .mobile-panel-scrollbar::-webkit-scrollbar {\n          width: 6px;\n        }\n        .mobile-panel-scrollbar::-webkit-scrollbar-track {\n          background: transparent;\n        }\n        .mobile-panel-scrollbar::-webkit-scrollbar-thumb {\n          background: rgba(93, 93, 233, 0.3);\n          border-radius: 3px;\n        }\n        .mobile-panel-scrollbar::-webkit-scrollbar-thumb:hover {\n          background: rgba(93, 93, 233, 0.5);\n        }\n      "),
              document.head.appendChild(e),
              () => document.head.removeChild(e)
            );
          }
        }, [a]);
        let [f, p] = (0, r.useState)({}),
          b = (e) => {
            p((s) => ({ ...s, [e]: !s[e] }));
          };
        (0, r.useEffect)(() => {
          a || p({});
        }, [a]);
        let v = s.map((e) =>
          "Sectors" !== e.name || e.children
            ? e
            : {
                ...e,
                children: A.dk.map((e) => ({
                  name: e.name,
                  url: "/sectors/".concat(e.slug),
                  icon: e.icon,
                  featured: e.featured,
                })),
              },
        );
        return (0, t.jsx)(n.N, {
          children:
            a &&
            (0, t.jsxs)(t.Fragment, {
              children: [
                (0, t.jsx)(l.P.div, {
                  initial: { opacity: 0 },
                  animate: { opacity: 1 },
                  exit: { opacity: 0 },
                  transition: { duration: 0.25 },
                  className: "fixed inset-0 z-[60] bg-black/25",
                  onClick: i,
                }),
                (0, t.jsx)(l.P.div, {
                  initial: { opacity: 0, y: -12, scale: 0.98 },
                  animate: { opacity: 1, y: 0, scale: 1 },
                  exit: { opacity: 0, y: -12, scale: 0.98 },
                  transition: { duration: 0.22, ease: "easeOut" },
                  className:
                    "fixed left-0 right-0 z-[70] flex justify-center px-4",
                  style: { top: "".concat(h, "px") },
                  children: (0, t.jsxs)("div", {
                    className:
                      "mobile-panel-scrollbar w-full max-w-[380px] max-h-[calc(100vh-120px)] overflow-y-auto rounded-3xl border border-beige bg-white/95 p-3 shadow-[0_28px_60px_-24px_rgba(93,93,233,0.3)] backdrop-blur-2xl",
                    children: [
                      (0, t.jsx)("nav", {
                        className: "flex flex-col gap-1.5",
                        children: v.map((e) => {
                          var s, a, r;
                          let x = e.icon,
                            u =
                              o === e.name ||
                              (null !==
                                (r =
                                  null === (s = e.children) || void 0 === s
                                    ? void 0
                                    : s.some((e) => e.name === o)) &&
                                void 0 !== r &&
                                r),
                            h = f[e.name] || !1,
                            p = (0, g.cn)(
                              "group relative flex items-center gap-2.5 rounded-2xl px-4 py-2.5 text-[15px] font-semibold transition-all duration-200",
                              "text-green hover:-translate-y-[1px] hover:shadow-[0_18px_30px_-22px_rgba(93,93,233,0.3)]",
                              u
                                ? "bg-orange-light text-primary shadow-[0_18px_40px_-22px_rgba(93,93,233,0.4)]"
                                : "bg-white/80 hover:bg-beige/50",
                            ),
                            j = (0, g.cn)(
                              "flex h-8 w-8 items-center justify-center rounded-lg text-white shadow-inner",
                              S(e.name),
                            );
                          return (
                            null === (a = e.children) || void 0 === a
                              ? void 0
                              : a.length
                          )
                            ? (0, t.jsxs)(
                                "div",
                                {
                                  children: [
                                    (0, t.jsxs)("button", {
                                      onClick: () => b(e.name),
                                      className: (0, g.cn)(
                                        p,
                                        "w-full text-left",
                                      ),
                                      children: [
                                        (0, t.jsxs)("div", {
                                          className: "flex items-center gap-3",
                                          children: [
                                            (0, t.jsx)("div", {
                                              className: j,
                                              children: (0, t.jsx)(x, {
                                                className: "h-4 w-4",
                                              }),
                                            }),
                                            (0, t.jsx)("span", {
                                              children: e.name,
                                            }),
                                          ],
                                        }),
                                        e.badge &&
                                          (0, t.jsx)(C.E, {
                                            variant:
                                              e.badge.variant || "default",
                                            className:
                                              "ml-2 rounded-full bg-white/80 text-xs font-semibold text-primary shadow-sm",
                                            children: e.badge.text,
                                          }),
                                        (0, t.jsx)(k.A, {
                                          className: (0, g.cn)(
                                            "ml-2 h-4 w-4 transition-transform duration-200",
                                            h && "rotate-90",
                                          ),
                                        }),
                                      ],
                                    }),
                                    (0, t.jsx)(n.N, {
                                      children:
                                        h &&
                                        (0, t.jsx)(l.P.div, {
                                          initial: { opacity: 0, height: 0 },
                                          animate: {
                                            opacity: 1,
                                            height: "auto",
                                          },
                                          exit: { opacity: 0, height: 0 },
                                          transition: { duration: 0.18 },
                                          className:
                                            "mobile-panel-scrollbar mt-2 flex flex-col gap-1 rounded-2xl bg-beige/30 p-2 shadow-inner max-h-[340px] overflow-y-auto",
                                          children:
                                            "Tools" === e.name
                                              ? (0, t.jsxs)(t.Fragment, {
                                                  children: [
                                                    e.children
                                                      .filter((e) => e.featured)
                                                      .map((e) => {
                                                        let s = e.icon,
                                                          a = o === e.name;
                                                        return (0, t.jsxs)(
                                                          d(),
                                                          {
                                                            href: e.url,
                                                            onClick: () => {
                                                              (m(e.name), i());
                                                            },
                                                            className: (0,
                                                            g.cn)(
                                                              "flex items-center gap-3 rounded-xl px-3 py-2.5 transition-all duration-200",
                                                              "text-green hover:bg-white",
                                                              a &&
                                                                "bg-orange-light text-primary",
                                                            ),
                                                            children: [
                                                              (0, t.jsx)(
                                                                "div",
                                                                {
                                                                  className:
                                                                    "flex h-9 w-9 items-center justify-center rounded-xl bg-primary text-white shadow-sm shrink-0",
                                                                  children: (0,
                                                                  t.jsx)(s, {
                                                                    className:
                                                                      "h-4 w-4",
                                                                  }),
                                                                },
                                                              ),
                                                              (0, t.jsx)(
                                                                "span",
                                                                {
                                                                  className:
                                                                    "text-sm font-semibold",
                                                                  children:
                                                                    e.name,
                                                                },
                                                              ),
                                                            ],
                                                          },
                                                          e.name,
                                                        );
                                                      }),
                                                    (0, t.jsxs)(d(), {
                                                      href: "/tools",
                                                      onClick: () => {
                                                        (m("Tools"), i());
                                                      },
                                                      className: (0, g.cn)(
                                                        "flex items-center justify-center gap-2 mt-2 py-2.5 px-4 rounded-full",
                                                        "bg-primary text-white",
                                                        "hover:bg-primary/90",
                                                        "text-sm font-semibold transition-all duration-200",
                                                      ),
                                                      children: [
                                                        (0, t.jsx)("span", {
                                                          children:
                                                            "View All 13 Tools",
                                                        }),
                                                        (0, t.jsx)(c.A, {
                                                          className: "h-4 w-4",
                                                        }),
                                                      ],
                                                    }),
                                                  ],
                                                })
                                              : "Sectors" === e.name
                                                ? (0, t.jsxs)(t.Fragment, {
                                                    children: [
                                                      e.children
                                                        .filter(
                                                          (e) => e.featured,
                                                        )
                                                        .map((e) => {
                                                          let s = e.icon,
                                                            a = o === e.name;
                                                          return (0, t.jsxs)(
                                                            d(),
                                                            {
                                                              href: e.url,
                                                              onClick: () => {
                                                                (m(e.name),
                                                                  i());
                                                              },
                                                              className: (0,
                                                              g.cn)(
                                                                "flex items-center gap-3 rounded-xl px-3 py-2.5 transition-all duration-200",
                                                                "text-green hover:bg-white",
                                                                a &&
                                                                  "bg-orange-light text-primary",
                                                              ),
                                                              children: [
                                                                (0, t.jsx)(
                                                                  "div",
                                                                  {
                                                                    className:
                                                                      "flex h-9 w-9 items-center justify-center rounded-xl bg-primary text-white shadow-sm shrink-0",
                                                                    children:
                                                                      (0,
                                                                      t.jsx)(
                                                                        s,
                                                                        {
                                                                          className:
                                                                            "h-4 w-4",
                                                                        },
                                                                      ),
                                                                  },
                                                                ),
                                                                (0, t.jsx)(
                                                                  "span",
                                                                  {
                                                                    className:
                                                                      "text-sm font-semibold",
                                                                    children:
                                                                      e.name,
                                                                  },
                                                                ),
                                                              ],
                                                            },
                                                            e.name,
                                                          );
                                                        }),
                                                      (0, t.jsxs)(d(), {
                                                        href: "/sectors",
                                                        onClick: () => {
                                                          (m("Sectors"), i());
                                                        },
                                                        className: (0, g.cn)(
                                                          "flex items-center justify-center gap-2 mt-2 py-2.5 px-4 rounded-full",
                                                          "bg-primary text-white",
                                                          "hover:bg-primary/90",
                                                          "text-sm font-semibold transition-all duration-200",
                                                        ),
                                                        children: [
                                                          (0, t.jsx)("span", {
                                                            children:
                                                              "View All 15 Sectors",
                                                          }),
                                                          (0, t.jsx)(c.A, {
                                                            className:
                                                              "h-4 w-4",
                                                          }),
                                                        ],
                                                      }),
                                                    ],
                                                  })
                                                : e.children.map((e) => {
                                                    let s = e.icon,
                                                      a = o === e.name,
                                                      r = (0, g.cn)(
                                                        "flex h-7 w-7 items-center justify-center rounded-lg text-white shadow-inner",
                                                        S(e.name),
                                                      );
                                                    return (0, t.jsxs)(
                                                      d(),
                                                      {
                                                        href: e.url,
                                                        onClick: () => {
                                                          (m(e.name), i());
                                                        },
                                                        className: (0, g.cn)(
                                                          "flex items-center gap-3 rounded-xl px-3 py-1.5 text-sm font-medium transition-all duration-200",
                                                          "text-green hover:bg-white",
                                                          a &&
                                                            "bg-orange-light text-primary",
                                                        ),
                                                        children: [
                                                          (0, t.jsx)("div", {
                                                            className: r,
                                                            children: (0,
                                                            t.jsx)(s, {
                                                              className:
                                                                "h-4 w-4",
                                                            }),
                                                          }),
                                                          (0, t.jsx)("span", {
                                                            children: e.name,
                                                          }),
                                                        ],
                                                      },
                                                      e.name,
                                                    );
                                                  }),
                                        }),
                                    }),
                                  ],
                                },
                                e.name,
                              )
                            : (0, t.jsxs)(
                                d(),
                                {
                                  href: e.url,
                                  onClick: () => {
                                    (m(e.name), i());
                                  },
                                  className: p,
                                  children: [
                                    (0, t.jsx)("div", {
                                      className: j,
                                      children: (0, t.jsx)(x, {
                                        className: "h-4 w-4",
                                      }),
                                    }),
                                    (0, t.jsx)("span", {
                                      className: "flex-1 text-left",
                                      children: e.name,
                                    }),
                                    e.badge &&
                                      (0, t.jsx)(C.E, {
                                        variant: e.badge.variant || "default",
                                        className:
                                          "ml-2 rounded-full bg-white/80 text-xs font-semibold text-primary shadow-sm",
                                        children: e.badge.text,
                                      }),
                                  ],
                                },
                                e.name,
                              );
                        }),
                      }),
                      (0, t.jsx)("div", {
                        className:
                          "mt-4 rounded-2xl bg-beige/30 p-2 shadow-inner backdrop-blur-sm",
                        children: (0, t.jsx)(j.$, {
                          asChild: !0,
                          className:
                            "h-11 w-full rounded-xl bg-primary text-primary-foreground hover:bg-primary/90",
                          children: u
                            ? (0, t.jsxs)(d(), {
                                href: "/dashboard",
                                onClick: i,
                                children: [
                                  (0, t.jsx)(x.A, {
                                    className: "mr-2 h-4 w-4",
                                  }),
                                  "Go to Dashboard",
                                ],
                              })
                            : (0, t.jsxs)(d(), {
                                href: "/auth",
                                onClick: i,
                                children: [
                                  (0, t.jsx)(E.A, {
                                    className: "mr-2 h-4 w-4",
                                  }),
                                  "Login / Sign Up",
                                ],
                              }),
                        }),
                      }),
                    ],
                  }),
                }),
              ],
            }),
        });
      }
      var F = a(48242),
        z = a(82810);
      let L = z.bL,
        _ = z.l9,
        T = r.forwardRef((e, s) => {
          let {
            className: a,
            align: r = "center",
            sideOffset: l = 4,
            ...n
          } = e;
          return (0, t.jsx)(z.UC, {
            ref: s,
            align: r,
            sideOffset: l,
            className: (0, g.cn)(
              "z-50 w-64 rounded-xl border border-border bg-white p-4 text-foreground shadow-lg outline-none data-[state=open]:animate-in data-[state=closed]:animate-out data-[state=closed]:fade-out-0 data-[state=open]:fade-in-0 data-[state=closed]:zoom-out-95 data-[state=open]:zoom-in-95 data-[side=bottom]:slide-in-from-top-2 data-[side=left]:slide-in-from-right-2 data-[side=right]:slide-in-from-left-2 data-[side=top]:slide-in-from-bottom-2 origin-[--radix-hover-card-content-transform-origin]",
              a,
            ),
            ...n,
          });
        });
      T.displayName = z.UC.displayName;
      var D = a(54604),
        I = a(96196);
      let P = (e) => "bg-primary/90";
      function U(e) {
        let { items: s, className: a, locale: i = "en" } = e,
          k = (0, w.usePathname)(),
          [E, A] = (0, r.useState)(""),
          [S, z] = (0, r.useState)(!1),
          [U, O] = (0, r.useState)(!1),
          [M, B] = (0, r.useState)(!1),
          [V, $] = (0, r.useState)(null),
          G = (0, D.createClientComponentClient)(),
          [q, J] = (0, r.useState)(!1),
          [W, X] = (0, r.useState)(!1),
          [Z, Y] = (0, r.useState)(!1),
          [H, K] = (0, r.useState)(!1);
        (0, r.useEffect)(() => {
          let e = () => {
            setTimeout(() => {
              K(!0);
            }, 100);
          };
          if ("complete" !== document.readyState)
            return (
              window.addEventListener("load", e),
              () => window.removeEventListener("load", e)
            );
          e();
        }, []);
        let Q = async (e, s) => {
            try {
              await fetch("/api/feedback/submit", {
                method: "POST",
                headers: { "Content-Type": "application/json" },
                body: JSON.stringify({
                  feature_name: "redesign-2025",
                  feedback_type: e,
                  feedback_text: s || null,
                  page_url: k,
                }),
              });
            } catch (e) {
              console.error("Failed to save feedback:", e);
            }
          },
          ee = async (e) => {
            let s = e ? "positive" : "negative";
            (localStorage.setItem("redesign-feedback", s),
              await Q(s),
              e
                ? (X(!0),
                  setTimeout(() => {
                    J(!1);
                  }, 2e3))
                : (Y(!0),
                  X(!0),
                  setTimeout(() => {
                    J(!1);
                  }, 2e3)));
          },
          es = async (e) => {
            await Q("negative", e);
          };
        ((0, r.useEffect)(() => {
          O(!0);
          let e = function (s) {
              let a =
                !(arguments.length > 1) ||
                void 0 === arguments[1] ||
                arguments[1];
              for (let r of s) {
                var t;
                if (k === r.url) return r;
                if (
                  null === (t = r.children) || void 0 === t ? void 0 : t.length
                ) {
                  let s = e(r.children, !1);
                  if (s) return a ? r : s;
                }
                if (
                  ("/" !== r.url && "/de" !== r.url && k.startsWith(r.url)) ||
                  ("/" === r.url && "/" === k) ||
                  ("/de" === r.url && "/de" === k)
                )
                  return r;
              }
            },
            a = e(s, !0);
          A((null == a ? void 0 : a.name) || s[0].name);
        }, [k, s]),
          (0, r.useEffect)(() => {
            U && B(!0);
          }, [U]),
          (0, r.useEffect)(() => {
            (async () => {
              let {
                data: { session: e },
              } = await G.auth.getSession();
              $((null == e ? void 0 : e.user) || null);
            })();
            let {
              data: { subscription: e },
            } = G.auth.onAuthStateChange((e, s) => {
              $((null == s ? void 0 : s.user) || null);
            });
            return () => {
              e.unsubscribe();
            };
          }, [G]));
        let ea = (0, v.d)(k);
        return (0, t.jsxs)(t.Fragment, {
          children: [
            (0, t.jsxs)("div", {
              className: "relative w-full",
              children: [
                (0, t.jsx)("div", {
                  className: (0, g.cn)(
                    "w-full hidden sm:block transition-all duration-300",
                    "h-24",
                  ),
                }),
                (0, t.jsx)("div", {
                  className: (0, g.cn)(
                    "fixed left-0 right-0 z-50 pt-5 pb-5 w-full hidden sm:block transition-all duration-300",
                    "top-0",
                    a,
                  ),
                  children: (0, t.jsxs)("div", {
                    className:
                      "flex items-center justify-center gap-1 md:gap-3 px-2",
                    children: [
                      (0, t.jsxs)("div", {
                        className: (0, g.cn)(
                          "flex items-center bg-background/80 border border-border backdrop-blur-lg py-0.5 px-1 md:px-1.5 rounded-full shadow-lg relative z-10",
                          "de" === i ? "gap-1 md:gap-2" : "gap-1 md:gap-3",
                        ),
                        children: [
                          (0, t.jsx)("div", {
                            className: "px-0.5 md:px-1",
                            children:
                              U && M
                                ? (0, t.jsx)(y.Logo, {
                                    locale: i,
                                    iconSize: "md",
                                    className: "px-0",
                                  })
                                : (0, t.jsx)("div", {
                                    className:
                                      "h-10 w-full flex items-center justify-center",
                                    children: (0, t.jsx)(N.E, {
                                      variant: "primary",
                                      className: "h-6 w-[140px]",
                                    }),
                                  }),
                          }),
                          s.map((e, s) => {
                            var a, r, n, m, x, u, h;
                            e.icon;
                            let f =
                                E === e.name ||
                                (null !==
                                  (n =
                                    null === (a = e.children) || void 0 === a
                                      ? void 0
                                      : a.some((e) => e.name === E)) &&
                                  void 0 !== n &&
                                  n),
                              p =
                                "de" !== i && ["Sectors"].includes(e.name)
                                  ? "hidden xl:block"
                                  : "";
                            return (
                              null === (r = e.children) || void 0 === r
                                ? void 0
                                : r.length
                            )
                              ? (0, t.jsx)(
                                  "div",
                                  {
                                    className: (0, g.cn)(
                                      p,
                                      0 === s && "ml-2 md:ml-3",
                                    ),
                                    children: (0, t.jsxs)(L, {
                                      openDelay: 100,
                                      closeDelay: 50,
                                      children: [
                                        (0, t.jsx)(_, {
                                          asChild: !0,
                                          children: (0, t.jsxs)("button", {
                                            className: (0, g.cn)(
                                              "relative cursor-pointer text-sm font-semibold py-2 rounded-full transition-colors flex items-center",
                                              "text-foreground/80 hover:text-primary",
                                              f && "bg-muted text-primary",
                                              "de" === i
                                                ? "px-2 md:px-4"
                                                : "px-3 md:px-6",
                                            ),
                                            children: [
                                              (0, t.jsx)("span", {
                                                children: e.name,
                                              }),
                                              (0, t.jsx)(o.A, {
                                                className: "ml-1 h-4 w-4",
                                              }),
                                              f &&
                                                (0, t.jsx)(l.P.div, {
                                                  layoutId: "lamp",
                                                  className:
                                                    "absolute inset-0 w-full bg-primary/5 rounded-full -z-10",
                                                  initial: !1,
                                                  transition: {
                                                    type: "spring",
                                                    stiffness: 300,
                                                    damping: 30,
                                                  },
                                                  children: (0, t.jsx)("div", {
                                                    className:
                                                      "absolute -top-2 left-1/2 -translate-x-1/2 w-8 h-1 bg-primary rounded-t-full",
                                                  }),
                                                }),
                                            ],
                                          }),
                                        }),
                                        (0, t.jsx)(T, {
                                          className: (0, g.cn)(
                                            "p-0 w-auto border-0 shadow-xl",
                                            "Tools" === e.name &&
                                              "min-w-[480px] p-1.5",
                                            "Sectors" === e.name &&
                                              "min-w-[480px] p-1.5",
                                            ("Learn" === e.name ||
                                              "Study Guide" === e.name ||
                                              "Studienf\xfchrer" === e.name) &&
                                              "min-w-[480px] p-1.5",
                                            "Tools" !== e.name &&
                                              "Sectors" !== e.name &&
                                              "Learn" !== e.name &&
                                              "Study Guide" !== e.name &&
                                              "Studienf\xfchrer" !== e.name &&
                                              "min-w-[220px] p-1.5",
                                          ),
                                          sideOffset: 10,
                                          align: "start",
                                          children:
                                            "Tools" === e.name
                                              ? (0, t.jsxs)(t.Fragment, {
                                                  children: [
                                                    (0, t.jsx)("div", {
                                                      className: "px-2 py-1",
                                                      children: (0, t.jsx)(
                                                        "h4",
                                                        {
                                                          className:
                                                            "text-sm font-medium text-foreground/80 mb-0.5",
                                                          children: "Tools",
                                                        },
                                                      ),
                                                    }),
                                                    (0, t.jsx)("div", {
                                                      className:
                                                        "grid grid-cols-2 gap-1",
                                                      children:
                                                        null ===
                                                          (m = e.children) ||
                                                        void 0 === m
                                                          ? void 0
                                                          : m
                                                              .filter(
                                                                (e) =>
                                                                  e.featured,
                                                              )
                                                              .map((e) => {
                                                                let s = e.icon;
                                                                return (
                                                                  e.name,
                                                                  (0, t.jsxs)(
                                                                    d(),
                                                                    {
                                                                      href: e.url,
                                                                      className:
                                                                        "flex items-center gap-2.5 px-2 py-2 rounded-md hover:bg-accent w-full text-sm text-foreground",
                                                                      children:
                                                                        [
                                                                          (0,
                                                                          t.jsx)(
                                                                            "div",
                                                                            {
                                                                              className:
                                                                                "flex items-center justify-center h-7 w-7 rounded-md bg-primary",
                                                                              children:
                                                                                (0,
                                                                                t.jsx)(
                                                                                  s,
                                                                                  {
                                                                                    className:
                                                                                      "h-4 w-4 text-white",
                                                                                  },
                                                                                ),
                                                                            },
                                                                          ),
                                                                          (0,
                                                                          t.jsx)(
                                                                            "span",
                                                                            {
                                                                              className:
                                                                                "font-medium",
                                                                              children:
                                                                                e.name,
                                                                            },
                                                                          ),
                                                                        ],
                                                                    },
                                                                    e.name,
                                                                  )
                                                                );
                                                              }),
                                                    }),
                                                    (0, t.jsx)("div", {
                                                      className:
                                                        "px-2 pt-2 pb-1.5",
                                                      children: (0, t.jsxs)(
                                                        d(),
                                                        {
                                                          href: "/tools",
                                                          className:
                                                            "flex items-center justify-center gap-2 py-2.5 rounded-full bg-primary text-white hover:bg-primary/90 text-sm font-medium",
                                                          children: [
                                                            (0, t.jsx)("span", {
                                                              children:
                                                                "View All 13 Tools",
                                                            }),
                                                            (0, t.jsx)(c.A, {
                                                              className:
                                                                "h-3.5 w-3.5",
                                                            }),
                                                          ],
                                                        },
                                                      ),
                                                    }),
                                                  ],
                                                })
                                              : "Sectors" === e.name
                                                ? (0, t.jsxs)(t.Fragment, {
                                                    children: [
                                                      (0, t.jsx)("div", {
                                                        className: "px-2 py-1",
                                                        children: (0, t.jsx)(
                                                          "h4",
                                                          {
                                                            className:
                                                              "text-sm font-medium text-foreground/80 mb-0.5",
                                                            children: "Sectors",
                                                          },
                                                        ),
                                                      }),
                                                      (0, t.jsx)("div", {
                                                        className:
                                                          "grid grid-cols-2 gap-1",
                                                        children:
                                                          null ===
                                                            (x = e.children) ||
                                                          void 0 === x
                                                            ? void 0
                                                            : x
                                                                .filter(
                                                                  (e) =>
                                                                    e.featured,
                                                                )
                                                                .map((e) => {
                                                                  let s =
                                                                    e.icon;
                                                                  return (0,
                                                                  t.jsxs)(
                                                                    d(),
                                                                    {
                                                                      href: e.url,
                                                                      className:
                                                                        "flex items-center gap-2.5 px-2 py-2 rounded-md hover:bg-accent w-full text-sm text-foreground",
                                                                      children:
                                                                        [
                                                                          (0,
                                                                          t.jsx)(
                                                                            "div",
                                                                            {
                                                                              className:
                                                                                "flex items-center justify-center h-7 w-7 rounded-md bg-primary",
                                                                              children:
                                                                                (0,
                                                                                t.jsx)(
                                                                                  s,
                                                                                  {
                                                                                    className:
                                                                                      "h-4 w-4 text-white",
                                                                                  },
                                                                                ),
                                                                            },
                                                                          ),
                                                                          (0,
                                                                          t.jsx)(
                                                                            "span",
                                                                            {
                                                                              className:
                                                                                "font-medium",
                                                                              children:
                                                                                e.name,
                                                                            },
                                                                          ),
                                                                        ],
                                                                    },
                                                                    e.name,
                                                                  );
                                                                }),
                                                      }),
                                                      (0, t.jsx)("div", {
                                                        className:
                                                          "px-2 pt-2 pb-1.5",
                                                        children: (0, t.jsxs)(
                                                          d(),
                                                          {
                                                            href: "/sectors",
                                                            className:
                                                              "flex items-center justify-center gap-2 py-2.5 rounded-full bg-primary text-white hover:bg-primary/90 text-sm font-medium",
                                                            children: [
                                                              (0, t.jsx)(
                                                                "span",
                                                                {
                                                                  children:
                                                                    "View All 15 Sectors",
                                                                },
                                                              ),
                                                              (0, t.jsx)(c.A, {
                                                                className:
                                                                  "h-3.5 w-3.5",
                                                              }),
                                                            ],
                                                          },
                                                        ),
                                                      }),
                                                    ],
                                                  })
                                                : "Learn" === e.name ||
                                                    "Study Guide" === e.name ||
                                                    "Studienf\xfchrer" ===
                                                      e.name
                                                  ? (0, t.jsxs)(t.Fragment, {
                                                      children: [
                                                        (0, t.jsx)("div", {
                                                          className:
                                                            "px-2 py-1",
                                                          children: (0, t.jsx)(
                                                            "h4",
                                                            {
                                                              className:
                                                                "text-sm font-medium text-foreground/80 mb-0.5",
                                                              children: e.name,
                                                            },
                                                          ),
                                                        }),
                                                        (0, t.jsx)("div", {
                                                          className:
                                                            "grid grid-cols-2 gap-1",
                                                          children:
                                                            null ===
                                                              (u =
                                                                e.children) ||
                                                            void 0 === u
                                                              ? void 0
                                                              : u.map((e) => {
                                                                  let s =
                                                                      e.icon,
                                                                    a = P(
                                                                      e.name,
                                                                    );
                                                                  return (0,
                                                                  t.jsxs)(
                                                                    d(),
                                                                    {
                                                                      href: e.url,
                                                                      className:
                                                                        "flex items-center gap-2.5 px-2 py-2 rounded-md hover:bg-accent w-full text-sm text-foreground",
                                                                      children:
                                                                        [
                                                                          (0,
                                                                          t.jsx)(
                                                                            "div",
                                                                            {
                                                                              className:
                                                                                "flex items-center justify-center h-7 w-7 rounded-md ".concat(
                                                                                  a,
                                                                                ),
                                                                              children:
                                                                                (0,
                                                                                t.jsx)(
                                                                                  s,
                                                                                  {
                                                                                    className:
                                                                                      "h-4 w-4 text-white",
                                                                                  },
                                                                                ),
                                                                            },
                                                                          ),
                                                                          (0,
                                                                          t.jsx)(
                                                                            "span",
                                                                            {
                                                                              className:
                                                                                "font-medium",
                                                                              children:
                                                                                e.name,
                                                                            },
                                                                          ),
                                                                        ],
                                                                    },
                                                                    e.name,
                                                                  );
                                                                }),
                                                        }),
                                                      ],
                                                    })
                                                  : (0, t.jsxs)(t.Fragment, {
                                                      children: [
                                                        (0, t.jsx)("div", {
                                                          className:
                                                            "px-2 py-1",
                                                          children: (0, t.jsx)(
                                                            "h4",
                                                            {
                                                              className:
                                                                "text-sm font-medium text-foreground/80 mb-0.5",
                                                              children: e.name,
                                                            },
                                                          ),
                                                        }),
                                                        (0, t.jsx)("div", {
                                                          className:
                                                            "flex flex-col gap-1",
                                                          children:
                                                            null ===
                                                              (h =
                                                                e.children) ||
                                                            void 0 === h
                                                              ? void 0
                                                              : h.map((e) => {
                                                                  let s =
                                                                      e.icon,
                                                                    a = P(
                                                                      e.name,
                                                                    );
                                                                  return (0,
                                                                  t.jsxs)(
                                                                    d(),
                                                                    {
                                                                      href: e.url,
                                                                      className:
                                                                        "flex items-center gap-2.5 px-2 py-2 rounded-md hover:bg-accent w-full text-sm text-foreground",
                                                                      children:
                                                                        [
                                                                          (0,
                                                                          t.jsx)(
                                                                            "div",
                                                                            {
                                                                              className:
                                                                                "flex items-center justify-center h-7 w-7 rounded-md ".concat(
                                                                                  a,
                                                                                ),
                                                                              children:
                                                                                (0,
                                                                                t.jsx)(
                                                                                  s,
                                                                                  {
                                                                                    className:
                                                                                      "h-4 w-4 text-white",
                                                                                  },
                                                                                ),
                                                                            },
                                                                          ),
                                                                          (0,
                                                                          t.jsx)(
                                                                            "span",
                                                                            {
                                                                              className:
                                                                                "font-medium",
                                                                              children:
                                                                                e.name,
                                                                            },
                                                                          ),
                                                                        ],
                                                                    },
                                                                    e.name,
                                                                  );
                                                                }),
                                                        }),
                                                      ],
                                                    }),
                                        }),
                                      ],
                                    }),
                                  },
                                  e.name,
                                )
                              : (0, t.jsxs)(
                                  "div",
                                  {
                                    className: (0, g.cn)(
                                      "relative",
                                      p,
                                      0 === s && "ml-2 md:ml-3",
                                    ),
                                    children: [
                                      (0, t.jsxs)(d(), {
                                        href: e.url,
                                        onClick: () => A(e.name),
                                        className: (0, g.cn)(
                                          "relative cursor-pointer text-sm font-semibold py-2 rounded-full transition-colors",
                                          "text-foreground/80 hover:text-primary",
                                          f && "bg-muted text-primary",
                                          "de" === i
                                            ? "px-2 md:px-4"
                                            : "px-3 md:px-6",
                                        ),
                                        children: [
                                          (0, t.jsx)("span", {
                                            children: e.name,
                                          }),
                                          f &&
                                            (0, t.jsx)(l.P.div, {
                                              layoutId: "lamp",
                                              className:
                                                "absolute inset-0 w-full bg-primary/5 rounded-full -z-10",
                                              initial: !1,
                                              transition: {
                                                type: "spring",
                                                stiffness: 300,
                                                damping: 30,
                                              },
                                              children: (0, t.jsx)("div", {
                                                className:
                                                  "absolute -top-2 left-1/2 -translate-x-1/2 w-8 h-1 bg-primary rounded-t-full",
                                              }),
                                            }),
                                        ],
                                      }),
                                      e.badge &&
                                        (0, t.jsx)(C.E, {
                                          variant: e.badge.variant || "default",
                                          className:
                                            "absolute -top-1 -right-2 scale-90",
                                          children: e.badge.text,
                                        }),
                                    ],
                                  },
                                  e.name,
                                );
                          }),
                          "en" === i &&
                            (0, t.jsx)("div", {
                              className: "block xl:hidden",
                              children: (0, t.jsxs)(F.rI, {
                                children: [
                                  (0, t.jsx)(F.ty, {
                                    asChild: !0,
                                    children: (0, t.jsx)("button", {
                                      className: (0, g.cn)(
                                        "relative cursor-pointer text-sm font-semibold px-3 py-2 rounded-full transition-colors flex items-center",
                                        "text-foreground/80 hover:text-primary hover:bg-muted",
                                      ),
                                      children: (0, t.jsx)(m.A, {
                                        className: "h-4 w-4",
                                      }),
                                    }),
                                  }),
                                  (0, t.jsx)(F.SQ, {
                                    align: "end",
                                    className: "w-48",
                                    children: s
                                      .filter((e) =>
                                        ["Sectors"].includes(e.name),
                                      )
                                      .map((e) => {
                                        var s, a;
                                        let r = e.icon,
                                          l =
                                            E === e.name ||
                                            (null !==
                                              (a =
                                                null === (s = e.children) ||
                                                void 0 === s
                                                  ? void 0
                                                  : s.some(
                                                      (e) => e.name === E,
                                                    )) &&
                                              void 0 !== a &&
                                              a);
                                        return (0, t.jsx)(
                                          F._2,
                                          {
                                            asChild: !0,
                                            children: (0, t.jsxs)(d(), {
                                              href: e.url,
                                              onClick: () => A(e.name),
                                              className: (0, g.cn)(
                                                "flex items-center gap-2 w-full",
                                                l && "text-primary font-medium",
                                              ),
                                              children: [
                                                (0, t.jsx)(r, {
                                                  className: "h-4 w-4",
                                                }),
                                                (0, t.jsx)("span", {
                                                  children: e.name,
                                                }),
                                                e.badge &&
                                                  (0, t.jsx)(C.E, {
                                                    variant:
                                                      e.badge.variant ||
                                                      "default",
                                                    className:
                                                      "ml-auto scale-75",
                                                    children: e.badge.text,
                                                  }),
                                              ],
                                            }),
                                          },
                                          e.name,
                                        );
                                      }),
                                  }),
                                ],
                              }),
                            }),
                          V
                            ? (0, t.jsxs)(d(), {
                                href: "/dashboard",
                                className: (0, g.cn)(
                                  "flex items-center justify-center gap-2 bg-primary hover:bg-primary/95 px-3 md:px-5 py-2 rounded-full text-sm font-medium transition-colors text-primary-foreground border border-primary/20",
                                  "ml-2 md:ml-3",
                                ),
                                children: [
                                  (0, t.jsx)(x.A, { className: "w-4 h-4" }),
                                  (0, t.jsx)("span", {
                                    className: "hidden sm:inline",
                                    children: "Dashboard",
                                  }),
                                ],
                              })
                            : (0, t.jsxs)(d(), {
                                href: "/auth",
                                className: (0, g.cn)(
                                  "flex items-center justify-center gap-2 bg-primary hover:bg-primary/95 px-3 md:px-5 py-2 rounded-full text-sm font-medium transition-colors text-primary-foreground border border-primary/20",
                                  "ml-2 md:ml-3",
                                ),
                                children: [
                                  (0, t.jsx)("span", {
                                    children: "Get Started",
                                  }),
                                  (0, t.jsx)(c.A, { className: "w-4 h-4" }),
                                ],
                              }),
                          (0, t.jsxs)(d(), {
                            href: "/consultation",
                            className: (0, g.cn)(
                              "flex items-center justify-center gap-2 px-3 md:px-5 py-2 rounded-full text-sm font-medium transition-colors",
                              "bg-[#5D5DE9] hover:bg-[#2C3340] text-white",
                              "ml-1 md:ml-2",
                            ),
                            children: [
                              (0, t.jsx)(u.A, { className: "w-4 h-4" }),
                              (0, t.jsx)("span", { children: "Apply For Me" }),
                            ],
                          }),
                          (0, t.jsx)(n.N, {
                            children:
                              q &&
                              H &&
                              (0, t.jsx)(l.P.div, {
                                initial: { y: -60, opacity: 0 },
                                animate: { y: 0, opacity: 1 },
                                exit: { y: -60, opacity: 0 },
                                transition: {
                                  duration: 0.5,
                                  ease: "easeOut",
                                  delay: 0.2,
                                },
                                className:
                                  "absolute left-0 right-0 mx-auto top-full mt-[2px] w-[600px] max-w-[90vw] -z-20",
                                children: (0, t.jsx)("div", {
                                  className:
                                    "bg-orange-hover text-white px-6 py-3 rounded-b-3xl border border-orange-hover/20 shadow-lg",
                                  children: (0, t.jsxs)("div", {
                                    className:
                                      "flex items-center justify-between gap-4",
                                    children: [
                                      (0, t.jsx)("p", {
                                        className: "text-sm font-medium flex-1",
                                        children:
                                          "We've refreshed our design. Like it?",
                                      }),
                                      W
                                        ? (0, t.jsx)("p", {
                                            className: "text-sm font-medium",
                                            children:
                                              "Thanks for your feedback!",
                                          })
                                        : (0, t.jsxs)("div", {
                                            className:
                                              "flex items-center gap-2",
                                            children: [
                                              (0, t.jsx)("button", {
                                                onClick: () => ee(!0),
                                                className:
                                                  "p-2 hover:bg-white/20 rounded-full transition-colors",
                                                "aria-label":
                                                  "Like the new design",
                                                children: (0, t.jsx)(h.A, {
                                                  className: "w-5 h-5",
                                                }),
                                              }),
                                              (0, t.jsx)("button", {
                                                onClick: () => ee(!1),
                                                className:
                                                  "p-2 hover:bg-white/20 rounded-full transition-colors",
                                                "aria-label":
                                                  "Dislike the new design",
                                                children: (0, t.jsx)(f.A, {
                                                  className: "w-5 h-5",
                                                }),
                                              }),
                                              (0, t.jsx)("button", {
                                                onClick: () => {
                                                  (J(!1),
                                                    localStorage.setItem(
                                                      "redesign-banner-dismissed",
                                                      "true",
                                                    ));
                                                },
                                                className:
                                                  "p-2 hover:bg-white/20 rounded-full transition-colors ml-2",
                                                "aria-label": "Dismiss",
                                                children: (0, t.jsx)(p.A, {
                                                  className: "w-5 h-5",
                                                }),
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
                      ea &&
                        (0, t.jsx)("div", {
                          className:
                            "bg-background/80 border border-border backdrop-blur-lg w-10 h-10 rounded-full shadow-lg overflow-hidden",
                          children: U
                            ? (0, t.jsx)(v.J, {})
                            : (0, t.jsx)("div", {
                                className: "w-full h-full rounded-full",
                                children: (0, t.jsx)(N.E, {
                                  variant: "primary",
                                  className: "h-full w-full rounded-full",
                                }),
                              }),
                        }),
                    ],
                  }),
                }),
              ],
            }),
            (0, t.jsxs)(t.Fragment, {
              children: [
                (0, t.jsx)("div", {
                  className: (0, g.cn)(
                    "w-full block sm:hidden transition-all duration-300",
                    "h-[96px]",
                  ),
                }),
                (0, t.jsx)("div", {
                  className: (0, g.cn)(
                    "fixed left-0 right-0 z-50 sm:hidden transition-all duration-300",
                    "top-0",
                  ),
                  children: (0, t.jsx)("div", {
                    className: "flex w-full justify-center px-4 pt-3 pb-1",
                    children: (0, t.jsxs)("div", {
                      className: (0, g.cn)(
                        "relative flex w-full items-center rounded-full border border-border bg-background/80 px-2 py-1.5 shadow-lg backdrop-blur-lg",
                        ea
                          ? "max-w-[380px] justify-between"
                          : "max-w-[320px] justify-between",
                      ),
                      children: [
                        (0, t.jsx)(j.$, {
                          variant: "ghost",
                          size: "icon",
                          onClick: () => z((e) => !e),
                          className:
                            "h-10 w-10 rounded-full bg-transparent text-foreground transition hover:bg-muted flex-shrink-0",
                          "aria-label": "Toggle navigation menu",
                          children: (0, t.jsx)(b.A, { className: "h-5 w-5" }),
                        }),
                        (0, t.jsx)("div", {
                          className: "flex items-center justify-center flex-1",
                          children:
                            U && M
                              ? (0, t.jsx)(y.Logo, {
                                  locale: i,
                                  iconSize: "md",
                                  className:
                                    "drop-shadow-[0_4px_12px_rgba(0,0,0,0.15)]",
                                })
                              : (0, t.jsx)("div", {
                                  className:
                                    "h-10 w-full flex items-center justify-center",
                                  children: (0, t.jsx)(N.E, {
                                    variant: "primary",
                                    className: "h-6 w-[140px] rounded-full",
                                  }),
                                }),
                        }),
                        ea
                          ? (0, t.jsx)("div", {
                              className:
                                "flex h-10 w-10 items-center justify-center flex-shrink-0",
                              children: U
                                ? (0, t.jsx)(v.J, {})
                                : (0, t.jsx)(N.E, {
                                    variant: "primary",
                                    className:
                                      "h-full w-full rounded-full opacity-60",
                                  }),
                            })
                          : (0, t.jsx)("div", {
                              className: "w-10 flex-shrink-0",
                            }),
                      ],
                    }),
                  }),
                }),
              ],
            }),
            (0, t.jsx)(R, {
              items: s,
              isOpen: S,
              onClose: () => z(!1),
              activeTab: E,
              setActiveTab: A,
              user: V,
              topOffset: 88,
            }),
            (0, t.jsx)(I.B, {
              isOpen: Z,
              onClose: () => Y(!1),
              featureName: "redesign",
              onSubmit: es,
            }),
          ],
        });
      }
    },
    82822: (e, s, a) => {
      a.d(s, { b: () => d });
      var t = a(70207),
        r = a(87223),
        l = a(51613),
        n = a(51105),
        i = a(82110);
      function d(e) {
        let {
            value: s,
            onChange: a,
            options: d,
            placeholder: o = "Select an option",
            label: c,
            className: m,
          } = e,
          [x, u] = (0, r.useState)(!1),
          h = (0, r.useRef)(null);
        (0, r.useEffect)(() => {
          function e(e) {
            h.current && !h.current.contains(e.target) && u(!1);
          }
          return (
            document.addEventListener("mousedown", e),
            () => {
              document.removeEventListener("mousedown", e);
            }
          );
        }, []);
        let f = d.find((e) => e.value === s);
        return (0, t.jsxs)("div", {
          className: (0, i.cn)("relative", m),
          ref: h,
          children: [
            c &&
              (0, t.jsx)("label", {
                className: "text-sm font-medium mb-2 block text-secondary",
                children: c,
              }),
            (0, t.jsxs)("button", {
              type: "button",
              onClick: () => u(!x),
              className: (0, i.cn)(
                "w-full px-3 py-2.5 text-left bg-white border rounded-lg",
                "flex items-center justify-between",
                "hover:bg-cream transition-colors",
                "focus:outline-none focus:ring-2 focus:ring-primary focus:border-primary",
                x && "ring-2 ring-blue-500 border-primary",
              ),
              "aria-expanded": x,
              "aria-haspopup": "listbox",
              children: [
                (0, t.jsx)("span", {
                  className: (0, i.cn)(
                    "truncate",
                    !f && "text-muted-foreground",
                  ),
                  children: (null == f ? void 0 : f.label) || o,
                }),
                (0, t.jsx)(l.A, {
                  className: (0, i.cn)(
                    "h-4 w-4 text-muted-foreground transition-transform flex-shrink-0 ml-2",
                    x && "transform rotate-180",
                  ),
                }),
              ],
            }),
            x &&
              (0, t.jsx)("div", {
                className: (0, i.cn)(
                  "absolute z-50 w-full mt-1",
                  "bg-white border rounded-lg shadow-lg",
                  "max-h-60 overflow-auto",
                  "animate-in fade-in-0 zoom-in-95",
                ),
                children: (0, t.jsx)("ul", {
                  role: "listbox",
                  className: "py-1",
                  children: d.map((e) =>
                    (0, t.jsxs)(
                      "li",
                      {
                        role: "option",
                        "aria-selected": s === e.value,
                        onClick: () => {
                          (a(e.value), u(!1));
                        },
                        className: (0, i.cn)(
                          "px-3 py-2.5 cursor-pointer",
                          "hover:bg-beige transition-colors",
                          "flex items-center justify-between",
                          s === e.value && "bg-beige",
                        ),
                        children: [
                          (0, t.jsxs)("div", {
                            className: "flex flex-col",
                            children: [
                              (0, t.jsx)("span", {
                                className: (0, i.cn)(
                                  "text-sm font-medium",
                                  s === e.value
                                    ? "text-primary"
                                    : "text-secondary",
                                ),
                                children: e.label,
                              }),
                              e.description &&
                                (0, t.jsx)("span", {
                                  className:
                                    "text-xs text-muted-foreground mt-0.5",
                                  children: e.description,
                                }),
                            ],
                          }),
                          s === e.value &&
                            (0, t.jsx)(n.A, {
                              className:
                                "h-4 w-4 text-primary flex-shrink-0 ml-2",
                            }),
                        ],
                      },
                      e.value,
                    ),
                  ),
                }),
              }),
          ],
        });
      }
    },
    86850: (e, s, a) => {
      a.d(s, {
        Qg: () => u,
        Sb: () => f,
        US: () => c,
        aD: () => p,
        eC: () => h,
        tE: () => o,
        y8: () => x,
      });
      var t = a(70207),
        r = a(87223),
        l = a(10395),
        n = a(8128),
        i = a(39945),
        d = a(82110);
      let o = l.Kq,
        c = r.forwardRef((e, s) => {
          let { className: a, ...r } = e;
          return (0, t.jsx)(l.LM, {
            ref: s,
            className: (0, d.cn)(
              "fixed top-0 z-[100] flex max-h-screen w-full flex-col-reverse p-4 sm:bottom-0 sm:right-0 sm:top-auto sm:flex-col md:max-w-[420px]",
              a,
            ),
            ...r,
          });
        });
      c.displayName = l.LM.displayName;
      let m = (0, n.F)(
          "group pointer-events-auto relative flex w-full items-center justify-between space-x-4 overflow-hidden rounded-xl border border-border p-6 pr-8 shadow-lg transition-all data-[swipe=cancel]:translate-x-0 data-[swipe=end]:translate-x-[var(--radix-toast-swipe-end-x)] data-[swipe=move]:translate-x-[var(--radix-toast-swipe-move-x)] data-[swipe=move]:transition-none data-[state=open]:animate-in data-[state=closed]:animate-out data-[swipe=end]:animate-out data-[state=closed]:fade-out-80 data-[state=open]:slide-in-from-top-full data-[state=open]:sm:slide-in-from-bottom-full data-[state=closed]:slide-out-to-right-full",
          {
            variants: {
              variant: {
                default: "bg-white text-foreground",
                destructive:
                  "destructive group border-red-500 bg-red-50 text-red-900",
                success: "border-green bg-green/10 text-green",
              },
            },
            defaultVariants: { variant: "default" },
          },
        ),
        x = r.forwardRef((e, s) => {
          let { className: a, variant: r, ...n } = e;
          return (0, t.jsx)(l.bL, {
            ref: s,
            className: (0, d.cn)(m({ variant: r }), a),
            ...n,
          });
        });
      x.displayName = l.bL.displayName;
      let u = r.forwardRef((e, s) => {
        let { className: a, ...r } = e;
        return (0, t.jsx)(l.rc, {
          ref: s,
          className: (0, d.cn)(
            "inline-flex h-8 shrink-0 items-center justify-center rounded-full border-2 border-primary bg-transparent px-4 text-sm font-semibold text-primary ring-offset-background transition-all duration-200 hover:bg-primary hover:text-white focus:outline-none focus:ring-2 focus:ring-primary focus:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 group-[.destructive]:border-red-500 group-[.destructive]:text-red-700 group-[.destructive]:hover:bg-red-500 group-[.destructive]:hover:text-white group-[.destructive]:focus:ring-red-500",
            a,
          ),
          ...r,
        });
      });
      u.displayName = l.rc.displayName;
      let h = r.forwardRef((e, s) => {
        let { className: a, ...r } = e;
        return (0, t.jsx)(l.bm, {
          ref: s,
          className: (0, d.cn)(
            "absolute right-3 top-3 rounded-full p-1.5 text-muted-foreground opacity-0 transition-all duration-200 hover:bg-orange-light hover:text-primary focus:opacity-100 focus:outline-none focus:ring-2 focus:ring-primary group-hover:opacity-100 group-[.destructive]:text-red-500 group-[.destructive]:hover:bg-red-100 group-[.destructive]:hover:text-red-700 group-[.destructive]:focus:ring-red-500",
            a,
          ),
          "toast-close": "",
          ...r,
          children: (0, t.jsx)(i.A, { className: "h-4 w-4" }),
        });
      });
      h.displayName = l.bm.displayName;
      let f = r.forwardRef((e, s) => {
        let { className: a, ...r } = e;
        return (0, t.jsx)(l.hE, {
          ref: s,
          className: (0, d.cn)("text-sm font-semibold", a),
          ...r,
        });
      });
      f.displayName = l.hE.displayName;
      let p = r.forwardRef((e, s) => {
        let { className: a, ...r } = e;
        return (0, t.jsx)(l.VY, {
          ref: s,
          className: (0, d.cn)("text-sm opacity-90", a),
          ...r,
        });
      });
      p.displayName = l.VY.displayName;
    },
    87054: (e, s, a) => {
      a.d(s, { $: () => n });
      var t = a(70207),
        r = a(10299),
        l = a(61695);
      function n(e) {
        let { name: s, ...a } = e,
          n = r[s];
        return n ? (0, t.jsx)(n, { ...a }) : (0, t.jsx)(l.A, { ...a });
      }
    },
    87277: (e, s, a) => {
      a.d(s, { J: () => o });
      var t = a(70207),
        r = a(87223),
        l = a(4440),
        n = a(8128),
        i = a(82110);
      let d = (0, n.F)(
          "text-sm font-medium leading-none peer-disabled:cursor-not-allowed peer-disabled:opacity-70",
        ),
        o = r.forwardRef((e, s) => {
          let { className: a, ...r } = e;
          return (0, t.jsx)(l.b, {
            ref: s,
            className: (0, i.cn)(d(), a),
            ...r,
          });
        });
      o.displayName = l.b.displayName;
    },
    91746: (e, s, a) => {
      a.d(s, { P: () => i });
      var t = a(70207),
        r = a(87223),
        l = a(45748),
        n = a(82110);
      let i = r.forwardRef((e, s) => {
        let {
            value: a,
            size: r = 48,
            strokeWidth: i = 4,
            showLabel: d = !0,
            customLabel: o,
            trackColor: c = "#EEF0F4",
            progressColor: m = "auto",
            colorThreshold: x = 70,
            className: u,
            labelClassName: h,
            animated: f = !0,
          } = e,
          p = Math.min(100, Math.max(0, a)),
          b = (r - i) / 2,
          g = 2 * Math.PI * b,
          j = g - (p / 100) * g,
          v = "auto" !== m ? m : p >= x ? "#2C3340" : "#5D5DE9";
        return (0, t.jsxs)("div", {
          ref: s,
          className: (0, n.cn)(
            "relative inline-flex items-center justify-center",
            u,
          ),
          style: { width: r, height: r },
          children: [
            (0, t.jsxs)("svg", {
              width: r,
              height: r,
              viewBox: "0 0 ".concat(r, " ").concat(r),
              className: "transform -rotate-90",
              children: [
                (0, t.jsx)("circle", {
                  cx: r / 2,
                  cy: r / 2,
                  r: b,
                  fill: "none",
                  stroke: c,
                  strokeWidth: i,
                }),
                f
                  ? (0, t.jsx)(l.P.circle, {
                      cx: r / 2,
                      cy: r / 2,
                      r: b,
                      fill: "none",
                      stroke: v,
                      strokeWidth: i,
                      strokeLinecap: "round",
                      strokeDasharray: g,
                      initial: { strokeDashoffset: g },
                      animate: { strokeDashoffset: j },
                      transition: { duration: 0.5, ease: "easeOut" },
                    })
                  : (0, t.jsx)("circle", {
                      cx: r / 2,
                      cy: r / 2,
                      r: b,
                      fill: "none",
                      stroke: v,
                      strokeWidth: i,
                      strokeLinecap: "round",
                      strokeDasharray: g,
                      strokeDashoffset: j,
                    }),
              ],
            }),
            d &&
              (0, t.jsx)("div", {
                className: (0, n.cn)(
                  "absolute inset-0 flex items-center justify-center",
                  h,
                ),
                children:
                  null != o
                    ? o
                    : (0, t.jsxs)("span", {
                        className: "font-semibold text-foreground",
                        style: { fontSize: 0.22 * r },
                        children: [Math.round(p), "%"],
                      }),
              }),
          ],
        });
      });
      i.displayName = "CircularProgress";
    },
    92371: (e, s, a) => {
      a.d(s, { Toaster: () => n });
      var t = a(70207),
        r = a(86850),
        l = a(50488);
      function n() {
        let { toasts: e } = (0, l.dj)();
        return (0, t.jsxs)(r.tE, {
          children: [
            e.map(function (e) {
              let { id: s, title: a, description: l, action: n, ...i } = e;
              return (0, t.jsxs)(
                r.y8,
                {
                  ...i,
                  children: [
                    (0, t.jsxs)("div", {
                      className: "grid gap-1",
                      children: [
                        a && (0, t.jsx)(r.Sb, { children: a }),
                        l && (0, t.jsx)(r.aD, { children: l }),
                      ],
                    }),
                    n,
                    (0, t.jsx)(r.eC, {}),
                  ],
                },
                s,
              );
            }),
            (0, t.jsx)(r.US, {}),
          ],
        });
      }
    },
    93259: (e, s, a) => {
      a.d(s, { a: () => c });
      var t = a(70207),
        r = a(87223),
        l = a(39175),
        n = a(39441),
        i = a(82110),
        d = a(50018);
      let o = [
        "/images/hero-background-germany-natural-autumn.webp",
        "/images/hero-background-employer-natural-autumn.webp",
        "/images/hero-backgrounds/hamburg-harbor-hero-autumn.webp",
        "/images/hero-backgrounds/north-sea-coast-hero-autumn.webp",
        "/images/hero-backgrounds/heidelberg-castle-hero-autumn.webp",
        "/images/hero-backgrounds/rhine-valley-hero-autumn.webp",
        "/images/hero-backgrounds/neuschwanstein-hero-autumn.webp",
        "/images/hero-backgrounds/rothenburg-hero-autumn.webp",
        "/images/hero-backgrounds/bavarian-alps-hero-autumn.webp",
        "/images/hero-backgrounds/cologne-cathedral-hero-autumn.webp",
        "/images/hero-backgrounds/saxon-switzerland-hero-autumn.webp",
        "/images/hero-backgrounds/brandenburg-gate-hero-autumn.webp",
        "/images/hero-backgrounds/black-forest-hero-autumn.webp",
      ];
      function c(e) {
        let {
            title: s = "Ready to Start Your Career Journey?",
            description:
              a = "Apply now and take the first step towards your professional future in Germany.",
            primaryButtonText: c = "Apply for this Position",
            secondaryButtonText: m = "Download Job Details",
            showDownloadIcon: x = !0,
            footerText: u,
            onPrimaryClick: h,
            onSecondaryClick: f,
            backgroundColor: p = "bg-[#5D5DE9]",
            rounded: b = !0,
            className: g,
          } = e,
          [j, v] = (0, r.useState)(o[0]);
        return (
          (0, r.useEffect)(() => {
            let e = Math.floor(Math.random() * o.length);
            v(o[e]);
          }, []),
          (0, t.jsxs)("div", {
            className: (0, i.cn)(
              "relative overflow-hidden py-12",
              b && "rounded-2xl",
              g,
            ),
            children: [
              (0, t.jsx)(d.default, {
                src: j,
                alt: "Career Journey Background",
                fill: !0,
                quality: 85,
                sizes:
                  "(max-width: 768px) 100vw, (max-width: 1280px) 90vw, 1280px",
                className: "object-cover object-center",
                priority: !1,
              }),
              (0, t.jsx)("div", {
                className: "absolute inset-0 bg-black/40 z-0",
              }),
              (0, t.jsx)("div", {
                className: "absolute inset-0 z-[1]",
                style: {
                  background:
                    "\n            radial-gradient(ellipse at center, transparent 0%, transparent 40%, rgba(0,0,0,0.5) 100%),\n            linear-gradient(to top, rgba(0,0,0,0.6) 0%, transparent 30%)\n          ",
                },
              }),
              (0, t.jsx)("div", {
                className: "relative z-10 container mx-auto px-6",
                children: (0, t.jsxs)("div", {
                  className: "max-w-3xl mx-auto text-center space-y-5",
                  children: [
                    (0, t.jsx)("h2", {
                      className: "text-2xl lg:text-3xl font-bold text-white",
                      children: s,
                    }),
                    (0, t.jsx)("p", {
                      className: "text-base text-white/90",
                      children: a,
                    }),
                    (0, t.jsxs)("div", {
                      className:
                        "flex flex-col sm:flex-row gap-3 justify-center",
                      children: [
                        (0, t.jsx)(n.$, {
                          onClick: h,
                          className:
                            "bg-[#5D5DE9] hover:bg-[#2C3340] text-white hover:text-white rounded-full px-8 shadow-lg hover:shadow-xl transition-all duration-200",
                          children: c,
                        }),
                        (0, t.jsxs)(n.$, {
                          onClick: f,
                          variant: "outline",
                          className:
                            "bg-transparent border-2 border-white text-white hover:bg-white hover:text-[#5D5DE9] rounded-full px-8",
                          children: [
                            x && (0, t.jsx)(l.A, { className: "w-4 h-4 mr-2" }),
                            m,
                          ],
                        }),
                      ],
                    }),
                    u &&
                      (0, t.jsx)("p", {
                        className: "text-sm text-white/70",
                        children: u,
                      }),
                  ],
                }),
              }),
            ],
          })
        );
      }
    },
    93501: (e, s, a) => {
      a.d(s, {
        TR: () => b,
        bq: () => u,
        eb: () => g,
        gC: () => p,
        l6: () => c,
        s3: () => m,
        yv: () => x,
      });
      var t = a(70207),
        r = a(87223),
        l = a(12136),
        n = a(51613),
        i = a(26304),
        d = a(51105),
        o = a(82110);
      let c = l.bL,
        m = l.YJ,
        x = l.WT,
        u = r.forwardRef((e, s) => {
          let { className: a, children: r, ...i } = e;
          return (0, t.jsxs)(l.l9, {
            ref: s,
            className: (0, o.cn)(
              "flex h-12 w-full items-center justify-between rounded-lg border border-input bg-white px-4 py-3 text-sm font-medium ring-offset-background placeholder:text-muted-foreground transition-all duration-200 focus:outline-none focus:ring-2 focus:ring-primary focus:border-primary disabled:cursor-not-allowed disabled:opacity-50 hover:border-primary/50 [&>span]:line-clamp-1",
              a,
            ),
            ...i,
            children: [
              r,
              (0, t.jsx)(l.In, {
                asChild: !0,
                children: (0, t.jsx)(n.A, {
                  className: "h-4 w-4 text-muted-foreground",
                }),
              }),
            ],
          });
        });
      u.displayName = l.l9.displayName;
      let h = r.forwardRef((e, s) => {
        let { className: a, ...r } = e;
        return (0, t.jsx)(l.PP, {
          ref: s,
          className: (0, o.cn)(
            "flex cursor-default items-center justify-center py-1",
            a,
          ),
          ...r,
          children: (0, t.jsx)(i.A, { className: "h-4 w-4" }),
        });
      });
      h.displayName = l.PP.displayName;
      let f = r.forwardRef((e, s) => {
        let { className: a, ...r } = e;
        return (0, t.jsx)(l.wn, {
          ref: s,
          className: (0, o.cn)(
            "flex cursor-default items-center justify-center py-1",
            a,
          ),
          ...r,
          children: (0, t.jsx)(n.A, { className: "h-4 w-4" }),
        });
      });
      f.displayName = l.wn.displayName;
      let p = r.forwardRef((e, s) => {
        let { className: a, children: r, position: n = "popper", ...i } = e;
        return (0, t.jsx)(l.ZL, {
          children: (0, t.jsxs)(l.UC, {
            ref: s,
            className: (0, o.cn)(
              "relative z-50 max-h-96 min-w-[8rem] overflow-hidden rounded-xl border border-border bg-white text-foreground shadow-lg data-[state=open]:animate-in data-[state=closed]:animate-out data-[state=closed]:fade-out-0 data-[state=open]:fade-in-0 data-[state=closed]:zoom-out-95 data-[state=open]:zoom-in-95 data-[side=bottom]:slide-in-from-top-2 data-[side=left]:slide-in-from-right-2 data-[side=right]:slide-in-from-left-2 data-[side=top]:slide-in-from-bottom-2",
              "popper" === n &&
                "data-[side=bottom]:translate-y-1 data-[side=left]:-translate-x-1 data-[side=right]:translate-x-1 data-[side=top]:-translate-y-1",
              a,
            ),
            position: n,
            ...i,
            children: [
              (0, t.jsx)(h, {}),
              (0, t.jsx)(l.LM, {
                className: (0, o.cn)(
                  "p-2",
                  "popper" === n &&
                    "h-[var(--radix-select-trigger-height)] w-full min-w-[var(--radix-select-trigger-width)]",
                ),
                children: r,
              }),
              (0, t.jsx)(f, {}),
            ],
          }),
        });
      });
      p.displayName = l.UC.displayName;
      let b = r.forwardRef((e, s) => {
        let { className: a, ...r } = e;
        return (0, t.jsx)(l.JU, {
          ref: s,
          className: (0, o.cn)("py-1.5 pl-8 pr-2 text-sm font-semibold", a),
          ...r,
        });
      });
      b.displayName = l.JU.displayName;
      let g = r.forwardRef((e, s) => {
        let { className: a, children: r, ...n } = e;
        return (0, t.jsxs)(l.q7, {
          ref: s,
          className: (0, o.cn)(
            "relative flex w-full cursor-default select-none items-center rounded-lg py-2.5 pl-10 pr-3 text-sm font-medium outline-none transition-colors duration-150 focus:bg-orange-light focus:text-primary data-[disabled]:pointer-events-none data-[disabled]:opacity-50 hover:bg-beige",
            a,
          ),
          ...n,
          children: [
            (0, t.jsx)("span", {
              className:
                "absolute left-3 flex h-4 w-4 items-center justify-center",
              children: (0, t.jsx)(l.VF, {
                children: (0, t.jsx)(d.A, {
                  className: "h-4 w-4 text-primary",
                }),
              }),
            }),
            (0, t.jsx)(l.p4, { children: r }),
          ],
        });
      });
      ((g.displayName = l.q7.displayName),
        (r.forwardRef((e, s) => {
          let { className: a, ...r } = e;
          return (0, t.jsx)(l.wv, {
            ref: s,
            className: (0, o.cn)("-mx-1 my-2 h-px bg-beige", a),
            ...r,
          });
        }).displayName = l.wv.displayName));
    },
    93668: (e, s, a) => {
      a.d(s, { Progress: () => i });
      var t = a(70207),
        r = a(87223),
        l = a(46353),
        n = a(82110);
      let i = r.forwardRef((e, s) => {
        let { className: a, value: r, indicatorClassName: i, ...d } = e;
        return (0, t.jsx)(l.bL, {
          ref: s,
          className: (0, n.cn)(
            "relative h-3 w-full overflow-hidden rounded-full bg-beige shadow-sm",
            a,
          ),
          ...d,
          children: (0, t.jsx)(l.C1, {
            className: (0, n.cn)(
              "h-full w-full flex-1 bg-primary transition-all duration-300 ease-in-out shadow-inner",
              i,
            ),
            style: { transform: "translateX(-".concat(100 - (r || 0), "%)") },
          }),
        });
      });
      i.displayName = l.bL.displayName;
    },
    93775: (e, s, a) => {
      a.d(s, { Gx: () => l, NK: () => d, O8: () => n, UP: () => i });
      var t = a(70207);
      a(87223);
      var r = a(58212);
      function l() {
        return (0, t.jsxs)("div", {
          className: "w-full max-w-7xl mx-auto px-4 py-6 sm:py-10 space-y-8",
          children: [
            (0, t.jsxs)("header", {
              className: "mb-8",
              children: [
                (0, t.jsx)(r.E, { className: "h-8 w-[200px] mb-3" }),
                (0, t.jsx)(r.E, { className: "h-5 w-full max-w-2xl mb-4" }),
                (0, t.jsxs)("div", {
                  className: "flex gap-6",
                  children: [
                    (0, t.jsx)(r.E, { className: "h-5 w-[150px]" }),
                    (0, t.jsx)(r.E, { className: "h-5 w-[180px]" }),
                  ],
                }),
              ],
            }),
            (0, t.jsxs)("section", {
              children: [
                (0, t.jsxs)("div", {
                  className: "flex items-center gap-2 mb-6",
                  children: [
                    (0, t.jsx)(r.E, { className: "h-5 w-5" }),
                    (0, t.jsx)(r.E, { className: "h-6 w-[180px]" }),
                  ],
                }),
                (0, t.jsx)("div", {
                  className:
                    "grid grid-cols-1 md:grid-cols-2 xl:grid-cols-4 gap-6",
                  children: [1, 2, 3, 4].map((e) =>
                    (0, t.jsxs)(
                      "div",
                      {
                        className: "bg-primary rounded-xl p-6 shadow-md",
                        children: [
                          (0, t.jsxs)("div", {
                            className: "flex items-start justify-between mb-4",
                            children: [
                              (0, t.jsxs)("div", {
                                children: [
                                  (0, t.jsx)(r.E, {
                                    className: "h-5 w-[140px] mb-2 bg-white/30",
                                  }),
                                  (0, t.jsx)(r.E, {
                                    className: "h-4 w-[120px] bg-white/20",
                                  }),
                                ],
                              }),
                              (0, t.jsx)(r.E, {
                                className: "h-12 w-12 rounded-lg bg-white",
                              }),
                            ],
                          }),
                          (0, t.jsx)("div", {
                            className:
                              "flex items-center justify-center my-6 min-h-[120px]",
                            children: (0, t.jsx)(r.E, {
                              className: "h-20 w-32 rounded-xl bg-white/40",
                            }),
                          }),
                          (0, t.jsx)(r.E, {
                            className: "h-10 w-full rounded-full bg-white/30",
                          }),
                        ],
                      },
                      e,
                    ),
                  ),
                }),
              ],
            }),
            (0, t.jsx)("div", {
              className:
                "bg-card rounded-xl p-6 shadow-sm border border-border",
              children: (0, t.jsxs)("div", {
                className: "flex items-center justify-between",
                children: [
                  (0, t.jsxs)("div", {
                    children: [
                      (0, t.jsx)(r.E, { className: "h-6 w-[200px] mb-1" }),
                      (0, t.jsx)(r.E, { className: "h-4 w-[300px]" }),
                    ],
                  }),
                  (0, t.jsx)(r.E, { className: "h-10 w-[100px] rounded-lg" }),
                ],
              }),
            }),
          ],
        });
      }
      function n() {
        return (0, t.jsxs)("div", {
          className: "w-full max-w-6xl mx-auto px-4 py-6 space-y-6",
          children: [
            (0, t.jsx)("div", {
              className: "flex justify-center mb-4",
              children: (0, t.jsx)(r.E, {
                className: "h-9 w-[220px] rounded-full",
              }),
            }),
            (0, t.jsxs)("div", {
              className: "mb-8",
              children: [
                (0, t.jsx)(r.E, { className: "h-8 w-[280px] mb-3" }),
                (0, t.jsx)(r.E, { className: "h-5 w-full max-w-2xl" }),
              ],
            }),
            (0, t.jsxs)("div", {
              className: "grid lg:grid-cols-2 gap-6",
              children: [
                (0, t.jsxs)("div", {
                  className: "bg-primary rounded-2xl p-6 shadow-xl",
                  children: [
                    (0, t.jsx)(r.E, {
                      className: "h-4 w-full mb-6 bg-white/20",
                    }),
                    (0, t.jsxs)("div", {
                      className: "space-y-4",
                      children: [
                        (0, t.jsxs)("div", {
                          children: [
                            (0, t.jsx)(r.E, {
                              className: "h-3 w-[80px] mb-2 bg-white/30",
                            }),
                            (0, t.jsx)(r.E, {
                              className: "h-11 w-full rounded-lg bg-white",
                            }),
                          ],
                        }),
                        (0, t.jsxs)("div", {
                          children: [
                            (0, t.jsx)(r.E, {
                              className: "h-3 w-[100px] mb-2 bg-white/30",
                            }),
                            (0, t.jsx)(r.E, {
                              className: "h-11 w-full rounded-lg bg-white",
                            }),
                          ],
                        }),
                        (0, t.jsx)("div", {
                          className:
                            "bg-white/10 rounded-xl p-4 border-2 border-white/30",
                          children: (0, t.jsxs)("div", {
                            className: "flex gap-3",
                            children: [
                              (0, t.jsx)(r.E, {
                                className: "h-5 w-5 rounded bg-white",
                              }),
                              (0, t.jsx)(r.E, {
                                className: "h-12 w-full bg-white/20",
                              }),
                            ],
                          }),
                        }),
                        (0, t.jsx)(r.E, {
                          className: "h-11 w-full rounded-full bg-[#2C3340]",
                        }),
                        (0, t.jsxs)("div", {
                          className: "flex items-center justify-center gap-2",
                          children: [
                            (0, t.jsx)(r.E, {
                              className: "h-3 w-3 rounded-full bg-white/40",
                            }),
                            (0, t.jsx)(r.E, {
                              className: "h-3 w-[200px] bg-white/30",
                            }),
                          ],
                        }),
                      ],
                    }),
                  ],
                }),
                (0, t.jsxs)("div", {
                  className: "space-y-4",
                  children: [
                    (0, t.jsxs)("div", {
                      className: "flex items-center gap-2 mb-4",
                      children: [
                        (0, t.jsx)(r.E, { className: "h-5 w-5" }),
                        (0, t.jsx)(r.E, { className: "h-6 w-[180px]" }),
                      ],
                    }),
                    (0, t.jsx)("div", {
                      className: "grid gap-3",
                      children: [1, 2, 3, 4, 5, 6].map((e) =>
                        (0, t.jsx)(
                          "div",
                          {
                            className:
                              "bg-card border border-border rounded-xl p-4 shadow-sm",
                            children: (0, t.jsxs)("div", {
                              className: "flex items-start gap-3",
                              children: [
                                (0, t.jsx)(r.E, {
                                  className: "h-9 w-9 rounded-lg",
                                }),
                                (0, t.jsxs)("div", {
                                  className: "flex-1",
                                  children: [
                                    (0, t.jsx)(r.E, {
                                      className: "h-5 w-[160px] mb-1",
                                    }),
                                    (0, t.jsx)(r.E, {
                                      className: "h-4 w-full",
                                    }),
                                  ],
                                }),
                              ],
                            }),
                          },
                          e,
                        ),
                      ),
                    }),
                  ],
                }),
              ],
            }),
            (0, t.jsx)("div", {
              className: "bg-primary rounded-2xl p-8 md:p-12 mt-8",
              children: (0, t.jsx)("div", {
                className: "max-w-5xl mx-auto",
                children: (0, t.jsxs)("div", {
                  className: "flex flex-col md:flex-row items-center gap-8",
                  children: [
                    (0, t.jsx)(r.E, {
                      className:
                        "h-32 w-32 md:h-40 md:w-40 rounded-full bg-white/20",
                    }),
                    (0, t.jsxs)("div", {
                      className: "flex-1 text-center md:text-left",
                      children: [
                        (0, t.jsx)(r.E, {
                          className: "h-7 w-[280px] mb-4 bg-white/30",
                        }),
                        (0, t.jsx)(r.E, {
                          className: "h-5 w-full max-w-2xl mb-6 bg-white/20",
                        }),
                        (0, t.jsx)("div", {
                          className: "grid sm:grid-cols-3 gap-4",
                          children: [1, 2, 3].map((e) =>
                            (0, t.jsx)(
                              r.E,
                              { className: "h-16 rounded-xl bg-[#2C3340]" },
                              e,
                            ),
                          ),
                        }),
                      ],
                    }),
                  ],
                }),
              }),
            }),
          ],
        });
      }
      function i() {
        return (0, t.jsx)("div", {
          className: "min-h-screen",
          children: (0, t.jsxs)("div", {
            className:
              "container mx-auto px-3 sm:px-4 py-4 sm:py-6 md:py-8 max-w-6xl",
            children: [
              (0, t.jsxs)("div", {
                className: "mb-6 sm:mb-8",
                children: [
                  (0, t.jsx)(r.E, { className: "h-8 w-[280px] mb-3" }),
                  (0, t.jsx)(r.E, { className: "h-5 w-full max-w-2xl" }),
                ],
              }),
              (0, t.jsxs)("div", {
                className:
                  "bg-primary rounded-xl p-4 sm:p-6 mb-6 sm:mb-8 border-2 border-primary shadow-lg",
                children: [
                  (0, t.jsxs)("div", {
                    className:
                      "flex flex-col sm:flex-row items-center sm:justify-between gap-4 mb-4",
                    children: [
                      (0, t.jsxs)("div", {
                        className: "flex items-center gap-3",
                        children: [
                          (0, t.jsx)(r.E, {
                            className:
                              "h-10 w-10 sm:h-12 sm:w-12 rounded-lg bg-white",
                          }),
                          (0, t.jsxs)("div", {
                            children: [
                              (0, t.jsx)(r.E, {
                                className: "h-7 w-[100px] mb-1 bg-white/40",
                              }),
                              (0, t.jsx)(r.E, {
                                className: "h-4 w-[120px] bg-white/30",
                              }),
                            ],
                          }),
                        ],
                      }),
                      (0, t.jsx)(r.E, {
                        className:
                          "h-11 w-full sm:w-[180px] rounded-full bg-[#2C3340]",
                      }),
                    ],
                  }),
                  (0, t.jsxs)("div", {
                    className: "relative",
                    children: [
                      (0, t.jsx)(r.E, {
                        className: "h-3 w-full rounded-full bg-white/20",
                      }),
                      (0, t.jsx)("div", {
                        className: "flex justify-between mt-2",
                        children: [...Array(15)].map((e, s) =>
                          (0, t.jsx)(
                            r.E,
                            { className: "w-2 h-2 rounded-full bg-white/40" },
                            s,
                          ),
                        ),
                      }),
                    ],
                  }),
                ],
              }),
              (0, t.jsxs)("div", {
                className:
                  "bg-card rounded-xl p-6 mb-8 shadow-sm border border-border",
                children: [
                  (0, t.jsx)(r.E, { className: "h-5 w-[100px] mb-2" }),
                  (0, t.jsx)(r.E, { className: "h-6 w-[250px] mb-2" }),
                  (0, t.jsx)(r.E, { className: "h-4 w-full mb-4" }),
                  (0, t.jsxs)("div", {
                    className: "flex items-center gap-4",
                    children: [
                      (0, t.jsx)(r.E, { className: "h-4 w-[80px]" }),
                      (0, t.jsx)(r.E, { className: "h-4 w-[100px]" }),
                    ],
                  }),
                ],
              }),
              (0, t.jsx)("div", {
                className:
                  "grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-4 sm:gap-6 mb-6 sm:mb-8",
                children: [1, 2, 3].map((e) =>
                  (0, t.jsxs)(
                    "div",
                    {
                      className:
                        "bg-card rounded-xl p-4 sm:p-5 md:p-6 shadow-sm border border-border",
                      children: [
                        (0, t.jsxs)("div", {
                          className:
                            "flex items-center justify-between mb-3 sm:mb-4",
                          children: [
                            (0, t.jsx)(r.E, {
                              className: "h-10 w-10 sm:h-12 sm:w-12 rounded-lg",
                            }),
                            (0, t.jsx)(r.E, {
                              className: "h-6 w-6 rounded-full",
                            }),
                          ],
                        }),
                        (0, t.jsx)(r.E, { className: "h-6 w-[140px] mb-2" }),
                        (0, t.jsx)(r.E, { className: "h-4 w-full mb-4" }),
                        (0, t.jsxs)("div", {
                          className: "space-y-2 mb-4",
                          children: [
                            (0, t.jsxs)("div", {
                              className: "flex justify-between",
                              children: [
                                (0, t.jsx)(r.E, { className: "h-4 w-[60px]" }),
                                (0, t.jsx)(r.E, { className: "h-4 w-[30px]" }),
                              ],
                            }),
                            (0, t.jsx)(r.E, {
                              className: "h-2 w-full rounded-full",
                            }),
                          ],
                        }),
                        (0, t.jsx)(r.E, {
                          className: "h-8 w-full rounded-full",
                        }),
                      ],
                    },
                    e,
                  ),
                ),
              }),
              (0, t.jsxs)("div", {
                className: "mt-8",
                children: [
                  (0, t.jsx)(r.E, { className: "h-6 w-[180px] mb-4" }),
                  (0, t.jsx)("div", {
                    className:
                      "grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 gap-3 sm:gap-4",
                    children: [1, 2, 3, 4].map((e) =>
                      (0, t.jsxs)(
                        "div",
                        {
                          className:
                            "bg-card rounded-lg p-4 border border-border text-center",
                          children: [
                            (0, t.jsx)(r.E, {
                              className: "h-12 w-12 rounded-full mx-auto mb-2",
                            }),
                            (0, t.jsx)(r.E, {
                              className: "h-4 w-[100px] mx-auto",
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
        });
      }
      function d() {
        return (0, t.jsxs)("div", {
          className: "min-h-[85vh] relative overflow-visible",
          children: [
            (0, t.jsx)("div", {
              className:
                "fixed inset-0 -z-10 overflow-hidden pointer-events-none",
              children: (0, t.jsx)("div", { className: "opacity-40" }),
            }),
            (0, t.jsxs)("div", {
              className: "relative z-10",
              children: [
                (0, t.jsxs)("div", {
                  className: "mb-6 flex items-start justify-between",
                  children: [
                    (0, t.jsxs)("div", {
                      children: [
                        (0, t.jsx)(r.E, {
                          className: "h-9 md:h-10 w-[150px] mb-2",
                        }),
                        (0, t.jsx)(r.E, { className: "h-5 w-[380px]" }),
                      ],
                    }),
                    (0, t.jsx)(r.E, { className: "h-9 w-[100px] rounded-lg" }),
                  ],
                }),
                (0, t.jsxs)("div", {
                  className: "space-y-8",
                  children: [
                    (0, t.jsx)("div", {
                      className:
                        "border-0 shadow-sm bg-gradient-to-br from-primary/10 via-background to-primary/5 p-[1px] overflow-hidden rounded-xl",
                      children: (0, t.jsxs)("div", {
                        className:
                          "bg-background/95 rounded-[inherit] h-full w-full",
                        children: [
                          (0, t.jsxs)("div", {
                            className: "p-6 pb-3",
                            children: [
                              (0, t.jsxs)("div", {
                                className:
                                  "flex items-center justify-between mb-2",
                                children: [
                                  (0, t.jsxs)("div", {
                                    className: "flex items-center",
                                    children: [
                                      (0, t.jsx)(r.E, {
                                        className: "h-5 w-5 mr-2",
                                      }),
                                      (0, t.jsx)(r.E, {
                                        className: "h-6 w-[250px]",
                                      }),
                                    ],
                                  }),
                                  (0, t.jsx)(r.E, {
                                    className: "h-6 w-[100px]",
                                  }),
                                ],
                              }),
                              (0, t.jsx)(r.E, { className: "h-4 w-[350px]" }),
                            ],
                          }),
                          (0, t.jsxs)("div", {
                            className: "p-6 pt-3",
                            children: [
                              (0, t.jsx)(r.E, {
                                className: "h-2 w-full mb-4 rounded-full",
                              }),
                              (0, t.jsxs)("div", {
                                className: "flex justify-between items-center",
                                children: [
                                  (0, t.jsx)(r.E, {
                                    className: "h-4 w-[200px]",
                                  }),
                                  (0, t.jsx)(r.E, {
                                    className: "h-10 w-[140px] rounded-lg",
                                  }),
                                ],
                              }),
                            ],
                          }),
                        ],
                      }),
                    }),
                    (0, t.jsx)("div", {
                      className:
                        "border-0 shadow-sm bg-gradient-to-br from-card via-background to-card p-[1px] overflow-hidden rounded-xl",
                      children: (0, t.jsx)("div", {
                        className:
                          "bg-background rounded-[inherit] h-full w-full",
                        children: (0, t.jsxs)("div", {
                          className: "p-6",
                          children: [
                            (0, t.jsxs)("div", {
                              className: "flex items-center mb-2",
                              children: [
                                (0, t.jsx)(r.E, { className: "h-4 w-4 mr-2" }),
                                (0, t.jsx)(r.E, { className: "h-5 w-[180px]" }),
                              ],
                            }),
                            (0, t.jsx)(r.E, {
                              className: "h-4 w-[300px] mb-6",
                            }),
                            (0, t.jsx)("div", {
                              className: "grid gap-3",
                              children: [1, 2, 3, 4].map((e) =>
                                (0, t.jsxs)(
                                  "div",
                                  {
                                    className:
                                      "flex items-center justify-between p-3 rounded-lg border bg-card/50",
                                    children: [
                                      (0, t.jsxs)("div", {
                                        className: "flex items-center gap-3",
                                        children: [
                                          (0, t.jsx)(r.E, {
                                            className: "h-5 w-5 rounded",
                                          }),
                                          (0, t.jsx)(r.E, {
                                            className: "h-4 w-[150px]",
                                          }),
                                        ],
                                      }),
                                      (0, t.jsx)(r.E, {
                                        className: "h-6 w-[80px] rounded-full",
                                      }),
                                    ],
                                  },
                                  e,
                                ),
                              ),
                            }),
                          ],
                        }),
                      }),
                    }),
                    (0, t.jsxs)("div", {
                      className: "space-y-4",
                      children: [
                        (0, t.jsxs)("div", {
                          className: "flex items-center justify-between",
                          children: [
                            (0, t.jsxs)("div", {
                              className: "flex items-center gap-2",
                              children: [
                                (0, t.jsx)(r.E, { className: "h-5 w-5" }),
                                (0, t.jsx)(r.E, { className: "h-6 w-[150px]" }),
                              ],
                            }),
                            (0, t.jsx)(r.E, { className: "h-4 w-[100px]" }),
                          ],
                        }),
                        (0, t.jsx)("div", {
                          className:
                            "grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4",
                          children: [1, 2, 3].map((e) =>
                            (0, t.jsxs)(
                              "div",
                              {
                                className:
                                  "group relative rounded-lg border bg-card/50 p-4 hover:shadow-md transition-shadow",
                                children: [
                                  (0, t.jsxs)("div", {
                                    className:
                                      "flex items-start justify-between mb-3",
                                    children: [
                                      (0, t.jsxs)("div", {
                                        className: "flex items-center gap-3",
                                        children: [
                                          (0, t.jsx)(r.E, {
                                            className: "h-10 w-10 rounded-lg",
                                          }),
                                          (0, t.jsxs)("div", {
                                            children: [
                                              (0, t.jsx)(r.E, {
                                                className: "h-5 w-[140px] mb-1",
                                              }),
                                              (0, t.jsx)(r.E, {
                                                className: "h-3 w-[100px]",
                                              }),
                                            ],
                                          }),
                                        ],
                                      }),
                                      (0, t.jsx)(r.E, {
                                        className: "h-8 w-8 rounded",
                                      }),
                                    ],
                                  }),
                                  (0, t.jsxs)("div", {
                                    className:
                                      "flex items-center justify-between",
                                    children: [
                                      (0, t.jsx)(r.E, {
                                        className: "h-3 w-[80px]",
                                      }),
                                      (0, t.jsxs)("div", {
                                        className: "flex gap-1",
                                        children: [
                                          (0, t.jsx)(r.E, {
                                            className: "h-7 w-7 rounded",
                                          }),
                                          (0, t.jsx)(r.E, {
                                            className: "h-7 w-7 rounded",
                                          }),
                                        ],
                                      }),
                                    ],
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
        });
      }
    },
    95034: (e, s, a) => {
      a.d(s, { m: () => l });
      var t = a(70207);
      a(87223);
      var r = a(82110);
      function l(e) {
        let { children: s, className: a, size: l = "default" } = e;
        return (0, t.jsx)("div", {
          className: (0, r.cn)(
            "mx-auto w-full px-4 sm:px-6 lg:px-8",
            {
              sm: "max-w-3xl",
              default: "max-w-5xl",
              lg: "max-w-7xl",
              xl: "max-w-[1440px]",
            }[l],
            a,
          ),
          children: s,
        });
      }
    },
    95282: (e, s, a) => {
      a.d(s, { Bc: () => i, ZI: () => c, k$: () => o, m_: () => d });
      var t = a(70207),
        r = a(87223),
        l = a(95213),
        n = a(82110);
      let i = l.Kq,
        d = l.bL,
        o = l.l9,
        c = r.forwardRef((e, s) => {
          let { className: a, sideOffset: r = 4, ...i } = e;
          return (0, t.jsx)(l.ZL, {
            children: (0, t.jsx)(l.UC, {
              ref: s,
              sideOffset: r,
              className: (0, n.cn)(
                "z-50 overflow-hidden",
                "bg-[#2C3340] text-[#F7F8FA]",
                "rounded-lg",
                "px-3 py-2 text-xs font-medium",
                "shadow-[0_4px_12px_rgba(44,51,64,0.25)]",
                "animate-in fade-in-0 zoom-in-95",
                "data-[state=closed]:animate-out data-[state=closed]:fade-out-0 data-[state=closed]:zoom-out-95",
                "data-[side=bottom]:slide-in-from-top-2",
                "data-[side=left]:slide-in-from-right-2",
                "data-[side=right]:slide-in-from-left-2",
                "data-[side=top]:slide-in-from-bottom-2",
                "origin-[--radix-tooltip-content-transform-origin]",
                a,
              ),
              ...i,
            }),
          });
        });
      c.displayName = l.UC.displayName;
    },
    95941: (e, s, a) => {
      a.d(s, {
        Tabs: () => i,
        TabsContent: () => c,
        TabsList: () => d,
        TabsTrigger: () => o,
      });
      var t = a(70207),
        r = a(87223),
        l = a(3141),
        n = a(82110);
      let i = l.bL,
        d = r.forwardRef((e, s) => {
          let { className: a, ...r } = e;
          return (0, t.jsx)(l.B8, {
            ref: s,
            className: (0, n.cn)(
              "inline-flex h-auto min-h-[3rem] items-center justify-start rounded-xl bg-beige p-1.5 text-muted-foreground shadow-sm",
              "overflow-x-auto overflow-y-hidden",
              "scrollbar-none [-webkit-overflow-scrolling:touch]",
              "[&::-webkit-scrollbar]:hidden",
              a,
            ),
            ...r,
          });
        });
      d.displayName = l.B8.displayName;
      let o = r.forwardRef((e, s) => {
        let { className: a, ...r } = e;
        return (0, t.jsx)(l.l9, {
          ref: s,
          className: (0, n.cn)(
            "inline-flex flex-shrink-0 items-center justify-center whitespace-nowrap rounded-lg px-4 py-2.5 text-sm font-semibold ring-offset-background transition-all duration-200 focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 data-[state=active]:bg-white data-[state=active]:text-primary data-[state=active]:shadow-md hover:bg-white/50",
            a,
          ),
          ...r,
        });
      });
      o.displayName = l.l9.displayName;
      let c = r.forwardRef((e, s) => {
        let { className: a, ...r } = e;
        return (0, t.jsx)(l.UC, {
          ref: s,
          className: (0, n.cn)(
            "mt-2 ring-offset-background focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2",
            a,
          ),
          ...r,
        });
      });
      c.displayName = l.UC.displayName;
    },
    98534: (e, s, a) => {
      a.d(s, { b: () => m });
      var t = a(70207),
        r = a(87223),
        l = a(82110),
        n = a(41082),
        i = a(32753),
        d = a(15430),
        o = a(60879),
        c = a(31159);
      function m(e) {
        let {
            columns: s,
            data: a,
            keyExtractor: m,
            loading: x = !1,
            emptyMessage: u = "Keine Daten verf\xfcgbar",
            onRowClick: h,
            rowClassName: f,
            selectable: p = !1,
            selectedRows: b = new Set(),
            onSelectionChange: g,
            stickyHeader: j = !1,
            minHeight: v,
            className: w,
            headerClassName: N,
            bodyClassName: y,
            defaultSort: k,
          } = e,
          [E, C] = (0, r.useState)(() => {
            let e = {};
            return (
              s.forEach((s) => {
                s.width && (e[s.key] = s.width);
              }),
              e
            );
          }),
          [A, S] = (0, r.useState)(
            k ? { key: k.key, direction: k.direction } : null,
          ),
          [R, F] = (0, r.useState)(null),
          z = (0, r.useRef)(0),
          L = (0, r.useRef)(0),
          _ = s.filter((e) => !e.hidden),
          T = (e, s) => {
            (e.preventDefault(),
              e.stopPropagation(),
              F(s),
              (z.current = e.clientX),
              (L.current = E[s] || 150));
          };
        (0, r.useEffect)(() => {
          if (!R) return;
          let e = (e) => {
              let a = s.find((e) => e.key === R);
              if (!a) return;
              let t = e.clientX - z.current,
                r = Math.max(
                  a.minWidth || 80,
                  Math.min(a.maxWidth || 600, L.current + t),
                );
              C((e) => ({ ...e, [R]: r }));
            },
            a = () => {
              F(null);
            };
          return (
            document.addEventListener("mousemove", e),
            document.addEventListener("mouseup", a),
            () => {
              (document.removeEventListener("mousemove", e),
                document.removeEventListener("mouseup", a));
            }
          );
        }, [R, s]);
        let D = (e) => {
            let a = s.find((s) => s.key === e);
            (null == a ? void 0 : a.sortable) &&
              S((s) => {
                if ((null == s ? void 0 : s.key) === e) {
                  if ("asc" === s.direction)
                    return { key: e, direction: "desc" };
                  if ("desc" === s.direction) return null;
                }
                return { key: e, direction: "asc" };
              });
          },
          I = [...a].sort((e, a) => {
            if (!A) return 0;
            let t = s.find((e) => e.key === A.key);
            if (!t) return 0;
            let r = t.accessor ? t.accessor(e) : e[A.key],
              l = t.accessor ? t.accessor(a) : a[A.key];
            if (r === l) return 0;
            let n = r < l ? -1 : 1;
            return "asc" === A.direction ? n : -n;
          }),
          P = (e, s) => {
            if (!g) return;
            let a = new Set(b);
            (s ? a.add(e) : a.delete(e), g(a));
          },
          U = (e) => E[e.key] || e.width || 150,
          O = (e) =>
            A && A.key === e
              ? "asc" === A.direction
                ? (0, t.jsx)(d.A, { className: "h-3.5 w-3.5 text-[#5D5DE9]" })
                : (0, t.jsx)(o.A, { className: "h-3.5 w-3.5 text-[#5D5DE9]" })
              : (0, t.jsx)(i.A, { className: "h-3.5 w-3.5 text-[#2C3340]/40" }),
          M = a.length > 0 && b.size === a.length,
          B = b.size > 0 && b.size < a.length;
        return (0, t.jsx)("div", {
          className: (0, l.cn)(
            "bg-white rounded-xl border border-[#2C3340]/10 overflow-hidden",
            w,
          ),
          children: (0, t.jsx)("div", {
            className: "overflow-x-auto",
            style: { minHeight: v },
            children: (0, t.jsxs)("table", {
              className: "w-full",
              children: [
                (0, t.jsx)("thead", {
                  className: (0, l.cn)(
                    "bg-[#EEF0F4]",
                    j && "sticky top-0 z-10",
                    N,
                  ),
                  children: (0, t.jsxs)("tr", {
                    children: [
                      p &&
                        (0, t.jsx)("th", {
                          className: "px-4 py-3 text-left w-12",
                          children: (0, t.jsx)(n.S, {
                            checked: M,
                            ref: (e) => {
                              e && (e.indeterminate = B);
                            },
                            onCheckedChange: (e) => {
                              g &&
                                (e
                                  ? g(new Set(a.map((e, s) => m(e, s))))
                                  : g(new Set()));
                            },
                          }),
                        }),
                      _.map((e) =>
                        (0, t.jsxs)(
                          "th",
                          {
                            className: (0, l.cn)(
                              "px-4 py-3 text-sm font-semibold text-[#2C3340] whitespace-nowrap relative group",
                              "center" === e.align && "text-center",
                              "right" === e.align && "text-right",
                              e.sortable &&
                                "cursor-pointer select-none hover:bg-[#E4E7ED]",
                            ),
                            style: { width: U(e) },
                            onClick: () => e.sortable && D(e.key),
                            children: [
                              (0, t.jsxs)("div", {
                                className: "flex items-center gap-2",
                                children: [
                                  (0, t.jsx)("span", { children: e.header }),
                                  e.sortable && O(e.key),
                                ],
                              }),
                              !1 !== e.resizable &&
                                (0, t.jsx)("div", {
                                  className:
                                    "absolute right-0 top-0 bottom-0 w-1 cursor-col-resize hover:bg-[#5D5DE9] opacity-0 group-hover:opacity-100 transition-opacity",
                                  onMouseDown: (s) => T(s, e.key),
                                  onClick: (e) => e.stopPropagation(),
                                }),
                            ],
                          },
                          e.key,
                        ),
                      ),
                    ],
                  }),
                }),
                (0, t.jsx)("tbody", {
                  className: (0, l.cn)("divide-y divide-[#2C3340]/10", y),
                  children: x
                    ? (0, t.jsx)("tr", {
                        children: (0, t.jsx)("td", {
                          colSpan: _.length + +!!p,
                          className: "px-6 py-12 text-center",
                          children: (0, t.jsx)("div", {
                            className: "flex items-center justify-center",
                            children: (0, t.jsx)(c.A, {
                              className: "h-8 w-8 animate-spin text-[#5D5DE9]",
                            }),
                          }),
                        }),
                      })
                    : 0 === a.length
                      ? (0, t.jsx)("tr", {
                          children: (0, t.jsx)("td", {
                            colSpan: _.length + +!!p,
                            className: "px-6 py-12 text-center",
                            children: (0, t.jsx)("p", {
                              className: "text-[#2C3340]/70",
                              children: u,
                            }),
                          }),
                        })
                      : I.map((e, s) => {
                          let a = m(e, s),
                            r = b.has(a);
                          return (0, t.jsxs)(
                            "tr",
                            {
                              onClick: (a) => {
                                a.target.closest('[role="checkbox"]') ||
                                  a.target.closest("button") ||
                                  a.target.closest("a") ||
                                  null == h ||
                                  h(e, s);
                              },
                              className: (0, l.cn)(
                                "hover:bg-[#F7F8FA] transition-colors duration-200",
                                h && "cursor-pointer",
                                r && "bg-[#5D5DE9]/5",
                                null == f ? void 0 : f(e, s),
                              ),
                              children: [
                                p &&
                                  (0, t.jsx)("td", {
                                    className: "px-4 py-3",
                                    children: (0, t.jsx)(n.S, {
                                      checked: r,
                                      onCheckedChange: (e) => P(a, e),
                                    }),
                                  }),
                                _.map((a) =>
                                  (0, t.jsx)(
                                    "td",
                                    {
                                      className: (0, l.cn)(
                                        "px-4 py-3 text-sm text-[#2C3340]",
                                        "center" === a.align && "text-center",
                                        "right" === a.align && "text-right",
                                      ),
                                      style: { maxWidth: U(a), width: U(a) },
                                      children: a.render
                                        ? a.render(e, s)
                                        : (0, t.jsx)("div", {
                                            className: (0, l.cn)(
                                              a.truncate && "truncate",
                                              !a.truncate &&
                                                "whitespace-nowrap",
                                            ),
                                            title: a.truncate
                                              ? a.accessor
                                                ? a.accessor(e)
                                                : e[a.key]
                                              : void 0,
                                            children: a.accessor
                                              ? a.accessor(e)
                                              : e[a.key],
                                          }),
                                    },
                                    a.key,
                                  ),
                                ),
                              ],
                            },
                            a,
                          );
                        }),
                }),
              ],
            }),
          }),
        });
      }
    },
    98670: (e, s, a) => {
      a.d(s, { default: () => u });
      var t = a(70207),
        r = a(64390),
        l = a(34599),
        n = a(74977),
        i = a(51105),
        d = a(40832),
        o = a(39441),
        c = a(87223),
        m = a(48242),
        x = a(58233);
      function u(e) {
        let { url: s, title: a, description: u } = e,
          [h, f] = (0, c.useState)(!1),
          p = {
            twitter: "https://twitter.com/intent/tweet?url="
              .concat(encodeURIComponent(s), "&text=")
              .concat(encodeURIComponent(a)),
            facebook: "https://www.facebook.com/sharer/sharer.php?u=".concat(
              encodeURIComponent(s),
            ),
            linkedin:
              "https://www.linkedin.com/sharing/share-offsite/?url=".concat(
                encodeURIComponent(s),
              ),
          },
          b = async () => {
            try {
              (await navigator.clipboard.writeText(s),
                f(!0),
                setTimeout(() => f(!1), 2e3));
            } catch (e) {
              console.error("Failed to copy:", e);
            }
          };
        return (0, t.jsxs)(m.rI, {
          children: [
            (0, t.jsx)(m.ty, {
              asChild: !0,
              children: (0, t.jsxs)(o.$, {
                variant: "outline",
                size: "sm",
                className: "flex items-center gap-2",
                children: [(0, t.jsx)(x.A, { className: "h-4 w-4" }), "Share"],
              }),
            }),
            (0, t.jsxs)(m.SQ, {
              align: "start",
              className: "w-48",
              children: [
                (0, t.jsx)(m._2, {
                  asChild: !0,
                  children: (0, t.jsxs)("a", {
                    href: p.twitter,
                    target: "_blank",
                    rel: "noopener noreferrer",
                    className: "flex items-center gap-2 cursor-pointer",
                    children: [
                      (0, t.jsx)(r.A, { className: "h-4 w-4" }),
                      "Share on X",
                    ],
                  }),
                }),
                (0, t.jsx)(m._2, {
                  asChild: !0,
                  children: (0, t.jsxs)("a", {
                    href: p.facebook,
                    target: "_blank",
                    rel: "noopener noreferrer",
                    className: "flex items-center gap-2 cursor-pointer",
                    children: [
                      (0, t.jsx)(l.A, { className: "h-4 w-4" }),
                      "Share on Facebook",
                    ],
                  }),
                }),
                (0, t.jsx)(m._2, {
                  asChild: !0,
                  children: (0, t.jsxs)("a", {
                    href: p.linkedin,
                    target: "_blank",
                    rel: "noopener noreferrer",
                    className: "flex items-center gap-2 cursor-pointer",
                    children: [
                      (0, t.jsx)(n.A, { className: "h-4 w-4" }),
                      "Share on LinkedIn",
                    ],
                  }),
                }),
                (0, t.jsx)(m._2, {
                  onClick: b,
                  className: "flex items-center gap-2 cursor-pointer",
                  children: h
                    ? (0, t.jsxs)(t.Fragment, {
                        children: [
                          (0, t.jsx)(i.A, {
                            className: "h-4 w-4 text-green-600",
                          }),
                          "Copied!",
                        ],
                      })
                    : (0, t.jsxs)(t.Fragment, {
                        children: [
                          (0, t.jsx)(d.A, { className: "h-4 w-4" }),
                          "Copy Link",
                        ],
                      }),
                }),
              ],
            }),
          ],
        });
      }
    },
    99669: (e, s, a) => {
      a.d(s, { z: () => E });
      var t = a(70207),
        r = a(87223),
        l = a(37426),
        n = a(30478),
        i = a(81994),
        d = a(27239),
        o = a(95699),
        c = a(39342),
        m = a(31159),
        x = a(54173),
        u = a(95992),
        h = a(39441),
        f = a(40167),
        p = a(87277),
        b = a(93501),
        g = a(61889),
        j = a(54928),
        v = a(39100),
        w = a(39249),
        N = a(54604),
        y = a(29268);
      let k = (e) => {
        let { category: s } = e;
        switch (s) {
          case "identity":
            return (0, t.jsx)(l.A, { className: "h-4 w-4" });
          case "education":
            return (0, t.jsx)(n.A, { className: "h-4 w-4" });
          case "language":
            return (0, t.jsx)(i.A, { className: "h-4 w-4" });
          case "application":
            return (0, t.jsx)(d.A, { className: "h-4 w-4" });
          default:
            return (0, t.jsx)(o.A, { className: "h-4 w-4" });
        }
      };
      function E(e) {
        let {
            userId: s,
            onUploadComplete: a,
            preselectedType: n,
            variant: i = "button",
            className: o,
          } = e,
          [E, C] = (0, r.useState)(!1),
          [A, S] = (0, r.useState)({}),
          [R, F] = (0, r.useState)(n || ""),
          [z, L] = (0, r.useState)(null),
          [_, T] = (0, r.useState)(""),
          [D, I] = (0, r.useState)(!1),
          [P, U] = (0, r.useState)(!0),
          O = (0, N.createClientComponentClient)();
        async function M() {
          (U(!0), S(await (0, v.yh)(O)), U(!1));
        }
        async function B() {
          if (!z || !R) {
            j.oR.error("Please select a file and document type");
            return;
          }
          I(!0);
          try {
            let n = await (0, w.XX)(s, z, R, _ || void 0, void 0, O);
            if (n) {
              if (
                (y.T.trackDocumentUploaded({
                  documentType: R,
                  fileType: z.type,
                  fileSize: z.size,
                }),
                "german_certificate" === R && n.id)
              ) {
                j.oR.success("Document uploaded! Starting AI verification...", {
                  duration: 3e3,
                });
                try {
                  let s = await fetch(
                    "/api/student/documents/".concat(n.id, "/verify"),
                    {
                      method: "POST",
                      headers: { "Content-Type": "application/json" },
                      credentials: "include",
                    },
                  );
                  if (s.ok) {
                    var e, t, r, l;
                    let a = await s.json();
                    (null === (e = a.result) || void 0 === e
                      ? void 0
                      : e.status) === "approved"
                      ? j.oR.success(
                          "German certificate verified successfully!",
                          { duration: 5e3 },
                        )
                      : (null === (t = a.result) || void 0 === t
                            ? void 0
                            : t.status) === "rejected"
                        ? j.oR.error(
                            "Verification failed: ".concat(
                              (null === (l = a.result) || void 0 === l
                                ? void 0
                                : l.decision_reason) ||
                                "Please check the document",
                            ),
                            { duration: 8e3 },
                          )
                        : (null === (r = a.result) || void 0 === r
                              ? void 0
                              : r.status) === "needs_review"
                          ? j.oR.info(
                              "Document needs manual review. Our team will review it shortly.",
                              { duration: 5e3 },
                            )
                          : j.oR.info(
                              "Verification in progress. Check back shortly.",
                              { duration: 4e3 },
                            );
                  } else
                    (console.error(
                      "[Upload] Verification API error:",
                      s.status,
                    ),
                      j.oR.warning(
                        "Upload successful but verification pending. It will be processed shortly.",
                        { duration: 5e3 },
                      ));
                } catch (e) {
                  (console.error("[Upload] Failed to trigger verification:", e),
                    j.oR.warning(
                      "Upload successful but verification pending. It will be processed shortly.",
                      { duration: 5e3 },
                    ));
                }
              } else j.oR.success("Document uploaded successfully!");
              (C(!1), a(), L(null), T(""), F(""));
            } else j.oR.error("Failed to upload document");
          } catch (e) {
            (console.error("Upload error:", e),
              j.oR.error(e.message || "Upload failed"));
          } finally {
            I(!1);
          }
        }
        (0, r.useEffect)(() => {
          E && 0 === Object.keys(A).length && M();
        }, [E]);
        let V = Object.values(A)
          .flat()
          .find((e) => e.name === R);
        return (0, t.jsxs)(g.lG, {
          open: E,
          onOpenChange: C,
          children: [
            (0, t.jsx)(g.zM, {
              asChild: !0,
              children:
                "button" === i
                  ? (0, t.jsxs)(h.$, {
                      className: o || "bg-primary hover:bg-primary/90",
                      children: [
                        (0, t.jsx)(c.A, { className: "h-4 w-4 mr-2" }),
                        "Upload Document",
                      ],
                    })
                  : (0, t.jsxs)(h.$, {
                      variant: "outline",
                      size: "sm",
                      className: o,
                      children: [
                        (0, t.jsx)(c.A, { className: "h-4 w-4 mr-2" }),
                        "Upload",
                      ],
                    }),
            }),
            (0, t.jsxs)(g.Cf, {
              className:
                "sm:max-w-lg max-h-[90vh] overflow-y-auto overflow-x-hidden p-4 sm:p-6 w-[calc(100vw-2rem)] sm:w-full",
              children: [
                (0, t.jsxs)(g.c7, {
                  children: [
                    (0, t.jsx)(g.L3, {
                      className: "text-lg sm:text-xl break-words",
                      children: "Upload Document",
                    }),
                    (0, t.jsx)(g.rr, {
                      className: "text-xs sm:text-sm",
                      children: "Select document type and upload your file",
                    }),
                  ],
                }),
                P
                  ? (0, t.jsx)("div", {
                      className: "flex justify-center py-8",
                      children: (0, t.jsx)(m.A, {
                        className: "h-8 w-8 animate-spin text-primary",
                      }),
                    })
                  : (0, t.jsxs)("div", {
                      className: "space-y-3 sm:space-y-4 py-3 sm:py-4",
                      children: [
                        (0, t.jsxs)("div", {
                          children: [
                            (0, t.jsx)(p.J, {
                              htmlFor: "document-type",
                              className: "text-xs sm:text-sm",
                              children: "Document Type *",
                            }),
                            (0, t.jsxs)(b.l6, {
                              value: R,
                              onValueChange: F,
                              children: [
                                (0, t.jsx)(b.bq, {
                                  id: "document-type",
                                  className: "text-xs sm:text-sm w-full",
                                  children: (0, t.jsx)(b.yv, {
                                    placeholder: "Select document type",
                                  }),
                                }),
                                (0, t.jsx)(b.gC, {
                                  children: Object.entries(A).map((e) => {
                                    var s;
                                    let [a, r] = e;
                                    return (0, t.jsxs)(
                                      b.s3,
                                      {
                                        children: [
                                          (0, t.jsxs)(b.TR, {
                                            className:
                                              "flex items-center gap-2 px-2 py-1.5 text-xs sm:text-sm font-semibold text-muted-foreground",
                                            children: [
                                              (0, t.jsx)(k, { category: a }),
                                              (null === (s = v.HZ[a]) ||
                                              void 0 === s
                                                ? void 0
                                                : s.label) || a,
                                            ],
                                          }),
                                          r.map((e) =>
                                            (0, t.jsx)(
                                              b.eb,
                                              {
                                                value: e.name,
                                                className: "text-xs sm:text-sm",
                                                children: (0, t.jsxs)("div", {
                                                  className:
                                                    "flex items-center justify-between w-full",
                                                  children: [
                                                    (0, t.jsx)("span", {
                                                      className: "truncate",
                                                      children: e.display_name,
                                                    }),
                                                    e.is_required &&
                                                      (0, t.jsx)("span", {
                                                        className:
                                                          "ml-2 text-xs text-primary flex-shrink-0",
                                                        children: "(Required)",
                                                      }),
                                                  ],
                                                }),
                                              },
                                              e.name,
                                            ),
                                          ),
                                        ],
                                      },
                                      a,
                                    );
                                  }),
                                }),
                              ],
                            }),
                            (null == V ? void 0 : V.description) &&
                              (0, t.jsx)("p", {
                                className:
                                  "text-xs text-muted-foreground mt-1.5 leading-relaxed break-words",
                                children: V.description,
                              }),
                          ],
                        }),
                        (0, t.jsxs)("div", {
                          className: "w-full overflow-hidden",
                          children: [
                            (0, t.jsx)(p.J, {
                              htmlFor: "file",
                              className: "text-xs sm:text-sm",
                              children: "File *",
                            }),
                            (0, t.jsx)(f.p, {
                              id: "file",
                              type: "file",
                              accept: ".pdf,.doc,.docx,.jpg,.jpeg,.png",
                              onChange: (e) => {
                                var s;
                                return L(
                                  (null === (s = e.target.files) || void 0 === s
                                    ? void 0
                                    : s[0]) || null,
                                );
                              },
                              disabled: !R,
                              className: "text-xs sm:text-sm w-full",
                            }),
                            (0, t.jsx)("p", {
                              className:
                                "text-xs text-muted-foreground mt-1.5 leading-relaxed break-words",
                              children:
                                "Accepted formats: PDF, DOC, DOCX, JPG, PNG (Max 10MB)",
                            }),
                            z &&
                              (0, t.jsx)("div", {
                                className:
                                  "mt-2 p-2 bg-muted/50 rounded-lg border border-border/50 overflow-hidden",
                                children: (0, t.jsxs)("div", {
                                  className: "flex items-start gap-2 w-full",
                                  children: [
                                    (0, t.jsx)(d.A, {
                                      className:
                                        "h-4 w-4 text-primary flex-shrink-0 mt-0.5",
                                    }),
                                    (0, t.jsxs)("div", {
                                      className:
                                        "flex-1 min-w-0 overflow-hidden",
                                      children: [
                                        (0, t.jsx)("p", {
                                          className:
                                            "text-xs sm:text-sm font-medium text-foreground break-all line-clamp-2",
                                          title: z.name,
                                          children: z.name,
                                        }),
                                        (0, t.jsxs)("p", {
                                          className:
                                            "text-xs text-muted-foreground mt-0.5",
                                          children: [
                                            (z.size / 1024 / 1024).toFixed(2),
                                            " MB",
                                          ],
                                        }),
                                      ],
                                    }),
                                  ],
                                }),
                              }),
                          ],
                        }),
                        (null == V ? void 0 : V.allow_multiple) &&
                          (0, t.jsxs)("div", {
                            className: "w-full overflow-hidden",
                            children: [
                              (0, t.jsx)(p.J, {
                                htmlFor: "label",
                                className: "text-xs sm:text-sm",
                                children: "Label (Optional)",
                              }),
                              (0, t.jsxs)("div", {
                                className:
                                  "flex gap-2 items-center mt-1.5 w-full",
                                children: [
                                  (0, t.jsx)(x.A, {
                                    className:
                                      "h-4 w-4 text-muted-foreground flex-shrink-0",
                                  }),
                                  (0, t.jsx)(f.p, {
                                    id: "label",
                                    value: _,
                                    onChange: (e) => T(e.target.value),
                                    placeholder: "e.g., CV - Software Engineer",
                                    maxLength: 255,
                                    className:
                                      "text-xs sm:text-sm flex-1 min-w-0",
                                  }),
                                ],
                              }),
                              (0, t.jsxs)("p", {
                                className:
                                  "text-xs text-muted-foreground mt-1.5 leading-relaxed break-words",
                                children: [
                                  "Add a label to help identify this document among multiple ",
                                  V.display_name.toLowerCase(),
                                  "s",
                                ],
                              }),
                            ],
                          }),
                        V &&
                          !V.allow_multiple &&
                          (0, t.jsxs)("div", {
                            className:
                              "bg-blue-50 dark:bg-blue-950 border border-blue-200 dark:border-blue-800 rounded-lg p-2.5 sm:p-3 flex items-start gap-2 w-full overflow-hidden",
                            children: [
                              (0, t.jsx)(u.A, {
                                className:
                                  "h-3.5 w-3.5 sm:h-4 sm:w-4 text-blue-600 dark:text-blue-400 flex-shrink-0 mt-0.5",
                              }),
                              (0, t.jsxs)("p", {
                                className:
                                  "text-xs sm:text-sm text-blue-900 dark:text-blue-100 leading-relaxed break-words flex-1 min-w-0",
                                children: [
                                  (0, t.jsx)("strong", {
                                    children: "Single Document:",
                                  }),
                                  " You can only upload one ",
                                  V.display_name,
                                  ". If you already have one, please delete it first.",
                                ],
                              }),
                            ],
                          }),
                        (null == V ? void 0 : V.requires_verification) &&
                          (0, t.jsxs)("div", {
                            className:
                              "bg-amber-50 dark:bg-amber-950 border border-amber-200 dark:border-amber-800 rounded-lg p-2.5 sm:p-3 flex items-start gap-2 w-full overflow-hidden",
                            children: [
                              (0, t.jsx)(l.A, {
                                className:
                                  "h-3.5 w-3.5 sm:h-4 sm:w-4 text-amber-600 dark:text-amber-400 flex-shrink-0 mt-0.5",
                              }),
                              (0, t.jsxs)("p", {
                                className:
                                  "text-xs sm:text-sm text-amber-900 dark:text-amber-100 leading-relaxed break-words flex-1 min-w-0",
                                children: [
                                  (0, t.jsx)("strong", {
                                    children: "Verification Required:",
                                  }),
                                  " This document requires admin verification. You'll be notified once it's reviewed.",
                                ],
                              }),
                            ],
                          }),
                        (0, t.jsxs)("div", {
                          className:
                            "flex gap-2 sm:gap-3 justify-end pt-3 sm:pt-4",
                          children: [
                            (0, t.jsx)(h.$, {
                              variant: "outline",
                              onClick: () => C(!1),
                              disabled: D,
                              className: "text-xs sm:text-sm px-3 sm:px-4",
                              children: "Cancel",
                            }),
                            (0, t.jsx)(h.$, {
                              onClick: B,
                              disabled: !z || !R || D,
                              className: "text-xs sm:text-sm px-3 sm:px-4",
                              children: D
                                ? (0, t.jsxs)(t.Fragment, {
                                    children: [
                                      (0, t.jsx)(m.A, {
                                        className:
                                          "h-3.5 w-3.5 sm:h-4 sm:w-4 mr-1.5 sm:mr-2 animate-spin",
                                      }),
                                      (0, t.jsx)("span", {
                                        className: "hidden sm:inline",
                                        children: "Uploading...",
                                      }),
                                      (0, t.jsx)("span", {
                                        className: "sm:hidden",
                                        children: "Upload...",
                                      }),
                                    ],
                                  })
                                : (0, t.jsxs)(t.Fragment, {
                                    children: [
                                      (0, t.jsx)(c.A, {
                                        className:
                                          "h-3.5 w-3.5 sm:h-4 sm:w-4 mr-1.5 sm:mr-2",
                                      }),
                                      "Upload",
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
        });
      }
    },
  },
]);
