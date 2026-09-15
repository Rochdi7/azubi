(self.webpackChunk_N_E = self.webpackChunk_N_E || []).push([
  [58974],
  {
    22661: (e, t, s) => {
      (Promise.resolve().then(s.t.bind(s, 10542, 23)),
        Promise.resolve().then(s.t.bind(s, 25459, 23)),
        Promise.resolve().then(s.bind(s, 99206)),
        Promise.resolve().then(s.bind(s, 59851)),
        Promise.resolve().then(s.bind(s, 73650)),
        Promise.resolve().then(s.bind(s, 66758)),
        Promise.resolve().then(s.bind(s, 42320)),
        Promise.resolve().then(s.bind(s, 66035)),
        Promise.resolve().then(s.bind(s, 92679)),
        Promise.resolve().then(s.bind(s, 41751)),
        Promise.resolve().then(s.bind(s, 61942)),
        Promise.resolve().then(s.bind(s, 27627)),
        Promise.resolve().then(s.bind(s, 4426)));
    },
    27627: (e, t, s) => {
      "use strict";
      (s.r(t), s.d(t, { VideoExplainerSection: () => d }));
      var i = s(70207),
        a = s(87223),
        n = s(14285),
        r = s(61216),
        l = s(78809),
        o = s(50018);
      function d() {
        let [e, t] = (0, a.useState)(!1);
        return (0, i.jsx)("section", {
          className: "py-12 sm:py-16 bg-[#F7F8FA]",
          children: (0, i.jsx)("div", {
            className: "container mx-auto px-4",
            children: (0, i.jsxs)("div", {
              className: "max-w-4xl mx-auto",
              children: [
                (0, i.jsx)(r.X, {
                  badge: "Video Guide",
                  badgeIcon: (0, i.jsx)(n.A, { className: "h-4 w-4" }),
                  title: "Complete Ausbildung Guide",
                  description:
                    "Learn everything about Germany's vocational training system in this comprehensive 6-minute video",
                  level: 2,
                }),
                (0, i.jsx)("div", {
                  className:
                    "relative rounded-xl overflow-hidden shadow-xl bg-black",
                  children: (0, i.jsx)("div", {
                    className: "aspect-video relative",
                    children: e
                      ? (0, i.jsxs)("video", {
                          className: "w-full h-full object-cover",
                          controls: !0,
                          autoPlay: !0,
                          playsInline: !0,
                          poster:
                            "https://images.azubi.ma/hero-images/ausbildung-video-cover-v2.webp",
                          children: [
                            (0, i.jsx)("source", {
                              src: l.BI.AUSBILDUNG_EXPLAINER,
                              type: "video/mp4",
                            }),
                            "Your browser does not support the video tag.",
                          ],
                        })
                      : (0, i.jsxs)(i.Fragment, {
                          children: [
                            (0, i.jsx)(o.default, {
                              src: "https://images.azubi.ma/hero-images/ausbildung-video-cover-v2.webp",
                              alt: "Ausbildung Video Guide Cover",
                              fill: !0,
                              className: "object-cover",
                              loading: "lazy",
                            }),
                            (0, i.jsx)("button", {
                              onClick: () => {
                                t(!0);
                              },
                              className:
                                "absolute inset-0 flex items-center justify-center group cursor-pointer bg-black/20 hover:bg-black/30 transition-all duration-300",
                              "aria-label": "Play video",
                              children: (0, i.jsx)("div", {
                                className:
                                  "w-20 h-20 rounded-full bg-[#5D5DE9] flex items-center justify-center shadow-2xl group-hover:scale-110 transition-transform duration-300",
                                children: (0, i.jsx)(n.A, {
                                  className: "h-10 w-10 text-white ml-1",
                                  fill: "currentColor",
                                }),
                              }),
                            }),
                          ],
                        }),
                  }),
                }),
              ],
            }),
          }),
        });
      }
    },
    41751: (e, t, s) => {
      "use strict";
      (s.r(t), s.d(t, { FeaturedJobsSection: () => p }));
      var i = s(70207),
        a = s(87223),
        n = s(10542),
        r = s.n(n),
        l = s(54604),
        o = s(33841),
        d = s(61216),
        c = s(39441),
        m = s(46031),
        h = s(82110);
      function p() {
        let [e, t] = (0, a.useState)([]),
          [s, n] = (0, a.useState)(!0),
          p = (0, l.createClientComponentClient)(),
          u = (e) => {
            var t;
            let s =
                null === (t = e.employer) || void 0 === t
                  ? void 0
                  : t.company_slug,
              i = e.slug;
            if (s && i) return "/jobs/".concat(s, "/").concat(i);
            if (i) return "/jobs/".concat(i);
            let a = (e.title_en || "job")
              .toLowerCase()
              .replace(/[^a-z0-9]+/g, "-")
              .replace(/^-|-$/g, "");
            return "/jobs/".concat(a, "-").concat(e.id.slice(0, 8));
          };
        return ((0, a.useEffect)(() => {
          (async function () {
            try {
              let { data: e, error: s } = await p
                .from("job_postings")
                .select(
                  "\n            *,\n            slug,\n            employer:employer_profiles!inner(\n              id,\n              company_name,\n              company_logo_url,\n              company_slug,\n              industry_sector,\n              company_size,\n              city,\n              is_verified\n            )\n          ",
                )
                .eq("status", "active")
                .order("published_at", { ascending: !1 })
                .limit(3);
              if (s) throw s;
              t(e || []);
            } catch (e) {
              console.error("Error fetching featured jobs:", e);
            } finally {
              n(!1);
            }
          })();
        }, [p]),
        s)
          ? (0, i.jsxs)("section", {
              className:
                "relative py-16 sm:py-20 md:py-24 bg-[#F7F8FA] overflow-hidden",
              children: [
                (0, i.jsxs)("div", {
                  className:
                    "absolute inset-0 -z-10 overflow-hidden pointer-events-none",
                  children: [
                    (0, i.jsx)("div", {
                      className:
                        "absolute left-1/4 top-0 w-96 h-96 bg-[#5D5DE9]/5 rounded-full blur-3xl",
                    }),
                    (0, i.jsx)("div", {
                      className:
                        "absolute right-1/4 bottom-0 w-80 h-80 bg-[#2C3340]/5 rounded-full blur-3xl",
                    }),
                  ],
                }),
                (0, i.jsxs)("div", {
                  className: "container mx-auto px-4 relative z-10",
                  children: [
                    (0, i.jsx)(d.X, {
                      badge: "Apply in 30 Seconds",
                      title: "Apply to These Jobs Instantly",
                      description:
                        "Generate a complete application kit for any position - cover letter, checklist, and email template in seconds.",
                      level: 2,
                    }),
                    (0, i.jsx)("div", {
                      className:
                        "grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mb-8",
                      children: [1, 2, 3].map((e) =>
                        (0, i.jsxs)(
                          "div",
                          {
                            className:
                              "bg-white rounded-2xl border-2 border-[#2C3340]/10 p-6 animate-pulse",
                            children: [
                              (0, i.jsxs)("div", {
                                className: "flex items-start gap-4 mb-4",
                                children: [
                                  (0, i.jsx)("div", {
                                    className:
                                      "w-16 h-16 bg-gray-200 rounded-xl flex-shrink-0",
                                  }),
                                  (0, i.jsxs)("div", {
                                    className: "flex-1",
                                    children: [
                                      (0, i.jsx)("div", {
                                        className:
                                          "h-4 bg-gray-200 rounded w-3/4 mb-2",
                                      }),
                                      (0, i.jsx)("div", {
                                        className:
                                          "h-3 bg-gray-200 rounded w-1/2",
                                      }),
                                    ],
                                  }),
                                ],
                              }),
                              (0, i.jsx)("div", {
                                className:
                                  "h-6 bg-gray-200 rounded w-full mb-3",
                              }),
                              (0, i.jsx)("div", {
                                className: "h-6 bg-gray-200 rounded w-2/3 mb-4",
                              }),
                              (0, i.jsxs)("div", {
                                className: "space-y-2 mb-4",
                                children: [
                                  (0, i.jsx)("div", {
                                    className: "h-4 bg-gray-200 rounded w-full",
                                  }),
                                  (0, i.jsx)("div", {
                                    className: "h-4 bg-gray-200 rounded w-5/6",
                                  }),
                                  (0, i.jsx)("div", {
                                    className: "h-4 bg-gray-200 rounded w-4/6",
                                  }),
                                ],
                              }),
                              (0, i.jsxs)("div", {
                                className: "flex flex-wrap gap-2 mb-4",
                                children: [
                                  (0, i.jsx)("div", {
                                    className:
                                      "h-6 bg-gray-200 rounded-full w-20",
                                  }),
                                  (0, i.jsx)("div", {
                                    className:
                                      "h-6 bg-gray-200 rounded-full w-24",
                                  }),
                                  (0, i.jsx)("div", {
                                    className:
                                      "h-6 bg-gray-200 rounded-full w-16",
                                  }),
                                ],
                              }),
                              (0, i.jsx)("div", {
                                className:
                                  "h-10 bg-gray-200 rounded-full w-full",
                              }),
                            ],
                          },
                          e,
                        ),
                      ),
                    }),
                    (0, i.jsx)("div", {
                      className: "flex justify-center",
                      children: (0, i.jsx)("div", {
                        className:
                          "h-12 bg-gray-200 rounded-full w-48 animate-pulse",
                      }),
                    }),
                  ],
                }),
              ],
            })
          : 0 === e.length
            ? null
            : (0, i.jsxs)("section", {
                className:
                  "relative py-16 sm:py-20 md:py-24 bg-[#F7F8FA] overflow-hidden",
                children: [
                  (0, i.jsxs)("div", {
                    className:
                      "absolute inset-0 -z-10 overflow-hidden pointer-events-none",
                    children: [
                      (0, i.jsx)("div", {
                        className:
                          "absolute left-1/4 top-0 w-96 h-96 bg-[#5D5DE9]/5 rounded-full blur-3xl",
                      }),
                      (0, i.jsx)("div", {
                        className:
                          "absolute right-1/4 bottom-0 w-80 h-80 bg-[#2C3340]/5 rounded-full blur-3xl",
                      }),
                    ],
                  }),
                  (0, i.jsxs)("div", {
                    className: "container mx-auto px-4 relative z-10",
                    children: [
                      (0, i.jsx)("div", {
                        className: "animate-fade-in-up",
                        children: (0, i.jsx)(d.X, {
                          badge: "Apply in 30 Seconds",
                          title: "Apply to These Jobs Instantly",
                          description:
                            "Generate a complete application kit for any position - cover letter, checklist, and email template in seconds.",
                          level: 2,
                        }),
                      }),
                      (0, i.jsx)("div", {
                        className:
                          "grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mb-8",
                        children: e.map((e, t) =>
                          (0, i.jsx)(
                            "div",
                            {
                              className: (0, h.cn)(
                                "animate-fade-in-up",
                                0 === t && "animation-delay-100",
                                1 === t && "animation-delay-200",
                                2 === t && "animation-delay-300",
                              ),
                              children: (0, i.jsx)(o.B, {
                                job: e,
                                slug: u(e),
                                isPublicView: !0,
                              }),
                            },
                            e.id,
                          ),
                        ),
                      }),
                      (0, i.jsx)("div", {
                        className:
                          "flex justify-center animate-fade-in-up animation-delay-400",
                        children: (0, i.jsx)(r(), {
                          href: "/jobs",
                          children: (0, i.jsxs)(c.$, {
                            size: "lg",
                            className: (0, h.cn)(
                              "transition-all duration-200 group",
                              "bg-[#5D5DE9] hover:bg-[#2C3340] text-white",
                              "rounded-full",
                              "shadow-[0_4px_12px_rgba(93,93,233,0.2)]",
                              "hover:shadow-[0_8px_20px_rgba(93,93,233,0.25)]",
                              "hover:-translate-y-1",
                              "px-8 h-12 text-base font-semibold",
                            ),
                            children: [
                              "Find Your Match",
                              (0, i.jsx)(m.A, {
                                className:
                                  "ml-2 w-5 h-5 transition-transform duration-200 group-hover:translate-x-1",
                              }),
                            ],
                          }),
                        }),
                      }),
                    ],
                  }),
                ],
              });
      }
    },
    61942: (e, t, s) => {
      "use strict";
      s.d(t, { HowItWorks: () => u });
      var i = s(70207),
        a = s(39441),
        n = s(82110),
        r = s(28560),
        l = s(32834),
        o = s(86654),
        d = s(50341),
        c = s(10542),
        m = s.n(c),
        h = s(45748),
        p = s(61216);
      function u(e) {
        let {
          title: t = "Apply 10x Faster in Three Steps",
          subtitle: s = "How It Works",
          description:
            c = "AI-powered tools that turn hours of work into minutes.",
          steps: u = [
            {
              title: "Complete Your Profile",
              description:
                "2 minutes to set up your education, language skills, and preferences. Get your eligibility score instantly.",
              icon: (0, i.jsx)(r.A, { className: "h-6 w-6" }),
              color: "orange",
            },
            {
              title: "Get AI Application Kits",
              description:
                "Cover letter, checklist, and email template generated in 30 seconds. Tailored for each job you apply to.",
              icon: (0, i.jsx)(l.A, { className: "h-6 w-6" }),
              color: "orange",
            },
            {
              title: "Apply to More Jobs, Faster",
              description:
                "10x more applications with the same effort. Smart matching finds your perfect fit so you never miss an opportunity.",
              icon: (0, i.jsx)(o.A, { className: "h-6 w-6" }),
              color: "orange",
            },
          ],
          cta: x = { text: "Start Applying", href: "/auth?signup" },
          className: g,
        } = e;
        return (0, i.jsxs)("section", {
          className: (0, n.cn)(
            "py-16 sm:py-20 md:py-24 relative overflow-hidden bg-[#EEF0F4]",
            g,
          ),
          children: [
            (0, i.jsxs)("div", {
              className:
                "absolute inset-0 -z-10 overflow-hidden pointer-events-none",
              children: [
                (0, i.jsx)("div", {
                  className:
                    "absolute right-1/4 top-10 w-80 h-80 rounded-full bg-[#5D5DE9]/5 blur-3xl",
                }),
                (0, i.jsx)("div", {
                  className:
                    "absolute left-1/4 bottom-10 w-80 h-80 rounded-full bg-[#2C3340]/5 blur-3xl",
                }),
              ],
            }),
            (0, i.jsxs)("div", {
              className: "container mx-auto px-4",
              children: [
                (0, i.jsx)(h.P.div, {
                  initial: { opacity: 0, y: 20 },
                  whileInView: { opacity: 1, y: 0 },
                  viewport: { once: !0 },
                  transition: { duration: 0.5 },
                  children: (0, i.jsx)(p.X, {
                    badge: s,
                    title: t,
                    description: c,
                    level: 2,
                  }),
                }),
                (0, i.jsx)("div", {
                  className: "relative max-w-5xl mx-auto mt-12",
                  children: (0, i.jsx)("div", {
                    className:
                      "grid grid-cols-1 md:grid-cols-3 gap-8 md:gap-6 relative",
                    children: u.map((e, t) =>
                      (0, i.jsxs)(
                        h.P.div,
                        {
                          initial: { opacity: 0, y: 20, scale: 0.95 },
                          whileInView: { opacity: 1, y: 0, scale: 1 },
                          viewport: { once: !0, margin: "-50px" },
                          transition: {
                            duration: 0.4,
                            delay: 0.2 * t,
                            ease: "easeOut",
                          },
                          className:
                            "relative flex flex-col items-center text-center group",
                          children: [
                            (0, i.jsxs)("div", {
                              className: "mb-4 sm:mb-6 relative",
                              children: [
                                (0, i.jsx)("div", {
                                  className:
                                    "absolute -left-2 -top-2 w-7 h-7 sm:w-8 sm:h-8 rounded-full bg-[#5D5DE9] border-2 border-white flex items-center justify-center text-xs sm:text-sm font-bold text-white z-20 shadow-md",
                                  children: t + 1,
                                }),
                                (0, i.jsx)(h.P.div, {
                                  whileHover: { scale: 1.05 },
                                  className:
                                    "w-16 h-16 sm:w-20 sm:h-20 rounded-2xl flex items-center justify-center relative z-10 shadow-md bg-[#5D5DE9]/10 border-2 border-[#5D5DE9]/30 text-[#5D5DE9] group-hover:bg-[#5D5DE9]/15 transition-all duration-300",
                                  children: e.icon,
                                }),
                                (0, i.jsx)("div", {
                                  className:
                                    "absolute inset-0 rounded-2xl blur-xl opacity-0 group-hover:opacity-30 transition-opacity duration-300 bg-[#5D5DE9]/50",
                                }),
                              ],
                            }),
                            (0, i.jsxs)("div", {
                              className:
                                "bg-white/90 backdrop-blur-sm p-4 sm:p-6 rounded-2xl border border-[#2C3340]/10 group-hover:border-[#5D5DE9]/20 group-hover:shadow-lg transition-all duration-300 w-full h-full flex flex-col",
                              children: [
                                (0, i.jsx)("h3", {
                                  className:
                                    "text-base sm:text-lg font-semibold mb-2 sm:mb-3 text-[#2C3340]",
                                  children: e.title,
                                }),
                                (0, i.jsx)("p", {
                                  className:
                                    "text-[#2C3340]/70 text-xs sm:text-sm leading-relaxed flex-grow",
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
                }),
                x &&
                  (0, i.jsx)(h.P.div, {
                    initial: { opacity: 0, y: 20 },
                    whileInView: { opacity: 1, y: 0 },
                    viewport: { once: !0 },
                    transition: { duration: 0.5, delay: 0.5 },
                    className: "mt-12 text-center",
                    children: (0, i.jsx)(a.$, {
                      asChild: !0,
                      size: "lg",
                      className:
                        "bg-[#5D5DE9] hover:bg-[#2C3340] text-white rounded-full px-8 shadow-lg hover:shadow-xl hover:-translate-y-1 transition-all duration-300",
                      style: { minHeight: "48px" },
                      children: (0, i.jsxs)(m(), {
                        href: x.href,
                        className: "inline-flex items-center gap-2",
                        children: [
                          x.text,
                          (0, i.jsx)(d.A, { className: "h-5 w-5" }),
                        ],
                      }),
                    }),
                  }),
              ],
            }),
          ],
        });
      }
    },
    66035: (e, t, s) => {
      "use strict";
      (s.r(t), s.d(t, { DashboardFeatures: () => A }));
      var i = s(70207),
        a = s(45748),
        n = s(49055),
        r = s(27239),
        l = s(84222),
        o = s(31670),
        d = s(62709),
        c = s(86654),
        m = s(5101),
        h = s(37426),
        p = s(79024),
        u = s(82164),
        x = s(67926),
        g = s(46031),
        b = s(39441),
        v = s(17802),
        y = s(82110),
        f = s(10542),
        w = s.n(f),
        j = s(21402),
        N = s(87223),
        F = s(61216);
      function A() {
        let [e, t] = (0, N.useState)(null),
          s = [
            {
              id: "applicationkit",
              title: "AI Application Kit",
              description: "Cover letters, checklists & emails in 30 seconds",
              icon: (0, i.jsx)(n.A, { className: "w-6 h-6" }),
              href: "/dashboard/applications",
              badge: "Core Feature",
              highlight: "Apply 10x faster",
            },
            {
              id: "cvbuilder",
              title: "CV Builder",
              description: "Professional German CVs in minutes",
              icon: (0, i.jsx)(r.A, { className: "w-6 h-6" }),
              href: "/dashboard/cv-builder",
              badge: "New",
              highlight: "ATS-optimized",
            },
            {
              id: "german",
              title: "German Language Training",
              description: "Master German with conversations",
              icon: (0, i.jsx)(l.A, { className: "w-6 h-6" }),
              href: "/dashboard/german",
              badge: "Most Popular",
              highlight: "15,000+ learners",
            },
            {
              id: "interview",
              title: "Ausbildung Interview Trainer",
              description: "Practice with voice coaching",
              icon: (0, i.jsx)(o.A, { className: "w-6 h-6" }),
              href: "/dashboard/interview",
              highlight: "500+ daily sessions",
            },
            {
              id: "videostudio",
              title: "Video Introduction Studio",
              description: "Video profiles with coaching",
              icon: (0, i.jsx)(d.A, { className: "w-6 h-6" }),
              href: "/dashboard/video-studio",
              highlight: "Stand out from others",
            },
            {
              id: "eligibility",
              title: "Eligibility Checker",
              description: "Instant eligibility score",
              icon: (0, i.jsx)(c.A, { className: "w-6 h-6" }),
              href: "/dashboard/tools/eligibility",
              highlight: "2-minute test",
            },
          ],
          f = [
            {
              icon: (0, i.jsx)(m.A, { className: "w-4 h-4" }),
              text: "Smart Profile Management",
            },
            {
              icon: (0, i.jsx)(h.A, { className: "w-4 h-4" }),
              text: "Secure Document Vault",
            },
            {
              icon: (0, i.jsx)(p.A, { className: "w-4 h-4" }),
              text: "Progress Tracking",
            },
            {
              icon: (0, i.jsx)(u.A, { className: "w-4 h-4" }),
              text: "Achievement Badges",
            },
          ];
        return (0, i.jsxs)("section", {
          className:
            "py-16 sm:py-20 md:py-24 relative overflow-hidden bg-[#F7F8FA]",
          children: [
            (0, i.jsxs)("div", {
              className: "absolute inset-0 -z-10 pointer-events-none",
              children: [
                (0, i.jsx)("div", {
                  className:
                    "absolute top-0 left-1/4 w-96 h-96 bg-[#5D5DE9]/5 rounded-full blur-3xl",
                }),
                (0, i.jsx)("div", {
                  className:
                    "absolute bottom-0 right-1/4 w-96 h-96 bg-[#2C3340]/5 rounded-full blur-3xl",
                }),
              ],
            }),
            (0, i.jsxs)("div", {
              className: "container mx-auto px-4 relative",
              children: [
                (0, i.jsx)(a.P.div, {
                  initial: { opacity: 0, y: 20 },
                  whileInView: { opacity: 1, y: 0 },
                  viewport: { once: !0 },
                  transition: { duration: 0.5 },
                  children: (0, i.jsx)(F.X, {
                    badge: "AI-Powered Tools",
                    badgeIcon: (0, i.jsx)(x.A, { className: "h-4 w-4" }),
                    title: "Apply 10x Faster with Smart Tools",
                    description:
                      "AI-powered application kits, interview prep, and German training - everything you need to get hired",
                    level: 2,
                  }),
                }),
                (0, i.jsx)("div", {
                  className:
                    "grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 mb-12",
                  children: s.map((e, s) =>
                    (0, i.jsx)(
                      a.P.div,
                      {
                        initial: { opacity: 0, y: 20 },
                        whileInView: { opacity: 1, y: 0 },
                        viewport: { once: !0 },
                        transition: { duration: 0.5, delay: 0.1 * s },
                        children: (0, i.jsx)(j.ProtectedLink, {
                          href: e.href,
                          children: (0, i.jsxs)("div", {
                            className:
                              "group relative h-full p-6 rounded-2xl bg-white border-2 border-[#2C3340]/10 hover:border-[#5D5DE9]/30 hover:shadow-xl transition-all duration-300",
                            onMouseEnter: () => t(e.id),
                            onMouseLeave: () => t(null),
                            children: [
                              e.badge &&
                                (0, i.jsx)(v.E, {
                                  className:
                                    "absolute -top-3 right-6 text-xs px-3 py-1 font-semibold bg-[#5D5DE9] text-white border-0 shadow-md",
                                  children: e.badge,
                                }),
                              (0, i.jsxs)("div", {
                                className: "relative",
                                children: [
                                  (0, i.jsx)("div", {
                                    className: (0, y.cn)(
                                      "w-10 h-10 sm:w-12 sm:h-12 rounded-xl flex items-center justify-center mb-3 sm:mb-4 shadow-sm",
                                      s % 2 == 0
                                        ? "bg-[#5D5DE9]/10 text-[#5D5DE9]"
                                        : "bg-[#2C3340]/10 text-[#2C3340]",
                                    ),
                                    children: e.icon,
                                  }),
                                  (0, i.jsx)("h3", {
                                    className:
                                      "font-bold text-base sm:text-lg mb-2 text-[#2C3340]",
                                    children: e.title,
                                  }),
                                  (0, i.jsx)("p", {
                                    className:
                                      "text-xs sm:text-sm text-[#2C3340]/70 mb-3 sm:mb-4 font-medium leading-relaxed",
                                    children: e.description,
                                  }),
                                  (0, i.jsxs)("div", {
                                    className:
                                      "flex items-center justify-between",
                                    children: [
                                      (0, i.jsx)("span", {
                                        className:
                                          "text-xs text-[#2C3340]/50 font-medium",
                                        children: e.highlight,
                                      }),
                                      (0, i.jsxs)("div", {
                                        className:
                                          "flex items-center text-xs font-semibold text-[#5D5DE9] opacity-0 group-hover:opacity-100 transition-opacity duration-300",
                                        children: [
                                          (0, i.jsx)("span", {
                                            children: "Try Now",
                                          }),
                                          (0, i.jsx)(g.A, {
                                            className: "w-4 h-4 ml-1",
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
                      },
                      e.id,
                    ),
                  ),
                }),
                (0, i.jsx)(a.P.div, {
                  initial: { opacity: 0 },
                  whileInView: { opacity: 1 },
                  viewport: { once: !0 },
                  transition: { duration: 0.5, delay: 0.3 },
                  className:
                    "flex flex-wrap items-center justify-center gap-4 sm:gap-8 text-sm text-[#2C3340]/60 mb-12",
                  children: f.map((e, t) =>
                    (0, i.jsxs)(
                      "div",
                      {
                        className: "flex items-center gap-2",
                        children: [
                          (0, i.jsx)("span", {
                            className: "text-[#5D5DE9]",
                            children: e.icon,
                          }),
                          (0, i.jsx)("span", {
                            className: "font-medium",
                            children: e.text,
                          }),
                        ],
                      },
                      t,
                    ),
                  ),
                }),
                (0, i.jsxs)(a.P.div, {
                  initial: { opacity: 0, y: 20 },
                  whileInView: { opacity: 1, y: 0 },
                  viewport: { once: !0 },
                  transition: { duration: 0.5, delay: 0.4 },
                  className: "text-center",
                  children: [
                    (0, i.jsx)("p", {
                      className: "text-sm text-[#2C3340]/60 mb-6 font-medium",
                      children:
                        "Join 15,000+ students already applying smarter",
                    }),
                    (0, i.jsx)(w(), {
                      href: "/auth?signup",
                      children: (0, i.jsxs)(b.$, {
                        size: "lg",
                        className:
                          "bg-[#5D5DE9] hover:bg-[#2C3340] text-white rounded-full px-8 py-6 text-base font-semibold shadow-lg hover:shadow-xl hover:-translate-y-1 transition-all duration-300",
                        children: [
                          "Start Applying",
                          (0, i.jsx)(g.A, { className: "w-5 h-5 ml-2" }),
                        ],
                      }),
                    }),
                  ],
                }),
              ],
            }),
          ],
        });
      }
    },
    73650: (e, t, s) => {
      "use strict";
      (s.r(t), s.d(t, { CTASection: () => m }));
      var i = s(70207),
        a = s(45748),
        n = s(25147),
        r = s(23072),
        l = s(10542),
        o = s.n(l),
        d = s(50018),
        c = s(87223);
      function m() {
        let [e, t] = (0, c.useState)({ total_jobs: 0, total_employers: 0 }),
          [s, l] = (0, c.useState)(!0);
        (0, c.useEffect)(() => {
          !(async function () {
            try {
              let e = await fetch("/api/stats/marketplace");
              if (e.ok) {
                let s = await e.json();
                t(s);
              }
            } catch (e) {
              console.error("Failed to fetch stats:", e);
            } finally {
              l(!1);
            }
          })();
        }, []);
        let m = (e) =>
          e >= 1e3 ? "".concat(Math.floor(e / 1e3), "k+") : "".concat(e, "+");
        return (0, i.jsx)("section", {
          className: "relative w-full px-4 py-12 md:py-16 lg:py-20 bg-cream",
          children: (0, i.jsx)("div", {
            className: "max-w-7xl mx-auto",
            children: (0, i.jsxs)("div", {
              className:
                "relative overflow-hidden rounded-[24px] md:rounded-[32px] px-6 py-8 md:py-12",
              children: [
                (0, i.jsx)(d.default, {
                  src: "/images/arbeitgeber-hero-background.webp",
                  alt: "Professional German workplace environment",
                  fill: !0,
                  quality: 85,
                  sizes:
                    "(max-width: 768px) 100vw, (max-width: 1280px) 90vw, 1280px",
                  className:
                    "object-cover object-center rounded-[24px] md:rounded-[32px]",
                }),
                (0, i.jsx)("div", {
                  className:
                    "absolute inset-0 bg-black/30 z-0 rounded-[24px] md:rounded-[32px]",
                }),
                (0, i.jsx)("div", {
                  className:
                    "absolute inset-0 z-[1] rounded-[24px] md:rounded-[32px]",
                  style: {
                    background:
                      "\n                radial-gradient(ellipse at center, transparent 0%, transparent 40%, rgba(0,0,0,0.4) 100%),\n                linear-gradient(to top, rgba(0,0,0,0.5) 0%, transparent 30%),\n                linear-gradient(to right, rgba(0,0,0,0.3) 0%, transparent 15%),\n                linear-gradient(to left, rgba(0,0,0,0.3) 0%, transparent 15%)\n              ",
                  },
                }),
                (0, i.jsxs)("div", {
                  className: "relative z-10 text-center space-y-6 md:space-y-8",
                  children: [
                    (0, i.jsx)(a.P.h2, {
                      initial: { opacity: 0, y: 20 },
                      whileInView: { opacity: 1, y: 0 },
                      viewport: { once: !0 },
                      transition: { duration: 0.6 },
                      className:
                        "text-3xl md:text-4xl lg:text-5xl xl:text-6xl font-bold tracking-tight text-white px-4",
                      children: "Ready to Apply 10x Faster?",
                    }),
                    (0, i.jsx)(a.P.p, {
                      initial: { opacity: 0, y: 20 },
                      whileInView: { opacity: 1, y: 0 },
                      viewport: { once: !0 },
                      transition: { duration: 0.6, delay: 0.1 },
                      className:
                        "text-lg md:text-xl text-white/90 max-w-3xl mx-auto px-4",
                      children:
                        "Smart application kits. Intelligent job matching. Get hired, not overlooked.",
                    }),
                    (0, i.jsxs)(a.P.div, {
                      initial: { opacity: 0, y: 20 },
                      whileInView: { opacity: 1, y: 0 },
                      viewport: { once: !0 },
                      transition: { duration: 0.6, delay: 0.2 },
                      className:
                        "flex flex-col sm:flex-row items-center justify-center gap-4 md:gap-6 mt-8",
                      children: [
                        (0, i.jsxs)(o(), {
                          href: "/jobs",
                          className:
                            "group relative inline-flex items-center gap-3 px-8 py-4 rounded-full overflow-hidden",
                          style: {
                            backgroundColor: "rgba(0, 0, 0, 0.11)",
                            borderRadius: "118px",
                            boxShadow:
                              "\n                    rgba(0, 0, 0, 0.067) 0px 2.51941px 2.51941px -0.46875px,\n                    rgba(0, 0, 0, 0.067) 0px 5.97144px 5.97144px -0.9375px,\n                    rgba(0, 0, 0, 0.063) 0px 10.8925px 10.8925px -1.40625px,\n                    rgba(0, 0, 0, 0.063) 0px 18.1088px 18.1088px -1.875px,\n                    rgba(0, 0, 0, 0.06) 0px 29.2442px 29.2442px -2.34375px,\n                    rgba(0, 0, 0, 0.055) 0px 47.8699px 47.8699px -2.8125px,\n                    rgba(0, 0, 0, 0.043) 0px 82.4287px 82.4287px -3.28125px,\n                    rgba(0, 0, 0, 0.024) 0px 150px 150px -3.75px\n                  ",
                          },
                          children: [
                            (0, i.jsx)("div", {
                              className:
                                "absolute inset-[3px] rounded-[114px] bg-white z-0",
                            }),
                            (0, i.jsx)(n.A, {
                              className: "w-5 h-5 text-[#2C3340] relative z-10",
                            }),
                            (0, i.jsx)("span", {
                              className:
                                "relative z-10 text-base md:text-lg font-medium text-[#2C3340]",
                              style: {
                                fontWeight: 500,
                                letterSpacing: "-0.04em",
                              },
                              children: "Start Applying Now",
                            }),
                          ],
                        }),
                        (0, i.jsxs)(o(), {
                          href: "/tools/eligibility-checker",
                          className:
                            "inline-flex items-center justify-center gap-3 px-8 py-4 rounded-full border-2 border-white/80 hover:border-white text-white hover:bg-white/10 transition-all duration-300",
                          children: [
                            (0, i.jsx)(r.A, { className: "w-5 h-5" }),
                            (0, i.jsx)("span", {
                              className: "text-base md:text-lg font-medium",
                              children: "Check Eligibility",
                            }),
                          ],
                        }),
                      ],
                    }),
                    (0, i.jsx)(a.P.div, {
                      initial: { opacity: 0, y: 20 },
                      whileInView: { opacity: 1, y: 0 },
                      viewport: { once: !0 },
                      transition: { duration: 0.6, delay: 0.25 },
                      className: "mt-6",
                      children: (0, i.jsxs)("div", {
                        className:
                          "inline-flex items-center gap-2 sm:gap-4 px-4 py-2 rounded-full bg-white/10 backdrop-blur-sm border border-white/20",
                        children: [
                          (0, i.jsxs)("span", {
                            className: "text-sm text-white/90 font-medium",
                            children: [
                              (0, i.jsx)("span", {
                                className: "text-white font-semibold",
                                children: "Free:",
                              }),
                              " Unlimited AI kits",
                            ],
                          }),
                          (0, i.jsx)("span", {
                            className: "text-white/40",
                            children: "|",
                          }),
                          (0, i.jsxs)("span", {
                            className: "text-sm text-white/90 font-medium",
                            children: [
                              (0, i.jsx)("span", {
                                className: "text-[#5D5DE9] font-semibold",
                                children: "Apply For Me:",
                              }),
                              " Expert service",
                            ],
                          }),
                          (0, i.jsx)(o(), {
                            href: "/consultation",
                            className:
                              "text-xs text-white/70 hover:text-white underline decoration-white/40 hover:decoration-white/80 transition-colors ml-1",
                            children: "Learn More",
                          }),
                        ],
                      }),
                    }),
                    (0, i.jsxs)(a.P.div, {
                      initial: { opacity: 0, y: 20 },
                      whileInView: { opacity: 1, y: 0 },
                      viewport: { once: !0 },
                      transition: { duration: 0.6, delay: 0.3 },
                      className: "space-y-3 mt-8",
                      children: [
                        (0, i.jsx)("p", {
                          className:
                            "text-base md:text-lg text-white/80 font-medium",
                          children: s
                            ? (0, i.jsx)("span", {
                                className: "animate-pulse",
                                children: "Loading stats...",
                              })
                            : (0, i.jsxs)(i.Fragment, {
                                children: [
                                  m(e.total_employers),
                                  " verified German employers • ",
                                  m(e.total_jobs),
                                  " live positions",
                                ],
                              }),
                        }),
                        (0, i.jsxs)("p", {
                          className: "text-sm md:text-base text-white/60",
                          children: [
                            "Join 1,000+ international students starting Winter ",
                            new Date().getFullYear() + 1,
                          ],
                        }),
                      ],
                    }),
                  ],
                }),
              ],
            }),
          }),
        });
      }
    },
    92679: (e, t, s) => {
      "use strict";
      s.d(t, { FAQSection: () => m });
      var i = s(70207),
        a = s(87223),
        n = s(47161),
        r = s(51613),
        l = s(25147),
        o = s(61216),
        d = s(82110);
      let c = [
        {
          question:
            "What is Ausbildung and how is it different from university?",
          answer:
            "Ausbildung is Germany's dual education system that combines practical workplace training (3-4 days/week) with theoretical education (1-2 days/week). Unlike university, you earn €900-1,300 monthly while learning, have guaranteed job relevance, and complete training in 2-3.5 years instead of 4+ years.",
        },
        {
          question: "Can international students apply for Ausbildung programs?",
          answer:
            "Yes! Germany welcomes international students for Ausbildung programs. You'll need basic German skills (usually B1 level), completed secondary education, and a visa. Our platform helps you through the entire application process including visa guidance.",
        },
        {
          question: "How much can I earn during Ausbildung training?",
          answer:
            "Ausbildung trainees earn between €900-1,300 per month during training, with the amount increasing each year. After completion, average starting salaries range from €2,500-4,000+ monthly, depending on the field and location.",
        },
        {
          question: "What German language level do I need for Ausbildung?",
          answer:
            "Most Ausbildung programs require B1 German level (intermediate). Some technical fields may accept A2 level initially. We offer German language courses from A1 to B2 to help you reach the required level.",
        },
        {
          question: "Which sectors offer the best Ausbildung opportunities?",
          answer:
            "High-demand sectors include IT & Technology, Healthcare & Nursing, Engineering & Manufacturing, Hospitality & Tourism, and Business & Finance. IT and healthcare sectors often offer the highest salaries and best job security.",
        },
        {
          question: "How is Azubi different from other job portals?",
          answer:
            "Other portals list jobs and leave you on your own. Azubi provides smart application tools that generate personalized cover letters, match scores showing your fit for each job, application tracking with follow-up reminders, and German learning + interview preparation tools.",
        },
        {
          question: "How does the smart cover letter generator work?",
          answer:
            "Select any job, click 'Apply with Help', and get a complete German cover letter in 30 seconds. Our system reads the actual job requirements and matches them with your profile to create personalized, professional Anschreiben in DIN 5008 format - the standard German employers expect.",
        },
        {
          question: "Is the platform really free?",
          answer:
            "Yes! All AI tools are completely free with no limits - unlimited application kits, CV exports, cover letters, and German learning tools. For students who want expert help, our 'Apply For Me' consultation service handles everything: 30+ applications submitted by our team, native German cover letters, and dedicated counselor support.",
        },
        {
          question: "Are the generated cover letters professional quality?",
          answer:
            "Yes. The cover letters are professional German in DIN 5008 business format. They're personalized with your real experience and the job's specific requirements - not generic templates. Each letter uses proper salutation, 4-paragraph format, and formal closing.",
        },
        {
          question: "How do I track my applications?",
          answer:
            "Every application kit you generate is automatically tracked. You'll see status updates, suggested follow-up dates based on company response patterns, and can log when you hear back. No more spreadsheets - everything in one dashboard.",
        },
      ];
      function m(e) {
        let { className: t } = e,
          [s, m] = (0, a.useState)(0);
        return (0, i.jsxs)("section", {
          className: (0, d.cn)(
            "py-12 sm:py-16 md:py-20 relative overflow-hidden bg-[#EEF0F4]",
            t,
          ),
          children: [
            (0, i.jsxs)("div", {
              className:
                "absolute inset-0 -z-10 overflow-hidden pointer-events-none",
              children: [
                (0, i.jsx)("div", {
                  className:
                    "absolute left-1/4 top-1/4 w-96 h-96 bg-[#5D5DE9]/5 rounded-full blur-3xl",
                }),
                (0, i.jsx)("div", {
                  className:
                    "absolute right-1/4 bottom-1/4 w-80 h-80 bg-[#2C3340]/5 rounded-full blur-3xl",
                }),
              ],
            }),
            (0, i.jsxs)("div", {
              className: "container mx-auto px-4 relative z-10",
              children: [
                (0, i.jsx)(o.X, {
                  badge: "Common Questions",
                  badgeIcon: (0, i.jsx)(n.A, { className: "h-4 w-4" }),
                  title: "Frequently Asked Questions",
                  description:
                    "Everything you need to know about Ausbildung programs in Germany and how Azubi helps you apply",
                  level: 2,
                }),
                (0, i.jsx)("div", {
                  className: "max-w-4xl mx-auto",
                  children: (0, i.jsx)("div", {
                    className: "space-y-4",
                    children: c.map((e, t) =>
                      (0, i.jsxs)(
                        "div",
                        {
                          className:
                            "rounded-[24px] border-2 border-[#2C3340]/10 bg-white/80 backdrop-blur-md overflow-hidden transition-all duration-300 hover:shadow-lg hover:border-[#5D5DE9]/20",
                          children: [
                            (0, i.jsxs)("button", {
                              className:
                                "w-full text-left p-4 sm:p-6 flex items-center justify-between group focus:outline-none focus:ring-2 focus:ring-[#5D5DE9]/20 focus:ring-inset rounded-[24px]",
                              onClick: () => m(s === t ? null : t),
                              "aria-expanded": s === t,
                              children: [
                                (0, i.jsx)("h3", {
                                  className:
                                    "text-base sm:text-lg font-semibold pr-4 sm:pr-8 text-[#2C3340] group-hover:text-[#5D5DE9] transition-colors",
                                  children: e.question,
                                }),
                                (0, i.jsx)(r.A, {
                                  className: (0, d.cn)(
                                    "h-5 w-5 text-[#2C3340]/70 transition-transform duration-300 flex-shrink-0",
                                    s === t && "rotate-180",
                                  ),
                                }),
                              ],
                            }),
                            (0, i.jsx)("div", {
                              className: (0, d.cn)(
                                "transition-all duration-300 ease-in-out",
                                s === t
                                  ? "max-h-96 opacity-100"
                                  : "max-h-0 opacity-0 overflow-hidden",
                              ),
                              children: (0, i.jsx)("div", {
                                className: "px-4 sm:px-6 pb-4 sm:pb-6",
                                children: (0, i.jsx)("div", {
                                  className:
                                    "border-t border-[#2C3340]/10 pt-3 sm:pt-4",
                                  children: (0, i.jsx)("p", {
                                    className:
                                      "text-xs sm:text-sm md:text-base text-[#2C3340]/80 leading-relaxed",
                                    children: e.answer,
                                  }),
                                }),
                              }),
                            }),
                          ],
                        },
                        t,
                      ),
                    ),
                  }),
                }),
                (0, i.jsxs)("div", {
                  className: "text-center mt-12",
                  children: [
                    (0, i.jsx)("p", {
                      className: "text-[#2C3340]/70 mb-4 font-medium",
                      children:
                        "Ready to start your Ausbildung journey? Create your free account today",
                    }),
                    (0, i.jsxs)("div", {
                      className:
                        "flex flex-col sm:flex-row gap-3 sm:gap-4 justify-center",
                      children: [
                        (0, i.jsxs)("a", {
                          href: "/auth?signup",
                          className:
                            "inline-flex items-center justify-center px-4 sm:px-6 py-2.5 sm:py-3 rounded-full bg-[#5D5DE9] text-white text-sm sm:text-base font-semibold hover:bg-[#2C3340] hover:shadow-lg transition-all duration-300",
                          children: [
                            (0, i.jsx)(l.A, { className: "h-4 w-4 mr-2" }),
                            "Get Started Free",
                          ],
                        }),
                        (0, i.jsx)("a", {
                          href: "/ausbildung-faq",
                          className:
                            "inline-flex items-center justify-center px-4 sm:px-6 py-2.5 sm:py-3 rounded-full border-2 border-[#5D5DE9]/30 bg-[#5D5DE9]/5 text-[#5D5DE9] text-sm sm:text-base font-semibold hover:bg-[#5D5DE9]/10 transition-all duration-300",
                          children: "View All FAQs",
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
    },
  },
  (e) => {
    var t = (t) => e((e.s = t));
    (e.O(0, [46593, 36209, 84121, 72076, 77358], () => t(22661)),
      (_N_E = e.O()));
  },
]);
