(self.webpackChunk_N_E = self.webpackChunk_N_E || []).push([
  [61079],
  {
    16847: (e, a, s) => {
      Promise.resolve().then(s.bind(s, 60838));
    },
    60838: (e, a, s) => {
      "use strict";
      s.d(a, { CareerPathwayDecisionClient: () => d });
      var i = s(70207),
        n = s(45748),
        r = s(2465),
        l = s(52141);
      let t = (0, s(26928).default)(
        () =>
          Promise.all([s.e(46593), s.e(36209), s.e(84121), s.e(72076)])
            .then(s.bind(s, 83483))
            .then((e) => e.PathwayDecisionContainer),
        {
          loadableGenerated: { webpack: () => [83483] },
          ssr: !1,
          loading: () =>
            (0, i.jsx)("div", {
              className: "p-8 bg-cream rounded-lg",
              children: (0, i.jsxs)("div", {
                className: "flex items-center justify-center space-x-2",
                children: [
                  (0, i.jsx)("div", {
                    className:
                      "animate-spin rounded-full h-6 w-6 border-b-2 border-orange",
                    "aria-hidden": "true",
                  }),
                  (0, i.jsx)("span", {
                    className: "text-muted-foreground",
                    children: "Loading career pathway tool...",
                  }),
                ],
              }),
            }),
        },
      );
      function d() {
        return (0, i.jsxs)("main", {
          role: "main",
          className: "max-w-4xl mx-auto",
          children: [
            (0, i.jsx)("header", {
              className: "mb-8",
              children: (0, i.jsx)("section", {
                className: "flex items-center justify-between mb-6",
                children: (0, i.jsxs)("div", {
                  className: "flex items-center gap-4",
                  children: [
                    (0, i.jsx)("div", {
                      className: "p-3 rounded-xl bg-orange/10",
                      "aria-hidden": "true",
                      children: (0, i.jsx)(r.A, {
                        className: "h-6 w-6 text-orange",
                      }),
                    }),
                    (0, i.jsxs)("div", {
                      children: [
                        (0, i.jsx)(l.D, {
                          level: 1,
                          children: "Career Pathway Decision Tool",
                        }),
                        (0, i.jsx)("p", {
                          className: "text-muted-foreground mt-1",
                          children:
                            "Find your optimal career change path in Germany",
                        }),
                      ],
                    }),
                  ],
                }),
              }),
            }),
            (0, i.jsx)("article", {
              children: (0, i.jsx)(n.P.div, {
                initial: { opacity: 0, y: 20 },
                animate: { opacity: 1, y: 0 },
                transition: { duration: 0.3 },
                children: (0, i.jsx)(t, { isInDashboard: !1 }),
              }),
            }),
          ],
        });
      }
    },
  },
  (e) => {
    var a = (a) => e((e.s = a));
    (e.O(0, [46593, 36209, 84121, 72076, 77358], () => a(16847)),
      (_N_E = e.O()));
  },
]);
