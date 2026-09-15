(self.webpackChunk_N_E = self.webpackChunk_N_E || []).push([
  [45154],
  {
    1124: (e, t, r) => {
      Promise.resolve().then(r.bind(r, 92511));
    },
    92511: (e, t, r) => {
      "use strict";
      (r.r(t), r.d(t, { default: () => ej }));
      var s = r(70207),
        i = r(87223),
        a = r(54604),
        n = r(18051),
        l = r(54928),
        o = r(45748),
        c = r(82110),
        d = r(75980),
        m = r(88117),
        x = r(43431),
        h = r(5101),
        u = r(95540),
        p = r(66650),
        f = r(47161),
        b = r(15450),
        g = r(53010),
        j = r(46845),
        v = r(75258),
        y = r(10542),
        w = r.n(y),
        N = r(54459),
        k = r(50018),
        A = r(39441),
        _ = r(7782),
        S = r(84321);
      let z = [
          { icon: d.A, label: "Dashboard", path: "/arbeitgeber/dashboard" },
          { icon: m.A, label: "Meine Stellen", path: "/arbeitgeber/jobs" },
          { icon: x.A, label: "Kandidaten", path: "/arbeitgeber/kandidaten" },
          { icon: h.A, label: "Bewerbungen", path: "/arbeitgeber/bewerbungen" },
          { icon: u.A, label: "Nachrichten", path: "/arbeitgeber/nachrichten" },
        ],
        C = [
          {
            icon: p.A,
            label: "Was ist neu",
            path: "/changelog",
            isExternal: !0,
          },
          {
            icon: f.A,
            label: "Hilfe & Dokumentation",
            path: "/docs/arbeitgeber",
          },
          {
            icon: b.A,
            label: "Einstellungen",
            path: "/arbeitgeber/einstellungen",
          },
        ];
      function F(e) {
        let {
          companyName: t,
          companyLogo: r,
          pathname: i,
          isMobile: a,
          isCollapsed: n,
          isOpen: l,
          toggleMobileMenu: d,
          toggleCollapse: x,
          handleSignOut: h,
          newApplicationsCount: u = 0,
          unreadMessagesCount: p = 0,
        } = e;
        return (0, s.jsxs)(s.Fragment, {
          children: [
            (0, s.jsx)(N.N, {
              children:
                a &&
                l &&
                (0, s.jsx)(o.P.div, {
                  initial: { opacity: 0 },
                  animate: { opacity: 1 },
                  exit: { opacity: 0 },
                  transition: { duration: 0.2 },
                  className:
                    "fixed inset-0 bg-background/80 backdrop-blur-sm z-40",
                  onClick: d,
                  children: (0, s.jsx)(o.P.div, {
                    initial: { x: "-100%" },
                    animate: { x: 0 },
                    exit: { x: "-100%" },
                    transition: { type: "spring", bounce: 0, duration: 0.4 },
                    className:
                      "w-3/4 max-w-xs h-full overflow-y-auto border-r-2 border-border/20",
                    onClick: (e) => e.stopPropagation(),
                    children: (0, s.jsxs)("div", {
                      className:
                        "h-full bg-background/95 shadow-xl flex flex-col",
                      children: [
                        (0, s.jsx)("div", {
                          className: "px-4 py-3 border-b border-border/30",
                          children: (0, s.jsx)(S.Logo, {
                            iconSize: "md",
                            showText: !0,
                            href: "/arbeitgeber",
                            className: "transition-all duration-300",
                          }),
                        }),
                        (0, s.jsx)("div", {
                          className: "p-4 border-b border-border/30",
                          children: (0, s.jsxs)("div", {
                            className: "flex items-center gap-3",
                            children: [
                              (0, s.jsx)("div", {
                                className:
                                  "relative h-12 w-12 overflow-hidden rounded-lg border-2 border-primary/20 shadow-sm bg-white flex items-center justify-center",
                                children: r
                                  ? (0, s.jsx)(k.default, {
                                      src: r,
                                      alt: "Logo",
                                      fill: !0,
                                      className: "object-cover",
                                    })
                                  : (0, s.jsx)(m.A, {
                                      className: "h-6 w-6 text-primary",
                                    }),
                              }),
                              (0, s.jsxs)("div", {
                                className: "flex-1 min-w-0",
                                children: [
                                  (0, s.jsx)("p", {
                                    className:
                                      "font-semibold text-sm text-foreground truncate",
                                    children: t || "Unternehmen",
                                  }),
                                  (0, s.jsx)("p", {
                                    className: "text-xs text-muted-foreground",
                                    children: "Arbeitgeber-Account",
                                  }),
                                ],
                              }),
                            ],
                          }),
                        }),
                        (0, s.jsx)("div", {
                          className: "p-3 flex-1 overflow-y-auto",
                          children: (0, s.jsx)("nav", {
                            className: "space-y-1",
                            children: z.map((e) => {
                              let t = e.icon,
                                r = i === e.path,
                                a =
                                  "Bewerbungen" === e.label
                                    ? u
                                    : "Nachrichten" === e.label
                                      ? p
                                      : 0;
                              return (0, s.jsx)(
                                o.P.div,
                                {
                                  whileHover: { x: 4 },
                                  whileTap: { scale: 0.98 },
                                  className: (0, c.cn)(
                                    "flex items-center w-full rounded-lg text-sm font-medium transition-all relative overflow-hidden",
                                    r
                                      ? "bg-primary/10 text-primary border border-primary/20 shadow-inner"
                                      : "hover:bg-muted border-0",
                                  ),
                                  children: (0, s.jsxs)(w(), {
                                    href: e.path,
                                    className:
                                      "flex items-center w-full px-4 py-2.5",
                                    onClick: d,
                                    children: [
                                      (0, s.jsx)(t, {
                                        size: 18,
                                        className: (0, c.cn)(
                                          "mr-3",
                                          r
                                            ? "text-primary"
                                            : "text-secondary/70",
                                        ),
                                      }),
                                      e.label,
                                      a > 0 &&
                                        (0, s.jsx)("span", {
                                          className:
                                            "ml-auto inline-flex h-5 min-w-[20px] items-center justify-center rounded-full bg-primary px-1.5 text-xs font-medium text-primary-foreground",
                                          children: a,
                                        }),
                                    ],
                                  }),
                                },
                                e.path,
                              );
                            }),
                          }),
                        }),
                        (0, s.jsx)(_.Separator, {
                          className: "my-3 bg-border/50",
                        }),
                        (0, s.jsx)("div", {
                          className: "px-3 py-3",
                          children: (0, s.jsxs)("nav", {
                            className: "space-y-1",
                            children: [
                              C.map((e) => {
                                let t = e.icon,
                                  r = i === e.path;
                                return (0, s.jsx)(
                                  o.P.div,
                                  {
                                    whileHover: { x: 4 },
                                    whileTap: { scale: 0.98 },
                                    className: (0, c.cn)(
                                      "flex items-center w-full rounded-lg text-sm font-medium transition-all relative overflow-hidden",
                                      r
                                        ? "bg-primary/10 text-primary border border-primary/20 shadow-inner"
                                        : "hover:bg-muted border-0",
                                    ),
                                    children: (0, s.jsxs)(w(), {
                                      href: e.path,
                                      className:
                                        "flex items-center w-full px-4 py-2.5",
                                      onClick: d,
                                      ...(e.isExternal && {
                                        target: "_blank",
                                        rel: "noopener noreferrer",
                                      }),
                                      children: [
                                        (0, s.jsx)(t, {
                                          size: 18,
                                          className: (0, c.cn)(
                                            "mr-3",
                                            r
                                              ? "text-primary"
                                              : "text-secondary/70",
                                          ),
                                        }),
                                        e.label,
                                      ],
                                    }),
                                  },
                                  e.path,
                                );
                              }),
                              (0, s.jsx)(o.P.div, {
                                whileHover: { x: 4 },
                                whileTap: { scale: 0.98 },
                                className:
                                  "flex items-center w-full rounded-lg text-sm font-medium text-rose-500 hover:bg-rose-500/5 border-0 overflow-hidden relative",
                                children: (0, s.jsxs)("button", {
                                  onClick: () => {
                                    (d(), h());
                                  },
                                  className:
                                    "flex items-center w-full px-4 py-2.5",
                                  children: [
                                    (0, s.jsx)(g.A, {
                                      size: 18,
                                      className: "mr-3",
                                    }),
                                    "Abmelden",
                                  ],
                                }),
                              }),
                            ],
                          }),
                        }),
                      ],
                    }),
                  }),
                }),
            }),
            (0, s.jsxs)("aside", {
              className: (0, c.cn)(
                "hidden md:flex flex-col fixed top-0 left-0 bottom-0 z-10",
                "bg-beige",
                "transition-all duration-300",
                n ? "w-[64px]" : "w-[240px]",
              ),
              children: [
                (0, s.jsxs)("div", {
                  className: "flex-shrink-0",
                  children: [
                    (0, s.jsx)("div", {
                      className: (0, c.cn)(
                        "flex items-center h-[75px]",
                        n ? "px-0 justify-center" : "px-4 justify-between",
                      ),
                      children: n
                        ? (0, s.jsx)("button", {
                            onClick: x,
                            className:
                              "group relative p-2 transition-all duration-200",
                            title: "Erweitern",
                            children: (0, s.jsxs)("div", {
                              className: "relative w-11 h-11",
                              children: [
                                (0, s.jsx)("div", {
                                  className:
                                    "absolute inset-0 transition-opacity duration-200 group-hover:opacity-0",
                                  children: (0, s.jsx)(S.Logo, {
                                    iconSize: "sm",
                                    showText: !1,
                                    href: "/arbeitgeber",
                                    className: "transition-all duration-300",
                                  }),
                                }),
                                (0, s.jsx)("div", {
                                  className:
                                    "absolute inset-0 flex items-center justify-center opacity-0 transition-opacity duration-200 group-hover:opacity-100",
                                  children: (0, s.jsx)(j.A, {
                                    size: 24,
                                    className: "text-muted-foreground",
                                  }),
                                }),
                              ],
                            }),
                          })
                        : (0, s.jsxs)(s.Fragment, {
                            children: [
                              (0, s.jsx)(S.Logo, {
                                iconSize: "sm",
                                showText: !0,
                                href: "/arbeitgeber",
                                className: "transition-all duration-300",
                              }),
                              (0, s.jsx)("button", {
                                onClick: x,
                                className: "transition-colors",
                                title: "Einklappen",
                                children: (0, s.jsx)(v.A, {
                                  size: 24,
                                  className:
                                    "text-muted-foreground hover:text-foreground",
                                }),
                              }),
                            ],
                          }),
                    }),
                    (0, s.jsx)("div", {
                      className: "mx-3 mb-3",
                      children: (0, s.jsx)("div", {
                        className: "h-px bg-secondary/30",
                      }),
                    }),
                  ],
                }),
                (0, s.jsxs)("div", {
                  className: "flex-1 flex flex-col min-h-0",
                  children: [
                    (0, s.jsx)("nav", {
                      className: "flex-1 py-3 space-y-1.5 px-3 overflow-y-auto",
                      children: z.map((e) => {
                        let t = e.icon,
                          r = i === e.path,
                          a =
                            "Bewerbungen" === e.label
                              ? u
                              : "Nachrichten" === e.label
                                ? p
                                : 0;
                        return (0, s.jsxs)(
                          w(),
                          {
                            href: e.path,
                            className: (0, c.cn)(
                              "flex items-center py-2 rounded-lg text-sm font-medium transition-all",
                              "group hover:bg-accent/50 relative overflow-hidden",
                              r &&
                                "bg-primary/10 text-primary border border-primary/20 shadow-inner",
                              !r && "border-0",
                              n ? "justify-center px-0" : "px-4",
                            ),
                            title: n ? e.label : void 0,
                            children: [
                              (0, s.jsx)(t, {
                                size: 18,
                                className: (0, c.cn)(
                                  "transition-all flex-shrink-0",
                                  !n && "mr-2.5",
                                  r
                                    ? "text-primary"
                                    : "text-secondary/70 group-hover:text-primary",
                                ),
                              }),
                              !n &&
                                (0, s.jsx)("span", {
                                  className: "text-sm",
                                  children: e.label,
                                }),
                              !n &&
                                a > 0 &&
                                (0, s.jsx)("span", {
                                  className:
                                    "ml-auto inline-flex h-5 min-w-[20px] items-center justify-center rounded-full bg-primary px-1.5 text-xs font-medium text-primary-foreground",
                                  children: a,
                                }),
                            ],
                          },
                          e.path,
                        );
                      }),
                    }),
                    (0, s.jsxs)("div", {
                      className: "bg-beige pt-2",
                      children: [
                        (0, s.jsx)("div", {
                          className: "mx-3 mb-3",
                          children: (0, s.jsx)("div", {
                            className: "h-px bg-secondary/30",
                          }),
                        }),
                        (0, s.jsxs)("div", {
                          className: "px-3 pb-3 space-y-1.5",
                          children: [
                            C.map((e) => {
                              let t = e.icon,
                                r = i === e.path;
                              return (0, s.jsxs)(
                                w(),
                                {
                                  href: e.path,
                                  className: (0, c.cn)(
                                    "flex items-center py-2 rounded-lg text-sm font-medium transition-all",
                                    "text-muted-foreground hover:text-foreground group relative overflow-hidden",
                                    r &&
                                      "bg-primary/10 text-primary border border-primary/20 shadow-inner",
                                    !r && "hover:bg-accent/50 border-0",
                                    n ? "justify-center px-0" : "px-4",
                                  ),
                                  title: n ? e.label : void 0,
                                  ...(e.isExternal && {
                                    target: "_blank",
                                    rel: "noopener noreferrer",
                                  }),
                                  children: [
                                    (0, s.jsx)(t, {
                                      size: 18,
                                      className: (0, c.cn)(
                                        "transition-all flex-shrink-0",
                                        !n && "mr-2.5",
                                        r
                                          ? "text-primary"
                                          : "text-secondary/70 group-hover:text-primary",
                                      ),
                                    }),
                                    !n &&
                                      (0, s.jsx)("span", {
                                        className: "text-sm",
                                        children: e.label,
                                      }),
                                  ],
                                },
                                e.path,
                              );
                            }),
                            (0, s.jsxs)(A.$, {
                              variant: "ghost",
                              onClick: h,
                              className: (0, c.cn)(
                                "w-full py-2 rounded-lg text-sm font-medium",
                                "text-rose-500 hover:text-rose-600 hover:bg-rose-500/10 group",
                                "border-0 overflow-hidden",
                                n
                                  ? "justify-center px-0"
                                  : "justify-start px-4",
                              ),
                              title: n ? "Abmelden" : void 0,
                              children: [
                                (0, s.jsx)(g.A, {
                                  size: 18,
                                  className: (0, c.cn)(
                                    "transition-all flex-shrink-0",
                                    !n && "mr-2.5",
                                  ),
                                }),
                                !n &&
                                  (0, s.jsx)("span", {
                                    className: "text-sm",
                                    children: "Abmelden",
                                  }),
                              ],
                            }),
                          ],
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
      var E = r(16148),
        P = r(48242),
        I = r(31159),
        L = r(52522),
        T = r(90817);
      function V(e) {
        let { className: t } = e,
          r = (0, n.useRouter)(),
          { employerId: l } = (0, T.B)(),
          [o, d] = (0, i.useState)(0),
          [m, x] = (0, i.useState)([]),
          [h, u] = (0, i.useState)(!1),
          [f, b] = (0, i.useState)(!1),
          [g, j] = (0, i.useState)(!1),
          v = (0, i.useRef)(null),
          y = async () => {
            if (l)
              try {
                let e = await fetch(
                  "/api/arbeitgeber/notifications/unread-count?employerId=".concat(
                    l,
                  ),
                );
                if (e.ok) {
                  let t = await e.json();
                  d(t.count || 0);
                }
              } catch (e) {
                console.error("Error fetching unread count:", e);
              }
          },
          w = async () => {
            if (l) {
              b(!0);
              try {
                let e = await fetch(
                  "/api/arbeitgeber/notifications?employerId=".concat(
                    l,
                    "&limit=10&offset=0",
                  ),
                );
                if (e.ok) {
                  let t = await e.json();
                  x(t.notifications || []);
                }
              } catch (e) {
                console.error("Error fetching notifications:", e);
              } finally {
                b(!1);
              }
            }
          },
          N = async (e) => {
            try {
              (
                await fetch(
                  "/api/arbeitgeber/notifications/".concat(e, "/read"),
                  { method: "PATCH" },
                )
              ).ok &&
                (x((t) =>
                  t.map((t) =>
                    t.id === e
                      ? { ...t, is_read: !0, read_at: new Date().toISOString() }
                      : t,
                  ),
                ),
                y());
            } catch (e) {
              console.error("Error marking notification as read:", e);
            }
          },
          k = async () => {
            if (l) {
              j(!0);
              try {
                (
                  await fetch("/api/arbeitgeber/notifications/mark-all-read", {
                    method: "POST",
                    headers: { "Content-Type": "application/json" },
                    body: JSON.stringify({ employerId: l }),
                  })
                ).ok &&
                  (x((e) =>
                    e.map((e) => ({
                      ...e,
                      is_read: !0,
                      read_at: new Date().toISOString(),
                    })),
                  ),
                  d(0));
              } catch (e) {
                console.error("Error marking all as read:", e);
              } finally {
                j(!1);
              }
            }
          };
        return (
          (0, i.useEffect)(() => {
            let e = (e) => {
              v.current && !v.current.contains(e.target) && u(!1);
            };
            return (
              h && document.addEventListener("mousedown", e),
              () => {
                document.removeEventListener("mousedown", e);
              }
            );
          }, [h]),
          (0, i.useEffect)(() => {
            if (!l) return;
            y();
            let e = (0, a.createClientComponentClient)(),
              t = e
                .channel("employer-notification-updates")
                .on(
                  "postgres_changes",
                  {
                    event: "*",
                    schema: "public",
                    table: "employer_notifications",
                  },
                  (e) => {
                    y();
                  },
                )
                .subscribe();
            return () => {
              e.removeChannel(t);
            };
          }, [l]),
          (0, s.jsxs)("div", {
            className: (0, c.cn)("relative", t),
            ref: v,
            children: [
              (0, s.jsxs)("button", {
                onClick: () => {
                  (h || w(), u(!h));
                },
                className: (0, c.cn)(
                  "relative rounded-full",
                  "text-secondary hover:bg-beige",
                  "transition-all duration-200",
                  "min-w-[40px] min-h-[40px]",
                  "flex items-center justify-center",
                  "border border-border",
                  "focus:outline-none focus-visible:ring-2 focus-visible:ring-primary/20",
                ),
                "aria-label": "Benachrichtigungen",
                children: [
                  (0, s.jsx)(p.A, { className: "h-5 w-5" }),
                  o > 0 &&
                    (0, s.jsx)("span", {
                      className: (0, c.cn)(
                        "absolute -top-0.5 -right-0.5",
                        "flex items-center justify-center",
                        "min-w-[20px] h-5 px-1.5",
                        "bg-[#5D5DE9] text-white",
                        "rounded-full",
                        "text-xs font-semibold",
                        "shadow-sm",
                      ),
                      children: o > 99 ? "99+" : o,
                    }),
                ],
              }),
              h &&
                (0, s.jsxs)("div", {
                  className: (0, c.cn)(
                    "absolute right-0 mt-2 w-[380px] max-w-[calc(100vw-2rem)]",
                    "bg-white rounded-xl shadow-lg",
                    "border border-[#2C3340]/10",
                    "z-50",
                    "max-h-[600px] flex flex-col",
                  ),
                  children: [
                    (0, s.jsxs)("div", {
                      className:
                        "px-4 py-3 border-b border-[#2C3340]/10 flex items-center justify-between",
                      children: [
                        (0, s.jsx)("h3", {
                          className: "text-base font-semibold text-[#2C3340]",
                          children: "Benachrichtigungen",
                        }),
                        o > 0 &&
                          (0, s.jsx)("button", {
                            onClick: k,
                            disabled: g,
                            className: (0, c.cn)(
                              "text-xs text-[#5D5DE9] hover:text-[#2C3340]",
                              "font-medium transition-colors",
                              "disabled:opacity-50",
                            ),
                            children: g
                              ? "Wird geladen..."
                              : "Alle als gelesen markieren",
                          }),
                      ],
                    }),
                    (0, s.jsx)("div", {
                      className: "flex-1 overflow-y-auto max-h-[400px] p-2",
                      children: f
                        ? (0, s.jsx)("div", {
                            className: "flex items-center justify-center py-12",
                            children: (0, s.jsx)(I.A, {
                              className: "h-8 w-8 text-[#5D5DE9] animate-spin",
                            }),
                          })
                        : 0 === m.length
                          ? (0, s.jsxs)("div", {
                              className: "text-center py-12 px-4",
                              children: [
                                (0, s.jsx)(p.A, {
                                  className:
                                    "h-12 w-12 text-[#2C3340]/30 mx-auto mb-3",
                                }),
                                (0, s.jsx)("p", {
                                  className: "text-sm text-[#2C3340]/70",
                                  children: "Keine Benachrichtigungen",
                                }),
                              ],
                            })
                          : (0, s.jsx)("div", {
                              className: "space-y-2",
                              children: m.map((e) =>
                                (0, s.jsx)(
                                  L.r,
                                  {
                                    notification: e,
                                    onMarkAsRead: N,
                                    onClick: () => u(!1),
                                    variant: "compact",
                                  },
                                  e.id,
                                ),
                              ),
                            }),
                    }),
                    m.length > 0 &&
                      (0, s.jsx)("div", {
                        className: "px-4 py-3 border-t border-[#2C3340]/10",
                        children: (0, s.jsx)(A.$, {
                          onClick: () => {
                            (u(!1), r.push("/arbeitgeber/benachrichtigungen"));
                          },
                          className: (0, c.cn)(
                            "w-full rounded-full",
                            "bg-[#5D5DE9] text-white",
                            "hover:bg-[#2C3340]",
                            "transition-all duration-200",
                            "text-sm font-medium",
                            "min-h-[44px]",
                          ),
                          children: "Alle anzeigen",
                        }),
                      }),
                  ],
                }),
            ],
          })
        );
      }
      var B = r(6710),
        O = r(36993),
        W = r(84222),
        D = r(95091),
        R = r(47533);
      function M(e) {
        let { className: t } = e,
          r = (0, n.useRouter)(),
          { employerId: l } = (0, T.B)(),
          [o, d] = (0, i.useState)(0),
          [m, x] = (0, i.useState)([]),
          [h, u] = (0, i.useState)(!1),
          [p, f] = (0, i.useState)(!1),
          b = (0, i.useRef)(null),
          g = async () => {
            if (l) {
              f(!0);
              try {
                let e = await fetch(
                  "/api/arbeitgeber/conversations?employerId=".concat(l),
                );
                if (e.ok) {
                  let t = await e.json();
                  (x((t.conversations || []).slice(0, 10)),
                    d(t.unread_total || 0));
                }
              } catch (e) {
                console.error("Error fetching conversations:", e);
              } finally {
                f(!1);
              }
            }
          },
          j = (e) => {
            (r.push("/arbeitgeber/nachrichten?conversation=".concat(e)), u(!1));
          };
        return (
          (0, i.useEffect)(() => {
            let e = (e) => {
              b.current && !b.current.contains(e.target) && u(!1);
            };
            return (
              h && document.addEventListener("mousedown", e),
              () => {
                document.removeEventListener("mousedown", e);
              }
            );
          }, [h]),
          (0, i.useEffect)(() => {
            if (!l) return;
            g();
            let e = (0, a.createClientComponentClient)(),
              t = e
                .channel("employer-message-updates")
                .on(
                  "postgres_changes",
                  { event: "*", schema: "public", table: "messages" },
                  (e) => {
                    g();
                  },
                )
                .subscribe();
            return () => {
              e.removeChannel(t);
            };
          }, [l]),
          (0, s.jsxs)("div", {
            className: (0, c.cn)("relative", t),
            ref: b,
            children: [
              (0, s.jsxs)("button", {
                onClick: () => {
                  (h || g(), u(!h));
                },
                className: (0, c.cn)(
                  "relative rounded-full",
                  "text-secondary hover:bg-beige",
                  "transition-all duration-200",
                  "min-w-[40px] min-h-[40px]",
                  "flex items-center justify-center",
                  "border border-border",
                  "focus:outline-none focus-visible:ring-2 focus-visible:ring-primary/20",
                ),
                "aria-label": "Nachrichten",
                title: "Nachrichten",
                children: [
                  (0, s.jsx)(W.A, { className: "h-5 w-5" }),
                  o > 0 &&
                    (0, s.jsx)("span", {
                      className: (0, c.cn)(
                        "absolute -top-0.5 -right-0.5",
                        "flex items-center justify-center",
                        "min-w-[20px] h-5 px-1.5",
                        "bg-primary text-white",
                        "rounded-full",
                        "text-xs font-semibold",
                        "shadow-sm",
                      ),
                      children: o > 99 ? "99+" : o,
                    }),
                ],
              }),
              h &&
                (0, s.jsxs)("div", {
                  className: (0, c.cn)(
                    "absolute right-0 mt-2 w-[380px] max-w-[calc(100vw-2rem)]",
                    "bg-white rounded-xl shadow-lg",
                    "border border-[#2C3340]/10",
                    "z-50",
                    "max-h-[600px] flex flex-col",
                  ),
                  children: [
                    (0, s.jsxs)("div", {
                      className:
                        "px-4 py-3 border-b border-[#2C3340]/10 flex items-center justify-between",
                      children: [
                        (0, s.jsx)("h3", {
                          className: "text-base font-semibold text-[#2C3340]",
                          children: "Nachrichten",
                        }),
                        (0, s.jsx)("button", {
                          onClick: () => {
                            (r.push("/arbeitgeber/nachrichten"), u(!1));
                          },
                          className:
                            "text-xs text-[#5D5DE9] hover:text-[#2C3340] font-medium transition-colors",
                          children: "Alle anzeigen",
                        }),
                      ],
                    }),
                    (0, s.jsx)("div", {
                      className: "flex-1 overflow-y-auto max-h-[400px] p-2",
                      children: p
                        ? (0, s.jsx)("div", {
                            className: "flex items-center justify-center py-12",
                            children: (0, s.jsx)(I.A, {
                              className: "h-8 w-8 text-[#5D5DE9] animate-spin",
                            }),
                          })
                        : 0 === m.length
                          ? (0, s.jsxs)("div", {
                              className: "text-center py-12 px-4",
                              children: [
                                (0, s.jsx)(W.A, {
                                  className:
                                    "h-12 w-12 text-[#2C3340]/30 mx-auto mb-3",
                                }),
                                (0, s.jsx)("p", {
                                  className: "text-sm text-[#2C3340]/70",
                                  children: "Keine Nachrichten",
                                }),
                              ],
                            })
                          : (0, s.jsx)("div", {
                              className: "space-y-1",
                              children: m.map((e) =>
                                (0, s.jsx)(
                                  "button",
                                  {
                                    onClick: () => j(e.id),
                                    className: (0, c.cn)(
                                      "w-full text-left p-3 rounded-lg transition-colors",
                                      "hover:bg-[#EEF0F4]",
                                      e.unread_count > 0 && "bg-[#5D5DE9]/5",
                                    ),
                                    children: (0, s.jsxs)("div", {
                                      className: "flex items-start gap-3",
                                      children: [
                                        (0, s.jsx)("div", {
                                          className:
                                            "relative h-10 w-10 overflow-hidden rounded-full bg-[#5D5DE9]/10 flex-shrink-0",
                                          children: e.student_avatar
                                            ? (0, s.jsx)("img", {
                                                src: e.student_avatar,
                                                alt: e.student_name,
                                                className:
                                                  "w-full h-full object-cover",
                                              })
                                            : (0, s.jsx)("div", {
                                                className:
                                                  "w-full h-full flex items-center justify-center text-[#5D5DE9] font-semibold",
                                                children: e.student_name
                                                  .charAt(0)
                                                  .toUpperCase(),
                                              }),
                                        }),
                                        (0, s.jsxs)("div", {
                                          className: "flex-1 min-w-0",
                                          children: [
                                            (0, s.jsxs)("div", {
                                              className:
                                                "flex items-center justify-between mb-1",
                                              children: [
                                                (0, s.jsx)("p", {
                                                  className:
                                                    "text-sm font-semibold text-[#2C3340] truncate",
                                                  children: e.student_name,
                                                }),
                                                (0, s.jsx)("span", {
                                                  className:
                                                    "text-xs text-[#2C3340]/70 flex-shrink-0 ml-2",
                                                  children: (0, D.m)(
                                                    new Date(e.last_message_at),
                                                    {
                                                      addSuffix: !0,
                                                      locale: R.de,
                                                    },
                                                  ),
                                                }),
                                              ],
                                            }),
                                            (0, s.jsx)("p", {
                                              className:
                                                "text-sm text-[#2C3340]/70 line-clamp-2",
                                              children: e.last_message_text,
                                            }),
                                            e.unread_count > 0 &&
                                              (0, s.jsxs)("div", {
                                                className:
                                                  "mt-1 flex items-center gap-1",
                                                children: [
                                                  (0, s.jsx)("span", {
                                                    className:
                                                      "inline-block h-2 w-2 rounded-full bg-[#5D5DE9]",
                                                  }),
                                                  (0, s.jsx)("span", {
                                                    className:
                                                      "text-xs font-semibold text-[#5D5DE9]",
                                                    children: e.unread_count,
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
                    }),
                  ],
                }),
            ],
          })
        );
      }
      function U(e) {
        let { companyName: t, companyLogo: r, isVerified: o, scrolled: c } = e,
          [d, m] = (0, i.useState)(!1),
          [x, h] = (0, i.useState)(!1),
          u = (0, n.useRouter)(),
          p = (0, a.createClientComponentClient)(),
          f = async () => {
            try {
              (m(!0),
                h(!1),
                l.oR.promise(
                  new Promise(async (e, t) => {
                    try {
                      (u.push("/arbeitgeber"),
                        setTimeout(async () => {
                          (await p.auth.signOut(), e(!0));
                        }, 100));
                    } catch (e) {
                      t(e);
                    }
                  }),
                  {
                    loading: "Wird abgemeldet...",
                    success: "Erfolgreich abgemeldet",
                    error: "Fehler beim Abmelden",
                  },
                ));
            } catch (e) {
              console.error("Error signing out:", e);
            } finally {
              m(!1);
            }
          };
        return (0, s.jsxs)("div", {
          className: "flex items-center gap-3",
          children: [
            (0, s.jsx)(O.V, { variant: "icon", size: "default" }),
            (0, s.jsx)(M, {}),
            (0, s.jsx)(V, {}),
            (0, s.jsxs)(P.rI, {
              open: x,
              onOpenChange: h,
              children: [
                (0, s.jsx)(P.ty, {
                  asChild: !0,
                  children: (0, s.jsx)("button", {
                    className:
                      "group relative min-w-[40px] min-h-[40px] rounded-full hover:bg-beige transition-all duration-200 focus:outline-none focus-visible:ring-2 focus-visible:ring-primary/20 flex items-center justify-center border border-border",
                    children: (0, s.jsxs)("div", {
                      className:
                        "relative h-10 w-10 overflow-hidden rounded-full ring-2 ring-primary/20 shadow-sm group-hover:shadow-md group-hover:ring-primary/40 transition-all duration-200 bg-white flex items-center justify-center",
                      children: [
                        r
                          ? (0, s.jsx)(k.default, {
                              src: r,
                              alt: "Logo",
                              fill: !0,
                              className: "object-cover",
                            })
                          : (0, s.jsx)(E.A, {
                              className: "h-5 w-5 text-primary",
                            }),
                        o &&
                          (0, s.jsx)("div", {
                            className:
                              "absolute -bottom-0.5 -right-0.5 h-2.5 w-2.5 rounded-full bg-secondary border-2 border-background animate-pulse",
                          }),
                      ],
                    }),
                  }),
                }),
                (0, s.jsxs)(P.SQ, {
                  align: "end",
                  className:
                    "w-72 p-2 mt-2 rounded-xl border-border/50 bg-background/95 backdrop-blur-xl shadow-2xl",
                  sideOffset: 8,
                  children: [
                    (0, s.jsx)("div", {
                      className: "p-4 pb-3",
                      children: (0, s.jsxs)("div", {
                        className: "flex items-start gap-3",
                        children: [
                          (0, s.jsx)("div", {
                            className:
                              "relative h-11 w-11 overflow-hidden rounded-lg ring-2 ring-primary/10 shadow-md bg-white flex items-center justify-center",
                            children: r
                              ? (0, s.jsx)(k.default, {
                                  src: r,
                                  alt: "Logo",
                                  fill: !0,
                                  className: "object-cover",
                                })
                              : (0, s.jsx)(E.A, {
                                  className: "h-6 w-6 text-primary",
                                }),
                          }),
                          (0, s.jsxs)("div", {
                            className: "flex-1 min-w-0",
                            children: [
                              (0, s.jsx)("p", {
                                className:
                                  "font-semibold text-sm text-foreground truncate",
                                children: t || "Unternehmen",
                              }),
                              (0, s.jsx)("div", {
                                className: "mt-1",
                                children: (0, s.jsx)(B.$, {
                                  status: o ? "verified" : "pending",
                                  label: o ? "Verifiziert" : "Wird gepr\xfcft",
                                  size: "xs",
                                  showIcon: !0,
                                  showLabel: !0,
                                }),
                              }),
                            ],
                          }),
                        ],
                      }),
                    }),
                    (0, s.jsx)("div", {
                      className:
                        "h-px bg-gradient-to-r from-transparent via-border/50 to-transparent mb-1",
                    }),
                    (0, s.jsxs)("div", {
                      className: "p-1 space-y-1.5",
                      children: [
                        (0, s.jsx)(w(), {
                          href: "/arbeitgeber/einstellungen/firma",
                          onClick: () => h(!1),
                          children: (0, s.jsxs)("div", {
                            className:
                              "group flex items-center py-2 px-4 rounded-lg text-sm font-medium transition-all relative overflow-hidden hover:bg-accent/50 border-0",
                            children: [
                              (0, s.jsx)(E.A, {
                                size: 18,
                                className:
                                  "transition-all flex-shrink-0 mr-2.5 text-secondary/70 group-hover:text-primary",
                              }),
                              (0, s.jsx)("span", {
                                className: "text-sm",
                                children: "Firmenprofil",
                              }),
                            ],
                          }),
                        }),
                        (0, s.jsx)(w(), {
                          href: "/arbeitgeber/einstellungen",
                          onClick: () => h(!1),
                          children: (0, s.jsxs)("div", {
                            className:
                              "group flex items-center py-2 px-4 rounded-lg text-sm font-medium transition-all relative overflow-hidden hover:bg-accent/50 border-0",
                            children: [
                              (0, s.jsx)(b.A, {
                                size: 18,
                                className:
                                  "transition-all flex-shrink-0 mr-2.5 text-secondary/70 group-hover:text-primary",
                              }),
                              (0, s.jsx)("span", {
                                className: "text-sm",
                                children: "Einstellungen",
                              }),
                            ],
                          }),
                        }),
                      ],
                    }),
                    (0, s.jsx)("div", {
                      className:
                        "h-px bg-gradient-to-r from-transparent via-border/50 to-transparent my-1",
                    }),
                    (0, s.jsx)("div", {
                      className: "p-1",
                      children: (0, s.jsxs)("button", {
                        onClick: f,
                        disabled: d,
                        className:
                          "group w-full flex items-center py-2 px-4 rounded-lg text-sm font-medium transition-all hover:bg-rose-500/10 relative overflow-hidden disabled:opacity-50 disabled:cursor-not-allowed",
                        children: [
                          (0, s.jsx)(g.A, {
                            size: 18,
                            className:
                              "transition-all flex-shrink-0 mr-2.5 text-rose-500",
                          }),
                          (0, s.jsx)("span", {
                            className: "text-sm text-rose-500",
                            children: "Abmelden",
                          }),
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
      var q = r(26304);
      function H(e) {
        let { scrolled: t, className: r } = e;
        return (0, s.jsxs)("div", {
          className: (0, c.cn)("", r),
          children: [
            t &&
              (0, s.jsx)(o.P.button, {
                initial: { opacity: 0, y: 20 },
                animate: { opacity: 1, y: 0 },
                exit: { opacity: 0, y: 20 },
                onClick: () => window.scrollTo({ top: 0, behavior: "smooth" }),
                className:
                  "fixed right-6 bottom-6 z-10 h-10 w-10 rounded-full border border-border/50 bg-background/80 backdrop-blur-sm flex items-center justify-center hover:bg-primary/10 hover:border-primary/50 transition-colors shadow-lg",
                children: (0, s.jsx)(q.A, { size: 18 }),
              }),
            (0, s.jsxs)("footer", {
              className: (0, c.cn)(
                "text-center py-6 mt-12 border-t border-border/20",
                "text-xs text-muted-foreground",
              ),
              children: [
                (0, s.jsxs)("div", {
                  className: "mb-2 flex items-center justify-center gap-4",
                  children: [
                    (0, s.jsx)(w(), {
                      href: "/arbeitgeber/agb",
                      className: "hover:text-primary transition-colors",
                      children: "AGB",
                    }),
                    (0, s.jsx)(w(), {
                      href: "/arbeitgeber/datenschutz",
                      className: "hover:text-primary transition-colors",
                      children: "Datenschutz",
                    }),
                    (0, s.jsx)(w(), {
                      href: "/arbeitgeber/impressum",
                      className: "hover:text-primary transition-colors",
                      children: "Impressum",
                    }),
                    (0, s.jsx)(w(), {
                      href: "/arbeitgeber/hilfe",
                      className: "hover:text-primary transition-colors",
                      children: "Hilfe & Support",
                    }),
                  ],
                }),
                (0, s.jsxs)("p", {
                  children: [
                    "\xa9 ",
                    new Date().getFullYear(),
                    " Azubi. Alle Rechte vorbehalten.",
                  ],
                }),
              ],
            }),
          ],
        });
      }
      var $ = r(4130),
        G = r(58630),
        K = r(24125),
        J = r(28560),
        Q = r(36521),
        Y = r(1701),
        Z = r(63016),
        X = r(27239),
        ee = r(37426),
        et = r(39945),
        er = r(79024),
        es = r(51105),
        ei = r(79650),
        ea = r(51613);
      let en = {
        contact_person_name: J.A,
        contact_phone: Q.A,
        address: Y.A,
        industry_sector: E.A,
        company_size: E.A,
        company_website: Z.A,
        company_logo: E.A,
        company_description: X.A,
        legal_registration: ee.A,
      };
      function el() {
        let { employerId: e, isLoading: t } = (0, T.B)();
        (0, a.createClientComponentClient)();
        let r = (0, n.useRouter)(),
          [l, d] = (0, i.useState)(!1),
          [m, x] = (0, i.useState)(null),
          [h, u] = (0, i.useState)(!0),
          [p, f] = (0, i.useState)(!1),
          [b, g] = (0, i.useState)(!1),
          j = (0, i.useRef)(0),
          v = (0, i.useRef)(void 0),
          y = (0, i.useRef)(void 0),
          [w, k] = (0, i.useState)({ width: 0, height: 0 }),
          [A, _] = (0, i.useState)(!1),
          [S, z] = (0, i.useState)(!1);
        (0, i.useEffect)(() => {
          let r, s;
          if (t || !e) return;
          (C(),
            k({ width: window.innerWidth, height: window.innerHeight }),
            localStorage.getItem("employerProfileWidgetTooltipSeen")
              ? z(!0)
              : (z(!1),
                (r = setTimeout(() => {
                  (_(!0),
                    (s = setTimeout(() => {
                      (_(!1),
                        localStorage.setItem(
                          "employerProfileWidgetTooltipSeen",
                          "true",
                        ),
                        z(!0));
                    }, 8e3)));
                }, 2e3))));
          let i = () => {
            k({ width: window.innerWidth, height: window.innerHeight });
          };
          window.addEventListener("resize", i);
          let a = () => C();
          window.addEventListener("focus", a);
          let n = () => {
            C();
          };
          return (
            window.addEventListener("employerProfileUpdated", n),
            () => {
              (r && clearTimeout(r),
                s && clearTimeout(s),
                v.current && clearTimeout(v.current),
                y.current && clearTimeout(y.current),
                window.removeEventListener("focus", a),
                window.removeEventListener("resize", i),
                window.removeEventListener("employerProfileUpdated", n));
            }
          );
        }, [e, t]);
        let C = async () => {
            if (!e) {
              u(!1);
              return;
            }
            try {
              u(!0);
              let t = await fetch(
                  "/api/arbeitgeber/profile/completeness?employerId=".concat(e),
                ),
                r = await t.json();
              if (r.success) {
                let e = r.data.percentage,
                  t = j.current < 100;
                (x(r.data),
                  t &&
                    100 === e &&
                    !b &&
                    (g(!0),
                    (v.current = setTimeout(() => {
                      g(!1);
                    }, 5e3)),
                    (y.current = setTimeout(() => f(!0), 7e3))),
                  (j.current = e));
              }
            } catch (e) {
              console.error("Error loading employer profile status:", e);
            } finally {
              u(!1);
            }
          },
          F = (e) => {
            e.completed ||
              (d(!1),
              setTimeout(() => {
                r.push(e.actionTarget);
              }, 300));
          };
        if (p || t || !e || h || !m || (m.isVerified && m.isComplete))
          return null;
        let P = 2 * Math.PI * 17,
          I = P - (m.percentage / 100) * P;
        return (0, s.jsxs)(s.Fragment, {
          children: [
            b &&
              (0, s.jsx)(K.A, {
                width: w.width,
                height: w.height,
                recycle: !1,
                numberOfPieces: 500,
                gravity: 0.3,
              }),
            (0, s.jsx)(N.N, {
              children: (0, s.jsxs)(o.P.div, {
                initial: { opacity: 0, y: 100 },
                animate: { opacity: 1, y: 0 },
                exit: { opacity: 0, y: 100 },
                className:
                  "fixed bottom-4 right-4 md:bottom-6 md:right-6 z-50 flex flex-col items-end gap-2",
                children: [
                  (0, s.jsx)(N.N, {
                    children:
                      l &&
                      (0, s.jsxs)(o.P.div, {
                        initial: { opacity: 0, scale: 0.95, y: 20 },
                        animate: { opacity: 1, scale: 1, y: 0 },
                        exit: { opacity: 0, scale: 0.95, y: 20 },
                        transition: { duration: 0.2 },
                        className:
                          "bg-background border shadow-2xl rounded-2xl w-[calc(100vw-2rem)] max-w-[360px] max-h-[70vh] md:max-h-[580px] flex flex-col overflow-hidden",
                        children: [
                          (0, s.jsxs)("div", {
                            className:
                              "flex-shrink-0 p-3 md:p-4 border-b bg-muted/30",
                            children: [
                              (0, s.jsxs)("div", {
                                className:
                                  "flex items-center justify-between gap-2",
                                children: [
                                  (0, s.jsxs)("div", {
                                    className: "flex-1 min-w-0",
                                    children: [
                                      (0, s.jsx)("h3", {
                                        className:
                                          "font-semibold text-sm md:text-base",
                                        children: m.isVerified
                                          ? "Profil vervollst\xe4ndigen"
                                          : "Verifizierung starten",
                                      }),
                                      (0, s.jsx)("p", {
                                        className:
                                          "text-xs text-muted-foreground mt-0.5 line-clamp-1",
                                        children: m.isVerificationEligible
                                          ? "Bereit zur Verifizierung"
                                          : "".concat(
                                              60 - m.mandatoryScore,
                                              " Punkte bis zur Verifizierung",
                                            ),
                                      }),
                                    ],
                                  }),
                                  (0, s.jsx)("button", {
                                    onClick: () => d(!1),
                                    className:
                                      "p-2 hover:bg-muted rounded-full transition-colors min-w-[44px] min-h-[44px] flex items-center justify-center",
                                    "aria-label": "Schlie\xdfen",
                                    children: (0, s.jsx)(et.A, {
                                      className: "w-4 h-4",
                                    }),
                                  }),
                                ],
                              }),
                              (0, s.jsxs)("div", {
                                className: "mt-3",
                                children: [
                                  (0, s.jsxs)("div", {
                                    className:
                                      "flex items-center justify-between text-xs mb-1.5",
                                    children: [
                                      (0, s.jsxs)("span", {
                                        className: "font-medium",
                                        children: [
                                          m.percentage,
                                          "% vollst\xe4ndig",
                                        ],
                                      }),
                                      (0, s.jsxs)("span", {
                                        className: "text-muted-foreground",
                                        children: [
                                          m.totalFields - m.checklist.length,
                                          "/",
                                          m.totalFields,
                                        ],
                                      }),
                                    ],
                                  }),
                                  (0, s.jsx)("div", {
                                    className:
                                      "h-1.5 bg-muted rounded-full overflow-hidden",
                                    children: (0, s.jsx)(o.P.div, {
                                      initial: { width: 0 },
                                      animate: {
                                        width: "".concat(m.percentage, "%"),
                                      },
                                      transition: {
                                        duration: 0.5,
                                        ease: "easeOut",
                                      },
                                      className:
                                        "h-full bg-primary rounded-full",
                                    }),
                                  }),
                                ],
                              }),
                              (0, s.jsxs)("div", {
                                className: "mt-3 flex items-center gap-2",
                                children: [
                                  (0, s.jsx)(er.A, {
                                    className:
                                      "w-3.5 h-3.5 text-muted-foreground",
                                  }),
                                  (0, s.jsx)("span", {
                                    className: "text-xs text-muted-foreground",
                                    children: "Profilst\xe4rke:",
                                  }),
                                  (0, s.jsx)("span", {
                                    className: (0, c.cn)(
                                      "text-xs font-semibold px-2 py-0.5 rounded-full",
                                      m.percentage >= 76
                                        ? "bg-green-100 text-green-700"
                                        : m.percentage >= 50
                                          ? "bg-orange-100 text-orange-700"
                                          : "bg-red-100 text-red-700",
                                    ),
                                    children:
                                      m.percentage >= 76
                                        ? "Stark"
                                        : m.percentage >= 50
                                          ? "Gut"
                                          : "Ausbauf\xe4hig",
                                  }),
                                ],
                              }),
                            ],
                          }),
                          (0, s.jsx)("div", {
                            className:
                              "flex-1 overflow-y-auto custom-scrollbar",
                            children: (0, s.jsx)("div", {
                              className: "p-2 md:p-2",
                              children: m.checklist.map((e, t) => {
                                let r = en[e.id] || E.A,
                                  i = e.completed;
                                return (0, s.jsxs)(
                                  o.P.button,
                                  {
                                    initial: { opacity: 0, x: -20 },
                                    animate: { opacity: 1, x: 0 },
                                    transition: { delay: 0.03 * t },
                                    onClick: () => F(e),
                                    disabled: i,
                                    className: (0, c.cn)(
                                      "w-full flex items-center gap-3 p-3 rounded-lg transition-all min-h-[56px]",
                                      "hover:bg-muted/50 active:scale-[0.98]",
                                      i
                                        ? "opacity-60 cursor-default"
                                        : "cursor-pointer",
                                      !i && "hover:shadow-sm",
                                    ),
                                    children: [
                                      (0, s.jsx)("div", {
                                        className: (0, c.cn)(
                                          "flex-shrink-0 w-5 h-5 rounded-full border-2 flex items-center justify-center transition-all",
                                          i
                                            ? "bg-primary border-primary"
                                            : "border-muted-foreground/30 hover:border-primary",
                                        ),
                                        children:
                                          i &&
                                          (0, s.jsx)(es.A, {
                                            className:
                                              "w-3 h-3 text-primary-foreground",
                                          }),
                                      }),
                                      (0, s.jsx)("div", {
                                        className: (0, c.cn)(
                                          "flex-shrink-0 w-8 h-8 rounded-lg flex items-center justify-center",
                                          i ? "bg-muted" : "bg-primary/10",
                                        ),
                                        children: (0, s.jsx)(r, {
                                          className: (0, c.cn)(
                                            "w-4 h-4",
                                            i
                                              ? "text-muted-foreground"
                                              : "text-primary",
                                          ),
                                        }),
                                      }),
                                      (0, s.jsx)("span", {
                                        className: (0, c.cn)(
                                          "flex-1 text-left text-sm",
                                          i
                                            ? "text-muted-foreground line-through"
                                            : "font-medium",
                                        ),
                                        children: e.label,
                                      }),
                                      (0, s.jsxs)("span", {
                                        className: (0, c.cn)(
                                          "flex-shrink-0 text-xs px-2 py-0.5 rounded-full",
                                          i
                                            ? "bg-muted text-muted-foreground"
                                            : "bg-primary/10 text-primary font-medium",
                                        ),
                                        children: ["+", e.points],
                                      }),
                                    ],
                                  },
                                  e.id,
                                );
                              }),
                            }),
                          }),
                          !m.isVerified &&
                            m.isVerificationEligible &&
                            (0, s.jsx)("div", {
                              className:
                                "flex-shrink-0 w-full py-4 px-4 border-t bg-primary/10 min-h-[56px]",
                              children: (0, s.jsxs)("div", {
                                className:
                                  "flex items-center gap-2 text-primary",
                                children: [
                                  (0, s.jsx)(ee.A, { className: "w-5 h-5" }),
                                  (0, s.jsx)("span", {
                                    className:
                                      "text-sm md:text-base font-medium",
                                    children: "Bereit zur Verifizierung!",
                                  }),
                                ],
                              }),
                            }),
                          m.isVerified &&
                            m.isComplete &&
                            (0, s.jsx)("div", {
                              className:
                                "flex-shrink-0 w-full py-4 px-4 border-t bg-primary/10 min-h-[56px]",
                              children: (0, s.jsxs)("div", {
                                className:
                                  "flex items-center gap-2 text-primary",
                                children: [
                                  (0, s.jsx)(es.A, { className: "w-5 h-5" }),
                                  (0, s.jsx)("span", {
                                    className:
                                      "text-sm md:text-base font-medium",
                                    children: "Profil vollst\xe4ndig!",
                                  }),
                                ],
                              }),
                            }),
                        ],
                      }),
                  }),
                  (0, s.jsx)(N.N, {
                    children:
                      A &&
                      !l &&
                      !m.isVerified &&
                      (0, s.jsx)(o.P.div, {
                        initial: { opacity: 0, y: 10, scale: 0.95 },
                        animate: { opacity: 1, y: 0, scale: 1 },
                        exit: { opacity: 0, y: 10, scale: 0.95 },
                        transition: { duration: 0.3, type: "spring" },
                        className:
                          "absolute bottom-full right-0 mb-3 w-[280px] md:w-[320px] z-50",
                        children: (0, s.jsxs)("div", {
                          className:
                            "bg-[#5D5DE9] text-white p-4 rounded-xl shadow-2xl relative",
                          children: [
                            (0, s.jsx)("button", {
                              onClick: () => {
                                (_(!1),
                                  localStorage.setItem(
                                    "employerProfileWidgetTooltipSeen",
                                    "true",
                                  ),
                                  z(!0));
                              },
                              className:
                                "absolute top-2 right-2 p-1 hover:bg-white/20 rounded-full transition-colors",
                              "aria-label": "Tooltip schlie\xdfen",
                              children: (0, s.jsx)(et.A, {
                                className: "h-4 w-4",
                              }),
                            }),
                            (0, s.jsxs)("div", {
                              className: "flex items-start gap-3",
                              children: [
                                (0, s.jsx)("div", {
                                  className:
                                    "flex-shrink-0 w-8 h-8 bg-white/20 rounded-full flex items-center justify-center",
                                  children: (0, s.jsx)(ei.A, {
                                    className: "h-4 w-4",
                                  }),
                                }),
                                (0, s.jsxs)("div", {
                                  className: "flex-1",
                                  children: [
                                    (0, s.jsx)("h4", {
                                      className: "font-semibold mb-1 text-sm",
                                      children: "Profil vervollst\xe4ndigen!",
                                    }),
                                    (0, s.jsx)("p", {
                                      className:
                                        "text-xs leading-relaxed opacity-95",
                                      children:
                                        "Vervollst\xe4ndigen Sie Ihr Profil, um verifiziert zu werden und qualifizierte Bewerber zu erreichen.",
                                    }),
                                  ],
                                }),
                              ],
                            }),
                            (0, s.jsx)("div", {
                              className:
                                "absolute -bottom-2 right-6 w-4 h-4 bg-[#5D5DE9] transform rotate-45",
                            }),
                          ],
                        }),
                      }),
                  }),
                  (0, s.jsxs)(o.P.button, {
                    whileHover: { scale: 1.02 },
                    whileTap: { scale: 0.98 },
                    onClick: () => d(!l),
                    className: (0, c.cn)(
                      "flex items-center gap-2 md:gap-3 px-3 md:px-4 py-2 md:py-3 bg-background border shadow-lg rounded-full transition-all",
                      "hover:shadow-xl hover:border-primary/50 min-h-[52px]",
                      !S && !m.isVerified && "animate-pulse",
                    ),
                    "aria-label": l
                      ? "Profilvervollst\xe4ndigung zuklappen"
                      : "Profilvervollst\xe4ndigung aufklappen",
                    children: [
                      (0, s.jsxs)("div", {
                        className: "relative w-10 h-10",
                        children: [
                          (0, s.jsxs)("svg", {
                            className: "w-10 h-10 -rotate-90",
                            viewBox: "0 0 40 40",
                            children: [
                              (0, s.jsx)("circle", {
                                cx: "20",
                                cy: "20",
                                r: 17,
                                stroke: "currentColor",
                                strokeWidth: "3",
                                fill: "none",
                                className: "text-muted",
                              }),
                              (0, s.jsx)("circle", {
                                cx: "20",
                                cy: "20",
                                r: 17,
                                stroke: "currentColor",
                                strokeWidth: "3",
                                fill: "none",
                                strokeDasharray: P,
                                strokeDashoffset: I,
                                strokeLinecap: "round",
                                className:
                                  "text-primary transition-all duration-500",
                              }),
                            ],
                          }),
                          (0, s.jsx)("div", {
                            className:
                              "absolute inset-0 flex items-center justify-center",
                            children: (0, s.jsxs)("span", {
                              className: "text-[10px] md:text-[11px] font-bold",
                              children: [m.percentage, "%"],
                            }),
                          }),
                        ],
                      }),
                      (0, s.jsxs)("div", {
                        className: "flex items-center gap-1.5 md:gap-2",
                        children: [
                          (0, s.jsx)("span", {
                            className:
                              "text-xs md:text-sm font-medium whitespace-nowrap",
                            children: m.isVerified
                              ? "Profil vervollst\xe4ndigen"
                              : m.isVerificationEligible
                                ? "Bereit!"
                                : "Verifizierung",
                          }),
                          l
                            ? (0, s.jsx)(ea.A, {
                                className: "w-4 h-4 text-muted-foreground",
                              })
                            : (0, s.jsx)(q.A, {
                                className: "w-4 h-4 text-muted-foreground",
                              }),
                        ],
                      }),
                    ],
                  }),
                ],
              }),
            }),
          ],
        });
      }
      var eo = r(61889),
        ec = r(62414),
        ed = r(42678),
        em = r(46031);
      function ex(e) {
        let {
            open: t,
            onClose: r,
            companyName: a,
            missingFields: l,
            nextSteps: d,
          } = e,
          m = (0, n.useRouter)(),
          [x, h] = (0, i.useState)(0),
          u = [
            {
              title: "Willkommen bei Azubi, ".concat(a, "!"),
              description:
                "Vielen Dank f\xfcr Ihre Registrierung. Lassen Sie uns Ihr Profil vervollst\xe4ndigen, damit Sie qualifizierte Bewerber erreichen k\xf6nnen.",
              icon: ec.A,
              color: "text-orange-500",
              bgColor: "bg-orange-100",
            },
            {
              title: "Warum ist ein vollst\xe4ndiges Profil wichtig?",
              description:
                "Ein vollst\xe4ndiges Profil erh\xf6ht Ihre Sichtbarkeit und erm\xf6glicht es uns, Ihr Unternehmen zu verifizieren. Verifizierte Arbeitgeber erhalten 3x mehr qualifizierte Bewerbungen.",
              icon: ee.A,
              color: "text-green-700",
              bgColor: "bg-green-100",
            },
            {
              title: "Was ben\xf6tigen wir von Ihnen?",
              description: "Noch ".concat(
                l,
                " Felder ben\xf6tigt, um Ihr Profil zu vervollst\xe4ndigen und verifiziert zu werden:",
              ),
              icon: ed.A,
              color: "text-primary",
              bgColor: "bg-primary/10",
            },
          ],
          p = u[x],
          f = p.icon;
        return (0, s.jsx)(eo.lG, {
          open: t,
          onOpenChange: r,
          children: (0, s.jsx)(eo.Cf, {
            className: "sm:max-w-[500px] md:max-w-[600px] overflow-hidden p-0",
            children: (0, s.jsxs)("div", {
              className: "relative",
              children: [
                (0, s.jsxs)("div", {
                  className: "absolute inset-0 -z-10 overflow-hidden",
                  children: [
                    (0, s.jsx)("div", {
                      className:
                        "absolute right-0 top-0 w-64 h-64 rounded-full bg-[#5D5DE9]/5 blur-3xl",
                    }),
                    (0, s.jsx)("div", {
                      className:
                        "absolute left-0 bottom-0 w-48 h-48 rounded-full bg-[#2C3340]/5 blur-3xl",
                    }),
                  ],
                }),
                (0, s.jsxs)("div", {
                  className: "p-6 md:p-8",
                  children: [
                    (0, s.jsx)("div", {
                      className: "flex items-center justify-center gap-2 mb-6",
                      children: u.map((e, t) =>
                        (0, s.jsx)(
                          "div",
                          {
                            className: (0, c.cn)(
                              "h-2 rounded-full transition-all duration-300",
                              t === x ? "w-8 bg-primary" : "w-2 bg-muted",
                            ),
                          },
                          t,
                        ),
                      ),
                    }),
                    (0, s.jsx)(N.N, {
                      mode: "wait",
                      children: (0, s.jsxs)(
                        o.P.div,
                        {
                          initial: { opacity: 0, x: 20 },
                          animate: { opacity: 1, x: 0 },
                          exit: { opacity: 0, x: -20 },
                          transition: { duration: 0.3 },
                          className: "space-y-6",
                          children: [
                            (0, s.jsx)("div", {
                              className: "flex justify-center",
                              children: (0, s.jsx)("div", {
                                className: (0, c.cn)(
                                  "w-16 h-16 rounded-2xl flex items-center justify-center",
                                  p.bgColor,
                                ),
                                children: (0, s.jsx)(f, {
                                  className: (0, c.cn)("w-8 h-8", p.color),
                                }),
                              }),
                            }),
                            (0, s.jsxs)("div", {
                              className: "text-center space-y-3",
                              children: [
                                (0, s.jsx)(eo.L3, {
                                  className: "text-xl md:text-2xl font-bold",
                                  children: p.title,
                                }),
                                (0, s.jsx)(eo.rr, {
                                  className:
                                    "text-base text-muted-foreground leading-relaxed",
                                  children: p.description,
                                }),
                              ],
                            }),
                            x === u.length - 1 &&
                              (0, s.jsx)("div", {
                                className: "space-y-2 mt-4",
                                children: d.slice(0, 5).map((e, t) => {
                                  let r = e.icon;
                                  return (0, s.jsxs)(
                                    o.P.div,
                                    {
                                      initial: { opacity: 0, y: 10 },
                                      animate: { opacity: 1, y: 0 },
                                      transition: { delay: 0.1 * t },
                                      className:
                                        "flex items-center gap-3 p-3 rounded-lg bg-muted/30 hover:bg-muted/50 transition-colors",
                                      children: [
                                        (0, s.jsx)("div", {
                                          className:
                                            "w-8 h-8 rounded-lg bg-primary/10 flex items-center justify-center flex-shrink-0",
                                          children: (0, s.jsx)(r, {
                                            className: "w-4 h-4 text-primary",
                                          }),
                                        }),
                                        (0, s.jsx)("span", {
                                          className: "text-sm font-medium",
                                          children: e.label,
                                        }),
                                      ],
                                    },
                                    t,
                                  );
                                }),
                              }),
                            1 === x &&
                              (0, s.jsx)("div", {
                                className:
                                  "grid grid-cols-1 md:grid-cols-2 gap-3 mt-4",
                                children: [
                                  {
                                    icon: ee.A,
                                    label: "Verifiziertes Profil",
                                    desc: "Bauen Sie Vertrauen auf",
                                  },
                                  {
                                    icon: ed.A,
                                    label: "3x mehr Bewerbungen",
                                    desc: "H\xf6here Sichtbarkeit",
                                  },
                                  {
                                    icon: J.A,
                                    label: "Qualifizierte Kandidaten",
                                    desc: "Passende Bewerber finden",
                                  },
                                  {
                                    icon: Z.A,
                                    label: "Internationale Talente",
                                    desc: "Fachkr\xe4fte aus aller Welt",
                                  },
                                ].map((e, t) => {
                                  let r = e.icon;
                                  return (0, s.jsxs)(
                                    o.P.div,
                                    {
                                      initial: { opacity: 0, scale: 0.95 },
                                      animate: { opacity: 1, scale: 1 },
                                      transition: { delay: 0.1 * t },
                                      className:
                                        "p-3 rounded-lg bg-muted/30 space-y-1",
                                      children: [
                                        (0, s.jsxs)("div", {
                                          className: "flex items-center gap-2",
                                          children: [
                                            (0, s.jsx)(r, {
                                              className: "w-4 h-4 text-primary",
                                            }),
                                            (0, s.jsx)("span", {
                                              className:
                                                "text-sm font-semibold",
                                              children: e.label,
                                            }),
                                          ],
                                        }),
                                        (0, s.jsx)("p", {
                                          className:
                                            "text-xs text-muted-foreground",
                                          children: e.desc,
                                        }),
                                      ],
                                    },
                                    t,
                                  );
                                }),
                              }),
                          ],
                        },
                        x,
                      ),
                    }),
                    (0, s.jsxs)("div", {
                      className: "flex items-center justify-between gap-4 mt-8",
                      children: [
                        (0, s.jsx)(A.$, {
                          type: "button",
                          variant: "ghost",
                          onClick: () => {
                            r();
                          },
                          className: "rounded-full",
                          children:
                            x === u.length - 1
                              ? "Sp\xe4ter"
                              : "\xdcberspringen",
                        }),
                        (0, s.jsx)(A.$, {
                          type: "button",
                          onClick: () => {
                            x < u.length - 1
                              ? h(x + 1)
                              : (m.push(
                                  "/arbeitgeber/einstellungen?tab=company",
                                ),
                                r());
                          },
                          className: "rounded-full min-w-[140px]",
                          children:
                            x === u.length - 1
                              ? (0, s.jsxs)(s.Fragment, {
                                  children: [
                                    "Jetzt starten",
                                    (0, s.jsx)(em.A, {
                                      className: "ml-2 w-4 h-4",
                                    }),
                                  ],
                                })
                              : "Weiter",
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
      var eh = r(7535),
        eu = r(70005),
        ep = r(70311),
        ef = r(80187);
      function eb(e) {
        let {
            isOpen: t,
            onClose: r,
            companyName: i,
            verificationTier: a,
            onPublishJob: n,
          } = e,
          l = {
            verified: {
              title: "Ihr Unternehmen ist verifiziert!",
              subtitle: "".concat(i, " wurde erfolgreich verifiziert."),
            },
            trusted: {
              title: "Ihr Unternehmen ist als vertrauensw\xfcrdig eingestuft!",
              subtitle: "".concat(
                i,
                " hat den vertrauensw\xfcrdigen Status erreicht.",
              ),
            },
          }[a],
          o = [
            {
              icon: m.A,
              title: "Stellen ver\xf6ffentlichen",
              description:
                "Ver\xf6ffentlichen Sie unbegrenzt Ausbildungsangebote",
            },
            {
              icon: h.A,
              title: "Kandidaten kontaktieren",
              description: "Direkter Zugang zu qualifizierten Bewerbern",
            },
            {
              icon: eh.A,
              title: "Erh\xf6hte Sichtbarkeit",
              description:
                "Ihr verifiziertes Abzeichen erh\xf6ht das Vertrauen",
            },
            {
              icon: eu.A,
              title: "Voller Plattformzugang",
              description: "Nutzen Sie alle Premium-Funktionen",
            },
          ];
        return (0, s.jsx)(eo.lG, {
          open: t,
          onOpenChange: r,
          children: (0, s.jsxs)(eo.Cf, {
            className: "sm:max-w-[550px]",
            children: [
              (0, s.jsxs)(eo.c7, {
                children: [
                  (0, s.jsx)(eo.L3, {
                    className: "text-center text-2xl font-bold",
                    children: l.title,
                  }),
                  (0, s.jsx)(eo.rr, {
                    className: "text-center text-base pt-2",
                    children: l.subtitle,
                  }),
                ],
              }),
              (0, s.jsx)("div", {
                className: "flex justify-center py-6",
                children: (0, s.jsx)(ep.A, {
                  className: "w-20 h-20 text-blue-600",
                  fill: "currentColor",
                  style: {
                    filter: "drop-shadow(0 0 12px rgba(59, 130, 246, 0.5))",
                  },
                }),
              }),
              (0, s.jsxs)("div", {
                className: "space-y-4",
                children: [
                  (0, s.jsx)("h4", {
                    className: "font-semibold text-base text-center",
                    children: "Ihre Vorteile als verifiziertes Unternehmen:",
                  }),
                  (0, s.jsx)("div", {
                    className: "grid grid-cols-2 gap-3",
                    children: o.map((e) =>
                      (0, s.jsx)(
                        ef.Zp,
                        {
                          className: "border border-border",
                          children: (0, s.jsx)(ef.Wu, {
                            className: "p-3",
                            children: (0, s.jsxs)("div", {
                              className:
                                "flex flex-col items-center text-center gap-2",
                              children: [
                                (0, s.jsx)("div", {
                                  className: "p-2 rounded-full bg-[#F7F8FA]",
                                  children: (0, s.jsx)(e.icon, {
                                    className: "w-5 h-5 text-[#2C3340]",
                                  }),
                                }),
                                (0, s.jsxs)("div", {
                                  children: [
                                    (0, s.jsx)("h5", {
                                      className: "font-semibold text-sm mb-1",
                                      children: e.title,
                                    }),
                                    (0, s.jsx)("p", {
                                      className:
                                        "text-xs text-muted-foreground",
                                      children: e.description,
                                    }),
                                  ],
                                }),
                              ],
                            }),
                          }),
                        },
                        e.title,
                      ),
                    ),
                  }),
                ],
              }),
              (0, s.jsxs)(A.$, {
                onClick: n,
                className:
                  "w-full rounded-full bg-[#5D5DE9] hover:bg-[#2C3340] text-white mt-4",
                size: "lg",
                children: [
                  (0, s.jsx)(m.A, { className: "w-4 h-4 mr-2" }),
                  "Erste Stelle ver\xf6ffentlichen",
                ],
              }),
            ],
          }),
        });
      }
      var eg = r(28131);
      function ej(e) {
        let { children: t } = e;
        return (0, s.jsx)(T.r, { children: (0, s.jsx)(ev, { children: t }) });
      }
      function ev(e) {
        var t, r, d;
        let { children: m } = e,
          {
            currentEmployer: x,
            employerId: h,
            isLoading: u,
            error: p,
          } = (0, T.B)(),
          [f, b] = (0, i.useState)(null),
          [g, j] = (0, i.useState)(null),
          [v, y] = (0, i.useState)(!1),
          [N, k] = (0, i.useState)(!1),
          [_, z] = (0, i.useState)(!1),
          [C, P] = (0, i.useState)(!1),
          [I, L] = (0, i.useState)(!0),
          [V, B] = (0, i.useState)(!1),
          [O, W] = (0, i.useState)(!1),
          [D, R] = (0, i.useState)(null),
          [M, q] = (0, i.useState)(null),
          [K, X] = (0, i.useState)(!0),
          ee = (0, n.useRouter)(),
          er = (0, n.usePathname)(),
          es = (0, a.createClientComponentClient)(),
          ei = (e) =>
            ({
              contact_person_name: J.A,
              contact_phone: Q.A,
              address: Y.A,
              industry_sector: E.A,
              company_size: E.A,
              company_website: Z.A,
              company_logo: E.A,
              company_description: E.A,
              legal_registration: E.A,
            })[e] || E.A;
        (0, i.useEffect)(() => {
          let e = () => {
              y(window.innerWidth < 768);
            },
            t = () => {
              P(window.scrollY > 10);
            };
          return (
            (async () => {
              if (u) return;
              if (p) {
                (console.error("Employer context error:", p),
                  await es.auth.signOut(),
                  ee.push("/arbeitgeber/auth/anmelden"));
                return;
              }
              if (!x || !h) {
                L(!1);
                return;
              }
              let {
                data: { session: e },
                error: t,
              } = await es.auth.getSession();
              if (t || !e) {
                ee.push("/arbeitgeber/auth/anmelden");
                return;
              }
              if (!(await (0, G.Ii)(e.user.id, ["employer", "admin"]))) {
                if (await (0, G.hf)(e.user.id, "student")) {
                  ee.push("/dashboard");
                  return;
                }
                (await es.auth.signOut(),
                  ee.push("/arbeitgeber/auth/anmelden"));
                return;
              }
              b(e.user);
              let { data: r, error: s } = await es
                .from("employer_profiles")
                .select("*")
                .eq("id", h)
                .is("deleted_at", null)
                .single();
              if (s || !r) {
                (console.error("Error fetching employer profile:", s), L(!1));
                return;
              }
              if ((j(r), !r.onboarding_completed)) {
                try {
                  let e = await fetch(
                    "/api/arbeitgeber/profile/completeness?employerId=".concat(
                      h,
                    ),
                  );
                  if (e.ok) {
                    let t = await e.json();
                    R(t.data);
                  }
                } catch (e) {
                  console.error("Error fetching completeness data:", e);
                }
                B(!0);
              }
              let i = localStorage.getItem(
                "verification_celebration_dismissed_".concat(h),
              );
              (r.is_verified &&
                !r.verification_celebration_shown &&
                r.onboarding_completed &&
                !i &&
                W(!0),
                localStorage.getItem("claimed_banner_dismissed_".concat(h)) &&
                  X(!1));
              try {
                let { data: t } = await es
                  .from("employer_claim_requests")
                  .select("id, status, created_at")
                  .eq("requester_user_id", e.user.id)
                  .eq("status", "pending")
                  .maybeSingle();
                t && q(t);
              } catch (e) {
                console.error("Error fetching claim status:", e);
              }
              L(!1);
            })(),
            e(),
            t(),
            window.addEventListener("resize", e),
            window.addEventListener("scroll", t),
            () => {
              (window.removeEventListener("resize", e),
                window.removeEventListener("scroll", t));
            }
          );
        }, [x, h, u, p, es, ee, er]);
        let ea = async () => {
            (await es.auth.signOut(), ee.push("/arbeitgeber"));
          },
          en = () => {
            k(!N);
          },
          eo = async () => {
            if ((B(!1), h && g))
              try {
                (await es
                  .from("employer_profiles")
                  .update({
                    onboarding_completed: !0,
                    onboarding_completed_at: new Date().toISOString(),
                  })
                  .eq("id", h),
                  j({ ...g, onboarding_completed: !0 }));
              } catch (e) {
                console.error("Error marking onboarding as completed:", e);
              }
          },
          ec = async () => {
            if ((W(!1), h)) {
              localStorage.setItem(
                "verification_celebration_dismissed_".concat(h),
                "true",
              );
              try {
                (await fetch(
                  "/api/arbeitgeber/verification/celebration/acknowledge",
                  {
                    method: "POST",
                    headers: { "Content-Type": "application/json" },
                    body: JSON.stringify({ employerId: h }),
                  },
                ),
                  j({
                    ...g,
                    verification_celebration_shown: !0,
                    verification_celebration_shown_at: new Date().toISOString(),
                  }));
              } catch (e) {
                console.error(
                  "Error acknowledging verification celebration:",
                  e,
                );
              }
            }
          };
        return !I && f && g
          ? (0, s.jsxs)("div", {
              className: "relative min-h-screen bg-beige overflow-x-hidden",
              children: [
                (0, s.jsx)(l.l$, { position: "top-center" }),
                (0, s.jsx)(F, {
                  companyName: g.company_name,
                  companyLogo: g.company_logo_url,
                  pathname: er || "",
                  isMobile: v,
                  isCollapsed: _,
                  isOpen: N,
                  toggleMobileMenu: en,
                  toggleCollapse: () => {
                    z(!_);
                  },
                  handleSignOut: ea,
                  newApplicationsCount: 0,
                  unreadMessagesCount: 0,
                }),
                (0, s.jsx)(o.P.main, {
                  layout: !0,
                  className: (0, c.cn)(
                    "flex-1 transition-all duration-300",
                    "min-h-screen max-w-full",
                    v ? "ml-0" : _ ? "ml-[74px]" : "ml-[250px]",
                    "animate-appear relative",
                    !v && "mt-2.5 mr-2.5",
                  ),
                  children: (0, s.jsxs)("div", {
                    className: (0, c.cn)(
                      "min-h-screen bg-white max-w-full",
                      "relative z-20",
                      !v && "rounded-tl-3xl rounded-tr-3xl",
                    ),
                    children: [
                      v &&
                        (0, s.jsx)("div", {
                          className:
                            "sticky top-0 z-30 bg-white border-b border-border/30",
                          children: (0, s.jsxs)("div", {
                            className:
                              "flex items-center justify-between h-14 px-4",
                            children: [
                              (0, s.jsx)(A.$, {
                                variant: "ghost",
                                size: "icon",
                                onClick: en,
                                className:
                                  "min-h-[44px] min-w-[44px] touch-target hover:bg-accent",
                                "aria-label": "Men\xfc \xf6ffnen",
                                children: (0, s.jsx)("svg", {
                                  className: "h-6 w-6 text-secondary",
                                  fill: "none",
                                  stroke: "currentColor",
                                  viewBox: "0 0 24 24",
                                  children: (0, s.jsx)("path", {
                                    strokeLinecap: "round",
                                    strokeLinejoin: "round",
                                    strokeWidth: 2,
                                    d: N
                                      ? "M6 18L18 6M6 6l12 12"
                                      : "M4 6h16M4 12h16M4 18h16",
                                  }),
                                }),
                              }),
                              (0, s.jsx)(S.Logo, {
                                iconSize: "md",
                                showText: !0,
                                locale: "en",
                                href: "/arbeitgeber",
                              }),
                              (0, s.jsx)(w(), {
                                href: "/arbeitgeber/einstellungen/firma",
                                className: "touch-target",
                                children: (0, s.jsx)("div", {
                                  className:
                                    "relative h-9 w-9 overflow-hidden rounded-lg ring-2 ring-primary/20 shadow-sm bg-white flex items-center justify-center",
                                  children: g.company_logo_url
                                    ? (0, s.jsx)("img", {
                                        src: g.company_logo_url,
                                        alt: "Logo",
                                        className: "w-full h-full object-cover",
                                      })
                                    : (0, s.jsx)("span", {
                                        className:
                                          "text-xs font-bold text-primary",
                                        children:
                                          (null === (r = g.company_name) ||
                                          void 0 === r
                                            ? void 0
                                            : null === (t = r.charAt(0)) ||
                                                void 0 === t
                                              ? void 0
                                              : t.toUpperCase()) || "F",
                                      }),
                                }),
                              }),
                            ],
                          }),
                        }),
                      !v &&
                        (0, s.jsx)("div", {
                          className:
                            "sticky top-0 z-30 bg-white rounded-tl-3xl rounded-tr-3xl border-b border-border/30",
                          children: (0, s.jsx)("div", {
                            className:
                              "flex items-center justify-end h-16 px-6 lg:px-8",
                            children: (0, s.jsx)(U, {
                              companyName: g.company_name,
                              companyLogo: g.company_logo_url,
                              isVerified: g.is_verified,
                              scrolled: C,
                            }),
                          }),
                        }),
                      M &&
                        "claim_pending" === g.claimed_status &&
                        (0, s.jsx)("div", {
                          className: "mx-6 mt-6 md:mx-8 md:mt-8 mb-0",
                          children: (0, s.jsx)("div", {
                            className:
                              "bg-amber-50 border border-amber-200 rounded-lg p-4",
                            children: (0, s.jsxs)("div", {
                              className: "flex items-start gap-3",
                              children: [
                                (0, s.jsx)(eg.A, {
                                  className:
                                    "h-5 w-5 text-amber-600 flex-shrink-0 mt-0.5",
                                }),
                                (0, s.jsxs)("div", {
                                  className: "flex-1",
                                  children: [
                                    (0, s.jsx)("h3", {
                                      className:
                                        "font-semibold text-amber-900 mb-1",
                                      children:
                                        "Profil\xfcbernahme wird gepr\xfcft",
                                    }),
                                    (0, s.jsx)("p", {
                                      className: "text-sm text-amber-700",
                                      children:
                                        "Ihre Anfrage zur Profil\xfcbernahme wird von unserem Team gepr\xfcft. Sie erhalten eine E-Mail, sobald die \xdcberpr\xfcfung abgeschlossen ist.",
                                    }),
                                    (0, s.jsxs)("p", {
                                      className: "text-xs text-amber-600 mt-2",
                                      children: [
                                        "Eingereicht am ",
                                        new Date(
                                          M.created_at,
                                        ).toLocaleDateString("de-DE", {
                                          day: "2-digit",
                                          month: "long",
                                          year: "numeric",
                                        }),
                                      ],
                                    }),
                                  ],
                                }),
                              ],
                            }),
                          }),
                        }),
                      "claimed" === g.claimed_status &&
                        K &&
                        (0, s.jsx)("div", {
                          className: "mx-6 mt-6 md:mx-8 md:mt-8 mb-0",
                          children: (0, s.jsx)("div", {
                            className:
                              "bg-green-50 border border-green-200 rounded-lg p-4",
                            children: (0, s.jsxs)("div", {
                              className: "flex items-start gap-3",
                              children: [
                                (0, s.jsx)(eu.A, {
                                  className:
                                    "h-5 w-5 text-green-600 flex-shrink-0 mt-0.5",
                                }),
                                (0, s.jsxs)("div", {
                                  className: "flex-1",
                                  children: [
                                    (0, s.jsx)("h3", {
                                      className:
                                        "font-semibold text-green-900 mb-1",
                                      children: "Beanspruchtes Profil",
                                    }),
                                    (0, s.jsx)("p", {
                                      className: "text-sm text-green-700",
                                      children:
                                        "Sie haben erfolgreich die \xdcbernahme dieses Unternehmensprofils abgeschlossen.",
                                    }),
                                  ],
                                }),
                                (0, s.jsx)("button", {
                                  onClick: () => {
                                    (X(!1),
                                      h &&
                                        localStorage.setItem(
                                          "claimed_banner_dismissed_".concat(h),
                                          "true",
                                        ));
                                  },
                                  className:
                                    "p-1 hover:bg-green-100 rounded-full transition-colors min-w-[32px] min-h-[32px] flex items-center justify-center",
                                  "aria-label": "Banner schlie\xdfen",
                                  children: (0, s.jsx)(et.A, {
                                    className:
                                      "h-4 w-4 text-green-700 hover:text-green-900",
                                  }),
                                }),
                              ],
                            }),
                          }),
                        }),
                      (0, s.jsx)("div", {
                        className: "p-6 md:p-8",
                        children: (0, s.jsx)("div", {
                          className: "max-w-7xl mx-auto w-full",
                          children: m,
                        }),
                      }),
                      (0, s.jsx)(H, { scrolled: C }),
                    ],
                  }),
                }),
                (0, s.jsx)(el, {}),
                V &&
                  g &&
                  D &&
                  (0, s.jsx)(ex, {
                    open: V,
                    onClose: eo,
                    companyName: g.company_name || "your company",
                    missingFields:
                      (null === (d = D.checklist) || void 0 === d
                        ? void 0
                        : d.length) || 0,
                    nextSteps: (D.checklist || [])
                      .slice(0, 5)
                      .map((e) => ({ label: e.label, icon: ei(e.id) })),
                  }),
                O &&
                  g &&
                  (0, s.jsx)(eb, {
                    isOpen: O,
                    onClose: ec,
                    companyName: g.company_name || "Ihr Unternehmen",
                    verificationTier: g.verification_tier || "verified",
                    onPublishJob: () => {
                      (W(!1),
                        ee.push("/arbeitgeber/stellenanzeigen/neue-stelle"));
                    },
                    onBrowseCandidates: () => {
                      (W(!1), ee.push("/arbeitgeber/kandidaten"));
                    },
                  }),
              ],
            })
          : (0, s.jsx)($.CQ, {});
      }
    },
  },
  (e) => {
    var t = (t) => e((e.s = t));
    (e.O(0, [46593, 36209, 84121, 72076, 77358], () => t(1124)),
      (_N_E = e.O()));
  },
]);
