(self.webpackChunk_N_E = self.webpackChunk_N_E || []).push([
  [46589],
  {
    9935: (e, s, t) => {
      "use strict";
      (t.r(s), t.d(s, { default: () => h }));
      var a = t(70207),
        r = t(87223),
        l = t(18051),
        n = t(69312),
        i = t(49055),
        c = t(24725),
        x = t(27239),
        d = t(31159),
        o = t(46031),
        m = t(54604);
      function h() {
        let e = (0, l.useRouter)(),
          s = (0, m.createClientComponentClient)(),
          [t, h] = (0, r.useState)(!1),
          p = async () => {
            h(!0);
            let {
              data: { session: t },
            } = await s.auth.getSession();
            (null == t ? void 0 : t.user)
              ? e.push("/dashboard/tools/cover-letter")
              : e.push("/auth?redirect=/dashboard/tools/cover-letter");
          };
        return (0, a.jsx)("main", {
          className:
            "min-h-screen bg-gradient-to-br from-[#F7F8FA] to-[#EEF0F4] flex items-center justify-center py-12 px-4",
          children: (0, a.jsxs)("div", {
            className: "max-w-2xl w-full text-center",
            children: [
              (0, a.jsx)("div", {
                className:
                  "inline-flex items-center justify-center w-20 h-20 bg-[#5D5DE9] rounded-full mb-6",
                children: (0, a.jsx)(n.A, {
                  className: "w-10 h-10 text-white",
                }),
              }),
              (0, a.jsx)("h1", {
                className: "text-4xl md:text-5xl font-bold text-[#2C3340] mb-4",
                children: "Free AI Cover Letter Generator",
              }),
              (0, a.jsx)("p", {
                className: "text-lg text-[#2C3340]/80 mb-8",
                children:
                  "Generate professional German cover letters in 30 seconds with AI",
              }),
              (0, a.jsxs)("div", {
                className:
                  "flex flex-wrap items-center justify-center gap-6 mb-8 text-sm text-[#2C3340]/70",
                children: [
                  (0, a.jsxs)("div", {
                    className: "flex items-center gap-2",
                    children: [
                      (0, a.jsx)(i.A, { className: "w-4 h-4 text-[#5D5DE9]" }),
                      (0, a.jsx)("span", { children: "Smart Generation" }),
                    ],
                  }),
                  (0, a.jsxs)("div", {
                    className: "flex items-center gap-2",
                    children: [
                      (0, a.jsx)(c.A, { className: "w-4 h-4 text-[#5D5DE9]" }),
                      (0, a.jsx)("span", { children: "Professional Quality" }),
                    ],
                  }),
                  (0, a.jsxs)("div", {
                    className: "flex items-center gap-2",
                    children: [
                      (0, a.jsx)(x.A, { className: "w-4 h-4 text-[#5D5DE9]" }),
                      (0, a.jsx)("span", { children: "AI-Powered Generation" }),
                    ],
                  }),
                ],
              }),
              (0, a.jsxs)("div", {
                className:
                  "bg-white/80 backdrop-blur-sm border-2 border-[#5D5DE9] rounded-xl p-8 mb-6",
                children: [
                  (0, a.jsx)("h2", {
                    className: "text-2xl font-semibold text-[#2C3340] mb-4",
                    children: "Generate Your Professional Cover Letter",
                  }),
                  (0, a.jsx)("p", {
                    className: "text-[#2C3340]/70 mb-6",
                    children:
                      "Create a professional German cover letter (Anschreiben) tailored to your experience and the job you're applying for.",
                  }),
                  (0, a.jsx)("button", {
                    onClick: p,
                    disabled: t,
                    className:
                      "inline-flex items-center gap-2 bg-[#5D5DE9] text-white px-8 py-4 rounded-full font-semibold hover:bg-[#2C3340] transition-colors disabled:opacity-50 disabled:cursor-not-allowed",
                    children: t
                      ? (0, a.jsxs)(a.Fragment, {
                          children: [
                            (0, a.jsx)(d.A, {
                              className: "w-5 h-5 animate-spin",
                            }),
                            "Loading...",
                          ],
                        })
                      : (0, a.jsxs)(a.Fragment, {
                          children: [
                            "Start Now",
                            (0, a.jsx)(o.A, { className: "w-5 h-5" }),
                          ],
                        }),
                  }),
                  (0, a.jsx)("p", {
                    className: "text-sm text-[#2C3340]/60 mt-4",
                    children:
                      "Free account required • AI-powered • 1 free generation",
                  }),
                ],
              }),
              (0, a.jsxs)("div", {
                className: "text-left bg-white/60 rounded-lg p-6 space-y-3",
                children: [
                  (0, a.jsx)("h3", {
                    className: "font-semibold text-[#2C3340] mb-3",
                    children: "With a free account, you get:",
                  }),
                  (0, a.jsxs)("ul", {
                    className: "space-y-2 text-sm text-[#2C3340]/70",
                    children: [
                      (0, a.jsxs)("li", {
                        className: "flex items-start gap-2",
                        children: [
                          (0, a.jsx)("span", {
                            className: "text-[#5D5DE9] mt-0.5",
                            children: "✓",
                          }),
                          (0, a.jsx)("span", {
                            children:
                              "Unlimited generated cover letters to preview and refine",
                          }),
                        ],
                      }),
                      (0, a.jsxs)("li", {
                        className: "flex items-start gap-2",
                        children: [
                          (0, a.jsx)("span", {
                            className: "text-[#5D5DE9] mt-0.5",
                            children: "✓",
                          }),
                          (0, a.jsx)("span", {
                            children:
                              "Edit and iterate until you're 100% satisfied",
                          }),
                        ],
                      }),
                      (0, a.jsxs)("li", {
                        className: "flex items-start gap-2",
                        children: [
                          (0, a.jsx)("span", {
                            className: "text-[#5D5DE9] mt-0.5",
                            children: "✓",
                          }),
                          (0, a.jsx)("span", {
                            children:
                              "Export your final version as PDF (1 free export)",
                          }),
                        ],
                      }),
                      (0, a.jsxs)("li", {
                        className: "flex items-start gap-2",
                        children: [
                          (0, a.jsx)("span", {
                            className: "text-[#5D5DE9] mt-0.5",
                            children: "✓",
                          }),
                          (0, a.jsx)("span", {
                            children:
                              "Access to 20,100+ Ausbildung jobs in Germany",
                          }),
                        ],
                      }),
                      (0, a.jsxs)("li", {
                        className: "flex items-start gap-2",
                        children: [
                          (0, a.jsx)("span", {
                            className: "text-[#5D5DE9] mt-0.5",
                            children: "✓",
                          }),
                          (0, a.jsx)("span", {
                            children: "German language learning tools",
                          }),
                        ],
                      }),
                      (0, a.jsxs)("li", {
                        className: "flex items-start gap-2",
                        children: [
                          (0, a.jsx)("span", {
                            className: "text-[#5D5DE9] mt-0.5",
                            children: "✓",
                          }),
                          (0, a.jsx)("span", {
                            children: "Interview preparation resources",
                          }),
                        ],
                      }),
                    ],
                  }),
                  (0, a.jsx)("div", {
                    className: "pt-4 border-t border-[#2C3340]/10 mt-4",
                    children: (0, a.jsxs)("p", {
                      className: "text-xs text-[#2C3340]/60",
                      children: [
                        "Want expert help? ",
                        (0, a.jsx)("a", {
                          href: "/consultation",
                          className:
                            "text-[#5D5DE9] hover:underline font-semibold",
                          children: "Apply For Me",
                        }),
                        " - our experts craft native German applications for you",
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
    15006: (e, s, t) => {
      Promise.resolve().then(t.bind(t, 9935));
    },
  },
  (e) => {
    var s = (s) => e((e.s = s));
    (e.O(0, [46593, 84121, 77358], () => s(15006)), (_N_E = e.O()));
  },
]);
