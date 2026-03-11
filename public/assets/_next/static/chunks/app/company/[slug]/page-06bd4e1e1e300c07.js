(self.webpackChunk_N_E = self.webpackChunk_N_E || []).push([
  [7130],
  {
    47381: (e, s, l) => {
      "use strict";
      l.d(s, { CompanyVideos: () => d });
      var r = l(70207),
        t = l(87223),
        i = l(80187),
        o = l(51780),
        n = l(14285),
        a = l(39945),
        c = l(82110);
      function d(e) {
        let {
            videoUrls: s,
            youtubeChannel: l,
            companyName: d = "Company",
            className: m,
          } = e,
          [h, u] = (0, t.useState)(null),
          b = (s || [])
            .map((e) => ({
              url: e,
              videoId: (function (e) {
                for (let s of [
                  /(?:youtube\.com\/watch\?v=|youtu\.be\/|youtube\.com\/embed\/)([^&\n?#]+)/,
                  /youtube\.com\/shorts\/([^&\n?#]+)/,
                ]) {
                  let l = e.match(s);
                  if (null == l ? void 0 : l[1]) return l[1];
                }
                return null;
              })(e),
            }))
            .filter((e) => null !== e.videoId)
            .slice(0, 6);
        return 0 === b.length
          ? null
          : (0, r.jsxs)("div", {
              className: (0, c.cn)(
                "container mx-auto px-4 sm:px-6 lg:px-8 py-8",
                m,
              ),
              children: [
                (0, r.jsx)("div", {
                  className: "mb-6",
                  children: (0, r.jsxs)("div", {
                    className:
                      "flex items-center justify-between flex-wrap gap-4",
                    children: [
                      (0, r.jsxs)("div", {
                        children: [
                          (0, r.jsxs)("h2", {
                            className:
                              "text-2xl sm:text-3xl font-bold text-[#344F1F] mb-1 flex items-center gap-3",
                            children: [
                              (0, r.jsx)(o.A, {
                                className:
                                  "h-7 w-7 sm:h-8 sm:w-8 text-[#F4991A]",
                              }),
                              "Videos",
                            ],
                          }),
                          (0, r.jsxs)("p", {
                            className: "text-[#344F1F]/70 text-sm sm:text-base",
                            children: [
                              "Learn more about ",
                              d,
                              " through their videos",
                            ],
                          }),
                        ],
                      }),
                      l &&
                        (0, r.jsxs)("a", {
                          href: l,
                          target: "_blank",
                          rel: "noopener noreferrer",
                          className:
                            "inline-flex items-center gap-2 px-4 py-2 bg-[#344F1F] text-white rounded-full text-sm font-medium hover:bg-[#344F1F]/90 transition-colors",
                          children: [
                            (0, r.jsx)(o.A, { className: "h-4 w-4" }),
                            "YouTube Channel",
                          ],
                        }),
                    ],
                  }),
                }),
                (0, r.jsx)("div", {
                  className: (0, c.cn)(
                    "grid gap-4",
                    1 === b.length
                      ? "grid-cols-1 max-w-2xl"
                      : 2 === b.length
                        ? "grid-cols-1 sm:grid-cols-2"
                        : "grid-cols-1 sm:grid-cols-2 lg:grid-cols-3",
                  ),
                  children: b.map((e, s) => {
                    let { url: l, videoId: t } = e;
                    return (0, r.jsx)(
                      i.Zp,
                      {
                        className:
                          "border-[#F2EAD3]/60 rounded-xl bg-white overflow-hidden hover:shadow-lg transition-all group cursor-pointer",
                        onClick: () => u(t),
                        children: (0, r.jsx)(i.Wu, {
                          className: "p-0",
                          children: (0, r.jsxs)("div", {
                            className: "relative aspect-video bg-[#F2EAD3]",
                            children: [
                              (0, r.jsx)("img", {
                                src: "https://img.youtube.com/vi/".concat(
                                  t,
                                  "/mqdefault.jpg",
                                ),
                                alt: "".concat(d, " video ").concat(s + 1),
                                className: "w-full h-full object-cover",
                                loading: "lazy",
                              }),
                              (0, r.jsx)("div", {
                                className:
                                  "absolute inset-0 flex items-center justify-center bg-black/20 group-hover:bg-black/30 transition-colors",
                                children: (0, r.jsx)("div", {
                                  className:
                                    "w-14 h-14 sm:w-16 sm:h-16 rounded-full bg-[#F4991A] flex items-center justify-center shadow-lg group-hover:scale-110 transition-transform",
                                  children: (0, r.jsx)(n.A, {
                                    className:
                                      "h-6 w-6 sm:h-7 sm:w-7 text-white fill-white ml-1",
                                  }),
                                }),
                              }),
                            ],
                          }),
                        }),
                      },
                      t,
                    );
                  }),
                }),
                h &&
                  (0, r.jsx)("div", {
                    className:
                      "fixed inset-0 z-50 flex items-center justify-center bg-black/80 p-4",
                    onClick: () => u(null),
                    children: (0, r.jsxs)("div", {
                      className:
                        "relative w-full max-w-4xl aspect-video bg-black rounded-xl overflow-hidden",
                      onClick: (e) => e.stopPropagation(),
                      children: [
                        (0, r.jsx)("button", {
                          onClick: () => u(null),
                          className:
                            "absolute -top-12 right-0 sm:top-4 sm:right-4 z-10 w-10 h-10 rounded-full bg-white/10 hover:bg-white/20 flex items-center justify-center transition-colors",
                          "aria-label": "Close video",
                          children: (0, r.jsx)(a.A, {
                            className: "h-5 w-5 text-white",
                          }),
                        }),
                        (0, r.jsx)("iframe", {
                          src: "https://www.youtube.com/embed/".concat(
                            h,
                            "?autoplay=1&rel=0",
                          ),
                          title: "YouTube video player",
                          className: "w-full h-full",
                          frameBorder: "0",
                          allow:
                            "accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture",
                          allowFullScreen: !0,
                        }),
                      ],
                    }),
                  }),
              ],
            });
      }
    },
    69442: (e, s, l) => {
      (Promise.resolve().then(l.bind(l, 56748)),
        Promise.resolve().then(l.bind(l, 14133)),
        Promise.resolve().then(l.bind(l, 27587)),
        Promise.resolve().then(l.bind(l, 96026)),
        Promise.resolve().then(l.bind(l, 48861)),
        Promise.resolve().then(l.bind(l, 59254)),
        Promise.resolve().then(l.bind(l, 80074)),
        Promise.resolve().then(l.bind(l, 69878)),
        Promise.resolve().then(l.bind(l, 47381)),
        Promise.resolve().then(l.bind(l, 59256)),
        Promise.resolve().then(l.bind(l, 51579)),
        Promise.resolve().then(l.bind(l, 97891)),
        Promise.resolve().then(l.bind(l, 51322)),
        Promise.resolve().then(l.bind(l, 58963)),
        Promise.resolve().then(l.bind(l, 77589)),
        Promise.resolve().then(l.bind(l, 55396)),
        Promise.resolve().then(l.bind(l, 64968)),
        Promise.resolve().then(l.bind(l, 7281)),
        Promise.resolve().then(l.bind(l, 71921)),
        Promise.resolve().then(l.bind(l, 93774)),
        Promise.resolve().then(l.bind(l, 21023)));
    },
  },
  (e) => {
    var s = (s) => e((e.s = s));
    (e.O(0, [46593, 36209, 84121, 72076, 77358], () => s(69442)),
      (_N_E = e.O()));
  },
]);
