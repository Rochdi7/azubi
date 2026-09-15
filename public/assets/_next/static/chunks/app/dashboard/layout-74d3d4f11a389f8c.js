(self.webpackChunk_N_E = self.webpackChunk_N_E || []).push([
  [21954],
  {
    39522: (e, s, t) => {
      Promise.resolve().then(t.bind(t, 99724));
    },
    99724: (e, s, t) => {
      "use strict";
      (t.r(s), t.d(s, { default: () => eJ }));
      var r = t(70207),
        a = t(87223),
        i = t(54604),
        l = t(18051),
        n = t(54928),
        o = t(45748),
        d = t(82110),
        c = t(53226),
        m = t(37426),
        x = t(28560),
        h = t(27239),
        u = t(15450),
        p = t(53010),
        f = t(10542),
        b = t.n(f),
        g = t(48242),
        y = t(66650),
        j = t(11348),
        v = t(54459),
        w = t(39441),
        N = t(95091);
      let k = {
        profile_reminder: "\uD83D\uDCCB",
        quick_win: "⚡",
        milestone: "\uD83C\uDF89",
        employer_view: "\uD83D\uDC40",
      };
      function A() {
        let [e, s] = (0, a.useState)([]),
          [t, l] = (0, a.useState)(0),
          [n, c] = (0, a.useState)(!1),
          [m, x] = (0, a.useState)(!1),
          [h, u] = (0, a.useState)(null),
          p = (0, i.createClientComponentClient)();
        ((0, a.useEffect)(() => {
          (async () => {
            let {
              data: { user: e },
            } = await p.auth.getUser();
            e && (u(e.id), f());
          })();
        }, []),
          (0, a.useEffect)(() => {
            n && N();
          }, [n]),
          (0, a.useEffect)(() => {
            if (!h) return;
            let e = p
              .channel("student_notifications_changes")
              .on(
                "postgres_changes",
                {
                  event: "*",
                  schema: "public",
                  table: "student_notifications",
                  filter: "student_id=eq.".concat(h),
                },
                (e) => {
                  (f(), n && N());
                },
              )
              .subscribe();
            return () => {
              p.removeChannel(e);
            };
          }, [h, n]));
        let f = async () => {
            try {
              let e = await fetch(
                "/api/student/notifications?unread_only=true",
              );
              if (e.ok) {
                let s = await e.json();
                l(s.count || 0);
              }
            } catch (e) {
              console.error("Error fetching unread count:", e);
            }
          },
          N = async () => {
            x(!0);
            try {
              let e = await fetch("/api/student/notifications?limit=5");
              if (e.ok) {
                let t = await e.json();
                s(t.notifications || []);
              }
            } catch (e) {
              console.error("Error fetching notifications:", e);
            } finally {
              x(!1);
            }
          },
          k = async (e) => {
            try {
              (
                await fetch("/api/student/notifications/read", {
                  method: "POST",
                  headers: { "Content-Type": "application/json" },
                  body: JSON.stringify({ notificationId: e }),
                })
              ).ok &&
                (s((s) =>
                  s.map((s) =>
                    s.id === e
                      ? { ...s, read_at: new Date().toISOString() }
                      : s,
                  ),
                ),
                l((e) => Math.max(0, e - 1)));
            } catch (e) {
              console.error("Error marking notification as read:", e);
            }
          },
          A = async () => {
            try {
              (
                await fetch("/api/student/notifications/read", {
                  method: "POST",
                  headers: { "Content-Type": "application/json" },
                  body: JSON.stringify({ markAll: !0 }),
                })
              ).ok &&
                (s((e) =>
                  e.map((e) => ({ ...e, read_at: new Date().toISOString() })),
                ),
                l(0));
            } catch (e) {
              console.error("Error marking all as read:", e);
            }
          },
          F = (e) => {
            (e.read_at || k(e.id), c(!1));
          };
        return (0, r.jsxs)(g.rI, {
          open: n,
          onOpenChange: c,
          children: [
            (0, r.jsx)(g.ty, {
              asChild: !0,
              children: (0, r.jsxs)("button", {
                className: (0, d.cn)(
                  "relative p-2 rounded-full transition-colors",
                  "hover:bg-[#EEF0F4] focus:outline-none focus:ring-2 focus:ring-[#5D5DE9] focus:ring-offset-2",
                  "min-w-[40px] min-h-[40px] flex items-center justify-center",
                  "border border-border",
                ),
                "aria-label": "Notifications".concat(
                  t > 0 ? " (".concat(t, " unread)") : "",
                ),
                children: [
                  (0, r.jsx)(y.A, { className: "h-5 w-5 text-[#2C3340]" }),
                  t > 0 &&
                    (0, r.jsx)(o.P.span, {
                      initial: { scale: 0 },
                      animate: { scale: 1 },
                      className:
                        "absolute -top-1 -right-1 h-5 w-5 rounded-full bg-[#5D5DE9] text-white text-xs font-bold flex items-center justify-center",
                      children: t > 9 ? "9+" : t,
                    }),
                ],
              }),
            }),
            (0, r.jsxs)(g.SQ, {
              align: "end",
              className:
                "w-80 sm:w-96 max-h-[32rem] overflow-hidden p-0 bg-[#F7F8FA] border-2 border-[#EEF0F4]",
              children: [
                (0, r.jsxs)("div", {
                  className:
                    "sticky top-0 bg-[#EEF0F4] border-b-2 border-[#2C3340]/10 px-4 py-3 flex items-center justify-between",
                  children: [
                    (0, r.jsx)("h3", {
                      className: "font-semibold text-[#2C3340]",
                      children: "Notifications",
                    }),
                    t > 0 &&
                      (0, r.jsxs)(w.$, {
                        variant: "ghost",
                        size: "sm",
                        onClick: A,
                        className:
                          "h-8 text-xs text-[#2C3340] hover:bg-[#F7F8FA] rounded-full",
                        children: [
                          (0, r.jsx)(j.A, { className: "h-3.5 w-3.5 mr-1" }),
                          "Mark all read",
                        ],
                      }),
                  ],
                }),
                (0, r.jsx)("div", {
                  className: "overflow-y-auto max-h-96",
                  children: m
                    ? (0, r.jsxs)("div", {
                        className: "p-8 text-center",
                        children: [
                          (0, r.jsx)("div", {
                            className:
                              "inline-block h-6 w-6 animate-spin rounded-full border-2 border-[#5D5DE9] border-t-transparent",
                          }),
                          (0, r.jsx)("p", {
                            className: "mt-2 text-sm text-[#2C3340]/70",
                            children: "Loading...",
                          }),
                        ],
                      })
                    : 0 === e.length
                      ? (0, r.jsxs)("div", {
                          className: "p-8 text-center",
                          children: [
                            (0, r.jsx)(y.A, {
                              className:
                                "h-12 w-12 mx-auto text-[#2C3340]/20 mb-2",
                            }),
                            (0, r.jsx)("p", {
                              className: "text-sm text-[#2C3340]/70",
                              children: "No notifications yet",
                            }),
                            (0, r.jsx)("p", {
                              className: "text-xs text-[#2C3340]/50 mt-1",
                              children:
                                "We'll notify you about profile updates",
                            }),
                          ],
                        })
                      : (0, r.jsx)(v.N, {
                          children: e.map((e) =>
                            (0, r.jsx)(
                              o.P.div,
                              {
                                initial: { opacity: 0, y: -10 },
                                animate: { opacity: 1, y: 0 },
                                exit: { opacity: 0, x: -100 },
                                transition: { duration: 0.2 },
                                children: e.link
                                  ? (0, r.jsx)(b(), {
                                      href: e.link,
                                      onClick: () => F(e),
                                      className: (0, d.cn)(
                                        "block px-4 py-3 border-b border-[#EEF0F4] transition-colors",
                                        "hover:bg-[#EEF0F4]",
                                        !e.read_at && "bg-[#5D5DE9]/5",
                                      ),
                                      children: (0, r.jsx)(C, {
                                        notification: e,
                                      }),
                                    })
                                  : (0, r.jsx)("div", {
                                      onClick: () => F(e),
                                      className: (0, d.cn)(
                                        "block px-4 py-3 border-b border-[#EEF0F4] cursor-pointer transition-colors",
                                        "hover:bg-[#EEF0F4]",
                                        !e.read_at && "bg-[#5D5DE9]/5",
                                      ),
                                      children: (0, r.jsx)(C, {
                                        notification: e,
                                      }),
                                    }),
                              },
                              e.id,
                            ),
                          ),
                        }),
                }),
                e.length > 0 &&
                  (0, r.jsx)("div", {
                    className:
                      "sticky bottom-0 bg-[#EEF0F4] border-t-2 border-[#2C3340]/10 px-4 py-2",
                    children: (0, r.jsx)("button", {
                      onClick: () => c(!1),
                      className:
                        "w-full text-center text-sm text-[#2C3340] hover:text-[#5D5DE9] transition-colors py-1 rounded-full hover:bg-[#F7F8FA]",
                      children: "Close",
                    }),
                  }),
              ],
            }),
          ],
        });
      }
      function C(e) {
        let { notification: s } = e;
        return (0, r.jsxs)("div", {
          className: "flex gap-3",
          children: [
            (0, r.jsx)("div", {
              className: "text-2xl mt-0.5 flex-shrink-0",
              children: k[s.type],
            }),
            (0, r.jsxs)("div", {
              className: "flex-1 min-w-0",
              children: [
                (0, r.jsxs)("div", {
                  className: "flex items-start justify-between gap-2",
                  children: [
                    (0, r.jsx)("p", {
                      className:
                        "font-medium text-sm text-[#2C3340] line-clamp-1",
                      children: s.title,
                    }),
                    !s.read_at &&
                      (0, r.jsx)("span", {
                        className:
                          "h-2 w-2 rounded-full bg-[#5D5DE9] flex-shrink-0 mt-1.5",
                      }),
                  ],
                }),
                (0, r.jsx)("p", {
                  className: "text-xs text-[#2C3340]/70 mt-0.5 line-clamp-2",
                  children: s.message,
                }),
                (0, r.jsx)("p", {
                  className: "text-xs text-[#2C3340]/50 mt-1",
                  children: (0, N.m)(new Date(s.created_at), { addSuffix: !0 }),
                }),
              ],
            }),
          ],
        });
      }
      var F = t(16234),
        S = t(17802),
        _ = t(36993),
        E = t(36600),
        P = t(456),
        T = t(68233);
      function z(e) {
        let {
            email: s,
            name: t,
            first_name: o,
            last_name: f,
            full_name: y,
            avatarUrl: j,
            scrolled: v,
            isMobile: w,
            isCollapsed: N,
            isOpen: k,
            toggleMobileMenu: C,
          } = e,
          [z, I] = (0, a.useState)(!1),
          [L, O] = (0, a.useState)(!1),
          R = (0, l.useRouter)(),
          K = (0, l.usePathname)(),
          W = (0, i.createClientComponentClient)(),
          { isAdmin: D, isLoading: M } = (0, F.b)(),
          U =
            (0, E.Mn)({ first_name: o, last_name: f, full_name: y }) ||
            t ||
            (null == s ? void 0 : s.split("@")[0]) ||
            "User",
          { t: H } = (0, T.ok)(),
          G = async () => {
            try {
              (I(!0),
                O(!1),
                n.oR.promise(
                  new Promise(async (e, s) => {
                    try {
                      (R.push("/"),
                        setTimeout(async () => {
                          (await W.auth.signOut(), e(!0));
                        }, 100));
                    } catch (e) {
                      s(e);
                    }
                  }),
                  {
                    loading: H("layout.header.signingOut") || "Signing out...",
                    success:
                      H("layout.header.signedOut") || "Signed out successfully",
                    error: H("common.errors.generic") || "Error signing out",
                  },
                ));
            } catch (e) {
              console.error("Error signing out:", e);
            } finally {
              I(!1);
            }
          };
        return (0, r.jsxs)("div", {
          className: "flex items-center gap-3",
          children: [
            (0, r.jsx)(P.JN, { size: "sm", variant: "ghost" }),
            (0, r.jsx)(_.V, { variant: "icon", size: "default" }),
            (0, r.jsx)("a", {
              href: "https://wa.me/971522884118?text=Hi%20Azubi!%20I'm%20interested%20in%20learning%20more%20about%20Ausbildung%20opportunities.",
              target: "_blank",
              rel: "noopener noreferrer",
              className:
                "relative rounded-full text-[#075E54] hover:bg-beige transition-all duration-200 min-w-[40px] min-h-[40px] flex items-center justify-center border border-border focus:outline-none focus-visible:ring-2 focus-visible:ring-primary/20",
              title: "WhatsApp Support",
              children: (0, r.jsx)("svg", {
                viewBox: "0 0 24 24",
                className: "h-5 w-5 fill-current",
                children: (0, r.jsx)("path", {
                  d: "M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z",
                }),
              }),
            }),
            (0, r.jsx)(A, {}),
            (0, r.jsxs)(g.rI, {
              open: L,
              onOpenChange: O,
              children: [
                (0, r.jsx)(g.ty, {
                  asChild: !0,
                  children: (0, r.jsx)("button", {
                    className:
                      "group relative min-w-[40px] min-h-[40px] rounded-full hover:bg-beige transition-all duration-200 focus:outline-none focus-visible:ring-2 focus-visible:ring-primary/20 flex items-center justify-center border border-border",
                    children: (0, r.jsxs)("div", {
                      className: "relative h-10 w-10",
                      children: [
                        (0, r.jsx)("div", {
                          className:
                            "h-full w-full overflow-hidden rounded-full ring-2 ring-primary/20 shadow-sm group-hover:shadow-md group-hover:ring-primary/40 transition-all duration-200",
                          children: (0, r.jsx)("img", {
                            src: (0, c.T)(j, t, s),
                            alt: "Profile",
                            className: "w-full h-full object-cover",
                          }),
                        }),
                        (0, r.jsx)("div", {
                          className:
                            "absolute -bottom-0.5 -right-0.5 h-2.5 w-2.5 rounded-full bg-secondary border-2 border-background animate-pulse",
                        }),
                      ],
                    }),
                  }),
                }),
                (0, r.jsxs)(g.SQ, {
                  align: "end",
                  className:
                    "w-72 p-2 mt-2 rounded-xl border-border/50 bg-background/95 backdrop-blur-xl shadow-2xl",
                  sideOffset: 8,
                  children: [
                    (0, r.jsx)("div", {
                      className: "p-4 pb-3",
                      children: (0, r.jsxs)("div", {
                        className: "flex items-start gap-3",
                        children: [
                          (0, r.jsx)("div", {
                            className: "relative h-11 w-11",
                            children: (0, r.jsx)("div", {
                              className:
                                "h-full w-full overflow-hidden rounded-lg ring-2 ring-primary/10 shadow-md",
                              children: (0, r.jsx)("img", {
                                src: (0, c.T)(j, t, s),
                                alt: "Profile",
                                className: "w-full h-full object-cover",
                              }),
                            }),
                          }),
                          (0, r.jsxs)("div", {
                            className: "flex-1 min-w-0",
                            children: [
                              (0, r.jsxs)("div", {
                                className: "flex items-center gap-2",
                                children: [
                                  (0, r.jsx)("p", {
                                    className:
                                      "font-semibold text-sm text-foreground truncate",
                                    children: U,
                                  }),
                                  D &&
                                    (0, r.jsx)(S.E, {
                                      variant: "default",
                                      className: "text-xs bg-primary",
                                      children: "Admin",
                                    }),
                                ],
                              }),
                              (0, r.jsx)("p", {
                                className:
                                  "text-xs text-muted-foreground truncate mt-0.5",
                                children: s,
                              }),
                            ],
                          }),
                        ],
                      }),
                    }),
                    (0, r.jsx)("div", {
                      className:
                        "h-px bg-gradient-to-r from-transparent via-border/50 to-transparent mb-1",
                    }),
                    (0, r.jsxs)("div", {
                      className: "p-1 space-y-1.5",
                      children: [
                        D &&
                          (0, r.jsxs)(b(), {
                            href: "/admin",
                            onClick: () => O(!1),
                            className: (0, d.cn)(
                              "group flex items-center py-2 px-4 rounded-lg text-sm font-medium transition-all relative overflow-hidden",
                              (null == K ? void 0 : K.startsWith("/admin"))
                                ? "bg-primary/10 text-primary border border-primary/20 shadow-inner"
                                : "hover:bg-accent/50 border-0",
                            ),
                            children: [
                              (0, r.jsx)(m.A, {
                                size: 18,
                                className: (0, d.cn)(
                                  "transition-all flex-shrink-0 mr-2.5",
                                  (null == K ? void 0 : K.startsWith("/admin"))
                                    ? "text-primary"
                                    : "text-secondary/70 group-hover:text-primary",
                                ),
                              }),
                              (0, r.jsx)("span", {
                                className: "text-sm",
                                children: "Admin Panel",
                              }),
                              (0, r.jsx)(S.E, {
                                variant: "default",
                                className: "ml-auto text-xs bg-primary",
                                children: "Admin",
                              }),
                            ],
                          }),
                        (0, r.jsxs)(b(), {
                          href: "/dashboard/profile",
                          onClick: () => O(!1),
                          className: (0, d.cn)(
                            "group flex items-center py-2 px-4 rounded-lg text-sm font-medium transition-all relative overflow-hidden",
                            "/dashboard/profile" === K
                              ? "bg-primary/10 text-primary border border-primary/20 shadow-inner"
                              : "hover:bg-accent/50 border-0",
                          ),
                          children: [
                            (0, r.jsx)(x.A, {
                              size: 18,
                              className: (0, d.cn)(
                                "transition-all flex-shrink-0 mr-2.5",
                                "/dashboard/profile" === K
                                  ? "text-primary"
                                  : "text-secondary/70 group-hover:text-primary",
                              ),
                            }),
                            (0, r.jsx)("span", {
                              className: "text-sm",
                              children: H("layout.header.profile"),
                            }),
                          ],
                        }),
                        (0, r.jsxs)(b(), {
                          href: "/dashboard/documents",
                          onClick: () => O(!1),
                          className: (0, d.cn)(
                            "group flex items-center py-2 px-4 rounded-lg text-sm font-medium transition-all relative overflow-hidden",
                            (
                              null == K
                                ? void 0
                                : K.startsWith("/dashboard/documents")
                            )
                              ? "bg-primary/10 text-primary border border-primary/20 shadow-inner"
                              : "hover:bg-accent/50 border-0",
                          ),
                          children: [
                            (0, r.jsx)(h.A, {
                              size: 18,
                              className: (0, d.cn)(
                                "transition-all flex-shrink-0 mr-2.5",
                                (
                                  null == K
                                    ? void 0
                                    : K.startsWith("/dashboard/documents")
                                )
                                  ? "text-primary"
                                  : "text-secondary/70 group-hover:text-primary",
                              ),
                            }),
                            (0, r.jsx)("span", {
                              className: "text-sm",
                              children:
                                H("layout.sidebar.nav.documents") ||
                                "Documents",
                            }),
                          ],
                        }),
                        (0, r.jsxs)(b(), {
                          href: "/dashboard/settings",
                          onClick: () => O(!1),
                          className: (0, d.cn)(
                            "group flex items-center py-2 px-4 rounded-lg text-sm font-medium transition-all relative overflow-hidden",
                            "/dashboard/settings" === K
                              ? "bg-primary/10 text-primary border border-primary/20 shadow-inner"
                              : "hover:bg-accent/50 border-0",
                          ),
                          children: [
                            (0, r.jsx)(u.A, {
                              size: 18,
                              className: (0, d.cn)(
                                "transition-all flex-shrink-0 mr-2.5",
                                "/dashboard/settings" === K
                                  ? "text-primary"
                                  : "text-secondary/70 group-hover:text-primary",
                              ),
                            }),
                            (0, r.jsx)("span", {
                              className: "text-sm",
                              children: H("layout.header.settings"),
                            }),
                          ],
                        }),
                      ],
                    }),
                    (0, r.jsx)("div", {
                      className:
                        "h-px bg-gradient-to-r from-transparent via-border/50 to-transparent my-1",
                    }),
                    (0, r.jsx)("div", {
                      className: "p-1",
                      children: (0, r.jsxs)("button", {
                        onClick: G,
                        disabled: z,
                        className:
                          "group w-full flex items-center py-2 px-4 rounded-lg text-sm font-medium transition-all hover:bg-rose-500/10 relative overflow-hidden disabled:opacity-50 disabled:cursor-not-allowed",
                        children: [
                          (0, r.jsx)(p.A, {
                            size: 18,
                            className:
                              "transition-all flex-shrink-0 mr-2.5 text-rose-500",
                          }),
                          (0, r.jsx)("span", {
                            className: "text-sm text-rose-500",
                            children: H("layout.header.signOut"),
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
      var I = t(88117),
        L = t(52119),
        O = t(63728),
        R = t(75980),
        K = t(81994),
        W = t(63290),
        D = t(31670),
        M = t(5101),
        U = t(86654),
        H = t(84217),
        G = t(49055),
        V = t(67739),
        Y = t(47161),
        B = t(69312),
        J = t(46845),
        $ = t(75258),
        q = t(50018),
        Z = t(7782),
        Q = t(84321),
        X = t(55960),
        ee = t(91746),
        es = t(46605),
        et = t(58212),
        er = t(95282);
      function ea(e) {
        let { isCollapsed: s, className: t } = e,
          a = (0, l.useRouter)(),
          {
            completionPercentage: i,
            stageLabel: n,
            isLoading: c,
          } = (0, es._K)(),
          { t: m } = (0, T.ok)(),
          h = () => {
            a.push("/dashboard/profile");
          };
        if (c)
          return s
            ? (0, r.jsx)("div", {
                className: (0, d.cn)(
                  "flex items-center justify-center w-full py-2",
                  t,
                ),
                children: (0, r.jsx)(et.E, {
                  className: "h-10 w-10 rounded-full",
                }),
              })
            : (0, r.jsxs)("div", {
                className: (0, d.cn)(
                  "flex items-center gap-3 w-full px-3 py-2.5 rounded-lg",
                  "bg-cream/50 border border-border/30",
                  t,
                ),
                children: [
                  (0, r.jsx)(et.E, {
                    className: "h-11 w-11 rounded-full flex-shrink-0",
                  }),
                  (0, r.jsxs)("div", {
                    className: "flex-1 min-w-0 space-y-1.5",
                    children: [
                      (0, r.jsx)(et.E, { className: "h-4 w-20" }),
                      (0, r.jsx)(et.E, { className: "h-3 w-24" }),
                    ],
                  }),
                ],
              });
        let u = i >= 70 ? "#2C3340" : "#5D5DE9",
          p = i >= 100;
        return p
          ? null
          : s
            ? (0, r.jsx)(er.Bc, {
                children: (0, r.jsxs)(er.m_, {
                  children: [
                    (0, r.jsx)(er.k$, {
                      asChild: !0,
                      children: (0, r.jsx)(o.P.button, {
                        onClick: h,
                        whileHover: { scale: 1.05 },
                        whileTap: { scale: 0.95 },
                        className: (0, d.cn)(
                          "flex items-center justify-center w-full py-2",
                          "transition-all duration-200",
                          t,
                        ),
                        children: (0, r.jsx)(ee.P, {
                          value: i,
                          size: 40,
                          strokeWidth: 3,
                          progressColor: u,
                          showLabel: !0,
                          labelClassName: "text-[10px]",
                        }),
                      }),
                    }),
                    (0, r.jsxs)(er.ZI, {
                      side: "right",
                      className: "max-w-[200px]",
                      children: [
                        (0, r.jsx)("p", {
                          className: "font-medium",
                          children: m("layout.sidebar.profile.title"),
                        }),
                        (0, r.jsx)("p", {
                          className: "text-xs text-muted-foreground",
                          children: p
                            ? m("layout.sidebar.profile.complete")
                            : m("layout.sidebar.profile.incomplete", {
                                percent: String(i),
                              }),
                        }),
                      ],
                    }),
                  ],
                }),
              })
            : (0, r.jsxs)(o.P.button, {
                onClick: h,
                whileHover: { scale: 1.02, y: -1 },
                whileTap: { scale: 0.98 },
                className: (0, d.cn)(
                  "flex items-center gap-3 w-full px-3 py-2.5 rounded-lg",
                  "bg-cream/50 hover:bg-cream border border-border/30",
                  "transition-all duration-200 text-left",
                  t,
                ),
                children: [
                  (0, r.jsx)(ee.P, {
                    value: i,
                    size: 44,
                    strokeWidth: 3.5,
                    progressColor: u,
                    showLabel: !0,
                    labelClassName: "text-[11px]",
                  }),
                  (0, r.jsxs)("div", {
                    className: "flex-1 min-w-0",
                    children: [
                      (0, r.jsxs)("div", {
                        className: "flex items-center gap-1.5",
                        children: [
                          (0, r.jsx)(x.A, {
                            size: 14,
                            className: "text-muted-foreground flex-shrink-0",
                          }),
                          (0, r.jsx)("span", {
                            className:
                              "font-medium text-sm text-foreground truncate",
                            children: m("layout.sidebar.profile.title"),
                          }),
                        ],
                      }),
                      (0, r.jsx)("p", {
                        className:
                          "text-xs text-muted-foreground truncate mt-0.5",
                        children: p
                          ? (0, r.jsx)("span", {
                              className: "text-[#2C3340] font-medium",
                              children: m("layout.sidebar.profile.complete"),
                            })
                          : m("layout.sidebar.profile.tapToComplete"),
                      }),
                    ],
                  }),
                ],
              });
      }
      let ei = [
          {
            icon: I.A,
            labelKey: "layout.sidebar.nav.browseJobs",
            path: "/dashboard/jobs",
          },
          {
            icon: L.A,
            labelKey: "layout.sidebar.nav.savedJobs",
            path: "/dashboard/jobs/saved",
          },
          {
            icon: h.A,
            labelKey: "layout.sidebar.nav.myApplications",
            path: "/dashboard/applications",
          },
          {
            icon: O.A,
            labelKey: "layout.sidebar.nav.applyForMe",
            path: "/consultation",
            isModal: !0,
            isNew: !0,
          },
        ],
        el = [
          {
            icon: R.A,
            labelKey: "layout.sidebar.nav.dashboard",
            path: "/dashboard",
          },
          {
            icon: K.A,
            labelKey: "layout.sidebar.nav.germanLearning",
            path: "/dashboard/german",
            featureKey: "germanLearning",
            threshold: es.EU.GERMAN_LEARNING,
          },
          {
            icon: W.A,
            labelKey: "layout.sidebar.nav.interviewPrep",
            path: "/dashboard/interview",
            featureKey: "interviewPractice",
            threshold: es.EU.INTERVIEW_PRACTICE,
          },
          {
            icon: D.A,
            labelKey: "layout.sidebar.nav.videoStudio",
            path: "/dashboard/video-studio",
            featureKey: "videoStudio",
            threshold: es.EU.VIDEO_STUDIO,
          },
          {
            icon: M.A,
            labelKey: "layout.sidebar.nav.culture",
            path: "/dashboard/culture",
            featureKey: "cultureHub",
            threshold: es.EU.CULTURE_HUB,
          },
        ],
        en = [
          {
            icon: U.A,
            labelKey: "layout.sidebar.nav.eligibility",
            path: "/dashboard/tools/eligibility",
          },
          {
            icon: H.A,
            labelKey: "layout.sidebar.nav.timeline",
            path: "/dashboard/tools/timeline",
          },
          {
            icon: h.A,
            labelKey: "layout.sidebar.nav.cvBuilder",
            path: "/dashboard/cv-builder",
          },
          {
            icon: G.A,
            labelKey: "layout.sidebar.nav.coverLetter",
            path: "/dashboard/tools/cover-letter",
          },
        ],
        eo = [
          {
            icon: V.A,
            labelKey: "layout.sidebar.nav.billing",
            path: "/dashboard/billing",
          },
          {
            icon: Y.A,
            labelKey: "layout.sidebar.nav.helpDocs",
            path: "/docs/students",
          },
        ];
      function ed(e) {
        var s, t;
        let {
            email: i,
            name: l,
            avatarUrl: n,
            pathname: c,
            isMobile: m,
            isCollapsed: x,
            isOpen: h,
            toggleMobileMenu: u,
            toggleCollapse: p,
            handleSignOut: f,
            matchedJobsCount: g = 0,
          } = e,
          [y, j] = (0, a.useState)(!1),
          { features: w, completionPercentage: N, isLoading: k } = (0, es._K)(),
          { t: A } = (0, T.ok)();
        return (0, r.jsxs)(r.Fragment, {
          children: [
            (0, r.jsx)(v.N, {
              children:
                m &&
                h &&
                (0, r.jsx)(o.P.div, {
                  initial: { opacity: 0 },
                  animate: { opacity: 1 },
                  exit: { opacity: 0 },
                  transition: { duration: 0.2 },
                  className:
                    "fixed inset-0 bg-background/80 backdrop-blur-sm z-40",
                  onClick: u,
                  children: (0, r.jsx)(o.P.div, {
                    initial: { x: "-100%" },
                    animate: { x: 0 },
                    exit: { x: "-100%" },
                    transition: { type: "spring", bounce: 0, duration: 0.4 },
                    className:
                      "w-3/4 max-w-xs h-full overflow-y-auto border-r-2 border-border/20",
                    onClick: (e) => e.stopPropagation(),
                    children: (0, r.jsxs)("div", {
                      className:
                        "h-full bg-background/95 shadow-xl flex flex-col",
                      children: [
                        (0, r.jsx)("div", {
                          className: "px-4 py-3 border-b border-border/30",
                          children: (0, r.jsx)(Q.Logo, {
                            iconSize: "md",
                            showText: !0,
                            className: "transition-all duration-300",
                          }),
                        }),
                        (0, r.jsx)("div", {
                          className: "p-4 border-b border-border/30",
                          children: (0, r.jsxs)("div", {
                            className: "flex items-center gap-3",
                            children: [
                              (0, r.jsx)("div", {
                                className: "relative h-12 w-12",
                                children: (0, r.jsx)("div", {
                                  className:
                                    "h-full w-full overflow-hidden rounded-full border-2 border-primary/20 shadow-sm",
                                  children: n
                                    ? (0, r.jsx)(q.default, {
                                        src: n,
                                        alt: "Profile",
                                        fill: !0,
                                        className: "object-cover",
                                      })
                                    : (0, r.jsx)("div", {
                                        className:
                                          "h-full w-full flex items-center justify-center bg-primary/10 text-primary font-semibold text-lg",
                                        children:
                                          (null == l
                                            ? void 0
                                            : null === (s = l.charAt(0)) ||
                                                void 0 === s
                                              ? void 0
                                              : s.toUpperCase()) ||
                                          (null == i
                                            ? void 0
                                            : null === (t = i.charAt(0)) ||
                                                void 0 === t
                                              ? void 0
                                              : t.toUpperCase()) ||
                                          "U",
                                      }),
                                }),
                              }),
                              (0, r.jsxs)("div", {
                                className: "flex-1 min-w-0",
                                children: [
                                  (0, r.jsx)("div", {
                                    className: "flex items-center gap-1.5",
                                    children: (0, r.jsx)("p", {
                                      className:
                                        "font-semibold text-sm text-foreground truncate",
                                      children:
                                        l ||
                                        (null == i
                                          ? void 0
                                          : i.split("@")[0]) ||
                                        "User",
                                    }),
                                  }),
                                  (0, r.jsx)("p", {
                                    className:
                                      "text-xs text-muted-foreground truncate",
                                    children: i,
                                  }),
                                ],
                              }),
                            ],
                          }),
                        }),
                        (0, r.jsx)("div", {
                          className: "px-3 py-2",
                          children: (0, r.jsx)(ea, { isCollapsed: !1 }),
                        }),
                        (0, r.jsx)("div", {
                          className: "p-2 flex-1 overflow-y-auto",
                          children: (0, r.jsxs)("nav", {
                            className: "space-y-0.5",
                            children: [
                              (0, r.jsxs)("div", {
                                className: "mb-1",
                                children: [
                                  (0, r.jsx)("p", {
                                    className:
                                      "px-2 py-0.5 text-[10px] font-semibold text-muted-foreground uppercase tracking-wider",
                                    children: A(
                                      "layout.sidebar.sections.marketplace",
                                    ),
                                  }),
                                  ei.map((e) => {
                                    let s = e.icon,
                                      t =
                                        c === e.path ||
                                        ("/dashboard/applications" === e.path &&
                                          (null == c
                                            ? void 0
                                            : c.startsWith(
                                                "/dashboard/applications",
                                              ))) ||
                                        ("/dashboard/jobs" === e.path &&
                                          (null == c
                                            ? void 0
                                            : c.startsWith("/dashboard/jobs")));
                                    return e.isModal
                                      ? (0, r.jsx)(
                                          o.P.div,
                                          {
                                            whileHover: { x: 4 },
                                            whileTap: { scale: 0.98 },
                                            className:
                                              "flex items-center w-full rounded-lg text-sm font-medium transition-all relative overflow-hidden hover:bg-muted border-0",
                                            children: (0, r.jsxs)("button", {
                                              className:
                                                "flex items-center w-full px-3 py-1.5 text-left",
                                              onClick: () => {
                                                (j(!0), u());
                                              },
                                              children: [
                                                (0, r.jsx)(s, {
                                                  size: 16,
                                                  className:
                                                    "mr-2 text-[#5D5DE9]",
                                                }),
                                                A(e.labelKey),
                                                e.isNew &&
                                                  (0, r.jsx)("span", {
                                                    className:
                                                      "ml-2 inline-flex items-center px-1.5 py-0.5 text-[10px] font-semibold text-secondary-foreground bg-secondary rounded-full shadow-sm min-h-[16px] h-4",
                                                    children: A(
                                                      "layout.sidebar.badges.new",
                                                    ),
                                                  }),
                                              ],
                                            }),
                                          },
                                          e.path,
                                        )
                                      : (0, r.jsx)(
                                          o.P.div,
                                          {
                                            whileHover: { x: 4 },
                                            whileTap: { scale: 0.98 },
                                            className: (0, d.cn)(
                                              "flex items-center w-full rounded-lg text-sm font-medium transition-all relative overflow-hidden",
                                              t
                                                ? "bg-primary/10 text-primary border border-primary/20 shadow-inner"
                                                : "hover:bg-muted border-0",
                                            ),
                                            children: (0, r.jsxs)(b(), {
                                              href: e.path,
                                              className:
                                                "flex items-center w-full px-3 py-1.5",
                                              onClick: u,
                                              children: [
                                                (0, r.jsx)(s, {
                                                  size: 16,
                                                  className: (0, d.cn)(
                                                    "mr-2",
                                                    t
                                                      ? "text-primary"
                                                      : "text-secondary/70",
                                                  ),
                                                }),
                                                A(e.labelKey),
                                                e.isNew &&
                                                  (0, r.jsx)("span", {
                                                    className:
                                                      "ml-2 inline-flex items-center px-1.5 py-0.5 text-[10px] font-semibold text-secondary-foreground bg-secondary rounded-full shadow-sm min-h-[16px] h-4",
                                                    children: A(
                                                      "layout.sidebar.badges.new",
                                                    ),
                                                  }),
                                              ],
                                            }),
                                          },
                                          e.path,
                                        );
                                  }),
                                ],
                              }),
                              (0, r.jsx)(Z.Separator, {
                                className: "my-2 bg-border/50",
                              }),
                              (0, r.jsxs)("div", {
                                className: "mb-1",
                                children: [
                                  (0, r.jsx)("p", {
                                    className:
                                      "px-2 py-0.5 text-[10px] font-semibold text-muted-foreground uppercase tracking-wider",
                                    children: A(
                                      "layout.sidebar.sections.preparation",
                                    ),
                                  }),
                                  el.map((e) => {
                                    let s = e.icon,
                                      t = c === e.path,
                                      a = e.featureKey && !w[e.featureKey],
                                      i = e.threshold ? e.threshold - N : 0,
                                      l = (0, r.jsx)(
                                        o.P.div,
                                        {
                                          whileHover: { x: 4 * !a },
                                          whileTap: { scale: a ? 1 : 0.98 },
                                          className: (0, d.cn)(
                                            "flex items-center w-full rounded-lg text-sm font-medium transition-all relative overflow-hidden",
                                            t
                                              ? "bg-primary/10 text-primary border border-primary/20 shadow-inner"
                                              : "hover:bg-muted border-0",
                                            a &&
                                              "opacity-70 cursor-not-allowed",
                                          ),
                                          children: (0, r.jsxs)(b(), {
                                            href: a ? "#" : e.path,
                                            className:
                                              "flex items-center w-full px-3 py-1.5",
                                            onClick: (e) => {
                                              a ? e.preventDefault() : u();
                                            },
                                            children: [
                                              (0, r.jsx)(s, {
                                                size: 16,
                                                className: (0, d.cn)(
                                                  "mr-2",
                                                  t
                                                    ? "text-primary"
                                                    : "text-secondary/70",
                                                ),
                                              }),
                                              A(e.labelKey),
                                              a &&
                                                (0, r.jsx)(B.A, {
                                                  size: 12,
                                                  className:
                                                    "ml-auto text-muted-foreground",
                                                }),
                                              !a &&
                                                e.isNew &&
                                                (0, r.jsx)("span", {
                                                  className:
                                                    "ml-2 inline-flex items-center px-1.5 py-0.5 text-[10px] font-semibold text-secondary-foreground bg-secondary rounded-full shadow-sm min-h-[16px] h-4",
                                                  children: A(
                                                    "layout.sidebar.badges.new",
                                                  ),
                                                }),
                                            ],
                                          }),
                                        },
                                        e.path,
                                      );
                                    return a
                                      ? (0, r.jsx)(
                                          er.Bc,
                                          {
                                            children: (0, r.jsxs)(er.m_, {
                                              children: [
                                                (0, r.jsx)(er.k$, {
                                                  asChild: !0,
                                                  children: (0, r.jsx)("div", {
                                                    children: l,
                                                  }),
                                                }),
                                                (0, r.jsxs)(er.ZI, {
                                                  children: [
                                                    (0, r.jsx)("p", {
                                                      className: "text-sm",
                                                      children: A(
                                                        "common.labels.completeProfile",
                                                        { percent: String(i) },
                                                      ),
                                                    }),
                                                    (0, r.jsx)("p", {
                                                      className:
                                                        "text-xs text-muted-foreground mt-1",
                                                      children: A(
                                                        "common.labels.updateProfileToUnlock",
                                                        {
                                                          feature: A(
                                                            e.labelKey,
                                                          ),
                                                        },
                                                      ),
                                                    }),
                                                  ],
                                                }),
                                              ],
                                            }),
                                          },
                                          e.path,
                                        )
                                      : l;
                                  }),
                                ],
                              }),
                              (0, r.jsx)(Z.Separator, {
                                className: "my-2 bg-border/50",
                              }),
                              (0, r.jsxs)("div", {
                                className: "mb-1",
                                children: [
                                  (0, r.jsx)("p", {
                                    className:
                                      "px-2 py-0.5 text-[10px] font-semibold text-muted-foreground uppercase tracking-wider",
                                    children: A(
                                      "layout.sidebar.sections.tools",
                                    ),
                                  }),
                                  en.map((e) => {
                                    let s = e.icon,
                                      t =
                                        "/dashboard/cv-builder" === e.path
                                          ? null == c
                                            ? void 0
                                            : c.startsWith(
                                                "/dashboard/cv-builder",
                                              )
                                          : c === e.path;
                                    return (0, r.jsx)(
                                      o.P.div,
                                      {
                                        whileHover: { x: 4 },
                                        whileTap: { scale: 0.98 },
                                        className: (0, d.cn)(
                                          "flex items-center w-full rounded-lg text-sm font-medium transition-all relative overflow-hidden",
                                          t
                                            ? "bg-primary/10 text-primary border border-primary/20 shadow-inner"
                                            : "hover:bg-muted border-0",
                                        ),
                                        children: (0, r.jsxs)(b(), {
                                          href: e.path,
                                          className:
                                            "flex items-center w-full px-3 py-1.5",
                                          onClick: u,
                                          ...(e.isExternal && {
                                            target: "_blank",
                                            rel: "noopener noreferrer",
                                          }),
                                          children: [
                                            (0, r.jsx)(s, {
                                              size: 16,
                                              className: (0, d.cn)(
                                                "mr-2",
                                                t
                                                  ? "text-primary"
                                                  : "text-secondary/70",
                                              ),
                                            }),
                                            A(e.labelKey),
                                            e.isNew &&
                                              (0, r.jsx)("span", {
                                                className:
                                                  "ml-2 inline-flex items-center px-1.5 py-0.5 text-[10px] font-semibold text-secondary-foreground bg-secondary rounded-full shadow-sm min-h-[16px] h-4",
                                                children: A(
                                                  "layout.sidebar.badges.new",
                                                ),
                                              }),
                                          ],
                                        }),
                                      },
                                      e.path,
                                    );
                                  }),
                                ],
                              }),
                            ],
                          }),
                        }),
                        (0, r.jsx)(Z.Separator, {
                          className: "my-2 bg-border/50",
                        }),
                        (0, r.jsx)("div", {
                          className: "px-2 py-2",
                          children: (0, r.jsxs)("nav", {
                            className: "space-y-0.5",
                            children: [
                              (0, r.jsxs)(o.P.div, {
                                whileHover: { x: 4 },
                                whileTap: { scale: 0.98 },
                                className:
                                  "relative overflow-hidden rounded-lg",
                                children: [
                                  (0, r.jsx)("div", {
                                    className:
                                      "absolute inset-0 z-10 pointer-events-none animate-shimmer",
                                    children: (0, r.jsx)("div", {
                                      className:
                                        "h-full w-16 bg-gradient-to-r from-transparent via-[#5D5DE9]/30 to-transparent skew-x-[-20deg]",
                                    }),
                                  }),
                                  (0, r.jsxs)("a", {
                                    href: "https://wa.me/971522884118?text=Hi%20Azubi!%20I'm%20interested%20in%20learning%20more%20about%20Ausbildung%20opportunities.",
                                    target: "_blank",
                                    rel: "noopener noreferrer",
                                    className:
                                      "flex items-center w-full px-3 py-1.5 text-left text-white bg-[#075E54] hover:bg-[#054d44] rounded-lg transition-colors",
                                    onClick: u,
                                    children: [
                                      (0, r.jsx)("svg", {
                                        viewBox: "0 0 24 24",
                                        width: "16",
                                        height: "16",
                                        className:
                                          "mr-2 flex-shrink-0 fill-white",
                                        children: (0, r.jsx)("path", {
                                          d: "M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z",
                                        }),
                                      }),
                                      A("layout.sidebar.nav.whatsapp"),
                                    ],
                                  }),
                                ],
                              }),
                              eo.map((e) => {
                                let s = e.icon,
                                  t = c === e.path;
                                return (0, r.jsx)(
                                  o.P.div,
                                  {
                                    whileHover: { x: 4 },
                                    whileTap: { scale: 0.98 },
                                    className: (0, d.cn)(
                                      "flex items-center w-full rounded-lg text-sm font-medium transition-all relative overflow-hidden",
                                      t
                                        ? "bg-primary/10 text-primary border border-primary/20 shadow-inner"
                                        : "hover:bg-muted border-0",
                                    ),
                                    children: (0, r.jsxs)(b(), {
                                      href: e.path,
                                      className:
                                        "flex items-center w-full px-3 py-1.5",
                                      onClick: u,
                                      children: [
                                        (0, r.jsx)(s, {
                                          size: 16,
                                          className: (0, d.cn)(
                                            "mr-2",
                                            t
                                              ? "text-primary"
                                              : "text-secondary/70",
                                          ),
                                        }),
                                        A(e.labelKey),
                                        e.isNew &&
                                          (0, r.jsx)("span", {
                                            className:
                                              "ml-2 inline-flex items-center px-1.5 py-0.5 text-[10px] font-semibold text-secondary-foreground bg-secondary rounded-full shadow-sm min-h-[16px] h-4",
                                            children: A(
                                              "layout.sidebar.badges.new",
                                            ),
                                          }),
                                      ],
                                    }),
                                  },
                                  e.path,
                                );
                              }),
                            ],
                          }),
                        }),
                      ],
                    }),
                  }),
                }),
            }),
            (0, r.jsxs)("aside", {
              className: (0, d.cn)(
                "hidden md:flex flex-col fixed top-0 left-0 bottom-0 z-10",
                "bg-beige",
                "transition-all duration-300",
                x ? "w-[64px]" : "w-[240px]",
              ),
              children: [
                (0, r.jsxs)("div", {
                  className: "flex-shrink-0",
                  children: [
                    (0, r.jsx)("div", {
                      className: (0, d.cn)(
                        "flex items-center h-[75px]",
                        x ? "px-0 justify-center" : "px-4 justify-between",
                      ),
                      children: x
                        ? (0, r.jsx)("button", {
                            onClick: p,
                            className:
                              "group relative p-2 transition-all duration-200",
                            title: "Expand sidebar",
                            children: (0, r.jsxs)("div", {
                              className: "relative w-11 h-11",
                              children: [
                                (0, r.jsx)("div", {
                                  className:
                                    "absolute inset-0 transition-opacity duration-200 group-hover:opacity-0",
                                  children: (0, r.jsx)(Q.Logo, {
                                    iconSize: "sm",
                                    showText: !1,
                                    className: "transition-all duration-300",
                                  }),
                                }),
                                (0, r.jsx)("div", {
                                  className:
                                    "absolute inset-0 flex items-center justify-center opacity-0 transition-opacity duration-200 group-hover:opacity-100",
                                  children: (0, r.jsx)(J.A, {
                                    size: 24,
                                    className: "text-muted-foreground",
                                  }),
                                }),
                              ],
                            }),
                          })
                        : (0, r.jsxs)(r.Fragment, {
                            children: [
                              (0, r.jsx)(Q.Logo, {
                                iconSize: "sm",
                                showText: !0,
                                className: "transition-all duration-300",
                              }),
                              (0, r.jsx)("button", {
                                onClick: p,
                                className: "transition-colors",
                                title: "Collapse sidebar",
                                children: (0, r.jsx)($.A, {
                                  size: 24,
                                  className:
                                    "text-muted-foreground hover:text-foreground",
                                }),
                              }),
                            ],
                          }),
                    }),
                    (0, r.jsx)("div", {
                      className: "mx-3 mb-3",
                      children: (0, r.jsx)("div", {
                        className: "h-px bg-secondary/30",
                      }),
                    }),
                    (0, r.jsx)("div", {
                      className: (0, d.cn)("px-3 pb-3", x && "px-2"),
                      children: (0, r.jsx)(ea, { isCollapsed: x }),
                    }),
                  ],
                }),
                (0, r.jsxs)("div", {
                  className: "flex-1 flex flex-col min-h-0",
                  children: [
                    (0, r.jsxs)("nav", {
                      className: "flex-1 py-2 space-y-0.5 px-3 overflow-y-auto",
                      children: [
                        (0, r.jsxs)("div", {
                          className: "mb-1",
                          children: [
                            !x &&
                              (0, r.jsx)("p", {
                                className:
                                  "px-2 py-0.5 text-[10px] font-semibold text-muted-foreground uppercase tracking-wider mb-0.5",
                                children: A(
                                  "layout.sidebar.sections.marketplace",
                                ),
                              }),
                            ei.map((e) => {
                              let s = e.icon,
                                t =
                                  c === e.path ||
                                  ("/dashboard/applications" === e.path &&
                                    (null == c
                                      ? void 0
                                      : c.startsWith(
                                          "/dashboard/applications",
                                        ))) ||
                                  ("/dashboard/jobs" === e.path &&
                                    (null == c
                                      ? void 0
                                      : c.startsWith("/dashboard/jobs")));
                              return e.isModal
                                ? (0, r.jsxs)(
                                    "button",
                                    {
                                      onClick: () => j(!0),
                                      className: (0, d.cn)(
                                        "flex items-center py-1.5 rounded-lg text-sm font-medium transition-all w-full",
                                        "group hover:bg-accent/50 relative overflow-hidden border-0",
                                        x ? "justify-center px-0" : "px-3",
                                      ),
                                      title: x ? A(e.labelKey) : void 0,
                                      children: [
                                        (0, r.jsx)(s, {
                                          size: 16,
                                          className: (0, d.cn)(
                                            "transition-all flex-shrink-0 text-[#5D5DE9]",
                                            !x && "mr-2",
                                          ),
                                        }),
                                        !x &&
                                          (0, r.jsxs)(r.Fragment, {
                                            children: [
                                              (0, r.jsx)("span", {
                                                className: "text-sm",
                                                children: A(e.labelKey),
                                              }),
                                              e.isNew &&
                                                (0, r.jsx)("span", {
                                                  className:
                                                    "ml-2 inline-flex items-center px-1.5 py-0.5 text-[10px] font-semibold text-secondary-foreground bg-secondary rounded-full shadow-sm min-h-[16px] h-4",
                                                  children: A(
                                                    "layout.sidebar.badges.new",
                                                  ),
                                                }),
                                            ],
                                          }),
                                      ],
                                    },
                                    e.path,
                                  )
                                : (0, r.jsxs)(
                                    b(),
                                    {
                                      href: e.path,
                                      className: (0, d.cn)(
                                        "flex items-center py-1.5 rounded-lg text-sm font-medium transition-all",
                                        "group hover:bg-accent/50 relative overflow-hidden",
                                        t &&
                                          "bg-primary/10 text-primary border border-primary/20 shadow-inner",
                                        !t && "border-0",
                                        x ? "justify-center px-0" : "px-3",
                                      ),
                                      title: x ? A(e.labelKey) : void 0,
                                      children: [
                                        (0, r.jsx)(s, {
                                          size: 16,
                                          className: (0, d.cn)(
                                            "transition-all flex-shrink-0",
                                            !x && "mr-2",
                                            t
                                              ? "text-primary"
                                              : "text-secondary/70 group-hover:text-primary",
                                          ),
                                        }),
                                        !x &&
                                          (0, r.jsxs)(r.Fragment, {
                                            children: [
                                              (0, r.jsx)("span", {
                                                className: "text-sm",
                                                children: A(e.labelKey),
                                              }),
                                              e.isNew &&
                                                (0, r.jsx)("span", {
                                                  className:
                                                    "ml-2 inline-flex items-center px-1.5 py-0.5 text-[10px] font-semibold text-secondary-foreground bg-secondary rounded-full shadow-sm min-h-[16px] h-4",
                                                  children: A(
                                                    "layout.sidebar.badges.new",
                                                  ),
                                                }),
                                            ],
                                          }),
                                      ],
                                    },
                                    e.path,
                                  );
                            }),
                          ],
                        }),
                        (0, r.jsx)(Z.Separator, {
                          className: "my-2 bg-border/50",
                        }),
                        (0, r.jsxs)("div", {
                          className: "mb-1",
                          children: [
                            !x &&
                              (0, r.jsx)("p", {
                                className:
                                  "px-2 py-0.5 text-[10px] font-semibold text-muted-foreground uppercase tracking-wider mb-0.5",
                                children: A(
                                  "layout.sidebar.sections.preparation",
                                ),
                              }),
                            el.map((e) => {
                              let s = e.icon,
                                t = c === e.path,
                                a = e.featureKey && !w[e.featureKey],
                                i = e.threshold ? e.threshold - N : 0,
                                l = (0, r.jsxs)(
                                  b(),
                                  {
                                    href: a ? "#" : e.path,
                                    className: (0, d.cn)(
                                      "flex items-center py-1.5 rounded-lg text-sm font-medium transition-all",
                                      "group relative overflow-hidden",
                                      t &&
                                        "bg-primary/10 text-primary border border-primary/20 shadow-inner",
                                      !t && "border-0",
                                      x ? "justify-center px-0" : "px-3",
                                      a
                                        ? "opacity-70 cursor-not-allowed"
                                        : "hover:bg-accent/50",
                                    ),
                                    title: x ? A(e.labelKey) : void 0,
                                    onClick: (e) => {
                                      a && e.preventDefault();
                                    },
                                    children: [
                                      (0, r.jsx)(s, {
                                        size: 16,
                                        className: (0, d.cn)(
                                          "transition-all flex-shrink-0",
                                          !x && "mr-2",
                                          t
                                            ? "text-primary"
                                            : "text-secondary/70 group-hover:text-primary",
                                        ),
                                      }),
                                      !x &&
                                        (0, r.jsxs)(r.Fragment, {
                                          children: [
                                            (0, r.jsx)("span", {
                                              className: "text-sm",
                                              children: A(e.labelKey),
                                            }),
                                            a &&
                                              (0, r.jsx)(B.A, {
                                                size: 12,
                                                className:
                                                  "ml-auto text-muted-foreground",
                                              }),
                                            !a &&
                                              e.isNew &&
                                              (0, r.jsx)("span", {
                                                className:
                                                  "ml-2 inline-flex items-center px-1.5 py-0.5 text-[10px] font-semibold text-secondary-foreground bg-secondary rounded-full shadow-sm min-h-[16px] h-4",
                                                children: A(
                                                  "layout.sidebar.badges.new",
                                                ),
                                              }),
                                          ],
                                        }),
                                    ],
                                  },
                                  e.path,
                                );
                              return a
                                ? (0, r.jsx)(
                                    er.Bc,
                                    {
                                      children: (0, r.jsxs)(er.m_, {
                                        children: [
                                          (0, r.jsx)(er.k$, {
                                            asChild: !0,
                                            children: (0, r.jsx)("div", {
                                              children: l,
                                            }),
                                          }),
                                          (0, r.jsxs)(er.ZI, {
                                            children: [
                                              (0, r.jsx)("p", {
                                                className: "text-sm",
                                                children: A(
                                                  "common.labels.completeProfile",
                                                  { percent: String(i) },
                                                ),
                                              }),
                                              (0, r.jsx)("p", {
                                                className:
                                                  "text-xs text-muted-foreground mt-1",
                                                children: A(
                                                  "common.labels.updateProfileToUnlock",
                                                  { feature: A(e.labelKey) },
                                                ),
                                              }),
                                            ],
                                          }),
                                        ],
                                      }),
                                    },
                                    e.path,
                                  )
                                : l;
                            }),
                          ],
                        }),
                        (0, r.jsx)(Z.Separator, {
                          className: "my-2 bg-border/50",
                        }),
                        (0, r.jsxs)("div", {
                          className: "mb-1",
                          children: [
                            !x &&
                              (0, r.jsx)("p", {
                                className:
                                  "px-2 py-0.5 text-[10px] font-semibold text-muted-foreground uppercase tracking-wider mb-0.5",
                                children: A("layout.sidebar.sections.tools"),
                              }),
                            en.map((e) => {
                              let s = e.icon,
                                t =
                                  "/dashboard/cv-builder" === e.path
                                    ? null == c
                                      ? void 0
                                      : c.startsWith("/dashboard/cv-builder")
                                    : c === e.path;
                              return (0, r.jsxs)(
                                b(),
                                {
                                  href: e.path,
                                  className: (0, d.cn)(
                                    "flex items-center py-1.5 rounded-lg text-sm font-medium transition-all",
                                    "group hover:bg-accent/50 relative overflow-hidden",
                                    t &&
                                      "bg-primary/10 text-primary border border-primary/20 shadow-inner",
                                    !t && "border-0",
                                    x ? "justify-center px-0" : "px-3",
                                  ),
                                  title: x ? A(e.labelKey) : void 0,
                                  ...(e.isExternal && {
                                    target: "_blank",
                                    rel: "noopener noreferrer",
                                  }),
                                  children: [
                                    (0, r.jsx)(s, {
                                      size: 16,
                                      className: (0, d.cn)(
                                        "transition-all flex-shrink-0",
                                        !x && "mr-2",
                                        t
                                          ? "text-primary"
                                          : "text-secondary/70 group-hover:text-primary",
                                      ),
                                    }),
                                    !x &&
                                      (0, r.jsxs)(r.Fragment, {
                                        children: [
                                          (0, r.jsx)("span", {
                                            className: "text-sm",
                                            children: A(e.labelKey),
                                          }),
                                          e.isNew &&
                                            (0, r.jsx)("span", {
                                              className:
                                                "ml-2 inline-flex items-center px-1.5 py-0.5 text-[10px] font-semibold text-secondary-foreground bg-secondary rounded-full shadow-sm min-h-[16px] h-4",
                                              children: A(
                                                "layout.sidebar.badges.new",
                                              ),
                                            }),
                                        ],
                                      }),
                                  ],
                                },
                                e.path,
                              );
                            }),
                          ],
                        }),
                      ],
                    }),
                    (0, r.jsxs)("div", {
                      className: "bg-beige pt-2",
                      children: [
                        (0, r.jsx)("div", {
                          className: "mx-3 mb-2",
                          children: (0, r.jsx)("div", {
                            className: "h-px bg-secondary/30",
                          }),
                        }),
                        (0, r.jsxs)("div", {
                          className: "px-3 pb-2 space-y-0.5",
                          children: [
                            (0, r.jsxs)("div", {
                              className: "relative overflow-hidden rounded-lg",
                              children: [
                                (0, r.jsx)("div", {
                                  className:
                                    "absolute inset-0 z-10 pointer-events-none animate-shimmer",
                                  children: (0, r.jsx)("div", {
                                    className:
                                      "h-full w-16 bg-gradient-to-r from-transparent via-[#5D5DE9]/30 to-transparent skew-x-[-20deg]",
                                  }),
                                }),
                                (0, r.jsxs)("a", {
                                  href: "https://wa.me/971522884118?text=Hi%20Azubi!%20I'm%20interested%20in%20learning%20more%20about%20Ausbildung%20opportunities.",
                                  target: "_blank",
                                  rel: "noopener noreferrer",
                                  className: (0, d.cn)(
                                    "flex items-center py-1.5 rounded-lg text-sm font-medium transition-all w-full",
                                    "text-white bg-[#075E54] hover:bg-[#054d44]",
                                    x ? "justify-center px-2" : "px-3",
                                  ),
                                  title: x
                                    ? A("layout.sidebar.nav.whatsapp")
                                    : void 0,
                                  children: [
                                    (0, r.jsx)("svg", {
                                      viewBox: "0 0 24 24",
                                      width: "16",
                                      height: "16",
                                      className: (0, d.cn)(
                                        "transition-all flex-shrink-0 fill-white",
                                        !x && "mr-2",
                                      ),
                                      children: (0, r.jsx)("path", {
                                        d: "M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z",
                                      }),
                                    }),
                                    !x &&
                                      (0, r.jsx)("span", {
                                        className: "text-sm",
                                        children: A(
                                          "layout.sidebar.nav.whatsapp",
                                        ),
                                      }),
                                  ],
                                }),
                              ],
                            }),
                            eo.map((e) => {
                              let s = e.icon,
                                t = c === e.path;
                              return (0, r.jsxs)(
                                b(),
                                {
                                  href: e.path,
                                  className: (0, d.cn)(
                                    "flex items-center py-1.5 rounded-lg text-sm font-medium transition-all",
                                    "text-muted-foreground hover:text-foreground group relative overflow-hidden",
                                    t &&
                                      "bg-primary/10 text-primary border border-primary/20 shadow-inner",
                                    !t && "hover:bg-accent/50 border-0",
                                    x ? "justify-center px-0" : "px-3",
                                  ),
                                  title: x ? A(e.labelKey) : void 0,
                                  children: [
                                    (0, r.jsx)(s, {
                                      size: 16,
                                      className: (0, d.cn)(
                                        "transition-all flex-shrink-0",
                                        !x && "mr-2",
                                        t
                                          ? "text-primary"
                                          : "text-secondary/70 group-hover:text-primary",
                                      ),
                                    }),
                                    !x &&
                                      (0, r.jsx)("span", {
                                        className: "text-sm",
                                        children: A(e.labelKey),
                                      }),
                                    !x &&
                                      e.isNew &&
                                      (0, r.jsx)("span", {
                                        className:
                                          "ml-2 inline-flex items-center px-1.5 py-0.5 text-[10px] font-semibold text-secondary-foreground bg-secondary rounded-full shadow-sm min-h-[16px] h-4",
                                        children: A(
                                          "layout.sidebar.badges.new",
                                        ),
                                      }),
                                  ],
                                },
                                e.path,
                              );
                            }),
                          ],
                        }),
                      ],
                    }),
                  ],
                }),
              ],
            }),
            (0, r.jsx)(X.f, { open: y, onOpenChange: j }),
          ],
        });
      }
      var ec = t(36725),
        em = t(24125),
        ex = t(36521),
        eh = t(63016),
        eu = t(1701),
        ep = t(30478),
        ef = t(39342),
        eb = t(39945),
        eg = t(79024),
        ey = t(51105),
        ej = t(51613),
        ev = t(26304),
        ew = t(61280),
        eN = t(7535),
        ek = t(82164);
      let eA = "get-verified-reminder-dismissed",
        eC = "get-verified-dismissal-count";
      function eF(e) {
        let { open: s, onClose: t, onGetVerified: i } = e,
          [l, n] = (0, a.useState)(!0);
        return ((0, a.useEffect)(() => {
          parseInt(localStorage.getItem(eC) || "0") >= 3 && n(!1);
        }, []),
        s)
          ? (0, r.jsx)(v.N, {
              children:
                s &&
                (0, r.jsxs)("div", {
                  className:
                    "fixed inset-0 z-[100] flex items-center justify-center p-4",
                  children: [
                    (0, r.jsx)(o.P.div, {
                      initial: { opacity: 0 },
                      animate: { opacity: 1 },
                      exit: { opacity: 0 },
                      onClick: t,
                      className:
                        "absolute inset-0 bg-black/60 backdrop-blur-sm",
                    }),
                    (0, r.jsxs)(o.P.div, {
                      initial: { opacity: 0, scale: 0.9, y: 20 },
                      animate: { opacity: 1, scale: 1, y: 0 },
                      exit: { opacity: 0, scale: 0.9, y: 20 },
                      transition: { type: "spring", duration: 0.5 },
                      className:
                        "relative bg-background border shadow-2xl rounded-2xl w-full max-w-md max-h-[85vh] overflow-y-auto",
                      children: [
                        (0, r.jsx)("button", {
                          onClick: t,
                          className:
                            "absolute top-4 right-4 p-2 hover:bg-muted rounded-full transition-colors z-10",
                          "aria-label": "Close",
                          children: (0, r.jsx)(eb.A, { className: "w-5 h-5" }),
                        }),
                        (0, r.jsxs)("div", {
                          className: "p-6 pt-8",
                          children: [
                            (0, r.jsx)("div", {
                              className: "flex justify-center mb-4",
                              children: (0, r.jsx)("div", {
                                className:
                                  "w-16 h-16 bg-primary/10 rounded-full flex items-center justify-center",
                                children: (0, r.jsx)(m.A, {
                                  className: "w-8 h-8 text-primary",
                                }),
                              }),
                            }),
                            (0, r.jsx)("h2", {
                              className: "text-2xl font-bold text-center mb-2",
                              children: "Profile Complete! \uD83C\uDF89",
                            }),
                            (0, r.jsx)("p", {
                              className:
                                "text-center text-muted-foreground mb-6",
                              children:
                                "Take the next step and get your profile verified to unlock premium benefits",
                            }),
                            (0, r.jsxs)("div", {
                              className: "space-y-4 mb-6",
                              children: [
                                (0, r.jsxs)("div", {
                                  className: "flex items-start gap-3",
                                  children: [
                                    (0, r.jsx)("div", {
                                      className:
                                        "w-10 h-10 bg-primary/10 rounded-lg flex items-center justify-center flex-shrink-0",
                                      children: (0, r.jsx)(ew.A, {
                                        className: "w-5 h-5 text-primary",
                                      }),
                                    }),
                                    (0, r.jsxs)("div", {
                                      children: [
                                        (0, r.jsx)("h3", {
                                          className:
                                            "font-semibold text-sm mb-1",
                                          children: "10x More Profile Views",
                                        }),
                                        (0, r.jsx)("p", {
                                          className:
                                            "text-xs text-muted-foreground",
                                          children:
                                            "Verified profiles get 10 times more views from employers",
                                        }),
                                      ],
                                    }),
                                  ],
                                }),
                                (0, r.jsxs)("div", {
                                  className: "flex items-start gap-3",
                                  children: [
                                    (0, r.jsx)("div", {
                                      className:
                                        "w-10 h-10 bg-primary/10 rounded-lg flex items-center justify-center flex-shrink-0",
                                      children: (0, r.jsx)(eN.A, {
                                        className: "w-5 h-5 text-primary",
                                      }),
                                    }),
                                    (0, r.jsxs)("div", {
                                      children: [
                                        (0, r.jsx)("h3", {
                                          className:
                                            "font-semibold text-sm mb-1",
                                          children:
                                            "Priority in Search Results",
                                        }),
                                        (0, r.jsx)("p", {
                                          className:
                                            "text-xs text-muted-foreground",
                                          children:
                                            "Appear at the top when employers search for candidates",
                                        }),
                                      ],
                                    }),
                                  ],
                                }),
                                (0, r.jsxs)("div", {
                                  className: "flex items-start gap-3",
                                  children: [
                                    (0, r.jsx)("div", {
                                      className:
                                        "w-10 h-10 bg-primary/10 rounded-lg flex items-center justify-center flex-shrink-0",
                                      children: (0, r.jsx)(ek.A, {
                                        className: "w-5 h-5 text-primary",
                                      }),
                                    }),
                                    (0, r.jsxs)("div", {
                                      children: [
                                        (0, r.jsx)("h3", {
                                          className:
                                            "font-semibold text-sm mb-1",
                                          children: "Trusted Badge on Profile",
                                        }),
                                        (0, r.jsx)("p", {
                                          className:
                                            "text-xs text-muted-foreground",
                                          children:
                                            "Stand out with an orange verified badge visible to all employers",
                                        }),
                                      ],
                                    }),
                                  ],
                                }),
                                (0, r.jsxs)("div", {
                                  className: "flex items-start gap-3",
                                  children: [
                                    (0, r.jsx)("div", {
                                      className:
                                        "w-10 h-10 bg-primary/10 rounded-lg flex items-center justify-center flex-shrink-0",
                                      children: (0, r.jsx)(eg.A, {
                                        className: "w-5 h-5 text-primary",
                                      }),
                                    }),
                                    (0, r.jsxs)("div", {
                                      children: [
                                        (0, r.jsx)("h3", {
                                          className:
                                            "font-semibold text-sm mb-1",
                                          children: "Higher Success Rate",
                                        }),
                                        (0, r.jsx)("p", {
                                          className:
                                            "text-xs text-muted-foreground",
                                          children:
                                            "Verified profiles have 45% higher application success rate",
                                        }),
                                      ],
                                    }),
                                  ],
                                }),
                              ],
                            }),
                            (0, r.jsxs)("div", {
                              className: "space-y-3",
                              children: [
                                (0, r.jsx)("button", {
                                  onClick: () => {
                                    (localStorage.removeItem(eA),
                                      localStorage.removeItem(eC),
                                      i());
                                  },
                                  className:
                                    "w-full bg-primary text-primary-foreground hover:bg-primary/90 py-3 px-4 rounded-lg font-semibold transition-colors text-sm",
                                  children: "Upload Documents Now",
                                }),
                                l &&
                                  (0, r.jsx)("button", {
                                    onClick: () => {
                                      let e = Date.now() + 864e5;
                                      localStorage.setItem(eA, e.toString());
                                      let s = parseInt(
                                        localStorage.getItem(eC) || "0",
                                      );
                                      (localStorage.setItem(
                                        eC,
                                        (s + 1).toString(),
                                      ),
                                        t());
                                    },
                                    className:
                                      "w-full bg-muted hover:bg-muted/80 py-2.5 px-4 rounded-lg font-medium transition-colors text-sm text-muted-foreground",
                                    children: "Remind Me Later",
                                  }),
                              ],
                            }),
                            (0, r.jsx)("p", {
                              className:
                                "text-xs text-center text-muted-foreground mt-4",
                              children:
                                "Verification takes less than 5 minutes. Upload your documents to get started.",
                            }),
                          ],
                        }),
                      ],
                    }),
                  ],
                }),
            })
          : null;
      }
      var eS = t(25385),
        e_ = t(58233),
        eE = t(28131),
        eP = t(61889),
        eT = t(80187);
      function ez(e) {
        let {
            isOpen: s,
            onClose: t,
            profile: i,
            onShareProfile: l,
            onGetVerified: n,
            onRemindLater: d,
          } = e,
          { width: c, height: x } = (function () {
            let [e, s] = (0, a.useState)({
              width: window.innerWidth,
              height: window.innerHeight,
            });
            return (
              (0, a.useEffect)(() => {
                function e() {
                  s({ width: window.innerWidth, height: window.innerHeight });
                }
                return (
                  window.addEventListener("resize", e),
                  e(),
                  () => window.removeEventListener("resize", e)
                );
              }, []),
              e
            );
          })(),
          [h, u] = (0, a.useState)(!0);
        return (
          (0, a.useState)(() => {
            if (s && h) {
              let e = setTimeout(() => u(!1), 5e3);
              return () => clearTimeout(e);
            }
          }),
          (0, r.jsx)(eP.lG, {
            open: s,
            onOpenChange: t,
            children: (0, r.jsxs)(eP.Cf, {
              className: "sm:max-w-[600px] max-h-[90vh] overflow-y-auto",
              children: [
                h &&
                  (0, r.jsx)(em.A, {
                    width: c,
                    height: x,
                    recycle: !1,
                    numberOfPieces: 200,
                    gravity: 0.15,
                  }),
                (0, r.jsxs)(eP.c7, {
                  children: [
                    (0, r.jsxs)(eP.L3, {
                      className:
                        "text-center text-2xl md:text-3xl font-bold flex items-center justify-center gap-2",
                      children: [
                        (0, r.jsx)(eS.A, {
                          className:
                            "w-6 h-6 md:w-8 h-8 text-primary animate-pulse",
                        }),
                        "Your Profile is Complete!",
                        (0, r.jsx)(eS.A, {
                          className:
                            "w-6 h-6 md:w-8 h-8 text-primary animate-pulse",
                        }),
                      ],
                    }),
                    (0, r.jsxs)(eP.rr, {
                      className: "text-center text-base md:text-lg pt-2",
                      children: [
                        "Congratulations, ",
                        i.full_name.split(" ")[0],
                        "! You're ready to be discovered by German employers.",
                      ],
                    }),
                  ],
                }),
                (0, r.jsx)(o.P.div, {
                  initial: { scale: 0 },
                  animate: { scale: 1 },
                  transition: { type: "spring", duration: 0.5 },
                  className: "flex justify-center py-4",
                  children: (0, r.jsxs)("div", {
                    className: "relative",
                    children: [
                      (0, r.jsx)("div", {
                        className:
                          "w-24 h-24 md:w-32 md:h-32 rounded-full bg-[#5D5DE9] flex items-center justify-center",
                        children: (0, r.jsx)(e_.A, {
                          className: "w-12 h-12 md:w-16 h-16 text-white",
                        }),
                      }),
                      (0, r.jsx)(o.P.div, {
                        animate: { scale: [1, 1.2, 1], rotate: [0, 360] },
                        transition: {
                          duration: 2,
                          repeat: 1 / 0,
                          ease: "linear",
                        },
                        className: "absolute -top-2 -right-2",
                        children: (0, r.jsx)(eS.A, {
                          className: "w-8 h-8 text-[#5D5DE9]",
                        }),
                      }),
                    ],
                  }),
                }),
                (0, r.jsxs)("div", {
                  className: "space-y-4 pt-4",
                  children: [
                    (0, r.jsx)(eT.Zp, {
                      className:
                        "border-2 border-[#5D5DE9] bg-[#EEF0F4] hover:bg-[#F7F8FA] transition-colors cursor-pointer",
                      children: (0, r.jsx)(eT.Wu, {
                        className: "p-6",
                        children: (0, r.jsxs)("div", {
                          className: "flex items-start gap-4",
                          children: [
                            (0, r.jsx)("div", {
                              className: "p-3 rounded-full bg-[#F7F8FA]",
                              children: (0, r.jsx)(e_.A, {
                                className: "w-6 h-6 text-[#5D5DE9]",
                              }),
                            }),
                            (0, r.jsxs)("div", {
                              className: "flex-1",
                              children: [
                                (0, r.jsx)("h3", {
                                  className: "font-semibold text-lg mb-1",
                                  children: "Share Your Profile",
                                }),
                                (0, r.jsx)("p", {
                                  className:
                                    "text-sm text-muted-foreground mb-4",
                                  children:
                                    "Stand out on social media and get discovered by German employers. Share on WhatsApp, LinkedIn, and more!",
                                }),
                                (0, r.jsxs)(w.$, {
                                  onClick: l,
                                  className:
                                    "w-full rounded-full bg-[#5D5DE9] hover:bg-[#2C3340] text-white",
                                  size: "lg",
                                  children: [
                                    (0, r.jsx)(e_.A, {
                                      className: "w-4 h-4 mr-2",
                                    }),
                                    "public" === i.profile_visibility
                                      ? "Share Now"
                                      : "Make Public & Share",
                                  ],
                                }),
                              ],
                            }),
                          ],
                        }),
                      }),
                    }),
                    (0, r.jsx)(eT.Zp, {
                      className:
                        "border border-border hover:border-[#2C3340] hover:bg-[#EEF0F4] transition-colors cursor-pointer",
                      children: (0, r.jsx)(eT.Wu, {
                        className: "p-6",
                        children: (0, r.jsxs)("div", {
                          className: "flex items-start gap-4",
                          children: [
                            (0, r.jsx)("div", {
                              className: "p-3 rounded-full bg-[#F7F8FA]",
                              children: (0, r.jsx)(m.A, {
                                className: "w-6 h-6 text-[#2C3340]",
                              }),
                            }),
                            (0, r.jsxs)("div", {
                              className: "flex-1",
                              children: [
                                (0, r.jsx)("h3", {
                                  className: "font-semibold text-lg mb-1",
                                  children: "Get Verified (Optional)",
                                }),
                                (0, r.jsx)("p", {
                                  className:
                                    "text-sm text-muted-foreground mb-4",
                                  children:
                                    "Boost your credibility with a verified badge. Get 10x more profile views and stand out to employers.",
                                }),
                                (0, r.jsxs)(w.$, {
                                  onClick: n,
                                  variant: "outline",
                                  className:
                                    "w-full rounded-full border-[#2C3340]",
                                  size: "lg",
                                  children: [
                                    (0, r.jsx)(m.A, {
                                      className: "w-4 h-4 mr-2",
                                    }),
                                    "Get Verified",
                                  ],
                                }),
                              ],
                            }),
                          ],
                        }),
                      }),
                    }),
                    i.username &&
                      (0, r.jsxs)("div", {
                        className:
                          "flex items-center gap-2 p-4 bg-[#F7F8FA] rounded-lg border border-border",
                        children: [
                          (0, r.jsx)(ew.A, {
                            className:
                              "w-4 h-4 text-muted-foreground flex-shrink-0",
                          }),
                          (0, r.jsxs)("div", {
                            className: "flex-1 min-w-0",
                            children: [
                              (0, r.jsx)("p", {
                                className: "text-xs text-muted-foreground mb-1",
                                children: "Your Profile URL",
                              }),
                              (0, r.jsxs)("p", {
                                className: "text-sm font-mono truncate",
                                children: [
                                  "azubi.ma/student/",
                                  i.username,
                                ],
                              }),
                            ],
                          }),
                        ],
                      }),
                  ],
                }),
                (0, r.jsxs)("div", {
                  className: "flex flex-col sm:flex-row gap-2 pt-4 border-t",
                  children: [
                    (0, r.jsxs)(w.$, {
                      onClick: d,
                      variant: "ghost",
                      className: "flex-1 rounded-full",
                      children: [
                        (0, r.jsx)(eE.A, { className: "w-4 h-4 mr-2" }),
                        "Remind Me Later",
                      ],
                    }),
                    (0, r.jsx)(w.$, {
                      onClick: t,
                      variant: "ghost",
                      size: "icon",
                      className: "sm:w-auto rounded-full",
                      children: (0, r.jsx)(eb.A, { className: "w-4 h-4" }),
                    }),
                  ],
                }),
                (0, r.jsx)("p", {
                  className: "text-xs text-center text-muted-foreground pt-2",
                  children:
                    "You can dismiss this 3 times. After that, access sharing from your profile settings.",
                }),
              ],
            }),
          })
        );
      }
      var eI = t(1904),
        eL = t(95992),
        eO = t(5313);
      function eR(e) {
        let { isOpen: s, onClose: t, profile: i, onConfirm: l } = e,
          [o, c] = (0, a.useState)(!1),
          m = "azubi.ma/student/".concat(i.username),
          x = [
            {
              field: "basic_info",
              label: "Basic Info (Name, Avatar, Location)",
              visible: !0,
              icon: ew.A,
            },
            {
              field: "headline",
              label: "Professional Headline",
              visible: !1 !== i.show_headline,
              icon: ew.A,
            },
            {
              field: "bio",
              label: "Bio/About Me",
              visible: !1 !== i.show_bio,
              icon: ew.A,
            },
            {
              field: "education",
              label: "Education History",
              visible: !1 !== i.show_education,
              icon: ew.A,
            },
            {
              field: "experience",
              label: "Work Experience",
              visible: !1 !== i.show_experience,
              icon: ew.A,
            },
            {
              field: "languages",
              label: "Languages & Proficiency",
              visible: !1 !== i.show_languages,
              icon: ew.A,
            },
            {
              field: "skills",
              label: "Skills & Competencies",
              visible: !1 !== i.show_skills,
              icon: ew.A,
            },
            {
              field: "visa_status",
              label: "Visa & Work Authorization",
              visible: !1 !== i.show_visa_status,
              icon: ew.A,
            },
            {
              field: "availability",
              label: "Availability Date",
              visible: !1 !== i.show_availability_date,
              icon: ew.A,
            },
            {
              field: "cities",
              label: "Preferred Cities",
              visible: !1 !== i.show_preferred_cities,
              icon: ew.A,
            },
          ],
          h = x.filter((e) => e.visible).length,
          u = x.length - h,
          p = async () => {
            c(!0);
            try {
              (await l(), n.oR.success("Profile is now public!"), t());
            } catch (e) {
              (console.error("Error making profile public:", e),
                n.oR.error("Failed to update profile visibility"));
            } finally {
              c(!1);
            }
          };
        return (0, r.jsx)(eP.lG, {
          open: s,
          onOpenChange: t,
          children: (0, r.jsxs)(eP.Cf, {
            className: "sm:max-w-[600px] max-h-[90vh] overflow-y-auto",
            children: [
              (0, r.jsxs)(eP.c7, {
                children: [
                  (0, r.jsxs)(eP.L3, {
                    className: "text-2xl font-bold flex items-center gap-2",
                    children: [
                      (0, r.jsx)(e_.A, { className: "w-6 h-6 text-primary" }),
                      "Make Your Profile Public?",
                    ],
                  }),
                  (0, r.jsx)(eP.rr, {
                    className: "text-base pt-2",
                    children:
                      "Share your profile with German employers and get discovered for Ausbildung opportunities.",
                  }),
                ],
              }),
              (0, r.jsxs)("div", {
                className: "space-y-6 py-4",
                children: [
                  (0, r.jsxs)("div", {
                    className:
                      "p-4 bg-[#EEF0F4] border-2 border-[#5D5DE9] rounded-xl",
                    children: [
                      (0, r.jsx)("p", {
                        className: "text-sm text-muted-foreground mb-2",
                        children: "Your public profile will be available at:",
                      }),
                      (0, r.jsxs)("div", {
                        className:
                          "flex items-center gap-2 p-3 bg-[#F7F8FA] rounded-lg border",
                        children: [
                          (0, r.jsx)(ew.A, {
                            className: "w-4 h-4 text-[#5D5DE9] flex-shrink-0",
                          }),
                          (0, r.jsx)("code", {
                            className: "text-sm font-mono flex-1 truncate",
                            children: m,
                          }),
                        ],
                      }),
                    ],
                  }),
                  (0, r.jsxs)("div", {
                    children: [
                      (0, r.jsxs)("h4", {
                        className: "font-semibold mb-3 flex items-center gap-2",
                        children: [
                          (0, r.jsx)(ey.A, {
                            className: "w-5 h-5 text-[#2C3340]",
                          }),
                          "What happens when you make your profile public:",
                        ],
                      }),
                      (0, r.jsxs)("ul", {
                        className: "space-y-2 text-sm text-muted-foreground",
                        children: [
                          (0, r.jsxs)("li", {
                            className: "flex items-start gap-2",
                            children: [
                              (0, r.jsx)(ey.A, {
                                className:
                                  "w-4 h-4 text-[#2C3340] flex-shrink-0 mt-0.5",
                              }),
                              (0, r.jsx)("span", {
                                children:
                                  "Employers can discover you through search and recommendations",
                              }),
                            ],
                          }),
                          (0, r.jsxs)("li", {
                            className: "flex items-start gap-2",
                            children: [
                              (0, r.jsx)(ey.A, {
                                className:
                                  "w-4 h-4 text-[#2C3340] flex-shrink-0 mt-0.5",
                              }),
                              (0, r.jsx)("span", {
                                children:
                                  "Your profile appears in employer candidate searches",
                              }),
                            ],
                          }),
                          (0, r.jsxs)("li", {
                            className: "flex items-start gap-2",
                            children: [
                              (0, r.jsx)(ey.A, {
                                className:
                                  "w-4 h-4 text-[#2C3340] flex-shrink-0 mt-0.5",
                              }),
                              (0, r.jsx)("span", {
                                children:
                                  "You can share your profile on social media (WhatsApp, LinkedIn, etc.)",
                              }),
                            ],
                          }),
                          (0, r.jsxs)("li", {
                            className: "flex items-start gap-2",
                            children: [
                              (0, r.jsx)(ey.A, {
                                className:
                                  "w-4 h-4 text-[#2C3340] flex-shrink-0 mt-0.5",
                              }),
                              (0, r.jsx)("span", {
                                children:
                                  "Increase your chances of receiving job opportunities",
                              }),
                            ],
                          }),
                        ],
                      }),
                    ],
                  }),
                  (0, r.jsxs)("div", {
                    children: [
                      (0, r.jsx)("h4", {
                        className: "font-semibold mb-3",
                        children: "Current Visibility Settings:",
                      }),
                      (0, r.jsx)("div", {
                        className:
                          "grid grid-cols-1 gap-2 max-h-[200px] overflow-y-auto p-3 bg-[#F7F8FA] rounded-lg border",
                        children: x.map((e) =>
                          (0, r.jsxs)(
                            "div",
                            {
                              className: (0, d.cn)(
                                "flex items-center justify-between p-2 rounded-md",
                                e.visible ? "bg-[#EEF0F4]" : "bg-white",
                              ),
                              children: [
                                (0, r.jsxs)("span", {
                                  className: "text-sm flex items-center gap-2",
                                  children: [
                                    e.visible
                                      ? (0, r.jsx)(ew.A, {
                                          className: "w-4 h-4 text-[#2C3340]",
                                        })
                                      : (0, r.jsx)(eI.A, {
                                          className:
                                            "w-4 h-4 text-muted-foreground",
                                        }),
                                    e.label,
                                  ],
                                }),
                                (0, r.jsx)(S.E, {
                                  variant: e.visible ? "default" : "secondary",
                                  className: (0, d.cn)(
                                    "text-xs",
                                    e.visible
                                      ? "bg-[#2C3340]"
                                      : "bg-muted-foreground",
                                  ),
                                  children: e.visible ? "Visible" : "Hidden",
                                }),
                              ],
                            },
                            e.field,
                          ),
                        ),
                      }),
                      (0, r.jsxs)("div", {
                        className:
                          "flex items-center gap-2 mt-3 text-sm text-muted-foreground",
                        children: [
                          (0, r.jsx)(eL.A, { className: "w-4 h-4" }),
                          (0, r.jsxs)("span", {
                            children: [
                              h,
                              " visible, ",
                              u,
                              " hidden. You can change these in settings anytime.",
                            ],
                          }),
                        ],
                      }),
                    ],
                  }),
                  (0, r.jsxs)(eO.Fc, {
                    children: [
                      (0, r.jsx)(B.A, { className: "w-4 h-4" }),
                      (0, r.jsxs)(eO.TN, {
                        className: "text-sm",
                        children: [
                          (0, r.jsx)("strong", {
                            children: "Privacy Control:",
                          }),
                          " You can toggle individual sections on/off anytime in your",
                          " ",
                          (0, r.jsx)("a", {
                            href: "/dashboard/settings",
                            className:
                              "underline text-[#5D5DE9] hover:text-[#2C3340]",
                            children: "privacy settings",
                          }),
                          ". Making your profile private again is just one click away.",
                        ],
                      }),
                    ],
                  }),
                ],
              }),
              (0, r.jsxs)(eP.Es, {
                className: "flex-col sm:flex-row gap-2",
                children: [
                  (0, r.jsx)(w.$, {
                    onClick: t,
                    variant: "ghost",
                    className: "rounded-full w-full sm:w-auto",
                    disabled: o,
                    children: "Cancel",
                  }),
                  (0, r.jsx)(w.$, {
                    onClick: p,
                    className:
                      "rounded-full w-full sm:w-auto bg-[#5D5DE9] hover:bg-[#2C3340] text-white",
                    disabled: o,
                    children: o
                      ? (0, r.jsxs)(r.Fragment, {
                          children: [
                            (0, r.jsx)("span", {
                              className: "animate-spin mr-2",
                              children: "⏳",
                            }),
                            "Making Public...",
                          ],
                        })
                      : (0, r.jsxs)(r.Fragment, {
                          children: [
                            (0, r.jsx)(e_.A, { className: "w-4 h-4 mr-2" }),
                            "Yes, Make Public & Share",
                          ],
                        }),
                  }),
                ],
              }),
              (0, r.jsx)("p", {
                className: "text-xs text-center text-muted-foreground pt-2",
                children:
                  "By making your profile public, you consent to your profile information being visible to employers and other users.",
              }),
            ],
          }),
        });
      }
      var eK = t(61457),
        eW = t(36754),
        eD = t(26698),
        eM = t(34423);
      let eU = {
        avatar: x.A,
        phone: ex.A,
        dob: H.A,
        nationality: eh.A,
        location: eu.A,
        preferred_cities: eu.A,
        visa_status: h.A,
        availability: H.A,
        headline: I.A,
        bio: h.A,
        sectors: I.A,
        education: ep.A,
        german_level: K.A,
        cv: ef.A,
      };
      function eH() {
        var e;
        let s = (0, i.createClientComponentClient)(),
          t = (0, l.useRouter)(),
          [c, m] = (0, a.useState)(void 0),
          [h, u] = (0, a.useState)(!1),
          [p, f] = (0, a.useState)(!1),
          [b, g] = (0, a.useState)(!1),
          [y, j] = (0, a.useState)(!1),
          [w, N] = (0, a.useState)(!1),
          [k, A] = (0, a.useState)(!1),
          [C, F] = (0, a.useState)(!1),
          S = (0, a.useRef)(null),
          _ = (0, a.useRef)(!0),
          [E, P] = (0, a.useState)({ width: 0, height: 0 }),
          [T, z] = (0, a.useState)(!1),
          [I, L] = (0, a.useState)(!1),
          [O, R] = (0, a.useState)(!1),
          { data: K, isLoading: W } = (0, eD.iW)(),
          { data: D, isLoading: M } = (0, eD.D9)();
        ((0, eM._k)(c),
          (0, a.useEffect)(() => {
            (async () => {
              let {
                data: { user: e },
              } = await s.auth.getUser();
              m(null == e ? void 0 : e.id);
            })();
          }, [s]));
        let U = W || M,
          H = K || null,
          G = (null == H ? void 0 : H.percentage) || 0,
          V = "incomplete";
        ((V =
          G < 40
            ? "incomplete"
            : G < 60
              ? "basic"
              : G < 80
                ? "strong"
                : "excellent"),
          (0, a.useEffect)(() => {
            if (
              ("true" ===
                localStorage.getItem("profileCompletionConfettiShown") && R(!0),
              P({ width: window.innerWidth, height: window.innerHeight }),
              localStorage.getItem("profileWidgetTooltipSeen"))
            )
              L(!0);
            else {
              L(!1);
              let e = setTimeout(() => {
                (z(!0),
                  setTimeout(() => {
                    (z(!1),
                      localStorage.setItem("profileWidgetTooltipSeen", "true"),
                      L(!0));
                  }, 8e3));
              }, 2e3);
              return () => clearTimeout(e);
            }
            let e = () => {
              P({ width: window.innerWidth, height: window.innerHeight });
            };
            return (
              window.addEventListener("resize", e),
              () => {
                window.removeEventListener("resize", e);
              }
            );
          }, []),
          (0, a.useEffect)(() => {
            let e = () => {
              u(!0);
            };
            return (
              window.addEventListener("expandProfileWidget", e),
              () => {
                window.removeEventListener("expandProfileWidget", e);
              }
            );
          }, []),
          (0, a.useEffect)(() => {
            if (!H || U) return;
            let e = S.current;
            if (!_.current && null !== e) {
              let s = (0, es.Ki)(e, G);
              if (s) {
                let e = "milestone-".concat(s, "-celebrated");
                if ("true" !== localStorage.getItem(e) && !b) {
                  (g(!0), localStorage.setItem(e, "true"));
                  let t = (0, es.oM)(s);
                  (n.oR.success(t.title, {
                    description: t.description,
                    duration: 5e3,
                  }),
                    setTimeout(() => {
                      if ((g(!1), 100 === s && D)) {
                        let e = Y(D);
                        "SHARE" === e ? N(!0) : "VERIFY" === e && j(!0);
                      }
                    }, 5e3),
                    100 === s && setTimeout(() => f(!0), 7e3));
                }
              }
            }
            ((S.current = G), (_.current = !1));
          }, [H, U, D, b]));
        let Y = (e) => {
            let s = e.share_prompt_dismissals || 0,
              t = e.share_prompt_last_shown_at,
              r = t ? (Date.now() - new Date(t).getTime()) / 36e5 : 1 / 0;
            return s < 3 && "private" === e.profile_visibility && r >= 24
              ? "SHARE"
              : e.identity_verified
                ? "NONE"
                : "VERIFY";
          },
          B = (e) => {
            e.completed ||
              (u(!1),
              setTimeout(() => {
                "modal" === e.action
                  ? t.push("/dashboard/profile?open=".concat(e.actionTarget))
                  : "navigate" === e.action && t.push(e.actionTarget);
              }, 300));
          },
          J = async () => {
            try {
              let e = await fetch("/api/student/profile/visibility", {
                  method: "PATCH",
                  headers: { "Content-Type": "application/json" },
                  body: JSON.stringify({ visibility: "public" }),
                }),
                s = await e.json();
              if (s.success)
                (setProfileData((e) => ({
                  ...e,
                  profile_visibility: "public",
                })),
                  A(!1),
                  F(!0),
                  n.oR.success("Profile is now public!"));
              else throw Error(s.error || "Failed to update visibility");
            } catch (e) {
              throw (
                console.error("Error making profile public:", e),
                n.oR.error("Failed to make profile public"),
                e
              );
            }
          },
          $ = async () => {
            try {
              (
                await fetch("/api/student/profile/share-prompt/dismiss", {
                  method: "POST",
                  headers: { "Content-Type": "application/json" },
                  body: JSON.stringify({ action: "remind_later" }),
                })
              ).ok && (N(!1), n.oR.success("We'll remind you in 24 hours"));
            } catch (e) {
              (console.error("Error dismissing share prompt:", e), N(!1));
            }
          },
          q = async (e) => {
            try {
              await fetch("/api/student/profile/share", {
                method: "POST",
                headers: { "Content-Type": "application/json" },
                body: JSON.stringify({ platform: e }),
              });
            } catch (e) {
              console.error("Error tracking share:", e);
            }
          };
        if (U || !H || 100 === G || p) return null;
        let Z = 2 * Math.PI * 17,
          Q = Z - (G / 100) * Z;
        return (0, r.jsxs)(r.Fragment, {
          children: [
            b &&
              (0, r.jsx)(em.A, {
                width: E.width,
                height: E.height,
                recycle: !1,
                numberOfPieces: 500,
                gravity: 0.3,
              }),
            (0, r.jsx)(eF, {
              open: y,
              onClose: () => j(!1),
              onGetVerified: () => {
                (j(!1), t.push("/dashboard/profile?open=verification"));
              },
            }),
            D &&
              (0, r.jsx)(ez, {
                isOpen: w,
                onClose: () => N(!1),
                profile: {
                  username: D.username || "",
                  full_name: D.full_name || "User",
                  headline: D.headline,
                  profile_visibility: D.profile_visibility || "private",
                },
                onShareProfile: () => {
                  D &&
                    ("public" === D.profile_visibility
                      ? (N(!1), F(!0))
                      : (N(!1), A(!0)));
                },
                onGetVerified: () => {
                  (N(!1), j(!0));
                },
                onRemindLater: $,
              }),
            D &&
              (0, r.jsx)(eR, {
                isOpen: k,
                onClose: () => A(!1),
                profile: {
                  username: D.username || "",
                  full_name: D.full_name || "User",
                  profile_visibility: D.profile_visibility || "private",
                  show_experience: D.show_experience,
                  show_skills: D.show_skills,
                  show_education: D.show_education,
                  show_languages: D.show_languages,
                  show_visa_status: D.show_visa_status,
                  show_availability_date: D.show_availability_date,
                  show_preferred_cities: D.show_preferred_cities,
                  show_bio: D.show_bio,
                  show_headline: D.show_headline,
                },
                onConfirm: J,
              }),
            D &&
              D.username &&
              (0, r.jsx)(eK.A, {
                isOpen: C,
                onClose: () => F(!1),
                profileUrl: (0, eW.YH)(D.username),
                fullName: D.full_name || "User",
                headline: D.headline,
                onShare: q,
              }),
            (0, r.jsx)(v.N, {
              children: (0, r.jsxs)(o.P.div, {
                initial: { opacity: 0, y: 100 },
                animate: { opacity: 1, y: 0 },
                exit: { opacity: 0, y: 100 },
                className:
                  "fixed bottom-4 right-4 md:bottom-6 md:right-6 z-50 flex flex-col items-end gap-2",
                children: [
                  (0, r.jsx)(v.N, {
                    children:
                      h &&
                      (0, r.jsxs)(o.P.div, {
                        initial: { opacity: 0, scale: 0.95, y: 20 },
                        animate: { opacity: 1, scale: 1, y: 0 },
                        exit: { opacity: 0, scale: 0.95, y: 20 },
                        transition: { duration: 0.2 },
                        className:
                          "bg-background border shadow-2xl rounded-2xl w-[calc(100vw-2rem)] max-w-[360px] max-h-[70vh] md:max-h-[580px] flex flex-col overflow-hidden",
                        children: [
                          (0, r.jsxs)("div", {
                            className:
                              "flex-shrink-0 p-3 md:p-4 border-b bg-muted/30",
                            children: [
                              (0, r.jsxs)("div", {
                                className:
                                  "flex items-center justify-between gap-2",
                                children: [
                                  (0, r.jsxs)("div", {
                                    className: "flex-1 min-w-0",
                                    children: [
                                      (0, r.jsx)("h3", {
                                        className:
                                          "font-semibold text-sm md:text-base",
                                        children: "Profile Completion",
                                      }),
                                      (0, r.jsx)("p", {
                                        className:
                                          "text-xs text-muted-foreground mt-0.5 line-clamp-1",
                                        children:
                                          "Complete these items to be visible to employers",
                                      }),
                                    ],
                                  }),
                                  (0, r.jsx)("button", {
                                    onClick: () => u(!1),
                                    className:
                                      "p-2 hover:bg-muted rounded-full transition-colors min-w-[44px] min-h-[44px] flex items-center justify-center",
                                    "aria-label": "Close",
                                    children: (0, r.jsx)(eb.A, {
                                      className: "w-4 h-4",
                                    }),
                                  }),
                                ],
                              }),
                              (0, r.jsxs)("div", {
                                className: "mt-3",
                                children: [
                                  (0, r.jsxs)("div", {
                                    className:
                                      "flex items-center justify-between text-xs mb-1.5",
                                    children: [
                                      (0, r.jsxs)("span", {
                                        className: "font-medium",
                                        children: [G, "% Complete"],
                                      }),
                                      (0, r.jsxs)("span", {
                                        className: "text-muted-foreground",
                                        children: [
                                          H.checklist.filter((e) => e.completed)
                                            .length,
                                          "/",
                                          H.checklist.length,
                                          " items",
                                        ],
                                      }),
                                    ],
                                  }),
                                  (0, r.jsx)("div", {
                                    className:
                                      "h-1.5 bg-muted rounded-full overflow-hidden",
                                    children: (0, r.jsx)(o.P.div, {
                                      initial: { width: 0 },
                                      animate: { width: "".concat(G, "%") },
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
                              (0, r.jsxs)("div", {
                                className: "mt-3 flex items-center gap-2",
                                children: [
                                  (0, r.jsx)(eg.A, {
                                    className:
                                      "w-3.5 h-3.5 text-muted-foreground",
                                  }),
                                  (0, r.jsx)("span", {
                                    className: "text-xs text-muted-foreground",
                                    children: "Completeness:",
                                  }),
                                  (0, r.jsx)("span", {
                                    className: (0, d.cn)(
                                      "text-xs font-semibold px-2 py-0.5 rounded-full",
                                      "excellent" === V
                                        ? "bg-green-100 text-green-700"
                                        : "strong" === V
                                          ? "bg-blue-100 text-blue-700"
                                          : "basic" === V
                                            ? "bg-orange-100 text-orange-700"
                                            : "bg-red-100 text-red-700",
                                    ),
                                    children:
                                      "excellent" === V
                                        ? "Complete"
                                        : "strong" === V
                                          ? "Almost There"
                                          : "basic" === V
                                            ? "Good Start"
                                            : "Just Started",
                                  }),
                                ],
                              }),
                            ],
                          }),
                          (0, r.jsx)("div", {
                            className:
                              "flex-1 overflow-y-auto custom-scrollbar",
                            children: (0, r.jsx)("div", {
                              className: "p-2 md:p-2",
                              children: [...H.checklist]
                                .sort((e, s) =>
                                  e.completed === s.completed
                                    ? 0
                                    : e.completed
                                      ? 1
                                      : -1,
                                )
                                .map((e, s) => {
                                  let t = eU[e.id] || x.A,
                                    a = e.completed;
                                  return (0, r.jsxs)(
                                    o.P.button,
                                    {
                                      initial: { opacity: 0, x: -20 },
                                      animate: { opacity: 1, x: 0 },
                                      transition: { delay: 0.03 * s },
                                      onClick: () => B(e),
                                      disabled: a,
                                      className: (0, d.cn)(
                                        "w-full flex items-center gap-3 p-3 rounded-lg transition-all min-h-[56px]",
                                        "hover:bg-muted/50 active:scale-[0.98]",
                                        a
                                          ? "opacity-60 cursor-default"
                                          : "cursor-pointer",
                                        !a && "hover:shadow-sm",
                                      ),
                                      children: [
                                        (0, r.jsx)("div", {
                                          className: (0, d.cn)(
                                            "flex-shrink-0 w-5 h-5 rounded-full border-2 flex items-center justify-center transition-all",
                                            a
                                              ? "bg-primary border-primary"
                                              : "border-muted-foreground/30 hover:border-primary",
                                          ),
                                          children:
                                            a &&
                                            (0, r.jsx)(ey.A, {
                                              className:
                                                "w-3 h-3 text-primary-foreground",
                                            }),
                                        }),
                                        (0, r.jsx)("div", {
                                          className: (0, d.cn)(
                                            "flex-shrink-0 w-8 h-8 rounded-lg flex items-center justify-center",
                                            a ? "bg-muted" : "bg-primary/10",
                                          ),
                                          children: (0, r.jsx)(t, {
                                            className: (0, d.cn)(
                                              "w-4 h-4",
                                              a
                                                ? "text-muted-foreground"
                                                : "text-primary",
                                            ),
                                          }),
                                        }),
                                        (0, r.jsx)("span", {
                                          className: (0, d.cn)(
                                            "flex-1 text-left text-sm",
                                            a
                                              ? "text-muted-foreground line-through"
                                              : "font-medium",
                                          ),
                                          children: e.label,
                                        }),
                                        (0, r.jsxs)("span", {
                                          className: (0, d.cn)(
                                            "flex-shrink-0 text-xs px-2 py-0.5 rounded-full",
                                            a
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
                          !H.isJobReady &&
                            H.nextAction &&
                            (0, r.jsxs)("button", {
                              onClick: () => B(H.nextAction),
                              className:
                                "flex-shrink-0 w-full bg-primary text-primary-foreground hover:bg-primary/90 py-4 text-sm md:text-base font-medium transition-colors border-t min-h-[56px]",
                              children: [
                                "Complete next item (+",
                                (null === (e = H.nextAction) || void 0 === e
                                  ? void 0
                                  : e.points) || 5,
                                " points)",
                              ],
                            }),
                          H.isJobReady &&
                            (0, r.jsx)("div", {
                              className:
                                "flex-shrink-0 w-full py-4 px-4 border-t bg-primary/10 min-h-[56px]",
                              children: (0, r.jsxs)("div", {
                                className:
                                  "flex items-center gap-2 text-primary",
                                children: [
                                  (0, r.jsx)(ey.A, { className: "w-5 h-5" }),
                                  (0, r.jsx)("span", {
                                    className:
                                      "text-sm md:text-base font-medium",
                                    children:
                                      "Profile complete! Employers can find you now.",
                                  }),
                                ],
                              }),
                            }),
                        ],
                      }),
                  }),
                  (0, r.jsx)(v.N, {
                    children:
                      T &&
                      !h &&
                      (0, r.jsx)(o.P.div, {
                        initial: { opacity: 0, y: 10, scale: 0.95 },
                        animate: { opacity: 1, y: 0, scale: 1 },
                        exit: { opacity: 0, y: 10, scale: 0.95 },
                        transition: { duration: 0.3, type: "spring" },
                        className:
                          "absolute bottom-full right-0 mb-3 w-[280px] md:w-[320px] z-50",
                        children: (0, r.jsxs)("div", {
                          className:
                            "bg-[#5D5DE9] text-white p-4 rounded-xl shadow-2xl relative",
                          children: [
                            (0, r.jsx)("button", {
                              onClick: () => {
                                (z(!1),
                                  localStorage.setItem(
                                    "profileWidgetTooltipSeen",
                                    "true",
                                  ),
                                  L(!0));
                              },
                              className:
                                "absolute top-2 right-2 p-1 hover:bg-white/20 rounded-full transition-colors",
                              "aria-label": "Close tooltip",
                              children: (0, r.jsx)(eb.A, {
                                className: "h-4 w-4",
                              }),
                            }),
                            (0, r.jsxs)("div", {
                              className: "flex items-start gap-3",
                              children: [
                                (0, r.jsx)("div", {
                                  className:
                                    "flex-shrink-0 w-8 h-8 bg-white/20 rounded-full flex items-center justify-center",
                                  children: (0, r.jsx)(eg.A, {
                                    className: "h-4 w-4",
                                  }),
                                }),
                                (0, r.jsxs)("div", {
                                  className: "flex-1",
                                  children: [
                                    (0, r.jsx)("h4", {
                                      className: "font-semibold mb-1 text-sm",
                                      children: "Complete your profile!",
                                    }),
                                    (0, r.jsx)("p", {
                                      className:
                                        "text-xs leading-relaxed opacity-95",
                                      children:
                                        "Click here to see what's missing and boost your chances of getting hired.",
                                    }),
                                  ],
                                }),
                              ],
                            }),
                            (0, r.jsx)("div", {
                              className:
                                "absolute -bottom-2 right-6 w-4 h-4 bg-[#5D5DE9] transform rotate-45",
                            }),
                          ],
                        }),
                      }),
                  }),
                  (0, r.jsxs)(o.P.button, {
                    whileHover: { scale: 1.02 },
                    whileTap: { scale: 0.98 },
                    onClick: () => u(!h),
                    className: (0, d.cn)(
                      "flex items-center gap-2 md:gap-3 px-3 md:px-4 py-2 md:py-3 bg-background border shadow-lg rounded-full transition-all",
                      "hover:shadow-xl hover:border-primary/50 min-h-[52px]",
                      !I &&
                        !(null == H ? void 0 : H.isJobReady) &&
                        "animate-pulse",
                    ),
                    "aria-label": h
                      ? "Collapse profile completion"
                      : "Expand profile completion",
                    children: [
                      (0, r.jsxs)("div", {
                        className: "relative w-10 h-10",
                        children: [
                          (0, r.jsxs)("svg", {
                            className: "w-10 h-10 -rotate-90",
                            viewBox: "0 0 40 40",
                            children: [
                              (0, r.jsx)("circle", {
                                cx: "20",
                                cy: "20",
                                r: 17,
                                stroke: "currentColor",
                                strokeWidth: "3",
                                fill: "none",
                                className: "text-muted",
                              }),
                              (0, r.jsx)("circle", {
                                cx: "20",
                                cy: "20",
                                r: 17,
                                stroke: "currentColor",
                                strokeWidth: "3",
                                fill: "none",
                                strokeDasharray: Z,
                                strokeDashoffset: Q,
                                strokeLinecap: "round",
                                className:
                                  "text-primary transition-all duration-500",
                              }),
                            ],
                          }),
                          (0, r.jsx)("div", {
                            className:
                              "absolute inset-0 flex items-center justify-center",
                            children: (0, r.jsxs)("span", {
                              className: "text-[10px] md:text-[11px] font-bold",
                              children: [G, "%"],
                            }),
                          }),
                        ],
                      }),
                      (0, r.jsxs)("div", {
                        className: "flex items-center gap-1.5 md:gap-2",
                        children: [
                          (0, r.jsx)("span", {
                            className:
                              "text-xs md:text-sm font-medium whitespace-nowrap",
                            children: H.isJobReady
                              ? "Profile Complete!"
                              : "Profile",
                          }),
                          h
                            ? (0, r.jsx)(ej.A, {
                                className: "w-4 h-4 text-muted-foreground",
                              })
                            : (0, r.jsx)(ev.A, {
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
      var eG = t(6971),
        eV = t(31159);
      function eY(e) {
        let { open: s, onComplete: t } = e,
          i = (0, l.useRouter)(),
          [d, c] = (0, a.useState)(!1),
          u = async () => {
            c(!0);
            try {
              if (
                !(
                  await fetch("/api/student/onboarding-complete", {
                    method: "POST",
                  })
                ).ok
              )
                throw Error("Failed to complete onboarding");
              (i.push("/dashboard/profile"), t());
            } catch (e) {
              (console.error("Error completing onboarding:", e),
                n.oR.error("Failed to complete setup"));
            } finally {
              c(!1);
            }
          },
          p = async () => {
            c(!0);
            try {
              if (
                !(
                  await fetch("/api/student/onboarding-complete", {
                    method: "POST",
                  })
                ).ok
              )
                throw Error("Failed to complete onboarding");
              t();
            } catch (e) {
              (console.error("Error skipping onboarding:", e),
                n.oR.error("Failed to skip setup"));
            } finally {
              c(!1);
            }
          },
          f = [
            {
              icon: x.A,
              title: "Complete Your Profile",
              description:
                "Add your personal information, education, and work experience",
            },
            {
              icon: h.A,
              title: "Upload Documents",
              description:
                "Upload your CV, certificates, and other required documents",
            },
            {
              icon: m.A,
              title: "Get Verified",
              description:
                "Verify your identity and German language level to stand out",
            },
          ];
        return (0, r.jsx)(eP.lG, {
          open: s,
          onOpenChange: () => {},
          children: (0, r.jsxs)(eP.Cf, {
            className: "sm:max-w-lg",
            onInteractOutside: (e) => e.preventDefault(),
            children: [
              (0, r.jsxs)(eP.c7, {
                className: "text-center",
                children: [
                  (0, r.jsx)("div", {
                    className:
                      "mx-auto mb-4 w-16 h-16 bg-gradient-to-br from-[#5D5DE9] to-[#2C3340] rounded-2xl flex items-center justify-center",
                    children: (0, r.jsx)(eG.A, {
                      className: "w-8 h-8 text-white",
                    }),
                  }),
                  (0, r.jsx)(eP.L3, {
                    className: "text-2xl",
                    children: "Welcome to Azubi! \uD83C\uDF89",
                  }),
                  (0, r.jsx)(eP.rr, {
                    className: "text-base mt-2",
                    children:
                      'Apply to jobs 10x faster with AI! Complete your profile, then click "Apply with Help" on any job.',
                  }),
                ],
              }),
              (0, r.jsxs)("div", {
                className: "space-y-4 py-4",
                children: [
                  (0, r.jsx)("h3", {
                    className: "font-semibold text-sm text-muted-foreground",
                    children: "3 STEPS TO GET STARTED",
                  }),
                  f.map((e, s) =>
                    (0, r.jsxs)(
                      o.P.div,
                      {
                        initial: { opacity: 0, x: -20 },
                        animate: { opacity: 1, x: 0 },
                        transition: { delay: 0.1 * s },
                        className:
                          "flex items-start gap-3 p-3 rounded-lg bg-muted/30 border border-border/50",
                        children: [
                          (0, r.jsx)("div", {
                            className:
                              "flex-shrink-0 w-10 h-10 bg-primary/10 rounded-lg flex items-center justify-center",
                            children: (0, r.jsx)(e.icon, {
                              className: "w-5 h-5 text-primary",
                            }),
                          }),
                          (0, r.jsxs)("div", {
                            className: "flex-1 min-w-0",
                            children: [
                              (0, r.jsx)("h4", {
                                className: "font-medium text-sm mb-1",
                                children: e.title,
                              }),
                              (0, r.jsx)("p", {
                                className:
                                  "text-xs text-muted-foreground leading-relaxed",
                                children: e.description,
                              }),
                            ],
                          }),
                          (0, r.jsx)("div", {
                            className:
                              "flex-shrink-0 w-6 h-6 rounded-full border-2 border-muted-foreground/20 flex items-center justify-center",
                            children: (0, r.jsx)("span", {
                              className:
                                "text-xs font-semibold text-muted-foreground",
                              children: s + 1,
                            }),
                          }),
                        ],
                      },
                      s,
                    ),
                  ),
                ],
              }),
              (0, r.jsxs)("div", {
                className: "flex flex-col-reverse sm:flex-row gap-2 pt-4",
                children: [
                  (0, r.jsx)(w.$, {
                    type: "button",
                    variant: "outline",
                    onClick: p,
                    disabled: d,
                    className: "flex-1",
                    children: d
                      ? (0, r.jsxs)(r.Fragment, {
                          children: [
                            (0, r.jsx)(eV.A, {
                              className: "w-4 h-4 mr-2 animate-spin",
                            }),
                            "Loading...",
                          ],
                        })
                      : "I'll do this later",
                  }),
                  (0, r.jsx)(w.$, {
                    type: "button",
                    onClick: u,
                    disabled: d,
                    className:
                      "flex-1 bg-gradient-to-r from-[#5D5DE9] to-[#2C3340] hover:opacity-90",
                    children: d
                      ? (0, r.jsxs)(r.Fragment, {
                          children: [
                            (0, r.jsx)(eV.A, {
                              className: "w-4 h-4 mr-2 animate-spin",
                            }),
                            "Loading...",
                          ],
                        })
                      : (0, r.jsxs)(r.Fragment, {
                          children: [
                            (0, r.jsx)(x.A, { className: "w-4 h-4 mr-2" }),
                            "Complete My Profile",
                          ],
                        }),
                  }),
                ],
              }),
              (0, r.jsx)("p", {
                className: "text-xs text-center text-muted-foreground mt-4",
                children:
                  "Complete profiles get better AI job matches. Then apply 10x faster!",
              }),
            ],
          }),
        });
      }
      var eB = t(58630);
      function eJ(e) {
        let { children: s } = e,
          [t, f] = (0, a.useState)(null),
          [y, j] = (0, a.useState)(null),
          [v, N] = (0, a.useState)(null),
          [k, A] = (0, a.useState)(null),
          [C, _] = (0, a.useState)(void 0),
          [E, P] = (0, a.useState)(!1),
          [I, L] = (0, a.useState)(!1),
          [O, R] = (0, a.useState)(!1),
          [K, W] = (0, a.useState)(!1),
          [D, M] = (0, a.useState)(!1),
          [U, H] = (0, a.useState)(!1),
          [G, V] = (0, a.useState)(!1),
          [Y, B] = (0, a.useState)(!1),
          J = (0, l.useRouter)(),
          $ = (0, l.usePathname)(),
          q = (0, i.createClientComponentClient)(),
          { isAdmin: Z, isLoading: X } = (0, F.b)();
        (0, a.useEffect)(() => {
          let e = !0,
            s = () => {
              P(window.innerWidth < 768);
            },
            t = () => {
              W(window.scrollY > 10);
            };
          return (
            (async () => {
              if (!U)
                try {
                  let {
                    data: { session: s },
                    error: t,
                  } = await q.auth.getSession();
                  if (!e) return;
                  if (t || !s) {
                    (H(!0), J.push("/auth"));
                    return;
                  }
                  let r = "connectivity_issues_".concat(s.user.id),
                    a = "true" === sessionStorage.getItem(r),
                    i = !1,
                    l = !1;
                  try {
                    i = await (0, eB.Ii)(s.user.id, ["student", "admin"], !0);
                  } catch (e) {
                    (console.error(
                      "Role check failed (likely connectivity issue):",
                      e,
                    ),
                      (l = !0));
                  }
                  if (!e) return;
                  if (l || (a && !i))
                    (console.warn(
                      "Role check failed or connectivity issues detected - allowing dashboard access",
                    ),
                      sessionStorage.setItem(r, "true"),
                      n.oR.error(
                        "Connection issue detected. Some features may be limited.",
                      ));
                  else if (i) sessionStorage.removeItem(r);
                  else {
                    sessionStorage.removeItem(r);
                    let e = !1;
                    try {
                      e = await (0, eB.hf)(s.user.id, "employer");
                    } catch (e) {}
                    if (e) {
                      (H(!0), J.push("/arbeitgeber/dashboard"));
                      return;
                    }
                    let t = "role_assign_attempts_".concat(s.user.id),
                      a = parseInt(sessionStorage.getItem(t) || "0", 10);
                    if (a >= 3)
                      (console.warn(
                        "Max role assignment attempts reached - allowing dashboard access",
                      ),
                        n.oR.error(
                          "Some features may be limited. Please try again later or contact support.",
                        ),
                        setTimeout(() => sessionStorage.removeItem(t), 3e5));
                    else
                      try {
                        (
                          await fetch("/api/auth/assign-role", {
                            method: "POST",
                            headers: { "Content-Type": "application/json" },
                            body: JSON.stringify({
                              userId: s.user.id,
                              role: "student",
                            }),
                          })
                        ).ok
                          ? sessionStorage.removeItem(t)
                          : (sessionStorage.setItem(t, String(a + 1)),
                            a + 1 >= 3
                              ? (console.warn(
                                  "Role assignment failed - allowing dashboard access anyway",
                                ),
                                n.oR.error(
                                  "Some features may be limited. Please refresh the page later.",
                                ))
                              : (console.error(
                                  "Failed to auto-assign role, will retry on next load",
                                ),
                                n.oR.error(
                                  "Connection issue detected. Some features may be limited.",
                                )));
                      } catch (e) {
                        (console.error("Error auto-assigning role:", e),
                          sessionStorage.setItem(t, String(a + 1)),
                          sessionStorage.setItem(r, "true"),
                          n.oR.error(
                            "Connection issue detected. Some features may be limited.",
                          ));
                      }
                  }
                  (f(s.user.email || null), A(s.user.id));
                  let { data: o, error: d } = await q
                    .from("user_profiles")
                    .select(
                      "\n          full_name,\n          avatar_url,\n          is_onboarded,\n          preferred_language\n        ",
                    )
                    .eq("user_id", s.user.id)
                    .is("deleted_at", null)
                    .single();
                  (!d &&
                    o &&
                    (j(o.full_name),
                    N(o.avatar_url),
                    o.preferred_language && _(o.preferred_language),
                    !1 === o.is_onboarded && M(!0)),
                    J.prefetch("/dashboard/jobs"),
                    J.prefetch("/dashboard/applications"),
                    J.prefetch("/dashboard/german"),
                    J.prefetch("/dashboard/interview"),
                    J.prefetch("/dashboard/video-studio"),
                    J.prefetch("/dashboard/culture"),
                    J.prefetch("/dashboard/cv-builder"),
                    J.prefetch("/dashboard/documents"),
                    J.prefetch("/dashboard/tools/eligibility"),
                    J.prefetch("/dashboard/tools/timeline"),
                    J.prefetch("/dashboard/tools/cover-letter"),
                    J.prefetch("/dashboard/profile"),
                    J.prefetch("/dashboard/settings"));
                } catch (s) {
                  (console.error("Error in checkUser:", s),
                    e && !U && (H(!0), J.push("/auth")));
                }
            })(),
            s(),
            t(),
            window.addEventListener("resize", s),
            window.addEventListener("scroll", t),
            () => {
              ((e = !1),
                window.removeEventListener("resize", s),
                window.removeEventListener("scroll", t));
            }
          );
        }, []);
        let ee = async () => {
            try {
              (B(!0),
                V(!1),
                n.oR.promise(
                  new Promise(async (e, s) => {
                    try {
                      (J.push("/"),
                        setTimeout(async () => {
                          (await q.auth.signOut(), e(!0));
                        }, 100));
                    } catch (e) {
                      s(e);
                    }
                  }),
                  {
                    loading: "Signing out...",
                    success: "Signed out successfully",
                    error: "Error signing out",
                  },
                ));
            } catch (e) {
              console.error("Error signing out:", e);
            } finally {
              B(!1);
            }
          },
          es = () => {
            L(!I);
          };
        return t
          ? (0, r.jsx)(T.SO, {
              initialLanguage: C,
              userId: k || void 0,
              children: (0, r.jsxs)("div", {
                className: "relative min-h-screen bg-beige overflow-x-hidden",
                children: [
                  (0, r.jsx)(n.l$, { position: "top-center" }),
                  (0, r.jsx)(eY, { open: D, onComplete: () => M(!1) }),
                  (0, r.jsx)(ed, {
                    email: t,
                    name: y,
                    avatarUrl: v,
                    pathname: $ || "",
                    isMobile: E,
                    isCollapsed: O,
                    isOpen: I,
                    toggleMobileMenu: es,
                    toggleCollapse: () => {
                      R(!O);
                    },
                    handleSignOut: ee,
                  }),
                  (0, r.jsx)(o.P.main, {
                    layout: !0,
                    className: (0, d.cn)(
                      "flex-1 transition-all duration-300",
                      "h-screen max-w-full flex flex-col",
                      E ? "ml-0" : O ? "ml-[74px]" : "ml-[250px]",
                      "animate-appear relative",
                      !E && "mt-2.5 mr-2.5",
                    ),
                    children: (0, r.jsxs)("div", {
                      className: (0, d.cn)(
                        "h-full bg-white max-w-full flex flex-col",
                        "relative z-20",
                        !E && "rounded-tl-3xl rounded-tr-3xl",
                      ),
                      children: [
                        E &&
                          (0, r.jsx)("div", {
                            className: (0, d.cn)(
                              "fixed top-0 left-0 right-0 z-40 bg-white/95 backdrop-blur-md border-b border-border/30",
                              "transition-shadow duration-300",
                              K && "shadow-md",
                            ),
                            children: (0, r.jsxs)("div", {
                              className:
                                "flex items-center justify-between h-14 px-4",
                              children: [
                                (0, r.jsx)(w.$, {
                                  variant: "ghost",
                                  size: "icon",
                                  onClick: es,
                                  className:
                                    "min-h-[44px] min-w-[44px] touch-target hover:bg-accent",
                                  "aria-label": "Toggle menu",
                                  children: (0, r.jsx)("svg", {
                                    className: "h-6 w-6 text-secondary",
                                    fill: "none",
                                    stroke: "currentColor",
                                    viewBox: "0 0 24 24",
                                    children: (0, r.jsx)("path", {
                                      strokeLinecap: "round",
                                      strokeLinejoin: "round",
                                      strokeWidth: 2,
                                      d: I
                                        ? "M6 18L18 6M6 6l12 12"
                                        : "M4 6h16M4 12h16M4 18h16",
                                    }),
                                  }),
                                }),
                                (0, r.jsx)(Q.Logo, {
                                  iconSize: "md",
                                  showText: !0,
                                  locale: "en",
                                }),
                                (0, r.jsxs)(g.rI, {
                                  open: G,
                                  onOpenChange: V,
                                  children: [
                                    (0, r.jsx)(g.ty, {
                                      asChild: !0,
                                      children: (0, r.jsx)("button", {
                                        className:
                                          "group relative min-w-[36px] min-h-[36px] rounded-lg hover:bg-beige transition-all duration-200 focus:outline-none focus-visible:ring-2 focus-visible:ring-primary/20 flex items-center justify-center touch-target",
                                        children: (0, r.jsxs)("div", {
                                          className: "relative h-9 w-9",
                                          children: [
                                            (0, r.jsx)("div", {
                                              className:
                                                "h-full w-full overflow-hidden rounded-lg ring-2 ring-primary/20 shadow-sm group-hover:shadow-md group-hover:ring-primary/40 transition-all duration-200",
                                              children: (0, r.jsx)("img", {
                                                src: (0, c.T)(v, y, t),
                                                alt: "Profile",
                                                className:
                                                  "w-full h-full object-cover",
                                              }),
                                            }),
                                            (0, r.jsx)("div", {
                                              className:
                                                "absolute -bottom-0.5 -right-0.5 h-2.5 w-2.5 rounded-full bg-secondary border-2 border-white animate-pulse",
                                            }),
                                          ],
                                        }),
                                      }),
                                    }),
                                    (0, r.jsxs)(g.SQ, {
                                      align: "end",
                                      className:
                                        "w-72 p-2 mt-2 rounded-xl border-border/50 bg-background/95 backdrop-blur-xl shadow-2xl",
                                      sideOffset: 8,
                                      children: [
                                        (0, r.jsx)("div", {
                                          className: "p-4 pb-3",
                                          children: (0, r.jsxs)("div", {
                                            className: "flex items-start gap-3",
                                            children: [
                                              (0, r.jsx)("div", {
                                                className: "relative h-11 w-11",
                                                children: (0, r.jsx)("div", {
                                                  className:
                                                    "h-full w-full overflow-hidden rounded-lg ring-2 ring-primary/10 shadow-md",
                                                  children: (0, r.jsx)("img", {
                                                    src: (0, c.T)(v, y, t),
                                                    alt: "Profile",
                                                    className:
                                                      "w-full h-full object-cover",
                                                  }),
                                                }),
                                              }),
                                              (0, r.jsxs)("div", {
                                                className: "flex-1 min-w-0",
                                                children: [
                                                  (0, r.jsxs)("div", {
                                                    className:
                                                      "flex items-center gap-2",
                                                    children: [
                                                      (0, r.jsx)("p", {
                                                        className:
                                                          "font-semibold text-sm text-foreground truncate",
                                                        children:
                                                          y ||
                                                          (null == t
                                                            ? void 0
                                                            : t.split(
                                                                "@",
                                                              )[0]) ||
                                                          "User",
                                                      }),
                                                      Z &&
                                                        (0, r.jsx)(S.E, {
                                                          variant: "default",
                                                          className:
                                                            "text-xs bg-primary",
                                                          children: "Admin",
                                                        }),
                                                    ],
                                                  }),
                                                  (0, r.jsx)("p", {
                                                    className:
                                                      "text-xs text-muted-foreground truncate mt-0.5",
                                                    children: t,
                                                  }),
                                                ],
                                              }),
                                            ],
                                          }),
                                        }),
                                        (0, r.jsx)("div", {
                                          className:
                                            "h-px bg-gradient-to-r from-transparent via-border/50 to-transparent mb-1",
                                        }),
                                        (0, r.jsxs)("div", {
                                          className: "p-1 space-y-1.5",
                                          children: [
                                            Z &&
                                              (0, r.jsxs)(b(), {
                                                href: "/admin",
                                                onClick: () => V(!1),
                                                className: (0, d.cn)(
                                                  "group flex items-center py-2 px-4 rounded-lg text-sm font-medium transition-all relative overflow-hidden",
                                                  (
                                                    null == $
                                                      ? void 0
                                                      : $.startsWith("/admin")
                                                  )
                                                    ? "bg-primary/10 text-primary border border-primary/20 shadow-inner"
                                                    : "hover:bg-accent/50 border-0",
                                                ),
                                                children: [
                                                  (0, r.jsx)(m.A, {
                                                    size: 18,
                                                    className: (0, d.cn)(
                                                      "transition-all flex-shrink-0 mr-2.5",
                                                      (
                                                        null == $
                                                          ? void 0
                                                          : $.startsWith(
                                                              "/admin",
                                                            )
                                                      )
                                                        ? "text-primary"
                                                        : "text-secondary/70 group-hover:text-primary",
                                                    ),
                                                  }),
                                                  (0, r.jsx)("span", {
                                                    className: "text-sm",
                                                    children: "Admin Panel",
                                                  }),
                                                  (0, r.jsx)(S.E, {
                                                    variant: "default",
                                                    className:
                                                      "ml-auto text-xs bg-primary",
                                                    children: "Admin",
                                                  }),
                                                ],
                                              }),
                                            (0, r.jsxs)(b(), {
                                              href: "/dashboard/profile",
                                              onClick: () => V(!1),
                                              className: (0, d.cn)(
                                                "group flex items-center py-2 px-4 rounded-lg text-sm font-medium transition-all relative overflow-hidden",
                                                "/dashboard/profile" === $
                                                  ? "bg-primary/10 text-primary border border-primary/20 shadow-inner"
                                                  : "hover:bg-accent/50 border-0",
                                              ),
                                              children: [
                                                (0, r.jsx)(x.A, {
                                                  size: 18,
                                                  className: (0, d.cn)(
                                                    "transition-all flex-shrink-0 mr-2.5",
                                                    "/dashboard/profile" === $
                                                      ? "text-primary"
                                                      : "text-secondary/70 group-hover:text-primary",
                                                  ),
                                                }),
                                                (0, r.jsx)("span", {
                                                  className: "text-sm",
                                                  children: "Profile",
                                                }),
                                              ],
                                            }),
                                            (0, r.jsxs)(b(), {
                                              href: "/dashboard/documents",
                                              onClick: () => V(!1),
                                              className: (0, d.cn)(
                                                "group flex items-center py-2 px-4 rounded-lg text-sm font-medium transition-all relative overflow-hidden",
                                                (
                                                  null == $
                                                    ? void 0
                                                    : $.startsWith(
                                                        "/dashboard/documents",
                                                      )
                                                )
                                                  ? "bg-primary/10 text-primary border border-primary/20 shadow-inner"
                                                  : "hover:bg-accent/50 border-0",
                                              ),
                                              children: [
                                                (0, r.jsx)(h.A, {
                                                  size: 18,
                                                  className: (0, d.cn)(
                                                    "transition-all flex-shrink-0 mr-2.5",
                                                    (
                                                      null == $
                                                        ? void 0
                                                        : $.startsWith(
                                                            "/dashboard/documents",
                                                          )
                                                    )
                                                      ? "text-primary"
                                                      : "text-secondary/70 group-hover:text-primary",
                                                  ),
                                                }),
                                                (0, r.jsx)("span", {
                                                  className: "text-sm",
                                                  children: "Documents",
                                                }),
                                              ],
                                            }),
                                            (0, r.jsxs)(b(), {
                                              href: "/dashboard/settings",
                                              onClick: () => V(!1),
                                              className: (0, d.cn)(
                                                "group flex items-center py-2 px-4 rounded-lg text-sm font-medium transition-all relative overflow-hidden",
                                                "/dashboard/settings" === $
                                                  ? "bg-primary/10 text-primary border border-primary/20 shadow-inner"
                                                  : "hover:bg-accent/50 border-0",
                                              ),
                                              children: [
                                                (0, r.jsx)(u.A, {
                                                  size: 18,
                                                  className: (0, d.cn)(
                                                    "transition-all flex-shrink-0 mr-2.5",
                                                    "/dashboard/settings" === $
                                                      ? "text-primary"
                                                      : "text-secondary/70 group-hover:text-primary",
                                                  ),
                                                }),
                                                (0, r.jsx)("span", {
                                                  className: "text-sm",
                                                  children: "Settings",
                                                }),
                                              ],
                                            }),
                                          ],
                                        }),
                                        (0, r.jsx)("div", {
                                          className:
                                            "h-px bg-gradient-to-r from-transparent via-border/50 to-transparent my-1",
                                        }),
                                        (0, r.jsx)("div", {
                                          className: "p-1",
                                          children: (0, r.jsxs)("button", {
                                            onClick: ee,
                                            disabled: Y,
                                            className:
                                              "group w-full flex items-center py-2 px-4 rounded-lg text-sm font-medium transition-all hover:bg-rose-500/10 relative overflow-hidden disabled:opacity-50 disabled:cursor-not-allowed",
                                            children: [
                                              (0, r.jsx)(p.A, {
                                                size: 18,
                                                className:
                                                  "transition-all flex-shrink-0 mr-2.5 text-rose-500",
                                              }),
                                              (0, r.jsx)("span", {
                                                className:
                                                  "text-sm text-rose-500",
                                                children: "Sign out",
                                              }),
                                            ],
                                          }),
                                        }),
                                      ],
                                    }),
                                  ],
                                }),
                              ],
                            }),
                          }),
                        !E &&
                          (0, r.jsx)("div", {
                            className: (0, d.cn)(
                              "flex-shrink-0 bg-white/95 backdrop-blur-md rounded-tl-3xl rounded-tr-3xl border-b border-border/30",
                              "transition-shadow duration-300",
                              K && "shadow-md",
                            ),
                            children: (0, r.jsx)("div", {
                              className:
                                "flex items-center justify-end h-16 px-6 lg:px-8",
                              children: (0, r.jsx)(z, {
                                email: t,
                                name: y,
                                avatarUrl: v,
                                scrolled: K,
                                isMobile: !1,
                                isCollapsed: O,
                                isOpen: I,
                                toggleMobileMenu: es,
                              }),
                            }),
                          }),
                        (0, r.jsxs)("div", {
                          className: (0, d.cn)(
                            "flex-1 overflow-y-auto",
                            E && "pt-20",
                          ),
                          children: [
                            (0, r.jsx)("div", {
                              className: "p-6 md:p-8",
                              children: (0, r.jsx)("div", {
                                className: "max-w-7xl mx-auto w-full",
                                children: s,
                              }),
                            }),
                            (0, r.jsx)(ec.m, { scrolled: K }),
                          ],
                        }),
                      ],
                    }),
                  }),
                  (0, r.jsxs)("div", {
                    className: "hidden",
                    children: [
                      (0, r.jsx)(b(), {
                        href: "/dashboard/jobs",
                        prefetch: !0,
                        children: "Jobs",
                      }),
                      (0, r.jsx)(b(), {
                        href: "/dashboard/applications",
                        prefetch: !0,
                        children: "Applications",
                      }),
                      (0, r.jsx)(b(), {
                        href: "/dashboard/german",
                        prefetch: !0,
                        children: "German",
                      }),
                      (0, r.jsx)(b(), {
                        href: "/dashboard/interview",
                        prefetch: !0,
                        children: "Interview",
                      }),
                      (0, r.jsx)(b(), {
                        href: "/dashboard/video-studio",
                        prefetch: !0,
                        children: "Video Studio",
                      }),
                      (0, r.jsx)(b(), {
                        href: "/dashboard/culture",
                        prefetch: !0,
                        children: "Culture",
                      }),
                      (0, r.jsx)(b(), {
                        href: "/dashboard/cv-builder",
                        prefetch: !0,
                        children: "CV Builder",
                      }),
                      (0, r.jsx)(b(), {
                        href: "/dashboard/documents",
                        prefetch: !0,
                        children: "Documents",
                      }),
                      (0, r.jsx)(b(), {
                        href: "/dashboard/tools/eligibility",
                        prefetch: !0,
                        children: "Eligibility",
                      }),
                      (0, r.jsx)(b(), {
                        href: "/dashboard/tools/timeline",
                        prefetch: !0,
                        children: "Timeline",
                      }),
                      (0, r.jsx)(b(), {
                        href: "/dashboard/tools/cover-letter",
                        prefetch: !0,
                        children: "Cover Letter",
                      }),
                      (0, r.jsx)(b(), {
                        href: "/dashboard/german/flashcards",
                        prefetch: !0,
                        children: "Flashcards",
                      }),
                      (0, r.jsx)(b(), {
                        href: "/dashboard/culture/quiz",
                        prefetch: !0,
                        children: "Quiz",
                      }),
                      (0, r.jsx)(b(), {
                        href: "/dashboard/profile",
                        prefetch: !0,
                        children: "Profile",
                      }),
                      (0, r.jsx)(b(), {
                        href: "/dashboard/settings",
                        prefetch: !0,
                        children: "Settings",
                      }),
                      (0, r.jsx)(b(), {
                        href: "/dashboard/help",
                        prefetch: !0,
                        children: "Help",
                      }),
                    ],
                  }),
                  (0, r.jsx)(eH, {}),
                ],
              }),
            })
          : null;
      }
    },
  },
  (e) => {
    var s = (s) => e((e.s = s));
    (e.O(0, [46593, 36209, 84121, 72076, 77358], () => s(39522)),
      (_N_E = e.O()));
  },
]);
