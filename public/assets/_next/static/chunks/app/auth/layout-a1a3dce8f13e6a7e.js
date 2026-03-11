(self.webpackChunk_N_E = self.webpackChunk_N_E || []).push([
  [40382],
  {
    2994: (e, i, s) => {
      Promise.resolve().then(s.bind(s, 50052));
    },
    50052: (e, i, s) => {
      "use strict";
      (s.r(i), s.d(i, { default: () => t }));
      var a = s(70207),
        l = s(45748);
      function t(e) {
        let { children: i } = e;
        return (0, a.jsxs)("div", {
          className:
            "relative min-h-screen w-full bg-background overflow-hidden",
          children: [
            (0, a.jsx)("div", {
              className: "absolute inset-0 w-full h-full",
              children: (0, a.jsx)(l.P.div, {
                initial: { opacity: 0 },
                animate: { opacity: 1 },
                transition: { duration: 0.5 },
                className: "absolute inset-0 bg-grid-white/[0.02] bg-grid",
              }),
            }),
            (0, a.jsx)("div", {
              className: "absolute inset-0 flex items-center justify-center",
              children: (0, a.jsx)("div", {
                className:
                  "absolute w-[600px] h-[600px] bg-primary/30 rounded-full blur-[128px] opacity-20 animate-pulse",
              }),
            }),
            (0, a.jsx)("div", {
              className:
                "relative z-10 min-h-screen flex items-center justify-center",
              children: (0, a.jsx)(l.P.div, {
                initial: { opacity: 0, y: 20 },
                animate: { opacity: 1, y: 0 },
                transition: { duration: 0.5, delay: 0.1 },
                className: "w-full",
                children: i,
              }),
            }),
          ],
        });
      }
    },
  },
  (e) => {
    var i = (i) => e((e.s = i));
    (e.O(0, [84121, 46593, 77358], () => i(2994)), (_N_E = e.O()));
  },
]);
