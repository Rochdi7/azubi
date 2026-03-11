(self.webpackChunk_N_E = self.webpackChunk_N_E || []).push([
  [65354],
  {
    65614: (e, s, t) => {
      Promise.resolve().then(t.bind(t, 75941));
    },
    75941: (e, s, t) => {
      "use strict";
      (t.r(s), t.d(s, { default: () => _ }));
      var a = t(70207),
        l = t(87223),
        r = t(18051),
        n = t(90817),
        i = t(39441),
        d = t(93501),
        c = t(40167),
        o = t(82110),
        x = t(43431),
        h = t(59137),
        m = t(61280),
        u = t(49769),
        b = t(18790),
        p = t(251),
        g = t(98534),
        F = t(28560),
        j = t(88117),
        w = t(81994),
        f = t(84217);
      function N(e) {
        let { application: s, onClick: t, selected: l = !1 } = e;
        return (0, a.jsxs)("div", {
          onClick: t,
          className: (0, o.cn)(
            "relative bg-white rounded-xl p-4 border-2 transition-all duration-200 cursor-pointer active:scale-[0.98] shadow-sm",
            l
              ? "border-[#F4991A] bg-[#F4991A]/5"
              : "border-[#344F1F]/10 hover:border-[#F4991A]/30 hover:shadow-md",
          ),
          children: [
            !s.is_viewed &&
              (0, a.jsx)("div", {
                className: "absolute top-3 right-3",
                children: (0, a.jsx)("span", {
                  className:
                    "inline-flex items-center px-2.5 py-1 rounded-full text-xs font-semibold bg-[#F4991A] text-white",
                  children: "Neu",
                }),
              }),
            (0, a.jsxs)("div", {
              className: "mb-3",
              children: [
                (0, a.jsx)("div", {
                  className: "flex items-start justify-between gap-2 mb-2",
                  children: (0, a.jsxs)("div", {
                    className: "flex items-center gap-2 flex-1 min-w-0",
                    children: [
                      (0, a.jsx)("div", {
                        className:
                          "w-10 h-10 rounded-full bg-[#F2EAD3] flex items-center justify-center flex-shrink-0",
                        children: (0, a.jsx)(F.A, {
                          className: "h-5 w-5 text-[#344F1F]",
                        }),
                      }),
                      (0, a.jsxs)("div", {
                        className: "flex-1 min-w-0",
                        children: [
                          (0, a.jsx)("h3", {
                            className:
                              "font-semibold text-[#344F1F] truncate text-sm",
                            children: s.student_name,
                          }),
                          s.student_location &&
                            (0, a.jsx)("p", {
                              className: "text-xs text-[#344F1F]/50 truncate",
                              children: s.student_location,
                            }),
                        ],
                      }),
                    ],
                  }),
                }),
                (0, a.jsx)(p.W, { status: s.status, className: "text-xs" }),
              ],
            }),
            (0, a.jsxs)("div", {
              className: "space-y-2",
              children: [
                (0, a.jsxs)("div", {
                  className: "flex items-start gap-2",
                  children: [
                    (0, a.jsx)(j.A, {
                      className: "h-4 w-4 text-[#F4991A] flex-shrink-0 mt-0.5",
                    }),
                    (0, a.jsx)("p", {
                      className: "text-sm text-[#344F1F] line-clamp-2 flex-1",
                      children: s.job_title,
                    }),
                  ],
                }),
                s.german_level &&
                  (0, a.jsxs)("div", {
                    className: "flex items-center gap-2",
                    children: [
                      (0, a.jsx)(w.A, {
                        className: "h-4 w-4 text-[#F4991A] flex-shrink-0",
                      }),
                      (0, a.jsx)("p", {
                        className: "text-sm text-[#344F1F]/70",
                        children: s.german_level,
                      }),
                    ],
                  }),
                (0, a.jsxs)("div", {
                  className: "flex items-center gap-2",
                  children: [
                    (0, a.jsx)(f.A, {
                      className: "h-4 w-4 text-[#F4991A] flex-shrink-0",
                    }),
                    (0, a.jsxs)("p", {
                      className: "text-xs text-[#344F1F]/70",
                      children: [
                        "Beworben am ",
                        new Date(s.created_at).toLocaleDateString("de-DE", {
                          day: "2-digit",
                          month: "short",
                          year: "numeric",
                        }),
                      ],
                    }),
                  ],
                }),
              ],
            }),
            s.internal_rating &&
              s.internal_rating > 0 &&
              (0, a.jsx)("div", {
                className: "mt-3 pt-3 border-t border-[#344F1F]/10",
                children: (0, a.jsxs)("div", {
                  className: "flex items-center gap-1",
                  children: [
                    Array.from({ length: 5 }).map((e, t) =>
                      (0, a.jsx)(
                        "div",
                        {
                          className: (0, o.cn)(
                            "w-4 h-4 rounded-full",
                            t < s.internal_rating
                              ? "bg-[#F4991A]"
                              : "bg-[#344F1F]/10",
                          ),
                        },
                        t,
                      ),
                    ),
                    (0, a.jsxs)("span", {
                      className: "ml-2 text-xs text-[#344F1F]/70",
                      children: [s.internal_rating, "/5"],
                    }),
                  ],
                }),
              }),
          ],
        });
      }
      var v = t(4130);
      function _() {
        let e = (0, r.useRouter)(),
          { currentEmployer: s, employerId: t, isLoading: F } = (0, n.B)(),
          [j, w] = (0, l.useState)([]),
          [f, _] = (0, l.useState)([]),
          [A, y] = (0, l.useState)(!0),
          [k, E] = (0, l.useState)(new Set()),
          [S, C] = (0, l.useState)("all"),
          [z, D] = (0, l.useState)(""),
          [W, B] = (0, l.useState)(!1),
          L = (function (e) {
            let [s, t] = (0, l.useState)(!1);
            return (
              (0, l.useEffect)(() => {
                let s = window.matchMedia(e);
                t(s.matches);
                let a = (e) => {
                  t(e.matches);
                };
                return (
                  s.addEventListener("change", a),
                  () => s.removeEventListener("change", a)
                );
              }, [e]),
              s
            );
          })("(max-width: 768px)");
        ((0, l.useEffect)(() => {
          t && P();
        }, [t]),
          (0, l.useEffect)(() => {
            V();
          }, [j, S, z]));
        let P = async () => {
            if (t) {
              y(!0);
              try {
                let e = await fetch(
                  "/api/arbeitgeber/applications?employerId=".concat(t),
                );
                if (!e.ok) throw Error("Failed to fetch applications");
                let s = await e.json();
                w(s.applications || []);
              } catch (e) {
                console.error("Error fetching applications:", e);
              } finally {
                y(!1);
              }
            }
          },
          V = () => {
            let e = [...j];
            if (
              ("all" !== S && (e = e.filter((e) => e.status === S)), z.trim())
            ) {
              let s = z.toLowerCase();
              e = e.filter(
                (e) =>
                  e.student_name.toLowerCase().includes(s) ||
                  e.student_email.toLowerCase().includes(s) ||
                  e.job_title.toLowerCase().includes(s),
              );
            }
            _(e);
          },
          I = async (e) => {
            if (0 !== k.size && t) {
              B(!0);
              try {
                if (
                  !(
                    await fetch("/api/arbeitgeber/applications/bulk-action", {
                      method: "POST",
                      headers: { "Content-Type": "application/json" },
                      body: JSON.stringify({
                        employerId: t,
                        application_ids: Array.from(k),
                        action: e,
                      }),
                    })
                  ).ok
                )
                  throw Error("Bulk action failed");
                (await P(), E(new Set()));
              } catch (e) {
                console.error("Error performing bulk action:", e);
              } finally {
                B(!1);
              }
            }
          },
          M = (e) =>
            new Date(e).toLocaleDateString("de-DE", {
              day: "2-digit",
              month: "short",
              year: "numeric",
            }),
          O = (() => {
            let e = {
              all: j.length,
              submitted: 0,
              under_review: 0,
              shortlisted: 0,
              interview_scheduled: 0,
              offer_sent: 0,
              accepted: 0,
              rejected: 0,
            };
            return (
              j.forEach((s) => {
                void 0 !== e[s.status] && e[s.status]++;
              }),
              e
            );
          })(),
          R = (0, l.useMemo)(
            () => [
              {
                key: "student_name",
                header: "Bewerber",
                width: 280,
                minWidth: 200,
                maxWidth: 400,
                sortable: !0,
                resizable: !0,
                truncate: !1,
                accessor: (e) => e.student_name,
                render: (e) =>
                  (0, a.jsxs)("div", {
                    className: "flex items-center gap-2",
                    children: [
                      (0, a.jsx)("span", {
                        className:
                          "text-sm font-semibold text-[#344F1F] whitespace-nowrap",
                        children: e.student_name,
                      }),
                      !e.is_viewed &&
                        (0, a.jsx)("span", {
                          className:
                            "inline-flex items-center px-2 py-0.5 rounded-full text-xs font-medium bg-[#F4991A] text-white whitespace-nowrap",
                          children: "Neu",
                        }),
                      e.student_location &&
                        (0, a.jsxs)("span", {
                          className:
                            "text-xs text-[#344F1F]/50 whitespace-nowrap",
                          children: ["\xb7 ", e.student_location],
                        }),
                    ],
                  }),
              },
              {
                key: "job_title",
                header: "Position",
                width: 250,
                minWidth: 180,
                maxWidth: 400,
                sortable: !0,
                resizable: !0,
                truncate: !0,
                accessor: (e) => e.job_title,
              },
              {
                key: "german_level",
                header: "Deutschkenntnisse",
                width: 150,
                minWidth: 120,
                maxWidth: 200,
                sortable: !0,
                resizable: !0,
                truncate: !1,
                render: (e) =>
                  (0, a.jsx)("span", {
                    className: "whitespace-nowrap",
                    children: e.german_level || "none",
                  }),
                accessor: (e) => e.german_level || "",
              },
              {
                key: "status",
                header: "Status",
                width: 160,
                minWidth: 140,
                maxWidth: 180,
                sortable: !0,
                resizable: !0,
                truncate: !1,
                render: (e) => (0, a.jsx)(p.W, { status: e.status }),
                accessor: (e) => e.status,
              },
              {
                key: "created_at",
                header: "Eingereicht",
                width: 140,
                minWidth: 120,
                maxWidth: 180,
                sortable: !0,
                resizable: !0,
                truncate: !1,
                render: (e) =>
                  (0, a.jsx)("span", {
                    className: "text-sm text-[#344F1F]/70 whitespace-nowrap",
                    children: M(e.created_at),
                  }),
                accessor: (e) => new Date(e.created_at).getTime(),
              },
            ],
            [],
          );
        return F
          ? (0, a.jsx)("div", {
              className: "min-h-screen bg-[#F9F5F0] py-8 px-4 sm:px-6 lg:px-8",
              children: (0, a.jsx)("div", {
                className: "max-w-7xl mx-auto",
                children: (0, a.jsx)(v.Fe, {}),
              }),
            })
          : t && s
            ? A
              ? (0, a.jsx)("div", {
                  className:
                    "min-h-screen bg-[#F9F5F0] py-8 px-4 sm:px-6 lg:px-8",
                  children: (0, a.jsx)("div", {
                    className: "max-w-7xl mx-auto",
                    children: (0, a.jsx)(v.Fe, {}),
                  }),
                })
              : (0, a.jsx)("div", {
                  className:
                    "min-h-screen bg-[#F9F5F0] py-8 px-4 sm:px-6 lg:px-8",
                  children: (0, a.jsxs)("div", {
                    className: "max-w-7xl mx-auto",
                    children: [
                      (0, a.jsxs)("div", {
                        className: "mb-8",
                        children: [
                          (0, a.jsx)("h1", {
                            className: "text-3xl font-bold text-[#344F1F] mb-2",
                            children: "Bewerbungen",
                          }),
                          (0, a.jsx)("p", {
                            className: "text-[#344F1F]/70",
                            children:
                              "Verwalten Sie alle eingehenden Bewerbungen f\xfcr Ihre Stellenangebote",
                          }),
                        ],
                      }),
                      (0, a.jsxs)("div", {
                        className: "grid grid-cols-1 md:grid-cols-4 gap-4 mb-8",
                        children: [
                          (0, a.jsxs)("div", {
                            className:
                              "bg-white rounded-xl p-6 border border-[#344F1F]/10",
                            children: [
                              (0, a.jsx)("p", {
                                className: "text-sm text-[#344F1F]/70 mb-1",
                                children: "Gesamt",
                              }),
                              (0, a.jsx)("p", {
                                className: "text-3xl font-bold text-[#344F1F]",
                                children: O.all,
                              }),
                            ],
                          }),
                          (0, a.jsxs)("div", {
                            className:
                              "bg-white rounded-xl p-6 border border-[#344F1F]/10",
                            children: [
                              (0, a.jsx)("p", {
                                className: "text-sm text-[#344F1F]/70 mb-1",
                                children: "Neu eingereicht",
                              }),
                              (0, a.jsx)("p", {
                                className: "text-3xl font-bold text-[#F4991A]",
                                children: O.submitted,
                              }),
                            ],
                          }),
                          (0, a.jsxs)("div", {
                            className:
                              "bg-white rounded-xl p-6 border border-[#344F1F]/10",
                            children: [
                              (0, a.jsx)("p", {
                                className: "text-sm text-[#344F1F]/70 mb-1",
                                children: "In Pr\xfcfung",
                              }),
                              (0, a.jsx)("p", {
                                className: "text-3xl font-bold text-[#F4991A]",
                                children: O.under_review,
                              }),
                            ],
                          }),
                          (0, a.jsxs)("div", {
                            className:
                              "bg-white rounded-xl p-6 border border-[#344F1F]/10",
                            children: [
                              (0, a.jsx)("p", {
                                className: "text-sm text-[#344F1F]/70 mb-1",
                                children: "Vorauswahl",
                              }),
                              (0, a.jsx)("p", {
                                className: "text-3xl font-bold text-[#344F1F]",
                                children: O.shortlisted,
                              }),
                            ],
                          }),
                        ],
                      }),
                      (0, a.jsx)("div", {
                        className:
                          "bg-white rounded-xl p-6 border border-[#344F1F]/10 mb-6",
                        children: (0, a.jsxs)("div", {
                          className: "flex flex-col md:flex-row gap-4",
                          children: [
                            (0, a.jsx)("div", {
                              className: "flex-1",
                              children: (0, a.jsxs)("div", {
                                className: "relative",
                                children: [
                                  (0, a.jsx)(x.A, {
                                    className:
                                      "absolute left-3 top-1/2 transform -translate-y-1/2 h-5 w-5 text-[#344F1F]/50",
                                  }),
                                  (0, a.jsx)(c.p, {
                                    type: "text",
                                    placeholder:
                                      "Nach Name, E-Mail oder Stellentitel suchen...",
                                    value: z,
                                    onChange: (e) => D(e.target.value),
                                    className:
                                      "pl-10 bg-[#F9F5F0] rounded-lg border-[#344F1F]/15 focus:border-[#F4991A] focus:ring-[#F4991A]/40",
                                  }),
                                ],
                              }),
                            }),
                            (0, a.jsx)("div", {
                              className: "w-full md:w-64",
                              children: (0, a.jsxs)(d.l6, {
                                value: S,
                                onValueChange: C,
                                children: [
                                  (0, a.jsxs)(d.bq, {
                                    className:
                                      "bg-[#F9F5F0] rounded-lg border-[#344F1F]/15 focus:border-[#F4991A] focus:ring-[#F4991A]/40",
                                    children: [
                                      (0, a.jsx)(h.A, {
                                        className: "h-4 w-4 mr-2",
                                      }),
                                      (0, a.jsx)(d.yv, {
                                        placeholder: "Status filtern",
                                      }),
                                    ],
                                  }),
                                  (0, a.jsxs)(d.gC, {
                                    className:
                                      "bg-white rounded-xl border-[#344F1F]/15",
                                    children: [
                                      (0, a.jsxs)(d.eb, {
                                        value: "all",
                                        children: ["Alle Status (", O.all, ")"],
                                      }),
                                      (0, a.jsxs)(d.eb, {
                                        value: "submitted",
                                        children: [
                                          "Eingereicht (",
                                          O.submitted,
                                          ")",
                                        ],
                                      }),
                                      (0, a.jsxs)(d.eb, {
                                        value: "under_review",
                                        children: [
                                          "In Pr\xfcfung (",
                                          O.under_review,
                                          ")",
                                        ],
                                      }),
                                      (0, a.jsxs)(d.eb, {
                                        value: "shortlisted",
                                        children: [
                                          "Vorauswahl (",
                                          O.shortlisted,
                                          ")",
                                        ],
                                      }),
                                      (0, a.jsxs)(d.eb, {
                                        value: "interview_scheduled",
                                        children: [
                                          "Gespr\xe4ch geplant (",
                                          O.interview_scheduled,
                                          ")",
                                        ],
                                      }),
                                      (0, a.jsxs)(d.eb, {
                                        value: "offer_sent",
                                        children: [
                                          "Angebot gesendet (",
                                          O.offer_sent,
                                          ")",
                                        ],
                                      }),
                                      (0, a.jsxs)(d.eb, {
                                        value: "accepted",
                                        children: [
                                          "Angenommen (",
                                          O.accepted,
                                          ")",
                                        ],
                                      }),
                                      (0, a.jsxs)(d.eb, {
                                        value: "rejected",
                                        children: [
                                          "Abgelehnt (",
                                          O.rejected,
                                          ")",
                                        ],
                                      }),
                                    ],
                                  }),
                                ],
                              }),
                            }),
                          ],
                        }),
                      }),
                      k.size > 0 &&
                        (0, a.jsxs)("div", {
                          className:
                            "bg-[#F4991A] rounded-xl p-4 mb-6 flex items-center justify-between flex-wrap gap-3",
                          children: [
                            (0, a.jsxs)("p", {
                              className: "text-white font-semibold",
                              children: [
                                k.size,
                                " Bewerbung",
                                1 !== k.size ? "en" : "",
                                " ausgew\xe4hlt",
                              ],
                            }),
                            (0, a.jsxs)("div", {
                              className: "flex gap-2 flex-wrap",
                              children: [
                                (0, a.jsxs)(i.$, {
                                  onClick: () => I("mark_viewed"),
                                  disabled: W,
                                  className: (0, o.cn)(
                                    "rounded-full bg-white text-[#F4991A] px-6",
                                    "hover:bg-[#F2EAD3] transition-all duration-200",
                                  ),
                                  size: "sm",
                                  children: [
                                    (0, a.jsx)(m.A, {
                                      className: "h-4 w-4 mr-2",
                                    }),
                                    "Als gelesen markieren",
                                  ],
                                }),
                                (0, a.jsxs)(i.$, {
                                  onClick: () => I("shortlist"),
                                  disabled: W,
                                  className: (0, o.cn)(
                                    "rounded-full bg-white text-[#344F1F] px-6",
                                    "hover:bg-[#F2EAD3] transition-all duration-200",
                                  ),
                                  size: "sm",
                                  children: [
                                    (0, a.jsx)(u.A, {
                                      className: "h-4 w-4 mr-2",
                                    }),
                                    "Vorausw\xe4hlen",
                                  ],
                                }),
                                (0, a.jsxs)(i.$, {
                                  onClick: () => I("reject"),
                                  disabled: W,
                                  className: (0, o.cn)(
                                    "rounded-full bg-white text-[#EF4444] px-6",
                                    "hover:bg-[#F2EAD3] transition-all duration-200",
                                  ),
                                  size: "sm",
                                  children: [
                                    (0, a.jsx)(b.A, {
                                      className: "h-4 w-4 mr-2",
                                    }),
                                    "Ablehnen",
                                  ],
                                }),
                              ],
                            }),
                          ],
                        }),
                      L
                        ? (0, a.jsx)("div", {
                            className: "space-y-3",
                            children:
                              0 === f.length
                                ? (0, a.jsx)("div", {
                                    className:
                                      "bg-white rounded-xl p-12 border border-[#344F1F]/10 text-center",
                                    children: (0, a.jsx)("p", {
                                      className: "text-[#344F1F]/70",
                                      children:
                                        z || "all" !== S
                                          ? "Keine Bewerbungen gefunden"
                                          : "Noch keine Bewerbungen vorhanden",
                                    }),
                                  })
                                : f.map((s) =>
                                    (0, a.jsx)(
                                      N,
                                      {
                                        application: s,
                                        onClick: () =>
                                          e.push(
                                            "/arbeitgeber/bewerbungen/".concat(
                                              s.id,
                                            ),
                                          ),
                                        selected: k.has(s.id),
                                      },
                                      s.id,
                                    ),
                                  ),
                          })
                        : (0, a.jsx)(g.b, {
                            columns: R,
                            data: f,
                            keyExtractor: (e) => e.id,
                            loading: !1,
                            emptyMessage:
                              z || "all" !== S
                                ? "Keine Bewerbungen gefunden"
                                : "Noch keine Bewerbungen vorhanden",
                            onRowClick: (s) =>
                              e.push("/arbeitgeber/bewerbungen/".concat(s.id)),
                            rowClassName: (e) =>
                              e.is_viewed ? "" : "bg-[#F4991A]/5",
                            selectable: !0,
                            selectedRows: k,
                            onSelectionChange: E,
                            stickyHeader: !1,
                            defaultSort: {
                              key: "created_at",
                              direction: "desc",
                            },
                          }),
                    ],
                  }),
                })
            : null;
      }
    },
  },
  (e) => {
    var s = (s) => e((e.s = s));
    (e.O(0, [46593, 36209, 84121, 72076, 77358], () => s(65614)),
      (_N_E = e.O()));
  },
]);
