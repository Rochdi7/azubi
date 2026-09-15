(self.webpackChunk_N_E = self.webpackChunk_N_E || []).push([
  [89673],
  {
    52425: (e, t, s) => {
      Promise.resolve().then(s.bind(s, 86631));
    },
    86631: (e, t, s) => {
      "use strict";
      (s.r(t), s.d(t, { default: () => eH }));
      var a = s(70207),
        l = s(87223),
        i = s(97702),
        n = s(68233),
        r = s(50488),
        o = s(86850),
        c = s(82110),
        d = s(27239),
        m = s(28131),
        x = s(84222),
        h = s(79024),
        p = s(25385),
        u = s(99251),
        b = s(59827),
        g = s(39441);
      let w = {
        en: {
          title: "My Applications",
          subtitle: "Track your Ausbildung journey",
          totalApplications: "Total",
          inProgress: "In Progress",
          interviews: "Interviews",
          responseRate: "Response Rate",
          accepted: "Accepted",
          newApplication: "New Application",
          preparing: "Preparing",
          applied: "Applied",
          waiting: "Waiting",
        },
        de: {
          title: "Meine Bewerbungen",
          subtitle: "Verfolge deine Ausbildungsreise",
          totalApplications: "Gesamt",
          inProgress: "In Bearbeitung",
          interviews: "Gespr\xe4che",
          responseRate: "R\xfccklaufquote",
          accepted: "Angenommen",
          newApplication: "Neue Bewerbung",
          preparing: "Vorbereitung",
          applied: "Beworben",
          waiting: "Wartend",
        },
      };
      function j(e) {
        let {
            counts: t,
            responseRate: s,
            onAddExternal: l,
            onRefresh: i,
            isRefreshing: n = !1,
            language: r = "en",
            addButtonLabel: o,
          } = e,
          j = w[r],
          f = o || j.newApplication,
          F = t.applied + t.waiting + t.preparing,
          v = [
            {
              label: j.totalApplications,
              value: t.total,
              icon: d.A,
              highlight: !1,
            },
            { label: j.inProgress, value: F, icon: m.A, highlight: !1 },
            {
              label: j.interviews,
              value: t.interview,
              icon: x.A,
              highlight: t.interview > 0,
            },
            {
              label: j.responseRate,
              value: "".concat(s, "%"),
              icon: h.A,
              highlight: s >= 30,
            },
          ];
        return (
          t.accepted > 0 &&
            v.push({
              label: j.accepted,
              value: t.accepted,
              icon: p.A,
              highlight: !0,
            }),
          (0, a.jsxs)("div", {
            className:
              "relative overflow-hidden rounded-2xl sm:rounded-3xl mb-6",
            children: [
              (0, a.jsx)("div", {
                className: (0, c.cn)(
                  "absolute inset-0",
                  "bg-gradient-to-br from-[#5D5DE9] via-[#F5A733] to-[#2C3340]",
                ),
              }),
              (0, a.jsx)("div", {
                className:
                  "absolute top-0 right-0 w-64 h-64 bg-white/10 rounded-full -translate-y-1/2 translate-x-1/3",
              }),
              (0, a.jsx)("div", {
                className:
                  "absolute bottom-0 left-0 w-48 h-48 bg-white/5 rounded-full translate-y-1/2 -translate-x-1/4",
              }),
              (0, a.jsx)("div", {
                className:
                  "absolute top-1/2 right-1/4 w-32 h-32 bg-white/5 rounded-full",
              }),
              (0, a.jsxs)("div", {
                className: "relative z-10 px-4 sm:px-6 lg:px-8 py-5 sm:py-6",
                children: [
                  (0, a.jsxs)("div", {
                    className: "flex items-start justify-between mb-4 sm:mb-5",
                    children: [
                      (0, a.jsxs)("div", {
                        className: "flex items-center gap-2.5 sm:gap-3",
                        children: [
                          (0, a.jsx)("div", {
                            className:
                              "p-2 sm:p-2.5 bg-white/20 rounded-lg backdrop-blur-sm",
                            children: (0, a.jsx)(d.A, {
                              className: "w-5 h-5 sm:w-6 sm:h-6 text-white",
                            }),
                          }),
                          (0, a.jsxs)("div", {
                            children: [
                              (0, a.jsx)("h1", {
                                className:
                                  "text-xl sm:text-2xl font-bold text-white",
                                children: j.title,
                              }),
                              (0, a.jsx)("p", {
                                className:
                                  "text-xs sm:text-sm text-white/80 mt-0.5",
                                children: j.subtitle,
                              }),
                            ],
                          }),
                        ],
                      }),
                      (0, a.jsxs)("div", {
                        className: "hidden sm:flex items-center gap-2",
                        children: [
                          (0, a.jsx)(g.$, {
                            variant: "ghost",
                            size: "sm",
                            onClick: i,
                            disabled: n,
                            className: (0, c.cn)(
                              "h-9 w-9 p-0 rounded-full",
                              "bg-white/10 hover:bg-white/20 text-white",
                              "border-0",
                            ),
                            children: (0, a.jsx)(u.A, {
                              className: (0, c.cn)(
                                "w-4 h-4",
                                n && "animate-spin",
                              ),
                            }),
                          }),
                          (0, a.jsxs)(g.$, {
                            onClick: l,
                            size: "sm",
                            className: (0, c.cn)(
                              "rounded-full h-10 px-4",
                              "bg-white hover:bg-white/90 text-[#5D5DE9]",
                              "shadow-lg shadow-black/10",
                              "font-semibold text-sm",
                            ),
                            children: [
                              (0, a.jsx)(b.A, { className: "w-4 h-4 mr-1.5" }),
                              f,
                            ],
                          }),
                        ],
                      }),
                    ],
                  }),
                  (0, a.jsx)("div", {
                    className: "flex flex-wrap gap-2 sm:gap-3",
                    children: v.map((e) => {
                      let t = e.icon;
                      return (0, a.jsx)(
                        "div",
                        {
                          className: (0, c.cn)(
                            "flex-1 min-w-[calc(50%-4px)] sm:min-w-0",
                            "relative p-3 sm:p-4 rounded-xl",
                            "bg-white/15 backdrop-blur-sm",
                            "border border-white/20",
                            "transition-all duration-200",
                            "hover:bg-white/20",
                            e.highlight && "ring-2 ring-white/40",
                          ),
                          children: (0, a.jsxs)("div", {
                            className: "flex items-center gap-2 sm:gap-3",
                            children: [
                              (0, a.jsx)("div", {
                                className: (0, c.cn)(
                                  "p-1.5 sm:p-2 rounded-lg",
                                  "bg-white/20",
                                ),
                                children: (0, a.jsx)(t, {
                                  className: "w-4 h-4 text-white",
                                }),
                              }),
                              (0, a.jsxs)("div", {
                                className: "min-w-0 flex-1",
                                children: [
                                  (0, a.jsx)("p", {
                                    className:
                                      "text-xl sm:text-2xl font-bold text-white",
                                    children: e.value,
                                  }),
                                  (0, a.jsx)("p", {
                                    className:
                                      "text-[10px] sm:text-xs text-white/70 truncate",
                                    children: e.label,
                                  }),
                                ],
                              }),
                            ],
                          }),
                        },
                        e.label,
                      );
                    }),
                  }),
                  (0, a.jsx)("div", {
                    className: "sm:hidden mt-4",
                    children: (0, a.jsxs)(g.$, {
                      onClick: l,
                      className: (0, c.cn)(
                        "w-full rounded-full h-12",
                        "bg-white hover:bg-white/90 text-[#5D5DE9]",
                        "shadow-lg shadow-black/10",
                        "font-semibold text-base",
                      ),
                      children: [
                        (0, a.jsx)(b.A, { className: "w-5 h-5 mr-2" }),
                        f,
                      ],
                    }),
                  }),
                ],
              }),
            ],
          })
        );
      }
      var f = s(88272),
        F = s(72635),
        v = s(74577),
        N = s(31670),
        y = s(72815),
        A = s(70005),
        _ = s(18790),
        k = s(39945),
        S = s(64713);
      (F.A, v.A, m.A, N.A, y.A, A.A, _.A, k.A, S.A);
      var E = s(10542),
        C = s.n(E),
        D = s(50018),
        T = s(48242),
        J = s(16148),
        P = s(1701),
        B = s(84217),
        R = s(95992),
        z = s(50341),
        I = s(9325),
        O = s(62839),
        q = s(69230),
        M = s(67226);
      let K = {
          en: {
            viewDetails: "View Details",
            openJobLink: "Open Job Link",
            markAsApplied: "Mark as Applied",
            gotResponse: "Got Response",
            scheduleInterview: "Schedule Interview",
            withdraw: "Withdraw",
            reactivate: "Reactivate",
            delete: "Delete",
            daysAgo: (e) => "".concat(e, "d ago"),
            today: "Today",
            hasKit: "Has Kit",
            noKit: "No Kit",
            external: "External",
            platform: "Platform",
            interviewOn: "Interview on",
            appliedOn: "Applied",
            followUp: "Follow-up suggested",
            interviewSoon: "Interview soon",
            interviewTomorrow: "Interview tomorrow",
            applyReminder: "Ready to apply",
            noResponseUpdate: "No response yet",
          },
          de: {
            viewDetails: "Details anzeigen",
            openJobLink: "Job-Link \xf6ffnen",
            markAsApplied: "Als beworben markieren",
            gotResponse: "Antwort erhalten",
            scheduleInterview: "Vorstellungsgespr\xe4ch planen",
            withdraw: "Zur\xfcckziehen",
            reactivate: "Reaktivieren",
            delete: "L\xf6schen",
            daysAgo: (e) => "vor ".concat(e, " Tagen"),
            today: "Heute",
            hasKit: "Mit KI-Kit",
            noKit: "Kein Kit",
            external: "Extern",
            platform: "Plattform",
            interviewOn: "Gespr\xe4ch am",
            appliedOn: "Beworben am",
            followUp: "Nachfassen empfohlen",
            interviewSoon: "Gespr\xe4ch bald",
            interviewTomorrow: "Gespr\xe4ch morgen",
            applyReminder: "Bereit zu bewerben",
            noResponseUpdate: "Noch keine Antwort",
          },
        },
        L = {
          follow_up_suggested: {
            en: "Follow-up suggested",
            de: "Nachfassen empfohlen",
          },
          interview_soon: { en: "Interview soon", de: "Gespr\xe4ch bald" },
          interview_tomorrow: {
            en: "Interview tomorrow!",
            de: "Gespr\xe4ch morgen!",
          },
          apply_reminder: { en: "Ready to apply", de: "Bereit zu bewerben" },
          no_response_update: {
            en: "No response yet",
            de: "Noch keine Antwort",
          },
        };
      function G(e) {
        var t, s, l, i, n, r, o, x, h, p, u;
        let {
            application: b,
            onStatusChange: w,
            onDelete: j,
            language: F = "en",
          } = e,
          v = K[F],
          N = f.N[b.status],
          y =
            (null === (t = b.employer) || void 0 === t
              ? void 0
              : t.company_name) ||
            b.external_company ||
            "Unknown",
          k =
            (null === (s = b.job) || void 0 === s ? void 0 : s.title_de) ||
            (null === (l = b.job) || void 0 === l ? void 0 : l.title_en) ||
            b.external_title ||
            "Ausbildung",
          S = (null === (i = b.job) || void 0 === i ? void 0 : i.city) || "",
          E =
            null === (n = b.employer) || void 0 === n
              ? void 0
              : n.company_logo_url,
          G = !b.job_posting_id,
          U = !!b.application_kit,
          V =
            (null === (r = b.job) || void 0 === r
              ? void 0
              : r.external_application_url) || b.external_url,
          W = (e) =>
            e
              ? new Date(e).toLocaleDateString("de" === F ? "de-DE" : "en-US", {
                  day: "numeric",
                  month: "short",
                })
              : null,
          $ = b.attention
            ? (null === (o = L[b.attention.reason]) || void 0 === o
                ? void 0
                : o[F]) || b.attention.reason
            : null,
          Y = (e) => {
            null == w || w(b.id, e, b.status);
          };
        return (0, a.jsx)(C(), {
          href: "/dashboard/applications/".concat(b.id),
          className: (0, c.cn)(
            "group block bg-white rounded-2xl border-2 p-4 sm:p-5 transition-all duration-200",
            "hover:shadow-[0_8px_24px_rgba(44,51,64,0.08)] hover:-translate-y-0.5",
            "active:translate-y-0 active:shadow-sm",
            (null === (x = b.attention) || void 0 === x
              ? void 0
              : x.priority) === "high" &&
              "border-[#5D5DE9] shadow-[0_4px_12px_rgba(93,93,233,0.15)] bg-gradient-to-r from-white to-[rgba(93,93,233,0.02)]",
            (null === (h = b.attention) || void 0 === h
              ? void 0
              : h.priority) === "medium" &&
              "border-[#5D5DE9]/40 shadow-[0_2px_8px_rgba(93,93,233,0.08)]",
            !b.attention &&
              "border-[#2C3340]/8 shadow-[0_2px_8px_rgba(44,51,64,0.04)]",
          ),
          children: (0, a.jsxs)("div", {
            className: "flex items-start gap-3 sm:gap-4",
            children: [
              (0, a.jsx)("div", {
                className: "flex-shrink-0",
                children: E
                  ? (0, a.jsxs)("div", {
                      className: "relative",
                      children: [
                        (0, a.jsx)(D.default, {
                          src: E,
                          alt: y,
                          width: 56,
                          height: 56,
                          className:
                            "w-12 h-12 sm:w-14 sm:h-14 rounded-xl object-contain bg-white border border-[#2C3340]/10 p-1",
                        }),
                        U &&
                          (0, a.jsx)("div", {
                            className:
                              "absolute -bottom-1 -right-1 w-5 h-5 bg-[#5D5DE9] rounded-full flex items-center justify-center shadow-sm",
                            children: (0, a.jsx)(d.A, {
                              className: "w-2.5 h-2.5 text-white",
                            }),
                          }),
                      ],
                    })
                  : (0, a.jsxs)("div", {
                      className: "relative",
                      children: [
                        (0, a.jsx)("div", {
                          className:
                            "w-12 h-12 sm:w-14 sm:h-14 rounded-xl bg-gradient-to-br from-[#EEF0F4] to-[#F7F8FA] flex items-center justify-center border border-[#2C3340]/5",
                          children: (0, a.jsx)(J.A, {
                            className:
                              "w-6 h-6 sm:w-7 sm:h-7 text-[#2C3340]/50",
                          }),
                        }),
                        U &&
                          (0, a.jsx)("div", {
                            className:
                              "absolute -bottom-1 -right-1 w-5 h-5 bg-[#5D5DE9] rounded-full flex items-center justify-center shadow-sm",
                            children: (0, a.jsx)(d.A, {
                              className: "w-2.5 h-2.5 text-white",
                            }),
                          }),
                      ],
                    }),
              }),
              (0, a.jsxs)("div", {
                className: "flex-1 min-w-0",
                children: [
                  (0, a.jsxs)("div", {
                    className: "flex items-start justify-between gap-3",
                    children: [
                      (0, a.jsxs)("div", {
                        className: "min-w-0 flex-1",
                        children: [
                          (0, a.jsx)("h3", {
                            className:
                              "font-semibold text-base sm:text-lg text-[#2C3340] truncate leading-tight group-hover:text-[#5D5DE9] transition-colors",
                            children: k,
                          }),
                          (0, a.jsx)("p", {
                            className:
                              "text-sm text-[#2C3340]/60 truncate mt-0.5",
                            children: y,
                          }),
                        ],
                      }),
                      (0, a.jsx)("div", {
                        className: (0, c.cn)(
                          "flex-shrink-0 px-3 py-1.5 rounded-full text-xs font-semibold",
                          "shadow-sm",
                          N.bgColor,
                          N.color,
                        ),
                        children: "de" === F ? N.label_de : N.label,
                      }),
                    ],
                  }),
                  (0, a.jsxs)("div", {
                    className:
                      "flex flex-wrap items-center gap-x-4 gap-y-1.5 mt-3 text-xs text-[#2C3340]/60",
                    children: [
                      S &&
                        (0, a.jsxs)("span", {
                          className: "flex items-center gap-1.5",
                          children: [
                            (0, a.jsx)(P.A, {
                              className: "w-3.5 h-3.5 text-[#5D5DE9]",
                            }),
                            S,
                          ],
                        }),
                      b.applied_at &&
                        (0, a.jsxs)("span", {
                          className: "flex items-center gap-1.5",
                          children: [
                            (0, a.jsx)(B.A, {
                              className: "w-3.5 h-3.5 text-[#2C3340]/40",
                            }),
                            W(b.applied_at),
                          ],
                        }),
                      b.interview_date &&
                        "interview" === b.status &&
                        (0, a.jsxs)("span", {
                          className:
                            "flex items-center gap-1.5 text-[#5D5DE9] font-medium",
                          children: [
                            (0, a.jsx)(m.A, { className: "w-3.5 h-3.5" }),
                            v.interviewOn,
                            " ",
                            W(b.interview_date),
                          ],
                        }),
                      G &&
                        (0, a.jsx)("span", {
                          className:
                            "px-2 py-0.5 bg-[#F7F8FA] rounded-full text-[#2C3340]/50 text-[10px] font-medium",
                          children: v.external,
                        }),
                    ],
                  }),
                  b.attention &&
                    (0, a.jsxs)("div", {
                      className: (0, c.cn)(
                        "mt-3 px-3 py-2 rounded-xl text-xs flex items-center gap-2 font-medium",
                        "high" === b.attention.priority &&
                          "bg-gradient-to-r from-[rgba(93,93,233,0.15)] to-[rgba(93,93,233,0.08)] text-[#5D5DE9] border border-[#5D5DE9]/20",
                        "medium" === b.attention.priority &&
                          "bg-[rgba(93,93,233,0.08)] text-[#5D5DE9]/90",
                        "low" === b.attention.priority &&
                          "bg-[#F7F8FA] text-[#2C3340]/60",
                      ),
                      children: [
                        (0, a.jsx)(R.A, { className: "w-4 h-4 flex-shrink-0" }),
                        (0, a.jsx)("span", {
                          className: "truncate",
                          children: $,
                        }),
                      ],
                    }),
                  b.applied_at &&
                    ["applied", "waiting"].includes(b.status) &&
                    (0, a.jsx)("div", {
                      className: "mt-3",
                      children: (0, a.jsx)(M.l8, {
                        appliedDate: b.applied_at,
                        companySize:
                          null === (p = b.employer) || void 0 === p
                            ? void 0
                            : p.company_size,
                        sector:
                          (null === (u = b.job) || void 0 === u
                            ? void 0
                            : u.sector) || void 0,
                        language: F,
                        compact: !0,
                      }),
                    }),
                ],
              }),
              (0, a.jsxs)("div", {
                className: "flex items-center gap-2 flex-shrink-0",
                onClick: (e) => e.stopPropagation(),
                children: [
                  (0, a.jsx)("div", {
                    className:
                      "hidden sm:flex items-center justify-center w-10 h-10 rounded-full bg-[#F7F8FA] opacity-0 group-hover:opacity-100 transition-all group-hover:bg-[rgba(93,93,233,0.1)]",
                    children: (0, a.jsx)(z.A, {
                      className:
                        "w-5 h-5 text-[#2C3340]/40 group-hover:text-[#5D5DE9] transition-colors",
                    }),
                  }),
                  (0, a.jsxs)(T.rI, {
                    children: [
                      (0, a.jsx)(T.ty, {
                        asChild: !0,
                        children: (0, a.jsx)(g.$, {
                          variant: "ghost",
                          size: "sm",
                          className: "h-9 w-9 p-0 rounded-full",
                          children: (0, a.jsx)(I.A, {
                            className: "w-4 h-4 text-[#2C3340]/60",
                          }),
                        }),
                      }),
                      (0, a.jsxs)(T.SQ, {
                        align: "end",
                        className: "w-48",
                        children: [
                          (0, a.jsx)(T._2, {
                            asChild: !0,
                            children: (0, a.jsxs)(C(), {
                              href: "/dashboard/applications/".concat(b.id),
                              className: "cursor-pointer",
                              children: [
                                (0, a.jsx)(d.A, { className: "w-4 h-4 mr-2" }),
                                v.viewDetails,
                              ],
                            }),
                          }),
                          V &&
                            (0, a.jsx)(T._2, {
                              asChild: !0,
                              children: (0, a.jsxs)("a", {
                                href: V,
                                target: "_blank",
                                rel: "noopener noreferrer",
                                className: "cursor-pointer",
                                children: [
                                  (0, a.jsx)(O.A, {
                                    className: "w-4 h-4 mr-2",
                                  }),
                                  v.openJobLink,
                                ],
                              }),
                            }),
                          (0, a.jsx)(T.mB, {}),
                          "preparing" === b.status &&
                            (0, a.jsxs)(T._2, {
                              onClick: () => Y("applied"),
                              children: [
                                (0, a.jsx)(A.A, {
                                  className: "w-4 h-4 mr-2 text-[#5D5DE9]",
                                }),
                                v.markAsApplied,
                              ],
                            }),
                          "applied" === b.status &&
                            (0, a.jsxs)(T._2, {
                              onClick: () => Y("waiting"),
                              children: [
                                (0, a.jsx)(m.A, { className: "w-4 h-4 mr-2" }),
                                v.gotResponse,
                              ],
                            }),
                          ("waiting" === b.status || "applied" === b.status) &&
                            (0, a.jsxs)(T._2, {
                              onClick: () => Y("interview"),
                              children: [
                                (0, a.jsx)(B.A, { className: "w-4 h-4 mr-2" }),
                                v.scheduleInterview,
                              ],
                            }),
                          "withdrawn" === b.status &&
                            (0, a.jsxs)(T._2, {
                              onClick: () => Y("applied"),
                              className: "text-[#2C3340]",
                              children: [
                                (0, a.jsx)(q.A, {
                                  className: "w-4 h-4 mr-2 text-[#5D5DE9]",
                                }),
                                v.reactivate,
                              ],
                            }),
                          ![
                            "accepted",
                            "rejected",
                            "declined",
                            "withdrawn",
                          ].includes(b.status) &&
                            (0, a.jsxs)(a.Fragment, {
                              children: [
                                (0, a.jsx)(T.mB, {}),
                                (0, a.jsxs)(T._2, {
                                  onClick: () => Y("withdrawn"),
                                  className: "text-[#2C3340]/60",
                                  children: [
                                    (0, a.jsx)(_.A, {
                                      className: "w-4 h-4 mr-2",
                                    }),
                                    v.withdraw,
                                  ],
                                }),
                              ],
                            }),
                          (0, a.jsx)(T.mB, {}),
                          (0, a.jsxs)(T._2, {
                            onClick: () => (null == j ? void 0 : j(b.id)),
                            className: "text-red-600",
                            children: [
                              (0, a.jsx)(_.A, { className: "w-4 h-4 mr-2" }),
                              v.delete,
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
        });
      }
      var U = s(93501),
        V = s(59137),
        W = s(88526);
      let $ = {
          en: {
            all: "All",
            sortBy: "Sort by",
            newest: "Newest first",
            oldest: "Oldest first",
            company: "Company A-Z",
            status: "By status",
            clearFilter: "Clear filter",
          },
          de: {
            all: "Alle",
            sortBy: "Sortieren nach",
            newest: "Neueste zuerst",
            oldest: "\xc4lteste zuerst",
            company: "Firma A-Z",
            status: "Nach Status",
            clearFilter: "Filter l\xf6schen",
          },
        },
        Y = ["preparing", "applied", "waiting", "interview", "decision"];
      function Z(e) {
        let {
            activeStatus: t,
            sortBy: s,
            onStatusChange: l,
            onSortChange: i,
            statusCounts: n = {},
            language: r = "en",
          } = e,
          o = $[r];
        return (0, a.jsxs)("div", {
          className:
            "flex flex-col sm:flex-row items-start sm:items-center justify-between gap-2 sm:gap-3",
          children: [
            (0, a.jsxs)("div", {
              className:
                "flex items-center gap-1.5 sm:gap-2 overflow-x-auto pb-2 sm:pb-0 w-full sm:w-auto scrollbar-hide -mx-1 px-1",
              children: [
                (0, a.jsx)(V.A, {
                  className:
                    "w-3.5 h-3.5 sm:w-4 sm:h-4 text-[#2C3340]/50 flex-shrink-0",
                }),
                (0, a.jsxs)("button", {
                  onClick: () => l("all"),
                  className: (0, c.cn)(
                    "px-2.5 sm:px-3 py-1 sm:py-1.5 rounded-full text-xs sm:text-sm font-medium transition-all whitespace-nowrap min-h-[32px] sm:min-h-[36px] active:scale-95",
                    "all" === t
                      ? "bg-[#2C3340] text-white"
                      : "bg-[#F7F8FA] text-[#2C3340]/70 hover:bg-[#EEF0F4] active:bg-[#EEF0F4]",
                  ),
                  children: [
                    o.all,
                    void 0 !== n.total &&
                      (0, a.jsxs)("span", {
                        className: (0, c.cn)(
                          "ml-1 sm:ml-1.5 text-[10px] sm:text-xs",
                          "all" === t ? "opacity-80" : "opacity-60",
                        ),
                        children: ["(", n.total, ")"],
                      }),
                  ],
                }),
                Y.map((e) => {
                  let s = f.N[e],
                    i = n[e] || 0,
                    o = t === e;
                  return (0, a.jsxs)(
                    "button",
                    {
                      onClick: () => l(e),
                      className: (0, c.cn)(
                        "px-2.5 sm:px-3 py-1 sm:py-1.5 rounded-full text-xs sm:text-sm font-medium transition-all whitespace-nowrap min-h-[32px] sm:min-h-[36px] active:scale-95",
                        o
                          ? (0, c.cn)(
                              s.bgColor,
                              s.color,
                              "ring-2 ring-offset-1",
                              s.borderColor.replace("border-", "ring-"),
                            )
                          : "bg-[#F7F8FA] text-[#2C3340]/70 hover:bg-[#EEF0F4] active:bg-[#EEF0F4]",
                      ),
                      children: [
                        "de" === r ? s.label_de : s.label,
                        i > 0 &&
                          (0, a.jsxs)("span", {
                            className: (0, c.cn)(
                              "ml-1 sm:ml-1.5 text-[10px] sm:text-xs",
                              o ? "opacity-80" : "opacity-60",
                            ),
                            children: ["(", i, ")"],
                          }),
                      ],
                    },
                    e,
                  );
                }),
                "all" !== t &&
                  (0, a.jsx)(g.$, {
                    variant: "ghost",
                    size: "sm",
                    onClick: () => l("all"),
                    className:
                      "h-7 w-7 sm:h-8 sm:w-8 p-0 rounded-full text-[#2C3340]/50 hover:text-[#2C3340] flex-shrink-0",
                    children: (0, a.jsx)(k.A, {
                      className: "w-3.5 h-3.5 sm:w-4 sm:h-4",
                    }),
                  }),
              ],
            }),
            (0, a.jsxs)("div", {
              className: "flex items-center gap-1.5 sm:gap-2 w-full sm:w-auto",
              children: [
                (0, a.jsx)(W.A, {
                  className:
                    "w-3.5 h-3.5 sm:w-4 sm:h-4 text-[#2C3340]/50 flex-shrink-0",
                }),
                (0, a.jsxs)(U.l6, {
                  value: s,
                  onValueChange: (e) => i(e),
                  children: [
                    (0, a.jsx)(U.bq, {
                      className:
                        "w-full sm:w-[160px] rounded-full border-[#2C3340]/20 text-xs sm:text-sm h-8 sm:h-10",
                      children: (0, a.jsx)(U.yv, { placeholder: o.sortBy }),
                    }),
                    (0, a.jsxs)(U.gC, {
                      children: [
                        (0, a.jsx)(U.eb, {
                          value: "newest",
                          children: o.newest,
                        }),
                        (0, a.jsx)(U.eb, {
                          value: "oldest",
                          children: o.oldest,
                        }),
                        (0, a.jsx)(U.eb, {
                          value: "company",
                          children: o.company,
                        }),
                        (0, a.jsx)(U.eb, {
                          value: "status",
                          children: o.status,
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
      let H = {
        en: {
          title: "Needs Your Attention",
          interviewTomorrow: "Interview tomorrow",
          interviewSoon: "Interview in",
          days: "days",
          followUp: "Consider following up",
          waitingDays: "Waiting for",
          applyReminder: "Ready to apply",
          noResponse: "No response yet",
          viewAll: "View all",
        },
        de: {
          title: "Erfordert Aufmerksamkeit",
          interviewTomorrow: "Gespr\xe4ch morgen",
          interviewSoon: "Gespr\xe4ch in",
          days: "Tagen",
          followUp: "Nachfassen empfohlen",
          waitingDays: "Wartet seit",
          applyReminder: "Bereit zu bewerben",
          noResponse: "Noch keine Antwort",
          viewAll: "Alle anzeigen",
        },
      };
      function Q(e) {
        let { applications: t, language: s = "en" } = e,
          l = H[s];
        if (0 === t.length) return null;
        let i = (e) => {
            var t, s, a;
            let i =
                (null === (t = e.employer) || void 0 === t
                  ? void 0
                  : t.company_name) ||
                e.external_company ||
                "Unknown",
              n =
                (null === (s = e.job) || void 0 === s ? void 0 : s.title_de) ||
                (null === (a = e.job) || void 0 === a ? void 0 : a.title_en) ||
                e.external_title ||
                "Ausbildung";
            switch (e.attention.reason) {
              case "interview_tomorrow":
                return {
                  title: l.interviewTomorrow,
                  subtitle: "".concat(n, " @ ").concat(i),
                  icon: B.A,
                };
              case "interview_soon":
                return {
                  title: "".concat(l.interviewSoon, " 3 ").concat(l.days),
                  subtitle: "".concat(n, " @ ").concat(i),
                  icon: B.A,
                };
              case "follow_up_suggested":
                return {
                  title: l.followUp,
                  subtitle: ""
                    .concat(l.waitingDays, " 10+ ")
                    .concat(l.days, " - ")
                    .concat(i),
                  icon: m.A,
                };
              case "apply_reminder":
                return {
                  title: l.applyReminder,
                  subtitle: "".concat(n, " @ ").concat(i),
                  icon: v.A,
                };
              case "no_response_update":
                return {
                  title: l.noResponse,
                  subtitle: "".concat(i, " - 14+ ").concat(l.days),
                  icon: R.A,
                };
              default:
                return { title: e.attention.reason, subtitle: i, icon: R.A };
            }
          },
          n = t.slice(0, 3),
          r = t.length > 3;
        return (0, a.jsxs)("div", {
          className:
            "bg-[rgba(93,93,233,0.08)] rounded-xl sm:rounded-2xl border border-[#5D5DE9]/20 p-3 sm:p-4",
          children: [
            (0, a.jsxs)("div", {
              className: "flex items-center justify-between mb-2 sm:mb-3",
              children: [
                (0, a.jsxs)("h3", {
                  className:
                    "font-semibold text-sm sm:text-base text-[#2C3340] flex items-center gap-1.5 sm:gap-2",
                  children: [
                    (0, a.jsx)(R.A, {
                      className: "w-3.5 h-3.5 sm:w-4 sm:h-4 text-[#5D5DE9]",
                    }),
                    l.title,
                  ],
                }),
                r &&
                  (0, a.jsxs)("span", {
                    className: "text-[10px] sm:text-xs text-[#5D5DE9]",
                    children: ["+", t.length - 3, " more"],
                  }),
              ],
            }),
            (0, a.jsx)("div", {
              className: "space-y-1.5 sm:space-y-2",
              children: n.map((e) => {
                let t = i(e),
                  s = t.icon;
                return (0, a.jsxs)(
                  C(),
                  {
                    href: "/dashboard/applications/".concat(e.id),
                    className: (0, c.cn)(
                      "flex items-center gap-2 sm:gap-3 p-2.5 sm:p-3 rounded-lg sm:rounded-xl bg-white transition-all",
                      "hover:shadow-md active:scale-[0.99] active:bg-[#F7F8FA]/50",
                      "high" === e.attention.priority &&
                        "ring-1 ring-[#5D5DE9]/30",
                    ),
                    children: [
                      (0, a.jsx)("div", {
                        className: (0, c.cn)(
                          "w-8 h-8 sm:w-10 sm:h-10 rounded-full flex items-center justify-center flex-shrink-0",
                          "high" === e.attention.priority
                            ? "bg-[rgba(93,93,233,0.2)]"
                            : "bg-[#F7F8FA]",
                        ),
                        children: (0, a.jsx)(s, {
                          className: (0, c.cn)(
                            "w-4 h-4 sm:w-5 sm:h-5",
                            "high" === e.attention.priority
                              ? "text-[#5D5DE9]"
                              : "text-[#2C3340]/60",
                          ),
                        }),
                      }),
                      (0, a.jsxs)("div", {
                        className: "flex-1 min-w-0",
                        children: [
                          (0, a.jsx)("p", {
                            className:
                              "font-medium text-xs sm:text-sm text-[#2C3340] truncate",
                            children: t.title,
                          }),
                          (0, a.jsx)("p", {
                            className:
                              "text-[10px] sm:text-xs text-[#2C3340]/60 truncate",
                            children: t.subtitle,
                          }),
                        ],
                      }),
                      (0, a.jsx)(z.A, {
                        className:
                          "w-3.5 h-3.5 sm:w-4 sm:h-4 text-[#2C3340]/30 flex-shrink-0",
                      }),
                    ],
                  },
                  e.id,
                );
              }),
            }),
          ],
        });
      }
      (B.A, B.A, m.A, v.A, R.A);
      var X = s(17802),
        ee = s(63604),
        et = s(43431),
        es = s(79650),
        ea = s(46031),
        el = s(63016),
        ei = s(63728),
        en = s(31159),
        er = s(7535),
        eo = s(72982);
      let ec = {
        en: {
          noApplications: "Start Your Application Journey",
          noApplicationsDesc:
            "Track and manage all your job applications in one place. Get AI-powered application kits with cover letters, checklists, and email templates.",
          noResults: "No applications match your filters",
          noResultsDesc:
            "Try adjusting your filters or clear them to see all applications.",
          clearFilters: "Clear Filters",
          browseJobs: "Browse Jobs",
          addExternal: "Track External Job",
          startApplication: "Start New Application",
          tip: 'Click "Application Kit" on any job to get AI-generated cover letters, document checklists, and professional email templates.',
          recommended: "Top Matches for You",
          loadingRecommendations: "Finding your matches...",
          noRecommendations:
            "Complete your profile to get personalized job matches",
          completeProfile: "Complete Profile",
          viewAll: "View All Jobs",
          matchScore: "Match",
          quickStart: "Quick Start Guide",
          step1: "Browse recommended jobs based on your profile",
          step2: "Generate an Application Kit for your dream job",
          step3: "Track your application status and follow-ups",
          getStarted: "Get Started",
          orTrackExternal: "or track an external application",
        },
        de: {
          noApplications: "Starte deine Bewerbungsreise",
          noApplicationsDesc:
            "Verfolge und verwalte alle deine Bewerbungen an einem Ort. Erhalte KI-gest\xfctzte Bewerbungskits mit Anschreiben, Checklisten und E-Mail-Vorlagen.",
          noResults: "Keine Bewerbungen entsprechen deinen Filtern",
          noResultsDesc:
            "Versuche die Filter anzupassen oder l\xf6sche sie um alle Bewerbungen zu sehen.",
          clearFilters: "Filter l\xf6schen",
          browseJobs: "Jobs durchsuchen",
          addExternal: "Externe Bewerbung tracken",
          startApplication: "Neue Bewerbung starten",
          tip: 'Klicke auf "Bewerbungskit" bei jedem Job f\xfcr KI-generierte Anschreiben, Dokumenten-Checklisten und professionelle E-Mail-Vorlagen.',
          recommended: "Top-Matches f\xfcr dich",
          loadingRecommendations: "Finde deine Matches...",
          noRecommendations:
            "Vervollst\xe4ndige dein Profil f\xfcr personalisierte Job-Matches",
          completeProfile: "Profil vervollst\xe4ndigen",
          viewAll: "Alle Jobs ansehen",
          matchScore: "Match",
          quickStart: "Schnellstart-Anleitung",
          step1: "Durchsuche empfohlene Jobs basierend auf deinem Profil",
          step2: "Erstelle ein Bewerbungskit f\xfcr deinen Traumjob",
          step3: "Verfolge den Status deiner Bewerbungen",
          getStarted: "Loslegen",
          orTrackExternal: "oder externe Bewerbung tracken",
        },
      };
      function ed(e) {
        let {
            hasFilters: t = !1,
            onClearFilters: s,
            onAddExternal: i,
            onStartApplication: n,
            onJobClick: r,
            language: o = "en",
          } = e,
          m = ec[o],
          [x, h] = (0, l.useState)([]),
          [p, u] = (0, l.useState)(!1),
          [w, j] = (0, l.useState)(!1),
          f = (0, l.useCallback)(async () => {
            u(!0);
            try {
              let e = await fetch(
                  "/api/student/recommendations?limit=3&includeViewed=true",
                ),
                t = await e.json();
              t.success &&
                (h(t.data.recommendations || []),
                j(t.data.requiresProfileCompletion || !1));
            } catch (e) {
              console.error("Error fetching recommendations:", e);
            } finally {
              u(!1);
            }
          }, []);
        return ((0, l.useEffect)(() => {
          t || f();
        }, [t, f]),
        t)
          ? (0, a.jsxs)("div", {
              className: "text-center py-8 sm:py-12 px-4 sm:px-6",
              children: [
                (0, a.jsx)("div", {
                  className:
                    "w-12 h-12 sm:w-16 sm:h-16 rounded-full bg-[#F7F8FA] flex items-center justify-center mx-auto mb-3 sm:mb-4",
                  children: (0, a.jsx)(et.A, {
                    className: "w-6 h-6 sm:w-8 sm:h-8 text-[#2C3340]/40",
                  }),
                }),
                (0, a.jsx)("h3", {
                  className:
                    "text-base sm:text-lg font-semibold text-[#2C3340] mb-1.5 sm:mb-2",
                  children: m.noResults,
                }),
                (0, a.jsx)("p", {
                  className:
                    "text-xs sm:text-sm text-[#2C3340]/60 mb-4 sm:mb-6 max-w-sm mx-auto",
                  children: m.noResultsDesc,
                }),
                (0, a.jsx)(g.$, {
                  variant: "outline",
                  onClick: s,
                  className:
                    "rounded-full min-h-[40px] sm:min-h-[44px] border-2 border-[#2C3340]/20 text-[#2C3340] text-sm",
                  children: m.clearFilters,
                }),
              ],
            })
          : (0, a.jsxs)("div", {
              className: "space-y-6",
              children: [
                (0, a.jsxs)("div", {
                  className:
                    "relative overflow-hidden bg-gradient-to-br from-[#2C3340] via-[#3d5f24] to-[#1E242E] rounded-2xl p-6 sm:p-8 text-white",
                  children: [
                    (0, a.jsx)("div", {
                      className:
                        "absolute top-0 right-0 w-48 h-48 bg-white/5 rounded-full -translate-y-1/2 translate-x-1/4",
                    }),
                    (0, a.jsx)("div", {
                      className:
                        "absolute bottom-0 left-0 w-32 h-32 bg-white/5 rounded-full translate-y-1/2 -translate-x-1/4",
                    }),
                    (0, a.jsx)("div", {
                      className:
                        "absolute top-1/2 right-1/4 w-20 h-20 bg-[#5D5DE9]/10 rounded-full",
                    }),
                    (0, a.jsxs)("div", {
                      className: "relative z-10",
                      children: [
                        (0, a.jsxs)("div", {
                          className: "flex items-center gap-2 mb-4",
                          children: [
                            (0, a.jsx)("div", {
                              className:
                                "w-10 h-10 rounded-full bg-[#5D5DE9] flex items-center justify-center",
                              children: (0, a.jsx)(es.A, {
                                className: "w-5 h-5 text-white",
                              }),
                            }),
                            (0, a.jsx)("h2", {
                              className:
                                "text-xl sm:text-2xl font-bold text-white",
                              children: m.noApplications,
                            }),
                          ],
                        }),
                        (0, a.jsx)("p", {
                          className:
                            "text-white/80 text-sm sm:text-base max-w-lg mb-6",
                          children: m.noApplicationsDesc,
                        }),
                        (0, a.jsxs)("div", {
                          className:
                            "flex flex-col sm:flex-row items-stretch sm:items-center gap-3",
                          children: [
                            (0, a.jsxs)(g.$, {
                              onClick: n,
                              className: (0, c.cn)(
                                "rounded-full min-h-[48px] px-6 w-full sm:w-auto",
                                "bg-[#5D5DE9] hover:bg-[#2C3340] text-white font-semibold",
                                "shadow-[0_4px_16px_rgba(93,93,233,0.3)]",
                                "hover:shadow-[0_6px_24px_rgba(93,93,233,0.4)]",
                                "transition-all duration-200",
                              ),
                              children: [
                                (0, a.jsx)(b.A, { className: "w-5 h-5 mr-2" }),
                                m.startApplication,
                                (0, a.jsx)(ea.A, { className: "w-4 h-4 ml-2" }),
                              ],
                            }),
                            (0, a.jsxs)("button", {
                              onClick: i,
                              className:
                                "text-white/70 hover:text-white text-sm flex items-center justify-center gap-1.5 transition-colors py-2",
                              children: [
                                (0, a.jsx)(el.A, { className: "w-4 h-4" }),
                                m.orTrackExternal,
                              ],
                            }),
                          ],
                        }),
                      ],
                    }),
                  ],
                }),
                (0, a.jsxs)("div", {
                  className:
                    "bg-white rounded-xl border-2 border-[#2C3340]/10 overflow-hidden",
                  children: [
                    (0, a.jsxs)("div", {
                      className:
                        "p-4 sm:p-5 border-b border-[#2C3340]/10 flex items-center justify-between",
                      children: [
                        (0, a.jsxs)("div", {
                          className: "flex items-center gap-2",
                          children: [
                            (0, a.jsx)(ei.A, {
                              className: "w-5 h-5 text-[#5D5DE9]",
                            }),
                            (0, a.jsx)("h3", {
                              className: "font-semibold text-[#2C3340]",
                              children: m.recommended,
                            }),
                          ],
                        }),
                        (0, a.jsxs)(C(), {
                          href: "/dashboard/jobs",
                          className:
                            "text-xs text-[#5D5DE9] font-medium hover:underline flex items-center gap-1",
                          children: [
                            m.viewAll,
                            (0, a.jsx)(z.A, { className: "w-3.5 h-3.5" }),
                          ],
                        }),
                      ],
                    }),
                    (0, a.jsx)("div", {
                      className: "p-4 sm:p-5",
                      children: p
                        ? (0, a.jsxs)("div", {
                            className: "flex items-center justify-center py-8",
                            children: [
                              (0, a.jsx)(en.A, {
                                className:
                                  "w-6 h-6 animate-spin text-[#5D5DE9]",
                              }),
                              (0, a.jsx)("span", {
                                className: "ml-2 text-sm text-[#2C3340]/60",
                                children: m.loadingRecommendations,
                              }),
                            ],
                          })
                        : w
                          ? (0, a.jsxs)("div", {
                              className: "text-center py-6",
                              children: [
                                (0, a.jsx)("p", {
                                  className: "text-sm text-[#2C3340]/60 mb-4",
                                  children: m.noRecommendations,
                                }),
                                (0, a.jsx)(C(), {
                                  href: "/dashboard/profile",
                                  children: (0, a.jsx)(g.$, {
                                    variant: "outline",
                                    className:
                                      "rounded-full border-2 border-[#5D5DE9] text-[#5D5DE9] hover:bg-[#5D5DE9] hover:text-white",
                                    children: m.completeProfile,
                                  }),
                                }),
                              ],
                            })
                          : 0 === x.length
                            ? (0, a.jsxs)("div", {
                                className: "text-center py-6",
                                children: [
                                  (0, a.jsx)("p", {
                                    className: "text-sm text-[#2C3340]/60 mb-4",
                                    children: m.noRecommendations,
                                  }),
                                  (0, a.jsx)(C(), {
                                    href: "/dashboard/jobs",
                                    children: (0, a.jsx)(g.$, {
                                      variant: "outline",
                                      className:
                                        "rounded-full border-2 border-[#2C3340]/20 text-[#2C3340]",
                                      children: m.browseJobs,
                                    }),
                                  }),
                                ],
                              })
                            : (0, a.jsx)("div", {
                                className: "space-y-3",
                                children: x.map((e) => {
                                  var t, s;
                                  let l = e.job,
                                    i =
                                      "de" === o
                                        ? l.title_de || l.title_en || "Position"
                                        : l.title_en ||
                                          l.title_de ||
                                          "Position",
                                    n =
                                      (null === (t = l.employer) || void 0 === t
                                        ? void 0
                                        : t.company_name) || "Company";
                                  return (0, a.jsxs)(
                                    "div",
                                    {
                                      onClick: () =>
                                        null == r ? void 0 : r(l),
                                      className: (0, c.cn)(
                                        "group flex items-center gap-3 p-3 rounded-xl",
                                        "bg-[#F7F8FA] hover:bg-[#EEF0F4]",
                                        "border border-transparent hover:border-[#5D5DE9]/30",
                                        "cursor-pointer transition-all duration-200",
                                      ),
                                      children: [
                                        (
                                          null === (s = l.employer) ||
                                          void 0 === s
                                            ? void 0
                                            : s.company_logo_url
                                        )
                                          ? (0, a.jsx)("div", {
                                              className:
                                                "w-10 h-10 rounded-lg overflow-hidden bg-white flex-shrink-0",
                                              children: (0, a.jsx)(
                                                ee.OptimizedImage,
                                                {
                                                  src: l.employer
                                                    .company_logo_url,
                                                  alt: n,
                                                  width: 40,
                                                  height: 40,
                                                  className:
                                                    "w-full h-full object-contain",
                                                },
                                              ),
                                            })
                                          : (0, a.jsx)("div", {
                                              className:
                                                "w-10 h-10 rounded-lg bg-[#5D5DE9] flex items-center justify-center flex-shrink-0",
                                              children: (0, a.jsx)(J.A, {
                                                className: "w-5 h-5 text-white",
                                              }),
                                            }),
                                        (0, a.jsxs)("div", {
                                          className: "flex-1 min-w-0",
                                          children: [
                                            (0, a.jsx)("h4", {
                                              className:
                                                "font-medium text-[#2C3340] text-sm line-clamp-1 group-hover:text-[#5D5DE9] transition-colors",
                                              children: i,
                                            }),
                                            (0, a.jsxs)("div", {
                                              className:
                                                "flex items-center gap-2 text-[11px] text-[#2C3340]/60 mt-0.5",
                                              children: [
                                                (0, a.jsxs)("span", {
                                                  className:
                                                    "flex items-center gap-1",
                                                  children: [
                                                    (0, a.jsx)(J.A, {
                                                      className: "w-3 h-3",
                                                    }),
                                                    n,
                                                  ],
                                                }),
                                                l.city &&
                                                  (0, a.jsxs)("span", {
                                                    className:
                                                      "flex items-center gap-1",
                                                    children: [
                                                      (0, a.jsx)(P.A, {
                                                        className: "w-3 h-3",
                                                      }),
                                                      l.city,
                                                    ],
                                                  }),
                                              ],
                                            }),
                                          ],
                                        }),
                                        (0, a.jsxs)("div", {
                                          className:
                                            "flex items-center gap-2 flex-shrink-0",
                                          children: [
                                            (0, a.jsxs)(X.E, {
                                              className:
                                                "bg-[#2C3340] text-white text-[10px] px-2 py-0.5",
                                              children: [
                                                (0, a.jsx)(er.A, {
                                                  className:
                                                    "w-2.5 h-2.5 mr-1 fill-current",
                                                }),
                                                e.match_score,
                                                "%",
                                              ],
                                            }),
                                            (0, a.jsx)(z.A, {
                                              className:
                                                "w-4 h-4 text-[#2C3340]/30 group-hover:text-[#5D5DE9] group-hover:translate-x-0.5 transition-all",
                                            }),
                                          ],
                                        }),
                                      ],
                                    },
                                    e.id,
                                  );
                                }),
                              }),
                    }),
                  ],
                }),
                (0, a.jsxs)("div", {
                  className: "bg-[#F7F8FA] rounded-xl p-5 sm:p-6",
                  children: [
                    (0, a.jsxs)("div", {
                      className: "flex items-center gap-2 mb-4",
                      children: [
                        (0, a.jsx)(eo.A, {
                          className: "w-5 h-5 text-[#5D5DE9]",
                        }),
                        (0, a.jsx)("h3", {
                          className: "font-semibold text-[#2C3340]",
                          children: m.quickStart,
                        }),
                      ],
                    }),
                    (0, a.jsx)("div", {
                      className: "space-y-3",
                      children: [m.step1, m.step2, m.step3].map((e, t) =>
                        (0, a.jsxs)(
                          "div",
                          {
                            className: "flex items-start gap-3",
                            children: [
                              (0, a.jsx)("div", {
                                className:
                                  "w-6 h-6 rounded-full bg-[#5D5DE9]/20 text-[#5D5DE9] text-xs font-bold flex items-center justify-center flex-shrink-0 mt-0.5",
                                children: t + 1,
                              }),
                              (0, a.jsx)("p", {
                                className: "text-sm text-[#2C3340]/70",
                                children: e,
                              }),
                            ],
                          },
                          t,
                        ),
                      ),
                    }),
                    (0, a.jsxs)(g.$, {
                      onClick: n,
                      className: (0, c.cn)(
                        "w-full mt-5 rounded-full min-h-[44px]",
                        "bg-[#2C3340] hover:bg-[#1E242E] text-white",
                      ),
                      children: [
                        m.getStarted,
                        (0, a.jsx)(ea.A, { className: "w-4 h-4 ml-2" }),
                      ],
                    }),
                  ],
                }),
                (0, a.jsxs)("div", {
                  className:
                    "flex items-start gap-3 p-4 bg-white rounded-xl border-2 border-dashed border-[#5D5DE9]/30",
                  children: [
                    (0, a.jsx)("div", {
                      className:
                        "w-8 h-8 rounded-full bg-[#5D5DE9]/10 flex items-center justify-center flex-shrink-0",
                      children: (0, a.jsx)(d.A, {
                        className: "w-4 h-4 text-[#5D5DE9]",
                      }),
                    }),
                    (0, a.jsxs)("p", {
                      className: "text-xs text-[#2C3340]/70",
                      children: [
                        (0, a.jsx)("strong", {
                          className: "text-[#2C3340]",
                          children: "Pro tip:",
                        }),
                        " ",
                        m.tip,
                      ],
                    }),
                  ],
                }),
              ],
            });
      }
      var em = s(6929),
        ex = s(44280),
        eh = s(54539),
        ep = s(61889),
        eu = s(40167),
        eb = s(61607),
        eg = s(87277),
        ew = s(41082),
        ej = s(88117),
        ef = s(56655);
      let eF = eh.Ik({
          company: eh.Yj().min(1, "Company name is required").max(200),
          title: eh.Yj().min(1, "Job title is required").max(200),
          description: eh.Yj().max(1e4).optional(),
          url: eh.Yj().url("Please enter a valid URL").optional().or(eh.eu("")),
          alreadyApplied: eh.zM().default(!1),
        }),
        ev = {
          en: {
            title: "Track External Job",
            description:
              "Add a job application that's not on our platform to keep all your applications in one place.",
            company: "Company Name",
            companyPlaceholder: "e.g., Siemens AG",
            jobTitle: "Job Title",
            jobTitlePlaceholder: "e.g., Industriemechaniker Ausbildung",
            url: "Job URL (optional)",
            urlPlaceholder: "https://...",
            jobDescription: "Job Description (optional)",
            jobDescriptionPlaceholder:
              "Paste the job description here to generate a better application kit later...",
            alreadyApplied: "I have already applied for this position",
            cancel: "Cancel",
            addJob: "Add Job",
            adding: "Adding...",
            success: "Job added successfully!",
            successDesc:
              "You can now track this application and generate a smart kit.",
            error: "Failed to add job",
          },
          de: {
            title: "Externe Bewerbung tracken",
            description:
              "F\xfcge eine Bewerbung hinzu, die nicht auf unserer Plattform ist, um alle Bewerbungen an einem Ort zu haben.",
            company: "Firmenname",
            companyPlaceholder: "z.B. Siemens AG",
            jobTitle: "Stellenbezeichnung",
            jobTitlePlaceholder: "z.B. Industriemechaniker Ausbildung",
            url: "Job-URL (optional)",
            urlPlaceholder: "https://...",
            jobDescription: "Stellenbeschreibung (optional)",
            jobDescriptionPlaceholder:
              "F\xfcge die Stellenbeschreibung hier ein um sp\xe4ter ein besseres Bewerbungskit zu generieren...",
            alreadyApplied: "Ich habe mich bereits beworben",
            cancel: "Abbrechen",
            addJob: "Job hinzuf\xfcgen",
            adding: "Wird hinzugef\xfcgt...",
            success: "Job erfolgreich hinzugef\xfcgt!",
            successDesc:
              "Du kannst diese Bewerbung jetzt tracken und ein KI-Kit generieren.",
            error: "Fehler beim Hinzuf\xfcgen",
          },
        };
      function eN(e) {
        let { open: t, onOpenChange: s, onSuccess: i, language: n = "en" } = e,
          o = ev[n],
          [m, x] = (0, l.useState)(!1),
          { toast: h } = (0, r.dj)(),
          {
            register: p,
            handleSubmit: u,
            formState: { errors: b },
            reset: w,
            watch: j,
            setValue: f,
          } = (0, em.mN)({
            resolver: (0, ex.u)(eF),
            defaultValues: {
              company: "",
              title: "",
              description: "",
              url: "",
              alreadyApplied: !1,
            },
          }),
          F = j("alreadyApplied"),
          v = async (e) => {
            x(!0);
            try {
              let t = await fetch("/api/student/applications/external", {
                  method: "POST",
                  headers: { "Content-Type": "application/json" },
                  body: JSON.stringify({
                    company: e.company,
                    title: e.title,
                    description: e.description || void 0,
                    url: e.url || void 0,
                    status: e.alreadyApplied ? "applied" : "preparing",
                  }),
                }),
                a = await t.json();
              if (!t.ok) throw Error(a.error || o.error);
              (h({ title: o.success, description: o.successDesc }),
                w(),
                s(!1),
                null == i || i(a.application.id));
            } catch (e) {
              (console.error("Error adding external job:", e),
                h({
                  title: o.error,
                  description: e instanceof Error ? e.message : o.error,
                  variant: "destructive",
                }));
            } finally {
              x(!1);
            }
          };
        return (0, a.jsx)(ep.lG, {
          open: t,
          onOpenChange: s,
          children: (0, a.jsxs)(ep.Cf, {
            className:
              "w-[calc(100%-24px)] max-w-[calc(100%-24px)] sm:max-w-lg max-h-[85vh] sm:max-h-[90vh] overflow-y-auto rounded-2xl p-4 sm:p-6",
            children: [
              (0, a.jsxs)(ep.c7, {
                children: [
                  (0, a.jsxs)(ep.L3, {
                    className:
                      "text-[#2C3340] flex items-center gap-2 text-base sm:text-lg",
                    children: [
                      (0, a.jsx)(J.A, {
                        className:
                          "w-4 h-4 sm:w-5 sm:h-5 text-[#5D5DE9] flex-shrink-0",
                      }),
                      o.title,
                    ],
                  }),
                  (0, a.jsx)(ep.rr, {
                    className: "text-[#2C3340]/60 text-xs sm:text-sm",
                    children: o.description,
                  }),
                ],
              }),
              (0, a.jsxs)("form", {
                onSubmit: u(v),
                className: "space-y-3 sm:space-y-4 mt-3 sm:mt-4",
                children: [
                  (0, a.jsxs)("div", {
                    className: "space-y-1.5 sm:space-y-2",
                    children: [
                      (0, a.jsxs)(eg.J, {
                        htmlFor: "company",
                        className: "text-[#2C3340] text-sm",
                        children: [o.company, " *"],
                      }),
                      (0, a.jsxs)("div", {
                        className: "relative",
                        children: [
                          (0, a.jsx)(J.A, {
                            className:
                              "absolute left-3 top-1/2 -translate-y-1/2 w-4 h-4 text-[#2C3340]/40",
                          }),
                          (0, a.jsx)(eu.p, {
                            id: "company",
                            ...p("company"),
                            placeholder: o.companyPlaceholder,
                            className: (0, c.cn)(
                              "pl-10 rounded-lg border-[#2C3340]/20 min-h-[44px] text-sm",
                              b.company && "border-red-500",
                            ),
                          }),
                        ],
                      }),
                      b.company &&
                        (0, a.jsx)("p", {
                          className: "text-xs text-red-500",
                          children: b.company.message,
                        }),
                    ],
                  }),
                  (0, a.jsxs)("div", {
                    className: "space-y-1.5 sm:space-y-2",
                    children: [
                      (0, a.jsxs)(eg.J, {
                        htmlFor: "title",
                        className: "text-[#2C3340] text-sm",
                        children: [o.jobTitle, " *"],
                      }),
                      (0, a.jsxs)("div", {
                        className: "relative",
                        children: [
                          (0, a.jsx)(ej.A, {
                            className:
                              "absolute left-3 top-1/2 -translate-y-1/2 w-4 h-4 text-[#2C3340]/40",
                          }),
                          (0, a.jsx)(eu.p, {
                            id: "title",
                            ...p("title"),
                            placeholder: o.jobTitlePlaceholder,
                            className: (0, c.cn)(
                              "pl-10 rounded-lg border-[#2C3340]/20 min-h-[44px] text-sm",
                              b.title && "border-red-500",
                            ),
                          }),
                        ],
                      }),
                      b.title &&
                        (0, a.jsx)("p", {
                          className: "text-xs text-red-500",
                          children: b.title.message,
                        }),
                    ],
                  }),
                  (0, a.jsxs)("div", {
                    className: "space-y-1.5 sm:space-y-2",
                    children: [
                      (0, a.jsx)(eg.J, {
                        htmlFor: "url",
                        className: "text-[#2C3340] text-sm",
                        children: o.url,
                      }),
                      (0, a.jsxs)("div", {
                        className: "relative",
                        children: [
                          (0, a.jsx)(ef.A, {
                            className:
                              "absolute left-3 top-1/2 -translate-y-1/2 w-4 h-4 text-[#2C3340]/40",
                          }),
                          (0, a.jsx)(eu.p, {
                            id: "url",
                            ...p("url"),
                            placeholder: o.urlPlaceholder,
                            className: (0, c.cn)(
                              "pl-10 rounded-lg border-[#2C3340]/20 min-h-[44px] text-sm",
                              b.url && "border-red-500",
                            ),
                          }),
                        ],
                      }),
                      b.url &&
                        (0, a.jsx)("p", {
                          className: "text-xs text-red-500",
                          children: b.url.message,
                        }),
                    ],
                  }),
                  (0, a.jsxs)("div", {
                    className: "space-y-1.5 sm:space-y-2",
                    children: [
                      (0, a.jsx)(eg.J, {
                        htmlFor: "description",
                        className: "text-[#2C3340] text-sm",
                        children: o.jobDescription,
                      }),
                      (0, a.jsxs)("div", {
                        className: "relative",
                        children: [
                          (0, a.jsx)(d.A, {
                            className:
                              "absolute left-3 top-3 w-4 h-4 text-[#2C3340]/40",
                          }),
                          (0, a.jsx)(eb.T, {
                            id: "description",
                            ...p("description"),
                            placeholder: o.jobDescriptionPlaceholder,
                            className:
                              "pl-10 rounded-lg border-[#2C3340]/20 min-h-[80px] sm:min-h-[100px] resize-none text-sm",
                          }),
                        ],
                      }),
                    ],
                  }),
                  (0, a.jsxs)("div", {
                    className:
                      "flex items-center gap-2.5 sm:gap-3 p-2.5 sm:p-3 bg-[#F7F8FA] rounded-lg min-h-[44px]",
                    children: [
                      (0, a.jsx)(ew.S, {
                        id: "alreadyApplied",
                        checked: F,
                        onCheckedChange: (e) => f("alreadyApplied", e),
                        className: "w-5 h-5",
                      }),
                      (0, a.jsx)(eg.J, {
                        htmlFor: "alreadyApplied",
                        className:
                          "text-xs sm:text-sm text-[#2C3340]/70 cursor-pointer",
                        children: o.alreadyApplied,
                      }),
                    ],
                  }),
                  (0, a.jsxs)("div", {
                    className:
                      "flex flex-col-reverse sm:flex-row gap-2 sm:gap-3 pt-2",
                    children: [
                      (0, a.jsx)(g.$, {
                        type: "button",
                        variant: "outline",
                        onClick: () => s(!1),
                        className:
                          "w-full sm:flex-1 rounded-full min-h-[44px] border-2 border-[#2C3340]/20 text-[#2C3340] text-sm",
                        disabled: m,
                        children: o.cancel,
                      }),
                      (0, a.jsx)(g.$, {
                        type: "submit",
                        disabled: m,
                        className: (0, c.cn)(
                          "w-full sm:flex-1 rounded-full min-h-[44px] text-sm",
                          "bg-[#5D5DE9] hover:bg-[#2C3340] text-white",
                          "shadow-[0_4px_12px_rgba(93,93,233,0.2)]",
                          "active:scale-[0.98]",
                        ),
                        children: m
                          ? (0, a.jsxs)(a.Fragment, {
                              children: [
                                (0, a.jsx)(en.A, {
                                  className: "w-4 h-4 mr-2 animate-spin",
                                }),
                                o.adding,
                              ],
                            })
                          : o.addJob,
                      }),
                    ],
                  }),
                ],
              }),
            ],
          }),
        });
      }
      var ey = s(18051),
        eA = s(45748),
        e_ = s(43866),
        ek = s(95941),
        eS = s(30612),
        eE = s(42678),
        eC = s(61280),
        eD = s(84257),
        eT = s(62165),
        eJ = s(2465),
        eP = s(26304),
        eB = s(51613),
        eR = s(51105),
        ez = s(61695),
        eI = s(95540),
        eO = s(36521),
        eq = s(87198),
        eM = s(52119);
      let eK = {
          method: "online_portal",
          standard_fields: {
            personal_info: !0,
            cv_upload: !0,
            cover_letter: !0,
            certificates: !0,
            motivation_text: !1,
            photo_required: !1,
            start_date_preference: !0,
          },
          typical_response_days: 14,
          tips: [
            "Apply early - popular positions fill quickly",
            "Customize your cover letter for each application",
            "Prepare your documents in PDF format",
          ],
          tips_de: [
            "Bewerben Sie sich fr\xfchzeitig - beliebte Stellen werden schnell besetzt",
            "Passen Sie Ihr Anschreiben f\xfcr jede Bewerbung an",
            "Bereiten Sie Ihre Unterlagen im PDF-Format vor",
          ],
          estimated_completion_minutes: 15,
        },
        eL = {
          en: {
            loading: "Loading...",
            aboutJob: "About this Position",
            requirements: "Requirements",
            benefits: "What We Offer",
            startDate: "Start Date",
            duration: "Duration",
            salary: "Salary",
            sector: "Sector",
            months: "months",
            flexible: "Flexible",
            competitive: "Competitive salary",
            generateKit: "Generate Application Kit",
            viewApplication: "View My Application",
            viewOriginal: "View Original Post",
            applyDirect: "Apply on Website",
            saveJob: "Save Job",
            saved: "Saved",
            saving: "Saving...",
            contact: "Contact",
            company: "Company",
            companySize: "Company Size",
            employees: "employees",
            website: "Website",
            location: "Location",
            alreadyApplied: "Application in progress",
            whatToExpect: "What to Expect When Applying",
            applicationMethod: "Application Method",
            estimatedTime: "Est. Time",
            responseTime: "Response Time",
            youWillNeed: "You'll Need",
            required: "Required",
            recommended: "Recommended",
            tips: "Tips",
            employmentTypes: {
              apprenticeship: "Apprenticeship",
              dual_study: "Dual Study",
              internship: "Internship",
              degree_program: "Degree Program",
              full_time: "Full-time",
              part_time: "Part-time",
            },
          },
          de: {
            loading: "Laden...",
            aboutJob: "\xdcber diese Position",
            requirements: "Anforderungen",
            benefits: "Was wir bieten",
            startDate: "Startdatum",
            duration: "Dauer",
            salary: "Gehalt",
            sector: "Branche",
            months: "Monate",
            flexible: "Flexibel",
            competitive: "Wettbewerbsf\xe4higes Gehalt",
            generateKit: "Bewerbungskit erstellen",
            viewApplication: "Meine Bewerbung ansehen",
            viewOriginal: "Original ansehen",
            applyDirect: "Auf Website bewerben",
            saveJob: "Job speichern",
            saved: "Gespeichert",
            saving: "Speichern...",
            contact: "Kontakt",
            company: "Unternehmen",
            companySize: "Unternehmensgr\xf6\xdfe",
            employees: "Mitarbeiter",
            website: "Website",
            location: "Standort",
            alreadyApplied: "Bewerbung l\xe4uft",
            whatToExpect: "Was Sie bei der Bewerbung erwartet",
            applicationMethod: "Bewerbungsmethode",
            estimatedTime: "Zeitaufwand",
            responseTime: "Antwortzeit",
            youWillNeed: "Was Sie brauchen",
            required: "Erforderlich",
            recommended: "Empfohlen",
            tips: "Tipps",
            employmentTypes: {
              apprenticeship: "Ausbildung",
              dual_study: "Duales Studium",
              internship: "Praktikum",
              degree_program: "Studiengang",
              full_time: "Vollzeit",
              part_time: "Teilzeit",
            },
          },
        };
      function eG(e) {
        if (!e) return (0, a.jsx)(a.Fragment, {});
        let t = e.split(/\n\n+/);
        return (0, a.jsx)("div", {
          className: "space-y-3",
          children: t.map((e, t) => {
            let s = e.trim();
            if (!s) return null;
            let l = s.split("\n"),
              i = /^[\s]*[-•*]\s+|^[\s]*\d+[\.)]\s+/;
            if (l.filter((e) => i.test(e)).length >= 2) {
              let e = l.map((e) => e.replace(i, "").trim()).filter(Boolean);
              return (0, a.jsx)(
                "ul",
                {
                  className:
                    "list-disc list-inside space-y-1.5 text-sm text-[#2C3340]/70",
                  children: e.map((e, t) =>
                    (0, a.jsx)("li", { children: e }, t),
                  ),
                },
                t,
              );
            }
            return (0, a.jsx)(
              "p",
              {
                className: "text-sm text-[#2C3340]/70 leading-relaxed",
                children: s,
              },
              t,
            );
          }),
        });
      }
      function eU(e) {
        var t, s, i, n, o, x;
        let {
            open: h,
            onOpenChange: p,
            job: u,
            language: b = "en",
            onKitGenerated: w,
          } = e,
          j = eL[b],
          f = (0, ey.useRouter)(),
          { toast: F } = (0, r.dj)(),
          [v, N] = (0, l.useState)(!1),
          [y, A] = (0, l.useState)(!1),
          [_, S] = (0, l.useState)(!1),
          [E, C] = (0, l.useState)(!1),
          [D, T] = (0, l.useState)(null),
          R = (0, l.useCallback)(async (e) => {
            try {
              let t = await fetch(
                  "/api/student/saved-jobs/check?job_posting_id=".concat(e),
                ),
                s = await t.json();
              N(s.isSaved || !1);
            } catch (e) {
              N(!1);
            }
          }, []),
          z = (0, l.useCallback)(async (e) => {
            try {
              let t = await fetch(
                  "/api/student/applications/check?job_id=".concat(e),
                ),
                s = await t.json();
              T({
                hasApplication: s.hasApplication || !1,
                applicationId: s.applicationId || null,
                status: s.status || null,
              });
            } catch (e) {
              T(null);
            }
          }, []);
        if (
          ((0, l.useEffect)(() => {
            h && (null == u ? void 0 : u.id) ? (R(u.id), z(u.id)) : T(null);
          }, [h, null == u ? void 0 : u.id, R, z]),
          !u)
        )
          return null;
        let I =
            "de" === b
              ? u.title_de || u.title_en || "Position"
              : u.title_en || u.title_de || "Position",
          q =
            "de" === b
              ? u.description_de || u.description_en
              : u.description_en || u.description_de,
          M =
            "de" === b
              ? u.requirements_de || u.requirements_en
              : u.requirements_en || u.requirements_de,
          K =
            "de" === b
              ? u.benefits_de || u.benefits_en
              : u.benefits_en || u.benefits_de,
          L =
            (null === (t = u.employer) || void 0 === t
              ? void 0
              : t.company_name) || "Company",
          G = async () => {
            A(!0);
            try {
              v
                ? (
                    await fetch("/api/student/saved-jobs", {
                      method: "DELETE",
                      headers: { "Content-Type": "application/json" },
                      body: JSON.stringify({ job_posting_id: u.id }),
                    })
                  ).ok &&
                  (N(!1),
                  F({ title: "de" === b ? "Job entfernt" : "Job unsaved" }))
                : (
                    await fetch("/api/student/saved-jobs", {
                      method: "POST",
                      headers: { "Content-Type": "application/json" },
                      body: JSON.stringify({ job_posting_id: u.id }),
                    })
                  ).ok &&
                  (N(!0),
                  F({ title: "de" === b ? "Job gespeichert" : "Job saved" }));
            } catch (e) {
              F({
                variant: "destructive",
                title: "de" === b ? "Fehler" : "Error",
              });
            } finally {
              A(!1);
            }
          };
        return (0, a.jsxs)(a.Fragment, {
          children: [
            (0, a.jsx)(e_.cj, {
              open: h,
              onOpenChange: p,
              children: (0, a.jsxs)(e_.h, {
                side: "right",
                className: (0, c.cn)(
                  "w-full sm:max-w-[560px] p-0 bg-[#F7F8FA] border-l border-[#2C3340]/10",
                  "flex flex-col h-full",
                ),
                children: [
                  (0, a.jsxs)("div", {
                    className:
                      "flex-shrink-0 bg-gradient-to-br from-[#5D5DE9] via-[#F5A733] to-[#2C3340] p-6 relative overflow-hidden",
                    children: [
                      (0, a.jsx)("div", {
                        className:
                          "absolute top-0 right-0 w-32 h-32 bg-white/10 rounded-full -translate-y-1/2 translate-x-1/4",
                      }),
                      (0, a.jsx)("div", {
                        className:
                          "absolute bottom-0 left-0 w-20 h-20 bg-white/5 rounded-full translate-y-1/2 -translate-x-1/4",
                      }),
                      (0, a.jsx)("button", {
                        onClick: () => p(!1),
                        className:
                          "absolute top-4 right-4 w-8 h-8 rounded-full bg-white/20 hover:bg-white/30 flex items-center justify-center transition-colors",
                        children: (0, a.jsx)(k.A, {
                          className: "w-4 h-4 text-white",
                        }),
                      }),
                      (0, a.jsxs)("div", {
                        className: "relative z-10 flex gap-4",
                        children: [
                          (
                            null === (s = u.employer) || void 0 === s
                              ? void 0
                              : s.company_logo_url
                          )
                            ? (0, a.jsx)("div", {
                                className:
                                  "w-16 h-16 rounded-xl bg-white shadow-lg overflow-hidden flex-shrink-0",
                                children: (0, a.jsx)(ee.OptimizedImage, {
                                  src: u.employer.company_logo_url,
                                  alt: L,
                                  width: 64,
                                  height: 64,
                                  className:
                                    "w-full h-full object-contain p-1.5",
                                }),
                              })
                            : (0, a.jsx)("div", {
                                className:
                                  "w-16 h-16 rounded-xl bg-white shadow-lg flex items-center justify-center flex-shrink-0",
                                children: (0, a.jsx)(J.A, {
                                  className: "w-8 h-8 text-[#5D5DE9]",
                                }),
                              }),
                          (0, a.jsxs)("div", {
                            className: "flex-1 min-w-0",
                            children: [
                              u.employment_type &&
                                (0, a.jsx)(X.E, {
                                  className:
                                    "bg-white/20 text-white text-[10px] mb-2 border-white/30",
                                  children: (function (e) {
                                    let t =
                                      arguments.length > 1 &&
                                      void 0 !== arguments[1]
                                        ? arguments[1]
                                        : "en";
                                    return e
                                      ? eL[t].employmentTypes[e] || e
                                      : "";
                                  })(u.employment_type, b),
                                }),
                              (0, a.jsxs)(e_.Fm, {
                                className: "text-left space-y-1",
                                children: [
                                  (0, a.jsx)(e_.qp, {
                                    className:
                                      "text-white text-lg font-bold leading-tight pr-8",
                                    children: I,
                                  }),
                                  (0, a.jsxs)("div", {
                                    className:
                                      "flex flex-wrap items-center gap-2 text-white/90 text-xs",
                                    children: [
                                      (0, a.jsxs)("span", {
                                        className: "flex items-center gap-1",
                                        children: [
                                          (0, a.jsx)(J.A, {
                                            className: "w-3.5 h-3.5",
                                          }),
                                          L,
                                        ],
                                      }),
                                      u.city &&
                                        (0, a.jsxs)("span", {
                                          className: "flex items-center gap-1",
                                          children: [
                                            (0, a.jsx)(P.A, {
                                              className: "w-3.5 h-3.5",
                                            }),
                                            u.city,
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
                    ],
                  }),
                  (0, a.jsx)("div", {
                    className: "flex-shrink-0 bg-[#EEF0F4] px-6 py-3",
                    children: (0, a.jsxs)("div", {
                      className: "grid grid-cols-2 gap-2",
                      children: [
                        (0, a.jsxs)("div", {
                          className:
                            "bg-white rounded-lg p-2.5 flex items-center gap-2",
                          children: [
                            (0, a.jsx)("div", {
                              className:
                                "w-7 h-7 bg-[#5D5DE9]/10 rounded-lg flex items-center justify-center flex-shrink-0",
                              children: (0, a.jsx)(B.A, {
                                className: "w-3.5 h-3.5 text-[#5D5DE9]",
                              }),
                            }),
                            (0, a.jsxs)("div", {
                              className: "min-w-0",
                              children: [
                                (0, a.jsx)("p", {
                                  className: "text-[10px] text-[#2C3340]/60",
                                  children: j.startDate,
                                }),
                                (0, a.jsx)("p", {
                                  className:
                                    "text-xs font-semibold text-[#2C3340] truncate",
                                  children: (x = u.start_date)
                                    ? new Date(x).toLocaleDateString(
                                        "de" === b ? "de-DE" : "en-US",
                                        { month: "long", year: "numeric" },
                                      )
                                    : j.flexible,
                                }),
                              ],
                            }),
                          ],
                        }),
                        (0, a.jsxs)("div", {
                          className:
                            "bg-white rounded-lg p-2.5 flex items-center gap-2",
                          children: [
                            (0, a.jsx)("div", {
                              className:
                                "w-7 h-7 bg-[#2C3340]/10 rounded-lg flex items-center justify-center flex-shrink-0",
                              children: (0, a.jsx)(m.A, {
                                className: "w-3.5 h-3.5 text-[#2C3340]",
                              }),
                            }),
                            (0, a.jsxs)("div", {
                              className: "min-w-0",
                              children: [
                                (0, a.jsx)("p", {
                                  className: "text-[10px] text-[#2C3340]/60",
                                  children: j.duration,
                                }),
                                (0, a.jsxs)("p", {
                                  className:
                                    "text-xs font-semibold text-[#2C3340] truncate",
                                  children: [
                                    u.duration_months || 36,
                                    " ",
                                    j.months,
                                  ],
                                }),
                              ],
                            }),
                          ],
                        }),
                        (0, a.jsxs)("div", {
                          className:
                            "bg-white rounded-lg p-2.5 flex items-center gap-2",
                          children: [
                            (0, a.jsx)("div", {
                              className:
                                "w-7 h-7 bg-[#5D5DE9]/10 rounded-lg flex items-center justify-center flex-shrink-0",
                              children: (0, a.jsx)(ej.A, {
                                className: "w-3.5 h-3.5 text-[#5D5DE9]",
                              }),
                            }),
                            (0, a.jsxs)("div", {
                              className: "min-w-0",
                              children: [
                                (0, a.jsx)("p", {
                                  className: "text-[10px] text-[#2C3340]/60",
                                  children: j.sector,
                                }),
                                (0, a.jsx)("p", {
                                  className:
                                    "text-xs font-semibold text-[#2C3340] truncate",
                                  children: u.sector,
                                }),
                              ],
                            }),
                          ],
                        }),
                        (0, a.jsxs)("div", {
                          className:
                            "bg-white rounded-lg p-2.5 flex items-center gap-2",
                          children: [
                            (0, a.jsx)("div", {
                              className:
                                "w-7 h-7 bg-[#2C3340]/10 rounded-lg flex items-center justify-center flex-shrink-0",
                              children: (0, a.jsx)(eT.A, {
                                className: "w-3.5 h-3.5 text-[#2C3340]",
                              }),
                            }),
                            (0, a.jsxs)("div", {
                              className: "min-w-0",
                              children: [
                                (0, a.jsx)("p", {
                                  className: "text-[10px] text-[#2C3340]/60",
                                  children: j.salary,
                                }),
                                (0, a.jsx)("p", {
                                  className:
                                    "text-xs font-semibold text-[#2C3340] truncate",
                                  children:
                                    u.salary_min && u.salary_max
                                      ? "€"
                                          .concat(
                                            u.salary_min.toLocaleString(),
                                            " - €",
                                          )
                                          .concat(u.salary_max.toLocaleString())
                                      : j.competitive,
                                }),
                              ],
                            }),
                          ],
                        }),
                      ],
                    }),
                  }),
                  (0, a.jsx)(eS.F, {
                    className: "flex-1",
                    children: (0, a.jsxs)("div", {
                      className: "p-6 space-y-5",
                      children: [
                        q &&
                          (0, a.jsxs)("div", {
                            className:
                              "bg-white rounded-xl p-4 border border-[#2C3340]/10",
                            children: [
                              (0, a.jsx)("h3", {
                                className:
                                  "text-sm font-semibold text-[#2C3340] mb-3",
                                children: j.aboutJob,
                              }),
                              eG(q),
                            ],
                          }),
                        M &&
                          (0, a.jsxs)("div", {
                            className:
                              "bg-white rounded-xl p-4 border border-[#2C3340]/10",
                            children: [
                              (0, a.jsx)("h3", {
                                className:
                                  "text-sm font-semibold text-[#2C3340] mb-3",
                                children: j.requirements,
                              }),
                              eG(M),
                            ],
                          }),
                        K &&
                          (0, a.jsxs)("div", {
                            className:
                              "bg-[#EEF0F4] rounded-xl p-4 border border-[#5D5DE9]/20",
                            children: [
                              (0, a.jsx)("h3", {
                                className:
                                  "text-sm font-semibold text-[#2C3340] mb-3",
                                children: j.benefits,
                              }),
                              eG(K),
                            ],
                          }),
                        (() => {
                          var e;
                          let t = (function (e) {
                            arguments.length > 1 &&
                              void 0 !== arguments[1] &&
                              arguments[1];
                            let t = e || eK,
                              s = [];
                            (t.standard_fields.cv_upload &&
                              s.push({
                                name: "CV (Lebenslauf)",
                                name_de: "Lebenslauf",
                                required: !0,
                              }),
                              t.standard_fields.cover_letter &&
                                s.push({
                                  name: "Cover Letter (Anschreiben)",
                                  name_de: "Anschreiben",
                                  required: !0,
                                }),
                              t.standard_fields.certificates &&
                                s.push({
                                  name: "School Certificates (Zeugnisse)",
                                  name_de: "Zeugnisse",
                                  required: !0,
                                }),
                              t.standard_fields.photo_required &&
                                s.push({
                                  name: "Photo",
                                  name_de: "Bewerbungsfoto",
                                  required: t.standard_fields.photo_required,
                                }));
                            let a = t.estimated_completion_minutes || 15,
                              l = t.typical_response_days || 14;
                            return {
                              method_label:
                                "online_portal" === t.method
                                  ? "Online Application Form"
                                  : "Email Application",
                              method_label_de:
                                "online_portal" === t.method
                                  ? "Online-Bewerbungsformular"
                                  : "E-Mail-Bewerbung",
                              estimated_time: ""
                                .concat(a, "-")
                                .concat(a + 5, " minutes"),
                              estimated_time_de: ""
                                .concat(a, "-")
                                .concat(a + 5, " Minuten"),
                              response_time: "Usually within ".concat(
                                7 === l ? "1 week" : "".concat(l / 7, " weeks"),
                              ),
                              response_time_de:
                                "Normalerweise innerhalb von ".concat(
                                  7 === l
                                    ? "1 Woche"
                                    : "".concat(l / 7, " Wochen"),
                                ),
                              required_documents: s,
                              tips: t.tips || eK.tips,
                              tips_de: t.tips_de || eK.tips_de || [],
                              ats_platform: t.ats_platform,
                            };
                          })(
                            null === (e = u.employer) || void 0 === e
                              ? void 0
                              : e.application_process,
                            b,
                          );
                          return (0, a.jsxs)("div", {
                            className:
                              "bg-white rounded-xl border border-[#2C3340]/10 overflow-hidden",
                            children: [
                              (0, a.jsxs)("button", {
                                onClick: () => C(!E),
                                className:
                                  "w-full p-4 flex items-center justify-between hover:bg-[#F7F8FA] transition-colors",
                                children: [
                                  (0, a.jsxs)("div", {
                                    className: "flex items-center gap-3",
                                    children: [
                                      (0, a.jsx)("div", {
                                        className:
                                          "w-8 h-8 bg-[#5D5DE9]/10 rounded-lg flex items-center justify-center",
                                        children: (0, a.jsx)(eJ.A, {
                                          className: "w-4 h-4 text-[#5D5DE9]",
                                        }),
                                      }),
                                      (0, a.jsx)("span", {
                                        className:
                                          "text-sm font-semibold text-[#2C3340]",
                                        children: j.whatToExpect,
                                      }),
                                    ],
                                  }),
                                  E
                                    ? (0, a.jsx)(eP.A, {
                                        className: "w-5 h-5 text-[#2C3340]/60",
                                      })
                                    : (0, a.jsx)(eB.A, {
                                        className: "w-5 h-5 text-[#2C3340]/60",
                                      }),
                                ],
                              }),
                              E &&
                                (0, a.jsxs)("div", {
                                  className:
                                    "px-4 pb-4 space-y-4 border-t border-[#2C3340]/10",
                                  children: [
                                    (0, a.jsxs)("div", {
                                      className: "grid grid-cols-3 gap-2 pt-4",
                                      children: [
                                        (0, a.jsxs)("div", {
                                          className:
                                            "text-center p-2 bg-[#F7F8FA] rounded-lg",
                                          children: [
                                            (0, a.jsx)("p", {
                                              className:
                                                "text-[10px] text-[#2C3340]/60 uppercase tracking-wide",
                                              children: j.applicationMethod,
                                            }),
                                            (0, a.jsx)("p", {
                                              className:
                                                "text-xs font-semibold text-[#2C3340] mt-1",
                                              children:
                                                "de" === b
                                                  ? t.method_label_de
                                                  : t.method_label,
                                            }),
                                          ],
                                        }),
                                        (0, a.jsxs)("div", {
                                          className:
                                            "text-center p-2 bg-[#F7F8FA] rounded-lg",
                                          children: [
                                            (0, a.jsx)("p", {
                                              className:
                                                "text-[10px] text-[#2C3340]/60 uppercase tracking-wide",
                                              children: j.estimatedTime,
                                            }),
                                            (0, a.jsx)("p", {
                                              className:
                                                "text-xs font-semibold text-[#2C3340] mt-1",
                                              children:
                                                "de" === b
                                                  ? t.estimated_time_de
                                                  : t.estimated_time,
                                            }),
                                          ],
                                        }),
                                        (0, a.jsxs)("div", {
                                          className:
                                            "text-center p-2 bg-[#F7F8FA] rounded-lg",
                                          children: [
                                            (0, a.jsx)("p", {
                                              className:
                                                "text-[10px] text-[#2C3340]/60 uppercase tracking-wide",
                                              children: j.responseTime,
                                            }),
                                            (0, a.jsx)("p", {
                                              className:
                                                "text-xs font-semibold text-[#5D5DE9] mt-1",
                                              children:
                                                "de" === b
                                                  ? t.response_time_de
                                                  : t.response_time,
                                            }),
                                          ],
                                        }),
                                      ],
                                    }),
                                    (0, a.jsxs)("div", {
                                      children: [
                                        (0, a.jsx)("h4", {
                                          className:
                                            "text-xs font-semibold text-[#2C3340] mb-2",
                                          children: j.youWillNeed,
                                        }),
                                        (0, a.jsx)("div", {
                                          className: "space-y-1.5",
                                          children: t.required_documents.map(
                                            (e, t) =>
                                              (0, a.jsxs)(
                                                "div",
                                                {
                                                  className:
                                                    "flex items-center gap-2 text-sm",
                                                  children: [
                                                    e.required
                                                      ? (0, a.jsx)(eR.A, {
                                                          className:
                                                            "w-4 h-4 text-[#2C3340]",
                                                        })
                                                      : (0, a.jsx)(ez.A, {
                                                          className:
                                                            "w-4 h-4 text-[#2C3340]/40",
                                                        }),
                                                    (0, a.jsx)("span", {
                                                      className: (0, c.cn)(
                                                        "text-[#2C3340]",
                                                        !e.required &&
                                                          "text-[#2C3340]/60",
                                                      ),
                                                      children:
                                                        "de" === b
                                                          ? e.name_de
                                                          : e.name,
                                                    }),
                                                    !e.required &&
                                                      (0, a.jsxs)("span", {
                                                        className:
                                                          "text-[10px] text-[#2C3340]/40",
                                                        children: [
                                                          "(",
                                                          j.recommended,
                                                          ")",
                                                        ],
                                                      }),
                                                  ],
                                                },
                                                t,
                                              ),
                                          ),
                                        }),
                                      ],
                                    }),
                                    t.tips.length > 0 &&
                                      (0, a.jsxs)("div", {
                                        className:
                                          "pt-3 border-t border-[#2C3340]/10",
                                        children: [
                                          (0, a.jsx)("h4", {
                                            className:
                                              "text-xs font-semibold text-[#2C3340] mb-2",
                                            children: j.tips,
                                          }),
                                          (0, a.jsx)("ul", {
                                            className: "space-y-1.5",
                                            children: ("de" === b &&
                                            t.tips_de.length > 0
                                              ? t.tips_de
                                              : t.tips
                                            )
                                              .slice(0, 3)
                                              .map((e, t) =>
                                                (0, a.jsx)(
                                                  "li",
                                                  {
                                                    className:
                                                      "text-xs text-[#2C3340]/70 pl-3 border-l-2 border-[#5D5DE9]/30",
                                                    children: e,
                                                  },
                                                  t,
                                                ),
                                              ),
                                          }),
                                        ],
                                      }),
                                    t.ats_platform &&
                                      (0, a.jsxs)("div", {
                                        className:
                                          "flex items-center gap-2 pt-2",
                                        children: [
                                          (0, a.jsx)("span", {
                                            className:
                                              "text-[10px] text-[#2C3340]/50",
                                            children:
                                              "de" === b
                                                ? "Bewerbungssystem:"
                                                : "Application System:",
                                          }),
                                          (0, a.jsx)(X.E, {
                                            variant: "outline",
                                            className:
                                              "text-[10px] border-[#2C3340]/20 text-[#2C3340]/70",
                                            children: t.ats_platform,
                                          }),
                                        ],
                                      }),
                                  ],
                                }),
                            ],
                          });
                        })(),
                        (0, a.jsxs)("div", {
                          className:
                            "bg-white rounded-xl p-4 border border-[#2C3340]/10",
                          children: [
                            (0, a.jsx)("h3", {
                              className:
                                "text-sm font-semibold text-[#2C3340] mb-3",
                              children: j.company,
                            }),
                            (0, a.jsxs)("div", {
                              className: "space-y-2",
                              children: [
                                (0, a.jsxs)("div", {
                                  className:
                                    "flex items-center justify-between text-sm",
                                  children: [
                                    (0, a.jsx)("span", {
                                      className: "text-[#2C3340]/60",
                                      children: j.company,
                                    }),
                                    (0, a.jsx)("span", {
                                      className: "text-[#2C3340] font-medium",
                                      children: L,
                                    }),
                                  ],
                                }),
                                u.city &&
                                  (0, a.jsxs)("div", {
                                    className:
                                      "flex items-center justify-between text-sm",
                                    children: [
                                      (0, a.jsx)("span", {
                                        className: "text-[#2C3340]/60",
                                        children: j.location,
                                      }),
                                      (0, a.jsxs)("span", {
                                        className: "text-[#2C3340] font-medium",
                                        children: [
                                          u.city,
                                          u.state ? ", ".concat(u.state) : "",
                                        ],
                                      }),
                                    ],
                                  }),
                                (null === (i = u.employer) || void 0 === i
                                  ? void 0
                                  : i.company_size) &&
                                  (0, a.jsxs)("div", {
                                    className:
                                      "flex items-center justify-between text-sm",
                                    children: [
                                      (0, a.jsx)("span", {
                                        className: "text-[#2C3340]/60",
                                        children: j.companySize,
                                      }),
                                      (0, a.jsxs)("span", {
                                        className: "text-[#2C3340] font-medium",
                                        children: [
                                          u.employer.company_size,
                                          " ",
                                          j.employees,
                                        ],
                                      }),
                                    ],
                                  }),
                              ],
                            }),
                            (u.contact_email ||
                              u.contact_phone ||
                              (null === (n = u.employer) || void 0 === n
                                ? void 0
                                : n.company_website)) &&
                              (0, a.jsxs)("div", {
                                className:
                                  "mt-4 pt-4 border-t border-[#2C3340]/10 space-y-2",
                                children: [
                                  (0, a.jsx)("h4", {
                                    className:
                                      "text-xs font-semibold text-[#2C3340] mb-2",
                                    children: j.contact,
                                  }),
                                  u.contact_email &&
                                    (0, a.jsxs)("a", {
                                      href: "mailto:".concat(u.contact_email),
                                      className:
                                        "flex items-center gap-2 text-xs text-[#2C3340] hover:text-[#5D5DE9] transition-colors",
                                      children: [
                                        (0, a.jsx)(eI.A, {
                                          className:
                                            "w-3.5 h-3.5 text-[#5D5DE9]",
                                        }),
                                        u.contact_email,
                                      ],
                                    }),
                                  u.contact_phone &&
                                    (0, a.jsxs)("a", {
                                      href: "tel:".concat(u.contact_phone),
                                      className:
                                        "flex items-center gap-2 text-xs text-[#2C3340] hover:text-[#5D5DE9] transition-colors",
                                      children: [
                                        (0, a.jsx)(eO.A, {
                                          className:
                                            "w-3.5 h-3.5 text-[#5D5DE9]",
                                        }),
                                        u.contact_phone,
                                      ],
                                    }),
                                  (null === (o = u.employer) || void 0 === o
                                    ? void 0
                                    : o.company_website) &&
                                    (0, a.jsxs)("a", {
                                      href: u.employer.company_website,
                                      target: "_blank",
                                      rel: "noopener noreferrer",
                                      className:
                                        "flex items-center gap-2 text-xs text-[#2C3340] hover:text-[#5D5DE9] transition-colors",
                                      children: [
                                        (0, a.jsx)(el.A, {
                                          className:
                                            "w-3.5 h-3.5 text-[#5D5DE9]",
                                        }),
                                        u.employer.company_website
                                          .replace(/^https?:\/\/(www\.)?/, "")
                                          .replace(/\/$/, ""),
                                      ],
                                    }),
                                ],
                              }),
                          ],
                        }),
                      ],
                    }),
                  }),
                  (0, a.jsxs)("div", {
                    className:
                      "flex-shrink-0 p-4 bg-white border-t border-[#2C3340]/10 space-y-2",
                    children: [
                      (0, a.jsxs)("div", {
                        className: "flex gap-2",
                        children: [
                          (null == D ? void 0 : D.hasApplication) &&
                          D.applicationId
                            ? (0, a.jsxs)(g.$, {
                                onClick: () => {
                                  (p(!1),
                                    f.push(
                                      "/dashboard/applications/".concat(
                                        D.applicationId,
                                      ),
                                    ));
                                },
                                className: (0, c.cn)(
                                  "flex-1 h-12 rounded-full",
                                  "bg-[#2C3340] hover:bg-[#1E242E] text-white font-semibold",
                                  "shadow-[0_4px_12px_rgba(44,51,64,0.3)]",
                                  "transition-all duration-200",
                                ),
                                children: [
                                  (0, a.jsx)(eC.A, {
                                    className: "w-4 h-4 mr-2",
                                  }),
                                  j.viewApplication,
                                  (0, a.jsx)(ea.A, {
                                    className: "w-4 h-4 ml-2",
                                  }),
                                ],
                              })
                            : (0, a.jsxs)(g.$, {
                                onClick: () => S(!0),
                                className: (0, c.cn)(
                                  "flex-1 h-12 rounded-full",
                                  "bg-[#5D5DE9] hover:bg-[#2C3340] text-white font-semibold",
                                  "shadow-[0_4px_12px_rgba(93,93,233,0.3)]",
                                  "transition-all duration-200",
                                ),
                                children: [
                                  (0, a.jsx)(d.A, {
                                    className: "w-4 h-4 mr-2",
                                  }),
                                  j.generateKit,
                                  (0, a.jsx)(ea.A, {
                                    className: "w-4 h-4 ml-2",
                                  }),
                                ],
                              }),
                          (0, a.jsx)(g.$, {
                            variant: "outline",
                            onClick: G,
                            disabled: y,
                            className: (0, c.cn)(
                              "h-12 w-12 rounded-full p-0 flex-shrink-0",
                              "border-2 transition-all duration-200",
                              v
                                ? "bg-[#5D5DE9] border-[#5D5DE9] text-white hover:bg-[#2C3340] hover:border-[#2C3340] hover:text-white"
                                : "border-[#2C3340]/20 text-[#2C3340] hover:border-[#5D5DE9] hover:text-[#5D5DE9]",
                            ),
                            children: y
                              ? (0, a.jsx)(en.A, {
                                  className: "w-5 h-5 animate-spin",
                                })
                              : v
                                ? (0, a.jsx)(eq.A, { className: "w-5 h-5" })
                                : (0, a.jsx)(eM.A, { className: "w-5 h-5" }),
                          }),
                        ],
                      }),
                      u.original_url &&
                        (0, a.jsxs)(g.$, {
                          variant: "outline",
                          onClick: () =>
                            window.open(
                              u.original_url,
                              "_blank",
                              "noopener,noreferrer",
                            ),
                          className: (0, c.cn)(
                            "w-full h-10 rounded-full",
                            "border-2 border-[#2C3340]/20 text-[#2C3340]",
                            "hover:border-[#2C3340] hover:bg-[#2C3340] hover:text-white",
                            "transition-all duration-200 text-sm",
                          ),
                          children: [
                            (0, a.jsx)(O.A, { className: "w-4 h-4 mr-2" }),
                            j.viewOriginal,
                          ],
                        }),
                    ],
                  }),
                ],
              }),
            }),
            (0, a.jsx)(eD.k, {
              open: _,
              onOpenChange: S,
              job: {
                id: u.id,
                title: I,
                company: L,
                description: q || "",
                city: u.city,
                sector: u.sector,
                externalUrl: u.external_application_url || void 0,
              },
              language: b,
              onKitGenerated: (e) => {
                (S(!1), p(!1), null == w || w(e));
              },
            }),
          ],
        });
      }
      let eV = {
        en: {
          title: "Start New Application",
          description:
            "Choose a job from our marketplace or track an external application",
          recommended: "Recommended",
          browse: "Browse Jobs",
          external: "Track External",
          searchPlaceholder: "Search jobs by title, company, or city...",
          noRecommendations: "No recommendations yet",
          noRecommendationsDesc:
            "Complete your profile to get personalized job matches",
          completeProfile: "Complete Profile",
          profileIncomplete: "Profile needs completion",
          noJobsFound: "No jobs found",
          noJobsFoundDesc: "Try a different search term",
          clearSearch: "Clear Search",
          loadingRecommendations: "Finding your best matches...",
          loadingJobs: "Loading jobs...",
          matchScore: "Match",
          generateKit: "Generate Application Kit",
          viewApplication: "View Application",
          applied: "Applied",
          viewDetails: "View Details",
          externalDesc: "Track a job application from outside Azubi",
          addExternal: "Add External Job",
          recentJobs: "Recently Posted",
          topMatches: "Top Matches for You",
          browseAll: "Browse All Jobs",
          employmentTypes: {
            apprenticeship: "Apprenticeship",
            dual_study: "Dual Study",
            internship: "Internship",
            degree_program: "Degree Program",
            full_time: "Full-time",
            part_time: "Part-time",
          },
        },
        de: {
          title: "Neue Bewerbung starten",
          description:
            "W\xe4hle einen Job aus unserem Marktplatz oder tracke eine externe Bewerbung",
          recommended: "Empfohlen",
          browse: "Jobs durchsuchen",
          external: "Extern tracken",
          searchPlaceholder: "Suche nach Titel, Unternehmen oder Stadt...",
          noRecommendations: "Noch keine Empfehlungen",
          noRecommendationsDesc:
            "Vervollst\xe4ndige dein Profil f\xfcr personalisierte Job-Matches",
          completeProfile: "Profil vervollst\xe4ndigen",
          profileIncomplete: "Profil muss vervollst\xe4ndigt werden",
          noJobsFound: "Keine Jobs gefunden",
          noJobsFoundDesc: "Versuche einen anderen Suchbegriff",
          clearSearch: "Suche l\xf6schen",
          loadingRecommendations: "Finde deine besten Matches...",
          loadingJobs: "Lade Jobs...",
          matchScore: "Match",
          generateKit: "Bewerbungskit erstellen",
          viewApplication: "Bewerbung ansehen",
          applied: "Beworben",
          viewDetails: "Details ansehen",
          externalDesc: "Tracke eine Bewerbung von au\xdferhalb Azubi",
          addExternal: "Externen Job hinzuf\xfcgen",
          recentJobs: "K\xfcrzlich ver\xf6ffentlicht",
          topMatches: "Top-Matches f\xfcr dich",
          browseAll: "Alle Jobs durchsuchen",
          employmentTypes: {
            apprenticeship: "Ausbildung",
            dual_study: "Duales Studium",
            internship: "Praktikum",
            degree_program: "Studiengang",
            full_time: "Vollzeit",
            part_time: "Teilzeit",
          },
        },
      };
      function eW(e) {
        var t;
        let { open: s, onOpenChange: i, onSuccess: n, language: o = "en" } = e,
          x = eV[o],
          p = (0, ey.useRouter)(),
          { toast: u } = (0, r.dj)(),
          [w, j] = (0, l.useState)("recommended"),
          [f, F] = (0, l.useState)([]),
          [v, N] = (0, l.useState)(!1),
          [y, A] = (0, l.useState)(!1),
          [_, k] = (0, l.useState)(""),
          [S, E] = (0, l.useState)([]),
          [C, D] = (0, l.useState)(!1),
          [T, I] = (0, l.useState)(0),
          [q, M] = (0, l.useState)(!1),
          [K, L] = (0, l.useState)(null),
          [G, U] = (0, l.useState)(!1),
          [V, W] = (0, l.useState)(!1),
          [$, Y] = (0, l.useState)({}),
          Z = (0, l.useCallback)(async (e) => {
            let t = {};
            (await Promise.all(
              e.map(async (e) => {
                try {
                  let s = await fetch(
                      "/api/student/applications/check?job_id=".concat(e),
                    ),
                    a = await s.json();
                  a.hasApplication &&
                    a.applicationId &&
                    (t[e] = { applicationId: a.applicationId });
                } catch (e) {}
              }),
            ),
              Y((e) => ({ ...e, ...t })));
          }, []),
          H = (0, l.useCallback)(async () => {
            N(!0);
            try {
              let e = await fetch(
                  "/api/student/recommendations?limit=10&includeViewed=true",
                ),
                t = await e.json();
              if (t.success) {
                let e = t.data.recommendations || [];
                if (
                  (F(e),
                  A(t.data.requiresProfileCompletion || !1),
                  e.length > 0)
                ) {
                  let t = e.map((e) => e.job.id);
                  Z(t);
                }
              }
            } catch (e) {
              console.error("Error fetching recommendations:", e);
            } finally {
              N(!1);
            }
          }, [Z]),
          Q = (0, l.useCallback)(
            async function () {
              let e =
                arguments.length > 0 && void 0 !== arguments[0]
                  ? arguments[0]
                  : "";
              D(!0);
              try {
                let s = new URLSearchParams({ limit: "20", sort: "date" });
                e && s.append("q", e);
                let a = await fetch("/api/jobs/search?".concat(s)),
                  l = await a.json();
                if (l.success) {
                  var t;
                  let e = l.data || [];
                  if (
                    (E(e),
                    I(
                      (null === (t = l.pagination) || void 0 === t
                        ? void 0
                        : t.total) || 0,
                    ),
                    e.length > 0)
                  ) {
                    let t = e.map((e) => e.id);
                    Z(t);
                  }
                }
              } catch (e) {
                console.error("Error fetching jobs:", e);
              } finally {
                D(!1);
              }
            },
            [Z],
          );
        ((0, l.useEffect)(() => {
          s ? (H(), Q()) : Y({});
        }, [s, H, Q]),
          (0, l.useEffect)(() => {
            if ("browse" === w) {
              let e = setTimeout(() => {
                Q(_);
              }, 300);
              return () => clearTimeout(e);
            }
          }, [_, w, Q]));
        let es = (e) => {
            (L(e), W(!0));
          },
          eo = (e, t) => {
            (t && t.stopPropagation(), L(e), U(!0));
          },
          ec = (e, t) => {
            var s, l;
            let n =
                "de" === o
                  ? e.title_de || e.title_en || "Position"
                  : e.title_en || e.title_de || "Position",
              r =
                (null === (s = e.employer) || void 0 === s
                  ? void 0
                  : s.company_name) || "Company",
              m = e.start_date
                ? new Date(e.start_date).toLocaleDateString(
                    "de" === o ? "de-DE" : "en-US",
                    { month: "short", year: "numeric" },
                  )
                : null;
            return (0, a.jsxs)(eA.P.div, {
              initial: { opacity: 0, y: 10 },
              animate: { opacity: 1, y: 0 },
              className: (0, c.cn)(
                "group relative bg-white border-2 border-[rgba(44,51,64,0.1)] rounded-xl p-4",
                "hover:border-[#5D5DE9]/50 hover:shadow-[0_4px_12px_rgba(93,93,233,0.1)]",
                "transition-all duration-200 cursor-pointer",
              ),
              onClick: () => es(e),
              children: [
                (0, a.jsxs)("div", {
                  className: "flex gap-3",
                  children: [
                    (0, a.jsx)("div", {
                      className: "flex-shrink-0",
                      children: (
                        null === (l = e.employer) || void 0 === l
                          ? void 0
                          : l.company_logo_url
                      )
                        ? (0, a.jsx)("div", {
                            className:
                              "w-12 h-12 rounded-lg overflow-hidden bg-[#EEF0F4]",
                            children: (0, a.jsx)(ee.OptimizedImage, {
                              src: e.employer.company_logo_url,
                              alt: r,
                              width: 48,
                              height: 48,
                              className: "w-full h-full object-cover",
                            }),
                          })
                        : (0, a.jsx)("div", {
                            className:
                              "w-12 h-12 rounded-lg bg-[#5D5DE9] flex items-center justify-center",
                            children: (0, a.jsx)(J.A, {
                              className: "w-6 h-6 text-white",
                            }),
                          }),
                    }),
                    (0, a.jsxs)("div", {
                      className: "flex-1 min-w-0",
                      children: [
                        (0, a.jsxs)("div", {
                          className: "flex items-start justify-between gap-2",
                          children: [
                            (0, a.jsx)("h4", {
                              className:
                                "font-semibold text-[#2C3340] text-sm line-clamp-1 group-hover:text-[#5D5DE9] transition-colors",
                              children: n,
                            }),
                            t &&
                              (0, a.jsxs)(X.E, {
                                className:
                                  "bg-[#2C3340] text-white text-[10px] px-2 py-0.5 flex-shrink-0",
                                children: [
                                  (0, a.jsx)(er.A, {
                                    className: "w-2.5 h-2.5 mr-1 fill-current",
                                  }),
                                  t,
                                  "%",
                                ],
                              }),
                          ],
                        }),
                        (0, a.jsxs)("p", {
                          className:
                            "text-xs text-[#2C3340]/70 mt-0.5 flex items-center gap-1",
                          children: [
                            (0, a.jsx)(J.A, {
                              className: "w-3 h-3 text-[#5D5DE9]",
                            }),
                            r,
                          ],
                        }),
                        (0, a.jsxs)("div", {
                          className:
                            "flex items-center gap-3 mt-2 text-[10px] text-[#2C3340]/60",
                          children: [
                            e.city &&
                              (0, a.jsxs)("span", {
                                className: "flex items-center gap-1",
                                children: [
                                  (0, a.jsx)(P.A, { className: "w-3 h-3" }),
                                  e.city,
                                ],
                              }),
                            m &&
                              (0, a.jsxs)("span", {
                                className: "flex items-center gap-1",
                                children: [
                                  (0, a.jsx)(B.A, { className: "w-3 h-3" }),
                                  m,
                                ],
                              }),
                            e.employment_type &&
                              (0, a.jsx)(X.E, {
                                variant: "secondary",
                                className:
                                  "text-[10px] px-1.5 py-0 h-4 bg-[#EEF0F4] text-[#2C3340]",
                                children: (function (e) {
                                  let t =
                                    arguments.length > 1 &&
                                    void 0 !== arguments[1]
                                      ? arguments[1]
                                      : "en";
                                  return e ? eV[t].employmentTypes[e] || e : "";
                                })(e.employment_type, o),
                              }),
                          ],
                        }),
                      ],
                    }),
                    (0, a.jsx)("div", {
                      className: "flex items-center",
                      children: (0, a.jsx)(z.A, {
                        className:
                          "w-5 h-5 text-[#2C3340]/30 group-hover:text-[#5D5DE9] group-hover:translate-x-1 transition-all",
                      }),
                    }),
                  ],
                }),
                (0, a.jsxs)("div", {
                  className:
                    "mt-3 pt-3 border-t border-[#2C3340]/10 flex items-center justify-between gap-2",
                  children: [
                    (0, a.jsxs)("div", {
                      className: "flex items-center gap-2",
                      children: [
                        (0, a.jsx)(X.E, {
                          className:
                            "bg-[rgba(93,93,233,0.1)] text-[#5D5DE9] text-[10px] sm:text-[11px] px-2 py-0.5 flex-shrink-0",
                          children: e.sector,
                        }),
                        $[e.id] &&
                          (0, a.jsxs)(X.E, {
                            className:
                              "bg-[#2C3340]/10 text-[#2C3340] text-[10px] px-2 py-0.5 flex items-center gap-1",
                            children: [
                              (0, a.jsx)(eE.A, { className: "w-3 h-3" }),
                              x.applied,
                            ],
                          }),
                      ],
                    }),
                    $[e.id]
                      ? (0, a.jsxs)(g.$, {
                          size: "sm",
                          onClick: (t) => {
                            (t.stopPropagation(),
                              i(!1),
                              p.push(
                                "/dashboard/applications/".concat(
                                  $[e.id].applicationId,
                                ),
                              ));
                          },
                          className: (0, c.cn)(
                            "h-8 sm:h-7 px-3 sm:px-2.5 rounded-full text-[11px] sm:text-[10px] font-medium",
                            "bg-[#2C3340] hover:bg-[#1E242E] text-white",
                            "shadow-sm hover:shadow-md transition-all",
                            "min-w-[44px]",
                          ),
                          children: [
                            (0, a.jsx)(eC.A, {
                              className:
                                "w-3.5 h-3.5 sm:w-3 sm:h-3 mr-1.5 sm:mr-1",
                            }),
                            (0, a.jsx)("span", {
                              className: "hidden sm:inline",
                              children: x.viewApplication,
                            }),
                            (0, a.jsx)("span", {
                              className: "sm:hidden",
                              children: "View",
                            }),
                          ],
                        })
                      : (0, a.jsxs)(g.$, {
                          size: "sm",
                          onClick: (t) => eo(e, t),
                          className: (0, c.cn)(
                            "h-8 sm:h-7 px-3 sm:px-2.5 rounded-full text-[11px] sm:text-[10px] font-medium",
                            "bg-[#5D5DE9] hover:bg-[#2C3340] text-white",
                            "shadow-sm hover:shadow-md transition-all",
                            "min-w-[44px]",
                          ),
                          children: [
                            (0, a.jsx)(d.A, {
                              className:
                                "w-3.5 h-3.5 sm:w-3 sm:h-3 mr-1.5 sm:mr-1",
                            }),
                            (0, a.jsx)("span", {
                              className: "hidden sm:inline",
                              children: x.generateKit,
                            }),
                            (0, a.jsx)("span", {
                              className: "sm:hidden",
                              children: "Kit",
                            }),
                          ],
                        }),
                  ],
                }),
              ],
            });
          };
        return (0, a.jsxs)(a.Fragment, {
          children: [
            (0, a.jsx)(e_.cj, {
              open: s,
              onOpenChange: i,
              children: (0, a.jsxs)(e_.h, {
                side: "right",
                className: (0, c.cn)(
                  "w-full sm:max-w-[540px] p-0 bg-[#F7F8FA] border-l border-[#2C3340]/10",
                  "flex flex-col h-full",
                  "[&>button]:hidden",
                ),
                children: [
                  (0, a.jsxs)("div", {
                    className:
                      "flex-shrink-0 p-6 pb-4 bg-gradient-to-br from-[#2C3340] to-[#1E242E] relative",
                    children: [
                      (0, a.jsx)("button", {
                        onClick: () => i(!1),
                        className:
                          "absolute top-4 right-4 w-8 h-8 rounded-full bg-white/20 hover:bg-white/30 flex items-center justify-center transition-colors z-10",
                        "aria-label": "Close",
                        children: (0, a.jsx)("svg", {
                          className: "w-4 h-4 text-white",
                          fill: "none",
                          viewBox: "0 0 24 24",
                          stroke: "currentColor",
                          strokeWidth: 2,
                          children: (0, a.jsx)("path", {
                            strokeLinecap: "round",
                            strokeLinejoin: "round",
                            d: "M6 18L18 6M6 6l12 12",
                          }),
                        }),
                      }),
                      (0, a.jsxs)(e_.Fm, {
                        children: [
                          (0, a.jsxs)(e_.qp, {
                            className:
                              "text-white text-xl font-bold flex items-center gap-2 pr-10",
                            children: [
                              (0, a.jsx)("div", {
                                className:
                                  "w-10 h-10 rounded-full bg-white/20 flex items-center justify-center",
                                children: (0, a.jsx)(b.A, {
                                  className: "w-5 h-5 text-white",
                                }),
                              }),
                              x.title,
                            ],
                          }),
                          (0, a.jsx)(e_.Qs, {
                            className: "text-white/70 text-sm",
                            children: x.description,
                          }),
                        ],
                      }),
                    ],
                  }),
                  (0, a.jsxs)(ek.Tabs, {
                    value: w,
                    onValueChange: (e) => j(e),
                    className: "flex-1 flex flex-col overflow-hidden",
                    children: [
                      (0, a.jsxs)(ek.TabsList, {
                        className:
                          "flex-shrink-0 mx-6 mt-4 bg-white rounded-full p-1 h-auto border border-[#2C3340]/10",
                        children: [
                          (0, a.jsxs)(ek.TabsTrigger, {
                            value: "recommended",
                            className: (0, c.cn)(
                              "flex-1 rounded-full py-2 text-xs font-medium transition-all",
                              "data-[state=active]:bg-[#5D5DE9] data-[state=active]:text-white",
                              "data-[state=inactive]:text-[#2C3340]/60",
                            ),
                            children: [
                              (0, a.jsx)(ei.A, {
                                className: "w-3.5 h-3.5 mr-1.5",
                              }),
                              x.recommended,
                            ],
                          }),
                          (0, a.jsxs)(ek.TabsTrigger, {
                            value: "browse",
                            className: (0, c.cn)(
                              "flex-1 rounded-full py-2 text-xs font-medium transition-all",
                              "data-[state=active]:bg-[#5D5DE9] data-[state=active]:text-white",
                              "data-[state=inactive]:text-[#2C3340]/60",
                            ),
                            children: [
                              (0, a.jsx)(et.A, {
                                className: "w-3.5 h-3.5 mr-1.5",
                              }),
                              x.browse,
                            ],
                          }),
                          (0, a.jsxs)(ek.TabsTrigger, {
                            value: "external",
                            className: (0, c.cn)(
                              "flex-1 rounded-full py-2 text-xs font-medium transition-all",
                              "data-[state=active]:bg-[#5D5DE9] data-[state=active]:text-white",
                              "data-[state=inactive]:text-[#2C3340]/60",
                            ),
                            children: [
                              (0, a.jsx)(el.A, {
                                className: "w-3.5 h-3.5 mr-1.5",
                              }),
                              x.external,
                            ],
                          }),
                        ],
                      }),
                      (0, a.jsxs)("div", {
                        className: "flex-1 overflow-hidden",
                        children: [
                          (0, a.jsx)(ek.TabsContent, {
                            value: "recommended",
                            className:
                              "h-full m-0 p-0 data-[state=inactive]:hidden",
                            children: (0, a.jsx)(eS.F, {
                              className: "h-full",
                              children: (0, a.jsx)("div", {
                                className: "p-6 space-y-4",
                                children: v
                                  ? (0, a.jsxs)("div", {
                                      className:
                                        "flex flex-col items-center justify-center py-12",
                                      children: [
                                        (0, a.jsx)(en.A, {
                                          className:
                                            "w-8 h-8 animate-spin text-[#5D5DE9] mb-3",
                                        }),
                                        (0, a.jsx)("p", {
                                          className:
                                            "text-sm text-[#2C3340]/60",
                                          children: x.loadingRecommendations,
                                        }),
                                      ],
                                    })
                                  : y
                                    ? (0, a.jsxs)("div", {
                                        className:
                                          "text-center py-8 px-4 bg-white rounded-xl border-2 border-dashed border-[#5D5DE9]/30",
                                        children: [
                                          (0, a.jsx)("div", {
                                            className:
                                              "w-16 h-16 rounded-full bg-[#5D5DE9]/10 flex items-center justify-center mx-auto mb-4",
                                            children: (0, a.jsx)(R.A, {
                                              className:
                                                "w-8 h-8 text-[#5D5DE9]",
                                            }),
                                          }),
                                          (0, a.jsx)("h3", {
                                            className:
                                              "font-semibold text-[#2C3340] mb-2",
                                            children: x.noRecommendations,
                                          }),
                                          (0, a.jsx)("p", {
                                            className:
                                              "text-sm text-[#2C3340]/60 mb-4",
                                            children: x.noRecommendationsDesc,
                                          }),
                                          (0, a.jsxs)(g.$, {
                                            className:
                                              "rounded-full bg-[#5D5DE9] hover:bg-[#2C3340] text-white",
                                            onClick: () => {
                                              (i(!1),
                                                (window.location.href =
                                                  "/dashboard/profile"));
                                            },
                                            children: [
                                              x.completeProfile,
                                              (0, a.jsx)(ea.A, {
                                                className: "w-4 h-4 ml-2",
                                              }),
                                            ],
                                          }),
                                        ],
                                      })
                                    : 0 === f.length
                                      ? (0, a.jsxs)("div", {
                                          className: "text-center py-8",
                                          children: [
                                            (0, a.jsx)("div", {
                                              className:
                                                "w-16 h-16 rounded-full bg-[#EEF0F4] flex items-center justify-center mx-auto mb-4",
                                              children: (0, a.jsx)(ei.A, {
                                                className:
                                                  "w-8 h-8 text-[#2C3340]/40",
                                              }),
                                            }),
                                            (0, a.jsx)("h3", {
                                              className:
                                                "font-semibold text-[#2C3340] mb-2",
                                              children: x.noRecommendations,
                                            }),
                                            (0, a.jsx)("p", {
                                              className:
                                                "text-sm text-[#2C3340]/60",
                                              children: x.noRecommendationsDesc,
                                            }),
                                          ],
                                        })
                                      : (0, a.jsxs)(a.Fragment, {
                                          children: [
                                            (0, a.jsxs)("div", {
                                              className:
                                                "flex items-center gap-2 mb-2",
                                              children: [
                                                (0, a.jsx)(h.A, {
                                                  className:
                                                    "w-4 h-4 text-[#5D5DE9]",
                                                }),
                                                (0, a.jsx)("span", {
                                                  className:
                                                    "text-sm font-semibold text-[#2C3340]",
                                                  children: x.topMatches,
                                                }),
                                              ],
                                            }),
                                            (0, a.jsx)("div", {
                                              className: "space-y-3",
                                              children: f.map((e) =>
                                                (0, a.jsx)(
                                                  "div",
                                                  {
                                                    children: ec(
                                                      e.job,
                                                      e.match_score,
                                                    ),
                                                  },
                                                  e.id,
                                                ),
                                              ),
                                            }),
                                          ],
                                        }),
                              }),
                            }),
                          }),
                          (0, a.jsxs)(ek.TabsContent, {
                            value: "browse",
                            className:
                              "h-full m-0 p-0 flex flex-col data-[state=inactive]:hidden",
                            children: [
                              (0, a.jsxs)("div", {
                                className: "flex-shrink-0 px-6 py-4",
                                children: [
                                  (0, a.jsxs)("div", {
                                    className: "relative",
                                    children: [
                                      (0, a.jsx)(et.A, {
                                        className:
                                          "absolute left-3 top-1/2 -translate-y-1/2 w-4 h-4 text-[#2C3340]/40",
                                      }),
                                      (0, a.jsx)(eu.p, {
                                        placeholder: x.searchPlaceholder,
                                        value: _,
                                        onChange: (e) => k(e.target.value),
                                        className: (0, c.cn)(
                                          "pl-10 pr-4 h-11 rounded-full",
                                          "bg-white border-2 border-[#2C3340]/10",
                                          "focus:border-[#5D5DE9] focus:ring-[#5D5DE9]/20",
                                          "text-sm placeholder:text-[#2C3340]/40",
                                        ),
                                      }),
                                    ],
                                  }),
                                  T > 0 &&
                                    (0, a.jsxs)("p", {
                                      className:
                                        "text-xs text-[#2C3340]/60 mt-2",
                                      children: [
                                        T.toLocaleString(),
                                        " ",
                                        "de" === o
                                          ? "Jobs verf\xfcgbar"
                                          : "jobs available",
                                      ],
                                    }),
                                ],
                              }),
                              (0, a.jsx)(eS.F, {
                                className: "flex-1",
                                children: (0, a.jsx)("div", {
                                  className: "px-6 pb-6 space-y-3",
                                  children: C
                                    ? (0, a.jsxs)("div", {
                                        className:
                                          "flex flex-col items-center justify-center py-12",
                                        children: [
                                          (0, a.jsx)(en.A, {
                                            className:
                                              "w-8 h-8 animate-spin text-[#5D5DE9] mb-3",
                                          }),
                                          (0, a.jsx)("p", {
                                            className:
                                              "text-sm text-[#2C3340]/60",
                                            children: x.loadingJobs,
                                          }),
                                        ],
                                      })
                                    : 0 === S.length
                                      ? (0, a.jsxs)("div", {
                                          className: "text-center py-8",
                                          children: [
                                            (0, a.jsx)("div", {
                                              className:
                                                "w-16 h-16 rounded-full bg-[#EEF0F4] flex items-center justify-center mx-auto mb-4",
                                              children: (0, a.jsx)(et.A, {
                                                className:
                                                  "w-8 h-8 text-[#2C3340]/40",
                                              }),
                                            }),
                                            (0, a.jsx)("h3", {
                                              className:
                                                "font-semibold text-[#2C3340] mb-2",
                                              children: x.noJobsFound,
                                            }),
                                            (0, a.jsx)("p", {
                                              className:
                                                "text-sm text-[#2C3340]/60 mb-4",
                                              children: x.noJobsFoundDesc,
                                            }),
                                            _ &&
                                              (0, a.jsx)(g.$, {
                                                variant: "outline",
                                                className: "rounded-full",
                                                onClick: () => k(""),
                                                children: x.clearSearch,
                                              }),
                                          ],
                                        })
                                      : (0, a.jsxs)(a.Fragment, {
                                          children: [
                                            (0, a.jsxs)("div", {
                                              className:
                                                "flex items-center gap-2 mb-2",
                                              children: [
                                                (0, a.jsx)(m.A, {
                                                  className:
                                                    "w-4 h-4 text-[#5D5DE9]",
                                                }),
                                                (0, a.jsx)("span", {
                                                  className:
                                                    "text-sm font-semibold text-[#2C3340]",
                                                  children: x.recentJobs,
                                                }),
                                              ],
                                            }),
                                            S.map((e) =>
                                              (0, a.jsx)(
                                                "div",
                                                { children: ec(e) },
                                                e.id,
                                              ),
                                            ),
                                            (0, a.jsxs)(g.$, {
                                              variant: "outline",
                                              className:
                                                "w-full rounded-full border-2 border-[#2C3340]/20 text-[#2C3340] mt-4",
                                              onClick: () => {
                                                (i(!1),
                                                  (window.location.href =
                                                    "/dashboard/jobs"));
                                              },
                                              children: [
                                                x.browseAll,
                                                (0, a.jsx)(O.A, {
                                                  className: "w-4 h-4 ml-2",
                                                }),
                                              ],
                                            }),
                                          ],
                                        }),
                                }),
                              }),
                            ],
                          }),
                          (0, a.jsx)(ek.TabsContent, {
                            value: "external",
                            className:
                              "h-full m-0 p-0 data-[state=inactive]:hidden",
                            children: (0, a.jsx)(eS.F, {
                              className: "h-full",
                              children: (0, a.jsx)("div", {
                                className: "p-6",
                                children: (0, a.jsxs)("div", {
                                  className:
                                    "text-center py-8 px-4 bg-white rounded-xl border-2 border-dashed border-[#2C3340]/20",
                                  children: [
                                    (0, a.jsx)("div", {
                                      className:
                                        "w-16 h-16 rounded-full bg-[#EEF0F4] flex items-center justify-center mx-auto mb-4",
                                      children: (0, a.jsx)(el.A, {
                                        className: "w-8 h-8 text-[#2C3340]",
                                      }),
                                    }),
                                    (0, a.jsx)("h3", {
                                      className:
                                        "font-semibold text-[#2C3340] mb-2",
                                      children: x.external,
                                    }),
                                    (0, a.jsx)("p", {
                                      className:
                                        "text-sm text-[#2C3340]/60 mb-6",
                                      children: x.externalDesc,
                                    }),
                                    (0, a.jsxs)(g.$, {
                                      className:
                                        "rounded-full bg-[#5D5DE9] hover:bg-[#2C3340] text-white",
                                      onClick: () => M(!0),
                                      children: [
                                        (0, a.jsx)(b.A, {
                                          className: "w-4 h-4 mr-2",
                                        }),
                                        x.addExternal,
                                      ],
                                    }),
                                  ],
                                }),
                              }),
                            }),
                          }),
                        ],
                      }),
                    ],
                  }),
                ],
              }),
            }),
            (0, a.jsx)(eN, {
              open: q,
              onOpenChange: M,
              onSuccess: () => {
                (M(!1), i(!1), n());
              },
              language: o,
            }),
            K &&
              (0, a.jsx)(eD.k, {
                open: G,
                onOpenChange: U,
                job: {
                  id: K.id,
                  title:
                    "de" === o
                      ? K.title_de || K.title_en || ""
                      : K.title_en || K.title_de || "",
                  company:
                    (null === (t = K.employer) || void 0 === t
                      ? void 0
                      : t.company_name) || "",
                  description:
                    "de" === o
                      ? K.description_de || K.description_en || ""
                      : K.description_en || K.description_de || "",
                  city: K.city,
                  sector: K.sector,
                  externalUrl: K.external_application_url || void 0,
                },
                language: o,
                onKitGenerated: (e) => {
                  (U(!1),
                    W(!1),
                    L(null),
                    i(!1),
                    n(),
                    u({
                      title:
                        "de" === o
                          ? "Bewerbung erstellt!"
                          : "Application created!",
                      description:
                        "de" === o
                          ? "Dein Bewerbungskit wurde generiert und die Bewerbung wird jetzt getrackt."
                          : "Your application kit has been generated and the application is now being tracked.",
                    }));
                },
              }),
            (0, a.jsx)(eU, {
              open: V,
              onOpenChange: W,
              job: K,
              language: o,
              onKitGenerated: (e) => {
                (W(!1),
                  L(null),
                  i(!1),
                  n(),
                  u({
                    title:
                      "de" === o
                        ? "Bewerbung erstellt!"
                        : "Application created!",
                    description:
                      "de" === o
                        ? "Dein Bewerbungskit wurde generiert und die Bewerbung wird jetzt getrackt."
                        : "Your application kit has been generated and the application is now being tracked.",
                  }));
              },
            }),
          ],
        });
      }
      var e$ = s(58212);
      function eY() {
        return (0, a.jsxs)("div", {
          className: "space-y-5 sm:space-y-6 animate-in fade-in duration-300",
          children: [
            (0, a.jsxs)("div", {
              className: "relative overflow-hidden rounded-2xl sm:rounded-3xl",
              children: [
                (0, a.jsx)("div", {
                  className:
                    "absolute inset-0 bg-gradient-to-br from-[#5D5DE9] via-[#F5A733] to-[#2C3340]",
                }),
                (0, a.jsx)("div", {
                  className:
                    "absolute top-0 right-0 w-64 h-64 bg-white/10 rounded-full -translate-y-1/2 translate-x-1/3",
                }),
                (0, a.jsx)("div", {
                  className:
                    "absolute bottom-0 left-0 w-48 h-48 bg-white/5 rounded-full translate-y-1/2 -translate-x-1/4",
                }),
                (0, a.jsxs)("div", {
                  className: "relative z-10 px-4 sm:px-6 lg:px-8 py-5 sm:py-6",
                  children: [
                    (0, a.jsxs)("div", {
                      className:
                        "flex items-start justify-between mb-4 sm:mb-5",
                      children: [
                        (0, a.jsxs)("div", {
                          className: "flex items-center gap-2.5 sm:gap-3",
                          children: [
                            (0, a.jsx)(e$.E, {
                              className:
                                "w-10 h-10 sm:w-11 sm:h-11 rounded-lg bg-white/20",
                            }),
                            (0, a.jsxs)("div", {
                              className: "space-y-2",
                              children: [
                                (0, a.jsx)(e$.E, {
                                  className:
                                    "h-6 sm:h-7 w-40 sm:w-48 bg-white/20 rounded",
                                }),
                                (0, a.jsx)(e$.E, {
                                  className:
                                    "h-3 sm:h-4 w-32 sm:w-40 bg-white/15 rounded",
                                }),
                              ],
                            }),
                          ],
                        }),
                        (0, a.jsxs)("div", {
                          className: "flex items-center gap-2",
                          children: [
                            (0, a.jsx)(e$.E, {
                              className: "h-9 w-9 rounded-full bg-white/20",
                            }),
                            (0, a.jsx)(e$.E, {
                              className:
                                "h-9 w-32 rounded-full bg-white/30 hidden sm:block",
                            }),
                          ],
                        }),
                      ],
                    }),
                    (0, a.jsx)("div", {
                      className: "flex flex-wrap gap-2 sm:gap-3",
                      children: [1, 2, 3, 4].map((e) =>
                        (0, a.jsx)(
                          "div",
                          {
                            className: (0, c.cn)(
                              "flex-1 min-w-[calc(50%-4px)] sm:min-w-0",
                              "p-3 sm:p-4 rounded-xl",
                              "bg-white/15 backdrop-blur-sm",
                              "border border-white/20",
                            ),
                            children: (0, a.jsxs)("div", {
                              className: "flex items-center gap-2 sm:gap-3",
                              children: [
                                (0, a.jsx)(e$.E, {
                                  className:
                                    "w-8 h-8 sm:w-10 sm:h-10 rounded-lg bg-white/20",
                                }),
                                (0, a.jsxs)("div", {
                                  className: "space-y-1.5",
                                  children: [
                                    (0, a.jsx)(e$.E, {
                                      className:
                                        "h-6 sm:h-7 w-10 sm:w-12 bg-white/20 rounded",
                                    }),
                                    (0, a.jsx)(e$.E, {
                                      className:
                                        "h-2.5 sm:h-3 w-14 sm:w-16 bg-white/15 rounded",
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
            (0, a.jsxs)("div", {
              className:
                "flex flex-col sm:flex-row sm:items-center justify-between gap-3 sm:gap-4",
              children: [
                (0, a.jsxs)("div", {
                  className:
                    "flex items-center gap-2 overflow-x-auto pb-2 sm:pb-0 scrollbar-hide",
                  children: [
                    (0, a.jsx)(e$.E, {
                      className:
                        "h-8 w-8 rounded-lg bg-[#2C3340]/10 flex-shrink-0",
                    }),
                    [1, 2, 3, 4, 5, 6].map((e) =>
                      (0, a.jsx)(
                        e$.E,
                        {
                          className: (0, c.cn)(
                            "h-8 rounded-full flex-shrink-0",
                            1 === e
                              ? "w-16 bg-[#2C3340]/20"
                              : "w-20 bg-[#2C3340]/10",
                          ),
                        },
                        e,
                      ),
                    ),
                  ],
                }),
                (0, a.jsx)(e$.E, {
                  className:
                    "h-9 w-32 rounded-lg bg-[#2C3340]/10 hidden sm:block",
                }),
              ],
            }),
            (0, a.jsx)("div", {
              className: "space-y-3",
              children: [1, 2, 3].map((e) =>
                (0, a.jsx)(eZ, { delay: 100 * e }, e),
              ),
            }),
          ],
        });
      }
      function eZ(e) {
        let { delay: t = 0 } = e;
        return (0, a.jsx)("div", {
          className: (0, c.cn)(
            "bg-white rounded-xl border-2 border-[#2C3340]/10 p-4 sm:p-5",
            "animate-in fade-in slide-in-from-bottom-2",
          ),
          style: { animationDelay: "".concat(t, "ms") },
          children: (0, a.jsxs)("div", {
            className: "flex gap-3 sm:gap-4",
            children: [
              (0, a.jsx)(e$.E, {
                className:
                  "w-12 h-12 sm:w-14 sm:h-14 rounded-xl bg-[#EEF0F4] flex-shrink-0",
              }),
              (0, a.jsxs)("div", {
                className: "flex-1 min-w-0",
                children: [
                  (0, a.jsxs)("div", {
                    className: "flex items-start justify-between gap-3",
                    children: [
                      (0, a.jsxs)("div", {
                        className: "flex-1 space-y-2",
                        children: [
                          (0, a.jsx)(e$.E, {
                            className:
                              "h-5 sm:h-6 w-3/4 max-w-[280px] bg-[#2C3340]/10 rounded",
                          }),
                          (0, a.jsx)(e$.E, {
                            className:
                              "h-4 w-1/2 max-w-[180px] bg-[#2C3340]/8 rounded",
                          }),
                        ],
                      }),
                      (0, a.jsx)(e$.E, {
                        className:
                          "h-6 w-20 rounded-full bg-[#5D5DE9]/20 flex-shrink-0",
                      }),
                    ],
                  }),
                  (0, a.jsxs)("div", {
                    className: "flex items-center gap-3 mt-3",
                    children: [
                      (0, a.jsx)(e$.E, {
                        className: "h-3.5 w-24 bg-[#2C3340]/8 rounded",
                      }),
                      (0, a.jsx)(e$.E, {
                        className: "h-3.5 w-20 bg-[#2C3340]/8 rounded",
                      }),
                    ],
                  }),
                  (0, a.jsxs)("div", {
                    className: "mt-3 pt-3 border-t border-[#2C3340]/10",
                    children: [
                      (0, a.jsxs)("div", {
                        className: "flex items-center justify-between mb-1.5",
                        children: [
                          (0, a.jsx)(e$.E, {
                            className: "h-3 w-24 bg-[#2C3340]/8 rounded",
                          }),
                          (0, a.jsx)(e$.E, {
                            className: "h-3 w-8 bg-[#2C3340]/8 rounded",
                          }),
                        ],
                      }),
                      (0, a.jsx)(e$.E, {
                        className: "h-1.5 w-full bg-[#2C3340]/10 rounded-full",
                      }),
                    ],
                  }),
                ],
              }),
              (0, a.jsx)(e$.E, {
                className:
                  "w-8 h-8 rounded-lg bg-[#2C3340]/8 flex-shrink-0 hidden sm:block",
              }),
            ],
          }),
        });
      }
      function eH() {
        let [e, t] = (0, l.useState)([]),
          [s, c] = (0, l.useState)([]),
          [d, m] = (0, l.useState)({
            preparing: 0,
            applied: 0,
            waiting: 0,
            interview: 0,
            decision: 0,
            accepted: 0,
            declined: 0,
            rejected: 0,
            withdrawn: 0,
            total: 0,
          }),
          [x, h] = (0, l.useState)(0),
          [p, u] = (0, l.useState)(!0),
          [b, g] = (0, l.useState)(!1),
          [w, f] = (0, l.useState)("all"),
          [F, v] = (0, l.useState)("newest"),
          [N, y] = (0, l.useState)(!1),
          [A, _] = (0, l.useState)(!1),
          [k, S] = (0, l.useState)(!1),
          [E, C] = (0, l.useState)(null),
          { t: D, language: T } = (0, n.ok)(),
          { toast: J } = (0, r.dj)(),
          P = (0, l.useCallback)(
            async function () {
              let e =
                arguments.length > 0 && void 0 !== arguments[0] && arguments[0];
              e && g(!0);
              try {
                let e = new URLSearchParams();
                ("all" !== w && e.append("status", w), e.append("sort", F));
                let l = await fetch(
                    "/api/student/applications/tracked?".concat(e),
                  ),
                  i = await l.json();
                if (i.success) {
                  var s, a;
                  (t(i.applications || []),
                    c(i.needs_attention || []),
                    m(
                      (null === (s = i.stats) || void 0 === s
                        ? void 0
                        : s.counts) || {
                        preparing: 0,
                        applied: 0,
                        waiting: 0,
                        interview: 0,
                        decision: 0,
                        accepted: 0,
                        declined: 0,
                        rejected: 0,
                        withdrawn: 0,
                        total: 0,
                      },
                    ),
                    h(
                      (null === (a = i.stats) || void 0 === a
                        ? void 0
                        : a.response_rate) || 0,
                    ));
                }
              } catch (e) {
                (console.error("Error fetching applications:", e),
                  J({
                    title: "de" === T ? "Fehler" : "Error",
                    description:
                      "de" === T
                        ? "Bewerbungen konnten nicht geladen werden"
                        : "Failed to load applications",
                    variant: "destructive",
                  }));
              } finally {
                (u(!1), g(!1));
              }
            },
            [w, F, J, T],
          );
        (0, l.useEffect)(() => {
          P();
        }, [P]);
        let B = (0, l.useRef)(null),
          R = async (e, s, l) => {
            try {
              (
                await fetch("/api/student/applications/tracked/".concat(e), {
                  method: "PATCH",
                  headers: { "Content-Type": "application/json" },
                  body: JSON.stringify({ status: s }),
                })
              ).ok &&
                (t((t) => t.map((t) => (t.id === e ? { ...t, status: s } : t))),
                B.current && clearTimeout(B.current),
                J({
                  title: "de" === T ? "Status aktualisiert" : "Status updated",
                  description:
                    "de" === T
                      ? "Status wurde ge\xe4ndert. Du hast 10 Sekunden zum R\xfcckg\xe4ngig machen."
                      : "Status has been changed. You have 10 seconds to undo.",
                  action: (0, a.jsxs)(o.Qg, {
                    altText: "de" === T ? "R\xfcckg\xe4ngig" : "Undo",
                    onClick: async () => {
                      try {
                        (
                          await fetch(
                            "/api/student/applications/tracked/".concat(e),
                            {
                              method: "PATCH",
                              headers: { "Content-Type": "application/json" },
                              body: JSON.stringify({ status: l }),
                            },
                          )
                        ).ok &&
                          (t((t) =>
                            t.map((t) =>
                              t.id === e ? { ...t, status: l } : t,
                            ),
                          ),
                          P(!0),
                          J({
                            title:
                              "de" === T
                                ? "R\xfcckg\xe4ngig gemacht"
                                : "Undone",
                            description:
                              "de" === T
                                ? "Der Status wurde wiederhergestellt."
                                : "The status has been restored.",
                          }));
                      } catch (e) {
                        J({
                          title: "de" === T ? "Fehler" : "Error",
                          variant: "destructive",
                        });
                      }
                    },
                    className:
                      "bg-white hover:bg-[#F7F8FA] text-[#2C3340] border border-[#2C3340]/20 rounded-full px-3",
                    children: [
                      (0, a.jsx)(i.A, { className: "w-3.5 h-3.5 mr-1.5" }),
                      "de" === T ? "R\xfcckg\xe4ngig" : "Undo",
                    ],
                  }),
                  duration: 1e4,
                }),
                (B.current = setTimeout(() => {
                  P(!0);
                }, 10500)));
            } catch (e) {
              (console.error("Error updating status:", e),
                J({
                  title: "de" === T ? "Fehler" : "Error",
                  description:
                    "de" === T
                      ? "Status konnte nicht aktualisiert werden"
                      : "Failed to update status",
                  variant: "destructive",
                }));
            }
          },
          z = async (e) => {
            if (
              confirm(
                "de" === T
                  ? "M\xf6chtest du diese Bewerbung wirklich l\xf6schen?"
                  : "Are you sure you want to delete this application?",
              )
            )
              try {
                (
                  await fetch("/api/student/applications/tracked/".concat(e), {
                    method: "DELETE",
                  })
                ).ok &&
                  (t((t) => t.filter((t) => t.id !== e)),
                  P(!0),
                  J({
                    title:
                      "de" === T
                        ? "Bewerbung gel\xf6scht"
                        : "Application deleted",
                  }));
              } catch (e) {
                (console.error("Error deleting application:", e),
                  J({
                    title: "de" === T ? "Fehler" : "Error",
                    variant: "destructive",
                  }));
              }
          },
          I = () => {
            P(!0);
          },
          O = (e) => {
            (C(e), S(!0));
          };
        return (0, a.jsxs)("div", {
          className: "min-h-screen px-4 sm:px-0 pb-20 sm:pb-8",
          children: [
            p
              ? (0, a.jsx)(eY, {})
              : 0 === d.total
                ? (0, a.jsx)(ed, {
                    hasFilters: !1,
                    onAddExternal: () => y(!0),
                    onStartApplication: () => _(!0),
                    onJobClick: O,
                    language: T,
                  })
                : (0, a.jsxs)("div", {
                    className: "space-y-5 sm:space-y-6",
                    children: [
                      (0, a.jsx)(j, {
                        counts: d,
                        responseRate: x,
                        onAddExternal: () => _(!0),
                        onRefresh: () => P(!0),
                        isRefreshing: b,
                        language: T,
                      }),
                      s.length > 0 &&
                        (0, a.jsx)(Q, {
                          applications: s.filter((e) => null !== e.attention),
                          language: T,
                        }),
                      (0, a.jsx)(Z, {
                        activeStatus: w,
                        sortBy: F,
                        onStatusChange: f,
                        onSortChange: v,
                        statusCounts: { ...d, total: d.total },
                        language: T,
                      }),
                      0 === e.length
                        ? (0, a.jsx)(ed, {
                            hasFilters: "all" !== w,
                            onClearFilters: () => f("all"),
                            onAddExternal: () => y(!0),
                            onStartApplication: () => _(!0),
                            onJobClick: O,
                            language: T,
                          })
                        : (0, a.jsx)("div", {
                            className: "space-y-3",
                            children: e.map((e) =>
                              (0, a.jsx)(
                                G,
                                {
                                  application: e,
                                  onStatusChange: R,
                                  onDelete: z,
                                  language: T,
                                },
                                e.id,
                              ),
                            ),
                          }),
                    ],
                  }),
            (0, a.jsx)(eN, {
              open: N,
              onOpenChange: y,
              onSuccess: I,
              language: T,
            }),
            (0, a.jsx)(eW, {
              open: A,
              onOpenChange: _,
              onSuccess: I,
              language: T,
            }),
            (0, a.jsx)(eU, {
              open: k,
              onOpenChange: S,
              job: E,
              language: T,
              onKitGenerated: (e) => {
                (S(!1),
                  C(null),
                  P(!0),
                  J({
                    title:
                      "de" === T
                        ? "Bewerbung erstellt!"
                        : "Application created!",
                    description:
                      "de" === T
                        ? "Dein Bewerbungskit wurde generiert."
                        : "Your application kit has been generated.",
                  }));
              },
            }),
          ],
        });
      }
    },
  },
  (e) => {
    var t = (t) => e((e.s = t));
    (e.O(0, [46593, 36209, 84121, 72076, 77358], () => t(52425)),
      (_N_E = e.O()));
  },
]);
