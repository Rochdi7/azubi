(self.webpackChunk_N_E = self.webpackChunk_N_E || []).push([
  [18552],
  {
    14808: (e, s, i) => {
      "use strict";
      i.d(s, { EmployerChallengeSection: () => m });
      var t = i(70207),
        l = i(45748),
        a = i(95034),
        o = i(5101),
        n = i(28131),
        r = i(47981),
        d = i(95992);
      let c = {
          hidden: { opacity: 0, y: 20 },
          visible: (e) => ({
            opacity: 1,
            y: 0,
            transition: {
              duration: 0.6,
              delay: 0.1 * e,
              ease: [0.22, 1, 0.36, 1],
            },
          }),
        },
        h = [
          {
            icon: o.A,
            stat: "630.000",
            label: "Offene Ausbildungspl\xe4tze",
            description:
              "Deutschland steht vor einem massiven Fachkr\xe4ftemangel, besonders in Pflegeberufen, Handwerk und Gastronomie.",
          },
          {
            icon: n.A,
            stat: "4-6 Monate",
            label: "Durchschnittliche Recruiting-Dauer",
            description:
              "Traditionelle Recruiting-Methoden sind zeitaufwendig und oft erfolglos bei der Suche nach qualifizierten Kandidaten.",
          },
          {
            icon: r.A,
            stat: "47%",
            label: "Weniger Bewerber seit 2010",
            description:
              "Die Zahl der Bewerber auf Ausbildungspl\xe4tze sinkt kontinuierlich, w\xe4hrend der Bedarf steigt.",
          },
          {
            icon: d.A,
            stat: "5.000-15.000€",
            label: "Kosten pro Einstellung",
            description:
              "Recruiting-Agenturen und Headhunter verlangen hohe Geb\xfchren, die sich kleine und mittelst\xe4ndische Unternehmen oft nicht leisten k\xf6nnen.",
          },
        ];
      function m() {
        return (0, t.jsx)("section", {
          className: "py-16 md:py-24",
          style: { backgroundColor: "#F9F5F0" },
          children: (0, t.jsxs)(a.m, {
            size: "lg",
            children: [
              (0, t.jsx)("div", {
                className: "text-center mb-16 max-w-3xl mx-auto",
                children: (0, t.jsxs)(l.P.div, {
                  custom: 0,
                  initial: "hidden",
                  whileInView: "visible",
                  viewport: { once: !0 },
                  variants: c,
                  children: [
                    (0, t.jsxs)("div", {
                      className:
                        "inline-flex items-center gap-2 px-4 py-2 rounded-full mb-6",
                      style: { backgroundColor: "#F2EAD3" },
                      children: [
                        (0, t.jsx)(d.A, {
                          className: "w-4 h-4",
                          style: { color: "#344F1F" },
                        }),
                        (0, t.jsx)("span", {
                          className: "text-sm font-medium",
                          style: { color: "#344F1F" },
                          children: "Die Herausforderung",
                        }),
                      ],
                    }),
                    (0, t.jsx)("h2", {
                      className:
                        "text-3xl md:text-4xl lg:text-5xl font-bold mb-6",
                      style: { color: "#344F1F" },
                      children: "Recruiting ist schwieriger denn je",
                    }),
                    (0, t.jsx)("p", {
                      className: "text-lg md:text-xl leading-relaxed",
                      style: { color: "#344F1F", opacity: 0.8 },
                      children:
                        "Deutsche Unternehmen stehen vor beispiellosen Herausforderungen bei der Suche nach qualifizierten Auszubildenden. Die Fakten sprechen f\xfcr sich.",
                    }),
                  ],
                }),
              }),
              (0, t.jsx)("div", {
                className: "grid sm:grid-cols-2 lg:grid-cols-4 gap-6 mb-16",
                children: h.map((e, s) => {
                  let i = e.icon;
                  return (0, t.jsx)(
                    l.P.div,
                    {
                      custom: s + 1,
                      initial: "hidden",
                      whileInView: "visible",
                      viewport: { once: !0 },
                      variants: c,
                      children: (0, t.jsxs)("div", {
                        className:
                          "p-6 rounded-xl h-full transition-all hover:shadow-lg",
                        style: { backgroundColor: "white" },
                        children: [
                          (0, t.jsx)("div", {
                            className:
                              "w-12 h-12 rounded-full flex items-center justify-center mb-4",
                            style: {
                              backgroundColor: "rgba(244, 153, 26, 0.1)",
                            },
                            children: (0, t.jsx)(i, {
                              className: "w-6 h-6",
                              style: { color: "#F4991A" },
                            }),
                          }),
                          (0, t.jsxs)("div", {
                            className: "mb-4",
                            children: [
                              (0, t.jsx)("p", {
                                className:
                                  "text-2xl md:text-3xl font-bold mb-1",
                                style: { color: "#344F1F" },
                                children: e.stat,
                              }),
                              (0, t.jsx)("p", {
                                className: "text-sm font-semibold",
                                style: { color: "#F4991A" },
                                children: e.label,
                              }),
                            ],
                          }),
                          (0, t.jsx)("p", {
                            className: "text-sm leading-relaxed",
                            style: { color: "#344F1F", opacity: 0.8 },
                            children: e.description,
                          }),
                        ],
                      }),
                    },
                    s,
                  );
                }),
              }),
              (0, t.jsx)(l.P.div, {
                custom: 5,
                initial: "hidden",
                whileInView: "visible",
                viewport: { once: !0 },
                variants: c,
                className: "text-center",
                children: (0, t.jsxs)("div", {
                  className: "p-8 md:p-12 rounded-xl max-w-4xl mx-auto",
                  style: { backgroundColor: "white" },
                  children: [
                    (0, t.jsx)("h3", {
                      className: "text-2xl md:text-3xl font-bold mb-4",
                      style: { color: "#344F1F" },
                      children: "Internationale Talente bleiben unentdeckt",
                    }),
                    (0, t.jsx)("p", {
                      className: "text-lg leading-relaxed mb-6",
                      style: { color: "#344F1F", opacity: 0.8 },
                      children:
                        "W\xe4hrend deutsche Unternehmen h\xe4nderingend nach Auszubildenden suchen, gibt es weltweit tausende motivierte junge Menschen mit Deutschkenntnissen, die eine Ausbildung in Deutschland machen m\xf6chten.",
                    }),
                    (0, t.jsx)("p", {
                      className: "text-lg font-semibold",
                      style: { color: "#F4991A" },
                      children:
                        "Das Problem? Diese beiden Seiten finden nicht zueinander.",
                    }),
                  ],
                }),
              }),
            ],
          }),
        });
      }
    },
    18937: (e, s, i) => {
      "use strict";
      i.d(s, { AzubiPoweredSection: () => g });
      var t = i(70207),
        l = i(45748),
        a = i(95034),
        o = i(39441),
        n = i(80187),
        r = i(63016),
        d = i(1701),
        c = i(46031),
        h = i(10542),
        m = i.n(h);
      let x = {
        hidden: { opacity: 0, y: 20 },
        visible: (e) => ({
          opacity: 1,
          y: 0,
          transition: {
            duration: 0.6,
            delay: 0.1 * e,
            ease: [0.22, 1, 0.36, 1],
          },
        }),
      };
      function g() {
        return (0, t.jsx)("section", {
          className: "py-16 md:py-24",
          style: { backgroundColor: "white" },
          children: (0, t.jsx)(a.m, {
            size: "lg",
            children: (0, t.jsx)(l.P.div, {
              custom: 0,
              initial: "hidden",
              whileInView: "visible",
              viewport: { once: !0 },
              variants: x,
              children: (0, t.jsx)(n.Zp, {
                className: "p-10 md:p-14 text-center rounded-3xl border-0",
                style: {
                  backgroundColor: "#F9F5F0",
                  boxShadow: "0 20px 40px rgba(52, 79, 31, 0.08)",
                },
                children: (0, t.jsxs)("div", {
                  className: "max-w-3xl mx-auto space-y-8",
                  children: [
                    (0, t.jsxs)("div", {
                      className:
                        "inline-flex items-center gap-2 px-4 py-2 rounded-full mx-auto",
                      style: {
                        backgroundColor: "rgba(244, 153, 26, 0.1)",
                        border: "1px solid rgba(244, 153, 26, 0.2)",
                      },
                      children: [
                        (0, t.jsx)(r.A, {
                          className: "w-4 h-4",
                          style: { color: "#F4991A" },
                        }),
                        (0, t.jsx)("span", {
                          className: "text-sm font-medium",
                          style: { color: "#344F1F" },
                          children: "Powered by Innovation",
                        }),
                      ],
                    }),
                    (0, t.jsx)("h2", {
                      className:
                        "text-3xl sm:text-4xl font-bold tracking-tight",
                      style: { color: "#344F1F" },
                      children: "Eine Initiative von Azubi",
                    }),
                    (0, t.jsxs)("p", {
                      className: "text-lg leading-relaxed",
                      style: { color: "#344F1F", opacity: 0.8 },
                      children: [
                        "Azubi wird stolz unterst\xfctzt von",
                        " ",
                        (0, t.jsx)(m(), {
                          href: "https://qogentglobal.com",
                          target: "_blank",
                          rel: "noopener noreferrer",
                          className: "font-semibold underline decoration-2",
                          style: {
                            color: "#F4991A",
                            textDecorationColor: "#F4991A",
                          },
                          children: "Azubi",
                        }),
                        ", einem f\xfchrenden Unternehmen im Bereich internationaler Bildung und Technologie. Unsere Mission ist es, erstklassige M\xf6glichkeiten f\xfcr ambitionierte Menschen weltweit zug\xe4nglich zu machen – und Unternehmen dabei zu helfen, diese Talente zu finden.",
                      ],
                    }),
                    (0, t.jsxs)("div", {
                      className: "grid md:grid-cols-2 gap-8 pt-8",
                      children: [
                        (0, t.jsxs)("div", {
                          className: "p-8 rounded-2xl text-left",
                          style: { backgroundColor: "#F2EAD3" },
                          children: [
                            (0, t.jsxs)("div", {
                              className: "flex items-start gap-3 mb-4",
                              children: [
                                (0, t.jsx)(d.A, {
                                  className: "w-5 h-5 shrink-0 mt-1",
                                  style: { color: "#F4991A" },
                                }),
                                (0, t.jsx)("h3", {
                                  className: "text-lg font-semibold",
                                  style: { color: "#344F1F" },
                                  children: "Marrakech Office",
                                }),
                              ],
                            }),
                            (0, t.jsxs)("p", {
                              style: { color: "#344F1F", opacity: 0.8 },
                              children: [
                                "Marrakech",
                                (0, t.jsx)("br", {}),
                                "",
                                (0, t.jsx)("br", {}),
                                "Morocco",
                              ],
                            }),
                          ],
                        }),
                        (0, t.jsxs)("div", {
                          className: "p-8 rounded-2xl text-left",
                          style: { backgroundColor: "#F2EAD3" },
                          children: [
                            (0, t.jsxs)("div", {
                              className: "flex items-start gap-3 mb-4",
                              children: [
                                (0, t.jsx)(d.A, {
                                  className: "w-5 h-5 shrink-0 mt-1",
                                  style: { color: "#F4991A" },
                                }),
                                (0, t.jsx)("h3", {
                                  className: "text-lg font-semibold",
                                  style: { color: "#344F1F" },
                                  children: "Rabat Office",
                                }),
                              ],
                            }),
                            (0, t.jsxs)("p", {
                              style: { color: "#344F1F", opacity: 0.8 },
                              children: [
                                "Rabat",
                                (0, t.jsx)("br", {}),
                                "",
                                (0, t.jsx)("br", {}),
                                "Morocco",
                              ],
                            }),
                          ],
                        }),
                      ],
                    }),
                    (0, t.jsx)("div", {
                      className: "pt-4",
                      children: (0, t.jsx)(o.$, {
                        asChild: !0,
                        variant: "outline",
                        size: "lg",
                        className:
                          "rounded-full px-8 text-base font-medium transition-all hover:shadow-lg",
                        style: {
                          borderColor: "#344F1F",
                          color: "#344F1F",
                          minHeight: "48px",
                        },
                        children: (0, t.jsxs)(m(), {
                          href: "https://qogentglobal.com/about",
                          target: "_blank",
                          rel: "noopener noreferrer",
                          children: [
                            "Mehr \xfcber Azubi erfahren",
                            (0, t.jsx)(c.A, { className: "ml-2 w-4 h-4" }),
                          ],
                        }),
                      }),
                    }),
                  ],
                }),
              }),
            }),
          }),
        });
      }
    },
    50512: (e, s, i) => {
      "use strict";
      i.d(s, { Leadership: () => c });
      var t = i(70207),
        l = i(45748),
        a = i(50018),
        o = i(5101);
      let n = [
          {
            id: "1",
            name: "Uday Yatnalli",
            designation: "Gr\xfcnder und CEO",
            photoUrl:
              "https://storage.googleapis.com/codesommet-studio-portfolio/images/team/UdayYatnalli_codesommet.webp",
          },
          {
            id: "2",
            name: "Asha M. Lingaraju",
            designation: "Head of Operations",
            photoUrl:
              "https://storage.googleapis.com/codesommet-studio-portfolio/images/team/AshaLingaraju_codesommet.webp",
          },
          {
            id: "3",
            name: "Leo Joseph",
            designation: "Business Development Executive",
            photoUrl:
              "https://storage.googleapis.com/codesommet-studio-portfolio/images/team/LeoJoseph_codesommet.webp",
          },
        ],
        r = {
          hidden: { opacity: 0 },
          visible: { opacity: 1, transition: { staggerChildren: 0.1 } },
        },
        d = {
          hidden: { opacity: 0, y: 20 },
          visible: { opacity: 1, y: 0, transition: { duration: 0.6 } },
        };
      function c() {
        return (0, t.jsxs)(l.P.div, {
          variants: r,
          initial: "hidden",
          whileInView: "visible",
          viewport: { once: !0 },
          className: "space-y-12",
          children: [
            (0, t.jsxs)("div", {
              className: "text-center",
              children: [
                (0, t.jsxs)(l.P.div, {
                  initial: { opacity: 0, y: 20 },
                  whileInView: { opacity: 1, y: 0 },
                  viewport: { once: !0 },
                  transition: { duration: 0.6 },
                  className:
                    "inline-flex items-center gap-2 px-4 py-2 rounded-full mb-6",
                  style: {
                    backgroundColor: "rgba(244, 153, 26, 0.1)",
                    border: "1px solid rgba(244, 153, 26, 0.2)",
                  },
                  children: [
                    (0, t.jsx)(o.A, {
                      className: "w-4 h-4",
                      style: { color: "#F4991A" },
                    }),
                    (0, t.jsx)("span", {
                      className: "text-sm font-semibold",
                      style: { color: "#F4991A" },
                      children: "Das Dream Team",
                    }),
                  ],
                }),
                (0, t.jsx)("h3", {
                  className: "text-3xl md:text-4xl lg:text-5xl font-bold mb-4",
                  style: { color: "#344F1F" },
                  children: "Lernen Sie unser F\xfchrungsteam kennen",
                }),
                (0, t.jsx)("p", {
                  className: "text-lg md:text-xl max-w-2xl mx-auto",
                  style: { color: "#344F1F", opacity: 0.7 },
                  children:
                    "Die Vision\xe4re hinter Azubi, die Unternehmen und Talente zusammenbringen",
                }),
              ],
            }),
            (0, t.jsx)("div", {
              className:
                "grid grid-cols-1 md:grid-cols-3 gap-6 max-w-5xl mx-auto",
              children: n.map((e) =>
                (0, t.jsx)(
                  l.P.div,
                  {
                    variants: d,
                    className: "relative",
                    children: (0, t.jsxs)("div", {
                      className:
                        "relative overflow-hidden rounded-2xl shadow-lg",
                      style: { backgroundColor: "#344F1F" },
                      children: [
                        (0, t.jsx)("div", {
                          className: "relative aspect-[3/4] overflow-hidden",
                          children: (0, t.jsx)(a.default, {
                            src: e.photoUrl,
                            alt: e.name,
                            fill: !0,
                            className: "object-cover object-center",
                            sizes:
                              "(max-width: 768px) 100vw, (max-width: 1024px) 50vw, 33vw",
                          }),
                        }),
                        (0, t.jsxs)("div", {
                          className: "absolute bottom-0 left-0 right-0 p-6",
                          style: {
                            background:
                              "linear-gradient(to top, rgba(0,0,0,0.95), rgba(0,0,0,0.9), rgba(0,0,0,0))",
                          },
                          children: [
                            (0, t.jsx)("h4", {
                              className: "text-white text-xl font-bold mb-1",
                              children: e.name,
                            }),
                            (0, t.jsxs)("div", {
                              className: "flex items-center gap-2",
                              children: [
                                (0, t.jsx)("div", {
                                  className: "h-0.5 w-8",
                                  style: { backgroundColor: "#F4991A" },
                                }),
                                (0, t.jsx)("p", {
                                  className:
                                    "text-white/80 text-sm font-medium",
                                  children: e.designation,
                                }),
                              ],
                            }),
                          ],
                        }),
                      ],
                    }),
                  },
                  e.id,
                ),
              ),
            }),
            (0, t.jsx)(l.P.div, {
              initial: { opacity: 0, y: 20 },
              whileInView: { opacity: 1, y: 0 },
              viewport: { once: !0 },
              transition: { duration: 0.6, delay: 0.4 },
              className: "text-center",
              children: (0, t.jsx)("p", {
                className: "text-sm italic",
                style: { color: "#344F1F", opacity: 0.5 },
                children:
                  "Gemeinsam haben wir \xfcber 95 au\xdfergew\xf6hnliche Projekte in 15+ L\xe4ndern geliefert",
              }),
            }),
          ],
        });
      }
    },
    71110: (e, s, i) => {
      "use strict";
      i.d(s, { TeamPhotoCollage: () => m });
      var t = i(70207),
        l = i(45748),
        a = i(50018),
        o = i(5101),
        n = i(82164),
        r = i(52461);
      let d = [
          {
            src: "https://storage.googleapis.com/codesommet-studio-portfolio/images/team/codesommet-team-professional.webp",
            alt: "Azubi Professional Team Photo",
            width: 2334,
            height: 1556,
            category: "professional",
          },
          {
            src: "https://storage.googleapis.com/codesommet-studio-portfolio/images/team/codesommet-team-awards.webp",
            alt: "Azubi Team Receiving Awards",
            width: 2334,
            height: 1556,
            category: "celebration",
          },
          {
            src: "https://storage.googleapis.com/codesommet-studio-portfolio/images/team/codesommet-team-working.webp",
            alt: "Azubi Team Collaborating",
            width: 2334,
            height: 1556,
            category: "work",
          },
          {
            src: "https://storage.googleapis.com/codesommet-studio-portfolio/images/team/codesommet-team-celebration-cups.webp",
            alt: "Azubi Team Celebration",
            width: 2334,
            height: 1556,
            category: "celebration",
          },
          {
            src: "https://storage.googleapis.com/codesommet-studio-portfolio/images/team/codesommet-team-adventure.webp",
            alt: "Azubi Team Adventure Activity",
            width: 2334,
            height: 1556,
            category: "adventure",
          },
          {
            src: "https://storage.googleapis.com/codesommet-studio-portfolio/images/team/codesommet-team-pizza.webp",
            alt: "Azubi Team Pizza Party",
            width: 2334,
            height: 1556,
            category: "celebration",
          },
          {
            src: "https://storage.googleapis.com/codesommet-studio-portfolio/images/team/codesommet-team-outdoor.webp",
            alt: "Azubi Team Outdoor Event",
            width: 2074,
            height: 1556,
            category: "adventure",
          },
          {
            src: "https://storage.googleapis.com/codesommet-studio-portfolio/images/team/codesommet-team-outing-pool.webp",
            alt: "Azubi Team Pool Outing",
            width: 2334,
            height: 1556,
            category: "adventure",
          },
          {
            src: "https://storage.googleapis.com/codesommet-studio-portfolio/images/team/codesommet-team-awards-2.webp",
            alt: "Azubi Team Awards Ceremony",
            width: 2334,
            height: 1556,
            category: "celebration",
          },
        ],
        c = {
          hidden: { opacity: 0 },
          visible: { opacity: 1, transition: { staggerChildren: 0.1 } },
        },
        h = {
          hidden: { opacity: 0, y: 20 },
          visible: { opacity: 1, y: 0, transition: { duration: 0.6 } },
        };
      function m() {
        return (0, t.jsxs)("div", {
          className: "space-y-8",
          children: [
            (0, t.jsxs)(l.P.div, {
              initial: { opacity: 0, y: 30 },
              whileInView: { opacity: 1, y: 0 },
              viewport: { once: !0 },
              transition: { duration: 0.8 },
              className:
                "relative h-[400px] md:h-[500px] lg:h-[600px] rounded-3xl overflow-hidden shadow-2xl group",
              children: [
                (0, t.jsx)(a.default, {
                  src: d[0].src,
                  alt: d[0].alt,
                  fill: !0,
                  className:
                    "object-cover grayscale group-hover:grayscale-0 group-hover:scale-105 transition-all duration-700",
                  sizes:
                    "(max-width: 768px) 100vw, (max-width: 1200px) 90vw, 1200px",
                  priority: !0,
                }),
                (0, t.jsx)("div", {
                  className:
                    "absolute inset-0 bg-gradient-to-t from-black/70 via-black/30 to-transparent",
                }),
                (0, t.jsxs)("div", {
                  className: "absolute bottom-8 left-8 right-8 text-white",
                  children: [
                    (0, t.jsxs)("div", {
                      className: "flex items-center gap-2 mb-3",
                      children: [
                        (0, t.jsx)(o.A, { className: "w-5 h-5 text-white" }),
                        (0, t.jsx)("span", {
                          className:
                            "text-sm font-medium uppercase tracking-wide text-white",
                          children: "Unser Team",
                        }),
                      ],
                    }),
                    (0, t.jsx)("h3", {
                      className:
                        "text-2xl md:text-3xl lg:text-4xl font-bold text-white",
                      children:
                        "Lernen Sie die Menschen hinter Azubi kennen",
                    }),
                  ],
                }),
              ],
            }),
            (0, t.jsxs)(l.P.div, {
              variants: c,
              initial: "hidden",
              whileInView: "visible",
              viewport: { once: !0 },
              className:
                "grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4 md:gap-6",
              children: [
                (0, t.jsxs)(l.P.div, {
                  variants: h,
                  className:
                    "relative h-[300px] md:h-[400px] lg:col-span-2 rounded-2xl overflow-hidden shadow-lg group lg:row-start-1",
                  children: [
                    (0, t.jsx)(a.default, {
                      src: d[1].src,
                      alt: d[1].alt,
                      fill: !0,
                      className:
                        "object-cover grayscale group-hover:grayscale-0 group-hover:scale-105 transition-all duration-700",
                      sizes:
                        "(max-width: 768px) 100vw, (max-width: 1200px) 60vw, 800px",
                    }),
                    (0, t.jsx)("div", {
                      className:
                        "absolute inset-0 opacity-0 group-hover:opacity-100 transition-opacity duration-500",
                      style: {
                        background:
                          "linear-gradient(to bottom right, rgba(244, 153, 26, 0.2), transparent)",
                      },
                    }),
                    (0, t.jsxs)("div", {
                      className:
                        "absolute top-4 left-4 px-3 py-1.5 rounded-full flex items-center gap-2",
                      style: { backgroundColor: "rgba(255, 255, 255, 0.95)" },
                      children: [
                        (0, t.jsx)(n.A, {
                          className: "w-4 h-4",
                          style: { color: "#F4991A" },
                        }),
                        (0, t.jsx)("span", {
                          className: "text-sm font-semibold",
                          style: { color: "#344F1F" },
                          children: "Award Winners",
                        }),
                      ],
                    }),
                  ],
                }),
                (0, t.jsx)(l.P.div, {
                  variants: h,
                  className:
                    "relative h-[300px] md:h-[400px] rounded-2xl overflow-hidden shadow-lg group lg:row-start-1",
                  children: (0, t.jsx)(a.default, {
                    src: d[2].src,
                    alt: d[2].alt,
                    fill: !0,
                    className:
                      "object-cover grayscale group-hover:grayscale-0 group-hover:scale-105 transition-all duration-700",
                    sizes:
                      "(max-width: 768px) 100vw, (max-width: 1200px) 40vw, 400px",
                  }),
                }),
                (0, t.jsx)(l.P.div, {
                  variants: h,
                  className:
                    "relative h-[250px] md:h-[300px] rounded-2xl overflow-hidden shadow-lg group",
                  children: (0, t.jsx)(a.default, {
                    src: d[3].src,
                    alt: d[3].alt,
                    fill: !0,
                    className:
                      "object-cover grayscale group-hover:grayscale-0 group-hover:scale-105 transition-all duration-700",
                    sizes:
                      "(max-width: 768px) 100vw, (max-width: 1200px) 40vw, 400px",
                  }),
                }),
                (0, t.jsxs)(l.P.div, {
                  variants: h,
                  className:
                    "relative h-[250px] md:h-[300px] lg:col-span-2 rounded-2xl overflow-hidden shadow-lg group",
                  children: [
                    (0, t.jsx)(a.default, {
                      src: d[4].src,
                      alt: d[4].alt,
                      fill: !0,
                      className:
                        "object-cover grayscale group-hover:grayscale-0 group-hover:scale-105 transition-all duration-700",
                      sizes:
                        "(max-width: 768px) 100vw, (max-width: 1200px) 60vw, 800px",
                    }),
                    (0, t.jsxs)("div", {
                      className:
                        "absolute bottom-4 left-4 px-3 py-1.5 rounded-full flex items-center gap-2",
                      style: { backgroundColor: "rgba(255, 255, 255, 0.95)" },
                      children: [
                        (0, t.jsx)(r.A, {
                          className: "w-4 h-4",
                          style: { color: "#F4991A" },
                        }),
                        (0, t.jsx)("span", {
                          className: "text-sm font-semibold",
                          style: { color: "#344F1F" },
                          children: "Team Building",
                        }),
                      ],
                    }),
                  ],
                }),
                (0, t.jsx)(l.P.div, {
                  variants: h,
                  className:
                    "relative h-[300px] md:h-[350px] lg:h-[400px] rounded-2xl overflow-hidden shadow-lg group",
                  children: (0, t.jsx)(a.default, {
                    src: d[5].src,
                    alt: d[5].alt,
                    fill: !0,
                    className:
                      "object-cover grayscale group-hover:grayscale-0 group-hover:scale-105 transition-all duration-700",
                    sizes:
                      "(max-width: 768px) 100vw, (max-width: 1200px) 40vw, 400px",
                  }),
                }),
                (0, t.jsx)(l.P.div, {
                  variants: h,
                  className:
                    "relative h-[300px] md:h-[350px] lg:h-[400px] rounded-2xl overflow-hidden shadow-lg group",
                  children: (0, t.jsx)(a.default, {
                    src: d[6].src,
                    alt: d[6].alt,
                    fill: !0,
                    className:
                      "object-cover grayscale group-hover:grayscale-0 group-hover:scale-105 transition-all duration-700",
                    sizes:
                      "(max-width: 768px) 100vw, (max-width: 1200px) 40vw, 400px",
                  }),
                }),
                (0, t.jsx)(l.P.div, {
                  variants: h,
                  className:
                    "relative h-[300px] md:h-[350px] lg:h-[400px] rounded-2xl overflow-hidden shadow-lg group",
                  children: (0, t.jsx)(a.default, {
                    src: d[8].src,
                    alt: d[8].alt,
                    fill: !0,
                    className:
                      "object-cover grayscale group-hover:grayscale-0 group-hover:scale-105 transition-all duration-700",
                    sizes:
                      "(max-width: 768px) 100vw, (max-width: 1200px) 40vw, 400px",
                  }),
                }),
                (0, t.jsx)(l.P.div, {
                  variants: h,
                  className:
                    "relative h-[300px] md:h-[350px] lg:h-[400px] lg:col-span-3 rounded-2xl overflow-hidden shadow-lg group",
                  children: (0, t.jsx)(a.default, {
                    src: d[7].src,
                    alt: d[7].alt,
                    fill: !0,
                    className:
                      "object-cover grayscale group-hover:grayscale-0 group-hover:scale-105 transition-all duration-700",
                    sizes:
                      "(max-width: 768px) 100vw, (max-width: 1200px) 60vw, 800px",
                  }),
                }),
              ],
            }),
            (0, t.jsxs)(l.P.div, {
              initial: { opacity: 0, y: 20 },
              whileInView: { opacity: 1, y: 0 },
              viewport: { once: !0 },
              transition: { duration: 0.6 },
              className: "grid grid-cols-2 md:grid-cols-4 gap-4 md:gap-6 pt-4",
              children: [
                (0, t.jsxs)("div", {
                  className: "rounded-2xl p-6 shadow-md text-center",
                  style: { backgroundColor: "white" },
                  children: [
                    (0, t.jsx)("div", {
                      className: "text-3xl md:text-4xl font-bold mb-2",
                      style: { color: "#F4991A" },
                      children: "25+",
                    }),
                    (0, t.jsx)("p", {
                      className: "text-sm md:text-base font-medium",
                      style: { color: "#344F1F", opacity: 0.7 },
                      children: "Teammitglieder",
                    }),
                  ],
                }),
                (0, t.jsxs)("div", {
                  className: "rounded-2xl p-6 shadow-md text-center",
                  style: { backgroundColor: "white" },
                  children: [
                    (0, t.jsx)("div", {
                      className: "text-3xl md:text-4xl font-bold mb-2",
                      style: { color: "#F4991A" },
                      children: "3",
                    }),
                    (0, t.jsx)("p", {
                      className: "text-sm md:text-base font-medium",
                      style: { color: "#344F1F", opacity: 0.7 },
                      children: "Globale B\xfcros",
                    }),
                  ],
                }),
                (0, t.jsxs)("div", {
                  className: "rounded-2xl p-6 shadow-md text-center",
                  style: { backgroundColor: "white" },
                  children: [
                    (0, t.jsx)("div", {
                      className: "text-3xl md:text-4xl font-bold mb-2",
                      style: { color: "#F4991A" },
                      children: "95+",
                    }),
                    (0, t.jsx)("p", {
                      className: "text-sm md:text-base font-medium",
                      style: { color: "#344F1F", opacity: 0.7 },
                      children: "Projekte geliefert",
                    }),
                  ],
                }),
                (0, t.jsxs)("div", {
                  className: "rounded-2xl p-6 shadow-md text-center",
                  style: { backgroundColor: "white" },
                  children: [
                    (0, t.jsx)("div", {
                      className: "text-3xl md:text-4xl font-bold mb-2",
                      style: { color: "#F4991A" },
                      children: "15+",
                    }),
                    (0, t.jsx)("p", {
                      className: "text-sm md:text-base font-medium",
                      style: { color: "#344F1F", opacity: 0.7 },
                      children: "L\xe4nder bedient",
                    }),
                  ],
                }),
              ],
            }),
          ],
        });
      }
    },
    88805: (e, s, i) => {
      "use strict";
      i.d(s, { EmployerSolutionSection: () => v });
      var t = i(70207),
        l = i(45748),
        a = i(95034),
        o = i(39441),
        n = i(62165),
        r = i(63016),
        d = i(37426),
        c = i(67926),
        h = i(5101),
        m = i(51105),
        x = i(10542),
        g = i.n(x),
        p = i(50018);
      let u = {
          hidden: { opacity: 0, y: 20 },
          visible: (e) => ({
            opacity: 1,
            y: 0,
            transition: {
              duration: 0.6,
              delay: 0.1 * e,
              ease: [0.22, 1, 0.36, 1],
            },
          }),
        },
        b = [
          {
            icon: n.A,
            title: "100% Kostenlos",
            description:
              "Keine Vermittlungsgeb\xfchren, keine versteckten Kosten. Unsere Plattform ist f\xfcr Arbeitgeber v\xf6llig kostenfrei.",
          },
          {
            icon: r.A,
            title: "Internationale Reichweite",
            description:
              "Zugang zu \xfcber 12.500 qualifizierten Kandidaten aus 50+ L\xe4ndern mit verifizierten Deutschkenntnissen.",
          },
          {
            icon: d.A,
            title: "Vorgepr\xfcfte Kandidaten",
            description:
              "Alle Profile werden auf Sprachniveau (B1-C1), Qualifikationen und Motivation gepr\xfcft.",
          },
          {
            icon: c.A,
            title: "Schnelles Matching",
            description:
              "Intelligentes Matching-System verbindet Sie innerhalb von Tagen mit passenden Kandidaten.",
          },
          {
            icon: h.A,
            title: "Pers\xf6nliche Unterst\xfctzung",
            description:
              "Unser Team steht Ihnen bei Fragen zur Visa-Beantragung und Integration zur Seite.",
          },
          {
            icon: m.A,
            title: "Einfacher Prozess",
            description:
              "Stelle erstellen, Profile durchsuchen, Kandidaten kontaktieren – alles auf einer Plattform.",
          },
        ];
      function v() {
        return (0, t.jsx)("section", {
          className: "py-16 md:py-24",
          style: { backgroundColor: "white" },
          children: (0, t.jsxs)(a.m, {
            size: "lg",
            children: [
              (0, t.jsxs)("div", {
                className: "grid lg:grid-cols-2 gap-12 items-center mb-16",
                children: [
                  (0, t.jsx)("div", {
                    children: (0, t.jsxs)(l.P.div, {
                      custom: 0,
                      initial: "hidden",
                      whileInView: "visible",
                      viewport: { once: !0 },
                      variants: u,
                      children: [
                        (0, t.jsxs)("div", {
                          className:
                            "inline-flex items-center gap-2 px-4 py-2 rounded-full mb-6",
                          style: { backgroundColor: "rgba(244, 153, 26, 0.1)" },
                          children: [
                            (0, t.jsx)(m.A, {
                              className: "w-4 h-4",
                              style: { color: "#F4991A" },
                            }),
                            (0, t.jsx)("span", {
                              className: "text-sm font-medium",
                              style: { color: "#344F1F" },
                              children: "Die L\xf6sung",
                            }),
                          ],
                        }),
                        (0, t.jsx)("h2", {
                          className:
                            "text-3xl md:text-4xl lg:text-5xl font-bold mb-6",
                          style: { color: "#344F1F" },
                          children:
                            "Azubi: Die kostenlose Recruiting-Plattform",
                        }),
                        (0, t.jsx)("p", {
                          className: "text-lg leading-relaxed mb-6",
                          style: { color: "#344F1F", opacity: 0.8 },
                          children:
                            "Wir haben Azubi entwickelt, um die L\xfccke zwischen deutschen Unternehmen und internationalen Talenten zu schlie\xdfen – ohne die hohen Kosten traditioneller Personalvermittlung.",
                        }),
                        (0, t.jsx)("p", {
                          className: "text-lg leading-relaxed mb-8",
                          style: { color: "#344F1F", opacity: 0.8 },
                          children:
                            "Unsere Mission ist es, qualifizierte Auszubildende zug\xe4nglich zu machen – f\xfcr jedes Unternehmen, unabh\xe4ngig von Gr\xf6\xdfe oder Budget.",
                        }),
                        (0, t.jsxs)("div", {
                          className: "flex flex-wrap gap-4",
                          children: [
                            (0, t.jsx)(o.$, {
                              asChild: !0,
                              size: "lg",
                              className:
                                "rounded-full px-8 text-white font-semibold shadow-lg hover:shadow-xl transition-all",
                              style: { backgroundColor: "#F4991A" },
                              children: (0, t.jsx)(g(), {
                                href: "/arbeitgeber/auth/anmeldung",
                                children: "Kostenlos starten",
                              }),
                            }),
                            (0, t.jsx)(o.$, {
                              asChild: !0,
                              size: "lg",
                              variant: "outline",
                              className:
                                "rounded-full px-8 font-semibold border-2 transition-all",
                              style: {
                                borderColor: "#344F1F",
                                color: "#344F1F",
                                backgroundColor: "transparent",
                              },
                              children: (0, t.jsx)(g(), {
                                href: "/arbeitgeber/wie-es-funktioniert",
                                children: "Mehr erfahren",
                              }),
                            }),
                          ],
                        }),
                      ],
                    }),
                  }),
                  (0, t.jsx)(l.P.div, {
                    custom: 1,
                    initial: "hidden",
                    whileInView: "visible",
                    viewport: { once: !0 },
                    variants: u,
                    className: "relative hidden lg:block",
                    children: (0, t.jsx)("div", {
                      className: "relative w-full h-[400px]",
                      children: (0, t.jsx)(p.default, {
                        src: "/mascot/mascot_pointing_male.webp",
                        alt: "Azubi Maskottchen pr\xe4sentiert L\xf6sung",
                        fill: !0,
                        className: "object-contain",
                      }),
                    }),
                  }),
                ],
              }),
              (0, t.jsx)(l.P.div, {
                custom: 2,
                initial: "hidden",
                whileInView: "visible",
                viewport: { once: !0 },
                variants: u,
                children: (0, t.jsx)("div", {
                  className: "grid sm:grid-cols-2 lg:grid-cols-3 gap-6",
                  children: b.map((e, s) => {
                    let i = e.icon;
                    return (0, t.jsxs)(
                      "div",
                      {
                        className:
                          "p-6 rounded-xl transition-all hover:shadow-lg",
                        style: { backgroundColor: "#F9F5F0" },
                        children: [
                          (0, t.jsx)("div", {
                            className:
                              "w-12 h-12 rounded-full flex items-center justify-center mb-4",
                            style: {
                              backgroundColor: "rgba(244, 153, 26, 0.1)",
                            },
                            children: (0, t.jsx)(i, {
                              className: "w-6 h-6",
                              style: { color: "#F4991A" },
                            }),
                          }),
                          (0, t.jsx)("h3", {
                            className: "text-lg font-bold mb-3",
                            style: { color: "#344F1F" },
                            children: e.title,
                          }),
                          (0, t.jsx)("p", {
                            className: "text-sm leading-relaxed",
                            style: { color: "#344F1F", opacity: 0.8 },
                            children: e.description,
                          }),
                        ],
                      },
                      s,
                    );
                  }),
                }),
              }),
              (0, t.jsx)(l.P.div, {
                custom: 3,
                initial: "hidden",
                whileInView: "visible",
                viewport: { once: !0 },
                variants: u,
                className: "mt-16 text-center",
                children: (0, t.jsxs)("div", {
                  className: "inline-block p-8 rounded-xl max-w-3xl",
                  style: { backgroundColor: "#F2EAD3" },
                  children: [
                    (0, t.jsx)("p", {
                      className: "text-xl font-semibold mb-2",
                      style: { color: "#344F1F" },
                      children:
                        "\xdcber 500 deutsche Unternehmen vertrauen bereits auf Azubi",
                    }),
                    (0, t.jsx)("p", {
                      className: "text-lg",
                      style: { color: "#344F1F", opacity: 0.8 },
                      children:
                        "Werden auch Sie Teil unserer wachsenden Community",
                    }),
                  ],
                }),
              }),
            ],
          }),
        });
      }
    },
    98849: (e, s, i) => {
      (Promise.resolve().then(i.t.bind(i, 10542, 23)),
        Promise.resolve().then(i.t.bind(i, 25459, 23)),
        Promise.resolve().then(i.bind(i, 14808)),
        Promise.resolve().then(i.bind(i, 88805)),
        Promise.resolve().then(i.bind(i, 50512)),
        Promise.resolve().then(i.bind(i, 18937)),
        Promise.resolve().then(i.bind(i, 71110)),
        Promise.resolve().then(i.bind(i, 14207)));
    },
  },
  (e) => {
    var s = (s) => e((e.s = s));
    (e.O(0, [46593, 36209, 84121, 72076, 77358], () => s(98849)),
      (_N_E = e.O()));
  },
]);
