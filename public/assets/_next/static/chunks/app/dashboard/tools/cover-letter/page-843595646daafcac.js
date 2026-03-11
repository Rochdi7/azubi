(self.webpackChunk_N_E = self.webpackChunk_N_E || []).push([
  [35540],
  {
    42629: (e, r, t) => {
      "use strict";
      (t.r(r), t.d(r, { default: () => C }));
      var s = t(70207),
        o = t(87223),
        c = t(45748),
        l = t(18051),
        a = t(49055),
        i = t(59827),
        d = t(69312),
        n = t(89850),
        m = t(16148),
        x = t(88117),
        h = t(84217),
        u = t(9325),
        p = t(61280),
        v = t(83726),
        j = t(39175),
        f = t(40300),
        g = t(82110),
        N = t(39441),
        w = t(48242),
        y = t(1526),
        b = t(54928),
        L = t(68233);
      function k(e) {
        let {
            coverLetter: r,
            isCreateNew: t = !1,
            isLocked: l = !1,
            onClick: a,
            onDelete: k,
            onExportPDF: C,
          } = e,
          { t: _ } = (0, L.ok)(),
          [E, R] = (0, o.useState)(!1),
          [S, A] = (0, o.useState)(!1),
          P = async () => {
            if (!(null == r ? void 0 : r.cover_letter)) {
              try {
                var e;
                let t = await fetch(
                    "/api/tools/cover-letter/".concat(
                      null == r ? void 0 : r.id,
                    ),
                  ),
                  s = await t.json();
                s.success &&
                  (null === (e = s.coverLetter) || void 0 === e
                    ? void 0
                    : e.cover_letter) &&
                  (await navigator.clipboard.writeText(
                    s.coverLetter.cover_letter,
                  ),
                  b.oR.success(_("tools.coverLetter.copySuccess")));
              } catch (e) {
                b.oR.error(_("tools.coverLetter.copyFailed"));
              }
              return;
            }
            try {
              (await navigator.clipboard.writeText(r.cover_letter),
                b.oR.success(_("tools.coverLetter.copySuccess")));
            } catch (e) {
              b.oR.error(_("tools.coverLetter.copyFailed"));
            }
          },
          F = async () => {
            if (r) {
              A(!0);
              try {
                let e = await fetch("/api/tools/cover-letter/".concat(r.id)),
                  t = await e.json();
                if (!t.success) throw Error("Failed to fetch cover letter");
                let s = await fetch("/api/tools/cover-letter/pdf", {
                    method: "POST",
                    headers: { "Content-Type": "application/json" },
                    body: JSON.stringify({
                      coverLetter: t.coverLetter.cover_letter,
                      jobDetails: { company: r.company, position: r.position },
                    }),
                  }),
                  o = await s.json();
                if (!s.ok || !o.success)
                  throw Error(o.error || "Export failed");
                let c = await fetch(o.pdfUrl),
                  l = await c.blob(),
                  a = window.URL.createObjectURL(l),
                  i = document.createElement("a");
                ((i.href = a),
                  (i.download =
                    o.filename ||
                    "cover-letter-".concat(
                      r.company.toLowerCase().replace(/\s+/g, "-"),
                      ".pdf",
                    )),
                  document.body.appendChild(i),
                  i.click(),
                  window.URL.revokeObjectURL(a),
                  document.body.removeChild(i),
                  b.oR.success(_("tools.coverLetter.pdfSuccess")));
              } catch (e) {
                (console.error("Error exporting PDF:", e),
                  b.oR.error(e.message || _("tools.coverLetter.pdfFailed")));
              } finally {
                A(!1);
              }
            }
          };
        return t
          ? (0, s.jsx)(c.P.div, {
              whileHover: { scale: 1.02, y: -4 },
              whileTap: { scale: 0.98 },
              onClick: a,
              className: (0, g.cn)(
                "relative flex flex-col items-center justify-center",
                "min-h-[200px] rounded-xl border-2 border-dashed",
                "border-primary/40 bg-primary/5 hover:bg-primary/10",
                "cursor-pointer transition-all duration-200",
                "group",
              ),
              children: (0, s.jsxs)("div", {
                className: "flex flex-col items-center gap-3",
                children: [
                  (0, s.jsx)("div", {
                    className:
                      "p-4 rounded-full bg-primary/10 group-hover:bg-primary/20 transition-colors",
                    children: (0, s.jsx)(i.A, {
                      className: "h-8 w-8 text-primary",
                    }),
                  }),
                  (0, s.jsxs)("div", {
                    className: "text-center",
                    children: [
                      (0, s.jsx)("p", {
                        className: "font-semibold text-primary",
                        children: _("tools.coverLetter.createNewCard"),
                      }),
                      (0, s.jsx)("p", {
                        className: "text-sm text-muted-foreground",
                        children: _("tools.coverLetter.coverLetterCard"),
                      }),
                    ],
                  }),
                ],
              }),
            })
          : l
            ? (0, s.jsx)(c.P.div, {
                whileHover: { scale: 1.01 },
                onClick: a,
                className: (0, g.cn)(
                  "relative flex flex-col items-center justify-center",
                  "min-h-[200px] rounded-xl border-2",
                  "border-border/50 bg-muted/30",
                  "cursor-pointer transition-all duration-200",
                  "group",
                ),
                children: (0, s.jsxs)("div", {
                  className: "flex flex-col items-center gap-3",
                  children: [
                    (0, s.jsx)("div", {
                      className: "p-4 rounded-full bg-muted",
                      children: (0, s.jsx)(d.A, {
                        className: "h-6 w-6 text-muted-foreground",
                      }),
                    }),
                    (0, s.jsxs)("div", {
                      className: "text-center",
                      children: [
                        (0, s.jsx)("p", {
                          className: "font-medium text-muted-foreground",
                          children: _("tools.coverLetter.lockedSlot"),
                        }),
                        (0, s.jsxs)("div", {
                          className:
                            "flex items-center gap-1 mt-1 text-xs text-primary",
                          children: [
                            (0, s.jsx)(n.A, { className: "h-3 w-3" }),
                            (0, s.jsx)("span", {
                              children: _("tools.coverLetter.getExpertHelp"),
                            }),
                          ],
                        }),
                      ],
                    }),
                  ],
                }),
              })
            : r
              ? (0, s.jsxs)(c.P.div, {
                  whileHover: { scale: 1.02, y: -4 },
                  className: (0, g.cn)(
                    "relative flex flex-col",
                    "min-h-[200px] rounded-xl border",
                    "border-border bg-card hover:border-primary/30",
                    "cursor-pointer transition-all duration-200",
                    "shadow-sm hover:shadow-md",
                    "group",
                  ),
                  children: [
                    (0, s.jsxs)("div", {
                      onClick: a,
                      className: "flex-1 p-5",
                      children: [
                        (0, s.jsxs)("div", {
                          className: "mb-4",
                          children: [
                            (0, s.jsxs)("div", {
                              className: "flex items-center gap-2 mb-1",
                              children: [
                                (0, s.jsx)(m.A, {
                                  className:
                                    "h-4 w-4 text-primary flex-shrink-0",
                                }),
                                (0, s.jsx)("h3", {
                                  className:
                                    "font-semibold text-foreground truncate",
                                  children: r.company,
                                }),
                              ],
                            }),
                            (0, s.jsxs)("div", {
                              className: "flex items-center gap-2",
                              children: [
                                (0, s.jsx)(x.A, {
                                  className:
                                    "h-4 w-4 text-muted-foreground flex-shrink-0",
                                }),
                                (0, s.jsx)("p", {
                                  className:
                                    "text-sm text-muted-foreground truncate",
                                  children: r.position,
                                }),
                              ],
                            }),
                          ],
                        }),
                        null != r.confidence_score &&
                          r.confidence_score > 0 &&
                          (0, s.jsx)("div", {
                            className: "mb-3",
                            children: (() => {
                              let e = Math.min(
                                100,
                                Math.round(
                                  r.confidence_score > 1
                                    ? r.confidence_score
                                    : 100 * r.confidence_score,
                                ),
                              );
                              return (0, s.jsxs)(s.Fragment, {
                                children: [
                                  (0, s.jsxs)("div", {
                                    className:
                                      "flex items-center justify-between text-xs mb-1",
                                    children: [
                                      (0, s.jsx)("span", {
                                        className: "text-muted-foreground",
                                        children: _(
                                          "tools.coverLetter.matchScore",
                                        ),
                                      }),
                                      (0, s.jsxs)("span", {
                                        className: "font-medium text-primary",
                                        children: [e, "%"],
                                      }),
                                    ],
                                  }),
                                  (0, s.jsx)("div", {
                                    className:
                                      "h-1.5 bg-muted rounded-full overflow-hidden",
                                    children: (0, s.jsx)("div", {
                                      className:
                                        "h-full bg-primary rounded-full transition-all",
                                      style: { width: "".concat(e, "%") },
                                    }),
                                  }),
                                ],
                              });
                            })(),
                          }),
                        (0, s.jsxs)("div", {
                          className:
                            "flex items-center gap-1.5 text-xs text-muted-foreground mt-auto",
                          children: [
                            (0, s.jsx)(h.A, { className: "h-3.5 w-3.5" }),
                            (0, s.jsx)("span", {
                              children: new Date(
                                r.created_at,
                              ).toLocaleDateString("en-US", {
                                month: "short",
                                day: "numeric",
                                year: "numeric",
                              }),
                            }),
                          ],
                        }),
                      ],
                    }),
                    (0, s.jsx)("div", {
                      className:
                        "absolute top-2 right-2 opacity-0 group-hover:opacity-100 transition-opacity",
                      children: (0, s.jsxs)(w.rI, {
                        children: [
                          (0, s.jsx)(w.ty, {
                            asChild: !0,
                            children: (0, s.jsx)(N.$, {
                              variant: "ghost",
                              size: "icon",
                              className:
                                "h-8 w-8 rounded-full bg-background/80 hover:bg-muted",
                              onClick: (e) => e.stopPropagation(),
                              children: (0, s.jsx)(u.A, {
                                className: "h-4 w-4",
                              }),
                            }),
                          }),
                          (0, s.jsxs)(w.SQ, {
                            align: "end",
                            className: "w-48",
                            children: [
                              (0, s.jsxs)(w._2, {
                                onClick: (e) => {
                                  (e.stopPropagation(), a());
                                },
                                children: [
                                  (0, s.jsx)(p.A, {
                                    className: "h-4 w-4 mr-2",
                                  }),
                                  _("tools.coverLetter.view"),
                                ],
                              }),
                              (0, s.jsxs)(w._2, {
                                onClick: (e) => {
                                  (e.stopPropagation(), P());
                                },
                                children: [
                                  (0, s.jsx)(v.A, {
                                    className: "h-4 w-4 mr-2",
                                  }),
                                  _("tools.coverLetter.copy"),
                                ],
                              }),
                              (0, s.jsxs)(w._2, {
                                onClick: (e) => {
                                  (e.stopPropagation(), F());
                                },
                                disabled: S,
                                children: [
                                  (0, s.jsx)(j.A, {
                                    className: "h-4 w-4 mr-2",
                                  }),
                                  S
                                    ? _("tools.coverLetter.exporting")
                                    : _("tools.coverLetter.exportPdf"),
                                ],
                              }),
                              k &&
                                (0, s.jsxs)(s.Fragment, {
                                  children: [
                                    (0, s.jsx)(w.mB, {}),
                                    (0, s.jsxs)(w._2, {
                                      onClick: (e) => {
                                        (e.stopPropagation(), R(!0));
                                      },
                                      className:
                                        "text-destructive focus:text-destructive",
                                      children: [
                                        (0, s.jsx)(f.A, {
                                          className: "h-4 w-4 mr-2",
                                        }),
                                        _("tools.coverLetter.delete"),
                                      ],
                                    }),
                                  ],
                                }),
                            ],
                          }),
                        ],
                      }),
                    }),
                    (0, s.jsx)(y.Lt, {
                      open: E,
                      onOpenChange: R,
                      children: (0, s.jsxs)(y.EO, {
                        children: [
                          (0, s.jsxs)(y.wd, {
                            children: [
                              (0, s.jsx)(y.r7, {
                                children: _("tools.coverLetter.deleteTitle"),
                              }),
                              (0, s.jsx)(y.$v, {
                                children: _(
                                  "tools.coverLetter.deleteDescription",
                                  { company: r.company },
                                ),
                              }),
                            ],
                          }),
                          (0, s.jsxs)(y.ck, {
                            children: [
                              (0, s.jsx)(y.Zr, {
                                children: _("tools.coverLetter.cancel"),
                              }),
                              (0, s.jsx)(y.Rx, {
                                onClick: () => {
                                  (null == k || k(r.id), R(!1));
                                },
                                className:
                                  "bg-destructive text-destructive-foreground hover:bg-destructive/90",
                                children: _("tools.coverLetter.delete"),
                              }),
                            ],
                          }),
                        ],
                      }),
                    }),
                  ],
                })
              : null;
      }
      function C() {
        let { t: e } = (0, L.ok)(),
          r = (0, l.useRouter)(),
          [t, d] = (0, o.useState)([]),
          [n, m] = (0, o.useState)(!0);
        (0, o.useEffect)(() => {
          x();
        }, []);
        let x = async () => {
            try {
              let e = await fetch("/api/tools/cover-letter/list"),
                r = await e.json();
              r.success && d(r.coverLetters);
            } catch (r) {
              (console.error("Error fetching cover letters:", r),
                b.oR.error(e("tools.coverLetter.loadFailed")));
            } finally {
              m(!1);
            }
          },
          h = () => {
            r.push("/dashboard/tools/cover-letter/new");
          },
          u = (e) => {
            r.push("/dashboard/tools/cover-letter/".concat(e));
          },
          p = async (r) => {
            try {
              if (
                (
                  await fetch("/api/tools/cover-letter/".concat(r), {
                    method: "DELETE",
                  })
                ).ok
              )
                (d((e) => e.filter((e) => e.id !== r)),
                  b.oR.success(e("tools.coverLetter.deletedSuccess")));
              else throw Error("Failed to delete");
            } catch (r) {
              (console.error("Error deleting cover letter:", r),
                b.oR.error(e("tools.coverLetter.deleteFailed")));
            }
          };
        return n
          ? (0, s.jsxs)("div", {
              className: "max-w-7xl mx-auto",
              children: [
                (0, s.jsx)("div", {
                  className: "mb-8",
                  children: (0, s.jsxs)("div", {
                    className: "flex items-center gap-4 mb-6",
                    children: [
                      (0, s.jsx)("div", {
                        className: "p-3 rounded-xl bg-primary/10",
                        children: (0, s.jsx)(a.A, {
                          className: "h-6 w-6 text-primary",
                        }),
                      }),
                      (0, s.jsxs)("div", {
                        children: [
                          (0, s.jsx)("div", {
                            className:
                              "h-7 w-64 bg-muted animate-pulse rounded",
                          }),
                          (0, s.jsx)("div", {
                            className:
                              "h-4 w-96 bg-muted animate-pulse rounded mt-2",
                          }),
                        ],
                      }),
                    ],
                  }),
                }),
                (0, s.jsx)("div", {
                  className:
                    "grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-4",
                  children: [1, 2, 3, 4].map((e) =>
                    (0, s.jsx)(
                      "div",
                      {
                        className:
                          "min-h-[200px] rounded-xl bg-muted animate-pulse",
                      },
                      e,
                    ),
                  ),
                }),
              ],
            })
          : (0, s.jsxs)("div", {
              className: "max-w-7xl mx-auto",
              children: [
                (0, s.jsx)("div", {
                  className: "mb-8",
                  children: (0, s.jsxs)("div", {
                    className: "flex items-center justify-between mb-6",
                    children: [
                      (0, s.jsxs)("div", {
                        className: "flex items-center gap-4",
                        children: [
                          (0, s.jsx)("div", {
                            className: "p-3 rounded-xl bg-primary/10",
                            children: (0, s.jsx)(a.A, {
                              className: "h-6 w-6 text-primary",
                            }),
                          }),
                          (0, s.jsxs)("div", {
                            children: [
                              (0, s.jsx)("h1", {
                                className: "text-2xl font-bold",
                                children: e("tools.coverLetter.title"),
                              }),
                              (0, s.jsx)("p", {
                                className: "text-muted-foreground mt-1",
                                children: e("tools.coverLetter.description"),
                              }),
                            ],
                          }),
                        ],
                      }),
                      (0, s.jsxs)(N.$, {
                        onClick: h,
                        className: "rounded-full",
                        children: [
                          (0, s.jsx)(i.A, { className: "h-4 w-4 mr-2" }),
                          e("tools.coverLetter.createNew"),
                        ],
                      }),
                    ],
                  }),
                }),
                (0, s.jsxs)(c.P.div, {
                  initial: { opacity: 0, y: 20 },
                  animate: { opacity: 1, y: 0 },
                  transition: { duration: 0.3 },
                  className:
                    "grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-4",
                  children: [
                    t.map((e) =>
                      (0, s.jsx)(
                        k,
                        { coverLetter: e, onClick: () => u(e.id), onDelete: p },
                        e.id,
                      ),
                    ),
                    0 === t.length &&
                      (0, s.jsx)(k, { isCreateNew: !0, onClick: h }),
                  ],
                }),
              ],
            });
      }
    },
    78084: (e, r, t) => {
      Promise.resolve().then(t.bind(t, 42629));
    },
  },
  (e) => {
    var r = (r) => e((e.s = r));
    (e.O(0, [46593, 36209, 84121, 72076, 77358], () => r(78084)),
      (_N_E = e.O()));
  },
]);
