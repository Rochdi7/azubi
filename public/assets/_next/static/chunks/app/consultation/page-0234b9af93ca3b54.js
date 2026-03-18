(self.webpackChunk_N_E = self.webpackChunk_N_E || []).push([
  [94530],
  {
    1764: (e, t, s) => {
      "use strict";
      s.d(t, { ConsultationHowItWorks: () => h });
      var a = s(70207),
        i = s(87223),
        l = s(45748),
        n = s(54459),
        r = s(87858),
        c = s(75281);
      let o = (e) => [
        {
          badge: "Step 1",
          title: "Enroll & Complete Profile",
          description: "Pay ".concat(
            e,
            " advance and complete your profile in 15 minutes. Education, experience, German level, and job preferences.",
          ),
          badgeColor:
            "bg-[#F4991A]/10 text-[#F4991A] border border-[#F4991A]/20",
        },
        {
          badge: "Step 2",
          title: "We Apply For You",
          description:
            "Our expert team writes native German applications and submits to companies that hire internationals. Track everything in your dashboard.",
          badgeColor:
            "bg-[#344F1F]/10 text-[#344F1F] border border-[#344F1F]/20",
        },
        {
          badge: "Step 3",
          title: "Get Your Offer",
          description:
            "Receive interview calls, get 1-on-1 coaching, accept your offer, pay success fee. We help with visa and relocation.",
          badgeColor: "bg-black text-white",
        },
      ];
      function d() {
        let [e, t] = (0, i.useState)(!1),
          { currency: s } = (0, r.H)(),
          n = s.applyForMe.standard;
        (0, i.useEffect)(() => {
          let e = () => t(window.innerWidth < 1024);
          return (
            e(),
            window.addEventListener("resize", e),
            () => window.removeEventListener("resize", e)
          );
        }, []);
        let o = e ? 220 : 320,
          d = e ? 320 : 440;
        return (0, a.jsx)("div", {
          className: "relative w-full max-w-md mx-auto",
          children: (0, a.jsxs)("div", {
            className: "relative",
            style: { height: "".concat(e ? 380 : 520, "px") },
            children: [
              (0, a.jsx)(l.P.div, {
                className:
                  "absolute top-1/2 left-1/2 bg-white rounded-2xl lg:rounded-3xl border-2 border-gray-200 shadow-lg",
                style: {
                  width: "".concat(o, "px"),
                  height: "".concat(d, "px"),
                  padding: e ? "20px" : "32px",
                },
                initial: { x: "-50%", y: "-50%", rotate: 0 },
                animate: {
                  x: e ? "-58%" : "-65%",
                  y: e ? "-48%" : "-45%",
                  rotate: -6,
                  scale: 0.95,
                },
                transition: { duration: 0.5 },
                children: (0, a.jsx)("div", {
                  className: "flex items-center gap-3 mb-6",
                  children: (0, a.jsx)("div", {
                    className: "w-10 h-10 bg-gray-200 rounded-xl",
                  }),
                }),
              }),
              (0, a.jsxs)(l.P.div, {
                className:
                  "absolute top-1/2 left-1/2 bg-gradient-to-br from-[#F4991A] to-[#E5890F] rounded-2xl lg:rounded-3xl shadow-2xl",
                style: {
                  width: "".concat(o, "px"),
                  height: "".concat(d, "px"),
                  padding: e ? "20px" : "32px",
                },
                initial: { x: "-50%", y: "-50%", rotate: 0 },
                animate: {
                  x: e ? "-44%" : "-38%",
                  y: "-52%",
                  rotate: e ? 3 : 4,
                  scale: 1,
                },
                transition: { duration: 0.5 },
                children: [
                  (0, a.jsxs)("div", {
                    className: "text-center mb-6",
                    children: [
                      (0, a.jsx)("div", {
                        className:
                          "w-16 h-16 bg-white rounded-2xl flex items-center justify-center mx-auto mb-4",
                        children: (0, a.jsxs)("svg", {
                          className: "w-8 h-8 text-[#F4991A]",
                          viewBox: "0 0 24 24",
                          fill: "none",
                          children: [
                            (0, a.jsx)("path", {
                              d: "M16 21V19C16 17.9391 15.5786 16.9217 14.8284 16.1716C14.0783 15.4214 13.0609 15 12 15H5C3.93913 15 2.92172 15.4214 2.17157 16.1716C1.42143 16.9217 1 17.9391 1 19V21",
                              stroke: "currentColor",
                              strokeWidth: "2",
                              strokeLinecap: "round",
                              strokeLinejoin: "round",
                            }),
                            (0, a.jsx)("circle", {
                              cx: "8.5",
                              cy: "7",
                              r: "4",
                              stroke: "currentColor",
                              strokeWidth: "2",
                              strokeLinecap: "round",
                              strokeLinejoin: "round",
                            }),
                            (0, a.jsx)("path", {
                              d: "M20 8V14",
                              stroke: "currentColor",
                              strokeWidth: "2",
                              strokeLinecap: "round",
                              strokeLinejoin: "round",
                            }),
                            (0, a.jsx)("path", {
                              d: "M23 11H17",
                              stroke: "currentColor",
                              strokeWidth: "2",
                              strokeLinecap: "round",
                              strokeLinejoin: "round",
                            }),
                          ],
                        }),
                      }),
                      (0, a.jsx)("h3", {
                        className: "font-bold text-white ".concat(
                          e ? "text-xl" : "text-2xl",
                          " mb-2",
                        ),
                        children: "Apply For Me",
                      }),
                      (0, a.jsxs)("div", {
                        className:
                          "flex items-baseline justify-center gap-2 mb-4",
                        children: [
                          (0, a.jsx)("span", {
                            className: "font-bold text-white ".concat(
                              e ? "text-3xl" : "text-4xl",
                            ),
                            children: ((e) => {
                              let t = (0, c.fA)(e, s);
                              return t >= 1e3
                                ? ""
                                    .concat(s.symbol)
                                    .concat(Math.round(t / 1e3), "K")
                                : "".concat(s.symbol).concat(Math.round(t));
                            })(n.advance),
                          }),
                          (0, a.jsx)("span", {
                            className: "text-white/80 text-sm",
                            children: "to start",
                          }),
                        ],
                      }),
                    ],
                  }),
                  (0, a.jsxs)("div", {
                    className: "space-y-2 mb-6 ".concat(
                      e ? "text-xs" : "text-sm",
                    ),
                    children: [
                      (0, a.jsxs)("div", {
                        className: "flex items-center gap-2",
                        children: [
                          (0, a.jsx)("div", {
                            className:
                              "w-4 h-4 bg-white rounded-full flex items-center justify-center flex-shrink-0",
                            children: (0, a.jsx)("svg", {
                              className: "w-2.5 h-2.5 text-[#F4991A]",
                              viewBox: "0 0 16 16",
                              fill: "none",
                              children: (0, a.jsx)("path", {
                                d: "M3 8L6 11L13 4",
                                stroke: "currentColor",
                                strokeWidth: "2",
                                strokeLinecap: "round",
                                strokeLinejoin: "round",
                              }),
                            }),
                          }),
                          (0, a.jsx)("span", {
                            className: "text-white/90 font-medium",
                            children: "Expert applications",
                          }),
                        ],
                      }),
                      (0, a.jsxs)("div", {
                        className: "flex items-center gap-2",
                        children: [
                          (0, a.jsx)("div", {
                            className:
                              "w-4 h-4 bg-white rounded-full flex items-center justify-center flex-shrink-0",
                            children: (0, a.jsx)("svg", {
                              className: "w-2.5 h-2.5 text-[#F4991A]",
                              viewBox: "0 0 16 16",
                              fill: "none",
                              children: (0, a.jsx)("path", {
                                d: "M3 8L6 11L13 4",
                                stroke: "currentColor",
                                strokeWidth: "2",
                                strokeLinecap: "round",
                                strokeLinejoin: "round",
                              }),
                            }),
                          }),
                          (0, a.jsx)("span", {
                            className: "text-white/90 font-medium",
                            children: "Native German cover letters",
                          }),
                        ],
                      }),
                      (0, a.jsxs)("div", {
                        className: "flex items-center gap-2",
                        children: [
                          (0, a.jsx)("div", {
                            className:
                              "w-4 h-4 bg-white rounded-full flex items-center justify-center flex-shrink-0",
                            children: (0, a.jsx)("svg", {
                              className: "w-2.5 h-2.5 text-[#F4991A]",
                              viewBox: "0 0 16 16",
                              fill: "none",
                              children: (0, a.jsx)("path", {
                                d: "M3 8L6 11L13 4",
                                stroke: "currentColor",
                                strokeWidth: "2",
                                strokeLinecap: "round",
                                strokeLinejoin: "round",
                              }),
                            }),
                          }),
                          (0, a.jsx)("span", {
                            className: "text-white/90 font-medium",
                            children: "Interview preparation",
                          }),
                        ],
                      }),
                      (0, a.jsxs)("div", {
                        className: "flex items-center gap-2",
                        children: [
                          (0, a.jsx)("div", {
                            className:
                              "w-4 h-4 bg-white rounded-full flex items-center justify-center flex-shrink-0",
                            children: (0, a.jsx)("svg", {
                              className: "w-2.5 h-2.5 text-[#F4991A]",
                              viewBox: "0 0 16 16",
                              fill: "none",
                              children: (0, a.jsx)("path", {
                                d: "M3 8L6 11L13 4",
                                stroke: "currentColor",
                                strokeWidth: "2",
                                strokeLinecap: "round",
                                strokeLinejoin: "round",
                              }),
                            }),
                          }),
                          (0, a.jsx)("span", {
                            className: "text-white/90 font-medium",
                            children: "Visa & relocation support",
                          }),
                        ],
                      }),
                    ],
                  }),
                  (0, a.jsx)("button", {
                    className:
                      "w-full bg-white text-[#F4991A] rounded-full py-3 font-bold hover:bg-gray-50 transition-all",
                    children: "Get Started",
                  }),
                ],
              }),
            ],
          }),
        });
      }
      function x() {
        let [e, t] = (0, i.useState)(!1);
        (0, i.useEffect)(() => {
          let e = () => t(window.innerWidth < 1024);
          return (
            e(),
            window.addEventListener("resize", e),
            () => window.removeEventListener("resize", e)
          );
        }, []);
        let s = e ? 220 : 320,
          n = e ? 320 : 440;
        return (0, a.jsx)("div", {
          className: "relative w-full max-w-md mx-auto",
          children: (0, a.jsxs)("div", {
            className: "relative",
            style: { height: "".concat(e ? 380 : 520, "px") },
            children: [
              (0, a.jsx)(l.P.div, {
                className:
                  "absolute top-1/2 left-1/2 bg-white rounded-2xl lg:rounded-3xl border-2 border-gray-200 shadow-lg",
                style: {
                  width: "".concat(s, "px"),
                  height: "".concat(n, "px"),
                  padding: e ? "20px" : "32px",
                },
                initial: { x: "-50%", y: "-50%", rotate: 0 },
                animate: {
                  x: e ? "-58%" : "-65%",
                  y: e ? "-48%" : "-45%",
                  rotate: -6,
                  scale: 0.95,
                },
                transition: { duration: 0.5 },
                children: (0, a.jsx)("div", {
                  className: "flex items-center gap-3 mb-6",
                  children: (0, a.jsx)("div", {
                    className: "w-10 h-10 bg-gray-200 rounded-xl",
                  }),
                }),
              }),
              (0, a.jsxs)(l.P.div, {
                className:
                  "absolute top-1/2 left-1/2 bg-white rounded-2xl lg:rounded-3xl border-2 border-[#344F1F]/20 shadow-2xl",
                style: {
                  width: "".concat(s, "px"),
                  height: "".concat(n, "px"),
                  padding: e ? "20px" : "32px",
                },
                initial: { x: "-50%", y: "-50%", rotate: 0 },
                animate: {
                  x: e ? "-44%" : "-38%",
                  y: "-52%",
                  rotate: e ? 3 : 4,
                  scale: 1,
                },
                transition: { duration: 0.5 },
                children: [
                  (0, a.jsxs)("div", {
                    className: "flex items-center gap-3 mb-6",
                    children: [
                      (0, a.jsx)("div", {
                        className:
                          "w-10 h-10 bg-[#344F1F] rounded-xl flex items-center justify-center",
                        children: (0, a.jsxs)("svg", {
                          className: "w-5 h-5 text-white",
                          viewBox: "0 0 24 24",
                          fill: "none",
                          children: [
                            (0, a.jsx)("path", {
                              d: "M22 2L11 13",
                              stroke: "currentColor",
                              strokeWidth: "2",
                              strokeLinecap: "round",
                              strokeLinejoin: "round",
                            }),
                            (0, a.jsx)("path", {
                              d: "M22 2L15 22L11 13L2 9L22 2Z",
                              stroke: "currentColor",
                              strokeWidth: "2",
                              strokeLinecap: "round",
                              strokeLinejoin: "round",
                            }),
                          ],
                        }),
                      }),
                      (0, a.jsxs)("div", {
                        children: [
                          (0, a.jsx)("h3", {
                            className: "font-bold text-[#344F1F] ".concat(
                              e ? "text-base" : "text-lg",
                            ),
                            children: "Applications Sent",
                          }),
                          (0, a.jsx)("p", {
                            className: "text-xs text-[#344F1F]/60",
                            children: "12 of 30 complete",
                          }),
                        ],
                      }),
                    ],
                  }),
                  (0, a.jsxs)("div", {
                    className: "space-y-3 mb-6 ".concat(
                      e ? "text-xs" : "text-sm",
                    ),
                    children: [
                      (0, a.jsxs)("div", {
                        className:
                          "flex items-center justify-between p-3 bg-[#F9F5F0] rounded-lg",
                        children: [
                          (0, a.jsx)("span", {
                            className: "font-medium text-[#344F1F]",
                            children: "Siemens AG",
                          }),
                          (0, a.jsx)("span", {
                            className:
                              "text-xs bg-emerald-100 text-emerald-700 px-2 py-0.5 rounded-full",
                            children: "Sent",
                          }),
                        ],
                      }),
                      (0, a.jsxs)("div", {
                        className:
                          "flex items-center justify-between p-3 bg-[#F9F5F0] rounded-lg",
                        children: [
                          (0, a.jsx)("span", {
                            className: "font-medium text-[#344F1F]",
                            children: "BMW Group",
                          }),
                          (0, a.jsx)("span", {
                            className:
                              "text-xs bg-emerald-100 text-emerald-700 px-2 py-0.5 rounded-full",
                            children: "Sent",
                          }),
                        ],
                      }),
                      (0, a.jsxs)("div", {
                        className:
                          "flex items-center justify-between p-3 bg-[#F9F5F0] rounded-lg",
                        children: [
                          (0, a.jsx)("span", {
                            className: "font-medium text-[#344F1F]",
                            children: "Bosch",
                          }),
                          (0, a.jsx)("span", {
                            className:
                              "text-xs bg-emerald-100 text-emerald-700 px-2 py-0.5 rounded-full",
                            children: "Sent",
                          }),
                        ],
                      }),
                      (0, a.jsxs)("div", {
                        className:
                          "flex items-center justify-between p-3 bg-[#F9F5F0] rounded-lg",
                        children: [
                          (0, a.jsx)("span", {
                            className: "font-medium text-[#344F1F]",
                            children: "Deutsche Bahn",
                          }),
                          (0, a.jsx)("span", {
                            className:
                              "text-xs bg-amber-100 text-amber-700 px-2 py-0.5 rounded-full",
                            children: "Pending",
                          }),
                        ],
                      }),
                    ],
                  }),
                  (0, a.jsxs)("div", {
                    children: [
                      (0, a.jsxs)("div", {
                        className: "flex items-center justify-between mb-2",
                        children: [
                          (0, a.jsx)("span", {
                            className: "text-xs text-[#344F1F]/60",
                            children: "Progress",
                          }),
                          (0, a.jsx)("span", {
                            className: "text-xs font-semibold text-[#344F1F]",
                            children: "12/30 apps",
                          }),
                        ],
                      }),
                      (0, a.jsx)("div", {
                        className:
                          "h-2 bg-gray-200 rounded-full overflow-hidden",
                        children: (0, a.jsx)(l.P.div, {
                          initial: { width: "0%" },
                          animate: { width: "40%" },
                          transition: { duration: 1, ease: "easeOut" },
                          className: "h-full bg-[#344F1F] rounded-full",
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
      function m() {
        let [e, t] = (0, i.useState)(!1);
        (0, i.useEffect)(() => {
          let e = () => t(window.innerWidth < 1024);
          return (
            e(),
            window.addEventListener("resize", e),
            () => window.removeEventListener("resize", e)
          );
        }, []);
        let s = e ? 220 : 320,
          n = e ? 320 : 440;
        return (0, a.jsx)("div", {
          className: "relative w-full max-w-md mx-auto",
          children: (0, a.jsxs)("div", {
            className: "relative",
            style: { height: "".concat(e ? 380 : 520, "px") },
            children: [
              (0, a.jsx)(l.P.div, {
                className:
                  "absolute top-1/2 left-1/2 bg-gray-900 rounded-2xl lg:rounded-3xl border-2 border-gray-700 shadow-lg",
                style: {
                  width: "".concat(s, "px"),
                  height: "".concat(n, "px"),
                  padding: e ? "20px" : "32px",
                },
                initial: { x: "-50%", y: "-50%", rotate: 0 },
                animate: {
                  x: e ? "-58%" : "-65%",
                  y: e ? "-48%" : "-45%",
                  rotate: -6,
                  scale: 0.95,
                },
                transition: { duration: 0.5 },
                children: (0, a.jsx)("div", {
                  className: "flex items-center gap-3 mb-6",
                  children: (0, a.jsx)("div", {
                    className: "w-10 h-10 bg-gray-700 rounded-xl",
                  }),
                }),
              }),
              (0, a.jsxs)(l.P.div, {
                className:
                  "absolute top-1/2 left-1/2 bg-gradient-to-br from-black to-[#1A1A1A] rounded-2xl lg:rounded-3xl shadow-2xl overflow-hidden",
                style: {
                  width: "".concat(s, "px"),
                  height: "".concat(n, "px"),
                  padding: e ? "20px" : "32px",
                },
                initial: { x: "-50%", y: "-50%", rotate: 0 },
                animate: {
                  x: e ? "-44%" : "-38%",
                  y: "-52%",
                  rotate: e ? 3 : 4,
                  scale: 1,
                },
                transition: { duration: 0.5 },
                children: [
                  (0, a.jsxs)("div", {
                    className:
                      "bg-gradient-to-r from-emerald-500 to-emerald-600 rounded-xl p-4 mb-6 text-center",
                    children: [
                      (0, a.jsx)("div", {
                        className:
                          "flex items-center justify-center gap-2 mb-2",
                        children: (0, a.jsxs)("svg", {
                          className: "w-6 h-6 text-white",
                          viewBox: "0 0 24 24",
                          fill: "none",
                          children: [
                            (0, a.jsx)("path", {
                              d: "M22 11.08V12C21.9988 14.1564 21.3005 16.2547 20.0093 17.9818C18.7182 19.709 16.9033 20.9725 14.8354 21.5839C12.7674 22.1953 10.5573 22.1219 8.53447 21.3746C6.51168 20.6273 4.78465 19.2461 3.61096 17.4371C2.43727 15.628 1.87979 13.4881 2.02168 11.3363C2.16356 9.18455 2.99721 7.13631 4.39828 5.49706C5.79935 3.85781 7.69279 2.71537 9.79619 2.24013C11.8996 1.7649 14.1003 1.98232 16.07 2.85999",
                              stroke: "currentColor",
                              strokeWidth: "2",
                              strokeLinecap: "round",
                              strokeLinejoin: "round",
                            }),
                            (0, a.jsx)("path", {
                              d: "M22 4L12 14.01L9 11.01",
                              stroke: "currentColor",
                              strokeWidth: "2",
                              strokeLinecap: "round",
                              strokeLinejoin: "round",
                            }),
                          ],
                        }),
                      }),
                      (0, a.jsx)("h3", {
                        className: "font-bold text-white ".concat(
                          e ? "text-lg" : "text-xl",
                        ),
                        children: "Offer Received!",
                      }),
                      (0, a.jsx)("p", {
                        className: "text-xs text-white/80",
                        children: "Time to prepare for Germany",
                      }),
                    ],
                  }),
                  (0, a.jsxs)("div", {
                    className: "space-y-3 ".concat(e ? "text-xs" : "text-sm"),
                    children: [
                      (0, a.jsxs)("div", {
                        className:
                          "bg-white/5 border border-white/10 rounded-lg p-3",
                        children: [
                          (0, a.jsxs)("div", {
                            className: "flex items-center justify-between mb-1",
                            children: [
                              (0, a.jsx)("span", {
                                className: "text-white font-semibold",
                                children: "Siemens AG",
                              }),
                              (0, a.jsx)("span", {
                                className:
                                  "text-xs bg-emerald-500 text-white px-2 py-0.5 rounded-full",
                                children: "Offer",
                              }),
                            ],
                          }),
                          (0, a.jsx)("p", {
                            className: "text-white/60 text-xs",
                            children: "IT Specialist - Munich",
                          }),
                          (0, a.jsx)("p", {
                            className: "text-white/40 text-xs mt-1",
                            children: "Start: August 2026",
                          }),
                        ],
                      }),
                      (0, a.jsxs)("div", {
                        className:
                          "bg-white/5 border border-white/10 rounded-lg p-3",
                        children: [
                          (0, a.jsxs)("div", {
                            className: "flex items-center justify-between mb-1",
                            children: [
                              (0, a.jsx)("span", {
                                className: "text-white font-semibold",
                                children: "BMW Group",
                              }),
                              (0, a.jsx)("span", {
                                className:
                                  "text-xs bg-yellow-500 text-white px-2 py-0.5 rounded-full",
                                children: "Interview",
                              }),
                            ],
                          }),
                          (0, a.jsx)("p", {
                            className: "text-white/60 text-xs",
                            children: "Mechatronics - Berlin",
                          }),
                          (0, a.jsx)("p", {
                            className: "text-white/40 text-xs mt-1",
                            children: "Dec 20, 2026 • 10:00 AM",
                          }),
                        ],
                      }),
                    ],
                  }),
                  (0, a.jsxs)("div", {
                    className:
                      "mt-4 p-3 bg-white/5 border border-white/10 rounded-lg",
                    children: [
                      (0, a.jsx)("p", {
                        className: "text-white/60 text-xs mb-1",
                        children: "Next Steps",
                      }),
                      (0, a.jsx)("p", {
                        className: "text-white text-xs font-medium",
                        children:
                          "Accept offer → Pay success fee → Visa support",
                      }),
                    ],
                  }),
                ],
              }),
            ],
          }),
        });
      }
      function h() {
        let [e, t] = (0, i.useState)(0),
          [s, h] = (0, i.useState)(!1),
          { currency: p } = (0, r.H)(),
          u = (0, i.useMemo)(() => {
            let e = (0, c.fA)(p.applyForMe.standard.advance, p);
            return o(
              ""
                .concat(p.symbol)
                .concat(
                  new Intl.NumberFormat(p.locale, {
                    maximumFractionDigits: 0,
                  }).format(e),
                ),
            );
          }, [p]);
        return (0, a.jsx)("section", {
          id: "how-it-works",
          className: "py-12 sm:py-16 md:py-24 bg-[#F9F5F0]",
          children: (0, a.jsxs)("div", {
            className: "container mx-auto px-4",
            children: [
              (0, a.jsxs)(l.P.div, {
                initial: { opacity: 0, y: 20 },
                whileInView: { opacity: 1, y: 0 },
                viewport: { once: !0 },
                transition: { duration: 0.5 },
                className: "text-center mb-8 sm:mb-12 lg:mb-16",
                children: [
                  (0, a.jsx)("h2", {
                    className:
                      "text-2xl sm:text-3xl md:text-4xl lg:text-5xl font-bold mb-3 sm:mb-4 text-[#344F1F]",
                    children: "How It Works",
                  }),
                  (0, a.jsx)("p", {
                    className:
                      "text-base sm:text-lg text-[#344F1F]/70 max-w-2xl mx-auto px-4",
                    children: "From enrollment to job offer in 3 simple steps",
                  }),
                ],
              }),
              (0, a.jsxs)("div", {
                className:
                  "max-w-6xl mx-auto grid lg:grid-cols-2 gap-8 lg:gap-12 items-start",
                children: [
                  (0, a.jsx)("div", {
                    className:
                      "relative h-[500px] sm:h-[550px] lg:h-[600px] flex items-center justify-center lg:justify-start",
                    children: (0, a.jsxs)(n.N, {
                      mode: "wait",
                      children: [
                        0 === e &&
                          (0, a.jsx)(
                            l.P.div,
                            {
                              initial: { opacity: 0, scale: 0.9 },
                              animate: { opacity: 1, scale: 1 },
                              exit: { opacity: 0, scale: 0.9 },
                              transition: { duration: 0.4 },
                              className: "w-full",
                              children: (0, a.jsx)(d, {}),
                            },
                            "enroll",
                          ),
                        1 === e &&
                          (0, a.jsx)(
                            l.P.div,
                            {
                              initial: { opacity: 0, scale: 0.9 },
                              animate: { opacity: 1, scale: 1 },
                              exit: { opacity: 0, scale: 0.9 },
                              transition: { duration: 0.4 },
                              className: "w-full",
                              children: (0, a.jsx)(x, {}),
                            },
                            "applications",
                          ),
                        2 === e &&
                          (0, a.jsx)(
                            l.P.div,
                            {
                              initial: { opacity: 0, scale: 0.9 },
                              animate: { opacity: 1, scale: 1 },
                              exit: { opacity: 0, scale: 0.9 },
                              transition: { duration: 0.4 },
                              className: "w-full",
                              children: (0, a.jsx)(m, {}),
                            },
                            "offer",
                          ),
                      ],
                    }),
                  }),
                  (0, a.jsx)("div", {
                    className: "space-y-3 sm:space-y-4",
                    children: u.map((s, i) =>
                      (0, a.jsxs)(
                        l.P.div,
                        {
                          className:
                            "\n                  relative p-4 sm:p-5 lg:p-6 rounded-xl cursor-pointer transition-all duration-300\n                  ".concat(
                              e === i
                                ? "bg-white shadow-lg scale-[1.02]"
                                : "bg-white/60 hover:bg-white hover:shadow-md",
                              "\n                ",
                            ),
                          initial: { opacity: 0, y: 20 },
                          whileInView: { opacity: 1, y: 0 },
                          viewport: { once: !0 },
                          transition: { duration: 0.5, delay: 0.2 + 0.15 * i },
                          onMouseEnter: () => {
                            (t(i), h(!0));
                          },
                          onMouseLeave: () => h(!1),
                          children: [
                            (0, a.jsxs)("div", {
                              className: "space-y-2 sm:space-y-2.5",
                              children: [
                                (0, a.jsx)("div", {
                                  className:
                                    "inline-block px-3 sm:px-4 py-1 sm:py-1.5 rounded-full text-xs sm:text-sm font-semibold transition-colors duration-300 ".concat(
                                      e === i
                                        ? s.badgeColor
                                        : "bg-gray-200 text-gray-600",
                                    ),
                                  children: s.badge,
                                }),
                                (0, a.jsx)("h3", {
                                  className:
                                    "text-lg sm:text-xl font-semibold transition-colors duration-300 ".concat(
                                      e === i
                                        ? "text-[#344F1F]"
                                        : "text-gray-700",
                                    ),
                                  children: s.title,
                                }),
                                (0, a.jsx)("p", {
                                  className:
                                    "text-sm sm:text-base leading-relaxed transition-colors duration-300 ".concat(
                                      e === i
                                        ? "text-[#344F1F]/70"
                                        : "text-gray-500",
                                    ),
                                  children: s.description,
                                }),
                              ],
                            }),
                            e === i &&
                              (0, a.jsx)(l.P.div, {
                                className:
                                  "absolute left-0 top-1/2 -translate-y-1/2 w-1 h-12 bg-[#F4991A] rounded-r-full",
                                layoutId: "activeIndicator",
                                initial: { opacity: 0 },
                                animate: { opacity: 1 },
                                exit: { opacity: 0 },
                              }),
                          ],
                        },
                        i,
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
    1971: (e, t, s) => {
      "use strict";
      s.d(t, { ConsultationBentoGrid: () => j });
      var a = s(70207),
        i = s(45748),
        l = s(74577),
        n = s(75980),
        r = s(27239),
        c = s(31670),
        o = s(275),
        d = s(84308),
        x = s(46031),
        m = s(17802),
        h = s(10542),
        p = s.n(h),
        u = s(50018),
        f = s(81555);
      let w = [
        {
          icon: l.A,
          title: "Expert Applications",
          description:
            "Our team submits personalized applications to companies that actually hire internationals. Not random spam - strategic, targeted applications based on your profile.",
          gradient: "bg-gradient-to-br from-orange-50 to-amber-50",
          border: "border-orange-300",
          iconBg: "bg-[#F4991A]",
          iconColor: "text-white",
          mascot: "/mascot/mascot_documents_male.webp",
          rowSpan: "md:row-span-2",
        },
        {
          icon: n.A,
          title: "Real-Time Dashboard",
          description:
            "Watch your applications in real-time. See who we applied to, track responses, get notified instantly when companies respond.",
          gradient: "bg-gradient-to-br from-green-50 to-emerald-50",
          border: "border-green-200",
          iconBg: "bg-green-100",
          iconColor: "text-[#344F1F]",
          mascot: "/mascot/mascot_thinking_female.webp",
          rowSpan: "md:row-span-1",
          colSpan: "md:col-span-2",
        },
        {
          icon: r.A,
          title: "Native German Cover Letters",
          description:
            "Native-level German Anschreiben written by experts. DIN 5008 format. Personalized for each company and position - the kind that get responses.",
          gradient: "bg-gradient-to-br from-blue-50 to-sky-50",
          border: "border-blue-200",
          iconBg: "bg-blue-100",
          iconColor: "text-blue-600",
          mascot: "/mascot/mascot_studying_male.webp",
          rowSpan: "md:row-span-2",
        },
        {
          icon: c.A,
          title: "Interview Preparation",
          description:
            "When you get interview calls, we prep you. Mock interviews, company research, question practice, and feedback until you're interview-ready.",
          gradient: "bg-gradient-to-br from-purple-50 to-violet-50",
          border: "border-purple-200",
          iconBg: "bg-purple-100",
          iconColor: "text-purple-600",
          mascot: "/mascot/mascot_graduate_female.webp",
          rowSpan: "md:row-span-2",
        },
        {
          icon: o.A,
          title: "Visa & Relocation Support",
          description:
            "After your offer, we help with blocked account setup, visa application, health insurance, and pre-departure checklist. End-to-end support.",
          gradient: "bg-gradient-to-br from-amber-50 to-yellow-50",
          border: "border-amber-200",
          iconBg: "bg-amber-100",
          iconColor: "text-[#F4991A]",
          mascot: "/mascot/mascot_excited_female.webp",
          rowSpan: "md:row-span-1",
        },
        {
          icon: d.A,
          title: "Dedicated Counselor",
          description:
            "Your personal point of contact throughout the journey. WhatsApp support, email, and video calls whenever you need guidance.",
          gradient: "bg-gradient-to-br from-indigo-50 to-blue-50",
          border: "border-indigo-200",
          iconBg: "bg-indigo-100",
          iconColor: "text-indigo-600",
          mascot: "/images/benefits/support-mascot.webp",
          rowSpan: "md:row-span-1",
          colSpan: "md:col-span-2",
        },
      ];
      function j() {
        return (0, a.jsx)("section", {
          className: "py-16 md:py-24 bg-white",
          children: (0, a.jsxs)("div", {
            className: "container mx-auto px-4",
            children: [
              (0, a.jsxs)(i.P.div, {
                initial: { opacity: 0, y: 20 },
                whileInView: { opacity: 1, y: 0 },
                viewport: { once: !0 },
                transition: { duration: 0.5 },
                className: "text-center mb-12",
                children: [
                  (0, a.jsx)(m.E, {
                    className:
                      "mb-4 bg-[#F4991A]/10 text-[#F4991A] border-[#F4991A]/20",
                    children: "What You Get",
                  }),
                  (0, a.jsx)("h2", {
                    className:
                      "text-3xl md:text-4xl lg:text-5xl font-bold mb-4 text-[#344F1F]",
                    children: "Everything Included in Apply For Me",
                  }),
                  (0, a.jsx)("p", {
                    className: "text-lg text-[#344F1F]/70 max-w-2xl mx-auto",
                    children:
                      "A complete done-for-you service from application to offer. Focus on learning German while we handle everything else.",
                  }),
                ],
              }),
              (0, a.jsxs)("div", {
                className: "max-w-7xl mx-auto",
                children: [
                  (0, a.jsxs)("div", {
                    className: "hidden lg:grid lg:grid-cols-3 gap-6",
                    children: [
                      (0, a.jsxs)(i.P.div, {
                        initial: { opacity: 0, y: 20 },
                        whileInView: { opacity: 1, y: 0 },
                        viewport: { once: !0 },
                        transition: { duration: 0.5, delay: 0.1 },
                        className: "lg:row-span-2 rounded-2xl border-2 "
                          .concat(w[0].border, " ")
                          .concat(
                            w[0].gradient,
                            " hover:shadow-xl transition-all duration-500 min-h-[400px] p-8 flex flex-col",
                          ),
                        children: [
                          (0, a.jsxs)("div", {
                            className: "flex-1 space-y-4",
                            children: [
                              (0, a.jsx)("div", {
                                className: "w-12 h-12 ".concat(
                                  w[0].iconBg,
                                  " rounded-full flex items-center justify-center",
                                ),
                                children: (() => {
                                  let e = w[0].icon;
                                  return (0, a.jsx)(e, {
                                    className: "w-6 h-6 ".concat(
                                      w[0].iconColor,
                                    ),
                                  });
                                })(),
                              }),
                              (0, a.jsx)("h3", {
                                className:
                                  "text-2xl md:text-3xl font-bold text-[#344F1F]",
                                children: w[0].title,
                              }),
                              (0, a.jsx)("p", {
                                className:
                                  "text-base text-[#344F1F]/70 leading-relaxed",
                                children: w[0].description,
                              }),
                            ],
                          }),
                          (0, a.jsx)("div", {
                            className: "flex justify-center pt-4",
                            children: (0, a.jsx)("div", {
                              className: "relative w-48 h-48 md:w-64 md:h-64",
                              children: (0, a.jsx)(u.default, {
                                src: w[0].mascot,
                                alt: w[0].title,
                                width: 256,
                                height: 256,
                                className:
                                  "object-contain w-full h-full transition-transform duration-500 hover:scale-110",
                              }),
                            }),
                          }),
                        ],
                      }),
                      (0, a.jsx)(i.P.div, {
                        initial: { opacity: 0, y: 20 },
                        whileInView: { opacity: 1, y: 0 },
                        viewport: { once: !0 },
                        transition: { duration: 0.5, delay: 0.2 },
                        className: "lg:col-span-2 rounded-2xl border-2 "
                          .concat(w[1].border, " ")
                          .concat(
                            w[1].gradient,
                            " hover:shadow-xl transition-all duration-500 p-6",
                          ),
                        children: (0, a.jsxs)("div", {
                          className:
                            "flex items-center justify-between gap-6 md:gap-8",
                          children: [
                            (0, a.jsxs)("div", {
                              className: "flex-1 space-y-3",
                              children: [
                                (0, a.jsx)("div", {
                                  className: "w-12 h-12 ".concat(
                                    w[1].iconBg,
                                    " rounded-full flex items-center justify-center",
                                  ),
                                  children: (() => {
                                    let e = w[1].icon;
                                    return (0, a.jsx)(e, {
                                      className: "w-6 h-6 ".concat(
                                        w[1].iconColor,
                                      ),
                                    });
                                  })(),
                                }),
                                (0, a.jsx)("h3", {
                                  className:
                                    "text-xl md:text-2xl font-bold text-[#344F1F]",
                                  children: w[1].title,
                                }),
                                (0, a.jsx)("p", {
                                  className:
                                    "text-sm md:text-base text-[#344F1F]/70 leading-relaxed",
                                  children: w[1].description,
                                }),
                              ],
                            }),
                            (0, a.jsx)("div", {
                              className: "flex-shrink-0",
                              children: (0, a.jsx)("div", {
                                className: "relative w-40 h-40 md:w-56 md:h-56",
                                children: (0, a.jsx)(u.default, {
                                  src: w[1].mascot,
                                  alt: w[1].title,
                                  width: 224,
                                  height: 224,
                                  className:
                                    "object-contain w-full h-full transition-transform duration-500 hover:scale-110",
                                }),
                              }),
                            }),
                          ],
                        }),
                      }),
                      (0, a.jsxs)(i.P.div, {
                        initial: { opacity: 0, y: 20 },
                        whileInView: { opacity: 1, y: 0 },
                        viewport: { once: !0 },
                        transition: { duration: 0.5, delay: 0.3 },
                        className: "lg:row-span-2 rounded-2xl border-2 "
                          .concat(w[2].border, " ")
                          .concat(
                            w[2].gradient,
                            " hover:shadow-xl transition-all duration-500 min-h-[400px] p-8 flex flex-col",
                          ),
                        children: [
                          (0, a.jsxs)("div", {
                            className: "flex-1 space-y-4",
                            children: [
                              (0, a.jsx)("div", {
                                className: "w-12 h-12 ".concat(
                                  w[2].iconBg,
                                  " rounded-full flex items-center justify-center",
                                ),
                                children: (() => {
                                  let e = w[2].icon;
                                  return (0, a.jsx)(e, {
                                    className: "w-6 h-6 ".concat(
                                      w[2].iconColor,
                                    ),
                                  });
                                })(),
                              }),
                              (0, a.jsx)("h3", {
                                className:
                                  "text-2xl md:text-3xl font-bold text-[#344F1F]",
                                children: w[2].title,
                              }),
                              (0, a.jsx)("p", {
                                className:
                                  "text-base text-[#344F1F]/70 leading-relaxed",
                                children: w[2].description,
                              }),
                            ],
                          }),
                          (0, a.jsx)("div", {
                            className: "flex justify-center pt-4",
                            children: (0, a.jsx)("div", {
                              className: "relative w-48 h-48 md:w-64 md:h-64",
                              children: (0, a.jsx)(u.default, {
                                src: w[2].mascot,
                                alt: w[2].title,
                                width: 256,
                                height: 256,
                                className:
                                  "object-contain w-full h-full transition-transform duration-500 hover:scale-110",
                              }),
                            }),
                          }),
                        ],
                      }),
                      (0, a.jsxs)(i.P.div, {
                        initial: { opacity: 0, y: 20 },
                        whileInView: { opacity: 1, y: 0 },
                        viewport: { once: !0 },
                        transition: { duration: 0.5, delay: 0.4 },
                        className: "lg:row-span-2 rounded-2xl border-2 "
                          .concat(w[3].border, " ")
                          .concat(
                            w[3].gradient,
                            " hover:shadow-xl transition-all duration-500 min-h-[400px] p-8 flex flex-col",
                          ),
                        children: [
                          (0, a.jsxs)("div", {
                            className: "flex-1 space-y-4",
                            children: [
                              (0, a.jsx)("div", {
                                className: "w-12 h-12 ".concat(
                                  w[3].iconBg,
                                  " rounded-full flex items-center justify-center",
                                ),
                                children: (() => {
                                  let e = w[3].icon;
                                  return (0, a.jsx)(e, {
                                    className: "w-6 h-6 ".concat(
                                      w[3].iconColor,
                                    ),
                                  });
                                })(),
                              }),
                              (0, a.jsx)("h3", {
                                className:
                                  "text-2xl md:text-3xl font-bold text-[#344F1F]",
                                children: w[3].title,
                              }),
                              (0, a.jsx)("p", {
                                className:
                                  "text-base text-[#344F1F]/70 leading-relaxed",
                                children: w[3].description,
                              }),
                            ],
                          }),
                          (0, a.jsx)("div", {
                            className: "flex justify-center pt-4",
                            children: (0, a.jsx)("div", {
                              className: "relative w-48 h-48 md:w-64 md:h-64",
                              children: (0, a.jsx)(u.default, {
                                src: w[3].mascot,
                                alt: w[3].title,
                                width: 256,
                                height: 256,
                                className:
                                  "object-contain w-full h-full transition-transform duration-500 hover:scale-110",
                              }),
                            }),
                          }),
                        ],
                      }),
                      (0, a.jsx)(p(), {
                        href: "#pricing",
                        children: (0, a.jsxs)(i.P.div, {
                          initial: { opacity: 0, y: 20 },
                          whileInView: { opacity: 1, y: 0 },
                          viewport: { once: !0 },
                          transition: { duration: 0.5, delay: 0.5 },
                          className:
                            "group bg-[#1a1a1a] text-white rounded-2xl p-6 flex items-center justify-between hover:bg-[#262626] transition-all duration-300 hover:shadow-xl border-2 border-[#262626] h-[150px]",
                          children: [
                            (0, a.jsxs)("div", {
                              className: "flex items-center gap-3",
                              children: [
                                (0, a.jsx)("div", {
                                  className: "flex -space-x-3",
                                  children: f.T.slice(0, 3).map((e, t) =>
                                    (0, a.jsx)(
                                      "div",
                                      {
                                        className:
                                          "w-12 h-12 rounded-full border-[3px] border-white overflow-hidden",
                                        children: (0, a.jsx)(u.default, {
                                          src: e,
                                          alt: "Student ".concat(t + 1),
                                          width: 48,
                                          height: 48,
                                          className:
                                            "w-full h-full object-cover",
                                        }),
                                      },
                                      t,
                                    ),
                                  ),
                                }),
                                (0, a.jsx)("span", {
                                  className: "text-lg font-semibold",
                                  children: "Get Started Now",
                                }),
                              ],
                            }),
                            (0, a.jsx)("div", {
                              className:
                                "flex items-center justify-center w-10 h-10 rounded-full bg-white/10 group-hover:bg-white/20 transition-colors flex-shrink-0",
                              children: (0, a.jsx)(x.A, {
                                className:
                                  "w-5 h-5 group-hover:translate-x-1 transition-transform",
                              }),
                            }),
                          ],
                        }),
                      }),
                      (0, a.jsxs)(i.P.div, {
                        initial: { opacity: 0, y: 20 },
                        whileInView: { opacity: 1, y: 0 },
                        viewport: { once: !0 },
                        transition: { duration: 0.5, delay: 0.6 },
                        className: "rounded-2xl border-2 "
                          .concat(w[4].border, " ")
                          .concat(
                            w[4].gradient,
                            " hover:shadow-xl transition-all duration-500 p-6 flex flex-col",
                          ),
                        children: [
                          (0, a.jsxs)("div", {
                            className: "space-y-3",
                            children: [
                              (0, a.jsx)("div", {
                                className: "w-12 h-12 ".concat(
                                  w[4].iconBg,
                                  " rounded-full flex items-center justify-center",
                                ),
                                children: (() => {
                                  let e = w[4].icon;
                                  return (0, a.jsx)(e, {
                                    className: "w-6 h-6 ".concat(
                                      w[4].iconColor,
                                    ),
                                  });
                                })(),
                              }),
                              (0, a.jsx)("h3", {
                                className: "text-xl font-bold text-[#344F1F]",
                                children: w[4].title,
                              }),
                              (0, a.jsx)("p", {
                                className:
                                  "text-sm text-[#344F1F]/70 leading-relaxed",
                                children: w[4].description,
                              }),
                            ],
                          }),
                          (0, a.jsx)("div", {
                            className: "flex justify-center pt-2",
                            children: (0, a.jsx)("div", {
                              className: "relative w-32 h-32 md:w-40 md:h-40",
                              children: (0, a.jsx)(u.default, {
                                src: w[4].mascot,
                                alt: w[4].title,
                                width: 160,
                                height: 160,
                                className:
                                  "object-contain w-full h-full transition-transform duration-500 hover:scale-110",
                              }),
                            }),
                          }),
                        ],
                      }),
                      (0, a.jsx)(i.P.div, {
                        initial: { opacity: 0, y: 20 },
                        whileInView: { opacity: 1, y: 0 },
                        viewport: { once: !0 },
                        transition: { duration: 0.5, delay: 0.7 },
                        className: "lg:col-span-2 rounded-2xl border-2 "
                          .concat(w[5].border, " ")
                          .concat(
                            w[5].gradient,
                            " hover:shadow-xl transition-all duration-500 p-6",
                          ),
                        children: (0, a.jsxs)("div", {
                          className:
                            "flex items-center justify-between gap-6 md:gap-8",
                          children: [
                            (0, a.jsxs)("div", {
                              className: "flex-1 space-y-3",
                              children: [
                                (0, a.jsx)("div", {
                                  className: "w-12 h-12 ".concat(
                                    w[5].iconBg,
                                    " rounded-full flex items-center justify-center",
                                  ),
                                  children: (() => {
                                    let e = w[5].icon;
                                    return (0, a.jsx)(e, {
                                      className: "w-6 h-6 ".concat(
                                        w[5].iconColor,
                                      ),
                                    });
                                  })(),
                                }),
                                (0, a.jsx)("h3", {
                                  className:
                                    "text-xl md:text-2xl font-bold text-[#344F1F]",
                                  children: w[5].title,
                                }),
                                (0, a.jsx)("p", {
                                  className:
                                    "text-sm md:text-base text-[#344F1F]/70 leading-relaxed",
                                  children: w[5].description,
                                }),
                              ],
                            }),
                            (0, a.jsx)("div", {
                              className: "flex-shrink-0",
                              children: (0, a.jsx)("div", {
                                className: "relative w-40 h-40 md:w-56 md:h-56",
                                children: (0, a.jsx)(u.default, {
                                  src: w[5].mascot,
                                  alt: w[5].title,
                                  width: 224,
                                  height: 224,
                                  className:
                                    "object-contain w-full h-full transition-transform duration-500 hover:scale-110",
                                }),
                              }),
                            }),
                          ],
                        }),
                      }),
                    ],
                  }),
                  (0, a.jsxs)("div", {
                    className: "hidden md:grid lg:hidden md:grid-cols-2 gap-6",
                    children: [
                      w.map((e) =>
                        (0, a.jsxs)(
                          i.P.div,
                          {
                            initial: { opacity: 0, y: 20 },
                            whileInView: { opacity: 1, y: 0 },
                            viewport: { once: !0 },
                            transition: { duration: 0.5 },
                            className: "rounded-2xl border-2 "
                              .concat(e.border, " ")
                              .concat(
                                e.gradient,
                                " hover:shadow-xl transition-all duration-500 p-6 flex flex-col",
                              ),
                            children: [
                              (0, a.jsxs)("div", {
                                className: "space-y-3",
                                children: [
                                  (0, a.jsx)("div", {
                                    className: "w-12 h-12 ".concat(
                                      e.iconBg,
                                      " rounded-full flex items-center justify-center",
                                    ),
                                    children: (0, a.jsx)(e.icon, {
                                      className: "w-6 h-6 ".concat(e.iconColor),
                                    }),
                                  }),
                                  (0, a.jsx)("h3", {
                                    className:
                                      "text-xl font-bold text-[#344F1F]",
                                    children: e.title,
                                  }),
                                  (0, a.jsx)("p", {
                                    className:
                                      "text-sm text-[#344F1F]/70 leading-relaxed",
                                    children: e.description,
                                  }),
                                ],
                              }),
                              (0, a.jsx)("div", {
                                className: "flex justify-center pt-2",
                                children: (0, a.jsx)("div", {
                                  className:
                                    "relative w-32 h-32 md:w-40 md:h-40",
                                  children: (0, a.jsx)(u.default, {
                                    src: e.mascot,
                                    alt: e.title,
                                    width: 160,
                                    height: 160,
                                    className:
                                      "object-contain w-full h-full transition-transform duration-500 hover:scale-110",
                                  }),
                                }),
                              }),
                            ],
                          },
                          e.title,
                        ),
                      ),
                      (0, a.jsx)(p(), {
                        href: "#pricing",
                        children: (0, a.jsxs)(i.P.div, {
                          initial: { opacity: 0, y: 20 },
                          whileInView: { opacity: 1, y: 0 },
                          viewport: { once: !0 },
                          transition: { duration: 0.5 },
                          className:
                            "group bg-[#1a1a1a] text-white rounded-2xl p-6 flex items-center justify-between hover:bg-[#262626] transition-all duration-300 hover:shadow-xl border-2 border-[#262626]",
                          children: [
                            (0, a.jsxs)("div", {
                              className: "flex items-center gap-3",
                              children: [
                                (0, a.jsx)("div", {
                                  className: "flex -space-x-2",
                                  children: f.T.slice(0, 3).map((e, t) =>
                                    (0, a.jsx)(
                                      "div",
                                      {
                                        className:
                                          "w-10 h-10 rounded-full border-[3px] border-white overflow-hidden",
                                        children: (0, a.jsx)(u.default, {
                                          src: e,
                                          alt: "Student ".concat(t + 1),
                                          width: 40,
                                          height: 40,
                                          className:
                                            "w-full h-full object-cover",
                                        }),
                                      },
                                      t,
                                    ),
                                  ),
                                }),
                                (0, a.jsx)("span", {
                                  className: "text-base font-semibold",
                                  children: "Get Started Now",
                                }),
                              ],
                            }),
                            (0, a.jsx)(x.A, {
                              className:
                                "w-5 h-5 group-hover:translate-x-1 transition-transform",
                            }),
                          ],
                        }),
                      }),
                    ],
                  }),
                  (0, a.jsxs)("div", {
                    className: "grid md:hidden gap-4",
                    children: [
                      w.map((e, t) =>
                        (0, a.jsxs)(
                          i.P.div,
                          {
                            initial: { opacity: 0, y: 20 },
                            whileInView: { opacity: 1, y: 0 },
                            viewport: { once: !0 },
                            transition: { duration: 0.5, delay: 0.1 * t },
                            className: "rounded-2xl border-2 "
                              .concat(e.border, " ")
                              .concat(e.gradient, " p-6 flex flex-col"),
                            children: [
                              (0, a.jsxs)("div", {
                                className: "space-y-3",
                                children: [
                                  (0, a.jsx)("div", {
                                    className: "w-12 h-12 ".concat(
                                      e.iconBg,
                                      " rounded-full flex items-center justify-center",
                                    ),
                                    children: (0, a.jsx)(e.icon, {
                                      className: "w-6 h-6 ".concat(e.iconColor),
                                    }),
                                  }),
                                  (0, a.jsx)("h3", {
                                    className:
                                      "text-xl font-bold text-[#344F1F]",
                                    children: e.title,
                                  }),
                                  (0, a.jsx)("p", {
                                    className:
                                      "text-sm text-[#344F1F]/70 leading-relaxed",
                                    children: e.description,
                                  }),
                                ],
                              }),
                              (0, a.jsx)("div", {
                                className: "flex justify-center pt-2",
                                children: (0, a.jsx)("div", {
                                  className: "relative w-32 h-32",
                                  children: (0, a.jsx)(u.default, {
                                    src: e.mascot,
                                    alt: e.title,
                                    width: 128,
                                    height: 128,
                                    className:
                                      "object-contain w-full h-full transition-transform duration-500 hover:scale-110",
                                  }),
                                }),
                              }),
                            ],
                          },
                          t,
                        ),
                      ),
                      (0, a.jsx)(p(), {
                        href: "#pricing",
                        children: (0, a.jsxs)(i.P.div, {
                          initial: { opacity: 0, y: 20 },
                          whileInView: { opacity: 1, y: 0 },
                          viewport: { once: !0 },
                          transition: { duration: 0.5, delay: 0.7 },
                          className:
                            "group bg-[#1a1a1a] text-white rounded-2xl p-6 flex items-center justify-between hover:bg-[#262626] transition-all duration-300 border-2 border-[#262626]",
                          children: [
                            (0, a.jsxs)("div", {
                              className: "flex items-center gap-3",
                              children: [
                                (0, a.jsx)("div", {
                                  className: "flex -space-x-2",
                                  children: f.T.slice(0, 3).map((e, t) =>
                                    (0, a.jsx)(
                                      "div",
                                      {
                                        className:
                                          "w-10 h-10 rounded-full border-[3px] border-white overflow-hidden",
                                        children: (0, a.jsx)(u.default, {
                                          src: e,
                                          alt: "Student ".concat(t + 1),
                                          width: 40,
                                          height: 40,
                                          className:
                                            "w-full h-full object-cover",
                                        }),
                                      },
                                      t,
                                    ),
                                  ),
                                }),
                                (0, a.jsx)("span", {
                                  className: "text-base font-semibold",
                                  children: "Get Started Now",
                                }),
                              ],
                            }),
                            (0, a.jsx)(x.A, {
                              className:
                                "w-5 h-5 group-hover:translate-x-1 transition-transform",
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
    9825: (e, t, s) => {
      "use strict";
      s.d(t, { ConsultationDashboardPreview: () => N });
      var a = s(70207),
        i = s(87223),
        l = s(45748),
        n = s(54459),
        r = s(35634),
        c = s(27239),
        o = s(29005),
        d = s(66650),
        x = s(84217),
        m = s(50341),
        h = s(70005),
        p = s(74577),
        u = s(28560),
        f = s(7535),
        w = s(39175),
        j = s(88117);
      let b = [
        {
          icon: r.A,
          title: "Full Dashboard Overview",
          description:
            "Your personal command center with live stats, recent activity, upcoming interviews, and quick actions - all at a glance.",
          color: "bg-[#344F1F]",
          iconColor: "text-white",
        },
        {
          icon: c.A,
          title: "Documents & Cover Letters",
          description:
            "Access every CV and cover letter we create. Download anytime, review before we send, keep for future use.",
          color: "bg-[#F4991A]",
          iconColor: "text-white",
        },
        {
          icon: o.A,
          title: "Direct Counselor Chat",
          description:
            "Message your dedicated counselor anytime. Get interview tips, request changes, ask questions. Avg response: 4 hours.",
          color: "bg-black",
          iconColor: "text-white",
        },
      ];
      function g() {
        return (0, a.jsxs)("div", {
          className:
            "bg-white rounded-2xl lg:rounded-3xl shadow-2xl border border-gray-200 overflow-hidden w-full max-w-[500px]",
          children: [
            (0, a.jsx)("div", {
              className:
                "bg-gradient-to-r from-[#344F1F] to-[#2d4219] px-4 lg:px-6 py-4 lg:py-5",
              children: (0, a.jsxs)("div", {
                className: "flex items-center justify-between",
                children: [
                  (0, a.jsxs)("div", {
                    children: [
                      (0, a.jsx)("p", {
                        className: "text-white/70 text-xs lg:text-sm",
                        children: "Welcome back,",
                      }),
                      (0, a.jsx)("h3", {
                        className: "text-white font-bold text-lg lg:text-xl",
                        children: "Fatima Zahra",
                      }),
                    ],
                  }),
                  (0, a.jsxs)("div", {
                    className: "flex items-center gap-2",
                    children: [
                      (0, a.jsx)("div", {
                        className:
                          "w-8 h-8 lg:w-10 lg:h-10 bg-white/20 rounded-full flex items-center justify-center",
                        children: (0, a.jsx)(d.A, {
                          className: "w-4 h-4 lg:w-5 lg:h-5 text-white",
                        }),
                      }),
                      (0, a.jsx)("div", {
                        className:
                          "w-8 h-8 lg:w-10 lg:h-10 bg-[#F4991A] rounded-full flex items-center justify-center text-white font-bold text-sm",
                        children: "PS",
                      }),
                    ],
                  }),
                ],
              }),
            }),
            (0, a.jsxs)("div", {
              className:
                "grid grid-cols-3 gap-2 lg:gap-4 p-3 lg:p-4 bg-[#F9F5F0] border-b border-[#F2EAD3]",
              children: [
                (0, a.jsxs)("div", {
                  className:
                    "bg-white rounded-xl p-2 lg:p-3 text-center shadow-sm",
                  children: [
                    (0, a.jsx)("p", {
                      className: "text-xl lg:text-2xl font-bold text-[#344F1F]",
                      children: "12",
                    }),
                    (0, a.jsx)("p", {
                      className: "text-[10px] lg:text-xs text-[#344F1F]/60",
                      children: "Apps Sent",
                    }),
                  ],
                }),
                (0, a.jsxs)("div", {
                  className:
                    "bg-white rounded-xl p-2 lg:p-3 text-center shadow-sm",
                  children: [
                    (0, a.jsx)("p", {
                      className:
                        "text-xl lg:text-2xl font-bold text-emerald-600",
                      children: "3",
                    }),
                    (0, a.jsx)("p", {
                      className: "text-[10px] lg:text-xs text-[#344F1F]/60",
                      children: "Interviews",
                    }),
                  ],
                }),
                (0, a.jsxs)("div", {
                  className:
                    "bg-white rounded-xl p-2 lg:p-3 text-center shadow-sm",
                  children: [
                    (0, a.jsx)("p", {
                      className: "text-xl lg:text-2xl font-bold text-[#F4991A]",
                      children: "1",
                    }),
                    (0, a.jsx)("p", {
                      className: "text-[10px] lg:text-xs text-[#344F1F]/60",
                      children: "Offer!",
                    }),
                  ],
                }),
              ],
            }),
            (0, a.jsxs)("div", {
              className: "p-3 lg:p-4 space-y-3 lg:space-y-4",
              children: [
                (0, a.jsxs)("div", {
                  className:
                    "bg-emerald-50 border border-emerald-200 rounded-xl p-3 lg:p-4",
                  children: [
                    (0, a.jsxs)("div", {
                      className: "flex items-center gap-2 mb-2",
                      children: [
                        (0, a.jsx)(x.A, {
                          className: "w-4 h-4 text-emerald-600",
                        }),
                        (0, a.jsx)("span", {
                          className: "text-xs font-semibold text-emerald-700",
                          children: "UPCOMING INTERVIEW",
                        }),
                      ],
                    }),
                    (0, a.jsxs)("div", {
                      className: "flex items-center justify-between",
                      children: [
                        (0, a.jsxs)("div", {
                          children: [
                            (0, a.jsx)("p", {
                              className:
                                "font-semibold text-[#344F1F] text-sm lg:text-base",
                              children: "Siemens AG",
                            }),
                            (0, a.jsx)("p", {
                              className: "text-xs text-[#344F1F]/60",
                              children: "Dec 20, 2025 • 10:00 AM CET",
                            }),
                          ],
                        }),
                        (0, a.jsx)("button", {
                          className:
                            "bg-emerald-600 text-white text-xs px-3 py-1.5 rounded-full font-medium",
                          children: "Prep Now",
                        }),
                      ],
                    }),
                  ],
                }),
                (0, a.jsxs)("div", {
                  children: [
                    (0, a.jsxs)("div", {
                      className: "flex items-center justify-between mb-2",
                      children: [
                        (0, a.jsx)("span", {
                          className: "text-xs font-semibold text-[#344F1F]/70",
                          children: "RECENT APPLICATIONS",
                        }),
                        (0, a.jsxs)("button", {
                          className:
                            "text-xs text-[#F4991A] font-medium flex items-center gap-1",
                          children: [
                            "View All ",
                            (0, a.jsx)(m.A, { className: "w-3 h-3" }),
                          ],
                        }),
                      ],
                    }),
                    (0, a.jsxs)("div", {
                      className: "space-y-2",
                      children: [
                        (0, a.jsxs)("div", {
                          className:
                            "flex items-center justify-between p-2 lg:p-3 bg-[#F9F5F0] rounded-lg",
                          children: [
                            (0, a.jsxs)("div", {
                              className: "flex items-center gap-2 lg:gap-3",
                              children: [
                                (0, a.jsx)("div", {
                                  className:
                                    "w-8 h-8 bg-emerald-500 rounded-lg flex items-center justify-center",
                                  children: (0, a.jsx)(h.A, {
                                    className: "w-4 h-4 text-white",
                                  }),
                                }),
                                (0, a.jsxs)("div", {
                                  children: [
                                    (0, a.jsx)("p", {
                                      className:
                                        "font-medium text-[#344F1F] text-xs lg:text-sm",
                                      children: "BMW Group",
                                    }),
                                    (0, a.jsx)("p", {
                                      className:
                                        "text-[10px] lg:text-xs text-[#344F1F]/60",
                                      children: "Mechatronics",
                                    }),
                                  ],
                                }),
                              ],
                            }),
                            (0, a.jsx)("span", {
                              className:
                                "bg-emerald-100 text-emerald-700 text-[10px] lg:text-xs px-2 py-1 rounded-full font-medium",
                              children: "Interview",
                            }),
                          ],
                        }),
                        (0, a.jsxs)("div", {
                          className:
                            "flex items-center justify-between p-2 lg:p-3 bg-[#F9F5F0] rounded-lg",
                          children: [
                            (0, a.jsxs)("div", {
                              className: "flex items-center gap-2 lg:gap-3",
                              children: [
                                (0, a.jsx)("div", {
                                  className:
                                    "w-8 h-8 bg-[#344F1F] rounded-lg flex items-center justify-center",
                                  children: (0, a.jsx)(p.A, {
                                    className: "w-4 h-4 text-white",
                                  }),
                                }),
                                (0, a.jsxs)("div", {
                                  children: [
                                    (0, a.jsx)("p", {
                                      className:
                                        "font-medium text-[#344F1F] text-xs lg:text-sm",
                                      children: "Bosch",
                                    }),
                                    (0, a.jsx)("p", {
                                      className:
                                        "text-[10px] lg:text-xs text-[#344F1F]/60",
                                      children: "Electronics",
                                    }),
                                  ],
                                }),
                              ],
                            }),
                            (0, a.jsx)("span", {
                              className:
                                "bg-[#344F1F]/10 text-[#344F1F] text-[10px] lg:text-xs px-2 py-1 rounded-full font-medium",
                              children: "Sent",
                            }),
                          ],
                        }),
                      ],
                    }),
                  ],
                }),
                (0, a.jsx)("div", {
                  className:
                    "bg-[#F4991A]/10 border border-[#F4991A]/20 rounded-xl p-3",
                  children: (0, a.jsxs)("div", {
                    className: "flex items-start gap-3",
                    children: [
                      (0, a.jsx)("div", {
                        className:
                          "w-8 h-8 bg-[#F4991A] rounded-full flex items-center justify-center flex-shrink-0",
                        children: (0, a.jsx)(u.A, {
                          className: "w-4 h-4 text-white",
                        }),
                      }),
                      (0, a.jsxs)("div", {
                        children: [
                          (0, a.jsx)("p", {
                            className:
                              "font-semibold text-[#344F1F] text-xs lg:text-sm",
                            children: "Anna Schmidt",
                          }),
                          (0, a.jsx)("p", {
                            className:
                              "text-[10px] lg:text-xs text-[#344F1F]/70 mt-0.5",
                            children:
                              "Great news! I've prepared interview tips for your Siemens call. Check the prep section!",
                          }),
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
      function v() {
        return (0, a.jsxs)("div", {
          className:
            "bg-white rounded-2xl lg:rounded-3xl shadow-2xl border border-gray-200 overflow-hidden w-full max-w-[500px]",
          children: [
            (0, a.jsxs)("div", {
              className:
                "bg-[#F4991A] px-4 lg:px-6 py-4 lg:py-5 flex items-center justify-between",
              children: [
                (0, a.jsxs)("div", {
                  className: "flex items-center gap-3",
                  children: [
                    (0, a.jsx)(c.A, {
                      className: "w-5 h-5 lg:w-6 lg:h-6 text-white",
                    }),
                    (0, a.jsxs)("div", {
                      children: [
                        (0, a.jsx)("h3", {
                          className:
                            "text-white font-bold text-base lg:text-lg",
                          children: "Your Documents",
                        }),
                        (0, a.jsx)("p", {
                          className: "text-white/70 text-xs",
                          children: "8 files ready",
                        }),
                      ],
                    }),
                  ],
                }),
                (0, a.jsx)("button", {
                  className:
                    "bg-white/20 text-white text-xs px-3 py-1.5 rounded-full font-medium",
                  children: "Download All",
                }),
              ],
            }),
            (0, a.jsxs)("div", {
              className: "p-4 lg:p-5 space-y-3",
              children: [
                (0, a.jsxs)("div", {
                  children: [
                    (0, a.jsx)("p", {
                      className: "text-xs font-semibold text-[#344F1F]/60 mb-2",
                      children: "YOUR CV",
                    }),
                    (0, a.jsxs)("div", {
                      className:
                        "flex items-center justify-between p-3 lg:p-4 bg-blue-50 rounded-xl border border-blue-100",
                      children: [
                        (0, a.jsxs)("div", {
                          className: "flex items-center gap-3 lg:gap-4",
                          children: [
                            (0, a.jsx)("div", {
                              className:
                                "w-12 h-14 lg:w-14 lg:h-16 bg-blue-100 rounded-lg flex items-center justify-center border border-blue-200",
                              children: (0, a.jsx)(c.A, {
                                className:
                                  "w-6 h-6 lg:w-7 lg:h-7 text-blue-600",
                              }),
                            }),
                            (0, a.jsxs)("div", {
                              children: [
                                (0, a.jsx)("p", {
                                  className:
                                    "font-semibold text-[#344F1F] text-sm lg:text-base",
                                  children: "German CV - Final",
                                }),
                                (0, a.jsx)("p", {
                                  className: "text-xs text-[#344F1F]/60",
                                  children: "Updated Dec 15, 2025",
                                }),
                                (0, a.jsxs)("div", {
                                  className: "flex items-center gap-1 mt-1",
                                  children: [
                                    (0, a.jsx)(f.A, {
                                      className:
                                        "w-3 h-3 text-[#F4991A] fill-[#F4991A]",
                                    }),
                                    (0, a.jsx)("span", {
                                      className:
                                        "text-[10px] text-[#344F1F]/60",
                                      children: "Expert reviewed",
                                    }),
                                  ],
                                }),
                              ],
                            }),
                          ],
                        }),
                        (0, a.jsx)("button", {
                          className:
                            "w-10 h-10 lg:w-12 lg:h-12 bg-[#344F1F] rounded-full flex items-center justify-center hover:bg-[#2d4219] transition-colors",
                          children: (0, a.jsx)(w.A, {
                            className: "w-4 h-4 lg:w-5 lg:h-5 text-white",
                          }),
                        }),
                      ],
                    }),
                  ],
                }),
                (0, a.jsxs)("div", {
                  children: [
                    (0, a.jsx)("p", {
                      className: "text-xs font-semibold text-[#344F1F]/60 mb-2",
                      children: "COVER LETTERS (5)",
                    }),
                    (0, a.jsxs)("div", {
                      className: "space-y-2",
                      children: [
                        (0, a.jsxs)("div", {
                          className:
                            "flex items-center justify-between p-3 bg-[#F9F5F0] rounded-xl border border-[#F2EAD3]",
                          children: [
                            (0, a.jsxs)("div", {
                              className: "flex items-center gap-3",
                              children: [
                                (0, a.jsx)("div", {
                                  className:
                                    "w-10 h-12 bg-emerald-100 rounded-lg flex items-center justify-center border border-emerald-200",
                                  children: (0, a.jsx)(c.A, {
                                    className: "w-5 h-5 text-emerald-600",
                                  }),
                                }),
                                (0, a.jsxs)("div", {
                                  children: [
                                    (0, a.jsx)("p", {
                                      className:
                                        "font-semibold text-[#344F1F] text-sm",
                                      children: "Siemens AG",
                                    }),
                                    (0, a.jsx)("p", {
                                      className: "text-xs text-[#344F1F]/60",
                                      children: "IT Specialist • Munich",
                                    }),
                                  ],
                                }),
                              ],
                            }),
                            (0, a.jsx)("button", {
                              className:
                                "w-8 h-8 bg-[#344F1F] rounded-full flex items-center justify-center",
                              children: (0, a.jsx)(w.A, {
                                className: "w-4 h-4 text-white",
                              }),
                            }),
                          ],
                        }),
                        (0, a.jsxs)("div", {
                          className:
                            "flex items-center justify-between p-3 bg-[#F9F5F0] rounded-xl border border-[#F2EAD3]",
                          children: [
                            (0, a.jsxs)("div", {
                              className: "flex items-center gap-3",
                              children: [
                                (0, a.jsx)("div", {
                                  className:
                                    "w-10 h-12 bg-emerald-100 rounded-lg flex items-center justify-center border border-emerald-200",
                                  children: (0, a.jsx)(c.A, {
                                    className: "w-5 h-5 text-emerald-600",
                                  }),
                                }),
                                (0, a.jsxs)("div", {
                                  children: [
                                    (0, a.jsx)("p", {
                                      className:
                                        "font-semibold text-[#344F1F] text-sm",
                                      children: "BMW Group",
                                    }),
                                    (0, a.jsx)("p", {
                                      className: "text-xs text-[#344F1F]/60",
                                      children: "Mechatronics • Berlin",
                                    }),
                                  ],
                                }),
                              ],
                            }),
                            (0, a.jsx)("button", {
                              className:
                                "w-8 h-8 bg-[#344F1F] rounded-full flex items-center justify-center",
                              children: (0, a.jsx)(w.A, {
                                className: "w-4 h-4 text-white",
                              }),
                            }),
                          ],
                        }),
                        (0, a.jsxs)("div", {
                          className:
                            "flex items-center justify-between p-3 bg-[#F9F5F0] rounded-xl border border-[#F2EAD3]",
                          children: [
                            (0, a.jsxs)("div", {
                              className: "flex items-center gap-3",
                              children: [
                                (0, a.jsx)("div", {
                                  className:
                                    "w-10 h-12 bg-emerald-100 rounded-lg flex items-center justify-center border border-emerald-200",
                                  children: (0, a.jsx)(c.A, {
                                    className: "w-5 h-5 text-emerald-600",
                                  }),
                                }),
                                (0, a.jsxs)("div", {
                                  children: [
                                    (0, a.jsx)("p", {
                                      className:
                                        "font-semibold text-[#344F1F] text-sm",
                                      children: "Bosch",
                                    }),
                                    (0, a.jsx)("p", {
                                      className: "text-xs text-[#344F1F]/60",
                                      children: "Electronics • Stuttgart",
                                    }),
                                  ],
                                }),
                              ],
                            }),
                            (0, a.jsx)("button", {
                              className:
                                "w-8 h-8 bg-[#344F1F] rounded-full flex items-center justify-center",
                              children: (0, a.jsx)(w.A, {
                                className: "w-4 h-4 text-white",
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
        });
      }
      function y() {
        return (0, a.jsxs)("div", {
          className:
            "bg-white rounded-2xl lg:rounded-3xl shadow-2xl border border-gray-200 overflow-hidden w-full max-w-[500px]",
          children: [
            (0, a.jsxs)("div", {
              className:
                "bg-black px-4 lg:px-6 py-4 lg:py-5 flex items-center justify-between",
              children: [
                (0, a.jsxs)("div", {
                  className: "flex items-center gap-3",
                  children: [
                    (0, a.jsxs)("div", {
                      className: "relative",
                      children: [
                        (0, a.jsx)("div", {
                          className:
                            "w-10 h-10 lg:w-12 lg:h-12 bg-white rounded-full flex items-center justify-center",
                          children: (0, a.jsx)(u.A, {
                            className: "w-5 h-5 lg:w-6 lg:h-6 text-black",
                          }),
                        }),
                        (0, a.jsx)("span", {
                          className:
                            "absolute bottom-0 right-0 w-3 h-3 bg-emerald-500 rounded-full border-2 border-black",
                        }),
                      ],
                    }),
                    (0, a.jsxs)("div", {
                      children: [
                        (0, a.jsx)("h3", {
                          className:
                            "text-white font-bold text-base lg:text-lg",
                          children: "Anna Schmidt",
                        }),
                        (0, a.jsx)("p", {
                          className: "text-white/60 text-xs",
                          children: "Your Dedicated Counselor • Online",
                        }),
                      ],
                    }),
                  ],
                }),
                (0, a.jsx)("div", {
                  className: "flex items-center gap-2",
                  children: (0, a.jsx)("span", {
                    className:
                      "bg-emerald-500/20 text-emerald-400 text-xs px-2 py-1 rounded-full",
                    children: "Avg. 4h response",
                  }),
                }),
              ],
            }),
            (0, a.jsxs)("div", {
              className:
                "p-4 lg:p-5 space-y-4 bg-[#F9F5F0] min-h-[280px] lg:min-h-[320px]",
              children: [
                (0, a.jsx)("div", {
                  className: "text-center",
                  children: (0, a.jsx)("span", {
                    className:
                      "text-xs text-[#344F1F]/50 bg-white px-3 py-1 rounded-full",
                    children: "Today",
                  }),
                }),
                (0, a.jsxs)("div", {
                  className: "flex gap-3",
                  children: [
                    (0, a.jsx)("div", {
                      className:
                        "w-8 h-8 bg-gray-200 rounded-full flex items-center justify-center flex-shrink-0",
                      children: (0, a.jsx)(u.A, {
                        className: "w-4 h-4 text-gray-600",
                      }),
                    }),
                    (0, a.jsxs)("div", {
                      className:
                        "bg-white rounded-2xl rounded-tl-sm px-4 py-3 max-w-[85%] shadow-sm",
                      children: [
                        (0, a.jsx)("p", {
                          className: "text-[#344F1F] text-sm",
                          children:
                            "Great news Priya! Siemens wants to schedule an interview with you. I've added some preparation materials to your dashboard.",
                        }),
                        (0, a.jsx)("p", {
                          className: "text-[#344F1F]/40 text-xs mt-2",
                          children: "2:30 PM",
                        }),
                      ],
                    }),
                  ],
                }),
                (0, a.jsx)("div", {
                  className: "flex gap-3 justify-end",
                  children: (0, a.jsxs)("div", {
                    className:
                      "bg-[#344F1F] rounded-2xl rounded-tr-sm px-4 py-3 max-w-[85%] shadow-sm",
                    children: [
                      (0, a.jsx)("p", {
                        className: "text-white text-sm",
                        children:
                          "That's amazing! When is the interview? I'm nervous about speaking German \uD83D\uDE05",
                      }),
                      (0, a.jsx)("p", {
                        className: "text-white/40 text-xs mt-2",
                        children: "2:35 PM",
                      }),
                    ],
                  }),
                }),
                (0, a.jsxs)("div", {
                  className: "flex gap-3",
                  children: [
                    (0, a.jsx)("div", {
                      className:
                        "w-8 h-8 bg-gray-200 rounded-full flex items-center justify-center flex-shrink-0",
                      children: (0, a.jsx)(u.A, {
                        className: "w-4 h-4 text-gray-600",
                      }),
                    }),
                    (0, a.jsxs)("div", {
                      className:
                        "bg-white rounded-2xl rounded-tl-sm px-4 py-3 max-w-[85%] shadow-sm",
                      children: [
                        (0, a.jsx)("p", {
                          className: "text-[#344F1F] text-sm",
                          children:
                            "Dec 20th at 10 AM CET. Don't worry - let's schedule a mock interview this week! I'll send you some common questions they ask.",
                        }),
                        (0, a.jsx)("p", {
                          className: "text-[#344F1F]/40 text-xs mt-2",
                          children: "2:38 PM",
                        }),
                      ],
                    }),
                  ],
                }),
              ],
            }),
            (0, a.jsx)("div", {
              className: "px-4 lg:px-5 pb-4 lg:pb-5 pt-2 bg-[#F9F5F0]",
              children: (0, a.jsxs)("div", {
                className:
                  "flex items-center gap-3 bg-white rounded-full px-4 py-3 border border-[#F2EAD3] shadow-sm",
                children: [
                  (0, a.jsx)("input", {
                    type: "text",
                    placeholder: "Type a message...",
                    className:
                      "flex-1 bg-transparent outline-none text-sm text-[#344F1F] placeholder:text-[#344F1F]/40",
                    disabled: !0,
                  }),
                  (0, a.jsx)("button", {
                    className:
                      "w-10 h-10 bg-[#344F1F] rounded-full flex items-center justify-center hover:bg-[#2d4219] transition-colors",
                    children: (0, a.jsx)(p.A, {
                      className: "w-4 h-4 text-white",
                    }),
                  }),
                ],
              }),
            }),
          ],
        });
      }
      function N() {
        let [e, t] = (0, i.useState)(0),
          [s, r] = (0, i.useState)(!1);
        return (
          (0, i.useEffect)(() => {
            if (s) return;
            let e = setInterval(() => {
              t((e) => (e + 1) % b.length);
            }, 6e3);
            return () => clearInterval(e);
          }, [s]),
          (0, a.jsx)("section", {
            className: "py-12 sm:py-16 md:py-24 bg-white overflow-hidden",
            children: (0, a.jsxs)("div", {
              className: "container mx-auto px-4",
              children: [
                (0, a.jsxs)(l.P.div, {
                  initial: { opacity: 0, y: 20 },
                  whileInView: { opacity: 1, y: 0 },
                  viewport: { once: !0 },
                  transition: { duration: 0.5 },
                  className: "text-center mb-10 sm:mb-14 lg:mb-16",
                  children: [
                    (0, a.jsxs)("div", {
                      className:
                        "inline-flex items-center gap-2 px-4 py-2 rounded-full bg-[#344F1F]/10 border border-[#344F1F]/20 mb-4",
                      children: [
                        (0, a.jsx)(j.A, {
                          className: "w-4 h-4 text-[#344F1F]",
                        }),
                        (0, a.jsx)("span", {
                          className: "text-sm font-medium text-[#344F1F]",
                          children: "Exclusive Member Dashboard",
                        }),
                      ],
                    }),
                    (0, a.jsx)("h2", {
                      className:
                        "text-2xl sm:text-3xl md:text-4xl lg:text-5xl font-bold mb-3 sm:mb-4 text-[#344F1F]",
                      children: "Your Personal Command Center",
                    }),
                    (0, a.jsx)("p", {
                      className:
                        "text-base sm:text-lg text-[#344F1F]/70 max-w-2xl mx-auto px-4",
                      children:
                        "Enrolled members get instant access to track applications, download documents, and chat with their counselor",
                    }),
                  ],
                }),
                (0, a.jsxs)("div", {
                  className:
                    "max-w-7xl mx-auto grid lg:grid-cols-[1fr,1.3fr] gap-8 lg:gap-12 items-center",
                  children: [
                    (0, a.jsxs)("div", {
                      className: "space-y-3 sm:space-y-4 order-2 lg:order-1",
                      children: [
                        b.map((s, i) => {
                          let n = s.icon;
                          return (0, a.jsxs)(
                            l.P.div,
                            {
                              className:
                                "\n                    relative p-4 sm:p-5 lg:p-6 rounded-2xl cursor-pointer transition-all duration-300\n                    ".concat(
                                  e === i
                                    ? "bg-[#F9F5F0] shadow-lg scale-[1.02] border-2 border-[#344F1F]/20"
                                    : "bg-white border-2 border-[#F2EAD3] hover:bg-[#F9F5F0] hover:shadow-md",
                                  "\n                  ",
                                ),
                              initial: { opacity: 0, x: -20 },
                              whileInView: { opacity: 1, x: 0 },
                              viewport: { once: !0 },
                              transition: {
                                duration: 0.5,
                                delay: 0.2 + 0.15 * i,
                              },
                              onMouseEnter: () => {
                                (t(i), r(!0));
                              },
                              onMouseLeave: () => r(!1),
                              children: [
                                (0, a.jsxs)("div", {
                                  className: "flex items-start gap-4",
                                  children: [
                                    (0, a.jsx)("div", {
                                      className:
                                        "flex-shrink-0 w-12 h-12 lg:w-14 lg:h-14 "
                                          .concat(
                                            s.color,
                                            " rounded-xl flex items-center justify-center transition-transform duration-300 ",
                                          )
                                          .concat(e === i ? "scale-110" : ""),
                                      children: (0, a.jsx)(n, {
                                        className:
                                          "w-6 h-6 lg:w-7 lg:h-7 ".concat(
                                            s.iconColor,
                                          ),
                                      }),
                                    }),
                                    (0, a.jsxs)("div", {
                                      className: "flex-1",
                                      children: [
                                        (0, a.jsx)("h3", {
                                          className:
                                            "text-lg sm:text-xl font-bold mb-2 transition-colors duration-300 ".concat(
                                              e === i
                                                ? "text-[#344F1F]"
                                                : "text-gray-700",
                                            ),
                                          children: s.title,
                                        }),
                                        (0, a.jsx)("p", {
                                          className:
                                            "text-sm sm:text-base leading-relaxed transition-colors duration-300 ".concat(
                                              e === i
                                                ? "text-[#344F1F]/70"
                                                : "text-gray-500",
                                            ),
                                          children: s.description,
                                        }),
                                      ],
                                    }),
                                  ],
                                }),
                                e === i &&
                                  (0, a.jsx)(l.P.div, {
                                    className:
                                      "absolute left-0 top-1/2 -translate-y-1/2 w-1.5 h-16 bg-[#F4991A] rounded-r-full",
                                    layoutId: "dashboardActiveIndicator",
                                    initial: { opacity: 0 },
                                    animate: { opacity: 1 },
                                    exit: { opacity: 0 },
                                  }),
                              ],
                            },
                            i,
                          );
                        }),
                        (0, a.jsx)(l.P.div, {
                          initial: { opacity: 0, y: 10 },
                          whileInView: { opacity: 1, y: 0 },
                          viewport: { once: !0 },
                          transition: { duration: 0.5, delay: 0.6 },
                          className: "pt-4",
                          children: (0, a.jsxs)("div", {
                            className:
                              "flex items-center gap-2 text-sm text-[#344F1F]/60",
                            children: [
                              (0, a.jsx)(h.A, {
                                className: "w-4 h-4 text-emerald-500",
                              }),
                              (0, a.jsx)("span", {
                                children: "Instant access upon enrollment",
                              }),
                            ],
                          }),
                        }),
                      ],
                    }),
                    (0, a.jsxs)("div", {
                      className:
                        "relative min-h-[450px] sm:min-h-[500px] lg:min-h-[580px] flex items-center justify-center order-1 lg:order-2",
                      children: [
                        (0, a.jsx)("div", {
                          className:
                            "absolute inset-0 bg-gradient-to-br from-[#F9F5F0] to-[#F2EAD3]/50 rounded-3xl -z-10",
                        }),
                        (0, a.jsxs)(n.N, {
                          mode: "wait",
                          children: [
                            0 === e &&
                              (0, a.jsx)(
                                l.P.div,
                                {
                                  initial: { opacity: 0, y: 30, scale: 0.95 },
                                  animate: { opacity: 1, y: 0, scale: 1 },
                                  exit: { opacity: 0, y: -30, scale: 0.95 },
                                  transition: {
                                    duration: 0.5,
                                    ease: "easeOut",
                                  },
                                  className:
                                    "w-full flex justify-center p-4 lg:p-6",
                                  children: (0, a.jsx)(g, {}),
                                },
                                "overview",
                              ),
                            1 === e &&
                              (0, a.jsx)(
                                l.P.div,
                                {
                                  initial: { opacity: 0, y: 30, scale: 0.95 },
                                  animate: { opacity: 1, y: 0, scale: 1 },
                                  exit: { opacity: 0, y: -30, scale: 0.95 },
                                  transition: {
                                    duration: 0.5,
                                    ease: "easeOut",
                                  },
                                  className:
                                    "w-full flex justify-center p-4 lg:p-6",
                                  children: (0, a.jsx)(v, {}),
                                },
                                "documents",
                              ),
                            2 === e &&
                              (0, a.jsx)(
                                l.P.div,
                                {
                                  initial: { opacity: 0, y: 30, scale: 0.95 },
                                  animate: { opacity: 1, y: 0, scale: 1 },
                                  exit: { opacity: 0, y: -30, scale: 0.95 },
                                  transition: {
                                    duration: 0.5,
                                    ease: "easeOut",
                                  },
                                  className:
                                    "w-full flex justify-center p-4 lg:p-6",
                                  children: (0, a.jsx)(y, {}),
                                },
                                "chat",
                              ),
                          ],
                        }),
                      ],
                    }),
                  ],
                }),
              ],
            }),
          })
        );
      }
    },
    32343: (e, t, s) => {
      (Promise.resolve().then(s.t.bind(s, 4463, 23)),
        Promise.resolve().then(s.bind(s, 1971)),
        Promise.resolve().then(s.bind(s, 97445)),
        Promise.resolve().then(s.bind(s, 44565)),
        Promise.resolve().then(s.bind(s, 9825)),
        Promise.resolve().then(s.bind(s, 67755)),
        Promise.resolve().then(s.bind(s, 75189)),
        Promise.resolve().then(s.bind(s, 1764)),
        Promise.resolve().then(s.bind(s, 68003)),
        Promise.resolve().then(s.bind(s, 75594)),
        Promise.resolve().then(s.bind(s, 98555)),
        Promise.resolve().then(s.bind(s, 40013)));
    },
    40013: (e, t, s) => {
      "use strict";
      s.d(t, { ConsultationTestimonials: () => f });
      var a = s(70207),
        i = s(87223),
        l = s(45748),
        n = s(54459),
        r = s(17802),
        c = s(7535),
        o = s(86585),
        d = s(84217),
        x = s(1701),
        m = s(16148),
        h = s(97020),
        p = s(50341);
      let u = [
        {
          name: "Fatima Zahra",
          country: "Morocco",
          avatar: "/avatars/priya.webp",
          company: "Siemens AG",
          city: "Munich",
          role: "IT Specialist",
          quote:
            "I was applying for 6 months with zero responses. Azubi team got me 3 interview calls in my first month. The cover letters they wrote were incredible - I could never write German that well. Now I'm starting at Siemens!",
          timeline: "Applied: Oct 2025 → Offer: Dec 2025",
          duration: "2 months",
          rating: 5,
        },
        {
          name: "Omar Bennani",
          country: "Morocco",
          avatar: "/avatars/ahmed.webp",
          company: "BMW Group",
          city: "Berlin",
          role: "Mechatronics",
          quote:
            "BMW HR told me my application stood out because of the quality. The team knew exactly which companies hire internationals and which to avoid. Best investment I've made for my career.",
          timeline: "Applied: Nov 2025 → Offer: Jan 2026",
          duration: "2 months",
          rating: 5,
        },
        {
          name: "Sara Amrani",
          country: "Morocco",
          avatar: "/avatars/sarah.webp",
          company: "Deutsche Bahn",
          city: "Frankfurt",
          role: "Logistics",
          quote:
            "My counselor was available on WhatsApp whenever I had questions. They prepped me so well for my interview that I felt more confident than ever. Got the offer within 3 months of enrolling!",
          timeline: "Applied: Sep 2025 → Offer: Dec 2025",
          duration: "3 months",
          rating: 5,
        },
        {
          name: "Raj Patel",
          country: "Morocco",
          avatar: "/avatars/raj.webp",
          company: "Bosch",
          city: "Stuttgart",
          role: "Electronics",
          quote:
            "The visa support was amazing. After getting my offer, they guided me through the entire blocked account and visa process. I'm now in Germany living my dream. Worth every rupee!",
          timeline: "Applied: Aug 2025 → Offer: Nov 2025",
          duration: "3 months",
          rating: 5,
        },
        {
          name: "Maria Santos",
          country: "Philippines",
          avatar: "/avatars/maria.webp",
          company: "Lufthansa",
          city: "Hamburg",
          role: "Aviation Services",
          quote:
            "I tried applying on my own for a year with no luck. Within 6 weeks of using Apply For Me, I had 2 offers to choose from. The team really understands what German employers want.",
          timeline: "Applied: Oct 2025 → Offer: Nov 2025",
          duration: "6 weeks",
          rating: 5,
        },
        {
          name: "Chen Wei",
          country: "China",
          avatar: "/avatars/chen.webp",
          company: "Volkswagen",
          city: "Wolfsburg",
          role: "Automotive Tech",
          quote:
            "The Premium package was perfect for me. Unlimited applications, senior counselor, and they even booked my visa appointment. From enrollment to landing in Germany - seamless experience.",
          timeline: "Applied: Jul 2025 → Offer: Oct 2025",
          duration: "3 months",
          rating: 5,
        },
      ];
      function f(e) {
        var t;
        let { stats: s } = e,
          [f, w] = (0, i.useState)(0),
          j = Math.ceil(u.length / 3),
          b = u.slice(3 * f, (f + 1) * 3);
        return (0, a.jsx)("section", {
          className: "py-16 md:py-24 bg-[#F9F5F0]",
          children: (0, a.jsxs)("div", {
            className: "container mx-auto px-4",
            children: [
              (0, a.jsxs)(l.P.div, {
                initial: { opacity: 0, y: 20 },
                whileInView: { opacity: 1, y: 0 },
                viewport: { once: !0 },
                transition: { duration: 0.5 },
                className: "text-center mb-12",
                children: [
                  (0, a.jsxs)(r.E, {
                    className:
                      "mb-4 bg-emerald-100 text-emerald-700 border-emerald-200",
                    children: [
                      (0, a.jsx)(c.A, {
                        className: "w-3 h-3 mr-1",
                        fill: "currentColor",
                      }),
                      "Success Stories",
                    ],
                  }),
                  (0, a.jsx)("h2", {
                    className:
                      "text-3xl md:text-4xl lg:text-5xl font-bold mb-4 text-[#344F1F]",
                    children: "Real Students, Real Results",
                  }),
                  (0, a.jsx)("p", {
                    className: "text-lg text-[#344F1F]/70 max-w-2xl mx-auto",
                    children:
                      "Hear from students who trusted us with their Ausbildung journey",
                  }),
                ],
              }),
              (0, a.jsxs)("div", {
                className: "max-w-6xl mx-auto",
                children: [
                  (0, a.jsx)(n.N, {
                    mode: "wait",
                    children: (0, a.jsx)(
                      l.P.div,
                      {
                        initial: { opacity: 0, x: 20 },
                        animate: { opacity: 1, x: 0 },
                        exit: { opacity: 0, x: -20 },
                        transition: { duration: 0.3 },
                        className: "grid md:grid-cols-3 gap-6",
                        children: b.map((e, t) =>
                          (0, a.jsxs)(
                            l.P.div,
                            {
                              initial: { opacity: 0, y: 20 },
                              animate: { opacity: 1, y: 0 },
                              transition: { duration: 0.4, delay: 0.1 * t },
                              className:
                                "bg-white rounded-2xl p-6 shadow-lg border-2 border-[#F2EAD3] flex flex-col",
                              children: [
                                (0, a.jsx)(o.A, {
                                  className: "w-8 h-8 text-[#F4991A]/30 mb-4",
                                }),
                                (0, a.jsxs)("p", {
                                  className:
                                    "text-[#344F1F]/80 text-sm leading-relaxed mb-6 flex-grow",
                                  children: ['"', e.quote, '"'],
                                }),
                                (0, a.jsx)("div", {
                                  className: "flex gap-1 mb-4",
                                  children: [
                                    void 0,
                                    void 0,
                                    void 0,
                                    void 0,
                                    void 0,
                                  ].map((t, s) =>
                                    (0, a.jsx)(
                                      c.A,
                                      {
                                        className: "w-4 h-4 ".concat(
                                          s < e.rating
                                            ? "text-[#F4991A] fill-[#F4991A]"
                                            : "text-gray-200",
                                        ),
                                      },
                                      s,
                                    ),
                                  ),
                                }),
                                (0, a.jsxs)("div", {
                                  className:
                                    "bg-emerald-50 rounded-lg p-3 mb-4",
                                  children: [
                                    (0, a.jsxs)("div", {
                                      className:
                                        "flex items-center gap-2 text-emerald-700 text-xs font-medium",
                                      children: [
                                        (0, a.jsx)(d.A, {
                                          className: "w-3 h-3",
                                        }),
                                        (0, a.jsx)("span", {
                                          children: e.timeline,
                                        }),
                                      ],
                                    }),
                                    (0, a.jsxs)("p", {
                                      className:
                                        "text-emerald-600 text-sm font-semibold mt-1",
                                      children: ["Offer in ", e.duration],
                                    }),
                                  ],
                                }),
                                (0, a.jsxs)("div", {
                                  className:
                                    "flex items-center gap-3 pt-4 border-t border-[#F2EAD3]",
                                  children: [
                                    (0, a.jsx)("div", {
                                      className:
                                        "w-12 h-12 rounded-full bg-[#F9F5F0] flex items-center justify-center text-lg font-bold text-[#344F1F]",
                                      children: e.name
                                        .split(" ")
                                        .map((e) => e[0])
                                        .join(""),
                                    }),
                                    (0, a.jsxs)("div", {
                                      className: "flex-1",
                                      children: [
                                        (0, a.jsx)("h4", {
                                          className:
                                            "font-semibold text-[#344F1F]",
                                          children: e.name,
                                        }),
                                        (0, a.jsxs)("div", {
                                          className:
                                            "flex items-center gap-1 text-xs text-[#344F1F]/60",
                                          children: [
                                            (0, a.jsx)(x.A, {
                                              className: "w-3 h-3",
                                            }),
                                            (0, a.jsx)("span", {
                                              children: e.country,
                                            }),
                                          ],
                                        }),
                                      ],
                                    }),
                                  ],
                                }),
                                (0, a.jsxs)("div", {
                                  className: "mt-3 bg-[#F9F5F0] rounded-lg p-3",
                                  children: [
                                    (0, a.jsxs)("div", {
                                      className: "flex items-center gap-2",
                                      children: [
                                        (0, a.jsx)(m.A, {
                                          className:
                                            "w-4 h-4 text-[#344F1F]/60",
                                        }),
                                        (0, a.jsxs)("div", {
                                          children: [
                                            (0, a.jsx)("span", {
                                              className:
                                                "text-sm font-semibold text-[#344F1F]",
                                              children: e.company,
                                            }),
                                            (0, a.jsxs)("span", {
                                              className:
                                                "text-xs text-[#344F1F]/60",
                                              children: [" • ", e.city],
                                            }),
                                          ],
                                        }),
                                      ],
                                    }),
                                    (0, a.jsx)("p", {
                                      className:
                                        "text-xs text-[#344F1F]/60 mt-1",
                                      children: e.role,
                                    }),
                                  ],
                                }),
                              ],
                            },
                            t,
                          ),
                        ),
                      },
                      f,
                    ),
                  }),
                  (0, a.jsxs)("div", {
                    className: "flex items-center justify-center gap-4 mt-8",
                    children: [
                      (0, a.jsx)("button", {
                        onClick: () => w((e) => (e - 1 + j) % j),
                        className:
                          "w-10 h-10 rounded-full bg-white border-2 border-[#F2EAD3] flex items-center justify-center hover:bg-[#F9F5F0] transition-colors",
                        "aria-label": "Previous testimonials",
                        children: (0, a.jsx)(h.A, {
                          className: "w-5 h-5 text-[#344F1F]",
                        }),
                      }),
                      (0, a.jsx)("div", {
                        className: "flex gap-2",
                        children: [...Array(j)].map((e, t) =>
                          (0, a.jsx)(
                            "button",
                            {
                              onClick: () => w(t),
                              className:
                                "w-2 h-2 rounded-full transition-all ".concat(
                                  f === t ? "w-6 bg-[#F4991A]" : "bg-[#F2EAD3]",
                                ),
                              "aria-label": "Go to page ".concat(t + 1),
                            },
                            t,
                          ),
                        ),
                      }),
                      (0, a.jsx)("button", {
                        onClick: () => w((e) => (e + 1) % j),
                        className:
                          "w-10 h-10 rounded-full bg-white border-2 border-[#F2EAD3] flex items-center justify-center hover:bg-[#F9F5F0] transition-colors",
                        "aria-label": "Next testimonials",
                        children: (0, a.jsx)(p.A, {
                          className: "w-5 h-5 text-[#344F1F]",
                        }),
                      }),
                    ],
                  }),
                ],
              }),
              (0, a.jsx)(l.P.div, {
                initial: { opacity: 0, y: 20 },
                whileInView: { opacity: 1, y: 0 },
                viewport: { once: !0 },
                transition: { duration: 0.5, delay: 0.3 },
                className: "mt-12 max-w-4xl mx-auto",
                children: (0, a.jsx)("div", {
                  className:
                    "bg-gradient-to-r from-[#344F1F] to-[#2d4219] rounded-2xl p-6 md:p-8",
                  children: (0, a.jsxs)("div", {
                    className:
                      "grid grid-cols-2 md:grid-cols-4 gap-6 text-center text-white",
                    children: [
                      (0, a.jsxs)("div", {
                        children: [
                          (0, a.jsx)("div", {
                            className: "text-3xl md:text-4xl font-bold mb-1",
                            children:
                              (t = s.total_jobs) >= 1e3
                                ? "".concat(Math.floor(t / 1e3), "K+")
                                : "".concat(t, "+"),
                          }),
                          (0, a.jsx)("div", {
                            className: "text-sm text-white/70",
                            children: "Jobs in Database",
                          }),
                        ],
                      }),
                      (0, a.jsxs)("div", {
                        children: [
                          (0, a.jsx)("div", {
                            className: "text-3xl md:text-4xl font-bold mb-1",
                            children: "40+",
                          }),
                          (0, a.jsx)("div", {
                            className: "text-sm text-white/70",
                            children: "Active Students",
                          }),
                        ],
                      }),
                      (0, a.jsxs)("div", {
                        children: [
                          (0, a.jsx)("div", {
                            className: "text-3xl md:text-4xl font-bold mb-1",
                            children: "3-6",
                          }),
                          (0, a.jsx)("div", {
                            className: "text-sm text-white/70",
                            children: "Months to Germany",
                          }),
                        ],
                      }),
                      (0, a.jsxs)("div", {
                        children: [
                          (0, a.jsxs)("div", {
                            className: "text-3xl md:text-4xl font-bold mb-1",
                            children: [s.total_employers, "+"],
                          }),
                          (0, a.jsx)("div", {
                            className: "text-sm text-white/70",
                            children: "Verified Companies",
                          }),
                        ],
                      }),
                    ],
                  }),
                }),
              }),
            ],
          }),
        });
      }
    },
    44565: (e, t, s) => {
      "use strict";
      s.d(t, { ConsultationCTA: () => p });
      var a = s(70207),
        i = s(45748),
        l = s(39441),
        n = s(88117),
        r = s(16148),
        c = s(5101),
        o = s(46031),
        d = s(37426),
        x = s(10542),
        m = s.n(x),
        h = s(81555);
      function p(e) {
        var t;
        let { stats: s } = e,
          x = [
            {
              icon: n.A,
              value:
                (t = s.total_jobs) >= 1e3
                  ? "".concat(Math.floor(t / 1e3).toLocaleString(), "K+")
                  : "".concat(t, "+"),
              label: "Jobs in Database",
            },
            {
              icon: r.A,
              value: "".concat(s.total_employers, "+"),
              label: "Verified Companies",
            },
            { icon: c.A, value: "40+", label: "Active Students" },
          ];
        return (0, a.jsxs)("section", {
          className:
            "py-16 md:py-24 bg-gradient-to-br from-[#344F1F] to-[#2d4219] relative overflow-hidden",
          children: [
            (0, a.jsx)("div", {
              className: "absolute inset-0 opacity-5",
              children: (0, a.jsx)("div", {
                className: "absolute inset-0",
                style: {
                  backgroundImage:
                    "url(\"data:image/svg+xml,%3Csvg width='60' height='60' viewBox='0 0 60 60' xmlns='http://www.w3.org/2000/svg'%3E%3Cg fill='none' fill-rule='evenodd'%3E%3Cg fill='%23ffffff' fill-opacity='1'%3E%3Cpath d='M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E\")",
                },
              }),
            }),
            (0, a.jsx)("div", {
              className: "container mx-auto px-4 relative z-10",
              children: (0, a.jsxs)("div", {
                className: "max-w-4xl mx-auto text-center",
                children: [
                  (0, a.jsxs)(i.P.div, {
                    initial: { opacity: 0, y: 20 },
                    whileInView: { opacity: 1, y: 0 },
                    viewport: { once: !0 },
                    transition: { duration: 0.5 },
                    children: [
                      (0, a.jsx)("div", {
                        className:
                          "inline-flex items-center px-4 py-2 rounded-full bg-[#F4991A]/20 border border-[#F4991A]/30 text-[#F4991A] text-sm font-medium mb-6",
                        children: "Limited to 20 students per intake",
                      }),
                      (0, a.jsxs)("h2", {
                        className:
                          "text-3xl sm:text-4xl md:text-5xl font-bold text-white mb-6 leading-tight",
                        children: [
                          "Your Ausbildung Is Waiting.",
                          (0, a.jsx)("br", {}),
                          (0, a.jsx)("span", {
                            className: "text-[#F4991A]",
                            children: "Let's Get You There.",
                          }),
                        ],
                      }),
                      (0, a.jsx)("p", {
                        className:
                          "text-lg text-white/80 mb-8 max-w-2xl mx-auto",
                        children:
                          "We've placed students at Siemens, BMW, Bosch, and 200+ other German companies. You could be next.",
                      }),
                    ],
                  }),
                  (0, a.jsx)(i.P.div, {
                    initial: { opacity: 0, y: 20 },
                    whileInView: { opacity: 1, y: 0 },
                    viewport: { once: !0 },
                    transition: { duration: 0.5, delay: 0.2 },
                    className:
                      "grid grid-cols-3 gap-4 md:gap-6 mb-10 max-w-xl mx-auto",
                    children: x.map((e, t) =>
                      (0, a.jsxs)(
                        "div",
                        {
                          className:
                            "bg-white/10 backdrop-blur-sm rounded-xl p-4 border border-white/10",
                          children: [
                            (0, a.jsx)(e.icon, {
                              className: "w-5 h-5 text-white/70 mx-auto mb-2",
                            }),
                            (0, a.jsx)("div", {
                              className:
                                "text-xl md:text-2xl font-bold text-white mb-1",
                              children: e.value,
                            }),
                            (0, a.jsx)("div", {
                              className: "text-xs text-white/60",
                              children: e.label,
                            }),
                          ],
                        },
                        t,
                      ),
                    ),
                  }),
                  (0, a.jsxs)(i.P.div, {
                    initial: { opacity: 0, y: 20 },
                    whileInView: { opacity: 1, y: 0 },
                    viewport: { once: !0 },
                    transition: { duration: 0.5, delay: 0.3 },
                    className: "flex flex-col items-center gap-3 mb-10",
                    children: [
                      (0, a.jsxs)("div", {
                        className: "flex -space-x-3",
                        children: [
                          h.T.slice(0, 4).map((e, t) =>
                            (0, a.jsx)(
                              "div",
                              {
                                className:
                                  "w-10 h-10 rounded-full border-2 border-[#344F1F] overflow-hidden",
                                children: (0, a.jsx)("img", {
                                  src: e,
                                  alt: "",
                                  className: "w-full h-full object-cover",
                                  loading: "lazy",
                                }),
                              },
                              t,
                            ),
                          ),
                          (0, a.jsx)("div", {
                            className:
                              "w-10 h-10 rounded-full border-2 border-[#344F1F] bg-[#F4991A] flex items-center justify-center",
                            children: (0, a.jsx)("span", {
                              className: "text-xs font-bold text-white",
                              children: "40+",
                            }),
                          }),
                        ],
                      }),
                      (0, a.jsx)("p", {
                        className: "text-white/70 text-sm",
                        children: "Students currently enrolled in our program",
                      }),
                    ],
                  }),
                  (0, a.jsxs)(i.P.div, {
                    initial: { opacity: 0, y: 20 },
                    whileInView: { opacity: 1, y: 0 },
                    viewport: { once: !0 },
                    transition: { duration: 0.5, delay: 0.4 },
                    className:
                      "flex flex-col sm:flex-row gap-4 justify-center mb-8",
                    children: [
                      (0, a.jsx)(l.$, {
                        size: "lg",
                        className:
                          "bg-[#F4991A] hover:bg-[#e08a15] text-white rounded-full px-8 py-6 text-lg font-semibold transition-all hover:shadow-xl hover:-translate-y-1",
                        asChild: !0,
                        children: (0, a.jsxs)(m(), {
                          href: "#pricing",
                          children: [
                            "View Packages",
                            (0, a.jsx)(o.A, { className: "w-5 h-5 ml-2" }),
                          ],
                        }),
                      }),
                      (0, a.jsx)(l.$, {
                        size: "lg",
                        variant: "outline",
                        className:
                          "border-2 border-white/30 text-white hover:bg-white/10 hover:text-white rounded-full px-8 py-6 text-lg font-semibold transition-all",
                        asChild: !0,
                        children: (0, a.jsx)("a", {
                          href: "mailto:support@azubi.ma",
                          children: "Ask a Question",
                        }),
                      }),
                    ],
                  }),
                  (0, a.jsx)(i.P.div, {
                    initial: { opacity: 0 },
                    whileInView: { opacity: 1 },
                    viewport: { once: !0 },
                    transition: { duration: 0.5, delay: 0.5 },
                    className:
                      "flex flex-wrap items-center justify-center gap-4 text-sm text-white/60",
                    children: (0, a.jsxs)("div", {
                      className: "flex items-center gap-2",
                      children: [
                        (0, a.jsx)(d.A, {
                          className: "w-4 h-4 text-emerald-400",
                        }),
                        (0, a.jsx)("span", {
                          children:
                            "Success fee only when you receive an offer",
                        }),
                      ],
                    }),
                  }),
                  (0, a.jsxs)(i.P.div, {
                    initial: { opacity: 0, y: 20 },
                    whileInView: { opacity: 1, y: 0 },
                    viewport: { once: !0 },
                    transition: { duration: 0.5, delay: 0.6 },
                    className:
                      "mt-12 bg-white/10 backdrop-blur-sm rounded-2xl p-6 md:p-8 border border-white/10",
                    children: [
                      (0, a.jsx)("p", {
                        className: "text-white/80 text-sm mb-4",
                        children: "What you get for your investment:",
                      }),
                      (0, a.jsxs)("div", {
                        className: "grid md:grid-cols-3 gap-6 text-center",
                        children: [
                          (0, a.jsxs)("div", {
                            children: [
                              (0, a.jsx)("div", {
                                className: "text-2xl font-bold text-white mb-1",
                                children: "Tailored",
                              }),
                              (0, a.jsx)("div", {
                                className: "text-white/60 text-sm",
                                children: "Applications for your profile",
                              }),
                            ],
                          }),
                          (0, a.jsxs)("div", {
                            children: [
                              (0, a.jsx)("div", {
                                className: "text-2xl font-bold text-white mb-1",
                                children: "Native German",
                              }),
                              (0, a.jsx)("div", {
                                className: "text-white/60 text-sm",
                                children: "Cover letters written",
                              }),
                            ],
                          }),
                          (0, a.jsxs)("div", {
                            children: [
                              (0, a.jsx)("div", {
                                className: "text-2xl font-bold text-white mb-1",
                                children: "1-on-1",
                              }),
                              (0, a.jsx)("div", {
                                className: "text-white/60 text-sm",
                                children: "Interview preparation",
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
          ],
        });
      }
    },
    67755: (e, t, s) => {
      "use strict";
      s.d(t, { ConsultationFAQ: () => x });
      var a = s(70207),
        i = s(87223),
        l = s(45748),
        n = s(54459),
        r = s(47161),
        c = s(51613),
        o = s(82110);
      let d = [
        {
          question: "What if I don't get any offers?",
          answer:
            "We extend your validity by 1 intake (6 months) at no extra cost. Our success rate is high because we only accept students whose profiles match what German employers want - if we take you on, we're confident we can place you.",
        },
        {
          question: "How do you apply on my behalf?",
          answer:
            "We use the application portals just like you would. You give us profile access (or we create accounts with your credentials), we submit applications with your documents. Every application is tracked in your real-time dashboard - you see exactly when and where we applied.",
        },
        {
          question: "What's the process timeline?",
          answer:
            "Most students receive their first interview calls within 4-8 weeks of enrollment. The full journey from enrollment to Germany typically takes 3-6 months depending on visa processing times.",
        },
        {
          question: "Do I need to know German?",
          answer:
            "Minimum A2 level is recommended, B1 is preferred. We write your cover letters in perfect German, but you'll need basic German for interviews. If your German level is low, we may recommend focusing on language learning before enrolling.",
        },
        {
          question: "What happens after I get an offer?",
          answer:
            "You accept the offer, pay the success fee, and we help you with: blocked account setup, health insurance selection, visa application, and pre-departure preparation. Premium students get full visa support including appointment booking.",
        },
        {
          question: "Can I choose which companies you apply to?",
          answer:
            "Yes! You set preferences (sectors, cities, company size). We shortlist matches based on your profile and preferences, and you can approve or reject each company before we apply. You're always in control.",
        },
        {
          question: "What's included in the advance payment?",
          answer:
            "The advance covers: profile assessment, document preparation (CV, cover letters), access to our platform and dashboard, and initial job matching. It shows your commitment and allows us to begin work immediately.",
        },
        {
          question: "When do I pay the success fee?",
          answer:
            "The success fee is due after you receive and accept an Ausbildung contract. We only succeed when you succeed - that's why it's called a success fee. You'll have time to review the offer before payment.",
        },
        {
          question: "Can I cancel after enrolling?",
          answer:
            "The advance payment is non-refundable as it covers your personalized profile assessment, company research, and initial application preparation - work that begins immediately after enrollment. However, the success fee is only charged when you receive a confirmed offer. This structure ensures we're fully invested in your success.",
        },
      ];
      function x() {
        let [e, t] = (0, i.useState)(0),
          s = (s) => {
            t(e === s ? null : s);
          };
        return (0, a.jsx)("section", {
          className: "py-16 md:py-24 bg-white",
          children: (0, a.jsxs)("div", {
            className: "container mx-auto px-4",
            children: [
              (0, a.jsxs)(l.P.div, {
                initial: { opacity: 0, y: 20 },
                whileInView: { opacity: 1, y: 0 },
                viewport: { once: !0 },
                transition: { duration: 0.5 },
                className: "text-center mb-12",
                children: [
                  (0, a.jsxs)("div", {
                    className:
                      "inline-flex items-center gap-2 px-4 py-2 rounded-full bg-[#F9F5F0] border border-[#F2EAD3] mb-4",
                    children: [
                      (0, a.jsx)(r.A, { className: "w-4 h-4 text-[#F4991A]" }),
                      (0, a.jsx)("span", {
                        className: "text-sm font-medium text-[#344F1F]",
                        children: "Common Questions",
                      }),
                    ],
                  }),
                  (0, a.jsx)("h2", {
                    className:
                      "text-3xl md:text-4xl lg:text-5xl font-bold mb-4 text-[#344F1F]",
                    children: "Frequently Asked Questions",
                  }),
                  (0, a.jsx)("p", {
                    className: "text-lg text-[#344F1F]/70 max-w-2xl mx-auto",
                    children:
                      "Everything you need to know about our Consultation service",
                  }),
                ],
              }),
              (0, a.jsx)("div", {
                className: "max-w-3xl mx-auto space-y-4",
                children: d.map((t, i) =>
                  (0, a.jsxs)(
                    l.P.article,
                    {
                      initial: { opacity: 0, y: 20 },
                      whileInView: { opacity: 1, y: 0 },
                      viewport: { once: !0 },
                      transition: { duration: 0.3, delay: 0.05 * i },
                      className: (0, o.cn)(
                        "rounded-xl border-2 overflow-hidden transition-all duration-300",
                        e === i
                          ? "border-[#F4991A]/50 bg-[#F4991A]/5"
                          : "border-[#F2EAD3] bg-white hover:border-[#F4991A]/30",
                      ),
                      children: [
                        (0, a.jsxs)("button", {
                          onClick: () => s(i),
                          className:
                            "w-full p-5 md:p-6 flex items-center justify-between gap-4 text-left",
                          "aria-expanded": e === i,
                          children: [
                            (0, a.jsx)("h3", {
                              className:
                                "text-base md:text-lg font-semibold text-[#344F1F] pr-4",
                              children: t.question,
                            }),
                            (0, a.jsx)("div", {
                              className: (0, o.cn)(
                                "flex-shrink-0 w-8 h-8 rounded-full flex items-center justify-center transition-all duration-300",
                                e === i
                                  ? "bg-[#F4991A] rotate-180"
                                  : "bg-[#F9F5F0]",
                              ),
                              children: (0, a.jsx)(c.A, {
                                className: (0, o.cn)(
                                  "w-5 h-5 transition-colors",
                                  e === i ? "text-white" : "text-[#344F1F]",
                                ),
                              }),
                            }),
                          ],
                        }),
                        (0, a.jsx)(n.N, {
                          children:
                            e === i &&
                            (0, a.jsx)(l.P.div, {
                              initial: { height: 0, opacity: 0 },
                              animate: { height: "auto", opacity: 1 },
                              exit: { height: 0, opacity: 0 },
                              transition: { duration: 0.3, ease: "easeInOut" },
                              className: "overflow-hidden",
                              children: (0, a.jsx)("div", {
                                className: "px-5 md:px-6 pb-5 md:pb-6",
                                children: (0, a.jsx)("p", {
                                  className:
                                    "text-[#344F1F]/70 leading-relaxed",
                                  children: t.answer,
                                }),
                              }),
                            }),
                        }),
                      ],
                    },
                    i,
                  ),
                ),
              }),
              (0, a.jsx)(l.P.div, {
                initial: { opacity: 0, y: 20 },
                whileInView: { opacity: 1, y: 0 },
                viewport: { once: !0 },
                transition: { duration: 0.5, delay: 0.4 },
                className: "mt-12 text-center",
                children: (0, a.jsxs)("div", {
                  className:
                    "inline-flex flex-col sm:flex-row items-center gap-3 bg-[#F9F5F0] rounded-xl p-6",
                  children: [
                    (0, a.jsx)("p", {
                      className: "text-[#344F1F] font-medium",
                      children: "Still have questions?",
                    }),
                    (0, a.jsx)("a", {
                      href: "mailto:support@azubi.ma",
                      className:
                        "px-6 py-2 bg-[#344F1F] text-white rounded-full font-medium hover:bg-[#2d4219] transition-colors",
                      children: "Contact Us",
                    }),
                  ],
                }),
              }),
            ],
          }),
        });
      }
    },
    68003: (e, t, s) => {
      "use strict";
      s.d(t, { ConsultationPaymentStatus: () => f });
      var a = s(70207),
        i = s(87223),
        l = s(18051),
        n = s(54459),
        r = s(45748),
        c = s(39945),
        o = s(42678),
        d = s(95540),
        x = s(18790),
        m = s(46031),
        h = s(39441),
        p = s(10542),
        u = s.n(p);
      function f() {
        let e = (0, l.useSearchParams)(),
          [t, s] = (0, i.useState)(!1),
          [p, f] = (0, i.useState)(null);
        (0, i.useEffect)(() => {
          let t = "true" === e.get("consultation_success"),
            a = "true" === e.get("canceled");
          t ? (f("success"), s(!0)) : a && (f("canceled"), s(!0));
        }, [e]);
        let w = () => {
          s(!1);
          let e = new URL(window.location.href);
          (e.searchParams.delete("consultation_success"),
            e.searchParams.delete("canceled"),
            window.history.replaceState({}, "", e.pathname));
        };
        return t
          ? (0, a.jsx)(n.N, {
              children:
                t &&
                (0, a.jsx)(r.P.div, {
                  initial: { opacity: 0 },
                  animate: { opacity: 1 },
                  exit: { opacity: 0 },
                  className:
                    "fixed inset-0 z-50 flex items-center justify-center p-4 bg-black/60 backdrop-blur-sm",
                  onClick: w,
                  children: (0, a.jsxs)(r.P.div, {
                    initial: { scale: 0.9, opacity: 0, y: 20 },
                    animate: { scale: 1, opacity: 1, y: 0 },
                    exit: { scale: 0.9, opacity: 0, y: 20 },
                    transition: { type: "spring", duration: 0.5 },
                    className:
                      "relative max-w-md w-full bg-white rounded-2xl shadow-2xl p-8 text-center",
                    onClick: (e) => e.stopPropagation(),
                    children: [
                      (0, a.jsx)("button", {
                        onClick: w,
                        className:
                          "absolute top-4 right-4 p-2 rounded-full hover:bg-gray-100 transition-colors",
                        "aria-label": "Close",
                        children: (0, a.jsx)(c.A, {
                          className: "w-5 h-5 text-gray-500",
                        }),
                      }),
                      "success" === p
                        ? (0, a.jsxs)(a.Fragment, {
                            children: [
                              (0, a.jsx)(r.P.div, {
                                initial: { scale: 0 },
                                animate: { scale: 1 },
                                transition: { type: "spring", delay: 0.2 },
                                className:
                                  "w-20 h-20 mx-auto mb-6 bg-emerald-100 rounded-full flex items-center justify-center",
                                children: (0, a.jsx)(o.A, {
                                  className: "w-12 h-12 text-emerald-500",
                                }),
                              }),
                              (0, a.jsx)("h2", {
                                className:
                                  "text-2xl font-bold text-[#344F1F] mb-3",
                                children: "Payment Successful!",
                              }),
                              (0, a.jsx)("p", {
                                className: "text-gray-600 mb-6",
                                children:
                                  "Welcome to Azubi Consultation! Your enrollment is confirmed and our team will contact you within 24-48 hours.",
                              }),
                              (0, a.jsxs)("div", {
                                className:
                                  "bg-[#F9F5F0] rounded-xl p-4 mb-6 flex items-center gap-3 text-left",
                                children: [
                                  (0, a.jsx)("div", {
                                    className:
                                      "w-10 h-10 bg-[#F4991A]/20 rounded-full flex items-center justify-center flex-shrink-0",
                                    children: (0, a.jsx)(d.A, {
                                      className: "w-5 h-5 text-[#F4991A]",
                                    }),
                                  }),
                                  (0, a.jsxs)("div", {
                                    children: [
                                      (0, a.jsx)("p", {
                                        className:
                                          "text-sm font-medium text-[#344F1F]",
                                        children: "Check your inbox",
                                      }),
                                      (0, a.jsx)("p", {
                                        className: "text-xs text-[#344F1F]/60",
                                        children:
                                          "We've sent a confirmation email with next steps",
                                      }),
                                    ],
                                  }),
                                ],
                              }),
                              (0, a.jsxs)("div", {
                                className: "text-left mb-6",
                                children: [
                                  (0, a.jsx)("h3", {
                                    className:
                                      "text-sm font-semibold text-[#344F1F] mb-3",
                                    children: "What happens next:",
                                  }),
                                  (0, a.jsxs)("ul", {
                                    className:
                                      "space-y-2 text-sm text-gray-600",
                                    children: [
                                      (0, a.jsxs)("li", {
                                        className: "flex items-start gap-2",
                                        children: [
                                          (0, a.jsx)("span", {
                                            className:
                                              "w-5 h-5 bg-[#344F1F] text-white rounded-full flex items-center justify-center flex-shrink-0 text-xs mt-0.5",
                                            children: "1",
                                          }),
                                          (0, a.jsx)("span", {
                                            children:
                                              "Our team reviews your profile (24-48 hours)",
                                          }),
                                        ],
                                      }),
                                      (0, a.jsxs)("li", {
                                        className: "flex items-start gap-2",
                                        children: [
                                          (0, a.jsx)("span", {
                                            className:
                                              "w-5 h-5 bg-[#344F1F] text-white rounded-full flex items-center justify-center flex-shrink-0 text-xs mt-0.5",
                                            children: "2",
                                          }),
                                          (0, a.jsx)("span", {
                                            children:
                                              "We schedule your onboarding call",
                                          }),
                                        ],
                                      }),
                                      (0, a.jsxs)("li", {
                                        className: "flex items-start gap-2",
                                        children: [
                                          (0, a.jsx)("span", {
                                            className:
                                              "w-5 h-5 bg-[#344F1F] text-white rounded-full flex items-center justify-center flex-shrink-0 text-xs mt-0.5",
                                            children: "3",
                                          }),
                                          (0, a.jsx)("span", {
                                            children:
                                              "We start applying to companies for you",
                                          }),
                                        ],
                                      }),
                                    ],
                                  }),
                                ],
                              }),
                              (0, a.jsx)(h.$, {
                                onClick: w,
                                className:
                                  "w-full bg-[#344F1F] hover:bg-[#2d4219] text-white rounded-full py-6",
                                children: "Got it, thanks!",
                              }),
                            ],
                          })
                        : (0, a.jsxs)(a.Fragment, {
                            children: [
                              (0, a.jsx)(r.P.div, {
                                initial: { scale: 0 },
                                animate: { scale: 1 },
                                transition: { type: "spring", delay: 0.2 },
                                className:
                                  "w-20 h-20 mx-auto mb-6 bg-gray-100 rounded-full flex items-center justify-center",
                                children: (0, a.jsx)(x.A, {
                                  className: "w-12 h-12 text-gray-400",
                                }),
                              }),
                              (0, a.jsx)("h2", {
                                className:
                                  "text-2xl font-bold text-[#344F1F] mb-3",
                                children: "Payment Canceled",
                              }),
                              (0, a.jsx)("p", {
                                className: "text-gray-600 mb-6",
                                children:
                                  "No worries! Your payment was not processed. You can try again when you're ready or contact us if you have questions.",
                              }),
                              (0, a.jsx)("div", {
                                className:
                                  "bg-[#F9F5F0] rounded-xl p-4 mb-6 text-left",
                                children: (0, a.jsxs)("p", {
                                  className: "text-sm text-[#344F1F]/80",
                                  children: [
                                    (0, a.jsx)("strong", {
                                      children: "Questions?",
                                    }),
                                    " Contact us at",
                                    " ",
                                    (0, a.jsx)("a", {
                                      href: "mailto:support@azubi.ma",
                                      className:
                                        "text-[#F4991A] hover:underline",
                                      children: "support@azubi.ma",
                                    }),
                                  ],
                                }),
                              }),
                              (0, a.jsxs)("div", {
                                className: "flex gap-3",
                                children: [
                                  (0, a.jsx)(h.$, {
                                    variant: "outline",
                                    onClick: w,
                                    className:
                                      "flex-1 rounded-full border-2 border-[#344F1F] text-[#344F1F] hover:bg-[#344F1F] hover:text-white py-6",
                                    children: "Maybe Later",
                                  }),
                                  (0, a.jsx)(h.$, {
                                    asChild: !0,
                                    className:
                                      "flex-1 bg-[#F4991A] hover:bg-[#e08a15] text-white rounded-full py-6",
                                    children: (0, a.jsxs)(u(), {
                                      href: "#pricing",
                                      children: [
                                        "Try Again",
                                        (0, a.jsx)(m.A, {
                                          className: "w-4 h-4 ml-2",
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
                }),
            })
          : null;
      }
    },
    75189: (e, t, s) => {
      "use strict";
      s.d(t, { ConsultationHero: () => c });
      var a = s(70207),
        i = s(16148),
        l = s(28131),
        n = s(59623),
        r = s(81555);
      function c() {
        return (0, a.jsx)("section", {
          className:
            "relative w-full overflow-hidden bg-[#F9F5F0] pt-4 pb-8 sm:pt-6 sm:pb-12 md:pt-8 md:pb-16",
          "aria-label": "Apply For Me service hero section",
          children: (0, a.jsx)("div", {
            className: "container mx-auto px-4 lg:px-6",
            children: (0, a.jsxs)("div", {
              className:
                "relative overflow-hidden rounded-2xl sm:rounded-3xl shadow-xl",
              children: [
                (0, a.jsxs)("div", {
                  className: "absolute inset-0",
                  children: [
                    (0, a.jsx)("img", {
                      src: "/images/hero-background-germany-natural-autumn.webp",
                      alt: "Azubi Apply For Me Service",
                      className: "w-full h-full object-cover",
                      loading: "eager",
                      fetchPriority: "high",
                      width: 1920,
                      height: 1080,
                    }),
                    (0, a.jsx)("div", {
                      className: "absolute inset-0 bg-black/50",
                    }),
                    (0, a.jsx)("div", {
                      className: "absolute inset-0",
                      style: {
                        background:
                          "\n                  radial-gradient(ellipse at center, transparent 0%, transparent 40%, rgba(0,0,0,0.3) 100%),\n                  linear-gradient(to top, rgba(0,0,0,0.4) 0%, transparent 30%)\n                ",
                      },
                    }),
                  ],
                }),
                (0, a.jsxs)("div", {
                  className:
                    "relative z-10 px-6 py-12 sm:px-8 sm:py-16 md:px-12 md:py-24 text-center",
                  children: [
                    (0, a.jsx)("div", {
                      className: "flex justify-center mb-4 sm:mb-6",
                      children: (0, a.jsxs)("div", {
                        className:
                          "inline-flex items-center px-4 py-2 rounded-full bg-emerald-500/20 border border-emerald-400/30 backdrop-blur-sm text-emerald-100 text-sm font-medium",
                        children: [
                          (0, a.jsx)(i.A, { className: "w-4 h-4 mr-2" }),
                          "Partnered with 200+ German Employers",
                        ],
                      }),
                    }),
                    (0, a.jsxs)("h1", {
                      className:
                        "text-3xl sm:text-4xl md:text-5xl lg:text-6xl font-bold text-white mb-4 sm:mb-6 leading-tight drop-shadow-2xl max-w-4xl mx-auto",
                      children: [
                        "Get Your Ausbildung Offer.",
                        (0, a.jsx)("br", {}),
                        (0, a.jsx)("span", {
                          className: "text-[#F4991A]",
                          children: "We Handle Everything.",
                        }),
                      ],
                    }),
                    (0, a.jsx)("p", {
                      className:
                        "text-base sm:text-lg md:text-xl text-white/90 mb-6 max-w-2xl mx-auto font-medium leading-relaxed drop-shadow-lg",
                      children:
                        "Our German HR experts write native-level applications and submit directly to employers who actively hire internationals. You focus on German — we get you interviews.",
                    }),
                    (0, a.jsxs)("div", {
                      className:
                        "flex flex-wrap items-center justify-center gap-3 mb-8 text-white",
                      children: [
                        (0, a.jsxs)("div", {
                          className:
                            "flex items-center gap-2 bg-white/10 backdrop-blur-sm px-4 py-2 rounded-full border border-white/20",
                          children: [
                            (0, a.jsx)(i.A, { className: "w-4 h-4" }),
                            (0, a.jsx)("span", {
                              className: "text-sm font-medium",
                              children: "Direct Employer Access",
                            }),
                          ],
                        }),
                        (0, a.jsxs)("div", {
                          className:
                            "flex items-center gap-2 bg-white/10 backdrop-blur-sm px-4 py-2 rounded-full border border-white/20",
                          children: [
                            (0, a.jsx)(l.A, { className: "w-4 h-4" }),
                            (0, a.jsx)("span", {
                              className: "text-sm font-medium",
                              children: "3-4 Month Timeline",
                            }),
                          ],
                        }),
                        (0, a.jsxs)("div", {
                          className:
                            "flex items-center gap-2 bg-emerald-500/20 backdrop-blur-sm px-4 py-2 rounded-full border border-emerald-400/30",
                          children: [
                            (0, a.jsx)(n.A, {
                              className: "w-4 h-4 text-emerald-300",
                            }),
                            (0, a.jsx)("span", {
                              className: "text-sm font-medium text-emerald-100",
                              children: "Pay Only on Offer",
                            }),
                          ],
                        }),
                      ],
                    }),
                    (0, a.jsxs)("div", {
                      className: "flex flex-col items-center gap-2 mb-8",
                      role: "group",
                      "aria-label": "Social proof",
                      children: [
                        (0, a.jsxs)("div", {
                          className: "flex -space-x-3",
                          children: [
                            r.T.slice(0, 4).map((e, t) =>
                              (0, a.jsx)(
                                "div",
                                {
                                  className:
                                    "relative w-10 h-10 sm:w-11 sm:h-11 rounded-full border-2 border-white overflow-hidden",
                                  children: (0, a.jsx)("img", {
                                    src: e,
                                    alt: "",
                                    className: "w-full h-full object-cover",
                                    loading: "lazy",
                                    width: 44,
                                    height: 44,
                                  }),
                                },
                                t,
                              ),
                            ),
                            (0, a.jsx)("div", {
                              className:
                                "relative w-10 h-10 sm:w-11 sm:h-11 rounded-full border-2 border-white bg-[#344F1F] flex items-center justify-center",
                              children: (0, a.jsx)("span", {
                                className: "text-xs font-bold text-white",
                                children: "40+",
                              }),
                            }),
                          ],
                        }),
                        (0, a.jsxs)("p", {
                          className: "text-sm text-white/70",
                          children: [
                            "Students placed at ",
                            (0, a.jsx)("span", {
                              className: "text-white font-medium",
                              children: "Siemens, BMW, Bosch, Deutsche Bahn",
                            }),
                            " & more",
                          ],
                        }),
                      ],
                    }),
                    (0, a.jsxs)("div", {
                      className:
                        "flex flex-col sm:flex-row gap-3 sm:gap-4 justify-center max-w-lg mx-auto",
                      children: [
                        (0, a.jsx)("a", {
                          href: "#pricing",
                          className: "inline-block flex-1",
                          children: (0, a.jsx)("button", {
                            className:
                              "w-full bg-[#F4991A] hover:bg-[#e08a15] text-white rounded-full text-base sm:text-lg px-8 sm:px-10 py-3 sm:py-4 font-semibold transition-all shadow-lg hover:shadow-xl hover:-translate-y-1",
                            children: "See How It Works",
                          }),
                        }),
                        (0, a.jsx)("a", {
                          href: "#pricing",
                          className: "inline-block flex-1",
                          children: (0, a.jsx)("button", {
                            className:
                              "w-full border-2 border-white/60 hover:border-white text-white hover:bg-white/10 backdrop-blur-sm rounded-full text-base sm:text-lg px-8 sm:px-10 py-3 sm:py-4 font-semibold transition-all",
                            children: "View Pricing",
                          }),
                        }),
                      ],
                    }),
                    (0, a.jsx)("p", {
                      className: "mt-6 text-sm text-white/60",
                      children:
                        "Native German writers  •  Direct employer relationships  •  Full visa support",
                    }),
                  ],
                }),
              ],
            }),
          }),
        });
      }
    },
    75594: (e, t, s) => {
      "use strict";
      s.d(t, { ConsultationPricingCards: () => v });
      var a = s(70207),
        i = s(87223),
        l = s(45748),
        n = s(54459),
        r = s(17802),
        c = s(39441),
        o = s(40167),
        d = s(79024),
        x = s(51105),
        m = s(46031),
        h = s(31159),
        p = s(87858),
        u = s(75281),
        f = s(15954),
        w = s(50488),
        j = s(54604);
      let b = (e) => [
          "Unlimited access to ".concat(
            (function (e) {
              let t = 1e3 * Math.floor(e / 1e3);
              return new Intl.NumberFormat("en-US").format(t) + "+";
            })(e),
            " jobs",
          ),
          "Unlimited AI application kits",
          "Unlimited CV exports",
          "Full German learning tools",
          "AI job match recommendations",
          "Interview prep question bank",
        ],
        g = [
          "30+ expert applications submitted for you",
          "Native-level German cover letters",
          "Real-time application tracking",
          "Dedicated personal counselor",
          "Mock interview preparation",
          "Full visa guidance & support",
          "12-month validity (2 intakes)",
        ];
      function v(e) {
        let { stats: t } = e,
          { currency: s, setCurrency: v } = (0, p.H)(),
          [y, N] = (0, i.useState)(!1),
          [F, A] = (0, i.useState)(null),
          [k, C] = (0, i.useState)(""),
          { toast: P } = (0, w.dj)(),
          I = (0, j.createClientComponentClient)(),
          S = b(t.total_jobs);
        (0, i.useEffect)(() => {
          (async () => {
            let {
              data: { session: e },
            } = await I.auth.getSession();
            A(!!e);
          })();
        }, [I.auth]);
        let M = s.applyForMe.standard,
          E = (e) => {
            let t = (0, u.fA)(e, s);
            return new Intl.NumberFormat(s.locale, {
              maximumFractionDigits: s.decimals,
              minimumFractionDigits: 0,
            }).format(t);
          },
          G = async () => {
            if (!F && !k) {
              P({
                variant: "destructive",
                title: "Email required",
                description: "Please enter your email to continue.",
              });
              return;
            }
            if (!F && k && !k.match(/^[^\s@]+@[^\s@]+\.[^\s@]+$/)) {
              P({
                variant: "destructive",
                title: "Invalid email",
                description: "Please enter a valid email address.",
              });
              return;
            }
            N(!0);
            try {
              let e = await fetch("/api/consultation/checkout", {
                  method: "POST",
                  headers: { "Content-Type": "application/json" },
                  body: JSON.stringify({
                    currency: s.stripeCode,
                    email: F ? void 0 : k,
                  }),
                }),
                t = await e.json();
              if (!e.ok) {
                if (404 === e.status) {
                  (P({
                    title: "Complete your profile first",
                    description:
                      "Please complete your profile before proceeding.",
                  }),
                    setTimeout(() => {
                      window.location.href =
                        "/dashboard/profile?complete=true&redirect=/consultation";
                    }, 1500));
                  return;
                }
                if (503 === e.status) {
                  P({
                    variant: "destructive",
                    title: "Service temporarily unavailable",
                    description:
                      t.error ||
                      "Payment service is temporarily unavailable. Please try again in a few minutes.",
                  });
                  return;
                }
                P({
                  variant: "destructive",
                  title: "Unable to proceed",
                  description:
                    t.error ||
                    "Something went wrong. Please try again or contact support.",
                });
                return;
              }
              t.url
                ? (window.location.href = t.url)
                : P({
                    variant: "destructive",
                    title: "Checkout error",
                    description:
                      "Unable to create checkout session. Please try again.",
                  });
            } catch (e) {
              (console.error("Error creating checkout:", e),
                P({
                  variant: "destructive",
                  title: "Connection error",
                  description:
                    "Failed to connect to payment service. Please check your internet connection and try again.",
                }));
            } finally {
              N(!1);
            }
          };
        return (0, a.jsx)("section", {
          className: "py-16 md:py-24 bg-[#F9F5F0]",
          id: "pricing",
          children: (0, a.jsxs)("div", {
            className: "container mx-auto px-4",
            children: [
              (0, a.jsxs)(l.P.div, {
                initial: { opacity: 0, y: 20 },
                whileInView: { opacity: 1, y: 0 },
                viewport: { once: !0 },
                transition: { duration: 0.5 },
                className: "text-center mb-12",
                children: [
                  (0, a.jsxs)(r.E, {
                    className:
                      "mb-4 bg-emerald-100 text-emerald-700 border-emerald-200 hover:bg-emerald-200",
                    children: [
                      (0, a.jsx)(d.A, { className: "w-3 h-3 mr-1" }),
                      "Limited Spots Each Intake",
                    ],
                  }),
                  (0, a.jsx)("h2", {
                    id: "pricing-heading",
                    className:
                      "text-3xl md:text-4xl lg:text-5xl font-bold mb-4 text-[#344F1F]",
                    children: "Two Ways to Get to Germany",
                  }),
                  (0, a.jsx)("p", {
                    className: "text-lg text-[#344F1F]/70 max-w-2xl mx-auto",
                    children:
                      "DIY students apply to 50+ positions and wait 6+ months. Our clients get offers in 3-4 months with expert support.",
                  }),
                  (0, a.jsxs)("div", {
                    className: "mt-4 flex items-center justify-center gap-2",
                    children: [
                      (0, a.jsx)("span", {
                        className: "text-sm text-[#344F1F]/60",
                        children: "Prices in:",
                      }),
                      (0, a.jsx)(f.k, {
                        value: s.code,
                        onChange: v,
                        className: "w-[100px]",
                      }),
                    ],
                  }),
                ],
              }),
              (0, a.jsxs)("div", {
                className: "grid md:grid-cols-2 gap-6 max-w-5xl mx-auto",
                children: [
                  (0, a.jsx)(l.P.div, {
                    initial: { opacity: 0, y: 20 },
                    whileInView: { opacity: 1, y: 0 },
                    viewport: { once: !0 },
                    transition: { duration: 0.5, delay: 0.1 },
                    className:
                      "rounded-[32px] p-3 bg-white border border-black/10 flex flex-col",
                    children: (0, a.jsxs)("div", {
                      className:
                        "rounded-[20px] p-6 md:p-8 bg-[#F5F5F5] flex-1 flex flex-col",
                      children: [
                        (0, a.jsxs)("div", {
                          className: "mb-6",
                          children: [
                            (0, a.jsx)("div", {
                              className: "flex items-end justify-between mb-2",
                              style: { minHeight: "44px" },
                              children: (0, a.jsx)("h3", {
                                className: "text-2xl font-bold text-[#344F1F]",
                                children: "Free (DIY)",
                              }),
                            }),
                            (0, a.jsx)("p", {
                              className: "text-[#344F1F]/60 mb-4",
                              children: "Apply yourself with AI tools",
                            }),
                            (0, a.jsxs)("div", {
                              className: "flex items-baseline gap-2",
                              children: [
                                (0, a.jsxs)("span", {
                                  className:
                                    "text-4xl font-bold text-[#344F1F]",
                                  children: [s.symbol, "0"],
                                }),
                                (0, a.jsx)("span", {
                                  className: "text-[#344F1F]/60",
                                  children: "/forever",
                                }),
                              ],
                            }),
                            (0, a.jsx)("p", {
                              className: "text-sm mt-2 h-5 text-[#344F1F]/50",
                              children: "No credit card required",
                            }),
                          ],
                        }),
                        (0, a.jsx)("div", {
                          className: "space-y-3 mb-6 flex-grow",
                          children: S.map((e, t) =>
                            (0, a.jsxs)(
                              "div",
                              {
                                className: "flex items-start gap-3",
                                children: [
                                  (0, a.jsx)("div", {
                                    className:
                                      "flex-shrink-0 w-5 h-5 rounded-full flex items-center justify-center mt-0.5 bg-[#344F1F]/10",
                                    children: (0, a.jsx)(x.A, {
                                      className: "w-3 h-3 text-[#344F1F]",
                                    }),
                                  }),
                                  (0, a.jsx)("span", {
                                    className: "text-sm text-[#344F1F]/80",
                                    children: e,
                                  }),
                                ],
                              },
                              t,
                            ),
                          ),
                        }),
                        (0, a.jsxs)(c.$, {
                          variant: "outline",
                          className:
                            "w-full rounded-full border-2 border-[#344F1F] text-[#344F1F] hover:bg-[#344F1F] hover:text-white transition-all py-6",
                          onClick: () => (window.location.href = "/auth"),
                          children: [
                            "Get Started Free",
                            (0, a.jsx)(m.A, { className: "w-4 h-4 ml-2" }),
                          ],
                        }),
                      ],
                    }),
                  }),
                  (0, a.jsxs)(l.P.div, {
                    initial: { opacity: 0, y: 20 },
                    whileInView: { opacity: 1, y: 0 },
                    viewport: { once: !0 },
                    transition: { duration: 0.5, delay: 0.2 },
                    className:
                      "rounded-[32px] p-3 bg-black relative flex flex-col",
                    children: [
                      (0, a.jsxs)(r.E, {
                        className:
                          "absolute -top-3 left-1/2 -translate-x-1/2 bg-[#F4991A] text-white hover:bg-[#E5890F] z-10",
                        children: [
                          (0, a.jsx)(d.A, { className: "w-3 h-3 mr-1" }),
                          "DONE FOR YOU",
                        ],
                      }),
                      (0, a.jsxs)("div", {
                        className:
                          "rounded-[20px] p-6 md:p-8 bg-[#1a1a1a] flex-1 flex flex-col",
                        children: [
                          (0, a.jsxs)("div", {
                            className: "mb-6",
                            children: [
                              (0, a.jsx)("div", {
                                className:
                                  "flex items-end justify-between gap-4 mb-2",
                                children: (0, a.jsx)("h3", {
                                  className: "text-2xl font-bold text-white",
                                  children: "Azubi Consultation",
                                }),
                              }),
                              (0, a.jsx)("p", {
                                className: "text-white/60 mb-4",
                                children: "Our experts apply for you",
                              }),
                              (0, a.jsx)(n.N, {
                                mode: "wait",
                                children: (0, a.jsx)(
                                  l.P.div,
                                  {
                                    initial: { y: 20, opacity: 0 },
                                    animate: { y: 0, opacity: 1 },
                                    exit: { y: -20, opacity: 0 },
                                    transition: {
                                      duration: 0.4,
                                      ease: "easeOut",
                                    },
                                    children: (0, a.jsxs)("div", {
                                      className: "flex items-baseline gap-2",
                                      children: [
                                        (0, a.jsxs)("span", {
                                          className:
                                            "text-4xl font-bold text-white",
                                          children: [s.symbol, E(M.advance)],
                                        }),
                                        (0, a.jsx)("span", {
                                          className: "text-white/60",
                                          children: "to get started",
                                        }),
                                      ],
                                    }),
                                  },
                                  s.code,
                                ),
                              }),
                              (0, a.jsx)("div", {
                                className:
                                  "mt-4 p-4 rounded-xl bg-emerald-500/20 border border-emerald-500/30",
                                children: (0, a.jsx)(n.N, {
                                  mode: "wait",
                                  children: (0, a.jsxs)(
                                    l.P.div,
                                    {
                                      initial: { opacity: 0 },
                                      animate: { opacity: 1 },
                                      exit: { opacity: 0 },
                                      className: "flex items-baseline gap-2",
                                      children: [
                                        (0, a.jsxs)("span", {
                                          className:
                                            "text-xl font-bold text-white",
                                          children: [
                                            "+",
                                            s.symbol,
                                            E(M.success),
                                          ],
                                        }),
                                        (0, a.jsx)("span", {
                                          className: "text-sm text-white/60",
                                          children:
                                            "only when you receive an offer",
                                        }),
                                      ],
                                    },
                                    "success-".concat(s.code),
                                  ),
                                }),
                              }),
                            ],
                          }),
                          (0, a.jsx)("div", {
                            className: "space-y-3 mb-6 flex-grow",
                            children: g.map((e, t) =>
                              (0, a.jsxs)(
                                "div",
                                {
                                  className: "flex items-start gap-3",
                                  children: [
                                    (0, a.jsx)("div", {
                                      className:
                                        "flex-shrink-0 w-5 h-5 rounded-full flex items-center justify-center mt-0.5 bg-emerald-500",
                                      children: (0, a.jsx)(x.A, {
                                        className: "w-3 h-3 text-white",
                                      }),
                                    }),
                                    (0, a.jsx)("span", {
                                      className: "text-sm text-white/80",
                                      children: e,
                                    }),
                                  ],
                                },
                                t,
                              ),
                            ),
                          }),
                        ],
                      }),
                      !1 === F &&
                        (0, a.jsx)("div", {
                          className: "px-3 mb-3",
                          children: (0, a.jsx)(o.p, {
                            type: "email",
                            placeholder: "Enter your email",
                            value: k,
                            onChange: (e) => C(e.target.value),
                            onKeyDown: (e) => "Enter" === e.key && G(),
                            className:
                              "rounded-full border-white/20 bg-white/10 text-white placeholder:text-white/60",
                            disabled: y,
                          }),
                        }),
                      (0, a.jsx)("div", {
                        className: "px-3 pb-3",
                        children: (0, a.jsx)(c.$, {
                          onClick: G,
                          disabled: y,
                          className:
                            "w-full bg-white text-black hover:bg-white/90 rounded-full font-semibold transition-all relative overflow-hidden disabled:opacity-50 disabled:cursor-not-allowed py-6",
                          style: {
                            boxShadow:
                              "\n  rgba(0,0,0,0.1) 0px 2.5px 2.5px -0.47px,\n  rgba(0,0,0,0.1) 0px 6px 6px -0.94px,\n  rgba(0,0,0,0.08) 0px 11px 11px -1.4px,\n  rgba(0,0,0,0.06) 0px 20px 20px -2.81px,\n  rgba(0,0,0,0.04) 0px 37px 37px -5.16px,\n  rgba(0,0,0,0.02) 0px 68px 68px -9.37px,\n  rgba(0,0,0,0.01) 0px 124px 124px -17.03px,\n  rgba(0,0,0,0.01) 0px 226px 226px -30.94px\n",
                          },
                          children: y
                            ? (0, a.jsxs)(a.Fragment, {
                                children: [
                                  (0, a.jsx)(h.A, {
                                    className: "w-4 h-4 mr-2 animate-spin",
                                  }),
                                  (0, a.jsx)("span", {
                                    className: "relative z-10",
                                    children: "Processing...",
                                  }),
                                ],
                              })
                            : (0, a.jsxs)(a.Fragment, {
                                children: [
                                  (0, a.jsx)("span", {
                                    className: "relative z-10",
                                    children:
                                      !1 === F
                                        ? "Continue to Payment"
                                        : "Get Started",
                                  }),
                                  (0, a.jsx)(m.A, {
                                    className: "w-4 h-4 ml-2",
                                  }),
                                  (0, a.jsx)("div", {
                                    className:
                                      "absolute inset-0 bg-gradient-to-r from-transparent via-white/20 to-transparent -translate-x-full hover:translate-x-full transition-transform duration-700 ease-in-out",
                                  }),
                                ],
                              }),
                        }),
                      }),
                    ],
                  }),
                ],
              }),
              (0, a.jsxs)(l.P.div, {
                initial: { opacity: 0 },
                whileInView: { opacity: 1 },
                viewport: { once: !0 },
                transition: { duration: 0.5, delay: 0.4 },
                className: "mt-12 text-center",
                children: [
                  (0, a.jsxs)("div", {
                    className:
                      "flex flex-wrap items-center justify-center gap-6 text-sm text-[#344F1F]/60",
                    children: [
                      (0, a.jsxs)("div", {
                        className: "flex items-center gap-2",
                        children: [
                          (0, a.jsx)(x.A, {
                            className: "w-4 h-4 text-emerald-500",
                          }),
                          (0, a.jsx)("span", {
                            children: "Pay success fee only on confirmed offer",
                          }),
                        ],
                      }),
                      (0, a.jsxs)("div", {
                        className: "flex items-center gap-2",
                        children: [
                          (0, a.jsx)(x.A, {
                            className: "w-4 h-4 text-emerald-500",
                          }),
                          (0, a.jsx)("span", {
                            children:
                              "Non-refundable advance covers your application work",
                          }),
                        ],
                      }),
                      (0, a.jsxs)("div", {
                        className: "flex items-center gap-2",
                        children: [
                          (0, a.jsx)(x.A, {
                            className: "w-4 h-4 text-emerald-500",
                          }),
                          (0, a.jsx)("span", {
                            children: "Secure payment via Stripe",
                          }),
                        ],
                      }),
                    ],
                  }),
                  (0, a.jsxs)("p", {
                    className: "mt-4 text-xs text-[#344F1F]/50 italic",
                    children: [
                      "Prices shown in ",
                      s.name,
                      " (",
                      s.code,
                      "). Change currency above.",
                    ],
                  }),
                  (0, a.jsxs)("div", {
                    className:
                      "mt-6 flex items-center justify-center gap-4 opacity-40",
                    children: [
                      (0, a.jsx)("span", {
                        className: "text-xs text-[#344F1F]/60 font-medium",
                        children: "Powered by",
                      }),
                      (0, a.jsx)("span", {
                        className: "text-lg font-bold text-[#344F1F]/80",
                        children: "Stripe",
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
    97445: (e, t, s) => {
      "use strict";
      s.d(t, { ConsultationComparison: () => d });
      var a = s(70207),
        i = s(45748);
      function l(e) {
        let {
          className: t = "w-5 h-5",
          circleColor: s = "#344F1F",
          checkColor: i = "#344F1F",
        } = e;
        return (0, a.jsxs)("svg", {
          className: t,
          viewBox: "0 0 24 24",
          fill: "none",
          xmlns: "http://www.w3.org/2000/svg",
          children: [
            (0, a.jsx)("circle", {
              cx: "12",
              cy: "12",
              r: "10",
              fill: s,
              fillOpacity: "0.1",
            }),
            (0, a.jsx)("path", {
              d: "M8 12.5L10.5 15L16 9.5",
              stroke: i,
              strokeWidth: "2",
              strokeLinecap: "round",
              strokeLinejoin: "round",
            }),
          ],
        });
      }
      function n(e) {
        let {
          className: t = "w-5 h-5",
          circleColor: s = "#EF4444",
          xColor: i = "#EF4444",
        } = e;
        return (0, a.jsxs)("svg", {
          className: t,
          viewBox: "0 0 24 24",
          fill: "none",
          xmlns: "http://www.w3.org/2000/svg",
          children: [
            (0, a.jsx)("circle", {
              cx: "12",
              cy: "12",
              r: "10",
              fill: s,
              fillOpacity: "0.1",
            }),
            (0, a.jsx)("path", {
              d: "M9 9L15 15M15 9L9 15",
              stroke: i,
              strokeWidth: "2",
              strokeLinecap: "round",
              strokeLinejoin: "round",
            }),
          ],
        });
      }
      var r = s(87858),
        c = s(75281);
      function o(e) {
        return !0 === e
          ? (0, a.jsx)(l, {
              className: "w-5 h-5 mx-auto",
              circleColor: "#10B981",
              checkColor: "#10B981",
            })
          : !1 === e
            ? (0, a.jsx)(n, {
                className: "w-5 h-5 mx-auto",
                circleColor: "#EF4444",
                xColor: "#EF4444",
              })
            : (0, a.jsx)("span", {
                className:
                  "text-sm text-[#344F1F]/80 font-medium text-center block",
                children: e,
              });
      }
      function d(e) {
        var t;
        let { stats: s } = e,
          { currency: l } = (0, r.H)(),
          n =
            ((t = s.total_jobs),
            [
              {
                name: "Job Discovery",
                diy: "".concat(
                  t >= 1e3
                    ? "".concat(Math.floor(t / 1e3).toLocaleString(), "K+")
                    : "".concat(t, "+"),
                  " jobs (you search)",
                ),
                applyForMe: "Curated matches for you",
              },
              {
                name: "Cover Letters",
                diy: "AI-generated (you edit)",
                applyForMe: "Expert-written (native German)",
              },
              {
                name: "Application Submission",
                diy: !1,
                applyForMe: "We do it for you",
              },
              {
                name: "Applications per Month",
                diy: "5-10 (realistically)",
                applyForMe: "Based on your profile",
              },
              {
                name: "Application Tracking",
                diy: "Basic dashboard",
                applyForMe: "Real-time team updates",
              },
              {
                name: "Interview Preparation",
                diy: "Question bank access",
                applyForMe: "1-on-1 coaching sessions",
              },
              { name: "Dedicated Counselor", diy: !1, applyForMe: !0 },
              {
                name: "Your Time Investment",
                diy: "50+ hours",
                applyForMe: "<5 hours",
              },
              {
                name: "Visa Guidance",
                diy: "Self-service guides",
                applyForMe: "Full support + booking",
              },
              { name: "Success-based Payment", diy: !1, applyForMe: !0 },
            ]),
          d = (e) => {
            let t = (0, c.fA)(e, l);
            return t >= 1e3
              ? "".concat(l.symbol).concat(Math.round(t / 1e3), "K")
              : "".concat(l.symbol).concat(Math.round(t));
          },
          x = l.applyForMe.standard,
          m = d(x.advance),
          h = d(x.success);
        return (0, a.jsx)("section", {
          className: "py-16 md:py-24 bg-white",
          children: (0, a.jsxs)("div", {
            className: "container mx-auto px-4",
            children: [
              (0, a.jsxs)(i.P.div, {
                initial: { opacity: 0, y: 20 },
                whileInView: { opacity: 1, y: 0 },
                viewport: { once: !0 },
                transition: { duration: 0.5 },
                className: "text-center mb-12",
                children: [
                  (0, a.jsx)("h2", {
                    className:
                      "text-3xl md:text-4xl lg:text-5xl font-bold mb-4 text-[#344F1F]",
                    children: "DIY vs Apply For Me",
                  }),
                  (0, a.jsx)("p", {
                    className: "text-lg text-[#344F1F]/70 max-w-2xl mx-auto",
                    children:
                      "See why students are choosing our expert service",
                  }),
                ],
              }),
              (0, a.jsx)("div", {
                className: "hidden lg:block max-w-5xl mx-auto",
                children: (0, a.jsx)("div", {
                  className: "bg-gray-100 rounded-[32px] p-[5px]",
                  children: (0, a.jsx)("div", {
                    className: "bg-white rounded-[27px] overflow-hidden",
                    children: (0, a.jsxs)("div", {
                      className: "grid grid-cols-[280px_1fr_1fr]",
                      children: [
                        (0, a.jsx)("div", {
                          className: "bg-gray-100 p-6 font-bold text-[#344F1F]",
                          children: "Features",
                        }),
                        (0, a.jsxs)("div", {
                          className: "p-6 text-center",
                          children: [
                            (0, a.jsx)("div", {
                              className: "font-bold text-[#344F1F] mb-1",
                              children: "DIY (Free)",
                            }),
                            (0, a.jsx)("div", {
                              className: "text-sm text-[#344F1F]/60",
                              children: "You do everything",
                            }),
                          ],
                        }),
                        (0, a.jsxs)("div", {
                          className: "p-6 text-center bg-[#F4991A]/5",
                          children: [
                            (0, a.jsx)("div", {
                              className: "font-bold text-[#F4991A] mb-1",
                              children: "Apply For Me",
                            }),
                            (0, a.jsxs)("div", {
                              className: "text-sm text-[#F4991A]/80",
                              children: [m, " advance + ", h, " on success"],
                            }),
                          ],
                        }),
                        n.map((e, t) =>
                          (0, a.jsxs)(
                            i.P.div,
                            {
                              initial: { opacity: 0, y: 10 },
                              whileInView: { opacity: 1, y: 0 },
                              viewport: { once: !0 },
                              transition: { duration: 0.3, delay: 0.05 * t },
                              className: "contents",
                              children: [
                                (0, a.jsx)("div", {
                                  className:
                                    "bg-gray-100 p-6 text-sm text-[#344F1F] ".concat(
                                      t === n.length - 1
                                        ? ""
                                        : "border-b border-white",
                                    ),
                                  children: e.name,
                                }),
                                (0, a.jsx)("div", {
                                  className: "p-6 ".concat(
                                    t === n.length - 1
                                      ? ""
                                      : "border-b border-gray-100",
                                  ),
                                  children: o(e.diy),
                                }),
                                (0, a.jsx)("div", {
                                  className: "p-6 bg-[#F4991A]/5 ".concat(
                                    t === n.length - 1
                                      ? ""
                                      : "border-b border-[#F4991A]/10",
                                  ),
                                  children: o(e.applyForMe),
                                }),
                              ],
                            },
                            t,
                          ),
                        ),
                      ],
                    }),
                  }),
                }),
              }),
              (0, a.jsx)("div", {
                className: "lg:hidden",
                children: (0, a.jsx)("div", {
                  className: "bg-gray-100 rounded-[32px] p-[5px]",
                  children: (0, a.jsx)("div", {
                    className: "bg-white rounded-[27px] overflow-hidden",
                    children: (0, a.jsxs)("div", {
                      className: "grid grid-cols-[140px_1fr_1fr]",
                      children: [
                        (0, a.jsx)("div", {
                          className:
                            "bg-gray-100 p-4 font-bold text-[#344F1F] text-sm",
                          children: "Features",
                        }),
                        (0, a.jsxs)("div", {
                          className: "p-4 text-center",
                          children: [
                            (0, a.jsx)("div", {
                              className:
                                "font-bold text-[#344F1F] text-sm mb-1",
                              children: "DIY",
                            }),
                            (0, a.jsx)("div", {
                              className: "text-xs text-[#344F1F]/60",
                              children: "Free",
                            }),
                          ],
                        }),
                        (0, a.jsxs)("div", {
                          className: "p-4 text-center bg-[#F4991A]/5",
                          children: [
                            (0, a.jsx)("div", {
                              className:
                                "font-bold text-[#F4991A] text-sm mb-1",
                              children: "Apply For Me",
                            }),
                            (0, a.jsxs)("div", {
                              className: "text-xs text-[#F4991A]/80",
                              children: [m, " + ", h],
                            }),
                          ],
                        }),
                        n.map((e, t) =>
                          (0, a.jsxs)(
                            "div",
                            {
                              className: "contents",
                              children: [
                                (0, a.jsx)("div", {
                                  className:
                                    "bg-gray-100 p-4 text-xs text-[#344F1F] ".concat(
                                      t === n.length - 1
                                        ? ""
                                        : "border-b border-white",
                                    ),
                                  children: e.name,
                                }),
                                (0, a.jsx)("div", {
                                  className: "p-4 ".concat(
                                    t === n.length - 1
                                      ? ""
                                      : "border-b border-gray-100",
                                  ),
                                  children: o(e.diy),
                                }),
                                (0, a.jsx)("div", {
                                  className: "p-4 bg-[#F4991A]/5 ".concat(
                                    t === n.length - 1
                                      ? ""
                                      : "border-b border-[#F4991A]/10",
                                  ),
                                  children: o(e.applyForMe),
                                }),
                              ],
                            },
                            t,
                          ),
                        ),
                      ],
                    }),
                  }),
                }),
              }),
            ],
          }),
        });
      }
    },
    98555: (e, t, s) => {
      "use strict";
      s.d(t, { ConsultationProblemSolution: () => g });
      var a = s(70207),
        i = s(45748),
        l = s(28131),
        n = s(76112),
        r = s(61280),
        c = s(31917),
        o = s(27239),
        d = s(16148),
        x = s(79650),
        m = s(37426),
        h = s(46031),
        p = s(63728),
        u = s(84308),
        f = s(87858),
        w = s(75281);
      let j = [
          {
            icon: l.A,
            title: "Hours writing cover letters",
            description:
              "Struggling to write German Anschreiben that sound native",
          },
          {
            icon: n.A,
            title: "Applying blindly",
            description: "No idea which companies actually hire internationals",
          },
          {
            icon: r.A,
            title: "Getting ghosted",
            description: "Generic applications disappear into the void",
          },
          {
            icon: c.A,
            title: "Zero responses",
            description: "Months of effort with nothing to show for it",
          },
        ],
        b = [
          {
            icon: o.A,
            title: "Native German applications",
            description: "Expert-written Anschreiben that get responses",
          },
          {
            icon: d.A,
            title: "Companies that actually respond",
            description: "We know who hires internationals",
          },
          {
            icon: x.A,
            title: "Targeted applications",
            description: "Strategic submissions, not random spam",
          },
          {
            icon: m.A,
            title: "Pay only on success",
            description: "No offer? No success fee",
          },
        ];
      function g() {
        let { currency: e } = (0, f.H)(),
          t = e.applyForMe.standard;
        return (0, a.jsx)("section", {
          className: "py-16 md:py-24 bg-white overflow-hidden",
          children: (0, a.jsxs)("div", {
            className: "container mx-auto px-4",
            children: [
              (0, a.jsxs)(i.P.div, {
                initial: { opacity: 0, y: 20 },
                whileInView: { opacity: 1, y: 0 },
                viewport: { once: !0 },
                transition: { duration: 0.5 },
                className: "text-center mb-12 md:mb-16",
                children: [
                  (0, a.jsx)("h2", {
                    className:
                      "text-3xl md:text-4xl lg:text-5xl font-bold text-[#344F1F] mb-4",
                    children: "Stop Struggling. Start Getting Offers.",
                  }),
                  (0, a.jsx)("p", {
                    className: "text-lg text-[#344F1F]/70 max-w-2xl mx-auto",
                    children:
                      "You focus on learning German. We handle the applications.",
                  }),
                ],
              }),
              (0, a.jsxs)("div", {
                className: "max-w-6xl mx-auto",
                children: [
                  (0, a.jsxs)("div", {
                    className:
                      "grid lg:grid-cols-[1fr,auto,1fr] gap-6 lg:gap-0 items-stretch",
                    children: [
                      (0, a.jsx)(i.P.div, {
                        initial: { opacity: 0, x: -30 },
                        whileInView: { opacity: 1, x: 0 },
                        viewport: { once: !0 },
                        transition: { duration: 0.6 },
                        className: "relative",
                        children: (0, a.jsxs)("div", {
                          className:
                            "h-full bg-[#1a1a1a] rounded-2xl lg:rounded-r-none p-6 md:p-8 text-white",
                          children: [
                            (0, a.jsxs)("div", {
                              className: "mb-8",
                              children: [
                                (0, a.jsx)("span", {
                                  className:
                                    "inline-block px-3 py-1 bg-white/10 rounded-full text-xs font-medium text-white/70 mb-4",
                                  children: "THE OLD WAY",
                                }),
                                (0, a.jsx)("h3", {
                                  className:
                                    "text-2xl md:text-3xl font-bold mb-2 text-white",
                                  children: "Doing It Alone",
                                }),
                                (0, a.jsx)("p", {
                                  className: "text-white/60 text-sm",
                                  children: "Endless hours, zero guarantees",
                                }),
                              ],
                            }),
                            (0, a.jsx)("div", {
                              className: "space-y-5",
                              children: j.map((e, t) =>
                                (0, a.jsxs)(
                                  i.P.div,
                                  {
                                    initial: { opacity: 0, x: -10 },
                                    whileInView: { opacity: 1, x: 0 },
                                    viewport: { once: !0 },
                                    transition: {
                                      duration: 0.3,
                                      delay: 0.1 + 0.1 * t,
                                    },
                                    className: "flex items-start gap-4",
                                    children: [
                                      (0, a.jsx)("div", {
                                        className:
                                          "flex-shrink-0 w-10 h-10 bg-white/5 border border-white/10 rounded-xl flex items-center justify-center",
                                        children: (0, a.jsx)(e.icon, {
                                          className: "w-5 h-5 text-white/40",
                                        }),
                                      }),
                                      (0, a.jsxs)("div", {
                                        children: [
                                          (0, a.jsx)("h4", {
                                            className:
                                              "font-semibold text-white/90 mb-0.5",
                                            children: e.title,
                                          }),
                                          (0, a.jsx)("p", {
                                            className: "text-sm text-white/50",
                                            children: e.description,
                                          }),
                                        ],
                                      }),
                                    ],
                                  },
                                  t,
                                ),
                              ),
                            }),
                            (0, a.jsx)("div", {
                              className: "mt-8 pt-6 border-t border-white/10",
                              children: (0, a.jsxs)("div", {
                                className: "grid grid-cols-2 gap-4",
                                children: [
                                  (0, a.jsxs)("div", {
                                    className:
                                      "bg-white/5 rounded-xl p-4 text-center",
                                    children: [
                                      (0, a.jsx)("div", {
                                        className:
                                          "text-2xl font-bold text-white/80",
                                        children: "50+",
                                      }),
                                      (0, a.jsx)("div", {
                                        className: "text-xs text-white/40",
                                        children: "Hours spent",
                                      }),
                                    ],
                                  }),
                                  (0, a.jsxs)("div", {
                                    className:
                                      "bg-white/5 rounded-xl p-4 text-center",
                                    children: [
                                      (0, a.jsx)("div", {
                                        className:
                                          "text-2xl font-bold text-white/80",
                                        children: "~5",
                                      }),
                                      (0, a.jsx)("div", {
                                        className: "text-xs text-white/40",
                                        children: "Apps per month",
                                      }),
                                    ],
                                  }),
                                ],
                              }),
                            }),
                          ],
                        }),
                      }),
                      (0, a.jsx)(i.P.div, {
                        initial: { opacity: 0, scale: 0.8 },
                        whileInView: { opacity: 1, scale: 1 },
                        viewport: { once: !0 },
                        transition: { duration: 0.5, delay: 0.3 },
                        className:
                          "hidden lg:flex items-center justify-center z-10",
                        children: (0, a.jsx)("div", {
                          className:
                            "w-16 h-16 bg-[#F4991A] rounded-full flex items-center justify-center shadow-xl -mx-8",
                          children: (0, a.jsx)(h.A, {
                            className: "w-7 h-7 text-white",
                          }),
                        }),
                      }),
                      (0, a.jsx)(i.P.div, {
                        initial: { opacity: 0, y: -10 },
                        whileInView: { opacity: 1, y: 0 },
                        viewport: { once: !0 },
                        transition: { duration: 0.3, delay: 0.3 },
                        className:
                          "flex lg:hidden items-center justify-center py-2",
                        children: (0, a.jsx)("div", {
                          className:
                            "w-12 h-12 bg-[#F4991A] rounded-full flex items-center justify-center shadow-lg rotate-90",
                          children: (0, a.jsx)(h.A, {
                            className: "w-5 h-5 text-white",
                          }),
                        }),
                      }),
                      (0, a.jsx)(i.P.div, {
                        initial: { opacity: 0, x: 30 },
                        whileInView: { opacity: 1, x: 0 },
                        viewport: { once: !0 },
                        transition: { duration: 0.6, delay: 0.2 },
                        className: "relative",
                        children: (0, a.jsxs)("div", {
                          className:
                            "h-full bg-gradient-to-br from-[#344F1F] to-[#2d4219] rounded-2xl lg:rounded-l-none p-6 md:p-8 lg:pl-12 text-white",
                          children: [
                            (0, a.jsxs)("div", {
                              className: "mb-8",
                              children: [
                                (0, a.jsxs)("span", {
                                  className:
                                    "inline-flex items-center gap-1.5 px-3 py-1 bg-[#F4991A]/20 rounded-full text-xs font-medium text-[#F4991A] mb-4",
                                  children: [
                                    (0, a.jsx)(p.A, { className: "w-3 h-3" }),
                                    "WITH APPLY FOR ME",
                                  ],
                                }),
                                (0, a.jsx)("h3", {
                                  className:
                                    "text-2xl md:text-3xl font-bold mb-2 text-white",
                                  children: "We Do It For You",
                                }),
                                (0, a.jsx)("p", {
                                  className: "text-white/60 text-sm",
                                  children: "Expert team, proven results",
                                }),
                              ],
                            }),
                            (0, a.jsx)("div", {
                              className: "space-y-5",
                              children: b.map((e, t) =>
                                (0, a.jsxs)(
                                  i.P.div,
                                  {
                                    initial: { opacity: 0, x: 10 },
                                    whileInView: { opacity: 1, x: 0 },
                                    viewport: { once: !0 },
                                    transition: {
                                      duration: 0.3,
                                      delay: 0.3 + 0.1 * t,
                                    },
                                    className: "flex items-start gap-4",
                                    children: [
                                      (0, a.jsx)("div", {
                                        className:
                                          "flex-shrink-0 w-10 h-10 bg-white/10 border border-white/20 rounded-xl flex items-center justify-center",
                                        children: (0, a.jsx)(e.icon, {
                                          className: "w-5 h-5 text-[#F4991A]",
                                        }),
                                      }),
                                      (0, a.jsxs)("div", {
                                        children: [
                                          (0, a.jsx)("h4", {
                                            className:
                                              "font-semibold text-white mb-0.5",
                                            children: e.title,
                                          }),
                                          (0, a.jsx)("p", {
                                            className: "text-sm text-white/60",
                                            children: e.description,
                                          }),
                                        ],
                                      }),
                                    ],
                                  },
                                  t,
                                ),
                              ),
                            }),
                            (0, a.jsx)("div", {
                              className: "mt-8 pt-6 border-t border-white/10",
                              children: (0, a.jsxs)("div", {
                                className: "grid grid-cols-2 gap-4",
                                children: [
                                  (0, a.jsxs)("div", {
                                    className:
                                      "bg-white/10 rounded-xl p-4 text-center",
                                    children: [
                                      (0, a.jsx)("div", {
                                        className:
                                          "text-2xl font-bold text-white",
                                        children: "<5",
                                      }),
                                      (0, a.jsx)("div", {
                                        className: "text-xs text-white/60",
                                        children: "Hours from you",
                                      }),
                                    ],
                                  }),
                                  (0, a.jsxs)("div", {
                                    className:
                                      "bg-white/10 rounded-xl p-4 text-center",
                                    children: [
                                      (0, a.jsx)("div", {
                                        className:
                                          "text-2xl font-bold text-[#F4991A]",
                                        children: "Expert",
                                      }),
                                      (0, a.jsx)("div", {
                                        className: "text-xs text-white/60",
                                        children: "Applications for you",
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
                  (0, a.jsx)(i.P.div, {
                    initial: { opacity: 0, y: 20 },
                    whileInView: { opacity: 1, y: 0 },
                    viewport: { once: !0 },
                    transition: { duration: 0.5, delay: 0.5 },
                    className: "mt-8 bg-[#F9F5F0] rounded-2xl p-6 md:p-8",
                    children: (0, a.jsxs)("div", {
                      className:
                        "flex flex-col md:flex-row items-center justify-between gap-6",
                      children: [
                        (0, a.jsxs)("div", {
                          className: "flex items-center gap-4",
                          children: [
                            (0, a.jsx)("div", {
                              className:
                                "w-12 h-12 bg-[#F4991A]/10 rounded-full flex items-center justify-center",
                              children: (0, a.jsx)(u.A, {
                                className: "w-6 h-6 text-[#F4991A]",
                              }),
                            }),
                            (0, a.jsxs)("div", {
                              children: [
                                (0, a.jsx)("h4", {
                                  className: "font-bold text-[#344F1F]",
                                  children: "Your dedicated counselor",
                                }),
                                (0, a.jsx)("p", {
                                  className: "text-sm text-[#344F1F]/60",
                                  children:
                                    "WhatsApp support throughout your journey",
                                }),
                              ],
                            }),
                          ],
                        }),
                        (0, a.jsxs)("div", {
                          className: "flex items-center gap-8",
                          children: [
                            (0, a.jsxs)("div", {
                              className: "text-center",
                              children: [
                                (0, a.jsx)("div", {
                                  className:
                                    "text-2xl font-bold text-[#344F1F]",
                                  children: "3-6",
                                }),
                                (0, a.jsx)("div", {
                                  className: "text-xs text-[#344F1F]/60",
                                  children: "Months to Germany",
                                }),
                              ],
                            }),
                            (0, a.jsx)("div", {
                              className:
                                "h-8 w-px bg-[#344F1F]/10 hidden md:block",
                            }),
                            (0, a.jsxs)("div", {
                              className: "text-center",
                              children: [
                                (0, a.jsx)("div", {
                                  className:
                                    "text-2xl font-bold text-[#F4991A]",
                                  children: ((t) => {
                                    let s = (0, w.fA)(t, e);
                                    return s >= 1e3
                                      ? ""
                                          .concat(e.symbol)
                                          .concat(Math.round(s / 1e3), "K")
                                      : ""
                                          .concat(e.symbol)
                                          .concat(Math.round(s));
                                  })(t.advance),
                                }),
                                (0, a.jsx)("div", {
                                  className: "text-xs text-[#344F1F]/60",
                                  children: "To get started",
                                }),
                              ],
                            }),
                          ],
                        }),
                      ],
                    }),
                  }),
                ],
              }),
            ],
          }),
        });
      }
    },
  },
  (e) => {
    var t = (t) => e((e.s = t));
    (e.O(0, [46593, 36209, 84121, 72076, 77358], () => t(32343)),
      (_N_E = e.O()));
  },
]);
