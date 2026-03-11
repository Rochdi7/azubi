(self.webpackChunk_N_E = self.webpackChunk_N_E || []).push([
  [15647],
  {
    9601: (e, i, s) => {
      Promise.resolve().then(s.bind(s, 22113));
    },
    22113: (e, i, s) => {
      "use strict";
      (s.r(i), s.d(i, { default: () => c }));
      var a = s(70207),
        t = s(45748),
        l = s(86654),
        n = s(26928),
        r = s(68233);
      let d = (0, n.default)(
        () =>
          Promise.all([s.e(46593), s.e(36209), s.e(84121), s.e(72076)])
            .then(s.bind(s, 29403))
            .then((e) => e.EnhancedQuestionnaireContainer),
        { loadableGenerated: { webpack: () => [29403] }, ssr: !1 },
      );
      function c() {
        let { t: e } = (0, r.ok)();
        return (0, a.jsxs)("div", {
          className: "max-w-4xl mx-auto",
          children: [
            (0, a.jsx)("div", {
              className: "mb-8",
              children: (0, a.jsx)("div", {
                className: "flex items-center justify-between mb-6",
                children: (0, a.jsxs)("div", {
                  className: "flex items-center gap-4",
                  children: [
                    (0, a.jsx)("div", {
                      className: "p-3 rounded-xl bg-primary/10",
                      children: (0, a.jsx)(l.A, {
                        className: "h-6 w-6 text-primary",
                      }),
                    }),
                    (0, a.jsxs)("div", {
                      children: [
                        (0, a.jsx)("h1", {
                          className: "text-2xl font-bold",
                          children: e("tools.eligibility.title"),
                        }),
                        (0, a.jsx)("p", {
                          className: "text-muted-foreground mt-1",
                          children: e("tools.eligibility.description"),
                        }),
                      ],
                    }),
                  ],
                }),
              }),
            }),
            (0, a.jsx)(t.P.div, {
              initial: { opacity: 0 },
              animate: { opacity: 1 },
              transition: { duration: 0.5 },
              children: (0, a.jsx)(d, { isInDashboard: !0 }),
            }),
          ],
        });
      }
    },
  },
  (e) => {
    var i = (i) => e((e.s = i));
    (e.O(0, [46593, 84121, 72076, 77358], () => i(9601)), (_N_E = e.O()));
  },
]);
