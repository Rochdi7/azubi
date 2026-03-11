(self.webpackChunk_N_E = self.webpackChunk_N_E || []).push([
  [6290],
  {
    23238: (e, a, s) => {
      Promise.resolve().then(s.bind(s, 65272));
    },
    65272: (e, a, s) => {
      "use strict";
      (s.r(a), s.d(a, { default: () => g }));
      var t = s(70207),
        r = s(87223),
        n = s(41881),
        i = s(17802),
        o = s(14207),
        c = s(95889),
        l = s(52141),
        d = s(35121),
        m = s(73235),
        p = s(85177),
        u = s(88117),
        x = s(43431),
        h = s(31159);
      function g() {
        let [e, a] = (0, r.useState)([]),
          [s, g] = (0, r.useState)(!0),
          [y, b] = (0, r.useState)(null);
        return (
          (0, r.useEffect)(() => {
            (async () => {
              try {
                g(!0);
                let e = await (0, p.IS)();
                a(e);
              } catch (e) {
                (console.error("Failed to fetch sectors:", e),
                  b("Failed to load sectors. Please try again later."));
              } finally {
                g(!1);
              }
            })();
          }, []),
          (0, t.jsxs)("div", {
            className: "flex flex-col",
            children: [
              (0, t.jsx)(m.d, {
                badge: { text: "Career Sectors", icon: u.A },
                title: "Ausbildung Sectors in Germany",
                subtitle:
                  "Browse 60,000+ jobs across 15 career sectors. Find your sector, apply with smart tools, and start earning €850-1,300/month.",
                primaryCta: {
                  text: "Browse Sectors",
                  href: "#sectors-grid",
                  icon: (0, t.jsx)(x.A, { className: "w-5 h-5 mr-2" }),
                },
                secondaryCta: {
                  text: "Find Jobs",
                  href: "/jobs",
                  icon: (0, t.jsx)(u.A, { className: "w-5 h-5 mr-2" }),
                },
                backgroundImage: "hamburg-harbor-hero-autumn.webp",
                backgroundAlt:
                  "Hamburg harbor in autumn - Germany's business and port city",
                landmarkCaption: "Hamburg Harbor, Germany",
                alignment: "center",
              }),
              (0, t.jsx)("section", {
                id: "sectors-grid",
                className: "py-16",
                children: (0, t.jsx)("div", {
                  className: "container px-4 md:px-6",
                  children: s
                    ? (0, t.jsxs)("div", {
                        className: "flex justify-center items-center py-20",
                        children: [
                          (0, t.jsx)(h.A, {
                            className: "h-8 w-8 animate-spin text-primary",
                          }),
                          (0, t.jsx)("span", {
                            className: "ml-2 text-lg",
                            children: "Loading sectors...",
                          }),
                        ],
                      })
                    : y
                      ? (0, t.jsxs)("div", {
                          className: "text-center py-12",
                          children: [
                            (0, t.jsx)("p", {
                              className: "text-red-500",
                              children: y,
                            }),
                            (0, t.jsx)("button", {
                              onClick: () => window.location.reload(),
                              className:
                                "mt-4 px-4 py-2 bg-primary text-white rounded-md",
                              children: "Try Again",
                            }),
                          ],
                        })
                      : (0, t.jsx)("div", {
                          className:
                            "grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mb-16",
                          children: e.map((e) =>
                            (0, t.jsx)(
                              n.f,
                              {
                                sector: {
                                  id: e.slug,
                                  name: e.name,
                                  slug: e.slug,
                                  shortDescription: e.short_description,
                                  mascotImage: e.mascot_image_url || "",
                                },
                              },
                              e.id,
                            ),
                          ),
                        }),
                }),
              }),
              (0, t.jsx)("section", {
                className: "py-12 bg-beige/30",
                children: (0, t.jsx)("div", {
                  className: "container px-4 md:px-6",
                  children: (0, t.jsxs)("div", {
                    className: "max-w-4xl mx-auto text-center",
                    children: [
                      (0, t.jsx)(l.D, {
                        level: 3,
                        className: "mb-4",
                        children: "Why Ausbildung?",
                      }),
                      (0, t.jsx)(d.f, {
                        className: "text-muted-foreground mb-6",
                        children:
                          "Germany's dual vocational training combines workplace experience with education. You earn €850-1,300/month while learning, pay no tuition, and gain a direct pathway to permanent residency.",
                      }),
                      (0, t.jsxs)("div", {
                        className: "flex flex-wrap justify-center gap-3",
                        children: [
                          (0, t.jsx)(i.E, {
                            variant: "secondary",
                            className: "px-4 py-2",
                            children: "Earn while you learn",
                          }),
                          (0, t.jsx)(i.E, {
                            variant: "secondary",
                            className: "px-4 py-2",
                            children: "No tuition fees",
                          }),
                          (0, t.jsx)(i.E, {
                            variant: "secondary",
                            className: "px-4 py-2",
                            children: "High job security",
                          }),
                          (0, t.jsx)(i.E, {
                            variant: "secondary",
                            className: "px-4 py-2",
                            children: "PR pathway",
                          }),
                        ],
                      }),
                    ],
                  }),
                }),
              }),
              (0, t.jsx)("section", {
                className: "py-16 bg-background",
                children: (0, t.jsx)("div", {
                  className: "container px-4 md:px-6",
                  children: (0, t.jsx)(c.HomepageLeadMagnet, {
                    pdfType: "recruitment-strategy",
                  }),
                }),
              }),
              (0, t.jsx)(o.CTASection, {
                badge: { text: "Ready to apply?" },
                title: "Browse Available Ausbildung Positions",
                description:
                  "Explore hundreds of training opportunities from verified German employers. Create your profile and start applying to positions that match your skills and career goals.",
                action: {
                  text: "View All Positions",
                  href: "/dashboard/jobs",
                  variant: "default",
                },
                secondaryAction: {
                  text: "Get Expert Help",
                  href: "/consultation",
                  variant: "outline",
                },
                mascot: {
                  src: "/mascot/mascot_pointing_male.webp",
                  alt: "Young Oak mascot pointing you to start your Ausbildung journey",
                },
              }),
            ],
          })
        );
      }
    },
  },
  (e) => {
    var a = (a) => e((e.s = a));
    (e.O(0, [46593, 36209, 84121, 72076, 77358], () => a(23238)),
      (_N_E = e.O()));
  },
]);
