(self.webpackChunk_N_E = self.webpackChunk_N_E || []).push([
  [7331],
  {
    6585: (e, n, r) => {
      "use strict";
      r.d(n, { GermanHeader: () => P });
      var l = r(70207),
        a = r(54573),
        i = r(43431),
        s = r(27239),
        u = r(23072),
        t = r(52461),
        d = r(11299),
        o = r(67739),
        c = r(30478),
        m = r(60914),
        b = r(74285),
        h = r(72982),
        g = r(81994),
        A = r(63016),
        f = r(34379),
        x = r(84217),
        p = r(5101),
        k = r(72815),
        v = r(5e4),
        w = r(28131),
        j = r(47161),
        N = r(29005),
        B = r(81077);
      let C = [
        { name: "Startseite", url: "/de", icon: a.A },
        { name: "Jobs", url: "/de/stellenangebote", icon: i.A },
        {
          name: "Bewerbungstools",
          url: "/de/lebenslauf-vorlagen",
          icon: s.A,
          badge: { text: "Beliebt", variant: "popular" },
          children: [
            {
              name: "Lebenslauf-Vorlagen",
              url: "/de/lebenslauf-vorlagen",
              icon: s.A,
            },
            {
              name: "Bewerbungsschreiben",
              url: "/de/bewerbungsschreiben",
              icon: u.A,
            },
            {
              name: "Motivationsschreiben",
              url: "/de/motivationsschreiben",
              icon: t.A,
            },
            { name: "Berufstest", url: "/de/berufstest", icon: d.A },
            { name: "Gehalt & Karriere", url: "/de/gehalt", icon: o.A },
            {
              name: "Sch\xfclerpraktikum",
              url: "/de/schuelerpraktikum",
              icon: c.A,
            },
          ],
        },
        {
          name: "Studienf\xfchrer",
          url: "/de/ausbildung-in-deutschland",
          icon: m.A,
          children: [
            {
              name: "Ausbildung in Deutschland",
              url: "/de/ausbildung-in-deutschland",
              icon: c.A,
            },
            {
              name: "Ausbildung Grundlagen",
              url: "/de/ausbildung-grundlagen",
              icon: b.A,
            },
            {
              name: "Warum Ausbildung w\xe4hlen",
              url: "/de/warum-ausbildung",
              icon: h.A,
            },
            {
              name: "Programme finden",
              url: "/de/programme-finden",
              icon: i.A,
            },
            { name: "Voraussetzungen", url: "/de/anforderungen", icon: u.A },
            { name: "Sprache", url: "/de/sprache", icon: g.A },
            { name: "Visa", url: "/de/visa", icon: A.A },
            { name: "Kosten", url: "/de/kosten", icon: o.A },
            { name: "Bewerbung", url: "/de/bewerbung", icon: c.A },
            { name: "Unterkunft", url: "/de/unterkunft", icon: f.A },
            { name: "Zeitplan", url: "/de/zeitplan", icon: x.A },
            { name: "Alltag", url: "/de/alltag", icon: t.A },
            {
              name: "Kulturelle Integration",
              url: "/de/kulturelle-integration",
              icon: p.A,
            },
            {
              name: "Auszubildenden-Rechte",
              url: "/de/azubi-rechte",
              icon: k.A,
            },
            {
              name: "Ausbildung wechseln",
              url: "/de/ausbildung/berufswechsel",
              icon: v.A,
            },
            {
              name: "Nach der Ausbildung",
              url: "/de/nach-ausbildung",
              icon: w.A,
            },
            { name: "FAQ", url: "/de/ausbildung-faq", icon: j.A },
          ],
        },
        { name: "Kontakt", url: "/de/kontakt", icon: N.A },
      ];
      function P() {
        return (0, l.jsx)("header", {
          children: (0, l.jsx)(B.j, { items: C, locale: "de" }),
        });
      }
    },
    16008: (e, n, r) => {
      "use strict";
      r.d(n, { CookieConsentBanner: () => o });
      var l = r(70207),
        a = r(87223),
        i = (r(54459), r(45748)),
        s = (r(30945), r(65915), r(39945)),
        u = r(39441),
        t = r(13577),
        d = r(10542);
      function o() {
        let { showBanner: e, acceptAll: n, rejectAll: r } = (0, t.uC)(),
          [l, i] = (0, a.useState)(!1);
        return null;
      }
      function c(e) {
        let {
          title: n,
          description: r,
          enabled: a,
          disabled: i,
          onChange: s,
          examples: u,
        } = e;
        return (0, l.jsx)("div", {
          className: "p-4 border border-border rounded-lg",
          children: (0, l.jsxs)("div", {
            className: "flex items-start justify-between mb-2",
            children: [
              (0, l.jsxs)("div", {
                className: "flex-1",
                children: [
                  (0, l.jsx)("h3", {
                    className: "font-medium text-foreground",
                    children: n,
                  }),
                  (0, l.jsx)("p", {
                    className: "text-sm text-muted-foreground mt-1",
                    children: r,
                  }),
                  (0, l.jsxs)("p", {
                    className: "text-xs text-muted-foreground mt-2",
                    children: [
                      (0, l.jsx)("span", {
                        className: "font-medium",
                        children: "Beispiele:",
                      }),
                      " ",
                      u,
                    ],
                  }),
                ],
              }),
              (0, l.jsx)("div", {
                className: "ml-4 shrink-0",
                children: (0, l.jsx)("button", {
                  type: "button",
                  role: "switch",
                  "aria-checked": a,
                  disabled: i,
                  onClick: () => (null == s ? void 0 : s(!a)),
                  className:
                    "\n              relative inline-flex h-6 w-11 items-center rounded-full transition-colors\n              "
                      .concat(a ? "bg-primary" : "bg-muted", "\n              ")
                      .concat(
                        i ? "cursor-not-allowed opacity-50" : "cursor-pointer",
                        "\n            ",
                      ),
                  children: (0, l.jsx)("span", {
                    className:
                      "\n                inline-block h-4 w-4 rounded-full bg-white transition-transform\n                ".concat(
                        a ? "translate-x-6" : "translate-x-1",
                        "\n              ",
                      ),
                  }),
                }),
              }),
            ],
          }),
        });
      }
    },
    30082: (e, n, r) => {
      (Promise.resolve().then(r.t.bind(r, 10542, 23)),
        Promise.resolve().then(r.bind(r, 6585)),
        Promise.resolve().then(r.bind(r, 16008)),
        Promise.resolve().then(r.bind(r, 92371)),
        Promise.resolve().then(r.bind(r, 13577)));
    },
  },
  (e) => {
    var n = (n) => e((e.s = n));
    (e.O(0, [46593, 36209, 84121, 72076, 77358], () => n(30082)),
      (_N_E = e.O()));
  },
]);
