(self.webpackChunk_N_E = self.webpackChunk_N_E || []).push([
  [93874],
  {
    25631: (e, r, s) => {
      (Promise.resolve().then(s.t.bind(s, 10542, 23)),
        Promise.resolve().then(s.bind(s, 95484)),
        Promise.resolve().then(s.bind(s, 33121)),
        Promise.resolve().then(s.bind(s, 14207)));
    },
    33121: (e, r, s) => {
      "use strict";
      s.d(r, { PressHero: () => o });
      var t = s(70207),
        a = s(73235),
        l = s(58250),
        n = s(46031),
        i = s(39175);
      function o() {
        return (0, t.jsx)(a.d, {
          badge: { text: "Press & Media", icon: l.A },
          title: "Press Center",
          subtitle: "Latest news and announcements from GoAusbildung",
          primaryCta: {
            text: "Latest News",
            href: "#press-releases",
            icon: (0, t.jsx)(n.A, { className: "w-5 h-5 mr-2" }),
          },
          secondaryCta: {
            text: "Media Kit",
            href: "#media-resources",
            icon: (0, t.jsx)(i.A, { className: "w-5 h-5 mr-2" }),
          },
          backgroundImage: "cologne-cathedral-hero-autumn.webp",
          backgroundAlt:
            "Cologne Cathedral in autumn - iconic German landmark for press and media",
          landmarkCaption: "Cologne Cathedral, North Rhine-Westphalia",
          alignment: "center",
        });
      }
    },
    95484: (e, r, s) => {
      "use strict";
      s.d(r, { PressCard: () => c });
      var t = s(70207),
        a = s(10542),
        l = s.n(a),
        n = s(50018),
        i = s(84217),
        o = s(46031),
        d = s(82110);
      function c(e) {
        let { release: r, featured: s = !1 } = e;
        return (0, t.jsx)(l(), {
          href: "/press/".concat(r.slug),
          className: "group block",
          children: (0, t.jsxs)("article", {
            className: (0, d.cn)(
              "h-full",
              "rounded-xl border bg-card overflow-hidden",
              "transition-all duration-200",
              "hover:shadow-lg hover:-translate-y-0.5",
              s && "md:col-span-2 lg:col-span-1 border-border",
            ),
            children: [
              r.featured_image &&
                (0, t.jsx)("div", {
                  className:
                    "relative w-full aspect-[3/2] overflow-hidden bg-muted",
                  children: (0, t.jsx)(n.default, {
                    src: r.featured_image,
                    alt: r.title,
                    width: 768,
                    height: 512,
                    className:
                      "object-cover w-full h-full transition-transform duration-300 group-hover:scale-105",
                  }),
                }),
              (0, t.jsxs)("div", {
                className: "flex flex-col h-full p-6",
                children: [
                  (0, t.jsxs)("div", {
                    className:
                      "flex items-center gap-1 text-xs text-muted-foreground mb-3",
                    children: [
                      (0, t.jsx)(i.A, { className: "h-3.5 w-3.5" }),
                      (0, t.jsx)("time", {
                        children: (0, d.Yq)(r.publish_date),
                      }),
                    ],
                  }),
                  (0, t.jsx)("h3", {
                    className: (0, d.cn)(
                      "font-semibold mb-2",
                      "group-hover:text-primary:text-primary",
                      "transition-colors",
                      "line-clamp-2",
                      s ? "text-xl" : "text-lg",
                    ),
                    children: r.title,
                  }),
                  (r.excerpt || r.subtitle) &&
                    (0, t.jsx)("p", {
                      className:
                        "text-sm text-muted-foreground line-clamp-3 mb-4 flex-grow",
                      children: r.excerpt || r.subtitle,
                    }),
                  (0, t.jsxs)("div", {
                    className:
                      "flex items-center gap-1 text-sm font-medium text-primary group-hover:gap-2 transition-all",
                    children: [
                      "Read more",
                      (0, t.jsx)(o.A, { className: "h-3.5 w-3.5" }),
                    ],
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
    var r = (r) => e((e.s = r));
    (e.O(0, [46593, 36209, 84121, 72076, 77358], () => r(25631)),
      (_N_E = e.O()));
  },
]);
