(self.webpackChunk_N_E = self.webpackChunk_N_E || []).push([
  [41123],
  {
    15017: (e, s, t) => {
      "use strict";
      (t.r(s), t.d(s, { default: () => O }));
      var a = t(70207),
        l = t(87223),
        n = t(31159),
        i = t(69312),
        r = t(37426),
        c = t(43431),
        d = t(59137),
        m = t(39441),
        x = t(40167),
        h = t(18051),
        o = t(93501),
        u = t(80187),
        p = t(5313),
        j = t(95992),
        b = t(50018),
        f = t(17802),
        g = t(6710),
        F = t(28131),
        N = t(42678),
        v = t(18790),
        w = t(1701),
        y = t(81994),
        A = t(88117),
        k = t(61280),
        _ = t(52461),
        S = t(82110),
        E = t(36600);
      let C = {
        healthcare: "Gesundheitswesen",
        it: "IT & Technologie",
        engineering: "Ingenieurwesen",
        hospitality: "Gastgewerbe",
        automotive: "Automobilindustrie",
        finance: "Finanzwesen",
        logistics: "Logistik",
        construction: "Bauwesen",
        sales: "Vertrieb",
        education: "Bildung",
        business_admin: "Verwaltung",
        media: "Medien",
        creative: "Kreativ",
      };
      function I(e) {
        var s;
        let {
            candidate: t,
            onViewProfile: n,
            onExpressInterest: i,
            className: r,
          } = e,
          [c, d] = (0, l.useState)(!1),
          x = (0, E.Mn)(t),
          h = (0, E.IM)(t.first_name, t.last_name, t.full_name),
          o = () => {
            if (!t.interest_status) return null;
            let e = {
                pending: {
                  label: "Ausstehend",
                  icon: F.A,
                  className:
                    "bg-[#F4991A]/10 text-[#F4991A] border-[#F4991A]/20",
                },
                accepted: {
                  label: "Angenommen",
                  icon: N.A,
                  className:
                    "bg-[#344F1F]/10 text-[#344F1F] border-[#344F1F]/20",
                },
                declined: {
                  label: "Abgelehnt",
                  icon: v.A,
                  className: "bg-red-50 text-red-700 border-red-200",
                },
                withdrawn: {
                  label: "Zur\xfcckgezogen",
                  icon: v.A,
                  className: "bg-gray-100 text-gray-600 border-gray-200",
                },
              }[t.interest_status],
              s = e.icon;
            return (0, a.jsxs)(f.E, {
              variant: "outline",
              className: (0, S.cn)(
                "rounded-full text-xs font-medium",
                e.className,
              ),
              children: [(0, a.jsx)(s, { className: "h-3 w-3 mr-1" }), e.label],
            });
          };
        return (0, a.jsx)(u.Zp, {
          className: (0, S.cn)(
            "border-[#344F1F]/10 shadow-sm rounded-xl transition-all duration-200",
            c && "shadow-md border-[#F4991A]/30",
            r,
          ),
          onMouseEnter: () => d(!0),
          onMouseLeave: () => d(!1),
          children: (0, a.jsx)(u.Wu, {
            className: "p-4 sm:p-5 md:p-6",
            children: (0, a.jsxs)("div", {
              className: "space-y-3 sm:space-y-4",
              children: [
                (0, a.jsxs)("div", {
                  className: "flex items-start gap-3 sm:gap-4",
                  children: [
                    (0, a.jsx)("div", {
                      className:
                        "relative h-14 w-14 sm:h-16 sm:w-16 overflow-hidden rounded-full border-2 border-[#F4991A]/20 shadow-sm bg-white flex-shrink-0",
                      children: t.avatar_url
                        ? (0, a.jsx)(b.default, {
                            src: t.avatar_url,
                            alt: x,
                            fill: !0,
                            className: "object-cover",
                          })
                        : (0, a.jsx)("div", {
                            className:
                              "w-full h-full bg-[#F2EAD3] flex items-center justify-center",
                            children: (0, a.jsx)("span", {
                              className:
                                "text-xl sm:text-2xl font-semibold text-[#344F1F]",
                              children: h,
                            }),
                          }),
                    }),
                    (0, a.jsxs)("div", {
                      className: "flex-1 min-w-0",
                      children: [
                        (0, a.jsxs)("div", {
                          className: "flex items-center gap-2",
                          children: [
                            (0, a.jsx)("h3", {
                              className:
                                "font-semibold text-base sm:text-lg text-[#344F1F] truncate",
                              children: x,
                            }),
                            "verified" === t.verification_status &&
                              (0, a.jsx)(g.$, {
                                status: "verified",
                                size: "sm",
                                showLabel: !1,
                              }),
                          ],
                        }),
                        t.headline &&
                          (0, a.jsx)("p", {
                            className:
                              "text-xs sm:text-sm text-[#344F1F]/70 truncate mt-0.5 sm:mt-1",
                            children: t.headline,
                          }),
                        (0, a.jsxs)("div", {
                          className:
                            "flex items-center gap-1 text-xs sm:text-sm text-[#344F1F]/70 mt-1",
                          children: [
                            (0, a.jsx)(w.A, {
                              className:
                                "h-3 w-3 sm:h-3.5 sm:w-3.5 flex-shrink-0",
                            }),
                            (0, a.jsx)("span", {
                              className: "truncate",
                              children:
                                t.current_location ||
                                "Standort nicht angegeben",
                            }),
                          ],
                        }),
                      ],
                    }),
                  ],
                }),
                o() &&
                  (0, a.jsx)("div", {
                    className: "flex justify-end -mt-1",
                    children: o(),
                  }),
                (0, a.jsxs)("div", {
                  className: "space-y-1.5 sm:space-y-2",
                  children: [
                    (0, a.jsxs)("div", {
                      className: "flex items-center gap-2",
                      children: [
                        (0, a.jsx)(y.A, {
                          className:
                            "h-3.5 w-3.5 sm:h-4 sm:w-4 text-[#344F1F]/70 flex-shrink-0",
                        }),
                        (0, a.jsxs)("span", {
                          className: "text-xs sm:text-sm text-[#344F1F]",
                          children: [
                            "Deutsch: ",
                            (0, a.jsx)("strong", {
                              className: "text-[#F4991A]",
                              children:
                                (null === (s = t.german_level) || void 0 === s
                                  ? void 0
                                  : s.toUpperCase()) || "Nicht angegeben",
                            }),
                          ],
                        }),
                      ],
                    }),
                    t.preferred_sectors &&
                      t.preferred_sectors.length > 0 &&
                      (0, a.jsxs)("div", {
                        className: "flex items-start gap-2",
                        children: [
                          (0, a.jsx)(A.A, {
                            className:
                              "h-3.5 w-3.5 sm:h-4 sm:w-4 text-[#344F1F]/70 flex-shrink-0 mt-0.5",
                          }),
                          (0, a.jsx)("span", {
                            className:
                              "text-xs sm:text-sm text-[#344F1F] line-clamp-2",
                            children: t.preferred_sectors
                              .map((e) => C[e] || e)
                              .join(", "),
                          }),
                        ],
                      }),
                  ],
                }),
                t.bio &&
                  (0, a.jsx)("div", {
                    className:
                      "text-xs sm:text-sm text-[#344F1F]/70 line-clamp-2 leading-relaxed",
                    children: t.bio,
                  }),
                (0, a.jsxs)("div", {
                  className: "flex gap-2 pt-1 sm:pt-2",
                  children: [
                    (0, a.jsxs)(m.$, {
                      onClick: () => n(t.user_id),
                      className:
                        "flex-1 rounded-full bg-[#F4991A] hover:bg-[#E5890F] text-white min-h-[44px] text-sm",
                      children: [
                        (0, a.jsx)(k.A, {
                          className: "h-4 w-4 mr-1.5 sm:mr-2",
                        }),
                        (0, a.jsx)("span", {
                          className: "hidden xs:inline",
                          children: "Profil ansehen",
                        }),
                        (0, a.jsx)("span", {
                          className: "xs:hidden",
                          children: "Ansehen",
                        }),
                      ],
                    }),
                    !t.interest_status &&
                      (0, a.jsx)(m.$, {
                        onClick: () => i(t.user_id),
                        variant: "outline",
                        className:
                          "rounded-full border-[#344F1F]/20 hover:bg-[#F2EAD3] min-h-[44px] min-w-[44px]",
                        "aria-label": "Interesse bekunden",
                        children: (0, a.jsx)(_.A, { className: "h-4 w-4" }),
                      }),
                  ],
                }),
              ],
            }),
          }),
        });
      }
      var B = t(61889),
        z = t(27239),
        T = t(30478),
        K = t(84217),
        V = t(82164),
        D = t(95540),
        P = t(39945);
      let $ = {
        healthcare: "Gesundheitswesen",
        it: "IT & Technologie",
        engineering: "Ingenieurwesen",
        hospitality: "Gastgewerbe",
        automotive: "Automobilindustrie",
        finance: "Finanzwesen",
        logistics: "Logistik",
        construction: "Bauwesen",
        sales: "Vertrieb",
        education: "Bildung",
        business_admin: "Verwaltung",
        media: "Medien",
        creative: "Kreativ",
      };
      function L(e) {
        var s, t;
        let {
            candidateId: i,
            employerId: r,
            isOpen: c,
            onClose: d,
            onExpressInterest: x,
          } = e,
          [h, o] = (0, l.useState)(null),
          [u, p] = (0, l.useState)(!1),
          [j, g] = (0, l.useState)(null);
        (0, l.useEffect)(() => {
          c && i && r && v();
        }, [c, i, r]);
        let v = async () => {
          if (i && r) {
            (p(!0), g(null));
            try {
              let e = await fetch(
                  "/api/arbeitgeber/candidates/"
                    .concat(i, "?employerId=")
                    .concat(r),
                ),
                s = await e.json();
              if (!e.ok)
                throw Error(s.error || "Failed to fetch candidate details");
              o(s.candidate);
            } catch (e) {
              (console.error("Error fetching candidate:", e),
                g(
                  e instanceof Error
                    ? e.message
                    : "Failed to load candidate details",
                ));
            } finally {
              p(!1);
            }
          }
        };
        return (0, a.jsx)(B.lG, {
          open: c,
          onOpenChange: d,
          children: (0, a.jsxs)(B.Cf, {
            className:
              "max-w-4xl max-h-[90vh] overflow-y-auto bg-[#F9F5F0] rounded-2xl sm:rounded-3xl p-4 sm:p-6",
            children: [
              (0, a.jsxs)(B.c7, {
                className: "space-y-1 sm:space-y-1.5",
                children: [
                  (0, a.jsx)(B.L3, {
                    className: "text-xl sm:text-2xl text-[#344F1F]",
                    children: "Kandidatenprofil",
                  }),
                  (0, a.jsx)(B.rr, {
                    className: "text-sm sm:text-base text-[#344F1F]/70",
                    children:
                      "Vollst\xe4ndige Profilinformationen des Kandidaten",
                  }),
                ],
              }),
              u
                ? (0, a.jsx)("div", {
                    className: "flex items-center justify-center py-12",
                    children: (0, a.jsx)(n.A, {
                      className: "h-8 w-8 animate-spin text-[#F4991A]",
                    }),
                  })
                : j
                  ? (0, a.jsxs)("div", {
                      className:
                        "bg-red-50 border border-red-200 rounded-xl p-4 text-center",
                      children: [
                        (0, a.jsx)("p", {
                          className: "text-red-800",
                          children: j,
                        }),
                        (0, a.jsx)(m.$, {
                          onClick: d,
                          variant: "outline",
                          className: "mt-4 rounded-full",
                          children: "Schlie\xdfen",
                        }),
                      ],
                    })
                  : h
                    ? (0, a.jsxs)("div", {
                        className: "space-y-4 sm:space-y-6",
                        children: [
                          (0, a.jsxs)("div", {
                            className:
                              "flex flex-col sm:flex-row items-start gap-4 sm:gap-6 bg-white rounded-xl p-4 sm:p-6 border border-[#344F1F]/10",
                            children: [
                              (0, a.jsx)("div", {
                                className:
                                  "relative h-20 w-20 sm:h-24 sm:w-24 overflow-hidden rounded-full border-2 border-[#F4991A]/20 shadow-sm bg-white flex-shrink-0 mx-auto sm:mx-0",
                                children: h.avatar_url
                                  ? (0, a.jsx)(b.default, {
                                      src: h.avatar_url,
                                      alt: h.full_name,
                                      fill: !0,
                                      className: "object-cover",
                                    })
                                  : (0, a.jsx)("div", {
                                      className:
                                        "w-full h-full bg-[#F2EAD3] flex items-center justify-center",
                                      children: (0, a.jsx)("span", {
                                        className:
                                          "text-3xl sm:text-4xl font-semibold text-[#344F1F]",
                                        children:
                                          (null === (s = h.full_name) ||
                                          void 0 === s
                                            ? void 0
                                            : s.charAt(0)) || "?",
                                      }),
                                    }),
                              }),
                              (0, a.jsxs)("div", {
                                className:
                                  "flex-1 text-center sm:text-left w-full",
                                children: [
                                  (0, a.jsx)("h2", {
                                    className:
                                      "text-xl sm:text-2xl font-bold text-[#344F1F]",
                                    children: h.full_name,
                                  }),
                                  h.headline &&
                                    (0, a.jsx)("p", {
                                      className:
                                        "text-sm sm:text-base text-[#344F1F]/70 mt-1",
                                      children: h.headline,
                                    }),
                                  (0, a.jsxs)("div", {
                                    className:
                                      "flex flex-col sm:flex-row sm:flex-wrap gap-2 sm:gap-4 mt-3 sm:mt-4",
                                    children: [
                                      (0, a.jsxs)("div", {
                                        className:
                                          "flex items-center justify-center sm:justify-start gap-2 text-xs sm:text-sm text-[#344F1F]/70",
                                        children: [
                                          (0, a.jsx)(w.A, {
                                            className:
                                              "h-3.5 w-3.5 sm:h-4 sm:w-4",
                                          }),
                                          (0, a.jsx)("span", {
                                            children:
                                              h.current_location ||
                                              "Standort nicht angegeben",
                                          }),
                                        ],
                                      }),
                                      (0, a.jsxs)("div", {
                                        className:
                                          "flex items-center justify-center sm:justify-start gap-2 text-xs sm:text-sm text-[#344F1F]/70",
                                        children: [
                                          (0, a.jsx)(y.A, {
                                            className:
                                              "h-3.5 w-3.5 sm:h-4 sm:w-4",
                                          }),
                                          (0, a.jsxs)("span", {
                                            children: [
                                              "Deutsch: ",
                                              (0, a.jsx)("strong", {
                                                className: "text-[#F4991A]",
                                                children:
                                                  null ===
                                                    (t = h.german_level) ||
                                                  void 0 === t
                                                    ? void 0
                                                    : t.toUpperCase(),
                                              }),
                                            ],
                                          }),
                                        ],
                                      }),
                                      h.documents_count > 0 &&
                                        (0, a.jsxs)("div", {
                                          className:
                                            "flex items-center justify-center sm:justify-start gap-2 text-xs sm:text-sm text-[#344F1F]/70",
                                          children: [
                                            (0, a.jsx)(z.A, {
                                              className:
                                                "h-3.5 w-3.5 sm:h-4 sm:w-4",
                                            }),
                                            (0, a.jsxs)("span", {
                                              children: [
                                                h.documents_count,
                                                " Dokumente",
                                              ],
                                            }),
                                          ],
                                        }),
                                    ],
                                  }),
                                  h.interest &&
                                    (0, a.jsx)("div", {
                                      className:
                                        "mt-3 sm:mt-4 flex justify-center sm:justify-start",
                                      children: (0, a.jsxs)(f.E, {
                                        variant: "outline",
                                        className: (0, S.cn)(
                                          "rounded-full text-xs",
                                          "pending" === h.interest.status &&
                                            "bg-[#F4991A]/10 text-[#F4991A] border-[#F4991A]/20",
                                          "accepted" === h.interest.status &&
                                            "bg-[#344F1F]/10 text-[#344F1F] border-[#344F1F]/20",
                                        ),
                                        children: [
                                          "pending" === h.interest.status &&
                                            (0, a.jsx)(F.A, {
                                              className: "h-3 w-3 mr-1",
                                            }),
                                          "accepted" === h.interest.status &&
                                            (0, a.jsx)(N.A, {
                                              className: "h-3 w-3 mr-1",
                                            }),
                                          "pending" === h.interest.status
                                            ? "Interesse bekundet"
                                            : "Interesse angenommen",
                                        ],
                                      }),
                                    }),
                                ],
                              }),
                            ],
                          }),
                          h.bio &&
                            (0, a.jsxs)("div", {
                              className:
                                "bg-white rounded-xl p-4 sm:p-6 border border-[#344F1F]/10",
                              children: [
                                (0, a.jsx)("h3", {
                                  className:
                                    "text-base sm:text-lg font-semibold text-[#344F1F] mb-2 sm:mb-3",
                                  children: "\xdcber mich",
                                }),
                                (0, a.jsx)("p", {
                                  className:
                                    "text-sm sm:text-base text-[#344F1F]/80 leading-relaxed",
                                  children: h.bio,
                                }),
                              ],
                            }),
                          (0, a.jsxs)("div", {
                            className:
                              "bg-white rounded-xl p-4 sm:p-6 border border-[#344F1F]/10",
                            children: [
                              (0, a.jsxs)("h3", {
                                className:
                                  "text-base sm:text-lg font-semibold text-[#344F1F] mb-3 flex items-center gap-2",
                                children: [
                                  (0, a.jsx)(A.A, {
                                    className: "h-4 w-4 sm:h-5 sm:w-5",
                                  }),
                                  "F\xe4higkeiten & Bereiche",
                                ],
                              }),
                              (0, a.jsxs)("div", {
                                className: "space-y-3 sm:space-y-4",
                                children: [
                                  h.preferred_sectors &&
                                    h.preferred_sectors.length > 0 &&
                                    (0, a.jsxs)("div", {
                                      children: [
                                        (0, a.jsx)("p", {
                                          className:
                                            "text-xs sm:text-sm text-[#344F1F]/70 mb-2",
                                          children: "Bevorzugte Bereiche:",
                                        }),
                                        (0, a.jsx)("div", {
                                          className:
                                            "flex flex-wrap gap-1.5 sm:gap-2",
                                          children: h.preferred_sectors.map(
                                            (e, s) =>
                                              (0, a.jsx)(
                                                f.E,
                                                {
                                                  className:
                                                    "bg-[#F4991A]/10 text-[#F4991A] border-0 rounded-full text-xs",
                                                  children: $[e] || e,
                                                },
                                                s,
                                              ),
                                          ),
                                        }),
                                      ],
                                    }),
                                  h.skills &&
                                    h.skills.length > 0 &&
                                    (0, a.jsxs)("div", {
                                      children: [
                                        (0, a.jsx)("p", {
                                          className:
                                            "text-xs sm:text-sm text-[#344F1F]/70 mb-2",
                                          children: "F\xe4higkeiten:",
                                        }),
                                        (0, a.jsx)("div", {
                                          className:
                                            "flex flex-wrap gap-1.5 sm:gap-2",
                                          children: h.skills.map((e, s) =>
                                            (0, a.jsx)(
                                              f.E,
                                              {
                                                variant: "secondary",
                                                className:
                                                  "bg-[#F2EAD3] text-[#344F1F] border-0 rounded-full text-xs",
                                                children: e,
                                              },
                                              s,
                                            ),
                                          ),
                                        }),
                                      ],
                                    }),
                                ],
                              }),
                            ],
                          }),
                          h.languages &&
                            h.languages.length > 0 &&
                            (0, a.jsxs)("div", {
                              className:
                                "bg-white rounded-xl p-4 sm:p-6 border border-[#344F1F]/10",
                              children: [
                                (0, a.jsxs)("h3", {
                                  className:
                                    "text-base sm:text-lg font-semibold text-[#344F1F] mb-3 flex items-center gap-2",
                                  children: [
                                    (0, a.jsx)(y.A, {
                                      className: "h-4 w-4 sm:h-5 sm:w-5",
                                    }),
                                    "Sprachkenntnisse",
                                  ],
                                }),
                                (0, a.jsx)("div", {
                                  className: "space-y-2",
                                  children: h.languages.map((e, s) =>
                                    (0, a.jsxs)(
                                      "div",
                                      {
                                        className:
                                          "flex items-center justify-between gap-2",
                                        children: [
                                          (0, a.jsx)("span", {
                                            className:
                                              "text-sm sm:text-base text-[#344F1F] truncate",
                                            children: e.language || e.name,
                                          }),
                                          (0, a.jsx)(f.E, {
                                            variant: "outline",
                                            className:
                                              "bg-[#F2EAD3]/50 text-[#344F1F] border-[#344F1F]/20 rounded-full text-xs flex-shrink-0",
                                            children: e.proficiency || e.level,
                                          }),
                                        ],
                                      },
                                      s,
                                    ),
                                  ),
                                }),
                              ],
                            }),
                          h.education &&
                            h.education.length > 0 &&
                            (0, a.jsxs)("div", {
                              className:
                                "bg-white rounded-xl p-4 sm:p-6 border border-[#344F1F]/10",
                              children: [
                                (0, a.jsxs)("h3", {
                                  className:
                                    "text-base sm:text-lg font-semibold text-[#344F1F] mb-3 flex items-center gap-2",
                                  children: [
                                    (0, a.jsx)(T.A, {
                                      className: "h-4 w-4 sm:h-5 sm:w-5",
                                    }),
                                    "Ausbildung",
                                  ],
                                }),
                                (0, a.jsx)("div", {
                                  className: "space-y-3 sm:space-y-4",
                                  children: h.education.map((e, s) =>
                                    (0, a.jsxs)(
                                      "div",
                                      {
                                        className:
                                          "border-l-2 border-[#F4991A] pl-3 sm:pl-4",
                                        children: [
                                          (0, a.jsx)("h4", {
                                            className:
                                              "font-semibold text-sm sm:text-base text-[#344F1F]",
                                            children: e.degree || e.title,
                                          }),
                                          (0, a.jsx)("p", {
                                            className:
                                              "text-xs sm:text-sm text-[#344F1F]/70",
                                            children: e.institution || e.school,
                                          }),
                                          (e.start_date || e.end_date) &&
                                            (0, a.jsxs)("p", {
                                              className:
                                                "text-xs text-[#344F1F]/50 mt-1 flex items-center gap-1",
                                              children: [
                                                (0, a.jsx)(K.A, {
                                                  className: "h-3 w-3",
                                                }),
                                                e.start_date,
                                                " - ",
                                                e.end_date || "Heute",
                                              ],
                                            }),
                                        ],
                                      },
                                      s,
                                    ),
                                  ),
                                }),
                              ],
                            }),
                          h.work_experience &&
                            h.work_experience.length > 0 &&
                            (0, a.jsxs)("div", {
                              className:
                                "bg-white rounded-xl p-4 sm:p-6 border border-[#344F1F]/10",
                              children: [
                                (0, a.jsxs)("h3", {
                                  className:
                                    "text-base sm:text-lg font-semibold text-[#344F1F] mb-3 flex items-center gap-2",
                                  children: [
                                    (0, a.jsx)(A.A, {
                                      className: "h-4 w-4 sm:h-5 sm:w-5",
                                    }),
                                    "Berufserfahrung",
                                  ],
                                }),
                                (0, a.jsx)("div", {
                                  className: "space-y-3 sm:space-y-4",
                                  children: h.work_experience.map((e, s) =>
                                    (0, a.jsxs)(
                                      "div",
                                      {
                                        className:
                                          "border-l-2 border-[#F4991A] pl-3 sm:pl-4",
                                        children: [
                                          (0, a.jsx)("h4", {
                                            className:
                                              "font-semibold text-sm sm:text-base text-[#344F1F]",
                                            children: e.position || e.title,
                                          }),
                                          (0, a.jsx)("p", {
                                            className:
                                              "text-xs sm:text-sm text-[#344F1F]/70",
                                            children: e.company || e.employer,
                                          }),
                                          (e.start_date || e.end_date) &&
                                            (0, a.jsxs)("p", {
                                              className:
                                                "text-xs text-[#344F1F]/50 mt-1 flex items-center gap-1",
                                              children: [
                                                (0, a.jsx)(K.A, {
                                                  className: "h-3 w-3",
                                                }),
                                                e.start_date,
                                                " - ",
                                                e.end_date || "Heute",
                                              ],
                                            }),
                                          e.description &&
                                            (0, a.jsx)("p", {
                                              className:
                                                "text-xs sm:text-sm text-[#344F1F]/70 mt-2",
                                              children: e.description,
                                            }),
                                        ],
                                      },
                                      s,
                                    ),
                                  ),
                                }),
                              ],
                            }),
                          h.certifications &&
                            h.certifications.length > 0 &&
                            (0, a.jsxs)("div", {
                              className:
                                "bg-white rounded-xl p-4 sm:p-6 border border-[#344F1F]/10",
                              children: [
                                (0, a.jsxs)("h3", {
                                  className:
                                    "text-base sm:text-lg font-semibold text-[#344F1F] mb-3 flex items-center gap-2",
                                  children: [
                                    (0, a.jsx)(V.A, {
                                      className: "h-4 w-4 sm:h-5 sm:w-5",
                                    }),
                                    "Zertifikate",
                                  ],
                                }),
                                (0, a.jsx)("div", {
                                  className: "space-y-2",
                                  children: h.certifications.map((e, s) =>
                                    (0, a.jsxs)(
                                      "div",
                                      {
                                        className: "flex items-start gap-2",
                                        children: [
                                          (0, a.jsx)(V.A, {
                                            className:
                                              "h-3.5 w-3.5 sm:h-4 sm:w-4 text-[#F4991A] mt-0.5 flex-shrink-0",
                                          }),
                                          (0, a.jsxs)("div", {
                                            className: "min-w-0",
                                            children: [
                                              (0, a.jsx)("p", {
                                                className:
                                                  "text-sm sm:text-base text-[#344F1F] font-medium",
                                                children: e.name || e.title,
                                              }),
                                              e.issuer &&
                                                (0, a.jsx)("p", {
                                                  className:
                                                    "text-xs sm:text-sm text-[#344F1F]/70",
                                                  children: e.issuer,
                                                }),
                                              e.date &&
                                                (0, a.jsx)("p", {
                                                  className:
                                                    "text-xs text-[#344F1F]/50",
                                                  children: e.date,
                                                }),
                                            ],
                                          }),
                                        ],
                                      },
                                      s,
                                    ),
                                  ),
                                }),
                              ],
                            }),
                          h.video &&
                            (0, a.jsxs)("div", {
                              className:
                                "bg-white rounded-xl p-4 sm:p-6 border border-[#344F1F]/10",
                              children: [
                                (0, a.jsx)("h3", {
                                  className:
                                    "text-base sm:text-lg font-semibold text-[#344F1F] mb-3",
                                  children: "Video-Vorstellung",
                                }),
                                (0, a.jsx)("div", {
                                  className:
                                    "aspect-video bg-black rounded-lg sm:rounded-xl overflow-hidden",
                                  children: (0, a.jsxs)("video", {
                                    controls: !0,
                                    poster: h.video.thumbnail_url,
                                    className: "w-full h-full",
                                    children: [
                                      (0, a.jsx)("source", {
                                        src: h.video.video_url,
                                        type: "video/mp4",
                                      }),
                                      "Ihr Browser unterst\xfctzt das Video-Tag nicht.",
                                    ],
                                  }),
                                }),
                              ],
                            }),
                          (0, a.jsxs)("div", {
                            className:
                              "flex flex-col sm:flex-row gap-2 sm:gap-3 pt-2 sm:pt-4",
                            children: [
                              !h.interest &&
                                (0, a.jsxs)(m.$, {
                                  onClick: () => {
                                    i && x(i);
                                  },
                                  className:
                                    "flex-1 rounded-full bg-[#F4991A] hover:bg-[#E5890F] text-white min-h-[44px] text-sm sm:text-base",
                                  children: [
                                    (0, a.jsx)(_.A, {
                                      className: "h-4 w-4 mr-2",
                                    }),
                                    "Interesse bekunden",
                                  ],
                                }),
                              h.email &&
                                (0, a.jsxs)(m.$, {
                                  onClick: () =>
                                    window.open("mailto:".concat(h.email)),
                                  variant: "outline",
                                  className:
                                    "flex-1 rounded-full border-[#344F1F]/20 hover:bg-[#F2EAD3] min-h-[44px] text-sm sm:text-base",
                                  children: [
                                    (0, a.jsx)(D.A, {
                                      className: "h-4 w-4 mr-2",
                                    }),
                                    "E-Mail schreiben",
                                  ],
                                }),
                              (0, a.jsx)(m.$, {
                                onClick: d,
                                variant: "ghost",
                                className:
                                  "rounded-full min-h-[44px] min-w-[44px] sm:min-w-0",
                                "aria-label": "Schlie\xdfen",
                                children: (0, a.jsx)(P.A, {
                                  className: "h-4 w-4",
                                }),
                              }),
                            ],
                          }),
                        ],
                      })
                    : null,
            ],
          }),
        });
      }
      var M = t(61607);
      function Z(e) {
        let {
            candidateId: s,
            candidateName: t,
            isOpen: i,
            onClose: r,
            onSuccess: c,
            remainingInterests: d,
          } = e,
          [x, h] = (0, l.useState)(""),
          [o, u] = (0, l.useState)(!1),
          [b, f] = (0, l.useState)(null),
          [g, F] = (0, l.useState)(!1),
          v = async (e) => {
            if ((e.preventDefault(), s)) {
              (u(!0), f(null));
              try {
                let e = await fetch("/api/arbeitgeber/candidates/interest", {
                    method: "POST",
                    headers: { "Content-Type": "application/json" },
                    body: JSON.stringify({
                      student_id: s,
                      message: x.trim() || void 0,
                    }),
                  }),
                  t = await e.json();
                if (!e.ok) {
                  if (t.limit_reached)
                    throw Error(t.message || "Monatliches Limit erreicht");
                  throw Error(t.error || "Fehler beim Bekunden des Interesses");
                }
                (F(!0),
                  setTimeout(() => {
                    (c(), w());
                  }, 1500));
              } catch (e) {
                (console.error("Error expressing interest:", e),
                  f(
                    e instanceof Error
                      ? e.message
                      : "Ein Fehler ist aufgetreten",
                  ));
              } finally {
                u(!1);
              }
            }
          },
          w = () => {
            (h(""), f(null), F(!1), r());
          };
        return (0, a.jsx)(B.lG, {
          open: i,
          onOpenChange: w,
          children: (0, a.jsxs)(B.Cf, {
            className:
              "bg-[#F9F5F0] rounded-2xl sm:rounded-3xl max-w-lg p-4 sm:p-6",
            children: [
              (0, a.jsxs)(B.c7, {
                className: "space-y-1 sm:space-y-1.5",
                children: [
                  (0, a.jsx)(B.L3, {
                    className: "text-xl sm:text-2xl text-[#344F1F]",
                    children: "Interesse bekunden",
                  }),
                  (0, a.jsxs)(B.rr, {
                    className: "text-sm sm:text-base text-[#344F1F]/70",
                    children: [
                      "Lassen Sie ",
                      t,
                      " wissen, dass Sie an einer Zusammenarbeit interessiert sind.",
                    ],
                  }),
                ],
              }),
              g
                ? (0, a.jsx)("div", {
                    className: "py-6 sm:py-8",
                    children: (0, a.jsxs)("div", {
                      className:
                        "flex flex-col items-center justify-center space-y-3 sm:space-y-4",
                      children: [
                        (0, a.jsx)("div", {
                          className:
                            "h-14 w-14 sm:h-16 sm:w-16 rounded-full bg-[#344F1F]/10 flex items-center justify-center",
                          children: (0, a.jsx)(N.A, {
                            className: "h-7 w-7 sm:h-8 sm:w-8 text-[#344F1F]",
                          }),
                        }),
                        (0, a.jsxs)("div", {
                          className: "text-center px-2",
                          children: [
                            (0, a.jsx)("h3", {
                              className:
                                "text-base sm:text-lg font-semibold text-[#344F1F]",
                              children: "Interesse erfolgreich bekundet!",
                            }),
                            (0, a.jsxs)("p", {
                              className:
                                "text-xs sm:text-sm text-[#344F1F]/70 mt-1 sm:mt-2",
                              children: [
                                t,
                                " wird \xfcber Ihr Interesse benachrichtigt.",
                              ],
                            }),
                          ],
                        }),
                      ],
                    }),
                  })
                : (0, a.jsxs)("form", {
                    onSubmit: v,
                    className: "space-y-3 sm:space-y-4",
                    children: [
                      (0, a.jsxs)(p.Fc, {
                        className: "bg-[#F2EAD3] border-[#F4991A]/20",
                        children: [
                          (0, a.jsx)(_.A, {
                            className:
                              "h-3.5 w-3.5 sm:h-4 sm:w-4 text-[#F4991A]",
                          }),
                          (0, a.jsxs)(p.TN, {
                            className: "text-xs sm:text-sm text-[#344F1F]",
                            children: [
                              "Sie haben noch ",
                              (0, a.jsx)("strong", { children: d }),
                              " von 5 kostenlosen Interessensbekundungen diesen Monat.",
                              0 === d &&
                                " Upgraden Sie auf Premium f\xfcr unbegrenzten Zugriff.",
                            ],
                          }),
                        ],
                      }),
                      (0, a.jsxs)("div", {
                        className: "space-y-1.5 sm:space-y-2",
                        children: [
                          (0, a.jsx)("label", {
                            htmlFor: "message",
                            className:
                              "text-xs sm:text-sm font-medium text-[#344F1F]",
                            children: "Pers\xf6nliche Nachricht (optional)",
                          }),
                          (0, a.jsx)(M.T, {
                            id: "message",
                            placeholder:
                              "Hallo, ich interessiere mich f\xfcr Ihr Profil...",
                            value: x,
                            onChange: (e) => h(e.target.value),
                            className:
                              "min-h-[100px] sm:min-h-[120px] bg-white border-[#344F1F]/20 rounded-xl resize-none text-sm",
                            maxLength: 500,
                            disabled: o,
                          }),
                          (0, a.jsxs)("p", {
                            className: "text-xs text-[#344F1F]/50 text-right",
                            children: [x.length, "/500 Zeichen"],
                          }),
                        ],
                      }),
                      b &&
                        (0, a.jsxs)(p.Fc, {
                          variant: "destructive",
                          className: "bg-red-50 border-red-200",
                          children: [
                            (0, a.jsx)(j.A, {
                              className: "h-3.5 w-3.5 sm:h-4 sm:w-4",
                            }),
                            (0, a.jsx)(p.TN, {
                              className: "text-xs sm:text-sm text-red-800",
                              children: b,
                            }),
                          ],
                        }),
                      (0, a.jsxs)("div", {
                        className:
                          "bg-white rounded-xl p-3 sm:p-4 border border-[#344F1F]/10",
                        children: [
                          (0, a.jsx)("p", {
                            className: "text-xs sm:text-sm text-[#344F1F]/70",
                            children: (0, a.jsx)("strong", {
                              className: "text-[#344F1F]",
                              children: "Was passiert als N\xe4chstes?",
                            }),
                          }),
                          (0, a.jsxs)("ul", {
                            className:
                              "text-xs sm:text-sm text-[#344F1F]/70 mt-1.5 sm:mt-2 space-y-0.5 sm:space-y-1 list-disc list-inside",
                            children: [
                              (0, a.jsxs)("li", {
                                children: [
                                  t,
                                  " erh\xe4lt eine E-Mail-Benachrichtigung",
                                ],
                              }),
                              (0, a.jsx)("li", {
                                children:
                                  "Der Kandidat kann Ihr Interesse annehmen oder ablehnen",
                              }),
                              (0, a.jsx)("li", {
                                children:
                                  "Bei Annahme erhalten Sie Zugriff auf vollst\xe4ndige Kontaktdaten",
                              }),
                            ],
                          }),
                        ],
                      }),
                      (0, a.jsxs)(B.Es, {
                        className: "flex-col sm:flex-row gap-2 pt-2",
                        children: [
                          (0, a.jsx)(m.$, {
                            type: "button",
                            variant: "outline",
                            onClick: w,
                            disabled: o,
                            className:
                              "rounded-full border-[#344F1F]/20 min-h-[44px] w-full sm:w-auto text-sm",
                            children: "Abbrechen",
                          }),
                          (0, a.jsx)(m.$, {
                            type: "submit",
                            disabled: o || 0 === d,
                            className:
                              "rounded-full bg-[#F4991A] hover:bg-[#E5890F] text-white min-h-[44px] w-full sm:w-auto text-sm",
                            children: o
                              ? (0, a.jsxs)(a.Fragment, {
                                  children: [
                                    (0, a.jsx)(n.A, {
                                      className: "h-4 w-4 mr-2 animate-spin",
                                    }),
                                    (0, a.jsx)("span", {
                                      children: "Sende...",
                                    }),
                                  ],
                                })
                              : (0, a.jsxs)(a.Fragment, {
                                  children: [
                                    (0, a.jsx)(_.A, {
                                      className: "h-4 w-4 mr-2",
                                    }),
                                    (0, a.jsx)("span", {
                                      children: "Interesse bekunden",
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
      var G = t(90817);
      function O() {
        let e = (0, h.useRouter)(),
          { currentEmployer: s, employerId: t, isLoading: b } = (0, G.B)(),
          [f, g] = (0, l.useState)(""),
          [F, N] = (0, l.useState)(""),
          [v, w] = (0, l.useState)(""),
          [y, A] = (0, l.useState)(""),
          [k, _] = (0, l.useState)(!1),
          [S, E] = (0, l.useState)("relevance"),
          [C, B] = (0, l.useState)(!1),
          [z, T] = (0, l.useState)([]),
          [K, V] = (0, l.useState)({
            page: 1,
            limit: 20,
            total: 0,
            total_pages: 0,
          }),
          [D, P] = (0, l.useState)(!1),
          [$, M] = (0, l.useState)(null),
          [O, q] = (0, l.useState)(5),
          [W, U] = (0, l.useState)(null),
          [H, R] = (0, l.useState)(!0),
          [J, Q] = (0, l.useState)(null),
          [X, Y] = (0, l.useState)(""),
          [ee, es] = (0, l.useState)(!1),
          [et, ea] = (0, l.useState)(!1),
          el = (function (e, s) {
            let [t, a] = (0, l.useState)(e);
            return (
              (0, l.useEffect)(() => {
                let s = setTimeout(() => {
                  a(e);
                }, 500);
                return () => {
                  clearTimeout(s);
                };
              }, [e, 500]),
              t
            );
          })(f, 500),
          en = (0, l.useCallback)(
            async function () {
              let e =
                arguments.length > 0 && void 0 !== arguments[0]
                  ? arguments[0]
                  : 1;
              if (t) {
                (P(!0), M(null));
                try {
                  let s = new URLSearchParams({
                    employerId: t,
                    page: e.toString(),
                    limit: "20",
                    sort_by: S,
                  });
                  (el && s.append("query", el),
                    F && "all" !== F && s.append("german_level", F),
                    v && "all" !== v && s.append("sectors", v),
                    y && "all" !== y && s.append("location", y),
                    k && s.append("verified_only", "true"));
                  let a = await fetch(
                      "/api/arbeitgeber/candidates/search?".concat(
                        s.toString(),
                      ),
                    ),
                    l = await a.json();
                  if (!a.ok)
                    throw Error(l.error || "Failed to fetch candidates");
                  (T(l.candidates || []), V(l.pagination));
                  let n = await fetch(
                    "/api/arbeitgeber/candidates/interest?employerId=".concat(
                      t,
                    ),
                  );
                  if (n.ok) {
                    let e = await n.json();
                    q(e.remaining_this_month || 0);
                  }
                } catch (e) {
                  (console.error("Error fetching candidates:", e),
                    M(
                      e instanceof Error
                        ? e.message
                        : "Ein Fehler ist aufgetreten",
                    ));
                } finally {
                  P(!1);
                }
              }
            },
            [t, el, F, v, y, k, S],
          );
        ((0, l.useEffect)(() => {
          (async () => {
            if (t)
              try {
                let e = await fetch(
                    "/api/arbeitgeber/profile/verification-status?employerId=".concat(
                      t,
                    ),
                  ),
                  s = await e.json();
                s.success && U(s.verification);
              } catch (e) {
                console.error("Error fetching verification status:", e);
              } finally {
                R(!1);
              }
          })();
        }, [t]),
          (0, l.useEffect)(() => {
            en(1);
          }, [en]));
        let ei = (e) => {
            (Q(e), es(!0));
          },
          er = (e) => {
            let s = z.find((s) => s.user_id === e);
            (Q(e), Y((null == s ? void 0 : s.full_name) || "Kandidat"), ea(!0));
          },
          ec = () => {
            (N(""), w(""), A(""), _(!1), g(""));
          },
          ed = F || v || y || k || f;
        return b
          ? (0, a.jsx)("div", {
              className: "min-h-screen bg-[#F9F5F0] p-3 sm:p-4 md:p-8",
              children: (0, a.jsx)("div", {
                className: "max-w-7xl mx-auto",
                children: (0, a.jsx)("div", {
                  className: "flex items-center justify-center py-12",
                  children: (0, a.jsx)(n.A, {
                    className: "h-8 w-8 animate-spin text-[#F4991A]",
                  }),
                }),
              }),
            })
          : t && s
            ? (0, a.jsxs)("div", {
                className: "min-h-screen bg-[#F9F5F0] p-3 sm:p-4 md:p-8",
                children: [
                  (0, a.jsxs)("div", {
                    className: "max-w-7xl mx-auto space-y-4 md:space-y-6",
                    children: [
                      (0, a.jsxs)("div", {
                        className: "space-y-1 sm:space-y-2",
                        children: [
                          (0, a.jsx)("h1", {
                            className:
                              "text-2xl sm:text-3xl md:text-4xl font-bold text-[#344F1F]",
                            children: "Kandidatensuche",
                          }),
                          (0, a.jsx)("p", {
                            className: "text-sm sm:text-base text-[#344F1F]/70",
                            children:
                              "Finden Sie qualifizierte Kandidaten f\xfcr Ihre offenen Stellen",
                          }),
                        ],
                      }),
                      !H &&
                        W &&
                        !W.is_verified &&
                        (0, a.jsxs)(p.Fc, {
                          className: "bg-amber-50 border-amber-200",
                          children: [
                            (0, a.jsx)(i.A, {
                              className: "h-5 w-5 text-amber-700",
                            }),
                            (0, a.jsx)(p.TN, {
                              className: "ml-2",
                              children: (0, a.jsxs)("div", {
                                className:
                                  "flex items-center justify-between gap-4 flex-wrap",
                                children: [
                                  (0, a.jsxs)("div", {
                                    className: "flex-1 min-w-0",
                                    children: [
                                      (0, a.jsx)("p", {
                                        className:
                                          "font-semibold text-amber-900 mb-1",
                                        children: "Eingeschr\xe4nkte Ansicht",
                                      }),
                                      (0, a.jsxs)("p", {
                                        className: "text-sm text-amber-800",
                                        children: [
                                          "Kontaktinformationen sind ausgeblendet. Vervollst\xe4ndigen Sie Ihr Profil (",
                                          W.profile_completeness,
                                          "%), um vollen Zugriff zu erhalten.",
                                        ],
                                      }),
                                    ],
                                  }),
                                  (0, a.jsxs)(m.$, {
                                    variant: "outline",
                                    size: "sm",
                                    onClick: () =>
                                      e.push(
                                        "/arbeitgeber/einstellungen?tab=company",
                                      ),
                                    className:
                                      "bg-white hover:bg-amber-50 border-amber-300 whitespace-nowrap",
                                    children: [
                                      (0, a.jsx)(r.A, {
                                        className: "mr-2 h-4 w-4",
                                      }),
                                      "Profil vervollst\xe4ndigen",
                                    ],
                                  }),
                                ],
                              }),
                            }),
                          ],
                        }),
                      (0, a.jsx)(u.Zp, {
                        className: "border-[#344F1F]/10 shadow-sm rounded-xl",
                        children: (0, a.jsx)(u.Wu, {
                          className: "p-3 sm:p-4 md:p-6",
                          children: (0, a.jsxs)("div", {
                            className: "space-y-3 sm:space-y-4",
                            children: [
                              (0, a.jsxs)("div", {
                                className: "relative",
                                children: [
                                  (0, a.jsx)(c.A, {
                                    className:
                                      "absolute left-3 sm:left-4 top-1/2 -translate-y-1/2 h-4 w-4 sm:h-5 sm:w-5 text-[#344F1F]/50",
                                  }),
                                  (0, a.jsx)(x.p, {
                                    type: "text",
                                    placeholder:
                                      "Nach Name, F\xe4higkeiten suchen...",
                                    value: f,
                                    onChange: (e) => g(e.target.value),
                                    className:
                                      "pl-10 sm:pl-12 h-11 sm:h-12 text-sm sm:text-base bg-white border-[#344F1F]/20 rounded-full",
                                  }),
                                ],
                              }),
                              (0, a.jsxs)("div", {
                                className:
                                  "flex flex-col sm:flex-row items-stretch sm:items-center gap-2",
                                children: [
                                  (0, a.jsxs)(m.$, {
                                    variant: "outline",
                                    onClick: () => B(!C),
                                    className:
                                      "rounded-full border-[#344F1F]/20 min-h-[44px] w-full sm:w-auto",
                                    children: [
                                      (0, a.jsx)(d.A, {
                                        className: "h-4 w-4 mr-2",
                                      }),
                                      (0, a.jsx)("span", {
                                        className: "text-sm sm:text-base",
                                        children: C
                                          ? "Filter ausblenden"
                                          : "Filter anzeigen",
                                      }),
                                    ],
                                  }),
                                  ed &&
                                    (0, a.jsx)(m.$, {
                                      variant: "ghost",
                                      onClick: ec,
                                      className:
                                        "text-xs sm:text-sm text-[#344F1F]/70 hover:text-[#344F1F] rounded-full min-h-[44px] w-full sm:w-auto",
                                      children: "Filter zur\xfccksetzen",
                                    }),
                                ],
                              }),
                              C &&
                                (0, a.jsxs)("div", {
                                  className:
                                    "grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-3 sm:gap-4 pt-3 sm:pt-4 border-t border-[#344F1F]/10",
                                  children: [
                                    (0, a.jsxs)("div", {
                                      className: "space-y-1.5 sm:space-y-2",
                                      children: [
                                        (0, a.jsx)("label", {
                                          className:
                                            "text-xs sm:text-sm font-medium text-[#344F1F]",
                                          children: "Deutschniveau",
                                        }),
                                        (0, a.jsxs)(o.l6, {
                                          value: F,
                                          onValueChange: N,
                                          children: [
                                            (0, a.jsx)(o.bq, {
                                              className:
                                                "rounded-full border-[#344F1F]/20 h-11 text-sm sm:text-base",
                                              children: (0, a.jsx)(o.yv, {
                                                placeholder: "Alle Niveaus",
                                              }),
                                            }),
                                            (0, a.jsxs)(o.gC, {
                                              children: [
                                                (0, a.jsx)(o.eb, {
                                                  value: "all",
                                                  children: "Alle Niveaus",
                                                }),
                                                (0, a.jsx)(o.eb, {
                                                  value: "A1",
                                                  children: "A1",
                                                }),
                                                (0, a.jsx)(o.eb, {
                                                  value: "A2",
                                                  children: "A2",
                                                }),
                                                (0, a.jsx)(o.eb, {
                                                  value: "B1",
                                                  children: "B1",
                                                }),
                                                (0, a.jsx)(o.eb, {
                                                  value: "B2",
                                                  children: "B2",
                                                }),
                                                (0, a.jsx)(o.eb, {
                                                  value: "C1",
                                                  children: "C1",
                                                }),
                                                (0, a.jsx)(o.eb, {
                                                  value: "C2",
                                                  children: "C2",
                                                }),
                                              ],
                                            }),
                                          ],
                                        }),
                                      ],
                                    }),
                                    (0, a.jsxs)("div", {
                                      className: "space-y-1.5 sm:space-y-2",
                                      children: [
                                        (0, a.jsx)("label", {
                                          className:
                                            "text-xs sm:text-sm font-medium text-[#344F1F]",
                                          children: "Bereich",
                                        }),
                                        (0, a.jsxs)(o.l6, {
                                          value: v,
                                          onValueChange: w,
                                          children: [
                                            (0, a.jsx)(o.bq, {
                                              className:
                                                "rounded-full border-[#344F1F]/20 h-11 text-sm sm:text-base",
                                              children: (0, a.jsx)(o.yv, {
                                                placeholder: "Alle Bereiche",
                                              }),
                                            }),
                                            (0, a.jsxs)(o.gC, {
                                              children: [
                                                (0, a.jsx)(o.eb, {
                                                  value: "all",
                                                  children: "Alle Bereiche",
                                                }),
                                                (0, a.jsx)(o.eb, {
                                                  value: "healthcare",
                                                  children: "Gesundheitswesen",
                                                }),
                                                (0, a.jsx)(o.eb, {
                                                  value: "it",
                                                  children: "IT & Technologie",
                                                }),
                                                (0, a.jsx)(o.eb, {
                                                  value: "engineering",
                                                  children: "Ingenieurwesen",
                                                }),
                                                (0, a.jsx)(o.eb, {
                                                  value: "hospitality",
                                                  children: "Gastgewerbe",
                                                }),
                                                (0, a.jsx)(o.eb, {
                                                  value: "automotive",
                                                  children:
                                                    "Automobilindustrie",
                                                }),
                                                (0, a.jsx)(o.eb, {
                                                  value: "finance",
                                                  children: "Finanzwesen",
                                                }),
                                                (0, a.jsx)(o.eb, {
                                                  value: "logistics",
                                                  children: "Logistik",
                                                }),
                                                (0, a.jsx)(o.eb, {
                                                  value: "construction",
                                                  children: "Bauwesen",
                                                }),
                                                (0, a.jsx)(o.eb, {
                                                  value: "sales",
                                                  children: "Vertrieb",
                                                }),
                                                (0, a.jsx)(o.eb, {
                                                  value: "education",
                                                  children: "Bildung",
                                                }),
                                                (0, a.jsx)(o.eb, {
                                                  value: "business_admin",
                                                  children: "Verwaltung",
                                                }),
                                              ],
                                            }),
                                          ],
                                        }),
                                      ],
                                    }),
                                    (0, a.jsxs)("div", {
                                      className:
                                        "space-y-1.5 sm:space-y-2 sm:col-span-2 md:col-span-1",
                                      children: [
                                        (0, a.jsx)("label", {
                                          className:
                                            "text-xs sm:text-sm font-medium text-[#344F1F]",
                                          children: "Standort",
                                        }),
                                        (0, a.jsxs)(o.l6, {
                                          value: y,
                                          onValueChange: A,
                                          children: [
                                            (0, a.jsx)(o.bq, {
                                              className:
                                                "rounded-full border-[#344F1F]/20 h-11 text-sm sm:text-base",
                                              children: (0, a.jsx)(o.yv, {
                                                placeholder: "Alle Standorte",
                                              }),
                                            }),
                                            (0, a.jsxs)(o.gC, {
                                              children: [
                                                (0, a.jsx)(o.eb, {
                                                  value: "all",
                                                  children: "Alle Standorte",
                                                }),
                                                (0, a.jsx)(o.eb, {
                                                  value: "India",
                                                  children: "Indien",
                                                }),
                                                (0, a.jsx)(o.eb, {
                                                  value: "Pakistan",
                                                  children: "Pakistan",
                                                }),
                                                (0, a.jsx)(o.eb, {
                                                  value: "Germany",
                                                  children: "Deutschland",
                                                }),
                                                (0, a.jsx)(o.eb, {
                                                  value: "Kenya",
                                                  children: "Kenia",
                                                }),
                                                (0, a.jsx)(o.eb, {
                                                  value: "Nigeria",
                                                  children: "Nigeria",
                                                }),
                                                (0, a.jsx)(o.eb, {
                                                  value: "Morocco",
                                                  children: "Marokko",
                                                }),
                                                (0, a.jsx)(o.eb, {
                                                  value: "Bangladesh",
                                                  children: "Bangladesch",
                                                }),
                                                (0, a.jsx)(o.eb, {
                                                  value: "Algeria",
                                                  children: "Algerien",
                                                }),
                                                (0, a.jsx)(o.eb, {
                                                  value: "Tunisia",
                                                  children: "Tunesien",
                                                }),
                                                (0, a.jsx)(o.eb, {
                                                  value: "Indonesia",
                                                  children: "Indonesien",
                                                }),
                                                (0, a.jsx)(o.eb, {
                                                  value: "Ghana",
                                                  children: "Ghana",
                                                }),
                                                (0, a.jsx)(o.eb, {
                                                  value: "Philippines",
                                                  children: "Philippinen",
                                                }),
                                                (0, a.jsx)(o.eb, {
                                                  value: "South Africa",
                                                  children: "S\xfcdafrika",
                                                }),
                                              ],
                                            }),
                                          ],
                                        }),
                                      ],
                                    }),
                                    (0, a.jsxs)("div", {
                                      className:
                                        "space-y-1.5 sm:space-y-2 sm:col-span-2 md:col-span-1",
                                      children: [
                                        (0, a.jsx)("label", {
                                          className:
                                            "text-xs sm:text-sm font-medium text-[#344F1F]",
                                          children: "Verifizierung",
                                        }),
                                        (0, a.jsxs)("div", {
                                          className:
                                            "flex items-center h-11 px-4 rounded-full border border-[#344F1F]/20 bg-white",
                                          children: [
                                            (0, a.jsx)("input", {
                                              type: "checkbox",
                                              id: "verified-only",
                                              checked: k,
                                              onChange: (e) =>
                                                _(e.target.checked),
                                              className:
                                                "h-4 w-4 rounded border-[#344F1F]/30 text-[#F4991A] focus:ring-[#F4991A] focus:ring-offset-0",
                                            }),
                                            (0, a.jsx)("label", {
                                              htmlFor: "verified-only",
                                              className:
                                                "ml-2 text-sm cursor-pointer text-[#344F1F]",
                                              children:
                                                "Nur verifizierte Kandidaten",
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
                      $ &&
                        (0, a.jsxs)(p.Fc, {
                          variant: "destructive",
                          className: "bg-red-50 border-red-200",
                          children: [
                            (0, a.jsx)(j.A, { className: "h-4 w-4" }),
                            (0, a.jsx)(p.TN, {
                              className: "text-red-800",
                              children: $,
                            }),
                          ],
                        }),
                      D && 0 === z.length
                        ? (0, a.jsx)("div", {
                            className: "flex items-center justify-center py-12",
                            children: (0, a.jsx)(n.A, {
                              className: "h-8 w-8 animate-spin text-[#F4991A]",
                            }),
                          })
                        : 0 !== z.length || D
                          ? (0, a.jsxs)(a.Fragment, {
                              children: [
                                (0, a.jsxs)("div", {
                                  className:
                                    "flex flex-col sm:flex-row items-start sm:items-center justify-between gap-3 sm:gap-4",
                                  children: [
                                    (0, a.jsxs)("p", {
                                      className:
                                        "text-xs sm:text-sm text-[#344F1F]/70",
                                      children: [
                                        K.total,
                                        " Kandidat",
                                        1 !== K.total ? "en" : "",
                                        " gefunden",
                                      ],
                                    }),
                                    (0, a.jsxs)(o.l6, {
                                      value: S,
                                      onValueChange: E,
                                      children: [
                                        (0, a.jsx)(o.bq, {
                                          className:
                                            "w-full sm:w-[180px] rounded-full border-[#344F1F]/20 h-10 sm:h-auto text-sm",
                                          children: (0, a.jsx)(o.yv, {
                                            placeholder: "Sortieren nach",
                                          }),
                                        }),
                                        (0, a.jsxs)(o.gC, {
                                          children: [
                                            (0, a.jsx)(o.eb, {
                                              value: "relevance",
                                              children: "Am relevantesten",
                                            }),
                                            (0, a.jsx)(o.eb, {
                                              value: "recent",
                                              children: "Neueste zuerst",
                                            }),
                                            (0, a.jsx)(o.eb, {
                                              value: "name",
                                              children: "Name (A-Z)",
                                            }),
                                            (0, a.jsx)(o.eb, {
                                              value: "german_level",
                                              children: "Deutschniveau",
                                            }),
                                          ],
                                        }),
                                      ],
                                    }),
                                  ],
                                }),
                                (0, a.jsx)("div", {
                                  className:
                                    "grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4 sm:gap-5 md:gap-6",
                                  children: z.map((e) =>
                                    (0, a.jsx)(
                                      I,
                                      {
                                        candidate: e,
                                        onViewProfile: ei,
                                        onExpressInterest: er,
                                      },
                                      e.user_id,
                                    ),
                                  ),
                                }),
                                K.total_pages > 1 &&
                                  (0, a.jsxs)("div", {
                                    className:
                                      "flex items-center justify-center gap-2 sm:gap-3 pt-4 sm:pt-6",
                                    children: [
                                      (0, a.jsx)(m.$, {
                                        variant: "outline",
                                        onClick: () => en(K.page - 1),
                                        disabled: 1 === K.page || D,
                                        className:
                                          "rounded-full border-[#344F1F]/20 min-h-[44px] px-4 sm:px-6 text-sm",
                                        children: "Zur\xfcck",
                                      }),
                                      (0, a.jsxs)("span", {
                                        className:
                                          "text-xs sm:text-sm text-[#344F1F]/70 px-2 sm:px-4 whitespace-nowrap",
                                        children: [
                                          "Seite ",
                                          K.page,
                                          " von ",
                                          K.total_pages,
                                        ],
                                      }),
                                      (0, a.jsx)(m.$, {
                                        variant: "outline",
                                        onClick: () => en(K.page + 1),
                                        disabled: K.page === K.total_pages || D,
                                        className:
                                          "rounded-full border-[#344F1F]/20 min-h-[44px] px-4 sm:px-6 text-sm",
                                        children: "Weiter",
                                      }),
                                    ],
                                  }),
                              ],
                            })
                          : (0, a.jsx)(u.Zp, {
                              className:
                                "border-[#344F1F]/10 shadow-sm rounded-xl",
                              children: (0, a.jsx)(u.Wu, {
                                className: "p-6 sm:p-8 md:p-12 text-center",
                                children: (0, a.jsxs)("div", {
                                  className:
                                    "max-w-md mx-auto space-y-3 sm:space-y-4",
                                  children: [
                                    (0, a.jsx)("div", {
                                      className:
                                        "w-16 h-16 sm:w-20 sm:h-20 mx-auto bg-[#F4991A]/10 rounded-full flex items-center justify-center",
                                      children: (0, a.jsx)(c.A, {
                                        className:
                                          "h-8 w-8 sm:h-10 sm:w-10 text-[#F4991A]",
                                      }),
                                    }),
                                    (0, a.jsx)("h3", {
                                      className:
                                        "text-lg sm:text-xl font-semibold text-[#344F1F]",
                                      children: ed
                                        ? "Keine Kandidaten gefunden"
                                        : "Noch keine Kandidaten verf\xfcgbar",
                                    }),
                                    (0, a.jsx)("p", {
                                      className:
                                        "text-sm sm:text-base text-[#344F1F]/70",
                                      children: ed
                                        ? "Versuchen Sie, Ihre Suchkriterien anzupassen, um mehr Ergebnisse zu finden."
                                        : "Aktuell sind keine \xf6ffentlichen Kandidatenprofile verf\xfcgbar. Schauen Sie sp\xe4ter wieder vorbei.",
                                    }),
                                    ed &&
                                      (0, a.jsx)("div", {
                                        className: "pt-2 sm:pt-4",
                                        children: (0, a.jsx)(m.$, {
                                          onClick: ec,
                                          variant: "outline",
                                          className:
                                            "rounded-full border-[#344F1F]/20 min-h-[44px] w-full sm:w-auto",
                                          children: "Filter zur\xfccksetzen",
                                        }),
                                      }),
                                  ],
                                }),
                              }),
                            }),
                    ],
                  }),
                  (0, a.jsx)(L, {
                    candidateId: J,
                    employerId: t,
                    isOpen: ee,
                    onClose: () => es(!1),
                    onExpressInterest: (e) => {
                      (es(!1), er(e));
                    },
                  }),
                  (0, a.jsx)(Z, {
                    candidateId: J,
                    candidateName: X,
                    isOpen: et,
                    onClose: () => ea(!1),
                    onSuccess: () => {
                      en(K.page);
                    },
                    remainingInterests: O,
                  }),
                ],
              })
            : null;
      }
    },
    57353: (e, s, t) => {
      Promise.resolve().then(t.bind(t, 15017));
    },
  },
  (e) => {
    var s = (s) => e((e.s = s));
    (e.O(0, [46593, 36209, 84121, 72076, 77358], () => s(57353)),
      (_N_E = e.O()));
  },
]);
